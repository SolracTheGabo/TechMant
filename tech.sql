-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 10, 2016 at 04:03 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas_trabajo`
--

CREATE TABLE IF NOT EXISTS `areas_trabajo` (
  `id_at` int(11) NOT NULL AUTO_INCREMENT,
  `area` varchar(30) NOT NULL,
  PRIMARY KEY (`id_at`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `areas_trabajo`
--

INSERT INTO `areas_trabajo` (`id_at`, `area`) VALUES
(1, 'Administrador Sistema'),
(2, 'Gerencia Administrativa'),
(3, 'Gerencia Informatica'),
(4, 'Gerencia Recursos Humanos'),
(5, 'Gerencia Mercadeo'),
(6, 'Gerencia de Contabilidad'),
(7, 'Auditoria Interna'),
(8, 'Tecnico'),
(9, 'Soporte TI'),
(10, 'Bodeguero'),
(11, 'Cajero');

-- --------------------------------------------------------

--
-- Table structure for table `bitacora`
--

CREATE TABLE IF NOT EXISTS `bitacora` (
  `id_bitacora` int(11) NOT NULL AUTO_INCREMENT,
  `cod_registro` int(11) NOT NULL,
  `tabla_afectado` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `nom_proceso` varchar(80) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_proceso` datetime NOT NULL,
  `creador_proceso` int(11) NOT NULL,
  PRIMARY KEY (`id_bitacora`),
  KEY `creador_proceso` (`creador_proceso`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=111 ;

--
-- Dumping data for table `bitacora`
--

INSERT INTO `bitacora` (`id_bitacora`, `cod_registro`, `tabla_afectado`, `nom_proceso`, `fecha_proceso`, `creador_proceso`) VALUES
(1, 2, 'areas_trabajo', 'Se creo una nueva area de trabajo', '2016-12-03 13:54:34', 1),
(2, 3, 'areas_trabajo', 'Se creo una nueva area de trabajo', '2016-12-03 13:55:03', 1),
(3, 4, 'areas_trabajo', 'Se creo una nueva area de trabajo', '2016-12-03 13:55:25', 1),
(4, 5, 'areas_trabajo', 'Se creo una nueva area de trabajo', '2016-12-03 13:58:47', 1),
(5, 6, 'areas_trabajo', 'Se creo una nueva area de trabajo', '2016-12-03 13:59:13', 1),
(6, 7, 'areas_trabajo', 'Se creo una nueva area de trabajo', '2016-12-03 13:59:31', 1),
(7, 8, 'areas_trabajo', 'Se creo una nueva area de trabajo', '2016-12-03 14:04:10', 1),
(8, 2, 'colavoradores', 'Se registro un nuevo colavorador', '2016-12-03 14:11:56', 1),
(9, 2, 'intra_usuario', 'Se registro un nuevo usuario interno', '2016-12-03 14:11:56', 1),
(10, 3, 'colavoradores', 'Se registro un nuevo colavorador', '2016-12-03 14:13:14', 1),
(11, 3, 'intra_usuario', 'Se registro un nuevo usuario interno', '2016-12-03 14:13:14', 1),
(12, 1, 'Clientes', 'Nuevo cliente', '2016-12-04 07:56:33', 1),
(13, 1, 'usuario_client', 'Nuevo ususario cliente', '2016-12-04 07:56:33', 1),
(14, 1, 'equipos_clientes', 'Nuevo equipo cliente', '2016-12-04 20:40:19', 1),
(15, 2, 'equipos_clientes', 'Nuevo equipo cliente', '2016-12-04 20:58:24', 1),
(16, 2, 'Clientes', 'Nuevo cliente', '2016-12-04 20:59:15', 1),
(17, 2, 'usuario_client', 'Nuevo ususario cliente', '2016-12-04 20:59:15', 1),
(18, 3, 'equipos_clientes', 'Nuevo equipo cliente', '2016-12-04 20:59:34', 1),
(19, 3, 'Clientes', 'Nuevo cliente', '2016-12-07 19:08:34', 1),
(20, 3, 'usuario_client', 'Nuevo ususario cliente', '2016-12-07 19:08:34', 1),
(21, 4, 'Clientes', 'Nuevo cliente', '2016-12-07 19:50:54', 1),
(22, 4, 'usuario_client', 'Nuevo ususario cliente', '2016-12-07 19:50:54', 1),
(23, 5, 'Clientes', 'Nuevo cliente', '2016-12-07 19:57:16', 1),
(24, 5, 'usuario_client', 'Nuevo ususario cliente', '2016-12-07 19:57:17', 1),
(25, 4, 'equipos_clientes', 'Nuevo equipo cliente', '2016-12-07 19:57:36', 1),
(26, 3, 'colavoradores', 'Se registro un nuevo colavorador', '2016-12-07 20:32:27', 1),
(27, 6, 'Clientes', 'Nuevo cliente', '2016-12-07 20:34:40', 1),
(28, 6, 'usuario_client', 'Nuevo ususario cliente', '2016-12-07 20:34:40', 1),
(29, 5, 'equipos_clientes', 'Nuevo equipo cliente', '2016-12-07 20:34:54', 1),
(30, 2, 'intra_usuario', 'Se registro un nuevo colavorador', '2016-12-07 20:37:30', 1),
(31, 4, 'Clientes', 'Actualizacion de registro', '2016-12-07 20:38:37', 1),
(32, 4, 'Clientes', 'Actualizacion de registro', '2016-12-07 20:42:59', 1),
(33, 4, 'Clientes', 'Actualizacion de registro', '2016-12-07 21:22:43', 1),
(34, 1, 'Clientes', 'Actualizacion de registro', '2016-12-08 08:48:16', 1),
(35, 0, 'colavoreadores', 'Actualizacion de registro', '2016-12-08 09:47:48', 1),
(36, 0, 'colavoreadores', 'Actualizacion de registro', '2016-12-08 09:50:21', 1),
(37, 0, 'colavoreadores', 'Actualizacion de registro', '2016-12-08 09:51:00', 1),
(38, 1, 'colavoreadores', 'Actualizacion de registro', '2016-12-08 10:05:16', 1),
(39, 3, 'colavoreadores', 'Actualizacion de registro', '2016-12-08 10:06:21', 1),
(40, 3, 'colavoreadores', 'Actualizacion de registro', '2016-12-08 10:06:57', 1),
(41, 3, 'colavoreadores', 'Actualizacion de registro', '2016-12-08 10:07:06', 1),
(42, 3, 'colavoreadores', 'Actualizacion de registro', '2016-12-08 10:08:51', 1),
(43, 0, 'colavoreadores', 'Actualizacion de registro', '2016-12-08 10:10:39', 1),
(44, 3, 'colavoreadores', 'Actualizacion de registro', '2016-12-08 10:11:30', 1),
(45, 0, 'colavoreadores', 'Actualizacion de registro', '2016-12-08 10:11:30', 1),
(46, 3, 'colavoreadores', 'Actualizacion de registro', '2016-12-08 10:12:51', 1),
(47, 3, 'colavoreadores', 'Actualizacion de registro', '2016-12-08 10:13:07', 1),
(48, 3, 'colavoreadores', 'Actualizacion de registro', '2016-12-08 10:13:37', 1),
(49, 3, 'colavoreadores', 'Actualizacion de registro', '2016-12-08 10:15:21', 1),
(50, 3, 'colavoreadores', 'Actualizacion de registro', '2016-12-08 10:17:22', 1),
(51, 3, 'colavoreadores', 'Actualizacion de registro', '2016-12-08 10:18:21', 1),
(52, 3, 'colavoreadores', 'Actualizacion de registro', '2016-12-08 10:19:30', 1),
(53, 3, 'colavoreadores', 'Actualizacion de registro', '2016-12-08 10:20:14', 1),
(54, 3, 'colavoreadores', 'Actualizacion de registro', '2016-12-08 10:27:02', 1),
(55, 3, 'colavoreadores', 'Actualizacion de registro', '2016-12-08 10:27:49', 1),
(56, 3, 'colavoreadores', 'Actualizacion de registro', '2016-12-08 10:28:47', 1),
(57, 4, 'Clientes', 'Actualizacion de registro', '2016-12-08 11:54:55', 1),
(58, 3, 'colavoreadores', 'Actualizacion de registro', '2016-12-08 13:13:01', 1),
(59, 3, 'colavoreadores', 'Actualizacion de registro', '2016-12-08 13:14:51', 1),
(60, 9, 'areas_trabajo', 'Se creo una nueva area de trabajo', '2016-12-08 13:19:08', 1),
(61, 1, 'colavoreadores', 'Actualizacion de registro', '2016-12-08 13:19:52', 1),
(62, 1, 'colavoreadores', 'Actualizacion de registro', '2016-12-08 13:20:26', 1),
(63, 4, 'colavoradores', 'Se registro un nuevo colavorador', '2016-12-08 13:46:01', 1),
(64, 4, 'intra_usuario', 'Se registro un nuevo usuario interno', '2016-12-08 13:46:01', 1),
(65, 4, 'colavoreadores', 'Actualizacion de registro', '2016-12-08 13:46:30', 1),
(66, 5, 'colavoradores', 'Se registro un nuevo colavorador', '2016-12-08 13:48:49', 1),
(67, 5, 'intra_usuario', 'Se registro un nuevo usuario interno', '2016-12-08 13:48:49', 1),
(68, 4, 'colavoreadores', 'Actualizacion de registro', '2016-12-08 16:50:21', 1),
(69, 5, 'colavoreadores', 'Actualizacion de registro', '2016-12-08 16:50:41', 1),
(70, 3, 'cargos_eqpaciente', 'Se registro un nuevo cargo', '2016-12-09 00:45:12', 3),
(71, 4, 'cargos_eqpaciente', 'Se registro un nuevo cargo', '2016-12-09 00:48:18', 3),
(72, 5, 'cargos_eqpaciente', 'Se registro un nuevo cargo', '2016-12-09 00:49:04', 3),
(73, 6, 'cargos_eqpaciente', 'Se registro un nuevo cargo', '2016-12-09 00:52:47', 3),
(74, 7, 'cargos_eqpaciente', 'Se registro un nuevo cargo', '2016-12-09 00:55:26', 4),
(75, 8, 'cargos_eqpaciente', 'Se registro un nuevo cargo', '2016-12-09 00:55:58', 4),
(76, 9, 'cargos_eqpaciente', 'Se registro un nuevo cargo', '2016-12-09 01:08:06', 4),
(77, 10, 'cargos_eqpaciente', 'Se registro un nuevo cargo', '2016-12-09 01:17:46', 4),
(78, 11, 'cargos_eqpaciente', 'Se registro un nuevo cargo', '2016-12-09 01:25:28', 4),
(79, 7, 'Clientes', 'Nuevo cliente', '2016-12-09 01:34:58', 4),
(80, 7, 'usuario_client', 'Nuevo ususario cliente', '2016-12-09 01:34:58', 4),
(81, 6, 'equipos_clientes', 'Nuevo equipo cliente', '2016-12-09 01:40:07', 4),
(82, 8, 'Clientes', 'Nuevo cliente', '2016-12-09 01:49:32', 4),
(83, 8, 'usuario_client', 'Nuevo ususario cliente', '2016-12-09 01:49:32', 4),
(84, 7, 'equipos_clientes', 'Nuevo equipo cliente', '2016-12-09 01:55:43', 4),
(85, 8, 'equipos_clientes', 'Nuevo equipo cliente', '2016-12-09 08:48:23', 1),
(86, 12, 'cargos_eqpaciente', 'Se registro un nuevo cargo', '2016-12-09 08:52:29', 4),
(87, 2, 'colavoreadores', 'Actualizacion de registro', '2016-12-09 09:10:14', 1),
(88, 10, 'areas_trabajo', 'Se creo una nueva area de trabajo', '2016-12-09 09:27:35', 1),
(89, 13, 'cargos_eqpaciente', 'Se registro un nuevo cargo', '2016-12-09 11:42:12', 1),
(90, 14, 'cargos_eqpaciente', 'Se registro un nuevo cargo', '2016-12-09 11:43:52', 1),
(91, 15, 'cargos_eqpaciente', 'Se registro un nuevo cargo', '2016-12-09 11:45:38', 1),
(92, 16, 'cargos_eqpaciente', 'Se registro un nuevo cargo', '2016-12-09 13:14:24', 3),
(93, 17, 'cargos_eqpaciente', 'Se registro un nuevo cargo', '2016-12-09 16:56:52', 4),
(94, 0, 'intra_usuario', 'Actualizacion de registro', '2016-12-09 18:38:52', 4),
(95, 0, 'intra_usuario', 'Actualizacion de registro', '2016-12-09 18:39:39', 4),
(96, 0, 'intra_usuario', 'Actualizacion de registro', '2016-12-09 18:40:08', 4),
(97, 4, 'intra_usuario', 'Actualizacion de registro', '2016-12-09 18:41:10', 4),
(98, 0, 'intra_usuario', 'Actualizacion de registro', '2016-12-09 18:42:48', 1),
(99, 1, 'intra_usuario', 'Actualizacion de registro', '2016-12-09 18:43:17', 1),
(100, 1, 'intra_usuario', 'Actualizacion de registro', '2016-12-09 18:44:47', 1),
(101, 11, 'areas_trabajo', 'Se creo una nueva area de trabajo', '2016-12-09 20:44:04', 1),
(102, 6, 'colavoradores', 'Se registro un nuevo colavorador', '2016-12-09 20:47:49', 1),
(103, 6, 'intra_usuario', 'Se registro un nuevo usuario interno', '2016-12-09 20:47:49', 1),
(104, 13, 'ventas', 'Nueva venta realizada', '2016-12-10 11:00:31', 6),
(105, 14, 'ventas', 'Nueva venta realizada', '2016-12-10 11:05:19', 6),
(106, 15, 'ventas', 'Nueva venta realizada', '2016-12-10 11:23:49', 6),
(107, 16, 'ventas', 'Nueva venta realizada', '2016-12-10 11:24:20', 6),
(108, 17, 'ventas', 'Nueva venta realizada', '2016-12-10 11:30:54', 6),
(109, 18, 'cargos_eqpaciente', 'Se registro un nuevo cargo', '2016-12-10 11:51:02', 4),
(110, 18, 'ventas', 'Nueva venta realizada', '2016-12-10 11:57:10', 6);

-- --------------------------------------------------------

--
-- Table structure for table `cargos_eqpaciente`
--

CREATE TABLE IF NOT EXISTS `cargos_eqpaciente` (
  `id_cargo` int(11) NOT NULL AUTO_INCREMENT,
  `monto_cargo` decimal(10,2) NOT NULL,
  `descripcion_cargo` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_cargo` datetime NOT NULL,
  `saldado` int(11) NOT NULL,
  `cod_eqclient` int(11) NOT NULL,
  PRIMARY KEY (`id_cargo`),
  KEY `cod_eqclient` (`cod_eqclient`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `cargos_eqpaciente`
--

INSERT INTO `cargos_eqpaciente` (`id_cargo`, `monto_cargo`, `descripcion_cargo`, `fecha_cargo`, `saldado`, `cod_eqclient`) VALUES
(1, 55.55, 'bateria nueva', '2016-12-08 00:00:00', 0, 1),
(2, 32.95, 'Asaber', '2016-12-16 00:00:00', 0, 2),
(3, 122.00, 'Pantalla nueva', '2016-12-09 00:45:12', 0, 1),
(4, 122.00, 'Pantalla nueva', '2016-12-09 00:48:18', 0, 3),
(5, 35.74, 'Teclado original', '2016-12-09 00:49:04', 0, 3),
(6, 10.00, 'Mano de obra', '2016-12-09 00:52:47', 0, 3),
(7, 25.00, 'Mantenimiento prevetivo', '2016-12-09 00:55:26', 0, 2),
(8, 35.74, 'mantenimiento correctivo', '2016-12-09 00:55:58', 0, 2),
(9, 15.00, 'Limpieza completa del equipo', '2016-12-09 01:08:06', 0, 4),
(10, 122.00, 'Placa base nueva', '2016-12-09 01:17:46', 0, 4),
(11, 110.25, 'Restaurcion del equipo', '2016-12-09 01:25:28', 0, 4),
(12, 35.34, 'Cambio de toushpad', '2016-12-09 08:52:29', 0, 8),
(13, 22.00, 'Limpieza completa del equipo', '2016-12-09 11:42:12', 0, 5),
(14, 15.00, 'Limpieza completa', '2016-12-09 11:43:52', 0, 5),
(15, 11.00, 'Limpieza completa', '2016-12-09 11:45:38', 0, 6),
(16, 35.00, 'Teclado nuevo', '2016-12-09 13:14:24', 0, 1),
(17, 120.00, 'Actualizacion de placa madre', '2016-12-09 16:56:52', 0, 7),
(18, 35.00, 'Touch pad nuevo', '2016-12-10 11:51:02', 0, 5);

-- --------------------------------------------------------

--
-- Stand-in structure for view `cartera_clientes`
--
CREATE TABLE IF NOT EXISTS `cartera_clientes` (
`Id_client` int(11)
,`nom_client` varchar(100)
,`apell_client` varchar(100)
,`tell_client` varchar(13)
,`email_client` varchar(100)
);
-- --------------------------------------------------------

--
-- Table structure for table `Clientes`
--

CREATE TABLE IF NOT EXISTS `Clientes` (
  `Id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nom_client` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `apell_client` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `tell_client` varchar(13) COLLATE utf8_spanish2_ci NOT NULL,
  `email_client` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`Id_client`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `Clientes`
--

INSERT INTO `Clientes` (`Id_client`, `nom_client`, `apell_client`, `tell_client`, `email_client`) VALUES
(1, 'Juan', 'Camaney', '7777-7777', 'juan@b.com'),
(2, 'Carlos Gabriel', 'Ramos Padilla', '63144769', 'cgabriel.rp@gmail.com'),
(3, 'Sofia', 'Argueta', '9999-9999', 'chivo@b.com'),
(4, 'Carlos Gabriel', 'Sandoval', '63144769', 'cg@s.es'),
(5, 'Susan Marisela', 'Puerto Parada', '63144769', 'a@b.com'),
(6, 'Francisco Alejandro', 'Perla Moreno', '5555-5555', 'a@b.com'),
(7, 'Kistian Manuel', 'Requeno Manrriquez', '63144769', 'a@b.com'),
(8, 'Maria Teresa', 'Padilla Canales', '5555-5555', 'a@b.com');

-- --------------------------------------------------------

--
-- Table structure for table `colavoradores`
--

CREATE TABLE IF NOT EXISTS `colavoradores` (
  `id_colavor` int(11) NOT NULL AUTO_INCREMENT,
  `nom_colaborador` varchar(90) COLLATE utf8_spanish2_ci NOT NULL,
  `apell_colavorador` varchar(90) COLLATE utf8_spanish2_ci NOT NULL,
  `tell_colavorador` varchar(12) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cell_colavorador` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `Fecha_nacimiento` date NOT NULL,
  `dui_col` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `isss_colavorador` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `afp_colavorador` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `nit_colavorador` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `licencia_colavorador` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_licen_colavorador` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion_colavorador` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `email_colavorador` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `cargo_colavorador` int(11) NOT NULL,
  PRIMARY KEY (`id_colavor`),
  KEY `cargo_colavorador` (`cargo_colavorador`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `colavoradores`
--

INSERT INTO `colavoradores` (`id_colavor`, `nom_colaborador`, `apell_colavorador`, `tell_colavorador`, `cell_colavorador`, `Fecha_nacimiento`, `dui_col`, `isss_colavorador`, `afp_colavorador`, `nit_colavorador`, `licencia_colavorador`, `tipo_licen_colavorador`, `direccion_colavorador`, `email_colavorador`, `cargo_colavorador`) VALUES
(1, 'Administrador', 'Root', '0000-0000', '0000-0000', '2016-12-03', '00000000-1', '0000000000', '0000000000', '0000000000', '0000000000', 'Libiana', 'Sys', 'root@admin.org', 1),
(2, 'Carlos Gabriel', 'Ramos Padilla', '0000-0000', '0000-0000', '1989-08-21', '00000000-2', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'Libiana', 'En mi casa', 'cgabriel.rp@gmail.com', 9),
(3, 'Jusue Stive', 'Perdomo Salmeron', '0000-0000', '0000-0000', '2016-12-03', '00000000-3', '000000000000008', '000000000000008', '000000000000008', '000000000000009', 'Libiana', 'En su casa', 'js@b.com', 8),
(4, 'Bladir', 'Putin', '7897-7894', '2545-2554', '2016-12-04', '00000000-0', '654654654646', '654654654654', '65465464664', '65464646', 'Libiana', 'En su casa', 'a@b.com', 8),
(5, 'Marisol ', 'Juimenes', '7897-7894', '2545-2554', '2016-12-07', '0000000-0', '654654654646', '654654654654', '65465464664', '65464646', 'Libiana', 'En su casa', 'zulema.123@gmail.com', 8),
(6, 'William Spliter', 'Salvadol Escalante', '8888-8888', '8888-8888', '2016-10-09', '00000000-7', '1234567890', '1234567890', '1234567890', '1234567890', 'Moto', 'En su casa', 'a@b.com', 11);

-- --------------------------------------------------------

--
-- Table structure for table `equipos_clientes`
--

CREATE TABLE IF NOT EXISTS `equipos_clientes` (
  `id_eqclient` int(11) NOT NULL AUTO_INCREMENT,
  `marca_eqclient` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `model_eqclient` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `SN_eqclient` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_eqclient` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `hardware_eqclient` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `observaciones_eqclient` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `problema_eqclient` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `diagnostico_eqclient` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `progreso` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `propietario_eqclient` int(11) NOT NULL,
  `tecnico` int(11) NOT NULL,
  PRIMARY KEY (`id_eqclient`),
  KEY `propietario_eqclient` (`propietario_eqclient`),
  KEY `tecnico` (`tecnico`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `equipos_clientes`
--

INSERT INTO `equipos_clientes` (`id_eqclient`, `marca_eqclient`, `model_eqclient`, `SN_eqclient`, `tipo_eqclient`, `hardware_eqclient`, `observaciones_eqclient`, `problema_eqclient`, `diagnostico_eqclient`, `progreso`, `status`, `propietario_eqclient`, `tecnico`) VALUES
(1, 'HP', 'Mini 5101', 'CNU9401JRT', 'Laptop', 'sgh', 'sdfg', 'sdfg', 'sdfg', 25, 1, 1, 3),
(2, 'Toshiba', 'C55t-A', 'w33uh3uh', 'Laptop', 'zfgs', 'cbwsdftg', 'sxghsd', 'scgnd', 100, 2, 1, 4),
(3, 'DELL', 'Think Pad', 'w33uh3uh', 'Laptop', 'dfbrh', 'zcvbert', 'xbnnerty', 'efsfv', 25, 1, 2, 3),
(4, 'Toshiba', 'C55t-A2', 'w33uh3uh', 'Laptop', 'fgasd', 'rfgasdrfgserg', 'sdfgsgsde', 'ghsd', 100, 1, 5, 4),
(5, 'HP', 'C55t-A2', 'CNU9401JRT', 'Laptop', 'fjfgkjfm', 'ghjmfghjns', 'rtgswthsdf', 'ghndfyjedty', 100, 1, 6, 4),
(6, 'DELL', 'OPTIPLEX 777', 'No tiene', 'Escritorio', 'Todo cool', 'Rallada toda la carcasa', 'No enciende', 'Falla cambre de poder, o la fuente esta mala', 25, 1, 7, 5),
(7, 'Toshiba2', 'C55t-A2', 'CNU9401JRT', 'Laptop', 'sgbsdbs', 'hrtrvwef', 'ehntmthneg', 'dgbtnrynr', 100, 1, 8, 4),
(8, 'ASUS', 'ASUS', '00000000000', 'Laptop', 'ksksksksk', 'sksksksk', 'sksksksk', 'sksksksks', 25, 1, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `intra_usuario`
--

CREATE TABLE IF NOT EXISTS `intra_usuario` (
  `id_intrauser` int(11) NOT NULL AUTO_INCREMENT,
  `nick_intrauser` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `pass_intrauser` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `status_intrauser` int(11) NOT NULL,
  `nivel_access_intrauser` int(11) NOT NULL,
  `cod_colavorador` int(11) NOT NULL,
  PRIMARY KEY (`id_intrauser`),
  KEY `cod_colavorador` (`cod_colavorador`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `intra_usuario`
--

INSERT INTO `intra_usuario` (`id_intrauser`, `nick_intrauser`, `pass_intrauser`, `status_intrauser`, `nivel_access_intrauser`, `cod_colavorador`) VALUES
(1, '00000000-1', '2390915f39639c405efa9610bcffa3bbe07c1b5e', 1, 1, 1),
(2, '00000000-2', '477c519978ed5df50100dcc7f188747f827e0ca8', 1, 1, 2),
(3, '00000000-3', '477c519978ed5df50100dcc7f188747f827e0ca8', 1, 2, 3),
(4, '00000000-4', '477c519978ed5df50100dcc7f188747f827e0ca8', 1, 2, 4),
(5, '00000000-5', '477c519978ed5df50100dcc7f188747f827e0ca8', 1, 2, 5),
(6, '00000000-7', '477c519978ed5df50100dcc7f188747f827e0ca8', 1, 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `usuario_client`
--

CREATE TABLE IF NOT EXISTS `usuario_client` (
  `id_usuclient` int(11) NOT NULL AUTO_INCREMENT,
  `nick_usuclient` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `pass_usuclient` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `status_usuclient` int(11) NOT NULL,
  `idcod_usuclient` int(11) NOT NULL,
  PRIMARY KEY (`id_usuclient`),
  KEY `idcod_usuclient` (`idcod_usuclient`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `usuario_client`
--

INSERT INTO `usuario_client` (`id_usuclient`, `nick_usuclient`, `pass_usuclient`, `status_usuclient`, `idcod_usuclient`) VALUES
(1, 'a@b.com', '477c519978ed5df50100dcc7f188747f827e0ca8', 1, 1),
(2, 'cgabriel.rp@gmail.co', '477c519978ed5df50100dcc7f188747f827e0ca8', 1, 2),
(3, 'a@b.com', '477c519978ed5df50100dcc7f188747f827e0ca8', 1, 3),
(4, 'cgabriel.rp@gmail.co', '477c519978ed5df50100dcc7f188747f827e0ca8', 1, 4),
(5, 'a@b.com', '477c519978ed5df50100dcc7f188747f827e0ca8', 1, 5),
(6, 'a@b.com', '477c519978ed5df50100dcc7f188747f827e0ca8', 1, 6),
(7, 'a@b.com', '477c519978ed5df50100dcc7f188747f827e0ca8', 1, 7),
(8, 'a@b.com', '477c519978ed5df50100dcc7f188747f827e0ca8', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `ventas`
--

CREATE TABLE IF NOT EXISTS `ventas` (
  `id_venta` int(11) NOT NULL AUTO_INCREMENT,
  `monto_venta` decimal(10,2) NOT NULL,
  `efectivo` decimal(10,2) NOT NULL,
  `total_cuenta` decimal(11,2) NOT NULL,
  `cambio` decimal(10,2) NOT NULL,
  `descuento` decimal(10,2) NOT NULL,
  `porcentaje_descuento` int(11) NOT NULL,
  `facha_venta` datetime NOT NULL,
  `cod_client` int(11) NOT NULL,
  `cod_eqclient` int(11) NOT NULL,
  `cod_vendedor` int(11) NOT NULL,
  PRIMARY KEY (`id_venta`),
  KEY `cod_client` (`cod_client`),
  KEY `cod_eqclient` (`cod_eqclient`),
  KEY `cod_vendedor` (`cod_vendedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `ventas`
--

INSERT INTO `ventas` (`id_venta`, `monto_venta`, `efectivo`, `total_cuenta`, `cambio`, `descuento`, `porcentaje_descuento`, `facha_venta`, `cod_client`, `cod_eqclient`, `cod_vendedor`) VALUES
(17, 247.25, 300.00, 222.53, 77.48, 24.73, 1, '2016-12-10 11:30:54', 5, 4, 6),
(18, 72.00, 80.00, 64.80, 15.20, 7.20, 1, '2016-12-10 11:57:10', 6, 5, 6);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_all_col`
--
CREATE TABLE IF NOT EXISTS `v_all_col` (
`id_colavor` int(11)
,`nom_colaborador` varchar(90)
,`apell_colavorador` varchar(90)
,`tell_colavorador` varchar(12)
,`cell_colavorador` varchar(12)
,`Fecha_nacimiento` date
,`dui_col` varchar(30)
,`isss_colavorador` varchar(20)
,`afp_colavorador` varchar(20)
,`nit_colavorador` varchar(30)
,`licencia_colavorador` varchar(30)
,`tipo_licen_colavorador` varchar(20)
,`direccion_colavorador` varchar(1000)
,`email_colavorador` varchar(1000)
,`cargo_colavorador` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_areas`
--
CREATE TABLE IF NOT EXISTS `v_areas` (
`id_at` int(11)
,`area` varchar(30)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_clientes`
--
CREATE TABLE IF NOT EXISTS `v_clientes` (
`Id_client` int(11)
,`nom_client` varchar(100)
,`apell_client` varchar(100)
,`tell_client` varchar(13)
,`email_client` varchar(100)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_codid_intra`
--
CREATE TABLE IF NOT EXISTS `v_codid_intra` (
`id_intrauser` int(11)
,`nick_intrauser` varchar(20)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_compus`
--
CREATE TABLE IF NOT EXISTS `v_compus` (
`id_eqclient` int(11)
,`marca_eqclient` varchar(20)
,`model_eqclient` varchar(70)
,`tipo_eqclient` varchar(30)
,`propietario_eqclient` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_count_eqlisto`
--
CREATE TABLE IF NOT EXISTS `v_count_eqlisto` (
`count(*)` bigint(21)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_cout_client`
--
CREATE TABLE IF NOT EXISTS `v_cout_client` (
`count(*)` bigint(21)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_cout_col`
--
CREATE TABLE IF NOT EXISTS `v_cout_col` (
`count(*)` bigint(21)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_cout_eqcli`
--
CREATE TABLE IF NOT EXISTS `v_cout_eqcli` (
`count(*)` bigint(21)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_cout_eqcli_taller`
--
CREATE TABLE IF NOT EXISTS `v_cout_eqcli_taller` (
`count(*)` bigint(21)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_eqclist`
--
CREATE TABLE IF NOT EXISTS `v_eqclist` (
`id_eqclient` int(11)
,`marca_eqclient` varchar(20)
,`model_eqclient` varchar(70)
,`tipo_eqclient` varchar(30)
,`nom_client` varchar(100)
,`apell_client` varchar(100)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_eqcli_reparado`
--
CREATE TABLE IF NOT EXISTS `v_eqcli_reparado` (
`id_eqclient` int(11)
,`marca_eqclient` varchar(20)
,`model_eqclient` varchar(70)
,`SN_eqclient` varchar(70)
,`tipo_eqclient` varchar(30)
,`hardware_eqclient` varchar(500)
,`observaciones_eqclient` varchar(1000)
,`problema_eqclient` varchar(1000)
,`diagnostico_eqclient` varchar(1000)
,`progreso` int(11)
,`status` int(11)
,`propietario_eqclient` int(11)
,`tecnico` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_eqcli_taller`
--
CREATE TABLE IF NOT EXISTS `v_eqcli_taller` (
`id_eqclient` int(11)
,`marca_eqclient` varchar(20)
,`model_eqclient` varchar(70)
,`SN_eqclient` varchar(70)
,`tipo_eqclient` varchar(30)
,`hardware_eqclient` varchar(500)
,`observaciones_eqclient` varchar(1000)
,`problema_eqclient` varchar(1000)
,`diagnostico_eqclient` varchar(1000)
,`progreso` int(11)
,`status` int(11)
,`propietario_eqclient` int(11)
,`tecnico` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_eqmant`
--
CREATE TABLE IF NOT EXISTS `v_eqmant` (
`nom_client` varchar(100)
,`apell_client` varchar(100)
,`marca_eqclient` varchar(20)
,`model_eqclient` varchar(70)
,`problema_eqclient` varchar(1000)
,`progreso` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_equipos_listos`
--
CREATE TABLE IF NOT EXISTS `v_equipos_listos` (
`nom_client` varchar(100)
,`apell_client` varchar(100)
,`tell_client` varchar(13)
,`email_client` varchar(100)
,`marca_eqclient` varchar(20)
,`model_eqclient` varchar(70)
,`progreso` int(11)
,`Id_client` int(11)
,`id_eqclient` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_eq_pendientes`
--
CREATE TABLE IF NOT EXISTS `v_eq_pendientes` (
`id_eqclient` int(11)
,`marca_eqclient` varchar(20)
,`model_eqclient` varchar(70)
,`tipo_eqclient` varchar(30)
,`problema_eqclient` varchar(1000)
,`diagnostico_eqclient` varchar(1000)
,`progreso` int(11)
,`nick_intrauser` varchar(20)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_lista_tec`
--
CREATE TABLE IF NOT EXISTS `v_lista_tec` (
`id_colavor` int(11)
,`nom_colaborador` varchar(90)
,`apell_colavorador` varchar(90)
,`tell_colavorador` varchar(12)
,`cell_colavorador` varchar(12)
,`email_colavorador` varchar(1000)
,`area` varchar(30)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_list_col`
--
CREATE TABLE IF NOT EXISTS `v_list_col` (
`id_colavor` int(11)
,`nom_colaborador` varchar(90)
,`apell_colavorador` varchar(90)
,`tell_colavorador` varchar(12)
,`cell_colavorador` varchar(12)
,`email_colavorador` varchar(1000)
,`area` varchar(30)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_numeqrepair_tec`
--
CREATE TABLE IF NOT EXISTS `v_numeqrepair_tec` (
`count(*)` bigint(21)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_perfil_intra`
--
CREATE TABLE IF NOT EXISTS `v_perfil_intra` (
`id_intrauser` int(11)
,`nick_intrauser` varchar(20)
,`pass_intrauser` varchar(200)
,`status_intrauser` int(11)
,`nivel_access_intrauser` int(11)
,`cod_colavorador` int(11)
,`id_colavor` int(11)
,`nom_colaborador` varchar(90)
,`apell_colavorador` varchar(90)
,`tell_colavorador` varchar(12)
,`cell_colavorador` varchar(12)
,`Fecha_nacimiento` date
,`dui_col` varchar(30)
,`isss_colavorador` varchar(20)
,`afp_colavorador` varchar(20)
,`nit_colavorador` varchar(30)
,`licencia_colavorador` varchar(30)
,`tipo_licen_colavorador` varchar(20)
,`direccion_colavorador` varchar(1000)
,`email_colavorador` varchar(1000)
,`cargo_colavorador` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_propietario`
--
CREATE TABLE IF NOT EXISTS `v_propietario` (
`Id_client` int(11)
,`nom_client` varchar(100)
,`apell_client` varchar(100)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_venta`
--
CREATE TABLE IF NOT EXISTS `v_venta` (
`id_venta` int(11)
,`monto_venta` decimal(10,2)
,`efectivo` decimal(10,2)
,`total_cuenta` decimal(11,2)
,`cambio` decimal(10,2)
,`descuento` decimal(10,2)
,`porcentaje_descuento` int(11)
);
-- --------------------------------------------------------

--
-- Structure for view `cartera_clientes`
--
DROP TABLE IF EXISTS `cartera_clientes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cartera_clientes` AS select `Clientes`.`Id_client` AS `Id_client`,`Clientes`.`nom_client` AS `nom_client`,`Clientes`.`apell_client` AS `apell_client`,`Clientes`.`tell_client` AS `tell_client`,`Clientes`.`email_client` AS `email_client` from `Clientes`;

-- --------------------------------------------------------

--
-- Structure for view `v_all_col`
--
DROP TABLE IF EXISTS `v_all_col`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_all_col` AS select `colavoradores`.`id_colavor` AS `id_colavor`,`colavoradores`.`nom_colaborador` AS `nom_colaborador`,`colavoradores`.`apell_colavorador` AS `apell_colavorador`,`colavoradores`.`tell_colavorador` AS `tell_colavorador`,`colavoradores`.`cell_colavorador` AS `cell_colavorador`,`colavoradores`.`Fecha_nacimiento` AS `Fecha_nacimiento`,`colavoradores`.`dui_col` AS `dui_col`,`colavoradores`.`isss_colavorador` AS `isss_colavorador`,`colavoradores`.`afp_colavorador` AS `afp_colavorador`,`colavoradores`.`nit_colavorador` AS `nit_colavorador`,`colavoradores`.`licencia_colavorador` AS `licencia_colavorador`,`colavoradores`.`tipo_licen_colavorador` AS `tipo_licen_colavorador`,`colavoradores`.`direccion_colavorador` AS `direccion_colavorador`,`colavoradores`.`email_colavorador` AS `email_colavorador`,`colavoradores`.`cargo_colavorador` AS `cargo_colavorador` from `colavoradores`;

-- --------------------------------------------------------

--
-- Structure for view `v_areas`
--
DROP TABLE IF EXISTS `v_areas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_areas` AS select `areas_trabajo`.`id_at` AS `id_at`,`areas_trabajo`.`area` AS `area` from `areas_trabajo`;

-- --------------------------------------------------------

--
-- Structure for view `v_clientes`
--
DROP TABLE IF EXISTS `v_clientes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_clientes` AS select `Clientes`.`Id_client` AS `Id_client`,`Clientes`.`nom_client` AS `nom_client`,`Clientes`.`apell_client` AS `apell_client`,`Clientes`.`tell_client` AS `tell_client`,`Clientes`.`email_client` AS `email_client` from `Clientes`;

-- --------------------------------------------------------

--
-- Structure for view `v_codid_intra`
--
DROP TABLE IF EXISTS `v_codid_intra`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_codid_intra` AS select `intra_usuario`.`id_intrauser` AS `id_intrauser`,`intra_usuario`.`nick_intrauser` AS `nick_intrauser` from `intra_usuario`;

-- --------------------------------------------------------

--
-- Structure for view `v_compus`
--
DROP TABLE IF EXISTS `v_compus`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_compus` AS select `equipos_clientes`.`id_eqclient` AS `id_eqclient`,`equipos_clientes`.`marca_eqclient` AS `marca_eqclient`,`equipos_clientes`.`model_eqclient` AS `model_eqclient`,`equipos_clientes`.`tipo_eqclient` AS `tipo_eqclient`,`equipos_clientes`.`propietario_eqclient` AS `propietario_eqclient` from `equipos_clientes`;

-- --------------------------------------------------------

--
-- Structure for view `v_count_eqlisto`
--
DROP TABLE IF EXISTS `v_count_eqlisto`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_count_eqlisto` AS select count(0) AS `count(*)` from `equipos_clientes` where ((`equipos_clientes`.`status` = '1') and (`equipos_clientes`.`progreso` = '100'));

-- --------------------------------------------------------

--
-- Structure for view `v_cout_client`
--
DROP TABLE IF EXISTS `v_cout_client`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_cout_client` AS select count(0) AS `count(*)` from `Clientes`;

-- --------------------------------------------------------

--
-- Structure for view `v_cout_col`
--
DROP TABLE IF EXISTS `v_cout_col`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_cout_col` AS select count(0) AS `count(*)` from `colavoradores`;

-- --------------------------------------------------------

--
-- Structure for view `v_cout_eqcli`
--
DROP TABLE IF EXISTS `v_cout_eqcli`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_cout_eqcli` AS select count(0) AS `count(*)` from `equipos_clientes`;

-- --------------------------------------------------------

--
-- Structure for view `v_cout_eqcli_taller`
--
DROP TABLE IF EXISTS `v_cout_eqcli_taller`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_cout_eqcli_taller` AS select count(0) AS `count(*)` from `equipos_clientes` where (`equipos_clientes`.`progreso` <> 100);

-- --------------------------------------------------------

--
-- Structure for view `v_eqclist`
--
DROP TABLE IF EXISTS `v_eqclist`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_eqclist` AS select `equipos_clientes`.`id_eqclient` AS `id_eqclient`,`equipos_clientes`.`marca_eqclient` AS `marca_eqclient`,`equipos_clientes`.`model_eqclient` AS `model_eqclient`,`equipos_clientes`.`tipo_eqclient` AS `tipo_eqclient`,`Clientes`.`nom_client` AS `nom_client`,`Clientes`.`apell_client` AS `apell_client` from (`equipos_clientes` join `Clientes`) where (`equipos_clientes`.`propietario_eqclient` = `Clientes`.`Id_client`);

-- --------------------------------------------------------

--
-- Structure for view `v_eqcli_reparado`
--
DROP TABLE IF EXISTS `v_eqcli_reparado`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_eqcli_reparado` AS select `equipos_clientes`.`id_eqclient` AS `id_eqclient`,`equipos_clientes`.`marca_eqclient` AS `marca_eqclient`,`equipos_clientes`.`model_eqclient` AS `model_eqclient`,`equipos_clientes`.`SN_eqclient` AS `SN_eqclient`,`equipos_clientes`.`tipo_eqclient` AS `tipo_eqclient`,`equipos_clientes`.`hardware_eqclient` AS `hardware_eqclient`,`equipos_clientes`.`observaciones_eqclient` AS `observaciones_eqclient`,`equipos_clientes`.`problema_eqclient` AS `problema_eqclient`,`equipos_clientes`.`diagnostico_eqclient` AS `diagnostico_eqclient`,`equipos_clientes`.`progreso` AS `progreso`,`equipos_clientes`.`status` AS `status`,`equipos_clientes`.`propietario_eqclient` AS `propietario_eqclient`,`equipos_clientes`.`tecnico` AS `tecnico` from `equipos_clientes` where (`equipos_clientes`.`progreso` = '100');

-- --------------------------------------------------------

--
-- Structure for view `v_eqcli_taller`
--
DROP TABLE IF EXISTS `v_eqcli_taller`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_eqcli_taller` AS select `equipos_clientes`.`id_eqclient` AS `id_eqclient`,`equipos_clientes`.`marca_eqclient` AS `marca_eqclient`,`equipos_clientes`.`model_eqclient` AS `model_eqclient`,`equipos_clientes`.`SN_eqclient` AS `SN_eqclient`,`equipos_clientes`.`tipo_eqclient` AS `tipo_eqclient`,`equipos_clientes`.`hardware_eqclient` AS `hardware_eqclient`,`equipos_clientes`.`observaciones_eqclient` AS `observaciones_eqclient`,`equipos_clientes`.`problema_eqclient` AS `problema_eqclient`,`equipos_clientes`.`diagnostico_eqclient` AS `diagnostico_eqclient`,`equipos_clientes`.`progreso` AS `progreso`,`equipos_clientes`.`status` AS `status`,`equipos_clientes`.`propietario_eqclient` AS `propietario_eqclient`,`equipos_clientes`.`tecnico` AS `tecnico` from `equipos_clientes` where (`equipos_clientes`.`status` = '1');

-- --------------------------------------------------------

--
-- Structure for view `v_eqmant`
--
DROP TABLE IF EXISTS `v_eqmant`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_eqmant` AS select `Clientes`.`nom_client` AS `nom_client`,`Clientes`.`apell_client` AS `apell_client`,`equipos_clientes`.`marca_eqclient` AS `marca_eqclient`,`equipos_clientes`.`model_eqclient` AS `model_eqclient`,`equipos_clientes`.`problema_eqclient` AS `problema_eqclient`,`equipos_clientes`.`progreso` AS `progreso` from (`Clientes` join `equipos_clientes`) where (`Clientes`.`Id_client` = `equipos_clientes`.`propietario_eqclient`) order by `equipos_clientes`.`progreso`;

-- --------------------------------------------------------

--
-- Structure for view `v_equipos_listos`
--
DROP TABLE IF EXISTS `v_equipos_listos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_equipos_listos` AS select `Clientes`.`nom_client` AS `nom_client`,`Clientes`.`apell_client` AS `apell_client`,`Clientes`.`tell_client` AS `tell_client`,`Clientes`.`email_client` AS `email_client`,`equipos_clientes`.`marca_eqclient` AS `marca_eqclient`,`equipos_clientes`.`model_eqclient` AS `model_eqclient`,`equipos_clientes`.`progreso` AS `progreso`,`Clientes`.`Id_client` AS `Id_client`,`equipos_clientes`.`id_eqclient` AS `id_eqclient` from (`equipos_clientes` join `Clientes`) where ((`equipos_clientes`.`progreso` = '100') and (`equipos_clientes`.`status` = '1') and (`equipos_clientes`.`propietario_eqclient` = `Clientes`.`Id_client`));

-- --------------------------------------------------------

--
-- Structure for view `v_eq_pendientes`
--
DROP TABLE IF EXISTS `v_eq_pendientes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_eq_pendientes` AS select `equipos_clientes`.`id_eqclient` AS `id_eqclient`,`equipos_clientes`.`marca_eqclient` AS `marca_eqclient`,`equipos_clientes`.`model_eqclient` AS `model_eqclient`,`equipos_clientes`.`tipo_eqclient` AS `tipo_eqclient`,`equipos_clientes`.`problema_eqclient` AS `problema_eqclient`,`equipos_clientes`.`diagnostico_eqclient` AS `diagnostico_eqclient`,`equipos_clientes`.`progreso` AS `progreso`,`intra_usuario`.`nick_intrauser` AS `nick_intrauser` from (`equipos_clientes` join `intra_usuario`) where ((`equipos_clientes`.`tecnico` = `intra_usuario`.`id_intrauser`) and (`equipos_clientes`.`progreso` <> 100));

-- --------------------------------------------------------

--
-- Structure for view `v_lista_tec`
--
DROP TABLE IF EXISTS `v_lista_tec`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_lista_tec` AS select `colavoradores`.`id_colavor` AS `id_colavor`,`colavoradores`.`nom_colaborador` AS `nom_colaborador`,`colavoradores`.`apell_colavorador` AS `apell_colavorador`,`colavoradores`.`tell_colavorador` AS `tell_colavorador`,`colavoradores`.`cell_colavorador` AS `cell_colavorador`,`colavoradores`.`email_colavorador` AS `email_colavorador`,`areas_trabajo`.`area` AS `area` from (`colavoradores` join `areas_trabajo`) where ((`colavoradores`.`cargo_colavorador` = 8) and (`areas_trabajo`.`id_at` = 8));

-- --------------------------------------------------------

--
-- Structure for view `v_list_col`
--
DROP TABLE IF EXISTS `v_list_col`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_list_col` AS select `colavoradores`.`id_colavor` AS `id_colavor`,`colavoradores`.`nom_colaborador` AS `nom_colaborador`,`colavoradores`.`apell_colavorador` AS `apell_colavorador`,`colavoradores`.`tell_colavorador` AS `tell_colavorador`,`colavoradores`.`cell_colavorador` AS `cell_colavorador`,`colavoradores`.`email_colavorador` AS `email_colavorador`,`areas_trabajo`.`area` AS `area` from (`colavoradores` join `areas_trabajo`) where (`colavoradores`.`cargo_colavorador` = `areas_trabajo`.`id_at`);

-- --------------------------------------------------------

--
-- Structure for view `v_numeqrepair_tec`
--
DROP TABLE IF EXISTS `v_numeqrepair_tec`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_numeqrepair_tec` AS select count(0) AS `count(*)` from `equipos_clientes`;

-- --------------------------------------------------------

--
-- Structure for view `v_perfil_intra`
--
DROP TABLE IF EXISTS `v_perfil_intra`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_perfil_intra` AS select `intra_usuario`.`id_intrauser` AS `id_intrauser`,`intra_usuario`.`nick_intrauser` AS `nick_intrauser`,`intra_usuario`.`pass_intrauser` AS `pass_intrauser`,`intra_usuario`.`status_intrauser` AS `status_intrauser`,`intra_usuario`.`nivel_access_intrauser` AS `nivel_access_intrauser`,`intra_usuario`.`cod_colavorador` AS `cod_colavorador`,`colavoradores`.`id_colavor` AS `id_colavor`,`colavoradores`.`nom_colaborador` AS `nom_colaborador`,`colavoradores`.`apell_colavorador` AS `apell_colavorador`,`colavoradores`.`tell_colavorador` AS `tell_colavorador`,`colavoradores`.`cell_colavorador` AS `cell_colavorador`,`colavoradores`.`Fecha_nacimiento` AS `Fecha_nacimiento`,`colavoradores`.`dui_col` AS `dui_col`,`colavoradores`.`isss_colavorador` AS `isss_colavorador`,`colavoradores`.`afp_colavorador` AS `afp_colavorador`,`colavoradores`.`nit_colavorador` AS `nit_colavorador`,`colavoradores`.`licencia_colavorador` AS `licencia_colavorador`,`colavoradores`.`tipo_licen_colavorador` AS `tipo_licen_colavorador`,`colavoradores`.`direccion_colavorador` AS `direccion_colavorador`,`colavoradores`.`email_colavorador` AS `email_colavorador`,`colavoradores`.`cargo_colavorador` AS `cargo_colavorador` from (`intra_usuario` join `colavoradores`) where (`intra_usuario`.`cod_colavorador` = `colavoradores`.`id_colavor`);

-- --------------------------------------------------------

--
-- Structure for view `v_propietario`
--
DROP TABLE IF EXISTS `v_propietario`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_propietario` AS select `cartera_clientes`.`Id_client` AS `Id_client`,`cartera_clientes`.`nom_client` AS `nom_client`,`cartera_clientes`.`apell_client` AS `apell_client` from `cartera_clientes`;

-- --------------------------------------------------------

--
-- Structure for view `v_venta`
--
DROP TABLE IF EXISTS `v_venta`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_venta` AS select `ventas`.`id_venta` AS `id_venta`,`ventas`.`monto_venta` AS `monto_venta`,`ventas`.`efectivo` AS `efectivo`,`ventas`.`total_cuenta` AS `total_cuenta`,`ventas`.`cambio` AS `cambio`,`ventas`.`descuento` AS `descuento`,`ventas`.`porcentaje_descuento` AS `porcentaje_descuento` from `ventas`;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bitacora`
--
ALTER TABLE `bitacora`
  ADD CONSTRAINT `bitacora_ibfk_1` FOREIGN KEY (`creador_proceso`) REFERENCES `intra_usuario` (`id_intrauser`);

--
-- Constraints for table `cargos_eqpaciente`
--
ALTER TABLE `cargos_eqpaciente`
  ADD CONSTRAINT `cargos_eqpaciente_ibfk_1` FOREIGN KEY (`cod_eqclient`) REFERENCES `equipos_clientes` (`id_eqclient`);

--
-- Constraints for table `colavoradores`
--
ALTER TABLE `colavoradores`
  ADD CONSTRAINT `colavoradores_ibfk_1` FOREIGN KEY (`cargo_colavorador`) REFERENCES `areas_trabajo` (`id_at`);

--
-- Constraints for table `equipos_clientes`
--
ALTER TABLE `equipos_clientes`
  ADD CONSTRAINT `equipos_clientes_ibfk_1` FOREIGN KEY (`propietario_eqclient`) REFERENCES `Clientes` (`Id_client`),
  ADD CONSTRAINT `equipos_clientes_ibfk_2` FOREIGN KEY (`tecnico`) REFERENCES `intra_usuario` (`id_intrauser`);

--
-- Constraints for table `intra_usuario`
--
ALTER TABLE `intra_usuario`
  ADD CONSTRAINT `intra_usuario_ibfk_1` FOREIGN KEY (`cod_colavorador`) REFERENCES `colavoradores` (`id_colavor`);

--
-- Constraints for table `usuario_client`
--
ALTER TABLE `usuario_client`
  ADD CONSTRAINT `usuario_client_ibfk_1` FOREIGN KEY (`idcod_usuclient`) REFERENCES `Clientes` (`Id_client`);

--
-- Constraints for table `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`cod_client`) REFERENCES `Clientes` (`Id_client`),
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`cod_eqclient`) REFERENCES `equipos_clientes` (`id_eqclient`),
  ADD CONSTRAINT `ventas_ibfk_4` FOREIGN KEY (`cod_vendedor`) REFERENCES `intra_usuario` (`id_intrauser`),
  ADD CONSTRAINT `ventas_ibfk_5` FOREIGN KEY (`cod_eqclient`) REFERENCES `equipos_clientes` (`id_eqclient`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
