<?php
require '../control/proses.php';


$email = $_SESSION['username'];


$cust = query("SELECT * FROM users WHERE email= '$email'")[0];
$id = $cust["userid"];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Hotel Online</title>

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/booking.css">
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
                <li><a href="booking.php" id="view" class="anchor">Booking</a></li>
                <li><a href="resto.php" class="anchor">Restaurant</a></li>
                <li><a href="overview.php" class="anchor">Overview</a></li>
                <li><a href="profile.php" class="anchor">Profile</a></li>

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
    <div class="container-satu">


        <div class="sidebar-satu">
            <article id="dish" class="box">
                <h2>Room</h2>
                <div class="container-empat">
                    <div class="card">
                        <img src="../assets/image/ac3.png" class="featured-image">
                        <div class="content">
                            <p>Zuhause</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../assets/image/non2.png" class="featured-image">
                        <div class="content">
                            <p>Die Huis</p>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div class="kolom-utama">
            <article id="ac" class="box">
                <center>
                    <h2>Booking</h2>
                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                        <table border="0" cellspacing="0" cellpadding="15">
                            <tr>
                                <td><b>Nama</b></td>
                                <td><input type="text" name="nama" id="nama" value="<?php echo $cust["first_name"] . " " . $cust["last_name"] ?>" readonly class="form-control selBox" required="required"></td>
                            </tr>
                            <tr>
                                <td><b>Email</b></td>
                                <td><input type="text" name="email" id="email" value="<?php echo $cust["email"] ?>" readonly class="form-control selBox" required="required"></td>
                            </tr>
                            <tr>
                                <td><b>Phone Number</b></td>
                                <td><input type="text" name="phone" id="phone" aria-disabled="true" value="<?php echo $cust["phone"] ?>" readonly class="form-control selBox" required="required"></td>
                            </tr>
                            <tr>
                                <td><b>Check In</b></td>
                                <td><input type="date" name="bookin" id="bookin" value=<?php echo  date("Y-m-d"); ?> class="form-control selBox" required="required"></td>
                            </tr>
                            <tr>
                                <td><b>Check Out</b></td>
                                <td><input type="date" name="bookout" id="bookout" value=<?php echo  date("Y-m-d"); ?> class="form-control selBox" required="required"></td>
                            </tr>
                            <tr>
                                <td><b>Room Type</b></td>
                                <td id="roomtype">
                                    <select id="roombook" name="room" class="form-control selBox" required="required">
                                        <option value="A/C">A/C</option>
                                        <option value="Non-A/C">Non-A/C</option>
                                    </select>
                                    <select id="tipe" name="tipe" class="form-control selBox" required="required">
                                        <option value="La casa">La casa</option>
                                        <option value="Accueil">Acceil</option>
                                        <option value="Zuhause">Zuhause</option>
                                        <option value="Homu">Homu</option>
                                        <option value="Die Huis">Die Huis</option>
                                        <option value="Phteah">Phteah</option>
                                    </select>
                                    <select name="bookbed" id="bookbed" class="form-control selBox" required="required">
                                        <option value="Single">Single</option>
                                        <option value="Double">Double</option>
                                        <option value="Triple">Triple</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" id="submit" name="submit">Submit</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </center>
            </article>
        </div>
        <div class="sidebar-dua box">
            <h2>Dishes</h2>
            <div class="container-empat">
                <div class="card">
                    <img src="../assets/image/dish1.png" class="featured-image">
                    <div class="content">
                        <p>Mashed Potato Risotto, by Chef Abu Hanif</p>

                    </div>
                </div>
                <div class="card">
                    <img src="../assets/image/dish2.png" class="featured-image">
                    <div class="content">
                        <p>The Hot Brown, Signature dish by Chef Fred Schmidt</p>

                    </div>
                </div>
                <div class="card">
                    <img src="../assets/image/dish3.png" class="featured-image">
                    <div class="content">
                        <p>Tenderloin Steak, with Barbeque Sauce</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main>
    </main>
    <div class="bgim">
        <footer>
            <p>Baratheon Hotel &#169; 2020, Denny Putra Y.P.</p>
        </footer>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>