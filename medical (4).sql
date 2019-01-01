-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2019 at 01:11 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pasien`
--

CREATE TABLE `data_pasien` (
  `dp_id` int(11) NOT NULL,
  `dp_nama` varchar(75) NOT NULL,
  `dp_jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `dp_tempat_lahir` varchar(50) NOT NULL,
  `dp_tanggal_lahir` date NOT NULL,
  `dp_alamat` varchar(100) NOT NULL,
  `dp_nomor_telepon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pasien`
--

INSERT INTO `data_pasien` (`dp_id`, `dp_nama`, `dp_jenis_kelamin`, `dp_tempat_lahir`, `dp_tanggal_lahir`, `dp_alamat`, `dp_nomor_telepon`) VALUES
(1, 'Fakhri Rizha Ananda', 'Pria', 'Medan', '2019-01-15', 'Jll. Sidodadi Komplek Johor Regency B6', '085398652346');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `du_id` int(11) NOT NULL,
  `du_nama` varchar(75) NOT NULL,
  `du_jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `du_tempat_lahir` varchar(50) NOT NULL,
  `du_tanggal_lahir` date NOT NULL,
  `du_alamat` varchar(100) NOT NULL,
  `du_nomor_telepon` varchar(13) NOT NULL,
  `du_password` varchar(255) NOT NULL,
  `du_role` enum('pasien','resepsionis','kasir','staff_kesehatan','manajer_sdm','staff_aset','staff_keuangan','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`du_id`, `du_nama`, `du_jenis_kelamin`, `du_tempat_lahir`, `du_tanggal_lahir`, `du_alamat`, `du_nomor_telepon`, `du_password`, `du_role`) VALUES
(1, 'Fakhri Rizha Ananda', 'Pria', 'Medan', '2019-01-15', 'Jll. Sidodadi Komplek Johor Regency B6', '085398652346', '30b0dcf59de8699302d451d5450ab14d', 'pasien');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pasien`
--
ALTER TABLE `data_pasien`
  ADD PRIMARY KEY (`dp_id`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`du_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pasien`
--
ALTER TABLE `data_pasien`
  MODIFY `dp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `du_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
