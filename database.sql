-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2015 at 11:31 PM
-- Server version: 5.6.21-log
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siap_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE IF NOT EXISTS `absen` (
  `kode_ruang` varchar(5) NOT NULL DEFAULT '',
  `kode_mk` varchar(15) NOT NULL DEFAULT '',
  `kode_kelaas` varchar(5) NOT NULL DEFAULT '',
  `nid` varchar(30) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `baak`
--

CREATE TABLE IF NOT EXISTS `baak` (
  `nib` varchar(30) NOT NULL DEFAULT '',
  `nama_baak` varchar(100) NOT NULL DEFAULT '',
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baak`
--

INSERT INTO `baak` (`nib`, `nama_baak`, `username`, `password`) VALUES
('11111', 'Dian Budiana M.Kom', 'adminbaak', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pengajar`
--

CREATE TABLE IF NOT EXISTS `daftar_pengajar` (
  `nid` varchar(30) NOT NULL DEFAULT '',
  `kodemk` varchar(45) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `nid` varchar(30) NOT NULL DEFAULT '',
  `nama_dosen` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `kode_jurusan` varchar(5) NOT NULL DEFAULT '',
  `nama_jurusan` varchar(25) NOT NULL DEFAULT '',
  `prog_studi` varchar(5) NOT NULL DEFAULT '',
  `kode_nim` varchar(5) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`kode_jurusan`, `nama_jurusan`, `prog_studi`, `kode_nim`) VALUES
('IF', 'Teknik Informatika', 'S1', 'A2'),
('MI', 'Manajemen Informatika', 'D3', 'A1'),
('SI', 'Sistem Informasi', 'S1', 'A3');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `kode_kelas` varchar(5) NOT NULL DEFAULT '',
  `nim` varchar(15) NOT NULL DEFAULT '',
  `nama_kelas` varchar(10) NOT NULL DEFAULT '',
  `kapasitas` int(3) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kode_kelas`, `nim`, `nama_kelas`, `kapasitas`) VALUES
('TI-IB', 'A2.1500089', '', 40);

-- --------------------------------------------------------

--
-- Table structure for table `ketua_jurusan`
--

CREATE TABLE IF NOT EXISTS `ketua_jurusan` (
  `nik` varchar(30) NOT NULL DEFAULT '',
  `nama` varchar(100) NOT NULL DEFAULT '',
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `kode_jurusan` varchar(5) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ketua_jurusan`
--

INSERT INTO `ketua_jurusan` (`nik`, `nama`, `username`, `password`, `kode_jurusan`) VALUES
('123347', 'Rahmat Efendi M.Kom', 'KajurTI', '827ccb0eea8a706c4c34a16891f84e7b', 'IF');

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE IF NOT EXISTS `krs` (
  `kode_mk` varchar(15) NOT NULL DEFAULT '',
  `nim` varchar(15) NOT NULL DEFAULT '',
  `status` int(1) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`kode_mk`, `nim`, `status`) VALUES
('IF1222', 'A2.1100091', 1),
('IF12278', 'A2.1100091', 1);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
`id_log` int(10) unsigned NOT NULL,
  `nama_log` varchar(45) NOT NULL DEFAULT '',
  `tabel_sumber` varchar(45) NOT NULL DEFAULT '',
  `perintah` varchar(100) NOT NULL DEFAULT '',
  `tanggal` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` varchar(15) NOT NULL DEFAULT '',
  `kode_jurusan` varchar(5) NOT NULL DEFAULT '',
  `nama` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `periode` varchar(20) NOT NULL DEFAULT '',
  `status_smt` int(2) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `kode_jurusan`, `nama`, `password`, `periode`, `status_smt`) VALUES
('A1.1500001', 'A1', 'Rinaldi', '3132123', '2015/2016', 4),
('A1.1500002', 'A1', 'Muhammad Alfaz', 'dragonest', '2015/2016', 3),
('A1.1500003', 'A1', 'Dede Elis Nurjaman', 'apalah', '2015/2016', 1),
('A2.1100082', 'A2', 'Muhammad Riadi', '112', '2015/2016', 1),
('A2.1100091', 'A2', 'Agit Naeta', '12345', '2014/2015', 1),
('A2.1500089', 'A2', 'Dian Asari', 'asdda', '2015/2016', 1),
('A3.110087', 'A3', 'Rahmat Riandy', '1987', '2011/2012', 2),
('A3.1510088', 'A3', 'Aldi Dwi Nugraha', '1987aht', '2015/2016', 1),
('A3.1510089', 'A3', 'Saripudin', 'merdecow', '2015/2016', 1);

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE IF NOT EXISTS `matakuliah` (
  `kode_mk` varchar(15) NOT NULL DEFAULT '',
  `kode_jurusan` varchar(5) NOT NULL DEFAULT '',
  `matakuliah` varchar(50) NOT NULL DEFAULT '',
  `sks` int(1) unsigned NOT NULL DEFAULT '0',
  `semester` varchar(2) NOT NULL DEFAULT '',
  `tahun_ajaran` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`kode_mk`, `kode_jurusan`, `matakuliah`, `sks`, `semester`, `tahun_ajaran`) VALUES
('IF1222', 'IF', 'Project Work', 2, '1', '2015/2016'),
('IF12223', 'IF', 'Hukum Bisnis', 1, '1', '2015/2016'),
('IF1224', 'IF', 'Algoritma', 4, '3', '2015/2016'),
('IF12241', 'IF', 'RTI', 3, '5', '2015/2016'),
('IF1225', 'IF', 'Jaringan Komputer', 2, '3', '2015/2016'),
('IF12266', 'IF', 'Metode Numerik', 2, '5', '2015/2016'),
('IF1227', 'IF', 'Kecerdasan Buatan', 3, '7', '2015/2016'),
('IF12278', 'IF', 'Prak.Basis Data', 4, '1', '2015/2016'),
('IF12279', 'IF', 'Kalkulus', 3, '4', '2015/2016'),
('IF12280', 'IF', 'Rekayasa Web', 2, '2', '2015/2016'),
('IF12281', 'IF', 'Matrix', 3, '4', '2015/2016'),
('IF7654', 'IF', 'B.Inggris', 3, '1', '2015/2016'),
('IFIF12299', 'IF', 'Sistem Informasi', 3, '3', '2015/2016');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `kode_nilai` varchar(1) NOT NULL DEFAULT '',
  `nim` varchar(15) NOT NULL DEFAULT '',
  `kode_mk` varchar(15) NOT NULL DEFAULT '',
  `angka_mutu` int(1) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`kode_nilai`, `nim`, `kode_mk`, `angka_mutu`) VALUES
('A', 'A2.1100091', 'IF1222', 4),
('B', 'A2.1100091', 'IF12278', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE IF NOT EXISTS `ruangan` (
  `kode_ruangan` varchar(5) NOT NULL DEFAULT '',
  `kode_kelas` varchar(10) NOT NULL DEFAULT '',
  `nama_ruangan` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `nim` varchar(15) NOT NULL,
  `status_smt` int(2) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`nim`, `status_smt`) VALUES
('A2.1100091', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
 ADD PRIMARY KEY (`kode_ruang`);

--
-- Indexes for table `baak`
--
ALTER TABLE `baak`
 ADD PRIMARY KEY (`nib`);

--
-- Indexes for table `daftar_pengajar`
--
ALTER TABLE `daftar_pengajar`
 ADD PRIMARY KEY (`nid`,`kodemk`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
 ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
 ADD PRIMARY KEY (`kode_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
 ADD PRIMARY KEY (`kode_kelas`);

--
-- Indexes for table `ketua_jurusan`
--
ALTER TABLE `ketua_jurusan`
 ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
 ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
 ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
 ADD PRIMARY KEY (`kode_mk`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
 ADD PRIMARY KEY (`kode_nilai`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
 ADD PRIMARY KEY (`kode_ruangan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
MODIFY `id_log` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
