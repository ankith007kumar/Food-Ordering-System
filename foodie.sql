-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2019 at 07:22 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodie`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `profile` (IN `user` VARCHAR(20))  NO SQL
BEGIN
SELECT name,email,username,address,phno FROM signup s WHERE s.username=user;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sales_count` ()  NO SQL
BEGIN

SELECT COUNT(*) AS c FROM sales;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `fid` int(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `fprice` int(10) NOT NULL,
  `fqty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`fid`, `fname`, `fprice`, `fqty`) VALUES
(101, 'Veg Burger', 50, 0),
(102, 'Pizza', 150, 0),
(103, 'Paneer Manchurian', 100, 0),
(104, 'Gobi Manchurian', 50, 0),
(105, 'Veg Biriyani', 110, 1),
(106, 'Noodles', 60, 3),
(107, 'poha', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `username` varchar(20) NOT NULL,
  `fid` int(5) NOT NULL,
  `qty` int(3) NOT NULL,
  `total` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`username`, `fid`, `qty`, `total`) VALUES
('ak', 105, 1, 110),
('ak', 106, 3, 180),
('ak007', 101, 5, 250),
('ak007', 102, 3, 450);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phno` bigint(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `email`, `username`, `password`, `address`, `phno`) VALUES
('ak', 'ak@gmail.com', 'ak', 'ak', 'bangalore', 987654321),
('ankith', 'ankith007@gmail.com', 'ak007', 'ak007', 'bangalore', 9916834166);

--
-- Triggers `signup`
--
DELIMITER $$
CREATE TRIGGER `user` AFTER INSERT ON `signup` FOR EACH ROW BEGIN
INSERT INTO foodie.users(name,user_id,phno) VALUES (New.name,New.username,New.phno);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(20) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `phno` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `user_id`, `phno`) VALUES
('ak', 'ak', 987654321),
('ankith', 'ak007', 9916834166);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
