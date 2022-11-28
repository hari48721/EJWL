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
margin-left:1000px;	
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
<form action="<?=site_url('Account_Master/Account_Master_Update/'.$query->id); ?>" method="POST">
<head><h5><center>ACCOUNT HEAD ENTRY</center></h5>
	<button type="submit" class="btn bg-slate"><i class="icon-spinner9 position-left"></i> Update</button>
	<a id="button" href="<?=site_url('Account_Master/Account_Master_View')?>" class="btn bg-info"><i class="icon-book3 position-left"></i> View All</a>
	<a href="<?=site_url('Account_Master')?>" id="button" class="btn btn-info btn-xs"><i class="icon-cross2 position-left"></i>Cancel</a>
</head>
<body>
<?php if($this->session->flashdata('Add')){ ?>
	<center><div id="successMessage" class="alert bg-success alert-styled-left">
	<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
	<span class="text-semibold"><?php echo  $this->session->flashdata('Add'); ?></span> 
</div></center>
<?php }  ?>

<div id="item1">
Account Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" style="height: 28px; width:350px; "  name="accName" required autofocus value="<?php echo $query->accName; ?>">
</div>

<div id="item2">
SubGroup under:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <select  style="height: 28px; width:350px; " id="select" class="countries" name="accgrp">
<option></option>
<?php foreach ($query1 as $row ): ?> 
<option value="<?=$row['sid']?>"  <?php echo ($query->accgrp == $row['sid']) ? 'selected="selected"' : '' ?> > 
<?=$row['subgrpname']?></option>
<?php endforeach ?>
</select>
</div>

<div id="item3">
Op Bal: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" style="height: 28px; width:150px; " name="opbal" value="<?php echo $query->opbal; ?>" >

<input type="radio"   id="inlineRadio2" value="<?php echo set_value('OpBalDC','C')?>" name="OpBalDC" <?php if($query->Credit == 'C' ) { echo 'checked'; } elseif ($query->Credit == 'c' ) {
	echo 'checked'; 
} ?> >Credit&nbsp;&nbsp;

<input type="radio"  id="inlineRadio1" value="<?php echo set_value('OpBalDC','D')?>" name="OpBalDC" <?php if($query->Credit == 'D' ) { echo 'checked'; } elseif ($query->Credit == 'd' ) {
	echo 'checked'; 
} ?> >Debit
</div>

<div id="item5">
Credit Days:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" style="height:28px; width:80px; "  name="cdays" value="<?php echo $query->cdays; ?>">
Credit Limit: <input type="text" style="height: 28px; width:75px; " name="climit" value="<?php echo $query->climit; ?>">
Int%: <input type="text" style="height: 28px; width:64px; " name="intper" value="<?php echo $query->intper; ?>">
</div>	

<div id="item6">
Acc type:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="height: 28px; width:350px; "  name="cper" value="<?php echo $query->acctype; ?>">
</div>

<div id="item7">
Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
<input type="text" style="height: 28px; width:350px; "  name="addr" value="<?php echo $query->addrs; ?>">
</div>

<div id="item8">
	<input type="text" style="height: 28px; width:350px; "  name="addr1"  value="<?php echo $query->addrs1; ?>">
</div>

<div id="item9"> 
Place:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="height: 28px; width:350px; "  name="place" value="<?php echo $query->place; ?>">
</div>

<div id="item10">
Entry No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="height: 28px; width:200px; "  name="pcode" value="<?php echo $query->entryNo; ?>"></div>

<div id="item10">
District:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select   style="height: 28px; width:300px; "id="select" class="countries" name="district">
<option></option>
<?php foreach ($dname as $row ): ?> 
<option value="<?=$row['did']?>"  <?php echo ($query->district == $row['did']) ? 'selected="selected"' : '' ?> > 
<?=$row['distrname']?></option>
<?php endforeach ?>
</select></div>
<div id="item11" >
State:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" style="height: 28px; width:200px; "  name="state" value="<?php echo $query->state; ?>"></div>

<div id="item12">
Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	<input type="text" style="height: 28px; width:120px; "  name="p1"  value="<?php echo $query->phone1; ?>">
<!--	<input type="text" style="height: 28px; width:120px; "  name="p2"  value="<?php echo $query->phone2; ?>">
	<input type="text" style="height: 28px; width:110px; "  name="p3"  value="<?php echo $query->phone3; ?>">  -->
</div>

<div id="item12">
Fax:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	<input type="text" style="height: 28px; width:358px; "  name="fax" value="<?php echo $query->fax; ?>">
</div>
<div id="item13">
Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	<input type="text" style="height: 28px; width:358px; "  name="email" value="<?php echo $query->email; ?>">
</div>

<div id="item14">
GST.No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" style="height: 28px; width:358px; "  name="gst" value="<?php echo $query->gstno; ?>">
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