-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2021 at 02:47 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `averages`
--

CREATE TABLE `averages` (
  `ID` varchar(5) NOT NULL,
  `Discription` text NOT NULL,
  `Grade` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `final_grades`
--

CREATE TABLE `final_grades` (
  `ID` varchar(5) NOT NULL,
  `Discription` text NOT NULL,
  `Grade` smallint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `final_grades`
--

INSERT INTO `final_grades` (`ID`, `Discription`, `Grade`) VALUES
('PPA', 'Object Oriented', 280);

-- --------------------------------------------------------

--
-- Table structure for table `individual_grades`
--

CREATE TABLE `individual_grades` (
  `ID` varchar(3) NOT NULL,
  `Discription` text NOT NULL,
  `Exam_1` int(5) NOT NULL,
  `Exam_2` int(5) NOT NULL,
  `Project` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `individual_grades`
--

INSERT INTO `individual_grades` (`ID`, `Discription`, `Exam_1`, `Exam_2`, `Project`) VALUES
('PPA', 'Object Oriented', 90, 90, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `final_grades`
--
ALTER TABLE `final_grades`
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `individual_grades`
--
ALTER TABLE `individual_grades`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`),
  ADD KEY `ID_2` (`ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `final_grades`
--
ALTER TABLE `final_grades`
  ADD CONSTRAINT `Key` FOREIGN KEY (`ID`) REFERENCES `individual_grades` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
