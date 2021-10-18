-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  lun. 18 oct. 2021 à 10:48
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `JasonDB`
--

-- --------------------------------------------------------

--
-- Structure de la table `personnage`
--

CREATE TABLE `personnage` (
  `idPersonnage` int(11) NOT NULL,
  `nomPersonnage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personnage`
--

INSERT INTO `personnage` (`idPersonnage`, `nomPersonnage`) VALUES
(16, 'Eleftheria'),
(17, 'Gennadios'),
(18, 'Lysimachos'),
(19, 'Charalampos'),
(20, 'Acaste'),
(21, 'actor'),
(22, 'Admète'),
(23, 'Amphiaraos'),
(24, 'Amphidamas'),
(25, 'Amphion'),
(26, 'Ancée'),
(27, 'Ancée'),
(28, 'Argos'),
(29, 'Argos'),
(30, 'Arios'),
(31, 'Ascalaphe'),
(32, 'Asclépios'),
(33, 'Astérion'),
(34, 'Astérios'),
(35, 'Atalante'),
(36, 'Augias'),
(37, 'Autolycos'),
(38, 'Boutès'),
(39, 'Calaïs'),
(40, 'Canthos'),
(41, 'Castor'),
(43, 'Cénée'),
(44, 'Céphée'),
(45, 'Clyménos'),
(46, 'Clytios'),
(47, 'Eurytos'),
(48, 'Coronos'),
(49, 'Deucalion'),
(50, 'Échion'),
(51, 'Erginos'),
(52, 'Éribotès'),
(53, 'Éthalidès'),
(54, 'Euphémos'),
(55, 'Euryale'),
(56, 'Eurydamas'),
(57, 'Eurymédon'),
(58, 'Eurytion'),
(59, 'Eurytos'),
(60, 'Héraclès'),
(61, 'Hippalcimos'),
(62, 'Hylas'),
(63, 'Ialmène'),
(64, 'Idas'),
(65, 'Idmon'),
(66, 'Iolaos'),
(67, 'Iphiclès'),
(68, 'Iphiclos'),
(69, 'Iphis'),
(70, 'Iphitos'),
(71, 'Lacoon'),
(72, 'Laërte'),
(73, 'Léitos'),
(74, 'Léodocos'),
(75, 'Lyncée'),
(76, 'Méléagre'),
(77, 'Ménétios'),
(78, 'Mopsos'),
(79, 'Nauplios'),
(80, 'Nélée'),
(81, 'Nestor'),
(82, 'Oïlée'),
(83, 'Orphée'),
(84, 'Palémon '),
(85, 'Pélée'),
(86, 'Pénélée'),
(87, 'Périclyménos'),
(88, 'Phanos'),
(89, 'Phalère'),
(90, 'Philoctète'),
(91, 'Phlias'),
(92, 'Phocos'),
(93, 'Pirithoos'),
(94, 'Péas'),
(95, 'Pollux'),
(96, 'Polyphème'),
(97, 'Priasos'),
(98, 'Staphylos'),
(99, 'Talaos'),
(100, 'Télamon'),
(101, 'Thésée'),
(102, 'Tiphys'),
(103, 'Tydée'),
(104, 'Zétès'),
(105, 'jason');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `personnage`
--
ALTER TABLE `personnage`
  ADD PRIMARY KEY (`idPersonnage`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `personnage`
--
ALTER TABLE `personnage`
  MODIFY `idPersonnage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
