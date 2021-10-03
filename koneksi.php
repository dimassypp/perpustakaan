<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $database = "perpus";
    $koneksi =  mysqli_connect($serverName, $userName, $password, $database);

    if(!$koneksi){
        die("Koneksi Gagal ".mysqli.connect.error());
    }
    else{
        echo "Koneksi berhasil";
    }
?>