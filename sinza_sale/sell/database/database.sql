﻿-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jul 14, 2013 at 12:38 PM
-- Server version: 5.0.37
-- PHP Version: 5.2.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `moshi_db`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `data`
-- 

CREATE TABLE `data` (
  `id` int(100) NOT NULL auto_increment,
  `nm` varchar(150) default NULL,
  `ct` varchar(100) default NULL,
  `per` varchar(100) default NULL,
  `pr` int(100) default NULL,
  `qt` int(100) default NULL,
  `d` date default NULL,
  `t` time default NULL,
  `by` int(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

-- 
-- Dumping data for table `data`
-- 

INSERT INTO `data` (`id`, `nm`, `ct`, `per`, `pr`, `qt`, `d`, `t`, `by`) VALUES 
(1, 'coca cola', 'soda', 'moja', 500, 5, '2013-06-30', '18:29:21', 400),
(2, 'pepsi', 'soda', 'crate', 500, 0, '2013-06-30', '18:29:21', 400),
(3, 'kili ', 'beer', 'kreti', 1800, 990, '2013-06-30', '18:31:26', 1200),
(4, 'serengeti', 'beer', 'kreti', 2000, 1193, '2013-06-30', '18:31:26', 1800),
(5, 'kilimanjaro', 'water', 'cret', 1000, 994, '2013-06-30', '18:36:57', 800),
(6, 'dodoma', 'wyne', 'cret', 20000, 196, '2013-06-28', '18:36:57', 15000),
(7, 'konyagi', 'beer', 'chupa 1', 1200, 828, '2013-06-20', '18:38:39', 1000),
(8, 'cola', 'juice', 'caton', 500, 91, '2013-06-28', '18:38:39', 400),
(11, 'mango', 'juice', 'caton', 300, 993, '2013-06-29', '18:42:23', 250),
(12, 'fanta', '', 'cret', 800, 2000, '2013-06-28', '18:42:23', 500),
(13, 'coca cola', '', 'cret', 800, 2000, NULL, '18:48:01', 500),
(14, 'sayona', 'juice', 'caton', 600, 1970, '2013-07-17', '21:11:52', 500),
(15, 'fanta', 'soda', '24btm', 1000, 5, '2013-07-18', '21:11:52', 800),
(22, 'hp', '', 'laptop', 400000, 1, '2013-07-17', '14:16:47', 300000),
(23, 'acer', '', 'laptop', 400000, 8, '2013-07-17', '14:19:19', 300000),
(24, 'dell', '', 'laptop', 400000, 7, '2013-07-17', '14:42:47', 300000),
(25, 'toshiba', '', 'laptop', 400000, 8, '2013-07-17', '14:43:53', 300000),
(26, 'uhai', 'water', 'katoni', 400000, 8, '2013-07-17', '14:45:18', 300000),
(27, 'mango', '', '1', 200, 209, '2013-07-17', '14:51:46', 300000),
(28, 'wali', '', 'sahani', 1200, 10, '2013-07-17', '09:42:00', 300),
(29, 'zabibu', 'wyne', 'bottom', 20000, 28, '2013-07-17', '22:58:08', 15000),
(30, 'redio', '', 'redio', 40000, 110, '2013-07-17', '13:31:44', 300000),
(31, 'bnv', '', 'nmm', 788000, 45, '2013-07-17', '21:13:03', 300000);

-- --------------------------------------------------------

-- 
-- Table structure for table `rdby`
-- 

CREATE TABLE `rdby` (
  `id` int(11) NOT NULL auto_increment,
  `pid` int(11) default NULL,
  `qt` int(11) default NULL,
  `date` date default NULL,
  `time` time default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `rdby`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `rdsell`
-- 

CREATE TABLE `rdsell` (
  `id` int(100) NOT NULL auto_increment,
  `pid` int(100) default NULL,
  `qt` int(100) default NULL,
  `cst` int(100) default NULL,
  `custm` varchar(100) default NULL,
  `date` date default NULL,
  `time` time default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

-- 
-- Dumping data for table `rdsell`
-- 

INSERT INTO `rdsell` (`id`, `pid`, `qt`, `cst`, `custm`, `date`, `time`) VALUES 
(1, 1, 10, 5000, 'petro', '2013-07-11', '08:29:04'),
(2, 2, 10, 5000, 'petro', '2013-07-11', '08:31:30'),
(3, 15, 8, 5000, 'petro', '2013-07-11', '08:32:40'),
(4, 1, 10, 5000, 'petro', '2013-07-11', '08:33:58'),
(5, 1, 10, 5000, 'juma musa', '2013-07-11', '08:34:54'),
(6, 3, 100, 180000, 'karim', '2013-07-11', '08:35:44'),
(7, 4, 100, 200000, 'karim', '2013-07-11', '08:35:44'),
(8, 7, 100, 120000, 'karim', '2013-07-11', '08:35:44'),
(9, 3, 200, 360000, 'karim', '2013-07-12', '13:14:20'),
(10, 4, 8, 16000, 'karim', '2013-07-12', '13:14:20'),
(11, 7, 34, 40800, 'karim', '2013-07-12', '13:14:20'),
(12, 30, 3, 120000, 'husina', '2013-07-12', '13:32:35'),
(13, 1, 2, 1000, 'hassah', '2013-07-12', '14:41:28'),
(14, 2, 2, 1000, 'hassah', '2013-07-12', '14:41:28'),
(15, 3, 2, 3600, 'hassah', '2013-07-12', '14:41:28'),
(16, 4, 2, 4000, 'hassah', '2013-07-12', '14:41:28'),
(17, 5, 2, 2000, 'hassah', '2013-07-12', '14:41:28'),
(18, 6, 2, 40000, 'hassah', '2013-07-12', '14:41:28'),
(19, 7, 2, 2400, 'hassah', '2013-07-12', '14:41:28'),
(20, 8, 2, 1000, 'hassah', '2013-07-12', '14:41:28'),
(21, 11, 2, 600, 'hassah', '2013-07-12', '14:41:28'),
(22, 14, 2, 1000, 'hassah', '2013-07-12', '14:41:28'),
(23, 15, 2, 2000, 'hassah', '2013-07-12', '14:41:28'),
(24, 22, 2, 800000, 'hassah', '2013-07-12', '14:41:28'),
(25, 23, 2, 800000, 'hassah', '2013-07-12', '14:41:28'),
(26, 24, 2, 800000, 'hassah', '2013-07-12', '14:41:28'),
(27, 25, 2, 800000, 'hassah', '2013-07-12', '14:41:28'),
(28, 26, 2, 800000, 'hassah', '2013-07-12', '14:41:28'),
(29, 29, 2, 40000, 'hassah', '2013-07-12', '14:41:29'),
(30, 2, 8, 4000, 'omy', '2013-07-12', '16:52:18'),
(31, 3, 1, 1800, 'omy', '2013-07-12', '16:52:18'),
(32, 8, 5, 2500, 'omy', '2013-07-12', '16:52:18'),
(33, 24, 1, 400000, 'omy', '2013-07-12', '16:52:18'),
(34, 8, 900, 450000, 'karim', '2013-07-12', '19:15:57'),
(35, 22, 5, 2000000, 'mkkm', '2013-07-12', '21:01:49'),
(36, 22, 2, 800000, 'mimi', '2013-07-12', '21:05:44'),
(37, 11, 1000, 300000, 'mimi', '2013-07-12', '21:06:10'),
(38, 1, 67, 33500, 'mimi', '2013-07-12', '21:07:11'),
(39, 1, 1, 500, 'karim', '2013-07-12', '21:49:01'),
(40, 15, 18, 18000, 'mimi', '2013-07-12', '21:50:11'),
(41, 3, 1, 1800, 'karim', '2013-07-13', '07:28:37'),
(42, 7, 1, 1200, 'karim', '2013-07-13', '07:28:37'),
(43, 11, 2, 600, 'karim', '2013-07-13', '07:28:37'),
(44, 15, 1, 1000, 'karim', '2013-07-13', '07:28:37'),
(45, 1, 1, 500, 'juma', '2003-07-14', '07:57:21'),
(46, 2, 2, 1000, 'juma', '2003-07-14', '07:57:21'),
(47, 15, 1, 1000, 'juma', '2003-07-14', '07:57:21'),
(48, 1, 5, 2500, 'juma', '2013-07-14', '08:13:17'),
(49, 2, 66, 33000, 'juma', '2013-07-14', '08:13:18'),
(50, 3, 4, 7200, 'juma', '2013-07-14', '08:13:18'),
(51, 5, 4, 4000, 'juma', '2013-07-14', '08:13:18'),
(52, 6, 2, 40000, 'juma', '2013-07-14', '08:13:18'),
(53, 7, 4, 4800, 'juma', '2013-07-14', '08:13:18'),
(54, 14, 5, 2500, 'juma', '2013-07-14', '08:13:18'),
(55, 1, 1, 500, 'juma', '2013-07-14', '10:25:03'),
(56, 2, 2, 1000, 'juma', '2013-07-14', '10:25:03'),
(57, 3, 3, 5400, 'juma', '2013-07-14', '10:25:03'),
(58, 4, 3, 6000, 'juma', '2013-07-14', '10:25:03'),
(59, 7, 32, 38400, 'juma', '2013-07-14', '10:25:03'),
(60, 8, 2, 1000, 'juma', '2013-07-14', '10:25:03'),
(61, 11, 3, 900, 'juma', '2013-07-14', '10:25:03'),
(62, 14, 23, 11500, 'juma', '2013-07-14', '10:25:03'),
(63, 15, 5, 5000, 'juma', '2013-07-14', '11:12:21'),
(64, 3, 100, 180000, 'juma', '2013-07-14', '11:16:33'),
(65, 4, 100, 200000, 'juma', '2013-07-14', '11:16:33');

-- --------------------------------------------------------

-- 
-- Table structure for table `ut`
-- 

CREATE TABLE `ut` (
  `id` int(10) NOT NULL auto_increment,
  `nm` varchar(100) default NULL,
  `pt` varchar(25) default NULL,
  `uid` varchar(50) default NULL,
  `ps` varchar(20) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `ut`
-- 

INSERT INTO `ut` (`id`, `nm`, `pt`, `uid`, `ps`) VALUES 
(1, 'petro', 'programer', '1', '123'),
(2, 'juma', 'cashier', '2', '1234');