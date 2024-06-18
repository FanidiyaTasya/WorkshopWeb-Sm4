<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>WebLaravel - Register</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/jquery.steps.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.html">
					<img src="vendors/images/deskapp-logo.svg" alt="">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="/login">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="vendors/images/register-page-img.png" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="bg-white box-shadow border-radius-10" style="padding: 30px;">
						<div class="register-title mb-30">
							<h2 class="text-center text-primary">Register</h2>
						</div>
						<div>
							@if (@session('error'))
								<div class="alert alert-danger">
									<strong>Oopps!</strong> {{ session('error') }}
								</div>
							@endif
						</div>
						<form action="/register/store" method="POST">
							@csrf
							<div class="form-group row">
								<label class="col-sm-4 col-form-label" for="name">Name*</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="name" id="name">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-4 col-form-label" for="username">Username*</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="username" id="username">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-4 col-form-label" for="email">Email Address*</label>
								<div class="col-sm-8">
									<input type="email" class="form-control" name="email" id="email">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-4 col-form-label" for="password">Password*</label>
								<div class="col-sm-8">
									<input type="password" class="form-control" name="password" id="password">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-4 col-form-label" for="confirm">Confirm Password*</label>
								<div class="col-sm-8">
									<input type="password" class="form-control" name="password_confirmation" id="confirm">
								</div>
							</div>
							<div class="form-group row mt-5">
								<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign Up">
							</div>
						</form>
					</div>					
				</div>
			</div>
		</div>
	</div>
	
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	{{-- <script src="src/plugins/jquery-steps/jquery.steps.js"></script> --}}
	{{-- <script src="vendors/scripts/steps-setting.js"></script> --}}
</body>
</html>