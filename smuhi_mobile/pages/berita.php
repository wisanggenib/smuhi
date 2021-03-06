<section class="banner-area relative" id="home" style="height: 250px;">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12" style="top : -50px;">
				<h1 class="text-white" style="font-size : 20px;">
					BERITA TERBARU
          <br>
          ALUMNI MUHI
				</h1>
				<p class="text-white link-nav" style="font-size: 12px;"><a href="index.php?page=dashboard">Home </a>  <span class="lnr lnr-arrow-right"></span> Berita Terbaru</p>
			</div>
		</div>
	</div>
</section>

<section class="popular-course-area single-post-area">
  <div class="container">
      <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 posts-list">
            <div align="center" style="margin-bottom : 50px;">
              <h3>BERITA TERBARU <br> ALUMNI MUHI</h3>
            </div>

            <?php

              $sql = mysqli_query($config, "SELECT * FROM tbl_berita INNER JOIN tbl_admin ON tbl_berita.id_admin = tbl_admin.id_admin WHERE tbl_berita.status = 'terima' AND tbl_berita.bintang = 'bintang' ORDER BY tbl_berita.id_berita DESC LIMIT 1");
              while($berita = mysqli_fetch_array($sql))
              {
                $long_string = $berita['deskripsi'];
                $des = limit_words($long_string, 40);
                ?>
                  <img src="img/berita/<?=$berita['images_berita']?>" alt="" width="100%">
                  <i class="fa fa-calendar"> <?=$berita['tanggal']?></i>
                  <i class="fa fa-user"> <?=$berita['username']?></i>
                  <h3><?=$berita['judul_berita']?></h3>
                  <p>
                    <?=$des?> ...
                  </p>
                  <a href="index.php?page=detail_berita&id=<?=$berita['id_berita']?>">Lihat Selengkapnya <i class="fa fa-chevron-circle-right"></i></a>
                <?php
              }

            ?>
            

            <div class="">
              <div align="left" style="margin-top : 20px;">
                <h3>Berita Alumni</h3>
                <hr size="15px;" color="#FFFF00" width = "30%" align="left">
              </div>
              <br><br>
              <div class="desc-wrap" align="left">

                <?php
                //paging
                $halaman = 2;
                $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                $result1 = mysqli_query($config,"SELECT * FROM tbl_berita");
                $total = mysqli_num_rows($result1);
                $pages = ceil($total/$halaman);
                $query = mysqli_query($config,"SELECT * FROM tbl_berita INNER JOIN tbl_admin ON tbl_berita.id_admin = tbl_admin.id_admin WHERE tbl_berita.status = 'terima' AND tbl_berita.bintang = 'tidak' ORDER BY tbl_berita.id_berita DESC LIMIT $mulai, $halaman");
                while ($row = mysqli_fetch_array ($query))
                {
                  $long_string = $row['deskripsi'];
                  $des = limit_words($long_string, 15);
                  ?>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <img src="img/berita/<?=$row['images_berita']?>" width = "100px" alt="" style="margin: 10px; border-radius: 5px; float: left;">
                          <ul>
                            <li>
                              <a href="index.php?page=detail_lowongan&&id=1">
                                <h5><?=$row['judul_berita']?></h5>
                              </a>
                            </li>
                            <li>
                              <i class="fa fa-clock-o"> <?=$row['tanggal']?></i>
                              <i class="fa fa-user"> <?=$row['username']?></i>
                            </li>
                            <li>
                              <p>
                              <?=$des?> ...
                              </p>
                              <a href="index.php?page=detail_berita&id=<?=$row['id_berita']?>">Lihat Selengkapnya <i class="fa fa-chevron-circle-right"></i></a>
                            </li>
                          </ul>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">                          
                          <hr size="15px;" color="#FFFF00" width = "100%" align="left">
                          <br>
                        </div>
                      </div>
                    </div>

                  <?php
                }
                ?>

                <div class="col-lg-12 col-md-12 col-sm-12" align="center">
                  <ul class="pagination">
                      <li><a href="index.php?page=berita&&halaman=<?=$page-1?>"> &laquo; </a></li>
                  </ul>
                  <?php
                    for($start_number=1; $start_number<=$pages ; $start_number++)
                    {
                        $active = false;
                        if($page == $start_number){
                            $active = "class='active'";
                        }
                        ?>
                        <ul class="pagination">
                            <li <?=$active?> ><a href="index.php?page=berita&&halaman=<?=$start_number?>"><?=$start_number?></a></li>
                        </ul>
                        <?php
                    }
                  ?>
                  <ul class="pagination">
                      <li><a href="index.php?page=berita&&halaman=<?=$page+1?>"> &raquo; </a></li>
                  </ul>
                </div>
              
              </div>
            </div>            
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
