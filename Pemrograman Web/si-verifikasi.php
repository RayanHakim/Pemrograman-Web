<?php 
include "si-koneksi.php";

$akun = $_GET["username"];
$query = mysqli_query($konek,"UPDATE `pengguna` SET `status` = 'terverifikasi' WHERE `pengguna`.`username` = '$akun' ");

header("location:si-datapasien.php");



?>