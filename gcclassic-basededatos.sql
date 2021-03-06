-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-08-2018 a las 18:13:21
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gcclassic-prueba`
--
CREATE DATABASE IF NOT EXISTS `gcclassic-prueba` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `gcclassic-prueba`;

DELIMITER $$
--
-- Procedimientos
--
$$

$$

$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_admin` int(100) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `contraseña` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_contraseña` date NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `id_tipousuario` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `fecha_bloqueo` date NOT NULL,
  `fecha_contrasena` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_admin`, `nombre`, `apellido`, `correo`, `contraseña`, `fecha_contraseña`, `telefono`, `id_tipousuario`, `login_id`, `fecha_bloqueo`, `fecha_contrasena`) VALUES
(2, 'alejandro Ernesto', 'mejia Rodriguez', 'alejo@gmail.com', '$2y$10$jwjcY5bW77tWJ97yKvNN7OTOSUkNX6wKw695FQIKae704lNypCshG', '0000-00-00', '12345678', 1, 0, '2018-08-21', '0000-00-00'),
(3, 'dante', 'gebel', 'alox@gmail.com', '$2y$10$krb3p93oDyjDUXhZ51CByeSGxx/JhkpoSenl7rtPLv3DI0q9pOo9y', '0000-00-00', '12345678', 2, 0, '0000-00-00', '0000-00-00'),
(4, 'Carlos', 'Nuñez', 'nunez@hotmail.com', '$2y$10$jwjcY5bW77tWJ97yKvNN7OTOSUkNX6wKw695FQIKae704lNypCshG', '0000-00-00', '14253614', 1, 0, '0000-00-00', '2018-05-07'),
(6, 'Andres Oswaldo', 'Henriquez Gomez', 'andresdosmil@gmail.com', '$2y$10$58fu6BtVcnBNjljlsJ/B0.ISC528EGCiaXqSX4lf6uRUXCOWLLJYK', '0000-00-00', '22777777', 2, 0, '0000-00-00', '0000-00-00'),
(8, 'Morro', 'Morrito', 'aloxi@gmail.com', '$2y$10$sVYkC3Lk3TrJt5YTCkbYpOthZCWsg0F2..B4VC4y3RospgX/JylBu', '0000-00-00', '1', 2, 0, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion_categoria` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`, `descripcion_categoria`) VALUES
(1, 'Peliculas', 'mirar diferentes medios en Internet'),
(2, 'Videojuegos', 'Vivir la adrenalina en cada partida'),
(3, 'Compras en linea', 'disfruta de los productos'),
(4, 'Musica', 'Escuchar diferentes géneros de música'),
(5, 'comida en lineass', 'poder pedir comida en linea facil y rapido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(8) NOT NULL,
  `genero` tinyint(1) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `fecha_contrasena` date NOT NULL,
  `fecha_bloqueo` date NOT NULL,
  `login_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre_cliente`, `apellido`, `correo`, `contrasena`, `telefono`, `genero`, `estado`, `fecha_contrasena`, `fecha_bloqueo`, `login_id`) VALUES
