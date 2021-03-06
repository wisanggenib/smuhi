<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					OPINI TERBARU
          <br>
          ALUMNI MUHI
				</h1>
				<p class="text-white link-nav"><a href="index.php?page=dashboard">Home </a>  <span class="lnr lnr-arrow-right"></span> Opini Terbaru</p>
			</div>
		</div>
	</div>
</section>

<section class="popular-course-area single-post-area">
  <div class="container">
      <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 posts-list">
            <div align="center" style="margin-bottom : 50px;">
              <h1>OPINI TERBARU <br> ALUMNI MUHI</h1>
            </div>            

            <div class="">
              <div align="left" style="margin-top : 20px;">
                <h3>Opini Alumni</h3>
                <hr size="15px;" color="#FFFF00" width = "30%" align="left">
              </div>
              <br><br>
              <div class="desc-wrap" align="left">

                <?php
                //paging
                $halaman = 2;
                $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                $result1 = mysqli_query($config,"SELECT * FROM tbl_beritaalumni");
                $total = mysqli_num_rows($result1);
                $pages = ceil($total/$halaman);
                $query = mysqli_query($config,"SELECT * FROM tbl_beritaalumni ORDER BY tbl_beritaalumni.id_beritaalumni DESC LIMIT $mulai, $halaman");
                while ($row = mysqli_fetch_array($query))
                {
                  $long_string = $row['deskripsi'];
                  $des = limit_words($long_string, 10);
                  ?>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                          <img src="img/berita/<?=$row['img']?>" width = "100%" alt="" >
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                          <ul>
                            <li>
                              <a href="index.php?page=detail_lowongan&&id=1">
                                <h4><?=$row['judul']?></h4>
                              </a>
                            </li>
                            <li>
                              <i class="fa fa-clock-o"> <?=$row['tanggal']?></i>
                              <!-- <i class="fa fa-user"> <?=$row['username']?></i> -->
                            </li>
                            <li>
                              <p>
                              <?=$des?> ...
                              </p>
                              <a href="index.php?page=detail_beritaalumni&id=<?=$row['id_beritaalumni']?>">Lihat Selengkapnya <i class="fa fa-chevron-circle-right"></i></a>
                            </li>
                          </ul>
                          <hr size="15px;" color="#FFFF00" width = "30%" align="left">
                          <br>
                        </div>
                      </div>
                    </div>

                  <?php
                }
                ?>

                <div class="col-lg-12 col-md-12 col-sm-12" align="center">
                  <ul class="pagination">
                      <li><a href="index.php?page=opinialumni&&halaman=<?=$page-1?>"> &laquo; </a></li>
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
                            <li <?=$active?> ><a href="index.php?page=opinialumni&&halaman=<?=$start_number?>"><?=$start_number?></a></li>
                        </ul>
                        <?php
                    }
                  ?>
                  <ul class="pagination">
                      <li><a href="index.php?page=opinialumni&&halaman=<?=$page+1?>"> &raquo; </a></li>
                  </ul>
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
