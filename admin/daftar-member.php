<?php 
require '../control/session.php';
$email = $_SESSION['username'];


$admin = query("SELECT * FROM users WHERE email= '$email'")[0];
$adminid=$admin["userid"];
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
                <li><a href="halaman-admin.php" class="anchor">Home</a></li>
                <li><a href="daftar-member.php" class="anchor" id="view">Daftar Member</a></li>
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
            <h2 class="text-center">Daftar User</h2>
            <p>
            <?php 
            try{
                // require('../model/mysqli_connect.php');
                $query = "SELECT last_name, first_name, email, phone, user_level, DATE_FORMAT(registration_date,'%M %d %Y')
                AS regdat, userid from users WHERE userid != $adminid && user_level != 2 order by registration_date ASC";
                $result = mysqli_query($dbcon,$query);
                if($result){
                    echo '<table class="table table-striped text-center">
                    <tr>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">User Level</th>
                    <th scope="col">Date Registered</th>
                    </tr>';

                    while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){

                            $user_id=htmlspecialchars($row['userid'],ENT_QUOTES);
                            $last_name=htmlspecialchars($row['last_name'],ENT_QUOTES);
                            $first_name=htmlspecialchars($row['first_name'],ENT_QUOTES);
                            $email=htmlspecialchars($row['email'],ENT_QUOTES);
                            $phone=htmlspecialchars($row['phone'],ENT_QUOTES);
                            if($row['user_level']==1){
                                $user_level= "Admin";
                            }else{
                                $user_level= "Member";
                            }
                            $registration_date=htmlspecialchars($row['regdat'],ENT_QUOTES);
                            echo '<tr>
                                    <td><a href="edit_user.php?id='.$user_id.'">Ubah</a></td>';
                            echo '<td><a href="del_user.php?id='.$user_id.'">Hapus</a></td>';
                            echo '<td>'.$last_name.'</td>
                                    <td>'.$first_name.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$phone.'</td>
                                    <td>'.$user_level.'</td>
                                    <td>'.$registration_date.'</td>
                                </tr>';
                    }
                    echo'</table>';
                    mysqli_free_result($result);
                }
                else {
                    echo '<p class="text-center">Saat ini data users tidak bisa ditampilkan. ';
                    echo 'Mohon maaf atas ketidaknyamanan ini</p>';
                    exit;
                }// End of if ($result)
                mysqli_close($dbcon);
                }
                catch(Exception $e){
                    print"The system is busy please try later";
                }
                catch(Error $e){
                    print"The system is busy please try again later";
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