-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 24, 2021 at 07:00 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hasy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id_admin`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id_customer` int NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nomor_hp` varchar(13) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  PRIMARY KEY (`id_customer`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

DROP TABLE IF EXISTS `pembayaran`;
CREATE TABLE IF NOT EXISTS `pembayaran` (
  `id_pembayaran` int NOT NULL AUTO_INCREMENT,
  `metode_pembayaran` varchar(100) NOT NULL,
  `total_harga` int NOT NULL,
  PRIMARY KEY (`id_pembayaran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `penyediajasa`
--

DROP TABLE IF EXISTS `penyediajasa`;
CREATE TABLE IF NOT EXISTS `penyediajasa` (
  `id_penyedia` int NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nomor_hp` varchar(13) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id_penyedia`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

DROP TABLE IF EXISTS `produk`;
CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `harga` int NOT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_penyediajasa`
--

DROP TABLE IF EXISTS `transaksi_penyediajasa`;
CREATE TABLE IF NOT EXISTS `transaksi_penyediajasa` (
  `id_transaksi` int NOT NULL AUTO_INCREMENT,
  `id_penyedia` int NOT NULL,
  `id_pembayaran` int NOT NULL,
  `id_customer` int NOT NULL,
  `pesanan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `fk_tjasa_penyedia` (`id_penyedia`),
  KEY `fk_tjasa_pembayaran` (`id_pembayaran`),
  KEY `fk_tjasa_customer` (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_produk`
--

DROP TABLE IF EXISTS `transaksi_produk`;
CREATE TABLE IF NOT EXISTS `transaksi_produk` (
  `id_transaksi` int NOT NULL AUTO_INCREMENT,
  `alamat` varchar(200) NOT NULL,
  `jumlah_pesanan` int NOT NULL,
  `kurir` varchar(100) NOT NULL,
  `id_produk` int NOT NULL,
  `id_pembayaran` int NOT NULL,
  `id_customer` int NOT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `fk_tproduk_produk` (`id_produk`),
  KEY `fk_tproduk_pembayaran` (`id_pembayaran`),
  KEY `fk_tproduk_customer` (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi_penyediajasa`
--
ALTER TABLE `transaksi_penyediajasa`
  ADD CONSTRAINT `fk_tjasa_customer` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `fk_tjasa_pembayaran` FOREIGN KEY (`id_pembayaran`) REFERENCES `pembayaran` (`id_pembayaran`),
  ADD CONSTRAINT `fk_tjasa_penyedia` FOREIGN KEY (`id_penyedia`) REFERENCES `penyediajasa` (`id_penyedia`);

--
-- Constraints for table `transaksi_produk`
--
ALTER TABLE `transaksi_produk`
  ADD CONSTRAINT `fk_tproduk_customer` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `fk_tproduk_pembayaran` FOREIGN KEY (`id_pembayaran`) REFERENCES `pembayaran` (`id_pembayaran`),
  ADD CONSTRAINT `fk_tproduk_produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
