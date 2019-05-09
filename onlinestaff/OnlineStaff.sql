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
-- Database: `OnlineStaff`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `id` int(11) NOT NULL,
  `uname` varchar(77) NOT NULL,
  `pswd` varchar(88) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`id`, `uname`, `pswd`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `Communication`
--

CREATE TABLE `Communication` (
  `id` int(11) NOT NULL,
  `S_Id` int(11) NOT NULL,
  `F_Id` int(11) NOT NULL,
  `S_Msg` varchar(33) NOT NULL,
  `F_Msg` varchar(500) NOT NULL,
  `S_Date` date NOT NULL,
  `F_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Communication`
--

INSERT INTO `Communication` (`id`, `S_Id`, `F_Id`, `S_Msg`, `F_Msg`, `S_Date`, `F_Date`) VALUES
(1, 1, 1, ' test message', ' Nice qn', '2019-05-09', '2019-05-09'),
(2, 1, 1, ' hfjhfj', ' trst', '2019-05-09', '2019-05-09'),
(3, 1, 2, ' vhjf', '', '2019-05-09', '0000-00-00'),
(4, 1, 1, ' test', ' Test response', '2019-05-09', '2019-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `dept` varchar(88) NOT NULL,
  `college` varchar(55) NOT NULL,
  `unvsty` varchar(33) NOT NULL,
  `mainsub` varchar(99) NOT NULL,
  `uname` varchar(55) NOT NULL,
  `pswd` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `dept`, `college`, `unvsty`, `mainsub`, `uname`, `pswd`) VALUES
(1, 'RAHUL', 'CS', 'SBC', 'KERALA UNIVERSITY', 'PHYSICS', 'abcd', 'pass'),
(2, 'RAHUL R ', 'CHEMISTRY', 'gdg', 'dd', 'CHEMISTRY', 'xxx', 'yyy');

-- --------------------------------------------------------

--
-- Table structure for table `Followers`
--

CREATE TABLE `Followers` (
  `Id` int(11) NOT NULL,
  `F_Id` int(11) NOT NULL,
  `S_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Followers`
--

INSERT INTO `Followers` (`Id`, `F_Id`, `S_Id`) VALUES
(5, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Posts`
--

CREATE TABLE `Posts` (
  `id` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `title` varchar(110) NOT NULL,
  `msg` varchar(777) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Posts`
--

INSERT INTO `Posts` (`id`, `fid`, `title`, `msg`, `Date`) VALUES
(1, 1, 'Test Title', 'Vggkjgjg jkgk gkj gkj gkj ', '0000-00-00 00:00:00'),
(2, 2, 'Test Fm, bjkb b b ', 'jgjk gg jag jg kgjk g g g gj gkj gg gkj gkjg kjgkjgskjdgkjsgdjsgdgkjsgdkjsgkjdgsjkdgksgdksgkjdgskjgdkjs', '2019-05-05 00:00:00'),
(3, 1, 'jgkgkjg', 'jgjkgjk', '2019-05-14 00:00:00'),
(4, 2, 'df', 'sfsfs', '2019-05-09 00:00:00'),
(5, 1, 'Workshop On Tomorrow', ' Test info dehjjbjkb', '2019-05-09 09:23:27');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(88) NOT NULL,
  `dept` varchar(99) NOT NULL,
  `college` varchar(44) NOT NULL,
  `uname` varchar(33) NOT NULL,
  `pswd` varchar(77) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `dept`, `college`, `uname`, `pswd`) VALUES
(1, 'Test name ', 'CS', 'SBC', 'abcd', 'abcd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Communication`
--
ALTER TABLE `Communication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Followers`
--
ALTER TABLE `Followers`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Posts`
--
ALTER TABLE `Posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Communication`
--
ALTER TABLE `Communication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Followers`
--
ALTER TABLE `Followers`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Posts`
--
ALTER TABLE `Posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
