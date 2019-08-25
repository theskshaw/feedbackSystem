-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2019 at 03:57 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `post` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `post`, `role`, `password`, `mobile`) VALUES
('21232f297a57a5a743894a0e4a801fc3', 'Admin', 'Principal', 1, '21232f297a57a5a743894a0e4a801fc3', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

CREATE TABLE `code` (
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `code`
--

INSERT INTO `code` (`code`) VALUES
('CSE/1/19274'),
('CSE/1/35027'),
('CSE/1/27698'),
('CSE/1/26460'),
('CSE/1/22370'),
('CSE/1/39433'),
('CSE/1/16425'),
('CSE/1/9184'),
('CSE/1/19172'),
('CSE/1/15436'),
('CSE/1/21761'),
('CSE/1/38916'),
('CSE/1/36241'),
('CSE/1/26692'),
('CSE/1/3862'),
('CSE/1/5840'),
('CSE/1/38588'),
('CSE/1/41379'),
('CSE/1/8058'),
('CSE/1/4083'),
('CE/2/101');

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE `feed` (
  `uname` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `teacode` varchar(50) NOT NULL,
  `subcode` varchar(50) NOT NULL,
  `type1` int(1) NOT NULL,
  `type2` int(1) NOT NULL,
  `type3` int(1) NOT NULL,
  `type4` int(1) NOT NULL,
  `type5` int(1) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`uname`, `name`, `teacode`, `subcode`, `type1`, `type2`, `type3`, `type4`, `type5`, `date`, `time`) VALUES
('CSE/6/25152', 'Shashikant', 'SKS', 'CS601', 3, 3, 3, 4, 5, '2019-03-29', '01:36:25'),
('CSE/6/25152', 'Shashikant', 'SKS', 'CS602', 3, 3, 3, 3, 3, '2019-03-29', '01:36:39'),
('CSE/6/25152', 'Shashikant', 'SKS', 'CS603', 3, 3, 3, 3, 3, '2019-03-29', '01:36:54'),
('CSE/6/19737', 'Shashikant', 'SKS', 'CS601', 4, 4, 4, 4, 4, '2019-03-29', '02:04:54'),
('CSE/6/23557', 'Shashikant', 'SKS', 'CS601', 5, 4, 4, 3, 3, '2019-03-29', '02:33:52'),
('CSE/1/27475', 'Santanu', 'MS', 'CS101', 4, 4, 4, 3, 4, '2019-04-03', '02:46:57'),
('CSE/1/19274', 'Santanu', 'MS', 'CS101', 2, 2, 2, 2, 2, '2019-04-03', '02:24:35');

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE `sub` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `dept` varchar(50) NOT NULL,
  `subcode` varchar(50) NOT NULL,
  `teacode` varchar(50) NOT NULL,
  `sem` int(1) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub`
--

INSERT INTO `sub` (`fname`, `lname`, `dept`, `subcode`, `teacode`, `sem`, `uname`, `status`) VALUES
('Santanu', 'Rai', 'CSE', 'CS101', 'MS', 1, 'sanu', 1),
('Shashikant', 'Shaw', 'CSE', '502', 'SKS', 1, 'theskshaw', 1),
('Shashikant', 'Shaw', 'CSE', 'P101', 'SKS', 1, 'theskshaw', 0),
('Shashikant', 'Shaw', 'CE', '202', 'SKS', 2, 'theskshaw', 0),
('Tushar', 'Sinha', 'CSE', '502', '202', 1, 'tsinha', 0),
('Shashikant', 'Shaw', 'CSE', 'CS601', 'SKS', 6, 'shashi', 0),
('Shashikant', 'Shaw', 'CSE', 'CS602', 'SKS', 6, 'shashi', 0),
('Shashikant', 'Shaw', 'CSE', 'CS603', 'SKS', 6, 'shashi', 0),
('Tushar', 'Sinha', 'CSE', 'CS604', 'TS', 6, 'tushar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subcode` varchar(10) NOT NULL,
  `subname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subcode`, `subname`) VALUES
('CS601', 'Operating System'),
('CS602', 'Database Management Systems'),
('CS603', 'Computer Networks');

-- --------------------------------------------------------

--
-- Table structure for table `teainfo`
--

CREATE TABLE `teainfo` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `dept` varchar(5) NOT NULL,
  `uname` varchar(300) NOT NULL,
  `pass` varchar(300) NOT NULL,
  `hod` int(1) NOT NULL DEFAULT '0',
  `profcode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teainfo`
--

INSERT INTO `teainfo` (`fname`, `lname`, `email`, `dept`, `uname`, `pass`, `hod`, `profcode`) VALUES
('Admin', 'admin', 'admin@gmail.com', 'CSE', 'admin', '21232f297a57a5a743894a0e4a801fc3', 2, ''),
('Shashikant', 'Shaw', 'shawbhai.latest@gmail.com', 'CSE', 'shashi', '81dc9bdb52d04dc20036dbd8313ed055', 1, 'SKS'),
('Test', 'test', 'test@gmail.com', 'CSE', 'test', '098f6bcd4621d373cade4e832627b4f6', 0, 'test'),
('Tushar', 'Sinha', 'tushar@gmail.com', 'CSE', 'tushar', '81dc9bdb52d04dc20036dbd8313ed055', 0, 'TS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subcode`);

--
-- Indexes for table `teainfo`
--
ALTER TABLE `teainfo`
  ADD PRIMARY KEY (`uname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
