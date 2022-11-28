<?php include 'inc/header.php'; ?>
<html>

<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
  margin-top:-20px;
  margin-left:10px;
  text-transform: uppercase;
}
#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 5px;
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
</style>
<form action="<?=site_url('')?>" method="POST">
<head><h5><center>ACCOUNT OPENING BALANCE ENTRY</center></h5>  
 <a  id="button"href="<?=site_url('Dashboard')?>" class="btn bg-info">Quit</a>
</head>
<body>
<table id="customers">
<thead>
<tr>
<th>Account Name</th>
<th>Op.Balance</th>
<th>D/C</th>
</tr>
</thead>
<tbody>  
</tbody>
</table>   
</body>
</html>

<script type="text/javascript" language="javascript" >
$(document).ready(function(){
  
  function load_data()
  {
    $.ajax({
      url:"<?php echo base_url(); ?>Account_Master/load_data",
      dataType:"JSON",
      success:function(data){
        var html = '<tr>';
        for(var count = 0; count < data.length; count++)
        {
          html += '<tr>';
          html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="accName" contenteditable>'+data[count].accName+'</td>';
          html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="opbal" contenteditable>'+data[count].opbal+'</td>';
          html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="Credit" contenteditable>'+data[count].Credit+'</td>';
         
        }
        $('tbody').html(html);
      }
    });
  }

  load_data(); 

  $(document).on('blur', '.table_data', function(){
    var id = $(this).data('row_id');
    var table_column = $(this).data('column_name');
    var value = $(this).text();
    $.ajax({
      url:"<?php echo base_url(); ?>Account_Master/open_update",
      method:"POST",
      data:{id:id, table_column:table_column, value:value},
      success:function(data)
      {

        load_data();
      }
    });
  });

  
  
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
