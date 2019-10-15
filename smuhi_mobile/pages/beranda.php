<!-- start banner Area -->
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <?php
    $i=1;
    $sql = mysqli_query($config,"SELECT * FROM slider_utama ORDER BY id_slider ASC");
    while($slider = mysqli_fetch_array($sql)){
      if ($i==1) {


        ?>
        <div class="carousel-item active">
          <section class="relative" id="home" style=" background: url(img/<?=$slider['gambar']?>) right;background-size: cover; height: 350px;">
            <div class="overlay overlay-bg" style="background-color: rgba(84, 89, 92, 0.8)"></div>
            <div class="container-fluid">
              <div class="row fullscreen d-flex align-items-center justify-content-between">
                <div class="banner-content col-lg-9 col-md-12" style="line-height: 35px; top : -150px;">
                  <p class="" align="right">
                    <span style="font-family: Montserrat-Light;font-size: 20px;color: white">Selamat Datang</span><br>
                    <span style="font-family: Montserrat-Bold;font-size: 20px;color: white">Alumni SMA 1 Muhammadiyah</span><br>
                    <span style="font-family: Montserrat-Light;font-size: 20px;color: white ">Yogyakarta</span>
                  </p>
                  <p align="right" style="color: white;line-height: 15px;font-size: 12px;font-family: Lora-Italic;letter-spacing: 1px;">
                    Mari kita sukseskan program penelusuran <br>
                    alumni SMA 1 Muhammadiyah Yogyakarta
                  </p>
                  <div class="" align="right">

                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <?php
      }else{
        ?>
        <div class="carousel-item">
          <section class="relative" id="home" style=" background: url(img/<?=$slider['gambar']?>) right;background-size: cover; height: 350px;">
            <div class="overlay overlay-bg" style="background-color: rgba(84, 89, 92, 0.8)"></div>
            <div class="container-fluid">
              <div class="row fullscreen d-flex align-items-center justify-content-between">
                <div class="banner-content col-lg-9 col-md-12" style="line-height: 35px; top : -150px;">
                  <p class="" align="right">
                    <span style="font-family: Montserrat-Light;font-size: 20px;color: white">Selamat Datang</span><br>
                    <span style="font-family: Montserrat-Bold;font-size: 20px;color: white">Alumni SMA 1 Muhammadiyah</span><br>
                    <span style="font-family: Montserrat-Light;font-size: 20px;color: white ">Yogyakarta</span>
                  </p>
                  <p align="right" style="color: white;line-height: 15px;font-size: 12px;font-family: Lora-Italic;letter-spacing: 1px;">
                    Mari kita sukseskan program penelusuran <br>
                    alumni SMA 1 Muhammadiyah Yogyakarta
                  </p>
                  <div class="" align="right">

                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <?php

      }
      $i++;
    }
    ?>


  </div>

  <!-- Left and right controls -->
<!--   <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a> -->
</div>


<!-- End banner Area -->

