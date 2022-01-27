<?php
include 'header.php';
include 'config/koneksi.php';
?>

 <section>
    <div class="container-fluid">
       <div class="col-md-12 mt-5" style="margin-bottom:7rem;">
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
          $galeri = mysqli_query($koneksi,"SELECT * FROM galeri ORDER BY tanggal_galeri DESC");
          while ($r = mysqli_fetch_array($galeri)) {
            # code...
          
          ?>
             <div class="col-lg-4 col-md-4 col-xs-6 form-group">
               <a href="image/<?php echo $r['galeri']?>" data-toggle="lightbox" data-gallery="image-gallery">
               <div class="gallery-image" style="background-image:url('image/<?php echo $r['galeri']?>')">
              </div>
       </a>
       </div>
       <?php
     }
     ?>
      </div>
    </div>
  </section>

   <section id="pagination" class="text-center" style="display:none;">
  	<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1"><i class="material-icons">chevron_left</i></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link middle" href="#"><i class="material-icons">chevron_right</i></a>
    </li>
  </ul>
</nav>
  </section>

<?php
include 'footer.php';
?>