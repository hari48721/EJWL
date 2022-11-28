<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

  function login($username, $password)
  {
   $this->db->select('id, username, password');
   $this->db->from('users');
   $this->db->where('username', $username);
   $this->db->where('password', $password);
   $this->db->limit(1);

   $query = $this->db-> get();

   if($query->num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
 
function load_data()
 {
  $this->db->order_by('id', 'ASC');
  $query = $this->db->get('acc_master');
  return $query->result_array();
 }
 function update($data, $id)
 {
  $this->db->where('id', $id);
  $this->db->update('acc_master', $data);
 }
 function iteminsert($data){
  $session_data = $this->session->userdata('logged_in');
$data['username'] = $session_data['username'];

$count = count($data['itemname']);
    for($i = 0; $i<$count; $i++){ 
      $entries[] = array( 
        'itname'=>$data['itemname'][$i],
        'wgt'=>$data['wgt'][$i],
        'itemno'=>$this->input->post('itemno'),
        'name' => $this->input->post('iname'),
      );
    }
$da= array(
  'itemname' => $this->input->post('iname'),
  'itno' => $this->input->post('itemno'),
  'desc' => $this->input->post('desc'),
  'desc1' => $this->input->post('desc1'),
  'desc2' => $this->input->post('desc2'),
  'desc3' => $this->input->post('desc3'),
  'gst' => $this->input->post('gst'),
  'hsnno' => $this->input->post('hsnno'),
  'itemtype'=>$this->input->post('prd')
  
);
$this->db->insert_batch('item_type', $entries);  
$this->db->insert('item_master',$da);
 $this->session->set_flashdata('Add', 'Successfully added the Item');
redirect('Account_Master/Item_Master',"refresh");
 }
 function updateitem($data){
  $session_data = $this->session->userdata('logged_in');
$data['username'] = $session_data['username'];
$itemno = $this->input->post('itemno');
$count = count($data['itemname']);
    for($i = 0; $i<$count; $i++){ 
      $entries[] = array( 
        'itname'=>$data['itemname'][$i],
        'wgt'=>$data['wgt'][$i],
        'itemno'=>$this->input->post('itemno'),
        'name' => $this->input->post('iname'),
      );
    }
$da= array(
  'itemname' => $this->input->post('iname'),
  'itno' => $this->input->post('itemno'),
  'desc' => $this->input->post('desc'),
  'desc1' => $this->input->post('desc1'),
  'desc2' => $this->input->post('desc2'),
  'desc3' => $this->input->post('desc3'),
  'gst' => $this->input->post('gst'),
  'hsnno' => $this->input->post('hsnno'),
  'itemtype'=>$this->input->post('prd')
  
);
$this->db->where('itemno',$itemno);
$this->db->delete('item_type');
$this->db->insert_batch('item_type', $entries); 
$this->db->where('itno',$itemno);
$this->db->update('item_master',$da); 
 $this->session->set_flashdata('Add', 'Successfully Updated the Item');
redirect('Account_Master/Item_Master',"refresh");
 }
 function batchinsert($data){
  $session_data = $this->session->userdata('logged_in');
  $data['username'] = $session_data['username'];
  $LDate = $this->input->post('billdate');
  $date = str_replace('/', '-', $LDate);
  $newDate = date("Y-m-d", strtotime($date));

  $Date = $this->input->post('accdate');
  $date = str_replace('/', '-', $Date);
  $Date = date("Y-m-d", strtotime($date));

  $check = isset($_POST['gst']) && in_array($_POST['gst'], ['Y', 'N']) ? $_POST['gst'] : '';
  $check1 = isset($_POST['igst']) && in_array($_POST['igst'], ['Y', 'N']) ? $_POST['igst'] : '';

  $count = count($data['itemname']);
    for($i = 0; $i<$count; $i++){ 
      $entries[] = array( 
        'sno'=>$data['sno'][$i],
        'rate'=>$data['rate'][$i],
        'itemname'=>$data['itemname'][$i],
        'qty'=>$data['qty'][$i],
        'unit'=>$data['unit'][$i],
        'total'=>$data['total'][$i],
        'vno'=>$this->input->post('vno'),
        'billdate'=>$newDate,
      );
    }
  $da=array(
        'vno' => $this->input->post('vno'),
        'billdate'=>$newDate,
        'accdate'=>$Date,
        'billno'=>$this->input->post('billno'),
        'paymode'=>$this->input->post('paymode'),
        'gst'=>$check,
        'igst'=>$check1,
        'supplier'=>$this->input->post('supplier'),
        'purcacc'=>$this->input->post('purcacc'),
        'total'=>$this->input->post('Total'),
        'others'=>$this->input->post('others'),
        'gstper'=>$this->input->post('gstper'),
        'sgstper'=>$this->input->post('sgstper'),
        'cgstper'=>$this->input->post('cgstper'),
        'igstper'=>$this->input->post('igstper'),
        'gstamt'=>$this->input->post('gstamt'),
        'billamt'=>$this->input->post('billamt'),
        'address'=>$this->input->post('address')
    );
    $this->db->insert_batch('purchaseitem', $entries);
    $this->db->insert('purchasebill',$da);
    $this->session->set_flashdata('Add', 'Successfully added the Voucherno');
    redirect('Inventory','refresh');

 }
 function batchupdate($data){
  $session_data = $this->session->userdata('logged_in');
  $data['username'] = $session_data['username'];
  $LDate = $this->input->post('billdate');
  $date = str_replace('/', '-', $LDate);
  $newDate = date("Y-m-d", strtotime($date));

  $Date = $this->input->post('accdate');
  $date = str_replace('/', '-', $Date);
  $Date = date("Y-m-d", strtotime($date));
  $vno = $this->input->post('vno');

  $check = isset($_POST['gst']) && in_array($_POST['gst'], ['Y', 'N']) ? $_POST['gst'] : '';
  $check1 = isset($_POST['igst']) && in_array($_POST['igst'], ['Y', 'N']) ? $_POST['igst'] : '';

  $count = count($data['itemname']);
    for($i = 0; $i<$count; $i++){ 
      $entries[] = array( 
        'sno'=>$data['sno'][$i],
        'rate'=>$data['rate'][$i],
        'itemname'=>$data['itemname'][$i],
        'qty'=>$data['qty'][$i],
        'unit'=>$data['unit'][$i],
        'total'=>$data['total'][$i],
        'vno'=>$this->input->post('vno'),
        'billdate'=>$newDate,
      );
    }
  $da=array(
        'vno' => $this->input->post('vno'),
        'billdate'=>$newDate,
        'accdate'=>$Date,
        'billno'=>$this->input->post('billno'),
        'paymode'=>$this->input->post('paymode'),
        'gst'=>$check,
        'igst'=>$check1,
        'supplier'=>$this->input->post('supplier'),
        'purcacc'=>$this->input->post('purcacc'),
        'total'=>$this->input->post('Total'),
        'others'=>$this->input->post('others'),
        'gstper'=>$this->input->post('gstper'),
        'sgstper'=>$this->input->post('sgstper'),
        'cgstper'=>$this->input->post('cgstper'),
        'igstper'=>$this->input->post('igstper'),
        'gstamt'=>$this->input->post('gstamt'),
        'billamt'=>$this->input->post('billamt'),
        'address'=>$this->input->post('address')
    );
    $this->db->where('vno',$vno);
    $this->db->delete('purchaseitem');
    $this->db->insert_batch('purchaseitem', $entries);
    $this->db->where('vno',$vno);
    $this->db->update('purchasebill',$da);
    $this->session->set_flashdata('Add', 'Successfully updated the Voucherno');
    redirect('Inventory','refresh');

 }
 function Order_Insert($data){
  $session_data = $this->session->userdata('logged_in');
  $data['username'] = $session_data['username'];
  $LDate = $this->input->post('orderdate');
  $date = str_replace('/', '-', $LDate);
  $newDate = date("Y-m-d", strtotime($date));

  $Date = $this->input->post('podate');
  $date = str_replace('/', '-', $Date);
  $Date = date("Y-m-d", strtotime($date));

  $check = isset($_POST['gst']) && in_array($_POST['gst'], ['Y', 'N']) ? $_POST['gst'] : '';
  $check1 = isset($_POST['igst']) && in_array($_POST['igst'], ['Y', 'N']) ? $_POST['igst'] : '';

  $count = count($data['itemname']);
    for($i = 0; $i<$count; $i++){ 
      $entries[] = array( 
        'sno'=>$data['sno'][$i],
        'rate'=>$data['rate'][$i],
        'itname'=>$data['itemname'][$i],
        'qty'=>$data['qty'][$i],
        'tot'=>$data['total'][$i],
        'orderno'=>$this->input->post('orderno'),
         'orderdate'=>$newDate,
      );
    }
  $da=array(
        'orderno' => $this->input->post('orderno'),
        'orderdate'=>$newDate,
        'podate'=>$Date,
        'pono'=>$this->input->post('pono'),
        'gst'=>$check,
        'igst'=>$check1,
        'pname'=>$this->input->post('pname'),
        'total'=>$this->input->post('Total'),
        'totqty'=>$this->input->post('totqty'),
        'gstper'=>$this->input->post('gstper'),
        'sgstper'=>$this->input->post('sgstper'),
        'cgstper'=>$this->input->post('cgstper'),
        'igstper'=>$this->input->post('igstper'),
        'gstamt'=>$this->input->post('gstamt'),
        'billamt'=>$this->input->post('billamt'),
        'addrs'=>$this->input->post('address')
    );
    $this->db->insert_batch('order_item', $entries);
    $this->db->insert('order_entry',$da);
    $this->session->set_flashdata('Add', 'Successfully added the Orderno');
    redirect('Inventory/Order_Entry','refresh');
 }
 function Orderupdate($data){
  $session_data = $this->session->userdata('logged_in');
  $data['username'] = $session_data['username'];
 $LDate = $this->input->post('orderdate');
  $date = str_replace('/', '-', $LDate);
  $newDate = date("Y-m-d", strtotime($date));

  $Date = $this->input->post('podate');
  $date = str_replace('/', '-', $Date);
  $Date = date("Y-m-d", strtotime($date));

  $check = isset($_POST['gst']) && in_array($_POST['gst'], ['Y', 'N']) ? $_POST['gst'] : '';
  $check1 = isset($_POST['igst']) && in_array($_POST['igst'], ['Y', 'N']) ? $_POST['igst'] : '';
   $orderno = $this->input->post('orderno');

  $count = count($data['itemname']);
    for($i = 0; $i<$count; $i++){ 
      $entries[] = array( 
        'sno'=>$data['sno'][$i],
        'rate'=>$data['rate'][$i],
        'itname'=>$data['itemname'][$i],
        'qty'=>$data['qty'][$i],
        'tot'=>$data['total'][$i],
        'orderno'=>$this->input->post('orderno'),
         'orderdate'=>$newDate,
      );
    }
  $da=array(
        'orderno' => $this->input->post('orderno'),
        'orderdate'=>$newDate,
        'podate'=>$Date,
        'pono'=>$this->input->post('pono'),
        'gst'=>$check,
        'igst'=>$check1,
        'pname'=>$this->input->post('pname'),
        'total'=>$this->input->post('Total'),
        'totqty'=>$this->input->post('totqty'),
        'gstper'=>$this->input->post('gstper'),
        'sgstper'=>$this->input->post('sgstper'),
        'cgstper'=>$this->input->post('cgstper'),
        'igstper'=>$this->input->post('igstper'),
        'gstamt'=>$this->input->post('gstamt'),
        'billamt'=>$this->input->post('billamt'),
        'addrs'=>$this->input->post('address')
    );
    $this->db->where('orderno',$orderno);
    $this->db->delete('order_item');
    $this->db->insert_batch('order_item', $entries);
    $this->db->where('orderno',$orderno);
    $this->db->update('order_entry',$da);
    $this->session->set_flashdata('Add', 'Successfully updated the Orderno');
    redirect('Inventory/Order_Entry','refresh');

 }
 function fetch_item($orderno){
 $this->db->where("orderno",$orderno);
  $this->db->select('*');
  $this->db->join('item_master', 'item_master.id = order_item.itname', 'left');
  $this->db->from('order_item');
  $query_result = $this->db->get()->result();
  $output = '<center><table class="table table-bordered table-striped table-xxs" id="tb2">  
        
  <tbody>';            

      if($query_result !='false'){
       $i=0; 

foreach ($query_result as $key => $value) { 

$output .='<tr> 
<td><a href="javascript:void(0);"><span class="glyphicon glyphicon-remove" id="remove"></span></a></td>
<td><input style="width:50px" name="sno[]" type="text" class="form-control input-xs" value="'.$value->sno.'" ></td> 
<td><input style="width:250px" name="itemname[]" type="text" class="form-control input-xs" value="'.$value->itemname.'" ></td> 
<td><input style="width:80px" name="qty[]" type="text" class="form-control input-xs qty" value="'.$value->qty.'" id="qty_'.$i.'" onchange="calculate('.$i.')"></td> 
<td><input style="width:90px" name="wgt[]" type="text" class="form-control input-xs" > </td> 
<td><input style="width:150px" name="desc[]" type="text" class="form-control input-xs" > </td> 
<td><a href="javascript:void(0);" style="font-size:18px;" class="addMore" title="Add More Person"><span class="glyphicon glyphicon-plus"></td>
</tr>'; 
$i++;
}
$output .="</tbody>
</table></center>";
echo $output;
}
}
function DC_Insert($data){
 $session_data = $this->session->userdata('logged_in');
  $data['username'] = $session_data['username'];
  $LDate = $this->input->post('dcdate');
  $date = str_replace('/', '-', $LDate);
  $newDate = date("Y-m-d", strtotime($date));

  $Date = $this->input->post('podate');
  $date = str_replace('/', '-', $Date);
  $Date = date("Y-m-d", strtotime($date));

$count = count($data['itemname']);
    for($i = 0; $i<$count; $i++){ 
      $entries[] = array( 
        'sno'=>$data['sno'][$i],
        'itemname'=>$data['itemname'][$i],
        'qty'=>$data['qty'][$i],
        'wgt'=>$data['wgt'][$i],
        'des'=>$data['desc'][$i],
        'dcno'=>$this->input->post('dcno'),
        'dcdate'=>$newDate,
      );
    }
  $da=array(
        'dcno' => $this->input->post('dcno'),
        'orderno' => $this->input->post('orderno'),
        'dcdate'=>$newDate,
        'podate'=>$Date,
        'pono'=>$this->input->post('pono'),
        'pname'=>$this->input->post('pname'),
        'billname'=>$this->input->post('bname'),
        'delivery'=>$this->input->post('dat'),
        'through'=>$this->input->post('thro'),
        'period'=>$this->input->post('period'),
        'total'=>$this->input->post('Total'),
        'addrs'=>$this->input->post('address')
    );
    $this->db->insert_batch('dc_item', $entries);
    $this->db->insert('dc_entry',$da);
    $this->session->set_flashdata('Add', 'Successfully added the DCNo');
    redirect('Inventory/DC_Entry','refresh');
}
function DCupdate($data){
  $session_data = $this->session->userdata('logged_in');
  $data['username'] = $session_data['username'];
  $LDate = $this->input->post('dcdate');
  $date = str_replace('/', '-', $LDate);
  $newDate = date("Y-m-d", strtotime($date));

  $Date = $this->input->post('podate');
  $date = str_replace('/', '-', $Date);
  $Date = date("Y-m-d", strtotime($date));
  $dcno = $this->input->post('dcno');
$count = count($data['itemname']);
    for($i = 0; $i<$count; $i++){ 
      $entries[] = array( 
        'sno'=>$data['sno'][$i],
        'itemname'=>$data['itemname'][$i],
        'qty'=>$data['qty'][$i],
        'wgt'=>$data['wgt'][$i],
        'des'=>$data['desc'][$i],
        'dcno'=>$this->input->post('dcno'),
        'dcdate'=>$newDate,
      );
    }
  $da=array(
        'dcno' => $this->input->post('dcno'),
        'orderno' => $this->input->post('orderno'),
        'dcdate'=>$newDate,
        'podate'=>$Date,
        'pono'=>$this->input->post('pono'),
        'pname'=>$this->input->post('pname'),
        'billname'=>$this->input->post('bname'),
        'delivery'=>$this->input->post('dat'),
        'through'=>$this->input->post('thro'),
        'period'=>$this->input->post('period'),
        'total'=>$this->input->post('Total'),
        'addrs'=>$this->input->post('address')
    );
    $this->db->where('dcno',$dcno);
    $this->db->delete('dc_item');
    $this->db->insert_batch('dc_item', $entries);
    $this->db->where('dcno',$dcno);
    $this->db->update('dc_entry',$da);
    $this->session->set_flashdata('Add', 'Successfully updated the DCNo');
    redirect('Inventory/DC_Entry','refresh');
}
function salesinsert($data){
 $session_data = $this->session->userdata('logged_in');
  $data['username'] = $session_data['username'];
  $LDate = $this->input->post('billdate');
  $date = str_replace('/', '-', $LDate);
  $newDate = date("Y-m-d", strtotime($date));

  $Date = $this->input->post('podate');
  $date = str_replace('/', '-', $Date);
  $Date = date("Y-m-d", strtotime($date));
$check = isset($_POST['less']) && in_array($_POST['less'], ['Y', 'N']) ? $_POST['less'] : '';
$check1 = isset($_POST['igst']) && in_array($_POST['igst'], ['Y', 'N']) ? $_POST['igst'] : '';
$count = count($data['itemname']);
    for($i = 0; $i<$count; $i++){ 
      $entries[] = array( 
        'sno'=>$data['sno'][$i],
        'rate'=>$data['rate'][$i],
        'itemname'=>$data['itemname'][$i],
        'salesqty'=>$data['qty'][$i],
        'unit'=>$data['unit'][$i],
        'des'=>$data['desc'][$i],
        'tot'=>$data['total'][$i],
        'pa'=>$data['pa'][$i],
        'pb'=>$data['pb'][$i],
        'billno'=>$this->input->post('billno'),
        'billdate' => $newDate,
      );
    }

$count = count($data['name']);
    for($i = 0; $i<$count; $i++){ 
      $ent[] = array(         
        'name'=>$data['name'][$i],
        'wgtq'=>$data['wgtq'][$i],
        'wgt'=>$data['wgt'][$i],        
        'billno'=>$this->input->post('billno'),
      );
    }
  $da=array(
        'billno' => $this->input->post('billno'),
        'billdate' => $newDate,
        'dcno' => $this->input->post('dcno'),
        'orderno' => $this->input->post('orderno'),
        'podate'=>$Date,
        'pono'=>$this->input->post('pono'),
        'pname'=>$this->input->post('pname'),
        'billname'=>$this->input->post('bname'),
        'salesacc'=>$this->input->post('salesacc'),
        'pmode'=>$this->input->post('pmode'),
        'addrs'=>$this->input->post('address'),
        'lrno'=>$this->input->post('lrno'),
        'freight'=>$this->input->post('freight'),
        'less'=>$check,
        'igst'=>$check1,
        'period'=>$this->input->post('period'),
        'deliveryno'=>$this->input->post('deliveryno'),
        'delivery'=>$this->input->post('delivery'),
        'total'=>$this->input->post('Total'),
        'gstper'=>$this->input->post('gstper'),
        'sgstper'=>$this->input->post('sgstper'),
        'cgstper'=>$this->input->post('cgstper'),
        'igstper'=>$this->input->post('igstper'),
        'gstamt'=>$this->input->post('gstamt'),
        'billamt'=>$this->input->post('billamt'),
        'Other'=>$this->input->post('Others'),
        'others'=>$this->input->post('other'),
    );
    $this->db->insert_batch('sales_item', $entries);
     $this->db->insert_batch('sales_type', $ent);
    $this->db->insert('salesbill',$da);
    $this->session->set_flashdata('Add', 'Successfully added the Billno');
    redirect('Inventory/Sales_Entry','refresh'); 
}
function fetch_item1($orderno){
 $this->db->where("orderno",$orderno);
  $this->db->select('*');
  $this->db->join('item_master', 'item_master.id = order_item.itname', 'left');
  $this->db->from('order_item');
  $query_result = $this->db->get()->result();
  
  $output = '<center><table class="table table-bordered table-striped table-xxs" id="tb2">  
        
  <tbody>';            

      if($query_result !='false'){
       $i=0; 

foreach ($query_result as $key => $value) { 

$output .='<tr> 
<td><a href="javascript:void(0);"><span class="glyphicon glyphicon-remove" id="remove"></span></a></td>
<td><input style="width:50px" name="sno[]" type="text" class="form-control input-xs" value="'.$value->sno.'" ></td> 
<td><input style="width:50px" name="rate[]" type="text" class="form-control input-xs rate" value="'.$value->rate.'" ></td> 
<td><input style="width:250px" name="itemname[]" type="text" class="form-control input-xs" value="'.$value->itemname.'" ></td> 
<td><input style="width:80px" name="qty[]" type="text" class="form-control input-xs qty" value="'.$value->qty.'" id="qty_'.$i.'" onchange="calculate('.$i.')"></td> 
<td><input style="width:80px" name="unit[]" type="text" class="form-control input-xs" > 
<td><input style="width:90px" name="total[]" type="text" class="form-control input-xs total" value="'.$value->tot.'"> </td> 
<td><input style="width:150px" name="desc[]" type="text" class="form-control input-xs" > </td> 
<td><a href="javascript:void(0);" style="font-size:18px;" class="addMore" title="Add More Person"><span class="glyphicon glyphicon-plus"></td>
</tr>'; 
$i++;
}
$output .="</tbody>
</table></center>";
echo $output;
}
}
function itemfetch($orderno){
 $this->db->where("orderno",$orderno);
  $this->db->select('*');
  $this->db->join('item_master', 'item_master.id = order_item.itname', 'left');
  $this->db->join('item_type', 'item_type.name = item_master.itemname', 'left');  
  $this->db->from('order_item');
  $query_result = $this->db->get()->result();
  $output = '<center><table class="table table-bordered table-striped table-xxs" id="tb2">  
        
  <tbody>';            

      if($query_result !='false'){
       $i=0; 

foreach ($query_result as $key => $value) { 

$output .='<tr> 

<td><input style="width:120px" name="name[]" type="text" class="form-control input-xs" value="'.$value->itname.'" ></td> 
<td><input style="width:60px" name="wgtq[]"  type="text" class="form-control input-xs wgtq" value="'.$value->wgt.'" ></td> 
<td><input style="width:90px" name="wgt[]" type="text" class="form-control input-xs wgt" > </td> 

</tr>'; 
$i++;
}
$output .="</tbody>
</table></center>";
echo $output;
}
}
function Salesupdate($data){
  $session_data = $this->session->userdata('logged_in');
  $data['username'] = $session_data['username'];
  $LDate = $this->input->post('billdate');
  $date = str_replace('/', '-', $LDate);
  $newDate = date("Y-m-d", strtotime($date));

  $Date = $this->input->post('podate');
  $date = str_replace('/', '-', $Date);
  $Date = date("Y-m-d", strtotime($date));
$check = isset($_POST['less']) && in_array($_POST['less'], ['Y', 'N']) ? $_POST['less'] : '';
$check1 = isset($_POST['igst']) && in_array($_POST['igst'], ['Y', 'N']) ? $_POST['igst'] : '';
$billno = $this->input->post('billno');
$count = count($data['itemname']);
    for($i = 0; $i<$count; $i++){ 
      $entries[] = array( 
        'sno'=>$data['sno'][$i],
        'rate'=>$data['rate'][$i],
        'itemname'=>$data['itemname'][$i],
        'salesqty'=>$data['qty'][$i],
        'unit'=>$data['unit'][$i],
        'des'=>$data['desc'][$i],
        'tot'=>$data['total'][$i],
        'pa'=>$data['pa'][$i],
        'pb'=>$data['pb'][$i],
        'billno'=>$this->input->post('billno'),
        'billdate' => $newDate,
      );
    }

$count = count($data['name']);
    for($i = 0; $i<$count; $i++){ 
      $ent[] = array(         
        'name'=>$data['name'][$i],
        'wgtq'=>$data['wgtq'][$i],
        'wgt'=>$data['wgt'][$i],        
        'billno'=>$this->input->post('billno'),
      );
    }
  $da=array(
        'billno' => $this->input->post('billno'),
        'billdate' => $newDate,
        'dcno' => $this->input->post('dcno'),
        'orderno' => $this->input->post('orderno'),
        'podate'=>$Date,
        'pono'=>$this->input->post('pono'),
        'pname'=>$this->input->post('pname'),
        'billname'=>$this->input->post('bname'),
        'salesacc'=>$this->input->post('salesacc'),
        'pmode'=>$this->input->post('pmode'),
        'addrs'=>$this->input->post('address'),
        'lrno'=>$this->input->post('lrno'),
        'freight'=>$this->input->post('freight'),
        'less'=>$check,
        'igst'=>$check1,
        'period'=>$this->input->post('period'),
        'deliveryno'=>$this->input->post('deliveryno'),
        'delivery'=>$this->input->post('delivery'),
        'total'=>$this->input->post('Total'),
        'gstper'=>$this->input->post('gstper'),
        'sgstper'=>$this->input->post('sgstper'),
        'cgstper'=>$this->input->post('cgstper'),
        'igstper'=>$this->input->post('igstper'),
        'gstamt'=>$this->input->post('gstamt'),
        'billamt'=>$this->input->post('billamt'),
        'Other'=>$this->input->post('Others'),
        'others'=>$this->input->post('other'),
    );
$this->db->where('billno',$billno);
$this->db->delete('sales_item');
$this->db->insert_batch('sales_item', $entries); 

$this->db->where('billno',$billno);
$this->db->delete('sales_type');
$this->db->insert_batch('sales_type', $ent); 

$this->db->where('billno',$billno);
$this->db->update('salesbill',$da); 
$this->session->set_flashdata('Add', 'Successfully Updated the BillNo');
redirect('Inventory/Sales_Entry','refresh'); 
}
function Journal_Insert($data){
$session_data = $this->session->userdata('logged_in');
$data['username'] = $session_data['username'];
$LDate = $this->input->post('vdate');
$date = str_replace('/', '-', $LDate);
$newDate = date("Y-m-d", strtotime($date));

$count = count($data['accname']);
  for($i = 0; $i<$count; $i++){ 
  $entries[] = array( 
    'acctname'=>$data['accname'][$i],
    'debit'=>$data['debit'][$i],
    'credit'=>$data['credit'][$i],
    'part'=>$data['part'][$i],
    'vno'=>$this->input->post('vno'),
    //'vdate'=>$newDate,
);
}
  $da=array(
        'vno' => $this->input->post('vno'),
        'vdate'=>$newDate,
        'debittot'=>$this->input->post('debittot'),
        'credittot'=>$this->input->post('credittot'),
);
$this->db->insert_batch('journal_item', $entries);
$this->db->insert('journal',$da);
$this->session->set_flashdata('Add', 'Successfully added the Voucherno');
redirect('BookKeeping/Journal_Entry','refresh'); 
}
function Journal_Update($data){
$session_data = $this->session->userdata('logged_in');
$data['username'] = $session_data['username'];
$LDate = $this->input->post('vdate');
$date = str_replace('/', '-', $LDate);
$newDate = date("Y-m-d", strtotime($date));
$vno = $this->input->post('vno');
$count = count($data['accname']);
  for($i = 0; $i<$count; $i++){ 
  $entries[] = array( 
    'acctname'=>$data['accname'][$i],
    'debit'=>$data['debit'][$i],
    'credit'=>$data['credit'][$i],
    'part'=>$data['part'][$i],
    'vno'=>$this->input->post('vno'),
    //'vdate'=>$newDate,
);
}
  $da=array(
        'vno' => $this->input->post('vno'),
        'vdate'=>$newDate,
        'debittot'=>$this->input->post('debittot'),
        'credittot'=>$this->input->post('credittot'),
);
$this->db->where('vno',$vno);
$this->db->delete('journal_item');
$this->db->insert_batch('journal_item', $entries);
$this->db->where('vno',$vno);
$this->db->update('journal',$da);
$this->session->set_flashdata('Add', 'Successfully Updated the Voucherno');
redirect('BookKeeping/Journal_Entry','refresh'); 
}
public function fetch_cash($name){
$date = str_replace('/', '-', $name);
$newDate = date("Y-m-d", strtotime($date));
$query_result = $this->db->query("SELECT * FROM daybook where date = '$newDate'  ")->row();
return $query_result;
}
public function fetch($name){
$date = str_replace('/', '-', $name);
$newDate = date("Y-m-d", strtotime($date));
$query_result = $this->db->query("SELECT sum(Amount) as Amt,dc FROM `daybook`  WHERE date < '$newDate' GROUP BY dc")->result_array();
return $query_result;
}
public function get_debit($name){
$date = str_replace('/', '-', $name);
$newDate = date("Y-m-d", strtotime($date));
$query_result = $this->db->query("SELECT sum(Amount) as Amt,dc,date FROM `daybook`  WHERE date = '$newDate' GROUP BY dc")->result_array();
return $query_result;
}

}
?>   