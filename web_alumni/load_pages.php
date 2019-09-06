<?php

      $page = (isset($_GET['page'])) ? $_GET['page'] : '';

      switch ($page){
            
            case 'beranda' : //Halaman beranda
                  include "pages/beranda.php";
            break;

            case 'profil_ketua' :
                  include "pages/profile_ketua.php";
            break;

            case 'direktori' :
                  include "pages/direktori_pengurus.php";
            break;

            case 'kartu_alumni' :
                  include "pages/kartu_alumni.php";
            break;

            case 'struktur_organisasi' :
                  include "pages/struktur_organisasi.php";
            break;

            case 'lowongan_kerja' :
                  include "pages/lowongan_kerja.php";
            break;

            case 'detail_lowongan' :
                  include "pages/detail_lowongan.php";
            break;

            case 'data_alumni' :
                  include "pages/data_alumni.php";
            break;

            case 'detail_alumni' :
                  include "pages/detail_alumni.php";
            break;

            case 'berita' :
                  include "pages/berita.php";
            break;

            case 'detail_berita' :
                  include "pages/detail_berita.php";
            break;

            case 'kirim_komentar' :
                  include "pages/kirim_komentar.php";
            break;



            default :
                  include "pages/beranda.php";

      }

?>
