-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-09-2022 a las 20:36:45
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `metro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea3`
--

CREATE TABLE `linea3` (
  `id` int(11) NOT NULL,
  `fecha` varchar(20) NOT NULL DEFAULT current_timestamp(),
  `mensajes` varchar(400) NOT NULL,
  `linea` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `linea3`
--

INSERT INTO `linea3` (`id`, `fecha`, `mensajes`, `linea`) VALUES
(1, '12-09-22 01:31:45', 'soy la linea b', 'LINEA-B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea6`
--

CREATE TABLE `linea6` (
  `id` int(11) NOT NULL,
  `fecha` varchar(20) NOT NULL DEFAULT current_timestamp(),
  `mensajes` varchar(400) NOT NULL,
  `linea` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `linea6`
--

INSERT INTO `linea6` (`id`, `fecha`, `mensajes`, `linea`) VALUES
(1, '12-09-22 01:35:11', 'soy b', 'LINEA-B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineab`
--

CREATE TABLE `lineab` (
  `id` int(11) NOT NULL,
  `fecha` varchar(20) NOT NULL DEFAULT current_timestamp(),
  `mensajes` varchar(400) NOT NULL,
  `linea` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE `mensaje` (
  `id` int(10) NOT NULL,
  `fecha` varchar(20) NOT NULL DEFAULT current_timestamp(),
  `mensajes` varchar(400) NOT NULL,
  `linea` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contraseña` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contraseña`, `tipo`) VALUES
(37, '123', '123', 'linea3'),
(38, '123', '123', 'linea6'),
(39, '123', '123', 'linea7'),
(40, '123', '123', 'admin'),
(42, '123', '123', 'lineab'),
(44, 'Jose Eduardo', '123', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `linea3`
--
ALTER TABLE `linea3`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `linea6`
--
ALTER TABLE `linea6`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lineab`
--
ALTER TABLE `lineab`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `linea3`
--
ALTER TABLE `linea3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `linea6`
--
ALTER TABLE `linea6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `lineab`
--
ALTER TABLE `lineab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
