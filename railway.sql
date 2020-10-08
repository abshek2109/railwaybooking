-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2018 at 07:42 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railway`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('rohan', 'rohan'),
('shiva', 'shivaji');

-- --------------------------------------------------------

--
-- Table structure for table `deleted`
--

CREATE TABLE `deleted` (
  `train_no` int(20) NOT NULL,
  `train_name` varchar(20) NOT NULL,
  `frm` varchar(20) NOT NULL,
  `too` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deleted`
--

INSERT INTO `deleted` (`train_no`, `train_name`, `frm`, `too`) VALUES
(8888, 'spe', 'davangere', 'bengaluru'),
(2314, 'exp', 'bengaluru', 'davangere');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `maritialstatus` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `mnumber` int(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` int(10) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `gender`, `maritialstatus`, `country`, `mnumber`, `address`, `pincode`, `state`) VALUES
('rohan', 'rohan', 'Male', 'Married', 'india', 123456789, 'davangere', 123439, 'karnataka');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `train_no` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(5) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `cnumber` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`train_no`, `name`, `age`, `gender`, `cnumber`) VALUES
(16210, 'yj suprith', 20, 'male', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `train_no` int(10) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `cnumber` int(20) NOT NULL,
  `emonth` varchar(10) NOT NULL,
  `eyear` year(4) NOT NULL,
  `cvv` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`train_no`, `cname`, `cnumber`, `emonth`, `eyear`, `cvv`) VALUES
(16210, 'sup', 123456, 'feef', 2020, 752);

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `train_no` int(10) NOT NULL,
  `train_name` varchar(50) NOT NULL,
  `from1` varchar(20) NOT NULL,
  `to1` varchar(20) NOT NULL,
  `arrv_time` time(6) NOT NULL,
  `dep_time` time(6) NOT NULL,
  `fare` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`train_no`, `train_name`, `from1`, `to1`, `arrv_time`, `dep_time`, `fare`) VALUES
(12345, 'RANI-CHENNAMA', 'davangere', 'bengaluru', '16:15:00.000000', '21:45:00.000000', 200),
(12351, 'JAN-SHATABADI', 'davangere', 'bengaluru', '18:15:00.000000', '00:45:00.000000', 250),
(16210, 'AJMER EXPRESS', 'mysuru', 'davangere', '18:45:00.000000', '00:35:00.000000', 250),
(16229, 'MALGUDI EXPRESS', 'mysuru', 'bengaluru', '06:45:00.000000', '09:35:00.000000', 75),
(16535, 'GOLGUMAZ EXPRESS', 'mysuru', 'davangere', '15:45:00.000000', '00:35:00.000000', 250),
(34567, 'MYSURU SPECIAL', 'davangere', 'mysuru', '01:00:00.000000', '03:45:00.000000', 300),
(35678, 'MYSURU EXPRESS', 'davangere', 'mysuru', '08:00:00.000000', '13:45:00.000000', 200),
(52236, 'CHALUKYA EXPRESS', 'bengaluru', 'davangere', '17:30:00.000000', '22:25:00.000000', 200),
(54263, 'vvhv', 'bengaluru', 'davangere', '16:56:00.000000', '05:06:00.000000', 888),
(78552, 'KAVERI-EXPRESS', 'bengaluru', 'mysuru', '07:00:00.000000', '09:00:00.000000', 200),
(78578, 'VISHVANAMA', 'bengaluru', 'davangere', '13:45:00.000000', '18:40:00.000000', 200),
(79978, 'BENGALURU-MYSORE', 'bengaluru', 'mysuru', '12:45:00.000000', '14:40:00.000000', 200),
(96321, 'sam', 'mysuru', 'davangere', '08:35:00.000000', '17:26:24.000000', 300),
(99874, 'CHAMUNDI EXPRESS', 'mysuru', 'bengaluru', '05:50:00.000000', '08:45:00.000000', 100);

--
-- Triggers `train`
--
DELIMITER $$
CREATE TRIGGER `add` AFTER INSERT ON `train` FOR EACH ROW INSERT INTO updated VALUES(new.train_no,new.train_name,new.from1,new.to1)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `del` BEFORE DELETE ON `train` FOR EACH ROW INSERT INTO deleted VALUES(old.train_no,old.train_name,old.from1,old.to1)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `updated`
--

CREATE TABLE `updated` (
  `train_no` int(20) NOT NULL,
  `train_name` varchar(20) NOT NULL,
  `frm` varchar(20) NOT NULL,
  `too` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updated`
--

INSERT INTO `updated` (`train_no`, `train_name`, `frm`, `too`) VALUES
(0, 'train_name', 'from1', 'to'),
(96321, 'sam', 'mysuru', 'davangere'),
(54263, 'vvhv', 'bengaluru', 'davangere');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD KEY `train_no` (`train_no`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`train_no`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `passenger`
--
ALTER TABLE `passenger`
  ADD CONSTRAINT `passenger_ibfk_1` FOREIGN KEY (`train_no`) REFERENCES `train` (`train_no`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
