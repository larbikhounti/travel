-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2021 at 11:27 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oncf`
--

-- --------------------------------------------------------

--
-- Table structure for table `bilet`
--

CREATE TABLE `bilet` (
  `numbille` int(11) NOT NULL,
  `codeVoyage` varchar(55) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `datebilet` date DEFAULT current_timestamp(),
  `telephone` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bilet`
--

INSERT INTO `bilet` (`numbille`, `codeVoyage`, `email`, `datebilet`, `telephone`) VALUES
(52, 'v11', 'admin@admin.com', '2021-03-05', '0638959648'),
(53, 'v11', 'admin@admin.com', '2021-03-05', '0638959648'),
(54, 'v11', 'admin@admin.com', '2021-03-05', '0638959648'),
(55, 'v11', 'admin@admin.com', '2021-03-05', '0638959648'),
(56, 'v11', 'admin@admin.com', '2021-03-06', '0638959648'),
(57, 'v11', 'admin@admin.com', '2021-03-06', '0638959648'),
(58, 'v11', 'admin@admin.com', '2021-03-06', '0638959648'),
(59, 'v11', 'admin@admin.com', '2021-03-10', NULL),
(60, 'v11', 'admin@admin.com', '2021-03-10', NULL),
(61, 'v11', 'admin@admin.com', '2021-03-10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `voyage`
--

CREATE TABLE `voyage` (
  `codeVoyage` varchar(55) NOT NULL,
  `villeDepart` varchar(55) DEFAULT NULL,
  `villeDarrivee` varchar(55) DEFAULT NULL,
  `heureDepart` time DEFAULT NULL,
  `heureDarrivee` time DEFAULT NULL,
  `prixVoyage` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voyage`
--

INSERT INTO `voyage` (`codeVoyage`, `villeDepart`, `villeDarrivee`, `heureDepart`, `heureDarrivee`, `prixVoyage`) VALUES
('v11', 'tanger', 'casablanca', '12:28:44', '15:00:00', 150),
('v12', 'rabat', 'fés', '08:30:00', '12:00:00', 50),
('v187', 'tanger', 'casablanca', '12:28:21', '12:28:21', 150);

-- --------------------------------------------------------

--
-- Table structure for table `voyageur`
--

CREATE TABLE `voyageur` (
  `email` varchar(55) NOT NULL,
  `password` varchar(55) DEFAULT NULL,
  `nom` varchar(55) DEFAULT NULL,
  `prenom` varchar(55) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `telephone` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voyageur`
--

INSERT INTO `voyageur` (`email`, `password`, `nom`, `prenom`, `date_naissance`, `telephone`) VALUES
('admin@admin.com', 'admin', 'mohamed', 'khounti', '2021-03-24', '0638959648');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bilet`
--
ALTER TABLE `bilet`
  ADD PRIMARY KEY (`numbille`),
  ADD KEY `email` (`email`),
  ADD KEY `codeVoyage` (`codeVoyage`);

--
-- Indexes for table `voyage`
--
ALTER TABLE `voyage`
  ADD PRIMARY KEY (`codeVoyage`);

--
-- Indexes for table `voyageur`
--
ALTER TABLE `voyageur`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bilet`
--
ALTER TABLE `bilet`
  MODIFY `numbille` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bilet`
--
ALTER TABLE `bilet`
  ADD CONSTRAINT `bilet_ibfk_1` FOREIGN KEY (`email`) REFERENCES `voyageur` (`email`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `bilet_ibfk_2` FOREIGN KEY (`codeVoyage`) REFERENCES `voyage` (`codeVoyage`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
