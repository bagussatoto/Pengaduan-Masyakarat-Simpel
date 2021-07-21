-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2021 at 03:51 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yoman_ukk`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `lihatP` ()  BEGIN
	SELECT * FROM pengaduan WHERE nik='$_SESSION[nik]';
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `lihatPe` ()  BEGIN
    select * from pengaduan where nik = '$_SESSION[nik]';
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `lihatPengaduan` ()  BEGIN
    SELECT * FROM pengaduan;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `lihat_pengaduan` ()  BEGIN
    SELECT * FROM pengaduan WHERE nik='$_SESSION[nik]';
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `selectMahasiswa` ()  BEGIN
    SELECT * FROM pengaduan WHERE nik='$_SESSION[nik]';
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` char(16) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `telp`) VALUES
('22422424', 'Bang Dan', 'adan', 'adan', '0118'),
('81281231', 'Bangbang', 'wkwk', 'wkwk', '01515'),
('821311', 'Bangsul', 'udin', 'udin', '05200');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nama` char(50) NOT NULL,
  `nik` char(50) NOT NULL,
  `judul_laporan` text NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `status` enum('0','proses','selesai','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nama`, `nik`, `judul_laporan`, `isi_laporan`, `foto`, `status`) VALUES
(1, '2021-04-06', 'Bangsul', '821311', 'Apa Kabar', 'Rindu', '0.png', 'selesai'),
(2, '2021-04-06', 'Bangsul', '821311', 'Kapan Jalan?', 'Membuat', '', 'selesai'),
(3, '2021-04-06', 'Bangsul', '821311', 'Pergi Jauh', 'Keluar kota', '1qw.jpg', 'selesai'),
(4, '2021-04-06', 'Bang Dan', '22422424', 'Ada Klitih', 'Ini Ada klitih, Tapi boong, PAL PALE PAL PALE PALEE', 'amazing-animal-beautiful-beautifull.jpg', 'proses'),
(5, '2021-04-06', 'Bangsul', '821311', 'Wkwk', 'WKWK', '55.jpg', '0'),
(6, '2021-04-06', 'Bangbang', '81281231', 'WKWK', 'WWK', '7.jpg', '0'),
(7, '2021-04-06', 'Bangsul', '821311', 'Apapun itu', 'wkwk', 'd9fc581e-1ee4-4d32-abd3-c1735aaecf77.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(50) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `level` enum('admin','petugas','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`) VALUES
(1, 'Bang din', 'adin', 'adin', '02111', 'admin'),
(2, 'kak dina', 'odin', 'odin', '0516161', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(50) NOT NULL,
  `id_pengaduan` int(50) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES
(1, 1, '2021-04-06', 'Jembud', 1),
(2, 2, '2021-04-06', 'Besok Ya', 1),
(3, 3, '2021-04-06', 'Waton', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
