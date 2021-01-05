-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 28, 2020 at 01:29 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id13563366_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `UserId` int(11) DEFAULT NULL,
  `completed` varchar(255) DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`id`, `title`, `text`, `date`, `UserId`, `completed`) VALUES
(153, 'gdg', 'fdgytuytu', '2020-12-21', 166, 'no'),
(169, 'retreteert', 'ete', '2020-12-12', 155, 'no'),
(171, '', '', '2020-12-12', 155, 'no'),
(172, 'fdgrfdg', 'fdgd', '2020-12-12', 156, 'no'),
(174, 'rtyrtyr', 'ytry', '2020-12-12', 156, 'no'),
(177, 'title by default', 'title by default', '2020-12-12', 157, 'no'),
(178, '', '', '2020-12-12', 157, 'no'),
(184, 'ertretre', 'tert', '2020-12-14', 153, 'no'),
(186, 'trhr', 'trhtrh', '2020-12-14', 153, 'yes'),
(187, '', '', '2020-12-14', 153, 'no'),
(188, 'ghhg', '', '2020-12-20', NULL, 'no'),
(189, '5fdfa703762b85.28027923.pdf', '', '2020-12-20', NULL, 'no'),
(190, '5fdfa7083051c2.40679488.pdf', '', '2020-12-20', NULL, 'no'),
(191, '', '', '2020-12-21', 153, 'no'),
(193, 'ertert', 't4et', '2020-12-21', NULL, 'no'),
(194, '546', '546546', '2020-12-21', NULL, 'no'),
(195, 'fghfghtr', 'hrtht', '2020-12-24', NULL, 'no'),
(196, 'ret', 'ret', '2020-12-24', NULL, 'no'),
(197, 'hrdhy', 'trh', '2020-12-24', NULL, 'no'),
(198, '', 'uyh', '2020-12-24', NULL, 'no'),
(199, 'tryt', 'trytr', '2020-12-24', NULL, 'no'),
(200, 'ngmf', '', '2020-12-24', NULL, 'no'),
(201, '', '', '2020-12-24', NULL, 'no'),
(202, 'retr', 'rete', '2020-12-24', NULL, 'no'),
(203, '', '', '2020-12-24', NULL, 'no'),
(204, '', '', '2020-12-24', NULL, 'no'),
(205, '', '', '2020-12-24', NULL, 'no'),
(206, '', '', '2020-12-24', NULL, 'no'),
(207, 'y5ey', '5y54', '2020-12-24', NULL, 'no'),
(208, '', '', '2020-12-24', NULL, 'no'),
(209, 'uytuyt', 'ytuy', '2020-12-24', NULL, 'no'),
(210, 'retre', 'retet', '2020-12-27', 153, 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
