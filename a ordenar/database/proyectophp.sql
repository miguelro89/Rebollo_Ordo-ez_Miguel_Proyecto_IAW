-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: proyectophp
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.16-MariaDB

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
-- Table structure for table `canciones`
--


-- Hay que crear antes la base de datos con create database proyectophp; y luego importar

DROP TABLE IF EXISTS `canciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `canciones` (
  `id_cancion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_cancion` varchar(45) NOT NULL,
  `autores` varchar(45) NOT NULL,
  `ao_publicacion` date DEFAULT NULL,
  `id_genero` varchar(45) NOT NULL,
  `enlace_youtube` varchar(45) NOT NULL,
  `puesto` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_cancion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `canciones`
--

LOCK TABLES `canciones` WRITE;
/*!40000 ALTER TABLE `canciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `canciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `es`
--

DROP TABLE IF EXISTS `es`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `es` (
  `genero_musical_tipo_cancion` varchar(50) NOT NULL,
  `canciones_id_cancion` int(11) NOT NULL,
  KEY `fk_es_genero_musical_idx` (`genero_musical_tipo_cancion`),
  KEY `fk_es_canciones1_idx` (`canciones_id_cancion`),
  CONSTRAINT `fk_es_canciones1` FOREIGN KEY (`canciones_id_cancion`) REFERENCES `canciones` (`id_cancion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_es_genero_musical` FOREIGN KEY (`genero_musical_tipo_cancion`) REFERENCES `genero_musical` (`tipo_cancion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `es`
--

LOCK TABLES `es` WRITE;
/*!40000 ALTER TABLE `es` DISABLE KEYS */;
/*!40000 ALTER TABLE `es` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventos`
--

DROP TABLE IF EXISTS `eventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eventos` (
  `festivales` varchar(25) NOT NULL,
  `conciertos` varchar(45) NOT NULL,
  `noticias_imp` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos`
--

LOCK TABLES `eventos` WRITE;
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genero_musical`
--

DROP TABLE IF EXISTS `genero_musical`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genero_musical` (
  `tipo_cancion` varchar(50) NOT NULL,
  PRIMARY KEY (`tipo_cancion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genero_musical`
--

LOCK TABLES `genero_musical` WRITE;
/*!40000 ALTER TABLE `genero_musical` DISABLE KEYS */;
/*!40000 ALTER TABLE `genero_musical` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hacen`
--

DROP TABLE IF EXISTS `hacen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hacen` (
  `canciones_id_cancion` int(11) NOT NULL,
  `usuarios_cod_usuario` int(11) NOT NULL,
  KEY `fk_table1_canciones1_idx` (`canciones_id_cancion`),
  KEY `fk_hacen_usuarios1_idx` (`usuarios_cod_usuario`),
  CONSTRAINT `fk_hacen_usuarios1` FOREIGN KEY (`usuarios_cod_usuario`) REFERENCES `usuarios` (`cod_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_table1_canciones1` FOREIGN KEY (`canciones_id_cancion`) REFERENCES `canciones` (`id_cancion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hacen`
--

LOCK TABLES `hacen` WRITE;
/*!40000 ALTER TABLE `hacen` DISABLE KEYS */;
/*!40000 ALTER TABLE `hacen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `cod_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `correo_electronico` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`cod_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `valorar`
--

DROP TABLE IF EXISTS `valorar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `valorar` (
  `usuarios_cod_usuario` int(11) NOT NULL,
  `canciones_id_cancion` int(11) NOT NULL,
  `nota` int(11) DEFAULT NULL,
  KEY `fk_valorar_usuarios1_idx` (`usuarios_cod_usuario`),
  KEY `fk_valorar_canciones1_idx` (`canciones_id_cancion`),
  CONSTRAINT `fk_valorar_canciones1` FOREIGN KEY (`canciones_id_cancion`) REFERENCES `canciones` (`id_cancion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_valorar_usuarios1` FOREIGN KEY (`usuarios_cod_usuario`) REFERENCES `usuarios` (`cod_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `valorar`
--

LOCK TABLES `valorar` WRITE;
/*!40000 ALTER TABLE `valorar` DISABLE KEYS */;
/*!40000 ALTER TABLE `valorar` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-30 11:37:22
