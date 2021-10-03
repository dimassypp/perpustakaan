<?php
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];

    include "koneksi.php";
    $input = mysqli_query($koneksi, "INSERT INTO siswa (nama,alamat) VALUES ('{$nama}','{$alamat}')") or die(mysqli_error($connection));
    if($input){
        echo "<script>alert('Berhasil');location.href='index.php';</script>";
    }
    else{
        echo "<script>alert('Gagal');location.href='index.php';</script>";
    }
?>