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
select{
   border:2px solid blue;
}
#button{
	margin-top:-80px;
}
button
{
margin-left:950px;	
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
	margin-left:150px;
}
#item3{
	margin-top:8px;
	margin-left:170px;
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
<form action="<?=site_url('Account_Master/District_Master_Insert')?>" method="POST">
<head><h5><center>District Master</center></h5><button type="submit" class="btn bg-slate"><i class="icon-file-plus position-left"></i> Add</button>
	<a href="<?=site_url('Account_Master/District_Master')?>" id="button"class="btn btn-info btn-xs"><i class="icon-new position-left"></i>New</button></a>
	<a id="button" href="<?=site_url('Account_Master/District_Master_View')?>" class="btn bg-info"><i class="icon-pencil5 position-left"></i> Edit</a>
	<a  id="button"href="<?=site_url('Account_Master/District_Master_View')?>" class="btn bg-info"><i class="icon-bin position-left"></i> Delete</a>
	<a  id="button"href="<?=site_url('Dashboard')?>" class="btn bg-info">Quit</a>
</head>
<body>
<?php if($this->session->flashdata('Add')){ ?>
	<center><div id="successMessage" class="alert bg-success alert-styled-left">
	<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
	<span class="text-semibold"><?php echo  $this->session->flashdata('Add'); ?></span> 
	</div></center>
<?php }  ?>

<div id="item">
District Name:  <input type="text"style="height: 28px; width:350px; " name="dname" autofocus required>
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