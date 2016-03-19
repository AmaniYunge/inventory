-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jun 19, 2014 at 07:59 AM
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `acc_name`
-- 

INSERT INTO `acc_name` (`id`, `name`, `detail`) VALUES 
(1, 'petro bilingi', 'employee');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `bank`
-- 

INSERT INTO `bank` (`id`, `detail`, `deposit`, `transfer`, `balance`, `date`, `bankname`) VALUES 
(1, 'peter baraka', 200000, NULL, 200000, '2014-05-28', '1'),
(2, 'peter baraka', 300000, NULL, 300000, '2014-05-29', '2'),
(3, 'anna', 200000, NULL, 200000, '2014-06-16', '3');

-- --------------------------------------------------------

-- 
-- Table structure for table `bank_name`
-- 

CREATE TABLE `bank_name` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(100) default NULL,
  `acc_no` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `bank_name`
-- 

INSERT INTO `bank_name` (`id`, `name`, `acc_no`) VALUES 
(1, 'BOA BANK', '0938-48894-884894'),
(2, 'CRDB BANK', '34545-4566-5665'),
(3, 'NMB BANK', '3445-69866-9848');

-- --------------------------------------------------------

-- 
-- Table structure for table `data`
-- 

CREATE TABLE `data` (
  `id` int(100) NOT NULL auto_increment,
  `nm` varchar(200) default NULL,
  `ct` varchar(100) default NULL,
  `per` varchar(100) default NULL,
  `pr` int(100) default NULL,
  `qt` float default NULL,
  `d` date default NULL,
  `t` time default NULL,
  `by` int(100) default NULL,
  `buyprice` int(40) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

-- 
-- Dumping data for table `data`
-- 

INSERT INTO `data` (`id`, `nm`, `ct`, `per`, `pr`, `qt`, `d`, `t`, `by`, `buyprice`) VALUES 
(1, 'safari_330mls', 'beer', 'creet', 30000, 23, '2013-07-17', '14:30:21', 40000, NULL),
(2, 'beer_rejareja', 'rejareja', 'cret_rejareja', 34000, 21, '2013-07-17', '21:25:19', 35000, NULL),
(3, 'soda_coca_rejareja', 'rejareja', 'cret_rejareja', 24000, 8, '2013-07-17', '21:27:33', 25000, NULL),
(4, 'chupa_zilizopasuka', 'zilizopasuka', '1', 0, 9, '2013-07-17', '18:18:54', 0, NULL),
(5, ' cret', 'beer', 'cret', 26000, 151, '2013-07-17', '18:20:11', 58899, 6689),
(6, 'castle_dumpies', 'beer_catton', 'catton', 32000, 13, '2013-07-17', '09:48:24', 33000, NULL),
(7, 'kiroba_orgnal_k', 'konyagi', 'catton', 17500, 23, '2013-07-17', '09:50:45', 0, NULL),
(8, 'kiroba_orgnal_nd', 'konyagi', 'catton', 16500, 91, '2013-07-17', '09:51:12', 0, NULL),
(9, 'kilimanjaro', 'beer', 'cret', 31500, 2, '2013-07-17', '09:51:55', 32000, NULL),
(10, 'castle_lager', 'beer', 'cret', 34700, 2, '2013-07-17', '09:52:45', 35000, NULL),
(11, 'coca', '', '', 0, 0, '2013-07-17', '09:53:53', 0, NULL),
(12, 'coca', 'sotfdrink', 'cret', 11500, 55, '2013-07-17', '09:54:28', 0, NULL),
(13, 'pepsi', 'sotfdrink', 'cret', 11500, 156, '2013-07-17', '09:55:18', 0, NULL),
(14, 'juice_mango', 'sotfdrink', 'catton', 13000, 64, '2013-07-17', '09:57:46', 0, NULL),
(15, 'juice_tropmix', 'sotfdrink', 'catton', 13000, 70, '2013-07-17', '09:58:36', 0, NULL),
(16, 'kilimanjaro_ku', 'water', 'catton', 7500, 0, '2013-07-17', '10:00:37', 7500, NULL),
(17, 'kilimanjaro_ndg', 'water', 'catton', 5500, 0, '2013-07-17', '10:01:17', 5500, NULL),
(18, 'kilimanjaro_kati', 'water', 'catton', 6500, 0, '2013-07-17', '10:01:58', 6500, NULL),
(19, 'uhai_kubwa', 'water', 'catton', 2800, 0, '2013-07-17', '10:02:54', 2800, NULL),
(20, 'uhai_ndg', 'water', 'catton', 2000, 0, '2013-07-17', '10:03:37', 2000, NULL),
(21, 'smirnoph_vodka', 'wisk', '1', 17500, 3, '2013-07-17', '10:04:20', 17500, NULL),
(22, 'st_anna', 'wisk', '1', 17500, 6, '2013-07-17', '10:04:48', 17500, NULL),
(23, 'st_raphael/celine', 'shampein', '1', 22500, 76, '2013-07-17', '10:05:26', 0, NULL),
(24, 'serengeti_box', 'beer_catton', 'catton', 30000, 63.8, '2013-07-17', '10:06:34', 31000, NULL),
(25, 'dell_coi3', 'new_laptop', '1', 550000, 13, '2013-07-17', '20:20:46', 550000, NULL),
(26, 'toshiba_set_i3', 'new_laptop', '1', 600000, 8, '2013-07-17', '20:22:01', 600000, NULL),
(27, 'samsung', 'new_laptop', '1', 585000, 12, '2013-07-17', '20:23:33', 585000, NULL),
(28, 'samsung_pockt', 'phones', '1', 700000, 1.5, '2013-07-17', '20:24:29', 700000, NULL),
(29, 'samsung', 'ipad', '1', 2500000, 17, '2013-07-17', '20:25:27', 0, NULL),
(30, 'hp', 'ipad', '1', 2300000, 17, '2013-07-17', '20:26:26', 0, NULL),
(31, 'ndovu_lager', 'beer', 'cret', 31500, 7, '2013-07-17', '14:11:54', 32000, NULL),
(32, 'castle_lite', 'beer', 'cret', 31500, 9.5, '2013-07-17', '14:13:12', 32000, NULL),
(33, 'nmm', 'beer', 'jjjjj', 60, 1, '2013-07-17', '01:58:19', 70, 56),
(34, 'chopn', 'beer', 'ghh', 60, 5, '2013-07-17', '02:27:46', 80, 57);

-- --------------------------------------------------------

-- 
-- Table structure for table `debit`
-- 

CREATE TABLE `debit` (
  `id` int(10) NOT NULL auto_increment,
  `payment` double default NULL,
  `detail` varchar(200) default NULL,
  `date` date default NULL,
  `accname` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `debit`
-- 

INSERT INTO `debit` (`id`, `payment`, `detail`, `date`, `accname`) VALUES 
(1, 300000, 'posho', '2014-06-16', 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `rdby`
-- 

CREATE TABLE `rdby` (
  `id` int(11) NOT NULL auto_increment,
  `pid` int(11) default NULL,
  `cost` int(11) default NULL,
  `date` date default NULL,
  `paid` int(11) default NULL,
  `unpaid` int(19) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `rdby`
-- 

INSERT INTO `rdby` (`id`, `pid`, `cost`, `date`, `paid`, `unpaid`) VALUES 
(1, 7, 35000, '2014-05-30', 5000, 30000),
(2, 1, 30000, '2014-05-30', 10000, 20000),
(3, 1, 20000, '2014-05-30', 20000, 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `rdsell`
-- 

CREATE TABLE `rdsell` (
  `id` int(100) NOT NULL auto_increment,
  `pid` int(100) default NULL,
  `qt` float default NULL,
  `cst` int(100) default NULL,
  `custm` varchar(100) default NULL,
  `date` date default NULL,
  `time` time default NULL,
  `cashier` varchar(20) default NULL,
  `import` int(20) default NULL,
  `profit` int(20) default NULL,
  `product_from` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

-- 
-- Dumping data for table `rdsell`
-- 

INSERT INTO `rdsell` (`id`, `pid`, `qt`, `cst`, `custm`, `date`, `time`, `cashier`, `import`, `profit`, `product_from`) VALUES 
(1, 28, 1, 700000, '1', '2014-01-16', '09:07:26', NULL, NULL, NULL, NULL),
(2, 24, 1, 30000, '2', '2014-01-16', '09:08:43', NULL, NULL, NULL, NULL),
(3, 25, 1, 550000, '3', '2014-01-16', '16:36:32', NULL, NULL, NULL, NULL),
(4, 26, 3, 1800000, '3', '2014-01-16', '16:36:32', NULL, NULL, NULL, NULL),
(5, 27, 1, 585000, '3', '2014-01-16', '16:36:32', NULL, NULL, NULL, NULL),
(6, 21, 1, 17500, '4', '2014-01-16', '16:37:24', NULL, NULL, NULL, NULL),
(7, 22, 2, 35000, '4', '2014-01-16', '16:37:24', NULL, NULL, NULL, NULL),
(8, 2, 1, 34000, '5', '2014-01-16', '16:38:10', NULL, NULL, NULL, NULL),
(9, 3, 2, 48000, '5', '2014-01-16', '16:38:10', NULL, NULL, NULL, NULL),
(10, 1, 2, 60000, '6', '2014-01-16', '23:01:05', NULL, NULL, NULL, NULL),
(11, 32, 2.5, 78750, '6', '2014-01-16', '23:01:05', NULL, NULL, NULL, NULL),
(12, 26, 1, 600000, '7', '2014-01-16', '23:30:13', NULL, NULL, NULL, NULL),
(13, 27, 1, 585000, '7', '2014-01-16', '23:30:13', NULL, NULL, NULL, NULL),
(14, 18, 3, 19500, '8', '2014-01-16', '23:45:11', NULL, NULL, NULL, NULL),
(15, 20, 3, 6000, '8', '2014-01-16', '23:45:11', NULL, NULL, NULL, NULL),
(25, 16, 2, 15000, '11', '2014-01-17', '11:42:53', NULL, NULL, NULL, NULL),
(26, 19, 2, 5600, '11', '2014-01-17', '11:42:53', NULL, NULL, NULL, NULL),
(27, 21, 2, 35000, '12', '2014-01-17', '13:10:25', NULL, NULL, NULL, NULL),
(28, 22, 2, 35000, '12', '2014-01-17', '13:10:25', NULL, NULL, NULL, NULL),
(29, 1, 5, 150000, '13', '2014-01-17', '13:33:42', NULL, NULL, NULL, NULL),
(30, 9, 4, 126000, '13', '2014-01-17', '13:33:43', NULL, NULL, NULL, NULL),
(31, 1, 3, 90000, '14', '2014-01-17', '14:33:36', NULL, NULL, NULL, NULL),
(32, 9, 3, 94500, '14', '2014-01-17', '14:33:36', NULL, NULL, NULL, NULL),
(33, 10, 7, 242900, '15', '2014-05-23', '00:09:01', NULL, NULL, 242900, NULL),
(34, 32, 6, 189000, '15', '2014-05-23', '00:09:01', NULL, 30, 189000, NULL),
(35, 34, NULL, NULL, NULL, '2014-05-23', '02:27:46', NULL, 7, NULL, 'TBL'),
(36, 34, NULL, NULL, NULL, '2014-05-23', '02:28:50', NULL, 3, NULL, 'TBL'),
(37, 16, 2, 15000, '16', '2014-05-30', '16:51:50', NULL, NULL, 15000, NULL),
(38, 9, 2, 63000, '16', '2014-06-18', '05:41:48', NULL, NULL, 63000, NULL),
(39, 10, 1, 34700, '16', '2014-06-18', '05:41:48', NULL, NULL, 34700, NULL),
(40, 31, 4, 126000, '16', '2014-06-18', '05:41:48', NULL, NULL, 126000, NULL),
(41, 32, 2, 63000, '16', '2014-06-18', '05:41:48', NULL, NULL, 63000, NULL),
(42, 34, 5, 300, '16', '2014-06-18', '05:41:48', NULL, NULL, 15, NULL),
(43, 1, 3, 90000, '17', '2014-06-18', '05:56:51', NULL, NULL, 90000, NULL),
(44, 9, 4, 126000, '17', '2014-06-18', '05:56:51', NULL, NULL, 126000, NULL),
(45, 33, 3, 180, '17', '2014-06-18', '05:56:51', NULL, NULL, 12, NULL),
(46, 1, 3, 90000, '18', '2014-06-18', '05:58:46', NULL, NULL, 90000, NULL),
(47, 33, 3, 180, '18', '2014-06-18', '05:58:46', NULL, NULL, 12, NULL),
(48, 1, 2, 60000, '19', '2014-06-19', '05:42:10', NULL, NULL, 60000, NULL),
(49, 10, 5, 173500, '19', '2014-06-19', '05:42:10', NULL, NULL, 173500, NULL),
(50, 31, 4, 126000, '19', '2014-06-19', '05:42:10', NULL, NULL, 126000, NULL),
(51, 32, 1, 31500, '19', '2014-06-19', '05:42:10', NULL, NULL, 31500, NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `ut`
-- 

INSERT INTO `ut` (`id`, `nm`, `pt`, `uid`, `ps`) VALUES 
(1, 'admini', 'administrator', '1', '2013'),
(2, 'juma husan abdalah', 'cashier1', NULL, '2015'),
(3, 'neema emmanuel', 'cashier2', NULL, '2020'),
(4, 'anna', 'stockeeper', NULL, '2000'),
(5, 'admin', 'cashier3', NULL, '2120');

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
