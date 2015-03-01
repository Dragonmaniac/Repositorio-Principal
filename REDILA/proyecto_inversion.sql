-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-02-2015 a las 00:55:23
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `redi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_inversion`
--

CREATE TABLE IF NOT EXISTS `proyecto_inversion` (
  `codigo` varchar(100) NOT NULL,
  `nro` int(5) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `entrevistado` varchar(50) DEFAULT NULL,
  `telef` int(4) DEFAULT NULL,
  `telefono` int(7) DEFAULT NULL,
  `cargo` varchar(50) DEFAULT NULL,
  `ente` varchar(50) DEFAULT NULL,
  `anio` int(4) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `inspeccion` int(5) DEFAULT NULL,
  `estatus` varchar(15) DEFAULT NULL,
  `diains` int(2) NOT NULL,
  `mesins` varchar(15) NOT NULL,
  `anioins` int(4) NOT NULL,
  `municipio` varchar(50) DEFAULT NULL,
  `parroquia` varchar(50) DEFAULT NULL,
  `sector` varchar(50) DEFAULT NULL,
  `inversion` float DEFAULT NULL,
  `coordnorte` int(12) NOT NULL,
  `coordeste` int(12) NOT NULL,
  `empresa` varchar(50) DEFAULT NULL,
  `rif` varchar(30) DEFAULT NULL,
  `ingenieror` varchar(30) DEFAULT NULL,
  `civr` varchar(20) DEFAULT NULL,
  `ingenieroi` varchar(30) DEFAULT NULL,
  `civi` varchar(20) DEFAULT NULL,
  `avance` int(5) DEFAULT NULL,
  `diai` int(2) DEFAULT NULL,
  `mesi` varchar(10) DEFAULT NULL,
  `anioi` int(4) DEFAULT NULL,
  `valla` varchar(3) DEFAULT NULL,
  `diac` int(2) DEFAULT NULL,
  `mesc` varchar(10) DEFAULT NULL,
  `anioc` int(4) DEFAULT NULL,
  `beneficiados` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyecto_inversion`
--

INSERT INTO `proyecto_inversion` (`codigo`, `nro`, `nombre`, `entrevistado`, `telef`, `telefono`, `cargo`, `ente`, `anio`, `descripcion`, `inspeccion`, `estatus`, `diains`, `mesins`, `anioins`, `municipio`, `parroquia`, `sector`, `inversion`, `coordnorte`, `coordeste`, `empresa`, `rif`, `ingenieror`, `civr`, `ingenieroi`, `civi`, `avance`, `diai`, `mesi`, `anioi`, `valla`, `diac`, `mesc`, `anioc`, `beneficiados`) VALUES
('ki-2014-88-99-ki', 10, ',ksdkasjdkl k djsakldj k askdj k asjd k', 'Sasha Gray', 276, 3469585, 'Ingeniera en destape', 'GobernaciÃ³n', 2012, 'jahkasjklasdj', 1, 'Paralizado', 0, '0', 0, 'San CristÃ³bal', 'La Concordia', '7ma Avenida', 0, 0, 0, '', '', '', '', '', '', 0, 0, '0', 0, 'SÃ­', 0, '0', 0, ''),
('p6-2008-88-76-ksd', 2, 'ConstrucciÃ³n de una procesadora de alimentos comunitaria', 'Sasha Gray', 416, 7539568, 'Ingeniera en destape', 'GobernaciÃ³n', 2014, 'Una procesadora diseÃ±ada para que la gente que vive y trabaja cerca de las montaÃ±as.', 1, 'En EjecuciÃ³n', 11, 'Abril', 2014, 'BolÃ­var', 'El Palmar', 'Las Baterias', 8.569, 8222, 9778, 'Industrias Wayne', 'j-12.556.777.2', 'Jessica Redfox', '454.66.4456.', 'Franklin MÃ¡rquez', '787.63.48.66', 20, 25, 'Febrero', 2014, 'SÃ­', 29, 'Octubre', 2015, '10000'),
('pf-2014-08-09-qw', 7, 'Sede para la Region Estrategica de Desarrollo Integral de Los Andes', 'Tori Black', 426, 232342, 'Ingeniera Petrolera', 'GobernaciÃ³n del Edo. TachÃ­ra ', 2014, 'Sede para REDI Los Andes que sera construida en el centro', 1, 'En EjecuciÃ³n', 19, 'Enero', 2015, 'San CristÃ³bal', 'La Concordia', '7ma Avenida', 10000000, 0, 0, 'COORPOINTA', 'j-12.556.777.4', 'Jessica Redfox', '454.66.4456.', 'Franklin MÃ¡rquez', '787.63.48.66', 30, 31, 'Octubre', 2014, 'SÃ­', 18, 'Mayo', 2015, '25'),
('pl-2015-05--58-p', 9, 'ashdjkhasjkhdajkhsdjkhasjkdhashjkashd', 'Sasha Gray', 416, 3469585, 'Ingeniera Petrolera', 'GobernaciÃ³n', 0, 'asjdk', 1, 'nulo', 0, '0', 0, 'San CristÃ³bal', 'Santa Ana', 'La Casa de Hanna', 0, 0, 0, '', '', '', '', '', '', 0, 0, '0', 0, 'SÃ­', 0, '0', 0, ''),
('pl-2015-05--58-pi', 3, 'CarnicerÃ­a Comunitaria', 'Lisa Ann', 414, 7539568, 'Ingeniera en destape', 'Alcaldia', 2015, 'Carniceria destinada a una zona centrica', 1, 'En EjecuciÃ³n', 11, 'Febrero', 2015, 'Antonio RÃ³mulo Costa', 'El Protector', 'Magmolia', 500002, 0, 0, 'CADELA', 'j-12.556.777.3', 'Jessica Redfox', '454.66.4456.', 'Franklin MÃ¡rquez', '787.63.48.66', 30, 10, 'Enero', 2015, 'No', 27, 'Octubre', 2015, '5000'),
('pl-2015-05--58-po', 1, 'Potabilisadora de Agua potable', 'Sasha Gray', 416, 7539568, 'Ingeniera en destape', 'GobernaciÃ³n', 2014, 'KAKAKAKAKAKAKA', 1, 'Sin Iniciar', 0, '', 0, 'AndrÃ©s Bello', 'La Concordia', 'Las pilas', 250000, 0, 0, 'POKEMON', 'j-12.556.777.1', 'Jessica Redfox', '454.66.4456.', 'Franklin MÃ¡rquez', '787.63.48.66', 25, 19, 'Diciembre', 2010, 'SÃ­', 19, 'Noviembre', 2015, '100'),
('po-2012-05-28-qa', 4, 'Vialidad de Los RÃ­os Bravos', 'Lisa Ann', 276, 3469585, 'Ingeniera en Azucar', 'Ministerio del Poder Popular para el Transporte', 2013, 'Se esta construyendo una vialidad de manera que se mejore la existente', 1, 'En EjecuciÃ³n', 16, 'Noviembre', 2013, 'Ayacucho', 'El RÃ­o Azul', 'Orilla Veraz', 7000000, 0, 0, 'Carreteras y Puentes Gonzales', 'j-12.556.777.4', 'Jessica Redfox', '454.66.4456.', 'Franklin MÃ¡rquez', '787.63.48.66', 50, 4, 'Agosto', 2013, 'SÃ­', 3, 'Marzo', 2014, '800000'),
('qq-2012-78-96-ww', 6, 'Pista de Patinaje sobre Hielo', 'Tori Black', 414, 7778952, 'Ingeniera en destape', 'GobernaciÃ³n del Edo. TachÃ­ra ', 2012, 'Pista de patinaje ubicada en el parque metropolitano donde se alquilaran los patines para aquellos q', 2, 'En EjecuciÃ³n', 18, 'Agosto', 2013, 'San CristÃ³bal', '19 de Abril', 'EL Metropolitano', 15644900, 0, 0, 'Industrias Wayne', 'j-12.556.777.2', 'Jessica Redfox', '454.66.4456.', 'Franklin MÃ¡rquez', '787.63.48.66', 70, 16, 'Octubre', 2012, 'SÃ­', 23, 'Junio', 2015, '87000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
