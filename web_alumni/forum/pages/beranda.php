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
        <div class="row" style="position : relative;top : -50px;">
            <div class="col-lg-2 col-md-2 col-sm-2 sidebar-widgets">
                <div style="position : relative;top : 20px;">
                    <h3>Kategori</h3>
                    <div class="row">
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
                    <div class="row" style="height : 800px; border-style: solid; margin-right : 5px;"></div>
                </div>
                              
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
                
                <div class="row" style="margin-top : 15px;">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style ="margin-bottom : 20px;">
                        <img src="../img/112.jpg" alt="" width="50px" height = "50px" style="border-radius : 100%; float: left; margin-right : 10px;">
                        <div style="margin-top : 10px;">
                            <div>
                                <h3 style="float:left; ">Mark Allen</h3>
                                <p style="float:left; margin-left : 5px ; margin-right: 5px; margin-top : 5px; ">Dalam</p>
                                <h3>Foods</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top : 10px;" align="right">                            
                        <img src="img/icon/iconfinder_dots-dotted-option-menu-bullet_3643778.svg" alt="" style="width : 25px;">
                    </div>
                    <a href="index.php?page=artikel&&id=" style="color:black; width: 100%;">
                        <img src="../img/berita/pp1.jpg" alt="" width="100%" style="margin-bottom : 15px;">
                        <h3>Stop Jangan Makan Mie Instan Pakai Nasi </h3>
                    </a>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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

                    <h5>BagusHehe</h5>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background : #DCDCDC; margin: 10px;">
                        <p style="size : 14px; color: black ; margin : 5px;">Duhh .. gak kenyang dong </p>
                    </div>
                    <a href="">
                        <i>Lihat Komentar Lain</i>
                    </a>   
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height : 5px; background: gray; margin-top : 15px; margin-bottom : 15px;"></div>                 
                </div> 

                <div class="row" style="margin-top : 15px;">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style ="margin-bottom : 20px;">
                        <img src="../img/112.jpg" alt="" width="50px" height = "50px" style="border-radius : 100%; float: left; margin-right : 10px;">
                        <div style="margin-top : 10px;">
                            <div>
                                <h3 style="float:left; ">Mark Allen</h3>
                                <p style="float:left; margin-left : 5px ; margin-right: 5px; margin-top : 5px; ">Dalam</p>
                                <h3>Foods</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top : 10px;" align="right">                            
                        <img src="img/icon/iconfinder_dots-dotted-option-menu-bullet_3643778.svg" alt="" style="width : 25px;">
                    </div>
                    <a href="index.php?page=artikel&&id=" style="color:black; width: 100%;">
                        <img src="../img/berita/pp1.jpg" alt="" width="100%" style="margin-bottom : 15px;">
                    
                        <h3>Stop Jangan Makan Mie Instan Pakai Nasi </h3>
                    </a>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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

                    <h5>BagusHehe</h5>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background : #DCDCDC; margin: 10px;">
                        <p style="size : 14px; color: black ; margin : 5px;">Duhh .. gak kenyang dong </p>
                    </div>
                    <a href="">
                        <i>Lihat Komentar Lain</i>
                    </a>         
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height : 5px; background: gray; margin-top : 15px; margin-bottom : 15px;"></div>               
                </div>  
                <div class="row" style="height : 200px; border-style: solid">
                        
                </div>
                          
            </div>
            

            <div class="col-lg-4 col-md-4 col-sm-4 sidebar-widgets" >
                <div class="widget-wrap">
                    <div class="single-sidebar-widget popular-post-widget" style="position : relative;top : -40px;">
                        <h4 class="popular-title" style="background : gold; color: black;">Buat Artikel</h4>
                        <div class="popular-post-list" style="border-style: solid; height : 200px;">
                            
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