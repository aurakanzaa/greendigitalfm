-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 04:05 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greendigitalfm`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_keranjang`
--

CREATE TABLE `detail_keranjang` (
  `ID_DETAIL_KERANJANG` int(11) NOT NULL,
  `ID_SAYUR` int(11) DEFAULT NULL,
  `ID_KERANJANG` int(11) DEFAULT NULL,
  `ID_USER` int(11) NOT NULL,
  `TOTAL_HARGA_ITEM` int(11) NOT NULL,
  `JUMLAH_ITEM` int(11) NOT NULL,
  `TOTAL_BAYAR` int(11) NOT NULL,
  `TGL_BELI` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_keranjang`
--

INSERT INTO `detail_keranjang` (`ID_DETAIL_KERANJANG`, `ID_SAYUR`, `ID_KERANJANG`, `ID_USER`, `TOTAL_HARGA_ITEM`, `JUMLAH_ITEM`, `TOTAL_BAYAR`, `TGL_BELI`) VALUES
(30, 4, 18, 5, 2500, 3, 7500, '2018-05-22 02:30:49'),
(31, 2, 18, 5, 3500, 5, 10500, '2018-05-22 02:31:56'),
(32, 4, 19, 6, 2500, 3, 7500, '2018-05-22 02:53:06'),
(33, 4, 18, 5, 2500, 3, 7500, '2018-05-22 13:11:10');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pembelian`
--

CREATE TABLE `detail_pembelian` (
  `ID_DETAIL_PEMBELIAN` int(11) NOT NULL,
  `NIP_VERIFICATOR` int(11) DEFAULT NULL,
  `ID_PEMBELIAN` int(11) DEFAULT NULL,
  `ALAMAT_KIRIM` varchar(100) NOT NULL,
  `TGL_KIRIM` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `STATUS_KIRIM` tinyint(4) NOT NULL DEFAULT '0',
  `NAMA_DRIVER` varchar(50) DEFAULT NULL,
  `NOPOL_DRIVER` varchar(10) DEFAULT NULL,
  `NO_GOSEND` varchar(10) DEFAULT NULL,
  `FILE_INVOICE` longtext,
  `BUKTI_TF` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pembelian`
--

INSERT INTO `detail_pembelian` (`ID_DETAIL_PEMBELIAN`, `NIP_VERIFICATOR`, `ID_PEMBELIAN`, `ALAMAT_KIRIM`, `TGL_KIRIM`, `STATUS_KIRIM`, `NAMA_DRIVER`, `NOPOL_DRIVER`, `NO_GOSEND`, `FILE_INVOICE`, `BUKTI_TF`) VALUES
(13, NULL, 17, 'unair kampus c', '2018-05-22 02:32:13', 1, NULL, NULL, NULL, '12135a.jpg', NULL),
(15, NULL, 18, 'malang\r\nsawojajar', '2018-05-22 13:06:34', 0, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `diskon`
--

CREATE TABLE `diskon` (
  `ID_COUPON` int(11) NOT NULL,
  `TGL_TERBIT` date NOT NULL,
  `TGL_VALID` date NOT NULL,
  `TYPE_COUPON` text NOT NULL,
  `NOMINAL_COUPON` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diskon`
--

INSERT INTO `diskon` (`ID_COUPON`, `TGL_TERBIT`, `TGL_VALID`, `TYPE_COUPON`, `NOMINAL_COUPON`) VALUES
(1, '2018-05-03', '2018-06-22', 'Diskon', 25000),
(2, '2018-05-05', '2018-05-16', 'Kupon', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `history_trans_seller`
--

CREATE TABLE `history_trans_seller` (
  `NO_HISTORY` int(11) NOT NULL,
  `ID_TOKO` int(11) DEFAULT NULL,
  `ID_DETAIL_KERANJANG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `ID_KATEGORI` int(11) NOT NULL,
  `NAMA_KATEGORI` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`ID_KATEGORI`, `NAMA_KATEGORI`) VALUES
(1, 'Sayuran Daun'),
(2, 'Sayuran Akar'),
(3, 'Sayuran Batang'),
(4, 'Sayuran Buah'),
(5, 'Sayuran Bunga');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `ID_KERANJANG` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `STATUS_KERANJANG` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`ID_KERANJANG`, `ID_USER`, `STATUS_KERANJANG`) VALUES
(18, 5, 0),
(19, 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `ID_PEMBELIAN` int(11) NOT NULL,
  `ID_KERANJANG` int(11) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`ID_PEMBELIAN`, `ID_KERANJANG`, `ID_USER`) VALUES
(17, 18, 5),
(18, 19, 6),
(19, 19, 6);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `ID_SAYUR` int(11) NOT NULL,
  `ID_COUPON` int(11) DEFAULT NULL,
  `ID_KATEGORI` int(11) DEFAULT NULL,
  `ID_TOKO` int(11) DEFAULT NULL,
  `NAMA_SAYUR` varchar(20) NOT NULL,
  `HARGA_SAYUR` int(11) NOT NULL,
  `DETAIL_SAYUR` varchar(50) NOT NULL,
  `STATUS_SAYUR` tinyint(1) NOT NULL,
  `DISKON_SAYUR` tinyint(1) DEFAULT NULL,
  `HARGA_DISKON` int(11) DEFAULT NULL,
  `GAMBAR_SAYUR` varchar(20) NOT NULL,
  `STOCK_SAYUR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`ID_SAYUR`, `ID_COUPON`, `ID_KATEGORI`, `ID_TOKO`, `NAMA_SAYUR`, `HARGA_SAYUR`, `DETAIL_SAYUR`, `STATUS_SAYUR`, `DISKON_SAYUR`, `HARGA_DISKON`, `GAMBAR_SAYUR`, `STOCK_SAYUR`) VALUES
(1, 1, 2, 1, 'Broccoli', 7500, 'Broccoli mantabek', 1, NULL, NULL, 'images/broccoli2.jpg', 10),
(2, 2, 1, 3, 'Sawi', 3500, 'Sawi mania', 1, NULL, NULL, 'images/sawi.jpg', 8),
(3, 2, 3, 2, 'Asparagus', 8000, 'Asparagus enak sekali', 1, NULL, NULL, 'images/asparagus.jpg', 25),
(4, 1, 4, 2, 'Tomat', 2500, 'Tomat enak loh', 1, NULL, NULL, 'images/tomat.jpg', 17),
(5, 1, 5, 3, 'Kubis', 1600, 'Kubis mantap pol', 1, NULL, NULL, 'images/kubis.jpg', 13),
(6, 2, 1, 2, 'Basil', 5600, 'Basil mantabek', 1, NULL, NULL, 'images/basil.jpg', 16),
(7, 1, 2, 2, 'Kentang', 4300, 'kentang dong heuheu', 1, NULL, NULL, 'images/kentang.jpg', 17),
(9, 1, 2, 4, 'Wortel', 4300, 'Wortel itu oren enak sekali HEHE', 1, NULL, NULL, 'images/wortel.jpg', 23);

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `ID_TOKO` int(11) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `NAMA_TOKO` varchar(100) DEFAULT NULL,
  `ALAMAT_TOKO` varchar(100) DEFAULT NULL,
  `PROVINSI_TOKO` varchar(50) DEFAULT NULL,
  `KOTA_TOKO` varchar(50) DEFAULT NULL,
  `KODEPOS_TOKO` decimal(8,0) DEFAULT NULL,
  `RATING_TOKO` decimal(8,0) DEFAULT NULL,
  `NO_REK_TOKO` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`ID_TOKO`, `ID_USER`, `NAMA_TOKO`, `ALAMAT_TOKO`, `PROVINSI_TOKO`, `KOTA_TOKO`, `KODEPOS_TOKO`, `RATING_TOKO`, `NO_REK_TOKO`) VALUES
(1, 1, 'Toko Dudi', 'Jl. ASDF', 'Jawa Timur', 'Malang', '65154', '0', '123874918'),
(2, 1, 'Dudi Toko', 'Jl. ASDF', 'Jawa Timur', 'Malang', '65154', NULL, '12341580'),
(3, 2, 'Dev Toko', 'Jl. DFGH', 'Jawa Barat', 'Bandung', '71298', NULL, '7489174129'),
(4, 3, 'ASDF Shop', 'ASDF Selatan', 'ASDF h', 'ASDF C', '53462', NULL, '1923819238'),
(5, 6, 'Try Shop', 'Jl. Try', 'Jawa TImur', 'Malang', '78635', NULL, '1238912809'),
(6, 5, 'Try Shop', 'Jl. Try', 'Jawa TImur', 'ASDF C', '16531', NULL, '19381989182');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(191) NOT NULL,
  `NAMA_USER` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `ID_TOKO` int(11) DEFAULT NULL,
  `ALAMAT_USER` varchar(70) NOT NULL,
  `TELP_USER` varchar(20) NOT NULL,
  `NO_IDENTITAS2` varchar(25) NOT NULL,
  `BALANCE_MONEY` int(11) DEFAULT NULL,
  `REMEMBER_TOKEN` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `NAMA_USER`, `email`, `ID_USER`, `ID_TOKO`, `ALAMAT_USER`, `TELP_USER`, `NO_IDENTITAS2`, `BALANCE_MONEY`, `REMEMBER_TOKEN`) VALUES
('ilhamdudi', '$2y$10$/dBn81Atuy13C7oc.RgFierRh/YH/P6J88nPZuy/K3vBwNMuAS1K.', 'Ilham Dudi Adikarya Rahmad', 'ilhamdudi@example.com', 1, NULL, 'Jl. Jaya Srani VIII 7D', '082244165986', '132710990293', NULL, 'thMReI9MQfzxooKPtceBdI4pGRPBsyjyEhOIRtI0krRmwTpPFIYxbiaF87mD'),
('devs', '$2y$10$HDvGWfKdsC8V1DSe1h0G6u5WOZjsSBGnGUIk1ywFg.GUGThjsZPCa', 'developer', 'dev@dev.com', 2, NULL, 'devdevdev', '123456789', '123482000232', NULL, 'JApjcaQZJgM9UrseZA3EYrX6aNkfAl3lNLX4vfGmlTZA3pXJ7J088beoGTmS'),
('asdf', '$2y$10$uaSLaeJV2weHWHzTj54zh.mWJjckX4LynnfxzWzpCmtVPSoy3dBM6', 'asdfghjkl', 'asdf@asdf.com', 3, NULL, 'asdfjkgjl', '19023912039', '129381923812', NULL, '3lz4w7Ey0lUkYIxA3xV13kgLyb2LfVoYxkOmFhNCMI6757Cj6tKZb4I1Gn2z'),
('gdfm', '$2y$10$SRgykWcn6eV/JAiiTjdvlue885Un/Y7kTzGjttsnvqIlTF4kFjIpS', 'green digital fresh market', 'gdfm@gdfm.com', 4, NULL, 'gdfmgdfm', '931093109', '12909093123', NULL, 'v4VxepFExtuNMEiQuiimF756x4qq5Xc0Zp7FWA1dD7JF8KK9htgAKDAjUvX9'),
('Coba', '$2y$10$dW4dShQVsqpMKUUHar6N9OVPblZwaqfMgBt9n4EodEoZpTjWf8i1m', 'cobacoba', 'coba@coba.com', 5, NULL, 'cobacoba', '12939718', '1389123891', NULL, 'G7sjm8xEndSY91hx3zkoavadPPdIs8hJ69JH5oEYZruRemnKBhWJum5hIBF1'),
('try', '$2y$10$LEl2FNKMTfDrPwLeITwRF.4sqXFRYHABMlL4YLDH7Stf/dADeOqru', 'try', 'try@try.com', 6, NULL, 'try', '12398381', '192389128', NULL, 'Gz4A5ySQzEGBMWtDEBbvHNC9sGCMtjJTWXEWY5rhciq5ip6NnXNCzKOxx837');

-- --------------------------------------------------------

--
-- Table structure for table `verificator`
--

CREATE TABLE `verificator` (
  `NIP_VERIFICATOR` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(191) NOT NULL,
  `email` varchar(35) NOT NULL,
  `REMEMBER_TOKEN` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verificator`
--

INSERT INTO `verificator` (`NIP_VERIFICATOR`, `name`, `password`, `email`, `REMEMBER_TOKEN`) VALUES
(2, 'Admin', '$2y$10$U.PPSMBzhGhdnosxVJ9en.ojzKDwpDWz8qReFig19ZHR/V8eKTYlK', 'admin@admin.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_keranjang`
--
ALTER TABLE `detail_keranjang`
  ADD PRIMARY KEY (`ID_DETAIL_KERANJANG`),
  ADD KEY `FK_BERISI` (`ID_SAYUR`),
  ADD KEY `FK_DETAIL_KERANJANG` (`ID_KERANJANG`);

--
-- Indexes for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  ADD PRIMARY KEY (`ID_DETAIL_PEMBELIAN`),
  ADD KEY `FK_DETAIL_PEMBELIAN` (`ID_PEMBELIAN`),
  ADD KEY `FK_VERIFIKASI` (`NIP_VERIFICATOR`);

--
-- Indexes for table `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`ID_COUPON`);

--
-- Indexes for table `history_trans_seller`
--
ALTER TABLE `history_trans_seller`
  ADD PRIMARY KEY (`NO_HISTORY`),
  ADD KEY `FK_MELIHAT_TRANSAKSI` (`ID_TOKO`),
  ADD KEY `FK_RELATIONSHIP_12` (`ID_DETAIL_KERANJANG`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`ID_KATEGORI`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`ID_KERANJANG`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`ID_PEMBELIAN`),
  ADD KEY `FK_KERANJANG_BELI` (`ID_KERANJANG`),
  ADD KEY `FK_MENAMBAH` (`ID_USER`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`ID_SAYUR`),
  ADD KEY `FK_DAPAT` (`ID_COUPON`),
  ADD KEY `FK_JUAL` (`ID_TOKO`),
  ADD KEY `FK_MEMILIKI_KATEGORI` (`ID_KATEGORI`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`ID_TOKO`),
  ADD KEY `FK_MEMILIKI_TOKO2` (`ID_USER`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_USER`),
  ADD KEY `FK_MEMILIKI_TOKO` (`ID_TOKO`);

--
-- Indexes for table `verificator`
--
ALTER TABLE `verificator`
  ADD PRIMARY KEY (`NIP_VERIFICATOR`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_keranjang`
--
ALTER TABLE `detail_keranjang`
  MODIFY `ID_DETAIL_KERANJANG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  MODIFY `ID_DETAIL_PEMBELIAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `diskon`
--
ALTER TABLE `diskon`
  MODIFY `ID_COUPON` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `history_trans_seller`
--
ALTER TABLE `history_trans_seller`
  MODIFY `NO_HISTORY` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `ID_KATEGORI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `ID_KERANJANG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `ID_PEMBELIAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `ID_SAYUR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `ID_TOKO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `verificator`
--
ALTER TABLE `verificator`
  MODIFY `NIP_VERIFICATOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_keranjang`
--
ALTER TABLE `detail_keranjang`
  ADD CONSTRAINT `FK_BERISI` FOREIGN KEY (`ID_SAYUR`) REFERENCES `produk` (`ID_SAYUR`),
  ADD CONSTRAINT `FK_DETAIL_KERANJANG` FOREIGN KEY (`ID_KERANJANG`) REFERENCES `keranjang` (`ID_KERANJANG`);

--
-- Constraints for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  ADD CONSTRAINT `FK_DETAIL_PEMBELIAN` FOREIGN KEY (`ID_PEMBELIAN`) REFERENCES `pembelian` (`ID_PEMBELIAN`),
  ADD CONSTRAINT `FK_VERIFIKASI` FOREIGN KEY (`NIP_VERIFICATOR`) REFERENCES `verificator` (`NIP_VERIFICATOR`);

--
-- Constraints for table `history_trans_seller`
--
ALTER TABLE `history_trans_seller`
  ADD CONSTRAINT `FK_MELIHAT_TRANSAKSI` FOREIGN KEY (`ID_TOKO`) REFERENCES `toko` (`ID_TOKO`),
  ADD CONSTRAINT `FK_RELATIONSHIP_12` FOREIGN KEY (`ID_DETAIL_KERANJANG`) REFERENCES `detail_keranjang` (`ID_DETAIL_KERANJANG`);

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `FK_KERANJANG_BELI` FOREIGN KEY (`ID_KERANJANG`) REFERENCES `keranjang` (`ID_KERANJANG`),
  ADD CONSTRAINT `FK_MENAMBAH` FOREIGN KEY (`ID_USER`) REFERENCES `users` (`ID_USER`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `FK_DAPAT` FOREIGN KEY (`ID_COUPON`) REFERENCES `diskon` (`ID_COUPON`),
  ADD CONSTRAINT `FK_JUAL` FOREIGN KEY (`ID_TOKO`) REFERENCES `toko` (`ID_TOKO`),
  ADD CONSTRAINT `FK_MEMILIKI_KATEGORI` FOREIGN KEY (`ID_KATEGORI`) REFERENCES `kategori` (`ID_KATEGORI`);

--
-- Constraints for table `toko`
--
ALTER TABLE `toko`
  ADD CONSTRAINT `FK_MEMILIKI_TOKO2` FOREIGN KEY (`ID_USER`) REFERENCES `users` (`ID_USER`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_MEMILIKI_TOKO` FOREIGN KEY (`ID_TOKO`) REFERENCES `toko` (`ID_TOKO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
