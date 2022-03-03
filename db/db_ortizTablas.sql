02/03/2022



CREATE TABLE `agentes` (
  `id_agente` int(11) NOT NULL,
  `agente` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;


CREATE TABLE `anios` (
  `id_anio` int(11) NOT NULL,
  `anio` varchar(4) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;


INSERT INTO `anios` (`id_anio`, `anio`) VALUES
(1, '1970'),
(2, '1971'),
(3, '1972'),
(4, '1973'),
(5, '1974'),
(6, '1975'),
(7, '1976'),
(8, '1977'),
(9, '1978'),
(10, '1979'),
(11, '1980'),
(12, '1981'),
(13, '1982'),
(14, '1983'),
(15, '1984'),
(16, '1985'),
(17, '1986'),
(18, '1987'),
(19, '1988'),
(20, '1989'),
(21, '1990'),
(22, '1991'),
(23, '1992'),
(24, '1993'),
(25, '1994'),
(26, '1995'),
(27, '1996'),
(28, '1997'),
(29, '1998'),
(30, '1999'),
(31, '2000'),
(32, '2001'),
(33, '2002'),
(34, '2003'),
(35, '2004'),
(36, '2005'),
(37, '2006'),
(38, '2007'),
(39, '2008'),
(40, '2009'),
(41, '2010'),
(42, '2011'),
(43, '2012'),
(44, '2013'),
(45, '2014'),
(46, '2015'),
(47, '2016'),
(48, '2017'),
(49, '2018'),
(50, '2019'),
(51, '2020'),
(52, '2021'),
(53, '2022');

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombres` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `aPaternoCliente` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `aMaternoCliente` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `calle` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `colonia` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `ciudad` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `estado` varchar(19) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tel1` varchar(14) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tel2` varchar(14) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cel` varchar(14) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '1',
  `observacion` varchar(200) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;


INSERT INTO `clientes` (`id_cliente`, `nombres`, `aPaternoCliente`, `aMaternoCliente`, `calle`, `colonia`, `ciudad`, `estado`, `tel1`, `tel2`, `cel`, `email`, `status`, `observacion`, `fecha_creacion`, `fecha_mod`, `id_capC`, `id_capM`) VALUES
(1, 'Marcos ', 'Gomez', 'Diaz', 'Arnica 173', 'Alamedas de Zalatitan', 'Tonala', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 351-7322', 'sin@correo.com', '0', '', '2022-03-01 15:27:31', NULL, 3, NULL),
(2, 'Ramón ', 'Hernández ', 'Trujillo', '-', '-', '-', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 227-1449', 'sin@correo.com', '0', '', '2022-03-01 15:30:52', NULL, 3, NULL),
(3, 'Ezequiel', ' Velázquez ', 'Villafuente', 'Francisco I. Madero no. 18', 'Santa Ana Tepetitan', 'Toluca', 'México', '(000) 000-0000', '(000) 000-0000', '(332) 790-9256', 'sin@correo.com', '0', '', '2022-03-01 15:34:23', NULL, 3, NULL),
(4, 'Roberto', 'De Alba', '-', 'Santa Ana no. 6', 'El Briseño', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 343-4075', 'sin@correo.com', '0', '', '2022-03-01 17:51:35', NULL, 3, NULL);

CREATE TABLE `colores` (
  `id_color` int(4) NOT NULL,
  `color` varchar(40) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `status` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;


INSERT INTO `colores` (`id_color`, `color`, `status`, `fecha_creacion`, `fecha_mod`, `id_capC`, `id_capM`) VALUES
(1, 'Rojo', '0', '2022-03-01 12:01:28', NULL, 2, NULL),
(2, 'Azul', '0', '2022-03-01 12:01:31', NULL, 2, NULL),
(3, 'Blanco', '0', '2022-03-01 15:24:37', NULL, 3, NULL),
(4, 'Arena', '0', '2022-03-01 15:24:43', NULL, 3, NULL),
(5, 'Negro', '0', '2022-03-01 15:24:51', NULL, 3, NULL),
(7, 'Gris', '0', '2022-03-01 15:25:52', NULL, 3, NULL);


CREATE TABLE `marcas` (
  `id_marca` int(11)  NOT NULL,
  `marca` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;


INSERT INTO `marcas` (`id_marca`, `marca`, `fecha_creacion`, `fecha_mod`, `id_capC`, `id_capM`) VALUES
(1, 'Acura', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(3, 'Audi', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(4, 'BMW', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(5, 'Buick', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(6, 'Cadillac', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(7, 'Chevrolet', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(8, 'Chrysler', '0000-00-00 00:00:00', '2022-02-21 16:54:10', 2, 2),
(9, 'Datsun', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(10, 'Dodge', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(11, 'FIAT', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(12, 'Ford', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(13, 'General Motors', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(14, 'GMC', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(16, 'Honda', '0000-00-00 00:00:00', '2022-02-22 16:00:21', 2, 2),
(17, 'Hummer', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(18, 'Hyundai', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(19, 'Infinity', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(20, 'International', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(21, 'Isuzu', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(22, 'Jaguar', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(23, 'Jeep', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(24, 'KIA', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(25, 'Land Rover', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(26, 'Lincoln', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(27, 'Mazda', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(28, 'Mercedes Benz', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(29, 'Mercury', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(30, 'Mini cooper', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(31, 'Mitsubishi', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(32, 'Nissan', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(33, 'Peugeot', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(34, 'Pontiac', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(35, 'Porshe', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(36, 'Ram', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(37, 'Renault', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(38, 'Seat', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(39, 'Subaru', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(40, 'Suzuki', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(41, 'Toyota', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(42, 'Volvo', '0000-00-00 00:00:00', '2022-02-22 16:00:45', 2, 2),
(43, 'VW', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0),
(44, 'ZDX', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 0);

CREATE TABLE `modelos` (
  `id_modelo` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `modelo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;


INSERT INTO `modelos` (`id_modelo`, `id_marca`, `modelo`, `fecha_creacion`, `fecha_mod`, `id_capC`, `id_capM`) VALUES
(1, 3, 'A1', '2022-02-21 16:30:01', NULL, 2, NULL),
(2, 3, 'A3', '2022-02-21 16:30:26', NULL, 2, NULL),
(3, 3, 'Q2', '2022-02-21 16:31:00', NULL, 2, NULL),
(4, 3, 'A4', '2022-02-21 16:31:17', NULL, 2, NULL),
(5, 3, 'A5', '2022-02-21 16:31:45', NULL, 2, NULL),
(6, 3, 'A6', '2022-02-21 16:32:03', NULL, 2, NULL),
(7, 3, 'Q5', '2022-02-21 16:32:31', NULL, 2, NULL),
(8, 4, '335', '2022-02-21 16:33:59', NULL, 2, NULL),
(9, 4, '530', '2022-02-21 16:34:21', NULL, 2, NULL),
(10, 4, '120i', '2022-02-21 16:35:12', NULL, 2, NULL),
(11, 4, 'Serie 3', '2022-02-21 16:35:51', NULL, 2, NULL),
(12, 4, '330ci', '2022-02-21 16:39:55', NULL, 2, NULL),
(13, 4, 'Serie 5', '2022-02-21 16:40:28', NULL, 2, NULL),
(14, 4, 'X1', '2022-02-21 16:40:59', NULL, 2, NULL),
(15, 4, '545', '2022-02-21 16:41:26', NULL, 2, NULL),
(16, 4, 'X3', '2022-02-21 16:41:48', NULL, 2, NULL),
(17, 4, '320i', '2022-02-21 16:42:11', NULL, 2, NULL),
(18, 4, '325', '2022-02-21 16:42:43', NULL, 2, NULL),
(19, 4, 'X5', '2022-02-21 16:43:07', NULL, 2, NULL),
(20, 4, 'Z3', '2022-02-21 16:43:26', NULL, 2, NULL),
(21, 4, '323i', '2022-02-21 16:43:50', NULL, 2, NULL),
(22, 4, '325i', '2022-02-21 16:44:13', NULL, 2, NULL),
(23, 4, '330i', '2022-02-21 16:44:31', NULL, 2, NULL),
(24, 4, 'i3', '2022-02-21 16:45:00', NULL, 2, NULL),
(25, 4, 'Serie 1', '2022-02-21 16:45:27', NULL, 2, NULL),
(26, 8, 'Blazer', '2022-02-21 16:53:45', NULL, 2, NULL),
(27, 8, 'Van express', '2022-02-21 16:54:52', NULL, 2, NULL),
(28, 7, 'Chevy Monza', '2022-02-21 16:55:48', NULL, 2, NULL),
(29, 7, 'Cutlass', '2022-02-21 16:56:12', NULL, 2, NULL),
(30, 7, 'Equinox', '2022-02-21 16:56:38', NULL, 2, NULL),
(31, 7, 'Suburban', '2022-02-21 16:57:07', NULL, 2, NULL),
(32, 7, 'Sonic', '2022-02-21 16:57:32', NULL, 2, NULL),
(33, 7, 'Silverado', '2022-02-21 16:58:03', NULL, 2, NULL),
(34, 7, 'Venture', '2022-02-21 16:58:24', NULL, 2, NULL),
(35, 7, 'Chevy', '2022-02-21 16:58:47', NULL, 2, NULL),
(36, 7, 'Malibu', '2022-02-21 17:01:26', NULL, 2, NULL),
(37, 7, 'Cruze', '2022-02-21 17:01:54', NULL, 2, NULL),
(38, 7, 'Torrent Pontiac', '2022-02-21 17:02:22', NULL, 2, NULL),
(39, 7, 'Astra', '2022-02-21 17:02:47', NULL, 2, NULL),
(40, 7, 'Aveo', '2022-02-21 17:03:11', NULL, 2, NULL),
(41, 7, 'Colorado', '2022-02-21 17:03:40', NULL, 2, NULL),
(42, 7, 'Captiva', '2022-02-21 17:04:06', NULL, 2, NULL),
(43, 7, 'Chevy Confort', '2022-02-21 17:04:30', NULL, 2, NULL),
(44, 7, 'Cheyenne', '2022-02-21 17:04:49', NULL, 2, NULL),
(45, 7, 'Tracks', '2022-02-21 17:05:06', NULL, 2, NULL),
(46, 7, 'Trail Blazer', '2022-02-21 17:06:06', NULL, 2, NULL),
(47, 7, 'Vectra', '2022-02-21 17:06:28', NULL, 2, NULL),
(48, 7, 'HHR', '2022-02-21 17:06:52', NULL, 2, NULL),
(49, 7, 'Chevy C2', '2022-02-21 17:07:14', NULL, 2, NULL),
(50, 7, 'Avalanche', '2022-02-21 17:07:31', NULL, 2, NULL),
(51, 7, 'Silverado 2500', '2022-02-21 17:08:05', NULL, 2, NULL),
(52, 7, 'Uplander', '2022-02-21 17:09:05', NULL, 2, NULL),
(53, 7, 'Tracker', '2022-02-21 17:09:28', NULL, 2, NULL),
(54, 7, 'S10', '2022-02-21 17:09:45', NULL, 2, NULL),
(55, 7, 'Enclave', '2022-02-21 17:10:02', NULL, 2, NULL),
(56, 7, 'Silhouette', '2022-02-21 17:10:33', NULL, 2, NULL),
(57, 7, 'Camaro', '2022-02-21 17:10:52', NULL, 2, NULL),
(58, 7, 'Corvette', '2022-02-21 17:11:16', NULL, 2, NULL),
(59, 7, 'Cavalier', '2022-02-21 17:11:38', NULL, 2, NULL),
(60, 7, 'Van', '2022-02-21 17:12:06', NULL, 2, NULL),
(61, 7, 'Sonora', '2022-02-21 17:12:27', NULL, 2, NULL),
(62, 7, 'C10', '2022-02-21 17:12:46', NULL, 2, NULL),
(63, 7, 'Trax', '2022-02-21 17:13:04', NULL, 2, NULL),
(64, 7, 'Astra Wagon', '2022-02-21 17:13:32', NULL, 2, NULL),
(65, 7, 'Tornado', '2022-02-21 17:13:53', NULL, 2, NULL),
(66, 7, 'Zafira', '2022-02-21 17:14:15', NULL, 2, NULL),
(67, 7, 'Optra LS', '2022-02-21 17:14:40', NULL, 2, NULL),
(68, 7, 'Silverado 1500', '2022-02-21 17:15:06', NULL, 2, NULL),
(69, 7, 'Corsa', '2022-02-21 17:20:51', NULL, 2, NULL),
(70, 7, 'Chevy Van 20', '2022-02-21 17:21:29', NULL, 2, NULL),
(71, 7, 'Camaro Z28', '2022-02-21 17:22:33', NULL, 2, NULL),
(72, 7, 'Xtrail Blazer', '2022-02-21 17:23:04', NULL, 2, NULL),
(73, 7, 'Cobalt', '2022-02-21 17:23:42', NULL, 2, NULL),
(74, 7, 'Geo Tracker', '2022-02-21 17:24:50', NULL, 2, NULL),
(75, 7, 'Astra Opel', '2022-02-21 17:25:25', NULL, 2, NULL),
(76, 7, 'CargoVan', '2022-02-21 17:26:15', NULL, 2, NULL),
(77, 7, 'Express', '2022-02-21 17:26:52', NULL, 2, NULL),
(78, 7, 'Impala Lt', '2022-02-21 17:27:27', NULL, 2, NULL),
(79, 7, 'Sonic Lt', '2022-02-21 17:27:47', NULL, 2, NULL),
(80, 7, 'Spark', '2022-02-21 17:28:03', NULL, 2, NULL),
(81, 7, 'Buick', '2022-02-21 17:28:28', NULL, 2, NULL),
(82, 23, 'Unlimited', '2022-02-21 17:29:47', NULL, 2, NULL),
(83, 23, 'Renegade', '2022-02-21 17:30:36', NULL, 2, NULL),
(84, 23, 'Cherokee SRT', '2022-02-21 17:31:22', NULL, 2, NULL),
(85, 23, 'Wagoneer', '2022-02-21 17:32:01', NULL, 2, NULL),
(86, 23, 'Cherokee Laredo', '2022-02-21 17:33:09', NULL, 2, NULL),
(87, 23, 'Patriot', '2022-02-21 17:33:39', NULL, 2, NULL),
(88, 23, 'Sahara', '2022-02-21 17:35:13', NULL, 2, NULL),
(89, 23, 'Wrangler', '2022-02-21 17:35:52', NULL, 2, NULL),
(90, 23, 'Comanche', '2022-02-21 17:36:27', NULL, 2, NULL),
(91, 23, 'Comander', '2022-02-21 17:37:25', NULL, 2, NULL),
(92, 23, 'Rubicon', '2022-02-21 17:38:31', NULL, 2, NULL),
(93, 23, 'Cherokee', '2022-02-21 17:38:54', NULL, 2, NULL),
(94, 23, 'Cherokee Sport', '2022-02-22 09:22:44', NULL, 2, NULL),
(95, 23, 'Cherokee Sport', '2022-02-22 09:22:44', NULL, 2, NULL),
(96, 23, 'Grand Cherokee', '2022-02-22 09:23:11', NULL, 2, NULL),
(97, 23, 'Compass', '2022-02-22 09:23:40', NULL, 2, NULL),
(98, 23, 'Compass', '2022-02-22 09:23:40', NULL, 2, NULL),
(99, 23, 'Liberty', '2022-02-22 09:25:15', NULL, 2, NULL),
(100, 12, 'Windstar', '2022-02-22 09:25:39', NULL, 2, NULL),
(101, 12, 'Windstar', '2022-02-22 09:25:39', NULL, 2, NULL),
(102, 12, 'Explorer', '2022-02-22 09:26:26', NULL, 2, NULL),
(103, 12, 'Grand Marquis', '2022-02-22 09:27:05', NULL, 2, NULL),
(104, 12, 'Mondeo', '2022-02-22 09:27:24', NULL, 2, NULL),
(105, 12, 'Ghia', '2022-02-22 09:28:58', NULL, 2, NULL),
(106, 12, 'Ghia', '2022-02-22 09:28:58', NULL, 2, NULL),
(107, 12, 'Mystic', '2022-02-22 09:29:14', NULL, 2, NULL),
(108, 12, 'Ranger', '2022-02-22 09:29:28', NULL, 2, NULL),
(109, 12, 'Expedition', '2022-02-22 09:29:51', NULL, 2, NULL),
(110, 12, 'Escape', '2022-02-22 09:30:15', NULL, 2, NULL),
(111, 12, 'Courier', '2022-02-22 09:30:30', NULL, 2, NULL),
(112, 12, 'Freestar', '2022-02-22 09:30:50', NULL, 2, NULL),
(113, 12, 'Focus', '2022-02-22 09:31:08', NULL, 2, NULL),
(114, 12, 'Lobo', '2022-02-22 09:31:26', NULL, 2, NULL),
(115, 12, 'Edge', '2022-02-22 09:31:56', NULL, 2, NULL),
(116, 12, 'Lobo Pick Up', '2022-02-22 09:32:58', NULL, 2, NULL),
(117, 12, 'Mustang', '2022-02-22 09:33:21', NULL, 2, NULL),
(118, 12, 'Taurus', '2022-02-22 09:33:46', NULL, 2, NULL),
(119, 12, 'Escort', '2022-02-22 09:34:17', NULL, 2, NULL),
(120, 12, 'F 150', '2022-02-22 09:34:32', NULL, 2, NULL),
(121, 12, 'Sable', '2022-02-22 09:34:51', NULL, 2, NULL),
(122, 12, 'Sable', '2022-02-22 09:34:51', NULL, 2, NULL),
(123, 12, 'Fiesta', '2022-02-22 09:35:13', NULL, 2, NULL),
(124, 12, 'Mercury', '2022-02-22 09:35:35', NULL, 2, NULL),
(125, 12, 'Linea B800', '2022-02-22 09:35:56', NULL, 2, NULL),
(126, 12, 'Fusion', '2022-02-22 09:37:06', NULL, 2, NULL),
(127, 12, 'F 250', '2022-02-22 09:37:21', NULL, 2, NULL),
(128, 12, 'Excursion', '2022-02-22 09:37:39', NULL, 2, NULL),
(129, 12, 'F 450', '2022-02-22 09:37:52', NULL, 2, NULL),
(130, 12, 'Sport track', '2022-02-22 09:38:18', NULL, 2, NULL),
(131, 12, 'Econoline', '2022-02-22 09:38:34', NULL, 2, NULL),
(132, 12, 'F 350', '2022-02-22 09:38:50', NULL, 2, NULL),
(133, 12, 'AOD', '2022-02-22 09:39:07', NULL, 2, NULL),
(134, 12, 'Lobo Limite', '2022-02-22 09:39:31', NULL, 2, NULL),
(135, 10, 'Pacifica', '2022-02-22 09:40:12', NULL, 2, NULL),
(137, 39, 'Legacy', '2022-02-22 10:15:07', NULL, 2, NULL),
(138, 11, 'Panda', '2022-02-22 10:15:33', NULL, 2, NULL),
(139, 24, 'Forte', '2022-02-22 10:17:13', NULL, 2, NULL),
(140, 35, 'Cayenne', '2022-02-22 10:29:56', NULL, 2, NULL),
(141, 5, 'Enclave', '2022-02-22 14:11:56', NULL, 2, NULL),
(142, 25, 'LR3', '2022-02-22 14:12:21', NULL, 2, NULL),
(143, 25, 'Freelander', '2022-02-22 14:14:16', NULL, 2, NULL),
(144, 22, 'S-type', '2022-02-22 14:15:01', NULL, 2, NULL),
(146, 25, 'Evoque', '2022-02-22 14:23:35', NULL, 2, NULL),
(147, 25, 'LR2', '2022-02-22 14:28:49', NULL, 2, NULL),
(148, 25, 'LR2', '2022-02-22 14:28:49', NULL, 2, NULL),
(149, 25, 'Range Lover', '2022-02-22 14:29:15', NULL, 2, NULL),
(150, 25, 'Range Lover', '2022-02-22 14:29:15', NULL, 2, NULL),
(151, 25, 'Discovery', '2022-02-22 14:29:37', NULL, 2, NULL),
(152, 38, 'León', '2022-02-22 14:30:34', NULL, 2, NULL),
(153, 38, 'Ibiza', '2022-02-22 14:38:22', NULL, 2, NULL),
(156, 38, 'Toledo', '2022-02-22 14:48:13', NULL, 2, NULL),
(157, 38, 'Alhambra', '2022-02-22 14:54:41', NULL, 2, NULL),
(158, 38, 'Altea', '2022-02-22 14:55:05', NULL, 2, NULL),
(159, 1, 'MDX', '2022-02-22 14:55:32', '2022-02-25 11:13:01', 2, 2),
(161, 1, 'TL', '2022-02-22 14:55:53', NULL, 2, NULL),
(162, 33, '206', '2022-02-22 14:56:16', NULL, 2, NULL),
(163, 33, '301', '2022-02-22 14:56:39', NULL, 2, NULL),
(164, 33, '307cc', '2022-02-22 14:56:56', NULL, 2, NULL),
(165, 33, 'Parnet', '2022-02-22 14:57:21', NULL, 2, NULL),
(166, 33, 'Parnet', '2022-02-22 14:57:21', NULL, 2, NULL),
(167, 33, '300c', '2022-02-22 14:57:37', NULL, 2, NULL),
(168, 33, '607', '2022-02-22 14:57:53', NULL, 2, NULL),
(170, 33, 'Pinifarina', '2022-02-22 14:58:21', NULL, 2, NULL),
(171, 33, '207', '2022-02-22 14:58:41', NULL, 2, NULL),
(172, 36, '2500', '2022-02-22 14:59:02', NULL, 2, NULL),
(174, 36, 'Pick Up 2500', '2022-02-22 14:59:26', NULL, 2, NULL),
(175, 36, 'Van 1500', '2022-02-22 15:24:46', NULL, 2, NULL),
(176, 36, '3500', '2022-02-22 15:25:17', NULL, 2, NULL),
(177, 30, 'Chili', '2022-02-22 15:25:53', NULL, 2, NULL),
(178, 19, 'JX35', '2022-02-22 15:26:19', NULL, 2, NULL),
(179, 19, 'i30', '2022-02-22 15:26:49', NULL, 2, NULL),
(180, 19, 'Q45', '2022-02-22 15:27:08', NULL, 2, NULL),
(181, 31, 'Lancer', '2022-02-22 15:27:35', NULL, 2, NULL),
(182, 31, 'Galant', '2022-02-22 15:27:54', NULL, 2, NULL),
(183, 31, 'Outlander', '2022-02-22 15:28:14', NULL, 2, NULL),
(184, 31, 'Montero Limited', '2022-02-22 15:28:33', NULL, 2, NULL),
(185, 31, 'Montero', '2022-02-22 15:28:53', NULL, 2, NULL),
(186, 31, 'Eclipse', '2022-02-22 15:29:11', NULL, 2, NULL),
(187, 31, 'Asx', '2022-02-22 15:29:36', NULL, 2, NULL),
(188, 31, 'Ask', '2022-02-22 15:29:53', NULL, 2, NULL),
(189, 31, 'Lancer GTS', '2022-02-22 15:30:10', NULL, 2, NULL),
(190, 31, 'Mirage', '2022-02-22 15:30:29', NULL, 2, NULL),
(191, 31, 'Endeavor', '2022-02-22 15:30:51', NULL, 2, NULL),
(192, 21, 'Axiom', '2022-02-22 15:31:23', NULL, 2, NULL),
(193, 21, 'Rodeo', '2022-02-22 15:31:43', NULL, 2, NULL),
(194, 21, 'Trooper', '2022-02-22 15:32:03', NULL, 2, NULL),
(195, 6, 'Cts', '2022-02-22 15:33:20', NULL, 2, NULL),
(196, 6, 'Escalade', '2022-02-22 15:33:36', NULL, 2, NULL),
(197, 6, 'SRX', '2022-02-22 15:33:52', NULL, 2, NULL),
(198, 6, 'Deville', '2022-02-22 15:34:08', NULL, 2, NULL),
(199, 13, 'Saturno', '2022-02-22 15:34:28', NULL, 2, NULL),
(200, 34, 'Grand Prix', '2022-02-22 15:34:50', NULL, 2, NULL),
(201, 34, 'G3', '2022-02-22 15:35:08', NULL, 2, NULL),
(202, 34, 'Azteca', '2022-02-22 15:35:28', NULL, 2, NULL),
(203, 34, 'G6', '2022-02-22 15:36:01', NULL, 2, NULL),
(204, 34, 'Trans Sport', '2022-02-22 15:36:24', NULL, 2, NULL),
(205, 34, 'Sunfire', '2022-02-22 15:36:42', NULL, 2, NULL),
(206, 34, 'Montana', '2022-02-22 15:37:03', NULL, 2, NULL),
(207, 34, 'Grand Am', '2022-02-22 15:37:26', NULL, 2, NULL),
(208, 34, 'Solstice', '2022-02-22 15:38:23', NULL, 2, NULL),
(209, 26, 'Ls', '2022-02-22 15:38:47', NULL, 2, NULL),
(210, 26, 'Zephyr', '2022-02-22 15:39:12', NULL, 2, NULL),
(211, 26, 'Mark', '2022-02-22 15:39:32', NULL, 2, NULL),
(212, 26, 'Mark LT', '2022-02-22 15:39:46', NULL, 2, NULL),
(213, 26, 'Navigator', '2022-02-22 15:40:08', NULL, 2, NULL),
(215, 26, 'MKS', '2022-02-22 15:40:45', NULL, 2, NULL),
(216, 26, 'Aviator', '2022-02-22 15:41:09', NULL, 2, NULL),
(217, 26, 'MKX', '2022-02-22 15:41:38', '2022-02-25 11:15:21', 2, 2),
(218, 26, 'MKZ', '2022-02-22 15:41:56', NULL, 2, NULL),
(219, 40, 'Vitara', '2022-02-22 15:42:21', NULL, 2, NULL),
(220, 40, 'Ciaz', '2022-02-22 15:42:43', NULL, 2, NULL),
(221, 40, 'SX4', '2022-02-22 15:43:04', NULL, 2, NULL),
(222, 40, 'Swift', '2022-02-22 15:43:24', NULL, 2, NULL),
(223, 40, 'S Cross SX4', '2022-02-22 15:43:45', NULL, 2, NULL),
(224, 40, 'Kisashi', '2022-02-22 15:44:08', NULL, 2, NULL),
(225, 40, 'Forenza', '2022-02-22 15:44:30', NULL, 2, NULL),
(226, 40, 'X Cross', '2022-02-22 15:44:50', NULL, 2, NULL),
(227, 40, 'Grand Vitara', '2022-02-22 15:45:08', NULL, 2, NULL),
(228, 18, 'Tucson', '2022-02-22 15:45:26', NULL, 2, NULL),
(229, 18, 'Haccent', '2022-02-22 15:45:44', NULL, 2, NULL),
(230, 18, 'Elantra', '2022-02-22 15:46:01', NULL, 2, NULL),
(231, 18, 'Santa Fé', '2022-02-22 15:46:22', NULL, 2, NULL),
(232, 18, 'I10', '2022-02-22 15:46:41', NULL, 2, NULL),
(233, 17, 'H3', '2022-02-22 15:47:02', NULL, 2, NULL),
(235, 28, 'MI350', '2022-02-22 15:47:41', NULL, 2, NULL),
(236, 28, 'C320', '2022-02-22 15:48:01', NULL, 2, NULL),
(237, 28, '320', '2022-02-22 15:48:23', NULL, 2, NULL),
(238, 28, '320 XL', '2022-02-22 15:48:39', NULL, 2, NULL),
(239, 28, 'Sprinter', '2022-02-22 15:48:57', NULL, 2, NULL),
(240, 28, 'ML 320', '2022-02-22 15:49:12', '2022-02-25 09:44:39', 2, 2),
(241, 28, 'CLA250', '2022-02-22 15:49:30', NULL, 2, NULL),
(242, 28, 'C200', '2022-02-22 15:50:49', NULL, 2, NULL),
(243, 28, 'CLA200', '2022-02-22 15:51:09', NULL, 2, NULL),
(244, 28, 'Smart', '2022-02-22 15:51:28', NULL, 2, NULL),
(245, 28, 'C 230 Compresor', '2022-02-22 15:52:02', NULL, 2, NULL),
(246, 28, 'AMG', '2022-02-22 15:52:21', NULL, 2, NULL),
(247, 28, 'E550', '2022-02-22 15:52:40', NULL, 2, NULL),
(248, 28, 'C300', '2022-02-22 15:52:56', NULL, 2, NULL),
(249, 28, 'ML500', '2022-02-22 15:53:18', NULL, 2, NULL),
(250, 28, 'C2230 Compresor', '2022-02-22 15:53:36', NULL, 2, NULL),
(251, 28, 'GLK280', '2022-02-22 15:53:52', NULL, 2, NULL),
(252, 28, 'GI 500', '2022-02-22 15:54:12', NULL, 2, NULL),
(253, 28, 'GL 500', '2022-02-22 15:54:39', NULL, 2, NULL),
(254, 28, 'C240', '2022-02-22 15:54:58', NULL, 2, NULL),
(255, 28, 'C180', '2022-02-22 15:55:16', NULL, 2, NULL),
(256, 28, 'C280', '2022-02-22 15:55:39', NULL, 2, NULL),
(257, 28, 'B200', '2022-02-22 15:55:57', NULL, 2, NULL),
(258, 37, 'Fluence', '2022-02-22 15:56:57', NULL, 2, NULL),
(259, 37, 'Koleos', '2022-02-22 15:57:17', NULL, 2, NULL),
(260, 37, 'Logan', '2022-02-22 15:57:40', NULL, 2, NULL),
(261, 37, 'Megane', '2022-02-22 15:58:00', NULL, 2, NULL),
(262, 37, 'Duster', '2022-02-22 15:58:21', NULL, 2, NULL),
(263, 37, 'Scenic', '2022-02-22 15:58:42', NULL, 2, NULL),
(264, 37, 'Clio', '2022-02-22 15:59:01', NULL, 2, NULL),
(265, 37, 'Megane 2', '2022-02-22 15:59:18', NULL, 2, NULL),
(266, 37, 'Laguna', '2022-02-22 15:59:39', NULL, 2, NULL),
(267, 14, 'Envoy', '2022-02-22 16:03:15', NULL, 2, NULL),
(268, 14, 'Jimmy', '2022-02-22 16:03:32', NULL, 2, NULL),
(269, 14, 'Acadia', '2022-02-22 16:03:52', NULL, 2, NULL),
(270, 14, 'Sierra', '2022-02-22 16:04:48', NULL, 2, NULL),
(271, 14, 'Canyon', '2022-02-22 16:05:12', NULL, 2, NULL),
(272, 14, 'Buick Regal', '2022-02-22 16:05:28', NULL, 2, NULL),
(273, 14, 'Sonoma', '2022-02-22 16:05:44', NULL, 2, NULL),
(274, 14, '350', '2022-02-22 16:06:00', NULL, 2, NULL),
(275, 14, 'Terraint', '2022-02-22 16:06:19', NULL, 2, NULL),
(276, 14, 'Yukon Denali', '2022-02-22 16:06:35', NULL, 2, NULL),
(277, 14, 'Yukon', '2022-02-22 16:06:52', NULL, 2, NULL),
(278, 43, 'Gol I-Motion', '2022-02-22 16:07:19', NULL, 2, NULL),
(279, 43, 'Bora Sport 2.5', '2022-02-22 16:07:41', NULL, 2, NULL),
(280, 43, 'Tiguan', '2022-02-22 16:08:02', NULL, 2, NULL),
(281, 43, 'Bora Sport', '2022-02-22 16:08:26', NULL, 2, NULL),
(282, 43, 'Touareg', '2022-02-22 16:08:53', NULL, 2, NULL),
(283, 43, 'Bora DSG', '2022-02-22 16:09:34', NULL, 2, NULL),
(284, 43, 'Cabrio', '2022-02-22 16:09:50', NULL, 2, NULL),
(285, 43, 'Sharan', '2022-02-22 16:10:10', NULL, 2, NULL),
(286, 43, 'Vento', '2022-02-22 16:10:25', NULL, 2, NULL),
(287, 43, 'Atlantic', '2022-02-22 16:10:45', NULL, 2, NULL),
(288, 43, 'Derby', '2022-02-22 16:11:00', NULL, 2, NULL),
(289, 43, 'Amarok', '2022-02-22 16:11:18', NULL, 2, NULL),
(290, 43, 'Caraben', '2022-02-22 16:11:36', NULL, 2, NULL),
(291, 43, 'Passat', '2022-02-22 16:11:53', NULL, 2, NULL),
(292, 43, 'Jetta A3', '2022-02-22 16:12:17', NULL, 2, NULL),
(293, 43, 'Jetta Gli', '2022-02-22 16:12:32', NULL, 2, NULL),
(294, 43, 'Gol', '2022-02-22 16:12:54', NULL, 2, NULL),
(295, 43, 'Jetta A4', '2022-02-22 16:13:13', NULL, 2, NULL),
(296, 43, 'Routan', '2022-02-22 16:15:00', NULL, 2, NULL),
(297, 43, 'Jetta Sport', '2022-02-22 16:15:17', NULL, 2, NULL),
(298, 43, 'Golf', '2022-02-22 16:15:33', NULL, 2, NULL),
(299, 43, 'Beetle', '2022-02-22 16:16:10', NULL, 2, NULL),
(300, 43, 'Jetta', '2022-02-22 16:16:34', NULL, 2, NULL),
(301, 42, 'S60', '2022-02-22 16:16:59', NULL, 2, NULL),
(302, 42, 'XC 90', '2022-02-22 16:17:13', NULL, 2, NULL),
(303, 42, 'Serie 60', '2022-02-22 16:17:28', NULL, 2, NULL),
(304, 42, 'S-40', '2022-02-22 16:17:48', NULL, 2, NULL),
(305, 42, 'CX90', '2022-02-22 16:18:26', NULL, 2, NULL),
(306, 42, 'V60', '2022-02-22 16:18:42', NULL, 2, NULL),
(307, 42, 'C70', '2022-02-22 16:18:57', NULL, 2, NULL),
(308, 42, 'Xe60', '2022-02-22 16:19:11', NULL, 2, NULL),
(309, 42, 'Xe90', '2022-02-22 16:19:26', NULL, 2, NULL),
(310, 42, 'Xc90', '2022-02-22 16:19:46', NULL, 2, NULL),
(311, 42, 'S40', '2022-02-22 16:20:01', NULL, 2, NULL),
(312, 42, 'XC60', '2022-02-22 16:20:15', NULL, 2, NULL),
(313, 29, 'Mountaineer', '2022-02-22 16:20:52', NULL, 2, NULL),
(314, 29, 'Marquis', '2022-02-22 16:21:15', NULL, 2, NULL),
(315, 29, 'Mystique', '2022-02-22 16:21:33', NULL, 2, NULL),
(316, 29, 'Mariner', '2022-02-22 16:21:50', NULL, 2, NULL),
(317, 29, 'Villager', '2022-02-22 16:22:10', NULL, 2, NULL),
(318, 8, 'Voyager', '2022-02-22 16:22:31', NULL, 2, NULL),
(319, 8, 'Grand Voyager', '2022-02-22 16:22:52', NULL, 2, NULL),
(320, 8, 'Spirit', '2022-02-22 16:23:06', NULL, 2, NULL),
(321, 8, 'Town Country', '2022-02-22 16:23:47', NULL, 2, NULL),
(322, 8, '200', '2022-02-22 16:24:02', NULL, 2, NULL),
(323, 8, 'Cirrus', '2022-02-22 16:32:59', NULL, 2, NULL),
(324, 8, 'RAM 2500', '2022-02-22 16:33:13', NULL, 2, NULL),
(325, 8, 'PT Crusier', '2022-02-22 16:33:33', NULL, 2, NULL),
(326, 8, 'Sebring', '2022-02-22 16:33:46', NULL, 2, NULL),
(327, 8, '300', '2022-02-22 16:34:01', NULL, 2, NULL),
(328, 8, 'Lebarron', '2022-02-22 16:34:17', NULL, 2, NULL),
(329, 8, 'New yorker', '2022-02-22 16:34:31', NULL, 2, NULL),
(330, 8, 'Aspen', '2022-02-22 16:35:08', NULL, 2, NULL),
(331, 8, 'M300', '2022-02-22 16:35:26', NULL, 2, NULL),
(332, 8, 'Shadow', '2022-02-22 16:35:43', NULL, 2, NULL),
(333, 8, 'Concorde', '2022-02-22 16:35:59', NULL, 2, NULL),
(334, 8, 'New York', '2022-02-22 16:36:13', NULL, 2, NULL),
(335, 8, 'Stratus RT', '2022-02-22 16:36:29', NULL, 2, NULL),
(336, 41, 'Tacoma', '2022-02-22 16:36:59', NULL, 2, NULL),
(337, 41, 'Cambry', '2022-02-22 16:37:18', NULL, 2, NULL),
(338, 41, 'Corolla', '2022-02-22 16:37:40', NULL, 2, NULL),
(339, 41, 'Rav', '2022-02-22 16:37:57', NULL, 2, NULL),
(340, 41, 'Avanza', '2022-02-22 16:38:15', NULL, 2, NULL),
(341, 41, 'FJ', '2022-02-22 16:38:34', NULL, 2, NULL),
(342, 41, 'Tundra', '2022-02-22 16:38:54', NULL, 2, NULL),
(343, 41, '4 Runner', '2022-02-22 16:39:10', NULL, 2, NULL),
(344, 41, 'Yaris', '2022-02-22 16:39:26', NULL, 2, NULL),
(345, 41, 'Camry', '2022-02-22 16:40:03', NULL, 2, NULL),
(346, 41, 'T-100', '2022-02-22 16:40:16', NULL, 2, NULL),
(347, 41, 'Rav 4', '2022-02-22 16:40:34', NULL, 2, NULL),
(348, 41, 'Secoya', '2022-02-22 16:40:52', NULL, 2, NULL),
(349, 41, 'Hightlander', '2022-02-22 16:41:13', NULL, 2, NULL),
(350, 41, 'Hilux', '2022-02-22 16:41:45', NULL, 2, NULL),
(351, 41, 'Cruiser', '2022-02-22 16:42:03', NULL, 2, NULL),
(352, 41, 'Sequoia', '2022-02-22 16:42:19', NULL, 2, NULL),
(353, 41, 'Sienna', '2022-02-22 16:42:40', '2022-02-25 09:40:28', 2, 2),
(355, 32, 'Kicks', '2022-02-22 16:44:31', NULL, 2, NULL),
(356, 32, 'Máxima', '2022-02-22 16:44:43', NULL, 2, NULL),
(357, 32, 'Juke', '2022-02-22 16:45:03', NULL, 2, NULL),
(358, 32, 'D21', '2022-02-22 16:45:21', NULL, 2, NULL),
(359, 32, 'Almera', '2022-02-22 16:45:39', NULL, 2, NULL),
(360, 32, 'Armada', '2022-02-22 16:45:52', NULL, 2, NULL),
(361, 32, 'Np300', '2022-02-22 16:46:05', NULL, 2, NULL),
(362, 32, 'Tsuru', '2022-02-22 16:46:18', NULL, 2, NULL),
(363, 32, 'Stanza', '2022-02-22 16:46:30', NULL, 2, NULL),
(364, 32, 'Quest', '2022-02-22 16:46:43', NULL, 2, NULL),
(365, 32, 'March', '2022-02-22 16:47:03', NULL, 2, NULL),
(366, 32, 'Sentra SR', '2022-02-22 16:47:24', NULL, 2, NULL),
(367, 32, 'Note', '2022-02-22 16:47:36', NULL, 2, NULL),
(368, 32, 'Frontier', '2022-02-22 16:47:52', NULL, 2, NULL),
(369, 32, 'Xterra', '2022-02-22 16:48:20', NULL, 2, NULL),
(370, 32, 'Versa', '2022-02-22 16:48:32', NULL, 2, NULL),
(371, 32, 'Platina', '2022-02-22 16:48:57', NULL, 2, NULL),
(372, 32, 'Tida', '2022-02-22 16:49:10', NULL, 2, NULL),
(373, 32, 'Titan', '2022-02-22 16:49:23', NULL, 2, NULL),
(374, 32, 'Murano', '2022-02-22 16:49:39', NULL, 2, NULL),
(375, 32, 'Aprio', '2022-02-22 16:49:55', NULL, 2, NULL),
(376, 32, 'Rogue', '2022-02-22 16:50:32', NULL, 2, NULL),
(377, 32, 'Xtrail', '2022-02-22 16:50:49', NULL, 2, NULL),
(378, 32, 'Altima', '2022-02-22 16:51:05', NULL, 2, NULL),
(379, 32, 'Sentra', '2022-02-22 16:51:26', NULL, 2, NULL),
(380, 32, 'Optra', '2022-02-22 16:51:47', NULL, 2, NULL),
(381, 16, 'BRV', '2022-02-22 16:52:29', NULL, 2, NULL),
(384, 16, 'HRV', '2022-02-23 09:29:21', NULL, 2, NULL),
(385, 16, 'Ridgeline', '2022-02-23 09:29:43', NULL, 2, NULL),
(386, 16, 'Passport', '2022-02-23 09:30:01', NULL, 2, NULL),
(387, 16, 'City', '2022-02-23 09:30:17', NULL, 2, NULL),
(388, 16, 'Acura', '2022-02-23 09:30:37', NULL, 2, NULL),
(390, 16, 'Fit', '2022-02-23 09:31:53', NULL, 2, NULL),
(391, 16, 'Red Line', '2022-02-23 09:32:08', NULL, 2, NULL),
(392, 16, 'Pilot', '2022-02-23 09:32:25', NULL, 2, NULL),
(393, 16, 'Odyssey', '2022-02-23 09:32:52', NULL, 2, NULL),
(394, 16, 'CRV', '2022-02-23 09:33:08', NULL, 2, NULL),
(395, 16, 'Element', '2022-02-23 09:33:36', NULL, 2, NULL),
(396, 16, 'Accord', '2022-02-23 09:34:01', NULL, 2, NULL),
(397, 16, 'Civic', '2022-02-23 09:34:23', NULL, 2, NULL),
(398, 27, 'Tribute', '2022-02-23 09:35:28', NULL, 2, NULL),
(399, 27, 'Mazda ', '2022-02-23 09:35:44', NULL, 2, NULL),
(400, 27, 'Mazda 6', '2022-02-23 09:35:56', NULL, 2, NULL),
(401, 27, '3', '2022-02-23 09:36:14', NULL, 2, NULL),
(402, 27, 'CX7', '2022-02-23 09:36:36', NULL, 2, NULL),
(403, 27, 'CX9', '2022-02-23 09:36:55', NULL, 2, NULL),
(404, 27, '5', '2022-02-23 09:37:29', NULL, 2, NULL),
(405, 27, '6', '2022-02-23 09:37:41', NULL, 2, NULL),
(406, 27, 'X9', '2022-02-23 09:37:52', NULL, 2, NULL),
(407, 27, 'Mx5miata', '2022-02-23 09:38:44', NULL, 2, NULL),
(408, 27, 'B2500', '2022-02-23 09:39:01', NULL, 2, NULL),
(409, 27, 'C5', '2022-02-23 09:39:21', NULL, 2, NULL),
(410, 27, 'CX5', '2022-02-23 09:39:42', NULL, 2, NULL),
(411, 27, '2300', '2022-02-23 10:01:45', NULL, 2, NULL),
(412, 27, '7', '2022-02-23 10:02:04', NULL, 2, NULL),
(413, 10, 'Dart', '2022-02-23 10:02:20', NULL, 2, NULL),
(414, 10, 'Avenger', '2022-02-23 10:02:37', NULL, 2, NULL),
(415, 10, 'Charger', '2022-02-23 10:02:52', NULL, 2, NULL),
(416, 10, 'Raider', '2022-02-23 10:03:08', NULL, 2, NULL),
(418, 10, 'Ram Promaster', '2022-02-23 10:14:58', NULL, 2, NULL),
(419, 10, 'Nitro', '2022-02-23 10:15:12', NULL, 2, NULL),
(420, 10, 'Ram 1500', '2022-02-23 10:15:25', NULL, 2, NULL),
(421, 10, 'Verna', '2022-02-23 10:15:39', NULL, 2, NULL),
(422, 10, 'Caliber', '2022-02-23 10:15:52', NULL, 2, NULL),
(423, 10, 'Durango', '2022-02-23 10:17:19', NULL, 2, NULL),
(424, 10, 'Stratus', '2022-02-23 10:17:34', NULL, 2, NULL),
(425, 10, 'Ram Charger', '2022-02-23 10:17:51', NULL, 2, NULL),
(426, 10, 'Grand Caravan', '2022-02-23 10:18:16', NULL, 2, NULL),
(427, 10, 'Atitude', '2022-02-23 10:18:29', NULL, 2, NULL),
(428, 10, 'Caravan', '2022-02-23 10:18:43', NULL, 2, NULL),
(429, 10, 'Dakota', '2022-02-23 10:18:57', NULL, 2, NULL),
(430, 10, 'Neon', '2022-02-23 10:19:12', NULL, 2, NULL),
(431, 10, 'Journey', '2022-02-23 10:22:33', NULL, 2, NULL),
(432, 10, 'RAM', '2022-02-23 10:22:49', NULL, 2, NULL),
(433, 10, 'Pick Up', '2022-02-23 10:23:04', NULL, 2, NULL),
(434, 20, 'CF600', '2022-02-23 10:23:23', NULL, 2, NULL),
(435, 20, 'Torque Shift', '2022-02-23 10:23:53', NULL, 2, NULL),
(436, 20, 'Allison 4700', '2022-02-23 10:24:18', NULL, 2, NULL),
(437, 20, 'Allison ', '2022-02-23 10:24:34', NULL, 2, NULL),
(438, 12, 'E450', '2022-02-23 10:24:55', NULL, 2, NULL),
(439, 12, 'Focus ZX4', '2022-02-23 10:25:10', NULL, 2, NULL),
(440, 12, 'Transit', '2022-02-23 10:25:23', NULL, 2, NULL),
(441, 12, 'Guayin', '2022-02-23 10:25:39', NULL, 2, NULL),
(442, 12, 'Escort Guayin', '2022-02-23 10:25:54', NULL, 2, NULL),
(443, 12, 'Topaz', '2022-02-23 10:26:08', NULL, 2, NULL),
(444, 12, 'Explorer Sport', '2022-02-23 10:26:30', NULL, 2, NULL),
(445, 12, 'Thunderbird', '2022-02-23 10:26:44', NULL, 2, NULL),
(446, 12, 'Minivan', '2022-02-23 10:27:26', NULL, 2, NULL),
(447, 12, 'Mustang Coupe', '2022-02-23 10:27:40', NULL, 2, NULL),
(448, 12, 'Mustang Gt', '2022-02-23 10:27:56', NULL, 2, NULL),
(449, 12, 'Van Econoline', '2022-02-23 10:28:09', NULL, 2, NULL),
(450, 12, 'Focus XL', '2022-02-23 10:28:22', NULL, 2, NULL),
(451, 12, 'Lobo Harley', '2022-02-23 10:28:35', NULL, 2, NULL),
(452, 12, 'Econoline 250', '2022-02-23 10:28:51', NULL, 2, NULL),
(453, 12, 'Super Duty', '2022-02-23 10:36:18', NULL, 2, NULL),
(454, 12, 'Topaz Guia', '2022-02-23 10:36:34', NULL, 2, NULL),
(455, 12, 'Clud Wagon', '2022-02-23 10:36:48', NULL, 2, NULL),
(456, 12, 'Figo', '2022-02-23 10:37:03', NULL, 2, NULL),
(457, 12, 'Five Hundred', '2022-02-23 10:37:15', NULL, 2, NULL),
(458, 12, 'Bronco', '2022-02-23 10:37:32', NULL, 2, NULL),
(459, 12, 'F 550', '2022-02-23 10:37:45', NULL, 2, NULL),
(460, 12, 'Ecosport', '2022-02-23 10:37:59', NULL, 2, NULL),
(461, 12, 'Aerostar', '2022-02-23 10:38:13', NULL, 2, NULL),
(462, 26, 'Town Car', '2022-02-25 11:09:42', NULL, 2, NULL);


CREATE TABLE `modulos` (
  `id_modulo` int(11) NOT NULL,
  `modulo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `boton` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `permiso` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_captC` int(11) NOT NULL,
  `id_captM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;


INSERT INTO `modulos` (`id_modulo`, `modulo`, `boton`, `permiso`, `fecha_creacion`, `fecha_mod`, `id_captC`, `id_captM`) VALUES
(1, '1.0 Catálogos', '1.1 Usuarios', '1.1.1 Editar Usuarios', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(2, '1.0 Catálogos', '1.1 Usuarios', '1.1.2 Asignar Contraseña', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(3, '1.0 Catálogos', '1.1 Usuarios', '1.1.3 Eliminar Usuario', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(4, '1.0 Catálogos', '1.1 Usuarios', '1.1.4 Asignar Permisos', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(5, '1.0 Catálogos', '1.1 Usuarios', '1.1.5 Nuevo Usuario', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(6, '1.0 Catálogos', '1.2 Marcas', '1.2.1 Registro de marcas', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(7, '1.0 Catálogos', '1.2 Marcas', '1.2.2 Modificar Marca', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(8, '1.0 Catálogos', '1.2 Marcas', '1.2.3 Eliminar Marca', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(9, '1.0 Catálogos', '1.3 Modelos', '1.3.1 Registro de Modelo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(10, '1.0 Catálogos', '1.3 Modelos', '1.3.2 Modificar Modelo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(11, '1.0 Catálogos', '1.3 Modelos', '1.3.3 Eliminar Modelo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(12, '1.0 Catálogos', '1.4 Años', '1.4.1 Registro de A?os', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(13, '1.0 Catálogos', '1.4 Años', '1.4.2 Modificar Años', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(14, '1.0 Catálogos', '1.4 Años', '1.4.3 Eliminar Años', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(15, '1.0 Catálogos', '1.5 Permisos', '1.5.1 Registro de Permiso', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(16, '1.0 Catálogos', '1.5 Permisos', '1.5.2 Modificar Permiso', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(17, '1.0 Catálogos', '1.5 Permisos', '1.5.3 Eliminar Permiso', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(18, '2.0 Proyecto', '2.1 Registro Vehículo', '2.1.1 Registro de Vehículo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(19, '2.0 Proyecto', '2.1 Registro Vehículo', '2.1.2 Modificar Vehículo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(20, '2.0 Proyecto', '2.1 Registro Vehículo', '2.1.3 Eliminar Vehículo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(21, '2.0 Proyecto', '2.2 Registro Cliente', '2.2.1 Registro de Cliente', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(22, '2.0 Proyecto', '2.2 Registro Cliente', '2.2.2 Modificar Cliente', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(23, '2.0 Proyecto', '2.2 Registro Cliente', '2.2.3 Eliminar Cliente', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(24, '2.0 Proyecto', '2.3 Registro Proyecto', '2.3.1 Registro de Proyecto', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(25, '2.0 Proyecto', '2.3 Registro Proyecto', '2.3.2 Lista de Proyectos', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(26, '2.0 Proyecto', '2.3 Registro Proyecto', '2.3.3 Modificar Proyectos', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(27, '2.0 Proyecto', '2.3 Registro Proyecto', '2.3.4 Eliminar Proyectos', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(28, '2.0 Proyecto', '2.3 Registro Proyecto', '2.3.5 Descarga PDF Proyectos', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0);

CREATE TABLE `nproyectos` (
  `id_nProyecto` int(15) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;


INSERT INTO `nproyectos` (`id_nProyecto`, `id_proyecto`, `fecha_creacion`, `fecha_mod`, `id_capC`, `id_capM`) VALUES
(11341, 0, '2022-02-28 00:26:55', '2022-02-28 00:26:55', 1, NULL),
(11342, 0, '2022-03-01 15:28:22', NULL, 3, NULL),
(11343, 0, '2022-03-01 15:31:42', NULL, 3, NULL),
(11344, 1, '2022-03-01 15:40:31', NULL, 3, NULL),
(11345, 2, '2022-03-01 17:54:45', NULL, 3, NULL);


CREATE TABLE `permisos` (
  `id_permiso` int(11) NOT NULL,
  `verTablaUsuario` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `editarUsu` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `asignarCon` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `eliminarUsu` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `asignarPer` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `nuevoUsu` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `verTablaMarca` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `regMarca` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `modMarca` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `eliminaMar` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `verTablaModelo` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `regModelo` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `modModelo` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `eliminarMod` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `verTablaAnio` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `regAnios` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `modAnios` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `eliminarAnio` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `regColor` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `modColor` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `eliminarCol` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `verTablaColor` char(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `verTablaSemana` char(1) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `regSemana` char(1) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `eliSemana` char(1) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `verTablaAgente` char(1) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `regAgente` char(1) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `eliAgente` char(1) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `regPermiso` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `modPermiso` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `eliPermiso` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `verTablaVeh` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `regVehiculo` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `modVehiculo` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `eliVehiculo` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `verTablaCli` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `regCliente` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `modCliente` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `eliCliente` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `regProyecto` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `listProyecto` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `modProyecto` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `eliProyecto` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `pdfProyecto` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

INSERT INTO `permisos` (`id_permiso`, `verTablaUsuario`, `editarUsu`, `asignarCon`, `eliminarUsu`, `asignarPer`, `nuevoUsu`, `verTablaMarca`, `regMarca`, `modMarca`, `eliminaMar`, `verTablaModelo`, `regModelo`, `modModelo`, `eliminarMod`, `verTablaAnio`, `regAnios`, `modAnios`, `eliminarAnio`, `regColor`, `modColor`, `eliminarCol`, `verTablaColor`, `verTablaSemana`, `regSemana`, `eliSemana`, `verTablaAgente`, `regAgente`, `eliAgente`, `regPermiso`, `modPermiso`, `eliPermiso`, `verTablaVeh`, `regVehiculo`, `modVehiculo`, `eliVehiculo`, `verTablaCli`, `regCliente`, `modCliente`, `eliCliente`, `regProyecto`, `listProyecto`, `modProyecto`, `eliProyecto`, `pdfProyecto`, `id_usuario`) VALUES
(1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1),
(2, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 2),
(3, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', '0', '1', '1', '0', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '1', 3);


CREATE TABLE `proyectos` (
  `id_proyecto` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_vehiculo` int(11) NOT NULL,
  `nOrden` int(15) NOT NULL,
  `nProyecto` int(15) NOT NULL,
  `tipoReparacion` varchar(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `km` varchar(12) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `valorVenta` varchar(12) COLLATE utf8mb4_spanish_ci NOT NULL,
  `diagnostico` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripServ1` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripServ2` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

INSERT INTO `proyectos` (`id_proyecto`, `id_cliente`, `id_vehiculo`, `nOrden`, `nProyecto`, `tipoReparacion`, `km`, `valorVenta`, `diagnostico`, `descripServ1`, `descripServ2`, `fecha`, `fecha_creacion`, `fecha_mod`, `id_capC`, `id_capM`) VALUES
(1, 3, 4, 220919, 11344, 'N', '218,989 km', '1,600.00', '-', 'Afinación de la transmisión automática', '-', '2022-03-01 15:40:31', '2022-03-01 15:40:31', NULL, 3, NULL),
(2, 4, 5, 220920, 11345, 'GR', '108,811 km', '0.00', '-', 'revisar transmisión automática', '-', '2022-03-01 17:54:45', '2022-03-01 17:54:45', NULL, 3, NULL);


CREATE TABLE `semanas` (
  `id_semana` int(11) NOT NULL,
  `semana` varchar(7) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;


CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `aPaterno` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `aMaterno` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `usuario` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tel` varchar(14) COLLATE utf8mb4_spanish_ci NOT NULL,
  `pass` varchar(32) COLLATE utf8mb4_spanish_ci DEFAULT 'SIN_PASSWORD',
  `admin` char(1) COLLATE utf8mb4_spanish_ci DEFAULT '0',
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_captC` int(11) DEFAULT 0,
  `id_captM` int(11) DEFAULT 0,
  `estatus` varchar(7) COLLATE utf8mb4_spanish_ci DEFAULT 'offline',
  `super` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;


INSERT INTO `usuarios` (`id_usuario`, `nombres`, `aPaterno`, `aMaterno`, `usuario`, `email`, `tel`, `pass`, `admin`, `fecha_creacion`, `fecha_mod`, `id_captC`, `id_captM`, `estatus`, `super`) VALUES
(1, 'Jose Uriel', 'Guerra', 'Trinidad', 'super', 'a@a.com', '2212096482', 'admin', '1', '2022-02-27 21:27:25', '2022-02-27 21:27:25', 1, 0, 'offline', 1),
(2, 'Sebastian', 'Ortiz', 'Lomeli', 'admin', 'a@a.a', '(000) 000-0000', 'admin', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 'Offline', 1),
(3, 'Fatima', 'Ocegueda', 'Ramirez', 'fatima_ocegueda', 'servicio.ortiz.trans@gmail.com', '(333) 333-3333', 'fatimaservicio87', '0', '2022-03-01 11:52:28', '2022-03-01 11:57:26', 2, 2, 'Online', 0);

CREATE TABLE `vehiculos` (
  `id_vehiculo` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `id_modelo` int(11) NOT NULL,
  `id_anio` int(11) NOT NULL,
  `placa` varchar(10) CHARACTER SET utf8 NOT NULL,
  `id_color` int(11) NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_captC` int(11) DEFAULT 0,
  `id_captM` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;


INSERT INTO `vehiculos` (`id_vehiculo`, `id_marca`, `id_modelo`, `id_anio`, `placa`, `id_color`, `fecha_creacion`, `fecha_mod`, `id_captC`, `id_captM`) VALUES
(1, 5, 141, 2, 'DSFGAGDFSG', 1, '2022-03-01 12:01:53', NULL, 2, 0),
(2, 23, 96, 31, 'JLH2061', 4, '2022-03-01 15:26:24', NULL, 3, 0),
(3, 41, 340, 49, 'JPV3589', 3, '2022-03-01 15:30:00', NULL, 3, 0),
(4, 12, 120, 28, 'GZ2627C', 1, '2022-03-01 15:33:04', NULL, 3, 0),
(5, 32, 377, 39, 'JGF5890', 1, '2022-03-01 17:49:42', NULL, 3, 0);

ALTER TABLE `agentes`
  ADD PRIMARY KEY (`id_agente`);

ALTER TABLE `anios`
  ADD PRIMARY KEY (`id_anio`);

ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

ALTER TABLE `colores`
  ADD PRIMARY KEY (`id_color`);

ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marca`);

ALTER TABLE `modelos`
  ADD PRIMARY KEY (`id_modelo`);

ALTER TABLE `modulos`
  ADD PRIMARY KEY (`id_modulo`);

ALTER TABLE `nproyectos`
  ADD PRIMARY KEY (`id_nProyecto`);

ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id_permiso`);

ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id_proyecto`);

ALTER TABLE `semanas`
  ADD PRIMARY KEY (`id_semana`);

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id_vehiculo`);

ALTER TABLE `agentes`
  MODIFY `id_agente` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `anios`
  MODIFY `id_anio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `colores`
  MODIFY `id_color` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE `marcas`
  MODIFY `id_marca` int(11)  NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

ALTER TABLE `modelos`
  MODIFY `id_modelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=463;

ALTER TABLE `modulos`
  MODIFY `id_modulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

ALTER TABLE `nproyectos`
  MODIFY `id_nProyecto` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11346;

ALTER TABLE `permisos`
  MODIFY `id_permiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `proyectos`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `semanas`
  MODIFY `id_semana` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `vehiculos`
  MODIFY `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;