-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2018 at 11:15 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasakhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `previlege` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `previlege`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(10) NOT NULL,
  `nama` varchar(150) DEFAULT NULL,
  `gapok` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `nama`, `gapok`) VALUES
(6, 'Manager', 35000),
(7, 'Marketing', 30000),
(8, 'Human Resources Development', 31500),
(9, 'Back Office', 31500),
(10, 'Collector', 30000),
(11, 'General Affair', 31500),
(12, 'Teller', 24000),
(13, 'Customer Service', 24000),
(14, 'Kepala Cabang', 50000),
(19, 'Direktur Utama', 31500);

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `idgaji` int(10) NOT NULL,
  `pegawai` int(11) DEFAULT NULL,
  `divisi` int(10) DEFAULT NULL,
  `bulan` int(10) DEFAULT NULL,
  `tahun` int(10) DEFAULT NULL,
  `total_gapok` int(100) DEFAULT NULL,
  `total_gajilembur` int(100) DEFAULT NULL,
  `total_tambahan` int(100) DEFAULT NULL,
  `total_gajikotor` int(100) DEFAULT NULL,
  `total_gajibersih` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gaji`
--

INSERT INTO `gaji` (`idgaji`, `pegawai`, `divisi`, `bulan`, `tahun`, `total_gapok`, `total_gajilembur`, `total_tambahan`, `total_gajikotor`, `total_gajibersih`) VALUES
(10, 1002, 13, 1, 2017, 3168000, 288000, 200000, 3656000, 3576000),
(11, 1002, 13, 2, 2017, 3168000, 288000, 200000, 3656000, 3576000),
(12, 1002, 13, 3, 2017, 3168000, 288000, 200000, 3656000, 3576000),
(13, 1003, 9, 1, 2017, 5040000, 630000, 100000, 5770000, 5690000),
(14, 1003, 9, 2, 2017, 5040000, 630000, 200000, 5870000, 5790000),
(15, 1003, 9, 3, 2017, 5040000, 630000, 200000, 5870000, 5790000),
(16, 1002, 13, 0, 0, 3168000, 288000, 200000, 3656000, 3576000);

-- --------------------------------------------------------

--
-- Table structure for table `jamkerja`
--

CREATE TABLE `jamkerja` (
  `id_jam` int(10) NOT NULL,
  `pegawai` int(11) DEFAULT NULL,
  `bulan` int(10) DEFAULT NULL,
  `tahun` int(10) DEFAULT NULL,
  `hari_kerja` int(10) DEFAULT NULL,
  `tidak_masuk` int(10) DEFAULT NULL,
  `jam_lembur` int(10) DEFAULT NULL,
  `setengah_hari` int(10) DEFAULT NULL,
  `sakit` int(20) DEFAULT NULL,
  `jumlah_jam` int(10) DEFAULT NULL,
  `jumlah_setengah` int(10) DEFAULT NULL,
  `total_jam` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jamkerja`
--

INSERT INTO `jamkerja` (`id_jam`, `pegawai`, `bulan`, `tahun`, `hari_kerja`, `tidak_masuk`, `jam_lembur`, `setengah_hari`, `sakit`, `jumlah_jam`, `jumlah_setengah`, `total_jam`) VALUES
(1, 1002, 1, 2017, 12, 2, 12, 3, 3, 96, 12, 96),
(4, 1002, 2, 2017, 20, 0, 15, 0, 0, 160, 0, 175),
(5, 1002, 3, 2017, 10, 5, 10, 3, 2, 80, 12, 78),
(6, 1003, 1, 2017, 20, 0, 12, 0, 0, 160, 0, 172),
(7, 1003, 2, 2017, 20, 0, 15, 0, 0, 160, 0, 175),
(8, 1003, 3, 2017, 10, 5, 9, 2, 3, 80, 8, 81);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `NIK` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `tanggal_lahir` varchar(50) DEFAULT NULL,
  `alamat` varchar(250) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `divisi` int(10) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `previlege` varchar(20) NOT NULL DEFAULT 'pegawai'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`NIK`, `nama`, `tanggal_lahir`, `alamat`, `no_hp`, `email`, `divisi`, `password`, `previlege`) VALUES
