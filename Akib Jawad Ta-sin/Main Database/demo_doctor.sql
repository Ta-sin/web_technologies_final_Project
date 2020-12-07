-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2020 at 10:27 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor_info`
--

CREATE TABLE `doctor_info` (
  `id` int(5) NOT NULL,
  `Full name` varchar(50) NOT NULL,
  `Number` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `BMDC` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor_info`
--

INSERT INTO `doctor_info` (`id`, `Full name`, `Number`, `Email`, `Password`, `BMDC`) VALUES
(19, 'kief', 1819619500, 'sahrinmam@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 654321),
(20, 'Tasin', 1829058479, 'akibtasin707@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `health-tips`
--

CREATE TABLE `health-tips` (
  `id` int(6) NOT NULL,
  `About` varchar(20) NOT NULL,
  `Headline` varchar(50) NOT NULL,
  `Advise` varchar(500) NOT NULL,
  `Contact` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `package-details`
--

CREATE TABLE `package-details` (
  `id` int(11) NOT NULL,
  `PackageName` varchar(20) NOT NULL,
  `PackageDetails` varchar(50) NOT NULL,
  `PackagePrice` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor_info`
--
ALTER TABLE `doctor_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Full name` (`Full name`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Number` (`Number`),
  ADD UNIQUE KEY `BMDC` (`BMDC`);

--
-- Indexes for table `health-tips`
--
ALTER TABLE `health-tips`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Headline` (`Headline`);

--
-- Indexes for table `package-details`
--
ALTER TABLE `package-details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor_info`
--
ALTER TABLE `doctor_info`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `health-tips`
--
ALTER TABLE `health-tips`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `package-details`
--
ALTER TABLE `package-details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
