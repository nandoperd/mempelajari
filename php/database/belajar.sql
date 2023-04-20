-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Apr 2023 pada 12.19
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bola`
--

CREATE TABLE `bola` (
  `id` int(11) NOT NULL,
  `nama` varchar(55) DEFAULT NULL,
  `club` varchar(55) DEFAULT NULL,
  `posisi` varchar(55) DEFAULT NULL,
  `gambar` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bola`
--

INSERT INTO `bola` (`id`, `nama`, `club`, `posisi`, `gambar`) VALUES
(35, 'PIRLO', 'AC MILAN', 'DMF', '643c2c74273b8.png'),
(36, 'DEL PIERO', 'JUVENTUS', 'SS', '643c34b8d66a3.png'),
(37, 'ADRIANO', 'INTER MILAN', 'CF', '643c34dc8ce1b.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(5, 'broker', '$2y$10$T8IPvsQReDhxdqDq39X50OmowWvKNPwvqko0vmup4YNkJzfFAlqI.'),
(6, 'admin', '$2y$10$ViqNxI.ZidUDHd6pXak2v.l1XcTk.nUurJCKpgLBSSfVtEDblqaFa'),
(8, 'tai', '$2y$10$uCAR/3XsVBd1Rzxj3DLnXeRvw51UnY0xenmElnBqv.Dc2Ca.V9gza');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bola`
--
ALTER TABLE `bola`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bola`
--
ALTER TABLE `bola`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
