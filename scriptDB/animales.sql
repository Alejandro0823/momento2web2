-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2020 a las 17:56:17
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `animales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion`
--

CREATE TABLE `descripcion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `edad` int(11) NOT NULL,
  `tipoanimal` varchar(10) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `comida` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `descripcion`
--

INSERT INTO `descripcion` (`id`, `nombre`, `edad`, `tipoanimal`, `descripcion`, `comida`, `foto`) VALUES
(32, 'Felix', 5, 'Domestico', 'Gato', 'Mirringo ', 'https://github.com/Alejandro0823/imagenesProyecto/blob/master/cat1.jpg?raw=true'),
(33, 'Rex', 1, 'Domestico', 'Perro', 'Nutrican', 'https://github.com/Alejandro0823/imagenesProyecto/blob/master/dog1.jpg?raw=true'),
(34, 'Rebeca', 8, 'Silvestre', 'Loro', 'semillas de girasol y frutas ', 'https://github.com/Alejandro0823/imagenesProyecto/blob/master/parrot1.jpg?raw=true'),
(35, 'Zeus', 4, 'Domestico', 'Perro', 'Croquetas ', 'https://github.com/Alejandro0823/imagenesProyecto/blob/master/dog2.jpg?raw=true'),
(36, 'Garfield', 2, 'Domestico', 'Gato', 'Atún', 'https://github.com/Alejandro0823/imagenesProyecto/blob/master/cat2.jpg?raw=true'),
(37, 'Rocky', 3, 'Domestico', 'Perro', 'Nutrican, Croquetas', 'https://github.com/Alejandro0823/imagenesProyecto/blob/master/dog3.jpg?raw=true');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `descripcion`
--
ALTER TABLE `descripcion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `descripcion`
--
ALTER TABLE `descripcion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
