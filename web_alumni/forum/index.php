<?php
    include "../config.php";

    function limit_words($string, $word_limit){
		$words = explode(" ",$string);
		return implode(" ",array_splice($words,0,$word_limit));
	}

    $sql = "SELECT count(*) AS jumlah FROM tbl_alumni";
	$query = mysqli_query($config,$sql);
	$result = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- p1icon-->
	<link rel="shortcut icon" href="img/p1.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>FORUM | MUHI</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/jquery-ui.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
		<style>
			h1 , h2, h3, h4, h5{
				font-family: sans-serif;
			}

			p {
				font-family: sans-serif;
			}

			i {
				font-family: sans-serif;
			}

			blockquote {
				font-family: sans-serif;
				font-size : 14px;
            }
            
            li{
                color : black;
            }
		</style>
	</head>
	<body>
		<header id="header" id="home">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-sm-2 col-sm-2 header-top-left no-padding" style="margin-top: 5px; ">
                        <h3 style="color: white;">FORUM MUHI</h3>
					</div>
					<div class="col-lg-3 col-sm-3 col-sm-3">
                        <div class="col-lg-3 col-md-3 col-sm-3" align="right" style="margin-top: 5px; ">
                            <p style="color : white;">ID</p>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <form>
                                <div class="input-group" >
                                <!-- <a href="#">ID</a> -->
                                <span class="input-group-addon"><i class="fa fa-search" style=""></i></span>
                                <input id="pencarian" type="text" class="form-control" name="pencarian" placeholder="pencarian">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="col-lg-8 col-md-8" style="margin-top : 5px;">
                            <p style="color: white;"><a href="login.php">MASUK</a> | <a href="b">DAFTAR</a> </p>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <a href="" class="btn btn-success">Buat Artikel</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4" >
                        <div class="input-group" style="margin-left : 15px;">
                            <span class="input-group-addon"><i class="fa fa-search" style=""></i></span>
                            <input id="pencarian" type="text" class="form-control" name="pencarian" placeholder="Buat Rekaman">
                        </div>
                    </div>
				</div>
			</div>
		</div>
		<div class="container" >
			<div class="row align-items-center justify-content-between d-flex" >
				<div id="logo">
                    <a href="index.html"><img src="img/logo1.png" width="40%;" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
				<ul class="nav-menu">
                    <li class="menu-has-children"><a href="">Kategori</a>
                        <ul>
                            <?php
                                $sql = mysqli_query($config,"SELECT * FROM tbl_kategori");
                                while($data = mysqli_fetch_array($sql)){
                                    ?>
                                        <li>
                                            <a href="">
                                                <?=$data['nama_kategori']?>
                                            </a>
                                        </li>
                                    <?php
                                }
                            ?>
                        </ul>
					</li>
					<li><a href="index.php?page=beranda">Beranda</a></li>
					<li><a href="index.php?page=data_alumni">Hobby</a></li>
					<li><a href="index.php?page=kartu_alumni">Politik</a></li>
                    <li><a href="forum/index.php">Travel</a></li>
                    <li><a href="">Food</a></li>
                    <li><a href="">Sosial</a></li>
                    <li><a href="">Budaya</a></li>
                    <li><a href="">Agama</a></li>
                    <li><a href="">Ekonomi</a></li>
                    <li><a href="">Donasi</a></li>
				</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
		</header><!-- #header -->


		<?php
			include "load_pages.php";
		?>


		<!-- start footer Area -->
		<footer class="footer-area section-gap" style="background : #C0C0C0;">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4">
                        <h3>Tentang Kami</h3>
                        <hr size = "15px;" color= "#FFFF00" width = "50px"; align="left">
                        <p style="color : black;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi alias id blanditiis sed at cum officia expedita, voluptas doloribus eveniet? Sequi perspiciatis vitae nulla fugit, natus quis eum et hic?
                        </p>

                        <h3>Langganan</h3>
                        <hr size = "15px;" color= "#FFFF00" width = "50px"; align="left">
                        <form class="form-group" action="#" method="post">
                            <div class="col-lg-9 col-md-9 col-sm-9">
                                <input type="text" name="email" value="" class="form-control" placeholder="Masukkan Email Anda">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <button type="submit" name="send_email" class="btn btn-primary"><i class="fa fa-send"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <h3>Forum MUHI</h3>
                        <hr size = "15px;" color= "#FFFF00" width = "50px"; align="left">
                        <ul>
                            <li>Pusat Bantuan</li>
                            <li>Tantang Kami</li>
                            <li>Hubungi Kami</li>
                            <li>Syarat & Ketentuan</li>
                            <li>Kebijakan Privasi</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <h3>Navigasi</h3>
                        <hr size = "15px;" color= "#FFFF00" width = "50px"; align="left">
                        <ul>
                            <li>Forum</li>
                            <li>Jual Beli</li>
                            <li>MUHI Ads</li>
                            <li>Arsip</li>
                            <li>Widgets</li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <h3>Jual Beli</h3>
                        <hr size = "15px;" color= "#FFFF00" width = "50px"; align="left">
                        <ul>
                            <li>Cara Jual</li>
                            <li>Cara Beli</li>
                            <li>Penjualan - FAQ</li>
                            <li>Pembelian - FAQ</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-13" align="center">
                        <h3>Recent Active Members</h3>
                        <br>
                        <?php
                            $sql = mysqli_query($config, "SELECT * FROM tbl_alumni LIMIT 10");
                            while($data = mysqli_fetch_array($sql)){
                                ?>
                                    <img src="../img/<?=$data['images']?>" alt="" style="width: 50px; height: 50px; border-radius : 100%; margin : 10px;">
                                <?php
                            }
                        ?>
                    </div>
                </div>

			</div>
		</footer>
        <!-- End footer Area -->
        <div class="row" style="background : #808080;">
            <div class="col-lg-12 col-md-13" align="center">
                <p style="color: white; font-size : 12px;">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                    alumnimuhi.com | Bagus and team |
                    <br>
                    This desain is part of Alumni Muhi Theme.
                    <br>
                    All rights reserved.
                </p>
            </div>
        </div>


		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="js/easing.min.js"></script>
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/jquery.tabs.min.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/mail-script.js"></script>
		<script src="js/main.js"></script>
		<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script>
			$(document).ready( function () {
				$('#myTable').DataTable();
			} );
		</script>
	</body>
</html>
