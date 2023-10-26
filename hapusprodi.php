<?php
include'koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($conn,"DELETE FROM pro where id='$id'");

header('location:prodi.php');
?>