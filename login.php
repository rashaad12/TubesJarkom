<?php
include 'header.php';
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
        if ($data['password'] <> $password) {
            echo "<script>alert('Password Salah !');</script>";
        } else {
            $_SESSION['username']=$data['username'];
            $_SESSION['id_user']=$data['id_user'];
            $_SESSION['status_user']=$data['status_user'];
            $_SESSION['nama_user']=$data['nama_user'];
            echo "<script>alert('Login Berhasil Welcome ".$_SESSION['nama_user']." !');window.location='index.php';</script>";
        }
    }
    }

 
?>

   <section>
      <div class="container-fluid" align="center">
        
     
      <div class="col-md-6 mt-5">
          <div class="line-left" style="margin-bottom:7rem;">
          		<span>LOGIN</span>
       	  </div>
       	   <form action="" method="POST">
			  <div class="form-group">
			    <label for="exampleInputEmail1"><i class="material-icons text-yellow">person</i></label>
			    <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1"><i class="material-icons text-yellow">lock</i></label>
			    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
			  </div>
			   <div align="center">
			        <button class="btn btn-warning" type="submit" name="login">LOGIN</button>
			      </div>
			</form>
      </div>
      <div class="col-md-6 mt-5">
          <div class="line-right" style="margin-bottom:7rem;">
          		<span>REGISTER</span>
       	  </div>
       	   <form action="register.php" method="POST">
			  <div class="form-group">
			    <label for="exampleInputEmail1"><i class="material-icons text-yellow">contact_mail</i></label>
			    <input type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1"><i class="material-icons text-yellow">person</i></label>
			    <input type="text" class="form-control" name="username" id="exampleInputPassword1" placeholder="Username">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1"><i class="material-icons text-yellow">lock</i></label>
			    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
			  </div>
			   <div class="form-group">
			    <label for="exampleInputPassword1"><i class="material-icons text-yellow">email</i></label>
			    <input type="email" class="form-control" name="email" id="exampleInputPassword1" placeholder="Email">
			  </div>
			   <div align="center">
			        <button class="btn btn-warning" type="submit" name="register">REGISTER</button>
			      </div>
			</form>
      </div>
     </div>
    </section>
   

<?php
include 'footer.php';
?>