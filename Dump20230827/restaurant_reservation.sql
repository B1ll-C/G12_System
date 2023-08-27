CREATE DATABASE  IF NOT EXISTS `restaurant` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `restaurant`;
-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: restaurant
-- ------------------------------------------------------
-- Server version	8.0.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reservation` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `person` int NOT NULL,
  `Dtime` varchar(50) NOT NULL,
  `msg` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation`
--

LOCK TABLES `reservation` WRITE;
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
INSERT INTO `reservation` VALUES (1,'cipher@gmail.com','bill','cipher',1,'2021/11/04/11:11','extra chair\r\n','2021-03-07 08:22:02'),(2,'cipher@gmail.com','bill','cipher',1,'2021/03/07/12:31','extra chair','2021-03-07 10:59:24'),(3,'khirtt@gmail.com','khirt','ephipfanio',1,'2021/03/10/00:00','extra chairs','2021-03-10 00:25:16'),(4,'rogelio@gmail.com','jon','cruz',1,'2021/03/16/14:00','extra table','2021-03-16 02:41:44'),(5,'cipher@gmail.com','bill','cipher',2,'2021/03/21/00:12','extra chairs','2021-03-19 17:51:26'),(6,'cipher@gmail.com','bill','cipher',2,'2021/01/01/00:10','extra chairs','2021-03-23 04:23:59'),(7,'cipher@gmail.com','bill','cipher',3,'2021/03/23/21:00','this is a message','2021-03-23 04:26:24'),(8,'cipher@gmail.com','paul','cipher',12,'2021/03/03/11:11','extra tables\r\n','2021-04-03 01:48:03'),(9,'cipher@gmail.com','paul','cipher',12,'2021/03/04/11:11','extra tables\r\n','2021-04-03 01:48:58'),(10,'cipher@gmail.com','paul','cipher',1,'2021/03/05/11:11','','2021-04-03 01:49:15'),(11,'cipher@gmail.com','paul','cipher',32,'2021/04/04/00:13','extratables\r\n','2021-04-03 01:51:09'),(12,'cipher@gmail.com','paul','cipher',2,'2021/04/05/04:44','date','2021-04-03 01:51:29'),(13,'cipher@gmail.com','paul','cipher',1,'2021/04/03/11:11','cooked','2021-04-03 01:51:50'),(14,'cipher@gmail.com','bill','cipher',2,'2021/04/16/00:00','Extra tables','2021-04-16 02:02:43');
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-27 21:34:14
