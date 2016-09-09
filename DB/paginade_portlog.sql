-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 08, 2016 at 09:49 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `paginade_portlog`
--
CREATE DATABASE IF NOT EXISTS `paginade_portlog` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `paginade_portlog`;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
CREATE TABLE IF NOT EXISTS `banner` (
  `id_banner` int(250) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `imagen` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `url` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `orden` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_banner`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id_banner`, `titulo`, `descripcion`, `imagen`, `url`, `orden`) VALUES
(1, 'Proyectos Industriales', 'Siempre sus productos viajaran sin riesgo, seguros y a tiempo', 'b1.jpg', NULL, '1'),
(2, 'Transportación aérea', 'Siempre sus productos viajaran sin riesgo, seguros y a tiempo', 'b2.jpg', NULL, '2'),
(3, 'TRANSPORTACIÓN MARÍTIMA', 'Con la mejor calidad y la experiencia que siempre nos a distinguido', 'b3.jpg', NULL, '3'),
(4, 'Transporte Terrestre', 'Con la mejor calidad y experiencia que siempre nos han distinguido', 'b4.jpg', NULL, '4');

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_clientes` int(250) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `imagen` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `orden` int(250) DEFAULT NULL,
  PRIMARY KEY (`id_clientes`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id_clientes`, `titulo`, `imagen`, `orden`) VALUES
(1, 'Sector Automotriz', 'sector-automotriz.jpg', 1),
(2, 'Sector del Gas', 'sector-del-gas.jpg', 2),
(3, 'Sector Eólico', 'sector-eolico.jpg', 3),
(4, 'Sector Petrolero', 'sector-petrolero.jpg', 4),
(5, 'Sector Textil', 'sector-textil.jpg', 5),
(6, 'Sector Dragado', 'sector-fragado.jpg', 6),
(7, 'Sector Telecomunicaciones', 'sector-telecominicaciones.jpg', 7),
(8, 'Sector Cervecero', 'sector-servecero.jpg', 8),
(9, 'Sector Minero', 'sector-minero.jpg', 9),
(10, 'Sector de la Construcción', 'sector-construccion.jpg', 10),
(11, 'Sector Aeroespacial', 'sector-aeroespacial.jpg', 11);

-- --------------------------------------------------------

--
-- Table structure for table `galeria`
--

