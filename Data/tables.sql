-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-01-23 17:02:29
-- 服务器版本： 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `easycms`
--

-- --------------------------------------------------------

--
-- 表的结构 `easy_access`
--

CREATE TABLE IF NOT EXISTS `easy_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `easy_ads`
--

CREATE TABLE IF NOT EXISTS `easy_ads` (
`ads_id` int(11) NOT NULL,
  `ads_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ads_desc` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `pic_url` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `click_url` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `easy_ads`
--

INSERT INTO `easy_ads` (`ads_id`, `ads_key`, `ads_desc`, `title`, `pic_url`, `click_url`, `enabled`) VALUES
(1, 'HOME_PAGE_AD1', '首页广告1', '', '', '', 1),
(4, '32', '123', '121', '/Uploads/Picture/Ads/1452758776_3628673.png', '111', 1),
(5, '1', '3', '4', '/Uploads/Picture/Ads/', '1', 0),
(6, '555', '555', '123123', '/Uploads/Picture/Ads/', '123', 0),
(7, '123', '44', '121', '/Uploads/Picture/Ads/', '1', 0),
(8, '4234', '123421', '243', '/Uploads/Picture/Ads/', '1324', 0),
(9, '12', '123', '3', '/Uploads/Picture/Ads/2016-01-16/1452875095_9226374.png', '4', 0);

-- --------------------------------------------------------

--
-- 表的结构 `easy_article`
--

CREATE TABLE IF NOT EXISTS `easy_article` (
`article_id` int(10) unsigned NOT NULL,
  `tid` int(10) unsigned NOT NULL,
  `title` varchar(40) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `pubtime` int(10) unsigned NOT NULL,
  `summary` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `approval` int(10) unsigned NOT NULL,
  `opposition` int(10) unsigned NOT NULL,
  `iscommend` tinyint(1) unsigned NOT NULL,
  `ispush` tinyint(1) unsigned NOT NULL,
  `isslides` tinyint(1) unsigned NOT NULL,
  `islock` tinyint(1) unsigned NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `easy_article`
--

INSERT INTO `easy_article` (`article_id`, `tid`, `title`, `keyword`, `pubtime`, `summary`, `content`, `approval`, `opposition`, `iscommend`, `ispush`, `isslides`, `islock`) VALUES
(2, 62, '啦啦啦', '的的 啊啊 打法', 1452576517, '阿萨德发送到', '内容ad司法所地方<img src="./Uploads/Article/day_160112/201601121328183481.JPG" width="600" alt="" />', 0, 0, 1, 0, 0, 0),
(3, 62, '123123', '23', 1452836791, '123123爱爱爱', '123123123123					', 0, 0, 1, 0, 0, 0),
(4, 62, '1', '2', 1452836912, '3', '					', 0, 0, 1, 0, 0, 0),
(5, 62, '1', '2', 1452837104, '3', '					', 0, 0, 1, 0, 0, 0),
(6, 62, '14', '23', 1452837265, '3', '', 0, 0, 1, 0, 0, 0),
(7, 70, 'A DS', 'ADF ', 1452873767, '撒旦发射的发', '阿斯蒂芬撒旦法地方					', 0, 0, 1, 0, 0, 0),
(8, 62, '4', '4', 1453036625, '123', '123132', 0, 0, 1, 0, 0, 0),
(9, 62, '324', '1243', 1453036641, '124', 'lkjlkjlkj', 0, 0, 1, 0, 0, 0),
(10, 62, 'lkjlkj', 'lkjlkj', 1453036669, 'lkjlk', 'lkjlkjlkdsa', 0, 0, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `easy_category`
--

CREATE TABLE IF NOT EXISTS `easy_category` (
`id` int(10) unsigned NOT NULL,
  `name` char(15) NOT NULL DEFAULT '',
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  `sort` int(6) NOT NULL DEFAULT '100',
  `modelid` tinyint(1) NOT NULL DEFAULT '0',
  `isshow` tinyint(1) NOT NULL DEFAULT '1',
  `isverify` tinyint(1) NOT NULL DEFAULT '1',
  `ispush` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=72 ;

--
-- 转存表中的数据 `easy_category`
--

INSERT INTO `easy_category` (`id`, `name`, `pid`, `sort`, `modelid`, `isshow`, `isverify`, `ispush`) VALUES
(62, 'tokidoki世界', 0, 100, 0, 1, 1, 0),
(63, '1', 0, 100, 0, 0, 1, 0),
(66, '6', 0, 100, 0, 0, 1, 0),
(67, '77', 0, 100, 0, 0, 1, 0),
(70, '阿斯蒂芬c', 62, 100, 0, 0, 1, 0),
(71, '666', 62, 100, 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `easy_comment`
--

CREATE TABLE IF NOT EXISTS `easy_comment` (
`commend_id` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  `aid` int(10) unsigned NOT NULL,
  `content` text NOT NULL,
  `islock` tinyint(1) unsigned NOT NULL,
  `pubtime` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `easy_fields`
--

CREATE TABLE IF NOT EXISTS `easy_fields` (
`fields_id` int(10) unsigned NOT NULL,
  `field` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `issystem` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `easy_fields`
--

INSERT INTO `easy_fields` (`fields_id`, `field`, `content`, `issystem`) VALUES
(1, 'title', 'Simpsons', 1),
(2, 'description', '这是一个默认网站描述', 1),
(3, 'copyright', '这是一个默认网站版权', 1),
(4, 'announcement', '这是站点公告哦', 1),
(5, 'ad', '<p><img alt="微笑" src="Application/Admin/View/default/Public/dwz/xheditor/xheditor_emot/default/smile.gif" /></p><p><br /></p><p><a href="http://www.baidu.com" target="_blank">This is a link</a></p>', 1);

-- --------------------------------------------------------

--
-- 表的结构 `easy_link`
--

CREATE TABLE IF NOT EXISTS `easy_link` (
`link_id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `isverify` tinyint(1) unsigned NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `easy_link`
--

