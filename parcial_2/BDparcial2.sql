-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-09-2021 a las 23:35:42
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parcial2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistentes`
--

CREATE TABLE `asistentes` (
  `nombres` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellidos` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` text COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `asistentes`
--

INSERT INTO `asistentes` (`nombres`, `apellidos`, `correo`) VALUES
('Juan Jose', 'Sam Croquer', 'jjcroquer@gmail.com'),
('Luis Fernando', 'Alvarado', 'lfac@gmail.com'),
('Milka Estela', 'Parachico', 'estela_ps@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conferencia`
--

CREATE TABLE `conferencia` (
  `nombre` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` text COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `conferencia`
--

INSERT INTO `conferencia` (`nombre`, `correo`) VALUES
('Desarrollo Web', 'lfac@gmail.com'),
('Programacion en PHP', 'jjsam@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conferencistas`
--

CREATE TABLE `conferencistas` (
  `nombres` text COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` text COLLATE utf8_spanish_ci NOT NULL,
  `profesion` text COLLATE utf8_spanish_ci NOT NULL,
  `biografia` text COLLATE utf8_spanish_ci NOT NULL,
  `correo` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `conferencistas`
--

INSERT INTO `conferencistas` (`nombres`, `apellidos`, `profesion`, `biografia`, `correo`) VALUES
('Luis Fernando', 'Alvarado', 'Ingeniero en Sistemas', '35 años, casado, residente en Ciudad de Guatemala', 'lfac@gmail.com'),
('Juan Jose', 'Sam Croquer', 'Ingeniero en Sistemas', '59 Años, casado, originario de Izabal', 'jjsam@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `email` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pw` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechar` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`email`, `pw`, `fechar`) VALUES
(NULL, NULL, '2021-09-22'),
('jjcroquer92@gmail.com', '123456', '2021-09-22'),
('estela_ps@hotmail.com', '789456', '2021-09-23'),
('lalvarado@hotmail.com', '741852', '2021-09-22'),
('jsam@gmail.com', '789+', '2021-09-22'),
('liam12@hotmail.com', 'liam1209', '2021-09-23');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
