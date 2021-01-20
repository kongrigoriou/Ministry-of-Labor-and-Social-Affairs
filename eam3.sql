-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 17, 2021 at 03:17 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eam3`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `AFM` int(11) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `DOY` varchar(20) NOT NULL,
  `EMPLOYER_AFM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`AFM`, `NAME`, `DOY`, `EMPLOYER_AFM`) VALUES
(444444444, 'xontra gatia', 'XOLARGOU', 111111111);

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `AFM` int(11) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`AFM`, `USERNAME`, `PASSWORD`) VALUES
(111111111, 'kwng', '1234'),
(222222222, 'gkokkinis', '12345'),
(333333333, 'panosk', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `AFM` int(11) NOT NULL,
  `COMPANY_AFM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`AFM`, `COMPANY_AFM`) VALUES
(222222222, 444444444),
(333333333, 444444444);

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `AFM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`AFM`) VALUES
(111111111);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `AFM` int(11) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `SURNAME` varchar(20) NOT NULL,
  `AMA` int(11) NOT NULL,
  `GENDER` varchar(20) NOT NULL,
  `EMAIL` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`AFM`, `NAME`, `SURNAME`, `AMA`, `GENDER`, `EMAIL`) VALUES
(111111111, 'Konstantina', 'Grigoriou', 121212, 'FEMALE', 'kwng@gmail.com'),
(222222222, 'Giorgos', 'Kokkinis', 131313, 'MALE', 'kokkinisg@gmail.com'),
(333333333, 'Panagiotis', 'Korovesis', 141414, 'MALE', 'panosk@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`AFM`),
  ADD KEY `employer_company` (`EMPLOYER_AFM`);

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`AFM`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`AFM`),
  ADD KEY `company_employee` (`COMPANY_AFM`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`AFM`),
  ADD UNIQUE KEY `AFM` (`AFM`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`AFM`),
  ADD UNIQUE KEY `AFM` (`AFM`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `employer_company` FOREIGN KEY (`EMPLOYER_AFM`) REFERENCES `employer` (`AFM`);

--
-- Constraints for table `credentials`
--
ALTER TABLE `credentials`
  ADD CONSTRAINT `user_credentials` FOREIGN KEY (`AFM`) REFERENCES `users` (`AFM`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `company_employee` FOREIGN KEY (`COMPANY_AFM`) REFERENCES `company` (`AFM`),
  ADD CONSTRAINT `user_employee` FOREIGN KEY (`AFM`) REFERENCES `users` (`AFM`);

--
-- Constraints for table `employer`
--
ALTER TABLE `employer`
  ADD CONSTRAINT `user_employer` FOREIGN KEY (`AFM`) REFERENCES `users` (`AFM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
