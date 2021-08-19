-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-08-2021 a las 00:08:33
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jaimedb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Abogado`
--

CREATE TABLE `Abogado` (
  `id_abogado` int(11) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `apellidos` varchar(10) NOT NULL,
  `id_especialidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Casos`
--

CREATE TABLE `Casos` (
  `id_caso` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_visita` int(11) NOT NULL,
  `id_tipo_caso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cliente`
--

CREATE TABLE `Cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `inicial` char(1) DEFAULT NULL,
  `apodo` varchar(10) DEFAULT NULL,
  `direccion_postal` varchar(255) NOT NULL,
  `codigo_area` varchar(10) NOT NULL,
  `direccion_fisica` varchar(255) NOT NULL,
  `pueblo` varchar(20) NOT NULL,
  `fecha_de_naciminto` date NOT NULL,
  `genero` varchar(10) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefono` varchar(10) NOT NULL,
  `ocupacion` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Cliente`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Documento`
--

CREATE TABLE `Documento` (
  `id_documento` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `directorio` varchar(20) NOT NULL,
  `id_caso` int(11) NOT NULL,
  `id_tipo_caso` int(11) NOT NULL,
  `subdirectorio_caso` varchar(20) DEFAULT NULL,
  `subdirectorio_tipocaso` varchar(20) DEFAULT NULL,
  `url_fichero` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Especialidad`
--

CREATE TABLE `Especialidad` (
  `id_especialidad` int(11) NOT NULL,
  `especialidad` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TipoCaso`
--

CREATE TABLE `TipoCaso` (
  `id_tipo_caso` int(11) NOT NULL,
  `tipo_caso` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TipoUsuario`
--

CREATE TABLE `TipoUsuario` (
  `id_tipo_usuario` int(11) NOT NULL,
  `tipo_usuario` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `TipoUsuario`
--

INSERT INTO `TipoUsuario` (`id_tipo_usuario`, `tipo_usuario`) VALUES
(1, 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE `Usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(11) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `id_tipo_usuario` int(11) NOT NULL,
  `id_persona` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`id_usuario`, `usuario`, `pass`, `id_tipo_usuario`, `id_persona`) VALUES
(1, 'admin', 'admin', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Visita`
--

CREATE TABLE `Visita` (
  `id_visita` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `razon_visita` longtext NOT NULL,
  `estado_visita` varchar(20) NOT NULL,
  `facha_visita` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Abogado`
--
ALTER TABLE `Abogado`
  ADD PRIMARY KEY (`id_abogado`),
  ADD KEY `id_especialidad` (`id_especialidad`);

--
-- Indices de la tabla `Casos`
--
ALTER TABLE `Casos`
  ADD PRIMARY KEY (`id_caso`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_visita` (`id_visita`),
  ADD KEY `id_tipo_caso` (`id_tipo_caso`);

--
-- Indices de la tabla `Cliente`
--
ALTER TABLE `Cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `Documento`
--
ALTER TABLE `Documento`
  ADD PRIMARY KEY (`id_documento`),
  ADD KEY `id_tipo_caso` (`id_tipo_caso`),
  ADD KEY `id_caso` (`id_caso`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `Especialidad`
--
ALTER TABLE `Especialidad`
  ADD PRIMARY KEY (`id_especialidad`);

--
-- Indices de la tabla `TipoCaso`
--
ALTER TABLE `TipoCaso`
  ADD PRIMARY KEY (`id_tipo_caso`);

--
-- Indices de la tabla `TipoUsuario`
--
ALTER TABLE `TipoUsuario`
  ADD PRIMARY KEY (`id_tipo_usuario`);

--
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_tipo_usuario` (`id_tipo_usuario`);

--
-- Indices de la tabla `Visita`
--
ALTER TABLE `Visita`
  ADD PRIMARY KEY (`id_visita`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Abogado`
--
ALTER TABLE `Abogado`
  MODIFY `id_abogado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Casos`
--
ALTER TABLE `Casos`
  MODIFY `id_caso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Cliente`
--
ALTER TABLE `Cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `Documento`
--
ALTER TABLE `Documento`
  MODIFY `id_documento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `TipoCaso`
--
ALTER TABLE `TipoCaso`
  MODIFY `id_tipo_caso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `TipoUsuario`
--
ALTER TABLE `TipoUsuario`
  MODIFY `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Visita`
--
ALTER TABLE `Visita`
  MODIFY `id_visita` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Abogado`
--
ALTER TABLE `Abogado`
  ADD CONSTRAINT `Abogado_ibfk_1` FOREIGN KEY (`id_especialidad`) REFERENCES `Especialidad` (`id_especialidad`);

--
-- Filtros para la tabla `Casos`
--
ALTER TABLE `Casos`
  ADD CONSTRAINT `Casos_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `Cliente` (`id_cliente`),
  ADD CONSTRAINT `Casos_ibfk_2` FOREIGN KEY (`id_visita`) REFERENCES `Visita` (`id_visita`),
  ADD CONSTRAINT `Casos_ibfk_3` FOREIGN KEY (`id_tipo_caso`) REFERENCES `TipoCaso` (`id_tipo_caso`);

--
-- Filtros para la tabla `Documento`
--
ALTER TABLE `Documento`
  ADD CONSTRAINT `Documento_ibfk_1` FOREIGN KEY (`id_tipo_caso`) REFERENCES `TipoCaso` (`id_tipo_caso`),
  ADD CONSTRAINT `Documento_ibfk_2` FOREIGN KEY (`id_caso`) REFERENCES `Casos` (`id_caso`),
  ADD CONSTRAINT `Documento_ibfk_3` FOREIGN KEY (`id_cliente`) REFERENCES `Cliente` (`id_cliente`);

--
-- Filtros para la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD CONSTRAINT `Usuario_ibfk_1` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `TipoUsuario` (`id_tipo_usuario`);

--
-- Filtros para la tabla `Visita`
--
ALTER TABLE `Visita`
  ADD CONSTRAINT `Visita_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `Cliente` (`id_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
