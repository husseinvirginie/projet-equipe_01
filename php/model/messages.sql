-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 06 avr. 2020 à 16:58
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
-- Base de données : ` ilesfantastiques`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `nom` varchar(160) NOT NULL,
  `prenom` varchar(160) NOT NULL,
  `adresse` varchar(160) NOT NULL,
  `pays` varchar(160) NOT NULL,
  `email` varchar(160) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `nom`, `prenom`, `adresse`, `pays`, `email`, `message`) VALUES
(1, 'sdfs', 'sdfsdf', 'sdfsd', 'fsdfsdf', 'dsfsdf', 'sdfsdf'),
(2, 'sdfs', 'sdfsdf', 'sdfsd', 'fsdfsdf', 'dsfsdf', 'sdfsdf'),
(3, 'sdfs', 'sdfsdf', 'sdfsd', 'fsdfsdf', 'dsfsdf', 'sdfsdf'),
(4, 'sdfs', 'sdfsdf', 'sdfsd', 'fsdfsdf', 'dsfsdf', 'sdfsdf'),
(5, 'sdfsd', 'sdfsdf', 'sdfsdf', 'sdf', 'dsf', 'sdf'),
(6, 'sdfsd', 'sdfsdf', 'sdfsdf', 'sdf', 'dsf', 'sdf'),
(7, 'sdfsd', 'sdfsdf', 'sdfsdf', 'sdf', 'dsf', 'sdf'),
(8, 'sdfsd', 'sdfsdf', 'sdfsdf', 'sdf', 'dsf', 'sdf'),
(9, 'sdfsdfs', 'sdfsdfsd', 'sdfsdf', 'sdfsdfsdf', 'sdfsdfsdf', 'sdfsdfsdfsdf'),
(10, 'sdfsdfs', 'sdfsdfsd', 'sdfsdf', 'sdfsdfsdf', 'sdfsdfsdf', 'sdfsdfsdfsdf'),
(11, 'bbbbbbbb', 'bbbbbbbb', 'bbbbbbbbbbb', 'bbbbbbbbbbb', 'bbbbb', 'bbbbbbbbb'),
(12, 'bbbbbbbb', 'bbbbbbbb', 'bbbbbbbbbbb', 'bbbbbbbbbbb', 'bbbbb', 'bbbbbbbbb');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
