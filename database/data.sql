-- MariaDB dump 10.19  Distrib 10.4.27-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: user
-- ------------------------------------------------------
-- Server version	10.4.27-MariaDB

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
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book` (
  `sno` int(10) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `age` int(22) NOT NULL,
  `gender` varchar(22) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `other` varchar(255) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  `st_date` date NOT NULL,
  `en_date` date NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` VALUES (1,'',0,'','','','','2023-03-25 00:02:03','0000-00-00','0000-00-00'),(26,'ecev',23,'male','this@this.com','1212121212','sca','2023-03-25 00:07:44','2023-03-20','2023-03-22'),(30,'harsh',18,'male','this@this.com','8989898989','wec','2023-03-25 17:11:19','2023-03-25','2023-03-31'),(31,'alii',18,'male','test@test.com','8989898989','aqws','2023-03-25 17:11:52','2023-03-23','2023-03-30'),(32,'alii',18,'male','test@test.com','8989898989','aqws','2023-03-25 17:19:25','2023-03-23','2023-03-30'),(33,'harsh',18,'male','this@this.com','8989898989','wec','2023-03-25 17:20:01','2023-03-25','2023-03-31'),(34,'harsh',18,'male','this@this.com','8989898989','wec','2023-03-25 17:21:16','2023-03-25','2023-03-31'),(35,'harsh',18,'male','this@this.com','8989898989','wec','2023-03-25 17:22:09','2023-03-25','2023-03-31'),(36,'harsh',18,'male','this@this.com','8989898989','wec','2023-03-25 17:28:33','2023-03-25','2023-03-31'),(37,'vr',43,'male','this@this.com','3434343434','wdqw','2023-03-25 17:59:13','2023-03-25','2023-03-30'),(38,'vr',43,'male','this@this.com','3434343434','wdqw','2023-03-25 18:01:53','2023-03-25','2023-03-30'),(39,'vr',43,'male','this@this.com','3434343434','wdqw','2023-03-25 18:02:17','2023-03-25','2023-03-30'),(40,'vr',43,'male','this@this.com','3434343434','wdqw','2023-03-25 18:04:15','2023-03-25','2023-03-30'),(41,'vr',43,'male','this@this.com','3434343434','wdqw','2023-03-25 18:07:33','2023-03-25','2023-03-30'),(42,'vr',43,'male','this@this.com','3434343434','wdqw','2023-03-25 18:09:01','2023-03-25','2023-03-30'),(43,'vr',43,'male','this@this.com','3434343434','wdqw','2023-03-25 18:09:44','2023-03-25','2023-03-30'),(44,'vr',43,'male','this@this.com','3434343434','wdqw','2023-03-25 18:10:35','2023-03-25','2023-03-30'),(45,'vr',43,'male','this@this.com','3434343434','wdqw','2023-03-25 18:11:55','2023-03-25','2023-03-30');
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(22) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`sno`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'harry','123','2023-03-24 22:16:11'),(22,'om1705','123','2023-03-24 22:16:54'),(23,'kirti','123','2023-03-24 22:44:10'),(24,'omp','123','2023-03-24 23:08:40'),(25,'Tgcvbjn','321','2023-03-24 23:25:01'),(26,'harsh','1234','2023-03-25 00:03:39');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-25 18:49:56
