


DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(32) NOT NULL,
  `user_type` varchar(1) NOT NULL DEFAULT 'C',
  PRIMARY KEY (`login_id`),
  UNIQUE KEY `login_id_UNIQUE` (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

LOCK TABLES `login` WRITE;

INSERT INTO `login` VALUES (1,'admin@sobreaereo.com','21232f297a57a5a743894a0e4a801fc3','A'),(2,'vendedor1@sobreaereo.com','22981ee8bebef1155b820e13b18f0e53','V'),(3,'vendedor2@sobreaereo.com','b18c8bbdaafe044ab946a5293bee3c89','V'),(4,'cliente1@sobreaereo.com','d5a8d8c7ab0514e2b8a2f98769281585','C'),(5,'cliente2@sobreaereo.com','6dcd0e14f89d67e397b9f52bb63f5570','C');

UNLOCK TABLES;
