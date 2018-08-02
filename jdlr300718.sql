-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 02 Août 2018 à 16:43
-- Version du serveur :  5.7.22-0ubuntu0.17.10.1
-- Version de PHP :  7.1.17-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `jdlr300718`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `mdp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `login`, `mdp`) VALUES
(1, '1dedd59c120d19a24adf23e518792b4a57b06b50', '1dedd59c120d19a24adf23e518792b4a57b06b50');

-- --------------------------------------------------------

--
-- Structure de la table `formulaire`
--

CREATE TABLE `formulaire` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `formulaire`
--

INSERT INTO `formulaire` (`id`, `name`, `mail`, `msg`) VALUES
(1, 'TOTO', 'toto@toto.com', 'nghghtyt'),
(2, 'test', 'test@test.fr', 'testeerh'),
(3, '7845', 'toto@toto.com', 'rerere'),
(4, 'TOTO', 'toto@toto.com', 'rgregregreg'),
(5, 'fdfdfd', 'jiji@iii.fr', 'sdsdsds');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `name_view` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`id`, `name_view`, `img`) VALUES
(1, 'aboutme', '../images/about-img.jpg'),
(2, 'experiences', '../images/experience-img.jpg'),
(3, 'education', '../images/education-img.jpg'),
(4, 'testimonial', '../images/quotes-bg.jpg'),
(5, 'contact', '../images/contact-img.jpg'),
(6, 'home', '../images/home-img.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `texte`
--

CREATE TABLE `texte` (
  `id` mediumint(9) NOT NULL,
  `name_view` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `contenu` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `texte`
--

INSERT INTO `texte` (`id`, `name_view`, `type`, `contenu`) VALUES
(1, 'home', 'titre', 'welcome to my website'),
(2, 'home', 'sous_titre', 'Hello, I am <strong>JDLR</strong> currently based in Saint Chaptes city.'),
(3, 'home', 'content', 'Donec auctor arcu at efficitur lacinia. Praesent bibendum efficitur ipsum, et mattis tellus interdum in. Ut a dictum purus. Vestibulum non pellentesque felis, sed dignissim urna. Vestibulum id accumsan quam.'),
(4, 'home', 'button', 'Get Started'),
(5, 'navbar', 'titre', 'JDLR'),
(6, 'navbar', 'menu1', 'Home'),
(7, 'navbar', 'menu2', 'About Me'),
(8, 'navbar', 'menu3', 'Experiences'),
(9, 'navbar', 'menu4', 'Testimonial'),
(10, 'navbar', 'menu5', 'Contact'),
(11, 'aboutme', 'titre1', 'Donec auctor'),
(12, 'aboutme', 'sous_titre1', 'Sed vulputate vitae diam quis bibendum'),
(13, 'aboutme', 'content1', 'Phasellus vulputate tellus nec tortor varius elementum. Curabitur at pulvinar ante. Duis dui urna, faucibus eget felis eu, iaculis congue sem. Mauris convallis eros massa.'),
(14, 'aboutme', 'content1_2', 'Quisque viverra iaculis aliquam. Etiam volutpat, justo non aliquam bibendum, sem nibh mollis erat, quis porta odio odio at velit.'),
(15, 'aboutme', 'titre2', 'My Skills'),
(16, 'aboutme', 'sous_titre2', 'Photoshop . HTML CSS JS . Web Design'),
(17, 'aboutme', 'content2_1', '<strong>Frontend Design</strong>'),
(18, 'aboutme', 'value2_1', '90%'),
(19, 'aboutme', 'content2_2', '<strong>Backend processing</strong>'),
(20, 'aboutme', 'value2_2', '70%'),
(21, 'aboutme', 'content2_3', '<strong>HTML5 & CSS3</strong>'),
(22, 'aboutme', 'value2_3', '80%'),
(23, 'service', 'titre1', 'Interface Design'),
(24, 'service', 'content1', 'Phasellus vulputate tellus nec tortor varius elementum. Curabitur at pulvinar ante.'),
(25, 'service', 'titre2', 'Media Strategy'),
(26, 'service', 'content2', 'Curabitur at pulvinar ante. Duis dui urna, faucibus eget felis eu, iaculis congue sem.'),
(27, 'service', 'titre3', 'Mobile App'),
(28, 'service', 'content3', 'Mauris convallis eros massa, vitae euismod arcu tempus ut. Quisque viverra iaculis.'),
(29, 'service', 'titre4', 'Coding'),
(30, 'service', 'content4', 'Mauris convallis eros massa, vitae euismod arcu tempus ut. Quisque viverra iaculis.'),
(31, 'experiences', 'titre', 'My Experiences'),
(32, 'experiences', 'sous_titre', 'Previous companies and my tasks'),
(33, 'experiences', 'content1', 'Graphic Designer <small>2014 Jul - 2015 Sep</small>'),
(34, 'experiences', 'sous_content1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'),
(35, 'experiences', 'content2', 'Web Designer <small>2015 Oct - 2017 Jan</small>'),
(36, 'experiences', 'sous_content2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'),
(37, 'education', 'titre', 'My Education'),
(38, 'education', 'sous_titre', 'In cursus orci non ipsum gravida dignissim'),
(39, 'education', 'content1', 'Master in Design <small>2012 Jan - 2014 May</small>'),
(40, 'education', 'sous_content1', 'Etiam iaculis elit in mauris ullamcorper auctor. Proin a sapien id orci ullamcorper dignissim eu in neque. '),
(41, 'education', 'content2', 'Bachelor of Arts <small>2008 May - 2011 Dec</small>'),
(42, 'education', 'sous_content2', 'Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.'),
(43, 'testimonial', 'titre', 'Proin lobortis eu diam et facilisis. Fusce nisi nibh, molestie in vestibulum quis, auctor et orci.'),
(44, 'testimonial', 'sous_titre', 'Curabitur at pulvinar ante. Duis dui urna, faucibus eget felis eu, iaculis congue sem.'),
(45, 'contact', 'titre', 'Say Hello'),
(46, 'contact', 'sous_titre', 'Integer ut consectetur est. In cursus orci non ipsum gravida dignissim.'),
(47, 'footer', 'titre', 'Copyright &copy; 2016 Your Company\r\n\r\nDesign:'),
(48, 'footer', 'sous_titre', 'templatemo'),
(49, 'contact', 'titre2', 'Visit my office'),
(50, 'contact', 'sous_titre2', '456 New Street 22000, New York City, USA'),
(51, 'contact', 'titre3', 'Contact.'),
(52, 'contact', 'sous_titre3_1', ' 01-0110-0220'),
(53, 'contact', 'sous_titre3_3', 'hello@company.co'),
(54, 'contact', 'sous_titre3_2', 'mailto:hello@company.co'),
(55, 'contact', 'sous_titre3_4', 'company.co'),
(56, 'footer', 'lien', 'http://www.google.com/+templatemo');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formulaire`
--
ALTER TABLE `formulaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `texte`
--
ALTER TABLE `texte`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `formulaire`
--
ALTER TABLE `formulaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `texte`
--
ALTER TABLE `texte`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
