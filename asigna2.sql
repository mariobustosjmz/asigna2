-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-09-2015 a las 12:37:10
-- Versión del servidor: 5.6.19-0ubuntu0.14.04.1
-- Versión de PHP: 5.6.10-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `asigna2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE IF NOT EXISTS `administradores` (
  `id_admin` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `super` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ajustes`
--

CREATE TABLE IF NOT EXISTS `ajustes` (
  `id_asjuste` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaciones`
--

CREATE TABLE IF NOT EXISTS `asignaciones` (
  `id_asignacion` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `id_estatus` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_asignacion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `asignaciones`
--

INSERT INTO `asignaciones` (`id_asignacion`, `id_usuario`, `id_equipo`, `id_estatus`, `id_admin`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, '2015-09-03 00:00:00', '2015-09-03 00:00:00'),
(2, 2, 2, 2, 1, '2015-09-03 00:00:00', '2015-09-03 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE IF NOT EXISTS `cuentas` (
  `id_cuenta` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `red_local` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `red_inalambrica` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usuario_dominio` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_dominio` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usuario_local` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_local` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `correo_outlook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_outlook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_pst` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_cuenta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`id_cuenta`, `red_local`, `red_inalambrica`, `usuario_dominio`, `password_dominio`, `usuario_local`, `password_local`, `correo_outlook`, `password_outlook`, `password_pst`, `created_at`, `updated_at`) VALUES
(1, '78-E3-B5-81-95-3F', '20-68-9D-B4-08-78', 'mario_bustos', '123456', 'Usuario', '123456', 'mariobustos@cfv.com.mx', '123456', 'n/a', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '78-E3-B5-81-75-44', '20-68-9D-B4-09-83', 'anahi_mtz', '123456', 'Usuario', '123456', 'anahimtz@cfv.com.mx', '123456', '123456', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE IF NOT EXISTS `departamentos` (
  `id_departamento` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_departamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id_departamento`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'PROYECTOS', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'CALIDAD', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE IF NOT EXISTS `equipos` (
  `id_equipo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` tinyint(1) NOT NULL,
  `ram` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `disco_duro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `particionado` tinyint(1) NOT NULL,
  `procesador` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `so` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `arquitectura` tinyint(1) NOT NULL,
  `paqueteria` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `antivirus` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `marca` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modelo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `s_n` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `s_tag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_equipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id_equipo`, `nombre`, `tipo`, `ram`, `disco_duro`, `particionado`, `procesador`, `so`, `arquitectura`, `paqueteria`, `antivirus`, `marca`, `modelo`, `s_n`, `s_tag`, `created_at`, `updated_at`) VALUES
(1, 'LP-5005\r\n', 1, '4GB\r\n', '465GB\r\n', 1, 'AMD A4-3305M APU with radeon graphics 1.90ghz\r\n', 'WIN 7 PROFESSIONAL', 0, '2007', 'KASPERSKY 2013\r\n', 'HP', '450', '5CG2442B8R', 'C9H09LT#ABM', '2015-08-23 00:00:00', '0000-00-00 00:00:00'),
(2, 'PC-5009', 0, '4GB', '500GB', 0, 'INTEL CORE i7-4770 CPU 3.40 GHz', 'WIN 7 PROFESSIONAL', 1, '2010\r\n', 'AVG', 'GENERICO', 'GENERICO', '5CG2442B8R', 'C9H09LT#ABM', '2015-08-23 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus`
--

CREATE TABLE IF NOT EXISTS `estatus` (
  `id_estatus` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_estatus`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `estatus`
--

INSERT INTO `estatus` (`id_estatus`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Asignado', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Sin Asignar', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE IF NOT EXISTS `historial` (
  `id_historial` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_asignacion` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_historial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_08_12_045521_create_posts_table', 1),
('2015_08_13_050111_create_usuarios_table', 1),
('2015_08_13_050920_create_departamentos_table', 1),
('2015_08_13_050943_create_puestos_table', 1),
('2015_08_13_051012_create_cuentas_table', 1),
('2015_08_13_051038_create_equipos_table', 1),
('2015_08_13_051108_create_asignaciones_table', 1),
('2015_08_13_051124_create_estatus_table', 1),
('2015_08_13_051143_create_historial_table', 1),
('2015_08_13_051211_create_administradores_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puestos`
--

CREATE TABLE IF NOT EXISTS `puestos` (
  `id_puesto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_puesto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `puestos`
--

INSERT INTO `puestos` (`id_puesto`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'AUXILIAR SISTEMAS', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'AUXILIAR DE RH', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_cuenta` int(11) NOT NULL,
  `id_departamento` int(11) NOT NULL,
  `id_puesto` int(11) NOT NULL,
  `no_empleado` int(11) NOT NULL,
  `nombres` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `id_cuenta`, `id_departamento`, `id_puesto`, `no_empleado`, `nombres`, `apellidos`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 'Mario Alejandro', 'Bustos Jimenez', '2015-08-19 00:00:00', '2015-08-19 00:00:00'),
(2, 2, 1, 1, 2, 'Anahi', 'Martinez Castro', '2015-08-19 00:00:00', '2015-08-19 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
