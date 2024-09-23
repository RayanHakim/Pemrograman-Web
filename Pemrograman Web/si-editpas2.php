<?php 

    include "si-koneksi.php";
    $nama = $_POST["nama"];
    $nik = $_POST["nik"];
    $alamat = $_POST["alamat"];
    $agama = $_POST["agama"];
    $pekerjaan = $_POST["pekerjaan"];
    $kewarganegaraan = $_POST["kewarganegaraan"];
    $jenisl = $_POST["jenisl"];
    $akun = $_GET["username"];
        
    $query = "UPDATE `data_pengguna` SET `nama`='$nama',`nik`='$nik',`agama`='$agama',`alamat`='$alamat',`pekerjaan`='$pekerjaan',`kewarganegaraan`='$kewarganegaraan',`jenis-kelamin`='$jenisl' WHERE akun = '$akun';";
    $hasil = mysqli_query($konek,$query) or die(mysqli_error($konek));
    
    header ("location:si-utama.php");







?>