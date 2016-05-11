-- MySQL dump 10.13  Distrib 5.5.49, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: db_loundry
-- ------------------------------------------------------
-- Server version	5.5.49-0ubuntu0.14.04.1

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
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'admin','Administrator'),(2,'members','General User');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `keterangan`
--

DROP TABLE IF EXISTS `keterangan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `keterangan` (
  `id_keterangan` int(11) NOT NULL AUTO_INCREMENT,
  `id_order` int(11) NOT NULL,
  `id_pakaian` int(11) NOT NULL,
  PRIMARY KEY (`id_keterangan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `keterangan`
--

LOCK TABLES `keterangan` WRITE;
/*!40000 ALTER TABLE `keterangan` DISABLE KEYS */;
/*!40000 ALTER TABLE `keterangan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_attempts`
--

LOCK TABLES `login_attempts` WRITE;
/*!40000 ALTER TABLE `login_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_attempts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loundry`
--

DROP TABLE IF EXISTS `loundry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loundry` (
  `id_loundry` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `nama_loundry` varchar(35) NOT NULL,
  `slogan_loundry` varchar(35) NOT NULL,
  `alamat_loundry` text NOT NULL,
  PRIMARY KEY (`id_loundry`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loundry`
--

LOCK TABLES `loundry` WRITE;
/*!40000 ALTER TABLE `loundry` DISABLE KEYS */;
/*!40000 ALTER TABLE `loundry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(20) NOT NULL,
  `link_menu` varchar(20) NOT NULL,
  `icon_menu` varchar(50) NOT NULL,
  `active` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` VALUES (1,'Menu','menu','glyphicon glyphicon-th-large',1,0),(4,'order','order','glyphicon glyphicon-tag',1,1),(5,'keterangan','keterangan','glyphicon glyphicon-th-list',1,1),(6,'loundry','loundry','glyphicon glyphicon-repeat',1,1),(7,'pakaian','pakaian','glyphicon glyphicon-knight',1,1),(8,'users','auth','fa fa-users',1,1);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order` (
  `id_order` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `berat_order` int(11) NOT NULL,
  `harga_order` int(11) NOT NULL,
  `notif_order` int(11) NOT NULL,
  `keterangan_order` text NOT NULL,
  PRIMARY KEY (`id_order`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pakaian`
--

DROP TABLE IF EXISTS `pakaian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pakaian` (
  `id_pakaian` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pakaian` varchar(35) NOT NULL,
  PRIMARY KEY (`id_pakaian`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pakaian`
--

LOCK TABLES `pakaian` WRITE;
/*!40000 ALTER TABLE `pakaian` DISABLE KEYS */;
INSERT INTO `pakaian` VALUES (1,'Kemeja'),(2,'Celana Panjang'),(3,'Celana Jeans'),(4,'Celana Pendek'),(5,'Baju Kaos'),(6,'Singlet'),(7,'Rompi'),(8,'Kaos Kaki'),(9,'Jacket Tebal'),(10,'Jacket Biasa'),(11,'Sarung'),(12,'Jas / Bleazer (Stel)'),(13,'Sarung Bantal'),(14,'Sprei'),(15,'Bed Cover'),(16,'Handuk Mandi Tebal'),(17,'Handuk Biasa'),(18,'Gordyn / Jok'),(19,'Rok'),(20,'Baju Tidur'),(21,'Selimut Tebal'),(22,'Kebaya'),(23,'Kolor');
/*!40000 ALTER TABLE `pakaian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'127.0.0.1','administrator','$2y$08$cxcnluPEGAt/RUa.C1zLXuAAxMMtz10ioxdyXFUqtuZnX/CSmaIoK','','admin@admin.com','',NULL,NULL,'Vk7YNojOHoZzjpFfpotUv.',1268889823,1462959820,1,'Admin','istrator','ADMIN','0'),(2,'','vicky','$2y$08$UTsXIW5.52AFoDOl5xWcE.GeDrJhzoFutawm9GSF/En/2nvTyAQW6','','vicky@yahoo.com',NULL,'',0,'',0,1462959862,1,'vicky','dasta','admin','0'),(3,'','hafizan','','','hafizan@yahoo.com',NULL,'',0,'',0,0,1,'','','',''),(4,'','benny','','','benny@yahoo.com',NULL,'',0,'',0,0,1,'','','',''),(5,'','jufi','','','jufi@yahoo.com',NULL,'',0,'',0,0,1,'','','',''),(6,'','aldio','','','aldio@yahoo.com',NULL,'',0,'',0,0,1,'','','',''),(7,'','gandhi','$2y$08$p2aOxAQcU59tOLT.OjHt3.gFu2BJY2tfJNrinVw9JfWJyPhmzyqAa','','gandhi@yahoo.com',NULL,'',0,'',0,0,1,'gandhi','wibowo','admin','0');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_groups`
--

LOCK TABLES `users_groups` WRITE;
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT INTO `users_groups` VALUES (3,1,1),(4,1,2),(7,2,1),(8,2,2),(9,7,1),(10,7,2);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-11 16:49:02
