<?php
include '../BD/conexion.php';
$select=$_POST["bd"];

$db_host = 'localhost'; //Host del Servidor MySQL
	$db_name = $select; //Nombre de la Base de datos
	$db_user = 'root'; //Usuario de MySQL
	$db_pass = ''; //Password de Usuario MySQL
	
	$fecha = date("Ymd-His"); //Obtenemos la fecha y hora para identificar el respaldo
    
	// Construimos el nombre de archivo SQL Ejemplo: mibase_20170101-081120.sql
	$salida_sql = $db_name.'_'.$fecha.'.sql'; 
	
	//Comando para genera respaldo de MySQL, enviamos las variales de conexion y el destino
	$dump = "mysqldump --h$db_host -u$db_user -p$db_pass --opt $db_name > $salida_sql";
	$content="
	-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 12-12-2020 a las 06:13:24
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO';
START TRANSACTION;
SET time_zone = '+00:00';


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Air`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id_cargo` int(5) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Programador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Id_cliente` int(255) NOT NULL,
  `Nom_clien` varchar(50) NOT NULL,
  `Edad` int(50) NOT NULL,
  `tel_cliente` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`Id_cliente`, `Nom_clien`, `Edad`, `tel_cliente`, `email`) VALUES
(1, 'Juan', 22, '999535542', 'juan@gmail.com'),
(2, 'Luis', 23, '9982041060', 'diazdiaz121526qgmail.com'),
(3, 'Ramon', 25, '9981358978', 'Ramoncito@gmail.com'),
(4, 'Carlos', 22, '9985879632', 'Carlos@live.com'),
(5, 'Enrique', 19, '9985564589', 'Enrique@live.com'),
(6, 'Roberto', 56, '9987456323', 'Roberto@outlook..com'),
(7, 'Maria', 32, '9986523145', 'Maria@outlook.com'),
(8, 'Cecilia', 27, '9989897854', 'Cecilia@live.com'),
(9, 'Joel', 25, '9989871203', 'Joel@gmail.com'),
(10, 'Angel', 85, '9989654565', 'Elancianito@gmail.com'),
(11, 'Claudia', 45, '9989020236', 'Clau@gmail.com'),
(12, 'Ernesto', 27, '9987456399', 'Ernesto@gmail.com'),
(13, 'Joni', 36, '99874564511', 'Joni@gmail.com'),
(14, 'Amalia', 18, '9987623987', 'Conrado@gmail.com'),
(15, 'Romina', 25, '9987623981', 'Romi@gmail.com'),
(16, 'Olivia', 35, '9987789854', 'Oli@gmail.com'),
(17, 'Romario', 29, '9982546989', 'RomarioDiaz@gmail.com'),
(18, 'Carmen', 54, '5598784512', 'Carmen@gmail.com'),
(19, 'Isabel', 36, '5598784754', 'Isa258565@gmail.com'),
(20, 'Laura', 45, '5598795689', 'Laura@gmail.com'),
(21, 'Teresa', 65, '559879598745', 'Teresita@gmail.com'),
(22, 'Antonio', 59, '9789563265', 'TOny@gmail.com'),
(23, 'Jose', 24, '9789895636', 'Jose@gmail.com'),
(24, 'Manuel', 64, '9789891212', 'Manuel@gmail.com'),
(25, 'Francisco', 39, '9789891313', 'Franco_07@gmail.com'),
(26, 'David', 25, '9789891415', 'David_07@gmail.com'),
(27, 'Juan', 32, '9789659876', 'JUanito_023@gmail.com'),
(28, 'Martina', 69, '9789683010', 'ElDon78_023@gmail.com'),
(29, 'Sofia', 24, '9978564512', 'correodirecto|gmail.com'),
(30, 'Paula', 45, '9978564854', 'paulita87@gmail.com'),
(31, 'Daniela', 56, '9978569303', 'Dani0797@gmail.com'),
(32, 'Valeria', 21, '9978561010', 'micorreopersonal@gmail.com'),
(33, 'Alba', 63, '9978563030', 'AlbaMonsrreal@gmail.com'),
(34, 'Julia', 36, '9978565687', 'Juliaperz@outlook.com'),
(35, 'Noa', 25, '9978565050', 'NOaRyders@outlook.com'),
(36, 'Hugo', 39, '9978567075', 'HuguinCampeon@outlook.com'),
(37, 'Daniel', 21, '8798653210', 'Dani_perez@outlook.com'),
(38, 'Martin', 27, '8798655489', 'MartinGonz22158@gmail.com'),
(39, 'Pablo', 28, '8798656656', 'americaperdedor@gmail.com'),
(40, 'Alejandro', 32, '8798653880', 'arribapumas@gmail.com'),
(41, 'Lucas', 28, '8798654090', 'elpatolucas@gmail.com'),
(42, 'Alvaro', 65, '8798653113', 'luisarturoalvaro@gmail.com'),
(43, 'Adrian', 56, '8798655555', 'deltagas@gmail.com'),
(44, 'Mateo', 56, '1234567892', 'unodos@gmail.com'),
(45, 'David', 31, '1234567258', 'elmejorcorreo@gmail.com'),
(46, 'Jesus', 19, '1234565878', 'JesusDiaz@gmail.com'),
(47, 'Pilar', 26, '1234567877', 'PiliAnime@gmail.com'),
(48, 'Dolores', 35, '1234565613', 'DoloresDElRio@gmail.com'),
(49, 'Marta', 33, '1234568989', 'EscuelaGub_03@gmail.com'),
(50, 'Miguel', 44, '1234563113', 'EscuelaGub_03@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compañia`
--

