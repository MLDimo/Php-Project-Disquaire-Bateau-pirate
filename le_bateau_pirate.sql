-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 23 oct. 2020 à 13:22
-- Version du serveur :  5.7.30
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `le_bateau_pirate`
--

-- --------------------------------------------------------

--
-- Structure de la table `Commentaire`
--

CREATE TABLE `Commentaire` (
  `id` int(11) NOT NULL,
  `disques` int(11) NOT NULL,
  `com` varchar(100) NOT NULL,
  `note` int(5) NOT NULL,
  `nom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Disques`
--

CREATE TABLE `Disques` (
  `id` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `img` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Disques`
--

INSERT INTO `Disques` (`id`, `prix`, `nom`, `description`, `img`) VALUES
(1, 2, 'Damso', 'Son nom est un acronyme signifiant « Qui Aime Like Follow ». Cette expression est souvent utilisée par Damso, et ce, depuis ses débuts. ', '1.jpg'),
(2, 2, 'Pop Smoke', 'Shoot for the Stars, Aim for the Moon est le premier album studio du rappeur américain Pop Smoke, et premier projet posthume suite à son meurtre suite à une invasion de domicile le 19 février 2020.\r\n', '2.jpg'),
(3, 2, 'Skendgo x Am', 'Skengdo & AM sont un duo de rap britannique de Brixton, Londres. Ils sont tous deux membres du groupe de forage britannique et du gang présumé, 410. Le groupe est connu pour avoir des conflits avec les Harlem Spartans, basés à Kennington et à Moscou17.\r\n', '3.jpeg'),
(4, 2, 'Mafia K1Fry', 'Ce mini-album ou EP de neuf titres, est justement le fruit d’une opportunité, celle apportée par Yezi L’escroc, rappeur qu’on entend sur le titre « Show Bizness » sur O’riginal Mc’s sur une mission d’Ideal J.', '4.jpg'),
(5, 2, 'IAM', 'L\'album a été enregistré en partie à New York, aux États-Unis, avec des influences de RZA, membre du Wu-Tang Clan. Une bonne partie des morceaux a été retravaillée ensuite à Paris, où quelques nouveaux titres ont également fait leur apparition.', '5.jpg'),
(6, 2, 'Eminem', 'Infinite est le premier album studio du rappeur américain Eminem, sorti le 12 novembre 1996 sur le label Web Entertainment. L\'album a été enregistré dans le studio de Jeff et Mark Bass de leur label Bassmint.', '6.jpg'),
(7, 2, 'Booba', 'Lors de sa première semaine d\'exploitation, l\'album connait un faible démarrage avec 17 540 exemplaires, un chiffre très en dessous des attentes de la maison de disques du rappeur. Malgré une sortie en demi-teinte, l\'album finira par dépasser la barre des 100 000 exemplaires vendus.\r\n\r\n', '7.jpg'),
(8, 3000, 'Martin', 'Premier album de cette légende du rap EU il a su faire ses preuves. Comme dirait le journaliste Joseph : \"c\'est un bon\"', '8.jpeg'),
(9, 2, 'King louie', '2èmee Mixtape du rappeur King louie, un album axé street ou les codes de la drill sont sublimé !', '9.jpg'),
(10, 2, 'Fonky Family', 'L\'album Marginale Musique sort le 9 janvier 2006, il s\'agit du troisième album de la FF. Celui-ci se classe directement numéro un des ventes le jour de sa sortie et permet à la FF, d\'obtenir un disque d\'or.', '10.jpg'),
(11, 1500, 'Ritchy', 'Or noir est le premier album studio du rappeur français Kaaris sorti le 21 octobre 2013. L\'album s\'écoule à 19 000 exemplaires la première semaine. ', '11.jpg'),
(12, 2, 'Lunatic', 'Lunatic est le cinquième album studio du rappeur français Booba, sorti le 22 novembre 2010 sur Tallac Records, et distribué par Because Music. Le titre reprend le nom de l\'ancien groupe de Booba, Lunatic.\r\n', '12.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE `niveau` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `niveau`
--

INSERT INTO `niveau` (`id`, `nom`) VALUES
(1, 'Admin'),
(2, 'Visiteur');

-- --------------------------------------------------------

--
-- Structure de la table `Reservation`
--

CREATE TABLE `Reservation` (
  `id` int(11) NOT NULL,
  `nom` int(11) NOT NULL,
  `disques` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `niveau` int(11) NOT NULL,
  `nom` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Commentaire`
--
ALTER TABLE `Commentaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IX_NOM` (`nom`),
  ADD KEY `IX_DISQUES` (`disques`);

--
-- Index pour la table `Disques`
--
ALTER TABLE `Disques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `niveau`
--
ALTER TABLE `niveau`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Reservation`
--
ALTER TABLE `Reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IX_NOM` (`nom`),
  ADD KEY `IX_DISQUES` (`disques`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IX_NIVEAU` (`niveau`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Commentaire`
--
ALTER TABLE `Commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Disques`
--
ALTER TABLE `Disques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `niveau`
--
ALTER TABLE `niveau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `Reservation`
--
ALTER TABLE `Reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Commentaire`
--
ALTER TABLE `Commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`nom`) REFERENCES `utilisateur` (`id`),
  ADD CONSTRAINT `commentaire_ibfk_2` FOREIGN KEY (`disques`) REFERENCES `Disques` (`id`);

--
-- Contraintes pour la table `Reservation`
--
ALTER TABLE `Reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`nom`) REFERENCES `utilisateur` (`id`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`disques`) REFERENCES `Disques` (`id`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`niveau`) REFERENCES `niveau` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
