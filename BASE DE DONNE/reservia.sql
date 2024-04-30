-- phpMyAdmin SQL Dump
-- version 5.2.1deb1ubuntu0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 30 avr. 2024 à 20:42
-- Version du serveur : 8.0.35-0ubuntu0.23.04.1
-- Version de PHP : 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `reservia`
--

-- --------------------------------------------------------

--
-- Structure de la table `Hotel`
--

CREATE TABLE `Hotel` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` bigint NOT NULL,
  `label_image` varchar(1000) NOT NULL,
  `etoils` int NOT NULL,
  `description` text NOT NULL,
  `ville` varchar(255) NOT NULL,
  `continent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `Hotel`
--

INSERT INTO `Hotel` (`id`, `title`, `price`, `label_image`, `etoils`, `description`, `ville`, `continent`) VALUES
(1, 'Auberge la Cannebière', 25, 'marcus-loke-WQJvWU_HZFo-unsplash.jpg', 3, '            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias perspiciatis expedita non at, molestiae eius eos doloremque. Architecto, cum doloribus.\n', 'Marseille', 'France'),
(2, ' Hôtel du port', 52, 'fred-kleber-gTbaxaVLvsg-unsplash.jpg', 4, 'Chambre avec un lit superposé avec une fenêtre vu sur la ville.            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias perspiciatis expedita non at, molestiae eius eos doloremque. Architecto, cum doloribus.\n', 'Marseille', 'France'),
(3, 'Hôtel Les mouettes', 76, 'reisetopia-B8WIgxA_PFU-unsplash.jpg', 4, '\"Chambre avec un lit superposé avec une fenêtre vu sur la ville.            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias perspiciatis expedita non at, molestiae eius eos doloremque. Architecto, cum doloribus.\n', 'Marseille', 'France'),
(4, 'Auberge de la mer', 46, 'annie-spratt-Eg1qcIitAuA-unsplash.jpg', 3, '            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias perspiciatis expedita non at, molestiae eius eos doloremque. Architecto, cum doloribus.\n', 'Marseille', 'France'),
(5, 'Auberge Le Panier', 23, 'nicate-lee-kT-ZyaiwBe0-unsplash.jpg', 4, '            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias perspiciatis expedita non at, molestiae eius eos doloremque. Architecto, cum doloribus.\n', 'Marseille', 'Fance'),
(6, ' Hôtel chez Amina', 96, 'febrian-zakaria-M6S1WvfW68A-unsplash.jpg', 5, '            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias perspiciatis expedita non at, molestiae eius eos doloremque. Architecto, cum doloribus.\n', 'Marseille', 'France'),
(7, 'Hôtel Le soleil du matin', 128, 'emile-guillemot-Bj_rcSC5XfE-unsplash.jpg', 5, '            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias perspiciatis expedita non at, molestiae eius eos doloremque. Architecto, cum doloribus.\n', 'Marseille', 'France'),
(8, 'Au coeur de l\'eau Chambres d\'hôtes', 110, 'aw-creative-VGs8z60yT2c-unsplash.jpg', 4, '            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias perspiciatis expedita non at, molestiae eius eos doloremque. Architecto, cum doloribus.\n', 'Marseille', 'France'),
(9, 'Hôtel Tout bleu et Blanc', 100, 'febrian-zakaria-sjvU0THccQA-unsplash.jpg', 5, '            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias perspiciatis expedita non at, molestiae eius eos doloremque. Architecto, cum doloribus.\n', 'Marseille', 'France'),
(10, 'Relais des plateaux & spa - Ivato International Aeroport', 103, 'releas.jpg', 4, 'Situated within 5 km from Ivato Airport, Relais des Plateaux features restaurant, tropical garden and 24-hour front desk', 'Antananarivo', 'Madagasikara'),
(11, 'Hotel Sakamanga', 40, 'sakamanga.jpg', 1, 'Featuring free WiFi and an outdoor pool, Hotel Sakamanga offers accommodation in central Antananarivo, 2 km from Lake Anosy. Guests can enjoy the on-site bar. Free private parking is available on...', 'Antananarivo', 'Madagasikara'),
(12, 'Ibis Antananarivo Ankorondrano', 96, 'Ibis.jpg', 3, 'Located in the heart of Ankorodrano’s business district, Hotel Ibis Antananarivo Madagascar is 10 minutes\' drive from Avenue de l\'Indépendance. It offers a terrace overlooking an outdoor swimming...', 'Antananarivo', 'Madagasikara'),
(13, 'Sans Christobal Boutique Hotel', 79, 'Sans Christobal Boutique Hotel.jpg', 3, 'Boasting a garden, terrace, bar and free WiFi, San Cristobal is situated in Antananarivo, 4 km from Antananarivo Airport.', 'Antananarivo', 'Madagasikara'),
(14, 'ambatobe', 98, 'Ambatobe.jpg', 3, 'Situated in Antananarivo and only 7.5 km from Soarano Station, Appartements - Le Paradisier Ambatobe offers accommodation with garden views, free WiFi and free private parking.', 'Antananarivo', 'Madagascar'),
(15, 'Le louvre & spa', 150, 'louvre.jpg', 4, 'Set in Antananarivo and with Monument Aux Morts Antananarivo reachable within 1.6 km, Le Louvre Hotel & Spa offers express check-in and check-out, non-smoking rooms, a restaurant, free WiFithroughout...', 'Antananarivo', 'Madagasikara'),
(16, 'Maison d\'Hotel Mandrosoa', 60, 'pavillon2.jpg', 4, 'Set just 1.4 km from Monument Aux Morts Antananarivo, Maison d\'Hôtes Mandrosoa features accommodation in Antananarivo with access to pool with a view, a garden, as well as a shared kitchen.', 'Antananarivo', 'Madagascar'),
(17, 'la pavillon', 120, 'pvaillon.jpg', 2, 'Situated in Antananarivo, 1.3 km from Monument Aux Morts Antananarivo, Le Pavillon de l\'Emyrne features accommodation with a garden, free private parking, a terrace and a shared lounge.', 'Antananarivo', 'Madagasikara'),
(18, 'Hotel Malagasy', 50, 'sakamanga2.jpg', 3, 'hotel de luxe ,spetialite malagasy', 'Antananarivo', 'Madagasikara');

