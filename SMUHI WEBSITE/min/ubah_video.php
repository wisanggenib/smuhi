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
          <h1 class="m-0 text-dark">Video</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Ubah Video</li>
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
              <h3 class="card-title">Ubah Video</h3>

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
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                    <input type="text" name="judul" class="form-control" id="exampleInputEmail1" placeholder="Masukan Judul">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" id="exampleInputPassword1" placeholder="Masukan Deskripsi">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Url</label>
                    <input type="text" name="url" class="form-control" id="exampleInputPassword1" placeholder="Masukan url">
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
<!--                   <div class="form-group">
                    <label for="exampleInputPassword1">Thumbnail</label>
                    <input type="file" name="gambar" class="form-control" id="exampleInputPassword1" placeholder="gambar">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Konten</label>
                    <div class="">
                      <textarea class="textarea" placeholder="Place some text here" name="deskripsi" 
                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                  </div> -->
                
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button class="btn btn-primary" type="submit" name="save"><i class="fas fa-check"></i> Terima</button>
              </div>
              </form>
              <!-- /.card-body -->
              <div class="card-footer text-center">
               
              </div>
              <!-- /.card-footer -->
            </div>
<?php
$id_video_lama = $_GET['id_video'];
 if (isset($_POST['save'])){

$sql = "UPDATE tbl_video SET judul = '$_POST[judul]',url_video = '$_POST[url]',deskripsi_video = '$_POST[deskripsi]' WHERE id_video = $id_video_lama;";

if ($config->query($sql) === TRUE) {
    ?>
<meta http-equiv="refresh" content="0;URL=video.php" />
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