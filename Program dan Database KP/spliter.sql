-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Des 2019 pada 08.23
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spliter`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','user','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `level`) VALUES
(4, 'dedenmfikri', '89a1652160bc7414760827f4b5146d0f', 'admin'),
(6, 'gelar', '8a8c0006cdd039ae762e04ba6a1f1375', 'admin'),
(7, 'wildan', 'ac174e67e662c4d31dcc2e8b16358024', 'user'),
(8, 'fariz', 'f492cb096759caf734665ff4bfb21066', 'user'),
(9, 'dimas', '51947e3cf64ee746b6f2c73d174d525a', 'user'),
(10, 'cepot', '3ce05517eccd41ac480b613189ff6cff', 'user'),
(11, 'dewala', 'c2e03bab1aa01b05eb6a9a50048db6de', 'user'),
(12, 'ahsan', '3d68b18bd9042ad3dc79643bde1ff351', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengecekan`
--

CREATE TABLE `pengecekan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `sn_spliter` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengecekan`
--

INSERT INTO `pengecekan` (`id`, `nama`, `tanggal`, `sn_spliter`, `jumlah`, `alamat`, `foto`, `status`) VALUES
(1, 'wildan', '2019-12-25', '12345', 1, 'jl.will1', '12345', 'Sudah'),
(2, 'wildan2', '2019-12-26', '1234', 1, 'jl.will2', '1234', 'Sudah'),
(3, 'wildan3', '2019-12-27', '123456', 1, 'jl.will3', '123456', 'Sudah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perbaikan`
--

CREATE TABLE `perbaikan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `spliter_asal` varchar(50) NOT NULL,
  `spliter_baru` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Belum'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perbaikan`
--

INSERT INTO `perbaikan` (`id`, `nama`, `tanggal`, `spliter_asal`, `spliter_baru`, `jumlah`, `alamat`, `status`) VALUES
(1, 'adoh', '2019-12-25', '12345', '54321', 1, 'jl.will1', 'Sudah'),
(2, 'adoh2', '2019-12-26', '1234', '4321', 1, 'jl.will2', 'Sudah'),
(3, 'adoh3', '2019-12-27', '123456', '654321', 1, 'jl.will3', 'Sudah');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengecekan`
--
ALTER TABLE `pengecekan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perbaikan`
--
ALTER TABLE `perbaikan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pengecekan`
--
ALTER TABLE `pengecekan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `perbaikan`
--
ALTER TABLE `perbaikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
