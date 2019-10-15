<?php 
include 'header.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Halam Admin SMUHI</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v2</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">CPU Traffic</span>
              <span class="info-box-number">
                10
                <small>%</small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Lowongan Kerja</span>
              <?php

              $sql = mysqli_query($config, "SELECT COUNT(lowongan_id) AS jumlah
                FROM tbl_lowongan_kerja");
              while($jumlah = mysqli_fetch_array($sql)){
                ?>
                <span class="info-box-number"><?=$jumlah['jumlah']?></span>
              <?php } ?>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

            <div class="info-box-content">
              <?php
              $sql = mysqli_query($config, "SELECT COUNT(id_jasa) AS jumlah
                FROM tbl_jasa");
              while($jumlah = mysqli_fetch_array($sql)){
                ?>
                <span class="info-box-text">Jasa dan Produk</span>
                <span class="info-box-number"><?=$jumlah['jumlah']?></span>
                <?php
              }
              ?>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
              <?php
              $sql = mysqli_query($config, "SELECT COUNT(id_alumni) AS jumlah
                FROM tbl_alumni");
              while($jumlah = mysqli_fetch_array($sql)){
                ?>
                <span class="info-box-text">Anggota</span>
                <span class="info-box-number"><?=$jumlah['jumlah']?></span>
              <?php } ?>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
          <!-- MAP & BOX PANE -->

          <!-- /.card -->
          <!-- /.row -->

          <!-- TABLE: LATEST ORDERS -->
          <div class="card">
            <div class="card-header border-transparent">
              <h3 class="card-title">Berita Terbaru</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table m-0">
                  <thead>
                    <tr>
                      <th>Judul Berita</th>
                      <th>Deskripsi</th>
                      <th>Tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php

                   $sql = mysqli_query($config, "SELECT * FROM tbl_berita INNER JOIN tbl_admin ON tbl_berita.id_admin = tbl_admin.id_admin ORDER BY tbl_berita.id_berita");
                   while($berita = mysqli_fetch_array($sql)){

                    $long_string = $berita['deskripsi'];
                    $des = limit_words($long_string, 10);
                    $judul = limit_words($berita['judul_berita'],5);
                    ?>
                    <tr>
                      <td><?=$judul?> ...</a></td>
                      <td><?=$des?> ...</td>
                      <td><?=$berita['tanggal']?></td>
                    </tr>
                    <?php

                  }
                  ?>
                </tbody>
              </table>
            </div>
            <!-- /.table-responsive -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer clearfix">
          </div>
          <!-- /.card-footer -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->

      <div class="col-md-4">
        <!-- PRODUCT LIST -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Lowongan Kerja Terbaru</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <ul class="products-list product-list-in-card pl-2 pr-2">

              <?php

              $sql = mysqli_query($config,"SELECT * FROM tbl_lowongan_kerja ORDER BY tanggal DESC");
              while($loker = mysqli_fetch_array($sql)){

                $long_string = $loker['deskripsi'];
                $des = limit_words($long_string, 4);
                ?>

                <li class="item">
                  <div class="product-img">
                    <img src="../img/lowongan/<?=$loker['logo']?>" alt="Product Image" class="img-size-50">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title"><?=$loker['nama_perusahaan']?>
                    <span class="badge badge-warning float-right"><?=$loker['tanggal']?></span></a>
                    <span class="product-description">
                      <?=$des?> ...
                    </span>
                  </div>
                </li>
                <?php
              }
              ?>
              <!-- /.item -->
            </ul>
          </div>
          <!-- /.card-body -->
          <div class="card-footer text-center">
            <a href="javascript:void(0)" class="uppercase">Lihat Semua</a>
          </div>
          <!-- /.card-footer -->
        </div>
        <!-- /.card -->
      </div>
      <div class="col-md-4">
        <!-- PRODUCT LIST -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Jasa dan Produk</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <ul class="products-list product-list-in-card pl-2 pr-2">
              <?php

              $sql = mysqli_query($config, "SELECT * FROM tbl_jasa ORDER BY id_jasa DESC");
              while($jasa = mysqli_fetch_array($sql)){

                $long_string = $jasa['deskripsi'];
                $des = limit_words($long_string, 2);

                ?>
                <li class="item">
                  <div class="product-img">
                    <img src="../img/jasa/<?=$jasa['logo']?>" alt="Product Image" class="img-size-50">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title"><?=$jasa['nama_perusahaan']?>
                    <!-- <span class="badge badge-warning float-right">$1800</span></a> -->
                    <span class="product-description">
                      <?=$des?> ...</span>
                    </span>
                  </div>
                </li>
                <?php
              }
              ?>
            </ul>
          </div>
          <!-- /.card-body -->
          <div class="card-footer text-center">
            <a href="javascript:void(0)" class="uppercase">View All Products</a>
          </div>
          <!-- /.card-footer -->
        </div>
        <!-- /.card -->
      </div>
      <div class="col-md-4">
        <!-- PRODUCT LIST -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Agenda Alumni</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <ul class="products-list product-list-in-card pl-2 pr-2">
              <?php

              $sql = mysqli_query($config, "SELECT * FROM tbl_agenda_alumni ORDER BY id_agenda DESC");
              while($agenda = mysqli_fetch_array($sql)){

                $long_string = $agenda['deskripsi'];
                $des = limit_words($long_string, 4);
                $nama_agenda = limit_words($agenda['nama_agenda'],4);
                ?>
                <li class="item">
                  <div class="product-img">
                    <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title"><?=$nama_agenda?>
                    <span class="badge badge-warning float-right"><?=$jasa['tanggal']?></span></a>
                    <span class="product-description">
                      <?=$des?>
                    </span>
                  </div>
                </li>
                <?php
              }
              ?>
            </ul>
          </div>
          <!-- /.card-body -->
          <div class="card-footer text-center">
            <a href="javascript:void(0)" class="uppercase">View All Products</a>
          </div>
          <!-- /.card-footer -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div><!--/. container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php 
include 'footer.php';
?>