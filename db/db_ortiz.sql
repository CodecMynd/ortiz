-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-02-2022 a las 00:13:06
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_ortiz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anios`
--

CREATE TABLE `anios` (
  `id_anio` int(11) NOT NULL,
  `anio` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) UNSIGNED NOT NULL,
  `nombres` varchar(40) NOT NULL,
  `aPaternoCliente` varchar(30) NOT NULL,
  `aMaternoCliente` varchar(30) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `colonia` varchar(40) NOT NULL,
  `ciudad` varchar(40) NOT NULL,
  `estado` varchar(19) NOT NULL,
  `tel1` varchar(14) NOT NULL,
  `tel2` varchar(14) NOT NULL,
  `cel` varchar(14) NOT NULL,
  `email` varchar(40) NOT NULL,
  `status` char(1) NOT NULL DEFAULT '1',
  `observacion` varchar(200) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id_marca` int(11) UNSIGNED NOT NULL,
  `marca` varchar(30) NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos`
--

CREATE TABLE `modelos` (
  `id_modelo` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE `modulos` (
  `id_modulo` int(11) NOT NULL,
  `modulo` varchar(50) NOT NULL,
  `boton` varchar(50) NOT NULL,
  `permiso` varchar(50) NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_captC` int(11) NOT NULL,
  `id_captM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`id_modulo`, `modulo`, `boton`, `permiso`, `fecha_creacion`, `fecha_mod`, `id_captC`, `id_captM`) VALUES
(1, '1.0 Catálogos', '1.1 Usuarios', '1.1.1 Editar Usuarios', NULL, NULL, 0, 0),
(2, '1.0 Catálogos', '1.1 Usuarios', '1.1.2 Asignar Contraseña', NULL, NULL, 0, 0),
(3, '1.0 Catálogos', '1.1 Usuarios', '1.1.3 Eliminar Usuario', NULL, NULL, 0, 0),
(4, '1.0 Catálogos', '1.1 Usuarios', '1.1.4 Asignar Permisos', NULL, NULL, 0, 0),
(5, '1.0 Catálogos', '1.1 Usuarios', '1.1.5 Nuevo Usuario', NULL, NULL, 0, 0),
(6, '1.0 Catálogos', '1.2 Marcas', '1.2.1 Registro de marcas', NULL, NULL, 0, 0),
(7, '1.0 Catálogos', '1.2 Marcas', '1.2.2 Modificar Marca', NULL, NULL, 0, 0),
(8, '1.0 Catálogos', '1.2 Marcas', '1.2.3 Eliminar Marca', NULL, NULL, 0, 0),
(9, '1.0 Catálogos', '1.3 Modelos', '1.3.1 Registro de Modelo', NULL, NULL, 0, 0),
(10, '1.0 Catálogos', '1.3 Modelos', '1.3.2 Modificar Modelo', NULL, NULL, 0, 0),
(11, '1.0 Catálogos', '1.3 Modelos', '1.3.3 Eliminar Modelo', NULL, NULL, 0, 0),
(12, '1.0 Catálogos', '1.4 Años', '1.4.1 Registro de Años', NULL, NULL, 0, 0),
(13, '1.0 Catálogos', '1.4 Años', '1.4.2 Modificar Años', NULL, NULL, 0, 0),
(14, '1.0 Catálogos', '1.4 Años', '1.4.3 Eliminar Año', NULL, NULL, 0, 0),
(15, '1.0 Catálogos', '1.5 Permisos', '1.5.1 Registro de Permiso', NULL, NULL, 0, 0),
(16, '1.0 Catálogos', '1.5 Permisos', '1.5.2 Modificar Permiso', NULL, NULL, 0, 0),
(17, '1.0 Catálogos', '1.5 Permisos', '1.5.3 Eliminar Permiso', NULL, NULL, 0, 0),
(18, '2.0 Proyecto', '2.1 Registro Vehículo', '2.1.1 Registro de Vehículo', NULL, NULL, 0, 0),
(19, '2.0 Proyecto', '2.1 Registro Vehículo', '2.1.2 Modificar Vehículo', NULL, NULL, 0, 0),
(20, '2.0 Proyecto', '2.1 Registro Vehículo', '2.1.3 Eliminar Vehículo', NULL, NULL, 0, 0),
(21, '2.0 Proyecto', '2.2 Registro Cliente', '2.2.1 Registro de Cliente', NULL, NULL, 0, 0),
(22, '2.0 Proyecto', '2.2 Registro Cliente', '2.2.2 Modificar Cliente', NULL, NULL, 0, 0),
(23, '2.0 Proyecto', '2.2 Registro Cliente', '2.2.3 Eliminar Cliente', NULL, NULL, 0, 0),
(24, '2.0 Proyecto', '2.3 Registro Proyecto', '2.3.1 Registro de Proyecto', NULL, NULL, 0, 0),
(25, '2.0 Proyecto', '2.3 Registro Proyecto', '2.3.2 Lista de Proyectos', NULL, NULL, 0, 0),
(26, '2.0 Proyecto', '2.3 Registro Proyecto', '2.3.3 Modificar Proyectos', NULL, NULL, 0, 0),
(27, '2.0 Proyecto', '2.3 Registro Proyecto', '2.3.4 Eliminar Proyectos', NULL, NULL, 0, 0),
(28, '2.0 Proyecto', '2.3 Registro Proyecto', '2.3.5 Descarga PDF Proyectos', NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id_permiso` int(11) NOT NULL,
  `editarUsu` char(1) DEFAULT NULL,
  `asignarCon` char(1) DEFAULT NULL,
  `eliminarUsu` char(1) DEFAULT NULL,
  `asignarPer` char(1) DEFAULT NULL,
  `nuevoUsu` char(1) DEFAULT NULL,
  `regMarca` char(1) DEFAULT NULL,
  `modMarca` char(1) DEFAULT NULL,
  `eliminaMar` char(1) DEFAULT NULL,
  `regModelo` char(1) DEFAULT NULL,
  `modModelo` char(1) DEFAULT NULL,
  `eliminarMod` char(1) DEFAULT NULL,
  `regAnios` char(1) DEFAULT NULL,
  `modAnios` char(1) DEFAULT NULL,
  `eliminarAnio` char(1) DEFAULT NULL,
  `regPermiso` char(1) DEFAULT NULL,
  `modPermiso` char(1) DEFAULT NULL,
  `eliPermiso` char(1) DEFAULT NULL,
  `regVehiculo` char(1) DEFAULT NULL,
  `modVehiculo` char(1) DEFAULT NULL,
  `eliVehiculo` char(1) DEFAULT NULL,
  `regCliente` char(1) DEFAULT NULL,
  `modCliente` char(1) DEFAULT NULL,
  `eliCliente` char(1) DEFAULT NULL,
  `regProyecto` char(1) DEFAULT NULL,
  `listProyecto` char(1) DEFAULT NULL,
  `modProyecto` char(1) DEFAULT NULL,
  `eliProyecto` char(1) DEFAULT NULL,
  `pdfProyecto` char(1) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(40) NOT NULL,
  `aPaterno` varchar(30) NOT NULL,
  `aMaterno` varchar(30) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(14) NOT NULL,
  `pass` varchar(32) DEFAULT 'SIN_PASSWORD',
  `admin` char(1) DEFAULT '0',
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_captC` int(11) DEFAULT 0,
  `id_captM` int(11) DEFAULT 0,
  `estatus` varchar(7) NOT NULL DEFAULT 'offline',
  `super` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `aPaterno`, `aMaterno`, `usuario`, `email`, `tel`, `pass`, `admin`, `fecha_creacion`, `fecha_mod`, `id_captC`, `id_captM`, `estatus`, `super`) VALUES
(1, 'SUPER', 'ADMIN', '', 'superadmin', 'prueba@gmail.com', '123456789', 'superadmin', '1', '2022-02-14 23:30:32', '2022-02-16 09:40:27', 0, 0, 'Online', 1),
(2, 'URIEL', 'guerra', 'guerra', 'uriel', 'a@a.a', '(000) 000-0000', 'SIN_PASSWORD', '0', '2022-02-23 15:57:06', NULL, 1, 0, 'Offline', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id_vehiculo` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `id_modelo` int(11) NOT NULL,
  `id_anio` int(11) NOT NULL,
  `placa` varchar(10) NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_captC` int(11) DEFAULT 0,
  `id_captM` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anios`
--
ALTER TABLE `anios`
  ADD PRIMARY KEY (`id_anio`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `modelos`
--
ALTER TABLE `modelos`
  ADD PRIMARY KEY (`id_modelo`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`id_modulo`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id_permiso`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id_vehiculo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anios`
--
ALTER TABLE `anios`
  MODIFY `id_anio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marca` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modelos`
--
ALTER TABLE `modelos`
  MODIFY `id_modelo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modulos`
--
ALTER TABLE `modulos`
  MODIFY `id_modulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_permiso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
