<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_Master extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->helper('url');
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
		}
		else
		{
//If no session, redirect to login page
			redirect('login', 'refresh');
		}	
	}
public function index()
	{
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
	$data['query'] = $this->db->get('subgrp')->result_array();
	
	$data['dname'] = $this->db->get('district')->result_array();
	
	$this->load->view('Account_Master/Acc_Master', $data, FALSE);	
}
public function Acc_Insert(){
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];

$this->form_validation->set_rules('accName', 'accName', 'required|is_unique[acc_master.accName]');
$this->form_validation->set_error_delimiters('<div class="text-danger">',
			'</div>');
$this->form_validation->set_message('is_unique', 'The Account Name is already taken');

$check = isset($_POST['OpBalDC']) && in_array($_POST['OpBalDC'], ['D', 'C']) ? $_POST['OpBalDC'] : '';

$grp = $this->input->post('accgrp');

if ($this->form_validation->run()) {

if($grp ==  52){
	$data = array(
		'accName' => $this->input->post('accName'),
		'accgrp'=> $grp,
		'opbal'=> $this->input->post('opbal'),
		'Credit'=>$check,
		'cdays'=> $this->input->post('cdays'),
		'climit'=> $this->input->post('climit'),
		'intper'=> $this->input->post('intper'),
		'cperson'=> $this->input->post('cper'),
		'addrs'=> $this->input->post('addr'),
		'addrs1'=> $this->input->post('addr1'),
		'place'=> $this->input->post('place'),
		'pincode'=> $this->input->post('pcode'),
		'district'=> $this->input->post('district'),
		'state'=> $this->input->post('state'),
		'phone1'=> $this->input->post('p1'),
		'phone2'=> $this->input->post('p2'),
		'phone3'=> $this->input->post('p3'),
		'fax'=> $this->input->post('fax'),
		'email'=> $this->input->post('email'),
		'gstno'=> $this->input->post('gst'),
		'stype'=> $this->input->post('stype'),
		
	);
$this->db->insert('acc_master',$data);
$this->session->set_flashdata('Add', 'You Successfully Saved the data');
redirect('Account_Master/Customer_Master','refresh');
}

else if($grp == 53){
	$data = array(
		'accName' => $this->input->post('accName'),
		'accgrp'=> $grp,
		'opbal'=> $this->input->post('opbal'),
		'Credit'=>$check,
		'cdays'=> $this->input->post('cdays'),
		'climit'=> $this->input->post('climit'),
		'intper'=> $this->input->post('intper'),
		'cperson'=> $this->input->post('cper'),
		'addrs'=> $this->input->post('addr'),
		'addrs1'=> $this->input->post('addr1'),
		'place'=> $this->input->post('place'),
		'pincode'=> $this->input->post('pcode'),
		'district'=> $this->input->post('district'),
		'state'=> $this->input->post('state'),
		'phone1'=> $this->input->post('p1'),
		'phone2'=> $this->input->post('p2'),
		'phone3'=> $this->input->post('p3'),
		'fax'=> $this->input->post('fax'),
		'email'=> $this->input->post('email'),
		'gstno'=> $this->input->post('gst'),
		'stype'=> $this->input->post('stype'),
		
	);
$this->db->insert('acc_master',$data);
$this->session->set_flashdata('Add', 'You Successfully Saved the data');
redirect('Account_Master/Supplier_Master','refresh');
}

else{
	$data = array(
		'accName' => $this->input->post('accName'),
		'accgrp'=> $this->input->post('accgrp'),
		'opbal'=> $this->input->post('opbal'),
		'Credit'=>$check,
		'cdays'=> $this->input->post('cdays'),
		'climit'=> $this->input->post('climit'),
		'intper'=> $this->input->post('intper'),
		'cperson'=> $this->input->post('cper'),
		'addrs'=> $this->input->post('addr'),
		'addrs1'=> $this->input->post('addr1'),
		'place'=> $this->input->post('place'),
		'pincode'=> $this->input->post('pcode'),
		'district'=> $this->input->post('district'),
		'state'=> $this->input->post('state'),
		'phone1'=> $this->input->post('p1'),
		'phone2'=> $this->input->post('p2'),
		'phone3'=> $this->input->post('p3'),
		'fax'=> $this->input->post('fax'),
		'email'=> $this->input->post('email'),
		'gstno'=> $this->input->post('gst'),
		
	);
$this->db->insert('acc_master',$data);
$this->session->set_flashdata('Add', 'You Successfully Saved the data');
redirect('Account_Master','refresh');
}
}
else{
$this->load->view('Account_Master/Acc_Master', $data);
}
}
public function Account_Master_View(){
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
		$this->db->select('*');    
		$this->db->from('acc_master');
		$this->db->where('accgrp !=',52);
		$this->db->where('accgrp !=',53);
		$query = $this->db->get();
		$data['query']= $query->result_array();
		$this->load->view('Account_Master/Acc_Master_View',$data);
}
public function Account_Master_Edit($id){
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
	$data['query1'] = $this->db->get('subgrp')->result_array();
	
	$data['dname'] = $this->db->get('district')->result_array();
	
		$this->db->select('*');    
		$this->db->from('acc_master');
		$this->db->where('id',$id);
		$query = $this->db->get();
		$data['query']= $query->row();
		$this->load->view('Account_Master/Acc_Master_Edit',$data);

}
public function Account_Master_Update($id){
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
	$data['query'] = $this->db->get('subgrp')->result_array();
	
	$data['dname'] = $this->db->get('district')->result_array();
	
$check = isset($_POST['OpBalDC']) && in_array($_POST['OpBalDC'], ['D', 'C']) ? $_POST['OpBalDC'] : '';

$grp = $this->input->post('accgrp');
if($grp == 52){
$data = array(
		'accName' => $this->input->post('accName'),
		'accgrp'=> $grp,
		'opbal'=> $this->input->post('opbal'),
		'Credit'=>$check,
		'cdays'=> $this->input->post('cdays'),
		'climit'=> $this->input->post('climit'),
		'intper'=> $this->input->post('intper'),
		'cperson'=> $this->input->post('cper'),
		'addrs'=> $this->input->post('addr'),
		'addrs1'=> $this->input->post('addr1'),
		'place'=> $this->input->post('place'),
		'pincode'=> $this->input->post('pcode'),
		'district'=> $this->input->post('district'),
		'state'=> $this->input->post('state'),
		'phone1'=> $this->input->post('p1'),
		'phone2'=> $this->input->post('p2'),
		'phone3'=> $this->input->post('p3'),
		'fax'=> $this->input->post('fax'),
		'email'=> $this->input->post('email'),
		'gstno'=> $this->input->post('gst'),
		'stype'=> $this->input->post('stype'),
		
	);
$this->db->update('acc_master', $data, array('id' => $id));
$this->session->set_flashdata('Add', 'You Successfully Updated the data');
redirect('Account_Master/Customer_Master','refresh');
}
else if($grp == 53){
$data = array(
		'accName' => $this->input->post('accName'),
		'accgrp'=> $grp,
		'opbal'=> $this->input->post('opbal'),
		'Credit'=>$check,
		'cdays'=> $this->input->post('cdays'),
		'climit'=> $this->input->post('climit'),
		'intper'=> $this->input->post('intper'),
		'cperson'=> $this->input->post('cper'),
		'addrs'=> $this->input->post('addr'),
		'addrs1'=> $this->input->post('addr1'),
		'place'=> $this->input->post('place'),
		'pincode'=> $this->input->post('pcode'),
		'district'=> $this->input->post('district'),
		'state'=> $this->input->post('state'),
		'phone1'=> $this->input->post('p1'),
		'phone2'=> $this->input->post('p2'),
		'phone3'=> $this->input->post('p3'),
		'fax'=> $this->input->post('fax'),
		'email'=> $this->input->post('email'),
		'gstno'=> $this->input->post('gst'),
		'stype'=> $this->input->post('stype'),
		
	);
$this->db->update('acc_master', $data, array('id' => $id));
$this->session->set_flashdata('Add', 'You Successfully Updated the data');
redirect('Account_Master/Supplier_Master','refresh');
}
else{

	$data = array(
		'accName' => $this->input->post('accName'),
		'accgrp'=> $this->input->post('accgrp'),
		'opbal'=> $this->input->post('opbal'),
		'Credit'=>$check,
		'cdays'=> $this->input->post('cdays'),
		'climit'=> $this->input->post('climit'),
		'intper'=> $this->input->post('intper'),
		'cperson'=> $this->input->post('cper'),
		'addrs'=> $this->input->post('addr'),
		'addrs1'=> $this->input->post('addr1'),
		'place'=> $this->input->post('place'),
		'pincode'=> $this->input->post('pcode'),
		'district'=> $this->input->post('district'),
		'state'=> $this->input->post('state'),
		'phone1'=> $this->input->post('p1'),
		'phone2'=> $this->input->post('p2'),
		'phone3'=> $this->input->post('p3'),
		'fax'=> $this->input->post('fax'),
		'email'=> $this->input->post('email'),
		'gstno'=> $this->input->post('gst'),
		
	);
$this->db->update('acc_master', $data, array('id' => $id));
$this->session->set_flashdata('Add', 'You Successfully Updated the data');
redirect('Account_Master','refresh');
}
}
public function Account_Master_Delete($id){
	$id = $this->db->where('id',$id);
	$this->db->delete('acc_master');
	$this->session->set_flashdata('Add', 'Your data deleted Successfully..');
	redirect('Account_Master','refresh');
}
public function Customer_Master(){
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
	$data['dname'] = $this->db->get('district')->result_array();
	$this->load->view('Account_Master/Customer_Master', $data, FALSE);	
}

