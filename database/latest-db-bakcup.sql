-- MySQL dump 10.13  Distrib 8.0.39, for Linux (x86_64)
--
-- Host: localhost    Database: tms
-- ------------------------------------------------------
-- Server version	8.0.39-0ubuntu0.22.04.1

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
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `sender_id` int NOT NULL,
  `receiver_id` int NOT NULL,
  `sender_type` enum('user','admin') COLLATE utf8mb4_general_ci NOT NULL,
  `receiver_type` enum('user','admin') COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat`
--

LOCK TABLES `chat` WRITE;
/*!40000 ALTER TABLE `chat` DISABLE KEYS */;
INSERT INTO `chat` VALUES (1,'2024-12-01 11:15:36','hello grishma mam from nishan khatiwada',31,32,'user','admin'),(2,'2024-12-01 11:29:23','hello nishant from grishma',32,31,'admin','user'),(3,'2024-12-01 11:29:46','hi grishma chettri from nishant',31,32,'user','admin'),(4,'2024-12-01 11:30:44','sfsdfsdf',32,31,'admin','user'),(5,'2024-12-01 11:31:30','hello how are you doig?\r\n',32,31,'admin','user'),(7,'2024-12-01 15:48:39','hello nishan',32,31,'admin','user'),(8,'2024-12-01 15:57:09','Hi there',32,31,'admin','user'),(9,'2024-12-01 15:58:57','whats up?',34,31,'admin','user'),(10,'2024-12-01 16:04:15','what are you doing ? Nishant ?',34,31,'admin','user'),(11,'2024-12-01 16:09:23','nishant, repost sakayau?',34,31,'admin','user');
/*!40000 ALTER TABLE `chat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exam`
--

DROP TABLE IF EXISTS `exam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `exam` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `subject` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `room` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `teacher` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exam`
--

LOCK TABLES `exam` WRITE;
/*!40000 ALTER TABLE `exam` DISABLE KEYS */;
INSERT INTO `exam` VALUES (18,'2024-10-26','Science','7:00 am -- 10:00 am','501',''),(19,'2024-11-01','Math','7:00 am -- 10:00 am','501',''),(20,'2024-11-02','English','7:00 am -- 10:00 am','501',''),(21,'2024-11-03','Science','10:00 am -- 1:00 pm','402',''),(22,'2024-11-05','Math','7:00 am -- 10:00 am','302',''),(23,'2024-11-21','Science','1:00 pm -- 4:00 pm','403',''),(24,'2024-11-29','English','1:00 pm -- 4:00 pm','503',''),(25,'2024-12-05','Math','10:00 am -- 1:00 pm','401','');
/*!40000 ALTER TABLE `exam` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inform`
--

DROP TABLE IF EXISTS `inform`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inform` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `lname` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`,`mobile`),
  UNIQUE KEY `email_2` (`email`,`mobile`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inform`
--

LOCK TABLES `inform` WRITE;
/*!40000 ALTER TABLE `inform` DISABLE KEYS */;
INSERT INTO `inform` VALUES (34,'Raju','Kc','Male','raju@gmail.com','9876543210','Bhaktapur, timi		 			 	'),(36,'Sauzanya','Poudel','Female','sauzanya@gmail.com','9876504321','Koteshwor		 	'),(37,'Nishan','Khatiwoda','Male','nishan@gmail.com','9864352107','Karve, Lele		 			 	'),(39,'KP','Oli Sharma','Male','kpsharma@gmail.com','9808604545','Balkot'),(40,'Aaliya ','Khatri','Female','aliya@fmail.com','9876543876','Bkt'),(41,'Sabin','Budathoki','Male','sabin@gmail.com','2345678945','Balkot'),(42,'Samir','Shrestha','Male','samir@gmzil.com','9856782348','Khimti'),(43,'Aarya','Poudel','Male','aarya@gmail.com','9834902786','Kumaripati'),(44,'Reshma','Khadka','Female','reshma@gmail.com','9860200901','Gwarkho'),(45,'Saru','Basnet','Female','saru@gmail.com','9865432786','Lagankhel'),(46,'Babin','Poudel','Male','babin@gmail.com','9865432765','Duwakot');
/*!40000 ALTER TABLE `inform` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `course` (
  `id` int NOT NULL AUTO_INCREMENT,
  `day` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `subject` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `faculties` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `faculty` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES (14,'Monday','9:00 am -- 9:30 am','Math','Aaliya Khatri','BCA'),(19,'Wednesday','6:30 am -- 7:30 am','C programming','Sauzanya Poudel','BBA'),(27,'Monday','6:30 am -- 7:30 am','Java','Aaliya Khatri','BCA'),(29,'Sunday','7:30 am -- 8:30 am','Java','Raju Kc','BCA'),(30,'Sunday','6:30 am -- 7:30 am','Math','Nishan Khatiwoda','BCA'),(31,'Sunday','7:30 am -- 8:30 am','C programming','Nishan Khatiwoda','BBA'),(32,'Monday','7:30 am -- 8:30 am','Java','Aaliya Khatri','BCA'),(33,'Monday','9:30 am -- 10:30 am','Opt math','Aaliya Khatri','BCA'),(34,'Tuesday','9:30 am -- 10:30 am','Math','Aaliya Khatri','BCA'),(35,'Tuesday','7:30 am -- 8:30 am','Opt math','Aaliya Khatri','BCA');
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `user_type` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (31,'2024-10-19 08:38PM','Nishan Khatiwoda','user@user.com','1a1dc91c907325c69271ddf0c944bc72','User'),(32,'2024-10-15 08:39PM','Grishma Khatri','admin@admin.com','1a1dc91c907325c69271ddf0c944bc72','Admin'),(34,'2024-11-15 08:26AM','Nirmala@gmail.com','nirmala@gmail.com','1a1dc91c907325c69271ddf0c944bc72','Admin'),(36,'2024-11-25 07:42AM','Sabin Budathoki','sabin@gmail.com','1a1dc91c907325c69271ddf0c944bc72','User'),(37,'2024-11-25 10:48AM','Babin Poudel','babin@gmail.com','1a1dc91c907325c69271ddf0c944bc72','User');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notify`
--

DROP TABLE IF EXISTS `notify`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notify` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `notification` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notify`
--

LOCK TABLES `notify` WRITE;
/*!40000 ALTER TABLE `notify` DISABLE KEYS */;
INSERT INTO `notify` VALUES (26,'2024-10-30 09:36PM','Please Check Course Schedule'),(27,'2024-11-15 08:28AM','Please Check Message'),(28,'2024-11-18 10:35AM','Please Check Course Schedule'),(29,'2024-11-18 01:19PM','Please Check Exam Schedule');
/*!40000 ALTER TABLE `notify` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-12-01 23:17:36
