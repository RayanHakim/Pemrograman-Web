-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2023 pada 06.31
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_projekakhir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian`
--

CREATE TABLE `antrian` (
  `kode_antri` int(11) NOT NULL,
  `no_antri` int(11) NOT NULL,
  `ruang` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `pengantri` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `antrian`
--

INSERT INTO `antrian` (`kode_antri`, `no_antri`, `ruang`, `tanggal`, `pengantri`) VALUES
(4, 1, 'imunisasi', '2023-12-01', '345976482307'),
(5, 1, 'poli_gigi', '2023-12-01', '34040115765433212');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pengguna`
--

CREATE TABLE `data_pengguna` (
  `nama` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `kewarganegaraan` varchar(30) NOT NULL,
  `jenis-kelamin` varchar(1) NOT NULL,
  `akun` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pengguna`
--

INSERT INTO `data_pengguna` (`nama`, `nik`, `agama`, `alamat`, `pekerjaan`, `kewarganegaraan`, `jenis-kelamin`, `akun`) VALUES
('sukirman Wijaya', '34040115765433212', 'islam', 'jalan semangka no.5, dusun kaliabu, RT 03, RW 09, Kel.MustikaJaya, Kec.MustikaJaya, Kota bekasi, Jawa Barat', 'Pelajar/Mahasiswa', 'WNI', 'l', 'aku'),
('Ridwan Kamal', '34040223456752134', 'Budha', 'jalan kaliurang KM.14, depan Semesta Jaya Computer, Kecamatan Depok, Kabupaten Sleman, D.I. Yogyakarta', 'Petani', 'WNA', 'l', 'jaga'),
('Bahren', '3404513276584439', 'Hindu', 'Jalan jeruk, Blok A no.99, perum. Permatasari, Kelurahan Mustikasari, Kecamatan Mustikajaya, Kota Bekasi, Jawa Barat', 'Pengacara', 'WNI', 'p', 'saya'),
('Abdan', '3404765321643002', 'Islam', 'jalan yang engkau ridhoi', 'Kuli', 'WNI', 'l', 'abdan'),
('kurnia suki', '345976482307', 'Katholik', 'Jalan Merdeka raya no.35, perumahan Bantargebang, Kecamatan Bantargebang, kabupaten Bekasi, Jawa Barat', 'Pengacara', 'WNA', 'l', 'dia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`username`, `password`, `role`, `status`) VALUES
('abdan', 'keren', 'pasien', 'terverifikasi'),
('aku', 'ganteng', 'admin', 'terverifikasi'),
('dia', 'sehat', 'pasien', 'terverifikasi'),
('jaga', 'kuda', 'pasien', 'terverifikasi'),
('saya', 'bau', 'pasien', 'terverifikasi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`kode_antri`),
  ADD KEY `fk-pengantri` (`pengantri`);

--
-- Indeks untuk tabel `data_pengguna`
--
ALTER TABLE `data_pengguna`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `data_pengguna_ibfk_1` (`akun`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `antrian`
--
ALTER TABLE `antrian`
  MODIFY `kode_antri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `antrian`
--
ALTER TABLE `antrian`
  ADD CONSTRAINT `fk-pengantri` FOREIGN KEY (`pengantri`) REFERENCES `data_pengguna` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_pengguna`
--
ALTER TABLE `data_pengguna`
  ADD CONSTRAINT `data_pengguna_ibfk_1` FOREIGN KEY (`akun`) REFERENCES `pengguna` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
