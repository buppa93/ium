-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: Dic 23, 2015 alle 16:39
-- Versione del server: 5.5.46
-- Versione PHP: 5.5.30-1+deb.sury.org~precise+1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test_ium`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `q_sus`
--

USE test_ium;

CREATE TABLE IF NOT EXISTS `q_attrakdiff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `studio_id` varchar(50) NOT NULL,
  `r1` int(1) NOT NULL,
  `r2` int(1) NOT NULL,
  `r3` int(1) NOT NULL,
  `r4` int(1) NOT NULL,
  `r5` int(1) NOT NULL,
  `r6` int(1) NOT NULL,
  `r7` int(1) NOT NULL,
  `r8` int(1) NOT NULL,
  `r9` int(1) NOT NULL,
  `r10` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
