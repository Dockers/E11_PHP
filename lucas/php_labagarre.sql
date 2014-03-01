-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Mer 26 Février 2014 à 13:38
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
-- Structure de la table `clubs`
--

CREATE TABLE IF NOT EXISTS `clubs` (
  `id_club` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant du club',
  `email_club` varchar(45) NOT NULL,
  `password_club` varchar(45) NOT NULL,
  `nom_club` varchar(55) NOT NULL COMMENT 'nom du club',
  `annee_club` int(4) NOT NULL,
  `ville_club` varchar(55) NOT NULL,
  `sport_club` varchar(45) NOT NULL,
  `images_club` text,
  PRIMARY KEY (`id_club`),
  UNIQUE KEY `email_club_UNIQUE` (`email_club`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `clubs`
--

INSERT INTO `clubs` (`id_club`, `email_club`, `password_club`, `nom_club`, `annee_club`, `ville_club`, `sport_club`, `images_club`) VALUES
(1, 'test@test.fr', 'test', 'club1', 1930, 'Montreuil', 'test', '1418374_240410762783621_2076519400_n.jpg'),
(2, 'etet@zzg.fr', 'rgrg', 'club2', 1900, 'Paris', 'boxe', NULL),
(3, 'lalala@lalala.fr', 'erg', 'club3', 1908, 'Lille', 'Karaté', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `entraineurs`
--

CREATE TABLE IF NOT EXISTS `entraineurs` (
  `id_entraineur` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant entraineur',
  `nom_entraineur` varchar(55) NOT NULL COMMENT 'nom entraineur',
  `prenom_entraineur` varchar(55) NOT NULL COMMENT 'prénom entraineur',
  `email_entraineur` varchar(45) NOT NULL,
  `password_entraineur` varchar(45) NOT NULL,
  `sexe_entraineur` tinyint(1) NOT NULL COMMENT '0=femme\n1=homme',
  `codepostal_entraineur` int(5) NOT NULL,
  `naissance_entraineur` date NOT NULL,
  `statut_entraineur` varchar(45) NOT NULL,
  `sport_entraineur` varchar(45) NOT NULL,
  `diplome_entraineur` varchar(45) DEFAULT NULL,
  `club_entraineur` int(11) NOT NULL,
  `palmares_entraineur` text,
  `images_entraineur` text,
  `videos_entraineur` text,
  `boxeurs_entraineur` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_entraineur`),
  UNIQUE KEY `email_entraineur_UNIQUE` (`email_entraineur`),
  KEY `FK_boxeur_idx` (`boxeurs_entraineur`),
  KEY `FK_club_idx` (`club_entraineur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `entraineurs`
--

INSERT INTO `entraineurs` (`id_entraineur`, `nom_entraineur`, `prenom_entraineur`, `email_entraineur`, `password_entraineur`, `sexe_entraineur`, `codepostal_entraineur`, `naissance_entraineur`, `statut_entraineur`, `sport_entraineur`, `diplome_entraineur`, `club_entraineur`, `palmares_entraineur`, `images_entraineur`, `videos_entraineur`, `boxeurs_entraineur`) VALUES
(1, 'test', 'test', 'test@test.fr', 'test', 1, 93100, '2014-02-07', 'test', 'test', 'Diplome 2', 2, 'test', '1418374_240410762783621_2076519400_n.jpg', '1418374_240410762783621_2076519400_n.jpg', 13),
(2, 'efefezf', 'ezfzef', 'zefze@regrg.rz', 'zrgzrg', 1, 95466, '2014-02-01', 'teh', 'et', 'Diplome 1', 1, 'ergergergergreg', NULL, NULL, 14);

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

CREATE TABLE IF NOT EXISTS `evenements` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant de l''événement',
  `nom_event` varchar(55) NOT NULL COMMENT 'nom de l''événement',
  `date_event` date NOT NULL COMMENT 'date de l''événement',
  `heure_event` int(11) NOT NULL,
  `img_event` text NOT NULL COMMENT 'illustration de l''événement',
  `adresse_event` varchar(45) NOT NULL,
  `codepostal_event` int(5) NOT NULL,
  `description_event` text NOT NULL,
  `lien_event` text NOT NULL,
  `id_manager` int(11) NOT NULL,
  PRIMARY KEY (`id_event`),
  KEY `FK_manager_idx` (`id_manager`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `managers`
--

CREATE TABLE IF NOT EXISTS `managers` (
  `id_managers` int(11) NOT NULL AUTO_INCREMENT,
  `nom_manager` varchar(45) NOT NULL,
  `prenom_manager` varchar(45) NOT NULL,
  `email_manager` varchar(45) NOT NULL,
  `password_manager` varchar(45) NOT NULL,
  `sexe_manager` tinyint(1) NOT NULL COMMENT '0=femme\n1=homme',
  `codepostal_manager` int(5) NOT NULL,
  `naissance_manager` date NOT NULL,
  `statut_manager` varchar(45) NOT NULL,
  `evenements_manager` int(3) NOT NULL,
  `experience_manager` int(2) NOT NULL,
  `photos_manager` text,
  PRIMARY KEY (`id_managers`),
  UNIQUE KEY `email_manager_UNIQUE` (`email_manager`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `managers`
--

INSERT INTO `managers` (`id_managers`, `nom_manager`, `prenom_manager`, `email_manager`, `password_manager`, `sexe_manager`, `codepostal_manager`, `naissance_manager`, `statut_manager`, `evenements_manager`, `experience_manager`, `photos_manager`) VALUES
(1, 'mana', 'mana', 'lalala@lalala.fr', 'mana', 0, 65222, '2014-02-12', 'mana', 0, 0, '1418374_240410762783621_2076519400_n.jpg'),
(2, 'test', 'test', 'test@test.fr', 'test', 1, 93100, '2014-02-10', 'test', 0, 0, '1418374_240410762783621_2076519400_n.jpg'),
(3, 'aller', 'victor', 'etet@zzg.fr', 'lalala', 1, 74520, '2014-02-14', 'mana', 0, 0, NULL),
(5, 'test', 'test', 'rg@gr.fr', 'lalala', 1, 74520, '2014-02-12', 'test', 3, 3, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `messagerie`
--

CREATE TABLE IF NOT EXISTS `messagerie` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `auteur_message` int(11) NOT NULL,
  `destinataire_message` int(11) NOT NULL,
  `contenu_message` text NOT NULL,
  `date_message` datetime NOT NULL,
  PRIMARY KEY (`id_message`),
  KEY `FK_auteur_idx` (`auteur_message`),
  KEY `FK_destinataire_sportif_idx` (`destinataire_message`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `sportifs`
--

CREATE TABLE IF NOT EXISTS `sportifs` (
  `id_sportif` int(11) NOT NULL AUTO_INCREMENT,
  `nom_sportif` varchar(45) NOT NULL,
  `prenom_sportif` varchar(45) NOT NULL,
  `email_sportif` varchar(45) NOT NULL,
  `password_sportif` varchar(45) NOT NULL,
  `sexe_sportif` tinyint(1) NOT NULL COMMENT '0 = femme\n1 = homme',
  `codepostal_sportif` int(5) NOT NULL,
  `naissance_sportif` date NOT NULL,
  `statut_sportif` varchar(45) NOT NULL,
  `sport_sportif` varchar(45) NOT NULL,
  `classe_sportif` varchar(45) NOT NULL,
  `poids_sportif` int(3) NOT NULL,
  `taille_sportif` int(3) NOT NULL,
  `club_sportif` int(11) DEFAULT NULL,
  `palmares_sportif` text,
  `lateralite_sportif` tinyint(1) NOT NULL COMMENT '0= droitier\n1= gaucher',
  `victoires_sportif` int(5) DEFAULT NULL,
  `defaites_sportif` int(5) DEFAULT NULL,
  `matchsnuls_sportif` int(5) DEFAULT NULL,
  `images_sportif` text,
  `videos_sportif` text,
  PRIMARY KEY (`id_sportif`),
  UNIQUE KEY `email_sportif_UNIQUE` (`email_sportif`),
  KEY `FK_club_idx` (`club_sportif`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='contient tout les sportifs' AUTO_INCREMENT=23 ;

--
-- Contenu de la table `sportifs`
--

INSERT INTO `sportifs` (`id_sportif`, `nom_sportif`, `prenom_sportif`, `email_sportif`, `password_sportif`, `sexe_sportif`, `codepostal_sportif`, `naissance_sportif`, `statut_sportif`, `sport_sportif`, `classe_sportif`, `poids_sportif`, `taille_sportif`, `club_sportif`, `palmares_sportif`, `lateralite_sportif`, `victoires_sportif`, `defaites_sportif`, `matchsnuls_sportif`, `images_sportif`, `videos_sportif`) VALUES
(11, 'test', 'test', 'test@test.fr', 'test', 1, 93100, '2014-02-11', 'test', 'test', 'Intermédiaire', 70, 180, 3, 'test', 0, 1, 1, 1, '1418374_240410762783621_2076519400_n.jpg', '1418374_240410762783621_2076519400_n.jpg'),
(13, 'test', 'test', 'teseft@test.fr', 'test', 1, 93100, '2014-02-12', 'test', 'test', '', 0, 0, 3, 'test', 0, NULL, NULL, NULL, '1418374_240410762783621_2076519400_n.jpg', '1418374_240410762783621_2076519400_n.jpg'),
(14, 'Ait El Alim', 'Robin', 'robin@test.fr', 'password', 1, 75000, '1990-07-12', 'test', 'boxe', 'Professionnel', 70, 187, 1, 'enorme', 0, 9, 1, 2, NULL, NULL),
(15, 'Ja', 'Quentin', 'quentin@test.fr', 'password', 1, 94000, '1983-06-15', 'test', 'boxe', 'Professionnel', 70, 210, 3, 'test', 0, 10, 1, 7, NULL, NULL),
(16, 'Fayolle', 'Lucas', 'lucas@test.fr', 'password', 1, 75000, '1992-06-10', 'test', 'boxe', 'Intermédiaire', 73, 182, 2, 'test', 0, 7, 2, 2, NULL, NULL),
(17, 'test', 'test', 'etet@zzg.fr', 'test', 1, 94000, '2002-06-13', 'test', 'boxe', 'Professionnel', 40, 187, 3, 'test', 0, 5, 1, 1, NULL, NULL),
(18, 'rrg', 'srg', 'sge@eh.fr', 'thh', 1, 45200, '2014-02-06', 'eqf', 'hsh', 'Débutant', 70, 180, 1, 'th', 0, 0, 0, 0, NULL, NULL),
(19, 'sg', 'sg', 'srh@s.fr', 'dh', 1, 78500, '2014-02-04', 'yrr', 'srg', 'Débutant', 70, 180, 1, 'sge', 0, 1, 0, 1, NULL, NULL),
(20, 'ezg', 'zgr', 'zeg@f.ft', 'af', 1, 45000, '2014-02-13', 'sgr', 'rg', 'Débutant', 70, 180, 1, 'srgsrg', 0, 0, 0, 0, NULL, NULL),
(21, 'rgrg', 'zgz', 'zeg@eg.fr', 'tyyjty', 0, 44444, '2014-02-13', 'tdhh', 'fgsgsg', 'Débutant', 70, 180, 1, 'sdgsg', 0, 0, 0, 0, NULL, NULL),
(22, 'etth', 'eth', 'eth@rth.fr', 'rthrt', 0, 56464, '2014-02-13', 'htrrht', 'rgerg', 'Débutant', 70, 180, 1, 'vdbd', 0, 4, 1, 4, NULL, NULL);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `entraineurs`
--
ALTER TABLE `entraineurs`
  ADD CONSTRAINT `FK_boxeur` FOREIGN KEY (`boxeurs_entraineur`) REFERENCES `sportifs` (`id_sportif`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD CONSTRAINT `FK_manager` FOREIGN KEY (`id_manager`) REFERENCES `managers` (`id_managers`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `messagerie`
--
ALTER TABLE `messagerie`
  ADD CONSTRAINT `FK_auteur_entraineur` FOREIGN KEY (`auteur_message`) REFERENCES `entraineurs` (`id_entraineur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_auteur_manager` FOREIGN KEY (`auteur_message`) REFERENCES `managers` (`id_managers`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_auteur_sportif` FOREIGN KEY (`auteur_message`) REFERENCES `sportifs` (`id_sportif`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_destinataire_entraineur` FOREIGN KEY (`destinataire_message`) REFERENCES `entraineurs` (`id_entraineur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_destinataire_manager` FOREIGN KEY (`destinataire_message`) REFERENCES `managers` (`id_managers`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_destinataire_sportif` FOREIGN KEY (`destinataire_message`) REFERENCES `sportifs` (`id_sportif`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `sportifs`
--
ALTER TABLE `sportifs`
  ADD CONSTRAINT `FK_club` FOREIGN KEY (`club_sportif`) REFERENCES `clubs` (`id_club`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
