-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-09-2020 a las 06:46:31
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agendamiento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE `agenda` (
  `IDAGENDA` int(11) NOT NULL,
  `FK_IDEMPLEADO` int(11) NOT NULL,
  `FK_IDCITA` int(11) NOT NULL,
  `FK_IDSERVICIO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`IDAGENDA`, `FK_IDEMPLEADO`, `FK_IDCITA`, `FK_IDSERVICIO`) VALUES
(4, 7, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `IDCITA` int(11) NOT NULL,
  `HORAPACTADA` datetime NOT NULL,
  `HORATERMINA` datetime NOT NULL,
  `FKIDCLIENTE` int(11) NOT NULL,
  `DESCRIPCION` varchar(100) NOT NULL,
  `FKIDESTADO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`IDCITA`, `HORAPACTADA`, `HORATERMINA`, `FKIDCLIENTE`, `DESCRIPCION`, `FKIDESTADO`) VALUES
(1, '2020-06-03 08:33:44', '0000-00-00 00:00:00', 1, 'El cliente realizo la cita a través de la pagina web', 1),
(3, '2020-07-22 17:45:14', '0000-00-00 00:00:00', 6, 'prueba', 1),
(4, '2020-07-28 09:08:59', '0000-00-00 00:00:00', 6, 'prueba funcionalidad', 1),
(5, '2020-08-02 17:45:14', '2020-08-02 14:41:54', 6, 'prueba', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `IDCLIENTE` int(11) NOT NULL,
  `ClienteNombre` varchar(50) NOT NULL,
  `CorreoCliente` varchar(80) NOT NULL,
  `TELEFONO_CLIENT` bigint(20) NOT NULL,
  `PasswordCliente` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`IDCLIENTE`, `ClienteNombre`, `CorreoCliente`, `TELEFONO_CLIENT`, `PasswordCliente`) VALUES
(1, 'Tinoco Johan', 'tinoco8johan@gmail.com', 3025865413, '12345'),
(2, 'migue', 'orjuelaparra@gmail.com', 213, '123'),
(6, 'Jair Camilo Madrigal Torres', '123', 123, '915bc33bc4f2734900e2fedb8bb1fc29ae615a145d5f42d88ccdd45a8e8f2c0c79110756c70528fda6a198e0c4994fb9697fc943ff730dc2bacc1ffe9c391aec'),
(21, 'Jair Camilo Madrigal Torres', 'jacamimt@oulook2.com', 123, '915bc33bc4f2734900e2fedb8bb1fc29ae615a145d5f42d88ccdd45a8e8f2c0c79110756c70528fda6a198e0c4994fb9697fc943ff730dc2bacc1ffe9c391aec');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE `configuracion` (
  `IdConfiguracion` varchar(20) NOT NULL,
  `DesConfiguracion` varchar(100) DEFAULT NULL,
  `NombreConfiguracion` varchar(50) NOT NULL,
  `ValorConfiguracion` varchar(750) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`IdConfiguracion`, `DesConfiguracion`, `NombreConfiguracion`, `ValorConfiguracion`) VALUES
('CORREO', 'clave para el correo encargado de envíos', 'CLAVE', 'johanTinoco2803'),
('CORREO', 'Dirección de correo encargado para envíos', 'CORREO', 'tinoco8johan@gmail.com'),
('CORREO', 'Protocolo simple de transferencia de correo SMTP', 'HOST', 'smtp.gmail.com'),
('CORREO', 'Puerto para los protocolos de correo ', 'PORT', '587');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dias_habiles`
--

CREATE TABLE `dias_habiles` (
  `ID_DIASHABILES` int(11) NOT NULL,
  `ID_EMPLEADO` int(11) NOT NULL,
  `DIAHABIL` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `ID_EMPLEADO` int(11) NOT NULL,
  `NombreEmpleado` varchar(50) NOT NULL,
  `CorreoEmpleado` varchar(80) NOT NULL,
  `PasswordEmpleado` longtext NOT NULL,
  `ESPECIALIDAD` varchar(25) NOT NULL,
  `ESTADO` int(1) NOT NULL,
  `FK_ROL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`ID_EMPLEADO`, `NombreEmpleado`, `CorreoEmpleado`, `PasswordEmpleado`, `ESPECIALIDAD`, `ESTADO`, `FK_ROL`) VALUES
