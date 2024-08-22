-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 06:10 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmsd`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `amount` ()  BEGIN
SELECT pid,medicine,mprice,fee,(mprice+fee) AS total_amount
FROM bill;

 END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `pid` int(20) NOT NULL,
  `medicine` varchar(40) NOT NULL,
  `mprice` int(10) NOT NULL,
  `fee` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`pid`, `medicine`, `mprice`, `fee`) VALUES
(1, 'dedf', 123, 100),
(2, 'hjghj', 53, 345),
(3, 'dedf', 657, 575),
(6, 'ut', 76, 75);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `deptid` int(20) NOT NULL,
  `deptname` varchar(40) NOT NULL,
  `depthead` varchar(40) NOT NULL,
  `headid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`deptid`, `deptname`, `depthead`, `headid`) VALUES
(1, 'ece', 'vindya', 65),
(1, 'maths', 'abc', 346),
(4, 'CSE', 'Dr. Sahana', 647),
(7, 'n', 'hv', 69),
(8, '', '', 0),
(9, '', '', 0),
(10, 'abc', 'vingu', 69),
(11, 'abc', 'vingu', 69);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `docid` int(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `age` int(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `deptid` int(10) NOT NULL,
  `qualification` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`docid`, `name`, `age`, `gender`, `deptid`, `qualification`) VALUES
(131, 'Vindya M V', 6, '', 1, 'MBBS'),
(141, 'vindya', 0, 'male', 1, 'MBBS'),
(143, 'vindya', 8, 'male', 1, 'MBBS');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `salary` int(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `sdate` date NOT NULL,
  `deptid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `name`, `salary`, `phone`, `sdate`, `deptid`) VALUES
(126, 'vin', 10000, 2147483647, '0000-00-00', 1),
(127, 'fdh', 0, 33, '0000-00-00', 1),
(128, 'jhgj', 56000, 33, '0000-00-00', 1),
(129, 'vin', 56000, 33, '0000-00-00', 1),
(131, 'fdh', 2, 22222, '0000-00-00', 1),
(132, 'jhgj', 8899, 2147483647, '0000-00-00', 1),
(133, 'Vindya M V', 56000, 33, '0000-00-00', 1),
(134, 'wew', 10000, 33, '0000-00-00', 1),
(135, 'M V VINDYA', 2133, 2147483647, '0000-00-00', 1),
(136, 'vindya', 10000, 2147483647, '0000-00-00', 1),
(137, 'vindya', 10000, 2147483647, '0000-00-00', 1),
(138, 'fdh', 2133, 2147483647, '0000-00-00', 1),
(139, 'vin', 2133, 2147483647, '0000-00-00', 1),
(140, 'vindya', 10000, 0, '0000-00-00', 1),
(141, 'vindya', 10000, 545, '0000-00-00', 1),
(142, 'vindya', 10000, 77, '0000-00-00', 1),
(143, 'vindya', 10000, 0, '0000-00-00', 1),
(144, 'vindya', 10000, 77600, '0000-00-00', 2),
(146, 'vindya', 10000, 1234567890, '0000-00-00', 7),
(147, '', 0, 2147483647, '0000-00-00', 0),
(155, 'vindya', 10000, 2147483647, '0000-00-00', 1),
(156, 'vindya', 10000, 2147483647, '0000-00-00', 10);

--
-- Triggers `employee`
--
DELIMITER $$
CREATE TRIGGER `delete` AFTER DELETE ON `employee` FOR EACH ROW DELETE FROM `doctor` WHERE docid=OLD.eid
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('user', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pid` int(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `age` int(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `docid` int(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `name`, `age`, `gender`, `docid`, `date`) VALUES
(1, 'jnb', 78, 'male', 123, '2019-06-07'),
(2, 'fdh', 78, 'male', 123, '2019-06-07'),
(3, 'cgf', 76, 'male', 123, '2019-06-07'),
(4, 'vindya', 87, 'male', 143, '2019-06-07'),
(5, '', 0, '', 0, '0000-00-00'),
(6, 'vindya', 68, 'female', 141, '2019-06-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`deptid`,`headid`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`docid`) USING BTREE;

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`) USING BTREE;

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pid`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `deptid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `eid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `test2` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
