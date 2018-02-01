-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2013 at 04:16 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cargo management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `AdminID` int(8) NOT NULL AUTO_INCREMENT,
  `AdminName` varchar(25) NOT NULL,
  `LoginID` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `branchname` varchar(25) NOT NULL,
  `EmailId` varchar(50) NOT NULL,
  `CreateDate` date NOT NULL,
  `LastLogin` datetime NOT NULL,
  PRIMARY KEY (`AdminID`),
  UNIQUE KEY `LoginID` (`LoginID`),
  UNIQUE KEY `EmailId` (`EmailId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `AdminName`, `LoginID`, `Password`, `branchname`, `EmailId`, `CreateDate`, `LastLogin`) VALUES
(8, 'joy', 'jyree', '78945', '', 'hghfg1223', '0000-00-00', '0000-00-00 00:00:00'),
(13, 'jeevan', 'jeevan123', '575', 'admin', 'joy@gmail.com', '0000-00-00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `bagging`
--

CREATE TABLE IF NOT EXISTS `bagging` (
  `RecieptNo` int(10) NOT NULL AUTO_INCREMENT,
  `WarehouseNo` int(5) NOT NULL,
  `OpeningStock` float NOT NULL,
  `ClosingStock` float NOT NULL,
  `Date` date NOT NULL,
  `Shortage` int(10) NOT NULL,
  `CummBagging` int(20) NOT NULL,
  `Sent_to_Lab` int(10) NOT NULL,
  `CutGunnies` int(10) NOT NULL,
  `UsedGunnies` int(10) NOT NULL,
  `QtyBagging` float NOT NULL,
  `BulkBalance` float NOT NULL,
  PRIMARY KEY (`RecieptNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cargomaster`
--

CREATE TABLE IF NOT EXISTS `cargomaster` (
  `itemno` int(10) NOT NULL AUTO_INCREMENT,
  `cargoname` varchar(25) NOT NULL,
  `cargotype` varchar(25) NOT NULL,
  `cargoinfo` text NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`itemno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cargomaster`
--

INSERT INTO `cargomaster` (`itemno`, `cargoname`, `cargotype`, `cargoinfo`, `image`) VALUES
(2, 'maize', 'Grain', 'food grain', 'Tulips.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cargos`
--

CREATE TABLE IF NOT EXISTS `cargos` (
  `CargoID` int(15) NOT NULL,
  `shippingid` int(10) NOT NULL,
  `BerthDate` date NOT NULL,
  `NetTon` int(15) NOT NULL,
  `GrossTon` int(15) NOT NULL,
  `shortage` int(10) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`CargoID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `clientid` int(15) NOT NULL AUTO_INCREMENT,
  `clientinfo` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `telno` varchar(15) NOT NULL,
  `mobno` varchar(15) NOT NULL,
  `companytype` varchar(15) NOT NULL,
  PRIMARY KEY (`clientid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `compid` int(10) NOT NULL AUTO_INCREMENT,
  `compname` varchar(25) NOT NULL,
  `compaddr` text NOT NULL,
  `compcont` varchar(30) NOT NULL,
  `compinfo` text NOT NULL,
  PRIMARY KEY (`compid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12459 ;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`compid`, `compname`, `compaddr`, `compcont`, `compinfo`) VALUES
(123, 'jeevan', 'mangalore', '7541236', 'cargo\r\n'),
(1234, 'jeevan', 'mangalore', '882721', 'chemical'),
(12456, 'jeevan', 'mangalore', '7541236', 'cargo'),
(12458, 'joy', 'mangalore', '882', 'chemi');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `empid` int(25) NOT NULL AUTO_INCREMENT,
  `loginid` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `emailid` varchar(35) NOT NULL,
  `contactno` varchar(25) NOT NULL,
  `createdat` date NOT NULL,
  `section` varchar(25) NOT NULL,
  `llogin` datetime NOT NULL,
  PRIMARY KEY (`empid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=123457 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `loginid`, `pass`, `fname`, `lname`, `emailid`, `contactno`, `createdat`, `section`, `llogin`) VALUES
(123, '', 'ytrewq', '', '', '', '', '0000-00-00', 'eg 3', '0000-00-00 00:00:00'),
(145, 'sdfg', 'bnm', 'Angel', 'Dsouza', 'angel@gmail.com', 'bnm', '0000-00-00', 'eg 4', '0000-00-00 00:00:00'),
(123456, '123456', 'joy', 'joy', 'dmello', 'joy@gmail.com', 'joy', '0000-00-00', 'eg 3', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE IF NOT EXISTS `shipping` (
  `shippingid` int(10) NOT NULL AUTO_INCREMENT,
  `shipno` int(10) NOT NULL,
  `Itemno` int(10) NOT NULL,
  `ShippingDate` date NOT NULL,
  `BerthDate` date NOT NULL,
  `StartLoc` varchar(25) NOT NULL,
  `DestLoc` varchar(25) NOT NULL,
  `NetTon` float NOT NULL,
  `GrossTon` float NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`shippingid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`shippingid`, `shipno`, `Itemno`, `ShippingDate`, `BerthDate`, `StartLoc`, `DestLoc`, `NetTon`, `GrossTon`, `Date`) VALUES
(2, 123, 2, '2013-02-11', '2013-02-12', 'Mangalore', 'Bangalore', 100, 125, '2013-02-11');

-- --------------------------------------------------------

--
-- Table structure for table `ship_registration`
--

CREATE TABLE IF NOT EXISTS `ship_registration` (
  `shipno` int(10) NOT NULL,
  `shipname` varchar(25) NOT NULL,
  `flag` varchar(25) NOT NULL,
  `descr` varchar(25) NOT NULL,
  `compname` varchar(25) NOT NULL,
  `captname` varchar(25) NOT NULL,
  PRIMARY KEY (`shipno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ship_registration`
--

INSERT INTO `ship_registration` (`shipno`, `shipname`, `flag`, `descr`, `compname`, `captname`) VALUES
(123, 'abcd', 'xyz', 'info', 'rty', 'peter');

-- --------------------------------------------------------

--
-- Table structure for table `transportation`
--

CREATE TABLE IF NOT EXISTS `transportation` (
  `TransId` int(15) NOT NULL,
  `warehouseid` int(15) NOT NULL,
  `VechType` varchar(15) NOT NULL,
  `VechNo` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Time` datetime NOT NULL,
  `DriverName` varchar(35) NOT NULL,
  `CompName` varchar(25) NOT NULL,
  `Source` varchar(20) NOT NULL,
  `Destination` varchar(20) NOT NULL,
  `DispatchQty` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE IF NOT EXISTS `warehouse` (
  `warehouseid` int(15) NOT NULL,
  `warehouseno` int(10) NOT NULL,
  `warehousename` varchar(15) NOT NULL,
  `Date` date NOT NULL,
  `CargoID` int(15) NOT NULL,
  PRIMARY KEY (`warehouseid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
