-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 19 juin 2021 à 20:15
-- Version du serveur :  10.3.29-MariaDB-0ubuntu0.20.04.1
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `inventory_tweaks`
--

-- --------------------------------------------------------

--
-- Structure de la table `accessoireEnAcier`
--

CREATE TABLE `accessoireEnAcier` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `taille` int(11) DEFAULT NULL,
  `couleur` varchar(50) DEFAULT NULL
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
-- Structure de la table `autre`
--

CREATE TABLE `autre` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `taille` int(11) DEFAULT NULL
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
-- Structure de la table `casier`
--

CREATE TABLE `casier` (
  `id` int(11) NOT NULL,
  `largeur` int(11) DEFAULT NULL,
  `etat` varchar(50) DEFAULT NULL,
  `id_etage` int(11) DEFAULT NULL,
  `typeMateriel` varchar(50) DEFAULT NULL,
  `id_materiel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `casier`
--

INSERT INTO `casier` (`id`, `largeur`, `etat`, `id_etage`, `typeMateriel`, `id_materiel`) VALUES
(1, 50, 'libre', 1, NULL, NULL),
(2, 50, 'occupe', 1, 'accessoire', 3),
(3, 50, 'occupe', 1, 'autre', 3),
(4, 50, 'libre', 1, NULL, NULL),
(5, 100, 'occupe', 2, 'outil', 2),
(6, 100, 'occupe', 2, 'outil', 3),
(7, 100, 'occupe', 3, 'accessoire', 2),
(8, 100, 'libre', 3, NULL, NULL),
(9, 100, 'occupe', 4, 'sac', 2),
(10, 100, 'occupe', 5, 'sac', 3),
(11, 100, 'libre', 6, NULL, NULL),
(12, 150, 'occupe', 7, 'autre', 2),
(13, 150, 'libre', 7, NULL, NULL),
(14, 300, 'libre', 8, NULL, NULL),
(15, 50, 'libre', 9, NULL, NULL),
(16, 50, 'libre', 9, NULL, NULL),
(17, 50, 'libre', 9, NULL, NULL),
(18, 50, 'libre', 10, NULL, NULL),
(19, 50, 'libre', 10, NULL, NULL),
(20, 50, 'libre', 10, NULL, NULL),
(21, 150, 'libre', 11, NULL, NULL),
(22, 150, 'libre', 12, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL
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
-- Structure de la table `employes`
--

CREATE TABLE `employes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `etage`
--

CREATE TABLE `etage` (
  `id` int(11) NOT NULL,
  `hauteur` int(11) DEFAULT NULL,
  `id_etagere` int(11) DEFAULT NULL
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
-- Structure de la table `etagere`
--

CREATE TABLE `etagere` (
  `id` int(11) NOT NULL,
  `couloir` int(11) DEFAULT NULL,
  `largeur` int(11) DEFAULT NULL
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
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_12_120116_create_employes_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `outil`
--

CREATE TABLE `outil` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `marque` varchar(50) DEFAULT NULL
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
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sac`
--

CREATE TABLE `sac` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `poids` int(11) DEFAULT NULL,
  `couleur` varchar(50) DEFAULT NULL,
  `datePeremption` date DEFAULT NULL
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
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'emreetu', 'emre.sener@etu.univ-lyon1.fr', NULL, '$2y$10$XC21a62./HjJI7ce9tJxjOo1KMA7ZHVabOit2D3lHYapZbgLZbtN.', NULL, '2021-06-13 08:09:42', '2021-06-13 08:09:42'),
(2, 'emre', 'm_re@live.fr', NULL, '$2y$10$Eg/75zjmLC8hjMW.1555EukCcgylbp.RqpBNvsfGMSs2XWGDb3ytC', NULL, '2021-06-13 08:10:11', '2021-06-13 08:10:11');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `accessoireEnAcier`
--
ALTER TABLE `accessoireEnAcier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `autre`
--
ALTER TABLE `autre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `casier`
--
ALTER TABLE `casier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_etage` (`id_etage`);

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etage`
--
ALTER TABLE `etage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_etagere` (`id_etagere`);

--
-- Index pour la table `etagere`
--
ALTER TABLE `etagere`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `outil`
--
ALTER TABLE `outil`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `sac`
--
ALTER TABLE `sac`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `employes`
--
ALTER TABLE `employes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `casier`
--
ALTER TABLE `casier`
  ADD CONSTRAINT `casier_ibfk_1` FOREIGN KEY (`id_etage`) REFERENCES `etage` (`id`);

--
-- Contraintes pour la table `etage`
--
ALTER TABLE `etage`
  ADD CONSTRAINT `etage_ibfk_1` FOREIGN KEY (`id_etagere`) REFERENCES `etagere` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
