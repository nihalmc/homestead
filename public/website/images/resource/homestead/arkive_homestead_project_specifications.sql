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
-- Table structure for table `project_specifications`
--

DROP TABLE IF EXISTS `project_specifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_specifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `projectid` varchar(45) DEFAULT NULL,
  `specificationid` varchar(45) DEFAULT NULL,
  `value` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_specifications`
--

LOCK TABLES `project_specifications` WRITE;
/*!40000 ALTER TABLE `project_specifications` DISABLE KEYS */;
INSERT INTO `project_specifications` VALUES (44,'3','11',' Abundant water supply from overhead tank with individual metering.'),(43,'3','10','Power backup for lifts, common lights, common equipments and common motors.'),(40,'3','7',' Painted flush shuttered doors.'),(41,'3','8','Aluminum frame works with glass for windows, MS grills for stairs.'),(42,'3','9','Putty finished emulsion paint for interior, weather coat for exterior, enamel painting for wood works and MS grills'),(38,'3','5','Concealed plumbing with C. P. fittings of Johnson, Jaquar or equivalent brands.'),(39,'3','6',' Single phase power supply with concealed wiring in PVC conduits using wires of V-Guard, Finolex or equivalent , modular branded modular switches controlled by EMLCB. TV points in living room and master bedroom, A/c point in master bed room.'),(36,'3','3',' Rustic tiled flooring, tile up to 60 cm from counter top, stainless steel sink, provisions for water purifier and electric kitchen hood will be provided.'),(37,'3','4','Antiskid tiles on floor, ceramic tiles on walls to 7ft height. White coloured sanitary fittings of Johnson, Parryware or equivalent brands.'),(34,'3','1','RCC framed structure'),(35,'3','2','Vitrified flooring of H&R Johnson, White house or equivalent brands for entire building.');
/*!40000 ALTER TABLE `project_specifications` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-07 17:06:04
