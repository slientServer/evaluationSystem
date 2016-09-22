-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-09-06 17:12:10
-- 服务器版本： 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `evaluation`
--

-- --------------------------------------------------------

--
-- 表的结构 `es_access`
--

CREATE TABLE IF NOT EXISTS `es_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `es_access`
--

INSERT INTO `es_access` (`role_id`, `node_id`, `level`, `module`) VALUES
(4, 4, 1, NULL),
(4, 5, 2, NULL),
(4, 6, 3, NULL),
(1, 4, 1, NULL),
(1, 5, 2, NULL),
(1, 6, 3, NULL),
(5, 1, 1, NULL),
(9, 29, 3, NULL),
(9, 28, 2, NULL),
(9, 26, 1, NULL),
(9, 36, 3, NULL),
(9, 34, 2, NULL),
(9, 33, 1, NULL),
(9, 48, 3, NULL),
(9, 47, 2, NULL),
(9, 46, 1, NULL),
(9, 45, 3, NULL),
(9, 44, 2, NULL),
(9, 43, 1, NULL),
(9, 42, 3, NULL),
(9, 41, 2, NULL),
(9, 40, 1, NULL),
(9, 39, 3, NULL),
(9, 38, 2, NULL),
(9, 37, 1, NULL),
(9, 30, 1, NULL),
(9, 31, 2, NULL),
(9, 32, 3, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `es_assessgroup`
--

CREATE TABLE IF NOT EXISTS `es_assessgroup` (
  `id` int(20) NOT NULL,
  `groupname` varchar(50) NOT NULL,
  `groupremark` text,
  `status` int(1) NOT NULL DEFAULT '1',
  `startday` int(5) NOT NULL DEFAULT '1',
  `inserttime` int(20) DEFAULT NULL,
  `lastmodifytime` int(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `es_assessgroup`
--

INSERT INTO `es_assessgroup` (`id`, `groupname`, `groupremark`, `status`, `startday`, `inserttime`, `lastmodifytime`) VALUES
(2, 'tewar', '1231', 1, 19, 1470491337, 1470491735),
(3, '测试小组', '发的发撒的发生', 1, 20, 1470500105, 1470500105);

-- --------------------------------------------------------

--
-- 表的结构 `es_assessment`
--

CREATE TABLE IF NOT EXISTS `es_assessment` (
  `id` int(30) unsigned NOT NULL,
  `fromuser` int(30) NOT NULL,
  `targetuser` int(30) NOT NULL,
  `score` int(5) NOT NULL,
  `remark` text,
  `isanony` int(1) NOT NULL DEFAULT '0',
  `month` int(5) DEFAULT NULL,
  `year` int(5) DEFAULT NULL,
  `inserttime` int(15) DEFAULT NULL,
  `lastmodifytime` int(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `es_assessment`
--

INSERT INTO `es_assessment` (`id`, `fromuser`, `targetuser`, `score`, `remark`, `isanony`, `month`, `year`, `inserttime`, `lastmodifytime`) VALUES
(57, 17, 18, 23, '', 1, 8, 2016, 1470757216, 1470757216),
(58, 17, 1, 89, '该同志工作认知负责该同志工作认知负责该同志工作认知负责该同志工作认知负责该同志工作认知负责该同志工作认知负责该同志工作认知负责该同志工作认知负责该同志工作认知负责该同志工作认知负责该同志工作认知负责该同志工作认知负责该同志工作认知负责该同志工作认知负责该同志工作认知负责该同志工作认知负责该同志工作认知负责该同志工作认知负责该同志工作认知负责', 0, 7, 2016, NULL, NULL),
(59, 17, 18, 99, NULL, 0, 6, 2016, NULL, NULL),
(60, 17, 18, 90, NULL, 0, 7, 2016, NULL, NULL),
(61, 17, 18, 87, NULL, 0, 6, 2016, NULL, NULL),
(62, 17, 18, 34, NULL, 0, 5, 2016, NULL, NULL),
(63, 17, 18, 33, NULL, 0, 4, 2016, NULL, NULL),
(64, 17, 18, 23, NULL, 0, 3, 2016, NULL, NULL),
(65, 17, 18, 45, NULL, 0, 2, 2016, NULL, NULL),
(66, 17, 1, 100, NULL, 0, 1, 2016, NULL, NULL),
(67, 17, 1, 1, NULL, 0, 12, 2015, NULL, NULL),
(69, 17, 18, 100, '该同志很认真', 1, 8, 2016, 1470839772, 1470839772),
(70, 17, 1, 89, '', 1, 8, 2016, 1471618592, 1471618592),
(71, 19, 17, 11, '11', 0, 8, 2016, 1471875027, 1471875027),
(72, 19, 18, 22, '22', 1, 8, 2016, 1471875066, 1471875066),
(75, 19, 1, 100, '', 0, 8, 2016, 1471962138, 1471962138);

-- --------------------------------------------------------

--
-- 表的结构 `es_dept`
--

CREATE TABLE IF NOT EXISTS `es_dept` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `remark` varchar(500) DEFAULT NULL,
  `inserttime` int(15) DEFAULT NULL,
  `lastmodifytime` int(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `es_dept`
--

INSERT INTO `es_dept` (`id`, `name`, `remark`, `inserttime`, `lastmodifytime`) VALUES
(2, '部门232432', '部门2', 1470127827, 1470127827),
(3, '部门3', '', 1470128381, 1470128381),
(4, '部门4', '部门', 1470128398, 1470128398);

-- --------------------------------------------------------

--
-- 表的结构 `es_fields`
--

CREATE TABLE IF NOT EXISTS `es_fields` (
  `id` int(5) NOT NULL,
  `field` varchar(30) DEFAULT NULL,
  `content` varchar(50) DEFAULT NULL,
  `additionalinfo` text,
  `issystem` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `es_fields`
--

INSERT INTO `es_fields` (`id`, `field`, `content`, `additionalinfo`, `issystem`) VALUES
(1, 'title', '亨时达内部评价系统', NULL, 0),
(2, 'copyright', '<p>Brian</p>', NULL, 0),
(5, 'announcement', NULL, NULL, 0),
(6, 'description', NULL, NULL, 0),
(7, 'ad', 'ad3.jpg', 'fsda', 0),
(8, 'ad', 'ad2.jpg', 'dsafdasfdsafds', 0),
(9, 'ad', 'ad1.jpg', 'fasdfdsafsaf', 0);

-- --------------------------------------------------------

--
-- 表的结构 `es_group_user`
--

CREATE TABLE IF NOT EXISTS `es_group_user` (
  `id` int(25) NOT NULL,
  `groupid` int(15) NOT NULL,
  `userid` int(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `es_group_user`
--

INSERT INTO `es_group_user` (`id`, `groupid`, `userid`) VALUES
(19, 2, 17),
(20, 2, 18),
(21, 1, 1),
(22, 1, 17),
(28, 3, 1);

-- --------------------------------------------------------

--
-- 表的结构 `es_node`
--

CREATE TABLE IF NOT EXISTS `es_node` (
  `id` smallint(6) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `imgsrc` varchar(500) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `es_node`
--

INSERT INTO `es_node` (`id`, `name`, `title`, `imgsrc`, `status`, `remark`, `sort`, `pid`, `level`) VALUES
(13, 'fdsafds', 'fsad', 'fdsa', 1, '', NULL, 12, 2),
(15, 'Emloyee', '控制器', '', 1, '', NULL, 14, 2),
(16, 'Index', '方法', '', 1, '', NULL, 15, 3),
(17, '测试控制器', '', '', 1, '', NULL, 10, 2),
(18, '测试控制器', '测试', '', 1, '', NULL, 10, 2),
(26, '个人中心', '个人中心', 'personcenter.png', 1, '个人信息页面可以方便的对个人信息进行查看编辑', NULL, 0, 1),
(25, 'Employee', NULL, '', 1, '', NULL, 24, 2),
(20, 'Index', '更改', '', 1, '', NULL, 19, 2),
(21, 'fae', 'fads', '', 1, '', NULL, 20, 3),
(23, 'titelController', 'titelController', '', 1, '', NULL, 22, 2),
(28, 'Employee', 'Employee', '', 1, '', NULL, 26, 2),
(29, 'index', 'index', '', 1, '', NULL, 28, 3),
(30, '评价中心', '评价中心', 'assessment.png', 1, '对其它同事进行月评价，可匿名打分和评论', NULL, 0, 1),
(31, 'assessment', 'assessment', '', 1, '', NULL, 30, 2),
(32, 'index', 'index', '', 1, '', NULL, 31, 3),
(33, '我的评价历史', '我的评价历史', 'history.png', 1, '查看本人最近6个月的评价历史', NULL, 0, 1),
(34, 'assessmenthistory', 'assessmenthistory', '', 1, '', NULL, 33, 2),
(37, '员工评价历史', '员工评价历史', 'allhostory.png', 1, '可以查看所有员工最近6个月的评价历史', NULL, 0, 1),
(36, 'index', 'index', '', 1, '', NULL, 34, 3),
(38, 'assessmentallhistory', 'assessmentallhistory', '', 1, '', NULL, 37, 2),
(39, 'index', 'index', '', 1, '', NULL, 38, 3),
(40, '员工评价分析', '员工评价分析', 'analysis.png', 1, '可以查看员工评价图表分析', NULL, 0, 1),
(41, 'assessmentanalysis', 'assessmentanalysis', '', 1, '', NULL, 40, 2),
(42, 'index', 'index', '', 1, '', NULL, 41, 3),
(43, '绩效考核', '绩效考核', 'performance.png', 1, '对员工进行绩效考核', NULL, 0, 1),
(44, 'Performance', 'Performance', '', 1, '', NULL, 43, 2),
(45, 'index', 'index', '', 1, '', NULL, 44, 3),
(46, '绩效考核分析', '绩效考核分析', 'pmresult.png', 1, '可以查看所有绩效考核结果', NULL, 0, 1),
(47, 'Performanceresult', 'Performanceresult', '', 1, '', NULL, 46, 2),
(48, 'index', 'index', '', 1, '', NULL, 47, 3);

-- --------------------------------------------------------

--
-- 表的结构 `es_pmform`
--

CREATE TABLE IF NOT EXISTS `es_pmform` (
  `id` int(10) NOT NULL,
  `formname` varchar(50) DEFAULT NULL,
  `formdescription` text,
  `questionarr` text,
  `inserttime` int(15) DEFAULT NULL,
  `lastmodifytime` int(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `es_pmform`
--

INSERT INTO `es_pmform` (`id`, `formname`, `formdescription`, `questionarr`, `inserttime`, `lastmodifytime`) VALUES
(5, '亨时达表单1', '亨时达表单1亨时达表单1亨时达表单1亨时达表单1', '|24|25|26', 1472477016, 1472477016),
(6, '亨时达表单2', '亨时达表单2亨时达表单2亨时达表单2亨时达表单2亨时达表单2亨时达表单2亨时达表单2亨时达表单2亨时达表单2', '|24|26', 1472477042, 1472477042);

-- --------------------------------------------------------

--
-- 表的结构 `es_pmgroup`
--

CREATE TABLE IF NOT EXISTS `es_pmgroup` (
  `id` int(10) NOT NULL,
  `groupname` text,
  `groupdescription` text,
  `leaders` text,
  `indirectleaders` varchar(30) DEFAULT NULL,
  `employees` text,
  `pmformid` int(10) DEFAULT NULL,
  `startday` int(2) NOT NULL DEFAULT '1',
  `status` int(1) NOT NULL DEFAULT '1',
  `inserttime` int(15) DEFAULT NULL,
  `lastmodifytime` int(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `es_pmgroup`
--

INSERT INTO `es_pmgroup` (`id`, `groupname`, `groupdescription`, `leaders`, `indirectleaders`, `employees`, `pmformid`, `startday`, `status`, `inserttime`, `lastmodifytime`) VALUES
(4, '亨时达小组', '亨时达小组亨时达小组亨时达小组亨时达小组亨时达小组亨时达小组亨时达小组', '17|18', '17|18', '1|17|18|19', 5, 1, 1, 1472477182, 1472477182),
(5, '亨时达小组2', '亨时达小组2亨时达小组2亨时达小组2亨时达小组2', '17', '18|19', '1|19', 6, 1, 1, 1472479111, 1472479111),
(6, '亨时达小组3', '123', '17|18|19', '18|19', '17|18', 5, 1, 1, 1472479201, 1472479201);

-- --------------------------------------------------------

--
-- 表的结构 `es_pmquestion`
--

CREATE TABLE IF NOT EXISTS `es_pmquestion` (
  `id` int(11) NOT NULL,
  `questiontext` text,
  `questionlevel` varchar(5) DEFAULT NULL,
  `questionparent` int(11) DEFAULT '0',
  `questiontype` varchar(20) DEFAULT 'number'
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `es_pmresult`
--

CREATE TABLE IF NOT EXISTS `es_pmresult` (
  `id` int(10) NOT NULL,
  `groupid` int(10) NOT NULL,
  `fromuser` int(10) NOT NULL,
  `targetuser` int(10) NOT NULL,
  `year` int(4) NOT NULL,
  `month` int(10) NOT NULL,
  `question` text NOT NULL,
  `score` int(5) NOT NULL,
  `inserttime` int(15) DEFAULT NULL,
  `lastmodifytime` int(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=227 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `es_pmresult`
--

INSERT INTO `es_pmresult` (`id`, `groupid`, `fromuser`, `targetuser`, `year`, `month`, `question`, `score`, `inserttime`, `lastmodifytime`) VALUES
(223, 4, 17, 1, 2016, 8, '请输入您对该员工的绩效考核分数  ', 60, 1473173271, 1473173271),
(224, 4, 17, 17, 2016, 8, '请输入您对该员工的绩效考核分数  ', 60, 1473173277, 1473173277),
(225, 4, 17, 18, 2016, 8, '请输入您对该员工的绩效考核分数  ', 60, 1473173283, 1473173283),
(226, 4, 17, 19, 2016, 8, '请输入您对该员工的绩效考核分数  ', 50, 1473173289, 1473173289);

-- --------------------------------------------------------

--
-- 表的结构 `es_role`
--

CREATE TABLE IF NOT EXISTS `es_role` (
  `id` smallint(6) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `es_role`
--

INSERT INTO `es_role` (`id`, `name`, `pid`, `status`, `remark`) VALUES
(9, 'employee', NULL, 1, '普通员工');

-- --------------------------------------------------------

--
-- 表的结构 `es_role_user`
--

CREATE TABLE IF NOT EXISTS `es_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `es_role_user`
--

