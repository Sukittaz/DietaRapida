CREATE DATABASE  IF NOT EXISTS `dieta` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dieta`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: dieta
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `amount`
--

DROP TABLE IF EXISTS `amount`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `amount` (
  `AmountID` int(11) NOT NULL AUTO_INCREMENT,
  `AmountName` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`AmountID`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `amount`
--

LOCK TABLES `amount` WRITE;
/*!40000 ALTER TABLE `amount` DISABLE KEYS */;
INSERT INTO `amount` VALUES (7,'Meia colher'),(8,'Gramas'),(6,'Colher '),(9,'Ml'),(11,'Caps'),(12,'Comprimido');
/*!40000 ALTER TABLE `amount` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `diet`
--

DROP TABLE IF EXISTS `diet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `diet` (
  `DietID` int(11) NOT NULL AUTO_INCREMENT,
  `DietName` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  PRIMARY KEY (`DietID`),
  KEY `UserID_idx` (`UserID`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diet`
--

LOCK TABLES `diet` WRITE;
/*!40000 ALTER TABLE `diet` DISABLE KEYS */;
INSERT INTO `diet` VALUES (81,'Dieta',5);
/*!40000 ALTER TABLE `diet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dietmeal`
--

DROP TABLE IF EXISTS `dietmeal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dietmeal` (
  `DietID` int(11) NOT NULL,
  `MealID` int(11) NOT NULL,
  `Ordered` int(255) NOT NULL,
  KEY `DietID_idx` (`DietID`),
  KEY `MealID_idx` (`MealID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dietmeal`
--

LOCK TABLES `dietmeal` WRITE;
/*!40000 ALTER TABLE `dietmeal` DISABLE KEYS */;
INSERT INTO `dietmeal` VALUES (81,149,1),(81,148,2);
/*!40000 ALTER TABLE `dietmeal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `food`
--

DROP TABLE IF EXISTS `food`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `food` (
  `FoodID` int(11) NOT NULL AUTO_INCREMENT,
  `FoodName` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `FoodCal` int(11) NOT NULL,
  `FoodCarbo` int(11) NOT NULL,
  `FoodProtein` int(11) NOT NULL,
  `FoodFat` int(11) NOT NULL,
  `FoodRefAmount` int(11) NOT NULL,
  `AmountID` int(11) NOT NULL,
  PRIMARY KEY (`FoodID`),
  KEY `AmountID_idx` (`AmountID`)
) ENGINE=MyISAM AUTO_INCREMENT=114 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `food`
--

LOCK TABLES `food` WRITE;
/*!40000 ALTER TABLE `food` DISABLE KEYS */;
INSERT INTO `food` VALUES (25,'Feijão Carioca Cozido',76,14,5,1,100,8),(26,'Bifé a Cavalo de Contra Filé',291,0,24,21,100,8),(24,'Arroz Carreteiro',154,12,11,7,100,8),(27,'Torrada de Pão francês',377,75,11,3,100,8),(28,'Leite de Vaca Integral',58,5,3,3,100,0),(29,'Peito de Frango',159,0,32,0,100,8),(30,'Alcatra ',241,0,31,5,100,8),(31,'Patinho ',133,0,21,4,100,8),(32,'Batata Doce',53,12,0,0,100,8),(33,'Arroz Integral cozido',124,25,2,0,100,8),(34,'Abacate',204,5,2,19,100,8),(35,'Abacaxi',28,5,0,0,100,8),(99,'Caseina ',128,1,28,0,34,8),(37,'Açucar Mascavo',368,92,0,0,100,8),(38,'Aveia flocos ',328,65,14,1,100,8),(39,'Batata Doce Amarela ',122,28,1,0,100,8),(40,'Batata Doce Roxa ',94,21,1,0,100,8),(41,'Batata Doce Branca',122,28,1,0,100,8),(42,'Brócolis',49,6,4,0,100,8),(43,'Banana',108,25,1,0,100,8),(44,'Camarão Fresco',81,2,17,0,100,8),(45,'Carne de Cabrito',159,0,18,9,100,8),(46,'Carne de Coelho',153,0,20,8,100,8),(47,'Salsilcha de Perú',109,1,8,7,1,10),(48,'Whey Protein ',129,3,24,2,32,8),(49,'Leite Semi Desnatado',79,9,6,2,200,9),(50,'Leite Integral',115,9,6,6,200,9),(51,'Uva Passa',313,16,2,0,100,8),(96,'Clara de Ovo Cozida',17,0,3,0,1,10),(54,'Pão Integral',68,12,2,1,1,10),(58,'Peixe Bagre ',221,0,17,16,100,8),(56,'Peixa Tilapia',93,0,19,1,100,8),(57,'Peixa Tilapia',93,0,19,1,100,8),(59,'Pipoca ',373,74,9,4,100,8),(60,'Queijo Branco Fresco',300,3,18,24,100,8),(61,'Queijo Parmesão',337,3,34,21,100,8),(62,'Rá',68,0,16,0,100,8),(63,'Sardinha Fresca ',269,0,23,19,100,8),(64,'Sardinha Enlatada ',312,0,20,25,100,8),(66,'Coração de Frango',207,0,22,12,100,8),(67,'Moela de Frango',154,0,30,2,100,8),(68,'Moela de Frango',154,0,30,2,100,8),(69,'Frango Coxa ',199,0,24,10,100,8),(70,'Ihame ',116,27,1,0,100,8),(71,'Picanha ',213,0,18,14,100,8),(72,'Coxão Mole',169,0,21,8,100,8),(73,'Contra Filé',297,0,26,20,100,8),(74,'Quinoa',336,68,12,6,100,8),(75,'Ervilha ',79,12,6,0,100,8),(76,'Castanha ',26,0,0,2,3,10),(77,'Nozes ',97,2,2,9,3,10),(78,'Tapioca ',240,54,3,0,100,8),(79,'Peito de Perú',120,2,22,2,100,8),(80,'Atum Enlatado',105,0,15,5,100,8),(81,'Ameixa Seca ',35,9,0,0,3,10),(82,'Morango',6,1,0,0,3,10),(83,'Pasta de Amendoin',89,3,4,7,15,8),(84,'Bcaa',12,0,0,0,4,10),(85,'Proteina Micelar ',220,41,12,0,60,8),(86,'Albumina',72,1,17,0,21,8),(87,'Dextrose ',100,25,0,0,25,8),(88,'Café preto',2,0,0,0,180,9),(89,'Suco de Laranja ',142,32,0,0,300,9),(90,'Suco Clight',0,1,0,0,300,9),(91,'Coca Cola Zero ',0,0,0,0,300,9),(92,'Aguá Mineral ',0,0,0,0,300,9),(93,'Chá',2,0,0,0,300,9),(94,'Salmão',164,0,24,5,100,8),(95,'Ricota',139,3,12,4,100,8),(97,'Macarrão Integral Cozido',124,26,5,0,100,8),(98,'Tapioca ',240,54,3,0,100,8),(100,'Bolacha Aguá e Sal',88,13,2,2,4,10),(102,'Azeite de Oliva Extra Virgem',98,0,0,11,1,6),(103,'Leite Desnatado',61,9,6,0,200,8),(104,'Ômega 3 ',27,0,0,3,3,11),(105,'Vitamína C',0,0,0,0,1,10),(106,'Polivitaminico',0,0,0,0,1,12),(107,'Metformina 500 Mg',0,0,0,0,1,12),(108,'Glutamina',20,0,5,0,5,8),(109,'Filé Mignon',219,0,32,4,100,8),(110,'Banana da Terra ',218,57,2,0,1,10),(111,'Frango,Patinho,Alcatra,Peixe td Grelhado ',0,0,32,6,100,0);
/*!40000 ALTER TABLE `food` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meal`
--

DROP TABLE IF EXISTS `meal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meal` (
  `MealID` int(11) NOT NULL AUTO_INCREMENT,
  `MealName` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `obj` int(11) NOT NULL,
  PRIMARY KEY (`MealID`),
  KEY `obj_fk` (`obj`)
) ENGINE=MyISAM AUTO_INCREMENT=150 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meal`
--

LOCK TABLES `meal` WRITE;
/*!40000 ALTER TABLE `meal` DISABLE KEYS */;
INSERT INTO `meal` VALUES (149,'Janta',4),(148,'Almoço',6);
/*!40000 ALTER TABLE `meal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mealfood`
--

DROP TABLE IF EXISTS `mealfood`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mealfood` (
  `FoodID` int(11) NOT NULL,
  `MealID` int(11) NOT NULL,
  `FoodAmount` int(11) DEFAULT NULL,
  KEY `FoodID_idx` (`FoodID`),
  KEY `MealID_idx` (`MealID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mealfood`
--

LOCK TABLES `mealfood` WRITE;
/*!40000 ALTER TABLE `mealfood` DISABLE KEYS */;
INSERT INTO `mealfood` VALUES (25,149,12),(37,148,2342),(24,148,234),(88,149,345),(26,149,234),(90,148,11),(25,148,23);
/*!40000 ALTER TABLE `mealfood` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `objective`
--

DROP TABLE IF EXISTS `objective`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `objective` (
  `ObjectiveID` int(11) NOT NULL AUTO_INCREMENT,
  `ObjectiveName` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ObjectiveID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `objective`
--

LOCK TABLES `objective` WRITE;
/*!40000 ALTER TABLE `objective` DISABLE KEYS */;
INSERT INTO `objective` VALUES (4,'Hipertrofia '),(5,'Emagrecimento'),(6,'Saúde e Qualidade de Vida '),(7,'Tonificação Muscular '),(8,'Mudança de Hábito'),(9,'Fortalecimento Muscular '),(11,'Off Season '),(12,'Pré Contest');
/*!40000 ALTER TABLE `objective` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `UserLogin` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `UserPass` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `UserName` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UserAge` int(11) DEFAULT NULL,
  `UserSex` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `UserMetabolism` int(11) DEFAULT NULL,
  `ObjectiveID` int(11) DEFAULT NULL,
  PRIMARY KEY (`UserID`),
  KEY `Objective_idx` (`ObjectiveID`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Willian','123','Willian',18,'Masculino',200,NULL),(5,'Paulo','123','Paulo',NULL,'Masculino',1,1),(25,NULL,NULL,'Anderson K.',23,'Masculino',2569,4),(26,NULL,NULL,'Silvia Ramiro',25,'Feminino',1848,4),(27,NULL,NULL,'Leonardo Bauer ',25,'Masculino',2160,4),(28,NULL,NULL,'Jessica Miranda ',21,'Feminino',1736,7);
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

-- Dump completed on 2017-10-02 18:03:53
