<?php 
session_start();
require('../model/mysqli_connect.php');
if (!isset($_SESSION['username'])) { // Jika tidak ada session username berarti diabelum login
    header("Location: ../access/login.php"); // Kita Redirect ke halaman login.php
}
$email = $_SESSION['username'];

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
$admin = query("SELECT * FROM users WHERE email= '$email'")[0];
$id = $admin["userid"];
if (isset($_POST["edit"])) {


    // ambil data dari tiap elemen dalam form

    $first_name = htmlspecialchars($_POST["first_name"]);
    $last_name = htmlspecialchars($_POST["last_name"]);
    $phone = htmlspecialchars($_POST["phone"]);

    // query update data
    $query = "UPDATE users SET
	first_name='$first_name',
	last_name='$last_name',
    phone ='$phone '
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
            window.location.href ='akun.php';
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
            window.location.href ='akun.php';
        },2000);
            </script>";
        echo "<script src='../assets/js/sweetalert2.all.min.js'></script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/profile.css">
    <link rel="stylesheet" href="../assets/css/style2.css">
</head>

<body>
<header>
        <nav id="nav">
            <div>
                <img src="../assets/image/logo1.png" alt="">
                <h2>Admin Baratheon</h2>
            </div>
            <ul>
                <li><a href="halaman-admin.php" class="anchor">Home</a></li>
                <li><a href="daftar-member.php" class="anchor">Daftar Member</a></li>
                <li><a href="akun.php" class="anchor" id="view">Akun</a></li>

            </ul>
        </nav>
        <div class="bgim">
            <div class="jumbotron">
                <img src="../assets/image/logo2.png" alt="" style="margin-bottom: 10px;">
                <h1>Baratheon Hotel</h1>
                <p>Di sini Kami menawarkan Nirwana pada Anda</p>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
                                    <img src="../assets/img/icon.png" style="width: 150px; height: 150px" />
                                </div>
                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold; margin-top: 60px;"><?php echo $admin["first_name"] . " " . $admin["last_name"] ?></h2>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="ubah-tab" data-toggle="tab" href="#ubah" role="tab" aria-controls="ubah" aria-selected="false">Edit</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../access/logout.php">Logout</a>
                                    </li>
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">First Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?php echo $admin["first_name"] ?>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Last Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?php echo $admin["last_name"] ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Phone</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?php echo $admin["phone"] ?>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>

                                    <div class="tab-pane fade" id="ubah" role="tabpanel" aria-labelledby="ubah-tab">
                                        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                                            <div class="row">
                                                <div class="col-sm-3 col-md-2 col-5">
                                                    <label style="font-weight:bold;">First Name</label>
                                                </div>
                                                <div class="col-md-8 col-6">
                                                    <input name="first_name" id="first_name" class="form-control selBox" required="required" value="<?php echo $admin["first_name"] ?>">

                                                    </input>
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="row">
                                                <div class="col-sm-3 col-md-2 col-5">
                                                    <label style="font-weight:bold;">Last Name</label>
                                                </div>
                                                <div class="col-md-8 col-6">
                                                    <input name="last_name" id="last_name" class="form-control selBox" required="required" value="<?php echo $admin["last_name"] ?>">

                                                    </input>
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="row">
                                                <div class="col-sm-3 col-md-2 col-5">
                                                    <label style="font-weight:bold;">Phone</label>
                                                </div>
                                                <div class="col-md-8 col-6">
                                                    <input name="phone" id="phone" class="form-control selBox" required="required" value="<?php echo $admin["phone"] ?>">

                                                    </input>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-5 col-lg-6"></div>
                                                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                                                    <button type="submit" class="btn btn-primary btn-lg btn-block" id="edit" name="edit">Edit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bgim">
        <footer>
            <p>Baratheon Hotel &#169; 2020, Denny Putra Y.P.</p>
        </footer>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>