-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 28 Septembre 2021 à 16:19
-- Version du serveur :  5.6.30-1
-- Version de PHP :  7.3.29-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `p22_ismail`
--

-- --------------------------------------------------------

--
-- Structure de la table `correctionetudiant`
--

CREATE TABLE `correctionetudiant` (
  `id` int(11) NOT NULL,
  `EtudiantId` int(11) NOT NULL,
  `motExam` varchar(255) NOT NULL,
  `motExamId` int(11) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `correctionetudiant`
--

INSERT INTO `correctionetudiant` (`id`, `EtudiantId`, `motExam`, `motExamId`, `created_at`) VALUES
(13, 10, 'premier mot,2eme,3eme,4éme,5éme,expression de mot,', 3, '2021-09-27 12:39:42');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `correctionetudiant`
--
ALTER TABLE `correctionetudiant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `motExam` (`motExam`),
  ADD KEY `motExamId` (`motExamId`),
  ADD KEY `EtudiantId` (`EtudiantId`) USING BTREE;

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `correctionetudiant`
--
ALTER TABLE `correctionetudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
