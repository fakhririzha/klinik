-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2019 at 02:20 PM
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
(1, 'Fakhri Rizha Ananda', 'Pria', 'Medan', '2019-01-15', 'Jll. Sidodadi Komplek Johor Regency B6', '085398652346'),
(2, 'Muhammad Rafif Rasyidi', 'Pria', 'Kisaran', '2001-01-12', '', '085398652346'),
(3, 'Ibnu Maulana', 'Pria', 'Medan', '1999-10-11', '', '0895611277834'),
(4, 'Ananda Muharriz', 'Pria', 'Medan', '1998-01-31', '', '082276100819');

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
(1, 'Fakhri Rizha Ananda', 'Pria', 'Medan', '2019-01-15', 'Jll. Sidodadi Komplek Johor Regency B6', '085398652346', '30b0dcf59de8699302d451d5450ab14d', 'pasien'),
(2, 'Muhammad Rafif Rasyidi', 'Pria', 'Kisaran', '2001-01-12', 'Jl. Stasiun', '085398652346', '1fb6fabe51b927968d5a1a0248d19f4f', 'pasien'),
(3, 'Ibnu Maulana', 'Pria', 'Medan', '1999-10-11', 'Ibrahim Umar No. 12', '0895611277834', '8ff1119461891dd5413a7afd39b6490d', 'pasien'),
(4, 'Ananda Muharriz', 'Pria', 'Medan', '1998-01-31', 'Jalan Flamboyan No.120', '082276100819', '922ef08ebee9160f7a7d05ddda2828b1', 'pasien');

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
  MODIFY `dp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `du_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
