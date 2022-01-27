<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="admin/js/sweetalert.min.js">
</head>
<body>
	<?php
include 'config/koneksi.php';
   if (isset($_POST['register'])) {
    	$nama = mysqli_escape_string($koneksi,$_POST['nama']);
	$username = mysqli_escape_string($koneksi,$_POST['username']);
	$password = mysqli_escape_string($koneksi,$_POST['password']);
	$email = mysqli_escape_string($koneksi,$_POST['email']);
	$level = '0';
	$cek = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");
	$jmlh = mysqli_num_rows($cek);
	if ($jmlh > 0) {
			 echo "<script>alert('Username sudah ada !');</script>";
	} else {
		$insert = mysqli_query($koneksi,"INSERT INTO user VALUES (
			'',
			'$nama',
			'$username',
			'$password',
			'$email',
			'$level'
			)");
		if ($insert) {
			 echo "<script>alert('Register Berhasil ! Silahkan Login');window.location='login.php';</script>";
		} else {
			echo "<script>alert('Register Gagal !');</script>";
		}
	}
    }
    ?>
</body>
</html>
