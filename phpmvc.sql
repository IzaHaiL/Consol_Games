-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 01:37 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `konsol`
--

CREATE TABLE `konsol` (
  `id` int(11) NOT NULL,
  `namakonsol` varchar(111) NOT NULL,
  `tipekonsol` varchar(111) NOT NULL,
  `deskripsi` varchar(111) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konsol`
--

INSERT INTO `konsol` (`id`, `namakonsol`, `tipekonsol`, `deskripsi`, `harga`) VALUES
(29, 'Nintendo Wii', 'GENGGAM', 'Wii menjadi konsol gaming pionir yang mempopulerkan game dengan gerak tubuh. Berbagai kalangan dan umur senang ', 20000),
(30, 'SEGA Genesis', 'GENGGAM', 'ika tidak ada SEGA Genesis, maka Sonic si landak pun tidak akan pernah muncul dan tercipta. Konsol ini menjadi ', 20000),
(31, 'XBOX', 'Rumahan', 'Xbox original menjadi langkah awal Microsoft masuk ke ranah gaming. Selain itu berkat konsol ini pula, tepatnya', 35000),
(32, 'PlayStation', 'Rumahan', 'Konsol dari Sony ini memperkenalkan game bergaya 3D yang sangat fenomenal. Cek saja Metal Gear Solid dan Final ', 10000),
(33, 'Super Nintendo', 'Rumahan', 'Sampai sekarang pun SNES masih dibahas dan diceritakan oleh para gamer ketika bernostalgia. Konsol inilah yang ', 40000),
(34, 'PlayStation 4', 'Rumahan', ' Konsol Gaming Terbaik hingga saat Ini, dari Retro sampai Modern Sebagian besar konsol ini pernah kamu mainkan ', 22222),
(35, 'Nintendo Switch', 'GENGGAM', 'Switch mengubah wajah konsol handheld yang bisa dibawa ke mana-mana. Nintendo Switch mengawali bentuk konsol hy', 12121212),
(36, 'PlayStation 2', 'Rumahan', 'Sebagai konsol gaming dengan penjualan terbanyak hingga saat ini, jelas saja PS2 harus masuk daftar. Banyak gam', 111111),
(37, 'Nintendo 64', 'Rumahan', 'Sebagai saingan dari PS1, N64 memberikan pengalaman hebat dalam merasakan permainan 3D. Judul franchise Zelda y', 12121),
(41, 'k', '', '', 0),
(42, 'a', 'a', 'a', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `konsol`
--
ALTER TABLE `konsol`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `konsol`
--
ALTER TABLE `konsol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