(1, 'alejandro', 'mejia', 'alejo@gmail.com', '$2y$10$vbgnoKWvaqm9f5xREnxQjeD1A9WXCh22n1cnHGRTnq.XRZZxxshAO', 12345678, 0, 0, '0000-00-00', '0000-00-00', 0),
(2, 'jimmy ', 'rodriguez', 'jimmyguao@gmail.com', 'diostodopoderoso', 12345678, 0, 0, '0000-00-00', '0000-00-00', 0),
(3, 'alejandro', 'mejia', 'buenas@gmail.com', '$2y$10$PTihHuuHC5E7c0ekH35Cle.98s9S0G5QuDh8EuYwn84wKHsqMgnba', 12345678, 1, 0, '0000-00-00', '0000-00-00', 0),
(4, 'alejandro', 'mejia', 'drax@gmail.com', '$2y$10$jwjcY5bW77tWJ97yKvNN7OTOSUkNX6wKw695FQIKae704lNypCshG', 12457845, 0, 0, '0000-00-00', '0000-00-00', 0),
(5, 'daniela', 'elias', 'daniela@gmail.com', '$2y$10$ds06n4/9vhbtLo/JTE/hMeMsPWJGJiOYmlKbGkyT3mwVmd/zJ4iuS', 45124563, 1, 0, '0000-00-00', '0000-00-00', 0),
(7, 'Daysi', 'Ramirez', 'daysi@gmail.com', '$2y$10$q80/Gu6a0a.EwcbnZObQquU9GEhGfQGmmg0zVg0Vto7BhAT32FLHm', 8, 1, 0, '0000-00-00', '0000-00-00', 0),
(8, 'Alejandro', 'Mejia', 'alenetoo1999@outlook.com', '$2y$10$RacxDeFid3rj1M3EFaFfeOZ51Sh0pCTccfzr0RMo6T9ejLr92NnJG', 12345678, 0, 0, '2018-07-29', '0000-00-00', 0),
(9, 'gabriela', 'zelada', 'alenetoo1999@gmail.com', '$2y$10$L3MheHhTF8OyjQg3G3kUTum1dJ.soXycYrAG3erHDacQVoVlm5LYa', 78451245, 0, 0, '2018-07-27', '2018-07-28', 0),
(10, 'fatima', 'aguilar', 'andresdosmil@gmail.com', '$2y$10$L3MheHhTF8OyjQg3G3kUTum1dJ.soXycYrAG3erHDacQVoVlm5LYa', 12457885, 0, 0, '2018-07-30', '2018-07-28', 1),
(11, 'Carlos', 'santana', 'Carlos1212@gmail.com', '$2y$10$cCV4ffj6J8XUwV3Pdgtl8OpMB62ep5mLqLLGAAGWX/vGZLumE6Plq', 12457845, 0, 0, '2018-08-20', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factura`
--

CREATE TABLE `detalle_factura` (
  `id_detalle` int(100) NOT NULL,
  `fk_id_venta` int(100) DEFAULT NULL,
  `fk_id_producto` int(100) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `subtotal` decimal(6,2) NOT NULL,
  `fk_id_cliente` int(11) NOT NULL,
  `estadoventa` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `detalle_factura`
--

INSERT INTO `detalle_factura` (`id_detalle`, `fk_id_venta`, `fk_id_producto`, `cantidad`, `subtotal`, `fk_id_cliente`, `estadoventa`) VALUES
(1, 1, 1, 5, '50.00', 1, 1),
(2, 1, 2, 5, '50.00', 1, 1),
(5, 17, 3, 5, '50.00', 4, 1),
(7, 17, 1, 5, '50.00', 4, 1),
(8, 2, 1, 5, '50.00', 1, 1),
(12, 3, 2, 5, '50.00', 1, 1),
(13, 1, 1, 5, '50.00', 1, 1),
(15, 4, 15, 5, '50.00', 5, 1),
(17, 30, 18, 5, '50.00', 4, 1),
(18, 28, 2, 5, '50.00', 7, 1),
(19, 28, 1, 2, '10.00', 7, 1),
(21, 31, 17, 1, '30.00', 4, 1),
(22, 31, 7, 1, '5.00', 4, 1),
(23, 32, 2, 1, '10.00', 4, 1),
(24, 32, 18, 1, '50.00', 4, 1),
(25, 33, 2, 1, '10.00', 10, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `meses`
--

CREATE TABLE `meses` (
  `ID_mes` int(11) NOT NULL,
  `nombre_mes` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `meses`
--

INSERT INTO `meses` (`ID_mes`, `nombre_mes`) VALUES
(1, 'Enero'),
(2, 'Febrero'),
(3, 'Marzo'),
(4, 'Abril'),
(5, 'Mayo'),
(6, 'Junio'),
(7, 'Julio'),
(8, 'Agosto'),
(9, 'Septiembre'),
(10, 'octubre'),
(11, 'Noviembre'),
(12, 'Diciembre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(100) NOT NULL,
  `fk_id_proveedor` int(100) NOT NULL,
  `fk_id_categoria` int(100) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `precio` decimal(5,2) NOT NULL,
  `existencia` int(11) NOT NULL,
  `descuento` decimal(5,2) DEFAULT NULL,
  `imagen` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `fk_id_proveedor`, `fk_id_categoria`, `nombre`, `descripcion`, `precio`, `existencia`, `descuento`, `imagen`, `estado`) VALUES
(1, 3, 1, 'Netflix', 'tarjeta netflix', '5.00', 1, '0.50', 'netflix.png', 1),
(2, 1, 3, 'google play', 'buena para apps', '10.00', 1, '2.00', 'playstore.png', 1),
(3, 6, 2, 'Nintendo eShop', 'tarjeta de compra online', '5.00', 1, '0.00', 'nintendo.jpg', 1),
(4, 6, 2, 'Nintendo eShop', 'card', '10.00', 1, '0.00', 'nintendo.jpg', 1),
(5, 5, 2, 'Xbox live', 'tarjeta de compra online', '5.00', 1, '0.00', 'xbox.png', 1),
(6, 5, 2, 'Xbox live', 'card', '10.00', 1, '0.00', 'xbox.png', 1),
(7, 4, 2, 'play station Store', 'PS store', '5.00', 1, '0.00', 'playstation.jpg', 1),
(8, 4, 2, 'play station Store', 'PS store', '10.00', 1, '0.00', 'playstation.jpg', 1),
(9, 4, 2, 'play station Store', 'PS store', '15.00', 1, '0.00', 'playstation.jpg', 1),
(15, 12, 4, 'iTunes music', 'musica', '10.00', 1, '0.50', 'iTunes.jpg', 1),
(16, 12, 4, 'iMusic', 'musica ', '25.00', 1, '0.50', 'iTunes.jpg', 1),
(17, 12, 4, 'iMusic', 'musica ', '30.00', 1, '0.50', 'iTunes.jpg', 1),
(18, 13, 5, 'HUPO APP', 'pedir comida en linea facil y rapido', '50.00', 1, '0.00', '5af023f944462.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `nombre_proveedor` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombre_proveedor`, `correo`, `telefono`) VALUES
(1, 'Netflix', 'netflix@contacto.com', 0),
(2, 'Amazon', 'Amazoncontact@gmail.com', 51245685),
(3, 'Google Play', 'googley_play@contacto.com', 45857596),
(4, 'play station', 'contact@gmail.com', 12345678),
(5, 'xbox', 'contact.xbox@gmail.com', 12345678),
(6, 'Nintendo', 'nintendo.contactq@gmail.com', 12453652),
(12, 'apple', 'a@gmail.com', 12345678),
(13, 'HUGO APP', 'contact.hugo@gmail.com', 20160351);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo` int(100) NOT NULL,
  `nombre_tipo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `Productos` int(1) DEFAULT NULL,
  `Categorias` int(1) DEFAULT NULL,
  `Proveedores` int(1) DEFAULT NULL,
  `Ventas` int(1) DEFAULT NULL,
  `Clientes` int(1) DEFAULT NULL,
  `Administradores` int(1) DEFAULT NULL,
  `Estadisticas` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipo`, `nombre_tipo`, `Productos`, `Categorias`, `Proveedores`, `Ventas`, `Clientes`, `Administradores`, `Estadisticas`) VALUES
(1, 'Administrador', 0, 1, 1, 1, 1, 1, 1),
(2, 'Empleado', 1, 1, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
  `id_valoracion` int(11) NOT NULL,
  `fk_id_usuario` int(11) NOT NULL,
  `fk_id_producto` int(11) NOT NULL,
  `valoracion` int(11) NOT NULL,
  `comentario` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_valoracion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `valoracion`
--

INSERT INTO `valoracion` (`id_valoracion`, `fk_id_usuario`, `fk_id_producto`, `valoracion`, `comentario`, `fecha_valoracion`) VALUES
(1, 4, 17, 5, 'muy feliz por mi producto', '2018-08-02'),
(2, 2, 1, 4, 'me hubiera gustado mas meses ', '2018-08-02'),
(3, 2, 6, 3, 'felis, adipiscing fringilla, porttitor vulputate, posuere', '2018-08-02'),
(4, 1, 3, 4, 'sociis natoque penatibus', '2018-08-02'),
(5, 1, 5, 1, 'lobortis. Class aptent taciti sociosqu', '2018-08-02'),
(6, 4, 8, 5, 'elementum at, egestas a, scelerisque sed,', '2018-08-02'),
(7, 2, 3, 1, 'lorem lorem, luctus ut, pellentesque', '2018-08-02'),
(8, 2, 4, 3, 'ante ipsum primis in', '2018-08-02'),
(9, 4, 5, 2, 'elit sed', '2018-08-02'),
(10, 4, 9, 3, 'Vestibulum ante ipsum', '2018-08-02'),
(11, 2, 6, 4, 'Nunc laoreet lectus quis massa. Mauris', '2018-08-02'),
(12, 4, 2, 1, 'lacus. Mauris non dui nec urna', '2018-08-02'),
(13, 3, 4, 1, 'pharetra sed,', '2018-08-02'),
(14, 2, 9, 5, 'accumsan laoreet ipsum. Curabitur', '2018-08-02'),
(15, 4, 7, 2, 'sed, sapien. Nunc pulvinar', '2018-08-02'),
(16, 2, 9, 5, 'enim nec tempus scelerisque, lorem', '2018-08-02'),
(17, 1, 9, 3, 'et pede. Nunc sed orci', '2018-08-02'),
(18, 1, 8, 4, 'in, cursus et, eros. Proin', '2018-08-02'),
(19, 2, 9, 5, 'lectus pede, ultrices', '2018-08-02'),
(20, 2, 3, 1, 'cubilia Curae; Phasellus ornare. Fusce mollis.', '2018-08-02'),
(21, 4, 2, 3, 'tellus', '2018-08-02'),
(22, 1, 9, 5, 'vitae erat vel pede', '2018-08-02'),
(23, 2, 2, 2, 'non massa non', '2018-08-02'),
(24, 2, 3, 1, 'risus odio, auctor', '2018-08-02'),
(25, 2, 9, 3, 'lobortis risus. In mi', '2018-08-02'),
(26, 4, 9, 2, 'euismod urna.', '2018-08-02'),
(27, 4, 3, 1, 'ac mattis semper, dui lectus', '2018-08-02'),
(28, 4, 2, 3, 'erat', '2018-08-02'),
(29, 2, 8, 3, 'et', '2018-08-02'),
(30, 4, 8, 5, 'Maecenas iaculis aliquet diam. Sed', '2018-08-02'),
(31, 2, 4, 2, 'sagittis. Duis gravida.', '2018-08-02'),
(32, 4, 3, 5, 'augue.', '2018-08-02'),
(33, 3, 2, 5, 'enim mi tempor lorem, eget', '2018-08-02'),
(34, 1, 9, 3, 'pede, ultrices a,', '2018-08-02'),
(35, 1, 4, 1, 'torquent', '2018-08-02'),
(36, 4, 2, 5, 'non, bibendum sed, est. Nunc laoreet', '2018-08-02'),
(37, 4, 9, 2, 'Etiam ligula tortor,', '2018-08-02'),
(38, 4, 2, 2, 'tincidunt nibh. Phasellus nulla. Integer vulputate,', '2018-08-02'),
(39, 4, 4, 4, 'semper cursus. Integer mollis. Integer tincidunt', '2018-08-02'),
(40, 3, 7, 1, 'at, libero. Morbi accumsan laoreet ipsum.', '2018-08-02'),
(41, 4, 5, 3, 'non arcu.', '2018-08-02'),
(42, 3, 4, 3, 'Proin non massa non ante', '2018-08-02'),
(43, 2, 3, 3, 'dolor. Fusce mi lorem, vehicula et,', '2018-08-02'),
(44, 4, 1, 5, 'eleifend egestas. Sed pharetra, felis', '2018-08-02'),
(45, 3, 6, 1, 'Phasellus fermentum', '2018-08-02'),
(46, 2, 5, 5, 'a, magna. Lorem', '2018-08-02'),
(47, 3, 2, 4, 'turpis. Aliquam adipiscing', '2018-08-02'),
(49, 4, 8, 1, 'sed, hendrerit a, arcu.', '2018-08-02'),
(50, 2, 6, 3, 'lorem', '2018-08-02'),
(52, 1, 2, 4, 'orci. Ut sagittis lobortis', '2018-08-02'),
(53, 2, 3, 2, 'sit amet metus. Aliquam erat', '2018-08-02'),
(54, 3, 6, 4, 'libero mauris, aliquam', '2018-08-02'),
(55, 4, 9, 2, 'Ut sagittis lobortis mauris.', '2018-08-02'),
(56, 1, 2, 4, 'hendrerit neque. In', '2018-08-02'),
(58, 1, 4, 2, 'urna et arcu imperdiet', '2018-08-02'),
(59, 4, 1, 5, 'varius ultrices,', '2018-08-02'),
(60, 4, 5, 5, 'blandit congue.', '2018-08-02'),
(61, 2, 5, 2, 'dapibus quam quis diam.', '2018-08-02'),
(62, 3, 3, 3, 'lobortis quis, pede. Suspendisse', '2018-08-02'),
(63, 4, 8, 3, 'Nulla', '2018-08-02'),
(64, 3, 2, 4, 'Proin sed turpis nec', '2018-08-02'),
(65, 4, 9, 4, 'libero. Integer in magna. Phasellus', '2018-08-02'),
(66, 2, 4, 5, 'facilisis non, bibendum', '2018-08-02'),
(67, 2, 1, 2, 'arcu. Vestibulum', '2018-08-02'),
(68, 4, 7, 5, 'fermentum convallis', '2018-08-02'),
(69, 1, 3, 2, 'ornare placerat, orci lacus vestibulum lorem,', '2018-08-02'),
(70, 4, 1, 4, 'Nunc mauris.', '2018-08-02'),
(71, 1, 2, 5, 'enim. Suspendisse aliquet, sem ut', '2018-08-02'),
(72, 1, 1, 4, 'eleifend. Cras sed leo. Cras', '2018-08-02'),
(73, 2, 9, 5, 'metus.', '2018-08-02'),
(74, 3, 5, 4, 'rutrum eu, ultrices sit amet, risus.', '2018-08-02'),
(75, 3, 3, 1, 'parturient montes, nascetur ridiculus', '2018-08-02'),
(76, 1, 2, 3, 'a ultricies adipiscing, enim', '2018-08-02'),
(77, 3, 5, 3, 'ornare, libero at', '2018-08-02'),
(78, 1, 8, 2, 'suscipit, est ac', '2018-08-02'),
(79, 2, 2, 2, 'diam nunc, ullamcorper eu,', '2018-08-02'),
(80, 1, 5, 3, 'arcu iaculis enim, sit amet', '2018-08-02'),
(81, 4, 3, 4, 'Quisque ornare tortor', '2018-08-02'),
(82, 2, 1, 5, 'tempor bibendum. Donec felis orci, adipiscing', '2018-08-02'),
(83, 2, 5, 3, 'eget, ipsum. Donec sollicitudin adipiscing ligula.', '2018-08-02'),
(84, 2, 3, 3, 'ornare sagittis felis.', '2018-08-02'),
(85, 1, 3, 2, 'molestie dapibus ligula. Aliquam erat volutpat.', '2018-08-02'),
(86, 3, 2, 5, 'malesuada vel, venenatis vel, faucibus id,', '2018-08-02'),
(87, 1, 3, 1, 'senectus et netus et', '2018-08-02'),
(88, 1, 9, 1, 'euismod enim. Etiam', '2018-08-02'),
(89, 2, 2, 2, 'lorem, auctor quis, tristique', '2018-08-02'),
(90, 1, 2, 5, 'aliquet. Proin velit.', '2018-08-02'),
(91, 3, 9, 3, 'in, hendrerit consectetuer,', '2018-08-02'),
(92, 3, 7, 3, 'metus. Vivamus', '2018-08-02'),
(93, 1, 5, 5, 'Class aptent taciti sociosqu ad', '2018-08-02'),
(94, 1, 1, 1, 'justo. Praesent luctus. Curabitur', '2018-08-02'),
(95, 2, 6, 5, 'sociis natoque penatibus et magnis', '2018-08-02'),
(96, 2, 7, 4, 'erat, eget tincidunt dui', '2018-08-02'),
(97, 3, 2, 3, 'consequat nec, mollis vitae, posuere', '2018-08-02'),
(98, 3, 5, 2, 'lectus pede, ultrices a,', '2018-08-02'),
(99, 1, 7, 2, 'id, ante. Nunc mauris', '2018-08-02'),
(100, 4, 8, 1, 'neque sed sem egestas blandit. Nam', '2018-08-02'),
(101, 4, 3, 3, 'urna. Nullam lobortis quam a felis', '2018-08-02'),
(102, 3, 3, 5, 'facilisis non, bibendum', '2018-08-02'),
(103, 4, 1, 4, 'gracias porque pudiste agregar el comentario te debo una salida linda', '2018-08-02'),
(104, 4, 1, 5, 'gracias por el buen servicio', '2018-08-02'),
(105, 4, 1, 5, 'sex love and water', '2018-08-02'),
(106, 4, 16, 5, 'buena tarjeta wey', '2018-08-02'),
(107, 4, 16, 5, 'buena tarjeta wey', '2018-08-02'),
(108, 4, 15, 4, 'buena tarjeta', '2018-08-02'),
(109, 4, 15, 5, 'hola buenas', '2018-08-02'),
(110, 4, 16, 5, 'buenos dias', '2018-08-02'),
(111, 4, 16, 5, 'asdfghjklñwertyuio', '2018-08-02'),
(112, 4, 16, 5, 'taratartartttarattaratra', '2018-08-02'),
(113, 4, 16, 5, 'armin van buuren', '2018-08-02'),
(114, 4, 16, 5, 'armin van buuren', '2018-08-02'),
(115, 4, 16, 5, 'avicii', '2018-08-02'),
(116, 4, 16, 5, 'yeah', '2018-08-02'),
(117, 4, 15, 5, 'buenas noches everybody', '2018-08-02'),
(118, 4, 15, 5, 'buenas noches everybody', '2018-08-02'),
(119, 4, 15, 5, 'buenos dias a todos', '2018-08-02'),
(120, 4, 15, 5, 'buenos dias a todos', '2018-08-02'),
(121, 4, 15, 5, 'hola', '2018-08-02'),
(122, 4, 15, 5, 'hola', '2018-08-02'),
(123, 4, 15, 5, 'como estannnnn', '2018-08-02'),
(124, 4, 17, 5, 'hola gracias por este servicio', '2018-08-02'),
(125, 4, 17, 5, 'gracias por la tarjeta', '2018-08-02'),
(126, 4, 17, 5, 'gracias wey', '2018-08-02'),
(127, 4, 17, 1, 'no recibi mi codigo porfavor ayuda', '2018-08-02'),
(128, 4, 17, 1, 'sex love and water', '2018-08-02'),
(129, 4, 17, 4, 'puma energy con certificacion bien paloma', '2018-08-02'),
(130, 4, 2, 5, 'buena tarjeta', '2018-08-02'),
(131, 4, 3, 5, 'beun jeugsik', '2018-08-02'),
(132, 4, 1, 4, 'buenos dias a todos', '2018-08-02'),
(133, 4, 3, 5, 'buenas esa prro', '2018-08-02'),
(134, 4, 3, 5, 'buenos dias a todos', '2018-08-02'),
(135, 4, 7, 4, 'sex love and water', '2018-08-02'),
(136, 10, 2, 4, ' alert(eres buena persona?);  ', '0000-00-00'),
(137, 10, 2, 5, '<script> alert(eres buena persona?);  </script>', '0000-00-00'),
(138, 10, 2, 2, '<script> alert(\'eres buena persona?\');  </script>', '0000-00-00'),
(139, 10, 2, 1, '&lt;script&gt; alert(\'eres buena persona?\');  &lt;/script&gt;', '0000-00-00'),
(140, 10, 2, 1, '&lt;script&gt; alert(\'eres buena persona?\');  &lt;/script&gt;', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(100) NOT NULL,
  `fk_id_cliente` int(100) NOT NULL,
  `fecha` date NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_venta`, `fk_id_cliente`, `fecha`, `estado`) VALUES
