-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Jun 06, 2025 at 10:29 AM
-- Server version: 8.1.0
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `videoClub`
--

-- --------------------------------------------------------

--
-- Table structure for table `Director`
--

CREATE TABLE `Director` (
  `Id` bigint NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Edad` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Pelicula`
--

CREATE TABLE `Pelicula` (
  `Id` bigint NOT NULL,
  `Titulo` varchar(200) NOT NULL,
  `Categoria` varchar(100) NOT NULL,
  `Presupuesto` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Pelicula_Director`
--

CREATE TABLE `Pelicula_Director` (
  `id_director` bigint NOT NULL,
  `id_pelicula` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Usuario`
--

CREATE TABLE `Usuario` (
  `id` bigint NOT NULL,
  `Username` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Director`
--
ALTER TABLE `Director`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Pelicula`
--
ALTER TABLE `Pelicula`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Pelicula_Director`
--
ALTER TABLE `Pelicula_Director`
  ADD PRIMARY KEY (`id_director`,`id_pelicula`),
  ADD KEY `id_pelicula` (`id_pelicula`);

--
-- Indexes for table `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Director`
--
ALTER TABLE `Director`
  MODIFY `Id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Pelicula`
--
ALTER TABLE `Pelicula`
  MODIFY `Id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Pelicula_Director`
--
ALTER TABLE `Pelicula_Director`
  ADD CONSTRAINT `Pelicula_Director_ibfk_1` FOREIGN KEY (`id_director`) REFERENCES `Director` (`Id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Pelicula_Director_ibfk_2` FOREIGN KEY (`id_pelicula`) REFERENCES `Pelicula` (`Id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
