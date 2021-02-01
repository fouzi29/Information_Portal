-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2020 at 11:15 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `tourist`
--

CREATE TABLE `tourist` (
  `tsid` int(11) NOT NULL,
  `spotname` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL,
  `tspic` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourist`
--

INSERT INTO `tourist` (`tsid`, `spotname`, `location`, `contact`, `description`, `tspic`) VALUES
(1, 'Varendra Research Museum', 'hetam kha ,boromosjid mor,rajshahi', 'http://www.ru.ac.bd/?page_id=1', ' Varendra Museum (Bengali: à¦¬à¦°à§‡à¦¨à§à¦¦à§à¦° à¦œà¦¾à¦¦à§à¦˜à¦°) is a museum, research centre, and popular visitor attraction at the heart of Rajshahi and maintained by Rajshahi University in Bangladesh. It is considered the oldest museum in Bangla', 0x76726d312e6a7067),
(3, 'Central shaheed minar', 'RU campus', 'Rajshahi university', ' wevwevwv', 0x52616a73686168695f556e69766572736974795f536861686565645f4d696e61722c5f52616a73686168692e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tourist`
--
ALTER TABLE `tourist`
  ADD PRIMARY KEY (`tsid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tourist`
--
ALTER TABLE `tourist`
  MODIFY `tsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
