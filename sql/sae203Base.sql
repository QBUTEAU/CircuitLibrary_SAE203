-- MySQL dump 10.19  Distrib 10.3.36-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: ''    Database: ''
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
  `circuit_id` int(5) NOT NULL AUTO_INCREMENT,
  `circuit_nom` varchar(50) CHARACTER SET utf8 NOT NULL,
  `circuit_ville` varchar(30) CHARACTER SET utf8 NOT NULL,
  `circuit_pays` varchar(30) CHARACTER SET utf8 NOT NULL,
  `circuit_ouverture` char(4) NOT NULL,
  `circuit_longueur` float NOT NULL,
  `circuit_capacite` char(7) NOT NULL,
  `circuit_photo` varchar(100) NOT NULL,
  `circuit_anneelap` char(4) NOT NULL,
  `circuit_tempslap` varchar(10) CHARACTER SET utf8 NOT NULL,
  `pilote_id` int(5) NOT NULL,
  PRIMARY KEY (`circuit_id`),
  KEY `pilote_id` (`pilote_id`),
  CONSTRAINT `pilote_id` FOREIGN KEY (`pilote_id`) REFERENCES `pilotes` (`pilote_id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `circuits`
--

LOCK TABLES `circuits` WRITE;
/*!40000 ALTER TABLE `circuits` DISABLE KEYS */;
INSERT INTO `circuits` VALUES (1,'Circuit de Nevers Magny-Cours','Magny-Cours','France','1960',4.411,'139 112','magnycours.jpg','2004','1:13.698',101),(2,'Circuit Paul Ricard','Le Castellet','France','1970',5.861,'90 000','paulricard.jpg','2019','1:28.319',100),(3,'Circuit de Monaco','Monte-Carlo','Monaco','1929',3.337,'37 000','monaco.jpg','2019','1:10.166',100),(4,'Circuit de Silverstone','Silverstone','Royaume-Uni','1947',5.891,'150 000','silverstone.jpg','2020','1:27.097',102),(5,'Circuit International de Sakhir','Sakhir','Bahreïn','2004',5.412,'50 000','bahrein.jpg','2020','1:27.264',100),(6,'Circuit de l\'Albert Park','Melbourne','Australie','1953',5.279,'80 000','melbourne.jpg','2022','1:17.868',103),(7,'Red Bull Ring','Spielberg','Autriche','1969',4.318,'105 000','redbullring.jpg','2020','1:02.939',104),(8,'Circuit de Spa-Francorchamps','Francorchamps','Belgique','1921',7.004,'90 000','spa.jpg','2020','1:41.252',100),(9,'Circuit de Barcelona-Catalunya','Montmeló','Espagne','1991',4.675,'140 000','barcelone.jpg','2019','1:15.406',104),(10,'Hungaroring','Mogyoród','Hongrie','1986',4.381,'70 000','hungaroring.jpg','2020','1:13.447',100),(11,'Autodromo Enzo e Dino Ferrari','Imola','Italie','1953',4.909,'60 000','imola.jpg','2020','1:13.609',104),(12,'Autodromo Nazionale di Monza','Monza','Italie','1922',5.793,'113 860','monza.jpg','2020','1:18.887',100),(13,'Autódromo José Carlos Pace','São Paulo','Brésil','1940',4.309,'119 000','interlagos.jpg','2018','1:07.281',100),(14,'Circuit International de Suzuka','Suzuka','Japon','1969',5.821,'155 000','suzuka.jpg','2019','1:27.064',105),(15,'Circuit des Amériques','Elroy','Etats-Unis','2012',5.513,'120 000','austin.jpg','2019','1:32.029',104),(16,'Circuit International de Shanghai','Shanghai','Chine','2004',5.451,'200 000','shanghai.jpg','2018','1:31.075',105),(17,'Autódromo Hermanos Rodríguez','Mexico','Mexique','1962',4.304,'110 000','mexico.jpg','2019','1:14.758',102),(18,'Circuit de Zandvoort','Zandvoort','Pays-Bas','1962',4.259,'100 000','zandvoort.jpg','2021','1:08.885',102),(19,'Circuit urbain de Singapour','Singapour','Singapour','2008',5.063,'110 000','singapour.jpg','2018','1:36.015',100),(20,'Nürburgring','Nürburg','Allemagne','1932',4.574,'120 000','nurburgring.jpg','2020','1:25.269',104),(21,'HockenheimRing','Hockenheim','Allemagne','1932',4.574,'120 000','hockenheimring.jpg','2018','1:11.212',105),(22,'Circuit Gilles Villeneuve','Montreal','Canada','1978',4.361,'100 000','canada.jpg','2019','1:10.240',105),(23,'Circuit Yas Marina','Yas Marina','Abou Dabi','2009',5.281,'50 000','abudhabi.jpg','2019','1:34.779',100),(24,'Circuit d\'Istanbul Park','Istanbul','Turquie','2005',5.338,'150 000','istanbul.jpg','2021','1:22.868',100),(25,'Circuit International de Sepang','Sepang','Malaisie','1999',5.543,'133 000','sepang.jpg','2017','1:34.080',105),(26,'Autódromo Juan y Oscar Gálvez','Buenos Aires','Argentine','1952',4,'100 000','argentine.jpg','1997','1:24.473',106),(27,'Circuit de Kyalami','Midrand','Afrique du Sud','1961',4.522,'100 000','kyalami.jpg','1992','1:15.480',107),(28,'Indianapolis Motor Speedway','Indianapolis','Etats-Unis','1909',3.925,'400 000','indianapolisf1.jpg','2004','1:10.223',108),(29,'Circuit urbain de Bakou','Bakou','Azerbaïdjan','2016',6.003,'18 500','bakou.jpg','2019','1:40.495',104),(30,'Circuit Dijon-Prenois','Prenois','France','1972',3.801,'0','dijon.jpg','1982','1:01.380',109),(31,'Circuit Bugatti','Le Mans','France','1923',4.185,'250 000','bugatti.jpg','2015','1:20.648',110),(32,'Circuit des 24 Heures','Le Mans','France','1923',13.626,'260 000','lemans.jpg','2017','3:14.791',111),(33,'Nordschleife','Nürburg','Allemagne','1927',20.832,'150 000','nordschleife.jpg','2018','5:19.546',112),(34,'Circuit International de Sebring','Sebring','Etats-Unis','1950',6.019,'40 000','sebring.jpg','2019','1:40.124',101),(35,'Fuji Speedway','Oyama','Japon','1965',4.563,'110 000','fuji.jpg','2008','1:18.426',113),(36,'Circuit de la corniche de Djeddah','Djeddah','Arabie Saoudite','2021',6.174,'120 000','djeddah.jpg','2022','1:31.634',103),(37,'Miami International Autodrome','Miami','Etats-Unis','2022',5.41,'65 000','miami.jpg','2022','1:31.361',102),(38,'Circuit d\'Estoril','Estoril','Portugal','1972',4.182,'45 000','estoril.jpg','1993','1:11.494',114),(39,'Autódromo Internacional do Algarve','Portimão','Portugal','2008',4.653,'100 000','portimao.jpg','2020','1:16.466',104),(40,'TT Circuit Assen','Assen','Pays-Bas','1926',4.555,'110 000','assen.jpg','2007','1:18.756',115),(41,'Circuit Ricardo Tormo','Cheste','Espagne','1999',4.005,'165 000','ricardotormo.jpg','2016','1:29.401',116),(42,'Circuit de Jerez','Jerez de la Frontera','Espagne','1985',4.428,'125 000','jerez.jpg','2004','1:15.650',117),(43,'Circuit du Mugello','Mugello','Italie','1914',5.245,'50 000','mugello.jpg','2020','1:15.144',100),(44,'Autodrome de Sotchi','Sotchi','Russie','2014',5.848,'55 000','sotchi.jpg','2020','1:31.304',100),(45,'Circuit International de Losail','Losail','Qatar','2004',5.38,'8 000','losail.jpg','2021','1:20.827',100),(46,'Circuit International Buddh','Greater Noïda','Inde','2011',5.125,'110 000','buddh.jpg','2013','1:24.119',105),(47,'Daytona International Speedway','Daytona Beach','Etats-Unis','1959',4.02,'147 000','daytona.jpg','1987','42.783',118),(48,'Sachsenring','Saxe','Allemagne','1927',3.645,'120 000','sachsenring.jpg','2019','1:20.195',119),(49,'Circuit d\'Albi','Le Séquestre','France','1962',3.565,'30 000','albi.jpg','1973','1:08.900',120),(50,'Circuit de Paul-Ville','Pau','France','1933',2.76,'2 860','pau.jpg','1992','1:08.600',121);
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
INSERT INTO `pilotes` VALUES (100,'Hamilton','Lewis','UK'),(101,'Alonso','Fernando','ES'),(102,'Verstappen','Max','NL'),(103,'Leclerc','Charles','MC'),(104,'Bottas','Valtteri','FI'),(105,'Vettel','Sebastien','DE'),(106,'Villeneuve','Jacques','CA'),(107,'Mansell','Nigel','UK'),(108,'Barrichello','Rubens','BR'),(109,'Prost','Alain','FR'),(110,'Ellinas','Tio','CY'),(111,'Kobayashi','Kamui','JP'),(112,'Bernhard','Timo','DE'),(113,'Massa','Felipe','BR'),(114,'Hill','Damon','UK'),(115,'Bourdais','Sebastien','FR'),(116,'Lorenzo','Jorge','ES'),(117,'Schumacher','Michael','DE'),(118,'Elliott','Bill','US'),(119,'Marquez','Marc','ES'),(120,'Beltoise','Jean-Pierre','FR'),(121,'Montermini','Andrea','IT');
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

-- Dump completed on 2023-03-22 14:01:45
