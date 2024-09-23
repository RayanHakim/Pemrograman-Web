<?php 
    session_start();
    include "si-koneksi.php";
    $nama = $_POST["nama"];
    $nik = $_POST["nik"];
    $alamat = $_POST["alamat"];
    $agama = $_POST["agama"];
    $pekerjaan = $_POST["pekerjaan"];
    $kewarganegaraan = $_POST["kewarganegaraan"];
    $jenisl = $_POST["jenisl"];
    $akun = $_SESSION['username'];
        
    $query = "insert into data_pengguna values('$nama','$nik','$agama','$alamat','$pekerjaan','$kewarganegaraan','$jenisl','$akun')";
    $hasil = mysqli_query($konek,$query) or die(mysqli_error($konek));

    $query = "UPDATE `pengguna` SET `status` = 'menunggu' WHERE `pengguna`.`username` = '$akun' ";
    $hasil = mysqli_query($konek,$query) or die(mysqli_error($konek));
    $_SESSION['validasi']="menunggu";
    
    header ("location:si-utama.php");







?>