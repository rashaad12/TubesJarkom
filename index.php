<?php
include 'header.php';
include 'config/koneksi.php';

?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <div class="icon  bg-red">
                            <i class="material-icons">person</i>
                        </div>
                        <div class="content">
                            <div class="text">USERS REGISTERED</div>
                            <?php
                            $sql = mysqli_query($koneksi,"SELECT * FROM user");
                            $check = mysqli_num_rows($sql);
                            ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $check?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box ">
                        <div class="icon " id="suporen">
                            <i class="material-icons">subtitles</i>
                        </div>
                        <div class="content">
                              <?php
                            $art = mysqli_query($koneksi,"SELECT * FROM artikel");
                            $jmlh = mysqli_num_rows($art);
                            ?>
                            <div class="text">ARTICLES POSTED</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $jmlh?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                    <div class="info-box">
                        <div class="icon" id="suphijau">
                            <i class="material-icons">directions_car</i>
                        </div>
                        <div class="content">
                            <div class="text">FITMENTS SUBMITTED</div>
                               <?php
                            $sql = mysqli_query($koneksi,"SELECT * FROM fitment");
                            $check = mysqli_num_rows($sql);
                            ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $check?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                    <div class="info-box">
                        <div class="icon " id="supbiru">
                            <i class="material-icons">burst_mode</i>
                        </div>
                        <div class="content">
                            <div class="text">IMAGES UPLOADED</div>
                               <?php
                            $sql = mysqli_query($koneksi,"SELECT * FROM galeri");
                            $check = mysqli_num_rows($sql);
                            ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $check?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                    <div class="info-box">
                         <div class="icon " id="suppink">
                            <i class="material-icons">chat</i>
                        </div>
                        <div class="content">
                            <div class="text">COMMENTS SUBMITTED</div>
                               <?php
                            $sql = mysqli_query($koneksi,"SELECT * FROM galeri");
                            $check = mysqli_num_rows($sql);
                            ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $check?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                  </div>
              
            </div>
            <!-- iniuser -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <a class="sup" href="user/">
                         <div class="card">
                        <div class="body text-center" id="supmerah">
                             <i class="material-icons" style="font-size:50px;">person</i>
                            <h2 class="font-bold;">Setting User</h2>
                          
                        </div>
                    </div>
                    </a>
                   
                </div>
                <!-- enduser -->
                <!-- settingproduk -->
               <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <a class="sup" href="article/">
                         <div class="card">
                        <div class="body text-center" id="suporen">
                             <i class="material-icons" style="font-size:50px;">subtitles</i>
                            <h2 class="font-bold;">Setting Article</h2>
                          
                        </div>
                    </div>
                    </a>
                   
                </div>
                <!-- #END# -->
                    <!-- settingpromo -->
               <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <a class="sup" href="fitment/">
                         <div class="card">
                        <div class="body text-center" id="suphijau">
                             <i class="material-icons" style="font-size:50px;">directions_car</i>
                            <h2 class="font-bold;">Setting Fitment</h2>
                          
                        </div>
                    </div>
                    </a>
                   
                </div>
                <!-- #END# -->
                    <!-- settinggalerio -->
               <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <a class="sup" href="galeri/">
                         <div class="card">
                        <div class="body text-center" id="supbiru">
                             <i class="material-icons" style="font-size:50px;">burst_mode</i>
                            <h2 class="font-bold;">Setting Galeri</h2>
                          
                        </div>
                    </div>
                    </a>
                   
                </div>
                <!-- settingtestimoni -->
               <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <a class="sup" href="komentar/">
                         <div class="card">
                        <div class="body text-center" id="suppink">
                             <i class="material-icons" style="font-size:50px;">chat</i>
                            <h2 class="font-bold;">Setting Komentar</h2>
                          
                        </div>
                    </div>
                    </a>
                   
                </div>
                <!-- #END# -->
            </div>

        </div>
    </section>

    <!-- Jquery Core Js -->
<?php
include 'footer.php';

?>