-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : sql301.infinityfree.com
-- Généré le :  ven. 16 fév. 2024 à 16:23
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP :  7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `if0_34526240_test`
--

-- --------------------------------------------------------

--
-- Structure de la table `commandeparspiece`
--

CREATE TABLE `commandeparspiece` (
  `nommagasin` varchar(20) NOT NULL,
  `datedecommande` varchar(30) NOT NULL,
  `nombredepiece` int(5) NOT NULL,
  `nomclient` varchar(30) NOT NULL,
  `prenomclient` varchar(30) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `datedereception` varchar(50) NOT NULL,
  `num` varchar(20) NOT NULL,
  `nomproduit` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commandeparspiece`
--

INSERT INTO `commandeparspiece` (`nommagasin`, `datedecommande`, `nombredepiece`, `nomclient`, `prenomclient`, `adresse`, `datedereception`, `num`, `nomproduit`) VALUES
('hoodbites', '20-10-23', 6, 'Skander', 'Saouchi', 'Sidi amar', '2023-10-17', '35928564', 'Chocolate cookies');

-- --------------------------------------------------------

--
-- Structure de la table `commandesnrml`
--

CREATE TABLE `commandesnrml` (
  `nommagasin` varchar(20) NOT NULL,
  `datedecommande` varchar(30) NOT NULL,
  `hauteuretage1` int(100) NOT NULL,
  `diameteretage1` int(100) NOT NULL,
  `pour` varchar(20) NOT NULL,
  `nombredeperson` int(5) NOT NULL,
  `gout` varchar(20) NOT NULL,
  `ecrire` varchar(100) NOT NULL,
  `photodeecrire` varchar(100) NOT NULL,
  `nomclient` varchar(30) NOT NULL,
  `prenomclient` varchar(30) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `datedereception` varchar(50) NOT NULL,
  `num` varchar(20) NOT NULL,
  `nomproduit` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commandesnrml`
--

INSERT INTO `commandesnrml` (`nommagasin`, `datedecommande`, `hauteuretage1`, `diameteretage1`, `pour`, `nombredeperson`, `gout`, `ecrire`, `photodeecrire`, `nomclient`, `prenomclient`, `adresse`, `datedereception`, `num`, `nomproduit`) VALUES
('halima', '30-07-23', 0, 0, 'mariage', 5, 'Citron', 'dfg', 'inst.jpg', 'sdfg', 'sdf', '2345', '2023-07-07', '23456', ''),
('halima', '30-07-23', 0, 0, 'anniversaire', 0, 'banana', '678', 'inst.png', 'skander', 'saouchi', 'fghj', '2023-07-20', '456789', ''),
('amina?nomproduit=Min', '19-10-23', 0, 0, 'fÃªtes', 12, 'Fraise', 'Vive ilc', '', 'Skander', 'Saouchi', 'Ffff', '2023-10-22', '3333', '');

-- --------------------------------------------------------

--
-- Structure de la table `commandesper`
--

CREATE TABLE `commandesper` (
  `nommagasin` varchar(20) NOT NULL,
  `datedecommande` varchar(30) NOT NULL,
  `nombreetage` int(4) NOT NULL,
  `hauteuretage1` int(100) NOT NULL,
  `diameteretage1` int(100) NOT NULL,
  `hauteuretage2` int(100) NOT NULL,
  `diameteretage2` int(100) NOT NULL,
  `hauteuretage3` int(100) NOT NULL,
  `diameteretage3` int(100) NOT NULL,
  `hauteuretage4` int(100) NOT NULL,
  `diameteretage4` int(100) NOT NULL,
  `pour` varchar(20) NOT NULL,
  `nombredeperson` int(5) NOT NULL,
  `gout` varchar(20) NOT NULL,
  `photodemodel` varchar(100) NOT NULL,
  `ecrire` varchar(100) NOT NULL,
  `photodeecrire` varchar(100) NOT NULL,
  `nomclient` varchar(30) NOT NULL,
  `prenomclient` varchar(30) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `datedereception` varchar(50) NOT NULL,
  `num` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commandesper`
--

INSERT INTO `commandesper` (`nommagasin`, `datedecommande`, `nombreetage`, `hauteuretage1`, `diameteretage1`, `hauteuretage2`, `diameteretage2`, `hauteuretage3`, `diameteretage3`, `hauteuretage4`, `diameteretage4`, `pour`, `nombredeperson`, `gout`, `photodemodel`, `ecrire`, `photodeecrire`, `nomclient`, `prenomclient`, `adresse`, `datedereception`, `num`) VALUES
('', '29-07-23', 1, 0, 0, 0, 0, 0, 0, 0, 0, 'anniversaire', 4, 'Fraise', 'tÃ©lÃ©chargement (4).jpg', '4', 'tÃ©lÃ©chargement (4).jpg', '4', '4', '4', '2023-07-07', ''),
('', '29-07-23', 1, 0, 0, 0, 0, 0, 0, 0, 0, 'anniversaire', 0, 'banana', '', '', '', '', '', '', '', ''),
('', '29-07-23', 2, 0, 0, 0, 0, 0, 0, 0, 0, 'anniversaire', 0, 'banana', '', '', '', '', '', '', '', ''),
('', '29-07-23', 1, 0, 0, 0, 0, 0, 0, 0, 0, 'anniversaire', 0, 'banana', '', '', '', '', '', '', '', ''),
('', '29-07-23', 2, 5, 5, 5, 5, 0, 0, 0, 0, 'anniversaire', 0, 'banana', '', '', '', '', '', '', '', ''),
('', '29-07-23', 2, 8, 8, 0, 0, 0, 0, 0, 0, 'anniversaire', 0, 'banana', '', '', '', '', '', '', '', ''),
('', '29-07-23', 1, 6, 6, 0, 0, 0, 0, 0, 0, 'anniversaire', 66, 'banana', 'IMG_20230725_202733.jpg', 'H', 'Screenshot_20230726-022814.png', 'Skander', 'Hh', 'Sidiamar', '2023-07-31', ''),
('', '29-07-23', 1, 3, 3, 0, 0, 0, 0, 0, 0, 'mariage', 65, 'Citron', 'Screenshot_20230725-222555.png', 'Ggg', '', 'skander', 'hh', 'Hh', '2023-07-31', ''),
('', '29-07-23', 1, 4, 4, 0, 0, 0, 0, 0, 0, 'anniversaire', 0, 'banana', 'tÃ©lÃ©chargement (4).jpg', '5', '', '5', '5', '5', '2023-07-01', ''),
('', '29-07-23', 1, 7, 8, 0, 0, 0, 0, 0, 0, 'couple', 9, 'Fraise', 'tÃ©lÃ©chargement (4).jpg', 'dfghj', '', 'jyu', 'kli', 'k', '2023-07-07', ''),
('', '29-07-23', 1, 98, 78, 0, 0, 0, 0, 0, 0, 'anniversaire', 0, 'banana', 'tÃ©lÃ©chargement (4).jpg', '', '', 'h', 'h', '', '', ''),
('', '29-07-23', 1, 5, 5, 0, 0, 0, 0, 0, 0, 'mariage', 0, 'pÃªche', 'tÃ©lÃ©chargement (4).jpg', 'dfghjk', '', 'skander', 'saouchi', 'dfghjk', '2023-07-31', '888'),
('', '29-07-23', 1, 5, 5, 0, 0, 0, 0, 0, 0, 'anniversaire', 0, 'banana', '', '', '', 'amar', 'saouchi', 'sididamara', '2023-07-15', '2345678907'),
('', '29-07-23', 1, 5, 5, 0, 0, 0, 0, 0, 0, 'anniversaire', 5, 'banana', 'Screenshot_20230725-222555.png', 'F', '', 'Y', 'Y', 'F', '2023-07-18', '33'),
('', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', '', '', '', '', '', '', '', ''),
('', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', '', '', '', '', '', '', '', ''),
('ali', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', '', '', '', '', '', '', '', ''),
('ali', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', '', '', '', '', '', '', '', ''),
(' t', '29-07-23', 1, 5, 5, 0, 0, 0, 0, 0, 0, 'mariage', 0, 'Fraise', 'Screenshot_20230725-222555.png', '', 'IMG_20230725_202733.jpg', 'Hahah', 'Jjj', 'Hbakay', '2023-07-31', '36524'),
(' halima', '29-07-23', 1, 3, 3, 0, 0, 0, 0, 0, 0, 'mariage', 6, 'banana', 'Screenshot_20230725-222555.png', '', '', 'Hju', 'Jk', 'Hj', '2023-07-23', '69'),
('0', '29-07-23', 1, 8, 9, 0, 0, 0, 0, 0, 0, 'anniversaire', 0, 'banana', '', '', '', '8', '9', '9', '2023-07-07', '9'),
('halima', '30-07-23', 1, 8, 9, 0, 0, 0, 0, 0, 0, 'anniversaire', 0, 'banana', '1.png', '9', '', 'fghj', 'ghj', 'erty', '2023-07-21', '56'),
('halima', '30-07-23', 1, 0, 0, 0, 0, 0, 0, 0, 0, 'anniversaire', 0, 'banana', '', '', '', '', '', '', '', ''),
('t', '30-07-23', 1, 7, 8, 0, 0, 0, 0, 0, 0, 'couple', 9, 'banana', '1.png', '', '', 'jkk', 'lp', 'fghj', '2023-07-15', '678'),
('amina', '19-10-23', 1, 7, 8, 0, 0, 0, 0, 0, 0, 'anniversaire', 4, 'Fraise', '', 'vive ilc', '', 'skander', 'saouchi', 'sidi amar ', '2023-10-21', '2345');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `nom` varchar(20) NOT NULL,
  `nomproduit` varchar(30) NOT NULL,
  `adresse` varchar(60) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `img` varchar(30) NOT NULL,
  `prix` varchar(20) NOT NULL,
  `cake` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`nom`, `nomproduit`, `adresse`, `telephone`, `img`, `prix`, `cake`) VALUES
('iskander', 'Cakee', ' Annaba', '066666', 'inbound352717444.jpg', '90', ''),
('iskander', 'Cake', ' Annaba', '07777777', 'inbound1943236207.jpg', '100', '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `nom` varchar(20) NOT NULL,
  `motpass` varchar(20) NOT NULL,
  `inst` varchar(200) NOT NULL,
  `fb` varchar(200) NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`nom`, `motpass`, `inst`, `fb`, `logo`) VALUES
('amina', '1234', 'https://instagram.com/iam_ghd?igshid=OGQ5ZDc2ODk2ZA==', 'https://www.facebook.com/profile.php?id=100075142882207&mibextid=9R9pXO', '13048eddce23741748a4605fbcc89f6c.jpg'),
('iskander', 'ss', '', '', ''),
('iskander', '1234', '', '', ''),
('hoodbites', 'hoodbites1234', 'https://www.instagram.com/hooodbites/?utm_source=ig_web_button_share_sheet&igshid=ODE2OTA4Y2Y1MQ==', '', 'received_6659488560837059.jpeg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
