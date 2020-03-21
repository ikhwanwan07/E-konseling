-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2020 at 12:14 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekon`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `title`, `kategori`, `content`, `updated_at`, `created_at`) VALUES
(1, 'Sejarah UII', 'event', 'SEJARAH & PERKEMBANGAN\r\n\r\nUniversitas Islam Indonesia (UII) pada awalnya bernama Sekolah Tinggi Islam (STI), didirikan oleh beberapa tokoh nasional seperti Dr. Mohammad Hatta, KH. Abdulkahar Muzakkir, Moh. Roem, KH. A. Wahid Hasyim,KH. Mas Mansyur dan Moh. Natsir serta tokoh lainnya di Jakarta pada 8 Juli 1945. STI menjadi pendidikan tinggi nasional pertama di Indonesia yang kemudian berubah status menjadi universitas dan bernama Universitas Islam Indonesia pada 3 November 1947 sebagai respon keinginan dan kebutuhan untuk mengintegrasikan antara pengetahuan dan akhlak.\r\n\r\nPada tahun akademik 2018/2019, UII memiliki 8 (delapan) Fakultas, dengan 4 (empat) program Diploma Tiga, 24 (dua puluh empat) program Sarjana, 5 (lima) program Profesi, 10 (sepuluh) program Magister dan 3 (tiga) program Doktor. UII telah terakreditasi institusi A dan sebagian besar dari program studi di UII telah mendapat akreditasi A dari Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT). UII memiliki jumlah mahasiswa aktif lebih dari 23.000 mahasiswa dan telah memiliki lebih dari 94.790 alumni hingga November 2018.\r\n\r\nUII membangun Kampus Terpadu sejak tahun 1990 dengan lahan seluas 36 hektar di daerah sejuk di jalan Kaliurang km. 14,5. Di samping itu juga terdapat beberapa kampus di Kota Yogyakarta (Fakultas Ekonomi di Condong Catur, Kampus Demangan di Jl. Demangan Baru No. 24 serta Fakultas Hukum di Jl. Taman Siswa No. 158 dan Jl. Cik di Tiro No. 1).', '2019-10-01 00:40:48', '2019-09-25 05:23:14'),
(2, 'Fasilitas', 'info', 'Kampus Terpadu UII telah dilengkapi berbagai fasilitas seperti masjid, poliklinik dan apotek, gelanggang olah raga, student convention centre, asrama mahasiswa, auditorium, bookstore (Periplus), serta fasilitas laboratorium (bersertifikai ISO 17025 dari Komite Akreditasi Nasional untuk Laboratorium Terpadu danLaboratorium Kualitas Lingkungan), e-learning (Moodle dan Google Classsroom), dan perpustakaan yang mendukung proses pembelajaran pada level perguruan tinggi.', '2019-09-25 05:23:36', '2019-09-25 05:23:36'),
(3, 'Kemitraan', 'info', 'UII memiliki jaringan kerja sama dengan ratusan perguruan tinggi nasional, perguruan tinggi luar negeri, lembaga pemerintah dan industri. Dalam membangun jaringan kerja sama, UII menjadi salah satu penggagas jaringan kerja sama antar perguruan tinggi (Nationwide University Network in Indonesia) bersama 25 perguruan tinggi lain di Indonesia. Sebelum itu, UII juga telah melakukan kerja sama dengan perguruan tinggi Islam se-Asia tenggara.\r\n\r\nDalam jaringan dengan perguruan tinggi nasional, UII menjalin kerja sama antara lain dengan: Universitas Islam Negeri Sunan Kalijaga Yogyakarta, Universitas Diponegoro, Universitas Sebelas Maret Surakarta, Universitas Gajah Mada, Universitas Bina Nusantara, Universitas Udayana, Akademik Kepolisian RI, serta berbagai perguruan tinggi yang tergabung dalam jejearing Nation University Network Indonesia (NUNI).\r\n\r\nPada tahun 2018, UII telah menjalin kerja sama aktif dengan perguruan tinggi dan lembaga penelitian luar negeri di berbagai benua antara lain Universiti Malaya, Universiti Sains Islam Malaysia, Rajamangala University of Technology, Burapha University, Queensland University of Technology, The Hague University of Applied Sciences, The Faith Mehmet Vakif University in Istanbul Turkey, University of Technology Petronas, University of Hawai’i at Manoa, Zhejiang University dan puluhan institusi mitra kerja sama aktif lainnya. Kemitraan dengan perguruan tinggi luar negeri tersebut memberikan kesempatan bagi sivitas akademika UII untuk memperluas mobilitas internasional dibidang akademik seperti penelitian kolaboratif, gelar ganda, pertukaran mahasiswa dan bentuk kerja sama lainnya.\r\n\r\nSelain itu, kerja sama yang dijalin UII juga mencakup kemitraan dengan lembaga pemerintah, antara lain Kementrian Agama, Kementrian Sosial, Kementrian Perhubungan, Kementrian Hukum dan Hak Asasi Manusia, Kementrian Tenaga Kerja dan Transmigrasi, Mahkamah Agung, Mahkamah Konstitusi, Komisi Yudusial, Dewan Perwakilan Daerah, Komisi Pemberantasan Korupsi, Pengadilan Tinggi dan Pengadilan Tinggi Agama dibeberapa daerah, Badan Standardisasi Nasional, Badan Perlindungan Konsumen Nasional, Lembaga Perlindungan Saksi dan Korban, serta beberapa pemerintah daerah tingkat propinsi, kabupaten dan kota.\r\n\r\nUII melakukan kerja sama dengan kalangan industri dan asosiasi dalam berbagai bentuk kegiatan, antara lain penyediaan beasiswa, perekrutan lulusan UII, seminar, workshop, bantuan peralatan untuk laboratorium. Kalangan industri dan asosiasi yang melakukan kerja sama dengan UII antara lain Microsoft, Metrohm Netherands, SAP, Exxon Mobile Oil, Tifico, BRI, Bank Muamalat, Bank Mandiri, Bank Bukopin, Edugate, Acer, Cisco Networking Academy, Oracle, Ikatan Advokat Indonesia (DPP IKADIN), Asosiasi Pertekstilan Indonesia (API), Perhimpunan Advokat Indonesia (Peradi), Asosiasi Notariat Indonesia (ANI), Ikatan Arsitek Indonesia, Asosiasi Penyelenggara Jasa Internet Indonesia, Asosiasi Tenaga Ahli Konstruksi Indonesia, PT. Bursa Efek Indonesia, PT. Asuransi Takaful, Metro TV, TV One, PT. Krakatau Steel, PT. Golden Energy Mines Tbk. dan lain-lain.', '2019-09-25 05:23:59', '2019-09-25 05:23:59'),
(4, 'Bootstrap sudah gak bagus ? yakin ?', 'info', 'Introduction\r\n\r\nGet started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.\r\nQuick start\r\n\r\nLooking to quickly add Bootstrap to your project? Use BootstrapCDN, provided for free by the folks at StackPath. Using a package manager or need to download the source files? Head to the downloads page.\r\nCSS\r\n\r\nCopy-paste the stylesheet <link> into your <head> before all other stylesheets to load our CSS.\r\n\r\n<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">\r\n\r\nJS\r\n\r\nMany of our components require the use of JavaScript to function. Specifically, they require jQuery, Popper.js, and our own JavaScript plugins. Place the following <script>s near the end of your pages, right before the closing </body> tag, to enable them. jQuery must come first, then Popper.js, and then our JavaScript plugins.\r\n\r\nWe use jQuery’s slim build, but the full version is also supported.\r\n\r\n<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>\r\n<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>\r\n<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>\r\n\r\nCurious which components explicitly require jQuery, our JS, and Popper.js? Click the show components link below. If you’re at all unsure about the general page structure, keep reading for an example page template.\r\n\r\nOur bootstrap.bundle.js and bootstrap.bundle.min.js include Popper, but not jQuery. For more information about what’s included in Bootstrap, please see our contents section.\r\nShow components requiring JavaScript\r\nStarter template\r\n\r\nBe sure to have your pages set up with the latest design and development standards. That means using an HTML5 doctype and including a viewport meta tag for proper responsive behaviors. Put it all together and your pages should look like this:\r\n\r\n<!doctype html>\r\n<html lang=\"en\">\r\n  <head>\r\n    <!-- Required meta tags -->\r\n    <meta charset=\"utf-8\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">\r\n\r\n    <!-- Bootstrap CSS -->\r\n    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">\r\n\r\n    <title>Hello, world!</title>\r\n  </head>\r\n  <body>\r\n    <h1>Hello, world!</h1>\r\n\r\n    <!-- Optional JavaScript -->\r\n    <!-- jQuery first, then Popper.js, then Bootstrap JS -->\r\n    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>\r\n    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>\r\n    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>\r\n  </body>\r\n</html>', '2019-09-29 12:42:36', '2019-09-29 12:42:36'),
(5, 'Skripsi mahasiswa', 'event', 'kita harus bersatu pad', '2020-01-16 11:54:01', '2020-01-16 11:54:01');

-- --------------------------------------------------------

--
-- Table structure for table `balas`
--

CREATE TABLE `balas` (
  `id` int(11) NOT NULL,
  `chat_id` int(11) NOT NULL,
  `role` enum('mahasiswa','dosen') NOT NULL,
  `balas` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `balas`
--

INSERT INTO `balas` (`id`, `chat_id`, `role`, `balas`, `created_at`, `updated_at`) VALUES
(1, 1, 'dosen', 'yaysas', '2020-01-20 06:37:44', '2020-01-20 06:37:44'),
(2, 1, 'dosen', 'yaysas', '2020-01-20 06:39:32', '2020-01-20 06:39:32'),
(3, 1, 'dosen', 'halo', '2020-01-20 06:48:51', '2020-01-20 06:48:51'),
(4, 1, 'dosen', 'iya pak dosen', '2020-01-20 07:19:43', '2020-01-20 07:19:43'),
(5, 1, 'dosen', 'aku', '2020-01-20 07:20:07', '2020-01-20 07:20:07'),
(6, 1, 'dosen', 'ya', '2020-01-20 07:28:17', '2020-01-20 07:28:17'),
(7, 1, 'dosen', 'yayaya', '2020-01-20 07:30:20', '2020-01-20 07:30:20'),
(8, 1, 'mahasiswa', 'saya nobel', '2020-01-20 07:33:20', '2020-01-20 07:33:20'),
(9, 2, 'dosen', 'gimana apanya dek ?', '2020-01-21 00:56:13', '2020-01-21 00:56:13'),
(10, 2, 'mahasiswa', 'magang saya ada masalah', '2020-01-21 00:58:12', '2020-01-21 00:58:12'),
(11, 2, 'dosen', 'masalahnya dimana ?', '2020-01-21 00:58:29', '2020-01-21 00:58:29'),
(12, 3, 'dosen', 'bisa kirim nimnya mas ?', '2020-01-22 23:12:58', '2020-01-22 23:12:58'),
(13, 1, 'mahasiswa', 'nobel', '2020-01-25 23:21:46', '2020-01-25 23:21:46');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(10) NOT NULL,
  `mahasiswa_id` int(10) NOT NULL,
  `dosen_id` int(10) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `mahasiswa_id`, `dosen_id`, `subjek`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 'akademik', 'saya mau bertanya magang pak ?', '2020-01-18 20:26:12', '2020-01-18 20:26:12'),
(2, 3, 1, 'Magang', 'pak saya tanya magang saya gimna ?', '2020-01-21 00:55:52', '2020-01-21 00:55:52'),
(3, 4, 1, 'Nilai belum keluar', 'Pak Nilai saya blm keluar apakah bisa kkn ?', '2020-01-22 22:56:42', '2020-01-22 22:56:42'),
(4, 2, 2, 'Magang', 'pak mau tanya ?', '2020-01-26 23:14:17', '2020-01-26 23:14:17');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(10) UNSIGNED NOT NULL,
  `Nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(233) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIP` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HP` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(122) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `Nama`, `email`, `NIP`, `HP`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Andik Budi Cahyono S.kom', 'adik@uii.com', '0912121', '123456', 8, '2019-09-20 04:33:56', '2020-03-17 01:00:06'),
