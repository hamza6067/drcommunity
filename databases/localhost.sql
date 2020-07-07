-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 19, 2017 at 09:36 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medicounsel`
--
CREATE DATABASE `medicounsel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `medicounsel`;

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `ans_id` int(11) NOT NULL AUTO_INCREMENT,
  `ques_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `date_time` varchar(30) NOT NULL,
  PRIMARY KEY (`ans_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`ans_id`, `ques_id`, `id`, `answer`, `date_time`) VALUES
(1, 1, 1, 'programming language', '2017-07-22 06:10:39'),
(2, 2, 1, 'scripting language', '2017-07-22 06:11:47'),
(3, 2, 1, 'developed by rrresmes lerdof', '2017-07-22 06:19:23'),
(5, 4, 0, 'programming language', '2017-07-23 04:08:58'),
(6, 5, 0, 'scripting language', '2017-07-23 04:09:41'),
(7, 4, 3, 'programming language', '2017-07-23 04:16:35');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `ques_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(200) NOT NULL,
  `id` int(11) NOT NULL,
  `date_time` varchar(30) NOT NULL,
  PRIMARY KEY (`ques_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`ques_id`, `question`, `id`, `date_time`) VALUES
(6, 'what is c?', 3, '2017-07-23 04:12:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', 'diya');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appoinment`
--

CREATE TABLE IF NOT EXISTS `tbl_appoinment` (
  `app_id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_id` int(11) NOT NULL,
  `doc_name` varchar(30) NOT NULL,
  `pat_id` int(11) NOT NULL,
  `pat_name` varchar(30) NOT NULL,
  `date_time` varchar(20) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`app_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_appoinment`
--

INSERT INTO `tbl_appoinment` (`app_id`, `doc_id`, `doc_name`, `pat_id`, `pat_name`, `date_time`, `status`) VALUES
(1, 3, 'diya', 3, 'amaan', '', 'b'),
(2, 4, 'gauri', 4, 'amaan', '', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor`
--

CREATE TABLE IF NOT EXISTS `tbl_doctor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `age` int(3) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `address` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `degree` varchar(60) NOT NULL,
  `speciality` varchar(30) NOT NULL,
  `fees` int(30) NOT NULL,
  `timing` varchar(11) NOT NULL,
  `foreign_degree` varchar(1) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_doctor`
--

INSERT INTO `tbl_doctor` (`id`, `name`, `fname`, `gender`, `dob`, `age`, `mobile`, `address`, `email`, `password`, `degree`, `speciality`, `fees`, `timing`, `foreign_degree`, `status`) VALUES
(6, 'amaan', '', 'male', '', 0, '', '', '', '', '', 'dentist', 0, '', '-', '-'),
(7, 'amaan', '', 'male', '', 0, '', '', '', '', '', 'dentist', 0, '', '-', '-'),
(3, 'diya', 'papa', 'male', '17/06/1997', 23, '23232323', 'dsfsefdc', 'diyatg@gmail.com', '31232321', 'dwf', 'efre', 334, 'eww', 'y', 'y'),
(4, 'gauri', 'papa', 'female', '17/06/1997', 22, '123456345', 'kanpur', 'diyatg@gmail.com', '1234', 'MBBS', 'dentist', 2200, '2:00-6:00', 'y', 'n'),
(8, '', '', '', '', 0, '', '', '', '', '', '', 0, '', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE IF NOT EXISTS `tbl_message` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `email` varchar(60) NOT NULL,
  `message` varchar(150) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`msg_id`, `name`, `mobile`, `email`, `message`) VALUES
(2, 'anu', '1234567', 'amirtg@gmail.com', 'thank u!!!'),
(3, '', '', '', ''),
(4, '', '', '', ''),
(5, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient`
--

CREATE TABLE IF NOT EXISTS `tbl_patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `age` int(3) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `address` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_patient`
--

INSERT INTO `tbl_patient` (`id`, `name`, `fname`, `gender`, `dob`, `age`, `mobile`, `address`, `email`, `password`, `status`) VALUES
(3, 'amaan', 'papa', 'male', '17/06/1997', 22, '123456', 'lko', 'amirtg@gmail.com', '1234', 'n'),
(4, 'amaan', 'papa', 'male', '17/06/1997', 22, '123456', 'lko', 'amirtg@gmail.com', '1234', 'n');
