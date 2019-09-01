<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					BERITA TERBARU
          <br>
          ALUMNI MUHI
				</h1>
				<p class="text-white link-nav"><a href="index.php?page=dashboard">Home </a>  <span class="lnr lnr-arrow-right"></span> Berita Terbaru</p>
			</div>
		</div>
	</div>
</section>

<section class="popular-course-area single-post-area">
  <div class="container">
      <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 posts-list">
            <div align="center" style="margin-bottom : 50px;">
              <h1>BERITA TERBARU <br> ALUMNI MUHI</h1>
            </div>
            <img src="img/banner-bg.jpg" alt="" width="100%">
            <i class="fa fa-calendar"> 10 Agustus 2019</i>
            <i class="fa fa-user">Admin</i>
            <h3>Kurban Wadah Silaturahmi</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href="index.php?page=detail_berita&id=7">Lihat Selengkapnya <i class="fa fa-chevron-circle-right"></i></a>
            <div class="">
              <div align="left" style="margin-top : 20px;">
                <h3>Berita Alumni</h3>
                <hr size="15px;" color="#FFFF00" width = "30%" align="left">
              </div>
              <br><br>
              <div class="desc-wrap" align="left">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                      <img src="img/e2.jpg" width = "100%" alt="" >
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                      <ul>
                        <li>
                          <a href="index.php?page=detail_lowongan&&id=1">
                            <h4>PT. MAJU BERSAMA</h4>
                          </a>
                        </li>
                        <li>
                          <i class="fa fa-clock-o"> 10 Agustus 2019</i>
                          <i class="fa fa-user"> Admin</i>
                        </li>
                        <li>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,.
                          </p>
                          <a href="#">Lihat Selengkapnya <i class="fa fa-chevron-circle-right"></i></a>
                        </li>
                      </ul>
                      <hr size="15px;" color="#FFFF00" width = "30%" align="left">
                      <br>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                      <img src="img/m-img.jpg" width = "100%" alt="" >
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                      <ul>
                        <li>
                          <a href="index.php?page=detail_lowongan&&id=1">
                            <h4>PT. MAJU BERSAMA</h4>
                          </a>
                        </li>
                        <li>
                          <i class="fa fa-clock-o"> 10 Agustus 2019</i>
                          <i class="fa fa-user"> Admin</i>
                        </li>
                        <li>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,.
                          </p>
                          <a href="#">Lihat Selengkapnya <i class="fa fa-chevron-circle-right"></i></a>
                        </li>
                      </ul>
                      <hr size="15px;" color="#FFFF00" width = "30%" align="left">
                      <br>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 sidebar-widgets">
            <div class="widget-wrap">
              <div class="single-sidebar-widget popular-post-widget">
                <h4 class="popular-title">LOWONGAN KERJA</h4>
                <div class="popular-post-list">

                  <?php

                  $sql = mysqli_query($config,"SELECT * FROM tbl_lowongan_kerja ORDER BY tanggal DESC");
                  while($loker = mysqli_fetch_array($sql)){

                    ?>
                      <div class="single-post-list d-flex flex-row align-items-center">
                        <div class="">
                          <img class="img-fluid" src="img/lowongan/<?=$loker['logo']?>" alt="" width="100px" style="border-radius : 5px;">
                        </div>
                        <div class="details">
                          <a href="index.php?page=detail_lowongan&&id=<?=$loker['lowongan_id']?>"><h6><?=$loker['nama_perusahaan']?></h6></a>
                          <i class="fa fa-clock-o"></i>
                          <p><?=$loker['tanggal']?></p>
                          <hr size="15px;" color="#FFFF00">
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

              <div class="single-sidebar-widget popular-post-widget">
                <img src="img/term-online-ads.jpg" alt="" width="100%">
              </div>

            </div>
          </div>
    </div>
  </div>
</section>
<!-- End popular-course Area -->
