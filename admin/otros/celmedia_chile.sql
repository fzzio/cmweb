-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-08-2014 a las 17:38:10
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
CREATE DATABASE IF NOT EXISTS `altavoz_celmedia_chile` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `altavoz_celmedia_chile`;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `imagen`, `imagenhover`, `imagenbg`, `estado`) VALUES
(1, 'Aeromexico', '64a90-aeromexico_85gris.png', '7f60f-aeromexico_85.png', 'a15b2-aeromexico_400.png', 1),
(2, 'Desafio Africa', '370c0-africa_85gris.png', '653d8-africa_85.png', '348a4-africa_400.png', 1),
(3, 'AIG', '857bc-aig_85gris.png', '4bf0a-aig_85.png', '95e55-aig_400.png', 1),
(4, 'ANAHUAC', '6a4c8-anahuac_85gris.png', '6856b-anahuac_85.png', '13b3a-anahuac_400.png', 1),
(5, 'BANORTE', '1b046-banorte_85gris.png', '81a2c-banorter_85.png', '221ed-banorte_400.png', 1),
(6, 'BBVA', '76456-bbva_85gris.png', '30cf5-bbva_85.png', '8e0f3-bbva_400.png', 1),
(7, 'BMW', '92ba7-bmw_85gris.png', '7e0b6-bmw_85.png', 'c1344-bmw_400.png', 1),
(8, 'CARACOL', '41619-caracol_85gris.png', '93ac8-caracol_85.png', '0caea-caracol_400.png', 1),
(9, 'CINÉPOLIS', 'b5bf8-cinepolis_85gris.png', 'f358e-cinepolis_85.png', 'ac5a1-cinepolis_400.png', 1),
(10, 'Club Militar', '5c10e-club-militar_85gris.png', '1104e-club-militar_85color.png', '833a6-club-militar_400.png', 1),
(11, 'Coca Cola', '94817-cocacola_85gris.png', '1e22d-cocacola_85.png', '543f0-cocacola_400.png', 1),
(12, 'Colgate', '28d6e-colgate_85gris.png', 'c1a02-colgate_85.png', '418ad-colgate_400.png', 1),
(13, 'Colsubsidio', '5b1c1-colsubsidio_85gris.png', '65300-colsubsidio_85.png', '7ad7d-colsubsidio_400.png', 1),
(14, 'Crem Helado', '16ca3-creamhelado_85gris.png', '98d21-creamhelado_85.png', '8e4f7-creamhelado_400.png', 1),
(15, 'DANE', '98974-dane_85gris.png', '1086e-dane_85.png', 'c4349-dane.png', 1),
(16, 'DIAGEO', 'a4ed5-diageo_85gris.png', 'e911d-diageo_85.png', '725e4-diageo_400.png', 1),
(17, 'Disney', '1d0f5-disney_85gris.png', '5d137-disney_85.png', '64759-disney_400.png', 1),
(18, 'American Eagle', '60661-eagle_85gris.png', 'd66fe-eagle_85.png', '50ab9-eagle_400.png', 1),
(19, 'El Grafico', '447ce-elgrafico_85gris.png', 'aaf3c-elgrafico_85.png', '94986-elgrafico_400.png', 1),
(20, 'El Universal', '32d11-eluniversal_85gris.png', 'd197d-eluniversal_85.png', 'ccdc8-eluniversal.png', 1),
(21, 'Facebook', '4c382-fb_85gris.png', '385df-fb_85.png', 'c83fe-fb_400.png', 1),
(22, 'Banco Finandina', '38b3d-finandina_85gris.png', '5c1a3-finandina_85color.png', 'e638f-finandina_400.png', 1),
(23, 'Fonprecon', 'cd174-fonprecon_85gris.png', '1f6ee-fonprecon_85.png', 'aff25-fonprecon_400.png', 1),
(24, 'FOPAE', 'c9773-fopae_85gris.png', '97c10-fopae_85.png', '39193-fopae_400.png', 1),
(25, 'Ford', 'e1b01-ford_85gris.png', '64ec1-ford_85.png', '4e66e-ford_400.png', 1),
(26, 'Gol Caracol', '352c4-golcaracol_85gris.png', '6bc22-golcaracol_85.png', '0214f-golcaracol_400.png', 1),
(27, 'Hasbro', '5e371-hasbro_85gris.png', 'a95d2-hasbro_85.png', '266c0-hasbro_400.png', 1),
(28, 'Helm', 'ce779-helm_85gris.png', 'e0a2d-helm_85.png', '00288-helm_400.png', 1),
(29, 'Homecenter', 'ed054-homecenter_85gris.png', '5fc52-homecenter_85.png', '0391c-homecenter_400.png', 1),
(30, 'HSBC', 'ba197-hsbc_85gris.png', '270d5-hsbc_85.png', '0a9f4-hsbc_400.png', 1),
(31, 'Hyunai', 'ccf5d-hyundai_85gris.png', '5023b-hyundai_85.png', '0e12d-hyundai_400.png', 1),
(32, 'InfoBip', 'f0462-infobip_85gris.png', '88af9-infobip_85.png', '293fa-infobip_400.png', 1),
(33, 'Magefesa', '16078-magafesa_85gris.png', '6400e-magafesa_85.png', 'dc6ac-magafesa_400.png', 1),
(34, 'Mattel', '65730-mattel_85gris.png', '1d184-mattel_85.png', '9e50c-mattel_400.png', 1),
(35, 'MinAgricultura', '779b0-minagri_85gris.png', 'a9871-minagri_85.png', '415b3-minagri_400.png', 1);

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
  `fecha` date NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id`, `id_pais`, `id_sector`, `titulo`, `subtitulo`, `descripcion`, `imagen`, `fecha`, `estado`) VALUES
(1, 1, 2, 'Celmedia adquiere licencia de ChyronHego', 'Celmedia adquiere licencia de ChyronHego', '<div>\n	Hace cinco meses la televisi&oacute;n en Chile est&aacute; exhibiendo en sus pantallas&nbsp; lo &uacute;ltimo en tecnolog&iacute;a, luego de que&nbsp; Celmedia concretara un acuerdo con CHYRONHEGO para ofrecer los servicios de Gr&aacute;ficas Virtuales. Hoy, &nbsp;Per&uacute;, Colombia y Ecuador ya est&aacute;n comenzando a experimentar lo mismo.</div>\n<div>\n	&nbsp;</div>\n<div>\n	La licencia faculta a Celmedia para utilizar la &uacute;ltima versi&oacute;n de los softwares Aki Paint,&nbsp; Aki F&uacute;tbol, Virtual Graphics y Anchor Tracking, que permiten entregar un servicio integral pero a la vez modular que va desde proveer y operar los equipos tecnol&oacute;gicos a trav&eacute;s de los cuales se difunden y exponen las gr&aacute;ficas virtuales, hasta generar los contenidos 3D que ser&aacute;n emitidos participando, si se requiere, en el proceso creativo de dicho contenido.</div>\n<div>\n	&nbsp;</div>\n<div>\n	La experiencia ha sido exitosa y los clientes se han mostrado satisfechos y sorprendidos, una vez m&aacute;s, con la calidad del servicio de Celmedia. En Chile, se realiz&oacute; una exhibici&oacute;n de virtuales en agua, siendo la primera de este tipo que se ha hecho en toda Latinoam&eacute;rica. Per&uacute;, Ecuador y Colombia ya est&aacute;n planificando exhibiciones y prepar&aacute;ndose para marcar tendencia en la televisi&oacute;n.</div>\n', '2f716-logocelmedia_bordado.jpg', '2014-08-14', 1),
(2, 2, 6, 'La nueva oportunidad de su empresa para innovar', 'La nueva oportunidad de su empresa para innovar', '<div>\n	<b>BoosterUp CoCreation</b>, uno de los principales eventos en el &aacute;rea de la innovaci&oacute;n y emprendimiento en el pa&iacute;s, que organiza el Instituto Internacional para la Innovaci&oacute;n Empresarial 3IE de la Universidad T&eacute;cnica Federico Santa Mar&iacute;a, apoyado por CORFO, ser&aacute; presentado este <b>jueves 22 de agosto</b>, <b>a las 11.00 horas, en Confiter&iacute;a Torres, Isidora Goyenechea 2962, Las Condes.</b></div>\n<div>\n	&nbsp;</div>\n<div>\n	Se trata del &uacute;nico programa que apoya la creaci&oacute;n y aceleraci&oacute;n de nuevos negocios nacidos de startups que responden a desaf&iacute;os de innovaci&oacute;n de 10 grandes compa&ntilde;&iacute;as e instituciones: <b>Microsoft, 3M, Cisco, Celmedia, MapCity, Fepasa, Programa de Proveedores de Clase Mundial, Defontana, AES Gener y Universidad T&eacute;cnica Federico Santa Mar&iacute;a.</b></div>\n<div>\n	&nbsp;</div>\n<div>\n	Ser&aacute;n 120 emprendedores, 60 startups, 10 compa&ntilde;&iacute;as y m&aacute;s de 30 inversionistas y mentores buscando oportunidades de nuevos negocios.</div>\n<div>\n	Te invitamos a conocer detalles del evento que en octubre reunir&aacute; a m&aacute;s de 200 personas. Se adjunta invitaci&oacute;n.</div>\n<div>\n	&nbsp;</div>\n<div>\n	Contacto de prensa</div>\n<div>\n	Marcelo Macellari</div>\n<div>\n	<a href="mailto:marcelo.macellari@3ie.cl">marcelo.macellari@3ie.cl</a></div>\n<div>\n	(9) 57453205</div>\n', '76146-logocelmedia_bordado.jpg', '2014-08-01', 1),
(3, 2, 2, 'Celmedia implementa servicio de consulta de precios de alimentos', 'Celmedia implementa servicio de consulta de precios de alimentos', '<div>\n	Celmedia implement&oacute; un servicio que permite a los usuarios consultar mediante mensaje de texto los &uacute;ltimos valores de los productos de inter&eacute;s; ya sea por un alimento en espec&iacute;fico o suscribi&eacute;ndose para recibir en su celular el &uacute;ltimo valor del producto seleccionado cada vez que el precio de &eacute;ste sea modificado.</div>\n<div>\n	&nbsp;</div>\n<div>\n	Con este programa, la Oficina de Estudios y Pol&iacute;ticas Agrarias (Odepa) &ldquo;busca acercar a los actores de un amplio grupo de usuarios del sector silvoagropecuario a las tecnolog&iacute;as de la informaci&oacute;n, y con ello facilitar su trabajo, mejorar la toma de sus decisiones productivas y de comercializaci&oacute;n&rdquo;.</div>\n<div>\n	&nbsp;</div>\n<div>\n	Para suscribirse al servicio, el usuario debe enviar como mensaje de texto (SMS) el c&oacute;digo del producto de inter&eacute;s al n&uacute;mero corto 2070, y recibir&aacute; un SMS cada vez que se publique un nuevo precio del producto seleccionado.</div>\n<div>\n	Adicionalmente, el usuario tambi&eacute;n tiene la opci&oacute;n de realizar una consulta libre. Para ello, elije un producto de la lista y env&iacute;a el c&oacute;digo al n&uacute;mero corto 4545 para recibir de forma inmediata el precio de comercializaci&oacute;n m&aacute;s reciente publicado por Odepa.</div>\n<div>\n	&nbsp;</div>\n<div>\n	El servicio ha tenido buena acogida en la Regi&oacute;n Metropolitana, y recientemente fue lanzado en la provincia de Concepci&oacute;n, en voz de el ministro de Agricultura Luis Mayol, quien anunci&oacute; que la iniciativa transparentar&aacute; los mercados mayoristas, &ldquo;permitiendo que los productores y consumidores tomen las mejores decisiones y, al mismo tiempo, corregir las distorsiones que se producen en la cadena de comercializaci&oacute;n de productos hortofrut&iacute;colas&rdquo;.</div>\n', '961e1-logocelmedia_bordado.jpg', '2013-08-20', 1);

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
  `prioridad` tinyint(1) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id`, `id_pais`, `id_servicio`, `id_sector`, `id_cliente`, `nombre`, `descripcion`, `fecha`, `imagen`, `prioridad`, `estado`) VALUES
