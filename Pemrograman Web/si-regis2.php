<?php
session_start();
if(empty($_SESSION['username']))
{
    header("location:si-login.php?pesan=belum_login");
}
    include "si-koneksi.php";
    $ruang = $_GET["ruang"];
    $query1 = "SELECT * FROM `antrian` where ruang = '$ruang'; ";
    $hasil1 = mysqli_query($konek,$query1);
    $cek = mysqli_num_rows($hasil1);
    $cek = $cek + 1;
    $tgl = date("Y-m-d");
    $nik = $_SESSION['nik'];
    $query = "INSERT INTO `antrian`  VALUES ('', '$cek', '$ruang', '$tgl', '$nik') ";
    $hasil = mysqli_query($konek,$query);
    header("location:si-utama.php");
   ?>