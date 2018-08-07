-- MySQL dump 10.16  Distrib 10.1.30-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: gcclassic-prueba
-- ------------------------------------------------------
-- Server version	10.1.30-MariaDB

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
-- Table structure for table `administrador`
--

DROP TABLE IF EXISTS `administrador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administrador` (
  `id_admin` int(100) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `contraseña` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `id_tipousuario` int(11) NOT NULL,
  PRIMARY KEY (`id_admin`),
  UNIQUE KEY `correo` (`correo`),
  KEY `id_tipousuario` (`id_tipousuario`),
  CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`id_tipousuario`) REFERENCES `tipo_usuario` (`id_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrador`
--

LOCK TABLES `administrador` WRITE;
/*!40000 ALTER TABLE `administrador` DISABLE KEYS */;
INSERT INTO `administrador` VALUES (2,'alejandro Ernesto','mejia Rodriguez','alejo@gmail.com','$2y$10$jwjcY5bW77tWJ97yKvNN7OTOSUkNX6wKw695FQIKae704lNypCshG','1',1),(3,'dante','gebel','alox@gmail.com','$2y$10$krb3p93oDyjDUXhZ51CByeSGxx/JhkpoSenl7rtPLv3DI0q9pOo9y','12345678',2),(4,'Carlos','Nuñez','nunez@hotmail.com','$2y$10$FbzXpmxWoGmADNJB7Nx2iefGouTFvIb5zbJdglwpBdVgnk7.F7ciW','14253614',2),(6,'Andres Oswaldo','Henriquez Gomez','andresdosmil@gmail.com','$2y$10$58fu6BtVcnBNjljlsJ/B0.ISC528EGCiaXqSX4lf6uRUXCOWLLJYK','22777777',2),(8,'Morro','Morrito','aloxi@gmail.com','$2y$10$sVYkC3Lk3TrJt5YTCkbYpOthZCWsg0F2..B4VC4y3RospgX/JylBu','1',2);
/*!40000 ALTER TABLE `administrador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion_categoria` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_categoria`),
  UNIQUE KEY `nombre_categoria` (`nombre_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (1,'Peliculas','mirar diferentes medios en Internet'),(2,'Videojuegos','Vivir la adrenalina en cada partida'),(3,'Compras en linea','disfruta de los productos'),(4,'Musica','Escuchar diferentes géneros de música'),(5,'comida en linea','poder pedir comida en linea facil y rapido');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_cliente` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(8) NOT NULL,
  `genero` tinyint(1) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_cliente`),
  UNIQUE KEY `correo` (`correo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,'alejandro','mejia','alejo@gmail.com','$2y$10$vbgnoKWvaqm9f5xREnxQjeD1A9WXCh22n1cnHGRTnq.XRZZxxshAO',12345678,0,0),(2,'jimmy ','rodriguez','jimmyguao@gmail.com','diostodopoderoso',12345678,0,0),(3,'alejandro','mejia','buenas@gmail.com','$2y$10$PTihHuuHC5E7c0ekH35Cle.98s9S0G5QuDh8EuYwn84wKHsqMgnba',12345678,1,0),(4,'alejo','mejia','drax@gmail.com','$2y$10$ds06n4/9vhbtLo/JTE/hMeMsPWJGJiOYmlKbGkyT3mwVmd/zJ4iuS',12345678,0,0),(5,'daniela','elias','daniela@gmail.com','$2y$10$ds06n4/9vhbtLo/JTE/hMeMsPWJGJiOYmlKbGkyT3mwVmd/zJ4iuS',45124563,1,0),(7,'Daysi','Ramirez','daysi@gmail.com','$2y$10$q80/Gu6a0a.EwcbnZObQquU9GEhGfQGmmg0zVg0Vto7BhAT32FLHm',8,1,0);
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalle_factura`
--

DROP TABLE IF EXISTS `detalle_factura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalle_factura` (
  `id_detalle` int(100) NOT NULL AUTO_INCREMENT,
  `fk_id_venta` int(100) DEFAULT NULL,
  `fk_id_producto` int(100) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `subtotal` decimal(6,2) NOT NULL,
  `fk_id_cliente` int(11) NOT NULL,
  `estadoventa` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_detalle`),
  KEY `fk_id_producto` (`fk_id_producto`),
  KEY `fk_id_venta` (`fk_id_venta`),
  KEY `fk_id_cliente` (`fk_id_cliente`),
  CONSTRAINT `detalle_factura_ibfk_1` FOREIGN KEY (`fk_id_producto`) REFERENCES `productos` (`id_producto`),
  CONSTRAINT `detalle_factura_ibfk_2` FOREIGN KEY (`fk_id_venta`) REFERENCES `venta` (`id_venta`),
  CONSTRAINT `detalle_factura_ibfk_3` FOREIGN KEY (`fk_id_cliente`) REFERENCES `cliente` (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle_factura`
--

LOCK TABLES `detalle_factura` WRITE;
/*!40000 ALTER TABLE `detalle_factura` DISABLE KEYS */;
INSERT INTO `detalle_factura` VALUES (1,1,1,5,50.00,1,1),(2,1,2,5,50.00,1,1),(5,3,3,5,50.00,4,1),(7,2,1,5,50.00,4,1),(8,1,1,5,50.00,1,1),(12,1,2,5,50.00,1,1),(13,1,1,5,50.00,1,1),(15,NULL,15,5,50.00,5,0),(17,NULL,18,5,50.00,4,0),(18,NULL,2,5,50.00,7,0),(19,NULL,1,2,10.00,7,0);
/*!40000 ALTER TABLE `detalle_factura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `id_producto` int(100) NOT NULL AUTO_INCREMENT,
  `fk_id_proveedor` int(100) NOT NULL,
  `fk_id_categoria` int(100) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `precio` decimal(5,2) NOT NULL,
  `existencia` int(11) NOT NULL,
  `descuento` decimal(5,2) DEFAULT NULL,
  `imagen` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `fk_id_categoria` (`fk_id_categoria`),
  KEY `fk_id_proveedor` (`fk_id_proveedor`),
  CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`fk_id_categoria`) REFERENCES `categoria` (`id_categoria`),
  CONSTRAINT `productos_ibfk_3` FOREIGN KEY (`fk_id_proveedor`) REFERENCES `proveedor` (`id_proveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,3,1,'Netflix','tarjeta netflix',5.00,17,0.50,'netflix.png',1),(2,1,3,'google play','buena para apps',10.00,9,2.00,'playstore.png',1),(3,6,2,'Nintendo eShop','tarjeta de compra online',5.00,10,0.00,'nintendo.jpg',1),(4,6,2,'Nintendo eShop','card',10.00,10,0.00,'nintendo.jpg',1),(5,5,2,'Xbox live','tarjeta de compra online',5.00,5,0.00,'xbox.png',1),(6,5,2,'Xbox live','card',10.00,2,0.00,'xbox.png',1),(7,4,2,'play station Store','PS store',5.00,20,0.00,'playstation.jpg',1),(8,4,2,'play station Store','PS store',10.00,10,0.00,'playstation.jpg',1),(9,4,2,'play station Store','PS store',15.00,5,0.00,'playstation.jpg',1),(15,12,4,'iTunes music','musica',10.00,3,0.50,'iTunes.jpg',1),(16,12,4,'iMusic','musica ',25.00,5,0.50,'iTunes.jpg',1),(17,12,4,'iMusic','musica ',30.00,5,0.50,'iTunes.jpg',1),(18,13,5,'HUPO APP','pedir comida en linea facil y rapido',50.00,5,0.00,'5af023f944462.png',1);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proveedor`
--

DROP TABLE IF EXISTS `proveedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_proveedor` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(8) NOT NULL,
  PRIMARY KEY (`id_proveedor`),
  UNIQUE KEY `correo` (`correo`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedor`
--

LOCK TABLES `proveedor` WRITE;
/*!40000 ALTER TABLE `proveedor` DISABLE KEYS */;
INSERT INTO `proveedor` VALUES (1,'Netflix','netflix@contacto.com',0),(2,'Amazon','Amazoncontact@gmail.com',51245685),(3,'Google Play','googley_play@contacto.com',45857596),(4,'play station','contact@gmail.com',12345678),(5,'xbox','contact.xbox@gmail.com',12345678),(6,'Nintendo','nintendo.contactq@gmail.com',12453652),(12,'apple','a@gmail.com',12345678),(13,'HUGO APP','contact.hugo@gmail.com',20160351);
/*!40000 ALTER TABLE `proveedor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_usuario`
--

DROP TABLE IF EXISTS `tipo_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_usuario` (
  `id_tipo` int(100) NOT NULL AUTO_INCREMENT,
  `nombre_tipo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_usuario`
--

LOCK TABLES `tipo_usuario` WRITE;
/*!40000 ALTER TABLE `tipo_usuario` DISABLE KEYS */;
INSERT INTO `tipo_usuario` VALUES (1,'Administrador'),(2,'Empleado');
/*!40000 ALTER TABLE `tipo_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `valoracion`
--

DROP TABLE IF EXISTS `valoracion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `valoracion` (
  `id_valoracion` int(11) NOT NULL AUTO_INCREMENT,
  `fk_id_usuario` int(11) NOT NULL,
  `fk_id_producto` int(11) NOT NULL,
  `valoracion` int(11) NOT NULL,
  `comentario` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_valoracion`),
  KEY `fk_id_producto` (`fk_id_producto`),
  KEY `valoracion_ibfk_2` (`fk_id_usuario`),
  CONSTRAINT `valoracion_ibfk_1` FOREIGN KEY (`fk_id_producto`) REFERENCES `productos` (`id_producto`),
  CONSTRAINT `valoracion_ibfk_2` FOREIGN KEY (`fk_id_usuario`) REFERENCES `cliente` (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `valoracion`
--

LOCK TABLES `valoracion` WRITE;
/*!40000 ALTER TABLE `valoracion` DISABLE KEYS */;
INSERT INTO `valoracion` VALUES (1,4,17,5,'muy feliz por mi producto'),(2,2,1,4,'me hubiera gustado mas meses '),(3,2,6,3,'felis, adipiscing fringilla, porttitor vulputate, posuere'),(4,1,3,4,'sociis natoque penatibus'),(5,1,5,1,'lobortis. Class aptent taciti sociosqu'),(6,4,8,5,'elementum at, egestas a, scelerisque sed,'),(7,2,3,1,'lorem lorem, luctus ut, pellentesque'),(8,2,4,3,'ante ipsum primis in'),(9,4,5,2,'elit sed'),(10,4,9,3,'Vestibulum ante ipsum'),(11,2,6,4,'Nunc laoreet lectus quis massa. Mauris'),(12,4,2,1,'lacus. Mauris non dui nec urna'),(13,3,4,1,'pharetra sed,'),(14,2,9,5,'accumsan laoreet ipsum. Curabitur'),(15,4,7,2,'sed, sapien. Nunc pulvinar'),(16,2,9,5,'enim nec tempus scelerisque, lorem'),(17,1,9,3,'et pede. Nunc sed orci'),(18,1,8,4,'in, cursus et, eros. Proin'),(19,2,9,5,'lectus pede, ultrices'),(20,2,3,1,'cubilia Curae; Phasellus ornare. Fusce mollis.'),(21,4,2,3,'tellus'),(22,1,9,5,'vitae erat vel pede'),(23,2,2,2,'non massa non'),(24,2,3,1,'risus odio, auctor'),(25,2,9,3,'lobortis risus. In mi'),(26,4,9,2,'euismod urna.'),(27,4,3,1,'ac mattis semper, dui lectus'),(28,4,2,3,'erat'),(29,2,8,3,'et'),(30,4,8,5,'Maecenas iaculis aliquet diam. Sed'),(31,2,4,2,'sagittis. Duis gravida.'),(32,4,3,5,'augue.'),(33,3,2,5,'enim mi tempor lorem, eget'),(34,1,9,3,'pede, ultrices a,'),(35,1,4,1,'torquent'),(36,4,2,5,'non, bibendum sed, est. Nunc laoreet'),(37,4,9,2,'Etiam ligula tortor,'),(38,4,2,2,'tincidunt nibh. Phasellus nulla. Integer vulputate,'),(39,4,4,4,'semper cursus. Integer mollis. Integer tincidunt'),(40,3,7,1,'at, libero. Morbi accumsan laoreet ipsum.'),(41,4,5,3,'non arcu.'),(42,3,4,3,'Proin non massa non ante'),(43,2,3,3,'dolor. Fusce mi lorem, vehicula et,'),(44,4,1,5,'eleifend egestas. Sed pharetra, felis'),(45,3,6,1,'Phasellus fermentum'),(46,2,5,5,'a, magna. Lorem'),(47,3,2,4,'turpis. Aliquam adipiscing'),(49,4,8,1,'sed, hendrerit a, arcu.'),(50,2,6,3,'lorem'),(52,1,2,4,'orci. Ut sagittis lobortis'),(53,2,3,2,'sit amet metus. Aliquam erat'),(54,3,6,4,'libero mauris, aliquam'),(55,4,9,2,'Ut sagittis lobortis mauris.'),(56,1,2,4,'hendrerit neque. In'),(58,1,4,2,'urna et arcu imperdiet'),(59,4,1,5,'varius ultrices,'),(60,4,5,5,'blandit congue.'),(61,2,5,2,'dapibus quam quis diam.'),(62,3,3,3,'lobortis quis, pede. Suspendisse'),(63,4,8,3,'Nulla'),(64,3,2,4,'Proin sed turpis nec'),(65,4,9,4,'libero. Integer in magna. Phasellus'),(66,2,4,5,'facilisis non, bibendum'),(67,2,1,2,'arcu. Vestibulum'),(68,4,7,5,'fermentum convallis'),(69,1,3,2,'ornare placerat, orci lacus vestibulum lorem,'),(70,4,1,4,'Nunc mauris.'),(71,1,2,5,'enim. Suspendisse aliquet, sem ut'),(72,1,1,4,'eleifend. Cras sed leo. Cras'),(73,2,9,5,'metus.'),(74,3,5,4,'rutrum eu, ultrices sit amet, risus.'),(75,3,3,1,'parturient montes, nascetur ridiculus'),(76,1,2,3,'a ultricies adipiscing, enim'),(77,3,5,3,'ornare, libero at'),(78,1,8,2,'suscipit, est ac'),(79,2,2,2,'diam nunc, ullamcorper eu,'),(80,1,5,3,'arcu iaculis enim, sit amet'),(81,4,3,4,'Quisque ornare tortor'),(82,2,1,5,'tempor bibendum. Donec felis orci, adipiscing'),(83,2,5,3,'eget, ipsum. Donec sollicitudin adipiscing ligula.'),(84,2,3,3,'ornare sagittis felis.'),(85,1,3,2,'molestie dapibus ligula. Aliquam erat volutpat.'),(86,3,2,5,'malesuada vel, venenatis vel, faucibus id,'),(87,1,3,1,'senectus et netus et'),(88,1,9,1,'euismod enim. Etiam'),(89,2,2,2,'lorem, auctor quis, tristique'),(90,1,2,5,'aliquet. Proin velit.'),(91,3,9,3,'in, hendrerit consectetuer,'),(92,3,7,3,'metus. Vivamus'),(93,1,5,5,'Class aptent taciti sociosqu ad'),(94,1,1,1,'justo. Praesent luctus. Curabitur'),(95,2,6,5,'sociis natoque penatibus et magnis'),(96,2,7,4,'erat, eget tincidunt dui'),(97,3,2,3,'consequat nec, mollis vitae, posuere'),(98,3,5,2,'lectus pede, ultrices a,'),(99,1,7,2,'id, ante. Nunc mauris'),(100,4,8,1,'neque sed sem egestas blandit. Nam'),(101,4,3,3,'urna. Nullam lobortis quam a felis'),(102,3,3,5,'facilisis non, bibendum'),(103,4,1,4,'gracias porque pudiste agregar el comentario te debo una salida linda'),(104,4,1,5,'gracias por el buen servicio'),(105,4,1,5,'sex love and water'),(106,4,16,5,'buena tarjeta wey'),(107,4,16,5,'buena tarjeta wey'),(108,4,15,4,'buena tarjeta'),(109,4,15,5,'hola buenas'),(110,4,16,5,'buenos dias'),(111,4,16,5,'asdfghjklñwertyuio'),(112,4,16,5,'taratartartttarattaratra'),(113,4,16,5,'armin van buuren'),(114,4,16,5,'armin van buuren'),(115,4,16,5,'avicii'),(116,4,16,5,'yeah'),(117,4,15,5,'buenas noches everybody'),(118,4,15,5,'buenas noches everybody'),(119,4,15,5,'buenos dias a todos'),(120,4,15,5,'buenos dias a todos'),(121,4,15,5,'hola'),(122,4,15,5,'hola'),(123,4,15,5,'como estannnnn'),(124,4,17,5,'hola gracias por este servicio'),(125,4,17,5,'gracias por la tarjeta'),(126,4,17,5,'gracias wey'),(127,4,17,1,'no recibi mi codigo porfavor ayuda'),(128,4,17,1,'sex love and water'),(129,4,17,4,'puma energy con certificacion bien paloma'),(130,4,2,5,'buena tarjeta'),(131,4,3,5,'beun jeugsik'),(132,4,1,4,'buenos dias a todos'),(133,4,3,5,'buenas esa prro'),(134,4,3,5,'buenos dias a todos');
/*!40000 ALTER TABLE `valoracion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `venta`
--

DROP TABLE IF EXISTS `venta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `venta` (
  `id_venta` int(100) NOT NULL AUTO_INCREMENT,
  `fk_id_cliente` int(100) NOT NULL,
  `fecha` date NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_venta`),
  KEY `fk_id_usuario` (`fk_id_cliente`),
  CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`fk_id_cliente`) REFERENCES `cliente` (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `venta`
--

LOCK TABLES `venta` WRITE;
/*!40000 ALTER TABLE `venta` DISABLE KEYS */;
INSERT INTO `venta` VALUES (1,1,'2017-10-10',1),(2,4,'2017-11-08',1),(3,4,'2018-05-05',1);
/*!40000 ALTER TABLE `venta` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8_spanish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `restar_existenciaporventa` AFTER INSERT ON `venta` FOR EACH ROW UPDATE productos SET existencia =1 */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-08 14:12:19
