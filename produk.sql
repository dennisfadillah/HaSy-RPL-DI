-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 24, 2021 at 07:09 AM
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

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `harga`) VALUES
(1, 'Kursi Rotan Cap Elang', 65000),
(2, 'Wajan Aluminium Cap Badak', 70000),
(3, 'Lemari Buku 30x50cm', 150000),
(4, 'Rak Sepatu Kayu 50x100cm', 250000),
(5, 'Kursi Kayu Mini', 55000),
(6, 'Nasi Liwet Instan', 15000),
(7, 'Kopi Luwak 200gr', 70000),
(8, 'Kopi Pangalengan 200gr', 35000),
(9, 'Sofa Rotan Hijau', 350000),
(10, 'Lemari Pakaian Kayu 50x200cm', 500000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
