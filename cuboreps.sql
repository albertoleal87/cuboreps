-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-03-2013 a las 06:26:49
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cuboreps`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asuntos`
--

CREATE TABLE IF NOT EXISTS `asuntos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `asunto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=60 ;

--
-- Volcado de datos para la tabla `asuntos`
--

INSERT INTO `asuntos` (`id`, `asunto`) VALUES
(1, 'ADDENDA'),
(2, 'ALTA DE PRODUCTORES'),
(3, 'ASIGNACIÓN DE PERMISOS'),
(4, 'CANCELACIÓN DE COMPROBANTES'),
(5, 'CAPTURA DE REMISIÓN'),
(6, 'CERTIFICADO DE COMUNICACIÓN/LICENCIA'),
(7, 'CERTIFICADO DE SELLOS'),
(8, 'CONFIGURACIÓN DE LA CUENTA'),
(9, 'CONFIRMACIÓN INBURSA'),
(10, 'CONTRATO'),
(11, 'COPIA A SOPORTE'),
(12, 'CUENTA BLOQUEADA'),
(13, 'DEMO'),
(14, 'DESCARGA DE COMPROBANTES'),
(15, 'DESCARGA DE FACTURA DE COMPRA DIVERZA'),
(16, 'DESEA PDF'),
(17, 'DESEA XML'),
(18, 'DETALLISTA'),
(19, 'DUDA COMERCIAL'),
(20, 'DUDA FISCAL'),
(21, 'DUDA OPERATIVA'),
(22, 'ENVIO DE COMPROBANTES SAT'),
(23, 'ENVÍO DE MANUAL'),
(24, 'ENVIO SFTP'),
(25, 'ENVIO WS'),
(26, 'ERROR AL ENVIAR XML'),
(27, 'ERROR AL TIMBRAR'),
(28, 'ERROR CONECTOR'),
(29, 'ERROR WEB'),
(30, 'ERROR WS'),
(31, 'FACTURA MAYOR A 3 MESES'),
(32, 'IMPORTACIÓN'),
(33, 'KIT DE PRUEBAS'),
(34, 'LOGOTIPO'),
(35, 'MODIFICACIÓN DE CONTRATO Y/O CUENTA'),
(36, 'MODIFICAR DATOS FACTURA'),
(37, 'N/A'),
(38, 'OTRO'),
(39, 'PEMEX/TRANSPORTISTA'),
(40, 'PLANTILLA'),
(41, 'PREVALIDACIÓN ALTA PROVEEDOR'),
(42, 'PRIMERA EMISIÓN'),
(43, 'PRODUCTOR NO REGISTRADO EN EL SAT'),
(44, 'PROYECTO'),
(45, 'QUEJA DE TIENDA'),
(46, 'REDONDEO'),
(47, 'REGISTRO DE CUENTA'),
(48, 'REGISTRO PORTAL PROVEEDOR'),
(49, 'REIMPRESIÓN'),
(50, 'REPORTE DE EMISIÓN'),
(51, 'RETROALIMENTACIÓN'),
(52, 'SALTO DE FOLIOS'),
(53, 'SERVICIO SUSPENDIDO'),
(54, 'SIN PREFIJO'),
(55, 'SUGERENCIA'),
(56, 'TIMBRES CONSUMIDOS'),
(57, 'VALIDACIÓN DE CFDI'),
(58, 'VALIDACIÓN DE FOLIOS EN PORTAFOLIO'),
(59, 'VERIFICACIÓN DE CFDI EN SAT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `evento` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `evento`) VALUES
(1, 'CHAT'),
(2, 'LLAMADA'),
(3, 'TICKET');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes`
--

CREATE TABLE IF NOT EXISTS `planes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plan` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `planes`
--

INSERT INTO `planes` (`id`, `plan`) VALUES
(1, 'BF'),
(2, 'CF'),
(3, 'TF'),
(4, 'SE'),
(5, 'SP_WS'),
(6, 'SP_WEB'),
(7, 'N/A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `producto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `producto`) VALUES
(1, 'GRATUITO'),
(2, 'BASICO'),
(3, 'PLUS'),
(4, 'PREMIUM'),
(5, 'MAX'),
(6, 'OXXO'),
(7, 'LIVERPOOL'),
(8, 'N/A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporteglobal`
--

CREATE TABLE IF NOT EXISTS `reporteglobal` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `hora` varchar(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ticket` varchar(13) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `evento` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rfc` varchar(13) COLLATE utf8_spanish_ci NOT NULL,
  `razon_social` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `producto` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `plan` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `asunto` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nivel_atencion` int(1) NOT NULL,
  `duracion` varchar(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `transferida` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status_ticket` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `comentarios` text COLLATE utf8_spanish_ci NOT NULL,
  `ip` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=29 ;

--
-- Volcado de datos para la tabla `reporteglobal`
--

INSERT INTO `reporteglobal` (`id`, `fecha`, `hora`, `ticket`, `evento`, `rfc`, `razon_social`, `usuario`, `producto`, `plan`, `asunto`, `nivel_atencion`, `duracion`, `transferida`, `status_ticket`, `comentarios`, `ip`) VALUES
(1, '0000-00-00', '', '', '', '6786876', '', '', 'BASICO', 'BF', '', 0, '', '', '', '', '127.0.0.1'),
(2, '0000-00-00', '', '', '', 'lkjlkj', '', '', 'BASICO', 'BF', '', 0, '', '', '', '', '127.0.0.1'),
(3, '2013-03-20', '', '', '', 'iouoiu', '', '', 'BASICO', 'BF', '', 0, '', '', '', '', '127.0.0.1'),
(4, '2013-03-20', '', '', '', 'uoiuoi', '', '', 'BASICO', 'BF', '', 0, '', '', '', '', '127.0.0.1'),
(5, '20/03/2013', '', '', '', 'yiuyi', '', '', 'BASICO', 'BF', '', 0, '', '', '', '', '127.0.0.1'),
(6, '20/03/2013', '10:03:50', '', '', 'iuyiuoyoyyu', '', '', 'BASICO', 'BF', '', 0, '', '', '', '', '127.0.0.1'),
(7, '20/03/2013', '10:03:14', '', '', '5798585795785', '', '', 'BASICO', 'BF', '', 0, '', '', '', '', '127.0.0.1'),
(8, '20/03/2013', '00:00:7', '', '', 'rrwer', '', '', 'BASICO', 'BF', '', 0, '', '', '', '', '127.0.0.1'),
(9, '20/03/2013', '10:03:07', '', '', 'yiuyuio', '', '', 'BASICO', 'BF', '', 0, '', '', '', '', '127.0.0.1'),
(10, '20/03/2013', '10:03:25', '', '', 'yiopyi', '', '', 'BASICO', 'BF', '', 0, '', '', '', '', '127.0.0.1'),
(11, '20/03/2013', '10:0303:', '', '', 'adada', '', '', 'BASICO', 'BF', '', 0, '', '', '', '', '127.0.0.1'),
(12, '20/03/2013', '10:Mar:3', '', '', '2EQEQ', '', '', 'BASICO', 'BF', '', 0, '', '', '', '', '127.0.0.1'),
(13, '20/03/2013', '22:30:27', '', '', 'eiqowyeoiq', '', '', 'BASICO', 'BF', '', 0, '', '', '', '', '127.0.0.1'),
(14, '20/03/2013', '10:34 PM', '', '', 'KHKLJKL', '', '', 'BASICO', 'BF', '', 0, '', '', '', '', '127.0.0.1'),
(15, '20/03/2013', '10:35PM', '', '', 'JLJKL', '', '', 'BASICO', 'BF', '', 0, '', '', '', '', '127.0.0.1'),
(16, '20/03/2013', '10:36pm', '', '', 'j.,n,.', '', '', '', '', '', 0, '', '', '', '', '127.0.0.1'),
(17, '20/03/2013', '11:47pm', 'hkklhlk', 'hlklkhlkh', 'lkhlkñhlk', 'hñhklhlkh', 'lkhlkh', 'BASICO', 'BF', 'ADDENDA', 1, '', 'NO', 'RESUELTO', 'klhlkhlñhlkñhl', '127.0.0.1'),
(18, '20/03/2013', '11:49pm', 'khñklhlkh', 'klhlkhlñkh', 'ñkhñlñkhlñk', 'hlkñhlkñlkñ', 'klhlñkhlk', 'BASICO', 'BF', 'ADDENDA', 1, '00:01:54', 'NO', 'RESUELTO', 'khlkhlkhk', '127.0.0.1'),
(19, '20/03/2013', '11:51pm', '86606', '689690869086', '98606986', '986986986', '98069869', 'BASICO', 'BF', 'ADDENDA', 1, '00:00:14', 'NO', 'RESUELTO', 'iqyiqhkleqhk', '127.0.0.1'),
(20, '20/03/2013', '11:53pm', 'asd-123-12312', 'lkjjlkñjkljkl', 'lkjlkjlkj', 'llkjlkjlkj sdasdas dasdasd', 'asdasda asdasda asdas', 'BASICO', 'BF', 'ADDENDA', 1, '00:00:52', 'NO', 'RESUELTO', 'kjakldjlskdj lajkl klaj dlkaj sldkjal', '127.0.0.1'),
(21, '21/03/2013', '12:00am', 'N/A', 'CHAT', 'TTIUOTIUTI', 'UITUITIUTIUTIU', 'TIUTIUTOIUTOI', 'GRATUITO', 'CF', 'DUDA OPERATIVA', 1, '00:01:17', 'N/', 'N/A', 'AKSJDKLASDJLKA', '127.0.0.1'),
(22, '21/03/2013', '12:01am', 'N/A', 'CHAT', 'YIOYIOYOIY', 'OIYOIYOPIYO', 'IYOYOIYOIY', 'OXXO', 'CF', 'CERTIFICADO DE COMUNICACIÓN/LICENCIA', 1, '00:00:17', 'N/A', 'N/A', 'ASNDLJASLÑD', '127.0.0.1'),
(23, '21/03/2013', '12:09am', 'KJKL', 'JLKJ', 'KJLK', 'JKLJ', 'LKJKL', 'BASICO', 'BF', 'ADDENDA', 1, '00:00:10', 'NO', 'RESUELTO', 'KJLKJLKJ', '127.0.0.1'),
(24, '21/03/2013', '12:13am', 'N/A', 'LLAMADA', 'OIUPÚPOUPO', 'UPOUPOUPOUPO', 'UPOUPOUPOUP', 'OXXO', 'SE', 'ALTA DE PRODUCTORES', 1, '00:00:23', 'NO', 'N/A', 'UOPUPOUPÚOU', '127.0.0.1'),
(25, '21/03/2013', '12:13am', 'UUIOUOIUOI', 'TICKET', 'UOIUOIU', 'OOIUOIUIO', 'UIOUOIUOP', 'GRATUITO', 'CF', 'ALTA DE PRODUCTORES', 1, '00:00:15', 'N/A', 'PENDIENTE', 'KLJDASLKDJALK', '127.0.0.1'),
(26, '21/03/2013', '12:23am', 'yoiyoweiyrowe', 'TICKET', 'ioyioyoiyoi', 'yioyoiyoiyoiyo', 'iyoiyioyoi', 'BASICO', 'BF', 'ADDENDA', 2, '00:00:28', 'N/A', 'PENDIENTE', 'gkjhgkjgkjgkjg', '127.0.0.1'),
(27, '21/03/2013', '12:23am', 'N/A', 'LLAMADA', 'ououpou', 'poupoupoup', 'oupoupu', 'BASICO', 'CF', 'ASIGNACIÓN DE PERMISOS', 1, '00:00:34', 'NO', 'N/A', 'naksldjalkjslk', '127.0.0.1'),
(28, '21/03/2013', '12:24am', 'N/A', 'CHAT', 'lkjkljlkjl', 'jlñjñljñjñlj', 'ñljñljñljñl', 'BASICO', 'CF', 'ALTA DE PRODUCTORES', 2, '00:00:47', 'N/A', 'N/A', 'sasdjañlsjlañ', '127.0.0.1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
