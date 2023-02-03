-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-02-2023 a las 07:46:18
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pets_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `estado_id` int(11) NOT NULL,
  `estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`estado_id`, `estado`) VALUES
(1, 'aprobado'),
(2, 'rechazado '),
(3, 'evaluandose');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `mascota_id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `edad` int(11) NOT NULL,
  `estado_mascota` tinyint(1) NOT NULL,
  `raza_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`mascota_id`, `nombre`, `descripcion`, `imagen`, `edad`, `estado_mascota`, `raza_id`) VALUES
(9, 'max max', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis varius quam quisque id diam. Nec ultrices dui sapien eget mi. Tristique et egestas quis ipsum suspendisse. Dictumst quisque sagittis purus sit amet volutpat consequat mauris.', 'max.jpg', 10, 1, 1),
(10, 'Zeus', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis varius quam quisque id diam. Nec ultrices dui sapien eget mi. Tristique et egestas quis ipsum suspendisse. Dictumst quisque sagittis purus sit amet volutpat consequat mauris.', 'mani.jpg', 7, 1, 2),
(11, 'Tom', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis varius quam quisque id diam. Nec ultrices dui sapien eget mi. Tristique et egestas quis ipsum suspendisse. Dictumst quisque sagittis purus sit amet volutpat consequat mauris.', 'lucas.jpg', 3, 1, 13),
(12, 'Sol', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis varius quam quisque id diam. Nec ultrices dui sapien eget mi. Tristique et egestas quis ipsum suspendisse. Dictumst quisque sagittis purus sit amet volutpat consequat mauris.', 'sol.jpg', 1, 1, 4),
(13, 'Mani', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis varius quam quisque id diam. Nec ultrices dui sapien eget mi. Tristique et egestas quis ipsum suspendisse. Dictumst quisque sagittis purus sit amet volutpat consequat mauris.', 'noImage.jpg', 1, 0, 8),
(14, 'Baby', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis varius quam quisque id diam. Nec ultrices dui sapien eget mi. Tristique et egestas quis ipsum suspendisse. Dictumst quisque sagittis purus sit amet volutpat consequat mauris.', 'noImage.jpg', 3, 0, 10),
(15, 'Beibucho', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis varius quam quisque id diam. Nec ultrices dui sapien eget mi. Tristique et egestas quis ipsum suspendisse. Dictumst quisque sagittis purus sit amet volutpat consequat mauris.', 'noImage.jpg', 1, 0, 7),
(18, 'Marti', 'Muy amigable con los niños, se encotro abandonado en las afueras de la ciudad', 'zeus.jpg', 2, 1, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota_personal`
--

CREATE TABLE `mascota_personal` (
  `mascota_peronsal_id` int(11) NOT NULL,
  `mascota_id` int(11) NOT NULL,
  `persona_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `persona_id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `correo` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `cedula` int(20) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`persona_id`, `nombre`, `apellido`, `correo`, `password`, `direccion`, `cedula`, `fecha_creacion`, `rol_id`) VALUES
