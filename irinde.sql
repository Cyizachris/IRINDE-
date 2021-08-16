-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 11:49 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `irinde`
--

-- --------------------------------------------------------

--
-- Table structure for table `bmi_test`
--

CREATE TABLE `bmi_test` (
  `bmitest-id` int(5) NOT NULL,
  `height` int(10) NOT NULL,
  `weight` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `diabetes-quick check`
--

CREATE TABLE `diabetes-quick check` (
  `diabetes-taste-id` int(5) NOT NULL,
  `Thirsty` int(1) NOT NULL,
  `hunger` int(1) NOT NULL,
  `vision` int(1) NOT NULL,
  `exhaustion` int(1) NOT NULL,
  `pee-frequency` int(1) NOT NULL,
  `user-id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `eye_test`
--

CREATE TABLE `eye_test` (
  `eye-test_id` int(5) NOT NULL,
  `left-eye test` int(1) NOT NULL,
  `right-eye test` int(1) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(10) NOT NULL,
  `user-id` int(11) NOT NULL,
  `First_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `Age` int(5) NOT NULL,
  `email` varchar(10) NOT NULL,
  `Gender` varchar(5) NOT NULL,
  `user_password` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `user-id`, `First_name`, `last_name`, `Age`, `email`, `Gender`, `user_password`) VALUES
(1, 0, 'cyiza', 'mugabo', 27, 'cyi@gmail.', 'gabo', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `tests_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Last name` varchar(100) NOT NULL,
  `eye_test` int(100) NOT NULL,
  `bmi_test` int(100) NOT NULL,
  `diabetes_test` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bmi_test`
--
ALTER TABLE `bmi_test`
  ADD PRIMARY KEY (`bmitest-id`);

--
-- Indexes for table `diabetes-quick check`
--
ALTER TABLE `diabetes-quick check`
  ADD PRIMARY KEY (`diabetes-taste-id`);

--
-- Indexes for table `eye_test`
--
ALTER TABLE `eye_test`
  ADD PRIMARY KEY (`eye-test_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`tests_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bmi_test`
--
ALTER TABLE `bmi_test`
  MODIFY `bmitest-id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diabetes-quick check`
--
ALTER TABLE `diabetes-quick check`
  MODIFY `diabetes-taste-id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eye_test`
--
ALTER TABLE `eye_test`
  MODIFY `eye-test_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `tests_id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