<!-- Start feature Area -->
<section class="feature-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 each-feature">
        <div class="single-feature">
          <div>
            <h4>LOWONGAN KERJA</h4>
            <hr class="line-single-feature">
          </div>
          <div class="desc-wrap" align="left">
            <?php

            $sql = mysqli_query($config,"SELECT * FROM tbl_lowongan_kerja ORDER BY tanggal DESC LIMIT 3");
            while($loker = mysqli_fetch_array($sql)){

              $long_string = $loker['deskripsi'];
              $des = limit_words($long_string, 4);
              ?>
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <img src="img/lowongan/<?=$loker['logo']?>" width = "75px" alt="" style="border-radius : 5px;">
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-8">
                    <ul>
                      <li>
                        <a href="index.php?page=detail_lowongan&&id=<?=$loker['lowongan_id']?>">
                          <h5 style="font-family: Lora-Bold"><?=$loker['nama_perusahaan']?></h5>
                        </a>
                      </li>
                      <li>
                        <i class="fa fa-clock-o"><span style="font-family: Montserrat-Light;font-style: italic"> <?=$loker['tanggal']?> </span></i>
                      </li>
                      <li>
                        <p style="margin-top: 6px"><span style="font-family: Montserrat-Light;color: black;"><?=$des?> ...</span></p>
                      </li>
                    </ul>
                    <hr size="15px;" color="#FFFF00">
                  </div>
                </div>
              </div>
              <?php

            }
            ?>

            <div  align ="right">
              <a href="index.php?page=lowongan_kerja"><i>Lihat Selengkapnya</i> <i class="fa fa-chevron-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 each-feature">
        <div class="single-feature">
          <div>
            <h4>PENAWARAN JASA</h4>
            <hr class="line-single-feature">
          </div>
          <div class="desc-wrap" align="left">
            <?php

            $sql = mysqli_query($config, "SELECT * FROM tbl_jasa ORDER BY id_jasa DESC LIMIT 3");
            while($jasa = mysqli_fetch_array($sql)){

              $long_string = $jasa['deskripsi'];
              $des = limit_words($long_string, 2);

              ?>
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <img src="img/jasa/<?=$jasa['logo']?>" width = "75px" alt="" style="border-radius : 10px;">
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-8">
                    <ul>
                      <li>
                        <a href="#">
                          <h5 style="font-family: Lora-Bold"><?=$jasa['nama_perusahaan']?></h5>
                        </a>
                      </li>
                      <li>
                        <i class="fa fa-clock-o"><span style="font-family: Montserrat-Light;font-style: italic"> <?=$jasa['tanggal']?></span></i>
                      </li>
                      <li>
                        <p style="margin-top: 6px"><span style="font-family: Montserrat-Light;color: black;"><?=$des?> ...</span></p>
                      </li>
                    </ul>
                    <hr size="15px;" color="#FFFF00">
                  </div>
                </div>
              </div>
              <?php

            }

            ?>
            <div  align ="right">
              <a href="#"><i>Lihat Selengkapnya</i> <i class="fa fa-chevron-circle-right"></i></a>
            </div>

          </div>
        </div>
      </div>
      <div class="col-lg-4 each-feature">
        <div class="single-feature ">
          <div>
            <h4>AGENDA ALUMNI</h4>
            <hr class="line-single-feature">
          </div>
          <div class="desc-wrap" align="left">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4" align="center">
                  <p style="font-size : 40px;font-family: Lora-Bold">10</p>

                  <p style="text-align: center;font-family: Lora-Bold;letter-spacing: 1px;">Agustus</p>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                  <ul>
                    <li>
                      <a href="index.php?page=detail_lowongan&&id=<?=$loker['lowongan_id']?>">
                        <h5 style="font-family: Lora-Bold">Temu Alumni SMA 1 Muh...</h5>
                      </a>
                    </li>
                    <li>
                      <p style="font-family: Montserrat-Light;margin-top: 6px; color: black">oleh alumni 1990</p>
                    </li>
                  </ul>
                  <hr size="15px;" color="#FFFF00">
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4" align="center">
                  <p style="font-size : 40px;font-family: Lora-Bold">30</p>

                  <p style="text-align: center;font-family: Lora-Bold;letter-spacing: 1px;">Agustus</p>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                  <ul>
                    <li>
                      <a href="#">
                        <h5 style="font-family: Lora-Bold">Temu Alumni Angkatan 1995...</h5>
                      </a>
                    </li>
                    <li>
                      <p style="font-family: Montserrat-Light;margin-top: 6px;">oleh Admin</p>
                    </li>
                  </ul>
                  <hr size="15px;" color="#FFFF00">
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4" align="center">
                  <p style="font-size : 40px;font-family: Lora-Bold">30</p>

                  <p style="text-align: center;font-family: Lora-Bold;letter-spacing: 1px;">Agustus</p>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                  <ul>
                    <li>
                      <a href="#">
                        <h5 style="font-family: Lora-Bold">Temu Alumni Angkatan 1995...</h5>
                      </a>
                    </li>
                    <li>
                      <p style="font-family: Montserrat-Light;margin-top: 6px;">oleh Admin</p>
                    </li>
                  </ul>
                  <hr size="15px;" color="#FFFF00">
                </div>
              </div>
            </div>
            <div  align ="right">
              <a href="#"><i>Lihat Selengkapnya</i> <i class="fa fa-chevron-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End feature Area -->

