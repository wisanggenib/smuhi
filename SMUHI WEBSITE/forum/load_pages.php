<?php

$page = (isset($_GET['page'])) ? $_GET['page'] : '';

switch ($page){

            case 'beranda' : //Halaman beranda
            include "pages/beranda.php";
            break;

            case 'artikel' : //halaman artikel
            include "pages/artikel.php";
            break;

            case 'produk' : //halaman produk
            include "pages/produk.php";
            break;

            case 'detail_produk' : 
            include "pages/detail_produk.php";
            break;

            case 'profile' :
            include "pages/profile.php";
            break;

            case 'tambah_artikel' :
            include "pages/tambah_artikel.php";
            break;

            case 'kategori' :
            include "pages/kategori.php";
            break;

            default :
            include "pages/beranda.php";

      }

      ?>
