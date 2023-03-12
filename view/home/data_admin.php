<?php

//menghitung jumlah produk
$hasil_produk=mysqli_query($db_li,"SELECT * FROM produk");
$jumlah_produk=mysqli_num_rows($hasil_produk);

//menghitung jumlah produk keluar
$hasil_keluar=mysqli_query($db_li,"SELECT * FROM produk_keluar");
$jumlah_keluar=mysqli_num_rows($hasil_keluar);
?>