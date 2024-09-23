<?php 
   session_start(); 
// menghubungkan dengan koneksi
include "si-koneksi.php"; //username, root, password, nama database 
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($konek,"select * from pengguna where username='$username' and password='$password'")or die (mysqli_error($konek));
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek == 1){
	$hasil1 = [];
	while($row = mysqli_fetch_array($data)){
        $hasil[] = $row;
    }
	foreach($hasil as $row) {
		$_SESSION['role']=$row["role"];
		$_SESSION['validasi']=$row["status"];
	}
	$_SESSION['username'] = $username;
	$_SESSION['statuslog']   = "login";

	header("location:si-utama.php");
}else{
	header("location:si-login.php?pesan=gagal");
} ?>