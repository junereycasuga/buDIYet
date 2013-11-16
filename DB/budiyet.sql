-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 16, 2013 at 08:58 PM
-- Server version: 5.5.34-0ubuntu0.13.04.1
-- PHP Version: 5.4.9-4ubuntu2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `budiyet`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `guest_name` varchar(150) NOT NULL,
  `guest_comment` text NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `diy_breakdown`
--

CREATE TABLE IF NOT EXISTS `diy_breakdown` (
  `diy_id` int(11) NOT NULL,
  `department` varchar(150) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `project_name` text NOT NULL,
  `budget_amt` float NOT NULL,
  `type` int(11) NOT NULL COMMENT '1 = new_appro, 2 = auto_appro'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diy_breakdown`
--

INSERT INTO `diy_breakdown` (`diy_id`, `department`, `owner`, `project_name`, `budget_amt`, `type`) VALUES
(4, 'ARF', 'ARF', 'For the Requirements of the Comprehensive Agrarian Reform Program', 0, 1),
(4, 'AFMF', 'NAFC-AFMF', 'Goat Production Project for the Accelerated Hunger Mitigation Program (AHMP-PL 480)', 0, 1),
(4, 'CONGRESS', 'SET', 'For Adjudication of Electoral Contests Involving Members of the Senate Including Administrative Support', 3092000, 2),
(5, 'AFMF', 'OSEC-DAR-AFM', 'Loan Proceeds', 593701000, 1),
(5, 'AFMF', 'NAFC-AFMF', 'Goat Production Project for the Accelerated Hunger Mitigation Program (AHMP-PL 480)', 0, 1),
(5, 'CONGRESS', 'SET', 'General management and supervision', 1571000, 2),
(5, 'CONGRESS', 'HET', 'General Administration and Support Services', 0, 2),
(6, 'AFMF', 'OSEC-DAR-AFM', 'Peso Counterpart', 149271000, 1),
(6, 'AFMF', 'PRRI-AFMF', 'Open Academy for Philippine Agriculture (OPAPA).', 20000000, 1),
(6, 'CONGRESS', 'HR', 'Operational Requirements of the Congressional Oversight Committee on Universally-Accessible Cheaper and Quality Medicines Act', 0, 2),
(6, 'DA', 'BUPHIRE', 'Policy formulation and planning services', 464000, 2),
(6, 'DAR', 'OSEC-DAR', 'Region VII', 617000, 2),
(7, 'AFMF', 'OSEC-DAR-AFM', 'Tulay ng Pangulo Para Sa Kaunlarang Pang-Agraryo (TPKP) French Loan', 0, 1),
(7, 'CONGRESS', 'SP', 'General Administration and Support', 0, 2),
(7, 'CONGRESS', 'CA', 'General Administration and Support', 0, 2),
(7, 'CONGRESS', 'HR', 'General Administration and Support Services', 0, 2),
(11, 'ARF', 'ARF', 'For the Requirements of the Comprehensive Agrarian Reform Program', 0, 1),
(11, 'AFMF', 'PCOA-AFMF', 'Participatory Coconut Planting Project', 100000000, 1),
(11, 'AFMF', 'PRRI-AFMF', 'Locally-Funded Projects', 0, 1),
(11, 'AFMF', 'PRRI-AFMF', 'Promotion of Palaycheck and Palayamanan', 48030000, 1),
(11, 'CONGRESS', 'CA', 'General Administration and Support Services', 0, 2),
(11, 'CONGRESS', 'CA', 'Operations', 0, 2),
(11, 'CONGRESS', 'HET', 'General Administration and Support', 0, 2),
(11, 'CONGRESS', 'HET', 'General management and supervision', 1917000, 2),
(11, 'CONGRESS', 'HET', 'Operations', 0, 2),
(4, 'ARF', 'ARF', 'For the Requirements of the Comprehensive Agrarian Reform Program', 0, 1),
(4, 'AFMF', 'NAFC-AFMF', 'Goat Production Project for the Accelerated Hunger Mitigation Program (AHMP-PL 480)', 0, 1),
(4, 'CONGRESS', 'SET', 'For Adjudication of Electoral Contests Involving Members of the Senate Including Administrative Support', 3092000, 2),
(5, 'AFMF', 'OSEC-DAR-AFM', 'Loan Proceeds', 593701000, 1),
(5, 'AFMF', 'NAFC-AFMF', 'Goat Production Project for the Accelerated Hunger Mitigation Program (AHMP-PL 480)', 0, 1),
(5, 'CONGRESS', 'SET', 'General management and supervision', 1571000, 2),
(5, 'CONGRESS', 'HET', 'General Administration and Support Services', 0, 2),
(6, 'AFMF', 'OSEC-DAR-AFM', 'Peso Counterpart', 149271000, 1),
(6, 'AFMF', 'PRRI-AFMF', 'Open Academy for Philippine Agriculture (OPAPA).', 20000000, 1),
(6, 'CONGRESS', 'HR', 'Operational Requirements of the Congressional Oversight Committee on Universally-Accessible Cheaper and Quality Medicines Act', 0, 2),
(6, 'DA', 'BUPHIRE', 'Policy formulation and planning services', 464000, 2),
(6, 'DAR', 'OSEC-DAR', 'Region VII', 617000, 2),
(7, 'AFMF', 'OSEC-DAR-AFM', 'Tulay ng Pangulo Para Sa Kaunlarang Pang-Agraryo (TPKP) French Loan', 0, 1),
(7, 'CONGRESS', 'SP', 'General Administration and Support', 0, 2),
(7, 'CONGRESS', 'CA', 'General Administration and Support', 0, 2),
(7, 'CONGRESS', 'HR', 'General Administration and Support Services', 0, 2),
(11, 'ARF', 'ARF', 'For the Requirements of the Comprehensive Agrarian Reform Program', 0, 1),
(11, 'AFMF', 'PCOA-AFMF', 'Participatory Coconut Planting Project', 100000000, 1),
(11, 'AFMF', 'PRRI-AFMF', 'Locally-Funded Projects', 0, 1),
(11, 'AFMF', 'PRRI-AFMF', 'Promotion of Palaycheck and Palayamanan', 48030000, 1),
(11, 'CONGRESS', 'CA', 'General Administration and Support Services', 0, 2),
(11, 'CONGRESS', 'CA', 'Operations', 0, 2),
(11, 'CONGRESS', 'HET', 'General Administration and Support', 0, 2),
(11, 'CONGRESS', 'HET', 'General management and supervision', 1917000, 2),
(11, 'CONGRESS', 'HET', 'Operations', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `diy_budgets`
--

CREATE TABLE IF NOT EXISTS `diy_budgets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `likes` bigint(20) NOT NULL,
  `dislikes` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `diy_budgets`
--

INSERT INTO `diy_budgets` (`id`, `user_id`, `date_created`, `likes`, `dislikes`) VALUES
(4, 1, '2013-11-16 12:37:32', 0, 0),
(5, 1, '2013-11-16 12:38:08', 0, 0),
(6, 1, '2013-11-16 12:39:24', 0, 0),
(7, 1, '2013-11-16 12:40:04', 0, 0),
(8, 1, '2013-11-16 12:41:58', 0, 0),
(9, 1, '2013-11-16 12:48:34', 0, 0),
(10, 1, '2013-11-16 12:48:56', 0, 0),
(11, 1, '2013-11-16 12:49:14', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `full_name`, `email`) VALUES
(1, 'junereycasuga', '0655a949c0826968e2daa324026f7b2dcccd94ac882ba5a4d5cec0fbc1fc0ff545a1a3b77560b7ead1704ca9f41b73a91c7d238f946f723e66fa96a17f1c3558', 'Junerey Casuga', 'junerey.casuga@gmail.com'),
(4, 'test', 'ee26b0dd4af7e749aa1a8ee3c10ae9923f618980772e473f8819a5d4940e0db27ac185f8a0e1d5f84f88bc887fd67b143732c304cc5fa9ad8e6f57f50028a8ff', 'Test User', 'test@email.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
