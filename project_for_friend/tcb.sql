-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 28, 2018 at 11:28 PM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tcb`
--
CREATE DATABASE IF NOT EXISTS `tcb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tcb`;

-- --------------------------------------------------------

--
-- Table structure for table `bilheteira`
--

CREATE TABLE IF NOT EXISTS `bilheteira` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_motorista` int(11) NOT NULL,
  `carreira` int(11) NOT NULL,
  `hora` varchar(255) NOT NULL,
  `b_inicial` varchar(255) NOT NULL,
  `b_final` varchar(255) NOT NULL,
  `serie_inicial` varchar(255) NOT NULL,
  `serie_final` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `bilheteira`
--

INSERT INTO `bilheteira` (`id`, `id_motorista`, `carreira`, `hora`, `b_inicial`, `b_final`, `serie_inicial`, `serie_final`) VALUES
(5, 666, 0, '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'teste', 'teste1234@teste.com', '698dc19d489c4e4db73e28a713eab07b'),
(2, 'testes', 'teste@teste1.com', '698dc19d489c4e4db73e28a713eab07b'),
(3, 'testeteste', 'teste1234@teste.com5', '2f3e9eccc22ee583cf7bad86c751d865'),
(4, 'rubengino', 'rubengino123@gmail.com', '44dc9dd61167c63a5c9b7e31d9b032c5'),
(5, 'teste123456', 'teste123456@teste123456.com', '2f3e9eccc22ee583cf7bad86c751d865');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
