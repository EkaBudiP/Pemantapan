<?php
include'koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($conn,"DELETE FROM mhs where id='$id'");

header('location:maha.php');
?>