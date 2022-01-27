<?php
include 'header.php';
include 'config/koneksi.php';
$idfit = $_GET['idfit'];
if ($idfit == '1') {
  $fitment = "Static/Stance";
} elseif ($idfit == '2') {
  $fitment = "Race Look";
} elseif ($idfit == '3') {
  $fitment = "Rally";
} elseif ($idfit ==  '4') {
  $fitment = "Retro";
} else {
  $fitment = "Daily";
}
$sql = mysqli_query($koneksi,"SELECT * FROM fitment INNER JOIN wheelfront ON fitment.id_wheelfront=wheelfront.id_wheelfront
  INNER JOIN wheelrear ON fitment.id_wheelrear=wheelrear.id_wheelrear 
  INNER JOIN tirefront ON fitment.id_tirefront=tirefront.id_tirefront 
  INNER JOIN tirerear ON fitment.id_tirerear=tirerear.id_tirerear INNER JOIN user ON fitment.id_user=user.id_user WHERE fitment.id_fitment='$idfit'");
  $r = mysqli_fetch_array($sql);
?>

<section id="title-image">
  <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12" align="center">
            <img src="image/<?php echo $r['foto_fitment']?>" class="img-responsive" height="150">
        </div>
        <div class="col-md-12 article-title mt-5" align="center">
                <h1 style="text-transform:uppercase"><b><?php echo $r['judul_fitment']?></b></h1>
                <div class="card-body text-center mt-3">
                       <p class="card-date"><a href="fitment.php?id=<?php echo $idfit?>"><?php echo $fitment?></a> | <i class="material-icons" style="font-size:13px;">person</i> <?php echo $r['nama_user']?></p>
                </div>
        </div>
        <div class="col-md-12 mt-5" align="center">
          <h3 style="letter-spacing:5px;text-transform:uppercase"><b><?php echo $r['kendaraan_fitment']?></b></h3>
        </div>
     </div>

  </div>
</section>

<section id="spesifikasi">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-xs-6" align="center">
        <h3 class="mb-5"><b>Front Wheel</b></h3>
        <p><b>Wheel Name : </b><?php echo $r['nama_wheelfront']?></p>
        <p><b>Diameter : </b><?php echo $r['diameter_wheelfront']?> mm</p>
        <p><b>Width : </b><?php echo $r['width_wheelfront']?> mm</p>
        <p><b>Offset : </b><?php echo $r['offset_wheelfront']?> mm</p>
      </div>
      <div class="col-lg-6 col-md-6 col-xs-6" align="center">
         <h3 class="mb-5"><b>Rear Wheel</b></h3>
          <p><b>Wheel Name : </b><?php echo $r['nama_wheelrear']?></p>
        <p><b>Diameter : </b><?php echo $r['diameter_wheelrear']?> mm</p>
        <p><b>Width : </b><?php echo $r['width_wheelrear']?> mm</p>
        <p><b>Offset : </b><?php echo $r['offset_wheelrear']?> mm</p>
      </div>
        <div class="col-lg-6 col-md-6 col-xs-6" align="center">
        <h3 class="mb-5"><b>Front Tire</b></h3>
        <p><b>Tire Name : </b><?php echo $r['nama_tirefront']?></p>
        <p><b>Width : </b><?php echo $r['width_tirefront']?> mm</p>
        <p><b>Offset : </b><?php echo $r['offset_tirefront']?> mm</p>
      </div>
      <div class="col-lg-6 col-md-6 col-xs-6" align="center">
         <h3 class="mb-5"><b>Rear Tire</b></h3>
            <p><b>Tire Name : </b><?php echo $r['nama_tirerear']?></p>
        <p><b>Width : </b><?php echo $r['width_tirerear']?> mm</p>
        <p><b>Offset : </b><?php echo $r['offset_tirerear']?> mm</p>
      </div>
    </div>
  </div>
</section>




  <section>
    <div class="container-fluid">
      <div class="col-md-12 mt-5">
        
      </div>
    </div>
  </section>

 

<?php
include 'footer.php';
?>