-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2021 at 10:38 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easypay`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `name` varchar(50) NOT NULL,
  `accno` int(50) NOT NULL,
  `ifsc` varchar(50) NOT NULL DEFAULT 'EP010203',
  `balance` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`name`, `accno`, `ifsc`, `balance`) VALUES
('keerthana', 12345678, 'EP010203', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('user','manager') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`name`, `email`, `dob`, `gender`, `phone`, `address`, `password`, `role`) VALUES
('keerthana', 'keerthana@gmail.com', '2021-12-01', 'female', 1122334455, '116/A,7th Cross, E B Colony, Vadavalli , Coimbatore', 'keerthana', 'user'),
('vadhani', 'vadhani@gmail.com', '2021-12-21', 'female', 123456789, '100,Anna Nagar,Chennai', 'vadhani', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `homeloan`
--

CREATE TABLE `homeloan` (
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `pob` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `community` varchar(50) NOT NULL,
  `licenceno` int(50) NOT NULL,
  `houseno` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `landmark` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `permanentaddress` varchar(50) NOT NULL,
  `phouse` varchar(50) NOT NULL,
  `pstreet` varchar(50) NOT NULL,
  `plandmark` varchar(50) NOT NULL,
  `pcity` varchar(50) NOT NULL,
  `ppincode` int(50) NOT NULL,
  `pstate` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `employeename` varchar(50) NOT NULL,
  `yoe` int(50) NOT NULL,
  `phoneno` int(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `desigation` varchar(50) NOT NULL,
  `businessname` varchar(50) NOT NULL,
  `organisationtype` varchar(50) NOT NULL,
  `action` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homeloan`
--

INSERT INTO `homeloan` (`name`, `dob`, `gender`, `nationality`, `pob`, `religion`, `community`, `licenceno`, `houseno`, `street`, `landmark`, `city`, `pincode`, `state`, `permanentaddress`, `phouse`, `pstreet`, `plandmark`, `pcity`, `ppincode`, `pstate`, `occupation`, `employeename`, `yoe`, `phoneno`, `department`, `desigation`, `businessname`, `organisationtype`, `action`) VALUES
('keerthana', '2001-06-11', 'female', 'Indian', 'Chennai', 'Hindu', 'BC', 432511, '116', 'Anna nagar', 'Anna nagar', 'Chennai', 602106, 'TamilNadu', 'Yes', '116', 'Anna nagar', 'Anna nagar', 'Chennai', 602106, 'TamilNadu', 'Software Engineer', 'Keerthana', 2, 213456789, 'User Interface', 'Frontend developer', 'Accenture', 'MNC', 'Bending');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `accno` int(50) NOT NULL,
  `tname` varchar(50) NOT NULL,
  `taccno` int(50) NOT NULL,
  `tamount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`accno`, `tname`, `taccno`, `tamount`) VALUES
(12345678, 'vadhani', 87654321, 1000),
(12345678, 'veena', 2345671, 100),
(12345678, 'sd', 121212, 10),
(12345678, 'sd', 121212, 10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
