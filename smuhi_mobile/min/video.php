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
            <li class="breadcrumb-item active">Video</li>
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
          <!-- TAMBAH DISINI -->
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

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
              <h3 class="card-title">List Video</h3>

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
                <?php
                $sql = mysqli_query($config,"SELECT * FROM tbl_video ORDER BY id_video ASC");
                while($video = mysqli_fetch_array($sql)){
                  ?>
                  <div class="row">
                    <div class="col-md-8 col-lg-8" style="margin-top: 50px;">
                      <div class="row">
                        <div class="col-md-12" align="center">
                          <?=$video['url_video']?>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 col-lg-4" style="margin-left: -50px; margin-top: 50px;">
                      <div align="justify" style="border-bottom:1px solid black"><h3><?=$video['judul']?></h3></div>
                      <div align="justify"><?=$video['deskripsi_video']?></div>
                    </div>
                    <div class="col-md-12" align="center" style="margin-top: 10px;">
                      <a href="ubah_video.php?id_video=<?=$video['id_video']?>"><button type="button" class="btn btn-warning">Ubah Video</button></a>
                    </div>
                  </div>
                  <hr>
                  <?php
                }
                ?>
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