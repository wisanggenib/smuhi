<section class="banner-area relative" id="home" style="height : 200px;">
	<div class="overlay overlay-bg"></div>
	<div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">

            </div>
        </div>
    </div>
</section>

<section class="popular-course-area single-post-area">
    <div class="container">
        <?php
        $sql_alumni = mysqli_query($config,"SELECT * FROM tbl_alumni WHERE id_alumni = $_SESSION[id_alumni]");
        $data_alumni = mysqli_fetch_assoc($sql_alumni);
        ?>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <img src="../img/<?php echo $data_alumni['images'] ?>" alt="" style="width: 70px; height: 70px; border-radius : 100%; border-style: solid; border-color: white; position : absolute ; top : -200px;">
                    </div>
                    <div style="width: 50px ; height: 50px; background: gold; border-radius: 100%;border-style: solid; border-color : white; position: absolute; top: -200px; right: 350px;" align="center">
                        <a href="" style="color: black;">
                            <i class="fa fa-camera fa-2x" style="margin-top : 7px;"></i>
                        </a>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <h1 class="text-white" style="position : absolute ; top : -150px; margin-left: 50px;"><?php echo $data_alumni['nama_alumni'] ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <a href="logout.php" class="btn btn-warning" style="position: absolute; top: -150px; left: 200px;"><i class="fa fa-exit fa-2x"></i> Logout</a>
            </div>
        </div>

        <!-- <div class="row align-items-center justify-content-between d-flex" >
            <nav id="nav-menu-container">
                <ul class="nav-menu" style="position: relative; top : -50px;">
                    <li><a href="index.php?page=" style="color: black; font-size: 18px;">Beranda</a></li>
                    <li><a href="" style="color: black; font-size: 18px;">Tentang</a></li>
                    <li><a href="" style="color: black; font-size: 18px;">Teman</a></li>
                    <li><a href="" style="color: black; font-size: 18px;">Galeri</a></li>
                    <li><a href="" style="color: black; font-size: 18px;">Arsip</a></li>
                    <li><a href="" style="color: black; font-size: 18px;">Edit Profil</a></li>
                </ul>
            </nav>
        </div> -->

        <div class="row" style="margin-top : 50px;">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-6">
									<div class="single-sidebar-widget popular-post-widget" style="position : relative;top : -40px;">
											<a href="index.php?page=tambah_artikel"><h5 align="center">Tulis Deskripsi Disini</h5></a>
											<hr size="15px;" color="blue" width="100%">
											<div class="" align="center">

													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-4">
															<h5 style="color: blue;">23</h5>
															<p style="font-size: 10px;">Posts</p>
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-4">
															<h5 style="color: blue;">32</h5>
															<p style="font-size: 10px;">Mengikuti</p>
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-4">
															<h5 style="color: blue;">12</h5>
															<p style="font-size: 10px;">Pengikut</p>
													</div>
											</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-6">
									<div class="single-sidebar-widget popular-post-widget" style="position : relative;top : -40px;">
											<h5 align="center" style="float: left; margin-right: 240px;">Gallery</h5> <p>1.375 posts</p>
											<hr size="15px;" color="blue" width="100%">
											<div class="row">

													<div class="col-lg-4 col-md-4 col-sm-4 col-4">
															<a href="">
																	<img src="../img/term-online-ads.jpg" alt="" style="width: 100%;">
															</a>
													</div>

													<div class="col-lg-4 col-md-4 col-sm-4 col-4">
															<a href="">
																	<img src="../img/term-online-ads.jpg" alt="" style="width: 100%;">
															</a>
													</div>

													<div class="col-lg-4 col-md-4 col-sm-4 col-4">
															<a href="">
																	<img src="../img/term-online-ads.jpg" alt="" style="width: 100%;">
															</a>
													</div>

											</div>
									</div>
								</div>
							</div>
						</div>
            <!-- <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 sidebar-widgets" >
                <div class="widget-wrap">

                    <div class="single-sidebar-widget popular-post-widget" style="position : relative;top : -40px;">
                        <a href="index.php?page=tambah_artikel"><h4 align="center">Tulis Deskripsi Disini</h4></a>
                        <hr size="15px;" color="blue" width="100%">
                        <div class="" align="center">

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <h2 style="color: blue;">23</h2>
                                <p>Posts</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <h2 style="color: blue;">32</h2>
                                <p>Mengikuti</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <h2 style="color: blue;">12</h2>
                                <p>Pengikut</p>
                            </div>
                        </div>
                    </div>

                    <div class="single-sidebar-widget popular-post-widget">
                        <h4 align="center" style="float: left; margin-right: 240px;">Gallery</h4> <p>1.375 posts</p>
                        <hr size="15px;" color="blue" width="100%">
                        <div class="row">

                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <a href="">
                                    <img src="../img/term-online-ads.jpg" alt="" style="margin : 5px; width: 100%;">
                                </a>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <a href="">
                                    <img src="../img/term-online-ads.jpg" alt="" style="margin : 5px; width: 100%;">
                                </a>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <a href="">
                                    <img src="../img/term-online-ads.jpg" alt="" style="margin : 5px; width: 100%;">
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
            </div> -->
				</div>
				<div class="row">
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 posts-list">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
                        <table class="table table-bordered">
                            <tr align="center">
                                <th style="background: aqua;">
                                    <a href="" ><h5>Artikel Saya</h5></a>
                                </th>
                                <th>
                                    <a href="" ><h5>Komentar Saya</h5></a>
                                </th>
                                <th>
                                    <a href="" ><h5>Lapak Saya</h5></a>
                                </th>
                            </tr>
                        </table>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-10 col-md-10 col-8" align="right">
                                <p>Urutan</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-4">
                                <select name="" id="" class="form-control">
                                    <option value="">Terbaru</option>
                                    <option value="">Terlama</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>

                <hr width="100%">
                <?php
                $sql = mysqli_query($config,"SELECT * FROM tbl_thread join tbl_alumni ON tbl_thread.id_alumni = tbl_alumni.id_alumni JOIN tbl_kategori ON tbl_thread.id_kategori = tbl_kategori.id_kategori WHERE tbl_thread.id_alumni = $_SESSION[id_alumni]");
                while($data = mysqli_fetch_array($sql)){
                    ?>
                    <div class="row" style="margin-top : 35px;">
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style ="margin-bottom : 20px;">
                            <img src="../img/<?php echo $data['images'] ?>" alt="" width="50px" height = "50px" style="border-radius : 100%; float: left; margin-right : 10px;">
                            <div style="">
                                <div>
                                    <h3 style="float:left; "><?php echo $data_alumni['nama_alumni'] ?></h3>
                                    <i style="margin-left : 5px; position : relative; top : 5px;"><?php echo $data['tanggal'] ?></i>
                                </div>
                                <br>
                                <div style="position : relative ; top: -15px;">
                                    <span>Spotlight</span>
                                    <span style="margin-left : 10px; margin-right: 10px;">|</span>
                                    <span>321 post</span>
                                    <span style="margin-left : 10px; margin-right: 10px;">|</span>
                                    <span>
                                        <?php
                                        $rating = 4;
                                        for($i = 1 ; $i <= 5 ; $i++){
                                            if($i <= $rating){
                                                ?>
                                                <i class="fa fa-star" style="color: gold;" title="<?=$rating?>"></i>
                                                <?php
                                            }
                                            else{
                                                ?>
                                                <i class="fa fa-star"></i>
                                                <?php
                                            }
                                                // <!-- <img src="img/icon/iconfinder_star_115793.svg" alt="" width="10px;"> -->

                                        }

                                        ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top : 10px;" align="right">
                            <img src="img/icon/iconfinder_dots-dotted-option-menu-bullet_3643778.svg" alt="" style="width : 25px;">
                        </div> -->
                        <a href="index.php?page=artikel&&id_thread=<?php echo $data['id_thread'] ?>" style="color:black; width: 100%;">
                            <img src="img/thread/<?php echo $data['gambar'] ?>" alt="" width="80%" style="margin : 15px;">
                            <div style="margin: 5px; margin-left: 15px;">
                                <h3><?php echo $data['judul'] ?> </h3>
                            </div>
                        </a>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-left: 15px;">
                            <div class="row">
                                <div style="margin-right : 20px;">
                                    <img src="img/icon/iconfinder_eye_226579.svg" alt="" style="width : 20px; float : left; margin-right : 5px;"> <i>1.374</i>
                                </div>
                                <div>
                                    <img src="img/icon/iconfinder_right-forward-next-turn-share_3643739.svg" alt="" style="width : 20px; float : left; margin-right : 5px;"> <i>56</i>
                                </div>
                            </div>
                            <hr size="15px" width="100%">
                        </div>
                    </div>
                    <?php
                }
                ?>
                <div class="row" style="margin-top : 20px;">
                    <div class="col-lg-6 col-md-6">
                        <p>Halaman 1 dari 16</p>
                    </div>
                    <div class="col-lg-6 col-md-6" align="right" style="position : relative ; top : -20px;">
                        <?php
                        for($start_number=1; $start_number<=4 ; $start_number++)
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
                            <li><a href="index.php?page=berita&&halaman=<?=$page+1?>">  <i class="fa  fa-angle-right"></i> </a></li>
                        </ul>

                        <ul class="pagination">
                            <li><a href="index.php?page=berita&&halaman=<?=$page+1?>">  <i class="fa  fa-angle-double-right"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