(2, 'Teduh dirgahayu S.kom', 'teduh@uii.com', '11111', '222222', 23, '2019-10-08 23:18:36', '2020-01-16 11:51:18'),
(3, 'Zainudin Zukhri  S.kom', 'zainudin@uii.com', '965240102', '0811111111', 27, '2020-03-17 01:02:41', '2020-03-17 01:02:41'),
(4, 'HENDRIK S.kom', 'hendrik@uii.com', '055230503', '082222', 28, '2020-03-17 01:03:23', '2020-03-17 01:03:23'),
(5, 'BENI SURANTO S.kom', 'beni@uii.com', '085230102', '0833333', 29, '2020-03-17 01:04:02', '2020-03-17 01:09:33'),
(6, 'Aridhanyati Arifin S.kom', 'ari@uii.com', '115230406', '0844444', 30, '2020-03-17 01:04:40', '2020-03-17 01:09:51'),
(7, 'Novi Setiani S.kom', 'novi@uii.com', '115230101', '085555', 31, '2020-03-17 01:05:11', '2020-03-17 01:10:11'),
(8, 'Fietyata Yudha S.kom', 'yudha@uii.com', '125230403', '086666', 32, '2020-03-17 01:05:46', '2020-03-17 01:09:09'),
(9, 'Kholid Haryono S.kom', 'kholid@uii.com', '074200501', '0877777', 33, '2020-03-17 01:08:06', '2020-03-17 01:08:06'),
(10, 'LIZDA ISWARI S.kom', 'lizda@uii.com', '045230406', '08888888', 34, '2020-03-17 01:08:48', '2020-03-17 01:08:48');

