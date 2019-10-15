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

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 posts-list">
                <div class="row">
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-3">
                        <?php
                        $rating = 2.5;
                        for($i = 1 ; $i <= 5 ; $i++){
                            if($i <= $rating){
                                ?>
                                <i class="fa fa-star fa-2x" style="color: gold;" title="<?=$rating?>"></i>
                                <?php
                            }
                            else{
                                ?>
                                <i class="fa fa-star fa-2x
                                "></i>
                                <?php
                            }

                        }

                        ?>
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <a href="" style="color : gray;">
                            <i class="fa fa-share-alt fa-2x"> 29</i>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <a href="" style="color : gray;"><i class="fa fa-facebook fa-lg"></i></a>
                        <a href="" style="color : gray;"><i class="fa fa-instagram fa-lg" style="margin-left:15px;"></i></a>
                        <a href="" style="color : gray;"><i class="fa fa-whatsapp fa-lg" style="margin-left: 15px;"></i></a>
                        <a href="" style="color : gray;"><i class="fa fa-twitter fa-lg" style="margin-left: 15px;"></i></a>
                        <a href="" style="color : gray;"><i class="fa fa-envelope fa-lg" style="margin-left: 15px;"></i></a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                <input type="text" class="form-control" value="" style="position: relative ; top : -5px;" readonly>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <a href="" style="color : gray;"><i class="fa fa-link fa-lg" style="margin-right : 15px;"></i></a>
                                <a href="" style="color : gray;"><i class="fa fa-bookmark fa-lg"></i></a>
                            </div>
                        </div>
                    </div>

                    <hr size="15px" width="100%">
                </div>
                <?php 
                $sql_detail_artikel = mysqli_query($config,"SELECT * FROM tbl_thread join tbl_alumni ON tbl_thread.id_alumni = tbl_alumni.id_alumni JOIN tbl_kategori ON tbl_thread.id_kategori = tbl_kategori.id_kategori WHERE tbl_thread.id_thread = $_GET[id_thread]");
                $data_detail_artikel = mysqli_fetch_assoc($sql_detail_artikel);
                ?>
                <div class="row" style="margin-top : 15px;">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style ="margin-bottom : 20px;">
                        <img src="../img/<?php echo $data_detail_artikel['images'] ?>" alt="" width="50px" height = "50px" style="border-radius : 100%; float: left; margin-right : 10px;">
                        <div style="">
                            <div>
                                <h3 style="float:left; "><?php echo $data_detail_artikel['nama_alumni'] ?></h3>
                                <i style="margin-left : 5px; position : relative; top : 5px;"><?php echo $data_detail_artikel['tanggal'] ?></i>
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
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top : 10px;" align="right">                            
                        <img src="img/icon/iconfinder_dots-dotted-option-menu-bullet_3643778.svg" alt="" style="width : 25px;">
                    </div>
                    <hr size="15px" width="100%">
                    <div align="center" style="margin: 5px;">
                        <h3><?php echo $data_detail_artikel['judul'] ?> </h3>
                    </div>                    
                    <hr size="15px" width="100%">
                    <img src="img/thread/<?php echo $data_detail_artikel['gambar'] ?>" alt="" width="100%" style="margin : 15px;">
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <hr style="border: 2px solid gray">
                        <p class="lol">
                            <?php echo $data_detail_artikel['isi'] ?>
                        </p>   
                        <hr size="15px" width="100%">                                               
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <img src="../img/112.jpg" alt="" style="width : 30px; height : 30px; border-radius: 100%; float: left; margin-right : 10px;">
                        <p>
                            trecyasella dan 25 lainnya memberi reputasi
                        </p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" align="right">
                        <p>
                            Diubah oleh <a href="">kaskus.infoforum</a> kemarin 08:23
                        </p>
                    </div>
                    <hr width="100%"> 

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <i class="fa fa-bitbucket fa-lg" style="margin-right: 5px;"></i>
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <i style="margin: 10px;"> 26 </i>
                        <i class="fa fa-arrow-down fa-lg"></i>
                        <i class="fa fa-eraser fa-lg" style="margin-left: 5px;"></i>
                    </div>  

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" align="right">
                        <i class="fa fa-wechat fa-lg" style="margin-right: 20px;"> Kutip</i>
                        <i class="fa fa-reply fa-lg"> Balas</i>
                    </div>             
                </div> 

                <div class="row" style="margin-top : 20px;">
                    <div class="col-lg-2 col-md-2" align="right">
                        <p style="float: left; margin-right : 15px;">Urutan</p>
                        <i class="fa fa-clock-o fa-lg" style="margin-top : 5px;"></i>
                    </div>
                    <div class="col-ld-3 col-md-3">
                        <select name="" id="" class="form-control">
                            <option value="">Komentar Terlama</option>
                            <option value="">Komentar Terbaru</option>
                        </select>
                    </div>
                </div>

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

                <div class="row" style="margin-top : 20px;">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style ="margin-bottom : 20px;">
                        <img src="../img/112.jpg" alt="" width="50px" height = "50px" style="border-radius : 100%; float: left; margin-right : 10px;">
                        <div style="">
                            <div>
                                <h3 style="float:left; ">Mark Allen</h3>
                                <i style="margin-left : 5px; position : relative; top : 5px;">10 Agustus 2019 | 10:45</i>
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

                                    }

                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top : 10px;" align="right"> 
                        <h3 style="float: left; position: relative; left : 50px;">#1</h3>                           
                        <img src="img/icon/iconfinder_dots-dotted-option-menu-bullet_3643778.svg" alt="" style="width : 25px; ">
                    </div>
                    <hr width="100%">
                    <div style="margin : 20px 40px 20px 40px;">
                        <p style="font-size : 20px;">
                            first komen  .....
                        </p>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <img src="../img/112.jpg" alt="" style="width : 30px; height : 30px; border-radius: 100%; float: left; margin-right : 10px;">
                        <p>
                            trecyasella dan 25 lainnya memberi reputasi
                        </p>
                    </div>
                    <hr width="100%">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <i class="fa fa-bitbucket fa-lg" style="margin-right: 5px;"></i>
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <i style="margin: 10px;"> 26 </i>
                        <i class="fa fa-arrow-down fa-lg"></i>
                        <i class="fa fa-eraser fa-lg" style="margin-left: 5px;"></i>
                    </div>  

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" align="right">
                        <i class="fa fa-wechat fa-lg" style="margin-right: 20px;"> Kutip</i>
                        <i class="fa fa-reply fa-lg"> Balas</i>
                    </div>

                    <a href="" style="margin: 20px 0px 0px 30px;">Lihat 1 Balasan Lainnya <i class="fa fa-arrow-down"></i> </a>
                </div>

                

            </div>
            

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 sidebar-widgets" >
                <div class="widget-wrap">                    

                    <div class="single-sidebar-widget popular-post-widget" style="position : relative;top : -40px;">
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

                    <div class="single-sidebar-widget popular-post-widget">                        
                        <div class="popular-post-list" style="border-style: solid; height : 200px;"></div>
                    </div>

                    <div class="single-sidebar-widget popular-post-widget">                        
                        <i class="fa fa-star fa-2x" style="float: left; margin-right: 5px; color : gold;"> </i> <h3>Moderator</h3>
                        <div class="row" style="margin-top : 20px;">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-sm-6">
                                <img src="../img/112.jpg" alt="" style="width : 30px; height: 30px; border-radius : 100%; float: left; margin-right : 10px;">
                                <p>Syalala</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-sm-6" align="right">
                                <img src="../img/112.jpg" alt="" style="width : 30px; height: 30px; border-radius : 100%; float: left; margin-right : 10px;">
                                <p>dubidubidam</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>