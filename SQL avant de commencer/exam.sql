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
-- Structure de la table `exam`
--

CREATE TABLE `exam` (
  `Examid` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `TextArea` text NOT NULL,
  `motCacher` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `professorID` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `exam`
--

INSERT INTO `exam` (`Examid`, `Title`, `TextArea`, `motCacher`, `created_at`, `professorID`) VALUES
(6, 'examen des bubles', 'Il était une fois un homme qui avait des belles maisons à la ville et à la campagne,\r\n\r\nde la vaisselle d\'or et d\'argent, des meubles en broderie, et des carrosses tout dorés.\r\n\r\nMais par malheur cet homme avait la barbe bleue.', 'maisons,vaisselle,carrosses,homme,', '2021-09-27 13:56:40', 9),
(11, 'La maison de l\'escargot', 'Il était une fois un pauvre escargot qui souffrait beaucoup à chaque fois qu\'il partait en randonnée, car il avait du mal à suivre le rythme de ses compagnons.\r\nLa coccinelle était aussi rapide qu\'une souris, le mille-pattes, avec ses mille pattes, ignorait la fatigue, le scarabée prenait même le temps de faire des escapades vers les fleurs.\r\nLe pauvre petit escargot, lui, peinait, soufflait, transpirait tout seul et loin derrière, abandonné par les autres qui n\'avaient plus la patience de l\'attendre.\r\nQuand le petit escargot parvenait enfin à rejoindre le groupe, les autres petites bêtes s\'étaient déjà bien reposées, avaient bien mangé et après avoir bien joué, avaient préparé le campement et dormaient depuis bien longtemps. Et comme il n\'y avait plus de place, le petit escargot devait coucher à la belle étoile.\r\nMais chaque matin, obstiné, il reprenait la route, espérant toujours rattraper ses amis. Pour ne pas s\'ennuyer pendant le parcours, il sifflotait, regardait à droite et à gauche, saluait les petites bêtes qu\'il rencontrait.', 'rythme,compagnons,pauvre,abandonné,longtemps,reposées,belle,espérant,pendant,parcours,regardait,reposées,', '2021-09-28 14:55:24', 9),
(10, 'Cocorico', '«  Impossible de fermer l\'œil…\r\nCocorico !\r\n…depuis que j\'ai avalé ce maudit coq !\r\nCocorico !\r\nToc Toc\r\nTiens, qu\'est-ce qu\'il y a encore ?\r\n- Ah ! C\'est toi, voisin.\r\n- Dis donc, ça t\'embêterait de faire taire ton coq ? Je ne peux pas dormir.\r\n- Je n\'y arrive pas !\r\n- Tu devrais manger une poule.\r\nÇa occupera ton coq, il fera moins de bruit.\r\n- Bonne idée. Je vais faire ça dès demain matin. »\r\nCot\r\nPoink !\r\n« Ah ! Tu tombes bien. Je commençais à m\'ennuyer dans ce ventre !\r\nLe seul moyen de nous sortir de là…\r\nCot ?\r\nC\'est de faire le plus de bruit possible ! »\r\nCot, cot, cot\r\nCocorico ! Cocorico !\r\nCot, cot, cot\r\nCocorico\r\n« Quel bazar ! Tu réveilles tout le monde. Va voir un docteur ! »\r\nCocorico\r\nCot cot\r\nToc Toc\r\n« Bonjour, Docteur, j\'ai un problème.\r\n- Ça s\'entend.\r\nOuh là là ! C\'est très grave.\r\nBientôt la poule va faire des œufs…\r\nCot\r\n…de ces œufs vont sortir des poussins qui vont devenir des poules, des coqs !\r\nSi vous voulez mon avis, vous devriez manger un renard.\r\n- Un renard ? Pour quoi faire ?\r\n- Pour qu\'il mange toute cette volaille, pardi !\r\nCocorico !\r\n- Merci ! »\r\n« Eh, toi !\r\nViens un peu là, que je te mange !\r\n- Ça va pas ? Tu es maboul ?\r\n- Maboul ? Retire ça !\r\n- Abruti ! »\r\nCocorico\r\nCocorico\r\nCot\r\n« Ouh là là !\r\nLe médicament n\'a pas marché ?\r\nIl va y avoir du boulot pour refermer ce bazar ! »', 'Cocorico,encore,Cocorico,devriez,Merci !,Le médicament,Un renard,poules,œufs,', '2021-09-28 14:53:20', 9);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`Examid`),
  ADD KEY `professorID` (`professorID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `exam`
--
ALTER TABLE `exam`
  MODIFY `Examid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
