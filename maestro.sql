-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2021 at 02:32 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maestro`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `gambar_barang` varchar(50) NOT NULL,
  `deskripsi_barang` varchar(500) NOT NULL,
  `stok_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga_barang`, `gambar_barang`, `deskripsi_barang`, `stok_barang`) VALUES
(1, 'Oli Honda', 10000, 'oli.png', 'Oli yang diproduksi dari honda', 50),
(2, 'Kanebo', 8000, 'kanebo.png', 'Kain kanebo kualitas terbaik untuk mengeringkan kendaraan anda yang basah', 100),
(3, 'Ban Dalam', 5000, 'bandalam.png', 'karet ban untuk mengganti band dalam yang bocor terkena paku/benda tajam lain', 50),
(4, 'Kain Fiber', 15000, 'kainfiber.png', 'kain yang dapat mengeringkan kendaraan anda bila terkena hujan atau setelah mencuci. Dengan kain ini, air akan terserap 99% lebih kuat sehingga tidak akan meninggalkan bekas air pada kendaraan anda', 30);

-- --------------------------------------------------------

--
-- Table structure for table `kulakan`
--

CREATE TABLE `kulakan` (
  `id_kulakan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `fullname`, `email`, `password`, `phone`, `address`, `role`) VALUES
(1, 'Zayyan Abdillah', 'yayanabdillah01@gmail.com', 'adminolshop123', '085700601971', 'jl gajah birowo 40 tlogosari pedurungan semarang', 'admin'),
(2, 'User Medioker', 'usermedioker@gmail.com', 'asdf', '+6285700601971', 'Jl. Gajah Birowo No. 40', 'costumer'),
(3, 'Calon Admin', 'calonadmin@gmail.com', '$2y$10$6cBzTjm.MUWpr8Oy.Y/uhOjJc92D2Br2J72rP3KWzWaKUlJWbSnMi', '+6281212973655', 'Jl. Gajah Birowo No. 40', 'costumer'),
(6, 'User Baru', 'mfikyzulfikar@gmail.com', '$2y$10$QPzgHBUINkUiiqpS8MFlBuUu/2eeFsmCMdCX3WmK6tOIK5EsOgv02', '+6285700601971', 'Jl. Gajah Birowo No. 40', 'costumer'),
(7, 'User Baru', 'userbaru@gmail.com', '$2y$10$NOpDn9VDY4k0hVzdeRtoiuezyq3WleHiklQDn38.UachUJHPjL.72', '+6285700601971', 'Jl. Gajah Birowo No. 40', 'costumer'),
(8, 'Zayyan Abdillah ', 'yayanabdillah01@gmail.com', '$2y$10$eTVMkRRjGpSOknIZxbVlreO4fVj.S0cPRxKn8mGQ14WGBegd9Q7re', '+6285700601971', 'Jl. Gajah Birowo No. 40', 'costumer'),
(9, 'Zayyan Abdillah ', 'yayanabdillah01@gmail.com', '$2y$10$fFYxlITYoMw3hNMFSJDJh.fYzTLe9ytTKgxS5TpOsZReQRbl5UqeC', '+6285700601971', 'Jl. Gajah Birowo No. 40', 'costumer'),
(10, 'Zayyan Abdillah ', 'yayanabdillah01@gmail.com', '$2y$10$crH6nkEJ/OdxFU..MQfa4.d3U/jUectAuc4oGprTRfy7.ryo5AKwS', '+6285700601971', 'asdf', 'costumer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `kulakan`
--
ALTER TABLE `kulakan`
  ADD PRIMARY KEY (`id_kulakan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kulakan`
--
ALTER TABLE `kulakan`
  MODIFY `id_kulakan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
