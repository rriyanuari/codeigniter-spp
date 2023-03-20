<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>Sistem Informasi Areta Collage - <?php echo $title; ?></title>

	<!-- General CSS Files -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/fontawesome/css/all.min.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jqvmap/dist/jqvmap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/summernote/summernote-bs4.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet"
		href="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">

	<!-- Template CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">
</head>

<body class="layout-3">
	<div id="app">
		<div class="main-wrapper">
			<!-- Main Content -->
			<div class="mt-5">
				<section class="section">
					<section class="section">
						<div class="container">
							<div class="row">
								<div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
									<div class="card">
										<div class="card-header d-block">
											<div class="login-brand">
												<img src="<?php echo base_url(); ?>/public/img/logo-aretaInformaticCollage.png" alt="logo"
													width="200" class="">
											</div>
											<hr>
											<h3 class="text-center">Login Center</h3>
										</div>

										<div class="card-body">
											<!-- <div class="row justify-align-center justify-content-between">
												<a class="col mx-3 btn btn-primary btn-lg" href="<?php echo base_url(); ?>mahasiswa">
													<i class="fas fa-user-graduate"></i> <br />
													Mahasiswa
												</a>
												<a class="col mx-3 col mx-3 btn btn-primary btn-lg" href="<?php echo base_url(); ?>admin">
													<i class="fas fa-chalkboard-teacher"></i> <br />
													Admin
												</a>
											</div> -->

											<div class="form-group">
												<label for="username">Username</label>
												<input id="username" type="text" class="form-control" name="username" required autofocus>
											</div>

											<div class="form-group">
												<label for="password" class="control-label">Password</label>
												<input id="password" type="password" class="form-control" name="password" required>
											</div>

											<div class="divider"></div>


											<div class="form-group">
												<button type="submit" class="btn btn-primary btn-lg btn-block" id="tmb-login">
													Login
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</section>
			</div>

			<footer class="main-footer">
				<div class="container text-center">
					Copyright &copy; 2022 <br /> Informatics Areta Collage
				</div>
			</footer>
		</div>
	</div>

	<!-- General JS Scripts -->
	<script src="<?php echo base_url(); ?>assets/modules/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/modules/popper.js"></script>
	<script src="<?php echo base_url(); ?>assets/modules/tooltip.js"></script>
	<script src="<?php echo base_url(); ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/modules/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/stisla.js"></script>

	<!-- Template JS File -->
	<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
</body>

</html>
