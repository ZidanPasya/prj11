-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jun 2023 pada 18.39
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prj`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `divisi` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `divisi`, `password`) VALUES
('badminton1', 'Badminton Tunggal', 'badminton'),
('badminton2', 'Badminton Ganda', 'badminton'),
('cpc', 'cpc', 'cpc'),
('futsal', 'Futsal', 'Futsal'),
('lct', 'LCT', 'lct'),
('ML', 'ML', 'ML'),
('pes', 'pes', 'pes'),
('photography', 'photography', 'photography'),
('poster', 'poster', 'poster');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `no_hp` varchar(100) DEFAULT NULL,
  `Instansi` varchar(100) DEFAULT NULL,
  `id_pendaftaran` int(11) DEFAULT NULL,
  `bukti_identitas` varchar(1000) DEFAULT NULL,
  `email` varchar(1000) DEFAULT NULL,
  `birth` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `divisi` varchar(100) DEFAULT NULL,
  `sekolah` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nama_tim` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `id_peserta` int(11) DEFAULT NULL,
  `statusPembayaran` int(11) DEFAULT NULL,
  `buktiPembayaran` varchar(1000) DEFAULT NULL,
  `karya` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `telpon` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id`, `email`, `password`, `nama`, `telpon`) VALUES
(225, 'flixx2843@gmail.com', '$2y$10$JaEeDA4nbGZWKv1jx7iVfuMrCiIJlRAMhDq9moRxJVFOW.0a09PSK', 'Shiro Flixx', '012345678901');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pendaftaran` (`id_pendaftaran`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_peserta` (`id_peserta`);

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1140;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=402;

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `id_pendaftaran` FOREIGN KEY (`id_pendaftaran`) REFERENCES `pendaftaran` (`id`);

--
-- Ketidakleluasaan untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_ibfk_1` FOREIGN KEY (`id_peserta`) REFERENCES `peserta` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
