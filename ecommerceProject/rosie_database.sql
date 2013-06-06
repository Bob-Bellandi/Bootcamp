CREATE DATABASE  IF NOT EXISTS `rosie` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `rosie`;
-- MySQL dump 10.13  Distrib 5.5.24, for osx10.5 (i386)
--
-- Host: 127.0.0.1    Database: rosie
-- ------------------------------------------------------
-- Server version	5.5.25

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
-- Table structure for table `purse_lines`
--

DROP TABLE IF EXISTS `purse_lines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `purse_lines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `line` varchar(45) DEFAULT NULL COMMENT '	',
  `tagline` varchar(45) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL COMMENT '				',
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purse_lines`
--

LOCK TABLES `purse_lines` WRITE;
/*!40000 ALTER TABLE `purse_lines` DISABLE KEYS */;
INSERT INTO `purse_lines` VALUES (1,'Soft','Girlie: Show that you\'re soft!','100.png',NULL,NULL),(2,'Nautical','Travel & Adventure Bags','108.png',NULL,NULL),(3,'Old West','Show Your Wild Side!','700.png',NULL,NULL);
/*!40000 ALTER TABLE `purse_lines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purses`
--

DROP TABLE IF EXISTS `purses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `purses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `photo1_desc` varchar(255) DEFAULT NULL,
  `photo1_url` varchar(45) DEFAULT NULL,
  `photo2_desc` varchar(255) DEFAULT NULL,
  `photo2_url` varchar(45) DEFAULT NULL,
  `purse_lines_id` int(11) NOT NULL,
  `price` float DEFAULT NULL COMMENT '	',
  `availability` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_purse_purse_lines_idx` (`purse_lines_id`),
  CONSTRAINT `fk_purse_purse_lines` FOREIGN KEY (`purse_lines_id`) REFERENCES `purse_lines` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=706 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purses`
--

LOCK TABLES `purses` WRITE;
/*!40000 ALTER TABLE `purses` DISABLE KEYS */;
INSERT INTO `purses` VALUES (100,'Softie','Soft green toile, pink and green tassel trim, a braided handle and a sumptuous pink satin lining make this a lovely handbag for the summer.','100.png',NULL,'100t.png',1,55,1,NULL,NULL),(101,'Flowery','Green toile, pink gimp combined with delicate trumpet flower beads, pink satin cord handle and a lush pink lining make this a very feminine handbag.','101.png',NULL,'101t.png',1,55,1,NULL,NULL),(103,'Velvety','This green toile handbag features green velvet ribbon combined with trumpet flower beads and a soft pink satin cord handle. It is lined with a delicate pink cotton.','103.png',NULL,'103t.png',1,55,1,NULL,NULL),(104,'Pink Scroll','A more subtle version of the toile bag...green beads, green gimp, satin cord strap and a delicate pink scroll lining complete this bag.','104.png',NULL,'104t.png',1,55,1,NULL,NULL),(105,'Dark Green','This variation has dark green velvet ribbon complementing the toile and beads...lovely!','105.png',NULL,'105t.png',1,55,1,NULL,NULL),(106,'Roses All',' Funky and fabulous! Rose floral with onion fringe trim and damask top. Eye candy!!','106.png',NULL,'106t.png',1,55,1,NULL,NULL),(107,'Elegance','The top of the line. Green satin loop trim, with hand-applied rosebuds and a glorious beaded handle. Wow!!','107.png',NULL,'107t.png',1,60,1,NULL,NULL),(108,'Sail Away','A fun tapestry purse. Navy blue faux leather handles complete the look.','108.png',NULL,'108t.png',2,50,1,NULL,NULL),(109,'Special Handle','This sailboat bag has sturdy braided handle.','109.png','','109t.png',2,50,0,NULL,NULL),(110,'Anchors Aweigh!!','Gorgeous satin cording in navy blue and gold complete the nautical look.','110.png',NULL,'110t.png',2,50,1,NULL,NULL),(700,'Noble Wildlife','Exquisite wildlife tapestry is the focal point of this series of bags, all with leather straps.','700.png',NULL,'700t.png',3,45,1,NULL,NULL),(701,'Palomino','Did you ever get the pony you wanted when you were a little girl? This is the \"Palomino Pony\" bag...cream suede top band, long silky mane of fringe, and heavy cotton palomino print, with handles that look like reins. Giddyup!!','701.png',NULL,'701t.png',3,45,0,NULL,NULL),(702,'Palomino Mane','The wilder pony. Eyelash fringe with beads serves as a funky mane.','702.png',NULL,'702t.png',3,45,1,NULL,NULL),(703,'Kickin\'','Getcher boots on! Fun tapestry of boots, this one complemented by a bold stripe top and dunky brass details on the trim.','703.png',NULL,'703t.png',3,45,1,NULL,NULL),(704,'Bronco','Ride em, cowboy! Bronco tapestry with faux tooled leather top, faux leather strap.','704.png',NULL,'704t.png',3,45,1,NULL,NULL),(705,'Classy Boots','More boots....gold cording and red fringe complete this look.','705.png',NULL,'705t.png',3,45,0,NULL,NULL);
/*!40000 ALTER TABLE `purses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'rosie'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-05-28 15:59:19
