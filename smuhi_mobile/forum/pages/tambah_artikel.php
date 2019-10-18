<section class="banner-area relative" id="home" style="height : 200px;">
	<div class="overlay overlay-bg"></div>
	<div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12" style="top: -50px; right: 30px;">
                <h5 class="text-uppercase text-white" align="right">
                    Selamat Datang Alumni<br>
                    SMA 1 Muhammadiyah Yogyakarta
                </h5>
            </div>
        </div>
    </div>
</section>

<section class="popular-course-area single-post-area" style="margin-right: 10px; margin-left: 10px;">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border-style : solid; height : 100px; margin-bottom: 100px; position: relative ; top : -50px;">

            </div>
        </div>

        <div class="row" style="position : relative;top : -100px;">

            <div class="col-lg-8 col-md-8 col-sm-8 posts-list">

                <div class="row">
                    <div align="center">
                        <h2 style="text-align: center;">Tambah Artikel</h2>
                    </div>
                    <hr size="15px" width="100%">
                </div>

                <div class="row">
                    <form class="col-lg-12 col-md-12" method="POST" enctype="multipart/form-data">
                        <table class="table table-borderless">
                            <tr>
                                <td width="15%">Judul Artikel</td>
                                <td width="5%">:</td>
                                <td>
                                    <input type="text" name="judul" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td>:</td>
                                <td>
                                  <select class="form-control" id="" name="kategori">
                                    <?php
                                    $sql = mysqli_query($config,"SELECT * FROM tbl_kategori");
                                    while($data = mysqli_fetch_array($sql)){
                                     ?>

                                     <option value="<?php echo $data['id_kategori'] ?>"><?php echo $data['nama_kategori'] ?></option>

                                     <?php
                                 }
                                 ?>
                             </select>
                         </td>
                     </tr>
                     <tr>
                        <td>Thumbnail</td>
                        <td>:</td>
                        <td>
                            <input type="file" name="gambar" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <textarea name="isi" id="editor1"  >

                            </textarea>
<!--                             <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
CKEDITOR.replace( 'editor1', {
  extraPlugins: 'imageuploader'
});
          </script> -->
<script>
    var editor = CKEDITOR.replace( 'editor1' );
CKFinder.setupCKEditor( editor );
</script>

      </td>
  </tr>
  <tr>
    <td>Moderator</td>
    <td>:</td>
    <td>
        <input type="text" name="" class="form-control" value="<?php echo $_SESSION['username'] ?>" readonly>
    </td>
</tr>
</table>
<div class="col-lg-12 col-md-12" align="right">
    <button type="submit" class="btn btn-success" name="save">Kirim</button>
    <button type="reset" class="btn btn-danger">Reset</button>
</div>
                        <!-- <textarea class="texteditor">

                        </textarea> -->
                        <?php
                        if (isset($_POST['save'])){
                          $tanggal = date('Y-m-d');
                          $fileName = $_FILES['gambar']['name'];
  // Simpan di Folder Gambar
                          move_uploaded_file($_FILES['gambar']['tmp_name'], "img/thread/".$_FILES['gambar']['name']);

                          $sql = "INSERT INTO tbl_thread (judul,tanggal,isi,gambar,id_kategori,id_alumni)
                          VALUES ('$_POST[judul]', '$tanggal', '$_POST[isi]','$fileName','$_POST[kategori]','$_SESSION[id_alumni]')";

                          if ($config->query($sql) === TRUE) {
                            ?>
                            <meta http-equiv="refresh" content="0;URL=index.php?page=profile" />
                            <?php
                        } else {
                            echo "Error: " . $sql . "<br>" . $config->error;
                        }
                    }
                    ?>
                </form>
            </div>

						<div class="row">
		            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border-style : solid; height : 150px; margin-top: 50px; position: relative ;">

		            </div>
		        </div>

        </div>

				<div class="col-lg-4 col-md-4 col-sm-4 sidebar-widgets" >
						<div class="widget-wrap" style="margin-left: -15px; margin-right: -15px;">
								<!-- <div class="single-sidebar-widget popular-post-widget" style="position : relative;top : -40px;">
										<?php
										if (!empty($_SESSION['username'])) {
												?>
											 <a href="index.php?page=tambah_artikel"><h4 class="popular-title" style="background : gold; color: black;">Buat Artikel</h4></a>
												<?php
										}else{
												?>
												<a href="login.php"><h4 class="popular-title" style="background : gold; color: black;">Login Dulu</h4></a>
												<?php
										}

										?>
								</div> -->

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
																		<div class="col-lg-7 col-md-7 col-7">
																				<a href="index.php?page=detail_lowongan&&id=<?=$loker['lowongan_id']?>"><h6><?=$loker['nama_perusahaan']?></h6></a>
																				<i class="fa fa-clock-o"> <?=$loker['tanggal']?></i>
																				<p><?=$des?></p>
																				<hr size="15px;" color="#FFFF00">
																		</div>
																		<div class="col-lg-5 col-md-5 col-5">
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
																<div class="col-lg-4 col-md-4 col-sm-4 col-4" align="center">
																		<p style="font-size : 40px;">10</p>

																		<p>Agustus</p>
																</div>
																<div class="col-lg-8 col-md-8 col-sm-8 col-8">
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
																<div class="col-lg-4 col-md-4 col-sm-4 col-4" align="center">
																		<p style="font-size : 40px;">10</p>

																		<p>Agustus</p>
																</div>
																<div class="col-lg-8 col-md-8 col-sm-8 col-8">
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
																<div class="col-lg-4 col-md-4 col-sm-4 col-4" align="center">
																		<p style="font-size : 40px;">10</p>

																		<p>Agustus</p>
																</div>
																<div class="col-lg-8 col-md-8 col-sm-8 col-8">
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