(1002, 'Nabila Nurfajrina', '6 April 1998', 'Kediri', '085701708', 'Nabila@gmail.com', 13, '1002', 'pegawai'),
(1003, 'Trisna Virliana Ramadhanti', '09 Januri 1998', 'Perum Bumi Ardimulyo', '081214124925', 'TrisnaRamadhanti@gmail.com', 9, '1234', 'pegawai'),
(1004, 'Syahda Rafli Izzat Ibrahim', '10 Februari 2003', 'Perum. Tirtasani', '08121412489', 'Syahda@gmail.com', 7, '123', 'pegawai'),
(1005, 'Faradella Widya Putri', '16 April 1998', 'Pandean', '081234567', 'Faradella@gmail.com', 12, '1005', 'pegawai'),
(1006, 'Kholifatul Mahmudah', '6 Mei 1998', 'Batu', '082134278', 'Olif@gmail.com', 8, '1006', 'pegawai');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(100) NOT NULL,
  `pegawai` int(11) DEFAULT NULL,
  `bulan` int(10) DEFAULT NULL,
  `tahun` int(10) DEFAULT NULL,
  `penilaian1` int(10) DEFAULT NULL,
  `penilaian2` int(10) DEFAULT NULL,
  `penilaian3` int(10) DEFAULT NULL,
  `penilaian4` int(10) DEFAULT NULL,
  `penilaian5` int(10) DEFAULT NULL,
  `penilaian6` int(10) DEFAULT NULL,
  `penilaian7` int(10) DEFAULT NULL,
  `total_penilaian` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id_penilaian`, `pegawai`, `bulan`, `tahun`, `penilaian1`, `penilaian2`, `penilaian3`, `penilaian4`, `penilaian5`, `penilaian6`, `penilaian7`, `total_penilaian`) VALUES
(1, 1003, 1, 2017, 3, 5, 6, 4, 7, 6, 9, 40),
(5, 1002, 2, 2017, 8, 10, 7, 4, 8, 10, 9, 56),
(6, 1002, 3, 2017, 4, 7, 9, 9, 6, 7, 9, 51),
(7, 1003, 1, 2017, 9, 10, 6, 9, 7, 8, 10, 59),
(8, 1003, 2, 2017, 7, 8, 9, 9, 10, 8, 4, 55),
(9, 1003, 3, 2017, 9, 10, 8, 8, 9, 10, 8, 62),
(10, 1002, 1, 2017, 8, 10, 8, 6, 10, 8, 5, 55);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`idgaji`),
  ADD KEY `gaji_ibfk_1` (`pegawai`),
  ADD KEY `gaji_ibfk_2` (`divisi`);

--
-- Indexes for table `jamkerja`
--
ALTER TABLE `jamkerja`
  ADD PRIMARY KEY (`id_jam`),
  ADD KEY `jamkerja_ibfk_1` (`pegawai`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`NIK`),
  ADD KEY `divisi` (`divisi`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `penilaian_ibfk_1` (`pegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `gaji`
--
ALTER TABLE `gaji`
  MODIFY `idgaji` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `jamkerja`
--
ALTER TABLE `jamkerja`
  MODIFY `id_jam` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `NIK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1007;
--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `gaji`
--
ALTER TABLE `gaji`
  ADD CONSTRAINT `gaji_ibfk_1` FOREIGN KEY (`pegawai`) REFERENCES `pegawai` (`NIK`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gaji_ibfk_2` FOREIGN KEY (`divisi`) REFERENCES `divisi` (`id_divisi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jamkerja`
--
ALTER TABLE `jamkerja`
  ADD CONSTRAINT `jamkerja_ibfk_1` FOREIGN KEY (`pegawai`) REFERENCES `pegawai` (`NIK`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`divisi`) REFERENCES `divisi` (`id_divisi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD CONSTRAINT `penilaian_ibfk_1` FOREIGN KEY (`pegawai`) REFERENCES `pegawai` (`NIK`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
