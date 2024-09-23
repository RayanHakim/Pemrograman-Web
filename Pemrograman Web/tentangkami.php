<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tentang Kami</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">

    <style>
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

        nav.top-bar-wrap {
            background:#48D1CC;
            height: 40px;
            line-height: 40px;
        }

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

        .brand-logo {
            left: -30px;
            padding-left: 70px;
            background:#29ADB2;
            border-right: 2px solid #ffb66c;
            color: white; /* Menambahkan properti warna putih */
        }

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

/*buat ngatur kartu*/
.ag-format-container {
  width: 1142px;
  margin: 0 auto;
}

body {
  background-color:white;
}
.ag-courses_box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;

  padding: 5px 0;
}
.ag-courses_item {
  -ms-flex-preferred-size: calc(33.33333% - 30px);
  flex-basis: calc(33.33333% - 30px);

  margin: 0 15px 30px;

  overflow: hidden;

  border-radius: 28px;
}
.ag-courses-item_link {
  display: block;
  padding: 30px 20px;
  background-color:#363062; /*warna background card*/

  overflow: hidden;

  position: relative;
}
.ag-courses-item_link:hover,
.ag-courses-item_link:hover .ag-courses-item_date {
  text-decoration: none;
  color: #FFF;
}
.ag-courses-item_link:hover .ag-courses-item_bg {
  -webkit-transform: scale(10);
  -ms-transform: scale(10);
  transform: scale(10);
}
.ag-courses-item_title {
  min-height: 87px;
  margin: 0 0 25px;

  overflow: hidden;

  font-weight: bold;
  font-size: 30px;
  color: #FFF;

  z-index: 2;
  position: relative;
}
.ag-courses-item_date-box {
  font-size: 20px;
  color: #FFF;

  z-index: 2;
  position: relative;
}
.ag-courses-item_date {
  font-weight: bold;
  color: #f9b234;

  -webkit-transition: color .5s ease;
  -o-transition: color .5s ease;
  transition: color .5s ease
}
.ag-courses-item_bg {
  height: 128px;
  width: 128px;
  background-color: #f9b234;

  z-index: 1;
  position: absolute;
  top: -75px;
  right: -75px;

  border-radius: 50%;

  -webkit-transition: all .5s ease;
  -o-transition: all .5s ease;
  transition: all .5s ease;
}
.ag-courses_item:nth-child(2n) .ag-courses-item_bg {
  background-color: #3ecd5e;
}
.ag-courses_item:nth-child(3n) .ag-courses-item_bg {
  background-color: #e44002;
}
.ag-courses_item:nth-child(4n) .ag-courses-item_bg {
  background-color: #952aff;
}
.ag-courses_item:nth-child(5n) .ag-courses-item_bg {
  background-color: #cd3e94;
}
.ag-courses_item:nth-child(6n) .ag-courses-item_bg {
  background-color: #4c49ea;
}



@media only screen and (max-width: 979px) {
  .ag-courses_item {
    -ms-flex-preferred-size: calc(50% - 30px);
    flex-basis: calc(50% - 30px);
  }
  .ag-courses-item_title {
    font-size: 24px;
  }
}

@media only screen and (max-width: 767px) {
  .ag-format-container {
    width: 96%;
  }

}
@media only screen and (max-width: 639px) {
  .ag-courses_item {
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
  }
  .ag-courses-item_title {
    min-height: 50px;
    line-height: 1;

    font-size: 24px;
  }
  .ag-courses-item_link {
    padding: 22px 40px;
  }
  .ag-courses-item_date-box {
    font-size: 16px;
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
                            <a href="home.php" class="nav-link"><span class="inner-link">Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="pengumuman.php" class="nav-link"><span class="inner-link">Pengumuman</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="jadwalpelayanan.php" class="nav-link"><span class="inner-link">Jadwal Pelayanan</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="pendaftaranonline.php" class="nav-link "><span class="inner-link">Pendaftaran Online</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active"><span class="inner-link">Tentang Kami</span></a>
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
                </nav>
                <br>
                <h2>TENTANG KAMI</h2>
                <br>
                <p>Kami adalah tim profesional yang terdiri dari dokter, perawat,
                    dan tenaga kesehatan berpengalaman, yang bersatu untuk memberikan layanan kesehatan yang terbaik.
                    Berikut adalah profil tentang kami 
                    <br>
                    <br>
                </p>
                <div class="ag-format-container">
  <div class="ag-courses_box">
    <div class="ag-courses_item">
      <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
            VISI
        </div>

        <div class="ag-courses-item_date-box">
        Menjadi pusat pelayanan kesehatan yang unggul, memberdayakan masyarakat untuk mencapai kesejahteraan optimal melalui pendekatan holistik
        dan inovatif dalam pencegahan, perawatan, dan promosi kesehatan.
        </div>
      </a>
    </div>

    <div class="ag-courses_item">
      <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
          MISI
        </div>

        <div class="ag-courses-item_date-box">
        Menyediakan pelayanan kesehatan yang terjangkau dan berkualitas, mendorong gaya hidup sehat, 
        memberdayakan masyarakat,melakukan pencegahan penyakit,
        </div>
      </a>
    </div>

    <div class="ag-courses_item">
      <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
         MOTO
        </div>

        <div class="ag-courses-item_date-box">        
        Melayani dengan Kasih, Menyembuhkan dengan Komitmen, Membangun Kesehatan Bersama
        </div>
      </a>
    </div>

    <div class="ag-courses_item">
      <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
          DOKTER
        </div>

        <div class="ag-courses-item_date-box">
          4 Orang
        </div>
      </a>
    </div>

    <div class="ag-courses_item">
      <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
          Bidan
        </div>

        <div class="ag-courses-item_date-box">
          10 Orang
        </div>
      </a>
    </div>

    <div class="ag-courses_item">
      <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
        Perawat
        </div>
        <div class="ag-courses-item_date-box">
          25 Orang
        </div>
      </a>
    </div>
  </div>
</div>
                <br> <br> <br>
                <br><br> <br>

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