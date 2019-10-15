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
          <h1 class="m-0 text-dark">Berita</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Detail Berita</li>
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

      <!-- /.row -->
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">


        <div class="col-md-12">
          <!-- PRODUCT LIST -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Detail Berita</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <?php
            $id_berita = $_GET['id_berita'];
            $sql = mysqli_query($config, "SELECT * FROM tbl_berita INNER JOIN tbl_admin ON tbl_berita.id_admin = tbl_admin.id_admin where id_berita = $id_berita");
            while($berita = mysqli_fetch_array($sql)){

              ?>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                    <input type="judul" class="form-control" id="exampleInputEmail1" placeholder="Masukan Judul" value="<?=$berita['judul_berita']?>" disabled>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="tanggal" value="<?=$berita['tanggal']?>" disabled>
                  </div>
<!--                   <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div> -->
                  <div class="form-group">
                    <label for="exampleInputPassword1">Konten</label>
                    <div class="">
                      <textarea class="textarea" placeholder="Place some text here"
                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" disabled="true"><?=$berita['deskripsi']?></textarea>
                    </div>
                  </div>
</form>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="berita_diterima.php"><button class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali</button></a>
                  <a href="hapus2.php?id_berita=<?=$id_berita?>"><button class="btn btn-danger"><i class="fas fa-eraser"></i> Hapus</button></a>
                </div>
              
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <a href="berita_diterima.php" class="uppercase">Lihat Semua Berita</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <?php
          }
          ?>
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