CREATE TABLE `compañia` (
  `id_aerolinea` int(10) NOT NULL,
  `nom_aer` varchar(50) NOT NULL,
  `dirac` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compañia`
--

INSERT INTO `compañia` (`id_aerolinea`, `nom_aer`, `dirac`, `tel`) VALUES
(1, 'aeromexico', 'av.aviones', '9998225842'),
(2, 'Aeromar', 'av.enceres', '9945650123'),
(3, 'Calafia Airlines', 'av.catastro', '9798963645'),
(4, 'Interjet', 'av.colosio', '9323654512'),
(5, 'Magnicharters', 'av.Andres Q Roo', '56650031'),
(6, 'VivaAerobus', 'av.fernandez', '1415161718');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destino`
--

CREATE TABLE `destino` (
  `id_destino` int(10) NOT NULL,
  `aeroport` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `destino`
--

INSERT INTO `destino` (`id_destino`, `aeroport`, `ciudad`) VALUES
(1, 'volaris', 'cancun'),
(2, 'volaris', 'mexico'),
(3, 'volaris', 'acapulco'),
(4, 'volaris', 'los cabos'),
(5, 'volaris', 'charleston'),
(6, 'volaris', 'aguascalientes'),
(7, 'volaris', 'chicago'),
(8, 'volaris', 'atlanta'),
(9, 'volaris', 'Albany'),
(10, 'volaris', 'austin'),
(11, 'volaris', 'boston'),
(12, 'volaris', 'campeche'),
(13, 'volaris', 'chihuahua'),
(14, 'volaris', 'ciudad obregon'),
(15, 'volaris', 'los angeles'),
(16, 'volaris', 'chetumal'),
(17, 'volaris', 'japon'),
(18, 'aeromexico', 'mexico'),
(19, 'aeromexico', 'acapulco'),
(20, 'aeromexico', 'los cabos'),
(21, 'aeromexico', 'charleston'),
(22, 'aeromexico', 'aguascalientes'),
(23, 'aeromexico', 'chicago'),
(24, 'aeromexico', 'atlanta'),
(25, 'aeromexico', 'monterrey'),
(26, 'aeromexico', 'ciudad juarez'),
(27, 'aeromexico', 'puerto vallarta'),
(28, 'aeromexico', 'colima'),
(29, 'aeromexico', 'tuxtla gutierrez'),
(30, 'aeromexico', 'espa?a'),
(31, 'aeromexico', 'merida'),
(32, 'aeromexico', 'guadalajara'),
(33, 'aeromexico', 'tuxtla gutierres'),
(34, 'aeromexico', 'espa?a'),
(35, 'aeromexico', 'merida'),
(36, 'aeromexico', 'guadalajara'),
(37, 'interjet', 'ciudad del carmen'),
(38, 'intejet', 'boston'),
(39, 'interjet', 'orlando'),
(40, 'interjet', 'baltimore'),
(41, 'interjet', 'chihuahua'),
(42, 'intejet', 'ciudad obregon'),
(43, 'interjet', 'los angeles'),
(44, 'interjet', 'chetumal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id_horario` int(10) NOT NULL,
  `hora` time(6) NOT NULL,
  `fecha` date NOT NULL,
  `id_origen` int(10) NOT NULL,
  `id_destino` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id_horario`, `hora`, `fecha`, `id_origen`, `id_destino`) VALUES
(1, '00:21:49.000000', '2020-11-27', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `origen`
--

CREATE TABLE `origen` (
  `id_origen` int(10) NOT NULL,
  `Aeroport` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `origen`
--

INSERT INTO `origen` (`id_origen`, `Aeroport`, `ciudad`) VALUES
(1, 'volaris', 'chetumal'),
(2, 'volaris', 'los angeles'),
(3, 'volaris', 'ciudad obregon'),
(4, 'volaris', 'chihuahua'),
(5, 'volaris', 'baltimore'),
(6, 'volaris', 'orlando'),
(7, 'volaris', 'boston'),
(8, 'volaris', 'ciudad del carmen'),
(9, 'volaris', 'tuxtla  gutierres'),
(10, 'volaris', 'merida'),
(11, 'volaris', 'campeche'),
(12, 'volaris', 'chihuahua'),
(13, 'volaris', 'los cabos'),
(14, 'volaris', 'monterrey'),
(15, 'volaris', 'chetumal'),
(16, 'volaris', 'monterrey'),
(17, 'volaris', 'ciudad juarez'),
(18, 'aeromexico', 'puerto vallarta'),
(19, 'aeromexico', 'colima'),
(20, 'aeromexico', 'chihuahua'),
(21, 'aeromexico', 'ciudad obregon'),
(22, 'aeromexico', 'los angeles'),
(23, 'aeromexico', 'chetumal'),
(24, 'aeromexico', 'chihuahua'),
(25, 'aeromexico', 'ciudad obregon'),
(26, 'aeromexico', 'los angeles'),
(27, 'aeromexico', 'chetumal'),
(28, 'aeromexico', 'ciudad del carmen'),
(29, 'aeromexico', 'boston'),
(30, 'aeromexico', 'orlando'),
(31, 'aeromexico', 'baltimore'),
(32, 'aeromexico', 'acapulco'),
(33, 'aeromexico', 'los cabos'),
(34, 'aeromexico', 'charleston'),
(35, 'aeromexico', 'aguascalientes'),
(36, 'aeromexico', 'chicago'),
(37, 'interjet', 'atlanta'),
(38, 'interjet', 'tuxtla gutierres'),
(39, 'interjet', 'espa?a'),
(40, 'interjet', 'merida'),
(41, 'interjet', 'guadalajara'),
(42, 'interjet', 'nuevo mexico'),
(43, 'interjet', 'nueva york'),
(44, 'interjet', 'madrid');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasaje`
--

CREATE TABLE `pasaje` (
  `id_pasaje` int(255) NOT NULL,
  `Clase` varchar(50) NOT NULL,
  `Asiento` varchar(50) NOT NULL,
  `Precio` int(255) NOT NULL,
  `id_cliente` int(255) NOT NULL,
  `id_vuelo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pasaje`
--

INSERT INTO `pasaje` (`id_pasaje`, `Clase`, `Asiento`, `Precio`, `id_cliente`, `id_vuelo`) VALUES
(1, 'A', '5B', 3500, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(5) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellidom` varchar(20) DEFAULT NULL,
  `apellidop` varchar(20) DEFAULT NULL,
  `contrasena` varchar(20) DEFAULT NULL,
  `id_cargoo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidom`, `apellidop`, `contrasena`, `id_cargoo`) VALUES
(5, 'Jorge', 'Diaz', 'Kantun', 'Luis-121526', 1),
(6, 'Armin', 'DIaz', 'Kantun', 'Luis-121526', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vuelo`
--

CREATE TABLE `vuelo` (
  `id_vuelo` int(10) NOT NULL,
  `Disponib` int(100) NOT NULL,
  `id_compañia` int(10) NOT NULL,
  `id_horario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vuelo`
--

INSERT INTO `vuelo` (`id_vuelo`, `Disponib`, `id_compañia`, `id_horario`) VALUES
(1, 50, 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Id_cliente`);

--
-- Indices de la tabla `compañia`
--
ALTER TABLE `compañia`
  ADD PRIMARY KEY (`id_aerolinea`);

--
-- Indices de la tabla `destino`
--
ALTER TABLE `destino`
  ADD PRIMARY KEY (`id_destino`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id_horario`),
  ADD UNIQUE KEY `id_horario` (`id_horario`) USING BTREE,
  ADD KEY `id_origen` (`id_origen`) USING BTREE,
  ADD KEY `id_destino` (`id_destino`) USING BTREE;

--
-- Indices de la tabla `origen`
--
ALTER TABLE `origen`
  ADD PRIMARY KEY (`id_origen`);

--
-- Indices de la tabla `pasaje`
--
ALTER TABLE `pasaje`
  ADD PRIMARY KEY (`id_pasaje`) USING BTREE,
  ADD UNIQUE KEY `id_pasaje` (`id_pasaje`) USING BTREE,
  ADD KEY `id_cliente` (`id_cliente`) USING BTREE,
  ADD KEY `id_vuelo` (`id_vuelo`) USING BTREE;

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cargoo` (`id_cargoo`);

--
-- Indices de la tabla `vuelo`
--
ALTER TABLE `vuelo`
  ADD PRIMARY KEY (`id_vuelo`),
  ADD UNIQUE KEY `id_vuelo` (`id_vuelo`) USING BTREE,
  ADD KEY `id_compañia` (`id_compañia`) USING BTREE,
  ADD KEY `id_horario` (`id_horario`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_cargo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Id_cliente` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `compañia`
--
ALTER TABLE `compañia`
  MODIFY `id_aerolinea` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `destino`
--
ALTER TABLE `destino`
  MODIFY `id_destino` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id_horario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `origen`
--
ALTER TABLE `origen`
  MODIFY `id_origen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `pasaje`
--
ALTER TABLE `pasaje`
  MODIFY `id_pasaje` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `vuelo`
--
ALTER TABLE `vuelo`
  MODIFY `id_vuelo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD CONSTRAINT `destino` FOREIGN KEY (`id_destino`) REFERENCES `destino` (`id_destino`),
  ADD CONSTRAINT `origen` FOREIGN KEY (`id_origen`) REFERENCES `origen` (`id_origen`);

--
-- Filtros para la tabla `pasaje`
--
ALTER TABLE `pasaje`
  ADD CONSTRAINT `cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`Id_cliente`),
  ADD CONSTRAINT `vuelo` FOREIGN KEY (`id_vuelo`) REFERENCES `vuelo` (`id_vuelo`);

--
-- Filtros para la tabla `vuelo`
--
ALTER TABLE `vuelo`
  ADD CONSTRAINT `id_compañia` FOREIGN KEY (`id_compañia`) REFERENCES `compañia` (`id_aerolinea`),
  ADD CONSTRAINT `id_horario` FOREIGN KEY (`id_horario`) REFERENCES `horarios` (`id_horario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
";
fwrite($salida_sql,$content);
	system($dump, $output); //Ejecutamos el comando para respaldo
	header ("Location: $salida_sql"); // Redireccionamos para descargar el Arcivo ZIP

	
	



?>