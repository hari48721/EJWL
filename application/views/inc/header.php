<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<style type="text/css">
ul li a{
	
	display: table-cell;
	vertical-align: middle;
	text-decoration: none;
}
ul li a:hover{
	font-weight: bold;
	border-bottom: 2px solid #fff;
}
ul li ul{
	list-style: none;
	width:200px;
	border-radius: 5px;
	line-height: 30px;
	
font-weight: bold;
	text-align: center;
	background-color: #EDE7F6;
}
ul li ul{
	display: none;
}
li:hover > ul{
	display: block;
}
ul li >ul {
	position: absolute;	
		
}
li>ul{
	display: none;
	position: absolute;
	left: 0;
	top: 100%;
}
 
li >ul li{ padding: 0;
padding-top: 2px;
text-align: center;
 }
 li >ul li > ul{ left: 100%;
 	top:0;
padding-left: 1px;
text-align: center;
 }
</style>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Waveplus POS Software</title>
	
	
	<link rel="shortcut icon" href="<?=site_Url('assets');?>/images/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="<?=site_Url('assets');?>/images/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?=site_Url('assets');?>/images/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?=site_Url('assets');?>/images/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?=site_Url('assets');?>/images/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?=site_Url('assets');?>/images/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="<?=site_Url('assets');?>/images/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?=site_Url('assets');?>/images/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="<?=site_Url('assets');?>/images/apple-touch-icon-152x152.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="<?=site_Url('assets');?>/images/apple-touch-icon-180x180.png" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?=site_Url('assets');?>/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?=site_Url('assets');?>/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?=site_Url('assets');?>/css/core.css" rel="stylesheet" type="text/css">
	<link href="<?=site_Url('assets');?>/css/components.css" rel="stylesheet" type="text/css">
	<link href="<?=site_Url('assets');?>/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?=site_Url('assets');?>/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?=site_Url('assets');?>/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="<?=site_Url('assets');?>/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=site_Url('assets');?>/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->
</head>
<body class="navbar-bottom navbar-top">

	<!-- Main navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?=site_url('Dashboard')?>"><img src="<?=site_url('assets') ?>/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
				<li><a href="">Master</a>
	<ul> <li><a href="<?=site_url('Account_Master')?>">Accounts&nbsp;&nbsp;</a>
	<!--	<li><a href="<?=site_url('Account_Master/Customer_Master')?>" >Customer Master&nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('Account_Master/Supplier_Master')?>">Supplier Master&nbsp;&nbsp;</a></li>
	<li><a href="<?=site_url('Account_Master/Group_Master')?>">Groups&nbsp;&nbsp;</a></li>
<li><a href="<?=site_url('Account_Master/Sub_Group')?>">SubGroups&nbsp;&nbsp;</a></li>
<li><a href="<?=site_url('Account_Master/District_Master')?>">District Master&nbsp;&nbsp;</a></li>
<li><a href="<?=site_url('Account_Master/Opening_Balance')?>">Opening Balance&nbsp;&nbsp;</a></li>
<li><a href="<?=site_url('Account_Master/Account_Settings')?>">Account Settings&nbsp;&nbsp;</a></li>
<li><a href="<?=site_url('Account_Master/Tax_Setting')?>">Tax Settings&nbsp;&nbsp;</a></li>
<li><a href="<?=site_url('Account_Master/Item_Master')?>">Item Master&nbsp;&nbsp;</a></li> -->
</ul>
<!--
<li><a href="<?=site_url('')?>">Inventry</a>
<ul> <li><a href="<?=site_url('Inventory')?>">Purchase Bill Entry&nbsp;&nbsp;</a>
		<li><a href="<?=site_url('Inventory/Purchase_Register')?>" >Purchase Bill Register&nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('Inventory/Purchase_Bill_Print')?>">Purchase Bill Print&nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('Inventory/Order_Entry')?>">Order Entry&nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('Inventory/Order_Register')?>">Order Register&nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('Inventory/Pending_Order')?>">Pending Order Register&nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('Inventory/Order_Print')?>">Order Print&nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('Inventory/DC_Entry')?>">DC Entry&nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('Inventory/DC_Register')?>">DC Register&nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('Inventory/DC_Print')?>">DC Print&nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('Inventory/Sales_Entry')?>">Sales Entry&nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('Inventory/Sales_Register')?>">Sales Register&nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('Inventory/Sales_Bill_Print')?>">Sales Print&nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('Inventory/Stock_Statment')?>">Stock Statement&nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('Inventory/Stock_Ledger')?>">Stock Ledger&nbsp;&nbsp;</a></li>
		
	</ul></li>

<li><a href="<?=site_url('')?>">Book Keeping</a><ul> <li><a href="<?=site_url('BookKeeping')?>">Receipt Entry&nbsp;&nbsp;</a>
		<li><a href="<?=site_url('BookKeeping/Receipt_Register')?>" >Receipt Register&nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('BookKeeping/Receipt_Voucher')?>">Receipt Voucher&nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('BookKeeping/Payment_Entry')?>">Payment Entry&nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('BookKeeping/Payment_Register')?>">Payment Register&nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('BookKeeping/Payment_Voucher')?>">Payment Voucher&nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('BookKeeping/Journal_Entry')?>">Journal Entry&nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('BookKeeping/Journal_Register')?>">Journal Register&nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('BookKeeping/Daybook_Entry')?>">DayBook Entry&nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('BookKeeping/Daybook_Print')?>">DayBook Printing&nbsp;&nbsp;</a></li>		
		<li><a href="<?=site_url('BookKeeping/Ledger')?>">Ledger&nbsp;&nbsp;</a></li>			
</ul></li>
<li><a href="<?=site_url('')?>">Report</a><ul> <li><a href="<?=site_url('Reports')?>">Account Tree&nbsp;&nbsp;</a>
		<li><a href="<?=site_url('Reports/Master_Info')?>" >Master Info&nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('Reports/Opening_Balance')?>">Opening Balance&nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('Reports/Address_Print')?>">Address Print&nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('Reports/Agent_Wise')?>">Agent Wise Outstanding &nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('Reports/Outstanding_List')?>">Outstanding List&nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('Reports/ELF')?>">ELF Outstanding List&nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('Reports/Journal_Register')?>">Journal Register&nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('Reports/Daybook_Entry')?>">DayBook Entry&nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('Reports/Daybook_Print')?>">DayBook Printing&nbsp;&nbsp;</a></li>		
		<li><a href="<?=site_url('Reports/Ledger')?>">Ledger&nbsp;&nbsp;</a></li>			
</ul></li>
<li><a href="<?=site_url('')?> ">Final Reports</a>
<ul> <li><a href="<?=site_url('Final_Report')?>">Trial Balance&nbsp;&nbsp;</a>
		<li><a href="<?=site_url('Final_Report/Profit_Loss')?>" >Profit & Loss&nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('Final_Report/Balance_Sheet')?>">Balance Sheet&nbsp;&nbsp;</a></li>
		<li><a href="<?=site_url('Final_Report/Annexure')?>">Annexure&nbsp;&nbsp;</a></li>
	</ul>
</li>
<li><a href="<?=site_url('')?>">Utility</a></li>  -->
				</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						
						<span><?php echo $username; ?></span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
						<li><a href="<?=site_url('dashboard/logout') ?>"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->