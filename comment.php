<?php
include 'config/koneksi.php';
$id=$_GET['id'];
session_start();
if (empty($_SESSION['username'])) {
	echo "<script>alert('Harus Login duluu ! !');window.location='article.php?id=".$id."';</script>";
} else {
	$id_user = $_SESSION['id_user'];
	$komentar = $_POST['komentar'];
	$insert = mysqli_query($koneksi,"INSERT INTO komentar VALUES (
	'',
	'$komentar',
	'$id_user',
	'$id'
	)");
if (!$insert) {
	echo "<script>alert('Komentar Gagal ! !');window.location='article.php?id=".$id."';</script>";
} else {
	echo "<script>window.location='article.php?id=".$id."';</script>";
}
 }
?>