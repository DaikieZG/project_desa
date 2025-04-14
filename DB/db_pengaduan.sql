-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2025 at 09:21 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pengaduan`
--

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` char(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `telp`) VALUES
('01234', 'Diky Muhsinin', 'diki', '43b93443937ea642a9a43e77fd5d8f77', '2222222222'),
('01234567890', 'Muhammad Fathan Azahran', 'patan', 'e1f94fb9a9102a2525a1ce4d8c9e5e57', '3333333333'),
('0987654321', 'Candra Maulana Arkaan', 'candra', '2614ae3c375c3095dc536283672548bd', '1111111111'),
('1234', '1', '1', 'c4ca4238a0b923820dcc509a6f75849b', '1'),
('1234567890', 'Muhammad Hafiz Rabani', 'hapis', '4e9e61e1c1608fd5f460c78dae886f9a', '12345678909');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nik` char(16) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('0','proses','selesai','ditolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `isi_laporan`, `foto`, `status`) VALUES
(12, '2025-04-11', '1234567890', 'air keran di rumah saya kotor', 'air-kotor-1140x620.jpg-e1723172936163.webp', 'ditolak'),
(13, '2025-04-11', '1234567890', 'saya mau membuat surat keterangan tidak mampu', 'ha.jpg', 'selesai'),
(14, '2025-04-11', '1234567890', 'listrik di rumah saya padam', 'listrik_padam_di_pulau_sumatra_1717557935.webp', 'selesai'),
(15, '2025-04-11', '01234', 'banjir di area dekat rumah saya', 'hujan-deras.jpg', 'selesai'),
(16, '2025-04-12', '01234', ' Pengaduan Mengenai Jalan Rusak di Lingkungan RT 05/RW 03', 'jalan-rusak.jpeg', '0'),
(17, '2025-04-12', '01234567890', ' Penumpukan Sampah di TPS Liar', 'sampah.jpg', '0'),
(18, '2025-04-12', '01234567890', 'Pengaduan Kebisingan Suara Musik Malam Hari', 'bising.jpg', '0'),
(19, '2025-04-12', '0987654321', 'Gangguan Pasokan Air Bersih', 'krisis-air-bersih.webp', 'proses'),
(20, '2025-04-12', '0987654321', 'Lampu Penerangan Jalan Umum (PJU) Mati', 'lampu-mati.jpg', 'proses'),
(21, '2025-04-13', '1234', 'Galon saya rusak', 'OIP.jpeg', 'ditolak'),
(22, '2025-04-13', '1234567890', 'test', 'Screenshot 2025-02-27 211711.png', '0');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `level` enum('','admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '089999999', 'admin'),
(2, 'Petugas', 'petugas', 'afb91ef692fd08c445e8cb1bab2ccf9c', '0877777777', 'petugas'),
(7, 'Bayu Sukmawinata', 'bayu', 'a430e06de5ce438d499c2e4063d60fd6', '1212121121212', 'petugas'),
(8, 'N. Amelia', 'amel', 'da0e22de18e3fbe1e96bdc882b912ea4', '1313123234243', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `nama_petugas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `nama_petugas`) VALUES
(12, 13, '2025-04-12', 'sudah selesai kami tangani', 'Admin'),
(13, 14, '2025-04-11', 'sudah kami tangani', 'Admin'),
(15, 20, '2025-04-12', 'siap akan kami tangani sesegera mungkin', 'Petugas'),
(16, 15, '2025-04-12', 'sudah kami tangani', 'Admin'),
(17, 19, '2025-04-12', 'bantuan akan datang', 'Petugas'),
(22, 12, '2025-04-13', 'bukan urusan saya :v', 'Admin'),
(23, 21, '2025-04-13', 'padahal masih baru gitu :v', 'Admin');

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
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD UNIQUE KEY `id_pengaduan` (`id_pengaduan`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
