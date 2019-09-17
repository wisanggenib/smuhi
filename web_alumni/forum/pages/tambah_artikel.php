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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border-style : solid; height : 200px; margin-bottom: 100px; position: relative ; top : -50px;">
            
            </div>
        </div>
        
        <div class="row" style="position : relative;top : -100px;">

            <div class="col-lg-8 col-md-8 col-sm-8 posts-list">
                
                          
            </div>            

            <div class="col-lg-4 col-md-4 col-sm-4 sidebar-widgets" >
                <div class="widget-wrap">

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
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height : 5px; background: yellow; margin-top : 15px; margin-bottom : 15px;"></div>   
                    </div>

                    <div class="single-sidebar-widget popular-post-widget">
                        <h4 align="center">AGENDA ALUMNI</h4>
                        <hr size="15px;" color="blue" width="50%">
                        <div class="popular-post-list">

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4" align="center">
                                    <p style="font-size : 40px;">10</p>

                                    <p>Agustus</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    <ul>
                                        <li>
                                        <h5>Penyerahan hewan kurban ke ...</h5>
                                        </li>
                                        <li>
                                        <p>oleh alumni 1990</p>
                                        </li>
                                    </ul>
                                    <hr size="15px;" color="#FFFF00">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4" align="center">
                                    <p style="font-size : 40px;">10</p>

                                    <p>Agustus</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    <ul>
                                        <li>
                                        <h5>Penyerahan hewan kurban ke ...</h5>
                                        </li>
                                        <li>
                                        <p>oleh alumni 1990</p>
                                        </li>
                                    </ul>
                                    <hr size="15px;" color="#FFFF00">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4" align="center">
                                    <p style="font-size : 40px;">10</p>

                                    <p>Agustus</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    <ul>
                                        <li>
                                        <h5>Penyerahan hewan kurban ke ...</h5>
                                        </li>
                                        <li>
                                        <p>oleh alumni 1990</p>
                                        </li>
                                    </ul>
                                    <hr size="15px;" color="#FFFF00">
                                    </div>
                                </div>
                            </div>

                            <div class="" align ="right">
                                <a href="index.php?page=lowongan_kerja">Lihat Selengkapnya <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height : 5px; background: yellow; margin-top : 15px; margin-bottom : 15px;"></div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>