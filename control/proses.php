<?php 
require '../model/mysqli_connect.php';

session_start();
if (!isset($_SESSION['username'])) { // Jika tidak ada session username berarti diabelum login
    header("Location: ../access/login.php"); // Kita Redirect ke halaman login.php
}

// ================================================================
// Booking
// =======================
function booking($data)
{
    global $dbcon;

    $room = $data["room"];
    $type = $data["tipe"];
    $bed = $data["bookbed"];
    $bookin = $data["bookin"];
    $checkin = date("Y-m-d", strtotime($bookin));
    $bookout = $data["bookout"];
    $checkout = date("Y-m-d", strtotime($bookout));
    

    $email = $_SESSION['username'];
    
    function kueri($query)
    {
        global $dbcon;
        $result = mysqli_query($dbcon, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
    
        return $rows;
    }
    $cust = kueri("SELECT * FROM users WHERE email= '$email'")[0];
    
    $id = $cust["userid"];
    

    // tambahkan booking
    mysqli_query($dbcon, "INSERT INTO booking (checkin, checkout,room, userid) VALUES('$checkin', '$checkout','$room $type $bed', $id)");

    return mysqli_affected_rows($dbcon);
}

if (isset($_POST["submit"])) {
    if (booking($_POST) > 0) {
        echo "<script type='text/javascript'>
                setTimeout(() => {
                    Swal.fire(
                        'Booking Berhasil!',
                        '',
                        'success'
                    )
                }, 10);
                window.setTimeout(()=>{
                    window.location.href ='booking.php';
                },2000);
                    </script>";
                echo "<script src='../assets/js/sweetalert2.all.min.js'></script>";
    } else {
        echo "<script type='text/javascript'>
        setTimeout(() => {
            Swal.fire(
                'Gagal Berhasil!',
                '',
                'error'
            )
        }, 10);
        window.setTimeout(()=>{
            window.location.href ='booking.php';
        },2000);
            </script>";
        echo "<script src='../assets/js/sweetalert2.all.min.js'></script>";
        echo mysqli_error($dbcon);
    }
}

// Akhir Booking
// ==========================================================================


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
?>