<section class="banner-area relative" id="home" style="height : 350px;">
	<div class="overlay overlay-bg"></div>
	<div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-uppercase text-white" align="right">
                Selamat Datang Alumni<br>
                SMA 1 Muhammadiyah Yogyakarta
                </h1>
            </div>
        </div>
	</div>
</section>

<section class="popular-course-area single-post-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 sidebar-widgets">
                <h3>Kategori</h3>
                <ul>
                    <?php

                        $sql = mysqli_query($config,"SELECT * FROM tbl_kategori");
                        while($data = mysqli_fetch_array($sql)){
                            ?>
                                <li style="margin-bottom : 10px; margin-left : 10px;">
                                    <a href="" style="color : black;">
                                        <img src="img/icon/iconfinder_tag_115791.svg" alt="" width="20px"> <?=$data['nama_kategori']?>
                                    </a>   
                                </li>
                            <?php
                        }
                    ?>
                </ul>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 posts-list">
                <div class="row">
                    <div align="left" class="col-lg-10">                    
                        <h3 style="color : black;">
                            <img src="img/icon/iconfinder_Icon_Element_Fire_02_513727.svg" alt=""> 
                            Artikel Terpanas                        
                        </h3>
                    </div>
                    <div align="right" class="col-lg-2" style="margin-top : 25px;">
                        <img src="img/icon/iconfinder_6.list-menu_4201272.svg" alt="" width="20px;" style="margin-right : 5px;"> 
                        <img src="img/icon/iconfinder_26.browser-website_4201264.svg" alt="" width="20px;"> 
                    </div>
                </div>
                

                <?php

                $sql = mysqli_query($config, "SELECT * FROM tbl_berita INNER JOIN tbl_admin ON tbl_berita.id_admin = tbl_admin.id_admin ORDER BY tbl_berita.id_berita DESC LIMIT 1");
                while($berita = mysqli_fetch_array($sql))
                {
                    $long_string = $berita['deskripsi'];
                    $des = limit_words($long_string, 40);
                    ?>
                    <img src="../img/berita/<?=$berita['images_berita']?>" alt="" width="100%">
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
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 sidebar-widgets">
                <div class="widget-wrap">
                <div class="single-sidebar-widget popular-post-widget">
                    <h4 class="popular-title" style="background : gold; color: black;">Buat Artikel</h4>
                    <div class="popular-post-list">
                        <img src="img/icon/write.png" alt="" width="100%">
                    </div>
                </div>

                <div class="single-sidebar-widget popular-post-widget">
                    <h4 align="center">ARTIKEL REKOMENDASI</h4>
                    <hr size="15px;" color="blue" width="50%">
                    <div class="popular-post-list">

                    <?php

                        $sql = mysqli_query($config,"SELECT * FROM tbl_lowongan_kerja ORDER BY tanggal DESC LIMIT 3");
                        while($loker = mysqli_fetch_array($sql)){
                        
                        $long_string = $loker['deskripsi'];
                        $des = limit_words($long_string, 5);
                        ?>
                        <div class="col-lg-12 col-md-12">
                            <div class="row">
                                <div class="col-lg-7 col-md-7">
                                    <a href="index.php?page=detail_lowongan&&id=<?=$loker['lowongan_id']?>"><h6><?=$loker['nama_perusahaan']?></h6></a>
                                    <i class="fa fa-clock-o"> <?=$loker['tanggal']?></i>
                                    <p><?=$des?></p>
                                    <hr size="15px;" color="#FFFF00">
                                </div>
                                <div class="col-lg-5 col-md-5">
                                    <img class="img-fluid" src="../img/lowongan/<?=$loker['logo']?>" alt="" width="100px" style="border-radius : 5px;">
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
                    <img src="../img/term-online-ads.jpg" alt="" width="100%">
                </div>

                </div>
            </div>
        </div>
    </div>
</section>