-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: May 31, 2014 at 03:37 PM
-- Server version: 5.0.37
-- PHP Version: 5.2.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `moshi_db`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `acc_name`
-- 

CREATE TABLE `acc_name` (
  `id` int(15) NOT NULL auto_increment,
  `name` varchar(100) default NULL,
  `detail` varchar(250) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `acc_name`
-- 

