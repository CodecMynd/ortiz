

CREATE TABLE `acceso` (
  `id_acceso` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha_acceso` datetime DEFAULT NULL,
  `fecha_cierre` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `acceso`
--

INSERT INTO `acceso` (`id_acceso`, `id_usuario`, `fecha_acceso`, `fecha_cierre`) VALUES
(6, 1, '2022-03-20 15:02:47', NULL),
(7, 1, '2022-03-22 02:54:03', NULL),
(8, 1, '2022-03-22 02:59:37', NULL),
(9, 1, '2022-03-22 03:24:14', NULL),
(10, 1, '2022-03-22 08:06:07', NULL),
(11, 1, '2022-03-22 08:33:41', NULL),
(12, 3, '2022-03-22 09:07:41', NULL),
(13, 9, '2022-03-22 09:20:20', NULL),
(14, 5, '2022-03-22 09:40:21', NULL),
(15, 3, '2022-03-22 10:01:53', NULL),
(16, 6, '2022-03-22 10:02:27', NULL),
(17, 4, '2022-03-22 10:14:27', NULL),
(18, 1, '2022-03-22 10:22:14', NULL),
(19, 1, '2022-03-22 10:36:30', NULL),
(20, 1, '2022-03-22 10:36:31', NULL),
(21, 5, '2022-03-22 10:52:25', NULL),
(22, 2, '2022-03-22 11:34:00', NULL),
(23, 10, '2022-03-22 11:36:57', NULL),
(24, 10, NULL, '2022-03-22 11:39:09'),
(25, 10, '2022-03-22 11:39:29', NULL),
(26, 3, '2022-03-22 12:03:37', NULL),
(27, 2, '2022-03-22 12:20:51', NULL),
(28, 10, '2022-03-22 12:30:41', NULL),
(29, 5, '2022-03-22 12:45:26', NULL),
(30, 3, '2022-03-22 13:29:35', NULL),
(31, 3, '2022-03-22 13:58:07', NULL),
(32, 4, '2022-03-22 14:04:17', NULL),
(33, 4, '2022-03-22 16:17:34', NULL),
(34, 2, '2022-03-22 16:51:19', NULL),
(35, 3, '2022-03-22 17:05:07', NULL),
(36, 5, '2022-03-22 17:28:53', NULL),
(37, 9, '2022-03-22 17:33:52', NULL),
(38, 5, '2022-03-23 08:55:18', NULL),
(39, 7, '2022-03-23 09:01:56', NULL),
(40, 6, '2022-03-23 09:17:57', NULL),
(41, 5, '2022-03-23 09:20:48', NULL),
(42, 3, '2022-03-23 09:29:02', NULL),
(43, 6, '2022-03-23 09:29:20', NULL),
(44, 9, '2022-03-23 09:31:36', NULL),
(45, 6, '2022-03-23 09:44:30', NULL),
(46, 7, '2022-03-23 09:57:01', NULL),
(47, 2, '2022-03-23 10:14:56', NULL),
(48, 7, '2022-03-23 11:02:14', NULL),
(49, 3, '2022-03-23 11:06:00', NULL),
(50, 6, '2022-03-23 11:24:21', NULL),
(51, 2, '2022-03-23 11:59:57', NULL),
(52, 6, '2022-03-23 12:09:38', NULL),
(53, 5, '2022-03-23 12:17:42', NULL),
(54, 6, '2022-03-23 12:18:51', NULL),
(55, 8, '2022-03-23 12:20:17', NULL),
(56, 7, '2022-03-23 12:47:01', NULL),
(57, 2, '2022-03-23 12:49:13', NULL),
(58, 10, '2022-03-23 12:53:29', NULL),
(59, 8, '2022-03-23 13:03:05', NULL),
(60, 2, '2022-03-23 13:22:25', NULL),
(61, 5, '2022-03-23 13:29:18', NULL),
(62, 7, '2022-03-23 13:46:03', NULL),
(63, 8, '2022-03-23 13:56:24', NULL),
(64, 11, '2022-03-23 14:00:37', NULL),
(65, 11, NULL, '2022-03-23 14:01:53'),
(66, 11, '2022-03-23 14:02:08', NULL),
(67, 2, '2022-03-23 14:59:19', NULL),
(68, 1, '2022-03-23 15:03:23', NULL),
(69, 7, '2022-03-23 15:10:08', NULL),
(70, 3, '2022-03-23 15:28:42', NULL),
(71, 6, '2022-03-23 15:41:34', NULL),
(72, 10, '2022-03-23 15:42:26', NULL),
(73, 4, '2022-03-23 15:51:16', NULL),
(74, 5, '2022-03-23 15:53:03', NULL),
(75, 7, '2022-03-23 16:12:23', NULL),
(76, 11, '2022-03-23 16:22:07', NULL),
(77, 4, NULL, '2022-03-23 16:28:31'),
(78, 4, '2022-03-23 16:32:16', NULL),
(79, 3, '2022-03-23 16:55:25', NULL),
(80, 7, '2022-03-23 17:12:49', NULL),
(81, 10, '2022-03-23 17:20:42', NULL),
(82, 3, '2022-03-23 17:34:28', NULL),
(83, 11, '2022-03-23 18:09:26', NULL),
(84, 11, NULL, '2022-03-23 18:13:51'),
(85, 3, '2022-03-23 18:15:29', NULL),
(86, 3, '2022-03-24 08:44:02', NULL),
(87, 7, '2022-03-24 08:56:11', NULL),
(88, 8, '2022-03-24 09:02:33', NULL),
(89, 6, '2022-03-24 09:19:51', NULL),
(90, 9, '2022-03-24 09:49:14', NULL),
(91, 2, '2022-03-24 10:04:54', NULL),
(92, 6, '2022-03-24 10:11:03', NULL),
(93, 5, '2022-03-24 10:16:03', NULL),
(94, 6, '2022-03-24 10:19:20', NULL),
(95, 10, '2022-03-24 10:30:34', NULL),
(96, 11, '2022-03-24 10:32:06', NULL),
(97, 2, '2022-03-24 10:38:32', NULL),
(98, 11, NULL, '2022-03-24 10:45:18'),
(99, 1, '2022-03-24 10:45:22', NULL),
(100, 3, '2022-03-24 10:59:31', NULL),
(101, 7, '2022-03-24 11:04:22', NULL),
(102, 6, '2022-03-24 11:15:47', NULL),
(103, 6, '2022-03-24 11:17:55', NULL),
(104, 6, '2022-03-24 11:20:32', NULL),
(105, 6, '2022-03-24 11:25:53', NULL),
(106, 10, '2022-03-24 11:30:09', NULL),
(107, 8, '2022-03-24 11:42:18', NULL),
(108, 10, '2022-03-24 11:59:58', NULL),
(109, 11, '2022-03-24 12:28:27', NULL),
(110, 8, '2022-03-24 12:31:30', NULL),
(111, 3, '2022-03-24 13:08:23', NULL),
(112, 6, '2022-03-24 13:21:41', NULL),
(113, 6, '2022-03-24 13:24:21', NULL),
(114, 7, '2022-03-24 13:33:31', NULL),
(115, 10, '2022-03-24 13:43:10', NULL),
(116, 3, '2022-03-24 14:59:10', NULL),
(117, 11, '2022-03-24 15:06:13', NULL),
(118, 10, '2022-03-24 15:09:22', NULL),
(119, 8, '2022-03-24 15:10:44', NULL),
(120, 2, '2022-03-24 15:23:55', NULL),
(121, 6, '2022-03-24 15:24:44', NULL),
(122, 5, '2022-03-24 15:39:39', NULL),
(123, 3, '2022-03-24 15:52:57', NULL),
(124, 10, '2022-03-24 16:07:26', NULL),
(125, 11, '2022-03-24 16:10:34', NULL),
(126, 2, '2022-03-24 16:11:49', NULL),
(127, 6, '2022-03-24 16:12:14', NULL),
(128, 3, '2022-03-24 16:33:15', NULL),
(129, 7, '2022-03-24 16:34:13', NULL),
(130, 10, '2022-03-24 16:43:01', NULL),
(131, 2, '2022-03-24 16:45:28', NULL),
(132, 8, '2022-03-24 16:49:51', NULL),
(133, 5, '2022-03-24 16:52:28', NULL),
(134, 7, '2022-03-24 17:10:47', NULL),
(135, 2, '2022-03-24 17:25:39', NULL),
(136, 10, '2022-03-24 17:42:33', NULL),
(137, 6, '2022-03-24 17:43:07', NULL),
(138, 7, '2022-03-24 17:55:03', NULL),
(139, 2, '2022-03-24 18:07:29', NULL),
(140, 2, '2022-03-24 18:07:30', NULL),
(141, 11, NULL, '2022-03-24 18:28:53'),
(142, 1, '2022-03-25 01:19:19', NULL),
(143, 10, '2022-03-25 08:30:20', NULL),
(144, 3, '2022-03-25 08:34:14', NULL),
(145, 1, '2022-03-25 08:34:18', NULL),
(146, 8, '2022-03-25 08:34:21', NULL),
(147, 3, '2022-03-25 08:36:57', NULL),
(148, 6, '2022-03-25 08:41:43', NULL),
(149, 3, '2022-03-25 08:47:01', NULL),
(150, 6, '2022-03-25 09:06:19', NULL),
(151, 1, '2022-03-25 09:13:03', NULL),
(152, 10, '2022-03-25 09:29:27', NULL),
(153, 8, '2022-03-25 09:32:31', NULL),
(154, 6, '2022-03-25 09:41:17', NULL),
(155, 7, '2022-03-25 09:42:24', NULL),
(156, 3, '2022-03-25 09:55:37', NULL),
(157, 2, '2022-03-25 10:02:34', NULL),
(158, 6, '2022-03-25 10:27:10', NULL),
(159, 1, '2022-03-25 10:27:59', NULL),
(160, 10, '2022-03-25 10:34:12', NULL),
(161, 5, '2022-03-25 10:40:08', NULL),
(162, 2, '2022-03-25 11:08:12', NULL),
(163, 8, '2022-03-25 11:24:21', NULL),
(164, 10, '2022-03-25 11:31:30', NULL),
(165, 3, '2022-03-25 11:34:26', NULL),
(166, 1, '2022-03-25 11:45:34', NULL),
(167, 2, '2022-03-25 12:03:47', NULL),
(168, 7, '2022-03-25 12:14:43', NULL),
(169, 10, '2022-03-25 12:17:42', NULL),
(170, 9, '2022-03-25 12:19:33', NULL),
(171, 5, '2022-03-25 12:48:14', NULL),
(172, 1, '2022-03-25 12:50:15', NULL),
(173, 2, '2022-03-25 13:15:15', NULL),
(174, 5, '2022-03-25 13:16:55', NULL),
(175, 4, '2022-03-25 13:20:54', NULL),
(176, 9, '2022-03-25 13:23:47', NULL),
(177, 8, '2022-03-25 13:36:35', NULL),
(178, 11, '2022-03-25 13:38:13', NULL),
(179, 3, '2022-03-25 14:03:34', NULL),
(180, 7, '2022-03-25 14:05:54', NULL),
(181, 6, '2022-03-25 14:13:51', NULL),
(182, 1, '2022-03-25 14:38:16', NULL),
(183, 8, '2022-03-25 14:46:03', NULL),
(184, 4, '2022-03-25 15:01:50', NULL),
(185, 3, '2022-03-25 15:03:38', NULL),
(186, 1, '2022-03-25 15:07:39', NULL),
(187, 11, '2022-03-25 15:23:02', NULL),
(188, 4, '2022-03-25 15:33:29', NULL),
(189, 1, '2022-03-25 15:39:51', NULL),
(190, 5, '2022-03-25 15:42:00', NULL),
(191, 3, '2022-03-25 15:49:38', NULL),
(192, 8, '2022-03-25 15:52:29', NULL),
(193, 7, '2022-03-25 15:55:53', NULL),
(194, 10, '2022-03-25 16:15:08', NULL),
(195, 6, '2022-03-25 16:17:03', NULL),
(196, 3, '2022-03-25 16:23:14', NULL),
(197, 7, '2022-03-25 16:31:04', NULL),
(198, 8, '2022-03-25 16:44:38', NULL),
(199, 6, '2022-03-25 16:47:32', NULL),
(200, 7, '2022-03-25 17:25:05', NULL),
(201, 6, '2022-03-25 17:28:59', NULL),
(202, 8, '2022-03-25 17:42:16', NULL),
(203, 6, '2022-03-25 17:43:54', NULL),
(204, 6, '2022-03-25 17:50:27', NULL),
(205, 4, '2022-03-25 18:09:21', NULL),
(206, 11, NULL, '2022-03-25 18:09:22'),
(207, 10, '2022-03-25 18:21:26', NULL),
(208, 6, '2022-03-26 08:22:50', NULL),
(209, 3, '2022-03-26 08:41:22', NULL),
(210, 8, '2022-03-26 08:45:28', NULL),
(211, 7, '2022-03-26 08:57:26', NULL),
(212, 5, '2022-03-26 09:05:42', NULL),
(213, 6, '2022-03-26 09:10:00', NULL),
(214, 3, '2022-03-26 09:16:29', NULL),
(215, 8, '2022-03-26 09:55:03', NULL),
(216, 6, '2022-03-26 10:01:46', NULL),
(217, 7, '2022-03-26 10:05:30', NULL),
(218, 6, '2022-03-26 10:12:07', NULL),
(219, 2, '2022-03-26 10:20:57', NULL),
(220, 1, '2022-03-26 10:38:08', NULL),
(221, 10, '2022-03-26 10:38:25', NULL),
(222, 3, '2022-03-26 10:46:19', NULL),
(223, 6, '2022-03-26 11:14:01', NULL),
(224, 2, '2022-03-26 11:22:32', NULL),
(225, 12, '2022-03-26 11:26:15', NULL),
(226, 12, '2022-03-26 11:27:50', NULL),
(227, 12, '2022-03-26 11:28:58', NULL),
(228, 8, '2022-03-26 11:35:17', NULL),
(229, 12, NULL, '2022-03-26 11:39:52'),
(230, 9, '2022-03-26 11:42:24', NULL),
(231, 7, '2022-03-26 11:49:07', NULL),
(232, 12, '2022-03-26 12:01:29', NULL),
(233, 10, '2022-03-26 12:14:26', NULL),
(234, 11, '2022-03-26 12:17:12', NULL),
(235, 3, '2022-03-26 12:20:55', NULL),
(236, 11, '2022-03-26 12:47:59', NULL),
(237, 2, '2022-03-26 12:54:14', NULL),
(238, 10, '2022-03-26 12:58:38', NULL),
(239, 3, '2022-03-26 13:12:07', NULL),
(240, 6, '2022-03-26 13:16:03', NULL),
(241, 10, '2022-03-26 13:48:05', NULL),
(242, 7, '2022-03-26 14:13:06', NULL),
(243, 6, '2022-03-26 14:16:30', NULL),
(244, 11, '2022-03-26 14:18:15', NULL),
(245, 8, '2022-03-26 14:19:34', NULL),
(246, 11, NULL, '2022-03-26 14:47:42'),
(247, 3, '2022-03-28 08:32:14', NULL),
(248, 3, '2022-03-28 08:32:25', NULL),
(249, 10, '2022-03-28 09:03:23', NULL),
(250, 3, '2022-03-28 09:03:58', NULL),
(251, 12, '2022-03-28 09:17:37', NULL),
(252, 9, '2022-03-28 09:20:23', NULL),
(253, 8, '2022-03-28 09:26:47', NULL),
(254, 7, '2022-03-28 09:45:51', NULL),
(255, 3, '2022-03-28 09:46:29', NULL),
(256, 12, '2022-03-28 09:51:13', NULL),
(257, 6, '2022-03-28 10:04:27', NULL),
(258, 5, '2022-03-28 10:07:18', NULL),
(259, 10, '2022-03-28 10:16:30', NULL),
(260, 12, '2022-03-28 10:25:01', NULL),
(261, 9, '2022-03-28 10:29:03', NULL),
(262, 8, '2022-03-28 10:32:23', NULL),
(263, 2, '2022-03-28 10:35:31', NULL),
(264, 7, '2022-03-28 11:08:04', NULL),
(265, 1, '2022-03-28 11:08:19', NULL),
(266, 3, '2022-03-28 11:10:38', NULL),
(267, 5, '2022-03-28 11:13:03', NULL),
(268, 10, '2022-03-28 11:45:22', NULL),
(269, 8, '2022-03-28 11:54:51', NULL),
(270, 3, '2022-03-28 11:56:14', NULL),
(271, 6, '2022-03-28 11:56:45', NULL),
(272, 5, '2022-03-28 12:10:58', NULL),
(273, 7, '2022-03-28 12:15:47', NULL),
(274, 2, '2022-03-28 12:27:14', NULL),
(275, 8, '2022-03-28 12:30:15', NULL),
(276, 1, '2022-03-28 12:37:38', NULL),
(277, 6, '2022-03-28 12:39:11', NULL),
(278, 5, '2022-03-28 12:54:06', NULL),
(279, 11, '2022-03-28 12:57:00', NULL),
(280, 2, '2022-03-28 12:59:26', NULL),
(281, 7, '2022-03-28 13:09:25', NULL),
(282, 10, '2022-03-28 13:10:27', NULL),
(283, 3, '2022-03-28 13:21:07', NULL),
(284, 8, '2022-03-28 13:43:36', NULL),
(285, 6, '2022-03-28 13:45:04', NULL),
(286, 10, '2022-03-28 13:57:02', NULL),
(287, 2, '2022-03-28 14:02:50', NULL),
(288, 9, '2022-03-28 14:03:17', NULL),
(289, 7, '2022-03-28 14:16:40', NULL),
(290, 3, '2022-03-28 15:03:21', NULL),
(291, 1, '2022-03-28 15:10:43', NULL),
(292, 8, '2022-03-28 15:11:40', NULL),
(293, 10, '2022-03-28 15:12:37', NULL),
(294, 11, '2022-03-28 15:23:58', NULL),
(295, 9, '2022-03-28 15:26:35', NULL),
(296, 6, '2022-03-28 15:34:25', NULL),
(297, 4, '2022-03-28 15:49:30', NULL),
(298, 11, '2022-03-28 15:55:52', NULL),
(299, 4, '2022-03-28 15:55:53', NULL),
(300, 8, '2022-03-28 15:56:11', NULL),
(301, 10, '2022-03-28 16:04:07', NULL),
(302, 7, '2022-03-28 16:18:35', NULL),
(303, 5, '2022-03-28 16:24:45', NULL),
(304, 4, NULL, '2022-03-28 16:25:10'),
(305, 4, '2022-03-28 16:25:40', NULL),
(306, 4, '2022-03-28 16:26:04', NULL),
(307, 4, NULL, '2022-03-28 16:26:42'),
(308, 2, '2022-03-28 16:27:29', NULL),
(309, 12, '2022-03-28 16:28:22', NULL),
(310, 4, '2022-03-28 16:29:23', NULL),
(311, 3, '2022-03-28 16:33:52', NULL),
(312, 1, '2022-03-28 16:51:45', NULL),
(313, 6, '2022-03-28 16:58:37', NULL),
(314, 8, '2022-03-28 17:07:05', NULL),
(315, 4, '2022-03-28 17:23:19', NULL),
(316, 1, '2022-03-28 17:30:15', NULL),
(317, 3, '2022-03-28 17:34:49', NULL),
(318, 4, '2022-03-28 17:58:12', NULL),
(319, 11, NULL, '2022-03-28 18:03:39'),
(320, 1, NULL, '2022-03-28 18:26:34'),
(321, 1, '2022-03-28 18:26:37', NULL),
(322, 1, NULL, '2022-03-28 18:34:37'),
(323, 1, '2022-03-28 18:38:57', NULL),
(324, 1, '2022-03-28 23:17:43', NULL),
(325, 10, '2022-03-29 08:24:13', NULL),
(326, 3, '2022-03-29 08:39:25', NULL),
(327, 1, '2022-03-29 08:51:49', NULL),
(328, 10, '2022-03-29 08:55:29', NULL),
(329, 10, '2022-03-29 08:59:17', NULL),
(330, 4, '2022-03-29 09:06:57', NULL),
(331, 9, '2022-03-29 09:10:54', NULL),
(332, 4, '2022-03-29 09:22:32', NULL),
(333, 3, '2022-03-29 09:23:55', NULL),
(334, 10, '2022-03-29 09:33:06', NULL),
(335, 6, '2022-03-29 09:37:08', NULL),
(336, 4, '2022-03-29 09:47:03', NULL),
(337, 9, '2022-03-29 09:58:11', NULL),
(338, 8, '2022-03-29 09:58:44', NULL),
(339, 4, '2022-03-29 10:15:50', NULL),
(340, 5, '2022-03-29 10:20:02', NULL),
(341, 8, '2022-03-29 10:34:16', NULL),
(342, 7, '2022-03-29 10:34:41', NULL),
(343, 5, '2022-03-29 10:45:51', NULL),
(344, 9, '2022-03-29 10:51:19', NULL),
(345, 4, '2022-03-29 10:52:17', NULL),
(346, 6, '2022-03-29 10:56:13', NULL),
(347, 10, '2022-03-29 11:08:57', NULL),
(348, 6, '2022-03-29 11:12:16', NULL),
(349, 2, '2022-03-29 11:21:21', NULL),
(350, 9, '2022-03-29 11:37:47', NULL),
(351, 7, '2022-03-29 11:39:16', NULL),
(352, 8, '2022-03-29 11:42:33', NULL),
(353, 5, '2022-03-29 11:43:17', NULL),
(354, 3, '2022-03-29 11:55:20', NULL),
(355, 10, '2022-03-29 11:58:45', NULL),
(356, 6, '2022-03-29 12:03:46', NULL),
(357, 10, '2022-03-29 12:24:50', NULL),
(358, 4, NULL, '2022-03-29 12:30:51'),
(359, 2, '2022-03-29 12:31:54', NULL),
(360, 6, '2022-03-29 12:41:26', NULL),
(361, 9, '2022-03-29 12:41:33', NULL),
(362, 5, '2022-03-29 13:05:04', NULL),
(363, 6, '2022-03-29 13:11:33', NULL),
(364, 6, '2022-03-29 13:32:50', NULL),
(365, 11, '2022-03-29 13:32:51', NULL),
(366, 4, '2022-03-29 13:42:09', NULL),
(367, 9, '2022-03-29 13:44:19', NULL),
(368, 3, '2022-03-29 14:06:33', NULL),
(369, 5, '2022-03-29 14:11:43', NULL),
(370, 2, '2022-03-29 14:28:29', NULL),
(371, 10, '2022-03-29 14:45:44', NULL),
(372, 3, '2022-03-29 15:04:17', NULL),
(373, 8, '2022-03-29 15:04:22', NULL),
(374, 9, '2022-03-29 15:18:26', NULL),
(375, 4, '2022-03-29 15:18:33', NULL),
(376, 11, '2022-03-29 15:20:04', NULL),
(377, 10, '2022-03-29 15:26:04', NULL),
(378, 7, '2022-03-29 16:14:36', NULL),
(379, 2, '2022-03-29 16:19:58', NULL),
(380, 3, '2022-03-29 16:24:31', NULL),
(381, 1, '2022-03-29 16:25:09', NULL),
(382, 10, '2022-03-29 16:39:21', NULL),
(383, 9, '2022-03-29 16:51:13', NULL),
(384, 11, '2022-03-29 16:51:31', NULL),
(385, 10, '2022-03-29 16:54:16', NULL),
(386, 1, '2022-03-29 16:54:23', NULL),
(387, 2, '2022-03-29 17:14:03', NULL),
(388, 4, '2022-03-29 17:15:13', NULL),
(389, 9, '2022-03-29 17:18:57', NULL),
(390, 10, '2022-03-29 17:25:07', NULL),
(391, 3, '2022-03-29 17:36:43', NULL),
(392, 11, '2022-03-29 17:40:13', NULL),
(393, 9, '2022-03-29 17:53:01', NULL),
(394, 6, '2022-03-29 17:57:41', NULL),
(395, 10, '2022-03-29 18:01:29', NULL),
(396, 11, '2022-03-29 18:07:22', NULL),
(397, 4, '2022-03-29 18:17:51', NULL),
(398, 11, NULL, '2022-03-29 18:17:53'),
(399, 4, '2022-03-29 18:30:05', NULL),
(400, 10, '2022-03-29 18:34:56', NULL),
(401, 1, '2022-03-29 22:37:04', NULL),
(402, 3, '2022-03-30 08:33:08', NULL),
(403, 7, '2022-03-30 08:34:56', NULL),
(404, 10, '2022-03-30 08:37:48', NULL),
(405, 2, '2022-03-30 08:38:33', NULL),
(406, 6, '2022-03-30 09:01:28', NULL),
(407, 8, '2022-03-30 09:29:29', NULL),
(408, 10, '2022-03-30 09:30:39', NULL),
(409, 7, '2022-03-30 09:40:56', NULL),
(410, 9, '2022-03-30 09:43:43', NULL),
(411, 10, '2022-03-30 10:03:44', NULL),
(412, 6, '2022-03-30 10:04:57', NULL),
(413, 8, '2022-03-30 10:17:14', NULL),
(414, 6, '2022-03-30 10:21:52', NULL),
(415, 1, '2022-03-30 10:34:40', NULL),
(416, 10, '2022-03-30 10:49:45', NULL),
(417, 2, '2022-03-30 10:50:12', NULL),
(418, 5, '2022-03-30 11:24:01', NULL),
(419, 11, '2022-03-30 11:30:26', NULL),
(420, 9, '2022-03-30 11:32:35', NULL),
(421, 8, '2022-03-30 12:10:37', NULL),
(422, 3, '2022-03-30 12:18:22', NULL),
(423, 2, '2022-03-30 12:30:01', NULL),
(424, 4, '2022-03-30 12:33:19', NULL),
(425, 9, '2022-03-30 12:42:56', NULL),
(426, 10, '2022-03-30 12:59:17', NULL),
(427, 3, '2022-03-30 13:02:49', NULL),
(428, 2, '2022-03-30 13:10:58', NULL),
(429, 6, '2022-03-30 13:15:55', NULL),
(430, 1, '2022-03-30 13:17:55', NULL),
(431, 7, '2022-03-30 13:25:19', NULL),
(432, 8, '2022-03-30 13:27:00', NULL),
(433, 11, NULL, '2022-03-30 14:03:28'),
(434, 7, '2022-03-30 14:12:50', NULL),
(435, 1, '2022-03-30 14:27:23', NULL),
(436, 1, '2022-03-30 14:27:58', NULL),
(437, 6, '2022-03-30 14:36:54', NULL),
(438, 10, '2022-03-30 15:05:31', NULL),
(439, 6, '2022-03-30 15:06:11', NULL),
(440, 3, '2022-03-30 15:06:49', NULL),
(441, 11, '2022-03-30 15:11:04', NULL),
(442, 11, NULL, '2022-03-30 15:27:08'),
(443, 11, '2022-03-30 15:27:48', NULL),
(444, 9, '2022-03-30 15:40:59', NULL),
(445, 10, '2022-03-30 15:57:50', NULL),
(446, 9, '2022-03-30 16:18:49', NULL),
(447, 11, '2022-03-30 16:19:08', NULL),
(448, 10, '2022-03-30 16:29:03', NULL),
(449, 4, '2022-03-30 16:38:55', NULL),
(450, 7, '2022-03-30 16:39:06', NULL),
(451, 3, '2022-03-30 16:41:12', NULL),
(452, 1, '2022-03-30 16:45:22', NULL),
(453, 9, '2022-03-30 17:01:25', NULL),
(454, 8, '2022-03-30 17:11:30', NULL),
(455, 11, '2022-03-30 17:33:22', NULL),
(456, 3, '2022-03-30 17:38:16', NULL),
(457, 4, '2022-03-30 17:43:00', NULL),
(458, 6, '2022-03-30 17:58:47', NULL),
(459, 6, '2022-03-30 18:06:51', NULL),
(460, 4, '2022-03-30 18:22:40', NULL),
(461, 4, '2022-03-30 19:57:26', NULL),
(462, 4, '2022-03-30 20:00:36', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agentes`
--

CREATE TABLE `agentes` (
  `id_agente` int(11) NOT NULL,
  `agente` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agentesgr`
--

CREATE TABLE `agentesgr` (
  `id_agentegr` int(11) NOT NULL,
  `id_agente` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agentesn`
--

CREATE TABLE `agentesn` (
  `id_agenten` int(11) NOT NULL,
  `id_agente` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anios`
--

CREATE TABLE `anios` (
  `id_anio` int(11) NOT NULL,
  `anio` varchar(4) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `anios`
--

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesores`
--

CREATE TABLE `asesores` (
  `id_asesor` int(11) NOT NULL,
  `asesor` varchar(40) NOT NULL,
  `borrado` char(1) NOT NULL DEFAULT '0',
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `fecha_borrado` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capM` int(11) DEFAULT NULL,
  `id_capB` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `id_bitacora` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `etapa` varchar(100) NOT NULL,
  `fechar_borrado` datetime DEFAULT NULL,
  `fecha_modificacion` datetime DEFAULT NULL,
  `fecha_registro` datetime DEFAULT NULL,
  `id_capB` int(11) DEFAULT 0,
  `id_capM` int(11) DEFAULT 0,
  `id_capR` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id_bitacora`, `id_proyecto`, `etapa`, `fechar_borrado`, `fecha_modificacion`, `fecha_registro`, `id_capB`, `id_capM`, `id_capR`) VALUES
(1, 41, '', NULL, '2022-03-17 08:42:55', NULL, 0, 6, 0),
(2, 236, '', NULL, '2022-03-17 08:54:27', NULL, 0, 6, 0),
(3, 246, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-17 09:38:05', 0, 0, 3),
(4, 247, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-17 10:40:00', 0, 0, 3),
(5, 248, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-17 11:22:50', 0, 0, 3),
(6, 249, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-17 11:41:39', 0, 0, 3),
(7, 48, '', NULL, '2022-03-17 11:57:33', NULL, 0, 6, 0),
(8, 250, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-17 12:08:55', 0, 0, 3),
(9, 47, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-17 12:34:29', NULL, 0, 6, 0),
(10, 197, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-17 12:51:15', NULL, 0, 3, 0),
(11, 238, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-17 13:36:30', NULL, 0, 3, 0),
(12, 47, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-17 13:40:46', NULL, 0, 3, 0),
(13, 250, 'Proyecto regresado a 2.4.1 Proyectos Activos para realizar Solicitud', NULL, '2022-03-17 13:51:11', NULL, 0, 6, 0),
(14, 251, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-17 13:52:49', 0, 0, 3),
(15, 220, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-17 14:01:10', NULL, 0, 3, 0),
(16, 48, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-17 14:21:07', NULL, 0, 3, 0),
(17, 25, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-17 15:35:16', NULL, 0, 7, 0),
(18, 185, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-17 15:41:01', NULL, 0, 7, 0),
(19, 185, 'Proyecto regresado a 2.4.1 Proyectos Activos para realizar Solicitud', NULL, '2022-03-17 15:42:35', NULL, 0, 7, 0),
(20, 185, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-17 15:42:52', NULL, 0, 7, 0),
(21, 180, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-17 15:51:41', NULL, 0, 7, 0),
(22, 25, 'Proyecto regresado a 2.4.1 Proyectos Activos para realizar Solicitud', NULL, '2022-03-17 15:55:50', NULL, 0, 7, 0),
(23, 25, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-17 15:57:21', NULL, 0, 7, 0),
(24, 252, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-17 16:33:52', 0, 0, 3),
(25, 202, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-17 16:36:06', NULL, 0, 6, 0),
(26, 253, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-17 16:40:33', 0, 0, 3),
(27, 202, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-17 16:57:35', NULL, 0, 6, 0),
(28, 185, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-17 16:58:11', NULL, 0, 6, 0),
(29, 25, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-17 17:28:06', NULL, 0, 6, 0),
(30, 42, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-17 17:39:37', NULL, 0, 7, 0),
(31, 225, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-17 17:50:51', NULL, 0, 3, 0),
(32, 180, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-17 19:44:42', NULL, 0, 6, 0),
(33, 254, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-18 09:13:08', 0, 0, 3),
(34, 255, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-18 09:24:57', 0, 0, 3),
(35, 180, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-18 09:50:21', NULL, 0, 3, 0),
(36, 256, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-18 09:54:50', 0, 0, 3),
(37, 42, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-18 10:22:17', NULL, 0, 6, 0),
(38, 42, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-18 10:28:37', NULL, 0, 3, 0),
(39, 257, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-18 10:57:28', 0, 0, 3),
(40, 250, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-18 11:20:08', NULL, 0, 7, 0),
(41, 11, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-18 11:23:41', NULL, 0, 7, 0),
(42, 15, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-18 12:37:19', NULL, 0, 3, 0),
(43, 211, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-18 12:49:59', NULL, 0, 7, 0),
(44, 255, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-18 13:07:29', NULL, 0, 7, 0),
(45, 11, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-18 13:08:46', NULL, 0, 6, 0),
(46, 254, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-18 13:20:33', NULL, 0, 7, 0),
(47, 257, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-18 13:22:42', NULL, 0, 7, 0),
(48, 258, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-18 13:29:22', 0, 0, 3),
(49, 211, 'Proyecto regresado a 2.4.1 Proyectos Activos para realizar Solicitud', NULL, '2022-03-18 14:21:51', NULL, 0, 6, 0),
(50, 257, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-18 14:42:41', NULL, 0, 6, 0),
(51, 255, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-18 14:43:40', NULL, 0, 6, 0),
(52, 254, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-18 14:46:10', NULL, 0, 6, 0),
(53, 255, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-18 15:04:28', NULL, 0, 3, 0),
(54, 257, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-18 15:10:38', NULL, 0, 3, 0),
(55, 254, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-18 15:14:20', NULL, 0, 3, 0),
(56, 11, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-18 16:15:25', NULL, 0, 3, 0),
(57, 250, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-18 16:26:59', NULL, 0, 6, 0),
(58, 41, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-18 16:31:01', NULL, 0, 3, 0),
(59, 130, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-18 16:42:09', NULL, 0, 3, 0),
(60, 129, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-18 16:57:58', NULL, 0, 3, 0),
(61, 14, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-18 17:42:08', NULL, 0, 7, 0),
(62, 125, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-18 17:51:55', NULL, 0, 7, 0),
(63, 25, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-18 17:52:57', NULL, 0, 3, 0),
(64, 19, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-19 09:01:51', NULL, 0, 7, 0),
(65, 19, 'Proyecto regresado a 2.4.1 Proyectos Activos para realizar Solicitud', NULL, '2022-03-19 09:03:10', NULL, 0, 7, 0),
(66, 19, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-19 09:03:56', NULL, 0, 7, 0),
(67, 125, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-19 09:05:03', NULL, 0, 6, 0),
(68, 259, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-19 09:24:57', 0, 0, 3),
(69, 246, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-19 09:40:56', NULL, 0, 7, 0),
(70, 260, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-19 09:42:42', 0, 0, 3),
(71, 185, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-19 09:53:00', NULL, 0, 3, 0),
(72, 10, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-19 10:05:18', NULL, 0, 7, 0),
(73, 10, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-19 10:05:19', NULL, 0, 7, 0),
(74, 258, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-19 10:10:46', NULL, 0, 7, 0),
(75, 261, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-19 10:18:47', 0, 0, 3),
(76, 19, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-19 10:19:19', NULL, 0, 6, 0),
(77, 246, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-19 10:22:43', NULL, 0, 6, 0),
(78, 259, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-19 11:17:43', NULL, 0, 7, 0),
(79, 259, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-19 11:20:58', NULL, 0, 6, 0),
(80, 258, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-19 11:22:37', NULL, 0, 6, 0),
(81, 14, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-19 11:24:51', NULL, 0, 6, 0),
(82, 259, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-19 11:26:03', NULL, 0, 3, 0),
(83, 262, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-19 12:20:36', 0, 0, 3),
(84, 263, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-19 12:24:01', 0, 0, 3),
(85, 250, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-19 12:41:57', NULL, 0, 3, 0),
(86, 10, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-19 13:09:22', NULL, 0, 6, 0),
(87, 19, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-19 13:14:40', NULL, 0, 3, 0),
(88, 264, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-22 09:12:07', 0, 0, 3),
(89, 265, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-22 09:21:14', 0, 0, 3),
(90, 266, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-22 09:28:48', 0, 0, 3),
(91, 267, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-22 10:05:29', 0, 0, 3),
(92, 268, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-22 10:19:45', 0, 0, 3),
(93, 269, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-22 10:22:49', 0, 0, 3),
(94, 270, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-22 12:14:21', 0, 0, 3),
(95, 271, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-22 12:17:43', 0, 0, 3),
(96, 272, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-22 17:16:54', 0, 0, 3),
(97, 273, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-22 17:21:54', 0, 0, 3),
(98, 274, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-22 17:43:07', 0, 0, 3),
(99, 35, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-23 09:03:34', NULL, 0, 7, 0),
(100, 88, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-23 09:06:21', NULL, 0, 7, 0),
(101, 263, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-23 09:14:12', NULL, 0, 7, 0),
(102, 263, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-23 09:19:16', NULL, 0, 6, 0),
(103, 88, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-23 09:26:34', NULL, 0, 6, 0),
(104, 35, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-23 09:37:47', NULL, 0, 6, 0),
(105, 118, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-23 10:20:14', NULL, 0, 7, 0),
(106, 118, 'Proyecto regresado a 2.4.1 Proyectos Activos para realizar Solicitud', NULL, '2022-03-23 10:24:57', NULL, 0, 7, 0),
(107, 43, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-23 10:27:18', NULL, 0, 7, 0),
(108, 182, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-23 10:31:35', NULL, 0, 7, 0),
(109, 149, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-23 10:33:17', NULL, 0, 7, 0),
(110, 118, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-23 10:34:57', NULL, 0, 7, 0),
(111, 275, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-23 11:10:12', 0, 0, 3),
(112, 276, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-23 11:15:19', 0, 0, 3),
(113, 277, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-23 11:19:33', 0, 0, 3),
(114, 260, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-23 11:23:10', NULL, 0, 7, 0),
(115, 43, 'Proyecto regresado a 2.4.1 Proyectos Activos para realizar Solicitud', NULL, '2022-03-23 11:26:42', NULL, 0, 6, 0),
(116, 278, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-23 11:43:55', 0, 0, 3),
(117, 279, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-23 12:06:38', 0, 0, 3),
(118, 260, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-23 12:13:24', NULL, 0, 6, 0),
(119, 182, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-23 12:17:08', NULL, 0, 6, 0),
(120, 280, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-23 12:20:57', 0, 0, 3),
(121, 149, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-23 12:27:48', NULL, 0, 6, 0),
(122, 118, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-23 12:30:25', NULL, 0, 6, 0),
(123, 281, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-23 12:33:37', 0, 0, 3),
(124, 258, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-23 12:37:30', NULL, 0, 3, 0),
(125, 246, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-23 12:41:15', NULL, 0, 3, 0),
(126, 263, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-23 12:42:57', NULL, 0, 3, 0),
(127, 10, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-23 12:57:08', NULL, 0, 3, 0),
(128, 118, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-23 12:59:11', NULL, 0, 3, 0),
(129, 14, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-23 13:03:29', NULL, 0, 3, 0),
(130, 88, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-23 13:05:13', NULL, 0, 3, 0),
(131, 182, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-23 13:06:40', NULL, 0, 3, 0),
(132, 149, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-23 13:08:17', NULL, 0, 3, 0),
(133, 211, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-23 13:10:22', NULL, 0, 7, 0),
(134, 282, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-23 13:21:09', 0, 0, 3),
(135, 268, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-23 13:47:19', NULL, 0, 7, 0),
(136, 279, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-23 13:49:59', NULL, 0, 7, 0),
(137, 183, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-23 13:54:01', NULL, 0, 7, 0),
(138, 281, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-23 13:55:44', NULL, 0, 7, 0),
(139, 282, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-23 13:58:50', NULL, 0, 7, 0),
(140, 283, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-23 14:19:08', 0, 0, 3),
(141, 280, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-23 15:20:03', NULL, 0, 7, 0),
(142, 281, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-23 15:44:14', NULL, 0, 6, 0),
(143, 280, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-23 15:47:13', NULL, 0, 6, 0),
(144, 279, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-23 15:49:30', NULL, 0, 6, 0),
(145, 284, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-23 15:54:35', 0, 0, 3),
(146, 183, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-23 15:54:48', NULL, 0, 6, 0),
(147, 153, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-23 17:15:32', NULL, 0, 7, 0),
(148, 285, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-24 09:05:43', 0, 0, 3),
(149, 286, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-24 09:24:59', 0, 0, 3),
(150, 287, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-24 09:32:56', 0, 0, 3),
(151, 288, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-24 09:44:27', 0, 0, 3),
(152, 280, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-24 10:06:17', NULL, 0, 3, 0),
(153, 35, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-24 10:09:41', NULL, 0, 3, 0),
(154, 153, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-24 10:12:38', NULL, 0, 6, 0),
(155, 279, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-24 10:13:23', NULL, 0, 3, 0),
(156, 211, 'Proyecto regresado a 2.4.1 Proyectos Activos para realizar Solicitud', NULL, '2022-03-24 10:18:19', NULL, 0, 6, 0),
(157, 267, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-24 11:07:48', NULL, 0, 7, 0),
(158, 287, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-24 11:08:35', NULL, 0, 7, 0),
(159, 285, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-24 11:10:27', NULL, 0, 7, 0),
(160, 287, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-24 11:16:33', NULL, 0, 6, 0),
(161, 285, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-24 11:18:38', NULL, 0, 6, 0),
(162, 268, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-24 11:21:34', NULL, 0, 6, 0),
(163, 289, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-24 11:22:39', 0, 0, 3),
(164, 282, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-24 11:24:07', NULL, 0, 6, 0),
(165, 290, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-24 12:05:25', 0, 0, 3),
(166, 287, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-24 12:07:26', NULL, 0, 8, 0),
(167, 285, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-24 12:32:33', NULL, 0, 8, 0),
(168, 291, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-24 13:16:26', 0, 0, 3),
(169, 267, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-24 13:22:14', NULL, 0, 6, 0),
(170, 292, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-24 13:29:52', 0, 0, 3),
(171, 9, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-24 13:36:24', NULL, 0, 7, 0),
(172, 29, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-24 13:48:53', NULL, 0, 7, 0),
(173, 85, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-24 13:58:55', NULL, 0, 7, 0),
(174, 293, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-24 15:08:40', 0, 0, 3),
(175, 153, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-24 15:17:16', NULL, 0, 8, 0),
(176, 9, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-24 16:12:57', NULL, 0, 6, 0),
(177, 194, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-24 16:26:19', NULL, 0, 11, 0),
(178, 294, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-24 16:37:06', 0, 0, 3),
(179, 183, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-24 16:56:00', NULL, 0, 8, 0),
(180, 295, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-24 16:56:21', 0, 0, 3),
(181, 296, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-24 17:02:24', 0, 0, 3),
(182, 132, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-24 17:10:45', NULL, 0, 11, 0),
(183, 221, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-24 17:11:49', NULL, 0, 7, 0),
(184, 3, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-24 17:27:23', NULL, 0, 7, 0),
(185, 3, 'Proyecto regresado a 2.4.1 Proyectos Activos para realizar Solicitud', NULL, '2022-03-24 17:43:36', NULL, 0, 6, 0),
(186, 29, 'Proyecto regresado a 2.4.1 Proyectos Activos para realizar Solicitud', NULL, '2022-03-24 17:44:05', NULL, 0, 6, 0),
(187, 3, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-24 17:56:05', NULL, 0, 7, 0),
(188, 3, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-25 08:42:22', NULL, 0, 6, 0),
(189, 3, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-25 08:49:51', NULL, 0, 8, 0),
(190, 297, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-25 09:04:47', 0, 0, 3),
(191, 298, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-25 09:09:43', 0, 0, 3),
(192, 299, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-25 09:26:57', 0, 0, 3),
(193, 299, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-25 09:55:13', NULL, 0, 7, 0),
(194, 85, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-25 10:30:19', NULL, 0, 6, 0),
(195, 300, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-25 10:34:54', 0, 0, 3),
(196, 85, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-25 11:28:19', NULL, 0, 8, 0),
(197, 202, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-25 11:30:10', NULL, 0, 8, 0),
(198, 301, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-25 11:39:43', 0, 0, 3),
(199, 221, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-25 11:48:23', NULL, 0, 1, 0),
(200, 302, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-25 12:20:29', 0, 0, 3),
(201, 29, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-25 12:23:49', NULL, 0, 7, 0),
(202, 101, 'Proyecto Completo Borrado', '2022-03-25 12:46:02', NULL, NULL, 2, 0, 0),
(203, 217, 'Proyecto Completo Borrado', '2022-03-25 12:49:53', NULL, NULL, 2, 0, 0),
(204, 17, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-25 13:41:05', NULL, 0, 8, 0),
(205, 125, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-25 13:43:49', NULL, 0, 8, 0),
(206, 159, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-25 13:47:57', NULL, 0, 8, 0),
(207, 192, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-25 13:56:04', NULL, 0, 8, 0),
(208, 209, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-25 14:01:40', NULL, 0, 8, 0),
(209, 17, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-25 14:05:10', NULL, 0, 11, 0),
(210, 211, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-25 14:06:59', NULL, 0, 7, 0),
(211, 222, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-25 14:08:23', NULL, 0, 8, 0),
(212, 300, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-25 14:33:34', NULL, 0, 7, 0),
(213, 301, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-25 14:35:46', NULL, 0, 7, 0),
(214, 171, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-25 14:38:49', NULL, 0, 7, 0),
(215, 284, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-25 14:41:07', NULL, 0, 7, 0),
(216, 281, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-25 14:53:41', NULL, 0, 8, 0),
(217, 282, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-25 14:59:53', NULL, 0, 8, 0),
(218, 303, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-25 15:06:02', 0, 0, 3),
(219, 304, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-25 15:52:24', 0, 0, 3),
(220, 267, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-25 15:53:40', NULL, 0, 8, 0),
(221, 303, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-25 16:01:07', NULL, 0, 7, 0),
(222, 301, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-25 16:18:15', NULL, 0, 6, 0),
(223, 300, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-25 16:20:12', NULL, 0, 6, 0),
(224, 290, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-25 16:34:31', NULL, 0, 7, 0),
(225, 126, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-25 16:36:48', NULL, 0, 11, 0),
(226, 305, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-25 16:43:05', 0, 0, 3),
(227, 134, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-25 16:47:26', NULL, 0, 11, 0),
(228, 305, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-25 16:52:10', NULL, 0, 7, 0),
(229, 301, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-25 16:55:29', NULL, 0, 8, 0),
(230, 166, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-25 16:55:57', NULL, 0, 7, 0),
(231, 305, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-25 16:56:33', NULL, 0, 6, 0),
(232, 300, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-25 16:56:50', NULL, 0, 8, 0),
(233, 305, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-25 17:03:51', NULL, 0, 8, 0),
(234, 209, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-25 17:21:05', NULL, 0, 11, 0),
(235, 247, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-25 17:30:19', NULL, 0, 7, 0),
(236, 31, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-25 17:30:43', NULL, 0, 11, 0),
(237, 29, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-25 17:30:59', NULL, 0, 6, 0),
(238, 192, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-25 17:44:04', NULL, 0, 11, 0),
(239, 303, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-25 17:45:02', NULL, 0, 6, 0),
(240, 303, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-25 17:46:56', NULL, 0, 8, 0),
(241, 220, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-25 17:50:44', NULL, 0, 11, 0),
(242, 299, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-25 17:52:10', NULL, 0, 6, 0),
(243, 159, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-25 18:03:54', NULL, 0, 11, 0),
(244, 284, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-26 08:24:06', NULL, 0, 6, 0),
(245, 211, 'Proyecto regresado a 2.4.1 Proyectos Activos para realizar Solicitud', NULL, '2022-03-26 08:28:32', NULL, 0, 6, 0),
(246, 306, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-26 08:46:30', 0, 0, 3),
(247, 296, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-26 08:58:48', NULL, 0, 7, 0),
(248, 296, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-26 09:11:22', NULL, 0, 6, 0),
(249, 307, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-26 09:19:47', 0, 0, 3),
(250, 308, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-26 09:24:46', 0, 0, 3),
(251, 309, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-26 09:44:41', 0, 0, 3),
(252, 307, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-26 10:06:14', NULL, 0, 7, 0),
(253, 247, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-26 10:06:58', NULL, 0, 6, 0),
(254, 308, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-26 10:10:45', NULL, 0, 7, 0),
(255, 9, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-26 10:11:26', NULL, 0, 8, 0),
(256, 309, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-26 10:13:27', NULL, 0, 7, 0),
(257, 171, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-26 10:15:12', NULL, 0, 6, 0),
(258, 247, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-26 10:27:42', NULL, 0, 8, 0),
(259, 310, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-26 11:11:31', 0, 0, 3),
(260, 290, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-26 11:14:59', NULL, 0, 6, 0),
(261, 311, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-26 11:15:03', 0, 0, 3),
(262, 166, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-26 11:17:20', NULL, 0, 6, 0),
(263, 307, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-26 11:19:44', NULL, 0, 6, 0),
(264, 309, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-26 11:21:25', NULL, 0, 6, 0),
(265, 308, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-26 11:23:10', NULL, 0, 6, 0),
(266, 221, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-26 11:39:35', NULL, 0, 8, 0),
(267, 29, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-26 11:44:27', NULL, 0, 8, 0),
(268, 240, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-26 11:46:32', NULL, 0, 8, 0),
(269, 211, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-26 11:50:05', NULL, 0, 7, 0),
(270, 308, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-26 12:10:56', NULL, 0, 8, 0),
(271, 309, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-26 12:16:33', NULL, 0, 8, 0),
(272, 307, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-26 12:21:00', NULL, 0, 8, 0),
(273, 312, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-26 12:23:52', 0, 0, 3),
(274, 236, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-26 12:39:31', NULL, 0, 8, 0),
(275, 224, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-26 12:55:00', NULL, 0, 11, 0),
(276, 299, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-26 12:58:47', NULL, 0, 8, 0),
(277, 222, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-26 13:12:01', NULL, 0, 11, 0),
(278, 211, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-26 13:17:31', NULL, 0, 6, 0),
(279, 211, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-26 13:24:30', NULL, 0, 8, 0),
(280, 248, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-26 14:15:34', NULL, 0, 7, 0),
(281, 248, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-26 14:17:10', NULL, 0, 6, 0),
(282, 248, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-26 14:28:28', NULL, 0, 8, 0),
(283, 0, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-28 08:41:58', 0, 0, 3),
(284, 0, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-28 08:56:21', 0, 0, 3),
(285, 0, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-28 09:13:39', 0, 0, 3),
(286, 0, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-28 09:18:22', 0, 0, 3),
(287, 0, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-28 10:12:26', 0, 0, 3),
(288, 195, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-28 11:09:26', NULL, 0, 7, 0),
(289, 242, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-28 11:12:34', NULL, 0, 7, 0),
(290, 275, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-28 11:32:05', NULL, 0, 7, 0),
(291, 275, 'Proyecto regresado a 2.4.1 Proyectos Activos para realizar Solicitud', NULL, '2022-03-28 11:36:29', NULL, 0, 7, 0),
(292, 275, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-28 11:37:33', NULL, 0, 7, 0),
(293, 313, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-28 11:39:51', 0, 0, 3),
(294, 314, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-28 11:47:47', 0, 0, 3),
(295, 315, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-28 11:54:27', 0, 0, 3),
(296, 316, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-28 12:00:52', 0, 0, 3),
(297, 317, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-28 12:15:02', 0, 0, 3),
(298, 199, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-28 12:16:51', NULL, 0, 7, 0),
(299, 234, 'Proyecto regresado a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-28 12:27:45', NULL, 0, 2, 0),
(300, 318, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-28 12:39:36', 0, 0, 3),
(301, 199, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-28 12:40:23', NULL, 0, 6, 0),
(302, 199, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-28 12:48:48', NULL, 0, 8, 0),
(303, 317, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-28 13:10:30', NULL, 0, 7, 0),
(304, 234, 'Proyecto regresado a 2.4.1 Proyectos Activos para realizar Solicitud', NULL, '2022-03-28 13:15:28', NULL, 0, 2, 0),
(305, 36, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-28 13:19:26', NULL, 0, 11, 0),
(306, 37, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-28 13:29:18', NULL, 0, 11, 0),
(307, 319, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-28 13:30:41', 0, 0, 3),
(308, 131, 'Proyecto regresado a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-28 13:31:46', NULL, 0, 2, 0),
(309, 207, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-28 13:37:32', NULL, 0, 11, 0),
(310, 234, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-28 13:38:43', NULL, 0, 7, 0),
(311, 314, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-28 13:42:53', NULL, 0, 7, 0),
(312, 171, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-28 13:58:13', NULL, 0, 8, 0),
(313, 244, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-28 14:04:31', NULL, 0, 11, 0),
(314, 296, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-28 14:04:45', NULL, 0, 8, 0),
(315, 284, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-28 14:07:41', NULL, 0, 8, 0),
(316, 290, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-28 15:13:58', NULL, 0, 8, 0),
(317, 317, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-28 15:35:11', NULL, 0, 6, 0),
(318, 314, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-28 15:36:44', NULL, 0, 6, 0),
(319, 275, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-28 15:39:15', NULL, 0, 6, 0),
(320, 234, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-28 15:47:38', NULL, 0, 6, 0),
(321, 131, 'Proyecto regresado a 2.4.1 Proyectos Activos para realizar Solicitud', NULL, '2022-03-28 15:53:16', NULL, 0, 2, 0),
(322, 317, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-28 15:57:39', NULL, 0, 8, 0),
(323, 229, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-28 16:22:47', NULL, 0, 11, 0),
(324, 234, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-28 16:23:25', NULL, 0, 8, 0),
(325, 48, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-28 16:34:42', NULL, 0, 11, 0),
(326, 320, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-28 16:34:52', 0, 0, 3),
(327, 197, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-28 16:49:25', NULL, 0, 11, 0),
(328, 238, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-28 16:58:39', NULL, 0, 11, 0),
(329, 242, 'Proyecto regresado a 2.4.1 Proyectos Activos para realizar Solicitud', NULL, '2022-03-28 16:59:05', NULL, 0, 6, 0),
(330, 166, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-28 17:08:55', NULL, 0, 8, 0),
(331, 47, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-28 17:08:59', NULL, 0, 11, 0),
(332, 314, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-28 17:18:47', NULL, 0, 8, 0),
(333, 180, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-28 17:39:27', NULL, 0, 11, 0),
(334, 321, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-29 09:26:27', 0, 0, 3),
(335, 322, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-29 09:50:26', 0, 0, 3),
(336, 323, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-29 10:05:26', 0, 0, 3),
(337, 324, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-29 10:10:42', 0, 0, 3),
(338, 325, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-29 10:14:30', 0, 0, 3),
(339, 326, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-29 10:18:11', 0, 0, 3),
(340, 304, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-29 10:40:45', NULL, 0, 7, 0),
(341, 242, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-29 10:44:36', NULL, 0, 7, 0),
(342, 242, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-29 10:57:29', NULL, 0, 6, 0),
(343, 327, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-29 11:02:23', 0, 0, 3),
(344, 195, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-29 11:29:43', NULL, 0, 6, 0),
(345, 321, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-29 11:40:55', NULL, 0, 7, 0),
(346, 328, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-29 12:02:30', 0, 0, 3),
(347, 321, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-29 12:05:17', NULL, 0, 6, 0),
(348, 321, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-29 12:20:20', NULL, 0, 8, 0),
(349, 328, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-29 12:39:40', NULL, 0, 3, 0),
(350, 304, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-29 12:43:13', NULL, 0, 6, 0),
(351, 328, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-29 12:44:42', NULL, 0, 6, 0),
(352, 329, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-29 13:02:39', 0, 0, 3),
(353, 329, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-29 13:07:05', NULL, 0, 3, 0),
(354, 329, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-29 13:12:41', NULL, 0, 6, 0),
(355, 319, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-29 13:26:26', NULL, 0, 3, 0),
(356, 116, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-29 13:36:44', NULL, 0, 3, 0),
(357, 195, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-29 15:06:01', NULL, 0, 8, 0),
(358, 328, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-29 15:09:32', NULL, 0, 8, 0),
(359, 329, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-29 15:16:04', NULL, 0, 8, 0),
(360, 254, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-29 15:31:03', NULL, 0, 11, 0),
(361, 15, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-29 15:55:48', NULL, 0, 11, 0),
(362, 255, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-29 16:02:38', NULL, 0, 11, 0),
(363, 258, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-29 16:07:36', NULL, 0, 11, 0),
(364, 11, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-29 16:17:07', NULL, 0, 11, 0),
(365, 130, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-29 16:25:38', NULL, 0, 11, 0),
(366, 272, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-29 16:25:51', NULL, 0, 3, 0),
(367, 315, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-29 16:41:06', NULL, 0, 3, 0),
(368, 330, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-29 17:00:24', 0, 0, 3),
(369, 331, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-29 17:42:04', 0, 0, 3),
(370, 319, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-29 18:00:17', NULL, 0, 6, 0),
(371, 272, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-29 18:03:50', NULL, 0, 6, 0),
(372, 332, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-30 08:48:35', 0, 0, 3),
(373, 333, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-30 08:55:10', 0, 0, 3),
(374, 334, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-30 09:00:24', 0, 0, 3),
(375, 335, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-30 09:14:32', 0, 0, 3),
(376, 336, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-30 09:20:30', 0, 0, 3),
(377, 304, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-30 09:38:44', NULL, 0, 8, 0),
(378, 297, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-30 09:41:44', NULL, 0, 7, 0),
(379, 208, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-30 09:42:44', NULL, 0, 7, 0),
(380, 116, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-30 10:05:49', NULL, 0, 6, 0),
(381, 315, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-30 10:07:58', NULL, 0, 6, 0),
(382, 337, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-30 10:19:40', 0, 0, 3),
(383, 338, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-30 10:34:10', 0, 0, 3),
(384, 338, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-30 10:37:43', NULL, 0, 3, 0),
(385, 323, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-30 10:39:18', NULL, 0, 3, 0),
(386, 309, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 11:41:54', NULL, 0, 11, 0),
(387, 3, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 11:44:38', NULL, 0, 11, 0),
(388, 9, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 11:48:10', NULL, 0, 11, 0),
(389, 10, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 11:50:47', NULL, 0, 11, 0),
(390, 14, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 11:52:31', NULL, 0, 11, 0),
(391, 19, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 11:56:37', NULL, 0, 11, 0),
(392, 20, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 11:58:21', NULL, 0, 11, 0),
(393, 24, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 12:01:24', NULL, 0, 11, 0),
(394, 25, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 12:03:09', NULL, 0, 11, 0),
(395, 27, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 12:08:51', NULL, 0, 11, 0),
(396, 29, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 12:10:14', NULL, 0, 11, 0),
(397, 30, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 12:11:36', NULL, 0, 11, 0),
(398, 242, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-30 12:11:56', NULL, 0, 8, 0),
(399, 35, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 12:14:05', NULL, 0, 11, 0),
(400, 41, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 12:16:15', NULL, 0, 11, 0),
(401, 42, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 12:18:55', NULL, 0, 11, 0),
(402, 85, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 12:20:43', NULL, 0, 11, 0),
(403, 88, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 12:22:40', NULL, 0, 11, 0),
(404, 118, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 12:24:03', NULL, 0, 11, 0),
(405, 125, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 12:26:29', NULL, 0, 11, 0),
(406, 129, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 12:27:15', NULL, 0, 11, 0),
(407, 149, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 12:28:32', NULL, 0, 11, 0),
(408, 153, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 12:30:01', NULL, 0, 11, 0),
(409, 166, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 12:31:57', NULL, 0, 11, 0),
(410, 171, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 12:34:30', NULL, 0, 11, 0),
(411, 182, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 12:35:37', NULL, 0, 11, 0),
(412, 183, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 12:36:47', NULL, 0, 11, 0),
(413, 185, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 12:38:02', NULL, 0, 11, 0),
(414, 193, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 12:40:09', NULL, 0, 11, 0),
(415, 195, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 12:41:29', NULL, 0, 11, 0),
(416, 198, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 12:44:03', NULL, 0, 11, 0),
(417, 199, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 12:46:01', NULL, 0, 11, 0),
(418, 202, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 12:50:01', NULL, 0, 11, 0),
(419, 211, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 12:52:30', NULL, 0, 11, 0),
(420, 221, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 12:53:56', NULL, 0, 11, 0),
(421, 225, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 12:56:50', NULL, 0, 11, 0),
(422, 234, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 12:58:07', NULL, 0, 11, 0),
(423, 236, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 13:00:00', NULL, 0, 11, 0),
(424, 239, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 13:03:12', NULL, 0, 11, 0),
(425, 339, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-30 13:04:53', 0, 0, 3),
(426, 240, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 13:05:54', NULL, 0, 11, 0),
(427, 246, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 13:08:58', NULL, 0, 11, 0),
(428, 338, 'Proyecto regresado a 2.4.1 Proyectos Activos para realizar Solicitud', NULL, '2022-03-30 13:11:19', NULL, 0, 2, 0),
(429, 247, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 13:11:56', NULL, 0, 11, 0),
(430, 338, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-30 13:12:39', NULL, 0, 3, 0),
(431, 248, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 13:14:01', NULL, 0, 11, 0),
(432, 250, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 13:16:01', NULL, 0, 11, 0),
(433, 338, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-30 13:16:48', NULL, 0, 6, 0),
(434, 257, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 13:19:11', NULL, 0, 11, 0),
(435, 259, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 13:21:50', NULL, 0, 11, 0),
(436, 263, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 13:22:40', NULL, 0, 11, 0),
(437, 267, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 13:23:58', NULL, 0, 11, 0),
(438, 279, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 13:25:53', NULL, 0, 11, 0),
(439, 339, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-30 13:26:25', NULL, 0, 7, 0),
(440, 280, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 13:27:57', NULL, 0, 11, 0),
(441, 338, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-30 13:28:43', NULL, 0, 8, 0),
(442, 281, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 13:29:23', NULL, 0, 11, 0),
(443, 282, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 13:32:05', NULL, 0, 11, 0),
(444, 284, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 13:34:24', NULL, 0, 11, 0),
(445, 285, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 13:38:20', NULL, 0, 11, 0),
(446, 287, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 13:41:20', NULL, 0, 11, 0),
(447, 319, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-30 13:41:40', NULL, 0, 8, 0),
(448, 290, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 13:44:39', NULL, 0, 11, 0),
(449, 296, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 13:46:24', NULL, 0, 11, 0),
(450, 299, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 13:47:31', NULL, 0, 11, 0),
(451, 300, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 13:48:52', NULL, 0, 11, 0),
(452, 301, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 13:51:01', NULL, 0, 11, 0),
(453, 303, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 13:52:58', NULL, 0, 11, 0),
(454, 305, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 13:54:28', NULL, 0, 11, 0),
(455, 307, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 13:56:02', NULL, 0, 11, 0),
(456, 308, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 13:57:20', NULL, 0, 11, 0),
(457, 314, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 13:59:47', NULL, 0, 11, 0),
(458, 317, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 14:01:43', NULL, 0, 11, 0),
(459, 231, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-30 14:33:41', NULL, 0, 7, 0),
(460, 323, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-30 14:37:49', NULL, 0, 6, 0),
(461, 231, 'Proyecto regresado a 2.4.1 Proyectos Activos para realizar Solicitud', NULL, '2022-03-30 14:59:58', NULL, 0, 7, 0),
(462, 231, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-30 15:03:18', NULL, 0, 7, 0),
(463, 297, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-30 15:07:05', NULL, 0, 6, 0),
(464, 321, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 15:13:53', NULL, 0, 11, 0);
INSERT INTO `bitacora` (`id_bitacora`, `id_proyecto`, `etapa`, `fechar_borrado`, `fecha_modificacion`, `fecha_registro`, `id_capB`, `id_capM`, `id_capR`) VALUES
(465, 328, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 15:15:23', NULL, 0, 11, 0),
(466, 333, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-30 15:15:31', NULL, 0, 3, 0),
(467, 334, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-30 15:17:02', NULL, 0, 3, 0),
(468, 329, 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador', NULL, '2022-03-30 15:17:56', NULL, 0, 11, 0),
(469, 340, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-30 15:51:30', 0, 0, 3),
(470, 341, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-30 15:58:43', 0, 0, 3),
(471, 49, 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta', NULL, '2022-03-30 16:41:38', NULL, 0, 7, 0),
(472, 342, 'Creación de nuevo proyecto', NULL, NULL, '2022-03-30 16:46:12', 0, 0, 3),
(473, 275, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-30 17:17:55', NULL, 0, 8, 0),
(474, 272, 'Proyecto avanzó a 2.6 Proyectos con Código Identificador', NULL, '2022-03-30 17:27:05', NULL, 0, 8, 0),
(475, 339, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-30 18:02:19', NULL, 0, 6, 0),
(476, 49, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-30 18:10:06', NULL, 0, 6, 0),
(477, 334, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-30 18:13:41', NULL, 0, 6, 0),
(478, 333, 'Proyecto avanzó a 2.5 Alta Proyecto', NULL, '2022-03-30 18:17:21', NULL, 0, 6, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capvalorventas`
--

CREATE TABLE `capvalorventas` (
  `id_capValorVentas` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `capValVenta` int(11) NOT NULL DEFAULT 0,
  `capValVenta_permiso` char(1) DEFAULT '0',
  `capValVenta_fecha` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `capvalorventas`
--

INSERT INTO `capvalorventas` (`id_capValorVentas`, `id_proyecto`, `capValVenta`, `capValVenta_permiso`, `capValVenta_fecha`) VALUES
(1, 1, 3, '1', '2022-03-01 15:40:31'),
(2, 2, 2, '1', '2022-03-26 13:00:48'),
(3, 3, 3, '1', '2022-03-02 09:03:50'),
(4, 5, 3, '1', '2022-03-02 09:19:28'),
(5, 6, 3, '1', '2022-03-02 09:35:21'),
(6, 7, 3, '1', '2022-03-02 10:20:27'),
(7, 8, 3, '1', '2022-03-02 11:22:50'),
(8, 9, 3, '1', '2022-03-02 11:47:48'),
(9, 10, 3, '1', '2022-03-02 12:54:35'),
(10, 11, 3, '1', '2022-03-02 15:18:23'),
(11, 12, 3, '1', '2022-03-02 16:29:15'),
(12, 13, 3, '1', '2022-03-03 10:39:15'),
(13, 14, 3, '1', '2022-03-03 10:47:53'),
(14, 15, 3, '1', '2022-03-03 11:07:44'),
(15, 16, 3, '1', '2022-03-03 11:18:17'),
(16, 17, 3, '1', '2022-03-03 13:05:29'),
(17, 18, 3, '1', '2022-03-03 14:17:23'),
(18, 19, 3, '1', '2022-03-03 17:39:49'),
(19, 20, 3, '1', '2022-03-04 10:44:38'),
(20, 21, 3, '1', '2022-03-04 11:26:54'),
(21, 23, 3, '1', '2022-03-04 13:24:02'),
(22, 24, 3, '1', '2022-03-04 14:52:29'),
(23, 25, 3, '1', '2022-03-04 17:11:07'),
(24, 26, 3, '1', '2022-03-05 09:06:00'),
(25, 27, 3, '1', '2022-03-05 09:12:35'),
(26, 28, 3, '1', '2022-03-05 09:16:07'),
(27, 29, 3, '1', '2022-03-05 10:06:30'),
(28, 30, 3, '1', '2022-03-05 11:00:26'),
(29, 31, 3, '1', '2022-03-05 12:42:52'),
(30, 32, 3, '1', '2022-03-05 12:49:45'),
(31, 33, 3, '1', '2022-03-05 13:04:58'),
(32, 35, 3, '1', '2022-03-07 09:29:05'),
(33, 36, 3, '1', '2022-03-07 09:36:09'),
(34, 37, 3, '1', '2022-03-07 09:40:32'),
(35, 38, 3, '1', '2022-03-07 09:46:40'),
(36, 41, 3, '1', '2022-03-07 10:45:01'),
(37, 42, 3, '1', '2022-03-07 12:14:24'),
(38, 43, 3, '1', '2022-03-07 12:47:21'),
(39, 44, 3, '1', '2022-03-07 13:13:49'),
(40, 45, 3, '1', '2022-03-07 13:28:20'),
(41, 46, 3, '1', '2022-03-07 14:51:01'),
(42, 47, 3, '1', '2022-03-07 16:23:15'),
(43, 48, 3, '1', '2022-03-07 16:47:32'),
(44, 49, 3, '1', '2022-03-08 09:51:56'),
(45, 51, 3, '1', '2022-03-08 10:39:42'),
(46, 52, 3, '1', '2022-03-08 13:09:41'),
(47, 54, 3, '1', '2022-03-08 15:37:41'),
(48, 55, 4, '1', '2022-03-08 16:01:13'),
(49, 56, 4, '1', '2022-03-08 16:05:44'),
(50, 57, 4, '1', '2022-03-08 16:13:04'),
(51, 58, 4, '1', '2022-03-08 16:19:01'),
(52, 59, 4, '1', '2022-03-08 16:23:41'),
(53, 60, 4, '1', '2022-03-08 16:28:58'),
(54, 61, 4, '1', '2022-03-08 16:33:05'),
(55, 62, 4, '1', '2022-03-08 16:47:03'),
(56, 63, 4, '1', '2022-03-08 16:52:09'),
(57, 64, 4, '1', '2022-03-08 16:58:02'),
(58, 65, 4, '1', '2022-03-08 17:04:26'),
(59, 66, 4, '1', '2022-03-09 09:25:39'),
(60, 68, 4, '1', '2022-03-09 09:30:26'),
(61, 69, 4, '1', '2022-03-09 09:35:52'),
(62, 71, 4, '1', '2022-03-09 09:41:43'),
(63, 72, 4, '1', '2022-03-09 09:47:52'),
(64, 74, 4, '1', '2022-03-09 09:59:21'),
(65, 75, 4, '1', '2022-03-09 10:03:46'),
(66, 76, 3, '1', '2022-03-09 10:06:59'),
(67, 77, 4, '1', '2022-03-09 10:08:23'),
(68, 78, 4, '1', '2022-03-09 10:25:07'),
(69, 79, 4, '1', '2022-03-09 10:30:00'),
(70, 80, 4, '1', '2022-03-09 10:33:42'),
(71, 81, 4, '1', '2022-03-09 10:38:37'),
(72, 82, 4, '1', '2022-03-09 10:42:31'),
(73, 83, 4, '1', '2022-03-09 11:12:47'),
(74, 84, 4, '1', '2022-03-09 11:17:07'),
(75, 85, 3, '1', '2022-03-09 11:50:54'),
(76, 86, 4, '1', '2022-03-09 11:51:14'),
(77, 87, 4, '1', '2022-03-09 11:55:02'),
(78, 88, 3, '1', '2022-03-09 11:58:39'),
(79, 89, 4, '1', '2022-03-09 11:59:15'),
(80, 90, 4, '1', '2022-03-09 12:03:11'),
(81, 91, 4, '1', '2022-03-09 12:07:15'),
(82, 92, 4, '1', '2022-03-09 12:14:51'),
(83, 93, 4, '1', '2022-03-09 12:23:27'),
(84, 94, 4, '1', '2022-03-09 12:42:41'),
(85, 95, 4, '1', '2022-03-09 12:45:37'),
(86, 96, 4, '1', '2022-03-09 12:50:53'),
(87, 97, 3, '1', '2022-03-09 12:55:20'),
(88, 98, 4, '1', '2022-03-09 12:56:14'),
(89, 99, 4, '1', '2022-03-09 14:25:25'),
(90, 100, 4, '1', '2022-03-09 14:29:57'),
(91, 101, 4, '1', '2022-03-09 14:33:48'),
(92, 102, 4, '1', '2022-03-09 14:38:17'),
(93, 103, 4, '1', '2022-03-09 14:40:41'),
(94, 104, 4, '1', '2022-03-09 14:49:12'),
(95, 105, 4, '1', '2022-03-09 14:58:55'),
(96, 106, 4, '1', '2022-03-09 15:01:25'),
(97, 107, 4, '1', '2022-03-09 15:12:06'),
(98, 108, 4, '1', '2022-03-09 15:17:09'),
(99, 109, 4, '1', '2022-03-09 15:23:30'),
(100, 110, 4, '1', '2022-03-09 15:27:16'),
(101, 111, 4, '1', '2022-03-09 15:30:44'),
(102, 112, 4, '1', '2022-03-09 15:34:23'),
(103, 113, 4, '1', '2022-03-09 15:38:17'),
(104, 114, 4, '1', '2022-03-09 15:42:54'),
(105, 116, 3, '1', '2022-03-09 17:16:20'),
(106, 117, 3, '1', '2022-03-10 09:29:43'),
(107, 118, 4, '1', '2022-03-10 09:48:18'),
(108, 119, 4, '1', '2022-03-10 09:56:44'),
(109, 121, 4, '1', '2022-03-10 10:04:12'),
(110, 122, 4, '1', '2022-03-10 10:11:14'),
(111, 123, 4, '1', '2022-03-10 10:18:24'),
(112, 124, 4, '1', '2022-03-10 10:22:38'),
(113, 125, 3, '1', '2022-03-10 12:45:21'),
(114, 126, 3, '1', '2022-03-10 15:39:19'),
(115, 129, 3, '1', '2022-03-10 16:27:09'),
(116, 130, 3, '1', '2022-03-10 16:35:24'),
(117, 131, 3, '1', '2022-03-10 16:42:16'),
(118, 132, 3, '1', '2022-03-10 16:52:52'),
(119, 134, 3, '1', '2022-03-10 17:21:06'),
(120, 136, 4, '1', '2022-03-11 10:45:55'),
(121, 137, 4, '1', '2022-03-11 10:50:34'),
(122, 138, 4, '1', '2022-03-11 10:55:00'),
(123, 139, 4, '1', '2022-03-11 10:58:47'),
(124, 140, 4, '1', '2022-03-11 11:07:03'),
(125, 142, 4, '1', '2022-03-11 11:14:57'),
(126, 143, 4, '1', '2022-03-11 11:18:32'),
(127, 144, 4, '1', '2022-03-11 11:22:25'),
(128, 145, 4, '1', '2022-03-11 11:39:18'),
(129, 146, 3, '1', '2022-03-11 11:44:00'),
(130, 147, 4, '1', '2022-03-11 11:45:02'),
(131, 148, 4, '1', '2022-03-11 11:51:17'),
(132, 149, 3, '1', '2022-03-11 11:53:13'),
(133, 150, 4, '1', '2022-03-11 11:56:05'),
(134, 152, 4, '1', '2022-03-11 12:05:00'),
(135, 153, 4, '1', '2022-03-11 12:09:14'),
(136, 154, 4, '1', '2022-03-11 12:16:08'),
(137, 158, 3, '1', '2022-03-11 13:41:49'),
(138, 159, 3, '1', '2022-03-11 13:48:28'),
(139, 160, 4, '1', '2022-03-11 14:14:08'),
(140, 161, 4, '1', '2022-03-11 14:20:45'),
(141, 162, 4, '1', '2022-03-11 16:05:13'),
(142, 163, 4, '1', '2022-03-11 16:11:46'),
(143, 164, 4, '1', '2022-03-11 16:15:22'),
(144, 165, 4, '1', '2022-03-11 16:23:54'),
(145, 166, 4, '1', '2022-03-11 16:29:04'),
(146, 168, 4, '1', '2022-03-11 16:37:35'),
(147, 169, 4, '1', '2022-03-11 16:41:32'),
(148, 170, 4, '1', '2022-03-11 16:45:28'),
(149, 171, 3, '1', '2022-03-11 16:46:45'),
(150, 172, 4, '1', '2022-03-11 17:07:47'),
(151, 173, 4, '1', '2022-03-11 17:11:32'),
(152, 174, 4, '1', '2022-03-11 17:15:44'),
(153, 175, 4, '1', '2022-03-11 17:19:07'),
(154, 177, 4, '1', '2022-03-12 09:08:24'),
(155, 178, 4, '1', '2022-03-12 09:10:59'),
(156, 180, 4, '1', '2022-03-12 09:14:49'),
(157, 181, 4, '1', '2022-03-12 09:23:02'),
(158, 182, 3, '1', '2022-03-12 09:26:17'),
(159, 183, 4, '1', '2022-03-12 09:27:34'),
(160, 184, 4, '1', '2022-03-12 09:31:29'),
(161, 185, 4, '1', '2022-03-12 09:40:15'),
(162, 186, 4, '1', '2022-03-12 09:42:31'),
(163, 187, 4, '1', '2022-03-12 09:45:46'),
(164, 189, 3, '1', '2022-03-12 10:02:29'),
(165, 192, 3, '1', '2022-03-12 12:58:16'),
(166, 193, 3, '1', '2022-03-12 13:00:57'),
(167, 194, 3, '1', '2022-03-12 13:03:26'),
(168, 195, 3, '1', '2022-03-12 13:09:35'),
(169, 197, 3, '1', '2022-03-12 13:35:37'),
(170, 198, 3, '1', '2022-03-12 13:38:19'),
(171, 199, 3, '1', '2022-03-12 13:47:13'),
(172, 200, 3, '1', '2022-03-14 08:46:33'),
(173, 201, 3, '1', '2022-03-14 10:27:12'),
(174, 202, 3, '1', '2022-03-14 11:39:58'),
(175, 203, 3, '1', '2022-03-14 12:22:04'),
(176, 204, 3, '1', '2022-03-14 12:38:30'),
(177, 205, 3, '1', '2022-03-14 14:40:13'),
(178, 206, 3, '1', '2022-03-14 14:45:56'),
(179, 207, 3, '1', '2022-03-14 14:52:20'),
(180, 208, 3, '1', '2022-03-14 14:57:33'),
(181, 209, 3, '1', '2022-03-14 15:01:36'),
(182, 211, 3, '1', '2022-03-14 15:11:13'),
(183, 212, 3, '1', '2022-03-14 15:23:44'),
(184, 213, 3, '1', '2022-03-14 15:32:06'),
(185, 215, 3, '1', '2022-03-14 17:21:38'),
(186, 216, 3, '1', '2022-03-14 17:30:56'),
(187, 217, 3, '1', '2022-03-14 17:35:24'),
(188, 219, 3, '1', '2022-03-14 17:44:05'),
(189, 220, 3, '1', '2022-03-15 09:21:10'),
(190, 221, 3, '1', '2022-03-15 09:38:49'),
(191, 222, 3, '1', '2022-03-15 11:42:48'),
(192, 223, 3, '1', '2022-03-15 11:53:24'),
(193, 224, 3, '1', '2022-03-15 12:01:14'),
(194, 225, 3, '1', '2022-03-15 12:33:06'),
(195, 226, 3, '1', '2022-03-15 15:51:18'),
(196, 227, 3, '1', '2022-03-15 15:55:53'),
(197, 228, 3, '1', '2022-03-15 17:00:42'),
(198, 229, 3, '1', '2022-03-16 11:12:19'),
(199, 230, 3, '1', '2022-03-16 11:55:34'),
(200, 231, 3, '1', '2022-03-16 12:00:40'),
(201, 232, 3, '1', '2022-03-16 12:05:30'),
(202, 233, 3, '1', '2022-03-16 12:09:54'),
(203, 234, 3, '1', '2022-03-16 12:22:24'),
(204, 235, 3, '1', '2022-03-16 12:27:11'),
(205, 236, 3, '1', '2022-03-16 12:34:49'),
(206, 237, 3, '1', '2022-03-16 12:39:29'),
(207, 238, 3, '1', '2022-03-16 12:58:13'),
(208, 239, 3, '1', '2022-03-16 13:02:59'),
(209, 240, 3, '1', '2022-03-16 13:16:10'),
(210, 241, 3, '1', '2022-03-16 13:24:45'),
(211, 242, 3, '1', '2022-03-16 13:32:46'),
(212, 243, 3, '1', '2022-03-16 13:58:25'),
(213, 244, 3, '1', '2022-03-16 15:53:50'),
(214, 245, 3, '1', '2022-03-16 17:07:08'),
(215, 246, 3, '1', '2022-03-17 09:38:05'),
(216, 247, 3, '1', '2022-03-17 10:40:00'),
(217, 248, 3, '1', '2022-03-17 11:22:50'),
(218, 249, 3, '1', '2022-03-17 11:41:39'),
(219, 250, 3, '1', '2022-03-17 12:08:55'),
(220, 251, 3, '1', '2022-03-17 13:52:49'),
(221, 252, 3, '1', '2022-03-17 16:33:52'),
(222, 253, 3, '1', '2022-03-17 16:40:33'),
(223, 254, 3, '1', '2022-03-18 09:13:08'),
(224, 255, 3, '1', '2022-03-18 09:24:57'),
(225, 256, 3, '1', '2022-03-18 09:54:50'),
(226, 257, 3, '1', '2022-03-18 10:57:28'),
(227, 258, 3, '1', '2022-03-18 13:29:22'),
(228, 259, 3, '1', '2022-03-19 09:24:57'),
(229, 260, 3, '1', '2022-03-19 09:42:42'),
(230, 261, 3, '1', '2022-03-19 10:18:47'),
(231, 262, 3, '1', '2022-03-19 12:20:36'),
(232, 263, 3, '1', '2022-03-19 12:24:01'),
(233, 264, 3, '1', '2022-03-22 09:12:07'),
(234, 265, 3, '1', '2022-03-22 09:21:14'),
(235, 266, 3, '1', '2022-03-22 09:28:48'),
(236, 267, 3, '1', '2022-03-22 10:05:29'),
(237, 268, 3, '1', '2022-03-22 10:19:45'),
(238, 269, 3, '1', '2022-03-22 10:22:49'),
(239, 270, 3, '1', '2022-03-22 12:14:21'),
(240, 271, 3, '1', '2022-03-22 12:17:43'),
(241, 272, 3, '1', '2022-03-22 17:16:54'),
(242, 273, 3, '1', '2022-03-22 17:21:54'),
(243, 274, 3, '1', '2022-03-22 17:43:07'),
(244, 275, 3, '1', '2022-03-23 11:10:12'),
(245, 276, 3, '1', '2022-03-23 11:15:19'),
(246, 277, 3, '1', '2022-03-23 11:19:33'),
(247, 278, 3, '1', '2022-03-23 11:43:55'),
(248, 279, 3, '1', '2022-03-23 12:06:38'),
(249, 280, 3, '1', '2022-03-23 12:20:57'),
(250, 281, 3, '1', '2022-03-23 12:33:37'),
(251, 282, 3, '1', '2022-03-23 13:21:09'),
(252, 283, 3, '1', '2022-03-23 14:19:08'),
(253, 284, 3, '1', '2022-03-23 15:54:35'),
(254, 285, 3, '1', '2022-03-24 09:05:43'),
(255, 286, 3, '1', '2022-03-24 09:24:59'),
(256, 287, 3, '1', '2022-03-24 09:32:56'),
(257, 288, 3, '1', '2022-03-24 09:44:27'),
(258, 289, 3, '1', '2022-03-24 11:22:39'),
(259, 290, 3, '1', '2022-03-24 12:05:25'),
(260, 291, 3, '1', '2022-03-24 13:16:26'),
(261, 292, 3, '1', '2022-03-24 13:29:52'),
(262, 293, 3, '1', '2022-03-24 15:08:40'),
(263, 294, 3, '1', '2022-03-24 16:37:06'),
(264, 295, 3, '1', '2022-03-24 16:56:21'),
(265, 296, 3, '1', '2022-03-24 17:02:24'),
(266, 297, 10, '1', '2022-03-29 15:27:44'),
(267, 298, 10, '1', '2022-03-29 15:28:27'),
(268, 299, 10, '1', '2022-03-29 15:28:50'),
(269, 300, 10, '1', '2022-03-29 12:46:47'),
(270, 301, 10, '1', '2022-03-29 12:47:36'),
(271, 302, 10, '1', '2022-03-29 12:49:48'),
(272, 303, 10, '1', '2022-03-29 15:29:32'),
(273, 304, 10, '1', '2022-03-29 12:50:34'),
(274, 305, 10, '1', '2022-03-29 12:59:39'),
(275, 306, 10, '1', '2022-03-29 15:30:13'),
(276, 307, 10, '1', '2022-03-29 13:09:24'),
(277, 308, 10, '1', '2022-03-29 13:09:49'),
(278, 309, 10, '1', '2022-03-29 13:10:51'),
(279, 310, 10, '1', '2022-03-29 13:12:10'),
(280, 311, 10, '1', '2022-03-29 13:12:59'),
(281, 312, 10, '1', '2022-03-29 13:17:12'),
(282, 0, 0, '0', NULL),
(283, 0, 0, '0', NULL),
(284, 0, 0, '0', NULL),
(285, 0, 0, '0', NULL),
(286, 0, 0, '0', NULL),
(287, 313, 10, '1', '2022-03-29 14:51:52'),
(288, 314, 10, '1', '2022-03-29 13:21:26'),
(289, 315, 10, '1', '2022-03-29 14:52:48'),
(290, 316, 10, '1', '2022-03-29 14:53:46'),
(291, 317, 10, '1', '2022-03-29 13:23:19'),
(292, 318, 10, '1', '2022-03-29 13:24:17'),
(293, 319, 10, '1', '2022-03-29 15:30:44'),
(294, 320, 10, '1', '2022-03-29 13:25:04'),
(295, 321, 10, '1', '2022-03-29 13:54:51'),
(296, 322, 10, '1', '2022-03-29 13:57:38'),
(297, 323, 10, '1', '2022-03-29 15:31:32'),
(298, 324, 10, '1', '2022-03-29 15:32:03'),
(299, 325, 10, '1', '2022-03-29 15:31:45'),
(300, 326, 10, '1', '2022-03-29 15:32:21'),
(301, 327, 10, '1', '2022-03-29 13:58:23'),
(302, 328, 10, '1', '2022-03-29 15:26:34'),
(303, 329, 10, '1', '2022-03-29 14:49:44'),
(304, 330, 10, '1', '2022-03-29 18:36:01'),
(305, 331, 10, '1', '2022-03-29 18:36:16'),
(306, 332, 10, '1', '2022-03-30 13:43:45'),
(307, 333, 10, '1', '2022-03-30 13:44:12'),
(308, 334, 10, '1', '2022-03-30 13:44:38'),
(309, 335, 10, '1', '2022-03-30 13:45:12'),
(310, 336, 10, '1', '2022-03-30 13:46:47'),
(311, 337, 10, '1', '2022-03-30 13:47:35'),
(312, 338, 10, '1', '2022-03-30 13:48:10'),
(313, 339, 10, '1', '2022-03-30 13:48:39'),
(314, 340, 10, '1', '2022-03-30 16:45:35'),
(315, 341, 10, '1', '2022-03-30 16:45:52'),
(316, 342, 10, '1', '2022-03-30 17:15:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombres`, `aPaternoCliente`, `aMaternoCliente`, `calle`, `colonia`, `ciudad`, `estado`, `tel1`, `tel2`, `cel`, `email`, `status`, `observacion`, `fecha_creacion`, `fecha_mod`, `id_capC`, `id_capM`) VALUES
(1, 'Marcos ', 'Gomez', 'Diaz', 'Arnica 173', 'Alamedas de Zalatitan', 'Tonala', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 351-7322', 'sin@correo.com', '0', '', '2022-03-01 15:27:31', NULL, 3, NULL),
(2, 'Ramón ', 'Hernández ', 'Trujillo', '-', '-', '-', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 227-1449', 'sin@correo.com', '0', '', '2022-03-01 15:30:52', NULL, 3, NULL),
(3, 'Ezequiel', ' Velázquez ', 'Villafuente', 'Francisco I. Madero no. 18', 'Santa Ana Tepetitan', 'Toluca', 'México', '(000) 000-0000', '(000) 000-0000', '(332) 790-9256', 'sin@correo.com', '0', '', '2022-03-01 15:34:23', NULL, 3, NULL),
(4, 'Roberto', 'De Alba', '-', 'Santa Ana no. 6', 'El Briseño', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 343-4075', 'sin@correo.com', '0', '', '2022-03-01 17:51:35', NULL, 3, NULL),
(5, 'Pedro Adrian', 'Rojas', 'Moreno', 'calle coto canopus no. 95 ', 'Fraccionamiento Paseo de los Agaves', 'Tlajomulco de Zuñiga', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 573-8909', 'amely_5555@hotmail.com', '0', '', '2022-03-02 08:33:31', NULL, 3, NULL),
(6, 'Ricardo Adrián ', 'Rojas', 'Moreno', 'coto canopus 95', 'fraccionamiento paseo de los agaves', 'Tlajomulco de Zuñiga', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 573-8909', 'amely_5555@hotmail.com', '0', '', '2022-03-02 08:42:14', NULL, 3, NULL),
(7, 'Martin', ' Hinojosa ', 'Gallegos', 'C. MAzamitla no. 2031', 'Benito Juarez', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 229-8012', 'sin@correo.com', '0', '', '2022-03-02 09:11:01', NULL, 3, NULL),
(8, 'Edgar Juan Carlos', 'Ramirez ', 'Aceves', 'C. Valle Manzanilla no. 833', 'Fraccionamiento Paseos del Valle', 'Tlajomulco de Zuñiga', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 364-4702', 'edgarjc1985@gmail.com', '0', '', '2022-03-02 09:17:58', NULL, 3, NULL),
(9, 'Paula yolanda', 'Amaya ', 'Navarro', 'Cuenta Aguascalientes no. 149', 'Villa fontana residencial', 'tlaquepaque', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 118-9608', 'paolaam0430@gmail.com', '0', '', '2022-03-02 09:33:41', NULL, 3, NULL),
(10, 'Valeria Itzel', 'Flores', 'Gutierrez', 'Paseo solares no. 166', 'Valeira', 'zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(667) 371-7064', 'valeriaflogtz@gmail.com', '0', '', '2022-03-02 10:18:28', NULL, 3, NULL),
(11, 'Miguel Angel ', 'Topete', 'Marcela Alvarez', 'Belisario Dominguez 3993', 'Huentitan El Alto', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(233) 125-2427', '(331) 602-0518', 'sin@correo.com', '0', '', '2022-03-02 11:19:00', NULL, 3, NULL),
(12, 'Carlos ', 'Cortés', 'Guzmán', 'Cda. Trigo no. 6', 'Polanco', 'Sayula', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 820-5117', 'gatocrtz@gmail.com', '0', '', '2022-03-02 11:45:35', NULL, 3, NULL),
(13, 'Jerónimo ', 'Avalos ', 'Gómez', 'Valle de los Pistaches no. 161', 'Hacienda de los Eucaliptos', 'Tlajomulco de zuñiga', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 321-5696', 'si@correo.com', '0', '', '2022-03-02 12:19:39', NULL, 3, NULL),
(14, 'Jeónimo ', 'Avalos ', 'Gómez', 'Valle de los pistaches núm 161', 'Hacienda de los eucaliptos', 'Tlajomulco de Zuñig', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 321-5696', 'sin@correo.com', '0', '-', '2022-03-02 12:21:23', NULL, 3, NULL),
(15, 'J. Javier', 'Sandoval', 'Estupiñan', 'Sabino no. 2253A', 'Del Fresno', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(498) 110-7546', 'sandovalestupinan@gmail.com', '0', '', '2022-03-02 15:12:46', NULL, 3, NULL),
(16, 'Oscar', 'Ocampo ', 'Fuentes', 'C. del Fresno no. 5350', 'Fraccionamiento Chapultepec 9na seccion ', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(553) 913-0167', 'sin@correo.com', '0', '', '2022-03-02 16:27:43', NULL, 3, NULL),
(17, 'José Luis', 'Flores ', 'Blanco', 'Privada Mandarina no. 26', 'Nextipac', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 182-9317', 'chiguiblanco@gmail.com', '0', '', '2022-03-03 10:33:18', NULL, 3, NULL),
(18, 'Alfredo', 'Olguin ', 'Porras', 'Valle de los Sauces no. 153', 'Fraccionamiento Hacienda de los Eucalipt', 'Tlajomulco de Zuñiga', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 658-2000', 'nextel_gdl@prodigy.net.mx', '0', '', '2022-03-03 10:46:13', NULL, 3, NULL),
(19, 'Tereso', 'Acua', 'Chacha', 'Prolongación Niños Heroes no. 512', 'Las Liebres', 'Tlaquepaque', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 880-2753', 'auct740421@hotmail.com', '0', '', '2022-03-03 11:05:58', NULL, 3, NULL),
(20, 'Miguel Garcia', 'Adan Salvador Gomez Angulo', 'Raymundo Garcia ', 'Libertad no 58', 'Mascuala', 'Ixtlahuacan del Rio', 'Jalisco', '(000) 000-0000', '(331) 026-9294', '(333) 137-3287', 'adanga18@gmail.com', '0', '', '2022-03-03 11:16:00', NULL, 3, NULL),
(21, 'Javier ', 'Torres', 'Carvajal', 'C. Gregorio Jimenez no. 32', 'Matatlan', 'Zapotlanejo', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 753-7760', 'javier7531@yahoo.com', '0', '', '2022-03-03 13:02:54', NULL, 3, NULL),
(22, 'Edgar Alejandro ', 'Rodriguez ', 'Marquez', 'Esteban Ramirez no. 213', 'Residencial La Soledad', 'Tlaquepaque', 'Jalisco', '(000) 000-000_', '(000) 000-000_', '(332) 477-0439', 'sin@correo.com', '0', '', '2022-03-03 14:15:40', NULL, 3, NULL),
(23, 'Luis', ' Fernando ', 'Morales', 'Zapotlanejo 105', '-', 'Tepatitlán de Morelos', 'Jalisco', '(000) 000-0000', '(333) 026-6113', '(333) 153-7053', 'sin@correo.com', '0', '', '2022-03-03 17:37:16', NULL, 3, NULL),
(24, 'Rito', 'Gómez', 'Ramos', '-', '-', '-', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 180-7115', 'sin@correo.com', '0', '', '2022-03-04 10:42:39', NULL, 3, NULL),
(25, 'Martin ', 'Jorge ', 'Martinez', 'C. Perdiz no. 1548', '-', 'Morelos', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 197-2977', 'sin@correo.com', '0', '', '2022-03-04 11:25:25', NULL, 3, NULL),
(26, 'Juventino', 'Mojarro', 'Parra', 'Niños Heroes no. 1', 'Sta. Cruz de las Flores', 'Tlajomulco de Zuñiga', 'Jalisco', '(000) 000-0000', '(332) 312-7485', '(332) 034-2366', 'mojarrojuvntino@gmail.com', '0', '', '2022-03-04 13:14:51', NULL, 3, NULL),
(27, 'José Guadalupe', 'Gómez', 'Hernández', 'Puerto Melaque no. 1230', 'Santa Maria', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(332) 789-6117', '(333) 637-6509', 'sin@correo.com', '0', '', '2022-03-04 13:22:32', NULL, 3, NULL),
(28, 'Alberto Manuel', 'Cortes ', 'Cisneros', 'C. hidalgo pte. 93', 'San Miguel Zapoptitlan', 'Poncitlan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 178-0082', 'amcortesc@yahoo.com', '0', '', '2022-03-04 14:50:58', NULL, 3, NULL),
(29, 'Mario Abraham ', 'Ordaz ', 'Padilla', '2 de abril #326 ', 'san Juan ', 'Ocotlán', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(353) 124-0098', 'aster_182@hotmail.com', '0', '', '2022-03-04 17:08:53', NULL, 3, NULL),
(30, 'Ismael', 'Rodriguez', 'Sánchez', 'Calle Concepción loy 76', 'Lázaro Cárdenas', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 495-9583', 'gustavorm377@gmail.com', '0', '', '2022-03-05 09:04:26', NULL, 3, NULL),
(31, 'Victor ', 'Castro', 'Fraga', 'Circuito Basulto no. 115-18-4', 'Valle de los Molinos', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 419-0441', 'victorfraga73@hotmail.com', '0', '', '2022-03-05 09:10:48', NULL, 3, NULL),
(32, 'Gonzalo Alejandro', 'Madrigal ', 'Gómez', 'C. Hda. La rojeña no. 2892', 'Oblatos', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 597-8972', 'amadrigal80@hotmail.com', '0', '', '2022-03-05 09:14:42', NULL, 3, NULL),
(33, 'José Domingo', 'Espinoza ', 'Vázquez', 'Arroyo Agua Caliente no. 373', 'Fraccionamiento Los Ruiseñores', 'Tala', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 866-7452', 'josedomingoespinozavazquez@gmail.com', '0', '', '2022-03-05 10:04:41', NULL, 3, NULL),
(34, 'Jose Luis ', 'García ', 'Sánchez', 'c. Santa rita no. 727', 'Santa Margarita', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 709-1403', 'sin@correo.com', '0', '', '2022-03-05 10:58:59', NULL, 3, NULL),
(35, 'Josue Jonathan', 'Escobedo', 'Aguirre', 'c. Juan Jose de la Garza', 'Lomas del Paraiso', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 109-1025', 'jhosi.escobe@gmail.com', '0', '', '2022-03-05 12:40:56', NULL, 3, NULL),
(36, 'Alfredo ', 'Garza', 'Chavez', 'Campo Verde no 596', 'Campo Real', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 685-1135', 'ajamijo61@gmail.com', '0', '', '2022-03-05 12:48:24', NULL, 3, NULL),
(37, 'Sergio', 'Pérez ', 'Vázquez', 'C. Churubusco no. 129', 'San Juan de Dios', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 558-0656', 'sin@correo.com', '0', '', '2022-03-05 13:03:03', NULL, 3, NULL),
(38, 'Enrique Martin', 'Del Campo', 'González', 'Jorullo no. 1348-B', 'Independencia', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-000_', '(331) 355-6830', 'enriquemac7@hotmail.com', '0', '', '2022-03-07 09:12:03', NULL, 3, NULL),
(39, 'Clarissa ', 'Corona ', 'González', 'Calle guanábana no. 798 ', 'col. Las Huertas', 'San Pedro Tlaquepaque', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 229-7778', 'clarissacorona@hotmail.es', '0', '', '2022-03-07 09:27:03', NULL, 3, NULL),
(40, 'Juan Daniel ', 'Navarro ', 'Velasco', 'C. Miramar no. 60 ', 'canal 58', 'San Pedro Tlaquepaque', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 791-7423', 'sin@correo.com', '0', '', '2022-03-07 09:33:14', NULL, 3, NULL),
(41, 'Ana Luisa ', 'Briones', 'Elenes', 'C. Santa Mónica', 'Centro', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 835-1624', 'anylu_102@yahoo.com.mx', '0', '', '2022-03-07 09:38:06', NULL, 3, NULL),
(42, 'VictoR Hugo', 'Narvaez', 'Baez', 'Arrayanes no. 226', 'Tuzania', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 182-8534', 'narvaezvictorbaez@gmail.com', '0', '', '2022-03-07 09:45:47', NULL, 3, NULL),
(43, 'Raquel ', 'López ', 'Maldonado', 'Calle Santiago de Livier no. 313', 'Francisco I Madero', 'Tlaquepaque', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(554) 544-3439', 'jocelynp210596@gmail.com', '0', '', '2022-03-07 10:03:51', NULL, 3, NULL),
(44, 'José Antonio', 'Sánchez', 'Luna', 'Real de los Olivos no. 100', 'Camichines', 'Tonalá', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 446-8322', 'antonio.sanchez@envases.mx', '0', '', '2022-03-07 10:24:46', NULL, 3, NULL),
(45, 'Tomás Gabriel ', 'Fernández ', 'Flores ', 'Av. Revoución no. 90', 'La punta Gruesa', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(552) 307-5868', 'sin@correo.com', '0', '', '2022-03-07 10:43:31', NULL, 3, NULL),
(46, 'Octavio', 'Santa Maria', '-', 'Sierra de Mapimí Norte no. 286', 'La Cantera', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(331) 053-0803', '(331) 053-0665', 'santamariaoctavio@hotmail.com', '0', '', '2022-03-07 12:10:50', NULL, 3, NULL),
(47, 'Gilberto', 'Duarte Torres', '- Carlos Pulido', 'Calle 27 de Octubre no. 36', 'Centro', 'Minatitlán', 'Colima', '(000) 000-0000', '(000) 000-0000', '(314) 872-0671', 'sgtorres1@hotmail.com', '0', '', '2022-03-07 12:45:13', NULL, 3, NULL),
(48, 'Marco Samuel', 'Peña', 'Hernández', 'C. Atotonilco Norte no. 150', 'Los Alamitos', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 474-2425', 'marco66samuel@gmail.com', '0', '', '2022-03-07 13:08:21', NULL, 3, NULL),
(49, 'Diego Armando', 'Rico', 'Saucedo', 'Cuautla no. 18 ', 'Centro', 'Juchipila', 'Zacatecas', '(000) 000-0000', '(331) 005-0036', '(467) 103-6514', 'sin@correo.com', '0', '', '2022-03-07 13:27:26', NULL, 3, NULL),
(50, 'Sebastian', 'Ramos', '-', 'San Juan Evangelista no. 4050', 'Lomas de San Miguel', 'Tlaquepaque', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 452-1895', 'sebastian610611@gmail.com', '0', '', '2022-03-07 14:49:27', NULL, 3, NULL),
(51, 'Eliseo', 'Alvarado', 'Plascencia', 'Av. 8 de Julio no. 178', 'Nueva Santa Maria', 'Tlaquepaque', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 869-0948', 'eliseoalvaradoaisla@hotmail.com', '0', '', '2022-03-07 16:21:55', NULL, 3, NULL),
(52, 'Guadalupe Reyes Pacheco', '-Jorge Antonio Torres Vivanco', '-', 'Concepción no. 144 Cluster no. 40', 'Haciendas de Santa fé', 'Tlajomulco de Zuñiga', 'Jalisco', '(000) 000-0000', '(333) 327-7241', '(333) 366-8988', 'sin@correo.com', '0', '', '2022-03-07 16:45:16', NULL, 3, NULL),
(53, 'Miguel Angel', ' Mariscal ', 'Diaz ', 'Cerrada del terron #6 ', 'La lagunita', 'Tlajomulco de Zuñiga', 'Jalisco', '(331) 016-1459', '(331) 016-1459', '(331) 016-1459', 'sin.@_._', '0', 'Fecha ingreso 15/01/2022\r\nNúmero orden 220238\r\nNúmero de proyecto 11027', '2022-03-07 17:03:46', NULL, 4, NULL),
(54, 'FELIPE', 'AVILA', 'SOLIS', 'CIRCUITO ZAFIRO 30', 'VALLE DE LOS MOLINOS', 'ZAPOPAN', 'Jalisco', '(000) ___-____', '(000) ___-____', '(332) 828-0301', 'favila68.68@gmail.com', '0', '-', '2022-03-08 09:48:22', NULL, 3, NULL),
(55, 'SAUL', 'VALDEZ', 'RODRIGUEZ', 'SAN MATEO 920', 'PARQUES DE TESISTAN', 'ZAPOPAN', 'Jalisco', '(00_) ___-____', '(00_) ___-____', '(331) 299-9728', 'saulvaldezr@gmail.com', '0', '-', '2022-03-08 10:02:10', NULL, 3, NULL),
(56, 'MIGUEL', 'VELEZ', 'ALABAT', '***', 'JARDINES DE NUEVO MEXICO', 'ZAPOPAN', 'Jalisco', '(000) 000-00__', '(000) 000-00__', '(331) 715-8736', 'transmart.velez@gmail.com', '0', '', '2022-03-08 10:38:46', NULL, 3, NULL),
(57, 'MARCO ANTONIO', 'AVELAR', 'BANDIN', 'C ENEBRO 17E', 'LA MAGDALENA', 'ZAPOPAN', 'Jalisco', '(000) 0__-____', '(000) 00_-____', '(333) 460-3242', '_marco2292@hotmai.com', '0', '', '2022-03-08 13:07:03', NULL, 3, NULL),
(58, 'ENRIQUE', 'CASILLAS', 'ORGANISTA', 'FRAY JUNIPERO SERRA 781 CASA 16', 'PARQUES DE TESISTAN', 'ZAPOPAN', 'Jalisco', '(000) 00_-____', '(000) 00_-____', '(331) 961-4083', '_sin@correo._', '0', '-', '2022-03-08 15:04:15', NULL, 3, NULL),
(59, 'ENRIQUE', 'CASILLAS', 'O.', 'FRAY JUNIPERO SERRA 781 CASA 16', 'PARQUES DE TESISTAN ', 'ZAPOPAN', 'Jalisco', '(000) ___-____', '(000) 0__-____', '(331) 961-4083', 'sin@correo._', '0', '-', '2022-03-08 15:07:11', NULL, 3, NULL),
(60, 'JOSE LUIS', 'MONTES', 'NAVARRO', 'PRIVADA ORQUÍDEA 3176', 'LOMA BONITA EJIDAL', 'TLAQUEPAQUE', 'Jalisco', '(000) 0__-____', '(000) 0__-____', '(333) 407-5294', 'sin@correo._', '0', '3331418108', '2022-03-08 15:35:41', NULL, 3, NULL),
(61, 'Gerardo Adrian', ' Ramirez ', 'Castro', 'Santa elena no. 2218 ', 'Santa Monica', 'Guadalajara', 'Jalisco', '(332) 160-6048', '(332) 160-6048', '(332) 160-6048', 'sin@_._', '0', '', '2022-03-08 16:04:09', NULL, 4, NULL),
(62, 'Erick Raul ', 'Reynoso ', 'Castañeda', 'Av. del Mero no. 19', ' Fraccionamiento Sabalo Country Clu', 'Mazatlán', 'Sinaloa', '(669) 147-0401', '(669) 147-0401', '(669) 147-0401', 'sin.@_._', '0', '', '2022-03-08 16:10:40', NULL, 4, NULL),
(63, 'Carlos Roman ', 'Franco ', 'de Alba', 'Cda Altamira no. 58 A ', 'Centro', 'Tonala', 'Jalisco', '(333) 190-6270', '(333) 190-6270', '(333) 190-6270', 'sin@_._', '0', '', '2022-03-08 16:17:21', NULL, 4, NULL),
(64, 'Erik Jhovany ', 'Dominguez ', 'Muñoz', 'Carretera la Barca no. 139-A ', 'Atotonilquillo', 'Chapala', 'Jalisco', '(332) 209-1875', '(332) 209-1875', '(332) 209-1875', 'jhovany_dominguez@hotmail.com', '0', '', '2022-03-08 16:22:06', NULL, 4, NULL),
(65, 'Luis Felipe ', 'Palacios ', 'Alvarez', 'Calle Magnolias no. 71 ', 'Alamedas de Zalatitan', 'Tonala', 'Jalisco', '(333) 105-9542', '(333) 105-9542', '(333) 105-9542', 'sin@_._', '0', '', '2022-03-08 16:27:23', NULL, 4, NULL),
(66, 'Genaro ', 'Sandoval ', 'Jauregui ', 'Tepatitlan', 'Tepatitlan', 'Tepatitlan', 'Jalisco', '(344) 106-7610', '(344) 106-7610', '(344) 106-7610', 'sin@_._', '0', '', '2022-03-08 16:31:49', NULL, 4, NULL),
(67, 'Alfonso ', 'Hernandez ', 'Barba', 'C. Heroes no. 1113 ', 'Francisco Silva Romero', 'San Pedro Tlaquepaque ', 'Jalisco', '(333) 443-1021', '(333) 443-1021', '(333) 443-1021', 'sin@_._', '0', '', '2022-03-08 16:45:42', NULL, 4, NULL),
(68, 'Carlos ', 'Macias ', 'Ramirez ', 'Prolongación Mariano Otero no. 3815', 'Prolongación Mariano Otero no. 3815', 'Zapopan', 'Jalisco', '(333) 201-4816', '(333) 201-4816', '(333) 201-4816', 'sin@_._', '0', '', '2022-03-08 16:49:56', NULL, 4, NULL),
(69, 'Lizandro ', 'Plasencia ', 'Vázquez ', 'Guayabo 49 a', 'Lomas del camichin', 'Tonala', 'Jalisco', '(333) 724-3520', '(333) 724-3520', '(333) 724-3520', 'sin@_._', '0', 'Vehículo BMW -Color PLATA-HCX829E', '2022-03-08 16:56:28', NULL, 4, NULL),
(70, 'Jose Guadalupe ', 'Garcia ', 'Arena', 'Jardin de las azucenas no. 1503', 'Jardines del vergel', 'Zapopan', 'Jalisco', '(331) 180-8420', '(331) 180-8420', '(333) 366-0421', 'sin@_._', '0', '', '2022-03-08 17:02:45', NULL, 4, NULL),
(71, 'José Guadalupe ', 'Aguilar ', 'serrano', 'Lopez Mateos no. 56-A', 'Las Pintitas', 'El Salto ', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 408-8681', 'sin@correo.com', '0', '', '2022-03-09 09:23:46', NULL, 3, NULL),
(72, 'Luis Alberto ', 'Villa ', 'Alfas ', 'Francisco I. Madero #12 int 1', 'San Juan de Ocotan', 'Zapopan', 'Jalisco', '(333) 186-5496', '(333) 186-5496', '(333) 186-5496', 'sin@_._', '0', '', '2022-03-09 09:24:01', NULL, 4, NULL),
(73, 'Eduardo ', 'Chavira ', 'Murillo', 'sin información', 'sin información', 'sin información', 'Jalisco', '(331) 382-8245', '(331) 382-8245', '(331) 382-8245', 'sin@_._', '0', 'No tiene información de domicilio', '2022-03-09 09:29:01', NULL, 4, NULL),
(74, 'Judith', 'Rodríguez', 'Avelar', 'Av. Universidad No. 185 - Casa U13', 'Puerta del Bosque', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 167-2650', 'euricejudith@gmail.com', '0', '', '2022-03-09 09:33:29', NULL, 3, NULL),
(75, 'Juan Guillermo ', 'Ruiz ', 'Angel ', 'sin información', 'sin información', 'sin información', 'Jalisco', '(332) 106-1454', '(332) 106-1454', '(332) 106-1454', 'sin@_._', '0', 'sin información de domicilio', '2022-03-09 09:34:26', NULL, 4, NULL),
(76, 'Raul ', 'Vega ', 'Tovar', 'Calle Verdin no. 1567', 'Fraccionamiento 8 de Julio', 'sin informacion', 'Jalisco', '(333) 722-0044', '(333) 722-0044', '(333) 722-0044', 'sin@_._', '0', 'sin información de ciudad y estado\r\nRaul Vega Tovar - Aranzazu Vega\r\n', '2022-03-09 09:39:31', NULL, 4, NULL),
(77, 'Eduardo ', 'Escobedo ', 'Olmedo', 'Cuenca 245', 'Fraccionamiento santa fe', 'Sin información', 'Jalisco', '(332) 569-4889', '(332) 569-4889', '(332) 569-4889', 'sin@_._', '0', 'modelo BORA  color DORADO/Sin información ciudad, y estado', '2022-03-09 09:46:34', NULL, 4, NULL),
(78, 'Ramiro Rafael', 'Gómez', 'Mora', 'Prologación Angel Leaño no. 525  Casa 46', 'Parques de Zapopan', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 413-7212', 'sin@correo.com', '0', '', '2022-03-09 09:56:47', NULL, 3, NULL),
(79, 'Francisco Eduardo', ' Ramirez', 'Sin informacón', 'Laureles no. 2530', ' Los Tajetes', 'Zapopan', 'Jalisco', '(331) 470-1939', '(331) 470-1939', '(331) 470-1939', 'sin@_._', '0', '', '2022-03-09 09:57:22', NULL, 4, NULL),
(80, 'José Felipe ', 'Granados ', 'Rosales', 'C. Volcan Moctezuma n0. 133', 'Fraccionamiento Colinas del Roble', 'Tlajomulco de Zuñiga', 'Jalisco', '(332) 190-7057', '(332) 190-7057', '(332) 190-7057', 'sin@_._', '0', 'vehículo color Aqua', '2022-03-09 10:02:18', NULL, 4, NULL),
(81, 'Catalina Aguilera', 'Héctor Miguel ', '-', 'Joaquin Pardave no. 1948', 'Santa Cecilia', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(333) 505-0259', '(331) 145-4809', 'smaror_@hotmail.com', '0', '', '2022-03-09 10:04:57', NULL, 3, NULL),
(82, 'Francisco Javier ', 'Haro ', 'Yañez ', 'Privada negro 4515', 'Fraccionamiento Villa los cantaros', 'sin información', 'Jalisco', '(331) 097-8416', '(331) 097-8416', '(331) 097-8416', 'sin@_._', '0', 'sin información ciudad y estado', '2022-03-09 10:07:02', NULL, 4, NULL),
(83, 'Jose de Jesus ', 'Martinez ', 'Lopez', 'Valle del Rio Danubio no. 186', 'Camichines', 'Tonala', 'Jalisco', '(332) 629-6434', '(332) 629-6434', '(332) 629-6434', 'sin@_._', '0', 'Color de vehículo Verde Agua', '2022-03-09 10:23:30', NULL, 4, NULL),
(84, 'Ramón ', 'López ', 'Chavira ', 'Teruel no. 3261 ', 'Santa Elena de la Cruz', 'Guadalajara', 'Jalisco', '(331) 453-5977', '(331) 453-5977', '(331) 453-5977', 'sin@_._', '0', 'Vehiculo color  Verde aqua', '2022-03-09 10:28:01', NULL, 4, NULL),
(85, 'MANUEL ', 'PARTIDA ', 'GRANADOS', 'RAFAEL VEGA SANCHEZ 454-A ', 'CONSTITUCION', 'Zapopan', 'Jalisco', '(332) 119-6168', '(332) 119-6168', '(332) 119-6168', 'sin@_._', '0', '', '2022-03-09 10:32:32', NULL, 4, NULL),
(86, 'Jesús Alberto ', 'Gómez', ' Moran', 'sin información', 'Lomas de la soledad ', 'Tonala', 'Jalisco', '(333) 473-7215', '(333) 473-7215', '(333) 473-7215', 'sin@_._', '0', 'sin información de calle y número', '2022-03-09 10:37:06', NULL, 4, NULL),
(87, 'José Miguel', 'Galvan ', 'Herrera', 'Cto. V. del Huron no. 215 -25A', 'Fraccionamiento Valle de los Encinos', 'tlajomulco de Zuñiga', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 360-8051', 'sin@correo.com', '0', '', '2022-03-09 11:49:35', NULL, 3, NULL),
(88, 'Lorenzo ', 'García ', 'Becerra ', 'Sin información', 'Sin información', 'Sin información', 'Jalisco', '(331) 213-9560', '(331) 213-9560', '(331) 213-9560', 'sin@_._', '0', 'Sin información domicilio,ciudad,estado', '2022-03-09 11:50:01', NULL, 4, NULL),
(89, 'Luis Fernando ', 'Hernandez ', 'Gudiño', 'Rio tuito no. 617', ' Loma bonita ejidal', 'Zapopan', 'Jalisco', '(331) 237-3713', '(331) 237-3713', '(331) 237-3713', 'sin@_._', '0', 'color vehiculo Gris plata ', '2022-03-09 11:53:43', NULL, 4, NULL),
(90, 'Adalberto ', 'Hernández', 'Montaño', 'C.Antonio Garcia 1', 'Las Lomas Independencia', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 065-9438', 'sin@correo.com', '0', '', '2022-03-09 11:57:01', NULL, 3, NULL),
(91, 'David ', 'Cabral ', 'Arechiga', 'Jardin no. 1849', ' La palmira', 'Zapopan', 'Jalisco', '(332) 491-8960', '(332) 491-8960', '(332) 491-8960', 'sin@_._', '0', 'modelo BORA', '2022-03-09 11:57:41', NULL, 4, NULL),
(92, 'Luis Ramon ', 'Medina', ' Vallejo', 'Sabiduria no. 158-5', ' Infonavit Estadio', 'Guadalajara', 'Jalisco', '(331) 264-3336', '(331) 264-3336', '(331) 264-3336', 'sin@_._', '0', '', '2022-03-09 12:01:57', NULL, 4, NULL),
(93, 'Antonio ', 'Chavez', 'sin información', 'sin información', 'sin información', 'sin información', 'Jalisco', '(333) 137-6304', '(333) 137-6304', '(333) 137-6304', 'sin@_._', '0', 'sin información de domicilio,ciudad,estado y apellido materno', '2022-03-09 12:05:57', NULL, 4, NULL),
(94, 'Isaias ', 'Lizama ', 'Orozco', 'no. 45200 Juan Manuel Ruvalcaba', 'Santa Lucia', 'Zapopan', 'Jalisco', '(333) 456-8340', '(333) 456-8340', '(331) 406-8686', 'sin@_._', '0', 'Juan Manuel Mercado Martinez', '2022-03-09 12:13:27', NULL, 4, NULL),
(95, 'Juan Manuel', ' Ayala', 'sin información', 'Laguna de la Laja 4', 'Geovillas la Arbolada', 'Tlajomulco de Zuñiga', 'Jalisco', '(332) 898-4348', '(332) 898-4348', '(332) 898-4348', 'sin@_._', '0', 'modelo Versa color NARANJA', '2022-03-09 12:21:46', NULL, 4, NULL),
(96, 'Miguel Angel ', 'Hernandez ', 'Saldaña', 'Av. San Gaspar no. 132 ', 'Jalisco', 'Sin información', 'Jalisco', '(332) 384-9983', '(332) 384-9983', '(332) 384-9983', 'sin@_._', '0', 'Miguel Angel Hernandez Saldaña - Mario Hernandez Saldaña', '2022-03-09 12:41:21', NULL, 4, NULL),
(97, 'Antonio de Jesus ', 'Delgado ', 'Nuñez', 'calle Ejido no. 303', ' Las Huertas', 'Tlaquepaque', 'Jalisco', '(331) 030-8542', '(331) 030-8542', '(331) 030-8542', 'sin@_._', '0', '', '2022-03-09 12:49:31', NULL, 4, NULL),
(98, 'Asfaltos Guadalajara - ', 'Hector ', 'Gonzalez', 'Lauro Badillo núm 12 ', 'Brisas de Chapala', 'Chapala', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 799-9751', 'compras@garciaascencio.com', '0', '', '2022-03-09 12:53:17', NULL, 3, NULL),
(99, 'GUSTAVO ALONSO ', 'PASCENCIA ', 'BLANCO', 'PORFIRIO DIAZ 113 ', 'CENTRO', 'Tlajomulco de Zuñiga', 'Jalisco', '(331) 350-0066', '(331) 350-0066', '(331) 350-0066', 'sin@_._', '0', '', '2022-03-09 12:54:54', NULL, 4, NULL),
(100, 'JOSE DANIEL ', 'OCHOA ', 'ESPINOZA', 'Sin información', 'SANTA ELENA ESTADIO', 'Guadalajara', 'Jalisco', '(331) 118-7312', '(331) 118-7312', '(331) 118-7312', 'sin@_._', '0', '', '2022-03-09 14:23:56', NULL, 4, NULL),
(101, 'CARLOS ', 'PALOMINO', ' CAMACHO', 'SANTA LUCIA 140 ', 'CENTRO', 'Zapopan', 'Jalisco', '(331) 365-5609', '(331) 365-5609', '(331) 365-5609', '', '0', '', '2022-03-09 14:28:04', NULL, 4, NULL),
(102, 'GILBERTO ', 'CLARK ', 'MONTEJO', 'PUERTA DEL SOL 105 ', 'REAL DEL SOL', 'TLAJOMULCO DE ZUÑIGA', 'Jalisco', '(332) 784-2217', '(332) 784-2217', '(332) 784-2217', 'sin@_._', '0', '', '2022-03-09 14:32:23', NULL, 4, NULL),
(103, 'GLORIA MATILDE ', 'SERRANO ', 'GONZALEZ', 'EL ROSARIO 783-A ', 'JARIDNES DE LOS ARCOS', 'Guadalajara', 'Jalisco', '(331) 231-5046', '(331) 231-5046', '(331) 231-5046', 'sin@_._', '0', '', '2022-03-09 14:36:51', NULL, 4, NULL),
(104, 'Abraham ', 'Arroyo ', 'Magallon', 'Calle salvadoreño 58', 'Valle de los olivos', 'Ixtlahuacan de los membrillos', 'Jalisco', '(331) 773-3037', '(331) 773-3037', '(331) 773-3037', 'sin@_._', '0', '', '2022-03-09 14:45:15', NULL, 4, NULL),
(105, 'Héctor Javier ', 'de la Torre ', 'Escobedo', 'San Juan de la Cruz no. 376 int. 2 ', 'Camino Real', 'Zapopan', 'Jalisco', '(332) 809-1662', '(332) 809-1662', '(333) 900-5627', 'sin@_._', '0', '', '2022-03-09 14:52:51', NULL, 4, NULL),
(106, 'Rodolfo ', 'Amaral ', 'Gonzalez ', 'Elba no. 1023 -2 ', 'Chapultepec', 'Guadalajara', 'Jalisco', '(331) 419-5753', '(331) 419-5753', '(331) 419-5753', 'sin@_._', '0', '', '2022-03-09 15:10:56', NULL, 4, NULL),
(107, 'Fabian ', 'Altamirano ', 'Sandoval ', 'Alvaro Obregon no. 35 ', 'San Luis Soyatlan', 'Tuxcueca ', 'Jalisco', '(331) 717-5544', '(331) 717-5544', '(331) 717-5544', 'sin@_._', '0', '', '2022-03-09 15:15:15', NULL, 4, NULL),
(108, 'Rogelio ', 'Alcaraz ', 'Ocampo ', ' Lemonier no. 226', ' Lomas Universidad', 'Zapopan', 'Jalisco', '(331) 603-7530', '(331) 603-7530', '(331) 603-7530', 'sin@_._', '0', '', '2022-03-09 15:22:21', NULL, 4, NULL),
(109, 'Guillermo ', 'Mancera ', 'Rodriguez', 'Sin información', 'Sin información', 'Sin información', 'Jalisco', '(452) 112-3029', '(452) 112-3029', '(452) 112-3029', 'comar.direccion@hotmail.com', '0', 'Sin información de domicilio,ciudad ni estado', '2022-03-09 15:25:54', NULL, 4, NULL),
(110, 'Rigoberto ', 'Hernandez ', 'Rodriguez', 'Fuente Brillante no. 1730 ', 'Villa Fontana', 'Zapopan', 'Jalisco', '(333) 247-8765', '(333) 247-8765', '(333) 038-4384', 'sin@_._', '0', ' \r\n', '2022-03-09 15:29:28', NULL, 4, NULL),
(111, 'Xicotencatl ', 'Aceves', ' Buendia', 'Circunvalación del gorreon no. 106 ', 'Fraccionamiento Puerta Grande', 'Tonala', 'Jalisco', '(332) 288-6941', '(332) 288-6941', '(332) 288-6941', 'sin@_._', '0', '', '2022-03-09 15:33:06', NULL, 4, NULL),
(112, 'Raul ', 'Soto ', 'Bazan ', 'Sin información', 'Cuauhtemoc', 'CDMX', 'CDMX', '(556) 477-5282', '(556) 477-5282', '(556) 477-5282', 'sin@_._', '0', 'Sin información de domicilio', '2022-03-09 15:36:46', NULL, 4, NULL),
(113, 'Roberto armando ', 'Castillo', 'sin información', 'Prof. Manuel Romero 49 ', 'Industrial', 'Matamoros', 'Tamaulipas', '(868) 170-4621', '(868) 170-4621', '(336) 059-2268', 'sin@_._', '0', '', '2022-03-09 15:41:36', NULL, 4, NULL),
(114, 'César Ricardo', 'Aldana', 'Murrieta', 'C. Madre Perla no. 56', 'Fraccionamiento La Perla ', 'Tlajomulco de Zuñiga', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 647-4561', 'murris60@hotmail.com', '0', '', '2022-03-09 15:52:36', NULL, 3, NULL),
(115, 'Helios ', 'Aponte', '-', 'Paseo de los Chopos 2611', 'Tabachines', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 090-2828', 'helios74@hotmail.com', '0', '', '2022-03-09 17:14:52', NULL, 3, NULL),
(116, 'Marcelino ', 'Gómez ', 'Morales', 'Aurelio Ortega no. 1176-10', 'La Seatle', 'Zapopan', 'Jalisco', '(000) 000-0000', '(333) 148-0482', '(331) 989-0380', 'adriana_tasik@hotmail.com', '0', '', '2022-03-10 09:27:03', NULL, 3, NULL),
(117, 'Alan', 'Omar', '-', '-', '-', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 724-1077', 'sin@correo.com', '0', '', '2022-03-10 09:44:48', NULL, 3, NULL),
(118, 'Carlos ', 'Orozco ', 'Hernández', 'Bernardo de Balbuena No. 378 ', 'Ladrón de Guevara', 'Guadalajara', 'Jalisco', '(332) 239-6756', '(332) 239-6756', '(332) 239-6756', 'proyectosit67@gmail.com', '0', '', '2022-03-10 09:46:46', NULL, 4, NULL),
(119, 'Óscar ', 'Morales', 'Lupercio', ' lago 9 num 2002', 'Rivera de chante', 'Jocotepec ', 'Jalisco', '(333) 177-7714', '(333) 177-7714', '(333) 177-7714', 'sin@_._', '0', '', '2022-03-10 09:55:02', NULL, 4, NULL),
(120, 'Alan Jesus ', 'Gonzalez ', 'Herrera', 'Brisas Marina no. 3838 ', 'Miramar', 'sin información', 'Jalisco', '(331) 145-7782', '(331) 145-7782', '(331) 145-7782', 'sin@_._', '0', 'sin información ciudad y estado', '2022-03-10 10:02:39', NULL, 4, NULL),
(121, 'Jose Luis', 'sin información', 'sin información', 'sin información', 'sin información', 'sin información', 'Jalisco', '(331) 972-9426', '(331) 972-9426', '(331) 972-9426', 'sin@_._', '0', 'sin información apellidos,domicilio,ciudad,estado', '2022-03-10 10:09:27', NULL, 4, NULL),
(122, 'Luis angel ', 'Cárdenas ', 'Sin información', 'Hacienda corralejos 1285a ', 'Sin información', 'San Isidro', 'Jalisco', '(523) 312-2571', '(523) 312-2571', '(523) 312-2571', 'sin@_._', '0', '', '2022-03-10 10:16:42', NULL, 4, NULL),
(123, 'Sergio Alberto ', 'Contreras ', 'Garibay', 'sin información', 'sin información', 'sin información', 'Jalisco', '(473) 111-8584', '(473) 111-8584', '(473) 111-8584', 'sin@_._', '0', 'sin información domicilio', '2022-03-10 10:21:10', NULL, 4, NULL),
(124, 'J. Ediwiges ', 'Hernández', 'Tejeda', 'Calle Juan Diego no. 9', 'Indigenas, San Juan de ocotan', 'zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 564-3065', 'sin@correo.com', '0', '', '2022-03-10 12:42:33', NULL, 3, NULL),
(125, 'José', 'Gómez', 'Reyna', 'C. Paseo de los Robles no. 4080', 'San Wenceslao', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 021-4611', 'sin@correo.com', '0', '', '2022-03-10 15:29:23', NULL, 3, NULL),
(126, 'Salvador Gómez  Vega', 'Iván Gomez Vega', '-', 'C. Isla Mexcalititan 4780', 'Parques Colon', 'San Pedro Tlaquepaque', 'Jalisco', '(000) 000-0000', '(333) 807-1990', '(333) 171-1747', 'ivangomez22@hotmai.com', '0', '', '2022-03-10 15:36:52', NULL, 3, NULL),
(127, 'José Luis ', 'Plascencia', 'Hernández', 'C. Felipe Angeles no. 1443', 'San Martin', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 184-7115', 'sin@correo.com', '0', '', '2022-03-10 15:56:32', NULL, 3, NULL),
(128, 'Jonathan Oscar', 'Zaragoza ', 'Ramirez', 'Manuel M. Diegues no. 119', 'El Rosario', 'Tonalá', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 016-7274', 'sin@correo.com', '0', '', '2022-03-10 16:11:23', NULL, 3, NULL),
(129, 'José Antonio', 'Luna ', 'Carlos', 'C. Bruno Martinez no. 4392', 'Balcones del Cuatro', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 408-7441', 'sin.@correo.com', '0', '', '2022-03-10 16:23:18', NULL, 3, NULL),
(130, 'Zenaido Escogido ', 'Aaron Escogido', '-', 'Guillermo Vaca no. 4105', 'Patria', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 707-9115', 'sin@correo.com', '0', '', '2022-03-10 16:30:55', NULL, 3, NULL),
(131, 'Mónico', 'Rincón', 'Rodriguez', 'Luis Covarrubias 10', 'Valentin Gomez Farías', 'Tlaquepaque', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 540-5287', 'sin@correo.com', '0', '', '2022-03-10 16:39:15', NULL, 3, NULL),
(132, 'Juan Arturo', 'Morales', 'Rodriguez', 'C. Jesús de la Torre no 3549', 'Paseos del Sol', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 662-2993', 'sin@correo.com', '0', '', '2022-03-10 16:46:07', NULL, 3, NULL),
(133, 'Oscar Alejandro ', 'Perazzini', 'Sánchez', '-', 'Loma Bonija Ejidal', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 184-3027', 'sin@correo.com', '0', '', '2022-03-10 17:05:58', NULL, 3, NULL),
(134, 'Gerardo ', 'Cabral', ' León', 'Hidalgo s-n', '-', '-', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 154-6142', 'sin@correo.com', '0', '', '2022-03-10 17:19:32', NULL, 3, NULL),
(135, 'Fernando ', 'Hernandez ', 'Gomez', 'Hda Santa Cruz del Valle no. 2136 ', 'Oblatos', 'Guadalajara', 'Jalisco', '(331) 330-7620', '(331) 330-7620', '(332) 450-6023', 'sin@_._', '0', 'Fernando Hernandez Gomez- Adriana Cabrera Castillo (Dueña)', '2022-03-11 10:42:58', NULL, 4, NULL),
(136, 'Gabriel ', 'Gonzalez ', 'Carrasco', 'Nieve no. 326 ', 'Paseos Universidad', 'Zapopan', 'Jalisco', '(331) 459-0066', '(331) 459-0066', '(333) 457-9151', 'sin@_._', '0', 'Gabriel Gonzalez Carrasco-Ana Maria Olivia Casillas Villarreal\r\n', '2022-03-11 10:48:50', NULL, 4, NULL),
(137, 'Juan Carlos ', 'Ortega ', 'Castellanos', 'C. La Acordada Oriente no. 1571 ', 'Jardines del Country', 'Guadalajara', 'Jalisco', '(333) 185-5480', '(333) 185-5480', '(333) 185-5480', 'sin@_._', '0', '', '2022-03-11 10:53:20', NULL, 4, NULL),
(138, 'Domingo ', 'Ramos ', 'Tarin', 'sin información', 'sin información', 'sin información', 'Jalisco', '(321) 102-3808', '(321) 102-3808', '(321) 102-3808', 'sin@_._', '0', 'sin información de domicilio, ciudad y estado', '2022-03-11 10:57:24', NULL, 4, NULL),
(140, 'Macario ', 'Mercado ', 'Sin información', 'Sin información', 'Sin información', 'Sin información', 'Jalisco', '(332) 580-9794', '(332) 580-9794', '(332) 580-9794', 'sin@_._', '0', 'Sin información domicilio,ciudad y estado', '2022-03-11 11:05:54', NULL, 4, NULL),
(141, 'Martin ', 'Zapata', 'Virgen', 'Volcan mayon 5818 ', 'Huentitan el bajo', 'Guadalajara', 'Jalisco', '(331) 691-8371', '(331) 691-8371', '(331) 691-8371', 'sin@_._', '0', '', '2022-03-11 11:13:50', NULL, 4, NULL),
(142, 'Manuel ', 'Hernandez', 'Orozco', 'Loma Mancota no. 8053 ', 'Loma Dorada', 'Sin información', 'Jalisco', '(332) 457-0514', '(332) 457-0514', '(332) 457-0514', 'sin@_._', '0', 'Sin información ciudad y estado', '2022-03-11 11:17:23', NULL, 4, NULL),
(143, 'Ricardo', ' Arriaga ', 'Olivares ', 'Perth 541-14 ', 'Fraccionamiento valle de los molinos', 'Zapopan', 'Jalisco', '(331) 074-5585', '(331) 074-5585', '(331) 074-5585', 'sin@_._', '0', '', '2022-03-11 11:21:12', NULL, 4, NULL),
(144, 'Juan Antonio ', 'Valenzuela ', 'Venegas', 'Cerro Sur no 1051 ', 'Lomas de Independencia', 'Guadalajara', 'Jalisco', '(331) 353-8201', '(331) 353-8201', '(331) 353-8201', 'sin@_._', '0', '', '2022-03-11 11:38:10', NULL, 4, NULL),
(145, 'Daniel', 'Hermosillo', ' Mendoza', 'Valle de zapotlan #3133 ', 'Col. Parque Real', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 073-7595', 'dhermosillo260@gmail.com', '0', '', '2022-03-11 11:42:43', NULL, 3, NULL),
(146, 'Leonardo ', 'Ruiz ', 'Aguiar', 'Sin información', 'Sin información', 'Sin información', 'Jalisco', '(311) 111-8800', '(311) 111-8800', '(311) 111-8800', 'sin@_._', '0', 'Sin información domicilio,ciudad y estado', '2022-03-11 11:43:49', NULL, 4, NULL),
(147, 'Jorge ', 'Framfky', ' Steinpreis ', 'Ciudad Real no. 29 ', 'Santa Anita', 'Sin información', 'Jalisco', '(331) 048-0787', '(331) 048-0787', '(331) 048-0787', 'sin@_._', '0', 'Sin información ciudad y estado', '2022-03-11 11:49:59', NULL, 4, NULL),
(148, 'José de Jesús ', 'Vázqueza', 'Camacho', 'Av. Madre Selva no. 165', 'Alamedas de Zalatitan', 'Tonalá ', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 131-6948', 'chuy_cum@hotmail.com', '0', '', '2022-03-11 11:50:51', NULL, 3, NULL),
(149, 'Hugo', 'Diaz', 'Sin información', 'Coto 1 casa 201 ', 'Fraccionamiento monteverde', 'Sin información', 'Jalisco', '(331) 614-9449', '(331) 614-9449', '(331) 614-9449', 'sin@_._', '0', 'Sin información ciudad, estado', '2022-03-11 11:54:54', NULL, 4, NULL),
(150, 'Saul Jhonatan ', 'Ortiz ', 'Guerrero ', 'Melchor Ocampo no. 455', ' Ciudad Guzman', 'sin infromación', 'Jalisco', '(341) 430-8249', '(341) 430-8249', '(341) 430-8249', 'sin@_._', '0', 'sin infromación ciudad', '2022-03-11 12:03:52', NULL, 4, NULL),
(151, 'Gabriela ', 'Martín del Campo ', 'Padilla', 'Vereda del Azulejo #45', 'Sin información', 'Zapopan', 'Jalisco', '(333) 440-4529', '(333) 440-4529', '(333) 440-4529', 'sin@_._', '0', 'Sin información Colonia', '2022-03-11 12:07:38', NULL, 4, NULL),
(152, 'J. Jesus ', 'Guerrero ', 'Moreno ', 'Monte Alban no. 2331', ' Belisario Dominguez', 'Guadalajara', 'Jalisco', '(331) 333-1654', '(331) 333-1654', '(331) 333-1654', 'sin@_._', '0', '', '2022-03-11 12:14:27', NULL, 4, NULL),
(153, 'Adrian', 'Barragan', 'Checa', 'Privada Aztlan no. 86A', 'Ciudad Aztlán', 'Tonalá', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 998-2224', 'sin@correo.com', '0', '', '2022-03-11 12:38:41', NULL, 3, NULL),
(154, 'Raul Vega Tovar', 'Aranzazu Vega', '-', 'Cale Verdin no. 1567', 'fraccionamiento 8 de Julio ', 'Tlaquepaque', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 722-0044', 'sin@correo.com', '0', '', '2022-03-11 12:43:35', NULL, 3, NULL),
(155, 'Higinio', 'Garcia', 'Hernandez', 'C. Santander no. 2572', 'Santa Elena Alcalde ', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 105-0643', 'sin@correo.com', '0', '', '2022-03-11 13:26:44', NULL, 3, NULL),
(156, 'Moises ', 'Jarero', 'Reynoso', 'C. Juarez no. 114', 'Tonala Centro', 'Tonalá ', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 141-7154', 'sin@correo.com', '0', '', '2022-03-11 13:36:59', NULL, 3, NULL),
(157, 'Maria Ponce', 'Francisco Javier Lemus Ponce', '-', 'C. Fray Juan de San Miguel no. 295', 'Alcalde Barranquitas', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 117-9925', 'sin@correo.com', '0', '', '2022-03-11 13:47:06', NULL, 3, NULL),
(158, 'Ana Isabel ', 'Morales ', 'Ortiz', 'San Rafael Arcángel 4194-1 ', 'Lomas de San Miguel,', 'Tlaquepaque', 'Jalisco', '(332) 582-0104', '(332) 582-0104', '(332) 582-0104', 'sin@_._', '0', '', '2022-03-11 14:12:56', NULL, 4, NULL),
(159, 'Daniel ', 'Hermosillo ', 'Mendoza', 'Valle de zapotlan #3133', 'Parque Real', 'Sin información', 'Jalisco', '(333) 073-7595', '(333) 073-7595', '(333) 073-7595', 'sin@_._', '0', 'Sin información ciudad y estado', '2022-03-11 14:16:25', NULL, 4, NULL),
(160, 'Martín Hugo', ' Reynoso ', 'Pérez', 'Arco nuremberg 1126 interior 11', 'Arcos de Zapopan', 'Zapopan', 'Jalisco', '(332) 403-0896', '(332) 403-0896', '(332) 403-0896', 'sin@_._', '0', '', '2022-03-11 16:10:09', NULL, 4, NULL),
(161, 'Silverio ', 'Infante ', 'Zavala', 'abasolo Atotnilco el Bajo', 'abasolo Atotnilco el Bajo', 'Villa Victoria', 'Jalisco', '(331) 799-7067', '(331) 799-7067', '(331) 799-7067', 'sin@_._', '0', '', '2022-03-11 16:14:06', NULL, 4, NULL),
(162, 'Marco Antonio ', 'Perez ', 'Gomez', 'Sin información', 'Sin información', 'Sin información', 'Jalisco', '(333) 475-0590', '(333) 475-0590', '(333) 475-0590', 'sin@_._', '0', 'Sin información domicilio, ciudad y estado', '2022-03-11 16:22:37', NULL, 4, NULL),
(163, 'Carlos Benjamin ', 'Ornelas ', 'Ortiz', 'Privada Sindicato no. 1148 ', 'Francisco Silva Romero', 'Sin información', 'Jalisco', '(331) 209-2151', '(331) 209-2151', '(331) 209-2151', '', '0', 'Sin información ciudad y estado', '2022-03-11 16:27:46', NULL, 4, NULL),
(164, 'JORGE ', 'PROA ', 'VARGAS', 'Circuito de ARTESANO 602', 'Los Cantaros', 'TLAJOMULCO DE ZUÑIGA', 'Jalisco', '(332) 544-7117', '(332) 544-7117', '(332) 544-7117', 'sin@_._', '0', 'Modelo BORA color PLATA', '2022-03-11 16:31:33', NULL, 4, NULL),
(165, 'Manuel ', 'Aleman ', 'Gomez ', 'Obregon no. 58 ', 'Las Pintitas', 'El Salto', 'Jalisco', '(333) 232-8390', '(333) 232-8390', '(333) 232-8390', 'sin@_._', '0', '', '2022-03-11 16:36:10', NULL, 4, NULL),
(166, 'FRANCISCO ', 'GOMEZ ', 'MEAVE', 'PASEO DEL EUCALIPTO 272', 'BOSQUES DEL CENTINELA 2', 'Zapopan', 'Jalisco', '(332) 160-9723', '(332) 160-9723', '(332) 160-9723', 'sin@_._', '0', '', '2022-03-11 16:40:23', NULL, 4, NULL),
(167, 'Ramses Javier ', 'Carrillo ', 'Casillas', 'Sin información', 'Sin información', 'Sin información', 'Jalisco', '(331) 466-1583', '(331) 466-1583', '(331) 466-1583', 'sin@_._', '0', 'Sin información domicilio,ciudad y estado', '2022-03-11 16:43:47', NULL, 4, NULL),
(168, 'Alfonso ', 'Rubio ', 'Hernández', 'C. ERmita no. 1261', 'Chapalita', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 601-4842', 'sin@correo.com', '0', '', '2022-03-11 16:45:18', NULL, 3, NULL),
(169, 'Francisco Javier ', 'Hernandez ', 'Hernandez', ' Rosales no. 18 ', 'San Martin de las Flores', 'San Pedro Tlaquepaque', 'Jalisco', '(332) 664-9569', '(332) 664-9569', '(332) 664-9569', 'sin@_._', '0', 'Francisco Javier Hernandez Hernandez- Mónica Lopez Vazquez', '2022-03-11 17:06:28', NULL, 4, NULL),
(170, 'Fernando ', 'Rivas', 'Sin información', ' Hacienda huerta vieja número 1283-2 ', 'Oblatos', 'Sin información', 'Jalisco', '(332) 114-7315', '(332) 114-7315', '(332) 114-7315', 'sin@_._', '0', 'Sin información ciudad y estado', '2022-03-11 17:10:18', NULL, 4, NULL),
(171, 'Bertha Angélica ', 'Rodríguez ', 'Oropeza', 'Agustín Rivera #230 casa 3', 'Azalea Santa Anita', 'Tlaquepaque', 'Jalisco', '(331) 574-0272', '(331) 574-0272', '(331) 574-0272', 'sin@_._', '0', '', '2022-03-11 17:14:34', NULL, 4, NULL),
(172, 'Martin ', 'Gutierrez', 'Sin información', 'Francisco Tejeda 1917', ' Guadalupana', 'Guadalajara', 'Jalisco', '(333) 140-2229', '(333) 140-2229', '(333) 140-2229', 'sin@_._', '0', '', '2022-03-11 17:17:51', NULL, 4, NULL),
(173, ' LUIS ANTONIO ', 'RIPOL', 'DREA PRODUCCIONES S.DE R.L DE ', 'CIRCUNVALACION SAN EDUARDO NO. 399 ', 'SAN JUAN DE OCOTAN', 'Zapopan', 'Jalisco', '(335) 305-3585', '(335) 305-3585', '(332) 624-1724', 'sin@_._', '0', 'DREA PRODUCCIONES S.DE R.L DE C.V - LUIS ANTONIO RIPOL - DANIEL IBARRA', '2022-03-12 09:07:01', NULL, 4, NULL),
(174, 'Armando Rafael ', 'Regalado', 'Esparza', 'Privada Lazaro Cardenas no 38', 'Lopez Mateos', 'San Pedro Tlaquepaque', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 843-9012', 'armando-regalado@hotmail.com', '0', '', '2022-03-12 09:12:26', NULL, 3, NULL),
(175, 'Blanca Angelica ', 'Rodriguez', ' Martinez', 'Felipe Angeles y Esteban Alatorre ', 'Sin información', 'Sin información', 'Jalisco', '(333) 460-3807', '(333) 460-3807', '(333) 460-3807', 'sin@_._', '0', 'Sin información colonia,ciudad y estado', '2022-03-12 09:13:40', NULL, 4, NULL),
(176, 'Eusebio ', 'Hernandez ', 'Martinez ', 'SAntos Degollado no. 3A', ' Centro', 'Tlaquepaque', 'Jalisco', '(331) 073-1033', '(331) 073-1033', '(331) 073-1033', 'sin@_._', '0', '', '2022-03-12 09:21:07', NULL, 4, NULL),
(177, 'Victor hugo', 'Zamora', '-', 'Paseo Solares no. 999 Coto 8 Casa 88', 'Residencial solares', 'zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 718-5518', 'v_65@hotmail.com', '0', '', '2022-03-12 09:24:14', NULL, 3, NULL),
(178, 'Juan Carlos ', 'Jimenez', 'Sin información', 'Río San Juan de Dios #1253 ', 'Colonia Atlas ', 'Sin información', 'Jalisco', '(331) 435-7373', '(331) 435-7373', '(331) 435-7373', 'sin@_._', '0', 'Sin información ciudad', '2022-03-12 09:26:24', NULL, 4, NULL),
(179, 'Ricardo ', 'Hernandez ', 'Serratos', 'Sin información', 'Villas los cantaros', 'San Pedro Tlaquepaque ', 'Jalisco', '(332) 385-0897', '(332) 385-0897', '(332) 385-0897', 'sin@_._', '0', 'Sin información de domicilio', '2022-03-12 09:30:03', NULL, 4, NULL),
(180, 'Hilario ', 'Carmona ', 'Antonio', 'Francisco Ruiz de León Dr Atl', 'sin información', 'Guadalajara', 'Jalisco', '(331) 826-0304', '(331) 826-0304', '(331) 826-0304', 'sin@_._', '0', 'sin información colonia', '2022-03-12 09:39:03', NULL, 4, NULL),
(181, 'Juan Misael ', 'Aguilar ', 'Santana', 'Gaillardia no. 13 B ', 'La Alcantarilla', 'El Salto', 'Jalisco', '(333) 062-1196', '(333) 062-1196', '(333) 062-1196', 'sin@_._', '0', '', '2022-03-12 09:44:36', NULL, 4, NULL),
(182, 'Carlos Arturo', 'Alcala ', 'Velazquez', 'C. San Camilo no. 2962 - 30', 'Parques de Santa Cruz del Valle 45615', 'San Pedro Tlaquepaque', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 666-8401', 'elchifu75@gmail.com', '0', '', '2022-03-12 09:49:59', NULL, 3, NULL),
(183, 'Francisco Alejandro', 'Rodriguez ', 'Soto', 'C. Longinos Cadena no. 1422', 'Echeverria ', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 024-4081', 'si723760@iteso.mx', '0', '', '2022-03-12 09:59:57', NULL, 3, NULL),
(184, 'Sandra Patricia', 'Navarro ', 'Albizo', 'Juventino Rosas no. 247', 'Centro', 'Ameca ', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 109-1244', 'sin@correo.com', '0', '', '2022-03-12 11:14:07', NULL, 3, NULL),
(185, 'Jorge Francisco', 'Bojorquez', 'Serrano', '-', 'Villa Hermosa', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(442) 396-0577', 'sin@correo.com', '0', '', '2022-03-12 11:25:50', NULL, 3, NULL),
(186, 'Jenny', 'Mercado', 'Hernández', 'Av. Camacho no. 3305-4', 'Jacarandas', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(552) 730-0612', 'sin@correo.com', '0', '', '2022-03-12 11:29:00', NULL, 3, NULL),
(187, 'Gustavo ', 'Alonso ', 'Pascencia Blanco', 'Porfirio diaz no. 113', 'Centro', 'Tlajomulco de zuñia', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 350-0066', 'sin@correo.com', '0', '', '2022-03-12 12:56:54', NULL, 3, NULL),
(188, 'Jose Luis', '-', '-', '-', '-', '-', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 972-9426', 'sin@correo.com', '0', '', '2022-03-12 12:59:46', NULL, 3, NULL),
(189, 'Martin', 'Gutierrez', '-', 'Francisco Tejeda no. 1917', 'Guadalupana', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 140-2229', 'sin@correo.com', '0', '', '2022-03-12 13:02:15', NULL, 3, NULL),
(190, 'Alberto', 'Pérez ', 'Abreu', 'C. Paseo del Manantial no. 1928', 'Colinas de San Javier', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 536-0926', 'sin.@correo.com', '0', '', '2022-03-12 13:08:15', NULL, 3, NULL),
(191, 'Jesús ', 'Correa', 'Hernández', 'Juan García villagran no. 15', 'Rancho Nuevo', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(333) 415-9483', '(331) 452-7141', 'jesuscorrea548@gmail.com', '0', '', '2022-03-14 08:44:49', NULL, 3, NULL),
(192, 'Mauricio', 'Vega', 'Aguilar', 'Av. Servidor Publico no. 1425', '-', 'zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 338-8153', 'mauu9109qroo@hotmail.com', '0', '', '2022-03-14 10:25:23', NULL, 3, NULL),
(193, 'Mirsha Eduardo', 'Solis', 'Ramires', '-', '-', '-', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 871-0753', 'sin@correo.com', '0', '', '2022-03-14 11:37:26', NULL, 3, NULL),
(194, 'Eulalio', 'Rodriguez', 'Rocha', 'Loma Santa anita no. 181 ', 'Lomas de San Agustin', 'Tlajomulco de Zuñiga', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 465-8185', 'sin@correo.com', '0', '', '2022-03-14 12:19:45', NULL, 3, NULL),
(195, 'Carlos Sergio ', 'Gómez ', 'Orozco', '-', '-', '-', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 256-2856', 'sin@correo.com', '0', '', '2022-03-14 12:37:24', NULL, 3, NULL),
(196, 'Blanca Angelica', 'Rodriguez', 'Martinez', 'Felipe Angeles y Esteban Alatorre', '-', '-', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 460-3807', 'sin@correo.com', '0', '', '2022-03-14 13:49:06', NULL, 3, NULL),
(197, 'Luis Martin', 'Fajardo', 'López', '-', '-', 'Cd Guzman', 'Jalisco', '(000) 000-0000', '(342) 101-5767', '(342) 105-0579', 'sin@correo.com', '0', '', '2022-03-14 14:38:15', NULL, 3, NULL),
(198, 'Octavio ', 'Arreola', 'Aviles', 'Rinconada de los Naranjos no. 52', 'Paseos del Camichin', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 576-5986', 'sin@correo.com', '0', '', '2022-03-14 14:44:26', NULL, 3, NULL),
(199, 'Elizabeth Margarita', 'Cervantes ', 'Santoyo', 'C. del Agua Poniente no. 490', 'La Magdalena', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 068-7407', 'sin@correo.com', '0', '', '2022-03-14 14:50:14', NULL, 3, NULL),
(200, 'Ana Elizabeth', 'Sahagun Ruiz', 'Jorge Sahagun', 'Calle 2 Bocas no. 1599', 'Fraccionamiento 18 de marzo ', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 310-1210', 'sin@correo.com', '0', '', '2022-03-14 14:55:58', NULL, 3, NULL),
(201, 'Simón Pedro', 'Coronado', 'Enciso', 'C. Presa Santa Rosa no. 587', 'San Joaquin', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 110-0174', 'sin@correo.com', '0', '', '2022-03-14 15:00:09', NULL, 3, NULL),
(202, 'Jorge Esteban', 'Fernandez', 'Martinez', 'Calle Huachinango no. 139', 'Misión Magnolias', 'Tlaquepaque', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 171-5202', 'sin@correo.com', '0', '', '2022-03-14 15:04:12', NULL, 3, NULL),
(203, 'Juan Francisco', 'Casas ', 'Amador', 'Luis curiel no. 200', 'San Agustin', 'Tlajomuco de Zuñiga', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 363-4337', 'sin@correo.com', '0', '', '2022-03-14 15:10:19', NULL, 3, NULL),
(204, 'Felipe', '-', '-', '-', '-', '-', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 017-3348', 'sin@correo.com', '0', '', '2022-03-14 15:19:19', NULL, 3, NULL),
(205, 'Gerardo', 'Santana', 'Bernal', 'Virgen de los Remedios no. 623', 'Hacienda la Candelaria', 'Tlaquepaque', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 538-8358', 'sin@correo.com', '0', '', '2022-03-14 15:29:26', '2022-03-14 15:31:31', 3, 3),
(206, 'Rodrigo ', 'Aznar', '-', 'Higaldo no. 258', 'El Mante', '-', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 937-3055', 'sin@correo.com', '0', '', '2022-03-14 16:58:43', NULL, 3, NULL),
(207, 'Clara Anette ', 'Aguilera ', 'Zaragoza', '-', '-', '-', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(393) 123-1627', 'chuy.barragan30@gmail.com', '0', '', '2022-03-14 17:19:59', NULL, 3, NULL),
(208, 'Georgina ', 'Anceno  López', 'Jesús Humbero', 'San Pedro no. 4518', 'Villas de Guadalupe', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 517-6691', 'sin@correo.com', '0', '', '2022-03-14 17:29:23', NULL, 3, NULL);
INSERT INTO `clientes` (`id_cliente`, `nombres`, `aPaternoCliente`, `aMaternoCliente`, `calle`, `colonia`, `ciudad`, `estado`, `tel1`, `tel2`, `cel`, `email`, `status`, `observacion`, `fecha_creacion`, `fecha_mod`, `id_capC`, `id_capM`) VALUES
(209, 'Jorge Eduardo', 'López', '-', 'Valle de los Encinos no. 30', 'Valle Real', 'Tala', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(384) 104-1693', 'sin@correo.com', '0', '', '2022-03-14 17:34:20', NULL, 3, NULL),
(210, 'Esteban Angel', 'Becerra', '-', 'Alfredo R. Plascencia no. 785', 'Ladrón de Guevara', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 815-7101', 'sin@correo.com', '0', '', '2022-03-14 17:39:55', NULL, 3, NULL),
(211, 'Enrique ', 'Rodriguez ', 'Saucedo', 'Calle novo no. 10 depto 4 Crucero La Mes', 'Carretera Saltillo', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(321) 107-4890', 'sin@correo.com', '0', '', '2022-03-14 17:42:44', NULL, 3, NULL),
(212, 'Marcelino', 'Hernández ', 'Cristobal', ' Aztecas no. 18', 'Lomas del Centinela', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 441-0151', 'sin@correo.com', '0', '', '2022-03-15 09:19:44', NULL, 3, NULL),
(213, 'Luis Alberto ', 'Arambula', 'Gonzalez', 'C. Gómez Farias no. 2301 - 8 ', 'San Andres', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 227-8442', 'luis_0315_arambula@hotmail.com', '0', '', '2022-03-15 09:37:36', NULL, 3, NULL),
(214, 'José Isac', 'Peña', ' Munguia', 'C. Santa Clara no. 216', 'Santa Margarita 1A secc', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(696) 123-0029', 'sin@correo.com', '0', '', '2022-03-15 11:41:13', NULL, 3, NULL),
(215, 'Maria Elena Noemi', 'Garcia', 'López', '-', '-', '-', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 164-9487', 'marlengarciagdl@gmail.com', '0', '', '2022-03-15 11:50:05', NULL, 3, NULL),
(216, 'Ricardo ', 'Arriaga', 'Olivares', 'C. Perth no. 541-14', 'Fraccionamiento Valle de los Molinos', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 074-5585', 'sin@correo.com', '0', '', '2022-03-15 12:30:46', NULL, 3, NULL),
(217, 'Jorge', ' Villalobos', 'Ramirez', 'Insurgentes no. 162-A', 'Atemajac del Valle', 'zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 398-9166', 'sin@correo.com', '0', '', '2022-03-15 15:49:44', NULL, 3, NULL),
(218, 'J. Jesús', 'Montes ', 'Arias', 'Vista del Rio no. 337 coto tinto interio', 'Las terrazas residencial', '-', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 385-4891', 'bochomontesari@hotmail.com', '0', '', '2022-03-15 15:54:19', NULL, 3, NULL),
(219, 'Miguel ', 'Ramirez', 'Lopez', 'C. Santa Ana no. 82A', 'El Briseño', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 764-7428', 'sin@correo.com', '0', '', '2022-03-15 16:58:32', NULL, 3, NULL),
(220, 'Juan José', 'Benavides ', 'Peña', 'Av. Ganaderos de Jalisco', 'Fraccionamiento Puerta del Llano', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 577-9660', 'sin@correo.com', '0', '', '2022-03-16 11:10:55', NULL, 3, NULL),
(221, 'Gerardo Alonso', 'Gómez', '-', 'Valle del Conde no. 1349 int. 89', 'Real del Cone', 'tlajomulco de zuñiga', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 791-2711', 'sin@correo.com', '0', '', '2022-03-16 11:54:10', NULL, 3, NULL),
(222, 'Maria del Carmen', 'Martinez', 'Islas', 'Brigada Central no. 187', 'Residencial El Tapatio', 'Tlajomulco de Zuñiga', 'Jalisco', '(000) 000-0000', '(332) 972-4816', '(333) 016-3075', 'freddyfranco19035@gmail.com', '0', '', '2022-03-16 11:58:12', NULL, 3, NULL),
(223, 'Georgina ', 'Anceno Lopez', 'Jesús Humberto', 'San Pedro no. 4518', 'Villas de Guadalupe', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 517-6691', 'sin@correo.com', '0', '', '2022-03-16 12:04:27', NULL, 3, NULL),
(224, 'Impulsora Sahuayo S. A de C.V ', 'Daniel Colmenero', '-', 'José Maria Coss no. 1642', 'SAn Miguel de Mezquitan', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 120-2752', 'sin@correo.com', '0', '', '2022-03-16 12:08:40', NULL, 3, NULL),
(225, 'Refresquera Internacional SA de CV', '-', '-', 'km 6 Carretera Morelia -  Salamanda N', '-', 'Morelia', 'Michoacán ', '(000) 000-0000', '(443) 317-1910', '(443) 317-1911', 'aux_cont.mor@consorcioaga.com', '0', '', '2022-03-16 12:21:13', NULL, 3, NULL),
(226, 'Marco Antonio', 'Gómez', 'Bucio', 'C. Constitución', 'centro', 'Autlan de Navarro', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(317) 385-1353', 'sin@correo.com', '0', '', '2022-03-16 12:26:04', NULL, 3, NULL),
(227, 'Esteban', 'Angel ', 'Becerra', 'Alfredo R. Plascencia no. 785', 'Ladrón de Guevara', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 815-7101', 'sin@correo.com', '0', '', '2022-03-16 12:55:49', NULL, 3, NULL),
(228, 'Miguel Angel', 'Guerrero ', 'Linares', 'C. Arroyo Nuevo León', 'Fraccionamiento Ruiseñores', 'Tala', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 467-1900', 'mangelguerrerolinares@gmail.com', '0', '', '2022-03-16 13:31:44', NULL, 3, NULL),
(229, 'Basilio Manuel', 'Rojas ', 'Vite', 'Av. Pase de los virreyes 1250-4-49', 'Residencial Cumbres', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 146-2147', 'facturaesvit2018@gmail.com', '0', '', '2022-03-16 13:57:13', NULL, 3, NULL),
(230, 'José de Jesús ', 'Trujillo', 'Vargas', 'C. Loma Rocosa no. 28', 'Lomas del Cuatro', 'San Pedro Tlaquepaque', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(664) 386-1752', 'sin@correo.com', '0', '', '2022-03-16 15:44:42', NULL, 3, NULL),
(231, 'Dulce Alejandra ', 'Arriaga ', 'Espiritu', 'C. Ignacio Ramirez 643', 'Santa Teresa', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 985-6530', 'dulce-arriaga@hotmail.com', '0', '', '2022-03-16 17:05:46', NULL, 3, NULL),
(232, 'Oscar Jesús Higuera Barragan', 'Oscar Jeśus Higuera Sánchez ', '(Dueño)', 'C. L. Tecalitlan Sur 8161- A', 'Loma Dorada', 'Tonalá ', 'Jalisco', '(000) 000-0000', '(331) 292-2796', '(331) 289-2084', 'oscarinjhb15@gmail.com', '0', '', '2022-03-17 09:34:37', NULL, 3, NULL),
(233, 'Edgar Omar', 'Cordova ', 'Gonzalez', 'c. Uranio no. 82', 'Arenales Tapatios', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 533-2281', 'cordovaomar@gmail.com', '0', '', '2022-03-17 10:36:43', NULL, 3, NULL),
(234, 'Uriel', 'Solorzano', 'Olguin', '-', '-', '-', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 449-4476', 'sin@correo.com', '0', '', '2022-03-17 11:21:36', NULL, 3, NULL),
(235, 'Guillermo ', 'Watanabe', 'Murillo', 'Circuito Madrigal 1965', 'Colinas de San Javier', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 167-2021', 'sin@correo.com', '0', '', '2022-03-17 11:40:19', NULL, 3, NULL),
(236, 'Damian', 'Nava', '-', '-Génova 1135 int flora 160', ' Fracc Palermo', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 111-3069', 'sin@correo.com', '0', '', '2022-03-17 12:07:53', NULL, 3, NULL),
(237, 'Jorge ', 'Garibay', 'Lara', 'Gonzalez Ortega Pte', 'Santa Cruz de las Flores', 'Tlajomulco de Zuñiga', 'Jalisco', '(000) 000-0000', '(333) 104-9903', '(332) 207-6112', 'jorgelara.jgl@gmail.com', '0', '', '2022-03-17 13:50:44', NULL, 3, NULL),
(238, 'José Isabel', 'Torres', 'González', 'Laureles no. 2662', 'Cajetes', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 010-2292', 'sin@correo.com', '0', '', '2022-03-17 16:32:42', NULL, 3, NULL),
(239, 'Jesús ', 'Zarate', 'Gerbasio', 'C. Garcia del Cadena no. 408 Nte', 'Calera', 'Calera', 'Zacatecas', '(000) 000-0000', '(000) 000-0000', '(332) 508-0052', 'jzarateg44@gmail.com', '0', '', '2022-03-17 16:35:38', NULL, 3, NULL),
(240, 'Jorge', 'Beltran', 'Ramirez', 'Circuito Santa Rosalia Sur no. 349A-11', 'Infonavit La soledad ', 'Tonalá', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 299-0174', 'jbelrez@gmail.com', '0', '', '2022-03-18 09:11:16', NULL, 3, NULL),
(241, 'Libertad Karina', 'Jaimes', 'Villamar', 'C. Insurgentes no. 244 -1', 'Lomas de Atemajac', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 342-1111', 'karina_villamar75@hotmail.com', '0', '', '2022-03-18 09:23:41', NULL, 3, NULL),
(242, 'Felipe Omar', 'Trujillo', 'Benitez', 'Dionisio Rodriguez 3349', 'Agustin Yañez', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 481-9896', 'omarfelipetrujillobenitez@gmail.com', '0', '', '2022-03-18 09:53:33', NULL, 3, NULL),
(243, 'Beatriz', 'Sahagun', 'Patiño', 'Av. Patria Edificio C- 32 -124 -404', 'U. Hab. Fovissste Estadio', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 195-8217', 'bety_1155@hotmail.com', '0', '', '2022-03-18 10:55:45', NULL, 3, NULL),
(244, 'Omar Federico', 'Franco', 'Ojeda', '-', '-', '-', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 417-8268', 'frajeda@hotmail.com', '0', '', '2022-03-18 13:27:50', NULL, 3, NULL),
(245, 'Luis Alfonso', 'Cabrera', ' Miguel', '-', '-', '-', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 600-7626', 'lui._.alfonso@live.com.mx', '0', '', '2022-03-19 09:23:07', NULL, 3, NULL),
(246, 'Pablo ', 'Ruiz ', 'Zambrano', 'Alvaro Obregon no. 35', 'Unidad Deportiva', 'Centro', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(388) 106-7382', 'sin@correo.com', '0', '', '2022-03-19 10:17:36', NULL, 3, NULL),
(247, 'Daniel ', 'Castellanos ', 'Alvarez', 'Andador Girasoles no. 356- 12-', 'La Tuzania', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 708-0146', 'jcdadideda@hotmail.com', '0', '', '2022-03-19 12:18:53', NULL, 3, NULL),
(248, 'Luis Armando', 'Robles ', 'Valencia', 'Av. Acueducto no. 913C', 'La Casita ', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 432-2262', 'luis73robles01@gmail.com', '0', '', '2022-03-19 12:22:06', NULL, 3, NULL),
(249, 'Alfredo José ', 'González ', 'Garcia', 'Ingreso a la CAñada no. 213', '-', 'Ixtlahuacan de los membrillos', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 249-8566', 'sin@correo.com', '0', '', '2022-03-22 09:10:42', NULL, 3, NULL),
(250, 'Josefina', 'Ramirez Ortega ', 'César Diaz', 'Valle de Santa mateo no. 41', 'Fraccionamiento Real del Valle', 'Tlajomulco', 'Jalisco', '(000) 000-0000', '(333) 808-7576', '(331) 347-8224', 'sin@correo.com', '0', '', '2022-03-22 09:19:14', '2022-03-22 09:22:03', 3, 3),
(251, 'Gerardo', 'Avila', 'Garcia', 'Jardines de los belenes no. 1367', 'Jardines del vergel', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 359-2809', 'sin@correo.com', '0', '', '2022-03-22 09:27:08', NULL, 3, NULL),
(252, 'Magdaleno', 'Iñiguez', 'Velazquez', 'Prolongación Margaritas no. 416', 'Mirador de la Reyna', 'Tonalá ', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 569-8695', 'magdaleno.iniguez@gmail.com', '0', '', '2022-03-22 10:03:59', NULL, 3, NULL),
(253, 'Juan Antonio', ' Gonzalez', '-', 'Camino Real a Colima 285-68', 'Coto Antares', 'Tlaquepaque', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 647-1948', 'sin@correo.com', '0', '', '2022-03-22 10:17:32', NULL, 3, NULL),
(254, 'Omar Oswaldo', 'Sanchez ', 'Arias', 'C. Fuente Hermosilo no. 1207', 'Villas Fontana', 'San Pedro Tlaquepaque', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 249-5883', 'sin@correo.com', '0', '', '2022-03-22 10:21:24', NULL, 3, NULL),
(255, 'Ramiro', 'Aparicio', 'Rodriguez', 'Valerio Garcia no. 508', 'Lomas del Tapatio', '-', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 613-7266', 'sin@correo.com', '0', '', '2022-03-22 12:12:36', NULL, 3, NULL),
(256, 'Geronimo ', 'Montes de Oca', 'Diaz', 'Pegaso no. 230', 'Paseos del Sol', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 954-5296', 'sin@correo.com', '0', '', '2022-03-22 12:16:48', NULL, 3, NULL),
(257, 'Miguel Alonso ', 'Flores', '-', 'San Pablo no. 3258', 'Exha La Mora', 'zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 188-2356', 'mf266738@gmail.com', '0', '', '2022-03-22 17:13:51', NULL, 3, NULL),
(258, 'José Gabriel ', 'Donato Becerra', 'González', 'Lago Magiore Cond LAguna Joya no. 22', 'Faccionamiento GEovillas LA Arbolada', 'Tlajomulco de Zuñiga', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 074-6878', 'donato39@gmail.com', '0', '', '2022-03-22 17:20:34', NULL, 3, NULL),
(259, 'Fernando ', 'Castañon', 'Flores', 'Daniel no. 27', 'Tlaquepaque', 'Tlaquepaque', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 710-2139', 'mariafernanda051016@gmail.com', '0', '', '2022-03-22 17:41:39', NULL, 3, NULL),
(260, 'Efren ', 'Orozco', 'Galvan', 'Fuente La Luna no. 1409 ', 'villas Fontana', 'Tlaquepaque', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 100-4991', 'sin@correo.com', '0', '', '2022-03-23 11:07:20', NULL, 3, NULL),
(261, 'José', 'Manuel ', 'Aran', 'Rio Zula 2562 ', 'Juárez', 'Tlaquepaque', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 190-9765', 'sin@correo.com', '0', '', '2022-03-23 11:13:28', NULL, 3, NULL),
(262, 'Jonas', 'Salvador ', 'Villarruel', 'C. Casipea no. 4990', 'Fraccionamiento La Calma', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 496-5076', 'sin@correo.com', '0', '', '2022-03-23 11:18:27', NULL, 3, NULL),
(263, 'Carlos  Omar', 'Salas', 'Aguilar', 'duruelo no. 118', 'Santa Fé', 'Tlajomulco de Zuñiga', 'Jalisco', '(000) 000-0000', '(331) 127-6632', '(332) 621-0441', 'csalasaguilar23@gmail.com', '0', '', '2022-03-23 11:42:36', NULL, 3, NULL),
(264, 'Jorge Ivan', 'Castillo', 'Rodriguez', 'C. Occidental no. 56-45', 'Atemajac del Valle', 'Zapopan', 'Jalisco', '(000) 000-0000', '(333) 181-8127', '(332) 536-3199', 'sin@correo.com', '0', '', '2022-03-23 12:05:20', NULL, 3, NULL),
(265, 'Jorge', 'Davalos', '-', '-', '-', '-', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 444-7111', 'sin@correo.com', '0', '', '2022-03-23 12:18:48', NULL, 3, NULL),
(266, 'Martin Hugo ', 'REynoso ', 'Pérez', 'Arco Nuremberg 1126 int. 11', 'Arcos de zapopan', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 403-0896', 'sin@correo.com', '0', '', '2022-03-23 12:32:02', NULL, 3, NULL),
(267, 'Ma de la Luz', 'Ramirez ', 'Romero', 'C.Venecia no. 2479', 'Providencia', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 167-0406', 'sin@correo.com', '0', '', '2022-03-23 13:16:47', NULL, 3, NULL),
(268, 'Jorge Alberto', 'Nuño', 'López', 'Privada chihuahua no. 1624', 'Miraflores', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 662-5774', 'beto_4x4_3@hotmail.com.-', '0', '', '2022-03-23 15:53:07', NULL, 3, NULL),
(269, 'Pedro', 'Delgadillo', 'Gomez', 'C. Nube no. 305', 'Fraccionamiento el Paraiso', 'Tlajomulco de Zuñiga', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 677-5312', 'pedroo.r21@gmail.com', '0', '', '2022-03-24 09:03:50', NULL, 3, NULL),
(270, 'Saul', 'Moran', 'de Leon', 'Av. Federalistas no. 1496', 'Fraccionamiento Rinconada las palmas', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 753-4143', 'saulmorandeleon@hotmail.com', '0', '', '2022-03-24 09:23:25', NULL, 3, NULL),
(271, 'Gerardo Cesar', 'Gonzalez', ' Gonzalez', 'C. Amapola no. 704', 'El Vergel', 'San Pedro Tlaquepaque', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 117-3589', 'gerardocesargonzalez55@gmail.com', '0', '', '2022-03-24 09:31:42', NULL, 3, NULL),
(272, 'Eduardo', 'Cabrera', 'Hernandez', 'Francisco de Icaza no. 1346', 'El Mirador', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 409-3476', 'sin@correo.com', '0', '', '2022-03-24 09:42:01', NULL, 3, NULL),
(273, 'José Alberto', 'Pliego', 'Steta', 'C. Caracol n. 2570 depto. 5', 'Bosques de la Victoria', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(556) 791-1853', 'ja_pliego@inpros.com.mx', '0', '', '2022-03-24 11:11:08', NULL, 3, NULL),
(274, 'Sergio', 'Mendoza', 'Barba', 'C. Santa Gertrudis no. 1933 - 86', 'Fraccionamiento Santa Cruz del Valle', 'San Pedro tlaquepaque', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 066-1858', 'sergio.mendoza.barba@gmail.com', '0', '', '2022-03-24 12:02:54', NULL, 3, NULL),
(275, 'Daniel Alonso', 'González ', 'Rivera', 'Isla Gomera no. 3230', 'Jardinesd de la Cruz', '-', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(656) 200-1389', 'sin@correo.com', '0', '', '2022-03-24 13:09:57', NULL, 3, NULL),
(276, 'Humberto ', 'Pastor', '-', 'Loma verde Pte. 5', 'Lomas de San Agustin', 'Tlajomulco de Zuñiga', 'Jalisco', '(000) 000-0000', '(333) 271-1594', '(331) 342-5944', 'sin@correo.com', '0', '', '2022-03-24 13:27:52', NULL, 3, NULL),
(277, 'Ricardo Elias ', 'Treviño', '.-', 'Loma Sombreada no. 8177', 'Loma Dorada', 'Tonalá', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 346-7271', 'ricardoeisa@icloud.com', '0', '', '2022-03-24 15:00:23', NULL, 3, NULL),
(278, 'José Luis ', 'Soto', 'Valadez', 'Ramón Mariscal no. 191', 'Santa Anita', '-', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(334) 052-9878', 'sotovaladezjoseluis@gmail.com', '0', '', '2022-03-24 16:34:44', NULL, 3, NULL),
(279, 'Fco. Javier ', 'Jiménez', 'Aranda', 'P. de la Cañada Sur no. 74', '-', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 835-2514', 'sin@correo.com', '0', '', '2022-03-25 08:51:21', NULL, 3, NULL),
(280, 'Jorge ', 'Framfky', 'Steinpreis', 'Ciudad Real no. 29', 'Santa Anita', '-', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 048-0787', 'sin@correo.com', '0', '', '2022-03-25 09:25:31', NULL, 3, NULL),
(281, 'Imelda ', 'Hernández ', 'Mendoza', 'C. Presa de Bermejillo no. 488', 'Agustin Yañez ', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 518-3545', 'sin@correo.com', '0', '', '2022-03-25 10:31:02', NULL, 3, NULL),
(282, 'Edson Rafael', 'Sanchez ', 'Higuera', 'Loma Tecalitlan norte no. 8140', 'Loma Dorada', 'Tonalá ', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 832-3752', 'rrafael.sanchezh@gmail.com', '0', '', '2022-03-25 11:35:22', NULL, 3, NULL),
(283, 'Isidro Manuel ', 'Lopez Reyes ', 'Maria Concepción Alvarez', 'Puerto San Telmo no. 1233', 'Miramar', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 294-1347', 'sin@correo.com', '0', '', '2022-03-25 12:16:47', NULL, 3, NULL),
(284, 'Edgardo ', 'Santiago', '-', '-', '-', '-', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 531-1629', 'sin@correo.com', '0', '', '2022-03-25 14:04:23', NULL, 3, NULL),
(285, 'Ma. Guadalupe ', 'Paredes ', 'Acosta', '-', '-', '-', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(334) 009-7621', 'sin@correo.com', '0', '', '2022-03-25 16:31:05', NULL, 3, NULL),
(286, 'Martin', 'del Toro', '-', 'Hacienda Arrayanes no. 3', 'Senderos de Tlaquepaque', 'Tlaquepaque', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 140-8446', 'sin@correo.com', '0', '', '2022-03-26 08:43:29', NULL, 3, NULL),
(287, 'Francisco Guadalupe', 'Navarro', 'Santiago', 'C. Flor de Durazno no. 87', 'Fraccionamiento Haciendas del real', 'San Pedro Tlaquepaque', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 934-5665', 'francisco.nasf@gmail.com', '0', '', '2022-03-26 09:18:09', NULL, 3, NULL),
(288, 'Héctor Manuel', 'Aragon ', 'salcedo', 'Constelación no. 45', 'El Briseño', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 025-7110', 'haragon63@gmail.com', '0', '', '2022-03-26 09:23:48', NULL, 3, NULL),
(289, 'Mario', 'Guareño', 'Soria', 'San Francisco no. 62', 'Nueva Santa Maria', 'Tlaquepaque', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(324) 114-0612', 'sin@correo.com', '0', '', '2022-03-26 09:43:14', NULL, 3, NULL),
(290, 'Alvaro ', 'Arechiga', '-', 'Valle de las Palmas no. 56', 'Hacienda de los Eucaliptos ', 'Tlajomulco de Zuñiga', 'Jalisco', '(000) 000-0000', '(331) 647-2731', '(331) 908-5117', 'sin@correo.com', '0', '', '2022-03-26 11:08:33', NULL, 3, NULL),
(291, 'Ana Cristina', 'Reyes ', 'Dominguez', 'Circuito Fuente Escondida no. 4', 'Fraccionamiento Real del Valle', 'Tlajomulco de Zuñiga', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 298-8522', 'reyes_a10@yahoo.com', '0', '', '2022-03-26 11:13:37', NULL, 3, NULL),
(292, 'Ismer Abraham ', 'Bolivar', 'Malpica', 'Circuito Parques de centinela no. 801-3', 'Parques de Centinela', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 268-9670', 'abrahambolivar9951@gmail.com._', '0', '', '2022-03-26 12:22:11', NULL, 3, NULL),
(293, 'Jorge Osvaldo  ', 'Gonzalez ', 'Cortes', 'San David no. 27', 'Fraccionamiento la Purisima', 'El Salto', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 613-2090', 'jorge_ogc@hotmail.com', '0', '', '2022-03-28 08:40:14', NULL, 3, NULL),
(294, 'Martin Rodolfo ', 'Preciado', 'Rodriguez', 'Lope de Vega no. 264-2', 'Arcos Vallarta', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 892-7841', 'gdlnapreco@yahoo.com.mx', '0', '', '2022-03-28 10:10:04', NULL, 3, NULL),
(295, 'Francisco Javier', 'Rodriguez', 'Plascencia', 'Porlongación colón no. 279', 'Fraccionamiento Ojo de Agua, Santa Anita', 'Tlaquepaque', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 556-1943', 'sin@correo.com', '0', '', '2022-03-28 11:51:51', NULL, 3, NULL),
(296, 'Paleira y Estructura Lopez', '-', '-', 'Aeroméxico no. 126', 'Los Gigantes', 'El Salto', 'Jalisco', '(000) 000-0000', '(331) 042-9974', '(333) 169-8263', 'sin@correo.com', '0', '', '2022-03-28 11:58:27', NULL, 3, NULL),
(297, 'Arturo Javier ', 'Pantoja ', 'Blas', 'C: Gigantes no. 1746-A', 'San Antonio', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 541-0433', 'sin@correo.com', '0', '', '2022-03-28 12:12:18', NULL, 3, NULL),
(298, 'Martin', 'Agustin', 'Segoviano', 'Unidad Tetlan Rio Verde no. 44727', '-', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 458-5625', 'martinpagos@outlook.com', '0', '', '2022-03-28 12:38:17', NULL, 3, NULL),
(299, 'Fernando', 'Flores ', 'Ruiz', 'Domicilio calle 8 a num 1495', 'Ferrocarril', '-', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 235-2221', 'fernandofloresruiz64@gmail.com', '0', '', '2022-03-28 15:04:25', NULL, 3, NULL),
(300, 'Manuel de Jesus', 'Vazquez ', 'Chávez', 'C. Lopez Cotilla no. 55', 'Tlacotlan ', 'Ixtlahuacan del Rio', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 392-0804', 'mv540456@gmail.com', '0', '', '2022-03-29 09:25:21', NULL, 3, NULL),
(301, 'Martin ', 'Cruz', 'Belmares', 'Eutimio Pinzón no. 637 ', 'Rancho Nuevo', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 007-5148', 'tinmerdat@hotmail.com', '0', '', '2022-03-29 09:48:55', NULL, 3, NULL),
(302, 'Perla Yazmin', 'Lopez', 'Gonzalez', 'Cjon Papel Mache no. 21 ', 'Fraccionamiento Jardines de la Reina', 'Tonalá', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 216-7537', 'sin@correo.com', '0', '', '2022-03-29 10:02:24', NULL, 3, NULL),
(303, 'Josefina', ' Hossfeldt', ' Caravez', '6 de Enero Ote no. 3152 -12 ', 'Nuevo México', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 962-7665', 'sin@correo.com', '0', '', '2022-03-29 10:09:19', NULL, 3, NULL),
(304, 'José Humberto', 'Anaya', 'Macedo', 'C. Independencia n0. 36 ', 'Los Volcanes', 'Atenguillo', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(388) 103-7072', 'sin@correo.com', '0', '', '2022-03-29 10:12:52', NULL, 3, NULL),
(305, 'Pedro Concepción', 'Rodriguez', 'Quijano', 'Isla Java no. 3279', 'Jardines del Sauz', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 235-0686', 'gargola68@gmail.com', '0', '', '2022-03-29 11:00:12', NULL, 3, NULL),
(306, 'Manuel ', 'Guerrero ', 'Benitez', 'Camino Viejo a TEsistan no. 4715', 'Jardines de Nuevo Mexico', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 839-8676', 'guerrebenima972@gmail.com', '0', '', '2022-03-29 12:01:06', NULL, 3, NULL),
(307, 'Cayetano Guillermo', 'Ceballos ', 'Ruiz', 'Av. Vallarta no. 5055 B 9', 'Real Vallarta ', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 537-0949', 'sin@correo.com', '0', '', '2022-03-29 13:01:28', NULL, 3, NULL),
(308, 'Juan Manuel', 'Sanchez ', 'Estrada', 'C. Bartolome de las casas no. 475', 'Analco', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 348-9113', 'chapayteys@gmail.com', '0', '', '2022-03-29 16:56:29', NULL, 3, NULL),
(309, 'Salvador ', 'Saldaña', '-', 'Longinos Cadena 1256', 'Echeverria', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 254-0621', 'sin@correo.com', '0', '', '2022-03-30 08:45:14', NULL, 3, NULL),
(310, 'Erik  Eduardo ', 'García  ', 'Enciso', 'Av. Acueducto 1866', 'Colinas de San Javier', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 571-0728', 'sin@correo.com', '0', '', '2022-03-30 08:53:49', NULL, 3, NULL),
(311, 'Alberto Ernesto ', 'Huerta', 'Razo', 'Plan de Guadalupe no. 179 Condominio no0', 'Parques del Auditorio', 'Zapopan', 'Jalisco', '(000) 000-0000', '(332) 241-1068', '(333) 831-4082', 'sin@correo.com', '0', '', '2022-03-30 09:10:48', NULL, 3, NULL),
(312, 'Alma Verónica', 'Camarillo Quintero', 'Juan Carlos Garcia Hernandez', 'Circuito Roble no. 10.58-1', 'Fraccionamiento los encinos', 'Tlajomulco de Zuñiga', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 067-3654', 'sin@correo.com', '0', '', '2022-03-30 09:18:04', NULL, 3, NULL),
(313, 'Juan Carlos', 'Rodriguez', 'Frias', 'C.N Paganini Edif. Jesus ', 'Miravalle', 'Guadalajara', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 722-7182', 'logancarlos07@gmail.com', '0', '', '2022-03-30 10:17:18', NULL, 3, NULL),
(314, 'Felipe de Jesus', 'Lopez', 'Baltazar', 'C. Fray Angelico no. 4689', 'Miravalle ', 'San Pedro Tlaquepaque', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(333) 952-2619', 'greko.6612@gmail.com', '0', '', '2022-03-30 10:33:05', NULL, 3, NULL),
(315, 'Fabian Gamaliel', 'Flores ', 'Rodriguez', 'Amalinalpan no. 105 ', 'Ciudad Aztlan', 'Tonalá', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(332) 838-4712', 'sin@correo.com', '0', '', '2022-03-30 15:49:43', NULL, 3, NULL),
(316, 'Francisco Javier', 'Orozco', 'Gutierrez', '-', 'Las Cañadas ', 'Zapopan', 'Jalisco', '(000) 000-0000', '(000) 000-0000', '(331) 659-7068', 'javier_orozco@prodigy.net.mx', '0', '', '2022-03-30 15:57:28', NULL, 3, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colores`
--

CREATE TABLE `colores` (
  `id_color` int(4) NOT NULL,
  `color` varchar(40) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `status` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capM` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `colores`
--

INSERT INTO `colores` (`id_color`, `color`, `status`, `fecha_creacion`, `fecha_mod`, `id_capC`, `id_capM`) VALUES
(1, 'Rojo', '0', '2022-03-01 12:01:28', NULL, 2, NULL),
(2, 'Azul', '0', '2022-03-01 12:01:31', NULL, 2, NULL),
(3, 'Blanco', '0', '2022-03-01 15:24:37', NULL, 3, NULL),
(4, 'Arena', '0', '2022-03-01 15:24:43', NULL, 3, NULL),
(5, 'Negro', '0', '2022-03-01 15:24:51', NULL, 3, NULL),
(7, 'Gris', '0', '2022-03-01 15:25:52', NULL, 3, NULL),
(8, 'sin color', '0', '2022-03-02 09:09:40', NULL, 3, NULL),
(9, 'Platinum', '0', '2022-03-02 11:20:26', NULL, 3, NULL),
(10, 'Chocolate', '0', '2022-03-02 15:15:05', NULL, 3, NULL),
(11, 'Blanco y Negro', '0', '2022-03-04 17:09:34', NULL, 3, NULL),
(12, 'Verde', '0', '2022-03-05 09:11:21', NULL, 3, NULL),
(13, 'Caqui', '0', '2022-03-05 13:03:39', NULL, 3, NULL),
(14, 'tinto', '0', '2022-03-07 10:26:07', NULL, 3, NULL),
(15, 'Oro', '0', '2022-03-14 17:29:44', NULL, 3, NULL),
(16, 'Champagna', '0', '2022-03-24 11:12:06', NULL, 3, NULL),
(17, 'Café', '0', '2022-03-26 08:44:12', NULL, 3, NULL),
(18, 'Amarillo', '0', '2022-03-29 10:09:42', NULL, 3, NULL),
(19, 'Capuchino', '0', '2022-03-30 10:17:46', NULL, 3, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comasesor`
--

CREATE TABLE `comasesor` (
  `id_comAsesor` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `nProyecto` int(11) NOT NULL,
  `id_asesor` int(11) DEFAULT NULL,
  `borrado` char(1) NOT NULL DEFAULT '0',
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_borrado` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capB` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comclientes`
--

CREATE TABLE `comclientes` (
  `id_comCliente` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `nProyecto` int(11) NOT NULL,
  `linkComCliente` text DEFAULT NULL,
  `borrado` char(1) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_borrado` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capB` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comdocufirm`
--

CREATE TABLE `comdocufirm` (
  `id_comDocuFirm` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `nProyecto` int(11) NOT NULL,
  `linkComDocuFirm` text DEFAULT NULL,
  `borrado` char(1) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_borrado` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capB` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comgarantias`
--

CREATE TABLE `comgarantias` (
  `id_comGarantia` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `nProyecto` int(11) NOT NULL,
  `linkComGarantia` text DEFAULT NULL,
  `borrado` char(1) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_borrado` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capB` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comimagenes`
--

CREATE TABLE `comimagenes` (
  `id_comImagenes` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `nProyecto` int(11) NOT NULL,
  `linkComImagenes` text DEFAULT NULL,
  `borrado` char(1) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_borrado` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capB` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comkilometrajes`
--

CREATE TABLE `comkilometrajes` (
  `id_comKm` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `nProyecto` int(11) NOT NULL,
  `linkComKm` text DEFAULT NULL,
  `borrado` char(1) NOT NULL DEFAULT '0',
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_borrado` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capB` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `complacas`
--

CREATE TABLE `complacas` (
  `id_complaca` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `nProyecto` int(11) NOT NULL,
  `linkComPlaca` text DEFAULT NULL,
  `borrado` char(1) NOT NULL DEFAULT '0',
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_borrado` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capB` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `complacas`
--

INSERT INTO `complacas` (`id_complaca`, `id_proyecto`, `nProyecto`, `linkComPlaca`, `borrado`, `fecha_creacion`, `fecha_borrado`, `id_capC`, `id_capB`) VALUES
(112, 264, 11607, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024160928306806/', '0', '2022-03-30 13:10:54', NULL, 9, 0),
(8, 26, 11369, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023034948419404/', '0', '2022-03-28 15:45:14', NULL, 9, 0),
(12, 150, 11493, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023039191752313/', '0', '2022-03-28 15:49:40', NULL, 9, 0),
(15, 43, 11386, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023040168418882/', '0', '2022-03-28 15:56:33', NULL, 9, 0),
(18, 288, 11631, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023042731751959/', '0', '2022-03-28 16:02:05', NULL, 9, 0),
(21, 95, 11438, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023045241751708/', '0', '2022-03-28 16:11:15', NULL, 9, 0),
(22, 76, 11419, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023047898418109/', '0', '2022-03-28 16:13:53', NULL, 9, 0),
(23, 274, 11617, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023048521751380/', '0', '2022-03-28 16:17:15', NULL, 9, 0),
(24, 117, 11460, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023049535084612/', '0', '2022-03-28 16:18:49', NULL, 9, 0),
(25, 245, 11588, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023050101751222/', '0', '2022-03-28 16:20:21', NULL, 9, 0),
(26, 52, 11395, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023051078417791/', '0', '2022-03-28 16:23:45', NULL, 9, 0),
(27, 93, 11436, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023051875084378/', '0', '2022-03-28 16:26:23', NULL, 9, 0),
(28, 143, 11486, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023052535084312/', '0', '2022-03-28 16:28:17', NULL, 9, 0),
(29, 223, 11566, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023053185084247/', '0', '2022-03-28 16:30:16', NULL, 9, 0),
(30, 186, 11529, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023053795084186/', '0', '2022-03-28 16:32:16', NULL, 9, 0),
(31, 177, 11520, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023054381750794/', '0', '2022-03-28 16:34:00', NULL, 9, 0),
(32, 256, 11599, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023059828416916/', '0', '2022-03-28 16:51:29', NULL, 9, 0),
(33, 60, 11403, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023060601750172/', '0', '2022-03-28 16:54:24', NULL, 9, 0),
(34, 164, 11507, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023061225083443/', '0', '2022-03-28 16:56:10', NULL, 9, 0),
(35, 292, 11635, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023061811750051/', '0', '2022-03-28 16:57:50', NULL, 9, 0),
(36, 272, 11615, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023062295083336/', '0', '2022-03-28 16:59:28', NULL, 9, 0),
(37, 249, 11592, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023063268416572/', '0', '2022-03-28 17:03:37', NULL, 9, 0),
(38, 252, 11595, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023064215083144/', '0', '2022-03-28 17:05:35', NULL, 9, 0),
(39, 286, 11629, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023064985083067/', '0', '2022-03-28 17:08:31', NULL, 9, 0),
(40, 147, 11489, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023065488416350/', '0', '2022-03-28 17:10:13', NULL, 9, 0),
(41, 200, 11543, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023066008416298/', '0', '2022-03-28 17:12:08', NULL, 9, 0),
(42, 278, 11621, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023066571749575/', '0', '2022-03-28 17:14:04', NULL, 9, 0),
(43, 302, 11645, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023067108416188/', '0', '2022-03-28 17:15:53', NULL, 9, 0),
(44, 203, 11546, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023067865082779/', '0', '2022-03-28 17:17:11', NULL, 9, 0),
(45, 273, 11616, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023068998415999/', '0', '2022-03-28 17:20:09', NULL, 9, 0),
(47, 123, 11466, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023069761749256/', '0', '2022-03-28 17:21:57', NULL, 9, 0),
(48, 112, 11455, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023073038415595/', '0', '2022-03-28 17:42:30', NULL, 9, 0),
(49, 108, 11451, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023073375082228/', '0', '2022-03-28 17:43:48', NULL, 9, 0),
(51, 45, 11388, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023073788415520/', '0', '2022-03-28 17:51:30', NULL, 9, 0),
(52, 271, 11614, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023073921748840/', '0', '2022-03-28 17:52:47', NULL, 9, 0),
(53, 61, 11404, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023074081748824/', '0', '2022-03-28 17:54:30', NULL, 9, 0),
(54, 291, 11634, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023074278415471/', '0', '2022-03-28 17:56:16', NULL, 9, 0),
(55, 319, 11667, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023074448415454/', '0', '2022-03-28 17:57:19', NULL, 9, 0),
(56, 297, 11640, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023074735082092/', '0', '2022-03-28 18:00:29', NULL, 9, 0),
(57, 237, 11580, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023074955082070/', '0', '2022-03-28 18:01:43', NULL, 9, 0),
(58, 138, 11481, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023075088415390/', '0', '2022-03-28 18:02:53', NULL, 9, 0),
(59, 103, 11446, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023075221748710/', '0', '2022-03-28 18:04:06', NULL, 9, 0),
(60, 113, 11456, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023075428415356/', '0', '2022-03-28 18:04:58', NULL, 9, 0),
(61, 283, 11626, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023075678415331/', '0', '2022-03-28 18:06:19', NULL, 9, 0),
(63, 90, 11433, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023075808415318/', '0', '2022-03-28 18:07:45', NULL, 9, 0),
(65, 295, 11638, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023075918415307/', '0', '2022-03-28 18:09:48', NULL, 9, 0),
(67, 181, 11524, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023050601751172/', '0', '2022-03-28 18:17:50', NULL, 9, 0),
(68, 158, 11501, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023561301700102/', '0', '2022-03-29 10:52:35', NULL, 9, 0),
(69, 311, 11654, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023561865033379/', '0', '2022-03-29 10:53:26', NULL, 9, 0),
(70, 304, 11647, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023564841699748/', '0', '2022-03-29 10:58:05', NULL, 9, 0),
(71, 275, 11618, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023565491699683/', '0', '2022-03-29 10:59:36', NULL, 9, 0),
(72, 312, 11655, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023566278366271/', '0', '2022-03-29 11:01:27', NULL, 9, 0),
(73, 318, 11666, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023566968366202/', '0', '2022-03-29 11:03:12', NULL, 9, 0),
(74, 324, 11672, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023706901685542/', '0', '2022-03-29 17:23:08', NULL, 9, 0),
(75, 261, 11604, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023716871684545/', '0', '2022-03-29 17:55:53', NULL, 9, 0),
(76, 139, 11482, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023716068351292/', '0', '2022-03-30 09:45:38', NULL, 9, 0),
(77, 46, 11389, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024141138308785/', '0', '2022-03-30 11:37:45', NULL, 9, 0),
(78, 227, 11570, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024141714975394/', '0', '2022-03-30 11:39:20', NULL, 9, 0),
(79, 145, 11488, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024142274975338/', '0', '2022-03-30 11:41:03', NULL, 9, 0),
(80, 66, 11409, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024142761641956/', '0', '2022-03-30 11:42:54', NULL, 9, 0),
(81, 206, 11549, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024143614975204/', '0', '2022-03-30 11:44:20', NULL, 9, 0),
(82, 51, 11394, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024144618308437/', '0', '2022-03-30 11:46:04', NULL, 9, 0),
(83, 205, 11548, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024145244975041/', '0', '2022-03-30 11:47:33', NULL, 9, 0),
(84, 266, 11609, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024146468308252/', '0', '2022-03-30 11:50:01', NULL, 9, 0),
(85, 21, 11364, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024147681641464/', '0', '2022-03-30 11:53:58', NULL, 9, 0),
(86, 262, 11605, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024148741641358/', '0', '2022-03-30 11:56:10', NULL, 9, 0),
(87, 154, 11497, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024151874974378/', '0', '2022-03-30 12:03:55', NULL, 9, 0),
(88, 253, 11596, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024152864974279/', '0', '2022-03-30 12:05:40', NULL, 9, 0),
(89, 231, 11574, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024154238307475/', '0', '2022-03-30 12:08:01', NULL, 9, 0),
(90, 269, 11612, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024154871640745/', '0', '2022-03-30 12:09:26', NULL, 9, 0),
(91, 202, 11545, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024167124972853/', '0', '2022-03-30 12:46:15', NULL, 9, 0),
(92, 299, 11642, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024166874972878/', '0', '2022-03-30 12:47:25', NULL, 9, 0),
(93, 106, 11449, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024166681639564/', '0', '2022-03-30 12:48:38', NULL, 9, 0),
(94, 124, 11467, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024166408306258/', '0', '2022-03-30 12:49:37', NULL, 9, 0),
(95, 265, 11608, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024166144972951/', '0', '2022-03-30 12:51:11', NULL, 9, 0),
(96, 201, 11544, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024165961639636/', '0', '2022-03-30 12:52:13', NULL, 9, 0),
(97, 313, 11661, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024165708306328/', '0', '2022-03-30 12:53:19', NULL, 9, 0),
(113, 215, 11558, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024160618306837/', '0', '2022-03-30 13:11:49', NULL, 9, 0),
(99, 228, 11571, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024165311639701/', '0', '2022-03-30 12:54:09', NULL, 9, 0),
(100, 243, 11586, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024165078306391/', '0', '2022-03-30 12:55:06', NULL, 9, 0),
(101, 161, 11504, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024164771639755/', '0', '2022-03-30 12:56:10', NULL, 9, 0),
(102, 310, 11653, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024164174973148/', '0', '2022-03-30 12:57:34', NULL, 9, 0),
(103, 241, 11584, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024164448306454/', '0', '2022-03-30 12:58:48', NULL, 9, 0),
(104, 189, 11532, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024163908306508/', '0', '2022-03-30 12:59:42', NULL, 9, 0),
(105, 294, 11637, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024163068306592/', '0', '2022-03-30 13:01:00', NULL, 9, 0),
(108, 49, 11392, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024162494973316/', '0', '2022-03-30 13:05:51', NULL, 9, 0),
(109, 213, 11556, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024162154973350/', '0', '2022-03-30 13:06:47', NULL, 9, 0),
(110, 92, 11435, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024161824973383/', '0', '2022-03-30 13:07:39', NULL, 9, 0),
(111, 89, 11431, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024161438306755/', '0', '2022-03-30 13:09:49', NULL, 9, 0),
(114, 54, 11397, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024160041640228/', '0', '2022-03-30 13:12:51', NULL, 9, 0),
(115, 226, 11569, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024159681640264/', '0', '2022-03-30 13:14:07', NULL, 9, 0),
(116, 251, 11594, '', '0', '2022-03-30 13:14:50', NULL, 9, 0),
(117, 251, 11594, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024159354973630/', '0', '2022-03-30 13:15:35', NULL, 9, 0),
(118, 97, 11440, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024158284973737/', '0', '2022-03-30 13:16:52', NULL, 9, 0),
(119, 97, 11440, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024158284973737/', '0', '2022-03-30 13:17:56', NULL, 9, 0),
(120, 334, 11682, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024235978299301/', '0', '2022-03-30 15:47:48', NULL, 9, 0),
(121, 340, 11688, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024250931631139/', '0', '2022-03-30 16:33:38', NULL, 9, 0),
(122, 339, 11687, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024251584964407/', '0', '2022-03-30 16:35:35', NULL, 9, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comsupervision`
--

CREATE TABLE `comsupervision` (
  `id_comSupervision` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `textSupervision` varchar(200) NOT NULL,
  `tipoComprobacion` varchar(10) NOT NULL DEFAULT '',
  `estado` char(1) NOT NULL DEFAULT '0',
  `fecha_registro` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT 0,
  `id_capM` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comsupervision`
--

INSERT INTO `comsupervision` (`id_comSupervision`, `id_proyecto`, `textSupervision`, `tipoComprobacion`, `estado`, `fecha_registro`, `fecha_mod`, `id_capC`, `id_capM`) VALUES
(2, 1, 'dfgdfhgsdfh', 'placas', '1', '2022-03-28 14:36:09', NULL, 2, 0),
(3, 288, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023042731751959/', 'placas', '1', '2022-03-28 16:13:32', NULL, 4, 0),
(4, 288, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023042731751959/', 'placas', '1', '2022-03-28 16:33:03', NULL, 4, 0),
(5, 274, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023048521751380/', 'placas', '1', '2022-03-28 16:34:38', NULL, 4, 0),
(6, 177, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023054381750794/', 'placas', '1', '2022-03-28 16:38:04', NULL, 4, 0),
(7, 186, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023053795084186/', 'placas', '1', '2022-03-28 16:40:20', NULL, 4, 0),
(8, 223, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023053185084247/', 'placas', '1', '2022-03-28 16:43:35', NULL, 4, 0),
(9, 143, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023052535084312/', 'placas', '1', '2022-03-28 16:44:36', NULL, 4, 0),
(10, 93, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023051875084378/', 'placas', '1', '2022-03-28 16:46:23', NULL, 4, 0),
(11, 52, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023051078417791/', 'placas', '1', '2022-03-28 16:48:50', NULL, 4, 0),
(12, 245, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023050101751222/', 'placas', '1', '2022-03-28 17:43:06', NULL, 4, 0),
(13, 117, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023049535084612/', 'placas', '1', '2022-03-28 17:50:10', NULL, 4, 0),
(14, 76, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023047898418109/', 'placas', '1', '2022-03-28 17:57:21', NULL, 4, 0),
(15, 95, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023045241751708/', 'placas', '1', '2022-03-28 17:59:54', NULL, 4, 0),
(16, 43, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023040168418882/', 'placas', '1', '2022-03-28 18:02:25', NULL, 4, 0),
(17, 150, '', 'placas', '1', '2022-03-28 18:04:30', NULL, 4, 0),
(18, 150, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023039191752313/', 'placas', '1', '2022-03-28 18:05:03', NULL, 4, 0),
(19, 26, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023034948419404/', 'placas', '1', '2022-03-28 18:06:28', NULL, 4, 0),
(20, 181, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023050601751172/', 'placas', '1', '2022-03-28 18:25:59', NULL, 4, 0),
(21, 319, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023074448415454/', 'placas', '1', '2022-03-29 09:17:57', NULL, 4, 0),
(22, 295, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023075918415307/', 'placas', '1', '2022-03-29 09:26:31', NULL, 4, 0),
(23, 90, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023075808415318/', 'placas', '1', '2022-03-29 09:28:25', NULL, 4, 0),
(24, 283, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023075678415331/', 'placas', '1', '2022-03-29 09:32:23', NULL, 4, 0),
(25, 297, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023074735082092/', 'placas', '1', '2022-03-29 09:36:37', NULL, 4, 0),
(26, 113, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023075428415356/', 'placas', '1', '2022-03-29 09:40:55', NULL, 4, 0),
(27, 103, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023075221748710/', 'placas', '1', '2022-03-29 09:44:14', NULL, 4, 0),
(28, 138, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023075088415390/', 'placas', '1', '2022-03-29 09:45:25', NULL, 4, 0),
(29, 237, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023074955082070/', 'placas', '1', '2022-03-29 09:49:41', NULL, 4, 0),
(30, 302, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023067108416188/', 'placas', '1', '2022-03-29 09:56:47', NULL, 4, 0),
(31, 292, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023061811750051/', 'placas', '1', '2022-03-29 10:09:34', NULL, 4, 0),
(32, 302, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023067108416188/', 'placas', '1', '2022-03-29 10:10:44', NULL, 4, 0),
(33, 291, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023074278415471/', 'placas', '1', '2022-03-29 10:17:41', NULL, 4, 0),
(34, 286, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023064985083067/', 'placas', '1', '2022-03-29 10:20:40', NULL, 4, 0),
(35, 278, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023066571749575/', 'placas', '1', '2022-03-29 10:25:43', NULL, 4, 0),
(36, 273, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023068998415999/', 'placas', '1', '2022-03-29 10:28:39', NULL, 4, 0),
(37, 249, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023063268416572/', 'placas', '1', '2022-03-29 10:32:37', NULL, 4, 0),
(38, 272, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023062295083336/', 'placas', '1', '2022-03-29 10:37:14', NULL, 4, 0),
(39, 271, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023073921748840/', 'placas', '1', '2022-03-29 10:38:42', NULL, 4, 0),
(40, 61, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023074081748824/', 'placas', '1', '2022-03-29 10:46:31', NULL, 4, 0),
(41, 45, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023073788415520/', 'placas', '1', '2022-03-29 10:53:50', NULL, 4, 0),
(42, 108, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023073375082228/', 'placas', '1', '2022-03-29 11:00:07', NULL, 4, 0),
(43, 112, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023073038415595/', 'placas', '1', '2022-03-29 11:02:53', NULL, 4, 0),
(44, 112, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023073038415595/', 'placas', '1', '2022-03-29 11:04:26', NULL, 4, 0),
(45, 123, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023069761749256/', 'placas', '1', '2022-03-29 11:08:54', NULL, 4, 0),
(46, 203, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023067865082779/', 'placas', '1', '2022-03-29 11:12:05', NULL, 4, 0),
(47, 200, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023066008416298/', 'placas', '1', '2022-03-29 11:14:30', NULL, 4, 0),
(48, 147, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023065488416350/', 'placas', '1', '2022-03-29 11:35:07', NULL, 4, 0),
(49, 252, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023064215083144/', 'placas', '1', '2022-03-29 11:35:55', NULL, 4, 0),
(50, 164, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023061225083443/', 'placas', '1', '2022-03-29 11:38:04', NULL, 4, 0),
(51, 318, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023566968366202/', 'placas', '1', '2022-03-29 11:49:31', NULL, 4, 0),
(52, 312, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023566278366271/', 'placas', '1', '2022-03-29 11:51:01', NULL, 4, 0),
(53, 311, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023561865033379/', 'placas', '1', '2022-03-29 11:52:58', NULL, 4, 0),
(54, 312, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023566278366271/', 'placas', '1', '2022-03-29 12:01:40', NULL, 4, 0),
(55, 311, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023561865033379/', 'placas', '1', '2022-03-29 12:02:40', NULL, 4, 0),
(56, 304, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023564841699748/', 'placas', '1', '2022-03-29 12:10:46', NULL, 4, 0),
(57, 275, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023565491699683/', 'placas', '1', '2022-03-29 12:12:35', NULL, 4, 0),
(58, 158, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023561301700102/', 'placas', '1', '2022-03-29 12:20:09', NULL, 4, 0),
(59, 205, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024145244975041/', 'placas', '1', '2022-03-30 12:39:57', NULL, 4, 0),
(60, 339, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024251584964407/', 'placas', '1', '2022-03-30 18:07:03', NULL, 4, 0),
(61, 324, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023706901685542/', 'placas', '1', '2022-03-30 18:19:36', NULL, 4, 0),
(62, 334, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024235978299301/', 'placas', '1', '2022-03-30 18:24:35', NULL, 4, 0),
(63, 299, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024166874972878/', 'placas', '1', '2022-03-30 18:29:19', NULL, 4, 0),
(64, 313, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024165708306328/', 'placas', '1', '2022-03-30 18:34:51', NULL, 4, 0),
(65, 21, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024147681641464/', 'placas', '1', '2022-03-30 18:37:04', NULL, 4, 0),
(66, 241, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024164448306454/', 'placas', '1', '2022-03-30 18:38:53', NULL, 4, 0),
(67, 46, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024141138308785/', 'placas', '1', '2022-03-30 18:40:45', NULL, 4, 0),
(68, 97, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024158284973737/', 'placas', '1', '2022-03-30 18:42:42', NULL, 4, 0),
(69, 124, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024166408306258/', 'placas', '1', '2022-03-30 18:49:38', NULL, 4, 0),
(70, 265, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024166144972951/', 'placas', '1', '2022-03-30 18:50:46', NULL, 4, 0),
(71, 60, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023060601750172/', 'placas', '1', '2022-03-30 18:54:50', NULL, 4, 0),
(72, 139, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023716068351292/', 'placas', '1', '2022-03-30 19:08:12', NULL, 4, 0),
(73, 326, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023716068351292/', 'placas', '1', '2022-03-30 19:08:58', NULL, 4, 0),
(74, 261, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1023716871684545/', 'placas', '1', '2022-03-30 19:10:01', NULL, 4, 0),
(75, 227, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024141714975394/', 'placas', '1', '2022-03-30 19:13:05', NULL, 4, 0),
(76, 145, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024142274975338/', 'placas', '1', '2022-03-30 19:14:12', NULL, 4, 0),
(77, 66, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024142761641956/', 'placas', '1', '2022-03-30 19:15:28', NULL, 4, 0),
(78, 206, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024143614975204/', 'placas', '1', '2022-03-30 19:17:01', NULL, 4, 0),
(79, 51, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024144618308437/', 'placas', '1', '2022-03-30 19:18:34', NULL, 4, 0),
(80, 266, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024146468308252/', 'placas', '1', '2022-03-30 19:19:56', NULL, 4, 0),
(81, 262, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024148741641358/', 'placas', '1', '2022-03-30 19:21:43', NULL, 4, 0),
(82, 154, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024151874974378/', 'placas', '1', '2022-03-30 19:23:20', NULL, 4, 0),
(83, 253, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024152864974279/', 'placas', '1', '2022-03-30 19:24:23', NULL, 4, 0),
(84, 231, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024154238307475/', 'placas', '1', '2022-03-30 19:25:25', NULL, 4, 0),
(85, 269, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024154871640745/', 'placas', '1', '2022-03-30 19:26:34', NULL, 4, 0),
(86, 226, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024159681640264/', 'placas', '1', '2022-03-30 19:33:27', NULL, 4, 0),
(87, 54, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024160041640228/', 'placas', '1', '2022-03-30 19:35:48', NULL, 4, 0),
(88, 215, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024160618306837/', 'placas', '1', '2022-03-30 19:36:57', NULL, 4, 0),
(89, 264, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024160928306806/', 'placas', '1', '2022-03-30 19:38:06', NULL, 4, 0),
(90, 89, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024161438306755/', 'placas', '1', '2022-03-30 19:39:20', NULL, 4, 0),
(91, 92, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024161824973383/', 'placas', '1', '2022-03-30 19:40:19', NULL, 4, 0),
(92, 49, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024162494973316/', 'placas', '1', '2022-03-30 19:41:39', NULL, 4, 0),
(93, 189, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024163908306508/', 'placas', '1', '2022-03-30 19:43:18', NULL, 4, 0),
(94, 310, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024164174973148/', 'placas', '1', '2022-03-30 19:44:22', NULL, 4, 0),
(95, 161, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024164771639755/', 'placas', '1', '2022-03-30 19:45:34', NULL, 4, 0),
(96, 243, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024165078306391/', 'placas', '1', '2022-03-30 19:46:32', NULL, 4, 0),
(97, 228, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024165311639701/', 'placas', '1', '2022-03-30 19:47:23', NULL, 4, 0),
(98, 201, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024165961639636/', 'placas', '1', '2022-03-30 19:48:18', NULL, 4, 0),
(99, 106, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024166681639564/', 'placas', '1', '2022-03-30 19:49:33', NULL, 4, 0),
(100, 202, 'https://jsolautomotriz.workplace.com/groups/1023023355087230/permalink/1024167124972853/', 'placas', '1', '2022-03-30 19:50:44', NULL, 4, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comverifdiariaveh`
--

CREATE TABLE `comverifdiariaveh` (
  `id_comverifdiariaveh` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `nProyecto` int(11) NOT NULL,
  `linkComVerifDiariaVeh` text DEFAULT NULL,
  `borrado` char(1) NOT NULL DEFAULT '0',
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_borrado` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capB` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desglocecodid`
--

CREATE TABLE `desglocecodid` (
  `id_desgloceCodId` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `valCobProyBase` varchar(12) DEFAULT NULL,
  `codIdProyBase` varchar(50) DEFAULT NULL,
  `id_pagoProyBase` int(11) DEFAULT NULL,
  `valCobProyExtra` varchar(12) DEFAULT NULL,
  `codIdProyExtra` varchar(50) DEFAULT NULL,
  `id_pagoProyExtra` int(11) DEFAULT NULL,
  `valCobComBan` varchar(12) DEFAULT NULL,
  `codIdComBan` varchar(50) DEFAULT NULL,
  `id_pagoComBan` int(11) DEFAULT NULL,
  `valCobPen` varchar(12) DEFAULT NULL,
  `codIdPension` varchar(50) DEFAULT NULL,
  `id_pagoPension` int(11) DEFAULT NULL,
  `valCobOtros` varchar(12) DEFAULT NULL,
  `codIdOtros` varchar(50) DEFAULT NULL,
  `id_pagoOtros` int(11) DEFAULT NULL,
  `borrado` char(1) DEFAULT '0',
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_borrado` datetime DEFAULT NULL,
  `id_capC` int(11) NOT NULL,
  `id_capB` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `desglocecodid`
--

INSERT INTO `desglocecodid` (`id_desgloceCodId`, `id_proyecto`, `valCobProyBase`, `codIdProyBase`, `id_pagoProyBase`, `valCobProyExtra`, `codIdProyExtra`, `id_pagoProyExtra`, `valCobComBan`, `codIdComBan`, `id_pagoComBan`, `valCobPen`, `codIdPension`, `id_pagoPension`, `valCobOtros`, `codIdOtros`, `id_pagoOtros`, `borrado`, `fecha_creacion`, `fecha_borrado`, `id_capC`, `id_capB`) VALUES
(1, 135, '13,000.00', '12103-22-50061', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 10:24:24', NULL, 3, 0),
(2, 127, '25,000.00', '11103-22-49953', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 10:30:56', NULL, 3, 0),
(3, 133, '11,000.00', '11103-22-49956 , 12103-22-50065', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 10:32:48', NULL, 3, 0),
(4, 157, '1,200.00', '11103-22-49960', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 10:35:00', NULL, 3, 0),
(5, 70, '1,500.00', '11103-22-49976', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '0000-00-00 00:00:00', NULL, 3, 0),
(6, 128, '13,000.00', '11103-22-49977', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '0000-00-00 00:00:00', NULL, 3, 0),
(7, 4, '12,000.00', '11103-22-49982', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 10:51:39', NULL, 3, 0),
(8, 156, '1.00', '12103-22-50069', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 10:53:16', NULL, 3, 0),
(9, 34, '1,400.00', '07103-22-49521', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 10:55:15', NULL, 3, 0),
(10, 40, '650.00', '07103-22-49527', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 10:56:38', NULL, 3, 0),
(11, 53, '1,400.00', '08103-22-49639', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 10:58:55', NULL, 3, 0),
(12, 67, '1,400.00', '09103-22-49741', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 11:00:01', NULL, 3, 0),
(13, 120, '1,600.00', '10103-22-49852', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 11:01:49', NULL, 3, 0),
(14, 179, '1,400.00', '12103-22-50071', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 11:48:53', NULL, 3, 0),
(15, 188, '1,400.00', '12103-22-50073', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 12:23:53', NULL, 3, 0),
(16, 155, '1.00', '12103-22-50078', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 12:48:45', NULL, 3, 0),
(17, 190, '650.00', '12103-22-50075', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 13:17:14', NULL, 3, 0),
(18, 196, '3,000.00', '12103-22-50173', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 13:30:42', NULL, 3, 0),
(19, 22, '20,000.00', '12103-22-50080', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 13:55:22', NULL, 3, 0),
(20, 176, '1.00', '12103-22-50082', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 13:58:18', NULL, 3, 0),
(21, 194, '13,000.00', '14103-22-50278', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-14 12:04:18', NULL, 3, 0),
(22, 17, '14,000.00', '14103-22-50280', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-14 12:52:16', NULL, 3, NULL),
(23, 198, '28,000.00', '14103-22-50282', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-14 15:15:32', NULL, 3, 0),
(24, 132, '1.00', '14103-22-50285', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-14 15:48:21', NULL, 3, 0),
(25, 126, '5,000.00', '14103-22-50289', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-14 17:04:06', NULL, 3, 0),
(26, 24, '1,400.00', '05103-22-49413', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-14 17:02:41', NULL, 3, 0),
(27, 27, '1.00', '08103-22-49637', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-14 17:03:19', NULL, 3, 0),
(28, 30, '1,900.00', '05103-22-49313', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-14 17:04:06', NULL, 3, 0),
(29, 134, '1.00', '14103-22-50291', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-15 09:45:23', NULL, 3, 0),
(30, 214, '1.00', '15103-22-50384', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-15 09:49:22', NULL, 3, 0),
(31, 209, '1.00', '15103-22-50386', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-15 11:58:12', NULL, 3, NULL),
(33, 159, '1.00', '15103-22-50394', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-15 13:46:01', NULL, 8, NULL),
(34, 192, '45,000.00', '15103-22-50390', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-15 16:10:13', NULL, 3, NULL),
(37, 31, '9,000.00', '15103-22-50388', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-15 18:41:14', NULL, 2, NULL),
(38, 36, '1.00', '16103-22-50495', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-16 09:21:11', NULL, 3, NULL),
(39, 224, '2,500.00', '15103-22-50396', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-16 10:37:02', NULL, 3, NULL),
(40, 193, '8,500.00', '15103-22-50402 , 16103-22-50492', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-16 11:40:22', NULL, 3, NULL),
(41, 239, '3,000.00', '10103-22-49858', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-16 15:59:54', NULL, 3, NULL),
(42, 229, '1,600.00', '17103-22-50600', 5, '0', 'N/A', 1, '64.00', '17103-22-50601', 5, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-16 16:20:59', NULL, 3, NULL),
(43, 37, '5,000.00', '16103-22-50497', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-16 16:23:55', NULL, 3, NULL),
(44, 207, '1.00', '16103-22-50499', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-16 17:01:30', NULL, 3, NULL),
(45, 244, '0.00', '16103-22-50503', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-16 17:54:29', NULL, 3, NULL),
(46, 20, '1.00', '16103-22-50501', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-17 10:08:15', NULL, 3, NULL),
(47, 197, '20,000.00', '17103-22-50606', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-17 12:51:15', NULL, 3, NULL),
(48, 238, '1.00', '17103-22-50608', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-17 13:36:30', NULL, 3, NULL),
(49, 47, '20,000.00', '17103-22-50610', 3, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '3,200.00', '17103-22-50611', 3, '0', '2022-03-17 13:40:46', NULL, 3, NULL),
(50, 220, '1,400.00', '15103-22-50392', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-17 14:01:10', NULL, 3, NULL),
(51, 48, '15,000.00', '17103-22-50604', 3, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-17 14:21:07', NULL, 3, NULL),
(52, 225, '13,000.00', '17103-22-50612', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-17 17:50:51', NULL, 3, NULL),
(53, 180, '13,000.00', '17103-22-50614', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-18 09:50:21', NULL, 3, NULL),
(54, 42, '15,000.00', '19103-22-50944', 9, '0', 'N/A', 1, '1,200.00', '19103-22-50945', 9, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-18 10:28:37', NULL, 3, NULL),
(55, 15, '20,000.00', '18103-22-50733', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-18 12:37:19', NULL, 3, NULL),
(56, 255, '1,400.00', '18103-22-50735', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-18 15:04:28', NULL, 3, NULL),
(57, 257, '1,400.00', '19103-22-50948', 4, '0', 'N/A', 1, '56.00', '19103-22-50949', 4, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-18 15:10:38', NULL, 3, NULL),
(58, 254, '1,800.00', '18103-22-50728', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '288.00', '18103-22-50729', 2, '0', '2022-03-18 15:14:20', NULL, 3, NULL),
(59, 11, '13,000.00', '18103-22-50739', 3, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-18 16:15:25', NULL, 3, NULL),
(60, 41, '22,000.00', '19103-22-50952', 4, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '3,520.00', '19103-22-50953', 4, '0', '2022-03-18 16:31:01', NULL, 3, NULL),
(61, 130, '10,000.00', '18103-22-50741', 2, '0', 'N/A', 1, '0', 'N/A', 1, '300.00', '18103-22-50742', 2, '0', 'N/A', 1, '0', '2022-03-18 16:42:09', NULL, 3, NULL),
(62, 129, '15,000.00', '18103-22-50743', 3, '2,000.00', '18103-22-50744', 3, '0', 'N/A', 1, '0', 'N/A', 1, '2,720.00', '18103-22-50744', 3, '0', '2022-03-18 16:57:58', NULL, 3, NULL),
(63, 25, '14,000.00', '18103-22-50746, 19103-22-50956', 5, '3,000.00', '18103-22-50747', 2, '560.00', '19103-22-50957', 5, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-18 17:52:57', NULL, 3, NULL),
(64, 185, '15,000.00', '19103-22-50838', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-19 09:53:00', NULL, 3, NULL),
(65, 259, '1,600.00', '19103-22-50959', 4, '0', 'N/A', 1, '64.00', '19103-22-50960', 4, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-19 11:26:03', NULL, 3, NULL),
(66, 250, '2,200.00', '19103-22-50842', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-19 12:41:57', NULL, 3, NULL),
(67, 19, '1.00', '19103-22-50844', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-19 13:14:40', NULL, 3, NULL),
(68, 258, '1,400.00', '18103-22-50737', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-23 12:37:30', NULL, 3, NULL),
(69, 246, '1.00', '19103-22-50836', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-23 12:41:15', NULL, 3, NULL),
(70, 263, '1,400.00', '19103-22-50846', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-23 12:42:57', NULL, 3, NULL),
(71, 10, '1.00', '22103-22-51052', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-23 12:57:08', NULL, 3, NULL),
(72, 118, '1.00', '22103-22-51054', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-23 12:59:11', NULL, 3, NULL),
(73, 14, '10,500.00', '22103-22-51056', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-23 13:03:29', NULL, 3, NULL),
(74, 88, '6,000.00', '22103-22-51058', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-23 13:05:13', NULL, 3, NULL),
(75, 182, '13,000.00', '22103-22-51060', 3, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-23 13:06:40', NULL, 3, NULL),
(76, 149, '6,000.00', '22103-22-51062', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-23 13:08:17', NULL, 3, NULL),
(77, 280, '1,600.00', '23103-22-51168', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-24 10:06:17', NULL, 3, NULL),
(78, 35, '15,000.00', '23103-22-51160', 7, '0', 'N/A', 1, '1,200.00', '23103-22-51161', 7, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-24 10:09:41', NULL, 3, NULL),
(79, 279, '15,000.00', '23103-22-51165', 2, '3,000.00', '23103-22-51166', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-24 10:13:23', NULL, 3, NULL),
(80, 287, '1,000.00', '24103-22-51268', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-24 12:07:26', NULL, 8, NULL),
(81, 285, '1,100.00', '24103-22-51270', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-24 12:32:33', NULL, 8, NULL),
(82, 153, '30,000.00', '24103-22-51271', 9, '7,000.00', '24103-22-51272', 9, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-24 15:17:16', NULL, 8, NULL),
(83, 183, '13,000.00', '24103-22-51269', 2, '3,000.00', '24103-22-51269', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-24 16:56:00', NULL, 8, NULL),
(84, 3, '14,250.00', '24103-22-51275', 3, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-25 08:49:51', NULL, 8, NULL),
(85, 85, '15,000.00', '25103-22-51376', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-25 11:28:19', NULL, 8, NULL),
(86, 202, '1.00', '25103-22-51377', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-25 11:30:10', NULL, 8, NULL),
(88, 125, '18,000.00', '25103-22-51399', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-25 13:43:49', NULL, 8, NULL),
(92, 222, '1,600.00', '25103-22-51403', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-25 14:08:23', NULL, 8, NULL),
(93, 281, '13,000.00', '25103-22-51404', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-25 14:53:41', NULL, 8, NULL),
(94, 282, '1.00', '25103-22-51405', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-25 14:59:53', NULL, 8, NULL),
(95, 267, '5,000.00', '25103-22-51380', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-25 15:53:40', NULL, 8, NULL),
(96, 301, '1,400.00', '25103-22-51378', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-25 16:55:29', NULL, 8, NULL),
(97, 300, '1,400.00', '25103-22-51379', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-25 16:56:50', NULL, 8, NULL),
(98, 305, '1,400.00', '26103-22-51492', 9, '0', 'N/A', 1, '112.00', '26103-22-51493', 9, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-25 17:03:51', NULL, 8, NULL),
(99, 303, '1,500.00', '25103-22-51381', 3, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-25 17:46:56', NULL, 8, NULL),
(100, 9, '14,000.00', '26103-22-51495', 4, '0', 'N/A', 1, '560.00', '26103-22-51496', 4, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-26 10:11:26', NULL, 8, NULL),
(101, 247, '15,000.00', '24103-22-51269', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-26 10:27:42', NULL, 8, NULL),
(102, 221, '35,000.00', '26103-22-51385', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-26 11:39:35', NULL, 8, NULL),
(103, 29, '11,000.00', '26103-22-51498', 4, '0', 'N/A', 1, '440.00', '26103-22-51499', 4, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-26 11:44:27', NULL, 8, NULL),
(104, 240, '10,000.00', '26103-22-51386', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-26 11:46:32', NULL, 8, NULL),
(105, 308, '1,400.00', '26103-22-51501', 4, '0', 'N/A', 1, '56.00', '26103-22-51502', 4, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-26 12:10:56', NULL, 8, NULL),
(106, 309, '1,400.00', '26103-22-51504', 5, '0', 'N/A', 1, '56.00', '26103-22-51505', 5, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-26 12:16:33', NULL, 8, NULL),
(107, 307, '650.00', '26103-22-51387', 2, '0', 'N/A', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-26 12:21:00', NULL, 8, NULL),
(108, 236, '22,000.00', '26103-22-51388', 3, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '3,520.00', '26103-22-51388', 3, '0', '2022-03-26 12:39:31', NULL, 8, NULL),
(109, 299, '1.00', '26103-22-51390', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-26 12:58:47', NULL, 8, NULL),
(110, 211, '1.00', '26103-22-51391', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-26 13:24:30', NULL, 8, NULL),
(111, 248, '1.00', '26103-22-51392', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-26 14:28:28', NULL, 8, NULL),
(112, 199, '20,000.00', '29103-22-51601', 9, '5,500.00', '29103-22-51602', 9, '2,040.00', '29103-22-51603', 9, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-28 12:48:48', NULL, 8, NULL),
(113, 171, '10,000.00', '28103-22-51600', 4, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-28 13:58:13', NULL, 8, NULL),
(114, 296, '1.00', '28103-22-51601', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-28 14:04:45', NULL, 8, NULL),
(115, 284, '1.00', '28103-22-51603', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-28 14:07:41', NULL, 8, NULL),
(116, 290, '10,000.00', '29103-22-51605', 7, '0', 'N/A', 1, '800.00', '29103-22-51606', 7, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-28 15:13:58', NULL, 8, NULL),
(117, 317, '1,400.00', '28103-22-51605', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-28 15:57:39', NULL, 8, NULL),
(118, 234, '32,040.00', '26103-22-51507', 3, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '5,126.40', '26103-22-51508', 3, '0', '2022-03-28 16:23:25', NULL, 8, NULL),
(119, 166, '15,000.00', '28103-22-51606', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-28 17:08:55', NULL, 8, NULL),
(120, 314, '1,400.00', '28103-22-51607', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '224.00', '28103-22-51608', 2, '0', '2022-03-28 17:18:47', NULL, 8, NULL),
(121, 321, '850.00', '29103-22-51608', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-29 12:20:20', NULL, 8, NULL),
(122, 195, '1.00', '29103-22-51609', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-29 15:06:01', NULL, 8, NULL),
(123, 328, '650.00', '29103-22-51610', 4, '0', 'N/A', 1, '26.00', '29103-22-51610', 4, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-29 15:09:32', NULL, 8, NULL),
(124, 329, '1,600.00', '29103-22-51613', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-29 15:16:04', NULL, 8, NULL),
(125, 304, '5,000.00', '28044', 5, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-30 09:38:44', NULL, 8, NULL),
(126, 242, '12,000.00', '27985', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-30 12:11:56', NULL, 8, NULL),
(127, 338, '1,400.00', '27986', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '224.00', '27987', 2, '0', '2022-03-30 13:28:43', NULL, 8, NULL),
(128, 319, '1.00', '27988', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-30 13:41:40', NULL, 8, NULL),
(129, 275, '1.00', '27991', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-30 17:17:55', NULL, 8, NULL),
(130, 272, '12,000.00', '27992', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-30 17:27:05', NULL, 8, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desglocecodidbitacora`
--

CREATE TABLE `desglocecodidbitacora` (
  `id_desgloceCodId` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `valCobProyBase` varchar(12) DEFAULT NULL,
  `codIdProyBase` varchar(50) DEFAULT NULL,
  `id_pagoProyBase` int(11) DEFAULT NULL,
  `valCobProyExtra` varchar(12) DEFAULT NULL,
  `codIdProyExtra` varchar(50) DEFAULT NULL,
  `id_pagoProyExtra` int(11) DEFAULT NULL,
  `valCobComBan` varchar(12) DEFAULT NULL,
  `codIdComBan` varchar(50) DEFAULT NULL,
  `id_pagoComBan` int(11) DEFAULT NULL,
  `valCobPen` varchar(12) DEFAULT NULL,
  `codIdPension` varchar(50) DEFAULT NULL,
  `id_pagoPension` int(11) DEFAULT NULL,
  `valCobOtros` varchar(12) DEFAULT NULL,
  `codIdOtros` varchar(50) DEFAULT NULL,
  `id_pagoOtros` int(11) DEFAULT NULL,
  `borrado` char(1) DEFAULT '0',
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_borrado` datetime DEFAULT NULL,
  `id_capC` int(11) NOT NULL,
  `id_capB` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `desglocecodidbitacora`
--

INSERT INTO `desglocecodidbitacora` (`id_desgloceCodId`, `id_proyecto`, `valCobProyBase`, `codIdProyBase`, `id_pagoProyBase`, `valCobProyExtra`, `codIdProyExtra`, `id_pagoProyExtra`, `valCobComBan`, `codIdComBan`, `id_pagoComBan`, `valCobPen`, `codIdPension`, `id_pagoPension`, `valCobOtros`, `codIdOtros`, `id_pagoOtros`, `borrado`, `fecha_creacion`, `fecha_borrado`, `id_capC`, `id_capB`) VALUES
(1, 135, '13,000.00', '12103-22-50061', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 10:24:24', NULL, 3, 0),
(2, 127, '25,000.00', '11103-22-49953', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 10:30:56', NULL, 3, 0),
(3, 133, '11,000.00', '11103-22-49956 , 12103-22-50065', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 10:32:48', NULL, 3, 0),
(4, 157, '1,200.00', '11103-22-49960', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 10:35:00', NULL, 3, 0),
(5, 70, '1,500.00', '11103-22-49976', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '0000-00-00 00:00:00', NULL, 3, 0),
(6, 128, '13,000.00', '11103-22-49977', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '0000-00-00 00:00:00', NULL, 3, 0),
(7, 4, '12,000.00', '11103-22-49982', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 10:51:39', NULL, 3, 0),
(8, 156, '1.00', '12103-22-50069', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 10:53:16', NULL, 3, 0),
(9, 34, '1,400.00', '07103-22-49521', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 10:55:15', NULL, 3, 0),
(10, 40, '650.00', '07103-22-49527', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 10:56:38', NULL, 3, 0),
(11, 53, '1,400.00', '08103-22-49639', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 10:58:55', NULL, 3, 0),
(12, 67, '1,400.00', '09103-22-49741', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 11:00:01', NULL, 3, 0),
(13, 120, '1,600.00', '10103-22-49852', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 11:01:49', NULL, 3, 0),
(14, 179, '1,400.00', '12103-22-50071', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 11:48:53', NULL, 3, 0),
(15, 188, '1,400.00', '12103-22-50073', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 12:23:53', NULL, 3, 0),
(16, 155, '1.00', '12103-22-50078', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 12:48:45', NULL, 3, 0),
(17, 190, '650.00', '12103-22-50075', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 13:17:14', NULL, 3, 0),
(18, 196, '3,000.00', '12103-22-50173', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 13:30:42', NULL, 3, 0),
(19, 22, '20,000.00', '12103-22-50080', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 13:55:22', NULL, 3, 0),
(20, 176, '1.00', '12103-22-50082', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-12 13:58:18', NULL, 3, 0),
(21, 194, '13,000.00', '14103-22-50278', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-14 12:04:18', NULL, 3, 0),
(22, 17, '14,000.00', '14103-22-50280', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-14 12:52:16', NULL, 3, 0),
(23, 198, '28,000.00', '14103-22-50282', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-14 15:15:32', NULL, 3, 0),
(24, 132, '1.00', '14103-22-50285', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-14 15:48:21', NULL, 3, 0),
(25, 126, '5,000.00', '14103-22-50289', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-14 17:04:06', NULL, 3, 0),
(26, 24, '1,400.00', '05103-22-49413', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-14 17:02:41', NULL, 3, 0),
(27, 27, '1.00', '08103-22-49637', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-14 17:03:19', NULL, 3, 0),
(28, 30, '1,900.00', '05103-22-49313', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-14 17:04:06', NULL, 3, 0),
(29, 134, '1.00', '14103-22-50291', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-15 09:45:23', NULL, 3, 0),
(30, 214, '1.00', '15103-22-50384', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-15 09:49:22', NULL, 3, 0),
(31, 209, '1.00', '15103-22-50386', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-15 11:58:12', NULL, 3, NULL),
(33, 159, '1.00', '15103-22-50394', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-15 13:46:01', NULL, 3, NULL),
(34, 192, '45,000.00', '15103-22-50390', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-15 16:10:13', NULL, 3, NULL),
(36, 222, '1,600.00', '15103-22-50398', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '256.00', '15103-22-50399', 2, '0', '2022-03-15 16:19:52', NULL, 3, NULL),
(37, 31, '9,000.00', '15103-22-50388', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-15 18:41:14', NULL, 2, NULL),
(38, 36, '1.00', '16103-22-50495', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-16 09:21:11', NULL, 3, NULL),
(39, 224, '2,500.00', '15103-22-50396', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-16 10:37:02', NULL, 3, NULL),
(40, 193, '8,500.00', '15103-22-50402 , 16103-22-50492', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-16 11:40:22', NULL, 3, NULL),
(41, 239, '3,000.00', '10103-22-49858', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-16 15:59:54', NULL, 3, NULL),
(42, 229, '1,600.00', '17103-22-50600', 5, '0', 'N/A', 1, '64.00', '17103-22-50601', 5, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-16 16:20:59', NULL, 3, NULL),
(43, 37, '5,000.00', '16103-22-50497', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-16 16:23:55', NULL, 3, NULL),
(44, 207, '1.00', '16103-22-50499', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-16 17:01:30', NULL, 3, NULL),
(45, 244, '0.00', '16103-22-50503', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-16 17:54:29', NULL, 3, NULL),
(46, 20, '1.00', '16103-22-50501', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-17 10:08:15', NULL, 3, NULL),
(47, 197, '20,000.00', '17103-22-50606', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-17 12:51:15', NULL, 3, NULL),
(48, 238, '1.00', '17103-22-50608', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-17 13:36:30', NULL, 3, NULL),
(49, 47, '20,000.00', '17103-22-50610', 3, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '3,200.00', '17103-22-50611', 3, '0', '2022-03-17 13:40:46', NULL, 3, NULL),
(50, 220, '1,400.00', '15103-22-50392', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-17 14:01:10', NULL, 3, NULL),
(51, 48, '15,000.00', '17103-22-50604', 3, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-17 14:21:07', NULL, 3, NULL),
(52, 225, '13,000.00', '17103-22-50612', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-17 17:50:51', NULL, 3, NULL),
(53, 180, '13,000.00', '17103-22-50614', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-18 09:50:21', NULL, 3, NULL),
(54, 42, '15,000.00', '19103-22-50944', 9, '0', 'N/A', 1, '1,200.00', '19103-22-50945', 9, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-18 10:28:37', NULL, 3, NULL),
(55, 15, '20,000.00', '18103-22-50733', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-18 12:37:19', NULL, 3, NULL),
(56, 255, '1,400.00', '18103-22-50735', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-18 15:04:28', NULL, 3, NULL),
(57, 257, '1,400.00', '19103-22-50948', 4, '0', 'N/A', 1, '56.00', '19103-22-50949', 4, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-18 15:10:38', NULL, 3, NULL),
(58, 254, '1,800.00', '18103-22-50728', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '288.00', '18103-22-50729', 2, '0', '2022-03-18 15:14:20', NULL, 3, NULL),
(59, 11, '13,000.00', '18103-22-50739', 3, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-18 16:15:25', NULL, 3, NULL),
(60, 41, '22,000.00', '19103-22-50952', 4, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '3,520.00', '19103-22-50953', 4, '0', '2022-03-18 16:31:01', NULL, 3, NULL),
(61, 130, '10,000.00', '18103-22-50741', 2, '0', 'N/A', 1, '0', 'N/A', 1, '300.00', '18103-22-50742', 2, '0', 'N/A', 1, '0', '2022-03-18 16:42:09', NULL, 3, NULL),
(62, 129, '15,000.00', '18103-22-50743', 3, '2,000.00', '18103-22-50744', 3, '0', 'N/A', 1, '0', 'N/A', 1, '2,720.00', '18103-22-50744', 3, '0', '2022-03-18 16:57:58', NULL, 3, NULL),
(63, 25, '14,000.00', '18103-22-50746, 19103-22-50956', 5, '3,000.00', '18103-22-50747', 2, '560.00', '19103-22-50957', 5, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-18 17:52:57', NULL, 3, NULL),
(64, 185, '15,000.00', '19103-22-50838', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-19 09:53:00', NULL, 3, NULL),
(65, 259, '1,600.00', '19103-22-50959', 4, '0', 'N/A', 1, '64.00', '19103-22-50960', 4, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-19 11:26:03', NULL, 3, NULL),
(66, 250, '2,200.00', '19103-22-50842', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-19 12:41:57', NULL, 3, NULL),
(67, 19, '1.00', '19103-22-50844', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-19 13:14:40', NULL, 3, NULL),
(68, 258, '1,400.00', '18103-22-50737', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-23 12:37:30', NULL, 3, NULL),
(69, 246, '1.00', '19103-22-50836', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-23 12:41:15', NULL, 3, NULL),
(70, 263, '1,400.00', '19103-22-50846', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-23 12:42:57', NULL, 3, NULL),
(71, 10, '1.00', '22103-22-51052', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-23 12:57:08', NULL, 3, NULL),
(72, 118, '1.00', '22103-22-51054', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-23 12:59:11', NULL, 3, NULL),
(73, 14, '10,500.00', '22103-22-51056', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-23 13:03:29', NULL, 3, NULL),
(74, 88, '6,000.00', '22103-22-51058', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-23 13:05:13', NULL, 3, NULL),
(75, 182, '13,000.00', '22103-22-51060', 3, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-23 13:06:40', NULL, 3, NULL),
(76, 149, '6,000.00', '22103-22-51062', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-23 13:08:17', NULL, 3, NULL),
(77, 280, '1,600.00', '23103-22-51168', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-24 10:06:17', NULL, 3, NULL),
(78, 35, '15,000.00', '23103-22-51160', 7, '0', 'N/A', 1, '1,200.00', '23103-22-51161', 7, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-24 10:09:41', NULL, 3, NULL),
(79, 279, '15,000.00', '23103-22-51165', 2, '3,000.00', '23103-22-51166', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-24 10:13:23', NULL, 3, NULL),
(80, 287, '1,000.00', '24103-22-51268', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-24 12:07:26', NULL, 8, NULL),
(81, 285, '1,100.00', '24103-22-51270', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-24 12:32:33', NULL, 8, NULL),
(82, 153, '30,000.00', '24103-22-51271', 9, '7,000.00', '24103-22-51272', 9, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-24 15:17:16', NULL, 8, NULL),
(83, 183, '13,000.00', '24103-22-51269', 2, '3,000.00', '24103-22-51269', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-24 16:56:00', NULL, 8, NULL),
(84, 3, '14,250.00', '24103-22-51275', 3, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-25 08:49:51', NULL, 8, NULL),
(85, 85, '15,000.00', '25103-22-51376', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-25 11:28:19', NULL, 8, NULL),
(86, 202, '1.00', '25103-22-51377', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-25 11:30:10', NULL, 8, NULL),
(87, 17, '14,000.00', '25103-22-51398', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-25 13:41:05', NULL, 8, NULL),
(88, 125, '18,000.00', '25103-22-51399', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-25 13:43:49', NULL, 8, NULL),
(89, 159, '1.00', '25103-22-51400', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-25 13:47:57', NULL, 8, NULL),
(90, 192, '45,000.00', '25103-22-51401', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-25 13:56:04', NULL, 8, NULL),
(91, 209, '1.00', '25103-22-51402', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-25 14:01:40', NULL, 8, NULL),
(92, 222, '1,600.00', '25103-22-51403', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-25 14:08:23', NULL, 8, NULL),
(93, 281, '13,000.00', '25103-22-51404', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-25 14:53:41', NULL, 8, NULL),
(94, 282, '1.00', '25103-22-51405', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-25 14:59:53', NULL, 8, NULL),
(95, 267, '5,000.00', '25103-22-51380', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-25 15:53:40', NULL, 8, NULL),
(96, 301, '1,400.00', '25103-22-51378', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-25 16:55:29', NULL, 8, NULL),
(97, 300, '1,400.00', '25103-22-51379', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-25 16:56:50', NULL, 8, NULL),
(98, 305, '1,400.00', '26103-22-51492', 9, '0', 'N/A', 1, '112.00', '26103-22-51493', 9, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-25 17:03:51', NULL, 8, NULL),
(99, 303, '1,500.00', '25103-22-51381', 3, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-25 17:46:56', NULL, 8, NULL),
(100, 9, '14,000.00', '26103-22-51495', 4, '0', 'N/A', 1, '560.00', '26103-22-51496', 4, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-26 10:11:26', NULL, 8, NULL),
(101, 247, '15,000.00', '24103-22-51269', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-26 10:27:42', NULL, 8, NULL),
(102, 221, '35,000.00', '26103-22-51385', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-26 11:39:35', NULL, 8, NULL),
(103, 29, '11,000.00', '26103-22-51498', 4, '0', 'N/A', 1, '440.00', '26103-22-51499', 4, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-26 11:44:27', NULL, 8, NULL),
(104, 240, '10,000.00', '26103-22-51386', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-26 11:46:32', NULL, 8, NULL),
(105, 308, '1,400.00', '26103-22-51501', 4, '0', 'N/A', 1, '56.00', '26103-22-51502', 4, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-26 12:10:56', NULL, 8, NULL),
(106, 309, '1,400.00', '26103-22-51504', 5, '0', 'N/A', 1, '56.00', '26103-22-51505', 5, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-26 12:16:33', NULL, 8, NULL),
(107, 307, '650.00', '26103-22-51387', 2, '0', 'N/A', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-26 12:21:00', NULL, 8, NULL),
(108, 236, '22,000.00', '26103-22-51388', 3, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '3,520.00', '26103-22-51388', 3, '0', '2022-03-26 12:39:31', NULL, 8, NULL),
(109, 299, '1.00', '26103-22-51390', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-26 12:58:47', NULL, 8, NULL),
(110, 211, '1.00', '26103-22-51391', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-26 13:24:30', NULL, 8, NULL),
(111, 248, '1.00', '26103-22-51392', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-26 14:28:28', NULL, 8, NULL),
(112, 199, '20,000.00', '29103-22-51601', 9, '5,500.00', '29103-22-51602', 9, '2,040.00', '29103-22-51603', 9, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-28 12:48:48', NULL, 8, NULL),
(113, 171, '10,000.00', '28103-22-51600', 4, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-28 13:58:13', NULL, 8, NULL),
(114, 296, '1.00', '28103-22-51601', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-28 14:04:45', NULL, 8, NULL),
(115, 284, '1.00', '28103-22-51603', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-28 14:07:41', NULL, 8, NULL),
(116, 290, '10,000.00', '29103-22-51605', 7, '0', 'N/A', 1, '800.00', '29103-22-51606', 7, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-28 15:13:58', NULL, 8, NULL),
(117, 317, '1,400.00', '28103-22-51605', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-28 15:57:39', NULL, 8, NULL),
(118, 234, '32,040.00', '26103-22-51507', 3, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '5,126.40', '26103-22-51508', 3, '0', '2022-03-28 16:23:25', NULL, 8, NULL),
(119, 166, '15,000.00', '28103-22-51606', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-28 17:08:55', NULL, 8, NULL),
(120, 314, '1,400.00', '28103-22-51607', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '224.00', '28103-22-51608', 2, '0', '2022-03-28 17:18:47', NULL, 8, NULL),
(121, 321, '850.00', '29103-22-51608', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-29 12:20:20', NULL, 8, NULL),
(122, 195, '1.00', '29103-22-51609', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-29 15:06:01', NULL, 8, NULL),
(123, 328, '650.00', '29103-22-51610', 4, '0', 'N/A', 1, '26.00', '29103-22-51610', 4, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-29 15:09:32', NULL, 8, NULL),
(124, 329, '1,600.00', '29103-22-51613', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-29 15:16:04', NULL, 8, NULL),
(125, 304, '5,000.00', '28044', 5, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-30 09:38:44', NULL, 8, NULL),
(126, 242, '12,000.00', '27985', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-30 12:11:56', NULL, 8, NULL),
(127, 338, '1,400.00', '27986', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '224.00', '27987', 2, '0', '2022-03-30 13:28:43', NULL, 8, NULL),
(128, 319, '1.00', '27988', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-30 13:41:40', NULL, 8, NULL),
(129, 275, '1.00', '27991', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-30 17:17:55', NULL, 8, NULL),
(130, 272, '12,000.00', '27992', 2, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', 'N/A', 1, '0', '2022-03-30 17:27:05', NULL, 8, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formapagos`
--

CREATE TABLE `formapagos` (
  `id_formaPago` int(11) NOT NULL,
  `formaPago` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `formapagos`
--

INSERT INTO `formapagos` (`id_formaPago`, `formaPago`, `fecha_creacion`, `id_capC`) VALUES
(1, 'N/A', '2022-03-15 11:45:04', 1),
(2, 'Efectivo', '2022-03-15 11:45:04', 2),
(3, 'Transferencia JSOL', '2022-03-15 13:42:37', 2),
(4, 'Tarjeta Crédito ', '2022-03-15 13:42:56', 2),
(5, 'Tarjeta Débito ', '2022-03-15 13:43:07', 2),
(6, 'Tarjeta Crédito 3 meses sin intereses', '2022-03-15 13:43:31', 2),
(7, 'Tarjeta Crédito 6 meses sin intereses', '2022-03-15 13:43:44', 2),
(8, 'Tarjeta Crédito 9 meses sin intereses', '2022-03-15 13:43:59', 2),
(9, 'Tarjeta Crédito 12 meses sin intereses', '2022-03-15 13:44:19', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linkvideos`
--

CREATE TABLE `linkvideos` (
  `id_linkVideo` int(11) NOT NULL,
  `link` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capM` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `linkvideos`
--

INSERT INTO `linkvideos` (`id_linkVideo`, `link`, `fecha_creacion`, `fecha_mod`, `id_capC`, `id_capM`) VALUES
(1, 'sin video.', '2022-03-10 13:32:48', NULL, 6, NULL),
(2, 'sin video fue orden cancelada ', '2022-03-10 13:46:43', NULL, 6, NULL),
(3, 'sin video solo fue servicio ', '2022-03-10 13:50:31', NULL, 6, NULL),
(4, 'sin video', '2022-03-10 14:04:36', NULL, 6, NULL),
(5, 'sin video', '2022-03-10 17:19:54', NULL, 6, NULL),
(6, 'sin video', '2022-03-10 17:23:45', NULL, 6, NULL),
(7, 'sin video', '2022-03-10 17:25:23', NULL, 6, NULL),
(8, 'sin video', '2022-03-10 17:27:25', NULL, 6, NULL),
(9, 'sin video', '2022-03-10 17:28:26', NULL, 6, NULL),
(10, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/640830410339947/', '2022-03-11 09:42:53', NULL, 6, NULL),
(11, 'sin video', '2022-03-11 09:46:41', NULL, 6, NULL),
(12, 'sin video', '2022-03-11 09:49:12', NULL, 6, NULL),
(13, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/640666677022987/', '2022-03-11 09:51:53', NULL, 6, NULL),
(14, 'sin video', '2022-03-11 09:52:59', NULL, 6, NULL),
(15, 'sin video', '2022-03-11 10:53:47', NULL, 6, NULL),
(16, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/641216613634660/', '2022-03-11 10:56:07', NULL, 6, NULL),
(17, 'sin video', '2022-03-11 17:12:38', NULL, 6, NULL),
(18, 'sin video', '2022-03-11 17:15:57', NULL, 6, NULL),
(19, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/641322430290745/', '2022-03-11 17:24:50', NULL, 6, NULL),
(20, 'sin video', '2022-03-11 17:51:32', NULL, 6, NULL),
(21, 'sin video', '2022-03-11 18:00:53', NULL, 6, NULL),
(22, 'sin video', '2022-03-12 11:33:34', NULL, 6, NULL),
(23, 'sin video', '2022-03-12 11:38:01', NULL, 6, NULL),
(24, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/641764080246580/', '2022-03-12 12:54:34', NULL, 6, NULL),
(25, 'sin video', '2022-03-12 12:57:11', NULL, 6, NULL),
(26, 'sin video', '2022-03-12 13:00:47', NULL, 6, NULL),
(27, 'sin video', '2022-03-12 13:29:55', NULL, 6, NULL),
(28, 'sin video', '2022-03-12 13:44:14', NULL, 6, NULL),
(29, 'sin video', '2022-03-14 08:21:25', NULL, 6, NULL),
(30, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/642871886802466/', '2022-03-14 10:59:40', NULL, 6, NULL),
(31, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/642905680132420/', '2022-03-14 11:02:04', NULL, 6, NULL),
(32, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/642885350134453/', '2022-03-14 11:08:02', NULL, 6, NULL),
(33, 'sin video', '2022-03-14 12:50:39', NULL, 6, NULL),
(34, 'sin video', '2022-03-14 14:09:29', NULL, 6, NULL),
(35, 'sin video', '2022-03-14 16:31:57', NULL, 6, NULL),
(36, 'sin video', '2022-03-14 17:18:39', NULL, 6, NULL),
(37, 'sin video', '2022-03-15 08:15:18', NULL, 6, NULL),
(38, 'sin video', '2022-03-15 09:30:13', NULL, 6, NULL),
(39, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/643059066783748/', '2022-03-15 09:54:42', NULL, 6, NULL),
(40, 'sin video', '2022-03-15 10:34:01', NULL, 6, NULL),
(41, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/643514623404859/', '2022-03-15 12:00:28', NULL, 6, NULL),
(42, 'sin video', '2022-03-15 13:04:37', NULL, 6, NULL),
(43, 'sin video', '2022-03-15 14:02:11', NULL, 6, NULL),
(44, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/643568546732800/', '2022-03-15 14:55:42', NULL, 6, NULL),
(45, 'sin video', '2022-03-15 16:10:32', NULL, 6, NULL),
(46, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/644060593350262/', '2022-03-16 09:12:14', NULL, 6, NULL),
(47, 'sin video', '2022-03-16 09:18:38', NULL, 6, NULL),
(48, 'sin video', '2022-03-16 15:29:36', NULL, 6, NULL),
(49, 'sin video ', '2022-03-16 16:15:04', NULL, 6, NULL),
(50, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/642912956798359/', '2022-03-16 16:17:43', NULL, 6, NULL),
(51, 'sin video', '2022-03-16 16:19:48', NULL, 6, NULL),
(52, 'sin video', '2022-03-16 17:09:43', NULL, 6, NULL),
(53, 'sin video', '2022-03-16 17:13:33', NULL, 6, NULL),
(54, 'sin video', '2022-03-16 17:14:39', NULL, 6, NULL),
(55, 'sin video', '2022-03-16 17:16:08', NULL, 6, NULL),
(56, 'sin video ', '2022-03-16 17:19:59', NULL, 6, NULL),
(57, 'sin video', '2022-03-16 17:21:00', NULL, 6, NULL),
(58, 'sin video', '2022-03-16 17:22:40', NULL, 6, NULL),
(59, 'sin video', '2022-03-16 17:26:53', NULL, 6, NULL),
(60, 'sin video', '2022-03-17 08:42:55', NULL, 6, NULL),
(61, 'sin video', '2022-03-17 08:54:27', NULL, 6, NULL),
(62, 'sin video', '2022-03-17 11:57:33', NULL, 6, NULL),
(63, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/644778619945126/', '2022-03-17 12:34:29', NULL, 6, NULL),
(64, 'sin video', '2022-03-17 16:36:06', NULL, 6, NULL),
(65, 'sin video', '2022-03-17 16:57:35', NULL, 6, NULL),
(66, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/644889256600729/', '2022-03-17 16:58:11', NULL, 6, NULL),
(67, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/644896763266645/', '2022-03-17 17:28:06', NULL, 6, NULL),
(68, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/644910883265233/', '2022-03-17 19:44:42', NULL, 6, NULL),
(69, 'sin video', '2022-03-18 10:22:17', NULL, 6, NULL),
(70, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/645417883214533/', '2022-03-18 13:08:46', NULL, 6, NULL),
(71, 'sin video', '2022-03-18 14:42:41', NULL, 6, NULL),
(72, 'sin video', '2022-03-18 14:43:40', NULL, 6, NULL),
(73, 'sin video', '2022-03-18 14:46:10', NULL, 6, NULL),
(74, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/645498919873096/', '2022-03-18 16:26:59', NULL, 6, NULL),
(75, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/645530509869937/', '2022-03-19 09:05:03', NULL, 6, NULL),
(76, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/645893809833607/', '2022-03-19 10:19:19', NULL, 6, NULL),
(77, 'sin video ', '2022-03-19 10:22:43', NULL, 6, NULL),
(78, 'sin video ', '2022-03-19 11:20:58', NULL, 6, NULL),
(79, 'sin video ', '2022-03-19 11:22:37', NULL, 6, NULL),
(80, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/645933069829681/', '2022-03-19 11:24:51', NULL, 6, NULL),
(81, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/645990996490555/', '2022-03-19 13:09:22', NULL, 6, NULL),
(82, 'sin video', '2022-03-23 09:19:16', NULL, 6, NULL),
(83, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/647608632995458/', '2022-03-23 09:26:34', NULL, 6, NULL),
(84, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/647618942994427/', '2022-03-23 09:37:47', NULL, 6, NULL),
(85, 'sin video', '2022-03-23 12:13:24', NULL, 6, NULL),
(86, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/647695449653443/', '2022-03-23 12:17:08', NULL, 6, NULL),
(87, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/647739122982409/', '2022-03-23 12:27:48', NULL, 6, NULL),
(88, 'sin video', '2022-03-23 12:30:25', NULL, 6, NULL),
(89, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/647674092988912/', '2022-03-23 15:44:14', NULL, 6, NULL),
(90, 'sin video', '2022-03-23 15:47:13', NULL, 6, NULL),
(91, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/647628352993486/', '2022-03-23 15:49:30', NULL, 6, NULL),
(92, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/648330752923246/', '2022-03-23 15:54:48', NULL, 6, NULL),
(93, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/648821652874156/', '2022-03-24 10:12:38', NULL, 6, NULL),
(94, 'sin video', '2022-03-24 11:16:33', NULL, 6, NULL),
(95, 'sin video', '2022-03-24 11:18:38', NULL, 6, NULL),
(96, 'sin video ', '2022-03-24 11:21:34', NULL, 6, NULL),
(97, 'sin video ', '2022-03-24 11:24:07', NULL, 6, NULL),
(98, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/648911742865147/', '2022-03-24 13:22:14', NULL, 6, NULL),
(99, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/648943772861944/', '2022-03-24 16:12:57', NULL, 6, NULL),
(100, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/649037286185926/', '2022-03-25 08:42:22', NULL, 6, NULL),
(101, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/649019796187675/', '2022-03-25 10:30:19', NULL, 6, NULL),
(102, 'sin video', '2022-03-25 11:48:23', NULL, 1, NULL),
(103, 'sin video', '2022-03-25 16:18:15', NULL, 6, NULL),
(104, 'sin video', '2022-03-25 16:20:12', NULL, 6, NULL),
(105, 'sin video', '2022-03-25 16:56:33', NULL, 6, NULL),
(106, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/649610616128593/', '2022-03-25 17:30:59', NULL, 6, NULL),
(107, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/649615642794757/', '2022-03-25 17:45:02', NULL, 6, NULL),
(108, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/649594806130174/', '2022-03-25 17:52:10', NULL, 6, NULL),
(109, 'sin video', '2022-03-26 08:24:06', NULL, 6, NULL),
(110, 'sin video', '2022-03-26 09:11:22', NULL, 6, NULL),
(111, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/650025659420422/', '2022-03-26 10:06:58', NULL, 6, NULL),
(112, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/650041072752214/', '2022-03-26 10:15:12', NULL, 6, NULL),
(113, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/650087412747580/', '2022-03-26 11:14:59', NULL, 6, NULL),
(114, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/650051746084480/', '2022-03-26 11:17:20', NULL, 6, NULL),
(115, 'sin video', '2022-03-26 11:19:44', NULL, 6, NULL),
(116, 'sin video', '2022-03-26 11:21:25', NULL, 6, NULL),
(117, 'sin video', '2022-03-26 11:23:10', NULL, 6, NULL),
(118, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/650152739407714/', '2022-03-26 13:17:31', NULL, 6, NULL),
(119, 'sin video', '2022-03-26 14:17:10', NULL, 6, NULL),
(120, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/651265465963108/', '2022-03-28 12:40:23', NULL, 6, NULL),
(121, 'sin video', '2022-03-28 15:35:11', NULL, 6, NULL),
(122, 'sin video', '2022-03-28 15:36:44', NULL, 6, NULL),
(123, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/651304519292536/', '2022-03-28 15:39:15', NULL, 6, NULL),
(124, 'sin video', '2022-03-28 15:47:38', NULL, 6, NULL),
(125, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/651851589237829/', '2022-03-29 10:57:29', NULL, 6, NULL),
(126, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/651889049234083/', '2022-03-29 11:29:43', NULL, 6, NULL),
(127, 'sin video', '2022-03-29 12:05:17', NULL, 6, NULL),
(128, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/651958342560487/', '2022-03-29 12:43:13', NULL, 6, NULL),
(129, 'sin video', '2022-03-29 12:44:42', NULL, 6, NULL),
(130, 'sin video', '2022-03-29 13:12:41', NULL, 6, NULL),
(131, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/652009775888677/', '2022-03-29 18:00:17', NULL, 6, NULL),
(132, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/652084519214536/', '2022-03-29 18:03:50', NULL, 6, NULL),
(133, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/652031399219848/', '2022-03-30 10:05:49', NULL, 6, NULL),
(134, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/652454535844201/', '2022-03-30 10:07:58', NULL, 6, NULL),
(135, 'sin video', '2022-03-30 13:16:48', NULL, 6, NULL),
(136, 'sin video', '2022-03-30 14:37:49', NULL, 6, NULL),
(137, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/652514399171548/', '2022-03-30 15:07:05', NULL, 6, NULL),
(138, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/652637575825897/', '2022-03-30 18:02:19', NULL, 6, NULL),
(139, 'https://jsolautomotriz.workplace.com/groups/470705204019136/permalink/652655369157451/', '2022-03-30 18:10:06', NULL, 6, NULL),
(140, 'sin video', '2022-03-30 18:13:41', NULL, 6, NULL),
(141, 'sin video', '2022-03-30 18:17:21', NULL, 6, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id_marca` int(11) UNSIGNED NOT NULL,
  `marca` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capM` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marca`, `marca`, `fecha_creacion`, `fecha_mod`, `id_capC`, `id_capM`) VALUES
(1, 'Acura', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(3, 'Audi', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(4, 'BMW', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(5, 'Buick', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(6, 'Cadillac', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(7, 'Chevrolet', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(8, 'Chrysler', '0000-00-00 00:00:00', '2022-02-21 16:54:10', 1, 2),
(9, 'Datsun', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(10, 'Dodge', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(11, 'FIAT', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(12, 'Ford', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(13, 'General Motors', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(14, 'GMC', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(16, 'Honda', '0000-00-00 00:00:00', '2022-02-22 16:00:21', 1, 2),
(17, 'Hummer', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(18, 'Hyundai', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(19, 'Infinity', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(20, 'International', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(21, 'Isuzu', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(22, 'Jaguar', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(23, 'Jeep', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(24, 'KIA', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(25, 'Land Rover', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(26, 'Lincoln', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(27, 'Mazda', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(28, 'Mercedes Benz', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(29, 'Mercury', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(30, 'Mini cooper', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(31, 'Mitsubishi', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(32, 'Nissan', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(33, 'Peugeot', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(34, 'Pontiac', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(35, 'Porshe', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(36, 'Ram', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(37, 'Renault', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(38, 'Seat', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(39, 'Subaru', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(40, 'Suzuki', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(41, 'Toyota', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(42, 'Volvo', '0000-00-00 00:00:00', '2022-02-22 16:00:45', 1, 2),
(43, 'VW', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(44, 'ZDX', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos`
--

CREATE TABLE `modelos` (
  `id_modelo` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `modelo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capM` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `modelos`
--

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
(462, 26, 'Town Car', '2022-02-25 11:09:42', NULL, 2, NULL),
(463, 32, 'Pick Up', '2022-03-10 16:50:42', NULL, 2, NULL),
(464, 32, 'Pathfinder', '2022-03-14 11:38:47', NULL, 3, NULL),
(465, 33, '307', '2022-03-14 12:20:59', NULL, 3, NULL),
(466, 7, 'Meriva', '2022-03-14 15:30:12', NULL, 3, NULL),
(467, 7, 'Astro', '2022-03-15 11:50:35', NULL, 3, NULL),
(468, 7, 'blazer', '2022-03-22 10:18:07', NULL, 3, NULL),
(469, 43, 'Bora', '2022-03-22 10:21:52', NULL, 3, NULL),
(470, 7, 'Pick Up', '2022-03-23 11:08:31', NULL, 3, NULL),
(471, 36, 'Van Wagon', '2022-03-24 09:42:43', NULL, 3, NULL),
(472, 34, 'Torrent', '2022-03-25 11:36:03', NULL, 3, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE `modulos` (
  `id_modulo` int(11) NOT NULL,
  `modulo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `boton` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `permiso` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_captC` int(11) NOT NULL,
  `id_captM` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nproyectos`
--

CREATE TABLE `nproyectos` (
  `id_nProyecto` int(15) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capM` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `nproyectos`
--

INSERT INTO `nproyectos` (`id_nProyecto`, `id_proyecto`, `fecha_creacion`, `fecha_mod`, `id_capC`, `id_capM`) VALUES
(11341, 0, '2022-02-28 00:26:55', '2022-02-28 00:26:55', 1, NULL),
(11342, 0, '2022-03-01 15:28:22', NULL, 3, NULL),
(11343, 0, '2022-03-01 15:31:42', NULL, 3, NULL),
(11344, 1, '2022-03-01 15:40:31', NULL, 3, NULL),
(11345, 2, '2022-03-01 17:54:45', NULL, 3, NULL),
(11346, 3, '2022-03-02 09:03:50', NULL, 3, NULL),
(11347, 4, '2022-03-02 09:11:54', NULL, 3, NULL),
(11348, 5, '2022-03-02 09:19:28', NULL, 3, NULL),
(11349, 6, '2022-03-02 09:35:21', NULL, 3, NULL),
(11350, 7, '2022-03-02 10:20:27', NULL, 3, NULL),
(11351, 8, '2022-03-02 11:22:50', NULL, 3, NULL),
(11352, 9, '2022-03-02 11:47:48', NULL, 3, NULL),
(11353, 10, '2022-03-02 12:54:35', NULL, 3, NULL),
(11354, 11, '2022-03-02 15:18:23', NULL, 3, NULL),
(11355, 12, '2022-03-02 16:29:15', NULL, 3, NULL),
(11356, 13, '2022-03-03 10:39:15', NULL, 3, NULL),
(11357, 14, '2022-03-03 10:47:53', NULL, 3, NULL),
(11358, 15, '2022-03-03 11:07:44', NULL, 3, NULL),
(11359, 16, '2022-03-03 11:18:17', NULL, 3, NULL),
(11360, 17, '2022-03-03 13:05:29', NULL, 3, NULL),
(11361, 18, '2022-03-03 14:17:23', NULL, 3, NULL),
(11362, 19, '2022-03-03 17:39:49', NULL, 3, NULL),
(11363, 20, '2022-03-04 10:44:38', NULL, 3, NULL),
(11364, 21, '2022-03-04 11:26:54', NULL, 3, NULL),
(11365, 22, '2022-03-04 13:20:20', NULL, 3, NULL),
(11366, 23, '2022-03-04 13:24:02', NULL, 3, NULL),
(11367, 24, '2022-03-04 14:52:29', NULL, 3, NULL),
(11368, 25, '2022-03-04 17:11:07', NULL, 3, NULL),
(11369, 26, '2022-03-05 09:06:00', NULL, 3, NULL),
(11370, 27, '2022-03-05 09:12:35', NULL, 3, NULL),
(11371, 28, '2022-03-05 09:16:07', NULL, 3, NULL),
(11372, 29, '2022-03-05 10:06:30', NULL, 3, NULL),
(11373, 30, '2022-03-05 11:00:26', NULL, 3, NULL),
(11374, 31, '2022-03-05 12:42:52', NULL, 3, NULL),
(11375, 32, '2022-03-05 12:49:45', NULL, 3, NULL),
(11376, 33, '2022-03-05 13:04:58', NULL, 3, NULL),
(11377, 34, '2022-03-07 09:13:41', NULL, 3, NULL),
(11378, 35, '2022-03-07 09:29:05', NULL, 3, NULL),
(11379, 36, '2022-03-07 09:36:09', NULL, 3, NULL),
(11380, 37, '2022-03-07 09:40:32', NULL, 3, NULL),
(11381, 38, '2022-03-07 09:46:40', NULL, 3, NULL),
(11382, 39, '2022-03-07 10:06:13', NULL, 3, NULL),
(11383, 40, '2022-03-07 10:27:28', NULL, 3, NULL),
(11384, 41, '2022-03-07 10:45:01', NULL, 3, NULL),
(11385, 42, '2022-03-07 12:14:24', NULL, 3, NULL),
(11386, 43, '2022-03-07 12:47:21', NULL, 3, NULL),
(11387, 44, '2022-03-07 13:13:49', NULL, 3, NULL),
(11388, 45, '2022-03-07 13:28:20', NULL, 3, NULL),
(11389, 46, '2022-03-07 14:51:01', NULL, 3, NULL),
(11390, 47, '2022-03-07 16:23:15', NULL, 3, NULL),
(11391, 48, '2022-03-07 16:47:32', NULL, 3, NULL),
(11392, 49, '2022-03-08 09:51:56', NULL, 3, NULL),
(11393, 50, '2022-03-08 10:08:54', NULL, 3, NULL),
(11394, 51, '2022-03-08 10:39:42', NULL, 3, NULL),
(11395, 52, '2022-03-08 13:09:41', NULL, 3, NULL),
(11396, 53, '2022-03-08 15:11:21', NULL, 3, NULL),
(11397, 54, '2022-03-08 15:37:41', NULL, 3, NULL),
(11398, 55, '2022-03-08 16:01:13', NULL, 4, NULL),
(11399, 56, '2022-03-08 16:05:44', NULL, 4, NULL),
(11400, 57, '2022-03-08 16:13:04', NULL, 4, NULL),
(11401, 58, '2022-03-08 16:19:01', NULL, 4, NULL),
(11402, 59, '2022-03-08 16:23:41', NULL, 4, NULL),
(11403, 60, '2022-03-08 16:28:58', NULL, 4, NULL),
(11404, 61, '2022-03-08 16:33:05', NULL, 4, NULL),
(11405, 62, '2022-03-08 16:47:03', NULL, 4, NULL),
(11406, 63, '2022-03-08 16:51:25', NULL, 4, NULL),
(11407, 64, '2022-03-08 16:58:02', NULL, 4, NULL),
(11408, 65, '2022-03-08 17:04:26', NULL, 4, NULL),
(11409, 66, '2022-03-09 09:25:39', NULL, 4, NULL),
(11410, 67, '2022-03-09 09:26:02', NULL, 3, NULL),
(11411, 68, '2022-03-09 09:30:26', NULL, 4, NULL),
(11412, 69, '2022-03-09 09:35:52', NULL, 4, NULL),
(11413, 70, '2022-03-09 09:37:27', NULL, 3, NULL),
(11414, 71, '2022-03-09 09:41:43', NULL, 4, NULL),
(11415, 72, '2022-03-09 09:47:52', NULL, 4, NULL),
(11416, 73, '2022-03-09 09:58:02', NULL, 3, NULL),
(11417, 74, '2022-03-09 09:59:21', NULL, 4, NULL),
(11418, 75, '2022-03-09 10:03:46', NULL, 4, NULL),
(11419, 76, '2022-03-09 10:06:59', NULL, 3, NULL),
(11420, 77, '2022-03-09 10:08:23', NULL, 4, NULL),
(11421, 78, '2022-03-09 10:25:07', NULL, 4, NULL),
(11422, 79, '2022-03-09 10:29:46', NULL, 4, NULL),
(11423, 80, '2022-03-09 10:33:42', NULL, 4, NULL),
(11424, 81, '2022-03-09 10:38:37', NULL, 4, NULL),
(11425, 82, '2022-03-09 10:42:31', NULL, 4, NULL),
(11426, 83, '2022-03-09 11:12:47', NULL, 4, NULL),
(11427, 84, '2022-03-09 11:17:07', NULL, 4, NULL),
(11428, 85, '2022-03-09 11:50:54', NULL, 3, NULL),
(11429, 86, '2022-03-09 11:51:14', NULL, 4, NULL),
(11430, 87, '2022-03-09 11:55:02', NULL, 4, NULL),
(11431, 88, '2022-03-09 11:58:39', NULL, 3, NULL),
(11432, 89, '2022-03-09 11:59:15', NULL, 4, NULL),
(11433, 90, '2022-03-09 12:03:11', NULL, 4, NULL),
(11434, 91, '2022-03-09 12:07:15', NULL, 4, NULL),
(11435, 92, '2022-03-09 12:14:51', NULL, 4, NULL),
(11436, 93, '2022-03-09 12:23:27', NULL, 4, NULL),
(11437, 94, '2022-03-09 12:42:41', NULL, 4, NULL),
(11438, 95, '2022-03-09 12:45:37', NULL, 4, NULL),
(11439, 96, '2022-03-09 12:50:53', NULL, 4, NULL),
(11440, 97, '2022-03-09 12:55:20', NULL, 3, NULL),
(11441, 98, '2022-03-09 12:56:14', NULL, 4, NULL),
(11442, 99, '2022-03-09 14:25:25', NULL, 4, NULL),
(11443, 100, '2022-03-09 14:29:57', NULL, 4, NULL),
(11444, 101, '2022-03-09 14:33:48', NULL, 4, NULL),
(11445, 102, '2022-03-09 14:38:17', NULL, 4, NULL),
(11446, 103, '2022-03-09 14:40:41', NULL, 4, NULL),
(11447, 104, '2022-03-09 14:49:12', NULL, 4, NULL),
(11448, 105, '2022-03-09 14:58:55', NULL, 4, NULL),
(11449, 106, '2022-03-09 15:01:25', NULL, 4, NULL),
(11450, 107, '2022-03-09 15:12:06', NULL, 4, NULL),
(11451, 108, '2022-03-09 15:17:09', NULL, 4, NULL),
(11452, 109, '2022-03-09 15:23:30', NULL, 4, NULL),
(11453, 110, '2022-03-09 15:27:16', NULL, 4, NULL),
(11454, 111, '2022-03-09 15:30:44', NULL, 4, NULL),
(11455, 112, '2022-03-09 15:34:23', NULL, 4, NULL),
(11456, 113, '2022-03-09 15:38:17', NULL, 4, NULL),
(11457, 114, '2022-03-09 15:42:54', NULL, 4, NULL),
(11458, 115, '2022-03-09 15:54:55', NULL, 3, NULL),
(11459, 116, '2022-03-09 17:16:20', NULL, 3, NULL),
(11460, 117, '2022-03-10 09:29:43', NULL, 3, NULL),
(11461, 118, '2022-03-10 09:48:18', NULL, 4, NULL),
(11462, 119, '2022-03-10 09:56:44', NULL, 4, NULL),
(11463, 120, '2022-03-10 09:57:30', NULL, 3, NULL),
(11464, 121, '2022-03-10 10:04:12', NULL, 4, NULL),
(11465, 122, '2022-03-10 10:11:14', NULL, 4, NULL),
(11466, 123, '2022-03-10 10:18:24', NULL, 4, NULL),
(11467, 124, '2022-03-10 10:22:38', NULL, 4, NULL),
(11468, 125, '2022-03-10 12:45:21', NULL, 3, NULL),
(11469, 126, '2022-03-10 15:39:19', NULL, 3, NULL),
(11470, 127, '2022-03-10 16:05:19', NULL, 3, NULL),
(11471, 128, '2022-03-10 16:13:54', NULL, 3, NULL),
(11472, 129, '2022-03-10 16:27:09', NULL, 3, NULL),
(11473, 130, '2022-03-10 16:35:24', NULL, 3, NULL),
(11474, 131, '2022-03-10 16:42:16', NULL, 3, NULL),
(11475, 132, '2022-03-10 16:52:52', NULL, 3, NULL),
(11476, 133, '2022-03-10 17:07:25', NULL, 3, NULL),
(11477, 134, '2022-03-10 17:21:06', NULL, 3, NULL),
(11478, 135, '2022-03-11 10:40:16', NULL, 3, NULL),
(11479, 136, '2022-03-11 10:45:55', NULL, 4, NULL),
(11480, 137, '2022-03-11 10:50:34', NULL, 4, NULL),
(11481, 138, '2022-03-11 10:55:00', NULL, 4, NULL),
(11482, 139, '2022-03-11 10:58:47', NULL, 4, NULL),
(11483, 140, '2022-03-11 11:07:03', NULL, 4, NULL),
(11484, 141, '2022-03-11 11:11:34', NULL, 4, NULL),
(11485, 142, '2022-03-11 11:14:57', NULL, 4, NULL),
(11486, 143, '2022-03-11 11:18:32', NULL, 4, NULL),
(11487, 144, '2022-03-11 11:22:25', NULL, 4, NULL),
(11488, 145, '2022-03-11 11:39:18', NULL, 4, NULL),
(11489, 146, '2022-03-11 11:44:00', NULL, 3, NULL),
(11490, 147, '2022-03-11 11:45:02', NULL, 4, NULL),
(11491, 148, '2022-03-11 11:51:17', NULL, 4, NULL),
(11492, 149, '2022-03-11 11:53:13', NULL, 3, NULL),
(11493, 150, '2022-03-11 11:56:05', NULL, 4, NULL),
(11494, 151, '2022-03-11 12:02:50', NULL, 3, NULL),
(11495, 152, '2022-03-11 12:05:00', NULL, 4, NULL),
(11496, 153, '2022-03-11 12:09:14', NULL, 4, NULL),
(11497, 154, '2022-03-11 12:16:08', NULL, 4, NULL),
(11498, 155, '2022-03-11 12:40:56', NULL, 3, NULL),
(11499, 156, '2022-03-11 12:45:29', NULL, 3, NULL),
(11500, 157, '2022-03-11 13:28:21', NULL, 3, NULL),
(11501, 158, '2022-03-11 13:41:49', NULL, 3, NULL),
(11502, 159, '2022-03-11 13:48:28', NULL, 3, NULL),
(11503, 160, '2022-03-11 14:14:08', NULL, 4, NULL),
(11504, 161, '2022-03-11 14:20:45', NULL, 4, NULL),
(11505, 162, '2022-03-11 16:05:13', NULL, 4, NULL),
(11506, 163, '2022-03-11 16:11:46', NULL, 4, NULL),
(11507, 164, '2022-03-11 16:15:22', NULL, 4, NULL),
(11508, 165, '2022-03-11 16:23:54', NULL, 4, NULL),
(11509, 166, '2022-03-11 16:29:04', NULL, 4, NULL),
(11510, 167, '2022-03-11 16:33:33', NULL, 4, NULL),
(11511, 168, '2022-03-11 16:37:35', NULL, 4, NULL),
(11512, 169, '2022-03-11 16:41:32', NULL, 4, NULL),
(11513, 170, '2022-03-11 16:45:28', NULL, 4, NULL),
(11514, 171, '2022-03-11 16:46:45', NULL, 3, NULL),
(11515, 172, '2022-03-11 17:07:47', NULL, 4, NULL),
(11516, 173, '2022-03-11 17:11:32', NULL, 4, NULL),
(11517, 174, '2022-03-11 17:15:44', NULL, 4, NULL),
(11518, 175, '2022-03-11 17:19:07', NULL, 4, NULL),
(11519, 176, '2022-03-12 08:46:51', NULL, 3, NULL),
(11520, 177, '2022-03-12 09:08:24', NULL, 4, NULL),
(11521, 178, '2022-03-12 09:10:59', NULL, 4, NULL),
(11522, 179, '2022-03-12 09:14:13', NULL, 3, NULL),
(11523, 180, '2022-03-12 09:14:49', NULL, 4, NULL),
(11524, 181, '2022-03-12 09:23:02', NULL, 4, NULL),
(11525, 182, '2022-03-12 09:26:17', NULL, 3, NULL),
(11526, 183, '2022-03-12 09:27:34', NULL, 4, NULL),
(11527, 184, '2022-03-12 09:31:29', NULL, 4, NULL),
(11528, 185, '2022-03-12 09:40:15', NULL, 4, NULL),
(11529, 186, '2022-03-12 09:42:31', NULL, 4, NULL),
(11530, 187, '2022-03-12 09:45:46', NULL, 4, NULL),
(11531, 188, '2022-03-12 09:51:22', NULL, 3, NULL),
(11532, 189, '2022-03-12 10:02:29', NULL, 3, NULL),
(11533, 190, '2022-03-12 11:27:09', NULL, 3, NULL),
(11534, 191, '2022-03-12 11:30:30', NULL, 3, NULL),
(11535, 192, '2022-03-12 12:58:16', NULL, 3, NULL),
(11536, 193, '2022-03-12 13:00:57', NULL, 3, NULL),
(11537, 194, '2022-03-12 13:03:26', NULL, 3, NULL),
(11538, 195, '2022-03-12 13:09:35', NULL, 3, NULL),
(11539, 196, '2022-03-12 13:21:38', NULL, 3, NULL),
(11540, 197, '2022-03-12 13:35:37', NULL, 3, NULL),
(11541, 198, '2022-03-12 13:38:19', NULL, 3, NULL),
(11542, 199, '2022-03-12 13:47:13', NULL, 3, NULL),
(11543, 200, '2022-03-14 08:46:33', NULL, 3, NULL),
(11544, 201, '2022-03-14 10:27:12', NULL, 3, NULL),
(11545, 202, '2022-03-14 11:39:58', NULL, 3, NULL),
(11546, 203, '2022-03-14 12:22:04', NULL, 3, NULL),
(11547, 204, '2022-03-14 12:38:30', NULL, 3, NULL),
(11548, 205, '2022-03-14 14:40:13', NULL, 3, NULL),
(11549, 206, '2022-03-14 14:45:56', NULL, 3, NULL),
(11550, 207, '2022-03-14 14:52:20', NULL, 3, NULL),
(11551, 208, '2022-03-14 14:57:33', NULL, 3, NULL),
(11552, 209, '2022-03-14 15:01:36', NULL, 3, NULL),
(11553, 210, '2022-03-14 15:05:35', NULL, 3, NULL),
(11554, 211, '2022-03-14 15:11:13', NULL, 3, NULL),
(11555, 212, '2022-03-14 15:23:44', NULL, 3, NULL),
(11556, 213, '2022-03-14 15:32:06', NULL, 3, NULL),
(11557, 214, '2022-03-14 17:00:04', NULL, 3, NULL),
(11558, 215, '2022-03-14 17:21:38', NULL, 3, NULL),
(11559, 216, '2022-03-14 17:30:56', NULL, 3, NULL),
(11560, 217, '2022-03-14 17:35:24', NULL, 3, NULL),
(11561, 218, '2022-03-14 17:40:53', NULL, 3, NULL),
(11562, 219, '2022-03-14 17:44:05', NULL, 3, NULL),
(11563, 220, '2022-03-15 09:21:10', NULL, 3, NULL),
(11564, 221, '2022-03-15 09:38:49', NULL, 3, NULL),
(11565, 222, '2022-03-15 11:42:48', NULL, 3, NULL),
(11566, 223, '2022-03-15 11:53:24', NULL, 3, NULL),
(11567, 224, '2022-03-15 12:01:14', NULL, 3, NULL),
(11568, 225, '2022-03-15 12:33:06', NULL, 3, NULL),
(11569, 226, '2022-03-15 15:51:18', NULL, 3, NULL),
(11570, 227, '2022-03-15 15:55:53', NULL, 3, NULL),
(11571, 228, '2022-03-15 17:00:42', NULL, 3, NULL),
(11572, 229, '2022-03-16 11:12:19', NULL, 3, NULL),
(11573, 230, '2022-03-16 11:55:34', NULL, 3, NULL),
(11574, 231, '2022-03-16 12:00:40', NULL, 3, NULL),
(11575, 232, '2022-03-16 12:05:30', NULL, 3, NULL),
(11576, 233, '2022-03-16 12:09:54', NULL, 3, NULL),
(11577, 234, '2022-03-16 12:22:24', NULL, 3, NULL),
(11578, 235, '2022-03-16 12:27:11', NULL, 3, NULL),
(11579, 236, '2022-03-16 12:34:49', NULL, 3, NULL),
(11580, 237, '2022-03-16 12:39:29', NULL, 3, NULL),
(11581, 238, '2022-03-16 12:58:13', NULL, 3, NULL),
(11582, 239, '2022-03-16 13:02:59', NULL, 3, NULL),
(11583, 240, '2022-03-16 13:16:10', NULL, 3, NULL),
(11584, 241, '2022-03-16 13:24:45', NULL, 3, NULL),
(11585, 242, '2022-03-16 13:32:46', NULL, 3, NULL),
(11586, 243, '2022-03-16 13:58:25', NULL, 3, NULL),
(11587, 244, '2022-03-16 15:53:50', NULL, 3, NULL),
(11588, 245, '2022-03-16 17:07:08', NULL, 3, NULL),
(11589, 246, '2022-03-17 09:38:05', NULL, 3, NULL),
(11590, 247, '2022-03-17 10:40:00', NULL, 3, NULL),
(11591, 248, '2022-03-17 11:22:50', NULL, 3, NULL),
(11592, 249, '2022-03-17 11:41:39', NULL, 3, NULL),
(11593, 250, '2022-03-17 12:08:55', NULL, 3, NULL),
(11594, 251, '2022-03-17 13:52:49', NULL, 3, NULL),
(11595, 252, '2022-03-17 16:33:52', NULL, 3, NULL),
(11596, 253, '2022-03-17 16:40:33', NULL, 3, NULL),
(11597, 254, '2022-03-18 09:13:08', NULL, 3, NULL),
(11598, 255, '2022-03-18 09:24:57', NULL, 3, NULL),
(11599, 256, '2022-03-18 09:54:50', NULL, 3, NULL),
(11600, 257, '2022-03-18 10:57:28', NULL, 3, NULL),
(11601, 258, '2022-03-18 13:29:22', NULL, 3, NULL),
(11602, 259, '2022-03-19 09:24:57', NULL, 3, NULL),
(11603, 260, '2022-03-19 09:42:42', NULL, 3, NULL),
(11604, 261, '2022-03-19 10:18:47', NULL, 3, NULL),
(11605, 262, '2022-03-19 12:20:36', NULL, 3, NULL),
(11606, 263, '2022-03-19 12:24:01', NULL, 3, NULL),
(11607, 264, '2022-03-22 09:12:07', NULL, 3, NULL),
(11608, 265, '2022-03-22 09:21:14', NULL, 3, NULL),
(11609, 266, '2022-03-22 09:28:48', NULL, 3, NULL),
(11610, 267, '2022-03-22 10:05:29', NULL, 3, NULL),
(11611, 268, '2022-03-22 10:19:45', NULL, 3, NULL),
(11612, 269, '2022-03-22 10:22:49', NULL, 3, NULL),
(11613, 270, '2022-03-22 12:14:21', NULL, 3, NULL),
(11614, 271, '2022-03-22 12:17:43', NULL, 3, NULL),
(11615, 272, '2022-03-22 17:16:54', NULL, 3, NULL),
(11616, 273, '2022-03-22 17:21:54', NULL, 3, NULL),
(11617, 274, '2022-03-22 17:43:07', NULL, 3, NULL),
(11618, 275, '2022-03-23 11:10:12', NULL, 3, NULL),
(11619, 276, '2022-03-23 11:15:19', NULL, 3, NULL),
(11620, 277, '2022-03-23 11:19:33', NULL, 3, NULL),
(11621, 278, '2022-03-23 11:43:55', NULL, 3, NULL),
(11622, 279, '2022-03-23 12:06:38', NULL, 3, NULL),
(11623, 280, '2022-03-23 12:20:57', NULL, 3, NULL),
(11624, 281, '2022-03-23 12:33:37', NULL, 3, NULL),
(11625, 282, '2022-03-23 13:21:09', NULL, 3, NULL),
(11626, 283, '2022-03-23 14:19:08', NULL, 3, NULL),
(11627, 284, '2022-03-23 15:54:35', NULL, 3, NULL),
(11628, 285, '2022-03-24 09:05:43', NULL, 3, NULL),
(11629, 286, '2022-03-24 09:24:59', NULL, 3, NULL),
(11630, 287, '2022-03-24 09:32:56', NULL, 3, NULL),
(11631, 288, '2022-03-24 09:44:27', NULL, 3, NULL),
(11632, 289, '2022-03-24 11:22:39', NULL, 3, NULL),
(11633, 290, '2022-03-24 12:05:25', NULL, 3, NULL),
(11634, 291, '2022-03-24 13:16:26', NULL, 3, NULL),
(11635, 292, '2022-03-24 13:29:52', NULL, 3, NULL),
(11636, 293, '2022-03-24 15:08:40', NULL, 3, NULL),
(11637, 294, '2022-03-24 16:37:06', NULL, 3, NULL),
(11638, 295, '2022-03-24 16:56:21', NULL, 3, NULL),
(11639, 296, '2022-03-24 17:02:24', NULL, 3, NULL),
(11640, 297, '2022-03-25 09:04:47', NULL, 3, NULL),
(11641, 298, '2022-03-25 09:09:43', NULL, 3, NULL),
(11642, 299, '2022-03-25 09:26:57', NULL, 3, NULL),
(11643, 300, '2022-03-25 10:34:54', NULL, 3, NULL),
(11644, 301, '2022-03-25 11:39:43', NULL, 3, NULL),
(11645, 302, '2022-03-25 12:20:29', NULL, 3, NULL),
(11646, 303, '2022-03-25 15:06:02', NULL, 3, NULL),
(11647, 304, '2022-03-25 15:52:24', NULL, 3, NULL),
(11648, 305, '2022-03-25 16:43:05', NULL, 3, NULL),
(11649, 306, '2022-03-26 08:46:30', NULL, 3, NULL),
(11650, 307, '2022-03-26 09:19:47', NULL, 3, NULL),
(11651, 308, '2022-03-26 09:24:46', NULL, 3, NULL),
(11652, 309, '2022-03-26 09:44:41', NULL, 3, NULL),
(11653, 310, '2022-03-26 11:11:31', NULL, 3, NULL),
(11654, 311, '2022-03-26 11:15:03', NULL, 3, NULL),
(11655, 312, '2022-03-26 12:23:52', NULL, 3, NULL),
(11656, 0, '2022-03-28 08:41:58', NULL, 3, NULL),
(11657, 0, '2022-03-28 08:56:21', NULL, 3, NULL),
(11658, 0, '2022-03-28 09:13:39', NULL, 3, NULL),
(11659, 0, '2022-03-28 09:18:22', NULL, 3, NULL),
(11660, 0, '2022-03-28 10:12:26', NULL, 3, NULL),
(11661, 313, '2022-03-28 11:39:51', NULL, 3, NULL),
(11662, 314, '2022-03-28 11:47:47', NULL, 3, NULL),
(11663, 315, '2022-03-28 11:54:27', NULL, 3, NULL),
(11664, 316, '2022-03-28 12:00:52', NULL, 3, NULL),
(11665, 317, '2022-03-28 12:15:02', NULL, 3, NULL),
(11666, 318, '2022-03-28 12:39:36', NULL, 3, NULL),
(11667, 319, '2022-03-28 13:30:41', NULL, 3, NULL),
(11668, 320, '2022-03-28 16:34:52', NULL, 3, NULL),
(11669, 321, '2022-03-29 09:26:27', NULL, 3, NULL),
(11670, 322, '2022-03-29 09:50:26', NULL, 3, NULL),
(11671, 323, '2022-03-29 10:05:26', NULL, 3, NULL),
(11672, 324, '2022-03-29 10:10:42', NULL, 3, NULL),
(11673, 325, '2022-03-29 10:14:30', NULL, 3, NULL),
(11674, 326, '2022-03-29 10:18:11', NULL, 3, NULL),
(11675, 327, '2022-03-29 11:02:23', NULL, 3, NULL),
(11676, 328, '2022-03-29 12:02:30', NULL, 3, NULL),
(11677, 329, '2022-03-29 13:02:39', NULL, 3, NULL),
(11678, 330, '2022-03-29 17:00:24', NULL, 3, NULL),
(11679, 331, '2022-03-29 17:42:04', NULL, 3, NULL),
(11680, 332, '2022-03-30 08:48:35', NULL, 3, NULL),
(11681, 333, '2022-03-30 08:55:10', NULL, 3, NULL),
(11682, 334, '2022-03-30 09:00:24', NULL, 3, NULL),
(11683, 335, '2022-03-30 09:14:32', NULL, 3, NULL),
(11684, 336, '2022-03-30 09:20:30', NULL, 3, NULL),
(11685, 337, '2022-03-30 10:19:40', NULL, 3, NULL),
(11686, 338, '2022-03-30 10:34:10', NULL, 3, NULL),
(11687, 339, '2022-03-30 13:04:53', NULL, 3, NULL),
(11688, 340, '2022-03-30 15:51:30', NULL, 3, NULL),
(11689, 341, '2022-03-30 15:58:43', NULL, 3, NULL),
(11690, 342, '2022-03-30 16:46:12', NULL, 3, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id_permiso` int(11) NOT NULL,
  `verTablaUsuario` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `editarUsu` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `asignarCon` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `eliminarUsu` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `asignarPer` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `nuevoUsu` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `verTablaMarca` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `regMarca` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `modMarca` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `eliminaMar` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `verTablaModelo` char(1) CHARACTER SET utf8 DEFAULT '0',
  `regModelo` char(1) CHARACTER SET utf8 DEFAULT '0',
  `modModelo` char(1) CHARACTER SET utf8 DEFAULT '0',
  `eliminarMod` char(1) CHARACTER SET utf8 DEFAULT '0',
  `verTablaAnio` char(1) CHARACTER SET utf8 DEFAULT '0',
  `regAnios` char(1) CHARACTER SET utf8 DEFAULT '0',
  `modAnios` char(1) CHARACTER SET utf8 DEFAULT '0',
  `eliminarAnio` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `regColor` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `modColor` char(1) CHARACTER SET utf8 DEFAULT '0',
  `eliminarCol` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `verTablaColor` char(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `verTablaSemana` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regSemana` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `eliSemana` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regSemanaCobro` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `eliSemanaCobro` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verTablaSemanaCobro` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verTablaAgente` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regAgente` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `eliAgente` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regFormaPago` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `eliFormaPago` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verTablaFormaPago` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regPermiso` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `modPermiso` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `eliPermiso` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `verTablaVeh` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `regVehiculo` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `modVehiculo` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `eliVehiculo` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `verTablaCli` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `regCliente` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `modCliente` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `eliCliente` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `regProyecto` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `listProyecto` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `modProyecto` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `eliProyecto` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `pdfProyecto` char(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `verGralProy` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regCapValVenInicial` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verGralCapValVenInicial` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `perRegCapValVenInicial` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verTablaCapValVenInicial` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verTablaProyAct` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verTablaRegSolAltProy` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regSolAltProy` char(1) COLLATE utf8mb4_spanish_ci DEFAULT '0',
  `pdfRegSolAltProy` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `eliRegSolAltProy` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verObsRegSolAltProy` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regAlta` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `eliAlta` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `pdfAlta` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verLinkObsAlta` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verTablaAlta` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regCodIdentificador` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `eliCodIdentificador` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `pdfCodIdentificador` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verLinkObsIdentificador` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verTablaCodIdentificador` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `vertablaDadosAltaAsignarCodId` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verGralDadosAltaAsignarCodId` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regSuperCodIdentificador` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `eliSuperCodIdentificador` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verLinkObsSuperIdentificador` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verTablaSuperCodIdentificador` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verTablaTecArmador` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regTecArmador` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `modTecArmador` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `eliTecArmador` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verTablaTecMontador` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regTecMontador` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `modTecMontador` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `eliTecMontador` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `pdfRepVVAvsVCodID` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verGralRepVVAvsVCodID` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verTablaRepVVAvsVCodID` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regMotivoSupVVAvsVCodID` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `modMotivoSupVVAvsVCodID` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `pdfRepVVIvsVVA` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verGralRepVVIvsVVA` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verTablaRepVVIvsVVA` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regMotivoSupVVIvsVVA` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `modMotivoSupVVIvsVVA` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regComPlacas` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `eliComPlacas` char(1) COLLATE utf8mb4_spanish_ci DEFAULT '0',
  `regComPlacasSuper` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `eliComPlacasSuper` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verGralComPlacas` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verTablaComPlacas` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regComKm` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `eliComKm` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regComKmSuper` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `eliComKmSuper` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verGralComKm` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verTablaComKm` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regComImg` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `eliComImg` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regComImgSuper` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `eliComImgSuper` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verGralComImg` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verTablaComImg` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regComCliente` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `eliComCliente` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regComClienteSuper` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `eliComClienteSuper` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verGralComCliente` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verTablaComCliente` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regComDocuFirm` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `eliComDocuFirm` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regComDocuFirmSuper` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `eliComDocuFirmSuper` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verGralComDocuFirm` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verTablaComDocuFirm` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regComGarantia` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `eliComGarantia` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regComGarantiaSuper` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `eliComGarantiaSuper` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verGralComGarantia` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verTablaComGarantia` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regComAsesor` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `eliComAsesor` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `regComAsesorSuper` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `eliComAsesorSuper` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verGralComAsesor` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `verTablaComAsesor` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id_permiso`, `verTablaUsuario`, `editarUsu`, `asignarCon`, `eliminarUsu`, `asignarPer`, `nuevoUsu`, `verTablaMarca`, `regMarca`, `modMarca`, `eliminaMar`, `verTablaModelo`, `regModelo`, `modModelo`, `eliminarMod`, `verTablaAnio`, `regAnios`, `modAnios`, `eliminarAnio`, `regColor`, `modColor`, `eliminarCol`, `verTablaColor`, `verTablaSemana`, `regSemana`, `eliSemana`, `regSemanaCobro`, `eliSemanaCobro`, `verTablaSemanaCobro`, `verTablaAgente`, `regAgente`, `eliAgente`, `regFormaPago`, `eliFormaPago`, `verTablaFormaPago`, `regPermiso`, `modPermiso`, `eliPermiso`, `verTablaVeh`, `regVehiculo`, `modVehiculo`, `eliVehiculo`, `verTablaCli`, `regCliente`, `modCliente`, `eliCliente`, `regProyecto`, `listProyecto`, `modProyecto`, `eliProyecto`, `pdfProyecto`, `verGralProy`, `regCapValVenInicial`, `verGralCapValVenInicial`, `perRegCapValVenInicial`, `verTablaCapValVenInicial`, `verTablaProyAct`, `verTablaRegSolAltProy`, `regSolAltProy`, `pdfRegSolAltProy`, `eliRegSolAltProy`, `verObsRegSolAltProy`, `regAlta`, `eliAlta`, `pdfAlta`, `verLinkObsAlta`, `verTablaAlta`, `regCodIdentificador`, `eliCodIdentificador`, `pdfCodIdentificador`, `verLinkObsIdentificador`, `verTablaCodIdentificador`, `vertablaDadosAltaAsignarCodId`, `verGralDadosAltaAsignarCodId`, `regSuperCodIdentificador`, `eliSuperCodIdentificador`, `verLinkObsSuperIdentificador`, `verTablaSuperCodIdentificador`, `verTablaTecArmador`, `regTecArmador`, `modTecArmador`, `eliTecArmador`, `verTablaTecMontador`, `regTecMontador`, `modTecMontador`, `eliTecMontador`, `pdfRepVVAvsVCodID`, `verGralRepVVAvsVCodID`, `verTablaRepVVAvsVCodID`, `regMotivoSupVVAvsVCodID`, `modMotivoSupVVAvsVCodID`, `pdfRepVVIvsVVA`, `verGralRepVVIvsVVA`, `verTablaRepVVIvsVVA`, `regMotivoSupVVIvsVVA`, `modMotivoSupVVIvsVVA`, `regComPlacas`, `eliComPlacas`, `regComPlacasSuper`, `eliComPlacasSuper`, `verGralComPlacas`, `verTablaComPlacas`, `regComKm`, `eliComKm`, `regComKmSuper`, `eliComKmSuper`, `verGralComKm`, `verTablaComKm`, `regComImg`, `eliComImg`, `regComImgSuper`, `eliComImgSuper`, `verGralComImg`, `verTablaComImg`, `regComCliente`, `eliComCliente`, `regComClienteSuper`, `eliComClienteSuper`, `verGralComCliente`, `verTablaComCliente`, `regComDocuFirm`, `eliComDocuFirm`, `regComDocuFirmSuper`, `eliComDocuFirmSuper`, `verGralComDocuFirm`, `verTablaComDocuFirm`, `regComGarantia`, `eliComGarantia`, `regComGarantiaSuper`, `eliComGarantiaSuper`, `verGralComGarantia`, `verTablaComGarantia`, `regComAsesor`, `eliComAsesor`, `regComAsesorSuper`, `eliComAsesorSuper`, `verGralComAsesor`, `verTablaComAsesor`, `id_usuario`) VALUES
(1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1),
(2, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 2),
(3, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', '0', '0', '1', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', '0', '0', '1', '1', '0', '0', '1', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '1', '1', '1', '0', '1', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 3),
(4, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', '1', '0', '1', '1', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', '1', '0', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 4),
(5, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 5),
(6, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '1', '1', '0', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 6),
(7, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 7),
(8, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '1', '1', '1', '1', '0', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 8),
(9, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', '0', '0', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 9),
(10, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '1', '1', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 10),
(11, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 11),
(12, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id_proyecto` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_vehiculo` int(11) NOT NULL,
  `nOrden` int(11) NOT NULL,
  `nProyecto` int(11) NOT NULL,
  `tipoReparacion` varchar(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `km` varchar(12) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `valorVenta` varchar(12) COLLATE utf8mb4_spanish_ci NOT NULL,
  `diagnostico` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `estadoProyectoEliminado` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '1',
  `comSuperPlaca` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `comSuperKm` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `comSuperImg` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `comSuperCliente` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `comSuperDocuFirm` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `comSuperGarantia` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `comSuperAsesor` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `comSuperVerifDiariaVeh` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `descripServ1` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripServ2` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `proyectoActivo` char(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `registroSolicitud` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `altaProyecto` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `proyCodIdentificador` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `superCodIdentificador` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `comPlacas` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `comKm` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `comImg` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `comCliente` int(11) NOT NULL DEFAULT 0,
  `comDocuFirm` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `comGarantia` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `comAsesor` char(1) COLLATE utf8mb4_spanish_ci DEFAULT '0',
  `comVerifDiariaVeh` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `fecha_borrado` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capM` int(11) DEFAULT NULL,
  `id_capB` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id_proyecto`, `id_cliente`, `id_vehiculo`, `nOrden`, `nProyecto`, `tipoReparacion`, `km`, `valorVenta`, `diagnostico`, `estadoProyectoEliminado`, `comSuperPlaca`, `comSuperKm`, `comSuperImg`, `comSuperCliente`, `comSuperDocuFirm`, `comSuperGarantia`, `comSuperAsesor`, `comSuperVerifDiariaVeh`, `descripServ1`, `descripServ2`, `proyectoActivo`, `registroSolicitud`, `altaProyecto`, `proyCodIdentificador`, `superCodIdentificador`, `comPlacas`, `comKm`, `comImg`, `comCliente`, `comDocuFirm`, `comGarantia`, `comAsesor`, `comVerifDiariaVeh`, `fecha_creacion`, `fecha_mod`, `fecha_borrado`, `id_capC`, `id_capM`, `id_capB`) VALUES
(1, 3, 4, 220919, 11344, 'N', '218,989 km', '1,600.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Afinación de la transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-01 15:40:31', NULL, NULL, 3, NULL, NULL),
(2, 4, 5, 220920, 11345, 'GR', '108,811 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'revisar transmisión automática', '-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-01 17:54:45', NULL, NULL, 3, NULL, NULL),
(3, 6, 6, 220921, 11346, 'N', '100,000 km', '15,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Diagnóstico', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-02 09:03:50', NULL, NULL, 3, NULL, NULL),
(5, 8, 8, 220923, 11348, 'N', '99,747 km', '1,400.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Afinación de la transmisión automática', '-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-02 09:19:28', '2022-03-02 09:35:51', NULL, 3, 3, NULL),
(6, 9, 9, 220924, 11349, 'N', '236,001 km', '650.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Afinación de la transmisión automática', '-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-02 09:35:21', NULL, NULL, 3, NULL, NULL),
(7, 10, 10, 220925, 11350, 'N', '144,996 km', '10,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y reparación de la transmisión automática', '-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-02 10:20:27', NULL, NULL, 3, NULL, NULL),
(8, 11, 11, 220926, 11351, 'GR', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-02 11:22:50', NULL, NULL, 3, NULL, NULL),
(9, 12, 12, 220927, 11352, 'N', '210,544 km', '14,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y reparación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-02 11:47:48', NULL, NULL, 3, NULL, NULL),
(10, 13, 13, 220928, 11353, 'GR', '302,651 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar Transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-02 12:54:35', NULL, NULL, 3, NULL, NULL),
(11, 15, 14, 220929, 11354, 'N', '1 km', '13,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-02 15:18:23', NULL, NULL, 3, NULL, NULL),
(12, 16, 15, 220930, 11355, 'GR', '129,117 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-02 16:29:15', NULL, NULL, 3, NULL, NULL),
(13, 17, 16, 220931, 11356, 'N', '103,935 km', '1,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Afinación de la transmisión automática', '-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-03 10:39:15', NULL, NULL, 3, NULL, NULL),
(14, 18, 17, 220932, 11357, 'N', '1 km', '10,500.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-03 10:47:53', NULL, NULL, 3, NULL, NULL),
(15, 19, 18, 220933, 11358, 'N', '1 km', '20,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-03 11:07:44', '2022-03-03 13:16:16', NULL, 3, 3, NULL),
(16, 20, 19, 220934, 11359, 'N', '1 km', '20,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-03 11:18:17', NULL, NULL, 3, NULL, NULL),
(17, 21, 20, 220935, 11360, 'N', '234,184 km', '14,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y reparación de la transmisión autoḿática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-03 13:05:29', NULL, NULL, 3, NULL, NULL),
(18, 22, 21, 220936, 11361, 'N', '245,047 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-03 14:17:23', NULL, NULL, 3, NULL, NULL),
(19, 23, 22, 220937, 11362, 'GR', '263,385 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-03 17:39:49', NULL, NULL, 3, NULL, NULL),
(20, 24, 23, 220938, 11363, 'GR', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-04 10:44:38', NULL, NULL, 3, NULL, NULL),
(21, 25, 24, 220939, 11364, 'GR', '183,818 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-04 11:26:54', NULL, NULL, 3, NULL, NULL),
(23, 27, 26, 220941, 11366, 'N', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico', '-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-04 13:24:02', NULL, NULL, 3, NULL, NULL),
(24, 28, 27, 220942, 11367, 'N', '95,986 km', '1,400.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Afinación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-04 14:52:29', NULL, NULL, 3, NULL, NULL),
(25, 29, 28, 220943, 11368, 'N', '1 km', '14,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-04 17:11:07', NULL, NULL, 3, NULL, NULL),
(26, 30, 29, 220944, 11369, 'N', '1 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-05 09:06:00', NULL, NULL, 3, NULL, NULL),
(27, 31, 30, 220945, 11370, 'N', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-05 09:12:35', NULL, NULL, 3, NULL, NULL),
(28, 32, 31, 110946, 11371, 'N', '146,542 km', '1,400.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Afinación de la transmisión automática', '-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-05 09:16:07', NULL, NULL, 3, NULL, NULL),
(29, 33, 32, 220946, 11372, 'N', '1 km', '11,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-05 10:06:30', NULL, NULL, 3, NULL, NULL),
(30, 34, 33, 220947, 11373, 'N', '119,003 km', '1,900.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Afinación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-05 11:00:26', NULL, NULL, 3, NULL, NULL),
(31, 35, 34, 220948, 11374, 'N', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y reparación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-05 12:42:52', NULL, NULL, 3, NULL, NULL),
(32, 36, 35, 220949, 11375, 'GR', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-05 12:49:45', NULL, NULL, 3, NULL, NULL),
(33, 37, 36, 220950, 11376, 'GR', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automàtica', '-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-05 13:04:58', NULL, NULL, 3, NULL, NULL),
(35, 39, 38, 221002, 11378, 'N', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-07 09:29:05', '2022-03-07 09:54:34', NULL, 3, 3, NULL),
(36, 40, 39, 221003, 11379, 'GR', '249,476 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-07 09:36:09', NULL, NULL, 3, NULL, NULL),
(37, 41, 40, 221004, 11380, 'N', '137,525 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-07 09:40:32', NULL, NULL, 3, NULL, NULL),
(38, 42, 41, 221005, 11381, 'GR', '231,645 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-07 09:46:40', NULL, NULL, 3, NULL, NULL),
(41, 45, 44, 221008, 11384, 'N', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-07 10:45:01', NULL, NULL, 3, NULL, NULL),
(42, 46, 45, 221009, 11385, 'N', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-07 12:14:24', NULL, NULL, 3, NULL, NULL),
(43, 47, 46, 221010, 11386, 'N', '1 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-07 12:47:21', NULL, NULL, 3, NULL, NULL),
(44, 48, 47, 221011, 11387, 'N', '232,196 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-07 13:13:49', NULL, NULL, 3, NULL, NULL),
(45, 49, 48, 221012, 11388, 'GR', '270,292 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmsión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-07 13:28:20', '2022-03-07 14:40:28', NULL, 3, 3, NULL),
(46, 50, 49, 221013, 11389, 'N', '1 km', '13,000.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-07 14:51:01', NULL, NULL, 3, NULL, NULL),
(47, 51, 50, 221014, 11390, 'N', '88,219 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y reparación de la transmisión automatica', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-07 16:23:15', NULL, NULL, 3, NULL, NULL),
(48, 52, 51, 221015, 11391, 'N', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-07 16:47:32', NULL, NULL, 3, NULL, NULL),
(49, 54, 53, 221016, 11392, 'N', '0 km', '13,000.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'REPARACION', '-', '0', '0', '1', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-08 09:51:56', NULL, NULL, 3, NULL, NULL),
(51, 56, 55, 221018, 11394, 'N', '217,741 km', '6,000.00', '', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'EMPACADA', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-08 10:39:42', NULL, NULL, 3, NULL, NULL),
(52, 57, 56, 221019, 11395, 'N', '157,377 km', '18,000.00', '****', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'reparación de transmisión ', '*****', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-08 13:09:41', NULL, NULL, 3, NULL, NULL),
(54, 60, 58, 221021, 11397, 'N', '1 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'REPARACIÓN DE TRANSMISIÓN', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-08 15:37:41', NULL, NULL, 3, NULL, NULL),
(55, 53, 52, 220238, 11398, 'N', '1 km', '1.00', 'Fecha ingreso 15/01/2022\r\nNúmero orden 220238\r\nNúmero de proyecto 11027', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 15/01/2022\r\nNúmero orden 220238\r\nNúmero de proyecto 11027', 'Fecha ingreso 15/01/2022\r\nNúmero orden 220238\r\nNúmero de proyecto 11027', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-08 16:01:13', NULL, NULL, 4, NULL, NULL),
(56, 61, 59, 220341, 11399, 'GR', '1 km', '1.00', 'Fecha ingreso 21/01/2022\r\nNúmero orden 220341\r\nNúmero de proyecto 11068', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 21/01/2022\r\nNúmero orden 220341\r\nNúmero de proyecto 11068', 'Fecha ingreso 21/01/2022\r\nNúmero orden 220341\r\nNúmero de proyecto 11068', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-08 16:05:44', NULL, NULL, 4, NULL, NULL),
(57, 62, 60, 220345, 11400, 'N', '158,235 km', '1.00', 'Fecha ingreso 22/01/2022\r\nNúmero orden 220345\r\nNúmero de proyecto 11072\r\n', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 22/01/2022\r\nNúmero orden 220345\r\nNúmero de proyecto 11072\r\n', 'Fecha ingreso 22/01/2022\r\nNúmero orden 220345\r\nNúmero de proyecto 11072\r\n', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-08 16:13:04', NULL, NULL, 4, NULL, NULL),
(58, 63, 61, 220316, 11401, 'N', '197,467 km', '1.00', 'Fecha ingreso 18/01/2022\r\nNúmero orden 220316\r\nNúmero de proyecto 11043', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 18/01/2022\r\nNúmero orden 220316\r\nNúmero de proyecto 11043', 'Fecha ingreso 18/01/2022\r\nNúmero orden 220316\r\nNúmero de proyecto 11043', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-08 16:19:01', NULL, NULL, 4, NULL, NULL),
(59, 64, 62, 220412, 11402, 'GR', '1 km', '1.00', 'Fecha ingreso 24/01/2022\r\nNúmero orden 220412\r\nNúmero de proyecto 11085', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 24/01/2022\r\nNúmero orden 220412\r\nNúmero de proyecto 11085', 'Fecha ingreso 24/01/2022\r\nNúmero orden 220412\r\nNúmero de proyecto 11085', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-08 16:23:41', NULL, NULL, 4, NULL, NULL),
(60, 65, 63, 220420, 11403, 'N', '1 km', '1.00', 'Fecha ingreso 25/01/2022\r\nNúmero orden 220420\r\nNúmero de proyecto 11093\r\n', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 25/01/2022\r\nNúmero orden 220420\r\nNúmero de proyecto 11093\r\n', 'Fecha ingreso 25/01/2022\r\nNúmero orden 220420\r\nNúmero de proyecto 11093\r\n', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-08 16:28:58', NULL, NULL, 4, NULL, NULL),
(61, 66, 64, 220436, 11404, 'GR', '1 km', '1.00', 'Fecha ingreso 28/01/2022\r\nNúmero orden 220436\r\nNúmero de proyecto 11109', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 28/01/2022\r\nNúmero orden 220436\r\nNúmero de proyecto 11109', 'Fecha ingreso 28/01/2022\r\nNúmero orden 220436\r\nNúmero de proyecto 11109', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-08 16:33:05', NULL, NULL, 4, NULL, NULL),
(62, 67, 65, 220450, 11405, 'GR', '1 km', '1.00', 'Fecha ingreso 29/01/2022\r\nNúmero orden 220450\r\nNúmero de proyecto 11124', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 29/01/2022\r\nNúmero orden 220450\r\nNúmero de proyecto 11124', 'Fecha ingreso 29/01/2022\r\nNúmero orden 220450\r\nNúmero de proyecto 11124', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-08 16:47:03', NULL, NULL, 4, NULL, NULL),
(63, 68, 66, 220441, 11406, 'N', '1 km', '1.00', 'Fecha ingreso 28/01/2022\r\nNúmero orden 220441\r\nNúmero de proyecto 11115\r\n', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 28/01/2022\r\nNúmero orden 220441\r\nNúmero de proyecto 11115\r\n', 'Fecha ingreso 28/01/2022\r\nNúmero orden 220441\r\nNúmero de proyecto 11115\r\n', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '0000-00-00 00:00:00', NULL, NULL, 4, NULL, NULL),
(64, 69, 67, 220520, 11407, 'GR', '1 km', '1.00', 'Fecha ingreso 02/02/2022\r\nNúmero orden 220520\r\nNúmero de proyecto 11145\r\ncolor Plata', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 02/02/2022\r\nNúmero orden 220520\r\nNúmero de proyecto 11145', 'Fecha ingreso 02/02/2022\r\nNúmero orden 220520\r\nNúmero de proyecto 11145', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-08 16:58:02', NULL, NULL, 4, NULL, NULL),
(65, 70, 68, 220521, 11408, 'GR', '1 km', '1.00', 'Fecha ingreso 02/02/2022\r\nNúmero orden 220521\r\nNúmero de proyecto 11146', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 02/02/2022\r\nNúmero orden 220521\r\nNúmero de proyecto 11146', 'Fecha ingreso 02/02/2022\r\nNúmero orden 220521\r\nNúmero de proyecto 11146', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-08 17:04:26', NULL, NULL, 4, NULL, NULL),
(66, 72, 69, 220522, 11409, 'GR', '1 km', '1.00', 'Fecha ingreso 02/02/2022\r\nNúmero orden 220522\r\nNúmero de proyecto 11147', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 02/02/2022\r\nNúmero orden 220522\r\nNúmero de proyecto 11147', 'Fecha ingreso 02/02/2022\r\nNúmero orden 220522\r\nNúmero de proyecto 11147', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 09:25:39', NULL, NULL, 4, NULL, NULL),
(68, 73, 71, 220529, 11411, 'GR', '1 km', '1.00', 'Fecha ingreso 03/02/2022\r\nNúmero orden 220529\r\nNúmero de proyecto 11156', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 03/02/2022\r\nNúmero orden 220529\r\nNúmero de proyecto 11156', 'Fecha ingreso 03/02/2022\r\nNúmero orden 220529\r\nNúmero de proyecto 11156', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 09:30:26', NULL, NULL, 4, NULL, NULL),
(69, 75, 72, 220531, 11412, 'GR', '1 km', '1.00', 'Fecha ingreso 03/02/2022\r\nNúmero orden 220531\r\nNúmero de proyecto 11158\r\n', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 03/02/2022\r\nNúmero orden 220531\r\nNúmero de proyecto 11158\r\n', 'Fecha ingreso 03/02/2022\r\nNúmero orden 220531\r\nNúmero de proyecto 11158\r\n', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 09:35:52', NULL, NULL, 4, NULL, NULL),
(71, 76, 74, 220536, 11414, 'GR', '1 km', '1.00', 'Fecha ingreso 04/02/2022\r\nNúmero orden 220536\r\nNúmero de proyecto 11163\r\n', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 04/02/2022\r\nNúmero orden 220536\r\nNúmero de proyecto 11163\r\n', 'Fecha ingreso 04/02/2022\r\nNúmero orden 220536\r\nNúmero de proyecto 11163\r\n', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 09:41:43', NULL, NULL, 4, NULL, NULL),
(72, 77, 75, 220537, 11415, 'GR', '1 km', '1.00', 'Fecha ingreso 04/02/2022\r\nNúmero orden 220537\r\nNúmero de proyecto 11164', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 04/02/2022\r\nNúmero orden 220537\r\nNúmero de proyecto 11164', 'Fecha ingreso 04/02/2022\r\nNúmero orden 220537\r\nNúmero de proyecto 11164', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 09:47:52', NULL, NULL, 4, NULL, NULL),
(74, 79, 76, 220535, 11416, 'N', '1 km', '1.00', 'Fecha ingreso 03/02/2022\r\nNúmero orden \r\nNúmero de proyecto 11162\r\n', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 03/02/2022\r\nNúmero orden 220535\r\nNúmero de proyecto 11162\r\n', 'Fecha ingreso 03/02/2022\r\nNúmero orden 220535\r\nNúmero de proyecto 11162\r\n', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 09:59:21', NULL, NULL, 4, NULL, NULL),
(75, 80, 78, 220533, 11418, 'N', '173,243 km', '1.00', 'Fecha ingreso 03/02/2022\r\nNúmero orden 220533\r\nNúmero de proyecto 11160', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 03/02/2022\r\nNúmero orden 220533\r\nNúmero de proyecto 11160', 'Fecha ingreso 03/02/2022\r\nNúmero orden 220533\r\nNúmero de proyecto 11160', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 10:03:46', NULL, NULL, 4, NULL, NULL),
(76, 81, 80, 221025, 11419, 'N', '98,260 km', '27,000.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico y posible reparación de la transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 10:06:59', NULL, NULL, 3, NULL, NULL),
(77, 82, 79, 220527, 11420, 'N', '1 km', '1.00', 'Fecha ingreso 21/02/2022\r\nNúmero orden 220527\r\nNúmero de proyecto 11152', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 21/02/2022\r\nNúmero orden 220527\r\nNúmero de proyecto 11152', 'Fecha ingreso 21/02/2022\r\nNúmero orden 220527\r\nNúmero de proyecto 11152', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 10:08:23', NULL, NULL, 4, NULL, NULL),
(78, 83, 81, 220511, 11421, 'N', '140,886 km', '1.00', 'Fecha ingreso 01/02/2022\r\nNúmero orden 220511\r\nNúmero de proyecto 11136', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 01/02/2022\r\nNúmero orden 220511\r\nNúmero de proyecto 11136', 'Fecha ingreso 01/02/2022\r\nNúmero orden 220511\r\nNúmero de proyecto 11136', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 10:25:07', NULL, NULL, 4, NULL, NULL),
(79, 84, 82, 220504, 11422, 'N', '131,793 km', '1.00', 'Fecha ingreso 31/01/2022\r\nNúmero orden 220504\r\nNúmero de proyecto 11128\r\n', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 31/01/2022\r\nNúmero orden 220504\r\nNúmero de proyecto 11128\r\n', 'Fecha ingreso 31/01/2022\r\nNúmero orden 220504\r\nNúmero de proyecto 11128\r\n', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '0000-00-00 00:00:00', NULL, NULL, 4, NULL, NULL),
(80, 85, 83, 220610, 11423, 'GR', '1 km', '1.00', 'Fecha ingreso 08/02/2022\r\nNúmero orden 220610\r\nNúmero de proyecto 11189', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 08/02/2022\r\nNúmero orden 220610\r\nNúmero de proyecto 11189', 'Fecha ingreso 08/02/2022\r\nNúmero orden 220610\r\nNúmero de proyecto 11189', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 10:33:42', NULL, NULL, 4, NULL, NULL),
(81, 86, 84, 220625, 11424, 'GR', '1 km', '1.00', 'Fecha ingreso 09/02/2022\r\nNúmero orden 220625\r\nNúmero de proyecto 11204\r\n', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 09/02/2022\r\nNúmero orden 220625\r\nNúmero de proyecto 11204\r\n', 'Fecha ingreso 09/02/2022\r\nNúmero orden 220625\r\nNúmero de proyecto 11204\r\n', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 10:38:37', NULL, NULL, 4, NULL, NULL),
(82, 69, 67, 220628, 11425, 'GR', '1 km', '1.00', 'Fecha ingreso 10/02/2022\r\nNúmero orden 220628\r\nNúmero de proyecto 11207', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 10/02/2022\r\nNúmero orden 220628\r\nNúmero de proyecto 11207', 'Fecha ingreso 10/02/2022\r\nNúmero orden 220628\r\nNúmero de proyecto 11207', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 10:42:31', NULL, NULL, 4, NULL, NULL),
(83, 63, 85, 220638, 11426, 'GR', '1 km', '1.00', 'Fecha ingreso 11/02/2022\r\nNúmero orden 220638\r\nNúmero de proyecto 11217\r\n', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 11/02/2022\r\nNúmero orden 220638\r\nNúmero de proyecto 11217\r\n', 'Fecha ingreso 11/02/2022\r\nNúmero orden 220638\r\nNúmero de proyecto 11217\r\n', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 11:12:47', NULL, NULL, 4, NULL, NULL),
(84, 16, 15, 220629, 11427, 'GR', '1 km', '1.00', 'Fecha ingreso 10/02/2022\r\nNúmero orden 220629\r\nNúmero de proyecto 11208', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 10/02/2022\r\nNúmero orden 220629\r\nNúmero de proyecto 11208', 'Fecha ingreso 10/02/2022\r\nNúmero orden 220629\r\nNúmero de proyecto 11208', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 11:17:07', NULL, NULL, 4, NULL, NULL),
(85, 87, 99, 221026, 11428, 'N', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico ', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 11:50:54', '2022-03-09 14:26:42', NULL, 3, 3, NULL),
(86, 88, 86, 220639, 11428, 'GR', '1 km', '1.00', 'Fecha ingreso 11/02/2022\r\nNúmero orden 220639\r\nNúmero de proyecto 11218', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 11/02/2022\r\nNúmero orden 220639\r\nNúmero de proyecto 11218', 'Fecha ingreso 11/02/2022\r\nNúmero orden 220639\r\nNúmero de proyecto 11218', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 11:51:14', NULL, NULL, 4, NULL, NULL),
(87, 89, 88, 220644, 11430, 'GR', '1 km', '1.00', 'Fecha ingreso 12/02/2022\r\nNúmero orden 220644\r\nNúmero de proyecto 11223\r\n', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 12/02/2022\r\nNúmero orden 220644\r\nNúmero de proyecto 11223\r\n', 'Fecha ingreso 12/02/2022\r\nNúmero orden 220644\r\nNúmero de proyecto 11223\r\n', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 11:55:02', NULL, NULL, 4, NULL, NULL),
(88, 90, 90, 221027, 11431, 'N', '123,773 km', '6,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico y Dirección', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 11:58:39', NULL, NULL, 3, NULL, NULL),
(89, 91, 89, 220703, 11431, 'GR', '153,983 km', '1.00', 'Fecha ingreso 25/02/2022\r\nNúmero orden 220703\r\nNúmero de proyecto 11228', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 25/02/2022\r\nNúmero orden 220703\r\nNúmero de proyecto 11228', 'Fecha ingreso 25/02/2022\r\nNúmero orden 220703\r\nNúmero de proyecto 11228', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 11:59:15', NULL, NULL, 4, NULL, NULL),
(90, 92, 91, 220706, 11433, 'GR', '1 km', '1.00', 'Fecha ingreso 14/02/2022\r\nNúmero orden 220706\r\nNúmero de proyecto 11231\r\n', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 14/02/2022\r\nNúmero orden 220706\r\nNúmero de proyecto 11231\r\n', 'Fecha ingreso 14/02/2022\r\nNúmero orden 220706\r\nNúmero de proyecto 11231\r\n', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 12:03:11', NULL, NULL, 4, NULL, NULL),
(91, 93, 92, 220707, 11434, 'GR', '1 km', '1.00', 'Fecha ingreso 14/02/2022\r\nNúmero orden 220707\r\nNúmero de proyecto 11232\r\n', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 14/02/2022\r\nNúmero orden 220707\r\nNúmero de proyecto 11232\r\n', 'Fecha ingreso 14/02/2022\r\nNúmero orden 220707\r\nNúmero de proyecto 11232\r\n', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 12:07:15', NULL, NULL, 4, NULL, NULL),
(92, 94, 93, 220717, 11435, 'GR', '138,028 km', '1.00', 'Fecha ingreso 15/02/2022\r\nNúmero orden 220717\r\nNúmero de proyecto 11242', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 15/02/2022\r\nNúmero orden 220717\r\nNúmero de proyecto 11242', 'Fecha ingreso 15/02/2022\r\nNúmero orden 220717\r\nNúmero de proyecto 11242', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 12:14:51', NULL, NULL, 4, NULL, NULL),
(93, 95, 94, 220718, 11436, 'GR', '1 km', '1.00', 'Fecha ingreso 15/02/2022\r\nNúmero orden 220718\r\nNúmero de proyecto 11243', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 15/02/2022\r\nNúmero orden 220718\r\nNúmero de proyecto 11243', 'Fecha ingreso 15/02/2022\r\nNúmero orden 220718\r\nNúmero de proyecto 11243', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 12:23:27', NULL, NULL, 4, NULL, NULL),
(94, 96, 95, 220723, 11437, 'GR', '1 km', '1.00', 'Fecha ingreso 16/02/2022\r\nNúmero orden 220723\r\nNúmero de proyecto 11248', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 16/02/2022\r\nNúmero orden 220723\r\nNúmero de proyecto 11248', 'Fecha ingreso 16/02/2022\r\nNúmero orden 220723\r\nNúmero de proyecto 11248', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 12:42:41', NULL, NULL, 4, NULL, NULL),
(95, 63, 85, 220732, 11438, 'GR', '197,696 km', '1.00', 'Fecha ingreso 17/02/2022\r\nNúmero orden 220732\r\nNúmero de proyecto 11257', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 17/02/2022\r\nNúmero orden 220732\r\nNúmero de proyecto 11257', 'Fecha ingreso 17/02/2022\r\nNúmero orden 220732\r\nNúmero de proyecto 11257', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 12:45:37', NULL, NULL, 4, NULL, NULL),
(96, 97, 96, 220737, 11439, 'N', '1 km', '1.00', 'Fecha ingreso 17/02/2022\r\nNúmero orden 220737\r\nNúmero de proyecto 11262', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 17/02/2022\r\nNúmero orden 220737\r\nNúmero de proyecto 11262', 'Fecha ingreso 17/02/2022\r\nNúmero orden 220737\r\nNúmero de proyecto 11262', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 12:50:53', NULL, NULL, 4, NULL, NULL),
(97, 98, 98, 221028, 11440, 'N', '149,999 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 12:55:20', NULL, NULL, 3, NULL, NULL),
(98, 99, 97, 220722, 11440, 'N', '88,982 km', '1.00', 'Fecha ingreso 17/02/2022\r\nNúmero orden 220722\r\nNúmero de proyecto 11247', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 17/02/2022\r\nNúmero orden 220722\r\nNúmero de proyecto 11247', 'Fecha ingreso 17/02/2022\r\nNúmero orden 220722\r\nNúmero de proyecto 11247', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 12:56:14', NULL, NULL, 4, NULL, NULL),
(99, 100, 100, 220719, 11442, 'N', '231,149 km', '1.00', 'Fecha ingreso 15/02/2022\r\nNúmero orden 220719\r\nNúmero de proyecto 11244\r\n', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 15/02/2022\r\nNúmero orden 220719\r\nNúmero de proyecto 11244\r\n', 'Fecha ingreso 15/02/2022\r\nNúmero orden 220719\r\nNúmero de proyecto 11244\r\n', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 14:25:25', NULL, NULL, 4, NULL, NULL),
(100, 101, 101, 220713, 11443, 'N', '254,628 km', '1.00', 'Fecha ingreso 15/02/2022\r\nNúmero orden 220713\r\nNúmero de proyecto 11238\r\n', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 15/02/2022\r\nNúmero orden 220713\r\nNúmero de proyecto 11238\r\n', 'Fecha ingreso 15/02/2022\r\nNúmero orden 220713\r\nNúmero de proyecto 11238\r\n', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 14:29:57', NULL, NULL, 4, NULL, NULL),
(101, 102, 102, 220712, 11444, 'N', '226,163 km', '1.00', 'Fecha ingreso 15/02/2022\r\nNúmero orden 220712\r\nNúmero de proyecto 11237\r\n', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 15/02/2022\r\nNúmero orden 220712\r\nNúmero de proyecto 11237\r\n', 'Fecha ingreso 15/02/2022\r\nNúmero orden 220712\r\nNúmero de proyecto 11237\r\n', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 14:33:48', NULL, '2022-03-25 12:46:02', 4, NULL, 2),
(102, 103, 103, 220710, 11445, 'N', '295,704 km', '1.00', 'Fecha ingreso 14/02/2022\r\nNúmero orden 220710\r\nNúmero de proyecto 11235', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 14/02/2022\r\nNúmero orden 220710\r\nNúmero de proyecto 11235', 'Fecha ingreso 14/02/2022\r\nNúmero orden 220710\r\nNúmero de proyecto 11235', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 14:38:17', NULL, NULL, 4, NULL, NULL),
(103, 48, 47, 220701, 11446, 'N', '231,251 km', '1.00', 'Fecha ingreso 14/02/2022\r\nNúmero orden 220701\r\nNúmero de proyecto 11226\r\n', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 14/02/2022\r\nNúmero orden 220701\r\nNúmero de proyecto 11226\r\n', 'Fecha ingreso 14/02/2022\r\nNúmero orden 220701\r\nNúmero de proyecto 11226\r\n', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 14:40:41', NULL, NULL, 4, NULL, NULL),
(104, 104, 104, 220343, 11447, 'N', '1 km', '1.00', 'Fecha ingreso 22/01/2022\r\nNúmero orden 220343\r\nNúmero de proyecto 11070\r\n', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 22/01/2022\r\nNúmero orden 220343\r\nNúmero de proyecto 11070\r\n', 'Fecha ingreso 22/01/2022\r\nNúmero orden 220343\r\nNúmero de proyecto 11070\r\n', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 14:49:12', NULL, NULL, 4, NULL, NULL),
(105, 105, 106, 220111, 11448, 'N', '1 km', '1.00', 'Fecha ingreso 14/01/2022\r\nNúmero orden 220111\r\nNúmero de proyecto 10944', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 14/01/2022\r\nNúmero orden 220111\r\nNúmero de proyecto 10944', 'Fecha ingreso 14/01/2022\r\nNúmero orden 220111\r\nNúmero de proyecto 10944', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 14:58:55', NULL, NULL, 4, NULL, NULL),
(106, 36, 35, 215033, 11449, 'N', '1 km', '1.00', 'Fecha ingreso 18/12/2021\r\nNúmero orden 215033\r\nNúmero de proyecto 10868', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 18/12/2021\r\nNúmero orden 215033\r\nNúmero de proyecto 10868', 'Fecha ingreso 18/12/2021\r\nNúmero orden 215033\r\nNúmero de proyecto 10868', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 15:01:25', NULL, NULL, 4, NULL, NULL),
(107, 106, 107, 212508, 11450, 'GR', '192,303 km', '1.00', 'Fecha ingreso 07/08/2021\r\nNúmero orden 212508\r\nNúmero de proyecto 9659\r\n', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 07/08/2021\r\nNúmero orden 212508\r\nNúmero de proyecto 9659\r\n', 'Fecha ingreso 07/08/2021\r\nNúmero orden 212508\r\nNúmero de proyecto 9659\r\n', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 15:12:06', NULL, NULL, 4, NULL, NULL),
(108, 107, 108, 211312, 11451, 'GR', '121,893 km', '1.00', 'Fecha ingreso 07/08/2021\r\nNúmero orden 211312\r\nNúmero de proyecto 9029', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 07/08/2021\r\nNúmero orden 211312\r\nNúmero de proyecto 9029', 'Fecha ingreso 07/08/2021\r\nNúmero orden 211312\r\nNúmero de proyecto 9029', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 15:17:09', NULL, NULL, 4, NULL, NULL),
(109, 108, 109, 211933, 11452, 'GR', '125,737 km', '1.00', 'Fecha ingreso 20/08/2021\r\nNúmero orden 211933\r\nNúmero de proyecto 9379', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 20/08/2021\r\nNúmero orden 211933\r\nNúmero de proyecto 9379', 'Fecha ingreso 20/08/2021\r\nNúmero orden 211933\r\nNúmero de proyecto 9379', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 15:23:30', NULL, NULL, 4, NULL, NULL),
(110, 109, 110, 213830, 11453, 'GR', '1 km', '1.00', 'Fecha ingreso 23/09/2021\r\nNúmero orden 213830\r\nNúmero de proyecto 10373', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 23/09/2021\r\nNúmero orden 213830\r\nNúmero de proyecto 10373', 'Fecha ingreso 23/09/2021\r\nNúmero orden 213830\r\nNúmero de proyecto 10373', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 15:27:16', NULL, NULL, 4, NULL, NULL),
(111, 110, 111, 212910, 11454, 'N', '1 km', '1.00', 'Fecha ingreso 19/07/2021\r\nNúmero orden 212910\r\nNúmero de proyecto 9893', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 19/07/2021\r\nNúmero orden 212910\r\nNúmero de proyecto 9893', 'Fecha ingreso 19/07/2021\r\nNúmero orden 212910\r\nNúmero de proyecto 9893', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 15:30:44', NULL, NULL, 4, NULL, NULL),
(112, 111, 112, 214121, 11455, 'GR', '1 km', '1.00', 'Fecha ingreso 23/02/2022\r\nNúmero orden 214121\r\nNúmero de proyecto 10485', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 23/02/2022\r\nNúmero orden 214121\r\nNúmero de proyecto 10485', 'Fecha ingreso 23/02/2022\r\nNúmero orden 214121\r\nNúmero de proyecto 10485', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 15:34:23', NULL, NULL, 4, NULL, NULL),
(113, 112, 113, 214440, 11456, 'GR', '124,482 km', '1.00', 'Fecha ingreso 05/11/2021\r\nNúmero orden 214440\r\nNúmero de proyecto 10622', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 05/11/2021\r\nNúmero orden 214440\r\nNúmero de proyecto 10622', 'Fecha ingreso 05/11/2021\r\nNúmero orden 214440\r\nNúmero de proyecto 10622', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 15:38:17', NULL, NULL, 4, NULL, NULL),
(114, 113, 114, 213144, 11457, 'GR', '1 km', '1.00', 'Fecha ingreso 07/08/2021\r\nNúmero orden 213144\r\nNúmero de proyecto 10056', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 07/08/2021\r\nNúmero orden 213144\r\nNúmero de proyecto 10056', 'Fecha ingreso 07/08/2021\r\nNúmero orden 213144\r\nNúmero de proyecto 10056', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 15:42:54', NULL, NULL, 4, NULL, NULL),
(116, 115, 116, 221030, 11459, 'N', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico', '-', '0', '0', '1', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-09 17:16:20', NULL, NULL, 3, NULL, NULL),
(117, 116, 117, 221031, 11460, 'N', '1 km', '1.00', 'Fuga de aceite', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-10 09:29:43', NULL, NULL, 3, NULL, NULL),
(118, 118, 118, 220804, 11461, 'GR', '118,463 km', '1.00', 'Fecha ingreso 21/02/2022\r\nNúmero orden 220804\r\nNúmero de proyecto 11276', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 21/02/2022\r\nNúmero orden 220804\r\nNúmero de proyecto 11276', 'Fecha ingreso 21/02/2022\r\nNúmero orden 220804\r\nNúmero de proyecto 11276', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-10 09:48:18', NULL, NULL, 4, NULL, NULL),
(119, 119, 120, 214139, 11462, 'N', '105,269 km', '1.00', 'Fecha ingreso 15/10/2021\r\nNúmero orden 214139\r\nNúmero de proyecto 10505', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 15/10/2021\r\nNúmero orden 214139\r\nNúmero de proyecto 10505', 'Fecha ingreso 15/10/2021\r\nNúmero orden 214139\r\nNúmero de proyecto 10505', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-10 09:56:44', NULL, NULL, 4, NULL, NULL),
(121, 120, 121, 220428, 11464, 'GR', '1 km', '1.00', 'Fecha ingreso 27/01/2022\r\nNúmero orden 220428\r\nNúmero de proyecto 11101', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 27/01/2022\r\nNúmero orden 220428\r\nNúmero de proyecto 11101', 'Fecha ingreso 27/01/2022\r\nNúmero orden 220428\r\nNúmero de proyecto 11101', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-10 10:04:12', NULL, NULL, 4, NULL, NULL),
(122, 121, 122, 220310, 11465, 'N', '135,399 km', '1.00', 'Fecha ingreso 18/01/2022\r\nNúmero orden 220310\r\nNúmero de proyecto 11037', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 18/01/2022\r\nNúmero orden 220310\r\nNúmero de proyecto 11037', 'Fecha ingreso 18/01/2022\r\nNúmero orden 220310\r\nNúmero de proyecto 11037', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-10 10:11:14', NULL, NULL, 4, NULL, NULL),
(123, 122, 123, 214429, 11466, 'GR', '1 km', '1.00', 'Fecha ingreso 04/11/2021\r\nNúmero orden 214429\r\nNúmero de proyecto 10610', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 04/11/2021\r\nNúmero orden 214429\r\nNúmero de proyecto 10610', 'Fecha ingreso 04/11/2021\r\nNúmero orden 214429\r\nNúmero de proyecto 10610', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-10 10:18:24', NULL, NULL, 4, NULL, NULL),
(124, 123, 124, 214225, 11467, 'GR', '290,463 km', '1.00', 'Fecha ingreso 22/10/2021\r\nNúmero orden 214225\r\nNúmero de proyecto 10539', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 22/10/2021\r\nNúmero orden 214225\r\nNúmero de proyecto 10539', 'Fecha ingreso 22/10/2021\r\nNúmero orden 214225\r\nNúmero de proyecto 10539', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-10 10:22:38', NULL, NULL, 4, NULL, NULL),
(125, 124, 125, 221032, 11468, 'N', '112,289 km', '18,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y reparación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-10 12:45:21', NULL, NULL, 3, NULL, NULL),
(126, 126, 126, 221033, 11469, 'N', '268,692 km', '5,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Afinación y switch de presión', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-10 15:39:19', NULL, NULL, 3, NULL, NULL),
(129, 129, 130, 221037, 11472, 'N', '392,147 km', '15,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y reparación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-10 16:27:09', NULL, NULL, 3, NULL, NULL),
(130, 130, 131, 221038, 11473, 'N', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-10 16:35:24', NULL, NULL, 3, NULL, NULL),
(131, 131, 132, 221039, 11474, 'GR', '165,543 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-10 16:42:16', NULL, NULL, 3, NULL, NULL),
(132, 132, 133, 221040, 11475, 'GR', '624,644 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-10 16:52:52', NULL, NULL, 3, NULL, NULL),
(134, 134, 135, 221042, 11477, 'GR', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automátic', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-10 17:21:06', NULL, NULL, 3, NULL, NULL),
(136, 135, 137, 214419, 11479, 'GR', '104,454 km', '1.00', 'Fecha ingreso 03/11/2021\r\nNúmero orden 214419\r\nNúmero de proyecto 10601', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 03/11/2021\r\nNúmero orden 214419\r\nNúmero de proyecto 10601', 'Fecha ingreso 03/11/2021\r\nNúmero orden 214419\r\nNúmero de proyecto 10601', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 10:45:55', NULL, NULL, 4, NULL, NULL),
(137, 136, 138, 213524, 11480, 'GR', '1 km', '1.00', 'Fecha ingreso 01/09/2021\r\nNúmero orden 213524\r\nNúmero de proyecto 10226\r\n', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 01/09/2021\r\nNúmero orden 213524\r\nNúmero de proyecto 10226\r\n', 'Fecha ingreso 01/09/2021\r\nNúmero orden 213524\r\nNúmero de proyecto 10226\r\n', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 10:50:34', NULL, NULL, 4, NULL, NULL),
(138, 137, 139, 220437, 11481, 'GR', '1 km', '1.00', 'Fecha ingreso 28/01/2022\r\nNúmero orden 220437\r\nNúmero de proyecto 11110\r\n', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 28/01/2022\r\nNúmero orden 220437\r\nNúmero de proyecto 11110\r\n', 'Fecha ingreso 28/01/2022\r\nNúmero orden 220437\r\nNúmero de proyecto 11110\r\n', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 10:55:00', NULL, NULL, 4, NULL, NULL),
(139, 138, 140, 220138, 11482, 'GR', '1 km', '1.00', 'Fecha ingreso 07/01/2022\r\nNúmero orden 220138\r\nNúmero de proyecto 10971', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 07/01/2022\r\nNúmero orden 220138\r\nNúmero de proyecto 10971', 'Fecha ingreso 07/01/2022\r\nNúmero orden 220138\r\nNúmero de proyecto 10971', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 10:58:47', NULL, NULL, 4, NULL, NULL),
(140, 140, 142, 220318, 11483, 'N', '1 km', '1.00', 'Fecha ingreso 19/01/2022\r\nNúmero orden 220318\r\nNúmero de proyecto 11045', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 19/01/2022\r\nNúmero orden 220318\r\nNúmero de proyecto 11045', 'Fecha ingreso 19/01/2022\r\nNúmero orden 220318\r\nNúmero de proyecto 11045', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 11:07:03', NULL, NULL, 4, NULL, NULL),
(142, 141, 144, 220135, 11485, 'GR', '1 km', '1.00', 'Fecha ingreso 06/01/2022\r\nNúmero orden 220135\r\nNúmero de proyecto 10968', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 06/01/2022\r\nNúmero orden 220135\r\nNúmero de proyecto 10968', 'Fecha ingreso 06/01/2022\r\nNúmero orden 220135\r\nNúmero de proyecto 10968', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 11:14:57', NULL, NULL, 4, NULL, NULL),
(143, 142, 145, 214307, 11486, 'GR', '1 km', '1.00', 'Fecha ingreso 09/12/2021\r\nNúmero orden 214307\r\nNúmero de proyecto 10554', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 09/12/2021\r\nNúmero orden 214307\r\nNúmero de proyecto 10554', 'Fecha ingreso 09/12/2021\r\nNúmero orden 214307\r\nNúmero de proyecto 10554', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 11:18:32', NULL, NULL, 4, NULL, NULL),
(144, 143, 146, 220503, 11487, 'N', '161,117 km', '1.00', 'Fecha ingreso 19/02/2022\r\nNúmero orden 220503\r\nNúmero de proyecto 11127', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 19/02/2022\r\nNúmero orden 220503\r\nNúmero de proyecto 11127', 'Fecha ingreso 19/02/2022\r\nNúmero orden 220503\r\nNúmero de proyecto 11127', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 11:22:25', NULL, NULL, 4, NULL, NULL),
(145, 144, 147, 220519, 11488, 'GR', '88,352 km', '1.00', 'Fecha ingreso 02/02/2022\r\nNúmero orden 220519\r\nNúmero de proyecto 11144', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 02/02/2022\r\nNúmero orden 220519\r\nNúmero de proyecto 11144', 'Fecha ingreso 02/02/2022\r\nNúmero orden 220519\r\nNúmero de proyecto 11144', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 11:39:18', NULL, NULL, 4, NULL, NULL),
(146, 145, 149, 221044, 11489, 'GR', '80,745 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 11:44:00', NULL, NULL, 3, NULL, NULL),
(147, 146, 148, 212439, 11489, 'GR', '115,650 km', '1.00', 'Fecha ingreso 04/08/2021\r\nNúmero orden 212439\r\nNúmero de proyecto 9641', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 04/08/2021\r\nNúmero orden 212439\r\nNúmero de proyecto 9641', 'Fecha ingreso 04/08/2021\r\nNúmero orden 212439\r\nNúmero de proyecto 9641', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 11:45:02', NULL, NULL, 4, NULL, NULL),
(148, 147, 150, 214513, 11491, 'GR', '143,505 km', '1.00', 'Fecha ingreso 09/11/2021\r\nNúmero orden 214513\r\nNúmero de proyecto 10643\r\n', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 09/11/2021\r\nNúmero orden 214513\r\nNúmero de proyecto 10643\r\n', 'Fecha ingreso 09/11/2021\r\nNúmero orden 214513\r\nNúmero de proyecto 10643\r\n', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 11:51:17', NULL, NULL, 4, NULL, NULL),
(149, 148, 151, 221045, 11492, 'N', '176,635 km', '6,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y empacada de transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 11:53:13', NULL, NULL, 3, NULL, NULL),
(150, 149, 152, 214632, 11493, 'GR', '1 km', '1.00', 'Fecha ingreso 19/11/2021\r\nNúmero orden 214632\r\nNúmero de proyecto 10698', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 19/11/2021\r\nNúmero orden 214632\r\nNúmero de proyecto 10698', 'Fecha ingreso 19/11/2021\r\nNúmero orden 214632\r\nNúmero de proyecto 10698', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 11:56:05', NULL, NULL, 4, NULL, NULL),
(152, 150, 153, 214617, 11495, 'GR', '1 km', '1.00', 'Fecha ingreso 17/11/2021\r\nNúmero orden 214617\r\nNúmero de proyecto 10683', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 17/11/2021\r\nNúmero orden 214617\r\nNúmero de proyecto 10683', 'Fecha ingreso 17/11/2021\r\nNúmero orden 214617\r\nNúmero de proyecto 10683', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 12:05:00', NULL, NULL, 4, NULL, NULL),
(153, 151, 154, 214431, 11496, 'N', '1 km', '1.00', 'Fecha ingreso 04/11/2021\r\nNúmero orden 214431\r\nNúmero de proyecto 10613\r\n', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 04/11/2021\r\nNúmero orden 214431\r\nNúmero de proyecto 10613\r\n', 'Fecha ingreso 04/11/2021\r\nNúmero orden 214431\r\nNúmero de proyecto 10613\r\n', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 12:09:14', NULL, NULL, 4, NULL, NULL);
INSERT INTO `proyectos` (`id_proyecto`, `id_cliente`, `id_vehiculo`, `nOrden`, `nProyecto`, `tipoReparacion`, `km`, `valorVenta`, `diagnostico`, `estadoProyectoEliminado`, `comSuperPlaca`, `comSuperKm`, `comSuperImg`, `comSuperCliente`, `comSuperDocuFirm`, `comSuperGarantia`, `comSuperAsesor`, `comSuperVerifDiariaVeh`, `descripServ1`, `descripServ2`, `proyectoActivo`, `registroSolicitud`, `altaProyecto`, `proyCodIdentificador`, `superCodIdentificador`, `comPlacas`, `comKm`, `comImg`, `comCliente`, `comDocuFirm`, `comGarantia`, `comAsesor`, `comVerifDiariaVeh`, `fecha_creacion`, `fecha_mod`, `fecha_borrado`, `id_capC`, `id_capM`, `id_capB`) VALUES
(154, 152, 155, 220340, 11497, 'GR', '146,175 km', '1.00', 'Fecha ingreso 21/01/2022\r\nNúmero orden 220340\r\nNúmero de proyecto 11067', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 21/01/2022\r\nNúmero orden 220340\r\nNúmero de proyecto 11067', 'Fecha ingreso 21/01/2022\r\nNúmero orden 220340\r\nNúmero de proyecto 11067', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 12:16:08', NULL, NULL, 4, NULL, NULL),
(158, 156, 158, 221050, 11501, 'N', '722 km', '13,000.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Dx y reparación de la transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 13:41:49', NULL, NULL, 3, NULL, NULL),
(159, 157, 159, 221051, 11502, 'N', '133,097 km', '1.00', 'Se neutraliza la transmisión', '1', '0', '0', '0', '0', '0', '0', '0', '0', '- Revisar transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 13:48:28', NULL, NULL, 3, NULL, NULL),
(160, 158, 160, 220603, 11503, 'N', '1 km', '1.00', 'Fecha ingreso 08/02/2022\r\nNúmero orden 220603\r\nNúmero de proyecto 11182', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 08/02/2022\r\nNúmero orden 220603\r\nNúmero de proyecto 11182', 'Fecha ingreso 08/02/2022\r\nNúmero orden 220603\r\nNúmero de proyecto 11182', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 14:14:08', NULL, NULL, 4, NULL, NULL),
(161, 159, 161, 220604, 11504, 'N', '1 km', '1.00', 'Fecha ingreso 08/02/2022\r\nNúmero orden 220604\r\nNúmero de proyecto 11183', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 08/02/2022\r\nNúmero orden 220604\r\nNúmero de proyecto 11183', 'Fecha ingreso 08/02/2022\r\nNúmero orden 220604\r\nNúmero de proyecto 11183', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 14:20:45', NULL, NULL, 4, NULL, NULL),
(162, 2, 3, 220918, 11505, 'N', '131,873 km', '1.00', 'Fecha ingreso 01/03/2022\r\nNúmero orden 220918\r\nNúmero de proyecto 11343', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 01/03/2022\r\nNúmero orden 220918\r\nNúmero de proyecto 11343', 'Fecha ingreso 01/03/2022\r\nNúmero orden 220918\r\nNúmero de proyecto 11343', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 16:05:13', NULL, NULL, 4, NULL, NULL),
(163, 160, 162, 220903, 11506, 'N', '1 km', '1.00', 'Fecha ingreso 28/02/2022\r\nNúmero orden 220903\r\nNúmero de proyecto 11328', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 28/02/2022\r\nNúmero orden 220903\r\nNúmero de proyecto 11328', 'Fecha ingreso 28/02/2022\r\nNúmero orden 220903\r\nNúmero de proyecto 11328', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 16:11:46', NULL, NULL, 4, NULL, NULL),
(164, 161, 163, 220904, 11507, 'N', '1 km', '1.00', 'Fecha ingreso 28/02/2022\r\nNúmero orden 220904\r\nNúmero de proyecto 11329', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 28/02/2022\r\nNúmero orden 220904\r\nNúmero de proyecto 11329', 'Fecha ingreso 28/02/2022\r\nNúmero orden 220904\r\nNúmero de proyecto 11329', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 16:15:22', NULL, NULL, 4, NULL, NULL),
(165, 162, 164, 220906, 11508, 'N', '159,659 km', '1.00', 'Fecha ingreso 28/02/2022\r\nNúmero orden 220906\r\nNúmero de proyecto 11331\r\n', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 28/02/2022\r\nNúmero orden 220906\r\nNúmero de proyecto 11331\r\n', 'Fecha ingreso 28/02/2022\r\nNúmero orden 220906\r\nNúmero de proyecto 11331\r\n', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 16:23:54', NULL, NULL, 4, NULL, NULL),
(166, 163, 165, 220907, 11509, 'N', '1 km', '1.00', 'Fecha ingreso 28/02/2022\r\nNúmero orden 220907\r\nNúmero de proyecto 11332', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 28/02/2022\r\nNúmero orden 220907\r\nNúmero de proyecto 11332', 'Fecha ingreso 28/02/2022\r\nNúmero orden 220907\r\nNúmero de proyecto 11332', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 16:29:04', NULL, NULL, 4, NULL, NULL),
(168, 165, 167, 220910, 11511, 'N', '79,677 km', '1.00', 'Fecha ingreso 28/02/2022\r\nNúmero orden 220910\r\nNúmero de proyecto 11335', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 28/02/2022\r\nNúmero orden 220910\r\nNúmero de proyecto 11335', 'Fecha ingreso 28/02/2022\r\nNúmero orden 220910\r\nNúmero de proyecto 11335', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 16:37:35', NULL, NULL, 4, NULL, NULL),
(169, 166, 168, 220909, 11512, 'N', '1 km', '1.00', 'Fecha ingreso 28/02/2022\r\nNúmero orden 220909\r\nNúmero de proyecto 11334', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 28/02/2022\r\nNúmero orden 220909\r\nNúmero de proyecto 11334', 'Fecha ingreso 28/02/2022\r\nNúmero orden 220909\r\nNúmero de proyecto 11334', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 16:41:32', NULL, NULL, 4, NULL, NULL),
(170, 167, 169, 220913, 11513, 'N', '1 km', '1.00', 'Fecha ingreso 28/02/2022\r\nNúmero orden 220913\r\nNúmero de proyecto 11338', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 28/02/2022\r\nNúmero orden 220913\r\nNúmero de proyecto 11338', 'Fecha ingreso 28/02/2022\r\nNúmero orden 220913\r\nNúmero de proyecto 11338', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 16:45:28', NULL, NULL, 4, NULL, NULL),
(171, 168, 170, 220152, 11514, 'N', '140,845 km', '10,000.00', '- no camina', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y reparación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 16:46:45', NULL, NULL, 3, NULL, NULL),
(172, 169, 171, 220801, 11515, 'N', '1 km', '1.00', 'Fecha ingreso 21/02/2022\r\nNúmero orden 220801\r\nNúmero de proyecto 11273', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 21/02/2022\r\nNúmero orden 220801\r\nNúmero de proyecto 11273', 'Fecha ingreso 21/02/2022\r\nNúmero orden 220801\r\nNúmero de proyecto 11273', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 17:07:47', NULL, NULL, 4, NULL, NULL),
(173, 170, 172, 220803, 11516, 'N', '1 km', '1.00', 'Fecha ingreso 21/02/2022\r\nNúmero orden 220803\r\nNúmero de proyecto 11275\r\n', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 21/02/2022\r\nNúmero orden 220803\r\nNúmero de proyecto 11275\r\n', 'Fecha ingreso 21/02/2022\r\nNúmero orden 220803\r\nNúmero de proyecto 11275\r\n', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 17:11:32', NULL, NULL, 4, NULL, NULL),
(174, 171, 173, 220805, 11517, 'N', '1 km', '1.00', 'Fecha ingreso 21/02/2022\r\nNúmero orden 220805\r\nNúmero de proyecto 11278', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 21/02/2022\r\nNúmero orden 220805\r\nNúmero de proyecto 11278', 'Fecha ingreso 21/02/2022\r\nNúmero orden 220805\r\nNúmero de proyecto 11278', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 17:15:44', NULL, NULL, 4, NULL, NULL),
(175, 172, 174, 220806, 11518, 'N', '1 km', '1.00', 'Fecha ingreso 21/02/2022\r\nNúmero orden 220806\r\nNúmero de proyecto 11279', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 21/02/2022\r\nNúmero orden 220806\r\nNúmero de proyecto 11279', 'Fecha ingreso 21/02/2022\r\nNúmero orden 220806\r\nNúmero de proyecto 11279', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-11 17:19:07', NULL, NULL, 4, NULL, NULL),
(177, 173, 175, 220836, 11520, 'N', '1 km', '1.00', 'Fecha ingreso 26/02/2022\r\nNúmero orden 220836\r\nNúmero de proyecto 11320', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 26/02/2022\r\nNúmero orden 220836\r\nNúmero de proyecto 11320', 'Fecha ingreso 26/02/2022\r\nNúmero orden 220836\r\nNúmero de proyecto 11320', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-12 09:08:24', NULL, NULL, 4, NULL, NULL),
(178, 133, 134, 220338, 11521, 'N', '161,024 km', '1.00', 'Fecha ingreso 25/02/2022\r\nNúmero orden 220338\r\nNúmero de proyecto 11312', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 25/02/2022\r\nNúmero orden 220338\r\nNúmero de proyecto 11312', 'Fecha ingreso 25/02/2022\r\nNúmero orden 220338\r\nNúmero de proyecto 11312', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-12 09:10:59', NULL, NULL, 4, NULL, NULL),
(180, 175, 176, 220836, 11522, 'N', '1 km', '1.00', 'Fecha ingreso 25/02/2022\r\nNúmero orden 220836\r\nNúmero de proyecto 11310', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 25/02/2022\r\nNúmero orden 220836\r\nNúmero de proyecto 11310', 'Fecha ingreso 25/02/2022\r\nNúmero orden 220836\r\nNúmero de proyecto 11310', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-12 09:14:49', NULL, NULL, 4, NULL, NULL),
(181, 176, 178, 220832, 11524, 'N', '1 km', '1.00', 'Fecha ingreso 25/02/2022\r\nNúmero orden 220832\r\nNúmero de proyecto 11306', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 25/02/2022\r\nNúmero orden 220832\r\nNúmero de proyecto 11306', 'Fecha ingreso 25/02/2022\r\nNúmero orden 220832\r\nNúmero de proyecto 11306', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-12 09:23:02', NULL, NULL, 4, NULL, NULL),
(182, 177, 180, 220155, 11525, 'N', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-12 09:26:17', NULL, NULL, 3, NULL, NULL),
(183, 178, 179, 220831, 11526, 'N', '1 km', '1.00', 'Fecha ingreso 02/03/2022\r\nNúmero orden 220831\r\nNúmero de proyecto 11305', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 02/03/2022\r\nNúmero orden 220831\r\nNúmero de proyecto 11305', 'Fecha ingreso 02/03/2022\r\nNúmero orden 220831\r\nNúmero de proyecto 11305', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-12 09:27:34', NULL, NULL, 4, NULL, NULL),
(184, 179, 181, 220829, 11527, 'N', '106,019 km', '1.00', 'Fecha ingreso 24/02/2022\r\nNúmero orden 220829\r\nNúmero de proyecto 11303', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 24/02/2022\r\nNúmero orden 220829\r\nNúmero de proyecto 11303', 'Fecha ingreso 24/02/2022\r\nNúmero orden 220829\r\nNúmero de proyecto 11303', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-12 09:31:29', NULL, NULL, 4, NULL, NULL),
(185, 180, 182, 220826, 11528, 'N', '239,377 km', '1.00', 'Fecha ingreso 24/02/2022\r\nNúmero orden 220826\r\nNúmero de proyecto 11300', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 24/02/2022\r\nNúmero orden 220826\r\nNúmero de proyecto 11300', 'Fecha ingreso 24/02/2022\r\nNúmero orden 220826\r\nNúmero de proyecto 11300', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-12 09:40:15', NULL, NULL, 4, NULL, NULL),
(186, 173, 183, 220820, 11529, 'N', '1 km', '1.00', 'Fecha ingreso 23/02/2022\r\nNúmero orden 220820\r\nNúmero de proyecto 11293', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 23/02/2022\r\nNúmero orden 220820\r\nNúmero de proyecto 11293', 'Fecha ingreso 23/02/2022\r\nNúmero orden 220820\r\nNúmero de proyecto 11293', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-12 09:42:31', NULL, NULL, 4, NULL, NULL),
(187, 181, 184, 220816, 11530, 'N', '112,568 km', '1.00', 'Fecha ingreso 23/02/2022\r\nNúmero orden 220816\r\nNúmero de proyecto 11289', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Fecha ingreso 23/02/2022\r\nNúmero orden 220816\r\nNúmero de proyecto 11289', 'Fecha ingreso 23/02/2022\r\nNúmero orden 220816\r\nNúmero de proyecto 11289', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-12 09:45:46', NULL, NULL, 4, NULL, NULL),
(189, 183, 186, 220157, 11532, 'N', '234,294 km', '25,000.00', 'OJO: falla encendido\r\nTrae cortacorriente\r\nCheck prendido \r\n\r\nFallas: Fuga de presión\r\nSegunda a tercera no entra cambio y se jalonea', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Dx y reparación de la transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-12 10:02:29', NULL, NULL, 3, NULL, NULL),
(192, 99, 97, 220160, 11535, 'N', '88,982 km', '45,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y reparación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-12 12:58:16', NULL, NULL, 3, NULL, NULL),
(193, 188, 122, 220161, 11536, 'N', '135,399 km', '10,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-12 13:00:57', NULL, NULL, 3, NULL, NULL),
(194, 189, 174, 220162, 11537, 'N', '185,590 km', '13,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y reparación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-12 13:03:26', NULL, NULL, 3, NULL, NULL),
(195, 190, 189, 220162, 11538, 'GR', '42,967 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-.', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-12 13:09:35', NULL, NULL, 3, NULL, NULL),
(197, 179, 181, 220165, 11540, 'N', '106,019 km', '20,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-12 13:35:37', NULL, NULL, 3, NULL, NULL),
(198, 97, 96, 220166, 11541, 'N', '1 km', '28,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-12 13:38:19', NULL, NULL, 3, NULL, NULL),
(199, 162, 164, 220167, 11542, 'N', '159,659 km', '20,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y reparación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-12 13:47:13', NULL, NULL, 3, NULL, NULL),
(200, 191, 191, 221101, 11543, 'N', '1 km', '13,000.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-14 08:46:33', NULL, NULL, 3, NULL, NULL),
(201, 192, 192, 221102, 11544, 'N', '1 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-14 10:27:12', NULL, NULL, 3, NULL, NULL),
(202, 193, 193, 221103, 11545, 'GR', '148,938 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '0', '0', '0', '0', '1', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-14 11:39:58', NULL, NULL, 3, NULL, NULL),
(203, 194, 194, 221104, 11546, 'N', '1 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-14 12:22:04', NULL, NULL, 3, NULL, NULL),
(204, 195, 195, 221105, 11547, 'N', '213,451 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-14 12:38:30', NULL, NULL, 3, NULL, NULL),
(205, 197, 196, 221105, 11548, 'GR', '1 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmsión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-14 14:40:13', NULL, NULL, 3, NULL, NULL),
(206, 198, 197, 221106, 11549, 'N', '1 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico y reparación de la transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-14 14:45:56', NULL, NULL, 3, NULL, NULL),
(207, 199, 198, 221107, 11550, 'N', '223,685 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y empacada de transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-14 14:52:20', NULL, NULL, 3, NULL, NULL),
(208, 200, 199, 221108, 11551, 'N', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '-', '0', '1', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-14 14:57:33', NULL, NULL, 3, NULL, NULL),
(209, 201, 200, 221109, 11552, 'GR', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-14 15:01:36', NULL, NULL, 3, NULL, NULL),
(211, 203, 202, 221111, 11554, 'N', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-14 15:11:13', NULL, NULL, 3, NULL, NULL),
(212, 204, 203, 221112, 11555, 'GR', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-14 15:23:44', NULL, NULL, 3, NULL, NULL),
(213, 205, 204, 221113, 11556, 'N', '1 km', '25,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-14 15:32:06', NULL, NULL, 3, NULL, NULL),
(215, 207, 206, 221115, 11558, 'GR', '1 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-14 17:21:38', NULL, NULL, 3, NULL, NULL),
(216, 208, 207, 221116, 11559, 'N', '1 km', '15,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y reparación de la transmisión automática', '.', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-14 17:30:56', NULL, NULL, 3, NULL, NULL),
(217, 209, 208, 221117, 11560, 'N', '1 km', '1.00', '-', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico y reparación de la transmisión automática', '-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-14 17:35:24', NULL, '2022-03-25 12:49:53', 3, NULL, 2),
(219, 211, 210, 221119, 11562, 'N', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '.', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-14 17:44:05', NULL, NULL, 3, NULL, NULL),
(220, 212, 211, 211120, 11563, 'N', '201,945 km', '1,400.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Afinación de transmisión automática sin Gr', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-15 09:21:10', NULL, NULL, 3, NULL, NULL),
(221, 213, 212, 221121, 11564, 'N', '88,360 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-15 09:38:49', NULL, NULL, 3, NULL, NULL),
(222, 214, 213, 221122, 11565, 'N', '69,014 km', '1,600.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Afinación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-15 11:42:48', NULL, NULL, 3, NULL, NULL),
(223, 215, 214, 221123, 11566, 'N', '1 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-15 11:53:24', NULL, NULL, 3, NULL, NULL),
(224, 64, 62, 221124, 11567, 'GR', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-15 12:01:14', NULL, NULL, 3, NULL, NULL),
(225, 143, 215, 221125, 11568, 'N', '161,117 km', '13,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y reparación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-15 12:33:06', NULL, NULL, 3, NULL, NULL),
(226, 217, 216, 221126, 11569, 'N', '1 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-15 15:51:18', NULL, NULL, 3, NULL, NULL),
(227, 218, 217, 221127, 11570, 'N', '1 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-15 15:55:53', NULL, NULL, 3, NULL, NULL),
(228, 219, 218, 221128, 11571, 'GR', '1 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', 'autorizo expresamente que pueden llevarse mi vehiculo a domicilio de empleados para resguardo. ', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-15 17:00:42', NULL, NULL, 3, NULL, NULL),
(229, 220, 219, 221128, 11572, 'N', '100,925 km', '1,600.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Afinación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-16 11:12:19', NULL, NULL, 3, NULL, NULL),
(230, 221, 220, 221129, 11573, 'N', '1 km', '16,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Diangostico', '-', '0', '0', '1', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-16 11:55:34', NULL, NULL, 3, NULL, NULL),
(231, 222, 221, 221130, 11574, 'N', '1 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico', '-', '0', '1', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-16 12:00:40', NULL, NULL, 3, NULL, NULL),
(232, 208, 207, 221131, 11575, 'N', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '-', '0', '0', '1', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-16 12:05:30', NULL, NULL, 3, NULL, NULL),
(233, 224, 222, 221132, 11576, 'N', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y reparación de la transmisión automática', '-', '0', '0', '1', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-16 12:09:54', NULL, NULL, 3, NULL, NULL),
(234, 225, 223, 221133, 11577, 'N', '1 km', '36,000.00', '.', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y reparación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-16 12:22:24', NULL, NULL, 3, NULL, NULL),
(235, 226, 224, 221134, 11578, 'N', '1 km', '15,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Diangostico', '-', '0', '0', '1', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-16 12:27:11', NULL, NULL, 3, NULL, NULL),
(236, 105, 106, 221135, 11579, 'N', '1 km', '22,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-16 12:34:49', NULL, NULL, 3, NULL, NULL),
(237, 209, 225, 221136, 11580, 'N', '1 km', '13,000.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-16 12:39:29', NULL, NULL, 3, NULL, NULL),
(238, 210, 226, 221137, 11581, 'GR', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-16 12:58:13', NULL, NULL, 3, NULL, NULL),
(239, 202, 201, 221138, 11582, 'N', '1 km', '17,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y reparación de la transmisión automática', '.', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-16 13:02:59', NULL, NULL, 3, NULL, NULL),
(240, 211, 227, 221139, 11583, 'N', '1 km', '13,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-16 13:16:10', NULL, NULL, 3, NULL, NULL),
(241, 102, 102, 221140, 11584, 'N', '1 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'diagnostico y reparación de la transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-16 13:24:45', NULL, NULL, 3, NULL, NULL),
(242, 228, 228, 221141, 11585, 'N', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'diagnostico', '.', '0', '0', '0', '1', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-16 13:32:46', NULL, NULL, 3, NULL, NULL),
(243, 229, 229, 221142, 11586, 'N', '1 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-16 13:58:25', NULL, NULL, 3, NULL, NULL),
(244, 230, 230, 221142, 11587, 'GR', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automatica', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-16 15:53:50', NULL, NULL, 3, NULL, NULL),
(245, 231, 231, 221143, 11588, 'N', '245,988 km', '14,000.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Dx y reparación de la transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-16 17:07:08', NULL, NULL, 3, NULL, NULL),
(246, 232, 232, 221144, 11589, 'N', '134,250 km', '1.00', 'Falla: Se queda sin reversa', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico', 'Nota: Marcar a ambo números, el papá quiere estar enterado. ', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-17 09:38:05', NULL, NULL, 3, NULL, NULL),
(247, 233, 233, 221145, 11590, 'N', '180,494 km', '13,000.00', 'Falla Reversa\r\nTira aceite de reten\r\nRevisar chicote', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y reparación de la transmisión automática', '.', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-17 10:40:00', NULL, NULL, 3, NULL, NULL),
(248, 234, 234, 221146, 11591, 'GR', '147,134 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-17 11:22:50', NULL, NULL, 3, NULL, NULL),
(249, 235, 235, 221147, 11592, 'N', '143,208 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-17 11:41:39', NULL, NULL, 3, NULL, NULL),
(250, 236, 236, 221148, 11593, 'N', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '.', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-17 12:08:55', NULL, NULL, 3, NULL, NULL),
(251, 237, 237, 221149, 11594, 'N', '1 km', '12,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico y posible reparación de la transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-17 13:52:49', NULL, NULL, 3, NULL, NULL),
(252, 238, 238, 221150, 11595, 'N', '1 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-17 16:33:52', NULL, NULL, 3, NULL, NULL),
(253, 239, 239, 221151, 11596, 'N', '1 km', '15,000.00', 'OJO: Como extra revisar enfriador y chicote', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico y reparación de la transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-17 16:40:33', NULL, NULL, 3, NULL, NULL),
(254, 240, 240, 221152, 11597, 'N', '129,409 km', '1,800.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Afinación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-18 09:13:08', NULL, NULL, 3, NULL, NULL),
(255, 241, 241, 221153, 11598, 'N', '69,277 km', '1,400.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Afinación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-18 09:24:57', NULL, NULL, 3, NULL, NULL),
(256, 242, 242, 221154, 11599, 'N', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y reparación de la transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-18 09:54:50', NULL, NULL, 3, NULL, NULL),
(257, 243, 243, 221155, 11600, 'N', '95,072 km', '1,400.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Afinación de transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-18 10:57:28', NULL, NULL, 3, NULL, NULL),
(258, 244, 244, 221129, 11601, 'N', '151,531 km', '1,400.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Afinación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-18 13:29:22', NULL, NULL, 3, NULL, NULL),
(259, 245, 245, 221157, 11602, 'N', '69,651 km', '1,600.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Afinación de la transmisión automática', '.', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-19 09:24:57', NULL, NULL, 3, NULL, NULL),
(260, 164, 166, 221158, 11603, 'GR', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '0', '0', '1', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-19 09:42:42', NULL, NULL, 3, NULL, NULL),
(261, 246, 246, 221159, 11604, 'GR', '1 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-19 10:18:47', NULL, NULL, 3, NULL, NULL),
(262, 247, 247, 221160, 11605, 'N', '1 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-19 12:20:36', NULL, NULL, 3, NULL, NULL),
(263, 248, 248, 221161, 11606, 'N', '103,171 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Afinación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-19 12:24:01', NULL, NULL, 3, NULL, NULL),
(264, 249, 249, 221201, 11607, 'N', '1 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '-.', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-22 09:12:07', NULL, NULL, 3, NULL, NULL),
(265, 250, 250, 221202, 11608, 'N', '1 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '.', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-22 09:21:14', NULL, NULL, 3, NULL, NULL),
(266, 251, 251, 221203, 11609, 'N', '1 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-22 09:28:48', NULL, NULL, 3, NULL, NULL),
(267, 252, 252, 2201204, 11610, 'N', '138,848 km', '5,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y empacada de transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-22 10:05:29', NULL, NULL, 3, NULL, NULL),
(268, 253, 253, 221205, 11611, 'N', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '0', '0', '1', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-22 10:19:45', NULL, NULL, 3, NULL, NULL),
(269, 254, 254, 221206, 11612, 'GR', '119,155 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-22 10:22:49', NULL, NULL, 3, NULL, NULL),
(270, 255, 255, 221207, 11613, 'GR', '234,951 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '.-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-22 12:14:21', NULL, NULL, 3, NULL, NULL),
(271, 256, 256, 221208, 11614, 'GR', '177,491 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-22 12:17:43', NULL, NULL, 3, NULL, NULL),
(272, 257, 258, 221209, 11615, 'N', '265,981 km', '12,000.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Dx y reparación de transmisión automática', '-', '0', '0', '0', '1', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-22 17:16:54', NULL, NULL, 3, NULL, NULL),
(273, 258, 259, 221210, 11616, 'N', '241,241 km', '12,000.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Dx y reparación de la transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-22 17:21:54', NULL, NULL, 3, NULL, NULL),
(274, 259, 260, 221211, 11617, 'N', '1 km', '13,000.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-22 17:43:07', NULL, NULL, 3, NULL, NULL),
(275, 260, 261, 221212, 11618, 'GR', '1 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '0', '0', '0', '1', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-23 11:10:12', NULL, NULL, 3, NULL, NULL),
(276, 261, 262, 221213, 11619, 'N', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-23 11:15:19', NULL, NULL, 3, NULL, NULL),
(277, 262, 263, 221214, 11620, 'GR', '1 km', '1.00', '- ', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-23 11:19:33', NULL, NULL, 3, NULL, NULL),
(278, 263, 264, 221215, 11621, 'N', '1 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-23 11:43:55', NULL, NULL, 3, NULL, NULL),
(279, 264, 265, 221216, 11622, 'N', '243,007 km', '15,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y reparación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-23 12:06:38', NULL, NULL, 3, NULL, NULL),
(280, 265, 266, 221217, 11623, 'N', '142,930 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Afinación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-23 12:20:57', NULL, NULL, 3, NULL, NULL),
(281, 266, 267, 221218, 11624, 'N', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y reparación de la transmisión automática', '.', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-23 12:33:37', NULL, NULL, 3, NULL, NULL),
(282, 267, 268, 221219, 11625, 'GR', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-23 13:21:09', NULL, NULL, 3, NULL, NULL),
(283, 255, 255, 221119, 11626, 'GR', '1 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automatica', '.', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-23 14:19:08', NULL, NULL, 3, NULL, NULL),
(284, 268, 269, 221219, 11627, 'N', '116,885 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-23 15:54:35', NULL, NULL, 3, NULL, NULL),
(285, 269, 270, 221220, 11628, 'N', '223,529 km', '1,600.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Afinación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-24 09:05:43', NULL, NULL, 3, NULL, NULL),
(286, 270, 271, 221221, 11629, 'N', '1 km', '11,000.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Dx y reparación de la transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-24 09:24:59', NULL, NULL, 3, NULL, NULL),
(287, 271, 272, 221222, 11630, 'N', '167,292 km', '1,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Afinación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-24 09:32:56', NULL, NULL, 3, NULL, NULL),
(288, 272, 273, 221222, 11631, 'N', '1 km', '1.00', 'si prende, ya no camina\r\n', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-24 09:44:27', NULL, NULL, 3, NULL, NULL),
(289, 273, 274, 221223, 11632, 'N', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-24 11:22:39', NULL, NULL, 3, NULL, NULL),
(290, 274, 275, 221223, 11633, 'N', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-24 12:05:25', NULL, NULL, 3, NULL, NULL),
(291, 275, 276, 221225, 11634, 'GR', '141,859 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-24 13:16:26', NULL, NULL, 3, NULL, NULL),
(292, 276, 277, 221226, 11635, 'N', '1 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-24 13:29:52', NULL, NULL, 3, NULL, NULL),
(293, 277, 278, 221227, 11636, 'N', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-24 15:08:40', NULL, NULL, 3, NULL, NULL),
(294, 278, 279, 221228, 11637, 'N', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática-.', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-24 16:37:06', NULL, NULL, 3, NULL, NULL),
(295, 209, 280, 221129, 11638, 'GR', '266,435 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-24 16:56:21', NULL, NULL, 3, NULL, NULL),
(296, 10, 10, 221229, 11639, 'GR', '1 km', '1.00', '-1', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática-', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-24 17:02:24', NULL, NULL, 3, NULL, NULL),
(297, 279, 281, 211231, 11640, 'GR', '1 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '0', '0', '1', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-25 09:04:47', NULL, NULL, 3, NULL, NULL),
(298, 151, 154, 221232, 11641, 'GR', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-25 09:09:43', NULL, NULL, 3, NULL, NULL),
(299, 280, 150, 221233, 11642, 'GR', '1 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Cambio de transmisión automática', '-', '0', '0', '0', '0', '1', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-25 09:26:57', NULL, NULL, 3, NULL, NULL),
(300, 281, 282, 221234, 11643, 'N', '133,244 km', '1,400.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Afinación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-25 10:34:54', NULL, NULL, 3, NULL, NULL),
(301, 282, 283, 221235, 11644, 'N', '176,726 km', '1,400.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Afinación de la transmisión automática-', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-25 11:39:43', NULL, NULL, 3, NULL, NULL),
(302, 283, 284, 211236, 11645, 'N', '1 km', '12,000.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática.', '.', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-25 12:20:29', NULL, NULL, 3, NULL, NULL),
(303, 177, 180, 221237, 11646, 'GR', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-25 15:06:02', NULL, NULL, 3, NULL, NULL),
(304, 284, 285, 221237, 11647, 'N', '1 km', '5,000.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Afinación y empacada de transmisión automática', '-', '0', '0', '0', '1', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-25 15:52:24', NULL, NULL, 3, NULL, NULL),
(305, 285, 286, 221238, 11648, 'N', '125,539 km', '1,400.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Afinación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-25 16:43:05', NULL, NULL, 3, NULL, NULL),
(306, 286, 287, 221239, 11649, 'GR', '1 km', '1.00', 'Tira aceite, no conectaron los focos de reversa, la prende enfrió en reversa patea', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-26 08:46:30', NULL, NULL, 3, NULL, NULL),
(307, 287, 288, 221239, 11650, 'N', '252,778 km', '650.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Afinación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-26 09:19:47', NULL, NULL, 3, NULL, NULL),
(308, 288, 289, 221240, 11651, 'N', '70,012 km', '1,400.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Afinación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-26 09:24:46', NULL, NULL, 3, NULL, NULL),
(309, 289, 290, 221241, 11652, 'N', '202,456 km', '1,400.00', '- transmisio', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Afinación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-26 09:44:41', NULL, NULL, 3, NULL, NULL),
(310, 290, 291, 221242, 11653, 'N', '1 km', '15,000.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-26 11:11:31', NULL, NULL, 3, NULL, NULL),
(311, 291, 292, 221243, 11654, 'N', '1 km', '23,000.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-26 11:15:03', NULL, NULL, 3, NULL, NULL),
(312, 292, 293, 221244, 11655, 'N', '1 km', '25,000.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Dx y reparación de la transmisión automática', '.', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-26 12:23:52', NULL, NULL, 3, NULL, NULL),
(313, 293, 294, 221301, 11661, 'N', '1 km', '12,000.00', 'Trae fuga', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-28 11:39:51', NULL, NULL, 3, NULL, NULL),
(314, 294, 295, 221302, 11662, 'N', '32,468 km', '1,400.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Afinación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-28 11:47:47', NULL, NULL, 3, NULL, NULL),
(315, 295, 297, 221303, 11663, 'N', '1 km', '6,650.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '-', '0', '0', '1', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-28 11:54:27', NULL, NULL, 3, NULL, NULL),
(316, 296, 298, 221304, 11664, 'N', '1 km', '15,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico y posible reparación de la transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-28 12:00:52', NULL, NULL, 3, NULL, NULL),
(317, 297, 299, 221305, 11665, 'N', '186,130 km', '1,400.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Afinación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-28 12:15:02', NULL, NULL, 3, NULL, NULL),
(318, 298, 300, 221306, 11666, 'N', '187,299 km', '12,000.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Dx y reparación de la transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-28 12:39:36', NULL, NULL, 3, NULL, NULL),
(319, 21, 20, 221307, 11667, 'GR', '1 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '0', '0', '0', '1', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-28 13:30:41', NULL, NULL, 3, NULL, NULL),
(320, 299, 301, 221308, 11668, 'N', '1 km', '11,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico', '-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-28 16:34:52', NULL, NULL, 3, NULL, NULL),
(321, 300, 302, 221309, 11669, 'N', '198,499 km', '850.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Afinación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-29 09:26:27', NULL, NULL, 3, NULL, NULL),
(322, 301, 303, 221310, 11670, 'N', '1 km', '20,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-29 09:50:26', NULL, NULL, 3, NULL, NULL),
(323, 302, 304, 221311, 11671, 'GR', '1 km', '1.00', 'Se patinan las velocidades', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '0', '0', '1', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-29 10:05:26', NULL, NULL, 3, NULL, NULL),
(324, 303, 305, 221312, 11672, 'N', '1 km', '1.00', 'Tira un golpeteo y tira aceite', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-29 10:10:42', NULL, NULL, 3, NULL, NULL),
(325, 304, 306, 221313, 11673, 'GR', '1 km', '1.00', 'pierde fuerza y se escucha forzada', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-29 10:14:30', NULL, NULL, 3, NULL, NULL),
(326, 138, 140, 221314, 11674, 'GR', '1 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-29 10:18:11', NULL, NULL, 3, NULL, NULL),
(327, 305, 307, 221315, 11675, 'N', '143,937 km', '4,500.00', 'Se prendio Check engine, al escanear arroja codigo de transmisión. ', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Servicio de Mtto y cuerpo de válvulas', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-29 11:02:23', NULL, NULL, 3, NULL, NULL),
(328, 306, 308, 221316, 11676, 'N', '1 km', '650.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-29 12:02:30', NULL, NULL, 3, NULL, NULL),
(329, 307, 309, 221317, 11677, 'N', '20,778 km', '1,600.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Afinación de la transmisión automática', '-', '0', '0', '0', '0', '1', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-29 13:02:39', NULL, NULL, 3, NULL, NULL),
(330, 308, 310, 221317, 11678, 'N', '248,893 km', '20,000.00', 'Testigo encendido de bateria, sin ninguna falla.\r\nTestigo de transmisión, se patina de 2da a 3era y después entra normal llegando a un limite de velocidad. ', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico', '-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-29 17:00:24', NULL, NULL, 3, NULL, NULL),
(331, 200, 199, 221318, 11679, 'GR', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-29 17:42:04', NULL, NULL, 3, NULL, NULL),
(332, 309, 311, 221319, 11680, 'GR', '1 km', '1.00', 'TIRA ACEITE CLIENTE MENCIONA QUE NO PUEDE REVISAR LOS NIVELES POR QUE NO PUEDE ABRIR EL COBRE POR EL GOLPE QUE NOSOTROS LE DIMOS A SU CARRO DESEA QUE SE LE DE SOLUCION A ESO TAMBIÉN', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-30 08:48:35', NULL, NULL, 3, NULL, NULL);
INSERT INTO `proyectos` (`id_proyecto`, `id_cliente`, `id_vehiculo`, `nOrden`, `nProyecto`, `tipoReparacion`, `km`, `valorVenta`, `diagnostico`, `estadoProyectoEliminado`, `comSuperPlaca`, `comSuperKm`, `comSuperImg`, `comSuperCliente`, `comSuperDocuFirm`, `comSuperGarantia`, `comSuperAsesor`, `comSuperVerifDiariaVeh`, `descripServ1`, `descripServ2`, `proyectoActivo`, `registroSolicitud`, `altaProyecto`, `proyCodIdentificador`, `superCodIdentificador`, `comPlacas`, `comKm`, `comImg`, `comCliente`, `comDocuFirm`, `comGarantia`, `comAsesor`, `comVerifDiariaVeh`, `fecha_creacion`, `fecha_mod`, `fecha_borrado`, `id_capC`, `id_capM`, `id_capB`) VALUES
(333, 310, 312, 221320, 11681, 'N', '1 km', '1.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '0', '0', '1', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-30 08:55:10', NULL, NULL, 3, NULL, NULL),
(334, 180, 182, 221321, 11682, 'GR', '1 km', '1.00', 'a no avanzo ya lo llevo a la revisión de chicote y le dijeron que no era el chicote', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automática', '-', '0', '0', '1', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-30 09:00:24', NULL, NULL, 3, NULL, NULL),
(335, 311, 313, 221321, 11683, 'N', '1 km', '23,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-30 09:14:32', NULL, NULL, 3, NULL, NULL),
(336, 312, 314, 221323, 11684, 'N', '1 km', '13,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Dx y posible reparación de la transmisión automática', '.', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-30 09:20:30', NULL, NULL, 3, NULL, NULL),
(337, 313, 315, 211324, 11685, 'N', '1 km', '18,000.00', 'No hace cambios, se mueve la palanca, pero no entran velocidades. ', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico', '-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-30 10:19:40', NULL, NULL, 3, NULL, NULL),
(338, 314, 316, 221324, 11686, 'N', '58,721 km', '1,400.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Afinación de la transmisión automática', '-', '0', '0', '0', '1', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-30 10:34:10', NULL, NULL, 3, NULL, NULL),
(339, 137, 139, 211326, 11687, 'GR', '1 km', '1.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Revisar transmisión automatica', '-', '0', '0', '1', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-30 13:04:53', NULL, NULL, 3, NULL, NULL),
(340, 315, 317, 221327, 11688, 'N', '1 km', '28,000.00', '-', '1', '1', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico', '-', '1', '0', '0', '0', '0', '1', '0', '0', 0, '0', '0', '0', '0', '2022-03-30 15:51:30', NULL, NULL, 3, NULL, NULL),
(341, 316, 318, 221328, 11689, 'N', '496,618 km', '12,000.00', 'Aro dentado', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Diagnostico ', '-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-30 15:58:43', NULL, NULL, 3, NULL, NULL),
(342, 224, 222, 221328, 11690, 'N', '1 km', '58,000.00', '-', '1', '0', '0', '0', '0', '0', '0', '0', '0', 'Almacenamiento', '-', '1', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '2022-03-30 16:46:12', NULL, NULL, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroalta`
--

CREATE TABLE `registroalta` (
  `id_regAlta` int(11) NOT NULL,
  `folioRegAlta` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `id_link` int(11) NOT NULL,
  `observAudiFinal` varchar(300) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '--',
  `cronometro` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT '--',
  `supervisionValores` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `borrado` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `status` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'Activo',
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_borrado` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capB` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `registroalta`
--

INSERT INTO `registroalta` (`id_regAlta`, `folioRegAlta`, `id_proyecto`, `id_link`, `observAudiFinal`, `cronometro`, `supervisionValores`, `borrado`, `status`, `fecha_creacion`, `fecha_borrado`, `id_capC`, `id_capB`) VALUES
(2, 'Alta-003', 27, 2, '.', NULL, '0', '0', 'Activo', '2022-03-10 13:46:43', NULL, 6, NULL),
(3, 'Alta-004', 34, 3, '.', NULL, '0', '0', 'Activo', '2022-03-10 13:50:31', NULL, 6, NULL),
(4, 'Alta-005', 24, 4, '.', NULL, '0', '0', 'Activo', '2022-03-10 14:04:36', NULL, 6, NULL),
(5, 'Alta-006', 30, 5, '.', NULL, '0', '0', 'Activo', '2022-03-10 17:19:54', NULL, 6, NULL),
(6, 'Alta-007', 40, 6, '.', NULL, '0', '0', 'Activo', '2022-03-10 17:23:45', NULL, 6, NULL),
(7, 'Alta-008', 53, 7, '.', NULL, '0', '0', 'Activo', '2022-03-10 17:25:23', NULL, 6, NULL),
(8, 'Alta-009', 4, 8, '.', NULL, '0', '0', 'Activo', '2022-03-10 17:27:25', NULL, 6, NULL),
(9, 'Alta-0010', 67, 9, '.', NULL, '0', '0', 'Activo', '2022-03-10 17:28:26', NULL, 6, NULL),
(10, 'Alta-0011', 133, 10, '.', NULL, '0', '0', 'Activo', '2022-03-11 09:42:53', NULL, 6, NULL),
(11, 'Alta-0012', 132, 11, '.', NULL, '0', '0', 'Activo', '2022-03-11 09:46:41', NULL, 6, NULL),
(12, 'Alta-0013', 130, 12, '.', NULL, '0', '0', 'Activo', '2022-03-11 09:49:12', NULL, 6, NULL),
(13, 'Alta-0014', 129, 13, '.', NULL, '0', '0', 'Activo', '2022-03-11 09:51:53', NULL, 6, NULL),
(14, 'Alta-0015', 128, 14, '.', NULL, '0', '0', 'Activo', '2022-03-11 09:52:59', NULL, 6, NULL),
(15, 'Alta-0016', 135, 15, '.', NULL, '0', '0', 'Activo', '2022-03-11 10:53:47', NULL, 6, NULL),
(16, 'Alta-0017', 127, 16, '.', NULL, '0', '0', 'Activo', '2022-03-11 10:56:07', NULL, 6, NULL),
(17, 'Alta-0018', 156, 17, 'revisar computadora módulo tcm', NULL, '0', '0', 'Activo', '2022-03-11 17:12:38', NULL, 6, 0),
(18, 'Alta-0019', 70, 18, '.', NULL, '0', '0', 'Activo', '2022-03-11 17:15:57', NULL, 6, 0),
(19, 'Alta-0020', 155, 19, '.', NULL, '0', '0', 'Activo', '2022-03-11 17:24:50', NULL, 6, 0),
(20, 'Alta-0021', 157, 20, '.', NULL, '0', '0', 'Activo', '2022-03-11 17:51:32', NULL, 6, 0),
(21, 'Alta-0022', 120, 21, '.', NULL, '0', '0', 'Activo', '2022-03-11 18:00:53', NULL, 6, 0),
(22, 'Alta-0023', 188, 22, '.', NULL, '0', '0', 'Activo', '2022-03-12 11:33:34', NULL, 6, 0),
(23, 'Alta-0024', 179, 23, '.', NULL, '0', '0', 'Activo', '2022-03-12 11:38:01', NULL, 6, 0),
(24, 'Alta-0025', 20, 24, '.', NULL, '0', '0', 'Activo', '2022-03-12 12:54:34', NULL, 6, 0),
(25, 'Alta-0026', 190, 25, '.', NULL, '0', '0', 'Activo', '2022-03-12 12:57:11', NULL, 6, 0),
(26, 'Alta-0027', 22, 26, '.', NULL, '0', '0', 'Activo', '2022-03-12 13:00:47', NULL, 6, 0),
(27, 'Alta-0028', 196, 27, '.', NULL, '0', '0', 'Activo', '2022-03-12 13:29:55', NULL, 6, 0),
(28, 'Alta-0029', 176, 28, '.', '0 Dia(s), 3 h. 21 m. 3 s.', '0', '0', 'Activo', '2022-03-12 13:44:14', NULL, 6, 0),
(30, 'Alta-0031', 194, 30, 'fuga de aceite de motor ', '0 Dia(s), 0 h. 7 m. 18 s.', '0', '0', 'Activo', '2022-03-14 10:59:40', NULL, 6, 0),
(31, 'Alta-0032', 126, 31, '.', '1 Dia(s), 21 h. 15 m. 54 s.', '0', '0', 'Activo', '2022-03-14 11:02:04', NULL, 6, 0),
(32, 'Alta-0033', 198, 32, '.', '1 Dia(s), 21 h. 24 m. 9 s.', '0', '0', 'Activo', '2022-03-14 11:08:02', NULL, 6, 0),
(33, 'Alta-0034', 17, 33, '.', '0 Dia(s), 1 h. 52 m. 31 s.', '0', '0', 'Activo', '2022-03-14 12:50:39', NULL, 6, 0),
(34, 'Alta-0035', 193, 34, '.', '0 Dia(s), 4 h. 44 m. 50 s.', '0', '0', 'Activo', '2022-03-14 14:09:29', NULL, 6, 0),
(35, 'Alta-0036', 192, 35, '.', '2 Dia(s), 3 h. 29 m. 50 s.', '0', '0', 'Activo', '2022-03-14 16:31:57', NULL, 6, 0),
(36, 'Alta-0037', 159, 36, '.', '0 Dia(s), 0 h. 54 m. 34 s.', '0', '0', 'Activo', '2022-03-14 17:18:39', NULL, 6, 0),
(37, 'Alta-0038', 134, 37, '.', '0 Dia(s), 15 h. 19 m. 45 s.', '0', '0', 'Activo', '2022-03-15 08:15:18', NULL, 6, 0),
(38, 'Alta-0039', 214, 38, ' .', '0 Dia(s), 16 h. 18 m. 51 s.', '0', '0', 'Activo', '2022-03-15 09:30:13', NULL, 6, 0),
(39, 'Alta-0040', 209, 39, 'patina tercera levemente ', '0 Dia(s), 17 h. 41 m. 48 s.', '0', '0', 'Activo', '2022-03-15 09:54:42', NULL, 6, 0),
(40, 'Alta-0041', 31, 40, '.', '0 Dia(s), 0 h. 1 m. 12 s.', '0', '0', 'Activo', '2022-03-15 10:34:01', NULL, 6, 0),
(41, 'Alta-0042', 207, 41, 'trae fuga de agua por manguera de radiador ', '0 Dia(s), 2 h. 53 m. 44 s.', '0', '0', 'Activo', '2022-03-15 12:00:28', NULL, 6, 0),
(42, 'Alta-0043', 220, 42, '.', '0 Dia(s), 0 h. 54 m. 17 s.', '0', '0', 'Activo', '2022-03-15 13:04:37', NULL, 6, 0),
(43, 'Alta-0044', 222, 43, '.', '0 Dia(s), 1 h. 55 m. 19 s.', '0', '0', 'Activo', '2022-03-15 14:02:11', NULL, 6, 0),
(44, 'Alta-0045', 225, 44, '.', '0 Dia(s), 1 h. 53 m. 2 s.', '0', '0', 'Activo', '2022-03-15 14:55:42', NULL, 6, 0),
(45, 'Alta-0046', 224, 45, '.', '0 Dia(s), 4 h. 5 m. 55 s.', '0', '0', 'Activo', '2022-03-15 16:10:32', NULL, 6, 0),
(46, 'Alta-0047', 15, 46, '.', '0 Dia(s), 15 h. 46 m. 46 s.', '0', '0', 'Activo', '2022-03-16 09:12:14', NULL, 6, 0),
(47, 'Alta-0048', 36, 47, '.', '0 Dia(s), 0 h. 3 m. 26 s.', '0', '0', 'Activo', '2022-03-16 09:18:38', NULL, 6, 0),
(48, 'Alta-0049', 239, 48, '.', '0 Dia(s), 0 h. 31 m. 17 s.', '0', '0', 'Activo', '2022-03-16 15:29:36', NULL, 6, 0),
(49, 'Alta-0050', 37, 49, 'como recomendación llevarlo a alineación ', '0 Dia(s), 2 h. 59 m. 19 s.', '0', '0', 'Activo', '2022-03-16 16:15:04', NULL, 6, 0),
(50, 'Alta-0051', 197, 50, 'la fuga que presentaba quedó corregida ', '0 Dia(s), 5 h. 58 m. 20 s.', '0', '0', 'Activo', '2022-03-16 16:17:43', NULL, 6, 0),
(51, 'Alta-0052', 229, 51, '.', '0 Dia(s), 2 h. 25 m. 12 s.', '0', '0', 'Activo', '2022-03-16 16:19:48', NULL, 6, 0),
(52, 'Alta-0053', 230, 52, '.', '0 Dia(s), 1 h. 9 m. 38 s.', '0', '0', 'Activo', '2022-03-16 17:09:43', NULL, 6, 0),
(53, 'Alta-0054', 244, 53, '.', '0 Dia(s), 1 h. 10 m. 6 s.', '0', '0', 'Activo', '2022-03-16 17:13:33', NULL, 6, 0),
(54, 'Alta-0055', 240, 54, '.', '0 Dia(s), 2 h. 17 m. 17 s.', '0', '0', 'Activo', '2022-03-16 17:14:39', NULL, 6, 0),
(55, 'Alta-0056', 238, 55, '.', '0 Dia(s), 2 h. 16 m. 55 s.', '0', '0', 'Activo', '2022-03-16 17:16:08', NULL, 6, 0),
(56, 'Alta-0057', 235, 56, '.', '0 Dia(s), 1 h. 27 m. 14 s.', '0', '0', 'Activo', '2022-03-16 17:19:59', NULL, 6, 0),
(58, 'Alta-0059', 233, 58, '.', '0 Dia(s), 1 h. 28 m. 50 s.', '0', '0', 'Activo', '2022-03-16 17:22:40', NULL, 6, 0),
(59, 'Alta-0060', 232, 59, '.', '0 Dia(s), 1 h. 30 m. 58 s.', '0', '0', 'Activo', '2022-03-16 17:26:53', NULL, 6, 0),
(60, 'Alta-0061', 41, 60, '.', '0 Dia(s), 20 h. 52 m. 17 s.', '0', '0', 'Activo', '2022-03-17 08:42:55', NULL, 6, 0),
(61, 'Alta-0062', 236, 61, '.', '0 Dia(s), 17 h. 2 m. 24 s.', '0', '0', 'Activo', '2022-03-17 08:54:27', NULL, 6, 0),
(62, 'Alta-0063', 48, 62, 'se confirmo información de falla electronica según el protocolo ', '0 Dia(s), 18 h. 11 m. 19 s.', '0', '0', 'Activo', '2022-03-17 11:57:33', NULL, 6, 0),
(63, 'Alta-0064', 47, 63, '.', '0 Dia(s), 3 h. 19 m. 48 s.', '0', '0', 'Activo', '2022-03-17 12:34:29', NULL, 6, 0),
(64, 'Alta-0065', 202, 64, 'se probó por más de 1 hora continúa y no presento la falla reportada', '0 Dia(s), 23 h. 0 m. 13 s.', '0', '0', 'Activo', '2022-03-17 16:36:06', NULL, 6, 0),
(65, 'Alta-0065', 202, 65, 'se probó por más de 1 hora continúa y no presento la falla reportada', '0 Dia(s), 23 h. 21 m. 42 s.', '0', '0', 'Activo', '2022-03-17 16:57:35', NULL, 6, 0),
(66, 'Alta-0067', 185, 66, '.', '0 Dia(s), 1 h. 15 m. 19 s.', '0', '0', 'Activo', '2022-03-17 16:58:11', NULL, 6, 0),
(67, 'Alta-0068', 25, 67, 'no sirve el velocímetro ', '0 Dia(s), 1 h. 30 m. 45 s.', '0', '0', 'Activo', '2022-03-17 17:28:06', NULL, 6, 0),
(68, 'Alta-0069', 180, 68, '.', '0 Dia(s), 3 h. 53 m. 1 s.', '0', '0', 'Activo', '2022-03-17 19:44:42', NULL, 6, 0),
(69, 'Alta-0070', 42, 69, '.', '0 Dia(s), 16 h. 42 m. 40 s.', '0', '0', 'Activo', '2022-03-18 10:22:17', NULL, 6, 0),
(70, 'Alta-0071', 11, 70, '.', '0 Dia(s), 1 h. 45 m. 5 s.', '0', '0', 'Activo', '2022-03-18 13:08:46', NULL, 6, 0),
(71, 'Alta-0072', 257, 71, '.', '0 Dia(s), 1 h. 19 m. 59 s.', '0', '0', 'Activo', '2022-03-18 14:42:41', NULL, 6, 0),
(72, 'Alta-0073', 255, 72, '.', '0 Dia(s), 1 h. 36 m. 11 s.', '0', '0', 'Activo', '2022-03-18 14:43:40', NULL, 6, 0),
(73, 'Alta-0074', 254, 73, '.', '0 Dia(s), 1 h. 25 m. 37 s.', '0', '0', 'Activo', '2022-03-18 14:46:10', NULL, 6, 0),
(74, 'Alta-0075', 250, 74, '.', '0 Dia(s), 5 h. 6 m. 51 s.', '0', '0', 'Activo', '2022-03-18 16:26:59', NULL, 6, 0),
(75, 'Alta-0076', 125, 75, '.', '0 Dia(s), 15 h. 13 m. 8 s.', '0', '0', 'Activo', '2022-03-19 09:05:03', NULL, 6, 0),
(76, 'Alta-0077', 19, 76, '.', '0 Dia(s), 1 h. 15 m. 23 s.', '0', '0', 'Activo', '2022-03-19 10:19:19', NULL, 6, 0),
(77, 'Alta-0078', 246, 77, '.', '0 Dia(s), 0 h. 41 m. 47 s.', '0', '0', 'Activo', '2022-03-19 10:22:43', NULL, 6, 0),
(78, 'Alta-0079', 259, 78, '.', '0 Dia(s), 0 h. 3 m. 15 s.', '0', '0', 'Activo', '2022-03-19 11:20:58', NULL, 6, 0),
(79, 'Alta-0080', 258, 79, '.', '0 Dia(s), 1 h. 11 m. 51 s.', '0', '0', 'Activo', '2022-03-19 11:22:37', NULL, 6, 0),
(80, 'Alta-0081', 14, 80, '.', '0 Dia(s), 17 h. 42 m. 43 s.', '0', '0', 'Activo', '2022-03-19 11:24:51', NULL, 6, 0),
(81, 'Alta-0082', 10, 81, '.', '0 Dia(s), 3 h. 4 m. 4 s.', '0', '0', 'Activo', '2022-03-19 13:09:22', NULL, 6, 0),
(82, 'Alta-0083', 263, 82, '.', '0 Dia(s), 0 h. 5 m. 4 s.', '0', '0', 'Activo', '2022-03-23 09:19:16', NULL, 6, 0),
(83, 'Alta-0084', 88, 83, '.', '0 Dia(s), 0 h. 20 m. 13 s.', '0', '0', 'Activo', '2022-03-23 09:26:34', NULL, 6, 0),
(84, 'Alta-0085', 35, 84, '.', '0 Dia(s), 0 h. 34 m. 13 s.', '0', '0', 'Activo', '2022-03-23 09:37:47', NULL, 6, 0),
(85, 'Alta-0086', 260, 85, '.', '0 Dia(s), 0 h. 50 m. 14 s.', '0', '0', 'Activo', '2022-03-23 12:13:24', NULL, 6, 0),
(86, 'Alta-0087', 182, 86, '.', '0 Dia(s), 1 h. 45 m. 33 s.', '0', '0', 'Activo', '2022-03-23 12:17:08', NULL, 6, 0),
(87, 'Alta-0088', 149, 87, '.', '0 Dia(s), 1 h. 54 m. 31 s.', '0', '0', 'Activo', '2022-03-23 12:27:48', NULL, 6, 0),
(88, 'Alta-0089', 118, 88, 'corrección de fuga ', '0 Dia(s), 1 h. 55 m. 28 s.', '0', '0', 'Activo', '2022-03-23 12:30:25', NULL, 6, 0),
(89, 'Alta-0090', 281, 89, '.', '0 Dia(s), 1 h. 48 m. 30 s.', '0', '0', 'Activo', '2022-03-23 15:44:14', NULL, 6, 0),
(90, 'Alta-0091', 280, 90, '.', '0 Dia(s), 0 h. 27 m. 10 s.', '0', '0', 'Activo', '2022-03-23 15:47:13', NULL, 6, 0),
(91, 'Alta-0092', 279, 91, '.', '0 Dia(s), 1 h. 59 m. 31 s.', '0', '0', 'Activo', '2022-03-23 15:49:30', NULL, 6, 0),
(92, 'Alta-0093', 183, 92, '.', '0 Dia(s), 2 h. 0 m. 47 s.', '0', '0', 'Activo', '2022-03-23 15:54:48', NULL, 6, 0),
(93, 'Alta-0094', 153, 93, '.', '0 Dia(s), 16 h. 57 m. 6 s.', '0', '0', 'Activo', '2022-03-24 10:12:38', NULL, 6, 0),
(94, 'Alta-0095', 287, 94, '.', '0 Dia(s), 0 h. 7 m. 58 s.', '0', '0', 'Activo', '2022-03-24 11:16:33', NULL, 6, 0),
(95, 'Alta-0096', 285, 95, '.', '0 Dia(s), 0 h. 8 m. 11 s.', '0', '0', 'Activo', '2022-03-24 11:18:38', NULL, 6, 0),
(96, 'Alta-0097', 268, 96, 'solo se corrigieron fugas ', '0 Dia(s), 21 h. 34 m. 15 s.', '0', '0', 'Activo', '2022-03-24 11:21:34', NULL, 6, 0),
(97, 'Alta-0098', 282, 97, '.', '0 Dia(s), 21 h. 25 m. 17 s.', '0', '0', 'Activo', '2022-03-24 11:24:07', NULL, 6, 0),
(98, 'Alta-0099', 267, 98, '.', '0 Dia(s), 2 h. 14 m. 26 s.', '0', '0', 'Activo', '2022-03-24 13:22:14', NULL, 6, 0),
(99, 'Alta-00100', 9, 99, '.', '0 Dia(s), 2 h. 36 m. 33 s.', '0', '0', 'Activo', '2022-03-24 16:12:57', NULL, 6, 0),
(100, 'Alta-00101', 3, 100, '.', '0 Dia(s), 14 h. 46 m. 17 s.', '0', '0', 'Activo', '2022-03-25 08:42:22', NULL, 6, 0),
(101, 'Alta-00102', 85, 101, 'El cliente está consiente de que no sirve su computadora lo confirme mediante un audio que le envío a Óscar ', '0 Dia(s), 20 h. 31 m. 24 s.', '0', '0', 'Activo', '2022-03-25 10:30:19', NULL, 6, 0),
(102, 'Alta-00103', 221, 102, '--', '0 Dia(s), 18 h. 36 m. 34 s.', '0', '0', 'Activo', '2022-03-25 11:48:23', NULL, 1, 0),
(103, 'Alta-00104', 301, 103, '.', '0 Dia(s), 1 h. 42 m. 29 s.', '0', '0', 'Activo', '2022-03-25 16:18:15', NULL, 6, 0),
(104, 'Alta-00105', 300, 104, '.', '0 Dia(s), 1 h. 46 m. 38 s.', '0', '0', 'Activo', '2022-03-25 16:20:12', NULL, 6, 0),
(105, 'Alta-00106', 305, 105, '.', '0 Dia(s), 0 h. 4 m. 23 s.', '0', '0', 'Activo', '2022-03-25 16:56:33', NULL, 6, 0),
(106, 'Alta-00107', 29, 106, '.', '0 Dia(s), 5 h. 7 m. 10 s.', '0', '0', 'Activo', '2022-03-25 17:30:59', NULL, 6, 0),
(107, 'Alta-00108', 303, 107, '.', '0 Dia(s), 1 h. 43 m. 55 s.', '0', '0', 'Activo', '2022-03-25 17:45:02', NULL, 6, 0),
(108, 'Alta-00109', 299, 108, '.', '0 Dia(s), 7 h. 56 m. 57 s.', '0', '0', 'Activo', '2022-03-25 17:52:10', NULL, 6, 0),
(109, 'Alta-00110', 284, 109, 'se la llevó el cliente ', '0 Dia(s), 17 h. 42 m. 59 s.', '0', '0', 'Activo', '2022-03-26 08:24:06', NULL, 6, 0),
(110, 'Alta-00111', 296, 110, 'orden cancelada', '0 Dia(s), 0 h. 12 m. 34 s.', '0', '0', 'Activo', '2022-03-26 09:11:22', NULL, 6, 0),
(111, 'Alta-00112', 247, 111, '.', '0 Dia(s), 16 h. 36 m. 39 s.', '0', '0', 'Activo', '2022-03-26 10:06:58', NULL, 6, 0),
(112, 'Alta-00113', 171, 112, '.', '0 Dia(s), 19 h. 36 m. 23 s.', '0', '0', 'Activo', '2022-03-26 10:15:12', NULL, 6, 0),
(113, 'Alta-00114', 290, 113, '.', '0 Dia(s), 18 h. 40 m. 28 s.', '0', '0', 'Activo', '2022-03-26 11:14:59', NULL, 6, 0),
(114, 'Alta-00115', 166, 114, '.', '0 Dia(s), 18 h. 21 m. 23 s.', '0', '0', 'Activo', '2022-03-26 11:17:20', NULL, 6, 0),
(115, 'Alta-00116', 307, 115, '.', '0 Dia(s), 1 h. 13 m. 30 s.', '0', '0', 'Activo', '2022-03-26 11:19:44', NULL, 6, 0),
(116, 'Alta-00117', 309, 116, '.', '0 Dia(s), 1 h. 7 m. 58 s.', '0', '0', 'Activo', '2022-03-26 11:21:25', NULL, 6, 0),
(117, 'Alta-00118', 308, 117, '.', '0 Dia(s), 1 h. 12 m. 25 s.', '0', '0', 'Activo', '2022-03-26 11:23:10', NULL, 6, 0),
(118, 'Alta-00119', 211, 118, '.', '0 Dia(s), 1 h. 27 m. 26 s.', '0', '0', 'Activo', '2022-03-26 13:17:31', NULL, 6, 0),
(119, 'Alta-00120', 248, 119, '.', '0 Dia(s), 0 h. 1 m. 36 s.', '0', '0', 'Activo', '2022-03-26 14:17:10', NULL, 6, 0),
(120, 'Alta-00121', 199, 120, '.', '0 Dia(s), 0 h. 23 m. 32 s.', '0', '0', 'Activo', '2022-03-28 12:40:23', NULL, 6, 0),
(121, 'Alta-00122', 317, 121, '.', '0 Dia(s), 2 h. 24 m. 41 s.', '0', '0', 'Activo', '2022-03-28 15:35:11', NULL, 6, 0),
(122, 'Alta-00123', 314, 122, '.', '0 Dia(s), 1 h. 53 m. 51 s.', '0', '0', 'Activo', '2022-03-28 15:36:44', NULL, 6, 0),
(123, 'Alta-00124', 275, 123, '.', '0 Dia(s), 4 h. 1 m. 42 s.', '0', '0', 'Activo', '2022-03-28 15:39:15', NULL, 6, 0),
(124, 'Alta-00125', 234, 124, '.', '0 Dia(s), 2 h. 8 m. 55 s.', '0', '0', 'Activo', '2022-03-28 15:47:38', NULL, 6, 0),
(125, 'Alta-00126', 242, 125, '.', '0 Dia(s), 0 h. 12 m. 53 s.', '0', '0', 'Activo', '2022-03-29 10:57:29', NULL, 6, 0),
(126, 'Alta-00127', 195, 126, '.', '1 Dia(s), 0 h. 20 m. 17 s.', '0', '0', 'Activo', '2022-03-29 11:29:43', NULL, 6, 0),
(127, 'Alta-00128', 321, 127, '.', '0 Dia(s), 0 h. 24 m. 22 s.', '0', '0', 'Activo', '2022-03-29 12:05:17', NULL, 6, 0),
(128, 'Alta-00129', 304, 128, '.', '0 Dia(s), 2 h. 2 m. 28 s.', '0', '0', 'Activo', '2022-03-29 12:43:13', NULL, 6, 0),
(129, 'Alta-00130', 328, 129, '.', '0 Dia(s), 0 h. 5 m. 2 s.', '0', '0', 'Activo', '2022-03-29 12:44:42', NULL, 6, 0),
(130, 'Alta-00131', 329, 130, '.', '0 Dia(s), 0 h. 5 m. 36 s.', '0', '0', 'Activo', '2022-03-29 13:12:41', NULL, 6, 0),
(131, 'Alta-00132', 319, 131, '.', '0 Dia(s), 4 h. 33 m. 51 s.', '0', '0', 'Activo', '2022-03-29 18:00:17', NULL, 6, 0),
(132, 'Alta-00133', 272, 132, '.', '0 Dia(s), 1 h. 37 m. 59 s.', '0', '0', 'Activo', '2022-03-29 18:03:50', NULL, 6, 0),
(133, 'Alta-00134', 116, 133, '.', '0 Dia(s), 20 h. 29 m. 5 s.', '0', '0', 'Activo', '2022-03-30 10:05:49', NULL, 6, 0),
(134, 'Alta-00135', 315, 134, '.', '0 Dia(s), 17 h. 26 m. 52 s.', '0', '0', 'Activo', '2022-03-30 10:07:58', NULL, 6, 0),
(135, 'Alta-00136', 338, 135, '.', '0 Dia(s), 0 h. 4 m. 9 s.', '0', '0', 'Activo', '2022-03-30 13:16:48', NULL, 6, 0),
(136, 'Alta-00137', 323, 136, '.', '0 Dia(s), 3 h. 58 m. 31 s.', '0', '0', 'Activo', '2022-03-30 14:37:49', NULL, 6, 0),
(137, 'Alta-00138', 297, 137, '.', '0 Dia(s), 5 h. 25 m. 21 s.', '0', '0', 'Activo', '2022-03-30 15:07:05', NULL, 6, 0),
(138, 'Alta-00139', 339, 138, '.', '0 Dia(s), 4 h. 35 m. 54 s.', '0', '0', 'Activo', '2022-03-30 18:02:19', NULL, 6, 0),
(139, 'Alta-00140', 49, 139, '.', '0 Dia(s), 1 h. 28 m. 28 s.', '0', '0', 'Activo', '2022-03-30 18:10:06', NULL, 6, 0),
(140, 'Alta-00141', 334, 140, '.', '0 Dia(s), 2 h. 56 m. 39 s.', '0', '0', 'Activo', '2022-03-30 18:13:41', NULL, 6, 0),
(141, 'Alta-00142', 333, 141, '.', '0 Dia(s), 3 h. 1 m. 50 s.', '0', '0', 'Activo', '2022-03-30 18:17:21', NULL, 6, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroaltabitacora`
--

CREATE TABLE `registroaltabitacora` (
  `id_regAlta` int(11) NOT NULL,
  `folioRegAlta` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `id_link` int(11) NOT NULL,
  `observAudiFinal` varchar(300) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '--',
  `cronometro` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT '--',
  `supervisionValores` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `borrado` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `status` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'Activo',
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_borrado` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capB` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `registroaltabitacora`
--

INSERT INTO `registroaltabitacora` (`id_regAlta`, `folioRegAlta`, `id_proyecto`, `id_link`, `observAudiFinal`, `cronometro`, `supervisionValores`, `borrado`, `status`, `fecha_creacion`, `fecha_borrado`, `id_capC`, `id_capB`) VALUES
(1, '0', 0, 0, '', NULL, '0', '', 'Main', '2022-01-01 00:00:00', NULL, 1, NULL),
(3, 'Alta-003', 27, 2, '.', NULL, '0', '0', 'Activo', '2022-03-10 13:46:43', NULL, 6, NULL),
(4, 'Alta-004', 34, 3, '.', NULL, '0', '0', 'Activo', '2022-03-10 13:50:31', NULL, 6, NULL),
(5, 'Alta-005', 24, 4, '.', NULL, '0', '0', 'Activo', '2022-03-10 14:04:36', NULL, 6, NULL),
(6, 'Alta-006', 30, 5, '.', NULL, '0', '0', 'Activo', '2022-03-10 17:19:54', NULL, 6, NULL),
(7, 'Alta-007', 40, 6, '.', NULL, '0', '0', 'Activo', '2022-03-10 17:23:45', NULL, 6, NULL),
(8, 'Alta-008', 53, 7, '.', NULL, '0', '0', 'Activo', '2022-03-10 17:25:23', NULL, 6, NULL),
(9, 'Alta-009', 4, 8, '.', NULL, '0', '0', 'Activo', '2022-03-10 17:27:25', NULL, 6, NULL),
(10, 'Alta-0010', 67, 9, '.', NULL, '0', '0', 'Activo', '2022-03-10 17:28:26', NULL, 6, NULL),
(11, 'Alta-0011', 133, 10, '.', NULL, '0', '0', 'Activo', '2022-03-11 09:42:53', NULL, 6, NULL),
(12, 'Alta-0012', 132, 11, '.', NULL, '0', '0', 'Activo', '2022-03-11 09:46:41', NULL, 6, NULL),
(13, 'Alta-0013', 130, 12, '.\r\n', NULL, '0', '0', 'Activo', '2022-03-11 09:49:12', NULL, 6, NULL),
(14, 'Alta-0014', 129, 13, '.', NULL, '0', '0', 'Activo', '2022-03-11 09:51:53', NULL, 6, NULL),
(15, 'Alta-0015', 128, 14, '.', NULL, '0', '0', 'Activo', '2022-03-11 09:52:59', NULL, 6, NULL),
(16, 'Alta-0016', 135, 15, '.', NULL, '0', '0', 'Activo', '2022-03-11 10:53:47', NULL, 6, NULL),
(17, 'Alta-0017', 127, 16, '.', NULL, '0', '0', 'Activo', '2022-03-11 10:56:07', NULL, 6, NULL),
(18, 'Alta-0018', 156, 17, 'revisar computadora módulo tcm', NULL, '0', '0', 'Activo', '2022-03-11 17:12:38', NULL, 6, 0),
(19, 'Alta-0019', 70, 18, '.', NULL, '0', '0', 'Activo', '2022-03-11 17:15:57', NULL, 6, 0),
(20, 'Alta-0020', 155, 19, '.', NULL, '0', '0', 'Activo', '2022-03-11 17:24:50', NULL, 6, 0),
(21, 'Alta-0021', 157, 20, '.', NULL, '0', '0', 'Activo', '2022-03-11 17:51:32', NULL, 6, 0),
(22, 'Alta-0022', 120, 21, '.', NULL, '0', '0', 'Activo', '2022-03-11 18:00:53', NULL, 6, 0),
(23, 'Alta-0023', 188, 22, '.', NULL, '0', '0', 'Activo', '2022-03-12 11:33:34', NULL, 6, 0),
(24, 'Alta-0024', 179, 23, '.', NULL, '0', '0', 'Activo', '2022-03-12 11:38:01', NULL, 6, 0),
(25, 'Alta-0025', 20, 24, '.', NULL, '0', '0', 'Activo', '2022-03-12 12:54:34', NULL, 6, 0),
(26, 'Alta-0026', 190, 25, '.', NULL, '0', '0', 'Activo', '2022-03-12 12:57:11', NULL, 6, 0),
(27, 'Alta-0027', 22, 26, '.', NULL, '0', '0', 'Activo', '2022-03-12 13:00:47', NULL, 6, 0),
(28, 'Alta-0028', 196, 27, '.', NULL, '0', '0', 'Activo', '2022-03-12 13:29:55', NULL, 6, 0),
(29, 'Alta-0029', 176, 28, '.', '0 Dia(s), 3 h. 21 m. 3 s.', '0', '0', 'Activo', '2022-03-12 13:44:14', NULL, 6, 0),
(30, 'Alta-0030', 131, 29, '.', '1 Dia(s), 21 h. 1 m. 58 s.', '0', '0', 'Activo', '2022-03-14 08:21:25', NULL, 6, 0),
(31, 'Alta-0031', 194, 30, 'fuga de aceite de motor ', '0 Dia(s), 0 h. 7 m. 18 s.', '0', '0', 'Activo', '2022-03-14 10:59:40', NULL, 6, 0),
(32, 'Alta-0032', 126, 31, '.', '1 Dia(s), 21 h. 15 m. 54 s.', '0', '0', 'Activo', '2022-03-14 11:02:04', NULL, 6, 0),
(33, 'Alta-0033', 198, 32, '.', '1 Dia(s), 21 h. 24 m. 9 s.', '0', '0', 'Activo', '2022-03-14 11:08:02', NULL, 6, 0),
(34, 'Alta-0034', 17, 33, '.', '0 Dia(s), 1 h. 52 m. 31 s.', '0', '0', 'Activo', '2022-03-14 12:50:39', NULL, 6, 0),
(35, 'Alta-0035', 193, 34, '.', '0 Dia(s), 4 h. 44 m. 50 s.', '0', '0', 'Activo', '2022-03-14 14:09:29', NULL, 6, 0),
(36, 'Alta-0036', 192, 35, '.', '2 Dia(s), 3 h. 29 m. 50 s.', '0', '0', 'Activo', '2022-03-14 16:31:57', NULL, 6, 0),
(37, 'Alta-0037', 159, 36, '.', '0 Dia(s), 0 h. 54 m. 34 s.', '0', '0', 'Activo', '2022-03-14 17:18:39', NULL, 6, 0),
(38, 'Alta-0038', 134, 37, '.', '0 Dia(s), 15 h. 19 m. 45 s.', '0', '0', 'Activo', '2022-03-15 08:15:18', NULL, 6, 0),
(39, 'Alta-0039', 214, 38, ' .', '0 Dia(s), 16 h. 18 m. 51 s.', '0', '0', 'Activo', '2022-03-15 09:30:13', NULL, 6, 0),
(40, 'Alta-0040', 209, 39, 'patina tercera levemente ', '0 Dia(s), 17 h. 41 m. 48 s.', '0', '0', 'Activo', '2022-03-15 09:54:42', NULL, 6, 0),
(41, 'Alta-0041', 31, 40, '.', '0 Dia(s), 0 h. 1 m. 12 s.', '0', '0', 'Activo', '2022-03-15 10:34:01', NULL, 6, 0),
(42, 'Alta-0042', 207, 41, 'trae fuga de agua por manguera de radiador ', '0 Dia(s), 2 h. 53 m. 44 s.', '0', '0', 'Activo', '2022-03-15 12:00:28', NULL, 6, 0),
(43, 'Alta-0043', 220, 42, '.', '0 Dia(s), 0 h. 54 m. 17 s.', '0', '0', 'Activo', '2022-03-15 13:04:37', NULL, 6, 0),
(44, 'Alta-0044', 222, 43, '.', '0 Dia(s), 1 h. 55 m. 19 s.', '0', '0', 'Activo', '2022-03-15 14:02:11', NULL, 6, 0),
(45, 'Alta-0045', 225, 44, '.', '0 Dia(s), 1 h. 53 m. 2 s.', '0', '0', 'Activo', '2022-03-15 14:55:42', NULL, 6, 0),
(46, 'Alta-0046', 224, 45, '.', '0 Dia(s), 4 h. 5 m. 55 s.', '0', '0', 'Activo', '2022-03-15 16:10:32', NULL, 6, 0),
(47, 'Alta-0047', 15, 46, '.', '0 Dia(s), 15 h. 46 m. 46 s.', '0', '0', 'Activo', '2022-03-16 09:12:14', NULL, 6, 0),
(48, 'Alta-0048', 36, 47, '.', '0 Dia(s), 0 h. 3 m. 26 s.', '0', '0', 'Activo', '2022-03-16 09:18:38', NULL, 6, 0),
(49, 'Alta-0049', 239, 48, '.', '0 Dia(s), 0 h. 31 m. 17 s.', '0', '0', 'Activo', '2022-03-16 15:29:36', NULL, 6, 0),
(50, 'Alta-0050', 37, 49, 'como recomendación llevarlo a alineación ', '0 Dia(s), 2 h. 59 m. 19 s.', '0', '0', 'Activo', '2022-03-16 16:15:04', NULL, 6, 0),
(51, 'Alta-0051', 197, 50, 'la fuga que presentaba quedó corregida ', '0 Dia(s), 5 h. 58 m. 20 s.', '0', '0', 'Activo', '2022-03-16 16:17:43', NULL, 6, 0),
(52, 'Alta-0052', 229, 51, '.', '0 Dia(s), 2 h. 25 m. 12 s.', '0', '0', 'Activo', '2022-03-16 16:19:48', NULL, 6, 0),
(53, 'Alta-0053', 230, 52, '.', '0 Dia(s), 1 h. 9 m. 38 s.', '0', '0', 'Activo', '2022-03-16 17:09:43', NULL, 6, 0),
(54, 'Alta-0054', 244, 53, '.', '0 Dia(s), 1 h. 10 m. 6 s.', '0', '0', 'Activo', '2022-03-16 17:13:33', NULL, 6, 0),
(55, 'Alta-0055', 240, 54, '.', '0 Dia(s), 2 h. 17 m. 17 s.', '0', '0', 'Activo', '2022-03-16 17:14:39', NULL, 6, 0),
(56, 'Alta-0056', 238, 55, '.', '0 Dia(s), 2 h. 16 m. 55 s.', '0', '0', 'Activo', '2022-03-16 17:16:08', NULL, 6, 0),
(57, 'Alta-0057', 235, 56, '.', '0 Dia(s), 1 h. 27 m. 14 s.', '0', '0', 'Activo', '2022-03-16 17:19:59', NULL, 6, 0),
(58, 'Alta-0058', 234, 57, '.', '0 Dia(s), 1 h. 27 m. 42 s.', '0', '0', 'Activo', '2022-03-16 17:21:00', NULL, 6, 0),
(59, 'Alta-0059', 233, 58, '.', '0 Dia(s), 1 h. 28 m. 50 s.', '0', '0', 'Activo', '2022-03-16 17:22:40', NULL, 6, 0),
(60, 'Alta-0060', 232, 59, '.', '0 Dia(s), 1 h. 30 m. 58 s.', '0', '0', 'Activo', '2022-03-16 17:26:53', NULL, 6, 0),
(61, 'Alta-0061', 41, 60, '.', '0 Dia(s), 20 h. 52 m. 17 s.', '0', '0', 'Activo', '2022-03-17 08:42:55', NULL, 6, 0),
(62, 'Alta-0062', 236, 61, '.', '0 Dia(s), 17 h. 2 m. 24 s.', '0', '0', 'Activo', '2022-03-17 08:54:27', NULL, 6, 0),
(63, 'Alta-0063', 48, 62, 'se confirmo información de falla electronica según el protocolo ', '0 Dia(s), 18 h. 11 m. 19 s.', '0', '0', 'Activo', '2022-03-17 11:57:33', NULL, 6, 0),
(64, 'Alta-0064', 47, 63, '.', '0 Dia(s), 3 h. 19 m. 48 s.', '0', '0', 'Activo', '2022-03-17 12:34:29', NULL, 6, 0),
(65, 'Alta-0065', 202, 64, 'se probó por más de 1 hora continúa y no presento la falla reportada', '0 Dia(s), 23 h. 0 m. 13 s.', '0', '0', 'Activo', '2022-03-17 16:36:06', NULL, 6, 0),
(66, 'Alta-0065', 202, 65, 'se probó por más de 1 hora continúa y no presento la falla reportada', '0 Dia(s), 23 h. 21 m. 42 s.', '0', '0', 'Activo', '2022-03-17 16:57:35', NULL, 6, 0),
(67, 'Alta-0067', 185, 66, '.', '0 Dia(s), 1 h. 15 m. 19 s.', '0', '0', 'Activo', '2022-03-17 16:58:11', NULL, 6, 0),
(68, 'Alta-0068', 25, 67, 'no sirve el velocímetro ', '0 Dia(s), 1 h. 30 m. 45 s.', '0', '0', 'Activo', '2022-03-17 17:28:06', NULL, 6, 0),
(69, 'Alta-0069', 180, 68, '.', '0 Dia(s), 3 h. 53 m. 1 s.', '0', '0', 'Activo', '2022-03-17 19:44:42', NULL, 6, 0),
(70, 'Alta-0070', 42, 69, '.', '0 Dia(s), 16 h. 42 m. 40 s.', '0', '0', 'Activo', '2022-03-18 10:22:17', NULL, 6, 0),
(71, 'Alta-0071', 11, 70, '.', '0 Dia(s), 1 h. 45 m. 5 s.', '0', '0', 'Activo', '2022-03-18 13:08:46', NULL, 6, 0),
(72, 'Alta-0072', 257, 71, '.', '0 Dia(s), 1 h. 19 m. 59 s.', '0', '0', 'Activo', '2022-03-18 14:42:41', NULL, 6, 0),
(73, 'Alta-0073', 255, 72, '.', '0 Dia(s), 1 h. 36 m. 11 s.', '0', '0', 'Activo', '2022-03-18 14:43:40', NULL, 6, 0),
(74, 'Alta-0074', 254, 73, '.', '0 Dia(s), 1 h. 25 m. 37 s.', '0', '0', 'Activo', '2022-03-18 14:46:10', NULL, 6, 0),
(75, 'Alta-0075', 250, 74, '.', '0 Dia(s), 5 h. 6 m. 51 s.', '0', '0', 'Activo', '2022-03-18 16:26:59', NULL, 6, 0),
(76, 'Alta-0076', 125, 75, '.', '0 Dia(s), 15 h. 13 m. 8 s.', '0', '0', 'Activo', '2022-03-19 09:05:03', NULL, 6, 0),
(77, 'Alta-0077', 19, 76, '.', '0 Dia(s), 1 h. 15 m. 23 s.', '0', '0', 'Activo', '2022-03-19 10:19:19', NULL, 6, 0),
(78, 'Alta-0078', 246, 77, '.', '0 Dia(s), 0 h. 41 m. 47 s.', '0', '0', 'Activo', '2022-03-19 10:22:43', NULL, 6, 0),
(79, 'Alta-0079', 259, 78, '.', '0 Dia(s), 0 h. 3 m. 15 s.', '0', '0', 'Activo', '2022-03-19 11:20:58', NULL, 6, 0),
(80, 'Alta-0080', 258, 79, '.', '0 Dia(s), 1 h. 11 m. 51 s.', '0', '0', 'Activo', '2022-03-19 11:22:37', NULL, 6, 0),
(81, 'Alta-0081', 14, 80, '.', '0 Dia(s), 17 h. 42 m. 43 s.', '0', '0', 'Activo', '2022-03-19 11:24:51', NULL, 6, 0),
(82, 'Alta-0082', 10, 81, '.', '0 Dia(s), 3 h. 4 m. 4 s.', '0', '0', 'Activo', '2022-03-19 13:09:22', NULL, 6, 0),
(83, 'Alta-0083', 263, 82, '.', '0 Dia(s), 0 h. 5 m. 4 s.', '0', '0', 'Activo', '2022-03-23 09:19:16', NULL, 6, 0),
(84, 'Alta-0084', 88, 83, '.', '0 Dia(s), 0 h. 20 m. 13 s.', '0', '0', 'Activo', '2022-03-23 09:26:34', NULL, 6, 0),
(85, 'Alta-0085', 35, 84, '.', '0 Dia(s), 0 h. 34 m. 13 s.', '0', '0', 'Activo', '2022-03-23 09:37:47', NULL, 6, 0),
(86, 'Alta-0086', 260, 85, '.', '0 Dia(s), 0 h. 50 m. 14 s.', '0', '0', 'Activo', '2022-03-23 12:13:24', NULL, 6, 0),
(87, 'Alta-0087', 182, 86, '.', '0 Dia(s), 1 h. 45 m. 33 s.', '0', '0', 'Activo', '2022-03-23 12:17:08', NULL, 6, 0),
(88, 'Alta-0088', 149, 87, '.', '0 Dia(s), 1 h. 54 m. 31 s.', '0', '0', 'Activo', '2022-03-23 12:27:48', NULL, 6, 0),
(89, 'Alta-0089', 118, 88, 'corrección de fuga ', '0 Dia(s), 1 h. 55 m. 28 s.', '0', '0', 'Activo', '2022-03-23 12:30:25', NULL, 6, 0),
(90, 'Alta-0090', 281, 89, '.', '0 Dia(s), 1 h. 48 m. 30 s.', '0', '0', 'Activo', '2022-03-23 15:44:14', NULL, 6, 0),
(91, 'Alta-0091', 280, 90, '.', '0 Dia(s), 0 h. 27 m. 10 s.', '0', '0', 'Activo', '2022-03-23 15:47:13', NULL, 6, 0),
(92, 'Alta-0092', 279, 91, '.', '0 Dia(s), 1 h. 59 m. 31 s.', '0', '0', 'Activo', '2022-03-23 15:49:30', NULL, 6, 0),
(93, 'Alta-0093', 183, 92, '.', '0 Dia(s), 2 h. 0 m. 47 s.', '0', '0', 'Activo', '2022-03-23 15:54:48', NULL, 6, 0),
(94, 'Alta-0094', 153, 93, '.', '0 Dia(s), 16 h. 57 m. 6 s.', '0', '0', 'Activo', '2022-03-24 10:12:38', NULL, 6, 0),
(95, 'Alta-0095', 287, 94, '.', '0 Dia(s), 0 h. 7 m. 58 s.', '0', '0', 'Activo', '2022-03-24 11:16:33', NULL, 6, 0),
(96, 'Alta-0096', 285, 95, '.', '0 Dia(s), 0 h. 8 m. 11 s.', '0', '0', 'Activo', '2022-03-24 11:18:38', NULL, 6, 0),
(97, 'Alta-0097', 268, 96, 'solo se corrigieron fugas ', '0 Dia(s), 21 h. 34 m. 15 s.', '0', '0', 'Activo', '2022-03-24 11:21:34', NULL, 6, 0),
(98, 'Alta-0098', 282, 97, '.', '0 Dia(s), 21 h. 25 m. 17 s.', '0', '0', 'Activo', '2022-03-24 11:24:07', NULL, 6, 0),
(99, 'Alta-0099', 267, 98, '.', '0 Dia(s), 2 h. 14 m. 26 s.', '0', '0', 'Activo', '2022-03-24 13:22:14', NULL, 6, 0),
(100, 'Alta-00100', 9, 99, '.', '0 Dia(s), 2 h. 36 m. 33 s.', '0', '0', 'Activo', '2022-03-24 16:12:57', NULL, 6, 0),
(101, 'Alta-00101', 3, 100, '.', '0 Dia(s), 14 h. 46 m. 17 s.', '0', '0', 'Activo', '2022-03-25 08:42:22', NULL, 6, 0),
(102, 'Alta-00102', 85, 101, 'El cliente está consiente de que no sirve su computadora lo confirme mediante un audio que le envío a Óscar ', '0 Dia(s), 20 h. 31 m. 24 s.', '0', '0', 'Activo', '2022-03-25 10:30:19', NULL, 6, 0),
(103, 'Alta-00103', 221, 102, '--', '0 Dia(s), 18 h. 36 m. 34 s.', '0', '0', 'Activo', '2022-03-25 11:48:23', NULL, 1, 0),
(104, 'Alta-00104', 301, 103, '.', '0 Dia(s), 1 h. 42 m. 29 s.', '0', '0', 'Activo', '2022-03-25 16:18:15', NULL, 6, 0),
(105, 'Alta-00105', 300, 104, '.', '0 Dia(s), 1 h. 46 m. 38 s.', '0', '0', 'Activo', '2022-03-25 16:20:12', NULL, 6, 0),
(106, 'Alta-00106', 305, 105, '.', '0 Dia(s), 0 h. 4 m. 23 s.', '0', '0', 'Activo', '2022-03-25 16:56:33', NULL, 6, 0),
(107, 'Alta-00107', 29, 106, '.', '0 Dia(s), 5 h. 7 m. 10 s.', '0', '0', 'Activo', '2022-03-25 17:30:59', NULL, 6, 0),
(108, 'Alta-00108', 303, 107, '.', '0 Dia(s), 1 h. 43 m. 55 s.', '0', '0', 'Activo', '2022-03-25 17:45:02', NULL, 6, 0),
(109, 'Alta-00109', 299, 108, '.', '0 Dia(s), 7 h. 56 m. 57 s.', '0', '0', 'Activo', '2022-03-25 17:52:10', NULL, 6, 0),
(110, 'Alta-00110', 284, 109, 'se la llevó el cliente ', '0 Dia(s), 17 h. 42 m. 59 s.', '0', '0', 'Activo', '2022-03-26 08:24:06', NULL, 6, 0),
(111, 'Alta-00111', 296, 110, 'orden cancelada', '0 Dia(s), 0 h. 12 m. 34 s.', '0', '0', 'Activo', '2022-03-26 09:11:22', NULL, 6, 0),
(112, 'Alta-00112', 247, 111, '.', '0 Dia(s), 16 h. 36 m. 39 s.', '0', '0', 'Activo', '2022-03-26 10:06:58', NULL, 6, 0),
(113, 'Alta-00113', 171, 112, '.', '0 Dia(s), 19 h. 36 m. 23 s.', '0', '0', 'Activo', '2022-03-26 10:15:12', NULL, 6, 0),
(114, 'Alta-00114', 290, 113, '.', '0 Dia(s), 18 h. 40 m. 28 s.', '0', '0', 'Activo', '2022-03-26 11:14:59', NULL, 6, 0),
(115, 'Alta-00115', 166, 114, '.\r\n', '0 Dia(s), 18 h. 21 m. 23 s.', '0', '0', 'Activo', '2022-03-26 11:17:20', NULL, 6, 0),
(116, 'Alta-00116', 307, 115, '.', '0 Dia(s), 1 h. 13 m. 30 s.', '0', '0', 'Activo', '2022-03-26 11:19:44', NULL, 6, 0),
(117, 'Alta-00117', 309, 116, '.', '0 Dia(s), 1 h. 7 m. 58 s.', '0', '0', 'Activo', '2022-03-26 11:21:25', NULL, 6, 0),
(118, 'Alta-00118', 308, 117, '.', '0 Dia(s), 1 h. 12 m. 25 s.', '0', '0', 'Activo', '2022-03-26 11:23:10', NULL, 6, 0),
(119, 'Alta-00119', 211, 118, '.', '0 Dia(s), 1 h. 27 m. 26 s.', '0', '0', 'Activo', '2022-03-26 13:17:31', NULL, 6, 0),
(120, 'Alta-00120', 248, 119, '.', '0 Dia(s), 0 h. 1 m. 36 s.', '0', '0', 'Activo', '2022-03-26 14:17:10', NULL, 6, 0),
(121, 'Alta-00121', 199, 120, '.', '0 Dia(s), 0 h. 23 m. 32 s.', '0', '0', 'Activo', '2022-03-28 12:40:23', NULL, 6, 0),
(122, 'Alta-00122', 317, 121, '.', '0 Dia(s), 2 h. 24 m. 41 s.', '0', '0', 'Activo', '2022-03-28 15:35:11', NULL, 6, 0),
(123, 'Alta-00123', 314, 122, '.', '0 Dia(s), 1 h. 53 m. 51 s.', '0', '0', 'Activo', '2022-03-28 15:36:44', NULL, 6, 0),
(124, 'Alta-00124', 275, 123, '.', '0 Dia(s), 4 h. 1 m. 42 s.', '0', '0', 'Activo', '2022-03-28 15:39:15', NULL, 6, 0),
(125, 'Alta-00125', 234, 124, '.', '0 Dia(s), 2 h. 8 m. 55 s.', '0', '0', 'Activo', '2022-03-28 15:47:38', NULL, 6, 0),
(126, 'Alta-00126', 242, 125, '.', '0 Dia(s), 0 h. 12 m. 53 s.', '0', '0', 'Activo', '2022-03-29 10:57:29', NULL, 6, 0),
(127, 'Alta-00127', 195, 126, '.', '1 Dia(s), 0 h. 20 m. 17 s.', '0', '0', 'Activo', '2022-03-29 11:29:43', NULL, 6, 0),
(128, 'Alta-00128', 321, 127, '.', '0 Dia(s), 0 h. 24 m. 22 s.', '0', '0', 'Activo', '2022-03-29 12:05:17', NULL, 6, 0),
(129, 'Alta-00129', 304, 128, '.', '0 Dia(s), 2 h. 2 m. 28 s.', '0', '0', 'Activo', '2022-03-29 12:43:13', NULL, 6, 0),
(130, 'Alta-00130', 328, 129, '.', '0 Dia(s), 0 h. 5 m. 2 s.', '0', '0', 'Activo', '2022-03-29 12:44:42', NULL, 6, 0),
(131, 'Alta-00131', 329, 130, '.', '0 Dia(s), 0 h. 5 m. 36 s.', '0', '0', 'Activo', '2022-03-29 13:12:41', NULL, 6, 0),
(132, 'Alta-00132', 319, 131, '.', '0 Dia(s), 4 h. 33 m. 51 s.', '0', '0', 'Activo', '2022-03-29 18:00:17', NULL, 6, 0),
(133, 'Alta-00133', 272, 132, '.', '0 Dia(s), 1 h. 37 m. 59 s.', '0', '0', 'Activo', '2022-03-29 18:03:50', NULL, 6, 0),
(134, 'Alta-00134', 116, 133, '.', '0 Dia(s), 20 h. 29 m. 5 s.', '0', '0', 'Activo', '2022-03-30 10:05:49', NULL, 6, 0),
(135, 'Alta-00135', 315, 134, '.', '0 Dia(s), 17 h. 26 m. 52 s.', '0', '0', 'Activo', '2022-03-30 10:07:58', NULL, 6, 0),
(136, 'Alta-00136', 338, 135, '.', '0 Dia(s), 0 h. 4 m. 9 s.', '0', '0', 'Activo', '2022-03-30 13:16:48', NULL, 6, 0),
(137, 'Alta-00137', 323, 136, '.', '0 Dia(s), 3 h. 58 m. 31 s.', '0', '0', 'Activo', '2022-03-30 14:37:49', NULL, 6, 0),
(138, 'Alta-00138', 297, 137, '.', '0 Dia(s), 5 h. 25 m. 21 s.', '0', '0', 'Activo', '2022-03-30 15:07:05', NULL, 6, 0),
(139, 'Alta-00139', 339, 138, '.', '0 Dia(s), 4 h. 35 m. 54 s.', '0', '0', 'Activo', '2022-03-30 18:02:19', NULL, 6, 0),
(140, 'Alta-00140', 49, 139, '.', '0 Dia(s), 1 h. 28 m. 28 s.', '0', '0', 'Activo', '2022-03-30 18:10:06', NULL, 6, 0),
(141, 'Alta-00141', 334, 140, '.', '0 Dia(s), 2 h. 56 m. 39 s.', '0', '0', 'Activo', '2022-03-30 18:13:41', NULL, 6, 0),
(142, 'Alta-00142', 333, 141, '.', '0 Dia(s), 3 h. 1 m. 50 s.', '0', '0', 'Activo', '2022-03-30 18:17:21', NULL, 6, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrocodidenti`
--

CREATE TABLE `registrocodidenti` (
  `id_regcodidenti` int(11) NOT NULL,
  `folioCodID` varchar(25) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `id_semanaCobro` int(11) NOT NULL,
  `borrado` char(1) DEFAULT '0',
  `status` varchar(47) DEFAULT 'Activo',
  `supervisado` char(1) NOT NULL DEFAULT '0',
  `supervisionValores` char(1) NOT NULL DEFAULT '0',
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_borrado` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capB` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registrocodidenti`
--

INSERT INTO `registrocodidenti` (`id_regcodidenti`, `folioCodID`, `id_proyecto`, `id_semanaCobro`, `borrado`, `status`, `supervisado`, `supervisionValores`, `fecha_creacion`, `fecha_borrado`, `id_capC`, `id_capB`) VALUES
(21, 'CodID-0021', 194, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-14 12:04:18', NULL, 3, 0),
(23, 'CodID-0023', 198, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-14 15:15:32', NULL, 3, 0),
(24, 'CodID-0024', 132, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-14 15:48:21', NULL, 3, 0),
(25, 'CodID-0025', 126, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-14 16:36:43', NULL, 3, 0),
(26, 'CodID-0026', 24, 2, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-14 17:02:41', NULL, 3, 0),
(27, 'CodID-0027', 27, 2, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-14 17:03:19', NULL, 3, 0),
(28, 'CodID-0028', 30, 2, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-14 17:04:06', NULL, 3, 0),
(29, 'CodID-0029', 134, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-15 09:45:23', NULL, 3, 0),
(31, 'CodID-0031', 31, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-15 18:41:14', NULL, 2, 0),
(32, 'CodID-0032', 36, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-16 09:21:11', NULL, 3, 0),
(33, 'CodID-0033', 224, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-16 10:37:02', NULL, 3, 0),
(34, 'CodID-0034', 193, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-16 11:40:22', NULL, 3, 0),
(35, 'CodID-0035', 239, 2, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-16 15:59:54', NULL, 3, 0),
(36, 'CodID-0036', 229, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-16 16:20:59', NULL, 3, 0),
(37, 'CodID-0037', 37, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-16 16:23:55', NULL, 3, 0),
(38, 'CodID-0038', 207, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-16 17:01:30', NULL, 3, 0),
(39, 'CodID-0039', 244, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-16 17:54:29', NULL, 3, 0),
(40, 'CodID-0040', 20, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-17 10:08:15', NULL, 3, 0),
(41, 'CodID-0041', 197, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-17 12:51:15', NULL, 3, 0),
(42, 'CodID-0042', 238, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-17 13:36:30', NULL, 3, 0),
(43, 'CodID-0043', 47, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-17 13:40:46', NULL, 3, 0),
(44, 'CodID-0044', 220, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-17 14:01:10', NULL, 3, 0),
(45, 'CodID-0045', 48, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-17 14:21:07', NULL, 3, 0),
(46, 'CodID-0046', 225, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-17 17:50:51', NULL, 3, 0),
(47, 'CodID-0047', 180, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-18 09:50:21', NULL, 3, 0),
(48, 'CodID-0048', 42, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-18 10:28:37', NULL, 3, 0),
(49, 'CodID-0049', 15, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-18 12:37:19', NULL, 3, 0),
(50, 'CodID-0050', 255, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-18 15:04:28', NULL, 3, 0),
(51, 'CodID-0051', 257, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-18 15:10:38', NULL, 3, 0),
(52, 'CodID-0052', 254, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-18 15:14:20', NULL, 3, 0),
(53, 'CodID-0053', 11, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-18 16:15:25', NULL, 3, 0),
(54, 'CodID-0054', 41, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-18 16:31:01', NULL, 3, 0),
(55, 'CodID-0055', 130, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-18 16:42:09', NULL, 3, 0),
(56, 'CodID-0056', 129, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-18 16:57:58', NULL, 3, 0),
(57, 'CodID-0057', 25, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-18 17:52:57', NULL, 3, 0),
(58, 'CodID-0058', 185, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-19 09:53:00', NULL, 3, 0),
(59, 'CodID-0059', 259, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-19 11:26:03', NULL, 3, 0),
(60, 'CodID-0060', 250, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-19 12:41:57', NULL, 3, 0),
(61, 'CodID-0061', 19, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-19 13:14:40', NULL, 3, 0),
(62, 'CodID-0062', 258, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-23 12:37:30', NULL, 3, 0),
(63, 'CodID-0063', 246, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-23 12:41:15', NULL, 3, 0),
(64, 'CodID-0064', 263, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-23 12:42:57', NULL, 3, 0),
(65, 'CodID-0065', 10, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-23 12:57:08', NULL, 3, 0),
(66, 'CodID-0066', 118, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-23 12:59:11', NULL, 3, 0),
(67, 'CodID-0067', 14, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-23 13:03:29', NULL, 3, 0),
(68, 'CodID-0068', 88, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-23 13:05:13', NULL, 3, 0),
(69, 'CodID-0069', 182, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-23 13:06:40', NULL, 3, 0),
(70, 'CodID-0070', 149, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-23 13:08:17', NULL, 3, 0),
(71, 'CodID-0071', 280, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-24 10:06:17', NULL, 3, 0),
(72, 'CodID-0072', 35, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-24 10:09:41', NULL, 3, 0),
(73, 'CodID-0073', 279, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-24 10:13:23', NULL, 3, 0),
(74, 'CodID-0074', 287, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-24 12:07:26', NULL, 8, 0),
(75, 'CodID-0075', 285, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-24 12:32:33', NULL, 8, 0),
(76, 'CodID-0076', 153, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-24 15:17:16', NULL, 8, 0),
(77, 'CodID-0077', 183, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-24 16:56:00', NULL, 8, 0),
(78, 'CodID-0078', 3, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 08:49:51', NULL, 8, 0),
(79, 'CodID-0079', 85, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 11:28:19', NULL, 8, 0),
(80, 'CodID-0080', 202, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 11:30:10', NULL, 8, 0),
(81, 'CodID-0081', 17, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 13:41:05', NULL, 8, 0),
(82, 'CodID-0082', 125, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 13:43:49', NULL, 8, 0),
(83, 'CodID-0083', 159, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 13:47:57', NULL, 8, 0),
(84, 'CodID-0084', 192, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 13:56:04', NULL, 8, 0),
(85, 'CodID-0085', 209, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 14:01:40', NULL, 8, 0),
(86, 'CodID-0086', 222, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 14:08:23', NULL, 8, 0),
(87, 'CodID-0087', 281, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 14:53:41', NULL, 8, 0),
(88, 'CodID-0088', 282, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 14:59:53', NULL, 8, 0),
(89, 'CodID-0089', 267, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 15:53:40', NULL, 8, 0),
(90, 'CodID-0090', 301, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 16:55:29', NULL, 8, 0),
(91, 'CodID-0091', 300, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 16:56:50', NULL, 8, 0),
(92, 'CodID-0092', 305, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 17:03:51', NULL, 8, 0),
(93, 'CodID-0093', 303, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 17:46:56', NULL, 8, 0),
(94, 'CodID-0094', 9, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-26 10:11:26', NULL, 8, 0),
(95, 'CodID-0095', 247, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-26 10:27:42', NULL, 8, 0),
(96, 'CodID-0096', 221, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-26 11:39:35', NULL, 8, 0),
(97, 'CodID-0097', 29, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-26 11:44:27', NULL, 8, 0),
(98, 'CodID-0098', 240, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-26 11:46:32', NULL, 8, 0),
(99, 'CodID-0099', 308, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-26 12:10:56', NULL, 8, 0),
(100, 'CodID-00100', 309, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-26 12:16:33', NULL, 8, 0),
(101, 'CodID-00101', 307, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-26 12:21:00', NULL, 8, 0),
(102, 'CodID-00102', 236, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-26 12:39:31', NULL, 8, 0),
(103, 'CodID-00103', 299, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-26 12:58:47', NULL, 8, 0),
(104, 'CodID-00104', 211, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-26 13:24:30', NULL, 8, 0),
(105, 'CodID-00105', 248, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-26 14:28:28', NULL, 8, 0),
(106, 'CodID-00106', 199, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-28 12:48:48', NULL, 8, 0),
(107, 'CodID-00107', 171, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-28 13:58:13', NULL, 8, 0),
(108, 'CodID-00108', 296, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-28 14:04:45', NULL, 8, 0),
(109, 'CodID-00109', 284, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-28 14:07:41', NULL, 8, 0),
(110, 'CodID-00110', 290, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-28 15:13:58', NULL, 8, 0),
(111, 'CodID-00111', 317, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-28 15:57:39', NULL, 8, 0),
(112, 'CodID-00112', 234, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-28 16:23:25', NULL, 8, 0),
(113, 'CodID-00113', 166, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-28 17:08:55', NULL, 8, 0),
(114, 'CodID-00114', 314, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-28 17:18:47', NULL, 8, 0),
(115, 'CodID-00115', 321, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-29 12:20:20', NULL, 8, 0),
(116, 'CodID-00116', 195, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-29 15:06:01', NULL, 8, 0),
(117, 'CodID-00117', 328, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-29 15:09:32', NULL, 8, 0),
(118, 'CodID-00118', 329, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-29 15:16:04', NULL, 8, 0),
(119, 'CodID-00119', 304, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-30 09:38:44', NULL, 8, 0),
(120, 'CodID-00120', 242, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-30 12:11:56', NULL, 8, 0),
(121, 'CodID-00121', 338, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-30 13:28:43', NULL, 8, 0),
(122, 'CodID-00122', 319, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-30 13:41:40', NULL, 8, 0),
(123, 'CodID-00123', 275, 5, '0', 'Activo', '0', '0', '2022-03-30 17:17:55', NULL, 8, 0),
(124, 'CodID-00124', 272, 5, '0', 'Activo', '0', '0', '2022-03-30 17:27:05', NULL, 8, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrocodidentibitacora`
--

CREATE TABLE `registrocodidentibitacora` (
  `id_regcodidenti` int(11) NOT NULL,
  `folioCodID` varchar(25) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `id_semanaCobro` int(11) NOT NULL,
  `borrado` char(1) DEFAULT '0',
  `status` varchar(47) DEFAULT 'Activo',
  `supervisado` char(1) NOT NULL DEFAULT '0',
  `supervisionValores` char(1) NOT NULL DEFAULT '0',
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_borrado` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capB` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registrocodidentibitacora`
--

INSERT INTO `registrocodidentibitacora` (`id_regcodidenti`, `folioCodID`, `id_proyecto`, `id_semanaCobro`, `borrado`, `status`, `supervisado`, `supervisionValores`, `fecha_creacion`, `fecha_borrado`, `id_capC`, `id_capB`) VALUES
(1, 'CodID-001', 135, 2, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-12 10:24:24', NULL, 3, 0),
(2, 'CodID-002', 127, 2, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-12 10:30:56', NULL, 3, 0),
(3, 'CodID-003', 133, 2, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-12 10:32:48', NULL, 3, 0),
(4, 'CodID-004', 157, 2, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-12 10:35:00', NULL, 3, 0),
(5, 'CodID-005', 70, 2, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-12 10:43:37', NULL, 3, 0),
(6, 'CodID-006', 128, 2, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-12 10:50:33', NULL, 3, 0),
(7, 'CodID-007', 4, 2, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-12 10:51:39', NULL, 3, 0),
(8, 'CodID-008', 156, 2, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-12 10:53:16', NULL, 3, 0),
(9, 'CodID-009', 34, 2, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-12 10:55:15', NULL, 3, 0),
(10, 'CodID-0010', 40, 2, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-12 10:56:38', NULL, 3, 0),
(11, 'CodID-0011', 53, 2, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-12 10:58:55', NULL, 3, 0),
(12, 'CodID-0012', 67, 2, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-12 11:00:01', NULL, 3, 0),
(13, 'CodID-0013', 120, 2, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-12 11:01:49', NULL, 3, 0),
(14, 'CodID-0014', 179, 2, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-12 11:48:53', NULL, 3, 0),
(15, 'CodID-0015', 188, 2, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-12 12:23:53', NULL, 3, 0),
(16, 'CodID-0016', 155, 2, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-12 12:48:45', NULL, 3, 0),
(17, 'CodID-0017', 190, 2, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-12 13:17:14', NULL, 3, 0),
(18, 'CodID-0018', 196, 2, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-12 13:30:42', NULL, 3, 0),
(19, 'CodID-0019', 22, 2, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-12 13:55:22', NULL, 3, 0),
(20, 'CodID-0020', 176, 2, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-12 13:58:18', NULL, 3, 0),
(21, 'CodID-0021', 194, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-14 12:04:18', NULL, 3, 0),
(22, 'CodID-0022', 17, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-14 12:52:16', NULL, 3, 0),
(23, 'CodID-0023', 198, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-14 15:15:32', NULL, 3, 0),
(24, 'CodID-0024', 132, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-14 15:48:21', NULL, 3, 0),
(25, 'CodID-0025', 126, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-14 16:36:43', NULL, 3, 0),
(26, 'CodID-0026', 24, 2, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-14 17:02:41', NULL, 3, 0),
(27, 'CodID-0027', 27, 2, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-14 17:03:19', NULL, 3, 0),
(28, 'CodID-0028', 134, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-15 09:45:23', NULL, 3, 0),
(30, 'CodID-0030', 214, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-15 09:49:22', NULL, 3, 0),
(31, 'CodID-0031', 31, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-15 18:41:14', NULL, 2, 0),
(32, 'CodID-0032', 36, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-16 09:21:11', NULL, 3, 0),
(33, 'CodID-0033', 224, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-16 10:37:02', NULL, 3, 0),
(34, 'CodID-0034', 193, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-16 11:40:22', NULL, 3, 0),
(35, 'CodID-0035', 239, 2, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-16 15:59:54', NULL, 3, 0),
(36, 'CodID-0036', 229, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-16 16:20:59', NULL, 3, 0),
(37, 'CodID-0037', 37, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-16 16:23:55', NULL, 3, 0),
(38, 'CodID-0038', 207, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-16 17:01:30', NULL, 3, 0),
(39, 'CodID-0039', 244, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-16 17:54:29', NULL, 3, 0),
(40, 'CodID-0040', 20, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-17 10:08:15', NULL, 3, 0),
(41, 'CodID-0041', 197, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-17 12:51:15', NULL, 3, 0),
(42, 'CodID-0042', 238, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-17 13:36:30', NULL, 3, 0),
(43, 'CodID-0043', 47, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-17 13:40:46', NULL, 3, 0),
(44, 'CodID-0044', 220, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-17 14:01:10', NULL, 3, 0),
(45, 'CodID-0045', 48, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-17 14:21:07', NULL, 3, 0),
(46, 'CodID-0046', 225, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-17 17:50:51', NULL, 3, 0),
(47, 'CodID-0047', 180, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-18 09:50:21', NULL, 3, 0),
(48, 'CodID-0048', 42, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-18 10:28:37', NULL, 3, 0),
(49, 'CodID-0049', 15, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-18 12:37:19', NULL, 3, 0),
(50, 'CodID-0050', 255, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-18 15:04:28', NULL, 3, 0),
(51, 'CodID-0051', 257, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-18 15:10:38', NULL, 3, 0),
(52, 'CodID-0052', 254, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-18 15:14:20', NULL, 3, 0),
(53, 'CodID-0053', 11, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-18 16:15:25', NULL, 3, 0),
(54, 'CodID-0054', 41, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-18 16:31:01', NULL, 3, 0),
(55, 'CodID-0055', 130, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-18 16:42:09', NULL, 3, 0),
(56, 'CodID-0056', 129, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-18 16:57:58', NULL, 3, 0),
(57, 'CodID-0057', 25, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-18 17:52:57', NULL, 3, 0),
(58, 'CodID-0058', 185, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-19 09:53:00', NULL, 3, 0),
(59, 'CodID-0059', 259, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-19 11:26:03', NULL, 3, 0),
(60, 'CodID-0060', 250, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-19 12:41:57', NULL, 3, 0),
(61, 'CodID-0061', 19, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-19 13:14:40', NULL, 3, 0),
(62, 'CodID-0062', 258, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-23 12:37:30', NULL, 3, 0),
(63, 'CodID-0063', 246, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-23 12:41:15', NULL, 3, 0),
(64, 'CodID-0064', 263, 3, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-23 12:42:57', NULL, 3, 0),
(65, 'CodID-0065', 10, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-23 12:57:08', NULL, 3, 0),
(66, 'CodID-0066', 118, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-23 12:59:11', NULL, 3, 0),
(67, 'CodID-0067', 14, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-23 13:03:29', NULL, 3, 0),
(68, 'CodID-0068', 88, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-23 13:05:13', NULL, 3, 0),
(69, 'CodID-0069', 182, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-23 13:06:40', NULL, 3, 0),
(70, 'CodID-0070', 149, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-23 13:08:17', NULL, 3, 0),
(71, 'CodID-0071', 280, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-24 10:06:17', NULL, 3, 0),
(72, 'CodID-0072', 35, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-24 10:09:41', NULL, 3, 0),
(73, 'CodID-0073', 279, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-24 10:13:23', NULL, 3, 0),
(74, 'CodID-0074', 287, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-24 12:07:26', NULL, 8, 0),
(75, 'CodID-0075', 285, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-24 12:32:33', NULL, 8, 0),
(76, 'CodID-0076', 153, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-24 15:17:16', NULL, 8, 0),
(77, 'CodID-0077', 183, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-24 16:56:00', NULL, 8, 0),
(78, 'CodID-0078', 3, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 08:49:51', NULL, 8, 0),
(79, 'CodID-0079', 85, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 11:28:19', NULL, 8, 0),
(80, 'CodID-0080', 202, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 11:30:10', NULL, 8, 0),
(81, 'CodID-0081', 17, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 13:41:05', NULL, 8, 0),
(82, 'CodID-0082', 125, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 13:43:49', NULL, 8, 0),
(83, 'CodID-0083', 159, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 13:47:57', NULL, 8, 0),
(84, 'CodID-0084', 192, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 13:56:04', NULL, 8, 0),
(85, 'CodID-0085', 209, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 14:01:40', NULL, 8, 0),
(86, 'CodID-0086', 222, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 14:08:23', NULL, 8, 0),
(87, 'CodID-0087', 281, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 14:53:41', NULL, 8, 0),
(88, 'CodID-0088', 282, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 14:59:53', NULL, 8, 0),
(89, 'CodID-0089', 267, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 15:53:40', NULL, 8, 0),
(90, 'CodID-0090', 301, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 16:55:29', NULL, 8, 0),
(91, 'CodID-0091', 300, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 16:56:50', NULL, 8, 0),
(92, 'CodID-0092', 305, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 17:03:51', NULL, 8, 0),
(93, 'CodID-0093', 303, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-25 17:46:56', NULL, 8, 0),
(94, 'CodID-0094', 9, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-26 10:11:26', NULL, 8, 0),
(95, 'CodID-0095', 247, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-26 10:27:42', NULL, 8, 0),
(96, 'CodID-0096', 221, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-26 11:39:35', NULL, 8, 0),
(97, 'CodID-0097', 29, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-26 11:44:27', NULL, 8, 0),
(98, 'CodID-0098', 240, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-26 11:46:32', NULL, 8, 0),
(99, 'CodID-0099', 308, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-26 12:10:56', NULL, 8, 0),
(100, 'CodID-00100', 309, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-26 12:16:33', NULL, 8, 0),
(101, 'CodID-00101', 307, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-26 12:21:00', NULL, 8, 0),
(102, 'CodID-00102', 236, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-26 12:39:31', NULL, 8, 0),
(103, 'CodID-00103', 299, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-26 12:58:47', NULL, 8, 0),
(104, 'CodID-00104', 211, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-26 13:24:30', NULL, 8, 0),
(105, 'CodID-00105', 248, 4, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-26 14:28:28', NULL, 8, 0),
(106, 'CodID-00106', 199, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-28 12:48:48', NULL, 8, 0),
(107, 'CodID-00107', 171, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-28 13:58:13', NULL, 8, 0),
(108, 'CodID-00108', 296, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-28 14:04:45', NULL, 8, 0),
(109, 'CodID-00109', 284, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-28 14:07:41', NULL, 8, 0),
(110, 'CodID-00110', 290, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-28 15:13:58', NULL, 8, 0),
(111, 'CodID-00111', 317, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-28 15:57:39', NULL, 8, 0),
(112, 'CodID-00112', 234, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-28 16:23:25', NULL, 8, 0),
(113, 'CodID-00113', 166, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-28 17:08:55', NULL, 8, 0),
(114, 'CodID-00114', 314, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-28 17:18:47', NULL, 8, 0),
(115, 'CodID-00115', 321, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-29 12:20:20', NULL, 8, 0),
(116, 'CodID-00116', 195, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-29 15:06:01', NULL, 8, 0),
(117, 'CodID-00117', 328, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-29 15:09:32', NULL, 8, 0),
(118, 'CodID-00118', 329, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-29 15:16:04', NULL, 8, 0),
(119, 'CodID-00119', 304, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-30 09:38:44', NULL, 8, 0),
(120, 'CodID-00120', 242, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-30 12:11:56', NULL, 8, 0),
(121, 'CodID-00121', 338, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-30 13:28:43', NULL, 8, 0),
(122, 'CodID-00122', 319, 5, '0', 'Supervisión Código Identificador', '1', '0', '2022-03-30 13:41:40', NULL, 8, 0),
(123, 'CodID-00123', 275, 5, '0', 'Activo', '0', '0', '2022-03-30 17:17:55', NULL, 8, 0),
(124, 'CodID-00124', 272, 5, '0', 'Activo', '0', '0', '2022-03-30 17:27:05', NULL, 8, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrosolicitud`
--

CREATE TABLE `registrosolicitud` (
  `id_regSolicitud` int(11) NOT NULL,
  `folioRegSolicitud` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `valorVentaAlta` varchar(12) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_semana` int(11) NOT NULL,
  `inspecCalidad` varchar(300) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '''--''',
  `observCliente` varchar(300) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '''--''',
  `tecArmador` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `tecMontador1` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `tecMontador2` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `tecMontador3` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `tecMontador4` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `borrado` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `status` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'Activo',
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_borrado` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capB` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `registrosolicitud`
--

INSERT INTO `registrosolicitud` (`id_regSolicitud`, `folioRegSolicitud`, `id_proyecto`, `valorVentaAlta`, `id_semana`, `inspecCalidad`, `observCliente`, `tecArmador`, `tecMontador1`, `tecMontador2`, `tecMontador3`, `tecMontador4`, `borrado`, `status`, `fecha_creacion`, `fecha_borrado`, `id_capC`, `id_capB`) VALUES
(2, 'Solicitud_Alta-002', 24, '1,400.00', 2, 'Servicio Afinación', '.', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-10 12:50:13', NULL, 7, NULL),
(3, 'Solicitud_Alta-003', 30, '1,900.00', 2, 'Afinacion', '.', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-10 12:51:59', NULL, 7, NULL),
(4, 'Solicitud_Alta-004', 34, '1,400.00', 2, 'Afinación', '.', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-10 12:54:26', NULL, 7, NULL),
(5, 'Solicitud_Alta-005', 27, '1.00', 2, '$1,700.00 DE GRUA NADA MAS', '.', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-10 13:02:40', NULL, 7, NULL),
(6, 'Solicitud_Alta-006', 4, '13,000.00', 2, '* Sopletear las líneas de enfriamiento.\r\n* Revisar chicote de la sobre marcha\r\n', '.', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-10 13:15:36', NULL, 7, NULL),
(7, 'Solicitud_Alta-007', 40, '650.00', 2, 'Afinacion', '.', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-10 15:25:18', NULL, 7, NULL),
(8, 'Solicitud_Alta-008', 53, '1,400.00', 2, 'Afinación', '.', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-10 15:27:52', NULL, 7, NULL),
(9, 'Solicitud_Alta-009', 67, '1,400.00', 2, 'Afinación', '.', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-10 15:37:00', NULL, 7, NULL),
(10, 'Solicitud_Alta-0010', 133, '11,500.00', 2, '*Suspensión\r\n*Soportes\r\n*Falla de motor\r\n*Alineación\r\n\r\n\r\n*Dagoberto/Alex\r\n', '*Suspensión\r\n*Soportes\r\n*Falla de motor\r\n*Alineación', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-10 17:23:20', NULL, 7, NULL),
(11, 'Solicitud_Alta-0011', 132, '1.00', 2, 'Garantía\r\n\r\n', '*Suspensión\r\n*Fuga de motor\r\n\r\nRevisión de fugas y transmisión', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-10 17:27:46', NULL, 7, NULL),
(12, 'Solicitud_Alta-0012', 127, '25,000.00', 2, 'Andrés/Gilberto', '*Alineación\r\n*Suspensión', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-10 17:31:58', NULL, 7, NULL),
(13, 'Solicitud_Alta-0013', 130, '10,000.00', 2, 'Andrés/Héctor', '*Flecha\r\n*Fuga de  motor', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-10 17:36:16', NULL, 7, NULL),
(14, 'Solicitud_Alta-0014', 129, '15,000.00', 2, 'Juan/Chuy', '*Fuga aceite de motor\r\n*Códigos de motor\r\n*Flecha Yugo diferencial\r\n*Suspensión\r\n*Soportes\r\n\r\nExtra de $2,000.00', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-10 17:41:55', NULL, 7, NULL),
(15, 'Solicitud_Alta-0015', 128, '13,000.00', 2, '*No hay comunicación\r\nCarta\r\nAndres/ Alex', '*Suspensión y soportes\r\n*Revisar Instalación eléctrica\r\n*No hay comunicación', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-10 17:51:45', NULL, 7, NULL),
(16, 'Solicitud_Alta-0016', 135, '13,000.00', 2, '*Suspensión\r\n*Soportes\r\n*Falla Motor\r\n*Alineación', '*Suspensión\r\n*Soportes\r\n*Falla Motor\r\n*Alineación', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-11 10:47:47', NULL, 7, NULL),
(17, 'Solicitud_Alta-0017', 155, '1.00', 2, 'Zumba diferencial', 'Cambio de turbina', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-11 13:00:19', NULL, 7, NULL),
(19, 'Solicitud_Alta-0019', 156, '1.00', 2, 'Revisar Computadora no hay comunicación', 'Revisar Computadora no hay comunicación', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-11 13:07:39', NULL, 7, NULL),
(20, 'Solicitud_Alta-0020', 70, '3,000.00', 2, 'Orden cancelada', '*Solo paga grúa', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-11 13:22:02', NULL, 7, NULL),
(22, 'Solicitud_Alta-0021', 157, '1,200.00', 2, 'Afinación', 'Proximo servicio 20,000 kms o un año', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-11 17:31:16', NULL, 7, NULL),
(23, 'Solicitud_Alta-0022', 120, '1,600.00', 2, 'Afinación', 'Proximo servicio 20,000 kms o un año', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-11 17:43:32', NULL, 7, NULL),
(26, 'Solicitud_Alta-0025', 188, '1,400.00', 2, 'Afinación', '*Próximo servicio 20,000 kms o 1 año', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-12 10:17:51', NULL, 7, NULL),
(27, 'Solicitud_Alta-0026', 179, '1,400.00', 2, 'Afinación de transmisión', 'Próximo servicio 20,000 kms o 1 año', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-12 10:20:30', NULL, 7, NULL),
(28, 'Solicitud_Alta-0027', 176, '1.00', 2, 'Garantia', 'Cambio de control', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-12 10:23:11', NULL, 7, NULL),
(29, 'Solicitud_Alta-0028', 22, '20,000.00', 2, '*Check prendido\r\n*Suspension\r\n*Soportes', '*Check prendido\r\n*Suspension\r\n*Soportes', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-12 10:32:42', NULL, 7, NULL),
(30, 'Solicitud_Alta-0029', 20, '10,000.00', 2, 'fuga aceite motor ', 'fuga aceite motor ', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-12 10:56:21', NULL, 7, NULL),
(33, 'Solicitud_Alta-0032', 190, '650.00', 2, 'Afinacion', 'Prox servicio 20,000 kms o 1 año', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-12 12:44:06', NULL, 7, NULL),
(34, 'Solicitud_Alta-0033', 192, '45,000.00', 2, 'Prueba Larga', 'Reparación de transmisión\r\n', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-12 13:02:07', NULL, 7, NULL),
(37, 'Solicitud_Alta-0036', 196, '3,000.00', 2, 'Afinacion', 'Afinacion', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-12 13:27:38', NULL, 7, NULL),
(38, 'Solicitud_Alta-0037', 198, '28,000.00', 2, 'Alternador\r\nSuspensión y soportes', 'Alternador\r\nSuspensión y soportes', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-12 13:43:53', NULL, 7, NULL),
(40, 'Solicitud_Alta-0039', 126, '5,000.00', 2, '.', '.', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-12 13:46:10', NULL, 7, NULL),
(42, 'Solicitud_Alta-0041', 193, '10,000.00', 2, 'Se pierde la comunicación por falla en la computadora, Chuy reviso la unidad', '*Computadora\r\n* Instalación\r\n*Fuga de Aceite de motor\r\n*Códigos de motor\r\n', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-14 09:24:39', NULL, 7, NULL),
(43, 'Solicitud_Alta-0042', 194, '13,000.00', 3, '*Juego en Diferencial y soportes\r\n*Fuga aceite de  motor\r\n\r\n\r\nDago/Hector', '*Juego en Diferencial y soportes\r\n*Fuga aceite de  motor\r\n\r\n', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-14 10:52:22', NULL, 7, NULL),
(44, 'Solicitud_Alta-0043', 17, '14,000.00', 3, '*Suspensión y soportes\r\n*Falla de motor\r\n*Fuga aceite de motor', 'Reparación de tranmisión', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-14 10:58:08', NULL, 7, NULL),
(48, 'Solicitud_Alta-0047', 209, '1.00', 3, '*SUSPENSION \r\n*SOPORTES', '*SUSPENSION \r\n*SOPORTES', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-14 16:12:54', NULL, 7, NULL),
(49, 'Solicitud_Alta-0048', 159, '1.00', 3, 'Falla de motor\r\nP0743 Undocumented Code\r\nP1895 Engine Torque Signal Can Bus Malfuction', 'Falla, códigos de  motor', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-14 16:24:05', NULL, 7, NULL),
(50, 'Solicitud_Alta-0049', 134, '1.00', 2, 'Unidad entregada solo requiere alta estaba en ', 'Unidad entregada solo requiere alta estaba en ', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-14 16:55:33', NULL, 7, NULL),
(51, 'Solicitud_Alta-0050', 214, '1.00', 2, 'Cliente retira la unidad tras 8 meses de estar aqui en reparación', 'Cliente retira la unidad tras 8 meses de estar aqui en reparación', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-14 17:11:22', NULL, 7, NULL),
(52, 'Solicitud_Alta-0051', 207, '1.00', 3, 'Revisión de fuga', 'Revisión de fuga', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-15 09:06:44', NULL, 7, NULL),
(54, 'Solicitud_Alta-0053', 31, '9,000.00', 3, 'Andres Moy', 'Suspension \r\nSoportes', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-15 10:32:49', NULL, 7, NULL),
(55, 'Solicitud_Alta-0054', 224, '2,500.00', 3, '*Soportes', '*Revisión de transmisión\r\n*Cambio de retenes de flecha', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-15 12:04:37', NULL, 7, NULL),
(56, 'Solicitud_Alta-0055', 222, '1,600.00', 3, 'Afinación', 'Próximo servicio 20,000 kms o 1 año', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-15 12:06:52', NULL, 7, NULL),
(57, 'Solicitud_Alta-0056', 220, '1,400.00', 3, 'Afinacion', 'Afinacion', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-15 12:10:20', NULL, 7, NULL),
(58, 'Solicitud_Alta-0057', 225, '13,000.00', 3, 'suspensión y soportes, fuga aceite de motor y de dirección, alineación, códigos de motor.', 'suspensión y soportes, fuga aceite de motor y de dirección, alineación, códigos de motor.', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-15 13:02:40', NULL, 7, NULL),
(60, 'Solicitud_Alta-0059', 15, '20,000.00', 3, 'Suspensión y soportes\r\nAlineación\r\nFuga aceite de motor\r\nCódigos de motor', 'Reparación de transmisión', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-15 17:25:28', NULL, 7, NULL),
(61, 'Solicitud_Alta-0060', 36, '1.00', 3, 'Suspension \r\nSoportes\r\nPrueba larga', 'Suspension \r\nSoportes\r\n', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-16 09:15:12', NULL, 7, NULL),
(62, 'Solicitud_Alta-0061', 197, '20,000.00', 3, 'Soportes', 'Soportes', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-16 10:19:23', NULL, 7, NULL),
(64, 'Solicitud_Alta-0063', 41, '22,000.00', 3, '*Fuga Aceite de motor\r\n*Juego transfer', '*Fuga Aceite de motor\r\n*Juego transfer', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-16 11:50:38', NULL, 7, NULL),
(65, 'Solicitud_Alta-0064', 37, '5,000.00', 3, 'Reparacion de Cremallera', ' Reparacion de cremallera', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-16 13:15:45', NULL, 7, NULL),
(66, 'Solicitud_Alta-0065', 229, '1,600.00', 3, 'Afinación', 'Afinacion', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-16 13:54:36', NULL, 7, NULL),
(67, 'Solicitud_Alta-0066', 240, '13,000.00', 2, 'No cambia:\r\nNo sirve caja de fusibles, Falla de motor, Instalación eléctrica dañada, fuga agua y Falla en computadora', 'No sirve caja de fusibles, Falla de motor, Instalación eléctrica dañada, fuga agua y Falla en computadora', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-16 14:57:22', NULL, 7, NULL),
(68, 'Solicitud_Alta-0067', 239, '3,000.00', 2, 'Unidad se desmonta, cliente solo paga mano de obra', 'Unidad se desmonta, cliente solo paga mano de obra', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-16 14:58:19', NULL, 7, NULL),
(69, 'Solicitud_Alta-0068', 238, '1.00', 2, 'Instalacion Electrica', 'Extension de garantía por 2 meses', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-16 14:59:13', NULL, 7, NULL),
(70, 'Solicitud_Alta-0069', 236, '22,000.00', 2, 'Reparación de transmisión', 'Reparación de transmisión', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-16 15:52:03', NULL, 7, NULL),
(71, 'Solicitud_Alta-0070', 235, '15,000.00', 2, 'cliente ya no quiere la transmisión', 'cliente ya no quiere la transmisión', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-16 15:52:45', NULL, 7, NULL),
(73, 'Solicitud_Alta-0072', 233, '50,000.00', 2, 'Cliente pendiente de pago', 'Cliente pendiente de pago', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-16 15:53:50', NULL, 7, NULL),
(74, 'Solicitud_Alta-0073', 232, '15,000.00', 2, 'demanda', 'demanda', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-16 15:55:55', NULL, 7, NULL),
(75, 'Solicitud_Alta-0074', 230, '16,000.00', 2, 'Robada', 'robada', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-16 16:00:05', NULL, 7, NULL),
(76, 'Solicitud_Alta-0075', 244, '1.00', 2, 'se la llevo el cliente', 'se la llevo el cliente', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-16 16:03:27', NULL, 7, NULL),
(77, 'Solicitud_Alta-0076', 202, '1.00', 3, 'Suspensión y soportes', 'Suspensión y soportes', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-16 17:35:53', NULL, 7, NULL),
(78, 'Solicitud_Alta-0077', 48, '15,000.00', 3, 'Instalación Eléctrica\r\nRevisar hay falso  \r\nsuspensión \r\nsoportes\r\nFuga mucho aceite de motor', 'Instalación Eléctrica\r\nRevisar hay falso  \r\nsuspensión \r\nsoportes\r\nFuga mucho aceite de motor', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-16 17:46:14', NULL, 7, NULL),
(79, 'Solicitud_Alta-0078', 47, '20,000.00', 3, '*No sirve velocimetro\r\n*Juego en transfer\r\n*Fuga aceite de motor\r\n*Códigos de motor\r\n*Chicote desgastado', '*No sirve velocimetro\r\n*Juego en transfer\r\n*Fuga aceite de motor\r\n*Códigos de motor\r\n*Chicote desgastado', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-17 09:14:41', NULL, 7, NULL),
(83, 'Solicitud_Alta-0082', 185, '15,000.00', 3, 'Suspensión\r\nSoportes \r\nAlienación\r\nInstalación eléctrica\r\nChicote', 'Suspensión\r\nSoportes \r\nAlienación\r\nInstalación eléctrica\r\nChicote', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-17 15:42:52', NULL, 7, NULL),
(84, 'Solicitud_Alta-0083', 180, '13,000.00', 3, '*Suspensión\r\n* Soportes\r\n* Instalación\r\n*Chicote', '*Suspensión\r\n* Soportes\r\n* Instalación\r\n*Chicote', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-17 15:51:41', NULL, 7, NULL),
(85, 'Solicitud_Alta-0084', 25, '14,000.00', 3, 'Suspensión\r\nSoportes\r\nFuga aceite motor\r\nChupete de aire\r\nNo sirve chicote velocímetro\r\nDesgaste de chicote', 'Suspensión\r\nSoportes\r\nFuga aceite motor\r\nChupete de aire\r\nNo sirve chicote velocímetro\r\nDesgaste de chicote\r\n\r\n\r\nSe reparan los conectores del sensor de entrada y salida ', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-17 15:57:21', NULL, 7, NULL),
(86, 'Solicitud_Alta-0085', 42, '15,000.00', 3, '*Soportes\r\n*Suspensión\r\n*Fuga de aceite', '*Soportes\r\n*Suspensión\r\n*Fuga de aceite', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-17 17:39:37', NULL, 7, NULL),
(87, 'Solicitud_Alta-0086', 250, '2,200.00', 3, 'Corrección de fugas\r\nCambio de\r\nRetenes y rectificación de flechas', 'Corrección de fugas\r\nCambio de\r\nRetenes y rectificación de flechas', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-18 11:20:08', NULL, 7, NULL),
(88, 'Solicitud_Alta-0087', 11, '13,000.00', 3, 'Suspensión\r\nSopoetes\r\nAlineación\r\nFuga aceite de motor\r\nCódigo de motor\r\nRevisar manguera de dirección ', 'Suspensión\r\nSopoetes\r\nAlineación\r\nFuga aceite de motor\r\nCódigo de motor\r\nRevisar manguera de dirección ', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-18 11:23:41', NULL, 7, NULL),
(90, 'Solicitud_Alta-0089', 255, '1,400.00', 3, 'Afinación', 'Afinación', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-18 13:07:29', NULL, 7, NULL),
(91, 'Solicitud_Alta-0090', 254, '1,800.00', 3, 'afinacion', 'afinacion', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-18 13:20:33', NULL, 7, NULL),
(92, 'Solicitud_Alta-0091', 257, '1,400.00', 3, 'Afinación', 'Afinación', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-18 13:22:42', NULL, 7, NULL),
(93, 'Solicitud_Alta-0092', 14, '10,500.00', 3, '*Desgaste de chicote de palanca\r\n*Chicote de sobre marcha no funciona\r\n*Fuga aceite de motor\r\n*Debe traer motor 3.0 y trae un 4.0 por eso la unidad se siente burra.', '*Desgaste de chicote de palanca\r\n*Chicote de sobre marcha no funciona\r\n*Fuga aceite de motor\r\n*Debe traer motor 3.0 y trae un 4.0 por eso la unidad se siente burra.', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-18 17:42:08', NULL, 7, NULL),
(94, 'Solicitud_Alta-0093', 125, '18,000.00', 3, '*Códigos de motor\r\n*Fuga de motor\r\n*Diferencial desgastado\r\n*Chicote de palanca con desgaste', '*Códigos de motor\r\n*Fuga de motor\r\n*Diferencial desgastado\r\n*Chicote de palanca con desgaste', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-18 17:51:55', NULL, 7, NULL),
(96, 'Solicitud_Alta-0095', 19, '1.00', 3, '*Suspension\r\n*Soportes\r\n*Fuga aceite de motor\r\n*Códigos de motor\r\n*Chicote desgastado', '*Suspension\r\n*Soportes\r\n*Fuga aceite de motor\r\n*Códigos de motor\r\n*Chicote desgastado', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-19 09:03:56', NULL, 7, NULL),
(97, 'Solicitud_Alta-0096', 246, '1.00', 3, 'Orden  cancelado', 'Orden cancelada', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-19 09:40:56', NULL, 7, NULL),
(98, 'Solicitud_Alta-0097', 10, '1.00', 3, 'Suspension\r\nSoportes\r\nAlineacion\r\nSoldar mofle', 'Suspension\r\nSoportes\r\nAlineacion\r\nSoldar mofle', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-19 10:05:18', NULL, 7, NULL),
(100, 'Solicitud_Alta-0099', 258, '1,400.00', 3, 'Afinacion', 'Afinacion', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-19 10:10:46', NULL, 7, NULL),
(101, 'Solicitud_Alta-00100', 259, '1,600.00', 3, 'afinacion', 'afinacion', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-19 11:17:43', NULL, 7, NULL),
(102, 'Solicitud_Alta-00101', 35, '15,000.00', 3, 'Suspensión\r\nSoportes\r\nFuga de aceite', 'Suspensión\r\nSoportes\r\nFuga de aceite', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-23 09:03:34', NULL, 7, NULL),
(103, 'Solicitud_Alta-00102', 88, '6,000.00', 3, '-', '-', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-23 09:06:21', NULL, 7, NULL),
(104, 'Solicitud_Alta-00103', 263, '1,400.00', 3, 'Afinacion', 'Afinacion', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-23 09:14:12', NULL, 7, NULL),
(107, 'Solicitud_Alta-00106', 182, '13,000.00', 4, 'Alineacion\r\nSoportes\r\nSuspension\r\nFuga aceite de motor\r\nChicote palanca desgaste\r\nChicote velocimetro\r\nConector arnes', 'Alineacion\r\nSoportes\r\nSuspensión\r\nFuga aceite de motor\r\nChicote palanca desgaste\r\nChicote velocímetro\r\nConector arnes', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-23 10:31:35', NULL, 7, NULL),
(108, 'Solicitud_Alta-00107', 149, '6,000.00', 4, 'Fuga aceite de motor\r\nChicote desgaste\r\nCodigos de motor', 'Fuga aceite de motor\r\nChicote desgaste\r\nCodigos de motor', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-23 10:33:17', NULL, 7, NULL),
(109, 'Solicitud_Alta-00108', 118, '1.00', 4, 'Suspension\r\nSoportes\r\nFuga aceite de motor\r\nCodigos de motor\r\nChicote de planaca', 'Suspension\r\nSoportes\r\nFuga aceite de motor\r\nCodigos de motor\r\nChicote de planaca', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-23 10:34:57', NULL, 7, NULL),
(110, 'Solicitud_Alta-00109', 260, '1.00', 3, 'Unidad ya estaba pagada eran $20,000.00', 'Unidad ya estaba pagada eran $20,000.00', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-23 11:23:10', NULL, 7, NULL),
(112, 'Solicitud_Alta-00111', 268, '1.00', 4, 'Suspensión\r\nSoportes ', 'Suspensión\r\nSopoetes ', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-23 13:47:19', NULL, 7, NULL),
(113, 'Solicitud_Alta-00112', 279, '15,000.00', 4, 'Suspensión\r\nSoportes\r\nChicote desgastado\r\nCódigos y fuga de motor ', 'Suspensión\r\nSoportes\r\nChicote desgastado\r\nCódigos y fuga de motor ', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-23 13:49:59', NULL, 7, NULL),
(114, 'Solicitud_Alta-00113', 183, '13,000.00', 4, 'Suspensión\r\nSoportes\r\nCódigos y fuga de motor', 'Suspensión\r\nSoportes\r\nCódigos y fuga de motor', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-23 13:54:01', NULL, 7, NULL),
(115, 'Solicitud_Alta-00114', 281, '13,000.00', 4, 'Suspensión\r\nSoportes\r\nCódigos y fuga de motor', 'Suspensión\r\nSoportes\r\nCódigos y fuga de motor', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-23 13:55:44', NULL, 7, NULL),
(116, 'Solicitud_Alta-00115', 282, '1,300.00', 4, 'Soportes ', 'Soportes', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-23 13:58:50', NULL, 7, NULL),
(117, 'Solicitud_Alta-00116', 280, '1,600.00', 4, 'Afinacion', 'Afinacion', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-23 15:20:03', NULL, 7, NULL),
(118, 'Solicitud_Alta-00117', 153, '30,000.00', 4, '*P0102 SENSOR MAF\r\n*P0113 SENSOR DE TEMPERATURA\r\n*P1603 SESNSOR DE ADMISION \r\n*P1605 SENSOR DE AIRE ACONDICIONADO', '*P0102 SENSOR MAF\r\n*P0113 SENSOR DE TEMPERATURA\r\n*P1603 SESNSOR DE ADMISION \r\n*P1605 SENSOR DE AIRE ACONDICIONADO', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-23 17:15:32', NULL, 7, NULL),
(119, 'Solicitud_Alta-00118', 267, '5,000.00', 4, 'Suspensión\r\nSoportes\r\nChicote desgastado', 'Suspensión\r\nSoportes\r\nChicote desgastado', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-24 11:07:48', NULL, 7, NULL),
(120, 'Solicitud_Alta-00119', 287, '1,000.00', 4, 'Afinación ', 'Afinación ', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-24 11:08:35', NULL, 7, NULL),
(121, 'Solicitud_Alta-00120', 285, '1,100.00', 4, 'Eran 1,600 menos 500 de reparación ', 'Eran 1,600 menos 500 de reparación ', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-24 11:10:27', NULL, 7, NULL),
(122, 'Solicitud_Alta-00121', 9, '14,000.00', 4, 'Códigos de motor\r\nSuspensión\r\nSoportes\r\nFuga aceite motor\r\nFuga Aceite de dirección\r\nChicote desgastado', 'Códigos de motor\r\nSuspensión\r\nSoportes\r\nFuga aceite motor\r\nFuga Aceite de dirección\r\nChicote desgastado', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-24 13:36:24', NULL, 7, NULL),
(124, 'Solicitud_Alta-00123', 85, '15,000.00', 4, '*No sirve la computadora\r\n*Instalación con desgaste\r\n*Endendido Falla\r\n*Chicote desgatado\r\n*Motor codigos y Falla\r\n*Fuga aceite motor\r\n*Suspensión\r\n*Soportes\r\n\r\n', '*No sirve la computadora\r\n*Instalación con desgaste\r\n*Endendido Falla\r\n*Chicote desgatado\r\n*Motor codigos y Falla\r\n*Fuga aceite motor\r\n*Suspensión\r\n*Soportes', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-24 13:58:55', NULL, 7, NULL),
(125, 'Solicitud_Alta-00124', 221, '35,000.00', 4, 'Soporte desgastado', 'Soporte desgastado', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-24 17:11:49', NULL, 7, NULL),
(127, 'Solicitud_Alta-00126', 3, '14,250.00', 4, '5% autorizado por sebastian\r\n\r\nsuspension\r\nsoportes', '\r\nsuspension\r\nsoportes', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-24 17:56:05', NULL, 7, NULL),
(128, 'Solicitud_Alta-00127', 299, '1.00', 4, '*Código Motor\r\n*Suspensión, soporte y flecha\r\n*Fuga aceite de motor', '*Código Motor\r\n*Suspensión, soporte y flecha\r\n*Fuga aceite de motor', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-25 09:55:13', NULL, 7, NULL),
(129, 'Solicitud_Alta-00128', 29, '11,000.00', 4, 'Suspensión\r\nSoportes\r\nFuga de motor\r\nCódigo de motor\r\nChicote desgastado ', 'Suspensión\r\nSoportes\r\nFuga de motor\r\nCódigo de motor\r\nChicote desgastado', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-25 12:23:49', NULL, 7, NULL),
(131, 'Solicitud_Alta-00130', 300, '1,400.00', 4, 'Afinacion', 'Afinacion', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-25 14:33:34', NULL, 7, NULL),
(132, 'Solicitud_Alta-00131', 301, '1,400.00', 4, 'Afinacion', 'Afinacion', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-25 14:35:46', NULL, 7, NULL),
(133, 'Solicitud_Alta-00132', 171, '10,000.00', 4, '* Suspensión\r\n*Soportes\r\n*Chicote desgastado\r\n*Fuga aceite Motor\r\n*Codigos de motor', '* Suspensión\r\n*Soportes\r\n*Chicote desgastado\r\n*Fuga aceite Motor\r\n*Codigos de motor', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-25 14:38:49', NULL, 7, NULL),
(134, 'Solicitud_Alta-00133', 284, '1.00', 4, 'orden cancelada', 'Orden cancelada', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-25 14:41:07', NULL, 7, NULL),
(135, 'Solicitud_Alta-00134', 303, '1,500.00', 4, 'Soportes\r\nSuspensión\r\nCódigos de motor\r\nFuga aceite de motor\r\nChicote de velocímetro no sirve\r\nChicote de Palanca\r\n\r\n', 'Soportes\r\nSuspensión\r\nCódigos de motor\r\nFuga aceite de motor\r\nChicote de velocímetro no sirve\r\nChicote de Palanca\r\n', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-25 16:01:07', NULL, 7, NULL),
(136, 'Solicitud_Alta-00135', 290, '10,000.00', 4, 'Fuga aceite de motor\r\nJuego en diferencial\r\nSoportes\r\nChicote desgastado', 'Fuga aceite de motor\r\nJuego en diferencial\r\nSoportes\r\nChicote desgastado', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-25 16:34:31', NULL, 7, NULL),
(137, 'Solicitud_Alta-00136', 305, '1,400.00', 4, 'Afinacion', 'Afinacion', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-25 16:52:10', NULL, 7, NULL),
(138, 'Solicitud_Alta-00137', 166, '15,000.00', 4, '*Suspensión y Soportes\r\n*Códigos de motor\r\n* Instalación eléctrica con desgaste\r\n* Chicote desgastado\r\n*Fuga aceite de motor\r\n* Carro huele a humedad, probable inhundación\r\n', '*Suspensión y Soportes\r\n*Códigos de motor\r\n* Instalación eléctrica con desgaste\r\n* Chicote desgastado\r\n*Fuga aceite de motor\r\n* Carro huele a humedad, probable inhundación', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-25 16:55:57', NULL, 7, NULL),
(139, 'Solicitud_Alta-00138', 247, '15,000.00', 4, 'Fuga aceite de motor\r\nCódigos de motor y falla\r\nChicote desgastado\r\nSuspensión, soportes\r\nJuego en el diferencial\r\nAlineación', 'Fuga aceite de motor\r\nCódigos de motor y falla\r\nChicote desgastado\r\nSuspensión, soportes\r\nJuego en el diferencial\r\nAlineación', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-25 17:30:19', NULL, 7, NULL),
(140, 'Solicitud_Alta-00139', 296, '1.00', 4, 'Orden cancelada', 'Orden Cancelada', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-26 08:58:48', NULL, 7, NULL),
(141, 'Solicitud_Alta-00140', 307, '650.00', 4, 'Afinación', 'Afinación', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-26 10:06:14', NULL, 7, NULL),
(142, 'Solicitud_Alta-00141', 308, '1,400.00', 4, 'Afinación', 'Afinación', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-26 10:10:45', NULL, 7, NULL),
(143, 'Solicitud_Alta-00142', 309, '1,400.00', 4, 'Afinación', 'Afinación', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-26 10:13:27', NULL, 7, NULL),
(144, 'Solicitud_Alta-00143', 211, '1.00', 4, 'Suspension\r\nSoportes\r\nInstalacion electrica\r\nCodigos de motor\r\nFuga de aceite', 'Suspension\r\nSoportes\r\nInstalacion electrica\r\nCodigos de motor\r\nFuga de aceite', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-26 11:50:05', NULL, 7, NULL),
(145, 'Solicitud_Alta-00144', 248, '1.00', 4, 'Corrección de fugas\r\n', 'Corrección de fugas ', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-26 14:15:34', NULL, 7, NULL),
(146, 'Solicitud_Alta-00145', 195, '1.00', 5, 'Revisar Flechas\r\nRevisar Soportes y suspensión\r\nAlineación', 'Revisar Flechas\r\nRevisar Soportes y suspensión\r\nAlineación', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-28 11:09:26', NULL, 7, NULL),
(149, 'Solicitud_Alta-00148', 275, '1.00', 5, 'No sirve cruceta\r\nRevisar flecha diferencial\r\nFuga aceite de motor', 'No sirve cruceta\r\nRevisar flecha diferencial\r\nFuga aceite de motor', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-28 11:37:33', NULL, 7, NULL),
(150, 'Solicitud_Alta-00149', 199, '20,000.00', 5, 'Soportes', 'Soportes', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-28 12:16:51', NULL, 7, NULL),
(151, 'Solicitud_Alta-00150', 317, '1,400.00', 5, 'Afinación', 'Afinación', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-28 13:10:30', NULL, 7, NULL),
(152, 'Solicitud_Alta-00151', 234, '32,040.00', 2, 'Suleta', 'Semanas pasadas', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-28 13:38:43', NULL, 7, NULL),
(153, 'Solicitud_Alta-00152', 314, '1,400.00', 5, 'Afinación', 'Afinación', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-28 13:42:53', NULL, 7, NULL),
(154, 'Solicitud_Alta-00153', 304, '5,000.00', 5, 'Suspensión\r\nSoportes\r\nFuga aceite de motor ', 'Suspensión\r\nSoportes\r\nFuga aceite de motor ', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-29 10:40:45', NULL, 7, NULL),
(155, 'Solicitud_Alta-00154', 242, '12,000.00', 5, 'Suspensión y soportes\r\nFalla y códigos de. Motor\r\nChicote palanca desgastado\r\nFuga de aceite de motor ', 'Suspensión y soportes\r\nFalla y códigos de. Motor\r\nChicote palanca desgastado\r\nFuga de aceite de motor ', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-29 10:44:36', NULL, 7, NULL),
(156, 'Solicitud_Alta-00155', 321, '850.00', 5, '. ', '.\r\n', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-29 11:40:55', NULL, 7, NULL),
(157, 'Solicitud_Alta-00156', 328, '650.00', 5, '-', '1 Mes de garantia por fugas\r\nPróximo Servicio de Afinación 158, 587km', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-29 12:39:40', NULL, 3, NULL),
(158, 'Solicitud_Alta-00157', 329, '1,600.00', 5, '-', '1 Mes de Garantia por fugas\r\nPróximo Servicio de Afinación 40, 778km', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-29 13:07:05', NULL, 3, NULL),
(159, 'Solicitud_Alta-00158', 319, '1.00', 5, 'Suspensión y soportes', 'Suspensión\r\nSoportes', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-29 13:26:26', NULL, 3, NULL),
(160, 'Solicitud_Alta-00159', 116, '60,000.00', 5, 'Codigos de motor\r\nAbs\r\nFuga de aceite de motor\r\nDesgaste en instalación eléctrica y caja fusibles\r\nRevisar Alternador', 'Codigos de motor\r\nAbs\r\nFuga de aceite de motor\r\nDesgaste en instalación eléctrica y caja fusibles\r\nRevisar Alternador', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-29 13:36:44', NULL, 3, NULL),
(161, 'Solicitud_Alta-00160', 272, '12,000.00', 5, 'Chicote sobre marcha y chicote de palanca desgaste\r\nfuga de aceite de motor, alineación y juego de diferencial. ', 'Chicote sobre marcha y chicote de palanca desgaste\r\nfuga de aceite de motor, alineación y juego de diferencial. ', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-29 16:25:51', NULL, 3, NULL),
(162, 'Solicitud_Alta-00161', 315, '6,650.00', 5, 'Suspensión y soportes, alineación, fuga de aceite de motor y códigos de motor. ', 'Suspensión y soportes, alineación, fuga de aceite de motor y códigos de motor. ', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-29 16:41:06', NULL, 3, NULL),
(163, 'Solicitud_Alta-00162', 297, '1.00', 5, 'Soportes\r\nCódigo de motor\r\nAlineacion', 'Soportes\r\nCódigo de motor\r\nAlineacion', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-30 09:41:44', NULL, 7, NULL),
(164, 'Solicitud_Alta-00163', 208, '1.00', 5, 'Instalacion desgaste\r\nTransfer no sirve\r\nAlineacion\r\nCodigos de motor', 'Instalacion desgaste\r\nTransfer no sirve\r\nAlineacion\r\nCodigos de motor', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-30 09:42:44', NULL, 7, NULL),
(167, 'Solicitud_Alta-00166', 338, '1,400.00', 5, '1 Mes de Garantia por fugas\r\nPróximo Servicio de Afinación 78, 721km', '1 Mes de Garantia por fugas\r\nPróximo Servicio de Afinación 78, 721km', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-30 13:12:39', NULL, 3, NULL),
(166, 'Solicitud_Alta-00165', 323, '1.00', 5, 'Orden cancelada', 'orden cancelada', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-30 10:39:18', NULL, 3, NULL),
(168, 'Solicitud_Alta-00167', 339, '1.00', 5, 'Suspensión\r\nSoportes\r\nFuga aceite de motor', 'Suspensión\r\nSoportes\r\nFuga aceite de motor', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-30 13:26:25', NULL, 7, NULL),
(170, 'Solicitud_Alta-00169', 231, '15,000.00', 5, 'Chicote desgastado\r\nFuga aceite de motor\r\nAlineación\r\nDiferencial desgastado\r\nUnidad esta Acelerada', '$1,500 radiador\r\nChicote desgastado\r\nFuga aceite de motor\r\nAlineación\r\nDiferencial desgastado\r\nUnidad esta Acelerada', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-30 15:03:18', NULL, 7, NULL),
(171, 'Solicitud_Alta-00170', 333, '1.00', 5, 'orden cancelada', 'orden cancelada', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-30 15:15:31', NULL, 3, NULL),
(172, 'Solicitud_Alta-00171', 334, '1.00', 5, 'orden cancelada', 'orden cancelada', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-30 15:17:02', NULL, 3, NULL),
(173, 'Solicitud_Alta-00172', 49, '13,000.00', 5, 'Fuga aceite dirección\r\nSoportes\r\nSuspensión y Alineación\r\nFuga aceite de motor\r\nCódigos de motor\r\nChicote desgastado ', 'Fuga aceite dirección\r\nSoportes\r\nSuspensión y Alineación\r\nFuga aceite de motor\r\nCódigos de motor\r\nChicote desgastado ', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-30 16:41:38', NULL, 7, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrosolicitudbitacora`
--

CREATE TABLE `registrosolicitudbitacora` (
  `id_regSolicitud` int(11) NOT NULL,
  `folioRegSolicitud` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `valorVentaAlta` varchar(12) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_semana` int(11) NOT NULL,
  `inspecCalidad` varchar(300) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '''--''',
  `observCliente` varchar(300) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '''--''',
  `tecArmador` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `tecMontador1` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `tecMontador2` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `tecMontador3` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `tecMontador4` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `borrado` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `status` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'Activo',
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_borrado` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT 0,
  `id_capB` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `registrosolicitudbitacora`
--

INSERT INTO `registrosolicitudbitacora` (`id_regSolicitud`, `folioRegSolicitud`, `id_proyecto`, `valorVentaAlta`, `id_semana`, `inspecCalidad`, `observCliente`, `tecArmador`, `tecMontador1`, `tecMontador2`, `tecMontador3`, `tecMontador4`, `borrado`, `status`, `fecha_creacion`, `fecha_borrado`, `id_capC`, `id_capB`) VALUES
(1, '0', 0, '0', 0, '', '', '0', '0', '0', '0', '0', '0', '0', '2022-03-08 09:00:00', '2022-03-08 09:00:00', NULL, 0),
(2, 'Solicitud_Alta-002', 24, '1,400.00', 2, 'Servicio Afinación', '.', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-10 12:50:13', NULL, 7, NULL),
(3, 'Solicitud_Alta-003', 30, '1,900.00', 2, 'Afinacion', '.', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-10 12:51:59', NULL, 7, NULL),
(4, 'Solicitud_Alta-004', 34, '1,400.00', 2, 'Afinación', '.', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-10 12:54:26', NULL, 7, NULL),
(5, 'Solicitud_Alta-005', 27, '1.00', 2, '$1,700.00 DE GRUA NADA MAS', '.', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-10 13:02:40', NULL, 7, NULL),
(6, 'Solicitud_Alta-006', 4, '13,000.00', 2, '* Sopletear las líneas de enfriamiento.\r\n* Revisar chicote de la sobre marcha\r\n', '.', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-10 13:15:36', NULL, 7, NULL),
(7, 'Solicitud_Alta-007', 40, '650.00', 2, 'Afinacion', '.', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-10 15:25:18', NULL, 7, NULL),
(8, 'Solicitud_Alta-008', 53, '1,400.00', 2, 'Afinación', '.', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-10 15:27:52', NULL, 7, NULL),
(9, 'Solicitud_Alta-009', 67, '1,400.00', 2, 'Afinación', '.', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-10 15:37:00', NULL, 7, NULL),
(10, 'Solicitud_Alta-0010', 133, '11,500.00', 2, '*Suspensión\r\n*Soportes\r\n*Falla de motor\r\n*Alineación\r\n\r\n\r\n*Dagoberto/Alex\r\n', '*Suspensión\r\n*Soportes\r\n*Falla de motor\r\n*Alineación', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-10 17:23:20', NULL, 7, NULL),
(11, 'Solicitud_Alta-0011', 132, '1.00', 2, 'Garantía\r\n\r\n', '*Suspensión\r\n*Fuga de motor\r\n\r\nRevisión de fugas y transmisión', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-10 17:27:46', NULL, 7, NULL),
(12, 'Solicitud_Alta-0012', 127, '25,000.00', 2, 'Andrés/Gilberto', '*Alineación\r\n*Suspensión', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-10 17:31:58', NULL, 7, NULL),
(13, 'Solicitud_Alta-0013', 130, '10,000.00', 2, 'Andrés/Héctor', '*Flecha\r\n*Fuga de  motor', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-10 17:36:16', NULL, 7, NULL),
(14, 'Solicitud_Alta-0014', 129, '15,000.00', 2, 'Juan/Chuy', '*Fuga aceite de motor\r\n*Códigos de motor\r\n*Flecha Yugo diferencial\r\n*Suspensión\r\n*Soportes\r\n\r\nExtra de $2,000.00', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-10 17:41:55', NULL, 7, NULL),
(15, 'Solicitud_Alta-0015', 128, '13,000.00', 2, '*No hay comunicación\r\nCarta\r\nAndres/ Alex', '*Suspensión y soportes\r\n*Revisar Instalación eléctrica\r\n*No hay comunicación', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-10 17:51:45', NULL, 7, NULL),
(16, 'Solicitud_Alta-0016', 135, '13,000.00', 2, '*Suspensión\r\n*Soportes\r\n*Falla Motor\r\n*Alineación', '*Suspensión\r\n*Soportes\r\n*Falla Motor\r\n*Alineación', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-11 10:47:47', NULL, 7, NULL),
(17, 'Solicitud_Alta-0017', 155, '1.00', 2, 'Zumba diferencial', 'Cambio de turbina', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-11 13:00:19', NULL, 7, NULL),
(18, 'Solicitud_Alta-0018', 151, '25,000.00', 2, 'Andrés/Gilberto', 'Cortesía servicio al año o 20,000 kms ', '0', '0', '0', '0', '0', '1', 'Borrado de 2.4.2 Solicitud Alta Proyecto', '2022-03-11 13:03:28', '2022-03-12 11:45:13', 7, 2),
(19, 'Solicitud_Alta-0019', 156, '1.00', 2, 'Revisar Computadora no hay comunicación', 'Revisar Computadora no hay comunicación', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-11 13:07:39', NULL, 7, NULL),
(20, 'Solicitud_Alta-0020', 70, '3,000.00', 2, 'Orden cancelada', '*Solo paga grúa', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-11 13:22:02', NULL, 7, NULL),
(21, 'Solicitud_Alta-0021', 157, '1,200.00', 2, 'Afinación', 'Proximo servicio 20,000 kms o un año', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-11 17:31:16', NULL, 7, NULL),
(22, 'Solicitud_Alta-0022', 120, '1,600.00', 2, 'Afinación', 'Proximo servicio 20,000 kms o un año', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-11 17:43:32', NULL, 7, NULL),
(23, 'Solicitud_Alta-0023', 159, '1.00', 2, 'Ojo tiene carta', 'Falla de motor\r\nRevisar computadora', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-12 08:38:44', NULL, 7, NULL),
(24, 'Solicitud_Alta-0024', 20, '1.00', 2, 'TLAQUE', 'Revisión de transmisión', '0', '0', '0', '0', '0', '1', 'Borrado de 2.4.2 Solicitud Alta Proyecto', '2022-03-12 08:41:24', '2022-03-12 11:45:06', 7, 2),
(25, 'Solicitud_Alta-0025', 188, '1,400.00', 2, 'Afinación', '*Próximo servicio 20,000 kms o 1 año', '0', '0', '0', '0', '0', '1', 'Borrado de 2.4.2 Solicitud Alta Proyecto', '2022-03-12 10:17:51', '2022-03-12 10:45:18', 7, 2),
(26, 'Solicitud_Alta-0026', 179, '1,400.00', 2, 'Afinación de transmisión', 'Próximo servicio 20,000 kms o 1 año', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-12 10:20:30', NULL, 7, NULL),
(27, 'Solicitud_Alta-0027', 176, '1.00', 2, 'Garantia', 'Cambio de control', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-12 10:23:11', NULL, 7, NULL),
(28, 'Solicitud_Alta-0028', 22, '20,000.00', 2, '*Check prendido\r\n*Suspension\r\n*Soportes', '*Check prendido\r\n*Suspension\r\n*Soportes', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-12 10:32:42', NULL, 7, NULL),
(29, 'Solicitud_Alta-0029', 20, '10,000.00', 2, 'fuga aceite motor ', 'fuga aceite motor ', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-12 10:56:21', NULL, 7, NULL),
(30, 'Solicitud_Alta-0030', 131, '1.00', 2, 'Garantia', 'Garantía', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-12 11:19:27', NULL, 7, NULL),
(31, 'Solicitud_Alta-0031', 1, '1.00', 2, 'dfgdg', 'sfsdf', '0', '0', '0', '0', '0', '1', 'Borrado de 2.4.2 Solicitud Alta Proyecto', '2022-03-12 11:36:29', '2022-03-28 15:53:16', 7, 2),
(32, 'Solicitud_Alta-0032', 190, '650.00', 2, 'Afinacion', 'Prox servicio 20,000 kms o 1 año', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-12 12:44:06', NULL, 7, NULL),
(33, 'Solicitud_Alta-0033', 192, '45,000.00', 2, 'Prueba Larga', 'Reparación de transmisión\r\n', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-12 13:02:07', NULL, 7, NULL),
(34, 'Solicitud_Alta-0034', 193, '10,000.00', 2, '*Computadora\r\n*Instalacion Electrica\r\n*Alineación\r\n*Fuga aceite de motor\r\n*Códigos de motor', '*Computadora\r\n*Instalación Eléctrica\r\n*Alineación\r\n*Fuga aceite de motor\r\n*Códigos de motor', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-12 13:06:00', NULL, 7, NULL),
(35, 'Solicitud_Alta-0035', 194, '13,000.00', 2, '*Diferencial Juego\r\n*Soportes\r\n*Fuga aceite de motor', '*Diferencial Juego\r\n*Soportes\r\n*Fuga aceite de motor', '0', '0', '0', '0', '0', '1', 'Borrado de 2.4.2 Solicitud Alta Proyecto', '2022-03-12 13:09:10', '2022-03-14 09:23:07', 7, 7),
(36, 'Solicitud_Alta-0036', 196, '3,000.00', 2, 'Afinacion', 'Afinacion', '0', '0', '0', '0', '0', '1', 'Borrado de 2.4.2 Solicitud Alta Proyecto', '2022-03-12 13:27:38', '2022-03-12 13:42:43', 7, 7),
(37, 'Solicitud_Alta-0037', 198, '28,000.00', 2, 'Alternador\r\nSuspensión y soportes', 'Alternador\r\nSuspensión y soportes', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-12 13:43:53', NULL, 7, NULL),
(38, 'Solicitud_Alta-0038', 197, '20,000.00', 2, '.', '.', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-12 13:45:00', NULL, 7, NULL),
(39, 'Solicitud_Alta-0039', 126, '5,000.00', 2, '.', '.', '0', '0', '0', '0', '0', '1', 'Borrado de 2.4.2 Solicitud Alta Proyecto', '2022-03-12 13:46:10', '2022-03-14 16:27:41', 7, 6),
(40, 'Solicitud_Alta-0040', 199, '20,000.00', 2, '.', '.', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-12 13:55:39', NULL, 7, NULL),
(41, 'Solicitud_Alta-0041', 193, '10,000.00', 2, 'Se pierde la comunicación por falla en la computadora, Chuy reviso la unidad', '*Computadora\r\n* Instalación\r\n*Fuga de Aceite de motor\r\n*Códigos de motor\r\n', '0', '0', '0', '0', '0', '1', 'Borrado de 2.4.2 Solicitud Alta Proyecto', '2022-03-14 09:24:39', '2022-03-14 16:28:08', 7, 6),
(42, 'Solicitud_Alta-0042', 194, '13,000.00', 3, '*Juego en Diferencial y soportes\r\n*Fuga aceite de  motor\r\n\r\n\r\nDago/Hector', '*Juego en Diferencial y soportes\r\n*Fuga aceite de  motor\r\n\r\n', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-14 10:52:22', NULL, 7, NULL),
(43, 'Solicitud_Alta-0043', 17, '14,000.00', 3, '*Suspensión y soportes\r\n*Falla de motor\r\n*Fuga aceite de motor', 'Reparación de tranmisión', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-14 10:58:08', NULL, 7, NULL),
(44, 'Solicitud_Alta-0044', 31, '9,000.00', 3, '*Suspensión y Soportes\r\n*Falla de motor\r\n*Alineación', '*Suspensión y Soportes\r\n*Falla de motor\r\n*Alineación', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-14 11:02:07', NULL, 7, NULL),
(45, 'Solicitud_Alta-0045', 167, '20,000.00', 3, 'Unidad ya esta pagada, ajuste a selenoide.', 'Unidad se brinda ajuste a selenoide.', '0', '0', '0', '0', '0', '1', 'Borrado de 2.4.2 Solicitud Alta Proyecto', '2022-03-14 13:11:59', '2022-03-14 14:04:27', 7, 7),
(46, 'Solicitud_Alta-0046', 167, '20,000.00', 3, 'Soportes\r\nSuspension\r\nCilindro de llave\r\nFlechas\r\ncodigos de motor\r\nMUF no sirve', 'Soportes\r\nSuspension\r\nCilindro de llave\r\nFlechas\r\ncodigos de motor\r\nMUF no sirve', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-14 13:29:49', NULL, 7, NULL),
(47, 'Solicitud_Alta-0047', 209, '1.00', 3, '*SUSPENSION \r\n*SOPORTES', '*SUSPENSION \r\n*SOPORTES', '0', '0', '0', '0', '0', '1', 'Borrado de 2.4.2 Solicitud Alta Proyecto', '2022-03-14 16:12:54', '2022-03-15 08:35:22', 7, 6),
(48, 'Solicitud_Alta-0048', 159, '1.00', 3, 'Falla de motor\r\nP0743 Undocumented Code\r\nP1895 Engine Torque Signal Can Bus Malfuction', 'Falla, códigos de  motor', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-14 16:24:05', NULL, 7, NULL),
(49, 'Solicitud_Alta-0049', 134, '1.00', 2, 'Unidad entregada solo requiere alta estaba en ', 'Unidad entregada solo requiere alta estaba en ', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-14 16:55:33', NULL, 7, NULL),
(50, 'Solicitud_Alta-0050', 214, '1.00', 2, 'Cliente retira la unidad tras 8 meses de estar aqui en reparación', 'Cliente retira la unidad tras 8 meses de estar aqui en reparación', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-14 17:11:22', NULL, 7, NULL),
(51, 'Solicitud_Alta-0051', 207, '1.00', 3, 'Revisión de fuga', 'Revisión de fuga', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-15 09:06:44', NULL, 7, NULL),
(52, 'Solicitud_Alta-0052', 31, '13,000.00', 3, 'Andres/Moy', '*Suspensión\r\n*Soportes', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-15 10:30:08', NULL, 7, NULL),
(53, 'Solicitud_Alta-0053', 31, '9,000.00', 3, 'Andres Moy', 'Suspension \r\nSoportes', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-15 10:32:49', NULL, 7, NULL),
(54, 'Solicitud_Alta-0054', 224, '2,500.00', 3, '*Soportes', '*Revisión de transmisión\r\n*Cambio de retenes de flecha', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-15 12:04:37', NULL, 7, NULL),
(55, 'Solicitud_Alta-0055', 222, '1,600.00', 3, 'Afinación', 'Próximo servicio 20,000 kms o 1 año', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-15 12:06:52', NULL, 7, NULL),
(56, 'Solicitud_Alta-0056', 220, '1,400.00', 3, 'Afinacion', 'Afinacion', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-15 12:10:20', NULL, 7, NULL),
(57, 'Solicitud_Alta-0057', 225, '13,000.00', 3, 'suspensión y soportes, fuga aceite de motor y de dirección, alineación, códigos de motor.', 'suspensión y soportes, fuga aceite de motor y de dirección, alineación, códigos de motor.', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-15 13:02:40', NULL, 7, NULL),
(58, 'Solicitud_Alta-0058', 41, '22,000.00', 3, 'Fuga de Aceite de motor\r\nJuego en transfer\r\n\r\nRequiere sus refacciones', 'Fuga de Aceite de motor\r\nJuego en transfer', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-15 17:22:32', NULL, 7, NULL),
(59, 'Solicitud_Alta-0059', 15, '20,000.00', 3, 'Suspensión y soportes\r\nAlineación\r\nFuga aceite de motor\r\nCódigos de motor', 'Reparación de transmisión', '0', '0', '0', '0', '0', '1', 'Borrado de 2.4.2 Solicitud Alta Proyecto', '2022-03-15 17:25:28', '2022-03-15 18:40:35', 7, 6),
(60, 'Solicitud_Alta-0060', 36, '1.00', 3, 'Suspension \r\nSoportes\r\nPrueba larga', 'Suspension \r\nSoportes\r\n', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-16 09:15:12', NULL, 7, NULL),
(61, 'Solicitud_Alta-0061', 197, '20,000.00', 3, 'Soportes', 'Soportes', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-16 10:19:23', NULL, 7, NULL),
(62, 'Solicitud_Alta-0062', 37, '6,000.00', 3, 'Reparación de cremallera', '*Suspensión\r\n*Alineación\r\n*Fuga Aceite de motor', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-16 10:39:42', NULL, 7, NULL),
(63, 'Solicitud_Alta-0063', 41, '22,000.00', 3, '*Fuga Aceite de motor\r\n*Juego transfer', '*Fuga Aceite de motor\r\n*Juego transfer', '0', '0', '0', '0', '0', '1', 'Borrado de 2.4.2 Solicitud Alta Proyecto', '2022-03-16 11:50:38', '2022-03-16 13:15:13', 7, 7),
(64, 'Solicitud_Alta-0064', 37, '5,000.00', 3, 'Reparacion de Cremallera', ' Reparacion de cremallera', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-16 13:15:45', NULL, 7, NULL),
(65, 'Solicitud_Alta-0065', 229, '1,600.00', 3, 'Afinación', 'Afinacion', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-16 13:54:36', NULL, 7, NULL),
(66, 'Solicitud_Alta-0066', 240, '13,000.00', 2, 'No cambia:\r\nNo sirve caja de fusibles, Falla de motor, Instalación eléctrica dañada, fuga agua y Falla en computadora', 'No sirve caja de fusibles, Falla de motor, Instalación eléctrica dañada, fuga agua y Falla en computadora', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-16 14:57:22', NULL, 7, NULL),
(67, 'Solicitud_Alta-0067', 239, '3,000.00', 2, 'Unidad se desmonta, cliente solo paga mano de obra', 'Unidad se desmonta, cliente solo paga mano de obra', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-16 14:58:19', NULL, 7, NULL),
(68, 'Solicitud_Alta-0068', 238, '1.00', 2, 'Instalacion Electrica', 'Extension de garantía por 2 meses', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-16 14:59:13', NULL, 7, NULL),
(69, 'Solicitud_Alta-0069', 236, '22,000.00', 2, 'Reparación de transmisión', 'Reparación de transmisión', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-16 15:52:03', NULL, 7, NULL),
(70, 'Solicitud_Alta-0070', 235, '15,000.00', 2, 'cliente ya no quiere la transmisión', 'cliente ya no quiere la transmisión', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-16 15:52:45', NULL, 7, NULL),
(71, 'Solicitud_Alta-0071', 234, '36,000.00', 2, 'Pendiente de pago', 'Pendiente de pago', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-16 15:53:18', NULL, 7, NULL),
(72, 'Solicitud_Alta-0072', 233, '50,000.00', 2, 'Cliente pendiente de pago', 'Cliente pendiente de pago', '0', '0', '0', '0', '0', '1', 'Borrado de 2.4.2 Solicitud Alta Proyecto', '2022-03-16 15:53:50', '2022-03-28 13:15:28', 7, 2),
(73, 'Solicitud_Alta-0073', 232, '15,000.00', 2, 'demanda', 'demanda', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-16 15:55:55', NULL, 7, NULL),
(74, 'Solicitud_Alta-0074', 230, '16,000.00', 2, 'Robada', 'robada', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-16 16:00:05', NULL, 7, NULL),
(75, 'Solicitud_Alta-0075', 244, '1.00', 2, 'se la llevo el cliente', 'se la llevo el cliente', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-16 16:03:27', NULL, 7, NULL),
(76, 'Solicitud_Alta-0076', 202, '1.00', 3, 'Suspensión y soportes', 'Suspensión y soportes', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-16 17:35:53', NULL, 7, NULL),
(77, 'Solicitud_Alta-0077', 48, '15,000.00', 3, 'Instalación Eléctrica\r\nRevisar hay falso  \r\nsuspensión \r\nsoportes\r\nFuga mucho aceite de motor', 'Instalación Eléctrica\r\nRevisar hay falso  \r\nsuspensión \r\nsoportes\r\nFuga mucho aceite de motor', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-16 17:46:14', NULL, 7, NULL),
(78, 'Solicitud_Alta-0078', 47, '20,000.00', 3, '*No sirve velocimetro\r\n*Juego en transfer\r\n*Fuga aceite de motor\r\n*Códigos de motor\r\n*Chicote desgastado', '*No sirve velocimetro\r\n*Juego en transfer\r\n*Fuga aceite de motor\r\n*Códigos de motor\r\n*Chicote desgastado', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-17 09:14:41', NULL, 7, NULL),
(79, 'Solicitud_Alta-0079', 250, '2,200.00', 3, 'Solo cambio de retenes\r\nRectificacion de flecha', 'Solo cambio de retenes\r\nRectificacion de flecha', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-17 12:13:15', NULL, 7, NULL),
(80, 'Solicitud_Alta-0080', 25, '13,000.00', 3, '*Suspensión\r\n*soportes\r\n*Desgaste de chicote\r\n*Fuga aceite de motor\r\n*Chupete de aire\r\n*No sirve chicote de velocimetro', '*Suspensión\r\n*soportes\r\n*Desgaste de chicote\r\n*Fuga aceite de motor\r\n*Chupete de aire\r\n*No sirve chicote de velocímetro\r\n\r\nTotal de reparacion $13,000 mas iva\r\nExtra $3,000.00', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-17 15:35:16', NULL, 7, NULL),
(81, 'Solicitud_Alta-0081', 185, '15,000.00', 3, 'Suspensión\r\nSoportes \r\nAlienación\r\nInstalación eléctrica\r\n', 'Suspensión\r\nSoportes \r\nAlienación\r\nInstalación eléctrica\r\n', '0', '0', '0', '0', '0', '1', 'Borrado de 2.4.2 Solicitud Alta Proyecto', '2022-03-17 15:41:01', '2022-03-17 15:55:50', 7, 7),
(82, 'Solicitud_Alta-0082', 185, '15,000.00', 3, 'Suspensión\r\nSoportes \r\nAlienación\r\nInstalación eléctrica\r\nChicote', 'Suspensión\r\nSoportes \r\nAlienación\r\nInstalación eléctrica\r\nChicote', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-17 15:42:52', NULL, 7, NULL),
(83, 'Solicitud_Alta-0083', 180, '13,000.00', 3, '*Suspensión\r\n* Soportes\r\n* Instalación\r\n*Chicote', '*Suspensión\r\n* Soportes\r\n* Instalación\r\n*Chicote', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-17 15:51:41', NULL, 7, NULL),
(84, 'Solicitud_Alta-0084', 25, '14,000.00', 3, 'Suspensión\r\nSoportes\r\nFuga aceite motor\r\nChupete de aire\r\nNo sirve chicote velocímetro\r\nDesgaste de chicote', 'Suspensión\r\nSoportes\r\nFuga aceite motor\r\nChupete de aire\r\nNo sirve chicote velocímetro\r\nDesgaste de chicote\r\n\r\n\r\nSe reparan los conectores del sensor de entrada y salida ', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-17 15:57:21', NULL, 7, NULL),
(85, 'Solicitud_Alta-0085', 42, '15,000.00', 3, '*Soportes\r\n*Suspensión\r\n*Fuga de aceite', '*Soportes\r\n*Suspensión\r\n*Fuga de aceite', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-17 17:39:37', NULL, 7, NULL),
(86, 'Solicitud_Alta-0086', 250, '2,200.00', 3, 'Corrección de fugas\r\nCambio de\r\nRetenes y rectificación de flechas', 'Corrección de fugas\r\nCambio de\r\nRetenes y rectificación de flechas', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-18 11:20:08', NULL, 7, NULL),
(87, 'Solicitud_Alta-0087', 11, '13,000.00', 3, 'Suspensión\r\nSopoetes\r\nAlineación\r\nFuga aceite de motor\r\nCódigo de motor\r\nRevisar manguera de dirección ', 'Suspensión\r\nSopoetes\r\nAlineación\r\nFuga aceite de motor\r\nCódigo de motor\r\nRevisar manguera de dirección ', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-18 11:23:41', NULL, 7, NULL),
(88, 'Solicitud_Alta-0088', 211, '1.00', 3, 'Suspensión \r\n*Soportes\r\n*Instalación eléctrica\r\n*Códigos de motor\r\n*Fuga de aceite', 'Suspensión \r\n*Soportes\r\n*Instalación eléctrica\r\n*Códigos de motor\r\n*Fuga de aceite\r\n\r\nRevisión de transmisión y cambio de base soporte', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-18 12:49:59', NULL, 7, NULL),
(89, 'Solicitud_Alta-0089', 255, '1,400.00', 3, 'Afinación', 'Afinación', '0', '0', '0', '0', '0', '1', 'Borrado de 2.4.2 Solicitud Alta Proyecto', '2022-03-18 13:07:29', '2022-03-18 14:21:51', 7, 6),
(90, 'Solicitud_Alta-0090', 254, '1,800.00', 3, 'afinacion', 'afinacion', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-18 13:20:33', NULL, 7, NULL),
(91, 'Solicitud_Alta-0091', 257, '1,400.00', 3, 'Afinación', 'Afinación', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-18 13:22:42', NULL, 7, NULL),
(92, 'Solicitud_Alta-0092', 14, '10,500.00', 3, '*Desgaste de chicote de palanca\r\n*Chicote de sobre marcha no funciona\r\n*Fuga aceite de motor\r\n*Debe traer motor 3.0 y trae un 4.0 por eso la unidad se siente burra.', '*Desgaste de chicote de palanca\r\n*Chicote de sobre marcha no funciona\r\n*Fuga aceite de motor\r\n*Debe traer motor 3.0 y trae un 4.0 por eso la unidad se siente burra.', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-18 17:42:08', NULL, 7, NULL),
(93, 'Solicitud_Alta-0093', 125, '18,000.00', 3, '*Códigos de motor\r\n*Fuga de motor\r\n*Diferencial desgastado\r\n*Chicote de palanca con desgaste', '*Códigos de motor\r\n*Fuga de motor\r\n*Diferencial desgastado\r\n*Chicote de palanca con desgaste', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-18 17:51:55', NULL, 7, NULL),
(94, 'Solicitud_Alta-0094', 19, '1.00', 3, 'Revisión de transmisión por garantía', 'Revisión de transmisión por garantía', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-19 09:01:51', NULL, 7, NULL),
(95, 'Solicitud_Alta-0095', 19, '1.00', 3, '*Suspension\r\n*Soportes\r\n*Fuga aceite de motor\r\n*Códigos de motor\r\n*Chicote desgastado', '*Suspension\r\n*Soportes\r\n*Fuga aceite de motor\r\n*Códigos de motor\r\n*Chicote desgastado', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-19 09:03:56', NULL, 7, NULL),
(96, 'Solicitud_Alta-0096', 246, '1.00', 3, 'Orden  cancelado', 'Orden cancelada', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-19 09:40:56', NULL, 7, NULL),
(97, 'Solicitud_Alta-0097', 10, '1.00', 3, 'Suspension\r\nSoportes\r\nAlineacion\r\nSoldar mofle', 'Suspension\r\nSoportes\r\nAlineacion\r\nSoldar mofle', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-19 10:05:18', NULL, 7, NULL),
(98, 'Solicitud_Alta-0097', 10, '1.00', 3, 'Suspension\r\nSoportes\r\nAlineacion\r\nSoldar mofle', 'Suspension\r\nSoportes\r\nAlineacion\r\nSoldar mofle', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-19 10:05:19', NULL, 7, NULL),
(99, 'Solicitud_Alta-0099', 258, '1,400.00', 3, 'Afinacion', 'Afinacion', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-19 10:10:46', NULL, 7, NULL),
(100, 'Solicitud_Alta-00100', 259, '1,600.00', 3, 'afinacion', 'afinacion', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-19 11:17:43', NULL, 7, NULL),
(101, 'Solicitud_Alta-00101', 35, '15,000.00', 3, 'Suspensión\r\nSoportes\r\nFuga de aceite', 'Suspensión\r\nSoportes\r\nFuga de aceite', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-23 09:03:34', NULL, 7, NULL),
(102, 'Solicitud_Alta-00102', 88, '6,000.00', 3, '-', '-', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-23 09:06:21', NULL, 7, NULL),
(103, 'Solicitud_Alta-00103', 263, '1,400.00', 3, 'Afinacion', 'Afinacion', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-23 09:14:12', NULL, 7, NULL),
(104, 'Solicitud_Alta-00104', 118, '1.00', 3, '-', '-', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-23 10:20:14', NULL, 7, NULL),
(105, 'Solicitud_Alta-00105', 43, '50,000.00', 4, '*Pila no sirve\r\n*ABS\r\n*Fuga aceite motor\r\n*Chicote desgaste\r\n*Codigos motor', '*Pila no sirve\r\n*ABS\r\n*Fuga aceite motor\r\n*Chicote desgaste\r\n*Codigos motor', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-23 10:27:18', NULL, 7, NULL),
(106, 'Solicitud_Alta-00106', 182, '13,000.00', 4, 'Alineacion\r\nSoportes\r\nSuspension\r\nFuga aceite de motor\r\nChicote palanca desgaste\r\nChicote velocimetro\r\nConector arnes', 'Alineacion\r\nSoportes\r\nSuspensión\r\nFuga aceite de motor\r\nChicote palanca desgaste\r\nChicote velocímetro\r\nConector arnes', '0', '0', '0', '0', '0', '1', 'Borrado de 2.4.2 Solicitud Alta Proyecto', '2022-03-23 10:31:35', '2022-03-23 11:26:42', 7, 6),
(107, 'Solicitud_Alta-00107', 149, '6,000.00', 4, 'Fuga aceite de motor\r\nChicote desgaste\r\nCodigos de motor', 'Fuga aceite de motor\r\nChicote desgaste\r\nCodigos de motor', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-23 10:33:17', NULL, 7, NULL),
(108, 'Solicitud_Alta-00108', 118, '1.00', 4, 'Suspension\r\nSoportes\r\nFuga aceite de motor\r\nCodigos de motor\r\nChicote de planaca', 'Suspension\r\nSoportes\r\nFuga aceite de motor\r\nCodigos de motor\r\nChicote de planaca', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-23 10:34:57', NULL, 7, NULL),
(109, 'Solicitud_Alta-00109', 260, '1.00', 3, 'Unidad ya estaba pagada eran $20,000.00', 'Unidad ya estaba pagada eran $20,000.00', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-23 11:23:10', NULL, 7, NULL),
(110, 'Solicitud_Alta-00110', 211, '1.00', 3, 'Suspensión\r\nSoportes\r\nInstalación eléctrica\r\nCódigos de motor\r\nFuga de motor ', 'Suspensión\r\nSoportes\r\nInstalación eléctrica\r\nCódigos de motor\r\nFuga de motor', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-23 13:10:22', NULL, 7, NULL),
(111, 'Solicitud_Alta-00111', 268, '1.00', 4, 'Suspensión\r\nSoportes ', 'Suspensión\r\nSopoetes ', '0', '0', '0', '0', '0', '1', 'Borrado de 2.4.2 Solicitud Alta Proyecto', '2022-03-23 13:47:19', '2022-03-24 10:18:19', 7, 6),
(112, 'Solicitud_Alta-00112', 279, '15,000.00', 4, 'Suspensión\r\nSoportes\r\nChicote desgastado\r\nCódigos y fuga de motor ', 'Suspensión\r\nSoportes\r\nChicote desgastado\r\nCódigos y fuga de motor ', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-23 13:49:59', NULL, 7, NULL),
(113, 'Solicitud_Alta-00113', 183, '13,000.00', 4, 'Suspensión\r\nSoportes\r\nCódigos y fuga de motor', 'Suspensión\r\nSoportes\r\nCódigos y fuga de motor', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-23 13:54:01', NULL, 7, NULL),
(114, 'Solicitud_Alta-00114', 281, '13,000.00', 4, 'Suspensión\r\nSoportes\r\nCódigos y fuga de motor', 'Suspensión\r\nSoportes\r\nCódigos y fuga de motor', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-23 13:55:44', NULL, 7, NULL),
(115, 'Solicitud_Alta-00115', 282, '1,300.00', 4, 'Soportes ', 'Soportes', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-23 13:58:50', NULL, 7, NULL),
(116, 'Solicitud_Alta-00116', 280, '1,600.00', 4, 'Afinacion', 'Afinacion', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-23 15:20:03', NULL, 7, NULL),
(117, 'Solicitud_Alta-00117', 153, '30,000.00', 4, '*P0102 SENSOR MAF\r\n*P0113 SENSOR DE TEMPERATURA\r\n*P1603 SESNSOR DE ADMISION \r\n*P1605 SENSOR DE AIRE ACONDICIONADO', '*P0102 SENSOR MAF\r\n*P0113 SENSOR DE TEMPERATURA\r\n*P1603 SESNSOR DE ADMISION \r\n*P1605 SENSOR DE AIRE ACONDICIONADO', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-23 17:15:32', NULL, 7, NULL),
(118, 'Solicitud_Alta-00118', 267, '5,000.00', 4, 'Suspensión\r\nSoportes\r\nChicote desgastado', 'Suspensión\r\nSoportes\r\nChicote desgastado', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-24 11:07:48', NULL, 7, NULL),
(119, 'Solicitud_Alta-00119', 287, '1,000.00', 4, 'Afinación ', 'Afinación ', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-24 11:08:35', NULL, 7, NULL),
(120, 'Solicitud_Alta-00120', 285, '1,100.00', 4, 'Eran 1,600 menos 500 de reparación ', 'Eran 1,600 menos 500 de reparación ', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-24 11:10:27', NULL, 7, NULL),
(121, 'Solicitud_Alta-00121', 9, '14,000.00', 4, 'Códigos de motor\r\nSuspensión\r\nSoportes\r\nFuga aceite motor\r\nFuga Aceite de dirección\r\nChicote desgastado', 'Códigos de motor\r\nSuspensión\r\nSoportes\r\nFuga aceite motor\r\nFuga Aceite de dirección\r\nChicote desgastado', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-24 13:36:24', NULL, 7, NULL),
(122, 'Solicitud_Alta-00122', 29, '11,000.00', 4, 'Soportes\r\nDiferencial\r\nFuga de aceite\r\nCódigos de motor\r\nChicte desgastado\r\n', 'Soportes\r\nDiferencial\r\nFuga de aceite\r\nCódigos de motor\r\nChicte desgastado', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-24 13:48:53', NULL, 7, NULL),
(123, 'Solicitud_Alta-00123', 85, '15,000.00', 4, '*No sirve la computadora\r\n*Instalación con desgaste\r\n*Endendido Falla\r\n*Chicote desgatado\r\n*Motor codigos y Falla\r\n*Fuga aceite motor\r\n*Suspensión\r\n*Soportes\r\n\r\n', '*No sirve la computadora\r\n*Instalación con desgaste\r\n*Endendido Falla\r\n*Chicote desgatado\r\n*Motor codigos y Falla\r\n*Fuga aceite motor\r\n*Suspensión\r\n*Soportes', '0', '0', '0', '0', '0', '1', 'Borrado de 2.4.2 Solicitud Alta Proyecto', '2022-03-24 13:58:55', '2022-03-24 17:44:05', 7, 6),
(124, 'Solicitud_Alta-00124', 221, '35,000.00', 4, 'Soporte desgastado', 'Soporte desgastado', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-24 17:11:49', NULL, 7, NULL),
(125, 'Solicitud_Alta-00125', 3, '14,250.00', 4, 'se hace el 5% por autorizacion de Sebastian.\r\nCodigos de motor\r\nSwitch falla\r\nSoportes\r\nSuspension', 'Codigos de motor\r\nSwitch falla\r\nSoportes\r\nSuspension', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-24 17:27:23', NULL, 7, NULL),
(126, 'Solicitud_Alta-00126', 3, '14,250.00', 4, '5% autorizado por sebastian\r\n\r\nsuspension\r\nsoportes', '\r\nsuspension\r\nsoportes', '0', '0', '0', '0', '0', '0', 'Activo', '2022-03-24 17:56:05', NULL, 7, NULL),
(127, 'Solicitud_Alta-00127', 299, '1.00', 4, '*Código Motor\r\n*Suspensión, soporte y flecha\r\n*Fuga aceite de motor', '*Código Motor\r\n*Suspensión, soporte y flecha\r\n*Fuga aceite de motor', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-25 09:55:13', NULL, 7, NULL),
(128, 'Solicitud_Alta-00128', 29, '11,000.00', 4, 'Suspensión\r\nSoportes\r\nFuga de motor\r\nCódigo de motor\r\nChicote desgastado ', 'Suspensión\r\nSoportes\r\nFuga de motor\r\nCódigo de motor\r\nChicote desgastado', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-25 12:23:49', NULL, 7, NULL),
(129, 'Solicitud_Alta-00129', 211, '1.00', 4, 'Suspension\r\nSoportes\r\nInstalacion Electrica\r\nCodigos Motor\r\nFuga Aceite', 'Suspension\r\nSoportes\r\nInstalacion Electrica\r\nCodigos Motor\r\nFuga Aceite', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-25 14:06:59', NULL, 7, NULL),
(130, 'Solicitud_Alta-00130', 300, '1,400.00', 4, 'Afinacion', 'Afinacion', '1', '1', '1', '1', '1', '1', 'Borrado de 2.4.2 Solicitud Alta Proyecto', '2022-03-25 14:33:34', '2022-03-26 08:28:32', 7, 6),
(131, 'Solicitud_Alta-00131', 301, '1,400.00', 4, 'Afinacion', 'Afinacion', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-25 14:35:46', NULL, 7, NULL),
(132, 'Solicitud_Alta-00132', 171, '10,000.00', 4, '* Suspensión\r\n*Soportes\r\n*Chicote desgastado\r\n*Fuga aceite Motor\r\n*Codigos de motor', '* Suspensión\r\n*Soportes\r\n*Chicote desgastado\r\n*Fuga aceite Motor\r\n*Codigos de motor', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-25 14:38:49', NULL, 7, NULL),
(133, 'Solicitud_Alta-00133', 284, '1.00', 4, 'orden cancelada', 'Orden cancelada', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-25 14:41:07', NULL, 7, NULL),
(134, 'Solicitud_Alta-00134', 303, '1,500.00', 4, 'Soportes\r\nSuspensión\r\nCódigos de motor\r\nFuga aceite de motor\r\nChicote de velocímetro no sirve\r\nChicote de Palanca\r\n\r\n', 'Soportes\r\nSuspensión\r\nCódigos de motor\r\nFuga aceite de motor\r\nChicote de velocímetro no sirve\r\nChicote de Palanca\r\n', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-25 16:01:07', NULL, 7, NULL),
(135, 'Solicitud_Alta-00135', 290, '10,000.00', 4, 'Fuga aceite de motor\r\nJuego en diferencial\r\nSoportes\r\nChicote desgastado', 'Fuga aceite de motor\r\nJuego en diferencial\r\nSoportes\r\nChicote desgastado', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-25 16:34:31', NULL, 7, NULL),
(136, 'Solicitud_Alta-00136', 305, '1,400.00', 4, 'Afinacion', 'Afinacion', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-25 16:52:10', NULL, 7, NULL),
(137, 'Solicitud_Alta-00137', 166, '15,000.00', 4, '*Suspensión y Soportes\r\n*Códigos de motor\r\n* Instalación eléctrica con desgaste\r\n* Chicote desgastado\r\n*Fuga aceite de motor\r\n* Carro huele a humedad, probable inhundación\r\n', '*Suspensión y Soportes\r\n*Códigos de motor\r\n* Instalación eléctrica con desgaste\r\n* Chicote desgastado\r\n*Fuga aceite de motor\r\n* Carro huele a humedad, probable inhundación', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-25 16:55:57', NULL, 7, NULL),
(138, 'Solicitud_Alta-00138', 247, '15,000.00', 4, 'Fuga aceite de motor\r\nCódigos de motor y falla\r\nChicote desgastado\r\nSuspensión, soportes\r\nJuego en el diferencial\r\nAlineación', 'Fuga aceite de motor\r\nCódigos de motor y falla\r\nChicote desgastado\r\nSuspensión, soportes\r\nJuego en el diferencial\r\nAlineación', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-25 17:30:19', NULL, 7, NULL),
(139, 'Solicitud_Alta-00139', 296, '1.00', 4, 'Orden cancelada', 'Orden Cancelada', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-26 08:58:48', NULL, 7, NULL),
(140, 'Solicitud_Alta-00140', 307, '650.00', 4, 'Afinación', 'Afinación', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-26 10:06:14', NULL, 7, NULL),
(141, 'Solicitud_Alta-00141', 308, '1,400.00', 4, 'Afinación', 'Afinación', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-26 10:10:45', NULL, 7, NULL),
(142, 'Solicitud_Alta-00142', 309, '1,400.00', 4, 'Afinación', 'Afinación', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-26 10:13:27', NULL, 7, NULL),
(143, 'Solicitud_Alta-00143', 211, '1.00', 4, 'Suspension\r\nSoportes\r\nInstalacion electrica\r\nCodigos de motor\r\nFuga de aceite', 'Suspension\r\nSoportes\r\nInstalacion electrica\r\nCodigos de motor\r\nFuga de aceite', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-26 11:50:05', NULL, 7, NULL),
(144, 'Solicitud_Alta-00144', 248, '1.00', 4, 'Corrección de fugas\r\n', 'Corrección de fugas ', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-26 14:15:34', NULL, 7, NULL),
(145, 'Solicitud_Alta-00145', 195, '1.00', 5, 'Revisar Flechas\r\nRevisar Soportes y suspensión\r\nAlineación', 'Revisar Flechas\r\nRevisar Soportes y suspensión\r\nAlineación', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-28 11:09:26', NULL, 7, NULL),
(146, 'Solicitud_Alta-00146', 242, '12,000.00', 5, 'Suspension y soportes\r\nFalla motor codigos\r\nChicote Palanca\r\nFuga Aceite motor\r\nligera fuga direccion', 'Suspension y soportes\r\nFalla motor codigos\r\nChicote Palanca\r\nFuga Aceite motor\r\nligera fuga direccion', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-28 11:12:34', NULL, 7, NULL),
(147, 'Solicitud_Alta-00147', 275, '1.00', 5, 'Suspension\r\nSoportes', 'Suspension\r\nSoportes', '1', '1', '1', '1', '1', '1', 'Borrado de 2.4.2 Solicitud Alta Proyecto', '2022-03-28 11:32:05', '2022-03-28 16:59:05', 7, 6),
(148, 'Solicitud_Alta-00148', 275, '1.00', 5, 'No sirve cruceta\r\nRevisar flecha diferencial\r\nFuga aceite de motor', 'No sirve cruceta\r\nRevisar flecha diferencial\r\nFuga aceite de motor', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-28 11:37:33', NULL, 7, NULL),
(149, 'Solicitud_Alta-00149', 199, '20,000.00', 5, 'Soportes', 'Soportes', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-28 12:16:51', NULL, 7, NULL),
(150, 'Solicitud_Alta-00150', 317, '1,400.00', 5, 'Afinación', 'Afinación', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-28 13:10:30', NULL, 7, NULL),
(151, 'Solicitud_Alta-00151', 234, '32,040.00', 2, 'Suleta', 'Semanas pasadas', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-28 13:38:43', NULL, 7, NULL),
(152, 'Solicitud_Alta-00152', 314, '1,400.00', 5, 'Afinación', 'Afinación', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-28 13:42:53', NULL, 7, NULL),
(153, 'Solicitud_Alta-00153', 304, '5,000.00', 5, 'Suspensión\r\nSoportes\r\nFuga aceite de motor ', 'Suspensión\r\nSoportes\r\nFuga aceite de motor ', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-29 10:40:45', NULL, 7, NULL),
(154, 'Solicitud_Alta-00154', 242, '12,000.00', 5, 'Suspensión y soportes\r\nFalla y códigos de. Motor\r\nChicote palanca desgastado\r\nFuga de aceite de motor ', 'Suspensión y soportes\r\nFalla y códigos de. Motor\r\nChicote palanca desgastado\r\nFuga de aceite de motor ', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-29 10:44:36', NULL, 7, NULL),
(155, 'Solicitud_Alta-00155', 321, '850.00', 5, '. ', '.\r\n', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-29 11:40:55', NULL, 7, NULL),
(156, 'Solicitud_Alta-00156', 328, '650.00', 5, '-', '1 Mes de garantia por fugas\r\nPróximo Servicio de Afinación 158, 587km', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-29 12:39:40', NULL, 3, NULL),
(157, 'Solicitud_Alta-00157', 329, '1,600.00', 5, '-', '1 Mes de Garantia por fugas\r\nPróximo Servicio de Afinación 40, 778km', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-29 13:07:05', NULL, 3, NULL),
(158, 'Solicitud_Alta-00158', 319, '1.00', 5, 'Suspensión y soportes', 'Suspensión\r\nSoportes', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-29 13:26:26', NULL, 3, NULL),
(159, 'Solicitud_Alta-00159', 116, '60,000.00', 5, 'Codigos de motor\r\nAbs\r\nFuga de aceite de motor\r\nDesgaste en instalación eléctrica y caja fusibles\r\nRevisar Alternador', 'Codigos de motor\r\nAbs\r\nFuga de aceite de motor\r\nDesgaste en instalación eléctrica y caja fusibles\r\nRevisar Alternador', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-29 13:36:44', NULL, 3, NULL),
(160, 'Solicitud_Alta-00160', 272, '12,000.00', 5, 'Chicote sobre marcha y chicote de palanca desgaste\r\nfuga de aceite de motor, alineación y juego de diferencial. ', 'Chicote sobre marcha y chicote de palanca desgaste\r\nfuga de aceite de motor, alineación y juego de diferencial. ', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-29 16:25:51', NULL, 3, NULL),
(161, 'Solicitud_Alta-00161', 315, '6,650.00', 5, 'Suspensión y soportes, alineación, fuga de aceite de motor y códigos de motor. ', 'Suspensión y soportes, alineación, fuga de aceite de motor y códigos de motor. ', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-29 16:41:06', NULL, 3, NULL),
(162, 'Solicitud_Alta-00162', 297, '1.00', 5, 'Soportes\r\nCódigo de motor\r\nAlineacion', 'Soportes\r\nCódigo de motor\r\nAlineacion', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-30 09:41:44', NULL, 7, NULL),
(163, 'Solicitud_Alta-00163', 208, '1.00', 5, 'Instalacion desgaste\r\nTransfer no sirve\r\nAlineacion\r\nCodigos de motor', 'Instalacion desgaste\r\nTransfer no sirve\r\nAlineacion\r\nCodigos de motor', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-30 09:42:44', NULL, 7, NULL),
(164, 'Solicitud_Alta-00164', 338, '650.00', 5, '1 Mes de garantia por fugas\r\nPróximo Servicio de Afinación 78, 721km', '1 Mes de garantia por fugas\r\nPróximo Servicio de Afinación 78, 721km', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-30 10:37:43', NULL, 3, NULL),
(165, 'Solicitud_Alta-00165', 323, '1.00', 5, 'Orden cancelada', 'orden cancelada', '1', '1', '1', '1', '1', '1', 'Borrado de 2.4.2 Solicitud Alta Proyecto', '2022-03-30 10:39:18', '2022-03-30 13:11:19', 3, 2),
(166, 'Solicitud_Alta-00166', 338, '1,400.00', 5, '1 Mes de Garantia por fugas\r\nPróximo Servicio de Afinación 78, 721km', '1 Mes de Garantia por fugas\r\nPróximo Servicio de Afinación 78, 721km', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-30 13:12:39', NULL, 3, NULL),
(167, 'Solicitud_Alta-00167', 339, '1.00', 5, 'Suspensión\r\nSoportes\r\nFuga aceite de motor', 'Suspensión\r\nSoportes\r\nFuga aceite de motor', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-30 13:26:25', NULL, 7, NULL),
(168, 'Solicitud_Alta-00168', 231, '15,000.00', 5, '*Chicote desgastado\r\n*Fuga aceite de motor\r\n*Alineación\r\n*Diferencial desgastado\r\n*Soportes', '$1,500.00 radiador\r\n\r\n*Chicote desgastado\r\n*Fuga aceite de motor\r\n*Alineación\r\n*Diferencial desgastado\r\n*Soportes', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-30 14:33:41', NULL, 7, NULL),
(169, 'Solicitud_Alta-00169', 231, '15,000.00', 5, 'Chicote desgastado\r\nFuga aceite de motor\r\nAlineación\r\nDiferencial desgastado\r\nUnidad esta Acelerada', '$1,500 radiador\r\nChicote desgastado\r\nFuga aceite de motor\r\nAlineación\r\nDiferencial desgastado\r\nUnidad esta Acelerada', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-30 15:03:18', NULL, 7, NULL),
(170, 'Solicitud_Alta-00170', 333, '1.00', 5, 'orden cancelada', 'orden cancelada', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-30 15:15:31', NULL, 3, NULL),
(171, 'Solicitud_Alta-00171', 334, '1.00', 5, 'orden cancelada', 'orden cancelada', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-30 15:17:02', NULL, 3, NULL),
(172, 'Solicitud_Alta-00172', 49, '13,000.00', 5, 'Fuga aceite dirección\r\nSoportes\r\nSuspensión y Alineación\r\nFuga aceite de motor\r\nCódigos de motor\r\nChicote desgastado ', 'Fuga aceite dirección\r\nSoportes\r\nSuspensión y Alineación\r\nFuga aceite de motor\r\nCódigos de motor\r\nChicote desgastado ', '1', '1', '1', '1', '1', '0', 'Activo', '2022-03-30 16:41:38', NULL, 7, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repvalvenaltavsvalcodid`
--

CREATE TABLE `repvalvenaltavsvalcodid` (
  `id_repVVAvsVCI` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `motivo` varchar(200) NOT NULL,
  `capMotivo` char(1) NOT NULL DEFAULT '0',
  `fecha_registro` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT 0,
  `id_capM` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repvalveninicialvsvalvenalta`
--

CREATE TABLE `repvalveninicialvsvalvenalta` (
  `id_repVVIvsVVA` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `motivo` varchar(200) NOT NULL,
  `capMotivo` char(1) NOT NULL DEFAULT '0',
  `fecha_registro` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT 0,
  `id_capM` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semanas`
--

CREATE TABLE `semanas` (
  `id_semana` int(11) NOT NULL,
  `semana` varchar(7) COLLATE utf8mb4_spanish_ci NOT NULL,
  `borrado` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `fecha_borrado` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capM` int(11) DEFAULT NULL,
  `id_capB` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `semanas`
--

INSERT INTO `semanas` (`id_semana`, `semana`, `borrado`, `fecha_creacion`, `fecha_mod`, `fecha_borrado`, `id_capC`, `id_capM`, `id_capB`) VALUES
(2, '2022-10', '0', '2022-03-10 12:46:48', NULL, NULL, 2, NULL, NULL),
(3, '2022-11', '0', '2022-03-14 10:00:28', NULL, NULL, 2, NULL, NULL),
(4, '2022-12', '0', '2022-03-23 10:15:13', NULL, NULL, 2, NULL, NULL),
(5, '2022-13', '0', '2022-03-28 10:35:45', NULL, NULL, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semanascobro`
--

CREATE TABLE `semanascobro` (
  `id_semanaCobro` int(11) NOT NULL,
  `semanaCobro` varchar(7) COLLATE utf8mb4_spanish_ci NOT NULL,
  `borrado` char(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `fecha_borrado` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capM` int(11) DEFAULT NULL,
  `id_capB` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `semanascobro`
--

INSERT INTO `semanascobro` (`id_semanaCobro`, `semanaCobro`, `borrado`, `fecha_creacion`, `fecha_mod`, `fecha_borrado`, `id_capC`, `id_capM`, `id_capB`) VALUES
(2, '2022-10', '0', '2022-03-12 10:21:06', NULL, NULL, 2, NULL, NULL),
(3, '2022-11', '0', '2022-03-14 10:00:41', NULL, NULL, 2, NULL, NULL),
(4, '2022-12', '0', '2022-03-23 10:15:22', NULL, NULL, 2, NULL, NULL),
(5, '2022-13', '0', '2022-03-28 10:35:53', NULL, NULL, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supervisado`
--

CREATE TABLE `supervisado` (
  `id_supervisado` int(11) NOT NULL,
  `folioSupervision` varchar(25) NOT NULL,
  `id_regcodidenti` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `compCodId` varchar(50) NOT NULL,
  `supervisado` char(1) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `supervisado`
--

INSERT INTO `supervisado` (`id_supervisado`, `folioSupervision`, `id_regcodidenti`, `id_proyecto`, `compCodId`, `supervisado`, `fecha_creacion`, `id_capC`) VALUES
(1, 'Supervisión-001', 21, 194, '14103-22-50278', '1', '2022-03-24 16:26:19', 11),
(2, 'Supervisión-002', 24, 132, '14103-22-50285', '1', '2022-03-24 17:10:45', 11),
(3, 'Supervisión-003', 81, 17, '14103-22-50280', '1', '2022-03-25 14:05:10', 11),
(4, 'Supervisión-004', 25, 126, '14103-22-50289', '1', '2022-03-25 16:36:48', 11),
(5, 'Supervisión-005', 29, 134, '14103-22-50291', '1', '2022-03-25 16:47:26', 11),
(6, 'Supervisión-006', 85, 209, '15103-22-50386', '1', '2022-03-25 17:21:05', 11),
(7, 'Supervisión-007', 31, 31, '15103-22-50388', '1', '2022-03-25 17:30:43', 11),
(8, 'Supervisión-008', 84, 192, '15103-22-50390', '1', '2022-03-25 17:44:04', 11),
(9, 'Supervisión-009', 44, 220, '15103-22-50392', '1', '2022-03-25 17:50:44', 11),
(10, 'Supervisión-0010', 83, 159, '15103-22-50394', '1', '2022-03-25 18:03:54', 11),
(11, 'Supervisión-0011', 33, 224, '15103-22-50396', '1', '2022-03-26 12:55:00', 11),
(12, 'Supervisión-0012', 86, 222, '15103-22-50398, 15103-22-50399', '1', '2022-03-26 13:12:01', 11),
(13, 'Supervisión-0013', 32, 36, '16103-22-50495', '1', '2022-03-28 13:19:26', 11),
(14, 'Supervisión-0014', 37, 37, '16103-22-50497', '1', '2022-03-28 13:29:18', 11),
(15, 'Supervisión-0015', 38, 207, '16103-22-50499', '1', '2022-03-28 13:37:32', 11),
(16, 'Supervisión-0016', 39, 244, '16103-22-50503', '1', '2022-03-28 14:04:31', 11),
(17, 'Supervisión-0017', 36, 229, '17103-22-50600, 17103-22-50601', '1', '2022-03-28 16:22:47', 11),
(18, 'Supervisión-0018', 45, 48, '17103-22-50604', '1', '2022-03-28 16:34:42', 11),
(19, 'Supervisión-0019', 41, 197, '17103-22-50606', '1', '2022-03-28 16:49:25', 11),
(20, 'Supervisión-0020', 42, 238, '17103-22-50608', '1', '2022-03-28 16:58:39', 11),
(21, 'Supervisión-0021', 43, 47, '17103-22-50610, 17103-22-50611', '1', '2022-03-28 17:08:59', 11),
(22, 'Supervisión-0022', 47, 180, '17103-22-50614', '1', '2022-03-28 17:39:27', 11),
(23, 'Supervisión-0023', 52, 254, '18103-22-50728, 18103-22-50729', '1', '2022-03-29 15:31:03', 11),
(24, 'Supervisión-0024', 49, 15, '18103-22-50733', '1', '2022-03-29 15:55:48', 11),
(25, 'Supervisión-0025', 50, 255, '18103-22-50735', '1', '2022-03-29 16:02:38', 11),
(26, 'Supervisión-0026', 62, 258, '18103-22-50737', '1', '2022-03-29 16:07:36', 11),
(27, 'Supervisión-0027', 53, 11, '18103-22-50739', '1', '2022-03-29 16:17:07', 11),
(28, 'Supervisión-0028', 55, 130, '18103-22-50741, 18103-22-50742', '1', '2022-03-29 16:25:38', 11),
(29, 'Supervisión-0029', 100, 309, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 11:41:54', 11),
(30, 'Supervisión-0030', 78, 3, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 11:44:38', 11),
(31, 'Supervisión-0031', 94, 9, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 11:48:10', 11),
(32, 'Supervisión-0032', 65, 10, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 11:50:47', 11),
(33, 'Supervisión-0033', 67, 14, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 11:52:31', 11),
(34, 'Supervisión-0034', 61, 19, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 11:56:37', 11),
(35, 'Supervisión-0035', 40, 20, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 11:58:21', 11),
(36, 'Supervisión-0036', 26, 24, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:01:24', 11),
(37, 'Supervisión-0037', 57, 25, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:03:09', 11),
(38, 'Supervisión-0038', 27, 27, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:08:51', 11),
(39, 'Supervisión-0039', 97, 29, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:10:14', 11),
(40, 'Supervisión-0040', 28, 30, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:11:36', 11),
(41, 'Supervisión-0041', 72, 35, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:14:05', 11),
(42, 'Supervisión-0042', 54, 41, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:16:15', 11),
(43, 'Supervisión-0043', 48, 42, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:18:55', 11),
(44, 'Supervisión-0044', 79, 85, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:20:43', 11),
(45, 'Supervisión-0045', 68, 88, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:22:40', 11),
(46, 'Supervisión-0046', 66, 118, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:24:03', 11),
(47, 'Supervisión-0047', 82, 125, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:26:29', 11),
(48, 'Supervisión-0048', 56, 129, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:27:15', 11),
(49, 'Supervisión-0049', 70, 149, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:28:32', 11),
(50, 'Supervisión-0050', 76, 153, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:30:01', 11),
(51, 'Supervisión-0051', 113, 166, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:31:57', 11),
(52, 'Supervisión-0052', 107, 171, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:34:30', 11),
(53, 'Supervisión-0053', 69, 182, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:35:37', 11),
(54, 'Supervisión-0054', 77, 183, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:36:47', 11),
(55, 'Supervisión-0055', 58, 185, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:38:02', 11),
(56, 'Supervisión-0056', 34, 193, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:40:09', 11),
(57, 'Supervisión-0057', 116, 195, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:41:29', 11),
(58, 'Supervisión-0058', 23, 198, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:44:03', 11),
(59, 'Supervisión-0059', 106, 199, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:46:01', 11),
(60, 'Supervisión-0060', 80, 202, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:50:01', 11),
(61, 'Supervisión-0061', 104, 211, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:52:30', 11),
(62, 'Supervisión-0062', 96, 221, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:53:56', 11),
(63, 'Supervisión-0063', 46, 225, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:56:50', 11),
(64, 'Supervisión-0064', 112, 234, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:58:07', 11),
(65, 'Supervisión-0065', 102, 236, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:00:00', 11),
(66, 'Supervisión-0066', 35, 239, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:03:12', 11),
(67, 'Supervisión-0067', 98, 240, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:05:54', 11),
(68, 'Supervisión-0068', 63, 246, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:08:58', 11),
(69, 'Supervisión-0069', 95, 247, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:11:56', 11),
(70, 'Supervisión-0070', 105, 248, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:14:01', 11),
(71, 'Supervisión-0071', 60, 250, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:16:01', 11),
(72, 'Supervisión-0072', 51, 257, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:19:11', 11),
(73, 'Supervisión-0073', 59, 259, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:21:50', 11),
(74, 'Supervisión-0074', 64, 263, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:22:40', 11),
(75, 'Supervisión-0075', 89, 267, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:23:58', 11),
(76, 'Supervisión-0076', 73, 279, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:25:53', 11),
(77, 'Supervisión-0077', 71, 280, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:27:57', 11),
(78, 'Supervisión-0078', 87, 281, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:29:23', 11),
(79, 'Supervisión-0079', 88, 282, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:32:05', 11),
(80, 'Supervisión-0080', 109, 284, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:34:24', 11),
(81, 'Supervisión-0081', 75, 285, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:38:20', 11),
(82, 'Supervisión-0082', 74, 287, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:41:20', 11),
(83, 'Supervisión-0083', 110, 290, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:44:39', 11),
(84, 'Supervisión-0084', 108, 296, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:46:24', 11),
(85, 'Supervisión-0085', 103, 299, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:47:31', 11),
(86, 'Supervisión-0086', 91, 300, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:48:52', 11),
(87, 'Supervisión-0087', 90, 301, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:51:01', 11),
(88, 'Supervisión-0088', 93, 303, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:52:58', 11),
(89, 'Supervisión-0089', 92, 305, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:54:28', 11),
(90, 'Supervisión-0090', 101, 307, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:56:02', 11),
(91, 'Supervisión-0091', 99, 308, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:57:20', 11),
(92, 'Supervisión-0092', 114, 314, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:59:47', 11),
(93, 'Supervisión-0093', 111, 317, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 14:01:43', 11),
(94, 'Supervisión-0094', 115, 321, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 15:13:53', 11),
(95, 'Supervisión-0095', 117, 328, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 15:15:23', 11),
(96, 'Supervisión-0096', 118, 329, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 15:17:56', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supervisadobitacora`
--

CREATE TABLE `supervisadobitacora` (
  `id_supervisado` int(11) NOT NULL,
  `folioSupervision` varchar(25) NOT NULL,
  `id_regcodidenti` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `compCodId` varchar(50) NOT NULL,
  `supervisado` char(1) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `borradoFechaSupervisado` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT 0,
  `id_capB` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `supervisadobitacora`
--

INSERT INTO `supervisadobitacora` (`id_supervisado`, `folioSupervision`, `id_regcodidenti`, `id_proyecto`, `compCodId`, `supervisado`, `fecha_creacion`, `borradoFechaSupervisado`, `id_capC`, `id_capB`) VALUES
(1, 'Supervisión-001', 21, 194, '14103-22-50278', '1', '2022-03-24 16:26:19', NULL, 11, NULL),
(2, 'Supervisión-002', 24, 132, '14103-22-50285', '1', '2022-03-24 17:10:45', NULL, 11, NULL),
(3, 'Supervisión-003', 81, 17, '14103-22-50280', '1', '2022-03-25 14:05:10', NULL, 11, NULL),
(4, 'Supervisión-004', 25, 126, '14103-22-50289', '1', '2022-03-25 16:36:48', NULL, 11, NULL),
(5, 'Supervisión-005', 29, 134, '14103-22-50291', '1', '2022-03-25 16:47:26', NULL, 11, NULL),
(6, 'Supervisión-006', 85, 209, '15103-22-50386', '1', '2022-03-25 17:21:05', NULL, 11, NULL),
(7, 'Supervisión-007', 31, 31, '15103-22-50388', '1', '2022-03-25 17:30:43', NULL, 11, NULL),
(8, 'Supervisión-008', 84, 192, '15103-22-50390', '1', '2022-03-25 17:44:04', NULL, 11, NULL),
(9, 'Supervisión-009', 44, 220, '15103-22-50392', '1', '2022-03-25 17:50:44', NULL, 11, NULL),
(10, 'Supervisión-0010', 83, 159, '15103-22-50394', '1', '2022-03-25 18:03:54', NULL, 11, NULL),
(11, 'Supervisión-0011', 33, 224, '15103-22-50396', '1', '2022-03-26 12:55:00', NULL, 11, NULL),
(12, 'Supervisión-0012', 86, 222, '15103-22-50398, 15103-22-50399', '1', '2022-03-26 13:12:01', NULL, 11, NULL),
(13, 'Supervisión-0013', 32, 36, '16103-22-50495', '1', '2022-03-28 13:19:26', NULL, 11, NULL),
(14, 'Supervisión-0014', 37, 37, '16103-22-50497', '1', '2022-03-28 13:29:18', NULL, 11, NULL),
(15, 'Supervisión-0015', 38, 207, '16103-22-50499', '1', '2022-03-28 13:37:32', NULL, 11, NULL),
(16, 'Supervisión-0016', 39, 244, '16103-22-50503', '1', '2022-03-28 14:04:31', NULL, 11, NULL),
(17, 'Supervisión-0017', 36, 229, '17103-22-50600, 17103-22-50601', '1', '2022-03-28 16:22:47', NULL, 11, NULL),
(18, 'Supervisión-0018', 45, 48, '17103-22-50604', '1', '2022-03-28 16:34:42', NULL, 11, NULL),
(19, 'Supervisión-0019', 41, 197, '17103-22-50606', '1', '2022-03-28 16:49:25', NULL, 11, NULL),
(20, 'Supervisión-0020', 42, 238, '17103-22-50608', '1', '2022-03-28 16:58:39', NULL, 11, NULL),
(21, 'Supervisión-0021', 43, 47, '17103-22-50610, 17103-22-50611', '1', '2022-03-28 17:08:59', NULL, 11, NULL),
(22, 'Supervisión-0022', 47, 180, '17103-22-50614', '1', '2022-03-28 17:39:27', NULL, 11, NULL),
(23, 'Supervisión-0023', 52, 254, '18103-22-50728, 18103-22-50729', '1', '2022-03-29 15:31:03', NULL, 11, NULL),
(24, 'Supervisión-0024', 49, 15, '18103-22-50733', '1', '2022-03-29 15:55:48', NULL, 11, NULL),
(25, 'Supervisión-0025', 50, 255, '18103-22-50735', '1', '2022-03-29 16:02:38', NULL, 11, NULL),
(26, 'Supervisión-0026', 62, 258, '18103-22-50737', '1', '2022-03-29 16:07:36', NULL, 11, NULL),
(27, 'Supervisión-0027', 53, 11, '18103-22-50739', '1', '2022-03-29 16:17:07', NULL, 11, NULL),
(28, 'Supervisión-0028', 55, 130, '18103-22-50741, 18103-22-50742', '1', '2022-03-29 16:25:38', NULL, 11, NULL),
(29, 'Supervisión-0029', 100, 309, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 11:41:54', NULL, 11, NULL),
(30, 'Supervisión-0030', 78, 3, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 11:44:38', NULL, 11, NULL),
(31, 'Supervisión-0031', 94, 9, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 11:48:10', NULL, 11, NULL),
(32, 'Supervisión-0032', 65, 10, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 11:50:47', NULL, 11, NULL),
(33, 'Supervisión-0033', 67, 14, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 11:52:31', NULL, 11, NULL),
(34, 'Supervisión-0034', 61, 19, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 11:56:37', NULL, 11, NULL),
(35, 'Supervisión-0035', 40, 20, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 11:58:21', NULL, 11, NULL),
(36, 'Supervisión-0036', 26, 24, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:01:24', NULL, 11, NULL),
(37, 'Supervisión-0037', 57, 25, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:03:09', NULL, 11, NULL),
(38, 'Supervisión-0038', 27, 27, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:08:51', NULL, 11, NULL),
(39, 'Supervisión-0039', 97, 29, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:10:14', NULL, 11, NULL),
(40, 'Supervisión-0040', 28, 30, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:11:36', NULL, 11, NULL),
(41, 'Supervisión-0041', 72, 35, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:14:05', NULL, 11, NULL),
(42, 'Supervisión-0042', 54, 41, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:16:15', NULL, 11, NULL),
(43, 'Supervisión-0043', 48, 42, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:18:55', NULL, 11, NULL),
(44, 'Supervisión-0044', 79, 85, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:20:43', NULL, 11, NULL),
(45, 'Supervisión-0045', 68, 88, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:22:40', NULL, 11, NULL),
(46, 'Supervisión-0046', 66, 118, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:24:03', NULL, 11, NULL),
(47, 'Supervisión-0047', 82, 125, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:26:29', NULL, 11, NULL),
(48, 'Supervisión-0048', 56, 129, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:27:15', NULL, 11, NULL),
(49, 'Supervisión-0049', 70, 149, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:28:32', NULL, 11, NULL),
(50, 'Supervisión-0050', 76, 153, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:30:01', NULL, 11, NULL),
(51, 'Supervisión-0051', 113, 166, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:31:57', NULL, 11, NULL),
(52, 'Supervisión-0052', 107, 171, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:34:30', NULL, 11, NULL),
(53, 'Supervisión-0053', 69, 182, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:35:37', NULL, 11, NULL),
(54, 'Supervisión-0054', 77, 183, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:36:47', NULL, 11, NULL),
(55, 'Supervisión-0055', 58, 185, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:38:02', NULL, 11, NULL),
(56, 'Supervisión-0056', 34, 193, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:40:09', NULL, 11, NULL),
(57, 'Supervisión-0057', 116, 195, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:41:29', NULL, 11, NULL),
(58, 'Supervisión-0058', 23, 198, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:44:03', NULL, 11, NULL),
(59, 'Supervisión-0059', 106, 199, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:46:01', NULL, 11, NULL),
(60, 'Supervisión-0060', 80, 202, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:50:01', NULL, 11, NULL),
(61, 'Supervisión-0061', 104, 211, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:52:30', NULL, 11, NULL),
(62, 'Supervisión-0062', 96, 221, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:53:56', NULL, 11, NULL),
(63, 'Supervisión-0063', 46, 225, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:56:50', NULL, 11, NULL),
(64, 'Supervisión-0064', 112, 234, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 12:58:07', NULL, 11, NULL),
(65, 'Supervisión-0065', 102, 236, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:00:00', NULL, 11, NULL),
(66, 'Supervisión-0066', 35, 239, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:03:12', NULL, 11, NULL),
(67, 'Supervisión-0067', 98, 240, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:05:54', NULL, 11, NULL),
(68, 'Supervisión-0068', 63, 246, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:08:58', NULL, 11, NULL),
(69, 'Supervisión-0069', 95, 247, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:11:56', NULL, 11, NULL),
(70, 'Supervisión-0070', 105, 248, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:14:01', NULL, 11, NULL),
(71, 'Supervisión-0071', 60, 250, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:16:01', NULL, 11, NULL),
(72, 'Supervisión-0072', 51, 257, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:19:11', NULL, 11, NULL),
(73, 'Supervisión-0073', 59, 259, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:21:50', NULL, 11, NULL),
(74, 'Supervisión-0074', 64, 263, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:22:40', NULL, 11, NULL),
(75, 'Supervisión-0075', 89, 267, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:23:58', NULL, 11, NULL),
(76, 'Supervisión-0076', 73, 279, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:25:53', NULL, 11, NULL),
(77, 'Supervisión-0077', 71, 280, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:27:57', NULL, 11, NULL),
(78, 'Supervisión-0078', 87, 281, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:29:23', NULL, 11, NULL),
(79, 'Supervisión-0079', 88, 282, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:32:05', NULL, 11, NULL),
(80, 'Supervisión-0080', 109, 284, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:34:24', NULL, 11, NULL),
(81, 'Supervisión-0081', 75, 285, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:38:20', NULL, 11, NULL),
(82, 'Supervisión-0082', 74, 287, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:41:20', NULL, 11, NULL),
(83, 'Supervisión-0083', 110, 290, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:44:39', NULL, 11, NULL),
(84, 'Supervisión-0084', 108, 296, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:46:24', NULL, 11, NULL),
(85, 'Supervisión-0085', 103, 299, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:47:31', NULL, 11, NULL),
(86, 'Supervisión-0086', 91, 300, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:48:52', NULL, 11, NULL),
(87, 'Supervisión-0087', 90, 301, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:51:01', NULL, 11, NULL),
(88, 'Supervisión-0088', 93, 303, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:52:58', NULL, 11, NULL),
(89, 'Supervisión-0089', 92, 305, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:54:28', NULL, 11, NULL),
(90, 'Supervisión-0090', 101, 307, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:56:02', NULL, 11, NULL),
(91, 'Supervisión-0091', 99, 308, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:57:20', NULL, 11, NULL),
(92, 'Supervisión-0092', 114, 314, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 13:59:47', NULL, 11, NULL),
(93, 'Supervisión-0093', 111, 317, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 14:01:43', NULL, 11, NULL),
(94, 'Supervisión-0094', 115, 321, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 15:13:53', NULL, 11, NULL),
(95, 'Supervisión-0095', 117, 328, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 15:15:23', NULL, 11, NULL),
(96, 'Supervisión-0096', 118, 329, 'INICIO DE IMPLEMENTACION DEL SISTEMA', '1', '2022-03-30 15:17:56', NULL, 11, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecarmadores`
--

CREATE TABLE `tecarmadores` (
  `id_tecArmador` int(11) NOT NULL,
  `tecArmador` varchar(40) NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capM` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tecarmadores`
--

INSERT INTO `tecarmadores` (`id_tecArmador`, `tecArmador`, `fecha_creacion`, `fecha_mod`, `id_capC`, `id_capM`) VALUES
(1, 'N/A', NULL, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecmontadores`
--

CREATE TABLE `tecmontadores` (
  `id_tecMontador` int(11) NOT NULL,
  `tecMontador` varchar(40) NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_capC` int(11) DEFAULT NULL,
  `id_capM` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tecmontadores`
--

INSERT INTO `tecmontadores` (`id_tecMontador`, `tecMontador`, `fecha_creacion`, `fecha_mod`, `id_capC`, `id_capM`) VALUES
(1, 'N/A', NULL, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `test`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `test` (
`id_proyecto` int(11)
,`nProyecto` int(11)
,`nOrden` int(11)
,`comPlacas` char(1)
,`estadoProyectoEliminado` char(1)
,`comSuperPlaca` char(1)
,`nombres` varchar(40)
,`aPaternoCliente` varchar(30)
,`aMaternoCliente` varchar(30)
,`placa` varchar(10)
,`marca` varchar(30)
,`modelo` varchar(50)
,`anio` varchar(4)
,`color` varchar(40)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

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
  `eliminado` char(1) COLLATE utf8mb4_spanish_ci DEFAULT '0',
  `fecha_eliminado` datetime DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `id_captC` int(11) DEFAULT 0,
  `id_captM` int(11) DEFAULT 0,
  `estatus` varchar(7) COLLATE utf8mb4_spanish_ci DEFAULT 'offline',
  `ultima_conexion` datetime DEFAULT NULL,
  `super` tinyint(1) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `aPaterno`, `aMaterno`, `usuario`, `email`, `tel`, `pass`, `admin`, `eliminado`, `fecha_eliminado`, `fecha_creacion`, `fecha_mod`, `id_captC`, `id_captM`, `estatus`, `ultima_conexion`, `super`) VALUES
(1, 'Jose Uriel', 'Guerra', 'Trinidad', 'super', 'a@a.com', '2212096482', 'admin', '1', '0', NULL, '2022-02-27 21:27:25', '2022-02-27 21:27:25', 1, 0, 'Online', '2022-03-30 16:45:22', 1),
(2, 'Sebastian', 'Ortiz', 'Lomeli', 'admin', 'a@a.a', '(000) 000-0000', 'JSOLsistema1', '1', '0', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 'Online', '2022-03-30 13:10:58', 1),
(3, 'Fatima', 'Ocegueda', 'Ramirez', 'fatima_ocegueda', 'servicio.ortiz.trans@gmail.com', '(333) 333-3333', 'fatimaservicio87', '0', '0', NULL, '2022-03-01 11:52:28', '2022-03-01 11:57:26', 2, 2, 'Online', '2022-03-30 17:38:16', 0),
(4, 'Jessica', 'Ruiz', 'Hernández', 'jessica_ruiz', 'jessicarz.jsol@gmail.com', '(333) 333-3333', 'Jessica1910', '0', '0', NULL, '2022-03-05 11:46:20', NULL, 2, 0, 'Online', '2022-03-30 20:00:36', 0),
(5, 'Lucero Engracia', 'Romo', 'Salas', 'lucero_romo', 'luceroromosalas@gmail.com', '(333) 333-3333', 'vico2308', '0', '0', NULL, '2022-03-07 14:05:32', NULL, 2, 0, 'Online', '2022-03-30 11:24:01', 0),
(6, 'Edgar Isaac', 'Ramirez', 'Cano', 'edgar_isaac', 'isaacrmz00@gmail.com', '(333) 333-3333', 'Isaac123456', '0', '0', NULL, '2022-03-10 12:01:30', NULL, 2, 0, 'Online', '2022-03-30 18:06:51', 0),
(7, 'Danira', 'Vallin', 'Espinoza', 'danira_vallin', 'sayetsi666@gmail.com', '(333) 333-3333', 'DRJKVW1n9j', '0', '0', NULL, '2022-03-10 12:37:38', NULL, 2, 0, 'Online', '2022-03-30 16:39:06', 0),
(8, 'Guadalupe', 'Ortiz', 'Cabezas', 'guadalupe_ortiz', 'ortizconvertidores@gmail.com', '(333) 333-3333', 'JSOLctas1', '0', '0', NULL, '2022-03-14 13:17:57', NULL, 2, 0, 'Online', '2022-03-30 17:11:30', 0),
(9, 'Karla Patricia', 'Gonzalez', 'Padilla', 'karla_gonzalez', 'patriciagopadilla0107@gmail.com', '(333) 333-3333', 'Karla0107', '0', '0', NULL, '2022-03-14 16:05:19', NULL, 2, 0, 'Online', '2022-03-30 17:01:25', 0),
(10, 'Ana Lilia', 'Nuñez', 'Ramirez', 'ana_lilia', 'anaservicioortiz@gmail.com', '(333) 333-3333', 'MATTSS', '0', '0', NULL, '2022-03-22 11:34:51', NULL, 2, 0, 'Online', '2022-03-30 16:29:03', 0),
(11, 'Juan Manuel', 'Soto', 'Escalante', 'juan_manuel', 'jsoljuanmanuelsoto@gmail.com', '(333) 333-3333', 'Abilene13', '0', '0', NULL, '2022-03-23 13:58:18', NULL, 2, 0, 'Online', '2022-03-30 17:33:22', 0),
(12, 'Maria de Lourdes', 'Davalos ', 'Gonzalez', 'lourdes_davalos', 'jsollulu@gmail.com', '(333) 333-3333', 'lulusol', '0', '0', NULL, '2022-03-26 11:23:39', NULL, 2, 0, 'Online', '2022-03-28 16:28:22', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id_vehiculo`, `id_marca`, `id_modelo`, `id_anio`, `placa`, `id_color`, `fecha_creacion`, `fecha_mod`, `id_captC`, `id_captM`) VALUES
(1, 5, 141, 2, 'DSFGAGDFSG', 1, '2022-03-01 12:01:53', NULL, 2, 0),
(2, 23, 96, 31, 'JLH2061', 4, '2022-03-01 15:26:24', NULL, 3, 0),
(3, 41, 340, 49, 'JPV3589', 3, '2022-03-01 15:30:00', NULL, 3, 0),
(4, 12, 120, 28, 'GZ2627C', 1, '2022-03-01 15:33:04', NULL, 3, 0),
(5, 32, 377, 39, 'JGF5890', 1, '2022-03-01 17:49:42', NULL, 3, 0),
(6, 12, 100, 31, 'JLU9198', 7, '2022-03-02 08:39:47', NULL, 3, 0),
(7, 10, 429, 25, 'SUELTA', 8, '2022-03-02 09:10:00', NULL, 3, 0),
(8, 12, 110, 38, 'JLA7025', 3, '2022-03-02 09:18:49', NULL, 3, 0),
(9, 32, 379, 35, 'JSZ5718', 1, '2022-03-02 09:34:31', NULL, 3, 0),
(10, 10, 424, 35, 'JCW4881', 3, '2022-03-02 10:19:06', NULL, 3, 0),
(11, 12, 120, 43, 'NO TRAE', 9, '2022-03-02 11:20:46', NULL, 3, 0),
(12, 16, 396, 36, 'JLN7315', 7, '2022-03-02 11:46:13', NULL, 3, 0),
(13, 7, 31, 41, 'JRT2530', 5, '2022-03-02 12:17:54', NULL, 3, 0),
(14, 12, 100, 30, 'ZGX444B', 10, '2022-03-02 15:15:43', NULL, 3, 0),
(15, 10, 431, 41, 'MHE7909', 5, '2022-03-02 16:28:13', NULL, 3, 0),
(16, 32, 379, 42, '161ZCH', 3, '2022-03-03 10:33:57', NULL, 3, 0),
(17, 12, 108, 24, 'JK71204', 3, '2022-03-03 10:46:42', NULL, 3, 0),
(18, 10, 428, 39, 'JMM2551', 2, '2022-03-03 11:06:48', NULL, 3, 0),
(19, 41, 340, 49, 'JPH-80-56', 7, '2022-03-03 11:16:32', NULL, 3, 0),
(20, 32, 379, 35, 'JHM8265', 7, '2022-03-03 13:04:04', NULL, 3, 0),
(21, 12, 114, 30, 'JR61229 ', 1, '2022-03-03 14:16:13', NULL, 3, 0),
(22, 8, 321, 31, 'JDV4204', 3, '2022-03-03 17:38:22', NULL, 3, 0),
(23, 7, 33, 25, 'JD54742 ', 1, '2022-03-04 10:43:17', NULL, 3, 0),
(24, 32, 379, 44, 'JKE8851', 7, '2022-03-04 11:25:55', NULL, 3, 0),
(25, 27, 401, 40, 'JGT7393', 1, '2022-03-04 13:15:59', NULL, 3, 0),
(26, 41, 347, 39, 'JMX1895', 7, '2022-03-04 13:23:13', NULL, 3, 0),
(27, 8, 321, 45, 'JKZ2341', 3, '2022-03-04 14:51:35', NULL, 3, 0),
(28, 7, 35, 37, 'JLE6916', 11, '2022-03-04 17:10:08', NULL, 3, 0),
(29, 12, 119, 34, 'JLG9683', 2, '2022-03-05 09:05:04', NULL, 3, 0),
(30, 23, 93, 26, 'JFL2146', 12, '2022-03-05 09:11:47', NULL, 3, 0),
(31, 27, 403, 39, 'JFU8777', 3, '2022-03-05 09:15:26', NULL, 3, 0),
(32, 12, 108, 28, 'JP25611', 3, '2022-03-05 10:05:08', NULL, 3, 0),
(33, 43, 286, 51, 'JRM6792', 7, '2022-03-05 10:59:44', '2022-03-05 11:07:19', 3, 3),
(34, 8, 320, 22, 'HZX5623', 3, '2022-03-05 12:42:06', NULL, 3, 0),
(35, 32, 370, 51, 'JRX1583', 7, '2022-03-05 12:48:45', NULL, 3, 0),
(36, 23, 99, 36, 'JGJ4563', 13, '2022-03-05 13:03:58', NULL, 3, 0),
(37, 7, 39, 35, 'JPA8291', 7, '2022-03-07 09:12:28', NULL, 3, 0),
(38, 43, 300, 38, 'L82BFU', 4, '2022-03-07 09:28:02', NULL, 3, 0),
(39, 32, 378, 41, 'JHX6424 ', 5, '2022-03-07 09:35:05', NULL, 3, 0),
(40, 16, 396, 38, 'JFY5292', 7, '2022-03-07 09:39:15', NULL, 3, 0),
(41, 12, 102, 26, 'RTF2159 ', 12, '2022-03-07 09:46:10', NULL, 3, 0),
(42, 7, 44, 23, 'JT47286', 3, '2022-03-07 10:05:07', NULL, 3, 0),
(43, 32, 369, 35, 'JHE1021', 14, '2022-03-07 10:26:30', NULL, 3, 0),
(44, 10, 429, 43, 'NVW6277 ', 3, '2022-03-07 10:44:21', NULL, 3, 0),
(45, 8, 325, 33, 'VNK7254', 3, '2022-03-07 12:12:44', NULL, 3, 0),
(46, 10, 432, 49, 'FD5742A', 3, '2022-03-07 12:46:04', NULL, 3, 0),
(47, 41, 340, 47, '8424GMJ', 3, '2022-03-07 13:09:14', NULL, 3, 0),
(48, 16, 396, 35, 'ZEB512A', 2, '2022-03-07 14:40:05', NULL, 3, 0),
(49, 43, 300, 33, 'JKC4351', 12, '2022-03-07 14:50:06', NULL, 3, 0),
(50, 7, 41, 38, 'JX48869', 3, '2022-03-07 16:22:19', NULL, 3, 0),
(51, 8, 325, 37, 'PFK480B', 12, '2022-03-07 16:46:40', NULL, 3, 0),
(52, 7, 33, 30, 'JS68953', 5, '2022-03-07 16:58:53', NULL, 4, 0),
(53, 16, 393, 31, 'JNX4887', 7, '2022-03-08 09:50:38', NULL, 3, 0),
(54, 43, 298, 22, 'HZP7035', 1, '2022-03-08 10:00:21', NULL, 3, 0),
(55, 43, 279, 39, 'JNU5989', 3, '2022-03-08 10:37:10', NULL, 3, 0),
(56, 43, 295, 39, 'HER320C', 5, '2022-03-08 13:07:48', NULL, 3, 0),
(57, 7, 30, 37, 'JLU9872', 1, '2022-03-08 15:01:06', NULL, 3, 0),
(58, 12, 102, 24, 'JFD8176', 2, '2022-03-08 15:32:57', NULL, 3, 0),
(59, 12, 110, 33, 'NDS5990', 1, '2022-03-08 16:02:32', NULL, 4, 0),
(60, 43, 300, 43, 'JKK1725 ', 1, '2022-03-08 16:08:42', NULL, 4, 0),
(61, 28, 245, 36, 'JSZ1110', 7, '2022-03-08 16:15:43', NULL, 4, 0),
(62, 32, 379, 44, 'JKP2091', 3, '2022-03-08 16:20:13', NULL, 4, 0),
(63, 4, 18, 37, 'JSX7511 ', 2, '2022-03-08 16:25:56', '2022-03-30 13:19:11', 4, 2),
(64, 7, 74, 25, 'JGH8154 ', 12, '2022-03-08 16:30:37', NULL, 4, 0),
(65, 8, 321, 39, 'JKX4436 ', 7, '2022-03-08 16:44:02', NULL, 4, 0),
(66, 43, 300, 34, 'JDY9345', 1, '2022-03-08 16:48:44', NULL, 4, 0),
(67, 4, 23, 35, 'HCX829E ', 9, '2022-03-08 16:54:02', NULL, 4, 0),
(68, 8, 321, 30, 'JDE7261 ', 3, '2022-03-08 17:00:39', NULL, 4, 0),
(69, 12, 102, 24, 'JKF5240 ', 12, '2022-03-09 09:22:16', NULL, 4, 0),
(70, 32, 372, 40, 'JHG3856', 4, '2022-03-09 09:24:08', NULL, 3, 0),
(71, 28, 250, 36, 'JHG5036', 7, '2022-03-09 09:27:10', NULL, 4, 0),
(72, 16, 393, 30, 'JGX8485 ', 2, '2022-03-09 09:33:05', NULL, 4, 0),
(73, 3, 1, 45, 'JPD4786', 7, '2022-03-09 09:34:43', NULL, 3, 0),
(74, 40, 227, 38, 'JER9595', 7, '2022-03-09 09:37:26', NULL, 4, 0),
(75, 43, 283, 40, 'JMK9132', 4, '2022-03-09 09:44:18', NULL, 4, 0),
(76, 7, 34, 35, 'JDT2895 ', 14, '2022-03-09 09:55:56', NULL, 4, 0),
(77, 43, 300, 34, 'JND8914', 7, '2022-03-09 09:57:15', NULL, 3, 0),
(78, 8, 318, 36, 'JKL8570 ', 2, '2022-03-09 10:00:23', NULL, 4, 0),
(79, 43, 299, 39, 'JNY3086', 1, '2022-03-09 10:05:36', NULL, 4, 0),
(80, 41, 340, 47, 'JMW9486', 4, '2022-03-09 10:05:46', NULL, 3, 0),
(81, 7, 28, 36, 'JJG6408 ', 12, '2022-03-09 10:21:32', NULL, 4, 0),
(82, 41, 338, 38, 'JPF3660 ', 12, '2022-03-09 10:26:20', NULL, 4, 0),
(83, 12, 460, 38, 'JFP7397 ', 3, '2022-03-09 10:31:09', NULL, 4, 0),
(84, 12, 102, 25, 'GHA398C', 12, '2022-03-09 10:35:31', NULL, 4, 0),
(85, 28, 250, 36, 'JSZ1110', 7, '2022-03-09 11:09:58', NULL, 4, 0),
(86, 12, 102, 30, 'JNE2870', 3, '2022-03-09 11:48:28', NULL, 4, 0),
(87, 7, 39, 44, 'JGT9751', 5, '2022-03-09 11:50:12', NULL, 3, 0),
(88, 12, 110, 39, 'GHR600D ', 7, '2022-03-09 11:52:15', NULL, 4, 0),
(89, 43, 283, 38, 'JSC3772', 14, '2022-03-09 11:56:23', NULL, 4, 0),
(90, 16, 397, 40, 'JGW5798', 7, '2022-03-09 11:57:23', NULL, 3, 0),
(91, 27, 405, 38, 'JFV9630 ', 5, '2022-03-09 12:00:27', NULL, 4, 0),
(92, 10, 423, 34, 'JHB8299 ', 1, '2022-03-09 12:04:30', NULL, 4, 0),
(93, 41, 353, 39, 'JGS5922 ', 3, '2022-03-09 12:11:14', NULL, 4, 0),
(94, 32, 370, 51, 'JRU2828 ', 1, '2022-03-09 12:19:46', NULL, 4, 0),
(95, 10, 428, 24, 'JNX5920', 12, '2022-03-09 12:39:28', NULL, 4, 0),
(96, 32, 379, 48, 'JNL2854', 1, '2022-03-09 12:48:13', NULL, 4, 0),
(97, 25, 146, 46, 'JRR1431 ', 7, '2022-03-09 12:53:28', NULL, 4, 0),
(98, 7, 31, 29, 'HYS9947 ', 4, '2022-03-09 12:53:42', NULL, 3, 0),
(99, 7, 39, 32, 'JGT9751 ', 5, '2022-03-09 14:19:58', NULL, 3, 0),
(100, 32, 377, 36, 'JKJ1922 ', 4, '2022-03-09 14:22:03', NULL, 4, 0),
(101, 12, 113, 31, '497HA', 14, '2022-03-09 14:26:49', NULL, 4, 0),
(102, 7, 54, 22, 'JN53370', 1, '2022-03-09 14:31:07', NULL, 4, 0),
(103, 7, 34, 35, 'PENDIENTES', 9, '2022-03-09 14:35:36', NULL, 4, 0),
(104, 12, 100, 31, 'JAM6721 ', 2, '2022-03-09 14:42:38', NULL, 4, 0),
(106, 37, 262, 47, 'JNU5936', 7, '2022-03-09 14:56:10', NULL, 4, 0),
(107, 30, 177, 33, 'D62BFU', 12, '2022-03-09 15:08:29', NULL, 4, 0),
(108, 32, 379, 37, 'JKT6720', 7, '2022-03-09 15:13:22', NULL, 4, 0),
(109, 7, 37, 41, 'JKE4723', 7, '2022-03-09 15:21:03', NULL, 4, 0),
(110, 32, 378, 38, 'SUELTA', 8, '2022-03-09 15:24:26', NULL, 4, 0),
(111, 43, 291, 35, '773RHB', 2, '2022-03-09 15:28:10', NULL, 4, 0),
(112, 43, 300, 45, 'JKR9516', 7, '2022-03-09 15:31:54', NULL, 4, 0),
(113, 41, 347, 38, '887URH', 2, '2022-03-09 15:35:11', NULL, 4, 0),
(114, 8, 321, 43, 'A36TKV8 ', 7, '2022-03-09 15:39:46', NULL, 4, 0),
(115, 12, 113, 38, 'JAM7309', 7, '2022-03-09 15:52:57', NULL, 3, 0),
(116, 3, 2, 39, 'JLC2520', 7, '2022-03-09 17:15:52', NULL, 3, 0),
(117, 3, 7, 43, 'JLM9742', 7, '2022-03-10 09:27:41', NULL, 3, 0),
(118, 28, 235, 34, 'JNE4689 ', 7, '2022-03-10 09:44:08', NULL, 4, 0),
(119, 32, 370, 48, 'JNW5093', 14, '2022-03-10 09:45:33', NULL, 3, 0),
(120, 12, 120, 24, 'JL29122', 12, '2022-03-10 09:53:29', NULL, 4, 0),
(121, 43, 300, 32, 'JSG7691 ', 2, '2022-03-10 09:58:29', NULL, 4, 0),
(122, 31, 191, 36, 'JSU3676 ', 5, '2022-03-10 10:06:56', NULL, 4, 0),
(123, 4, 8, 39, 'JPL4258 ', 3, '2022-03-10 10:15:09', NULL, 4, 0),
(124, 7, 34, 32, 'HZX6064', 3, '2022-03-10 10:20:01', NULL, 4, 0),
(125, 12, 102, 33, 'JSS4716', 5, '2022-03-10 12:43:57', NULL, 3, 0),
(126, 16, 392, 38, 'JFM5202', 7, '2022-03-10 15:37:14', NULL, 3, 0),
(127, 41, 340, 43, 'JKB6227', 7, '2022-03-10 15:56:58', NULL, 3, 0),
(128, 43, 287, 31, 'JNL9196', 2, '2022-03-10 16:12:16', NULL, 3, 0),
(129, 43, 300, 31, 'JNL9196', 2, '2022-03-10 16:13:12', NULL, 3, 0),
(130, 10, 429, 32, 'JT14063', 7, '2022-03-10 16:24:46', NULL, 3, 0),
(131, 7, 44, 25, 'JVY3769', 1, '2022-03-10 16:31:27', NULL, 3, 0),
(132, 12, 119, 28, 'JJA3584', 3, '2022-03-10 16:40:31', NULL, 3, 0),
(133, 32, 463, 28, 'JX17338', 1, '2022-03-10 16:52:08', NULL, 3, 0),
(134, 10, 424, 35, 'JPG1023', 3, '2022-03-10 17:06:20', NULL, 3, 0),
(135, 12, 131, 26, 'JGJ3089', 3, '2022-03-10 17:19:59', NULL, 3, 0),
(136, 12, 100, 31, 'HZM9611', 2, '2022-03-11 10:39:24', NULL, 3, 0),
(137, 12, 456, 48, 'JNX5545', 7, '2022-03-11 10:41:13', NULL, 4, 0),
(138, 27, 404, 40, 'JHF6593', 14, '2022-03-11 10:47:17', NULL, 4, 0),
(139, 16, 397, 32, 'JDP9718', 9, '2022-03-11 10:52:03', NULL, 4, 0),
(140, 12, 131, 41, 'X63APL ', 3, '2022-03-11 10:56:11', NULL, 4, 0),
(142, 12, 110, 34, 'JKL6757 ', 2, '2022-03-11 11:04:46', NULL, 4, 0),
(143, 12, 442, 28, 'JJA3584 ', 3, '2022-03-11 11:07:55', NULL, 4, 0),
(144, 23, 93, 30, 'JJK6880', 3, '2022-03-11 11:12:38', NULL, 4, 0),
(145, 12, 100, 27, 'JET4322', 12, '2022-03-11 11:15:49', NULL, 4, 0),
(146, 16, 393, 35, 'JKY7908', 2, '2022-03-11 11:19:58', NULL, 4, 0),
(147, 41, 340, 47, 'JSP1334', 3, '2022-03-11 11:37:05', NULL, 4, 0),
(148, 31, 187, 46, 'JRH2482 ', 7, '2022-03-11 11:42:42', NULL, 4, 0),
(149, 12, 120, 28, 'JX16359', 3, '2022-03-11 11:43:22', NULL, 3, 0),
(150, 12, 123, 45, 'JLN5645 ', 3, '2022-03-11 11:48:36', NULL, 4, 0),
(151, 7, 39, 26, 'JEJ4278', 2, '2022-03-11 11:52:05', NULL, 3, 0),
(152, 12, 123, 46, 'JLS3626', 1, '2022-03-11 11:53:36', NULL, 4, 0),
(153, 43, 300, 41, 'PGF887T ', 3, '2022-03-11 12:02:38', NULL, 4, 0),
(154, 41, 353, 45, 'JLA3159 ', 3, '2022-03-11 12:06:17', NULL, 4, 0),
(155, 32, 368, 37, 'JT39373', 7, '2022-03-11 12:13:00', NULL, 4, 0),
(156, 41, 353, 38, 'JDR6895', 7, '2022-03-11 12:39:06', NULL, 3, 0),
(157, 34, 203, 35, '512ZRH', 2, '2022-03-11 13:27:24', NULL, 3, 0),
(158, 12, 120, 3, 'JE57391', 5, '2022-03-11 13:40:28', NULL, 3, 0),
(159, 7, 35, 38, 'UWA105V ', 7, '2022-03-11 13:47:29', NULL, 3, 0),
(160, 43, 300, 31, 'JMP4432 ', 2, '2022-03-11 14:11:33', NULL, 4, 0),
(161, 12, 120, 28, ' JX16359 ', 3, '2022-03-11 14:15:01', NULL, 4, 0),
(162, 12, 100, 30, 'PENDIENTES', 12, '2022-03-11 16:08:17', NULL, 4, 0),
(163, 32, 379, 44, 'NRH4756', 3, '2022-03-11 16:12:42', NULL, 4, 0),
(164, 32, 374, 41, 'JKK8417 ', 3, '2022-03-11 16:21:18', NULL, 4, 0),
(165, 43, 300, 31, 'JMM1977 ', 3, '2022-03-11 16:26:09', NULL, 4, 0),
(166, 43, 283, 39, 'HBZ66ID ', 9, '2022-03-11 16:29:56', NULL, 4, 0),
(167, 12, 123, 44, 'JSZ5339 ', 9, '2022-03-11 16:34:26', NULL, 4, 0),
(168, 43, 300, 35, 'N84AWG ', 2, '2022-03-11 16:38:46', NULL, 4, 0),
(169, 16, 396, 39, 'F71BCU ', 5, '2022-03-11 16:42:28', NULL, 4, 0),
(170, 43, 300, 41, 'JLA6460', 3, '2022-03-11 16:45:38', NULL, 3, 0),
(171, 12, 102, 26, 'JFH2275', 14, '2022-03-11 17:05:06', NULL, 4, 0),
(172, 7, 28, 41, 'JHH 9238 ', 7, '2022-03-11 17:08:44', NULL, 4, 0),
(173, 16, 397, 34, '851UVM', 5, '2022-03-11 17:13:25', NULL, 4, 0),
(174, 12, 120, 23, 'JV58028 ', 3, '2022-03-11 17:16:38', NULL, 4, 0),
(175, 12, 120, 49, 'JV79901', 3, '2022-03-12 09:05:07', NULL, 4, 0),
(176, 43, 300, 36, 'JKF3242', 1, '2022-03-12 09:12:01', NULL, 4, 0),
(177, 7, 37, 44, 'JKX5314', 3, '2022-03-12 09:12:53', NULL, 3, 0),
(178, 41, 353, 42, 'JRR3267', 7, '2022-03-12 09:20:05', NULL, 4, 0),
(179, 12, 100, 31, 'JAJ4174', 2, '2022-03-12 09:24:05', '2022-03-24 16:48:11', 4, 2),
(180, 7, 35, 38, 'JFP9943', 1, '2022-03-12 09:25:15', NULL, 3, 0),
(181, 27, 402, 42, 'JJH8134 ', 3, '2022-03-12 09:28:43', NULL, 4, 0),
(182, 7, 39, 33, '179YZU', 7, '2022-03-12 09:32:48', NULL, 4, 0),
(183, 12, 120, 49, 'JV79900 ', 3, '2022-03-12 09:41:11', NULL, 4, 0),
(184, 43, 286, 48, 'JNA2560 ', 4, '2022-03-12 09:43:20', NULL, 4, 0),
(185, 41, 349, 44, 'JKK2332', 2, '2022-03-12 09:50:24', NULL, 3, 0),
(186, 26, 210, 37, 'ZAC437B', 3, '2022-03-12 10:00:31', NULL, 3, 0),
(187, 7, 42, 45, 'UKJ807B', 7, '2022-03-12 11:26:19', NULL, 3, 0),
(188, 32, 376, 42, 'JKN8911', 2, '2022-03-12 11:29:50', NULL, 3, 0),
(189, 12, 123, 45, 'JLA7851', 7, '2022-03-12 13:08:54', NULL, 3, 0),
(190, 3, 1, 44, 'JTD3716', 3, '2022-03-12 13:20:51', NULL, 3, 0),
(191, 43, 300, 31, 'JAP8665', 1, '2022-03-14 08:45:30', NULL, 3, 0),
(192, 19, 179, 31, 'NUL3577', 5, '2022-03-14 10:26:26', NULL, 3, 0),
(193, 32, 464, 44, 'RGV2625', 14, '2022-03-14 11:39:22', NULL, 3, 0),
(194, 33, 465, 35, 'AEM4042', 12, '2022-03-14 12:21:27', NULL, 3, 0),
(195, 23, 99, 35, 'JKZ5195', 5, '2022-03-14 12:37:44', NULL, 3, 0),
(196, 43, 300, 43, 'JNY9150 ', 7, '2022-03-14 14:39:12', NULL, 3, 0),
(197, 10, 429, 28, 'JT23529 ', 7, '2022-03-14 14:44:53', NULL, 3, 0),
(198, 27, 401, 42, 'JJD6840 ', 1, '2022-03-14 14:50:39', NULL, 3, 0),
(199, 23, 96, 32, 'JJK6569 ', 3, '2022-03-14 14:56:42', NULL, 3, 0),
(200, 37, 262, 44, 'JJZ2183 ', 5, '2022-03-14 15:00:48', NULL, 3, 0),
(201, 7, 30, 37, 'JED7156', 3, '2022-03-14 15:04:35', NULL, 3, 0),
(202, 43, 300, 35, 'JDB6406 ', 7, '2022-03-14 15:09:00', NULL, 3, 0),
(203, 32, 371, 38, 'JSF1499 ', 4, '2022-03-14 15:19:45', NULL, 3, 0),
(204, 7, 466, 38, 'JSW3872 ', 7, '2022-03-14 15:30:54', NULL, 3, 0),
(205, 43, 300, 39, 'EKS9116', 3, '2022-03-14 16:59:21', NULL, 3, 0),
(206, 32, 379, 39, 'JMW4110', 3, '2022-03-14 17:21:02', NULL, 3, 0),
(207, 12, 113, 36, 'JPR8807', 15, '2022-03-14 17:30:04', NULL, 3, 0),
(208, 23, 89, 29, ' JJC3315 ', 5, '2022-03-14 17:34:41', NULL, 3, 0),
(209, 7, 43, 37, 'JEU8505 ', 7, '2022-03-14 17:40:20', NULL, 3, 0),
(210, 8, 325, 43, 'JPG3018', 7, '2022-03-14 17:43:11', NULL, 3, 0),
(211, 37, 261, 39, 'JJT6470', 4, '2022-03-15 09:20:18', NULL, 3, 0),
(212, 12, 456, 48, 'JPL6907', 5, '2022-03-15 09:38:10', NULL, 3, 0),
(213, 7, 45, 44, 'JSU4066', 7, '2022-03-15 11:41:33', NULL, 3, 0),
(214, 7, 467, 29, 'JGP2522', 14, '2022-03-15 11:51:16', NULL, 3, 0),
(215, 16, 393, 35, 'JKY7908', 3, '2022-03-15 12:31:35', NULL, 3, 0),
(216, 10, 432, 27, 'JM65850', 3, '2022-03-15 15:50:21', NULL, 3, 0),
(217, 41, 353, 23, 'JHM1292', 4, '2022-03-15 15:54:59', NULL, 3, 0),
(218, 7, 39, 37, 'JFD7658', 7, '2022-03-15 16:59:30', NULL, 3, 0),
(219, 7, 40, 51, 'JRU2928', 7, '2022-03-16 11:11:16', NULL, 3, 0),
(220, 14, 270, 34, 'DZ91009', 4, '2022-03-16 11:54:42', NULL, 3, 0),
(221, 12, 109, 33, 'JSW7299', 7, '2022-03-16 12:00:14', NULL, 3, 0),
(222, 12, 129, 48, 'SUELTA', 8, '2022-03-16 12:09:09', NULL, 3, 0),
(223, 20, 434, 53, 'SUELTA', 8, '2022-03-16 12:21:36', NULL, 3, 0),
(224, 12, 120, 23, 'SUELTA', 8, '2022-03-16 12:26:27', NULL, 3, 0),
(225, 23, 89, 29, 'JJC3315', 5, '2022-03-16 12:38:55', NULL, 3, 0),
(226, 7, 35, 37, 'JEU8505 ', 7, '2022-03-16 12:57:03', NULL, 3, 0),
(227, 8, 325, 33, 'JPG3018', 7, '2022-03-16 13:15:21', NULL, 3, 0),
(228, 8, 318, 31, 'JCH1080', 7, '2022-03-16 13:32:15', NULL, 3, 0),
(229, 12, 109, 39, 'JKV8211', 3, '2022-03-16 13:57:38', NULL, 3, 0),
(230, 7, 33, 45, 'N96602', 3, '2022-03-16 15:45:33', NULL, 3, 0),
(231, 12, 121, 31, 'JBM3649', 7, '2022-03-16 17:06:27', NULL, 3, 0),
(232, 12, 456, 47, 'JMU3068', 14, '2022-03-17 09:35:26', NULL, 3, 0),
(233, 23, 96, 34, 'JKL7874', 14, '2022-03-17 10:37:12', NULL, 3, 0),
(234, 23, 93, 30, 'JJA3076', 1, '2022-03-17 11:21:52', NULL, 3, 0),
(235, 23, 89, 39, 'JFY8799', 7, '2022-03-17 11:41:01', '2022-03-30 13:18:33', 3, 2),
(236, 10, 422, 38, 'JEN8286 ', 5, '2022-03-17 12:08:22', NULL, 3, 0),
(237, 12, 102, 27, '176HB', 3, '2022-03-17 13:51:51', NULL, 3, 0),
(238, 12, 461, 17, 'JBX4377', 7, '2022-03-17 16:33:13', NULL, 3, 0),
(239, 12, 120, 31, 'JK84510', 4, '2022-03-17 16:39:22', NULL, 3, 0),
(240, 7, 40, 51, 'JSD4056', 3, '2022-03-18 09:11:35', NULL, 3, 0),
(241, 32, 464, 45, 'JLR2920', 7, '2022-03-18 09:24:01', NULL, 3, 0),
(242, 41, 353, 35, ' SNX8119', 4, '2022-03-18 09:54:11', NULL, 3, 0),
(243, 31, 183, 44, 'JSX6688', 7, '2022-03-18 10:56:26', NULL, 3, 0),
(244, 12, 102, 42, 'MHH8358', 3, '2022-03-18 13:28:29', NULL, 3, 0),
(245, 41, 345, 48, 'JTE6628', 7, '2022-03-19 09:23:41', NULL, 3, 0),
(246, 23, 93, 31, 'JMT3799 ', 3, '2022-03-19 10:18:06', NULL, 3, 0),
(247, 8, 321, 33, 'JKF4779', 3, '2022-03-19 12:19:35', NULL, 3, 0),
(248, 41, 347, 36, 'JSH8877', 3, '2022-03-19 12:22:27', NULL, 3, 0),
(249, 7, 51, 35, 'JW38311', 3, '2022-03-22 09:11:29', NULL, 3, 0),
(250, 23, 87, 39, 'JGB6920', 13, '2022-03-22 09:20:31', NULL, 3, 0),
(251, 12, 100, 30, 'JPZ6059', 7, '2022-03-22 09:27:55', NULL, 3, 0),
(252, 32, 379, 36, 'JGL6083', 7, '2022-03-22 10:04:22', NULL, 3, 0),
(253, 7, 468, 30, 'JMM6108', 4, '2022-03-22 10:18:31', NULL, 3, 0),
(254, 43, 469, 37, 'JPA2867', 4, '2022-03-22 10:22:12', NULL, 3, 0),
(255, 12, 100, 27, 'JFM6849 ', 1, '2022-03-22 12:13:31', NULL, 3, 0),
(256, 16, 394, 36, 'FBF125A', 3, '2022-03-22 12:17:15', NULL, 3, 0),
(257, 7, 55, 26, 'JP02260', 12, '2022-03-22 17:14:15', NULL, 3, 0),
(258, 7, 33, 26, 'JP02260', 12, '2022-03-22 17:15:25', NULL, 3, 0),
(259, 8, 318, 32, 'JDV9296', 7, '2022-03-22 17:21:14', NULL, 3, 0),
(260, 10, 423, 30, 'JHX9628', 2, '2022-03-22 17:42:16', NULL, 3, 0),
(261, 7, 470, 20, 'JG27319', 3, '2022-03-23 11:08:55', NULL, 3, 0),
(262, 7, 52, 37, 'HYX8020 ', 3, '2022-03-23 11:14:02', NULL, 3, 0),
(263, 7, 66, 37, 'JEU1684', 4, '2022-03-23 11:18:57', NULL, 3, 0),
(264, 32, 377, 37, 'JEE4605', 3, '2022-03-23 11:43:05', NULL, 3, 0),
(265, 4, 21, 29, 'HYY3673', 7, '2022-03-23 12:05:46', NULL, 3, 0),
(266, 32, 370, 51, 'JSB2515', 3, '2022-03-23 12:20:03', NULL, 3, 0),
(267, 12, 100, 30, 'JNW4427', 12, '2022-03-23 12:32:24', NULL, 3, 0),
(268, 23, 93, 45, 'JLE2055', 7, '2022-03-23 13:17:11', NULL, 3, 0),
(269, 12, 114, 39, 'U42ABH', 14, '2022-03-23 15:53:42', NULL, 3, 0),
(270, 41, 340, 46, 'JMC7934', 7, '2022-03-24 09:04:15', NULL, 3, 0),
(271, 8, 321, 27, 'JFN9676', 7, '2022-03-24 09:23:47', NULL, 3, 0),
(272, 12, 126, 43, 'PRB197A', 2, '2022-03-24 09:32:02', NULL, 3, 0),
(273, 36, 471, 25, 'JFN7386', 3, '2022-03-24 09:43:34', NULL, 3, 0),
(274, 16, 396, 35, '956SDN', 16, '2022-03-24 11:17:01', NULL, 3, 0),
(275, 36, 172, 36, 'JD69394', 7, '2022-03-24 12:04:35', NULL, 3, 0),
(276, 43, 300, 42, 'JPA8278', 7, '2022-03-24 13:10:59', NULL, 3, 0),
(277, 43, 300, 23, 'JHP9450', 1, '2022-03-24 13:28:29', NULL, 3, 0),
(278, 43, 300, 40, 'JJG4552', 5, '2022-03-24 15:08:02', NULL, 3, 0),
(279, 10, 421, 35, 'JDF8770', 12, '2022-03-24 16:35:31', NULL, 3, 0),
(280, 12, 453, 34, 'UO03010 ', 1, '2022-03-24 16:55:42', NULL, 3, 0),
(281, 43, 300, 43, 'JLR7267 ', 3, '2022-03-25 08:52:25', '2022-03-30 13:17:42', 3, 2),
(282, 43, 300, 37, 'JNW6931', 3, '2022-03-25 10:31:34', NULL, 3, 0),
(283, 34, 472, 38, 'PFP061R', 7, '2022-03-25 11:37:03', NULL, 3, 0),
(284, 10, 424, 32, 'JLC5024', 2, '2022-03-25 12:19:49', NULL, 3, 0),
(285, 12, 120, 28, 'JN66815', 1, '2022-03-25 15:50:34', NULL, 3, 0),
(286, 12, 460, 45, 'JLC4905', 7, '2022-03-25 16:42:02', NULL, 3, 0),
(287, 12, 114, 28, 'JN59849 ', 17, '2022-03-26 08:44:31', NULL, 3, 0),
(288, 16, 396, 30, 'JKC5253', 1, '2022-03-26 09:18:59', NULL, 3, 0),
(289, 37, 262, 44, 'JSU6985', 7, '2022-03-26 09:24:10', NULL, 3, 0),
(290, 7, 30, 38, 'JRN6709', 14, '2022-03-26 09:43:52', NULL, 3, 0),
(291, 23, 93, 26, 'JFS1471', 1, '2022-03-26 11:09:40', NULL, 3, 0),
(292, 43, 300, 43, '154XTX', 3, '2022-03-26 11:14:09', NULL, 3, 0),
(293, 12, 456, 48, 'JNG8913', 7, '2022-03-26 12:22:32', NULL, 3, 0),
(294, 12, 117, 30, 'JLY4091', 5, '2022-03-28 08:40:55', NULL, 3, 0),
(295, 32, 372, 41, 'JHK8701', 14, '2022-03-28 10:11:36', NULL, 3, 0),
(296, 43, 287, 34, 'JLS5093', 2, '2022-03-28 11:52:39', NULL, 3, 0),
(297, 43, 300, 34, 'JLS5093', 2, '2022-03-28 11:53:38', NULL, 3, 0),
(298, 7, 31, 35, 'HYX6649', 3, '2022-03-28 11:58:56', NULL, 3, 0),
(299, 29, 317, 30, 'JMH4815', 3, '2022-03-28 12:13:06', NULL, 3, 0),
(300, 12, 102, 28, 'JGE3741', 4, '2022-03-28 12:38:46', NULL, 3, 0),
(301, 8, 318, 30, ' JDB7058', 12, '2022-03-28 15:08:11', '2022-03-30 13:21:43', 3, 2),
(302, 16, 396, 28, 'JFE6753', 5, '2022-03-29 09:25:40', NULL, 3, 0),
(303, 32, 464, 37, 'JKX9739', 3, '2022-03-29 09:49:28', '2022-03-30 13:20:40', 3, 2),
(304, 7, 28, 35, 'HYX6446 ', 7, '2022-03-29 10:04:00', NULL, 3, 0),
(305, 43, 299, 33, 'JLZ9367', 18, '2022-03-29 10:09:55', NULL, 3, 0),
(306, 7, 33, 28, 'SUELTA', 8, '2022-03-29 10:13:39', NULL, 3, 0),
(307, 7, 40, 46, 'YYV475B', 14, '2022-03-29 11:01:19', NULL, 3, 0),
(308, 12, 102, 33, 'JJP4901', 4, '2022-03-29 12:01:37', NULL, 3, 0),
(309, 43, 286, 50, 'JRD9128', 3, '2022-03-29 13:01:57', NULL, 3, 0),
(310, 27, 405, 47, 'JHP9966', 5, '2022-03-29 16:57:01', NULL, 3, 0),
(311, 7, 28, 35, 'JRC2885', 7, '2022-03-30 08:45:59', NULL, 3, 0),
(312, 43, 300, 43, 'SKE7597 ', 3, '2022-03-30 08:54:27', NULL, 3, 0),
(313, 41, 353, 47, 'JDP2069', 4, '2022-03-30 09:13:17', NULL, 3, 0),
(314, 43, 300, 31, 'JKY7162', 5, '2022-03-30 09:18:40', NULL, 3, 0),
(315, 43, 300, 37, 'JEZ2135', 19, '2022-03-30 10:18:14', NULL, 3, 0),
(316, 32, 377, 50, 'JSG3421', 7, '2022-03-30 10:33:28', NULL, 3, 0),
(317, 38, 157, 34, 'JMU5965', 7, '2022-03-30 15:50:39', NULL, 3, 0),
(318, 10, 423, 35, 'JFZ1994', 1, '2022-03-30 15:57:50', NULL, 3, 0);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `verificacion`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `verificacion` (
`id_proyecto` int(11)
,`nProyecto` int(11)
,`nOrden` int(11)
,`comVerifDiariaVeh` char(1)
,`estadoProyectoEliminado` char(1)
,`comSuperVerifDiariaVeh` char(1)
,`nombreCliente` varchar(40)
,`aPaternoCliente` varchar(30)
,`aMaternoCliente` varchar(30)
,`placa` varchar(10)
,`marca` varchar(30)
,`modelo` varchar(50)
,`anio` varchar(4)
,`color` varchar(40)
,`linkComVerifDiariaVeh` text
,`fecha_creacion` datetime
,`id_comverifdiariaveh` int(11)
,`nombres` varchar(40)
,`aPaterno` varchar(30)
,`aMaterno` varchar(30)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vplacas`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vplacas` (
`id_proyecto` int(11)
,`nProyecto` int(11)
,`nOrden` int(11)
,`comPlacas` char(1)
,`estadoProyectoEliminado` char(1)
,`comSuperPlaca` char(1)
,`nombres` varchar(40)
,`aPaternoCliente` varchar(30)
,`aMaternoCliente` varchar(30)
,`placa` varchar(10)
,`marca` varchar(30)
,`modelo` varchar(50)
,`anio` varchar(4)
,`color` varchar(40)
,`linkComPlaca` text
,`fecha_creacion` datetime
,`UPN` varchar(40)
,`UPP` varchar(30)
,`UPM` varchar(30)
,`textSupervision` varchar(200)
,`CSF` datetime
,`UCSN` varchar(40)
,`UCSP` varchar(30)
,`UCSM` varchar(30)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `test`
--
DROP TABLE IF EXISTS `test`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `test`  AS SELECT `p`.`id_proyecto` AS `id_proyecto`, `p`.`nProyecto` AS `nProyecto`, `p`.`nOrden` AS `nOrden`, `p`.`comPlacas` AS `comPlacas`, `p`.`estadoProyectoEliminado` AS `estadoProyectoEliminado`, `p`.`comSuperPlaca` AS `comSuperPlaca`, `c`.`nombres` AS `nombres`, `c`.`aPaternoCliente` AS `aPaternoCliente`, `c`.`aMaternoCliente` AS `aMaternoCliente`, `v`.`placa` AS `placa`, `m`.`marca` AS `marca`, `mo`.`modelo` AS `modelo`, `a`.`anio` AS `anio`, `co`.`color` AS `color` FROM ((((((`proyectos` `p` join `vehiculos` `v` on(`p`.`id_vehiculo` = `v`.`id_vehiculo`)) join `colores` `co` on(`v`.`id_color` = `co`.`id_color`)) join `marcas` `m` on(`v`.`id_marca` = `m`.`id_marca`)) join `modelos` `mo` on(`v`.`id_modelo` = `mo`.`id_modelo`)) join `anios` `a` on(`v`.`id_anio` = `a`.`id_anio`)) join `clientes` `c` on(`p`.`id_cliente` = `c`.`id_cliente`)) ORDER BY `p`.`nProyecto` DESC ;

-- --------------------------------------------------------

--
-- Estructura para la vista `verificacion`
--
DROP TABLE IF EXISTS `verificacion`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `verificacion`  AS SELECT `p`.`id_proyecto` AS `id_proyecto`, `p`.`nProyecto` AS `nProyecto`, `p`.`nOrden` AS `nOrden`, `p`.`comVerifDiariaVeh` AS `comVerifDiariaVeh`, `p`.`estadoProyectoEliminado` AS `estadoProyectoEliminado`, `p`.`comSuperVerifDiariaVeh` AS `comSuperVerifDiariaVeh`, `c`.`nombres` AS `nombreCliente`, `c`.`aPaternoCliente` AS `aPaternoCliente`, `c`.`aMaternoCliente` AS `aMaternoCliente`, `v`.`placa` AS `placa`, `m`.`marca` AS `marca`, `mo`.`modelo` AS `modelo`, `a`.`anio` AS `anio`, `co`.`color` AS `color`, `cv`.`linkComVerifDiariaVeh` AS `linkComVerifDiariaVeh`, `cv`.`fecha_creacion` AS `fecha_creacion`, `cv`.`id_comverifdiariaveh` AS `id_comverifdiariaveh`, `u`.`nombres` AS `nombres`, `u`.`aPaterno` AS `aPaterno`, `u`.`aMaterno` AS `aMaterno` FROM ((((((((`proyectos` `p` join `vehiculos` `v` on(`p`.`id_vehiculo` = `v`.`id_vehiculo`)) join `colores` `co` on(`v`.`id_color` = `co`.`id_color`)) join `marcas` `m` on(`v`.`id_marca` = `m`.`id_marca`)) join `modelos` `mo` on(`v`.`id_modelo` = `mo`.`id_modelo`)) join `anios` `a` on(`v`.`id_anio` = `a`.`id_anio`)) join `clientes` `c` on(`p`.`id_cliente` = `c`.`id_cliente`)) left join `comverifdiariaveh` `cv` on(`p`.`id_proyecto` = `cv`.`id_proyecto`)) left join `usuarios` `u` on(`cv`.`id_capC` = `u`.`id_usuario`)) WHERE `p`.`proyectoActivo` = 1 AND `p`.`estadoProyectoEliminado` = 1 OR `p`.`registroSolicitud` = 1 OR `p`.`altaProyecto` = 1 ORDER BY `p`.`nProyecto` DESC ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vplacas`
--
DROP TABLE IF EXISTS `vplacas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vplacas`  AS SELECT `p`.`id_proyecto` AS `id_proyecto`, `p`.`nProyecto` AS `nProyecto`, `p`.`nOrden` AS `nOrden`, `p`.`comPlacas` AS `comPlacas`, `p`.`estadoProyectoEliminado` AS `estadoProyectoEliminado`, `p`.`comSuperPlaca` AS `comSuperPlaca`, `c`.`nombres` AS `nombres`, `c`.`aPaternoCliente` AS `aPaternoCliente`, `c`.`aMaternoCliente` AS `aMaternoCliente`, `v`.`placa` AS `placa`, `m`.`marca` AS `marca`, `mo`.`modelo` AS `modelo`, `a`.`anio` AS `anio`, `co`.`color` AS `color`, `cp`.`linkComPlaca` AS `linkComPlaca`, `cp`.`fecha_creacion` AS `fecha_creacion`, `up`.`nombres` AS `UPN`, `up`.`aPaterno` AS `UPP`, `up`.`aMaterno` AS `UPM`, `cs`.`textSupervision` AS `textSupervision`, `cs`.`fecha_registro` AS `CSF`, `ucs`.`nombres` AS `UCSN`, `ucs`.`aPaterno` AS `UCSP`, `ucs`.`aMaterno` AS `UCSM` FROM ((((((((((`proyectos` `p` join `vehiculos` `v` on(`p`.`id_vehiculo` = `v`.`id_vehiculo`)) join `colores` `co` on(`v`.`id_color` = `co`.`id_color`)) join `marcas` `m` on(`v`.`id_marca` = `m`.`id_marca`)) join `modelos` `mo` on(`v`.`id_modelo` = `mo`.`id_modelo`)) join `anios` `a` on(`v`.`id_anio` = `a`.`id_anio`)) join `clientes` `c` on(`p`.`id_cliente` = `c`.`id_cliente`)) left join `complacas` `cp` on(`p`.`id_proyecto` = `cp`.`id_proyecto`)) left join `usuarios` `up` on(`cp`.`id_capC` = `up`.`id_usuario`)) left join `comsupervision` `cs` on(`p`.`id_proyecto` = `cs`.`id_proyecto`)) left join `usuarios` `ucs` on(`cs`.`id_capC` = `ucs`.`id_usuario`)) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acceso`
--
ALTER TABLE `acceso`
  ADD PRIMARY KEY (`id_acceso`);

--
-- Indices de la tabla `agentes`
--
ALTER TABLE `agentes`
  ADD PRIMARY KEY (`id_agente`);

--
-- Indices de la tabla `agentesgr`
--
ALTER TABLE `agentesgr`
  ADD PRIMARY KEY (`id_agentegr`);

--
-- Indices de la tabla `agentesn`
--
ALTER TABLE `agentesn`
  ADD PRIMARY KEY (`id_agenten`);

--
-- Indices de la tabla `anios`
--
ALTER TABLE `anios`
  ADD PRIMARY KEY (`id_anio`);

--
-- Indices de la tabla `asesores`
--
ALTER TABLE `asesores`
  ADD PRIMARY KEY (`id_asesor`);

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`id_bitacora`);

--
-- Indices de la tabla `capvalorventas`
--
ALTER TABLE `capvalorventas`
  ADD PRIMARY KEY (`id_capValorVentas`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `colores`
--
ALTER TABLE `colores`
  ADD PRIMARY KEY (`id_color`);

--
-- Indices de la tabla `comasesor`
--
ALTER TABLE `comasesor`
  ADD PRIMARY KEY (`id_comAsesor`);

--
-- Indices de la tabla `comclientes`
--
ALTER TABLE `comclientes`
  ADD PRIMARY KEY (`id_comCliente`);

--
-- Indices de la tabla `comdocufirm`
--
ALTER TABLE `comdocufirm`
  ADD PRIMARY KEY (`id_comDocuFirm`);

--
-- Indices de la tabla `comimagenes`
--
ALTER TABLE `comimagenes`
  ADD PRIMARY KEY (`id_comImagenes`);

--
-- Indices de la tabla `comkilometrajes`
--
ALTER TABLE `comkilometrajes`
  ADD PRIMARY KEY (`id_comKm`);

--
-- Indices de la tabla `complacas`
--
ALTER TABLE `complacas`
  ADD PRIMARY KEY (`id_complaca`);

--
-- Indices de la tabla `comsupervision`
--
ALTER TABLE `comsupervision`
  ADD PRIMARY KEY (`id_comSupervision`);

--
-- Indices de la tabla `comverifdiariaveh`
--
ALTER TABLE `comverifdiariaveh`
  ADD PRIMARY KEY (`id_comverifdiariaveh`);

--
-- Indices de la tabla `desglocecodid`
--
ALTER TABLE `desglocecodid`
  ADD PRIMARY KEY (`id_desgloceCodId`);

--
-- Indices de la tabla `desglocecodidbitacora`
--
ALTER TABLE `desglocecodidbitacora`
  ADD PRIMARY KEY (`id_desgloceCodId`);

--
-- Indices de la tabla `formapagos`
--
ALTER TABLE `formapagos`
  ADD PRIMARY KEY (`id_formaPago`);

--
-- Indices de la tabla `linkvideos`
--
ALTER TABLE `linkvideos`
  ADD PRIMARY KEY (`id_linkVideo`);

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
-- Indices de la tabla `nproyectos`
--
ALTER TABLE `nproyectos`
  ADD PRIMARY KEY (`id_nProyecto`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id_permiso`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id_proyecto`);

--
-- Indices de la tabla `registroalta`
--
ALTER TABLE `registroalta`
  ADD PRIMARY KEY (`id_regAlta`);

--
-- Indices de la tabla `registroaltabitacora`
--
ALTER TABLE `registroaltabitacora`
  ADD PRIMARY KEY (`id_regAlta`);

--
-- Indices de la tabla `registrocodidenti`
--
ALTER TABLE `registrocodidenti`
  ADD PRIMARY KEY (`id_regcodidenti`);

--
-- Indices de la tabla `registrocodidentibitacora`
--
ALTER TABLE `registrocodidentibitacora`
  ADD PRIMARY KEY (`id_regcodidenti`);

--
-- Indices de la tabla `registrosolicitud`
--
ALTER TABLE `registrosolicitud`
  ADD PRIMARY KEY (`id_regSolicitud`);

--
-- Indices de la tabla `registrosolicitudbitacora`
--
ALTER TABLE `registrosolicitudbitacora`
  ADD PRIMARY KEY (`id_regSolicitud`);

--
-- Indices de la tabla `repvalvenaltavsvalcodid`
--
ALTER TABLE `repvalvenaltavsvalcodid`
  ADD PRIMARY KEY (`id_repVVAvsVCI`);

--
-- Indices de la tabla `repvalveninicialvsvalvenalta`
--
ALTER TABLE `repvalveninicialvsvalvenalta`
  ADD PRIMARY KEY (`id_repVVIvsVVA`);

--
-- Indices de la tabla `semanas`
--
ALTER TABLE `semanas`
  ADD PRIMARY KEY (`id_semana`);

--
-- Indices de la tabla `semanascobro`
--
ALTER TABLE `semanascobro`
  ADD PRIMARY KEY (`id_semanaCobro`);

--
-- Indices de la tabla `supervisado`
--
ALTER TABLE `supervisado`
  ADD PRIMARY KEY (`id_supervisado`);

--
-- Indices de la tabla `supervisadobitacora`
--
ALTER TABLE `supervisadobitacora`
  ADD PRIMARY KEY (`id_supervisado`);

--
-- Indices de la tabla `tecarmadores`
--
ALTER TABLE `tecarmadores`
  ADD PRIMARY KEY (`id_tecArmador`);

--
-- Indices de la tabla `tecmontadores`
--
ALTER TABLE `tecmontadores`
  ADD PRIMARY KEY (`id_tecMontador`);

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
-- AUTO_INCREMENT de la tabla `acceso`
--
ALTER TABLE `acceso`
  MODIFY `id_acceso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=463;

--
-- AUTO_INCREMENT de la tabla `agentes`
--
ALTER TABLE `agentes`
  MODIFY `id_agente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `agentesgr`
--
ALTER TABLE `agentesgr`
  MODIFY `id_agentegr` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `agentesn`
--
ALTER TABLE `agentesn`
  MODIFY `id_agenten` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `anios`
--
ALTER TABLE `anios`
  MODIFY `id_anio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `asesores`
--
ALTER TABLE `asesores`
  MODIFY `id_asesor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id_bitacora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=479;

--
-- AUTO_INCREMENT de la tabla `capvalorventas`
--
ALTER TABLE `capvalorventas`
  MODIFY `id_capValorVentas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=317;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=317;

--
-- AUTO_INCREMENT de la tabla `colores`
--
ALTER TABLE `colores`
  MODIFY `id_color` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `comasesor`
--
ALTER TABLE `comasesor`
  MODIFY `id_comAsesor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comclientes`
--
ALTER TABLE `comclientes`
  MODIFY `id_comCliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comdocufirm`
--
ALTER TABLE `comdocufirm`
  MODIFY `id_comDocuFirm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comimagenes`
--
ALTER TABLE `comimagenes`
  MODIFY `id_comImagenes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `comkilometrajes`
--
ALTER TABLE `comkilometrajes`
  MODIFY `id_comKm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `complacas`
--
ALTER TABLE `complacas`
  MODIFY `id_complaca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT de la tabla `comsupervision`
--
ALTER TABLE `comsupervision`
  MODIFY `id_comSupervision` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `comverifdiariaveh`
--
ALTER TABLE `comverifdiariaveh`
  MODIFY `id_comverifdiariaveh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `desglocecodid`
--
ALTER TABLE `desglocecodid`
  MODIFY `id_desgloceCodId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT de la tabla `desglocecodidbitacora`
--
ALTER TABLE `desglocecodidbitacora`
  MODIFY `id_desgloceCodId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT de la tabla `formapagos`
--
ALTER TABLE `formapagos`
  MODIFY `id_formaPago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `linkvideos`
--
ALTER TABLE `linkvideos`
  MODIFY `id_linkVideo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marca` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `modelos`
--
ALTER TABLE `modelos`
  MODIFY `id_modelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=473;

--
-- AUTO_INCREMENT de la tabla `modulos`
--
ALTER TABLE `modulos`
  MODIFY `id_modulo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nproyectos`
--
ALTER TABLE `nproyectos`
  MODIFY `id_nProyecto` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11691;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_permiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=343;

--
-- AUTO_INCREMENT de la tabla `registroalta`
--
ALTER TABLE `registroalta`
  MODIFY `id_regAlta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT de la tabla `registroaltabitacora`
--
ALTER TABLE `registroaltabitacora`
  MODIFY `id_regAlta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT de la tabla `registrocodidenti`
--
ALTER TABLE `registrocodidenti`
  MODIFY `id_regcodidenti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT de la tabla `registrocodidentibitacora`
--
ALTER TABLE `registrocodidentibitacora`
  MODIFY `id_regcodidenti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT de la tabla `registrosolicitud`
--
ALTER TABLE `registrosolicitud`
  MODIFY `id_regSolicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT de la tabla `registrosolicitudbitacora`
--
ALTER TABLE `registrosolicitudbitacora`
  MODIFY `id_regSolicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT de la tabla `repvalvenaltavsvalcodid`
--
ALTER TABLE `repvalvenaltavsvalcodid`
  MODIFY `id_repVVAvsVCI` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `repvalveninicialvsvalvenalta`
--
ALTER TABLE `repvalveninicialvsvalvenalta`
  MODIFY `id_repVVIvsVVA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `semanas`
--
ALTER TABLE `semanas`
  MODIFY `id_semana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `semanascobro`
--
ALTER TABLE `semanascobro`
  MODIFY `id_semanaCobro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `supervisado`
--
ALTER TABLE `supervisado`
  MODIFY `id_supervisado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT de la tabla `supervisadobitacora`
--
ALTER TABLE `supervisadobitacora`
  MODIFY `id_supervisado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT de la tabla `tecarmadores`
--
ALTER TABLE `tecarmadores`
  MODIFY `id_tecArmador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tecmontadores`
--
ALTER TABLE `tecmontadores`
  MODIFY `id_tecMontador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=319;