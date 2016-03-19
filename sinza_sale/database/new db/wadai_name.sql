-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jun 01, 2014 at 11:18 PM
-- Server version: 5.0.37
-- PHP Version: 5.2.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `moshi_db`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `wadai_name`
-- 

CREATE TABLE `wadai_name` (
  `id` int(20) NOT NULL auto_increment,
  `name` varchar(30) default NULL,
  `detail` varchar(200) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `wadai_name`
-- 

INSERT INTO `wadai_name` (`id`, `name`, `detail`) VALUES 
(1, 'TBL', '857994985'),
(2, 'peter baraka', '09876546888'),
(3, 'peter baraka', '09876546888'),
(4, 'peter baraka', '2334556');
