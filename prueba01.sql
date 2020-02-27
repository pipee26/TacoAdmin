-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 02-12-2018 a las 11:12:31
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba01`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id_menus` int(10) NOT NULL,
  `nombrem` varchar(20) NOT NULL,
  `descripcionm` varchar(50) NOT NULL,
  `urlimagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id_menus`, `nombrem`, `descripcionm`, `urlimagen`) VALUES
(5, 'Tacos', 'Ven y disfruta de nuestros deliciosos tacos', 'imagenes/Tacos.jpg'),
(6, 'Platillos', 'Ven y disfruta de nuestros deliciosos platillos', 'imagenes/Platillos1.jpg'),
(7, 'Hamburguesas', 'Ven y disfruta de nuestras deliciosas hamburguesas', 'imagenes/Hamburguesas1.jpg'),
(8, 'Caldos y Pastas', 'Ven y disfruta de nuestros deliciosos Caldos y Pas', 'imagenes/CaldosyPastas1.jpg'),
(9, 'Alitas', 'Ven a disfrutar de las deliciosas alitas que te of', 'imagenes/AlitasyMas1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(15) NOT NULL,
  `nombrep` varchar(50) NOT NULL,
  `preciop` varchar(50) NOT NULL,
  `comprador` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `nombrep`, `preciop`, `comprador`) VALUES
(8, 'Alambre de chuleta(kilo)', '220', 'angel'),
(9, 'Costilla', '45', 'angel'),
(10, 'Orden de alitas(6 pzas)', '70', 'Hoshigaki'),
(11, 'Costilla', '45', 'Hoshigaki'),
(12, 'Tradicional (Carne,Salchicha,tocino)', '70', 'Hoshigaki'),
(13, 'Alambre de Pastor(Kilo)', '220', 'angel'),
(14, 'Chuleta', '45', 'angel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platillosmenus`
--

CREATE TABLE `platillosmenus` (
  `id_platillos` int(10) NOT NULL,
  `nombrep` varchar(50) NOT NULL,
  `preciop` int(20) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `platillosmenus`
--

INSERT INTO `platillosmenus` (`id_platillos`, `nombrep`, `preciop`, `tipo`) VALUES
(1, 'Chuleta', 45, 'Tacos'),
(2, 'Costilla', 45, 'Tacos'),
(3, 'Tradicional (Carne,Salchicha,tocino)', 70, 'Hamburguesas'),
(4, 'De la casa', 90, 'Hamburguesas'),
(5, 'Arrachera', 80, 'Hamburguesas'),
(6, 'Alambre de Pastor(Kilo)', 220, 'Platillos'),
(7, 'Alambre de chuleta(kilo)', 220, 'Platillos'),
(8, 'Sopa de la casa', 55, 'Caldos y Pastas'),
(9, 'Orden de alitas(6 pzas)', 70, 'Alitas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `nombreusuario` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `direc1` varchar(300) NOT NULL,
  `direc2` varchar(300) NOT NULL,
  `direc3` varchar(300) NOT NULL,
  `direc4` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_user`, `nombre`, `nombreusuario`, `password`, `direc1`, `direc2`, `direc3`, `direc4`) VALUES
(1, 'Angel Ivan Regules Bautista', 'Hoshigaki', 'prueba1', 'Miguel Hidalgo S/N, Niños Heroes', '', '', ''),
(2, 'Taco', 'Hoshigaki2', 'prueba2', 'Miguel Hidalgo S/N', '', '', ''),
(3, 'Taco', 'Hoshigaki3', 'prueba2', 'Miguel Hidalgo S/N', 'Niños Heroes', 'Mecayapan', '95930'),
(9, 'Taco', 'Hoshigaki12', 'prueba1', 'Miguel Hidalgo S/N', 'Niños Heroes', 'Mecayapan', '95930'),
(15, 'romeo', 'romeonip', 'taco', 'hahaha', '', '', ''),
(16, 'Romeo', 'alas', 'taco', 'haha', '', '', ''),
(17, 'Angel', 'angel', 'angel', 'angel', 'angel', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id_menus`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `platillosmenus`
--
ALTER TABLE `platillosmenus`
  ADD PRIMARY KEY (`id_platillos`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `id_menus` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `platillosmenus`
--
ALTER TABLE `platillosmenus`
  MODIFY `id_platillos` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
