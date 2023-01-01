-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2023 at 01:31 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ambar`
--

-- --------------------------------------------------------

--
-- Table structure for table `kondisi`
--

CREATE TABLE `kondisi` (
  `curah_hujan` varchar(30) NOT NULL,
  `aliran_air` varchar(30) NOT NULL,
  `tinggi_air` varchar(30) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `id` int(10) NOT NULL,
  `datenow` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kondisi`
--

INSERT INTO `kondisi` (`curah_hujan`, `aliran_air`, `tinggi_air`, `keterangan`, `id`, `datenow`) VALUES
('25', '10 ', '30 cm', 'Aman', 1, '2022-12-13 06:53:10'),
('30', '30', '30 cm', 'Aman', 2, '2022-12-13 06:53:10'),
('10', '10', '70 cm', 'Aman', 3, '2022-12-13 06:53:10'),
('50', '50', '10 cm', 'Bahaya', 4, '2022-12-13 08:35:46'),
('0,25', '0,06', '60', 'Aman', 5, '2022-12-13 08:51:47'),
('0,25', '0,05', '120', 'Aman', 6, '2022-12-13 09:02:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id_member` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id_member`, `nama_lengkap`, `jenis_kelamin`, `agama`, `no_hp`, `email`, `alamat`) VALUES
(9, 'AKPIL MAUHIB', 'Laki-Laki', 'Islam', '085224614380', 'akpilmauhib@gmail.com', 'Kp. Gereba Girang 001/003, Geresik, Jamanis, Kab. Tasikmalaya, Jawa Barat, Indonesia'),
(10, 'ZIA ZAKIATUL FADILAH', 'Laki-Laki', 'Islam', '089765432112', 'zia@zia.com', 'Kp. Gereba Girang 001/003, Geresik, Jamanis, Kab. Tasikmalaya, Jawa Barat, Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`) VALUES
(1, 'Admin', 'admin@admin.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'akpil', 'akpil@akpil.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kondisi`
--
ALTER TABLE `kondisi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
