-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 09, 2021 at 02:40 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alpha`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `privilege` varchar(6) NOT NULL DEFAULT 'False'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`, `privilege`) VALUES
('Alpha', 'Alpha@123', 'True');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

DROP TABLE IF EXISTS `job`;
CREATE TABLE IF NOT EXISTS `job` (
  `custid` int(100) NOT NULL,
  `jobnumber` int(10) NOT NULL,
  `jobtype` varchar(25) NOT NULL,
  `jobname` varchar(25) NOT NULL,
  `povalue` varchar(25) NOT NULL,
  `podate` varchar(25) NOT NULL,
  `ponumber` varchar(25) NOT NULL,
  `customer` varchar(25) NOT NULL,
  `saleconsultant` varchar(25) NOT NULL,
  `primarysale` varchar(25) NOT NULL,
  `joblocation` varchar(25) NOT NULL,
  `creationdate` varchar(25) NOT NULL,
  `invoicebasedonpv` varchar(6) NOT NULL,
  `profit` varchar(25) NOT NULL,
  `deliverydetail` varchar(25) NOT NULL,
  `invoicedetail` varchar(25) NOT NULL,
  `paymentterms` varchar(25) NOT NULL,
  `isclosed` varchar(6) NOT NULL,
  `jobcomcerbycust` varchar(6) NOT NULL,
  `prjinchr` varchar(25) NOT NULL,
  `adminchr` varchar(25) NOT NULL,
  `totaldeliverycost` varchar(25) NOT NULL,
  `totalexpense` varchar(25) NOT NULL,
  `totallabourcost` varchar(25) NOT NULL,
  `totalinvoice` varchar(25) NOT NULL,
  `totalrunningcost` varchar(25) NOT NULL,
  `totalLPOssent` varchar(25) NOT NULL,
  `estlabourcost` varchar(25) NOT NULL,
  `estpurchase` varchar(25) NOT NULL,
  `estotherexpense` varchar(25) NOT NULL,
  `runningprofitval` varchar(25) NOT NULL,
  `prjstdateplan` varchar(25) NOT NULL,
  `prjstdateact` varchar(25) NOT NULL,
  `prjcomdateplan` varchar(25) NOT NULL,
  `prjcomdateact` varchar(25) NOT NULL,
  `amcreqrennoti` varchar(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`custid`, `jobnumber`, `jobtype`, `jobname`, `povalue`, `podate`, `ponumber`, `customer`, `saleconsultant`, `primarysale`, `joblocation`, `creationdate`, `invoicebasedonpv`, `profit`, `deliverydetail`, `invoicedetail`, `paymentterms`, `isclosed`, `jobcomcerbycust`, `prjinchr`, `adminchr`, `totaldeliverycost`, `totalexpense`, `totallabourcost`, `totalinvoice`, `totalrunningcost`, `totalLPOssent`, `estlabourcost`, `estpurchase`, `estotherexpense`, `runningprofitval`, `prjstdateplan`, `prjstdateact`, `prjcomdateplan`, `prjcomdateact`, `amcreqrennoti`) VALUES
(10003, 1212, 'project1', 'project2', '54654', '2021-11-12', '54654', 'customer001', 'jdfhgj', '65465', 'Abu Dhabi', '2021-11-04', 'True', '65464', '65446', '6546', '54654', 'True', 'True', 'in charge of project', 'adm in char', '5465', '56465', '65465', '546', '5465', '5464', '6546', '54654', '546', '5464', '2021-11-04', '2021-11-11', '2021-11-10', '2021-11-04', 'True');

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

DROP TABLE IF EXISTS `registered`;
CREATE TABLE IF NOT EXISTS `registered` (
  `custid` int(15) NOT NULL AUTO_INCREMENT,
  `doreg` varchar(15) NOT NULL,
  `custname` varchar(25) NOT NULL,
  `loca` varchar(15) NOT NULL,
  `tradelic` varchar(100) NOT NULL,
  `trncert` varchar(100) NOT NULL,
  `contactno` varchar(25) NOT NULL,
  `cemail` varchar(25) NOT NULL,
  `cperson` varchar(25) NOT NULL,
  `cpmobile` varchar(25) NOT NULL,
  `cpemail` varchar(25) NOT NULL,
  `nda` varchar(100) NOT NULL,
  `paymentterm` varchar(25) NOT NULL,
  PRIMARY KEY (`custid`)
) ENGINE=MyISAM AUTO_INCREMENT=10005 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`custid`, `doreg`, `custname`, `loca`, `tradelic`, `trncert`, `contactno`, `cemail`, `cperson`, `cpmobile`, `cpemail`, `nda`, `paymentterm`) VALUES
(10003, '2021-11-04', 'customer001', 'Abu Dhabi', 'tradelic/Nihal Rahman 2.pdf', 'cer/Nihal Rahman 1.pdf', '654654', 'nihal@gmail.com', 'miha', '4654', 'niha@gmail.com', 'nda/Nihal Rahman.pdf', 'done');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
