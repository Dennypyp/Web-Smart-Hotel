<?php
session_start();
require('../model/mysqli_connect.php');
$bookid = $_GET["bookid"];

function hapus($bookid)
{
    global $dbcon;
    mysqli_query($dbcon, "DELETE FROM booking WHERE bookid = $bookid");
    return mysqli_affected_rows($dbcon);
}
if (hapus($bookid) > 0) {
    echo "<script type='text/javascript'>
    setTimeout(() => {
        Swal.fire(
            'Booking Berhasil Dicancel!',
            '',
            'success'
        )
    }, 10);
    window.setTimeout(()=>{
        window.location.href ='../pages/profile.php';
    },7000);
        </script>";
    echo "<script src='../assets/js/sweetalert2.all.min.js'></script>";
} else {
    echo "<script type='text/javascript'>
                setTimeout(() => {
                    Swal.fire(
                        'Booking Gagal Dicancel!',
                        '',
                        'error'
                    )
                }, 10);
                window.setTimeout(()=>{
                    window.location.href ='../pages/profile.php';
                },7000);
                    </script>";
    echo "<script src='../assets/js/sweetalert2.all.min.js'></script>";
}
