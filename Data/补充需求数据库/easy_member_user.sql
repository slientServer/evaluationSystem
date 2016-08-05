-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-06-25 18:30:21
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
-- 表的结构 `easy_member_user`
--

CREATE TABLE IF NOT EXISTS `easy_member_user` (
  `userid` int(10) unsigned NOT NULL,
  `phonenumber` varchar(11) DEFAULT NULL,
  `birthday` varchar(11) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `score` int(10) unsigned DEFAULT NULL,
  `wechatid` int(10) unsigned DEFAULT NULL,
  `openid` varchar(30) DEFAULT NULL,
  `photosrc` varchar(100) DEFAULT NULL,
  `nickname` varchar(30) DEFAULT NULL,
  `inserttime` int(11) unsigned DEFAULT NULL,
  `lastmodifytime` int(11) unsigned DEFAULT NULL,
  `islock` int(1) unsigned NOT NULL DEFAULT '0',
  `enroll` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `easy_member_user`
--

INSERT INTO `easy_member_user` (`userid`, `phonenumber`, `birthday`, `address`, `score`, `wechatid`, `openid`, `photosrc`, `nickname`, `inserttime`, `lastmodifytime`, `islock`, `enroll`) VALUES
(72, '18801936654', '2018-04-19', '上海大学宝山校区图书馆管理员', 10079, NULL, 'oO9Rqs4R7a2WqCCCtHxhl0y8It1g', 'http://wx.qlogo.cn/mmopen/PiajxSqBRaEIN801LEFPR0DyyTCiah5dX0jEaGwGG26JqudrxMA5RfiauAo7QAstdh1EqnMyRl', 'GG', 1459831442, 1461930466, 0, NULL),
(71, '18818203641', '', '', 1679, NULL, 'oO9Rqs3wB38dm7FCGjEYwBmE5oeY', 'http://wx.qlogo.cn/mmopen/ajNVdqHZLLD1CoqaOVO33GicvV7oyFaJ5FF0lCJZv2Zeq2ia9ibm9nbWPwhoOYjjoY10aicV8l', 'Brian', 1459173743, 1461930377, 0, NULL),
(70, '18621542411', '1997-04-23', '哈哈哈哈哈', 96, NULL, 'oO9Rqs6E3bY7Pn7v_33XYA_xtWCw', 'http://wx.qlogo.cn/mmopen/ajNVdqHZLLCsiaOwsTiceSJRW9iaCx7K1Q6gCUeJC5ryRibacwZ23Cz371lnWBMeDicmiauOpH', 'Ma4r', 1459142258, 1461894409, 0, NULL),
(74, '', '', '', 100, NULL, 'oO9Rqs_quciysI_RryhG5_6PVxrw', '', 'going高', 1460175752, 1461148915, 0, NULL),
(81, '13818812233', NULL, NULL, 77, NULL, 'oO9Rqs1FkRvmKgGAO8rbUgs9GeZ4', 'http://wx.qlogo.cn/mmopen/PiajxSqBRaELWNZpoRWQ9uhwm5CnIh9ic2d4DkkNOP8IITSbfeia61vYU5Ar28cblml04To1hD', 'jackeyqiu', 1461554873, 1461554914, 0, NULL),
(82, '18616620077', '1981-10-24', NULL, 100, NULL, 'oO9Rqs-tSMjUFprxp1nH3TTW-Dh0', 'http://wx.qlogo.cn/mmopen/I1OPdTuWhE8OG72cN1rysWSdCXFVjxpwqOMUE2pktJdChZPYr1HtdpibIn8yofA3dvGHnU6EeO', '于莹', 1461554878, 1461837238, 0, NULL),
(83, '13564485555', '1984-01-19', '上海市', 100, NULL, 'oO9Rqs-GuzxPSLBj5QqMytbpaRGM', 'http://wx.qlogo.cn/mmopen/I1OPdTuWhE9D74YzyH0PNzKt61TsPPMqDAFAHSVjN7EJFzCxf8AE3iaZ8FibQhXta94LHL4TQo', '寻少华', 1461655438, 1461918108, 0, NULL),
(85, '13611927338', '1978-08-04', '上海黄埔区中山南路398弄2号楼3102', 100, NULL, 'oO9Rqs8pD2btxQQBha8gi_34Mv6g', 'http://wx.qlogo.cn/mmopen/I1OPdTuWhE8OG72cN1rysaibMC18gTialUbT7R6EMYFmkDrhgB28ru2peYq6IDsIyHzuNg6gMj', 'B ren don', 1461915411, 1461915669, 0, NULL),
(87, '18818203641', '2016-06-12', 'fsdafsa', 100, NULL, ' OPENID', 'http://wx.qlogo.cn/mmopen/g3MonUZtNHkdmzicIlibx6iaFqAc56vxLSUfpb6n5WKSYVY0ChQKkiaJSgQ1dZuTOgvLLrhJbE', '12344443fdsafdsa546', 1465391013, 1466869373, 0, 1466869373);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `easy_member_user`
--
ALTER TABLE `easy_member_user`
  ADD PRIMARY KEY (`userid`), ADD UNIQUE KEY `openid` (`openid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `easy_member_user`
--
ALTER TABLE `easy_member_user`
  MODIFY `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=88;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
