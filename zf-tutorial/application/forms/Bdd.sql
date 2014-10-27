-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 27, 2014 at 03:12 AM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Users`
--
CREATE DATABASE `Users` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Users`;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Email` varchar(220) NOT NULL,
  `Nom` varchar(220) NOT NULL,
  `Prenom` varchar(220) NOT NULL,
  `date_naissance` date NOT NULL,
  `insert_date` date NOT NULL,
  `Ip` varchar(220) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`Id`, `Email`, `Nom`, `Prenom`, `date_naissance`, `insert_date`, `Ip`) VALUES
(1, 'mathieuhentges@gmail.com', 'Hentges', 'Mathieu', '1992-11-13', '2014-10-25', ''),
(10, 'Test2@gmail.com', 'math', 'NGS', '1953-10-01', '2014-10-27', '::1');
