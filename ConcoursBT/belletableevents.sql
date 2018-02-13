-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 13 fév. 2018 à 15:00
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
-- Base de données :  `belletableevents`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `IDUser` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Pseudo` varchar(255) NOT NULL,
  `Type` int(11) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`IDUser`, `Nom`, `Prenom`, `Mail`, `Pseudo`, `Type`, `Password`) VALUES
(1, 'HAMADOUCHE', 'Elias', 'elinole94@gmail.com', 'Elinole', 1, 'f9979f36577da1ba51890e088db3fbc410ede368373c17e2b3fb0f8ffb0f2a51e3edddc78284c4a7d65e5f185e7c1ca66f3ec623013452d8821060a0e96ca6f3'),
(2, 'GOWEN', 'David', 'davidcgowen@teleworm.us', 'Saids1992', 2, 'f9979f36577da1ba51890e088db3fbc410ede368373c17e2b3fb0f8ffb0f2a51e3edddc78284c4a7d65e5f185e7c1ca66f3ec623013452d8821060a0e96ca6f3'),
(3, 'PEREIRA', 'Tony', 'tony.pereira24@outlook.com', 'tonyprr', 1, '04ef7a18a5c2816d948ad0849b71ab718a7d537530b4c84556cc85cb6f7569e00757393129bc35e2c970b2bfa8501c9898dfc55fc93066e895d6983945caaeda');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`IDUser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `IDUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
