-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 03 Juillet 2016 à 23:08
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
  `account_id` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `roles` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_CAC89EACE7927C74` (`email`),
  UNIQUE KEY `UNIQ_CAC89EACF85E0677` (`username`),
  UNIQUE KEY `UNIQ_CAC89EAC9B6B5FBA` (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `accounts`
--

INSERT INTO `accounts` (`id`, `account_id`, `email`, `username`, `password`, `roles`) VALUES
(1, NULL, 'terry.fourge@epitech.eu', 'terry', '$2y$12$/izrgjwaqUnOVQFz4UamX.9.EKwEIc2VnGhlzyoA88f0./LmecqwW', 'a:1:{i:0;s:10:"ROLE_ADMIN";}'),
(2, NULL, 'manon.noblet@epitech.eu', 'manon', '$2y$12$EWqpngxCaIEwxXm4L5rMyOb3NUcxUTO8UwkJpu.Bjsz15mmGiAj7i', 'a:1:{i:0;s:10:"ROLE_ADMIN";}'),
(3, NULL, 'samuel.vilar@epitech.eu', 'samuel', '$2y$12$LXkvYdJVZJ2Lz1PrZN.0/OCLHKVYcWyMUKK7/Y4vGvWdTlzdHNu/G', 'a:1:{i:0;s:10:"ROLE_ADMIN";}'),
(4, NULL, 'lysa.fichot@epitech.eu', 'lysa', '$2y$12$t7skzAznHD1ezoqCrs4./eUrnY7S0AjqdiZwZ/OFN3vH2txu4Sydu', 'a:1:{i:0;s:10:"ROLE_ADMIN";}'),
(5, NULL, 'user@epitech.eu', 'user', '$2y$12$MYZW4X4xKloJyHGeVHXuL.tnXXb/y5WxbiQozhktqT1uqvkdg3y8u', 'a:1:{i:0;s:9:"ROLE_USER";}');

-- --------------------------------------------------------

--
-- Structure de la table `adresses`
--

CREATE TABLE IF NOT EXISTS `adresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) DEFAULT NULL,
  `numero` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code_postal` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `selected` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_EF1925529B6B5FBA` (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idParent` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preview` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `idParent`, `name`, `preview`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Montre', 1, '2016-07-03 23:06:05', '2016-07-03 23:06:05'),
(2, NULL, 'Telephone', 1, '2016-07-03 23:06:05', '2016-07-03 23:06:05'),
(3, NULL, 'TV', 1, '2016-07-03 23:06:05', '2016-07-03 23:06:05'),
(4, NULL, 'Appareil photo', NULL, '2016-07-03 23:06:05', '2016-07-03 23:06:05'),
(5, NULL, 'PC', NULL, '2016-07-03 23:06:05', '2016-07-03 23:06:05'),
(6, 2, 'Smartphone', NULL, '2016-07-03 23:06:05', '2016-07-03 23:06:05'),
(7, 3, 'TV 3d', NULL, '2016-07-03 23:06:05', '2016-07-03 23:06:05');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE IF NOT EXISTS `commandes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adresse_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `package` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shopped` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_35D4282C4DE7DC5C` (`adresse_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `derived_values`
--

CREATE TABLE IF NOT EXISTS `derived_values` (
  `feature_value_id` int(11) NOT NULL,
  `product_derived_id` int(11) NOT NULL,
  PRIMARY KEY (`feature_value_id`,`product_derived_id`),
  KEY `IDX_53044C0080CD149D` (`feature_value_id`),
  KEY `IDX_53044C00EFA3A2F0` (`product_derived_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `features_names`
--

CREATE TABLE IF NOT EXISTS `features_names` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `search` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_903109A12469DE2` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `feature_values`
--

CREATE TABLE IF NOT EXISTS `feature_values` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `featureName_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_43B2AA483E8CA467` (`featureName_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `medias`
--

CREATE TABLE IF NOT EXISTS `medias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_derived_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `filename` int(11) NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_12D2AF81EFA3A2F0` (`product_derived_id`),
  KEY `IDX_12D2AF8112469DE2` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Contenu de la table `medias`
--

INSERT INTO `medias` (`id`, `product_derived_id`, `category_id`, `filename`, `path`, `type`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 0, 'fixtures/swatch.png', 0, '2016-07-03 23:06:05', '2016-07-03 23:06:05'),
(2, NULL, 2, 0, 'fixtures/apple.png', 0, '2016-07-03 23:06:05', '2016-07-03 23:06:05'),
(3, NULL, 3, 0, 'fixtures/tel.png', 0, '2016-07-03 23:06:05', '2016-07-03 23:06:05'),
(4, NULL, 6, 0, 'fixtures/tv4.png', 0, '2016-07-03 23:06:05', '2016-07-03 23:06:05'),
(5, NULL, 7, 0, 'fixtures/ordi.png', 0, '2016-07-03 23:06:05', '2016-07-03 23:06:05'),
(6, 1, NULL, 0, 'fixtures/ordinateur.png', 0, '2016-07-03 23:06:05', '2016-07-03 23:06:05'),
(7, 2, NULL, 0, 'fixtures/asus3.png', 0, '2016-07-03 23:06:05', '2016-07-03 23:06:05'),
(8, 3, NULL, 0, 'fixtures/tv7.png', 0, '2016-07-03 23:06:05', '2016-07-03 23:06:05'),
(9, 4, NULL, 0, 'fixtures/samsung_noir.png', 0, '2016-07-03 23:06:05', '2016-07-03 23:06:05'),
(10, 5, NULL, 0, 'fixtures/Samsung.png', 0, '2016-07-03 23:06:05', '2016-07-03 23:06:05'),
(11, 6, NULL, 0, 'fixtures/tv8.png', 0, '2016-07-03 23:06:05', '2016-07-03 23:06:05');

-- --------------------------------------------------------

--
-- Structure de la table `paniers`
--

CREATE TABLE IF NOT EXISTS `paniers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commande_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `pack` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `productDerived_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4899903610A5E99B` (`productDerived_id`),
  KEY `IDX_4899903682EA2E54` (`commande_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `payement`
--

CREATE TABLE IF NOT EXISTS `payement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `method` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `summary` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `summary`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ASUS G752VT-GC037T', 'L''ordinateur portable ASUS G501VW vous apporte immédiatement toute la puissance dont vous avez besoin au quotidien pour exercer vos talents de gamer. Cet ultraportable est marqué par l''esprit des pc ASUS ROG (Republic Of Gamers) avec son design ultra-mince et soigné. Sa configuration est éprouvée pour garantir un confort d''utilisation et une expérience de jeu optimisés. Son écran 15.6 Full HD délivre un affichage précis, des images extrêmement détaillées et surprenantes de réalisme. Cet ultraportable puissant et performant est prêt à vous offrir ce dont vous aurez besoin pour vivre une grande expérience de jeu grâce à ses innovations technologiques.', 'Design conçu pour les Gamers. Cet ultraportable ASUS G501VW est spécialement conçu pour les gamers. Il possède de nombreuses caractéristiques innovantes et son châssis en aluminium ultra-mince et léger (2 Kg) assure une grande mobilité. Avec 21 mm d''épaisseur, le ROG G501 est l''un des plus minces dans sa catégorie. Son appartenance à la famille Republic Of Gamers est évidente avec sa coque noire et le célèbre logo ROG placé sur une partie d''aluminium brossé et vous aurez plaisir à le transporter partout où que vous allez. Son design ergonomique est conçu intelligemment jusqu''au large clavier rétroéclairé très réactif qui isole parfaitement chaque touche d''un pavé numérique complet. En outre, les touches ZQSD sont spécialement marquées pour facilité leur utilisation pendant les cessions de jeux. Au cœur de cet ultraportable. Le ASUS G501VW assure des performances de pointe éprouvées pour un PC portable. Il est armé jusqu''aux dents avec un processeur Intel® Core™ i7 sur une architecture Skylake avec 4 cœurs. Ce processeur apporte une valeur sûre aux besoins spécifiques des gamers et vous place au centre de l''action. De plus, le processeur Core™ i7 optimise les économies d''énergie sans compromis sur les performances. La carte graphique NVIDIA® GeForce® GTX 960M vous assure des rendus époustouflants où vos jeux s''animent pour vous faire vivre une expérience de jeu inégalée. Cet ordinateur portable est doté d''un disque dur de 1 To pour stocker toutes vos données numériques et d''un SSD de 128 Go pour exécuter plus rapidement le système d''exploitation Windows 10 Home, vos applications et vos jeux. Il dispose d''une mémoire élevée DDR4 de 8 Go pour accéder rapidement à toutes les données de ce pc. Parfaitement ventilé. La technologie améliorée Hyper Cool du ROG G501VW, développé par Asus, vous garantit un refroidissement silencieux et intelligent. Cet ultraportable gamer embarque deux ventilateurs indépendants et un dissipateur de chaleur en cuivre pour une gestion thermique efficace. Cette innovation technologique assur des performances stables, mêmes dans des conditions extrêmes. Le ROG G501VW entre dans la catégorie des portables gamers les plus silencieux du marché malgré son système de refroidissement ultra performant. Il vous assure de rester au frais durant la bataille ! ', 1, '2016-07-03 23:06:05', '2016-07-03 23:06:05'),
(2, 'ASUS ZenBook Pro UX501JW-CN484T', 'La tradition ZENBOOK continue avec cette nouvelle génération. Utilisant un processeur Intel core de dernière génération, ce ZENBOOK UX501JW se pare en plus d’une robe faite d’aluminium. Plus fin et plus léger que ses prédécesseurs, il redéfini encore le concept de finesse à un nouveau niveau. D’une élégance inégalée, ce ZENBOOK UX501JW possède un écran Full HD et une carte graphique NVIDIA dédiée. Couplé à Windows 10, cela en fait l’outil parfait de divertissement, de mobilité mais aussi de travail. Sa connectivité et sa finesse en font un outil polyvalent extrêmement mobile. Enfin, son autonomie de 6 heures* procure une liberté sans faille à son utilisateur.', 'Derrière le nom de code Zenbook UX501JW-CN484T, Asus a conçu un ordinateur polyvalent, compact et rapide. Mais au premier regard, c''est d''abord son look qui marque les esprits. Ultra-fin et très léger (2,13 cm d''épaisseur max. pour 2,06 kg seulement), il est également très moderne avec son capot type ''aluminium brossé''. Les yeux s''attardent ensuite sur son écran Full HD de 15.6 au traitement anti-reflets très pratique pour une utilisation en extérieur. Le roi du multimédia. A l''aise pour le travail, ce Zenbook UX501JW-CN484T d''Asus l''est encore plus avec le divertissement numérique. Son écran à LED rétroéclairé y est pour beaucoup ainsi que sa carte graphique NVIDIA GeForce GTX 960M pour des visuels extraordinaires.\r\n                          Le son n''est pas en reste puisque ce PC intègre 2 haut-parleurs stéréo Bang & Olufsen ICEpower avec la technologie ASUS SonicMaster, soit le top en matière de qualité audio. Les amateurs de photo pourront transférer leurs oeuvres sur l''ordinateur directement à partir de son lecteur de cartes mémoire. ', 1, '2016-07-03 23:06:05', '2016-07-03 23:06:05'),
(3, 'LG 49UF685V', 'Profitez de tous vos divertissements favoris sur ce téléviseur en Ultra HD 4K ! Pour la télévision ou la navigation sur internet ne rognez pas sur la qualité ! L’Ultra Haute Définition associée à l''élégance du design Cinéma Screen vous plonge au cœur d''une expérience visuelle totalement immersive ! ', 'Les téléviseurs LG ULTRA HD 4K donnent vie à chacune des couleurs. Chaque scène se transforme en un paysage à admirer : l''exceptionnelle performance de l''ULTRA Haute Définition résidant dans la dalle IPS 4K permet de délivrer des couleurs réalistes quel que soit l''angle de vision et ce, avec une définition 4 fois supérieure à celle du Full HD.Allumez votre téléviseur LG ULTRA HD et revisitez de chez vous les merveilles de ce monde. Laissez-vous immerger dans un monde d''images incroyablement précises et saisissantes. Autour de la norme 4K\r\n                          Emissions, sport, films…même si les contenus que vous visionnez ne sont pas en résolution 4K, bénéficiez de l''éxeptionnelle qualité d''affichage des téléviseurs LG ULTRA HD. L''upscaler 4K développé par LG transforme en effet une qualité d''image conventionnelle en un résultat extraordinaire. En outre, l''HEVC est le format destiné à devenir le standard en matière de compression vidéo ULTRA HD. Grâce à l''HEVC, bénéficiez de contenus ULTRA HD provenant du web ou d''un périphérique de stockage (tel qu''une clé USB) sans avoir recours à un quelconque appareil supplémentaire\r\n                          Avec un téléviseur SMART TV, un monde nouveau de divertissements s''ouvre à vous. Ce téléviseur vous permet d''ouvrir une interface qui vous donne accès à tout ce vous aimez en un seul clic. Sélectionnez une application, un programme TV, un service de VOD ou un périphérique externe connecté à votre téléviseur, Votre barre de lancement personnalisable devient le point d''accès à l''ensemble de votre divertissement. Un son puissant Ultra Surround.La technologie ULTRA Surround produit un son comme s''il provenait de 7 directions différentes. Le son multi-canal ainsi obtenu immerge le spectateur. Des connectiques pour accroître les capacités de lecture. Une connectique HDMI est essentielle pour profiter au mieux des contenus issus d''appareils externes. Le HDMI est capable de véhiculer un important flux de données vidéo et audio, sans perte de qualité. Et grâce à la fonction SmartShare, naviguez rapidement et facilement à travers les fichiers de vos périphériques compatibles DLNA, ou de vos disques durs externes connectés. ', 1, '2016-07-03 23:06:05', '2016-07-03 23:06:05'),
(4, 'SAMSUNG Galaxy S6 Edge', 'Samsung presente le Galaxy S6 Edge ! Le smartphone qui repousse les limites de vitesse, de puissance et de performances, tout en offrant un design ultra soigné et incurvé !', 'Un design de rêve\r\n                          Le Samsung Galaxy S6 Edge possède des lignes fluides et galbés pour offrir un design soigné. Ses courbes sont sertis avec un effet métal pour lui offrir un aspect chic et sa finesse en font un objet agréable à utiliser et à prendre en main !\r\n                          Samsung Galaxy S6 Edge - Design de reveUne interface qui vous ressemble\r\n                          La nouvelle interface du Galaxy S6 Edge est d''une fluidité à toute épreuve ! Personnalisez le très facilement dans ses moindres détails et profitez de fonctions ergonomiques et intelligentes. Découvrez également un accès innivant à vos contacts et applications favoris grâce à etiquedge et à l''écran latéral !\r\n                          Écran haute définition\r\n                          Le Galaxy S6 Edge est un smartphone pensé pour vous accompagner n''importe où, n''importe quand. Son écran Super Amoled HD 3.6 M de pixels est ultra résistant grâce à son verre deux fois plus résistant Gorilla Glass 4 et vous assure une lisibilité parfaite même en plein soleil !\r\n                          Galaxy S6 Edge - Chargement inductionDeux objectifs 16 Mpx et 5 Mpx\r\n                          Avec son jeu d''objectif 16 Mpx (arrière) et 5 Mpx (avant) le Galaxy S6 Edge immortalisera toutes vos émotions instantanément ! Photos ultra nettes, en plein jour ou dans des conditions très sombres, mais aussi des selfie en panorama, vous permettront de laisser libre court à toute votre imagination.', 1, '2016-07-03 23:06:05', '2016-07-03 23:06:05'),
(5, 'NIKON D3300 18-55 DX VR', 'Le réflex NIKON D3300 est un appareil photo muni d''un zoom de qualité pour des clichés d''une exceptionnelle justesse.', 'Profitez d''un kit avec zoom de grande qualité, idéal pour la photographie classique incluant l''appareil photo D3300 et le zoom ultra-compact 3x AF-S DX NIKKOR 18-55mm f/3.5-5.6G VR. L''objectif fourni  avec cet appareil photo reflex est doté du système de réduction de vibration qui vous permettra de réduire les flous de bougé et d''un mécanisme d''objectif rétractable pour une portabilité encore plus importante.\r\n                          24,2 millions de pixels exploités au maximum\r\n                          Délibérément dépourvu de filtre passe-bas optique, le capteur d''image du Nikon D3300 tirera le meilleur parti de ses 24,2 millions de pixels pour saisir avec une netteté impressionnante les textures les plus détaillées.\r\n                          Des effets spéciaux artistiques\r\n                          Doté de 13 effets spéciaux différents, le D3300 vous permettra d''apporter en toute simplicité une touche artistique à vos photos et vidéos. Il  vous suffira pour cela de sélectionner Effets spéciaux et de choisir l''option que vous souhaitez appliquer avant de prendre votre cliché. Sélectionnez Pop pour éclaircir les couleurs, prenez tout un paysage avec le Panoramique simplifié ou apportez une touche rétro avec l''Effet appareil photo jouet.\r\n                          Un système AF 11 points ultraprécis\r\n                          Même si votre sujet se déplace rapidement ou de manière totalement imprévisible, le D3300 assurera toujours une mise au point appropriée. Le système AF 11 points ultraprécis du Nikon D3300, doté d''un capteur en croix en son centre, verrouille rapidement votre sujet et conserve la mise au point, que celui-ci soit décentré, qu''il se déplace rapidement ou qu''il se comporte de manière totalement imprévisible.\r\n                          Une expérience Full HD\r\n                          Utilisez la fonction D-Movie de l''appareil photo pour réaliser des vidéos dont vous serez fier. Vous pouvez enregistrer des séquences vidéo Full HD extrêmement nettes (1080p), quelle que soit la luminosité, à des cadences allant jusqu''à 50p/60p avec autofocus continu, ce qui vous garantit des scènes d''action fluides, aussi rapides soient-elles.\r\n                          Un grand écran ACL\r\n                          Vous pourrez tout à fait utiliser le D3300 à la manière d''un compact ou d''un smartphone pour photographier ou filmer des scènes à l''aide du grand écran ACL de 7,5 cm (3 pouces). Composez ou visualisez des images et appliquez des effets spéciaux avec une excellente visibilité grâce au grand angle de vue et à la définition de 921 000 pixels.\r\n                          Une prise en main simple et intuitive\r\n                          Accédez aux modes D-Movie et visée écran via des boutons dédiés. Utilisez la commande i, située à l''arrière de l''appareil photo, pour passer outre le menu principal et régler rapidement les paramètres tout en photographiant votre sujet. Lorsque vous vous servez du viseur, vous pouvez choisir entre une interface classique et une interface graphique qui anime les réglages. Vous constatez ainsi plus simplement les modifications apportées.\r\n                          Un viseur optique large et lumineux\r\n                          Le viseur optique lumineux et large du Nikon D3300, vous permettra de prendre aisément les photos au bon moment, lorsqu''il s''agit notamment de sujets distants en mouvement rapide.\r\n                          Un appareil photo compact\r\n                          Pesant seulement 410 g (boîtier uniquement) et muni d''un petit objectif rétractable, le D3300 simplifie plus que jamais le transport d''un reflex numérique. Malgré ses dimensions compactes, sa grande poignée confortable permet de stabiliser l''appareil lorsque vous immortalisez les moments importants, où que ce soit.\r\n                          Un objectif Nikkor\r\n                          Tirez parti des légendaires objectifs NIKKOR au format DX de Nikon, conçus pour exploiter au mieux le nombre élevé de pixels du Nikon D3300. Réalisez des photos et des vidéos aux couleurs vives, aux contrastes saisissants et aux détails nets : utilisez des objectifs à focale fixe lumineux pour des portraits époustouflants, des objectifs micro pour des gros plans en taille réelle ou des téléobjectifs pour obtenir des images parfaitement nettes de sujets distants.', 1, '2016-07-03 23:06:05', '2016-07-03 23:06:05');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Contenu de la table `products_derived`
--

INSERT INTO `products_derived` (`id`, `product_id`, `name_derived`, `price`, `weight`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'ASUS G752VT-GC037T', 999.88, 0.7, 1, '2016-07-03 23:06:05', '2016-07-03 23:06:05'),
(2, 2, 'ASUS ZenBook Pro UX501JW-CN484T', 1999.88, 0.9, 1, '2016-07-03 23:06:05', '2016-07-03 23:06:05'),
(3, 3, 'LG 49UF685V', 2999.88, 1.9, 1, '2016-07-03 23:06:05', '2016-07-03 23:06:05'),
(4, 4, 'SAMSUNG Galaxy S6 Edge Black', 800, 0.4, 1, '2016-07-03 23:06:05', '2016-07-03 23:06:05'),
(5, 4, 'SAMSUNG Galaxy S6 Edge Or', 900, 0.5, 1, '2016-07-03 23:06:05', '2016-07-03 23:06:05'),
(6, 5, 'NIKON D3300 18-55 DX VR', 900, 0.6, 1, '2016-07-03 23:06:05', '2016-07-03 23:06:05');

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
-- Contenu de la table `product_category`
--

INSERT INTO `product_category` (`product_id`, `category_id`) VALUES
(1, 5),
(2, 5),
(3, 3),
(4, 6),
(5, 4);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) DEFAULT NULL,
  `commande_id` int(11) DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `civilite` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D6499B6B5FBA` (`account_id`),
  UNIQUE KEY `UNIQ_8D93D64982EA2E54` (`commande_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `FK_CAC89EAC9B6B5FBA` FOREIGN KEY (`account_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `adresses`
--
ALTER TABLE `adresses`
  ADD CONSTRAINT `FK_EF1925529B6B5FBA` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `FK_35D4282C4DE7DC5C` FOREIGN KEY (`adresse_id`) REFERENCES `adresses` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `derived_values`
--
ALTER TABLE `derived_values`
  ADD CONSTRAINT `FK_53044C00EFA3A2F0` FOREIGN KEY (`product_derived_id`) REFERENCES `products_derived` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_53044C0080CD149D` FOREIGN KEY (`feature_value_id`) REFERENCES `feature_values` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `features_names`
--
ALTER TABLE `features_names`
  ADD CONSTRAINT `FK_903109A12469DE2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `feature_values`
--
ALTER TABLE `feature_values`
  ADD CONSTRAINT `FK_43B2AA483E8CA467` FOREIGN KEY (`featureName_id`) REFERENCES `features_names` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `medias`
--
ALTER TABLE `medias`
  ADD CONSTRAINT `FK_12D2AF8112469DE2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_12D2AF81EFA3A2F0` FOREIGN KEY (`product_derived_id`) REFERENCES `products_derived` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `paniers`
--
ALTER TABLE `paniers`
  ADD CONSTRAINT `FK_4899903682EA2E54` FOREIGN KEY (`commande_id`) REFERENCES `commandes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_4899903610A5E99B` FOREIGN KEY (`productDerived_id`) REFERENCES `products_derived` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `products_derived`
--
ALTER TABLE `products_derived`
  ADD CONSTRAINT `FK_A684F65B4584665A` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `product_category`
--
ALTER TABLE `product_category`
  ADD CONSTRAINT `FK_CDFC735612469DE2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_CDFC73564584665A` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D64982EA2E54` FOREIGN KEY (`commande_id`) REFERENCES `commandes` (`id`),
  ADD CONSTRAINT `FK_8D93D6499B6B5FBA` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
