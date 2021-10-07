-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2021 at 02:03 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbsiswa`
--

CREATE TABLE `tbsiswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(15) NOT NULL,
  `sekolah_asal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbsiswa`
--

INSERT INTO `tbsiswa` (`id_siswa`, `nama_siswa`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`) VALUES
(2, 'Dewi Okta E', 'Madiun', 'Perempuan', 'Islam', 'SMAN 2 MADIUN'),
(3, 'Yanuar Ardian', 'Bajang', 'Laki-laki', 'Islam', 'SMAN 1 TALUN'),
(4, 'Ayu Ariesta W', 'Bajang - Talun', 'Perempuan', 'Hindu', 'SMAN 1 TALUN'),
(5, 'Chika Labita', 'Pasuruan', 'Perempuan', 'Islam', 'SMKN 1 Pasuruan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbsiswa`
--
ALTER TABLE `tbsiswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbsiswa`
--
ALTER TABLE `tbsiswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
