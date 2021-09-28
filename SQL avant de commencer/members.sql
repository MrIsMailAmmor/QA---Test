-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 28 Septembre 2021 à 16:17
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
-- Structure de la table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `Fonction` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL DEFAULT '0',
  `last_name` varchar(255) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `members`
--

INSERT INTO `members` (`id`, `Fonction`, `first_name`, `last_name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(9, 'Professeur', 'ismail', 'ammor', 'ammor58@gmail.com', '$2y$04$pxqMkZvA3Cdm1ARHwER6VubsLEnLBQw1cFv48MBLoF7Pwp0ZEC6Vm', '2021-09-22 10:38:34', '2021-09-22 10:38:34'),
(11, 'Etudiant', 'ismail', 'ammor', 'ammor158@gmail.com', '$2y$04$B3vY2L2xVyPjQGRtz5wylO76Eo8HjX0EAp2zBfAlheqd3X4tYvp.K', '2021-09-22 12:52:57', '2021-09-22 12:52:57');
--
-- Index pour les tables exportées
--

--
-- Index pour la table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
