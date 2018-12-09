-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 27, 2018 at 03:13 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tectone`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_designs`
--

DROP TABLE IF EXISTS `tbl_designs`;
CREATE TABLE IF NOT EXISTS `tbl_designs` (
  `designs_id` smallint(4) UNSIGNED NOT NULL AUTO_INCREMENT,
  `designs_image` varchar(50) NOT NULL DEFAULT 'noThumb.jpg',
  `designs_title` varchar(75) NOT NULL,
  `designs_text` text NOT NULL,
  PRIMARY KEY (`designs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_designs`
--

INSERT INTO `tbl_designs` (`designs_id`, `designs_image`, `designs_title`, `designs_text`) VALUES
(1, 'easymerchant_logo.png', 'Easy Merchant Logo Design', 'Logo design for a national supplier of building plastics in the UK. They had reached out to my wife and I to create a logo for their business. I worked on the conceptualization & sketching while she finalized and vectorized the design. '),
(2, 'gtc_logo.png', 'Guacamole Theatre Company Logo Design', 'Logo Design for the young theatre company: Guacamole Theatre Company. Group of individuals who were mostly recent alumni from Fanshawe College Theatre Arts. I was tasked with designing a logo for their brand. '),
(3, 'gtc_poster.png', 'Summertime Flyer Poster', 'Poster & Flyer design for Guacamole Theatre Company\'s production: Summertime. I provided the sketch work, conceptualization, and added the font on the poster. My wife illustrated the background image. \r\n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
