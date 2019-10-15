<?php
include "config.php";

function limit_words($string, $word_limit){
	$words = explode(" ",$string);
	return implode(" ",array_splice($words,0,$word_limit));
}


$sql = "SELECT count(*) AS jumlah FROM tbl_alumni";
$query = mysqli_query($config,$sql);
$result = mysqli_fetch_array($query);

?>
<?php

require 'function.php';

$ip      = ip_user();
$browser = browser_user();
$os      = os_user();
// untuk tes hilangkan comment dibawah ini
// unset($_COOKIE['VISITOR']);
// Check bila sebelumnya data pengunjung sudah terrekam
if (! isset($_COOKIE['VISITOR'])) {
    // Masa akan direkam kembali
    // Tujuan untuk menghindari merekam pengunjung yang sama dihari yang sama.
    // Cookie akan disimpan selama 24 jam
	$duration = time()+60*60*24;
    // simpan kedalam cookie browser
	setcookie('VISITOR',$browser,$duration);
    // current time
	$dateTime = date('Y-m-d H:i:s');
    // SQL Command atau perintah SQL INSERT
	$sql = "INSERT INTO statistik (ip, os, browser, date_create) VALUES ('$ip', '$os', '$browser', '$dateTime')";
    // variabel { $db } adalah perwakilan dari koneksi database lihat config.php
	$query = $config->query($sql);
}
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
	<title>Alumni | MUHI</title>

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

		<link rel="stylesheet" href="css/lightslider.css">
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
			.carousel-indicators{
				margin-left: auto;
				margin-right: auto;
				top: 85%;
			}
			.carousel-indicators li {
				display: inline-block;
				width: 100px;
				height: 3px;
				margin: 10px;
				cursor: pointer;
				border: none;
				background-color: white;

			}
			.carousel-indicators .active {
				width: 100px;
				height: 3px;
				margin: 10px;
				background-color: yellow;
			}


			.desc-wrap{
				height: flex;
			}

			.each-feature{
				display: flex;
			}

			.single-feature:hover .line-single-feature{
				border-top: 3px solid yellow;	
			}

			.single-feature h4{
				font-family: Montserrat-Light;
				font-size: 25px;
			}
			.single-feature:hover h4{
				font-family: Montserrat-Bold;
				font-size: 30px;	
			}
			.line-single-feature{
				border-top: 3px solid black;
				width: 30%;
			}
			.lol{
				background-color: red;
			}
			.single-feature{
				background-color: white;
				border-top: 10px solid blue;
				border-bottom: 10px solid yellow;
				padding-top: 10px;
				border-left: 1px solid gray;
				border-right: 1px solid gray;
			}
			ul{
				list-style: none outside none;
				padding-left: 0;
				margin: 0;
			}
			.demo .item{
				margin-bottom: 60px;
			}
			.content-slider li{
				background-color: #ed3020;
				text-align: center;
				color: #FFF;
			}
			.content-slider h3 {
				margin: 0;
				padding: 70px 0;
			}
			.demo{
				width: 800px;
			}
		</style>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/lightslider.js"></script> 
		<script>
			$(document).ready(function() {
				$("#content-slider").lightSlider({
					loop:true,
					keyPress:true,
					pager:false,
					autoWidth:true,
					auto:true,
				});
				$('#image-gallery').lightSlider({
					gallery:true,
					item:1,
					thumbItem:9,
					slideMargin: 0,
					speed:500,
					auto:true,
					loop:true,
					onSliderLoad: function() {
						$('#image-gallery').removeClass('cS-hidden');
					}  
				});
			});
		</script>

	</head>
	<body>

		<header id="header" id="home">
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-sm-6 col-6 header-top-left no-padding">
 							<a href="" class="pull-right">ID</a>
						</div>
						<div class="col-lg-6 col-sm-6 col-6">
							<form>
								<div class="input-group" >
									<!-- <a href="#">ID</a> -->
									<span class="input-group-addon"><i class="fa fa-search" style=""></i></span>
									<input id="pencarian" type="text" class="form-control" name="pencarian" placeholder="pencarian">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row align-item-center justify-content-between d-flex">
					<div id="logo">
						<a href="#"><img src="img/logofix.png" width="50px;" alt="" title="" style="float: left;" /></a>
						<!-- <p style="font-size: 12px; color: white;">Alumni SMA Muhammadiah 1 Yogyakarta</p> -->
					</div>
					<nav id="nav-menu-container">
						<ul class="nav-menu">
							<li><a href="index.php?page=beranda">Beranda</a></li>
							<li class="menu-has-children"><a href="">Tentang Kami</a>
								<ul>
									<li><a href="index.php?page=profil_ketua">Profile Ketua Alumni MUHI</a></li>
									<li><a href="index.php?page=struktur_organisasi">Struktur Organisasi Alumni MUHI</a></li>
									<li><a href="index.php?page=direktori">Direktori Pengurus Alumni MUHI</a></li>
								</ul>
							</li>
							<li><a href="index.php?page=data_alumni">Data Alumni</a></li>
							<li class="menu-has-children"><a href="">Karier</a>
								<ul>
									<li><a href="index.php?page=lowongan_kerja">Lowongan Kerja</a></li>
								</ul>
							</li>
							<li><a href="index.php?page=kartu_alumni">Kartu Alumni</a></li>
							<li><a href="forum/login.php">Forum</a></li>
						</ul>
					</nav><!-- #nav-menu-container -->
				</div>
			</div>
		</header><!-- #header -->


		<?php
		include "load_pages.php";
		?>


		<!-- start footer Area -->
		<footer class="footer-area section-gap" style="background : #2F4F4F;">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="col-lg-12 col-md-12 col-sm-12" align="center">
							<img src="img/logofix.png" alt="" width="150px;" style="margin-bottom: 5px;">
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12" align="center">
							<h1 style="color: white;">ALUMNI MUHI</h1>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12" align="center">
							<p style="color: white;">Let's Socialize</p>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12" align="center">

							<a href="#">
								<i class="fa fa-facebook fa-2x" style="color: white; margin: 10px;"></i>
							</a>
							<a href="#">
								<i class="fa fa-twitter fa-2x" style="color: white; margin: 10px;"></i>
							</a>
							<a href="#">
								<i class="fa fa-youtube-play fa-2x" style="color: white; margin: 10px;"></i>
							</a>
							<a href="#">
								<i class="fa fa-instagram fa-2x" style="color: white; margin: 10px;"></i>
							</a>
							<a href="#">
								<i class="fa fa-whatsapp fa-2x" style="color: white; margin: 10px;"></i>
							</a>
						</div>

					</div>

					<div class="col-lg-4 col-md-4 col-sm-4 col-12">
						<h3 style="color : white;" align="center">PAGES</h3>
						<hr size = "15px;" color= "#FFFF00" width = "50px"; align="center">
						<br>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							<div class="single-footer-widget">
								<ul>
									<li>
										<a href="#">
											<i class="fa fa-chevron-right" style="color: #FFFF00;"></i>
											<span style="color : white;">Beranda</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-chevron-right" style="color: #FFFF00;"></i>
											<span style="color : white;">Tentang Kami</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-chevron-right" style="color: #FFFF00;"></i>
											<span style="color : white;">Data Alumni</span>
										</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							<div class="single-footer-widget">
								<ul>
									<li>
										<a href="#">
											<i class="fa fa-chevron-right" style="color: #FFFF00;"></i>
											<span style="color : white;">Karier</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-chevron-right" style="color: #FFFF00;"></i>
											<span style="color : white;">Kartu Alumni</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-chevron-right" style="color: #FFFF00;"></i>
											<span style="color : white;">Forum</span>
										</a>
									</li>
								</ul>
							</div>
						</div>

						<!-- <br><br>
						<h3 style="color : white; margin-top : 100px">LANGGANAN</h3>
						<hr size = "15px;" color= "#FFFF00" width = "50px"; align="left">

						<div class="col-lg-10 col-md-10 col-sm-10" align="" style="margin-left: -25px">
							<form class="form-group" action="#" method="post">
								<div class="col-lg-9 col-md-9 col-sm-9">
									<input type="text" name="email" value="" class="form-control" placeholder="Masukkan Email Anda">
								</div>
								<div class="col-lg-3 col-md-3 col-sm-3">
									<button type="submit" name="send_email" class="btn btn-primary"><i class="fa fa-send"></i></button>
								</div>
							</form>
						</div> -->
					</div>					

					<div class="col-lg-4 col-md-4 col-sm-4">
						<h3 style="color : white;" align="center">KONTAK</h3>
						<hr size = "15px;" color= "#FFFF00" width = "50px"; align="center">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<table class="table" border="0">
								<tr>
									<td><i class="fa fa-phone" style="color : #FFFF00; width: 20px;"></i></td>
									<td><span style="color: white;">+62-247-563739</span></td>
								</tr>
								<tr>
									<td><i class="fa fa-envelope" style="color : #FFFF00; width: 20px;"></i></td>
									<td><a href="mailto:info@smamuhi-yog.sch.id" style="color: white;">info@smamuhi-yog.sch.id</a></td>
								</tr>
								<tr>
									<td><i class="fa fa-map-pin" style="color : #FFFF00; width: 20px;"></i></td>
									<td>
										<span style="color: white;">
											Jl. Gotongroyong II Petinggen,
											Karangwaru , Tegalrejo , Kota Yogyakarta
											, Indonesia 55241
										</span>
									</td>
								</tr>
							</table>

							<h3 style="color : white; margin-top : 30px" align="center">PENGUNJUNG</h3>
							<hr size = "15px;" color= "#FFFF00" width = "50px"; align="center">
							<?php
							$month = date('m');
							$year = date('Y');
							$date = date('d');
							$sql2 = "SELECT COUNT(id_statistik) as jumlah_pengunjung FROM statistik WHERE date_create LIKE '$year-$month-%'";
							$query2 = mysqli_query($config,$sql2);
							$result2 = mysqli_fetch_array($query2);
							?>
							<h6 style="color: white;"><?php echo $result2['jumlah_pengunjung']." Pengunjung Bulan Ini"; ?></h6>
							<?php
							$sql2 = "SELECT COUNT(id_statistik) as pengunjung_mingguan FROM statistik WHERE yearweek(DATE(date_create), 1) = yearweek(curdate(), 1)";
							$query2 = mysqli_query($config,$sql2);
							$result2 = mysqli_fetch_array($query2);
							?>
							<h6 style="color: white;"><?php echo $result2['pengunjung_mingguan']." Pengunjung Minggu Ini"; ?></h6>
							<?php
							$sql2 = "SELECT COUNT(id_statistik) as pengunjung_harian FROM statistik WHERE date_create LIKE '$year-$month-$date'";
							$query2 = mysqli_query($config,$sql2);
							$result2 = mysqli_fetch_array($query2);
							?>
							<h6 style="color: white;"><?php echo $result2['pengunjung_harian']." Pengunjung Hari Ini"; ?></h6>
						</div>
					</div>
				</div>

			</div>
		</footer>
		<!-- End footer Area -->



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
