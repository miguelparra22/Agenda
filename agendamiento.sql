-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-08-2020 a las 21:56:26
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
  `FK_IDCITA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`IDAGENDA`, `FK_IDEMPLEADO`, `FK_IDCITA`) VALUES
(2, 2, 5),
(3, 1, 4);

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
  `FKIDESTADO` int(11) NOT NULL,
  `FKHORARIO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`IDCITA`, `HORAPACTADA`, `HORATERMINA`, `FKIDCLIENTE`, `DESCRIPCION`, `FKIDESTADO`, `FKHORARIO`) VALUES
(1, '2020-06-03 08:33:44', '0000-00-00 00:00:00', 1, 'El cliente realizo la cita a través de la pagina web', 1, 2),
(3, '2020-07-22 17:45:14', '0000-00-00 00:00:00', 6, 'prueba', 1, 2),
(4, '2020-07-28 09:08:59', '0000-00-00 00:00:00', 6, 'prueba funcionalidad', 1, 2),
(5, '2020-08-02 17:45:14', '2020-08-02 14:41:54', 6, 'prueba', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita_servicio`
--

CREATE TABLE `cita_servicio` (
  `ID_CITA_SERVICIO` int(11) NOT NULL,
  `ID_CITA` int(11) NOT NULL,
  `ID_SERVICIO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cita_servicio`
--

INSERT INTO `cita_servicio` (`ID_CITA_SERVICIO`, `ID_CITA`, `ID_SERVICIO`) VALUES
(1, 1, 1),
(2, 5, 1);

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
(5, 'Jair Camilo Madrigal Torres 2', 'jacamimt@oulook.com', 1231, 'ce3e31dcf4ea2ec387d1c5d1930e7717a82e5c12368633cecce83b183731874efb6c79d43986922bd5eb7156109aca2368288cf402f6d4a4fd32dec09a6ebf1f'),
(6, 'Jair Camilo Madrigal Torres', '123', 123, '915bc33bc4f2734900e2fedb8bb1fc29ae615a145d5f42d88ccdd45a8e8f2c0c79110756c70528fda6a198e0c4994fb9697fc943ff730dc2bacc1ffe9c391aec');

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
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `ID_EMPLEADO` int(11) NOT NULL,
  `NombreEmpleado` varchar(50) NOT NULL,
  `CorreoEmpleado` varchar(80) NOT NULL,
  `PasswordEmpleado` longtext NOT NULL,
  `ESPECIALIDAD` varchar(25) NOT NULL,
  `ESTADO` char(1) NOT NULL,
  `FK_ROL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`ID_EMPLEADO`, `NombreEmpleado`, `CorreoEmpleado`, `PasswordEmpleado`, `ESPECIALIDAD`, `ESTADO`, `FK_ROL`) VALUES
(1, 'Miguel Angel Orjuela Parra', 'orjuelaparra@gmail.com', '123', '', '1', 2),
(2, 'Jair', 'jacamimt@oulook.com', '915bc33bc4f2734900e2fedb8bb1fc29ae615a145d5f42d88ccdd45a8e8f2c0c79110756c70528fda6a198e0c4994fb9697fc943ff730dc2bacc1ffe9c391aec', '', '1', 1),
(6, 'Jair', 'jacamimt@outlook.com', '915bc33bc4f2734900e2fedb8bb1fc29ae615a145d5f42d88ccdd45a8e8f2c0c79110756c70528fda6a198e0c4994fb9697fc943ff730dc2bacc1ffe9c391aec', '', '1', 1);

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
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `ID_HORARIO` int(11) NOT NULL,
  `Hora_inicio` time NOT NULL,
  `Hora_Fin` time NOT NULL,
  `FK_EMPLEADO` int(11) NOT NULL,
  `Disponibilidad` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`ID_HORARIO`, `Hora_inicio`, `Hora_Fin`, `FK_EMPLEADO`, `Disponibilidad`) VALUES
(2, '12:00:00', '18:30:00', 1, 'L-Vaa');

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
  `FK_IDEMPLEADO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`ID_SERVICIO`, `NombreServicio`, `DescripcionServicio`, `CantidadServicio`, `FK_IDEMPLEADO`) VALUES
(1, 'Manicure3', 'Se realiza el servicio de limpieza y arreglo de uñas Prueba Editar', 26223, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`IDAGENDA`),
  ADD KEY `FK_IDEMPELADO` (`FK_IDEMPLEADO`),
  ADD KEY `FK_IDCITA` (`FK_IDCITA`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`IDCITA`),
  ADD KEY `FKIDESTADO` (`FKIDESTADO`),
  ADD KEY `FKHORARIO` (`FKHORARIO`),
  ADD KEY `FKIDLCIENTE` (`FKIDCLIENTE`);

--
-- Indices de la tabla `cita_servicio`
--
ALTER TABLE `cita_servicio`
  ADD PRIMARY KEY (`ID_CITA_SERVICIO`),
  ADD KEY `ID_CITA` (`ID_CITA`),
  ADD KEY `ID_SERVICIO` (`ID_SERVICIO`);

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
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`ID_EMPLEADO`),
  ADD KEY `FK_ROL` (`FK_ROL`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`IDESTADO`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`ID_HORARIO`),
  ADD KEY `FK_EMPLEADO` (`FK_EMPLEADO`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`ID_ROl`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`ID_SERVICIO`),
  ADD KEY `FK_IDEMPLEADO` (`FK_IDEMPLEADO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agenda`
--
ALTER TABLE `agenda`
  MODIFY `IDAGENDA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `IDCITA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cita_servicio`
--
ALTER TABLE `cita_servicio`
  MODIFY `ID_CITA_SERVICIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `IDCLIENTE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `ID_EMPLEADO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `IDESTADO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `ID_HORARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `ID_ROl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `ID_SERVICIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `agenda_ibfk_1` FOREIGN KEY (`FK_IDEMPLEADO`) REFERENCES `empleado` (`ID_EMPLEADO`),
  ADD CONSTRAINT `agenda_ibfk_2` FOREIGN KEY (`FK_IDCITA`) REFERENCES `citas` (`IDCITA`);

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`FKIDESTADO`) REFERENCES `estado` (`IDESTADO`),
  ADD CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`FKHORARIO`) REFERENCES `horario` (`ID_HORARIO`),
  ADD CONSTRAINT `citas_ibfk_4` FOREIGN KEY (`FKIDCLIENTE`) REFERENCES `cliente` (`IDCLIENTE`);

--
-- Filtros para la tabla `cita_servicio`
--
ALTER TABLE `cita_servicio`
  ADD CONSTRAINT `cita_servicio_ibfk_1` FOREIGN KEY (`ID_CITA`) REFERENCES `citas` (`IDCITA`),
  ADD CONSTRAINT `cita_servicio_ibfk_2` FOREIGN KEY (`ID_SERVICIO`) REFERENCES `servicio` (`ID_SERVICIO`);

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_2` FOREIGN KEY (`FK_ROL`) REFERENCES `rol` (`ID_ROl`);

--
-- Filtros para la tabla `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `horario_ibfk_1` FOREIGN KEY (`FK_EMPLEADO`) REFERENCES `empleado` (`ID_EMPLEADO`);

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `servicio_ibfk_1` FOREIGN KEY (`FK_IDEMPLEADO`) REFERENCES `empleado` (`ID_EMPLEADO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
