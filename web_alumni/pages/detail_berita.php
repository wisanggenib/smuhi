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
            <?php
              
              $id = $_GET['id'];
              $sql = mysqli_query($config, "SELECT * FROM tbl_berita INNER JOIN tbl_admin ON tbl_berita.id_admin = tbl_admin.id_admin WHERE tbl_berita.id_berita = $id");
              while($berita = mysqli_fetch_array($sql))
              {
                ?>
                  <h3 style="margin : 10px;"><?=$berita['judul_berita']?></h3>
                  <div class="" style="margin : 10px;">
                    <i class="fa fa-calendar"> <?=$berita['tanggal']?></i>
                    <i class="fa fa-user"> <?=$berita['username']?></i>
                  </div>
                  <img src="img/berita/<?=$berita['images_berita']?>" alt="" width="100%" style="margin-bottom : 15px;">
                  <p>
                    <?=$berita['deskripsi']?>
                  </p>
                  <blockquote class="generic-blockquote">
                    <p style="font-size : 12px;">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </blockquote>
                <?php
              }

            ?>            

            <div class="comentar" style="margin-top : 40px;">
              <h4>Komentar :</h4>
              <hr size="15px" color="#2a43aa" width="15%" align="left">
              <div class="form-comentar" style="margin : 10px;">
                <form action="index.php?page=kirim_komentar" method="post">
                  <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top : 15px;">
                      <div class="row">
                        <input type="hidden" name="id" value="<?=$_GET['id']?>">
                        <div class="col-lg-4 col-md-4">
                          <input type="text" name="nama" value="" placeholder="Nama" class="form-control">
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <input type="email" name="email" value="" placeholder="Email" class="form-control">
                        </div>
                        <div class="col-lg-2 col-md-2">
                          <button type="submit" name="kirim_komentar" style="width : 100%;" class="btn btn-primary"><i class="fa fa-send"></i> KIRIM</button>
                        </div>
                      </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top : 15px;">
                    <textarea name="isi_komentar" rows="8" cols="80" class="form-control">isi Komentar</textarea>
                  </div>
                </form>

                <div class="col-lg-12 col-md-12">
                  <div class="comments-area">
                  <?php
                    $id = $_GET['id'];
                    $sql = mysqli_query($config,"SELECT * FROM tbl_komentar WHERE id_berita = $id AND parent_komentar IS NULL ORDER BY tanggal DESC");
                    while($data = mysqli_fetch_array($sql)){

                      ?>
                      
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/admin/usr.png" alt="" width="50px;">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="mailto:<?=$data['email']?>"><?=$data['nama']?></a></h5>
                                        <p class="date"><?=$data['tanggal']?></p>
                                        <p class="comment">
                                            <?=$data['isi']?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php

                          $id_parent = $data['id_komentar'];
                          $replay = mysqli_query($config,"SELECT * FROM tbl_komentar WHERE parent_komentar = $id_parent ");
                          while($parent = mysqli_fetch_array($replay)){

                          ?>

                              <div class="comment-list left-padding">
                                  <div class="single-comment justify-content-between d-flex">
                                      <div class="user justify-content-between d-flex">
                                          <div class="thumb">
                                              <img src="img/admin/admin-male.png" alt="" width="50px;">
                                          </div>
                                          <div class="desc">
                                              <h5><a href="mailto:<?=$parent['email']?>"><?=$parent['nama']?></a></h5>
                                              <p class="date"><?=$parent['tanggal']?></p>
                                              <p class="comment">
                                                  <?=$parent['isi']?>
                                              </p>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                          <?php
                          }
                        
                    }
                  ?>
                  

                    <!-- <div class="" align="center">
                      <button type="button" name="button" class="btn btn-info">Lihat 20 komentar Lainnya</button>
                    </div> -->

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

              <div class="single-sidebar-widget popular-post-widget">
                <img src="img/term-online-ads.jpg" alt="" width="100%">
              </div>

            </div>
          </div>
    </div>
  </div>
</section>
<!-- End popular-course Area -->
