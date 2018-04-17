-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 15, 2018 at 04:05 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ledc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ledc`
--

DROP TABLE IF EXISTS `tbl_ledc`;
CREATE TABLE IF NOT EXISTS `tbl_ledc` (
  `ledc_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ledc_title` varchar(100) NOT NULL,
  `ledc_desc` varchar(100) NOT NULL,
  `ledc_img` varchar(100) NOT NULL,
  PRIMARY KEY (`ledc_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ledc`
--

INSERT INTO `tbl_ledc` (`ledc_id`, `ledc_title`, `ledc_desc`, `ledc_img`) VALUES
(1, 'test title 1', 'test desc 1', 'img1'),
(2, 'test title 2', 'test desc 2', 'img2\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_ip` varchar(50) NOT NULL DEFAULT 'no',
  `user_status` varchar(45) DEFAULT NULL,
  `user_login_count` smallint(10) DEFAULT NULL,
  `user_verified` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_name`, `user_pass`, `user_email`, `user_date`, `user_ip`, `user_status`, `user_login_count`, `user_verified`) VALUES
(6, 'shane', 'shane', 'shane', 'shane.fry@hotmail.com', '2018-02-22 04:37:59', '::1', 'no', NULL, ''),
(28, 'We', 'We', 'We', 'We', '2018-04-15 03:20:27', '::1', '2', 2, '0'),
(29, 'Are Getting', 'Are Getting', 'k', 'k', '2018-04-15 03:20:50', '::1', '2', 2, '0'),
(30, 'A really good mark', 'A Really Good Mark!', 'k', 'k', '2018-04-15 03:21:59', '::1', '2', 2, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_why`
--

DROP TABLE IF EXISTS `tbl_why`;
CREATE TABLE IF NOT EXISTS `tbl_why` (
  `why_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `why_title` varchar(100) NOT NULL,
  `why_desc` varchar(1000) NOT NULL,
  `why_img` varchar(100) NOT NULL,
  PRIMARY KEY (`why_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_why`
--

INSERT INTO `tbl_why` (`why_id`, `why_title`, `why_desc`, `why_img`) VALUES
(1, 'Opportunity', 'There are 14,000+ total businesses in London, Ontario and a high demand of tech industry jobs in the city that are currently unfilled. Some businesses are partnered with major corporations and you could climb the ladder starting here! The opportunities are endless in London. With over thousands of jobs unfilled in the tech industry we have an urgent demand to high veteran and junior employees to bring in knowledge and new styles. ', 'opp_icon.png'),
(2, 'Growth', 'You can not only grow your professional career but yourself as well. The tech industry is growing quickly with everything becoming digital, and your career can sky rocket in no time! You can also grow your connections and probable future family as London is a great place to settle down and pursue your dreams! There are also learning opportunities are endless in London. If you have a passion for a job in the tech industry you can take many paths to learning the best techniques. You can Fanshawe College, Western University, or learn from mentors in the industry.', 'growth_icon.png'),
(3, 'Success', 'With the endless opportunity and growth here in London the success rate of your future and possible new home is high! We offer so much that other tech cities simply dont have or support, and with the growing community you can only go upwards since you are helping us build from the ground up! With over thousands of jobs unfilled in the tech industry we have an urgent demand to high veteran and junior employees to bring in knowledge and new styles, and you could start your success story today! ', 'success_icon.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wow`
--

DROP TABLE IF EXISTS `tbl_wow`;
CREATE TABLE IF NOT EXISTS `tbl_wow` (
  `wow_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `wow_title` varchar(100) NOT NULL,
  `wow_desc` varchar(1000) NOT NULL,
  `wow_img` varchar(100) NOT NULL,
  PRIMARY KEY (`wow_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_wow`
--

INSERT INTO `tbl_wow` (`wow_id`, `wow_title`, `wow_desc`, `wow_img`) VALUES
(1, 'Learning', 'The learning opportunities are endless in London. If you have a passion for a job in the tech industry you can take many paths to learning the best techniques. You can Fanshawe College, Western University, or learn from mentors in the industry. London is a wonderful place to start learning about your future home and work place!', 'learning.png'),
(2, 'Playing', 'There are plenty of activities you can do in London, Ontario. This ranges from family to nightlife activities for students and younger adults. We have many sports arenas, ski/hiking mountain, and nightlife bars and downtown to reach all age group needs and wants!', 'playing.png'),
(3, 'Working', 'With there being over hundreds of jobs available in London, working on your new business taking advantage of a new booming industry, or landing that dream job is not a far reach in London as the tech industry is growing quickly, and you shouldnt miss out! ', 'working.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
