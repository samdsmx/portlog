-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 08, 2016 at 09:48 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `paginade_port-ingles`
--
CREATE DATABASE IF NOT EXISTS `paginade_port-ingles` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `paginade_port-ingles`;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
CREATE TABLE IF NOT EXISTS `banner` (
  `id_banner` int(250) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) DEFAULT NULL,
  `descripcion` text,
  `imagen` varchar(250) DEFAULT NULL,
  `url` text,
  `orden` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_banner`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id_banner`, `titulo`, `descripcion`, `imagen`, `url`, `orden`) VALUES
(1, 'Industrial projects', 'Best quality service and experience', 'b1.jpg', NULL, '1'),
(2, 'Air transportation', 'Your products will be on time', 'b2.jpg', NULL, '2'),
(3, 'Sea Transportation', 'Your products will travel safely', 'b3.jpg', NULL, '3'),
(4, 'Land transportation', 'Competitive rates and flexible terms', 'b4.jpg', NULL, '4');

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_clientes` int(250) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) DEFAULT NULL,
  `imagen` varchar(500) DEFAULT NULL,
  `orden` int(250) DEFAULT NULL,
  PRIMARY KEY (`id_clientes`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id_clientes`, `titulo`, `imagen`, `orden`) VALUES
(1, 'Automotive Industry', 'sector-automotriz.jpg', 1),
(2, 'Gas Industry', 'sector-del-gas.jpg', 2),
(3, 'Wind Industry', 'sector-eolico.jpg', 3),
(4, 'Oil Industry', 'sector-petrolero.jpg', 4),
(5, 'Textile Industry', 'sector-textil.jpg', 5),
(6, 'Dredging Industry', 'sector-fragado.jpg', 6),
(7, 'Telecommunications Industry', 'sector-telecominicaciones.jpg', 7),
(8, 'Brewing Industry', 'sector-servecero.jpg', 8),
(9, 'Mining Industry', 'sector-minero.jpg', 9),
(10, 'Construction Industry', 'sector-construccion.jpg', 10),
(11, 'Aerospace Industry', 'sector-aeroespacial.jpg', 11);

-- --------------------------------------------------------

--
-- Table structure for table `galeria`
--