(1, 1, '2017-10-10', 1),
(2, 4, '2018-05-08', 1),
(3, 4, '2018-05-05', 1),
(4, 2, '2017-05-16', 1),
(7, 4, '2018-06-17', 1),
(8, 4, '2018-06-17', 1),
(9, 4, '2018-06-17', 1),
(10, 4, '2018-06-17', 1),
(11, 4, '2018-06-17', 1),
(12, 4, '2018-06-17', 1),
(13, 4, '2018-06-17', 1),
(14, 4, '2018-06-17', 1),
(15, 4, '2018-06-17', 1),
(16, 4, '2018-06-17', 1),
(17, 4, '2018-06-17', 1),
(18, 4, '2018-06-17', 1),
(19, 4, '2018-06-17', 1),
(20, 4, '2018-06-17', 1),
(21, 4, '2018-06-17', 1),
(22, 4, '2018-06-17', 1),
(23, 4, '2018-06-17', 1),
(24, 4, '2018-06-17', 1),
(25, 4, '2018-06-17', 1),
(26, 4, '2018-06-17', 1),
(27, 4, '2018-06-17', 1),
(28, 4, '2018-06-17', 1),
(29, 4, '2018-06-17', 1),
(30, 4, '2018-06-17', 1),
(31, 4, '2018-06-29', 1),
(32, 4, '2018-07-01', 1),
(33, 10, '2018-08-14', 1);

