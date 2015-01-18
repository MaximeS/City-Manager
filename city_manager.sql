-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Dim 18 Janvier 2015 à 15:56
-- Version du serveur: 5.6.11
-- Version de PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `city_manager`
--
CREATE DATABASE IF NOT EXISTS `city_manager` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `city_manager`;

-- --------------------------------------------------------

--
-- Structure de la table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `City_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) DEFAULT NULL,
  `life` int(11) NOT NULL,
  `Gold` int(11) DEFAULT NULL,
  `Soldiers` int(11) DEFAULT NULL,
  `Factory` int(5) DEFAULT NULL,
  `Barracks` int(5) DEFAULT NULL,
  `Spy_Barracks` int(5) DEFAULT NULL,
  `Wall` int(11) DEFAULT NULL,
  `Gold_s` float DEFAULT NULL,
  `Soldiers_s` float DEFAULT NULL,
  `User_id` int(11) DEFAULT NULL,
  `lastco` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`City_id`),
  KEY `city_ibfk_1` (`User_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Contenu de la table `city`
--

INSERT INTO `city` (`City_id`, `Name`, `life`, `Gold`, `Soldiers`, `Factory`, `Barracks`, `Spy_Barracks`, `Wall`, `Gold_s`, `Soldiers_s`, `User_id`, `lastco`) VALUES
(22, 'HawkPolis', 500, 257304, 0, 5, 1, 0, 1, 3.2, 0, 1, '2015-01-18 15:44:58'),
(24, 'Hawktown', 3000, 2147475967, 0, 2, 5, 0, 6, 4, 0, 1, '2015-01-18 13:27:56'),
(28, 'jhon', 0, 285, 0, 1, 1, 0, 0, 2, 0, 14, '2015-01-17 17:33:07'),
(29, 'bordeaux', 500, 79969, 79314, 0, 0, 0, 1, 1, 1, 14, '2015-01-18 15:41:21'),
(30, 'testopolis', 500, 625, 111, 2, 3, 0, 0, 4, 1, 1, '2015-01-17 17:54:47'),
(31, 'test', 2000, 5879, 10331, 5, 3, 0, 3, 32, 8, 1, '2015-01-17 19:10:49'),
(32, 'wxc', 5500, 41624, 132625, 8, 6, 0, 10, 256, 64, 1, '2015-01-18 13:26:53'),
(33, 'az', 1000, 434, 163, 2, 2, 0, 1, 0.4, 0.04, 1, '2015-01-18 15:48:35');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `Message_id` int(11) NOT NULL AUTO_INCREMENT,
  `Object` varchar(20) DEFAULT NULL,
  `Content` varchar(500) DEFAULT NULL,
  `User_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Message_id`),
  KEY `message_user` (`User_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `News_id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) DEFAULT NULL,
  `Content` varchar(500) DEFAULT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`News_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`News_id`, `Title`, `Content`, `Date`) VALUES
(1, 'destruction', 'un météore est tombé sur une ville !', '2015-01-17 16:17:14'),
(2, 'Hawktown : améliorat', 'La caserne a été améliorée', '2015-01-17 18:37:43'),
(3, 'Hawktown : amélioration', 'La caserne a été améliorée !', '2015-01-17 18:39:15'),
(4, 'Hawktown : amélioration', 'Les remparts ont été améliorée !', '2015-01-17 18:40:21'),
(5, 'azertown : rasée', 'La ville a été rasée par son propriétaire', '2015-01-17 18:43:32'),
(6, 'nouveau joueur : a', 'Un nouveau joueur a rejoins l''aventure !', '2015-01-17 18:48:56'),
(7, 'Hawktown : amélioration', 'L''usine a été améliorée !', '2015-01-17 19:03:43'),
(8, 'test : amélioration', 'L''usine a été améliorée !', '2015-01-17 19:05:59'),
(9, 'test : amélioration', 'La caserne a été améliorée !', '2015-01-17 19:06:08'),
(10, 'test : amélioration', 'Les remparts ont été améliorés !', '2015-01-17 19:06:12'),
(11, 'test : amélioration', 'L''usine a été améliorée !', '2015-01-17 19:07:27'),
(12, 'test : amélioration', 'L''usine a été améliorée !', '2015-01-17 19:07:56'),
(13, 'test : amélioration', 'La caserne a été améliorée !', '2015-01-17 19:07:59'),
(14, 'test : amélioration', 'Les remparts ont été améliorés !', '2015-01-17 19:08:02'),
(15, 'test : amélioration', 'L''usine a été améliorée !', '2015-01-17 19:08:05'),
(16, 'nouvelle ville : wxc', 'Une nouvelle ville a été créée !', '2015-01-17 19:11:00'),
(17, 'wxc : amélioration', 'L''usine a été améliorée !', '2015-01-17 19:11:06'),
(18, 'wxc : amélioration', 'La caserne a été améliorée !', '2015-01-17 19:11:10'),
(19, 'wxc : amélioration', 'Les remparts ont été améliorés !', '2015-01-17 19:15:16'),
(20, 'wxc : amélioration', 'L''usine a été améliorée !', '2015-01-18 13:25:38'),
(21, 'wxc : amélioration', 'L''usine a été améliorée !', '2015-01-18 13:25:42'),
(22, 'wxc : amélioration', 'La caserne a été améliorée !', '2015-01-18 13:25:45'),
(23, 'wxc : amélioration', 'Les remparts ont été améliorés !', '2015-01-18 13:25:49'),
(24, 'wxc : amélioration', 'Les remparts ont été améliorés !', '2015-01-18 13:25:53'),
(25, 'wxc : amélioration', 'L''usine a été améliorée !', '2015-01-18 13:25:55'),
(26, 'wxc : amélioration', 'L''usine a été améliorée !', '2015-01-18 13:25:59'),
(27, 'wxc : amélioration', 'Les remparts ont été améliorés !', '2015-01-18 13:26:05'),
(28, 'wxc : amélioration', 'La caserne a été améliorée !', '2015-01-18 13:26:09'),
(29, 'wxc : amélioration', 'L''usine a été améliorée !', '2015-01-18 13:26:12'),
(30, 'wxc : amélioration', 'La caserne a été améliorée !', '2015-01-18 13:26:15'),
(31, 'wxc : amélioration', 'Les remparts ont été améliorés !', '2015-01-18 13:26:19'),
(32, 'wxc : amélioration', 'Les remparts ont été améliorés !', '2015-01-18 13:26:22'),
(33, 'wxc : amélioration', 'Les remparts ont été améliorés !', '2015-01-18 13:26:25'),
(34, 'wxc : amélioration', 'Les remparts ont été améliorés !', '2015-01-18 13:26:28'),
(35, 'wxc : amélioration', 'Les remparts ont été améliorés !', '2015-01-18 13:26:31'),
(36, 'wxc : amélioration', 'Les remparts ont été améliorés !', '2015-01-18 13:26:36'),
(37, 'wxc : amélioration', 'L''usine a été améliorée !', '2015-01-18 13:26:39'),
(38, 'wxc : amélioration', 'La caserne a été améliorée !', '2015-01-18 13:26:45'),
(39, 'wxc : amélioration', 'La caserne a été améliorée !', '2015-01-18 13:26:49'),
(40, 'wxc : amélioration', 'L''usine a été améliorée !', '2015-01-18 13:26:53'),
(41, 'Hawktown : amélioration', 'Les remparts ont été améliorés !', '2015-01-18 13:27:56'),
(42, 'nouvelle ville : az', 'Une nouvelle ville a été créée !', '2015-01-18 13:29:47'),
(43, 'az : amélioration', 'La caserne a été améliorée !', '2015-01-18 13:31:03'),
(44, 'az : amélioration', 'L''usine a été améliorée !', '2015-01-18 13:35:35'),
(45, 'bordeaux : amélioration', 'Les remparts ont été améliorés !', '2015-01-18 15:41:25'),
(46, 'HawkPolis : amélioration', 'Les remparts ont été améliorés !', '2015-01-18 15:41:42'),
(47, 'az : amélioration', 'Les remparts ont été améliorés !', '2015-01-18 15:48:24'),
(48, 'az : amélioration', 'L''usine a été améliorée !', '2015-01-18 15:48:31'),
(49, 'az : amélioration', 'La caserne a été améliorée !', '2015-01-18 15:48:34');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `User_id` int(11) NOT NULL AUTO_INCREMENT,
  `Pseudo` varchar(20) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`User_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`User_id`, `Pseudo`, `Password`) VALUES
(1, 'hawk', 'ff4e046f2911a0fc854a842464837ace'),
(3, 'OverLord', '13085a63a2b3e4beb7ab10ee395aefe4'),
(14, '33', '182be0c5cdcd5072bb1864cdee4d3d6e'),
(15, 'azer', '13085a63a2b3e4beb7ab10ee395aefe4'),
(16, 'OverLord', 'dd26ea8b2bc48d1b4038b99e4fdf612a'),
(17, 'a', '0cc175b9c0f1b6a831c399e269772661');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`);

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `message_user` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
