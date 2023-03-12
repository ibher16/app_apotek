<?php
error_reporting(0);
@session_start();
switch ($_GET['page']) {

        //Home
    case "home":
        include 'view/home/dashboard.php';
        break;

        //referensi jenis
    case "jenis_obat":
        include 'view/referensi/data_jenis_obat.php';
        break;

        //referensi satuan
    case "satuan":
        include 'view/referensi/data_satuan.php';
        break;

        //referensi industri
    case "industri":
        include 'view/referensi/industri.php';
        break;


    case "exit":
        include 'proses/logout.php';
        exit();
        break;
    default:


        if (!empty($_GET['page'])) {
            echo "<script> $(document).ready(function(){ alertify.error('Halaman Yang anda minta tidak tersedia!'); }); </script>";
            include_once 'error/404.php';
        } else {
            include_once 'dashboard.php';
        }
        break;
}
