<?php include 'inc/header.php'; ?>
<head>
<style type="text/css">
body{
	background-color:white;
	font-size:15px;
	font-weight: bold;
}
input[type=text] {
   border: 2px solid blue;
}
h5{
	color:orange;
	font-size:20px;
}
select {
   border: 2px solid blue;
}
#button{
	margin-top:-80px;
}
button
{
margin-left:1000px;	
margin-top:-80px;
}
#item{
	margin-left:120px;
}
#item1{
	margin-left:40px;
	margin-top:8px;
}
#item2{
	margin-top:8px;
	margin-left:120px;
}
#item3{
	margin-top:8px;
	margin-left:122px;
}
select:focus{
outline: 3px solid red	
}

input[type=text]:focus{ outline: 3px solid red; }
input[type=number]:focus{ outline: 3px solid red; }
input[type=checkbox	]:focus{ outline: 3px solid red; }
input[type=select]:focus{ outline: 3px solid red;}

#successMessage{
	height:50px;
	width:500px;
}
</style>
</head>
<form action="<?=site_url('Account_Master/Sub_Group_Update/'.$result->sid); ?>" method="POST">
<head><h5><center>SubGroup</center></h5>
	<button type="submit" class="btn bg-slate"><i class="icon-spinner9 position-left"></i> Update</button>
	<a id="button" href="<?=site_url('Account_Master/Sub_Group_View')?>" class="btn bg-info"><i class="icon-book3 position-left"></i> View All</a>
	<a href="<?=site_url('Account_Master/Sub_Group')?>" id="button" class="btn btn-info btn-xs"><i class="icon-cross2 position-left"></i>Cancel</a>
</head>
<body>
<?php if($this->session->flashdata('Add')){ ?>
	<center><div id="successMessage" class="alert bg-success alert-styled-left">
	<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
	<span class="text-semibold"><?php echo  $this->session->flashdata('Add'); ?></span> 
	</div></center>
<?php }  ?>

<div id="item">
Sub Group Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text"style="height: 28px; width:350px; " name="subgrpname" autofocus required value="<?php echo $result->subgrpname; ?>">
</div>

<div id="item2">
Group Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id="select" style="height: 28px; width:350px; " class="countries" name="grpname">
<option>--Select Your Category--</option>
<?php foreach ($query as $row ): ?> 
<option value="<?=$row['gid']?>"  <?php echo ($result->grpname == $row['gid']) ? 'selected="selected"' : '' ?> > 
<?=$row['grpName']?></option>
<?php endforeach ?>
</select>
</div>

<div id="item3">
P&L Type: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id="select" style="height: 28px; width:350px; " class="countries" name="pltype">
<option>--Select Your Category--</option>
<?php foreach ($pname as $row ): ?> 
<option value="<?=$row['pid']?>"  <?php echo ($result->pltype == $row['pid']) ? 'selected="selected"' : '' ?> > 
<?=$row['pname']?></option>
<?php endforeach ?>
</select>
</div>
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