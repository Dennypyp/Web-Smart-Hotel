<?php
require '../control/session.php';

$email = $_SESSION['username'];


$admin = query("SELECT * FROM users WHERE email= '$email'")[0];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/profile.css">
    <link rel="stylesheet" href="../assets/css/style2.css">
</head>

<body>
    <header>
        <nav id="nav">
            <div>
                <img src="../assets/image/logo1.png" alt="">
                <h2>Admin Baratheon</h2>
            </div>
            <ul>
                <li><a href="halaman-admin.php" class="anchor" id="view">Home</a></li>
                <li><a href="daftar-member.php" class="anchor">Daftar Member</a></li>
                <li><a href="akun.php" class="anchor">Akun</a></li>

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

    <div class="row" style="margin-left: 70px; margin-right: 70px; margin-bottom: 30px;">
        <div class="col-sm-12">
            <h2 class="text-center">Daftar Booking</h2>
            <p>
                <?php
                try {

                    $query = "SELECT b.bookid, DATE_FORMAT(b.checkin,'%M %d %Y')
                            AS checkin, DATE_FORMAT(b.checkout,'%M %d %Y')
                            AS checkout, b.room, u.first_name, u.last_name, u.email
                            from booking b join users u
                            on b.userid=u.userid order by b.bookid ASC";
                    $result = mysqli_query($dbcon, $query);
                    if ($result) {
                        echo '<table class="table table-striped text-center">
                                <tr>
                                <th scope="col">Book Id</th>
                                <th scope="col">Check In</th>
                                <th scope="col">Check Out</th>
                                <th scope="col">Room</th>
                                <th scope="col">Cust. Name</th>
                                <th scope="col">Cust. Email</th>
                                </tr>';

                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

                            $checkin = htmlspecialchars($row['checkin'], ENT_QUOTES);
                            $checkout = htmlspecialchars($row['checkout'], ENT_QUOTES);
                            $room = htmlspecialchars($row['room'], ENT_QUOTES);
                            $bookid = htmlspecialchars($row['bookid'], ENT_QUOTES);
                            $first_name = htmlspecialchars($row['first_name'], ENT_QUOTES);
                            $last_name = htmlspecialchars($row['last_name'], ENT_QUOTES);
                            $email = htmlspecialchars($row['email'], ENT_QUOTES);
                            echo '<tr>
                                    <td>' . $bookid . '</td>';
                            echo '<td>' . $checkin . '</td>
                                    <td>' . $checkout . '</td>
                                    <td>' . $room . '</td>
                                    <td>' . $first_name.' '.$last_name . '</td>
                                    <td>' . $email . '</td>
                                    </tr>';
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