-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 04:10 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barokah`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `sku` varchar(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `jumlah_stok` int(12) NOT NULL,
  `harga_satuan` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`sku`, `nama_barang`, `kategori`, `jumlah_stok`, `harga_satuan`) VALUES
('003', 'Bodrex', 'Obat-obatan', 22, 12000),
('004', 'Sosis', 'Makanan', 20, 2000),
('005', 'Yakult', 'Minuman', 22, 8000),
('006', 'pensil', 'ATK', 15, 2500),
('007', 'Sapu', 'Perlengkapan Rumah Tangga', 5, 17000),
('008', 'Rinso', 'Peralatan Mandi dan Mencuci', 15, 34000),
('009', 'Sunlight', 'Peralatan Mandi dan Mencuci', 22, 16000),
('010', 'Bolpoin', 'ATK', 12, 4000),
('011', 'Penggaris', 'ATK', 8, 3500),
('012', 'Baygon', 'Lain-lain', 20, 23000),
('013', 'Gula', 'Sembako', 12, 12000),
('014', 'Beras', 'Sembako', 10, 60000);

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`kategori`) VALUES
('ATK'),
('Lain-lain'),
('Makanan'),
('Minuman'),
('Obat-obatan'),
('Peralatan Mandi dan Mencuci'),
('Perlengkapan Rumah Tangga'),
('Sembako');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD UNIQUE KEY `sku` (`sku`),
  ADD KEY `fk_kategori` (`kategori`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`kategori`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `fk_kategori` FOREIGN KEY (`kategori`) REFERENCES `daftar` (`kategori`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
