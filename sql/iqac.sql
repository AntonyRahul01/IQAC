-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 08, 2023 at 04:00 PM
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
  `position` varchar(100) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`s_id`, `password`, `position`) VALUES
('22pca109', '1234', 'stud'),
('22pca123', '1234', 'hod'),
('22pca130', '1234', 'iqac'),
('22pca102', '1234', 'stud'),
('22pen101', '1234', 'stud');

-- --------------------------------------------------------

--
-- Table structure for table `staff_detail`
--

DROP TABLE IF EXISTS `staff_detail`;
CREATE TABLE IF NOT EXISTS `staff_detail` (
  `s_id` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `guidename` varchar(100) NOT NULL,
  `quali` varchar(100) NOT NULL,
  `npaper` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff_detail`
--

INSERT INTO `staff_detail` (`s_id`, `email`, `name`, `guidename`, `quali`, `npaper`) VALUES
('22pca109', 'antonyrahul@gmail.com', 'Antony Rahul', 'A. Charles', 'BCA', '9'),
('22pen101', 'johnson@gmail.com', 'Johnson', 'Britto', 'Bsc.Phy., MCA', '8'),
('22pca102', 'reeba@gmail.com', 'Jeba Reeba', 'Rravindran', 'MCA', '10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
