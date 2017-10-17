-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2017 at 07:52 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `user-registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `billinginfo`
--

CREATE TABLE IF NOT EXISTS `billinginfo` (
  `BillingID` varchar(20) NOT NULL,
  `CustomerID` varchar(20) NOT NULL,
  `OrderID` varchar(255) NOT NULL,
  `Barangay` varchar(255) NOT NULL,
  `Street` varchar(255) NOT NULL,
  `House_No` varchar(255) NOT NULL,
  PRIMARY KEY (`BillingID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billinginfo`
--

INSERT INTO `billinginfo` (`BillingID`, `CustomerID`, `OrderID`, `Barangay`, `Street`, `House_No`) VALUES
('', 'test', '1', 'asdasdasd', 'dad', '');

-- --------------------------------------------------------

--
-- Table structure for table `customerinfo`
--

CREATE TABLE IF NOT EXISTS `customerinfo` (
  `customerID` int(11) NOT NULL AUTO_INCREMENT,
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
  `Act_Status` int(255) NOT NULL,
  PRIMARY KEY (`customerID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `customerinfo`
--

INSERT INTO `customerinfo` (`customerID`, `username`, `Firstname`, `Lastname`, `Birthday`, `Gender`, `Barangay`, `Street`, `House_No`, `Email`, `Mobile_No`, `Act_Status`) VALUES
(1, 'latina', 'Axl', 'Cuyugan', '1998-02-21', 'Male', 'Tetuan', 'Don Toribio st.', 1, 'axeguns@gmail.com', 2147483647, 0);

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
  `guestID` int(11) NOT NULL,
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

--
-- Dumping data for table `guestinfo`
--

INSERT INTO `guestinfo` (`guestID`, `Firstname`, `Lastname`, `Birthday`, `Gender`, `Barangay`, `Street`, `House_No`, `Email`, `Mobile_No`) VALUES
(1, 'adasd', 'asda', '2322-05-02', 'Male', 'asdasdasd', 'dad', 0, 'adasdas', 0),
(2, 'dsad', 'sad', '0232-09-23', 'Male', 'asdsad', '3223', 32232, 'dsadasd', 0),
(3, 'asd', 'asdq', '0000-00-00', 'Gender', 'qwel', 'kalnd', 0, 'lkner', 0),
(4, 'rqw', ',.', '0000-00-00', 'Gender', '', '', 0, '', 0),
(5, 'lskdjf', 'kljsdf', '0000-00-00', 'Gender', '', '', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`) VALUES
('asddd', 'asddd'),
('asdf', 'asd'),
('latina', 'bustylatina');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `username`, `msg`) VALUES
(11, 'Axl', 'hey there dogo'),
(12, 'Tan', 'Hey'),
(13, 'Axl', 'What ya doing?'),
(14, 'Axl', 'You are noob'),
(15, 'Tan', 'You are noob'),
(16, 'Tan', 'hello'),
(17, 'Tan', 'You are noob');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `orderinfo`
--

INSERT INTO `orderinfo` (`id`, `orderid`, `customerID`, `foodName`, `quantity`, `price`) VALUES
(1, '1', '', 'asd', '21', '2333'),
(2, '1', '', 'qwe', '13', '155'),
(3, '1', '', 'zxc', '15', '1567'),
(4, '2', '', '', '', ''),
(5, '3', '3', '', '', ''),
(6, '4', '4', '', '', ''),
(7, '5', '5', '', '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `paymentmethod`
--

INSERT INTO `paymentmethod` (`id`, `billingid`, `p_method`, `c_type`, `c_num`, `s_num`, `exp_date`) VALUES
(4, '1', 'card', 'MasterCard', '23223', '232', '2017-09-07-2017-09-22'),
(5, '2', 'card', 'MasterCard', '2323', '3223', '2017-09-01-2017-09-20'),
(6, '3', 'card', 'MasterCard', '', '', '-'),
(7, '4', 'card', 'MasterCard', '', '', '-'),
(8, '5', 'card', 'MasterCard', '', '', '-');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'Tan', '123'),
(2, 'Axl', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
