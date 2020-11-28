<?php
    session_start();
    unset($_SESSION["username"]);
    unset($_SESSION["password"]);
    session_destroy();
    echo "<script type='text/javascript'>
    setTimeout(() => {
        Swal.fire(
            'Logout Berhasil!',
            '',
            'success'
        )
    }, 10);
    window.setTimeout(()=>{
        window.location.href ='login.php';
    },2000);
        </script>";
    echo "<script src='../assets/js/sweetalert2.all.min.js'></script>";
