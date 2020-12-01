-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 01-12-2020 a las 01:46:58
-- Versión del servidor: 10.1.44-MariaDB-0ubuntu0.18.04.1
-- Versión de PHP: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `usuario_admin` varchar(11) NOT NULL,
  `contraseña` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`usuario_admin`, `contraseña`) VALUES
('Reina', 'mejia07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id_libro` int(11) NOT NULL,
  `nombre_libro` varchar(250) NOT NULL,
  `autor` varchar(200) NOT NULL,
  `clasificacion` varchar(25) NOT NULL,
  `n_copias` int(11) DEFAULT NULL,
  `archivo` varchar(250) DEFAULT NULL,
  `tipo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libro`, `nombre_libro`, `autor`, `clasificacion`, `n_copias`, `archivo`, `tipo`) VALUES
(1, 'La Odisea', 'Omero', 'Acción', 4, '', 'impreso'),
(2, 'Lenguaje PHP', 'Francisco Ochoa', 'Tecnología', NULL, NULL, 'digital'),
(3, 'Salud Pública', 'Francisco Rojas Ochoa', 'Salud', NULL, 'salud_pub_medsocial.pdf', 'digital'),
(14, 'Principios básicos de los algoritmos', 'Francisco Ochoa', 'Matemáticas', NULL, 'Software de la configuración.pdf', 'digital'),
(16, 'Salud Pública', 'Omero', 'Tecnología', NULL, 'Writing an e-mail..pdf', 'digital'),
(23, 'La Odisea', 'Omero', 'Literatura', NULL, 'Odisea.pdf', 'digital'),
(24, 'Contabilidad 1', 'Sergio Walls', 'Matemáticas/Contabilidad', NULL, 'contabilidad.pdf', 'digital'),
(25, 'El Banquete', 'Platón', 'Literatura', NULL, 'El_banquete-Platon.pdf', 'digital'),
(26, 'Salud Pública: Medicina Social', 'Francisco Rojas Ochoa', 'Salud', 2, '', 'impreso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `id_prestamo` int(11) NOT NULL,
  `libro` varchar(150) NOT NULL,
  `estudiante` varchar(75) NOT NULL,
  `carnet` varchar(10) NOT NULL,
  `seccion` varchar(3) NOT NULL,
  `especialidad` varchar(50) NOT NULL,
  `id_libro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`id_prestamo`, `libro`, `estudiante`, `carnet`, `seccion`, `especialidad`, `id_libro`) VALUES
(2, 'La Odisea', 'Karla Lourdes Leiva', 'kal535', '\"b\"', 'Técnico en Contaduría', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_Usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(25) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `especialidad` varchar(40) NOT NULL,
  `nivel` varchar(50) NOT NULL,
  `seccion` varchar(3) NOT NULL,
  `carnet` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_Usuario`, `nombre_usuario`, `nombres`, `apellidos`, `especialidad`, `nivel`, `seccion`, `carnet`) VALUES
(1, 'Adriana', 'Adriana Melissa', 'Robles Mendoza', 'Técnico en Contaduría', 'Primer año de Bachillerato', '\"a\"', 'adri8762'),
(2, 'Cristian', 'Cristian Josué ', 'Flores Perez', 'Técnico en salud', 'Primer año de Bachillerato', '\"a\"', 'cris2021'),
(3, 'Karla', 'Karla Lourdes', 'Leiva', 'Técnico en Contaduría', 'Segundo año de Bachillerato', '\"b\"', 'kal535'),
(4, 'Mirely', 'Kenia Mirely', 'Mendoza Beltrán', 'Técnico en Salud', 'Segundo año de bachillerato', '\"a\"', '0025ken'),
(5, 'Sandra ', 'Sandra Nohemy', 'Vegas Flores', 'Bachillerato General ', 'Primer año de Bachillerato', '\"c\"', 'nohe721');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`usuario_admin`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libro`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`id_prestamo`),
  ADD UNIQUE KEY `id_libro` (`id_libro`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `id_prestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `prestamos_ibfk_1` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
