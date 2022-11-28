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
#item3{
	margin-left:50px;
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
	margin-left:50px;
	margin-top: 2px;
}
#item5{
	margin-left:50px;
	margin-top: 2px; 
}
#item6{
	margin-left:50px; 
	margin-top: 2px;
}
#item7{
	margin-left:50px; 
margin-top: 2px;}
#item8{
	margin-left:50px; 
	margin-top: 2px;
}
#item9{
	margin-left:50px;
	margin-top: 2px;
}
#item10{
	margin-top:2px;
	margin-left:50px; 	
}
#item11{
	margin-left:50px; 	
	margin-top: 2px;
}
#item12{
	margin-left:50px; 
	margin-top: 2px;	
}
#successMessage{
	height:50px;
	width:500px;
}
</style>
</head>
<div class="content-wrapper">
<form action="<?=site_url('Account_Master/Acc_Save')?>" method="POST">
<head><h5><center>ACCOUNT SETTINGS</center></h5><button type="submit" class="btn bg-slate"><i class="icon-file-plus position-left"></i>Ok</button>
	<a  id="button"href="<?=site_url('Dashboard')?>" class="btn bg-info">Quit</a>
</head>
<br>
<body>
<div id="item1">
Purchase Lorry Freight A/c:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select  style="height: 28px; width:280px; " id="select" class="countries" name="pacc">
<option></option>
<?php foreach ($q as $row ): ?> 
<option value="<?=$row['id']?>" <?php echo set_select('accName', $row['id']); ?>><?=$row['accName']?></option> 
<?php endforeach ?>
</select>
</div>

<div id="item2">
Sales Lorry Freight A/c:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <select  style="height: 28px; width:280px; " id="select" class="countries" name="sacc">
<option></option>
<?php foreach ($q as $row ): ?> 
<option value="<?=$row['id']?>" <?php echo set_select('accName', $row['id']); ?>><?=$row['accName']?></option> 
<?php endforeach ?>
</select>
</div>

<div id="item3">
MC. A/c:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select  style="height: 28px; width:280px; " id="select" class="countries" name="mcacc">
<option></option>
<?php foreach ($q as $row ): ?> 
<option value="<?=$row['id']?>" <?php echo set_select('accName', $row['id']); ?>><?=$row['accName']?></option> 
<?php endforeach ?>
</select>
</div>

<div id="item4">
Sales Rnd off A/c:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select  style="height: 28px; width:280px; " id="select" class="countries" name="salesacc">
<option></option>
<?php foreach ($q as $row ): ?> 
<option value="<?=$row['id']?>" <?php echo set_select('accName', $row['id']); ?>><?=$row['accName']?></option> 
<?php endforeach ?>
</select>
</div>
<hr>

<div id="item5">
Cash Disc A/c:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select  style="height: 28px; width:280px; " id="select" class="countries" name="cashacc">
<option></option>
<?php foreach ($q as $row ): ?> 
<option value="<?=$row['id']?>" <?php echo set_select('accName', $row['id']); ?>><?=$row['accName']?></option> 
<?php endforeach ?>
</select>
</div>

<div id="item6">
Commission A/c:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select  style="height: 28px; width:280px; " id="select" class="countries" name="commacc">
<option></option>
<?php foreach ($q as $row ): ?> 
<option value="<?=$row['id']?>" <?php echo set_select('accName', $row['id']); ?>><?=$row['accName']?></option> 
<?php endforeach ?>
</select>
</div>
<hr>

<div id="item7">
Bank Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" style="height: 28px; width:190px; "  name="bankname">
</div>

<div id="item8">
Bank Branch:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="height: 28px; width:190px; "  name="branch"></div>

<div id="item9">
Bank A/c No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="height: 28px; width:190px; "  name="accno"></div>

<div id="item10">
Bank IFSC Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="height: 28px; width:190px; "  name="ifsc">
</div>

<div id="item11">
MICR Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="height: 28px; width:190px; "  name="micr">
</div>
<div id="item12">
PAN No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="height: 28px; width:190px; "  name="pan">
</div>
</div>
</form>
</body>


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
