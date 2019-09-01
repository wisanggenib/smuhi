<!-- start banner Area -->
<section class="banner-area relative" id="home">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row fullscreen d-flex align-items-center justify-content-between">
      <div class="banner-content col-lg-9 col-md-12">
        <h1 class="text-uppercase" align="right">
          Selamat Datang <br>
          Alumni SMA 1 Muhammadiyah
          Yogyakarta
        </h1>
        <p align="right" style="color: white;">
          Mari kita sukseskan program penelusuran <br>
          alumni SMA 1 Muhammadiyah Yogyakarta
        </p>
        <div class="" align="right">
          <button type="submit" name="button" class="btn btn-success">Lebih Lanjut</button>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End banner Area -->

<!-- Start feature Area -->
<section class="feature-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="single-feature">
          <div class="title" style="background : #2a43aa;">
            <h4>LOWONGAN KERJA</h4>
          </div>
          <div class="desc-wrap" align="left">

            <?php
              
              $sql = mysqli_query($config,"SELECT * FROM tbl_lowongan_kerja ORDER BY tanggal DESC LIMIT 3");
              while($loker = mysqli_fetch_array($sql)){

                $long_string = $loker['deskripsi'];
                $des = limit_words($long_string, 5);
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
                              <h4><?=$loker['nama_perusahaan']?></h4>
                            </a>                            
                          </li>
                          <li>
                            <i class="fa fa-clock-o"> <?=$loker['tanggal']?></i>
                          </li>
                          <li>
                            <p><?=$des?> ...</p>
                          </li>
                        </ul>
                        <hr size="15px;" color="#FFFF00">
                      </div>
                    </div>
                  </div>
                <?php

              }
              ?>
              
            <div class="" align ="right">
              <a href="index.php?page=lowongan_kerja"><i>Lihat Selengkapnya</i> <i class="fa fa-chevron-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="single-feature">
          <div class="title" style="background : #2a43aa;">
            <h4>PENAWARAN JASA</h4>
          </div>
          <div class="desc-wrap" align="left">
            <?php

              $sql = mysqli_query($config, "SELECT * FROM tbl_jasa ORDER BY id_jasa DESC LIMIT 3");
              while($jasa = mysqli_fetch_array($sql)){

                $long_string = $jasa['deskripsi'];
                $des = limit_words($long_string, 5);

                ?>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                      <img src="img/jasa/<?=$jasa['logo']?>" width = "75px" alt="" style="border-radius : 10px;">
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                      <ul>
                        <li>
                          <h4><?=$jasa['nama_perusahaan']?></h4>
                        </li>
                        <li>
                          <i class="fa fa-clock-o"> <?=$jasa['tanggal']?></i>
                        </li>
                        <li>
                          <p><?=$des?> ...</p>
                        </li>
                      </ul>
                      <hr size="15px;" color="#FFFF00">
                    </div>
                  </div>
                </div>
                <?php

              }

            ?>
            

            <div class="" align ="right">
              <a href="#"><i>Lihat Selengkapnya</i> <i class="fa fa-chevron-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="single-feature">
          <div class="title" style="background : #2a43aa;">
            <h4>AGENDA ALUMNI</h4>
          </div>
          <div class="desc-wrap" align="left">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4" align="center">
                  <p style="font-size : 40px;">10</p>

                  <p>Agustus</p>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                  <ul>
                    <li>
                      <h5>Penyerahan hewan kurban ke ...</h5>
                    </li>
                    <li>
                      <p>oleh alumni 1990</p>
                    </li>
                  </ul>
                  <hr size="15px;" color="#FFFF00">
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4" align="center">
                  <p style="font-size : 40px;">20</p>

                  <p>Agustus</p>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                  <ul>
                    <li>
                      <h5>Penyerahan hewan kurban ke ...</h5>
                    </li>
                    <li>
                      <p>oleh alumni 1990</p>
                    </li>
                  </ul>
                  <hr size="15px;" color="#FFFF00">
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4" align="center">
                  <p style="font-size : 40px;">10</p>

                  <p>Agustus</p>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                  <ul>
                    <li>
                      <h5>Penyerahan hewan kurban ke ...</h5>
                    </li>
                    <li>
                      <p>oleh alumni 1990</p>
                    </li>
                  </ul>
                  <hr size="15px;" color="#FFFF00">
                </div>
              </div>
            </div>

            <div class="" align ="right">
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
            <h1 class="mb-10" style="color : #2a43aa;">BERITA TERBARU</h1>
          </a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">            
            <?php

              $sql = mysqli_query($config, "SELECT * FROM tbl_berita INNER JOIN tbl_admin ON tbl_berita.id_admin = tbl_admin.id_admin ORDER BY tbl_berita.id_berita DESC LIMIT 1");
              while($berita = mysqli_fetch_array($sql)){
                
                $long_string = $berita['deskripsi'];
                $des = limit_words($long_string, 25);
                ?>
                  <img src="img/berita/<?=$berita['images_berita']?>" width="100%" alt="" style="border-radius : 10px;">
                  <i class="fa fa-calendar"> <?=$berita['tanggal']?></i>
                  <i class="fa fa-user"> <?=$berita['username']?></i>
                  <div class="content">
                    <h3><?=$berita['judul_berita']?></h3>
                    <p>
                      <?=$des?> ...
                    </p>
                    <a href="index.php?page=detail_berita&&id=<?=$berita['id_berita']?>">Lihat Selengkapnya <i class="fa fa-chevron-circle-right"></i> </a>
                  </div>
                <?php

              }

            ?>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6">
            <?php

              $sql = mysqli_query($config, "SELECT * FROM tbl_berita INNER JOIN tbl_admin ON tbl_berita.id_admin = tbl_admin.id_admin ORDER BY tbl_berita.id_berita DESC LIMIT 3");
              while($berita = mysqli_fetch_array($sql)){
                
                $long_string = $berita['deskripsi'];
                $des = limit_words($long_string, 10);
                ?>

                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                      <img src="img/berita/<?=$berita['images_berita']?>" width="100%" height="100px" alt="" style="border-radius : 10px;">
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                      <i class="fa fa-calendar"> <?=$berita['tanggal']?></i>
                      <i class="fa fa-user"> <?=$berita['username']?></i>
                      <div>
                        <h5><?=$berita['judul_berita']?>i</h5>
                        <p style="font-size : 12px;">
                          <?=$des?> ...
                          <br>
                          <a href="index.php?page=detail_berita&&id=<?=$berita['id_berita']?>">Lihat Selengkapnya <i class="fa fa-chevron-circle-right"></i> </a>
                        </p>
                      </div>
                    </div>
                  </div>

                <?php

              }

            ?>            

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End popular-course Area -->


