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
    <title>Dashboard Puskesmas</title>
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<nav class="navbar fixed-top navbar-dark" style="background-color: #0766ad;">
  <div class="container-fluid">
    <a class="navbar-brand" href="si-utama.php">Dashboard</a>
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

        <?php 
        if($_SESSION['validasi']!="terverifikasi"){
            if ($_SESSION['validasi']=="tidak terdata"){
                $halo = "Anda belum melengkapi data anda, harap mengisi data anda agar dapat melakukan registrasi online Puskesmas<br>";
               
            } else if ($_SESSION['validasi']=="menunggu"){
                $halo = "Menunggu data diverifikasi. Data anda akan diverifikasi dalam waktu 1-2 hari.";

            }

        }else { 
            if($_SESSION['role']=="pasien"){
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
            <a class="nav-link" href="si-semuapasien.php">Data Seluruh Pasien</a>
          </li>
         
          <?php }} ?>
          <li class="nav-item">
            <a class="nav-link" href="si-logout.php">Keluar</a>
          </li>
      </div>
    </div>
  </div>
</nav>
<br><br><br>
<?php
if($_SESSION['validasi']!="terverifikasi"){
?>       
<div class="container-sm">
<p><?= $halo ?></p>


<?php
if ($_SESSION['validasi']=="tidak terdata"){ ?>
<a class="btn btn-primary" href="si-isidata.php">Isi Data</a>
</div>
<?php
}else {
?>
</div> 
<?php echo "";}

}else{
    include "si-koneksi.php";
    $akun = $_SESSION['username'];
    $query = "SELECT * FROM `data_pengguna` WHERE data_pengguna.akun = '$akun'; ";
    
    $hasil = mysqli_query($konek,$query);
    $data = [];

    while($row = mysqli_fetch_array($hasil)){
        $data[] = $row;

    }
   ?>

<div class="container-sm">
<div class="row">
<div class="col-md-6 p-4">
<table class="table border table-borderless">
 <thead class="table-light"> 
<tr>
<th>Profil</th>
<th></th>
<th></th>
</tr>

 </thead>
<tbody>
<?php 
    foreach($data as $row) { 
        $_SESSION['nik'] = $row["nik"];
        ?>
<tr>
<td>nama</td>
<td><?= $row["nama"] ?></td>
<td></td>
</tr>

<tr>
<td>Pekerjaan</td>
<td><?= $row["pekerjaan"] ?></td>
<td></td>
</tr>

<tr>
<td>Kewarganegaraan</td>
<td><?= $row["kewarganegaraan"] ?></td>
<td></td>
</tr>

<?php } 
$nik = $_SESSION['nik'];
$query1 = "SELECT * FROM antrian WHERE pengantri = '$nik'; ";
$hasil1 = mysqli_query($konek,$query1);
$cek = mysqli_num_rows($hasil1);
    $data1 = [];

    while($rowi = mysqli_fetch_array($hasil1)){
        $data1[] = $rowi;

    }



?>

</tbody>


</table>
    </div>

    <div class="col-sm-5 p-4">
<table class="table border table-borderless">
 <thead class="table-light"> 
<tr>
<th>Antrian</th>
<th></th>
<th></th>
</tr>

 </thead>

<tbody>
<?php if ($cek>0){

foreach($hasil1 as $rowi){

    

?>




<td>Kode Antrian</td>
<td><?= $rowi["kode_antri"] ?></td>
<td></td>
</tr>

<tr>
<td>No Antrian</td>
<td><?= $rowi["no_antri"] ?></td>
<td></td>
</tr>

<tr>
<td>Ruang</td>
<td><?= $rowi["ruang"] ?></td>
<td></td>
</tr>

<tr>
<td>tanggal</td>
<td><?= $rowi["tanggal"] ?></td>
<td></td>
</tr>

<?php }}else {
$tulisan = "Sedang tidak dalam antrian"
?>
<tr>
<td><?= $tulisan ?></td>
<td></td>
<td></td>
</tr>
<?php }}?>
</tbody>


</table>
    </div>
    </div>
    </div>


</body>
</html>