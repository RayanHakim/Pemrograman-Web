<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">

    <style>
        /*buat navbar*/
        * {
            margin-left: auto;
            margin-right: auto;
        }

        .top-bar .nav-item {
            display: inline-block;
        }
        nav {
            padding: 0px;
        }
         /*navbar atas*/
        nav.top-bar-wrap {
            background:#48D1CC;
            height: 40px;
            line-height: 40px;
        }
       /*navbar bawah*/
        nav.main-nav-wrap {
            background:#0766AD;
            font-size: 1.25rem;
            height: 80px;
            line-height: 80px;
        }

        nav.top-bar-wrap ul,
        nav.main-nav-wrap ul {
            margin-bottom: 0px;
            margin-top: 0px;
        }

        a.nav-link:hover {
            background: rgba(0, 0, 0, 0.2);
            color: #fff;
            border-left: 12px solid rgba(0, 0, 0, 0.3);
        }

        a.nav-link {
            border-left: 12px solid transparent;
            border-right: 12px solid transparent;
            color: #f9f9f9;
            text-transform: uppercase;
            font-family: 'Rubik', sans-serif;
            transform: skew(-25deg);
            transition: all 400ms ease-out;
            padding: 0px;
        }

        .inner-link {
            display: inline-block;
            transform: skew(25deg);
        }

        .top-bar-wrap a {
            padding-left: 12px;
        }

        .main-nav-wrap a {
            padding-left: 18px;
        }

        .brand-logo img {
            height: 40px;
            transform: skew(25deg);
        }

        .brand-phone a {
            display: block;
            font-size: 1.25em;
            text-decoration: none;
            color: #000000;
            letter-spacing: 2px;
            height: 40px;
            line-height: 1.5em;
            transform: skew(25deg);
        }

        .brand-phone,
        .brand-logo {
            padding: 40px;
            position: absolute;
            top: 0;
            height: 120px;
            transform: skewX(-25deg);
        }
         /*navbar kiri*/
        .brand-logo {
            left: -30px;
            padding-left: 70px;
            background:#29ADB2;
            border-right: 2px solid #ffb66c;
            color: white; /* Menambahkan properti warna putih */
        }
        /*navbar kanan*/
        .brand-phone {
            right: 0;
            right: -30px;
            padding-right: 70px;
            background:#29ADB2;
            border-left: 3px solid #6c4013;
            color: white; /* Menambahkan properti warna putih */
        }
        h1 {
    color: white !important;
}

a.nav-link.active{
    background:orange; /* Warna latar belakang yang diinginkan saat hover pada menu aktif */;
    color:white; /* Warna teks yang diinginkan saat hover pada menu aktif */;
}
/*huruf*/
h2 {
    color:#0766AD; /* Warna teks untuk selaras dengan warna navigasi */
    font-size:60px;; /* Ukuran font */
   
}
h3 {
    color:white; /* Warna teks untuk selaras dengan warna navigasi */
    font-size:25px; /* Ukuran font */
   
}
p {
    color:black; /* Warna teks untuk selaras dengan warna navigasi */
    font-size:30px;; /* Ukuran font */
   
}
import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  display: flex;
  background:white;
  justify-content: flex-end;
  align-items: flex-end;
  min-height: 100vh;
}
/*untuk footer dan gelombang*/
.footer {
  position: relative;
  width: 100%;
  background: #3586ff;
  min-height: 100px;
  padding: 20px 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.footer p {
  color: #fff;
  margin: 15px 0 10px 0;
  font-size: 1rem;
  font-weight: 300;
}

.wave {
  position: absolute;
  top: -100px;
  left: 0;
  width: 100%;
  height: 100px;
  background: url("https://i.ibb.co/wQZVxxk/wave.png");
  background-size: 1000px 100px;
}

.wave#wave1 {
  z-index: 1000;
  opacity: 1;
  bottom: 0;
  animation: animateWaves 4s linear infinite;
}

.wave#wave2 {
  z-index: 999;
  opacity: 0.5;
  bottom: 10px;
  animation: animate 4s linear infinite !important;
}

.wave#wave3 {
  z-index: 1000;
  opacity: 0.2;
  bottom: 15px;
  animation: animateWaves 3s linear infinite;
}

.wave#wave4 {
  z-index: 999;
  opacity: 0.7;
  bottom: 20px;
  animation: animate 3s linear infinite;
}

@keyframes animateWaves {
  0% {
    background-position-x: 1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}

@keyframes animate {
  0% {
    background-position-x: -1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}
    </style>
</head>
<body>
    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <div role="navigation">
        <div class="">
            <div class="brand-logo">
                <a href=""><img src="logopuskesmas.jpeg" alt="Logo"></a>
            </div>
            <div class="brand-phone">
                <a href="#"><i class="fa fa-phone me-3"></i>123-456-789</a>
            </div>
            <div class="text-center">
                <nav class="top-bar-wrap">
                    <ul class="top-bar">
                        <li class="nav-item">
                            <a href="#" class="nav-link active"><span class="inner-link">Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="pengumuman.php" class="nav-link"><span class="inner-link">Pengumuman</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="jadwalpelayanan.php" class="nav-link"><span class="inner-link">Jadwal Pelayanan</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="pendaftaranonline.php" class="nav-link"><span class="inner-link">Pendaftaran Online</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="tentangkami.php" class="nav-link"><span class="inner-link">Tentang Kami</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="hubungikami.php" class="nav-link"><span class="inner-link">Hubungi Kami</span></a>
                        </li>
                    </ul>
                </nav>
                <nav class="main-nav-wrap">
                    <ul class="main-nav">
                        <h1>PUSKESMAS TAMBAKBAYAN</h1>
                    </ul>
                    <br>
                    <h2>SELAMAT DATANG</h2>
                <h2>DI WEBSITE</H2>
                <h2>PUSKESMAS TAMBAKBAYAN</H2>
                    <a href=""><img src="gambarhome.jpeg" alt="home"></a>
                </nav>

                <br><br><br> <br><br> <br><br><br> <br><br><br><br><br><br<br><br>
                <br><br><br><br> <br> <br><br> <br><br><br><br><br><br> <br> <br>
                <br> <br><br><br><br><br><br><br><br><br><br><br><br>

                <p>Kami hadir untuk memberikan pelayanan kesehatan terbaik bagi masyarakat.
                    Sebuah pusat layanan kesehatan yang peduli dan siap menyambut setiap kebutuhan Anda
                    Puskesmas Tambakbayan berkomitmen untuk memberikan layanan kesehatan yang berkualitas, komprehensif, dan ramah. Dengan tim profesional yang berdedikasi.
                    Kami hadir untuk mendukung kesehatan dan kesejahteraan Anda.Di halaman ini, Anda dapat mengakses informasi terkini seputar pengumuman, jadwal pelayanan, dan layanan pendaftaran online.
                    Kami selalu berusaha memberikan kemudahan akses dan pelayanan terbaik untuk kebutuhan Anda.
                </p>
                <br><br> <br><br><br>

    <footer class="footer">

    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>

    <br>

    <h3>@2023 Puskesmas Tambakbayan </h3>

  </footer>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
            </div>
        </div>
    </div>
</body>
</html>