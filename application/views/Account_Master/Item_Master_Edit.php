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
	margin-left:24px;
	margin-top:-10px;
}
#item2{
	margin-left:25px;
	margin-top: 2px;
}
#item3{
	margin-left:24px;
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
#tb3 {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 99%;
 
  margin-left:10px;
 
}

#tb3  td, #tb3  th {
  border: 1px solid #ddd;
  padding:5px;
}
#tb3  tr:nth-child(even){background-color: #f2f2f2;}
#tb3  tr:hover {background-color: #ddd;}
#tb3  th {
  padding-top: 1px;
  padding-bottom: 1px;
  text-align: left;
  background-color:#696969;
  color: white;
  font-weight:bold;
}
#item4{
	margin-left:124px;
	margin-top: 2px;
}
#item5{
	margin-left:124px;
	margin-top: 2px; 
}
#item6{
	margin-left:124px; 
	margin-top: 2px;
}
#item7{
	margin-left:30px; 
	margin-top: 2px;}
#item8{
	margin-left:31px; 
	margin-top:2px;
}
#item9{
	margin-left:50px; 
	margin-top:5px;
}
#div{
	margin-left:520px; 
	margin-top:10px;
	
}
#successMessage{
	height:50px;
	width:500px;
}
</style>
</head>
<div class="content-wrapper">
<form action="<?=site_url('Account_Master/Item_Master_Update/'.$query->itno); ?>" method="POST">
<head><h5><center>ITEM MASTER ENTRY</center></h5><button type="submit" class="btn bg-slate"><i class="icon-spinner9 position-left"></i> Update</button>
	<a id="button" href="<?=site_url('Account_Master/Item_Master_View')?>" class="btn bg-info"><i class="icon-book3 position-left"></i> View All</a>
	<a href="<?=site_url('Account_Master/Item_Master')?>" id="button" class="btn btn-info btn-xs"><i class="icon-cross2 position-left"></i>Cancel</a>
</head>
<body>
<?php if($this->session->flashdata('Add')){ ?>
	<center><div id="successMessage" class="alert bg-success alert-styled-left">
	<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
	<span class="text-semibold"><?php echo  $this->session->flashdata('Add'); ?></span> 
</div></center>
<?php }  ?>

<div id="item1">
Item Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;<input type="text" style="height: 28px; width:350px; "  name="iname" value="<?php echo $query->itemname; ?>" required autofocus>
Description:  <input type="text" style="height: 28px; width:350px; "  name="desc" value="<?php echo $query->desc; ?>">
<input type="text" style="height: 28px; width:350px; "  name="desc1" value="<?php echo $query->desc1; ?>"></div>
</div>

<div id="item2">
Item No:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="height: 28px; width:350px; "  name="itemno" value="<?php echo $query->itno; ?>">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="height: 28px; width:350px; "  name="desc2" value="<?php echo $query->desc2; ?>" >
 <input type="text" style="height: 28px; width:350px; "  name="desc3" value="<?php echo $query->desc3; ?>">
</div>

<div id="item7">
GST%:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input type="text" style="height:28px; width:150px; "  name="gst" value="<?php echo $query->gst; ?>">
HSN No: <input type="text" style="height: 28px; width:134px; " name="hsnno" value="<?php echo $query->hsnno; ?>">

</div>	

<div id="item8">
Item Type:&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
<input type="radio"  value="fp" <?php if($query->itemtype =="fp"){ echo "checked";}?> name="prd">Finished Product&nbsp;&nbsp;
<input type="radio"  value="rp" <?php if($query->itemtype =="rp"){ echo "checked";}?> name="prd">Raw Product
</div>
<div id="item9">
<div class="col-xs-6">
<div class="table-responsive pre-scrollable">
<table class="table table-bordered table-striped table-xxs" id="tb3">
<thead>
<tr>
<th></th>
<th>Item Name</th>
<th>Weight</th>
<th></th></tr>
</thead>
<tbody>
<?php
if(!empty($q)){
 foreach ($q as $row1){ ?>
	<tr >
		<td><a href='javascript:void(0);' class='remove'><span class='glyphicon glyphicon-remove' id="remove"></span></a></td>

	<td><select  style="height: 28px; width:250px; " id="select" class="countries" name="itemname[]"><option></option>
<?php foreach ($itemname as $row ): ?> 
<option value="<?=$row['itemname']?>"  <?php echo ($row1['itname'] == $row['itemname']) ? 'selected="selected"' : '' ?> > 
<?=$row['itemname']?></option>
	<?php endforeach ?>
</select></td>

<td><input style="width:100px"  type="text"  name="wgt[]" value="<?=$row1['wgt'];?>" ></td>	
		
	<td><a href="javascript:void(0);" style="font-size:18px;" class="addMore" title="Add More Person"><span class="glyphicon glyphicon-plus"></td>

</tr><?php
}
}else{
?>
<tr >
		<td><a href='javascript:void(0);' class='remove'><span class='glyphicon glyphicon-remove' id="remove"></span></a></td>

	<td><select  style="height: 28px; width:250px; " id="select" class="countries" name="itemname[]"><option></option>
<?php foreach ($itemname as $row ): ?> 
<option value="<?=$row['itemname']?>" <?php echo set_select('itemname', $row['itemname']); ?>><?=$row['itemname']?></option> 
<?php endforeach ?>
</select></td>

<td><input style="width:100px"  type="text"  name="wgt[]"></td>	
		
	<td><a href="javascript:void(0);" style="font-size:18px;" class="addMore" title="Add More Person"><span class="glyphicon glyphicon-plus"></td>

</tr>
<?php
}?>	
</tbody>
</table>
</div>
</table>
</div>
</form>
</body>
<script>
$(function(){
   $('.addMore').on('click', function() {
        var data = $("#tb3 tr:eq(1)").clone(true).appendTo("#tb3");
        data.find("input").val('');
        
});

$(document).on('click', '.remove', function() {
    var trIndex = $(this).closest("tr").index();
    if(trIndex>0) {
        $(this).closest("tr").remove();
        $('.qty').trigger('change');
} else {
        alert("Sorry!! Can't remove first row!");
    }
});
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