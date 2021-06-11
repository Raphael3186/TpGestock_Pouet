-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 07 mai 2020 à 15:02
-- Version du serveur :  10.4.10-MariaDB
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
-- Base de données :  `gestion_stock`
--
CREATE DATABASE IF NOT EXISTS `gestion_stock` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `gestion_stock`;

-- --------------------------------------------------------

--
-- Structure de la table `logs_connexions`
--

DROP TABLE IF EXISTS `logs_connexions`;
CREATE TABLE IF NOT EXISTS `logs_connexions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int(11) NOT NULL,
  `date_connexion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `connecte` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code_produit` varchar(16) NOT NULL,
  `nom` varchar(64) NOT NULL,
  `detail` text NOT NULL,
  `categorie` varchar(64) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix_achat` float NOT NULL,
  `date_expiration` timestamp NOT NULL DEFAULT current_timestamp(),
  `actif` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `code_produit`, `nom`, `detail`, `categorie`, `quantite`, `prix_achat`, `date_expiration`, `actif`) VALUES
(1, 'B12', 'Produit1', 'Super produit pas cher !!!', 'azerty', 12, 123.99, '2020-03-28 17:48:08', 1),
(2, 'B13', 'Produit2', 'Pas top mais super cher !!!', 'azerty', 33, 123001, '2020-03-28 17:49:44', 1),
(3, 'B14', 'Produit 14', 'Détail du produit', 'cat', 14, 14, '2021-12-31 23:00:00', 1),
(4, 'B15', 'Produit 15', 'Détail du produit', 'cat', 15, 15, '2021-12-31 23:00:00', 0),
(5, 'B16', 'Produit 16', 'Détail du produit', 'cat', 16, 16, '2021-12-31 23:00:00', 0),
(6, 'B17', 'Produit 17', 'Détail du produit', 'cat', 17, 17, '2021-12-31 23:00:00', 1),
(7, 'B18', 'Produit 18', 'Détail du produit', 'cat', 18, 18, '2021-12-31 23:00:00', 1),
(8, 'B19', 'Produit 19', 'Détail du produit', 'cat', 19, 19, '2021-12-31 23:00:00', 1),
(9, 'B20', 'Produit 20', 'Détail du produit', 'cat', 20, 20, '2021-12-31 23:00:00', 1),
(10, 'B21', 'Produit 21', 'Détail du produit', 'cat', 21, 21, '2021-12-31 23:00:00', 1),
(11, 'B22', 'Produit 22', 'Détail du produit', 'cat', 22, 22, '2021-12-31 23:00:00', 1),
(12, 'B23', 'Produit 23', 'Détail du produit', 'cat', 23, 23, '2021-12-31 23:00:00', 1),
(13, 'B24', 'Produit 24', 'Détail du produit', 'cat', 24, 24, '2021-12-31 23:00:00', 1),
(14, 'B25', 'Produit 25', 'Détail du produit', 'cat', 25, 25, '2021-12-31 23:00:00', 1),
(15, 'B26', 'Produit 26', 'Détail du produit', 'cat', 26, 26, '2021-12-31 23:00:00', 1),
(16, 'B27', 'Produit 27', 'Détail du produit', 'cat', 27, 27, '2021-12-31 23:00:00', 1),
(17, 'B28', 'Produit 28', 'Détail du produit', 'cat', 28, 28, '2021-12-31 23:00:00', 1),
(18, 'B29', 'Produit 29', 'Détail du produit', 'cat', 29, 29, '2021-12-31 23:00:00', 1),
(19, 'B30', 'Produit 30', 'Détail du produit', 'cat', 30, 30, '2021-12-31 23:00:00', 1),
(20, 'B31', 'Produit 31', 'Détail du produit', 'cat', 31, 31, '2021-12-31 23:00:00', 1),
(21, 'B32', 'Produit 32', 'Détail du produit', 'cat', 32, 32, '2021-12-31 23:00:00', 1),
(22, 'B33', 'Produit 33', 'Détail du produit', 'cat', 33, 33, '2021-12-31 23:00:00', 1),
(23, 'B34', 'Produit 34', 'Détail du produit', 'cat', 34, 34, '2021-12-31 23:00:00', 1),
(24, 'B35', 'Produit 35', 'Détail du produit', 'cat', 35, 35, '2021-12-31 23:00:00', 1),
(25, 'B36', 'Produit 36', 'Détail du produit', 'cat', 36, 36, '2021-12-31 23:00:00', 1),
(26, 'B37', 'Produit 37', 'Détail du produit', 'cat', 37, 37, '2021-12-31 23:00:00', 1),
(27, 'B38', 'Produit 38', 'Détail du produit', 'cat', 38, 38, '2021-12-31 23:00:00', 1),
(28, 'B39', 'Produit 39', 'Détail du produit', 'cat', 39, 39, '2021-12-31 23:00:00', 1),
(29, 'B40', 'Produit 40', 'Détail du produit', 'cat', 40, 40, '2021-12-31 23:00:00', 1),
(30, 'B41', 'Produit 41', 'Détail du produit', 'cat', 41, 41, '2021-12-31 23:00:00', 1),
(31, 'B42', 'Produit 42', 'Détail du produit', 'cat', 42, 42, '2021-12-31 23:00:00', 1),
(32, 'B43', 'Produit 43', 'Détail du produit', 'cat', 43, 43, '2021-12-31 23:00:00', 1),
(33, 'B44', 'Produit 44', 'Détail du produit', 'cat', 44, 44, '2021-12-31 23:00:00', 1),
(34, 'B45', 'Produit 45', 'Détail du produit', 'cat', 45, 45, '2021-12-31 23:00:00', 1),
(35, 'B46', 'Produit 46', 'Détail du produit', 'cat', 46, 46, '2021-12-31 23:00:00', 1),
(36, 'B47', 'Produit 47', 'Détail du produit', 'cat', 47, 47, '2021-12-31 23:00:00', 1),
(37, 'B48', 'Produit 48', 'Détail du produit', 'cat', 48, 48, '2021-12-31 23:00:00', 1),
(38, 'B49', 'Produit 49', 'Détail du produit', 'cat', 49, 49, '2021-12-31 23:00:00', 1),
(39, 'B50', 'Produit 50', 'Détail du produit', 'cat', 50, 50, '2021-12-31 23:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `type` varchar(64) NOT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `email`, `mot_de_passe`, `type`, `actif`) VALUES
(1, 'Aumagy', 'Yannick', 'y.aumagy@gmail.com', '10e06b990d44de0091a2113fd95c92fc905166af147aa7632639c41aa7f26b1620c47443813c605b924c05591c161ecc35944fc69c4433a49d10fc6b04a33611', 'admin', 1),
(2, 'Martin', 'Alexandre', 'almartin86@yahoo.fr', '10e06b990d44de0091a2113fd95c92fc905166af147aa7632639c41aa7f26b1620c47443813c605b924c05591c161ecc35944fc69c4433a49d10fc6b04a33611', 'guest', 1),
(4, 'Navarro', 'Krettelle', 'k.navarro@wanadoo.fr', '10e06b990d44de0091a2113fd95c92fc905166af147aa7632639c41aa7f26b1620c47443813c605b924c05591c161ecc35944fc69c4433a49d10fc6b04a33611', 'client', 1),
(5, 'Duff', 'Fred', 'frederic_duffau@yahoo.fr', '10e06b990d44de0091a2113fd95c92fc905166af147aa7632639c41aa7f26b1620c47443813c605b924c05591c161ecc35944fc69c4433a49d10fc6b04a33611', 'client', 1),
(6, 'tset', 'test', 'test@test.fr', '10e06b990d44de0091a2113fd95c92fc905166af147aa7632639c41aa7f26b1620c47443813c605b924c05591c161ecc35944fc69c4433a49d10fc6b04a33611', 'admin', 1),
(7, 'test', 'test', 'test@test.net', '10e06b990d44de0091a2113fd95c92fc905166af147aa7632639c41aa7f26b1620c47443813c605b924c05591c161ecc35944fc69c4433a49d10fc6b04a33611', 'admin', 0),
(8, 'du', 'fr', 'frdu@gmail.fr', 'eb7358959eafbed60584065677eb1f82cf57678b649dbebb7d325b694b497723d25f888aab3cc73b497145163f236ec330e464f06d69f2f770d276a27e587388', 'admin', 1),
(9, 'toto', 'toto', 'toto@toto.to', '10e06b990d44de0091a2113fd95c92fc905166af147aa7632639c41aa7f26b1620c47443813c605b924c05591c161ecc35944fc69c4433a49d10fc6b04a33611', 'admin', 1),
(10, 'tretre', 'tretre', 'tre@tre.tr', 'fd873c27451274ebde3ffd0de4d1b7ca126e936ab1bfa7f0820881e79d37efdf99726514266aeb6fcdff8420992461d911ec3797ae79cbceb535281674a5e490', 'guest', 1),
(11, 'ert', 'ert', 'ert@ert.rt', '1a62e1be291047f522aa10c006bbd81a77a82c44223e84ebdcbdc67f057b6f163e137fe0e3fd60693636c1673db4b7b143669b872f8ade93eff5f1fbc7f3bc5f', 'client', 1),
(12, 'wxcv', 'wxcv', 'wxcv@wxcv.wx', '2e3718cb951ca446523defb7ce7de7051ea580313159586129b4d20d24da420428236d1f4077209e9520bb8ca215a673f823c5b62f66201001d28a4b83a1581c', 'admin', 0),
(13, 'reza', 'reza', 'reaz@reaz.re', '2a962aae40625d227479b93b3af75475162a03289183757337ab21f0bbbc79603da38abdc1c0c70f20397d0e47e7a15993390726ca4f020be7dde4e865b59899', 'guest', 0),
(14, 'jhgf', 'jhgf', 'jhgf@jhgf.jh', '3dfabf60581a6596de8db214f8ac308b471933dd7ebfb45cd3692002253fe63f880631e3760d2ee6d4e4d7f7d08ab435d782acc30c89680b683cb544ffa69af8', 'admin', 0),
(15, 'tyui', 'tyui', 'tyui@tyui.ty', '0326aa9eed5d325e03bb6bfecc8493cc3c779570241d7c16e6377fbe51547c0abfd73efda391dd2e07c71330cef41fb44fd692e812670e7c893f1d4cea31e7e7', 'admin', 0),
(16, 'aqw', 'aqw', 'aqw@aqw.aq', 'f079488acdc20784852f24f9117b3506a572bab309e7a255958a818899d6a2b1fa6e2369fcd5216dcbabfee9f948ba0fc9ced54abaeabc099ba0a5a03d3d36c9', 'admin', 0);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `logs_connexions`
--
ALTER TABLE `logs_connexions`
  ADD CONSTRAINT `logs_connexions_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
