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
                  <?php
                    $id = $_GET['id'];
                    $sql = mysqli_query($config, "SELECT * FROM tbl_alumni WHERE id_alumni = $id");
                    while($data = mysqli_fetch_array($sql)){
                      ?>
                        <div class="col-lg-5 col-md-5 col-sm-5">
                          <img src="img/alumni/<?=$data['images']?>" alt="" width="100%">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7">
                          <h4><?=$data['nama_alumni']?></h4>
                          <hr size="15px;" color="#FFFF00" align="left" width="20%;">
                          <table class="table">
                              <tr>
                                <td>Tahun Lulus</td>
                                <td>:</td>
                                <td><?=$data['tahun_lulus']?></td>
                              </tr>
                              <tr>
                                <td>Mobile Phones</td>
                                <td>:</td>
                                <td><?=$data['no_telp']?></td>
                              </tr>
                              <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><?=$data['email']?></td>
                              </tr>
                              <tr>
                                <td>Alamat Rumah</td>
                                <td>:</td>
                                <td><?=$data['alamat_rumah']?></td>
                              </tr>
                              <tr>
                                <td>kantor</td>
                                <td>:</td>
                                <td><?=$data['kantor']?></td>
                              </tr>
                              <tr>
                                <td>ALamat Kantor</td>
                                <td>:</td>
                                <td><?=$data['alamat_kantor']?></td>
                              </tr>
                          </table>
                          
                          <a href="">
                            <i class="fa fa-facebook fa-lg" style="margin : 10px;"></i>
                          </a>
                          <a href="#">
                            <i class="fa fa-twitter fa-lg" style="margin : 10px;"></i>
                          </a>
                          <a href="">
                            <i class="fa fa-instagram fa-lg" style="margin : 10px;"></i>
                          </a>
                          <a href="">
                            <i class="fa fa-whatsapp fa-lg" style="margin : 10px;"></i>
                          </a>
                        </div>
                      <?php
                    }
                  ?>

                </div>
              </div>

              <h4 style="background: orange; width: 250px; margin-top : 20px; margin-button : 10px;">RIWAYAT PENDIDIKAN</h4>
              <table class="table table-hover">
                <thead>
                  <tr align="center">
                    <th width="10%">No.</th>
                    <th width="50%">Pendidkan</th>
                    <th width="30%">Tahun lulus</th>>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $id = $_GET['id'];
                    $no = 1;
                    $sql = mysqli_query($config,"SELECT * FROM tbl_riwayat_alumni WHERE id_alumni = $id ORDER BY pendidikan_lulus ASC");
                    while($data = mysqli_fetch_array($sql)){
                      ?>
                        <tr>
                          <td align="center"><?=$no++?></td>
                          <td><?=$data['pendidikan']?></td>
                          <td align="center"><?=$data['pendidikan_lulus']?></td>
                        </tr>
                      <?php
                    }
                  ?>
                </tbody>
              </table>
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
