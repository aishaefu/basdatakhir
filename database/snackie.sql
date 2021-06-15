-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 04:54 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snackie`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--
-- Creation: Jun 13, 2021 at 12:43 PM
--

CREATE TABLE IF NOT EXISTS `comment` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Resep_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Comment` text NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Resep_ID` (`Resep_ID`),
  UNIQUE KEY `User_ID` (`User_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='nanti edit lagi';

--
-- RELATIONSHIPS FOR TABLE `comment`:
--   `Resep_ID`
--       `resep` -> `ID`
--   `User_ID`
--       `user` -> `ID`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--
-- Creation: Jun 13, 2021 at 01:30 PM
--

CREATE TABLE IF NOT EXISTS `favorite` (
  `Resep_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Fav` varchar(250) NOT NULL,
  UNIQUE KEY `Resep_ID` (`Resep_ID`),
  UNIQUE KEY `User_ID` (`User_ID`),
  KEY `Resep_ID_2` (`Resep_ID`),
  KEY `User_ID_2` (`User_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='nanti edit lagi';

--
-- RELATIONSHIPS FOR TABLE `favorite`:
--   `Resep_ID`
--       `resep` -> `ID`
--   `User_ID`
--       `user` -> `ID`
--

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--
-- Creation: Jun 13, 2021 at 01:24 PM
--

CREATE TABLE IF NOT EXISTS `resep` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Owner` varchar(50) NOT NULL,
  `Content` text NOT NULL,
  `Image` varchar(100) NOT NULL,
  `User_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Name` (`Name`),
  KEY `user_id` (`User_ID`),
  KEY `User_ID_2` (`User_ID`),
  KEY `User_ID_3` (`User_ID`),
  KEY `Owner` (`Owner`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='nanti edit lagi';

--
-- RELATIONSHIPS FOR TABLE `resep`:
--   `User_ID`
--       `user` -> `ID`
--   `Owner`
--       `user` -> `Username`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--
-- Creation: Jun 13, 2021 at 12:24 PM
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(60) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Password` int(16) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Image` blob NOT NULL,
  `Bio` varchar(100) NOT NULL,
  `Resep Own` varchar(100) NOT NULL,
  `Resep Fav` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Email` (`Email`),
  UNIQUE KEY `Name` (`Name`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `user`:
--

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `Com_ResepID` FOREIGN KEY (`Resep_ID`) REFERENCES `resep` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Com_UserID` FOREIGN KEY (`User_ID`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `Fav_ResepID` FOREIGN KEY (`Resep_ID`) REFERENCES `resep` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Fav_UserID` FOREIGN KEY (`User_ID`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resep`
--
ALTER TABLE `resep`
  ADD CONSTRAINT `Resep_UserID` FOREIGN KEY (`User_ID`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Resep_Username` FOREIGN KEY (`Owner`) REFERENCES `user` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
