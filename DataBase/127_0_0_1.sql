-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 28, 2018 at 11:35 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `somawans_area`
--
CREATE DATABASE IF NOT EXISTS `somawans_area` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `somawans_area`;

-- --------------------------------------------------------

--
-- Table structure for table `ganemulla_cdamages`
--

DROP TABLE IF EXISTS `ganemulla_cdamages`;
CREATE TABLE IF NOT EXISTS `ganemulla_cdamages` (
  `damageid` int(11) NOT NULL AUTO_INCREMENT,
  `date1` date NOT NULL,
  `product` varchar(50) NOT NULL,
  `dunits` int(100) DEFAULT NULL,
  `value` float DEFAULT NULL,
  PRIMARY KEY (`damageid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ganemulla_cdamages`
--

INSERT INTO `ganemulla_cdamages` (`damageid`, `date1`, `product`, `dunits`, `value`) VALUES
(1, '2018-07-09', 'Red Cow 18g', 800, 11352),
(2, '2018-07-09', 'Red Cow 400g', 72, 19075.7),
(3, '2018-07-09', 'Drinking Yogurt Mango', 120, 7920);

-- --------------------------------------------------------

--
-- Table structure for table `ganemulla_ldamages`
--

DROP TABLE IF EXISTS `ganemulla_ldamages`;
CREATE TABLE IF NOT EXISTS `ganemulla_ldamages` (
  `damageid` int(11) NOT NULL AUTO_INCREMENT,
  `date1` date NOT NULL,
  `product` varchar(50) NOT NULL,
  `dunits` int(100) DEFAULT NULL,
  `value` float DEFAULT NULL,
  PRIMARY KEY (`damageid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ganemulla_loading`
--

DROP TABLE IF EXISTS `ganemulla_loading`;
CREATE TABLE IF NOT EXISTS `ganemulla_loading` (
  `loadingid` int(11) NOT NULL AUTO_INCREMENT,
  `date1` date NOT NULL,
  `product` varchar(50) NOT NULL,
  `units` int(100) DEFAULT NULL,
  `value` float DEFAULT NULL,
  PRIMARY KEY (`loadingid`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ganemulla_loading`
--

INSERT INTO `ganemulla_loading` (`loadingid`, `date1`, `product`, `units`, `value`) VALUES
(1, '2017-09-07', 'Anchor 75g', 78, 5167.5),
(2, '2017-09-07', 'Anchor 250g', 118, 22663.1),
(3, '2017-09-07', 'Anchor 400g', 318, 97791.4),
(4, '2017-09-07', 'Anchor 1kg', 2, 1533.34),
(5, '2017-09-07', 'Anchor 18g', 380, 6479),
(6, '2017-09-07', 'Anchor(+) 400g', 21, 9081.45),
(7, '2017-09-07', 'PediaPro(2-5) 200g', 21, 6835.5),
(8, '2017-09-07', 'Anchor PediaPro Mama 400g', 6, 4240.8),
(9, '2017-09-07', 'PediaPro(1-2) 200g', 28, 9114),
(10, '2017-09-07', 'PediaPro(1-2) 400g', 18, 391716),
(11, '2017-09-07', 'PediaPro(2-5) 400g', 14, 8463),
(12, '2017-09-07', 'Anchor Shape Up 400g', 6, 2514.24),
(13, '2017-09-07', 'Anchor Butter Salted 100g', 60, 14310),
(14, '2017-09-07', 'Anchor Butter Salted 227g', 38, 17784),
(15, '2017-09-07', 'Raththi 18g', 540, 9207),
(16, '2017-09-07', 'Raththi 70g', 1215, 68878.4),
(17, '2017-09-07', 'Raththi 160g', 744, 91378.1),
(18, '2017-09-07', 'Raththi 250g', 64, 12291.8),
(19, '2017-09-07', 'Raththi 400g', 305, 93833.2),
(20, '2017-09-07', 'Raththi 1kg', 27, 20713.3),
(21, '2017-09-07', 'Raththi Smart 1kg', 60, 46029.6),
(22, '2017-09-07', 'Anlene 200g', 34, 8220.52),
(23, '2017-09-07', 'Newdale Yogurt 80g', 1768, 54454.4),
(24, '2017-09-07', 'Curd 480g', 6, 792),
(25, '2017-09-07', 'Fresh Milk 1litre', 12, 2160),
(26, '2017-09-07', 'Newdale Flavoured Milk Chocolate', 215, 8707.5),
(27, '2017-09-07', 'Newdale Flavoured Milk Vanilla', 264, 10692),
(28, '2017-09-08', 'Anchor 75g', 504, 33390),
(29, '2017-09-08', 'Anchor 250g', 99, 19013.9),
(30, '2017-09-08', 'Anchor 400g', 735, 226027),
(31, '2017-09-08', 'Anchor 1kg', 96, 73600.3),
(32, '2017-09-08', 'Anchor 18g', 360, 6138),
(33, '2017-09-08', 'Anchor(+) 400g', 21, 9081.45),
(34, '2017-09-08', 'PediaPro(2-5) 200g', 7, 2278.5),
(35, '2017-09-08', 'Anchor PediaPro Mama 400g', 5, 3534),
(36, '2017-09-08', 'PediaPro(1-2) 200g', 21, 6835.5),
(37, '2017-09-08', 'PediaPro(1-2) 400g', 3, 1813.5),
(38, '2017-09-08', 'PediaPro(2-5) 400g', 36, 21762),
(39, '2017-09-08', 'Anchor Shape Up 400g', 36, 15085.4),
(40, '2017-09-08', 'Anchor Butter Salted 100g', 52, 12402),
(41, '2017-09-08', 'Anchor Butter Salted 227g', 36, 16848),
(42, '2017-09-08', 'Raththi 18g', 450, 7672.5),
(43, '2017-09-08', 'Raththi 70g', 1179, 66837.5),
(44, '2017-09-08', 'Raththi 160g', 582, 71481.2),
(45, '2017-09-08', 'Raththi 250g', 144, 27656.6),
(46, '2017-09-08', 'Raththi 400g', 792, 243659),
(47, '2017-09-08', 'Raththi 1kg', 108, 82853.3),
(48, '2017-09-08', 'Raththi Smart 400g', 468, 143980),
(49, '2017-09-08', 'Raththi Smart 1kg', 112, 85921.9),
(50, '2017-09-08', 'Anlene 400g', 36, 15735.6),
(51, '2017-09-08', 'Anlene 200g', 34, 8220.52),
(52, '2017-09-08', 'Newdale Yogurt 80g', 1622, 49957.6),
(53, '2017-09-08', 'Curd 480g', 6, 792),
(54, '2017-09-08', 'Fresh Milk 1litre', 12, 2160),
(55, '2017-09-08', 'Newdale Flavoured Milk Vanilla', 317, 12838.5),
(56, '2017-09-08', 'Newdale Flavoured Milk Chocolate', 301, 12190.5),
(57, '2018-07-07', 'Red Cow 1kg', 12, 7948.08),
(58, '2018-07-09', 'Red Cow 18g', 1200, 17028),
(59, '2018-07-09', 'Anchor 18g', 1200, 20460),
(60, '2018-07-09', 'Red Cow 18g', 2000, 28380),
(61, '2018-07-09', 'Red Cow 400g', 180, 47689.2),
(62, '2018-07-09', 'Red Cow 1kg', 60, 39740.4),
(63, '2018-07-09', 'Red Cow 18g', 800, 11352),
(64, '2018-07-09', 'Red Cow 400g', 72, 19075.7),
(65, '2018-07-09', 'Red Cow 1kg', 24, 15896.2),
(66, '2018-07-09', 'Drinking Yogurt Mango', 240, 15840);

-- --------------------------------------------------------

--
-- Table structure for table `ganemulla_unloading`
--

DROP TABLE IF EXISTS `ganemulla_unloading`;
CREATE TABLE IF NOT EXISTS `ganemulla_unloading` (
  `unloadingid` int(11) NOT NULL AUTO_INCREMENT,
  `date1` date NOT NULL,
  `product` varchar(50) NOT NULL,
  `ulunits` int(100) DEFAULT NULL,
  `value` float DEFAULT NULL,
  PRIMARY KEY (`unloadingid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gicustomer`
--

DROP TABLE IF EXISTS `gicustomer`;
CREATE TABLE IF NOT EXISTS `gicustomer` (
  `damageid` int(11) NOT NULL AUTO_INCREMENT,
  `date1` date NOT NULL,
  `product` varchar(50) NOT NULL,
  `dunits` int(100) DEFAULT NULL,
  `value` float DEFAULT NULL,
  PRIMARY KEY (`damageid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `giloading`
--

DROP TABLE IF EXISTS `giloading`;
CREATE TABLE IF NOT EXISTS `giloading` (
  `loadingid` int(11) NOT NULL AUTO_INCREMENT,
  `date1` date NOT NULL,
  `product` varchar(50) NOT NULL,
  `units` int(100) DEFAULT NULL,
  `value` float DEFAULT NULL,
  PRIMARY KEY (`loadingid`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `giloading`
--

INSERT INTO `giloading` (`loadingid`, `date1`, `product`, `units`, `value`) VALUES
(2, '2017-09-07', 'Anchor 75g', 78, 5167.5),
(3, '2017-09-07', 'Anchor 250g', 197, 37835.8),
(4, '2017-09-07', 'Anchor 400g', 191, 58736.3),
(5, '2017-09-07', 'Anchor 1kg', 36, 27600.1),
(6, '2017-09-07', 'Anchor 18g', 814, 13878.7),
(7, '2017-09-07', 'Anchor(+) 400g', 60, 25947),
(8, '2017-09-07', 'PediaPro(2-5) 200g', 38, 12369),
(9, '2017-09-07', 'Anchor PediaPro Mama 400g', 9, 6361.2),
(10, '2017-09-07', 'PediaPro(1-2) 200g', 14, 4557),
(11, '2017-09-07', 'PediaPro(1-2) 400g', 60, 36270),
(12, '2017-09-07', 'PediaPro(2-5) 400g', 30, 18135),
(13, '2017-09-07', 'Anchor Shape Up 400g', 51, 21371),
(14, '2017-09-07', 'PediaPro(1-2) 1kg', 6, 8788.5),
(15, '2017-09-07', 'Anchor Butter Salted 100g', 80, 19080),
(16, '2017-09-07', 'Anchor Butter Salted 227g', 40, 18720),
(17, '2017-09-07', 'Raththi 18g', 1196, 20391.8),
(18, '2017-09-07', 'Raththi 70g', 1313, 74434),
(19, '2017-09-07', 'Raththi 160g', 708, 86956.6),
(20, '2017-09-07', 'Raththi 250g', 76, 14596.6),
(21, '2017-09-07', 'Raththi 400g', 255, 78450.8),
(22, '2017-09-07', 'Raththi 1kg', 45, 34522.2),
(23, '2017-09-07', 'Raththi Smart 400g', 75, 23073.8),
(24, '2017-09-07', 'Raththi Smart 1kg', 172, 131952),
(25, '2017-09-07', 'Anlene 400g', 8, 3496.8),
(26, '2017-09-07', 'Anlene 200g', 17, 4110.26),
(27, '2017-09-07', 'Curd 480g', 6, 792),
(28, '2017-09-07', 'Fresh Milk 1litre', 6, 1080),
(29, '2017-09-07', 'Newdale Flavoured Milk Vanilla', 443, 17941.5),
(30, '2017-09-07', 'Newdale Flavoured Milk Chocolate', 294, 11907),
(31, '2017-09-07', 'Newdale Yogurt 80g', 3708, 114206),
(32, '2017-09-08', 'Anchor 75g', 509, 33721.2),
(33, '2017-09-08', 'Anchor 250g', 161, 30921.7),
(34, '2017-09-08', 'Anchor 400g', 1199, 368716),
(35, '2017-09-08', 'Anchor 1kg', 313, 239968),
(36, '2017-09-08', 'Anchor 18g', 794, 13537.7),
(37, '2017-09-08', 'Anchor Instant 400g', 24, 7383.6),
(38, '2017-09-08', 'Anchor Instant 1kg', 12, 9201),
(39, '2017-09-08', 'Anchor(+) 400g', 29, 12541),
(40, '2017-09-08', 'PediaPro(2-5) 200g', 16, 5208),
(41, '2017-09-08', 'PediaPro(1-2) 200g', 36, 11718),
(42, '2017-09-08', 'PediaPro(1-2) 400g', 52, 31434),
(43, '2017-09-08', 'PediaPro(2-5) 400g', 50, 30225),
(44, '2017-09-08', 'Anchor PediaPro Mama 400g', 4, 2827.2),
(45, '2017-09-08', 'Anchor Shape Up 400g', 42, 17599.7),
(46, '2017-09-08', 'PediaPro(1-2) 1kg', 4, 5859),
(47, '2017-09-08', 'PediaPro(2-5) 1kg', 6, 8788.5),
(48, '2017-09-08', 'Anchor Butter Salted 100g', 105, 25042.5),
(49, '2017-09-08', 'Anchor Butter Salted 227g', 30, 14040),
(50, '2017-09-08', 'Raththi 18g', 918, 15651.9),
(51, '2017-09-08', 'Raththi 70g', 2114, 119843),
(52, '2017-09-08', 'Raththi 160g', 1170, 143699),
(53, '2017-09-08', 'Raththi 250g', 181, 34762.9),
(54, '2017-09-08', 'Raththi 400g', 1080, 332262),
(55, '2017-09-08', 'Raththi 1kg', 318, 243957),
(56, '2017-09-08', 'Raththi Smart 400g', 1054, 324263),
(57, '2017-09-08', 'Raththi Smart 1kg', 273, 209435),
(58, '2017-09-08', 'Anlene 400g', 44, 19232.4),
(59, '2017-09-08', 'Anlene 200g', 37, 8945.86),
(60, '2017-09-08', 'Newdale Yogurt 80g', 2919, 89905.2),
(61, '2017-09-08', 'Curd 480g', 3, 396),
(62, '2017-09-08', 'Newdale Flavoured Milk Vanilla', 420, 17010),
(63, '2017-09-08', 'Newdale Flavoured Milk Chocolate', 278, 11259);

-- --------------------------------------------------------

--
-- Table structure for table `gilorry`
--

DROP TABLE IF EXISTS `gilorry`;
CREATE TABLE IF NOT EXISTS `gilorry` (
  `damageid` int(11) NOT NULL AUTO_INCREMENT,
  `date1` date NOT NULL,
  `product` varchar(50) NOT NULL,
  `dunits` int(100) DEFAULT NULL,
  `value` float DEFAULT NULL,
  PRIMARY KEY (`damageid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `giunloading`
--

DROP TABLE IF EXISTS `giunloading`;
CREATE TABLE IF NOT EXISTS `giunloading` (
  `unloadingid` int(11) NOT NULL AUTO_INCREMENT,
  `date1` date NOT NULL,
  `product` varchar(50) NOT NULL,
  `ulunits` int(100) DEFAULT NULL,
  `value` float DEFAULT NULL,
  PRIMARY KEY (`unloadingid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `horeca_cdamages`
--

DROP TABLE IF EXISTS `horeca_cdamages`;
CREATE TABLE IF NOT EXISTS `horeca_cdamages` (
  `damageid` int(11) NOT NULL AUTO_INCREMENT,
  `date1` date NOT NULL,
  `product` varchar(50) NOT NULL,
  `dunits` int(100) DEFAULT NULL,
  `value` float DEFAULT NULL,
  PRIMARY KEY (`damageid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `horeca_ldamages`
--

DROP TABLE IF EXISTS `horeca_ldamages`;
CREATE TABLE IF NOT EXISTS `horeca_ldamages` (
  `damageid` int(11) NOT NULL AUTO_INCREMENT,
  `date1` date NOT NULL,
  `product` varchar(50) NOT NULL,
  `dunits` int(100) DEFAULT NULL,
  `value` float DEFAULT NULL,
  PRIMARY KEY (`damageid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `horeca_loading`
--

DROP TABLE IF EXISTS `horeca_loading`;
CREATE TABLE IF NOT EXISTS `horeca_loading` (
  `loadingid` int(11) NOT NULL AUTO_INCREMENT,
  `date1` date NOT NULL,
  `product` varchar(50) NOT NULL,
  `units` int(100) DEFAULT NULL,
  `value` float DEFAULT NULL,
  PRIMARY KEY (`loadingid`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `horeca_loading`
--

INSERT INTO `horeca_loading` (`loadingid`, `date1`, `product`, `units`, `value`) VALUES
(2, '2017-09-07', 'Anchor 400g', 13, 3997.76),
(3, '2017-09-07', 'Anchor 18g', 344, 5865.2),
(4, '2017-09-07', 'Newdale Yogurt 80g', 577, 17771.6),
(5, '2017-09-07', 'Raththi Smart 1kg', 15, 11507.4),
(6, '2017-09-07', 'Raththi Smart 400g', 42, 12921.3),
(7, '2017-09-07', 'Raththi 400g', 24, 7383.6),
(8, '2017-09-07', 'Raththi 18g', 336, 5728.8),
(9, '2017-09-07', 'Newdale Flavoured Milk Chocolate', 212, 8586),
(10, '2017-09-07', 'Newdale Flavoured Milk Vanilla', 278, 11259),
(11, '2017-09-07', 'Anchor 1kg', 13, 9966.71),
(12, '2017-09-07', 'Raththi 1kg', 12, 9205.92),
(13, '2017-09-07', 'Anchor Butter Salted 100g', 4, 954),
(14, '2017-09-08', 'Anchor 400g', 36, 11070.7),
(15, '2017-09-08', 'Anchor 1kg', 3, 2300.01),
(16, '2017-09-08', 'Raththi 400g', 39, 11998.3),
(17, '2017-09-08', 'Raththi 1kg', 7, 5370.12),
(18, '2017-09-08', 'Raththi Smart 400g', 40, 12306),
(19, '2017-09-08', 'Raththi Smart 1kg', 14, 10740.2),
(20, '2017-09-08', 'Newdale Yogurt 80g', 595, 18326),
(21, '2017-09-08', 'Raththi 18g', 296, 5046.8),
(22, '2017-09-08', 'Anchor 18g', 344, 5865.2),
(23, '2017-09-08', 'Newdale Flavoured Milk Vanilla', 297, 12028.5),
(24, '2017-09-08', 'Newdale Flavoured Milk Chocolate', 236, 9558),
(25, '2018-07-09', 'Cheese 100g', 528, 137069);

-- --------------------------------------------------------

--
-- Table structure for table `horeca_unloading`
--

DROP TABLE IF EXISTS `horeca_unloading`;
CREATE TABLE IF NOT EXISTS `horeca_unloading` (
  `unloadingid` int(11) NOT NULL AUTO_INCREMENT,
  `date1` date NOT NULL,
  `product` varchar(50) NOT NULL,
  `ulunits` int(100) DEFAULT NULL,
  `value` float DEFAULT NULL,
  PRIMARY KEY (`unloadingid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `horeca_unloading`
--

INSERT INTO `horeca_unloading` (`unloadingid`, `date1`, `product`, `ulunits`, `value`) VALUES
(2, '2017-09-08', 'Anchor 400g', 33, 10148.2),
(3, '2017-09-08', 'Anchor 1kg', 2, 1533.34),
(4, '2017-09-08', 'Raththi 400g', 36, 11075.4),
(5, '2017-09-08', 'Raththi 1kg', 5, 3835.8),
(6, '2017-09-08', 'Raththi Smart 400g', 34, 10460.1),
(7, '2017-09-08', 'Raththi Smart 1kg', 2, 1534.32),
(8, '2017-09-08', 'Newdale Yogurt 80g', 310, 9548),
(9, '2017-09-08', 'Raththi 18g', 296, 5046.8),
(10, '2017-09-08', 'Anchor 18g', 181, 3086.05),
(11, '2017-09-08', 'Newdale Flavoured Milk Vanilla', 117, 4738.5),
(12, '2017-09-08', 'Newdale Flavoured Milk Chocolate', 98, 3969);

-- --------------------------------------------------------

--
-- Table structure for table `kadawatha_cdamages`
--

DROP TABLE IF EXISTS `kadawatha_cdamages`;
CREATE TABLE IF NOT EXISTS `kadawatha_cdamages` (
  `damageid` int(11) NOT NULL AUTO_INCREMENT,
  `date1` date NOT NULL,
  `product` varchar(50) NOT NULL,
  `dunits` int(100) DEFAULT NULL,
  `value` float DEFAULT NULL,
  PRIMARY KEY (`damageid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kadawatha_cdamages`
--

INSERT INTO `kadawatha_cdamages` (`damageid`, `date1`, `product`, `dunits`, `value`) VALUES
(8, '2018-10-26', 'Anchor 1kg', 1, 766.67);

-- --------------------------------------------------------

--
-- Table structure for table `kadawatha_ldamages`
--

DROP TABLE IF EXISTS `kadawatha_ldamages`;
CREATE TABLE IF NOT EXISTS `kadawatha_ldamages` (
  `damageid` int(11) NOT NULL AUTO_INCREMENT,
  `date1` date NOT NULL,
  `product` varchar(50) NOT NULL,
  `dunits` int(100) DEFAULT NULL,
  `value` float DEFAULT NULL,
  PRIMARY KEY (`damageid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kadawatha_ldamages`
--

INSERT INTO `kadawatha_ldamages` (`damageid`, `date1`, `product`, `dunits`, `value`) VALUES
(1, '2018-10-26', 'Anchor 1kg', 1, 766.67);

-- --------------------------------------------------------

--
-- Table structure for table `kadawatha_loading`
--

DROP TABLE IF EXISTS `kadawatha_loading`;
CREATE TABLE IF NOT EXISTS `kadawatha_loading` (
  `loadingid` int(11) NOT NULL AUTO_INCREMENT,
  `date1` date NOT NULL,
  `product` varchar(50) NOT NULL,
  `units` int(100) DEFAULT NULL,
  `value` float DEFAULT NULL,
  PRIMARY KEY (`loadingid`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kadawatha_loading`
--

INSERT INTO `kadawatha_loading` (`loadingid`, `date1`, `product`, `units`, `value`) VALUES
(77, '2018-10-26', 'Anchor 1kg', 24, 18400.1),
(76, '2018-10-10', 'Anchor 1kg', 132, 101200),
(75, '2018-07-09', 'Strawberry Yogurt 80g', 48, 1478.4),
(74, '2018-07-09', 'Mango Yogurt 80g', 96, 2956.8);

-- --------------------------------------------------------

--
-- Table structure for table `kadawatha_unloading`
--

DROP TABLE IF EXISTS `kadawatha_unloading`;
CREATE TABLE IF NOT EXISTS `kadawatha_unloading` (
  `unloadingid` int(11) NOT NULL AUTO_INCREMENT,
  `date1` date NOT NULL,
  `product` varchar(50) NOT NULL,
  `ulunits` int(100) DEFAULT NULL,
  `value` float DEFAULT NULL,
  PRIMARY KEY (`unloadingid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kadawatha_unloading`
--

INSERT INTO `kadawatha_unloading` (`unloadingid`, `date1`, `product`, `ulunits`, `value`) VALUES
(5, '2018-07-08', 'Cheese 100g', 48, 12460.8),
(6, '2018-10-10', 'Anchor 1kg', 60, 46000.2),
(7, '2018-10-26', 'Anchor 1kg', 12, 9200.04);

-- --------------------------------------------------------

--
-- Table structure for table `kicustomer`
--

DROP TABLE IF EXISTS `kicustomer`;
CREATE TABLE IF NOT EXISTS `kicustomer` (
  `damageid` int(11) NOT NULL AUTO_INCREMENT,
  `date1` date NOT NULL,
  `product` varchar(50) NOT NULL,
  `dunits` int(100) DEFAULT NULL,
  `value` float DEFAULT NULL,
  PRIMARY KEY (`damageid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kiloading`
--

DROP TABLE IF EXISTS `kiloading`;
CREATE TABLE IF NOT EXISTS `kiloading` (
  `loadingid` int(11) NOT NULL AUTO_INCREMENT,
  `date1` date NOT NULL,
  `product` varchar(50) NOT NULL,
  `units` int(100) DEFAULT NULL,
  `value` float DEFAULT NULL,
  PRIMARY KEY (`loadingid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kilorry`
--

DROP TABLE IF EXISTS `kilorry`;
CREATE TABLE IF NOT EXISTS `kilorry` (
  `damageid` int(11) NOT NULL AUTO_INCREMENT,
  `date1` date NOT NULL,
  `product` varchar(50) NOT NULL,
  `dunits` int(100) DEFAULT NULL,
  `value` float DEFAULT NULL,
  PRIMARY KEY (`damageid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kiunloading`
--

DROP TABLE IF EXISTS `kiunloading`;
CREATE TABLE IF NOT EXISTS `kiunloading` (
  `unloadingid` int(11) NOT NULL AUTO_INCREMENT,
  `date1` date NOT NULL,
  `product` varchar(50) NOT NULL,
  `ulunits` int(100) DEFAULT NULL,
  `value` float DEFAULT NULL,
  PRIMARY KEY (`unloadingid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
--
-- Database: `somawans_stores`
--
CREATE DATABASE IF NOT EXISTS `somawans_stores` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `somawans_stores`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `itmcode` int(10) NOT NULL,
  `itemname` varchar(50) NOT NULL,
  `units` int(15) NOT NULL,
  `unitprice` float NOT NULL,
  PRIMARY KEY (`itmcode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`itmcode`, `itemname`, `units`, `unitprice`) VALUES
(3101763, 'Anchor 18g', 400, 17.05),
(3101734, 'Anchor 75g', 168, 66.25),
(3101731, 'Anchor 250g', 36, 192.06),
(3101732, 'Anchor 400g', 36, 307.52),
(3101733, 'Anchor 1kg', 12, 766.67),
(3101741, 'Raththi 18g', 400, 17.05),
(3101769, 'Raththi 70g', 180, 56.69),
(3101771, 'Raththi 160g', 96, 122.82),
(3101728, 'Raththi 250g', 36, 192.06),
(3101729, 'Raththi 400g', 36, 307.65),
(3101730, 'Raththi 1kg', 12, 767.16),
(3101768, 'Raththi Smart 400g', 36, 307.65),
(3101767, 'Raththi Smart 1kg', 12, 767.16),
(3101746, 'Anchor(+) 400g', 36, 432.45),
(3101780, 'PediaPro(1-2) 200g', 36, 325.5),
(3101781, 'PediaPro(1-2) 400g', 36, 604.5),
(3101747, 'PediaPro(1-2) 1kg', 6, 1464.75),
(3101787, 'PediaPro(2-5) 200g', 36, 325.5),
(3101782, 'PediaPro(2-5) 400g', 36, 604.5),
(3101748, 'PediaPro(2-5) 1kg', 6, 1464.75),
(3101735, 'Anchor Instant 400g', 24, 307.65),
(3101736, 'Anchor Instant 1kg', 12, 766.75),
(3101743, 'Anlene 80g', 162, 92.07),
(3101742, 'Anlene 200g', 36, 241.78),
(3101744, 'Anlene 400g', 36, 437.1),
(3101773, 'Anchor PediaPro Mama 400g', 24, 706.8),
(3101726, 'Anchor Shape Up 400g', 36, 419.04),
(3101770, 'Newdale Yogurt 80g', 48, 30.8),
(3101757, 'Newdale Yogurt Tub 480g', 12, 171.6),
(3101786, 'Newdale Flavoured Milk Vanilla', 42, 40.5),
(3101785, 'Newdale Flavoured Milk Chocolate', 42, 40.5),
(3101750, 'Newdale Flavoured Milk Vanilla Promotion', 40, 36),
(3101749, 'Newdale Flavoured Milk Chocolate Promotion', 40, 36),
(110581, 'Anchor Butter Salted 100g', 80, 238.5),
(110578, 'Anchor Butter Salted 227g', 40, 468),
(3101759, 'Curd 480g', 12, 132),
(3101745, 'Fresh Milk 1litre', 12, 180),
(3110162, 'Red Cow 18g', 400, 14.19),
(3110191, 'Red Cow 400g', 36, 264.94),
(3110184, 'Red Cow 1kg', 12, 662.34),
(3110086, 'Strawberry Yogurt 80g', 48, 30.8),
(3110064, 'Mango Yogurt 80g', 48, 30.8),
(107525, 'Cheese 100g', 48, 259.6),
(3103359, 'Newdale Flavoured Milk Strawberry', 42, 40.5),
(3110153, 'Newdale Flavoured Milk Mango', 42, 40.5),
(3110106, 'Drinking Yogurt Vanilla', 24, 61.6),
(3110115, 'Drinking Yogurt Mango', 24, 66);
--
-- Database: `somawans_user`
--
CREATE DATABASE IF NOT EXISTS `somawans_user` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `somawans_user`;

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

DROP TABLE IF EXISTS `counter`;
CREATE TABLE IF NOT EXISTS `counter` (
  `counter` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`counter`) VALUES
(1311);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('Ajith', '5bb50d4b2dec2e55982cafed5241b3ab'),
('Dineth17', '74e85fcdec7577c876188973318d64e1'),
('Mariyan', '5f4dcc3b5aa765d61d8327deb882cf99');
--
-- Database: `somawans_warehouse`
--
CREATE DATABASE IF NOT EXISTS `somawans_warehouse` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `somawans_warehouse`;

-- --------------------------------------------------------

--
-- Table structure for table `ganemulla`
--

DROP TABLE IF EXISTS `ganemulla`;
CREATE TABLE IF NOT EXISTS `ganemulla` (
  `itemcode` int(15) NOT NULL,
  `date1` date NOT NULL,
  `product` varchar(50) NOT NULL,
  `units` int(100) DEFAULT NULL,
  `value` float DEFAULT NULL,
  PRIMARY KEY (`itemcode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ganemulla`
--

INSERT INTO `ganemulla` (`itemcode`, `date1`, `product`, `units`, `value`) VALUES
(3101763, '2018-07-09', 'Anchor 18g', -1956, -33349.8),
(3101734, '2017-09-08', 'Anchor 75g', -5, -331.25),
(3101731, '2017-09-08', 'Anchor 250g', -224, -43021.4),
(3101732, '2017-09-08', 'Anchor 400g', 874, 268772),
(3101733, '2017-09-08', 'Anchor 1kg', 239, 183234),
(3101741, '2017-09-08', 'Raththi 18g', -568, -9684.4),
(3101769, '2017-09-08', 'Raththi 70g', 488, 27664.7),
(3101771, '2017-09-08', 'Raththi 160g', 1800, 221076),
(3101728, '2017-09-08', 'Raththi 250g', 35, 6722.1),
(3101729, '2017-09-08', 'Raththi 400g', 1008, 310111),
(3101730, '2017-09-08', 'Raththi 1kg', 198, 151898),
(3101768, '2017-09-08', 'Raththi Smart 400g', 782, 240582),
(3101767, '2017-09-08', 'Raththi Smart 1kg', -28, -21480.5),
(3101746, '2017-09-08', 'Anchor(+) 400g', -14, -6054.3),
(3101780, '2017-09-08', 'PediaPro(1-2) 200g', -21, -6835.5),
(3101781, '2017-09-08', 'PediaPro(1-2) 400g', -55, -33247.5),
(3101747, '2017-09-08', 'PediaPro(1-2) 1kg', 2, 2929.5),
(3101787, '2017-09-08', 'PediaPro(2-5) 200g', -25, -8137.5),
(3101782, '2017-09-08', 'PediaPro(2-5) 400g', -14, -8463),
(3101748, '2017-09-08', 'PediaPro(2-5) 1kg', 0, 0),
(3101735, '2017-09-08', 'Anchor Instant 400g', 30, 9229.5),
(3101736, '2017-09-08', 'Anchor Instant 1kg', 12, 9201),
(3101743, '2017-08-24', 'Anlene 80g', 0, 0),
(3101742, '2017-09-08', 'Anlene 200g', -35, -8462.3),
(3101744, '2017-09-08', 'Anlene 400g', 28, 12238.8),
(3101773, '2017-09-08', 'Anchor PediaPro Mama 400g', -9, -6361.2),
(3101726, '2017-09-08', 'Anchor Shape Up 400g', -6, -2514.24),
(3101770, '2017-09-09', 'Newdale Yogurt 80g', 880, 27104),
(3101757, '2017-08-24', 'Newdale Yogurt Tub 480g', 0, 0),
(3101786, '2017-09-08', 'Newdale Flavoured Milk Vanilla', 1153, 46696.5),
(3101785, '2017-09-08', 'Newdale Flavoured Milk Chocolate', 555, 22477.5),
(3101750, '2017-08-24', 'Newdale Flavoured Milk Vanilla Promotion', 0, 0),
(3101749, '2017-08-24', 'Newdale Flavoured Milk Chocolate Promotion', 0, 0),
(110581, '2017-09-09', 'Anchor Butter Salted 100g', 58, 13833),
(110578, '2017-09-09', 'Anchor Butter Salted 227g', 18, 8424),
(3101759, '2017-09-09', 'Curd 480g', 3, 396),
(3101745, '2017-09-08', 'Fresh Milk 1litre', -12, -2160),
(3110184, '2018-07-09', 'Red Cow 1kg', NULL, NULL),
(3110086, '2018-07-07', 'Strawberry Yogurt 80g', NULL, NULL),
(3110064, '2018-07-07', 'Mango Yogurt 80g', NULL, NULL),
(107525, '2018-07-07', 'Cheese 100g', NULL, NULL),
(3103359, '2018-07-07', 'Newdale Flavoured Milk Strawberry', NULL, NULL),
(3110153, '2018-07-07', 'Newdale Flavoured Milk Mango', NULL, NULL),
(3110106, '2018-07-07', 'Drinking Yogurt Vanilla', NULL, NULL),
(3110115, '2018-07-09', 'Drinking Yogurt Mango', NULL, NULL),
(3110162, '2018-07-09', 'Red Cow 18g', NULL, NULL),
(3110191, '2018-07-09', 'Red Cow 400g', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `horeca`
--

DROP TABLE IF EXISTS `horeca`;
CREATE TABLE IF NOT EXISTS `horeca` (
  `itemcode` int(15) NOT NULL,
  `date1` date NOT NULL,
  `product` varchar(50) NOT NULL,
  `units` int(100) DEFAULT NULL,
  `value` float DEFAULT NULL,
  PRIMARY KEY (`itemcode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `horeca`
--

INSERT INTO `horeca` (`itemcode`, `date1`, `product`, `units`, `value`) VALUES
(3101763, '2017-09-08', 'Anchor 18g', 637, 10860.8),
(3101734, '2017-08-24', 'Anchor 75g', 0, 0),
(3101731, '2017-08-24', 'Anchor 250g', 0, 0),
(3101732, '2017-09-08', 'Anchor 400g', 105, 32289.6),
(3101733, '2017-09-08', 'Anchor 1kg', -1, -766.67),
(3101741, '2017-09-08', 'Raththi 18g', 797, 13588.9),
(3101769, '2017-08-24', 'Raththi 70g', 0, 0),
(3101771, '2017-08-24', 'Raththi 160g', 0, 0),
(3101728, '2017-08-24', 'Raththi 250g', 0, 0),
(3101729, '2017-09-08', 'Raththi 400g', 69, 21227.9),
(3101730, '2017-09-08', 'Raththi 1kg', -2, -1534.32),
(3101768, '2017-09-08', 'Raththi Smart 400g', 66, 20304.9),
(3101767, '2017-09-08', 'Raththi Smart 1kg', 36, 27617.8),
(3101746, '2017-08-24', 'Anchor(+) 400g', 0, 0),
(3101780, '2017-08-24', 'PediaPro(1-2) 200g', 0, 0),
(3101781, '2017-08-24', 'PediaPro(1-2) 400g', 0, 0),
(3101747, '2017-08-24', 'PediaPro(1-2) 1kg', 0, 0),
(3101787, '2017-08-24', 'PediaPro(2-5) 200g', 0, 0),
(3101782, '2017-08-24', 'PediaPro(2-5) 400g', 0, 0),
(3101748, '2017-08-24', 'PediaPro(2-5) 1kg', 0, 0),
(3101735, '2017-08-24', 'Anchor Instant 400g', 0, 0),
(3101736, '2017-08-24', 'Anchor Instant 1kg', 0, 0),
(3101743, '2017-08-24', 'Anlene 80g', 0, 0),
(3101742, '2017-08-24', 'Anlene 200g', 0, 0),
(3101744, '2017-08-24', 'Anlene 400g', 0, 0),
(3101773, '2017-08-24', 'Anchor PediaPro Mama 400g', 0, 0),
(3101726, '2017-08-24', 'Anchor Shape Up 400g', 0, 0),
(3101770, '2017-09-09', 'Newdale Yogurt 80g', 819, 25225.2),
(3101757, '2017-08-24', 'Newdale Yogurt Tub 480g', 0, 0),
(3101786, '2017-09-08', 'Newdale Flavoured Milk Vanilla', 1458, 59049),
(3101785, '2017-09-08', 'Newdale Flavoured Milk Chocolate', 1585, 64192.5),
(3101750, '2017-08-24', 'Newdale Flavoured Milk Vanilla Promotion', 0, 0),
(3101749, '2017-08-24', 'Newdale Flavoured Milk Chocolate Promotion', 0, 0),
(110581, '2017-09-07', 'Anchor Butter Salted 100g', 0, 0),
(110578, '2017-08-24', 'Anchor Butter Salted 227g', 0, 0),
(3101759, '2017-08-24', 'Curd 480g', 0, 0),
(3101745, '2017-08-24', 'Fresh Milk 1litre', 0, 0),
(3110162, '2018-07-07', 'Red Cow 18g', 400, 14.19),
(3110191, '2018-07-07', 'Red Cow 400g', NULL, NULL),
(3110184, '2018-07-07', 'Red Cow 1kg', NULL, NULL),
(3110086, '2018-07-07', 'Strawberry Yogurt 80g', NULL, NULL),
(3110064, '2018-07-09', 'Mango Yogurt 80g', 2410, 74228),
(107525, '2018-07-09', 'Cheese 100g', 4810, 1248680),
(3103359, '2018-07-07', 'Newdale Flavoured Milk Strawberry', NULL, NULL),
(3110153, '2018-07-07', 'Newdale Flavoured Milk Mango', NULL, NULL),
(3110106, '2018-07-07', 'Drinking Yogurt Vanilla', NULL, NULL),
(3110115, '2018-07-07', 'Drinking Yogurt Mango', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kadawatha`
--

DROP TABLE IF EXISTS `kadawatha`;
CREATE TABLE IF NOT EXISTS `kadawatha` (
  `itemcode` int(15) NOT NULL,
  `date1` date NOT NULL,
  `product` varchar(50) NOT NULL,
  `units` int(100) DEFAULT NULL,
  `value` float DEFAULT NULL,
  PRIMARY KEY (`itemcode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kadawatha`
--

INSERT INTO `kadawatha` (`itemcode`, `date1`, `product`, `units`, `value`) VALUES
(3101763, '2018-07-08', 'Anchor 18g', -1751, -29854.5),
(3101734, '2017-09-07', 'Anchor 75g', 1, 66.25),
(3101731, '2017-09-08', 'Anchor 250g', 248, 47630.9),
(3101732, '2017-09-08', 'Anchor 400g', 3657, 1124600),
(3101733, '2018-10-26', 'Anchor 1kg', 29, 22233.4),
(3101741, '2017-09-08', 'Raththi 18g', 317, 5404.85),
(3101769, '2017-09-08', 'Raththi 70g', 1233, 69898.8),
(3101771, '2017-09-08', 'Raththi 160g', 312, 38319.8),
(3101728, '2017-09-08', 'Raththi 250g', 271, 52048.3),
(3101729, '2017-09-08', 'Raththi 400g', 2976, 915566),
(3101730, '2017-09-08', 'Raththi 1kg', 525, 402759),
(3101768, '2017-09-08', 'Raththi Smart 400g', 643, 197819),
(3101767, '2017-09-08', 'Raththi Smart 1kg', 378, 289986),
(3101746, '2017-09-08', 'Anchor(+) 400g', -10, -4324.5),
(3101780, '2017-09-08', 'PediaPro(1-2) 200g', -6, -1953),
(3101781, '2017-09-08', 'PediaPro(1-2) 400g', -19, -11485.5),
(3101747, '2017-09-08', 'PediaPro(1-2) 1kg', 0, 0),
(3101787, '2017-09-08', 'PediaPro(2-5) 200g', -47, -15298.5),
(3101782, '2017-09-08', 'PediaPro(2-5) 400g', -18, -10881),
(3101748, '2017-09-08', 'PediaPro(2-5) 1kg', 0, 0),
(3101735, '2017-08-24', 'Anchor Instant 400g', 0, 0),
(3101736, '2017-08-24', 'Anchor Instant 1kg', 0, 0),
(3101743, '2018-07-07', 'Anlene 80g', 324, 29830.7),
(3101742, '2017-09-08', 'Anlene 200g', -1, -241.78),
(3101744, '2017-09-08', 'Anlene 400g', 18, 7867.8),
(3101773, '2017-09-08', 'Anchor PediaPro Mama 400g', 17, 12015.6),
(3101726, '2017-09-08', 'Anchor Shape Up 400g', 72, 30170.9),
(3101770, '2018-06-02', 'Newdale Yogurt 80g', 2772, 85377.6),
(3101757, '2017-09-08', 'Newdale Yogurt Tub 480g', -11, -1887.6),
(3101786, '2017-09-08', 'Newdale Flavoured Milk Vanilla', 240, 9720),
(3101785, '2017-09-08', 'Newdale Flavoured Milk Chocolate', 85, 3442.5),
(3101750, '2017-08-24', 'Newdale Flavoured Milk Vanilla Promotion', 0, 0),
(3101749, '2017-08-24', 'Newdale Flavoured Milk Chocolate Promotion', 0, 0),
(110581, '2017-09-08', 'Anchor Butter Salted 100g', 82, 19557),
(110578, '2017-09-08', 'Anchor Butter Salted 227g', -11, -5148),
(3101759, '2017-09-09', 'Curd 480g', 1, 132),
(3101745, '2017-09-07', 'Fresh Milk 1litre', 0, 0),
(3110184, '2018-07-08', 'Red Cow 1kg', -143, -95127),
(3110086, '2018-07-09', 'Strawberry Yogurt 80g', -12, 686.6),
(3110064, '2018-07-09', 'Mango Yogurt 80g', 419, -2754.8),
(107525, '2018-07-08', 'Cheese 100g', 564, 13086.8),
(3103359, '2018-07-07', 'Newdale Flavoured Milk Strawberry', 215, 2166),
(3110153, '2018-07-07', 'Newdale Flavoured Milk Mango', 2515, 52626),
(3110106, '2018-07-07', 'Drinking Yogurt Vanilla', 251, 626),
(3110115, '2018-07-07', 'Drinking Yogurt Mango', 263, 62561),
(3110162, '2018-07-07', 'Red Cow 18g', 41520, 251),
(3110191, '2018-07-08', 'Red Cow 400g', 41515, -9286.84);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
