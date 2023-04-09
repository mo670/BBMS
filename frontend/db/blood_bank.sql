-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 02, 2022 at 08:06 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(100) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `age` int(100) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `unit` int(100) NOT NULL,
  `disease` varchar(255) NOT NULL,
  `contact` int(100) NOT NULL,
  `location` varchar(255) NOT NULL,
  `last_donation` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `fullname`, `age`, `blood_group`, `unit`, `disease`, `contact`, `location`, `last_donation`) VALUES
(1, 'Fairuz Nashra', 33, 'B-', 3, 'nothing', 198352753, 'dhaka', '2022-04-02 07:56:51.000000');

-- --------------------------------------------------------

--
-- Table structure for table `new`
--

CREATE TABLE `new` (
  `id` int(100) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `age` int(100) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `disease` varchar(255) NOT NULL,
  `contact` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new`
--

INSERT INTO `new` (`id`, `fullname`, `age`, `blood_group`, `unit`, `disease`, `contact`) VALUES
(1, 'Fairuz Nashra', 22, 'A+', '2', 'nothing', 198352753),
(2, 'Fairuz Nashra', 22, 'A+', '2', 'nothing', 198352753),
(3, 'Fairuz Nashra', 33, 'A+', '3', 'nothing', 198352753),
(4, 'shakib ', 4, 'A+', '2', 'nothing', 198352753);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(100) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `age` int(100) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `unit` int(100) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `contact` int(100) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `fullname`, `age`, `blood_group`, `unit`, `reason`, `contact`, `location`) VALUES
(1, 'shakib ', 34, 'A+', 3, 'anemia', 178352753, 'khulna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new`
--
ALTER TABLE `new`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact` (`contact`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `new`
--
ALTER TABLE `new`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
