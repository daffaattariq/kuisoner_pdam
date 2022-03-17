-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Agu 2021 pada 10.18
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kuisoner_pdam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
--

CREATE TABLE `jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `Id_pertanyaan` int(11) NOT NULL,
  `jawaban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jawaban`
--

INSERT INTO `jawaban` (`id_jawaban`, `id_login`, `Id_pertanyaan`, `jawaban`) VALUES
(1, 5, 1, 4),
(2, 5, 2, 5),
(3, 5, 3, 5),
(4, 5, 4, 5),
(5, 5, 5, 5),
(6, 5, 6, 5),
(7, 5, 7, 4),
(8, 5, 8, 5),
(9, 5, 9, 4),
(10, 5, 10, 5),
(11, 5, 11, 5),
(12, 5, 12, 5),
(13, 5, 13, 4),
(14, 5, 14, 4),
(15, 5, 15, 5),
(16, 5, 16, 4),
(17, 5, 17, 5),
(18, 5, 18, 5),
(19, 5, 19, 5),
(20, 5, 20, 3),
(21, 5, 21, 3),
(22, 5, 22, 5),
(23, 5, 23, 5),
(24, 5, 24, 5),
(25, 5, 25, 4),
(26, 3, 1, 5),
(27, 3, 2, 5),
(28, 3, 3, 5),
(29, 3, 4, 5),
(30, 3, 5, 5),
(31, 3, 6, 5),
(32, 3, 7, 4),
(33, 3, 8, 5),
(34, 3, 9, 4),
(35, 3, 10, 4),
(36, 3, 11, 4),
(37, 3, 12, 5),
(38, 3, 13, 4),
(39, 3, 14, 5),
(40, 3, 15, 4),
(41, 3, 16, 5),
(42, 3, 17, 4),
(43, 3, 18, 4),
(44, 3, 19, 4),
(45, 3, 20, 4),
(46, 3, 21, 5),
(47, 3, 22, 5),
(48, 3, 23, 4),
(49, 3, 24, 3),
(50, 3, 25, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_pertanyaan`
--

CREATE TABLE `kategori_pertanyaan` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(25) NOT NULL,
  `kode_kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_pertanyaan`
--

INSERT INTO `kategori_pertanyaan` (`id_kategori`, `nama_kategori`, `kode_kategori`) VALUES
(1, 'Performance', 'performance'),
(2, 'Information and Data', 'information'),
(3, 'Economics', 'economics'),
(4, 'Control and Security', 'control'),
(5, 'Efficiency', 'efficiency'),
(6, 'Service', 'service');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kritik_saran`
--

CREATE TABLE `kritik_saran` (
  `id_kritik_saran` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `kritik_saran` varchar(255) NOT NULL,
  `id_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kritik_saran`
--

INSERT INTO `kritik_saran` (`id_kritik_saran`, `id_kategori`, `kritik_saran`, `id_login`) VALUES
(1, 5, 'Kurang dari segi Efficiency', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` mediumtext NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `nama`, `jabatan`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', 2),
(3, 'copet', '130d7630b6a6e9b6cfd30a71e0819fc8', 'copet', 'copet', 1),
(4, 'daffa', '135a4e22cda0e0a68499e6d6e2a861aa', 'daffa', 'daffa', 1),
(6, 'aa', '4124bc0a9335c27f086f24ba207a4912', 'aa', 'aa', 1),
(7, 'qdwwqd', '202cb962ac59075b964b07152d234b70', 'saddsa', 'dsasda', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL,
  `pertanyaan` longtext NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pertanyaan`
--

INSERT INTO `pertanyaan` (`id_pertanyaan`, `pertanyaan`, `id_kategori`) VALUES
(1, 'Sistem informasi Work Order Android sangat mudah diakses oleh penggunanya', 1),
(2, 'Sistem informasi Work Order Android dapat mengoperasikan sejumlah perintah dalam waktu yang relatif singkat, tanpa mengalami hambatan', 1),
(3, 'Sistem Informasi Work Order Android dalam merespon suatu perintah pembatalan maupun permintaan terhadap suatu transaksi dilakukan dengan cepat', 1),
(4, 'Jumlah data yang dapat diproses sistem informasi Work Order Android pada satuan waktu sudah sesuai dengan yang diharapkan', 1),
(5, 'Pada saat sistem informasi Work Order Android digunakan secara bersamaan, kinerja sistem informasi tetap berjalan stabil', 1),
(6, 'Total waktu yang dibutuhkan dalam melakukan pengolahan data hingga menghasilkan informasi sudah dilakukan dengan cepat', 1),
(7, 'Data yang disimpan oleh sistem informasi Work Order Android sudah tersimpan sesuai dengan yang dimasukkan ke dalam sistem', 2),
(8, 'Sistem informasi Work Order Android tidak dapat menyimpan data yang bukan seharusnya', 2),
(9, 'Data yang mengandung kesalahan atau data yang tidak benar tidak dapat disimpan oleh sistem informasi Work Order Android', 2),
(10, 'Sistem informasi Work Order Android tidak dapat menyimpan data yang sama sehingga tidak menimbulkan duplikasi atau redudansi data', 2),
(11, 'Data yang diolah oleh sistem informasi Work Order Android sudah tersimpan ke dalam satu media penyimpanan', 2),
(12, 'Biaya yang dikeluarkan oleh Work Order Android menjadi lebih ringan dengan adanya sistem informasi Work Order Android dibandingkan dengan menggunakan cara konvensional.', 3),
(13, 'Pada saat pembangunan dan penerapan sistem informasi Work Order Android, biaya yang dikeluarkan perusahaan cukup tinggi.', 3),
(14, 'Ada perubahan yang signifikan dalam hal perkembangan dan pertumbuhan dengan adanya sistem informasi Work Order Android', 3),
(15, 'Bentuk pengamanan yang terdapat pada sistem informasi Work Order Android sudah dapat menjaga data atau informasi dari berbagai bentuk kecurangan atau kejahatan.', 4),
(16, 'Sistem pengamanan pada sistem informasi sudah baik.', 4),
(17, 'Manajemen dalam memberikan otorisasi dan menentukan pengendalian akses terhadap penggunaan dan pengoperasian sistem sudah jelas.', 4),
(18, 'Media penyimpanan aman dari perusakan dan kecelakaan.', 4),
(19, 'Media penyimpanan dapat mengorganisasikan data dengan baik', 4),
(20, 'Sistem yang digunakan sekarang lebih meringankan pengguna baik dari segi biaya dan waktu', 5),
(21, 'Dalam mengoperasikan sistem pada kegiatan/aktivitas Work Order Android sehari-hari, sistem dapat menghasilkan output yang sesuai dengan waktu dan material yang minimal', 5),
(22, 'Sistem informasi Work Order Android mudah digunakan', 6),
(23, 'Sistem informasi Work Order Android fleksibel jika digunakan untuk situasi yang baru', 6),
(24, 'Sistem informasi Work Order Android dapat dirubah secara fleksibel', 6),
(25, 'Sistem informasi Work Order Android dapat memberikan kepuasan anda sebagai pengguna yang membutuhkan informasi', 6);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indeks untuk tabel `kategori_pertanyaan`
--
ALTER TABLE `kategori_pertanyaan`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `kritik_saran`
--
ALTER TABLE `kritik_saran`
  ADD PRIMARY KEY (`id_kritik_saran`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `kategori_pertanyaan`
--
ALTER TABLE `kategori_pertanyaan`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kritik_saran`
--
ALTER TABLE `kritik_saran`
  MODIFY `id_kritik_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
