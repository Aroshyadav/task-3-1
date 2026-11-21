-- MySQL dump 10.13  Distrib 8.0.46, for Linux (x86_64)
--
-- Host: localhost    Database: assignment_db
-- ------------------------------------------------------
-- Server version	8.0.46-0ubuntu0.24.04.4

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `2024CSB018_data`
--

DROP TABLE IF EXISTS `2024CSB018_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `2024CSB018_data` (
  `id` int NOT NULL AUTO_INCREMENT,
  `book_name` varchar(100) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `stock` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `2024CSB018_data`
--

LOCK TABLES `2024CSB018_data` WRITE;
/*!40000 ALTER TABLE `2024CSB018_data` DISABLE KEYS */;
INSERT INTO `2024CSB018_data` VALUES (1,'The Alchemist','Paulo Coelho',450.00,12),(2,'Clean Code','Robert C. Martin',850.00,5),(3,'Atomic Habits','James Clear',550.00,20),(4,'To Kill a Mockingbird','Harper Lee',350.00,8),(5,'Introduction to Algorithms','Cormen',1200.00,4);
/*!40000 ALTER TABLE `2024CSB018_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Arosh_data`
--

DROP TABLE IF EXISTS `Arosh_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Arosh_data` (
  `id` int NOT NULL AUTO_INCREMENT,
  `book_name` varchar(100) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `stock` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Arosh_data`
--

LOCK TABLES `Arosh_data` WRITE;
/*!40000 ALTER TABLE `Arosh_data` DISABLE KEYS */;
INSERT INTO `Arosh_data` VALUES (1,'The Alchemist','Paulo Coelho',450.00,12),(2,'Clean Code','Robert C. Martin',850.00,5),(3,'Atomic Habits','James Clear',550.00,20),(4,'To Kill a Mockingbird','Harper Lee',350.00,8),(5,'Introduction to Algorithms','Cormen',1200.00,4);
/*!40000 ALTER TABLE `Arosh_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roll_101`
--

DROP TABLE IF EXISTS `roll_101`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roll_101` (
  `id` int NOT NULL AUTO_INCREMENT,
  `book_name` varchar(100) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `stock` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roll_101`
--

LOCK TABLES `roll_101` WRITE;
/*!40000 ALTER TABLE `roll_101` DISABLE KEYS */;
INSERT INTO `roll_101` VALUES (1,'The Alchemist','Paulo Coelho',450.00,12),(2,'Clean Code','Robert C. Martin',850.00,5),(3,'Atomic Habits','James Clear',550.00,20),(4,'To Kill a Mockingbird','Harper Lee',350.00,8),(5,'Introduction to Algorithms','Cormen',1200.00,4);
/*!40000 ALTER TABLE `roll_101` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-11-13  2:51:45
