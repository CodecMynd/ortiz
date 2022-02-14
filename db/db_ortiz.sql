-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-02-2022 a las 16:16:16
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
-- Estructura de tabla para la tabla `puestos`
--

CREATE TABLE `puestos` (
  `id_puesto` int(3) NOT NULL,
  `puesto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) UNSIGNED NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `aPaterno` varchar(40) NOT NULL,
  `aMaterno` varchar(40) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `admin` char(1) NOT NULL DEFAULT '0',
  `fecha_creacion` datetime DEFAULT NULL,
  `estatus` varchar(7) NOT NULL DEFAULT 'offline',
  `id_puesto` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `aPaterno`, `aMaterno`, `usuario`, `email`, `tel`, `pass`, `admin`, `fecha_creacion`, `estatus`, `id_puesto`) VALUES
(1, 'ADMIN', 'ADMIN', 'ADMIN', 'ADMINISTRADOR', 'qq', '22', 'admin1', '1', '2022-02-10 17:18:05', '222', 0),
(2, 'USUARIO1', 'NORMAL', 'NORMAL', 'USUARIO', 'qq', '2', 'user1', '0', '2022-02-10 20:06:46', 'offline', 0);

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
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
