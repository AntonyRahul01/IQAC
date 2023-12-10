-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 10, 2023 at 05:06 PM
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
  `s_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
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

INSERT INTO `journal_details` (`appid`, `s_id`, `Name`, `GuideName`, `JournalName`, `HIndex`, `JournalType`, `PaperTitle`, `ImpactFactor`, `IssueDate`, `file`) VALUES
('App id-8960', '22pca118', 'Johnson', 'V. Joe ', 'Journal of Computer Vision and Pattern Recognition', 12, 'Scopus', 'Journal of Computer Vision and Pattern Recognition', '5.8', '2023-08-26', 0x2e2e2f6173736574732f5265736561726368205061706572205075626c69636174696f6e2044657461696c73204d616e6167656d656e742e706466),
('App id-9721', '22pca118', 'Johnson', 'V. Joe ', 'Panda', 15, 'Scopus', 'The panda', '5.9', '2023-09-20', 0x2e2e2f6173736574732f5265736561726368205061706572205075626c69636174696f6e2044657461696c73204d616e6167656d656e742e706466),
('App id-2444', '22pca118', 'Johnson', 'V. Joe ', 'John', 12, 'UGC Care', 'The panda', '5.9', '2023-09-06', 0x2e2e2f6173736574732f5265736561726368205061706572205075626c69636174696f6e2044657461696c73204d616e6167656d656e742e706466),
('App id-9225', '22pca109', 'AntonyRahul', 'A. Charles', 'Journal of Computer Vision and Pattern Recognition', 10, 'Scopus', 'Journal of Computer Vision and Pattern Recognition', '5.9', '2001-12-02', 0x2e2e2f6173736574732f5265736561726368205061706572205075626c69636174696f6e2044657461696c73204d616e6167656d656e742e706466),
('App id-5482', '22pca109', 'AntonyRahul', 'A. Charles', 'Panda', 12, 'Scopus', 'The panda', '5.8', '2023-09-07', 0x2e2e2f6173736574732f5265736561726368205061706572205075626c69636174696f6e2044657461696c73204d616e6167656d656e742e706466),
('App id-4666', '22pca109', 'AntonyRahul', 'A. Charles', 'The nun', 18, 'Web of Science', 'The Nun', '5.7', '2023-09-24', 0x2e2e2f6173736574732f5265736561726368205363686f6c6172204d616e6167656d656e742e706466),
('App id-9535', '22pca118', 'Johnson', 'V. Joe ', 'The John', 19, 'UGC Care', 'Johnson', '6.9', '2023-09-14', 0x2e2e2f6173736574732f5265736561726368205061706572205075626c69636174696f6e2044657461696c73204d616e6167656d656e742e706466),
('App id-0075', '22pca118', 'Johnson', 'V. Joe ', 'peo', 15, 'Scopus', 'peo f', 'peooo', '2001-12-12', 0x2e2e2f6173736574732f5265736561726368205061706572205075626c69636174696f6e2044657461696c73204d616e6167656d656e742e706466),
('App id-7143', '22pca118', 'Johnson', 'V. Joe ', 'kjbk', 654, 'UGC Care', 'kbkj', 'kjbkb', '2001-12-12', 0x2e2e2f6173736574732f5265736561726368205061706572205075626c69636174696f6e2044657461696c73204d616e6167656d656e742e706466),
('App id-1471', '22pca118', 'Johnson', 'V. Joe ', 'kjbk', 45, 'Scopus', '21313', '31213', '5200-12-04', 0x2e2e2f6173736574732f5265736561726368205061706572205075626c69636174696f6e2044657461696c73204d616e6167656d656e742e706466),
('App id-7615', '22pca118', 'Johnson', 'V. Joe ', 'kjbk', 45, 'Scopus', 'kjbkjb', '54', '2001-12-12', 0x2e2e2f6173736574732f5265736561726368205363686f6c6172204d616e6167656d656e742e706466),
('App id-5639', '22pca118', 'Johnson', 'V. Joe ', 'vsv', 54, 'Scopus', 'jhh', '54', '2001-04-05', 0x2e2e2f6173736574732f5265736561726368205363686f6c6172204d616e6167656d656e742e706466);

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
  `file` varchar(100) NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `chindex` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`s_id`, `email`, `name`, `guidename`, `quali`, `file`, `img`, `chindex`) VALUES
('22PCA118', 'johnson@gmail.com', 'Johnson', 'V. Joe ', 'BCA., MCA', '../assets/pdf/Research Paper Publication Details Management.pdf', '../assets/image/1677760242279.png', 0),
('22PCA109', 'antonyrahul@gmail.com', 'AntonyRahul', 'A. Charles', 'BCA.,MCA', '../assets/pdf/Research Paper Publication Details Management.pdf', '../assets/image/pp 1.JPG', 0),
('22PCA123', 'leodaniel@gmail.com', 'Leo Daniel', 'Dr. Ravindran', 'BCA.,MCA', '../assets/pdf/Research Paper Publication Details Management.pdf', '../assets/image/IMG-20230702-WA0058.jpg', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
