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
            <h3>Cari Berdasarkan :</h3>
            <hr size="15px;" color="#FFFF00" align="left" width="20%;">
            <div class="row" style="margin : 10px;">
              <span>Masukkan Salah Satu atau Dapat Keduanya</span>
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <input type="text" name="" value="" class="form-control" placeholder="tahun">
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <input type="text" name="" value="" class="form-control" placeholder="Nama Alumni">
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <button type="button" name="button" class="btn btn-success">Cari
                    </button>
                  </div>
                </div>
              </div>
              <br><br>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th width="10%">No.</th>
                    <th width="50%">Nama Lengkap</th>
                    <th width="30%">Tahun lulus</th>
                    <th width="10%">#</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>yiyin zulfi</td>
                    <td>2017</td>
                    <td>
                      <a href="index.php?page=detail_alumni&&id=<?=23?>" class="btn btn-info btn-sm">Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>yiyin zulfi</td>
                    <td>2017</td>
                    <td>
                      <a href="#" class="btn btn-info btn-sm">Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>yiyin zulfi</td>
                    <td>2017</td>
                    <td>
                      <a href="#" class="btn btn-info btn-sm">Detail</a>
                    </td>
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
