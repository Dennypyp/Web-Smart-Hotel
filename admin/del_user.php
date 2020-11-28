<?php 
require('../model/mysqli_connect.php');
$id=$_GET["id"];

function hapus($id)
{
    global $dbcon;
    mysqli_query($dbcon, "DELETE FROM users WHERE userid = $id");
    return mysqli_affected_rows($dbcon);
}
if(hapus($id)>0){
    echo "<script type='text/javascript'>
    setTimeout(() => {
        Swal.fire(
            'Member Berhasil Dihapus!',
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
                        'Member Gagal Dihapus!',
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


