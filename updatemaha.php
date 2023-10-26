<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$npm = $_POST['npm'];
$email = $_POST['email'];
$usia = $_POST['usia'];
$programstudi = $_POST['programstudi'];


$data = mysqli_query($conn,"UPDATE mhs SET nama_mahasiswa='$nama_mahasiswa',npm='$npm',email='$email',usia='$usia',programstudi='$programstudi' WHERE id = '$id'");

header('location:maha.php');

?>