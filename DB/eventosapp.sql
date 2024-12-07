-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 06-12-2024 a las 22:27:21
-- Versión del servidor: 8.3.0
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eventosapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarioscalificaciones`
--

DROP TABLE IF EXISTS `comentarioscalificaciones`;
CREATE TABLE IF NOT EXISTS `comentarioscalificaciones` (
  `id_comentario` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int NOT NULL,
  `id_evento` int NOT NULL,
  `comentario` text,
  `calificacion` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_comentario`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_evento` (`id_evento`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarioscalificaciones`
--

INSERT INTO `comentarioscalificaciones` (`id_comentario`, `id_usuario`, `id_evento`, `comentario`, `calificacion`, `created_at`) VALUES
(1, 1, 3, 'Excelente evento', 5, '2024-12-06 22:12:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

DROP TABLE IF EXISTS `eventos`;
CREATE TABLE IF NOT EXISTS `eventos` (
  `id_evento` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) NOT NULL,
  `descripcion` text,
  `fecha` datetime NOT NULL,
  `ubicacion` varchar(255) DEFAULT NULL,
  `organizador_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_evento`),
  KEY `organizador_id` (`organizador_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id_evento`, `titulo`, `descripcion`, `fecha`, `ubicacion`, `organizador_id`, `created_at`) VALUES
(1, 'Concierto editado', 'Un gran concierto', '2024-12-31 20:00:00', 'Ubicacion aqui', 1, '2024-12-06 21:47:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historialeventos`
--

DROP TABLE IF EXISTS `historialeventos`;
CREATE TABLE IF NOT EXISTS `historialeventos` (
  `id_historial` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int NOT NULL,
  `id_evento` int NOT NULL,
  `asistio` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_historial`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_evento` (`id_evento`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historialeventos`
--

INSERT INTO `historialeventos` (`id_historial`, `id_usuario`, `id_evento`, `asistio`, `created_at`) VALUES
(1, 1, 2, 1, '2024-12-06 22:19:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rsvp`
--

DROP TABLE IF EXISTS `rsvp`;
CREATE TABLE IF NOT EXISTS `rsvp` (
  `id_rsvp` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int NOT NULL,
  `id_evento` int NOT NULL,
  `estado` enum('Asistiré','Tal vez','No asistiré') DEFAULT 'Asistiré',
  `notificado` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_rsvp`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_evento` (`id_evento`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rsvp`
--

INSERT INTO `rsvp` (`id_rsvp`, `id_usuario`, `id_evento`, `estado`, `notificado`, `created_at`) VALUES
(1, 1, 2, 'Tal vez', 0, '2024-12-06 22:07:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `correo` (`correo`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `correo`, `contrasena`, `created_at`) VALUES
(1, 'Juan Arcangel', 'juan@correo.com', '123456', '2024-12-06 21:37:20'),
(2, 'Nelson Martinez', 'aavalos@correo.com', '123456', '2024-12-06 21:38:36');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
