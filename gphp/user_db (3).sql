-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2016 at 05:35 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `friend_tb`
--

CREATE TABLE IF NOT EXISTS `friend_tb` (
  `sender` int(11) DEFAULT NULL,
  `reciver` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friend_tb`
--

INSERT INTO `friend_tb` (`sender`, `reciver`, `active`) VALUES
(1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE IF NOT EXISTS `user_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) DEFAULT NULL,
  `surname` varchar(20) DEFAULT NULL,
  `mobile_no` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `file` varchar(20) DEFAULT NULL,
  `birthday` varchar(50) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`id`, `firstname`, `surname`, `mobile_no`, `password`, `file`, `birthday`, `gender`) VALUES
(1, 'jibin', 'kumar', 'jyothishsj713@gmail.com', 'Jibin#123jibi', 'images.jpg', '2000-4-7', 'male'),
(2, 'ramesh', 'kumar', 'jyothishsj713@gmail.com', 'Ramesh#123ram', 'images.jpg', '2000-5-10', 'male');
