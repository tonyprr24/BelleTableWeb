-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 13 fév. 2018 à 15:03
-- Version du serveur :  10.1.29-MariaDB
-- Version de PHP :  7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `belletable`
--

-- --------------------------------------------------------

--
-- Structure de la table `membrebt`
--

CREATE TABLE `membrebt` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `idf` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `type_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membrebt`
--

INSERT INTO `membrebt` (`id`, `nom`, `prenom`, `email`, `tel`, `idf`, `mdp`, `type_user`) VALUES
(1, 'PEREIRA', 'Tony', 'tony.pereira24@outlook.com', '0651566707', 'tonyprr', 'e892fc23aa681ded35c2d864fa8fbe16bbf35c72', 1),
(2, 'HAMADOUCHE', 'Elias', 'elinole94@gmail.com', '0781247379', 'elinole', 'c688acc4f51eec2794537ed19a8a47686769f544', 2),
(3, 'ALTERNO', 'Alessandro', 'lerchtroll@gmail.com', '0673835899', 'alterno1', '1dbb487d4bf4e40a65b712f1aaea1453b160b3e0', 3),
(5, 'TEST', 'Jean', 'jean.test@outlook.fr', '0101010101', 'test1', 'c3dc009fe77de2d2c488eb4dd59e2ee9f50b4a83', 3);

-- --------------------------------------------------------

--
-- Structure de la table `typebt`
--

CREATE TABLE `typebt` (
  `id` int(11) NOT NULL,
  `typeuti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `typebt`
--

INSERT INTO `typebt` (`id`, `typeuti`) VALUES
(1, 'Super Admin'),
(2, 'Administrateur'),
(3, 'Client');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `membrebt`
--
ALTER TABLE `membrebt`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `typebt`
--
ALTER TABLE `typebt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `membrebt`
--
ALTER TABLE `membrebt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `typebt`
--
ALTER TABLE `typebt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
