-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  ven. 11 déc. 2020 à 17:32
-- Version du serveur :  5.7.28
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tp_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(70) DEFAULT NULL,
  `category` varchar(100) NOT NULL,
  `createdAt` date NOT NULL,
  `modifiedAt` date DEFAULT NULL,
  `content` text NOT NULL,
  `userArticle` int(11) NOT NULL,
  `archive` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_article` (`userArticle`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `title`, `category`, `createdAt`, `modifiedAt`, `content`, `userArticle`, `archive`) VALUES
(1, 'Figurine Neji', 'Naruto', '2020-10-12', '2020-12-10', 'Figurine de 150cm', 1, NULL),
(2, 'Figurine Vegeta', 'DBZ', '2020-12-07', '2020-12-11', 'Figurine de Vegeta de 20cm', 2, NULL),
(3, 'Poster Natsu', 'Fairy Tail', '2020-11-22', '2020-12-05', 'Poster de 150cm', 1, NULL),
(4, 'Livre Kakashi', 'Naruto', '2020-11-23', '2020-11-23', 'Un livre add-on sur l\'univers de Naruto', 1, NULL),
(5, 'Marteau Nicky ', 'Nicky Larson', '2020-11-23', '2020-11-23', 'Le marteau de 20kgs', 2, NULL),
(6, 'Poster Sangoku', 'Dragon Ball', '2020-06-25', '2020-06-25', 'Poster de 30cm de Sangoku', 2, NULL),
(7, 'Figurine Ken', 'Hokuto no Ken', '2020-12-16', '2020-12-04', 'Figurine de Ken de 45cm', 1, NULL),
(8, 'Poster Erza', 'Fairy Tail', '2020-12-11', NULL, 'Poster de 250cm en noir et blanc', 2, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_nom` varchar(30) NOT NULL,
  `user_prenom` varchar(30) NOT NULL,
  `user_pseudo` varchar(30) NOT NULL,
  `user_mdp` varchar(150) NOT NULL,
  `user_created` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `user_nom`, `user_prenom`, `user_pseudo`, `user_mdp`, `user_created`) VALUES
(1, 'bouygues', 'jonathan', 'pistoljo', 'd9ab0d69792b97da79683d1d77e36f90cba884209e004ca2a7dc5f56a40f8d64', '2020-11-17'),
(2, 'jordan', 'michael', 'jojo23', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', '2020-11-21');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`userArticle`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
