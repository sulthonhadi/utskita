-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Apr 2023 pada 15.46
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id` int(11) NOT NULL,
  `kode_mk` varchar(20) NOT NULL,
  `mk` varchar(255) NOT NULL,
  `sks` varchar(25) NOT NULL,
  `jwl` text NOT NULL,
  `dosen` varchar(50) NOT NULL,
  `kls` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id`, `kode_mk`, `mk`, `sks`, `jwl`, `dosen`, `kls`) VALUES
(2, 'W.0204.1.09', 'Stastik Deskriptif ', '2', 'Ahad, I (07.30-09.00)', 'M.Qoyum Zuhriawan,M.Pd', 'A'),
(4, 'W.0204.1.11P', 'Praktikum Bahasa Pemrograman Web II', '0', 'Ahad, II (09:00-10:30)', 'Primaadi Airlangga, M.IT.', 'A'),
(5, 'W.0204.1.14	', 'Matematika Diskrit', '3', 'Ahad, III (10:30-12:00)', 'Dr. H. Nurul Yaqin, M.Sc.', 'A'),
(6, 'W.0204.1.11', 'Bahasa Pemrograman Web II', '5', 'Sabtu, I (07:30-09:00)', 'Primaadi Airlangga, M.IT.', 'A'),
(7, 'W.0204.1.07', 'Jaringan Komputer dan Komunikasi Data', '3', 'Sabtu, II (09:00-10:30)', 'Agus Sifaunajah, M.Kom', 'A'),
(8, 'P.0204.1.01', 'Elektronika Dasar', '5', 'Sabtu, III (10:30-12:00)', 'Hasan Bisry Isa Alfaris, S.Kom', 'A'),
(9, 'P.0204.1.01P', 'Praktikum Elektronika Dasar', '0', 'Sabtu, IV (12:30-14:00)', 'Hasan Bisry Isa Alfaris, S.Kom', 'A'),
(10, 'W.0204.1.12', 'Basis Data II', '3', 'Senin, I (07:30-09:00)', 'Tholib Hariono, S.Kom., M.Kom.', 'A'),
(11, 'W.0204.1.11P', 'Praktikum Bahasa Pemrograman Web II', '0', 'Ahad, I (07:30-09:00)', 'Primaadi Airlangga, M.IT.', 'B'),
(12, 'W.0204.1.09', 'Statistik Deskriptif', '2', 'Ahad, II (09:00-10:30)', 'Fitri Umardiyah, M.Pd', 'B'),
(13, 'W.0204.1.12', 'Basis Data II', '3', 'Ahad, III (10:30-12:00)', 'Tholib Hariono, S.Kom., M.Kom.', 'B'),
(14, 'W.0204.1.14', 'Matematika Diskrit', '3', 'Ahad, IV (12:30-14:00)', 'Dr. H. Nurul Yaqin, M.Sc.', 'B'),
(15, 'P.0204.1.01', 'Elektronika Dasar', '5', 'Sabtu, I (07:30-09:00)', 'Sujono, M.Kom', 'B'),
(16, 'P.0204.1.01P', 'Praktikum Elektronika Dasar', '0', 'Sabtu, II (09:00-10:30)', 'Sujono, M.Kom', 'B'),
(17, 'W.0204.1.11', 'Bahasa Pemrograman Web II', '5', 'Sabtu, III (10:30-12:00)', 'Primaadi Airlangga, M.IT.', 'B'),
(18, 'W.0204.1.07', 'Jaringan Komputer dan Komunikasi Data', '3', 'Senin, II (09:00-10:30)', 'Agus Sifaunajah, M.Kom', 'B');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
