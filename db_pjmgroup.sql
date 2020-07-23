-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2020 at 09:27 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pjmgroup`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_chatting`
--

CREATE TABLE `tb_chatting` (
  `id_chat` int(100) NOT NULL,
  `comment` text NOT NULL,
  `id_user` int(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_chatting`
--

INSERT INTO `tb_chatting` (`id_chat`, `comment`, `id_user`, `created_at`, `updated_at`) VALUES
(2, 'Mantap joss', 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'FAFWAFWAFAWFWAF WAFWFAWF', 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'semoga berhasil', 13, '2020-07-22 11:06:25', '2020-07-22 11:06:25'),
(5, 'ow sayang sekali coy', 13, '2020-07-22 11:06:46', '2020-07-22 11:06:46'),
(6, 'mantep jeejeje', 12, '2020-07-22 11:44:50', '2020-07-22 11:44:50'),
(7, 'terima kasih', 8, '2020-07-23 01:08:27', '2020-07-23 01:08:27');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telepon` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` int(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `telepon`, `password`, `level`, `created_at`, `updated_at`) VALUES
(8, 'admin', 'robertusadrian@yahoo.com', '087759655777', '123', 1, '2020-07-20 07:55:26', '2020-07-20 07:55:26'),
(12, 'jayen', 'jayen@gmail.com', '123456', '123', 2, '2020-07-21 06:08:05', '2020-07-21 06:08:05'),
(13, 'robertus', 'jejen@gmail.com', '12345', '1234', 2, '2020-07-21 06:08:27', '2020-07-22 11:02:14'),
(19, 'sasuke', 'sasuke@gmail.com', '1234', '1234', 2, '2020-07-23 02:25:25', '2020-07-23 02:25:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_chatting`
--
ALTER TABLE `tb_chatting`
  ADD PRIMARY KEY (`id_chat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_chatting`
--
ALTER TABLE `tb_chatting`
  MODIFY `id_chat` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
