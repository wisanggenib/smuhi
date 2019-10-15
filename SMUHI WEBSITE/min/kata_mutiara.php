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
            <li class="breadcrumb-item active">Kata Mutiara</li>
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
            <h3 class="card-title">Kata Mutiara</h3>

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
                      <th>Gambar</th>
                      <th>Kata Mutiara</th>
                      <th>Nama</th>
                      <th>Profesi</th>

                    </tr>
                  </thead>
                  <tbody>
                   <?php

                   $sql = mysqli_query($config, "SELECT * FROM kata_mutiara ORDER BY id_kata_mutiara ");
                   while($mutiara = mysqli_fetch_array($sql)){

                    $long_string = $mutiara['kata_mutiara'];
                    $des = limit_words($long_string, 10);
                    ?>
                    <tr>
                      <td><img src="../img/mutiara/<?=$mutiara['gambar']?>" width="50px" alt="gambar"></td>
                      <td><?=$des?> ...</td>
                      <td><?=$mutiara['nama']?></td>
                      <td><?=$mutiara['profesi']?></td>
                      <td> <a href="ubah_kata.php?id_kata_mutiara=<?=$mutiara['id_kata_mutiara']?>"> <i class="fas fa-eye"></i></a></td>

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