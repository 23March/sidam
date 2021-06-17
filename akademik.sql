-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2021 pada 13.52
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
  `Nik_Mhs` varchar(16) NOT NULL,
  `Jenis_Kelamin` varchar(50) NOT NULL,
  `Program_Studi` varchar(50) NOT NULL,
  `Jurusan` varchar(30) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Agama` varchar(10) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Sekolah` varchar(30) NOT NULL,
  `Alamat_Sekolah` varchar(50) NOT NULL,
  `Tahun_Lulus` year(4) NOT NULL,
  `Nama_Ayah` varchar(50) NOT NULL,
  `Nik_Ayah` varchar(16) NOT NULL,
  `Pekerjaan_Ayah` varchar(30) NOT NULL,
  `Nama_Ibu` varchar(50) NOT NULL,
  `Nik_Ibu` varchar(16) NOT NULL,
  `Pekerjaan_Ibu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`Nim`, `Nama_Mhs`, `Nik_Mhs`, `Jenis_Kelamin`, `Program_Studi`, `Jurusan`, `Tanggal_Lahir`, `Agama`, `Alamat`, `Sekolah`, `Alamat_Sekolah`, `Tahun_Lulus`, `Nama_Ayah`, `Nik_Ayah`, `Pekerjaan_Ayah`, `Nama_Ibu`, `Nik_Ibu`, `Pekerjaan_Ibu`) VALUES
(1841160117, 'Afiudin Irgi Alfarezi', '2147483647', 'Laki-Laki', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', '2021-06-21', 'Islam', 'Jombang', 'SMKN 1 Jombang', 'Jombang', 2018, 'yfyerh', '2147483647', 'Karyawan Swasta', 'Bella', '2147483647', 'Ibu rumah tangga'),
(1841160121, 'Alfath Afdana Putra Bahri', '0', 'Laki-Laki', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', '0000-00-00', 'Islam', 'Malang', '', '', 0000, '', '0', '0', '0', '0', '0'),
(1841160053, 'Amartya Salsabila Putri Wicaksono', '0', 'Perempuan', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', '0000-00-00', 'Islam', 'Malang', '', '', 0000, '', '0', '0', '0', '0', '0'),
(1841160068, 'Ari Galang Udayana', '', '', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', '0000-00-00', '', '', '', '', 0000, '', '', '', '', '', ''),
(1841160047, 'Daniar Dwi Putra Wigi Prasojo', '', '', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', '0000-00-00', '', '', '', '', 0000, '', '', '', '', '', ''),
(1841160014, 'Dhelia Balqis Zharifa Az-Zahra', '', '', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', '0000-00-00', '', '', '', '', 0000, '', '', '', '', '', ''),
(1841160132, 'Dimas Zubaleta Guardiola Heriyanto', '2147483647', 'Laki-Laki', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', '2000-03-15', 'Islam', 'Malang', 'SMAN 2 Malang', 'Malang', 2018, 'yfyerh', '2147483647', 'Karyawan Swasta', 'hfdjvfhjdf', '2147483647', 'Ibu rumah tangga'),
(1841160008, 'Elsa Firmaniar', '0', 'Perempuan', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', '0000-00-00', 'Islam', 'Nganjuk', '', '', 0000, '', '0', '0', '0', '0', '0'),
(1841160031, 'Erlita Putri Wahyu', '3514125202000001', 'Perempuan', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', '2000-03-12', 'Islam', 'Gempol Pasuruan', 'SMKN 1 Bangil', 'Jl. Tongkol Bangil', 2018, 'Indra Wahyudi', '3514120307700003', 'Karyawan Swasta', 'Heru Trimugtiani', '3514127011720002', 'Ibu rumah tangga'),
(1841160066, 'Fadila Larasati', '', '', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', '0000-00-00', '', '', '', '', 0000, '', '', '', '', '', ''),
(1841160057, 'Fairuz Rahmadika', '', '', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', '0000-00-00', '', '', '', '', 0000, '', '', '', '', '', ''),
(1841160125, 'Handy Widianto Prabowo', '', '', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', '0000-00-00', '', '', '', '', 0000, '', '', '', '', '', ''),
(1841160005, 'Luthfi Adi Syahputra', '0', 'Laki-Laki', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', '0000-00-00', 'Islam', 'Bangkalan', '', '', 0000, '', '0', '0', '0', '0', '0'),
(1841160006, 'Miftahul Huda', '0', 'Laki-Laki', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', '0000-00-00', 'Islam', 'Pasuruan', '', '', 0000, '', '0', '0', '0', '0', '0'),
(1841160080, 'Mitodius Nicho Swacaesar Setiawan', '', '', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', '0000-00-00', '', '', '', '', 0000, '', '', '', '', '', ''),
(1841160048, 'Mohamad Iqbal Maulana Firmansyah', '', '', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', '0000-00-00', '', '', '', '', 0000, '', '', '', '', '', ''),
(1841160060, 'Muhammad Alif Nabila', '', '', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', '0000-00-00', '', '', '', '', 0000, '', '', '', '', '', ''),
(1841160126, 'Muhammad Firman Maulid Kusnadi', '', '', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', '0000-00-00', '', '', '', '', 0000, '', '', '', '', '', ''),
(1841160110, 'Reyn Gerel Sihombing', '', '', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', '0000-00-00', '', '', '', '', 0000, '', '', '', '', '', ''),
(1841160036, 'Reza Afrida Dewanti', '', '', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', '0000-00-00', '', '', '', '', 0000, '', '', '', '', '', ''),
(1841160087, 'Riza Rosyidah Adi Putri', '', '', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', '0000-00-00', '', '', '', '', 0000, '', '', '', '', '', ''),
(1841160120, 'Tabita Maudina', '', '', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', '0000-00-00', '', '', '', '', 0000, '', '', '', '', '', ''),
(1841160127, 'Tania Nurindini', '', '', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', '0000-00-00', '', '', '', '', 0000, '', '', '', '', '', ''),
(1841160018, 'Zainullah', '', '', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', '0000-00-00', '', '', '', '', 0000, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs`
--

