<?php include 'inc/header.php'; ?>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top:-10px;
}
#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}
#customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:hover {background-color: #ddd;}
#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
  font-weight:bold;
}
#button{
	margin-left:1200px;
	margin-top:-80px;
}
input[type=text] {
   border: 2px solid blue;
}
#successMessage{
	height:50px;
	width:500px;
}
h5{
	color:orange;
	font-size:20px;
}
#myInput{
  margin-top: -25px;
  margin-left:10px;
  width:450px;
  height:35px;    
}
</style>
</head>
<div class="content-wrapper">
<form action="<?=site_url('Account_Master/Acc_Insert')?>" method="POST">

   
    <div align="left">
<button type="submit" > Add</button>
<a href="<?=site_url('Account_Master')?>" id="button">Cancel</a>
<a id="button" href="<?=site_url('Account_Master/Account_Master_View')?>" > Edit</a>
<a  id="button"href="<?=site_url('Account_Master/Account_Master_View')?>" > Delete</a>
<a  id="button"href="<?=site_url('Dashboard')?>" >Quit</a>

</div>
<?php if($this->session->flashdata('Add')){ ?>
	<center><div id="successMessage" class="alert bg-success alert-styled-left">
	<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
	<span class="text-semibold"><?php echo  $this->session->flashdata('Add'); ?></span> 
</div></center>
<?php }  ?> 

<table style="width:50%">
 
  <tr>
    <td>
        <div >
            Account Name:  <input type="text" style="height: 18px; width:120px; "  name="accName" required autofocus>
                <?php echo form_error('accName', '<div class="text-danger">', '</div>'); ?>
        </div>
    </td>
    <td>
        <div>
            SubGroup under: <select  style="height: 18px; width:120px; " id="select" class="countries" name="accgrp">
            <option></option>
            <?php foreach ($query as $row ): ?> 
            <option value="<?=$row['sid']?>" <?php echo set_select('subgrpname', $row['sid']); ?>><?=$row['subgrpname']?></option> 
            <?php endforeach ?>
            </select>
        </div>
    </td>
    
  </tr>
  
  <tr>
    <td>
        <div >
            Op Bal: <input type="text" style="height: 18px; width:120px; " name="opbal">&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; 
            <input type="radio"   id="inlineRadio2" value="<?php echo set_value('OpBalDC','C')?>" name="OpBalDC">Credit
            <input type="radio"  id="inlineRadio1" value="<?php echo set_value('OpBalDC','D')?>" name="OpBalDC" >Debit
            </div>
        
    </td>
    <td>
        <div >
            Credit Days: <input type="text" style="height:28px; width:80px; "  name="cdays">
            Credit Limit: <input type="text" style="height: 28px; width:75px; " name="climit">
            Int%: <input type="text" style="height: 28px; width:64px; " name="intper">
        </div>	
    </td>
    
  </tr>
</table>
<!-- 
<div id="item1">
Account Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" style="height: 28px; width:350px; "  name="accName" required autofocus>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo form_error('accName', '<div class="text-danger">', '</div>'); ?>
</div>

 
<div id="item2">
SubGroup under:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <select  style="height: 28px; width:350px; " id="select" class="countries" name="accgrp">
<option></option>
<?php foreach ($query as $row ): ?> 
<option value="<?=$row['sid']?>" <?php echo set_select('subgrpname', $row['sid']); ?>><?=$row['subgrpname']?></option> 
<?php endforeach ?>
</select>
</div>

<div id="item3">
Op Bal: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" style="height: 28px; width:150px; " name="opbal">
<input type="radio"   id="inlineRadio2" value="<?php echo set_value('OpBalDC','C')?>" name="OpBalDC">Credit&nbsp;&nbsp;
<input type="radio"  id="inlineRadio1" value="<?php echo set_value('OpBalDC','D')?>" name="OpBalDC" >Debit
</div>

<div id="item5">
Credit Days:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" style="height:28px; width:80px; "  name="cdays">
Credit Limit: <input type="text" style="height: 28px; width:75px; " name="climit">
Int%: <input type="text" style="height: 28px; width:64px; " name="intper">
</div>	

