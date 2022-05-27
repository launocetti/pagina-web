-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: website_ffp
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Tipo` varchar(50) NOT NULL,
  `Color` varchar(60) NOT NULL,
  `Categoria` varchar(50) NOT NULL,
  `Medida` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Precio` decimal(4,0) NOT NULL,
  `Imagen` varchar(250) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'Black','Maceta','negro y blanco','Diseño',12,3,300,'./Imagenes/03_black.jpeg'),(2,'Pink','Maceta','rosados','Diseño',10,4,300,'./Imagenes/05_flower.jpeg'),(3,'Charmander','Maceta','naranja','Caricaturas',10,3,300,'./Imagenes/26_pokemon.jpeg'),(4,'Squirtle','Maceta','celeste','Caricaturas',10,3,300,'./Imagenes/27_pokemon.jpeg'),(5,'Bulbasaur','Maceta','verde','Caricaturas',10,3,300,'./Imagenes/24_pokemon.jpeg'),(6,'Light Blue','Maceta','celeste y rosa','Diseño',12,3,350,'./Imagenes/04_flower.jpeg'),(7,'Chinita','Maceta','blanco y rosa','Cute',10,3,300,'./Imagenes/10_chinitas.jpeg'),(8,'Chinita','Maceta','blanco y rosa','Cute',8,3,250,'./Imagenes/10_chinitas.jpeg'),(9,'Llamas','Maceta','amarillo','Cute',10,3,300,'./Imagenes/31_llamas.jpeg'),(10,'Llamas','Maceta','beige','Cute',12,3,350,'./Imagenes/30_llamas.jpeg'),(11,'Ponys','Maceta','violeta, rosa,celeste','Caricaturas',10,3,300,'./Imagenes/9_little pony.jpeg'),(12,'Watermelon','Maceta','rosa y verde','Diseño',10,3,300,'./Imagenes/20_sandias.jpeg'),(13,'Purple','Maceta','violeta','Diseño',14,3,400,'./Imagenes/08_purple.jpeg'),(14,'Violet','Maceta','violeta y rosa','Diseño',12,3,300,'./Imagenes/16_violet.jpeg'),(15,'Flower','Maceta','verde y rosa','Diseño',10,3,300,'./Imagenes/34_flower.jpeg'),(16,'Blue','Maceta','azul','Diseño',10,3,300,'./Imagenes/maceta_01.jpeg');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-26 22:25:16
