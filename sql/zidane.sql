-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 25, 2023 at 04:13 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zidane`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_karyawan`
--

CREATE TABLE `detail_karyawan` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `username_user` int NOT NULL,
  `nama_lengkap` varchar(60) NOT NULL,
  `jabatan` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_karyawan`
--

INSERT INTO `detail_karyawan` (`id`, `id_user`, `username_user`, `nama_lengkap`, `jabatan`, `created_at`, `updated_at`) VALUES
(12, 25, 11111, 'Dandi', '[kepala_sekolah]', '2023-09-20 01:40:45', '2023-09-20 01:40:45'),
(13, 26, 12345, 'reynaldi', '[guru,wali_kelas]', '2023-09-20 02:02:37', '2023-09-20 18:52:55');

-- --------------------------------------------------------

--
-- Table structure for table `detail_siswa`
--

CREATE TABLE `detail_siswa` (
  `nisn` int NOT NULL,
  `user_id` int NOT NULL,
  `id_kelas` int DEFAULT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tempat` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anak_ke` int DEFAULT NULL,
  `alamat_siswa` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `sekolah_asal` varchar(50) DEFAULT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `pekerjaan_ayah` varchar(50) DEFAULT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  `pekerjaan_ibu` varchar(50) DEFAULT NULL,
  `alamat_ortu` varchar(100) DEFAULT NULL,
  `no_hp_ortu` varchar(20) DEFAULT NULL,
  `pekerjaan_wali` varchar(50) DEFAULT NULL,
  `nama_wali` varchar(255) DEFAULT NULL,
  `alamat_wali` varchar(255) DEFAULT NULL,
  `no_hp_wali` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_siswa`
--