<!-- Start popular-course Area -->
<section class="popular-course-area section-gap">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="menu-content pb-70 col-lg-8">
        <div class="title text-center">
          <a href="index.php?page=berita">
            <h4 class="mb-10"><span style="color: #2E56A0;font-family: Montserrat-Bold">BERITA TERBARU</span></h4>
          </a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <?php

            $sql = mysqli_query($config, "SELECT * FROM tbl_berita INNER JOIN tbl_admin ON tbl_berita.id_admin = tbl_admin.id_admin WHERE status='terima' AND bintang ='tidak' ORDER BY tbl_berita.id_berita DESC LIMIT 3");
            while($berita = mysqli_fetch_array($sql)){

              $long_string = $berita['deskripsi'];
              $des = limit_words($long_string, 5);
              $jdl = $berita['judul_berita'];
              $judul = limit_words($jdl, 5);
              ?>

              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <img src="img/berita/<?=$berita['images_berita']?>" width="35%" alt="" style="border-radius : 10px; float: left; margin : 5px;">
                  <i class="fa fa-calendar"> <?=$berita['tanggal']?></i>
                  <i class="fa fa-user"> <?=$berita['username']?></i>
                  <div>
                    <h5><?=$judul?></h5>
                    <!-- <p style="font-size : 12px;">
                      <?=$des?> ...
                      <br>
                      <a href="index.php?page=detail_berita&&id=<?=$berita['id_berita']?>">Lihat Selengkapnya <i class="fa fa-chevron-circle-right"></i> </a>
                    </p> -->
                    <a href="index.php?page=detail_berita&&id=<?=$berita['id_berita']?>">Lihat Selengkapnya <i class="fa fa-chevron-circle-right"></i> </a>
                  </div>
                </div>
                <!-- <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">

                </div> -->
              </div>

              <?php

            }

            ?>

          </div>
        </div>
      </div>
    </div>
    <div style="margin-top: 30px;"><center> <a href="index.php?page=berita"><button name="button" class="btn btn-warning" style="font-family: Montserrat-Bold">Lihat Seluruh Berita</button></a></center></div>
  </div>
</section>

