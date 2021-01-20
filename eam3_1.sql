-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 20, 2021 at 08:21 PM
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
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `NAME` varchar(20) NOT NULL,
  `SURNAME` varchar(20) NOT NULL,
  `PHONE` int(10) NOT NULL,
  `DATE` varchar(30) NOT NULL,
  `HOUR` varchar(10) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `VISIT_REASON` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `AFM` int(9) NOT NULL,
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
-- Table structure for table `covid_forms`
--

CREATE TABLE `covid_forms` (
  `EMPLOYEE_AFM` varchar(9) NOT NULL,
  `EMPLOYER_AFM` varchar(9) NOT NULL,
  `COMPANY_AFM` varchar(9) NOT NULL,
  `TYPE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covid_forms`
--

INSERT INTO `covid_forms` (`EMPLOYEE_AFM`, `EMPLOYER_AFM`, `COMPANY_AFM`, `TYPE`) VALUES
('222222222', '111111111', '444444444', 'suspend');

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
  `AFM` int(9) NOT NULL,
  `COMPANY_AFM` int(9) NOT NULL
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
  `AFM` int(9) NOT NULL,
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
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`EMAIL`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`AFM`),
  ADD UNIQUE KEY `NAME` (`NAME`),
  ADD KEY `employer_company` (`EMPLOYER_AFM`);

--
-- Indexes for table `covid_forms`
--
ALTER TABLE `covid_forms`
  ADD PRIMARY KEY (`EMPLOYEE_AFM`);

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`AFM`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`);

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
  ADD UNIQUE KEY `AFM` (`AFM`),
  ADD UNIQUE KEY `AMA` (`AMA`,`EMAIL`);

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
