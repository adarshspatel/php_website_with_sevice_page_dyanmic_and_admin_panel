-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 11:36 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website1`
--

-- --------------------------------------------------------

--
-- Table structure for table `res_adminlogin_master`
--

CREATE TABLE `res_adminlogin_master` (
  `almid` int(11) NOT NULL,
  `amobile` varchar(100) NOT NULL,
  `apassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `res_adminlogin_master`
--

INSERT INTO `res_adminlogin_master` (`almid`, `amobile`, `apassword`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `res_service_master`
--

CREATE TABLE `res_service_master` (
  `smid` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `res_service_master`
--

INSERT INTO `res_service_master` (`smid`, `sname`) VALUES
(1, 'Website Development'),
(2, 'Android App Development'),
(5, 'Training');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `res_adminlogin_master`
--
ALTER TABLE `res_adminlogin_master`
  ADD PRIMARY KEY (`almid`);

--
-- Indexes for table `res_service_master`
--
ALTER TABLE `res_service_master`
  ADD PRIMARY KEY (`smid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `res_adminlogin_master`
--
ALTER TABLE `res_adminlogin_master`
  MODIFY `almid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `res_service_master`
--
ALTER TABLE `res_service_master`
  MODIFY `smid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
