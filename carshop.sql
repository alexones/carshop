-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 10, 2016 at 10:13 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `carshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(260) CHARACTER SET latin1 NOT NULL,
  `vendor` varchar(260) CHARACTER SET latin1 NOT NULL,
  `description` text CHARACTER SET latin1 NOT NULL,
  `picture` varchar(260) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `vendor`, `description`, `picture`) VALUES
(1, 'Audi a3', 'audi', '???? ?????', 'audi_a3.jpg'),
(2, 'mercedes m12', 'mercedes', '', ''),
(3, 'toyota land cruiser', 'toyota', '', ''),
(4, 'lada granta', 'lada', '', ''),
(5, 'nissan n25', 'nissan', '', ''),
(6, 'mazda 626', 'mazda', '', ''),
(7, 'mazda 623', 'mazda', '', ''),
(8, 'audi a5', 'audi', '', ''),
(9, 'nissan juke', 'nissan', '', ''),
(10, 'lada priora', 'lada', '', ''),
(11, 'hrenznaet', 'lada', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
