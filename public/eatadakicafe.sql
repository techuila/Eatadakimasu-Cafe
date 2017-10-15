-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2017 at 11:31 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eatadakicafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `billinginfo`
--

CREATE TABLE IF NOT EXISTS `billinginfo` (
  `BillingID` int(255) NOT NULL AUTO_INCREMENT,
  `CustomerID` varchar(20) NOT NULL,
  `OrderID` varchar(255) NOT NULL,
  `Barangay` varchar(255) NOT NULL,
  `Street` varchar(255) NOT NULL,
  `House_No` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  PRIMARY KEY (`BillingID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

-- --------------------------------------------------------

--
-- Table structure for table `customerinfo`
--

CREATE TABLE IF NOT EXISTS `customerinfo` (
  `customerID` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Birthday` date NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Barangay` varchar(255) NOT NULL,
  `Street` varchar(255) NOT NULL,
  `House_No` int(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mobile_No` int(255) NOT NULL,
  PRIMARY KEY (`customerID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerinfo`
--

INSERT INTO `customerinfo` (`customerID`, `username`, `Firstname`, `Lastname`, `Birthday`, `Gender`, `Barangay`, `Street`, `House_No`, `Email`, `Mobile_No`) VALUES
('1', 'latina', 'Axl', 'Cuyugan', '1998-02-21', 'Male', 'Tetuan', 'Don Toribio st.', 1, 'axeguns@gmail.com', 2147483647),
('32', 'Admin', 'Noriel', 'Francisco', '2017-10-17', 'Male', 'Zambowood', 'Zambowood', 232, 'nlim@gmail.com', 917265384),
('C-1', 'asds', 'asd', 'ads', '2023-10-23', 'Gender', 'tetuan', 'tetuan', 32, 'sdfsdf@gmail.com', 32323),
('C-2', 'zeddie', 'latina', 'latino', '0000-00-00', 'Gender', 'tetuan', 'tetuan', 132, 'richard_villano@yahoo.com', 323232);

-- --------------------------------------------------------

--
-- Table structure for table `foodinfos`
--

CREATE TABLE IF NOT EXISTS `foodinfos` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `foodName` varchar(255) NOT NULL,
  `foodDesc` text NOT NULL,
  `foodPrice` varchar(255) NOT NULL,
  `foodImg` varchar(255) NOT NULL,
  `position_x` varchar(255) NOT NULL,
  `class_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `foodinfos`
--

INSERT INTO `foodinfos` (`id`, `foodName`, `foodDesc`, `foodPrice`, `foodImg`, `position_x`, `class_name`) VALUES
(1, 'Curry', 'Curry sauce is served on top of cooked rice to make curry rice.', '100', 'curry.jpg', '-10px', 'curry'),
(2, 'Donburi', 'Fish, meat, vegetables or other ingredients simmered together and served over rice.', '80', 'donburi.jpg', '-30px', 'donburi'),
(3, 'Japanese Cakey', 'Japanese sponge cake made of sugar, flour, eggs, and starch syrup. ', '30', 'japanesecake.jpg', '-10px', 'cakey'),
(4, 'Karaage', 'Seasoned with garlic and ginger along with soy sauce, coated lightly with flour, and deep fried.', '70', 'karaage.jpg', '0', 'karaage'),
(5, 'Omurice', 'Omelette made with fried rice and usually topped with ketchup.', '50', 'omurice.jpg', '-30px', 'omurice'),
(6, 'Onigiri', 'Rice formed into triangular or oval shapes and usually wrapped in nori (seaweed).', '50', 'onigiri.jpg', '0', 'onigiri'),
(7, 'Ramen', 'Yellowish broth made with plenty of salt and any combination of chicken, vegetables, and seaweed.', '120', 'ramen.jpg', '-15px', 'ramen'),
(8, 'Chocolate Pudding', 'Chocolate puddings are a class of desserts with chocolate flavors. There are two main types: a boiled then chilled dessert, texturally a custard set with starch.', '100', 'pudding.jpg', '-35px', 'pudding'),
(9, 'Tempura', 'Seafood that have been battered and deep fried. Accompanied by shredded cabbage and sauce.', '60', 'tempura.jpg', '-50px', 'tempura'),
(10, 'Tonkatsu', 'Breaded, deep-fried pork cutlet served in bite-sized pieces and accompanied by shredded cabbage.', '80', 'tonkatsu.jpg', '-33px', 'tonkatsu');

-- --------------------------------------------------------

--
-- Table structure for table `guestinfo`
--

CREATE TABLE IF NOT EXISTS `guestinfo` (
  `guestID` varchar(11) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Birthday` date NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Barangay` varchar(255) NOT NULL,
  `Street` varchar(255) NOT NULL,
  `House_No` int(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mobile_No` int(255) NOT NULL,
  PRIMARY KEY (`guestID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `img_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `img_name`) VALUES
(1, '04.jpg'),
(2, '04.jpg'),
(3, '04.jpg'),
(4, '04.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Usertype` varchar(255) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`, `Usertype`) VALUES
('Admin', 'Admin', 'Admin'),
('asds', '09', 'Customer'),
('latina', 'bustylatina', ''),
('zeddie', '123', 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `orderinfo`
--

CREATE TABLE IF NOT EXISTS `orderinfo` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `orderid` varchar(255) NOT NULL,
  `customerID` varchar(255) NOT NULL,
  `foodName` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethod`
--

CREATE TABLE IF NOT EXISTS `paymentmethod` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `billingid` varchar(255) NOT NULL,
  `p_method` varchar(255) NOT NULL,
  `c_type` varchar(255) NOT NULL,
  `c_num` varchar(255) NOT NULL,
  `s_num` varchar(255) NOT NULL,
  `exp_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `paymentmethod`
--

INSERT INTO `paymentmethod` (`id`, `billingid`, `p_method`, `c_type`, `c_num`, `s_num`, `exp_date`) VALUES
(29, '26', 'card', 'MasterCard', '', '', '-'),
(30, '27', 'card', 'MasterCard', '', '', '-'),
(31, '28', 'card', 'MasterCard', '', '', '-'),
(32, '29', 'card', 'MasterCard', '', '', '-'),
(33, '30', 'card', 'MasterCard', '', '', '-'),
(34, '31', 'card', 'MasterCard', '', '', '-'),
(35, '32', 'card', 'MasterCard', '', '', '-'),
(36, '33', 'card', 'MasterCard', '', '', '-'),
(37, '1', 'card', 'MasterCard', '2323', '3232', ' - '),
(38, '2', 'card', 'MasterCard', '232321', '0505', ' - '),
(39, '3', 'card', 'VisaCard', '0909', '0505', '2017-10-03 - 2017-10-31'),
(40, '4', 'card', 'MasterCard', '123', '1233', '2017-10-02 - 2017-10-17'),
(41, '5', 'card', 'MasterCard', '2323', '222', ' - '),
(42, '6', 'card', 'MasterCard', '', '', ' - '),
(43, '7', 'card', 'MasterCard', '', '', ' - '),
(44, '8', 'card', 'MasterCard', '', '', ' - '),
(45, '9', 'card', 'MasterCard', '', '', ' - '),
(46, '10', 'card', 'MasterCard', '', '', ' - '),
(47, '11', 'card', 'MasterCard', '', '', ' - '),
(48, '12', 'card', 'MasterCard', '', '', ' - '),
(49, '13', 'card', 'MasterCard', '', '', ' - '),
(50, '14', 'card', 'MasterCard', '', '', ' - '),
(51, '15', 'card', 'MasterCard', '232', '23', ' - '),
(52, '15', 'card', 'MasterCard', '', '', ' - '),
(53, '15', 'card', 'MasterCard', '', '', ' - '),
(54, '15', 'card', 'MasterCard', '', '', ' - '),
(55, '16', 'card', 'MasterCard', '', '', ' - '),
(56, '16', 'card', 'MasterCard', '', '', ' - ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
