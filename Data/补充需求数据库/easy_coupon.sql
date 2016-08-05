-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-06-25 18:30:32
-- 服务器版本： 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simpsons`
--

-- --------------------------------------------------------

--
-- 表的结构 `easy_coupon`
--

CREATE TABLE IF NOT EXISTS `easy_coupon` (
  `couponid` int(10) unsigned zerofill NOT NULL,
  `couponnumber` varchar(30) NOT NULL,
  `couponcode` varchar(30) NOT NULL,
  `couponkey` varchar(10) NOT NULL,
  `coupontype` varchar(50) NOT NULL,
  `userid` int(10) unsigned DEFAULT NULL,
  `couponvalue` int(8) unsigned DEFAULT NULL,
  `couponcondition` varchar(50) DEFAULT '0',
  `starttime` varchar(11) DEFAULT NULL,
  `endtime` varchar(11) DEFAULT NULL,
  `couponcomment` varchar(500) DEFAULT NULL,
  `isused` int(1) unsigned zerofill DEFAULT '0',
  `inserttime` int(11) unsigned DEFAULT NULL,
  `lastmodifytime` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=420 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `easy_coupon`
--

INSERT INTO `easy_coupon` (`couponid`, `couponnumber`, `couponcode`, `couponkey`, `coupontype`, `userid`, `couponvalue`, `couponcondition`, `starttime`, `endtime`, `couponcomment`, `isused`, `inserttime`, `lastmodifytime`) VALUES
(0000000358, 'SIMP274298', '621933', '测试优惠券', 'discount', 87, 90, '满300可用', '2016-03-09', '2016-03-31', '', 0, 1466871364, 1466871364),
(0000000359, 'SIMP587573', '147049', '测试优惠券', 'discount', 87, 90, '满300可用', '2016-03-09', '2016-03-31', '', 0, 1466871374, 1466871374),
(0000000360, 'SIMP940838', '656100', '测试优惠券', 'discount', 87, 90, '满300可用', '2016-03-09', '2016-03-31', '', 0, 1466871390, 1466871390),
(0000000370, 'SIMP596967', '636545', '测试优惠券', 'discount', 87, 90, '满300可用', '2016-03-09', '2016-03-31', '', 0, 1466871430, 1466871430),
(0000000371, 'SIMP549011', '837539', '测试优惠券', 'discount', 87, 90, '满300可用', '2016-03-09', '2016-03-31', '', 0, 1466871435, 1466871435),
(0000000372, 'SIMP323078', '763876', '测试优惠券', 'discount', 87, 90, '满300可用', '2016-03-09', '2016-03-31', '', 0, 1466871572, 1466871572),
(0000000409, 'SIMP535059', '610452', '测试优惠券', 'discount', 87, 90, '满300可用', '2016-03-09', '2016-03-31', '', 0, 1466871632, 1466871632),
(0000000410, 'SIMP854596', '761899', '测试优惠券', 'discount', 87, 90, '满300可用', '2016-03-09', '2016-03-31', '', 0, 1466871679, 1466871679);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `easy_coupon`
--
ALTER TABLE `easy_coupon`
  ADD PRIMARY KEY (`couponid`), ADD UNIQUE KEY `couponnumber` (`couponnumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `easy_coupon`
--
ALTER TABLE `easy_coupon`
  MODIFY `couponid` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=420;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