-- --------------------------------------------------------

--
-- Table structure for table `ipk`
--

CREATE TABLE `ipk` (
  `id` int(10) UNSIGNED NOT NULL,
  `mahasiswa_id` int(11) NOT NULL,
  `tahun_ajaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ipk` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ipk`
--

INSERT INTO `ipk` (`id`, `mahasiswa_id`, `tahun_ajaran`, `semester`, `ipk`, `created_at`, `updated_at`) VALUES
(6, 2, '2016/2017', '1', 3.2, '2020-01-14 23:54:23', '2020-01-14 23:54:23'),
(7, 2, '2016/2017', '2', 3.4, '2020-01-14 23:54:32', '2020-01-14 23:54:32'),
(8, 2, '2017/2018', '3', 3.7, '2020-01-14 23:54:48', '2020-01-14 23:54:48'),
(9, 2, '2017/2018', '4', 2.5, '2020-01-14 23:54:59', '2020-01-14 23:54:59'),
(10, 2, '2018/2019', '5', 3.4, '2020-01-15 00:17:30', '2020-01-15 00:17:30'),
(11, 2, '2018/2019', '6', 3.7, '2020-01-15 00:17:43', '2020-01-15 00:17:43'),
(12, 3, '2016/2017', '1', 2.3, '2020-01-15 01:01:53', '2020-01-15 01:01:53'),
(13, 3, '2016/2017', '2', 2.5, '2020-01-15 01:02:06', '2020-01-15 01:02:06'),
(14, 3, '2017/2018', '3', 3.6, '2020-01-15 01:02:18', '2020-01-15 01:02:18'),
(15, 3, '2017/2018', '4', 3.5, '2020-01-15 01:02:35', '2020-01-15 01:02:35'),
(16, 3, '2018/2019', '5', 3.2, '2020-01-15 01:02:47', '2020-01-15 01:02:47'),
(17, 3, '2018/2019', '6', 3.1, '2020-01-15 01:03:01', '2020-01-15 01:03:01');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(10) NOT NULL,
  `dosen_id` int(10) NOT NULL,
  `hari` varchar(15) NOT NULL,
  `jam` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `dosen_id`, `hari`, `jam`, `created_at`, `updated_at`) VALUES
(7, 5, 'Senin', '08.00', '2020-03-18 21:48:17', '2020-03-18 21:48:17'),
(8, 5, 'Selasa', '10.00', '2020-03-18 21:48:17', '2020-03-18 21:48:17'),
(9, 5, 'Rabu', '11.00', '2020-03-18 21:48:17', '2020-03-18 21:48:17'),
(10, 5, 'Kamis', '11.30', '2020-03-18 21:48:17', '2020-03-18 21:48:17'),
(11, 5, 'Jumat', '12.00', '2020-03-18 21:48:17', '2020-03-18 21:48:17'),
(12, 5, 'Sabtu', 'OFF', '2020-03-18 21:48:17', '2020-03-18 21:48:17');

-- --------------------------------------------------------

--
-- Table structure for table `konsentrasi`
--

CREATE TABLE `konsentrasi` (
  `id` int(10) NOT NULL,
  `mahasiswa_id` int(10) NOT NULL,
  `jalur` varchar(200) NOT NULL,
  `nilai` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konsentrasi`
--

INSERT INTO `konsentrasi` (`id`, `mahasiswa_id`, `jalur`, `nilai`, `created_at`, `updated_at`) VALUES
(41, 2, 'magang', 20, '2020-01-26 23:17:05', '2020-01-26 23:17:05'),
(42, 2, 'penelitian', 20, '2020-01-26 23:17:05', '2020-01-26 23:17:05'),
(43, 2, 'perintisan bisnis', 20, '2020-01-26 23:17:05', '2020-01-26 23:17:05'),
(44, 2, 'kuliah di luar negeri', 20, '2020-01-26 23:17:05', '2020-01-26 23:17:05'),
(45, 2, 'pengabdian', 20, '2020-01-26 23:17:05', '2020-01-26 23:17:05'),
(46, 3, 'magang', 20, '2020-02-24 23:10:20', '2020-02-24 23:10:20'),
(47, 3, 'penelitian', 20, '2020-02-24 23:10:20', '2020-02-24 23:10:20'),
(48, 3, 'perintisan bisnis', 20, '2020-02-24 23:10:20', '2020-02-24 23:10:20'),
(49, 3, 'kuliah di luar negeri', 20, '2020-02-24 23:10:20', '2020-02-24 23:10:20'),
(50, 3, 'pengabdian', 20, '2020-02-24 23:10:20', '2020-02-24 23:10:20');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `Nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dosen_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `user_id`, `Nama`, `Nim`, `jurusan`, `alamat`, `tipe_id`, `dosen_id`, `email`, `created_at`, `updated_at`) VALUES
(2, 12, 'wan', '14523322', 'informatika', 'button', '2', '2', 'wan@uii.com', '2019-09-20 04:44:45', '2019-09-20 04:44:45'),
(3, 19, 'nobel', '14523299', 'informatika', 'button', '12', '1', 'nobel@uii.com', '2019-10-08 23:15:34', '2019-10-08 23:15:34'),
(4, 25, 'dimas', '145233234', 'informatika', 'solo', '1', '1', 'dim@uii.com', '2020-01-13 13:57:03', '2020-01-13 13:57:03');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa_matkul`
--

CREATE TABLE `mahasiswa_matkul` (
  `id` int(5) NOT NULL,
  `mahasiswa_id` int(5) NOT NULL,
  `matkul_id` int(5) NOT NULL,
  `nilai` varchar(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa_matkul`
--

INSERT INTO `mahasiswa_matkul` (`id`, `mahasiswa_id`, `matkul_id`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'A', '2020-01-23 08:23:57', '2020-01-23 08:23:57'),
(2, 2, 4, 'B', '2020-01-23 08:23:57', '2020-01-23 08:23:57');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id` int(5) NOT NULL,
  `kode` int(10) NOT NULL,
  `Mata_kuliah` varchar(55) NOT NULL,
  `semester` int(1) NOT NULL,
  `SKS` int(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id`, `kode`, `Mata_kuliah`, `semester`, `SKS`, `created_at`, `updated_at`) VALUES
(1, 52311001, 'Akidah', 1, 2, '2020-01-23 08:45:50', '2020-01-23 08:45:50'),
(2, 52311002, 'Pendidikan Pancasila', 1, 2, '2020-01-23 08:45:50', '2020-01-23 08:45:50'),
(3, 52311003, 'Pemikiran Desain', 1, 4, '2020-01-23 08:47:05', '2020-01-23 08:47:05'),
(4, 52311005, 'Pemrograman dan Struktur Data', 1, 6, '2020-01-23 08:47:05', '2020-01-23 08:47:05'),
(5, 52311004, 'Fundamen Informatika', 1, 6, '2020-01-23 08:48:17', '2020-01-23 08:48:17'),
(6, 52321001, 'Ibadah dan Akhlak', 2, 2, '2020-01-23 08:48:17', '2020-01-23 08:48:17'),
(7, 52322002, 'Bahas Indonesia untuk Komunikasi Ilmiah', 2, 2, '2020-01-23 08:52:08', '2020-01-23 08:52:08'),
(8, 52322003, 'Fundamen Informatika', 2, 6, '2020-01-23 08:52:08', '2020-01-23 08:52:08'),
(9, 52322004, 'Fundamen Pengembangan Aplikasi', 2, 6, '2020-01-23 08:53:30', '2020-01-23 08:53:30'),
(10, 52322005, 'RPL', 2, 4, '2020-01-23 08:53:30', '2020-01-23 08:53:30'),
(11, 52331001, 'Studi Kepemimpinan Islam', 3, 2, '2020-01-23 08:55:14', '2020-01-23 08:55:14'),
(12, 52331002, 'Matematika Lanjut', 3, 6, '2020-01-23 08:55:14', '2020-01-23 08:55:14'),
(13, 52331003, 'Pengembangan Aplikasi Web', 3, 6, '2020-01-23 08:56:25', '2020-01-23 08:56:25'),
(14, 52331004, 'Sistem dan Jaringan Komputer', 3, 6, '2020-01-23 08:56:25', '2020-01-23 08:56:25'),
(15, 52341001, 'PPI', 4, 2, '2020-01-23 08:57:32', '2020-01-23 08:57:32'),
(16, 52342002, 'SC dan SPK', 4, 3, '2020-01-23 08:57:32', '2020-01-23 08:57:32'),
(17, 52342003, 'Grafika dan Multimedia', 4, 3, '2020-01-23 08:58:51', '2020-01-23 08:58:51'),
(18, 52342004, 'Pengembangan Sistem Informasi', 4, 6, '2020-01-23 08:58:51', '2020-01-23 08:58:51'),
(19, 52342005, 'Pengembangan Gim', 4, 6, '2020-01-23 09:00:30', '2020-01-23 09:00:30'),
(20, 52352001, 'Bahasa arab Al quran', 5, 4, '2020-01-23 09:00:30', '2020-01-23 09:00:30'),
(21, 52352002, 'Kewirausahaan', 5, 2, '2020-01-23 09:02:05', '2020-01-23 09:02:05'),
(22, 52352003, 'Pengembangan Aplikasi Informatika medis', 5, 6, '2020-01-23 09:02:05', '2020-01-23 09:02:05'),
(23, 52352003, 'Pengembangan Aplikasi Bergerak', 5, 6, '2020-01-23 09:04:21', '2020-01-23 09:04:21'),
(24, 52361001, 'Pendidikan Kewarganegaraan', 6, 2, '2020-01-23 09:04:21', '2020-01-23 09:04:21'),
(25, 52361002, 'KKN', 6, 2, '2020-01-23 09:06:43', '2020-01-23 09:06:43'),
(26, 52362003, 'Etika Profesi', 6, 2, '2020-01-23 09:06:43', '2020-01-23 09:06:43'),
(27, 52362004, 'Bahasa Inggris', 6, 2, '2020-01-23 09:07:12', '2020-01-23 09:07:12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(18, '2014_10_12_000000_create_users_table', 1),
(19, '2014_10_12_100000_create_password_resets_table', 1),
(20, '2019_07_09_063146_create_mahasiswa_table', 1),
(21, '2019_07_09_072940_create_dosen_table', 1),
(22, '2019_09_13_072944_create_categoris_table', 2),
(23, '2019_09_13_073153_create_posts_table', 3),
(24, '2019_09_25_121546_create_artikels_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tipe`
--

CREATE TABLE `tipe` (
  `id` int(10) NOT NULL,
  `nama` varchar(4) NOT NULL,
  `Deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipe`
--

INSERT INTO `tipe` (`id`, `nama`, `Deskripsi`) VALUES
(1, 'INTJ', 'Pemikir,imajinatif,dan strategis'),
(2, 'ENTJ', 'Jeli Melihat Peluang'),
(3, 'ENFJ', 'Punya kepedulian besar terhadap orang'),
(4, 'INFJ', 'Pendiam yanng menginspirasi'),
(5, 'INTP', 'Lembut dan Bijaksana'),
(6, 'ENTP', 'Suka dengan tantangan baru'),
(7, 'ENFP', 'Memiliki talenta di banyak bidang'),
(8, 'INFP', 'Peka terhadap perasaan orang lain'),
(9, 'ESFP', 'Punya antusias hidup yang tinggi'),
(10, 'ISFP', 'Jeli terhadap hal kecil'),
(11, 'ISTP', 'Memutuskan berdasarkan logika'),
(12, 'ESTP', 'Suka dengan tindakan spontan'),
(13, 'ESFJ', 'supel dan suka membantu orang'),
(14, 'ISFJ', 'Memutuskan berdasarkan perasaan'),
(15, 'ISTJ', 'Teliti dalam bekerja'),
(16, 'ESTJ', 'Pekerja keras yang dapat diandalkan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'admin', 'admin@uii.com', '$2y$10$9lIoeHuZI4taZ/bAbVzw3OBErJ7CIgXYQ4zTW1zAhW4bqUgsaQRVW', 'admin', 'o1rLx9F0ZrLpQoevNHXQeYfkZDoA67tT2jJ1RSBCM96wJwhiGT3MdpDSrl8a', '2019-09-13 01:07:20', '2019-09-13 01:07:20'),
(8, 'andik', 'adik@uii.com', '$2y$10$Mi/9Cyly.l2rkywsydJhceBcl.r6huAs6eqpk1QR3iSZ10rWuX6ge', 'dosen', 'QwejhpF6041Gw9ShcjyDZL07DvNKAocGy7SOYe9TYmvImICvzBj5nmiEX9Ra', '2019-09-20 04:33:56', '2019-09-20 04:33:56'),
(12, 'wan', 'wan@uii.com', '$2y$10$K9doBurxJqr9tXf5RG59y.dt.Y0UkjaaQVTgK2BkBtXG8Re4LR0zC', 'mahasiswa', 'fGo7XKM8C7WTmqb9vIkR7D7kPjjD029Lxt9d7NrXUjmXAP6136nJk4w2T8Qi', '2019-09-20 04:44:44', '2019-09-20 04:44:44'),
(19, 'nobel', 'nobel@uii.com', '$2y$10$8MuR1dNhCTkhi2Fwbmsce.8OVmQ0xEf2/z5Ux6OQq7UH6KWaRNKzu', 'mahasiswa', 'DsA7sg7fKAKWxnQWzywCVGbRroAvrIeV7XYwfmugrpEtkYONThiLWhWQCZhx', '2019-10-08 23:15:34', '2019-10-08 23:15:34'),
(23, 'teduh', 'teduh@uii.com', '$2y$10$AvifwjnV6TPUOgImo4igNeK1ElWOlqniLuOfkLU5PliSmFx0l1TQe', 'dosen', 'hSM0Q8yscUDGLBSjPx1JZ4UHGF1RdmojgLY4fxZI6piXKSDoPC6Qe1HRbE0E', '2019-10-08 23:18:36', '2019-10-08 23:18:36'),
(25, 'dimas', 'dim@uii.com', '$2y$10$Jp4ixXHTj3yFOnD5oN4YgOpWkUlF9uwQjwO9jG15s6/edFnlcOuHC', 'mahasiswa', 'OXBzwNRqdNg5So9Z7RorogdFADJp7iSzz6QWXUvF207KflWJxxXvY083rm7w', '2020-01-13 13:57:03', '2020-01-13 13:57:03'),
(26, 'Zainudin Zukhri  S.kom', 'zainudin@uii.com', '$2y$10$KFOoU4rtj.XXYtbDrKV2Su/e91VC..2AMvezHO7anuqU6w8wktGPS', 'dosen', 'LI1Ib3qAlVJWZpib8LJLoZZNRjPFh0TidALtNYNxa0aDTt7vTIGq9j1lBKR7', '2020-03-17 01:00:48', '2020-03-17 01:00:48'),
(27, 'Zainudin Zukhri  S.kom', 'zainudin@uii.com', '$2y$10$8Wc8scXbo7YE5Hnmro8I3ep2iH0gIgKTLJsn/26m4gg1/cSORYNLK', 'dosen', 'f6yc5s5J9Ndf5Kf7qVkHThjfQ1Y9jcIUXLD25ZQZLkSBEGViZxhjv8OtuwSv', '2020-03-17 01:02:40', '2020-03-17 01:02:40'),
(28, 'HENDRIK S.kom', 'hendrik@uii.com', '$2y$10$4feNoURnhg1ZEItPg5/zxOrAn0CHNtq5JsIuQA2zubSkvfHv3OCVK', 'dosen', 'XceYuQzz3NgsIz1Dmtg8h74cmNIbATEw7rzsK477ZNFhAS0ndHNa2uUPOgXY', '2020-03-17 01:03:23', '2020-03-17 01:03:23'),
(29, 'BENI SURANTO', 'beni@uii.com', '$2y$10$kkG7CekFIEykjzQNIDtBA.ip1lkz1NzisJlgM2dOm6uY9.eT5uwiy', 'dosen', 'BGeT3kacvbbjAAlYvk6mNJGkTe42hYjWKMO8XFc343UFDidVTYyl09JJpYLk', '2020-03-17 01:04:02', '2020-03-17 01:04:02'),
(30, 'Aridhanyati Arifin', 'ari@uii.com', '$2y$10$tc/IvJjG3lI7Ijp/uZAHG.ZjId.XHxdN0bdLMLhU9AUWim1AeE8BK', 'dosen', 'gvH3hd8a4c9XRwo9Mc8kRDENlx0M3frThpf1OLeCOdhK2ylF9vE2nwRyMDCc', '2020-03-17 01:04:40', '2020-03-17 01:04:40'),
(31, 'Novi Setiani', 'novi@uii.com', '$2y$10$gzl5KD.kvQ.77DpPP5mxN.rpel03mnnnFVSnzqoh7KtkVxLQCJx3W', 'dosen', 'OfLidaQveYGRZNVPlEwUq8nJmuTjTpOXKSwgRNyAd6Ha05DeugiP22nS14UJ', '2020-03-17 01:05:11', '2020-03-17 01:05:11'),
(32, 'Fietyata Yudha', 'yudha@uii.com', '$2y$10$bbxhqBAaGwjn6StIrXwh1.rgM0xjcOcgFkDNutp.kBB0V85pqeuSi', 'dosen', '0xGH6vY9KU6CRIyALKKi0HXaiDVfxdRvqOkCq9udy2u2PxfJa7GORbq95ZXz', '2020-03-17 01:05:46', '2020-03-17 01:05:46'),
(33, 'Kholid Haryono S.kom', 'kholid@uii.com', '$2y$10$1iZ7uz1CJWINOIOwGlRdC.A.Sx0lAk62SzxXrZkD3AXBmh7tEKipm', 'dosen', 'b8dXJQTHpkGMIwFeEaG1qiBAFSsSXFEe8QUxzuCSSEURPTUOBcHnjbBjrFJT', '2020-03-17 01:08:06', '2020-03-17 01:08:06'),
(34, 'LIZDA ISWARI S.kom', 'lizda@uii.com', '$2y$10$5vvucEtTrTnFGVWSFtrcK.RdwxZmDWtuGKgHb8ZjCEjbuTJgQ49mm', 'dosen', 'OtCCZfbscBTkgwGbgfJp5KTNarKWqo7LStoMdj6WUgJTjRdxD3ulNMzSjazS', '2020-03-17 01:08:48', '2020-03-17 01:08:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `balas`
--
ALTER TABLE `balas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipk`
--
ALTER TABLE `ipk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konsentrasi`
--
ALTER TABLE `konsentrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa_matkul`
--
ALTER TABLE `mahasiswa_matkul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipe`
--
ALTER TABLE `tipe`
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
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `balas`
--
ALTER TABLE `balas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ipk`
--
ALTER TABLE `ipk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `konsentrasi`
--
ALTER TABLE `konsentrasi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mahasiswa_matkul`
--
ALTER TABLE `mahasiswa_matkul`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tipe`
--
ALTER TABLE `tipe`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
