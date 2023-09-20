-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 20, 2023 at 02:06 AM
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
  `appid` varchar(255) NOT NULL,
  `dno` varchar(255) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `GuideName` varchar(50) NOT NULL,
  `JournalName` varchar(50) NOT NULL,
  `HIndex` int NOT NULL,
  `JournalType` varchar(100) NOT NULL,
  `PaperTitle` varchar(50) NOT NULL,
  `ImpactFactor` varchar(50) NOT NULL,
  `IssueDate` date NOT NULL,
  `file` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `journal_details`
--

INSERT INTO `journal_details` (`appid`, `dno`, `Name`, `GuideName`, `JournalName`, `HIndex`, `JournalType`, `PaperTitle`, `ImpactFactor`, `IssueDate`, `file`) VALUES
('App id-7219', '22pca109', 'AntonyRahul', 'A. Charles', 'Panda', 12, 'UGC Care', 'Panda', 'The Panda', '2023-09-11', 0x2e2e2f6173736574732f5265736561726368205061706572205075626c69636174696f6e2044657461696c73204d616e6167656d656e742e706466),
('App id-0033', '22pca123', 'Leo Daniel', 'Dr. Ravindran', 'Leo', 12, 'Scopus', 'Leo', 'Leo', '2001-12-11', 0x2e2e2f6173736574732f5265736561726368205061706572205075626c69636174696f6e2044657461696c73204d616e6167656d656e742e706466);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `s_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'username',
  `password` varchar(100) NOT NULL COMMENT 'password',
  `position` varchar(100) NOT NULL,
  `department` varchar(255) NOT NULL COMMENT 'Department',
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`s_id`, `password`, `position`, `department`) VALUES
('22pca109', '1234', 'stud', 'Computer Science'),
('22pca123', '1234', 'stud', 'Computer Science'),
('22pca102', '1234', 'iqac', ''),
('22pca130', '1234', 'hod', ''),
('22pca118', '1234', 'stud', 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `staff_detail`
--

DROP TABLE IF EXISTS `staff_detail`;
CREATE TABLE IF NOT EXISTS `staff_detail` (
  `s_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `unam` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff_detail`
--

INSERT INTO `staff_detail` (`s_id`, `email`, `unam`, `name`) VALUES
('22pca102', 'reeba@gmail.com', 'Jeba Reeba', 'Jeba Reeba'),
('22pca130', 'selva@gmail.com', 'Selva Deeshani', 'Selva Deeshani');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

DROP TABLE IF EXISTS `user_details`;
CREATE TABLE IF NOT EXISTS `user_details` (
  `s_id` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `guidename` varchar(100) NOT NULL,
  `quali` varchar(100) NOT NULL,
  `npaper` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`s_id`, `email`, `name`, `guidename`, `quali`, `npaper`, `file`, `img`) VALUES
('22pca118', 'johnson@gmail.com', 'Johnson', 'V. Joe ', 'BCA., MCA', '18', '../assets/pdf/Research Paper Publication Details Management.pdf', '../assets/image/1677760242279.png'),
('22pca109', 'antonyrahul@gmail.com', 'AntonyRahul', 'A. Charles', 'BCA.,MCA', '9', '../assets/pdf/Research Paper Publication Details Management.pdf', '../assets/image/pp 1.JPG'),
('22pca123', 'leodaniel@gmail.com', 'Leo Daniel', 'Dr. Ravindran', 'BCA.,MCA', '23', '../assets/pdf/Research Paper Publication Details Management.pdf', '../assets/image/IMG-20230702-WA0058.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
