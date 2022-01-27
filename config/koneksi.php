<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "kendaraan";

$koneksi = mysqli_connect($server, $username, $password, $database);

if (!$koneksi){
	die ("Koneksi gagal");
}
?>