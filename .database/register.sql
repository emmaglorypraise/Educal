-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2019 at 06:39 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educal`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `FullName` varchar(255) DEFAULT NULL,
  `RegistrationNumber` varchar(255) DEFAULT NULL,
  `Department` varchar(255) DEFAULT NULL,
  `Faculty` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `DurationOfStudy` varchar(255) DEFAULT NULL,
  `Nationality` varchar(255) DEFAULT NULL,
  `StateOfOrigin` varchar(255) DEFAULT NULL,
  `LocalGovernmentArea` varchar(255) DEFAULT NULL,
  `Birthday` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `ConfirmPassword` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `FullName`, `RegistrationNumber`, `Department`, `Faculty`, `Email`, `DurationOfStudy`, `Nationality`, `StateOfOrigin`, `LocalGovernmentArea`, `Birthday`, `Password`, `ConfirmPassword`) VALUES
(1, '', '', '', '', '', '5', '', '', '', '', '$2y$10$MVWq/bv4vTeWv7SBfwPPBuijxym6YMQZYHgdW84fjc0j2XiSKderm', '$2y$10$1TsZoe.jjEhsYP2Ojstct.x478gHeTmHHFN/sMRnGCLv9psNLs0xS'),
(2, 'Ephraim Iniobong Etuk', '', '', '', '', '', '', '', '', '', '$2y$10$n0mL/KGvtumSXtNKqnQMpuxaIDvK70BWCQDB64aRVu0B9PvY9ITt.', '$2y$10$LGMVBbxGBdU5Imdd/He0x.eHIF4DExpRD7Y1vrDFVXiIexzYKJgWy'),
(3, 'Ephraim Iniobong Etuk', '', '', '', '', '', '', '', '', '', '$2y$10$2B73fUcixnP9NhHjIsnjiukwDjS9RF7LuHUCyPUZamlDKahoemSZu', '$2y$10$QdhgmaMq4dcUnLSVqEhOUO6DE311wofbTuk6podA46spyQe4pQAxe'),
(4, '', '', '', '', '', '', '', '', '', '1985-03-11', '$2y$10$QovZS7Pu8U/zecUDSMrakeQ156r83mtojvhGMaukcp27vNdgpVJUm', '$2y$10$Lkx8LEp0Mf5NNiGsml1LtudUz.I.Fo8hEtwBP6rVUNHyStu2DNDX.'),
(5, 'Ephraim Iniobong Etuk', '', '', '', '', '', '', '', '', '', '$2y$10$W.btLIM802s.Up0cHZpp6e.Wos9jePG8SOJcmpEbPyFW1VnWhO3hC', '$2y$10$6IP2uz5l52CInfTjs6M30.8tpThlyiUsV94g0V0VfVmvMlygttFje'),
(6, 'Ephraim Iniobong Etuk', '09FE432', 'Computer Engineering', 'Engineering', 'goodboy@yahoo.com', '5', 'Brazilian', '', '', '', '$2y$10$EhXrz1d5j4nruW3pPtCn2uVggHW.qEpcWkXSOC8AK06RiSzwbYSwC', '$2y$10$9H/J0Og3yjLTo/zJPDroAOMThYGctRuURCXi0CNw9QU7MH92XrP.C'),
(7, 'Ephraim Iniobong Etuk', '09FE432', 'Computer Engineering', 'Engineering', 'goodboy@yahoo.com', '5', 'Brazilian', 'Rio De Janerio', 'Dos Santos', '1985-11-03', '$2y$10$WYPA8pKaRQJDpHT4qOAxBuEtK6e01tiPaW0795SYgQjZwSwub7VUO', '$2y$10$EaxoPetVskVvJ3ZReXWMYOu16LUCNf2OFQtb7woSF5UTiJBAWBpm2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
