-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 14 avr. 2020 à 08:59
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bd_inventory_tweaks`
--

-- --------------------------------------------------------
use inventory_tweaks;
--
-- Structure de la table employe
--

DROP TABLE IF EXISTS `employe`;
CREATE TABLE IF NOT EXISTS `employe` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`id`, `nom`, `prenom`) VALUES
(1, 'SENER', 'Emre'),
(2, 'BENZEMA', 'Karim'),
(3, 'PAQUETA', 'Lucas'),
(4, 'YILMAZ', 'Burak'),
(5, 'YAZICI', 'Yusuf');

-- --------------------------------------------------------

--
-- Structure de la table `etagere`
--

DROP TABLE IF EXISTS `casier`;
DROP TABLE IF EXISTS `etage`;
DROP TABLE IF EXISTS `etagere`;

CREATE TABLE IF NOT EXISTS `etagere` (
  `id` int(11) NOT NULL,
  `couloir` int(11) DEFAULT NULL,
  `largeur` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etagere`
--

INSERT INTO `etagere` (`id`, `couloir`, `largeur`) VALUES
(1, 1, 200),
(2, 1, 100),
(3, 2, 300),
(4, 3, 150),
(5, 3, 150);

-- --------------------------------------------------------

--
-- Structure de la table `etage`
--

DROP TABLE IF EXISTS `etage`;
CREATE TABLE IF NOT EXISTS `etage` (
  `id` int(11) NOT NULL,
  `hauteur` int(11) DEFAULT NULL,
  `id_etagere` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (id_etagere) REFERENCES etagere(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etage`
--

INSERT INTO `etage` (`id`, `hauteur`, `id_etagere`) VALUES
(1, 60, 1),
(2, 60, 1),
(3, 60, 1),
(4, 70, 2),
(5, 70, 2),
(6, 40, 2),
(7, 90, 3),
(8, 90, 3),
(9, 90, 4),
(10, 90, 4),
(11, 90, 5),
(12, 90, 5);

-- --------------------------------------------------------

--
-- Structure de la table `casier`
--

DROP TABLE IF EXISTS `casier`;
CREATE TABLE IF NOT EXISTS `casier` (
  `id` int(11) NOT NULL,
  `largeur` int(11) DEFAULT NULL,
  `etat` varchar(50) DEFAULT NULL,
  `id_etage` int(11) DEFAULT NULL,
  `typeMateriel` varchar(50) DEFAULT NULL,
  `id_materiel` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (id_etage) REFERENCES etage(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `casier`
--

INSERT INTO `casier` (`id`, `largeur`, `etat`, `id_etage`, `typeMateriel`, `id_materiel`) VALUES
(1, 50, 'libre', 1, null, null),
(2, 50, 'libre', 1, null, null),
(3, 50, 'libre', 1, null, null),
(4, 50, 'libre', 1, null, null),
(5, 100, 'libre', 2, null, null),
(6, 100, 'libre', 2, null, null),
(7, 100, 'libre', 3, null, null),
(8, 100, 'libre', 3, null, null),
(9, 100, 'libre', 4, null, null),
(10, 100, 'libre', 5, null, null),
(11, 100, 'libre', 6, null, null),
(12, 150, 'libre', 7, null, null),
(13, 150, 'libre', 7, null, null),
(14, 300, 'libre', 8, null, null),
(15, 50, 'libre', 9, null, null),
(16, 50, 'libre', 9, null, null),
(17, 50, 'libre', 9, null, null),
(18, 50, 'libre', 10, null, null),
(19, 50, 'libre', 10, null, null),
(20, 50, 'libre', 10, null, null),
(21, 150, 'libre', 11, null, null),
(22, 150, 'libre', 12, null, null);

-- --------------------------------------------------------

--
-- Structure de la table `sac`
--

DROP TABLE IF EXISTS `sac`;
CREATE TABLE IF NOT EXISTS `sac` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `poids` int(11) DEFAULT NULL,
  `couleur` varchar(50) DEFAULT NULL,
  `datePeremption` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sac`
--

INSERT INTO `sac` (`id`, `nom`, `poids`, `couleur`, `datePeremption`) VALUES
(1, 'colle', 3, 'blanc', '2025-01-01'),
(2, 'joint', 5, 'gris', '2025-01-01'),
(3, 'ciment', 35, 'gris', '2025-01-01');

-- --------------------------------------------------------

--
-- Structure de la table `accessoireEnAcier`
--

DROP TABLE IF EXISTS `accessoireEnAcier`;
CREATE TABLE IF NOT EXISTS `accessoireEnAcier` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `taille` int(11) DEFAULT NULL,
  `couleur` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `accessoireEnAcier`
--

INSERT INTO `accessoireEnAcier` (`id`, `nom`, `taille`, `couleur`) VALUES
(1, 'vis x500', 90, 'noir'),
(2, 'clou x500', 150, 'gris'),
(3, 'equerre x20', 10, 'gris');

-- --------------------------------------------------------

--
-- Structure de la table `outil`
--

DROP TABLE IF EXISTS `outil`;
CREATE TABLE IF NOT EXISTS `outil` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `marque` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `outil`
--

INSERT INTO `outil` (`id`, `nom`, `marque`) VALUES
(1, 'visseuse', 'carrefour'),
(2, 'perceuse', 'hitachi'),
(3, 'truelle', 'stanley');

-- --------------------------------------------------------

--
-- Structure de la table `autre`
--

DROP TABLE IF EXISTS `autre`;
CREATE TABLE IF NOT EXISTS `autre` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `taille` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `autre`
--

INSERT INTO `autre` (`id`, `nom`, `taille`) VALUES
(1, 'palette', 180),
(2, 'ba13', 200),
(3, 'ba16', 180);

-- --------------------------------------------------------

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `manga`
--
-- ALTER TABLE `manga`
--  ADD CONSTRAINT `manga_ibfk_1` FOREIGN KEY (`id_dessinateur`) REFERENCES `dessinateur` (`id_dessinateur`),
--  ADD CONSTRAINT `manga_ibfk_2` FOREIGN KEY (`id_scenariste`) REFERENCES `scenariste` (`id_scenariste`),
--  ADD CONSTRAINT `manga_ibfk_3` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`);
-- COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
