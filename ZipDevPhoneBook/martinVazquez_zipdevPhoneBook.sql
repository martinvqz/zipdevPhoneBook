-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql110.byetcluster.com
-- Generation Time: Mar 04, 2020 at 02:15 PM
-- Server version: 5.6.45-86.1
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_25288919_zipdevPhoneBook`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_email`
--

CREATE TABLE `tbl_email` (
  `idEmail` int(11) NOT NULL,
  `idPhoneBook` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_email`
--

INSERT INTO `tbl_email` (`idEmail`, `idPhoneBook`, `email`) VALUES
(1, 6, 'email@test.com'),
(2, 6, 'email5@test.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_phone`
--

CREATE TABLE `tbl_phone` (
  `idPhone` int(11) NOT NULL,
  `idPhoneBook` int(11) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_phone`
--

INSERT INTO `tbl_phone` (`idPhone`, `idPhoneBook`, `phone`) VALUES
(1, 6, 664664);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_phoneBook`
--

CREATE TABLE `tbl_phoneBook` (
  `idPhoneBook` int(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `photo` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_phoneBook`
--

INSERT INTO `tbl_phoneBook` (`idPhoneBook`, `firstName`, `surname`, `photo`) VALUES
(4, 'Martin4', 'vvv', 'photolink'),
(5, 'Martin4', 'Vaz', 'photolink'),
(6, 'Martin5', 'Vaz', 'photolink');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_email`
--
ALTER TABLE `tbl_email`
  ADD PRIMARY KEY (`idEmail`),
  ADD KEY `idPhoneBook` (`idPhoneBook`);

--
-- Indexes for table `tbl_phone`
--
ALTER TABLE `tbl_phone`
  ADD PRIMARY KEY (`idPhone`),
  ADD KEY `idPhoneBook` (`idPhoneBook`);

--
-- Indexes for table `tbl_phoneBook`
--
ALTER TABLE `tbl_phoneBook`
  ADD PRIMARY KEY (`idPhoneBook`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_email`
--
ALTER TABLE `tbl_email`
  MODIFY `idEmail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_phone`
--
ALTER TABLE `tbl_phone`
  MODIFY `idPhone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_phoneBook`
--
ALTER TABLE `tbl_phoneBook`
  MODIFY `idPhoneBook` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
