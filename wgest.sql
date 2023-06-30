CREATE DATABASE  IF NOT EXISTS `wsgest` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `wsgest`;
-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: wsgest
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `empresas`
--

DROP TABLE IF EXISTS `empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empresas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `designacaosocial` varchar(30) NOT NULL,
  `email` varchar(80) NOT NULL,
  `telefone` int NOT NULL,
  `nif` int NOT NULL,
  `morada` varchar(70) NOT NULL,
  `codigopostal` varchar(10) NOT NULL,
  `localidade` varchar(60) NOT NULL,
  `capitalsocial` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas`
--

LOCK TABLES `empresas` WRITE;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
INSERT INTO `empresas` VALUES (3,'Oficina do Zé','oficina.ze@gmail.com',282695800,134508137,'Rua das flores amarelas com pintas','2400-019','Leiria',1000000);
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `folha_obras`
--

DROP TABLE IF EXISTS `folha_obras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `folha_obras` (
  `id` int NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `valortotal` float NOT NULL,
  `ivatotal` float NOT NULL,
  `estado` varchar(20) NOT NULL,
  `user_id` int NOT NULL,
  `cliente_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_folhasobras_users1_idx` (`user_id`),
  KEY `fk_folhasobras_users2_idx` (`cliente_id`),
  CONSTRAINT `fk_folhasobras_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `fk_folhasobras_users2` FOREIGN KEY (`cliente_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `folha_obras`
--

LOCK TABLES `folha_obras` WRITE;
/*!40000 ALTER TABLE `folha_obras` DISABLE KEYS */;
INSERT INTO `folha_obras` VALUES (51,'2023-06-29',462,62,'Em lançamento',11,18),(52,'2023-06-29',0,0,'Em lançamento',11,12),(53,'2023-06-29',1156.2,216.2,'Emitida',11,12),(54,'2023-06-29',264.45,49.45,'Emitida',11,15),(55,'2023-06-29',2565.3,455.3,'Paga',11,18),(56,'2023-06-29',325.95,60.95,'Paga',11,18),(57,'2023-06-29',486.6,66.6,'Emitida',16,15),(58,'2023-06-29',671.1,101.1,'Emitida',11,12),(59,'2023-06-29',1519.8,259.8,'Emitida',11,12);
/*!40000 ALTER TABLE `folha_obras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ivas`
--

DROP TABLE IF EXISTS `ivas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ivas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `percentagem` int NOT NULL,
  `descricao` varchar(80) NOT NULL,
  `vigor` tinyint NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ivas`
--

LOCK TABLES `ivas` WRITE;
/*!40000 ALTER TABLE `ivas` DISABLE KEYS */;
INSERT INTO `ivas` VALUES (7,0,'IVA Zero',0),(8,23,'Taxa Normal',1),(9,13,'Taxa Intremédia',1),(10,6,'Taxa Reduzida',1);
/*!40000 ALTER TABLE `ivas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `linhas_obras`
--

DROP TABLE IF EXISTS `linhas_obras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `linhas_obras` (
  `id` int NOT NULL AUTO_INCREMENT,
  `quantidade` int NOT NULL,
  `valorunitario` float NOT NULL,
  `valoriva` float NOT NULL,
  `folhaobra_id` int NOT NULL,
  `servico_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_linhasobras_folhasobras_idx` (`folhaobra_id`),
  KEY `fk_linhasobras_servicos1_idx` (`servico_id`),
  CONSTRAINT `fk_linhasobras_folhasobras` FOREIGN KEY (`folhaobra_id`) REFERENCES `folha_obras` (`id`),
  CONSTRAINT `fk_linhasobras_servicos1` FOREIGN KEY (`servico_id`) REFERENCES `servicos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `linhas_obras`
--

LOCK TABLES `linhas_obras` WRITE;
/*!40000 ALTER TABLE `linhas_obras` DISABLE KEYS */;
INSERT INTO `linhas_obras` VALUES (51,1,300,39,51,10),(52,1,50,11.5,51,5),(53,1,50,11.5,51,8),(54,2,20,9.2,53,7),(55,8,100,184,53,4),(56,1,100,23,53,11),(57,2,50,23,54,5),(58,1,15,3.45,54,6),(59,1,100,23,54,11),(60,1,760,174.8,55,9),(61,1,50,11.5,55,8),(62,10,100,230,55,4),(63,1,300,39,55,10),(64,1,50,11.5,56,8),(65,1,100,23,56,4),(66,1,100,23,56,11),(67,1,15,3.45,56,6),(68,1,20,4.6,57,7),(69,1,300,39,57,10),(70,1,100,23,57,4),(71,1,20,4.6,58,7),(72,1,300,39,58,10),(73,1,100,23,58,11),(74,1,100,23,58,4),(75,1,50,11.5,58,5),(76,1,300,39,59,10),(77,1,100,23,59,11),(78,1,100,23,59,4),(79,1,760,174.8,59,9);
/*!40000 ALTER TABLE `linhas_obras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicos`
--

DROP TABLE IF EXISTS `servicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `servicos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `referencia` int NOT NULL,
  `descricao` varchar(80) NOT NULL,
  `valorunitario` float NOT NULL,
  `iva_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_servicos_ivas1_idx` (`iva_id`),
  CONSTRAINT `fk_servicos_ivas1` FOREIGN KEY (`iva_id`) REFERENCES `ivas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicos`
--

LOCK TABLES `servicos` WRITE;
/*!40000 ALTER TABLE `servicos` DISABLE KEYS */;
INSERT INTO `servicos` VALUES (4,100,'Pintura',100,8),(5,101,'Mudança de óleo e filtro',50,8),(6,104,'Limpeza de Vidros',15,8),(7,107,'Aspiração dos Estofes',20,8),(8,11,'Troca de Bateria',50,8),(9,109,'Troca de Transmissão',760,8),(10,143,'Troca de Pastilhas de Travões',300,9),(11,186,'Troca das Escovas do Para-brisa',100,8);
/*!40000 ALTER TABLE `servicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefone` int NOT NULL,
  `nif` int NOT NULL,
  `morada` varchar(80) NOT NULL,
  `codigopostal` varchar(8) NOT NULL,
  `localidade` varchar(30) NOT NULL,
  `role` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (11,'admin','123','email@gmail.com',916525255,123456789,'morada','8650-145','Figueira','admin'),(12,'JoaoPinheiro','123','joao.pinheiro@gmail.com',915251519,175563682,'Rua Santa Clara nº 605','2400-019','Leiria','cliente'),(13,'André','123','sintrajoao14@gmail.com',915251519,123456778,'Rua Santa Clara nº 605 2º Frente','2400-019','Leiria','funcionario'),(14,'RubenAmaral','123','ruben.amaral@gmail.com',915251519,123456784,'Rua das Mariposas nº1','2400-019','Leiria','cliente'),(15,'Tiago','123','tiago@gmail.com',915251519,987654321,'Rua dos Pescadores','2400-019','Leiria','cliente'),(16,'Rafael2','1234','rafael2@gmail.com',976437382,763537933,'Rua do Choco','2400-019','Leiria','funcionario'),(17,'Ana','123','ana@email.com',973453736,976432744,'Rua Santa Maria','2400-019','Leiria','funcionario'),(18,'Amandio','123','amandio@imail.com',915251519,564554673,'Rua das Cascatas','2400-019','Leiria','cliente');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-29  8:58:06
