-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-02-2022 a las 15:21:22
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
  `anio` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) UNSIGNED NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `aPaterno` varchar(40) NOT NULL,
  `aMaterno` varchar(40) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `colonia` varchar(40) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `estado` varchar(21) NOT NULL,
  `tel1` varchar(10) NOT NULL,
  `tel2` varchar(10) NOT NULL,
  `cel` varchar(10) NOT NULL,
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
  `modelo` varchar(15) NOT NULL,
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
  `id` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`id`, `country`, `state`, `city`) VALUES
(1, '1.0 Catálogos', '1.1 Usuarios', '1.1.1 Editar Usuarios'),
(2, '1.0 Catálogos', '1.1 Usuarios', '1.1.2 Asignar Contraseña'),
(3, '1.0 Catálogos', '1.1 Usuarios', '1.1.3 Eliminar Usuario'),
(4, '1.0 Catálogos', '1.1 Usuarios', '1.1.4 Asignar Permisos'),
(5, '1.0 Catálogos', '1.1 Usuarios', '1.1.5 Nuevo Usuario'),
(6, '1.0 Catálogos', '1.2 Marcas', '1.2.1 Registro de marcas'),
(7, '1.0 Catálogos', '1.2 Marcas', '1.2.2 Modificar Marca'),
(8, '1.0 Catálogos', '1.2 Marcas', '1.2.3 Eliminar Marca'),
(9, '1.0 Catálogos', '1.3 Modelos', '1.3.1 Registro de Modelo'),
(10, '1.0 Catálogos', '1.3 Modelos', '1.3.2 Modificar Modelo'),
(11, '1.0 Catálogos', '1.3 Modelos', '1.3.3 Eliminar Modelo'),
(12, '1.0 Catálogos', '1.4 Años', '1.4.1 Registro de Años'),
(13, '1.0 Catálogos', '1.4 Años', '1.4.2 Modificar Años'),
(14, '1.0 Catálogos', '1.4 Años', '1.4.3 Eliminar Año'),
(15, '2.0 Proyecto', '2.1 Registro Vehículo', '2.1.1 Registro de Vehículo'),
(16, '2.0 Proyecto', '2.1 Registro Vehículo', '2.1.2 Modificar Vehículo'),
(17, '2.0 Proyecto', '2.1 Registro Vehículo', '2.1.3 Eliminar Vehículo'),
(18, '2.0 Proyecto', '2.2 Registro Cliente', '2.2.1 Registro de Cliente'),
(19, '2.0 Proyecto', '2.2 Registro Cliente', '2.2.2 Modificar Cliente'),
(20, '2.0 Proyecto', '2.2 Registro Cliente', '2.2.1 Eliminar Cliente'),
(21, '2.0 Proyecto', '2.3 Registro Proyecto', '2.3.1 Registro de Proyecto'),
(22, '2.0 Proyecto', '2.3 Registro Proyecto', '2.3.2 Lista de Proyectos'),
(23, '2.0 Proyecto', '2.3 Registro Proyecto', '2.3.3 Modificar Proyectos'),
(24, '2.0 Proyecto', '2.3 Registro Proyecto', '2.3.4 Eliminar Proyectos'),
(25, '2.0 Proyecto', '2.3 Registro Proyecto', '2.3.5 Descarga PDF Proyectos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE `permiso` (
  `id` int(11) NOT NULL,
  `country` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `city` text NOT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id_permiso` int(11) NOT NULL,
  `permiso` text DEFAULT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `aPaterno` varchar(40) NOT NULL,
  `aMaterno` varchar(40) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `pass` varchar(32) DEFAULT 'SIN CONTRASEÑA',
  `admin` char(1) DEFAULT '0',
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_captC` int(11) DEFAULT 0,
  `id_captM` int(11) DEFAULT 0,
  `estatus` varchar(7) NOT NULL DEFAULT 'offline'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `aPaterno`, `aMaterno`, `usuario`, `email`, `tel`, `pass`, `admin`, `fecha_creacion`, `fecha_mod`, `id_captC`, `id_captM`, `estatus`) VALUES
(1, 'Jose Uriel', 'Guerra', 'Trinidad', 'admin', 'prueba@gmail.com', '123456789', 'admin100', '1', '2022-02-14 23:30:32', '2022-02-16 09:40:27', 0, 1, 'Online'),
(2'Juan Sebastian', 'Perez', 'Ortiz', 'admin', 'prueba@gmail.com', '123456789', 'admin1', '1', '2022-02-14 23:30:32', '2022-02-16 09:40:27', 0, 1, 'Online');


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
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `permiso`
--
ALTER TABLE `permiso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_permiso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
