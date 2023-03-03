-- MySQL dump 10.19  Distrib 10.3.36-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: sae203Base
-- ------------------------------------------------------
-- Server version	10.3.36-MariaDB-0+deb10u2

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
-- Table structure for table `circuits`
--

DROP TABLE IF EXISTS `circuits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `circuits` (
  `circuit_id` int(5) NOT NULL,
  `circuit_nom` varchar(50) CHARACTER SET utf8 NOT NULL,
  `circuit_ville` varchar(30) CHARACTER SET utf8 NOT NULL,
  `circuit_pays` varchar(30) CHARACTER SET utf8 NOT NULL,
  `circuit_ouverture` char(4) NOT NULL,
  `circuit_longueur` float NOT NULL,
  `circuit_capacite` char(7) NOT NULL,
  `circuit_photo` varchar(30) NOT NULL,
  `circuit_anneelap` char(4) NOT NULL,
  `circuit_tempslap` varchar(10) CHARACTER SET utf8 NOT NULL,
  `pilote_id` int(5) NOT NULL,
  PRIMARY KEY (`circuit_id`),
  KEY `pilote_id` (`pilote_id`),
  CONSTRAINT `pilote_id` FOREIGN KEY (`pilote_id`) REFERENCES `pilotes` (`pilote_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `circuits`
--

LOCK TABLES `circuits` WRITE;
/*!40000 ALTER TABLE `circuits` DISABLE KEYS */;
/*!40000 ALTER TABLE `circuits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pilotes`
--

DROP TABLE IF EXISTS `pilotes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pilotes` (
  `pilote_id` int(5) NOT NULL,
  `pilote_nom` varchar(30) CHARACTER SET utf8 NOT NULL,
  `pilote_prenom` varchar(30) CHARACTER SET utf8 NOT NULL,
  `pilote_nationalite` varchar(2) NOT NULL,
  PRIMARY KEY (`pilote_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pilotes`
--

LOCK TABLES `pilotes` WRITE;
/*!40000 ALTER TABLE `pilotes` DISABLE KEYS */;
/*!40000 ALTER TABLE `pilotes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-02  8:52:47
