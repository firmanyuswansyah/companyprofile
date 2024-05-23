-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 09, 2024 at 01:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yt_compro`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `headline` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `urutan` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `headline`, `desc`, `urutan`, `gambar`, `created_at`, `updated_at`) VALUES
(4, 'Beasiswa STMIK Bandung', 'Ayo raih prestasimu dengan mendaftarkan diri sebagai mahasiswa STMIK Bandung', 0, 'uploads/banners/1714731215-Beasiswa_prestasi_non_akademik.jpeg', '2024-05-03 03:13:35', '2024-05-03 03:13:35'),
(7, 'Akreditasi STMIK Bandung', 'Akreditasi STMIK Bandung telah diterbitkan untuk jangka 5 tahun kedepan', 0, 'uploads/banners/1714819431-Areditasi.jpg', '2024-05-04 03:43:51', '2024-05-04 03:43:51'),
(8, 'Himpunan Teknik Informatika STMIK Bandung', 'Hima-IF Angkatan 2023/2024', 0, 'uploads/banners/1714836207-foto_jonas.jpg', '2024-05-04 08:23:27', '2024-05-04 08:23:27');

-- --------------------------------------------------------

--
-- Table structure for table `bems`
--

CREATE TABLE `bems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `cover` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bems`
--

INSERT INTO `bems` (`id`, `name`, `desc`, `cover`, `created_at`, `updated_at`) VALUES
(1, 'BEM', '<p style=\"text-align: justify; border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\">BEM (Badan Eksekutif Mahasiswa) adalah organisasi mahasiswa yang bertanggung jawab atas pengelolaan berbagai kegiatan dan program di tingkat perguruan tinggi. Berikut adalah deskripsi BEM di STMIK (Sekolah Tinggi Manajemen Informatika dan Komputer) Bandung.</p>', 'uploads/images/1714312694-logo_bem.jpeg', NULL, '2024-05-02 20:52:00');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` bigint(20) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `cover` text NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `kategori_id`, `title`, `cover`, `body`, `created_at`, `updated_at`) VALUES
(13, 7, 'Beasiswa Prestasi Non Akademik', 'uploads/blogs/1714621078-Beasiswa_prestasi_non_akademik.jpeg', '<p><span style=\"color: rgb(131, 131, 131); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 15px; background-color: rgb(248, 249, 250);\">Raih cita-citamu dengan Beasiswa Akademik STMIK Bandung! ✨🌟💫</span><br style=\"margin: 0px; padding: 0px; color: rgb(131, 131, 131); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 15px; background-color: rgb(248, 249, 250);\"><span style=\"color: rgb(131, 131, 131); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 15px; background-color: rgb(248, 249, 250);\">Dengan dukungan pendidikan berkualitas dan fasilitas modern, kami membuka kesempatan bagi para pemuda berbakat untuk mewujudkan impian akademik. 🎓</span><br></p>', '2024-05-01 19:47:22', '2024-05-01 21:07:19'),
(14, 7, 'Beasiswa STMIK Bandung', 'uploads/blogs/1714836034-Beasiswa_STMIK_Bandung.jpeg', '<p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; color: rgb(131, 131, 131); font-size: 15px; line-height: 2; font-family: &quot;Open Sans&quot;, sans-serif; background-color: rgb(248, 249, 250);\">Raih cita-citamu dengan Beasiswa Akademik STMIK Bandung! ✨🌟💫</p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; color: rgb(131, 131, 131); font-size: 15px; line-height: 2; font-family: &quot;Open Sans&quot;, sans-serif; background-color: rgb(248, 249, 250);\">Dengan dukungan pendidikan berkualitas dan fasilitas modern, kami membuka kesempatan bagi para pemuda berbakat untuk mewujudkan impian akademik.</p>', '2024-05-01 20:10:51', '2024-05-04 08:20:34'),
(18, 7, 'Beasiswa Prestasi Akademik', 'uploads/blogs/1714625075-Beasiswa_Prestasi_Akademik.jpeg', '<p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; color: rgb(131, 131, 131); font-size: 15px; line-height: 2; font-family: &quot;Open Sans&quot;, sans-serif; background-color: rgb(248, 249, 250);\">Raih cita-citamu dengan Beasiswa Akademik STMIK Bandung! ✨🌟💫</p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; color: rgb(131, 131, 131); font-size: 15px; line-height: 2; font-family: &quot;Open Sans&quot;, sans-serif; background-color: rgb(248, 249, 250);\">Dengan dukungan pendidikan berkualitas dan fasilitas modern, kami membuka kesempatan bagi para pemuda berbakat untuk mewujudkan impian akademik.</p>', '2024-05-01 21:44:35', '2024-05-01 21:44:35'),
(19, 6, 'Membangun suatu pemikiran Agile dan Manajemen Proyek untuk suksesnya Transformasi Digital', 'uploads/blogs/1714625849-seminar.jpeg', '<p><span style=\"color: rgb(131, 131, 131); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(248, 249, 250);\">Transformasi digital adalah perjalanan yang tidak pernah berakhir. Dalam perjalanan ini, perubahan mendasar harus terjadi dalam cara Anda berpikir tentang organisasi Anda. Cara berpikir baru ini melibatkan pemanfaatan teknologi baru seperti cloud, Internet of Things, dan data besar untuk mendorong inovasi dan peningkatan berkelanjutan.</span><br></p>', '2024-05-01 21:57:29', '2024-05-01 21:57:29');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `futsals`
--

