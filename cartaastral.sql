-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2022 a las 07:24:24
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
-- Base de datos: `cartaastral`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacionnacimiento`
--

CREATE TABLE `informacionnacimiento` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(20) NOT NULL,
  `Genero` varchar(20) NOT NULL,
  `Nacimiento` varchar(100) NOT NULL,
  `Pais` varchar(50) NOT NULL,
  `Ciudad` varchar(50) NOT NULL,
  `Signo` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `informacionnacimiento`
--

INSERT INTO `informacionnacimiento` (`id`, `Nombre`, `Apellido`, `Genero`, `Nacimiento`, `Pais`, `Ciudad`, `Signo`, `created_at`, `updated_at`) VALUES
(1, 'Ruben', 'Borbolla', 'Gaseoso', 'Antier', 'Checoslovakia', 'Cajeme', 'Positivo', '2022-05-25 12:15:40', '2022-05-25 12:15:40');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `informacionnacimiento`
--
ALTER TABLE `informacionnacimiento`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `informacionnacimiento`
--
ALTER TABLE `informacionnacimiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
