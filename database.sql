-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 07:53 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_mahasiswa`
--

CREATE TABLE `t_mahasiswa` (
  `npm` int(11) NOT NULL,
  `namaMhs` varchar(50) NOT NULL,
  `prodi` varchar(25) NOT NULL,
  `alamat` varchar(70) NOT NULL,
  `noHP` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_mahasiswa`
--

INSERT INTO `t_mahasiswa` (`npm`, `namaMhs`, `prodi`, `alamat`, `noHP`) VALUES
(223307051, 'Nabila Eka Sari', 'Teknologi Informasi', 'Kediri', '085608533451'),
(223307052, 'Natasya Inge Nugroho', 'Teknologi Informasi', 'Magetan', '085608533457'),
(223307053, 'Ranto', 'Teknologi Informasi', 'Banten', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `t_registrasi`
--

CREATE TABLE `t_registrasi` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id`, `username`, `password`, `name`) VALUES
(10, 'Inge', '202cb962ac59075b964b07152d234b70', 'Natasya Inge Nugroho'),
(11, 'natasya', '202cb962ac59075b964b07152d234b70', 'Natasya Inge Nugroho'),
(12, 'Bela', '8af7085ec21c2b675524480005d9d92a', 'Nabila Eka Sari');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_mahasiswa`
--
ALTER TABLE `t_mahasiswa`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `t_registrasi`
--
ALTER TABLE `t_registrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_registrasi`
--
ALTER TABLE `t_registrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
