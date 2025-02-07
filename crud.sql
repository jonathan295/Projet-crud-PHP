-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 07 fév. 2025 à 09:35
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `crud`
--

-- --------------------------------------------------------

--
-- Structure de la table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `salary` int(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employees`
--

INSERT INTO `employees` (`id`, `name`, `username`, `sex`, `address`, `phone`, `salary`, `password`) VALUES
(1, 'Roland Mendel', '', '', 'C/ Araquil, 67, Madrid', 0, 5000, ''),
(2, 'Victoria Ashworth', '', '', '35 King George, London', 0, 6500, ''),
(3, 'Martin Blank', '', '', '25, Rue Lauriston, Paris', 0, 8000, ''),
(10, 'Liana Miharisoa', 'liana', 'F', 'IAH 104 B Avaratsena', 338585995, 20000, 'mih13soa'),
(11, 'Liana Miotisoa', 'mioty', 'F', 'sme que li20', 33587201, 4000, 'liana');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
