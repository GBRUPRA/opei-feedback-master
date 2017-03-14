/*
SQLyog Community v12.4.1 (64 bit)
MySQL - 10.1.21-MariaDB : Database - questionare
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`questionare` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `questionare`;

/*Table structure for table `acuerdos` */

DROP TABLE IF EXISTS `acuerdos`;

CREATE TABLE `acuerdos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `options` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `acuerdos` */

insert  into `acuerdos`(`id`,`options`) values 
(1,'Totalmente en desacuerdo'),
(2,'En desacuerdo'),
(3,'De acuerdo'),
(4,'Totalmente de acuerdo');

/*Table structure for table `frecuencias_opciones` */

DROP TABLE IF EXISTS `frecuencias_opciones`;

CREATE TABLE `frecuencias_opciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `options` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `frecuencias_opciones` */

insert  into `frecuencias_opciones`(`id`,`options`) values 
(1,'Por primera vez'),
(2,'Una vez al semestre'),
(3,'Varias veces al semestre'),
(4,'Anual');

/*Table structure for table `sometido` */

DROP TABLE IF EXISTS `sometido`;

CREATE TABLE `sometido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `frecuencia` varchar(68) NOT NULL,
  `respuesta_1` int(1) NOT NULL,
  `respuesta_2` int(1) NOT NULL,
  `respuesta_3` int(1) NOT NULL,
  `respuesta_4` int(1) NOT NULL,
  `respuesta_5` int(1) NOT NULL,
  `clasificacion` varchar(68) NOT NULL,
  `sugerencias_recomendaciones` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `sometido` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
