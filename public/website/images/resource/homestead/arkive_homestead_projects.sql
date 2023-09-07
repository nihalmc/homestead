-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 204.11.58.156    Database: arkive_homestead
-- ------------------------------------------------------
-- Server version	5.5.44-37.3-log

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
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `categoryid` varchar(45) DEFAULT NULL,
  `currentstatus` varchar(45) DEFAULT NULL,
  `location_map` varchar(45) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (2,NULL,NULL,'2',NULL,NULL,'9.jpg','title'),(15,'Thunchan Scapes','Tirur','3',NULL,NULL,'y.jpg',NULL),(3,'Happinest','Perinthalmanna','1',NULL,NULL,'i.jpg',NULL),(4,'Aquabay','Kuttippuram','1',NULL,NULL,'k.jpg',NULL),(5,'Serene','Kuttippuram','1',NULL,NULL,'b.jpg',NULL),(6,'Homestead Riverine','Malappuram Town ','2',NULL,NULL,'a.jpg',NULL),(7,'Homestead Grande','Tirur Town','2',NULL,NULL,'c.jpg',NULL),(8,'Homestead Z Town','Tirur Town','2',NULL,NULL,'9.jpg',NULL),(9,'Homestead Riverine','Malappuram Town','4',NULL,NULL,'a.jpg',NULL),(10,'Homestead Grande','Tirur Town','4',NULL,NULL,'c.jpg',NULL),(11,'Homestead Z Town','Tirur Town','4',NULL,NULL,'j.jpg',NULL),(12,'Peach tree','Tirur','3',NULL,NULL,'z.jpg',NULL),(16,'Misty Hills','Perinthalmanna','3',NULL,NULL,'x.jpg',NULL),(17,'Tirur Heights','Tirur','3',NULL,NULL,'q.jpg',NULL),(18,'Aquabay','Kuttippuram','3',NULL,NULL,'k.jpg',NULL);
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-07 17:06:33
