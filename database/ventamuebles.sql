-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-01-2021 a las 07:08:58
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventamuebles`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacenamiento`
--

CREATE TABLE `almacenamiento` (
  `codigo_almacenamiento` varchar(7) NOT NULL,
  `tamaño` enum('closets','cajoneras','muebles tv','bifers','repisas','bibliotecas','bares','zapateros') NOT NULL,
  `precio_compra` int(11) NOT NULL,
  `precio_venta` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_user` int(3) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camas`
--

CREATE TABLE `camas` (
  `codigo_cama` varchar(7) NOT NULL,
  `tamaño` enum('sencilla','semidoble','doble','cuna','base de cama','colchon','protector de colchon','colchon infantil') NOT NULL,
  `precio_compra` int(11) NOT NULL,
  `precio_venta` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_user` int(3) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `camas`
--

INSERT INTO `camas` (`codigo_cama`, `tamaño`, `precio_compra`, `precio_venta`, `stock`, `created_user`, `created_date`, `updated_user`, `updated_date`) VALUES
('B000001', 'semidoble', 50000, 70000, -1, 1, '2021-01-03 07:07:56', 1, '2021-01-03 10:51:09'),
('B000002', 'cuna', 50000, 55000, 10, 1, '2021-01-03 08:29:04', 1, '2021-01-06 05:32:23'),
('B000003', 'semidoble', 40000, 70000, 30, 1, '2021-01-03 11:44:37', 1, '2021-01-04 08:27:01'),
('B000004', 'semidoble', 30000, 40000, 0, 1, '2021-01-06 05:20:17', 1, '2021-01-06 05:20:17'),
('B000005', 'base de cama', 20, 30, 20, 1, '2021-01-06 05:26:03', 1, '2021-01-06 05:32:43');

-- --------------------------------------------------------

---- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesas`
--

CREATE TABLE `mesas` (
  `codigo_mesa` varchar(7) NOT NULL,
  `tamaño` enum('mesas comedores','mesas infantiles','mesas exteriores','mesas plegables','mesas de noche','mesas de centro','mesas auxiliares','tocadores') NOT NULL,
  `precio_compra` int(11) NOT NULL,
  `precio_venta` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_user` int(3) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sofas`
--

CREATE TABLE `sofas` (
  `codigo_sofa` varchar(7) NOT NULL,
  `tamaño` enum('2 puestos','3 puestos','sofa cama','sofas en L','sofas exteriores','juegos de sala','cobertores de sofa','poltronas','poltronas reclinables','puffs') NOT NULL,
  `precio_compra` int(11) NOT NULL,
  `precio_venta` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_user` int(3) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion_almacenamiento`
--

CREATE TABLE `transaccion_almacenamiento` (
  `codigo_transaccion` varchar(15) NOT NULL,
  `fecha` date NOT NULL,
  `codigo_almacenamiento` varchar(7) NOT NULL,
  `numero` int(11) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tipo_transaccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion_camas`
--

CREATE TABLE `transaccion_camas` (
  `codigo_transaccion` varchar(15) NOT NULL,
  `fecha` date NOT NULL,
  `codigo_cama` varchar(7) NOT NULL,
  `numero` int(11) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tipo_transaccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `transaccion_camas`
--

INSERT INTO `transaccion_camas` (`codigo_transaccion`, `fecha`, `codigo_cama`, `numero`, `created_user`, `created_date`, `tipo_transaccion`) VALUES
('TM-2021-0000001', '2021-01-03', 'B000002', 3, 1, '2021-01-03 10:48:29', 'Salida'),
('TM-2021-0000006', '2021-01-03', 'B000002', 7, 1, '2021-01-03 10:43:20', 'Entrada'),
('TM-2021-0000007', '2021-01-03', 'B000002', 12, 1, '2021-01-03 10:50:51', 'Salida'),
('TM-2021-0000009', '2021-01-03', 'B000001', 1, 1, '2021-01-03 10:51:09', 'Salida'),
('TM-2021-0000010', '2021-01-03', 'B000003', 30, 1, '2021-01-03 11:44:52', 'Entrada'),
('TM-2021-0000011', '2021-01-06', 'B000005', 1, 1, '2021-01-06 05:26:21', 'Entrada'),
('TM-2021-0000012', '2021-01-06', 'B000002', 10, 1, '2021-01-06 05:27:00', 'Entrada'),
('TM-2021-0000013', '2021-01-06', 'B000002', 10, 1, '2021-01-06 05:32:23', 'Entrada'),
('TM-2021-0000014', '2021-01-06', 'B000005', 20, 1, '2021-01-06 05:32:43', 'Entrada');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion_mesas`
--

CREATE TABLE `transaccion_mesas` (
  `codigo_transaccion` varchar(15) NOT NULL,
  `fecha` date NOT NULL,
  `codigo_mesa` varchar(7) NOT NULL,
  `numero` int(11) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tipo_transaccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion_sofas`
--

CREATE TABLE `transaccion_sofas` (
  `codigo_transaccion` varchar(15) NOT NULL,
  `fecha` date NOT NULL,
  `codigo_sofa` varchar(7) NOT NULL,
  `numero` int(11) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tipo_transaccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name_user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefono` varchar(13) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `permisos_acceso` enum('Admin','Empleado') NOT NULL,
  `status` enum('activo','bloqueado') NOT NULL DEFAULT 'activo',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `username`, `name_user`, `password`, `email`, `telefono`, `foto`, `permisos_acceso`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'info@sist.com', '7025', 'user-default.png', 'Admin', 'activo', '2017-04-01 08:15:15', '2017-07-25 23:35:23'),
(2, 'juan', 'juan', 'a94652aa97c7211ba8954dd15a3cf838', 'juab@juan.com', '12000', NULL, 'Empleado', 'activo', '2017-07-25 22:34:03', '2017-07-25 22:42:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `almacenamiento`
--
ALTER TABLE `almacenamiento`
  ADD PRIMARY KEY (`codigo_almacenamiento`),
  ADD KEY `created_user` (`created_user`),
  ADD KEY `updated_user` (`updated_user`);

--
-- Indices de la tabla `camas`
--
ALTER TABLE `camas`
  ADD PRIMARY KEY (`codigo_cama`),
  ADD KEY `created_user` (`created_user`),
  ADD KEY `updated_user` (`updated_user`);

--
-- Indices de la tabla `mesas`
--
ALTER TABLE `mesas`
  ADD PRIMARY KEY (`codigo_mesa`),
  ADD KEY `created_user` (`created_user`),
  ADD KEY `updated_user` (`updated_user`);

--
-- Indices de la tabla `sofas`
--
ALTER TABLE `sofas`
  ADD PRIMARY KEY (`codigo_sofa`),
  ADD KEY `created_user` (`created_user`),
  ADD KEY `updated_user` (`updated_user`);

--
-- Indices de la tabla `transaccion_almacenamiento`
--
ALTER TABLE `transaccion_almacenamiento`
  ADD PRIMARY KEY (`codigo_transaccion`),
  ADD KEY `id_barang` (`codigo_almacenamiento`),
  ADD KEY `created_user` (`created_user`);

--
-- Indices de la tabla `transaccion_camas`
--
ALTER TABLE `transaccion_camas`
  ADD PRIMARY KEY (`codigo_transaccion`),
  ADD KEY `id_barang` (`codigo_cama`),
  ADD KEY `created_user` (`created_user`);

--
-- Indices de la tabla `transaccion_mesas`
--
ALTER TABLE `transaccion_mesas`
  ADD PRIMARY KEY (`codigo_transaccion`),
  ADD KEY `id_barang` (`codigo_mesa`),
  ADD KEY `created_user` (`created_user`);

--
-- Indices de la tabla `transaccion_sofas`
--
ALTER TABLE `transaccion_sofas`
  ADD PRIMARY KEY (`codigo_transaccion`),
  ADD KEY `id_barang` (`codigo_sofa`),
  ADD KEY `created_user` (`created_user`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `level` (`permisos_acceso`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `almacenamiento`
--
ALTER TABLE `almacenamiento`
  ADD CONSTRAINT `almacenamiento_ibfk_1` FOREIGN KEY (`created_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `almacenamiento_ibfk_2` FOREIGN KEY (`updated_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `camas`
--
ALTER TABLE `camas`
  ADD CONSTRAINT `camas_ibfk_1` FOREIGN KEY (`created_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `camas_ibfk_2` FOREIGN KEY (`updated_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mesas`
--
ALTER TABLE `mesas`
  ADD CONSTRAINT `mesas_ibfk_1` FOREIGN KEY (`created_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mesas_ibfk_2` FOREIGN KEY (`updated_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sofas`
--
ALTER TABLE `sofas`
  ADD CONSTRAINT `sofas_ibfk_1` FOREIGN KEY (`created_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sofas_ibfk_2` FOREIGN KEY (`updated_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `transaccion_almacenamiento`
--
ALTER TABLE `transaccion_almacenamiento`
  ADD CONSTRAINT `transaccion_almacenamiento_ibfk_1` FOREIGN KEY (`codigo_almacenamiento`) REFERENCES `almacenamiento` (`codigo_almacenamiento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaccion_almacenamiento_ibfk_2` FOREIGN KEY (`created_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `transaccion_camas`
--
ALTER TABLE `transaccion_camas`
  ADD CONSTRAINT `transaccion_camas_ibfk_1` FOREIGN KEY (`codigo_cama`) REFERENCES `camas` (`codigo_cama`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaccion_camas_ibfk_2` FOREIGN KEY (`created_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `transaccion_mesas`
--
ALTER TABLE `transaccion_mesas`
  ADD CONSTRAINT `transaccion_mesas_ibfk_1` FOREIGN KEY (`codigo_mesa`) REFERENCES `mesas` (`codigo_mesa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaccion_mesas_ibfk_2` FOREIGN KEY (`created_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `transaccion_sofas`
--
ALTER TABLE `transaccion_sofas`
  ADD CONSTRAINT `transaccion_sofas_ibfk_1` FOREIGN KEY (`codigo_sofa`) REFERENCES `sofas` (`codigo_sofa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaccion_sofas_ibfk_2` FOREIGN KEY (`created_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