CREATE TABLE `futsals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `cover` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `futsals`
--

INSERT INTO `futsals` (`id`, `name`, `desc`, `cover`, `created_at`, `updated_at`) VALUES
(1, 'Futsal STMIK Bandung', '<div style=\"text-align: justify;\"><span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve; font-size: 1rem;\">Futsal di STMIK Bandung adalah lebih dari sekadar olahraga; itu adalah semangat, kebersamaan, dan semangat kompetitif yang menyatukan mahasiswa dan mahasiswi dalam sebuah permainan yang dinamis. Di lapangan futsal, para siswa tidak hanya mengejar gol, tetapi juga persahabatan, kerja tim, dan pengembangan diri.</span></div>', 'uploads/images/1714312829-futsal.jpg', NULL, '2024-05-02 21:37:54');

-- --------------------------------------------------------

--
-- Table structure for table `himaifs`
--

CREATE TABLE `himaifs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `cover` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `himaifs`
--

INSERT INTO `himaifs` (`id`, `name`, `desc`, `cover`, `created_at`, `updated_at`) VALUES
(1, 'Himpunan Mahasiswa Teknik Informatika', '<div style=\"text-align: justify;\"><span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve; font-size: 1rem;\">Himpunan Mahasiswa Informatika (HIMA) di Sekolah Tinggi Manajemen Informatika dan Komputer (STMIK) Bandung adalah wadah kemahasiswaan yang dinamis dan progresif. Dengan visi untuk menjadi agen perubahan di lingkungan kampus, HIMA IF STMIK Bandung memainkan peran penting dalam meningkatkan pengalaman akademik, sosial, dan profesional para mahasiswa program studi Informatika.</span></div>', 'uploads/images/1714710395-Screenshot 2024-05-03 112522.png', NULL, '2024-05-02 21:26:35');

-- --------------------------------------------------------

--
-- Table structure for table `himasis`
--

