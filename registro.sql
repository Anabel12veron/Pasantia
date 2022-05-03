-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-05-2022 a las 14:52:42
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `ID_Contacto` int(30) NOT NULL,
  `ID_Persona` int(30) NOT NULL,
  `Descripcion` varchar(30) NOT NULL,
  `Valor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA `contacto`:
--   `ID_Persona`
--       `persona` -> `ID_Persona`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo`
--

CREATE TABLE `modulo` (
  `ID_Modulo` int(30) NOT NULL,
  `Nombre_Modulo` varchar(30) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Sistema` varchar(30) NOT NULL,
  `Estado` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA `modulo`:
--

--
-- Volcado de datos para la tabla `modulo`
--

INSERT INTO `modulo` (`ID_Modulo`, `Nombre_Modulo`, `Descripcion`, `Sistema`, `Estado`) VALUES
(3, 'Registrar usuarios', 'En este módulo podemos registrar a cada unos de los usuarios nuevos', 'Sistema de control de Usuarios', 'Desarrollo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `ID_Persona` int(30) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellido` varchar(30) NOT NULL,
  `F_Nacimiento` date NOT NULL,
  `DNI` varchar(30) NOT NULL,
  `Sexo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA `persona`:
--

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`ID_Persona`, `Nombre`, `Apellido`, `F_Nacimiento`, `DNI`, `Sexo`) VALUES
(26, 'Ana', 'Mendoza', '2005-05-11', '123456', 'Femenino'),
(27, 'Anabell', 'Mendez', '2003-07-26', '7584392', 'Femenino'),
(28, 'Nahuel', 'Bogarin', '2003-09-05', '7654323456', 'Masculino'),
(29, 'Augusto', 'monzon', '1999-07-07', '12345345', 'Masculino'),
(30, 'Luisa', 'molinas', '1997-01-30', '9876545678', 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `ID_Proyecto` int(30) NOT NULL,
  `ID_Modulo` int(30) NOT NULL,
  `ID_Persona` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA `proyecto`:
--   `ID_Modulo`
--       `modulo` -> `ID_Modulo`
--   `ID_Persona`
--       `persona` -> `ID_Persona`
--

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`ID_Proyecto`, `ID_Modulo`, `ID_Persona`) VALUES
(3, 3, 27),
(4, 3, 28),
(5, 3, 29);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`ID_Contacto`),
  ADD KEY `FK_persona_contacto` (`ID_Persona`);

--
-- Indices de la tabla `modulo`
--
ALTER TABLE `modulo`
  ADD PRIMARY KEY (`ID_Modulo`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`ID_Persona`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`ID_Proyecto`),
  ADD KEY `FK_modulo` (`ID_Modulo`),
  ADD KEY `FK_persona` (`ID_Persona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `ID_Contacto` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modulo`
--
ALTER TABLE `modulo`
  MODIFY `ID_Modulo` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `ID_Persona` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `ID_Proyecto` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `FK_persona_contacto` FOREIGN KEY (`ID_Persona`) REFERENCES `persona` (`ID_Persona`);

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `FK_modulo` FOREIGN KEY (`ID_Modulo`) REFERENCES `modulo` (`ID_Modulo`),
  ADD CONSTRAINT `FK_persona` FOREIGN KEY (`ID_Persona`) REFERENCES `persona` (`ID_Persona`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
