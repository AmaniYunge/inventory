-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jun 01, 2014 at 11:20 PM
-- Server version: 5.0.37
-- PHP Version: 5.2.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `moshi_db`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `wadai`
-- 

CREATE TABLE `wadai` (
  `id` int(20) NOT NULL auto_increment,
  `detail` varchar(200) default NULL,
  `pokea` int(30) default NULL,
  `lipa` int(30) default NULL,
  `date` date default NULL,
  `balance` int(30) default NULL,
  `wadai_name` int(30) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `wadai`
-- 

INSERT INTO `wadai` (`id`, `detail`, `pokea`, `lipa`, `date`, `balance`, `wadai_name`) VALUES 
(1, 'peter vane', 200000, NULL, '2014-06-01', 200000, 3),
(2, 'peter vane', 5000000, NULL, '2014-06-01', 5000000, 1),
(3, 'george frank', NULL, 1000000, '2014-06-01', 4000000, 1),
(4, 'peter vane', 200000, NULL, '2014-06-01', 200000, 2),
(5, 'george frank', NULL, 50000, '2014-06-01', 3950000, 1),
(6, 'peter vane', 200000, NULL, '2014-06-01', 400000, 2),
(7, 'george frank', NULL, 10000, '2014-06-01', 390000, 2);
