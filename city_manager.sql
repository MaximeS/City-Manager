-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 03 Novembre 2014 à 10:06
-- Version du serveur :  5.6.20
-- Version de PHP :  5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `city_manager`
--
CREATE DATABASE IF NOT EXISTS `city_manager` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `city_manager`;

-- --------------------------------------------------------

--
-- Structure de la table `city`
--

CREATE TABLE IF NOT EXISTS `City` (
  `City_id` int(11) NOT NULL,
  `Gold` int(11) DEFAULT NULL,
  `Soldier` int(11) DEFAULT NULL,
  `Factory` int(5) DEFAULT NULL,
  `Barracks` int(5) DEFAULT NULL,
  `Spy_Barracks` int(5) DEFAULT NULL,
  `Wall` int(11) DEFAULT NULL,
  `Gold_s` int(5) DEFAULT NULL,
  `Soldier_s` int(5) DEFAULT NULL,
  `User_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `User` (
  `User_id` int(11) NOT NULL,
  `Pseudo` varchar(20) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `city`
--
ALTER TABLE `City`
 ADD PRIMARY KEY (`City_id`), ADD KEY `User_id` (`User_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `User`
 ADD PRIMARY KEY (`User_id`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `city`
--
ALTER TABLE `City`
ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
