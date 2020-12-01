-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2020 a las 05:06:22
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
('CORREO', 'clave para el correo encargado de envíos', 'CLAVE', 'Djane.notificaciones8'),
('CORREO', 'Dirección de correo encargado para envíos', 'CORREO', 'alertasynotificaciones.djane@gmail.com'),
('CORREO', 'Protocolo simple de transferencia de correo SMTP', 'HOST', 'smtp.gmail.com'),
('CORREO', 'Puerto para los protocolos de correo ', 'PORT', '587'),
('HORA', 'Hora de inicio de jornada. Formato 24 horas', 'HORAENTRADA', '07:00:00'),
('HORA', 'Hora de fin de jornada. Formato 24 horas', 'HORASALIDA', '20:00:00');

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
  `ESTADO` char(1) NOT NULL,
  `FK_ROL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

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
-- Estructura de tabla para la tabla `notificacion`
--

CREATE TABLE `notificacion` (
  `idNotificacion` int(11) NOT NULL,
  `idCita` int(11) NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `idAplica` int(11) NOT NULL,
  `idRol` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `notificacion`
--
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
  `Precio_Servicio` int(11) NOT NULL,
  `TIEMPO_LIMITE` float NOT NULL,
  `Grupo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicio`
--


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
  ADD KEY `FK_ROL` (`FK_ROL`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`IDESTADO`);

--
-- Indices de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  ADD PRIMARY KEY (`idNotificacion`);

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
  MODIFY `IDAGENDA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `IDCITA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `IDCLIENTE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dias_habiles`
--
ALTER TABLE `dias_habiles`
  MODIFY `ID_DIASHABILES` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `ID_EMPLEADO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `IDESTADO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  MODIFY `idNotificacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `recuperacion_clave`
--
ALTER TABLE `recuperacion_clave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `ID_ROl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `ID_SERVICIO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicio_empleado`
--
ALTER TABLE `servicio_empleado`
  MODIFY `ID_SERVICIO_EMPLEADO` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `empleado_ibfk_2` FOREIGN KEY (`FK_ROL`) REFERENCES `rol` (`ID_ROl`);

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
