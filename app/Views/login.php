
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>OTT Leave Application</title>

	<!-- Site favicon -->
	<!-- <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url(); ?>/assets/images/apple-touch-icon.png"> -->
	<!-- <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url(); ?>/assets/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>/assets/images/favicon-16x16.png"> -->

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/styles/core.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script> -->
</head>
<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.html">
					<img src="<?= base_url(); ?>assets/images/deskapp-logo-svg.png" alt="">
				</a>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="<?= base_url(); ?>/assets/images/login-page-img.png" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
						<h3 class="text-center text-primary">Employee</h3>
						<br>

							<!-- <h2 class="text-center text-primary">OTT Leave Portal</h2> -->
						</div>
						<?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-info">
                       <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif;?>
						<form name="signin" action="/Login/auth" method="post">
						
							<div class="input-group custom">
								<input type="email" class="form-control form-control-lg" placeholder="Email ID" name="email" id="username" value="<?= set_value('email') ?>">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy fa fa-envelope-o" aria-hidden="true"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg" placeholder="**********"name="password" id="password">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<div class="row pb-30">
								
								<div class="col-6">
									<div class="forgot-password"><a href="forgot-password.html">Forgot Password</a></div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
									   <input class="btn btn-primary btn-lg btn-block" name="signin" id="signin" type="submit" value="Sign In">
									</div>
								</div>
								
								
							</div>
							<div class="row pt-20">
								
								<div class="col-sm-12">
									<div class="input-group mb-0">
					                	<h5 class="text-center text-primary"><a href="<?php echo base_url('loginW') ?>">Admin Login</a></h5>
									</div>
								</div>
								
							</div>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="<?= base_url(); ?>/assets/scripts/core.js"></script>
	<script src="<?= base_url(); ?>/assets/scripts/script.min.js"></script>
	<script src="<?= base_url(); ?>/assets/scripts/process.js"></script>
	<script src="<?= base_url(); ?>/assets/scripts/layout-settings.js"></script>
</body>
</html>