-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 27-04-2024 a las 06:44:37
-- Versión del servidor: 5.7.39
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias_tb`
--

CREATE TABLE `categorias_tb` (
  `cat_id` int(11) NOT NULL,
  `cat_nombre` varchar(1000) NOT NULL,
  `cat_alta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas_tb`
--

CREATE TABLE `preguntas_tb` (
  `pre_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `pregunta` varchar(1000) NOT NULL,
  `opcion_1` varchar(1000) NOT NULL,
  `opcion_2` varchar(1000) NOT NULL,
  `opcion_3` varchar(1000) NOT NULL,
  `opcion_4` varchar(1000) NOT NULL,
  `respuesta` varchar(1000) NOT NULL,
  `quiz_status` varchar(1000) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quiz_status`
--

CREATE TABLE `quiz_status` (
  `status_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `status` varchar(1000) NOT NULL DEFAULT 'used'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quiz_tb`
--

CREATE TABLE `quiz_tb` (
  `ex_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `ex_title` varchar(1000) NOT NULL,
  `ex_time_limit` varchar(1000) NOT NULL,
  `ex_questlimit_display` int(11) NOT NULL,
  `ex_description` varchar(1000) NOT NULL,
  `ex_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_respuestas`
--

CREATE TABLE `user_respuestas` (
  `exans_id` int(11) NOT NULL,
  `axmne_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `quest_id` int(11) NOT NULL,
  `exans_answer` varchar(1000) NOT NULL,
  `exans_status` varchar(1000) NOT NULL DEFAULT 'new',
  `exans_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `exmne_fullname` varchar(1000) NOT NULL,
  `exmne_gender` varchar(1000) NOT NULL,
  `exmne_birthdate` varchar(1000) NOT NULL,
  `exmne_year_level` varchar(1000) NOT NULL,
  `exmne_email` varchar(1000) NOT NULL,
  `exmne_password` varchar(1000) NOT NULL,
  `exmne_status` varchar(1000) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `exmne_fullname`, `exmne_gender`, `exmne_birthdate`, `exmne_year_level`, `exmne_email`, `exmne_password`, `exmne_status`) VALUES
(1, 'Liam', 'Hombre', '2006-05-11', 'first year', 'liam@mail.com', 'Liam123', 'active');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias_tb`
--
ALTER TABLE `categorias_tb`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indices de la tabla `preguntas_tb`
--
ALTER TABLE `preguntas_tb`
  ADD PRIMARY KEY (`pre_id`);

--
-- Indices de la tabla `quiz_status`
--
ALTER TABLE `quiz_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indices de la tabla `quiz_tb`
--
ALTER TABLE `quiz_tb`
  ADD PRIMARY KEY (`ex_id`);

--
-- Indices de la tabla `user_respuestas`
--
ALTER TABLE `user_respuestas`
  ADD PRIMARY KEY (`exans_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias_tb`
--
ALTER TABLE `categorias_tb`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `preguntas_tb`
--
ALTER TABLE `preguntas_tb`
  MODIFY `pre_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `quiz_status`
--
ALTER TABLE `quiz_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `quiz_tb`
--
ALTER TABLE `quiz_tb`
  MODIFY `ex_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user_respuestas`
--
ALTER TABLE `user_respuestas`
  MODIFY `exans_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
