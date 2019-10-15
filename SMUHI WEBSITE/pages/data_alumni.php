<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					<span style="font-family: Montserrat-Light">DATA ALUMNI</span> <span style="font-family: Montserrat-Bold">MUHI</span>
          <br>
          <span style="font-family: Lora-BoldItalic">1956-<script>document.write(new Date().getFullYear());</script></span>
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
              <h1><span style="font-family: Montserrat-Light">DATA ALUMNI</span> <span style="font-family: Montserrat-Bold">MUHI</span></h1>
            </div>
            <br><br>
            <!-- <h3>Cari Berdasarkan :</h3> -->
            <hr size="15px;" color="#FFFF00" align="left" width="20%;">
            <div class="row" style="margin : 10px;">
              <!-- <span>Masukkan Salah Satu atau Dapat Keduanya</span>
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
              </div> -->
              <br><br>
              <div class="col-lg-12 col-md-12 col-sm-12">
                <table class="table table-hover" id="myTable">
                  <thead>
                    <tr>
                      <th width="10%">No.</th>
                      <th width="50%">Nama Lengkap</th>
                      <th width="30%">Tahun lulus</th>
                      <th width="10%">#</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- <tr>
                      <td>1</td>
                      <td>yiyin zulfi</td>
                      <td>2017</td>
                      <td>
                        <a href="index.php?page=detail_alumni&&id=<?=23?>" class="btn btn-info btn-sm">Detail</a>
                      </td>
                    </tr> -->

                    <?php
                      $no = 1;
                      $sql = mysqli_query($config, "SELECT * FROM tbl_alumni ORDER BY tahun_lulus ASC LIMIT 10");
                      while($data = mysqli_fetch_array($sql)){
                        ?>
                          <tr>
                            <td><?=$no++?></td>
                            <td><?=$data['nama_alumni']?></td>
                            <td><?=$data['tahun_lulus']?></td>
                            <td>
                              <a href="index.php?page=detail_alumni&&id=<?=$data['id_alumni']?>" class="btn btn-info">Detail</a>
                            </td>
                          </tr>
                        <?php
                      }
                    ?>

                  </tbody>
                </table>
              </div>
            </div>

          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 sidebar-widgets">
            <div class="widget-wrap">
              <div class="single-sidebar-widget popular-post-widget">
                <h4 class="popular-title">BERITA TERBARU</h4>
                <div class="popular-post-list">
                  <?php

                  $sql = mysqli_query($config, "SELECT * FROM tbl_berita INNER JOIN tbl_admin ON tbl_berita.id_admin = tbl_admin.id_admin ORDER BY tbl_berita.id_berita DESC LIMIT 3");
                  while($berita = mysqli_fetch_array($sql)){

                    $long_string = $berita['deskripsi'];
                    $des = limit_words($long_string, 5);

                    $long = $berita['judul_berita'];
                    $des2 = limit_words($long, 3);
                    ?>
                      <div class="col-lg-12 col-md-12">
                        <div class="row">
                          <div class="col-lg-5 col-md-5">
                            <img class="img-fluid" src="img/berita/<?=$berita['images_berita']?>" alt="" width="100px" style="border-radius : 5px;">
                          </div>
                          <div class="col-lg-7 col-md-7">
                            <a href="index.php?page=detail_berita&&id=<?=$berita['id_berita']?>"><h6><?=$des2?> ...</h6></a>
                            <i class="fa fa-clock-o"> <?=$berita['tanggal']?></i>
                            <p><?=$des?></p>
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
