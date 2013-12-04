-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-12-2013 a las 15:54:34
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `clase`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pw_usuarios`
--

CREATE TABLE IF NOT EXISTS `pw_usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `pw_usuarios`
--

INSERT INTO `pw_usuarios` (`id_usuario`, `nombre`, `apellidos`, `email`, `password`) VALUES
(1, 'Oscar', 'Grimaldo Aguayo', 'oscar.grimaldo@itcelaya.edu.mx', ''),
(2, 'Oscar', 'Grimaldo Aguayo', 'oscar.grimaldo@itcelaya.edu.mx', ''),
(3, 'Oscar', 'Grimaldo Aguayo', 'oscar.grimaldo@itcelaya.edu.mx', ''),
(4, 'Oscar', 'Grimaldo Aguayo', 'oscar.grimaldo@itcelaya.edu.mx', ''),
(5, 'Oscar', 'Grimaldo Aguayo', 'oscar.grimaldo@itcelaya.edu.mx', ''),
(6, 'Oscar', 'Grimaldo Aguayo', 'oscar.grimaldo@itcelaya.edu.mx', ''),
(7, 'Oscar', 'Grimaldo Aguayo', 'oscar.grimaldo@itcelaya.edu.mx', ''),
(8, 'Oscar', 'Grimaldo Aguayo', 'oscar.grimaldo@itcelaya.edu.mx', ''),
(9, 'Oscar', 'Grimaldo Aguayo', 'oscar.grimaldo@itcelaya.edu.mx', ''),
(10, 'Oscar', 'Grimaldo Aguayo', 'oscar.grimaldo@itcelaya.edu.mx', ''),
(11, 'Oscar', 'Grimaldo Aguayo', 'oscar.grimaldo@itcelaya.edu.mx', ''),
(12, 'pedro', 'perez', 'pp@gmail.com', ''),
(13, 'sdfsdf', 'sdfsdf', 'sds@dwwfsf.sd', 'c32079ae5396ee586bc63b906ef7a36e');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