-- --------------------------------------------------------

--
-- Structure de la table `Images`
--

CREATE TABLE `Images` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `continent` varchar(255) NOT NULL,
  `label_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `Images`
--

INSERT INTO `Images` (`id`, `name`, `ville`, `continent`, `label_image`) VALUES
(1, 'Vieux Port', 'Marseille', 'France', 'reno-laithienne-QUgJhdY5Fyk-unsplash.jpg'),
(2, 'Fort de Pomègues', 'Marseille', 'France', 'paul-hermann-QFTrLdQIRhI-unsplash.jpg'),
(3, 'Parc National des Calanques', 'Marseille', 'France', 'kilyan-sockalingum-NR8-cBCN3aI-unsplash.jpg'),
(4, 'Notre-Dame-de-la-Garde', 'Marseille', 'France', 'florian-wehde-xW9e8gdotxI-unsplash.jpg'),
(5, 'Île du Frioul', 'Marseille', 'France', 'kevin-hikari-rV_Qd1l-VXg-unsplash.jpg'),
(6, 'Parc Longchamp', 'Marseille', 'France', 'lena-paulin-wH2-EJoDcV0-unsplash.jpg'),
(7, 'sakamanga', 'Antananrivo', 'Madagasikara', 'sakamanga.jpg'),
(8, 'Sans Christobal Boutique Hotel2', 'Antananrivo', 'Madagasikara', 'Sans Christobal Boutique Hotel2.jpg'),
(9, 'Ibis', 'Antananrivo', 'Madagasikara', 'Ibis.jpg'),
(10, 'ambatobe', 'Antananrivo', 'Madagasikara', 'ambatobe2.jpg'),
(11, 'ibis', 'Antananrivo', 'Madagasikara', 'ibis2.jpg'),
(12, 'louvre', 'Antananrivo', 'Madagasikara', 'louvre2.jpg'),
(13, 'pavillon', 'Antananrivo', 'Madagasikara', 'pavillon2.jpg'),
(14, 'releas', 'Antananrivo', 'Madagasikara', 'releas2.jpg'),
(15, 'sakamanga', 'Antananrivo', 'Madagasikara', 'sakamanga2.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int NOT NULL,
  `dateIn` date NOT NULL,
  `dateOut` date NOT NULL,
  `user_id` int NOT NULL,
  `hotel_id` int NOT NULL,
  `Totals` bigint NOT NULL,
  `stay` int NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `dateIn`, `dateOut`, `user_id`, `hotel_id`, `Totals`, `stay`, `status`) VALUES
(1, '2024-04-02', '2024-04-04', 1, 1, 5555, 22, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `tel`) VALUES
(1, 'Najoro', 'Najoro@gmail.com', 'Najoro', '0343105882'),
(5, 'Mamy', 'Mamy@gmail.com', 'mamy', '0322252565'),
(9, 'naina', 'naina@gmail.com', 'naina', '0232425415'),
(10, 'lanto', 'lanto@gmail.com', 'lanto', '0343636525'),
(11, 'Mamero', 'Mamero@gmail.com', 'Mamero', '0349797036'),
(12, 'RAKOTOBE Manampisoa Mbola', 'MbolaRakotobeManampisoa@gmail.com', 'manampisoa', '0322625488');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Hotel`
--
ALTER TABLE `Hotel`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Images`
--
ALTER TABLE `Images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user_id`),
  ADD KEY `hotel` (`hotel_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Hotel`
--
ALTER TABLE `Hotel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `Images`
--
ALTER TABLE `Images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `hotel` FOREIGN KEY (`hotel_id`) REFERENCES `Hotel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
