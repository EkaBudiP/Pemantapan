<?php
include 'koneksi.php';

$nama_mahasiswa = $_POST['nama_mahasiswa'];
$npm = $_POST['npm'];
$email = $_POST['email'];
$usia = $_POST['usia'];
$programstudi = $_POST['programstudi'];


$data = mysqli_query($conn,"insert into mhs values(null,'$nama_mahasiswa','$npm','$email','$usia','$programstudi')");

header('location:maha.php');

?>