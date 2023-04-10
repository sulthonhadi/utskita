-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Apr 2023 pada 02.52
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
-- Database: `db_mhs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ifa_mhs`
--

CREATE TABLE `ifa_mhs` (
  `id` int(11) NOT NULL,
  `KODE MK` char(11) NOT NULL,
  `MATA KULIAH` varchar(50) NOT NULL,
  `SKS` char(2) NOT NULL,
  `JADWAL` varchar(70) NOT NULL,
  `DOSEN` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ifa_mhs`
--

INSERT INTO `ifa_mhs` (`id`, `KODE MK`, `MATA KULIAH`, `SKS`, `JADWAL`, `DOSEN`) VALUES
(1, 'W.0204.1.09', 'Statistik Deskriptif', '2', 'Ahad, I (07:30-09:00)', 'M. Qoyum Zuhriawan, M.Pd.'),
(2, 'W.0204.1.11', 'Praktikum Bahasa Pemrograman Web II', '0', 'Ahad, II (09:00-10:30)', 'Primaadi Airlangga, M.IT.'),
(3, 'W.0204.1.14', 'Matematika Diskrit', '3', 'Ahad, III (10:30-12:00)', 'Dr. H. Nurul Yaqin, M.Sc.'),
(4, 'W.0204.1.11', 'Bahasa Pemrograman Web II', '5', 'Sabtu, I (07:30-09:00)', 'Primaadi Airlangga, M.IT.'),
(5, 'W.0204.1.07', 'Jaringan Komputer dan Komunikasi Data', '3', 'Sabtu, II (09:00-10:30)', 'Agus Sifaunajah, M.Kom'),
(6, 'P.0204.1.01', 'Elektronika Dasar', '5', 'Sabtu, III (10:30-12:00)', 'Hasan Bisry Isa Alfaris, S.Kom'),
(7, 'P.0204.1.01', 'Praktikum Elektronika Dasar', '0', 'Sabtu, IV (12:30-14:00)', 'Hasan Bisry Isa Alfaris, S.Kom'),
(8, 'W.0204.1.12', 'Basis Data II', '3', 'Senin, I (07:30-09:00)', 'Tholib Hariono, S.Kom., M.Kom.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ifb_mhs`
--

CREATE TABLE `ifb_mhs` (
  `id2` int(11) NOT NULL,
  `KODE MK2` char(11) NOT NULL,
  `MATA KULIAH2` varchar(50) NOT NULL,
  `SKS2` char(2) NOT NULL,
  `JADWAL2` varchar(70) NOT NULL,
  `DOSEN2` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ifb_mhs`
--

INSERT INTO `ifb_mhs` (`id2`, `KODE MK2`, `MATA KULIAH2`, `SKS2`, `JADWAL2`, `DOSEN2`) VALUES
(1, 'W.0204.1.11', 'Praktikum Bahasa Pemrograman Web II', '0', 'Ahad, I (07:30-09:00)', 'Primaadi Airlangga, M.IT.'),
(2, 'W.0204.1.09', 'Statistik Deskriptif', '2', 'Ahad, II (09:00-10:30)', 'Fitri Umardiyah, M.Pd'),
(3, 'W.0204.1.12', 'Basis Data II', '3', 'Ahad, III (10:30-12:00)', 'Tholib Hariono, S.Kom., M.Kom.'),
(4, 'W.0204.1.14', 'Matematika Diskrit', '3', 'Ahad, IV (12:30-14:00)', 'Dr. H. Nurul Yaqin, M.Sc.'),
(5, 'P.0204.1.01', 'Elektronika Dasar', '5', 'Sabtu, I (07:30-09:00)', 'Sujono, M.Kom'),
(6, 'P.0204.1.01', 'Praktikum Elektronika Dasar', '0', 'Sabtu, II (09:00-10:30)', 'Sujono, M.Kom'),
(7, 'W.0204.1.11', 'Bahasa Pemrograman Web II', '5', 'Sabtu, III (10:30-12:00)', 'Primaadi Airlangga, M.IT.'),
(8, 'W.0204.1.07', 'Jaringan Komputer dan Komunikasi Data', '3', 'Senin, II (09:00-10:30)', 'Agus Sifaunajah, M.Kom');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ifa_mhs`
--
ALTER TABLE `ifa_mhs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ifb_mhs`
--
ALTER TABLE `ifb_mhs`
  ADD PRIMARY KEY (`id2`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ifa_mhs`
--
ALTER TABLE `ifa_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `ifb_mhs`
--
ALTER TABLE `ifb_mhs`
  MODIFY `id2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