DROP TABLE IF EXISTS `galeria`;
CREATE TABLE IF NOT EXISTS `galeria` (
  `id_galeria` int(250) NOT NULL AUTO_INCREMENT,
  `orden` int(250) DEFAULT NULL,
  `imagen` varchar(500) DEFAULT NULL,
  `titulo_imagen` varchar(500) DEFAULT NULL,
  `desc_imagen` varchar(500) DEFAULT NULL,
  `titulo` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_galeria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `galeria`
--

INSERT INTO `galeria` (`id_galeria`, `orden`, `imagen`, `titulo_imagen`, `desc_imagen`, `titulo`) VALUES
(1, 1, 'projec_altamira.jpg', NULL, NULL, 'Project Altamira'),
(2, 2, 'projec_altamira2.jpg', NULL, NULL, 'Project Altamira 2'),
(3, 3, 'projec_campeche.jpg', NULL, NULL, 'Project Campeche'),
(4, 4, 'projec_coatzacoalcos.jpg', NULL, NULL, 'Project Coatzacoalcos'),
(5, 5, 'projec_coatzacoalcos1.jpg', NULL, NULL, 'Project Coatzacoalcos 1'),
(6, 6, 'projec_coatzacoalcos2.jpg', NULL, NULL, 'Project Coatzacoalcos 2'),
(7, 7, 'projec_juchitan.jpg', NULL, NULL, 'Project Juchitan'),
(8, 8, 'lazaro-cardenas.jpg', NULL, NULL, 'Project Lázaro cardenas'),
(9, 9, 'manzanillo.jpg', NULL, NULL, 'Project Manzanillo'),
(10, 10, 'ramoz_arizme.jpg', NULL, NULL, 'Project Ramos Arizpe'),
(12, 12, 'veracruz2.jpg', NULL, NULL, 'Project Veracruz 2'),
(13, 13, 'veracruz3.jpg', NULL, NULL, 'Project Veracruz 3'),
(14, 14, 'toluca.jpg', NULL, NULL, 'Project Toluca'),
(15, 15, 'TRAFO-MTY-ZAC2.jpg', NULL, NULL, 'Project Zacatecas'),
(16, 16, 'VERACRUZ1.jpg', NULL, NULL, 'Project Veracruz 1'),
(17, 17, 'VERACRUZ4.jpg', NULL, NULL, 'Project Veracruz 4'),
(18, 18, 'veracruz5.jpg', NULL, NULL, 'Project Veracruz 5'),
(19, 19, 'varios.jpg', NULL, NULL, 'Project Others'),
(20, 20, 'manzanillo2.jpg', NULL, NULL, 'Project Manzanillo 2'),
(21, 21, 'veracruz.jpg', NULL, NULL, 'Project Veracruz'),
(22, 22, 'salinacruz.jpg', NULL, NULL, 'Project Salina Cruz'),
(23, 23, 'toluca1.jpg', NULL, NULL, 'Project Toluca 1'),
(24, 24, 'dosbocas.jpg', NULL, NULL, 'Project Dos Bocas');

-- --------------------------------------------------------

--
-- Table structure for table `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE IF NOT EXISTS `imagenes` (
  `id_imagenes` int(250) NOT NULL AUTO_INCREMENT,
  `orden` int(250) NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `galeria` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_imagenes`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=178 ;

--
-- Dumping data for table `imagenes`
--

INSERT INTO `imagenes` (`id_imagenes`, `orden`, `imagen`, `titulo`, `galeria`) VALUES
(67, 1, 'Altamira-1.jpg', 'Altamira', '1'),
(75, 1, 'Campeche-1.jpg', 'Campeche', '3'),
(90, 1, 'Coatzacualcos-1.jpg', 'Coatzacoalcos', '4'),
(4, 1, 'Toluca1-1.jpg', 'Project Toluca 1', '23'),
(5, 2, 'Toluca1-2.jpg', 'Project Toluca 1', '23'),
(6, 3, 'Toluca1-3.jpg', 'Project Toluca 1', '23'),
(7, 4, 'Toluca1-4.jpg', 'Project Toluca 1', '23'),
(8, 5, 'Toluca1-5.jpg', 'Proyecto Toluca 1', '23'),
(9, 6, 'Toluca1-6.jpg', 'Proyecto Toluca 1', '23'),
(10, 7, 'Toluca1-7.jpg', 'Proyecto Toluca 1', '23'),
(11, 1, 'TRAFO-1.jpg', 'Project Trafo MTY-ZAC', '25'),
(12, 2, 'TRAFO-2.jpg', 'Project Trafo MTY-ZAC', '25'),
(13, 3, 'TRAFO-3.jpg', 'Project Trafo MTY-ZAC', '25'),
(15, 4, 'TRAFO-4.jpg', 'Project Trafo MTY-ZAC', '25'),
(16, 5, 'TRAFO-5.jpg', 'Proyecto Trafo MTY-ZAC', '25'),
(17, 6, 'TRAFO-6.jpg', 'Proyecto Trafo MTY-ZAC', '25'),
(18, 1, '1-veracruz.jpg', 'Project Veracruz', '21'),
(19, 2, '2-veracruz.jpg', 'Project Veracruz', '21'),
(20, 3, '3-veracruz.jpg', 'Project Veracruz', '21'),
(21, 4, '4-veracruz.jpg', 'Project Veracruz', '21'),
(22, 5, '5-veracruz.jpg', 'Proyecto Veracruz ', '21'),
(23, 6, '6-veracruz.jpg', 'Proyecto Veracruz ', '21'),
(24, 7, '7-veracruz.jpg', 'Proyecto Veracruz ', '21'),
(25, 8, '8-veracruz.jpg', 'Proyecto Veracruz ', '21'),
(26, 9, '9-veracruz.jpg', 'Proyecto Veracruz ', '21'),
(27, 10, '10-veracruz.jpg', 'Proyecto Veracruz ', '21'),
(28, 11, '11-veracruz.jpg', 'Proyecto Veracruz ', '21'),
(29, 12, '12-veracruz.jpg', 'Proyecto Veracruz ', '21'),
(30, 1, 'Varios1.jpg', 'Project Others', '19'),
(31, 2, 'Varios2.jpg', 'Project Others', '19'),
(32, 3, 'Varios3 (2).jpg', 'Project Others', '19'),
(33, 4, 'Varios3.jpg', 'Project Others', '19'),
(34, 5, 'Varios4.jpg', 'Project Others', '19'),
(35, 6, 'Varios5.jpg', 'Project Others', '19'),
(36, 7, 'Varios6.jpg', 'Project Others', '19'),
(37, 1, 'Veracruz5-1.jpg', 'Project Veracruz 5', '18'),
(38, 2, 'Veracruz5-2.jpg', 'Project Veracruz 5', '18'),
(39, 3, 'Veracruz5-3.jpg', 'Project Veracruz 5', '18'),
(40, 4, 'Veracruz5-4.jpg', 'Project Veracruz 5', '18'),
(41, 1, 'Veracruz4-1.jpg', 'Project Veracruz 4', '17'),
(42, 2, 'Veracruz4-2.jpg', 'Project Veracruz 4', '17'),
(43, 3, 'Veracruz4-3.jpg', 'Project Veracruz 4', '17'),
(44, 4, 'Veracruz4-4.jpg', 'Project Veracruz 4', '17'),
(45, 5, 'Veracruz4-5.jpg', 'Project Veracruz 4', '17'),
(46, 6, 'Veracruz4-6.jpg', 'Project Veracruz 4', '17'),
(47, 7, 'Veracruz4-7.jpg', 'Project Veracruz 4', '17'),
(48, 1, 'Veracruz1-0.jpg', 'Project Veracruz 1', '16'),
(49, 2, 'Veracruz1-1.jpg', 'Project Veracruz 1', '16'),
(50, 3, 'Veracruz1-2.jpg', 'Project Veracruz 1', '16'),
(51, 4, 'Veracruz1-3.jpg', 'Project Veracruz 1', '16'),
(52, 1, 'Veracruz3-1.jpg', 'Project Veracruz 3', '13'),
(53, 2, 'Veracruz3-2.jpg', 'Project Veracruz 3', '13'),
(54, 3, 'Veracruz3-3.jpg', 'Project Veracruz 3', '13'),
(55, 4, 'Veracruz3-4.jpg', 'Project Veracruz 3', '13'),
(56, 5, 'Veracruz3-5.jpg', 'Project Veracruz 3', '13'),
(57, 6, 'Veracruz3-6.jpg', 'Project Veracruz 3', '13'),
(58, 7, 'Veracruz3-7.jpg', 'Project Veracruz 3', '13'),
(59, 8, 'Veracruz3-8.jpg', 'Project Veracruz 3', '13'),
(60, 9, 'Veracruz3-9.jpg', 'Project Veracruz 3', '13'),
(61, 1, 'Veracruz2-1.jpg', 'Project Veracruz 2', '12'),
(62, 2, 'Veracruz2-2.jpg', 'Project Veracruz 2', '12'),
(63, 3, 'Veracruz2-3.jpg', 'Project Veracruz 2', '12'),
(64, 4, 'Veracruz2-4.jpg', 'Project Veracruz 2', '12'),
(65, 5, 'Veracruz2-5.jpg', 'Project Veracruz 2', '12'),
(66, 6, 'Veracruz2-6.jpg', 'Project Veracruz 2', '12'),
(68, 2, 'Altamira-2.jpg', 'Altamira', '1'),
(69, 1, 'AltamiraII-1.jpg', 'AltamiraII', '2'),
(70, 2, 'AltamiraII-2.jpg', 'AltamiraII', '2'),
(71, 3, 'AltamiraII-3.jpg', 'AltamiraII', '2'),
(72, 4, 'AltamiraII-4.jpg', 'AltamiraII', '2'),
(73, 5, 'AltamiraII-5.jpg', 'AltamiraII', '2'),
(74, 6, 'AltamiraII-6.jpg', 'AltamiraII', '2'),
(76, 2, 'Campeche-2.jpg', 'Campeche', '3'),
(77, 3, 'Campeche-3.jpg', 'Campeche', '3'),
(78, 4, 'Campeche-4.jpg', 'Campeche', '3'),
(85, 5, 'Campeche-5.jpg', 'Campeche', '3'),
(81, 6, 'Campeche-6.jpg', 'Campeche', '3'),
(82, 7, 'Campeche-7.jpg', 'Campeche', '3'),
(83, 8, 'Campeche-8.jpg', 'Campeche', '3'),
(84, 9, 'Campeche-9.jpg', 'Campeche', '3'),
(86, 10, 'Campeche-10.jpg', 'Campeche', '3'),
(87, 11, 'Campeche-11.jpg', 'Campeche', '3'),
(88, 12, 'Campeche-12.jpg', 'Campeche', '3'),
(89, 13, 'Campeche-13.jpg', 'Campeche', '3'),
(91, 2, 'Coatzacualcos-2.jpg', 'Coatzacoalcos', '4'),
(92, 3, 'Coatzacualcos-3.jpg', 'Coatzacoalcos', '4'),
(93, 4, 'Coatzacualcos-4.jpg', 'Coatzacoalcos', '4'),
(94, 5, 'Coatzacualcos-5.jpg', 'Coatzacoalcos', '4'),
(95, 1, 'CoatzacualcosI-1.jpg', 'Coatzacoalcos I', '5'),
(96, 2, 'CoatzacualcosI-2.jpg', 'Coatzacoalcos I', '5'),
(97, 3, 'CoatzacualcosI-3.jpg', 'Coatzacoalcos I', '5'),
(98, 4, 'CoatzacualcosI-4.jpg', 'Coatzacoalcos I', '5'),
(99, 5, 'CoatzacualcosI-5.jpg', 'Coatzacoalcos I', '5'),
(100, 6, 'CoatzacualcosI-6.jpg', 'Coatzacoalcos I', '5'),
(101, 7, 'CoatzacualcosI-7.jpg', 'Coatzacoalcos I', '5'),
(102, 1, 'CoatzacualcosII-1.jpg', 'Coatzacoalcos II', '6'),
(103, 2, 'CoatzacualcosII-2.jpg', 'Coatzacoalcos II', '6'),
(104, 3, 'CoatzacualcosII-3.jpg', 'Coatzacoalcos II', '6'),
(105, 4, 'CoatzacualcosII-4.jpg', 'Coatzacoalcos II', '6'),
(106, 5, 'CoatzacualcosII-5.jpg', 'Coatzacoalcos II', '6'),
(107, 1, 'JUCHITAN-1.jpg', 'juchitan', '7'),
(108, 2, 'JUCHITAN -2.jpg', 'juchitan', '7'),
(109, 3, 'JUCHITAN-3.jpg', 'juchitan', '7'),
(110, 4, 'JUCHITAN-4.jpg', 'juchitan', '7'),
(111, 5, 'JUCHITAN-5.jpg', 'juchitan', '7'),
(112, 1, 'LAZARO CARDENAS-1.jpg', 'lazaro cardenas', '8'),
(113, 2, 'LAZARO CARDENAS-2.jpg', 'lazaro cardenas', '8'),
(114, 3, 'LAZARO CARDENAS-4.jpg', 'lazaro cardenas', '8'),
(115, 5, 'LAZARO CARDENAS -5.jpg', 'lazaro cardenas', '8'),
(116, 6, 'LAZARO CARDENAS-6.jpg', 'lazaro cardenas', '8'),
(117, 7, 'LAZARO CARDENAS-7.jpg', 'lazaro cardenas', '8'),
(118, 8, 'LAZARO CARDENAS-8.jpg', 'lazaro cardenas', '8'),
(119, 1, 'MANZANILLO-1.JPG', 'Manzanillo', '9'),
(120, 2, 'MANZANILLO-2.JPG', 'Manzanillo', '9'),
(121, 3, 'MANZANILLO-3.jpg', 'Manzanillo', '9'),
(122, 4, 'MANZANILLO-4.jpg', 'Manzanillo', '9'),
(123, 5, 'MANZANILLO-5.jpg', 'Manzanillo', '9'),
(124, 6, 'MANZANILLO-6.jpg', 'Manzanillo', '9'),
(125, 7, 'MANZANILLO-7.jpg', 'Manzanillo', '9'),
(126, 8, 'MANZANILLO-8.jpg', 'Manzanillo', '9'),
(127, 9, 'MANZANILLO-9.jpg', 'Manzanillo', '9'),
(128, 10, 'MANZANILLO-10.jpg', 'Manzanillo', '9'),
(129, 11, 'MANZANILLO-11.jpg', 'Manzanillo', '9'),
(130, 12, 'MANZANILLO-12.jpg', 'Manzanillo', '9'),
(131, 13, 'MANZANILLO-13.jpg', 'Manzanillo', '9'),
(132, 14, 'MANZANILLO-14.jpg', 'Manzanillo', '9'),
(133, 1, 'Ramos arizpe-1.jpg', 'Ramos arizpe', '10'),
(134, 2, 'Ramos arizpe-2.jpg', 'Ramos arizpe', '10'),
(135, 3, 'Ramos arizpe-3.jpg', 'Ramos arizpe', '10'),
(136, 4, 'Ramos arizpe-4.jpg', 'Ramos arizpe', '10'),
(137, 1, 'Toluca-1.jpg', 'Toluca', '14'),
(138, 2, 'Toluca-2.jpg', 'Toluca', '14'),
(139, 3, 'Toluca-3.jpg', 'Toluca', '14'),
(140, 4, 'Toluca-4.jpg', 'Toluca', '14'),
(141, 1, 'Salina cruz-1.jpg', 'Salina cruz', '22'),
(142, 2, 'Salina cruz-2.jpg', 'Salina cruz', '22'),
(143, 3, 'Salina cruz-3.jpg', 'Salina cruz', '22'),
(144, 4, 'Salina cruz-4.jpg', 'Salina cruz', '22'),
(145, 5, 'Salina cruz-5.jpg', 'Salina cruz', '22'),
(146, 6, 'Salina cruz-6.jpg', 'Salina cruz', '22'),
(147, 7, 'Salina cruz-7.jpg', 'Salina cruz', '22'),
(148, 8, 'Salina cruz-8.jpg', 'Salina cruz', '22'),
(149, 9, 'Salina cruz-9.jpg', 'Salina cruz', '22'),
(150, 1, 'Dos bocas-1.jpg', 'Dos bocas', '24'),
(151, 2, 'Dos bocas-2.jpg', 'Dos bocas', '24'),
(152, 3, 'Dos bocas-3.jpg', 'Dos bocas', '24'),
(153, 4, 'Dos bocas-4.jpg', 'Dos bocas', '24'),
(154, 5, 'Dos bocas-5.jpg', 'Dos bocas', '24'),
(155, 6, 'Dos bocas-6.jpg', 'Dos bocas', '24'),
(156, 7, 'Dos bocas-7.jpg', 'Dos bocas', '24'),
(159, 8, 'Dos bocas-8.jpg', 'Dos bocas', '24'),
(160, 9, 'Dos bocas-9.jpg', 'Dos bocas', '24'),
(161, 10, 'Dos bocas-10.jpg', 'Dos bocas', '24'),
(162, 11, 'Dos bocas-11.jpg', 'Dos bocas', '24'),
(163, 1, 'ZACA_1 (1).jpg', 'Zacatecas', '15'),
(164, 2, 'ZACA_1 (2).jpg', 'Zacatecas', '15'),
(165, 3, 'ZACA_1 (3).jpg', 'Zacatecas', '15'),
(166, 4, 'ZACA_1 (4).jpg', 'Zacatecas', '15'),
(167, 5, 'ZACA_1 (5).jpg', 'Zacatecas', '15'),
(168, 1, 'MAN_1 (1).jpg', 'Manzanillo 2', '20'),
(169, 2, 'MAN_1 (2).jpg', 'Manzanillo 2', '20'),
(170, 3, 'MAN_1 (3).jpg', 'Manzanillo 2', '20'),
(171, 4, 'MAN_1 (4).jpg', 'Manzanillo 2', '20'),
(172, 5, 'MAN_1 (5).jpg', 'Manzanillo 2', '20'),
(173, 6, 'MAN_1 (6).jpg', 'Manzanillo 2', '20'),
(174, 7, 'MAN_1 (7).jpg', 'Manzanillo 2', '20'),
(175, 8, 'MAN_1 (8).jpg', 'Manzanillo 2', '20'),
(176, 9, 'MAN_1 (9).jpg', 'Manzanillo 2', '20'),
(177, 10, 'MAN_1 (10).jpg', 'Manzanillo 2', '20');

-- --------------------------------------------------------

--
-- Table structure for table `metas`
--

DROP TABLE IF EXISTS `metas`;
CREATE TABLE IF NOT EXISTS `metas` (
  `id_metas` int(250) NOT NULL AUTO_INCREMENT,
  `seccion` varchar(500) DEFAULT NULL,
  `meta_tit` text,
  `meta_desc` text,
  `meta_keys` text,
  PRIMARY KEY (`id_metas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `metas`
--

INSERT INTO `metas` (`id_metas`, `seccion`, `meta_tit`, `meta_desc`, `meta_keys`) VALUES
(1, 'inicio', 'Inicio  | PORTLOG INTERNATIONAL', 'Para servir a nuestros Clientes, Proveedores y Agentes Contamos con cobertura y asesoria en los principales puertos de nuestro paÃ­s', 'portlog, logista, portlog inicio, proyectos industriales, transportacion martima, transportacion terrestre, transportacion aerea, PORTLOG INTERNATIONAL, servicios aereos, servicios terrestres, servicios maritimos, importacion, exportacion, servicios logisticos'),
(2, 'nosotros', 'Nosotros  | PORTLOG INTERNATIONAL ', 'portlog, portlog nuestra empresa, logista, proyectos industriales, transportacion martima, transportacion terrestre, transportacion aerea, PORTLOG INTERNATIONAL, importaciones, exportaciones, empresas de logistica, logistica internacional', 'Portlog es una empresa con mÃ¡s de 10 aÃ±os de experiencia en logÃ­stica internacional, lÃ­der en servicios marÃ­timos y transportaciÃ³n de proyectos industriales'),
(3, 'servicios', 'Servicios | PORTLOG INTERNATIONAL', 'Creamos soluciones de Transporte AÃ©reo de importaciÃ³n y exportaciÃ³n  que se adaptan a necesidades de urgencia o especializaciÃ³n de cada tipo de carga y ofrecemos:', 'portlog, portlog servicios, logista, proyectos industriales, transportacion martima, transportacion terrestre, transportacion aerea, PORTLOG INTERNATIONAL, carga de proyecto, transporte martimo, transporte aereo, transporte terrestre, estrategias logisticas, importaciÃ³n, exportaciÃ³n'),
(4, 'galeria', 'GalerÃ­a| PORTLOG INTERNATIONAL', 'Portlog es una empresa con mÃ¡s de 10 aÃ±os de experiencia en logÃ­stica internacional, lÃ­der en servicios marÃ­timos y transportaciÃ³n de proyectos industriales', 'portlog, portlog galeria, logista, proyectos industriales, transportacion martima, transportacion terrestre, transportacion aerea, PORTLOG INTERNATIONAL, importaciones, exportaciones, empresas de logistica, logistica internacional'),
(5, 'contacto', 'Contacto | PORTLOG INTERNATIONAL', 'Portlog es una empresa con mÃ¡s de 10 aÃ±os de experiencia en logÃ­stica internacional, lÃ­der en servicios marÃ­timos y transportaciÃ³n de proyectos industriales', 'portlog, logista, portlog contacto, proyectos industriales, transportacion martima, transportacion terrestre, transportacion aerea, PORTLOG INTERNATIONAL, importaciones, exportaciones, empresas de logistica, logistica internacional'),
(6, 'aviso', 'Aviso', 'Portlog es una empresa con mÃ¡s de 10 aÃ±os de experiencia en logÃ­stica internacional, lÃ­der en servicios marÃ­timos y transportaciÃ³n de proyectos industriales', 'portlog, portlog nuestra empresa, logista, proyectos industriales, transportacion martima, transportacion terrestre, transportacion aerea, PORTLOG INTERNATIONAL, importaciones, exportaciones, empresas de logistica, logistica internacional, portlog aviso de privacidad'),
(7, 'clientes', 'Clientes  | PORTLOG INTERNATIONAL', 'Portlog es una empresa con mÃ¡s de 10 aÃ±os de experiencia en logÃ­stica internacional, lÃ­der en servicios marÃ­timos y transportaciÃ³n de proyectos industriales', 'portlog, portlog clientes, logista, proyectos industriales, transportacion martima, transportacion terrestre, transportacion aerea, PORTLOG INTERNATIONAL, importaciones, exportaciones, empresas de logistica, logistica internacional');

-- --------------------------------------------------------

--
-- Table structure for table `op4`
--

DROP TABLE IF EXISTS `op4`;
CREATE TABLE IF NOT EXISTS `op4` (
  `id_op` int(250) NOT NULL AUTO_INCREMENT,
  `seccion` varchar(500) DEFAULT NULL,
  `titulo` varchar(500) DEFAULT NULL,
  `subtitulo` varchar(500) DEFAULT NULL,
  `descripcion` text,
  `texto` text,
  `imagen` varchar(500) DEFAULT NULL,
  `archivo` varchar(500) DEFAULT NULL,
  `titulo_imagen` varchar(500) DEFAULT NULL,
  `desc_imagen` text,
  `url` text,
  PRIMARY KEY (`id_op`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `op4`
--

INSERT INTO `op4` (`id_op`, `seccion`, `titulo`, `subtitulo`, `descripcion`, `texto`, `imagen`, `archivo`, `titulo_imagen`, `desc_imagen`, `url`) VALUES
(1, 'logotipo', 'Logotipo', NULL, NULL, NULL, NULL, NULL, 'PORTLOG INTERNATIONAL, S.A. DE C.V. ', 'logotipo casa portlong', NULL),
(2, 'sem1', 'Google Tag Mannager', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'bloque1', 'Airfreight', 'Charter service for air shipments.', NULL, NULL, 'servicios-aereos.png', NULL, 'Air Service', 'Charters service for air shipments.', NULL),
(4, 'bloque2', 'Overland', 'We count with specialized equipments.', NULL, NULL, 'servicios-terrestres.png', NULL, 'Ground Service', 'We count with specialized units.', NULL),
(5, 'bloque3', 'Seafreight', 'Represented by 250 offices.', NULL, NULL, 'servicios-maritimos.png', NULL, 'Sea Service', 'Represented for 250 offices.', NULL),
(6, 'bloque4', 'To serve our', 'Customers, Suppliers and Agents', '<p>We count with coverage and consulting in all main ports and airports in&nbsp;&nbsp;our country:</p>\r\n<ul>\r\n<li>Manzanillo</li>\r\n<li>Coatzacoalcos</li>\r\n<li>Quer&eacute;taro</li>\r\n<li>L&aacute;zaro C&aacute;rdenas</li>\r\n<li>Ensenada</li>\r\n<li>Veracruz</li>\r\n<li>Nuevo Laredo</li>\r\n<li>Salina Cruz</li>\r\n<li>Guadalajara</li>\r\n<li>Altamira</li>\r\n<li>Mexico City</li>\r\n</ul>', NULL, 'clientes-provedores-agentes-portlog.png', NULL, '', '', NULL),
(7, 'bloque5', 'Experience in:', NULL, '<ul>\r\n<li>Industrial Projects</li>\r\n<li>Import</li>\r\n<li>Export</li>\r\n<li>Logistic Services</li>\r\n</ul>', NULL, 'importacion-exportacion.png', NULL, 'PORTLOG INTERNATIONAL, S.A. DE C.V.', 'Experience in:Industries Projects,Importation\r\n,Exportation,  Logistical Service', NULL),
(8, 'nosotros', 'OUR COMPANY', '10 years of experience in international logistics.', '<p>Portlog is a company with more than 10 years of experience in international logistics, leader in&nbsp;maritime services and transportation of industrial projects with an optimal management of its&nbsp;imports and exports to and from any part of the world by being part of a network of recognized&nbsp;logistics companies worldwide and backed by more than 250 offices in 5 continents.</p>', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'imagen', 'logistica internacional 1', NULL, NULL, NULL, 'logistica-internacional1.png', NULL, NULL, 'logistica-internacional1', NULL),
(10, 'imagen', 'logistica internacional2', NULL, NULL, NULL, 'logistica-internacional2.png', NULL, NULL, 'PORTLOG INTERNATIONAL, S.A. DE C.V. l logistica-internacional', NULL),
(11, 'imagen', 'PORTLOG INTERNATIONAL, S.A. DE C.V. l 2015', NULL, NULL, NULL, 'logistica-internacional.png', NULL, NULL, 'PORTLOG INTERNATIONAL, S.A. DE C.V. l logistica-internacional', NULL),
(12, 'mision', 'Mission', NULL, '<p>To serve our customers, service providers and international agents with professionalism, veracity and&nbsp;dedication; looking always towards excellence in service.</p>', NULL, 'mision.png', NULL, 'Mission', 'PORTLOG INTERNATIONAL, S.A. DE C.V. l Mission', NULL),
(13, 'vision', 'Vision', NULL, '<p>To supervise in a continuous way&nbsp;the logistic requirements of our customers, thus assuring long&nbsp;term commercial relations through a process of ongoing improvement.</p>', NULL, 'vision.png', NULL, 'Vision', 'PORTLOG INTERNATIONAL, S.A. DE C.V. l Vision', NULL),
(14, 'servicios', 'SERVICES', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'clientes', 'customers', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'galeria', 'Gallery', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'contacto', 'CONTACT', 'Work with the experts.', NULL, NULL, 'contacto2.jpg', NULL, 'CONTACT', 'Worth with the experts.', NULL),
(18, 'cont_img', 'wwpc', NULL, NULL, NULL, 'wwpc.jpg', NULL, NULL, 'alianza | wwpc', NULL),
(19, 'cont_img', 'amanac', NULL, NULL, NULL, 'amanac.jpg', NULL, NULL, 'alianza | amanac', NULL),
(20, 'cont_img', 'iata', NULL, NULL, NULL, 'iata.jpg', NULL, NULL, 'alianza | iata', NULL),
(21, 'direccion', 'Address', NULL, 'HQ Ixcateopan no. 245 Int. 2 Col. Santa Cruz Atoyac C.P. 03310, Mexico City. ', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'telefono', 'Phone', NULL, '+52 (55)5605-6647  <br>\r\n+52 (55)5605-8353', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'email', 'Email', NULL, 'mbuetler@portloginter.com <br>\r\noperaciones@portloginter.com', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'contamos', 'We count with coverage in:', NULL, '<ul>\r\n<li>Mexico City</li>\r\n<li>Queretaro</li>\r\n<li>Veracruz</li>\r\n<li>Manzanillo</li>\r\n<li>Lazaro Cardenas</li>\r\n<li>Nuevo Laredo</li>\r\n<li>Altamira/Tampico</li>\r\n<li>Coatzacoalcos/Dos Bocas</li>\r\n<li>Ensenada</li>\r\n<li>Salina Cruz</li>\r\n</ul>', NULL, 'mapa222.png', NULL, 'We have offices in', 'We have offices in', NULL),
(25, 'aviso', 'Privacy Notice', NULL, '<p>Based on Articles 15 and 16 of the Federal Law on Protection of Personal Data Held by Individuals we inform you that Portlog International SA de CV, established in Ixcateopan 245, Int 2 Col. Santa Cruz Atoyac, Del. Benito Juarez CP. 03310, Mexico, DF is responsible for collecting personal data, the use that is given to them and their protection.</p>\r\n<p>Your personal information will be used for the following purposes: to provide products and services you have requested; notify you of new services or products that are related to the already contracted or acquired; tell you about changes in them; prepare studies and programs are needed to determine spending habits; Periodic evaluations of our products and services in order to improve the quality thereof; evaluate the quality of service we provide, and in general, to comply with the obligations we have undertaken with you.</p>\r\n<p>For the purposes mentioned above, we need to obtain the following personal data:</p>\r\n<ul>\r\n<li>Full name</li>\r\n<li>Phone&nbsp;/&nbsp;mobile phone</li>\r\n<li>Portlog International SA de CV</li>\r\n<li>Business field of your company</li>\r\n<li><a href="mailto:operaciones@portloginter.com">operaciones@portloginter.com</a></li>\r\n<li>Ixcateopan 245, Int 2 Col. Santa Cruz Atoyac , Del. Benito Juarez CP . 03310 , Mexico , DF</li>\r\n<li>RFC and / or CURP</li>\r\n</ul>\r\n<p>It is important to inform you that you have the right to the Access, Rectification and Cancellation of your personal information, and to Oppose its processing or to revoke the consent you have given us. For this to happen, it is necessary for you to send the request in the terms that are stated by the Law in Article 29 to the responsible person at the Personal Information Protection Department, located at&nbsp;Ixcateopan 245, Int 2 Col. Santa Cruz Atoyac , Del. Benito Juarez CP . 03310 , Mexico , DF, or call us at +52 (55)5605-6647 or send us an email to operaciones@portloginter.com, if you send an email we require you to confirm it has been received with a phone call. In case you don&rsquo;t want to receive promotional messages from us, you can send us your request to operaciones@portloginter.com</p>\r\n<div>&nbsp;</div>', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'leyenda', 'PORTLOG INTERNATIONAL', NULL, 'PORTLOG INTERNATIONAL, S.A. DE C.V. 2016', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'empresa', 'Associated Company', NULL, NULL, NULL, 'WWWPC.png', NULL, 'Associated Company', 'Empresa Asociada | PORTLOG INTERNATIONAL', NULL),
(28, 'formulario', 'Formulario', 'GRACIAS', 'mbuetler@portloginter.com, '<p>Gracias por tu mensaje, pronto recibiras un correo por parte de nuestro equipo</p>', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `servicios`
--

DROP TABLE IF EXISTS `servicios`;
CREATE TABLE IF NOT EXISTS `servicios` (
  `id_servicios` int(250) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) DEFAULT NULL,
  `descripcion` text,
  `imagen` text,
  `orden` int(250) DEFAULT NULL,
  PRIMARY KEY (`id_servicios`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `servicios`
--

INSERT INTO `servicios` (`id_servicios`, `titulo`, `descripcion`, `imagen`, `orden`) VALUES
(1, 'Seafreight Transportation', '<p>We offer an extensive range of options with recognized shipping lines for import and export&nbsp;seafreight services to and from any part of the world , we offer.</p>\r\n<ul>\r\n<li>Seafreight services/NVOCC/LCL,FCL 20/40 BOX, HC, OT, FR, Reefer.</li>\r\n<li>Chartering of ships and barges.</li>\r\n<li>Purchase and sale of shipper owned containers SOC.</li>\r\n<li>Consolidations and desconsolidations, lashing, bracing, port maneuvers.</li>\r\n<li>Customs brokerage offices in all main ports of the country.</li>\r\n<li>Logistics services at origin and destination through our worldwide offices.</li>\r\n<li>Storage/Warehouse &amp; distribution centers.</li>\r\n<li>Consulting services in foreign commerce and customs services.</li>\r\n<li>International moving &amp; relocation services.</li>\r\n<li>Refrigerated transport of perishable goods.</li>\r\n</ul>', 'transporte-maritimo.png', 1),
(2, 'Project Cargo Logistics', '<p>As a leader in over-dimensional and heavy cargo loads, we count on the support of experienced&nbsp;national and international service providers in seafreight and land transportation with specialized&nbsp;equipment which can provide solutions for project cargo for your imports and exports to and&nbsp;from any part in the world, we offer.</p>\r\n<ul>\r\n<li>Specialized seafreight equipment for industrial projects with over dimensional/heavy-loads/OOG Cargoes, BreakBulk, Heavy Lift, Ro-Ro, MAFI, Flat Rack, Open Top.</li>\r\n<li>Land transportation with specialized equipment for over dimensional/heavy-loads, Flat Bed, Extendable Flat Bed, Step Deck, Lowboy, Semi-Lowboy, Double Drop, SPMT, Modular equipment, Dolly.</li>\r\n<li>Forklifts, cargo rollers, hydraulic jacks, pallet movers, rigging, installations, lifting,&nbsp;industrial cranes 50, 100, 500, 1000 tons, sea/floating cranes.</li>\r\n<li>Consolidations and desconsolidations, port maneuvers, lashing, bracing, lifting, rigging,&nbsp;jacking, skidding.</li>\r\n<li>OFFSHORE Maritime services.</li>\r\n<li>Customs brokerage in all main ports, airports and borders of the country.</li>\r\n<li>Logistics services at origin and destination through our specialized offices in project cargo&nbsp;around the world.</li>\r\n<li>Chartering of ships, tugs, barges.</li>\r\n<li>Purchase and sale of shipper owned containers SOC.</li>\r\n<li>Heavy Duty Packing, Crating, Labeling.</li>\r\n<li>Certified inspections SGS/Bureau Veritas.</li>\r\n<li>Road studies for project cargoes.</li>\r\n</ul>', 'servicio.jpg', 2),
(3, 'Airfreight Transportation', '<div class="texto_general">\r\n<p>We create airfreight solutions for imports and exports&nbsp;that adapt&nbsp;to the urgency or&nbsp;specialized needs for&nbsp;each kind of cargo, we offer.</p>\r\n<ul>\r\n<li>Direct IATA air transportation, consolidated and specialized services in air cargo charters.</li>\r\n<li>Customs brokerage offices in the main airports of the country.</li>\r\n<li>Hand Carry.</li>\r\n<li>Logistics services at origin and destination through our worldwide offices.</li>\r\n<li>Storage/warehouse &amp; distribution centers.</li>\r\n<li>Consulting services in foreign commerce and customs services.</li>\r\n<li>International moving &amp; relocations services.</li>\r\n<li>Refrigerated transport of perishable goods.</li>\r\n</ul>\r\n</div>', 'transporte-aereo.png', 3),
(4, 'Land Transportation', '<p>We have a wide range of solutions for imports and exports, with service providers with standard&nbsp;trailers for any kind of cargo and specialized equipment for project cargo to and from Canada, the&nbsp;United States and Central America, we offer:</p>\r\n<ul>\r\n<li>National/International transport services for FTL/LTL, Consolidated Cargo, Flat Bed, Dry VanTrailer 48&rsquo;/53&rsquo;.</li>\r\n<li>Land transportation with specialized equipment for over dimensional/heavy-loads, Flat Bed, Extendable Flat Bed, Step Deck, Lowboy, Semi-Lowboy, Double Drop, SPMT, Modular equipment, Dolly.</li>\r\n<li>Land transportation with specialized equipment&nbsp;for&nbsp;over dimensional/heavy-loads, Flat Bed, Extendable Flat Bed, Step Deck, Lowboy, Semi-Lowboy, Double Drop, SPMT, Modular&nbsp;equipment, Dolly.</li>\r\n<li>Customs brokerage offices in all main ports, airports and borders of the country.</li>\r\n<li>International moving &amp; relocations services.</li>\r\n<li>Refrigerated transport of perishable goods.</li>\r\n</ul>', 'transporte-terrestre.png', 4),
(5, 'Other Services', '<p>&nbsp;</p>\r\n<p>As an additional support to our seafreight, land, air and project cargo services, we offer:</p>\r\n<ul>\r\n<li>Contract logistics/Logistic strategies.</li>\r\n<li>Storage/Distribution centers.</li>\r\n<li>Bonded Warehouse.</li>\r\n<li>Trading Company.</li>\r\n<li>Transport insurance, national and international.</li>\r\n<li>Any type of packaging/labeling.</li>\r\n<li>Handling and consulting for dangerous cargo IMO/IMDG/ICAO.</li>\r\n</ul>', 'otros-servicios.png', 5);

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
