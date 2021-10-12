-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 10-10-2021 a las 23:26:21
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_tiendavirtual`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` bigint(20) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_swedish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `portada` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `ruta` varchar(255) COLLATE utf8mb4_swedish_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `nombre`, `descripcion`, `portada`, `datecreated`, `ruta`, `status`) VALUES
(1, 'Accesorios', 'Accesorios para computadoras', 'portada_categoria.png', '2021-09-15 17:58:04', 'accesorios', 1),
(2, 'Audio', 'Equipos de audio y sonido', 'portada_categoria.png', '2021-09-15 18:38:50', 'audio', 1),
(3, 'Cableado', 'Cableado para computadoras', 'portada_categoria.png', '2021-09-15 18:39:13', 'cableado', 1),
(4, 'Conectividad', 'Equipos para conectividad', 'portada_categoria.png', '2021-09-15 18:54:26', 'conectividad', 1),
(5, 'Herramientas', 'Herramientas para computadoras', 'portada_categoria.png', '2021-09-17 22:36:25', 'herramientas', 1),
(6, 'Laptop', 'Computadoras portátiles', 'portada_categoria.png', '2021-09-17 23:17:14', 'laptop', 1),
(7, 'Limpieza', 'Productos de limpieza', 'portada_categoria.png', '2021-09-17 23:40:49', 'limpieza', 1),
(8, 'Mouse y teclados', 'Equipo de computo', 'portada_categoria.png', '2021-09-21 17:50:46', 'mouse-y-teclados', 1),
(9, 'Refacciones', 'Refacciones de equipos de computo', 'portada_categoria.png', '2021-10-02 16:58:17', 'refacciones', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE `detalle_pedido` (
  `id` bigint(20) NOT NULL,
  `pedidoid` bigint(20) NOT NULL,
  `productoid` bigint(20) NOT NULL,
  `precio` decimal(11,2) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_temp`
--

CREATE TABLE `detalle_temp` (
  `id` bigint(20) NOT NULL,
  `personaid` bigint(20) NOT NULL,
  `productoid` bigint(20) NOT NULL,
  `precio` decimal(11,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `transaccionid` varchar(255) COLLATE utf8mb4_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `detalle_temp`
--

INSERT INTO `detalle_temp` (`id`, `personaid`, `productoid`, `precio`, `cantidad`, `transaccionid`) VALUES
(19, 14, 7, '100.00', 2, 'smiaf2e3kcdl5dtb4b0c7mf8uk'),
(20, 14, 5, '100.00', 2, 'smiaf2e3kcdl5dtb4b0c7mf8uk'),
(21, 14, 3, '200.00', 3, 'smiaf2e3kcdl5dtb4b0c7mf8uk'),
(22, 14, 1, '100.00', 3, 'smiaf2e3kcdl5dtb4b0c7mf8uk'),
(23, 14, 4, '50.00', 1, 'smiaf2e3kcdl5dtb4b0c7mf8uk'),
(24, 14, 2, '150.00', 3, 'smiaf2e3kcdl5dtb4b0c7mf8uk');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id` bigint(20) NOT NULL,
  `productoid` bigint(20) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id`, `productoid`, `img`) VALUES
(4, 3, 'pro_ab7c5f37af78b1423752d8525fb03ad0.jpg'),
(5, 3, 'pro_05c0ead4bfc43f38142bbee2d3e42b24.jpg'),
(6, 5, 'pro_f6defea4064f03d6fc341493097bfc3c.jpg'),
(8, 6, 'pro_f6defea4064f03d6fc341493097bfc3c.jpg'),
(9, 6, 'pro_5f103fe5a545af38b9e61e8d5f7f97c8.jpg'),
(10, 7, 'pro_5919501fb1dfae1086e2ca536e0c8cea.jpg'),
(12, 7, 'pro_08004a717811bca5e08441ed27268af1.jpg'),
(14, 7, 'pro_4938eea35f4969c9fc3530d7d2d1b4c5.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo`
--

CREATE TABLE `modulo` (
  `idmodulo` bigint(20) NOT NULL,
  `titulo` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `modulo`
--

INSERT INTO `modulo` (`idmodulo`, `titulo`, `descripcion`, `status`) VALUES
(1, 'Dashboard', 'Dashboard', 1),
(2, 'Usuarios', 'Usuarios del sistema', 1),
(3, 'Clientes', 'Clientes de tienda', 1),
(4, 'Productos', 'Todos los productos', 1),
(5, 'Pedidos', 'Pedidos', 1),
(6, 'Categorias', 'categorias productos', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `idpedido` bigint(20) NOT NULL,
  `personaid` bigint(20) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `monto` decimal(11,2) NOT NULL,
  `tipopagoid` bigint(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `idpermiso` bigint(20) NOT NULL,
  `rolid` bigint(20) NOT NULL,
  `moduloid` bigint(20) NOT NULL,
  `r` int(11) NOT NULL DEFAULT 0,
  `w` int(11) NOT NULL DEFAULT 0,
  `u` int(11) NOT NULL DEFAULT 0,
  `d` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`idpermiso`, `rolid`, `moduloid`, `r`, `w`, `u`, `d`) VALUES
(85, 2, 1, 1, 0, 0, 0),
(86, 2, 2, 1, 1, 1, 1),
(87, 2, 3, 1, 1, 1, 0),
(88, 2, 4, 1, 1, 1, 0),
(89, 2, 5, 1, 1, 1, 0),
(90, 2, 6, 1, 1, 1, 0),
(133, 7, 1, 1, 0, 0, 0),
(134, 7, 2, 0, 0, 0, 0),
(135, 7, 3, 1, 0, 0, 0),
(136, 7, 4, 1, 0, 0, 0),
(137, 7, 5, 0, 0, 0, 0),
(138, 7, 6, 1, 0, 0, 0),
(205, 1, 1, 1, 1, 1, 1),
(206, 1, 2, 1, 1, 1, 1),
(207, 1, 3, 1, 1, 1, 1),
(208, 1, 4, 1, 1, 1, 1),
(209, 1, 5, 1, 1, 1, 1),
(210, 1, 6, 1, 1, 1, 1),
(223, 6, 1, 0, 0, 0, 0),
(224, 6, 2, 0, 0, 0, 0),
(225, 6, 3, 0, 0, 0, 0),
(226, 6, 4, 1, 0, 0, 0),
(227, 6, 5, 0, 0, 0, 0),
(228, 6, 6, 0, 0, 0, 0),
(235, 3, 1, 1, 0, 0, 0),
(236, 3, 2, 1, 0, 0, 0),
(237, 3, 3, 1, 0, 0, 0),
(238, 3, 4, 1, 0, 1, 0),
(239, 3, 5, 1, 1, 1, 0),
(240, 3, 6, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idpersona` bigint(20) NOT NULL,
  `identificacion` varchar(30) COLLATE utf8mb4_swedish_ci NOT NULL,
  `nombres` varchar(80) COLLATE utf8mb4_swedish_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `email_user` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `password` varchar(75) COLLATE utf8mb4_swedish_ci NOT NULL,
  `nit` varchar(20) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `nombrefiscal` varchar(80) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `direccionfiscal` varchar(100) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `token` varchar(150) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `rolid` bigint(20) NOT NULL,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idpersona`, `identificacion`, `nombres`, `apellidos`, `telefono`, `email_user`, `password`, `nit`, `nombrefiscal`, `direccionfiscal`, `token`, `rolid`, `datecreated`, `status`) VALUES
(1, '12345174', 'Julio', 'López', 9532130298, 'juliocrack912@outlook.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '123456', 'juliocesar', 'los sauces', NULL, 1, '2021-06-14 15:51:44', 1),
(2, '123458', 'Julio Cesar', 'Sanjuan', 529532130298, 'juliocrack9122@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', NULL, NULL, NULL, NULL, 2, '2021-06-14 15:47:13', 0),
(3, '123452', 'Mitzy', 'Barrios', 9531234556, 'hola@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', NULL, NULL, NULL, '', 1, '2021-06-14 17:03:36', 1),
(4, '123459', 'Guadalupe', 'Quiroz', 9531237895, 'lupis@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', NULL, NULL, NULL, NULL, 3, '2021-06-14 19:25:39', 1),
(6, '1234612', 'Luis', 'Aguilar', 9531648978, 'holajotos@miados.com', '3ac0ce5757e20d168b1c681932ed733a6e5aa5da50cbb8958a29b23900603b15', NULL, NULL, NULL, NULL, 1, '2021-06-16 18:44:56', 0),
(7, '1234613', 'Desarrollador', 'Pc Box', 9532130298, 'saulelcanelo69@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', NULL, NULL, NULL, NULL, 1, '2021-06-21 18:22:41', 1),
(13, '6666', 'Alondra', 'Reyes', 9531234569, 'alo@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '123456', 'AlondraR', 'Tlaxiaco, Oax.', NULL, 7, '2021-09-14 20:07:18', 1),
(14, '', 'Sandra', 'Reyes', 9531292453, 'sandra@gmail.com', '360ab76e2cd5c0bb7fc5644c7d0a9c2e9792d7ffc96de1531fe8f0935f9b02bc', NULL, NULL, NULL, NULL, 7, '2021-10-09 17:39:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idproducto` bigint(20) NOT NULL,
  `categoriaid` bigint(20) NOT NULL,
  `codigo` varchar(30) COLLATE utf8mb4_swedish_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_swedish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `precio` decimal(11,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `imagen` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `ruta` varchar(255) COLLATE utf8mb4_swedish_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idproducto`, `categoriaid`, `codigo`, `nombre`, `descripcion`, `precio`, `stock`, `imagen`, `datecreated`, `ruta`, `status`) VALUES
(1, 1, '2345665677', 'Producto uno', '<p>Descripci&oacute;n Producto</p>', '100.00', 0, '', '2021-09-21 19:00:11', 'producto-uno', 1),
(2, 3, '32562456', 'Producto 1', '<p>Descripcion Producto</p> <ul> <li>uno</li> <li>dos</li> </ul>', '150.00', 10, '', '2021-09-21 22:05:26', 'producto-1', 1),
(3, 1, '2323566', 'Cinturón negro de cuero', '<p>Descripcion del cinturon</p> <table style=\"border-collapse: collapse; width: 100%;\" border=\"1\"> <tbody> <tr> <td style=\"width: 47.9392%;\">Numero</td> <td style=\"width: 47.9392%;\">Descripcion</td> </tr> <tr> <td style=\"width: 47.9392%;\">Uno</td> <td style=\"width: 47.9392%;\">Pequeno</td> </tr> <tr> <td style=\"width: 47.9392%;\">Dos</td> <td style=\"width: 47.9392%;\">Mediano</td> </tr> <tr> <td style=\"width: 47.9392%;\">Tres</td> <td style=\"width: 47.9392%;\">Grande</td> </tr> </tbody> </table>', '200.00', 50, '', '2021-09-21 23:00:12', 'cinturon-negro-de-cuero', 1),
(4, 2, '435675658', 'Producto4', '<p>Descripcion producto cuatro</p> <ul> <li>Uno</li> <li>Dos</li> <li>Tres</li> </ul>', '50.00', 10, '', '2021-09-25 14:08:56', 'producto4', 1),
(5, 1, '4366686868', 'Producto 5', '<p>Datos de Producto&nbsp;</p>', '100.00', 10, '', '2021-09-25 14:10:19', 'producto-5', 1),
(6, 1, '145356765', 'Producto 6', '<p>Descripcion</p>', '50.00', 10, '', '2021-09-25 14:15:28', '', 0),
(7, 8, '33425647', 'Producto Prueba', '<p>Descripcion producto prueba</p> <ul> <li>Uno</li> <li>Dos</li> <li>Tres</li> </ul>', '100.00', 50, '', '2021-09-25 15:43:17', 'producto-prueba', 1),
(8, 8, '123456', 'Mouse Óptico ASTRON', '<p>color negro</p>', '100.00', 2, '', '2021-10-08 20:18:45', 'mouse-optico-astron', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` bigint(20) NOT NULL,
  `nombrerol` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `nombrerol`, `descripcion`, `status`) VALUES
(1, 'Administrador', 'El mero mero', 1),
(2, 'Empleado', 'Empleado', 1),
(3, 'Vendedor', 'Acceso a ventas', 1),
(4, 'Servicio al Cliente', 'Servicio al Cliente sistema', 1),
(5, 'Bodega', 'Reportes stock', 1),
(6, 'Cordinador', 'Apoyo a gerencia', 2),
(7, 'Cliente', 'Cliente Ventas', 1),
(8, 'Ejemp rol', 'sistema prueba', 1),
(9, 'Coordinador 1', 'Sistema', 1),
(10, 'Consulta Ventas', 'Consulta Ventas', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipopago`
--

CREATE TABLE `tipopago` (
  `idtipopago` bigint(20) NOT NULL,
  `tipopago` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipopago`
--

INSERT INTO `tipopago` (`idtipopago`, `tipopago`, `status`) VALUES
(1, 'PayPal', 1),
(2, 'Efectivo', 1),
(3, 'Tarjeta', 1),
(4, 'Cheque', 1),
(5, 'Depósito Bancario', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pedidoid` (`pedidoid`),
  ADD KEY `productoid` (`productoid`);

--
-- Indices de la tabla `detalle_temp`
--
ALTER TABLE `detalle_temp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productoid` (`productoid`),
  ADD KEY `personaid` (`personaid`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id`,`productoid`),
  ADD KEY `id` (`id`),
  ADD KEY `productoid` (`productoid`);

--
-- Indices de la tabla `modulo`
--
ALTER TABLE `modulo`
  ADD PRIMARY KEY (`idmodulo`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idpedido`),
  ADD KEY `personaid` (`personaid`),
  ADD KEY `tipopagoid` (`tipopagoid`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`idpermiso`),
  ADD KEY `rolid` (`rolid`),
  ADD KEY `moduloid` (`moduloid`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idpersona`),
  ADD KEY `rolid` (`rolid`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idproducto`),
  ADD KEY `categoriaid` (`categoriaid`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `tipopago`
--
ALTER TABLE `tipopago`
  ADD PRIMARY KEY (`idtipopago`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_temp`
--
ALTER TABLE `detalle_temp`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `modulo`
--
ALTER TABLE `modulo`
  MODIFY `idmodulo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idpedido` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `idpermiso` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idpersona` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idproducto` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tipopago`
--
ALTER TABLE `tipopago`
  MODIFY `idtipopago` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD CONSTRAINT `detalle_pedido_ibfk_1` FOREIGN KEY (`pedidoid`) REFERENCES `pedido` (`idpedido`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_pedido_ibfk_2` FOREIGN KEY (`productoid`) REFERENCES `producto` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_temp`
--
ALTER TABLE `detalle_temp`
  ADD CONSTRAINT `detalle_temp_ibfk_1` FOREIGN KEY (`productoid`) REFERENCES `producto` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `imagen_ibfk_1` FOREIGN KEY (`productoid`) REFERENCES `producto` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`personaid`) REFERENCES `persona` (`idpersona`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`tipopagoid`) REFERENCES `tipopago` (`idtipopago`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_ibfk_1` FOREIGN KEY (`rolid`) REFERENCES `rol` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permisos_ibfk_2` FOREIGN KEY (`moduloid`) REFERENCES `modulo` (`idmodulo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`rolid`) REFERENCES `rol` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`categoriaid`) REFERENCES `categoria` (`idcategoria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
