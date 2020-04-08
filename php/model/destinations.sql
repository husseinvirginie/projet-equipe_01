-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 08 avr. 2020 à 10:25
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
  `prix` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `destinations`
--

INSERT INTO `destinations` (`id`, `image`, `lieu`, `pays`, `categorie`, `saison`, `description`, `prix`) VALUES
(1, 'assets/img/huts-near-body-of-water-1506836.jpg', 'Phu Quoc', 'Vietnam', 'Pension Complète', 'Eté', 'Phu Quoc est aussi appelée l\'île d\'émeraude pour ses trésors naturels et son potentiel touristique. Petit coin de paradis, elle vous séduira par ses magnifiques plages de sable, sa végétation luxuriante et sa tranquillité. Faites vite votre valise !', '464'),
(3, 'assets/img/two-corona-extra-and-san-mig-light-beers-on-top-of-brown-767239.jpg', 'Grand Cayman', 'Iles Caïmans', 'Demi Pension', 'Eté', 'Malgré sa taille, ce pays est réputé pour ses incroyables plages. La plage \"Seven Mile Beach\" est le joyau de ces îles de rêve : c’est une immense plage de sable fin qui surplombe les eaux chaudes et cristallines de la mer des Caraïbes… \r\n\r\n', '857'),
(4, 'assets/img/empty-lounges-near-pool-and-ocean-2606523.jpg', 'Pico de las Nieves', 'Espagne - Grande Canarie', 'Pension Complète', 'Eté ', 'Le Pico de las Nieves, point le plus haut de la Grande Canarie, attire les visiteurs aventureux qui souhaitent découvrir le côté campagne de l\'île. Réservez une visite guidée de Las Palmas, afin de profiter de la vue panoramique du terrain depuis le sommet.', '396'),
(5, 'assets/img/man-and-woman-standing-on-deck-1287441.jpg', 'Iles Fidji', 'Fidji', 'Pension Complète', 'Hiver', 'Les îles Fidji sont très appréciées. En effet, cet archipel est composé de plus de 300 îles, permettant à chacun de profiter au mieux de cette destination paradisiaque. Les îles Yasawa abritent un nombre incroyable de plages surplombées par des collines luxuriantes.', '1450'),
(6, 'assets/img/light-sea-dawn-landscape-33545.jpg', 'Peter Island', 'Iles Vierges Britanniques', 'Demi Pension', 'Eté ', 'Réputée pour ses plages isolées, Peter Island est une île privée qui offre des paysages incroyables par son propriétaire. Nommé à deux reprises comme étant l’un des meilleurs endroits où passer des vacances de rêve dans le monde par le magazine \"Conde Nast Traveler\".', '1028'),
(7, 'assets/img/brown-on-seashore-near-mountain-1007657.jpg', 'Costa Rica', 'Costa Rica ', 'Demi Pension', 'Eté ', 'Le Costa Rica est un paradis tropical luxuriant situé en Amérique Centrale, entouré d’une part par la mer des Caraïbes et d’autre part par l’Océan Pacifique. Ce pays authentique a su préserver sa beauté naturelle.  Le Costa Rica a un petit goût de revenez-y !\r\n\r\n', '800');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
