<?php

include 'header.php';
include 'config/koneksi.php';
$id=$_GET['id'];
$cek = mysqli_query($koneksi,"SELECT * FROM artikel WHERE id_artikel='$id'");
$data = mysqli_fetch_array($cek);
$cekkomen = mysqli_query($koneksi,"SELECT * FROM komentar WHERE id_artikel='$id'");
$jmlhkomen = mysqli_num_rows($cekkomen);
?>

<section id="title-image">
  <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12" align="center">
            <img src="image/<?php echo $data['foto_artikel']?>" class="img-responsive" height="150">
        </div>
        <div class="col-md-12 article-title mt-5" align="center">
                <h1><b><?php echo $data['judul_artikel']?></b></h1>
                <div class="card-body text-center mt-3">
                       <p class="card-date">
                        <a href="kategori.php?id_kat=<?php echo $data['kategori']?>"> 
                        <?php
                    if ($data['kategori'] == 0) {
                      echo "Event";
                    } else {
                      echo "Artikel";
                    }
                    ?>
                  </a> |<?php echo date("d M Y",strtotime($data['tanggal_artikel']))?>  | <a href="#comment"><i class="material-icons" style="font-size:13px;">comment</i><?php echo $jmlhkomen?></a></p>
                </div>
        </div>
     </div>

  </div>
</section>

<section id="text" class="mt-5">
  <div class="container-fluid">
    <div class="col-md-12">
          <p class="text-justify"><?php echo $data['content_artikel']?></p>
      </div>
  </div>
  
</section>


  <section>
    <div class="container-fluid">
      <div class="col-md-12 mt-5" id="more" style="margin-bottom:7rem;">
        <div class="line">
          <span>RELATED POST</span>
       </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container-fluid">
       <div class="resp" align="center">
        <?php
        $sql = mysqli_query($koneksi,"SELECT * FROM artikel WHERE id_artikel !='$id'");
        while ($row = mysqli_fetch_array($sql)) {
          # code...
        
        ?>
          <div>
             <div class="col-md-12">
              <div class="card card-link">
                 <a href="article.php?id=<?php echo $row['id_artikel']?>">
                <img src="image/<?php echo $row['foto_artikel']?>" class="card-img-top img-fluid" alt="..." height="150">
                <div class="card-body text-center">
                   <p class="card-date"><a href="kategori.php?id_kat=<?php echo $row['kategori']?>">  <?php
                    if ($row['kategori'] == '0') {
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
          </div>
          <?php
        }
        ?>
      </div>
    </div>
  </section>

   <section id="submit-comment">
    <div class="container-fluid">
      <div class="col-md-12 mt-5" id="more" style="margin-bottom:7rem;">
        <div class="line">
          <span>COMMENT</span>
       </div>
      </div>
      <div class="text-responsive">
        <h1>ADD COMMENT</h1>
      </div>
      <form action="comment.php?id=<?php echo $id?>" method="POST">
        
      
       <div class="form-group">
    <textarea class="form-control" name="komentar" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
   <button class="btn btn-warning" type="submit" name="submit">SUBMIT</button>
   </form>
    </div>
  </section>
    <?php
    $jmlhcomment = mysqli_query($koneksi,"SELECT * FROM komentar WHERE id_artikel='$id'");
    $jmlh = mysqli_num_rows($jmlhcomment);
    ?>
  <section id="comment" class="mt-5">
    <div class="container-fluid">
      <div class="text-responsive">
        <h1 class="text-yellow"><?php echo $jmlh ?> TOTAL COMMENT(S)</h1>
      </div>
      <?php
      $komentar = mysqli_query($koneksi,"SELECT * FROM komentar INNER JOIN user ON komentar.id_user=user.id_user INNER JOIN artikel ON komentar.id_artikel=artikel.id_artikel WHERE komentar.id_artikel='$id'");
      while ($rd = mysqli_fetch_array($komentar)) {
        # code...

      ?>
      <div class="user-comment">
         <div class="row mt-5">
          
        <div class="col-md-6">
          <div class="text-responsive">
            <p class="text-ellipsis  kapital"><b><?php echo $rd['nama_user']?></b></p>
          </div>
        </div>
        <div class="col-md-6">
          <div align="right" class="middle">
            <a href=""><i class="material-icons" style="font-size:14px;">more_vert</i></a>
          </div>
        </div>
      </div>
            <div class="comment">
        <p><?php echo $rd['komentar']?></p>
      </div>
      </div>
    <?php
  }
  ?>
      </div>
    </div>
  </section>

<?php
include 'footer.php';
?>