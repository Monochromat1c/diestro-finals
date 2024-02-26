-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2024 at 09:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diestro_finals`
--

-- --------------------------------------------------------

--
-- Table structure for table `insects`
--

CREATE TABLE `insects` (
  `insectID` int(11) NOT NULL,
  `insect_name` varchar(99) NOT NULL,
  `habitatID` int(11) DEFAULT NULL,
  `speciesID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `insects`
--

INSERT INTO `insects` (`insectID`, `insect_name`, `habitatID`, `speciesID`) VALUES
(8, 'Fruit Fly', 1, 4),
(9, 'German Cockroach', 1, 9),
(12, 'Monarch Butterfly', 1, 2),
(13, 'Blue Dasher Dragonfly', 2, 6),
(14, 'Water Scavenger Beetle', 2, 1),
(16, 'Magnificent Giant Dragonfly', 3, 6),
(17, 'Leafhoppers', 1, 7),
(18, 'Assassin bug', 1, 7),
(19, 'Bumblebee', 1, 3),
(22, 'Bark Beetles', 1, 1),
(23, 'European Hornet', 1, 3),
(24, 'Black Soldier Fly', 1, 4),
(25, 'Macrotermes Termites', 1, 8),
(26, 'Weaver Ant', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `insect_habitat`
--

CREATE TABLE `insect_habitat` (
  `habitatID` int(11) NOT NULL,
  `habitat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `insect_habitat`
--

INSERT INTO `insect_habitat` (`habitatID`, `habitat`) VALUES
(1, 'Land'),
(2, 'Water'),
(3, 'Land/Water');

-- --------------------------------------------------------

--
-- Table structure for table `insect_species`
--

CREATE TABLE `insect_species` (
  `speciesID` int(11) NOT NULL,
  `species` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `insect_species`
--

INSERT INTO `insect_species` (`speciesID`, `species`) VALUES
(1, 'Coleoptera (Beetles)'),
(2, 'Lepidoptera (Butterflies and Moths)'),
(3, 'Hymenoptera (Ants, Bees, Wasps)'),
(4, 'Diptera (Flies)'),
(5, 'Orthoptera (Grasshoppers, Crickets, Katydids)'),
(6, 'Odonata (Dragonflies and Damselflies)'),
(7, 'Hemiptera (True Bugs)'),
(8, 'Isoptera (Termites)'),
(9, 'Blattodea (Cockroaches)'),
(10, 'Neuroptera (Lacewings, Antlions)');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(99) NOT NULL,
  `middle_name` varchar(99) DEFAULT NULL,
  `last_name` varchar(99) NOT NULL,
  `username` varchar(99) NOT NULL,
  `password` varchar(99) NOT NULL,
  `profile_picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `middle_name`, `last_name`, `username`, `password`, `profile_picture`) VALUES
(1, 'Charles', 'Manuel', 'Diestro', 'admin', 'admin', NULL),
(2, '', NULL, '', '', 'f865b53623b121fd34ee5426c792e5c33af8c227', NULL),
(3, 'charles', '', 'diestro', 'charles', 'cbdb0cc7f3f5b4be81a75fa7242590e3e9882e1e', NULL),
(4, '', NULL, '', '', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', NULL),
(5, 'test', '', 'test', '1234', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', NULL),
(6, '', NULL, '', '', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL),
(7, 'asdf', 'asdf', 'asdf', '1233', '1233', NULL),
(8, '', NULL, '', '', '', NULL),
(9, 'dasf', '', 'asd', '123', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL),
(10, 'Trial', 'Trial', 'Account', 'trial', '069fd3a44db682e9a4ea4bf495c0ffbee58c8431', NULL),
(11, 'Trial', 'Account', 'Only', 'trial1', '069fd3a44db682e9a4ea4bf495c0ffbee58c8431', NULL),
(12, 'Charles Manuel', 'Borbon', 'Diestro', 'cmdiestro', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL),
(13, 'Charles', 'Manuel', 'Diestro', 'user', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', '1706344254_e0f2339bfcecfd6a8e0d.jpg'),
(14, 'Test', 'Account', 'Only', 'username', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', NULL),
(15, 'Charles Manuel', 'Zxc', 'Diestro', 'JammyJellyfish', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1706345761_a5b4425f76a9d2cb20d0.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `insects`
--
ALTER TABLE `insects`
  ADD PRIMARY KEY (`insectID`),
  ADD KEY `habitatID` (`habitatID`),
  ADD KEY `speciesID` (`speciesID`);

--
-- Indexes for table `insect_habitat`
--
ALTER TABLE `insect_habitat`
  ADD PRIMARY KEY (`habitatID`);

--
-- Indexes for table `insect_species`
--
ALTER TABLE `insect_species`
  ADD PRIMARY KEY (`speciesID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `insects`
--
ALTER TABLE `insects`
  MODIFY `insectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `insect_habitat`
--
ALTER TABLE `insect_habitat`
  MODIFY `habitatID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `insect_species`
--
ALTER TABLE `insect_species`
  MODIFY `speciesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `insects`
--
ALTER TABLE `insects`
  ADD CONSTRAINT `insects_ibfk_1` FOREIGN KEY (`habitatID`) REFERENCES `insect_habitat` (`habitatID`),
  ADD CONSTRAINT `insects_ibfk_2` FOREIGN KEY (`speciesID`) REFERENCES `insect_species` (`speciesID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
