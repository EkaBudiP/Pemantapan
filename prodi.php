<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
  <body>
  
<nav class="navbar navbar-expand-sm bg-info navbar-dark p-3">
  <div class="container">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">Beranda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="prodi.php">ProgramStudi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="maha.php">Mahasiswa</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container col-md-12 mt-5">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col">
              <h5>Data Prodi</h5>
            </div>
            <div class="col text-center">
              <a href="tambahprodi.php" class="btn btn-outline-info mr-2" style="float: right;">Tambah Prodi</a>
            </div>
          </div>
        </div>
  <table class="table table-striped">
    <thead class="table">
      <tr>
      <th>No</th>
        <th>Kode Prodi</th>
        <th>Nama Prodi</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
    <?php
      include'koneksi.php';

      $data = mysqli_query($conn,"select * from pro");
      

      while($row = mysqli_fetch_assoc($data)){

      ?>
      <tr>
        <td><?= $row['id']?></td>
        <td><?= $row['kode_program']?></td>
        <td><?= $row['nama_program']?></td>
        <td>
          <a href="hapusprodi.php?id=<?= $row ['id']?>" class="btn btn-outline-danger">Hapus</a>
          <a href="editprodi.php?id=<?= $row ['id']?>" class="btn btn-outline-warning">Edit</a>
        </td>



      </tr>
      <?php } ?>
    </tbody>
</div>
</div>