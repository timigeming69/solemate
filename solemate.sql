-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2024 at 05:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `solemate`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `nama_sepatu` text NOT NULL,
  `tanggal` text NOT NULL,
  `metode` text NOT NULL,
  `total` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='1';

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `nama_sepatu`, `tanggal`, `metode`, `total`) VALUES
(1, 'Air Jordan 3000', '30 April 2023', 'Tunai', '20 ribu'),
(7, 'Reebok', '20 april ', 'Kartu Kredit', '20 juta');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` varchar(300) NOT NULL,
  `nomor_telepon` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `password` text NOT NULL,
  `apiKey` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `nomor_telepon`, `alamat`, `password`, `apiKey`) VALUES
(7, 'timmyganteng', '123@gmail.com', '08222', 'UNAI', '$2y$10$AmkYzNe6tWVgxRHIxm./aOagHAtbeqhdVMbwNtkVSzHsCFVlADrcC', ''),
(8, 'grado', '1', '1', '1', '$2y$10$davljdANwA.UgrMir3CtDuXEH37kmeAqQvuKTmeA9Bki3L5AzdlHq', 'a2314f37e137574932f97dafd42206dbd3abc0623f6feb'),
(9, 'timmysakit', '123', '123', '123', '$2y$10$wqaYJ8fHXAY3bLzGFXbf0e9t28fADrfkILKlEYDP2Ke2/.w3NeRqO', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
