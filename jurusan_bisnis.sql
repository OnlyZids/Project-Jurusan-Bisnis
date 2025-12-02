-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 29, 2025 at 12:42 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurusan_bisnis`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `konten` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_publish` date NOT NULL DEFAULT '2025-11-19',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `judul`, `slug`, `thumbnail`, `konten`, `penulis`, `tanggal_publish`, `created_at`, `updated_at`) VALUES
(1, 'Business Elevation Compotion Berhasil Diselenggarakan pada tanggal 31 Mei 2025 Oleh HMJ Bisnis Politeknik Negeri Jemb', 'business-elevation-compotion-berhasil-diselenggarakan-pada-tanggal-31-mei-2025-oleh-hmj-bisnis-politeknik-negeri-jemb', 'artikel-thumbs/01KAEEWKM62PNJWCEVA4CBCVH4.jpg', '<p>Business Elevation Compotition (BEC) 2025 sukses digelar pada 31 Mei 2025 di Gedung Terpadu Agribisnis Politeknik Negeri Jember. Acara ini merupakan ajang kompotisi bagi seluruh mahasiswa/i dan teman - teman dari SMA/SMK. Mereka sangat antusias dalam mengikuti perlombaan yang dilaksanakan.</p>', 'Yazid', '2025-11-19', '2025-11-19 09:24:14', '2025-11-19 09:24:14'),
(2, 'Selamat & Sukses Atas Terpilihnya Kahim dan Wakahim HMJ Bisnis Periode 2026', 'selamat-sukses-atas-terpilihnya-kahim-dan-wakahim-hmj-bisnis-periode-2026', 'artikel-thumbs/01KAEF44JCCE2V7C931K95YNY3.jpg', '<p>Selamat dan sukses kepada Kahim dan Wakahim Himpunan Mahasiswa Jurusan Bisnis Periode 2026! Semoga dapat mengemban amanah dengan penuh dedikasi, membawa HMJ Bisnis menjadi lebih progresif, inovatif, dan berdampak bagi seluruh mahasiswa.</p>', 'Dizay', '2025-11-19', '2025-11-19 09:28:21', '2025-11-19 09:28:21'),
(3, 'Bizflare 2025 sukses digelar pada 12 Oktober 2025 di Auditorium Politeknik Negeri Jember.', 'bizflare-2025-sukses-digelar-pada-12-oktober-2025-di-auditorium-politeknik-negeri-jember', 'artikel-thumbs/01KAEF7BXCJJ9RQ3WRQ3Q065GD.jpg', '<p>Bizflare 2025 sukses digelar pada 12 Oktober di Auditorium Politeknik Negeri Jember. Acara ini menghadirkan seminar inspiratif bersama Ervian Akbarsyah Mahendra, founder Kopi Kampus dan Kopi Bos,</p>', 'Dizay', '2025-11-19', '2025-11-19 09:30:07', '2025-11-19 09:30:07');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dosens`
--

CREATE TABLE `dosens` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan_fungsional` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bidang_keahlian` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosens`
--

