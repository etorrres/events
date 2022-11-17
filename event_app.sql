-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2022 a las 02:21:29
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `event_app`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id_asc` int(10) NOT NULL,
  `fecha_asc` date NOT NULL,
  `hora_asc` time NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `id_codigo_evento` varchar(15) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id_asc`, `fecha_asc`, `hora_asc`, `id_usuario`, `id_codigo_evento`, `status`) VALUES
(1, '2022-11-16', '14:53:00', 7, 'EVT-2022-0003', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE `encuesta` (
  `id_enc` int(10) NOT NULL,
  `pregunta1` varchar(150) NOT NULL,
  `pregunta2` varchar(150) NOT NULL,
  `pregunta3` varchar(150) NOT NULL,
  `pregunta4` varchar(150) NOT NULL,
  `pregunta5` varchar(150) NOT NULL,
  `pregunta6` varchar(150) NOT NULL,
  `pregunta7` varchar(150) NOT NULL,
  `pregunta8` varchar(150) NOT NULL,
  `pregunta9` varchar(150) NOT NULL,
  `pregunta10` varchar(150) NOT NULL,
  `id_codigo_evento` varchar(15) NOT NULL,
  `id_usr` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(1) NOT NULL,
  `nombre_estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `nombre_estado`) VALUES
(0, 'Deshabilitado'),
(1, 'Habilitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `id_codigo_evento` varchar(15) NOT NULL,
  `nombre_evt` varchar(150) NOT NULL,
  `descripcion_evt` varchar(200) NOT NULL,
  `lugar_evt` varchar(150) NOT NULL,
  `fecha_evt` date NOT NULL,
  `hora_evt` time NOT NULL,
  `cupo_evt` int(10) NOT NULL,
  `estatus_evt` int(1) NOT NULL,
  `foto_evt` varchar(255) NOT NULL,
  `link_evt` varchar(250) NOT NULL,
  `poster_evt` varchar(255) NOT NULL,
  `id_usr` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`id_codigo_evento`, `nombre_evt`, `descripcion_evt`, `lugar_evt`, `fecha_evt`, `hora_evt`, `cupo_evt`, `estatus_evt`, `foto_evt`, `link_evt`, `poster_evt`, `id_usr`) VALUES
('EVT-2022-0001', 'Ciberseguridad', 'Nuevas metodologias de ciberataques', 'UTH', '2022-11-15', '15:00:00', 20, 5, 'recursos/imagenes/eventos/MINIATURA-EVT-2022-0001.jpg', 'https://zoom.com', 'recursos/imagenes/eventos/POSTER-EVT-2022-0001.jpg', 6),
('EVT-2022-0002', 'GitHub', 'Uso de Github', 'UTH', '2022-11-16', '18:23:00', 7, 5, 'recursos/imagenes/eventos/MINIATURA-EVT-2022-0002.jpg', 'https://zoom.com', 'recursos/imagenes/eventos/POSTER-EVT-2022-0002.jpg', 7),
('EVT-2022-0003', 'Redes', 'Protocolos', 'UTH', '2022-11-16', '15:00:00', 9, 2, 'recursos/imagenes/eventos/MINIATURA-EVT-2022-0003.webp', 'https://zoom.com', 'recursos/imagenes/eventos/POSTER-EVT-2022-0003.jpg', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles`
--

CREATE TABLE `niveles` (
  `id_lvl` int(1) NOT NULL,
  `nombre_lvl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `niveles`
--

INSERT INTO `niveles` (`id_lvl`, `nombre_lvl`) VALUES
(1, 'Administrador'),
(2, 'Organizador'),
(3, 'Asistente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `id_pre` int(10) NOT NULL,
  `id_codigo_evento` varchar(15) NOT NULL,
  `id_usr` int(10) NOT NULL,
  `pregunta_pre` varchar(250) NOT NULL,
  `estado_pre` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_usr` int(10) NOT NULL,
  `nombre_usr` varchar(150) NOT NULL,
  `apellido_usr` varchar(150) NOT NULL,
  `email_usr` varchar(150) NOT NULL,
  `nivel_usr` int(1) NOT NULL,
  `password_usr` varchar(250) NOT NULL,
  `estado_usr` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_usr`, `nombre_usr`, `apellido_usr`, `email_usr`, `nivel_usr`, `password_usr`, `estado_usr`) VALUES
(6, 'Erick Manuel', 'Torres', 'et@admin.com', 1, '$2y$10$oPPM/sGYqvbDGThmypskUugaoiOA5yyM669LZ5qpXqgkTQYadjhQ.', 1),
(7, 'Maria D', 'Lopez', 'ml@admin.com', 3, '$2y$10$Bj..B4ZLfT/NVzhp15P0zO6EuNVvTidE5OEQK8S1VlKS1l5/nN4.i', 1),
(8, 'Jose', 'Lopez', 'jl@admin.com', 2, '$2y$10$lX4CFzgavMK6X.70PenLOOUOgyzu3A9fx.aYA1XlQyTgN7engZRDq', 1),
(10, 'Jose', 'Perez', 'jp@admin.com', 2, '$2y$10$2lR1d8uBxW9shook800ha.x9etSc5mfF0DktA9TJ79phHdDcmNvgO', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id_asc`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_codigo_evento` (`id_codigo_evento`);

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD PRIMARY KEY (`id_enc`),
  ADD KEY `id_usr` (`id_usr`),
  ADD KEY `id_codigo_evento` (`id_codigo_evento`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`),
  ADD UNIQUE KEY `UNIQUE` (`id_estado`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id_codigo_evento`),
  ADD UNIQUE KEY `id_codigo_evento` (`id_codigo_evento`);

--
-- Indices de la tabla `niveles`
--
ALTER TABLE `niveles`
  ADD PRIMARY KEY (`id_lvl`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`id_pre`),
  ADD KEY `id_usr` (`id_usr`),
  ADD KEY `id_codigo_evento` (`id_codigo_evento`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_usr`),
  ADD UNIQUE KEY `email_usr` (`email_usr`),
  ADD KEY `nivel_usr` (`nivel_usr`),
  ADD KEY `estado_usr` (`estado_usr`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id_asc` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `id_enc` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `id_pre` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_usr` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `asistencia_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `user` (`id_usr`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asistencia_ibfk_2` FOREIGN KEY (`id_codigo_evento`) REFERENCES `evento` (`id_codigo_evento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD CONSTRAINT `encuesta_ibfk_2` FOREIGN KEY (`id_usr`) REFERENCES `user` (`id_usr`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `encuesta_ibfk_3` FOREIGN KEY (`id_codigo_evento`) REFERENCES `evento` (`id_codigo_evento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD CONSTRAINT `pregunta_ibfk_1` FOREIGN KEY (`id_usr`) REFERENCES `user` (`id_usr`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pregunta_ibfk_2` FOREIGN KEY (`id_codigo_evento`) REFERENCES `evento` (`id_codigo_evento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`nivel_usr`) REFERENCES `niveles` (`id_lvl`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`estado_usr`) REFERENCES `estado` (`id_estado`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
