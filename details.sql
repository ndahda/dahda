-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 12, 2017 at 01:58 PM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(6) NOT NULL,
  `fullname` varchar(30) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `web` varchar(50) DEFAULT NULL,
  `objective` varchar(1000) DEFAULT NULL,
  `metricFrom` varchar(20) DEFAULT NULL,
  `metricUpto` varchar(20) DEFAULT NULL,
  `metricSchool` varchar(50) DEFAULT NULL,
  `twelvthFrom` varchar(20) DEFAULT NULL,
  `twelvthUpto` varchar(20) DEFAULT NULL,
  `stream` varchar(30) DEFAULT NULL,
  `twelvthSchool` varchar(50) DEFAULT NULL,
  `degree` varchar(20) DEFAULT NULL,
  `degreeFrom` varchar(20) DEFAULT NULL,
  `degreeUpto` varchar(20) DEFAULT NULL,
  `college` varchar(50) DEFAULT NULL,
  `company` varchar(50) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `workFrom` varchar(20) DEFAULT NULL,
  `workUpto` varchar(20) DEFAULT NULL,
  `languages` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `fullname`, `image`, `address`, `email`, `phone`, `web`, `objective`, `metricFrom`, `metricUpto`, `metricSchool`, `twelvthFrom`, `twelvthUpto`, `stream`, `twelvthSchool`, `degree`, `degreeFrom`, `degreeUpto`, `college`, `company`, `designation`, `description`, `workFrom`, `workUpto`, `languages`) VALUES
(1, 'Abhinav <br>', 'uploads/', 'abhinav House', 'k.aadityajais@gmail.com', '8574414045', 'http://www.abhinavweb.com', 'job as juniour', '2017-07', '2017-06', 'mkuqwgdwiuqhwdi', '2017-07', '2017-06', 'non med', '12th school', 'btech', '2017-07', '2017-06', 'B.B.D.E.C LUCKNOW', '----none----', '----none----', 'kbgygiuhiouh', '2017-07', '2017-06', '<li>Objective-C</li><li>Perl</li><li>PHP</li><li>PL/SQL</li><li>MYSQL</li>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
