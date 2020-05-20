-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 22 avr. 2020 à 12:38
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
-- Base de données :  `ensat`
--

-- --------------------------------------------------------

--
-- Structure de la table `eleves`
--

CREATE TABLE `eleves` (
  `ID_eleve` int(11) NOT NULL,
  `CNE` varchar(10) NOT NULL,
  `Nom` varchar(15) NOT NULL,
  `Prenom` varchar(15) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  `Ville` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `etat` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `eleves`
--

INSERT INTO `eleves` (`ID_eleve`, `CNE`, `Nom`, `Prenom`, `Adresse`, `Ville`, `email`, `Photo`, `etat`) VALUES
(1, 'S139022035', 'ACHAHBAR', 'ADNANE', 'ENSAT BP 1818', 'Tanger', 'ACHAHBAR@gmail.com', './photos/ACHAHBAR.png', 0),
(2, 'R142034631', 'ADRAOUI', 'KHAWLA', 'ENSAT BP1818', 'Tanger', 'Adraouikha@gmail.com\r\n', './photos/ADRAOUI.png\r\n', 0);
(3, 'S142446531', 'CHIHI', 'HASNAE', 'ENSAT BP1818', 'Tanger', 'hasnae@gmail.com\r\n', './photos/f.png\r\n', 0);
(4, 'V142012656', 'ELAKKOUCHI', 'SALMA', 'ENSAT BP1818', 'Tanger', 'salma@gmail.com\r\n', './photos/f.png\r\n', 0);
(5, 'B117878717', 'ELAZZIZI', 'HAMZA', 'ENSAT BP1818', 'Tanger', 'hamza@gmail.com\r\n', './photos/m.png\r\n', 0);
(6, 'K141717170', 'EDRISII', 'ATAE', 'ENSAT BP1818', 'Tanger', 'Atae@gmail.com\r\n', './photos/m.png\r\n', 0);
(7, 'S142034631', 'ELJATTARI', 'MED', 'ENSAT BP1818', 'Tanger', 'eljattari@gmail.com\r\n', './photos/m.png\r\n', 0);
(8, 'R118717177', 'ELYOUNSSI', 'MOUNA', 'ENSAT BP1818', 'Tanger', 'mouna@gmail.com\r\n', './photos/f.png\r\n', 0);
(9, 'I117716778', 'ELOUAZZANI', 'ZOHRA', 'ENSAT BP1818', 'Tanger', 'zohra@gmail.com\r\n', './photos/f.png\r\n', 0);
(10, 'N135454242', 'ELMOUSTACHIRI', 'YASSINE', 'ENSAT BP1818', 'Tanger', 'yassine@gmail.com\r\n', './photos/m.png\r\n', 0);
(11, 'R167161578', 'BOUKHALLAD', 'AISSAME', 'ENSAT BP1818', 'Tanger', 'aissame@gmail.com\r\n', './photos/m.png\r\n', 0);
(12, 'S142055454', 'HASSANI', 'SOKYNA', 'ENSAT BP1818', 'Tanger', 'sokayna@gmail.com\r\n', './photos/f.png\r\n', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `eleves`
--
ALTER TABLE `eleves`
  ADD PRIMARY KEY (`ID_eleve`,`CNE`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `eleves`
--
ALTER TABLE `eleves`
  MODIFY `ID_eleve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
