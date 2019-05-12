-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2019 at 09:51 
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daftarsiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id` tinyint(3) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gambar`
--

CREATE TABLE IF NOT EXISTS `tb_gambar` (
  `id` tinyint(3) NOT NULL,
  `nis` int(4) DEFAULT NULL,
  `gambar` text,
  `aktif` enum('yes','no') DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gambar`
--

INSERT INTO `tb_gambar` (`id`, `nis`, `gambar`, `aktif`) VALUES
(3, 1264, '91c84-icystones2.jpg', 'yes'),
(4, 9875, 'e93aa-icystones2.jpg', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE IF NOT EXISTS `tb_kelas` (
  `kode_kelas` varchar(10) NOT NULL,
  `nama_kelas` varchar(25) NOT NULL,
  `aktif` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`kode_kelas`, `nama_kelas`, `aktif`) VALUES
('X-C', 'X-Umum-C', 'yes'),
('X-D', 'X-UMUM-D', 'yes'),
('X-E', 'X-Umum-E', 'yes'),
('XA', 'XI-UMUM-A', 'yes'),
('XB', 'X-UMUM-B', 'yes'),
('XI-1', 'XI-RPL-1', 'yes'),
('XI-2', 'XI-RPL hore', 'yes'),
('XI-3', 'XII-RPL-3', 'yes'),
('XII-D', 'XII-UMUM-D', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapel`
--

CREATE TABLE IF NOT EXISTS `tb_mapel` (
  `id_mapel` varchar(8) NOT NULL,
  `nama_mapel` varchar(30) DEFAULT NULL,
  `guru` varchar(40) DEFAULT NULL,
  `aktif` enum('yes','no') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `nama_mapel`, `guru`, `aktif`) VALUES
('MAT-10', 'Matematika aja', 'nila', 'yes'),
('BHSIND', 'Bahasa Indonesia', 'Julia Lutfiati', 'yes'),
('Web-3', 'Pemrograman Web Dinamis', 'Rudy Eko Prasetya', 'yes'),
('BASDAT-3', 'Desain Basis Data', 'Riski Aswi,', 'no'),
('PBO-3', 'Pemrograman Berorientasi Objek', 'Aprilina T', 'yes'),
('JARKOM-1', 'Jaringan Komputer', 'M. Syaiful Muharrom', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE IF NOT EXISTS `tb_nilai` (
  `id_nilai` int(5) NOT NULL,
  `nis` int(4) NOT NULL,
  `mapel` varchar(8) NOT NULL,
  `nilai` float DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`id_nilai`, `nis`, `mapel`, `nilai`, `tanggal`) VALUES
(12, 1264, 'MAT-10', 79, '2015-01-11 10:34:32'),
(2, 1264, 'BHSIND', 50, '2014-09-28 05:21:39'),
(3, 1264, 'PBO-3', 80, '2014-09-28 05:21:46'),
(4, 1264, 'BASDAT-3', 70, '2014-09-28 05:21:53'),
(6, 1264, 'JARKOM-1', 90, '2014-09-28 05:22:12'),
(7, 65789, 'MAT-10', 80, '2014-09-28 05:24:29'),
(8, 65839, 'MAT-10', 80, '2014-09-28 05:29:58'),
(11, 1264, 'MAT-10', 98, '2014-09-28 09:30:05'),
(13, 1264, 'JARKOM-1', 90, '2015-12-31 22:11:05'),
(14, 9875, 'MAT-10', 89, '2016-01-03 02:21:41'),
(15, 65839, 'BHSIND', 75, '2016-01-05 00:24:28'),
(16, 65839, 'Web-3', 80, '2016-01-05 00:24:38'),
(17, 65839, 'BASDAT-3', 66, '2016-01-05 00:24:48'),
(18, 65839, 'JARKOM-1', 86, '2016-01-05 00:24:59'),
(19, 1264, 'MAT-10', 80, '2016-04-25 04:05:21'),
(28, 23, 'MAT-10', 80, '2018-10-04 05:59:49'),
(21, 1264, 'BASDAT-3', 40, '2017-01-12 07:00:46'),
(22, 1264, 'Web-3', 65, '2017-01-12 07:01:16'),
(23, 42134, 'MAT-10', 80, '2017-01-14 03:34:11'),
(24, 42134, 'BHSIND', 60, '2017-01-14 03:34:24'),
(25, 42134, 'BASDAT-3', 70, '2017-01-14 03:34:36'),
(26, 42134, 'BASDAT-3', 90, '2017-05-30 06:51:19'),
(27, 65839, 'MAT-10', 123, '2017-05-30 06:59:39');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE IF NOT EXISTS `tb_siswa` (
  `nis` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `kota_kab` varchar(30) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nama`, `password`, `alamat`, `kota_kab`, `gender`, `kelas`) VALUES
(1264, 'Riadi', 'e10adc3949ba59abbe56e057f20f883e', '<p>\r\n	Ngadisimo Jalan Selowarih 53 B</p>\r\n', 'Kediri', 'L', 'X-C'),
(1253, 'Anita Ratna Sari', 'e10adc3949ba59abbe56e057f20f883e', 'Desa Kayen Kidul Pagu kediri', 'Kediri Kab', 'P', 'XB'),
(4562, 'Anton Gaspleng', 'e10adc3949ba59abbe56e057f20f883e', 'Jln Kuburan Gang Mayit', 'Nganjuk', 'L', 'XI-1'),
(9875, 'Toni Sucipto', 'e10adc3949ba59abbe56e057f20f883e', 'Jamsaran Kec. Pesantren', 'Kediri', 'L', 'XI-1'),
(7658, 'Deni Darco', '', 'Kebon Jeruk', 'Jakarta Pusat Banget', 'L', 'XI-2'),
(65839, 'BUDI ANDUK', 'e10adc3949ba59abbe56e057f20f883e', '<p>\r\n	KEBUMEN</p>\r\n', 'KEBUMEN', 'L', 'X-C'),
(783989, 'JARFIS', '', 'KENDARI', 'NUSA TENGGARA TIMUR', 'P', 'XI-1'),
(65789, 'IRON MAN', 'e10adc3949ba59abbe56e057f20f883e', '<p>\r\n	AMERIKA SEBELAH KANAN</p>\r\n', 'PACE NGANJUK', 'P', 'XA'),
(42134, 'Coba', '4a6629303c679cfa6a5a81433743e52c', '<p>\r\n	kediri</p>\r\n', 'Kediri', 'L', 'XB'),
(59348593, 'RUDI', '14e1b600b1fd579f47433b88e8d85291', '<p>\r\n	Kediri saja</p>\r\n', 'kediri', 'L', 'X-D'),
(5678, 'coba', 'e10adc3949ba59abbe56e057f20f883e', '<p>\r\n	test</p>\r\n', 'kediri', 'P', 'X-C'),
(23, 'risa ayu', '202cb962ac59075b964b07152d234b70', 'kediri', 'kediri', 'P', 'XI-1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`kode_kelas`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `kelas` (`kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id_nilai` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
