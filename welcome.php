<?php
include 'config/koneksi.php';
if (isset($_SESSION['id_user'])) {
  $id = $_SESSION['id_user'];
  $sql = mysqli_query($koneksi,"SELECT nama_user FROM user WHERE id_user='$id'");
  $data = mysqli_fetch_array($sql);
	echo '
                  <a href="#" class="dropdown-toggle" style="text-transform:uppercase;" data-toggle="dropdown">'.$data['nama_user'].' <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                  <li><a href="profile.php">Setting Profile</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                  </ul>';
} else {
	echo '
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">ACCOUNT <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="login.php">LOGIN / REGISTER</a></li>
                  </ul>';
}
?>