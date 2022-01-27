<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Admin Kendaraan</title>
    <!-- Favicon-->
    <link rel="icon" href="../image/brand.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <<link rel="stylesheet" type="text/css" href="../iconfont/material-icons.css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
    <?php
    include 'config/koneksi.php';
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
    $password = $_POST['password'];
    $cek = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password='$password'");
    $jmlh = mysqli_num_rows($cek);
    $data = mysqli_fetch_array($cek);
    if ($jmlh < 1) {
        echo "<script>alert('akun tidak ditemukan !');</script>";
    } else {
        if ($data['status_user'] == '0') {
            echo "<script>alert('Admin Only !');</script>";
        } else {
            session_start();
            $_SESSION['username']=$data['username'];
            $_SESSION['id_user']=$data['id_user'];
            $_SESSION['status_user']=$data['status_user'];
            $_SESSION['nama_user']=$data['nama_user'];
            echo "<script>alert('Login Berhasil Welcome ".$_SESSION['username']." !');window.location='index.php';</script>";
        }
    }
    }
    

    ?>
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Admin<b>Kendaraan</b></a>
            <small>Admin Only !</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" action="" method="POST">
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <button class="btn btn-block bg-pink waves-effect" name="login" type="submit">SIGN IN</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/examples/sign-in.js"></script>
</body>

</html>