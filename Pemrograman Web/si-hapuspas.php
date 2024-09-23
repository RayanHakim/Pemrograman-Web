<?php 
include "si-koneksi.php";

$akun = $_GET["username"];
$query = mysqli_query($konek,"delete from data_pengguna where akun = '$akun'; ");

header("location:si-semuapasien.php");



?>