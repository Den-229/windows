-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 23 mai 2024 à 22:29
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `agriconnect`
--
CREATE DATABASE IF NOT EXISTS `agriconnect` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `agriconnect`;

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `idcours` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demandes`
--

CREATE TABLE `demandes` (
  `iddemande` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `motif` varchar(255) NOT NULL,
  `datecreation` datetime NOT NULL,
  `datemiseajour` datetime NOT NULL,
  `daterejet` datetime NOT NULL,
  `appreciationsysteme` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `demandes`
--

INSERT INTO `demandes` (`iddemande`, `libelle`, `motif`, `datecreation`, `datemiseajour`, `daterejet`, `appreciationsysteme`, `statut`, `iduser`) VALUES
(1, 'Activation de compte', 'Je veux avoir plus de privilèges.', '2024-05-16 10:56:18', '2024-05-16 13:17:24', '0000-00-00 00:00:00', 'J\'aime vraiment', 'Validé', 3),
(2, 'Demande du role Formateur', 'Je veux avoir plus de privilèges et fonctionnalités.', '2024-05-16 11:14:10', '2024-05-16 12:52:43', '0000-00-00 00:00:00', 'fghjklmù*\r\n4', 'Validé', 3),
(3, 'Activation de compte', 'Je veux activer mon compte pour avoir accès aux infos supplémentaires', '2024-05-23 08:26:13', '2024-05-23 08:29:28', '0000-00-00 00:00:00', '', 'En cours', 3),
(4, 'Activation de compte', 'Je veux plus de fonctionnalités', '2024-05-24 01:24:55', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'I like it', 'Validé', 3),
(5, 'Activation de compte', 'Je veux plus de fonctionnalités', '2024-05-24 01:47:15', '0000-00-00 00:00:00', '2024-05-23 15:49:12', 'I don\'t like it', 'Rejeté', 2),
(6, 'Demande du role Formateur', 'Je veux devenir formateur pour avoir plus de privilèges', '2024-05-24 01:53:22', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'J\'apprécie la demande', 'Validé', 3);

-- --------------------------------------------------------

--
-- Structure de la table `detaildemande`
--

CREATE TABLE `detaildemande` (
  `id` int(11) NOT NULL,
  `iddemande` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `typeuser` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `idformation` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `dateheure` datetime NOT NULL,
  `duree` varchar(255) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `formations`
--

INSERT INTO `formations` (`idformation`, `titre`, `description`, `dateheure`, `duree`, `iduser`) VALUES
(1, 'Formation1', 'Une formation pour les bonnes pratiques agricoles.', '2024-05-26 20:09:00', '1 semaines', 5);

-- --------------------------------------------------------

--
-- Structure de la table `groupe_page`
--

CREATE TABLE `groupe_page` (
  `id` int(11) NOT NULL,
  `file` text DEFAULT NULL,
  `desfile` text DEFAULT NULL,
  `texte` text DEFAULT NULL,
  `cat` int(11) DEFAULT NULL,
  `langue` varchar(10) DEFAULT NULL,
  `lien` text DEFAULT NULL,
  `vue` varchar(20) DEFAULT NULL,
  `date` varchar(10) DEFAULT NULL,
  `heure` varchar(5) DEFAULT NULL,
  `pays` varchar(200) DEFAULT NULL,
  `titre` text DEFAULT NULL,
  `emplacement` varchar(50) DEFAULT NULL,
  `lienogiciel` text DEFAULT NULL,
  `clelogiciel` text DEFAULT NULL,
  `image2` text DEFAULT NULL,
  `image3` text DEFAULT NULL,
  `image4` text DEFAULT NULL,
  `ville` varchar(30) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `alav` varchar(30) DEFAULT NULL,
  `prix` int(11) DEFAULT NULL,
  `deja` int(11) DEFAULT NULL,
  `metatitre` text DEFAULT NULL,
  `metamotcle` text DEFAULT NULL,
  `emailcontact` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `identification`
--

CREATE TABLE `identification` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `mpasse` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `identification`
--

INSERT INTO `identification` (`id`, `login`, `mpasse`, `email`) VALUES
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', '');

-- --------------------------------------------------------

--
-- Structure de la table `motifrejet`
--

CREATE TABLE `motifrejet` (
  `idmotif` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `suivre`
--

CREATE TABLE `suivre` (
  `id` int(11) NOT NULL,
  `idformation` int(11) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `estActif` tinyint(1) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`iduser`, `nom`, `prenom`, `email`, `mdp`, `estActif`, `cv`, `role`, `photo`) VALUES
(1, 'ASSOGBA', 'Denis', 'assogbadenis710@gmail.com', '$2y$10$MPxHR4ikEeS9uaPmatoIx.7OGZH0mAGvsXi5LiHbahO31mZxBo02S', 0, '', 'Acheteur', 'assets/img/cv/240_F_629195246_QkHvBqxNGWEbtLaiA9HaIpn39V1hSaKY.jpg'),
(2, 'DANSOU', 'Jean', 'dansoujean@gmail.com', '$2y$10$OOd6L5UJ/7RZF8wszyaSceiIdXF.NIzRRH6bNLCzooOzgrIs4dxS.', 0, 'assets/img/cv/240_F_615707389_tCybDMDTdxlY8H7WwX8cKZYNb7WABjBs.jpg', 'Formateur', 'assets/img/cv/240_F_630883274_Br6zIQccUdO6mgmZ0M15quY83CoT816Y.jpg'),
(3, 'ZANNOU', 'Max', 'maxzannou@gmail.com', '$2y$10$NmBJyonIR3Jywlw/0iPhfuOont5ZFvZMPB4DhlgJF.nJFsEmaPL1i', 1, 'assets/img/cv/240_F_619454581_68WTblkkt5wxzF9TVt2dLLd98kvsAKxV.jpg', 'Formateur', 'assets/img/cv/240_F_105840580_WtqgzD5mbEd63d32duNBR8ENTAqrU4Dr.jpg'),
(4, 'DOSSOU', 'Raoul', 'dossouraoul@gmail.com', '$2y$10$mRJyowSwUGe.sHyVGwRYruMd6dHD5axpHHUPX4kqRVZSksJAw42Pi', 1, '', 'Acheteur', 'assets/img/cv/240_F_619172259_hjDQjkezPv5DDpUMAUac4HUXYLExsf8m.jpg'),
(5, 'PEDE', 'Appolinaire', 'pedeapollinaire@gmail.com', '$2y$10$YUsuC94MEJh2z8bQswOOcO1OIh5UIdS/OoDfB63AvrZ4P4j7Oaixa', 1, 'assets/img/cv/240_F_619454581_68WTblkkt5wxzF9TVt2dLLd98kvsAKxV.jpg', 'Formateur', ''),
(7, 'ADMIN', 'Admin', 'admin@gmail.com', '$2y$10$9x5pr.q1Q0tC5kSV2Kj9E./tA1/URG2pCQgWSjWok3Jmk/SNLi5nK', 1, '', 'Administrateur', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`idcours`),
  ADD KEY `iduser` (`iduser`);

--
-- Index pour la table `demandes`
--
ALTER TABLE `demandes`
  ADD PRIMARY KEY (`iddemande`),
  ADD KEY `iduser` (`iduser`);

--
-- Index pour la table `detaildemande`
--
ALTER TABLE `detaildemande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddemande` (`iddemande`),
  ADD KEY `iduser` (`iduser`);

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`idformation`),
  ADD KEY `iduser` (`iduser`);

--
-- Index pour la table `groupe_page`
--
ALTER TABLE `groupe_page`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `identification`
--
ALTER TABLE `identification`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `motifrejet`
--
ALTER TABLE `motifrejet`
  ADD PRIMARY KEY (`idmotif`),
  ADD KEY `iduser` (`iduser`);

--
-- Index pour la table `suivre`
--
ALTER TABLE `suivre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idformation` (`idformation`),
  ADD KEY `iduser` (`iduser`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `idcours` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `demandes`
--
ALTER TABLE `demandes`
  MODIFY `iddemande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `detaildemande`
--
ALTER TABLE `detaildemande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `idformation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `groupe_page`
--
ALTER TABLE `groupe_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `identification`
--
ALTER TABLE `identification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `motifrejet`
--
ALTER TABLE `motifrejet`
  MODIFY `idmotif` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `suivre`
--
ALTER TABLE `suivre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `cours_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `users` (`iduser`);

--
-- Contraintes pour la table `demandes`
--
ALTER TABLE `demandes`
  ADD CONSTRAINT `demandes_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `users` (`iduser`);

--
-- Contraintes pour la table `detaildemande`
--
ALTER TABLE `detaildemande`
  ADD CONSTRAINT `detaildemande_ibfk_1` FOREIGN KEY (`iddemande`) REFERENCES `demandes` (`iddemande`),
  ADD CONSTRAINT `detaildemande_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `users` (`iduser`);

--
-- Contraintes pour la table `formations`
--
ALTER TABLE `formations`
  ADD CONSTRAINT `formations_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `users` (`iduser`);

--
-- Contraintes pour la table `motifrejet`
--
ALTER TABLE `motifrejet`
  ADD CONSTRAINT `motifrejet_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `users` (`iduser`);

--
-- Contraintes pour la table `suivre`
--
ALTER TABLE `suivre`
  ADD CONSTRAINT `suivre_ibfk_1` FOREIGN KEY (`idformation`) REFERENCES `formations` (`idformation`),
  ADD CONSTRAINT `suivre_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `users` (`iduser`);
--
-- Base de données : `bdtest`
--
CREATE DATABASE IF NOT EXISTS `bdtest` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bdtest`;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `email` text NOT NULL,
  `fichier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `date`, `email`, `fichier`) VALUES
(1, 'ASSOGBA', 'Denis', '2004-10-07', 'assogbadenis753@gmail.com', 'uploads/IMG-20231019-WA0024.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Base de données : `e2020`
--
CREATE DATABASE IF NOT EXISTS `e2020` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `e2020`;

-- --------------------------------------------------------

--
-- Structure de la table `localite`
--

CREATE TABLE `localite` (
  `codeLocalite` int(11) NOT NULL,
  `nomLocalite` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `localite`
--

INSERT INTO `localite` (`codeLocalite`, `nomLocalite`) VALUES
(1, 'Parakou'),
(2, 'Cotonou'),
(3, 'Porto-Novo'),
(4, 'Calavi');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `codeProjet` int(11) NOT NULL,
  `nomProjet` varchar(50) DEFAULT NULL,
  `dateLancement` text DEFAULT NULL,
  `duree` text DEFAULT NULL,
  `codeLocalite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`codeProjet`, `nomProjet`, `dateLancement`, `duree`, `codeLocalite`) VALUES
(1, 'Création d\'une application mobile', '2024-03-16', '1 semaines', 1),
(2, 'Création d\'une application web', '2023-03-16', '360 heures', 3),
(4, 'Création d\'une application de gestion de stock', '2024-04-03', '2 semaines', 1),
(5, 'Création d\'un jeu vidéo', '2024-04-04', '3 semaines', 3),
(6, 'Création d\'un jeu de réflexion', '2024-04-12', '2 semaines', 2),
(7, 'Création d\'une application desktop', '2024-06-13', '128 heures', 4),
(10, 'Création d\'une application de gestion de stock 2', '2024-04-09', '1 semaines', 4),
(11, 'Création d\'une application de gestion de stock 3', '2024-04-18', '2 semaines', 3),
(12, 'Création d\'un jeu vidéo 2', '2024-04-14', '3 semaines', 4);

-- --------------------------------------------------------

--
-- Structure de la table `suivi`
--

