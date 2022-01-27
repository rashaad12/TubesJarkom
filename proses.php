<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="js/sweetalert.min.js"></script>
</head>
<body>
<?php
include 'config/koneksi.php';
$i = $_GET['i'];
if ($i =='tambahuser') {
	$nama = mysqli_escape_string($koneksi,$_POST['nama']);
	$username = mysqli_escape_string($koneksi,$_POST['username']);
	$password = mysqli_escape_string($koneksi,$_POST['password']);
	$email = mysqli_escape_string($koneksi,$_POST['email']);
	$level = mysqli_escape_string($koneksi,$_POST['level']);

	$cek = mysqli_query($koneksi,"SELECT username FROM user WHERE username='$username'");
	$jmlh = mysqli_num_rows($cek);
	if ($jmlh > 0) {
				 echo '<script type="text/javascript">
		    swal({
		    title: "Maaf",
		     icon: "error",
		    text: "Username Sudah Digunakan",
		    type: "error"
		}).then(function() {
		    window.location = "user/";
		});
		    </script>';
	} else {
		$insert = mysqli_query($koneksi,"INSERT INTO user VALUES (
			'',
			'$nama',
			'$username',
			'$password',
			'$email',
			'$level'
			)");
		if ($insert ) {
			 echo '<script type="text/javascript">
		    swal({
		    title: "Berhasil !",
		     icon: "success",
		    text: "User telah ditambahkan !",
		    type: "success"
		}).then(function() {
		    window.location = "user/";
		});
		    </script>';
		} else {
			 echo '<script type="text/javascript">
		    swal({
		    title: "Maaf",
		     icon: "error",
		    text: "User Gagal Ditambahkan",
		    type: "error"
		}).then(function() {
		    window.location = "user/";
		});
		    </script>';
		}
	}
}

