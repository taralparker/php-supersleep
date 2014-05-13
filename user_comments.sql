-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2014 at 05:31 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=106 ;

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
(10, '2014-05-08 22:20:49', 'Jake', 'comment&#39;s'),
(11, '2014-05-13 00:30:07', 'CR', 'No comment...'),
(12, '2014-05-13 03:56:30', 'CR', 'Comment'),
(13, '2014-05-13 03:56:39', 'CR', 'Another Comment'),
(14, '2014-05-13 03:56:48', 'CR', 'Blank'),
(15, '2014-05-13 03:57:04', 'CR', 'Comment...'),
(16, '2014-05-13 03:57:13', 'CR', 'Another Comment'),
(17, '2014-05-13 03:57:31', 'CR', 'Get Lots Of Sleep!!!!!'),
(18, '2014-05-13 03:58:39', 'CR', 'Hey demo, Demo comment 16'),
(19, '2014-05-13 03:58:48', 'CR', 'More demo comments'),
(20, '2014-05-13 03:59:27', 'CR', 'Hey Jake, wat what?'),
(21, '2014-05-13 03:59:40', 'CR', 'More...'),
(22, '2014-05-13 03:59:52', 'CR', 'And more comments...'),
(23, '2014-05-13 03:59:58', 'CR', 'Over and over'),
(24, '2014-05-13 04:00:13', 'CR', 'Until there are enough to populate at least one page'),
(25, '2014-05-13 04:00:20', 'CR', 'Many more comments'),
(26, '2014-05-13 04:00:33', 'CR', 'Continuous stream of comments from CR'),
(27, '2014-05-13 04:01:09', 'CR', 'In order to show a functionality in the code demonstration'),
(28, '2014-05-13 04:01:24', 'CR', 'Quite a bit more comments'),
(29, '2014-05-13 04:02:11', 'CR', 'And more comments'),
(30, '2014-05-13 04:02:19', 'CR', 'Comment'),
(31, '2014-05-13 04:02:30', 'CR', 'After comment'),
(32, '2014-05-13 04:02:37', 'CR', 'After comment'),
(33, '2014-05-13 04:02:45', 'CR', '.................'),
(34, '2014-05-13 04:02:56', 'CR', 'No other comments?'),
(35, '2014-05-13 04:03:04', 'CR', 'Yes, more comments'),
(36, '2014-05-13 04:03:19', 'CR', 'And many more to go...'),
(37, '2014-05-13 04:04:05', 'CR', 'Yet, each comment brings this test one step closer to a conclusion...'),
(38, '2014-05-13 04:05:01', 'CR', 'A conclusion as to whether or not the paging functionality works.'),
(39, '2014-05-13 04:05:16', 'CR', 'Comment'),
(40, '2014-05-13 04:05:25', 'CR', 'No comment...'),
(41, '2014-05-13 04:05:38', 'CR', 'More comments'),
(42, '2014-05-13 04:06:36', 'CR', '42 (comment 42)'),
(43, '2014-05-13 04:06:50', 'CR', 'More comments'),
(44, '2014-05-13 04:06:58', 'CR', 'Closer and closer to 50'),
(45, '2014-05-13 04:07:03', 'CR', 'And closer'),
(46, '2014-05-13 04:07:10', 'CR', 'And closer\r\n'),
(47, '2014-05-13 04:07:18', 'CR', 'Just a few more comments...'),
(48, '2014-05-13 04:07:37', 'CR', 'Really want more than 50 comments to test the paging functionality'),
(49, '2014-05-13 04:08:22', 'CR', 'Almost there.'),
(50, '2014-05-13 04:08:28', 'CR', 'Very close now'),
(51, '2014-05-13 04:09:02', 'CR', 'Last comment :)'),
(52, '2014-05-13 14:23:52', 'CR', 'Really want 49 more comments, to test all three cases.'),
(53, '2014-05-13 14:24:16', 'CR', 'So more will be submit'),
(54, '2014-05-13 14:24:24', 'CR', 'More comments'),
(55, '2014-05-13 14:24:30', 'CR', 'Comment'),
(56, '2014-05-13 14:24:40', 'CR', 'Another comment'),
(57, '2014-05-13 14:24:48', 'CR', 'Yet another comment'),
(58, '2014-05-13 14:25:28', 'CR', 'Only comments from CR will be on this first page of comments when all of these comments are entered.'),
(59, '2014-05-13 14:25:35', 'CR', 'Comment\r\n'),
(60, '2014-05-13 14:25:41', 'CR', 'Another comment'),
(61, '2014-05-13 14:25:55', 'CR', 'This is a string of comments'),
(62, '2014-05-13 14:26:12', 'CR', 'Comment'),
(63, '2014-05-13 14:26:27', 'CR', 'More comments'),
(64, '2014-05-13 14:26:31', 'CR', 'Comments (limit 300 characters)'),
(65, '2014-05-13 14:26:46', 'CR', 'If there is no comment, then do not submit anything...'),
(66, '2014-05-13 14:27:17', 'CR', 'This whole thread is composed of a list of comments'),
(67, '2014-05-13 14:27:24', 'CR', 'More and more comments'),
(68, '2014-05-13 14:27:31', 'CR', 'And more comments'),
(69, '2014-05-13 14:27:45', 'CR', 'Still want to add more comments, to fill out at least two pages'),
(70, '2014-05-13 14:28:25', 'CR', 'Each page can hold 50 comments as a maximum and 2 pages must be completely filled and 1 comment must be on a third page.'),
(71, '2014-05-13 14:28:43', 'CR', 'Thus, there are 50*2 + 1 comments required'),
(72, '2014-05-13 14:29:10', 'CR', 'Hence, 101 comments are required to test all three test cases of the next page and previous page links.'),
(73, '2014-05-13 14:30:06', 'CR', 'The first test: testing that only the &#34;Next Page&#34; link is displayed on the first page, with 50 entries, and on any subsequent page that has 50 entries.'),
(74, '2014-05-13 14:30:59', 'CR', 'The second test: testing that the &#34;Previous Page&#34; and &#34;Next Page&#34; links are displayed when on a page other than the first and have 50 entries on that page.'),
(75, '2014-05-13 14:31:38', 'CR', 'The third test: testing that only the &#34;Previous Page&#34; link is displayed when on a page that is not the first page and the current page does not contain at least 50 entries.'),
(76, '2014-05-13 14:33:05', 'CR', 'Continue with comments'),
(77, '2014-05-13 14:33:11', 'CR', 'Comment'),
(78, '2014-05-13 14:33:17', 'CR', 'Another Comment'),
(79, '2014-05-13 14:33:23', 'CR', 'Yet another comment'),
(80, '2014-05-13 14:33:37', 'CR', 'More and more comments'),
(81, '2014-05-13 14:33:50', 'CR', '.....'),
(82, '2014-05-13 14:33:57', 'CR', 'Comment'),
(83, '2014-05-13 14:34:18', 'CR', 'Empty comments'),
(84, '2014-05-13 14:34:36', 'CR', 'None of these comments have anything to do with sleep'),
(85, '2014-05-13 14:35:02', 'CR', 'So, maybe a couple about sleep may be added.'),
(86, '2014-05-13 14:35:47', 'CR', 'Perhaps, some comments about dreams are in order.'),
(87, '2014-05-13 14:36:23', 'CR', 'Only 15 comments away, and not a single one pertains to the content on this website.'),
(88, '2014-05-13 14:37:35', 'CR', 'However, each comments added becomes part of a string of comments. A continuous string of comments, such that each comment builds off of the previous comments. Stepping slowly closer to the required amount of comments used in testing some functionality on the website.'),
(89, '2014-05-13 14:37:56', 'CR', 'Longer comments, or shorter comments; it all depends on what is being communicated.'),
(90, '2014-05-13 14:38:23', 'CR', 'Comment in \r\nthe style\r\nthat you like.\r\nDon&#39;t be restricted.'),
(91, '2014-05-13 14:39:56', 'CR', 'More test comments...'),
(92, '2014-05-13 14:40:03', 'CR', 'Comment'),
(93, '2014-05-13 14:40:11', 'CR', 'Just a few more comments'),
(94, '2014-05-13 14:40:52', 'CR', 'This is the 94th comment'),
(95, '2014-05-13 14:41:04', 'CR', 'More comments'),
(96, '2014-05-13 14:41:11', 'CR', 'And more comments'),
(97, '2014-05-13 14:41:18', 'CR', 'And more comments'),
(98, '2014-05-13 14:41:41', 'CR', 'Comment.'),
(99, '2014-05-13 14:41:48', 'CR', 'Very close now'),
(100, '2014-05-13 14:42:27', 'CR', 'This is the 100th comment, only one more.'),
(101, '2014-05-13 14:42:50', 'CR', 'Comment 101'),
(102, '2014-05-13 14:47:20', 'CR', 'Demo comment'),
(103, '2014-05-13 14:50:11', 'Test0', 'New commenter.'),
(104, '2014-05-13 15:10:04', 'Tester', 'First comment with the Tester user.'),
(105, '2014-05-13 15:18:38', 'Tester0', 'Tester0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
