<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelas</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PERPUSTAKAAN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="tampil_kelas.php">Data Kelas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil_siswa.php">Data Siswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil_buku.php">Data Buku</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
    <h1>Data Kelas</h1>
    <form action = "tampil_kelas.php" method = "POST">
        <input type = "text" name = "cari" class = "form-control" placeholder = "Masukkan Keyword Pencarian"/>
    </form>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID Kelas</th>
      <th scope="col">Nama Kelas</th>
      <th scope="col">Kelompok</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "koneksi.php";
    if (isset($_POST["cari"])){
        //jika ada keyword pencarian
        $cari = $_POST['cari'];
        $query_kelas = mysqli_query($koneksi, "select * from kelas where id_kelas like '%$cari%' or nama_kelas like '%$cari%'");
    } else {
        //jika tidak ada keyword pencarian
        $query_kelas = mysqli_query($koneksi, "select * from kelas");
    }
    while ($data_kelas = mysqli_fetch_array($query_kelas)){?>
        <tr> 
            <td><?=$data_kelas["id_kelas"];?></td>
            <td><?=$data_kelas["nama_kelas"];?></td>
            <td><?=$data_kelas["kelompok"];?></td>
            <td>
              <a href="ubah_kelas.php?id_kelas=<?=$data_kelas["id_kelas"]?>" class="btn btn-success">Ubah</a>
              <a href="hapus_kelas.php?id_siswa=<?=$data_kelas["id_kelas"]?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</a>
        </tr>

    <?php
    }
    ?>
  </tbody>
</table>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>