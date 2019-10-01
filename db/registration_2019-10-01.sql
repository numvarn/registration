# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.7.26)
# Database: registration
# Generation Time: 2019-10-01 02:15:48 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table regis
# ------------------------------------------------------------

DROP TABLE IF EXISTS `regis`;

CREATE TABLE `regis` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `gender` int(1) NOT NULL,
  `prefix` int(1) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `lname` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL DEFAULT '',
  `date_regis` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

LOCK TABLES `regis` WRITE;
/*!40000 ALTER TABLE `regis` DISABLE KEYS */;

INSERT INTO `regis` (`id`, `gender`, `prefix`, `name`, `lname`, `email`, `phone`, `date_regis`)
VALUES
	(10,0,0,'phisan','sookkhee','phisan.s@sskru.ac.th','0842982456','1569819853'),
	(11,1,2,'sirikanlaya','sookkhee','sirikanlaya.s@sskru.ac.th','0882892456','1569819961'),
	(12,1,2,'mannika','pramual','mannika.p@sskru.ac.th','0899697483','1569821524'),
	(14,0,0,'สมหมาย','ปลายทาง','som.p@sskru.ac.th','087376901','1569824998'),
	(15,0,0,'กฤติพงษ์','มงคล','krittipong.m@sskru.ac.th','0981234569','1569832624'),
	(16,0,0,'ศุภกร','สุระเกษม','supakorn.s@sskru.ac.th','0842982456','1569832689'),
	(17,0,0,'ปฏิพันธ์','เทพขันธ์','patipath.t@sskru.ac.th','0842982456','1569832790'),
	(18,0,0,'ณัฐชนน','ชัยมั่น','natchanon.ch@sskru.ac.th','0842982456','1569832875'),
	(19,0,0,'พิษณุ','สุทาศรี','pitsanu.su@sskru.ac.th','0842982456','1569833008'),
	(20,0,0,'สมคิด','ระวังชนม์','somkit.r@sskru.ac.th','0842982456','1569833054'),
	(21,0,0,'ณัฐพล','สมงาม','natthapon.som@sskru.ac.th','0842982456','1569833088');

/*!40000 ALTER TABLE `regis` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `uid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `password` text NOT NULL,
  `role` int(1) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`uid`, `name`, `password`, `role`)
VALUES
	(1,'admin','b57f6e33f7bb9fea832e3e4e167de906',1);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
