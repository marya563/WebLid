-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 19, 2021 at 11:03 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
                            `id` int(11) NOT NULL,
                            `title` varchar(255) NOT NULL,
                            `content` text NOT NULL,
                            `auteur` varchar(100) NOT NULL,
                            `created_at` datetime NOT NULL,
                            `update_at` datetime DEFAULT NULL,
                            `statut` enum('actif','inactif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `auteur`, `created_at`, `update_at`, `statut`) VALUES
(1, 'J\'ai réussi', 'Aujourd\'hui, petit article sur le fait que j\'ai enfin réussi à créer mon formulaire et à l\'envoyer dans ma base de données MySQL. Archi fière que je suis j\'écris donc un article pour faire un petit test sur ce que ça va donner pour les prochaines étapes. Bientôt blogueuse mode attention. Vive la vie ! (pour l\'instant cet article restera en mode privé).', 'Chloéww', '2018-03-20 11:59:38', '2021-05-19 18:53:19', 'actif'),
 (3, 'Projet de licenceeeeee', 'Ceci est un article concernant l\'alcool chez les femmes enceintes. C\'est un sujet pour le projet de licence. Je suis en troisième année de licence sociologie au campus de Mont-Saint-Aignan. Je voulais juste un petit article sympa tout ça tout ça.', 'Anne-Laureeeeee', '2018-03-20 16:02:46', '2021-05-19 18:40:25', 'actif'),
 (10, 'sujet', 'aaaaabbbbbb', 'joe', '2021-05-19 18:54:10', '2021-05-19 18:54:17', 'actif');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
                            `id` int(11) NOT NULL,
                            `id_article` int(11) NOT NULL,
                            `content` text NOT NULL,
                            `auteur` varchar(100) NOT NULL,
                            `created_at` datetime NOT NULL,
                            `update_at` datetime DEFAULT NULL,
                            `statut` enum('actif','inactif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