--
-- Disparadores `venta`
--
DELIMITER $$
CREATE TRIGGER `restar_existenciaporventa` AFTER INSERT ON `venta` FOR EACH ROW UPDATE productos SET existencia =1
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD KEY `id_tipousuario` (`id_tipousuario`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`),
  ADD UNIQUE KEY `nombre_categoria` (`nombre_categoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `fk_id_producto` (`fk_id_producto`),
  ADD KEY `fk_id_venta` (`fk_id_venta`),
  ADD KEY `fk_id_cliente` (`fk_id_cliente`);

--
-- Indices de la tabla `meses`
--
ALTER TABLE `meses`
  ADD PRIMARY KEY (`ID_mes`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `fk_id_categoria` (`fk_id_categoria`),
  ADD KEY `fk_id_proveedor` (`fk_id_proveedor`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD PRIMARY KEY (`id_valoracion`),
  ADD KEY `fk_id_producto` (`fk_id_producto`),
  ADD KEY `valoracion_ibfk_2` (`fk_id_usuario`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `fk_id_usuario` (`fk_id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_admin` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  MODIFY `id_detalle` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `meses`
--
ALTER TABLE `meses`
  MODIFY `ID_mes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_tipo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  MODIFY `id_valoracion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`id_tipousuario`) REFERENCES `tipo_usuario` (`id_tipo`);

--
-- Filtros para la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD CONSTRAINT `detalle_factura_ibfk_1` FOREIGN KEY (`fk_id_producto`) REFERENCES `productos` (`id_producto`),
  ADD CONSTRAINT `detalle_factura_ibfk_2` FOREIGN KEY (`fk_id_venta`) REFERENCES `venta` (`id_venta`),
  ADD CONSTRAINT `detalle_factura_ibfk_3` FOREIGN KEY (`fk_id_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`fk_id_categoria`) REFERENCES `categoria` (`id_categoria`),
  ADD CONSTRAINT `productos_ibfk_3` FOREIGN KEY (`fk_id_proveedor`) REFERENCES `proveedor` (`id_proveedor`);

--
-- Filtros para la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD CONSTRAINT `valoracion_ibfk_1` FOREIGN KEY (`fk_id_producto`) REFERENCES `productos` (`id_producto`),
  ADD CONSTRAINT `valoracion_ibfk_2` FOREIGN KEY (`fk_id_usuario`) REFERENCES `cliente` (`id_cliente`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`fk_id_cliente`) REFERENCES `cliente` (`id_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
