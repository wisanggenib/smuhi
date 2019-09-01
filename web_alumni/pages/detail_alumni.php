<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					DATA ALUMNI MUHI
          <br>
          1956-<script>document.write(new Date().getFullYear());</script>
				</h1>
				<p class="text-white link-nav"><a href="index.php?page=dashboard">Home </a>  <span class="lnr lnr-arrow-right"></span> Data Alumni</p>
			</div>
		</div>
	</div>
</section>

<section class="popular-course-area single-post-area">
  <div class="container">
      <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 posts-list">
            <div align="center">
              <h1>DATA ALUMNI MUHI</h1>
            </div>
            <br><br>
            <div class="row" style="margin : 10px;">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                  <div class="col-lg-5 col-md-5 col-sm-5">
                    <img src="img/tm-4.jpg" alt="" width="100%">
                  </div>
                  <div class="col-lg-7 col-md-7 col-sm-7">
                    <h4>MARUF AZIZ</h4>
                    <hr size="15px;" color="#FFFF00" align="left" width="20%;">
                    <table class="table">
                        <tr>
                          <td>Tahun Lulus</td>
                          <td>:</td>
                          <td>1996</td>
                        </tr>
                        <tr>
                          <td>Mobile Phones</td>
                          <td>:</td>
                          <td>0084854056465</td>
                        </tr>
                        <tr>
                          <td>Email</td>
                          <td>:</td>
                          <td>sdjhish@ijio</td>
                        </tr>
                        <tr>
                          <td>Alamat Rumah</td>
                          <td>:</td>
                          <td>Jl Merpati</td>
                        </tr>
                        <tr>
                          <td>kantor</td>
                          <td>:</td>
                          <td>0084854056465</td>
                        </tr>
                        <tr>
                          <td>ALamat Kantor</td>
                          <td>:</td>
                          <td>0084854056465</td>
                        </tr>
                    </table>
                    <a href="#">
                      <i class="fa fa-facebook fa-lg" style="margin : 10px;"></i>
                    </a>
                    <a href="#">
                      <i class="fa fa-twitter fa-lg" style="margin : 10px;"></i>
                    </a>
                    <a href="`#`">
                      <i class="fa fa-instagram fa-lg" style="margin : 10px;"></i>
                    </a>
                    <a href="`#`">
                      <i class="fa fa-whatsapp fa-lg" style="margin : 10px;"></i>
                    </a>
                  </div>
                </div>
              </div>

              <h4 style="background: orange; width: 200px; margin-top : 20px; margin-button : 10px;">RIWAYAT PENDIDIKAN</h4>
              <table class="table table-hover">
                <thead>
                  <tr align="center">
                    <th width="10%">No.</th>
                    <th width="50%">Pendidkan</th>
                    <th width="30%">Tahun lulus</th>>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td align="center">1</td>
                    <td>SMA 1 BARAT</td>
                    <td align="center">2017</td>
                  </tr>
                </tbody>
              </table>
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
