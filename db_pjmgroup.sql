-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2020 at 06:03 PM
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
(16, 'halo perkenalkan nama saya rian', 21, '2020-07-28 11:02:14', '2020-07-28 11:02:14'),
(17, 'apa bisa bertanya disini?', 21, '2020-07-28 11:02:36', '2020-07-28 11:02:36');

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
(8, 'admin', 'robertusadrian@yahoo.com', '087759655777', '123', 1, '2020-07-20 07:55:26', '2020-07-28 10:53:09'),
(21, 'rian', 'rian@gmail.com', '123', '123', 2, '2020-07-28 10:55:33', '2020-07-28 10:55:33');

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
  MODIFY `id_chat` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
