-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 03:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kings`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `clothes`
--

CREATE TABLE `clothes` (
  `code` varchar(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `fabric` varchar(255) NOT NULL,
  `size` varchar(11) NOT NULL,
  `price` varchar(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `fashion` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `cost_price` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clothes`
--

INSERT INTO `clothes` (`code`, `name`, `brand`, `fabric`, `size`, `price`, `image`, `fashion`, `category`, `cost_price`) VALUES
('le0s', 'Trouser', 'NorthFace', 'Cotton', 'S,M,L,XL', '1000', '1556744808.jpg', 'men', 'pant', NULL),
('lvui', 'Skull Tshirt', 'Gorkhali', 'Cotton', 'S,M,L,XL', '400', '1556745495.jpg', 'men', 't-shirt', NULL),
('m8yc', 'Wind Cheater Jacket', 'NorthFace', 'Silicon', 'S,M,L,XL', '1500', '1556744091.jpg', 'men', 'jacket', NULL),
('mwid', 'Hoodie', 'Jack and Jones', 'Cotton', 'S,M,L,XL', '1200', '1556744047.jpg', 'men', 'jacket', NULL),
('niq3', 'Jeans Jacket', 'Jack and Jones', 'Jeans', 'S,M,L,XL', '5000', '1556744205.jpg', 'men', 'jacket', NULL),
('o4a0', 'Primal Tshirt', 'Jack and Jones', 'Cotton', 'S,M,L,XL', '700', '1556745956.jpg', 'men', 't-shirt', NULL),
('ooap', 'Plain Tshirt', 'Jack and Jones', 'Cotton', 'S,M,L,XL', '700', '1556745702.jpg', 'men', 't-shirt', NULL),
('oofk', 'Trust Tshirt', 'Jack and Jones', 'Cotton', 'S,M,L,XL', '4000', '1556745666.jpg', 'men', 't-shirt', NULL),
('ox6j', 'Trouser', 'NorthFace', 'Silicon', 'S,M,L,XL', '3000', '1556744845.jpg', 'men', 'pant', NULL),
('pav1', 'Cotton Shirt', 'Jack and Jones', 'Cotton', 'S,M,L,XL', '5000', '1556745031.jpg', 'men', 'shirt', NULL),
('qyhf', 'Check Shirt', 'Raymond', 'Cotton', 'S,M,L,XL', '500', '1556745343.jpg', 'men', 'shirt', NULL),
('rh4v', 'Titans Tshirt', 'Latido', 'Cotton', 'S,M,L,XL', '500', '1556745755.jpg', 'men', 't-shirt', NULL),
('rwaq', 'Germany Trust Tshirt', 'Raymond', 'Cotton', 'S,M,L,XL', '600', '1556745833.jpg', 'men', 't-shirt', NULL),
('rzuk', 'Boxer Pant', 'NorthFace', 'Cotton', 'S,M,L,XL', '1000', '1556744563.jpg', 'men', 'pant', NULL),
('s5lf', 'Germany Tshirt', 'Calvin Clein', 'Cotton', 'S,M,L,XL', '600', '1556745528.jpg', 'men', 't-shirt', NULL),
('s68u', 'Jogger', 'NorthFace', 'Cotton', 'S,M,L,XL', '5000', '1556744655.jpg', 'men', 'pant', NULL),
('sw0g', 'Casual Jacket', 'Jack and Jones', 'Cotton', 'S,M,L,XL', '3300', '1556744303.jpg', 'men', 'jacket', NULL),
('xcv3', 'Cotton Shirt', 'Calvin Clein', 'Cotton', 'S,M,L,XL', '4000', '1556745247.jpg', 'men', 'shirt', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `code` varchar(100) NOT NULL,
  `product_name` varchar(1000) NOT NULL,
  `quantity` int(100) NOT NULL,
  `size` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `user_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `code` varchar(100) NOT NULL,
  `product_name` varchar(1000) NOT NULL,
  `quantity` int(100) NOT NULL,
  `size` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `user_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`code`, `product_name`, `quantity`, `size`, `price`, `phone`, `email`, `user_name`) VALUES
('ooap', 'Plain Tshirt', 2, 's', 1400, 2147483647, '', 'admin'),
('ooap', 'Plain Tshirt', 2, 's', 1400, 2147483647, '', 'admin'),
('qyhf', 'Check Shirt', 1, 's', 500, 2147483647, 'Kayastha.deepesh@gmail.com', 'deepesh');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `user_name` varchar(100) NOT NULL,
  `p_id` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `p_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`user_name`, `p_id`, `message`, `p_name`) VALUES
('deepesh', 'rzuk ', 'rrr', 'Boxer Pant '),
('deepesh', 'rzuk ', 'this is a nice product\r\n', 'Boxer Pant ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `UserType` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `address`, `email`, `mobile`, `password`, `UserType`) VALUES
('deepesh', 'new baneshwor', 'Kayastha.deepesh@gmail.com', 9861585013, 'hero', 'normal'),
('bijal simachhwa', 'kamalbinayak', 'bijalsimachhwa@gmail.com', 9861586497, 'qwerty', 'normal'),
('Aakash', 'Butwal', 'aakashpradhan021@gmail.coms', 9864567281, 'pradhan', 'normal'),
('Aakash', 'Butwal', 'aakashpradhan021@gmail.coms', 9864567281, 'pradhan', 'normal'),
('Shrestha', 'Butwal', 'aakashpradhan021@gmail.coms', 9864567281, 'shrestha', 'normal'),
('', '', '', 0, '', 'normal'),
('Mina', 'budhanilkhanta', 'minashrestha@gmail.com', 9847691022, 'mina', 'normal'),
('', '', '', 0, '', 'normal'),
('', '', '', 0, '', 'normal'),
('', '', '', 0, '', 'normal'),
('Ram', 'address', 'asd@gmail.com', 9875642314, 'asdf', 'normal'),
('Aakash', 'Butwal', 'aakash_p94@yahoo.com', 9875642314, 'qwerty21', 'normal'),
('Aakash', 'Butwal', 'aakash_p94@yahoo.com', 9875642314, 'qwerty21', 'normal'),
('Aakash', 'Butwal', 'aakash_p94@yahoo.com', 9875642314, 'qwerty21', 'normal'),
('AakashPradhan', 'Butwal', 'aakash_p94@yahoo.com', 9875642314, 'qwerty21', 'normal'),
('wwe', 'wwe', 'aaa@gmail.com', 986541234, 'qwe', 'normal'),
('Sushant', 'Butwal', 'asd@gmail.com', 986541234, 'qwert', 'normal'),
('admin', '', '', 9876541254, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clothes`
--
ALTER TABLE `clothes`
  ADD PRIMARY KEY (`code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
