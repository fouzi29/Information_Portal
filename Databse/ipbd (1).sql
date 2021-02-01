-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 04:06 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `businfo`
--

CREATE TABLE `businfo` (
  `bid` int(100) NOT NULL,
  `bus_name` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `src` varchar(15) NOT NULL,
  `time` time NOT NULL,
  `dst` varchar(15) NOT NULL,
  `contact` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `businfo`
--

INSERT INTO `businfo` (`bid`, `bus_name`, `city`, `src`, `time`, `dst`, `contact`) VALUES
(1, 'Hanif', 'Rajshahi', 'Rajshahi', '10:00:00', 'Dhaka', '2147483647'),
(2, 'Greenline', 'Rajshahi', 'Rajshahi', '10:00:00', 'Dhaka', '017356789122'),
(3, 'Greenline', 'Rajshahi', 'Rajshahi', '10:00:00', 'Dhaka', '017356789122'),
(4, 'Hanif', 'Naogaon', 'Naogaon', '00:00:10', 'Dhaka', '0174********');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `did` int(11) NOT NULL,
  `doctorn` varchar(25) NOT NULL,
  `city` varchar(10000) NOT NULL,
  `diagn` varchar(35) NOT NULL,
  `time` time NOT NULL,
  `day` varchar(15) NOT NULL,
  `contact` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `doctorn`, `city`, `diagn`, `time`, `day`, `contact`) VALUES
(1, 'mr.x', '', 'name 1', '22:01:00', ' sunday monday', '0179466'),
(2, 'mr.y', '', 'name 2', '23:59:00', ' saturday', '0179466'),
(3, 'Dr.tonmoy', '', 'popular', '09:00:00', ' sunday Tuesday', '01795657378'),
(4, 'Debashis roy', 'Rajshahi', 'Popular hospital', '22:00:00', 'sat-mon', '0174*********');

-- --------------------------------------------------------

--
-- Table structure for table `eduinfo`
--

