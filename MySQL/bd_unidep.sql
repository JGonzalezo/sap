-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 04, 2016 at 02:27 
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_unidep`
--

-- --------------------------------------------------------

--
-- Table structure for table `aula`
--

CREATE TABLE `aula` (
  `id` int(11) NOT NULL,
  `clve_aula` varchar(4) NOT NULL,
  `letra` char(1) NOT NULL,
  `numero` int(2) NOT NULL,
  `f_mod` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `carrera`
--

CREATE TABLE `carrera` (
  `id` int(11) NOT NULL,
  `clve_car` varchar(6) NOT NULL,
  `nom_car` varchar(60) NOT NULL,
  `periodos` varchar(14) NOT NULL,
  `f_mod` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clases`
--

CREATE TABLE `clases` (
  `id` int(11) NOT NULL,
  `clve_clase` varchar(6) NOT NULL,
  `clve_car` varchar(6) NOT NULL,
  `grado` int(2) NOT NULL,
  `nom_mat` varchar(50) NOT NULL,
  `clve_hora` int(10) NOT NULL,
  `clve_aula` varchar(4) NOT NULL,
  `maestro` varchar(80) NOT NULL,
  `f_mod` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `estudiante`
--

CREATE TABLE `estudiante` (
  `id` int(11) NOT NULL,
  `ap` varchar(30) NOT NULL,
  `am` varchar(30) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `f_nac` varchar(10) NOT NULL,
  `edad` int(2) NOT NULL,
  `edo_civil` varchar(7) NOT NULL,
  `curp` varchar(8) NOT NULL,
  `tel` int(10) NOT NULL,
  `cel` int(10) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `calle` varchar(30) NOT NULL,
  `num_ext` int(4) NOT NULL,
  `num_int` int(3) NOT NULL,
  `col` varchar(35) NOT NULL,
  `cdad` varchar(15) NOT NULL,
  `cdad_nac` varchar(15) NOT NULL,
  `edo_nac` varchar(15) NOT NULL,
  `pais_nac` varchar(15) NOT NULL,
  `esc_proc` varchar(25) NOT NULL,
  `esp` varchar(35) NOT NULL,
  `prom_ant` int(2) NOT NULL,
  `f_egr` varchar(10) NOT NULL,
  `campus` varchar(15) NOT NULL,
  `carrera` varchar(6) NOT NULL,
  `beca` int(2) NOT NULL,
  `grado` int(2) NOT NULL,
  `asignaturas` int(1) NOT NULL,
  `mat1` varchar(8) NOT NULL,
  `mat2` varchar(8) NOT NULL,
  `mat3` varchar(4) NOT NULL,
  `mat4` varchar(8) NOT NULL,
  `mat5` varchar(8) NOT NULL,
  `mat6` varchar(8) NOT NULL,
  `mat7` varchar(8) NOT NULL,
  `mat8` varchar(8) NOT NULL,
  `mensual` float NOT NULL,
  `ctco_em` varchar(35) NOT NULL,
  `par_em` varchar(15) NOT NULL,
  `tel_em` int(10) NOT NULL,
  `seguro` int(8) NOT NULL,
  `ale_enf` varchar(100) NOT NULL,
  `obs` varchar(100) NOT NULL,
  `f_mod` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `grado`
--

CREATE TABLE `grado` (
  `id` int(11) NOT NULL,
  `grado` int(2) NOT NULL,
  `periodo` varchar(6) NOT NULL,
  `f_mod` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `horario`
--

CREATE TABLE `horario` (
  `id` int(11) NOT NULL,
  `clve_hora` varchar(6) NOT NULL,
  `hora_in` time NOT NULL,
  `hora_out` time NOT NULL,
  `f_mod` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `materia`
--

CREATE TABLE `materia` (
  `id` int(11) NOT NULL,
  `clve_mat` varchar(8) NOT NULL,
  `nom_mat` varchar(50) NOT NULL,
  `creditos` int(2) NOT NULL,
  `grado` int(2) NOT NULL,
  `clve_car` varchar(6) DEFAULT NULL,
  `serie` varchar(2) NOT NULL,
  `f_mod` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aula`
--
ALTER TABLE `aula`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grado`
--
ALTER TABLE `grado`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aula`
--
ALTER TABLE `aula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `clases`
--
ALTER TABLE `clases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `grado`
--
ALTER TABLE `grado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `horario`
--
ALTER TABLE `horario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `materia`
--
ALTER TABLE `materia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
