-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 21 Agu 2023 pada 06.33
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_akhir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nip` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `nip`, `password`, `foto`, `email`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sarah puji lestari', '30420200599', '$2y$10$cwhEplPu70I7YAXuqYMISequX953VG3H69neR2xbmx/qovVNECqX6', 'app/admin/1-1689351221-0u5sl.jpg', 'sarahpujilestari0@gmail.com', '', NULL, '2023-07-14 09:13:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berkas_pengajuan`
--

CREATE TABLE `berkas_pengajuan` (
  `id` int NOT NULL,
  `id_dosen` int NOT NULL,
  `fungsional` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `dupak` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `sk_pengantar` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `fcsk_pengangkatan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `fc_ijazah` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `transkip` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `spabsahkarim` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `hasil_validasi` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `link_bukti` longtext COLLATE utf8mb4_general_ci,
  `skfungsional` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `skpangter` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nidn` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `skruangan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `skgol` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nilaipeer` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `karyailmiah` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `linkkarya` longtext COLLATE utf8mb4_general_ci,
  `skp` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `sp_pendidikan` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sp_pengabdian` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sp_penelitian` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sp_penunjang` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berkas_pengajuan`
--

INSERT INTO `berkas_pengajuan` (`id`, `id_dosen`, `fungsional`, `dupak`, `sk_pengantar`, `fcsk_pengangkatan`, `fc_ijazah`, `transkip`, `spabsahkarim`, `hasil_validasi`, `link_bukti`, `skfungsional`, `skpangter`, `nidn`, `skruangan`, `skgol`, `nilaipeer`, `karyailmiah`, `linkkarya`, `skp`, `sp_pendidikan`, `sp_pengabdian`, `sp_penelitian`, `sp_penunjang`, `deskripsi`, `status`, `created_at`, `updated_at`) VALUES
(3, 1, 'Lektor 200', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Berkas tidak lengkap', '4', '2023-07-24 07:27:06', '2023-07-24 00:27:06'),
(8, 1, 'Lektor 200', 'app/Berkaspengajuan/-1691646646-5kuno.pdf', 'app/Berkaspengajuan/-1691646646-v7fiP.pdf', 'app/Berkaspengajuan/-1691646646-NVWhY.pdf', 'app/Berkaspengajuan/-1691646646-Uq3om.pdf', 'app/Berkaspengajuan/-1691646646-kG7Ca.pdf', 'app/Berkaspengajuan/-1691646646-dchQc.pdf', 'app/Berkaspengajuan/-1691646646-sCjZw.pdf', 'https://', 'app/Berkaspengajuan/-1691646646-WW4OK.pdf', 'app/Berkaspengajuan/-1691646646-y0DC4.pdf', 'app/Berkaspengajuan/-1691646646-fiAq9.pdf', 'app/Berkaspengajuan/-1691646646-GGG9Z.pdf', 'app/Berkaspengajuan/-1691646646-j0zc5.pdf', 'app/Berkaspengajuan/-1691646646-BmoSV.pdf', 'app/Berkaspengajuan/-1691646646-taOPY.pdf', 'https://', 'app/Berkaspengajuan/-1691646646-uuP8Q.pdf', 'app/Berkaspengajuan/-1691646646-5zHHv.pdf', 'app/Berkaspengajuan/-1691646646-qmbFk.pdf', 'app/Berkaspengajuan/-1691646646-hDfRU.pdf', 'app/Berkaspengajuan/8-1691658151-3ZujI.pdf', NULL, '2', '2023-08-10 09:02:35', '2023-08-10 02:02:35'),
(9, 1, 'Lektor 200', 'app/Berkaspengajuan/-1691987849-onwqU.pdf', 'app/Berkaspengajuan/-1691987848-ivxAY.pdf', 'app/Berkaspengajuan/-1691987849-sf0Bo.pdf', 'app/Berkaspengajuan/-1691987849-o5r9F.pdf', 'app/Berkaspengajuan/-1691987849-f75uJ.pdf', 'app/Berkaspengajuan/-1691987849-T6yIG.pdf', 'app/Berkaspengajuan/-1691987849-U9VVo.pdf', 'https://', 'app/Berkaspengajuan/-1691987849-C4Ya5.pdf', 'app/Berkaspengajuan/-1691987849-WJn8A.pdf', 'app/Berkaspengajuan/-1691987849-pdPwG.pdf', 'app/Berkaspengajuan/-1691987849-o82zx.pdf', 'app/Berkaspengajuan/-1691987849-nkTAb.pdf', 'app/Berkaspengajuan/-1691987849-AECOI.pdf', 'app/Berkaspengajuan/-1691987849-ZqGof.pdf', 'https://', 'app/Berkaspengajuan/-1691987849-2OCWi.pdf', 'app/Berkaspengajuan/-1691987849-eeCfM.pdf', 'app/Berkaspengajuan/-1691987849-IER58.pdf', 'app/Berkaspengajuan/-1691987849-atFtu.pdf', NULL, NULL, '1', '2023-08-13 21:37:29', '2023-08-13 21:37:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` int NOT NULL,
  `nip` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `gelar_depan` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gelar_belakang` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `unit_kerja` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `golongan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `gol_tmt` date NOT NULL,
  `skpengper` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `skpengter` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `skgol` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `skmasakerja` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `struktural` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fungsional` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tmtfungsional` date DEFAULT NULL,
  `ijazah` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `asalpt` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tahunlulus` date NOT NULL,
  `tempatlahir` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggallahir` date DEFAULT NULL,
  `jeniskelamin` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `nip`, `nama`, `gelar_depan`, `gelar_belakang`, `unit_kerja`, `status`, `golongan`, `gol_tmt`, `skpengper`, `skpengter`, `skgol`, `skmasakerja`, `struktural`, `fungsional`, `tmtfungsional`, `ijazah`, `jurusan`, `asalpt`, `tahunlulus`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '3042020053', 'Sarah Puji Lestari', NULL, 'M.T', 'Teknologi Informasi', 'Dosen PNS', 'III/c', '2023-07-18', 'abcd', 'abcd', NULL, NULL, NULL, 'Asisten Ahli', '2022-05-23', 'S2', 'Teknik Informatika', 'Universitas Tanjung Pura', '2023-07-01', 'Ketapang', '2023-06-23', 'Perempuan', '$2y$10$IoDHJxxSqWu/Jf/0ASYMP.9NlGCkIXHq7Z7DTBDKWQQFb.iJYaz9q', '', '2023-08-14 08:38:27', '2023-08-14 08:38:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_pengajuan`
--

CREATE TABLE `sk_pengajuan` (
  `id` int NOT NULL,
  `id_dosen` int NOT NULL,
  `filesk` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sk_pengajuan`
--

INSERT INTO `sk_pengajuan` (`id`, `id_dosen`, `filesk`, `created_at`, `updated_at`) VALUES
(1, 1, 'app/FileSK/-1691683919-TtmuD.pdf', '2023-08-10 16:11:59', '2023-08-10 16:11:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `template`
--

CREATE TABLE `template` (
  `id` int NOT NULL,
  `jenis_file` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_upload` date DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `template`
--

INSERT INTO `template` (`id`, `jenis_file`, `tgl_upload`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Dokumen DUPAK', '2023-07-24', 'app/Formattemplate/-Dokumen DUPAK.xls', '2023-07-23 23:52:51', '2023-07-24 10:06:25'),
(2, 'Pernyataan Keabsahan Karya Ilmiah', '2023-07-24', 'app/Formattemplate/-Pernyataan Keabsahan Karya Ilmiah.docx', '2023-07-23 23:57:41', '2023-07-24 10:07:28'),
(3, 'Form Permohonan Validasi', '2023-07-24', 'app/Formattemplate/-Form Permohonan Validasi.docx', '2023-07-23 23:57:59', '2023-07-24 10:08:33'),
(4, 'Penilaian Peer\r\n                                                        Review', '2023-07-24', 'app/Formattemplate/-Penilaian Peer Review.docx', '2023-07-23 23:58:13', '2023-07-24 10:09:12'),
(5, 'Pernyataan Keabsahan Karya Ilmiah', '2023-08-04', 'app/Formattemplate/-1691113170-abqHS.docx', '2023-08-03 18:39:30', '2023-08-03 18:39:30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berkas_pengajuan`
--
ALTER TABLE `berkas_pengajuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sk_pengajuan`
--
ALTER TABLE `sk_pengajuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indeks untuk tabel `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `berkas_pengajuan`
--
ALTER TABLE `berkas_pengajuan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sk_pengajuan`
--
ALTER TABLE `sk_pengajuan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `template`
--
ALTER TABLE `template`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