CREATE TABLE `himasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `cover` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `himasis`
--

INSERT INTO `himasis` (`id`, `name`, `desc`, `cover`, `created_at`, `updated_at`) VALUES
(1, 'Himpunan Mahasiswa Sistem Informasi', '<div style=\"text-align: justify;\"><span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve; font-size: 1rem;\">Himpunan Mahasiswa Program Studi Sistem Informasi (HIMA SI) di STMIK Bandung adalah sebuah organisasi mahasiswa yang berperan penting dalam memfasilitasi, mewadahi, dan mengembangkan potensi serta minat mahasiswa dalam bidang teknologi informasi. Dengan visi untuk menjadi wadah yang dinamis bagi mahasiswa Sistem Informasi, HIMA SI bertujuan untuk menciptakan lingkungan yang mendukung pertumbuhan akademik, profesional, dan sosial bagi anggotanya.</span></div>', 'uploads/images/1714710513-hima_si.jpg', NULL, '2024-05-02 21:28:33');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Mahasiswa', '2024-04-28 22:41:11', '2024-04-28 22:48:59'),
(4, 'Dosen', '2024-04-28 22:46:58', '2024-04-28 22:46:58'),
(6, 'Pendidikan', '2024-05-01 04:53:44', '2024-05-01 04:53:44'),
(7, 'Beasiswa STMIK Bandung', '2024-05-01 19:25:19', '2024-05-01 19:25:19'),
(8, 'Kampus', '2024-05-01 20:14:51', '2024-05-01 20:14:51');

-- --------------------------------------------------------

--
-- Table structure for table `ldks`
--

CREATE TABLE `ldks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `cover` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ldks`
--

INSERT INTO `ldks` (`id`, `name`, `desc`, `cover`, `created_at`, `updated_at`) VALUES
(1, 'Lembaga Dakwah Kampus', '<div style=\"text-align: justify;\"><span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve; font-size: 1rem;\">LDK (Lembaga Dakwah Kampus) di STMIK Bandung, adalah wadah pengembangan diri dan kegiatan dakwah yang menjadi salah satu kegiatan penting di lingkungan kampus tersebut. Dengan visi dan misi yang kuat, LDK STMik Bandung berupaya untuk menjadi agen perubahan positif di tengah-tengah mahasiswa, membentuk karakter yang berintegritas serta berkomitmen pada nilai-nilai keislaman dan kemasyarakatan.</span></div>', 'uploads/images/1714710426-ldk.jpg', NULL, '2024-05-02 21:27:06');

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
(24, '0001_01_01_000000_create_users_table', 1),
(25, '0001_01_01_000001_create_cache_table', 1),
(26, '0001_01_01_000002_create_jobs_table', 1),
(27, '2024_04_26_120604_create_banners_table', 1),
(28, '2024_04_27_071320_create_services_table', 1),
(29, '2024_04_28_041136_create_ukms_table', 1),
(30, '2024_04_28_080211_create_visimisis_table', 1),
(31, '2024_04_28_091130_create_strukturorganisasis_table', 2),
(32, '2024_04_28_121207_create_bems_table', 3),
(33, '2024_04_28_124400_create_ldks_table', 4),
(34, '2024_04_28_130149_create_himasis_table', 5),
(35, '2024_04_28_131820_create_himaifs_table', 6),
(36, '2024_04_28_133742_create_futsals_table', 7),
(37, '2024_04_28_142546_create_teknikinformatikas_table', 8),
(38, '2024_04_28_145309_create_sisteminformasis_table', 9),
(39, '2024_04_29_052010_create_kategoris_table', 10),
(40, '2024_04_29_072442_create_pesans_table', 11),
(41, '2024_05_01_044543_create_blogs_table', 12),
(42, '2024_05_02_092321_create_sejarahs_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesans`
--

CREATE TABLE `pesans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesans`
--

INSERT INTO `pesans` (`id`, `name`, `desc`, `is_read`, `created_at`, `updated_at`) VALUES
(1, 'Abdul', 'Halo Admin', 1, '2024-05-03 01:04:12', '2024-05-03 02:49:48'),
(3, 'Dadang', 'Haloo', 1, '2024-05-03 02:39:45', '2024-05-03 02:49:28'),
(12, 'Asep', 'Assalamualaikum', 1, '2024-05-08 04:54:11', '2024-05-08 05:07:51'),
(13, 'Nick', 'kumaha damang?', 0, '2024-05-08 05:04:18', '2024-05-08 05:04:18'),
(14, 'dodo', 'hallo', 0, '2024-05-08 05:06:42', '2024-05-08 05:06:42');

-- --------------------------------------------------------

--
-- Table structure for table `sejarahs`
--

CREATE TABLE `sejarahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `cover` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sejarahs`
--

