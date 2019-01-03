-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2019 at 06:03 AM
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
  `dp_nik` varchar(16) NOT NULL,
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

INSERT INTO `data_pasien` (`dp_id`, `dp_nik`, `dp_nama`, `dp_jenis_kelamin`, `dp_tempat_lahir`, `dp_tanggal_lahir`, `dp_alamat`, `dp_nomor_telepon`) VALUES
(1, '1271181110990002', 'Ibnu Maulana', 'Pria', 'Medan', '1999-10-11', 'Jl. Ibrahim Umar No.12 Medan', '0895611277834'),
(2, '1271180504990003', 'Ikbal Pebriansyah', 'Pria', 'Palembang', '1999-04-05', 'Jl. Perjuangan No. 54b', '089854627634'),
(3, '1271180212970002', 'Baharuddin Budiman', 'Pria', 'Medan', '1997-12-02', 'Jl. Pimpinan No. 98 Medan', '097612437645'),
(4, '1271182410980003', 'Rangga Pratama Nugraha', 'Pria', 'Padang', '1998-10-24', 'Jl. Prof. H.M. Yamin No.23 Medan', '081276569898'),
(5, '1271180505990005', 'Siti Fatma Kumala', 'Wanita', 'Medan', '1995-05-05', 'Jl. Amaliun No.3 Medan', '081377839854'),
(6, '1271180708990001', 'Nadia Nasywa', 'Wanita', 'Medan', '1997-08-07', 'Jl. Bromo Ujung No.99 Medan', '089754637765'),
(7, '1271180505990002', 'Augina Amelia Putri', 'Wanita', 'Aceh', '1999-05-05', 'Jl. Lau Dendang No.11 Medan', '089387885433'),
(8, '1271181001000002', 'Dinul Iman', 'Pria', 'Surabaya', '2000-01-10', 'Jl. Perjuangan No.76 Medan', '089765667833'),
(9, '1271180707000003', 'Jackie Chandra', 'Pria', 'Batubara', '2000-07-07', 'Jl. Kapten Muslim No.44 Medan', '089932447531'),
(10, '1271180301980002', 'Farhan Suryadi', 'Pria', 'Palembang', '1998-01-03', 'Jl. Perjuangan No. 53Y', '089956773422'),
(11, '1271182211060005', 'Eggia Sebayang', 'Pria', 'Lampung', '2006-11-22', 'Jl. Krakatau No.55 Medan', '085699216735'),
(12, '1271182804980002', 'Rafif Rasyidi', 'Pria', 'Kisaran', '1998-04-28', 'Jl. Deli Tua No.09', '081276775423'),
(13, '1271182109940004', 'Muhammad Rezky Lubis', 'Pria', 'Panyabungan', '1994-09-21', 'Jl. Lubuk Pakam No.3', '087756435522'),
(14, '1271181208020002', 'Yusriantoni', 'Pria', 'Bekasi', '2002-08-12', 'Jl. Halat No.22', '089956443433'),
(15, '1271181902960001', 'Sultan Alamsyah', 'Pria', 'Padang Sidempuan', '1996-02-19', 'Jl. Maroko No.34 Medan', '089855317642'),
(16, '1271180111100003', 'Ali Fajar', 'Pria', 'Medan', '2010-11-01', 'Jl. Belimbing No.59 Medan', '081288763595'),
(17, '1271180409060004', 'Fakhirah Mentaya', 'Wanita', 'Medan', '2006-09-04', 'Jl. Simp. Limun No.03 Medan', '081388875364'),
(18, '1271181305000005', 'Rezky Febri', 'Wanita', 'Bandung', '2000-05-13', 'Jl. Tembung Psr.7 No.05  Medan', '089976528822'),
(19, '1271180201010005', 'Ade Anjhani', 'Wanita', 'Aceh', '2001-01-02', 'Jl. Mangga No.95 Medan', '089733127465'),
(20, '1271182106990002', 'Halimatussadiyah', 'Wanita', 'Medan', '1999-06-21', 'Jl. Amaliun No.12 Medan', '089963556477'),
(21, '1271181203090004', 'Latifah Nurmala', 'Wanita', 'Belitung', '2009-03-12', 'Jl. Seser No.43 Medan', '089931225732');

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
(1, 'Ibnu Maulana', 'Pria', 'Medan', '1999-10-11', 'Jl. Ibrahim Umar No.12 Medan', '0895611277834', '8ff1119461891dd5413a7afd39b6490d', 'pasien'),
(2, 'Ikbal Pebriansyah', 'Pria', 'Palembang', '1999-04-05', 'Jl. Perjuangan No. 54b', '089854627634', '4776d85866c0869ed101d436b7e1093a', 'pasien'),
(3, 'Baharuddin Budiman', 'Pria', 'Medan', '1997-12-02', 'Jl. Pimpinan No. 98 Medan', '097612437645', 'ef89382dc55cab56c93f1eb3167c65d3', 'pasien'),
(4, 'Rangga Pratama Nugraha', 'Pria', 'Padang', '1998-10-24', 'Jl. Prof. H.M. Yamin No.23 Medan', '081276569898', '7ccd6497bb86be28f2510952b742dbb6', 'pasien'),
(5, 'Siti Fatma Kumala', 'Wanita', 'Medan', '1995-05-05', 'Jl. Amaliun No.3 Medan', '081377839854', '923ebcb788f4ef0614b85a981a8bb277', 'pasien'),
(6, 'Nadia Nasywa', 'Wanita', 'Medan', '1997-08-07', 'Jl. Bromo Ujung No.99 Medan', '089754637765', '64c0d9d6948e329b65837a22a63743bf', 'pasien'),
(7, 'Augina Amelia Putri', 'Wanita', 'Aceh', '1999-05-05', 'Jl. Lau Dendang No.11 Medan', '089387885433', 'a8f38f308b781dbb21f4519f75c1c61a', 'pasien'),
(8, 'Dinul Iman', 'Pria', 'Surabaya', '2000-01-10', 'Jl. Perjuangan No.76 Medan', '089765667833', '7957182a4f2f4e7d4ef789460ed3ff10', 'pasien'),
(9, 'Jackie Chandra', 'Pria', 'Batubara', '2000-07-07', 'Jl. Kapten Muslim No.44 Medan', '089932447531', '55d62d0b3693a58faa2011ffa4a17fa2', 'pasien'),
(10, 'Farhan Suryadi', 'Pria', 'Palembang', '1998-01-03', 'Jl. Perjuangan No. 53Y', '089956773422', 'd389a1456906d01a0ee4bbe52d961f04', 'pasien'),
(11, 'Eggia Sebayang', 'Pria', 'Lampung', '2006-11-22', 'Jl. Krakatau No.55 Medan', '085699216735', 'f30f9ea569d69102f3e05f5120dd0b89', 'pasien'),
(12, 'Rafif Rasyidi', 'Pria', 'Kisaran', '1998-04-28', 'Jl. Deli Tua No.09', '081276775423', '9872f37673c7b4ab7cef75d897584db6', 'pasien'),
(13, 'Muhammad Rezky Lubis', 'Pria', 'Panyabungan', '1994-09-21', 'Jl. Lubuk Pakam No.3', '087756435522', '84d6f7096a2fc0cce1bc877288405810', 'pasien'),
(14, 'Yusriantoni', 'Pria', 'Bekasi', '2002-08-12', 'Jl. Halat No.22', '089956443433', 'c109a1b293b795a9c18b18ab93fa0995', 'pasien'),
(15, 'Sultan Alamsyah', 'Pria', 'Padang Sidempuan', '1996-02-19', 'Jl. Maroko No.34 Medan', '089855317642', 'ee95970e44ac17e14acb3ebd67f4d782', 'pasien'),
(16, 'Ali Fajar', 'Pria', 'Medan', '2010-11-01', 'Jl. Belimbing No.59 Medan', '081288763595', 'e233e0d667364f4ca0dfdc401ebebd9a', 'pasien'),
(17, 'Fakhirah Mentaya', 'Wanita', 'Medan', '2006-09-04', 'Jl. Simp. Limun No.03 Medan', '081388875364', '7f4dc476964acb44a4d6a46d704a566a', 'pasien'),
(18, 'Rezky Febri', 'Wanita', 'Bandung', '2000-05-13', 'Jl. Tembung Psr.7 No.05  Medan', '089976528822', '4ee5739de9d14096968f427cfd9c05e6', 'pasien'),
(19, 'Ade Anjhani', 'Wanita', 'Aceh', '2001-01-02', 'Jl. Mangga No.95 Medan', '089733127465', 'a735abe545c23550569ca286153153e0', 'pasien'),
(20, 'Halimatussadiyah', 'Wanita', 'Medan', '1999-06-21', 'Jl. Amaliun No.12 Medan', '089963556477', 'd55931372ec6156fdba9e0995206f802', 'pasien'),
(21, 'Latifah Nurmala', 'Wanita', 'Belitung', '2009-03-12', 'Jl. Seser No.43 Medan', '089931225732', '4ad7b2f6c11b4a4932a92702a36a05e1', 'pasien');

-- --------------------------------------------------------

--
-- Table structure for table `e_payment`
--

CREATE TABLE `e_payment` (
  `ep_id` int(11) NOT NULL,
  `dp_id` int(11) NOT NULL,
  `ep_saldo` bigint(20) NOT NULL,
  `ep_status` enum('aktif','tidak_aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_data`
--

CREATE TABLE `transaksi_data` (
  `td_id` int(11) NOT NULL,
  `dp_id` int(11) NOT NULL,
  `td_tanggal` date NOT NULL,
  `td_waktu` varchar(5) NOT NULL,
  `td_metode` enum('tunai','e_payment') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `e_payment`
--
ALTER TABLE `e_payment`
  ADD PRIMARY KEY (`ep_id`),
  ADD KEY `dp_id` (`dp_id`);

--
-- Indexes for table `transaksi_data`
--
ALTER TABLE `transaksi_data`
  ADD PRIMARY KEY (`td_id`),
  ADD KEY `dp_id` (`dp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pasien`
--
ALTER TABLE `data_pasien`
  MODIFY `dp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `du_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `e_payment`
--
ALTER TABLE `e_payment`
  MODIFY `ep_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_data`
--
ALTER TABLE `transaksi_data`
  MODIFY `td_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
