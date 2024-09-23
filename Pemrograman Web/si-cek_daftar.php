<?php 
include "si-koneksi.php"; //username, root, password, nama database 
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($konek,"select * from pengguna where username='$username' ")or die (mysqli_error($konek));
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if (empty($username)||empty($password1)||empty($password2)){header("location:si-daftar.php?pesan=kosong");}
else if($cek > 0){
	header("location:si-daftar.php?pesan=ada");
}else if ($password1!=$password2){
	header("location:si-daftar.php?pesan=passgagal");
}else {
    $query = "insert into pengguna values('$username','$password1','pasien','tidak terdata')";
        $hasil = mysqli_query($konek,$query) or die(mysqli_error($konek));
    header("location:si-login.php?pesan=sukses");
    }  ?>