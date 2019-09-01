<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					PROFIL KETUA ALUMNI MUHI
          <br>
          Bpk. Anto Nio
				</h1>
				<p class="text-white link-nav"><a href="index.php?page=dashboard">Home </a>  <span class="lnr lnr-arrow-right"></span> Tentang Kami <span class="lnr lnr-arrow-right"></span> Profil Ketua Alumni MUHI </p>
			</div>
		</div>
	</div>
</section>

<section class="popular-course-area single-post-area">
  <div class="container">
    <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 posts-list">
            <div align="left">
              <h1>PROFIL KETUA ALUMNI MUHI</h1>
            </div>
            <div>
              <img src="img/112.jpg" width="200px;" alt="" style="float: left; margin : 15px;">
              <br><br>
              <h2>Bpk. Anto Nio</h2>
              <p>Alumni Angkatan 1990</p>
              <br>
              <p style="font-size : 12px;" align="justify">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                <br><br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <blockquote cite="http://" class="generic-blockquote">
                <p style="font-size : 12px;" align="justify">
                  "
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in .
                  "
                </p>
              </blockquote>
              <p style="font-size : 12px;" align="justify">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 sidebar-widgets">
            <div class="widget-wrap">
              <div class="single-sidebar-widget popular-post-widget">
                <h4 class="popular-title">BERITA TERBARU</h4>
                <div class="popular-post-list">
                  <div class="single-post-list d-flex flex-row align-items-center">
                    <div class="thumb">
                      <img class="img-fluid" src="img/blog/pp1.jpg" alt="">
                    </div>
                    <div class="details">
                      <a href="blog-single.html"><h6>Space The Final Frontier</h6></a>
                      <p>02 Hours ago</p>
                      <hr size="15px;" color="#FFFF00">
                    </div>
                  </div>
                  <div class="single-post-list d-flex flex-row align-items-center">
                    <div class="thumb">
                      <img class="img-fluid" src="img/blog/pp2.jpg" alt="">
                    </div>
                    <div class="details">
                      <a href="blog-single.html"><h6>The Amazing Hubble</h6></a>
                      <p>02 Hours ago</p>
                      <hr size="15px;" color="#FFFF00">
                    </div>
                  </div>
                  <div class="single-post-list d-flex flex-row align-items-center">
                    <div class="thumb">
                      <img class="img-fluid" src="img/blog/pp3.jpg" alt="">
                    </div>
                    <div class="details">
                      <a href="blog-single.html"><h6>Astronomy Or Astrology</h6></a>
                      <p>02 Hours ago</p>
                      <hr size="15px;" color="#FFFF00">
                    </div>
                  </div>
                  <div class="" align ="right">
                    <a href="#">Lihat Selengkapnya <i class="fa fa-chevron-circle-right"></i></a>
                  </div>
                </div>
              </div>

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
                    <a href="#">Lihat Selengkapnya <i class="fa fa-chevron-circle-right"></i></a>
                  </div>
                </div>
              </div>

            </div>
          </div>
    </div>
  </div>
</section>
<!-- End popular-course Area -->
