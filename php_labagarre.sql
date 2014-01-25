-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Sam 25 Janvier 2014 à 19:34
-- Version du serveur: 5.5.20
-- Version de PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `php_labagarre`
--

-- --------------------------------------------------------

--
-- Structure de la table `boxeurs`
--

CREATE TABLE IF NOT EXISTS `boxeurs` (
  `id_boxeur` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant du boxeur',
  `nom_boxeur` varchar(55) NOT NULL COMMENT 'nom du boxeur',
  `prenom_boxeur` varchar(55) NOT NULL COMMENT 'prénom du boxeur',
  `datenaissance_boxeur` date NOT NULL COMMENT 'date de naissance',
  `age_boxeur` int(2) NOT NULL COMMENT 'âge du boxeur',
  `photo_boxeur` text COMMENT 'photo du boxeur',
  `poids_boxeur` int(3) NOT NULL COMMENT 'poids du boxeur',
  `email_boxeur` varchar(55) NOT NULL COMMENT 'email du boxeur',
  PRIMARY KEY (`id_boxeur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `boxeurs`
--

INSERT INTO `boxeurs` (`id_boxeur`, `nom_boxeur`, `prenom_boxeur`, `datenaissance_boxeur`, `age_boxeur`, `photo_boxeur`, `poids_boxeur`, `email_boxeur`) VALUES
(1, 'glo', 'vic', '2014-01-02', 0, 'photo', 55, 'glogowski.victor@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `clubs`
--

CREATE TABLE IF NOT EXISTS `clubs` (
  `id_club` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant du club',
  `nom_club` varchar(55) NOT NULL COMMENT 'nom du club',
  `logo_club` text NOT NULL COMMENT 'logo du club',
  PRIMARY KEY (`id_club`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `entraineurs`
--

CREATE TABLE IF NOT EXISTS `entraineurs` (
  `id_entraineur` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant entraineur',
  `nom_entraineur` varchar(55) NOT NULL COMMENT 'nom entraineur',
  `prenom_entraineur` varchar(55) NOT NULL COMMENT 'prénom entraineur',
  `datenaissance_entraineur` date NOT NULL,
  `age_entraineur` int(2) NOT NULL COMMENT 'âge entraineur',
  `photo_entraineur` text COMMENT 'photo entraineur',
  PRIMARY KEY (`id_entraineur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

CREATE TABLE IF NOT EXISTS `evenements` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant de l''événement',
  `nom_event` varchar(55) NOT NULL COMMENT 'nom de l''événement',
  `date_event` datetime NOT NULL COMMENT 'date de l''événement',
  `img_event` text NOT NULL COMMENT 'illustration de l''événement',
  PRIMARY KEY (`id_event`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
