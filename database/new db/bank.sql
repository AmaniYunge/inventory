-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: May 31, 2014 at 03:41 PM
-- Server version: 5.0.37
-- PHP Version: 5.2.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `moshi_db`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `bank`
-- 

CREATE TABLE `bank` (
  `id` int(100) NOT NULL auto_increment,
  `detail` varchar(300) default NULL,
  `deposit` int(30) default NULL,
  `transfer` int(30) default NULL,
  `balance` int(30) default NULL,
  `date` date default NULL,
  `bankname` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `bank`
-- 

