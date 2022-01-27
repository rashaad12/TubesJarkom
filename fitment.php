<?php
include 'header.php';
include 'config/koneksi.php';
$idfit = $_GET['id'];
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
?>

  <section>
    <div class="container-fluid">
      <div class="col-md-12 mt-5" id="more" style="margin-bottom:7rem;">
        <div class="line">
          <span style="text-transform:uppercase;"><?php echo $fitment?></span>
       </div>
      </div>
    </div>
  </section>

  <section>
  	<div class="container-fluid">
  		<div class="row">
        <?php
        $fitmentselect = mysqli_query($koneksi,"SELECT * FROM fitment WHERE katfitment='$idfit'");
        $jmlhdata = mysqli_num_rows($fitmentselect);
        if ($jmlhdata < 1) {
          echo '<p class="text-center card-title"><b>Belum ada Yang Submit Fitmentnya Bro ! Bantu Share Ya!</b></p>';
        }
        while ($row = mysqli_fetch_array($fitmentselect)) {
          # code...
        
        ?>
  			<div class="col-md-3">
              <div class="card card-link">
                 <a href="view.php?idfit=<?php echo $row['id_fitment']?>">
                <img src="image/<?php echo $row['foto_fitment']?>" class="card-img-top img-fluid" alt="..." height="150">
                <div class="card-body text-center">
                   <p class="card-date"><a href="fitment.php?id=<?php echo $idfit?>"><?php echo $fitment ?></a> </p>
                  <p class="card-title"><a href="view.php?idfit=<?php echo $row['id_fitment']?>"><?php echo $row['judul_fitment']?></a></p>
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