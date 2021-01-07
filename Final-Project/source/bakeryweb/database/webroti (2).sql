-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jan 2021 pada 17.43
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webroti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Potong tabel sebelum dimasukkan `admin`
--

TRUNCATE TABLE `admin`;
--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `password`) VALUES
(1, 'ADMIN', 'ADMINPRODUKSI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `babelan`
--

CREATE TABLE `babelan` (
  `id` int(11) NOT NULL,
  `id_karyawan` varchar(200) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `roti` varchar(200) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Potong tabel sebelum dimasukkan `babelan`
--

TRUNCATE TABLE `babelan`;
-- --------------------------------------------------------

--
-- Struktur dari tabel `bantar_gebang`
--

CREATE TABLE `bantar_gebang` (
  `id` int(11) NOT NULL,
  `id_karyawan` varchar(200) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `roti` varchar(200) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Potong tabel sebelum dimasukkan `bantar_gebang`
--

TRUNCATE TABLE `bantar_gebang`;
-- --------------------------------------------------------

--
-- Struktur dari tabel `cibitung`
--

CREATE TABLE `cibitung` (
  `id` int(11) NOT NULL,
  `id_karyawan` varchar(200) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `roti` varchar(200) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Potong tabel sebelum dimasukkan `cibitung`
--

TRUNCATE TABLE `cibitung`;
-- --------------------------------------------------------

--
-- Struktur dari tabel `cikarang`
--

CREATE TABLE `cikarang` (
  `id` int(11) NOT NULL,
  `id_karyawan` varchar(200) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `roti` varchar(200) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Potong tabel sebelum dimasukkan `cikarang`
--

TRUNCATE TABLE `cikarang`;
-- --------------------------------------------------------

--
-- Struktur dari tabel `jajat`
--

CREATE TABLE `jajat` (
  `id` int(11) NOT NULL,
  `id_karyawan` varchar(200) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `roti` varchar(200) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Potong tabel sebelum dimasukkan `jajat`
--

TRUNCATE TABLE `jajat`;
--
-- Dumping data untuk tabel `jajat`
--

INSERT INTO `jajat` (`id`, `id_karyawan`, `jumlah`, `roti`, `tanggal`) VALUES
(1, '7', 12, 'Pisang chips', '2021-01-04'),
(2, '7', 123, 'Coklat', '2021-01-04'),
(3, '7', 12, 'Bolu gulung pandan', '2021-01-05'),
(4, '7', 23, 'Kombinasi coklat keju', '2021-01-05'),
(5, '8', 456, 'Bolu gulung pandan', '2021-01-05'),
(6, '8', 212, 'Coklat', '2021-01-05'),
(7, '8', 34, 'Kombinasi coklat keju', '2021-01-05'),
(8, '9', 23, 'Kombinasi coklat keju', '2021-01-05'),
(9, '9', 12, 'Coklat', '2021-01-05'),
(10, '9', 345, 'Bolu gulung pandan', '2021-01-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenisroti`
--

CREATE TABLE `jenisroti` (
  `id_jenisRoti` int(11) NOT NULL,
  `nama_jenisRoti` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Potong tabel sebelum dimasukkan `jenisroti`
--

TRUNCATE TABLE `jenisroti`;
--
-- Dumping data untuk tabel `jenisroti`
--

INSERT INTO `jenisroti` (`id_jenisRoti`, `nama_jenisRoti`) VALUES
(1, 'Manis'),
(2, 'Donat cup & Banana split'),
(3, 'Bolu, Brownies, Bolen'),
(4, 'Kombinasi'),
(6, 'Tawar tutup'),
(7, 'Tawar tidak tutup');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karawang`
--

CREATE TABLE `karawang` (
  `id` int(11) NOT NULL,
  `roti` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(255) NOT NULL,
  `id_karyawan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Potong tabel sebelum dimasukkan `karawang`
--

TRUNCATE TABLE `karawang`;
--
-- Dumping data untuk tabel `karawang`
--

INSERT INTO `karawang` (`id`, `roti`, `tanggal`, `jumlah`, `id_karyawan`) VALUES
(1, 'Coklat Keju', '2021-01-04', 111, '1'),
(2, '9 rasa', '2021-01-04', 12, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kevin`
--

CREATE TABLE `kevin` (
  `id` int(11) NOT NULL,
  `id_karyawan` varchar(200) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `roti` varchar(200) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Potong tabel sebelum dimasukkan `kevin`
--

TRUNCATE TABLE `kevin`;
-- --------------------------------------------------------

--
-- Struktur dari tabel `namaroti`
--

CREATE TABLE `namaroti` (
  `id_namaroti` int(11) NOT NULL,
  `id_jenisRoti` int(11) NOT NULL,
  `nama_namaRoti` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Potong tabel sebelum dimasukkan `namaroti`
--

TRUNCATE TABLE `namaroti`;
--
-- Dumping data untuk tabel `namaroti`
--

INSERT INTO `namaroti` (`id_namaroti`, `id_jenisRoti`, `nama_namaRoti`) VALUES
(1, 1, 'Coklat'),
(2, 1, 'Srikaya'),
(3, 1, 'Nanas'),
(4, 1, 'Keju'),
(5, 1, 'Keju Susu'),
(6, 1, 'Duren'),
(7, 1, 'Kelapa'),
(8, 1, 'Strawberry'),
(9, 1, 'Blueberry'),
(10, 1, 'Micky Mouse'),
(11, 1, 'Kura-kura'),
(12, 1, 'Coklat Keju'),
(13, 1, 'Buaya'),
(14, 1, 'Panda'),
(15, 1, 'Kacang Merah'),
(16, 1, 'Kacang Ijo'),
(17, 1, 'Pisang Susu'),
(18, 1, 'Pisang chips'),
(19, 1, 'Pisang coklat'),
(20, 1, 'Kacang susu'),
(21, 1, 'Mocca'),
(22, 1, 'Pisang coklat keju'),
(23, 1, 'Coklat susu'),
(24, 1, 'Muffin'),
(25, 1, 'Long cheese'),
(26, 1, 'Long jhon coklat'),
(27, 1, 'Cheese jhon coklat keju'),
(28, 1, 'Donat'),
(29, 1, 'Mexico kopi'),
(30, 1, 'Mexico sri pandan'),
(31, 1, 'Mexico coklat keju'),
(32, 1, 'Badut'),
(33, 1, 'Taro'),
(34, 1, 'Fla keju'),
(35, 1, 'Fla coklat'),
(36, 1, 'Polo keju'),
(37, 1, 'Polo coklat'),
(38, 1, 'Oreo'),
(39, 1, 'Sosis pizza'),
(40, 1, 'Sosis goreng '),
(41, 1, 'Pizza hut'),
(42, 1, 'Sosis fruit'),
(43, 1, 'Susu jadul'),
(44, 1, 'Cake bread'),
(45, 1, 'Sisir'),
(46, 1, '3 rasa'),
(47, 1, 'Manis kosong'),
(48, 2, 'Donut cup'),
(49, 2, 'Banana split'),
(50, 3, 'Bolen'),
(51, 3, 'Bolu gulung pandan'),
(52, 3, 'Bolu gulung coklat'),
(53, 3, 'Bolu gulung putih'),
(54, 3, 'Brownies coklat'),
(55, 3, 'Brownies keju'),
(56, 4, 'Kombinasi coklat'),
(57, 4, 'Kombinasi coklat keju'),
(58, 4, '9 rasa'),
(59, 6, 'Tawar kulit'),
(60, 6, 'Tawar kupas'),
(61, 6, 'Tawar pandan'),
(62, 6, 'Tawar zebra'),
(63, 6, 'Tawar gandum'),
(64, 6, 'Tawar pandan kupas'),
(65, 7, 'Tawar keju'),
(66, 7, 'Tawar coklat chips');

-- --------------------------------------------------------

--
-- Struktur dari tabel `non_mitra`
--

CREATE TABLE `non_mitra` (
  `id` int(11) NOT NULL,
  `id_karyawan` varchar(200) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `roti` varchar(200) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Potong tabel sebelum dimasukkan `non_mitra`
--

TRUNCATE TABLE `non_mitra`;
-- --------------------------------------------------------

--
-- Struktur dari tabel `sarif`
--

CREATE TABLE `sarif` (
  `id` int(11) NOT NULL,
  `id_karyawan` varchar(200) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `roti` varchar(200) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Potong tabel sebelum dimasukkan `sarif`
--

TRUNCATE TABLE `sarif`;
-- --------------------------------------------------------

--
-- Struktur dari tabel `soleh`
--

CREATE TABLE `soleh` (
  `id` int(11) NOT NULL,
  `id_karyawan` varchar(200) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `roti` varchar(200) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Potong tabel sebelum dimasukkan `soleh`
--

TRUNCATE TABLE `soleh`;
-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id_karyawan` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `cabang` enum('Karawang','Jajat','Bantar gebang','Cikarang','Kevin','Soleh','Cibitung','Babelan','Sarif','non-mitra') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Potong tabel sebelum dimasukkan `tb_akun`
--

TRUNCATE TABLE `tb_akun`;
--
-- Dumping data untuk tabel `tb_akun`
--

INSERT INTO `tb_akun` (`id_karyawan`, `nama`, `password`, `cabang`) VALUES
(1, 'joko', 'jokokarawang', 'Karawang'),
(2, 'tirta', 'tirtakarawang', 'Karawang'),
(7, 'cecep', 'cecepjajat', 'Jajat'),
(8, 'manik', 'manikjajat', 'Jajat'),
(9, 'doni', 'donijajat', 'Jajat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_cabang`
--

CREATE TABLE `tb_cabang` (
  `cabang` enum('Karawang','Jajat','Bantar gebang','Cikarang','Kevin','Soleh','Cibitung','Babelan','Sarif','non-mitra') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Potong tabel sebelum dimasukkan `tb_cabang`
--

TRUNCATE TABLE `tb_cabang`;
--
-- Dumping data untuk tabel `tb_cabang`
--

INSERT INTO `tb_cabang` (`cabang`) VALUES
('Karawang'),
('Jajat'),
('Bantar gebang'),
('Cikarang'),
('Kevin'),
('Soleh'),
('Cibitung'),
('Babelan'),
('Sarif'),
('non-mitra');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` int(255) NOT NULL,
  `tanggal` date NOT NULL,
  `cabang` enum('Karawang','Jajat','Bantar gebang','Cikarang','Kevin','Soleh','Cibitung','Babelan','Sarif','non-mitra') NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `total_pemesanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Potong tabel sebelum dimasukkan `tb_pemesanan`
--

TRUNCATE TABLE `tb_pemesanan`;
--
-- Dumping data untuk tabel `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id_pemesanan`, `tanggal`, `cabang`, `id_karyawan`, `total_pemesanan`) VALUES
(109, '2020-12-30', 'Jajat', 7, 35),
(110, '2020-12-30', 'Jajat', 7, 234),
(111, '2020-12-31', 'Jajat', 7, 111),
(112, '2021-01-02', 'Karawang', 1, 146),
(113, '2021-01-02', 'Karawang', 1, 12),
(114, '2021-01-02', 'Karawang', 1, 111),
(115, '2021-01-02', 'Jajat', 7, 234),
(116, '2021-01-02', 'Jajat', 7, 12),
(117, '2021-01-02', 'Karawang', 1, 111),
(118, '2021-01-02', 'Karawang', 1, 40),
(119, '2021-01-02', 'Karawang', 1, 12),
(120, '2021-01-02', 'Karawang', 1, 12),
(121, '2021-01-02', 'Karawang', 1, 12),
(122, '2021-01-02', 'Karawang', 1, 111),
(123, '2021-01-02', 'Karawang', 1, 12),
(124, '2021-01-02', 'Karawang', 1, 111),
(125, '2021-01-03', 'Jajat', 7, 115),
(126, '2021-01-03', 'Jajat', 7, 112),
(127, '2021-01-03', 'Jajat', 7, 12),
(128, '2021-01-03', 'Karawang', 1, 12),
(129, '2021-01-04', 'Karawang', 1, 123),
(130, '2021-01-04', 'Jajat', 7, 12),
(131, '2021-01-04', 'Jajat', 7, 123),
(132, '2021-01-05', 'Jajat', 7, 35),
(133, '2021-01-05', 'Jajat', 8, 702),
(134, '2021-01-05', 'Jajat', 9, 380);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_roti`
--

CREATE TABLE `tb_roti` (
  `id_roti` int(255) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `roti` varchar(200) NOT NULL,
  `jumlah` int(25) NOT NULL,
  `id_pemesanan` int(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Potong tabel sebelum dimasukkan `tb_roti`
--

TRUNCATE TABLE `tb_roti`;
--
-- Dumping data untuk tabel `tb_roti`
--

INSERT INTO `tb_roti` (`id_roti`, `id_karyawan`, `roti`, `jumlah`, `id_pemesanan`, `tanggal`) VALUES
(32, 7, 'Coklat', 12, 109, '2020-12-30'),
(33, 7, 'Keju', 11, 109, '2020-12-30'),
(34, 7, 'Donut cup', 12, 109, '2020-12-30'),
(35, 7, 'Duren', 111, 109, '2020-12-30'),
(36, 7, 'Panda', 111, 109, '2020-12-30'),
(37, 7, 'Bolen', 12, 109, '2020-12-30'),
(38, 7, 'Buaya', 111, 111, '2020-12-31'),
(39, 1, 'Srikaya', 12, 112, '2021-01-02'),
(40, 1, 'Donut cup', 111, 112, '2021-01-02'),
(41, 1, 'Blueberry', 11, 112, '2021-01-02'),
(42, 1, '9 rasa', 12, 112, '2021-01-02'),
(43, 1, 'Nanas', 12, 112, '2021-01-02'),
(44, 1, 'Srikaya', 111, 112, '2021-01-02'),
(45, 7, 'Banana split', 111, 115, '2021-01-02'),
(46, 7, 'Coklat', 111, 115, '2021-01-02'),
(47, 7, 'Srikaya', 12, 115, '2021-01-02'),
(48, 7, 'Banana split', 12, 115, '2021-01-02'),
(49, 1, 'Banana split', 111, 112, '2021-01-02'),
(50, 1, 'Coklat', 12, 112, '2021-01-02'),
(51, 1, 'Coklat', 12, 112, '2021-01-02'),
(52, 1, 'Bolen', 4, 112, '2021-01-02'),
(53, 1, 'Kombinasi coklat keju', 12, 112, '2021-01-02'),
(54, 1, 'Nanas', 12, 112, '2021-01-02'),
(55, 1, 'Sosis pizza', 12, 112, '2021-01-02'),
(56, 1, 'Sisir', 12, 112, '2021-01-02'),
(57, 1, 'Taro', 111, 112, '2021-01-02'),
(58, 1, 'Donut cup', 12, 112, '2021-01-02'),
(59, 1, 'Srikaya', 111, 112, '2021-01-02'),
(60, 7, 'Bolu gulung coklat', 4, 125, '2021-01-03'),
(61, 7, 'Kombinasi coklat keju', 111, 125, '2021-01-03'),
(62, 7, 'Srikaya', 1, 125, '2021-01-03'),
(63, 7, 'Tawar keju', 111, 125, '2021-01-03'),
(64, 7, 'Srikaya', 12, 125, '2021-01-03'),
(65, 1, 'Coklat', 12, 128, '2021-01-03'),
(66, 1, 'Coklat Keju', 111, 129, '2021-01-04'),
(67, 1, '9 rasa', 12, 129, '2021-01-04'),
(68, 7, 'Pisang chips', 12, 130, '2021-01-04'),
(69, 7, 'Coklat', 123, 130, '2021-01-04'),
(70, 7, 'Bolu gulung pandan', 12, 132, '2021-01-05'),
(71, 7, 'Kombinasi coklat keju', 23, 132, '2021-01-05'),
(72, 8, 'Bolu gulung pandan', 456, 133, '2021-01-05'),
(73, 8, 'Coklat', 212, 133, '2021-01-05'),
(74, 8, 'Kombinasi coklat keju', 34, 133, '2021-01-05'),
(75, 9, 'Kombinasi coklat keju', 23, 134, '2021-01-05'),
(76, 9, 'Coklat', 12, 134, '2021-01-05'),
(77, 9, 'Bolu gulung pandan', 345, 134, '2021-01-05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `babelan`
--
ALTER TABLE `babelan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bantar_gebang`
--
ALTER TABLE `bantar_gebang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cibitung`
--
ALTER TABLE `cibitung`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cikarang`
--
ALTER TABLE `cikarang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jajat`
--
ALTER TABLE `jajat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenisroti`
--
ALTER TABLE `jenisroti`
  ADD PRIMARY KEY (`id_jenisRoti`);

--
-- Indeks untuk tabel `karawang`
--
ALTER TABLE `karawang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kevin`
--
ALTER TABLE `kevin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `namaroti`
--
ALTER TABLE `namaroti`
  ADD PRIMARY KEY (`id_namaroti`),
  ADD KEY `id_jenisRoti` (`id_jenisRoti`);

--
-- Indeks untuk tabel `non_mitra`
--
ALTER TABLE `non_mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sarif`
--
ALTER TABLE `sarif`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soleh`
--
ALTER TABLE `soleh`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `cabang` (`cabang`);

--
-- Indeks untuk tabel `tb_cabang`
--
ALTER TABLE `tb_cabang`
  ADD PRIMARY KEY (`cabang`);

--
-- Indeks untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `cabang` (`cabang`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indeks untuk tabel `tb_roti`
--
ALTER TABLE `tb_roti`
  ADD PRIMARY KEY (`id_roti`),
  ADD KEY `id_pemesanan` (`id_pemesanan`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `babelan`
--
ALTER TABLE `babelan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `bantar_gebang`
--
ALTER TABLE `bantar_gebang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `cibitung`
--
ALTER TABLE `cibitung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `cikarang`
--
ALTER TABLE `cikarang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jajat`
--
ALTER TABLE `jajat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `jenisroti`
--
ALTER TABLE `jenisroti`
  MODIFY `id_jenisRoti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `karawang`
--
ALTER TABLE `karawang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kevin`
--
ALTER TABLE `kevin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `namaroti`
--
ALTER TABLE `namaroti`
  MODIFY `id_namaroti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `non_mitra`
--
ALTER TABLE `non_mitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sarif`
--
ALTER TABLE `sarif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `soleh`
--
ALTER TABLE `soleh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_akun`
--
ALTER TABLE `tb_akun`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id_pemesanan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT untuk tabel `tb_roti`
--
ALTER TABLE `tb_roti`
  MODIFY `id_roti` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `namaroti`
--
ALTER TABLE `namaroti`
  ADD CONSTRAINT `namaroti_ibfk_1` FOREIGN KEY (`id_jenisRoti`) REFERENCES `jenisroti` (`id_jenisRoti`);

--
-- Ketidakleluasaan untuk tabel `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD CONSTRAINT `tb_akun_ibfk_1` FOREIGN KEY (`cabang`) REFERENCES `tb_cabang` (`cabang`);

--
-- Ketidakleluasaan untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD CONSTRAINT `tb_pemesanan_ibfk_1` FOREIGN KEY (`cabang`) REFERENCES `tb_cabang` (`cabang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pemesanan_ibfk_2` FOREIGN KEY (`id_karyawan`) REFERENCES `tb_akun` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_roti`
--
ALTER TABLE `tb_roti`
  ADD CONSTRAINT `tb_roti_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `tb_akun` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_roti_ibfk_2` FOREIGN KEY (`id_pemesanan`) REFERENCES `tb_pemesanan` (`id_pemesanan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
