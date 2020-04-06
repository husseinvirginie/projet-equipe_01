-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 06 avr. 2020 à 14:42
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
-- Structure de la table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(11) NOT NULL,
  `image` varchar(160) NOT NULL,
  `lieu` varchar(160) NOT NULL,
  `pays` varchar(160) NOT NULL,
  `categorie` varchar(160) NOT NULL,
  `saison` varchar(160) NOT NULL,
  `description` text NOT NULL,
  `prix` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `destinations`
--

INSERT INTO `destinations` (`id`, `image`, `lieu`, `pays`, `categorie`, `saison`, `description`, `prix`) VALUES
(1, ' assets/img/brown-on-seashore-near-mountain-1007657.jpg', 'MARSEILLE', 'france ', 'voyage', 'été ', 'vive les îles!!', '200.00'),
(3, 'assets/img/two-corona-extra-and-san-mig-light-beers-on-top-of-brown-767239.jpg', 'Grand Cayman', 'îles Caïmans', 'demi pension', 'été', '\r\nMalgré sa taille, ce pays est réputé pour ses incroyables plages. La plage « Seven Mile Beach » est le joyau de ces îles de rêve : c’est une immense plage de sable fin qui surplombe les eaux chaudes et cristallines de la mer des Caraïbes… \r\n\r\n', '857.00'),
(4, 'assets/img/man-and-woman-standing-on-deck-1287441.jpg', 'Pico de las Nieves ile de Grande Canarie', 'Espagne', 'pension complète', 'été ', 'Le Pico de las Nieves attire les visiteurs aventureux qui souhaitent découvrir le côté campagne de l\'île. Réservez une visite guidée de Las Palmas, afin de profiter de la vue panoramique du terrain.', '396.00'),
(5, 'assets/img/light-sea-dawn-landscape-33545.jpg', 'Les îles Fidji', 'Fidji', 'pension complète', 'été ', 'Les îles Fidji sont très appréciées. En effet, cet archipel est composé de plus de 300 îles, permettant à chacun de profiter au mieux de cette destination paradisiaque. Les îles Yasawa, situées au large de l’île Viti Levu, abritent un nombre incroyable de plages surplombées par des collines recouvertes de végétation tropicale luxuriante.', '1450.00'),
(6, 'assets/img/huts-near-body-of-water-1506836.jpg', 'Peter Island', 'Îles vierges britanniques', 'demi pension', 'été ', 'Réputée pour ses plages isolées, Peter Island est une île privée qui offre des paysages incroyables par son propriétaire. Nommé à deux reprises comme étant l’un des meilleurs endroits où passer des vacances de rêve dans le monde par le magazine « Conde Nast Traveler ».', '1028.00'),
(7, 'assets/img/empty-lounges-near-pool-and-ocean-2606523.jpg', 'Costa rica', 'Costa rica ', 'demi pension', 'été ', '\r\nLe Costa Rica est un paradis tropical luxuriant situé en Amérique Centrale, entouré d’une part par la mer des Caraïbes et d’autre part par l’Océan Pacifique. Ce pays authentique a su préserver sa beauté naturelle.  Le Costa Rica a un petit goût de revenez-y !\r\n\r\n', '800.00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
