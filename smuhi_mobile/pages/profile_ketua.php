<section class="banner-area relative" id="home" style="height: 300px;">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12" style="top : -75px;">
				<h1 class="text-white">
					<span style="font-family: Montserrat-Light; font-size: 20px;">PROFIL KETUA ALUMNI</span> <span style="font-family: Montserrat-Bold; font-size: 20px;">MUHI</span>
          <br>
          <span style="font-family: Lora-BoldItalic; font-size: 20px;">Bpk. Anto Nio</span>
				</h1>
				<p class="text-white link-nav" style="font-size: 12px;"><a href="index.php?page=dashboard">Home </a>  <span class="lnr lnr-arrow-right"></span> Tentang Kami <span class="lnr lnr-arrow-right"></span> Profil Ketua Alumni MUHI </p>
			</div>
		</div>
	</div>
</section>

<section class="popular-course-area single-post-area">
  <div class="container">
    <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 posts-list">
            <div align="left">
              <h4 align="center"><span style="font-family: Montserrat-Light">PROFIL KETUA ALUMNI</span> <span style="font-family: Montserrat-Bold">MUHI</span></h4>
            </div>
            <?php

              $sql = mysqli_query($config, "SELECT * FROM tbl_pengurus INNER JOIN tbl_alumni ON tbl_pengurus.id_alumni = tbl_alumni.id_alumni WHERE tbl_pengurus.jabatan = 'Ketua' AND tbl_pengurus.angkatan = '1994'");
              while($data = mysqli_fetch_array($sql)){
                ?>
                <div>
                  <img src="img/alumni/<?=$data['images']?>" width="200px;" alt="" style="float: left; margin : 15px;">
                  <br><br>
                  <h2><span style="font-family: Lora-BoldItalic">Bpk.<?=$data['nama_alumni']?></span></h2>
                  <p style="margin-top: 9px"><span style="font-family: Montserrat-Bold">Alumni Angkatan <?=$data['tahun_lulus']?></span></p>
                  <p style="font-size : 14px; font-family: Montserrat;color: black" align="justify">
                    <?=$data['deskripsi']?>
                  </p>
                </div>
                <?php
              }
              ?>
            
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
