-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2017 at 10:25 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `seat_no` int(40) NOT NULL,
  `bus_1` int(11) NOT NULL DEFAULT '0',
  `bus_2` int(11) NOT NULL DEFAULT '0',
  `bus_3` int(11) NOT NULL DEFAULT '0',
  `bus_4` int(11) NOT NULL DEFAULT '0',
  `bus_5` int(11) NOT NULL DEFAULT '0',
  `bus_6` int(11) NOT NULL DEFAULT '0',
  `customer` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `seat_no`, `bus_1`, `bus_2`, `bus_3`, `bus_4`, `bus_5`, `bus_6`, `customer`, `date`) VALUES
(1, 1, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(2, 2, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(3, 3, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(4, 4, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(5, 5, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(6, 6, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(7, 7, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(8, 8, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(9, 9, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(10, 10, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(11, 11, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(12, 12, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(13, 13, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(14, 14, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(15, 15, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(16, 16, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(17, 17, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(18, 18, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(19, 19, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(20, 20, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(21, 21, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(22, 22, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(23, 23, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(24, 24, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(25, 25, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(26, 26, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(27, 27, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(28, 28, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(29, 29, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(30, 30, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(31, 31, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(32, 32, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(33, 33, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(34, 34, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(35, 35, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(36, 36, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(37, 37, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(38, 38, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(39, 39, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(40, 40, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `id` int(20) NOT NULL,
  `start` varchar(20) NOT NULL,
  `end` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `KM` int(4) NOT NULL,
  `price` bigint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `name` char(30) NOT NULL,
  `l_name` char(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `gender` char(6) NOT NULL,
  `pass1` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `l_name`, `email`, `mobile`, `gender`, `pass1`) VALUES
(1, 'Admin', '', 'book.admin@gmail.com', 7894561230, 'Other', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'monu', 'lakshkar', 'monu@gmail.com', 8966073336, 'Male', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`,`email`,`mobile`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
