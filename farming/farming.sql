-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2019 at 11:45 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farming`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uname` varchar(33) NOT NULL,
  `pswd` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pswd`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `Complaints`
--

CREATE TABLE `Complaints` (
  `Id` int(11) NOT NULL,
  `FarmerId` int(11) NOT NULL,
  `DealerId` int(11) NOT NULL,
  `Complaint` varchar(55) NOT NULL,
  `AddedDate` date NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Complaints`
--

INSERT INTO `Complaints` (`Id`, `FarmerId`, `DealerId`, `Complaint`, `AddedDate`, `Status`) VALUES
(1, 1, 1, ' Test Complaint', '2019-05-09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `id` int(11) NOT NULL,
  `name` varchar(44) NOT NULL,
  `address` varchar(44) NOT NULL,
  `phoneno` varchar(12) NOT NULL,
  `mailId` varchar(44) NOT NULL,
  `uname` varchar(44) NOT NULL,
  `passwd` varchar(44) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`id`, `name`, `address`, `phoneno`, `mailId`, `uname`, `passwd`, `status`) VALUES
(1, 'Test', 'jhjh', '898080', 'a@g.com', 'aa', 'hello', 1),
(2, 'vfjfjhgk', '', '', '', '11', '22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `DealerAds`
--

CREATE TABLE `DealerAds` (
  `id` int(11) NOT NULL,
  `DealerId` int(11) NOT NULL,
  `Ad` varchar(900) NOT NULL,
  `FarmerId` int(11) NOT NULL,
  `Expiry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DealerAds`
--

INSERT INTO `DealerAds` (`id`, `DealerId`, `Ad`, `FarmerId`, `Expiry`) VALUES
(1, 1, 'Test Ad', 0, '2019-05-09'),
(2, 1, 'njhnkjhb kjbkj bjk b', 1, '2019-05-14'),
(3, 1, 'hjhGJHGFH GKJ GKJG KJG JKG KJG KJG ', 0, '2019-05-08'),
(4, 1, ' Test Post b y Dealaer ', 1, '2019-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `DealerComplaints`
--

CREATE TABLE `DealerComplaints` (
  `id` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `complaint` varchar(777) NOT NULL,
  `addedOn` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DealerComplaints`
--

INSERT INTO `DealerComplaints` (`id`, `did`, `fid`, `complaint`, `addedOn`) VALUES
(1, 2, 1, ' Fraud farmer', '2019-05-09'),
(2, 2, 1, ' rgrgh', '2019-05-09'),
(3, 2, 2, ' vr 2', '2019-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `id` int(11) NOT NULL,
  `name` varchar(444) NOT NULL,
  `address` varchar(44) NOT NULL,
  `phoneno` varchar(44) NOT NULL,
  `emailid` varchar(44) NOT NULL,
  `uname` varchar(44) NOT NULL,
  `passwd` varchar(44) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`id`, `name`, `address`, `phoneno`, `emailid`, `uname`, `passwd`, `status`) VALUES
(1, 'Test', 'ggkgk', '6876868', 'a@g.com', 'abcd', '1234', 1),
(2, 'Test Farmer', 'Hello smbq', '9526674440', 'a@g.com', 'aaa', 'bbb', 1);

-- --------------------------------------------------------

--
-- Table structure for table `FarmerAds`
--

CREATE TABLE `FarmerAds` (
  `id` int(11) NOT NULL,
  `FId` int(11) NOT NULL,
  `AdDetails` varchar(800) NOT NULL,
  `Dealer_Id` int(11) NOT NULL,
  `ExpiryDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `FarmerAds`
--

INSERT INTO `FarmerAds` (`id`, `FId`, `AdDetails`, `Dealer_Id`, `ExpiryDate`) VALUES
(1, 1, ' test ad', 0, '2019-05-10'),
(2, 1, ' NBew Ad', 1, '2019-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `Messages`
--

CREATE TABLE `Messages` (
  `id` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `Fmessage` varchar(666) NOT NULL,
  `Dmessage` varchar(666) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Messages`
--

INSERT INTO `Messages` (`id`, `fid`, `did`, `Fmessage`, `Dmessage`) VALUES
(1, 1, 2, ' hel;lo', 'wow'),
(2, 1, 1, ' Test Message', ''),
(3, 1, 2, ' dd', ''),
(4, 1, 1, ' egrg', ''),
(5, 2, 1, ' haiiiii', ''),
(6, 1, 1, ' test reply', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Complaints`
--
ALTER TABLE `Complaints`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `DealerAds`
--
ALTER TABLE `DealerAds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `DealerComplaints`
--
ALTER TABLE `DealerComplaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `FarmerAds`
--
ALTER TABLE `FarmerAds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Messages`
--
ALTER TABLE `Messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Complaints`
--
ALTER TABLE `Complaints`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dealer`
--
ALTER TABLE `dealer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `DealerAds`
--
ALTER TABLE `DealerAds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `DealerComplaints`
--
ALTER TABLE `DealerComplaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `FarmerAds`
--
ALTER TABLE `FarmerAds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Messages`
--
ALTER TABLE `Messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
