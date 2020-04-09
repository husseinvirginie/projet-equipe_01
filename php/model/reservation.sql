-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 09 avr. 2020 à 13:19
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ilesfantastiques`
--

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `Id` int(11) NOT NULL,
  `destination` varchar(160) NOT NULL,
  `date` date NOT NULL,
  `duree` text NOT NULL,
  `ville` varchar(200) NOT NULL,
  `adulte` int(160) NOT NULL,
  `enfant` int(160) NOT NULL,
  `nom` varchar(160) NOT NULL,
  `nombrecarte` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`Id`, `destination`, `date`, `duree`, `ville`, `adulte`, `enfant`, `nom`, `nombrecarte`) VALUES
(1, 'sfsdfsd', '0000-00-00', '0', 'sdfsdf', 2, 2, 'sdf', '0'),
(2, 'dfsd', '0000-00-00', '0', 'sdfsdf', 6, 2, 'sdf', '0'),
(3, 'dsfdf', '0000-00-00', '2323', 'ddsdfsdf', -2, -2, 'fdf', '0'),
(4, '234234fdf', '0000-00-00', '34343', 'dsfsd', 3, 3, '3223fdfdf', '2147483647'),
(5, '234234fdf', '0000-00-00', '34343//3434', 'dsfsd', 3, 3, '3223fdfdf', '1231231434534543545564534'),
(6, 'sdfsdfsd', '0000-00-00', '2 months ', 'new ', 3, 3, 'dfdf', '11133-33-34-3--3-3'),
(7, 'sdfsdf', '0000-00-00', 'fse33', 'dsfsdf', 2, 3, 'sdfsdf', 'sdfsdf'),
(8, 'sdfsdf', '2000-02-23', 'sdfsd', 'sdfdsf', -2, -2, 'sdfsdf', 'sdfsfdsdf'),
(9, 'sdfsdf', '2000-02-23', 'sdfsd', 'sdfdsf', -2, -2, 'sdfsdf', 'sdfsfdsdf');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
