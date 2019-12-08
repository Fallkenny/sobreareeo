CREATE DATABASE  IF NOT EXISTS `sobreaereo_db` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `sobreaereo_db`;
DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`login_id`),
  UNIQUE KEY `login_id_UNIQUE` (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

LOCK TABLES `login` WRITE;

INSERT INTO `login` VALUES (1,'falk@falk.com','b395ebbbd7deda061fd7074e6f852188');

UNLOCK TABLES;
