<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Waveplus Softtech</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?=site_url('assets');?>/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?=site_url('assets');?>/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?=site_url('assets');?>/css/core.css" rel="stylesheet" type="text/css">
	<link href="<?=site_url('assets');?>/css/components.css" rel="stylesheet" type="text/css">
	<link href="<?=site_url('assets');?>/css/colors.css" rel="stylesheet" type="text/css">
	<link href="<?=site_url('assets');?>/css/extras/animate.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->



	<!-- Theme JS files -->
	<script type="text/javascript" src="<?=site_url('assets');?>/js/plugins/forms/styling/uniform.min.js"></script>

	<script type="text/javascript" src="<?=site_url('assets');?>/js/core/app.js"></script>
	<script type="text/javascript" src="<?=site_url('assets');?>/js/pages/login.js"></script>
	<!-- /theme JS files -->
		<script type="text/javascript" src="<?=site_url('assets');?>/js/pages/animations_css3.js"></script>
</head>

<body class="navbar-bottom login-container">

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="index-2.html"><img src="<?=site_url('assets');?>/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#">
						<i class="icon-display4"></i> <span class="visible-xs-inline-block position-right"> Go to website</span>
					</a>
				</li>

				<li>
					<a href="#">
						<i class="icon-user-tie"></i> <span class="visible-xs-inline-block position-right"> Contact admin</span>
					</a>
				</li>

				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-cog3"></i>
						<span class="visible-xs-inline-block position-right"> Options</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Advanced login -->
				 
				<?php echo form_open('VerifyLogin'); ?>
					
					<div class="panel panel-body login-form">
						<div class="text-center">
							<div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
							<h5 class="content-group">Asian Power Lines<br>Login to your account<br><small class="display-block"> User Login </small></h5>
							<a href="#" class="animation" data-animation="shake"><?php echo validation_errors(); ?></a>
							
						</div>
						<div class="form-group has-feedback has-feedback-left">
		<select class="form-control border-slate border-lg"  data-live-search="true" data-width="80%" id="PName" name="Year" required>
				<option></option>
			<?php foreach ($PName1 as $row ): ?> 
			<option value="<?=$row['Year']?>"> 
				<?=$row['Year']?></option> 

		<?php endforeach ?>

										</select>
			<div class="form-control-feedback">
								<i class="icon-calendar22 text-muted"></i>

							</div>
						</div>

				<div class="form-group has-feedback has-feedback-left">
							<input name="username" type="text" class="form-control border-slate border-lg" placeholder="Username" required>
							<div class="form-control-feedback">
								<i class="icon-user text-muted"></i>

							</div>
						</div>

						<div class="form-group has-feedback has-feedback-left">
							<input name="password" type="password" class="form-control border-slate border-lg" placeholder="Password" required>
							<div class="form-control-feedback">
								<i class="icon-lock2 text-muted"></i>
							</div>
						</div>

						<div class="form-group">
												 
							<button class="btn bg-blue btn-block" type="submit">Login<i class="icon-arrow-right14 position-right"></i></button>
						</div>
					
				<?php echo form_close(); ?>
				<!-- /advanced login -->
					


						
			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

<?php include 'inc/footer.php'; ?>