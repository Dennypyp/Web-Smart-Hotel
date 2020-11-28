<?php 
session_start();


require('../model/mysqli_connect.php');
if (!isset($_SESSION['username'])) { // Jika tidak ada session username berarti diabelum login
    header("Location: ../access/login.php"); // Kita Redirect ke halaman login.php
}

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