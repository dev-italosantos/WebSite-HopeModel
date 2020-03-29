-- MySQL dump 10.13  Distrib 5.6.24, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: loja
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.37-MariaDB

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
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(13) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(33) NOT NULL,
  `idEndereco` int(11) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf` (`cpf`),
  UNIQUE KEY `email` (`email`),
  KEY `idEndereco` (`idEndereco`),
  CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`idEndereco`) REFERENCES `endereco` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (7,'Leandro  Lima','111112','leo@gmail.com','202cb962ac59075b964b07152d234b70',NULL,'arif-riyanto-vJP-wZ6hGBg-unsplash.jpg'),(8,'Dariane Vieira Lima','234230','darianelima@gmail.com','202cb962ac59075b964b07152d234b70',NULL,'christopher-gower-m_HRfLhgABo-unsplash.jpg'),(9,'italo','34','italo@gmail.com','202cb962ac59075b964b07152d234b70',NULL,'kevin-ku-w7ZyuGYNpRQ-unsplash.jpg'),(10,'Vanderley','111198','leando@gmail.com','202cb962ac59075b964b07152d234b70',NULL,'kevin-ku-w7ZyuGYNpRQ-unsplash.jpg'),(11,'Opa','323','opaa@gmail.com','caf1a3dfb505ffed0d024130f58c5cfa',NULL,'kevin-ku-w7ZyuGYNpRQ-unsplash.jpg'),(12,'testando','3415','te@gmail.com','202cb962ac59075b964b07152d234b70',NULL,'nate-grant-QQ9LainS6tI-unsplash.jpg'),(13,'k','1231','leandr98olima@gmail.com','202cb962ac59075b964b07152d234b70',NULL,'nate-grant-QQ9LainS6tI-unsplash.jpg'),(14,'Leandro Vieira Limaa','3423','leandrolama@gmail.com','202cb962ac59075b964b07152d234b70',NULL,'nate-grant-QQ9LainS6tI-unsplash.jpg'),(15,'JosÃ© Wilker','242344','Jose@gmail.com','202cb962ac59075b964b07152d234b70',NULL,'christopher-gower-m_HRfLhgABo-unsplash.jpg'),(16,'Leandro Vieira Lima','234234','leandrolima@gmail.com','827ccb0eea8a706c4c34a16891f84e7b',NULL,'nate-grant-QQ9LainS6tI-unsplash.jpg'),(17,'aloisio','321','aloisio@gmail.com','c7e1249ffc03eb9ded908c236bd1996d',NULL,'simpsons.jpg');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-23 20:43:29
