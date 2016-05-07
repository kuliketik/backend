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
-- Table structure for table `tbKeterangan`
--

DROP TABLE IF EXISTS `tbKeterangan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbKeterangan` (
  `idKeterangan` int(11) NOT NULL AUTO_INCREMENT,
  `idOrder` int(11) NOT NULL,
  `idPakaian` int(11) NOT NULL,
  PRIMARY KEY (`idKeterangan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbKeterangan`
--

LOCK TABLES `tbKeterangan` WRITE;
/*!40000 ALTER TABLE `tbKeterangan` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbKeterangan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbLoundry`
--

DROP TABLE IF EXISTS `tbLoundry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbLoundry` (
  `idLoundry` int(11) NOT NULL AUTO_INCREMENT,
  `idUser` int(11) NOT NULL,
  `namaLoundry` varchar(35) NOT NULL,
  `sloganLoundry` varchar(35) NOT NULL,
  `alamatLoundry` varchar(75) NOT NULL,
  PRIMARY KEY (`idLoundry`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbLoundry`
--

LOCK TABLES `tbLoundry` WRITE;
/*!40000 ALTER TABLE `tbLoundry` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbLoundry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbMenu`
--

DROP TABLE IF EXISTS `tbMenu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbMenu` (
  `idMenu` int(11) NOT NULL AUTO_INCREMENT,
  `namaMenu` varchar(35) NOT NULL,
  `linkMenu` varchar(30) NOT NULL,
  `iconMenu` varchar(35) NOT NULL,
  `isActive` int(11) NOT NULL,
  `isParent` int(11) NOT NULL,
  PRIMARY KEY (`idMenu`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbMenu`
--

LOCK TABLES `tbMenu` WRITE;
/*!40000 ALTER TABLE `tbMenu` DISABLE KEYS */;
INSERT INTO `tbMenu` VALUES (1,'Menu','menu','glyphicon glyphicon-th-large',1,0),(4,'order','order','glyphicon glyphicon-tag',1,1),(5,'keterangan','keterangan','glyphicon glyphicon-th-list',1,1),(6,'loundry','loundry','glyphicon glyphicon-repeat',1,1),(7,'pakaian','pakaian','glyphicon glyphicon-knight',1,1),(8,'user','user','fa fa-users',1,1);
/*!40000 ALTER TABLE `tbMenu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbOrder`
--

DROP TABLE IF EXISTS `tbOrder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbOrder` (
  `idOrder` int(11) NOT NULL AUTO_INCREMENT,
  `idUser` int(11) NOT NULL,
  `beratOrder` int(11) NOT NULL,
  `hargaOrder` int(11) NOT NULL,
  `notifOrder` int(11) NOT NULL,
  `keteranganOrder` varchar(75) NOT NULL,
  PRIMARY KEY (`idOrder`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbOrder`
--

LOCK TABLES `tbOrder` WRITE;
/*!40000 ALTER TABLE `tbOrder` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbOrder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbPakaian`
--

DROP TABLE IF EXISTS `tbPakaian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbPakaian` (
  `idPakaian` int(11) NOT NULL AUTO_INCREMENT,
  `namaPakaian` varchar(30) NOT NULL,
  PRIMARY KEY (`idPakaian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbPakaian`
--

LOCK TABLES `tbPakaian` WRITE;
/*!40000 ALTER TABLE `tbPakaian` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbPakaian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbUser`
--

DROP TABLE IF EXISTS `tbUser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbUser` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `emailUser` varchar(30) NOT NULL,
  `namaUser` varchar(30) NOT NULL,
  `passwordUser` varchar(50) NOT NULL,
  `alamatUser` varchar(75) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbUser`
--

LOCK TABLES `tbUser` WRITE;
/*!40000 ALTER TABLE `tbUser` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbUser` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-07 22:27:29
