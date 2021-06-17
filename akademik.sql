-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Bulan Mei 2021 pada 08.03
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `Nim` int(10) NOT NULL,
  `Nama_Mhs` varchar(50) NOT NULL,
  `Jenis_Kelamin` varchar(50) NOT NULL,
  `Program_Studi` varchar(50) NOT NULL,
  `Jurusan` varchar(30) NOT NULL,
  `Agama` varchar(10) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Sekolah` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`Nim`, `Nama_Mhs`, `Jenis_Kelamin`, `Program_Studi`, `Jurusan`, `Agama`, `Alamat`, `Sekolah`) VALUES
(1841160005, 'Luthfi Adi Syahputra', 'Laki-Laki', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', 'Islam', 'Bangkalan', ''),
(1841160006, 'Miftahul Huda', 'Laki-Laki', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', 'Islam', 'Pasuruan', ''),
(1841160008, 'Elsa Firmaniar', 'Perempuan', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', 'Islam', 'Nganjuk', ''),
(1841160031, 'Erlita Putri Wahyu', 'Perempuan', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', 'Islam', 'Pasuruan', 'SMKN 1 Bangil'),
(1841160053, 'Amartya Salsabila Putri Wicaksono', 'Perempuan', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', 'Islam', 'Malang', ''),
(1841160121, 'Alfath Afdana Putra Bahri', 'Laki-Laki', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', 'Islam', 'Malang', ''),
(1841160132, 'Dimas Zubaleta Guardiola Heriyanto', 'Laki-Laki', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', 'Islam', 'Malang', 'SMAN 1 Malang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs`
--

CREATE TABLE `mhs` (
  `Nim` int(10) NOT NULL,
  `Nama_Mhs` varchar(50) NOT NULL,
  `Jenis_Kelamin` varchar(50) NOT NULL,
  `Program_Studi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mhs`
--

INSERT INTO `mhs` (`Nim`, `Nama_Mhs`, `Jenis_Kelamin`, `Program_Studi`) VALUES
(1841160031, 'Erlita Putri Wahyu', 'Perempuan', 'Jaringan Telekomunikasi Digital');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ortu`
--

CREATE TABLE `ortu` (
  `Nama_Ayah` varchar(50) NOT NULL,
  `NIK_Ayah` varchar(16) NOT NULL,
  `Pekerjaan_Ayah` varchar(30) NOT NULL,
  `Nama_Ibu` varchar(50) NOT NULL,
  `NIK_Ibu` varchar(16) NOT NULL,
  `Pekerjaan_Ibu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `Nama_Sekolah` varchar(50) NOT NULL,
  `Alamat_Sekolah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `level`) VALUES
('1841160005', '1841160005', 'user'),
('1841160006', '1841160006', 'user'),
('1841160008', '1841160008', 'user'),
('1841160014', '1841160014', 'user'),
('1841160018', '1841160018', 'user'),
('1841160031', '1841160031', 'user'),
('1841160032', '1841160032', 'user'),
('1841160036', '1841160036', 'user'),
('1841160047', '1841160047', 'user'),
('1841160048', '1841160048', 'user'),
('1841160053', '1841160053', 'user'),
('1841160057', '1841160057', 'user'),
('1841160060', '1841160060', 'user'),
('1841160066', '1841160066', 'user'),
('1841160068', '1841160068', 'user'),
('1841160080', '1841160080', 'user'),
('1841160087', '1841160087', 'user'),
('1841160110', '1841160110', 'user'),
('1841160117', '1841160117', 'user'),
('1841160120', '1841160120', 'user'),
('1841160121', '1841160121', 'user'),
('1841160125', '1841160125', 'user'),
('1841160126', '1841160126', 'user'),
('1841160127', '1841160127', 'user'),
('admin', 'password', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`Nim`);

--
-- Indeks untuk tabel `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`Nim`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
