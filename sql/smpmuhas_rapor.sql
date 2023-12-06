-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 12, 2023 at 12:07 PM
-- Server version: 10.3.39-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smpmuhas_rapor`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_karyawan`
--

CREATE TABLE `detail_karyawan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `username_user` int(11) NOT NULL,
  `nama_lengkap` varchar(60) NOT NULL,
  `jabatan` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_karyawan`
--

INSERT INTO `detail_karyawan` (`id`, `id_user`, `username_user`, `nama_lengkap`, `jabatan`, `created_at`, `updated_at`) VALUES
(12, 25, 11111, 'Yanur Setyaningrum, M.Pd', '[kepala_sekolah]', '2023-11-08 15:08:46', '2023-11-08 08:08:46'),
(14, 36, 123456, 'Nosa Setiabudi', '[guru,wali_kelas]', '2023-11-09 06:53:52', '2023-11-08 23:53:52'),
(15, 37, 22222, 'Dra. Tri SAulawesiningsih', '[guru]', '2023-11-09 06:46:17', '2023-11-08 23:46:17'),
(16, 38, 33333, 'Farida Ulfa Nurhidayati, S.Pd, M.Pd', '[guru,wali_kelas]', '2023-11-08 08:12:15', '2023-11-08 08:12:15'),
(18, 40, 55555, 'Mawaddah, S.Pd', '[guru,wali_kelas]', '2023-11-08 08:14:21', '2023-11-08 08:14:21'),
(19, 41, 66666, 'Yuli Wachyuningtyas, S.Pd', '[guru,wali_kelas]', '2023-11-08 08:15:00', '2023-11-08 08:15:00'),
(20, 42, 77777, 'Artari febrianti, S.Pd', '[guru,wali_kelas]', '2023-11-08 08:15:52', '2023-11-08 08:15:52'),
(21, 43, 88888, 'Pudjijanto, S.Ag', '[guru,wali_kelas]', '2023-11-09 01:03:21', '2023-11-08 18:03:21'),
(22, 44, 99999, 'Masrudi, S.Pd', '[guru,wali_kelas]', '2023-11-10 00:47:20', '2023-11-09 17:47:20'),
(23, 45, 1010101, 'Solikhul Atmam, S.Ag', '[guru]', '2023-11-08 08:17:41', '2023-11-08 08:17:41'),
(24, 46, 612648, 'Sarbini Kuswantono, S.Pd, M.Pd', '[guru]', '2023-11-08 08:18:20', '2023-11-08 08:18:20'),
(25, 47, 767432, 'Farhan, S.Pd', '[guru]', '2023-11-08 08:18:58', '2023-11-08 08:18:58'),
(26, 48, 5432, 'Alifah, S.Psi', '[guru]', '2023-11-08 08:19:36', '2023-11-08 08:19:36'),
(28, 52, 123, 'aaaabbbCCC', '[guru]', '2023-11-09 13:18:02', '2023-11-09 06:18:02');

-- --------------------------------------------------------

--
-- Table structure for table `detail_siswa`
--

