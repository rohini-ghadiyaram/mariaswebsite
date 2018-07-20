-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 16, 2018 at 07:18 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marias`
--

-- --------------------------------------------------------

--
-- Table structure for table `lunch_cocktail`
--

CREATE TABLE `lunch_cocktail` (
  `cid` int(255) NOT NULL,
  `item` varchar(256) DEFAULT NULL,
  `rate` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lunch_cocktail`
--

INSERT INTO `lunch_cocktail` (`cid`, `item`, `rate`) VALUES
(1, 'Red or White Sangria', 6.95);

-- --------------------------------------------------------

--
-- Table structure for table `lunch_main`
--

CREATE TABLE `lunch_main` (
  `mid` int(11) NOT NULL,
  `Item_name` varchar(256) DEFAULT NULL,
  `Description` varchar(256) DEFAULT NULL,
  `Rate` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lunch_main`
--

INSERT INTO `lunch_main` (`mid`, `Item_name`, `Description`, `Rate`) VALUES
(22, 'fish and chips', 'with tartar sauce', 12),
(23, 'Fried Combo', 'Oysters & clam strips served with French fries & coleslaw', 13.95),
(24, 'chicken', 'chicken', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lunch_soup`
--

CREATE TABLE `lunch_soup` (
  `sid` int(255) NOT NULL,
  `item` varchar(256) DEFAULT NULL,
  `rate` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lunch_soup`
--

INSERT INTO `lunch_soup` (`sid`, `item`, `rate`) VALUES
(1, 'Chicken Rice', 3.95);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_name` varchar(256) NOT NULL,
  `user_pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_name`, `user_pwd`) VALUES
('admin', 'marias');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lunch_cocktail`
--
ALTER TABLE `lunch_cocktail`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `lunch_main`
--
ALTER TABLE `lunch_main`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `lunch_soup`
--
ALTER TABLE `lunch_soup`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lunch_cocktail`
--
ALTER TABLE `lunch_cocktail`
  MODIFY `cid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lunch_main`
--
ALTER TABLE `lunch_main`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `lunch_soup`
--
ALTER TABLE `lunch_soup`
  MODIFY `sid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
