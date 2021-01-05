-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 28, 2020 at 01:30 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `token`, `reg_date`) VALUES
(147, '', 'hareretretvicviktor@gmail.com', '$2y$10$UNciru/y4ley0RH.u3wc9.Yvp4QlXkznom2UQyjMq3Rm0QGEpAxQi', '', '2020-12-11 20:34:21'),
(148, '', 'haregerretretvicviktor@gmail.com', '$2y$10$pVRwDlPfies/WDGrHZ.RJO6DltyIMK/3am3qVRA0r9tU0dfzY.EBC', '', '2020-12-11 20:56:09'),
(149, '', 'rgrgrgrrgr@gmail.com', '$2y$10$ULMPGh8GYX5MEA2XEwqpPuRQJbprfxpBSz8RK2oMuzcyzpc2P9hl6', '', '2020-12-11 20:56:39'),
(150, '', 'rgrghtfrgrrgr@gmail.com', '$2y$10$Hi0yDO2xetJNO7yGewtSzOBvsEiARHncDH2XGKsYykW.JMLJ59Myy', '', '2020-12-11 20:59:17'),
(151, '', 'rgrghtfesfrgrrgr@gmail.com', '$2y$10$ZEyDF5v/IotK4PeyMpo0Ou/58e4CIUJKXdan.Zy8PqaYfStWHbhti', '', '2020-12-11 21:04:50'),
(152, '', 'rgte4wrghtfesfrgrrgr@gmail.com', '$2y$10$9gZiXbVSDnVG4.u7mZfGduvTFhGsVqZByLnYKVWWf0J/oMyuzjAmq', '', '2020-12-11 21:12:12'),
(153, '', 'harevicviktor@gmail.com', '$2y$10$ZGYbZMdgkDgXZRyR8nN6Duadj92GOUHSBkg/PrjES.nIxJyUqU6bi', '$2y$10$4cqMBYAN6QnG6IwL7.clIuZtxv1pbpEyVPWi4kvCGTxZvKMuydQTq', '2020-12-27 19:38:32'),
(154, '', 'harevicviktetdor@gmail.com', '$2y$10$YPmizK5E2UMZ1RKM727rg.XSPb4TgbWH42T1TwPHfPMrn6q3j3dvW', '', '2020-12-11 21:13:39'),
(155, '', '1harevicviktor@gmail.com', '$2y$10$Iw.ejyG2PviDfBE2.JThdegJWOHzrfcDa6sK.9/cu.eqWNfKMqIYu', '$2y$10$0EUTTCuikYGwzVpajk2IYuggfhC/Rm8Rm0fRbQhTTF.cv5m3kwJGe', '2020-12-20 19:17:35'),
(156, 'viktor', '2harevicviktor@gmail.com', '$2y$10$Zu1I2oZ2f9J/cbIY7A73Pu/0ox4VvWboUHCAWsn1FKYe9EDyzPoA6', '', '2020-12-12 12:15:52'),
(157, 'viktor', '4harevicviktor@gmail.com', '$2y$10$obSdgSRoztIeojKTGIoZ5ONbfUbDClVLPOVvsMntAPIOUIWB3iI62', '', '2020-12-12 13:02:56'),
(158, 'viktor', '11harevicviktor@gmail.com', '$2y$10$XAyr7WJISfs.GMBAojJDR.pVoohWj3bU1q70lGx8e0UJ4yKPetVma', '$2y$10$r027M/C5eOjauT/yTLQYfeQkP22a2fZIH0aANX3zyPQWDbhADPdMi', '2020-12-17 08:24:15'),
(159, '', '22harevicviktor@gmail.com', '$2y$10$vqc.PZBadQaD5U3QXC6Mm.wdAn2gUJFm4vBxlHU75X2/9veE.G5S2', '$2y$10$m84.u3yDfwD8AFAPn3iDBe3w1HXdHlB2tTuR4xaKJZMYPIiSOYd1e', '2020-12-17 08:27:10'),
(160, '', 'hharevicviktor@gmail.com', '$2y$10$dffp51mO0KoPjWbT2eQA/eQ132Do7CpnFU8z2LW64SU38P8D/1PCG', '$2y$10$e2hRugToxLY2PhUrvTs0nuOU8/JkXP3f/5eTrqrsxP32NkHzRujdS', '2020-12-17 09:58:17'),
(161, '', 'mharevicviktor@gmail.com', '$2y$10$oK2UU9py1pVe5Ld3AjwdS.J.CJXwfK6kXRdu5RVakJ4HDFw/O3rdu', '$2y$10$x0tgNws3EqyiEsoHoyCNsOI.BP0Ne50n0vTYDkmLuhMi2tcLPXFYm', '2020-12-17 10:26:15'),
(162, '', '123harevicviktor@gmail.com', '$2y$10$U6gmoOCokM9U5YsD53ZH2uNsVCYcVPJGsmHYjM8IIyPnqS.R0R4cq', '', '2020-12-17 14:12:57'),
(163, '', 'hfvdsgvarevicviktor@gmail.com', '$2y$10$N3wqOYwVWbIv7F0xubCV4uh3/vyqvJd3vNu1.a0ztH5loEyrYRUVe', '', '2020-12-18 11:10:16'),
(164, 'viktor', 'harevicvigfreergktor@gmail.com', '$2y$10$.7A5IIglP5sBZFyGxHDzU.tM/J4EOYUhTQYEWYgM.eF4QVFISXSt2', '', '2020-12-18 13:19:32'),
(165, '', 'harevidsfsfscviktor@gmail.com', '$2y$10$YAL9H0Rbp9ATIOaWwSUmpeKpRwhDXJw77J5QBZGEYrUY2O5N5XHHq', '', '2020-12-21 19:59:18'),
(166, '', 'harevgfregicviktor@gmail.com', '$2y$10$bqVSUWyJHfiU387DE4Y3HOSe4tP/i858KtKEhFzrLFbc7LDVHTI7e', '', '2020-12-21 20:23:23'),
(167, '', 'hardsfevicviktor@gmail.com', '$2y$10$2TTeighLrdfKn2HkrAALMeLjTHykVCvIgnp9rRCb0.4MKwdZNyTwm', '', '2020-12-21 21:30:16'),
(168, '', 'harevfedsficviktor@gmail.com', '$2y$10$HYCH5dGBbufiNk56QMMIb.0XQqYqqf.0B0IpOU.BZwhw.gT7DO8D.', NULL, '2020-12-24 10:37:30'),
(169, '', 'harefdgrfvicviktor@gmail.com', '$2y$10$3A2Qf1y824oIBQBfNsQGyO0cNHmGkhsZ.GSVsOPPgy9Jq8tHZAEmy', NULL, '2020-12-24 16:47:31'),
(170, '', 'harevicvfdefaiktor@gmail.com', '$2y$10$OCTlW/3P7B0ZqQi40C0YwuhGAUfC1kf2R0y955NDubUjzGLS3rhvu', NULL, '2020-12-24 18:13:31'),
(171, '', 'harevicvertetdefaiktor@gmail.com', '$2y$10$eU3bVznVuwIPoL8FKPYZ1OpnJ4L38Ebqqvm.jpADWuEl3orwK3b/u', NULL, '2020-12-24 18:19:44'),
(172, '', 'harevicvrfgergiktor@gmail.com', '$2y$10$ca1N1mGuvY3fWT2FWp6pkOshwjZykaHCLhS5KqnqKnqpYkD00QD.K', NULL, '2020-12-24 18:31:54'),
(173, '', 'harevicviktgregor@gmail.com', '$2y$10$MkCgsuLBOy6OoF5kYZu03ummOhE1zV6gkNSZmBlsCn9zgNcD0uAHG', NULL, '2020-12-24 19:13:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
