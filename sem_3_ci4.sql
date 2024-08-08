-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Des 2023 pada 05.10
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sem_3_ci4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `id_karyawan` int(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `posisi` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_karyawan`
--

INSERT INTO `data_karyawan` (`id_karyawan`, `nama`, `posisi`, `status`) VALUES
(47, 'Nur Saifuddin', 'informatika', 'aktif'),
(65, 'andik', 'kasir', 'aktif'),
(66, 'joni', 'otlet', 'aktif'),
(67, 'rudi', 'manager', 'aktif'),
(68, 'Prikkkk', 'informatika', 'aktif'),
(69, 'faza', 'informatika', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_rekap`
--

CREATE TABLE `data_rekap` (
  `id_rekap` int(11) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `nomin` varchar(50) NOT NULL,
  `pemba` varchar(50) NOT NULL,
  `penja` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_rekap`
--

INSERT INTO `data_rekap` (`id_rekap`, `ket`, `nomin`, `pemba`, `penja`) VALUES
(12, 'Gaji Karyawan Bulan November', '30000000', 'Transfer', 'Andik'),
(13, 'Beli Alat Pemadam Kebakaran', '3000000', 'Cash', 'Andik'),
(14, 'Tasakuran', '5000000', 'Cash', 'Joni'),
(15, 'Rehap Halaman Depan', '4000000', 'Cash', 'Andik'),
(16, 'Perbaikan Wifi', '800000', 'Cash', 'Fuddin'),
(18, '33333', '111111', '11111', '111111');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_user`
--

CREATE TABLE `data_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_user`
--

INSERT INTO `data_user` (`id_user`, `username`, `password`, `fullname`, `created_at`, `updated_at`) VALUES
(2, 'user', '$2y$10$FhBEalbLpm3uXWS3MXzRxekBhDVEDbMLcvTXNjLtMhITJxP33.a06', 'user1', '', ''),
(4, 'admin', '$2y$10$WhRAQVRUwuffHHBvGq3MO.KbWWsZSVUdLXgxLBDJQwKkSLDGKrOG.', 'admin1', '', ''),
(5, 'fuddin', '$2y$10$LVN1SSipRJXEojo6Y3KjOepOYEGZxqwnXLHUY8LSrdNZgz9Dwtmd.', 'Nur Saifuddin', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indeks untuk tabel `data_rekap`
--
ALTER TABLE `data_rekap`
  ADD PRIMARY KEY (`id_rekap`);

--
-- Indeks untuk tabel `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_karyawan`
--
ALTER TABLE `data_karyawan`
  MODIFY `id_karyawan` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `data_rekap`
--
ALTER TABLE `data_rekap`
  MODIFY `id_rekap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
