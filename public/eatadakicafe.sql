-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2017 at 12:45 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `OrderID` varchar(255) NOT NULL,
  `Barangay` varchar(255) NOT NULL,
  `Street` varchar(255) NOT NULL,
  `House_No` varchar(255) NOT NULL
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
(5, 'zeddiegay', 'asdfdsf', 'asdfdasf', '1232-10-23', 'Female', 'sdf', 'asdf', 123, 'asdf', 1321321),
(6, 'aldo', 'aldo', 'the legend', '1997-11-29', 'Male', 'aldo', 'aldo', 192, 'asdfdsf', 1233);

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
('aldo', 'aldo'),
('zeddie', 'zeddie'),
('zeddiegay', 'zeddiegay');

-- --------------------------------------------------------

--
-- Table structure for table `orderinfo`
--

CREATE TABLE `orderinfo` (
  `id` int(255) NOT NULL,
  `orderid` varchar(255) NOT NULL,
  `customerID` varchar(255) NOT NULL,
  `foodID` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `orderinfo`
--
ALTER TABLE `orderinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerinfo`
--
ALTER TABLE `customerinfo`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orderinfo`
--
ALTER TABLE `orderinfo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
