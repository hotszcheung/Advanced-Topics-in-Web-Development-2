-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2016 at 12:06 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conversiondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE IF NOT EXISTS `currencies` (
  `code` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `curr` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `loc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rate` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`code`, `curr`, `loc`, `rate`) VALUES
('EUR', 'Euro', 'Andorra, Austria, Belgium, Cyprus, Finland, France, Germany, Greece, Hungary, Ireland, Italy, Kosovo, Luxembourg, Malta, Monaco, Montenegro, Netherlands, Portugal, San Marino, Slovakia, Slovenia, Spain, Vatican City', '0.73'),
('GBP', 'Pound sterling', 'Crown Dependencies (the Isle of Man and the Channel Islands) certain British Overseas Territories (South Georgia and the South Sandwich Islands, British Antarctic Territory and British Indian Ocean Territory), United Kingdom', '0.62'),
('JPY', 'Japanese yen', 'Japan', '82.42'),
('USD', 'United States Dollar', 'American Samoa, British Indian Ocean Territory, Ecuador, El Salvador, Guam, Marshall Islands, Micronesia, Northern Mariana Islands, Palau, Panama, Puerto Rico, Timor-Leste, Turks and Caicos Islands, United States, Virgin Islands', '1.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`code`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