<!-- End popular-course Area -->
<!-- Start search-course Area -->
<section class="search-course-area relative">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row justify-content-between align-items-center" style="height: 750px;">

      <div class="col-lg-6 col-md-6 search-course-left" style="margin-top: -100px">
        <div id="demo1" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ul class="carousel-indicators" style="top: 105%;">
            <li data-target="#demo1" data-slide-to="0" class="active"></li>
            <li data-target="#demo1" data-slide-to="1"></li>
            <li data-target="#demo1" data-slide-to="2"></li>
          </ul>

          <!-- The slideshow -->
          <div class="carousel-inner">
            <?php
            $i=1;
            $sql = mysqli_query($config,"SELECT * FROM tbl_video ORDER BY id_video ASC");
            while($video = mysqli_fetch_array($sql)){
              if ($i==1) {
                ?>
                <div class="carousel-item active">
                  <h1 class="text-white" style="margin-bottom:-1%; text-align: center;"> <?=$video['judul']?>  </h1>
                  <hr size = "15px;" color= "#FFFF00" width = "50px"; align="left">
                  <div style="text-align: justify;"><span class="text-white"><?=$video['deskripsi_video']?></span></div>
                  <div class="row details-content">
                    <?=$video['url_video']?>
                  </div>
                </div>
<?php 
}else{
 ?>
                <div class="carousel-item">
                  <h1 class="text-white" style="margin-bottom:-1%; text-align: center;"> <?=$video['judul']?>  </h1>
                  <hr size = "15px;" color= "#FFFF00" width = "50px"; align="left">
                  <div style="text-align: justify;"><span class="text-white"><?=$video['deskripsi_video']?></span></div>
                  <div class="row details-content">
                    <?=$video['url_video']?>
                  </div>
                </div>
                <?php 
              }
              $i++;
              } 
              ?>

            </div>


          </div>
        </div>

        <div class="col-lg-6 col-md-6" style=" margin-top: -100px">

          <div id="demo2" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators" style="top: 180px;">
              <li data-target="#demo2" data-slide-to="0" class="active"></li>
              <li data-target="#demo2" data-slide-to="1"></li>
              <li data-target="#demo2" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                          <?php
            $i=1;
            $sql = mysqli_query($config,"SELECT * FROM kata_mutiara ORDER BY id_kata_mutiara ASC");
            while($mutiara = mysqli_fetch_array($sql)){
              if ($i==1) {
                ?>
              <div class="carousel-item active">
                <div class="row" style="margin-top : 350px;">
                  <div class="col-lg-2 col-md-2">  
                    <img src="img/mutiara/<?=$mutiara['gambar']?>" style="border-radius : 5px;" class="img-responsive">
                  </div>
                  <div class="col-lg-8 col-md-8">
                    <p class="text-white" style="font-size: 16px">
                       <?=$mutiara['kata_mutiara']?>
                    </p>
                    <p style="color: black;font-size: 20px">
                      <span style="color: white;"><?=$mutiara['nama']?></span>
                      <br>
                      <span style="color: white; font-size: 12px"><i><?=$mutiara['profesi']?></i></span>
                    </p>
                  </div>
                </div>
              </div>
              <?php
            }else{
              ?>
              <div class="carousel-item">
                <div class="row" style="margin-top : 350px;">
                  <div class="col-lg-2 col-md-2">  
                    <img src="img/mutiara/<?=$mutiara['gambar']?>" style="border-radius : 5px;" class="img-responsive">
                  </div>
                  <div class="col-lg-8 col-md-8">
                    <p class="text-white" style="font-size: 16px">
                      <?=$mutiara['kata_mutiara']?>
                    </p>
                    <p style="color: black;font-size: 20px">
                      <span style="color: white;"><?=$mutiara['nama']?></span>
                      <br>
                      <span style="color: white; font-size: 12px"><i><?=$mutiara['profesi']?></i></span>
                    </p>
                  </div>
                </div>
              </div>
              <?php
            }
            $i++;
          }
          ?>
            </div>


          </div>
          <div class="row"  style="margin-top: 100px; margin-left: 1%">
            <h1 class="text-white">Kata Alumni</h1>
            <h3 class="text-white">SMA 1 Muhammadiyah Yogyakarta</h3> 
          </div> 


        </div>
      </div>
    </div>
  </section>
  <!-- End search-course Area -->

  <!-- Start blog Area -->
  <section class="blog-area" style="margin-top: 10px;margin-bottom: 30px;" id="blog">


    <div class="item">
      <ul id="content-slider" class="content-slider">
        <?php

        $sql = mysqli_query($config,"SELECT * FROM gallery ORDER BY id_gallery ASC");
        while($gallery = mysqli_fetch_array($sql)){
          ?>
          <li>
            <img src="img/<?=$gallery['gambar']?>" width="500px">
          </li>
          <?php
        }
        ?>
      </ul>



    </section>
    <!-- End blog Area -->

    <!-- Berita terbaru -->



    <section class="feature-area" style="margin-bottom: 80px;">
      <div class="container">
        <div class="row d-flex justify-content-center" style="margin-bottom: -30px; margin-top: 80px">
          <div class="menu-content pb-70 col-lg-8">
            <div class="title text-center">
              <a href="index.php?page=berita">
                <h1 class="mb-10" style="color : #2a43aa;">OPINI ALUMNI</h1>
              </a>
            </div>
          </div>
        </div>
        <div class="row">
        <?php

        $sql = mysqli_query($config, "SELECT * FROM tbl_beritaalumni ORDER BY tbl_beritaalumni.id_beritaalumni DESC LIMIT 1");
        while($beritaalumni = mysqli_fetch_array($sql)){

          $long_string = $beritaalumni['deskripsi'];
          $des = limit_words($long_string, 10);
          $judulopini= limit_words($beritaalumni['judul'],4);
          ?>
          <div class="col-lg-4 each-feature" >
            <div class="col-md-12 col-lg-12" style="background: url(img/berita/<?=$beritaalumni['img']?>) center; height: 260px;">
              <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-4" style="background-color: white; padding: 5px;text-align: center; margin-top: 3%;"><?=$beritaalumni['tempat']?></div>
              </div>
              <div class="row" style="margin-top: 55%;height: 50px;vertical-align: center; font-size: 18px">
                <div class="col-md-2" style="background-color: ">
                </div>
                <div class="col-md-8" style="background-color: white;text-align: center">
                  <a href="index.php?page=detail_beritaalumni&id=<?=$beritaalumni['id_beritaalumni']?>"><b><span style="color: black"><?=$judulopini?></span></b></a>
                </div>
                <div class="col-md-2" style="background-color: ;">
                </div>
              </div>
              <div class="row" style="text-align: center">
                <div class="col-md-12" style="padding: 2px">
                  <i class="fa fa-calendar" style="color: yellow"> <span style="color: black"> <?=$beritaalumni['tanggal']?> </span></i>
                  <i class="fa fa-user" style="color: yellow"> <span style="color: black"> Alumni </span></i>
                </div>
              </div>
            </div>
          </div>
          <?php

        }

        ?>
        </div>
            <div style="margin-top: 100px;"><center> <a href="index.php?page=opinialumni"><button name="button" class="btn btn-warning" style="font-family: Montserrat-Bold">Lihat Seluruh Opini Alumni</button></a></center></div>
      </div>
    </section>
    <!-- end berita terbaru -->
    <!-- Start cta-one Area -->
    <section class="cta-one-area relative section-gap">
      <div class="container">
        <div class="overlay overlay-bg"></div>
        <div class="row justify-content-center">
          <div class="wrap">

            <h1 class="text-white"><?=$result['jumlah']?> Alumni</h1>
            <p style="font-size : 24px;">SMA 1 Muhammadiyah Yogyakarta</p>
            <p>
              Kami Menunggumu bergabung dengan alumni SMA 1 Muhammadiyah Yogyakarta <br> Daftar Sekarang Juga !!
            </p>
            <a class="primary-btn wh" href="#">Daftar Alumni</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End cta-one Area -->