INSERT INTO `sejarahs` (`id`, `name`, `desc`, `cover`, `created_at`, `updated_at`) VALUES
(1, 'Sejarah STMIK Bandung', '<div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">STMIK Bandung merupakan STMIK pertama di Jawa Barat dan pelopor pendidikan tinggi informatika swasta dengan fokus untuk mencetak tenaga profesional dan technopreneur IT.\r\n\r\nDalam upaya memberikan kesempatan kepada masyarakat yang tidak mempunyai waktu luang mengikuti pendidikan di hari kerja. STMIK BANDUNG membuka Program Kelas Karyawan atau Program Kuliah Karyawan jenjang S1. Kualitas dan proses pendidikan di STMIK BANDUNG sama dirancang sama dengan Kualitas dan proses pendidikan pada hari biasa. Setiap perkuliahaan diatur secara terstruktur dan terjadwal dengan pemilihan tenaga pengajar terbaik dan berpengalaman di bidangnya. Proses belajar didukung oleh fasilitas terbaik.</span></div>', 'uploads/images/1714719558-logo2.jpg', NULL, '2024-05-02 23:59:18');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `icon`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Workshop IT & Entrepreneurship', 'fas fa-laptop-code', 'ikon menjadi dunia Mahasiswa dilatih untuk menjadi wirausaha muda serta membuat startup.', '2024-04-28 01:50:24', '2024-05-02 02:12:13'),
(2, 'Beasiswa Pendidikan', 'fas fa-graduation-cap', 'Beasiswa Pendidikan tersedia untuk semua kalangan mahasiswa baru dan lama.', '2024-05-01 06:21:32', '2024-05-01 07:07:21'),
(3, 'Lokasi Strategis', 'fas fa-map-marker', 'Lokasi STMIK berada di Bandung Jalan Cikutra.', '2024-05-01 06:56:33', '2024-05-01 07:09:13'),
(4, 'Biaya tidak mahal & dapat diangsur', 'fas fa-money-check-alt', 'Biaya pendaftaran dan SPP untuk STMIK Bandung relatif murah.', '2024-05-01 07:10:28', '2024-05-01 07:10:28'),
(5, 'Bekerjasama dengan Perusahaan IT', 'fas fa-handshake', 'STMIK Bandung bekerjasama dengan IT seperti Microsoft, Google, dan Perusahaan Ternama lainnya.', '2024-05-01 07:11:14', '2024-05-01 07:11:14'),
(6, 'Inkubator Bisnis untuk Mahasiswa', 'fas fa-lightbulb', 'Membina mahasiswa bagaimana cara berbisnis di era modern.', '2024-05-01 07:13:40', '2024-05-01 07:18:15');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('cHM1j3BkmmUbN5XdTdr8P8chfy01ellMRWL8K2SN', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVDE2WFBnQ0Y5QXVobjBxempkNHlYeWs0dDhLMzBwb2JsWmx4eWdwTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1715170083);

-- --------------------------------------------------------

--
-- Table structure for table `sisteminformasis`
--

CREATE TABLE `sisteminformasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `cover` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sisteminformasis`
--

INSERT INTO `sisteminformasis` (`id`, `name`, `desc`, `cover`, `created_at`, `updated_at`) VALUES
(1, 'Sistem Informasi - S1', '<div style=\"text-align: justify;\"><span style=\"color: rgb(0, 0, 0); font-family: Montserrat, sans-serif; font-size: 1rem;\">Lulusan Program Studi Teknik Informatika STMIK BANDUNG adalah generasi muda yang memiliki kecakapan dalam rekayasa perangkat lunak, implementasi jaringan, robotik dan multimedia, sehingga mampu dalam merancang dan mengimplementasikan solusi teknologi intormasi yang terintegrasi.</span></div>', 'uploads/images/1714661433-sistem-informasi.jpeg', NULL, '2024-05-02 07:54:49');

-- --------------------------------------------------------

--
-- Table structure for table `strukturorganisasis`
--

