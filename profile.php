<?php
include 'header.php';
include 'config/koneksi.php';
if (empty($_SESSION['username'])) {
  echo "<script>alert('Harus Login duluu ! !');window.location='article.php?id=".$id."';</script>";
} else {
  $id = $_SESSION['id_user'];
}

if (isset($_POST['update'])) {
  $nama = mysqli_escape_string($koneksi,$_POST['nama']);
  $username = mysqli_escape_string($koneksi,$_POST['username']);
  $password = mysqli_escape_string($koneksi,$_POST['password']);
  $email = mysqli_escape_string($koneksi,$_POST['email']);
  $update = mysqli_qUery($koneksi,"UPDATE user SET nama_user='$nama',username='$username',password='$password',email='$email' WHERE id_user='$id'");
  if ($update) {
      echo "<script>alert('Update Berhasil !');window.location='profile.php'</script>";
  } else {
    echo "<script>alert('Update Gagal !');window.location='profile.php'</script>";
  }
}
 
?>

   <section>
      <div class="container-fluid" align="center">
      <div class="col-md-12 mt-5">
          <div class="line-right" style="margin-bottom:7rem;">
          		<span>SETTING PROFILE</span>
       	  </div>
       	   <form action="" method="POST">
            <?php
            $sql = mysqli_query($koneksi,"SELECT * FROM user WHERE id_user='$id'");
            $data = mysqli_fetch_array($sql);
            ?>
			  <div class="form-group">
			    <label for="exampleInputEmail1"><i class="material-icons text-yellow">contact_mail</i> Nama Lengkap</label>
			    <input type="text" class="form-control" name="nama" value="<?php echo $data['nama_user']?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1"><i class="material-icons text-yellow">person</i> Username</label>
			    <input type="text" class="form-control" name="username" value="<?php echo $data['username']?>" id="exampleInputPassword1" placeholder="Username">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1"><i class="material-icons text-yellow">lock</i> Password</label>
			    <input type="password" class="form-control" name="password" value="<?php echo $data['password']?>" id="exampleInputPassword1" placeholder="Password">
			  </div>
			   <div class="form-group">
			    <label for="exampleInputPassword1"><i class="material-icons text-yellow">email</i> Email </label>
			    <input type="email" class="form-control" name="email" value="<?php echo $data['email']?>" id="exampleInputPassword1" placeholder="Email">
			  </div>
			   <div align="center">
			        <button class="btn btn-warning" type="submit" name="update">UPDATE</button>
			      </div>
			</form>
      </div>
     </div>
    </section>
   

<?php
include 'footer.php';
?>