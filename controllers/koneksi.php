<?php
    $namaServer = "localhost";
    $username = "root";
    $password = "";
    $namaDB = "porto";

    // Membuat koneksi
    $koneksi = mysqli_connect($namaServer, $username, $password, $namaDB);

    // Cek Koneksi
    if(!$koneksi) {
        die("Gagal menyambungkan koneksi ke Database. " . mysqli_connect_error());
    }
?>