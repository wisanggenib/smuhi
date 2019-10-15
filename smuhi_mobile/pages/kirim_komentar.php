<?php

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['isi_komentar'];
    $id_berita = $_POST['id'];
    $tanggal = date("Y-m-d");

    $sql = mysqli_query($config,"INSERT INTO tbl_komentar (id_berita,nama,email,isi,tanggal) VALUES ($id_berita, '$nama', '$email', '$komentar','$tanggal')");

    if($sql){
        echo "<script>alert('Data berhasil di tambahkan!');</script>";
        echo "<script>window.location.href ='index.php?page=detail_berita&&id=$id_berita' </script>";
    }
    else{
        echo "Gagal Menyimpan";
    }

?>