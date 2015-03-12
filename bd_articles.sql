-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 12 Mars 2015 à 15:37
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bd_articles`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_articles`
--

CREATE TABLE IF NOT EXISTS `t_articles` (
  `ArticleId` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(25) NOT NULL,
  `PublicationDate` date NOT NULL,
  `State` tinyint(1) NOT NULL,
  `Vignette` varchar(75) NOT NULL,
  `Abstract` longtext NOT NULL,
  `Descriptive` longtext NOT NULL,
  `Image` varchar(75) NOT NULL,
  `AuthorId` int(11) NOT NULL,
  `ValidatorId` int(11) NOT NULL,
  PRIMARY KEY (`ArticleId`,`AuthorId`,`ValidatorId`),
  KEY `fk_T_ARTICLES_T_USERS_idx` (`AuthorId`),
  KEY `fk_T_ARTICLES_T_USERS1_idx` (`ValidatorId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `t_articles`
--

INSERT INTO `t_articles` (`ArticleId`, `Title`, `PublicationDate`, `State`, `Vignette`, `Abstract`, `Descriptive`, `Image`, `AuthorId`, `ValidatorId`) VALUES
(1, 'Test', '2015-02-11', 2, 'Test', 'Hello world blafihweguhweg guwbefgbw gzuwer ger ugethet erwh wethehv ug igerugu heguergu uguerg zergugb urguevb ure', 'TestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTest', '.\\img\\blog-thumb-2.jpg', 11, 13),
(2, 'Test2', '2015-02-27', 1, 'Test2', 'Test2Test2Test2Test2Test2', 'Hello world blafihweguhweg guwbefgbw gzuwer ger ugiberwugue rrgb urwgburebgurhrtdhrt rh er ht rtrth ret', '.\\img\\blog-thumb-1.jpg', 11, 11);

-- --------------------------------------------------------

--
-- Structure de la table `t_articles_of_medias`
--

CREATE TABLE IF NOT EXISTS `t_articles_of_medias` (
  `ArticleId` int(11) NOT NULL,
  `MediaId` int(11) NOT NULL,
  PRIMARY KEY (`ArticleId`,`MediaId`),
  KEY `fk_T_ARTICLES_has_T_MEDIAS_T_MEDIAS1_idx` (`MediaId`),
  KEY `fk_T_ARTICLES_has_T_MEDIAS_T_ARTICLES1_idx` (`ArticleId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_comments`
--

CREATE TABLE IF NOT EXISTS `t_comments` (
  `CommentId` int(11) NOT NULL AUTO_INCREMENT,
  `CommentDate` date NOT NULL,
  `Comment` longtext NOT NULL,
  `UserId` int(11) NOT NULL,
  `ArticleId` int(11) NOT NULL,
  PRIMARY KEY (`CommentId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `t_comments`
--

INSERT INTO `t_comments` (`CommentId`, `CommentDate`, `Comment`, `UserId`, `ArticleId`) VALUES
(1, '2015-03-05', 'test de commentaire', 12, 1),
(2, '2015-03-05', 'ergreag', 11, 2),
(3, '2015-03-05', 'Bonjour', 11, 2),
(4, '2015-03-05', 'reherhet', 11, 1),
(5, '2015-03-05', 'iultl', 11, 1),
(6, '2015-03-05', 'tzjtz', 11, 2),
(7, '2015-03-05', 'ztutzu', 11, 2),
(8, '2015-03-05', 'uuuuuu', 11, 2),
(9, '2015-03-12', 'je suis passer par la PD !!!!', 16, 2),
(10, '2015-03-12', 'lkànlkm', 17, 1),
(11, '2015-03-12', 'Besmir suceur d''avatar', 17, 2),
(12, '2015-03-12', 'je fais un commentaire', 17, 2);

-- --------------------------------------------------------

--
-- Structure de la table `t_keywords`
--

CREATE TABLE IF NOT EXISTS `t_keywords` (
  `KeywordId` int(11) NOT NULL AUTO_INCREMENT,
  `Keyword` varchar(25) NOT NULL,
  PRIMARY KEY (`KeywordId`),
  UNIQUE KEY `Keyword_UNIQUE` (`Keyword`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `t_keywords`
--

INSERT INTO `t_keywords` (`KeywordId`, `Keyword`) VALUES
(3, '3'),
(1, 'test'),
(2, 'test2');

-- --------------------------------------------------------

--
-- Structure de la table `t_keywords_of_articles`
--

CREATE TABLE IF NOT EXISTS `t_keywords_of_articles` (
  `KeywordId` int(11) NOT NULL,
  `ArticleId` int(11) NOT NULL,
  PRIMARY KEY (`KeywordId`,`ArticleId`),
  KEY `fk_T_KEYWORDS_has_T_ARTICLES_T_ARTICLES1_idx` (`ArticleId`),
  KEY `fk_T_KEYWORDS_has_T_ARTICLES_T_KEYWORDS1_idx` (`KeywordId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `t_keywords_of_articles`
--

INSERT INTO `t_keywords_of_articles` (`KeywordId`, `ArticleId`) VALUES
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `t_medias`
--

CREATE TABLE IF NOT EXISTS `t_medias` (
  `MediaId` int(11) NOT NULL AUTO_INCREMENT,
  `MediaType` varchar(20) NOT NULL,
  `Link` varchar(75) NOT NULL,
  PRIMARY KEY (`MediaId`),
  UNIQUE KEY `MediaType_UNIQUE` (`MediaType`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `t_users`
--

CREATE TABLE IF NOT EXISTS `t_users` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(25) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Avatar` varchar(50) NOT NULL,
  `IsAdmin` tinyint(1) NOT NULL,
  `IsModerator` tinyint(1) NOT NULL,
  `BirthDate` date NOT NULL,
  `Password` varchar(40) NOT NULL,
  `JoinDate` date NOT NULL,
  PRIMARY KEY (`UserId`),
  UNIQUE KEY `Email_UNIQUE` (`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `t_users`
--

INSERT INTO `t_users` (`UserId`, `FirstName`, `LastName`, `Email`, `Avatar`, `IsAdmin`, `IsModerator`, `BirthDate`, `Password`, `JoinDate`) VALUES
(11, 'Yannick', 'FAYET', 'yannick.fayet1995@gmail.com', '', 0, 0, '1995-05-26', 'b5463fb74c8e339cb45a8d34f4ebaa2f6810273b', '2015-02-19'),
(12, 'TestAdmin', 'TestAdmin', 'testadmin@gmail.com', '', 1, 0, '2015-02-02', '743139240ff612253817440d98acb2ce7939fbb4', '2015-02-26'),
(13, 'TestModerateur', 'TestModerateur', 'testmoderateur@gmail.com', '', 0, 1, '2015-02-03', '3f7608ae26540977a2cdccc0876ae6b184f019ca', '2015-02-26'),
(14, 'ytrhrt', 'hwrhtrwh', 'ergeg@fdshtr.com', 'img/', 0, 0, '2015-03-12', '448ed7416fce2cb66c285d182b1ba3df1e90016d', '2015-03-05'),
(15, 'rthrtsh', 'sthtsr', 'erghergh@zdtj.com', 'img/Koala.jpg', 0, 0, '2015-03-13', '448ed7416fce2cb66c285d182b1ba3df1e90016d', '2015-03-05'),
(16, 'Besmir', 'Silka', 'besmir.silka@gmail.com', 'img/Koala.jpg', 0, 0, '1994-03-31', '1666d4ccd41e61196e440c5c15029f0babfc0407', '2015-03-12'),
(17, 'Bruno', 'Santos', 'santos.bruno1203@gmail.com', 'img/Koala.jpg', 0, 0, '1996-10-02', '1666d4ccd41e61196e440c5c15029f0babfc0407', '2015-03-12');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `t_articles`
--
ALTER TABLE `t_articles`
  ADD CONSTRAINT `fk_T_ARTICLES_T_USERS` FOREIGN KEY (`AuthorId`) REFERENCES `t_users` (`UserId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_T_ARTICLES_T_USERS1` FOREIGN KEY (`ValidatorId`) REFERENCES `t_users` (`UserId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `t_articles_of_medias`
--
ALTER TABLE `t_articles_of_medias`
  ADD CONSTRAINT `fk_T_ARTICLES_has_T_MEDIAS_T_ARTICLES1` FOREIGN KEY (`ArticleId`) REFERENCES `t_articles` (`ArticleId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_T_ARTICLES_has_T_MEDIAS_T_MEDIAS1` FOREIGN KEY (`MediaId`) REFERENCES `t_medias` (`MediaId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `t_keywords_of_articles`
--
ALTER TABLE `t_keywords_of_articles`
  ADD CONSTRAINT `fk_T_KEYWORDS_has_T_ARTICLES_T_ARTICLES1` FOREIGN KEY (`ArticleId`) REFERENCES `t_articles` (`ArticleId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_T_KEYWORDS_has_T_ARTICLES_T_KEYWORDS1` FOREIGN KEY (`KeywordId`) REFERENCES `t_keywords` (`KeywordId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
