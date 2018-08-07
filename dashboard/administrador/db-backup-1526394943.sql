

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

INSERT INTO administrador VALUES("2","alejandro Ernesto","mejia Rodriguez","alejo@gmail.com","$2y$10$jwjcY5bW77tWJ97yKvNN7OTOSUkNX6wKw695FQIKae704lNypCshG","1","1");
INSERT INTO administrador VALUES("3","dante","gebel","alox@gmail.com","$2y$10$krb3p93oDyjDUXhZ51CByeSGxx/JhkpoSenl7rtPLv3DI0q9pOo9y","12345678","2");
INSERT INTO administrador VALUES("4","Carlos","Nuñez","nunez@hotmail.com","$2y$10$FbzXpmxWoGmADNJB7Nx2iefGouTFvIb5zbJdglwpBdVgnk7.F7ciW","14253614","2");
INSERT INTO administrador VALUES("6","Andres Oswaldo","Henriquez Gomez","andresdosmil@gmail.com","$2y$10$58fu6BtVcnBNjljlsJ/B0.ISC528EGCiaXqSX4lf6uRUXCOWLLJYK","22777777","2");
INSERT INTO administrador VALUES("8","Morro","Morrito","aloxi@gmail.com","$2y$10$sVYkC3Lk3TrJt5YTCkbYpOthZCWsg0F2..B4VC4y3RospgX/JylBu","1","2");





CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion_categoria` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_categoria`),
  UNIQUE KEY `nombre_categoria` (`nombre_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO categoria VALUES("1","Peliculas","mirar diferentes medios en Internet");
INSERT INTO categoria VALUES("2","Videojuegos","Vivir la adrenalina en cada partida");
INSERT INTO categoria VALUES("3","Compras en linea","disfruta de los productos");
INSERT INTO categoria VALUES("4","Musica","Escuchar diferentes géneros de música");
INSERT INTO categoria VALUES("5","comida en linea","poder pedir comida en linea facil y rapido");





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

INSERT INTO cliente VALUES("1","alejandro","mejia","alejo@gmail.com","$2y$10$vbgnoKWvaqm9f5xREnxQjeD1A9WXCh22n1cnHGRTnq.XRZZxxshAO","12345678","0","0");
INSERT INTO cliente VALUES("2","jimmy ","rodriguez","jimmyguao@gmail.com","diostodopoderoso","12345678","0","0");
INSERT INTO cliente VALUES("3","alejandro","mejia","buenas@gmail.com","$2y$10$PTihHuuHC5E7c0ekH35Cle.98s9S0G5QuDh8EuYwn84wKHsqMgnba","12345678","1","0");
INSERT INTO cliente VALUES("4","alejo","mejia","drax@gmail.com","$2y$10$ds06n4/9vhbtLo/JTE/hMeMsPWJGJiOYmlKbGkyT3mwVmd/zJ4iuS","12345678","0","0");
INSERT INTO cliente VALUES("5","daniela","elias","daniela@gmail.com","$2y$10$ds06n4/9vhbtLo/JTE/hMeMsPWJGJiOYmlKbGkyT3mwVmd/zJ4iuS","45124563","1","0");
INSERT INTO cliente VALUES("7","Daysi","Ramirez","daysi@gmail.com","$2y$10$q80/Gu6a0a.EwcbnZObQquU9GEhGfQGmmg0zVg0Vto7BhAT32FLHm","8","1","0");



