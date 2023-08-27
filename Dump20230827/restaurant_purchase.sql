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
-- Table structure for table `purchase`
--

DROP TABLE IF EXISTS `purchase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `purchase` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `product` varchar(10) NOT NULL,
  `quantity` int NOT NULL,
  `price` double(10,2) NOT NULL,
  `DP` varchar(50) NOT NULL,
  `Dtime` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `cont` int NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchase`
--

LOCK TABLES `purchase` WRITE;
/*!40000 ALTER TABLE `purchase` DISABLE KEYS */;
INSERT INTO `purchase` VALUES (1,'cipher@gmail.com','Pecho-Pak',1,85.00,'Delivery','12:31','laguna / losbanos / Bayog',2147483647,'2021-03-08 08:16:11'),(2,'cipher@gmail.com','Paa-Hita',1,85.00,'Delivery','12:31','laguna / losbanos / Bayog',2147483647,'2021-03-08 08:16:11'),(3,'cipher@gmail.com','Kansi',1,50.00,'Pickup','11:11','laguna / losbanos / Bayog',123123123,'2021-03-08 08:16:42'),(4,'khirtt@gmail.com','Paa-Hita',0,0.00,'Delivery','','laguna / losbanos / Bayog',2147483647,'2021-03-10 00:25:56'),(5,'cipher@gmail.com','Pecho-Pak',1,85.00,'Delivery','','laguna / losbanos / Bayog',1234412341,'2021-03-10 04:05:12'),(6,'rogelio@gmail.com','Paa-Hita',2,85.00,'Delivery','','laguna / losbanos / Bayog',1234,'2021-03-16 02:42:17'),(7,'rogelio@gmail.com','Pecho-Pak',2,50.00,'Delivery','','laguna / losbanos / Bayog',2147483647,'2021-03-16 02:46:31'),(8,'rogelio@gmail.com','Atay',2,50.00,'Delivery','','laguna / losbanos / Bayog',2147483647,'2021-03-16 02:46:32'),(9,'tagz@gmail.com','Paa-Hita',1,85.00,'Delivery','','laguna / losbanos / Bayog',2147483647,'2021-03-16 02:50:54'),(10,'cipher@gmail.com','Paa-Hita',1,85.00,'Delivery','','laguna / losbanos / Bayog',919991999,'2021-03-19 17:34:16'),(11,'cipher@gmail.com','Paa-Hita',1,85.00,'Pickup','00:00',' /  / ',919991999,'2021-03-19 17:43:14'),(12,'cipher@gmail.com','Inihaw na ',1,85.00,'Pickup','00:00',' /  / ',919991999,'2021-03-19 18:07:55'),(13,'cipher@gmail.com','Kansi',1,50.00,'Delivery','','laguna / losbanos / Bayog',919991999,'2021-03-19 18:08:59'),(14,'cipher@gmail.com','Bulalo',1,50.00,'Pickup','00:00',' /  / ',919991999,'2021-03-19 18:11:12'),(15,'cipher@gmail.com','Isol',1,35.00,'Pickup','00:00',' /  / ',919991999,'2021-03-19 18:11:40'),(16,'cipher@gmail.com','Paa-Hita',1,85.00,'Pickup','00:00',' /  / ',919991999,'2021-03-19 18:12:54'),(17,'cipher@gmail.com','Pecho-Pak',1,85.00,'Pickup','00:00',' /  / ',919991999,'2021-03-19 18:12:54'),(18,'cipher@gmail.com','Paa-Hita',2,85.00,'Pickup','00:00',' /  / ',919991999,'2021-03-19 18:13:43'),(19,'cipher@gmail.com','Inihaw na ',2,85.00,'Pickup','00:00',' /  / ',919991999,'2021-03-19 18:13:44'),(20,'cipher@gmail.com','Coke (1.5)',1,75.00,'Pickup','00:00',' /  / ',919991999,'2021-03-19 18:14:46'),(21,'cipher@gmail.com','Bulalo',1,50.00,'Pickup','00:00',' /  / ',919991999,'2021-03-19 18:16:05'),(22,'cipher@gmail.com','Kansi',1,85.00,'Pickup','00:00',' /  / ',919991999,'2021-03-19 18:18:08'),(23,'cipher@gmail.com','Inihaw na ',1,85.00,'Pickup','00:00',' /  / ',919991999,'2021-03-19 18:18:09'),(24,'cipher@gmail.com','Paa-Hita',1,85.00,'Pickup','00:00',' /  / ',919991999,'2021-03-19 18:18:09'),(25,'rogelio@gmail.com','Paa-Hita',1,75.00,'Delivery','','laguna / losbanos / Bayog',2147483647,'2021-03-19 18:20:52'),(26,'rogelio@gmail.com','Coke (1.5)',1,75.00,'Delivery','','laguna / losbanos / Bayog',2147483647,'2021-03-19 18:20:52'),(27,'rogelio@gmail.com','Inihaw na ',1,80.00,'Pickup','00:00',' /  / ',2147483647,'2021-03-19 18:20:57'),(28,'cipher@gmail.com','Paa-Hita',1,85.00,'Pickup','00:00',' /  / ',2147483647,'2021-03-23 04:24:13'),(29,'cipher@gmail.com','Paa-Hita',1,85.00,'Pickup','00:00',' /  / ',2147483647,'2021-03-31 02:09:03'),(30,'cipher@gmail.com','Paa-Hita',3,90.00,'Delivery','12:31','laguna / losbanos / Bayog',2147483647,'2021-04-03 02:02:34'),(31,'cipher@gmail.com','Pecho-Pak',1,85.00,'Pickup','03:12',' /  / ',2147483647,'2021-04-03 02:04:34'),(32,'cipher@gmail.com','Leeg',1,15.00,'Delivery','','laguna / losbanos / Bayog',2147483647,'2021-04-07 08:49:15'),(33,'cipher@gmail.com','Paa-Hita',1,90.00,'Delivery','','laguna / losbanos / Bayog',2147483647,'2021-04-16 02:03:20'),(34,'cipher@gmail.com','Paa-Hita',1,50.00,'Pickup','00:00',' /  / ',123456789,'2023-08-27 13:30:07'),(35,'cipher@gmail.com','Pecho-Pak',1,50.00,'Pickup','00:00',' /  / ',123456789,'2023-08-27 13:30:07'),(36,'cipher@gmail.com','Kansi',1,50.00,'Pickup','00:00',' /  / ',123456789,'2023-08-27 13:30:07');
/*!40000 ALTER TABLE `purchase` ENABLE KEYS */;
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