public function Customer_Master_View(){
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
		$this->db->select('*');    
		$this->db->from('acc_master');
	$this->db->join('district', ' district.did = acc_master.district','left outer');
	$this->db->where('accgrp',52);
		$query = $this->db->get();
		$data['query']= $query->result_array();
		$this->load->view('Account_Master/Cust_Master_View',$data);
}
public function Customer_Master_Edit($id){
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
	$data['dname'] = $this->db->get('district')->result_array();
	
		$this->db->select('*');    
		$this->db->from('acc_master');
		$this->db->where('id',$id);
		$query = $this->db->get();
		$data['query']= $query->row();
		$this->load->view('Account_Master/Cust_Master_Edit',$data);

}
public function Customer_Master_Delete($id){
	$id = $this->db->where('id',$id);
	$this->db->delete('acc_master');
	$this->session->set_flashdata('Add', 'Your data deleted Successfully..');
	redirect('Account_Master/Customer_Master','refresh');
}
public function Supplier_Master(){
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
	$data['dname'] = $this->db->get('district')->result_array();
	$this->load->view('Account_Master/Supplier_Master', $data, FALSE);

}
public function Supplier_Master_View(){
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
		$this->db->select('*');    
		$this->db->from('acc_master');
	$this->db->join('district', ' district.did = acc_master.district','left outer');
	$this->db->where('accgrp',53);
		$query = $this->db->get();
		$data['query']= $query->result_array();
		$this->load->view('Account_Master/Supp_Master_View',$data);
}
public function Supplier_Master_Edit($id){
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
	$data['dname'] = $this->db->get('district')->result_array();
	
		$this->db->select('*');    
		$this->db->from('acc_master');
		$this->db->where('id',$id);
		$query = $this->db->get();
		$data['query']= $query->row();
		$this->load->view('Account_Master/Supp_Master_Edit',$data);

}
public function Supplier_Master_Delete($id){
	$id = $this->db->where('id',$id);
	$this->db->delete('acc_master');
	$this->session->set_flashdata('Add', 'Your data deleted Successfully..');
	redirect('Account_Master/Supplier_Master','refresh');
}
public function Group_Master(){
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
	$data['query'] = $this->db->get('grp_type')->result_array();
	$this->load->view('Account_Master/Grp_Master', $data, FALSE);	
}
public function Grp_Master_Insert(){
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
	$data = array(
		'grpName' => $this->input->post('grpname'),
		'grptyp'=> $this->input->post('grptyp')
		);	
$this->db->insert('grp_master',$data);
$this->session->set_flashdata('Add', 'You Successfully Saved the data');
redirect('Account_Master/Group_Master','refresh');
}
public function Group_Master_View(){
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
	$this->db->select('*');    
	$this->db->from('grp_master');
	$query = $this->db->get();
	$data['query']= $query->result_array();
	$this->load->view('Account_Master/Grp_Master_View',$data);
}
public function Grp_Master_Edit($id){
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
	$data['query'] = $this->db->get('grp_type')->result_array();
		$this->db->select('*');    
		$this->db->from('grp_master');
		$this->db->where('gid',$id);
		$query = $this->db->get();
		$data['result']= $query->row();
		$this->load->view('Account_Master/Grp_Master_Edit',$data);
}
public function Grp_Master_Update($gid){
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
	$data['query'] = $this->db->get('grp_type')->result_array();
	$data = array(
			'grpName' => $this->input->post('grpname'),
			'grptyp'=> $this->input->post('grptyp')
	);	
	$this->db->update('grp_master', $data, array('gid' => $gid));
	$this->session->set_flashdata('Add', 'You Successfully Updated the data');
	redirect('Account_Master/Group_Master','refresh');
}
public function Grp_Master_Delete($id){
		$id = $this->db->where('gid',$id);
		$this->db->delete('grp_master');
		$this->session->set_flashdata('Add', 'Your data deleted Successfully..');
		redirect('Account_Master/Group_Master','refresh');
}
public function Sub_Group(){
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
	$data['query'] = $this->db->get('grp_master')->result_array();
	$data['pname'] = $this->db->get('PLtype')->result_array();
	$this->load->view('Account_Master/Sub_Group', $data, FALSE);		
}
public function  Sub_Group_Insert(){
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
	$data = array(
		'subgrpname' => $this->input->post('subgrpname'),
		'grpname'=> $this->input->post('grpname'),
		'pltype'=> $this->input->post('pltype')
	);	
	$this->db->insert('subgrp',$data);
	$this->session->set_flashdata('Add', 'You Successfully Saved the data');
	redirect('Account_Master/Sub_Group','refresh');
}
public function Sub_Group_View(){
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
	$this->db->select('*');    
	$this->db->from('subgrp');
	$query = $this->db->get();
	$data['query']= $query->result_array();
	$this->load->view('Account_Master/Sub_Group_View',$data);
}
public function Sub_Group_Edit($id){
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
	$data['query'] = $this->db->get('grp_master')->result_array();
	$data['pname'] = $this->db->get('PLtype')->result_array();
		$this->db->select('*');    
		$this->db->from('subgrp');
		$this->db->where('sid',$id);
		$query = $this->db->get();
		$data['result']= $query->row();
		$this->load->view('Account_Master/Sub_Group_Edit',$data);
}
public function Sub_Group_Update($sid){
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
	$data['query'] = $this->db->get('grp_type')->result_array();
	$data = array(
		'subgrpname' => $this->input->post('subgrpname'),
		'grpname'=> $this->input->post('grpname'),
		'pltype'=> $this->input->post('pltype')
	);		
	$this->db->update('subgrp', $data, array('sid' => $sid));
	$this->session->set_flashdata('Add', 'You Successfully Updated the data');
	redirect('Account_Master/Sub_Group','refresh');
}
public function Sub_Group_Delete($id){
		$id = $this->db->where('sid',$id);
		$this->db->delete('subgrp');
		$this->session->set_flashdata('Add', 'Your data deleted Successfully..');
		redirect('Account_Master/Sub_Group','refresh');
}

