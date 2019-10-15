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
          <h1 class="m-0 text-dark">Gallery</h1>
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

      <!-- /.row -->
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">


        <div class="col-md-12">
          <!-- PRODUCT LIST -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Gallery</h3>

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
              <form role="form" method="POST" enctype="multipart/form-data">
                <div class="card-body">
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
                    <label for="exampleInputPassword1">Gallery</label>
                    <input type="file" name="gambar" class="form-control" id="exampleInputPassword1" placeholder="gambar">
                  </div>
                
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button class="btn btn-primary" type="submit" name="save"><i class="fas fa-check"></i> Ubah</button>
              </div>
              </form>
              <!-- /.card-body -->
              <!-- /.card-footer -->
            </div>
<?php
$id_gallery_lama = $_GET['id_gallery'];
 if (isset($_POST['save'])){
 $fileName = $_FILES['gambar']['name'];
  // Simpan di Folder Gambar
  move_uploaded_file($_FILES['gambar']['tmp_name'], "../img/".$_FILES['gambar']['name']);

$sql = "UPDATE gallery SET gambar = '$fileName' WHERE id_gallery = $id_gallery_lama;";

if ($config->query($sql) === TRUE) {
    ?>
<meta http-equiv="refresh" content="0;URL=gallery.php" />
    <?php
} else {
    echo "Error: " . $sql . "<br>" . $config->error;
}
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