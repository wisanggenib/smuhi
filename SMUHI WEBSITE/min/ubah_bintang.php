<?php
include '../config.php';
$id_berita_baru = $_GET['id_berita'];
$sql = mysqli_query($config,"SELECT id_berita FROM tbl_berita WHERE bintang='bintang'");
$berita = mysqli_fetch_assoc($sql);
if ($berita['id_berita']==$id_berita_baru) {
	$sql2 = "UPDATE tbl_berita SET bintang = 'tidak' WHERE id_berita = $id_berita_baru;";
	if ($config->query($sql2) === TRUE) {
		?>
		<meta http-equiv="refresh" content="0;URL=berita_diterima.php" />
		<?php
	} else {
		echo "Error eql " . $config->error;
	}
}else if (!empty($berita['id_berita'])) {
	$sql3 = "UPDATE tbl_berita SET bintang = 'bintang' WHERE id_berita = $id_berita_baru;";
	$sql4 = "UPDATE tbl_berita SET bintang = 'tidak' WHERE id_berita = $berita[id_berita];";
	if ($config->query($sql3) && $config->query($sql4) === TRUE) {
		?>
		<meta http-equiv="refresh" content="0;URL=berita_diterima.php" />
		<?php
	} else {
		echo "Error eql " . $config->error;
	}
}else{
	$sql5 = "UPDATE tbl_berita SET bintang = 'bintang' WHERE id_berita = $id_berita_baru;";
	if ($config->query($sql5) === TRUE) {
		?>
		<meta http-equiv="refresh" content="0;URL=berita_diterima.php" />
		<?php
	} else {
		echo "Error eql " . $config->error;
	}
}


?>