-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 26 avr. 2019 à 09:14
-- Version du serveur :  5.7.23
-- Version de PHP :  5.6.38

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `resolution_panne` varchar(1) DEFAULT NULL,
  `num_pc` varchar(10) DEFAULT NULL,
  `id_prof` int(11) DEFAULT NULL,
  `id_type_panne` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_panne`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `panne`
--

INSERT INTO `panne` (`id_panne`, `num_salle`, `desc_panne`, `date_panne`, `resolution_panne`, `num_pc`, `id_prof`, `id_type_panne`) VALUES
(1, NULL, 'Souris', '2019-04-02', NULL, NULL, NULL, 11),
(2, NULL, 'Clavier', '2019-04-04', NULL, NULL, NULL, 11),
(3, NULL, 'Port dégradé', '2019-04-01', NULL, NULL, NULL, 122),
(4, NULL, 'cable d\'alimentation', '2019-04-10', NULL, NULL, NULL, 122),
(5, NULL, 'Bouton d\'allumage', '2019-04-10', NULL, NULL, NULL, 122),
(6, NULL, 'Port dégradé', '2019-04-04', NULL, NULL, NULL, 123),
(7, NULL, 'Cable', '2019-04-12', NULL, NULL, NULL, 123),
(8, NULL, 'Allumage mais affiche message d\'erreur', '2019-04-12', NULL, NULL, NULL, 13),
(9, NULL, 'Prise d\'alimentation', '2019-04-03', NULL, NULL, NULL, 132),
(10, NULL, 'Cable d\'alimentation', '2019-04-10', NULL, NULL, NULL, 132),
(11, NULL, 'Sur un pc', '2019-04-16', NULL, NULL, NULL, 21),
(12, NULL, 'Sur plusieurs PC', '2019-04-10', NULL, NULL, NULL, 21),
(13, NULL, 'sur tous les PC', NULL, NULL, NULL, NULL, 21),
(14, NULL, 'Stockage Plein', '2019-04-03', NULL, NULL, NULL, 3),
(15, NULL, 'Logiciel non installé', '2019-04-09', NULL, NULL, NULL, 33),
(16, NULL, 'Disque plein', '2019-04-19', NULL, NULL, NULL, 3),
(17, NULL, 'Windows ne démarre plus', '2019-04-05', NULL, NULL, NULL, 3),
(18, NULL, 'La session ne s\'ouvre pas', '2019-04-17', NULL, NULL, NULL, 3),
(19, NULL, 'Bas débit à cause des réseau', '2019-04-10', NULL, NULL, NULL, 22);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `prof`
--

INSERT INTO `prof` (`id_prof`, `identifiant_P`, `mdp_P`) VALUES
(1, 'alan.bivic', '$2y$10$4zSMoBcE5yGY2jwIPrBsPupwU2M0dz.fea6Qq/ci8m7DUj3oWG9gK');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `technicien`
--

INSERT INTO `technicien` (`id_tech`, `email`, `numero_tel`, `identifiant_T`, `mdp_T`) VALUES
(1, 'yohann.fin22450@gmail.com', '0610101010', 'yohann.fin', '$2y$10$GQiLb5RFWUtEWvO4ZjGCXOIdeRjUQJt1Uy0QFIAr7XyF8spoDPG.O');

-- --------------------------------------------------------

--
-- Structure de la table `typepanne`
--

DROP TABLE IF EXISTS `typepanne`;
CREATE TABLE IF NOT EXISTS `typepanne` (
  `id_type_panne` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_type_panne` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_type_panne`)
) ENGINE=InnoDB AUTO_INCREMENT=1323 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `typepanne`
--

INSERT INTO `typepanne` (`id_type_panne`, `nom_type_panne`) VALUES
(1, 'Materiel'),
(2, 'Réseau'),
(3, 'Logiciel'),
(11, 'Périphérique'),
(12, 'Problème d\'allumage de l\'écrans'),
(13, 'Démarrage PC'),
(21, 'Pas de réseau'),
(121, 'L\'écrans ne s\'allume pas'),
(122, 'allumage de l\'écran mais problème de connexion du PC'),
(132, 'ne s\'allume pas'),
(1222, 'Cable'),
(1321, 'Prise d\'alimentation'),
(1322, 'Cable d\'alimentation');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