CREATE TABLE `mhs` (
  `Nim` int(10) NOT NULL,
  `Nama_Mhs` varchar(50) NOT NULL,
  `Jenis_Kelamin` varchar(50) NOT NULL,
  `Program_Studi` varchar(50) NOT NULL,
  `Jurusan` varchar(30) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Agama` varchar(10) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Sekolah` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mhs`
--

INSERT INTO `mhs` (`Nim`, `Nama_Mhs`, `Jenis_Kelamin`, `Program_Studi`, `Jurusan`, `Tanggal_Lahir`, `Agama`, `Alamat`, `Sekolah`) VALUES
(1841160031, 'Erlita Putri Wahyu', 'Perempuan', 'Jaringan Telekomunikasi Digital', 'Teknik Elektro', '2000-03-12', 'Islam', 'Gempol Pauruan', 'SMKN 1 Bangil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ortu`
--

CREATE TABLE `ortu` (
  `Nim` int(10) NOT NULL,
  `Nama_Ayah` varchar(50) NOT NULL,
  `Nik_Ayah` varchar(16) NOT NULL,
  `Pekerjaan_Ayah` varchar(30) NOT NULL,
  `Nama_Ibu` varchar(50) NOT NULL,
  `Nik_Ibu` varchar(16) NOT NULL,
  `Pekerjaan_Ibu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ortu`
--

INSERT INTO `ortu` (`Nim`, `Nama_Ayah`, `Nik_Ayah`, `Pekerjaan_Ayah`, `Nama_Ibu`, `Nik_Ibu`, `Pekerjaan_Ibu`) VALUES
(1841160031, 'Indra Wahyudi', '3514120307700003', 'Karyawan Swasta', 'Heru Trimugtiani', '3514127011720002', 'Ibu Rumah Tangga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `Nim` int(10) NOT NULL,
  `Nama_Sekolah` varchar(50) NOT NULL,
  `Alamat_Sekolah` varchar(50) NOT NULL,
  `Tahun_Lulus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`Nim`, `Nama_Sekolah`, `Alamat_Sekolah`, `Tahun_Lulus`) VALUES
(184116006, '', '', 0),
(1841160005, '', '', 0),
(1841160008, '', '', 0),
(1841160014, '', '', 0),
(1841160018, '', '', 0),
(1841160031, 'SMKN 1 Bangil', 'Jl. Tongkol No.3 Bangil', 2018),
(1841160036, '', '', 0),
(1841160047, '', '', 0),
(1841160048, '', '', 0),
(1841160053, '', '', 0),
(1841160057, '', '', 0),
(1841160060, '', '', 0),
(1841160066, '', '', 0),
(1841160068, '', '', 0),
(1841160080, '', '', 0),
(1841160087, '', '', 0),
(1841160110, '', '', 0),
(1841160117, '', '', 0),
(1841160120, '', '', 0),
(1841160121, '', '', 0),
(1841160125, '', '', 0),
(1841160126, '', '', 0),
(1841160127, '', '', 0),
(1841160132, '', '', 0);

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
('1841160132', '1841160132', 'user'),
('admin', 'password', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`Nim`),
  ADD UNIQUE KEY `Nama_Mhs` (`Nama_Mhs`,`Nik_Mhs`,`Jenis_Kelamin`,`Program_Studi`,`Jurusan`,`Tanggal_Lahir`,`Agama`,`Alamat`,`Sekolah`,`Alamat_Sekolah`,`Tahun_Lulus`,`Nama_Ayah`,`Nik_Ayah`,`Pekerjaan_Ayah`,`Nama_Ibu`,`Nik_Ibu`,`Pekerjaan_Ibu`);

--
-- Indeks untuk tabel `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`Nim`),
  ADD UNIQUE KEY `Nama_Mhs` (`Nama_Mhs`,`Jenis_Kelamin`,`Program_Studi`,`Jurusan`,`Tanggal_Lahir`,`Agama`,`Alamat`,`Sekolah`);

--
-- Indeks untuk tabel `ortu`
--
ALTER TABLE `ortu`
  ADD PRIMARY KEY (`Nim`),
  ADD UNIQUE KEY `Nama_Ayah` (`Nama_Ayah`,`Nik_Ayah`,`Pekerjaan_Ayah`,`Nama_Ibu`,`Nik_Ibu`,`Pekerjaan_Ibu`);

--
-- Indeks untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`Nim`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `ortu`
--
ALTER TABLE `ortu`
  ADD CONSTRAINT `ortu_ibfk_1` FOREIGN KEY (`Nim`) REFERENCES `mahasiswa` (`Nim`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