CREATE TABLE `strukturorganisasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `cover` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `strukturorganisasis`
--

INSERT INTO `strukturorganisasis` (`id`, `name`, `desc`, `cover`, `created_at`, `updated_at`) VALUES
(2, 'Struktur Organisasi', 'Struktur Organisasi', 'uploads/images/1714319069-struktur_organisasi.png', NULL, '2024-04-28 08:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `teknikinformatikas`
--

CREATE TABLE `teknikinformatikas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `cover` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teknikinformatikas`
--

INSERT INTO `teknikinformatikas` (`id`, `name`, `desc`, `cover`, `created_at`, `updated_at`) VALUES
(1, 'Teknik Informatika - S1', '<div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">Lulusan Program Studi Teknik Informatika STMIK BANDUNG adalah generasi muda yang memiliki kecakapan dalam rekayasa perangkat lunak, implementasi jaringan, robotik dan multimedia, sehingga mampu dalam merancang dan mengimplementasikan solusi teknologi intormasi yang terintegrasi.</span></div>', 'uploads/images/1714662221-teknik-informatika.jpeg', NULL, '2024-05-02 08:03:41');

-- --------------------------------------------------------

--
-- Table structure for table `ukms`
--

CREATE TABLE `ukms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `cover` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ukms`
--

INSERT INTO `ukms` (`id`, `name`, `desc`, `cover`, `created_at`, `updated_at`) VALUES
(2, 'Tentang STMIK', 'STMIK Bandung merupakan STMIK pertama di Jawa Barat dan pelopor pendidikan tinggi informatika swasta dengan fokus untuk mencetak tenaga profesional dan technopreneur IT.', 'uploads/images/1714643728-STMIK BDG SLENGEAN.png', NULL, '2024-05-02 02:55:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `semester` tinyint(3) UNSIGNED NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nim`, `name`, `email`, `jurusan`, `semester`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 1222300, 'Akbar Indrajati Rosadi', 'akbar@gmail.com', 'Teknik Informatika S1', 4, NULL, '$2y$12$mD3rgOtMts8Ybz8RBcqkfeo4DIZ857q1m.x7w5TEpxc5bkOGGhMQi', NULL, '2024-04-28 02:22:13', '2024-05-04 08:14:49'),
(3, 3222302, 'Nurfazlyana', 'nur@gmail.com', 'Sistem Informasi S1', 4, NULL, '$2y$12$OQ3/YulEpgY0MXVEoDUPzeL1k/iVz8Tyb9TdOvrO0TrbeNRaQ2grC', NULL, '2024-04-28 02:23:01', '2024-05-04 08:17:51'),
(4, 1222014, 'Rizqi Rusdi Anjani', 'rizki@gmail.com', 'Teknik Informatika S1', 4, NULL, '$2y$12$yrkILr9xYIyTrLGUX00cF.GOUs3XMK7rbch1OhErlPWmtE4FEz9..', NULL, '2024-04-28 06:55:26', '2024-05-04 08:15:49'),
(5, 1222303, 'Firman Yuswansyah', 'firman@gmail.com', 'Teknik Informatika S1', 4, NULL, '$2y$12$mWhbT4Jw7q3zV6yMGp6wvuBTE9SlcYAnHwBvll03E1HYWx.hwlPcC', NULL, '2024-04-29 03:14:44', '2024-05-04 08:16:03'),
(6, 1222306, 'Nando Hutagalung', 'nando@gmail.com', 'Teknik Informatika S1', 4, NULL, '$2y$12$DP.FS8aj7RpDoXJZaq1EveXBio9WD/V7A2GY6iCZMM1a7.vrA5Luy', NULL, '2024-05-04 08:16:59', '2024-05-04 08:16:59'),
(7, 3222304, 'Yumilia Binti Mursalin', 'yumilia@gmail.com', 'Sistem Informasi S1', 4, NULL, '$2y$12$EXmZi2zL7JNUok5VciaCEeAKR0QzFqLJKUoxWlu73mg4QTOXIFcYq', NULL, '2024-05-04 08:19:10', '2024-05-04 08:19:10');

-- --------------------------------------------------------

--
-- Table structure for table `visimisis`
--

CREATE TABLE `visimisis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `cover` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visimisis`
--

INSERT INTO `visimisis` (`id`, `name`, `desc`, `cover`, `created_at`, `updated_at`) VALUES
(1, 'Visi dan Misi', '<p>Berikut adalah visi dan misi <b>STMIK Bandung</b>:</p>', 'uploads/images/1714294943-visimisi.jpg', NULL, '2024-05-02 08:23:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bems`
--
ALTER TABLE `bems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `futsals`
--
ALTER TABLE `futsals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `himaifs`
--
ALTER TABLE `himaifs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `himasis`
--
ALTER TABLE `himasis`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ldks`
--
ALTER TABLE `ldks`
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
-- Indexes for table `pesans`
--
ALTER TABLE `pesans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sejarahs`
--
ALTER TABLE `sejarahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sisteminformasis`
--
ALTER TABLE `sisteminformasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strukturorganisasis`
--
ALTER TABLE `strukturorganisasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teknikinformatikas`
--
ALTER TABLE `teknikinformatikas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ukms`
--
ALTER TABLE `ukms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visimisis`
--
ALTER TABLE `visimisis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bems`
--
ALTER TABLE `bems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `futsals`
--
ALTER TABLE `futsals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `himaifs`
--
ALTER TABLE `himaifs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `himasis`
--
ALTER TABLE `himasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ldks`
--
ALTER TABLE `ldks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `pesans`
--
ALTER TABLE `pesans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sejarahs`
--
ALTER TABLE `sejarahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sisteminformasis`
--
ALTER TABLE `sisteminformasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `strukturorganisasis`
--
ALTER TABLE `strukturorganisasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teknikinformatikas`
--
ALTER TABLE `teknikinformatikas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ukms`
--
ALTER TABLE `ukms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `visimisis`
--
ALTER TABLE `visimisis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