CREATE TABLE `eduinfo` (
  `id` int(100) NOT NULL,
  `institute_name` varchar(10000) NOT NULL,
  `location` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eduinfo`
--

INSERT INTO `eduinfo` (`id`, `institute_name`, `location`, `contact`) VALUES
(2, 'Seenamto public school', 'Rajshahi', '0174*********'),
(3, 'Naogaon pm school ', 'naogaon', '01735678912'),
(4, 'Dhaka city collage', 'Dhaka', '0174*********'),
(5, 'Naogaon Gvnt. girls school', 'Naogaon', '01735678912'),
(6, 'Naogaon Gvnt. girls school', 'naogaon', '01735678912'),
(7, 'Naogaon Gvnt. girls school', 'naogaon', '01735678912'),
(8, 'Naogaon Gvnt. girls school', 'naogaon', '01735678912'),
(9, 'Naogaon Gvnt. girls school', 'naogaon', '01735678912'),
(10, 'Naogaon Gvnt. girls school', 'naogaon', '01735678912'),
(11, 'Rajshahi Shikkha Board Govt. Model School And College', 'Rajshahi', '01735678912'),
(12, 'Rajshahi Collegiate School & College', 'Rajshahi', '0174*********'),
(13, 'Rajshahi Govt. Model School & College', 'Rajshahi', '01735678912'),
(14, 'Rajshahi B.B. Hindu Academy', 'Rajshahi', '01735678912'),
(15, 'Rajshahi Cantonment Board School and College', 'Rajshahi', '01735678912'),
(16, 'Padma School And College, Rajshahi', 'Rajshahi', '01735678912');

-- --------------------------------------------------------

--
-- Table structure for table `medicalinfo`
--

CREATE TABLE `medicalinfo` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pcontact` varchar(15) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicalinfo`
--

INSERT INTO `medicalinfo` (`id`, `number`, `name`, `city`, `pcontact`, `image`) VALUES
(5, 1001, 'Mohit', 'Asansol', '9832422520', '3.jpg'),
(6, 1002, 'Amir', 'Asansol', '9832420823', '4.jpg'),
(8, 1004, 'Puja', 'Asansol', '9832420840', '9.png'),
(12, 11, 'Rajshahi Medical Collage', 'Rajshahi', '01778904577', '9.png'),
(13, 2, 'Naogaon Medical Collage', 'Naogaon', '017**********', '3.jpg');

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
(1, 'Rajshahi University, Rajshahi', 'Rajshahi', '0174*********', 'The University of Rajshahi, also known as Rajshahi University', 0x3c703e3c696d67207372633d22696d672f52552e6a70672220616c743d2252616a736861686920556e6976657273697479222077696474683d2238303022206865696768743d2233353022202f3e3c2f703e),
(2, 'Buddho Bihar Paharpur ', 'Naogaon, Rajshahi', '0174*********', '<p><strong>Paharpur</strong>&nbsp;vihara is in&nbsp;<strong>Naogaon</strong>, Bangladesh. Somapura Mahavihara (Bengali: à¦¸à§‹à¦®à¦ªà§à¦° à¦®à¦¹à¦¾à¦¬à¦¿à¦¹à¦¾à¦°, romanized: Shompur M&ocirc;habihar) in&nbsp;<strong>Paharpur</strong>, Badalgachhi Upazila', 0x3c703e3c696d67207372633d22696d672f50616861727075722e6a70672220616c743d2253686f6d707572204269686172205061686172707572222077696474683d2238303022206865696768743d2233353022202f3e3c2f703e),
(3, 'Padma T Badh', 'Rajshahi', '0174*********', '<p>Padma garden / A beautiful view of Padma River / Rajshahi, Bangladesh. à¦°à¦¾à¦œà¦¶à¦¾à¦¹à§€à¦° à¦¦à¦°à§à¦¶à¦¨à§€à¦¯à¦¼ à¦¸à§à¦¥à¦¾à¦¨à¦—à§à¦²à§‹à¦° à¦®à¦§à§à¦¯à§‡ à¦…à¦¨à§à¦¯à¦¤à¦® à¦ªà¦¦à§à¦®à¦¾ à¦¨à¦¦à§€à¦° à¦ªà¦¾à¦° à¦¬à¦¾ à¦ªà¦¦à§à¦®à¦¾ à¦—', 0x3c703e3c696d67207372633d22696d672f646f776e6c6f61642e6a70672220616c743d225061646d6120542d62616468222077696474683d2238303022206865696768743d2234303022202f3e3c2f703e);

-- --------------------------------------------------------

--
-- Table structure for table `traininfo`
--

CREATE TABLE `traininfo` (
  `tid` int(100) NOT NULL,
  `train_name` varchar(100) NOT NULL,
  `city` varchar(15) NOT NULL,
  `off_day` varchar(100) NOT NULL,
  `src` varchar(100) NOT NULL,
  `time` time NOT NULL,
  `dst` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traininfo`
--

INSERT INTO `traininfo` (`tid`, `train_name`, `city`, `off_day`, `src`, `time`, `dst`) VALUES
(2, 'Padma', 'Rajshahi', 'Thursday', 'Rajshahi', '06:00:00', 'Shantahar'),
(3, 'Padma Express', 'Dhaka', 'Thusday', 'Dhaka', '10:00:00', 'Rajshahi'),
(4, 'Dhumketo', 'Dhaka', 'Monday', 'Dhaka', '10:00:00', 'Dhaka'),
(5, 'Dhumketo', 'Dhaka', 'Monday', 'Dhaka', '10:00:00', 'Dhaka'),
(6, 'Dhumketo', 'Dhaka', 'Monday', 'Dhaka', '10:00:00', 'Dhaka'),
(7, 'Dhumketo', 'Dhaka', 'Monday', 'Dhaka', '10:00:00', 'Dhaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `businfo`
--
ALTER TABLE `businfo`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `eduinfo`
--
ALTER TABLE `eduinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicalinfo`
--
ALTER TABLE `medicalinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourist`
--
ALTER TABLE `tourist`
  ADD PRIMARY KEY (`tsid`);

--
-- Indexes for table `traininfo`
--
ALTER TABLE `traininfo`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `businfo`
--
ALTER TABLE `businfo`
  MODIFY `bid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `eduinfo`
--
ALTER TABLE `eduinfo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `medicalinfo`
--
ALTER TABLE `medicalinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tourist`
--
ALTER TABLE `tourist`
  MODIFY `tsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `traininfo`
--
ALTER TABLE `traininfo`
  MODIFY `tid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
