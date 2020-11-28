<?php
require '../control/proses.php';

$email = $_SESSION['username'];

$cust = query("SELECT * FROM users WHERE email= '$email'")[0];
$id = $cust["userid"];

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
            window.location.href ='profile.php';
        },1000);
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
            window.location.href ='profile.php';
        },1000);
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
    <title>Profile</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/profile.css">
    <link rel="stylesheet" href="../assets/css/style2.css">
</head>

<body>
    <header>
        <nav id="nav">
            <div>
                <img src="../assets/image/logo1.png" alt="">
                <h2>Baratheon Hotel</h2>
            </div>
            <ul>
                <li><a href="../index.php" class="anchor">Home</a></li>
                <li><a href="booking.php" class="anchor">Booking</a></li>
                <li><a href="resto.php" class="anchor">Restaurant</a></li>
                <li><a href="overview.php" class="anchor">Overview</a></li>
                <li><a href="profile.php" class="anchor" id="view">Profile</a></li>

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
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold; margin-top: 60px;"><?php echo $cust["first_name"] . " " . $cust["last_name"] ?></h2>
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
                                        <a class="nav-link" id="daftarBooking-tab" data-toggle="tab" href="#daftarBooking" role="tab" aria-controls="daftarBooking" aria-selected="false">Daftar Booking</a>
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
                                                <?php echo $cust["first_name"] ?>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Last Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?php echo $cust["last_name"] ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Phone</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?php echo $cust["phone"] ?>
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
                                                    <input name="first_name" id="first_name" class="form-control selBox" required="required" value="<?php echo $cust["first_name"] ?>">

                                                    </input>
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="row">
                                                <div class="col-sm-3 col-md-2 col-5">
                                                    <label style="font-weight:bold;">Last Name</label>
                                                </div>
                                                <div class="col-md-8 col-6">
                                                    <input name="last_name" id="last_name" class="form-control selBox" required="required" value="<?php echo $cust["last_name"] ?>">

                                                    </input>
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="row">
                                                <div class="col-sm-3 col-md-2 col-5">
                                                    <label style="font-weight:bold;">Phone</label>
                                                </div>
                                                <div class="col-md-8 col-6">
                                                    <input name="phone" id="phone" class="form-control selBox" required="required" value="<?php echo $cust["phone"] ?>">

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
                                    <div class="tab-pane fade" id="daftarBooking" role="tabpanel" aria-labelledby="daftarBooking-tab">
                                        <?php
                                        try {

                                            $query = "SELECT bookid, DATE_FORMAT(checkin,'%M %d %Y')
                                                        AS checkin, DATE_FORMAT(checkout,'%M %d %Y')
                                                        AS checkout, room, userid from booking WHERE userid = $id order by bookid ASC";
                                            $result = mysqli_query($dbcon, $query);
                                            if ($result) {
                                                echo '<table class="table table-striped"><tr><th scope="col">Book Id</th>
                                                        <th scope="col">Check In</th><th scope="col">Check Out</th><th scope="col">Room</th>
                                                        <th scope="col">Cancel</th>
                                                        </tr>';

                                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

                                                    $user_id = htmlspecialchars($row['userid'], ENT_QUOTES);
                                                    $checkin = htmlspecialchars($row['checkin'], ENT_QUOTES);
                                                    $checkout = htmlspecialchars($row['checkout'], ENT_QUOTES);
                                                    $room = htmlspecialchars($row['room'], ENT_QUOTES);
                                                    $bookid = htmlspecialchars($row['bookid'], ENT_QUOTES);
                                                    echo '<td>' . $bookid . '</td>';
                                                    echo '<td>' . $checkin . '</td><td>' . $checkout . '</td><td>' . $room . '</td><td><a href="../control/cancel_book.php?bookid=' . $bookid . '">Cancel</a></td></tr>';
                                                }
                                                echo '</table>';
                                                mysqli_free_result($result);
                                            } else {
                                                echo '<p class="text-center">Saat ini data users tidak bisa ditampilkan. ';
                                                echo 'Mohon maaf atas ketidaknyamanan ini</p>';
                                                exit;
                                            } // End of if ($result)
                                            mysqli_close($dbcon);
                                        } catch (Exception $e) {
                                            print "The system is busy please try later";
                                        } catch (Error $e) {
                                            print "The system is busy please try again later";
                                        }
                                        ?>

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