INSERT INTO `dosens` (`id`, `nama_lengkap`, `nip`, `jabatan_fungsional`, `email`, `foto`, `bidang_keahlian`, `created_at`, `updated_at`) VALUES
(1, 'Lukman Hakim, S.Kom., M.Kom.', '19790703 200312 1 001', 'LEKTOR KAMPUS 2', 'lukmanhakim2@gmail.com', 'foto-dosen/01KAA9GJS1DV5EGFZ93GY4KFPV.jpg', 'ALL ROLE PEMPROGRAMAN LANGUAGE', '2025-11-17 04:21:29', '2025-11-17 18:33:20'),
(3, 'Rizky Adhitya Nugroho, S.A.B., M.M.', '19790703 200312 1 002', 'KAP PRODI BSD', 'rizky@gmail.com', 'foto-dosen/01KAA9RXSDT6DHASKQMFBHV8VG.jpg', 'Marketing Specialist', '2025-11-17 18:37:53', '2025-11-17 18:37:53'),
(4, 'Mas\'ud Hermansyah, S.S.T., M.Kom', '19790703 200312 1 003', 'Dosen Pengajar', 'masud@gmail.com', 'foto-dosen/01KAA9TTCC3TSVKYQDD54E70E7.jpg', 'Laravel Expertt', '2025-11-17 18:38:55', '2025-11-17 18:38:55'),
(5, 'Rezha Isyraqi Qastalano, S.ST., M.MT', '19790703 200312 1 004', 'Dosen Pengajar', 'rezha@gmail.com', 'foto-dosen/01KAA9X9D9RS20P6B67YDZPXS8.jpg', 'Komunikasi Specialist', '2025-11-17 18:40:16', '2025-11-17 18:40:16'),
(6, 'Imam Abrori, S.E., M.M', '19790703 200312 1 005', 'Dosen Pengajar', 'abrory@gmail.com', 'foto-dosen/01KAAA0JM3DM2B79CP9P089GNY.jpg', 'Marketing Specialist', '2025-11-17 18:42:04', '2025-11-17 18:42:04'),
(7, 'Surateno, S.Kom., M.Kom', '19790703 200312 1 006', 'Dosen Pengajar', 'teno@gmail.com', 'foto-dosen/01KAAA2VJ85HX8R2KX89MA47ZB.jpg', 'Jaringan Komputer Expert', '2025-11-17 18:43:18', '2025-11-17 18:43:18'),
(8, 'Prisilia Angel Tantri, SE., M.M', '19790703 200312 1 007', 'Dosen Pengajar', 'angle@gmail.com', 'foto-dosen/01KAAA4ZB1MG2ZBM91FGK96T61.jpg', 'Komunikasi Specialist', '2025-11-17 18:44:28', '2025-11-17 18:44:28'),
(9, 'Dr. Denny Trias Utomo, S.Si, M.T', '19790703 200312 1 008', 'Dosen Pengajar', 'denny@gmail.com', 'foto-dosen/01KAAA8MQBT6J4R3F6JQP4SZPF.jpg', 'Python IOT Expert', '2025-11-17 18:46:28', '2025-11-17 18:46:28'),
(10, 'Trismayanti Dwi P, S.Kom, M.Cs', '19790703 200312 1 009', 'Dosen Pengajar', 'dwi@gmail.com', 'foto-dosen/01KAAAATAGP0EBXG3ZSNJ0MM9Q.jpg', 'Marketing Specialist', '2025-11-17 18:47:39', '2025-11-17 18:47:39'),
(11, 'Drs. Suparto, MM, M.Pd', '19790703 200312 1 010', 'Dosen Pengajar', 'suparto@gmail.com', 'foto-dosen/01KAAACF7VSNC9ZNH3M9G1RV9Y.jpg', 'Pendidikan Pancasilaa', '2025-11-17 18:48:33', '2025-11-17 18:48:33'),
(12, 'Ardhitya Alam Wiguna., S.E., M.M. ', '19790703 200312 1 011', 'Dosen Pengajar', 'alam@gmail.com', 'foto-dosen/01KAT0J69Y70WN0KASC88N28MY.jpg', 'Pemasaran Internasional', '2025-11-23 21:04:46', '2025-11-23 21:04:46');

-- --------------------------------------------------------

--
-- Table structure for table `dosen_program_studi`
--

