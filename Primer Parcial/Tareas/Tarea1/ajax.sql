-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 06, 2015 at 09:01 AM
-- Server version: 10.0.21-MariaDB-log
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `administrador`
--

INSERT INTO `administrador` (`id`, `username`, `password`) VALUES
(1, 'lalo', 'lalo');

-- --------------------------------------------------------

--
-- Table structure for table `alumno`
--

CREATE TABLE IF NOT EXISTS `alumno` (
  `matricula` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `genero` varchar(255) DEFAULT NULL,
  `correo` varchar(255) NOT NULL,
  `carrera` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alumno`
--

INSERT INTO `alumno` (`matricula`, `nombre`, `apellido`, `fecha_nacimiento`, `fecha_ingreso`, `genero`, `correo`, `carrera`) VALUES
('lalalallalala', '', '', '0000-00-00', '0000-00-00', 'F', '', 'LIS'),
('lelellee', 'llaa', 'papsdpl', '2015-12-31', '2015-12-31', 'F', 'asdals', 'LCC'),
('09000856', 'Eduardo', 'Canche', '2015-01-01', '2015-01-01', 'F', 'lalo@hot.co', 'Ingenieria de Software'),
('aaa', 'aaa', 'aaa', '2015-12-31', '2015-12-30', 'Fe', 'aaa', 'Ciencas de la Computacion'),
('lop', 'lop', 'lop', '2015-01-01', '2015-02-01', 'Fe', 'eeeeee', 'Licenciada en Matematicas'),
('asdasd', 'asdasd', 'asdasd', '2015-12-31', '2015-12-30', 'Femenino', 'lop', 'Licenciada en Matematicas'),
('a;slda;slda;sdfl', 'las;dl;asdlql', 'pldslfs;dfls', '2016-01-01', '2015-01-01', 'Femenino', 'asdasdas', 'Licenciada en Matematicas');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE IF NOT EXISTS `tutor` (
  `clave` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `genero` char(3) NOT NULL,
  `area` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`clave`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
