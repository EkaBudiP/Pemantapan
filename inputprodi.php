<?php
include 'koneksi.php';

$kode_program = $_POST['kode_program'];
$nama_program = $_POST['nama_program'];

$data = mysqli_query($conn,"insert into pro values(null,'$kode_program','$nama_program')");

header('location:prodi.php');

?>