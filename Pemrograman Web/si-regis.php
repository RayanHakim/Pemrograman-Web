<?php
   session_start();
   if(empty($_SESSION['username']))
{
    header("location:si-login.php?pesan=belum_login");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<nav class="navbar fixed-top navbar-dark" style="background-color: #0766ad;">
  <div class="container-fluid">
    <a class="navbar-brand" href="si-regis.php">Registrasi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="background-color: #0766ad;">
      <div class="offcanvas-header">
        <button type="button" class="btn-close btn btn-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="si-utama.php">Dashboard</a>
          </li>
         <?php if($_SESSION['role']=="pasien"){
            ?>
        

          <li class="nav-item">
            <a class="nav-link" href="si-profil.php">Profil Lengkap</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="si-regis.php">Registrasi Online</a>
          </li>
          <?php } else {?>
            <li class="nav-item">
            <a class="nav-link" href="si-profil.php">Profil Lengkap</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="si-regis.php">Registrasi Online</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="si-antrian.php">kelola Antrian</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="si-datapasien.php">Verifikasi Data Pasien</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="si-semuapasien.php">Data Seluruh pasien</a>
          </li>
          
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link" href="si-logout.php">Keluar</a>
          </li>
      </div>
    </div>
  </div>
</nav>
<br><br><br>

<?php 
include "si-koneksi.php";
$nik = $_SESSION['nik'];
$query = "SELECT * FROM `antrian` where pengantri = '$nik' ; ";
$hasil = mysqli_query($konek,$query);
$cek = mysqli_num_rows($hasil);
if($cek>0){ ?>
<div class="container-sm">
<div class="col-md-5 p-4">
<p>Anda sedang mengantri, Registrasi Tidak dapat dilakukan</p> 
</div>
</div>
<?php
}else {
?>


<div class="container-sm">
<div class="col-md-5 p-4">
<table class="table border table-borderless">
 <thead class="table-light"> 
<tr>
<th>Pilih Layanan</th>
<th></th>

</tr>

 </thead>
<tbody>

<tr>
<td> Poli umum</td>
<td><a class="btn btn-primary" href="si-regis2.php?ruang=poli_umum">Pilih</a></td>

</tr>

<tr>
<td>Imunisasi</td>
<td><a class="btn btn-primary" href="si-regis2.php?ruang=imunisasi">Pilih</a></td>

</tr>

<tr>
<td>Poli Anak</td>
<td><a class="btn btn-primary" href="si-regis2.php?ruang=poli_anak">Pilih</a></td>

</tr>

<tr>
<td>Poli gigi</td>
<td><a class="btn btn-primary" href="si-regis2.php?ruang=poli_gigi">Pilih</a></td>

</tr>


</tbody>


</table>
    </div>
    </div>
<?php }?>



</body>
</html>