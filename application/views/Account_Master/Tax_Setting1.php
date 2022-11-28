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
#button1
{
margin-left:1000px;	
margin-top:-80px;
}
#item1{
	margin-left:115px;
	margin-top:-40px;
}
#item2{
	margin-left:71px;
	margin-top: 2px;
}
#item3{
	margin-left:112px;
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
	margin-left:85px;
	margin-top: 2px;
}
#item5{
	margin-left:85px;
	margin-top: 2px; 
}
#item6{
	margin-left:58px; 
	margin-top: 2px;
}
#item7{
	margin-left:10px; 
margin-top: 2px;}
#item8{
	margin-left:10px; 
	margin-top: 2px;
}
#item9{
	margin-left:112px;
	margin-top: 2px;
}

#successMessage{
	height:50px;
	width:500px;
}
</style>
</head>
<div class="content-wrapper">

	
<form action="<?=site_url('Account_Master/Tax_Update')?>" method="POST">
<head><h5><center>TAX SLAB ENTRY</center></h5>
<button type="submit" id="button1" class="btn bg-slate"><i class="icon-spinner9 position-left"></i> Update</button>
<a href="<?=site_url('Account_Master/Tax_Setting')?>" id="button" class="btn btn-info btn-xs"><i class="icon-cross2 position-left"></i>Cancel</a>
</head>
<br>
<body>
<div id="item1">
Tax Type: <input type="text" style="height: 28px; width:250px; " id="taxtype" name="taxtype" value="<?php echo $result->taxtype; ?>">
</div>

<div id="item2">
Tax Percentage: <input type="text" style="height: 28px; width:100px; " id="taxper"  name="taxper" value="<?php echo $result->taxper; ?>">
</div>


<div id="item3">
Sales A/c: <select  style="height: 28px; width:280px; " id="select" class="countries" name="salesacc" id="salesacc">
<option></option>
<?php foreach ($query as $row ): ?> 
<option value="<?=$row['id']?>"  <?php echo ($result->salesacc == $row['id']) ? 'selected="selected"' : '' ?> > 
<?=$row['accName']?></option>
<?php endforeach ?>
</select>
</div>

<div id="item4">
Sales Tax A/c: <select  style="height: 28px; width:280px; " id="select" class="countries" name="salestax" id="salestax">
<option></option>
<?php foreach ($s as $row ): ?> 
<option value="<?=$row['id']?>"  <?php echo ($result->salestax == $row['id']) ? 'selected="selected"' : '' ?> > 
<?=$row['accName']?></option>
<?php endforeach ?>
</select>
</div>

<div id="item5">
Purchase A/c: <select  style="height: 28px; width:280px; " id="select" class="countries" name="puracc" id="puracc">
<option></option>
<?php foreach ($q as $row ): ?> 
<option value="<?=$row['id']?>"  <?php echo ($result->puracc == $row['id']) ? 'selected="selected"' : '' ?> > 
<?=$row['accName']?></option>
<?php endforeach ?>
</select>
</div>

<div id="item6">
Purchase Tax A/c: <select  style="height: 28px; width:280px; " id="select" class="countries" name="purtax" id="purtax">
<option></option>
<?php foreach ($s as $row ): ?> 
<option value="<?=$row['id']?>"  <?php echo ($result->purtax == $row['id']) ? 'selected="selected"' : '' ?> > 
<?=$row['accName']?></option>
<?php endforeach ?>
</select>
</div>

<div id="item7">
Purchase Return Tax A/c: <select  style="height: 28px; width:280px; " id="select" class="countries" name="purret" id="purret">
<option></option>
<?php foreach ($q as $row ): ?> 
<option value="<?=$row['id']?>"  <?php echo ($result->purret == $row['id']) ? 'selected="selected"' : '' ?> > 
<?=$row['accName']?></option>
<?php endforeach ?>
</select>
</div>

<div id="item8">
Purchase Return Tax A/c: <select  style="height: 28px; width:280px; " id="select" class="countries" name="purrettax"  id="purrettax">
<option></option>
<?php foreach ($s as $row ): ?> 
<option value="<?=$row['id']?>"  <?php echo ($result->purrettax == $row['id']) ? 'selected="selected"' : '' ?> > 
<?=$row['accName']?></option>
<?php endforeach ?>
</select>
</div>

<div id="item9">
CST Type:  <input type="text" style="height: 28px; width:50px; "  name="csttyp" id="csttyp" value="<?php echo $result->csttyp; ?>"></div>
</form>
</body>
<!--<script type="text/javascript">
$('#taxtype').on('input change', function() {
	var tax =$('#taxtype').val();
	$.ajax({
				type: "POST",
				url: "<?php echo base_url();?>Account_Master/get_data",
				data:{tax:tax},
				datatype:'json',
				success: function (data) {
					alert(data);					
					//var res = jQuery.parseJSON(data);
					//$("#taxper").val(res.taxper);
					//$("#salesacc").val(res.salesacc);
					 $("#res").html(data);
window.location="Tax_Setting1",data; 

				}
			});
});	
</script>-->

				
<!-- Theme JS files -->
<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/notifications/bootbox.min.js"></script>
<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/notifications/sweet_alert.min.js"></script>
<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/forms/selects/select2.min.js"></script>
<script type="text/javascript" src="<?=site_url('assets')?>/js/pages/components_modals.js"></script>
<!-- /theme JS files -->

<!-- Theme JS files -->
<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/interactions.min.js"></script>
<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/widgets.min.js"></script>
<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/effects.min.js"></script>
<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/extensions/mousewheel.min.js"></script>
<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/globalize/globalize.js"></script>
<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/globalize/cultures/globalize.culture.de-DE.js"></script>
<script type="text/javascript" src="<?=site_url('assets')?>/js/core/libraries/jquery_ui/globalize/cultures/globalize.culture.ja-JP.js"></script>
<script type="text/javascript" src="<?=site_url('assets')?>/js/pages/jqueryui_forms.js"></script>
<!-- Theme JS files -->

<script type="text/javascript" src="<?=site_url('assets')?>/js/pages/form_bootstrap_select.js"></script>
<script type="text/javascript" src="<?=site_url('assets')?>/js/plugins/forms/selects/bootstrap_select.min.js"></script>
<script src="https://rawgit.com/moment/moment/2.2.1/min/moment.min.js"></script>
<?php include 'inc/footer.php'; ?>