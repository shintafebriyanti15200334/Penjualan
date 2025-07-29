-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2021 at 11:12 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelompok`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(12) NOT NULL,
  `kode_produk` char(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `kode_produk`, `nama`, `stok`, `harga`, `keterangan`, `gambar`) VALUES
(1, 'P01', 'Bubur Ayam', 10, 12000, 'racikan bubur khas Kuningan + slederi + bawang goreng + ayam suwir, kuah kaldu (dipisah) + kerupuk (dipisah) + sambal (dipisah)', 'bubur_ayam.jpg'),
(2, 'P02', 'Ayam Bakar', 10, 10000, 'Ayam Bakar + Sayuran', 'ayam.jpg'),
(3, 'P03', 'Nasi Goreng', 10, 25000, 'Nasi Goreng pakai sayuran, ati ampela + ayam', 'nasi.jpg'),
(4, 'P04', 'Spagetti', 10, 11000, 'Delicious Spagetti', 'spageti.jpg'),
(5, 'P05', 'Mie Goreng ', 10, 10000, 'Indomie Telor ,sayuran sawi segar + bawang goreng + saos terpisah', 'mie.jpg'),
(6, 'P06', 'Bubur Ketan ', 10, 11000, 'tambahan santan akan dipisah', 'ketan_item.jpg'),
(7, 'P07', 'Blackforest Cake', 10, 180000, 'Kue Tart Ulang Tahun', 'blackforest.jpg'),
(8, 'P08', 'Pudding Fla', 20, 10000, 'Pudding dengan Tambahan Fla', 'puding.jpg'),
(9, 'P09', 'Tart', 10, 250000, 'Kue', 'tart1.jpg'),
(10, 'P10', 'Ice Cream', 10, 11000, 'Coklat, Strawbery, Oreo', 'ice.jpg'),
(11, 'P11', 'Aneka Jus', 11, 10000, 'Aneka Rasa Jus', 'jus.jpg'),
(12, 'P12', 'Aneka Coffe', 10, 10000, 'Aneka Kopi', 'kopi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'default.svg',
  `alamat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`, `photo`, `alamat`) VALUES
(7, 'Shinta', 'shin@gmail.com', '$2y$10$1yq3OkusOd3EqfAnNxMWwO1HFlWszZCuu7DquHQGZg1MSe1S9kVkW', 'Shinta', 'default.svg', 'KEBON KELAPA TINGGI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD UNIQUE KEY `kode_produk` (`kode_produk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
