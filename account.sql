-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 29, 2022 at 07:52 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ejurnal`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_table` varchar(100) NOT NULL,
  `account_nama` varchar(200) DEFAULT NULL,
  `account_surel` varchar(100) NOT NULL,
  `account_username` varchar(100) NOT NULL,
  `account_password` varchar(100) NOT NULL,
  PRIMARY KEY (`account_id`),
  UNIQUE KEY `account_surel` (`account_surel`)
) ENGINE=MyISAM AUTO_INCREMENT=1068 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `account_table`, `account_nama`, `account_surel`, `account_username`, `account_password`) VALUES
(1062, 'author', 'Tridiktya Hardani Putra', 'author@ejurnal.com', 'author', '$2a$12$kg5wUMGj9JvFOncSCima4OrSt7ilO4AZwhdho07u8XO3idl8Dxx02'),
(1063, 'editor', 'Athaya Reyhan Nugroho', 'editor@ejurnal.com', 'editor', '$2a$12$doLY1FfZ9l1bu3o2oihkbefr7Is8UO1UJV44kSVvtD/yA4cI5IERa'),
(1064, 'reviewer', 'Muhammad Azril Fathoni', 'reviewer@ejurnal.com', 'reviewer', '$2a$12$yrJs1VOSRiygD34eFIGup.V/0pQhdlSJ6nfwP20BZeJ/IiPPGIOTu'),
(1065, 'author', 'Fina Keiza Arismana', 'author2@ejurnal.com', 'author2', '$2a$12$1XCbr8vV2rSDaDqCk/.Aq.jtWoyYAp5V59RDUfQWPdbDPa9RSs6EO'),
(1066, 'editor', 'Refaldi Agustian', 'editor2@ejurnal.com', 'editor2', '$2a$12$1XCbr8vV2rSDaDqCk/.Aq.jtWoyYAp5V59RDUfQWPdbDPa9RSs6EO'),
(1067, 'reviewer', 'Muhammad Refaldi Nugroho', 'reviewer2@ejurnal.com', 'reviewer2', '$2a$12$ZVW3RdIQNA0yflA4CvFmXepWV9JQoo1YzVXD1bBUz.kOLEfnO6loS');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
