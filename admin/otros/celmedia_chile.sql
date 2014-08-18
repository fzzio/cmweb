-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-08-2014 a las 23:10:15
-- Versión del servidor: 5.5.31
-- Versión de PHP: 5.4.16

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=57 ;

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
(12, 'Colgate', '38e13-colgate_85gris.png', '42d80-colgate_85.png', '5b958-colgate_400.png', 1),
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
(31, 'Hyunai', '3b068-hyundai_85gris.png', '7480e-hyundai_85.png', '6529b-hyundai_400.png', 1),
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
(56, 'Yo me llamo', '32865-yomellamo_85gris.png', '3b434-yomellamo_85.png', '824fb-yomellamo_400.png', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
(1, 1, 2, 'Celmedia adquiere licencia de ChyronHego', 'Celmedia adquiere licencia de ChyronHego', '<div>\n	Hace cinco meses la televisi&oacute;n en Chile est&aacute; exhibiendo en sus pantallas&nbsp; lo &uacute;ltimo en tecnolog&iacute;a, luego de que&nbsp; Celmedia concretara un acuerdo con CHYRONHEGO para ofrecer los servicios de Gr&aacute;ficas Virtuales. Hoy, &nbsp;Per&uacute;, Colombia y Ecuador ya est&aacute;n comenzando a experimentar lo mismo.</div>\n<div>\n	&nbsp;</div>\n<div>\n	La licencia faculta a Celmedia para utilizar la &uacute;ltima versi&oacute;n de los softwares Aki Paint,&nbsp; Aki F&uacute;tbol, Virtual Graphics y Anchor Tracking, que permiten entregar un servicio integral pero a la vez modular que va desde proveer y operar los equipos tecnol&oacute;gicos a trav&eacute;s de los cuales se difunden y exponen las gr&aacute;ficas virtuales, hasta generar los contenidos 3D que ser&aacute;n emitidos participando, si se requiere, en el proceso creativo de dicho contenido.</div>\n<div>\n	&nbsp;</div>\n<div>\n	La experiencia ha sido exitosa y los clientes se han mostrado satisfechos y sorprendidos, una vez m&aacute;s, con la calidad del servicio de Celmedia. En Chile, se realiz&oacute; una exhibici&oacute;n de virtuales en agua, siendo la primera de este tipo que se ha hecho en toda Latinoam&eacute;rica. Per&uacute;, Ecuador y Colombia ya est&aacute;n planificando exhibiciones y prepar&aacute;ndose para marcar tendencia en la televisi&oacute;n.</div>\n', '4252a-imagen_referencialnoticias.jpg', '490ab-imagen_referencialnoticiasdetalle.jpg', '2013-10-22', 1),
(2, 2, 6, 'La nueva oportunidad de su empresa para innovar', 'La nueva oportunidad de su empresa para innovar', '<div>\n	<b>BoosterUp CoCreation</b>, uno de los principales eventos en el &aacute;rea de la innovaci&oacute;n y emprendimiento en el pa&iacute;s, que organiza el Instituto Internacional para la Innovaci&oacute;n Empresarial 3IE de la Universidad T&eacute;cnica Federico Santa Mar&iacute;a, apoyado por CORFO, ser&aacute; presentado este <b>jueves 22 de agosto</b>, <b>a las 11.00 horas, en Confiter&iacute;a Torres, Isidora Goyenechea 2962, Las Condes.</b></div>\n<div>\n	&nbsp;</div>\n<div>\n	Se trata del &uacute;nico programa que apoya la creaci&oacute;n y aceleraci&oacute;n de nuevos negocios nacidos de startups que responden a desaf&iacute;os de innovaci&oacute;n de 10 grandes compa&ntilde;&iacute;as e instituciones: <b>Microsoft, 3M, Cisco, Celmedia, MapCity, Fepasa, Programa de Proveedores de Clase Mundial, Defontana, AES Gener y Universidad T&eacute;cnica Federico Santa Mar&iacute;a.</b></div>\n<div>\n	&nbsp;</div>\n<div>\n	Ser&aacute;n 120 emprendedores, 60 startups, 10 compa&ntilde;&iacute;as y m&aacute;s de 30 inversionistas y mentores buscando oportunidades de nuevos negocios.</div>\n<div>\n	&nbsp;</div>', '571eb-imagen_referencialnoticias.jpg', 'f1c8d-imagen_referencialnoticiasdetalle.jpg', '2013-08-22', 1),
(3, 2, 2, 'Celmedia implementa servicio de consulta de precios de alimentos', 'Celmedia implementa servicio de consulta de precios de alimentos', '<div>\n	Celmedia implement&oacute; un servicio que permite a los usuarios consultar mediante mensaje de texto los &uacute;ltimos valores de los productos de inter&eacute;s; ya sea por un alimento en espec&iacute;fico o suscribi&eacute;ndose para recibir en su celular el &uacute;ltimo valor del producto seleccionado cada vez que el precio de &eacute;ste sea modificado.</div>\n<div>\n	&nbsp;</div>\n<div>\n	Con este programa, la Oficina de Estudios y Pol&iacute;ticas Agrarias (Odepa) &ldquo;busca acercar a los actores de un amplio grupo de usuarios del sector silvoagropecuario a las tecnolog&iacute;as de la informaci&oacute;n, y con ello facilitar su trabajo, mejorar la toma de sus decisiones productivas y de comercializaci&oacute;n&rdquo;.</div>\n<div>\n	&nbsp;</div>\n<div>\n	Para suscribirse al servicio, el usuario debe enviar como mensaje de texto (SMS) el c&oacute;digo del producto de inter&eacute;s al n&uacute;mero corto 2070, y recibir&aacute; un SMS cada vez que se publique un nuevo precio del producto seleccionado.</div>\n<div>\n	Adicionalmente, el usuario tambi&eacute;n tiene la opci&oacute;n de realizar una consulta libre. Para ello, elije un producto de la lista y env&iacute;a el c&oacute;digo al n&uacute;mero corto 4545 para recibir de forma inmediata el precio de comercializaci&oacute;n m&aacute;s reciente publicado por Odepa.</div>\n<div>\n	&nbsp;</div>\n<div>\n	El servicio ha tenido buena acogida en la Regi&oacute;n Metropolitana, y recientemente fue lanzado en la provincia de Concepci&oacute;n, en voz de el ministro de Agricultura Luis Mayol, quien anunci&oacute; que la iniciativa transparentar&aacute; los mercados mayoristas, &ldquo;permitiendo que los productores y consumidores tomen las mejores decisiones y, al mismo tiempo, corregir las distorsiones que se producen en la cadena de comercializaci&oacute;n de productos hortofrut&iacute;colas&rdquo;.</div>\n', '1ec19-imagen_referencialnoticias.jpg', '0280f-imagen_referencialnoticiasdetalle.jpg', '2013-08-22', 1),
(4, 4, 6, 'Gran participación de CELMEDIA MEXICO en la EXPO PUBLICITAS 2013', 'Gran participación de CELMEDIA MEXICO en la EXPO PUBLICITAS 2013', '<p>\n	Celmedia tuvo una destacada participaci&oacute;n en la Expo Publicitas 2013, realizada los d&iacute;as 22, 23 y 24 de mayo en el Centro Banamex, M&eacute;xico.</p>\n<p>\n	En el evento, se presentaron innumerables oportunidades de negocio y se ofreci&oacute; visibilidad a los &uacute;ltimos lanzamientos y tendencias de la industria.</p>\n<p>\n	Por su parte, Celmedia realiz&oacute; una demostraci&oacute;n por medio de un concurso por SMS, que regal&oacute; mini iPads a los interesados.</p>\n<p>\n	La Expo Publicitas es una plataforma de negocios dise&ntilde;ada para las firmas del sector publicitario, que permite entablar acuerdos con potenciales compradores, directores y ejecutivos tomadores de decisi&oacute;n de las marcas m&aacute;s importantes y de mayor consumo en M&eacute;xico.</p>\n', '686c5-imagen_referencialnoticias.jpg', '220f9-imagen_referencialnoticiasdetalle.jpg', '2013-05-28', 1),
(5, 2, 5, 'Alumnos consultaron sus puntajes PSU enviando mensajes de texto', 'Alumnos consultaron sus puntajes PSU enviando mensajes de texto', '<div>\n	<p>\n		Por segundo a&ntilde;o consecutivo, CELMEDIA suministr&oacute; los servicios de plataforma al Ministerio de Educaci&oacute;n de Chile (MINEDUC) para que los alumnos que rindieron la Prueba de Selecci&oacute;n Universitaria (PSU), pudieran consultar sus resultados a trav&eacute;s de mensajer&iacute;a de texto.</p>\n	<p>\n		A partir de las 22:00 horas del mi&eacute;rcoles 2 de enero de 2013, una hora antes que el resto de los canales de informaci&oacute;n, se habilit&oacute; el servicio, que permiti&oacute; a los estudiantes consultar sus puntajes PSU, enviando la palabra PSU y su RUT al n&uacute;mero 2929.</p>\n	<p>\n		El servicio fue gratuito para todos los usuarios y permiti&oacute; que los estudiantes recibieran de manera instant&aacute;nea y segura la informaci&oacute;n sobre sus puntajes PSU, situaci&oacute;n que fue comentada positivamente en las principales redes sociales y medios de prensa.</p>\n	<p>\n		Asimismo, el MINEDUC manifest&oacute; su satisfacci&oacute;n a Celmedia por la calidad del servicio otorgado.</p>\n	<p>\n		El gran impacto positivo que puede causar una campa&ntilde;a SMS se debe a que este medio digital posee la mayor penetraci&oacute;n entre los usuarios, siendo el m&aacute;s seguro, simple, directo y efectivo.</p>\n</div>\n<p>\n	&nbsp;</p>\n', '11e75-imagen_referencialnoticias.jpg', '10c68-imagen_referencialnoticiasdetalle.jpg', '2013-01-29', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id`, `id_pais`, `id_servicio`, `id_sector`, `id_cliente`, `nombre`, `descripcion`, `fecha`, `imagen`, `imagen_detalle`, `prioridad`, `estado`) VALUES
(2, 3, 1, 2, 35, 'Productores y Agricultores de Colombia', '<p style="margin-bottom: 0cm; widows: 0; orphans: 0">\n	<font face="Arial, serif"><span lang="es-ES"><b>Desaf&iacute;o</b></span></font></p>\n<p style="margin-bottom: 0cm; widows: 0; orphans: 0">\n	<font face="Arial, serif"><span lang="es-ES">Proveer informaci&oacute;n a los productores y agricultores de los diferentes precios de sus productos para conocimiento&nbsp; y venta justa en el mercado.</span></font></p>\n<p style="margin-bottom: 0cm; widows: 0; orphans: 0">\n	<font face="Arial, serif"><span lang="es-ES"><b>Soluci&oacute;n:</b></span></font></p>\n<p style="margin-bottom: 0cm; widows: 0; orphans: 0">\n	<font face="Arial, serif"><span lang="es-ES">Los agricultores enviaron un mensaje de texto con un c&oacute;digo asociado ejemplo: &nbsp;papa P1 y recibieron autom&aacute;ticamente el precio de la papa.</span></font></p>\n<p style="margin-bottom: 0cm; widows: 0; orphans: 0">\n	<font face="Arial, serif"><span lang="es-ES"><b>Resultados:</b></span></font></p>\n<p style="margin-bottom: 0cm; widows: 0; orphans: 0">\n	<font face="Arial, serif"><span lang="es-ES">45.000 Mensajes de texto han ayudado a los campesinos y agricultores Colombianos a tener una referencia justa de sus productos.</span></font></p>\n', '2014-08-18', 'a7dbb-imagen_referencialcasos.jpg', 'eaf7e-imagen_referencialcasosdetalle.jpg', 1, 1),
(3, 3, 6, 6, 13, 'Supermercados Marca Blanca', '<p>\n	<style type="text/css">\nP { margin-bottom: 0.21cm; direction: ltr; color: rgb(0, 0, 0); widows: 2; orphans: 2; }A:link {  }	</style>\n</p>\n<p style="margin-bottom: 0cm; widows: 0; orphans: 0">\n	<font face="Arial, serif"><span lang="es-ES"><b>Desaf&iacute;o:</b></span></font></p>\n<p style="margin-bottom: 0cm; widows: 0; orphans: 0">\n	<font face="Arial, serif"><span lang="es-ES">Incrementar las ventas de supermercados marca blanca.</span></font></p>\n<p style="margin-bottom: 0cm; widows: 0; orphans: 0">\n	<font face="Arial, serif"><span lang="es-ES"><b>Soluci&oacute;n:</b></span></font></p>\n<p style="margin-bottom: 0cm; widows: 0; orphans: 0">\n	<font face="Arial, serif"><span lang="es-ES">Los usuarios inscribieron&nbsp;el n&uacute;mero de su factura de compra en un sitio web &nbsp;y ganaron recargas de minutos de forma autom&aacute;tica. El sorteo se hizo de forma aleatoria y los ganadores recibieron recargas por valor de $5.000 Pesos Colombianos.</span></font></p>\n<p style="margin-bottom: 0cm; widows: 0; orphans: 0">\n	<font face="Arial, serif"><span lang="es-ES"><b>Resultados:</b></span></font></p>\n<p style="margin-bottom: 0cm; widows: 0; orphans: 0">\n	&nbsp;<font face="Arial, serif"><span lang="es-ES">La Campa&ntilde;a a&uacute;n est&aacute; al aire actualmente con los resultados muy satisfactorios para el cliente y considerando una segunda etapa con una campa&ntilde;a a nivel Nacional.</span></font></p>\n', '2014-08-18', '046a6-imagen_referencialcasos.jpg', 'ad862-imagen_referencialcasosdetalle.jpg', 1, 1),
(4, 2, 1, 6, 47, 'Servicio mensajería SMS PUSH Claves 3.0 OTP', '<p>\n	<style type="text/css">\nP { margin-bottom: 0.21cm; direction: ltr; color: rgb(0, 0, 0); widows: 2; orphans: 2; }	</style>\n</p>\n<p style="margin-bottom: 0cm">\n	<font face="Arial, serif"><b>Problema</b></font></p>\n<p style="margin-bottom: 0cm">\n	<font face="Arial, serif">Actualmente las estafas cibern&eacute;ticas pueden afectar a cualquier persona, sobre todo a aquellas que no tienen un manejo avanzado en internet o temas inform&aacute;ticos. El cibercrimen se moderniza constantemente presentando nuevas t&eacute;cnicas, por lo que la aplicaci&oacute;n de nuevos mecanismos de seguridad como la clave 3.0, toman un aspecto vital en la tranquilidad de miles de personas y empresas.</font></p>\n<p style="margin-bottom: 0cm">\n	<font face="Arial, serif"><b>Soluci&oacute;n </b></font></p>\n<p style="margin-bottom: 0cm">\n	<font face="Arial, serif"><span lang="es-ES">Celmedia desarroll&oacute; el servicio de env&iacute;o de claves v&iacute;a SMS. Claves que permiten que los usuarios completen sus transacciones bancar&iacute;as sin riesgos.</span></font></p>\n<p style="margin-bottom: 0cm">\n	<font face="Arial, serif">Logrando anular estafas cibern&eacute;ticas v&iacute;a Phishing y Pharming, mediante esta tecnolog&iacute;a de comunicaci&oacute;n directa a los dispositivos m&oacute;viles de las personas.</font></p>\n<p style="margin-bottom: 0cm">\n	<font face="Arial, serif"><span lang="es-ES"><b>Resultados</b></span></font></p>\n<p style="margin-bottom: 0cm">\n	<font face="Arial, serif">Mejoramos el servicio entregando tasas de efectividad superiores al 97%.</font></p>\n<p style="margin-bottom: 0cm">\n	<font face="Arial, serif">Pudimos aplicar exitosamente mecanismos de contingencia logrando avances importantes con los operadores m&oacute;viles con el objetivo de conseguir la satisfacci&oacute;n total de los clientes que operan mediante este sistema.</font></p>\n', '2014-08-18', 'ad1f5-imagen_referencialcasos.jpg', '8320d-imagen_referencialcasosdetalle.jpg', 1, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `sector`
--

INSERT INTO `sector` (`id`, `nombre`, `estado`) VALUES
(1, 'Moda', 1),
(2, 'Comida', 1),
(3, 'Bebida', 1),
(4, 'Automotriz', 1),
(5, 'Sector Público', 1),
(6, 'Retail', 1);

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
  `descripcion` text NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id`, `titulo`, `subtitulo`, `descripcion`, `imagen`, `estado`) VALUES
(1, 'Mobile Marketing', 'La innovación tiene que ver más con la creación de experiencias que con la tecnología.', '<p>\n	El equipo de Celmedia Mobile Marketing y sus capacidades tecnol&oacute;gicas le pueden ayudar a crear e implementar campa&ntilde;as creativas y estrat&eacute;gicas de Mobile Marketing de gran efectividad y medici&oacute;n. Celmedia Mobile marketing ha ayudado a cientos de empresas en am&eacute;rica latina a comunicarse eficientemente con sus consumidores. El equipo posee una gran experiencia satisfaciendo la necesidad de los operadores m&oacute;viles, las marcas y los consumidores desarrollando portales y contenidos para enriquecer la experiencia de navegaci&oacute;n.</p>\n', '90a59-img_referencial.jpg', 1),
(2, 'TV Interactiva', 'Los usuarios no sólo ven el contenido, sino que ahora lo controlan.', '<p>\n	Una plataforma integrada nos permite la implementaci&oacute;n de una variedad de din&aacute;micas y aplicaciones seg&uacute;n las necesidades de cada cliente que van desde una simple votaci&oacute;n en un programa de televisi&oacute;n hasta gr&aacute;ficas interactivas para su presentaci&oacute;n en pantalla, juegos multi-jugador y el desarrollo completo de formatos televisivos como Game Shows, remates inversos y m&aacute;s.</p>\n<p>\n	Medimos resultados constantemente e innovamos a diario, la proactividad y la creatividad es la clave de nuestro servicio.</p>\n', 'e481f-img_referencial.jpg', 1),
(3, 'Gateway', 'La tecnología digital hoy nos ha llevado a una necesidad de lo instantáneo en usuarios y también en empresas.', '<p>\n	Celmedia dispone de conexiones con todos los operadores m&oacute;viles relevantes de Latinoam&eacute;rica permitiendo a empresas de todo el mundo tener a trav&eacute;s de una &uacute;nica conexi&oacute;n, conectividad inmediata con m&aacute;s de 200 millones de usuarios de telefon&iacute;a m&oacute;vil en Latinoam&eacute;rica.</p>\n<p>\n	El Gateway de Celmedia permite la gesti&oacute;n de aplicaciones como campa&ntilde;as SMS Premium cobradas en MT o MO, la distribuci&oacute;n de contenidos y servicios de suscripci&oacute;n.</p>\n<p>\n	Soporta altos vol&uacute;menes de tr&aacute;fico y mantiene un sistema que le permite manejar el tr&aacute;fico de manera natural y sin sobresaltos a partir de un equipo t&eacute;cnico de gran capacidad con soporte 24/7.</p>\n', 'b9ad4-img_referencial.jpg', 1),
(4, 'Fidelización', '¡El amor es reciproco! Si una marca demuestra afecto, los usuarios responden con fidelidad.', '<p>\n	Abarcamos todo el ciclo de vida del cliente, desde la activaci&oacute;n, vinculaci&oacute;n, fidelizaci&oacute;n y retenci&oacute;n de &eacute;ste. Para ello, disponemos de un equipo multidisciplinario con m&aacute;s de 15 a&ntilde;os de experiencia que nos permite cubrir todas las disciplinas asociadas al programa, que van desde las definiciones y dise&ntilde;o, hasta los acuerdos de beneficios y sistemas tecnol&oacute;gicos m&aacute;s avanzados de control.</p>\n<p>\n	Desarrollo de Campa&ntilde;as - CRM &ndash; Canales de Comunicaci&oacute;n &ndash; Call Center &ndash; Productos y Beneficios &ndash; Plataforma de Administraci&oacute;n.</p>\n', '3a731-img_referencial.jpg', 1),
(5, 'Virtual Graphics', 'Damos vida a la imaginación.', '<p>\n	En Celmedia contamos con un equipo de artistas digitales siempre a la vanguardia de la tecnolog&iacute;a, esto nos permite llevar la cualquier soporte digital. Trabajamos con los grandes medios de comunicaci&oacute;n para llevar hasta los hogares su mensaje comercial de una manera estrat&eacute;gica y creativa.</p>\n<p>\n	Placement TV - BTL 360 - producci&oacute;n 3D - animaci&oacute;n 3D - Post Producci&oacute;n Audiovisual - Paletas Virtuales interactivas - Cubo Virtual.</p>\n<p>\n	Tecnol&oacute;gicamente contamos con la &uacute;ltima versi&oacute;n del software AKI, estamos en todos los canales instalados con un equipo que nos permite hoy destacarnos por el completo servicio que entregamos.</p>\n', 'e3fb7-img_referencial.jpg', 1),
(6, 'M-Goverment', 'Seremos una sociedad 100% digital. No por nada hay 7 billones de teléfonos celulares en el mundo.', '<p>\n	Egestas turpis elit turpis a amet penatibus ac urna, nunc sociis eu, magnis odio dictumst, a nisi magna lacus tincidunt, nunc nec porta porttitor! Lectus ac dapibus a magnis rhoncus augue a a mattis in magna, est egestas!</p>\n', 'bbdd7-img_referencial.jpg', 1),
(7, 'Social Media', 'La innovación tiene que ver más con la creación de experiencias que con la tecnología.', '<p>\n	Utilizamos distintas herramientas que nos permiten evaluar la reputaci&oacute;n online de las marcas y conocer en qu&eacute; lugares, Webs, blogs, redes sociales,&nbsp; se menciona a la misma.</p>\n<p>\n	Nos encargamos de la gesti&oacute;n de las redes sociales de las empresas y desarrollamos distintas estrategias que permitan a las marcas generar conversaci&oacute;n, experiencias y reacciones, con el objetivo de crear un v&iacute;nculo entre la marca y sus clientes.</p>\n', '19447-img_referencial.jpg', 1);

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
(1, '<div>\n	Hacer M&aacute;s, en Menos Tiempo</div>\n<div>\n	<strong>Es el Valor de una Cultura Digital</strong></div>\n<div>\n	<strong>en una red Regional</strong></div>\n', 'Casos de éxito', 'Hacer Más, en Menos Tiempo', '36b40-celmedia_slider4.jpg', 'http://www.google.com', 1, '2014-08-13 03:23:51'),
(2, '<div>\n	El mejor centro de inteligencia&nbsp;</div>\n<div>\n	estrat&eacute;gica y tecnol&oacute;gica digital&nbsp;</div>\n<div>\n	<strong>en un mundo&nbsp;</strong></div>\n<div>\n	<strong>cada d&iacute;a m&aacute;s m&oacute;vil</strong></div>\n', 'Nuestros servicios', 'El mejor centro de inteligencia ', '72354-celmedia_slider1.jpg', 'https://www.google.com.ec', 1, '2014-08-14 12:00:00'),
(3, '<div>\n	Seg&uacute;n el objetivo de marketing,&nbsp;</div>\n<div>\n	Celmedia lo asesora incorpor&aacute;ndole</div>\n<div>\n	<strong>una potente y eficiente&nbsp;</strong></div>\n<div>\n	<strong>estrategia creativa m&oacute;vil.</strong></div>\n', 'Casos de éxito', 'Según el objetivo de marketing', '95797-celmedia_slider2.jpg', 'https://www.google.com.ec', 1, '2014-08-14 12:00:00'),
(4, '<div>\n	Innovamos en tecnolog&iacute;a</div>\n<div>\n	digital, sistemas y mobile,</div>\n<div>\n	<strong>pero siempre con el fin</strong></div>\n<div>\n	<strong>de crear una experiencia.</strong></div>\n', 'Nuestros servicios', 'Innovamos en tecnología', '8d487-celmedia_slider3.jpg', 'https://www.google.com.ec', 1, '2014-08-14 12:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `tags_proyectos`
--

INSERT INTO `tags_proyectos` (`id`, `id_proyecto`, `id_tags`) VALUES
(2, 2, 4),
(3, 3, 4),
(4, 3, 9),
(5, 4, 4),
(6, 4, 9),
(7, 4, 8);

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