CREATE TABLE `detail_siswa` (
  `nisn` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tempat` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(40) DEFAULT NULL,
  `agama` varchar(15) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `anak_ke` int(11) DEFAULT NULL,
  `alamat_siswa` varchar(100) DEFAULT NULL,
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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_show` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_siswa`
--

INSERT INTO `detail_siswa` (`nisn`, `user_id`, `id_kelas`, `nama_lengkap`, `tempat`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `status`, `anak_ke`, `alamat_siswa`, `no_hp`, `sekolah_asal`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `alamat_ortu`, `no_hp_ortu`, `pekerjaan_wali`, `nama_wali`, `alamat_wali`, `no_hp_wali`, `created_at`, `updated_at`, `is_show`) VALUES
(12321312, 49, NULL, 'AIDILA YASMINE F.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-08 08:21:42', '2023-11-08 08:21:42', 0),
(81370787, 34, NULL, 'ABDURRAHMAN DIMAS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-09 07:04:14', '2023-11-09 00:04:14', 0),
(91503393, 35, 6, 'AHMAD ZAINUL FATONI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-09 07:09:35', '2023-11-09 00:03:30', 0),
(1010101010, 33, 6, 'AFA FASHIHA AYATUL HUSNA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-09 07:03:30', '2023-11-09 00:03:30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakulikuler`
--

CREATE TABLE `ekstrakulikuler` (
  `id` int(11) NOT NULL,
  `nisn` int(11) DEFAULT NULL,
  `id_tahun_akademik` int(11) DEFAULT NULL,
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
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ekstrakulikuler`
--

INSERT INTO `ekstrakulikuler` (`id`, `nisn`, `id_tahun_akademik`, `semester`, `ekstrakulikuler1`, `ekstrakulikuler2`, `ekstrakulikuler3`, `ekstrakulikuler4`, `ekstrakulikuler5`, `nilai_ekstra1`, `nilai_ekstra2`, `nilai_ekstra3`, `nilai_ekstra4`, `nilai_ekstra5`, `created_at`, `updated_at`) VALUES
(5, 1934567, 6, 'Genap', 'Tapak Suci', 'Hisbul Wathan', 'E-Sport', 'Drumband', 'Band', 80, 70, 90, 50, 80, '2023-10-11 09:18:28', '2023-10-11 09:30:53'),
(6, -1, 6, 'Genap', 'Tapak Suci', 'Hisbul Wathan', 'English Club', NULL, NULL, 0, 0, 0, 0, 0, '2023-10-16 02:13:07', '2023-10-16 02:13:07'),
(7, 91503393, 9, 'Ganjil', 'Tapak Suci', 'Hisbul Wathan', 'English Club', 'E-Sport', 'Tari', 0, 0, 0, 0, 0, '2023-11-09 07:10:56', '2023-11-09 07:11:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `informasi_sekolah`
--

CREATE TABLE `informasi_sekolah` (
  `id` int(11) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `npsn` varchar(50) DEFAULT NULL,
  `nss` varchar(50) DEFAULT NULL,
  `alamat_sekolah` varchar(100) DEFAULT NULL,
  `kode_pos` varchar(15) DEFAULT NULL,
  `desa` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `kabupaten` varchar(50) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nama_kepala` varchar(100) DEFAULT NULL,
  `nbm` varchar(50) DEFAULT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `semester` varchar(30) DEFAULT NULL,
  `fase` varchar(5) DEFAULT NULL,
  `tahun_pelajaran` varchar(15) DEFAULT NULL,
  `tempat_tanggal_rapor` varchar(30) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `informasi_sekolah`
--

INSERT INTO `informasi_sekolah` (`id`, `nama_sekolah`, `npsn`, `nss`, `alamat_sekolah`, `kode_pos`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `website`, `email`, `nama_kepala`, `nbm`, `nip`, `semester`, `fase`, `tahun_pelajaran`, `tempat_tanggal_rapor`, `created_at`, `updated_at`) VALUES
(2, 'SMP Muhammadiyah 1 Malang', '20533750', NULL, 'Jl. Brigjen Slamet Riyadi No. 134 Oro-Oro Dowo, Kec. Klojen, Kota Malang', '65145', 'Oro Oro Dowo', 'Klojen', 'Malang', 'Jawa Timur', 'main.smpmuhasa.sch.id', 'smpm1.mlg@gmail.com', 'Yanur Setyaningrum, M.Pd', '78678876876', '343534636345', 'Ganjil', 'D', '2023/2024', 'Malang / 2023-09-02', '2023-09-02 07:44:37', '2023-11-11 14:55:38');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `tingkat` int(11) NOT NULL,
  `kelas` varchar(2) NOT NULL,
  `id_wali_kelas` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `tingkat`, `kelas`, `id_wali_kelas`, `created_at`, `updated_at`) VALUES
(2, 7, 'A', 22, '2023-09-21 01:26:58', '2023-11-10 00:47:20'),
(3, 7, 'B', NULL, '2023-09-21 06:06:00', '2023-09-21 06:06:00'),
(4, 8, 'A', 21, '2023-11-08 15:22:51', '2023-11-08 15:24:09'),
(5, 8, 'B', NULL, '2023-11-08 15:23:29', '2023-11-08 15:23:29'),
(6, 9, 'A', 14, '2023-11-09 06:53:46', '2023-11-09 06:53:52');

-- --------------------------------------------------------

--
-- Table structure for table `mapel_kelas`
--

CREATE TABLE `mapel_kelas` (
  `id` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mapel_kelas`
--

INSERT INTO `mapel_kelas` (`id`, `id_mapel`, `id_kelas`, `created_at`, `updated_at`) VALUES
(7, 9, 3, '2023-09-22 14:46:40', '2023-09-22 14:46:40'),
(8, 9, 2, '2023-09-22 14:46:56', '2023-09-22 14:46:56'),
(9, 10, 3, '2023-09-22 14:47:09', '2023-09-22 14:47:09'),
(10, 10, 2, '2023-09-26 05:20:13', '2023-09-26 05:20:13'),
(11, 11, 2, '2023-10-04 04:57:26', '2023-10-04 04:57:26'),
(12, 9, 4, '2023-11-08 15:25:14', '2023-11-08 15:25:14'),
(13, 11, 4, '2023-11-08 15:25:14', '2023-11-08 15:25:14'),
(14, 15, 6, '2023-11-09 06:53:59', '2023-11-09 06:53:59'),
(15, 9, 6, '2023-11-09 06:54:34', '2023-11-09 06:54:34'),
(16, 14, 6, '2023-11-09 06:54:34', '2023-11-09 06:54:34');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id` int(11) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `kkm` double NOT NULL,
  `id_guru` int(11) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `id_tahun_akademik` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id`, `nama_mapel`, `kkm`, `id_guru`, `semester`, `id_tahun_akademik`, `created_at`, `updated_at`) VALUES
(9, 'Matematika', 0, 16, 'Ganjil', 9, '2023-09-20 09:09:17', '2023-11-09 06:54:17'),
(11, 'IPA', 75, 22, 'Ganjil', 6, '2023-10-04 04:57:09', '2023-11-09 00:52:38'),
(12, 'Bahasa Inggris', 0, 14, 'Ganjil', 9, '2023-11-08 10:10:11', '2023-11-11 14:56:33'),
(13, 'Bahasa Jawa', 72, 19, 'Ganjil', 6, '2023-11-08 15:24:58', '2023-11-08 15:24:58'),
(14, 'Pendidikan Agama Islam dan Budi Pekerti', 0, 21, 'Ganjil', 9, '2023-11-09 00:55:00', '2023-11-09 06:54:23'),
(15, 'Bahasa Arab', 0, 23, 'Ganjil', 9, '2023-11-09 00:55:25', '2023-11-09 06:53:26'),
(16, 'Pendidikan Pancasila', 75, 19, 'Ganjil', 6, '2023-11-09 00:56:05', '2023-11-09 00:56:05'),
(17, 'Pendidikan Pancasila', 75, 20, 'Ganjil', 6, '2023-11-09 00:56:19', '2023-11-09 00:56:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
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
  `id` int(11) NOT NULL,
  `nisn` int(11) DEFAULT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  `pts` double DEFAULT 0,
  `pas` double DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
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
  `id` int(11) NOT NULL,
  `nisn` int(11) NOT NULL,
  `id_pancasila` int(11) NOT NULL,
  `desc_pancasila1` varchar(255) DEFAULT NULL,
  `desc_pancasila2` varchar(255) DEFAULT NULL,
  `desc_pancasila3` varchar(255) DEFAULT NULL,
  `nilai_pancasila1` varchar(10) NOT NULL,
  `nilai_pancasila2` varchar(10) DEFAULT NULL,
  `nilai_pancasila3` varchar(10) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `step` int(11) NOT NULL,
  `id_tahun_akademik` int(11) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai_pancasila`
--

INSERT INTO `nilai_pancasila` (`id`, `nisn`, `id_pancasila`, `desc_pancasila1`, `desc_pancasila2`, `desc_pancasila3`, `nilai_pancasila1`, `nilai_pancasila2`, `nilai_pancasila3`, `catatan`, `step`, `id_tahun_akademik`, `semester`, `created_at`, `updated_at`) VALUES
(10, 12345678, 5, 'Halo', 'BBBB', 'CCCC', 'MB', 'BSH', 'SB', 'bagus sekali', 1, 6, 'Genap', '2023-10-25 02:55:37', '2023-11-08 08:42:48'),
(11, 12345678, 5, 'Test', 'Bagus Sekali', 'Jelek Sekali', 'BB', 'MB', 'SB', 'bagus sekali', 2, 6, 'Genap', '2023-10-25 02:55:41', '2023-11-08 08:42:48'),
(12, 91503393, 8, NULL, NULL, NULL, '0', NULL, NULL, 'asdsda', 1, 9, 'Ganjil', '2023-11-09 07:07:43', '2023-11-09 07:07:43');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_siswa`
--

CREATE TABLE `nilai_siswa` (
  `id` int(11) NOT NULL,
  `nisn` varchar(30) DEFAULT NULL,
  `id_sumatif` int(11) DEFAULT NULL,
  `id_mapel_kelas` int(11) DEFAULT NULL,
  `nilai` double DEFAULT 0,
  `id_sumatif_tertinggi` int(11) DEFAULT NULL,
  `id_sumatif_terendah` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
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
  `id` int(11) NOT NULL,
  `nama_project` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `sub_proyek1` varchar(255) DEFAULT NULL,
  `sub_proyek2` varchar(255) DEFAULT NULL,
  `sub_proyek3` varchar(255) DEFAULT NULL,
  `is_active` int(1) UNSIGNED ZEROFILL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pancasila`
--

INSERT INTO `pancasila` (`id`, `nama_project`, `deskripsi`, `sub_proyek1`, `sub_proyek2`, `sub_proyek3`, `is_active`, `created_at`, `updated_at`) VALUES
(5, 'Pancasila 1', 'Lorem Ipsum Pancasila 1', 'Toleransi', 'Tanggung Jawab', 'Kepemimpinan', 0, '2023-10-18 01:43:35', '2023-11-09 01:09:05'),
(6, 'Pancasila 2 Gas', 'Contoh Deskripsi', 'Berkembang', 'Menghargai', 'Taat Agama', 0, '2023-10-25 03:44:46', '2023-11-09 06:55:15'),
(7, 'Language Day', 'Siswa menggunakan Bahasa yang berbeda setiap harinya. Hari Senin menggunakan Bahasa Indonesia, Hari Selasa menggunakan Bahasa Jawa, Hari Rabu menggunakan Bahasa Arab, dan Hari kamis menggunakan Bahasa Inggris.', 'Gaya Hidup Berkelanjutan', 'Imajinasi dan Kreativitasku', 'Rekayasa dan Teknologi', 1, '2023-11-09 01:08:44', '2023-11-09 01:08:44'),
(8, 'ayo bersih-bersih', 'aaaa', 'sehatq', 'bersih', 'indah', 1, '2023-11-09 07:07:10', '2023-11-09 07:07:10');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `results_sumatif`
--

CREATE TABLE `results_sumatif` (
  `id` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_detail_siswa` int(11) NOT NULL,
  `alpha` int(11) NOT NULL,
  `ijin` int(11) NOT NULL,
  `sakit` int(11) NOT NULL,
  `id_sumatif_max` int(11) DEFAULT NULL,
  `id_sumatif_min` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
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
  `id` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `sumatif` int(11) NOT NULL,
  `nama_sumatif` text NOT NULL,
  `high_deskripsi` text NOT NULL,
  `low_deskripsi` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sumatif`
--

INSERT INTO `sumatif` (`id`, `id_mapel`, `sumatif`, `nama_sumatif`, `high_deskripsi`, `low_deskripsi`, `created_at`, `updated_at`) VALUES
(1, 9, 1, '3', '4', '5', '2023-09-25 03:44:29', '2023-11-06 14:38:07'),
(2, 9, 2, 'Sumatif 2', 'Selamat', 'Tingkatkan', '2023-10-03 04:18:06', '2023-10-03 04:18:06'),
(3, 10, 1, 'Sumatif 1', 'Selamat Bagus', 'Jelek', '2023-10-04 04:22:45', '2023-10-04 04:22:45'),
(4, 11, 1, 'Sumatif 1', 'Ipa Bagus', 'Ipa Jelek', '2023-10-04 04:57:53', '2023-10-04 04:57:53'),
(5, 9, 3, 'Sumatif 3', 'Desc Tert', 'Desc Terendah', '2023-10-05 02:20:18', '2023-10-05 02:20:18'),
(6, 15, 1, 'Surat - surat', 'Selamat', 'Tingkatkan', '2023-11-09 07:20:50', '2023-11-09 07:20:50'),
(7, 15, 2, 'Aljabar', 'Bagus', 'Maaf', '2023-11-09 07:21:13', '2023-11-09 07:21:13'),
(8, 15, 3, 'Hija\'iyah', 'Sukses', 'Nilai Rendah', '2023-11-09 07:21:37', '2023-11-09 07:21:37');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_akademik`
--

CREATE TABLE `tahun_akademik` (
  `id` int(11) NOT NULL,
  `tahun_akademik` varchar(20) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tahun_akademik`
--

INSERT INTO `tahun_akademik` (`id`, `tahun_akademik`, `active`, `created_at`, `updated_at`) VALUES
(9, '2023/2024', 0, '2023-11-09 06:52:43', '2023-11-09 06:52:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(25, '11111', 'yanursetyaningrum@gmail.com', '[kepala_sekolah]', NULL, '$2y$10$l1UsFxOWdxRxIBbNx2gonO2dhRA02OpSUlorLyTdEK9drFujDJVjq', NULL, '2023-09-20 01:40:45', '2023-11-08 08:08:46'),
(29, 'admin', 'smpm1.mlg@gmail.com', 'admin', NULL, '$2y$10$f5B1caj6fazQfs9Yi5MYRuM7/hOJBfRnQuw.6EtUqcYnUSFWvSkpi', NULL, '2023-11-06 07:14:44', '2023-11-06 07:14:44'),
(33, '9963', NULL, 'siswa', NULL, '$2y$10$EAx.tl37VidFjFnxeuB.Fug.ceaPK3.9ocZ4tENailtvEvnIQVOPa', NULL, '2023-11-08 03:07:19', '2023-11-08 03:07:19'),
(34, '9962', NULL, 'siswa', NULL, '$2y$10$YYegDEniYbHGDS3tQOd0JeQNvgNAMwo6C8icJfFiYopm01DTBqemy', NULL, '2023-11-08 03:07:44', '2023-11-08 03:07:44'),
(35, '9964', NULL, 'siswa', NULL, '$2y$10$/zFEvSV.97comyP68oleFOEfiI51U3/W7FQn8Y0pmcfGWff.zhgDG', NULL, '2023-11-08 03:08:09', '2023-11-08 03:08:09'),
(36, '123456', 'nosa.setiabudi@gmail.com', '[guru,wali_kelas]', NULL, '$2y$10$Ry9y9KC4louG9ZQGnWK/v.krM022NhFBrZi/mE890pv.nHAgYmUPW', NULL, '2023-11-08 03:08:30', '2023-11-08 23:53:52'),
(37, '22222', 'trisulawesi@gmail.com', '[guru]', NULL, '$2y$10$G6o8JEN41fQ7prAke420T.QFFUQKVHkRNFxLSskOoRyh5u/5Swn/S', NULL, '2023-11-08 08:10:50', '2023-11-09 00:17:05'),
(38, '33333', 'faridaulfa@gmail.com', '[guru,wali_kelas]', NULL, '$2y$10$2ai9qcggD5KCNKn.St2JmuJz9RX5lASf8WftdaLJdYZZb1xtIhNFO', NULL, '2023-11-08 08:12:15', '2023-11-08 08:12:15'),
(40, '55555', 'mawaddah@gmail.com', '[guru,wali_kelas]', NULL, '$2y$10$uaeHSdqcvVL5KMn5CGa5Z.l/XVjnL/kKuOZTn2sJt6Aotzx4ERsCe', NULL, '2023-11-08 08:14:21', '2023-11-08 08:14:21'),
(41, '66666', 'yuliwachyuningtyas@gmail.com', '[guru,wali_kelas]', NULL, '$2y$10$6DGZqPb9PVZwJv/2Wz5qP.RpI4qn.KIV5BXfIHYRehs3xHuKu13B6', NULL, '2023-11-08 08:15:00', '2023-11-08 08:15:00'),
(42, '77777', 'artarifebrianti@gmail.com', '[guru,wali_kelas]', NULL, '$2y$10$44EKQjRriXtoYiC5Ha0xWeAiD343xFQWhpwWMI9tm81RNfuMZjcVC', NULL, '2023-11-08 08:15:52', '2023-11-08 08:15:52'),
(43, '88888', 'pudjijanto@gmail.com', '[guru,wali_kelas]', NULL, '$2y$10$9EiOxfeUmFu661UTSA9vw.TbS54JtuW7PgkYiqFIJHxr6Mk0oRe4C', NULL, '2023-11-08 08:16:37', '2023-11-08 18:03:21'),
(44, '99999', 'masrudi@gmail.com', '[guru,wali_kelas]', NULL, '$2y$10$.8NvpGZgpfPeZiqLBiNXM.1uLaJVTUdYtK4r2aIPp90BpKfo6hAOa', NULL, '2023-11-08 08:17:06', '2023-11-09 17:47:20'),
(45, '1010101', 'solikhulatmam@gmail.com', '[guru]', NULL, '$2y$10$wfACi9oDncYpZUsmbO1krO.kGODNqurO1qRQuW349o10SWiXY/LGO', NULL, '2023-11-08 08:17:41', '2023-11-09 00:18:34'),
(46, '612648', 'sarbini@gmail.com', '[guru]', NULL, '$2y$10$pdWakpCGORrwUqKZ8/kLeuZXO4MDOrDXLhMcboKZV.kSLtRZyyA8u', NULL, '2023-11-08 08:18:20', '2023-11-08 08:18:20'),
(47, '767432', 'farhan@gmail.com', '[guru]', NULL, '$2y$10$8KNLRMXS00daT4JDsJFNu.7PNani53jp51Iioj3LbWr5lSiFL2Ib.', NULL, '2023-11-08 08:18:58', '2023-11-08 08:18:58'),
(48, '5432', 'alifah@gmail.com', '[guru]', NULL, '$2y$10$zaeZ79dibwTAXABOkvXSkeHYCAqTvoVB/4cZnuY67khSCcpQPYnMa', NULL, '2023-11-08 08:19:36', '2023-11-08 08:19:36'),
(49, '9965', NULL, 'siswa', NULL, '$2y$10$pRdVzKiHVahztPxHlRgTze7j84hAptun84Iq1jPfljD8P6o/5GrAm', NULL, '2023-11-08 08:21:42', '2023-11-08 08:21:42'),
(52, '123', 'aaa@example.com', '[guru]', NULL, '$2y$10$rADGCRsDi9E40D0EdfWT7eUGNwfHnSQh8IoCWzZN2HY/d9YiJi6Ju', NULL, '2023-11-08 17:44:07', '2023-11-09 06:18:02');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_avg_sumatif`
-- (See below for the actual view)
--
CREATE TABLE `vw_avg_sumatif` (
`nisn` varchar(30)
,`id_mapel_kelas` int(11)
,`total_nilai` double
,`total_sumatif` bigint(21)
,`rata_rata` double(19,2)
,`id_sumatif_tertinggi` int(11)
,`id_sumatif_terendah` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_hasil_nilai`
-- (See below for the actual view)
--
CREATE TABLE `vw_hasil_nilai` (
`nisn` varchar(30)
,`id_mapel_kelas` int(11)
,`nilai_max` double
,`semester` varchar(10)
,`id_tahun_akademik` int(11)
,`nilai_min` double
,`id_sumatif_tertinggi` int(11)
,`id_sumatif_terendah` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `vw_avg_sumatif`
--
DROP TABLE IF EXISTS `vw_avg_sumatif`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_avg_sumatif`  AS SELECT `ns`.`nisn` AS `nisn`, `ns`.`id_mapel_kelas` AS `id_mapel_kelas`, sum(`ns`.`nilai`) AS `total_nilai`, count(`s`.`id_mapel`) AS `total_sumatif`, round(sum(`ns`.`nilai`) / count(`ns`.`nilai`),2) AS `rata_rata`, max(`vhn`.`id_sumatif_tertinggi`) AS `id_sumatif_tertinggi`, max(`vhn`.`id_sumatif_terendah`) AS `id_sumatif_terendah` FROM ((`nilai_siswa` `ns` left join (select `sumatif`.`id_mapel` AS `id_mapel`,count(0) AS `total_sumatif` from `sumatif` group by `sumatif`.`id_mapel`) `s` on(`s`.`id_mapel` = `ns`.`id_mapel_kelas`)) left join `vw_hasil_nilai` `vhn` on(`ns`.`nisn` = `vhn`.`nisn` and `ns`.`id_mapel_kelas` = `vhn`.`id_mapel_kelas`)) GROUP BY `ns`.`nisn`, `ns`.`id_mapel_kelas` ;

-- --------------------------------------------------------

--
-- Structure for view `vw_hasil_nilai`
--
DROP TABLE IF EXISTS `vw_hasil_nilai`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_hasil_nilai`  AS SELECT `ns`.`nisn` AS `nisn`, `ns`.`id_mapel_kelas` AS `id_mapel_kelas`, max(`ns`.`nilai`) AS `nilai_max`, `mp`.`semester` AS `semester`, `mp`.`id_tahun_akademik` AS `id_tahun_akademik`, min(`ns`.`nilai`) AS `nilai_min`, (select `nilai_siswa`.`id_sumatif` from `nilai_siswa` where `nilai_siswa`.`nisn` = `ns`.`nisn` and `nilai_siswa`.`id_mapel_kelas` = `ns`.`id_mapel_kelas` and `nilai_siswa`.`nilai` = max(`ns`.`nilai`) limit 1) AS `id_sumatif_tertinggi`, (select `nilai_siswa`.`id_sumatif` from `nilai_siswa` where `nilai_siswa`.`nisn` = `ns`.`nisn` and `nilai_siswa`.`id_mapel_kelas` = `ns`.`id_mapel_kelas` and `nilai_siswa`.`nilai` = min(`ns`.`nilai`) limit 1) AS `id_sumatif_terendah` FROM (`nilai_siswa` `ns` left join `mata_pelajaran` `mp` on(`ns`.`id_mapel_kelas` = `mp`.`id`)) GROUP BY `ns`.`nisn`, `ns`.`id_mapel_kelas` ;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informasi_sekolah`
--
ALTER TABLE `informasi_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mapel_kelas`
--
ALTER TABLE `mapel_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nilai_akhir`
--
ALTER TABLE `nilai_akhir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nilai_pancasila`
--
ALTER TABLE `nilai_pancasila`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `pancasila`
--
ALTER TABLE `pancasila`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `results_sumatif`
--
ALTER TABLE `results_sumatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sumatif`
--
ALTER TABLE `sumatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
