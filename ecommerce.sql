-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 10 Juin 2016 à 01:30
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ecommerce`
--
CREATE DATABASE IF NOT EXISTS `ecommerce` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ecommerce`;

-- --------------------------------------------------------

--
-- Structure de la table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_CAC89EACF85E0677` (`username`),
  UNIQUE KEY `UNIQ_CAC89EACE7927C74` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`, `roles`) VALUES
(1, 'terry', 'JktfsB+hMlV7aTrbbYSqx/OJIZld2XMAUruGHZKpn5SuWAzOtkn0OZfehP0FnAqAOeuQojuRfpianJ4lm5pQxQ==', 'terry.fourge@epitech.eu', 'ROLE_ADMIN'),
(2, 'manon', '5hFNBhsPfYb8YdZ5qwKGVlu+jegvDKDkCKCgLu8g6p2XummKtKyi3hok80L1TLoEh5DChzMas3pyTc8suMuM0Q==', 'manon.noblet@epitech.eu', 'ROLE_ADMIN'),
(3, 'samuel', 'DtDUsez4qg4pJ1AYSGOKMULcUXkDwkc2pQjmJbIsnpmrC59FEpkCd+zvF3iVJ+IagEbjgpiiaENf5Hcfm2Bepg==', 'samuel.vilar@epitech.eu', 'ROLE_ADMIN'),
(4, 'lysa', 'pW0Uo+OVxLAg99wIR+0gfg8llrs+1kO740VlL/e2qFHs043e6rBNz1E47BNmzDAS92bFDQ0xVx9gnfT0vvNZ3A==', 'lysa.fichot@epitech.eu', 'ROLE_ADMIN'),
(5, 'user', 'V9MkGSiL8wwuEnLgZx55d3Eym+/iY9del2jbeamZ6dsUSRnBUZbbLmapKstOqh6l3wxjk3hxjNbwIVU8o3f1Zg==', 'user@epitech.eu', 'ROLE_USER');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_parent` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `id_parent`, `name`, `created_at`) VALUES
(1, NULL, 'Ordinateur', '2016-06-10 01:18:57'),
(2, NULL, 'Telephone', '2016-06-10 01:18:57'),
(3, NULL, 'TV', '2016-06-10 01:18:57'),
(4, 1, 'PC portable', '2016-06-10 01:18:57'),
(5, 3, 'TV 3d', '2016-06-10 01:18:57');

-- --------------------------------------------------------

--
-- Structure de la table `features`
--

CREATE TABLE IF NOT EXISTS `features` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_derived_id` int(11) DEFAULT NULL,
  `feature_value_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_BFC0DC13EFA3A2F0` (`product_derived_id`),
  KEY `IDX_BFC0DC1380CD149D` (`feature_value_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `feature_names`
--

CREATE TABLE IF NOT EXISTS `feature_names` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `feature_values`
--

CREATE TABLE IF NOT EXISTS `feature_values` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `feature_name_id` int(11) DEFAULT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_43B2AA48400007DF` (`feature_name_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `medias`
--

CREATE TABLE IF NOT EXISTS `medias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `product_derived_id` int(11) DEFAULT NULL,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_12D2AF8112469DE2` (`category_id`),
  KEY `IDX_12D2AF81EFA3A2F0` (`product_derived_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Contenu de la table `medias`
--

INSERT INTO `medias` (`id`, `category_id`, `product_derived_id`, `filename`, `type`, `created_at`, `path`) VALUES
(1, 1, NULL, 'cat1', 'image/png', '2016-06-10 01:18:57', '0c864919fb88a906b561b6a5005a47d7.png'),
(2, 2, NULL, 'cat2', 'image/png', '2016-06-10 01:18:57', '0c864919fb88a906b561b6a5005a47d7.png'),
(3, 3, NULL, 'cat3', 'image/png', '2016-06-10 01:18:57', '0c864919fb88a906b561b6a5005a47d7.png'),
(4, 4, NULL, 'cat4', 'image/png', '2016-06-10 01:18:57', '0c864919fb88a906b561b6a5005a47d7.png'),
(5, 5, NULL, 'cat5', 'image/png', '2016-06-10 01:18:57', '0c864919fb88a906b561b6a5005a47d7.png');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Structure de la table `products_derived`
--

CREATE TABLE IF NOT EXISTS `products_derived` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `name_derived` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `weight` double NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A684F65B4584665A` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Structure de la table `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`category_id`),
  KEY `IDX_CDFC73564584665A` (`product_id`),
  KEY `IDX_CDFC735612469DE2` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `features`
--
ALTER TABLE `features`
  ADD CONSTRAINT `FK_BFC0DC1380CD149D` FOREIGN KEY (`feature_value_id`) REFERENCES `feature_values` (`id`),
  ADD CONSTRAINT `FK_BFC0DC13EFA3A2F0` FOREIGN KEY (`product_derived_id`) REFERENCES `products_derived` (`id`);

--
-- Contraintes pour la table `feature_values`
--
ALTER TABLE `feature_values`
  ADD CONSTRAINT `FK_43B2AA48400007DF` FOREIGN KEY (`feature_name_id`) REFERENCES `feature_names` (`id`);

--
-- Contraintes pour la table `medias`
--
ALTER TABLE `medias`
  ADD CONSTRAINT `FK_12D2AF81EFA3A2F0` FOREIGN KEY (`product_derived_id`) REFERENCES `products_derived` (`id`),
  ADD CONSTRAINT `FK_12D2AF8112469DE2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Contraintes pour la table `products_derived`
--
ALTER TABLE `products_derived`
  ADD CONSTRAINT `FK_A684F65B4584665A` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Contraintes pour la table `product_category`
--
ALTER TABLE `product_category`
  ADD CONSTRAINT `FK_CDFC735612469DE2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_CDFC73564584665A` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
