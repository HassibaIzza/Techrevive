-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 31 mars 2024 à 01:48
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
-- Base de données : `jsbdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(200) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `motdepasse` varchar(50) NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `role` varchar(50) NOT NULL,
  `numero_tel` varchar(20) DEFAULT NULL,
  `adresse` varchar(50) NOT NULL,
  `type_services` varchar(255) DEFAULT NULL,
  `numero_tel_fabriquant` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `email`, `motdepasse`, `date_naissance`, `role`, `numero_tel`, `adresse`, `type_services`, `numero_tel_fabriquant`) VALUES
(1, 'John Doe', 'johndoe@example.com', 'motdepasse123', NULL, '', NULL, '0', NULL, NULL),
(18, 'hadjer bouhenni', 'hadjerbouhenni1@gmail.com', 'admin1234', '2001-02-28', 'reparateur', '0779334232', '', 'Réparation de tablettes', NULL),
(19, '	Zineb Farah Betterki', 'betterkizinebfarah@gmail.com', 'admin1234', '2001-07-29', 'reparateur', '0552524506', '', 'Réparation de smartphones', NULL),
(20, 'izza hassiba', 'hassibaizza827@gmail.com', 'admin1234', '2001-06-27', 'reparateur', '0783195323', '', 'Réparation de tablettes', NULL),
(27, 'chaima', 'chaima@gmail.com', 'chaima', '2024-03-20', 'reparateur', '0664946627', '', 'Réparation d appareils électroménagers', NULL),
(31, 'saida', 'saida@gmail.com', '123456', '2002-04-01', 'client', NULL, '', NULL, NULL),
(32, 'houda NR', 'houda@gmail.com', '12345', '2002-04-01', 'reparateur', '0798704633', '', 'Réparation d ordinateurs portables et de PC', NULL),
(34, 'enie', 'enie@gmail.com', '1234', '2002-04-05', 'fabriquant', '798704633', 'sidi bel Abesse', NULL, NULL),
(35, 'amine', 'amine@gmail.com', '1234', '2001-09-11', 'client', NULL, '', NULL, NULL);

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
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
