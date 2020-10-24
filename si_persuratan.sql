-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 24 Okt 2020 pada 10.04
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
-- Struktur dari tabel `asal`
--

CREATE TABLE `asal` (
  `id_asal` int(11) NOT NULL,
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
-- Struktur dari tabel `sifat`
--

CREATE TABLE `sifat` (
  `id_sifat` int(11) NOT NULL,
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
-- Struktur dari tabel `tujuan`
--

CREATE TABLE `tujuan` (
  `id_tujuan` int(11) NOT NULL,
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
  `id_users_profil` int(11) NOT NULL,
  `id_instansi` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` text COLLATE utf8mb4_unicode_ci,
  `status_aktif` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ins` datetime NOT NULL,
  `ins_id` int(11) DEFAULT NULL,
  `upd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `upd_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `id_users_profil`, `id_instansi`, `id_jabatan`, `nama`, `email`, `telepon`, `foto`, `username`, `password`, `status_aktif`, `ins`, `ins_id`, `upd`, `upd_id`) VALUES
(1, 0, 0, 0, 'Muhammad Iqbal', '', '', '', 'aku', '$2y$10$VIFuRrkCQS5RGc4Iaidm.u7BIc.FU8vH5jgQ4x4HaY5sz.6Sc4sAu', '1', '0000-00-00 00:00:00', 0, '2020-10-20 12:37:12', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_level`
--

CREATE TABLE `users_level` (
  `id_users_level` int(11) NOT NULL,
  `level` varchar(50) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `hak_akses` text NOT NULL,
  `ins` datetime NOT NULL,
  `ins_id` int(11) NOT NULL,
  `upd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `upd_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asal`
--
ALTER TABLE `asal`
  ADD PRIMARY KEY (`id_asal`);

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
-- Indexes for table `sifat`
--
ALTER TABLE `sifat`
  ADD PRIMARY KEY (`id_sifat`);

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
-- Indexes for table `tujuan`
--
ALTER TABLE `tujuan`
  ADD PRIMARY KEY (`id_tujuan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`) USING BTREE,
  ADD KEY `id_users_profil` (`id_users_profil`),
  ADD KEY `id_instansi` (`id_instansi`),
  ADD KEY `id_instansi_2` (`id_instansi`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `users_level`
--
ALTER TABLE `users_level`
  ADD PRIMARY KEY (`id_users_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asal`
--
ALTER TABLE `asal`
  MODIFY `id_asal` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sifat`
--
ALTER TABLE `sifat`
  MODIFY `id_sifat` int(11) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT for table `tujuan`
--
ALTER TABLE `tujuan`
  MODIFY `id_tujuan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users_level`
--
ALTER TABLE `users_level`
  MODIFY `id_users_level` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
