-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2023 at 03:50 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `lihatP` ()   BEGIN
	SELECT * FROM pengaduan WHERE nik='$_SESSION[nik]';
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `lihatPe` ()   BEGIN
    select * from pengaduan where nik = '$_SESSION[nik]';
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `lihatPengaduan` ()   BEGIN
    SELECT * FROM pengaduan;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `lihat_pengaduan` ()   BEGIN
    SELECT * FROM pengaduan WHERE nik='$_SESSION[nik]';
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `selectMahasiswa` ()   BEGIN
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `telp`) VALUES
('1233889877', 'bagus', 'bagus', 'bagus', '09777654777'),
('12344', 'rastra', 'ras', 'ras', '038308209484'),
('222222222', 'akmal', 'akmal', 'akmal', '11111'),
('3402161208060001', 'BAGUS BUDI SATOTO', 'bagusbudi1', '12345', '+628213609460'),
('66554467', 'binsar', 'bin', 'bin', '0899999543'),
('767769886', 'lia', 'lia', 'lia', '082222'),
('8888098123', 'riski', 'riski', 'riski', '08999997555'),
('888809812322', 'tgr', 'tgr', 'tgr', '099988733332');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nama`, `nik`, `judul_laporan`, `isi_laporan`, `foto`, `status`) VALUES
(9, '2023-06-22', 'budi', '55555', 'laporan', 'jjjj', '278504913_276957247975104_2625618255715586678_n.jp', 'selesai'),
(10, '2023-06-22', 'rastra', '12345667889', 'bagus', 'cheating\r\n', 'ucapan.png', 'selesai'),
(15, '2023-06-22', 'rastra', '12344', 'yyy', '', 'Screenshot 2023-06-18 080330.png', 'selesai'),
(17, '2023-06-24', 'wildan', '2222222', 'pandu ', '1111', '278504913_276957247975104_2625618255715586678_n.jp', 'selesai'),
(19, '2023-06-27', 'rizal', '666666666654', 'aku kamiu', '', '1.png', 'selesai'),
(20, '2023-07-03', 'rastra', '12344', 'halo dek', 'aku', '278504913_276957247975104_2625618255715586678_n.jp', 'selesai'),
(21, '2023-07-03', 'rizal', '666666666654', 'Kamu siapa', '', '', 'selesai'),
(22, '2023-07-03', 'rastra', '12344', 'amikom ', 'ukt elit', 'photo_2023-07-02_07-36-53.jpg', 'selesai'),
(23, '2023-07-04', 'rastra', '12344', 'gambar', '', 'hasil.jpg', 'selesai'),
(24, '2023-07-06', 'rastra', '12344', 'ok siap', 'bagus sak penak e dawe golek kelompok si pinter2', 'Logo Acara Catur Sederhana & Melingkar Arang dan K', 'selesai'),
(25, '2023-07-06', 'user', '12399987', 'halo dek', 'Kamu Siaopa', 'logo romansa1.png', 'selesai'),
(26, '2023-07-08', 'user', '12399987', 'FP', 'halo', '', 'selesai'),
(27, '2023-07-08', 'user', '12399987', 'ppppp', 'seminar', 'Snapinsta.app_356082592_2148947231977444_563213422', 'selesai'),
(28, '2023-07-08', 'user', '12399987', '444', 'gg', 'ucapan.png', 'proses'),
(29, '2023-07-08', 'BAGUS BUDI SATOTO', '3402161208060001', 'FP', 'Can You', 'ucapan.png', 'proses'),
(30, '2023-07-08', 'binsar', '66554467', 'looo', 'hhhh', 'Cyber Threat Intelligence.png', 'proses'),
(31, '2023-07-08', 'user', '12399987', 'ghg', 'hjgh', '', 'proses'),
(32, '2023-07-08', 'user', '12399987', 'pemograman ', 'web', '', '0'),
(33, '2023-07-13', 'FAADHIL ASYRAF', '3402161208060005', 'SULIT', 'TEST', '278504913_276957247975104_2625618255715586678_n.jp', '0'),
(34, '2023-07-14', 'rastra', '12344', 'halo dek', 'hjhhj', 'ucapan.png', 'proses'),
(35, '2023-07-14', 'rastra', '12344', 'tegar', 'aku sayang kamu', '', 'selesai'),
(36, '2023-07-14', 'bagus', '1233889877', 'lappran', 'kwdkjwd', 'ucapan.png', 'selesai'),
(37, '2023-07-14', 'bagus', '1233889877', 'laporan', 'nwkdnlwf', 'ucapan.png', 'proses'),
(38, '2023-07-14', 'bagus', '1233889877', 'wfnwfhnl', 'wfkihflqh', 'Cyber Threat Intelligence.png', 'selesai'),
(39, '2023-07-20', 'riski', '8888098123', 'revis terus sampai mapus', 'bu ikmah baik sekali', 'WhatsApp Image 2023-07-18 at 09.12.11.jpeg', 'selesai'),
(40, '2023-07-20', 'tegar', '123456789', 'bismillah bisa', 'revisi banyak', 'Twibbon_Share.png', 'selesai'),
(41, '2023-07-20', 'tegar', '123456789', 'revisi', 'risiii', 'WhatsApp Image 2023-07-18 at 09.12.11.jpeg', 'selesai');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`) VALUES
(2, 'petugas', 'petugas', 'petugas', '0516161', 'petugas'),
(5, 'admin', 'admin', 'admin', '089999321', 'admin');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES
(1, 1, '2021-04-06', 'Jembud', 1),
(2, 2, '2021-04-06', 'Besok Ya', 1),
(3, 3, '2021-04-06', 'Waton', 1),
(4, 4, '2023-06-22', 'okkke bro', 1),
(5, 8, '2023-06-22', 'siappp', 1),
(6, 9, '2023-06-22', 'eeeeee', 1),
(7, 10, '2023-06-22', 'ok', 1),
(8, 11, '2023-06-22', 'ok', 1),
(9, 12, '2023-06-22', 'ok', 1),
(10, 13, '2023-06-22', 'ok', 1),
(11, 14, '2023-06-22', 'ok', 1),
(12, 15, '2023-06-22', 'ok', 1),
(13, 16, '2023-06-22', 'ok', 1),
(14, 17, '2023-06-24', 'ok', 1),
(15, 18, '2023-06-27', 'oke', 1),
(16, 19, '2023-06-27', 'y', 1),
(17, 20, '2023-07-03', 'sukses', 5),
(18, 21, '2023-07-03', 'oke', 5),
(19, 22, '2023-07-04', 'ok', 5),
(20, 23, '2023-07-04', 'ok', 5),
(21, 24, '2023-07-06', 'ok', 5),
(22, 25, '2023-07-06', '', 5),
(23, 26, '2023-07-08', 'ok', 5),
(24, 35, '2023-07-14', 'kamu mah jelek percuma jadi jangan kasih tau aku kalau kamu suka sama aku\r\n', 5),
(25, 36, '2023-07-14', 'ok', 5),
(26, 27, '2023-07-20', '', 5),
(27, 39, '2023-07-20', '', 5),
(28, 40, '2023-07-20', 'oke baik terimaksih', 5),
(29, 41, '2023-07-20', 'oke \r\nsudah lengkap', 5),
(30, 38, '2023-07-20', 'dddd', 5);

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
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
