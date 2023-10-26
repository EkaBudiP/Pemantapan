<?php

    include'koneksi.php';

    $id = $_GET['id'];
    $data = mysqli_query($conn,"SELECT * FROM pro where id = '$id'");
    $row = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form action="updateprodi.php" method="post">
    <div class="card container mt-5">
    <div class="form-group">
    <input type="text" name="id" id="" class="form-control bg-info text-dark" value="<?= $row['id']?>" readonly>
    </div>
    <div class="form-group">
        <!-- <table>Kode Program</table> -->
    <input type="text" name="kode_program" id="" class="form-control bg-info text-dark" value="<?= $row['kode_program']?>">
    </div>
    <div class="form-group">
    <!-- <table>Nama Program</table> -->
    <input type="text" name="nama_program" id="" class="form-control bg-info text-dark" value="<?= $row['nama_program']?>"><br>
    </div>
    <input type="submit" value="Edit" class="btn btn-outline-info" id=""><br>   
    <a href="prodi.php">Back</a> 
    </div>
</form>
</body>
</html>