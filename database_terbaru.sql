-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Jan 2016 pada 13.04
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aks`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `idbarang` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8_bin NOT NULL,
  `deskripsi` longtext COLLATE utf8_bin NOT NULL,
  `idkategori` int(11) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `stock` int(11) NOT NULL,
  `foto` varchar(50) COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `idpetugas` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`idbarang`, `nama`, `deskripsi`, `idkategori`, `harga`, `stock`, `foto`, `last_update`, `idpetugas`) VALUES
(14, 'dada123', 'd', 7, 2, 2, '02-01-16-12-13-32.jpg', '2016-01-02 05:13:32', 1),
(16, 'qwesada', 'asdasda', 5, 1312, 231231, '01-01-16-13-51-29.jpg', '2016-01-01 07:05:24', 1),
(17, 're', 'asd', 7, 23, 23, '01-01-16-13-56-32.jpg', '2016-01-01 06:56:32', 2),
(18, 'xczxcxz', 'sdadas', 5, 3123, 312312, '02-01-16-12-09-49.jpg', '2016-01-02 05:09:49', 1),
(19, 'baru', 'dada', 5, 21312, 2131, '02-01-16-12-11-13.jpg', '2016-01-02 05:11:13', 1),
(21, 'dada1232', 'asd', 5, 23, 232, '02-01-16-18-59-36.jpg', '2016-01-02 11:59:36', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE IF NOT EXISTS `detail_transaksi` (
  `idtransaksi` int(11) NOT NULL,
  `idbarang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `idkategori` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`idkategori`, `nama`) VALUES
(5, 'Alat Tulisan'),
(7, 'Meja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `idpetugas` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(60) COLLATE utf8_bin NOT NULL,
  `kategori` char(1) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`idpetugas`, `nama`, `email`, `password`, `kategori`) VALUES
(1, 'admin', 'admin@aks.com', '21232f297a57a5a743894a0e4a801fc3', '1'),
(2, 'joko', 'joko@aks.com', '9ba0009aa81e794e628a04b51eaf7d7f', '2'),
(3, 'mariona', 'mariona@aks.com', '906ceea850ca1ea1feed2b5633445a11', '2'),
(4, 'a', 'a@a', '0cc175b9c0f1b6a831c399e269772661', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `idtransaksi` int(11) NOT NULL,
  `idpelanggan` int(11) NOT NULL,
  `tgl_transaksi` datetime NOT NULL,
  `total_item` int(11) NOT NULL,
  `total_harga` bigint(20) NOT NULL,
  `idpetugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`idpetugas`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idtransaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `idpetugas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idtransaksi` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
