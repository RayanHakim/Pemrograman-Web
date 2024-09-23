<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jadwal Pelayanan</title>
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
/*buat mengatur tabelnya*/
.bg-light-gray {
    background-color: #f7f7f7;
}
.table-bordered thead td, .table-bordered thead th {
    border-bottom-width: 2px;
}
.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
}
.table-bordered td, .table-bordered th {
    border: 1px solid #dee2e6;
}


.bg-sky.box-shadow {
    box-shadow: 0px 5px 0px 0px #00a2a7
}

.bg-orange.box-shadow {
    box-shadow: 0px 5px 0px 0px #af4305
}

.bg-green.box-shadow {
    box-shadow: 0px 5px 0px 0px #4ca520
}

.bg-yellow.box-shadow {
    box-shadow: 0px 5px 0px 0px #dcbf02
}

.bg-pink.box-shadow {
    box-shadow: 0px 5px 0px 0px #e82d8b
}

.bg-purple.box-shadow {
    box-shadow: 0px 5px 0px 0px #8343e8
}

.bg-lightred.box-shadow {
    box-shadow: 0px 5px 0px 0px #d84213
}


.bg-sky {
    background-color: #02c2c7
}

.bg-orange {
    background-color: #e95601
}

.bg-green {
    background-color: #5bbd2a
}

.bg-yellow {
    background-color: #f0d001
}

.bg-pink {
    background-color: #ff48a4
}

.bg-purple {
    background-color: #9d60ff
}

.bg-lightred {
    background-color: #ff5722
}

.padding-15px-lr {
    padding-left: 15px;
    padding-right: 15px;
}
.padding-5px-tb {
    padding-top: 5px;
    padding-bottom: 5px;
}
.margin-10px-bottom {
    margin-bottom: 10px;
}
.border-radius-5 {
    border-radius: 5px;
}

.margin-10px-top {
    margin-top: 10px;
}
.font-size14 {
    font-size: 14px;
}

.text-light-gray {
    color: #d6d5d5;
}
.font-size13 {
    font-size: 13px;
}

