-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2014 at 12:27 AM
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
-- Table structure for table `user_comments`
--

CREATE TABLE IF NOT EXISTS `user_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(15) NOT NULL,
  `comment` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `user_comments`
--

INSERT INTO `user_comments` (`id`, `timestamp`, `username`, `comment`) VALUES
(1, '2014-05-08 22:11:18', 'demo', 'comment'),
(2, '2014-05-08 22:12:11', 'demo', 'Demo comment 1'),
(3, '2014-05-08 22:12:23', 'demo', 'This is another comment'),
(4, '2014-05-08 22:12:32', 'demo', 'Check this out at askdjfalsdkjfal;kdsjflkajssd.com'),
(5, '2014-05-08 22:15:26', 'Jake', 'comment'),
(6, '2014-05-08 22:15:33', 'Jake', 'commen,. \r\n'),
(7, '2014-05-08 22:16:22', 'Jake', 'Comments (limit 300 characters)'),
(8, '2014-05-08 22:16:59', 'Jake', 'wat'),
(9, '2014-05-08 22:20:43', 'Jake', 'Comments (limit 300 characters)'),
(10, '2014-05-08 22:20:49', 'Jake', 'comment&#39;s');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
