-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Des 2021 pada 15.08
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_inap`
--

CREATE TABLE `tabel_inap` (
  `id_inap` int(100) NOT NULL,
  `bulan` varchar(128) NOT NULL,
  `kode_tamu` varchar(11) NOT NULL,
  `tgl_inap` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `no_kamar` varchar(256) NOT NULL,
  `jenis_kamar` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_inap`
--

INSERT INTO `tabel_inap` (`id_inap`, `bulan`, `kode_tamu`, `tgl_inap`, `tgl_keluar`, `no_kamar`, `jenis_kamar`) VALUES
(8, 'Desember', 'T0001', '2021-12-10', '2021-12-20', 'A001', 'Single'),
(10, 'Desember', 'T0002', '2021-12-25', '2021-12-31', 'A002', 'Suite'),
(11, 'Februari', 'T0001', '2021-12-01', '2021-12-29', '51', 'VIP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_tamu`
--

CREATE TABLE `tabel_tamu` (
  `kode_tamu` varchar(100) NOT NULL,
  `nama_tamu` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_tamu`
--

INSERT INTO `tabel_tamu` (`kode_tamu`, `nama_tamu`, `alamat`, `no_telp`) VALUES
('005', 'NAMI', 'EAST BLUE', '0876252452'),
('008', 'MONKEY D LUFFY', 'NORTH BLUE', '038998398'),
('T0001', 'HABIB', 'LINTAU', '082212124321');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_inap`
--
ALTER TABLE `tabel_inap`
  ADD PRIMARY KEY (`id_inap`);

--
-- Indeks untuk tabel `tabel_tamu`
--
ALTER TABLE `tabel_tamu`
  ADD PRIMARY KEY (`kode_tamu`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_inap`
--
ALTER TABLE `tabel_inap`
  MODIFY `id_inap` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
