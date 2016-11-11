-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 11, 2016 at 05:59 PM
-- Server version: 5.6.33-0ubuntu0.14.04.1
-- PHP Version: 5.6.23-1+deprecated+dontuse+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `profile_pic` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `user_name`, `email`, `password`, `first_name`, `last_name`, `profile_pic`) VALUES
(6, 'Karthi_Srv', 'karthivkm619@gmail.com', '285a3d2cd6427e4c6638b5dad8e052055a5d6511', 'KArtha', 'Srv', ''),
(7, 'Karthi_Srv', 'xavierbabu.a@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'xavier', 'babu', ''),
(8, '1116269965', 'xavierbabu@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'xavier', 'babu', '');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `content` varchar(50000) NOT NULL,
  `posted_date` datetime NOT NULL,
  `image` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `content`, `posted_date`, `image`) VALUES
(1, 'Alice in Wonderland, part dos', '''&copy \nYou ought to be ashamed of yourself for asking such a simple question,'' added the Gryphon; and then they both sat silent and looked at poor Alice, who felt ready to sink into the earth. At last the Gryphon said to the Mock Turtle, ''Drive on, old fellow! Don''t be all day about it!'' and he went on in these words:\n                            ''Yes, we went to school in the sea, though you mayn''t believe it—''\n                            ''I never said I didn''t!'' interrupted Alice.\n                            ''You did,'' said the Mock Turtle.', '2016-06-28 00:00:00', 'assets/img/slider/blog3.jpg'),
(2, 'Revolution has begun!', '''I am bound to Tahiti for more men.''\r\n                            ''Very good. Let me board you a moment—I come in peace.'' With that he leaped from the canoe, swam to the boat; and climbing the gunwale, stood face to face with the captain.\r\n                            ''Cross your arms, sir; throw back your head. Now, repeat after me. As soon as Steelkilt leaves me, I swear to beach this boat on yonder island, and remain there six days. If I do not, may lightning strike me!''A pretty scholar,'' laughed the Lakeman. ''Adios, Senor!'' and leaping into the sea, he swam back to his comrades.', '2016-06-28 04:21:32', 'assets/img/slider/blog2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blood_request`
--

CREATE TABLE IF NOT EXISTS `blood_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(100) NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `patient_age` int(3) NOT NULL,
  `blood_needed_date` date NOT NULL,
  `units` int(2) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `alt_mobile_no` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hospital_name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `patient_address` varchar(500) NOT NULL,
  `purpose` varchar(500) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0' COMMENT '0-deactive, 1-Active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `blood_request`
--

INSERT INTO `blood_request` (`id`, `patient_name`, `blood_group`, `patient_age`, `blood_needed_date`, `units`, `mobile_no`, `alt_mobile_no`, `email`, `hospital_name`, `location`, `patient_address`, `purpose`, `status`) VALUES
(1, 'Karthi', 'A1-', 8, '0000-00-00', 2, '9876543210', '1234567899', 'xavierbabu.a@gmail.com', 'Xavier', 'Chennai', '78452', '845', 0),
(2, 'Karthi', 'A1-', 8, '0000-00-00', 2, '9876543210', '1234567899', 'xavierbabu.a@gmail.com', 'Xavier', 'Chennai', '78452', '845', 0),
(3, 'Varun', 'A1+', 11, '0000-00-00', 2, '7894561230', '7894561230', 'karthivkm619@gmail.com', 'Tets', 'Tirupur', '0', 'yhujik', 0),
(4, 'Varun', 'A1+', 11, '0000-00-00', 2, '7894561230', '7894561230', 'karthivkm619@gmail.com', 'Tets', 'Tirupur', '0', 'yhujik', 0),
(5, 'Varun', 'A1+', 11, '0000-00-00', 2, '7894561230', '7894561230', 'karthivkm619@gmail.com', 'Tets', 'Tirupur', '0', 'yhujik', 0),
(6, 'Varun', 'A1+', 11, '0000-00-00', 2, '7894561230', '7894561230', 'karthivkm619@gmail.com', 'Tets', 'Tirupur', '0', 'yhujik', 0),
(7, 'sds', 'A-', 1, '0000-00-00', 2, '9876543210', '7894561230', 'karthivkm619@gmail.com', 'sa', 'asa', '0', 'sas', 0),
(8, 'XAvier', 'A-', 2, '0000-00-00', 3, '9876543210', '1234567890', 'xavierbabu.a@gmail.com', 'a', 'asa', '0', 'asa', 0),
(9, 'asdf', 'A1-', 122, '2012-12-12', 121, '1111111111', '1221122112', 'arunpkt1@gmail.com', '212', '212', '212', '211', 0),
(10, 'dsf', 'A1B+', 2, '0000-00-00', 3, '1234567890', '1234567890', 'xavierbabu.b@gmail.com', 'qwd', 'sdf', '0', 'sdf', 0),
(11, 'qwqw', 'A1B+', 4, '0000-00-00', 3, '9876543210', '1234567890', 'karthi.m@cloudmaxis.com', 'qw', 'qwq', '0', 'wq', 0),
(12, 'asa', 'O+', 4, '0000-00-00', 3, '9876543210', '9876543210', 'xavierbabu.a@gmail.com', '12346', '52', '623', '512', 0),
(13, 'as', 'A2+', 7, '0000-00-00', 4, '9876543210', '9876543210', 'arunpkt1@gmail.com', '545', '521', '512', '512', 0),
(14, 'qwe', 'A2+', 3, '2012-12-01', 3, '9876543210', '9876543210', 'asa', 'asa', 'asa', '0', 'asa', 0),
(15, 'Karthi', 'A1-', 8, '0000-00-00', 2, '9876543210', '1234567899', 'xavierbabu.a@gmail.com', 'Xavier', 'Chennai', '78452', '845', 0),
(16, 'Karthi', 'A1-', 8, '0000-00-00', 2, '9876543210', '1234567899', 'xavierbabu.a@gmail.com', 'Xavier', 'Chennai', '78452', '845', 0);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `country` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `city` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country`, `state`, `district`, `city`) VALUES
(1, 'India', 'TamilNadu', 'Chennai', 'Porur'),
(2, 'India', 'TamilNadu', 'Chennai', 'Guindy'),
(3, 'India', 'TamilNadu', 'Chennai', 'Saidapet'),
(4, 'India', 'TamilNadu', 'Tiruppur', 'Tiruppur'),
(5, 'India', 'TamilNadu', 'Tiruppur', 'Kangayam');

-- --------------------------------------------------------

--
-- Table structure for table `donor_details`
--

CREATE TABLE IF NOT EXISTS `donor_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `date_of_birth` date NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `alternate_no` varchar(10) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1' COMMENT '1-active, 2- Active',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_id` (`email_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `donor_details`
--

INSERT INTO `donor_details` (`id`, `first_name`, `last_name`, `gender`, `date_of_birth`, `blood_group`, `address`, `country`, `state`, `district`, `city`, `mobile_no`, `alternate_no`, `email_id`, `status`) VALUES
(7, 'KArtha', 'Srv', 'male', '0000-00-00', 'O+', 'Test', 'India', 'TamilNadu', 'Chennai', 'Guindy', '9698686307', '8056908799', 'karthivkm619@gmail.com', 0),
(8, 'xavier', 'babu', 'male', '0000-00-00', 'O+', 'Test', 'India', 'TamilNadu', 'Chennai', 'Guindy', '9876543210', '9876543210', 'xavierbabu.a@gmail.com', 1),
(10, 'xavier', 'babu', 'male', '0000-00-00', 'O+', 'Test', 'India', 'TamilNadu', 'Chennai', 'Guindy', '9876543210', '9876543210', 'xavierbabu@gmail.com', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
