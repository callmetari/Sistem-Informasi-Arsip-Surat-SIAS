-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2022 at 02:41 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sias`
--

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id` int(10) NOT NULL,
  `no_agenda` varchar(10) NOT NULL,
  `no_surat` int(20) NOT NULL,
  `jenis_surat` varchar(30) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tanggal_terima` date NOT NULL,
  `asal_surat` varchar(50) NOT NULL,
  `isi_ringkas` varchar(100) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`id`, `no_agenda`, `no_surat`, `jenis_surat`, `tanggal_surat`, `tanggal_terima`, `asal_surat`, `isi_ringkas`, `file`) VALUES
(22, '1023', 111, 'Undangan', '2022-11-08', '2018-02-19', 'Pemerintah Provinsi Jawa Timur Dinas Pemberdayaan ', 'Undangan rapat koordinasi program pemberdayaan masyarakat dan desa', 'Undangan.pdf'),
(23, '1024', 112, 'Pengumuman', '2022-11-08', '2018-02-19', 'Pemerintah Kabupaten Kediri Dinas Kesehatan', 'Pemberitahuan pelayanan kesehatan', 'Pemberitahuan.pdf'),
(24, '1025', 113, 'Nota Dinas', '2022-11-08', '2018-02-19', 'Pemerintah Kabupaten Kediri Kecamatan Plosoklaten ', 'Mohon persetujuan pembayaran bantuan keuangan operasional TP. PKK desa', 'Nota Dinas.pdf'),
(25, '1026', 114, 'Pemberitahuan', '2022-11-08', '2018-02-19', 'Pemerintah Kabupaten Kediri Dinas Kesehatan Kabupa', 'Permohonan bantuan stimulasi pemadam kebakaran', 'Pemberitahuan.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `level`, `jenis_kelamin`, `foto`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'admin', 'Laki-laki', 'man.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
