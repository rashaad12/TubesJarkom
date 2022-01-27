<?php
include 'header.php';
include 'config/koneksi.php';
?>

  
  <!-- Carousel Default -->
  <section class="carousel-default" style="margin-bottom:7rem">
    <div id="carousel-default" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-default" data-slide-to="1" class="active"></li>
        <?php
        $no = 2;
        $sql = mysqli_query($koneksi,"SELECT * FROM galeri LIMIT 4");
        while ($row = mysqli_fetch_array($sql)) {
          # code...
        
        ?>
        <li data-target="#carousel-default" data-slide-to="<?php echo $no++?>" class="active"></li>
        <?php
      }
      ?>
      </ol>
      <div class="carousel-inner" align="center" role="listbox">
        <!-- NOTE: Bootstrap v4 changes class name to carousel-item -->
        <div class="item active">
          <img src="image/gtr.jpg" alt="Second slide">
         <div class="carousel-caption">
            <h1><span class="highlight">Indonesian <br>Car Culture</span></h1>
            <a href="#more"><button class="btn btn-warning">More</button></a>
          </div>
        </div>
        <?php
        $gmbr = mysqli_query($koneksi,"SELECT * FROM galeri");
        while ($data = mysqli_fetch_array($gmbr)) {
        ?>
        <div class="item">
          <img src="image/<?php echo $data['galeri']?>" alt="Third slide">
          <div class="carousel-caption">
            <h1><span class="highlight">Indonesian <br>Car Culture</span></h1>
            <a href="#more"><button class="btn btn-warning">More</button></a>
          </div>
        </div>
        <?php
      }
      ?>
      </div>
      <a class="left carousel-control" href="#carousel-default" role="button" data-slide="prev">
         <i class="glyphicon control material-icons" aria-hidden="true" >keyboard_arrow_right</i>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-default" role="button" data-slide="next">
        <i class="glyphicon control material-icons" aria-hidden="true" >keyboard_arrow_left</i>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
  <!-- /end Carousel Default -->
 <div class="container-fluid">
  <section>
   
      <div class="col-md-12" id="more" style="margin-bottom:7rem;">
        <div class="line">
          <span>HOT ROAD'</span>
       </div>
      </div>
 </section>
  </div>

  <div class="container-fluid">
    <div class="resp" align="center">
      <?php
      $artikel = mysqli_query($koneksi,"SELECT * FROM artikel ORDER BY tanggal_artikel DESC LIMIT 6");
      while ($art = mysqli_fetch_array($artikel)) {
      ?>
          <div>
             <div class="col-md-12">
              <div class="card card-link">
                 <a href="article.php?id=<?php echo $art['id_artikel']?>">
                <img src="image/<?php echo $art['foto_artikel']?>" class="card-img-top img-fluid" alt="..." height="150">
                <div class="card-body text-center">
                    <p class="card-date"><a href="kategori.php?id_kat=<?php echo $art['kategori']?>"> 
                      <?php
                    if ($art['kategori'] == 0) {
                      echo "Event";
                    } else {
                      echo "Artikel";
                    }
                    ?></a> | <?php echo date("d M Y",strtotime($art['tanggal_artikel']))?> </p>
                  <p class="card-title"><a href="article.php?id=<?php echo $art['id_artikel']?>"><?php echo $art['judul_artikel']?></a></p>
                </div>
              </a>
              </div> 
            </div>
          </div>
          <?php
        }
        ?>
      </div>
  <div align="center" style="margin-bottom:7rem;">
         <i class="prev material-icons" id="arrow" style="font-size:40px;">chevron_left</i>
       <i class="next material-icons" id="arrow" style="font-size:40px;">chevron_right</i>
       </div>
  </div>

    <section>
      <div class="container-fluid" align="center">
        
     
      <div class="col-md-6" id="article">
          <div class="line-left" style="margin-bottom:7rem;">
          <span>EVENTS</span>
       </div>
       <div class="event" align="center">
        <?php
        $event = mysqli_query($koneksi,"SELECT * FROM artikel WHERE kategori='0'");
        while ($dataevent=mysqli_fetch_array($event)) {
          
        ?>
        <div>
           <div class="col-md-12">
                <div class="card card-link-second" align="center">
                   <a href="article.php?id=<?php echo $dataevent['id_artikel']?>">
                  <img src="image/<?php echo $dataevent['foto_artikel']?>" class="card-img-low img-fluid" height="300" alt="..." >
                  <div class="card-body text-center">
                     <p class="card-date"><a href="kategori.php?id_kat=<?php echo $dataevent['kategori']?>"> 
                      <?php
                    if ($dataevent['kategori'] == 0) {
                      echo "Event";
                    } else {
                      echo "Artikel";
                    }
                    ?></a> | <?php echo date("d M Y",strtotime($dataevent['tanggal_artikel']))?> </p>
                    <p class="card-title"><a href="article.php?id=<?php echo $dataevent['id_artikel']?>"><?php echo $dataevent['judul_artikel']?></a></p>
                  </div>
                </a>
                </div> 
          </div>
        </div>
        <?php
      }
      ?>
       </div>
        <div align="center" style="margin-bottom:7rem;">
         <i class="prev-event material-icons" id="arrow" style="font-size:40px;">chevron_left</i>
       <i class="next-event material-icons" id="arrow" style="font-size:40px;">chevron_right</i>
       </div>
      </div>
      <div class="col-md-6">
          <div class="line-right" style="margin-bottom:7rem;">
          <span>ARTICLES</span>
       </div>
       <div class="article" align="center">
         <?php
        $article = mysqli_query($koneksi,"SELECT * FROM artikel WHERE kategori='1'");
        while ($dataarticle=mysqli_fetch_array($article)) {
          
        ?>
          <div>
           <div class="col-md-12">
                <div class="card card-link-second" align="center">
                   <a href="article.php?id=<?php echo $dataarticle['id_artikel']?>">
                  <img src="image/<?php echo $dataarticle['foto_artikel']?>" class="card-img-low img-fluid" height="300" alt="..." >
                  <div class="card-body text-center">
                     <p class="card-date"><a href="kategori.php?id-kat=<?php echo $dataarticle['kategori']?>"> 
                      <?php
                    if ($dataarticle['kategori'] == 0) {
                      echo "Event";
                    } else {
                      echo "Artikel";
                    }
                    ?></a> | <?php echo date("d M Y",strtotime($dataarticle['tanggal_artikel']))?> </p>
                    <p class="card-title"><a href="article.php?id=<?php echo $dataarticle['id_artikel']?>"><?php echo $dataarticle['judul_artikel']?></a></p>
                  </div>
                </a>
                </div> 
          </div>
        </div>
        <?php
      }
      ?>
       </div>
        <div align="center" style="margin-bottom:7rem;">
         <i class="prev-article material-icons" id="arrow" style="font-size:40px;">chevron_left</i>
       <i class="next-article material-icons" id="arrow" style="font-size:40px;">chevron_right</i>
       </div>
      </div>
     </div>
    </section>
   
	
	<section style="margin-bottom:7rem;">
   <div class="container-fluid">
     <div class="col-md-12" id="fitment">
       <div class="col-md-12" style="margin-bottom:7rem;">
        <div class="line">
          <span>FITMENT</span>
       </div>
      </div>
     </div>
     <div class="row form-group">
      <div class="col-md-6 form-group">
       <a href="fitment.php?id=1">
         <div class="static-fitment" style="background-image:url('image/static.jpg')">
           <div class="hero-text">
                  <span class="highlight-yellow">STATIC</span>
           </div>
         </div>
       </a>
     </div>
      <div class="col-md-6">
       <a href="fitment.php?id=2">
         <div class="static-fitment" style="background-image:url('image/racelook.jpg')">
           <div class="hero-text">
                  <span class="highlight-yellow">RACE LOOK</span>
           </div>
         </div>
       </a>
     </div> 
     </div>
     <div class="row form-group">
       <div class="col-md-4 form-group">
          <a href="fitment.php?id=3">
         <div class="static-fitment" style="background-image:url('image/rally.jpg')">
           <div class="hero-text">
                  <span class="highlight-yellow">RALLY</span>
           </div>
         </div>
       </a>
       </div>
       <div class="col-md-4 form-group">
          <a href="fitment.php?id=4">
         <div class="static-fitment" style="background-image:url('image/retro.jpg')">
           <div class="hero-text">
                  <span class="highlight-yellow">RETRO</span>
           </div>
         </div>
       </a>
       </div>
       <div class="col-md-4">
          <a href="fitment.php?id=5">
         <div class="static-fitment" style="background-image:url('image/daily.jpg')">
           <div class="hero-text">
                  <span class="highlight-yellow">DAILY</span>
           </div>
         </div>
       </a>
       </div>
     </div>
     <div class="col-md-12" style="display:none;">
      <div align="center">
        <a href=""><button class="btn btn-warning">SUBMIT YOUR RIDE</button></a>
      </div>
     </div>
   </div> 
  </section>

  <section>
    <div class="container-fluid">
       <div class="col-md-12" style="margin-bottom:7rem;">
        <div class="line">
          <span>GALLERY</span>
       </div>
      </div>
    </div>
  </section>
  
  <section>
    <div class="container-fluid">
        <div class="row justify-content-center">
          <?php
          $galeri = mysqli_query($koneksi,"SELECT * FROM galeri LIMIT 6");
          while ($rg = mysqli_fetch_array($galeri)) {


          ?>
         <div class="col-lg-4 col-md-4 col-xs-6 form-group">
          <a href="image/<?php echo $rg['galeri']?>" data-toggle="lightbox" data-gallery="image-gallery">
         <div class="gallery-image" style="background-image:url('image/<?php echo $rg['galeri']?>')">
         </div>
       </a>
       </div>
       <?php 
     }
     ?>
      </div>
       <div class="col-md-12 mt-5">
      <div align="center">
        <a href="galeri.php"><button class="btn btn-warning">SEE MORE</button></a>
      </div>
     </div>
    </div>
  </section>


<?php
include 'footer.php';
?>