-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 16 déc. 2021 à 17:26
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `support`
--

-- --------------------------------------------------------

--
-- Structure de la table `account`
--

CREATE TABLE `account` (
                           `id` int(11) NOT NULL,
                           `grade` varchar(6) NOT NULL,
                           `identifiant` varchar(255) NOT NULL,
                           `password` text NOT NULL,
                           `firstname` varchar(255) NOT NULL,
                           `name` varchar(255) NOT NULL,
                           `email` varchar(255) NOT NULL,
                           `color_profil` varchar(6) NOT NULL,
                           `connect` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `account`
--

INSERT INTO `account` (`id`, `grade`, `identifiant`, `password`, `firstname`, `name`, `email`, `color_profil`, `connect`) VALUES
                                                                                                                              (2, 'admin', 'jgenois', '$argon2id$v=19$m=65536,t=4,p=1$UGFlOGxvRndINWhmRUZ4Zw$MxdMw5+UuiwC5ES3kw7NlFbiduysVQWeoKB6IUs/BOA', 'Alexendre', 'genois', 'oidjfs@hotmail.com', 'yellow', 1),
                                                                                                                              (3, 'client', 'ctest', '$argon2id$v=19$m=65536,t=4,p=1$a3FEWDZrUzJzZHFRLkZMNg$BmyhLtYhuBbd2ZekobUp76zhxd9fV3fPKgKV+nqFA84', 'Utilisateur', 'Test', 'user.test@support.com', 'blue', 1),
                                                                                                                              (4, 'admin', 'kjashari', '$argon2id$v=19$m=65536,t=4,p=1$QWdkUzhZalNBLnRBeEVQaQ$QxUNfgcedYL6OTEukhGunNy1QdBTzw1fO07tUTJoTSE', 'Kevin', 'vaalapiscine', 'kevin.jashari@support.com', 'red', 1),
                                                                                                                              (5, 'admin', 'atest', '$argon2id$v=19$m=65536,t=4,p=1$cmRQOXdhV1VydnN1VmJ1dw$s3Bcw53p0w+ZON+UTlA44Pr6pDQVKsnzFcNjUGvooQM', 'Administrateur', 'Test', 'administarteur@support.com', 'yellow', 1),
                                                                                                                              (17, 'client', 'trenaut', '$argon2id$v=19$m=65536,t=4,p=1$enVmY0JSMEVMTFJxbVE4RA$HSC+6hC0+iNKORsSWqtV8URsfsCIc710iLnIcNjios4', 'La', 'Marque de shampoing', '', 'yellow', 0),
                                                                                                                              (18, 'client', 'trenaut', '$argon2id$v=19$m=65536,t=4,p=1$V3paNjdQMzNmb3dFZHJIZw$rCFMANju+YJcWhVp/+40v5Mv8pWNlnoLYk3Ye6tM3cs', 'La', 'Marque de shampoing', '', 'yellow', 0),
                                                                                                                              (19, 'client', 'trenaut', '$argon2id$v=19$m=65536,t=4,p=1$VlJ3L2RuT0s2WXJrR21TaQ$9CmTvRaUUCAqD2Dly5tZUf6Olf/g6Z5mPtOGbTdl5C4', 'La', 'Marque de shampoing', '', 'red', 0);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
                           `id` int(11) NOT NULL,
                           `id_exp` int(11) NOT NULL,
                           `id_dest` int(11) NOT NULL,
                           `cathegorie` varchar(25) NOT NULL,
                           `message` text NOT NULL,
                           `status` varchar(50) NOT NULL,
                           `vue` int(11) NOT NULL,
                           `n_ticket` int(11) NOT NULL,
                           `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `id_exp`, `id_dest`, `cathegorie`, `message`, `status`, `vue`, `n_ticket`, `date`) VALUES
                                                                                                                    (1, 2, 0, 'Formation Exterieur', 'Si vous commencez à faire des recherches en ligne sur le JavaScript il y a de fortes chance que vous tombiez sur des questions concernant la librairie jQuery. Cette librairie est extrèmement populaire, au point qu\'il est difficile de trouver un plugin qui ne l\'utilise pas.', 'En attente', 0, 1, '2021-11-29 16:08:38'),
                                                                                                                    (2, 3, 0, 'online Cléa', 'L\'autre point intéréssant concerne la compatibilité des navigateurs (oui Internet Explorer je pense à toi ;)). L\'ensemble des méthodes proposées sont testées sur la pluspart des navigateurs modernes. SI vous voulez supporter les dinosaures (Internet explorer 6 à 8) vous pouvez utiliser la version version 1.12.', 'En attente', 0, 2, '2021-12-02 15:27:53'),
                                                                                                                    (3, 4, 0, 'online Cléa', 'Un tableau préfixé par ... sera déballé sur place lors de la définition du tableau. Seul les tableaux et les objets qui implémente Traversable peuvent être déballé. Le déballage de tableau avec ... est disponible à partir de PHP 7.4.0.', 'En attente', 1, 2, '2021-12-01 07:28:08'),
                                                                                                                    (4, 3, 0, 'Formation exterieur', 'Sehe vient de souligner que non seulement les \"points d\'ancrage\" ne sont pas gérés par le processus clone/update, mais aussi les caches, les rerere, etc. Donc, pour une sauvegarde stricte,', 'En attente', 0, 4, '2021-12-15 16:52:12'),
                                                                                                                    (5, 2, 0, 'Formation exterieur', 'Sehe vient de souligner que non seulement les \"points d\'ancrage\" ne sont pas gérés par le processus clone/update, mais aussi les caches, les rerere, etc. Donc, pour une sauvegarde stricte,', 'En attente', 0, 3, '2021-12-15 16:52:52'),
                                                                                                                    (6, 2, 0, 'Formation exterieur', 'Sehe vient de souligner que non seulement les \"points d\'ancrage\" ne sont pas gérés par le processus clone/update, mais aussi les caches, les rerere, etc. Donc, pour une sauvegarde stricte,', 'En attente', 0, 6, '2021-12-15 16:52:56'),
                                                                                                                    (8, 2, 0, 'Formation exterieur', 'Sehe vient de souligner que non seulement les \"points d\'ancrage\" ne sont pas gérés par le processus clone/update, mais aussi les caches, les rerere, etc. Donc, pour une sauvegarde stricte,', 'En attente', 0, 3, '2021-12-15 16:57:40'),
                                                                                                                    (19, 2, 0, 'Formation exterieur', 'Sehe vient de souligner que non seulement les \"points d\'ancrage\" ne sont pas gérés par le processus clone/update, mais aussi les caches, les rerere, etc. Donc, pour une sauvegarde stricte,', 'En attente', 0, 19, '2021-12-16 14:46:07'),
                                                                                                                    (20, 2, 0, 'Formation exterieur', 'Sehe vient de souligner que non seulement les \"points d\'ancrage\" ne sont pas gérés par le processus clone/update, mais aussi les caches, les rerere, etc. Donc, pour une sauvegarde stricte,', 'En attente', 0, 6, '2021-12-16 14:46:10'),
                                                                                                                    (21, 2, 0, 'Formation exterieur', 'Sehe vient de souligner que non seulement les \"points d\'ancrage\" ne sont pas gérés par le processus clone/update, mais aussi les caches, les rerere, etc. Donc, pour une sauvegarde stricte,', 'En attente', 0, 21, '2021-12-16 14:46:24'),
                                                                                                                    (22, 2, 0, 'Formation exterieur', 'Sehe vient de souligner que non seulement les \"points d\'ancrage\" ne sont pas gérés par le processus clone/update, mais aussi les caches, les rerere, etc. Donc, pour une sauvegarde stricte,', 'En attente', 0, 7, '2021-12-16 14:46:24'),
                                                                                                                    (23, 2, 0, 'Formation exterieur', 'Sehe vient de souligner que non seulement les \"points d\'ancrage\" ne sont pas gérés par le processus clone/update, mais aussi les caches, les rerere, etc. Donc, pour une sauvegarde stricte,', 'En attente', 0, 23, '2021-12-16 14:46:25'),
                                                                                                                    (24, 2, 0, 'Formation exterieur', 'Sehe vient de souligner que non seulement les \"points d\'ancrage\" ne sont pas gérés par le processus clone/update, mais aussi les caches, les rerere, etc. Donc, pour une sauvegarde stricte,', 'En attente', 0, 24, '2021-12-16 14:46:26'),
                                                                                                                    (25, 2, 0, 'Formation exterieur', 'Sehe vient de souligner que non seulement les \"points d\'ancrage\" ne sont pas gérés par le processus clone/update, mais aussi les caches, les rerere, etc. Donc, pour une sauvegarde stricte,', 'En attente', 0, 25, '2021-12-16 16:30:15'),
                                                                                                                    (26, 2, 0, 'Formation exterieur', 'Sehe vient de souligner que non seulement les \"points d\'ancrage\" ne sont pas gérés par le processus clone/update, mais aussi les caches, les rerere, etc. Donc, pour une sauvegarde stricte,', 'En attente', 0, 26, '2021-12-16 17:09:22'),
                                                                                                                    (27, 2, 0, 'Formation exterieur', 'Sehe vient de souligner que non seulement les \"points d\'ancrage\" ne sont pas gérés par le processus clone/update, mais aussi les caches, les rerere, etc. Donc, pour une sauvegarde stricte,', 'En attente', 0, 27, '2021-12-16 17:09:29'),
                                                                                                                    (28, 2, 0, 'Formation exterieur', 'Sehe vient de souligner que non seulement les \"points d\'ancrage\" ne sont pas gérés par le processus clone/update, mais aussi les caches, les rerere, etc. Donc, pour une sauvegarde stricte,', 'En attente', 0, 28, '2021-12-16 17:16:22'),
                                                                                                                    (29, 2, 0, 'Formation exterieur', 'Sehe vient de souligner que non seulement les \"points d\'ancrage\" ne sont pas gérés par le processus clone/update, mais aussi les caches, les rerere, etc. Donc, pour une sauvegarde stricte,', 'En attente', 0, 29, '2021-12-16 17:16:25'),
                                                                                                                    (30, 2, 0, 'Formation exterieur', 'Sehe vient de souligner que non seulement les \"points d\'ancrage\" ne sont pas gérés par le processus clone/update, mais aussi les caches, les rerere, etc. Donc, pour une sauvegarde stricte,', 'En attente', 0, 30, '2021-12-16 17:16:46'),
                                                                                                                    (31, 2, 0, 'Formation exterieur', 'Sehe vient de souligner que non seulement les \"points d\'ancrage\" ne sont pas gérés par le processus clone/update, mais aussi les caches, les rerere, etc. Donc, pour une sauvegarde stricte,', 'En attente', 0, 31, '2021-12-16 17:16:49'),
                                                                                                                    (32, 2, 0, 'Formation exterieur', 'Sehe vient de souligner que non seulement les \"points d\'ancrage\" ne sont pas gérés par le processus clone/update, mais aussi les caches, les rerere, etc. Donc, pour une sauvegarde stricte,', 'En attente', 0, 32, '2021-12-16 17:19:03'),
                                                                                                                    (33, 2, 0, 'Formation exterieur', 'Sehe vient de souligner que non seulement les \"points d\'ancrage\" ne sont pas gérés par le processus clone/update, mais aussi les caches, les rerere, etc. Donc, pour une sauvegarde stricte,', 'En attente', 0, 33, '2021-12-16 17:20:15'),
                                                                                                                    (34, 2, 0, 'Formation exterieur', 'Sehe vient de souligner que non seulement les \"points d\'ancrage\" ne sont pas gérés par le processus clone/update, mais aussi les caches, les rerere, etc. Donc, pour une sauvegarde stricte,', 'En attente', 0, 34, '2021-12-16 17:20:20'),
                                                                                                                    (35, 2, 0, 'Formation exterieur', 'Sehe vient de souligner que non seulement les \"points d\'ancrage\" ne sont pas gérés par le processus clone/update, mais aussi les caches, les rerere, etc. Donc, pour une sauvegarde stricte,', 'En attente', 0, 35, '2021-12-16 17:21:11'),
                                                                                                                    (36, 2, 0, 'Formation exterieur', 'Sehe vient de souligner que non seulement les \"points d\'ancrage\" ne sont pas gérés par le processus clone/update, mais aussi les caches, les rerere, etc. Donc, pour une sauvegarde stricte,', 'En attente', 0, 36, '2021-12-16 17:21:14'),
                                                                                                                    (37, 2, 0, 'Formation exterieur', 'Sehe vient de souligner que non seulement les \"points d\'ancrage\" ne sont pas gérés par le processus clone/update, mais aussi les caches, les rerere, etc. Donc, pour une sauvegarde stricte,', 'En attente', 0, 37, '2021-12-16 17:22:59'),
                                                                                                                    (38, 2, 0, 'Formation exterieur', 'Sehe vient de souligner que non seulement les \"points d\'ancrage\" ne sont pas gérés par le processus clone/update, mais aussi les caches, les rerere, etc. Donc, pour une sauvegarde stricte,', 'En attente', 0, 38, '2021-12-16 17:23:04'),
                                                                                                                    (39, 2, 0, 'Formation exterieur', 'Sehe vient de souligner que non seulement les \"points d\'ancrage\" ne sont pas gérés par le processus clone/update, mais aussi les caches, les rerere, etc. Donc, pour une sauvegarde stricte,', 'En attente', 0, 39, '2021-12-16 17:23:10');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `account`
--
ALTER TABLE `account`
    ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `account`
--
ALTER TABLE `account`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
