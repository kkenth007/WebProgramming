-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 13, 2019 at 02:34 AM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tbl_crud_ajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id` int(12) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(16) NOT NULL,
  `web` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id`, `name`, `email`, `tel`, `web`) VALUES
(6, 'วชิรเวช นังตะลา3', 'Wachirawad@hotmail.com', '0987654321', 'http://www.niceoppai.net/'),
(18, 'นายกิตติศักดิ์ เชื้อบญุมี ', 'Bluebox07@gmail.com', '09832213129', 'https://github.com/kkenth0078'),
(24, 'นางสาวจริศรา ทำมา ', 'Bluebox07@gmail.com', '09832213129', 'https://github.com/kkenth0078'),
(27, 'นายเฉลิมพร แซ่เล้า', 'Bluebox07@gmail.com', '09326541564', 'https://cdn.jsdelivr.net/'),
(34, 'นายเฉลิมพร แซ่เล้า', 'Bluebox07@gmail.com', '0983221312909832', 'https://github.com/google'),
(35, 'นางสาวจริศรา ทำมา', 'bluebox07@gmail.com', '123123123', 'http://www.niceoppai.net/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
