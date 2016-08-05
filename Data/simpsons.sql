-- MySQL dump 10.13  Distrib 5.5.47, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: simpsons
-- ------------------------------------------------------
-- Server version	5.5.47-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `easy_access`
--

DROP TABLE IF EXISTS `easy_access`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `easy_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `easy_access`
--

LOCK TABLES `easy_access` WRITE;
/*!40000 ALTER TABLE `easy_access` DISABLE KEYS */;
/*!40000 ALTER TABLE `easy_access` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `easy_ads`
--

DROP TABLE IF EXISTS `easy_ads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `easy_ads` (
  `ads_id` int(11) NOT NULL AUTO_INCREMENT,
  `ads_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ads_desc` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `pic_url` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `click_url` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  PRIMARY KEY (`ads_id`),
  UNIQUE KEY `ad_key` (`ads_key`),
  KEY `ad_key_2` (`ads_key`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `easy_ads`
--

LOCK TABLES `easy_ads` WRITE;
/*!40000 ALTER TABLE `easy_ads` DISABLE KEYS */;
INSERT INTO `easy_ads` VALUES (1,'HOME_PAGE_AD1','首页广告1','','','',1),(4,'32','123','121','/Uploads/Picture/Ads/1452758776_3628673.png','111',0);
/*!40000 ALTER TABLE `easy_ads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `easy_article`
--

DROP TABLE IF EXISTS `easy_article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `easy_article` (
  `article_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `islock` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `easy_article`
--

LOCK TABLES `easy_article` WRITE;
/*!40000 ALTER TABLE `easy_article` DISABLE KEYS */;
INSERT INTO `easy_article` VALUES (2,62,'啦啦啦','的的 啊啊 打法',1452576517,'阿萨德发送到','内容ad司法所地方<img src=\"./Uploads/Article/day_160112/201601121328183481.JPG\" width=\"600\" alt=\"\" />',0,0,1,0,0,0),(3,63,'图片类型','图片类型',1452873717,'图片类型','<img src=\"./Uploads/Article/day_160117/201601171748248585.jpg\" alt=\"\" />					',0,0,1,0,0,0),(4,62,'fasd','fasd',1453010760,'fads','fasd',0,0,1,0,0,0),(5,62,'dsad','dsds',1453011069,'dfsa','fads',0,0,1,0,0,0),(6,62,'123123','fdsa',1453011407,'fads','',0,0,1,0,0,0),(7,62,'42332','432',1453011555,'432432','',0,0,1,0,0,0),(8,62,'qffdsssdffds','fdsfdsds',1453011615,'fsdfd','sfd',0,0,1,0,0,0),(9,62,'234243','432432',1453011931,'432423','324324',0,0,1,0,0,0),(10,62,'re','rew',1453037500,'rew','',0,0,1,0,0,0),(11,62,'gdsf','gsdf',1453037511,'gdsf','',0,0,1,0,0,0),(12,62,'gsf','gsf',1453037521,'dsff','fg',0,0,1,0,0,0),(13,62,'fdas','fasd',1453626964,'fdas','',0,0,1,0,0,0),(14,62,'8978979','hkjk',1453627721,'yiyyuiy','',0,0,1,0,0,0),(15,62,'fasd','fads',1453630071,'fads','',0,0,1,0,0,0),(16,62,'rwrew','rewrew',1453630087,'rewrew','rew',0,0,1,0,0,0);
/*!40000 ALTER TABLE `easy_article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `easy_category`
--

DROP TABLE IF EXISTS `easy_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `easy_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(15) NOT NULL DEFAULT '',
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  `sort` int(6) NOT NULL DEFAULT '100',
  `modelid` tinyint(1) NOT NULL DEFAULT '0',
  `isshow` tinyint(1) NOT NULL DEFAULT '1',
  `isverify` tinyint(1) NOT NULL DEFAULT '1',
  `ispush` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `easy_category`
--

LOCK TABLES `easy_category` WRITE;
/*!40000 ALTER TABLE `easy_category` DISABLE KEYS */;
INSERT INTO `easy_category` VALUES (62,'tokidoki世界',0,100,0,1,1,0),(63,'分类2',0,100,1,0,1,0);
/*!40000 ALTER TABLE `easy_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `easy_comment`
--

DROP TABLE IF EXISTS `easy_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `easy_comment` (
  `commend_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL,
  `aid` int(10) unsigned NOT NULL,
  `content` text NOT NULL,
  `islock` tinyint(1) unsigned NOT NULL,
  `pubtime` int(11) NOT NULL,
  PRIMARY KEY (`commend_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `easy_comment`
--

LOCK TABLES `easy_comment` WRITE;
/*!40000 ALTER TABLE `easy_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `easy_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `easy_coupon`
--

DROP TABLE IF EXISTS `easy_coupon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `easy_coupon` (
  `couponid` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `couponnumber` varchar(30) NOT NULL,
  `userid` int(10) unsigned DEFAULT NULL,
  `couponvalue` int(8) unsigned DEFAULT NULL,
  `couponcondition` varchar(50) DEFAULT '0',
  `starttime` varchar(11) DEFAULT NULL,
  `endtime` varchar(11) DEFAULT NULL,
  `isused` int(1) unsigned zerofill DEFAULT '0',
  `inserttime` int(11) unsigned DEFAULT NULL,
  `lastmodifytime` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`couponid`),
  UNIQUE KEY `couponnumber` (`couponnumber`)
) ENGINE=InnoDB AUTO_INCREMENT=158 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `easy_coupon`
--

LOCK TABLES `easy_coupon` WRITE;
/*!40000 ALTER TABLE `easy_coupon` DISABLE KEYS */;
INSERT INTO `easy_coupon` VALUES (0000000084,'14583891121200',62,99,'满500可用','2016-03-09','2016-03-23',0,1458389112,1458389112),(0000000085,'14583902666107',62,99,'满500可用','2016-03-09','2016-03-23',0,1458390266,1458390266),(0000000086,'14583904499728',62,99,'满300可用','2016-03-09','2016-03-23',0,1458390449,1458390449),(0000000087,'14583989496827',62,99,'满50可用','2016-03-09','2016-03-23',0,1458398949,1458398949),(0000000088,'14584089502507',62,99,'500','2016-03-09','2016-03-23',0,1458408950,1458408950),(0000000089,'14584095862862',62,99,'500','2016-03-09','2016-03-23',0,1458409586,1458409586),(0000000090,'14584098951820',62,99,'500','2016-03-09','2016-03-23',0,1458409895,1458409895),(0000000091,'14584101497084',62,50,'满300可用','2016-03-09','2016-03-23',0,1458410149,1458410149),(0000000092,'14584102236905',62,50,'满300可用','2016-03-09','2016-03-23',0,1458410223,1458410223),(0000000093,'14584102315358',62,50,'满300可用','2016-03-09','2016-03-23',0,1458410231,1458410231),(0000000094,'14584102881032',62,50,'满300可用','2016-03-09','2016-03-23',0,1458410288,1458410288),(0000000095,'14584102935167',62,50,'满300可用','2016-03-09','2016-03-23',0,1458410293,1458410293),(0000000096,'14584103867951',62,50,'满300可用','2016-03-09','2016-03-23',0,1458410386,1458410386),(0000000097,'14584103922487',62,50,'满300可用','2016-03-09','2016-03-23',0,1458410392,1458410392),(0000000098,'14584105461593',62,50,'满300可用','2016-03-09','2016-03-23',0,1458410546,1458410546),(0000000099,'14584654648585',62,50,'满300可用','2016-03-09','2016-03-23',0,1458465464,1458465464),(0000000100,'14590096886808',65,NULL,NULL,NULL,NULL,0,1459009688,1459009688),(0000000101,'14590101028785',66,NULL,NULL,NULL,NULL,1,1459010102,1461164604),(0000000102,'14590108302409',65,90,'满300可用','2016-03-09','2016-03-31',0,1459010830,1459010830),(0000000103,'14590108427314',66,90,'满300可用','2016-03-09','2016-03-31',0,1459010842,1459010842),(0000000104,'14590475611881',65,90,'满300可用','2016-03-09','2016-03-31',0,1459047561,1459047561),(0000000105,'14590534387874',65,90,'满300可用','2016-03-09','2016-03-31',0,1459053438,1459053438),(0000000107,'14590815257376',68,90,'满300可用','2016-03-09','2016-03-31',0,1459081525,1459081525),(0000000108,'14591271565546',66,90,'满300可用','2016-03-09','2016-03-31',0,1459127156,1459127156),(0000000109,'14591425066464',70,90,'满300可用','2016-03-09','2016-03-31',0,1459142506,1459142506),(0000000110,'14591751273798',71,90,'满300可用','2016-03-09','2016-03-31',0,1459175127,1459175127),(0000000111,'14606425154744',71,90,'满300可用','2016-03-09','2016-03-31',1,1460642515,1461430451),(0000000131,'14609726495165',72,90,'满300可用','2016-03-09','2016-03-31',1,1460972649,1461165348),(0000000132,'14610714464874',72,90,'满300可用','2016-03-09','2016-03-31',1,1461071446,1461165270),(0000000133,'14611201104072',73,90,'满300可用','2016-03-09','2016-03-31',1,1461120110,1461165266),(0000000134,'14611301886971',70,90,'满300可用','2016-03-09','2016-03-31',1,1461130188,1461164344),(0000000135,'14611306024256',76,90,'满300可用','2016-03-09','2016-03-31',1,1461130602,1461164383),(0000000137,'14611492048492',72,90,'满300可用','2016-03-09','2016-03-31',1,1461149204,1461164877),(0000000149,'14613653204482',70,90,'满300可用','2016-03-09','2016-03-31',0,1461365320,1461365320),(0000000154,'14613965719074',72,90,'满300可用','2016-03-09','2016-03-31',0,1461396571,1461396571),(0000000155,'14614119409586',70,90,'满300可用','2016-03-09','2016-03-31',1,1461411940,1461556475),(0000000156,'14614119511697',70,90,'满300可用','2016-03-09','2016-03-31',1,1461411951,1461425282),(0000000157,'14616740092654',72,90,'满300可用','2016-03-09','2016-03-31',0,1461674009,1461674009);
/*!40000 ALTER TABLE `easy_coupon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `easy_coupontype`
--

DROP TABLE IF EXISTS `easy_coupontype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `easy_coupontype` (
  `coupontypeid` int(5) NOT NULL AUTO_INCREMENT,
  `couponvalue` int(8) NOT NULL,
  `couponcondition` varchar(50) DEFAULT NULL,
  `starttime` varchar(11) CHARACTER SET utf16 NOT NULL,
  `endtime` varchar(11) NOT NULL,
  `inserttime` int(11) NOT NULL,
  `lastmodifytime` int(11) NOT NULL,
  `couponkey` varchar(11) NOT NULL,
  PRIMARY KEY (`coupontypeid`),
  UNIQUE KEY `couponkey` (`couponkey`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `easy_coupontype`
--

LOCK TABLES `easy_coupontype` WRITE;
/*!40000 ALTER TABLE `easy_coupontype` DISABLE KEYS */;
INSERT INTO `easy_coupontype` VALUES (6,90,'满300可用','2016-03-09','2016-03-31',1459009625,1459009625,'测试优惠券');
/*!40000 ALTER TABLE `easy_coupontype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `easy_fields`
--

DROP TABLE IF EXISTS `easy_fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `easy_fields` (
  `fields_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `field` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `issystem` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fields_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `easy_fields`
--

LOCK TABLES `easy_fields` WRITE;
/*!40000 ALTER TABLE `easy_fields` DISABLE KEYS */;
INSERT INTO `easy_fields` VALUES (1,'title','The Simpsons',1),(2,'description','辛普森网站',1),(3,'copyright','辛普森',1),(4,'announcement','这是站点公告哦',1),(5,'ad','广告<span style=\"font-size: 13.3333px;\">广告</span><span style=\"font-size: 13.3333px;\">广告</span><span style=\"font-size: 13.3333px;\">广告</span><span style=\"font-size: 13.3333px;\">广告</span><span style=\"font-size: 13.3333px;\">广告</span><span style=\"font-size: 13.3333px;\">广告</span><span style=\"font-size: 13.3333px;\">广告</span><span style=\"font-size: 13.3333px;\">广告</span><span style=\"font-size: 13.3333px;\">广告</span><span style=\"font-size: 13.3333px;\">广告</span><span style=\"font-size: 13.3333px;\">广告</span><span style=\"font-size: 13.3333px;\">广告</span><span style=\"font-size: 13.3333px;\">广告</span><span style=\"font-size: 13.3333px;\">广告</span><span style=\"font-size: 13.3333px;\">广告</span><span style=\"font-size: 13.3333px;\">广告</span><span style=\"font-size: 13.3333px;\">广告</span><span style=\"font-size: 13.3333px;\">广告</span><span style=\"font-size: 13.3333px;\">广告</span><span style=\"font-size: 13.3333px;\">广告</span><span style=\"font-size: 13.3333px;\">广告</span><span style=\"font-size: 13.3333px;\">广告</span><span style=\"font-size: 13.3333px;\">广告</span>',1);
/*!40000 ALTER TABLE `easy_fields` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `easy_friendscoreaudit`
--

DROP TABLE IF EXISTS `easy_friendscoreaudit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `easy_friendscoreaudit` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `owneropenid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `friendopenid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `score` int(11) NOT NULL,
  `inserttime` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `easy_friendscoreaudit`
--

LOCK TABLES `easy_friendscoreaudit` WRITE;
/*!40000 ALTER TABLE `easy_friendscoreaudit` DISABLE KEYS */;
INSERT INTO `easy_friendscoreaudit` VALUES (4,'oO9Rqs27bgqefzQPnb64sxcNSKvY','oO9Rqs3wB38dm7FCGjEYwBmE5oeY',1,1459070618),(5,'oO9Rqs3wB38dm7FCGjEYwBmE5oeY','oO9Rqs27bgqefzQPnb64sxcNSKvY',1,1459072060),(6,'66','oO9Rqs-a5z19KcvlzX-sRkmgfdo4',1,1459076901),(7,'oO9Rqs-a5z19KcvlzX-sRkmgfdo4','oO9Rqs-a5z19KcvlzX-sRkmgfdo4',1,1459076931),(8,'oO9Rqs6E3bY7Pn7v_33XYA_xtWCw','oO9Rqs6E3bY7Pn7v_33XYA_xtWCw',1,1459143369),(9,'oO9Rqs-a5z19KcvlzX-sRkmgfdo4','oO9Rqs-a5z19KcvlzX-sRkmgfdo4',1,1459226905),(10,'oO9Rqs5HMDjkt5rfeHavYeqgvfck','oO9Rqs3wB38dm7FCGjEYwBmE5oeY',1,1459265938),(11,'oO9Rqs5HMDjkt5rfeHavYeqgvfck','oO9Rqs-a5z19KcvlzX-sRkmgfdo4',1,1459266053),(12,'oO9Rqs-a5z19KcvlzX-sRkmgfdo4','oO9Rqs3wB38dm7FCGjEYwBmE5oeY',1,1459266055),(13,'oO9Rqs6E3bY7Pn7v_33XYA_xtWCw','oO9Rqs6E3bY7Pn7v_33XYA_xtWCw',1,1461130558),(14,'oO9Rqs6E3bY7Pn7v_33XYA_xtWCw','oO9Rqs4R7a2WqCCCtHxhl0y8It1g',1,1461130767);
/*!40000 ALTER TABLE `easy_friendscoreaudit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `easy_link`
--

DROP TABLE IF EXISTS `easy_link`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `easy_link` (
  `link_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `isverify` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`link_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `easy_link`
--

LOCK TABLES `easy_link` WRITE;
/*!40000 ALTER TABLE `easy_link` DISABLE KEYS */;
INSERT INTO `easy_link` VALUES (1,'Simpson','http://www.baidu.com',0);
/*!40000 ALTER TABLE `easy_link` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `easy_lotteryaudit`
--

DROP TABLE IF EXISTS `easy_lotteryaudit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `easy_lotteryaudit` (
  `lotteryauditid` int(10) NOT NULL AUTO_INCREMENT,
  `userid` int(10) NOT NULL,
  `lotterytype` varchar(20) DEFAULT '无',
  `lotterytypekey` varchar(20) DEFAULT '无',
  `lotteryvalue` int(10) DEFAULT '0',
  `lotterycondition` varchar(11) DEFAULT '无',
  `state` int(1) DEFAULT '0',
  `listid` varchar(50) DEFAULT '无',
  `returndata` text,
  `inserttime` int(11) NOT NULL,
  `lastmodifytime` int(11) NOT NULL,
  PRIMARY KEY (`lotteryauditid`)
) ENGINE=InnoDB AUTO_INCREMENT=880 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `easy_lotteryaudit`
--

LOCK TABLES `easy_lotteryaudit` WRITE;
/*!40000 ALTER TABLE `easy_lotteryaudit` DISABLE KEYS */;
INSERT INTO `easy_lotteryaudit` VALUES (711,71,'scoretype','抽奖积分',17,'无',1,'无','无',1461156922,1461156922),(712,71,'scoretype','抽奖积分',17,'无',1,'无','无',1461157284,1461157284),(713,71,'scoretype','抽奖积分',15,'无',1,'无','无',1461157296,1461157296),(714,71,NULL,NULL,0,'无',0,'无',NULL,1461157304,1461157304),(715,71,'coupontype','测试优惠券',90,'满300可用',1,'无','无',1461158260,1461158260),(716,71,'coupontype','测试优惠券',90,'满300可用',1,'无','无',1461158268,1461158268),(717,71,'coupontype','测试优惠券',90,'满300可用',1,'无','无',1461158277,1461158277),(718,71,'coupontype','测试优惠券',90,'满300可用',1,'无','无',1461158434,1461158434),(719,71,NULL,NULL,0,'无',0,'无',NULL,1461158443,1461158443),(720,71,'scoretype','抽奖积分',14,'无',1,'无','无',1461158512,1461158512),(721,71,NULL,NULL,0,'无',0,'无',NULL,1461158520,1461158520),(722,71,'scoretype','抽奖积分',19,'无',1,'无','无',1461158522,1461158522),(723,71,'scoretype','抽奖积分',11,'无',1,'无','无',1461158537,1461158537),(724,71,'coupontype','测试优惠券',90,'满300可用',1,'无','无',1461158545,1461158545),(725,71,'scoretype','抽奖积分',13,'无',1,'无','无',1461158553,1461158553),(726,71,'scoretype','抽奖积分',11,'无',1,'无','无',1461158561,1461158561),(727,71,'coupontype','测试优惠券',90,'满300可用',1,'无','无',1461158572,1461158572),(728,71,'scoretype','抽奖积分',14,'无',1,'无','无',1461158592,1461158592),(729,71,'scoretype','抽奖积分',18,'无',1,'无','无',1461158600,1461158600),(730,71,'scoretype','抽奖积分',10,'无',1,'无','无',1461158682,1461158682),(731,71,'scoretype','抽奖积分',17,'无',1,'无','无',1461158690,1461158690),(732,71,'scoretype','抽奖积分',18,'无',1,'无','无',1461159076,1461159076),(733,71,'scoretype','抽奖积分',15,'无',1,'无','无',1461159091,1461159091),(734,71,'scoretype','抽奖积分',13,'无',1,'无','无',1461159099,1461159099),(735,71,'scoretype','抽奖积分',18,'无',1,'无','无',1461159108,1461159108),(736,71,'scoretype','抽奖积分',20,'无',1,'无','无',1461159120,1461159120),(737,71,'scoretype','抽奖积分',18,'无',1,'无','无',1461159291,1461159291),(738,71,'scoretype','抽奖积分',15,'无',1,'无','无',1461159631,1461159631),(739,71,'scoretype','抽奖积分',16,'无',1,'无','无',1461159685,1461159685),(740,71,'scoretype','抽奖积分',15,'无',1,'无','无',1461159735,1461159735),(741,71,'scoretype','抽奖积分',15,'无',1,'无','无',1461159751,1461159751),(742,71,'scoretype','抽奖积分',10,'无',1,'无','无',1461160004,1461160004),(743,71,'scoretype','抽奖积分',15,'无',1,'无','无',1461160127,1461160127),(744,71,'scoretype','抽奖积分',10,'无',1,'无','无',1461160136,1461160136),(745,71,'scoretype','抽奖积分',19,'无',1,'无','无',1461160153,1461160153),(746,71,'scoretype','抽奖积分',15,'无',1,'无','无',1461160186,1461160186),(747,71,'scoretype','抽奖积分',13,'无',1,'无','无',1461160196,1461160196),(748,71,'scoretype','抽奖积分',16,'无',1,'无','无',1461160208,1461160208),(749,71,'scoretype','抽奖积分',15,'无',1,'无','无',1461160273,1461160273),(750,71,'scoretype','抽奖积分',18,'无',1,'无','无',1461160281,1461160281),(751,71,'scoretype','抽奖积分',20,'无',1,'无','无',1461160290,1461160290),(752,67,'scoretype','抽奖积分',19,'无',1,'无','无',1461165191,1461165191),(753,72,'scoretype','抽奖积分',20,'无',1,'无','无',1461231537,1461231537),(794,70,'scoretype','抽奖积分',20,'无',1,'无','无',1461425594,1461425594),(795,70,'scoretype','抽奖积分',13,'无',1,'无','无',1461426359,1461426359),(796,70,'scoretype','抽奖积分',11,'无',1,'无','无',1461426367,1461426367),(797,70,'redpacket','辛普森红包',1,'无',1,'0010197906201604230700771198','{\"return_code\":\"SUCCESS\",\"return_msg\":\"\\u53d1\\u653e\\u6210\\u529f\",\"result_code\":\"SUCCESS\",\"mch_billno\":\"1225312702201604232346451\",\"mch_id\":\"1239855502\",\"wxappid\":\"wxe34ce79030a5dfbe\",\"re_openid\":\"oO9Rqs6E3bY7Pn7v_33XYA_xtWCw\",\"total_amount\":\"100\",\"send_listid\":\"0010197906201604230700771198\",\"send_time\":\"20160423234647\"}',1461426407,1461426407),(798,70,'redpacket','辛普森红包',1,'无',1,NULL,'{\"return_code\":\"SUCCESS\",\"return_msg\":\"\\u8d85\\u8fc7\\u9891\\u7387\\u9650\\u5236,\\u8bf7\\u7a0d\\u540e\\u518d\\u8bd5\",\"result_code\":\"FAIL\",\"err_code\":\"FREQ_LIMIT\",\"err_code_des\":\"\\u8d85\\u8fc7\\u9891\\u7387\\u9650\\u5236,\\u8bf7\\u7a0d\\u540e\\u518d\\u8bd5\",\"mch_billno\":\"1225312702201604232346481\",\"mch_id\":\"1239855502\",\"wxappid\":\"wxe34ce79030a5dfbe\",\"re_openid\":\"oO9Rqs6E3bY7Pn7v_33XYA_xtWCw\",\"total_amount\":\"100\"}',1461426408,1461426408),(799,70,'redpacket','辛普森红包',1,'无',1,'0010197906201604230700800134','{\"return_code\":\"SUCCESS\",\"return_msg\":\"\\u53d1\\u653e\\u6210\\u529f\",\"result_code\":\"SUCCESS\",\"mch_billno\":\"1225312702201604232349171\",\"mch_id\":\"1239855502\",\"wxappid\":\"wxe34ce79030a5dfbe\",\"re_openid\":\"oO9Rqs6E3bY7Pn7v_33XYA_xtWCw\",\"total_amount\":\"100\",\"send_listid\":\"0010197906201604230700800134\",\"send_time\":\"20160423234917\"}',1461426558,1461426558),(800,67,'redpacket','辛普森红包',1,'无',1,'0010197906201604240700816211','{\"return_code\":\"SUCCESS\",\"return_msg\":\"\\u53d1\\u653e\\u6210\\u529f\",\"result_code\":\"SUCCESS\",\"mch_billno\":\"1225312702201604240059151\",\"mch_id\":\"1239855502\",\"wxappid\":\"wxe34ce79030a5dfbe\",\"re_openid\":\"oO9Rqs5HMDjkt5rfeHavYeqgvfck\",\"total_amount\":\"100\",\"send_listid\":\"0010197906201604240700816211\",\"send_time\":\"20160424005915\"}',1461430756,1461430756),(801,72,'redpacket','辛普森红包',1,'无',1,'0010197906201604240701885031','{\"return_code\":\"SUCCESS\",\"return_msg\":\"\\u53d1\\u653e\\u6210\\u529f\",\"result_code\":\"SUCCESS\",\"mch_billno\":\"1225312702201604241320491\",\"mch_id\":\"1239855502\",\"wxappid\":\"wxe34ce79030a5dfbe\",\"re_openid\":\"oO9Rqs4R7a2WqCCCtHxhl0y8It1g\",\"total_amount\":\"100\",\"send_listid\":\"0010197906201604240701885031\",\"send_time\":\"20160424132051\"}',1461475252,1461475252),(802,72,'redpacket','辛普森红包',1,'无',1,'0010197906201604240701815544','{\"return_code\":\"SUCCESS\",\"return_msg\":\"\\u53d1\\u653e\\u6210\\u529f\",\"result_code\":\"SUCCESS\",\"mch_billno\":\"1225312702201604241321451\",\"mch_id\":\"1239855502\",\"wxappid\":\"wxe34ce79030a5dfbe\",\"re_openid\":\"oO9Rqs4R7a2WqCCCtHxhl0y8It1g\",\"total_amount\":\"100\",\"send_listid\":\"0010197906201604240701815544\",\"send_time\":\"20160424132145\"}',1461475306,1461475306),(803,72,'redpacket','辛普森红包',1,'无',1,'0010197906201604240701647754','{\"return_code\":\"SUCCESS\",\"return_msg\":\"\\u53d1\\u653e\\u6210\\u529f\",\"result_code\":\"SUCCESS\",\"mch_billno\":\"1225312702201604241322061\",\"mch_id\":\"1239855502\",\"wxappid\":\"wxe34ce79030a5dfbe\",\"re_openid\":\"oO9Rqs4R7a2WqCCCtHxhl0y8It1g\",\"total_amount\":\"100\",\"send_listid\":\"0010197906201604240701647754\",\"send_time\":\"20160424132206\"}',1461475327,1461475327),(804,72,'redpacket','辛普森红包',1,'无',1,'0010197906201604240701742911','{\"return_code\":\"SUCCESS\",\"return_msg\":\"\\u53d1\\u653e\\u6210\\u529f\",\"result_code\":\"SUCCESS\",\"mch_billno\":\"1225312702201604241322171\",\"mch_id\":\"1239855502\",\"wxappid\":\"wxe34ce79030a5dfbe\",\"re_openid\":\"oO9Rqs4R7a2WqCCCtHxhl0y8It1g\",\"total_amount\":\"100\",\"send_listid\":\"0010197906201604240701742911\",\"send_time\":\"20160424132217\"}',1461475338,1461475338),(805,72,'redpacket','辛普森红包',1,'无',1,'0010197906201604240701732516','{\"return_code\":\"SUCCESS\",\"return_msg\":\"\\u53d1\\u653e\\u6210\\u529f\",\"result_code\":\"SUCCESS\",\"mch_billno\":\"1225312702201604241322261\",\"mch_id\":\"1239855502\",\"wxappid\":\"wxe34ce79030a5dfbe\",\"re_openid\":\"oO9Rqs4R7a2WqCCCtHxhl0y8It1g\",\"total_amount\":\"100\",\"send_listid\":\"0010197906201604240701732516\",\"send_time\":\"20160424132227\"}',1461475347,1461475347),(806,72,'redpacket','辛普森红包',1,'无',1,'0010197906201604240701793673','{\"return_code\":\"SUCCESS\",\"return_msg\":\"\\u53d1\\u653e\\u6210\\u529f\",\"result_code\":\"SUCCESS\",\"mch_billno\":\"1225312702201604241322521\",\"mch_id\":\"1239855502\",\"wxappid\":\"wxe34ce79030a5dfbe\",\"re_openid\":\"oO9Rqs4R7a2WqCCCtHxhl0y8It1g\",\"total_amount\":\"100\",\"send_listid\":\"0010197906201604240701793673\",\"send_time\":\"20160424132252\"}',1461475373,1461475373),(807,72,'redpacket','辛普森红包',1,'无',1,'0010197906201604240701681839','{\"return_code\":\"SUCCESS\",\"return_msg\":\"\\u53d1\\u653e\\u6210\\u529f\",\"result_code\":\"SUCCESS\",\"mch_billno\":\"1225312702201604241323021\",\"mch_id\":\"1239855502\",\"wxappid\":\"wxe34ce79030a5dfbe\",\"re_openid\":\"oO9Rqs4R7a2WqCCCtHxhl0y8It1g\",\"total_amount\":\"100\",\"send_listid\":\"0010197906201604240701681839\",\"send_time\":\"20160424132302\"}',1461475383,1461475383),(808,72,'redpacket','辛普森红包',1,'无',1,'0010197906201604240701822012','{\"return_code\":\"SUCCESS\",\"return_msg\":\"\\u53d1\\u653e\\u6210\\u529f\",\"result_code\":\"SUCCESS\",\"mch_billno\":\"1225312702201604241324391\",\"mch_id\":\"1239855502\",\"wxappid\":\"wxe34ce79030a5dfbe\",\"re_openid\":\"oO9Rqs4R7a2WqCCCtHxhl0y8It1g\",\"total_amount\":\"100\",\"send_listid\":\"0010197906201604240701822012\",\"send_time\":\"20160424132439\"}',1461475479,1461475479),(809,72,'redpacket','辛普森红包',1,'无',1,'0010197906201604240701751715','{\"return_code\":\"SUCCESS\",\"return_msg\":\"\\u53d1\\u653e\\u6210\\u529f\",\"result_code\":\"SUCCESS\",\"mch_billno\":\"1225312702201604241325061\",\"mch_id\":\"1239855502\",\"wxappid\":\"wxe34ce79030a5dfbe\",\"re_openid\":\"oO9Rqs4R7a2WqCCCtHxhl0y8It1g\",\"total_amount\":\"100\",\"send_listid\":\"0010197906201604240701751715\",\"send_time\":\"20160424132506\"}',1461475507,1461475507),(810,77,'redpacket','辛普森红包',1,'无',1,'0010197906201604240701844689','{\"return_code\":\"SUCCESS\",\"return_msg\":\"\\u53d1\\u653e\\u6210\\u529f\",\"result_code\":\"SUCCESS\",\"mch_billno\":\"1225312702201604241341291\",\"mch_id\":\"1239855502\",\"wxappid\":\"wxe34ce79030a5dfbe\",\"re_openid\":\"oO9Rqs5Wh1-4GDAfJEfqIII2Om5Y\",\"total_amount\":\"100\",\"send_listid\":\"0010197906201604240701844689\",\"send_time\":\"20160424134129\"}',1461476490,1461476490),(811,67,'scoretype','抽奖积分',19,'无',1,'无','无',1461489972,1461489972),(812,67,'scoretype','抽奖积分',11,'无',1,'无','无',1461489985,1461489985),(813,67,'scoretype','抽奖积分',16,'无',1,'无','无',1461490113,1461490113),(814,72,'scoretype','抽奖积分',15,'无',1,'无','无',1461502805,1461502805),(815,72,'scoretype','抽奖积分',19,'无',1,'无','无',1461502816,1461502816),(816,72,'scoretype','抽奖积分',15,'无',1,'无','无',1461502827,1461502827),(817,72,'scoretype','抽奖积分',13,'无',1,'无','无',1461502838,1461502838),(818,66,'scoretype','抽奖积分',13,'无',1,'无','无',1461504186,1461504186),(819,79,'scoretype','抽奖积分',16,'无',1,'无','无',1461554985,1461554985),(820,80,'scoretype','抽奖积分',16,'无',1,'无','无',1461555022,1461555022),(821,81,'scoretype','抽奖积分',12,'无',1,'无','无',1461555027,1461555027),(822,79,'scoretype','抽奖积分',16,'无',1,'无','无',1461555028,1461555028),(823,80,'scoretype','抽奖积分',16,'无',1,'无','无',1461555035,1461555035),(824,81,'scoretype','抽奖积分',15,'无',1,'无','无',1461555053,1461555053),(825,80,'scoretype','抽奖积分',16,'无',1,'无','无',1461555523,1461555523),(826,72,'scoretype','抽奖积分',11,'无',1,'无','无',1461555758,1461555758),(827,72,NULL,NULL,0,'无',0,'无',NULL,1461557052,1461557052),(828,80,NULL,NULL,0,'无',0,'无',NULL,1461569584,1461569584),(829,80,'scoretype','抽奖积分',17,'无',1,'无','无',1461572255,1461572255),(830,80,'scoretype','抽奖积分',16,'无',1,'无','无',1461574767,1461574767),(831,80,NULL,NULL,0,'无',0,'无',NULL,1461582910,1461582910),(832,80,NULL,NULL,0,'无',0,'无',NULL,1461583035,1461583035),(833,70,'scoretype','抽奖积分',12,'无',1,'无','无',1461661447,1461661447),(834,70,NULL,NULL,0,'无',0,'无',NULL,1461661457,1461661457),(835,70,NULL,NULL,0,'无',0,'无',NULL,1461661470,1461661470),(836,70,NULL,NULL,0,'无',0,'无',NULL,1461661481,1461661481),(837,70,NULL,NULL,0,'无',0,'无',NULL,1461661488,1461661488),(838,72,NULL,NULL,0,'无',0,'无',NULL,1461673898,1461673898),(839,72,NULL,NULL,0,'无',0,'无',NULL,1461673983,1461673983),(840,72,NULL,NULL,0,'无',0,'无',NULL,1461673991,1461673991),(841,72,'scoretype','抽奖积分',12,'无',1,'无','无',1461673998,1461673998),(842,72,'coupontype','测试优惠券',90,'满300可用',1,'无','无',1461674009,1461674009),(843,72,NULL,NULL,0,'无',0,'无',NULL,1461674084,1461674084),(844,67,NULL,NULL,0,'无',0,'无',NULL,1461684167,1461684167),(845,67,NULL,NULL,0,'无',0,'无',NULL,1461684185,1461684185),(846,67,NULL,NULL,0,'无',0,'无',NULL,1461684277,1461684277),(847,82,NULL,NULL,0,'无',0,'无',NULL,1461741540,1461741540),(848,67,NULL,NULL,0,'无',0,'无',NULL,1461750307,1461750307),(849,67,NULL,NULL,0,'无',0,'无',NULL,1461750327,1461750327),(850,67,NULL,NULL,0,'无',0,'无',NULL,1461750343,1461750343),(851,67,NULL,NULL,0,'无',0,'无',NULL,1461750357,1461750357),(852,72,NULL,NULL,0,'无',0,'无',NULL,1461811316,1461811316),(853,72,NULL,NULL,0,'无',0,'无',NULL,1461811326,1461811326),(854,83,NULL,NULL,0,'无',0,'无',NULL,1461832617,1461832617),(855,72,NULL,NULL,0,'无',0,'无',NULL,1461834846,1461834846),(856,82,NULL,NULL,0,'无',0,'无',NULL,1461837285,1461837285),(857,82,NULL,NULL,0,'无',0,'无',NULL,1461837601,1461837601),(858,82,NULL,NULL,0,'无',0,'无',NULL,1461837618,1461837618),(859,80,NULL,NULL,0,'无',0,'无',NULL,1461840085,1461840085),(860,80,NULL,NULL,0,'无',0,'无',NULL,1461840086,1461840086),(861,71,NULL,NULL,0,'无',0,'无',NULL,1461847751,1461847751),(862,70,NULL,NULL,0,'无',0,'无',NULL,1461861560,1461861560),(863,66,NULL,NULL,0,'无',0,'无',NULL,1461870361,1461870361),(864,70,NULL,NULL,0,'无',0,'无',NULL,1461890277,1461890277),(865,72,NULL,NULL,0,'无',0,'无',NULL,1461891720,1461891720),(866,72,NULL,NULL,0,'无',0,'无',NULL,1461891731,1461891731),(867,80,NULL,NULL,0,'无',0,'无',NULL,1461895177,1461895177),(868,72,NULL,NULL,0,'无',0,'无',NULL,1461912531,1461912531),(869,86,NULL,NULL,0,'无',0,'无',NULL,1461915668,1461915668),(870,85,NULL,NULL,0,'无',0,'无',NULL,1461916153,1461916153),(871,83,NULL,NULL,0,'无',0,'无',NULL,1461917989,1461917989),(872,83,NULL,NULL,0,'无',0,'无',NULL,1461918175,1461918175),(873,83,NULL,NULL,0,'无',0,'无',NULL,1461918186,1461918186),(874,67,NULL,NULL,0,'无',0,'无',NULL,1461925304,1461925304),(875,67,NULL,NULL,0,'无',0,'无',NULL,1461925656,1461925656),(876,72,NULL,NULL,0,'无',0,'无',NULL,1461929939,1461929939),(877,72,NULL,NULL,0,'无',0,'无',NULL,1461929950,1461929950),(878,72,NULL,NULL,0,'无',0,'无',NULL,1461930497,1461930497),(879,73,NULL,NULL,0,'无',0,'无',NULL,1461940750,1461940750);
/*!40000 ALTER TABLE `easy_lotteryaudit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `easy_lotterytype`
--

DROP TABLE IF EXISTS `easy_lotterytype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `easy_lotterytype` (
  `lotterytypeid` int(5) NOT NULL AUTO_INCREMENT,
  `lotterytype` varchar(11) NOT NULL,
  `lotterytypekey` varchar(20) NOT NULL,
  `lotteryratio` int(3) NOT NULL DEFAULT '0',
  `inserttime` int(11) NOT NULL,
  `lastmodifytime` int(11) NOT NULL,
  PRIMARY KEY (`lotterytypeid`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `easy_lotterytype`
--

LOCK TABLES `easy_lotterytype` WRITE;
/*!40000 ALTER TABLE `easy_lotterytype` DISABLE KEYS */;
INSERT INTO `easy_lotterytype` VALUES (35,'coupontype','测试优惠券',0,1459174666,1461424919),(36,'redpacket','辛普森红包',0,1459174682,1461489939),(37,'scoretype','抽奖积分',0,1459174699,1461684151);
/*!40000 ALTER TABLE `easy_lotterytype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `easy_member_user`
--

DROP TABLE IF EXISTS `easy_member_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `easy_member_user` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`userid`),
  UNIQUE KEY `openid` (`openid`)
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `easy_member_user`
--

LOCK TABLES `easy_member_user` WRITE;
/*!40000 ALTER TABLE `easy_member_user` DISABLE KEYS */;
INSERT INTO `easy_member_user` VALUES (67,'13901958937','2014-04-27','我在上海',136,NULL,'oO9Rqs5HMDjkt5rfeHavYeqgvfck','http://wx.qlogo.cn/mmopen/BWUXkdwvI242jDDMZGibv0VeEzX3O4jkccliakEEPZhZiav3T98QKBISKZmwib9OW7MWvM0Q88','哈哈要啊',1459003115,1461940506,0),(66,'15618812539','1980-03-29','上海市浦东新区',5020,NULL,'oO9Rqs-a5z19KcvlzX-sRkmgfdo4','http://wx.qlogo.cn/mmopen/ajNVdqHZLLA75bdnD3bFRHDSTGlBBVLOgm1IL5eNJ6ooV2ib7y4lRIhsppLwWNpyUU57Czlzlo','布莱克韩',1459000231,1461890758,0),(68,'18616200097',NULL,NULL,NULL,NULL,'oO9Rqs8SWrUQpAtJKo-IUvRiMvog','http://wx.qlogo.cn/mmopen/PiajxSqBRaEKH6lAicoia3U89Z6RwpAwsibEyLjgtL5JF5zeialhGeg46RBgMHnLrrCDlHcic0','白糖',1459005412,1459081483,0),(72,'18801936654','2018-04-19','上海大学宝山校区图书馆管理员',10079,NULL,'oO9Rqs4R7a2WqCCCtHxhl0y8It1g','http://wx.qlogo.cn/mmopen/PiajxSqBRaEIN801LEFPR0DyyTCiah5dX0jEaGwGG26JqudrxMA5RfiauAo7QAstdh1EqnMyRl','GG',1459831442,1461930466,0),(71,'18818203641','','',1679,NULL,'oO9Rqs3wB38dm7FCGjEYwBmE5oeY','http://wx.qlogo.cn/mmopen/ajNVdqHZLLD1CoqaOVO33GicvV7oyFaJ5FF0lCJZv2Zeq2ia9ibm9nbWPwhoOYjjoY10aicV8l','Brian',1459173743,1461930377,0),(73,'123123123','','',10000,NULL,'oO9Rqs6G0VGyp_W5S66S45A_bDC4','http://wx.qlogo.cn/mmopen/ajNVdqHZLLCW2dR4g12Zm0upNibGp1ffnAJnOQUwFPju6Ekjc31pvmtF5dRZxNTBnfWMRULNKT','隔离区的阳光',1459831830,1461940674,0),(70,'18621542411','1997-04-23','哈哈哈哈哈',96,NULL,'oO9Rqs6E3bY7Pn7v_33XYA_xtWCw','http://wx.qlogo.cn/mmopen/ajNVdqHZLLCsiaOwsTiceSJRW9iaCx7K1Q6gCUeJC5ryRibacwZ23Cz371lnWBMeDicmiauOpH','Ma4r',1459142258,1461894409,0),(74,'','','',100,NULL,'oO9Rqs_quciysI_RryhG5_6PVxrw','','going高',1460175752,1461148915,0),(75,'18701602397',NULL,NULL,115,NULL,'oO9Rqs47Lvy4QLFJhSuHlE2oBZwk','http://wx.qlogo.cn/mmopen/ajNVdqHZLLDibwQFUvZTb58ulTFIIibALVjiaqqjKMr4gTeg1PUIRJdwMic7sbiaHAljgVAtic','林志搏',1460275751,1460275785,0),(76,'17010050896',NULL,NULL,100,NULL,'oO9RqszwsNV6jZual8KYhRdmqGo4','http://wx.qlogo.cn/mmopen/PiajxSqBRaEJCHQWPK8jcziaS3iboQzmOrw7iaHKQo7KGz8WiaGpUUpgxZGohWqIkb2PeQXUzy','BB-8',1461130481,1461147433,0),(77,'18217717013',NULL,NULL,100,NULL,'oO9Rqs5Wh1-4GDAfJEfqIII2Om5Y','http://wx.qlogo.cn/mmopen/PiajxSqBRaEIWmV7c3mpW530MFK8sMyAzlZDezoCXXfG7j7040MmVzvxfSx7ZYKaGfhQWN12pa','园园',1461476312,1461476353,0),(78,NULL,NULL,NULL,NULL,NULL,'oO9Rqs27bgqefzQPnb64sxcNSKvY','http://wx.qlogo.cn/mmopen/PiajxSqBRaEKaTNXtwjNqkmQMN8aJboXQlO67G9wCcRIBfR269H5S44DCuLH1aSXibdW8GxgIR','RitaLi',1461485411,1461485411,0),(79,'18616023817','1981-08-17',NULL,132,NULL,'oO9Rqs8qIA_1Kx_vmA4XhyHceneU','http://wx.qlogo.cn/mmopen/SmuQ6jPdLbdM5pa2aZWA43rAwSNALVOQ5xdPbxKShMN6JsGSBVtqRMDDc5aXnibKhoaUttic2Q','Kivan乔',1461554862,1461554928,0),(80,'18621593259','1988-02-29',NULL,181,NULL,'oO9RqsyrObOXKPcztnFOmdXfWUbg','http://wx.qlogo.cn/mmopen/ajNVdqHZLLDMHPtxcO3fa5unsaoqagQ3yPOIXaxtyZjX2SnFkgg6crO7CQlzLgM0cZaMlf3Pj7','尤',1461554863,1461915368,0),(81,'13818812233',NULL,NULL,77,NULL,'oO9Rqs1FkRvmKgGAO8rbUgs9GeZ4','http://wx.qlogo.cn/mmopen/PiajxSqBRaELWNZpoRWQ9uhwm5CnIh9ic2d4DkkNOP8IITSbfeia61vYU5Ar28cblml04To1hD','jackeyqiu',1461554873,1461554914,0),(82,'18616620077','1981-10-24',NULL,100,NULL,'oO9Rqs-tSMjUFprxp1nH3TTW-Dh0','http://wx.qlogo.cn/mmopen/I1OPdTuWhE8OG72cN1rysWSdCXFVjxpwqOMUE2pktJdChZPYr1HtdpibIn8yofA3dvGHnU6EeO','于莹',1461554878,1461837238,0),(83,'13564485555','1984-01-19','上海市',100,NULL,'oO9Rqs-GuzxPSLBj5QqMytbpaRGM','http://wx.qlogo.cn/mmopen/I1OPdTuWhE9D74YzyH0PNzKt61TsPPMqDAFAHSVjN7EJFzCxf8AE3iaZ8FibQhXta94LHL4TQo','寻少华',1461655438,1461918108,0),(84,'18669711056',NULL,NULL,100,NULL,'oO9Rqsxf9J-iHtTV6awhIYT38hts','http://wx.qlogo.cn/mmopen/I1OPdTuWhE8OG72cN1ryscoa8PZcHZUj1UeEWweYVqcQSqF2MKbw8WOYW014k96uicXC66JvBg','阿璨Tsan',1461676877,1461676948,0),(85,'13611927338','1978-08-04','上海黄埔区中山南路398弄2号楼3102',100,NULL,'oO9Rqs8pD2btxQQBha8gi_34Mv6g','http://wx.qlogo.cn/mmopen/I1OPdTuWhE8OG72cN1rysaibMC18gTialUbT7R6EMYFmkDrhgB28ru2peYq6IDsIyHzuNg6gMj','B ren don',1461915411,1461915669,0),(86,'18616692133',NULL,NULL,100,NULL,'oO9Rqsxh9mkeCRv0hKilSjFhDpcE','http://wx.qlogo.cn/mmopen/BWUXkdwvI242jDDMZGibv0bxFZW176cTuvWEcW9YyhppXNPbaT7a6IBplRQnAX8b2D3fcmqSQj','',1461915571,1461915620,0);
/*!40000 ALTER TABLE `easy_member_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `easy_news`
--

DROP TABLE IF EXISTS `easy_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `easy_news` (
  `newsid` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `newstitle` varchar(200) DEFAULT NULL,
  `newscontent` text,
  `inserttime` int(11) unsigned DEFAULT NULL,
  `lastmodifytime` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`newsid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `easy_news`
--

LOCK TABLES `easy_news` WRITE;
/*!40000 ALTER TABLE `easy_news` DISABLE KEYS */;
INSERT INTO `easy_news` VALUES (9,'测试新闻','<p>这是一篇新闻</p><p>正文</p><p><img src=\"./Uploads/Article/day_160327/201603272031035542.png\" alt=\"\" /><br /></p><p>点这里开启福利吧</p><p><img src=\"./Uploads/Article/day_160327/201603272031122235.png\" width=\"300\" alt=\"\" /><br /></p><p><br /></p><p>在来点图</p><p><img src=\"./Uploads/Article/day_160327/201603272031546721.png\" width=\"300\" alt=\"\" /><br /></p><p><br /></p><p>一个长长的图片</p>',1459081932,1459081932),(10,'测试图片','<p><img src=\"/Uploads/Article/day_160327/201603272042002966.png\" width=\"300\" alt=\"\" /></p><p><br /></p><p>一个场图片</p>',1459082533,1459082533);
/*!40000 ALTER TABLE `easy_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `easy_node`
--

DROP TABLE IF EXISTS `easy_node`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `easy_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `easy_node`
--

LOCK TABLES `easy_node` WRITE;
/*!40000 ALTER TABLE `easy_node` DISABLE KEYS */;
/*!40000 ALTER TABLE `easy_node` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `easy_order`
--

DROP TABLE IF EXISTS `easy_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `easy_order` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `userid` int(10) NOT NULL,
  `recipientname` varchar(20) DEFAULT NULL,
  `recipientphone` varchar(11) DEFAULT NULL,
  `mainaddress` varchar(100) DEFAULT NULL,
  `recipientaddress` varchar(200) DEFAULT NULL,
  `productid` int(15) DEFAULT NULL,
  `producttypekey` varchar(20) DEFAULT 'product',
  `productname` varchar(200) DEFAULT NULL,
  `productprice` float DEFAULT '0',
  `productnum` int(5) DEFAULT NULL,
  `orderstate` int(1) NOT NULL DEFAULT '1',
  `orderexpress` varchar(20) DEFAULT NULL,
  `inserttime` int(11) DEFAULT NULL,
  `lastmodifytime` int(11) DEFAULT NULL,
  `orderid` varchar(50) NOT NULL,
  `wxinnerorderid` varchar(50) DEFAULT NULL,
  `transactionid` varchar(50) DEFAULT NULL,
  `returndata` text,
  `size` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `orderid` (`orderid`)
) ENGINE=InnoDB AUTO_INCREMENT=398 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `easy_order`
--

LOCK TABLES `easy_order` WRITE;
/*!40000 ALTER TABLE `easy_order` DISABLE KEYS */;
INSERT INTO `easy_order` VALUES (380,71,'Brian','18818203641','北京市 北京市 东城区','uu',27,'product','卫衣',0.01,1,2,NULL,1461851294,1461851294,'PB1461851294470',NULL,'4003592001201604285319621729','{\"appid\":\"wxe34ce79030a5dfbe\",\"attach\":\"\\u7cfb\\u7edf\\u8ba2\\u5355\\u53f7PB1461851294470\",\"bank_type\":\"CFT\",\"cash_fee\":\"1\",\"fee_type\":\"CNY\",\"is_subscribe\":\"Y\",\"mch_id\":\"1239855502\",\"nonce_str\":\"n6o8ywk5n09iomvhk3f78bnml0k7u68l\",\"openid\":\"oO9Rqs3wB38dm7FCGjEYwBmE5oeY\",\"out_trade_no\":\"PB1461851294470\",\"result_code\":\"SUCCESS\",\"return_code\":\"SUCCESS\",\"sign\":\"7C4B0E12F32AE6FBBA08281FDBB3FAED\",\"time_end\":\"20160428214821\",\"total_fee\":\"1\",\"trade_type\":\"JSAPI\",\"transaction_id\":\"4003592001201604285319621729\"}','avg'),(381,71,'Brian','18818203641','北京市 北京市 东城区','uu',28,'product','测试商品',0.01,1,2,'',1461851339,1461852375,'PB1461851339674',NULL,'4003592001201604285319638010','{\"appid\":\"wxe34ce79030a5dfbe\",\"attach\":\"\\u7cfb\\u7edf\\u8ba2\\u5355\\u53f7PB1461851339674\",\"bank_type\":\"CFT\",\"cash_fee\":\"1\",\"fee_type\":\"CNY\",\"is_subscribe\":\"Y\",\"mch_id\":\"1239855502\",\"nonce_str\":\"2tomnrb8aok12wf9gwcetry7fz9q7r4a\",\"openid\":\"oO9Rqs3wB38dm7FCGjEYwBmE5oeY\",\"out_trade_no\":\"PB1461851339674\",\"result_code\":\"SUCCESS\",\"return_code\":\"SUCCESS\",\"sign\":\"5644187791B0A71FCC668D66E443FEE7\",\"time_end\":\"20160428214905\",\"total_fee\":\"1\",\"trade_type\":\"JSAPI\",\"transaction_id\":\"4003592001201604285319638010\"}','xs'),(382,71,'Brian','18818203641','北京市 北京市 东城区','uu',19,'scoreproduct','卡卡k',10,1,2,NULL,1461853560,1461853560,'PE1461853560263',NULL,NULL,NULL,NULL),(383,71,'Brian','18818203641','北京市 北京市 东城区','uu',19,'scoreproduct','卡卡k',10,1,2,NULL,1461853604,1461853604,'PE1461853604592',NULL,NULL,NULL,'avg'),(384,71,'Brian','18818203641','北京市 北京市 东城区','uu',19,'scoreproduct','卡卡k',10,1,2,NULL,1461853604,1461853604,'PE1461853604175',NULL,NULL,NULL,'avg'),(385,71,'Brian','18818203641','北京市 北京市 东城区','uu',19,'scoreproduct','卡卡k',10,1,2,NULL,1461853615,1461853615,'PE1461853615128',NULL,NULL,NULL,'avg'),(386,71,'Brian','18818203641','北京市 北京市 东城区','uu',19,'scoreproduct','卡卡k',10,1,2,NULL,1461853729,1461853729,'PE1461853729910',NULL,NULL,NULL,'avg'),(387,71,'Brian','18818203641','北京市 北京市 东城区','uu',18,'scoreproduct','兑换商品',50,1,2,'',1461853821,1461853859,'PE1461853821633',NULL,NULL,NULL,'x'),(388,71,'Brian','18818203641','北京市 北京市 东城区','uu',19,'scoreproduct','卡卡k',10,1,2,NULL,1461853928,1461853928,'PE1461853928135',NULL,NULL,NULL,'xs'),(389,71,'Brian','18818203641','北京市 北京市 东城区','uu',27,'product','卫衣',0.01,1,2,NULL,1461857630,1461857630,'PB1461857630128',NULL,'4003592001201604285321749631','{\"appid\":\"wxe34ce79030a5dfbe\",\"attach\":\"\\u7cfb\\u7edf\\u8ba2\\u5355\\u53f7PB1461857630128\",\"bank_type\":\"CFT\",\"cash_fee\":\"1\",\"fee_type\":\"CNY\",\"is_subscribe\":\"Y\",\"mch_id\":\"1239855502\",\"nonce_str\":\"32afflqdj9ftfu4519s259vo57rb38tl\",\"openid\":\"oO9Rqs3wB38dm7FCGjEYwBmE5oeY\",\"out_trade_no\":\"PB1461857630128\",\"result_code\":\"SUCCESS\",\"return_code\":\"SUCCESS\",\"sign\":\"A71FB22186FABF6F5079C8C56CA60FF0\",\"time_end\":\"20160428233358\",\"total_fee\":\"1\",\"trade_type\":\"JSAPI\",\"transaction_id\":\"4003592001201604285321749631\"}','avg'),(390,70,'Ma4r','18621542411','北京市 北京市 东城区','哈哈哈哈哈',27,'product','卫衣',0.01,1,2,NULL,1461860810,1461860810,'PB1461860810504',NULL,'4000952001201604295323600461','{\"appid\":\"wxe34ce79030a5dfbe\",\"attach\":\"\\u7cfb\\u7edf\\u8ba2\\u5355\\u53f7PB1461860810504\",\"bank_type\":\"CFT\",\"cash_fee\":\"1\",\"fee_type\":\"CNY\",\"is_subscribe\":\"Y\",\"mch_id\":\"1239855502\",\"nonce_str\":\"bj7qlvsfhgnowc986wy4yh7qto4sp7aq\",\"openid\":\"oO9Rqs6E3bY7Pn7v_33XYA_xtWCw\",\"out_trade_no\":\"PB1461860810504\",\"result_code\":\"SUCCESS\",\"return_code\":\"SUCCESS\",\"sign\":\"9F57825B6D79DACFE1BE4452BD107B55\",\"time_end\":\"20160429002655\",\"total_fee\":\"1\",\"trade_type\":\"JSAPI\",\"transaction_id\":\"4000952001201604295323600461\"}','avg'),(391,70,'Ma4r','18621542411','北京市 北京市 门头沟区','哈哈哈哈哈',19,'scoreproduct','卡卡k',10,1,2,NULL,1461890342,1461890342,'PE1461890342699',NULL,NULL,NULL,'xxl'),(392,67,'哈哈要啊','13901958937','北京市 北京市 东城区','我在上海',27,'product','卫衣',0.01,1,2,NULL,1461912239,1461912239,'PB1461912239578',NULL,'4006612001201604295337786476','{\"appid\":\"wxe34ce79030a5dfbe\",\"attach\":\"\\u7cfb\\u7edf\\u8ba2\\u5355\\u53f7PB1461912239578\",\"bank_type\":\"CFT\",\"cash_fee\":\"1\",\"fee_type\":\"CNY\",\"is_subscribe\":\"Y\",\"mch_id\":\"1239855502\",\"nonce_str\":\"fewasafe4psucwqwjamshg3oxpcs1ylm\",\"openid\":\"oO9Rqs5HMDjkt5rfeHavYeqgvfck\",\"out_trade_no\":\"PB1461912239578\",\"result_code\":\"SUCCESS\",\"return_code\":\"SUCCESS\",\"sign\":\"BB7219E1617A375EDCECD967AF057641\",\"time_end\":\"20160429144409\",\"total_fee\":\"1\",\"trade_type\":\"JSAPI\",\"transaction_id\":\"4006612001201604295337786476\"}','avg'),(393,72,'GG','18801936654','北京市 北京市 东城区','上海',27,'product','卫衣',0.01,1,2,NULL,1461912547,1461912547,'PB1461912547666',NULL,'4003752001201604295337859994','{\"appid\":\"wxe34ce79030a5dfbe\",\"attach\":\"\\u7cfb\\u7edf\\u8ba2\\u5355\\u53f7PB1461912547666\",\"bank_type\":\"CFT\",\"cash_fee\":\"1\",\"fee_type\":\"CNY\",\"is_subscribe\":\"Y\",\"mch_id\":\"1239855502\",\"nonce_str\":\"ctco21wtcoltth1f9vxw46x6gjnvqvwv\",\"openid\":\"oO9Rqs4R7a2WqCCCtHxhl0y8It1g\",\"out_trade_no\":\"PB1461912547666\",\"result_code\":\"SUCCESS\",\"return_code\":\"SUCCESS\",\"sign\":\"C01B16431A726A773B0B00228460847D\",\"time_end\":\"20160429144914\",\"total_fee\":\"1\",\"trade_type\":\"JSAPI\",\"transaction_id\":\"4003752001201604295337859994\"}','avg'),(394,72,'GG','18801936654','北京市 北京市 东城区','上海',19,'scoreproduct','卡卡k',10,1,2,NULL,1461912679,1461912679,'PE1461912679800',NULL,NULL,NULL,'l'),(395,83,'寻少华','13564485555','上海市 上海市 黄浦区','上海市',27,'product','卫衣',0.01,1,2,NULL,1461918139,1461918139,'PB1461918139673',NULL,'4004892001201604295342556274','{\"appid\":\"wxe34ce79030a5dfbe\",\"attach\":\"\\u7cfb\\u7edf\\u8ba2\\u5355\\u53f7PB1461918139673\",\"bank_type\":\"CFT\",\"cash_fee\":\"1\",\"fee_type\":\"CNY\",\"is_subscribe\":\"Y\",\"mch_id\":\"1239855502\",\"nonce_str\":\"gd4auidd044o1z5mjccr01wt5ltvrdzb\",\"openid\":\"oO9Rqs-GuzxPSLBj5QqMytbpaRGM\",\"out_trade_no\":\"PB1461918139673\",\"result_code\":\"SUCCESS\",\"return_code\":\"SUCCESS\",\"sign\":\"7B0959C278D1CC833BEC4792CD2BB9CB\",\"time_end\":\"20160429162232\",\"total_fee\":\"1\",\"trade_type\":\"JSAPI\",\"transaction_id\":\"4004892001201604295342556274\"}','avg'),(396,72,'GG','18801936654','北京市 北京市 东城区','上海',19,'scoreproduct','卡卡k',10,1,2,NULL,1461930008,1461930008,'PE1461930008426',NULL,NULL,NULL,'l'),(397,72,'GG','18801936654','北京市 北京市 东城区','上海',28,'product','测试商品',0.01,1,2,NULL,1461930334,1461930334,'PB1461930334198',NULL,'4003752001201604295348099636','{\"appid\":\"wxe34ce79030a5dfbe\",\"attach\":\"\\u7cfb\\u7edf\\u8ba2\\u5355\\u53f7PB1461930334198\",\"bank_type\":\"CFT\",\"cash_fee\":\"1\",\"fee_type\":\"CNY\",\"is_subscribe\":\"Y\",\"mch_id\":\"1239855502\",\"nonce_str\":\"e1a3dwglefy5a6rhxx7v52bo4i82b7s3\",\"openid\":\"oO9Rqs4R7a2WqCCCtHxhl0y8It1g\",\"out_trade_no\":\"PB1461930334198\",\"result_code\":\"SUCCESS\",\"return_code\":\"SUCCESS\",\"sign\":\"11944EFB14384C374078A9084D4679D2\",\"time_end\":\"20160429194539\",\"total_fee\":\"1\",\"trade_type\":\"JSAPI\",\"transaction_id\":\"4003752001201604295348099636\"}','m');
/*!40000 ALTER TABLE `easy_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `easy_plugin`
--

DROP TABLE IF EXISTS `easy_plugin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `easy_plugin` (
  `plugin_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `desc` varchar(255) NOT NULL DEFAULT '无',
  `method` varchar(255) NOT NULL,
  `isinstalled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `position` tinyint(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`plugin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `easy_plugin`
--

LOCK TABLES `easy_plugin` WRITE;
/*!40000 ALTER TABLE `easy_plugin` DISABLE KEYS */;
INSERT INTO `easy_plugin` VALUES (7,'Baidushare','无','Index/Baidushare/info',0,0);
/*!40000 ALTER TABLE `easy_plugin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `easy_product`
--

DROP TABLE IF EXISTS `easy_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `easy_product` (
  `productid` int(15) NOT NULL AUTO_INCREMENT,
  `productname` varchar(20) DEFAULT NULL,
  `productprice` float DEFAULT '0',
  `productpic` varchar(200) DEFAULT NULL,
  `productleft` int(10) DEFAULT NULL,
  `productshortdescription` text,
  `productdescription` text,
  `inserttime` int(11) DEFAULT NULL,
  `lastmodifytime` int(11) DEFAULT NULL,
  `sizexs` int(10) DEFAULT '0',
  `sizes` int(10) DEFAULT '0',
  `sizem` int(10) DEFAULT '0',
  `sizel` int(10) DEFAULT '0',
  `sizexl` int(10) DEFAULT '0',
  `sizexxl` int(10) DEFAULT '0',
  `sizeavg` int(10) DEFAULT '0',
  PRIMARY KEY (`productid`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `easy_product`
--

LOCK TABLES `easy_product` WRITE;
/*!40000 ALTER TABLE `easy_product` DISABLE KEYS */;
INSERT INTO `easy_product` VALUES (26,'睡衣',0.01,'./Uploads/Product//1459174760.png',1,'女式睡衣','冬天女式睡衣',1459174760,1459175192,0,0,0,0,0,0,0),(27,'卫衣',0.01,'./Uploads/Product//1459174789.png',1,'卫衣描述','卫衣描述',1459174789,1461848713,0,0,0,0,0,0,4),(28,'测试商品',0.01,'./Uploads/Product//1459174834.png',1,'测试商品','本商品为测试商品，不为真',1459174834,1461847825,0,1,2,4,5,6,0);
/*!40000 ALTER TABLE `easy_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `easy_productimglib`
--

DROP TABLE IF EXISTS `easy_productimglib`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `easy_productimglib` (
  `productimglibid` int(15) NOT NULL AUTO_INCREMENT,
  `productid` int(11) NOT NULL,
  `imgsrc` varchar(200) DEFAULT NULL,
  `inserttime` int(11) NOT NULL,
  `lastmodifytime` int(11) NOT NULL,
  PRIMARY KEY (`productimglibid`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `easy_productimglib`
--

LOCK TABLES `easy_productimglib` WRITE;
/*!40000 ALTER TABLE `easy_productimglib` DISABLE KEYS */;
INSERT INTO `easy_productimglib` VALUES (9,9,'./Uploads/Product9/1454507360.jpg',1454507360,1454507360),(10,9,'./Uploads/Product9/1454507860.jpg',1454507860,1454507860),(12,9,'./Uploads/Product',1454508028,1454508028),(13,9,'./Uploads/Product',1454508670,1454508670),(65,10,'./Uploads/Product/10/1454594297.jpg',1454594297,1454594297),(66,10,'./Uploads/Product/10/1454594912.jpg',1454594912,1454594912),(67,10,'./Uploads/Product/10/1454595012.jpg',1454595012,1454595012),(68,10,'./Uploads/Product/10/1454595091.jpg',1454595091,1454595091),(69,10,'./Uploads/Product/10/1454595128.jpg',1454595128,1454595128),(70,10,'./Uploads/Product/10/1454595244.jpg',1454595244,1454595244),(71,10,'./Uploads/Product/10/1454595356.jpg',1454595356,1454595356),(72,10,'./Uploads/Product/10/1454595715.jpg',1454595715,1454595715),(73,10,'./Uploads/Product/10/1454595732.jpg',1454595732,1454595732),(74,10,'./Uploads/Product/10/1454595776.jpg',1454595776,1454595776),(75,10,'./Uploads/Product/10/1454596063.jpg',1454596063,1454596063),(76,10,'./Uploads/Product/10/1454596342.jpg',1454596342,1454596342),(77,10,'./Uploads/Product/10/1454596491.jpg',1454596491,1454596491),(78,10,'./Uploads/Product/10/1454596852.jpg',1454596852,1454596852),(79,10,'./Uploads/Product/10/1454596855.jpg',1454596855,1454596855),(80,10,'./Uploads/Product/10/1454596857.jpg',1454596857,1454596857),(81,10,'./Uploads/Product/10/1454597056.jpg',1454597056,1454597056),(82,10,'./Uploads/Product/10/1454597087.jpg',1454597087,1454597087),(83,10,'./Uploads/Product/10/1454597097.jpg',1454597097,1454597097),(84,10,'./Uploads/Product/10/1454597694.jpg',1454597694,1454597694),(85,10,'./Uploads/Product/10/1454597708.jpg',1454597708,1454597899),(88,10,'/Uploads/Product/10/1454599017.jpg',1454599001,1454599017),(89,13,'/Uploads/Product/13/1457107925.png',1457107915,1457107925),(90,13,'/Uploads/Product/13/1457108072.png',1457108072,1457108072),(91,15,'/Uploads/Product/15/1458144865.png',1458144865,1458144865),(92,15,'/Uploads/Product/15/1458145754.png',1458145754,1458145754),(93,14,'/Uploads/Product/14/1458145866.png',1458145866,1458145866),(94,21,'./Uploads/Product/21/1459003756.png',1459003756,1459003756),(95,25,'./Uploads/Product/25/1459172942.jpg',1459172942,1459172942),(96,28,'./Uploads/Product/28/1459174941.png',1459174941,1459174941),(97,28,'./Uploads/Product/28/1459174951.png',1459174951,1459174951),(98,27,'./Uploads/Product/27/1459174971.png',1459174971,1459174971),(99,26,'./Uploads/Product/26/1459174991.png',1459174991,1459174991);
/*!40000 ALTER TABLE `easy_productimglib` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `easy_recommendation`
--

DROP TABLE IF EXISTS `easy_recommendation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `easy_recommendation` (
  `recomm_id` int(11) NOT NULL AUTO_INCREMENT,
  `recomm_title` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `recomm_pic` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `recomm_desc` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `recomm_pos` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `recomm_sort` int(5) unsigned DEFAULT NULL,
  `recomm_time` int(10) unsigned NOT NULL,
  `islock` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`recomm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `easy_recommendation`
--

LOCK TABLES `easy_recommendation` WRITE;
/*!40000 ALTER TABLE `easy_recommendation` DISABLE KEYS */;
INSERT INTO `easy_recommendation` VALUES (3,'434341111111111','<img src=\"./Uploads/Article/day_160117/201601171739229200.jpg\" alt=\"\" />																														','','54365564534',12,1453023565,0),(4,'fsad','<img src=\"./Uploads/Article/day_160117/201601171815255969.jpg\" alt=\"\" />															','','fdsafdsa',1,1453025729,1),(7,'3','','','qqqqzzzzzzzzfdsaaaaaaaaaaaaaaa',0,1453036792,0),(8,'4','','','qqqqzzzzzzzzfdsaaaaaaaaaaaaaaa',0,1453036797,1),(9,'5','','','qqqqzzzzzzzzfdsaaaaaaaaaaaaaaa',0,1453036803,0),(10,'6','','','qqqqzzzzzzzzfdsaaaaaaaaaaaaaaa',0,1453036810,0),(11,'7','','','qqqqzzzzzzzzfdsaaaaaaaaaaaaaaa',0,1453036816,0),(12,'8','','','qqqqzzzzzzzzfdsaaaaaaaaaaaaaaa',0,1453036822,1),(13,'9','','','qqqqzzzzzzzzfdsaaaaaaaaaaaaaaa',0,1453036827,1),(14,'12','','','qqqqzzzzzzzzfdsaaaaaaaaaaaaaaa',0,1453036833,0),(15,'123','','','qqqqzzzzzzzzfdsaaaaaaaaaaaaaaa',0,1453036838,0),(16,'43234243','342','342432432','qqqqzzzzzzzzfdsaaaaaaaaaaaaaaa',342432,1453629051,0);
/*!40000 ALTER TABLE `easy_recommendation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `easy_recompos`
--

DROP TABLE IF EXISTS `easy_recompos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `easy_recompos` (
  `recompos_id` int(11) NOT NULL AUTO_INCREMENT,
  `recompos_key` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `recompos_name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`recompos_id`),
  UNIQUE KEY `recompos_key` (`recompos_key`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `easy_recompos`
--

LOCK TABLES `easy_recompos` WRITE;
/*!40000 ALTER TABLE `easy_recompos` DISABLE KEYS */;
INSERT INTO `easy_recompos` VALUES (2,'qqqqzzzzzzzzfdsaaaaaaaaaaaaaaa','qqqqqqqfdsaaaaaaa'),(4,'54365564534','423543'),(8,'fdsafdsa','dfsafdsa'),(10,'54356','5435'),(11,'4324312','3421'),(12,'1','1'),(14,'2','1'),(15,'3','3'),(16,'4','4'),(17,'5','5'),(18,'6','6'),(19,'7','7'),(20,'8','8'),(21,'9','9'),(22,'10','10'),(23,'11','11'),(24,'12','12'),(25,'13','133'),(26,'14','14'),(27,'15','15');
/*!40000 ALTER TABLE `easy_recompos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `easy_redpacket`
--

DROP TABLE IF EXISTS `easy_redpacket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `easy_redpacket` (
  `redpacketid` int(5) NOT NULL AUTO_INCREMENT,
  `redpacketkey` varchar(10) NOT NULL,
  `redpacketvalue` int(11) NOT NULL,
  `wishing` varchar(50) DEFAULT '祝您快乐',
  `actname` varchar(50) DEFAULT '红包',
  `remark` varchar(50) DEFAULT '无',
  `inserttime` int(11) NOT NULL,
  `lastmodifytime` int(11) NOT NULL,
  PRIMARY KEY (`redpacketid`),
  UNIQUE KEY `redpacketkey` (`redpacketkey`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `easy_redpacket`
--

LOCK TABLES `easy_redpacket` WRITE;
/*!40000 ALTER TABLE `easy_redpacket` DISABLE KEYS */;
INSERT INTO `easy_redpacket` VALUES (13,'辛普森红包',1,'抽奖福利','每日抽奖','无',1458995531,1459007445);
/*!40000 ALTER TABLE `easy_redpacket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `easy_role`
--

DROP TABLE IF EXISTS `easy_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `easy_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `easy_role`
--

LOCK TABLES `easy_role` WRITE;
/*!40000 ALTER TABLE `easy_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `easy_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `easy_role_user`
--

DROP TABLE IF EXISTS `easy_role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `easy_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `easy_role_user`
--

LOCK TABLES `easy_role_user` WRITE;
/*!40000 ALTER TABLE `easy_role_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `easy_role_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `easy_scoreaudit`
--

DROP TABLE IF EXISTS `easy_scoreaudit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `easy_scoreaudit` (
  `scoreid` int(15) NOT NULL AUTO_INCREMENT,
  `userid` int(10) NOT NULL,
  `typekey` varchar(20) NOT NULL,
  `typename` varchar(200) DEFAULT NULL,
  `scorevalue` int(10) DEFAULT NULL,
  `changetype` varchar(5) NOT NULL DEFAULT 'ADD',
  `inserttime` int(11) NOT NULL,
  `lastmodifytime` int(11) NOT NULL,
  PRIMARY KEY (`scoreid`)
) ENGINE=InnoDB AUTO_INCREMENT=242 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `easy_scoreaudit`
--

LOCK TABLES `easy_scoreaudit` WRITE;
/*!40000 ALTER TABLE `easy_scoreaudit` DISABLE KEYS */;
INSERT INTO `easy_scoreaudit` VALUES (1,11,'login',NULL,NULL,'ADD',0,0),(3,9,'buy',NULL,NULL,'ADD',11,11),(4,61,'抽奖','lottery',1,'ADD',1458384475,1458384475),(5,61,'抽奖','lottery',1,'ADD',1458385761,1458385761),(6,61,'抽奖','lottery',1,'ADD',1458385765,1458385765),(7,61,'抽奖','lottery',1,'ADD',1458385869,1458385869),(8,61,'抽奖','lottery',1,'ADD',1458385874,1458385874),(9,61,'抽奖','lottery',1,'ADD',1458385878,1458385878),(10,61,'抽奖','lottery',1,'ADD',1458385884,1458385884),(11,61,'抽奖','lottery',1,'ADD',1458389125,1458389125),(12,61,'抽奖','lottery',1,'ADD',1458389850,1458389850),(13,61,'抽奖','lottery',1,'ADD',1458390186,1458390186),(14,61,'抽奖','lottery',1,'ADD',1458390275,1458390275),(15,61,'抽奖','lottery',1,'ADD',1458390323,1458390323),(16,61,'抽奖','lottery',1,'ADD',1458390340,1458390340),(17,61,'抽奖','lottery',1,'ADD',1458390432,1458390432),(18,61,'抽奖','lottery',1,'ADD',1458390453,1458390453),(19,62,'抽奖','lottery',1,'ADD',1458395085,1458395085),(20,62,'抽奖','lottery',1,'ADD',1458397999,1458397999),(21,62,'抽奖','lottery',1,'ADD',1458398093,1458398093),(22,62,'抽奖','lottery',1,'ADD',1458399178,1458399178),(23,62,'抽奖','lottery',1,'ADD',1458399413,1458399413),(24,62,'抽奖','lottery',1,'ADD',1458399854,1458399854),(25,62,'抽奖','lottery',1,'ADD',1458403536,1458403536),(26,62,'抽奖','lottery',1,'ADD',1458403974,1458403974),(27,62,'抽奖','lottery',1,'ADD',1458408464,1458408464),(28,62,'抽奖','lottery',1,'ADD',1458408621,1458408621),(29,62,'抽奖','lottery',1,'ADD',1458408630,1458408630),(30,62,'抽奖','lottery',1,'ADD',1458408634,1458408634),(31,62,'抽奖','lottery',1,'ADD',1458408639,1458408639),(32,62,'抽奖','lottery',1,'ADD',1458408882,1458408882),(33,62,'抽奖','lottery',1,'ADD',1458408889,1458408889),(34,62,'抽奖','lottery',1,'ADD',1458408965,1458408965),(35,62,'抽奖','lottery',1,'ADD',1458409534,1458409534),(36,62,'抽奖','lottery',3,'ADD',1458409591,1458409591),(37,62,'抽奖','lottery',1,'ADD',1458409764,1458409764),(38,62,'抽奖','lottery',4,'ADD',1458409773,1458409773),(39,62,'抽奖','lottery',4,'ADD',1458410297,1458410297),(40,62,'抽奖','lottery',5,'ADD',1458410305,1458410305),(41,62,'抽奖','lottery',7,'ADD',1458410397,1458410397),(42,62,'抽奖','lottery',7,'ADD',1458567364,1458567364),(43,62,'抽奖','lottery',5,'ADD',1458737243,1458737243),(44,62,'抽奖','lottery',5,'ADD',1458916587,1458916587),(45,66,'','抽奖',50,'ADD',1459011053,1459011053),(46,69,'','抽奖',50,'ADD',1459013564,1459013564),(47,65,'','抽奖',50,'ADD',1459013831,1459013831),(48,69,'','抽奖',50,'ADD',1459013916,1459013916),(49,65,'','抽奖',50,'ADD',1459013994,1459013994),(50,69,'','抽奖',50,'ADD',1459014058,1459014058),(51,65,'','抽奖',50,'ADD',1459014307,1459014307),(52,69,'','抽奖',50,'ADD',1459014327,1459014327),(53,65,'','抽奖',50,'ADD',1459014395,1459014395),(54,66,'','抽奖',50,'ADD',1459040568,1459040568),(55,65,'加油',NULL,1,'ADD',1459067473,1459067473),(56,65,'加油',NULL,1,'ADD',1459067507,1459067507),(57,65,'加油',NULL,1,'ADD',1459067510,1459067510),(58,65,'加油',NULL,1,'ADD',1459067755,1459067755),(59,65,'加油',NULL,1,'ADD',1459067864,1459067864),(60,65,'加油',NULL,1,'ADD',1459068747,1459068747),(61,65,'加油',NULL,1,'ADD',1459068822,1459068822),(62,65,'加油',NULL,1,'ADD',1459068837,1459068837),(63,65,'加油',NULL,1,'ADD',1459068942,1459068942),(64,65,'加油',NULL,1,'ADD',1459069733,1459069733),(65,65,'加油',NULL,1,'ADD',1459070012,1459070012),(66,65,'加油',NULL,1,'ADD',1459070078,1459070078),(67,69,'加油',NULL,1,'ADD',1459070618,1459070618),(68,65,'加油',NULL,1,'ADD',1459072060,1459072060),(69,66,'加油',NULL,1,'ADD',1459076931,1459076931),(70,70,'加油',NULL,1,'ADD',1459143369,1459143369),(71,66,'加油',NULL,1,'ADD',1459226905,1459226905),(72,67,'加油',NULL,1,'ADD',1459265938,1459265938),(73,71,'','抽奖积分',12,'ADD',1459266000,1459266000),(74,67,'加油',NULL,1,'ADD',1459266053,1459266053),(75,66,'加油',NULL,1,'ADD',1459266055,1459266055),(76,66,'','抽奖积分',10,'ADD',1459266105,1459266105),(77,75,'','抽奖积分',15,'ADD',1460275901,1460275901),(78,71,'','抽奖积分',19,'ADD',1460640821,1460640821),(79,67,'','抽奖积分',20,'ADD',1460641157,1460641157),(80,67,'','抽奖积分',17,'ADD',1460642541,1460642541),(81,67,'','抽奖积分',17,'ADD',1460642805,1460642805),(82,67,'','抽奖积分',20,'ADD',1460643764,1460643764),(83,71,'','抽奖积分',18,'ADD',1460643837,1460643837),(84,71,'','抽奖积分',15,'ADD',1460644033,1460644033),(85,67,'','抽奖积分',20,'ADD',1460646077,1460646077),(86,71,'','抽奖积分',19,'ADD',1460646431,1460646431),(87,71,'','抽奖积分',15,'ADD',1460646954,1460646954),(88,71,'','抽奖积分',19,'ADD',1460647326,1460647326),(89,71,'','抽奖积分',13,'ADD',1460647345,1460647345),(90,71,'','抽奖积分',20,'ADD',1460647505,1460647505),(91,71,'','抽奖积分',16,'ADD',1460647768,1460647768),(92,71,'','抽奖积分',18,'ADD',1460647835,1460647835),(93,71,'','抽奖积分',14,'ADD',1460647991,1460647991),(94,71,'','抽奖积分',16,'ADD',1460648303,1460648303),(95,67,'','抽奖积分',17,'ADD',1460708068,1460708068),(96,67,'','抽奖积分',19,'ADD',1460820106,1460820106),(97,67,'','抽奖积分',15,'ADD',1460873038,1460873038),(98,71,'','抽奖积分',11,'ADD',1460885082,1460885082),(99,71,'','抽奖积分',19,'ADD',1460885798,1460885798),(100,71,'','抽奖积分',15,'ADD',1460885904,1460885904),(101,71,'','抽奖积分',18,'ADD',1460886236,1460886236),(102,71,'','抽奖积分',11,'ADD',1460886273,1460886273),(103,71,'','抽奖积分',12,'ADD',1460886494,1460886494),(104,71,'','抽奖积分',16,'ADD',1460886699,1460886699),(105,71,'','抽奖积分',17,'ADD',1460886756,1460886756),(106,71,'','抽奖积分',20,'ADD',1460886927,1460886927),(107,71,'','抽奖积分',17,'ADD',1460887476,1460887476),(108,71,'','抽奖积分',20,'ADD',1460887649,1460887649),(109,71,'','抽奖积分',20,'ADD',1460887780,1460887780),(110,71,'','抽奖积分',18,'ADD',1460887868,1460887868),(111,71,'','抽奖积分',13,'ADD',1460888133,1460888133),(112,71,'','抽奖积分',18,'ADD',1460888182,1460888182),(113,71,'','抽奖积分',12,'ADD',1460888237,1460888237),(114,71,'','抽奖积分',20,'ADD',1460888347,1460888347),(115,71,'','抽奖积分',11,'ADD',1460888431,1460888431),(116,71,'','抽奖积分',12,'ADD',1460888495,1460888495),(117,71,'','抽奖积分',15,'ADD',1460888761,1460888761),(118,71,'','抽奖积分',10,'ADD',1460888802,1460888802),(119,71,'','抽奖积分',19,'ADD',1460889438,1460889438),(120,71,'','抽奖积分',10,'ADD',1460889499,1460889499),(121,71,'','抽奖积分',17,'ADD',1460889554,1460889554),(122,71,'','抽奖积分',15,'ADD',1460889600,1460889600),(123,71,'','抽奖积分',12,'ADD',1460889675,1460889675),(124,71,'','抽奖积分',19,'ADD',1460889746,1460889746),(125,71,'','抽奖积分',15,'ADD',1460889820,1460889820),(126,71,'','抽奖积分',20,'ADD',1460889901,1460889901),(127,71,'','抽奖积分',20,'ADD',1460890015,1460890015),(128,71,'','抽奖积分',19,'ADD',1460890242,1460890242),(129,71,'','抽奖积分',19,'ADD',1460890301,1460890301),(130,71,'','抽奖积分',19,'ADD',1460890374,1460890374),(131,71,'','抽奖积分',20,'ADD',1460890418,1460890418),(132,71,'','抽奖积分',11,'ADD',1460890456,1460890456),(133,71,'','抽奖积分',20,'ADD',1460890493,1460890493),(134,71,'','抽奖积分',12,'ADD',1460890749,1460890749),(135,71,'','抽奖积分',16,'ADD',1460890890,1460890890),(136,71,'','抽奖积分',16,'ADD',1460890929,1460890929),(137,71,'','抽奖积分',12,'ADD',1460890998,1460890998),(138,71,'','抽奖积分',12,'ADD',1460891047,1460891047),(139,71,'','抽奖积分',18,'ADD',1460891100,1460891100),(140,71,'','抽奖积分',20,'ADD',1460891215,1460891215),(141,71,'','抽奖积分',17,'ADD',1460891314,1460891314),(142,71,'','抽奖积分',11,'ADD',1460891378,1460891378),(143,71,'','抽奖积分',14,'ADD',1460891411,1460891411),(144,71,'','抽奖积分',16,'ADD',1460891468,1460891468),(145,71,'','抽奖积分',16,'ADD',1460891512,1460891512),(146,71,'','抽奖积分',20,'ADD',1460891567,1460891567),(147,71,'','抽奖积分',18,'ADD',1460891691,1460891691),(148,71,'','抽奖积分',16,'ADD',1460892294,1460892294),(149,71,'','抽奖积分',12,'ADD',1460892360,1460892360),(150,71,'','抽奖积分',20,'ADD',1460893786,1460893786),(151,71,'','抽奖积分',15,'ADD',1460893883,1460893883),(152,71,'','抽奖积分',18,'ADD',1460894032,1460894032),(153,71,'','抽奖积分',14,'ADD',1460894175,1460894175),(154,71,'','抽奖积分',19,'ADD',1460897288,1460897288),(155,73,'','抽奖积分',13,'ADD',1460944255,1460944255),(156,71,'','抽奖积分',12,'ADD',1460972825,1460972825),(157,70,'加油',NULL,1,'ADD',1461130558,1461130558),(158,70,'加油',NULL,1,'ADD',1461130767,1461130767),(159,72,'','抽奖积分',19,'ADD',1461131056,1461131056),(160,71,'','抽奖积分',17,'ADD',1461156922,1461156922),(161,71,'','抽奖积分',17,'ADD',1461157284,1461157284),(162,71,'','抽奖积分',15,'ADD',1461157296,1461157296),(163,71,'','抽奖积分',14,'ADD',1461158512,1461158512),(164,71,'','抽奖积分',19,'ADD',1461158522,1461158522),(165,71,'','抽奖积分',11,'ADD',1461158537,1461158537),(166,71,'','抽奖积分',13,'ADD',1461158553,1461158553),(167,71,'','抽奖积分',11,'ADD',1461158561,1461158561),(168,71,'','抽奖积分',14,'ADD',1461158592,1461158592),(169,71,'','抽奖积分',18,'ADD',1461158600,1461158600),(170,71,'','抽奖积分',10,'ADD',1461158682,1461158682),(171,71,'','抽奖积分',17,'ADD',1461158690,1461158690),(172,71,'','抽奖积分',18,'ADD',1461159076,1461159076),(173,71,'','抽奖积分',15,'ADD',1461159091,1461159091),(174,71,'','抽奖积分',13,'ADD',1461159099,1461159099),(175,71,'','抽奖积分',18,'ADD',1461159108,1461159108),(176,71,'','抽奖积分',20,'ADD',1461159120,1461159120),(177,71,'','抽奖积分',18,'ADD',1461159291,1461159291),(178,71,'','抽奖积分',15,'ADD',1461159631,1461159631),(179,71,'','抽奖积分',16,'ADD',1461159685,1461159685),(180,71,'','抽奖积分',15,'ADD',1461159735,1461159735),(181,71,'','抽奖积分',15,'ADD',1461159751,1461159751),(182,71,'','抽奖积分',10,'ADD',1461160004,1461160004),(183,71,'','抽奖积分',15,'ADD',1461160127,1461160127),(184,71,'','抽奖积分',10,'ADD',1461160136,1461160136),(185,71,'','抽奖积分',19,'ADD',1461160153,1461160153),(186,71,'','抽奖积分',15,'ADD',1461160186,1461160186),(187,71,'','抽奖积分',13,'ADD',1461160196,1461160196),(188,71,'','抽奖积分',16,'ADD',1461160208,1461160208),(189,71,'','抽奖积分',15,'ADD',1461160273,1461160273),(190,71,'','抽奖积分',18,'ADD',1461160281,1461160281),(191,71,'','抽奖积分',20,'ADD',1461160290,1461160290),(192,67,'','抽奖积分',19,'ADD',1461165191,1461165191),(193,72,'','抽奖积分',20,'ADD',1461231537,1461231537),(194,72,'','抽奖积分',20,'ADD',1461231538,1461231538),(195,72,'','抽奖积分',13,'ADD',1461231558,1461231558),(196,72,'','抽奖积分',19,'ADD',1461231570,1461231570),(197,72,'','抽奖积分',15,'ADD',1461231585,1461231585),(198,71,'','抽奖积分',19,'ADD',1461246535,1461246535),(199,71,'','抽奖积分',20,'ADD',1461246593,1461246593),(200,71,'','抽奖积分',12,'ADD',1461247395,1461247395),(201,71,'','抽奖积分',12,'ADD',1461247413,1461247413),(202,71,'','抽奖积分',12,'ADD',1461247634,1461247634),(203,71,'','抽奖积分',15,'ADD',1461247786,1461247786),(204,71,'','抽奖积分',13,'ADD',1461247832,1461247832),(205,71,'','抽奖积分',20,'ADD',1461252634,1461252634),(206,66,'','抽奖积分',13,'ADD',1461283912,1461283912),(207,66,'','抽奖积分',14,'ADD',1461283924,1461283924),(208,66,'','抽奖积分',16,'ADD',1461283975,1461283975),(209,67,'','抽奖积分',14,'ADD',1461339092,1461339092),(210,72,'','抽奖积分',18,'ADD',1461339210,1461339210),(211,67,'','抽奖积分',16,'ADD',1461341832,1461341832),(212,67,'','抽奖积分',17,'ADD',1461343752,1461343752),(213,67,'','抽奖积分',11,'ADD',1461343764,1461343764),(214,67,'','抽奖积分',15,'ADD',1461343771,1461343771),(215,67,'','抽奖积分',16,'ADD',1461343784,1461343784),(216,67,'','抽奖积分',10,'ADD',1461343838,1461343838),(217,67,'','抽奖积分',12,'ADD',1461343847,1461343847),(218,67,'','抽奖积分',18,'ADD',1461343902,1461343902),(219,70,'','抽奖积分',20,'ADD',1461425594,1461425594),(220,70,'','抽奖积分',13,'ADD',1461426359,1461426359),(221,70,'','抽奖积分',11,'ADD',1461426367,1461426367),(222,67,'','抽奖积分',19,'ADD',1461489972,1461489972),(223,67,'','抽奖积分',11,'ADD',1461489985,1461489985),(224,67,'','抽奖积分',16,'ADD',1461490113,1461490113),(225,72,'','抽奖积分',15,'ADD',1461502805,1461502805),(226,72,'','抽奖积分',19,'ADD',1461502816,1461502816),(227,72,'','抽奖积分',15,'ADD',1461502827,1461502827),(228,72,'','抽奖积分',13,'ADD',1461502838,1461502838),(229,66,'','抽奖积分',13,'ADD',1461504186,1461504186),(230,79,'','抽奖积分',16,'ADD',1461554985,1461554985),(231,80,'','抽奖积分',16,'ADD',1461555022,1461555022),(232,81,'','抽奖积分',12,'ADD',1461555027,1461555027),(233,79,'','抽奖积分',16,'ADD',1461555028,1461555028),(234,80,'','抽奖积分',16,'ADD',1461555035,1461555035),(235,81,'','抽奖积分',15,'ADD',1461555053,1461555053),(236,80,'','抽奖积分',16,'ADD',1461555523,1461555523),(237,72,'','抽奖积分',11,'ADD',1461555758,1461555758),(238,80,'','抽奖积分',17,'ADD',1461572255,1461572255),(239,80,'','抽奖积分',16,'ADD',1461574767,1461574767),(240,70,'','抽奖积分',12,'ADD',1461661447,1461661447),(241,72,'','抽奖积分',12,'ADD',1461673998,1461673998);
/*!40000 ALTER TABLE `easy_scoreaudit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `easy_scoreproduct`
--

DROP TABLE IF EXISTS `easy_scoreproduct`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `easy_scoreproduct` (
  `scoreproductid` int(10) NOT NULL AUTO_INCREMENT,
  `scoreproductname` varchar(50) NOT NULL,
  `scorecondition` int(10) DEFAULT NULL,
  `scoreproductpic` varchar(200) DEFAULT NULL,
  `scoreproductshortdescription` text,
  `scoreproductdescription` text,
  `scoreproductleft` int(10) DEFAULT NULL,
  `starttime` varchar(11) DEFAULT NULL,
  `endtime` varchar(11) DEFAULT NULL,
  `inserttime` int(11) NOT NULL,
  `lastmodifytime` int(11) NOT NULL,
  `sizexs` int(10) DEFAULT '0',
  `sizes` int(10) DEFAULT '0',
  `sizem` int(10) DEFAULT '0',
  `sizel` int(10) DEFAULT '0',
  `sizexl` int(10) DEFAULT '0',
  `sizexxl` int(10) DEFAULT '0',
  `sizeavg` int(10) DEFAULT '0',
  PRIMARY KEY (`scoreproductid`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `easy_scoreproduct`
--

LOCK TABLES `easy_scoreproduct` WRITE;
/*!40000 ALTER TABLE `easy_scoreproduct` DISABLE KEYS */;
INSERT INTO `easy_scoreproduct` VALUES (18,'兑换商品',50,'./Uploads/Scoreproduct//1459174886.png','兑换商品','此商品为兑换测试商品',1,NULL,NULL,1459174886,1461853793,0,0,0,0,0,0,0),(19,'卡卡k',10,'./Uploads/Scoreproduct//1461297593.png','yoyo','哈哈哈哈哈',1,NULL,NULL,1461130367,1461857693,9,20,30,38,50,59,0);
/*!40000 ALTER TABLE `easy_scoreproduct` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `easy_scoreproductimglib`
--

DROP TABLE IF EXISTS `easy_scoreproductimglib`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `easy_scoreproductimglib` (
  `scoreproductimglibid` int(15) NOT NULL AUTO_INCREMENT,
  `scoreproductid` int(11) NOT NULL,
  `imgsrc` varchar(200) DEFAULT NULL,
  `inserttime` int(11) NOT NULL,
  `lastmodifytime` int(11) NOT NULL,
  PRIMARY KEY (`scoreproductimglibid`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `easy_scoreproductimglib`
--

LOCK TABLES `easy_scoreproductimglib` WRITE;
/*!40000 ALTER TABLE `easy_scoreproductimglib` DISABLE KEYS */;
INSERT INTO `easy_scoreproductimglib` VALUES (1,0,'0',1457106618,1457106618),(2,0,'0',1457106961,1457106961),(3,0,'0',1457107208,1457107208),(4,0,'0',1457107341,1457107341),(8,7,'0',1457107720,1457107720),(11,7,'0',1457108017,1457108017),(12,4,'0',1457108036,1457108036),(14,11,'/Uploads/Scoreproduct/11/1457108611.png',1457108213,1457108611),(17,11,'/Uploads/Scoreproduct/11/1457108591.jpg',1457108591,1457108591),(18,6,'/Uploads/Scoreproduct/6/1457108623.jpg',1457108623,1457108623),(19,13,'/Uploads/Scoreproduct/13/1458470102.png',1458470102,1458470102),(20,13,'/Uploads/Scoreproduct/13/1458470111.png',1458470111,1458470111),(21,13,'/Uploads/Scoreproduct/13/1458470118.png',1458470118,1458470118),(22,18,'./Uploads/Scoreproduct/18/1459174904.png',1459174904,1459174904),(23,18,'./Uploads/Scoreproduct/18/1459174918.png',1459174918,1459174918);
/*!40000 ALTER TABLE `easy_scoreproductimglib` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `easy_scoretype`
--

DROP TABLE IF EXISTS `easy_scoretype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `easy_scoretype` (
  `typeid` int(5) NOT NULL AUTO_INCREMENT,
  `typekey` varchar(20) NOT NULL,
  `typename` varchar(50) NOT NULL,
  `typescorelow` int(8) NOT NULL,
  `typescorehigh` int(8) NOT NULL,
  `issystem` int(1) NOT NULL DEFAULT '0',
  `inserttime` int(11) NOT NULL,
  `lastmodifytime` int(11) NOT NULL,
  PRIMARY KEY (`typeid`),
  UNIQUE KEY `typekey` (`typekey`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `easy_scoretype`
--

LOCK TABLES `easy_scoretype` WRITE;
/*!40000 ALTER TABLE `easy_scoretype` DISABLE KEYS */;
INSERT INTO `easy_scoretype` VALUES (22,'登录','',100,100,1,1459079864,1459174513),(24,'抽奖积分','',10,20,0,1459174646,1459174646);
/*!40000 ALTER TABLE `easy_scoretype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `easy_user`
--

DROP TABLE IF EXISTS `easy_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `easy_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `logintime` int(10) unsigned NOT NULL,
  `loginip` varchar(30) NOT NULL,
  `islock` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `inserttime` int(11) NOT NULL,
  `lastmodifytime` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `easy_user`
--

LOCK TABLES `easy_user` WRITE;
/*!40000 ALTER TABLE `easy_user` DISABLE KEYS */;
INSERT INTO `easy_user` VALUES (6,'admin','21232f297a57a5a743894a0e4a801fc3',1461891016,'211.161.245.18',0,1457109927,1457109927),(7,'bhao','01e53296160e1c9b7209d83110bdebd4',1457111226,'0.0.0.0',0,1457110424,1457110424),(11,'aa','4124bc0a9335c27f086f24ba207a4912',1454233350,'0.0.0.0',1,1454233948,1454233948),(12,'blake','202cb962ac59075b964b07152d234b70',1459248250,'222.126.176.17',0,1459248230,1459248230),(13,'emily','e10adc3949ba59abbe56e057f20f883e',1461914040,'211.95.47.146',0,1461556517,1461556517);
/*!40000 ALTER TABLE `easy_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `easy_wechat`
--

DROP TABLE IF EXISTS `easy_wechat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `easy_wechat` (
  `wechatid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `openid` varchar(30) DEFAULT NULL,
  `token` varchar(100) DEFAULT NULL,
  `refreshtoken` varchar(100) DEFAULT NULL,
  `nickname` varchar(30) DEFAULT NULL,
  `photosrc` varchar(100) DEFAULT NULL,
  `subscribetime` int(20) unsigned DEFAULT NULL,
  `inserttime` int(11) unsigned DEFAULT NULL,
  `lastmodifytime` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`wechatid`)
) ENGINE=InnoDB AUTO_INCREMENT=313 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `easy_wechat`
--

LOCK TABLES `easy_wechat` WRITE;
/*!40000 ALTER TABLE `easy_wechat` DISABLE KEYS */;
INSERT INTO `easy_wechat` VALUES (312,'openid','token','refreshtoken','nickname','photosrc',1221,12312,321213);
/*!40000 ALTER TABLE `easy_wechat` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-29 23:26:00
