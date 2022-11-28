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

<form action="<?=site_url('')?>" method="POST">
<head><h5><center>CUSTOMER MASTER ENTRY</center></h5>
  <a href="<?=site_url('Account_Master/Customer_Master')?>" id="button" class="btn btn-info btn-xs"><i class="icon-cross2 position-left"></i>Cancel</a>
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
<th>Customer Name</th>
<th>District</th>
<th class="text-center">Actions</th>
</tr>
</thead>
<tbody>
<?php foreach ($query as $row): ?>
<tr>
<td><?=$row['accName']?></td>
<td><?=$row['distrname']?></td>
<td>
  <ul class="icons-list">
  <li class="dropdown">
  <li><a href="<?=site_url('Account_Master/Customer_Master_Edit/'.$row['id'])?>"><i class=" icon-pencil5 position-left"></i>Edit</a></li>
  <li><a href="<?=site_url('Account_Master/Customer_Master_Delete/'.$row['id'])?>"><i class="icon-cross2 position-left"></i>Delete</a></li>
  </li>
  </ul>
</td></tr>
<?php endforeach ?>
</tbody>
</table>
</form>
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