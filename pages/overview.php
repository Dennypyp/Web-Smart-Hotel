<?php
require '../control/proses.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Hotel Online</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/script.js"></script>
</head>

<body>
    <header>
        <nav id="nav">
            <div>
                <img src="../assets/image/logo1.png" alt="">
                <h2>Baratheon Hotel</h2>
            </div>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="booking.php">Booking</a></li>
                <li><a href="resto.php">Restaurant</a></li>
                <li><a href="overview.php" id="view">Overview</a></li>
                <li><a href="profile.php">Profile</a></li>

            </ul>
        </nav>
        <div class="bgim">
            <div class="jumbotron">
                <img src="../assets/image/logo2.png" alt="">
                <h1>Baratheon Hotel</h1>
                <p>Di sini Kami menawarkan Nirwana pada Anda</p>
            </div>
        </div>
    </header>
    <div class="kolom-utama box" id="overdish">

        <h2>Room Overview</h2>


        <div class="container container-tiga">
            <div class="thumbnail">
                <a href="#gambar-1">
                    <img src="../assets/image/ac1.png" alt="" class="thumb">
                </a>

                <div class="overlay" id="gambar-1">
                    <a href="#" class="close">x close</a>
                    <img src="../assets/image/ac1.png" alt="">
                </div>
            </div>
            <div class="thumbnail">
                <a href="#gambar-2">
                    <img src="../assets/image/ac2.png" alt="" class="thumb">
                </a>

                <div class="overlay" id="gambar-2">
                    <a href="#" class="close">x close</a>
                    <img src="../assets/image/ac2.png" alt="">

                </div>

            </div>
            <div class="thumbnail">
                <a href="#gambar-3">
                    <img src="../assets/image/ac3.png" alt="" class="thumb">
                </a>

                <div class="overlay" id="gambar-3">
                    <a href="#" class="close">x close</a>
                    <img src="../assets/image/ac3.png" alt="">
                </div>

            </div>
            <div class="thumbnail">
                <a href="#gambar-4">
                    <img src="../assets/image/non1.png" alt="" class="thumb">
                </a>

                <div class="overlay" id="gambar-4">
                    <a href="#" class="close">x close</a>
                    <img src="../assets/image/non1.png" alt="">
                </div>

            </div>
            <div class="thumbnail">
                <a href="#gambar-5">
                    <img src="../assets/image/non2.png" alt="" class="thumb">
                </a>

                <div class="overlay" id="gambar-5">
                    <a href="#" class="close">x close</a>
                    <img src="../assets/image/non2.png" alt="">
                </div>

            </div>
            <div class="thumbnail">
                <a href="#gambar-6">
                    <img src="../assets/image/non3.png" alt="" class="thumb">

                </a>

                <div class="overlay" id="gambar-6">
                    <a href="#" class="close">x close</a>
                    <img src="../assets/image/non3.png" alt="">
                </div>

            </div>
        </div>
    </div>
    <div class="kolom-utama box" id="overdish">

        <h2>Ballroom</h2>


        <div class="container container-tiga">
            <div class="thumbnail">
                <a href="#ball-1">
                    <img src="../assets/image/ballroom1.png" alt="" class="thumb">
                </a>

                <div class="overlay" id="ball-1">
                    <a href="#" class="close">x close</a>
                    <img src="../assets/image/ballroom1.png" alt="">
                </div>
            </div>
            <div class="thumbnail">
                <a href="#ball-2">
                    <img src="../assets/image/ballroom2.png" alt="" class="thumb">
                </a>
                <div class="overlay" id="ball-2">
                    <a href="#" class="close">x close</a>
                    <img src="../assets/image/ballroom2.png" alt="">

                </div>

            </div>
            <div class="thumbnail">
                <a href="#ball-3">
                    <img src="../assets/image/ballroom3.png" alt="" class="thumb">
                </a>
                <div class="overlay" id="ball-3">
                    <a href="#" class="close">x close</a>
                    <img src="../assets/image/ballroom3.png" alt="">
                </div>

            </div>
        </div>
    </div>
    <div class="kolom-utama box" id="overdish">

        <h2>Swimming Pool</h2>


        <div class="container container-tiga">
            <div class="thumbnail">
                <a href="#pool-1">
                    <img src="../assets/image/pool1.png" alt="" class="thumb">
                </a>

                <div class="overlay" id="pool-1">
                    <a href="#" class="close">x close</a>
                    <img src="../assets/image/pool1.png" alt="">
                </div>
            </div>
            <div class="thumbnail">
                <a href="#pool-2">
                    <img src="../assets/image/pool2.png" alt="" class="thumb">
                </a>
                <div class="overlay" id="pool-2">
                    <a href="#" class="close">x close</a>
                    <img src="../assets/image/pool2.png" alt="">

                </div>

            </div>
            <div class="thumbnail">
                <a href="#pool-3">
                    <img src="../assets/image/pool3.png" alt="" class="thumb">
                </a>
                <div class="overlay" id="pool-3">
                    <a href="#" class="close">x close</a>
                    <img src="../assets/image/pool3.png" alt="">
                </div>
            </div>
            <div class="thumbnail">
                <a href="#pool-4">
                    <img src="../assets/image/pool4.png" alt="" class="thumb">
                </a>
                <div class="overlay" id="pool-4">
                    <a href="#" class="close">x close</a>
                    <img src="../assets/image/pool4.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="kolom-utama box" id="overdish">
        <h2>Contact Us</h2>
        <div class="container-lima">
            <div class="card">
                <img src="../assets/image/abu.png" class="featured-image" alt="geografis">
                <div class="content">
                    <h4>Abu Hanif</h4>
                    <p>081223435678</p>

                </div>
            </div>
            <div class="card">
                <img src="../assets/image/denny.png" class="featured-image" alt="geografis">
                <div class="content">
                    <h4>Denny Putra</h4>
                    <p>0895338641101</p>

                </div>
            </div>
            <div class="card">
                <img src="../assets/image/aldi.png" class="featured-image" alt="geografis">
                <div class="content">
                    <h4>Aldi Irwantono</h4>
                    <p>089343657888</p>
                </div>
            </div>
            <div class="card">
                <img src="../assets/image/agung.png" class="featured-image" alt="geografis">
                <div class="content">
                    <h4>Agung Waskito</h4>
                    <p>087345677654</p>
                </div>
            </div>
        </div>
        <center>
            <ul>
                <li><a href="https://www.instagram.com/dennypyp" target="_blank">
                        <img src="../assets/image/ig.png" alt="">
                    </a></li>
                <li><a href="https://www.twitter.com/dennypyp" target="_blank">
                        <img src="../assets/image/twit.png" alt="">
                    </a></li>
                <li><a href="https://www.facebook.com/denny.reaperdead" target="_blank">
                        <img src="../assets/image/fb.png" alt="">
                    </a></li>
            </ul>
        </center>
    </div>


    <div class="bgim">
        <footer>
            <p>Baratheon Hotel &#169; 2020, Denny Putra Y.P.</p>
        </footer>
    </div>
</body>

</html>