INSERT INTO `detail_siswa` (`nisn`, `user_id`, `id_kelas`, `nama_lengkap`, `tempat`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `status`, `anak_ke`, `alamat_siswa`, `no_hp`, `sekolah_asal`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `alamat_ortu`, `no_hp_ortu`, `pekerjaan_wali`, `nama_wali`, `alamat_wali`, `no_hp_wali`, `created_at`, `updated_at`) VALUES
(1934567, 27, 2, 'Sandi Password', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-20 19:25:44', '2023-09-20 20:18:39'),
(12345678, 28, 2, 'Contoh Siswa', 'Lumajang', '2023-10-25', 'Laki - Laki', 'Islam', 'Anak', 1, 'Krasak', '086754563451', 'SMA PGRI 1 Lumajang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-25 22:20:58', '2023-10-09 01:35:11');

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakulikuler`
--

CREATE TABLE `ekstrakulikuler` (
  `id` int NOT NULL,
  `nisn` int DEFAULT NULL,
  `id_tahun_akademik` int DEFAULT NULL,
  `semester` varchar(100) DEFAULT NULL,
  `ekstrakulikuler1` varchar(100) DEFAULT NULL,
  `ekstrakulikuler2` varchar(100) DEFAULT NULL,
  `ekstrakulikuler3` varchar(100) DEFAULT NULL,
  `ekstrakulikuler4` varchar(100) DEFAULT NULL,
  `ekstrakulikuler5` varchar(100) DEFAULT NULL,
  `nilai_ekstra1` double DEFAULT NULL,
  `nilai_ekstra2` double DEFAULT NULL,
  `nilai_ekstra3` double DEFAULT NULL,
  `nilai_ekstra4` double DEFAULT NULL,
  `nilai_ekstra5` double DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ekstrakulikuler`
--

INSERT INTO `ekstrakulikuler` (`id`, `nisn`, `id_tahun_akademik`, `semester`, `ekstrakulikuler1`, `ekstrakulikuler2`, `ekstrakulikuler3`, `ekstrakulikuler4`, `ekstrakulikuler5`, `nilai_ekstra1`, `nilai_ekstra2`, `nilai_ekstra3`, `nilai_ekstra4`, `nilai_ekstra5`, `created_at`, `updated_at`) VALUES
(5, 1934567, 6, 'Genap', 'Tapak Suci', 'Hisbul Wathan', 'E-Sport', 'Drumband', 'Band', 80, 70, 90, 50, 80, '2023-10-11 09:18:28', '2023-10-11 09:30:53'),
(6, -1, 6, 'Genap', 'Tapak Suci', 'Hisbul Wathan', 'English Club', NULL, NULL, 0, 0, 0, 0, 0, '2023-10-16 02:13:07', '2023-10-16 02:13:07');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `informasi_sekolah`
--

CREATE TABLE `informasi_sekolah` (
  `id` int NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `npsn` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nss` varchar(50) DEFAULT NULL,
  `alamat_sekolah` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_pos` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desa` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kabupaten` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provinsi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_kepala` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nbm` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semester` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fase` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_pelajaran` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_tanggal_rapor` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `informasi_sekolah`
--

INSERT INTO `informasi_sekolah` (`id`, `nama_sekolah`, `npsn`, `nss`, `alamat_sekolah`, `kode_pos`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `website`, `email`, `nama_kepala`, `nbm`, `nip`, `semester`, `fase`, `tahun_pelajaran`, `tempat_tanggal_rapor`, `created_at`, `updated_at`) VALUES
(2, 'SMP Muhammadiyah 1 Malang', '53454564567567', '32423423432', 'Jl. Semarang No.5, Sumbersari, Kec. Lowokwaru, Kota Malang,', '65145', 'Oro Oro Dowo', 'Ijen', 'Malang', 'Jawa Timur', 'www.smp.muhasa', 'hmpspipsfisum@gmail.com', 'Yanur Setyaningrum, M.Pd', '78678876876', '343534636345', 'Genap', '3', '2023/2024', 'Malang / 2023-09-02', '2023-09-02 07:44:37', '2023-10-03 08:42:04');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int NOT NULL,
  `tingkat` int NOT NULL,
  `kelas` varchar(2) NOT NULL,
  `id_wali_kelas` int DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `tingkat`, `kelas`, `id_wali_kelas`, `created_at`, `updated_at`) VALUES
(2, 7, 'A', 13, '2023-09-21 01:26:58', '2023-09-21 01:52:55'),
(3, 7, 'B', NULL, '2023-09-21 06:06:00', '2023-09-21 06:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `mapel_kelas`
--

CREATE TABLE `mapel_kelas` (
  `id` int NOT NULL,
  `id_mapel` int NOT NULL,
  `id_kelas` int NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mapel_kelas`
--

INSERT INTO `mapel_kelas` (`id`, `id_mapel`, `id_kelas`, `created_at`, `updated_at`) VALUES
(7, 9, 3, '2023-09-22 14:46:40', '2023-09-22 14:46:40'),
(8, 9, 2, '2023-09-22 14:46:56', '2023-09-22 14:46:56'),
(9, 10, 3, '2023-09-22 14:47:09', '2023-09-22 14:47:09'),
(10, 10, 2, '2023-09-26 05:20:13', '2023-09-26 05:20:13'),
(11, 11, 2, '2023-10-04 04:57:26', '2023-10-04 04:57:26');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id` int NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `kkm` double NOT NULL,
  `id_guru` int NOT NULL,
  `semester` varchar(10) NOT NULL,
  `id_tahun_akademik` int NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id`, `nama_mapel`, `kkm`, `id_guru`, `semester`, `id_tahun_akademik`, `created_at`, `updated_at`) VALUES
(9, 'Matematika', 70, 13, 'Genap', 6, '2023-09-20 09:09:17', '2023-09-20 09:09:17'),
(10, 'Matematika Diskrit', 78, 13, 'Ganjil', 6, '2023-09-22 03:57:26', '2023-09-22 03:57:26'),
(11, 'IPA', 60, 13, 'Genap', 6, '2023-10-04 04:57:09', '2023-10-04 04:57:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_akhir`
--

CREATE TABLE `nilai_akhir` (
  `id` int NOT NULL,
  `nisn` int DEFAULT NULL,
  `id_mapel` int DEFAULT NULL,
  `pts` double DEFAULT '0',
  `pas` double DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai_akhir`
--

INSERT INTO `nilai_akhir` (`id`, `nisn`, `id_mapel`, `pts`, `pas`, `created_at`, `updated_at`) VALUES
(6, 12345678, 9, 90, 80, '2023-10-11 03:55:28', '2023-10-12 01:10:10');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_pancasila`
--

CREATE TABLE `nilai_pancasila` (
  `id` int NOT NULL,
  `nisn` int NOT NULL,
  `id_pancasila` int NOT NULL,
  `desc_pancasila1` varchar(255) DEFAULT NULL,
  `desc_pancasila2` varchar(255) DEFAULT NULL,
  `desc_pancasila3` varchar(255) DEFAULT NULL,
  `nilai_pancasila1` varchar(10) NOT NULL,
  `nilai_pancasila2` varchar(10) DEFAULT NULL,
  `nilai_pancasila3` varchar(10) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `step` int NOT NULL,
  `id_tahun_akademik` int NOT NULL,
  `semester` varchar(30) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai_pancasila`
--

INSERT INTO `nilai_pancasila` (`id`, `nisn`, `id_pancasila`, `desc_pancasila1`, `desc_pancasila2`, `desc_pancasila3`, `nilai_pancasila1`, `nilai_pancasila2`, `nilai_pancasila3`, `catatan`, `step`, `id_tahun_akademik`, `semester`, `created_at`, `updated_at`) VALUES
(10, 12345678, 5, 'Halo', 'BBBB', 'CCCC', 'BB', 'BSH', 'SB', 'bagus sekali', 1, 6, 'Genap', '2023-10-25 02:55:37', '2023-10-25 03:42:57'),
(11, 12345678, 5, 'Test', 'Bagus Sekali', 'Jelek Sekali', 'MB', 'MB', 'SB', 'bagus sekali', 2, 6, 'Genap', '2023-10-25 02:55:41', '2023-10-25 03:42:57');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_siswa`
--

CREATE TABLE `nilai_siswa` (
  `id` int NOT NULL,
  `nisn` varchar(30) DEFAULT NULL,
  `id_sumatif` int DEFAULT NULL,
  `id_mapel_kelas` int DEFAULT NULL,
  `nilai` double DEFAULT '0',
  `id_sumatif_tertinggi` int DEFAULT NULL,
  `id_sumatif_terendah` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai_siswa`
--

INSERT INTO `nilai_siswa` (`id`, `nisn`, `id_sumatif`, `id_mapel_kelas`, `nilai`, `id_sumatif_tertinggi`, `id_sumatif_terendah`, `created_at`, `updated_at`) VALUES
(28, '1934567', 1, 9, 90, NULL, NULL, '2023-10-04 15:24:59', '2023-10-04 08:24:59'),
(29, '12345678', 1, 9, 80, NULL, NULL, '2023-10-04 11:18:47', '2023-10-04 04:18:47'),
(30, '1934567', 2, 9, 70, NULL, NULL, '2023-10-04 11:19:51', '2023-10-04 04:19:51'),
(31, '12345678', 2, 9, 80, NULL, NULL, '2023-10-04 11:19:54', '2023-10-04 04:19:54'),
(34, '1934567', 3, 10, 90, NULL, NULL, '2023-10-04 11:25:12', '2023-10-04 04:25:12'),
(35, '12345678', 3, 10, 70, NULL, NULL, '2023-10-04 11:25:15', '2023-10-04 04:25:15'),
(36, '1934567', 4, 11, 70, NULL, NULL, '2023-10-04 11:58:15', '2023-10-04 04:58:15'),
(37, '12345678', 4, 11, 50, NULL, NULL, '2023-10-04 11:58:17', '2023-10-04 04:58:17'),
(38, '1934567', 5, 9, 90, NULL, NULL, '2023-10-09 11:45:26', '2023-10-09 04:45:26'),
(39, '12345678', 5, 9, 70, NULL, NULL, '2023-10-09 11:45:29', '2023-10-09 04:45:29');

-- --------------------------------------------------------

--
-- Table structure for table `pancasila`
--

CREATE TABLE `pancasila` (
  `id` int NOT NULL,
  `nama_project` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `sub_proyek1` varchar(255) DEFAULT NULL,
  `sub_proyek2` varchar(255) DEFAULT NULL,
  `sub_proyek3` varchar(255) DEFAULT NULL,
  `is_active` int(1) UNSIGNED ZEROFILL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pancasila`
--

INSERT INTO `pancasila` (`id`, `nama_project`, `deskripsi`, `sub_proyek1`, `sub_proyek2`, `sub_proyek3`, `is_active`, `created_at`, `updated_at`) VALUES
(5, 'Pancasila 1', 'Lorem Ipsum Pancasila 1', 'Toleransi', 'Tanggung Jawab', 'Kepemimpinan', 1, '2023-10-18 01:43:35', '2023-10-18 01:43:35'),
(6, 'Pancasila 2 Gas', 'Contoh Deskripsi', 'Berkembang', 'Menghargai', 'Taat Agama', 1, '2023-10-25 03:44:46', '2023-10-25 03:44:46');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `results_sumatif`
--

CREATE TABLE `results_sumatif` (
  `id` int NOT NULL,
  `id_mapel` int NOT NULL,
  `id_detail_siswa` int NOT NULL,
  `alpha` int NOT NULL,
  `ijin` int NOT NULL,
  `sakit` int NOT NULL,
  `id_sumatif_max` int DEFAULT NULL,
  `id_sumatif_min` int DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results_sumatif`
--

INSERT INTO `results_sumatif` (`id`, `id_mapel`, `id_detail_siswa`, `alpha`, `ijin`, `sakit`, `id_sumatif_max`, `id_sumatif_min`, `created_at`, `updated_at`) VALUES
(11, 9, 1934567, 0, 0, 20, NULL, NULL, '2023-10-03 04:17:30', '2023-10-03 04:22:33'),
(12, 9, 12345678, 0, 0, 0, NULL, NULL, '2023-10-03 04:17:32', '2023-10-03 04:17:32'),
(13, 10, 1934567, 0, 0, 0, NULL, NULL, '2023-10-04 04:22:15', '2023-10-04 04:22:15'),
(14, 10, 12345678, 0, 0, 0, NULL, NULL, '2023-10-04 04:25:14', '2023-10-04 04:25:14'),
(15, 11, 1934567, 0, 0, 0, NULL, NULL, '2023-10-04 04:58:12', '2023-10-04 04:58:12'),
(16, 11, 12345678, 0, 0, 0, NULL, NULL, '2023-10-04 04:58:17', '2023-10-04 04:58:17');

-- --------------------------------------------------------

--
-- Table structure for table `sumatif`
--

CREATE TABLE `sumatif` (
  `id` int NOT NULL,
  `id_mapel` int NOT NULL,
  `sumatif` int NOT NULL,
  `nama_sumatif` text NOT NULL,
  `high_deskripsi` text NOT NULL,
  `low_deskripsi` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sumatif`
--

INSERT INTO `sumatif` (`id`, `id_mapel`, `sumatif`, `nama_sumatif`, `high_deskripsi`, `low_deskripsi`, `created_at`, `updated_at`) VALUES
(1, 9, 1, 'Sumatif 1', 'Test Deskripsi Tertinggi', 'Test Deskripsi Terendah', '2023-09-25 03:44:29', '2023-09-26 08:57:50'),
(2, 9, 2, 'Sumatif 2', 'Selamat', 'Tingkatkan', '2023-10-03 04:18:06', '2023-10-03 04:18:06'),
(3, 10, 1, 'Sumatif 1', 'Selamat Bagus', 'Jelek', '2023-10-04 04:22:45', '2023-10-04 04:22:45'),
(4, 11, 1, 'Sumatif 1', 'Ipa Bagus', 'Ipa Jelek', '2023-10-04 04:57:53', '2023-10-04 04:57:53'),
(5, 9, 3, 'Sumatif 3', 'Desc Tert', 'Desc Terendah', '2023-10-05 02:20:18', '2023-10-05 02:20:18');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_akademik`
--

CREATE TABLE `tahun_akademik` (
  `id` int NOT NULL,
  `tahun_akademik` varchar(20) NOT NULL,
  `active` int NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tahun_akademik`
--

INSERT INTO `tahun_akademik` (`id`, `tahun_akademik`, `active`, `created_at`, `updated_at`) VALUES
(6, '2023/2024', 1, '2023-09-20 01:14:01', '2023-09-20 01:14:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(12, 'Admin', 'admin@gmail.com', 'admin', NULL, '$2y$10$5v3OKqdXdgr1D7P5L0/aweoiQn/fhjEj9WG4Qv20uMbHebX/kItCO', NULL, '2023-09-02 03:38:53', '2023-09-20 18:49:27'),
(25, '11111', 'dandi@gmail.com', '[kepala_sekolah]', NULL, '$2y$10$Wwbrulgq89zWWdnGDVo0y.q1fCYFSHyRCoVc.TCF1vHiuhykRuUn.', NULL, '2023-09-20 01:40:45', '2023-10-04 19:03:13'),
(26, '12345', 'reynaldiluma@gmail.com', '[guru,wali_kelas]', NULL, '$2y$10$OZJHEsLMVuo1kdrTRtBD1OVNXDBI9fWHb7iDbdLDdGCOoOBDumHlO', NULL, '2023-09-20 02:02:37', '2023-09-20 18:55:16'),
(27, '101010', NULL, 'siswa', NULL, '$2y$10$f/ACykkLfKg7oIugtvRxX.5tNZ4K5hbjL.uRZGT0AZ10JrluErEg6', NULL, '2023-09-20 19:25:44', '2023-09-20 19:25:44'),
(28, '123', NULL, 'siswa', NULL, '$2y$10$4nePfivVt95sRIUL24T/UuKXd0tK6BPNwMGjovylEz3MvNR8utPSS', NULL, '2023-09-25 22:20:58', '2023-09-25 22:20:58');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_avg_sumatif`
-- (See below for the actual view)
--
CREATE TABLE `vw_avg_sumatif` (
`id_mapel_kelas` int
,`id_sumatif_terendah` bigint
,`id_sumatif_tertinggi` bigint
,`nisn` varchar(30)
,`rata_rata` double
,`total_nilai` double
,`total_sumatif` bigint
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_hasil_nilai`
-- (See below for the actual view)
--
CREATE TABLE `vw_hasil_nilai` (
`id_mapel_kelas` int
,`id_sumatif_terendah` bigint
,`id_sumatif_tertinggi` bigint
,`id_tahun_akademik` int
,`nilai_max` double
,`nilai_min` double
,`nisn` varchar(30)
,`semester` varchar(10)
);

-- --------------------------------------------------------

--
-- Structure for view `vw_avg_sumatif`
--
DROP TABLE IF EXISTS `vw_avg_sumatif`;

CREATE VIEW `vw_avg_sumatif`  AS SELECT `ns`.`nisn` AS `nisn`, `ns`.`id_mapel_kelas` AS `id_mapel_kelas`, sum(`ns`.`nilai`) AS `total_nilai`, count(`s`.`id_mapel`) AS `total_sumatif`, round((sum(`ns`.`nilai`) / count(`ns`.`nilai`)),2) AS `rata_rata`, max(`vhn`.`id_sumatif_tertinggi`) AS `id_sumatif_tertinggi`, max(`vhn`.`id_sumatif_terendah`) AS `id_sumatif_terendah` FROM ((`nilai_siswa` `ns` left join (select `sumatif`.`id_mapel` AS `id_mapel`,count(0) AS `total_sumatif` from `sumatif` group by `sumatif`.`id_mapel`) `s` on((`s`.`id_mapel` = `ns`.`id_mapel_kelas`))) left join `vw_hasil_nilai` `vhn` on(((`ns`.`nisn` = `vhn`.`nisn`) and (`ns`.`id_mapel_kelas` = `vhn`.`id_mapel_kelas`)))) GROUP BY `ns`.`nisn`, `ns`.`id_mapel_kelas` ;

-- --------------------------------------------------------

--
-- Structure for view `vw_hasil_nilai`
--
DROP TABLE IF EXISTS `vw_hasil_nilai`;

CREATE VIEW `vw_hasil_nilai`  AS SELECT `ns`.`nisn` AS `nisn`, `ns`.`id_mapel_kelas` AS `id_mapel_kelas`, max(`ns`.`nilai`) AS `nilai_max`, `mp`.`semester` AS `semester`, `mp`.`id_tahun_akademik` AS `id_tahun_akademik`, min(`ns`.`nilai`) AS `nilai_min`, (select `nilai_siswa`.`id_sumatif` from `nilai_siswa` where ((`nilai_siswa`.`nisn` = `ns`.`nisn`) and (`nilai_siswa`.`id_mapel_kelas` = `ns`.`id_mapel_kelas`) and (`nilai_siswa`.`nilai` = max(`ns`.`nilai`))) limit 1) AS `id_sumatif_tertinggi`, (select `nilai_siswa`.`id_sumatif` from `nilai_siswa` where ((`nilai_siswa`.`nisn` = `ns`.`nisn`) and (`nilai_siswa`.`id_mapel_kelas` = `ns`.`id_mapel_kelas`) and (`nilai_siswa`.`nilai` = min(`ns`.`nilai`))) limit 1) AS `id_sumatif_terendah` FROM (`nilai_siswa` `ns` left join `mata_pelajaran` `mp` on((`ns`.`id_mapel_kelas` = `mp`.`id`))) GROUP BY `ns`.`nisn`, `ns`.`id_mapel_kelas` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_karyawan`
--
ALTER TABLE `detail_karyawan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `detail_siswa`
--
ALTER TABLE `detail_siswa`
  ADD PRIMARY KEY (`nisn`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `informasi_sekolah`
--
ALTER TABLE `informasi_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapel_kelas`
--
ALTER TABLE `mapel_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_akhir`
--
ALTER TABLE `nilai_akhir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_pancasila`
--
ALTER TABLE `nilai_pancasila`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pancasila`
--
ALTER TABLE `pancasila`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `results_sumatif`
--
ALTER TABLE `results_sumatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sumatif`
--
ALTER TABLE `sumatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_karyawan`
--
ALTER TABLE `detail_karyawan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informasi_sekolah`
--
ALTER TABLE `informasi_sekolah`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mapel_kelas`
--
ALTER TABLE `mapel_kelas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nilai_akhir`
--
ALTER TABLE `nilai_akhir`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nilai_pancasila`
--
ALTER TABLE `nilai_pancasila`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `pancasila`
--
ALTER TABLE `pancasila`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `results_sumatif`
--
ALTER TABLE `results_sumatif`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sumatif`
--
ALTER TABLE `sumatif`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
