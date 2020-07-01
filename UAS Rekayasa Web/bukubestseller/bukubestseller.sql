-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 01, 2020 at 12:52 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukubestseller`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_buku`
--

CREATE TABLE `daftar_buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(255) NOT NULL,
  `jenis_buku` varchar(255) NOT NULL,
  `nama_penulis` varchar(255) NOT NULL,
  `tahun_penerbit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_buku`
--

INSERT INTO `daftar_buku` (`id_buku`, `nama_buku`, `jenis_buku`, `nama_penulis`, `tahun_penerbit`) VALUES
(1, 'Sebuah Seni Untuk bersikap Bodoh Amat', 'Novel', 'Mark manson', 2018),
(2, 'Orang-orang Biasa ', 'Novel', 'Andera Hirata', 2019),
(3, 'Konspirasi Alam Semesta', 'Novel', 'Fiersa Besari', 2017),
(4, 'Nanti Kita Cerita Tentang Hari Ini', 'Novel', 'Marchella Febritrisia putri', 2018),
(5, 'Arah Langka', 'Novel', 'Fiersa Besari', 2018),
(6, 'Data Mining Untuk Klasifikasi dan Klasterisasi Data', 'Pelajaran', 'Suryanto', 2017),
(7, 'Mantappu Jiwa', 'Novel', 'J.Rome Polin', 2019),
(8, 'Kami Bukan Sarjana', 'Novel', 'J.S.Khairen', 2019),
(9, 'Seni Berbicara ', 'Novel', 'Larry King, Bill Gillbert', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `daftar_request`
--

CREATE TABLE `daftar_request` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(255) NOT NULL,
  `jenis_buku` varchar(255) NOT NULL,
  `tahun_penerbit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_request`
--

INSERT INTO `daftar_request` (`id_buku`, `nama_buku`, `jenis_buku`, `tahun_penerbit`) VALUES
(1, 'Bobo', 'Novel Tidur', '2003'),
(2, 'Rima', 'Novel', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `api_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_depan`, `nama_belakang`, `email`, `password`, `api_key`) VALUES
(1, 'Dwi', 'Indah', 'dwiindah@mail.com', '25d55ad283aa400af464c76d713c07ad', 'c2d377e8025184780024144bf5dd3f95'),
(2, 'Rika', 'Harianti', 'rikaharianti@mail.com', '25d55ad283aa400af464c76d713c07ad', 'ef420251d09c1bc49c5c996826f84836'),
(3, 'Tes', 'User', 'tesuser@mail.com', '25d55ad283aa400af464c76d713c07ad', 'd88049f44b5e98698e08327b822b975e'),
(5, 'Budi', 'Andika', 'budi@mail.comm', '25d55ad283aa400af464c76d713c07ad', 'e06f0cff4e9cc348f3efb2bb75de3ed8'),
(6, 'Coba', 'Lagi', 'cobalagi@mail.com', '25d55ad283aa400af464c76d713c07ad', 'de97f62d8cc81a765b42f17146fef4cc'),
(7, 'andin', 'nur', 'andinnur@gmail.com', '25d55ad283aa400af464c76d713c07ad', '6b13e322c9a9504343540ec20de9ba7c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_buku`
--
ALTER TABLE `daftar_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `daftar_request`
--
ALTER TABLE `daftar_request`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_buku`
--
ALTER TABLE `daftar_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `daftar_request`
--
ALTER TABLE `daftar_request`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