(1, 1, 1, 1, 1, 'Campaña 45 años', '<p>\n	El equipo de Celmedia Mobile Marketing y sus capacidades tecnol&oacute;gicas le pueden ayudar a crear e implementar campa&ntilde;as creativas y estrat&eacute;gicas de Mobile Marketing de gran efectividad y medici&oacute;n. Celmedia Mobile marketing ha ayudado a cientos de empresas en am&eacute;rica latina a comunicarse eficientemente con sus consumidores. El equipo posee una gran experiencia satisfaciendo la necesidad de los operadores m&oacute;viles, las marcas y los consumidores desarrollando portales y contenidos para enriquecer la experiencia de navegaci&oacute;n.</p>\n', '2014-08-13', 'celmedia_slider8.jpg', 1, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tags`
--

INSERT INTO `tags` (`id`, `descripcion`, `estado`) VALUES
(1, 'HTML', 1),
(2, 'Responsive', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags_noticias`
--

CREATE TABLE IF NOT EXISTS `tags_noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tags` int(11) NOT NULL,
  `id_noticia` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags_proyectos`
--

CREATE TABLE IF NOT EXISTS `tags_proyectos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_proyecto` int(11) NOT NULL,
  `id_tags` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tags_proyectos`
--

INSERT INTO `tags_proyectos` (`id`, `id_proyecto`, `id_tags`) VALUES
(1, 2, 1);

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
