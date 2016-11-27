-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 29, 2015 at 04:33 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vtwo`
--
CREATE DATABASE IF NOT EXISTS `vtwo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `vtwo`;

-- --------------------------------------------------------

--
-- Table structure for table `BankAccounts`
--

DROP TABLE IF EXISTS `BankAccounts`;
CREATE TABLE IF NOT EXISTS `BankAccounts` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_type` varchar(250) NOT NULL,
  `a_name` varchar(250) NOT NULL,
  `c_id` int(11) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ChartOfAccounts`
--

DROP TABLE IF EXISTS `ChartOfAccounts`;
CREATE TABLE IF NOT EXISTS `ChartOfAccounts` (
  `coa_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) NOT NULL,
  `coa_name` varchar(250) NOT NULL,
  `coa_type` varchar(250) NOT NULL,
  `coa_head` varchar(250) DEFAULT NULL,
  `coa_input_acc` varchar(250) DEFAULT NULL,
  `coa_auto_tax` varchar(250) DEFAULT NULL,
  `coa_explanation` varchar(250) DEFAULT NULL,
  `coa_tax_percent` float DEFAULT NULL,
  PRIMARY KEY (`coa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Companies`
--

DROP TABLE IF EXISTS `Companies`;
CREATE TABLE IF NOT EXISTS `Companies` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(250) NOT NULL,
  `c_type` varchar(250) NOT NULL,
  `c_address` varchar(250) NOT NULL,
  `c_city` varchar(250) NOT NULL,
  `c_state` varchar(250) NOT NULL,
  `c_country` varchar(250) NOT NULL,
  `c_zip` int(20) NOT NULL,
  `c_date_format` datetime NOT NULL,
  `c_fiscal_yr` date NOT NULL,
  `cur_id` int(11) NOT NULL,
  `c_acc_type` int(20) NOT NULL,
  `c_phone` int(20) NOT NULL,
  `c_trial` int(25) NOT NULL,
  `c_created_at` datetime NOT NULL,
  `c_activation` char(10) NOT NULL,
  `c_token` varchar(250) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Currencies`
--

DROP TABLE IF EXISTS `Currencies`;
CREATE TABLE IF NOT EXISTS `Currencies` (
  `cur_id` int(11) NOT NULL AUTO_INCREMENT,
  `cur_code` varchar(250) NOT NULL,
  `cur_symbol` varchar(11) NOT NULL,
  PRIMARY KEY (`cur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `PackageCountries`
--

DROP TABLE IF EXISTS `PackageCountries`;
CREATE TABLE IF NOT EXISTS `PackageCountries` (
  `country_name` varchar(250) NOT NULL,
  `package_name` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL,
  `package_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Packages`
--

DROP TABLE IF EXISTS `Packages`;
CREATE TABLE IF NOT EXISTS `Packages` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `package_name` varchar(250) NOT NULL,
  `monthly` int(11) NOT NULL,
  `annually` int(11) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Payments`
--

DROP TABLE IF EXISTS `Payments`;
CREATE TABLE IF NOT EXISTS `Payments` (
  `token_sa` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `PlanHelpers`
--

DROP TABLE IF EXISTS `PlanHelpers`;
CREATE TABLE IF NOT EXISTS `PlanHelpers` (
  `p_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `coa_head` int(11) NOT NULL,
  `budget` int(11) NOT NULL,
  `month` text NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Reminders`
--

DROP TABLE IF EXISTS `Reminders`;
CREATE TABLE IF NOT EXISTS `Reminders` (
  `c_id` int(11) NOT NULL,
  `msg` varchar(250) NOT NULL,
  `rem_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Requests`
--

DROP TABLE IF EXISTS `Requests`;
CREATE TABLE IF NOT EXISTS `Requests` (
  `req_id` int(11) NOT NULL AUTO_INCREMENT,
  `req_name` varchar(250) NOT NULL,
  `req_email` varchar(250) NOT NULL,
  `req_type` varchar(250) NOT NULL,
  `req_mask_ip` varchar(250) NOT NULL,
  `req_real_ip` varchar(250) NOT NULL,
  `req_came_from_url` varchar(250) NOT NULL,
  `req_date` datetime NOT NULL,
  `req_act` char(10) DEFAULT NULL,
  `req_act_date` datetime DEFAULT NULL,
  PRIMARY KEY (`req_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Transcations`
--

DROP TABLE IF EXISTS `Transcations`;
CREATE TABLE IF NOT EXISTS `Transcations` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_amount` int(11) NOT NULL,
  `t_type_expense` varchar(250) NOT NULL,
  `t_tag` varchar(250) NOT NULL,
  `t_customer` varchar(250) NOT NULL,
  `tax` char(10) NOT NULL,
  `account` varchar(250) NOT NULL,
  `t_goal` varchar(250) NOT NULL,
  `c_id` int(11) NOT NULL,
  `t_date` datetime NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `UserCompanies`
--

DROP TABLE IF EXISTS `UserCompanies`;
CREATE TABLE IF NOT EXISTS `UserCompanies` (
  `u_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `role` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `UserDetails`
--

DROP TABLE IF EXISTS `UserDetails`;
CREATE TABLE IF NOT EXISTS `UserDetails` (
  `u_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `u_fname` varchar(50) NOT NULL,
  `u_lname` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `unique_reset` varchar(250) DEFAULT NULL,
  `u_ph_no` int(15) NOT NULL,
  `password` varchar(128) NOT NULL,
  `salt` varchar(255) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
