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
            <li class="breadcrumb-item active">Gallery</li>
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
              <h3 class="card-title">List Gallery</h3>

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
                <div class="row">
                  <?php

                  $sql = mysqli_query($config,"SELECT * FROM gallery ORDER BY id_gallery ASC");
                  while($gallery = mysqli_fetch_array($sql)){
                    ?>
                    <div class="col-md-4 col-lg-4" style="margin-top: 50px;">
                      <div class="row">
                        <div class="col-md-12" align="center"><img src="../img/<?=$gallery['gambar']?>" width="250px;" height="150px;"></div>
                        <div class="col-md-12" align="center" style="margin-top: 10px;">
                          <a href="ubah_gallery.php?id_gallery=<?=$gallery['id_gallery']?>"><button type="button" class="btn btn-warning">Ubah Gallery</button></a>
                        </div>
                      </div>
                    </div>
                    <?php
                  }
                    ?>
                  </div>
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