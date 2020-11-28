<?php
session_start();
require('../model/mysqli_connect.php');
if (!isset($_SESSION['username'])) { // Jika tidak ada session username berarti diabelum login
    header("Location: ../access/login.php"); // Kita Redirect ke halaman login.php
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Hotel Online</title>
    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>
    <div class="bgim">
        <div class="back-resto">
            <header>
                <div class="bgim">
                    <div class="jumbotron">
                        <img src="../assets/image/logo2.png" alt="">
                        <h1>Baratheon Hotel</h1>
                        <p>Di sini Kami menawarkan Nirwana pada Anda</p>
                    </div>
                </div>
                <nav id="nav">
                    <div>

                        <img src="../assets/image/logo1.png" alt="">
                        <h2>Baratheon Hotel</h2>
                    </div>
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="booking.php">Booking</a></li>
                        <li><a href="resto.php" id="view">Restaurant</a></li>
                        <li><a href="overview.php">Overview</a></li>
                        <li><a href="profile.php">Profile</a></li>

                    </ul>
                </nav>
            </header>
            <div class="headerr">
                <div class="h-upper">
                    <div class="h-judul">
                        <h1>
                            Barathy <br> Feast
                        </h1>
                    </div>

                </div>
                <div class="h-bottom">
                    <div class="k1" style="float: left;"></div>
                    <div class="h-isi">
                        <div class="k2"></div>
                        <div class="h-isi1" style="float: left;">
                            <p>Barathy Feast menyajikan hidangan makan besar yang lezat dan memuaskan lidah setiap kalangan. Kehangatan keluarga akan tersaji di atas meja untuk anda. Dengan sajian otentik dari penjuru Asia , Amerika, dan Eropa.</p>
                        </div>
                        <div class="h-isi2" style="float: right;">
                            <p>Feast adalah makan besar, makanan lezat yang disajikan di sebuah pesta atau perayaan. Anda mungkin memiliki pesta untuk merayakan hari terakhir sekolah setiap tahun.</p>
                        </div>
                    </div>
                    <div class="k3" style="float: right;"></div>
                </div>
            </div>

            <main>
                <div class="k4" style="float: left;"></div>
                <div class="b-isi">
                    <div class="kolom-utama box" id="overdish">

                        <h2 id="head-resto">Baratheon Resto</h2>


                        <div class="contain container-tiga">
                            <img src="../assets/image/dish1.png" alt="" class="full">
                            <div class="thumbnail">
                                <img src="../assets/image/dish1.png" alt="" class="thumb">
                            </div>
                            <div class="thumbnail">
                                <img src="../assets/image/dish2.png" alt="" class="thumb">
                            </div>
                            <div class="thumbnail">
                                <img src="../assets/image/dish3.png" alt="" class="thumb">
                            </div>
                            <div class="thumbnail">
                                <img src="../assets/image/dish4.png" alt="" class="thumb">
                            </div>
                            <div class="thumbnail">
                                <img src="../assets/image/dish5.png" alt="" class="thumb">
                            </div>
                            <div class="thumbnail">
                                <img src="../assets/image/dish6.png" alt="" class="thumb">
                            </div>
                            <div class="thumbnail">
                                <img src="../assets/image/dish7.png" alt="" class="thumb">
                            </div>
                            <div class="thumbnail">
                                <img src="../assets/image/dish8.png" alt="" class="thumb">
                            </div>
                        </div>


                    </div>
                    <div class="b-isi1">
                        <p class="isii"><img src="../assets/image/dish1.png" width="150px" height="80px" style="float: right; margin: 0 8px 4px 0; border-radius: 5px;"><span class="nori">Mashed Potato Risotto</span><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga cum eligendi officiis, deleniti deserunt ratione. Dolorem fugiat officia sit nihil laboriosam. Explicabo odit cupiditate expedita quam, quasi at repellat iste?</p>
                    </div>
                    <div class="b-isi2">
                        <p class="isii"><img src="../assets/image/dish2.png" width="150px" height="80px" style="float: right; margin: 0 8px 4px 0;  border-radius: 5px;"><span class="sashi">The Hot Brown</span><br>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis magni nemo asperiores velit debitis maiores earum id nisi ducimus? Quibusdam vitae eum, a dolore quasi officiis impedit ex expedita ea!</p>
                    </div>
                    <center>
                        <div class="b-isi3">
                            <img src="../assets/image/dish3.png" width="255px" height="150px" style="border-radius: 5px;">
                            <h3 id="font-resto">Tenderloin Steak</h3>

                        </div>
                        <div class="b-isi4">
                            <img src="../assets/image/dish4.png" width="255px" height="150px" style="border-radius: 5px;">
                            <h3 id="font-resto">Black Soup</h3>
                        </div>
                        <div class="b-isi5">
                            <img src="../assets/image/dish5.png" width="255px" height="150px" style="border-radius: 5px;">
                            <h3 id="font-resto">Konro Soup</h3>
                        </div>
                        <div class="b-isi6">
                            <img src="../assets/image/dish6.png" width="255px" height="150px" style="border-radius: 5px;">
                            <h3 id="font-resto">Bull Tail</h3>
                        </div>
                    </center>
                </div>
                <div class="k5" style="float: right;"></div>

            </main>
            <div class="kolom-utama box" id="overdish" style="margin-top: -300px;">
                <h2 id="head-resto">Beverage</h2>
                <div class="container-lima">
                    <div class="card">
                        <img src="../assets/image/bev1.png" class="featured-image">
                        <div class="content">
                            <h4 id="font-resto">Mojito Cocktail</h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum, quod.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../assets/image/bev2.png" class="featured-image">
                        <div class="content">
                            <h4 id="font-resto">Winter Boba</h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum, quod.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../assets/image/bev3.png" class="featured-image">
                        <div class="content">
                            <h4 id="font-resto">Black Leave Cappucino</h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum, quod.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../assets/image/bev4.png" class="featured-image">
                        <div class="content">
                            <h4 id="font-resto">Water Melonia</h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum, quod.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bgim">
                <footer>
                    <p>Baratheon Hotel &#169; 2020, Denny Putra Y.P.</p>
                </footer>
            </div>
        </div>
    </div>
    <script src="../assets/js/script.js"></script>
</body>

</html>