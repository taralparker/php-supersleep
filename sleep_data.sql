-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2014 at 11:52 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `super_sleep`
--

-- --------------------------------------------------------

--
-- Table structure for table `sleep_data`
--

CREATE TABLE IF NOT EXISTS `sleep_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `month` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `hour` int(11) NOT NULL,
  `min` int(11) NOT NULL,
  `ampm` varchar(2) NOT NULL,
  `hoursSlept` float NOT NULL,
  `comment` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `sleep_data`
--

INSERT INTO `sleep_data` (`id`, `username`, `month`, `day`, `year`, `hour`, `min`, `ampm`, `hoursSlept`, `comment`) VALUES
(19, 'demo', 1, 1, 2011, 11, 10, 'pm', 5, 'Sleep Comments (limit 300 characters)'),
(20, 'demo', 4, 18, 2014, 12, 0, 'pm', 1, 'Sleep Comments (limit 300 characters)'),
(21, 'demo', 4, 17, 2014, 12, 0, 'pm', 10, 'Sleep Comments (limit 300 characters)'),
(22, 'demo', 4, 16, 2014, 12, 0, 'pm', 0, 'Sleep Comments (limit 300 characters)'),
(23, 'demo', 4, 15, 2014, 12, 0, 'pm', 8, 'Sleep Comments (limit 300 characters)'),
(24, 'demo', 4, 14, 2014, 12, 0, 'pm', 9, 'Sleep Comments (limit 300 characters)'),
(25, 'demo', 4, 13, 2014, 12, 0, 'pm', 11, 'Sleep Comments (limit 300 characters)'),
(26, 'demo', 4, 12, 2014, 12, 0, 'pm', 0, 'Sleep Comments (limit 300 characters)'),
(27, 'demo', 4, 11, 2014, 12, 0, 'pm', 0, 'Sleep Comments (limit 300 characters)'),
(28, 'demo', 5, 1, 2014, 12, 0, 'pm', 3, 'Sleep Comments (limit 300 characters)'),
(29, 'demo', 5, 15, 2014, 12, 0, 'pm', 5, 'Sleep Comments (limit 300 characters)'),
(30, 'demo', 6, 9, 2014, 12, 0, 'pm', 5, 'Sleep Comments (limit 300 characters)'),
(31, 'demo', 12, 17, 2014, 12, 0, 'pm', 9, 'Sleep Comments (limit 300 characters)'),
(32, 'demo', 10, 4, 2014, 12, 0, 'pm', 13, 'Sleep Comments (limit 300 characters)'),
(33, 'demo', 11, 13, 2014, 12, 0, 'pm', 9, 'Sleep Comments (limit 300 characters)'),
(34, 'demo', 8, 7, 2014, 12, 0, 'pm', 0, 'Sleep Comments (limit 300 characters)'),
(35, 'demo', 10, 12, 2014, 12, 0, 'pm', 14, 'Sleep Comments (limit 300 characters)'),
(36, 'demo', 12, 12, 2014, 12, 0, 'pm', 15, 'Sleep Comments (limit 300 characters)'),
(37, 'demo', 8, 17, 2014, 12, 0, 'pm', 5, 'Sleep Comments (limit 300 characters)'),
(38, 'demo', 11, 12, 2014, 12, 0, 'pm', 5, 'Sleep Comments (limit 300 characters)'),
(39, 'demo', 6, 11, 2014, 12, 0, 'pm', 13, 'Sleep Comments (limit 300 characters)'),
(40, 'demo', 10, 29, 2014, 12, 0, 'pm', 13, 'Sleep Comments (limit 300 characters)'),
(41, 'demo', 9, 23, 2014, 12, 0, 'pm', 11, 'Sleep Comments (limit 300 characters)'),
(42, 'demo', 5, 30, 2014, 12, 0, 'pm', 15, 'Sleep Comments (limit 300 characters)'),
(43, 'demo', 11, 29, 2014, 12, 0, 'pm', 2, 'Sleep Comments (limit 300 characters)'),
(44, 'demo', 9, 14, 2014, 12, 0, 'pm', 14, 'Sleep Comments (limit 300 characters)'),
(45, 'demo', 7, 13, 2014, 12, 0, 'pm', 3, 'Sleep Comments (limit 300 characters)'),
(46, 'demo', 9, 10, 2014, 12, 0, 'pm', 2, 'Sleep Comments (limit 300 characters)'),
(47, 'demo', 11, 8, 2014, 12, 0, 'pm', 1, 'Sleep Comments (limit 300 characters)'),
(48, 'demo', 9, 14, 2014, 12, 0, 'pm', 8, 'Sleep Comments (limit 300 characters)');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