public function District_Master(){
$session_data = $this->session->userdata('logged_in');
$data['username'] = $session_data['username'];
$this->load->view('Account_Master/District_Master', $data, FALSE);
}
public function District_Master_Insert(){
$session_data = $this->session->userdata('logged_in');
$data['username'] = $session_data['username'];
		$data = array(
		'distrname' => $this->input->post('dname'),			
	);	
$this->db->insert('district',$data);
$this->session->set_flashdata('Add', 'You Successfully Saved the data');
redirect('Account_Master/District_Master','refresh');	
}
public function District_Master_View(){
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
	$this->db->select('*');    
	$this->db->from('district');
	$query = $this->db->get();
	$data['query']= $query->result_array();
	$this->load->view('Account_Master/District_Master_View',$data);	
}
public function District_Master_Edit($id){
$session_data = $this->session->userdata('logged_in');
$data['username'] = $session_data['username'];
$this->db->select('*');    
$this->db->from('district');
$this->db->where('did',$id);
$query = $this->db->get();
$data['result']= $query->row();
$this->load->view('Account_Master/District_Master_Edit',$data);
}
public function District_Master_Update($id){
$session_data = $this->session->userdata('logged_in');
$data['username'] = $session_data['username'];
$data = array(
		'distrname' => $this->input->post('dname'),			
	);		
$this->db->update('district', $data, array('did' => $id));
$this->session->set_flashdata('Add', 'You Successfully Updated the data');
redirect('Account_Master/District_Master','refresh');
}
public function District_Master_Delete($id){
$id = $this->db->where('did',$id);
$this->db->delete('district');
$this->session->set_flashdata('Add', 'Your data deleted Successfully..');
redirect('Account_Master/District_Master','refresh');
}
public function Opening_Balance(){
$session_data = $this->session->userdata('logged_in');
$data['username'] = $session_data['username'];
$this->load->view('Account_Master/Opening_Balance', $data, FALSE);
}
public function load_data(){
$data = $this->User_model->load_data();
 echo json_encode($data);
}
public function open_update(){
$data = array(
   $this->input->post('table_column') => $this->input->post('value')
  );
$this->User_model->update($data, $this->input->post('id'));
}
public function Account_Settings(){
$session_data = $this->session->userdata('logged_in');
$data['username'] = $session_data['username'];
$result = $this->db->get('acc_settings')->row();
if($result != null){
//$data['query'] = $this->db->get('supplier_master')->result_array();
$data['q'] = $this->db->get('acc_master')->result_array();
$data['r']=$result;
$this->load->view('Account_Master/Account_Setting', $data, FALSE);
}
else{

$data['q'] = $this->db->get('acc_master')->result_array();
$this->load->view('Account_Master/Acc_Setting', $data);
}
}
public function Acc_Save(){
$data= array(
	'pacc' => $this->input->post('pacc'),
	'sacc' => $this->input->post('sacc'),
	'mcacc' => $this->input->post('mcacc'),
	'salesacc' => $this->input->post('salesacc'),
	'cashacc' => $this->input->post('cashacc'),
	'commacc' => $this->input->post('commacc'),
	'bankname' => $this->input->post('bankname'),
	'branch' => $this->input->post('branch'),
	'accno' => $this->input->post('accno'),
	'ifsc' => $this->input->post('ifsc'),
	'micr' => $this->input->post('micr'),
	'pan' => $this->input->post('pan'),
	
);
$this->db->insert('acc_settings',$data);
redirect('Account_Master/Account_Settings',"refresh");
}
public function Acc_Save1(){
$data= array(
	'pacc' => $this->input->post('pacc'),
	'sacc' => $this->input->post('sacc'),
	'mcacc' => $this->input->post('mcacc'),
	'salesacc' => $this->input->post('salesacc'),
	'cashacc' => $this->input->post('cashacc'),
	'commacc' => $this->input->post('commacc'),
	'bankname' => $this->input->post('bankname'),
	'branch' => $this->input->post('branch'),
	'accno' => $this->input->post('accno'),
	'ifsc' => $this->input->post('ifsc'),
	'micr' => $this->input->post('micr'),
	'pan' => $this->input->post('pan'),
	
);
$this->db->update('acc_settings',$data);
redirect('Account_Master/Account_Settings',"refresh");
}
public function Tax_Setting(){
$session_data = $this->session->userdata('logged_in');
$data['username'] = $session_data['username'];
$data['query'] = $this->db->query('SELECT * from acc_master LEFT OUTER JOIN  subgrp on subgrp.`sid` = acc_master.`accgrp` where subgrpname = "Sales A/C"')->result_array();
$data['q'] = $this->db->query('SELECT * from acc_master LEFT OUTER JOIN  subgrp on subgrp.`sid` = acc_master.`accgrp` where subgrpname = "Purchase A/C"')->result_array();
$data['s'] = $this->db->query('SELECT * from acc_master LEFT OUTER JOIN  subgrp on subgrp.`sid` = acc_master.`accgrp` where subgrpname = "Sales Tax A/C"')->result_array();
$data['t'] = $this->db->query('SELECT * from tax')->result_array();
$this->load->view('Account_Master/Tax_Setting', $data, FALSE);	
}
public function Tax_Save(){
$data= array(
	'taxtype' => $this->input->post('taxtype'),
	'taxper' => $this->input->post('taxper'),
	'salesacc' => $this->input->post('salesacc'),
	'salestax' => $this->input->post('salestax'),
	'puracc' => $this->input->post('puracc'),
	'purtax' => $this->input->post('purtax'),
	'purret' => $this->input->post('purret'),
	'purrettax' => $this->input->post('purrettax'),
	'csttyp' => $this->input->post('csttyp'),
	
);
$this->db->insert('tax',$data);
redirect('Account_Master/Tax_Setting',"refresh");	
}
public function get_data(){
$session_data = $this->session->userdata('logged_in');
$data['username'] = $session_data['username'];
$tax = $this->input->post('tax');
$data['query'] = $this->db->query('SELECT * from acc_master LEFT OUTER JOIN  subgrp on subgrp.`sid` = acc_master.`accgrp` where subgrpname = "Sales A/C"')->result_array();
$data['q'] = $this->db->query('SELECT * from acc_master LEFT OUTER JOIN  subgrp on subgrp.`sid` = acc_master.`accgrp` where subgrpname = "Purchase A/C"')->result_array();
$data['s'] = $this->db->query('SELECT * from acc_master LEFT OUTER JOIN  subgrp on subgrp.`sid` = acc_master.`accgrp` where subgrpname = "Sales Tax A/C"')->result_array();
$data['t'] = $this->db->query('SELECT * from tax')->result_array();
$data['result']= $this->db->query("SELECT * FROM tax where taxtype ='$tax' ")->row();
$this->load->view('Account_Master/Tax_Setting1', $data, FALSE);	

}
public function Tax_Update(){
$session_data = $this->session->userdata('logged_in');
$data['username'] = $session_data['username'];
$tax = $this->input->post('taxtype');
$data= array(
	'taxtype' => $this->input->post('taxtype'),
	'taxper' => $this->input->post('taxper'),
	'salesacc' => $this->input->post('salesacc'),
	'salestax' => $this->input->post('salestax'),
	'puracc' => $this->input->post('puracc'),
	'purtax' => $this->input->post('purtax'),
	'purret' => $this->input->post('purret'),
	'purrettax' => $this->input->post('purrettax'),
	'csttyp' => $this->input->post('csttyp'),
	
);
$this->db->where('taxtype',$tax);
$this->db->update('tax',$data);
redirect('Account_Master/Tax_Setting',"refresh");		
}
public function Tax_Delete(){
$session_data = $this->session->userdata('logged_in');
$data['username'] = $session_data['username'];
$tax = $this->input->post('taxtype');	
$this->db->where('taxtype',$tax);
$this->db->delete('tax');
redirect('Account_Master/Tax_Setting',"refresh");	
}
public function Item_Master(){
$session_data = $this->session->userdata('logged_in');
$data['username'] = $session_data['username'];
$data['itemname'] = $this->db->query('SELECT * from item_master ')->result_array();
$this->load->view('Account_Master/Item_Master', $data, FALSE);	
}
public function Item_Insert(){
	$this->load->model('User_model');
	$result = $this->User_model->iteminsert($_POST);
}
public function Item_Master_View(){
$session_data = $this->session->userdata('logged_in');
$data['username'] = $session_data['username'];
$this->db->select('*');    
$this->db->from('item_master');
$query = $this->db->get();
$data['query']= $query->result_array();
$this->load->view('Account_Master/Item_Master_View',$data);		
}
public function Item_Master_Edit($id){
$session_data = $this->session->userdata('logged_in');
$data['username'] = $session_data['username'];
$data['itemname'] = $this->db->query('SELECT * from item_master ')->result_array();
$this->db->select('*');    
$this->db->from('item_master');
$this->db->where('id',$id);
$this->db->join('item_type', ' item_type.name = item_master.itemname','left outer');
$query = $this->db->get();
$data['q']=$query->result_array();
$data['query'] = $query->row();
$this->load->view('Account_Master/Item_Master_Edit',$data);
}
public function Item_Master_Update($id){
	$this->load->model('User_model');
	$result = $this->User_model->updateitem($_POST);
}
public function Item_Master_Delete($id){
$this->db->where('id',$id);
$this->db->delete('item_master');
$this->db->where('itemno',$id);
$this->db->delete('item_type');
$this->session->set_flashdata('Add', 'Your data deleted Successfully..');
redirect('Account_Master/Item_Master','refresh');	
}
}