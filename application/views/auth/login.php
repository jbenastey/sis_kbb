<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/victory/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Feb 2019 10:09:32 GMT -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Sistem Informasi Surat Menyurat</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?=base_url() ?>assets/node_modules/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="<?=base_url() ?>assets/node_modules/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="<?=base_url() ?>assets/node_modules/flag-icon-css/css/flag-icon.min.css">
	<link rel="stylesheet" href="<?=base_url() ?>assets/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
	<!-- endinject -->
	<!-- plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?=base_url() ?>assets/css/style.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="<?=base_url() ?>assets/images/auth/kementerianagama_logo.png" />
</head>

<body>
<div class="container-scroller">
	<div class="container-fluid page-body-wrapper">
		<div class="row">
			<div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-full-bg">
				<div class="row w-100">
					<div class="col-lg-4 mx-auto">
						<?php if ($this->session->flashdata('alert')=='GagalLogin'){?>
						<div class="alert alert-danger animated fadeInDown" role="alert">
							<button type="button" class="close" data-dismiss="alert"></button>
							Password / Username Salah, Silahkan Login Ulang
						</div>
						<?php } ?>
						<div class="auth-form-dark text-left p-5" style="border-radius: 35px">
							<h2><p align="center" style="font-size: 30px">Sistem Informasi Arsip Surat</p></h2>
							<p align="center"><img src="assets/images/auth/logo.png" style="width: 45%"></p>
							<h4 class="font-weight-light" align="center">Kepenghuluan Bangko Bakti</h4>
							<form class="pt-5" action="<?=base_url('login')?>" method="post">
								<div class="form-group">
									<label for="exampleInputEmail1">Username</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username" name="username">
									<i class="mdi mdi-account"></i>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Password</label>
									<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
									<i class="mdi mdi-eye"></i>
								</div>
								<div class="mt-5">
									<button type="submit" class="btn btn-block btn-success btn-lg font-weight-medium " style="border-radius: 35px" name="login">Login</button>
								</div>
								<br>
								<div class="mt-3">
									<button type="button" class="btn btn-block btn-secondary btn-mini font-weight-medium " style="border-radius: 35px; font-size: 11px" name="lihat_syarat" data-toggle="modal"
											data-target="#exampleModal">Lihat Persyaratan Pembuatan Surat</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- content-wrapper ends -->
		</div>
		<!-- row ends -->
	</div>
	<!-- page-body-wrapper ends -->
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	 aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header" style="text-align: center">
				<h5 class="modal-title" id="exampleModalLabel" >Persyaratan Pembuatan Surat</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div style="margin-left: 10px">
		<p>1. Kartu Tanda Penduduk</p>
		<p>2. Kartu Keluarga</p>
		<p>3. Foto</p>
		</div></div>
	</div>
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="<?=base_url() ?>assets/node_modules/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url() ?>assets/node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="<?=base_url() ?>assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=base_url() ?>assets/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="<?=base_url() ?>assets/js/off-canvas.js"></script>
<script src="<?=base_url() ?>assets/js/hoverable-collapse.js"></script>
<script src="<?=base_url() ?>assets/js/misc.js"></script>
<script src="<?=base_url() ?>assets/js/settings.js"></script>
<script src="<?=base_url() ?>assets/js/todolist.js"></script>
<!-- endinject -->
</body>

</html>
