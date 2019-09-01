<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					STRUKTUR ORGANISASI
          <br>
          ALUMNI MUHI
				</h1>
				<p class="text-white link-nav"><a href="index.php?page=dashboard">Home </a>  <span class="lnr lnr-arrow-right"></span> Tentang Kami <span class="lnr lnr-arrow-right"></span> Struktur Organisasi Alumni MUHI </p>
			</div>
		</div>
	</div>
</section>

<section class="popular-course-area single-post-area">
  <div class="container">
    <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 posts-list">
            <div align="center">
              <h1>STRUKTUR ORGANISASI <br> ALUMNI MUHI</h1>
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

                    $sql = mysqli_query($config,"SELECT * FROM tbl_lowongan_kerja ORDER BY tanggal DESC LIMIT 3");
                    while($loker = mysqli_fetch_array($sql)){
                      
                      $long_string = $loker['deskripsi'];
                      $des = limit_words($long_string, 5);
                      ?>
                      <div class="col-lg-12 col-md-12">
                        <div class="row">
                          <div class="col-lg-5 col-md-5">
                            <img class="img-fluid" src="img/lowongan/<?=$loker['logo']?>" alt="" width="100px" style="border-radius : 5px;">
                          </div>
                          <div class="col-lg-7 col-md-7">
                            <a href="index.php?page=detail_lowongan&&id=<?=$loker['lowongan_id']?>"><h6><?=$loker['nama_perusahaan']?></h6></a>
                            <i class="fa fa-clock-o"> <?=$loker['tanggal']?></i>
                            <p><?=$des?></p>
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
