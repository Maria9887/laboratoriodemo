-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 12-02-2024 a las 21:08:46
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laboratoriodemo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogoauxiliarestomamuestra`
--

CREATE TABLE `catalogoauxiliarestomamuestra` (
  `AuxiliarID` int(11) NOT NULL,
  `NombreAuxiliar` varchar(100) DEFAULT NULL,
  `Activo` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `catalogoauxiliarestomamuestra`
--

INSERT INTO `catalogoauxiliarestomamuestra` (`AuxiliarID`, `NombreAuxiliar`, `Activo`) VALUES
(1, 'Aux. García', 'SI'),
(2, 'Aux. Rodríguez', 'SI'),
(3, 'Aux. Pérez', 'NO'),
(4, 'Aux. López', 'SI'),
(5, 'Aux. Martínez', 'SI'),
(6, 'Aux. Sánchez', 'SI'),
(7, 'Aux. Fernández', 'NO'),
(8, 'Aux. González', 'SI'),
(9, 'Aux. Ramírez', 'SI'),
(10, 'Aux. Torres', 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogoempleadosatendieron`
--

CREATE TABLE `catalogoempleadosatendieron` (
  `EmpleadoID` int(11) NOT NULL,
  `NombreEmpleado` varchar(100) DEFAULT NULL,
  `Activo` char(2) DEFAULT NULL,
  `userID` char(20) DEFAULT NULL,
  `password` char(20) DEFAULT NULL,
  `username` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `catalogoempleadosatendieron`
--

INSERT INTO `catalogoempleadosatendieron` (`EmpleadoID`, `NombreEmpleado`, `Activo`, `userID`, `password`, `username`) VALUES
(1, 'Dr. García', NULL, 'user1', '123456', 'Usuario 1'),
(2, 'Dra. Rodríguez', NULL, 'user2', 'contraseña2', 'Usuario 2'),
(3, 'Dr. Pérez', NULL, 'user3', 'contraseña3', 'Usuario 3'),
(4, 'Dr. López', NULL, 'user4', 'contraseña4', 'Usuario 4'),
(5, 'Dra. Martínez', NULL, 'user5', 'contraseña5', 'Usuario 5'),
(6, 'Dra. Sánchez', NULL, 'user6', 'contraseña6', 'Usuario 6'),
(7, 'Dr. Fernández', NULL, 'user7', 'contraseña7', 'Usuario 7'),
(8, 'Dra. González', NULL, 'user8', 'contraseña8', 'Usuario 8'),
(9, 'Dr. Ramírez', NULL, 'user9', 'contraseña9', 'Usuario 9'),
(10, 'Dra. Torres', NULL, 'user10', 'contraseña10', 'Usuario 10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogoestudios`
--

CREATE TABLE `catalogoestudios` (
  `EstudioID` int(11) NOT NULL,
  `NombreEstudio` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `catalogoestudios`
--

INSERT INTO `catalogoestudios` (`EstudioID`, `NombreEstudio`) VALUES
(1, 'Hemograma'),
(2, 'Perfil Lipídico'),
(3, 'Glucosa en Sangre'),
(4, 'Análisis de Orina'),
(5, 'Perfil Hepático');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogosubnombresestudio`
--

CREATE TABLE `catalogosubnombresestudio` (
  `SubnombreEstudioID` int(11) NOT NULL,
  `EstudioID` int(11) DEFAULT NULL,
  `SubnombreEstudio` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `catalogosubnombresestudio`
--

INSERT INTO `catalogosubnombresestudio` (`SubnombreEstudioID`, `EstudioID`, `SubnombreEstudio`) VALUES
(1, 1, 'Conteo de Glóbulos Rojos'),
(2, 4, 'Color de Orina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `id_ciudad` int(11) NOT NULL,
  `nombre_ciudad` char(50) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`id_ciudad`, `nombre_ciudad`, `id_estado`) VALUES
(1, 'Monterrey', 1),
(2, 'Guadalajara', 2),
(3, 'León', 3),
(4, 'Querétaro', 4),
(5, 'Veracruz', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre_cliente` char(100) DEFAULT NULL,
  `apellido_paterno` char(100) DEFAULT NULL,
  `apellido_materno` char(100) DEFAULT NULL,
  `calle_numero` char(100) DEFAULT NULL,
  `id_colonia` int(11) DEFAULT NULL,
  `id_codigo_postal` int(11) DEFAULT NULL,
  `id_ciudad` int(11) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre_cliente`, `apellido_paterno`, `apellido_materno`, `calle_numero`, `id_colonia`, `id_codigo_postal`, `id_ciudad`, `id_estado`) VALUES
(1, 'Juan', 'Pérez', 'Gómez', 'Hidalgo 123', 1, 1, 1, 1),
(2, 'Ana', 'López', 'Martínez', 'Revolución 456', 2, 2, 2, 2),
(3, 'Carlos', 'Rodríguez', 'Sánchez', 'Zaragoza 789', 3, 3, 3, 3),
(4, 'María', 'García', 'Hernández', 'Corregidora 101', 4, 4, 4, 4),
(5, 'Jorge', 'Martínez', 'Ruíz', 'Madero 202', 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigos_postales`
--

CREATE TABLE `codigos_postales` (
  `id_codigo_postal` int(11) NOT NULL,
  `codigo_postal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `codigos_postales`
--

INSERT INTO `codigos_postales` (`id_codigo_postal`, `codigo_postal`) VALUES
(1, 64000),
(2, 44100),
(3, 37000),
(4, 76000),
(5, 91700);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colonias`
--

CREATE TABLE `colonias` (
  `id_colonia` int(11) NOT NULL,
  `nombre_colonia` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `colonias`
--

INSERT INTO `colonias` (`id_colonia`, `nombre_colonia`) VALUES
(1, 'Centro'),
(2, 'Americana'),
(3, 'Obrera'),
(4, 'Alamos'),
(5, 'Zaragoza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id_estado` int(11) NOT NULL,
  `nombre_estado` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id_estado`, `nombre_estado`) VALUES
(1, 'Nuevo León'),
(2, 'Jalisco'),
(3, 'Guanajuato'),
(4, 'Querétaro'),
(5, 'Veracruz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenestudios`
--

CREATE TABLE `ordenestudios` (
  `OrdenEstudioID` int(11) NOT NULL,
  `PacienteID` int(11) DEFAULT NULL,
  `EmpleadoAtendioID` int(11) DEFAULT NULL,
  `AuxiliarTomaMuestraID` int(11) DEFAULT NULL,
  `FechaOrden` date DEFAULT NULL,
  `NumeroControlOrden` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ordenestudios`
--

INSERT INTO `ordenestudios` (`OrdenEstudioID`, `PacienteID`, `EmpleadoAtendioID`, `AuxiliarTomaMuestraID`, `FechaOrden`, `NumeroControlOrden`) VALUES
(1, 1, 1, 1, '2023-10-10', 'ORD-001'),
(2, 2, 2, 2, '2023-10-11', 'ORD-002'),
(3, 3, 3, 3, '2023-10-12', 'ORD-003'),
(4, 4, 4, 4, '2023-10-13', 'ORD-004'),
(5, 5, 5, 5, '2023-10-14', 'ORD-005'),
(6, 6, 6, 6, '2023-10-15', 'ORD-006'),
(7, 7, 7, 7, '2023-10-16', 'ORD-007'),
(8, 8, 8, 8, '2023-10-17', 'ORD-008'),
(9, 9, 9, 9, '2023-10-18', 'ORD-009'),
(10, 10, 10, 10, '2023-10-19', 'ORD-010');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `PacienteID` int(11) NOT NULL,
  `ApellidoPaterno` varchar(50) DEFAULT NULL,
  `ApellidoMaterno` varchar(50) DEFAULT NULL,
  `Nombres` varchar(100) DEFAULT NULL,
  `Domicilio` varchar(255) DEFAULT NULL,
  `TelefonoCasa` varchar(15) DEFAULT NULL,
  `TelefonoCelular` varchar(15) DEFAULT NULL,
  `CallePrincipal` varchar(100) DEFAULT NULL,
  `NumeroDomicilio` varchar(10) DEFAULT NULL,
  `ColoniaFraccionamiento` varchar(100) DEFAULT NULL,
  `CodigoPostal` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`PacienteID`, `ApellidoPaterno`, `ApellidoMaterno`, `Nombres`, `Domicilio`, `TelefonoCasa`, `TelefonoCelular`, `CallePrincipal`, `NumeroDomicilio`, `ColoniaFraccionamiento`, `CodigoPostal`) VALUES
(1, 'González', 'Pérez', 'Ana', 'Calle 123', '555-123-4567', '555-111-2222', 'Principal 1', '123', 'Colonia A', '12345'),
(2, 'López', 'Rodríguez', 'Juan', 'Calle 456', '555-987-6543', '555-333-4444', 'Principal 2', '456', 'Colonia B', '54321'),
(3, 'Martínez', 'García', 'María', 'Calle 789', '555-555-5555', '555-555-5555', 'Principal 3', '789', 'Colonia C', '67890'),
(4, 'Hernández', 'Fernández', 'Pedro', 'Calle 321', '555-777-8888', '555-444-3333', 'Principal 4', '321', 'Colonia D', '98765'),
(5, 'Ramírez', 'Torres', 'Luisa', 'Calle 654', '555-444-1111', '555-888-9999', 'Principal 5', '654', 'Colonia E', '23456'),
(6, 'Díaz', 'Sánchez', 'Carlos', 'Calle 987', '555-222-3333', '555-111-9999', 'Principal 6', '987', 'Colonia F', '34567'),
(7, 'Gómez', 'Luna', 'Laura', 'Calle 210', '555-777-2222', '555-777-4444', 'Principal 7', '210', 'Colonia G', '45678'),
(8, 'Fernández', 'Mendoza', 'José', 'Calle 543', '555-888-5555', '555-555-3333', 'Principal 8', '543', 'Colonia H', '56789'),
(9, 'Torres', 'Pérez', 'Sofía', 'Calle 876', '555-111-5555', '555-222-5555', 'Principal 9', '876', 'Colonia I', '67890'),
(10, 'Sánchez', 'Gutiérrez', 'David', 'Calle 109', '555-999-1111', '555-111-6666', 'Principal 10', '109', 'Colonia J', '78901');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultadosestudios`
--

CREATE TABLE `resultadosestudios` (
  `ResultadoEstudioID` int(11) NOT NULL,
  `OrdenEstudioID` int(11) DEFAULT NULL,
  `EstudioID` int(11) DEFAULT NULL,
  `SubnombreEstudioID` int(11) DEFAULT NULL,
  `Resultado` decimal(10,2) DEFAULT NULL,
  `UnidadMedida` varchar(50) DEFAULT NULL,
  `ValoresReferencia` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `resultadosestudios`
--

INSERT INTO `resultadosestudios` (`ResultadoEstudioID`, `OrdenEstudioID`, `EstudioID`, `SubnombreEstudioID`, `Resultado`, `UnidadMedida`, `ValoresReferencia`) VALUES
(1, 1, 1, 1, '5.20', 'millones/mm³', '4.5 - 6.0'),
(2, 2, 1, 1, '5.40', 'millones/mm³', '4.5 - 6.0'),
(3, 3, 2, NULL, '180.00', 'mg/dL', 'Menos de 200'),
(4, 4, 3, NULL, '95.00', 'mg/dL', 'Menos de 140'),
(5, 5, 4, 2, NULL, 'Normal', 'Normal'),
(6, 6, 5, NULL, '40.00', 'U/L', 'Menos de 50'),
(7, 7, 5, NULL, '60.00', 'U/L', 'Menos de 50'),
(8, 8, 3, NULL, '210.00', 'mg/dL', 'Menos de 200'),
(9, 9, 2, NULL, '160.00', 'mg/dL', 'Menos de 200'),
(10, 10, 1, 1, '5.00', 'millones/mm³', '4.5 - 6.0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catalogoauxiliarestomamuestra`
--
ALTER TABLE `catalogoauxiliarestomamuestra`
  ADD PRIMARY KEY (`AuxiliarID`);

--
-- Indices de la tabla `catalogoempleadosatendieron`
--
ALTER TABLE `catalogoempleadosatendieron`
  ADD PRIMARY KEY (`EmpleadoID`);

--
-- Indices de la tabla `catalogoestudios`
--
ALTER TABLE `catalogoestudios`
  ADD PRIMARY KEY (`EstudioID`);

--
-- Indices de la tabla `catalogosubnombresestudio`
--
ALTER TABLE `catalogosubnombresestudio`
  ADD PRIMARY KEY (`SubnombreEstudioID`),
  ADD KEY `EstudioID` (`EstudioID`);

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`id_ciudad`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_colonia` (`id_colonia`),
  ADD KEY `id_codigo_postal` (`id_codigo_postal`),
  ADD KEY `id_ciudad` (`id_ciudad`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `codigos_postales`
--
ALTER TABLE `codigos_postales`
  ADD PRIMARY KEY (`id_codigo_postal`);

--
-- Indices de la tabla `colonias`
--
ALTER TABLE `colonias`
  ADD PRIMARY KEY (`id_colonia`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `ordenestudios`
--
ALTER TABLE `ordenestudios`
  ADD PRIMARY KEY (`OrdenEstudioID`),
  ADD UNIQUE KEY `NumeroControlOrden` (`NumeroControlOrden`),
  ADD KEY `PacienteID` (`PacienteID`),
  ADD KEY `EmpleadoAtendioID` (`EmpleadoAtendioID`),
  ADD KEY `AuxiliarTomaMuestraID` (`AuxiliarTomaMuestraID`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`PacienteID`);

--
-- Indices de la tabla `resultadosestudios`
--
ALTER TABLE `resultadosestudios`
  ADD PRIMARY KEY (`ResultadoEstudioID`),
  ADD KEY `OrdenEstudioID` (`OrdenEstudioID`),
  ADD KEY `EstudioID` (`EstudioID`),
  ADD KEY `SubnombreEstudioID` (`SubnombreEstudioID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catalogoauxiliarestomamuestra`
--
ALTER TABLE `catalogoauxiliarestomamuestra`
  MODIFY `AuxiliarID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `catalogoempleadosatendieron`
--
ALTER TABLE `catalogoempleadosatendieron`
  MODIFY `EmpleadoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `catalogoestudios`
--
ALTER TABLE `catalogoestudios`
  MODIFY `EstudioID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `catalogosubnombresestudio`
--
ALTER TABLE `catalogosubnombresestudio`
  MODIFY `SubnombreEstudioID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `id_ciudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `codigos_postales`
--
ALTER TABLE `codigos_postales`
  MODIFY `id_codigo_postal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `colonias`
--
ALTER TABLE `colonias`
  MODIFY `id_colonia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ordenestudios`
--
ALTER TABLE `ordenestudios`
  MODIFY `OrdenEstudioID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `PacienteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `resultadosestudios`
--
ALTER TABLE `resultadosestudios`
  MODIFY `ResultadoEstudioID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `catalogosubnombresestudio`
--
ALTER TABLE `catalogosubnombresestudio`
  ADD CONSTRAINT `catalogosubnombresestudio_ibfk_1` FOREIGN KEY (`EstudioID`) REFERENCES `catalogoestudios` (`EstudioID`);

--
-- Filtros para la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD CONSTRAINT `ciudades_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id_estado`);

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`id_colonia`) REFERENCES `colonias` (`id_colonia`),
  ADD CONSTRAINT `clientes_ibfk_2` FOREIGN KEY (`id_codigo_postal`) REFERENCES `codigos_postales` (`id_codigo_postal`),
  ADD CONSTRAINT `clientes_ibfk_3` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudades` (`id_ciudad`),
  ADD CONSTRAINT `clientes_ibfk_4` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id_estado`);

--
-- Filtros para la tabla `ordenestudios`
--
ALTER TABLE `ordenestudios`
  ADD CONSTRAINT `ordenestudios_ibfk_1` FOREIGN KEY (`PacienteID`) REFERENCES `pacientes` (`PacienteID`),
  ADD CONSTRAINT `ordenestudios_ibfk_2` FOREIGN KEY (`EmpleadoAtendioID`) REFERENCES `catalogoempleadosatendieron` (`EmpleadoID`),
  ADD CONSTRAINT `ordenestudios_ibfk_3` FOREIGN KEY (`AuxiliarTomaMuestraID`) REFERENCES `catalogoauxiliarestomamuestra` (`AuxiliarID`);

--
-- Filtros para la tabla `resultadosestudios`
--
ALTER TABLE `resultadosestudios`
  ADD CONSTRAINT `resultadosestudios_ibfk_1` FOREIGN KEY (`OrdenEstudioID`) REFERENCES `ordenestudios` (`OrdenEstudioID`),
  ADD CONSTRAINT `resultadosestudios_ibfk_2` FOREIGN KEY (`EstudioID`) REFERENCES `catalogoestudios` (`EstudioID`),
  ADD CONSTRAINT `resultadosestudios_ibfk_3` FOREIGN KEY (`SubnombreEstudioID`) REFERENCES `catalogosubnombresestudio` (`SubnombreEstudioID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
