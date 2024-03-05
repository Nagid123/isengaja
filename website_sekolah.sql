-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Mar 2024 pada 00.07
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
-- Database: `website_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `NIS` int(15) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(70) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` tinyint(1) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `ayah` varchar(50) DEFAULT NULL,
  `ibu` varchar(50) DEFAULT NULL,
  `pekerjaan_ayah` varchar(50) DEFAULT NULL,
  `pekerjaan_ibu` varchar(50) DEFAULT NULL,
  `alamat` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`NIS`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `ayah`, `ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `alamat`) VALUES
(0, 'jambul', 'jakarta', '2024-03-05', 0, 'islam', 'ya', 'tidak', 'oke', 'nice', 'dadad'),
(1, '', '', '0000-00-00', 0, '', '', '', '', '', ''),
(2, 'jambul', 'jakarta', '2024-03-05', 0, 'islam', 'ya', 'tidak', 'oke', 'nice', 'dadad'),
(100, 'jambul', 'jakarta', '2024-03-05', 0, 'islam', 'ya', 'tidak', 'oke', 'nice', 'dadad'),
(101, 'jambul', 'jakarta', '2024-03-05', 0, 'islam', 'ya', 'tidak', 'oke', 'nice', 'dadad'),
(102, 'jambul', 'jakarta', '2024-03-05', 0, 'islam', 'ya', 'tidak', 'oke', 'nice', 'dadad'),
(103, 'uugg', 'ugug', '2024-03-05', 0, 'hbhb', 'jbjb', 'jbjbjbj', 'bjbbbjb', 'jbjbjb', 'jbjb'),
(104, 'uugg', 'ugug', '2024-03-05', 0, 'hbhb', 'jbjb', 'jbjbjbj', 'bjbbbjb', 'jbjbjb', 'jbjb'),
(1019191, 'sqs', 'sqsqs', '2024-03-05', 0, 'qsqs', 'qsqsqs', 'qsqsqs', 'qsqsqsqs', 'qsqsqsqs', 'qsqsqsqs'),
(1919191, 'ewffewf', 'efewffe', '2024-03-05', 0, 'wefwefw', 'wefwefewf', 'wefweffe', 'wefefwfew', 'wefwef', 'wefeffew');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'andi', 'andi123', 'an123', 'tim_IT'),
(2, 'Joko', 'Joko123', 'ko123', 'Guru'),
(3, 'fuad', 'fuad123', 'ad123', 'siswa'),
(4, 'ijat', 'ijat123', 'jat123', 'staff_admin'),
(5, 'dhika', 'dhika123', 'dik123', 'admin_sekolah'),
(6, 'tono', 'tono123', 'to123', 'orang_tua'),
(8, 'gg', 'hhhuuhh', 'hhh', 'Siswa'),
(9, 'gg', 'hhhuuhh', 'hhh', 'Staff Admin'),
(10, 'gg', 'hhhuuhh', 'hhh', 'IT'),
(11, 'tin', 'jus', '11111', 'tim_IT'),
(12, 'justin', 'kardus', '123', 'tim_IT'),
(13, 'aldos', 'dos', '123', 'tim_IT'),
(14, 'jamet', 'master', '123', 'tim IT');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NIS`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
