<?php
require '../control/control.php';

?>

<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/my-login.css">
</head>


<body class="my-login-page">

    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper">
                    <div class="brand">
                        <img src="../assets/img/icon.png" alt="logo">
                    </div>
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title">Login</h4>
                            <form method="POST" class="my-login-validation" novalidate="" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                                <div class="form-group">
                                    <label for="username">Email</label>
                                    <input id="username" type="email" class="form-control" name="username" value="" required autofocus placeholder="email@gmail.com">
                                    <div class="invalid-feedback">
                                        Email Tidak Boleh Kosong
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password
                                    </label>
                                    <input id="password" type="password" class="form-control" name="password" required data-eye>
                                    <div class="invalid-feedback">
                                        Password Tidak Boleh Kosong
                                    </div>
                                </div>


                                <div class="form-group m-0">
                                    <button type="submit" class="btn btn-primary btn-block" name="login" data-toggle="modal" data-target="#exampleModal">
                                        Login
                                    </button>
                                </div>
                                <div class="mt-4 text-center">
                                    Belum Punya Akun? <a href="registrasi.php" tite="registrasi">Registrasi</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="footer">
                        Baratheon Hotel &#169; 2020, Denny Putra Y.P.
                    </div>
                </div>
            </div>
        </div>
    </section>




    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/my-login.js"></script>
    <script src="../assets/js/sweetalert2.all.min.js"></script>
    <!-- <script src="../assets/js/scriptswal.js"></script> -->
</body>

</html>