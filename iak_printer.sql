-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2013 at 02:06 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iak_printer`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_print`
--

CREATE TABLE IF NOT EXISTS `log_print` (
  `id_print` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `nama_dokumen` varchar(500) NOT NULL,
  `jml_hal` int(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_print`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `log_print`
--

INSERT INTO `log_print` (`id_print`, `id_user`, `nama_dokumen`, `jml_hal`, `date`) VALUES
(1, 1, 'Test Page', 33, '2013-11-06 09:24:25'),
(38, 1, 'bastian_527a0c7c1af3d.png', 1, '2013-11-06 09:31:49'),
(39, 1, '', 2, '2013-11-06 09:47:58'),
(40, 1, '', 2, '2013-11-06 09:48:32'),
(41, 1, 'bastian_527a1205b2cc1.png', 1, '2013-11-06 09:55:35'),
(42, 1, 'bastian_527a3666948e1.jpg', 1, '2013-11-06 12:30:47'),
(43, 1, 'bastian_527a39f7bc06e.png', 1, '2013-11-06 12:45:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'bastian', '21'),
(2, 'ilham', 'macho'),
(3, 'oka', 'gante'),
(4, 'rosa', 'canti'),
(5, 'haha', 'hehe');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
