<?php
require('../model/mysqli_connect.php');
$id = $_GET["id"];

function query($query)
{
	global $dbcon;
	$result = mysqli_query($dbcon, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}

	return $rows;
}
$member = query("SELECT * FROM users WHERE userid= $id")[0];


if (isset($_POST["submit"])) {


	// ambil data dari tiap elemen dalam form
	$id = $member["userid"];
	$first_name = htmlspecialchars($_POST["first_name"]);
	$last_name = htmlspecialchars($_POST["last_name"]);
	$phone = htmlspecialchars($_POST["telepon"]);
	$user_level = htmlspecialchars($_POST["user_level"]);
	// query update data
	$query = "UPDATE users SET
	first_name='$first_name',
	last_name='$last_name',
	phone='$phone',
	user_level=$user_level
	WHERE userid = $id
	";
	if (mysqli_query($dbcon, $query)) {
		echo "<script type='text/javascript'>
        setTimeout(() => {
            Swal.fire(
                'Data Berhasil Diubah!',
                '',
                'success'
            )
        }, 10);
        window.setTimeout(()=>{
            window.location.href ='daftar-member.php';
        },2000);
            </script>";
		echo "<script src='../assets/js/sweetalert2.all.min.js'></script>";
	} else {
		echo "<script type='text/javascript'>
        setTimeout(() => {
            Swal.fire(
                'Data Gagal Diubah!',
                '',
                'error'
            )
        }, 10);
        window.setTimeout(()=>{
            window.location.href ='daftar-member.php';
        },2000);
            </script>";
		echo "<script src='../assets/js/sweetalert2.all.min.js'></script>";
	}
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Ubah Data</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/my-login.css">
	<link rel="stylesheet" href="../assets/css/style2.css">
</head>

<body>
	<nav id="nav">
		<div>
			<img src="../assets/image/logo1.png" alt="">
			<h2>Admin Baratheon</h2>
		</div>
		<ul>
			<li><a href="daftar-member.php" class="anchor" id="view">Back</a></li>
		</ul>
	</nav>
	<div class="bgim">
		<div class="jumbotron">
			<img src="../assets/image/logo2.png" alt="" style="margin-bottom: 10px;">
			<h1>Baratheon Hotel</h1>
			<p>Di sini Kami menawarkan Nirwana pada Anda</p>
		</div>
	</div>
	<div class="my-login-page">
		<section class="h-100">
			<div class="container h-100">
				<div class="row justify-content-md-center h-100">

					<div class="card-wrapper">
						<div class="card fat">
							<div class="card-body">
								<h4 class="card-title">Ubah Data</h4>
								<form method="POST" class="my-login-validation" novalidate="">
									<div class="form-group">
										<label for="first_name">Nama Depan</label>
										<input id="first_name" type="text" class="form-control" name="first_name" required autofocus value="<?= $member["first_name"] ?>">
										<div class="invalid-feedback">
											Sebaiknya nama tidak kosong
										</div>
									</div>
									<div class="form-group">
										<label for="last_name">Nama Belakang</label>
										<input id="last_name" type="text" class="form-control" name="last_name" required autofocus value="<?= $member["last_name"] ?>">
										<div class="invalid-feedback">
											Sebaiknya nama tidak kosong
										</div>
									</div>

									<div class="form-group">
										<label for="telepon">Telepon</label>
										<input id="telepon" type="telepon" class="form-control" name="telepon" required autofocus value="<?= $member["phone"] ?>">
										<div class=" invalid-feedback">
											Nomor Telepon harus diisi
										</div>
									</div>
									<div class="form-group">
										<label for="user_level">User Level</label>
										<select id="user_level" name="user_level" class="form-control selBox" required="required">
											<?php
											if ($member["user_level"] == 1) {
												echo " <option value=1>Admin</option>
											<option value=0>Member</option>";
											} else {
												echo "<option value=0>Member</option>
											<option value=1>Admin</option>";
											}
											?>
										</select>
										<div class=" invalid-feedback">
											User Level harus diisi
										</div>
									</div>
									<div class="form-group m-0">
										<button type="submit" class="btn btn-primary btn-block" name="submit">
											Ubah
										</button>
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
	</div>

	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/my-login.js"></script>
</body>

</html>