CREATE TABLE `suivi` (
  `numSuivi` int(11) NOT NULL,
  `dateSuivi` text DEFAULT NULL,
  `pourcentage` varchar(25) DEFAULT NULL,
  `codeProjet` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `localite`
--
ALTER TABLE `localite`
  ADD PRIMARY KEY (`codeLocalite`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`codeProjet`),
  ADD KEY `codeLocalite` (`codeLocalite`);

--
-- Index pour la table `suivi`
--
ALTER TABLE `suivi`
  ADD PRIMARY KEY (`numSuivi`),
  ADD KEY `codeProjet` (`codeProjet`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `localite`
--
ALTER TABLE `localite`
  MODIFY `codeLocalite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `projet`
--
ALTER TABLE `projet`
  ADD CONSTRAINT `projet_ibfk_1` FOREIGN KEY (`codeLocalite`) REFERENCES `localite` (`codeLocalite`);

--
-- Contraintes pour la table `suivi`
--
ALTER TABLE `suivi`
  ADD CONSTRAINT `suivi_ibfk_1` FOREIGN KEY (`codeProjet`) REFERENCES `projet` (`codeProjet`);
--
-- Base de données : `ecome`
--
CREATE DATABASE IF NOT EXISTS `ecome` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ecome`;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_24_112619_create_products_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `subtitle` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

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
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_title_unique` (`title`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

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
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Base de données : `lfp-fbf`
--
CREATE DATABASE IF NOT EXISTS `lfp-fbf` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `lfp-fbf`;

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(11) NOT NULL,
  `Année` text NOT NULL,
  `Catégorie` varchar(255) NOT NULL,
  `club` varchar(255) NOT NULL,
  `Idadh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id`, `Année`, `Catégorie`, `club`, `Idadh`) VALUES
(1, '2015-2016', 'Junior', 'MOGAS FC', 1),
(2, '2015-2016', 'Junior', 'REQUINS FC', 2),
(3, '2016-2017', 'Junior', 'DRAGONS FC', 1),
(4, '2016-2017', 'Senior', 'ASPAC FC', 2),
(5, '2017-2018', 'Sénior', 'DRAGONS FC', 1),
(6, '2017-2018', 'Sénior', 'DRAGONS FC', 2),
(7, '2017-2018', 'Junior', 'DRAGONS FC', 3),
(12, '', '', 'ASPAC FC', 9),
(13, '12/05/76', 'Junior', 'ASPAC FC', 10);

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

CREATE TABLE `joueur` (
  `Idjoueur` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prénom` varchar(255) NOT NULL,
  `Datnaissance` text NOT NULL,
  `ville` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `joueur`
--

INSERT INTO `joueur` (`Idjoueur`, `Nom`, `Prénom`, `Datnaissance`, `ville`) VALUES
(1, 'ADIMI', 'Jean', '10/08/99', 'Cotonou'),
(2, 'SOGLO', 'Bernard', '12/09/98', 'Porto-Novo'),
(3, 'DOSSOU', 'Casimir', '04/12/01', 'Allada'),
(9, 'DOSSOU', 'Paul', '12/01/96', 'Abomey'),
(10, 'ADIMI', 'Julien', '06/11/94', 'Ouidah');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Idadh` (`Idadh`);

--
-- Index pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD PRIMARY KEY (`Idjoueur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `joueur`
--
ALTER TABLE `joueur`
  MODIFY `Idjoueur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `inscription_ibfk_1` FOREIGN KEY (`Idadh`) REFERENCES `joueur` (`Idjoueur`),
  ADD CONSTRAINT `inscription_ibfk_2` FOREIGN KEY (`Idadh`) REFERENCES `joueur` (`Idjoueur`);
--
-- Base de données : `magasin`
--
CREATE DATABASE IF NOT EXISTS `magasin` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `magasin`;
--
-- Base de données : `marchesbenin`
--
CREATE DATABASE IF NOT EXISTS `marchesbenin` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `marchesbenin`;

-- --------------------------------------------------------

--
-- Structure de la table `emplacement`
--

CREATE TABLE `emplacement` (
  `idEmplacement` int(11) NOT NULL,
  `numero` varchar(255) DEFAULT NULL,
  `idType` int(11) DEFAULT NULL,
  `idMarche` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `marche`
--

CREATE TABLE `marche` (
  `idMarche` int(11) NOT NULL,
  `nomMarche` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `capacite` int(11) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `idVille` int(11) DEFAULT NULL,
  `idQuartier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `marche`
--

INSERT INTO `marche` (`idMarche`, `nomMarche`, `description`, `capacite`, `adresse`, `telephone`, `image`, `idVille`, `idQuartier`) VALUES
(1, 'Marché de Gbégamey', 'Marché de Gbégamey', 600, 'Gbégamey', '54217896', 'uploads\\Desert.jpg', 1, 0),
(2, 'Marché de Mènontin', 'Marché de Mènontin', 500, 'Mènontin', '53616932', 'uploads\\Hydrangeas.jpg', 1, 0),
(3, 'Marché de Wologuèdè', 'Marché de Wologuèdè', 500, 'Wologuèdè', '57549892', 'uploads\\Jellyfish.jpg', 1, 0),
(4, 'User', 'ygrjhkroljoklnrkjklfhk', 456, 'Cotonou', '65421389987', 'uploads/Capture d’écran (1).png', NULL, 0),
(5, 'Marché de Jericho', 'C\'est un marché situé à Jericho', 478, 'Cotonou', '56780954', 'uploads/images (5).jpeg', 1, 1),
(6, 'Marché de Jericho', 'C\'est un marché situé à Jericho', 478, 'Cotonou', '56780954', 'uploads/images (5).jpeg', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `quartier`
--

CREATE TABLE `quartier` (
  `idQuartier` int(11) NOT NULL,
  `nomQuartier` varchar(255) DEFAULT NULL,
  `idVille` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `quartier`
--

INSERT INTO `quartier` (`idQuartier`, `nomQuartier`, `idVille`) VALUES
(1, 'Jericho', 1),
(2, 'Mènontin', 1),
(3, 'Gbègo', 2),
(4, 'Dowa', 2);

-- --------------------------------------------------------

--
-- Structure de la table `typeemplacement`
--

CREATE TABLE `typeemplacement` (
  `idType` int(11) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `idVille` int(11) NOT NULL,
  `nomVille` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`idVille`, `nomVille`) VALUES
(1, 'Cotonou'),
(2, 'Porto-Novo');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `emplacement`
--
ALTER TABLE `emplacement`
  ADD PRIMARY KEY (`idEmplacement`),
  ADD KEY `idType` (`idType`),
  ADD KEY `idMarche` (`idMarche`);

--
-- Index pour la table `marche`
--
ALTER TABLE `marche`
  ADD PRIMARY KEY (`idMarche`),
  ADD KEY `idVille` (`idVille`),
  ADD KEY `idQuartier` (`idQuartier`);

--
-- Index pour la table `quartier`
--
ALTER TABLE `quartier`
  ADD PRIMARY KEY (`idQuartier`),
  ADD KEY `idVille` (`idVille`);

--
-- Index pour la table `typeemplacement`
--
ALTER TABLE `typeemplacement`
  ADD PRIMARY KEY (`idType`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`idVille`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `emplacement`
--
ALTER TABLE `emplacement`
  MODIFY `idEmplacement` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `marche`
--
ALTER TABLE `marche`
  MODIFY `idMarche` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `quartier`
--
ALTER TABLE `quartier`
  MODIFY `idQuartier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `typeemplacement`
--
ALTER TABLE `typeemplacement`
  MODIFY `idType` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `idVille` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `emplacement`
--
ALTER TABLE `emplacement`
  ADD CONSTRAINT `emplacement_ibfk_1` FOREIGN KEY (`idType`) REFERENCES `typeemplacement` (`idType`),
  ADD CONSTRAINT `emplacement_ibfk_2` FOREIGN KEY (`idMarche`) REFERENCES `marche` (`idMarche`);

--
-- Contraintes pour la table `marche`
--
ALTER TABLE `marche`
  ADD CONSTRAINT `marche_ibfk_1` FOREIGN KEY (`idVille`) REFERENCES `ville` (`idVille`),
  ADD CONSTRAINT `marche_ibfk_2` FOREIGN KEY (`idQuartier`) REFERENCES `quartier` (`idQuartier`);

--
-- Contraintes pour la table `quartier`
--
ALTER TABLE `quartier`
  ADD CONSTRAINT `quartier_ibfk_1` FOREIGN KEY (`idVille`) REFERENCES `ville` (`idVille`);
--
-- Base de données : `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Structure de la table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Structure de la table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Structure de la table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Structure de la table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Structure de la table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Structure de la table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Structure de la table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Déchargement des données de la table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"agriconnect\",\"table\":\"demandes\"},{\"db\":\"agriconnect\",\"table\":\"users\"},{\"db\":\"agriconnect\",\"table\":\"formations\"},{\"db\":\"agriconnect\",\"table\":\"identification\"},{\"db\":\"agriconnect\",\"table\":\"demanderoleformateur\"},{\"db\":\"agriconnect\",\"table\":\"suivre\"},{\"db\":\"agriconnect\",\"table\":\"animer\"},{\"db\":\"yaba_bd\",\"table\":\"groupe_page\"},{\"db\":\"testmod\",\"table\":\"reservation\"},{\"db\":\"agriconnect\",\"table\":\"detaildemande\"}]');

-- --------------------------------------------------------

--
-- Structure de la table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Structure de la table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Structure de la table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

--
-- Déchargement des données de la table `pma__tracking`
--

INSERT INTO `pma__tracking` (`db_name`, `table_name`, `version`, `date_created`, `date_updated`, `schema_snapshot`, `schema_sql`, `data_sql`, `tracking`, `tracking_active`) VALUES
('projetweb', 'equipe', 1, '2024-04-11 12:39:39', '2024-04-12 18:42:10', 'a:2:{s:7:\"COLUMNS\";a:4:{i:0;a:8:{s:5:\"Field\";s:8:\"idequipe\";s:4:\"Type\";s:7:\"int(11)\";s:9:\"Collation\";N;s:4:\"Null\";s:2:\"NO\";s:3:\"Key\";s:3:\"PRI\";s:7:\"Default\";N;s:5:\"Extra\";s:14:\"auto_increment\";s:7:\"Comment\";s:0:\"\";}i:1;a:8:{s:5:\"Field\";s:9:\"nomequipe\";s:4:\"Type\";s:12:\"varchar(255)\";s:9:\"Collation\";s:15:\"utf8_general_ci\";s:4:\"Null\";s:2:\"NO\";s:3:\"Key\";s:0:\"\";s:7:\"Default\";N;s:5:\"Extra\";s:0:\"\";s:7:\"Comment\";s:0:\"\";}i:2;a:8:{s:5:\"Field\";s:12:\"datecreation\";s:4:\"Type\";s:4:\"date\";s:9:\"Collation\";N;s:4:\"Null\";s:2:\"NO\";s:3:\"Key\";s:0:\"\";s:7:\"Default\";N;s:5:\"Extra\";s:0:\"\";s:7:\"Comment\";s:0:\"\";}i:3;a:8:{s:5:\"Field\";s:11:\"villeequipe\";s:4:\"Type\";s:12:\"varchar(255)\";s:9:\"Collation\";s:15:\"utf8_general_ci\";s:4:\"Null\";s:2:\"NO\";s:3:\"Key\";s:0:\"\";s:7:\"Default\";N;s:5:\"Extra\";s:0:\"\";s:7:\"Comment\";s:0:\"\";}}s:7:\"INDEXES\";a:1:{i:0;a:13:{s:5:\"Table\";s:6:\"equipe\";s:10:\"Non_unique\";s:1:\"0\";s:8:\"Key_name\";s:7:\"PRIMARY\";s:12:\"Seq_in_index\";s:1:\"1\";s:11:\"Column_name\";s:8:\"idequipe\";s:9:\"Collation\";s:1:\"A\";s:11:\"Cardinality\";s:1:\"0\";s:8:\"Sub_part\";N;s:6:\"Packed\";N;s:4:\"Null\";s:0:\"\";s:10:\"Index_type\";s:5:\"BTREE\";s:7:\"Comment\";s:0:\"\";s:13:\"Index_comment\";s:0:\"\";}}}', '# log 2024-04-11 12:39:39 root\nDROP TABLE IF EXISTS `equipe`;\n# log 2024-04-11 12:39:39 root\n\nCREATE TABLE `equipe` (\n  `idequipe` int(11) NOT NULL,\n  `nomequipe` varchar(255) NOT NULL,\n  `datecreation` date NOT NULL,\n  `villeequipe` varchar(255) NOT NULL\n) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;\n\n# log 2024-04-11 12:42:24 root\nDROP TABLE IF EXISTS `equipe`;\n# log 2024-04-11 12:42:24 root\nCREATE TABLE `equipe` (\r\n  `idequipe` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,\r\n  `nomequipe` varchar(255) NOT NULL,\r\n  `datecreation` date NOT NULL,\r\n  `villeequipe` varchar(255) NOT NULL\r\n) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;', '\n\n# log 2024-04-12 13:00:52 root\nINSERT INTO `equipe` (`idequipe`, `nomequipe`, `datecreation`, `villeequipe`) VALUES (NULL, \'Dragon\', \'2018-04-11\', \'Cotonou\'), (NULL, \'Requin\', \'2018-03-22\', \'Porto-Novo\');\n\n# log 2024-04-12 18:40:24 root\nINSERT INTO `equipe` (`idequipe`, `nomequipe`, `datecreation`, `villeequipe`) VALUES (NULL, \'Loto-Popo\', \'2018-06-21\', \'Grand Popo\'), (NULL, \' Coton\', \'2019-09-17\', \'Abomey\');\n\n# log 2024-04-12 18:42:10 root\nINSERT INTO `equipe` (`idequipe`, `nomequipe`, `datecreation`, `villeequipe`) VALUES (NULL, \'Buffle\', \'2016-03-24\', \'Parakou\');\n', 'UPDATE,INSERT,DELETE,TRUNCATE,CREATE TABLE,ALTER TABLE,RENAME TABLE,DROP TABLE,CREATE INDEX,DROP INDEX', 1),
('projetweb', 'joueur', 1, '2024-04-11 12:50:39', '2024-04-11 12:52:38', 'a:2:{s:7:\"COLUMNS\";a:6:{i:0;a:8:{s:5:\"Field\";s:8:\"idjoueur\";s:4:\"Type\";s:7:\"int(11)\";s:9:\"Collation\";N;s:4:\"Null\";s:2:\"NO\";s:3:\"Key\";s:3:\"PRI\";s:7:\"Default\";N;s:5:\"Extra\";s:14:\"auto_increment\";s:7:\"Comment\";s:0:\"\";}i:1;a:8:{s:5:\"Field\";s:9:\"nomjoueur\";s:4:\"Type\";s:12:\"varchar(255)\";s:9:\"Collation\";s:15:\"utf8_general_ci\";s:4:\"Null\";s:2:\"NO\";s:3:\"Key\";s:0:\"\";s:7:\"Default\";N;s:5:\"Extra\";s:0:\"\";s:7:\"Comment\";s:0:\"\";}i:2;a:8:{s:5:\"Field\";s:12:\"prenomjoueur\";s:4:\"Type\";s:12:\"varchar(255)\";s:9:\"Collation\";s:15:\"utf8_general_ci\";s:4:\"Null\";s:2:\"NO\";s:3:\"Key\";s:0:\"\";s:7:\"Default\";N;s:5:\"Extra\";s:0:\"\";s:7:\"Comment\";s:0:\"\";}i:3;a:8:{s:5:\"Field\";s:13:\"contactjoueur\";s:4:\"Type\";s:12:\"varchar(255)\";s:9:\"Collation\";s:15:\"utf8_general_ci\";s:4:\"Null\";s:2:\"NO\";s:3:\"Key\";s:0:\"\";s:7:\"Default\";N;s:5:\"Extra\";s:0:\"\";s:7:\"Comment\";s:0:\"\";}i:4;a:8:{s:5:\"Field\";s:11:\"postejoueur\";s:4:\"Type\";s:12:\"varchar(255)\";s:9:\"Collation\";s:15:\"utf8_general_ci\";s:4:\"Null\";s:2:\"NO\";s:3:\"Key\";s:0:\"\";s:7:\"Default\";N;s:5:\"Extra\";s:0:\"\";s:7:\"Comment\";s:0:\"\";}i:5;a:8:{s:5:\"Field\";s:8:\"idequipe\";s:4:\"Type\";s:7:\"int(11)\";s:9:\"Collation\";N;s:4:\"Null\";s:2:\"NO\";s:3:\"Key\";s:0:\"\";s:7:\"Default\";N;s:5:\"Extra\";s:0:\"\";s:7:\"Comment\";s:0:\"\";}}s:7:\"INDEXES\";a:1:{i:0;a:13:{s:5:\"Table\";s:6:\"joueur\";s:10:\"Non_unique\";s:1:\"0\";s:8:\"Key_name\";s:7:\"PRIMARY\";s:12:\"Seq_in_index\";s:1:\"1\";s:11:\"Column_name\";s:8:\"idjoueur\";s:9:\"Collation\";s:1:\"A\";s:11:\"Cardinality\";s:1:\"0\";s:8:\"Sub_part\";N;s:6:\"Packed\";N;s:4:\"Null\";s:0:\"\";s:10:\"Index_type\";s:5:\"BTREE\";s:7:\"Comment\";s:0:\"\";s:13:\"Index_comment\";s:0:\"\";}}}', '# log 2024-04-11 12:50:39 root\nDROP TABLE IF EXISTS `joueur`;\n# log 2024-04-11 12:50:39 root\n\nCREATE TABLE `joueur` (\n  `idjoueur` int(11) NOT NULL,\n  `nomjoueur` varchar(255) NOT NULL,\n  `prenomjoueur` varchar(255) NOT NULL,\n  `contactjoueur` varchar(255) NOT NULL,\n  `postejoueur` varchar(255) NOT NULL,\n  `idequipe` int(11) NOT NULL\n) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;\n\n# log 2024-04-11 12:52:38 root\nALTER TABLE joueur ADD FOREIGN KEY(idequipe) REFERENCES equipe(idequipe);', '\n', 'UPDATE,INSERT,DELETE,TRUNCATE,CREATE TABLE,ALTER TABLE,RENAME TABLE,DROP TABLE,CREATE INDEX,DROP INDEX', 1),
('projetweb', 'match', 1, '2024-04-11 13:06:48', '2024-04-12 15:41:37', 'a:2:{s:7:\"COLUMNS\";a:4:{i:0;a:8:{s:5:\"Field\";s:7:\"idmatch\";s:4:\"Type\";s:7:\"int(11)\";s:9:\"Collation\";N;s:4:\"Null\";s:2:\"NO\";s:3:\"Key\";s:3:\"PRI\";s:7:\"Default\";N;s:5:\"Extra\";s:14:\"auto_increment\";s:7:\"Comment\";s:0:\"\";}i:1;a:8:{s:5:\"Field\";s:8:\"idequipe\";s:4:\"Type\";s:7:\"int(11)\";s:9:\"Collation\";N;s:4:\"Null\";s:2:\"NO\";s:3:\"Key\";s:0:\"\";s:7:\"Default\";N;s:5:\"Extra\";s:0:\"\";s:7:\"Comment\";s:0:\"\";}i:2;a:8:{s:5:\"Field\";s:4:\"date\";s:4:\"Type\";s:4:\"date\";s:9:\"Collation\";N;s:4:\"Null\";s:2:\"NO\";s:3:\"Key\";s:0:\"\";s:7:\"Default\";N;s:5:\"Extra\";s:0:\"\";s:7:\"Comment\";s:0:\"\";}i:3;a:8:{s:5:\"Field\";s:4:\"lieu\";s:4:\"Type\";s:12:\"varchar(255)\";s:9:\"Collation\";s:15:\"utf8_general_ci\";s:4:\"Null\";s:2:\"NO\";s:3:\"Key\";s:0:\"\";s:7:\"Default\";N;s:5:\"Extra\";s:0:\"\";s:7:\"Comment\";s:0:\"\";}}s:7:\"INDEXES\";a:1:{i:0;a:13:{s:5:\"Table\";s:5:\"match\";s:10:\"Non_unique\";s:1:\"0\";s:8:\"Key_name\";s:7:\"PRIMARY\";s:12:\"Seq_in_index\";s:1:\"1\";s:11:\"Column_name\";s:7:\"idmatch\";s:9:\"Collation\";s:1:\"A\";s:11:\"Cardinality\";s:1:\"0\";s:8:\"Sub_part\";N;s:6:\"Packed\";N;s:4:\"Null\";s:0:\"\";s:10:\"Index_type\";s:5:\"BTREE\";s:7:\"Comment\";s:0:\"\";s:13:\"Index_comment\";s:0:\"\";}}}', '# log 2024-04-11 13:06:48 root\nDROP TABLE IF EXISTS `match`;\n# log 2024-04-11 13:06:48 root\n\nCREATE TABLE `match` (\n  `idmatch` int(11) NOT NULL,\n  `idequipe` int(11) NOT NULL,\n  `date` date NOT NULL,\n  `lieu` varchar(255) NOT NULL\n) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;\n\n# log 2024-04-11 13:09:50 root\nALTER TABLE `match` ADD FOREIGN KEY(idequipe) REFERENCES equipe(idequipe);\n# log 2024-04-12 14:35:46 root\nALTER TABLE `match` ADD `idequipe2` INT NOT NULL AFTER `idequipe`;\n# log 2024-04-12 14:36:32 root\nALTER TABLE `match` ADD FOREIGN KEY(idequipe2) REFERENCES equipe(idequipe);\n# log 2024-04-12 14:37:14 root\nALTER TABLE `match` CHANGE `idequipe` `idequipe1` INT(11) NOT NULL;\n# log 2024-04-12 14:37:35 root\nALTER TABLE `match` ADD FOREIGN KEY(idequipe1) REFERENCES equipe(idequipe);\n# log 2024-04-12 14:38:19 root\nALTER TABLE `match` CHANGE `date` `date` DATE   NOT NULL AFTER `idequipe1`, CHANGE `lieu` `lieu` VARCHAR(255)   CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL AFTER `date`;\n', '\n\n# log 2024-04-12 15:23:39 root\nTRUNCATE TABLE `match`;\n\n# log 2024-04-12 15:41:37 root\nTRUNCATE TABLE `match`;\n', 'UPDATE,INSERT,DELETE,TRUNCATE,CREATE TABLE,ALTER TABLE,RENAME TABLE,DROP TABLE,CREATE INDEX,DROP INDEX', 1);

-- --------------------------------------------------------

--
-- Structure de la table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Déchargement des données de la table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2024-05-23 20:29:39', '{\"Console\\/Mode\":\"show\",\"lang\":\"fr\",\"Console\\/Height\":1.0019999999999998}');

-- --------------------------------------------------------

--
-- Structure de la table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Structure de la table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Index pour la table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Index pour la table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Index pour la table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Index pour la table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Index pour la table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Index pour la table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Index pour la table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Index pour la table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Index pour la table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Index pour la table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Index pour la table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Index pour la table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Index pour la table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Base de données : `projetweb`
--
CREATE DATABASE IF NOT EXISTS `projetweb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `projetweb`;

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE `equipe` (
  `idequipe` int(11) NOT NULL,
  `nomequipe` varchar(255) NOT NULL,
  `datecreation` date NOT NULL,
  `villeequipe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`idequipe`, `nomequipe`, `datecreation`, `villeequipe`) VALUES
(1, 'Dragon', '2018-04-11', 'Cotonou'),
(2, 'Requin', '2018-03-22', 'Porto-Novo'),
(3, 'Loto-Popo', '2018-06-21', 'Grand Popo'),
(4, ' Coton', '2019-09-17', 'Abomey'),
(5, 'Buffle', '2016-03-24', 'Parakou');

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

CREATE TABLE `joueur` (
  `idjoueur` int(11) NOT NULL,
  `nomjoueur` varchar(255) NOT NULL,
  `prenomjoueur` varchar(255) NOT NULL,
  `contactjoueur` varchar(255) NOT NULL,
  `postejoueur` varchar(255) NOT NULL,
  `idequipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `joueur`
--

INSERT INTO `joueur` (`idjoueur`, `nomjoueur`, `prenomjoueur`, `contactjoueur`, `postejoueur`, `idequipe`) VALUES
(1, 'AMATIN', 'Raoul ', '97000201', 'Milieu', 1),
(2, 'SOSSOU', 'Albert', '90989796', 'Défenseur', 2);

-- --------------------------------------------------------

--
-- Structure de la table `match`
--

CREATE TABLE `match` (
  `idmatch` int(11) NOT NULL,
  `idequipe1` int(11) NOT NULL,
  `date` date NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `idequipe2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `match`
--

INSERT INTO `match` (`idmatch`, `idequipe1`, `date`, `lieu`, `idequipe2`) VALUES
(1, 1, '2016-06-10', 'Cotonou', 2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `iduser` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`iduser`, `mdp`) VALUES
('ADMIN', 'ADMIN');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`idequipe`);

--
-- Index pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD PRIMARY KEY (`idjoueur`),
  ADD KEY `idequipe` (`idequipe`);

--
-- Index pour la table `match`
--
ALTER TABLE `match`
  ADD PRIMARY KEY (`idmatch`),
  ADD KEY `idequipe2` (`idequipe2`),
  ADD KEY `idequipe1` (`idequipe1`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `idequipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `joueur`
--
ALTER TABLE `joueur`
  MODIFY `idjoueur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `match`
--
ALTER TABLE `match`
  MODIFY `idmatch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD CONSTRAINT `joueur_ibfk_1` FOREIGN KEY (`idequipe`) REFERENCES `equipe` (`idequipe`);

--
-- Contraintes pour la table `match`
--
ALTER TABLE `match`
  ADD CONSTRAINT `match_ibfk_1` FOREIGN KEY (`idequipe1`) REFERENCES `equipe` (`idequipe`),
  ADD CONSTRAINT `match_ibfk_2` FOREIGN KEY (`idequipe2`) REFERENCES `equipe` (`idequipe`),
  ADD CONSTRAINT `match_ibfk_3` FOREIGN KEY (`idequipe1`) REFERENCES `equipe` (`idequipe`);
--
-- Base de données : `rapido`
--
CREATE DATABASE IF NOT EXISTS `rapido` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `rapido`;

-- --------------------------------------------------------

--
-- Structure de la table `chauffeurs`
--

CREATE TABLE `chauffeurs` (
  `chauffeur_id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenoms` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `disponible` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `chauffeurs`
--

INSERT INTO `chauffeurs` (`chauffeur_id`, `nom`, `prenoms`, `telephone`, `sexe`, `disponible`) VALUES
(1, 'DANSOU', 'Paul', '52487963', 'Masculin', 'oui'),
(2, 'ADAMOU', 'Pierre', '45213698', 'Masculin', 'oui');

-- --------------------------------------------------------

--
-- Structure de la table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `point_depart` varchar(255) NOT NULL,
  `point_arrivee` varchar(255) NOT NULL,
  `date_heure` datetime NOT NULL,
  `chauffeur_id` int(11) DEFAULT NULL,
  `statut` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `courses`
--

INSERT INTO `courses` (`course_id`, `point_depart`, `point_arrivee`, `date_heure`, `chauffeur_id`, `statut`) VALUES
(3, 'Cotonou', 'Bohicon', '2024-06-09 11:45:00', 1, 'en cours'),
(5, 'Bohicon', 'Cocotomey', '2024-04-05 10:45:32', 2, 'en cours'),
(6, 'Cotonou', 'Porto-Novo', '2024-06-09 10:45:00', 2, ' en cours '),
(7, 'Parakou', 'Porto-Novo', '2021-11-23 14:54:00', 2, ' en cours ');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chauffeurs`
--
ALTER TABLE `chauffeurs`
  ADD PRIMARY KEY (`chauffeur_id`);

--
-- Index pour la table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `chauffeur_id` (`chauffeur_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chauffeurs`
--
ALTER TABLE `chauffeurs`
  MODIFY `chauffeur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`chauffeur_id`) REFERENCES `chauffeurs` (`chauffeur_id`);
--
-- Base de données : `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Base de données : `test0`
--
CREATE DATABASE IF NOT EXISTS `test0` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `test0`;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `email` text NOT NULL,
  `fichier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `date`, `email`, `fichier`) VALUES
(1, ' DANSOU ', ' Paul ', '2024-04-03', 'dansoupaul@gmail.com', 'uploads/images (3).jpeg'),
(2, 'DOSSOU', 'Jean', '2021-11-16', 'dossoujean@gmail.com', 'uploads/images (5).jpeg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Base de données : `test2`
--
CREATE DATABASE IF NOT EXISTS `test2` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `test2`;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `email`) VALUES
(1, ' Doe', ' Jane2', 'jane.doe@example.com'),
(8, 'Doe', 'John', 'john.doe@example.com'),
(9, 'Doe', 'John', 'john.doe@example.com'),
(10, 'Doe', 'John', 'john.doe@example.com'),
(13, 'Doe', 'John', 'john.doe@example.com'),
(14, 'Doe', 'John', 'john.doe@example.com'),
(15, 'Doe', 'John', 'john.doe@example.com'),
(16, 'Doe', 'John', 'john.doe@example.com'),
(17, 'Doe', 'John', 'john.doe@example.com'),
(18, 'Doe', 'John', 'john.doe@example.com'),
(19, 'Doe', 'John', 'john.doe@example.com'),
(20, 'Doe', 'John', 'john.doe@example.com'),
(21, 'Doe', 'John', 'john.doe@example.com'),
(22, 'Doe', 'John', 'john.doe@example.com'),
(23, 'Doe', 'John', 'john.doe@example.com'),
(24, 'Doe', 'John', 'john.doe@example.com'),
(25, 'Doe', 'John', 'john.doe@example.com'),
(26, 'Doe', 'John', 'john.doe@example.com'),
(27, 'Doe', 'John', 'john.doe@example.com'),
(28, 'Doe', 'John', 'john.doe@example.com'),
(29, 'Doe', 'John', 'john.doe@example.com'),
(30, 'Doe', 'John', 'john.doe@example.com'),
(31, 'Doe', 'John', 'john.doe@example.com'),
(32, 'Doe', 'John', 'john.doe@example.com'),
(33, 'Doe', 'John', 'john.doe@example.com'),
(34, 'Doe', 'John', 'john.doe@example.com'),
(35, 'Doe', 'John', 'john.doe@example.com'),
(36, 'Doe', 'John', 'john.doe@example.com'),
(38, 'Doe', 'John', 'john.doe@example.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- Base de données : `testmod`
--
CREATE DATABASE IF NOT EXISTS `testmod` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `testmod`;

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `texte` varchar(255) NOT NULL,
  `note` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`id`, `nom`, `texte`, `note`) VALUES
(1, 'Denis', 'J\'ai été impressionné par le luxe et le confort', 3),
(2, 'Paul', 'Vraiment c\'est un hôtel de rêve', 5),
(3, 'Paul', 'Hotel de reve', 3),
(4, 'Denis', 'Un hotel de reve', 2),
(5, 'Pierre', 'C\'est un luxe', 4),
(6, 'Jean', 'Vraiment un hotel de reve', 5),
(7, 'Paul', 'Hotel luxueux', 5),
(8, 'Denis', 'jhkhlej:rpùemrkfeùmzkùemefùrfùrlfùzelfùefùleùerlr', 2);

-- --------------------------------------------------------

--
-- Structure de la table `groupe_page`
--

CREATE TABLE `groupe_page` (
  `id` int(11) NOT NULL,
  `file` text DEFAULT NULL,
  `desfile` text DEFAULT NULL,
  `texte` text DEFAULT NULL,
  `cat` int(11) DEFAULT NULL,
  `langue` varchar(10) DEFAULT NULL,
  `lien` text DEFAULT NULL,
  `vue` varchar(20) DEFAULT NULL,
  `date` varchar(10) DEFAULT NULL,
  `heure` varchar(5) DEFAULT NULL,
  `pays` varchar(200) DEFAULT NULL,
  `titre` text DEFAULT NULL,
  `emplacement` varchar(50) DEFAULT NULL,
  `lienogiciel` text DEFAULT NULL,
  `clelogiciel` text DEFAULT NULL,
  `image2` text DEFAULT NULL,
  `image3` text DEFAULT NULL,
  `image4` text DEFAULT NULL,
  `ville` varchar(30) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `alav` varchar(30) DEFAULT NULL,
  `prix` int(11) DEFAULT NULL,
  `deja` int(11) DEFAULT NULL,
  `metatitre` text DEFAULT NULL,
  `metamotcle` text DEFAULT NULL,
  `emailcontact` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `groupe_page`
--

INSERT INTO `groupe_page` (`id`, `file`, `desfile`, `texte`, `cat`, `langue`, `lien`, `vue`, `date`, `heure`, `pays`, `titre`, `emplacement`, `lienogiciel`, `clelogiciel`, `image2`, `image3`, `image4`, `ville`, `type`, `alav`, `prix`, `deja`, `metatitre`, `metamotcle`, `emailcontact`) VALUES
(1, 'images/upload/55_50703432741.jpg', NULL, '<p style=\"text-align:center\"><span style=\"color:#f1c40f\">Receptionist</span></p>\r\n', NULL, NULL, '', NULL, '16-02-2024', '16:55', NULL, 'Laureen GRANT', 'imageacc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(2, 'images/upload/54_586234668792.jpg', NULL, '<p style=\"text-align:center\"><span style=\"color:#f1c40f\">Founder</span></p>\r\n', NULL, NULL, '', NULL, '16-02-2024', '16:54', NULL, 'SAM ROBINSON', 'imageacc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(4, 'images/upload/15_02283442484.jpeg', NULL, '<p style=\"text-align:center\">Avec notre h&ocirc;tel, vous pouvez &eacute;conomiser beaucoup d&#39;argent sur l&#39;h&eacute;bergement tout au long de l&#39;ann&eacute;e pour profiter de votre s&eacute;jour dans notre ville.</p>\r\n', NULL, NULL, '', NULL, '23-02-2024', '17:05', NULL, 'Economisez de l\'argent pour le plaisir', 'cta', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(8, 'images/upload/09_367400277637.jpg', NULL, '<p style=\"text-align:center\">un parcours remarquable, &eacute;maill&eacute; d&#39;ann&eacute;es d&#39;engagement in&eacute;branlable envers l&#39;excellence h&ocirc;teli&egrave;re</p>\r\n', NULL, NULL, '', NULL, '18-03-2024', '16:39', NULL, '', 'subscribe', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(174, '', NULL, '', NULL, NULL, '', NULL, '18-03-2024', '18:36', NULL, 'https://instagram.com/mavilla_hotel?igshid=MzRlODBiNWFlZA%3D%3D', 'instagramicon', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(9, '', NULL, '<p style=\"text-align:center\">12</p>\r\n', NULL, NULL, '', NULL, '23-02-2024', '12:18', NULL, 'Tasses de Caffé', 'followingdream', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(12, 'images/upload/16_263210758676.jpeg', NULL, '', NULL, NULL, '', NULL, '21-02-2024', '10:16', NULL, 'ROOM 1', 'thumbnail1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(13, 'images/upload/34_34637043996.jpg', NULL, '', NULL, NULL, '', NULL, '18-02-2024', '10:34', NULL, 'ROOM 1', 'thumbnail1', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(14, 'images/upload/33_063247893094.jpeg', NULL, '<p style=\"text-align:justify\">Profitez du budget h&eacute;bergement orient&eacute;</p>\r\n', NULL, NULL, '', NULL, '23-02-2024', '18:33', NULL, 'un endroit parfait et abordable où séjourner', 'swipercarousel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(15, 'images/upload/32_156615136135.jpeg', NULL, '<p style=\"text-align:justify\">Nous fournissons un h&eacute;bergement confortable pour vous</p>\r\n', NULL, NULL, '', NULL, '23-02-2024', '18:32', NULL, 'Servir les clients à petit budget', 'swipercarousel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(16, 'images/upload/33_599425631758.jpeg', NULL, '<p>D&eacute;couvrez l&#39;&eacute;l&eacute;gance et le raffinement</p>\r\n\r\n<p>dans un cadre luxueux o&ugrave; chaque d&eacute;tail</p>\r\n\r\n<p>est soigneusement pens&eacute; pour offrir une</p>\r\n\r\n<p>exp&eacute;rience inoubliable</p>\r\n', NULL, NULL, '', NULL, '23-02-2024', '18:33', NULL, 'Bienvenue à Mavilla Tourisme, votre oasis de confort au cœur de Cotonou', 'swipercarousel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(17, 'images/upload/28_074456168893.jpeg', NULL, '', NULL, NULL, '', NULL, '22-02-2024', '21:28', NULL, '', 'gallery2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(18, 'images/upload/27_346286381001.jpeg', NULL, '', NULL, NULL, '', NULL, '22-02-2024', '21:27', NULL, '', 'gallery2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(19, 'images/upload/28_551735282870.jpeg', NULL, '', NULL, NULL, '', NULL, '22-02-2024', '21:28', NULL, '', 'gallery2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(20, 'images/upload/25_33522983981.jpeg', NULL, '', NULL, NULL, '', NULL, '22-02-2024', '21:25', NULL, '', 'gallery2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(21, 'images/upload/23_475682833846.jpeg', NULL, '', NULL, NULL, '', NULL, '22-02-2024', '21:23', NULL, '', 'gallery2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(22, 'images/upload/23_121757111175.jpeg', NULL, '', NULL, NULL, '', NULL, '22-02-2024', '21:23', NULL, '', 'gallery2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(23, 'images/upload/22_427172375579.jpeg', NULL, '', NULL, NULL, '', NULL, '22-02-2024', '21:22', NULL, '', 'gallery2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(24, 'images/upload/45_594090616027.jpg', NULL, '', NULL, NULL, '', NULL, '22-02-2024', '20:21', NULL, 'A PROPOS', 'breadcrumbs', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(25, '', NULL, '', NULL, NULL, '', NULL, '22-02-2024', '21:53', NULL, 'Pourquoi nous choisir', 'titre1', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(26, 'images/upload/52_181165542372.jpeg', NULL, '', NULL, NULL, '', NULL, '22-02-2024', '21:52', NULL, '', 'img1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(31, 'images/upload/01_148272345444.jpg', NULL, '<p style=\"text-align:center\">Happy Guests</p>\r\n', NULL, NULL, '', NULL, '18-02-2024', '18:01', NULL, '650', 'counter1', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(32, 'images/upload/20_04213086705.jpg', NULL, '', NULL, NULL, '', NULL, '18-02-2024', '18:20', NULL, '', 'bgcounter1', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(33, 'images/upload/53_145759313851.jpeg', NULL, '', NULL, NULL, '', NULL, '23-02-2024', '13:53', NULL, 'CHAMBRES', 'bgroom', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(34, 'images/upload/32_328663567337.jpg', NULL, '<pre style=\"text-align:justify\">\r\nLorem ipsum dolor sit amet, consectetur adipiscing\r\nelit, sed do eiusmod tempor incididunt ut labore \r\net dolore magna aliqua. Ut enim ad minim veniam</pre>\r\n', NULL, NULL, '', NULL, '23-02-2024', '06:29', NULL, 'double room (private)', 'ourrooms1', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(35, '', NULL, '', NULL, NULL, '', NULL, '21-02-2024', '11:29', NULL, 'Notre Galerie', 'masonry', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(38, 'images/upload/11_358899410497.jpg', NULL, '', NULL, NULL, '', NULL, '29-02-2024', '16:02', NULL, 'Detail Chambre', 'bgdoubleroom', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(39, 'images/upload/44_461577964899.jpg', NULL, '', NULL, NULL, '', NULL, '19-02-2024', '16:44', NULL, '', 'cardoubleroom', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(43, 'images/upload/46_333410732399.jpg', NULL, '', NULL, NULL, '', NULL, '19-02-2024', '16:46', NULL, '', 'cardoubleroom', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(44, 'images/upload/46_599725030017.jpg', NULL, '', NULL, NULL, '', NULL, '19-02-2024', '16:46', NULL, '', 'cardoubleroom', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(154, 'images/upload/53_581569152085.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '16:53', NULL, 'Triple Confort', 'bgtripleconfort', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 30000, NULL, '', '', ''),
(48, '', NULL, '<p><a href=\"mailto:#\">info@demolink.org</a></p>\r\n', NULL, NULL, '', NULL, '19-02-2024', '17:50', NULL, '+229 62 43 56 89', 'footerlinks', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(49, '', NULL, '<pre>\r\nSi vous avez des questions, remplissez simplement le formulaire de contact\r\net nous vous r&eacute;pondrons sous peu.</pre>\r\n', NULL, NULL, '', NULL, '23-02-2024', '13:01', NULL, 'Contactez-nous', 'contactform', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(83, '', NULL, '', NULL, NULL, '', NULL, '23-02-2024', '10:52', NULL, '', 'prix4', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 20000, NULL, '', '', ''),
(51, '', NULL, '<p><span style=\"color:null\">9FG3+8CR Akpakpa, Rue 1458, Cotonou</span></p>\r\n', NULL, NULL, '', NULL, '23-02-2024', '18:06', NULL, 'https://www.google.com/maps/place/H%C3%94TEL+MAVILLA+COTONOU+(Salle+Prestige)/@6.3758494,2.4536631,15z/data=!4m21!1m11!3m10!1s0x102355adaccfd86b:0x75feee21c758f664!2sH%C3%94TEL+MAVILLA+COTONOU+(Salle+Prestige)!5m2!4m1!1i2!8m2!3d6.3758338!4d2.4534716!10e1!16s%2Fg%2F11t2b34fnb!3m8!1s0x102355adaccfd86b:0x75feee21c758f664!5m2!4m1!1i2!8m2!3d6.3758338!4d2.4534716!16s%2Fg%2F11t2b34fnb?entry=ttu', 'infocontact2', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(55, 'images/upload/53_084677936282.jpg', NULL, '', NULL, NULL, '', NULL, '20-02-2024', '15:53', NULL, 'Clients', 'inscriptionclient', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(53, '', NULL, '', NULL, NULL, '', NULL, '18-03-2024', '16:13', NULL, 'hotelmavilla@yahoo.com', 'infocontact3', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(54, '', NULL, '', NULL, NULL, '', NULL, '18-03-2024', '16:13', NULL, '+229 97198300', 'infocontact1', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(56, '', NULL, '<p>Our hostel is located in the downtown and not too far from airport and bus station so it is quite easy to find us wherever you come from.</p>\r\n', NULL, NULL, '', NULL, '20-02-2024', '20:51', NULL, 'MAP & DIRECTIONS', 'serv1', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(57, 'images/upload/03_417885895252.jpeg', NULL, '', NULL, NULL, '', NULL, '24-02-2024', '07:13', NULL, 'Chambre 2', 'thumbnail2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(58, 'images/upload/08_417317460074.jpg', NULL, '', NULL, NULL, '', NULL, '26-02-2024', '11:08', NULL, 'Chambre 3', 'thumbnail3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(59, 'images/upload/06_474505214081.jpeg', NULL, '', NULL, NULL, '', NULL, '24-02-2024', '07:13', NULL, 'Chambre 4', 'thumbnail4', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(60, 'images/upload/51_231461040138.jpg', NULL, '', NULL, NULL, '', NULL, '26-02-2024', '10:51', NULL, 'Chambre 5', 'thumbnail5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(61, 'images/upload/17_24230638841.jpeg', NULL, '', NULL, NULL, '', NULL, '24-02-2024', '07:12', NULL, 'CHAMBRE 1', 'thumbnai1', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(62, '', NULL, '', NULL, NULL, '', NULL, '21-02-2024', '10:19', NULL, 'ROOM 6', 'thumbnail6', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(63, 'images/upload/46_32423930946.jpg', NULL, '', NULL, NULL, '', NULL, '26-02-2024', '10:46', NULL, 'Chambre 6', 'thumbnai6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(64, 'images/upload/37_466712332974.jpeg', NULL, '<p>Notre auberge a &eacute;t&eacute; fond&eacute;e pour offrir aux voyageurs &agrave; petit budget du monde entier un h&eacute;bergement abordable mais tr&egrave;s confortable dont ils pourraient profiter</p>\r\n', NULL, NULL, '', NULL, '23-02-2024', '17:15', NULL, 'Meilleur Hôtel de la ville', 'propos', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(94, '', NULL, '', NULL, NULL, '', NULL, '18-03-2024', '18:36', NULL, 'https://www.facebook.com/profile.php?id=61550567781007', 'faceicon1', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(173, '', NULL, '', NULL, NULL, '', NULL, '18-03-2024', '18:35', NULL, 'https://instagram.com/mavilla_hotel?igshid=MzRlODBiNWFlZA%3D%3D', 'instaicon1', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(66, '', NULL, '', NULL, NULL, '', NULL, '18-03-2024', '18:36', NULL, 'https://www.facebook.com/profile.php?id=61550567781007', 'facebookicon', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(67, 'images/upload/06_245776470545.jpg', NULL, '', NULL, NULL, '', NULL, '21-02-2024', '16:06', NULL, '', 'logo1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(68, '', NULL, '<p>05:00 <span style=\"font-size:12px\">am</span> - 09:00 <span style=\"font-size:12px\">pm</span></p>\r\n', NULL, NULL, '', NULL, '21-02-2024', '16:45', NULL, '', 'horaireouverture', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(69, '', NULL, '', NULL, NULL, '', NULL, '18-03-2024', '15:45', NULL, '+229 97198300', 'telephone1', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(70, 'images/upload/36_493431848427.jpg', NULL, '', NULL, NULL, '', NULL, '21-02-2024', '17:36', NULL, 'Contact', 'bgcontact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(71, '', NULL, '<p>9FG3+8CR Akpakpa, Rue 1458, Cotonou</p>\r\n', NULL, NULL, '', NULL, '23-02-2024', '18:05', NULL, 'https://www.google.com/maps/place/H%C3%94TEL+MAVILLA+COTONOU+(Salle+Prestige)/@6.3758338,2.4534716,15z/data=!4m2!3m1!1s0x0:0x75feee21c758f664?sa=X&ved=2ahUKEwiq3PjMlsGEAxXS_rsIHa81CeUQ_BJ6BAgQEAA', 'locationlink', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(72, '', NULL, '', NULL, NULL, '', NULL, '18-03-2024', '15:42', NULL, 'hotelmavilla@yahoo.com', 'emaillink', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(73, '', NULL, '', NULL, NULL, '', NULL, '18-03-2024', '15:40', NULL, '+229 97198300', 'phonelink', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(74, 'images/upload/57_512515501031.jpeg', NULL, '', NULL, NULL, '', NULL, '22-02-2024', '22:05', NULL, '', 'prix1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15000, NULL, '', '', ''),
(75, '', NULL, '', NULL, NULL, '', NULL, '23-02-2024', '06:32', NULL, '', 'prix2', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 90000, NULL, '', '', ''),
(84, 'images/upload/39_083342081426.jpeg', NULL, '', NULL, NULL, '', NULL, '23-02-2024', '11:39', NULL, '', 'galerieall', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(78, '', NULL, '', NULL, NULL, '', NULL, '23-02-2024', '06:34', NULL, '', 'prix3', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 40000, NULL, '', '', ''),
(172, 'images/upload/04_312909326141.jpg', NULL, '<p style=\"text-align:justify\">L&#39;H&ocirc;tel MaVilla incarne l&#39;excellence de l&#39;hospitalit&eacute;, offrant un m&eacute;lange parfait de confort, de services de qualit&eacute; et d&#39;une ambiance chaleureuse. Nich&eacute; au c&oelig;ur du B&eacute;nin, notre &eacute;tablissement vous invite &agrave; vivre une exp&eacute;rience unique o&ugrave; chaque moment devient un souvenir inoubliable</p>\r\n', NULL, NULL, '', NULL, '18-03-2024', '16:04', NULL, '', 'foot1', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(80, 'images/upload/14_414392224938.jpeg', NULL, '', NULL, NULL, '', NULL, '23-02-2024', '09:14', NULL, '', 'galerieall', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(81, 'images/upload/22_474257608388.jpeg', NULL, '', NULL, NULL, '', NULL, '23-02-2024', '09:22', NULL, 'Notre Galerie', 'breadcrumbs4', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(82, 'images/upload/27_572842508055.jpg', NULL, '', NULL, NULL, '', NULL, '23-02-2024', '09:27', NULL, 'Notre Equipe', 'breadcrumbs6', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(85, 'images/upload/40_264327272048.jpeg', NULL, '', NULL, NULL, '', NULL, '23-02-2024', '11:40', NULL, '', 'galerieall', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(86, 'images/upload/41_039561190740.jpeg', NULL, '', NULL, NULL, '', NULL, '23-02-2024', '11:41', NULL, '', 'galerieall', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(87, 'images/upload/41_36939116822.jpeg', NULL, '', NULL, NULL, '', NULL, '23-02-2024', '11:41', NULL, '', 'galerieall', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(88, 'images/upload/42_026499957269.jpeg', NULL, '', NULL, NULL, '', NULL, '23-02-2024', '11:42', NULL, '', 'galerieall', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(93, 'images/upload/14_163592832884.jpeg', NULL, '<p style=\"text-align:justify\">Sit a dediti uni huic ingeni facultas ingeni huic nos nos inter quadam a hoc inter penitus alia cognatione huic quoddam dediti ratio sit miretur habent ingeni dediti umquam cognatione artes hoc quadam hoc omnes ratio habent humanitatem artes quadam</p>\r\n', NULL, NULL, '', NULL, '23-02-2024', '17:14', NULL, 'Double Chambre', 'disproom1', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 15000, NULL, '', '', ''),
(89, '', NULL, '<p style=\"text-align:justify\">Notre emplacement central &agrave; Cotonou place Mavilla Tourisme au c&oelig;ur de l&#39;action, offrant aux voyageurs une accessibilit&eacute; optimale. Nich&eacute; dans un quartier paisible, notre h&ocirc;tel vous promet un refuge tranquille apr&egrave;s une journ&eacute;e bien remplie</p>\r\n', NULL, NULL, '', NULL, '23-02-2024', '16:49', NULL, 'Carte & Direction', 'hotserv1', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(90, '', NULL, '<p style=\"text-align:justify\">D&eacute;couvrez le raffinement &agrave; Mavilla Tourisme, o&ugrave; chaque s&eacute;jour devient une exp&eacute;rience exceptionnelle. De l&#39;&eacute;l&eacute;gance de nos chambres &agrave; la finesse de notre cuisine, nous vous offrons un service personnalis&eacute; pour un voyage inoubliable</p>\r\n', NULL, NULL, '', NULL, '23-02-2024', '16:54', NULL, 'services d\'hébergement', 'hotserv2', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(91, '', NULL, '<p style=\"text-align:justify\">Notre personnel, v&eacute;ritable pilier de l&#39;exp&eacute;rience Mavilla Tourisme, est d&eacute;di&eacute; &agrave; vous offrir un service attentif et courtois, faisant de chaque s&eacute;jour une exp&eacute;rience m&eacute;morable</p>\r\n', NULL, NULL, '', NULL, '23-02-2024', '16:57', NULL, 'belle expérience', 'hotserv3', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(92, '', NULL, '<p style=\"text-align:justify\">Nous sommes l&#39;une des auberges les plus populaires aupr&egrave;s des clients de notre ville</p>\r\n', NULL, NULL, '', NULL, '23-02-2024', '17:02', NULL, '', 'tabs2', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(103, 'images/upload/19_324927297370.jpg', NULL, '', NULL, NULL, '', NULL, '26-02-2024', '11:19', NULL, '', 'galerieall', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(97, 'images/upload/18_429549061942.jpg', NULL, '', NULL, NULL, '', NULL, '24-02-2024', '07:18', NULL, '', 'personnel', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(98, 'images/upload/19_136667046968.jpg', NULL, '', NULL, NULL, '', NULL, '24-02-2024', '07:19', NULL, '', 'personnel', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(100, 'images/upload/56_351911312537.jpeg', NULL, '', NULL, NULL, '', NULL, '26-02-2024', '09:56', NULL, '', 'galerieall', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(102, 'images/upload/04_505769268841.jpg', NULL, '', NULL, NULL, '', NULL, '26-02-2024', '10:04', NULL, '', 'galerieall', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(104, 'images/upload/25_162493331928.jpg', NULL, '', NULL, NULL, '', NULL, '26-02-2024', '11:25', NULL, '', 'galerieall', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(105, 'images/upload/25_443653291856.jpg', NULL, '', NULL, NULL, '', NULL, '26-02-2024', '11:25', NULL, '', 'galerieall', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(106, 'images/upload/26_131530350438.jpg', NULL, '', NULL, NULL, '', NULL, '26-02-2024', '11:26', NULL, '', 'galerieall', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(107, 'images/upload/26_482367512223.jpg', NULL, '', NULL, NULL, '', NULL, '26-02-2024', '11:26', NULL, '', 'galerieall', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(108, 'images/upload/27_18157640402.jpg', NULL, '', NULL, NULL, '', NULL, '26-02-2024', '11:27', NULL, '', 'galerieall', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(109, 'images/upload/29_578785518214.jpg', NULL, '', NULL, NULL, '', NULL, '26-02-2024', '11:29', NULL, '', 'galerieall', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(110, '', NULL, '<p style=\"text-align:justify\">Explorez l&#39;excellence &agrave; Mavilla Tourisme, o&ugrave; chaque s&eacute;jour devient une exp&eacute;rience inoubliable. Notre histoire est tiss&eacute;e de moments exceptionnels, alliant un service personnalis&eacute;, des h&eacute;bergements luxueux et une cuisine raffin&eacute;e. Plongez dans une atmosph&egrave;re o&ugrave; le bien-&ecirc;tre de nos h&ocirc;tes est au c&oelig;ur de notre engagement, faisant de chaque s&eacute;jour une aventure &agrave; savourer pleinement</p>\r\n', NULL, NULL, '', NULL, '26-02-2024', '12:36', NULL, '', 'texte1', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(111, '', NULL, '<p style=\"text-align:justify\">Notre mission est de cr&eacute;er des exp&eacute;riences h&ocirc;teli&egrave;res inoubliables en offrant un service exceptionnel, des h&eacute;bergements de qualit&eacute; et une hospitalit&eacute; chaleureuse. Nous nous engageons &agrave; surpasser les attentes de nos clients, en veillant &agrave; ce que chaque s&eacute;jour soit impr&eacute;gn&eacute; de confort et de raffinement. &Agrave; travers notre d&eacute;vouement envers l&#39;excellence, nous aspirons &agrave; &ecirc;tre la destination de choix, o&ugrave; chaque visiteur se sent accueilli, appr&eacute;ci&eacute; et inspir&eacute;</p>\r\n', NULL, NULL, '', NULL, '26-02-2024', '12:48', NULL, '', 'texte2', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(155, 'images/upload/54_387131815468.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '16:54', NULL, 'Triple Luxe', 'bgtripleluxe', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 75000, NULL, '', '', ''),
(156, 'images/upload/33_241063874937.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '17:33', NULL, 'Destination Cotonou', 'bgcotonou', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(153, 'images/upload/53_14297225320.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '16:53', NULL, 'Triple Classique', 'bgtripleclassique', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 25000, NULL, '', '', ''),
(152, 'images/upload/52_116087903702.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '16:52', NULL, 'Triple Standard', 'bgtriplestandard', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 50000, NULL, '', '', ''),
(151, '', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '16:16', NULL, '25000', 'tripleclassiqueprix', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(118, 'images/upload/30_462608537105.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '14:30', NULL, '', 'bgsallepoly', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(119, 'images/upload/32_375907837966.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '14:32', NULL, '', 'bgsallepoly', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(120, 'images/upload/39_036185896878.jpg', NULL, '<p style=\"text-align:justify\">D&eacute;couvrez le confort ultime dans nos chambres triples standard &agrave; l&#39;H&ocirc;tel Mavilla. Parfaites pour les groupes d&#39;amis ou les familles, ces chambres spacieuses offrent tout le n&eacute;cessaire pour un s&eacute;jour m&eacute;morable</p>\r\n', NULL, NULL, '', NULL, '01-03-2024', '13:43', NULL, 'Triple Standard', 'triplestandard', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 50000, NULL, '', '', ''),
(121, 'images/upload/44_282578747840.jpg', NULL, '<p style=\"text-align:justify\">Plongez dans le charme de nos chambres triples standard &agrave; l&#39;H&ocirc;tel Mavilla. Avec des am&eacute;nagements soigneusement s&eacute;lectionn&eacute;s, ces chambres offrent un espace confortable et &eacute;l&eacute;gant pour votre s&eacute;jour</p>\r\n', NULL, NULL, '', NULL, '01-03-2024', '13:44', NULL, 'Triple Standard', 'triplestandard', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 50000, NULL, '', '', ''),
(122, 'images/upload/45_26990462380.jpg', NULL, '<p style=\"text-align:justify\">Profitez du luxe et du style dans nos chambres triples standard &agrave; l&#39;H&ocirc;tel Mavilla. Les int&eacute;rieurs &eacute;l&eacute;gants et les &eacute;quipements modernes vous assurent un s&eacute;jour agr&eacute;able et inoubliable</p>\r\n', NULL, NULL, '', NULL, '01-03-2024', '13:45', NULL, 'Triple Standard', 'triplestandard', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 50000, NULL, '', '', ''),
(123, 'images/upload/46_143903949997.jpg', NULL, '<p style=\"text-align:justify\">Nos chambres triples standard &agrave; l&#39;H&ocirc;tel Mavilla sont con&ccedil;ues pour offrir un espace g&eacute;n&eacute;reux &agrave; tous les occupants. Id&eacute;ales pour les groupes ou les familles, ces chambres offrent une exp&eacute;rience d&#39;h&eacute;bergement spacieuse et confortable</p>\r\n', NULL, NULL, '', NULL, '01-03-2024', '13:46', NULL, 'Triple Standard', 'triplestandard', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 50000, NULL, '', '', ''),
(124, 'images/upload/47_112238021442.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '13:47', NULL, 'Triple Classique', 'tripleclassique', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 25000, NULL, '', '', ''),
(125, 'images/upload/47_265761876022.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '13:47', NULL, 'Triple Classique', 'tripleclassique', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 25000, NULL, '', '', ''),
(126, 'images/upload/47_459525885740.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '13:47', NULL, 'Triple Classique', 'tripleclassique', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 25000, NULL, '', '', ''),
(127, 'images/upload/48_018604270516.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '13:48', NULL, 'Triple Classique', 'tripleclassique', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 25000, NULL, '', '', ''),
(128, 'images/upload/48_257831628351.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '13:48', NULL, 'Triple Classique', 'tripleclassique', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 25000, NULL, '', '', ''),
(129, 'images/upload/48_448779317496.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '13:48', NULL, 'Triple Classique', 'tripleclassique', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 25000, NULL, '', '', ''),
(130, 'images/upload/49_08405134576.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '13:49', NULL, 'Triple Classique', 'tripleclassique', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 25000, NULL, '', '', ''),
(131, 'images/upload/49_504396700934.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '13:49', NULL, 'Triple Classique', 'tripleclassique', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 25000, NULL, '', '', ''),
(132, 'images/upload/51_037353997666.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '13:51', NULL, 'Triple Confort', 'tripleconfort', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 30000, NULL, '', '', ''),
(133, 'images/upload/51_326546332701.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '13:51', NULL, 'Triple Confort', 'tripleconfort', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 30000, NULL, '', '', ''),
(134, 'images/upload/51_538256312988.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '13:51', NULL, 'Triple Confort', 'tripleconfort', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 30000, NULL, '', '', ''),
(135, 'images/upload/52_186346255312.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '13:52', NULL, 'Triple Confort', 'tripleconfort', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 30000, NULL, '', '', ''),
(136, 'images/upload/56_58877659428.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '13:56', NULL, 'Triple Confort', 'tripleconfort', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 30000, NULL, '', '', ''),
(137, 'images/upload/58_00539963523.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '13:58', NULL, 'Triple Confort', 'tripleconfort', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 30000, NULL, '', '', ''),
(138, 'images/upload/58_225392687902.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '13:58', NULL, 'Triple Confort', 'tripleconfort', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 30000, NULL, '', '', ''),
(139, 'images/upload/58_431162233922.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '13:58', NULL, 'Triple Confort', 'tripleconfort', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 30000, NULL, '', '', ''),
(140, 'images/upload/59_277326862620.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '13:59', NULL, 'Triple Luxe', 'tripleluxe', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 75000, NULL, '', '', ''),
(141, 'images/upload/59_508601917404.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '13:59', NULL, 'Triple Luxe', 'tripleluxe', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 75000, NULL, '', '', ''),
(142, 'images/upload/00_094680716577.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '14:00', NULL, 'Triple Luxe', 'tripleluxe', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 75000, NULL, '', '', ''),
(143, 'images/upload/00_32220554739.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '14:00', NULL, 'Triple Luxe', 'tripleluxe', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 75000, NULL, '', '', ''),
(144, 'images/upload/00_584878847601.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '14:00', NULL, 'Triple Luxe', 'tripleluxe', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 75000, NULL, '', '', ''),
(145, 'images/upload/01_501437700712.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '14:01', NULL, 'Triple Luxe', 'tripleluxe', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 75000, NULL, '', '', ''),
(146, 'images/upload/31_05600806242.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '14:31', NULL, '', 'bgsallepoly', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(147, 'images/upload/31_261833524233.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '14:31', NULL, '', 'bgsallepoly', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(148, 'images/upload/32_168954495502.jpg', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '14:32', NULL, '', 'bgsallepoly', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(149, 'images/upload/23_364995724753.png', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '15:23', NULL, 'Tourisme', 'bgtourisme', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(150, '', NULL, '', NULL, NULL, '', NULL, '01-03-2024', '15:37', NULL, '50000', 'triplestandardprix', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 30000, NULL, '', '', ''),
(157, 'images/upload/57_017384674106.jpg', NULL, '<p style=\"text-align:justify\">Plongez dans l&#39;h&eacute;ritage glorieux des Amazones &agrave; travers la majestueuse Statue de l&#39;Amazone &agrave; Cotonou. T&eacute;moin vivant de l&#39;h&eacute;ro&iuml;sme f&eacute;minin, cette &oelig;uvre &eacute;blouissante se dresse fi&egrave;rement dans un cadre qui r&eacute;sonne avec la force et la bravoure l&eacute;gendaires des Amazones du Dahomey. Chaque d&eacute;tail sculpt&eacute; &eacute;voque l&#39;esprit intr&eacute;pide de ces guerri&egrave;res exceptionnelles, offrant aux visiteurs une immersion fascinante dans l&#39;histoire et la culture captivante du B&eacute;nin.</p>\r\n', NULL, NULL, '', NULL, '01-03-2024', '17:59', NULL, 'La Vaillante Amazone : Symbole d\'Éternelle Bravoure', 'sitestouristiques', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(158, 'images/upload/12_508507923971.jpg', NULL, '<p style=\"text-align:justify\">La Statue Bio Guerra se dresse comme une &eacute;clatante &oelig;uvre d&#39;art, immortalisant la force et la d&eacute;termination l&eacute;gendaires de Bio Guerra dans un ballet sculptural de lignes et de formes. Chaque courbe, chaque d&eacute;tail, chante l&#39;h&eacute;ritage puissant de ce leader exceptionnel, capturant l&#39;essence m&ecirc;me de son engagement indomptable envers la libert&eacute;.Plac&eacute;e dans un lieu empreint de solennit&eacute;, la Statue Bio Guerra devient bien plus qu&#39;une sculpture. Elle devient un symbole vibrant, une conversation fig&eacute;e dans le marbre, et une invitation &agrave; m&eacute;diter sur la force intemporelle d&#39;un homme dont la vie a laiss&eacute; une empreinte ind&eacute;l&eacute;bile sur l&#39;histoire.</p>\r\n', NULL, NULL, '', NULL, '01-03-2024', '18:16', NULL, 'Bio Guerra : Éclat Immortel de la Résilience et de l\'Héritage', 'sitestouristiques', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(159, 'images/upload/05_051084140166.jpg', NULL, '', NULL, NULL, '', NULL, '04-03-2024', '10:05', NULL, 'Destination Ouidah', 'bgouidah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(160, 'images/upload/07_322136263746.jpg', NULL, '', NULL, NULL, '', NULL, '04-03-2024', '10:07', NULL, 'Destination Ganvié', 'bgganvie', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(161, 'images/upload/15_311257644035.jpg', NULL, '', NULL, NULL, '', NULL, '04-03-2024', '10:15', NULL, 'Destination Porto-Novo', 'bgporto', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(162, 'images/upload/32_247262991853.jpg', NULL, '', NULL, NULL, '', NULL, '04-03-2024', '10:32', NULL, 'Destination Abomey-Calavi', 'bgabomey', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(163, 'images/upload/25_067951363466.jpg', NULL, '<p style=\"text-align:justify\">La statue grandiose de Toffa Ier, sculpt&eacute;e avec une pr&eacute;cision artistique, &eacute;voque la pr&eacute;sence imp&eacute;riale et la sagesse du fondateur du Dahomey. Les traits r&eacute;alistes captent l&#39;intensit&eacute; de son r&egrave;gne, tandis que la posture majestueuse refl&egrave;te son leadership &eacute;clair&eacute;. Cette &oelig;uvre monumentale, au-del&agrave; de son esth&eacute;tisme, symbolise la p&eacute;rennit&eacute; d&#39;une &egrave;re glorieuse et la grandeur d&#39;un souverain dont l&#39;h&eacute;ritage continue d&#39;illuminer notre histoire</p>\r\n', NULL, NULL, '', NULL, '04-03-2024', '10:25', NULL, 'Roi Toffa Ier : Monarque Immortel, Gardien de l\'Histoire et de la Grandeur', 'sitestouristiquesporto', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(164, 'images/upload/47_588231001556.jpg', NULL, '<p style=\"text-align:justify\">La statue majestueuse de B&eacute;hanzin, &eacute;rig&eacute;e avec une ma&icirc;trise artistique exceptionnelle, refl&egrave;te la dignit&eacute; et la r&eacute;silience du dernier roi du Dahomey. Chaque contour, chaque expression, raconte l&#39;histoire puissante d&#39;un leader intr&eacute;pide. Les d&eacute;tails soigneusement sculpt&eacute;s &eacute;voquent la noblesse et la force qui ont d&eacute;fini son r&egrave;gne, immortalisant son h&eacute;ritage dans le marbre pour inspirer les g&eacute;n&eacute;rations &agrave; venir</p>\r\n', NULL, NULL, '', NULL, '04-03-2024', '10:47', NULL, 'Behanzin, Gardien des Traditions : Statue Impériale Capturant la Noblesse et la Force', 'sitestouristiquesabomey', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(165, 'images/upload/53_323317643470.jpg', NULL, '<p style=\"text-align:justify\">Nich&eacute; au c&oelig;ur des eaux paisibles du lac Nokou&eacute;, le village lacustre de Ganvi&eacute; se pr&eacute;sente comme un tableau vivant d&#39;authenticit&eacute; et de s&eacute;r&eacute;nit&eacute;. Sur ses pilotis, les habitations color&eacute;es s&#39;&eacute;tendent harmonieusement, refl&eacute;tant la riche histoire culturelle des habitants. Les ruelles aquatiques, anim&eacute;es par le va-et-vient des pirogues, tissent un r&eacute;seau d&#39;&eacute;changes vibrants, faisant de Ganvi&eacute; un lieu exceptionnel o&ugrave; la tradition et la vie lacustre se conjuguent avec une beaut&eacute; intemporelle</p>\r\n', NULL, NULL, '', NULL, '04-03-2024', '10:53', NULL, 'Ganvié, Cité des Eaux : Un Paradis Lacustre où Tradition et Harmonie se Rencontre', 'sitestouristiquesganvie', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(166, 'images/upload/57_133974159481.jpg', NULL, '<p style=\"text-align:justify\">La Porte du Non-Retour, situ&eacute;e &agrave; Ouidah, est bien plus qu&#39;un simple monument. Elle incarne la m&eacute;moire douloureuse de si&egrave;cles d&#39;esclavage. Imposante et sobre, cette structure historique a &eacute;t&eacute; le point de d&eacute;part forc&eacute; de millions d&#39;&acirc;mes vers les Am&eacute;riques. Les murs de pierre &eacute;voquent le silence et la r&eacute;silience de ceux qui ont travers&eacute; ses portes, faisant de cet endroit un lieu empreint de tristesse, de m&eacute;moire et de comm&eacute;moration. La Porte du Non-Retour demeure un rappel &eacute;motionnel de l&#39;impact humain de l&#39;esclavage, invitant les visiteurs &agrave; r&eacute;fl&eacute;chir profond&eacute;ment sur le pass&eacute; tout en honorant la r&eacute;silience humaine face &agrave; l&#39;adversit&eacute;</p>\r\n', NULL, NULL, '', NULL, '18-03-2024', '14:41', NULL, 'Porte du Non-Retour : Témoin Silencieux des Chapitres douloureux de l\'Histoire', 'sitestouristiquesouidah', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(167, '', NULL, '', NULL, NULL, '', NULL, '04-03-2024', '12:09', NULL, '30000', 'tripleconfortprix', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(168, '', NULL, '', NULL, NULL, '', NULL, '04-03-2024', '13:45', NULL, '75000', 'tripleluxeprix', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(169, 'images/upload/50_598907683736.jpg', NULL, '', NULL, NULL, '', NULL, '06-03-2024', '15:50', NULL, 'Triple Confort', 'tripleconfort', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 30000, NULL, '', '', ''),
(170, 'images/upload/52_366584415960.jpg', NULL, '', NULL, NULL, '', NULL, '06-03-2024', '15:52', NULL, 'Triple Confort', 'tripleconfort', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 30000, NULL, '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `identification`
--

CREATE TABLE `identification` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `mpasse` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `identification`
--

INSERT INTO `identification` (`id`, `login`, `mpasse`, `email`) VALUES
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', '');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `categoriechambre` varchar(255) NOT NULL,
  `dateentree` date NOT NULL,
  `datesortie` date NOT NULL,
  `nbrenuites` int(11) NOT NULL,
  `nbrepersonne` int(11) NOT NULL,
  `tel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `categoriechambre`, `dateentree`, `datesortie`, `nbrenuites`, `nbrepersonne`, `tel`) VALUES
(1, 'Triple Classique', '2024-05-31', '2024-05-09', 1, 3, '547896321'),
(2, 'Triple Classique', '2024-05-25', '2024-05-09', 2, 4, '2456389'),
(3, 'Triple Classique', '2024-05-03', '2024-05-31', 1, 3, '54632198');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `groupe_page`
--
ALTER TABLE `groupe_page`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `identification`
--
ALTER TABLE `identification`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `groupe_page`
--
ALTER TABLE `groupe_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT pour la table `identification`
--
ALTER TABLE `identification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Base de données : `tresor`
--
CREATE DATABASE IF NOT EXISTS `tresor` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tresor`;

-- --------------------------------------------------------

--
-- Structure de la table `artiste`
--

CREATE TABLE `artiste` (
  `idArtiste` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `artiste`
--

INSERT INTO `artiste` (`idArtiste`, `nom`, `prenom`, `telephone`) VALUES
(1, 'TOKOUDAGBA', 'Cyprien', '65231478'),
(2, 'PEDE', 'Apollinaire', '56231497');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `idCategorie` int(11) NOT NULL,
  `nomCategorie` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idCategorie`, `nomCategorie`) VALUES
(1, 'Trésors royaux'),
(2, 'Arts contemporains');

-- --------------------------------------------------------

--
-- Structure de la table `oeuvre`
--

CREATE TABLE `oeuvre` (
  `idOeuvre` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `annee` year(4) DEFAULT NULL,
  `idCategorie` int(11) DEFAULT NULL,
  `idArtiste` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `oeuvre`
--

INSERT INTO `oeuvre` (`idOeuvre`, `nom`, `description`, `annee`, `idCategorie`, `idArtiste`) VALUES
(1, 'Trone d\'apparat du Roi GHEZO', 'C\'est le trone du ROI GHEZO', '0000', 1, NULL),
(2, 'Ekèlodjouoti', 'Un oeuvre de qualité.', '2018', 2, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `artiste`
--
ALTER TABLE `artiste`
  ADD PRIMARY KEY (`idArtiste`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idCategorie`);

--
-- Index pour la table `oeuvre`
--
ALTER TABLE `oeuvre`
  ADD PRIMARY KEY (`idOeuvre`),
  ADD KEY `idArtiste` (`idArtiste`),
  ADD KEY `idCategorie` (`idCategorie`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `artiste`
--
ALTER TABLE `artiste`
  MODIFY `idArtiste` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `oeuvre`
--
ALTER TABLE `oeuvre`
  MODIFY `idOeuvre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `oeuvre`
--
ALTER TABLE `oeuvre`
  ADD CONSTRAINT `oeuvre_ibfk_1` FOREIGN KEY (`idArtiste`) REFERENCES `artiste` (`idArtiste`),
  ADD CONSTRAINT `oeuvre_ibfk_2` FOREIGN KEY (`idCategorie`) REFERENCES `categorie` (`idCategorie`);
--
-- Base de données : `userdata`
--
CREATE DATABASE IF NOT EXISTS `userdata` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `userdata`;

-- --------------------------------------------------------

--
-- Structure de la table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `mobile`, `photo`) VALUES
(1, 'Paul', 'paul@gmail.com', '2568972354', '35c7973f349d2daccb563de08d9d8e16.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Base de données : `yaba_bd`
--
CREATE DATABASE IF NOT EXISTS `yaba_bd` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `yaba_bd`;

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `texte` varchar(255) NOT NULL,
  `note` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `groupe_page`
--

CREATE TABLE `groupe_page` (
  `id` int(11) NOT NULL,
  `file` text DEFAULT NULL,
  `desfile` text DEFAULT NULL,
  `texte` text DEFAULT NULL,
  `cat` int(11) DEFAULT NULL,
  `langue` varchar(10) DEFAULT NULL,
  `lien` text DEFAULT NULL,
  `vue` varchar(20) DEFAULT NULL,
  `date` varchar(10) DEFAULT NULL,
  `heure` varchar(5) DEFAULT NULL,
  `pays` varchar(200) DEFAULT NULL,
  `titre` text DEFAULT NULL,
  `emplacement` varchar(50) DEFAULT NULL,
  `lienogiciel` text DEFAULT NULL,
  `clelogiciel` text DEFAULT NULL,
  `image2` text DEFAULT NULL,
  `image3` text DEFAULT NULL,
  `image4` text DEFAULT NULL,
  `ville` varchar(30) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `alav` varchar(30) DEFAULT NULL,
  `prix` int(11) DEFAULT NULL,
  `deja` int(11) DEFAULT NULL,
  `metatitre` text DEFAULT NULL,
  `metamotcle` text DEFAULT NULL,
  `emailcontact` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `groupe_page`
--

INSERT INTO `groupe_page` (`id`, `file`, `desfile`, `texte`, `cat`, `langue`, `lien`, `vue`, `date`, `heure`, `pays`, `titre`, `emplacement`, `lienogiciel`, `clelogiciel`, `image2`, `image3`, `image4`, `ville`, `type`, `alav`, `prix`, `deja`, `metatitre`, `metamotcle`, `emailcontact`) VALUES
(1, 'images/upload/56_562321257536.jpeg', NULL, '', NULL, NULL, '', NULL, '23-04-2024', '10:56', NULL, '', 'logo1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(2, '', NULL, '', NULL, NULL, '', NULL, '13-05-2024', '13:59', NULL, 'contact@yabainternational.com', 'email', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(3, '', NULL, '', NULL, NULL, '', NULL, '10-05-2024', '12:49', NULL, '+2250757697161', 'contact', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(88, '', NULL, '', NULL, NULL, '', NULL, '13-05-2024', '13:59', NULL, 'contact@yabainternational.com', 'emaillink', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(5, '', NULL, '', NULL, NULL, '', NULL, '10-05-2024', '12:51', NULL, '+2250757697161', 'phoneicon', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(6, 'images/upload/41_245725056425.png', NULL, '<p style=\"text-align:justify\">D&eacute;passant les fronti&egrave;res de l&#39;innovation, Yaba International s&#39;engage &agrave; offrir une excellence in&eacute;gal&eacute;e, soutenue par une passion pour le progr&egrave;s mondial</p>\r\n', NULL, NULL, '', NULL, '25-04-2024', '18:18', NULL, '', 'foot1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(7, '', NULL, '', NULL, NULL, '', NULL, '23-04-2024', '13:53', NULL, 'https://www.facebook.com', 'facebookicon', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(8, '', NULL, '', NULL, NULL, '', NULL, '23-04-2024', '13:54', NULL, 'https://www.twitter.com', 'twittericon', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(9, '', NULL, '', NULL, NULL, '', NULL, '23-04-2024', '13:54', NULL, 'https://www.instagram.com', 'instagramicon', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(10, '', NULL, '', NULL, NULL, '', NULL, '23-04-2024', '13:55', NULL, 'https://www.whatsapp.com', 'whatsappicon', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(11, '', NULL, '<p style=\"text-align:justify\">Lorem elementum Sed congue nisl dolorSed congue nisl dolor Lorem elementum Sed congue nisl dolorSed.</p>\r\n', NULL, NULL, '', NULL, '23-04-2024', '14:06', NULL, 'Article populaire', 'section1', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(12, '', NULL, '<p style=\"text-align:justify\">D&eacute;couvrez nos cat&eacute;gories phares regroupant les produits les plus populaires et les mieux not&eacute;s par nos clients. Trouvez facilement ce que vous cherchez et explorez nos s&eacute;lections tendance d&egrave;s aujourd&#39;hui !</p>\r\n', NULL, NULL, '', NULL, '24-04-2024', '18:27', NULL, 'Top Categories', 'section2', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(13, 'images/upload/51_393649252882.jpg', NULL, '<p>2500 $</p>\r\n', NULL, NULL, '', NULL, '23-04-2024', '14:51', NULL, 'Produit 1', 'section3', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(14, 'images/upload/52_409538259164.jpg', NULL, '<p>45 $</p>\r\n', NULL, NULL, '', NULL, '23-04-2024', '14:52', NULL, 'Produit 2', 'section3', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(15, 'images/upload/55_385435922342.jpg', NULL, '<p>5000 $</p>\r\n', NULL, NULL, '', NULL, '23-04-2024', '14:55', NULL, 'Produit 3', 'section3', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(16, 'images/upload/12_318231342640.jpg', NULL, '<p>85 $</p>\r\n', NULL, NULL, '', NULL, '23-04-2024', '15:12', NULL, 'Produit 4', 'section3', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(17, '', NULL, '<p style=\"text-align:justify\">Explorez notre Big Market, un univers en ligne regorgeant d&#39;articles de toutes sortes, o&ugrave; chaque visite promet une d&eacute;couverte passionnante et une exp&eacute;rience d&#39;achat exceptionnelle</p>\r\n', NULL, NULL, '', NULL, '25-04-2024', '14:11', NULL, 'Articles', 'section4', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(18, '', NULL, '<p style=\"text-align:justify\">Profitez de notre offre de livraison gratuite sur tous les produits ! Faites-vous plaisir sans frais suppl&eacute;mentaires et recevez vos achats directement &agrave; votre porte, sans minimum d&#39;achat requis.</p>\r\n', NULL, NULL, '', NULL, '24-04-2024', '18:04', NULL, 'Livraison Gratuite', 'section5-1', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(19, '', NULL, '<p style=\"text-align:justify\">Assistance 24h/24, 7j/7 : toujours l&agrave; pour vous. Contactez-nous &agrave; tout moment pour obtenir de l&#39;aide et des r&eacute;ponses rapides, sans interruption. Votre satisfaction est notre priorit&eacute; absolue.</p>\r\n', NULL, NULL, '', NULL, '24-04-2024', '18:07', NULL, 'Assistance 24h/24 et 7j/7', 'section5-2', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(20, '', NULL, '<p style=\"text-align:justify\">Paiement s&eacute;curis&eacute; en continu : Nous utilisons des technologies avanc&eacute;es pour prot&eacute;ger vos transactions &agrave; tout moment. Faites vos achats en toute confiance, sans souci de s&eacute;curit&eacute;</p>\r\n', NULL, NULL, '', NULL, '24-04-2024', '18:12', NULL, ' Paiement Sécurisé', 'section5-3', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(21, 'images/upload/03_327491934545.png', NULL, '<p style=\"text-align:justify\">D&eacute;couvrez d&egrave;s &agrave; pr&eacute;sent notre offre sp&eacute;ciale sur notre site en ligne, o&ugrave; une s&eacute;lection de produits est propos&eacute;e &agrave; des prix r&eacute;duits incroyables, vous permettant ainsi de r&eacute;aliser des &eacute;conomies substantielles tout en vous offrant la qualit&eacute; que vous m&eacute;ritez. Ne manquez pas cette opportunit&eacute; de faire de bonnes affaires et de vous faire plaisir sans vous ruiner !</p>\r\n', NULL, NULL, '', NULL, '24-04-2024', '16:40', NULL, 'Obtenez 30% de réduction', 'section6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(22, 'images/upload/52_244136538751.png', NULL, '<p style=\"text-align:justify\">D&eacute;couvrez d&egrave;s &agrave; pr&eacute;sent notre offre sp&eacute;ciale sur notre site en ligne, o&ugrave; une s&eacute;lection de produits est propos&eacute;e &agrave; des prix r&eacute;duits incroyables, vous permettant ainsi de r&eacute;aliser des &eacute;conomies substantielles tout en vous offrant la qualit&eacute; que vous m&eacute;ritez. Ne manquez pas cette opportunit&eacute; de faire de bonnes affaires et de vous faire plaisir sans vous ruiner !</p>\r\n', NULL, NULL, '', NULL, '24-04-2024', '16:48', NULL, 'Obtenez 30% de réduction', 'section9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(23, 'images/upload/33_035768152565.jpg', NULL, '<p style=\"text-align:justify\">Il semble que vous ayez atteint une impasse. Pas de panique ! Notre &eacute;quipe travaille sans rel&acirc;che pour r&eacute;soudre ce probl&egrave;me. En attendant, pourquoi ne pas explorer nos autres pages ? Nous vous promettons que votre prochaine destination sera une exp&eacute;rience sans faille.</p>\r\n', NULL, NULL, '', NULL, '03-05-2024', '14:30', NULL, 'Oups ! Page Introuvable', 'section11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(24, 'images/upload/50_531080617814.jpg', NULL, '', NULL, NULL, '', NULL, '07-05-2024', '10:15', NULL, 'Une Gamme de Services Sur Mesure pour Vous', 'section12', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(25, 'images/upload/58_099845084726.jpg', NULL, '<p style=\"text-align:justify\"><span style=\"color:#f39c12\"><span style=\"font-size:22px\">Passez de la d&eacute;couverte des produits &agrave; l&#39;exp&eacute;rience de nos services personnalis&eacute;s en un seul clic!</span></span></p>\r\n', NULL, NULL, '', NULL, '30-04-2024', '14:51', NULL, '', 'section13', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(26, 'images/upload/56_029016264816.jpeg', NULL, '', NULL, NULL, '', NULL, '24-04-2024', '11:55', NULL, '', 'logo2', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(27, 'images/upload/15_441540312517.jpg', NULL, '<p style=\"text-align:justify\">Explorez les opportunit&eacute;s infinies avec Yaba International, o&ugrave; l&#39;innovation rencontre l&#39;excellence &agrave; l&#39;&eacute;chelle mondiale.</p>\r\n', NULL, NULL, '', NULL, '02-05-2024', '13:28', NULL, 'Yaba International : Votre Partenaire Mondial pour l\'Innovation', 'section26', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(28, 'images/upload/37_525766183827.png', NULL, '', NULL, NULL, '', NULL, '24-04-2024', '13:37', NULL, 'Obtenez 30% de réduction', 'section27', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(29, '', NULL, '<p style=\"text-align:justify\">Explorez nos offres promotionnelles vari&eacute;es et avantageuses, con&ccedil;ues pour r&eacute;pondre &agrave; vos besoins tout en vous offrant des &eacute;conomies substantielles et une valeur ajout&eacute;e in&eacute;gal&eacute;e.</p>\r\n', NULL, NULL, '', NULL, '13-05-2024', '13:47', NULL, 'Nos offres promotionnelles', 'section35', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(30, '', NULL, '<p style=\"text-align:justify\">D&eacute;couvrez nos services vari&eacute;s et personnalis&eacute;s, con&ccedil;us pour r&eacute;pondre &agrave; vos besoins sp&eacute;cifiques et vous offrir une exp&eacute;rience unique et satisfaisante &agrave; chaque &eacute;tape de votre parcours avec nous.</p>\r\n', NULL, NULL, '', NULL, '25-04-2024', '14:18', NULL, 'Nos Services', 'section42', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(31, '', NULL, '', NULL, NULL, '', NULL, '25-04-2024', '18:24', NULL, 'Prenez Contact avec Yaba International pour Transformer vos Idées en Réalité', 'section8', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(33, 'images/upload/13_193537356644.jpg', NULL, '<p style=\"text-align:justify\">D&eacute;couvrez notre derni&egrave;re gamme d&#39;ordinateurs sur Big Market ! De la performance &eacute;poustouflante &agrave; un design &eacute;l&eacute;gant, ces nouveaux ordinateurs sont con&ccedil;us pour r&eacute;pondre &agrave; tous vos besoins num&eacute;riques. Explorez d&egrave;s maintenant pour trouver l&#39;ordinateur parfait pour vous!</p>\r\n', NULL, NULL, '', NULL, '30-04-2024', '16:33', NULL, 'Nouveaux Articles: Qualité et Style Réunis!', 'actualites', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(34, 'images/upload/14_328459045711.jpg', NULL, '<p style=\"text-align:justify\">D&eacute;couvrez notre derni&egrave;re gamme d&#39;ordinateurs sur Big Market ! De la performance &eacute;poustouflante &agrave; un design &eacute;l&eacute;gant, ces nouveaux ordinateurs sont con&ccedil;us pour r&eacute;pondre &agrave; tous vos besoins num&eacute;riques. Explorez d&egrave;s maintenant pour trouver l&#39;ordinateur parfait pour vous!</p>\r\n', NULL, NULL, '', NULL, '30-04-2024', '16:33', NULL, 'Nouveaux Articles: Qualité et Style Réunis!', 'actualites', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(35, 'images/upload/15_416958813664.jpg', NULL, '<p style=\"text-align:justify\">D&eacute;couvrez notre derni&egrave;re gamme d&#39;ordinateurs sur Big Market ! De la performance &eacute;poustouflante &agrave; un design &eacute;l&eacute;gant, ces nouveaux ordinateurs sont con&ccedil;us pour r&eacute;pondre &agrave; tous vos besoins num&eacute;riques. Explorez d&egrave;s maintenant pour trouver l&#39;ordinateur parfait pour vous!</p>\r\n', NULL, NULL, '', NULL, '30-04-2024', '16:32', NULL, 'Nouveaux Articles: Qualité et Style Réunis!', 'actualites', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(36, 'images/upload/56_108775278722.jpg', NULL, '<p>Collaboration &eacute;troite pour des solutions sur-mesure et une conformit&eacute; optimale</p>\r\n', NULL, NULL, '', NULL, '29-04-2024', '17:34', NULL, 'Consulting Juridique et Fiscale : Des Solutions Sur-Mesure pour Vos Besoins', 'consulting', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(37, 'images/upload/57_084725728516.jpg', NULL, '<p style=\"text-align:justify\">Maximisez vos avantages gr&acirc;ce &agrave; notre approche int&eacute;gr&eacute;e en strat&eacute;gies juridiques et fiscales</p>\r\n', NULL, NULL, '', NULL, '29-04-2024', '17:34', NULL, 'Optimisation Juridique et Fiscale : Maximisez Vos Avantages', 'consulting', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(38, 'images/upload/58_033207110383.jpg', NULL, '<p style=\"text-align:justify\">Naviguez avec assurance gr&acirc;ce &agrave; nos experts en strat&eacute;gies juridiques et fiscales</p>\r\n', NULL, NULL, '', NULL, '29-04-2024', '17:34', NULL, 'Stratégies Juridiques et Fiscales : Nos Experts à Votre Service', 'consulting', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(39, 'images/upload/50_212385182586.jpg', NULL, '<p style=\"text-align:justify\">Leader dans le consulting, notre soci&eacute;t&eacute; se d&eacute;marque par son engagement envers l&#39;excellence, son innovation constante et son approche centr&eacute;e sur le client. Avec une &eacute;quipe experte et une exp&eacute;rience diversifi&eacute;e, nous offrons des solutions de qualit&eacute;, des conseils strat&eacute;giques et des r&eacute;sultats exceptionnels, d&eacute;passant ainsi les attentes de nos clients.</p>\r\n', NULL, NULL, '', NULL, '29-04-2024', '17:50', NULL, 'Excellence en Consulting : Votre Partenaire d\'Innovation', 'aboutconsulting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(40, 'images/upload/11_558456280242.jpg', NULL, '<p style=\"text-align:justify\">Nous offrons un service de consulting juridique complet, fournissant des conseils pr&eacute;cis et strat&eacute;giques pour r&eacute;pondre &agrave; vos besoins l&eacute;gaux, prot&eacute;ger vos int&eacute;r&ecirc;ts et assurer la conformit&eacute; de vos activit&eacute;s avec les r&eacute;glementations en vigueur.</p>\r\n', NULL, NULL, '', NULL, '29-04-2024', '17:11', NULL, 'Consulting Juridique', 'consultingservices', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(41, '', NULL, '', NULL, NULL, '', NULL, '29-04-2024', '12:53', NULL, '1 Grafton Street, Dublin, Ireland University.', 'adr', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(42, '', NULL, '', NULL, NULL, '', NULL, '10-05-2024', '12:51', NULL, '+2250757697161', 'tel', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(43, '', NULL, '', NULL, NULL, '', NULL, '13-05-2024', '14:00', NULL, 'contact@yabainternational.com', 'mail', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(44, 'images/upload/11_466128819561.jpg', NULL, '', NULL, NULL, '', NULL, '29-04-2024', '13:12', NULL, 'Découvrez Notre Univers Cinématographique', 'cinema', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(45, 'images/upload/26_30851825107.jpg', NULL, '', NULL, NULL, '', NULL, '29-04-2024', '13:26', NULL, 'Explorez l\'Art du Cinéma avec YABA Cinema', 'cinema', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(46, 'images/upload/28_281139721315.jpg', NULL, '', NULL, NULL, '', NULL, '29-04-2024', '13:28', NULL, 'Une Plateforme Complète pour la Production et la Distribution de Films', 'cinema', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(47, 'images/upload/59_078453025964.jpg', NULL, '<p style=\"text-align:justify\">Notre service de production de films vous offre la possibilit&eacute; de concr&eacute;tiser vos r&ecirc;ves cin&eacute;matographiques. Gr&acirc;ce &agrave; notre &eacute;quipe passionn&eacute;e et nos ressources sp&eacute;cialis&eacute;es, nous transformons vos id&eacute;es en des &oelig;uvres cin&eacute;matographiques m&eacute;morables, capturant chaque instant avec cr&eacute;ativit&eacute; et expertise.</p>\r\n', NULL, NULL, '', NULL, '29-04-2024', '14:24', NULL, 'Production de films', 'cinemaservices', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(48, 'images/upload/46_528378044398.jpg', NULL, '<p style=\"text-align:justify\">Gr&acirc;ce &agrave; notre service de distribution de films, nous assurons la promotion et la diffusion de vos &oelig;uvres cin&eacute;matographiques sur diverses plateformes, offrant ainsi une visibilit&eacute; maximale &agrave; vos cr&eacute;ations aupr&egrave;s d&#39;un large public.</p>\r\n', NULL, NULL, '', NULL, '29-04-2024', '15:46', NULL, 'Distribution de films', 'cinemaservices', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(49, 'images/upload/13_163393025446.jpg', NULL, '<p style=\"text-align:justify\">Nos services de consulting fiscale offrent une expertise approfondie pour optimiser votre situation financi&egrave;re, minimiser les risques fiscaux et garantir une conformit&eacute; totale avec les lois et r&eacute;glementations fiscales en constante &eacute;volution.</p>\r\n', NULL, NULL, '', NULL, '29-04-2024', '17:13', NULL, 'Consulting Fiscale', 'consultingservices', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(51, 'images/upload/45_156532236231.jpg', NULL, '<p style=\"text-align:justify\">Explorez attentivement notre s&eacute;lection vari&eacute;e de biens immobiliers &agrave; louer, offrant une gamme &eacute;tendue d&#39;options pour correspondre &agrave; vos pr&eacute;f&eacute;rences et &agrave; votre budget, simplifiant ainsi la recherche de votre prochaine demeure.</p>\r\n', NULL, NULL, '', NULL, '13-05-2024', '14:30', NULL, 'Location immobilière', 'immobilierservices', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(52, 'images/upload/49_592771772154.jpg', NULL, '<p style=\"text-align:justify\">Explorez en toute confiance notre service de vente immobili&egrave;re, o&ugrave; notre &eacute;quipe d&eacute;vou&eacute;e vous guide &agrave; chaque &eacute;tape du processus, vous permettant ainsi de trouver la propri&eacute;t&eacute; parfaite pour r&eacute;pondre &agrave; vos besoins et aspirations.</p>\r\n', NULL, NULL, '', NULL, '13-05-2024', '14:32', NULL, 'Vente Immobilière', 'immobilierservices', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(53, 'images/upload/42_477593327263.jpg', NULL, '<p style=\"text-align:justify\">Notre portefeuille immobilier est aussi diversifi&eacute; que nos clients. Que ce soit pour l&#39;achat, la vente, la location ou la gestion de propri&eacute;t&eacute;s, nous sommes d&eacute;di&eacute;s &agrave; cr&eacute;er des opportunit&eacute;s immobili&egrave;res qui correspondent aux besoins uniques de chacun.</p>\r\n', NULL, NULL, '', NULL, '13-05-2024', '14:28', NULL, 'Gestion de biens immobiliers', 'immobilierservices', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(54, 'images/upload/34_391021372756.jpg', NULL, '<p style=\"text-align:justify\">Experts immobiliers engag&eacute;s &agrave; r&eacute;aliser vos projets. Vente, achat, location, gestion : une solution pour chaque besoin.</p>\r\n', NULL, NULL, '', NULL, '30-04-2024', '09:34', NULL, 'Découvrez notre expertise en immobilier', 'immobilier', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(55, 'images/upload/37_116305898722.jpg', NULL, '<p style=\"text-align:justify\">D&eacute;couvrez nos services immobiliers personnalis&eacute;s pour chaque besoin : achat, vente, location, investissement</p>\r\n', NULL, NULL, '', NULL, '30-04-2024', '09:37', NULL, 'Explorez nos solutions immobilières sur mesure', 'immobilier', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(56, 'images/upload/40_335746584276.jpg', NULL, '<p style=\"text-align:justify\">Faites confiance &agrave; notre &eacute;quipe exp&eacute;riment&eacute;e pour vous accompagner dans tous vos projets immobiliers, de l&#39;achat &agrave; la gestion de biens, avec professionnalisme et d&eacute;vouement.</p>\r\n', NULL, NULL, '', NULL, '30-04-2024', '09:40', NULL, 'Votre partenaire immobilier de confiance', 'immobilier', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(57, 'images/upload/53_466098244437.jpg', NULL, '<p style=\"text-align:justify\">D&eacute;couvrez notre engagement total pour concr&eacute;tiser vos projets immobiliers. Notre &eacute;quipe d&#39;experts vous guide &agrave; chaque &eacute;tape, avec professionnalisme et d&eacute;vouement. Faites confiance &agrave; notre approche personnalis&eacute;e pour r&eacute;aliser vos r&ecirc;ves immobiliers.</p>\r\n', NULL, NULL, '', NULL, '30-04-2024', '09:53', NULL, 'Expertise Immobilière: Votre Guide vers Votre Nouveau Foyer', 'aboutimmobilier', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(58, 'images/upload/45_319333442024.jpg', NULL, '<p style=\"text-align:justify\">Notre service de consulting vous offre des solutions sur mesure pour optimiser votre entreprise, gr&acirc;ce &agrave; une expertise pointue et des conseils strat&eacute;giques adapt&eacute;s &agrave; vos besoins.</p>\r\n', NULL, NULL, '', NULL, '30-04-2024', '11:45', NULL, 'Stratégies sur Mesure: Votre Succès Assuré', 'aboutus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(59, 'images/upload/43_176778958981.jpg', NULL, '<p style=\"text-align:justify\">Plongez dans l&#39;univers magique du cin&eacute;ma avec notre service de production, o&ugrave; nous mettons en lumi&egrave;re vos histoires avec cr&eacute;ativit&eacute; et passion, de la conception &agrave; la r&eacute;alisation.</p>\r\n', NULL, NULL, '', NULL, '30-04-2024', '11:43', NULL, 'Éclairez Vos Histoires: Créez Votre Chef-d\'Œuvre Cinématographique', 'aboutus', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(60, 'images/upload/44_206994176600.jpg', NULL, '<p style=\"text-align:justify\">En mati&egrave;re immobili&egrave;re, nous sommes votre partenaire de confiance pour trouver la propri&eacute;t&eacute; parfaite, vendre votre bien actuel ou investir dans des opportunit&eacute;s immobili&egrave;res prometteuses.</p>\r\n', NULL, NULL, '', NULL, '30-04-2024', '11:44', NULL, 'L\'Immobilier Redéfini: Trouvez Votre Foyer Idéal', 'aboutus', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(61, 'images/upload/50_257199100655.jpeg', NULL, '<p style=\"text-align:justify\"><span style=\"color:#ffffff\">YABA International est bien plus qu&#39;une entreprise. Nous sommes une &eacute;quipe passionn&eacute;e et d&eacute;vou&eacute;e, anim&eacute;e par la volont&eacute; de fournir des solutions innovantes et de qualit&eacute; &agrave; nos clients. Forts d&#39;une expertise diversifi&eacute;e et d&#39;une approche centr&eacute;e sur le client, nous nous effor&ccedil;ons chaque jour d&#39;aller au-del&agrave; des attentes pour r&eacute;pondre aux besoins uniques de chacun. Avec un engagement ind&eacute;fectible envers l&#39;excellence, nous sommes fiers de b&acirc;tir des relations solides et durables avec nos clients, bas&eacute;es sur la confiance, l&#39;int&eacute;grit&eacute; et le professionnalisme. Nous sommes YABA International votre partenaire de confiance pour relever tous vos d&eacute;fis et r&eacute;aliser vos objectifs avec succ&egrave;s.</span></p>\r\n', NULL, NULL, '', NULL, '10-05-2024', '12:50', NULL, 'ZADI Kévin', 'aboutboss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(86, 'images/upload/16_152788639237.jpg', NULL, '<p style=\"text-align:justify\">D&eacute;couvrez d&egrave;s maintenant nos promotions immobili&egrave;res exclusives, o&ugrave; chaque projet innovant r&eacute;pond &agrave; vos besoins r&eacute;sidentiels et commerciaux avec excellence et qualit&eacute;, assurant ainsi une exp&eacute;rience d&#39;investissement unique.</p>\r\n', NULL, NULL, '', NULL, '07-05-2024', '11:24', NULL, 'Promotions immobilières', 'services', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(85, 'images/upload/04_477259329235.jpg', NULL, '<p style=\"text-align:justify\">Explorez en toute confiance notre service de vente immobili&egrave;re, o&ugrave; notre &eacute;quipe d&eacute;vou&eacute;e vous guide &agrave; chaque &eacute;tape du processus, vous permettant ainsi de trouver la propri&eacute;t&eacute; parfaite pour r&eacute;pondre &agrave; vos besoins et aspirations.</p>\r\n', NULL, NULL, '', NULL, '07-05-2024', '11:04', NULL, 'Vente Immobilière', 'services', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(84, 'images/upload/56_394982356831.jpg', NULL, '<p style=\"text-align:justify\">Explorez attentivement notre s&eacute;lection vari&eacute;e de biens immobiliers &agrave; louer, offrant une gamme &eacute;tendue d&#39;options pour correspondre &agrave; vos pr&eacute;f&eacute;rences et &agrave; votre budget, simplifiant ainsi la recherche de votre prochaine demeure.</p>\r\n', NULL, NULL, '', NULL, '07-05-2024', '11:01', NULL, 'Location immobilière', 'services', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(68, 'images/upload/36_464649542724.png', NULL, '', NULL, NULL, '', NULL, '30-04-2024', '14:36', NULL, '', 'section7', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(69, 'images/upload/41_053732060446.png', NULL, '', NULL, NULL, '', NULL, '30-04-2024', '14:41', NULL, '', 'section7', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(70, 'images/upload/41_268909810912.png', NULL, '', NULL, NULL, '', NULL, '30-04-2024', '14:41', NULL, '', 'section7', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(71, 'images/upload/41_599136885397.png', NULL, '', NULL, NULL, '', NULL, '30-04-2024', '14:41', NULL, '', 'section7', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(72, 'images/upload/33_571788844717.jpg', NULL, '<p>Un ordinateur dot&eacute; d&#39;un processeur de derni&egrave;re g&eacute;n&eacute;ration&nbsp;performant</p>\r\n', NULL, NULL, '', NULL, '30-04-2024', '15:33', NULL, 'Ordinateur Portatif Lenovo', 'articles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 76889, NULL, '', '', ''),
(73, 'images/upload/57_525326121887.jpg', NULL, '<p style=\"text-align:justify\">Notre entreprise s&#39;engage &agrave; poursuivre une mission ambitieuse : offrir &agrave; nos clients des produits et services de la plus haute qualit&eacute;, tout en maintenant une position de leader dans l&#39;innovation et en contribuant positivement &agrave; la vie de nos clients, employ&eacute;s et communaut&eacute;s. Nous aspirons &agrave; devenir une r&eacute;f&eacute;rence incontournable dans notre secteur d&#39;activit&eacute;, en anticipant les besoins du march&eacute; et en offrant des solutions innovantes qui r&eacute;pondent aux d&eacute;fis du monde moderne</p>\r\n', NULL, NULL, '', NULL, '30-04-2024', '18:01', NULL, 'Aperçu de la mission et de la vision de YABA International', 'aboutsociety', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(83, 'images/upload/45_021911797026.jpg', NULL, '<p style=\"text-align:justify\">Gr&acirc;ce &agrave; notre service de distribution de films, nous assurons la promotion et la diffusion de vos &oelig;uvres cin&eacute;matographiques sur diverses plateformes, offrant ainsi une visibilit&eacute; maximale &agrave; vos cr&eacute;ations aupr&egrave;s d&#39;un large public.</p>\r\n', NULL, NULL, '', NULL, '07-05-2024', '10:45', NULL, 'Distribution de films', 'services', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(82, 'images/upload/32_43192208710.jpg', NULL, '<p style=\"text-align:justify\">Nous offrons un service de consulting juridique complet, fournissant des conseils pr&eacute;cis et strat&eacute;giques pour r&eacute;pondre &agrave; vos besoins l&eacute;gaux, prot&eacute;ger vos int&eacute;r&ecirc;ts et assurer la conformit&eacute; de vos activit&eacute;s avec les r&eacute;glementations en vigueur.</p>\r\n', NULL, NULL, '', NULL, '07-05-2024', '10:32', NULL, 'Consulting Juridique', 'services', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(77, 'images/upload/25_089835822103.jpg', NULL, '<p style=\"text-align:justify\">Ouvrez les portes du succ&egrave;s mondial avec Yaba International, votre partenaire de confiance pour atteindre de nouveaux sommets dans tous vos projets.</p>\r\n', NULL, NULL, '', NULL, '02-05-2024', '13:25', NULL, 'Yaba International : Votre Porte d\'Entrée vers le Succès Mondial', 'section26', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(78, 'images/upload/26_538722036174.jpg', NULL, '<p style=\"text-align:justify\">Plongez dans l&#39;univers de Yaba International, un leader mondial qui red&eacute;finit les normes de l&#39;excellence dans tous les domaines.</p>\r\n', NULL, NULL, '', NULL, '02-05-2024', '13:26', NULL, 'Découvrez Yaba International : Pionnier de l\'Excellence Globale', 'section26', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(79, 'images/upload/31_362667375079.jpg', NULL, '<p style=\"text-align:justify\">Notre portefeuille immobilier est aussi diversifi&eacute; que nos clients. Que ce soit pour l&#39;achat, la vente, la location ou la gestion de propri&eacute;t&eacute;s, nous sommes d&eacute;di&eacute;s &agrave; cr&eacute;er des opportunit&eacute;s immobili&egrave;res qui correspondent aux besoins uniques de chacun.</p>\r\n', NULL, NULL, '', NULL, '06-05-2024', '21:31', NULL, 'Gestion de biens immobiliers', 'services', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(80, 'images/upload/36_18769696209.jpg', NULL, '<p style=\"text-align:justify\">Avec une passion pour le cin&eacute;ma, nous produisons et distribuons des histoires captivantes. Notre &eacute;quipe d&#39;experts offre des services complets, de la conception initiale &agrave; la sortie en salle, en passant par la post-production.</p>\r\n', NULL, NULL, '', NULL, '06-05-2024', '21:36', NULL, 'Production de films', 'services', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(81, 'images/upload/40_587606578962.jpg', NULL, '<p style=\"text-align:justify\">Nous offrons des conseils fiscaux d&#39;excellence, avec des strat&eacute;gies sophistiqu&eacute;es pour garantir la conformit&eacute; et maximiser les &eacute;conomies. Nos conseils sont personnalis&eacute;s pour r&eacute;pondre &agrave; chaque situation financi&egrave;re.</p>\r\n', NULL, NULL, '', NULL, '07-05-2024', '09:59', NULL, 'Consultation fiscale', 'services', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(87, 'images/upload/29_269434397988.jpg', NULL, '<p style=\"text-align:justify\">Nous r&eacute;volutionnons le commerce en ligne en offrant une plateforme robuste pour la croissance et le d&eacute;veloppement des marques num&eacute;riques. Notre approche strat&eacute;gique assure une pr&eacute;sence en ligne dominante et un succ&egrave;s commercial durable.</p>\r\n', NULL, NULL, '', NULL, '07-05-2024', '11:29', NULL, 'E-commerce: Big Market', 'services', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(89, 'images/upload/12_417275740228.jpg', NULL, '<p style=\"text-align:justify\">Nous r&eacute;volutionnons le commerce en ligne en offrant une plateforme robuste pour la croissance et le d&eacute;veloppement des marques num&eacute;riques. Notre approche strat&eacute;gique assure une pr&eacute;sence en ligne dominante et un succ&egrave;s commercial durable.</p>\r\n', NULL, NULL, '', NULL, '13-05-2024', '13:25', NULL, 'E-commerce: Big Market', 'allservices', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(90, 'images/upload/18_568541248278.jpg', NULL, '<p style=\"text-align:justify\">&Agrave; travers une palette vari&eacute;e de services immobiliers, depuis la prospection minutieuse jusqu&#39;&agrave; une gestion locative impeccable, notre entreprise s&#39;engage &agrave; vous offrir une exp&eacute;rience sans pareille, o&ugrave; votre satisfaction demeure notre priorit&eacute; absolue.</p>\r\n', NULL, NULL, '', NULL, '13-05-2024', '13:25', NULL, 'YABA Immobilier', 'allservices', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(91, 'images/upload/30_21510491781.jpg', NULL, '<p style=\"text-align:justify\">Nous vous accompagnons &agrave; travers une panoplie de services de consulting, depuis l&#39;analyse approfondie jusqu&#39;&agrave; la mise en &oelig;uvre strat&eacute;gique, mettant en avant votre r&eacute;ussite comme notre objectif ultime.</p>\r\n', NULL, NULL, '', NULL, '13-05-2024', '13:30', NULL, 'YABA Consulting', 'allservices', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(92, 'images/upload/32_595896644649.jpg', NULL, '<p style=\"text-align:justify\">De la conception cr&eacute;ative &agrave; la production technique, notre entreprise vous offre une gamme compl&egrave;te de services cin&eacute;matographiques, pla&ccedil;ant votre vision au c&oelig;ur de notre engagement pour un r&eacute;sultat exceptionnel.</p>\r\n', NULL, NULL, '', NULL, '13-05-2024', '13:32', NULL, 'YABA Cinema', 'allservices', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(93, 'images/upload/03_581191881775.jpg', NULL, '<p style=\"text-align:justify\">B&eacute;n&eacute;ficiez d&#39;une r&eacute;duction exclusive de 10% sur une gamme s&eacute;lectionn&eacute;e de nos services immobiliers, vous offrant ainsi l&#39;opportunit&eacute; d&#39;&eacute;conomiser tout en profitant d&#39;un accompagnement de qualit&eacute; sup&eacute;rieure pour concr&eacute;tiser vos projets immobiliers</p>\r\n', NULL, NULL, '', NULL, '13-05-2024', '14:03', NULL, 'Réduction de 10% sur nos services immobiliers', 'offres', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(94, 'images/upload/04_462641366325.jpg', NULL, '<p style=\"text-align:justify\">B&eacute;n&eacute;ficiez d&#39;une r&eacute;duction exclusive de 10% sur une gamme s&eacute;lectionn&eacute;e de nos services immobiliers, vous offrant ainsi l&#39;opportunit&eacute; d&#39;&eacute;conomiser tout en profitant d&#39;un accompagnement de qualit&eacute; sup&eacute;rieure pour concr&eacute;tiser vos projets immobiliers</p>\r\n', NULL, NULL, '', NULL, '13-05-2024', '14:04', NULL, 'Réduction de 10% sur nos services immobiliers', 'offres', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(95, 'images/upload/06_592728750344.jpg', NULL, '<p style=\"text-align:justify\">Appr&eacute;ciez une remise exceptionnelle de 10% sur une s&eacute;lection de nos services de cin&eacute;ma, vous offrant ainsi la possibilit&eacute; d&#39;acc&eacute;der &agrave; notre expertise de haut niveau tout en r&eacute;alisant des &eacute;conomies appr&eacute;ciables pour concr&eacute;tiser vos projets artistiques avec brio.</p>\r\n', NULL, NULL, '', NULL, '13-05-2024', '14:08', NULL, 'Réduction de 10% sur nos services de cinéma', 'offres', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '', '', ''),
(96, 'images/upload/26_091123558190.jpg', NULL, '<p style=\"text-align:justify\">D&eacute;couvrez d&egrave;s maintenant nos promotions immobili&egrave;res exclusives, o&ugrave; chaque projet innovant r&eacute;pond &agrave; vos besoins r&eacute;sidentiels et commerciaux avec excellence et qualit&eacute;, assurant ainsi une exp&eacute;rience d&#39;investissement unique.</p>\r\n', NULL, NULL, '', NULL, '13-05-2024', '14:26', NULL, 'Promotions immobilières', 'immobilierservices', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 0, NULL, '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `identification`
--

CREATE TABLE `identification` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `mpasse` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `identification`
--

INSERT INTO `identification` (`id`, `login`, `mpasse`, `email`) VALUES
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `groupe_page`
--
ALTER TABLE `groupe_page`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `identification`
--
ALTER TABLE `identification`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `groupe_page`
--
ALTER TABLE `groupe_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT pour la table `identification`
--
ALTER TABLE `identification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