DROP TABLE IF EXISTS `galeria`;
CREATE TABLE IF NOT EXISTS `galeria` (
  `id_galeria` int(250) NOT NULL AUTO_INCREMENT,
  `orden` int(250) DEFAULT NULL,
  `imagen` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `titulo_imagen` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `desc_imagen` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `titulo` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_galeria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `galeria`
--

INSERT INTO `galeria` (`id_galeria`, `orden`, `imagen`, `titulo_imagen`, `desc_imagen`, `titulo`) VALUES
(1, 1, 'projec_altamira.jpg', NULL, NULL, 'Proyecto Altamira'),
(2, 2, 'projec_altamira2.jpg', NULL, NULL, 'Proyecto Altamira 2'),
(3, 3, 'projec_campeche.jpg', NULL, NULL, 'Proyecto Campeche'),
(4, 4, 'projec_coatzacoalcos.jpg', NULL, NULL, 'Proyecto Coatzacoalcos'),
(5, 5, 'projec_coatzacoalcos1.jpg', NULL, NULL, 'Proyecto Coatzacoalcos 1'),
(6, 6, 'projec_coatzacoalcos2.jpg', NULL, NULL, 'Proyecto Coatzacoalcos 2'),
(7, 7, 'projec_juchitan.jpg', NULL, NULL, 'Proyecto Juchitan'),
(8, 8, 'lazaro-cardenas.jpg', NULL, NULL, 'Proyecto Lázaro cardenas'),
(9, 9, 'manzanillo.jpg', NULL, NULL, 'Proyecto Manzanillo'),
(10, 10, 'ramoz_arizme.jpg', NULL, NULL, 'Proyecto Ramos Arizpe '),
(11, 11, 'veracruz2.jpg', NULL, NULL, 'Proyecto Veracruz 2'),
(12, 12, 'veracruz3.jpg', NULL, NULL, 'Proyecto Veracruz 3'),
(13, 13, 'toluca.jpg', NULL, NULL, 'Proyecto Toluca'),
(14, 14, 'TRAFO-MTY-ZAC.jpg', NULL, NULL, 'Proyecto Zacatecas'),
(15, 15, 'VERACRUZ1.jpg', NULL, NULL, 'Proyecto Veracruz 1'),
(16, 16, 'VERACRUZ4.jpg', NULL, NULL, 'Proyecto Veracruz 4'),
(17, 17, 'veracruz5.jpg', NULL, NULL, 'Proyecto Veracruz 5'),
(18, 18, 'varios.jpg', NULL, NULL, 'Proyecto Varios'),
(19, 19, 'manzanillo2.jpg', NULL, NULL, 'Proyecto Manzanillo 2'),
(20, 20, 'veracruz.jpg', NULL, NULL, 'Proyecto Veracruz '),
(21, 21, 'salinacruz.jpg', NULL, NULL, 'Proyecto Salina Cruz'),
(22, 22, 'toluca1.jpg', NULL, NULL, 'Proyecto Toluca 1'),
(23, 23, 'dosbocas.jpg', NULL, NULL, 'Proyecto Dos Bocas');

-- --------------------------------------------------------

--
-- Table structure for table `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE IF NOT EXISTS `imagenes` (
  `id_imagenes` int(250) NOT NULL AUTO_INCREMENT,
  `orden` int(250) DEFAULT NULL,
  `imagen` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `galeria` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `titulo` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_imagenes`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=158 ;

--
-- Dumping data for table `imagenes`
--

INSERT INTO `imagenes` (`id_imagenes`, `orden`, `imagen`, `galeria`, `titulo`) VALUES
(1, 1, 'Altamira-1.jpg', '1', 'Altamira'),
(2, 2, 'Altamira-2.jpg', '1', 'Altamira'),
(3, 1, 'AltamiraII-5.jpg', '2', 'Altamira II'),
(4, 2, 'AltamiraII-3.jpg', '2', 'Altamira II'),
(7, 3, 'AltamiraII-4.jpg', '2', 'Altamira II'),
(8, 4, 'AltamiraII-2.jpg', '2', 'Altamira II'),
(9, 5, 'AltamiraII-6.jpg', '2', 'Altamira II'),
(10, 1, 'Campeche-1.jpg', '3', 'Campeche'),
(11, 2, 'Campeche-2.jpg', '3', 'Campeche'),
(12, 3, 'Campeche-3.jpg', '3', 'Campeche'),
(13, 4, 'Campeche-4.jpg', '3', 'Campeche'),
(14, 5, 'Campeche-5.jpg', '3', 'Campeche'),
(15, 6, 'Campeche-6.jpg', '3', 'Campeche'),
(16, 7, 'Campeche-7.jpg', '3', 'Campeche'),
(17, 8, 'Campeche-8.jpg', '3', 'Campeche'),
(18, 9, 'Campeche-9.jpg', '3', 'Campeche'),
(19, 10, 'Campeche-10.jpg', '3', 'Campeche'),
(20, 11, 'Campeche-11.jpg', '3', 'Campeche'),
(21, 12, 'Campeche-12.jpg', '3', 'Campeche'),
(22, 13, 'Campeche-13.jpg', '3', 'Campeche'),
(23, 1, 'Coatzacualcos-1.jpg', '4', 'Coatzacoalcos'),
(24, 2, 'Coatzacualcos-2.jpg', '4', 'Coatzacoalcos'),
(25, 3, 'Coatzacualcos-3.jpg', '4', 'Coatzacoalcos'),
(26, 4, 'Coatzacualcos-4.jpg', '4', 'Coatzacoalcos'),
(27, 5, 'Coatzacualcos-5.jpg', '4', 'Coatzacoalcos'),
(28, 1, 'CoatzacualcosI-1.jpg', '5', 'Coatzacoalcos I'),
(29, 2, 'CoatzacualcosI-2.jpg', '5', 'Coatzacoalcos I'),
(30, 3, 'CoatzacualcosI-3.jpg', '5', 'Coatzacoalcos I'),
(31, 4, 'CoatzacualcosI-4.jpg', '5', 'Coatzacoalcos I'),
(32, 5, 'CoatzacualcosI-5.jpg', '5', 'Coatzacoalcos I'),
(33, 6, 'CoatzacualcosI-6.jpg', '5', 'Coatzacoalcos I'),
(34, 7, 'CoatzacualcosI-7.jpg', '5', 'Coatzacoalcos I'),
(35, 1, 'CoatzacualcosII-1.jpg', '6', 'Coatzacoalcos II'),
(36, 2, 'CoatzacualcosII-2.jpg', '6', 'Coatzacoalcos II'),
(39, 4, 'CoatzacualcosII-4.jpg', '6', 'Coatzacoalcos II'),
(38, 3, 'CoatzacualcosII-3.jpg', '6', 'Coatzacoalcos II'),
(40, 5, 'CoatzacualcosII-5.jpg', '6', 'Coatzacoalcos II'),
(41, 1, 'JU_1 (1).jpg', '7', 'Juchitan'),
(42, 2, 'JU_1 (2).jpg', '7', 'Juchitan'),
(43, 3, 'JU_1 (3).jpg', '7', 'Juchitan'),
(44, 4, 'JU_1 (4).jpg', '7', 'Juchitan'),
(45, 5, 'JU_1 (5).jpg', '7', 'Juchitan'),
(46, 1, 'LA_1 (1).jpg', '8', 'Lázaro cardenas'),
(47, 2, 'LA_1 (2).jpg', '8', 'Lázaro cardenas'),
(48, 3, 'LA_1 (3).jpg', '8', 'Lázaro cardenas'),
(49, 4, 'LA_1 (4).jpg', '8', 'Lázaro cardenas'),
(50, 5, 'LA_1 (5).jpg', '8', 'Lázaro cardenas'),
(51, 6, 'LA_1 (6).jpg', '8', 'Lázaro cardenas'),
(52, 7, 'LA_1 (7).jpg', '8', 'Lázaro cardenas'),
(53, 8, 'LA_1 (8).jpg', '8', 'Lázaro cardenas'),
(54, 1, 'MA_1 (1).jpg', '9', 'Manzanillo'),
(55, 2, 'MA_1 (2).jpg', '9', 'Manzanillo'),
(56, 3, 'MA_1 (3).jpg', '9', 'Manzanillo'),
(57, 4, 'MA_1 (5).jpg', '9', 'Manzanillo'),
(58, 5, 'MA_1 (4).jpg', '9', 'Manzanillo'),
(59, 6, 'MA_1 (6).jpg', '9', 'Manzanillo'),
(60, 7, 'MA_1 (7).jpg', '9', 'Manzanillo'),
(61, 8, 'MA_1 (8).jpg', '9', 'Manzanillo'),
(62, 9, 'MA_1 (9).jpg', '9', 'Manzanillo'),
(63, 10, 'MA_1 (10).jpg', '9', 'Manzanillo'),
(64, 11, 'MA_1 (11).jpg', '9', 'Manzanillo'),
(65, 12, 'MA_1 (12).jpg', '9', 'Manzanillo'),
(66, 1, 'RA_1 (1).jpg', '10', 'Ramos Arizpe'),
(67, 2, 'RA_1 (2).jpg', '10', 'Ramos Arizpe'),
(71, 1, 'VER_1 (1).jpg', '11', 'Veracruz II'),
(69, 3, 'RA_1 (3).jpg', '10', 'Ramos Arizpe'),
(70, 4, 'RA_1 (4).jpg', '10', 'Ramos Arizpe'),
(72, 2, 'VER_1 (2).jpg', '11', 'Veracruz II'),
(73, 3, 'VER_1 (3).jpg', '11', 'Veracruz II'),
(74, 4, 'VER_1 (4).jpg', '11', 'Veracruz II'),
(75, 5, 'VER_1 (5).jpg', '11', 'Veracruz II'),
(76, 1, 'VERA_1 (1).jpg', '12', 'Veracruz III'),
(77, 2, 'VERA_1 (2).jpg', '12', 'Veracruz III'),
(78, 3, 'VERA_1 (3).jpg', '12', 'Veracruz III'),
(79, 4, 'VERA_1 (4).jpg', '12', 'Veracruz III'),
(80, 5, 'VERA_1 (5).jpg', '12', 'Veracruz III'),
(81, 6, 'VERA_1 (6).jpg', '12', 'Veracruz III'),
(82, 7, 'VERA_1 (7).jpg', '12', 'Veracruz III'),
(83, 8, 'VERA_1 (8).jpg', '12', 'Veracruz III'),
(84, 1, 'TO_1 (1).jpg', '13', 'Toluca'),
(85, 2, 'TO_1 (2).jpg', '13', 'Toluca'),
(86, 3, 'TO_1 (3).jpg', '13', 'Toluca'),
(87, 4, 'TO_1 (4).jpg', '13', 'Toluca'),
(88, 1, 'ZACA_1 (1).jpg', '14', 'Zacatecas'),
(89, 2, 'ZACA_1 (2).jpg', '14', 'Zacatecas'),
(90, 3, 'ZACA_1 (3).jpg', '14', 'Zacatecas'),
(91, 4, 'ZACA_1 (4).jpg', '14', 'Zacatecas'),
(92, 5, 'ZACA_1 (5).jpg', '14', 'Zacatecas'),
(93, 1, 'VE_1 (1).jpg', '15', 'Veracruz 1'),
(94, 2, 'VE_1 (2).jpg', '15', 'Veracruz 1'),
(95, 3, 'VE_1 (3).jpg', '15', 'Veracruz 1'),
(96, 4, 'VE_1 (4).jpg', '15', 'Veracruz 1'),
(97, 1, 'VERAC_1 (1).jpg', '16', 'Veracruz IV'),
(98, 2, 'VERAC_1 (2).jpg', '16', 'Veracruz IV'),
(99, 3, 'VERAC_1 (3).jpg', '16', 'Veracruz IV'),
(100, 4, 'VERAC_1 (4).jpg', '16', 'Veracruz IV'),
(101, 5, 'VERAC_1 (5).jpg', '16', 'Veracruz IV'),
(102, 6, 'VERAC_1 (6).jpg', '16', 'Veracruz IV'),
(103, 1, 'VERACR1 (1).jpg', '17', 'Veracruz V'),
(104, 2, 'VERACR1 (2).jpg', '17', 'Veracruz V'),
(105, 3, 'VERACR1 (3).jpg', '17', 'Veracruz V'),
(106, 1, 'VA_1 (1).jpg', '18', 'Varios'),
(107, 2, 'VA_1 (2).jpg', '18', 'Varios'),
(108, 3, 'VA_1 (3).jpg', '18', 'Varios'),
(109, 4, 'VA_1 (4).jpg', '18', 'Varios'),
(110, 5, 'VA_1 (5).jpg', '18', 'Varios'),
(111, 6, 'VA_1 (6).jpg', '18', 'Varios'),
(112, 1, 'MAN_1 (1).jpg', '19', 'Manzanillo 2'),
(113, 2, 'MAN_1 (2).jpg', '19', 'Manzanillo 2'),
(114, 3, 'MAN_1 (3).jpg', '19', 'Manzanillo 2'),
(115, 4, 'MAN_1 (4).jpg', '19', 'Manzanillo 2'),
(116, 5, 'MAN_1 (5).jpg', '19', 'Manzanillo 2'),
(117, 6, 'MAN_1 (6).jpg', '19', 'Manzanillo 2'),
(118, 7, 'MAN_1 (7).jpg', '19', 'Manzanillo 2'),
(119, 8, 'MAN_1 (8).jpg', '19', 'Manzanillo 2'),
(120, 9, 'MAN_1 (9).jpg', '19', 'Manzanillo 2'),
(121, 10, 'MAN_1 (10).jpg', '19', 'Manzanillo 2'),
(122, 1, 'V_1 (1).jpg', '20', 'Veracruz'),
(123, 2, 'V_1 (2).jpg', '20', 'Veracruz'),
(124, 3, 'V_1 (3).jpg', '20', 'Veracruz'),
(125, 4, 'V_1 (4).jpg', '20', 'Veracruz'),
(126, 5, 'V_1 (5).jpg', '20', 'Veracruz'),
(127, 6, 'V_1 (6).jpg', '20', 'Veracruz'),
(128, 7, 'V_1 (7).jpg', '20', 'Veracruz'),
(129, 8, 'V_1 (8).jpg', '20', 'Veracruz'),
(130, 9, 'V_1 (9).jpg', '20', 'Veracruz'),
(131, 10, 'V_1 (10).jpg', '20', 'Veracruz'),
(132, 11, 'V_1 (11).jpg', '20', 'Veracruz'),
(133, 1, 'SA_1 (1).jpg', '21', 'Salina Cruz'),
(134, 2, 'SA_1 (2).jpg', '21', 'Salina Cruz'),
(135, 3, 'SA_1 (3).jpg', '21', 'Salina Cruz'),
(136, 4, 'SA_1 (4).jpg', '21', 'Salina Cruz'),
(137, 5, 'SA_1 (5).jpg', '21', 'Salina Cruz'),
(138, 6, 'SA_1 (6).jpg', '21', 'Salina Cruz'),
(139, 7, 'SA_1 (7).jpg', '21', 'Salina Cruz'),
(140, 8, 'SA_1 (8).jpg', '21', 'Salina Cruz'),
(141, 1, 'TOL6 (1).jpg', '22', 'Toluca 1'),
(142, 2, 'TOL6 (2).jpg', '22', 'Toluca 1'),
(143, 3, 'TOL6 (3).jpg', '22', 'Toluca 1'),
(144, 4, 'TOL6 (4).jpg', '22', 'Toluca 1'),
(145, 5, 'TOL6 (5).jpg', '22', 'Toluca 1'),
(146, 6, 'TOL6 (6).jpg', '22', 'Toluca 1'),
(149, 2, '2.jpg', '23', 'Dos Bocas'),
(148, 1, '1.jpg', '23', 'Dos Bocas'),
(150, 3, '3.jpg', '23', 'Dos Bocas'),
(151, 4, '4.jpg', '23', 'Dos Bocas'),
(152, 5, '5.jpg', '23', 'Dos Bocas'),
(153, 6, '6.jpg', '23', 'Dos Bocas'),
(154, 7, '7.jpg', '23', 'Dos Bocas'),
(155, 8, '8.jpg', '23', 'Dos Bocas'),
(156, 9, '9.jpg', '23', 'Dos Bocas'),
(157, 10, '10.jpg', '23', 'Dos Bocas');

-- --------------------------------------------------------

--
-- Table structure for table `metas`
--

DROP TABLE IF EXISTS `metas`;
CREATE TABLE IF NOT EXISTS `metas` (
  `id_metas` int(250) NOT NULL AUTO_INCREMENT,
  `seccion` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `meta_tit` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `meta_desc` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `meta_keys` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  PRIMARY KEY (`id_metas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `metas`
--

INSERT INTO `metas` (`id_metas`, `seccion`, `meta_tit`, `meta_desc`, `meta_keys`) VALUES
(1, 'inicio', 'Inicio  | PORTLOG INTERNATIONAL', 'Para servir a nuestros Clientes, Proveedores y Agentes Contamos con cobertura y asesoria en los principales puertos de nuestro país', 'portlog, logista, portlog inicio, proyectos industriales, transportacion martima, transportacion terrestre, transportacion aerea, PORTLOG INTERNATIONAL, servicios aereos, servicios terrestres, servicios maritimos, importacion, exportacion, servicios logisticos'),
(2, 'nosotros', 'Nosotros  | PORTLOG INTERNATIONAL ', 'portlog, portlog nuestra empresa, logista, proyectos industriales, transportacion martima, transportacion terrestre, transportacion aerea, PORTLOG INTERNATIONAL, importaciones, exportaciones, empresas de logistica, logistica internacional', 'Portlog es una empresa con más de 10 años de experiencia en logística internacional, líder en servicios marítimos y transportación de proyectos industriales'),
(3, 'servicios', 'Servicios | PORTLOG INTERNATIONAL', 'Creamos soluciones de Transporte Aéreo de importación y exportación  que se adaptan a necesidades de urgencia o especialización de cada tipo de carga y ofrecemos:', 'portlog, portlog servicios, logista, proyectos industriales, transportacion martima, transportacion terrestre, transportacion aerea, PORTLOG INTERNATIONAL, carga de proyecto, transporte martimo, transporte aereo, transporte terrestre, estrategias logisticas, importación, exportación'),
(4, 'galeria', 'Galería| PORTLOG INTERNATIONAL', 'Portlog es una empresa con más de 10 años de experiencia en logística internacional, líder en servicios marítimos y transportación de proyectos industriales', 'portlog, portlog galeria, logista, proyectos industriales, transportacion martima, transportacion terrestre, transportacion aerea, PORTLOG INTERNATIONAL, importaciones, exportaciones, empresas de logistica, logistica internacional'),
(5, 'contacto', 'Contacto | PORTLOG INTERNATIONAL', 'Portlog es una empresa con más de 10 años de experiencia en logística internacional, líder en servicios marítimos y transportación de proyectos industriales', 'portlog, logista, portlog contacto, proyectos industriales, transportacion martima, transportacion terrestre, transportacion aerea, PORTLOG INTERNATIONAL, importaciones, exportaciones, empresas de logistica, logistica internacional'),
(6, 'aviso', 'Aviso', 'Portlog es una empresa con más de 10 años de experiencia en logística internacional, líder en servicios marítimos y transportación de proyectos industriales', 'portlog, portlog nuestra empresa, logista, proyectos industriales, transportacion martima, transportacion terrestre, transportacion aerea, PORTLOG INTERNATIONAL, importaciones, exportaciones, empresas de logistica, logistica internacional, portlog aviso de privacidad'),
(7, 'clientes', 'Clientes  | PORTLOG INTERNATIONAL', 'Portlog es una empresa con más de 10 años de experiencia en logística internacional, líder en servicios marítimos y transportación de proyectos industriales', 'portlog, portlog clientes, logista, proyectos industriales, transportacion martima, transportacion terrestre, transportacion aerea, PORTLOG INTERNATIONAL, importaciones, exportaciones, empresas de logistica, logistica internacional');

-- --------------------------------------------------------

--
-- Table structure for table `op4`
--

DROP TABLE IF EXISTS `op4`;
CREATE TABLE IF NOT EXISTS `op4` (
  `id_op` int(250) NOT NULL AUTO_INCREMENT,
  `seccion` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `titulo` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `subtitulo` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `texto` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `imagen` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `archivo` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `titulo_imagen` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `desc_imagen` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `url` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  PRIMARY KEY (`id_op`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Dumping data for table `op4`
--

INSERT INTO `op4` (`id_op`, `seccion`, `titulo`, `subtitulo`, `descripcion`, `texto`, `imagen`, `archivo`, `titulo_imagen`, `desc_imagen`, `url`) VALUES
(1, 'logotipo', 'Logotipo', NULL, NULL, NULL, NULL, NULL, 'PORTLOG INTERNATIONAL, S.A. DE C.V. ', 'logotipo casa portlong', NULL),
(2, 'sem1', 'Google Tag Mannager', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'bloque1', 'Servicios A&eacute;reos', 'Servicio de Charters para carga A&eacute;rea.', NULL, NULL, 'servicios-aereos.png', NULL, 'Servicios Aéreos', 'Servicio de Charters para carga Aérea.', NULL),
(4, 'bloque2', 'Servicios Terrestres', 'Contamos con unidades especializadas.', NULL, NULL, 'servicios-terrestres.png', NULL, 'Servicios Terrestres', 'Contamos con unidades especializadas.', NULL),
(5, 'bloque3', 'Servicios Mar&iacute;timos', 'Representados por 250 oficinas.', NULL, NULL, 'servicios-maritimos.png', NULL, 'Servicios Marítimos', 'Representados por 250 oficinas.', NULL),
(6, 'bloque4', 'Para servir a nuestros', 'Clientes, Proveedores y Agentes', '<p>Contamos con cobertura y asesoria en los principales puertos y aeropurtos de nuestro pa&iacute;s:</p>\r\n<ul>\r\n<li>Ciudad de M&eacute;xico</li>\r\n<li>Manzanillo</li>\r\n<li>Coatzacoalcos</li>\r\n<li>Quer&eacute;taro</li>\r\n<li>L&aacute;zaro C&aacute;rdenas</li>\r\n<li>Ensenada</li>\r\n<li>Veracruz</li>\r\n<li>Nuevo Laredo</li>\r\n<li>Salina Cruz</li>\r\n<li>Guadalajara</li>\r\n<li>Altamira</li>\r\n</ul>', NULL, 'clientes-provedores-agentes-portlog.png', NULL, '', '', NULL),
(7, 'bloque5', 'Experiencia en:', NULL, '<ul>\r\n<li>Proyectos Industriales</li>\r\n<li>Importaci&oacute;n</li>\r\n<li>Exportaci&oacute;n</li>\r\n<li>Servicios logisticos</li>\r\n</ul>', NULL, 'importacion-exportacion.png', NULL, 'PORTLOG INTERNATIONAL, S.A. DE C.V.', 'Experiencia en: Proyectos Industriales, Importación, Importación', NULL),
(8, 'nosotros', 'Nuestra empresa', '10 a&ntilde;os de experiencia en log&iacute;stica internacional.', '<p class="texto_general">Portlog es una empresa con m&aacute;s de 10 a&ntilde;os de experiencia en log&iacute;stica internacional, l&iacute;der en servicios mar&iacute;timos y transportaci&oacute;n de proyectos industriales con el manejo &oacute;ptimo de sus importaciones y/o exportaciones hacia y desde cualquier parte del mundo siendo integrantes de una red de renombradas empresas de log&iacute;stica a nivel mundial y respaldados por m&aacute;s de 250 oficinas en 5 continentes.</p>', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'imagen', 'logistica internacional 1', NULL, NULL, NULL, 'logistica-internacional1.png', NULL, NULL, 'logistica-internacional1', NULL),
(10, 'imagen', 'logistica internacional2', NULL, NULL, NULL, 'logistica-internacional2.png', NULL, NULL, 'PORTLOG INTERNATIONAL, S.A. DE C.V. l logistica-internacional', NULL),
(11, 'imagen', 'PORTLOG INTERNATIONAL, S.A. DE C.V. l 2015', NULL, NULL, NULL, 'logistica-internacional.png', NULL, NULL, 'PORTLOG INTERNATIONAL, S.A. DE C.V. l logistica-internacional', NULL),
(12, 'mision', 'Misi&oacute;n', NULL, '<p>Servir a nuestros clientes, proveedores y agentes internacionales con profesionalismo, veracidad y dedicaci&oacute;n buscando siempre la excelencia en el servicio.</p>', NULL, 'mision.png', NULL, 'Misión', 'PORTLOG INTERNATIONAL, S.A. DE C.V. l Misión', NULL),
(13, 'vision', 'Visi&ocute;n', NULL, '<p>Supervisar de manera continua los requerimientos de log&iacute;stica de nuestros clientes, asegurando as&iacute; relaciones comerciales de largo plazo a trav&eacute;s de un proceso de mejora continua.</p>', NULL, 'vision.png', NULL, 'Visión', 'PORTLOG INTERNATIONAL, S.A. DE C.V. l Visión', NULL),
(14, 'servicios', 'SERVICIOS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'clientes', 'CLIENTES', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'galeria', 'GALERÍA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'contacto', 'CONTACTO', 'Work with the experts.', NULL, NULL, 'contacto2.jpg', NULL, 'CONTACTO', 'Worth with the experts.', NULL),
(18, 'cont_img', 'wwpc', NULL, NULL, NULL, 'wwpc.jpg', NULL, NULL, 'alianza | wwpc', NULL),
(19, 'cont_img', 'amanac', NULL, NULL, NULL, 'amanac.jpg', NULL, NULL, 'alianza | amanac', NULL),
(20, 'cont_img', 'iata', NULL, NULL, NULL, 'iata.jpg', NULL, NULL, 'alianza | iata', NULL),
(21, 'direccion', 'Dirección', NULL, 'Corporativo Ixcateopan no. 245 Int. 2 Col. Santa Cruz Atoyac C.P. 03310, Ciudad de México.', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'telefono', 'Teléfono', NULL, '+52 (55)5605-6647  <br>\r\n+52 (55)5605-8353', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'email', 'Email', NULL, 'mbuetler@portloginter.com <br>\r\noperaciones@portloginter.com', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'contamos', 'Contamos con cobertura en:', NULL, '<ul>\r\n<li>Ciudad de M&eacute;xico</li>\r\n<li>Quer&eacute;taro</li>\r\n<li>Veracruz</li>\r\n<li>Manzanillo</li>\r\n<li>L&aacute;zaro C&aacute;rdenas</li>\r\n<li>Nuevo Laredo</li>\r\n<li>Altamira/Tampico</li>\r\n<li>Coatzacoalcos/Dos Bocas</li>\r\n<li>Ensenada</li>\r\n<li>Salina Cruz</li>\r\n</ul>', NULL, 'mapa222.png', NULL, 'Contamos con cobertura e', 'Contamos con cobertura', NULL),
(25, 'aviso', 'Aviso de Privacidad', NULL, '<p>Con fundamento en los art&iacute;culos 15 y 16 de la Ley Federal de Protecci&oacute;n de Datos Personales en Posesi&oacute;n de Particulares hacemos de su conocimiento que Portlog International SA de CV, con domicilio en Ixcateopan 245, Int 2 Col. Santa Cruz Atoyac, Del. Benito Ju&aacute;rez CP. 03310, M&eacute;xico, D.F. es responsable de recabar sus datos personales, del uso que se le d&eacute; a los mismos y de su protecci&oacute;n.</p>\r\n<p>Su informaci&oacute;n personal ser&aacute; utilizada para las siguientes finalidades: proveer los servicios y productos que ha solicitado; notificarle sobre nuevos servicios o productos que tengan relaci&oacute;n con los ya contratados o adquiridos; comunicarle sobre cambios en los mismos; elaborar estudios y programas que son necesarios para determinar h&aacute;bitos de consumo; realizar evaluaciones peri&oacute;dicas de nuestros productos y servicios a efecto de mejorar la calidad de los mismos; evaluar la calidad del servicio que brindamos, y en general, para dar cumplimiento a las obligaciones que hemos contra&iacute;do con usted.</p>\r\n<p>Para las finalidades antes mencionadas, requerimos obtener los siguientes datos personales:</p>\r\n<ul>\r\n<li>Nombre completo</li>\r\n<li>Tel&eacute;fono fijo y/o celular</li>\r\n<li>Portlog International SA de CV</li>\r\n<li>Giro de su empresa</li>\r\n<li>operaciones@portloginter.com</li>\r\n<li>Ixcateopan 245, Int 2 Col. Santa Cruz Atoyac, Del. Benito Ju&aacute;rez CP. 03310, M&eacute;xico, D.F.</li>\r\n<li>RFC y/o CURP</li>\r\n</ul>\r\n<p>Es importante informarle que usted tiene derecho al Acceso, Rectificaci&oacute;n y Cancelaci&oacute;n de sus datos personales, a Oponerse al tratamiento de los mismos o a revocar el consentimiento que para dicho fin nos haya otorgado.</p>\r\n<p>Para ello, es necesario que env&iacute;e la solicitud en los t&eacute;rminos que marca la Ley en su Art. 29 a Portlog International SA de CV, responsable de nuestro Departamento de Protecci&oacute;n de Datos Personales, ubicado en Ixcateopan 245, Int 2 Col. Santa Cruz Atoyac, Del. Benito Ju&aacute;rez CP. 03310, M&eacute;xico, D.F. , o bien, se comunique al tel&eacute;fono Tel&eacute;fono o v&iacute;a correo electr&oacute;nico a Correo, el cual solicitamos confirme v&iacute;a telef&oacute;nica para garantizar su correcta recepci&oacute;n.</p>\r\n<p>En caso de que no desee de recibir mensajes promocionales de nuestra parte, puede enviarnos su solicitud por medio de la direcci&oacute;n electr&oacute;nica: operaciones@portloginter.com</p>', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'leyenda', 'PORTLOG INTERNATIONAL', NULL, 'PORTLOG INTERNATIONAL, S.A. DE C.V. 2016', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'empresa', 'Empresa Asociada', NULL, NULL, NULL, 'WWWPC.png', NULL, 'Empresa Asociada', 'Empresa Asociada | PORTLOG INTERNATIONAL', NULL),
(28, 'formulario', 'Formulario', 'GRACIAS', 'mbuetler@portloginter.com,\r\noperaciones@portloginter.com', '<p>Gracias por tu mensaje, pronto recibiras un correo por parte de nuestro equipo</p>', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `servicios`
--

DROP TABLE IF EXISTS `servicios`;
CREATE TABLE IF NOT EXISTS `servicios` (
  `id_servicios` int(250) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `imagen` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `orden` int(250) DEFAULT NULL,
  PRIMARY KEY (`id_servicios`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `servicios`
--

INSERT INTO `servicios` (`id_servicios`, `titulo`, `descripcion`, `imagen`, `orden`) VALUES
(1, 'Transporte Marítimo', '<p>Damos una extensa gama de opciones con l&iacute;neas navieras reconocidas para los servicios transporte mar&iacute;timo&nbsp;de &nbsp;importaci&oacute;n y exportaci&oacute;n hacia o desde cualquier parte del mundo y ofrecemos:</p>\r\n<ul>\r\n<li>Transporte mar&iacute;timo/NVOCC/LCL,FCL 20/40 BOX, HC, OT, FR, Reefer.</li>\r\n<li>Fletamiento de buques y barcazas.</li>\r\n<li>Compra y venta de contenedores mar&iacute;timos SOC.</li>\r\n<li>Consolidaciones y desconsolidaciones, trincados, maniobras portuarias.</li>\r\n<li>Despachos aduanales en los principales puertos del pa&iacute;s.</li>\r\n<li>Servicio log&iacute;stico en origen y destino a trav&eacute;s de nuestras oficinas en todo el mundo.</li>\r\n<li>Almacenaje/centros de distribuci&oacute;n.</li>\r\n<li>Servicio de asesor&iacute;a en comercio exterior y servicios aduanales.</li>\r\n<li>Mudanzas internacionales.</li>\r\n<li>Transporte refrigerado perecederos.</li>\r\n</ul>', 'transporte-maritimo.png', 1),
(2, 'Carga Proyecto', '<p>Como l&iacute;der en el mercado en carga sobredimensionada y pesada, contamos con el apoyo de proveedores nacionales y extranjeros experimentados del sector naviero y terrestre con equipo especializado que en conjunto damos soluciones de&nbsp;carga proyecto para sus importaciones y exportaciones hacia y desde cualquier parte en el mundo y ofrecemos:</p>\r\n<ul>\r\n<li>Equipo mar&iacute;timo especializado para proyectos industriales con carga sobredimensionada BreakBulk, Heavy Lift, Ro-Ro, MAFI, Flat Rack, Open Top.</li>\r\n<li>Servicio terrestre con equipo especializado/sobredimensionada-pesado, lowboy, semilowboy, modulares, dolly.</li>\r\n<li>Montacargas, rodillos de carga, gatos hidr&aacute;ulicos, patines, montajes e izajes, gr&uacute;as Industriales 50,100, 500, 1000 tons., gr&uacute;as marinas.</li>\r\n<li>Consolidaciones y desconsolidaciones, trincados, maniobras portuarias.</li>\r\n<li>Servicio mar&iacute;timo OFFSHORE.</li>\r\n<li>Despachos aduanales en los principales puertos, aeropuertos y fronteras del pa&iacute;s.</li>\r\n<li>Servicio log&iacute;stico en origen y destino a trav&eacute;s de nuestras oficinas especializadas en carga proyecto en todo el mundo.</li>\r\n<li>Fletamiento de buques y barcazas.</li>\r\n<li>Compra y venta de contenedores mar&iacute;timos SOC.</li>\r\n<li>Empaques industriales/etiquetado.</li>\r\n<li>Inspecciones certificadas SGS/Veritas.</li>\r\n<li>Estudios de ruta para carga proyecto.</li>\r\n</ul>', 'servicio.jpg', 2),
(3, 'Transporte Aéreo', '<p>Creamos soluciones de&nbsp;Transporte A&eacute;reo de importaci&oacute;n y exportaci&oacute;n &nbsp;que se adaptan a necesidades de urgencia o especializaci&oacute;n de cada tipo de carga y ofrecemos:</p>\n<ul>\n<li>Transporte a&eacute;reo IATA, directo, consolidado, servicio especializado de charters carga a&eacute;rea.</li>\n<li>Despachos aduanales en los principales aeropuertos del pa&iacute;s.</li>\n<li>Hand Carry.</li>\n<li>Servicio log&iacute;stico en origen y destino a trav&eacute;s de nuestras oficinas en todo el mundo.</li>\n<li>Almacenaje/centros de distribuci&oacute;n.</li>\n<li>Servicio de asesor&iacute;a en comercio exterior y servicios aduanales.</li>\n<li>Mudanzas internacionales.</li>\n<li>Transporte refrigerado perecederos.</li>\n</ul>', 'transporte-aereo.png', 3),
(4, 'Transporte Terrestre', '<p>Contamos con una amplia gama de soluciones para la&nbsp;importaci&oacute;n y exportaci&oacute;n, con proveedores que cuentan con unidades est&aacute;ndar para cualquier tipo de carga y equipo terrestre especializado hacia y desde&nbsp;Canad&aacute;,&nbsp;Estados Unidos&nbsp;y&nbsp;Centro Am&eacute;rica y ofrecemos:</p>\r\n<ul>\r\n<li>Servicio terrestre nacional/internacional para carga FTL/LTL, plataforma, caja seca.</li>\r\n<li>Servicio terrestre con equipo especializado/sobredimensionada-pesado, lowboy, semilowboy, modulares, dolly.</li>\r\n<li>Despachos aduanales en los principales puertos, aeropuertos y fronteras del pa&iacute;s.</li>\r\n<li>Mudanzas internacionales.</li>\r\n<li>Transporte refrigerado perecederos.</li>\r\n</ul>', 'transporte-terrestre.png', 4),
(5, 'Otros Servicios', '<p>Como soporte adicional a nuestros servicios mar&iacute;timos, carga proyecto, terrestres y a&eacute;reos ofrecemos:</p>\r\n<ul>\r\n<li>Contratos/estrategias de log&iacute;stica.</li>\r\n<li>Almacenaje/centros de distribuci&oacute;n.</li>\r\n<li>Almac&eacute;n fiscalizado.</li>\r\n<li>Comercializadora.</li>\r\n<li>Seguro de transporte nacional e internacional.</li>\r\n<li>Empaques de cualquier tipo.</li>\r\n<li>Manejo y asesor&iacute;a de carga peligrosa.</li>\r\n</ul>', 'otros-servicios.png', 5);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(250) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(500) DEFAULT NULL,
  `pass` text,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `pass`) VALUES
(1, 'admin_portlog', 'ff2550ed6ade890a7cef7be85e4dbd1603e99434f3e5d378b4f40144d4577080');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
