<?php

      $page = (isset($_GET['page'])) ? $_GET['page'] : '';

      switch ($page){
            
            case 'beranda' : //Halaman beranda
                  include "pages/beranda.php";
            break;

            case 'artikel' : //halaman artikel
                  include "pages/artikel.php";
            break;


            default :
                  include "pages/beranda.php";

      }

?>
