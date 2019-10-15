<?php 
include '../config.php';
$id_berita = $_GET['id_berita'];
$sql = "UPDATE tbl_berita SET status='terima' WHERE id_berita=$id_berita";

if ($config->query($sql) === TRUE) {
?>
    <meta http-equiv="refresh" content="0;URL=berita.php" />
<?php
} else {
    echo "Error eql " . $config->error;
}
 ?>

