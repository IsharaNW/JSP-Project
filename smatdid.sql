-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2017 at 08:24 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smatdid`
--

-- --------------------------------------------------------

--
-- Table structure for table `damaged_fse`
--

CREATE TABLE IF NOT EXISTS `damaged_fse` (
  `Number` int(11) NOT NULL,
  `Date` date NOT NULL,
  `ShopId` int(11) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `SerialNumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `damaged_main`
--

CREATE TABLE IF NOT EXISTS `damaged_main` (
  `Date` date NOT NULL,
  `FSEId` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `SerialNumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `NIC` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Type` varchar(255) NOT NULL,
  `EmpId` varchar(255) NOT NULL,
  `TpNum` int(11) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Id`, `FirstName`, `LastName`, `Gender`, `NIC`, `DOB`, `Type`, `EmpId`, `TpNum`, `Address`) VALUES
(1, 'ggg', '', '0', '', '0000-00-00', '', '', 0, 'ffff'),
(2, 'ggg', '', '0', '', '0000-00-00', '', '', 0, 'ffff'),
(3, 'ggg', '', '0', '', '0000-00-00', '', '', 0, 'ffff'),
(4, 'nabsn', '', '0', '', '0000-00-00', '', '', 0, 'ffff'),
(5, 'nabsn', '', '0', '', '0000-00-00', '', '', 0, 'ffff'),
(6, 'nabsn', '', '0', '', '0000-00-00', '', '', 0, 'ffff'),
(7, 'sa', '', '0', '', '0000-00-00', '', '', 0, 'sa'),
(8, 'ASA', '', '0', '', '0000-00-00', '', '', 0, 'dsf'),
(9, 'ASA', '', '0', '', '0000-00-00', '', '', 0, 'dsf'),
(10, 'asda', '', '0', '', '0000-00-00', '', '', 0, 'sad'),
(11, 'hjgjh', '', '0', '', '0000-00-00', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `mainstock_summary`
--

CREATE TABLE IF NOT EXISTS `mainstock_summary` (
  `Type` varchar(100) NOT NULL,
  `RemainingAmount` int(11) NOT NULL,
  `ReorderLevel` int(11) NOT NULL,
  `BufferLevel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE IF NOT EXISTS `route` (
  `RouteId` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `ShopId` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `OwnerName` varchar(255) NOT NULL,
  `OwnerNIC` varchar(255) NOT NULL,
  `TPNumber` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `RouteId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE IF NOT EXISTS `transfer` (
  `Date` date NOT NULL,
  `StockKeeperId` varchar(255) NOT NULL,
  `FSEId` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `SerialNumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transferred_stock`
--

CREATE TABLE IF NOT EXISTS `transferred_stock` (
  `TransferredDate` date NOT NULL,
  `Type` varchar(255) NOT NULL,
  `SerialNumber` varchar(255) NOT NULL,
  `FSEId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `UserName`, `Password`, `Type`) VALUES
(1, 'ru', '', '123', 'qwe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `damaged_fse`
--
ALTER TABLE `damaged_fse`
  ADD PRIMARY KEY (`Number`,`SerialNumber`);

--
-- Indexes for table `damaged_main`
--
ALTER TABLE `damaged_main`
  ADD PRIMARY KEY (`SerialNumber`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Id`,`EmpId`);

--
-- Indexes for table `mainstock_summary`
--
ALTER TABLE `mainstock_summary`
  ADD PRIMARY KEY (`Type`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`RouteId`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`SerialNumber`);

--
-- Indexes for table `transferred_stock`
--
ALTER TABLE `transferred_stock`
  ADD PRIMARY KEY (`SerialNumber`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `damaged_fse`
--
ALTER TABLE `damaged_fse`
  MODIFY `Number` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
