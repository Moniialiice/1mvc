/*
SQLyog Ultimate v9.63 
MySQL - 5.5.27 : Database - aleatorio
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`aleatorio` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `aleatorio`;

/*Table structure for table `cuestionario` */

DROP TABLE IF EXISTS `cuestionario`;

CREATE TABLE `cuestionario` (
  `id_cuest` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) DEFAULT NULL,
  `result` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_cuest`),
  KEY `iduser` (`iduser`),
  KEY `id_p` (`result`),
  CONSTRAINT `cuestionario_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `usuario` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `cuestionario` */

insert  into `cuestionario`(`id_cuest`,`iduser`,`result`) values (3,1,8);

/*Table structure for table `pregunta` */

DROP TABLE IF EXISTS `pregunta`;

CREATE TABLE `pregunta` (
  `id_p` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(200) DEFAULT NULL,
  `respuesta` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_p`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `pregunta` */

insert  into `pregunta`(`id_p`,`pregunta`,`respuesta`) values (1,'Los guiones se coloca entre los números de una dirección de IP','F'),(2,'Diego Rivera fue esposo de Frida Kahlo','V'),(3,'Suiza tiene al euro como moneda','F'),(4,'En el páncreas se produce la insulina','V'),(5,'Aristoteles sabía que no sabía nada','F'),(6,'En la India se encuentra el famoso monumento Taj Mahal','V'),(7,'Sigmund Freud es el padre del psicoanálisis','V'),(8,'El murciélago es el único mamífero capaz de volar','V'),(9,'Los premios grammy son para cine','F'),(10,'Los budista creen en un Dios','F'),(11,'Do, re, mi, fa son notas musicales','V'),(12,'El día de la independencia de México es el 20 de noviembre','F'),(13,'Mario Bellatín, Juan Rulfo y Jorge Volpi son destacados exponentes del teatro mexicano ','F'),(14,'El camaleón es el reptil cuya piel cambia de color','V'),(15,'El sake es la bebida alcohólica más importante de Japón','V'),(16,'Roma es la ciudad italiana conocida como: La Novia del Mar','F'),(17,'8 horas son el promedio que duerme al día un gato','F'),(18,'Alfa es la última letra del alfabeto griego','F'),(19,'El riñon produce la bilis','V'),(20,'Citlaltépetl es la montaña más alta de México','v');

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `app` varchar(100) DEFAULT NULL,
  `apm` varchar(100) DEFAULT NULL,
  `user` varchar(100) DEFAULT NULL,
  `cont` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

insert  into `usuario`(`iduser`,`nombre`,`app`,`apm`,`user`,`cont`) values (1,'moni','momo','gvvuj','monii','202cb962ac59075b964b07152d234b70');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
