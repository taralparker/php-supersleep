-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2014 at 01:12 AM
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
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `post` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='User name and password storage';

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `email`) VALUES
('', '', ''),
('Admin', 'password123', ''),
('danp', 'rocks', ''),
('jordan', 'isawesome', ''),
('jordana', 'alksdjf;alkjdf', ''),
('sergsdfg', 'sdfgsfdg', ''),
('tara', 'password', ''),
('tarap', 'password', ''),
('taraparker', 'rekrap', ''),
('test', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `user_id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`user_id`, `time`) VALUES
(2, '1395256368'),
(2, '1395256379'),
(1, '1395257560'),
(1, '1395257571'),
(1, '1395257761'),
(4, '1395264807'),
(5, '1395264836'),
(2, '1395957276'),
(4, '1396311597'),
(4, '1396311604'),
(4, '1396311608'),
(4, '1396311613'),
(4, '1396311618'),
(4, '1396311622'),
(4, '1396311658'),
(2, '1396311902'),
(7, '1396311984'),
(7, '1396311989'),
(7, '1396311993'),
(7, '1396311997'),
(7, '1396312001'),
(7, '1396312006'),
(7, '1397956555'),
(7, '1398893249'),
(2, '1398983670'),
(2, '1398985783'),
(2, '1398985792'),
(4, '1398985845');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(128) NOT NULL,
  `salt` char(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `email`, `password`, `salt`) VALUES
(1, 'test_user', 'test@example.com', '00807432eae173f652f2064bdca1b61b290b52d40e429a7d295d76a71084aa96c0233b82f1feac45529e0726559645acaed6f3ae58a286b9f075916ebf66cacc', 'f9aab579fc1b41ed0c44fe4ecdbfcdb4cb99b9023abb241a6db833288f4eea3c02f76e0d35204a8695077dcf81932aa59006423976224be0390395bae152d4ef'),
(2, 'test', 'test@test.com', 'ae97ad4806d7fe3f9a15c9942bc15be26c6488672469f13c02e9719144024e0ddaceca7dda33ff32c73dbb9181f708ebe1ac598f997e3999922291cc6d8e687e', '5cdcd55207f7f2ad800241ab27c76cacac0704e1c411bbefc167caa19826538fdafae50e625e5253c944b4e84ba82e1131dd9f20cfc2ebb527f3df3aadb928dc'),
(4, 'Tara', 'tara@tara.com', 'f05ef78fa8ef62d06a56e5e6447e1323e14810bc9d5bf93f82a36a0fed02e444c1362677e87f3b0de8d5a3b3c6227150d089720956fb6cb4074633f78ec792a4', '6d427d7d72aedc5943d3985286412fe0648be5750fccb54cf77660568cc7ef5a4dc0032af47276cd9ea298eca2c300c09b2a66039ec21a7fa1399a6ed6a8f3c3'),
(7, 'demo', 'demo@demo.com', '6467c07d7344c3f84ea401c107348dc6d6677e451e2be6d85935a82f1ab98adc1e2020d7ca1c767dff317d68ee8e5544a8ab5d593122692c141f74d196cc50be', 'd97479ff32d0e1afe932bdbd9e04fa000eb18b05ddbc628119a1f73f8e5957be8828c0046dc7c6fc2412fe4761336c0ab28ab7c3caa643a2500583fd967541b5'),
(8, 'Graph', 'Graph@graph.com', '0a674ab07ae4bd955fa0b76aa62fd8aa8956f4ea7c097e72cf229f55cdcfb2c4d581e9dd0c94174b9d991150dc3591ef85e9680d02c6a1c11cc7caf775588b69', 'f97d96c20871ebb2532d8972d95e06f20bd6bf4fafd2e0bb4df2014d02776d2c28fc889e40d5cfcd12be16ab3fc2e61237be0554004251b4c054da123ac9f029');

-- --------------------------------------------------------

--
-- Table structure for table `sleeplog`
--

CREATE TABLE IF NOT EXISTS `sleeplog` (
  `username` varchar(15) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `comment` text NOT NULL,
  `dreams` text NOT NULL,
  PRIMARY KEY (`username`,`start`,`end`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

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
(48, 'demo', 9, 14, 2014, 12, 0, 'pm', 8, 'Sleep Comments (limit 300 characters)'),
(49, 'Graph', 1, 1, 2014, 12, 0, 'pm', 3.25, ''),
(50, 'Graph', 1, 19, 2014, 12, 0, 'pm', 0.25, ''),
(51, 'Graph', 7, 1, 2007, 12, 0, 'pm', 2.25, ''),
(52, 'Graph', 6, 15, 2004, 12, 0, 'pm', 3, ''),
(53, 'Graph', 2, 25, 2014, 12, 0, 'pm', 0.25, ''),
(54, 'Graph', 9, 9, 2014, 12, 0, 'pm', 13.75, ''),
(55, 'Graph', 1, 1, 2014, 12, 0, 'pm', 5, ''),
(56, 'Graph', 8, 1, 2013, 12, 0, 'pm', 3.5, ''),
(57, 'Graph', 4, 3, 2014, 12, 0, 'pm', 2.25, ''),
(58, 'Graph', 4, 2, 2014, 12, 0, 'pm', 8, ''),
(59, 'Graph', 4, 4, 2014, 12, 0, 'pm', 14.75, ''),
(60, 'Graph', 4, 30, 2014, 10, 0, 'pm', 5, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
