-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jun 01, 2014 at 11:21 PM
-- Server version: 5.0.37
-- PHP Version: 5.2.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `moshi_db`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `wadaiwa_name`
-- 

CREATE TABLE `wadaiwa_name` (
  `id` int(20) NOT NULL auto_increment,
  `name` varchar(50) default NULL,
  `detail` varchar(200) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `wadaiwa_name`
-- 

INSERT INTO `wadaiwa_name` (`id`, `name`, `detail`) VALUES 
(1, 'daudi', '09876546888');
