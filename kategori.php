<?php
include 'header.php';
include 'config/koneksi.php';
$idkat = $_GET['id_kat'];
if ($idkat == '0') {
  $artikel = "Event";
} else {
   $artikel = "Article";
}
?>

  <section>
    <div class="container-fluid">
      <div class="col-md-12 mt-5" id="more" style="margin-bottom:7rem;">
        <div class="line">
          <span style="text-transform:uppercase;"><?php echo $artikel?></span>
       </div>
      </div>
    </div>
  </section>

  <section>
  	<div class="container-fluid">
  		<div class="row">
        <?php
        $artikelselect = mysqli_query($koneksi,"SELECT * FROM artikel WHERE kategori='$idkat'");
        while ($row = mysqli_fetch_array($artikelselect)) {
          # code...
        
        ?>
  			<div class="col-md-3">
          <div class="card card-link-second" align="center">
                   <a href="article.php?id=<?php echo $row['id_artikel']?>">
                  <img src="image/<?php echo $row['foto_artikel']?>" class="card-img-low img-fluid" height="150" alt="..." >
                  <div class="card-body text-center">
                     <p class="card-date"><a href=""> 
                      <?php
                    if ($row['kategori'] == 0) {
                      echo "Event";
                    } else {
                      echo "Artikel";
                    }
                    ?></a> | <?php echo date("d M Y",strtotime($row['tanggal_artikel']))?> </p>
                    <p class="card-title"><a href="article.php?id=<?php echo $row['id_artikel']?>"><?php echo $row['judul_artikel']?></a></p>
                  </div>
                </a>
                </div> 
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