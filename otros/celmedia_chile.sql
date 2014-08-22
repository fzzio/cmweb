-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-08-2014 a las 21:04:53
-- Versión del servidor: 5.6.12
-- Versión de PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `celmedia_chile`
--
CREATE DATABASE IF NOT EXISTS `celmedia_chile` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `celmedia_chile`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `estado`) VALUES
(1, 'Categoria 1', 1),
(2, 'Categoria 2', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `imagenhover` varchar(500) NOT NULL,
  `imagenbg` varchar(500) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=77 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `imagen`, `imagenhover`, `imagenbg`, `estado`) VALUES
(1, 'Aeromexico', '64a90-aeromexico_85gris.png', '7f60f-aeromexico_85.png', 'a15b2-aeromexico_400.png', 1),
(2, 'Desafio Africa', '370c0-africa_85gris.png', 'c0321-africa_85.png', 'c8e0b-africa_400.png', 1),
(3, 'AIG', '857bc-aig_85gris.png', '67de4-aig_85.png', 'a0b58-aig_400.png', 1),
(4, 'ANAHUAC', '6a4c8-anahuac_85gris.png', '6856b-anahuac_85.png', '13b3a-anahuac_400.png', 1),
(5, 'BANORTE', '5dff8-banorte_85gris.png', '441a4-banorter_85.png', '589e2-banorte_400.png', 1),
(6, 'BBVA', 'd3a6b-bbva_85gris.png', '2a81d-bbva_85.png', '31901-bbva_400.png', 1),
(7, 'BMW', '296ac-bmw_85gris.png', '83086-bmw_85.png', '51032-bmw_400.png', 1),
(8, 'CARACOL', '864c3-caracol_85gris.png', '91901-caracol_85.png', '2bac4-caracol_400.png', 1),
(9, 'CINÉPOLIS', '78a48-cinepolis_85gris.png', '580c1-cinepolis_85.png', 'cb4a2-cinepolis_400.png', 1),
(10, 'Club Militar', '0099e-club-militar_85gris.png', 'e351b-club-militar_85color.png', '3bd39-club-militar_400.png', 1),
(11, 'Coca Cola', '29b88-cocacola_85gris.png', '1f5ea-cocacola_85.png', 'a4024-cocacola_400.png', 1),
(12, 'Colgate', 'd870a-colgate_85gris.png', '42d80-colgate_85.png', '5b958-colgate_400.png', 1),
(13, 'Colsubsidio', 'c38d3-colsubsidio_85gris.png', '54a9d-colsubsidio_85.png', '78084-colsubsidio_400.png', 1),
(14, 'Crem Helado', '76722-creamhelado_85gris.png', '77800-creamhelado_85.png', '9830e-creamhelado_400.png', 1),
(15, 'DANE', 'e0620-dane_85gris.png', 'c4d21-dane_85.png', '4e6ed-dane_400.png', 1),
(16, 'DIAGEO', 'e85c6-diageo_85gris.png', '8c18c-diageo_85.png', '5562e-diageo_400.png', 1),
(17, 'Disney', 'a02c9-disney_85gris.png', 'd6101-disney_85.png', '3bc4d-disney_400.png', 1),
(18, 'American Eagle', '91e9c-eagle_85gris.png', 'b4243-eagle_85.png', '2eb82-eagle_400.png', 1),
(19, 'El Grafico', '52db0-elgrafico_85gris.png', '647a9-elgrafico_85.png', 'e94b8-elgrafico_400.png', 1),
(20, 'El Universal', 'd1d23-eluniversal_85gris.png', 'f3d26-eluniversal_85.png', '772f4-eluniversal.png', 1),
(21, 'Facebook', '50477-fb_85gris.png', '1983c-fb_85.png', '08ea7-fb_400.png', 1),
(22, 'Banco Finandina', '226e7-finandina_85gris.png', '7f1cc-finandina_85color.png', 'f2ccc-finandina_400.png', 1),
(23, 'Fonprecon', '1da28-fonprecon_85gris.png', '59664-fonprecon_85.png', 'd78c6-fonprecon_400.png', 1),
(24, 'FOPAE', '8e744-fopae_85gris.png', 'ed47f-fopae_85.png', 'b8577-fopae_400.png', 1),
(25, 'Ford', '37c5c-ford_85gris.png', '59236-ford_85.png', 'eb48a-ford_400.png', 1),
(26, 'Gol Caracol', '47062-golcaracol_85gris.png', '6790c-golcaracol_85.png', '36fb4-golcaracol_400.png', 1),
(27, 'Hasbro', 'f0e54-hasbro_85gris.png', 'c6f68-hasbro_85.png', 'da8bb-hasbro_400.png', 1),
(28, 'Helm', '9b2f1-helm_85gris.png', '7558f-helm_85.png', '6fbfc-helm_400.png', 1),
(29, 'Homecenter', '200de-homecenter_85gris.png', '9dd26-homecenter_85.png', 'dbc4c-homecenter_400.png', 1),
(30, 'HSBC', '319c9-hsbc_85gris.png', 'a7092-hsbc_85.png', '8c8fe-hsbc_400.png', 1),
(31, 'Hyundai', '3b068-hyundai_85gris.png', '7480e-hyundai_85.png', '6529b-hyundai_400.png', 1),
(32, 'InfoBip', 'eaaa4-infobip_85gris.png', 'a55ea-infobip_85.png', 'c5202-infobip_400.png', 1),
(33, 'Magefesa', 'e9f94-magafesa_85gris.png', 'a7305-magafesa_85.png', 'a9a7b-magafesa_400.png', 1),
(34, 'Mattel', 'c2fd1-mattel_85gris.png', '10508-mattel_85.png', '9d715-mattel_400.png', 1),
(35, 'MinAgricultura', '85257-minagri_85gris.png', 'd9129-minagri_85.png', 'c9d52-minagri_400.png', 1),
(36, 'Movistar', '5509e-movistar_85gris.png', 'b0947-movistar_85.png', 'a1815-movistar_400.png', 1),
(37, 'Nestlé', 'baf0b-nestle_85gris.png', '757be-nestle_85.png', '154d5-nestle_400.png', 1),
(38, 'Nextel', '0e9d6-nextel_85gris.png', 'b8882-nextel_85.png', '652c6-nextel_400.png', 1),
(39, 'Nokia', '899f6-nokia_85gris.png', 'e94bb-nokia_85.png', 'd3077-nokia_400.png', 1),
(40, 'Oriflame', 'c7e4a-oriflame_85gris.png', '8a101-oriflame_85.png', '1b447-oriflame_400.png', 1),
(42, 'P&G', '5ef15-p&g_85gris.png', 'e247f-p&g_85.png', 'f06c8-p&g_400.png', 1),
(43, 'PayPal', '195d3-paypal_85gris.png', '70977-paypal_85.png', '4afbf-paypal_400.png', 1),
(44, 'Pepsico', '76312-pepsico_85gris.png', '142bd-pepsico_85.png', '5bde9-pepsico_400.png', 1),
(45, 'Purina', 'cde97-purina_85gris.png', '120a8-purina_85.png', '432d9-purina_400.png', 1),
(46, 'Sabritas', '9ffd5-sabritas_85gris.png', '9d11f-sabritas_85.png', '2717f-sabritas_400.png', 1),
(47, 'Banco Santander', '3756c-santander_85gris.png', 'ecc4c-santander_85.png', '980fd-santander_400.png', 1),
(48, 'Syniverse', '6d4e3-syniverse_85gris.png', 'c8078-syniverse_85.png', 'edee1-syniverse_400.png', 1),
(49, 'Telcel', '0f1c1-telcel_85gris.png', 'aabaf-telcel_85.png', 'aa6f7-telcel_400.png', 1),
(50, 'Telefónica', '68212-telefonica_85gris.png', 'f358a-telefonica_85.png', 'bd84e-telefonica_400.png', 1),
(51, 'Trading & Risk', '8d570-trading_85gris.png', '32c7e-trading_85.png', 'b92f3-trading_400.png', 1),
(52, 'Unilever', '72b8c-unilever_85gris.png', 'd7ada-unilever_85.png', 'bb4ba-unilever_400.png', 1),
(53, 'Usacell', 'c4b2c-usacell_85gris.png', '2f835-usacell_85.png', '70b38-usacell_400.png', 1),
(54, 'Yahoo', '5702f-yahoo_85gris.png', '30dae-yahoo_85.png', 'ab25f-yahoo_400.png', 1),
(55, 'Yambal', '68f49-yambal_85gris.png', '283e7-yambal_85.png', 'a1e7c-yambal_400.png', 1),
(57, 'Descuenta', '9fd83-descuenta_normal.png', 'b1741-descuenta_hover.png', '36e32-descuenta_lb.png', 1),
(58, 'Procesar', '3098a-procesar_normal.png', 'c3080-procesar_hover.png', '80e7f-procesar_lb.png', 1),
(59, 'Club Premium (Sabmiller)', 'e60b6-club_85gris.png', '10967-club_85.png', '6103e-club_400.png', 1),
(60, 'Sumbawa', '1adfd-sumbawa_85gris.png', '06540-sumbawa_85.png', '0e3b8-sumbawa_400.png', 1),
(61, '220V', 'e6d14-220v_85gris.png', '6ac62-220v_85.png', '466d7-220v_400.png', 1),
(62, 'Toyocosta', '7b51b-toyocosta_85gris.png', '1173f-toyocosta_85.png', '81102-toyocosta_400.png', 1),
(63, 'Telintel LTD', '351fd-telintel_85gris.png', '4f3bf-telintel_85.png', 'a9cca-telintel_400.png', 1),
(64, 'Los Héroes', '66df2-losheroes_85gris.png', '35433-losheroes_85.png', '4f00f-losheroes_400.png', 1),
(65, 'Mega T.V.', 'a3192-megatv_85gris.png', '64163-megatv_85.png', 'a975a-megatv_400.png', 1),
(66, 'Metro de Santiago de Chile', '9a09a-metro_santiago_85gris.png', '55b95-metro_santiago_85.png', '89974-metro_santiago400.png', 1),
(67, 'World Visión', '37063-worldvision_85gris.png', 'a6308-worldvision_85.png', 'ca6ff-worldvision_400.png', 1),
(68, 'Indura', 'a402b-indura_85gris.png', 'd559c-indura_85.png', '7a598-indura_400.png', 1),
(69, 'Alsacia', '9e5ee-alsacia_85gris.png', 'e2560-alsacia_85.png', '82b87-alsacia_400.png', 1),
(71, 'Banco Coorpbanca', '6b7bd-coprbanca_85gris.png', '3d993-coprbanca_85.png', '99021-coprbanca_400.png', 1),
(72, 'Canal Uno', '802b1-canal1_85gris.png', '44311-canal1_85.png', 'df151-canal1_400.png', 1),
(73, 'Deemelo', '9ecc5-deemelo_85gris.png', '06251-deemelo_85.png', 'cb3d4-deemelo_400.png', 1),
(74, 'Gama TV', '8b54e-gamatv_85gris.png', 'dd211-gamatv_85.png', '87a06-gamatv_400.png', 1),
(75, 'Teleamazonas', 'e6190-teleamazonas_85gris.png', 'e3973-teleamazonas_85.png', '53800-teleamazonas_400.png', 1),
(76, 'Ecuavisa', '3e311-ecuavis_85gris.png', 'ae90f-ecuavis_85.png', '4fff6-ecuavis_400.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE IF NOT EXISTS `imagen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_slider` int(11) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id`, `id_slider`, `titulo`, `descripcion`, `imagen`, `estado`) VALUES
(1, 1, 'Prueba', 'El mejor centro de inteligencia estratégica y tecnológica digital en un mundo cada día más móvil', 'celmedia_slider2.jpg', 1),
(2, 1, 'Prueba 2', 'Según el objetivo de marketing, Celmedia lo asesora incorporándole una potente y eficiente estrategia creativa móvil.', 'celmedia_slider3.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen_proyecto`
--

CREATE TABLE IF NOT EXISTS `imagen_proyecto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(500) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Volcado de datos para la tabla `imagen_proyecto`
--

INSERT INTO `imagen_proyecto` (`id`, `imagen`, `id_proyecto`, `titulo`, `descripcion`, `estado`, `fecha`) VALUES
(3, '734b7-220venergyclick_big.jpg', 29, '', '', 1, '2014-08-21 02:08:38'),
(4, '40de8-220venergyclick_big2.jpg', 29, '', '', 1, '2014-08-21 02:11:08'),
(5, 'c8bce-220venergyclick_big3.jpg', 29, '', '', 1, '2014-08-21 02:12:04'),
(6, '44f44-220venergyclick_big4.jpg', 29, '', '', 1, '2014-08-21 02:12:14'),
(7, '71abd-220venergyclick_big5.jpg', 29, '', '', 1, '2014-08-21 02:11:38'),
(8, '22dd3-220venergyclick_big6.jpg', 29, '', '', 1, '2014-08-21 02:12:32'),
(9, '49be9-colsub_big.jpg', 3, '', '', 1, '2014-08-21 02:16:21'),
(10, 'd7c09-unilever_big.jpg', 13, '', '', 1, '2014-08-21 02:22:25'),
(11, '64f06-culbagenda_big.jpg', 27, '', '', 1, '2014-08-21 02:30:10'),
(12, '07711-culbagenda_big2.jpg', 27, '', '', 1, '2014-08-21 02:30:22'),
(13, 'e62fa-culbagenda_big3.jpg', 27, '', '', 0, '2014-08-21 02:30:36'),
(14, '954b0-culbbrindemos45_big.jpg', 15, '', '', 0, '2014-08-21 02:31:03'),
(15, 'a3ecd-culbbrindemos45_big2.jpg', 15, '', '', 1, '2014-08-21 02:31:26'),
(16, '3bbe3-culbbrindemos_big.jpg', 16, '', '', 1, '2014-08-21 02:31:42'),
(17, '9bd07-culbbrindemos_big2.jpg', 16, '', '', 1, '2014-08-21 02:32:05'),
(18, '4acc3-culbbrindemos_big3.jpg', 16, '', '', 1, '2014-08-21 02:32:22'),
(19, '63df4-culbbrindemos_big4.jpg', 16, '', '', 1, '2014-08-21 02:32:34'),
(20, '6ef0d-culbbrindemos_big5.jpg', 16, '', '', 1, '2014-08-21 02:33:12'),
(21, 'be8b9-culbbrindemos_big6.jpg', 16, '', '', 1, '2014-08-21 02:33:25'),
(22, '20507-culbmaduracion_big.jpg', 26, '', '', 1, '2014-08-21 02:33:48'),
(23, '17354-culbmaduracion_big2.jpg', 26, '', '', 1, '2014-08-21 02:34:09'),
(24, '68a48-toyocostadeleytoyota_big.jpg', 14, '', '', 1, '2014-08-21 03:09:05'),
(25, '22a6b-toyocostadeleytoyota_big2.jpg', 14, '', '', 0, '2014-08-21 03:09:19'),
(26, '1715f-toyocostadeleytoyota_big3.jpg', 14, '', '', 1, '2014-08-21 03:09:36'),
(27, '3ede7-toyocostadeleytoyota_big4.jpg', 14, '', '', 1, '2014-08-21 03:09:54'),
(28, 'abda8-toyocostadeleytoyota_big5.jpg', 14, '', '', 1, '2014-08-21 03:10:09'),
(29, '0a839-toyocostadeleytoyota_big6.jpg', 14, '', '', 1, '2014-08-21 03:10:51'),
(30, '1719d-toyocostadeleytoyota_big7.jpg', 14, '', '', 1, '2014-08-21 03:11:08'),
(31, '7ffb0-toyocostadeleytoyota_big8.jpg', 14, '', '', 1, '2014-08-21 03:11:30'),
(32, '0171a-toyocostadeleytoyota_big9.jpg', 14, '', '', 1, '2014-08-21 03:11:43'),
(33, '3b328-productoresagricultores_big.jpg', 2, '', '', 1, '2014-08-22 01:09:21'),
(34, '4288f-cremhelado_big.jpg', 5, '', '', 1, '2014-08-22 01:09:40'),
(35, '79f87-eluniversal_big.jpg', 6, '', '', 1, '2014-08-22 01:09:59'),
(36, 'd2da8-hyundai_big.jpg', 7, '', '', 1, '2014-08-22 01:10:14'),
(37, '38d43-procesar_big.jpg', 10, '', '', 1, '2014-08-22 01:11:02'),
(38, 'ab3d5-descuentos_big.jpg', 9, '', '', 1, '2014-08-22 01:21:40'),
(39, '502f2-alsacia_big.jpg', 25, '', '', 1, '2014-08-22 01:25:04'),
(40, 'd31f3-bailalanoche_big.jpg', 36, '', '', 1, '2014-08-22 01:25:19'),
(41, '18ae1-deemelo_big.jpg', 24, '', '', 1, '2014-08-22 01:25:34'),
(42, 'f0e3a-deemelo_big2.jpg', 24, '', '', 1, '2014-08-22 01:25:44'),
(43, '262eb-deemelo_big3.jpg', 24, '', '', 1, '2014-08-22 01:25:53'),
(44, '60f4a-ecutienetalento_big.jpg', 32, '', '', 1, '2014-08-22 01:26:05'),
(45, '4399c-elfamilion_big.jpg', 35, '', '', 1, '2014-08-22 01:26:23'),
(46, '29ea9-indura_big.jpg', 31, '', '', 1, '2014-08-22 01:27:56'),
(47, '19340-los-herores_big.jpg', 22, '', '', 1, '2014-08-22 01:28:27'),
(48, '1b00f-los-herores_big2.jpg', 22, '', '', 1, '2014-08-22 01:28:36'),
(49, '1bf40-los-herores_big3.jpg', 22, '', '', 1, '2014-08-22 01:28:45'),
(50, '3e04b-los-herores_big4.jpg', 22, '', '', 1, '2014-08-22 01:28:53'),
(51, 'c9409-casoschile_big1.jpg', 11, '', '', 1, '2014-08-22 01:29:40'),
(52, '3fede-casoschile_big2.jpg', 11, '', '', 1, '2014-08-22 01:29:48'),
(53, 'c1888-casoschile_big3.jpg', 11, '', '', 1, '2014-08-22 01:30:14'),
(54, '9d361-quienquieresermillonario_big.jpg', 34, '', '', 1, '2014-08-22 01:30:47'),
(55, 'da43a-santander_serviciomensajeria-sms-pushbig.jpg', 4, '', '', 1, '2014-08-22 01:31:51'),
(56, '9a6af-unilever_big.jpg', 13, '', '', 1, '2014-08-22 01:32:15'),
(57, 'ec31e-unilever_big2.jpg', 13, '', '', 1, '2014-08-22 01:32:32'),
(58, 'e6a79-unilever_big3.jpg', 13, '', '', 1, '2014-08-22 01:32:43'),
(59, '3be89-worldvision_app_big.jpg', 21, '', '', 1, '2014-08-22 01:49:51'),
(60, '29086-worldvision_app_big2.jpg', 21, '', '', 1, '2014-08-22 01:50:09'),
(61, '11036-worldvision_app_big3.jpg', 21, '', '', 1, '2014-08-22 01:50:19'),
(62, 'adeb8-worldvision_app_big4.jpg', 21, '', '', 1, '2014-08-22 01:50:29'),
(64, '8464a-yomellamo_big.jpg', 33, '', '', 1, '2014-08-22 01:51:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pais` int(11) NOT NULL,
  `id_sector` int(11) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `subtitulo` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `imagen_detalle` varchar(500) NOT NULL,
  `fecha` date NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id`, `id_pais`, `id_sector`, `titulo`, `subtitulo`, `descripcion`, `imagen`, `imagen_detalle`, `fecha`, `estado`) VALUES
(1, 1, 2, 'Celmedia adquiere licencia de ChyronHego', 'Celmedia adquiere licencia de ChyronHego', '<div>\r\n	Hace cinco meses la televisi&oacute;n en Chile est&aacute; exhibiendo en sus pantallas&nbsp; lo &uacute;ltimo en tecnolog&iacute;a, luego de que&nbsp; Celmedia concretara un acuerdo con CHYRONHEGO para ofrecer los servicios de Gr&aacute;ficas Virtuales. Hoy, &nbsp;Per&uacute;, Colombia y Ecuador ya est&aacute;n comenzando a experimentar lo mismo.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	La licencia faculta a Celmedia para utilizar la &uacute;ltima versi&oacute;n de los softwares Aki Paint,&nbsp; Aki F&uacute;tbol, Virtual Graphics y Anchor Tracking, que permiten entregar un servicio integral pero a la vez modular que va desde proveer y operar los equipos tecnol&oacute;gicos a trav&eacute;s de los cuales se difunden y exponen las gr&aacute;ficas virtuales, hasta generar los contenidos 3D que ser&aacute;n emitidos participando, si se requiere, en el proceso creativo de dicho contenido.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	La experiencia ha sido exitosa y los clientes se han mostrado satisfechos y sorprendidos, una vez m&aacute;s, con la calidad del servicio de Celmedia. En Chile, se realiz&oacute; una exhibici&oacute;n de virtuales en agua, siendo la primera de este tipo que se ha hecho en toda Latinoam&eacute;rica. Per&uacute;, Ecuador y Colombia ya est&aacute;n planificando exhibiciones y prepar&aacute;ndose para marcar tendencia en la televisi&oacute;n.</div>\r\n', '792d9-1-chyronhego.jpg', '8873a-1-chyronhego.jpg', '2013-10-22', 1),
(2, 2, 6, 'La nueva oportunidad de su empresa para innovar', 'La nueva oportunidad de su empresa para innovar', '<div>\r\n	<b>BoosterUp CoCreation</b>, uno de los principales eventos en el &aacute;rea de la innovaci&oacute;n y emprendimiento en el pa&iacute;s, que organiza el Instituto Internacional para la Innovaci&oacute;n Empresarial 3IE de la Universidad T&eacute;cnica Federico Santa Mar&iacute;a, apoyado por CORFO, ser&aacute; presentado este <b>jueves 22 de agosto</b>, <b>a las 11.00 horas, en Confiter&iacute;a Torres, Isidora Goyenechea 2962, Las Condes.</b></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Se trata del &uacute;nico programa que apoya la creaci&oacute;n y aceleraci&oacute;n de nuevos negocios nacidos de startups que responden a desaf&iacute;os de innovaci&oacute;n de 10 grandes compa&ntilde;&iacute;as e instituciones: <b>Microsoft, 3M, Cisco, Celmedia, MapCity, Fepasa, Programa de Proveedores de Clase Mundial, Defontana, AES Gener y Universidad T&eacute;cnica Federico Santa Mar&iacute;a.</b></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Ser&aacute;n 120 emprendedores, 60 startups, 10 compa&ntilde;&iacute;as y m&aacute;s de 30 inversionistas y mentores buscando oportunidades de nuevos negocios.</div>\r\n<div>\r\n	&nbsp;</div>\r\n', '0e7d8-2-chyronhego.jpg', '7b0bb-2-chyronhego.jpg', '2013-08-22', 1),
(3, 2, 2, 'Celmedia implementa servicio de consulta de precios de alimentos', 'Celmedia implementa servicio de consulta de precios de alimentos', '<div>\r\n	Celmedia implement&oacute; un servicio que permite a los usuarios consultar mediante mensaje de texto los &uacute;ltimos valores de los productos de inter&eacute;s; ya sea por un alimento en espec&iacute;fico o suscribi&eacute;ndose para recibir en su celular el &uacute;ltimo valor del producto seleccionado cada vez que el precio de &eacute;ste sea modificado.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Con este programa, la Oficina de Estudios y Pol&iacute;ticas Agrarias (Odepa) &ldquo;busca acercar a los actores de un amplio grupo de usuarios del sector silvoagropecuario a las tecnolog&iacute;as de la informaci&oacute;n, y con ello facilitar su trabajo, mejorar la toma de sus decisiones productivas y de comercializaci&oacute;n&rdquo;.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Para suscribirse al servicio, el usuario debe enviar como mensaje de texto (SMS) el c&oacute;digo del producto de inter&eacute;s al n&uacute;mero corto 2070, y recibir&aacute; un SMS cada vez que se publique un nuevo precio del producto seleccionado.</div>\r\n<div>\r\n	Adicionalmente, el usuario tambi&eacute;n tiene la opci&oacute;n de realizar una consulta libre. Para ello, elije un producto de la lista y env&iacute;a el c&oacute;digo al n&uacute;mero corto 4545 para recibir de forma inmediata el precio de comercializaci&oacute;n m&aacute;s reciente publicado por Odepa.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	El servicio ha tenido buena acogida en la Regi&oacute;n Metropolitana, y recientemente fue lanzado en la provincia de Concepci&oacute;n, en voz de el ministro de Agricultura Luis Mayol, quien anunci&oacute; que la iniciativa transparentar&aacute; los mercados mayoristas, &ldquo;permitiendo que los productores y consumidores tomen las mejores decisiones y, al mismo tiempo, corregir las distorsiones que se producen en la cadena de comercializaci&oacute;n de productos hortofrut&iacute;colas&rdquo;.</div>\r\n', '4fe08-3-odepa.jpg', '51b40-3-odepa.jpg', '2013-08-22', 1),
(4, 4, 6, 'Gran participación de CELMEDIA MEXICO en la EXPO PUBLICITAS 2013', 'Gran participación de CELMEDIA MEXICO en la EXPO PUBLICITAS 2013', '<p>\r\n	Celmedia tuvo una destacada participaci&oacute;n en la Expo Publicitas 2013, realizada los d&iacute;as 22, 23 y 24 de mayo en el Centro Banamex, M&eacute;xico.</p>\r\n<p>\r\n	En el evento, se presentaron innumerables oportunidades de negocio y se ofreci&oacute; visibilidad a los &uacute;ltimos lanzamientos y tendencias de la industria.</p>\r\n<p>\r\n	Por su parte, Celmedia realiz&oacute; una demostraci&oacute;n por medio de un concurso por SMS, que regal&oacute; mini iPads a los interesados.</p>\r\n<p>\r\n	La Expo Publicitas es una plataforma de negocios dise&ntilde;ada para las firmas del sector publicitario, que permite entablar acuerdos con potenciales compradores, directores y ejecutivos tomadores de decisi&oacute;n de las marcas m&aacute;s importantes y de mayor consumo en M&eacute;xico.</p>\r\n', '3f37a-4-expo-publicitas-2013.jpg', 'a15e1-4-expo-publicitas-2013.jpg', '2013-05-28', 1),
(5, 2, 5, 'Alumnos consultaron sus puntajes PSU enviando mensajes de texto', 'Alumnos consultaron sus puntajes PSU enviando mensajes de texto', '<div>\r\n	<p>\r\n		Por segundo a&ntilde;o consecutivo, CELMEDIA suministr&oacute; los servicios de plataforma al Ministerio de Educaci&oacute;n de Chile (MINEDUC) para que los alumnos que rindieron la Prueba de Selecci&oacute;n Universitaria (PSU), pudieran consultar sus resultados a trav&eacute;s de mensajer&iacute;a de texto.</p>\r\n	<p>\r\n		A partir de las 22:00 horas del mi&eacute;rcoles 2 de enero de 2013, una hora antes que el resto de los canales de informaci&oacute;n, se habilit&oacute; el servicio, que permiti&oacute; a los estudiantes consultar sus puntajes PSU, enviando la palabra PSU y su RUT al n&uacute;mero 2929.</p>\r\n	<p>\r\n		El servicio fue gratuito para todos los usuarios y permiti&oacute; que los estudiantes recibieran de manera instant&aacute;nea y segura la informaci&oacute;n sobre sus puntajes PSU, situaci&oacute;n que fue comentada positivamente en las principales redes sociales y medios de prensa.</p>\r\n	<p>\r\n		Asimismo, el MINEDUC manifest&oacute; su satisfacci&oacute;n a Celmedia por la calidad del servicio otorgado.</p>\r\n	<p>\r\n		El gran impacto positivo que puede causar una campa&ntilde;a SMS se debe a que este medio digital posee la mayor penetraci&oacute;n entre los usuarios, siendo el m&aacute;s seguro, simple, directo y efectivo.</p>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', '49422-5-psu.jpg', '76d8c-5-psu.jpg', '2013-01-29', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE IF NOT EXISTS `pais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `nombre`, `estado`) VALUES
(1, 'Ecuador', 1),
(2, 'Chile', 1),
(3, 'Colombia', 1),
(4, 'México', 1),
(5, 'Perú', 1),
(6, 'Argentina', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE IF NOT EXISTS `proyecto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pais` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `id_sector` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` date NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `imagen_detalle` varchar(500) NOT NULL,
  `prioridad` tinyint(1) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id`, `id_pais`, `id_servicio`, `id_sector`, `id_cliente`, `nombre`, `descripcion`, `fecha`, `imagen`, `imagen_detalle`, `prioridad`, `estado`) VALUES
(2, 3, 1, 2, 35, 'Productores y Agricultores de Colombia', '<p>\n	<strong>Desaf&iacute;o</strong></p>\n<p>\n	Proveer informaci&oacute;n a los productores y agricultores de los diferentes precios de sus productos para conocimiento&nbsp; y venta justa en el mercado.</p>\n<p>\n	<strong>Soluci&oacute;n</strong></p>\n<p>\n	Los agricultores enviaron un mensaje de texto con un c&oacute;digo asociado ejemplo: &nbsp;papa P1 y recibieron autom&aacute;ticamente el precio de la papa.</p>\n<p>\n	<strong>Resultados</strong></p>\n<p>\n	45.000 Mensajes de texto han ayudado a los campesinos y agricultores Colombianos a tener una referencia justa de sus productos.</p>\n', '2014-08-18', 'c6a9d-productoresagricultores_med.jpg', '06a9c-productoresagricultores_big.jpg', 1, 1),
(3, 3, 1, 2, 13, 'Supermercados Marca Blanca', '<p>\n	<strong>Desaf&iacute;o:</strong></p>\n<p>\n	Incrementar las ventas de supermercados marca blanca.</p>\n<p>\n	<strong>Soluci&oacute;n:</strong></p>\n<p>\n	Los usuarios inscribieron&nbsp;el n&uacute;mero de su factura de compra en un sitio web &nbsp;y ganaron recargas de minutos de forma autom&aacute;tica. El sorteo se hizo de forma aleatoria y los ganadores recibieron recargas por valor de $5.000 Pesos Colombianos.</p>\n<p>\n	<strong>Resultados:</strong></p>\n<p>\n	&nbsp;La Campa&ntilde;a a&uacute;n est&aacute; al aire actualmente con los resultados muy satisfactorios para el cliente y considerando una segunda etapa con una campa&ntilde;a a nivel Nacional.</p>\n', '2014-08-18', '72979-colsub_med.jpg', '58483-colsub_big.jpg', 1, 1),
(4, 2, 1, 11, 47, 'Servicio mensajería SMS PUSH Claves 3.0 OTP', '<p style="margin-bottom: 0cm">\n	<font face="Arial, serif"><b>Problema</b></font></p>\n<p style="margin-bottom: 0cm">\n	<font face="Arial, serif">Actualmente las estafas cibern&eacute;ticas pueden afectar a cualquier persona, sobre todo a aquellas que no tienen un manejo avanzado en internet o temas inform&aacute;ticos. El cibercrimen se moderniza constantemente presentando nuevas t&eacute;cnicas, por lo que la aplicaci&oacute;n de nuevos mecanismos de seguridad como la clave 3.0, toman un aspecto vital en la tranquilidad de miles de personas y empresas.</font></p>\n<p style="margin-bottom: 0cm">\n	<font face="Arial, serif"><b>Soluci&oacute;n </b></font></p>\n<p style="margin-bottom: 0cm">\n	<font face="Arial, serif"><span lang="es-ES">Celmedia desarroll&oacute; el servicio de env&iacute;o de claves v&iacute;a SMS. Claves que permiten que los usuarios completen sus transacciones bancar&iacute;as sin riesgos.</span></font></p>\n<p style="margin-bottom: 0cm">\n	<font face="Arial, serif">Logrando anular estafas cibern&eacute;ticas v&iacute;a Phishing y Pharming, mediante esta tecnolog&iacute;a de comunicaci&oacute;n directa a los dispositivos m&oacute;viles de las personas.</font></p>\n<p style="margin-bottom: 0cm">\n	<font face="Arial, serif"><span lang="es-ES"><b>Resultados</b></span></font></p>\n<p style="margin-bottom: 0cm">\n	<font face="Arial, serif">Mejoramos el servicio entregando tasas de efectividad superiores al 97%.</font></p>\n<p style="margin-bottom: 0cm">\n	<font face="Arial, serif">Pudimos aplicar exitosamente mecanismos de contingencia logrando avances importantes con los operadores m&oacute;viles con el objetivo de conseguir la satisfacci&oacute;n total de los clientes que operan mediante este sistema.</font></p>\n', '2014-08-18', '17cee-santander_serviciomensajeria-sms-pushmed.jpg', '835b7-santander_serviciomensajeria-sms-pushbig.jpg', 1, 1),
(5, 3, 1, 2, 14, 'Meals de Colombia - Bocatto', '<p>\n	<strong>L&iacute;nea de Producto Bocatto</strong></p>\n<p>\n	<strong>Desaf&iacute;o:</strong></p>\n<p>\n	Realizar para nuestro cliente Bocatto una campa&ntilde;a de comunicaci&oacute;n diferente y para sus nuevos sabores para su cliente interno y difundir internamente el lanzamiento de los 2 nuevos sabores mediante el uso de herramientas tecnol&oacute;gicas.</p>\n<p>\n	<strong>Soluci&oacute;n:</strong></p>\n<p>\n	A trav&eacute;s de un sitio web y una herramienta digital llamada detector de rostros ayudamos a la marca Bocatto a difundir a su cliente interno &ldquo;Meals de Colombia&rdquo; el lanzamiento de sus dos nuevos sabores.</p>\n<p>\n	La campa&ntilde;a consist&iacute;a en enviar a la base de trabajadores un correo electr&oacute;nico &nbsp;con un enlace que activaba la c&aacute;mara de los computadores.</p>\n<p>\n	Cuando el ususario daba clic en el link se activaba la webcam y mediante unos par&aacute;metros establecidos se detectaba las medidas de su rostro e insertaba una imagen, en este caso un helado Bocatto alrededor de su boca. El helado se pod&iacute;a endulzar y jugar con los diferentes sabores. Un m&eacute;todo divertido e interactivo para comunicar su lanzamiento.</p>\n<p>\n	<strong>Link campa&ntilde;a:</strong></p>\n<p>\n	<a href="http://mastersms.in/william/web_bocato/">http://mastersms.in/william/web_bocato/</a></p>\n', '2014-08-18', 'd711a-cremhelado_med.jpg', '7b4d6-cremhelado_big.jpg', 0, 1),
(6, 4, 1, 2, 20, 'Diario El Universal', '<p>\n	<strong>Problema</strong></p>\n<p>\n	El Universal requer&iacute;a un sistema de registro eficiente para sus lectores durante la promoci&oacute;n del d&iacute;a de la madre, que consist&iacute;a en ofrecer bater&iacute;as de cocina a la mitad de su precio.</p>\n<p>\n	&nbsp;</p>\n<p>\n	<strong>Soluci&oacute;n: </strong></p>\n<p>\n	Celmedia desarroll&oacute; un sistema de reservas por 3 medios:</p>\n<p>\n	1.- Web, sitio responsivo para seleccionar su modelo y centro de canje, se generaba la reserva.</p>\n<p>\n	2.- IVR, mediante una grabaci&oacute;n y comandos con el tel&eacute;fono, el lector hac&iacute;a su selecci&oacute;n y registraba sus datos.</p>\n<p>\n	3.- SMS, enviando el n&uacute;mero de producto (1 &oacute; 2) y los 3 d&iacute;gitos del centro de al 35035.</p>\n<p>\n	Una vez registrados los usuarios por cualquier medio, recib&iacute;an un SMS que conten&iacute;a su folio de reserva.</p>\n<p>\n	Celmedia gestion&oacute; casi 4000 reservas para el cliente.</p>\n', '2014-08-18', 'e5d44-elunviersal_med.jpg', '4414a-eluniversal_big.jpg', 1, 1),
(7, 4, 1, 4, 31, 'Hyundai Protect', '<p>\n	<strong>Problema</strong></p>\n<p>\n	Hyundai abri&oacute; operaciones en M&eacute;xico y quer&iacute;a otorgar un servicio moderno y diferenciado a sus clientes utilizando la tecnolog&iacute;a m&oacute;vil.</p>\n<p>\n	<strong>Soluci&oacute;n </strong></p>\n<p>\n	Celmedia desarroll&oacute; la APP &ldquo;Hyundai Protect&rdquo; que permite al usuario visualizar los detalles de su p&oacute;liza, acceder a la red de beneficios exclusivos para clientes Hyundai Protect y emitir una alerta en caso de alg&uacute;n accidente para ser contactado por la aseguradora en menos de 3 minutos.</p>\n<p>\n	Adem&aacute;s de esto la alerta enviada a la aseguradora lleva informaci&oacute;n de geo-referenciaci&oacute;n, ayudando a agilizar el tr&aacute;mite restando pasos al proceso.</p>\n', '2014-08-18', '49da2-hyundai_med.jpg', '9ee40-hyundai_big.jpg', 0, 1),
(8, 4, 1, 5, 19, 'El Gráfico', '<p>\n	<strong>Problema</strong></p>\n<p>\n	Para su 92 aniversario, El Gr&aacute;fico dio 92 regalos a sus lectores, siendo el premio mayor un auto nuevo. Se requer&iacute;a, para &eacute;ste sorteo, una din&aacute;mica que pudiera ser medible en su respuesta.</p>\n<p>\n	<strong>Soluci&oacute;n</strong></p>\n<p>\n	Celmedia habilit&oacute; un n&uacute;mero corto al cual los participantes deb&iacute;an enviar los folios que ven&iacute;an impresos en el peri&oacute;dico, quien m&aacute;s folios envi&oacute;, gan&oacute; un auto cero km. Para validar la compra del peri&oacute;dico, adem&aacute;s del folio, deb&iacute;an llenar una planilla con cupones que aparec&iacute;an en cada edici&oacute;n de &eacute;ste. Los ganadores deb&iacute;an presentar &eacute;stas planillas para validar su premio.</p>\n<p>\n	Como resultado recibimos m&aacute;s de 90,000 participaciones.</p>\n', '2014-08-18', 'da6b6-imagen_referencialcasos.jpg', '3ef76-imagen_referencialcasosdetalle.jpg', 0, 1),
(9, 4, 1, 6, 57, 'Descuenta MX', '<p>\n	<strong>Problema </strong></p>\n<p>\n	DescuentaMX es una nueva red de descuentos que quiere diferenciarse de sus competidores por ser la &uacute;nica red en M&eacute;xico que funciona de manera digital.</p>\n<p>\n	&nbsp;</p>\n<p>\n	<strong>Soluci&oacute;n</strong></p>\n<p>\n	Desarrollamos la App M&oacute;vil DescuentaMX que permite notificar a los usuarios cuando est&aacute;n cerca de los lugares que les otorgan beneficios, adem&aacute;s de hacer check-in que permite corroborar DescuentaMX el uso de sus beneficios y retroalimentar a sus afiliados.</p>\n', '2014-08-18', '04d55-descuentos_med.jpg', '64a01-descuentos_big.jpg', 0, 1),
(10, 4, 6, 5, 58, 'DPS', '<p>\n	<strong>Problema:</strong></p>\n<p>\n	PROCESAR es un &oacute;rgano creado por el Gobierno y los fondos privados de retiro para operar el sistema de fondos de pensi&oacute;n en M&eacute;xico y necesitaban crear un foro que le permitiera resolver dudas del uso de su sistema S.I.R.I.</p>\n<p>\n	&nbsp;</p>\n<p>\n	<strong>Soluci&oacute;n:</strong></p>\n<p>\n	Se cre&oacute; el Foro S.I.R.I., que permite a los usuarios redactar preguntas abiertas que son contestadas por el resto de los usuarios.</p>\n<p>\n	A cada interacci&oacute;n le corresponde un puntaje determinado que los participantes van sumando en un ranking; con esto PROCESAR puede premia a los usuarios que m&aacute;s participan ayudando a la comunidad a resolver dudas generales.</p>\n', '2014-08-18', 'bc3ff-procesar_med.jpg', 'e4c23-procesar_big.jpg', 0, 1),
(11, 2, 1, 5, 66, 'Servicio mensajería SMS 1411 Metro Emergencias', '<p style="margin-bottom: 0cm; widows: 0; orphans: 0">\n	<b style="font-family: Arial, serif;">Problema</b></p>\n<p style="margin-bottom: 0cm">\n	<font face="Arial, serif">El servicio de recibo de llamados de emergencias por parte de los usuarios era s&oacute;lo por v&iacute;a telef&oacute;nica, es decir, los pasajeros deb&iacute;an llamar al 1411 para dar a conocer el problema. </font></p>\n<p style="margin-bottom: 0cm; widows: 0; orphans: 0">\n	&nbsp;</p>\n<p style="margin-bottom: 0cm; widows: 0; orphans: 0">\n	<font face="Arial, serif"><span lang="es-ES"><b>Soluci&oacute;n</b></span></font></p>\n<p style="margin-bottom: 0cm">\n	<font face="Arial, serif"><span lang="es-ES">implementar un sistema de comunicaci&oacute;n chat, para el contacto con sus pasajeros y as&iacute; </span></font><font face="Arial, serif">ampliar los canales de comunicaci&oacute;n con los clientes, complementando el servicio actual de recepci&oacute;n de emergencia v&iacute;a voz por el 1411.</font></p>\n<p style="margin-bottom: 0cm">\n	&nbsp;</p>\n<p style="margin-bottom: 0cm">\n	<font face="Arial, serif"><span lang="es-ES">A trav&eacute;s de un n&uacute;mero corto definido, los usuarios podr&aacute;n interactuar con personal de de la empresa Atento, quienes estar&aacute;n capacitados y alineados con el &aacute;rea de seguridad de metro, para ofrecer soluciones r&aacute;pidas en caso de eventos maliciosos que se puedan presentar en las estaciones o vagones.</span></font></p>\n', '2014-08-18', '87fbd-casoschile_med.jpg', 'b552f-casoschile_big1.jpg', 0, 1),
(13, 2, 1, 5, 52, 'Promoción Multi-Marca "Cumple tus sueños"', '<p>\n	<strong>Desaf&iacute;o</strong></p>\n<p>\n	Potenciar el liderazgo de Unilever, realizando una promoci&oacute;n masiva, que contempl&oacute; una fuerte inversi&oacute;n en medios y selecci&oacute;n de premios, lo que se tradujo un incremento en la notoriedad de la empresa.</p>\n<p>\n	<strong>Soluci&oacute;n</strong></p>\n<p>\n	Implementamos una promoci&oacute;n multi-marca para Unilever a nivel nacional a trav&eacute;s de plataformas de participaci&oacute;n portal WEB y WEB M&oacute;vil, administraci&oacute;n y alojamiento de bases de datos de participantes, carga y entrega de premios instant&aacute;neos adem&aacute;s de la elaboraci&oacute;n de un sorteador aleatorio computacional para la selecci&oacute;n de los usuarios sorteados para premios mayores.</p>\n', '2014-08-18', '1b34e-unilever_med.jpg', '45192-unilever_big.jpg', 1, 1),
(14, 1, 7, 4, 62, 'De Ley Toyota ', '<p style="text-align: justify;">\n	<strong>Desafi&oacute; </strong></p>\n<p style="text-align: justify;">\n	La marca quer&iacute;a difundir el hecho que el periodista deportivo Andres Guschmer, es uno de sus fieles clientes y que estaba pr&oacute;ximo a cambiar su antiguo Toyota, por uno nuevo.</p>\n<p style="text-align: justify;">\n	<strong>Soluci&oacute;n </strong></p>\n<p style="text-align: justify;">\n	Se desarrollo una estrategia en Twitter para evidenciar que el periodista iba cambiar su veh&iacute;culo y que reafirmaba su decisi&oacute;n de mantenerse con la marca Toyota.</p>\n<p style="text-align: justify;">\n	Posteriormente, se creo un micrositio <a href="http://www.deleytoyota.com/">www.deleytoyota.com</a> en el que los usuarios pod&iacute;an ver los test drives realizados por el presentador, conocer las prestaciones de cada modelo y adem&aacute;s votar por su favorito.</p>\n<p style="text-align: justify;">\n	<strong>Resultados </strong></p>\n<p style="text-align: justify;">\n	El micrositio tuvo 6220 visitas y 1620 personas se registraron para elegir un veh&iacute;culo.</p>\n', '2014-08-19', 'db908-toyocostadeleytoyota_medf.jpg', 'b11a6-toyocostadeleytoyota_big.jpg', 1, 1),
(15, 1, 7, 7, 59, '45 años', '<p style="text-align: justify;">\n	<strong>Desaf&iacute;o </strong></p>\n<p style="text-align: justify;">\n	Realizar una actividad en Twitter, para celebrar con los seguidores el aniversario de Club Premium.</p>\n<p style="text-align: justify;">\n	<strong>Soluci&oacute;n </strong></p>\n<p style="text-align: justify;">\n	La propuesta fue realizar un brindis virtual por medio de tweets. Creamos un micrositio en el que se apreciaban dos cervezas a punto de brindar. A medida que los usuarios &ldquo;tuiteaban&rdquo; utilizando el hashtag #brindoconclub, las cervezas se iban juntando. Una vez que se completaba el choque de las copas se liberaban distintos premios.</p>\n<p style="text-align: justify;">\n	<strong>Resultados </strong></p>\n<p style="text-align: justify;">\n	Se logr&oacute; un hito como marca al ser su Hashtag #BrindoConClub un trending topic no s&oacute;lo local, sino a nivel global. Al mismo tiempo que #BrindoConClub era trending topic, @clubpremiumec (cuenta oficial de twitter) fue trending topic, logrando un nuevo hito, cuenta y hashtag como trending topic. Hasta la fecha ninguna otra marca ecuatoriana, hab&iacute;a logrado ser trending topic a nivel mundial.</p>\n', '2014-08-19', 'bf5b4-culbbrindemos45_med.jpg', 'b2c24-culbbrindemos45_big.jpg', 0, 1),
(16, 1, 7, 7, 59, 'Premios', '<p>\n	<strong>Desaf&iacute;o </strong></p>\n<p>\n	Comunicar en Twitter acerca de los premios obtenidos por Club Premium (Superior Taste Award y Monde Selection 2011), aumentar la presencia de la marca en Twitter.</p>\n<p>\n	<strong>Soluci&oacute;n </strong></p>\n<p>\n	Se invito a los seguidores a compartir este logro, utilizando el hashtag #brindoconclub. Cada vez que una persona env&iacute;aba un &ldquo;tweet&rdquo;, en un micrositio se llenaba una copa de cerveza y se liberaban premios.</p>\n<p>\n	<strong>Resultados </strong></p>\n<p>\n	Durante los 10 d&iacute;as que dur&oacute; la acci&oacute;n fuimos trending topic 8 d&iacute;as en Ecuador.</p>\n', '2014-08-19', '17a65-culbbrindemos_med.jpg', '23756-culbbrindemos_big.jpg', 1, 1),
(17, 4, 3, 12, 48, 'Tráfico de más de 70 empresas', '<p style="text-align: justify;">\r\n	Nuestro cliente Syniverse implemento nuevos n&uacute;meros cortos en M&eacute;xico y corre tr&aacute;fico de m&aacute;s de 70 empresas muy importantes como: Infonavit, Bancomer, HSBC, Banco Wal Mart, Herbalife, Mc Afee, Badoo, Whatsapp, Line, Telegram, Banamex, etc. Y ademas implenta sus primeros servicios en Argentina</p>\r\n', '2014-08-19', '5ae49-imagen_referencialcasos.jpg', '748ad-imagen_referencialcasosdetalle.jpg', 1, 1),
(19, 4, 3, 5, 32, 'Servicio de micropagos y suscripción en LATAM', '<p>\n	Celmedia cierra contrato con Infobip para lanzar servicios de micropagos y suscripci&oacute;n en LATAM. Iniciando con Chile y Colombia para 2 servicios de micropagos y suscripci&oacute;nes.</p>\n', '2014-08-21', '1edd6-imagen_referencialcasos.jpg', 'b9fd8-imagen_referencialcasosdetalle.jpg', 0, 1),
(20, 4, 3, 12, 63, 'Mensajería MT en mercado mexicano', '<p>\n	Telintel LTD. Cierra contrato con Celmedia para enviar mensajer&iacute;a MT en el mercado mexicano principalmente y con miras de expandir sus servicios hacia LATAM. Entre los clientes que env&iacute;an actualmente tr&aacute;fico se encuentran Facebook, Google, Microsoft, Xoom.com, Line, Waze, Tous, Uber, Viber, etc.&nbsp;</p>\n', '2014-08-21', '96b0e-imagen_referencialcasos.jpg', '1103b-imagen_referencialcasosdetalle.jpg', 1, 1),
(21, 2, 1, 13, 67, 'Aplicación Móvil de Monitoreo', '<p>\n	<strong>Desaf&iacute;o</strong></p>\n<p>\n	World Vision International es una organizaci&oacute;n Cristiana Humanitaria que trabaja por los ni&ntilde;os, familias y comunidades que viven en situaci&oacute;n de pobreza. Cada a&ntilde;o realiza una encuesta a todos los ni&ntilde;os apadrinados de la instituci&oacute;n para estar al tanto de las condiciones en que est&aacute;n desarroll&aacute;ndose.</p>\n<p>\n	<strong>Soluci&oacute;n</strong></p>\n<p>\n	Una aplicaci&oacute;n m&oacute;vil para tablet con sistema operativo Android m&aacute;s un m&oacute;dulo web administrador de monitoreo para los trabajadores de World Vision Chile, quienes realizaron la encuesta a nivel nacional a todos los ni&ntilde;os apadrinados de esta instituci&oacute;n, dejando atr&aacute;s la recolecci&oacute;n de datos de forma manual.</p>\n<p>\n	<strong>Resultados</strong></p>\n<p>\n	Hoy la instituci&oacute;n puede trabajar con los datos obtenidos de la encuesta de manera autom&aacute;tica, baj&aacute;ndolos desde un servidor, recolectando as&iacute;, de manera mucho m&aacute;s eficiente, toda la informaci&oacute;n a nivel nacional.</p>\n', '2014-08-21', '6f29b-worldvision_app_med.jpg', '181d9-worldvision_app_big.jpg', 1, 1),
(22, 2, 1, 11, 64, 'SMS  PUSH: Tarjeta Virtual', '<p>\n	<strong>Problema</strong>:</p>\n<p>\n	Caja de Compensaci&oacute;n Los H&eacute;roes con m&aacute;s de un mill&oacute;n de afiliados a nivel nacional, otorga m&uacute;ltiples y diversos beneficios, los cuales para hacerse efectivos, se debe presentar la credencial que los acredita como afiliados. El costo de la impresi&oacute;n y log&iacute;stica de distribuci&oacute;n de la tarjeta, tiene un alto costo monetario para Los H&eacute;roes, sumado al tiempo y efectiva entrega a los destinatarios.</p>\n<p>\n	<strong>Soluci&oacute;n</strong>:</p>\n<p>\n	Se desarroll&oacute; una tarjeta virtual, la cual pudiera ser descargada directamente desde el celular con conexi&oacute;n directa a la plataforma web de beneficios.</p>\n<p>\n	Luego de llenar un formulario al instante el usuario recib&iacute;a un SMS el cual contien&iacute;a un link de descarga de la tarjeta virtual totalmente personalizada.</p>\n<p>\n	<strong>Resultados</strong></p>\n<p>\n	Los H&eacute;roes, super&oacute; el problema del alto costo de impresi&oacute;n y distribuci&oacute;n de su credencial a nivel nacional.</p>\n', '2014-08-21', 'c0756-los-herores_med.jpg', '94a5f-los-herores_big.jpg', 1, 1),
(23, 2, 5, 14, 65, 'Festival de Dichato', '<p>\n	<strong>Desaf&iacute;o</strong></p>\n<p>\n	Abrir una nueva plataforma de comunicaci&oacute;n para las marcas, apostando al &eacute;xito que se obtendr&iacute;a con la tecnolog&iacute;a virtual como soporte.</p>\n<p>\n	<strong>Soluci&oacute;n</strong></p>\n<p>\n	A trav&eacute;s de la tecnolog&iacute;a virtual Implementamos piezas de alto impacto donde se dieron a conocer campa&ntilde;as y productos de destacadas compa&ntilde;&iacute;as como Entel, Suko, Santa Isabel, Hites, Servicio Militar, Douc, Noble, Ban efe.</p>\n<p>\n	<strong>El resultado</strong></p>\n<p>\n	Exhibiciones de primer nivel y la satisfacci&oacute;n de los clientes por los resultados esperado.</p>\n', '2014-08-21', '42258-festivaldichato_med.jpg', 'd6503-imagen_referencialcasosdetalle.jpg', 1, 1),
(24, 2, 1, 12, 73, 'Aplicación DEEMELO', '<p>\n	<strong>Desaf&iacute;o</strong></p>\n<p>\n	Desarrollar DEEMELO, una red social para compartir las &uacute;ltimas tendencias en moda a trav&eacute;s de una aplicaci&oacute;n m&oacute;vil gratuita. Que permita acceder a un cat&aacute;logo de moda georreferenciado, construido por las im&aacute;genes que suben tanto locatarios como compradores.</p>\n<p>\n	<strong>Resultados</strong></p>\n<p>\n	El desarrollo e implementaci&oacute;n de esta marca permiti&oacute; que colaboraramos en el boostercamp del instituto internacional para la innovaci&oacute;n empresarial, liderado por la Universidad Federico Santa Mar&iacute;a en Chile.</p>\n', '2014-08-21', '925cf-deemelo_med.jpg', '5f3f4-deemelo_big.jpg', 1, 1),
(25, 2, 1, 13, 69, 'Express Transantiago - Control de Calidad', '<p>\n	<strong>Desaf&iacute;o </strong></p>\n<p>\n	Desarrollar una plataforma m&oacute;vil que permita levantar informaci&oacute;n en terreno, para el control de calidad del servicio de transporte.</p>\n<p>\n	<strong>Soluci&oacute;n</strong></p>\n<p>\n	Ya que el dato es adquirido en el lugar donde se produce, utilizamos los equipos celulares de l&iacute;nea intermedia, Smartphones econ&oacute;micos, con una metodolog&iacute;a y tecnolog&iacute;a que facilit&oacute; la operaci&oacute;n y minimiz&oacute; los errores o p&eacute;rdida de informaci&oacute;n.</p>\n<p>\n	Web Mobile para el levantamiento de informaci&oacute;n en terreno:</p>\n<p>\n	- Estado de los Paraderos</p>\n<p>\n	- Estado de los Buses</p>\n<p>\n	- Recorridos</p>\n<p>\n	- Otros.</p>\n<p>\n	- M&oacute;dulo de gesti&oacute;n para consolidar los datos y obtener informes con los indicadores de calidad.</p>\n', '2014-08-21', '95f03-alsacia_med.jpg', '5aa4a-alsacia_big.jpg', 1, 1),
(26, 1, 7, 7, 59, 'Maduración 2011', '<p>\n	<strong>Desaf&iacute;o </strong></p>\n<p>\n	Como parte de la campa&ntilde;a &uml;Maduraci&oacute;n&uml; enfocada en enfatizar una de las cualidades distintivas del proceso de elaboraci&oacute;n cerveza, se requer&iacute;a una acci&oacute;n digital que logre reforzar este concepto y por sobretodo invitar a que m&aacute;s personas miren el comercial.</p>\n<p>\n	<strong>Soluci&oacute;n</strong></p>\n<p>\n	Se desarroll&oacute; un concurso de Facebook, en el que las personas deb&iacute;an acceder una pesta&ntilde;a, ver el comercial y escribir una frase. La mejor frase ganaba un premio.</p>\n<p>\n	<strong>Resultados</strong></p>\n<p>\n	Esta acci&oacute;n logr&oacute; aumentar 16.300 fans, 32, 247 personas visitaron la pesta&ntilde;a y 3,924 subir subieron una frase.&nbsp;</p>\n', '2014-08-21', '96ff0-culbmaduracion_med.jpg', 'ba6b6-culbmaduracion_big.jpg', 1, 1),
(27, 1, 7, 7, 59, 'Agenda Club Premium 2011', '<p>\n	<strong>Desaf&iacute;o </strong></p>\n<p>\n	Celebrar el aniversario n&uacute;mero 45 de Club Premium con la mayor cantidad de fans de la marca.</p>\n<p>\n	<strong>Soluci&oacute;n</strong></p>\n<p>\n	Se desarroll&oacute; una pesta&ntilde;a en Facebook, en la que los usuarios pod&iacute;an crear un evento, referenciarlo en un mapa e invitar a sus amigos. Los eventos que contaban con mayor cantidad de invitados, ganaban una fiesta.</p>\n<p>\n	<strong>Resultados</strong></p>\n<p>\n	Con esta acci&oacute;n se aumentaron 25.239 nuevos Fans. Se crearon 320 eventos, desde todos los rincones del pa&iacute;s. El evento con mas usuarios registrados, contaba con 900 registrados.&nbsp;</p>\n', '2014-08-21', '6d2b9-culbagenda_med.jpg', '33c18-culbagenda_big.jpg', 1, 1),
(28, 1, 7, 1, 60, 'Muestra Quién Eres', '<p>\n	<strong>Desaf&iacute;o </strong></p>\n<p>\n	Sumbawa, es conocida principalmente comouna tienda de venta de art&iacute;culos de Surf y Skate, pero exist&iacute;a un mont&oacute;n de clientes que no practicaban estos deportes, as&iacute; que se requer&iacute;a hacer una acci&oacute;n que nos permita conocer los gustos y aficiones de ellos.</p>\n<p>\n	<strong>Soluci&oacute;n</strong></p>\n<p>\n	Se realiz&oacute; una aplicaci&oacute;n en Facebook para que los fans puedan crear un tablerto, una especie de collage, utilizando distintos elementos relacionados al estilo de vida de la marca y sus productos. El usuario pod&iacute;a escribir, cambiar tipograf&iacute;as, subir fotos, utilizar elementos de la tienda, entre otras particularidades. Estos tableros, pod&iacute;an ser compartidos en las redes sociales de los usuarios y adem&aacute;s se exhib&iacute;an en una galer&iacute;a.</p>\n<p>\n	<strong>Resultados</strong></p>\n<p>\n	En esta actividad se hicieron 5200 fans, ingresaron a la aplicaci&oacute;n 1425 personas y se crearon 275 tableros.&nbsp;</p>\n', '2014-08-21', '544ff-imagen_referencialcasos.jpg', '524e4-imagen_referencialcasosdetalle.jpg', 1, 1),
(29, 1, 7, 3, 61, 'Energy Click', '<p>\n	<strong>Desafi&oacute; </strong></p>\n<p>\n	Realizar una acci&oacute;n que acerque el producto a los j&oacute;venes e incremente el consumo.</p>\n<p>\n	<strong>Soluci&oacute;n</strong></p>\n<p>\n	Se creo el Energy Click, un juego en el que los usuarios deb&iacute;an mostrar su habilidad &ldquo;clickeando&rdquo; lo m&aacute;s r&aacute;pido posible. Si el usuario quer&iacute;a validar su puntaje y ganar un premio, deb&iacute;a ingresar un c&oacute;digo, que se encontraba en cada envase. Los usuarios pod&iacute;an jugar desde sus tel&eacute;fonos celulares v&iacute;a web m&oacute;vil o tambi&eacute;n en Facebook.</p>\n<p>\n	<strong>Resultados</strong></p>\n<p>\n	En total xxxxxx personas jugaron el Energy Click y fueron ingresados un total de 50.010 c&oacute;digos En la versi&oacute;n m&oacute;vil se ingresaron 22.564 c&oacute;digos y en la APP de Facebook 27.446 c&oacute;digos.&nbsp;</p>\n', '2014-08-21', '1fa98-220venergyclick_med.jpg', '0586b-220venergyclick_big.jpg', 1, 1),
(31, 2, 6, 5, 68, 'Indura RRHH', '<p>\n	<strong>Desaf&iacute;o</strong></p>\n<p>\n	Comunicar oportunamente a todos los colaboradores de INDURA, informaci&oacute;n relevante y respecto a beneficios que otorga la empresa y desminuir la brecha de comunicaci&oacute;n generada por la cantidad de plantas, distribuci&oacute;n territorial y acceso a Internet de las personas.</p>\n<p>\n	<strong>Soluci&oacute;n</strong></p>\n<p>\n	Contactamos a todos los trabajadores instant&aacute;neamente, incluso a los que no tienen acceso a internet utilizar mensajer&iacute;a SMS como medio universal.</p>\n<p>\n	Suministramos una plataforma Web para la inscripci&oacute;n de los usuarios donde el mismo sistema permiti&oacute; realizar env&iacute;os unitarios, masivos o programados a los colaboradores de INDURA.</p>\n<p>\n	<strong>Resultados</strong></p>\n<p>\n	Hoy la empresa logr&oacute; mejorar la comunicaci&oacute;n con sus colaboradores de manera m&aacute;s eficiente y oportuna. Logr&oacute; incluir a las personas que por su entorno laboral u otro, no ten&iacute;an acceso a Internet. Hasta la fecha Indura ha realizado numerosas campa&ntilde;as de informaci&oacute;n interna, ayudando y fidelizando a sus empleados.</p>\n', '2014-08-22', '214ca-indura_med.jpg', 'b4f8e-indura_big.jpg', 1, 1),
(32, 1, 2, 14, 76, 'Ecuador tiene Talento', '<p>\n	Reality enfocada en descubrir nuevos talentos en varias tipos de arte, con alcance nacional</p>\n<p>\n	<strong>Etapa previa</strong></p>\n<ul>\n	<li>\n		<p>\n			Suscripci&oacute;n para contenidos exclusivo del programa</p>\n	</li>\n</ul>\n<p>\n	<strong>Opciones en etapa intermedia</strong></p>\n<ul>\n	<li>\n		<p>\n			Eliminaci&oacute;n</p>\n	</li>\n	<li>\n		<p>\n			Votaci&oacute;n por tu FAVORITO</p>\n	</li>\n</ul>\n<p>\n	<strong>Etapa posterior</strong></p>\n<ul>\n	<li>\n		<p>\n			Descarga de contenidos desde el sitio WEB del canal.&nbsp;</p>\n	</li>\n</ul>\n<p>\n	&nbsp;</p>\n<p>\n	<strong>Resultados</strong></p>\n<ul>\n	<li>\n		<p>\n			Fidelizaci&oacute;n</p>\n	</li>\n	<li>\n		<p>\n			Manejo duarnte 2 temporadas</p>\n	</li>\n	<li>\n		<p>\n			Mensajer&iacute;a en incremento permanente durante todas las emisiones</p>\n	</li>\n</ul>\n', '2014-08-22', '41eda-ecutienetalento_med.jpg', 'ac568-ecutienetalento_big.jpg', 1, 1),
(33, 1, 2, 15, 75, 'Yo Me Llamo', '<p>\n	Reality para descubrir emitadores de cantantes famosos</p>\n<p>\n	<strong>Etapa previa</strong></p>\n<ul>\n	<li>\n		<p>\n			Descarga de APP para Android e IOS</p>\n	</li>\n</ul>\n<p>\n	<strong>Opciones en etapa intermedia</strong></p>\n<ul>\n	<li>\n		<p>\n			Trivia</p>\n	</li>\n	<li>\n		<p>\n			Eliminaci&oacute;n</p>\n	</li>\n	<li>\n		<p>\n			Votaci&oacute;n por tu FAVORITO</p>\n	</li>\n</ul>\n<p>\n	<strong>Etapa posterior</strong></p>\n<ul>\n	<li>\n		<p>\n			Premios por fidelizaci&oacute;n</p>\n	</li>\n</ul>\n<p>\n	<strong>Resultados</strong></p>\n<ul>\n	<li>\n		<p>\n			Fidelizaci&oacute;n</p>\n	</li>\n	<li>\n		<p>\n			Manejo duarnte 3 temporadas</p>\n	</li>\n	<li>\n		<p>\n			Mensajer&iacute;a en incremento permanente durante todas las emisiones</p>\n	</li>\n</ul>\n', '2014-08-22', '1f6d4-imagen_referencialcasos.jpg', 'de3d1-yomellamo_big.jpg', 1, 1),
(34, 1, 2, 15, 76, 'Quien Quiere ser Millonario', '<p>\n	<strong>DESCRIPCION</strong></p>\n<p>\n	Programa concurso, de preguntas y respuestas con premios en efectivo.</p>\n<p>\n	Etapa previa</p>\n<ul>\n	<li>\n		<p>\n			Inscripci&oacute;n</p>\n	</li>\n</ul>\n<p>\n	Opciones en etapa intermedia</p>\n<ul>\n	<li>\n		<p>\n			Concurso de pregunta correcta</p>\n	</li>\n</ul>\n<p>\n	&nbsp;</p>\n<p>\n	<strong>RESULTADOS</strong></p>\n<ul>\n	<li>\n		<p>\n			Fidelizaci&oacute;n</p>\n	</li>\n	<li>\n		<p>\n			Manejo duarnte 4 temporadas</p>\n	</li>\n	<li>\n		<p>\n			Mensajer&iacute;a en incremento permanente durante todas las emisiones</p>\n	</li>\n</ul>\n', '2014-08-22', 'bed90-quienquieresermillonario_med.jpg', '37f33-quienquieresermillonario_big.jpg', 1, 1),
(35, 1, 2, 15, 74, 'El Familión', '<p>\n	<strong>DESCRIPCI&Oacute;N</strong></p>\n<p>\n	Programa concurso, formato descubre el tesoro con premios en efectivo y asociada a marcas de consumo masivo.</p>\n<p>\n	Etapa previa</p>\n<ul>\n	<li>\n		<p>\n			Inscripci&oacute;n</p>\n	</li>\n</ul>\n<p>\n	<strong>Opciones en etapa intermedia</strong></p>\n<ul>\n	<li>\n		<p>\n			Concurso de preguntas</p>\n	</li>\n</ul>\n<p>\n	<strong>RESULTADOS</strong></p>\n<ul>\n	<li>\n		<p>\n			Fidelizaci&oacute;n</p>\n	</li>\n	<li>\n		<p>\n			Manejo duarnte 1 temporadas</p>\n	</li>\n	<li>\n		<p>\n			Mensajer&iacute;a en incremento permanente durante todas las emisiones</p>\n	</li>\n</ul>\n', '2014-08-22', 'b91ed-elfamilion_med.jpg', '1fe50-elfamilion_big.jpg', 1, 1),
(36, 1, 2, 15, 72, 'Baila la Noche', '<p>\n	Programa concurso por equipos, pruebas y desaf&iacute;os diarios</p>\n<p>\n	<strong>Etapa previa</strong></p>\n<ul>\n	<li>\n		<p>\n			Inscripci&oacute;n</p>\n	</li>\n</ul>\n<p>\n	<strong>Opciones en etapa intermedia</strong></p>\n<ul>\n	<li>\n		<p>\n			Trivia</p>\n	</li>\n	<li>\n		<p>\n			Eliminaci&oacute;n</p>\n	</li>\n	<li>\n		<p>\n			Votaci&oacute;n por tu FAVORITO</p>\n	</li>\n</ul>\n<p>\n	<strong>Etapa posterior</strong></p>\n<ul>\n	<li>\n		<p>\n			Premios por fidelizaci&oacute;n</p>\n	</li>\n</ul>\n<p>\n	<strong>RESULTADOS</strong></p>\n<ul>\n	<li>\n		<p>\n			Fidelizaci&oacute;n</p>\n	</li>\n	<li>\n		<p>\n			Manejo duarnte 3 temporadas</p>\n	</li>\n	<li>\n		<p>\n			Mensajer&iacute;a en incremento permanente durante todas las emisiones</p>\n	</li>\n</ul>\n', '2014-08-22', 'a334d-bailalanoche_med.jpg', '0c9c0-bailalanoche_big.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_categoria`
--

CREATE TABLE IF NOT EXISTS `proyecto_categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `proyecto_categoria`
--

INSERT INTO `proyecto_categoria` (`id`, `id_categoria`, `id_proyecto`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sector`
--

CREATE TABLE IF NOT EXISTS `sector` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `sector`
--

INSERT INTO `sector` (`id`, `nombre`, `estado`) VALUES
(1, 'Moda', 1),
(2, 'Comida', 1),
(3, 'Bebida', 1),
(4, 'Automotriz', 1),
(5, 'Sector Público', 1),
(6, 'Retail', 1),
(7, 'Bebidas alcohólicas', 1),
(8, 'Snacks', 1),
(9, 'Industrial y Agricultura', 1),
(10, 'Farmacéutica', 1),
(11, 'Financiero', 1),
(12, 'Tecnología', 1),
(13, 'Transporte', 1),
(14, 'Comunicación', 1),
(15, 'Entretenimiento', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `securityuser`
--

CREATE TABLE IF NOT EXISTS `securityuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `password_anterior` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `nombre` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `correo` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `fecha_creacion` timestamp NULL DEFAULT NULL,
  `fecha_modificacion` timestamp NULL DEFAULT NULL,
  `estado` varchar(1) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `securityuser`
--

INSERT INTO `securityuser` (`id`, `usuario`, `password`, `password_anterior`, `nombre`, `correo`, `fecha_creacion`, `fecha_modificacion`, `estado`) VALUES
(1, 'admin', 'admin', NULL, 'Administrador', 'admin@admin.com', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE IF NOT EXISTS `servicio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) NOT NULL,
  `subtitulo` varchar(500) NOT NULL,
  `icono` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `color` varchar(100) NOT NULL COMMENT 'hexadecimal',
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id`, `titulo`, `subtitulo`, `icono`, `descripcion`, `imagen`, `color`, `estado`) VALUES
(1, 'Mobile Marketing', 'La innovación tiene que ver más con la creación de experiencias que con la tecnología.', '6258d-servicios_mobilemarketing.png', '<p>\r\n	El equipo de Celmedia Mobile Marketing y sus capacidades tecnol&oacute;gicas le pueden ayudar a crear e implementar campa&ntilde;as creativas y estrat&eacute;gicas de Mobile Marketing de gran efectividad y medici&oacute;n.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Celmedia Mobile marketing ha ayudado a cientos de empresas en am&eacute;rica latina a comunicarse eficientemente con sus consumidores. El equipo posee una gran experiencia satisfaciendo la necesidad de los operadores m&oacute;viles, las marcas y los consumidores desarrollando portales y contenidos para enriquecer la experiencia de navegaci&oacute;n.</p>\r\n', '90a59-img_referencial.jpg', '#f24767', 1),
(2, 'TV Interactiva', 'Los usuarios no sólo ven el contenido, sino que ahora lo controlan.', '98b39-servicios_tvinteractiva.png', '<p>\n	Una plataforma integrada nos permite la implementaci&oacute;n de una variedad de din&aacute;micas y aplicaciones seg&uacute;n las necesidades de cada cliente que van desde una simple votaci&oacute;n en un programa de televisi&oacute;n hasta gr&aacute;ficas interactivas para su presentaci&oacute;n en pantalla, juegos multi-jugador y el desarrollo completo de formatos televisivos como Game Shows, remates inversos y m&aacute;s.</p>\n<p>\n	Medimos resultados constantemente e innovamos a diario, la proactividad y la creatividad es la clave de nuestro servicio.</p>\n', 'e481f-img_referencial.jpg', '#489cd1', 1),
(3, 'Gateway', 'La tecnología digital hoy nos ha llevado a una necesidad de lo instantáneo en usuarios y también en empresas.', '5272d-servicios_gateway.png', '<p>\n	Celmedia dispone de conexiones con todos los operadores m&oacute;viles relevantes de Latinoam&eacute;rica permitiendo a empresas de todo el mundo tener a trav&eacute;s de una &uacute;nica conexi&oacute;n, conectividad inmediata con m&aacute;s de 200 millones de usuarios de telefon&iacute;a m&oacute;vil en Latinoam&eacute;rica.</p>\n<p>\n	El Gateway de Celmedia permite la gesti&oacute;n de aplicaciones como campa&ntilde;as SMS Premium cobradas en MT o MO, la distribuci&oacute;n de contenidos y servicios de suscripci&oacute;n.</p>\n<p>\n	Soporta altos vol&uacute;menes de tr&aacute;fico y mantiene un sistema que le permite manejar el tr&aacute;fico de manera natural y sin sobresaltos a partir de un equipo t&eacute;cnico de gran capacidad con soporte 24/7.</p>\n', 'b9ad4-img_referencial.jpg', '#c8d160', 1),
(4, 'Fidelización', '¡El amor es reciproco! Si una marca demuestra afecto, los usuarios responden con fidelidad.', '39950-servicios_fidelizacion.png', '<p>\n	Abarcamos todo el ciclo de vida del cliente, desde la activaci&oacute;n, vinculaci&oacute;n, fidelizaci&oacute;n y retenci&oacute;n de &eacute;ste. Para ello, disponemos de un equipo multidisciplinario con m&aacute;s de 15 a&ntilde;os de experiencia que nos permite cubrir todas las disciplinas asociadas al programa, que van desde las definiciones y dise&ntilde;o, hasta los acuerdos de beneficios y sistemas tecnol&oacute;gicos m&aacute;s avanzados de control.</p>\n<p>\n	Desarrollo de Campa&ntilde;as - CRM &ndash; Canales de Comunicaci&oacute;n &ndash; Call Center &ndash; Productos y Beneficios &ndash; Plataforma de Administraci&oacute;n.</p>\n', '3a731-img_referencial.jpg', 'rgba(204, 182, 96, 0.7)', 1),
(5, 'Virtual Graphics', 'Damos vida a la imaginación.', '79e06-servicios_virtualgraphics.png', '<p>\n	En Celmedia contamos con un equipo de artistas digitales siempre a la vanguardia de la tecnolog&iacute;a, esto nos permite llevar la cualquier soporte digital. Trabajamos con los grandes medios de comunicaci&oacute;n para llevar hasta los hogares su mensaje comercial de una manera estrat&eacute;gica y creativa.</p>\n<p>\n	Placement TV - BTL 360 - producci&oacute;n 3D - animaci&oacute;n 3D - Post Producci&oacute;n Audiovisual - Paletas Virtuales interactivas - Cubo Virtual.</p>\n<p>\n	Tecnol&oacute;gicamente contamos con la &uacute;ltima versi&oacute;n del software AKI, estamos en todos los canales instalados con un equipo que nos permite hoy destacarnos por el completo servicio que entregamos.</p>\n', 'e3fb7-img_referencial.jpg', 'rgba(200, 136, 233, 0.7)', 1),
(6, 'M-Goverment', 'Seremos una sociedad 100% digital. No por nada hay 7 billones de teléfonos celulares en el mundo.', 'd18fb-servicios_mgoverment.png', '<p>\n	Egestas turpis elit turpis a amet penatibus ac urna, nunc sociis eu, magnis odio dictumst, a nisi magna lacus tincidunt, nunc nec porta porttitor! Lectus ac dapibus a magnis rhoncus augue a a mattis in magna, est egestas!</p>\n', 'bbdd7-img_referencial.jpg', '#77C995', 1),
(7, 'Social Media', 'La innovación tiene que ver más con la creación de experiencias que con la tecnología.', '486c2-servicios_socialmedia.png', '<p>\n	Utilizamos distintas herramientas que nos permiten evaluar la reputaci&oacute;n online de las marcas y conocer en qu&eacute; lugares, Webs, blogs, redes sociales,&nbsp; se menciona a la misma.</p>\n<p>\n	Nos encargamos de la gesti&oacute;n de las redes sociales de las empresas y desarrollamos distintas estrategias que permitan a las marcas generar conversaci&oacute;n, experiencias y reacciones, con el objetivo de crear un v&iacute;nculo entre la marca y sus clientes.</p>\n', '19447-img_referencial.jpg', 'rgba(128, 121, 161, 0.7)', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(500) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`id`, `tipo`, `estado`) VALUES
(1, 'principal', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider_home`
--

CREATE TABLE IF NOT EXISTS `slider_home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(500) DEFAULT NULL,
  `textoboton` varchar(100) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `urlimagen` varchar(500) NOT NULL,
  `link` varchar(500) DEFAULT NULL,
  `estado` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `slider_home`
--

INSERT INTO `slider_home` (`id`, `descripcion`, `textoboton`, `titulo`, `urlimagen`, `link`, `estado`, `fecha`) VALUES
(1, '<div>\n	Hacer M&aacute;s, en Menos Tiempo</div>\n<div>\n	<strong>Es el Valor de una Cultura Digital</strong></div>\n<div>\n	<strong>en una red Regional</strong></div>\n', 'Casos de éxito', 'Hacer Más, en Menos Tiempo', 'c0bcd-celmedia_slider4.jpg', '#casos', 1, '2014-08-13 03:23:51'),
(2, '<div>\n	El mejor centro de inteligencia</div>\n<div>\n	estrat&eacute;gica y tecnol&oacute;gica digital&nbsp;</div>\n<div>\n	<strong>en un mundo&nbsp;cada d&iacute;a m&aacute;s m&oacute;vil</strong></div>\n', 'Nuestros servicios', 'El mejor centro de inteligencia ', '844aa-celmedia_slider1.jpg', '#servicios', 1, '2014-08-14 12:00:00'),
(3, '<div>\r\n	<span style="color:#ffffe0;">Seg&uacute;n el objetivo de marketing, </span><span style="color:#ffffe0;">Celmedia lo asesora incorpor&aacute;ndole</span></div>\r\n<div>\r\n	<span style="color:#ffffe0;"><strong>una potente y eficiente estrategia creativa m&oacute;vil.</strong></span></div>\r\n', 'Casos de éxito', 'Según el objetivo de marketing', '95797-celmedia_slider2.jpg', 'https://www.google.com.ec', 2, '2014-08-14 12:00:00'),
(4, '<div>\n	Innovamos en tecnolog&iacute;a</div>\n<div>\n	digital, sistemas y mobile,</div>\n<div>\n	<strong>pero siempre con el fin </strong></div>\n<div>\n	<strong>de crear</strong><strong> una experiencia.</strong></div>\n', 'Nuestros servicios', 'Innovamos en tecnología', '4a1f1-celmedia_slider3.jpg', '#servicios', 1, '2014-08-14 12:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider_proyectos`
--

CREATE TABLE IF NOT EXISTS `slider_proyectos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(500) DEFAULT NULL,
  `textoboton` varchar(100) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `urlimagen` varchar(500) NOT NULL,
  `link` varchar(500) DEFAULT NULL,
  `estado` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `slider_proyectos`
--

INSERT INTO `slider_proyectos` (`id`, `descripcion`, `textoboton`, `titulo`, `urlimagen`, `link`, `estado`, `fecha`) VALUES
(1, 'dvdfg', 'alalala', 'asdasd', '36b40-celmedia_slider4.jpg', 'http://www.google.com', 1, '2014-08-13 03:23:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(500) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `tags`
--

INSERT INTO `tags` (`id`, `descripcion`, `estado`) VALUES
(1, 'HTML', 1),
(2, 'Responsive', 1),
(3, 'Web', 1),
(4, 'Marketing', 1),
(5, 'Tecnología', 1),
(6, 'Parallax', 1),
(7, 'Realidad Aumentada', 1),
(8, 'SMS', 1),
(9, 'Publicidad', 1),
(10, 'StartUps', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags_noticias`
--

CREATE TABLE IF NOT EXISTS `tags_noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tags` int(11) NOT NULL,
  `id_noticia` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `tags_noticias`
--

INSERT INTO `tags_noticias` (`id`, `id_tags`, `id_noticia`) VALUES
(6, 4, 2),
(7, 5, 1),
(8, 4, 3),
(9, 5, 3),
(10, 4, 4),
(11, 5, 4),
(12, 5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags_proyectos`
--

CREATE TABLE IF NOT EXISTS `tags_proyectos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_proyecto` int(11) NOT NULL,
  `id_tags` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=57 ;

--
-- Volcado de datos para la tabla `tags_proyectos`
--

INSERT INTO `tags_proyectos` (`id`, `id_proyecto`, `id_tags`) VALUES
(2, 2, 4),
(3, 3, 4),
(4, 3, 9),
(5, 4, 4),
(6, 4, 9),
(7, 4, 8),
(8, 5, 4),
(9, 8, 4),
(10, 11, 4),
(12, 13, 4),
(13, 14, 4),
(14, 14, 9),
(15, 15, 4),
(16, 15, 9),
(17, 16, 4),
(18, 16, 9),
(19, 17, 4),
(20, 17, 9),
(23, 19, 9),
(24, 20, 8),
(25, 20, 5),
(26, 21, 5),
(27, 22, 4),
(28, 22, 5),
(29, 23, 4),
(30, 24, 5),
(31, 25, 4),
(32, 25, 5),
(33, 26, 9),
(34, 27, 4),
(35, 27, 9),
(36, 28, 1),
(37, 28, 4),
(38, 28, 3),
(39, 29, 4),
(40, 29, 9),
(41, 29, 3),
(42, 14, 2),
(43, 14, 3),
(44, 13, 3),
(45, 10, 3),
(48, 31, 4),
(49, 31, 9),
(50, 32, 4),
(51, 32, 5),
(52, 33, 5),
(53, 34, 9),
(54, 36, 4),
(55, 7, 5),
(56, 35, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_servicio`
--

CREATE TABLE IF NOT EXISTS `tipo_servicio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tipo_servicio`
--

INSERT INTO `tipo_servicio` (`id`, `nombre`, `imagen`, `estado`) VALUES
(1, 'Mobile Marketing', 'servicios_mobilemarketing.png', 1),
(2, 'Gateway', 'servicios_gateway.png', 1),
(3, 'Interactividad', 'servicios_tvinteractiva.png', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
