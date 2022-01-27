<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Kendaraan</title>
	<!--Bootstrap-->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<!--Font-->

	<!--Slick JS -->
	   <link rel="icon" href="image/brand.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/>
  <!-- Icons-->
  <link rel="stylesheet" type="text/css" href="iconfont/material-icons.css">
<link rel="stylesheet" href="assets/css/fontawesome.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!--Ekko Lightbox-->
  <link rel="stylesheet" type="text/css" href="assets/ekolightbox/ekko-lightbox.css">
  <link rel="stylesheet" type="text/css" href="admin/js/sweetalert.min.js">
</head>
<body>
 <nav class="navbar navbar-default navigatsioon mb-5" role="navigation">
    	  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header navigatsioon">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <div class="navbar-brand navbar-brand-centered navigatsioon">
		      	<a href="/kendaraan">
		      		<img src="image/brand.png" height="86">
		      	</a>
		      </div>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse navigatsioon" id="navbar-brand-centered">
		     
		      <ul class="nav navbar-nav navbar-left">
		        <li><a href="index.php#article">ARTICLE</a></li>
            <li><a href="galeri.php">GALLERY</a></li>
		      </ul>
		       <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php#article">EVENT</a></li>
		        <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">FITMENT <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="fitment.php?id=1">STATIC</a></li>
                    <li><a href="fitment.php?id=2">RACE LOOK</a></li>
                    <li><a href="fitment.php?id=3">RALLY</a></li>
                    <li><a href="fitment.php?id=4">RETRO</a></li>
                    <li><a href="fitment.php?id=5">DAILY</a></li>
                  </ul>
                </li>
              <li class="dropdown">
                  <?php
                  include 'welcome.php';
                  ?>
                </li>
		      </ul>
		     
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
