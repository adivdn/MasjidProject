-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2019 at 07:20 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masjid`
--

-- --------------------------------------------------------

--
-- Table structure for table `background`
--

CREATE TABLE `background` (
  `id_background` int(11) NOT NULL,
  `file_bg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `khotib` varchar(50) NOT NULL,
  `bilal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `tanggal`, `khotib`, `bilal`) VALUES
(1, '2019-11-21', 'Ust.Adiv', 'Ust.Adiv'),
(2, '29-11-2019', 'Ustadz Ari', 'Tgk. Jamal'),
(3, '30-11-2019', 'Ustadz Jamal', 'Tgk. Ari'),
(4, '30-11-2019', 'Ustadz Dito', 'Tgk. Ali');

-- --------------------------------------------------------

--
-- Table structure for table `jam_sholat`
--

CREATE TABLE `jam_sholat` (
  `id_jam_sholat` int(11) NOT NULL,
  `id_sound_sholat` int(11) NOT NULL,
  `jam_sholat` time NOT NULL,
  `tanggal_sholat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mp3`
--

CREATE TABLE `mp3` (
  `id_mp3` int(11) NOT NULL,
  `judul_mp3` text NOT NULL,
  `hari` varchar(40) NOT NULL,
  `jam` time NOT NULL,
  `file` text NOT NULL,
  `aktif` enum('Y','T') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesan_pendek`
--

CREATE TABLE `pesan_pendek` (
  `id_pesan_pendek` int(11) NOT NULL,
  `pesan_pendek` text NOT NULL,
  `tgl_masuk` date NOT NULL,
  `aktif` enum('Y','T') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `running_teks`
--

CREATE TABLE `running_teks` (
  `id_running_teks` int(11) NOT NULL,
  `pesan_running` text NOT NULL,
  `tgl_input` date NOT NULL,
  `aktif` enum('Y','T') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sound_sholat`
--

CREATE TABLE `sound_sholat` (
  `id_sound_sholat` int(11) NOT NULL,
  `nama_sholat` varchar(25) NOT NULL,
  `file20msebelum` text NOT NULL,
  `aktif20msebelum` enum('Y','T') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `background`
--
ALTER TABLE `background`
  ADD PRIMARY KEY (`id_background`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `jam_sholat`
--
ALTER TABLE `jam_sholat`
  ADD PRIMARY KEY (`id_jam_sholat`),
  ADD KEY `id_sound_sholat` (`id_sound_sholat`);

--
-- Indexes for table `mp3`
--
ALTER TABLE `mp3`
  ADD PRIMARY KEY (`id_mp3`);

--
-- Indexes for table `pesan_pendek`
--
ALTER TABLE `pesan_pendek`
  ADD PRIMARY KEY (`id_pesan_pendek`);

--
-- Indexes for table `running_teks`
--
ALTER TABLE `running_teks`
  ADD PRIMARY KEY (`id_running_teks`);

--
-- Indexes for table `sound_sholat`
--
ALTER TABLE `sound_sholat`
  ADD PRIMARY KEY (`id_sound_sholat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `background`
--
ALTER TABLE `background`
  MODIFY `id_background` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jam_sholat`
--
ALTER TABLE `jam_sholat`
  MODIFY `id_jam_sholat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mp3`
--
ALTER TABLE `mp3`
  MODIFY `id_mp3` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesan_pendek`
--
ALTER TABLE `pesan_pendek`
  MODIFY `id_pesan_pendek` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `running_teks`
--
ALTER TABLE `running_teks`
  MODIFY `id_running_teks` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sound_sholat`
--
ALTER TABLE `sound_sholat`
  MODIFY `id_sound_sholat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jam_sholat`
--
ALTER TABLE `jam_sholat`
  ADD CONSTRAINT `jam_sholat_ibfk_1` FOREIGN KEY (`id_sound_sholat`) REFERENCES `sound_sholat` (`id_sound_sholat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
