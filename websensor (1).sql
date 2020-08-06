-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2020 at 03:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websensor`
--

-- --------------------------------------------------------

--
-- Table structure for table `datasensor`
--

CREATE TABLE `datasensor` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waterflow1` int(11) NOT NULL,
  `waterflow2` int(11) NOT NULL,
  `waterflow3` int(11) NOT NULL,
  `waterflow4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datasensor`
--

INSERT INTO `datasensor` (`id`, `tanggal`, `waterflow1`, `waterflow2`, `waterflow3`, `waterflow4`) VALUES
(1, '2020-07-19', 870, 456, 765, 324),
(2, '2020-07-18', 325, 363, 678, 456),
(3, '2020-07-18', 867, 346, 324, 567),
(4, '2020-07-18', 367, 678, 964, 876),
(5, '2020-07-18', 546, 785, 634, 876),
(6, '2020-07-18', 647, 754, 875, 987),
(7, '2020-07-19', 321, 123, 435, 453),
(8, '2020-07-19', 362, 555, 5673, 3244),
(9, '2020-07-19', 546, 768, 987, 567),
(10, '2020-07-19', 6563, 3565, 578, 456),
(11, '2020-07-19', 5463, 345, 474, 567),
(12, '2020-07-19', 3453, 546, 456, 345),
(13, '2020-07-20', 235, 257, 679, 567),
(14, '2020-07-20', 567, 7976, 67, 908),
(15, '2020-07-26', 1234, 123, 456, 765),
(16, '2020-07-26', 567, 3456, 567, 345),
(17, '2020-07-26', 657, 456, 678, 456),
(18, '2020-07-26', 656, 876, 987, 789),
(19, '2020-07-26', 345, 653, 567, 434),
(20, '2020-07-26', 5467, 456, 345, 876),
(21, '2020-07-26', 5354, 656, 879, 347),
(22, '2020-07-27', 574, 364, 376, 546),
(23, '2020-07-27', 435, 657, 345, 567),
(24, '2020-07-27', 4234, 455, 767, 987),
(25, '2020-07-27', 987, 432, 5456, 456);

-- --------------------------------------------------------

--
-- Table structure for table `sensor`
--

CREATE TABLE `sensor` (
  `nilai_sensor` int(100) NOT NULL,
  `nilai_sensor2` bigint(100) NOT NULL,
  `nilai_sensor3` bigint(100) NOT NULL,
  `nilai_sensor4` bigint(100) NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sensor`
--

INSERT INTO `sensor` (`nilai_sensor`, `nilai_sensor2`, `nilai_sensor3`, `nilai_sensor4`, `Tanggal`) VALUES
(0, 0, 0, 0, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datasensor`
--
ALTER TABLE `datasensor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sensor`
--
ALTER TABLE `sensor`
  ADD PRIMARY KEY (`nilai_sensor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datasensor`
--
ALTER TABLE `datasensor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
