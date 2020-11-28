<?php
require '../control/control.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Registrasi</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/my-login.css">
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="../assets/img/icon.png" alt="icon">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Registrasi</h4>
							<form method="POST" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="nama_depan">Nama Depan</label>
									<input id="nama_depan" type="text" class="form-control" name="nama_depan" required autofocus>
									<div class="invalid-feedback">
										Siapa nama anda?
									</div>
								</div>
								<div class="form-group">
									<label for="nama_belakang">Nama Belakang</label>
									<input id="nama_belakang" type="text" class="form-control" name="nama_belakang" required autofocus>
									<div class="invalid-feedback">
										Siapa nama anda?
									</div>
								</div>
								<div class="form-group">
									<label for="telepon">Telepon</label>
									<input id="telepon" type="text" class="form-control" name="telepon" required autofocus>
									<div class="invalid-feedback">
										Berapa nomor telepon anda?
									</div>
								</div>

								<div class="form-group">
									<label for="email">Email</label>
									<input id="email" type="email" class="form-control" name="email" required>
									<div class="invalid-feedback">
										email harus diisi
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
									<div class="invalid-feedback">
										Password harus diisi
									</div>
								</div>
								<div class="form-group">
									<label for="password">Konfirmasi Password
									</label>
									<input id="password2" type="password" class="form-control" name="password2" required data-eye>
									<div class="invalid-feedback">
										Password harus diis
									</div>
								</div>
								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block" name="registrasi">
										Registrasi
									</button>
								</div>
								<div class="mt-4 text-center">
									Sudah Punya Akun? <a href="login.php">Login</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Baratheon Hotel &#169; 2020, Denny Putra Y.P.
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/my-login.js"></script>
	<script src='../assets/js/sweetalert2.all.min.js'></script>
</body>

</html>