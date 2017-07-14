-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 14, 2017 at 12:14 AM
-- Server version: 10.2.3-MariaDB-log
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `LEVEL` varchar(20) DEFAULT NULL,
  `ALAMAT` varchar(50) DEFAULT NULL,
  `NO_TELP` varchar(12) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`USERNAME`, `PASSWORD`, `LEVEL`, `ALAMAT`, `NO_TELP`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'dol', '089512345678'),
('gudang', '202446dd1d6028084426867365b0c7a1', 'Gudang', 'ab', '08123456789'),
('kasir', 'c7911af3adbd12a035b289556d96470a', 'Kasir', 'c', '087');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `ID_BARANG` int(11) NOT NULL,
  `NAMA_BARANG` varchar(50) DEFAULT NULL,
  `ID_KATEGORI` int(11) DEFAULT NULL,
  `BELI` int(11) DEFAULT NULL,
  `JUAL` int(11) DEFAULT NULL,
  `STOK` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`ID_BARANG`, `NAMA_BARANG`, `ID_KATEGORI`, `BELI`, `JUAL`, `STOK`) VALUES
(1, 'Indomie', 1, 2000, 2500, 1),
(2, 'Lolipop', 2, 500, 1000, 2),
(5, 'Surya Pro', 3, 13000, 15000, 3),
(9, 'M', 1, 1000, 0, 7),
(10, 'A', 1, 2000, 3000, 0),
(11, 'Korek', 4, 0, 1500, 0),
(12, 'z', 1, 0, 1200, 0),
(13, 'l', 3, 0, 1500, 0),
(14, 'g', 3, 0, 1200, 0),
(15, 'n', 2, 0, 500, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_beli`
--

CREATE TABLE `tb_beli` (
  `ID_BELI` int(11) NOT NULL,
  `ID_SUPPLIER` int(11) DEFAULT NULL,
  `ID_BARANG` int(11) DEFAULT NULL,
  `TGL_BELI` date DEFAULT NULL,
  `JML_BELI` int(11) DEFAULT NULL,
  `HARGA_SATUAN` int(11) DEFAULT NULL,
  `TOTAL_BELI` int(11) DEFAULT NULL,
  `USERNAME` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_beli`
--

INSERT INTO `tb_beli` (`ID_BELI`, `ID_SUPPLIER`, `ID_BARANG`, `TGL_BELI`, `JML_BELI`, `HARGA_SATUAN`, `TOTAL_BELI`, `USERNAME`) VALUES
(1, 1, 2, '2015-12-06', 2, 500, 1000, 'Admin'),
(2, 2, 1, '2015-12-06', 1, 2000, 2000, 'Admin'),
(3, 1, 5, '2015-12-07', 2, 13000, 26000, 'gudang'),
(4, 2, 2, '2015-12-07', 5, 500, 2500, 'gudang'),
(5, 1, 9, '2017-03-09', 5, 1000, 5000, 'gudang'),
(6, 1, 9, '2017-03-11', 10, 1000, 10000, 'gudang'),
(7, 5, 9, '2017-03-11', 3, 2500, 7500, 'gudang'),
(8, 1, 9, '2017-03-11', 10, 3000, 30000, 'gudang'),
(9, 1, 9, '2017-03-11', 2, 1000, 2000, 'gudang'),
(10, 1, 9, '2017-03-11', 10, 1000, 10000, 'gudang'),
(11, 1, 9, '2017-03-13', 2, 1000, 2000, 'gudang'),
(12, 1, 9, '2017-03-13', 10, 1000, 10000, 'gudang'),
(13, 5, 10, '2017-03-13', 5, 2000, 10000, 'gudang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `ID_KATEGORI` int(11) NOT NULL,
  `NAMA_KATEGORI` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`ID_KATEGORI`, `NAMA_KATEGORI`) VALUES
(1, 'Mie Instan'),
(2, 'Permen'),
(3, 'Rokok'),
(4, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `ID_PENJUALAN` int(11) NOT NULL,
  `ID_BARANG` int(11) DEFAULT NULL,
  `TGL_PENJUALAN` date DEFAULT NULL,
  `JML_BRG` int(11) DEFAULT NULL,
  `TOTAL_PENJUALAN` int(11) DEFAULT NULL,
  `USERNAME` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`ID_PENJUALAN`, `ID_BARANG`, `TGL_PENJUALAN`, `JML_BRG`, `TOTAL_PENJUALAN`, `USERNAME`) VALUES
(47, 9, '2017-07-14', 1, 0, 'kasir'),
(46, 1, '2017-07-13', 1, 2500, 'kasir'),
(45, 1, '2017-07-13', 1, 2500, 'kasir'),
(44, 2, '2017-07-13', 1, 1000, 'kasir'),
(43, 9, '2017-05-18', 1, 0, 'admin'),
(42, 2, '2017-05-18', 1, 1000, 'admin'),
(41, 5, '2017-05-18', 1, 15000, 'admin'),
(40, 2, '2017-04-26', 1, 1000, 'kasir');

-- --------------------------------------------------------

--
-- Table structure for table `tb_setoran`
--

CREATE TABLE `tb_setoran` (
  `ID_SETORAN` int(11) NOT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `TGL_SETOR` date DEFAULT NULL,
  `TOTAL_JUAL` int(11) DEFAULT NULL,
  `TOTAL_SETOR` int(11) DEFAULT NULL,
  `SELISIH` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_setoran`
--

INSERT INTO `tb_setoran` (`ID_SETORAN`, `USERNAME`, `TGL_SETOR`, `TOTAL_JUAL`, `TOTAL_SETOR`, `SELISIH`) VALUES
(1, 'Kasir', '2015-12-06', 3500, 3500, 0),
(2, 'kasir', '2015-12-08', 5500, 2000, -3500),
(3, 'kasir', '2015-12-08', 26500, 5000, -21500);

-- --------------------------------------------------------

--
-- Table structure for table `tb_supplier`
--

CREATE TABLE `tb_supplier` (
  `ID_SUPPLIER` int(11) NOT NULL,
  `NAMA_SUPPLIER` varchar(50) DEFAULT NULL,
  `ALAMAT` varchar(50) DEFAULT NULL,
  `TELP` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_supplier`
--

INSERT INTO `tb_supplier` (`ID_SUPPLIER`, `NAMA_SUPPLIER`, `ALAMAT`, `TELP`) VALUES
(1, 'PT Gak jadi', 'ada', 62812),
(2, 'Pt gak jadi ikut', 'bb', 62),
(5, 'Pt. Indo', 'Jl. Raya a', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`USERNAME`),
  ADD UNIQUE KEY `TB_ADMIN_PK` (`USERNAME`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`ID_BARANG`),
  ADD UNIQUE KEY `TB_BARANG_PK` (`ID_BARANG`),
  ADD KEY `RELATIONSHIP_1_FK` (`ID_KATEGORI`);

--
-- Indexes for table `tb_beli`
--
ALTER TABLE `tb_beli`
  ADD PRIMARY KEY (`ID_BELI`),
  ADD UNIQUE KEY `TB_BELI_PK` (`ID_BELI`),
  ADD KEY `RELATIONSHIP_4_FK` (`USERNAME`),
  ADD KEY `RELATIONSHIP_5_FK` (`ID_SUPPLIER`),
  ADD KEY `RELATIONSHIP_6_FK` (`ID_BARANG`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`ID_KATEGORI`),
  ADD UNIQUE KEY `TB_KATEGORI_PK` (`ID_KATEGORI`);

--
-- Indexes for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`ID_PENJUALAN`),
  ADD UNIQUE KEY `TB_PENJUALAN_PK` (`ID_PENJUALAN`),
  ADD KEY `RELATIONSHIP_2_FK` (`ID_BARANG`),
  ADD KEY `RELATIONSHIP_3_FK` (`USERNAME`);

--
-- Indexes for table `tb_setoran`
--
ALTER TABLE `tb_setoran`
  ADD PRIMARY KEY (`ID_SETORAN`),
  ADD UNIQUE KEY `TB_SETORAN_PK` (`ID_SETORAN`),
  ADD KEY `RELATIONSHIP_7_FK` (`USERNAME`);

--
-- Indexes for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  ADD PRIMARY KEY (`ID_SUPPLIER`),
  ADD UNIQUE KEY `TB_SUPPLIER_PK` (`ID_SUPPLIER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `ID_BARANG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tb_beli`
--
ALTER TABLE `tb_beli`
  MODIFY `ID_BELI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `ID_KATEGORI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `ID_PENJUALAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `tb_setoran`
--
ALTER TABLE `tb_setoran`
  MODIFY `ID_SETORAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  MODIFY `ID_SUPPLIER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
