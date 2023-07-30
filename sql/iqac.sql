-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 30, 2023 at 03:59 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iqac`
--

-- --------------------------------------------------------

--
-- Table structure for table `journal_details`
--

DROP TABLE IF EXISTS `journal_details`;
CREATE TABLE IF NOT EXISTS `journal_details` (
  `Name` varchar(50) NOT NULL,
  `GuideName` varchar(50) NOT NULL,
  `JournalName` varchar(50) NOT NULL,
  `HIndex` int NOT NULL,
  `JournalType` varchar(100) NOT NULL,
  `PaperTitle` varchar(50) NOT NULL,
  `ImpactFactor` varchar(50) NOT NULL,
  `IssueDate` date NOT NULL,
  `Authors` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `journal_details`
--

INSERT INTO `journal_details` (`Name`, `GuideName`, `JournalName`, `HIndex`, `JournalType`, `PaperTitle`, `ImpactFactor`, `IssueDate`, `Authors`) VALUES
('annan leo', '', '', 0, '', '', '', '0000-00-00', ''),
('LEO DANIEL A', 'REEBA', 'Accounts', 1, 'Scopus', 'ijhui', 'Good', '2023-07-21', 'John,Ragul');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `s_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'username',
  `password` varchar(100) NOT NULL COMMENT 'password',
  `position` varchar(100) NOT NULL COMMENT 'position',
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`s_id`, `password`, `position`) VALUES
('22pca109', '1234', 'stud'),
('22pca123', '1234', 'hod'),
('22pca130', '1234', 'iqac');

-- --------------------------------------------------------

--
-- Table structure for table `staff_detail`
--

DROP TABLE IF EXISTS `staff_detail`;
CREATE TABLE IF NOT EXISTS `staff_detail` (
  `s_id` varchar(100) NOT NULL,
  `unam` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `guidename` varchar(100) NOT NULL,
  `quali` varchar(100) NOT NULL,
  `npaper` int NOT NULL,
  UNIQUE KEY `s_id` (`s_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff_detail`
--

INSERT INTO `staff_detail` (`s_id`, `unam`, `email`, `name`, `guidename`, `quali`, `npaper`) VALUES
('22pca109', 'rahul', 'antony@gmail.com', 'AntonyRahul', 'Charles', 'BCA., MCA', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

DROP TABLE IF EXISTS `user_detail`;
CREATE TABLE IF NOT EXISTS `user_detail` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `unam` varchar(100) NOT NULL,
  `upas` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`sno`, `unam`, `upas`, `email`, `name`) VALUES
(1, 'john', '1234', 'johnson@gmail.com', 'Johnson Selvakumar');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
