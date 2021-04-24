-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Apr 2021 pada 04.19
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_client_support`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `announcements`
--

CREATE TABLE `announcements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` enum('umum','jaringan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_jaringan` enum('downtime','uptime') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waktu_downtime` datetime DEFAULT NULL,
  `waktu_uptime` datetime DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `announcements`
--

INSERT INTO `announcements` (`id`, `email`, `title`, `content`, `category`, `status`, `status_jaringan`, `waktu_downtime`, `waktu_uptime`, `user_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Martana Waskita', 'Iusto autem quibusdam omnis minima cum. Alias ducimus adipisci perspiciatis ut saepe id et.', 'jaringan', '1', 'uptime', '2021-02-02 11:14:27', '2021-02-02 11:40:58', 1, '2021-03-03 03:26:05', '2021-03-03 06:43:24'),
(2, NULL, 'Kamidin Samosir', 'Commodi odio sunt similique necessitatibus est. Enim aut dolor accusamus expedita odio.', 'jaringan', '1', 'uptime', '2021-03-03 11:14:36', '2021-03-03 13:43:00', 1, '2021-03-03 03:26:05', '2021-03-03 06:43:51'),
(3, NULL, 'Febi Hassanah', 'Dolorem et rerum modi blanditiis iure sint. Repellat voluptatem autem qui qui animi.', 'jaringan', '1', 'uptime', '2021-03-02 11:14:46', '2021-03-02 14:13:32', 1, '2021-03-03 03:26:05', '2021-03-03 06:44:09'),
(10, NULL, 'Gawati Oktaviani', 'Est et sed possimus eaque. Id non ut optio sunt.', 'jaringan', '1', 'uptime', '2021-02-02 11:14:52', '2021-02-03 11:56:19', 1, '2021-03-03 03:26:06', '2021-03-03 06:42:57'),
(17, '[\"ptpupuk@uninet.net.id\",\"Darto.sagrim@gmail.com\",\"adm.p3srspakubuwonoterrace@gmail.com\",\"Chandra@Isat.net.id\",\"karyabilitas@gmail.com\",\"afriansyah.syarifudin@arthatel.co.id\",\"adib@jagoanhosting.com\",\"ari.pamungkas@hinet.co.id\",\"Eproc@bignet.id\",\"info@cbtp.co.id\",\"m.akmal207@gmail.com\",\"Finance@gpm.co.id\",\"bobby@globalnetwork.net.id\",\"bimo.prabowo@iforte.co.id\",\"novifransina.nf@gmail.com\",\"Sonya.tampubolon@mncgroup.com\",\"ade.arman@gmail.com\",\"ronny@jnetwork.net.id\",\"tjetjep.h@kisi.co.id\",\"Finance@kabeltelekom.id\",\"info@gmedia.co.id\",\"Novi@Mag.Net.id\",\"hadi.kusmana@moratelindo.co.id\",\"agung.fatony@panjiperkasa.net.id\",\"billing@rackh.co.id\"]', 'aba', 'aba', 'jaringan', '1', 'uptime', '2021-03-08 08:40:49', '2021-03-08 09:14:43', 1, '2021-03-08 01:40:56', '2021-03-08 01:40:56'),
(18, '[\"ptpupuk@uninet.net.id\",\"Darto.sagrim@gmail.com\",\"adm.p3srspakubuwonoterrace@gmail.com\",\"Chandra@Isat.net.id\",\"karyabilitas@gmail.com\",\"afriansyah.syarifudin@arthatel.co.id\",\"adib@jagoanhosting.com\",\"ari.pamungkas@hinet.co.id\",\"Eproc@bignet.id\",\"info@cbtp.co.id\",\"m.akmal207@gmail.com\",\"Finance@gpm.co.id\",\"bobby@globalnetwork.net.id\",\"bimo.prabowo@iforte.co.id\",\"novifransina.nf@gmail.com\",\"Sonya.tampubolon@mncgroup.com\",\"ade.arman@gmail.com\",\"ronny@jnetwork.net.id\",\"tjetjep.h@kisi.co.id\",\"Finance@kabeltelekom.id\",\"info@gmedia.co.id\",\"Novi@Mag.Net.id\",\"hadi.kusmana@moratelindo.co.id\",\"agung.fatony@panjiperkasa.net.id\",\"billing@rackh.co.id\"]', 'ataa', 'ata', 'jaringan', '1', 'uptime', '2021-03-08 09:06:18', '2021-03-08 09:14:58', 1, '2021-03-08 02:06:25', '2021-03-08 02:06:25'),
(19, '[\"ptpupuk@uninet.net.id\",\"Darto.sagrim@gmail.com\",\"adm.p3srspakubuwonoterrace@gmail.com\",\"Chandra@Isat.net.id\",\"karyabilitas@gmail.com\",\"afriansyah.syarifudin@arthatel.co.id\",\"adib@jagoanhosting.com\",\"ari.pamungkas@hinet.co.id\",\"Eproc@bignet.id\",\"info@cbtp.co.id\",\"m.akmal207@gmail.com\",\"Finance@gpm.co.id\",\"bobby@globalnetwork.net.id\",\"bimo.prabowo@iforte.co.id\",\"novifransina.nf@gmail.com\",\"Sonya.tampubolon@mncgroup.com\",\"ade.arman@gmail.com\",\"ronny@jnetwork.net.id\",\"tjetjep.h@kisi.co.id\",\"Finance@kabeltelekom.id\",\"info@gmedia.co.id\",\"Novi@Mag.Net.id\",\"hadi.kusmana@moratelindo.co.id\",\"agung.fatony@panjiperkasa.net.id\",\"billing@rackh.co.id\"]', 'ataa', 'ata', 'jaringan', '1', 'uptime', '2021-03-08 09:06:18', '2021-03-08 09:15:06', 1, '2021-03-08 02:07:51', '2021-03-08 02:07:51'),
(20, '[\"ptpupuk@uninet.net.id\",\"Darto.sagrim@gmail.com\",\"adm.p3srspakubuwonoterrace@gmail.com\",\"Chandra@Isat.net.id\",\"karyabilitas@gmail.com\",\"afriansyah.syarifudin@arthatel.co.id\",\"adib@jagoanhosting.com\",\"ari.pamungkas@hinet.co.id\",\"Eproc@bignet.id\",\"info@cbtp.co.id\",\"m.akmal207@gmail.com\",\"Finance@gpm.co.id\",\"bobby@globalnetwork.net.id\",\"bimo.prabowo@iforte.co.id\",\"novifransina.nf@gmail.com\",\"Sonya.tampubolon@mncgroup.com\",\"ade.arman@gmail.com\",\"ronny@jnetwork.net.id\",\"tjetjep.h@kisi.co.id\",\"Finance@kabeltelekom.id\",\"info@gmedia.co.id\",\"Novi@Mag.Net.id\",\"hadi.kusmana@moratelindo.co.id\",\"agung.fatony@panjiperkasa.net.id\",\"billing@rackh.co.id\"]', 'ataa', 'ata', 'jaringan', '1', 'uptime', '2021-03-08 09:06:18', '2021-03-08 09:15:13', 1, '2021-03-08 02:08:16', '2021-03-08 02:08:16'),
(45, '[\"ptpupuk@uninet.net.id\",\"Darto.sagrim@gmail.com\",\"adm.p3srspakubuwonoterrace@gmail.com\",\"Chandra@Isat.net.id\",\"karyabilitas@gmail.com\",\"afriansyah.syarifudin@arthatel.co.id\",\"adib@jagoanhosting.com\",\"ari.pamungkas@hinet.co.id\",\"Eproc@bignet.id\",\"info@cbtp.co.id\",\"m.akmal207@gmail.com\",\"Finance@gpm.co.id\",\"bobby@globalnetwork.net.id\",\"bimo.prabowo@iforte.co.id\",\"novifransina.nf@gmail.com\",\"Sonya.tampubolon@mncgroup.com\",\"ade.arman@gmail.com\",\"ronny@jnetwork.net.id\",\"tjetjep.h@kisi.co.id\",\"Finance@kabeltelekom.id\",\"info@gmedia.co.id\",\"Novi@Mag.Net.id\",\"hadi.kusmana@moratelindo.co.id\",\"agung.fatony@panjiperkasa.net.id\",\"billing@rackh.co.id\"]', 'dadu', 'dadddddddddd', 'jaringan', '1', 'uptime', '2021-03-08 09:53:02', '2021-03-09 09:15:20', 1, '2021-03-08 02:53:15', '2021-03-08 02:53:15'),
(46, '[\"ptpupuk@uninet.net.id\",\"Darto.sagrim@gmail.com\",\"adm.p3srspakubuwonoterrace@gmail.com\",\"Chandra@Isat.net.id\",\"karyabilitas@gmail.com\",\"afriansyah.syarifudin@arthatel.co.id\",\"adib@jagoanhosting.com\",\"ari.pamungkas@hinet.co.id\",\"Eproc@bignet.id\",\"info@cbtp.co.id\",\"m.akmal207@gmail.com\",\"Finance@gpm.co.id\",\"bobby@globalnetwork.net.id\",\"bimo.prabowo@iforte.co.id\",\"novifransina.nf@gmail.com\",\"Sonya.tampubolon@mncgroup.com\",\"ade.arman@gmail.com\",\"ronny@jnetwork.net.id\",\"tjetjep.h@kisi.co.id\",\"Finance@kabeltelekom.id\",\"info@gmedia.co.id\",\"Novi@Mag.Net.id\",\"hadi.kusmana@moratelindo.co.id\",\"agung.fatony@panjiperkasa.net.id\",\"billing@rackh.co.id\"]', 'aba', 'ade', 'jaringan', '1', 'uptime', '2021-03-08 13:12:56', '2021-03-09 09:15:24', 1, '2021-03-08 06:24:59', '2021-03-08 06:24:59'),
(48, '[\"ptpupuk@uninet.net.id\",\"Darto.sagrim@gmail.com\",\"adm.p3srspakubuwonoterrace@gmail.com\",\"Chandra@Isat.net.id\",\"karyabilitas@gmail.com\",\"Finance@aldiracita.com\",\"afriansyah.syarifudin@arthatel.co.id\",\"adib@jagoanhosting.com\",\"ari.pamungkas@hinet.co.id\",\"info@cbtp.co.id\",\"m.akmal207@gmail.com\",\"Finance@gpm.co.id\",\"bobby@globalnetwork.net.id\",\"bimo.prabowo@iforte.co.id\",\"novifransina.nf@gmail.com\",\"Sonya.tampubolon@mncgroup.com\",\"ade.arman@gmail.com\",\"ronny@jnetwork.net.id\",\"tjetjep.h@kisi.co.id\",\"Finance@kabeltelekom.id\",\"info@gmedia.co.id\",\"Novi@Mag.Net.id\",\"hadi.kusmana@moratelindo.co.id\",\"agung.fatony@panjiperkasa.net.id\",\"billing@rackh.co.id\"]', 'acaa', 'aca', 'jaringan', '1', 'downtime', '2021-03-15 15:43:20', '2021-03-18 14:03:43', 1, '2021-03-15 08:43:28', '2021-03-15 08:43:28'),
(49, '[\"ptpupuk@uninet.net.id\",\"Darto.sagrim@gmail.com\",\"adm.p3srspakubuwonoterrace@gmail.com\",\"Chandra@Isat.net.id\",\"karyabilitas@gmail.com\",\"Finance@aldiracita.com\",\"afriansyah.syarifudin@arthatel.co.id\",\"adib@jagoanhosting.com\",\"ari.pamungkas@hinet.co.id\",\"info@cbtp.co.id\",\"m.akmal207@gmail.com\",\"Finance@gpm.co.id\",\"bobby@globalnetwork.net.id\",\"bimo.prabowo@iforte.co.id\",\"novifransina.nf@gmail.com\",\"Sonya.tampubolon@mncgroup.com\",\"ade.arman@gmail.com\",\"ronny@jnetwork.net.id\",\"tjetjep.h@kisi.co.id\",\"Finance@kabeltelekom.id\",\"info@gmedia.co.id\",\"Novi@Mag.Net.id\",\"hadi.kusmana@moratelindo.co.id\",\"agung.fatony@panjiperkasa.net.id\",\"billing@rackh.co.id\"]', 'ete', 'ete', 'jaringan', '1', 'downtime', '2021-03-16 09:02:03', NULL, 1, '2021-03-16 02:02:12', '2021-03-16 02:02:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `announcement_mails`
--

CREATE TABLE `announcement_mails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `announcement_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `announcement_mails`
--

INSERT INTO `announcement_mails` (`id`, `title`, `content`, `email`, `announcement_id`, `created_at`, `updated_at`) VALUES
(1, 'ataa', 'ata', 'email', 20, '2021-03-08 02:08:16', '2021-03-08 02:08:16'),
(26, 'dadu', 'dadddddddddd', 'billing@rackh.co.id', 45, '2021-03-08 02:53:15', '2021-03-08 02:53:15'),
(27, 'aba', 'ade', 'email', 46, '2021-03-08 06:24:59', '2021-03-08 06:24:59'),
(28, 'aaaadfs', 'asdfsdf', 'email', 47, '2021-03-08 08:27:51', '2021-03-08 08:27:51'),
(29, 'aaaadfs', 'asdfsdf', 'email', 47, '2021-03-15 02:37:45', '2021-03-15 02:37:45'),
(30, 'aba', 'ade', 'email', 46, '2021-03-15 02:37:58', '2021-03-15 02:37:58'),
(31, 'dadu', 'dadddddddddd', 'email', 45, '2021-03-15 02:38:28', '2021-03-15 02:38:28'),
(32, 'ataa', 'ata', 'email', 19, '2021-03-15 02:38:40', '2021-03-15 02:38:40'),
(33, 'ataa', 'ata', 'email', 18, '2021-03-15 02:38:52', '2021-03-15 02:38:52'),
(34, 'aba', 'aba', 'email', 17, '2021-03-15 02:39:03', '2021-03-15 02:39:03'),
(35, 'acaa', 'aca', 'email', 48, '2021-03-15 08:43:28', '2021-03-15 08:43:28'),
(36, 'ete', 'ete', 'email', 49, '2021-03-16 02:02:12', '2021-03-16 02:02:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(151, '2014_10_12_000000_create_users_table', 1),
(152, '2014_10_12_100000_create_password_resets_table', 1),
(153, '2019_08_19_000000_create_failed_jobs_table', 1),
(154, '2020_11_04_071611_create_members_table', 1),
(155, '2020_11_04_072505_create_requests_table', 1),
(156, '2020_11_04_072726_create_tickets_table', 1),
(157, '2020_11_04_073017_create_announcements_table', 1),
(158, '2020_11_04_085930_create_services_table', 1),
(159, '2020_11_10_092448_create_permission_tables', 1),
(160, '2021_03_03_095558_create_announcement_mails_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view_users', 'web', '2021-03-03 03:26:03', '2021-03-03 03:26:03'),
(2, 'add_users', 'web', '2021-03-03 03:26:03', '2021-03-03 03:26:03'),
(3, 'edit_users', 'web', '2021-03-03 03:26:03', '2021-03-03 03:26:03'),
(4, 'delete_users', 'web', '2021-03-03 03:26:03', '2021-03-03 03:26:03'),
(5, 'view_announcements', 'web', '2021-03-03 03:26:03', '2021-03-03 03:26:03'),
(6, 'add_announcements', 'web', '2021-03-03 03:26:03', '2021-03-03 03:26:03'),
(7, 'edit_announcements', 'web', '2021-03-03 03:26:03', '2021-03-03 03:26:03'),
(8, 'delete_announcements', 'web', '2021-03-03 03:26:03', '2021-03-03 03:26:03'),
(9, 'view_tickets', 'web', '2021-03-03 03:26:03', '2021-03-03 03:26:03'),
(10, 'add_tickets', 'web', '2021-03-03 03:26:03', '2021-03-03 03:26:03'),
(11, 'edit_tickets', 'web', '2021-03-03 03:26:03', '2021-03-03 03:26:03'),
(12, 'delete_tickets', 'web', '2021-03-03 03:26:03', '2021-03-03 03:26:03'),
(13, 'view_requests', 'web', '2021-03-03 03:26:03', '2021-03-03 03:26:03'),
(14, 'add_requests', 'web', '2021-03-03 03:26:03', '2021-03-03 03:26:03'),
(15, 'edit_requests', 'web', '2021-03-03 03:26:03', '2021-03-03 03:26:03'),
(16, 'delete_requests', 'web', '2021-03-03 03:26:04', '2021-03-03 03:26:04'),
(17, 'view_services', 'web', '2021-03-03 03:26:04', '2021-03-03 03:26:04'),
(18, 'add_services', 'web', '2021-03-03 03:26:04', '2021-03-03 03:26:04'),
(19, 'edit_services', 'web', '2021-03-03 03:26:04', '2021-03-03 03:26:04'),
(20, 'delete_services', 'web', '2021-03-03 03:26:04', '2021-03-03 03:26:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gender` enum('pria','wanita') COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `members`
--

INSERT INTO `members` (`id`, `gender`, `birth`, `address`, `id_number`, `phone`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'wanita', '2001-03-02', 'Dk. Untung Suropati No. 250, Pekalongan 48489, KepR', '1566', '(+62) 434 7997 6944', 3, '2021-03-03 03:26:05', '2021-03-03 03:26:05'),
(2, 'pria', '1981-07-20', 'Dk. Bak Air No. 954, Bukittinggi 14590, SulUt', '2157', '(+62) 545 0930 438', 2, '2021-03-03 03:26:05', '2021-03-03 03:26:05'),
(3, 'wanita', '2010-06-16', 'Kpg. Kali No. 675, Cimahi 25100, SulBar', '2415', '0260 4415 6069', 6, '2021-03-03 03:26:05', '2021-03-03 03:26:05'),
(4, 'pria', '2007-11-28', 'Dk. Samanhudi No. 690, Banjarbaru 18782, Lampung', '1049', '0492 3883 453', 11, '2021-03-03 03:26:05', '2021-03-03 03:26:05'),
(5, 'wanita', '1996-04-16', 'Psr. Cikutra Timur No. 406, Sabang 97269, KalTim', '4285', '0650 3323 6637', 5, '2021-03-03 03:26:05', '2021-03-03 03:26:05'),
(6, 'wanita', '1993-12-29', 'Psr. Abang No. 967, Subulussalam 51547, Aceh', '1482', '(+62) 826 768 311', 9, '2021-03-03 03:26:05', '2021-03-03 03:26:05'),
(7, 'pria', '2002-02-09', 'Dk. Sampangan No. 872, Bitung 57224, SumSel', '7009', '(+62) 738 8163 319', 10, '2021-03-03 03:26:05', '2021-03-03 03:26:05'),
(8, 'wanita', '1997-10-20', 'Jr. Babadak No. 675, Banjar 88436, SulTeng', '6577', '0958 1291 8232', 7, '2021-03-03 03:26:05', '2021-03-03 03:26:05'),
(9, 'wanita', '2013-06-27', 'Jln. Bazuka Raya No. 944, Palu 98180, Aceh', '8813', '021 6644 7907', 8, '2021-03-03 03:26:05', '2021-03-03 03:26:05'),
(10, 'wanita', '2009-03-10', 'Dk. Laswi No. 472, Lubuklinggau 23993, KepR', '1485', '0692 2938 0011', 4, '2021-03-03 03:26:05', '2021-03-03 03:26:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `requests`
--

CREATE TABLE `requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `requests`
--

INSERT INTO `requests` (`id`, `service_name`, `description`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Service Name', 'Sint sint rem molestiae temporibus. Ea consequuntur maxime quia in.', '0', 2, '2021-03-03 03:26:05', '2021-03-03 03:26:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2021-03-03 03:26:04', '2021-03-03 03:26:04'),
(2, 'operator', 'web', '2021-03-03 03:26:04', '2021-03-03 03:26:04'),
(3, 'client', 'web', '2021-03-03 03:26:04', '2021-03-03 03:26:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(5, 1),
(5, 2),
(5, 3),
(6, 1),
(6, 2),
(7, 1),
(7, 2),
(8, 1),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(10, 2),
(11, 1),
(11, 2),
(12, 1),
(13, 1),
(13, 2),
(13, 3),
(14, 1),
(14, 2),
(15, 1),
(15, 2),
(16, 1),
(17, 1),
(17, 2),
(17, 3),
(18, 1),
(18, 2),
(19, 1),
(19, 2),
(20, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `specification` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rack` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `request_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ticket_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` enum('downtime','uptime') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tickets`
--

INSERT INTO `tickets` (`id`, `ticket_number`, `subject`, `message`, `status`, `category`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '8119', 'subject', 'Hic tempora quaerat nulla non. Perferendis impedit consequatur quibusdam.', '0', 'downtime', 2, '2021-03-03 03:26:05', '2021-03-03 03:26:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$gJlsjQ0noDwtw/hz/Q9ni.iXVSqKhga/M4Zm5Cnvdv5SJneSmJuuW', NULL, '2021-03-03 03:26:05', '2021-03-03 03:26:05'),
(2, 'Adikara Haryanto', 'wibisono.ajiono@example.net', '2021-03-03 03:26:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zeFW7zVjMj', '2021-03-03 03:26:05', '2021-03-03 03:26:05'),
(3, 'Ega Warsita Adriansyah S.IP', 'karimah.ardianto@example.net', '2021-03-03 03:26:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'dNsbulwHcC', '2021-03-03 03:26:05', '2021-03-03 03:26:05'),
(4, 'Vanya Nuraini', 'kajen.dabukke@example.org', '2021-03-03 03:26:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'v6F2SxZQhS', '2021-03-03 03:26:05', '2021-03-03 03:26:05'),
(5, 'Virman Sitompul', 'diana.laksita@example.net', '2021-03-03 03:26:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NOiPLm7ujh', '2021-03-03 03:26:05', '2021-03-03 03:26:05'),
(6, 'Eman Balangga Maryadi', 'bajragin66@example.net', '2021-03-03 03:26:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'BfuQpR4pEI', '2021-03-03 03:26:05', '2021-03-03 03:26:05'),
(7, 'Jamalia Oktaviani', 'maryati.padmi@example.com', '2021-03-03 03:26:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'sDYoPK2KMd', '2021-03-03 03:26:05', '2021-03-03 03:26:05'),
(8, 'Ihsan Mahendra', 'iprasasta@example.net', '2021-03-03 03:26:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'hkSYcFLcKM', '2021-03-03 03:26:05', '2021-03-03 03:26:05'),
(9, 'Kartika Haryanti', 'amaheswara@example.net', '2021-03-03 03:26:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NihmQiZGEk', '2021-03-03 03:26:05', '2021-03-03 03:26:05'),
(10, 'Nova Zulaikha Hassanah M.Kom.', 'sakura62@example.org', '2021-03-03 03:26:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2Vq1DB2iyr', '2021-03-03 03:26:05', '2021-03-03 03:26:05'),
(11, 'Mursinin Pradana S.Sos', 'mutia64@example.org', '2021-03-03 03:26:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'VbNFhxIp6d', '2021-03-03 03:26:05', '2021-03-03 03:26:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `announcements_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `announcement_mails`
--
ALTER TABLE `announcement_mails`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `members_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requests_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_request_id_foreign` (`request_id`);

--
-- Indeks untuk tabel `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tickets_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `announcement_mails`
--
ALTER TABLE `announcement_mails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `requests`
--
ALTER TABLE `requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `announcements`
--
ALTER TABLE `announcements`
  ADD CONSTRAINT `announcements_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_request_id_foreign` FOREIGN KEY (`request_id`) REFERENCES `requests` (`id`);

--
-- Ketidakleluasaan untuk tabel `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