CREATE TABLE `dosen_program_studi` (
  `program_studi_id` bigint UNSIGNED NOT NULL,
  `dosen_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosen_program_studi`
--

INSERT INTO `dosen_program_studi` (`program_studi_id`, `dosen_id`) VALUES
(1, 1),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(2, 12);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Fasilitas Umum',
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `nama`, `kategori`, `deskripsi`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Laboratorium Bisnis Digital', 'Laboratorium', 'fasfoiewjfioaiofnsdionvsda', 'foto-fasilitas/01KADKEK9WG086QYAT796WEEQZ.jpg', '2025-11-17 18:08:57', '2025-11-19 01:24:44'),
(2, 'Ruang Dosen 4.12', 'Ruang Dosen', 'Ruang Dosen Bisnis Digital', 'foto-fasilitas/01KAABJS5WYHS5XFM8JH88810F.jpg', '2025-11-17 19:09:29', '2025-11-19 01:33:09'),
(3, 'Laboratorium RPL (Rekayasa Perangkat Lunak)', 'Laboratorium', 'sdfsafsafasfaf', 'foto-fasilitas/01KB23JNTMQN3SS7AK6PH19WT5.jpg', '2025-11-27 00:31:23', '2025-11-27 00:31:23'),
(4, 'Laboratorium AJK (Ajak Jawa Keluar)', 'Laboratorium', 'sadferretrtyty', 'foto-fasilitas/01KB23NDHWTEDB4DB5QCP13ZE4.jpg', '2025-11-27 00:32:53', '2025-11-27 00:32:53'),
(5, 'Laboratorium MPI', 'Laboratorium', 'oudasiunvd', 'foto-fasilitas/01KB23TC5J0WYXWYTPX849GYEA.jpg', '2025-11-27 00:35:35', '2025-11-27 00:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `info_akademiks`
--

CREATE TABLE `info_akademiks` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pengumuman',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('published','draft') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'draft',
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `info_akademiks`
--

INSERT INTO `info_akademiks` (`id`, `judul`, `kategori`, `slug`, `konten`, `thumbnail`, `status`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Penelitin Tentang IoT', 'Publikasi Ilmiah', 'penelitin-tentang-iot', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>', 'info-akademik/01KADPRC5HY90CC9BX0QZTKGEQ.jpg', 'published', '2025-11-19 09:25:46', '2025-11-19 02:22:30', '2025-11-19 02:30:15'),
(2, 'Peraturan 004', 'Tata Tertib', 'peraturan-004', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>', 'info-akademik/01KAZ1WDZ8N2CAMZ30H8QV4SDP.jpg', 'published', '2025-11-19 09:40:00', '2025-11-19 02:40:03', '2025-11-25 20:04:02'),
(3, 'Kalender Akademik 2025-2026', 'Kalender Akademik', 'kalender-akademik-2025-2026', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.&nbsp;</p>', 'info-akademik/01KADRSB7W7855QS5B1Q9HRD5E.jpg', 'published', '2025-11-19 09:58:10', '2025-11-19 02:57:59', '2025-11-19 02:57:59'),
(4, 'Peraturan 005', 'Tata Tertib', 'peraturan-005', '<p>Politeknik Negeri Jember untuk menjadi Politeknik Unggul di Asia Tahun 2035 yang merupakan wujud dari landasan penentuan profil lulusan yang sesuai dengan kebutuhan era digital saat ini.</p>', 'info-akademik/01KAZBGP79ZS38KBFZN4EFX8C1.jpg', 'published', '2025-11-26 05:53:58', '2025-11-25 22:52:23', '2025-11-25 22:52:23');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_11_04_113131_create_program_studis_table', 1),
(5, '2025_11_04_113149_create_fasilitas_table', 1),
(6, '2025_11_04_113206_create_dosens_table', 1),
(7, '2025_11_04_113231_create_staf_teknisis_table', 1),
(8, '2025_11_04_113305_create_info_akademiks_table', 1),
(9, '2025_11_04_113321_create_pesan_kontaks_table', 1),
(10, '2025_11_04_145137_create_dosen_program_studi_table', 1),
(12, '2025_11_17_103706_add_prodi_detail_fields_to_program_studis_table', 2),
(13, '2025_11_19_081951_add_kategori_to_fasilitas_table', 3),
(14, '2025_11_19_091109_add_kategori_to_info_akademiks_table', 4),
(15, '2025_11_19_155644_create_artikels_table', 5),
(16, '2025_11_19_155752_create_prestasis_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesan_kontaks`
--

CREATE TABLE `pesan_kontaks` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('baru','dibaca') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'baru',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesan_kontaks`
--

INSERT INTO `pesan_kontaks` (`id`, `nama`, `email`, `subjek`, `pesan`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Moch yazid Al Bustomi', 'yaeizxy@gmail.com', 'UKT', 'Saya ingin menanyakan terkait pembayaran UKT apakah bisa di?', 'dibaca', '2025-11-22 22:25:48', '2025-11-22 22:28:53'),
(2, 'mantap', 'yaziddaud9@gmail.com', 'UKT', 'wefedfhjjkklkl', 'baru', '2025-11-27 00:16:47', '2025-11-27 00:16:47');

-- --------------------------------------------------------

--
-- Table structure for table `prestasis`
--

CREATE TABLE `prestasis` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemenang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tingkat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prestasis`
--

INSERT INTO `prestasis` (`id`, `judul`, `slug`, `foto`, `deskripsi`, `pemenang`, `tingkat`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 'Anablu Tim Telah Meraih Juara 3 Dalam Kompotisi Bussiness Elevation Compotition.', 'anablu-tim-telah-meraih-juara-3-dalam-kompotisi-bussiness-elevation-compotition', 'prestasi-foto/01KAEF0TE7QDMZMQFDYVR00YNW.jpg', 'kami ucapkan selamat kepada mahasiswa program studi Bisnis Digital Jurusan Bisnis yang telah meraih prestasi dalam kompetisi Enterpreneur Chalengges.', 'Anablu ', 'Nasional', '2025-05-22', '2025-11-19 09:26:32', '2025-11-19 09:26:32'),
(2, 'Tim Bahjah Art dari Program Studi AKP Telah Meraih Juara 1 Dalam Lomba Vocapreneur Business Plan Tingkat Nasional', 'tim-bahjah-art-dari-program-studi-akp-telah-meraih-juara-1-dalam-lomba-vocapreneur-business-plan-tingkat-nasional', 'prestasi-foto/01KAEGQP4Y4M7RRSE7PQKGM7YE.jpg', 'Kami ucapkan selamat kepada Tim Bahjah Art atas  kemenangan juara 1 dalam Lomba vocapreneur business plan tingkat Nasional.', 'Bahjah Art', 'Nasional', '2025-09-19', '2025-11-19 09:56:30', '2025-11-19 09:56:30'),
(3, 'Mahasiswa Bisnis Digital Telah Meraih Juara 2 Lomba Hackathon SDGs UM 2024', 'mahasiswa-bisnis-digital-telah-meraih-juara-2-lomba-hackathon-sdgs-um-2024', 'prestasi-foto/01KAEGS6DXNNQ2S23QCXZYADTT.jpg', 'Kami mengucapkan selamat kepada Mahasiswa Jurusan Teknologi dengan nama Tim GamifyGrow atas keberhasilannya meraih gelar Juara 2 Bidang Sosial Impact dalam Lomba Hackathon SDGS UM2024 dengan nama anggota tim: ', ' GamifyGrow', 'Nasional', '2025-06-19', '2025-11-19 09:57:20', '2025-11-19 09:57:20');

-- --------------------------------------------------------

--
-- Table structure for table `program_studis`
--

CREATE TABLE `program_studis` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenjang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_singkat` text COLLATE utf8mb4_unicode_ci,
  `visi_misi` longtext COLLATE utf8mb4_unicode_ci,
  `tujuan` text COLLATE utf8mb4_unicode_ci,
  `profil_lulusan` longtext COLLATE utf8mb4_unicode_ci,
  `gambar_mata_kuliah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan_mata_kuliah` text COLLATE utf8mb4_unicode_ci,
  `gambar_akreditasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan_akreditasi` text COLLATE utf8mb4_unicode_ci,
  `foto_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `program_studis`
--

INSERT INTO `program_studis` (`id`, `nama_prodi`, `slug`, `jenjang`, `deskripsi_singkat`, `visi_misi`, `tujuan`, `profil_lulusan`, `gambar_mata_kuliah`, `keterangan_mata_kuliah`, `gambar_akreditasi`, `keterangan_akreditasi`, `foto_banner`, `created_at`, `updated_at`) VALUES
(1, 'BISNIS DIGITAL', 'bisnis-digital', 'D4', 'JAYA JAYA', '<p><strong>VISI</strong></p><p>Politeknik Negeri Jember untuk menjadi Politeknik Unggul di Asia Tahun 2035 yang merupakan wujud dari landasan penentuan profil lulusan yang sesuai dengan kebutuhan era digital saat ini.</p><p><strong>MISI</strong></p><ol><li>Menyelenggarakan pendidikan vokasi program sarjana yang bertujuan menghasilakn sarjana trepan bidang Bisnis Digital yang memeliki kompetensi sebagai Digital entrepreneur (Wirausaha Digital),</li><li>Memperkuat landasan keilmuan teknologi informasi di bidang bisnis digital untuk pengembangan IPTEKS dan dapat diterapkan di masyarakat.</li><li>Menjalin sinergi pendidikan sarjana terapan dengan kegiatan penelitian dan pengabdian yang bersifat berkelanjutan, mendalam, lintas disiplin yang menghasilkan solusi untuk permasalahan bangsa.</li><li>Menjalin kerjasama dengan institusi dan industri yang mendukung Program Studi Sarjana Terapan Bisnis Digital baik dalam maupun luar negeri.</li></ol>', '<p>Untuk mencapai visi dan misi tersebut, maka ditetapkan tujuan Program Studi Sarjana Terapan Bisnis Digital yaitu sebagai berikut:</p><ol><li>Mendidik mahasiswa yang ahli dan kompeten di bidang bisnis digital.</li><li>Mengembangkan kreativitas dan inovasi mahasiswa dalam rangka pengembangan IPTEKS yang dapat diterapkan di masyarakat.</li><li>Menghasilkan lulusan sarjana terapan dibidang bisnis digital yang berbasis IPTEKS, bermoral tinggi, berkualitas dan berintegritas.</li><li>Berperan aktif dalam kegiatan yang mendukung program bisnis digital terapan baik di dalam maupun luar negeri.</li><li>Membangun dan mengembangkan jaringan kerja nasional dan kolaborasi internasional baik dalam penelitian atau mencari solusi untuk permasalahan bangsa.</li></ol>', '<ol><li>Digital Entrepreneur (Wirausaha Digital). Menghasilkan wirausaha yang mampu merenacanakan, merancang dan mengembangkan bisnis dengan memanfaatkan teknologi digital yang adaptif dan berkelanjutan</li><li>Business Analyst (Analisis Bisnis). Menghasilkan lulusan yang mampu melakukan riset pasar dan pengemabnagn model bisnis ide baru maupun inovasi untuk bisnis yang sedang berjalan, serta menyajikan hasil analisi secara informatif.</li><li>Profesional in Digital Biusiness (Tenaga Profesional dalam Bisnis Digital). Menghasilkan lulusan yang mampu menginisiasi kegiatan-kegiatan bisnis kreatif untuk meningkatkan performa atu kinerja pada organisasi profit dan non profit.</li><li>Smart Village Developer (Pengembang Desa Pintar). Menghasilan lulusan yang mampu melaksanakan pemberdayaan masyarakat (community development) dan pembangunan pedesaan (rural development) melalui elaborasi, sinergi, dan adaptasi sumberdaya dan kearifan lokal melalui penerapan teknologi digital untuk meningkatkan perekonomian masyarakat pedesaan</li></ol><p><br></p>', 'prodi-matkul/01KADJ4CPND3SY9ZHPHVNW6NFN.jpg', 'Gambar di atas menampilkan struktur organisasi mata kuliah Program Studi Bisnis Digital yang dirancang untuk membekali mahasiswa dengan kompetensi bisnis dan teknologi secara terpadu. Setiap warna merepresentasikan bidang keahlian berbeda, mulai dari kewirausahaan digital, pemasaran digital, analisis bisnis, hingga pengembangan smart village. Melalui kurikulum ini, mahasiswa diharapkan mampu menjadi lulusan yang adaptif, inovatif, dan siap bersaing di era transformasi digital.', 'prodi-akreditasi/01KA8RP7VS72PC4K78ME70BDW9.jpg', 'Untuk mencapai visi dan misi tersebut, maka ditetapkan tujuan Program Studi Sarjana Terapan Bisnis Digital yaitu sebagai berikut:\nMendidik mahasiswa yang ahli dan kompeten di bidang bisnis digital.\nMengembangkan kreativitas dan inovasi mahasiswa dalam rangka pengembangan IPTEKS yang dapat diterapkan di masyarakat.\nMenghasilkan lulusan sarjana terapan dibidang bisnis digital yang berbasis IPTEKS, bermoral tinggi, berkualitas dan berintegritas.\nBerperan aktif dalam kegiatan yang mendukung program bisnis digital terapan baik di dalam maupun luar negeri.\nMembangun dan mengembangkan jaringan kerja nasional dan kolaborasi internasional baik dalam penelitian atau mencari solusi untuk permasalahan bangsa.', 'prodi-banners/01KAT32K2CN87BES4SM920B4MD.jpg', '2025-11-17 04:20:05', '2025-11-23 21:48:41'),
(2, 'MANAJEMEN PEMASARAN INTERNASIONAL', 'manajemen-pemasaran-internasional', 'D4', 'JAYA JAYA JAYA', '<p><strong>VISI</strong></p><p>Menjadi Pendidikan Vokasi Unggulan di bidang Manajemen Pemasaran Internasional Berdaya Saing Global di Tingkat Asia Tahun 2035</p><p><strong>MISI</strong></p><ol><li>Menyelenggarakan dan mengembangkan pendidikan vokasi di bidang Manajemen Pemasaran Internasional yang berkualitas, inovatif dan berdaya saing.</li><li>Menyelenggarakan penelitian terapan dan pengabdian kepada masyarakat Manajemen Pemasaran Internasional yang bermanfaat bagi ilmu pengetahuan.</li><li>Mengembangkan kerjasama baik di tingkat nasional maupun internasional di bidang Manajemen Pemasaran Internasional.</li></ol>', '<ol><li>Menghasilkan lulusan ahli madya yang kompeten pada bidang produksi tanaman perkebunan yang berbudi pekerti luhur, berjiwa wirausaha dan berdaya saing menghadapi Masyarakat Ekonomi ASEAN.</li><li>Menghasilkan penelitian terapan dan karya tulis pada bidang produksi tanaman perkebunan pada tingkat regional, nasional dan internasional</li><li>Menghasilkan kegiatan pengabdian masyarakat dengan teknologi terapan pada bidang produksi tanaman perkebunan yang mampu menyelesaikan permasalahan yang dihadapi masyarakat</li><li>Memperluas jaringan kerjasama dengan industri/perusahaan, instansi pemerintahan pada bidang perkebunan untuk meningkatkan kualitas lulusan dan serapan alumni</li></ol><p><br></p>', '<ol><li>Wirausahawan Perdagangan Internasional Sarjana terapan sebagai Wirausahawan Perdagangan Internasional yang berperan sebagai pemilik usaha ekspor impor produk unggulan, risk taker, dan pengambil keputusan pada bidang usaha produk/jasa baik secara online maupun konvensional pada skala nasional dan internasional.</li><li>Asisten Manajer Marketing Sarjana terapan sebagai manajer pemasaran digital dan konvensional untuk produk-produk unggulan barang/jasa skala lokal/nasional dan internasional.</li><li>Konsultan Pemasaran Internasional Sarjana terapan untuk usaha bidang konsultan marketing yang memberikan konsultasi dan analisis dalam hal pemasaran baik untuk produk/jasa skala lokal/nasional dan internasional.</li></ol><p><br></p>', 'prodi-matkul/01KASZWMN9N48RZWCDVHQG039M.jpg', 'joeojradofnaifns', 'prodi-akreditasi/01KAABB68MY1S1VX5ESPEMP8P9.jpg', 'adfyuasfyavyuvfayusdvcansfnic', 'prodi-banners/01KAABB67KERQVH0EXD50FC6CT.jpg', '2025-11-17 19:05:20', '2025-11-23 20:53:00'),
(3, 'AKUNTANSI SEKTOR PUBLIK', 'akuntansi-sektor-publik', 'D4', 'JAYA JAYA JAYA', '<p><strong>VISI</strong></p><p>Menjadi Pendidikan Vokasi Unggulan di bidang Manajemen Pemasaran Internasional Berdaya Saing Global di Tingkat Asia Tahun 2035</p><p><strong>MISI</strong></p><ol><li>Menyelenggarakan dan mengembangkan pendidikan vokasi di bidang Manajemen Pemasaran Internasional yang berkualitas, inovatif dan berdaya saing.</li><li>Menyelenggarakan penelitian terapan dan pengabdian kepada masyarakat Manajemen Pemasaran Internasional yang bermanfaat bagi ilmu pengetahuan.</li><li>Mengembangkan kerjasama baik di tingkat nasional maupun internasional di bidang Manajemen Pemasaran Internasional.</li></ol><p><br><br></p>', '<ol><li>Menghasilkan lulusan ahli madya yang kompeten pada bidang produksi tanaman perkebunan yang berbudi pekerti luhur, berjiwa wirausaha dan berdaya saing menghadapi Masyarakat Ekonomi ASEAN.</li><li>Menghasilkan penelitian terapan dan karya tulis pada bidang produksi tanaman perkebunan pada tingkat regional, nasional dan internasional</li><li>Menghasilkan kegiatan pengabdian masyarakat dengan teknologi terapan pada bidang produksi tanaman perkebunan yang mampu menyelesaikan permasalahan yang dihadapi masyarakat</li><li>Memperluas jaringan kerjasama dengan industri/perusahaan, instansi pemerintahan pada bidang perkebunan untuk meningkatkan kualitas lulusan dan serapan alumni</li></ol><p><br></p>', '<ol><li>Wirausahawan Perdagangan Internasional Sarjana terapan sebagai Wirausahawan Perdagangan Internasional yang berperan sebagai pemilik usaha ekspor impor produk unggulan, risk taker, dan pengambil keputusan pada bidang usaha produk/jasa baik secara online maupun konvensional pada skala nasional dan internasional.</li><li>Asisten Manajer Marketing Sarjana terapan sebagai manajer pemasaran digital dan konvensional untuk produk-produk unggulan barang/jasa skala lokal/nasional dan internasional.</li><li>Konsultan Pemasaran Internasional Sarjana terapan untuk usaha bidang konsultan marketing yang memberikan konsultasi dan analisis dalam hal pemasaran baik untuk produk/jasa skala lokal/nasional dan internasional.</li></ol><p><br></p>', 'prodi-matkul/01KASZS8FWRH36E1C2A7XA38TG.jpg', 'Gambar di atas menampilkan struktur organisasi mata kuliah Program Studi Bisnis Digital yang dirancang untuk membekali mahasiswa dengan kompetensi bisnis dan teknologi secara terpadu. Setiap warna merepresentasikan bidang keahlian berbeda, mulai dari kewirausahaan digital, pemasaran digital, analisis bisnis, hingga pengembangan smart village. Melalui kurikulum ini, mahasiswa diharapkan mampu menjadi lulusan yang adaptif, inovatif, dan siap bersaing di era transformasi digital.', 'prodi-akreditasi/01KASZS8G7Z7GFP3DB71EXJD9R.jpg', 'Untuk mencapai visi dan misi tersebut, maka ditetapkan tujuan Program Studi Sarjana Terapan Bisnis Digital yaitu sebagai berikut: Mendidik mahasiswa yang ahli dan kompeten di bidang bisnis digital. Mengembangkan kreativitas dan inovasi mahasiswa dalam rangka pengembangan IPTEKS yang dapat diterapkan di masyarakat. Menghasilkan lulusan sarjana terapan dibidang bisnis digital yang berbasis IPTEKS, bermoral tinggi, berkualitas dan berintegritas. Berperan aktif dalam kegiatan yang mendukung program bisnis digital terapan baik di dalam maupun luar negeri. Membangun dan mengembangkan jaringan kerja nasional dan kolaborasi internasional baik dalam penelitian atau mencari solusi untuk permasalahan bangsa.', 'prodi-banners/01KASZS8D9YCF2RADRNP3BJRAB.jpg', '2025-11-23 20:51:09', '2025-11-23 20:51:09');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('af26thtXghHDkx4QoWduwJHqEbvA3ld4rTBpkk36', NULL, '192.168.1.4', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibXNGaVZJc3kwQWZ0NGZOZ3ZXMGMwUjdiUnl0Z3FTTXcwWEJ6aHhCaSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MTEyOiJodHRwOi8vMTkyLjE2OC4xLjc6ODAwMC9wcmVzdGFzaS9hbmFibHUtdGltLXRlbGFoLW1lcmFpaC1qdWFyYS0zLWRhbGFtLWtvbXBvdGlzaS1idXNzaW5lc3MtZWxldmF0aW9uLWNvbXBvdGl0aW9uIjtzOjU6InJvdXRlIjtzOjE1OiJwcmVzdGFzaS5kZXRhaWwiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1764331321),
('nWVttkmuYdqsIz9RjTE8pu7eHu4Iu5iGUxzM8u6e', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidTY1N2Jzamw2UTBMbWVMWUZET0VqTGdlcFVqMUM2aGtOSVpxdTBCNiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo3OiJiZXJhbmRhIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1764331529),
('PSRx8XbicCRGFWiYmhZWIMXae9Qv8MvkLogW7Gz1', NULL, '192.168.1.8', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOU5KQm1Bb3hOYUtodmpsWU1neE1tRFZmRzlBbkpNQTF1NWF3QldKMiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NzE6Imh0dHA6Ly8xOTIuMTY4LjEuNzo4MDAwL3Byb2dyYW0tc3R1ZGkvbWFuYWplbWVuLXBlbWFzYXJhbi1pbnRlcm5hc2lvbmFsIjtzOjU6InJvdXRlIjtzOjEyOiJwcm9kaS5kZXRhaWwiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1764331495),
('sWCXNhpB4tIQbzgFO3LDSMIynkgeZq4ClEz7iUju', NULL, '192.168.1.3', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic1pVeTlBbURKTEhkNHBxOEhPb0NQZnM1U1VyZ3AyQlZZMVpYSEVjZSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjM6Imh0dHA6Ly8xOTIuMTY4LjEuNzo4MDAwIjtzOjU6InJvdXRlIjtzOjc6ImJlcmFuZGEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1764331273);

-- --------------------------------------------------------

--
-- Table structure for table `staf_teknisis`
--

CREATE TABLE `staf_teknisis` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_studi_id` bigint UNSIGNED DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staf_teknisis`
--

INSERT INTO `staf_teknisis` (`id`, `nama_lengkap`, `posisi`, `program_studi_id`, `email`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Hesti spd', 'Teknisi Workshop Informasi Terintegrasi', 1, 'Esthe@gmail.com', 'foto-staf/01KA8RVJVZWH627ABEYZT44W6H.jpg', '2025-11-17 04:23:00', '2025-11-17 04:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dizay', 'dizay@gmail.com', NULL, '$2y$12$jgnBD/Ih5XeT.YINVmhgreFpwKGs0aHAUVFDuT11SemjBT.tT7sh6', 'im9gwOJm0iO1e1Y25AUNzMKf4JrInXadAoFtqW3n8YZ73lsxhIlD7P7DR1Eg', '2025-11-17 04:17:22', '2025-11-17 04:17:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `artikels_slug_unique` (`slug`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `dosens`
--
ALTER TABLE `dosens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dosens_nip_unique` (`nip`),
  ADD UNIQUE KEY `dosens_email_unique` (`email`);

--
-- Indexes for table `dosen_program_studi`
--
ALTER TABLE `dosen_program_studi`
  ADD PRIMARY KEY (`program_studi_id`,`dosen_id`),
  ADD KEY `dosen_program_studi_dosen_id_foreign` (`dosen_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_akademiks`
--
ALTER TABLE `info_akademiks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `info_akademiks_slug_unique` (`slug`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pesan_kontaks`
--
ALTER TABLE `pesan_kontaks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestasis`
--
ALTER TABLE `prestasis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `prestasis_slug_unique` (`slug`);

--
-- Indexes for table `program_studis`
--
ALTER TABLE `program_studis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `program_studis_slug_unique` (`slug`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `staf_teknisis`
--
ALTER TABLE `staf_teknisis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `staf_teknisis_email_unique` (`email`),
  ADD KEY `staf_teknisis_program_studi_id_foreign` (`program_studi_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dosens`
--
ALTER TABLE `dosens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `info_akademiks`
--
ALTER TABLE `info_akademiks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pesan_kontaks`
--
ALTER TABLE `pesan_kontaks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prestasis`
--
ALTER TABLE `prestasis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `program_studis`
--
ALTER TABLE `program_studis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staf_teknisis`
--
ALTER TABLE `staf_teknisis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dosen_program_studi`
--
ALTER TABLE `dosen_program_studi`
  ADD CONSTRAINT `dosen_program_studi_dosen_id_foreign` FOREIGN KEY (`dosen_id`) REFERENCES `dosens` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `dosen_program_studi_program_studi_id_foreign` FOREIGN KEY (`program_studi_id`) REFERENCES `program_studis` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `staf_teknisis`
--
ALTER TABLE `staf_teknisis`
  ADD CONSTRAINT `staf_teknisis_program_studi_id_foreign` FOREIGN KEY (`program_studi_id`) REFERENCES `program_studis` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
