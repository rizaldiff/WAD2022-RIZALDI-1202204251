-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 10:26 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul4_rizaldi`
--

-- --------------------------------------------------------

--
-- Table structure for table `showroom_rizaldi_table`
--

CREATE TABLE `showroom_rizaldi_table` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_rizaldi`
--

CREATE TABLE `user_rizaldi` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_rizaldi`
--

INSERT INTO `user_rizaldi` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(1, '', '2@gmail.com', '151', ''),
(2, 'tes', '2@gmail.com', '151', '222'),
(3, 'Den', 'tes@gmail.com', '$2y$10$.rsLJWU7ibZC8pzqESTtAuCJIv6j2oN7k0MmHSa1LT777x5WM6nG2', '12111'),
(4, 'p', 'test@gmail.com', '$2y$10$ztxK5nskJpSh3Ti9iEuaL.zA0sQ2MMyhMNu5QZKIrd2EFbgvk8UXy', '11'),
(5, 'a', 'j@gmail.com', '$2y$10$5aFYkGMq4nzVL18NyJFgr.fxA65IiE7UslFusITyu9lOhpjcn6HvK', '1'),
(6, 'aa', 'r@gmail.com', '1', '12'),
(7, 'jeje', 'g@g.com', '1', '12'),
(8, 'Rizaldi', 'riz@gmail.com', '$2y$10$v.QAxbRLG71nisGI4xIB4.fPD4WrpGrCBLCN7zkOsCA4SyK13gWje', '123'),
(9, 'Jal', 'di@gmail.com', '$2y$10$PvWRBe1X599uFt.dMXnsYeUWgUU6tMCJaACw5gPcyaiPmWfgL5I9.', '123'),
(10, 'rizaldi', 'rizaldi@gmail.com', '$2y$10$R04xHe4ZAmh4O2ZcHtQxGeN/2RhkZSVk4m5YzQ4YOmRc59p/q6g1S', '09212121'),
(11, 'ju', 'ju@g.com', '$2y$10$R2KaqOSwGAtDamPT2gQXqeJmQRkn4DVz53yXZOYVl5eNRFghiJ1eO', '0812');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `showroom_rizaldi_table`
--
ALTER TABLE `showroom_rizaldi_table`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `user_rizaldi`
--
ALTER TABLE `user_rizaldi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `showroom_rizaldi_table`
--
ALTER TABLE `showroom_rizaldi_table`
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_rizaldi`
--
ALTER TABLE `user_rizaldi`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
