<?php
include 'koneksi.php';
$id = $_POST['id'];
$kode_program = $_POST['kode_program'];
$nama_program = $_POST['nama_program'];

$data = mysqli_query($conn,"UPDATE pro SET kode_program='$kode_program',nama_program='$nama_program' WHERE id = '$id'");

header('location:prodi.php');

?>