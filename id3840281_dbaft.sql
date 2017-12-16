-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2017 at 08:39 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3840281_dbaft`
--
CREATE DATABASE IF NOT EXISTS `id3840281_dbaft` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id3840281_dbaft`;

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `info_id` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `date_expire` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`info_id`, `titre`, `photo`, `description`, `details`, `date_expire`) VALUES
(7, 'OPEN DAYS 2017', 'photo1.jpg', 'Journée du TIC et Logiciel libre', 'Journée du TIC et Logiciel libre qui se tient le Samedi 2 et dimanche 3 decembre 2017', '2017-12-03'),
(8, 'PORTE OUVERTE 2017', 'fonds-ecran-paysage-de-reve-111.jpg', 'Porte ouverte AFT 2017', 'Porte ouverte le 16 decembre 2017\"', '2017-12-17');

-- --------------------------------------------------------

--
-- Table structure for table `membre`
--

CREATE TABLE `membre` (
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `emploi` varchar(100) NOT NULL,
  `organisme` varchar(50) NOT NULL,
  `rs1` varchar(100) NOT NULL,
  `rs2` varchar(100) NOT NULL,
  `rs3` varchar(100) NOT NULL,
  `mdp` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membre`
--

INSERT INTO `membre` (`nom`, `prenom`, `tel`, `mail`, `adresse`, `emploi`, `organisme`, `rs1`, `rs2`, `rs3`, `mdp`) VALUES
('Rasolo', 'Jussy', '0320461168', 'Jussy@gasigasy.com', 'Lot 215 cite Valpinson', 'Responsable com', 'Aft', 'Jussyrasolo', 'Genius1', 'Ratanalah', 'jossiass'),
('Mbilo', 'Julio', '0329876014', 'Juliombilo@gmail.com', 'Rue marmet Anjoma', 'Animateur des jeunes AFT', 'Alliance française', 'Julio lucillio mbilo', '', '', 'juliomb'),
('Andy', 'Larry', '0344612829', 'andy@gmail.com', 'Tamatave', 'Developpeur', '', 'FacebookAndy', '', '', 'test'),
('Palm', 'Hantanirina Josée Eulalie', '0345343991', 'eulalieenjelie@gmail.com', 'Lot 805 plle 11/33 Cité haras', 'Etudiante', '', 'Eulalie Randrianarison Facebook', '', '', '1998');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`tel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