<!-- Start search-course Area -->
<section class="search-course-area relative">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-6 search-course-left">
        <h1 class="text-white">
          SAMBUTAN </h1>
          <br>
          during this Summer!
        </h1>
        <div class="row details-content">
          <video width="600px;" height="400px;">
            <source src="https://www.youtube.com/watch?v=7bCPpVP9otM&list=RDsMifYbhLxlE&index=19" type="video/mp4">
          </video>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 search-course-right section-gap">
        <form class="form-wrap" action="#">
          <h4 class="text-white pb-20 text-center mb-30">Search for Available Course</h4>
          <input type="text" class="form-control" name="name" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" >
          <input type="phone" class="form-control" name="phone" placeholder="Your Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Phone Number'" >
          <input type="email" class="form-control" name="email" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" >
          <div class="form-select" id="service-select">
            <select>
              <option datd-display="">Choose Course</option>
              <option value="1">Course One</option>
              <option value="2">Course Two</option>
              <option value="3">Course Three</option>
              <option value="4">Course Four</option>
            </select>
          </div>
          <button class="primary-btn text-uppercase">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- End search-course Area -->


<!-- Start blog Area -->
<section class="blog-area section-gap" id="blog">
  <div class="container">

    <div class="row">
      <div class="col-lg-3 col-md-6 single-blog">
        <div class="thumb">
          <img class="img-fluid" src="img/b1.jpg" alt="">
        </div>
      </div>
      <div class="col-lg-3 col-md-6 single-blog">
        <div class="thumb">
          <img class="img-fluid" src="img/b2.jpg" alt="">
        </div>
      </div>
      <div class="col-lg-3 col-md-6 single-blog">
        <div class="thumb">
          <img class="img-fluid" src="img/b3.jpg" alt="">
        </div>
      </div>
      <div class="col-lg-3 col-md-6 single-blog">
        <div class="thumb">
          <img class="img-fluid" src="img/b4.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End blog Area -->

<!-- Start cta-one Area -->
<section class="cta-one-area relative section-gap">
  <div class="container">
    <div class="overlay overlay-bg"></div>
    <div class="row justify-content-center">
      <div class="wrap">
        <h1 class="text-white">Become an instructor</h1>
        <p>
          There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station whether that is on the deck.
        </p>
        <a class="primary-btn wh" href="#">Apply for the post</a>
      </div>
    </div>
  </div>
</section>
<!-- End cta-one Area -->
