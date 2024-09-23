<?php
   session_start();
   $akun = $_GET["username"];
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
    <title>Edit data</title>
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<nav class="navbar fixed-top navbar-dark" style="background-color: #0766ad;">
  <div class="container-fluid">
    <a class="navbar-brand">Edit Data</a>
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
<form action="si-editpas2.php?username=<?= $akun; ?>" method="POST">
    <div class="container-sm">
<div class="mb-3 row">
    <label class="col-md-2 col-form-label">Nama</label>
    <div class="col-md-6">
      <input type="text" class="form-control" name="nama">
    </div>
  </div>
  <div class="mb-3 row">
    <label class="col-md-2 col-form-label">NIK</label>
    <div class="col-md-6">
      <input type="text" class="form-control" name="nik">
    </div>
  </div>
  <div class="mb-3 row">
    <label class="col-md-2 col-form-label">Alamat</label>
    <div class="col-md-6">
      <textarea type="text" class="form-control" name="alamat" rows="3"></textarea>
    </div>
  </div>
  <div class="mb-3 row">
    <label class="col-md-2 col-form-label">Agama</label>
    <div class="col-md-6">
      <input type="text" class="form-control" name="agama">
    </div>
  </div>
  <div class="mb-3 row">
    <label class="col-md-2 col-form-label">Pekerjaan</label>
    <div class="col-md-6">
      <input type="text" class="form-control" name="pekerjaan">
    </div>
  </div>
  <div class="mb-3 row">
    <label class="col-md-2 col-form-label">Kewarganegaraan</label>
    <div class="col-md-6">
      <input type="text" class="form-control" name="kewarganegaraan">
    </div>
  </div>
  <div class="mb-3 row">
    <label class="col-md-2 col-form-label">Jenis Kelamin</label>
    <div class="col-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenisl" value="l" />
                    <label class="form-check-label"> Laki-laki </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenisl" value="p" checked />
                    <label class="form-check-label"> Perempuan </label>
                </div>
            </div>
  </div>
  <div class="mb-3 row">
    <label class="col-md-2 col-form-label"></label>
    <div class="col-md-4 d-grid">
    <button type="submit" name="submit" class="btn btn-primary">Edit</button>
          </div>
          </div>
  </div>
</form>


</body>
</html>