<div id="item6">
Contact Person:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="height: 28px; width:350px; "  name="cper">
</div>

<div id="item7">
Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
<input type="text" style="height: 28px; width:350px; "  name="addr" >
</div>

<div id="item8">
	<input type="text" style="height: 28px; width:350px; "  name="addr1" >
</div>

<div id="item9"> 
Place:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="height: 28px; width:350px; "  name="place">
</div>

<div id="item10">
Pin Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="height: 28px; width:200px; "  name="pcode"></div>

<div id="item10">
District:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select   style="height: 28px; width:300px; "id="select" class="countries" name="district">
<option></option>
<?php foreach ($dname as $row ): ?> 
<option value="<?=$row['did']?>" <?php echo set_select('distrname', $row['did']); ?>> 
<?=$row['distrname']?></option> 
<?php endforeach ?>
</select></div>
<div id="item11" >
State:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" style="height: 28px; width:200px; "  name="state"></div>

<div id="item12">
Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	<input type="text" style="height: 28px; width:120px; "  name="p1">
	<input type="text" style="height: 28px; width:120px; "  name="p2">
	<input type="text" style="height: 28px; width:110px; "  name="p3">
</div>

<div id="item12">
Fax:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	<input type="text" style="height: 28px; width:358px; "  name="fax">
</div>
<div id="item13">
Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	<input type="text" style="height: 28px; width:358px; "  name="email">
</div>

<div id="item14">
GST.No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" style="height: 28px; width:358px; "  name="gst">
</div>  -->
</div>
</form> 
<form action="<?=site_url('')?>" method="POST">
<head><h5><center>ACCOUNT HEAD ENTRY</center></h5>
	<a href="<?=site_url('Account_Master')?>" id="button" class="btn btn-info btn-xs"><i class="icon-cross2 position-left"></i>Cancel</a>
</head>
<body>
<?php if($this->session->flashdata('Add')){ ?>
	<center><div id="successMessage" class="alert bg-success alert-styled-left">
	<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
	<span class="text-semibold"><?php echo  $this->session->flashdata('Add'); ?></span> 
	</div></center>
<?php }  ?>
<input type="text" id="myInput"   class="form-control input-xs" onkeyup="myFunction()" placeholder="Search" title="Type in a name" autofocus>
<br>
<table id="customers" >
<thead>
<tr>
<th>Account Name</th>
<th class="text-center">Actions</th>
</tr>
</thead>
<tbody>
<?php foreach ($query as $row): ?>
<tr>
<td><?=$row['accName']?></td>
<td>
	<ul class="icons-list">
	<li class="dropdown">
	<li><a href="<?=site_url('Account_Master/Account_Master_Edit/'.$row['id'])?>"><i class=" icon-pencil5 position-left"></i>Edit</a></li>
	<li><a href="<?=site_url('Account_Master/Account_Master_Delete/'.$row['id'])?>"><i class="icon-cross2 position-left"></i>Delete</a></li>
	</li>
	</ul>
</td></tr>
<?php endforeach ?>
</tbody>
</table>
</form>

<!-- form 2 view-->



</body>

<script type="text/javascript">
$(document).ready(function(){
    $("#successMessage").delay(5000).slideUp(300);
});
</script>
<script type="text/javascript">
	var $rows = $('#customers tr');
$('#myInput').keyup(function() {
    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
    
    $rows.show().filter(function() {
        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
        return !~text.indexOf(val);
    }).hide();
});
</script>

<!-- Theme JS files -->
		<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/interactions.min.js"></script>
		<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/widgets.min.js"></script>
		<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/effects.min.js"></script>
		<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/extensions/mousewheel.min.js"></script>
		<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/globalize/globalize.js"></script>
		<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/globalize/cultures/globalize.culture.de-DE.js"></script>
		<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/globalize/cultures/globalize.culture.ja-JP.js"></script>
		<script type="text/javascript" src="<?=site_url('assets')?>/js/pages/jqueryui_forms.js"></script>
<?php include 'inc/footer.php'; ?>