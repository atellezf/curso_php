DROP DATABASE IF EXISTS `galeria_practica`;
CREATE DATABASE `galeria_practica` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `galeria_practica`;

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `texto` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