if ($i == 'updateuser') {
	$id =$_POST['id_user'];
	$nama = mysqli_escape_string($koneksi,$_POST['nama']);
	$username = mysqli_escape_string($koneksi,$_POST['username']);
	$password = mysqli_escape_string($koneksi,$_POST['password']);
	$email = mysqli_escape_string($koneksi,$_POST['email']);
	$level = mysqli_escape_string($koneksi,$_POST['level']);
		$updateuser = mysqli_query($koneksi,"UPDATE user SET nama_user='$nama', username='$username', password='$password',email='$email', status_user='$level' WHERE id_user='$id'");
		if ($updateuser ) {
			 echo '<script type="text/javascript">
		    swal({
		    title: "Berhasil !",
		     icon: "success",
		    text: "User telah Diupdate !",
		    type: "success"
		}).then(function() {
		    window.location = "user/";
		});
		    </script>';
		} else {
			 echo '<script type="text/javascript">
		    swal({
		    title: "Maaf",
		     icon: "error",
		    text: "User Gagal Diupdate",
		    type: "error"
		}).then(function() {
		    window.location = "user/";
		});
		    </script>';
		}
}
if ($i == 'deleteuser') {
	$id_user= $_GET['id'];
	$delete = mysqli_query($koneksi,"DELETE FROM user WHERE id_user='$id_user'");
	if ($delete) {
		echo '<script type="text/javascript">
		    swal({
		    title: "Berhasil !",
		     icon: "success",
		    text: "User telah Dihapus !",
		    type: "success"
		}).then(function() {
		    window.location = "user/";
		});
		    </script>';
	} else {
		echo '<script type="text/javascript">
		    swal({
		    title: "Berhasil !",
		     icon: "success",
		    text: "User Gagal Dihapus !",
		    type: "success"
		}).then(function() {
		    window.location = "user/";
		});
		    </script>';
	}
}
if ($i == 'tambahfitment') {
	$judul = $_POST['judul'];
	$katfitment = $_POST['katfitment'];
	$nama_ken = $_POST['namakend'];
	$frwh = $_POST['frwh'];
	$frwd = $_POST['frwd'];
	$frww = $_POST['frww'];
	$frwo = $_POST['frwo'];
	$rwh = $_POST['rwh'];
	$rwd = $_POST['rwd'];
	$rww = $_POST['rww'];
	$rwo = $_POST['rwo'];
	$frtt = $_POST['frtt'];
	$ftw = $_POST['ftw'];
	$fto = $_POST['fto'];
	$rtt = $_POST['rtt'];
	$rtw = $_POST['rtw'];
	$rto = $_POST['rto'];
	$img = $_FILES ['file']['name'];
	$tmp = $_FILES['file']['tmp_name'];
	//Insert front wheel
	$insertfrw = mysqli_query($koneksi,"INSERT INTO wheelfront VALUES (
		'',
		'$frwh',
		'$frwd',
		'$frww',
		'$frwo'
		)");
	if (!$insertfrw) {
			echo '<script type="text/javascript">
		    swal({
		    title: "Gagal !",
		     icon: "error",
		    text: "Front Wheel Gagal Ditambah !",
		    type: "error"
		}).then(function() {
		    window.location = "fitment/";
		});
		    </script>';
	} else {
		$selectfrwh = mysqli_query($koneksi,"SELECT id_wheelfront FROM wheelfront ORDER BY id_wheelfront DESC LIMIT 1");
		$datafrwh = mysqli_fetch_array($selectfrwh);
		$idfrwh = $datafrwh['id_wheelfront'];
	}
	$insertrw = mysqli_query($koneksi,"INSERT INTO wheelrear VALUES (
		'',
		'$rwh',
		'$rwd',
		'$rww',
		'$rwo'
		)");
	if (!$insertrw) {
		echo '<script type="text/javascript">
		    swal({
		    title: "Gagal !",
		     icon: "error",
		    text: "Rear Wheel Gagal Ditambah !",
		    type: "error"
		}).then(function() {
		    window.location = "fitment/";
		});
		    </script>';
	} else {
		$selectrw = mysqli_query($koneksi,"SELECT id_wheelrear FROM wheelrear ORDER BY id_wheelrear DESC LIMIT 1");
		$datarw = mysqli_fetch_array($selectrw);
		$idrw = $datarw['id_wheelrear'];
	}
	$insertfrtt = mysqli_query($koneksi,"INSERT INTO tirefront VALUES (
		'',
		'$frtt',
		'$ftw',
		'$fto'
		)");
	if (!$insertfrtt) {
		echo '<script type="text/javascript">
		    swal({
		    title: "Gagal !",
		     icon: "error",
		    text: "Front Tire Gagal Ditambah !",
		    type: "error"
		}).then(function() {
		    window.location = "fitment/";
		});
		    </script>';
	} else {
		$selectfrtt = mysqli_query($koneksi,"SELECT id_tirefront FROM tirefront ORDER BY id_tirefront DESC LIMIT 1");
		$datafrtt = mysqli_fetch_array($selectfrtt);
		$idfrtt = $datafrtt['id_tirefront'];
	}
	$insertrto = mysqli_query($koneksi,"INSERT INTO tirerear VALUES (
		'',
		'$rtt',
		'$rtw',
		'$rto'
		)");
	if (!$insertrto) {
		echo '<script type="text/javascript">
		    swal({
		    title: "Gagal !",
		     icon: "error",
		    text: "Rear Tire Gagal Ditambah !",
		    type: "error"
		}).then(function() {
		    window.location = "fitment/";
		});
		    </script>';
	} else {
		$selectrto = mysqli_query($koneksi,"SELECT id_tirerear FROM tirerear ORDER BY id_tirerear DESC LIMIT 1");
		$datarto = mysqli_fetch_array($selectrto);
		$idrto = $datarto['id_tirerear'];
	}

	if (isset($img)) {
		if (!empty($img)) {
			$location = '../image/';
			move_uploaded_file($tmp, $location.$img);
			$sql = mysqli_query($koneksi,"INSERT INTO fitment VALUES (
				'',
				'$nama_ken',
				'$judul',
				'$img',
				'$idfrwh',
				'$idrw',
				'$idfrtt',
				'$idrto',
				'$katfitment',
				'1'
				)");
			if ($sql) {
				echo '<script type="text/javascript">
		    swal({
		    title: "Berhasil !",
		     icon: "success",
		    text: "Fitment telah Ditambahkan !",
		    type: "success"
		}).then(function() {
		    window.location = "fitment/";
		});
		    </script>';
			} else {
					echo '<script type="text/javascript">
		    swal({
		    title: "Gagal !",
		     icon: "error",
		    text: "Fitment Gagal Ditambahkan !",
		    type: "error"
		}).then(function() {
		    window.location = "fitment/";
		});
		    </script>';
			}
		}
	}
}
if ($i == 'updatefitment') {
	$id_fitment = $_POST['id_fitment'];
	$judul = $_POST['judul'];
	$katfitment = $_POST['katfitment'];
	$nama_ken = $_POST['namakend'];
	$frwh = $_POST['frwh'];
	$frwd = $_POST['frwd'];
	$frww = $_POST['frww'];
	$frwo = $_POST['frwo'];
	$rwh = $_POST['rwh'];
	$rwd = $_POST['rwd'];
	$rww = $_POST['rww'];
	$rwo = $_POST['rwo'];
	$frtt = $_POST['frtt'];
	$ftw = $_POST['ftw'];
	$fto = $_POST['fto'];
	$rtt = $_POST['rtt'];
	$rtw = $_POST['rtw'];
	$rto = $_POST['rto'];
	$img = $_FILES ['file']['name'];
	$tmp = $_FILES['file']['tmp_name'];

	$smuaid = mysqli_query($koneksi,"SELECT * FROM fitment WHERE id_fitment = '$id_fitment'");
	$dataid = mysqli_fetch_array($smuaid);
	$id_wheelfront = $dataid['id_wheelfront'];
	$id_wheelrear = $dataid['id_wheelrear'];
	$id_tirefront = $dataid['id_tirefront'];
	$id_tirerear = $dataid['id_tirerear'];

	$updatetwheelfront = mysqli_query($koneksi,"UPDATE wheelfront SET nama_wheelfront='$frwh',diameter_wheelfront='$frwd', width_wheelfront='$frww', offset_wheelfront='$frwo' WHERE id_wheelfront='$id_wheelfront'");
	if (!$updatetwheelfront) {
	 			echo '<script type="text/javascript">
		    swal({
		    title: "Gagal !",
		     icon: "error",
		    text: "Front Wheel Gagal Diupdate !",
		    type: "error"
		}).then(function() {
		    window.location = "fitment/";
		});
		    </script>';
	 } 
	$updatewheelrear = mysqli_query($koneksi,"UPDATE wheelrear SET nama_wheelrear = '$rwh', diameter_wheelrear='$rwd', width_wheelrear='$rww', offset_wheelrear='$rwo' WHERE id_wheelrear='$id_wheelrear'");
	if (!$updatewheelrear) {
	 	echo '<script type="text/javascript">
		    swal({
		    title: "Gagal !",
		     icon: "error",
		    text: "Rear Wheel Gagal Diupdate !",
		    type: "error"
		}).then(function() {
		    window.location = "fitment/";
		});
		    </script>';
	 }
	 $updatetirefront = mysqli_query($koneksi,"UPDATE tirefront SET nama_tirefront = '$frtt', width_tirefront='$ftw', offset_tirefront='$fto' WHERE id_tirefront='$id_tirefront'");
	 if (!$updatetirefront) {
	  	echo '<script type="text/javascript">
		    swal({
		    title: "Gagal !",
		     icon: "error",
		    text: "Tire Front Gagal Diupdate !",
		    type: "error"
		}).then(function() {
		    window.location = "fitment/";
		});
		    </script>';
	  } 
	  $updatetirerear = mysqli_query($koneksi,"UPDATE tirerear SET nama_tirerear = '$rtt', width_tirerear = '$rtw', offset_tirerear = '$rto' WHERE id_tirerear='$id_tirerear'");
	  if (!$updatetirerear) {
	  	echo '<script type="text/javascript">
		    swal({
		    title: "Gagal !",
		     icon: "error",
		    text: "Tire Rear Gagal Diupdate !",
		    type: "error"
		}).then(function() {
		    window.location = "fitment/";
		});
		    </script>';
	  }

	 if (isset($img)) {
		if (!empty($img)) {
			$location = '../image/';
			move_uploaded_file($tmp, $location.$img);
			$sql = mysqli_query($koneksi,"UPDATE fitment SET kendaraan_fitment='$nama_ken', judul_fitment='$judul', foto_fitment='$img', katfitment='$katfitment' WHERE id_fitment='$id_fitment'");
			if ($sql) {
				echo '<script type="text/javascript">
		    swal({
		    title: "Berhasil !",
		     icon: "success",
		    text: "Fitment telah Diupdate !",
		    type: "success"
		}).then(function() {
		    window.location = "fitment/";
		});
		    </script>';
			} else {
					echo '<script type="text/javascript">
		    swal({
		    title: "Gagal !",
		     icon: "error",
		    text: "Fitment Gagal Diupdate !",
		    type: "error"
		}).then(function() {
		    window.location = "fitment/";
		});
		    </script>';
			}
		} else {
		$updet = mysqli_query($koneksi,"UPDATE fitment SET kendaraan_fitment='$nama_ken', judul_fitment='$judul', katfitment='$katfitment' WHERE id_fitment='$id_fitment'");
			if ($updet) {
				echo '<script type="text/javascript">
		    swal({
		    title: "Berhasil !",
		     icon: "success",
		    text: "Fitment telah Diupdate !",
		    type: "success"
		}).then(function() {
		    window.location = "fitment/";
		});
		    </script>';
			} else {
					echo '<script type="text/javascript">
		    swal({
		    title: "Gagal !",
		     icon: "error",
		    text: "Fitment Gagal Diupdate !",
		    type: "error"
		}).then(function() {
		    window.location = "fitment/";
		});
		    </script>';
			}
	}
	} 
}