.table-bordered td, .table-bordered th {
    border: 1px solid #dee2e6;
}
.table td, .table th {
    padding: .75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
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
                            <a href="#" class="nav-link active"><span class="inner-link">Jadwal Pelayanan</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="pendaftaranonline.php" class="nav-link"><span class="inner-link">Pendaftaran Online</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="tentangkami.php" class="nav-link"><span class="inner-link">Tentang Kami</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="tentangkami.php" class="nav-link"><span class="inner-link">Hubungi Kami</span></a>
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
                <h2>JADWAL PELAYANAN</h2>
                <br>
                <p>Berikut merupakan jadwal pelayanan puskesmas tambakbayan.
                    Jangan lupa selalu cek jadwalnya ya,jangan sampai salah!
                    <br>
                    <br>
                </p>
                <div class="container">
                <div class="timetable-img text-center">
                    <img src="img/content/timetable.png" alt="">
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr class="bg-light-gray">
                                <th class="text-uppercase">Waktu
                                </th>
                                <th class="text-uppercase">Senin</th>
                                <th class="text-uppercase">Selasa</th>
                                <th class="text-uppercase">Rabu</th>
                                <th class="text-uppercase">Kamis</th>
                                <th class="text-uppercase">Jumat</th>
                                <th class="text-uppercase">Sabtu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">07:00</td>
                                <td>
                                    <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">Imunisasi</span>
                                    <div class="margin-10px-top font-size14">7:00-10:00</div>
                                    <div class="font-size13 text-light-black">Dr.Agus</div>
                                </td>
                                <td>
                                    <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Imunisasi</span>
                                    <div class="margin-10px-top font-size14">7:00-10:00</div>
                                    <div class="font-size13 text-light-black">Dr.Agus</div>
                                </td>

                                <td>
                                    <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Imunisasi</span>
                                    <div class="margin-10px-top font-size14">7:00-10:00</div>
                                    <div class="font-size13 text-light-black">Dr.Agus</div>
                                </td>
                                <td>
                                    <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Imunisasi</span>
                                    <div class="margin-10px-top font-size14">7:00-10:00</div>
                                    <div class="font-size13 text-light-black">Dr.Agus</div>
                                </td>
                                <td>
                                    <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Imunisasi</span>
                                    <div class="margin-10px-top font-size14">7:00-10:00</div>
                                    <div class="font-size13 text-light-black">Dr.Agus</div>
                                </td>
                                <td>
                                    <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Imunisasi</span>
                                    <div class="margin-10px-top font-size14">7:00-10:00</div>
                                    <div class="font-size13 text-light-black">Dr.Agus</div>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle">10:00</td>
                                <td>
                                    <span class="bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Umum</span>
                                    <div class="margin-10px-top font-size14">10:00-12:00</div>
                                    <div class="font-size13 text-light-black">Dr.Bambang</div>
                                </td>
                                <td class="bg-light-gray">

                                </td>
                                <td>
                                    <span class="bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Umum</span>
                                    <div class="margin-10px-top font-size14">10:00-12:00</div>
                                    <div class="font-size13 text-light-black">Dr.Bambang</div>
                                </td>
                                <td>
                                    <span class="bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Umum</span>
                                    <div class="margin-10px-top font-size14">10:00-12:00</div>
                                    <div class="font-size13 text-light-black">Dr.Bambang</div>
                                </td>
                                <td>
                                    <span class="bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Umum</span>
                                    <div class="margin-10px-top font-size14">10:00-12:00</div>
                                    <div class="font-size13 text-light-black">Dr.Bambang</div>
                                </td>
                                <td class="bg-light-black">

                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle">12:00</td>
                                <td>
                                    <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Istirahat</span>
                                    <div class="margin-10px-top font-size14">12:00-14:00</div>
                                </td>
                                <td>
                                    <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Istirahat</span>
                                    <div class="margin-10px-top font-size14">12:00-14:00</div>
                                </td>
                                <td>
                                    <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Istirahat</span>
                                    <div class="margin-10px-top font-size14">12:00-14:00</div>
                                </td>
                                <td>
                                    <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Istirahat</span>
                                    <div class="margin-10px-top font-size14">12:00-14:00</div>
                                </td>
                                <td>
                                    <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Istirahat</span>
                                    <div class="margin-10px-top font-size14">12:00-14:00</div>
                                </td>
                                <td>
                                    <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Istirahat</span>
                                    <div class="margin-10px-top font-size14">12:00-14:00</div>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle">14:00</td>
                                <td class="bg-light-black">

                                </td>
                                <td>
                                    <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Anak</span>
                                    <div class="margin-10px-top font-size14">14:00-16:00</div>
                                    <div class="font-size13 text-light-black">Dr.Gunawan</div>
                                </td>
                                <td>
                                    <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Anak</span>
                                    <div class="margin-10px-top font-size14">14:00-16:00</div>
                                    <div class="font-size13 text-light-black">Dr.Guanawan</div>
                                </td>
                                <td>
                                    <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Anak</span>
                                    <div class="margin-10px-top font-size14">14:00-16:00</div>
                                    <div class="font-size13 text-light-black">Dr.Gunawan</div>
                                </td>
                                <td class="bg-light-black">

                                </td>
                                <td>
                                    <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Anak</span>
                                    <div class="margin-10px-top font-size14">14:00-16:00</div>
                                    <div class="font-size13 text-light-black">Dr.Gunawan</div>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle">16.00</td>
                                <td>
                                    <span class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Gigi</span>
                                    <div class="margin-10px-top font-size14">16.00-18.00</div>
                                    <div class="font-size13 text-light-black">Dr.Budi</div>
                                </td>
                                <td>
                                    <span class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Gigi</span>
                                    <div class="margin-10px-top font-size14">16:00-18.00</div>
                                    <div class="font-size13 text-light-black">Dr.Budi</div>
                                </td>
                                <td class="bg-light-black">

                                </td>
                                <td>
                                    <span class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Gigi</span>
                                    <div class="margin-10px-top font-size14">16:00-18:00</div>
                                    <div class="font-size13 text-light-black">Dr.Budi</div>
                                </td>
                                <td>
                                    <span class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Gigi</span>
                                    <div class="margin-10px-top font-size14">16:00-18:00</div>
                                    <div class="font-size13 text-light-black">Dr.Budi</div>
                                </td>
                                <td>
                                    <span class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Gigi</span>
                                    <div class="margin-10px-top font-size14">16:00-18:00</div>
                                    <div class="font-size13 text-light-black">Dr.Budi</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

                <br> <br> <br>
                <br><br><br>

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