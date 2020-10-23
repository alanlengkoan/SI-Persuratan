-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 24 Okt 2020 pada 00.07
-- Versi Server: 10.1.44-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_persuratan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `asal_surat`
--

CREATE TABLE `asal_surat` (
  `id_asal_surat` int(11) NOT NULL,
  `kd` varchar(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` text,
  `keterangan` text,
  `ins` datetime NOT NULL,
  `ins_id` int(11) DEFAULT NULL,
  `upd` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `upd_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `golongan`
--

CREATE TABLE `golongan` (
  `id_golongan` int(11) NOT NULL,
  `kd` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `ins` int(11) NOT NULL,
  `ins_id` datetime NOT NULL,
  `upd` int(11) NOT NULL,
  `upd_id` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `instansi`
--

CREATE TABLE `instansi` (
  `id_instansi` int(11) NOT NULL,
  `kd` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `ins` int(11) NOT NULL,
  `ins_id` datetime NOT NULL,
  `upd` int(11) NOT NULL,
  `upd_id` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `kd` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `ins` int(11) NOT NULL,
  `ins_id` datetime NOT NULL,
  `upd` int(11) NOT NULL,
  `upd_id` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sifat_surat`
--

CREATE TABLE `sifat_surat` (
  `id_sifat_surat` int(11) NOT NULL,
  `kd` varchar(10) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `keterangan` text,
  `ins` datetime NOT NULL,
  `ins_id` int(11) DEFAULT NULL,
  `upd` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `upd_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_surat_keluar` int(11) NOT NULL,
  `no_agenda` varchar(30) NOT NULL,
  `no_surat` varchar(30) NOT NULL,
  `tujuan_surat` int(11) NOT NULL,
  `sifat_surat` int(11) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `perihal` text NOT NULL,
  `ringkasan` text NOT NULL,
  `isi_surat` text NOT NULL,
  `keterangan` text NOT NULL,
  `arsip` varchar(30) NOT NULL,
  `ins` datetime NOT NULL,
  `ins_id` int(11) NOT NULL,
  `upd` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `upd_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_surat_masuk` int(11) NOT NULL,
  `no_agenda` varchar(30) NOT NULL,
  `no_surat` varchar(30) NOT NULL,
  `asal_surat` int(11) NOT NULL,
  `sifat_surat` int(11) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `perihal` text NOT NULL,
  `ringkasan` text NOT NULL,
  `isi_surat` text NOT NULL,
  `keterangan` text NOT NULL,
  `arsip` varchar(30) NOT NULL,
  `ins` int(11) NOT NULL,
  `ins_id` datetime NOT NULL,
  `upd` int(11) NOT NULL,
  `upd_id` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk_manual`
--

CREATE TABLE `surat_masuk_manual` (
  `id_surat_masuk_manual` int(11) NOT NULL,
  `no_agenda` varchar(30) NOT NULL,
  `no_surat` varchar(30) NOT NULL,
  `asal_surat` int(11) NOT NULL,
  `sifat_surat` int(11) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_kirim` date NOT NULL,
  `perihal` text NOT NULL,
  `ringkasan` text NOT NULL,
  `isi_surat` text NOT NULL,
  `keterangan` text NOT NULL,
  `arsip` varchar(30) NOT NULL,
  `ins` int(11) NOT NULL,
  `ins_id` datetime NOT NULL,
  `upd` int(11) NOT NULL,
  `upd_id` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tujuan_surat`
--

CREATE TABLE `tujuan_surat` (
  `id_tujuan_surat` int(11) NOT NULL,
  `kd` varchar(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` text,
  `keterangan` text,
  `ins` datetime NOT NULL,
  `ins_id` int(11) DEFAULT NULL,
  `upd` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `upd_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` text COLLATE utf8mb4_unicode_ci,
  `hak_akses` text COLLATE utf8mb4_unicode_ci,
  `status_aktif` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ins` datetime NOT NULL,
  `ins_id` int(11) DEFAULT NULL,
  `upd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `upd_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `nama`, `username`, `password`, `hak_akses`, `status_aktif`, `url`, `ins`, `ins_id`, `upd`, `upd_id`) VALUES
(1, 'Muhammad Iqbal', 'aku', '$2y$10$VIFuRrkCQS5RGc4Iaidm.u7BIc.FU8vH5jgQ4x4HaY5sz.6Sc4sAu', NULL, '1', '', '0000-00-00 00:00:00', 0, '2020-10-20 12:37:12', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_profil`
--

CREATE TABLE `users_profil` (
  `id_users_profil` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_instansi` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `ins` datetime NOT NULL,
  `ins_id` int(11) NOT NULL,
  `upd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `upd_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asal_surat`
--
ALTER TABLE `asal_surat`
  ADD PRIMARY KEY (`id_asal_surat`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id_golongan`);

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id_instansi`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `sifat_surat`
--
ALTER TABLE `sifat_surat`
  ADD PRIMARY KEY (`id_sifat_surat`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_surat_keluar`),
  ADD KEY `tujuan_surat` (`tujuan_surat`),
  ADD KEY `sifat_surat` (`sifat_surat`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_surat_masuk`),
  ADD KEY `asal_surat` (`asal_surat`),
  ADD KEY `sifat_surat` (`sifat_surat`);

--
-- Indexes for table `surat_masuk_manual`
--
ALTER TABLE `surat_masuk_manual`
  ADD PRIMARY KEY (`id_surat_masuk_manual`),
  ADD KEY `asal_surat` (`asal_surat`),
  ADD KEY `sifat_surat` (`sifat_surat`);

--
-- Indexes for table `tujuan_surat`
--
ALTER TABLE `tujuan_surat`
  ADD PRIMARY KEY (`id_tujuan_surat`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`) USING BTREE;

--
-- Indexes for table `users_profil`
--
ALTER TABLE `users_profil`
  ADD PRIMARY KEY (`id_users_profil`),
  ADD KEY `id_users` (`id_users`),
  ADD KEY `id_instansi` (`id_instansi`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asal_surat`
--
ALTER TABLE `asal_surat`
  MODIFY `id_asal_surat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sifat_surat`
--
ALTER TABLE `sifat_surat`
  MODIFY `id_sifat_surat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_surat_keluar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_surat_masuk` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tujuan_surat`
--
ALTER TABLE `tujuan_surat`
  MODIFY `id_tujuan_surat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users_profil`
--
ALTER TABLE `users_profil`
  MODIFY `id_users_profil` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
