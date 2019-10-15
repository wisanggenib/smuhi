<section class="banner-area relative" id="home" style="height: 300px;">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12" style="top: -80px;">
        <h1 class="text-white">
          <span style="font-family: Montserrat-Light; font-size: 20px;">LOWONGAN KERJA
            <br>
          ALUMNI</span> <span style="font-family: Montserrat-Bold; font-size: 20px;">MUHI</span>
        </h1>
        <p class="text-white link-nav" style="font-size: 12px;"><a href="index.php?page=dashboard">Home </a>  <span class="lnr lnr-arrow-right"></span> Karier <span class="lnr lnr-arrow-right"></span> Lowongan Kerja </p>
      </div>
    </div>
  </div>
</section>

<section class="popular-course-area single-post-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8 posts-list">
        <div align="center">
          <h3><span style="font-family: Montserrat-Light">LOWONGAN KERJA <br> ALUMNI</span> <span style="font-family: Montserrat-Bold">MUHI</span></h3>
        </div>
        <br><br>
        <div class="desc-wrap" align="left">

          <?php

          $id = $_GET['id'];
          $sql = mysqli_query($config, "SELECT * FROM tbl_lowongan_kerja WHERE lowongan_id = $id");
          while($loker = mysqli_fetch_array($sql)){
            ?>
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="row">
                    <img src="img/lowongan/<?=$loker['logo']?>" width = "auto" alt="" style="border-radius : 10px; float: left; margin: 10px;">
                  </div>
                  <ul>
                    <li>
                      <h4><span style="font-family: Lora-Bold"><?=$loker['nama_perusahaan']?></span></h4>
                    </li>
                    <li>
                      <i class="fa fa-clock-o" style="color: yellow"><span style="font-family: Montserrat;color: gray;"> <?=$loker['tanggal']?></span></i>
                      <i class="fa fa-user" style="color: yellow"><span style="font-family: Montserrat;color: gray"> Admin</span></i>
                    </li>
                    <li>
                      <p style="margin-top: 15px;text-align: justify;">
                        <span style="font-family: Montserrat;color: black">
                          <?=$loker['deskripsi']?>
                        </span>
                      </p>
                    </li>
                  </ul>
                  <div class="row" style="margin-top: 20px;">
                    <h4><span style="background-color: yellow; padding-right: 15px">Syarat:</span></h4>
                  </div>
                  <div class="row">
                    <div class="col-md-10" style="display: inline;">
                      <?=$loker['syarat']?>
                    </div>
                  </div>
                  <div class="row" style="margin-top: 20px;">
                    <h4><span style="background-color: yellow; padding-right: 15px">Pendaftaran:</span></h4>
                  </div>
                  <div class="row">
                    <div class="col-md-10" style="display: inline;">
                      <?=$loker['pendaftaran']?>
                    </div>
                  </div>
                </div>
                <!-- <div class="col-lg-8 col-md-8 col-sm-8" style=" margin-left: -50px;">
                  
                  <br>
                </div> -->
              </div>


<!--               <br>
              <br>
              <h4><span style="background-color: yellow; padding-right: 15px">Pendaftaran:</span></h4>
              <div style="margin: 15px;">
                <?=$loker['pendaftaran']?>
              </div>
              <br><br><br> -->
            </div>
            <?php
          }
          ?>


          <div class="" align="center">
            
            <button type="submit" name="previous" class="btn btn-warning" style="background-color: yellow;border-color: yellow;margin-right: 10px; margin-top: 5%;"><i class="fa  fa-chevron-left"></i> Sebelumnya </button>
            <button type="submit" name="previous" class="btn btn-warning" style="background-color: yellow;border-color: yellow;margin-left: 10px;margin-top: 5%;"><i class="fa  fa-chevron-right"></i> Selanjutnya</button>
            
          </div>

        </div>

      </div>

      <div class="col-lg-4 col-md-4 col-sm-4 sidebar-widgets">
            <div class="widget-wrap">
              <div class="single-sidebar-widget popular-post-widget">
                <div class="row" style="height : 200px; border-style: solid">

                </div>
              </div>

              <div class="single-sidebar-widget popular-post-widget">
                <h4 class="popular-title">BERITA TERBARU</h4>
                <div class="popular-post-list">

                  <?php

                    $sql = mysqli_query($config, "SELECT * FROM tbl_berita INNER JOIN tbl_admin ON tbl_berita.id_admin = tbl_admin.id_admin ORDER BY tbl_berita.id_berita DESC LIMIT 3");
                    while($berita = mysqli_fetch_array($sql)){

                      $long_string = $berita['deskripsi'];
                      $des = limit_words($long_string, 5);

                      $long = $berita['judul_berita'];
                      $des2 = limit_words($long, 5);
                      ?>
                        <div class="col-lg-12 col-md-12">
                          <div class="row">
                            <!-- <div class="col-lg-5 col-md-5">
                              <img class="img-fluid" src="img/berita/<?=$berita['images_berita']?>" alt="" width="100px" style="border-radius : 5px;">
                            </div> -->
                            <div class="col-lg-12 col-md-12">
                              <a href="index.php?page=detail_berita&&id=<?=$berita['id_berita']?>"><h6><?=$des2?> ...</h6></a>
                              <!-- <i class="fa fa-clock-o"> <?=$berita['tanggal']?></i>
                              <p><?=$des?></p> -->
                              <hr size="15px;" color="#FFFF00">
                            </div>
                          </div>
                        </div>
                      <?php
                    }

                  ?>
                  

                  <div class="" align ="right">
                    <a href="index.php?page=berita">Lihat Selengkapnya <i class="fa fa-chevron-circle-right"></i></a>
                  </div>
                </div>
              </div>

              <div class="single-sidebar-widget popular-post-widget">
                <h4 class="popular-title">LOWONGAN KERJA</h4>
                <div class="popular-post-list">

                  <?php

                    $sql = mysqli_query($config,"SELECT * FROM tbl_lowongan_kerja ORDER BY tanggal DESC LIMIT 3");
                    while($loker = mysqli_fetch_array($sql)){
                      
                      $long_string = $loker['deskripsi'];
                      $des = limit_words($long_string, 5);
                      ?>
                      <div class="col-lg-12 col-md-12">
                        <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12">
                            <img class="img-fluid" src="img/lowongan/<?=$loker['logo']?>" alt="" width="70px" style="border-radius : 5px; float: left; margin: 5px;"><a href="index.php?page=detail_lowongan&&id=<?=$loker['lowongan_id']?>"><h6><?=$loker['nama_perusahaan']?></h6></a>
                            <i class="fa fa-clock-o"> <?=$loker['tanggal']?></i>
                            <p><?=$des?></p>
                          </div>
                          <div class="col-lg-7 col-md-7">
                            
                            <hr size="15px;" color="#FFFF00">
                          </div>
                        </div>
                      </div>
                      <?php
                    }
                  ?>

                  <div class="" align ="right">
                    <a href="index.php?page=lowongan_kerja">Lihat Selengkapnya <i class="fa fa-chevron-circle-right"></i></a>
                  </div>
                </div>
              </div>

            </div>
          </div>
    </div>
  </div>
</section>
<!-- End popular-course Area -->
