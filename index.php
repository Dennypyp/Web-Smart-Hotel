<?php
session_start();
require('model/mysqli_connect.php');
if (!isset($_SESSION['username'])) { // Jika tidak ada session username berarti diabelum login
    header("Location: access/login.php"); // Kita Redirect ke halaman login.php
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Hotel Online</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <nav id="nav">
            <div>

                <img src="assets/image/logo1.png" alt="">
                <h2>Baratheon Hotel</h2>
            </div>
            <ul>
                <li><a href="index.php" id="view">Home</a></li>
                <li><a href="pages/booking.php">Booking</a></li>
                <li><a href="pages/resto.php">Restaurant</a></li>
                <li><a href="pages/overview.php">Overview</a></li>
                <li><a href="pages/profile.php">Profile</a></li>

            </ul>
        </nav>
        <div class="bgim">
            <div class="jumbotron">
                <img src="assets/image/logo2.png" alt="">
                <h1>Baratheon Hotel</h1>
                <p>Di sini Kami menawarkan Nirwana pada Anda</p>
            </div>
        </div>
    </header>

    <main>
        <div id="content">
            <article id="special" class="box">
                <h2>Special Offer</h2>
                <div class="container-lima">
                    <div class="card">
                        <img src="assets/image/special1.png" class="featured-image">
                        <div class="content">
                            <h4>Family Feast</h4>
                            <p>Dapatkan diskon Family Feast untuk reservasi 3 Kamar</p>
                            <button class="smallbtn">Read More</button>
                            <button class="smallbtn"><a href="pages/booking.php">Book Now</a></button>
                        </div>
                    </div>
                    <div class="card">
                        <img src="assets/image/non2.png" class="featured-image">
                        <div class="content">
                            <h4>20% Discount</h4>
                            <p>Untuk Kamar Double Bed selama bulan Mei</p>
                            <button class="smallbtn">Read More</button>
                            <button class="smallbtn"><a href="pages/booking.php">Book Now</a></button>
                        </div>
                    </div>
                    <div class="card">
                        <img src="assets/image/special2.jpg" class="featured-image">
                        <div class="content">
                            <h4>Bed & Breakfast</h4>
                            <p>Promo spesial pada selama bulan Mei</p>
                            <button class="smallbtn">Read More</button>
                            <button class="smallbtn"><a href="pages/booking.php">Book Now</a></button>
                        </div>
                    </div>
                </div>
            </article>
            <article id="ac" class="box">
                <h2>A/C Room</h2>
                <div class="container-empat">
                    <div class="card">
                        <img src="assets/image/ac1.png" class="featured-image">
                        <div class="content">
                            <h4>La casa</h4>
                            <p>Dengan suasana yang mengantarmu terlelap</p>
                            <p>Rp650.000,00/Malam</p>
                            <a href="pages/overview.php"><button class="smallbtn">View</button></a>
                            <a href="pages/booking.php"><button class="smallbtn">Booking</button></a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="assets/image/ac2.png" class="featured-image">
                        <div class="content">
                            <h4>Accueil</h4>
                            <p>Minimalis, serasa rumah sendiri</p>
                            <p>Rp600.000,00/Malam</p>
                            <a href="pages/overview.php"><button class="smallbtn">View</button></a>
                            <a href="pages/booking.php"><button class="smallbtn">Booking</button></a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="assets/image/ac3.png" class="featured-image">
                        <div class="content">
                            <h4>Zuhause</h4>
                            <p>Ruangan yang cerah dengan suasana mewah</p>
                            <p>Rp650.000,00/Malam</p>
                            <a href="pages/overview.php"><button class="smallbtn">View</button></a>
                            <a href="pages/booking.php"><button class="smallbtn">Booking</button></a>
                        </div>
                    </div>
                </div>
            </article>

        </div>

        <aside>

            <article id="dish" class="box">
                <h2>Dishes & Beverages</h2>
                <div class="container-empat">
                    <div class="card">
                        <img src="assets/image/dish1.png" class="featured-image">
                        <div class="content">
                            <p>Mashed Potato Risotto, by Chef Abu Hanif</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="assets/image/dish2.png" class="featured-image">
                        <div class="content">
                            <p>The Hot Brown, Signature dish by Chef Fred Schmidt</p>

                        </div>
                    </div>
                    <div class="card">
                        <img src="assets/image/dish3.png" class="featured-image">
                        <div class="content">
                            <p>Tenderloin Steak, with Barbeque Sauce</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="assets/image/bev3.png" class="featured-image">
                        <div class="content">
                            <p>Black Leave Cappucino, makes your day smoother</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="assets/image/bev4.png" class="featured-image">
                        <div class="content">
                            <p>Water Melonia, for refresh The Summer</p>
                        </div>
                    </div>
                </div>
            </article>
        </aside>
    </main>
    <article id="overdex" class="kolom-utama box">
        <h2>Non-A/C Room</h2>
        <div class="container-empat">
            <div class="card">
                <img src="assets/image/non1.png" class="featured-image">
                <div class="content">
                    <h4>Homu</h4>
                    <p>Rasakan Interior Otentik Jepang</p>
                    <p>Rp550.000,00/Malam</p>
                    <a href="pages/overview.php"><button class="smallbtn">View</button></a>
                    <a href="pages/booking.php"><button class="smallbtn">Booking</button></a>
                </div>
            </div>
            <div class="card">
                <img src="assets/image/non2.png" class="featured-image">
                <div class="content">
                    <h4>Die Huis</h4>
                    <p>Cocok bagi Traveller menyegarkan raga kembali</p>
                    <p>Rp500.000,00/Malam</p>
                    <a href="pages/overview.php"><button class="smallbtn">View</button></a>
                    <a href="pages/booking.php"><button class="smallbtn">Booking</button></a>
                </div>
            </div>
            <div class="card">
                <img src="assets/image/non3.png" class="featured-image">
                <div class="content">
                    <h4>Phteah</h4>
                    <p>Tetap eksklusif dengan pemandangan kota</p>
                    <p>Rp400.000,00/Malam</p>
                    <a href="pages/overview.php"><button class="smallbtn">View</button></a>
                    <a href="pages/booking.php"><button class="smallbtn">Booking</button></a>
                </div>
            </div>
        </div>
    </article>
    <div class="bgim">
        <footer>
            <p>Baratheon Hotel &#169; 2020, Denny Putra Y.P.</p>
        </footer>
    </div>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
</body>

</html>