(67, 'Michael 2', 'Jimenez ', 'cmjimenez3@utpl.edu.ec', 'michael', 'Julio Ordoniez', 1105874281, '2023-01-30 03:29:22', 1),
(68, 'Johana', 'Dante', 'johana@hotmail.com', 'johana', 'Quito', 1123432345, '2023-01-30 03:30:03', 2),
(69, 'Renan', 'Jimenez', 'renan@utpl.edu.ec', 'renan', 'Loja', 12324343, '2023-02-01 06:13:12', 2),
(72, 'Shirley', 'Sambrano', 'shirley@gmail.com', 'shirley', 'Ambato', 1232345432, '2023-02-02 22:32:42', 2),
(73, 'Jeremi', 'Cruz', 'jeremi@utpl.edu.ec', 'jeremi', 'Cuenca', 1232345432, '2023-02-02 22:36:58', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulaciones`
--

CREATE TABLE `postulaciones` (
  `postulaciones_id` int(11) NOT NULL,
  `fecha_postulacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `descripcion` varchar(60) DEFAULT NULL,
  `estado_id` int(11) NOT NULL,
  `mascota_id` int(11) NOT NULL,
  `persona_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `postulaciones`
--

INSERT INTO `postulaciones` (`postulaciones_id`, `fecha_postulacion`, `descripcion`, `estado_id`, `mascota_id`, `persona_id`) VALUES
(1, '2023-02-02 19:05:19', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed', 3, 14, 67),
(2, '2023-02-02 19:05:46', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed', 3, 9, 68),
(4, '2023-02-02 07:51:19', NULL, 1, 11, 69),
(7, '2023-02-03 05:07:54', '', 3, 9, 69),
(10, '2023-02-03 05:43:18', '', 3, 12, 69);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `razas`
--

CREATE TABLE `razas` (
  `raza_id` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `razas`
--

INSERT INTO `razas` (`raza_id`, `tipo`) VALUES
(1, 'Dalmata'),
(2, 'Pitbull'),
(3, 'Jack Russell terrier'),
(4, 'Pug o Carlino'),
(5, 'Pekines'),
(6, 'Bulldog francés'),
(7, 'Chihuahua'),
(8, 'Beagle'),
(9, 'Pinscher miniatura'),
(10, 'American Staffordshire Terrier'),
(11, 'Rottweiler'),
(12, 'San Bernardo'),
(13, 'Bulldog'),
(14, 'Golden Retriever'),
(16, 'Dogo Argertino 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `rol_id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`rol_id`, `nombre`) VALUES
(1, 'admin'),
(2, 'staff');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`estado_id`);

--
-- Indices de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`mascota_id`),
  ADD KEY `fk_mascotas_razas1_idx` (`raza_id`);

--
-- Indices de la tabla `mascota_personal`
--
ALTER TABLE `mascota_personal`
  ADD PRIMARY KEY (`mascota_peronsal_id`),
  ADD KEY `mastocas_mascota_personal_fk` (`mascota_id`),
  ADD KEY `fk_mascota_personal_personal1_idx` (`persona_id`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`persona_id`),
  ADD KEY `fk_personal_rol1_idx` (`rol_id`);

--
-- Indices de la tabla `postulaciones`
--
ALTER TABLE `postulaciones`
  ADD PRIMARY KEY (`postulaciones_id`),
  ADD KEY `fk_postulaciones_mascotas1_idx` (`mascota_id`),
  ADD KEY `fk_postulaciones_personal1_idx` (`persona_id`),
  ADD KEY `fk_postulaciones_estado1_idx` (`estado_id`);

--
-- Indices de la tabla `razas`
--
ALTER TABLE `razas`
  ADD PRIMARY KEY (`raza_id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `estado_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `mascota_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `mascota_personal`
--
ALTER TABLE `mascota_personal`
  MODIFY `mascota_peronsal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `persona_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `postulaciones`
--
ALTER TABLE `postulaciones`
  MODIFY `postulaciones_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `razas`
--
ALTER TABLE `razas`
  MODIFY `raza_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `rol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD CONSTRAINT `fk_mascotas_razas1` FOREIGN KEY (`raza_id`) REFERENCES `razas` (`raza_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `mascota_personal`
--
ALTER TABLE `mascota_personal`
  ADD CONSTRAINT `fk_mascota_personal_personal1` FOREIGN KEY (`persona_id`) REFERENCES `personal` (`persona_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `mastocas_mascota_personal_fk` FOREIGN KEY (`mascota_id`) REFERENCES `mascotas` (`mascota_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `fk_personal_rol1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`rol_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `postulaciones`
--
ALTER TABLE `postulaciones`
  ADD CONSTRAINT `fk_postulaciones_estado1` FOREIGN KEY (`estado_id`) REFERENCES `estados` (`estado_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_postulaciones_mascotas1` FOREIGN KEY (`mascota_id`) REFERENCES `mascotas` (`mascota_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_postulaciones_personal1` FOREIGN KEY (`persona_id`) REFERENCES `personal` (`persona_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
