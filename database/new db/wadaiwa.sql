-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jun 01, 2014 at 11:22 PM
-- Server version: 5.0.37
-- PHP Version: 5.2.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `moshi_db`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `wadaiwa`
-- 

CREATE TABLE `wadaiwa` (
  `id` int(20) NOT NULL auto_increment,
  `detail` varchar(200) default NULL,
  `lipa` int(30) default NULL,
  `pokea` int(30) default NULL,
  `date` date default NULL,
  `balance` int(30) default NULL,
  `wadaiwa_name` int(20) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `wadaiwa`
-- 

INSERT INTO `wadaiwa` (`id`, `detail`, `lipa`, `pokea`, `date`, `balance`, `wadaiwa_name`) VALUES 
(1, 'peter vane', NULL, 300000, '2014-06-01', 300000, 1),
(2, 'george frank', 50000, NULL, '2014-06-01', 250000, 1),
(3, 'imeletwa na petro kutoka kwa willy', 50000, NULL, '2014-06-01', 200000, 1);
