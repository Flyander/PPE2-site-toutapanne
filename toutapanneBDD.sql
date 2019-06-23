-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 23 juin 2019 à 18:53
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `toutapanne`
--

-- --------------------------------------------------------

--
-- Structure de la table `couter`
--

DROP TABLE IF EXISTS `couter`;
CREATE TABLE IF NOT EXISTS `couter` (
  `id_tech` int(11) DEFAULT NULL,
  `id_panne` int(11) DEFAULT NULL,
  `prix` double DEFAULT NULL,
  `heure` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `couter`
--

INSERT INTO `couter` (`id_tech`, `id_panne`, `prix`, `heure`) VALUES
(1, 9, 45, '10:00:00'),
(1, 8, 122, '15:00:00'),
(1, 10, 54, '06:00:00'),
(1, 1, 40, '12:00:00'),
(1, 2, 10, '00:30:00'),
(1, 3, 600, '20:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `panne`
--

DROP TABLE IF EXISTS `panne`;
CREATE TABLE IF NOT EXISTS `panne` (
  `id_panne` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `num_salle` varchar(8) DEFAULT NULL,
  `desc_panne` varchar(500) DEFAULT NULL,
  `date_panne` date DEFAULT NULL,
  `resolution_panne` varchar(15) DEFAULT 'Non resolue',
  `num_pc` varchar(10) DEFAULT NULL,
  `id_prof` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_panne`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `panne`
--

INSERT INTO `panne` (`id_panne`, `num_salle`, `desc_panne`, `date_panne`, `resolution_panne`, `num_pc`, `id_prof`) VALUES
(1, 'B321', 'Le professeur a remplie le questionnaire avec les choix suivant : Reseau --> Pas de connexion --> Non', '2019-05-17', 'Resolue', 'PC 9', 1),
(2, 'B321', 'Le professeur a remplie le questionnaire avec les choix suivant : Materielle --> Souris --> cable', '2019-05-17', 'Resolue', 'PC 6', 1),
(3, 'B321', 'Le professeur a remplie le questionnaire avec les choix suivant : Logiciel --> Stockage plein --> Le windows ne demarre pas au lancement du PC', '2019-06-03', 'Resolue', 'PC 10', 1);

-- --------------------------------------------------------

--
-- Structure de la table `prof`
--

DROP TABLE IF EXISTS `prof`;
CREATE TABLE IF NOT EXISTS `prof` (
  `id_prof` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `identifiant_P` varchar(255) DEFAULT NULL,
  `mdp_P` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_prof`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `prof`
--

INSERT INTO `prof` (`id_prof`, `identifiant_P`, `mdp_P`) VALUES
(1, 'alan.bivic', '$2y$10$4zSMoBcE5yGY2jwIPrBsPupwU2M0dz.fea6Qq/ci8m7DUj3oWG9gK'),
(2, 'dorian.eouzan', '$2y$10$u7nurPvA5pvHnEKnTDUofuc7D4KUEzefCIWfxCEg8MILB7u3vQVWe'),
(3, 'guillaume.sergent', '$2y$10$/98KKKnyZhCH42ttVKZBx./uv063RG0ly0L.leAmV2Uu5ZQdUMGK2'),
(4, 'frederick.van-opdenbosch', '$2y$10$6wuVln9Mh15YvW.lQcAPveyJPeKeh5r1wd25LTCjli0A/TKh4cPFe'),
(5, 'nathalie.risser', '$2y$10$8MBN7wUNPWQA7f7YbEPdIufuQXttRmqaV6/tYXKDZUfyopFtDIVsG');

-- --------------------------------------------------------

--
-- Structure de la table `technicien`
--

DROP TABLE IF EXISTS `technicien`;
CREATE TABLE IF NOT EXISTS `technicien` (
  `id_tech` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `numero_tel` varchar(10) NOT NULL,
  `identifiant_T` varchar(255) DEFAULT NULL,
  `mdp_T` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_tech`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `technicien`
--

INSERT INTO `technicien` (`id_tech`, `email`, `numero_tel`, `identifiant_T`, `mdp_T`) VALUES
(1, 'yohann.fin22450@gmail.com', '0610101010', 'yohann.fin', '$2y$10$GQiLb5RFWUtEWvO4ZjGCXOIdeRjUQJt1Uy0QFIAr7XyF8spoDPG.O');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
