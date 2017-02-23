-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-02-23 09:30:00
-- 伺服器版本: 10.1.19-MariaDB
-- PHP 版本： 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `vehicle2`
--

-- --------------------------------------------------------

--
-- 資料表結構 `country`
--

CREATE TABLE `country` (
  `v_id` int(11) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `country`
--

INSERT INTO `country` (`v_id`, `country`) VALUES
(1, 'Great Britain'),
(2, 'United States'),
(3, 'Japan');

-- --------------------------------------------------------

--
-- 資料表結構 `manufacturer`
--

CREATE TABLE `manufacturer` (
  `v_id` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `manufacturer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `manufacturer`
--

INSERT INTO `manufacturer` (`v_id`, `country`, `manufacturer`) VALUES
(1, 'Great Britain', 'Lotus'),
(2, 'United States', 'Mountain Goat'),
(3, 'Japan', 'Toyota');

-- --------------------------------------------------------

--
-- 資料表結構 `vehicle`
--

CREATE TABLE `vehicle` (
  `v_id` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `manufacturer` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `launchYear` varchar(4) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `engine` varchar(255) DEFAULT NULL,
  `fuel` varchar(255) DEFAULT NULL,
  `topSpeed` double DEFAULT NULL,
  `economy` double DEFAULT NULL,
  `fuelCapacity` double DEFAULT NULL,
  `power` int(11) DEFAULT NULL,
  `torque` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `vehicle`
--

INSERT INTO `vehicle` (`v_id`, `class`, `type`, `manufacturer`, `model`, `launchYear`, `image`, `price`, `engine`, `fuel`, `topSpeed`, `economy`, `fuelCapacity`, `power`, `torque`) VALUES
(1, 'Motorized', 1, 1, 'Evora S', '2010', 'lotus-evora-s.jpg', '£48550 to £57550', 'Toyata V6', 'petrol', 172, 27.1, 12, 350, 295),
(2, 'NonMotorized', 2, 2, 'Route 29', '2009', 'Route29.jpg', '$700', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Motorized', 3, 3, 'LPG Coaster', '2007', 'Minibus.JPG', 'HK$501,000', 'Toyata L4 OHV', 'gas', 110, 2.6, 122, 113, 226);

-- --------------------------------------------------------

--
-- 資料表結構 `vehicletype`
--

CREATE TABLE `vehicletype` (
  `v_id` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `vehicletype`
--

INSERT INTO `vehicletype` (`v_id`, `country`, `type`) VALUES
(1, 'Great Britain', 'car'),
(2, 'United States', 'Bicycle'),
(3, 'Japan', 'bus');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`v_id`);

--
-- 資料表索引 `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`v_id`);

--
-- 資料表索引 `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`v_id`);

--
-- 資料表索引 `vehicletype`
--
ALTER TABLE `vehicletype`
  ADD PRIMARY KEY (`v_id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `country`
--
ALTER TABLE `country`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用資料表 AUTO_INCREMENT `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用資料表 AUTO_INCREMENT `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用資料表 AUTO_INCREMENT `vehicletype`
--
ALTER TABLE `vehicletype`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