(1, 'Miguel Angel Orjuela', 'orjuelaparra@gmail.com', '123', 'Probar', 2, 2),
(7, 'Jair', 'jacamimt@outlook2.com', '915bc33bc4f2734900e2fedb8bb1fc29ae615a145d5f42d88ccdd45a8e8f2c0c79110756c70528fda6a198e0c4994fb9697fc943ff730dc2bacc1ffe9c391aec', 'nose', 1, 1),
(8, 'Jair2', 'jacamimt@outlook3.com', '915bc33bc4f2734900e2fedb8bb1fc29ae615a145d5f42d88ccdd45a8e8f2c0c79110756c70528fda6a198e0c4994fb9697fc943ff730dc2bacc1ffe9c391aec', '123', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `IDESTADO` int(11) NOT NULL,
  `DescripcionEstado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`IDESTADO`, `DescripcionEstado`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recuperacion_clave`
--

CREATE TABLE `recuperacion_clave` (
  `id` int(11) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `token` longtext NOT NULL,
  `fecha` datetime NOT NULL,
  `verificado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `recuperacion_clave`
--

INSERT INTO `recuperacion_clave` (`id`, `correo`, `codigo`, `token`, `fecha`, `verificado`) VALUES
(1, 'jacamimt@outlook.com', 'GKEOGN', '66c181521341e3638592d799520478502d0082e4', '2020-08-18 11:42:25', 1),
(2, 'jacamimt@outlook.com', 'JDMBUJ', 'f6ca83ea4719428c7393b3e03ab4f5cca12bb313', '2020-08-18 11:43:14', 0),
(3, 'jacamimt@outlook.com', '2KYOGP', '520404c64a0b69f834ac818a9c8e977e7102c204', '2020-08-18 11:45:32', 0),
(4, 'jacamimt@outlook.com', 'NW9MAZ', 'd03156dfdc385e7fd93db9142c03ba4f14980c5e', '2020-08-18 11:47:10', 0),
(5, 'jacamimt@outlook.com', 'FV6HKX', 'e848d426682a23472c30a3472f9dd33d808dcaa8', '2020-08-18 11:48:46', 0),
(6, 'jacamimt@outlook.com', 'PZK9N9', '810ed7599e91920ee3b0b6918e532f39207cded7', '2020-08-18 11:53:03', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `ID_ROl` int(11) NOT NULL,
  `NombreRol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`ID_ROl`, `NombreRol`) VALUES
(1, 'Administrador'),
(2, 'Empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `ID_SERVICIO` int(11) NOT NULL,
  `NombreServicio` varchar(60) NOT NULL,
  `DescripcionServicio` varchar(150) NOT NULL,
  `CantidadServicio` int(11) NOT NULL,
  `Precio_Servicio` int(11) NOT NULL,
  `TIEMPO_LIMITE` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`ID_SERVICIO`, `NombreServicio`, `DescripcionServicio`, `CantidadServicio`, `Precio_Servicio`, `TIEMPO_LIMITE`) VALUES
(1, 'Manicure', 'Se realiza el servicio de limpieza y arreglo de uñas Prueba Editar', 0, 2111111, 132),
(8, 'Nuevo Servicio', 'prueba', 0, 213, 30),
(9, 'Manicure3', '3', 2, 12, 0),
(10, 'prueba3', '3', 1, 52, 30),
(11, 'prueba4', '4', 1, 52, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_empleado`
--

CREATE TABLE `servicio_empleado` (
  `ID_SERVICIO_EMPLEADO` int(11) NOT NULL,
  `ID_EMPLEADO` int(11) NOT NULL,
  `ID_SERVICIO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicio_empleado`
--

INSERT INTO `servicio_empleado` (`ID_SERVICIO_EMPLEADO`, `ID_EMPLEADO`, `ID_SERVICIO`) VALUES
(1, 7, 1),
(2, 7, 8),
(3, 1, 1),
(4, 1, 8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`IDAGENDA`),
  ADD KEY `FK_IDEMPELADO` (`FK_IDEMPLEADO`),
  ADD KEY `FK_IDCITA` (`FK_IDCITA`),
  ADD KEY `FK_IDSERVICIO` (`FK_IDSERVICIO`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`IDCITA`),
  ADD KEY `FKIDESTADO` (`FKIDESTADO`),
  ADD KEY `FKIDLCIENTE` (`FKIDCLIENTE`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`IDCLIENTE`);

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`IdConfiguracion`,`NombreConfiguracion`,`ValorConfiguracion`);

--
-- Indices de la tabla `dias_habiles`
--
ALTER TABLE `dias_habiles`
  ADD PRIMARY KEY (`ID_DIASHABILES`),
  ADD KEY `ID_EMPLEADO` (`ID_EMPLEADO`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`ID_EMPLEADO`),
  ADD KEY `FK_ROL` (`FK_ROL`),
  ADD KEY `ESTADO` (`ESTADO`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`IDESTADO`);

--
-- Indices de la tabla `recuperacion_clave`
--
ALTER TABLE `recuperacion_clave`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`ID_ROl`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`ID_SERVICIO`);

--
-- Indices de la tabla `servicio_empleado`
--
ALTER TABLE `servicio_empleado`
  ADD PRIMARY KEY (`ID_SERVICIO_EMPLEADO`),
  ADD KEY `ID_EMPLEADO` (`ID_EMPLEADO`),
  ADD KEY `ID_SERVICIO` (`ID_SERVICIO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agenda`
--
ALTER TABLE `agenda`
  MODIFY `IDAGENDA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `IDCITA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `IDCLIENTE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `dias_habiles`
--
ALTER TABLE `dias_habiles`
  MODIFY `ID_DIASHABILES` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `ID_EMPLEADO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `IDESTADO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `recuperacion_clave`
--
ALTER TABLE `recuperacion_clave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `ID_ROl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `ID_SERVICIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `servicio_empleado`
--
ALTER TABLE `servicio_empleado`
  MODIFY `ID_SERVICIO_EMPLEADO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `agenda_ibfk_1` FOREIGN KEY (`FK_IDEMPLEADO`) REFERENCES `empleado` (`ID_EMPLEADO`),
  ADD CONSTRAINT `agenda_ibfk_2` FOREIGN KEY (`FK_IDCITA`) REFERENCES `citas` (`IDCITA`),
  ADD CONSTRAINT `agenda_ibfk_3` FOREIGN KEY (`FK_IDSERVICIO`) REFERENCES `servicio` (`ID_SERVICIO`);

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`FKIDESTADO`) REFERENCES `estado` (`IDESTADO`),
  ADD CONSTRAINT `citas_ibfk_4` FOREIGN KEY (`FKIDCLIENTE`) REFERENCES `cliente` (`IDCLIENTE`);

--
-- Filtros para la tabla `dias_habiles`
--
ALTER TABLE `dias_habiles`
  ADD CONSTRAINT `dias_habiles_ibfk_1` FOREIGN KEY (`ID_EMPLEADO`) REFERENCES `empleado` (`ID_EMPLEADO`);

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_2` FOREIGN KEY (`FK_ROL`) REFERENCES `rol` (`ID_ROl`),
  ADD CONSTRAINT `empleado_ibfk_3` FOREIGN KEY (`ESTADO`) REFERENCES `estado` (`IDESTADO`);

--
-- Filtros para la tabla `servicio_empleado`
--
ALTER TABLE `servicio_empleado`
  ADD CONSTRAINT `servicio_empleado_ibfk_1` FOREIGN KEY (`ID_SERVICIO`) REFERENCES `servicio` (`ID_SERVICIO`),
  ADD CONSTRAINT `servicio_empleado_ibfk_2` FOREIGN KEY (`ID_EMPLEADO`) REFERENCES `empleado` (`ID_EMPLEADO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