INSERT INTO `es_role_user` (`role_id`, `user_id`) VALUES
(1, '4'),
(1, '5'),
(7, '6'),
(1, '7'),
(4, '8'),
(1, '9'),
(4, '10'),
(1, '11'),
(1, '12'),
(5, '13'),
(5, '14'),
(5, '15'),
(0, '16'),
(9, '17'),
(9, '18'),
(9, '19');

-- --------------------------------------------------------

--
-- 表的结构 `es_user`
--

CREATE TABLE IF NOT EXISTS `es_user` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `position` varchar(20) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `showname` varchar(50) DEFAULT NULL,
  `directleader` int(20) DEFAULT NULL,
  `deptid` int(10) DEFAULT NULL,
  `enrolldate` varchar(20) DEFAULT NULL,
  `islock` int(1) NOT NULL DEFAULT '0',
  `logintime` int(15) DEFAULT NULL,
  `loginip` int(50) DEFAULT NULL,
  `inserttime` int(15) DEFAULT NULL,
  `lastmodifytime` int(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `es_user`
--

INSERT INTO `es_user` (`id`, `username`, `phone`, `position`, `password`, `showname`, `directleader`, `deptid`, `enrolldate`, `islock`, `logintime`, `loginip`, `inserttime`, `lastmodifytime`) VALUES
(1, 'admin', '18818203641', '管理员', '21232f297a57a5a743894a0e4a801fc3', '李雪', 1, 4, '2016-08-02', 0, 1473168434, 0, NULL, 1470232996),
(17, 'bhao', '18818203641', '经理', '01e53296160e1c9b7209d83110bdebd4', '郝标', 1, 2, '2016-08-03', 0, 1473169630, 0, 1470132738, 1470411359),
(18, 'xli', '17051038056', '人事', 'fe7297964fffc8b710203e14504e40f8', '李雪', 17, 2, '2016-08-10', 0, 1470231392, 0, 1470231392, 1470231597),
(19, 'test', '18818203641', '经理', '098f6bcd4621d373cade4e832627b4f6', '显示名字', 1, 2, '', 0, 1471961895, 0, 1471701232, 1471701358);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `es_access`
--
ALTER TABLE `es_access`
  ADD KEY `groupId` (`role_id`), ADD KEY `nodeId` (`node_id`);

--
-- Indexes for table `es_assessgroup`
--
ALTER TABLE `es_assessgroup`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `groupname` (`groupname`);

--
-- Indexes for table `es_assessment`
--
ALTER TABLE `es_assessment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `es_dept`
--
ALTER TABLE `es_dept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `es_fields`
--
ALTER TABLE `es_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `es_group_user`
--
ALTER TABLE `es_group_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `es_node`
--
ALTER TABLE `es_node`
  ADD PRIMARY KEY (`id`), ADD KEY `level` (`level`), ADD KEY `pid` (`pid`), ADD KEY `status` (`status`), ADD KEY `name` (`name`);

--
-- Indexes for table `es_pmform`
--
ALTER TABLE `es_pmform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `es_pmgroup`
--
ALTER TABLE `es_pmgroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `es_pmquestion`
--
ALTER TABLE `es_pmquestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `es_pmresult`
--
ALTER TABLE `es_pmresult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `es_role`
--
ALTER TABLE `es_role`
  ADD PRIMARY KEY (`id`), ADD KEY `pid` (`pid`), ADD KEY `status` (`status`);

--
-- Indexes for table `es_role_user`
--
ALTER TABLE `es_role_user`
  ADD KEY `group_id` (`role_id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `es_user`
--
ALTER TABLE `es_user`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `es_assessgroup`
--
ALTER TABLE `es_assessgroup`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `es_assessment`
--
ALTER TABLE `es_assessment`
  MODIFY `id` int(30) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `es_dept`
--
ALTER TABLE `es_dept`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `es_fields`
--
ALTER TABLE `es_fields`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `es_group_user`
--
ALTER TABLE `es_group_user`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `es_node`
--
ALTER TABLE `es_node`
  MODIFY `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `es_pmform`
--
ALTER TABLE `es_pmform`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `es_pmgroup`
--
ALTER TABLE `es_pmgroup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `es_pmquestion`
--
ALTER TABLE `es_pmquestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `es_pmresult`
--
ALTER TABLE `es_pmresult`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=227;
--
-- AUTO_INCREMENT for table `es_role`
--
ALTER TABLE `es_role`
  MODIFY `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `es_user`
--
ALTER TABLE `es_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
