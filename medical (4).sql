-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2019 at 03:53 AM
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
(1, '', 'Fakhri Rizha Ananda', 'Pria', 'Medan', '2019-01-15', 'Jll. Sidodadi Komplek Johor Regency B6', '085398652346'),
(2, '', 'Muhammad Rafif Rasyidi', 'Pria', 'Kisaran', '2001-01-12', '', '085398652346'),
(3, '', 'Ibnu Maulana', 'Pria', 'Medan', '1999-10-11', '', '0895611277834'),
(4, '', 'Ananda Muharriz', 'Pria', 'Medan', '1998-01-31', '', '082276100819'),
(5, '', 'Dinul Iman', 'Pria', 'Bukitinggi', '2000-07-03', '', '085358547544'),
(6, '', 'Abadi Tarigan', 'Pria', 'Binjai', '1998-02-10', '', '081292028690'),
(7, '', 'Aini Wijaya', 'Wanita', 'Banda Aceh', '1999-10-12', '', '081347658901'),
(8, '', 'Ali Hidayat', 'Pria', 'Medan', '1998-11-24', '', '082241789020'),
(9, '', 'Allen Tampubolon', 'Pria', 'Brastagi', '1992-01-17', '', '082281905480'),
(10, '', 'Allia Rania Sitorus', 'Wanita', 'Kisaran', '2006-01-19', '', '082170908854'),
(11, '', 'Martinus Putra', 'Pria', 'Kisaran', '1999-11-13', '', '081222657890'),
(12, '', 'Isnan Wildani Putra', 'Pria', 'Tanjung Balai', '1999-07-13', '', '082166784190'),
(13, '', 'Haris Winanda Jaya', 'Pria', 'Batu Bara', '2002-08-13', '', '082267449088'),
(14, '', 'Ryan Muthakin', 'Pria', 'Tebing Tinggi', '1998-07-25', '', '082276449077'),
(15, '', 'Ihsan Malik Akhsal', 'Pria', 'Perbaungan', '1999-01-07', '', '081266888040'),
(16, '', 'Fadhilla Nazwi Harahap', 'Wanita', 'Binjai', '1999-10-19', '', '081231567901'),
(17, '', 'Putri Permata Sari', 'Wanita', 'Kisaran', '1998-08-11', '', '082256198020'),
(18, '', 'Desi Arianti Silalahi', 'Wanita', 'Medan', '1999-01-14', '', '085322795101'),
(19, '', 'Rayfa Armadina', 'Wanita', 'Kisaran', '1992-08-22', '', '08221680001'),
(20, '', 'Yuyunda Hanum', 'Wanita', 'Kisaran', '1986-08-11', '', '082270189411'),
(21, '', 'Muhammad Kenzie Ar-Rasyid', 'Pria', 'Banda Aceh', '1994-09-13', '', '082279018851'),
(22, '', 'Nurhayati Purnama', 'Wanita', 'Kisaran', '2008-07-08', '', '082265718801'),
(23, '', 'Rizka Azzura Sirait', 'Wanita', 'Kisaran', '2001-04-28', '', '082277915101'),
(24, '', 'Sasha Puspita Sari', 'Wanita', 'Binjai', '2004-08-19', '', '082219095101'),
(25, '', 'Octavia Ramadhani', 'Wanita', 'Lubuk Pakam', '2002-01-09', '', '081255718201'),
(26, '', 'Suryano', 'Pria', 'Tebing Tinggi', '2000-07-29', '', '082261799011'),
(27, '', 'Ikbal Pebriansyah', 'Pria', 'Palembang', '1999-04-04', '', '089863548174'),
(28, '', 'Rangga Pratama Nugraha', 'Pria', 'Medan', '1999-10-24', '', '098954128745'),
(29, '', 'Rangga Pratama Nugraha', 'Pria', 'Padang', '1999-10-24', '', '0989788537162'),
(30, '', 'Baharuddin Budiman', 'Pria', 'Medan', '1998-01-02', '', '098976547621'),
(31, '', 'Muhammad Ikhwan Nasution', 'Pria', 'Aileu', '1999-03-11', '', '087868475533'),
(32, '', 'Heru Salim Siregar', 'Pria', 'Pekanbaru', '2011-12-19', '', '081374468531'),
(33, '', 'Lia Rahmawati', 'Wanita', 'Padang Panjang', '2005-05-31', '', '087867789054'),
(34, '', 'Yeni Azlia', 'Wanita', 'Solok Selatan', '0000-00-00', '', '085358768570'),
(35, '', 'Fany Emiliani Pulungan', 'Wanita', 'Padang Sidimpuan', '1997-09-10', '', '085357657433'),
(36, '', 'Tondi Mulia Raja Nasution', 'Pria', 'Pekanbaru', '2000-06-07', '', '131892107930'),
(37, '', 'Faisal Lubis', 'Pria', 'Kota Nopan', '2007-07-23', '', '085354765090'),
(38, '', 'Amidah Putriyani', 'Wanita', 'Sipirok', '0000-00-00', '', '085356709080');

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
(4, 'Ananda Muharriz', 'Pria', 'Medan', '1998-01-31', 'Jalan Flamboyan No.120', '082276100819', '922ef08ebee9160f7a7d05ddda2828b1', 'pasien'),
(5, 'Dinul Iman', 'Pria', 'Bukitinggi', '2000-07-03', 'Jl.Bromo', '085358547544', '2f167aea07257948f29dd88b8b649eb7', 'pasien'),
(6, 'Abadi Tarigan', 'Pria', 'Binjai', '1998-02-10', 'Jalan Pramuka No.20 Binjai', '081292028690', '490349ff9ca5f0566bbb366b5c6e2d3d', 'pasien'),
(7, 'Aini Wijaya', 'Wanita', 'Banda Aceh', '1999-10-12', 'Jalan Bunga Mawar No.20 Lubuk Pakam', '081347658901', '4810bfe800e43eadbd54f6646d8e09bc', 'pasien'),
(8, 'Ali Hidayat', 'Pria', 'Medan', '1998-11-24', 'Jalan Lestari No.03 Patumbak', '082241789020', '3282a05686ed8c135262f2fb8c236bec', 'pasien'),
(9, 'Allen Tampubolon', 'Pria', 'Brastagi', '1992-01-17', 'Jalan Susuk Komplek Naga No.12 Medan Helvetia', '082281905480', 'a16a71383b0dc009840d7a4a6b7186fa', 'pasien'),
(10, 'Allia Rania Sitorus', 'Wanita', 'Kisaran', '2006-01-19', 'Jalan Cokroaminoto No.121 Medan', '082170908854', 'cbe1442d76038315688db6afa08acbb4', 'pasien'),
(11, 'Martinus Putra', 'Pria', 'Kisaran', '1999-11-13', 'Jalan Elang No.9 Tanjung Balai', '081222657890', '302b061dea5882b2bb95e1cc04476f53', 'pasien'),
(12, 'Isnan Wildani Putra', 'Pria', 'Tanjung Balai', '1999-07-13', 'Jalan Jeruk Nipis No.7 Tanjung Balai', '082166784190', '1b2d14038472432e177a58056fbad04f', 'pasien'),
(13, 'Haris Winanda Jaya', 'Pria', 'Batu Bara', '2002-08-13', 'Jalan Sapto Argo No.10 Komplek Yoyo Medan', '082267449088', '0b312edd8ebf05cf6ec4833a936ce4ce', 'pasien'),
(14, 'Ryan Muthakin', 'Pria', 'Tebing Tinggi', '1998-07-25', 'Jalan Mangga No.10 Tebing Tinggi', '082276449077', '55f3f4b4a78789f3722e832984a970f6', 'pasien'),
(15, 'Ihsan Malik Akhsal', 'Pria', 'Perbaungan', '1999-01-07', 'Jalan Kucing No.10 Perbaungan', '081266888040', '508b8bc884ca2f051a622dff7bbfbba9', 'pasien'),
(16, 'Fadhilla Nazwi Harahap', 'Wanita', 'Binjai', '1999-10-19', 'Jalan Puring No.90 Binjai', '081231567901', '5d4d5f59d3513209f53f0c4621ea91e2', 'pasien'),
(17, 'Putri Permata Sari', 'Wanita', 'Kisaran', '1998-08-11', 'Jalan Naga Bonar No.20 Kisaran', '082256198020', '6f3eddb09eba50e026a84033043a64e6', 'pasien'),
(18, 'Desi Arianti Silalahi', 'Wanita', 'Medan', '1999-01-14', 'Jalan Imam Bonjol No.120 Medan', '085322795101', 'ccc3bacf14a0115a572031825de333e9', 'pasien'),
(19, 'Rayfa Armadina', 'Wanita', 'Kisaran', '1992-08-22', 'Jalan Tape No.12 Medan', '08221680001', '2bd749a628b719de84232f0639fc0906', 'pasien'),
(20, 'Yuyunda Hanum', 'Wanita', 'Kisaran', '1986-08-11', 'Jalan Maria Ulfa No.54 Kisaran', '082270189411', '2fbd8d7e2d0ddcc003d0b27bba5c2f86', 'pasien'),
(21, 'Muhammad Kenzie Ar-Rasyid', 'Pria', 'Banda Aceh', '1994-09-13', 'Jalan Merak Jingga No.01 Medan', '082279018851', '72a6cf616f82f618004b6be4b35f56ce', 'pasien'),
(22, 'Nurhayati Purnama', 'Wanita', 'Kisaran', '2008-07-08', 'Jalan Melur No.9 Kisaran', '082265718801', '04e08b5af92c3b1234e735137dc2d3a8', 'pasien'),
(23, 'Rizka Azzura Sirait', 'Wanita', 'Kisaran', '2001-04-28', 'Jalan Kamboja No.10 Kisaran', '082277915101', 'f2145825fc7e7df69e74d166e9152bfb', 'pasien'),
(24, 'Sasha Puspita Sari', 'Wanita', 'Binjai', '2004-08-19', 'Jalan Sambu No.2 Binjai', '082219095101', '569da9fdce18e3490fe95a7fa421e3a8', 'pasien'),
(25, 'Octavia Ramadhani', 'Wanita', 'Lubuk Pakam', '2002-01-09', 'Jalan Inang No.9 Komplek Surya Lubuk Pakam', '081255718201', '066157d3f4b8a5e5db79211b2db95f03', 'pasien'),
(26, 'Suryano', 'Pria', 'Tebing Tinggi', '2000-07-29', 'Jalan Tapai No.120 Medan', '082261799011', 'c48fc56d867db500f3cc68d7a9eb2134', 'pasien'),
(27, 'Ikbal Pebriansyah', 'Pria', 'Palembang', '1999-04-04', 'Jl. Perjuangan No. 54b', '089863548174', 'e06af0884722e803b5725dfef5d6d5ee', 'pasien'),
(28, 'Rangga Pratama Nugraha', 'Pria', 'Medan', '1999-10-24', 'Jl. Pimpinan No. 98', '098954128745', 'ae9cb7c1cd08c55c6915d1252fcc7cc8', 'pasien'),
(29, 'Rangga Pratama Nugraha', 'Pria', 'Padang', '1999-10-24', 'Jl. Pimpinan No. 98', '0989788537162', 'ae9cb7c1cd08c55c6915d1252fcc7cc8', 'pasien'),
(30, 'Baharuddin Budiman', 'Pria', 'Medan', '1998-01-02', 'Jl. Perjuangan No. 53', '098976547621', '20d4a29996b4cff0729eddec3be71766', 'pasien'),
(31, 'Muhammad Ikhwan Nasution', 'Pria', 'aileu', '1999-03-11', 'Jl.Istiqomah panyabungan 3', '087868475533', 'ffdbb96a11e3167f08c9fdc91ad94b6d', 'pasien'),
(32, 'Heru Salim Siregar', 'Pria', 'Pekanbaru', '2011-12-19', 'Jl. Bermula 7 Sipirok', '081374468531', '0a2fc1bbcd813bb0c58bfba89e3844f8', 'pasien'),
(33, 'Lia Rahmawati', 'Wanita', 'Padang Panjang', '2005-05-31', 'komplek perumahan asri tebing tinggi', '087867789054', '9dbf18b7530c4d47c482ad37bc2b2e21', 'pasien'),
(34, 'Yeni Azlia', 'Wanita', 'Solok Selatan', '0000-00-00', 'Padang Aro Solok Selatan', '085358768570', 'd41d8cd98f00b204e9800998ecf8427e', 'pasien'),
(35, 'Fany Emiliani Pulungan', 'Wanita', 'Padang Sidimpuan', '1997-09-10', 'Jl. Gatot Subroto3 Padang Sidimpuan', '085357657433', '841003481b8726988c6b714747537e2c', 'pasien'),
(36, 'Tondi Mulia Raja Nasution', 'Pria', 'Pekanbaru', '2000-06-07', 'Jl. Antara Kisaran', '131892107930', 'ec42f8596d4825b83f2663d5c51f6c27', 'pasien'),
(37, 'Faisal Lubis', 'Pria', 'Kota Nopan', '2007-07-23', 'Jl. Lintas Barat Panyabungan', '085354765090', '6775d93a129d79b20ad200db9799a0e0', 'pasien'),
(38, 'Amidah Putriyani', 'Wanita', 'Sipirok', '0000-00-00', 'Jl.lintas sipirok', '085356709080', 'd41d8cd98f00b204e9800998ecf8427e', 'pasien');

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
  MODIFY `dp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `du_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
