-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2017 at 12:07 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eatadakicafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `billinginfo`
--

CREATE TABLE `billinginfo` (
  `BillingID` varchar(20) NOT NULL,
  `CustomerID` varchar(20) NOT NULL,
  `Barangay` varchar(255) NOT NULL,
  `Street` varchar(255) NOT NULL,
  `House_No` int(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mobile_No` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customerinfo`
--

CREATE TABLE `customerinfo` (
  `CustomerID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Birthday` date NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Barangay` varchar(255) NOT NULL,
  `Street` varchar(255) NOT NULL,
  `House_No` int(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mobile_No` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerinfo`
--

INSERT INTO `customerinfo` (`CustomerID`, `Username`, `Firstname`, `Lastname`, `Birthday`, `Gender`, `Barangay`, `Street`, `House_No`, `Email`, `Mobile_No`) VALUES
(5, 'zeddiegay', 'asdfdsf', 'asdfdasf', '1232-10-23', 'Female', 'sdf', 'asdf', 123, 'asdf', 1321321);

-- --------------------------------------------------------

--
-- Table structure for table `foodinfo`
--

CREATE TABLE `foodinfo` (
  `FoodID` varchar(20) NOT NULL,
  `FoodName` varchar(50) NOT NULL,
  `FoodDesc` varchar(100) NOT NULL,
  `Price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`) VALUES
('zeddie', 'zeddie'),
('zeddiegay', 'zeddiegay');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billinginfo`
--
ALTER TABLE `billinginfo`
  ADD PRIMARY KEY (`BillingID`);

--
-- Indexes for table `customerinfo`
--
ALTER TABLE `customerinfo`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `foodinfo`
--
ALTER TABLE `foodinfo`
  ADD PRIMARY KEY (`FoodID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerinfo`
--
ALTER TABLE `customerinfo`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
