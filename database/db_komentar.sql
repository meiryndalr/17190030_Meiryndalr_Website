-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2022 at 07:02 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_komentar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_komen`
--

CREATE TABLE `tb_komen` (
  `id_komen` int(10) NOT NULL,
  `user` varchar(100) NOT NULL,
  `komen` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_komen`
--

INSERT INTO `tb_komen` (`id_komen`, `user`, `komen`) VALUES
(1, 'ksw', 'fangirling bikin mood naik^^'),
(2, 'kimsunwoo', 'it\'s my happines'),
(4, 'meiryn', 'aku seorang fangirl yang baik'),
(5, 'amel', 'aku suka taehyung'),
(6, 'lastika', 'aku suka kim sunwoo<3'),
(7, 'meiryndalr', 'apaweeee'),
(8, 'kimkai', 'aku suka bgt sama kai!'),
(9, 'azmi', 'aku mah hukan kpopers'),
(10, 'mamih', 'mamih punya anak kpopers semua'),
(11, 'jaehyuk', 'aku anggota treasure'),
(12, 'zahra', 'aku nctzen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_komen`
--
ALTER TABLE `tb_komen`
  ADD PRIMARY KEY (`id_komen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_komen`
--
ALTER TABLE `tb_komen`
  MODIFY `id_komen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
