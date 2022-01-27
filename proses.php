<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="admin/js/sweetalert.min.js">
</head>
<body>
	<?php
	$i = $_GET['i'];
	if ($i == 'login')) {
        $username = $_POST['username'];
    $password = $_POST['password'];
    $cek = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password='$password'");
    $jmlh = mysqli_num_rows($cek);
    $data = mysqli_fetch_array($cek);
    if ($jmlh < 1) {
        echo "<script>alert('akun tidak ditemukan !');</script>";
    } else {
        if ($data['password'] <> $password) {
            echo "<script>alert('Password Salah !');</script>";
        } else {
            session_start();
            $_SESSION['username']=$data['username'];
            $_SESSION['id_user']=$data['id_user'];
            $_SESSION['status_user']=$data['status_user'];
            echo "<script>alert('Login Berhasil Welcome ".$_SESSION['username']." !');window.location='index.php';</script>";
        }
    }
    }
	?>
</body>
</html>