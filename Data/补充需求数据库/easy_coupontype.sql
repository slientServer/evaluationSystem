-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-06-25 18:30:39
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
-- 表的结构 `easy_coupontype`
--

CREATE TABLE IF NOT EXISTS `easy_coupontype` (
  `coupontypeid` int(5) NOT NULL,
  `couponkey` varchar(11) NOT NULL,
  `coupontype` varchar(50) DEFAULT NULL,
  `couponvalue` int(8) NOT NULL,
  `couponcondition` varchar(50) NOT NULL DEFAULT '无使用条件',
  `starttime` varchar(11) CHARACTER SET utf16 NOT NULL,
  `endtime` varchar(11) NOT NULL,
  `couponcomment` varchar(200) DEFAULT NULL,
  `inserttime` int(11) NOT NULL,
  `lastmodifytime` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `easy_coupontype`
--

INSERT INTO `easy_coupontype` (`coupontypeid`, `couponkey`, `coupontype`, `couponvalue`, `couponcondition`, `starttime`, `endtime`, `couponcomment`, `inserttime`, `lastmodifytime`) VALUES
(6, '测试优惠券', 'discount', 90, '满300可用', '2016-03-09', '2016-03-31', NULL, 1459009625, 1459009625),
(7, 'testtest111', 'coupon', 123, '312', '2016-06-20', '2016-06-25', NULL, 1466430655, 1466430655),
(8, '测试与回去', 'null', 213, '满300', '2016-06-21', '2016-07-02', NULL, 1466430714, 1466430714),
(10, '测试与回去123', 'cash', 500, '无使用条件', '2016-06-21', '2016-07-02', NULL, 1466431121, 1466431121);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `easy_coupontype`
--
ALTER TABLE `easy_coupontype`
  ADD PRIMARY KEY (`coupontypeid`), ADD UNIQUE KEY `couponkey` (`couponkey`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `easy_coupontype`
--
ALTER TABLE `easy_coupontype`
  MODIFY `coupontypeid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
