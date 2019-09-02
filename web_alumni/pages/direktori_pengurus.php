<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					DIREKTORI PENGURUS
          <br>
          ALUMNI MUHI
				</h1>
				<p class="text-white link-nav"><a href="index.php?page=dashboard">Home </a>  <span class="lnr lnr-arrow-right"></span> Tentang Kami <span class="lnr lnr-arrow-right"></span> Direktori Pengururs Alumni MUHI </p>
			</div>
		</div>
	</div>
</section>

<!-- Start popular-courses Area -->
<section class="popular-courses-area section-gap courses-page">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">DIREKTORI PENGURUS <br>ALUMNI MUHI </h1>
				</div>
			</div>
		</div>
		<div class="row">
			<?php
				$halaman = 4;
                $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                $res = mysqli_query($config,"SELECT * FROM tbl_pengurus");
                $total = mysqli_num_rows($res);
				$pages = ceil($total/$halaman);
				
				$sql = mysqli_query($config, "SELECT * FROM tbl_pengurus INNER JOIN tbl_alumni ON tbl_pengurus.id_alumni = tbl_alumni.id_alumni ORDER BY tbl_pengurus.angkatan ASC LIMIT $mulai, $halaman");
				while($data = mysqli_fetch_array($sql)){
					?>
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="img/alumni/<?=$data['images']?>" alt="" style="width : 200px; height: 300px;">
								</div>
								<div class="meta">
									<a href="#">
										<i class="fa fa-facebook fa-lg" style="margin-right : 15px; margin-left : 15px; color: white;"></i>
									</a>
									<a href="#">
										<i class="fa fa-twitter fa-lg" style="margin-right : 15px; margin-left : 15px; color: white;"></i>
									</a>
									<a href="#">
										<i class="fa fa-instagram fa-lg" style="margin-right : 15px; margin-left : 15px; color: white;"></i>
									</a>
									<a href="#">
										<i class="fa fa-whatsapp fa-lg" style="margin-right : 15px; margin-left : 15px; color: white;"></i>
									</a>
								</div>
							</div>
							<div class="details">
								<a href="course-details.html">
									<h4>
										<?=$data['nama_alumni']?>
									</h4>
								</a>
								<p>
									Ketua Angkatan <?=$data['angkatan']?>
								</p>
							</div>
						</div>
					<?php
				}
			?>
			

			<div class="col-lg-12 col-md-12 col-sm-12" align="center">
				<ul class="pagination">
                      <li><a href="index.php?page=direktori&&halaman=<?=$page-1?>"> &laquo; </a></li>
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
                            <li <?=$active?> ><a href="index.php?page=direktori&&halaman=<?=$start_number?>"><?=$start_number?></a></li>
                        </ul>
                        <?php
                    }
                  ?>
                  <ul class="pagination">
                      <li><a href="index.php?page=direktori&&halaman=<?=$page+1?>"> &raquo; </a></li>
                  </ul>
			</div>
			
		</div>
	</div>
</section>
<!-- End popular-courses Area -->
