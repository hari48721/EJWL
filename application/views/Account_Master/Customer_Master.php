<?php include 'inc/header.php'; ?>
<head>
<style type="text/css">
body{
	background-color:white;
	font-size:15px;
	font-weight: bold;
}
input[type=text] {
   border: 2px solid ;
}
textarea{
   border: 2px solid;
}
h5{
	color:blue;
	font-size:30px;
}
select {
   border: 2px solid;
}
#button{
	margin-top:-80px;
}
button
{
margin-left:900px;	
margin-top:-80px;
}
#item1{
	margin-left:50px;
	margin-top:-30px;
}
#item2{
	margin-left:50px;
	margin-top: 2px;
}
#item9{
	margin-left:52px;
	margin-top: 2px;
}
#item3{
	margin-left:49px;
	margin-top: 2px;
}
select:focus{
outline: 3px solid red	
}
input[type=text]:focus{ outline: 3px solid red; }
input[type=number]:focus{ outline: 3px solid red; }
input[type=checkbox	]:focus{ outline: 3px solid red; }
input[type=radio]:focus{ outline: 3px solid red; }
input[type=select]:focus{ outline: 3px solid red;}
input[type=textarea]:focus{ outline: 3px solid red;}

#item4{
	margin-left:60px;
	margin-top: 2px;
}
#item5{
	margin-left:50px;
	margin-top: 2px; 
}
#item6{
	margin-left:49px; 
	margin-top: 2px;
}
#item7{
	margin-left:50px; 
margin-top: 2px;}
#item8{
	margin-left:192px; 
	margin-top: 2px;
}
#item10{
	margin-top:2px;
	margin-left:50px; 	
}
#item11{
	margin-left:51px; 	
	margin-top: 2px;
}
#item12{
	margin-left:50px; 
	margin-top: 2px;	
}
#item13{
	margin-left:50px;
	margin-top: 2px; 	
}
#item14{
	margin-left:51px; 
	margin-top: 2px;
}

#successMessage{
	height:50px;
	width:500px;
}
</style>
</head>
<div class="content-wrapper">
<form action="<?=site_url('Account_Master/Acc_Insert')?>" method="POST">
<head><h5><center>CUSTOMER MASTER ENTRY</center></h5><button type="submit" class="btn bg-slate"><i class="icon-file-plus position-left"></i> Add</button>
<a href="<?=site_url('Account_Master/Customer_Master')?>" id="button"class="btn btn-info btn-xs"><i class="icon-new position-left"></i>New</button></a>
<a id="button" href="<?=site_url('Account_Master/Customer_Master_View')?>" class="btn bg-info"><i class="icon-pencil5 position-left"></i> Edit</a>
<a  id="button"href="<?=site_url('Account_Master/Customer_Master_View')?>" class="btn bg-info"><i class="icon-bin position-left"></i> Delete</a>
<a  id="button"href="<?=site_url('Dashboard')?>" class="btn bg-info">Quit</a>
</head>
<body>
<?php if($this->session->flashdata('Add')){ ?>
	<center><div id="successMessage" class="alert bg-success alert-styled-left">
	<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
	<span class="text-semibold"><?php echo  $this->session->flashdata('Add'); ?></span> 
</div></center>
<?php }  ?>

<div id="item1">
Account Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" style="height: 28px; width:350px; "  name="accName" required autofocus>
<?php echo form_error('accName', '<div class="text-danger">', '</div>'); ?>
</div>

<div id="item2">
<input type="hidden"   name="accgrp" value="52">
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
<div id="item11">
State:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" style="height: 28px; width:200px; "  name="state">
<input type="radio" value="O" name="stype">Others&nbsp;&nbsp;
<input type="radio" value="L" name="stype" checked >Local</div>

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
</div>
</div>
</form>
</body>

<script type="text/javascript">
$(document).ready(function(){
    $("#successMessage").delay(5000).slideUp(300);
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