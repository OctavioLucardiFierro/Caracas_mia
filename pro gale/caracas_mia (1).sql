-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2021 a las 21:08:33
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `caracas_mia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `ID_Pedido` int(64) NOT NULL,
  `ID_Cliente` int(64) NOT NULL,
  `Nombre_Cliente` varchar(1000) NOT NULL,
  `Dirección_Cliente` varchar(1000) NOT NULL,
  `Monto` int(64) NOT NULL,
  `ID_Producto` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `ID_Producto` int(64) NOT NULL,
  `Nombre_Producto` varchar(100) NOT NULL,
  `Precio_Producto` int(64) NOT NULL,
  `Stock` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`ID_Producto`, `Nombre_Producto`, `Precio_Producto`, `Stock`) VALUES
(1, 'Perro Caliente', 180, 25),
(2, 'Torta Tres Leches', 350, 15),
(3, 'Torta Chocolate', 350, 15),
(4, 'Pabellón', 500, 20),
(5, 'Arepa Pabellón', 350, 15),
(6, 'Arepa Pelua', 350, 18),
(7, 'Arepa Catira', 300, 20),
(8, 'Empanada Pabellón', 250, 30),
(9, 'Empanada Pelua', 250, 30),
(8, 'Empanada Catira', 200, 29),
(9, 'Ración Tequeños', 390, 24),
(10, 'Docena Tequeños', 600, 12);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
