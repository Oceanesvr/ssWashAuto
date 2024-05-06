-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 25 jan. 2024 à 21:43
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ssauto`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `idArt` int(10) NOT NULL,
  `desiArt` varchar(255) NOT NULL,
  `caractArt` varchar(255) NOT NULL,
  `descripArt` varchar(255) NOT NULL,
  `prixArt` float NOT NULL,
  `photoArt` varchar(255) NOT NULL,
  `typeArt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`idArt`, `desiArt`, `caractArt`, `descripArt`, `prixArt`, `photoArt`, `typeArt`) VALUES
(2, 'Lavage extérieur', 'Le lavage extérieur est l’étape indispensable pour une brillance incomparable et un entretien total de votre véhicule. Carrosserie, vitres et pare-brise et jantes.', 'Temps estimé : 2 heures, prise de rendez-vous nécessaire.', 69, '\"images/logo.png\"', 'prestations'),
(3, 'Lavage intérieur', 'Quoi de mieux que le lavage intérieur pour se sentir agréablement bien dans votre voiture ? Aspiration, lavage des moquettes et tissus et nettoyage des plastiques.', 'Temps estimé : 1 heure, prise de rendez-vous nécessaire.', 59, '', 'prestations'),
(4, 'Lavage extérieur et intérieur', 'Le lavage extérieur et intérieur est la formule all inclusive pour votre voiture et votre bien-être de conduite. Carrosserie, vitres et pare-brise, jantes, aspiration, lavage moquettes et tissus et nettoyage des plastiques.', 'Temps estimé : 3 heures, prise de rendez-vous nécessaire.', 109, '', 'prestations'),
(5, 'Traitement céramique', 'Un traitement céramique est une innovation technologique utilisée pour protéger la carrosserie d\'un véhicule.', 'Temps estimé : 1 heure, prise de rendez-vous nécessaire. NB : Nécessite un lavage extérieur au préalable.', 39, '', 'presentations'),
(6, 'Lustrage intégral', 'Il regroupe de multiples techniques qui cherchent à nourrir le vernis ou la peinture d\'une carrosserie afin de lui donner un aspect brillant, voire un effet miroir.', 'Temps estimé : 2 heures, prise de rendez-vous nécessaire. NB : Nécessite un lavage extérieur au préalable.', 49, '', 'prestations'),
(7, 'Coffret lavage normal', 'Le coffret lavage normal permet un lavage simple pour l’extérieur de votre véhicule. Il est composé de : - Bouteille de savon ultra moussant - Éponge désincrustante - Peau de chamois.', 'Sous réserve de stock disponible. Pas de livraison possible, passez en magasin.', 12, '', 'produits'),
(8, 'Coffret lavage prémium', 'Le coffret lavage prémium permet un lavage efficace pour l’extérieur de votre véhicule. Il est composé de : - Bouteille de savon ultra moussant - Éponge désincrustante - Peau de chamois - Pulvérisateur lustrage déperlant - Micro fibre', 'Sous réserve de stock disponible. Pas de livraison possible, passez en magasin.', 21, '', 'produits'),
(9, 'Coffret lavage exclusif', 'Le coffret lavage exclusif permet un lavage total pour l’extérieur de votre véhicule pour une durabilité maximale. Il est composé de : - Bouteille de savon ultra moussant - Éponge désincrustante - Peau de chamois - Pulvérisateur lustrage déperlant - Micro', 'Sous réserve de stock disponible. Pas de livraison possible, passez en magasin.', 35, '', 'produits'),
(10, 'Bouteille de savon ultra moussant', 'Ce savon vous permet la décontamination de votre carrosserie et la désincrustation de salissures et goudron.', 'Sous réserve de stock disponible. Pas de livraison possible, passez en magasin.', 7, '', 'produits'),
(11, 'Pulvérisateur lustrant déperlant', 'Grâce à ce pulvérisateur, les salissures adhèrent moins à la carrosserie et évitent les traces de calcaire.', 'Sous réserve de stock disponible. Pas de livraison possible, passez en magasin.', 5, '', 'produits'),
(12, 'Cire lustrante', 'Cette cire s’applique sur une carrosserie sèche et permet une brillance extrême.', 'Sous réserve de stock disponible. Pas de livraison possible, passez en magasin.', 17, '', 'produits');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `idCom` int(11) NOT NULL,
  `dateCom` date NOT NULL,
  `idUser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

CREATE TABLE `ligne_commande` (
  `qteCom` int(11) NOT NULL,
  `idCom` int(11) DEFAULT NULL,
  `idArt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `idArt` int(11) NOT NULL,
  `quantite` int(11) NOT NULL DEFAULT 1,
  `cree_le` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idUser` int(11) NOT NULL,
  `users` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUser`, `users`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`idArt`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idCom`),
  ADD KEY `idUser` (`idUser`);

--
-- Index pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD KEY `idCom` (`idCom`),
  ADD KEY `idArt` (`idArt`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idArt` (`idArt`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `utilisateur` (`idUser`);

--
-- Contraintes pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD CONSTRAINT `ligne_commande_ibfk_1` FOREIGN KEY (`idCom`) REFERENCES `commande` (`idCom`),
  ADD CONSTRAINT `ligne_commande_ibfk_2` FOREIGN KEY (`idArt`) REFERENCES `article` (`idArt`);

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`idArt`) REFERENCES `article` (`idArt`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