if ($i == 'deletefitment') {
	$id_fitment = $_GET['id'];
	$select = mysqli_query($koneksi,"SELECT id_wheelfront,id_wheelrear,id_tirefront,id_tirerear FROM fitment WHERE id_fitment='$id_fitment'");
	$iddata = mysqli_fetch_array($select);
	$id_tirerear=$iddata['id_tirerear'];
	$id_tirefront=$iddata['id_tirefront'];
	$id_wheelrear=$iddata['id_wheelrear'];
	$id_wheelfront=$iddata['id_wheelfront'];

	$deletetirerear = mysqli_query($koneksi,"DELETE FROM tirerear WHERE id_tirerear='$id_tirerear'");
	if (!$deletetirerear) {
			echo '<script type="text/javascript">
		    swal({
		    title: "Gagal !",
		     icon: "error",
		    text: "Tire rear Gagal Dihapus !",
		    type: "error"
		}).then(function() {
		    window.location = "fitment/";
		});
		    </script>';

	}
	$deletetirefront = mysqli_query($koneksi,"DELETE FROM tirefront WHERE id_tirefront='$id_tirefront'");
	if (!$deletetirefront) {
		echo '<script type="text/javascript">
		    swal({
		    title: "Gagal !",
		     icon: "error",
		    text: "Tire Front Gagal Dihapus !",
		    type: "error"
		}).then(function() {
		    window.location = "fitment/";
		});
		    </script>';
	}
	$deletewheelfront = mysqli_query($koneksi,"DELETE FROM wheelfront WHERE id_wheelfront='$id_wheelfront'");
	if (!$deletewheelfront) {
		echo '<script type="text/javascript">
		    swal({
		    title: "Gagal !",
		     icon: "error",
		    text: "Wheel Front Gagal Dihapus !",
		    type: "error"
		}).then(function() {
		    window.location = "fitment/";
		});
		    </script>';
	}
	$deletewheelrear = mysqli_query($koneksi,"DELETE FROM wheelrear WHERE id_wheelrear='$id_wheelrear'");
	if (!$deletewheelrear) {
		echo '<script type="text/javascript">
		    swal({
		    title: "Gagal !",
		     icon: "error",
		    text: "Wheel Rear Gagal Dihapus !",
		    type: "error"
		}).then(function() {
		    window.location = "fitment/";
		});
		    </script>';
	}
	$deletefitment = mysqli_query($koneksi,"DELETE FROM fitment WHERE id_fitment='$id_fitment'");
	if (!$deletefitment) {
		echo '<script type="text/javascript">
		    swal({
		    title: "Gagal !",
		     icon: "error",
		    text: "Fitment Gagal Dihapus !",
		    type: "error"
		}).then(function() {
		    window.location = "fitment/";
		});
		    </script>';
	} else {
		echo '<script type="text/javascript">
		    swal({
		    title: "Berhasil !",
		     icon: "success",
		    text: "Fitment telah Dihapus !",
		    type: "success"
		}).then(function() {
		    window.location = "fitment/";
		});
		    </script>';
	}
}
if ($i == 'tambahartikel') {
	$judul=$_POST['judul'];
	$content = $_POST['content'];
	$date = $_POST['tanggal'];
	$img = $_FILES['file']['name'];
	$tmp = $_FILES['file']['tmp_name'];
	$kategori = $_POST['kategori'];

	if (isset(($img))) {
		if (!empty($img)) {
			$location= '../image/';
			move_uploaded_file($tmp, $location.$img);
			$artikel = mysqli_query($koneksi,"INSERT INTO artikel VALUES (
					'',
					'$judul',
					'$content',
					'$date',
					'$img'
					'$kategori'
					)");
			if ($artikel) {
				echo '<script type="text/javascript">
		    swal({
		    title: "Berhasil !",
		     icon: "success",
		    text: "Artikel telah Ditambahkan !",
		    type: "success"
		}).then(function() {
		    window.location = "article/";
		});
		    </script>';
			} else {
			echo '<script type="text/javascript">
					    swal({
					    title: "Gagal !",
					     icon: "error",
					    text: "Artikel Gagal Ditambahkan !",
					    type: "error"
					}).then(function() {
					    window.location = "article/";
					});
					    </script>';
			}
		}
	}
	
}
if ($i == 'updateartikel') {
	$id = $_GET['idart'];
	$judul=$_POST['judul'];
	$content = $_POST['content'];
	$date = $_POST['tanggal'];
	$img = $_FILES['file']['name'];
	$tmp = $_FILES['file']['tmp_name'];
	$kategori = $_POST['kategori'];

	if (isset(($img))) {
		if (!empty($img)) {
			$location= '../image/';
			move_uploaded_file($tmp, $location.$img);
			$article = mysqli_query($koneksi,"UPDATE artikel SET judul_artikel='$judul', content_artikel='$content', 
				tanggal_artikel='$date', foto_artikel='$img',kategori='$kategori' WHERE id_artikel='$id'");
			if ($article) {
				echo '<script type="text/javascript">
		    swal({
		    title: "Berhasil !",
		     icon: "success",
		    text: "Artikel telah Update !",
		    type: "success"
		}).then(function() {
		    window.location = "article/";
		});
		    </script>';
			} else {
			echo '<script type="text/javascript">
					    swal({
					    title: "Gagal !",
					     icon: "error",
					    text: "Artikel Gagal Diupdate !",
					    type: "error"
					}).then(function() {
					    window.location = "article/";
					});
					    </script>';
			}
		} else {
			$det = mysqli_query($koneksi,"UPDATE artikel SET judul_artikel='$judul', content_artikel='$content', 
				tanggal_artikel='$date',kategori='$kategori' WHERE id_artikel='$id'");
			if ($det) {
					echo '<script type="text/javascript">
		    swal({
		    title: "Berhasil !",
		     icon: "success",
		    text: "Artikel telah Update !",
		    type: "success"
		}).then(function() {
		    window.location = "article/";
		});
		    </script>';
			} else {
				echo '<script type="text/javascript">
					    swal({
					    title: "Gagal !",
					     icon: "error",
					    text: "Artikel Gagal Diupdate !",
					    type: "error"
					}).then(function() {
					    window.location = "article/";
					});
					    </script>';
			}
		}
	}
}
if ($i == 'deleteartikel') {
	$id_artikel=$_GET['id'];
	$deleteart = mysqli_query($koneksi,"DELETE FROM artikel WHERE id_artikel='$id_artikel'");
	if ($deleteart) {
			echo '<script type="text/javascript">
		    swal({
		    title: "Berhasil !",
		     icon: "success",
		    text: "Artikel telah Dihapus !",
		    type: "success"
		}).then(function() {
		    window.location = "article/";
		});
		    </script>';
	} else {
		echo '<script type="text/javascript">
					    swal({
					    title: "Gagal !",
					     icon: "error",
					    text: "Artikel Gagal dihapus !",
					    type: "error"
					}).then(function() {
					    window.location = "article/";
					});
					    </script>';
	}
}
if ($i == 'tambahgaleri') {
	$date = $_POST['tanggal'];
	$img = $_FILES['file']['name'];
	$tmp = $_FILES['file']['tmp_name'];
		if (isset(($img))) {
		if (!empty($img)) {
			$location = '../image/';
			move_uploaded_file($tmp, $location.$img);
			$tambah = mysqli_query($koneksi,"INSERT INTO galeri VALUES (
				'',
				'$img',
				'$date'
				)");
			if ($tambah) {
				echo '<script type="text/javascript">
		    swal({
		    title: "Berhasil !",
		     icon: "success",
		    text: "Galeri telah Ditambah !",
		    type: "success"
		}).then(function() {
		    window.location = "galeri/";
		});
		    </script>';
			} else {
			echo '<script type="text/javascript">
					    swal({
					    title: "Gagal !",
					     icon: "error",
					    text: "Galeri Gagal Ditambah !",
					    type: "error"
					}).then(function() {
					    window.location = "galeri/";
					});
					    </script>';
			}
		}
	}
}
if ($i == 'deletegaleri') {
	$id = $_GET['id'];
	$hapus = mysqli_query($koneksi,"DELETE FROM galeri WHERE id_galeri='$id'");
	if ($hapus) {
		echo '<script type="text/javascript">
		    swal({
		    title: "Berhasil !",
		     icon: "success",
		    text: "Galeri telah Dihapus !",
		    type: "success"
		}).then(function() {
		    window.location = "galeri/";
		});
		    </script>';
	} else {
		echo '<script type="text/javascript">
					    swal({
					    title: "Gagal !",
					     icon: "error",
					    text: "Galeri Gagal dihapus !",
					    type: "error"
					}).then(function() {
					    window.location = "galeri/";
					});
					    </script>';
	}
}
if ($i == 'deletekomentar') {
	$id_komentar = $_GET['id'];
	$hapuskomen = mysqli_query($koneksi,"DELETE FROM komentar WHERE id_komentar='$id_komentar'");
	if ($hapuskomen) {
		echo '<script type="text/javascript">
		    swal({
		    title: "Berhasil !",
		     icon: "success",
		    text: "Galeri telah Dihapus !",
		    type: "success"
		}).then(function() {
		    window.location = "komentar/";
		});
		    </script>';
	} else {
		echo '<script type="text/javascript">
					    swal({
					    title: "Gagal !",
					     icon: "error",
					    text: "Komentar Gagal dihapus !",
					    type: "error"
					}).then(function() {
					    window.location = "komentar/";
					});
					    </script>';
	}
}
?>	
</body>
</html>
