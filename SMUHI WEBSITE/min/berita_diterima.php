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
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Berita</li>
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
          <a href="tambah_berita.php">
          <div class="info-box" style="width: 80px;">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-plus-circle"></i></span>
            <!-- /.info-box-content -->
          </div>
          </a>
          <!-- /.info-box -->
        </div>

        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">


      <div class="col-md-12">
        <!-- PRODUCT LIST -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Berita Diterima</h3>

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
                      <th>Lihat</th>
                      <th>Star</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php

                   $sql = mysqli_query($config, "SELECT * FROM tbl_berita INNER JOIN tbl_admin ON tbl_berita.id_admin = tbl_admin.id_admin WHERE tbl_berita.status = 'terima' ORDER BY tbl_berita.id_berita ");
                   while($berita = mysqli_fetch_array($sql)){

                    $long_string = $berita['deskripsi'];
                    $des = limit_words($long_string, 10);
                    $judul = limit_words($berita['judul_berita'],5);
                    ?>
                    <tr>
                      <td><?=$judul?> ...</td>
                      <td><?=$des?> ...</td>
                      <td><?=$berita['tanggal']?></td>
                      <td> <a href="detail_berita2.php?id_berita=<?=$berita['id_berita']?>"> <i class="fas fa-eye"></i></a></td>
                      <td><?php 
                          if ($berita['bintang']=='bintang') {
                            ?>
                            <a href="ubah_bintang.php?id_berita=<?=$berita['id_berita']?>"> <i class="fas fa-star" style="color: yellow;"></i></a>
                            <?php
                          }else{
                            ?>
                            <a href="ubah_bintang.php?id_berita=<?=$berita['id_berita']?>"> <i class="fas fa-star" style="color: black;"></i></a>
                            <?php
                          }
                       ?></td>

                    </tr>
                    <?php

                  }
                  ?>
                </tbody>
              </table>
            <!-- /.card-body -->
            <div class="card-footer text-center">
              
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      </div>
      <!-- /.col -->


      <!-- /.row -->
    </div><!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php 
include 'footer.php';
?>