INSERT INTO `easy_link` (`link_id`, `name`, `url`, `isverify`) VALUES
(1, '123', 'http://www.baidu.com', 1);

-- --------------------------------------------------------

--
-- 表的结构 `easy_member_user`
--

CREATE TABLE IF NOT EXISTS `easy_member_user` (
`user_id` int(10) unsigned NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` char(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `sex` tinyint(1) unsigned NOT NULL,
  `photo` char(100) NOT NULL,
  `regtime` int(10) unsigned NOT NULL DEFAULT '0',
  `regip` char(15) NOT NULL,
  `islock` tinyint(1) unsigned NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `easy_member_user`
--

INSERT INTO `easy_member_user` (`user_id`, `username`, `password`, `email`, `sex`, `photo`, `regtime`, `regip`, `islock`) VALUES
(1, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test@qqq.com', 1, '', 1452752981, '0.0.0.0', 0);

-- --------------------------------------------------------

--
-- 表的结构 `easy_node`
--

CREATE TABLE IF NOT EXISTS `easy_node` (
`id` smallint(6) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

-- --------------------------------------------------------

--
-- 表的结构 `easy_plugin`
--

CREATE TABLE IF NOT EXISTS `easy_plugin` (
`plugin_id` int(11) unsigned NOT NULL,
  `name` varchar(32) NOT NULL,
  `desc` varchar(255) NOT NULL DEFAULT '无',
  `method` varchar(255) NOT NULL,
  `isinstalled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `position` tinyint(4) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `easy_plugin`
--

INSERT INTO `easy_plugin` (`plugin_id`, `name`, `desc`, `method`, `isinstalled`, `position`) VALUES
(7, 'Baidushare', '无', 'Index/Baidushare/info', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `easy_recommendation`
--

CREATE TABLE IF NOT EXISTS `easy_recommendation` (
`recomm_id` int(11) NOT NULL,
  `recomm_title` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `recomm_pic` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `recomm_desc` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `recomm_pos` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `recomm_sort` int(5) unsigned DEFAULT NULL,
  `recomm_time` int(10) unsigned NOT NULL,
  `islock` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `easy_recommendation`
--

INSERT INTO `easy_recommendation` (`recomm_id`, `recomm_title`, `recomm_pic`, `recomm_desc`, `recomm_pos`, `recomm_sort`, `recomm_time`, `islock`) VALUES
(3, '434341111111111', '<img src="./Uploads/Article/day_160117/201601171739229200.jpg" alt="" />																														', '', '54365564534', 12, 1453023565, 1),
(4, 'fsad', '<img src="./Uploads/Article/day_160117/201601171815255969.jpg" alt="" />															', '', 'fdsafdsa', 1, 1453025729, 1),
(7, '3', '', '', 'qqqqzzzzzzzzfdsaaaaaaaaaaaaaaa', 0, 1453036792, 1),
(8, '4', '', '', 'qqqqzzzzzzzzfdsaaaaaaaaaaaaaaa', 0, 1453036797, 1),
(9, '5', '', '', 'qqqqzzzzzzzzfdsaaaaaaaaaaaaaaa', 0, 1453036803, 1),
(10, '6', '', '', 'qqqqzzzzzzzzfdsaaaaaaaaaaaaaaa', 0, 1453036810, 1),
(11, '7', '', '', 'qqqqzzzzzzzzfdsaaaaaaaaaaaaaaa', 0, 1453036816, 1),
(12, '8', '', '', 'qqqqzzzzzzzzfdsaaaaaaaaaaaaaaa', 0, 1453036822, 1),
(13, '9', '', '', 'qqqqzzzzzzzzfdsaaaaaaaaaaaaaaa', 0, 1453036827, 1),
(14, '12', '', '', 'qqqqzzzzzzzzfdsaaaaaaaaaaaaaaa', 0, 1453036833, 1),
(15, '123', '', '', 'qqqqzzzzzzzzfdsaaaaaaaaaaaaaaa', 0, 1453036838, 1);

-- --------------------------------------------------------

--
-- 表的结构 `easy_recompos`
--

CREATE TABLE IF NOT EXISTS `easy_recompos` (
`recompos_id` int(11) NOT NULL,
  `recompos_key` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `recompos_name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- 转存表中的数据 `easy_recompos`
--

INSERT INTO `easy_recompos` (`recompos_id`, `recompos_key`, `recompos_name`) VALUES
(2, 'qqqqzzzzzzzzfdsaaaaaaaaaaaaaaa', 'qqqqqqqfdsaaaaaaa'),
(3, '5435', 'erwreew'),
(4, '54365564534', '423543'),
(5, 'fds', 'fdsa'),
(6, '4543', '54353'),
(8, 'fdsafdsa', 'dfsafdsa'),
(10, '54356', '5435'),
(11, '4324312', '3421'),
(12, '1', '1'),
(14, '2', '1'),
(15, '3', '3'),
(16, '4', '4'),
(17, '5', '5'),
(18, '6', '6'),
(19, '7', '7'),
(20, '8', '8'),
(21, '9', '9'),
(22, '10', '10'),
(23, '11', '11'),
(24, '12', '12'),
(25, '13', '133'),
(26, '14', '14'),
(27, '15', '15');

-- --------------------------------------------------------

--
-- 表的结构 `easy_role`
--

CREATE TABLE IF NOT EXISTS `easy_role` (
`id` smallint(6) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- 表的结构 `easy_role_user`
--

CREATE TABLE IF NOT EXISTS `easy_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `easy_user`
--

CREATE TABLE IF NOT EXISTS `easy_user` (
`id` int(10) unsigned NOT NULL,
  `openid` varchar(100) NOT NULL,
  `refresh_token` varchar(100) NOT NULL,
  `username` char(20) NOT NULL DEFAULT '',
  `nickname` varchar(255) NOT NULL,
  `headimgurl` varchar(255) NOT NULL,
  `password` char(32) NOT NULL DEFAULT '',
  `logintime` int(10) unsigned NOT NULL,
  `loginip` varchar(30) NOT NULL,
  `lock` tinyint(1) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `easy_user`
--

INSERT INTO `easy_user` (`id`, `openid`, `refresh_token`, `username`, `nickname`, `headimgurl`, `password`, `logintime`, `loginip`, `lock`) VALUES
(6, '', '', 'admin', '', '', '21232f297a57a5a743894a0e4a801fc3', 1452836107, '0.0.0.0', 0),
(7, 'oO9Rqs-a5z19KcvlzX-sRkmgfdo4', '', '', '布莱克', 'http://wx.qlogo.cn/mmopen/ajNVdqHZLLA75bdnD3bFRHDSTGlBBVLOgm1IL5eNJ6ooV2ib7y4lRIhsppLwWNpyUU57CzlzlopFSsRcyVicuNVA/0', '', 0, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `easy_access`
--
ALTER TABLE `easy_access`
 ADD KEY `groupId` (`role_id`), ADD KEY `nodeId` (`node_id`);

--
-- Indexes for table `easy_ads`
--
ALTER TABLE `easy_ads`
 ADD PRIMARY KEY (`ads_id`), ADD UNIQUE KEY `ad_key` (`ads_key`), ADD KEY `ad_key_2` (`ads_key`);

--
-- Indexes for table `easy_article`
--
ALTER TABLE `easy_article`
 ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `easy_category`
--
ALTER TABLE `easy_category`
 ADD PRIMARY KEY (`id`), ADD KEY `pid` (`pid`);

--
-- Indexes for table `easy_comment`
--
ALTER TABLE `easy_comment`
 ADD PRIMARY KEY (`commend_id`);

--
-- Indexes for table `easy_fields`
--
ALTER TABLE `easy_fields`
 ADD PRIMARY KEY (`fields_id`);

--
-- Indexes for table `easy_link`
--
ALTER TABLE `easy_link`
 ADD PRIMARY KEY (`link_id`);

--
-- Indexes for table `easy_member_user`
--
ALTER TABLE `easy_member_user`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `easy_node`
--
ALTER TABLE `easy_node`
 ADD PRIMARY KEY (`id`), ADD KEY `level` (`level`), ADD KEY `pid` (`pid`), ADD KEY `status` (`status`), ADD KEY `name` (`name`);

--
-- Indexes for table `easy_plugin`
--
ALTER TABLE `easy_plugin`
 ADD PRIMARY KEY (`plugin_id`);

--
-- Indexes for table `easy_recommendation`
--
ALTER TABLE `easy_recommendation`
 ADD PRIMARY KEY (`recomm_id`);

--
-- Indexes for table `easy_recompos`
--
ALTER TABLE `easy_recompos`
 ADD PRIMARY KEY (`recompos_id`), ADD UNIQUE KEY `recompos_key` (`recompos_key`);

--
-- Indexes for table `easy_role`
--
ALTER TABLE `easy_role`
 ADD PRIMARY KEY (`id`), ADD KEY `pid` (`pid`), ADD KEY `status` (`status`);

--
-- Indexes for table `easy_role_user`
--
ALTER TABLE `easy_role_user`
 ADD KEY `group_id` (`role_id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `easy_user`
--
ALTER TABLE `easy_user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `easy_ads`
--
ALTER TABLE `easy_ads`
MODIFY `ads_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `easy_article`
--
ALTER TABLE `easy_article`
MODIFY `article_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `easy_category`
--
ALTER TABLE `easy_category`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `easy_comment`
--
ALTER TABLE `easy_comment`
MODIFY `commend_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `easy_fields`
--
ALTER TABLE `easy_fields`
MODIFY `fields_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `easy_link`
--
ALTER TABLE `easy_link`
MODIFY `link_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `easy_member_user`
--
ALTER TABLE `easy_member_user`
MODIFY `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `easy_node`
--
ALTER TABLE `easy_node`
MODIFY `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `easy_plugin`
--
ALTER TABLE `easy_plugin`
MODIFY `plugin_id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `easy_recommendation`
--
ALTER TABLE `easy_recommendation`
MODIFY `recomm_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `easy_recompos`
--
ALTER TABLE `easy_recompos`
MODIFY `recompos_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `easy_role`
--
ALTER TABLE `easy_role`
MODIFY `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `easy_user`
--
ALTER TABLE `easy_user`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
