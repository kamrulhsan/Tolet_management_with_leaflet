-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 04, 2021 at 07:11 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tolet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `ID` int(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`ID`, `username`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `ID` int(250) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `mobile_no` varchar(250) NOT NULL,
  `agent_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`ID`, `first_name`, `last_name`, `mobile_no`, `agent_image`) VALUES
(2, 'NAZMUN', 'NAHAR', '01819019871', '300_300.jpg'),
(3, 'NAZMUN', 'NAHAR', '01819019871', '300_300.jpg'),
(4, 'kamrul', 'hasan', '01819019871', 'New_fomal.jpg'),
(7, 'abhijit', 'das', '0151312132', 'Photo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(250) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile_no` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `first_name`, `last_name`, `email`, `mobile_no`, `pass`) VALUES
(2, 'Harangi Refuzee Para govt', 'school', 'kamrul122.bd@gmail.com', '+8801812598624', '12');

-- --------------------------------------------------------

--
-- Table structure for table `rent_post`
--

CREATE TABLE `rent_post` (
  `ID` int(250) NOT NULL,
  `building_name` varchar(250) NOT NULL,
  `coordinate` varchar(250) NOT NULL,
  `bed` varchar(250) NOT NULL,
  `bath` varchar(250) NOT NULL,
  `floor` varchar(250) NOT NULL,
  `flat_name` varchar(250) NOT NULL,
  `image_name` varchar(250) NOT NULL,
  `size` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `image_name1` varchar(250) DEFAULT NULL,
  `image_name2` varchar(250) DEFAULT NULL,
  `image_name3` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rent_post`
--

INSERT INTO `rent_post` (`ID`, `building_name`, `coordinate`, `bed`, `bath`, `floor`, `flat_name`, `image_name`, `size`, `price`, `image_name1`, `image_name2`, `image_name3`) VALUES
(1, 'Green Den', '23.761466, 90.431439', '2', '2', '1', 'A2', 'wallhaven-e7ek7k.jpg', 'A2', '25000', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sell_post`
--

CREATE TABLE `sell_post` (
  `ID` int(250) NOT NULL,
  `building_name` varchar(250) NOT NULL,
  `coordinate` varchar(250) NOT NULL,
  `bed` varchar(250) NOT NULL,
  `bath` varchar(250) NOT NULL,
  `floor` varchar(250) NOT NULL,
  `flat_name` varchar(250) NOT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `size` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `image_name1` varchar(250) DEFAULT NULL,
  `image_name2` varchar(250) DEFAULT NULL,
  `image_name3` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sell_post`
--

INSERT INTO `sell_post` (`ID`, `building_name`, `coordinate`, `bed`, `bath`, `floor`, `flat_name`, `image_name`, `size`, `price`, `image_name1`, `image_name2`, `image_name3`) VALUES
(4, 'Wahab', '23.780156, 90.430009', '2', '1', '6', 'F3', 'Screenshot from 2021-09-17 23-35-44.png', '122', '122', 'New Doc 2017-07-22_1.jpg', 'error.png', ''),
(5, 'Friends Tower', '23.781123, 90.428397', '2', '2', '1', 'F3', 'wallhaven-e7ek7k.jpg', 'F3', '11', 'wallhaven-5w26x1.jpg', '', ''),
(6, 'Green Den', '23.811891, 90.365319', '2', '1', '2', 'A2', '2020-10-04-20-53-47-wallhaven-83235k.png', '1200', '2500000', 'wallhaven-5w26x1.jpg', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rent_post`
--
ALTER TABLE `rent_post`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sell_post`
--
ALTER TABLE `sell_post`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rent_post`
--
ALTER TABLE `rent_post`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sell_post`
--
ALTER TABLE `sell_post`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
