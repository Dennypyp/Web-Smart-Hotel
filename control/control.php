<?php 
require '../model/mysqli_connect.php';

// Start session
ob_start();
session_start();


if (isset($_SESSION["username"])) {
    $emailsession = $_SESSION["username"];
    $result = mysqli_query($dbcon, "SELECT * FROM users WHERE email = '$emailsession'");
    $row = mysqli_fetch_assoc($result);
    echo "<script type='text/javascript'>
        setTimeout(() => {
            Swal.fire(
                'Masih Terdapat Session!',
                '',
                'warning'
            )
        }, 10);";
        if ($row["user_level"] == 1 || $row["user_level"] == 2) {
            echo "window.setTimeout(()=>{
                window.location.href ='../admin/halaman-admin.php';
                },3000);
                </script>";
        } else if ($row["user_level"] == 0) {
            echo "window.setTimeout(()=>{
            window.location.href ='../index.php';
            },3000);
            </script>";
        }
    echo "</script>";
        echo "<script src='../assets/js/sweetalert2.all.min.js'></script>";
    exit;
}

// ================================================================
// Login
// ==================

// Check username dan Password
if (isset($_POST["login"])) {
    global $dbcon;
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($dbcon, "SELECT * FROM users WHERE email = '$username'");


    if (
        isset($_POST['login']) && !empty($_POST['username'])
        && !empty($_POST['password'])
    ) {
        // check username
        if (mysqli_num_rows($result) === 1) {
            //check password
            $row = mysqli_fetch_assoc($result);
            $userid = $row["userid"];
            if (password_verify($password, $row["password"])) {
                $msg = "Selamat Datang " . $row["first_name"];

                echo "<script type='text/javascript'>
                setTimeout(() => {
                    Swal.fire(
                        'Login Berhasil!',
                        '$msg',
                        'success'
                    )
                }, 10);";
                
                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();
                $_SESSION['username'] = $row["email"];
                if ($row["user_level"] == 1 || $row["user_level"] == 2) {
                    echo "window.setTimeout(()=>{
                        window.location.href ='../admin/halaman-admin.php';
                        },3000);
                        </script>";
                } else if ($row["user_level"] == 0) {
                    echo "window.setTimeout(()=>{
                    window.location.href ='../index.php';
                    },3000);
                    </script>";
                }
                echo "<script src='../assets/js/sweetalert2.all.min.js'></script>";
                exit;
            } else {

                $msg = "Username/Password Salah";
                
                echo "<script type='text/javascript'>
                setTimeout(() => {
                    Swal.fire(
                        'Ooppss!!',
                        '$msg',
                        'error'
                    )
                }, 10);
                window.setTimeout(()=>{
                    window.location.href ='login.php';
                },3000);
                    </script>";
                    echo "<script src='../assets/js/sweetalert2.all.min.js'></script>";
            }
        }

        $error = true;
    }
}

// ============================================================================
// Registrasi
// ========================

function registrasi($data)
{
    global $dbcon;

    $depan = htmlspecialchars($data["nama_depan"]);
    $belakang = htmlspecialchars($data["nama_belakang"]);
    $email = htmlspecialchars(strtolower(stripslashes($data["email"])));
    $phone = htmlspecialchars($data["telepon"]);
    $password = mysqli_real_escape_string($dbcon, $data["password"]);
    $password2 = mysqli_real_escape_string($dbcon, $data["password2"]);

    if ($password !== $password2) {
        echo "<script type='text/javascript'>
        setTimeout(() => {
            Swal.fire(
                'Ooppss!!',
                'Konfirmasi Password Tidak Sesuai',
                'error'
            )
        }, 10);
        window.setTimeout(()=>{
            window.location.href ='../access/registrasi.php';
        },7000);
            </script>";
            echo "<script src='../assets/js/sweetalert2.all.min.js'></script>";
        return false;
    }

    // Check username sudah ada atau belum
    $result = mysqli_query($dbcon, "SELECT email FROM users WHERE email = '$email'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script type='text/javascript'>
                setTimeout(() => {
                    Swal.fire(
                        'Ooppss!!',
                        'User Sudah Ada',
                        'error'
                    )
                }, 10);
                window.setTimeout(()=>{
                    window.location.href ='../access/registrasi.php';
                },3000);
                    </script>";
                    echo "<script src='../assets/js/sweetalert2.all.min.js'></script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);


    // tambahkan user baru ke database
    mysqli_query($dbcon, "INSERT INTO users (first_name, last_name,phone, email, password) VALUES('$depan', '$belakang','$phone','$email','$password')");

    return mysqli_affected_rows($dbcon);
}

if (isset($_POST["registrasi"])) {
	if (registrasi($_POST) > 0) {
		echo "<script type='text/javascript'>
                setTimeout(() => {
                    Swal.fire(
                        'Registrasi Berhasil!',
                        '',
                        'success'
                    )
                }, 10);
                window.setTimeout(()=>{
                    window.location.href ='login.php';
                },3000);
                    </script>";
                echo "<script src='../assets/js/sweetalert2.all.min.js'></script>";
	} else {
		echo mysqli_error($dbcon);
	}
}
