-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2019 at 06:18 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE IF NOT EXISTS `artikels` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `title`, `kategori`, `content`, `updated_at`, `created_at`) VALUES
(1, 'Sejarah UII', 'event', 'SEJARAH & PERKEMBANGAN\r\n\r\nUniversitas Islam Indonesia (UII) pada awalnya bernama Sekolah Tinggi Islam (STI), didirikan oleh beberapa tokoh nasional seperti Dr. Mohammad Hatta, KH. Abdulkahar Muzakkir, Moh. Roem, KH. A. Wahid Hasyim,KH. Mas Mansyur dan Moh. Natsir serta tokoh lainnya di Jakarta pada 8 Juli 1945. STI menjadi pendidikan tinggi nasional pertama di Indonesia yang kemudian berubah status menjadi universitas dan bernama Universitas Islam Indonesia pada 3 November 1947 sebagai respon keinginan dan kebutuhan untuk mengintegrasikan antara pengetahuan dan akhlak.\r\n\r\nPada tahun akademik 2018/2019, UII memiliki 8 (delapan) Fakultas, dengan 4 (empat) program Diploma Tiga, 24 (dua puluh empat) program Sarjana, 5 (lima) program Profesi, 10 (sepuluh) program Magister dan 3 (tiga) program Doktor. UII telah terakreditasi institusi A dan sebagian besar dari program studi di UII telah mendapat akreditasi A dari Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT). UII memiliki jumlah mahasiswa aktif lebih dari 23.000 mahasiswa dan telah memiliki lebih dari 94.790 alumni hingga November 2018.\r\n\r\nUII membangun Kampus Terpadu sejak tahun 1990 dengan lahan seluas 36 hektar di daerah sejuk di jalan Kaliurang km. 14,5. Di samping itu juga terdapat beberapa kampus di Kota Yogyakarta (Fakultas Ekonomi di Condong Catur, Kampus Demangan di Jl. Demangan Baru No. 24 serta Fakultas Hukum di Jl. Taman Siswa No. 158 dan Jl. Cik di Tiro No. 1).', '2019-10-01 00:40:48', '2019-09-25 05:23:14'),
(2, 'Fasilitas', 'info', 'Kampus Terpadu UII telah dilengkapi berbagai fasilitas seperti masjid, poliklinik dan apotek, gelanggang olah raga, student convention centre, asrama mahasiswa, auditorium, bookstore (Periplus), serta fasilitas laboratorium (bersertifikai ISO 17025 dari Komite Akreditasi Nasional untuk Laboratorium Terpadu danLaboratorium Kualitas Lingkungan), e-learning (Moodle dan Google Classsroom), dan perpustakaan yang mendukung proses pembelajaran pada level perguruan tinggi.', '2019-09-25 05:23:36', '2019-09-25 05:23:36'),
(3, 'Kemitraan', 'info', 'UII memiliki jaringan kerja sama dengan ratusan perguruan tinggi nasional, perguruan tinggi luar negeri, lembaga pemerintah dan industri. Dalam membangun jaringan kerja sama, UII menjadi salah satu penggagas jaringan kerja sama antar perguruan tinggi (Nationwide University Network in Indonesia) bersama 25 perguruan tinggi lain di Indonesia. Sebelum itu, UII juga telah melakukan kerja sama dengan perguruan tinggi Islam se-Asia tenggara.\r\n\r\nDalam jaringan dengan perguruan tinggi nasional, UII menjalin kerja sama antara lain dengan: Universitas Islam Negeri Sunan Kalijaga Yogyakarta, Universitas Diponegoro, Universitas Sebelas Maret Surakarta, Universitas Gajah Mada, Universitas Bina Nusantara, Universitas Udayana, Akademik Kepolisian RI, serta berbagai perguruan tinggi yang tergabung dalam jejearing Nation University Network Indonesia (NUNI).\r\n\r\nPada tahun 2018, UII telah menjalin kerja sama aktif dengan perguruan tinggi dan lembaga penelitian luar negeri di berbagai benua antara lain Universiti Malaya, Universiti Sains Islam Malaysia, Rajamangala University of Technology, Burapha University, Queensland University of Technology, The Hague University of Applied Sciences, The Faith Mehmet Vakif University in Istanbul Turkey, University of Technology Petronas, University of Hawai’i at Manoa, Zhejiang University dan puluhan institusi mitra kerja sama aktif lainnya. Kemitraan dengan perguruan tinggi luar negeri tersebut memberikan kesempatan bagi sivitas akademika UII untuk memperluas mobilitas internasional dibidang akademik seperti penelitian kolaboratif, gelar ganda, pertukaran mahasiswa dan bentuk kerja sama lainnya.\r\n\r\nSelain itu, kerja sama yang dijalin UII juga mencakup kemitraan dengan lembaga pemerintah, antara lain Kementrian Agama, Kementrian Sosial, Kementrian Perhubungan, Kementrian Hukum dan Hak Asasi Manusia, Kementrian Tenaga Kerja dan Transmigrasi, Mahkamah Agung, Mahkamah Konstitusi, Komisi Yudusial, Dewan Perwakilan Daerah, Komisi Pemberantasan Korupsi, Pengadilan Tinggi dan Pengadilan Tinggi Agama dibeberapa daerah, Badan Standardisasi Nasional, Badan Perlindungan Konsumen Nasional, Lembaga Perlindungan Saksi dan Korban, serta beberapa pemerintah daerah tingkat propinsi, kabupaten dan kota.\r\n\r\nUII melakukan kerja sama dengan kalangan industri dan asosiasi dalam berbagai bentuk kegiatan, antara lain penyediaan beasiswa, perekrutan lulusan UII, seminar, workshop, bantuan peralatan untuk laboratorium. Kalangan industri dan asosiasi yang melakukan kerja sama dengan UII antara lain Microsoft, Metrohm Netherands, SAP, Exxon Mobile Oil, Tifico, BRI, Bank Muamalat, Bank Mandiri, Bank Bukopin, Edugate, Acer, Cisco Networking Academy, Oracle, Ikatan Advokat Indonesia (DPP IKADIN), Asosiasi Pertekstilan Indonesia (API), Perhimpunan Advokat Indonesia (Peradi), Asosiasi Notariat Indonesia (ANI), Ikatan Arsitek Indonesia, Asosiasi Penyelenggara Jasa Internet Indonesia, Asosiasi Tenaga Ahli Konstruksi Indonesia, PT. Bursa Efek Indonesia, PT. Asuransi Takaful, Metro TV, TV One, PT. Krakatau Steel, PT. Golden Energy Mines Tbk. dan lain-lain.', '2019-09-25 05:23:59', '2019-09-25 05:23:59'),
(4, 'Bootstrap sudah gak bagus ? yakin ?', 'info', 'Introduction\r\n\r\nGet started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.\r\nQuick start\r\n\r\nLooking to quickly add Bootstrap to your project? Use BootstrapCDN, provided for free by the folks at StackPath. Using a package manager or need to download the source files? Head to the downloads page.\r\nCSS\r\n\r\nCopy-paste the stylesheet <link> into your <head> before all other stylesheets to load our CSS.\r\n\r\n<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">\r\n\r\nJS\r\n\r\nMany of our components require the use of JavaScript to function. Specifically, they require jQuery, Popper.js, and our own JavaScript plugins. Place the following <script>s near the end of your pages, right before the closing </body> tag, to enable them. jQuery must come first, then Popper.js, and then our JavaScript plugins.\r\n\r\nWe use jQuery’s slim build, but the full version is also supported.\r\n\r\n<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>\r\n<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>\r\n<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>\r\n\r\nCurious which components explicitly require jQuery, our JS, and Popper.js? Click the show components link below. If you’re at all unsure about the general page structure, keep reading for an example page template.\r\n\r\nOur bootstrap.bundle.js and bootstrap.bundle.min.js include Popper, but not jQuery. For more information about what’s included in Bootstrap, please see our contents section.\r\nShow components requiring JavaScript\r\nStarter template\r\n\r\nBe sure to have your pages set up with the latest design and development standards. That means using an HTML5 doctype and including a viewport meta tag for proper responsive behaviors. Put it all together and your pages should look like this:\r\n\r\n<!doctype html>\r\n<html lang="en">\r\n  <head>\r\n    <!-- Required meta tags -->\r\n    <meta charset="utf-8">\r\n    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">\r\n\r\n    <!-- Bootstrap CSS -->\r\n    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">\r\n\r\n    <title>Hello, world!</title>\r\n  </head>\r\n  <body>\r\n    <h1>Hello, world!</h1>\r\n\r\n    <!-- Optional JavaScript -->\r\n    <!-- jQuery first, then Popper.js, then Bootstrap JS -->\r\n    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>\r\n    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>\r\n    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>\r\n  </body>\r\n</html>', '2019-09-29 12:42:36', '2019-09-29 12:42:36');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `id` int(10) unsigned NOT NULL,
  `Nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(233) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIP` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HP` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(122) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `Nama`, `email`, `NIP`, `HP`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'andik', 'adik@uii.com', '1234', '123456', 8, '2019-09-20 04:33:56', '2019-09-20 04:33:56'),
(2, 'teduh', 'teduh@uii.com', '11111', '222222', 23, '2019-10-08 23:18:36', '2019-10-08 23:18:36');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(10) unsigned NOT NULL,
  `Nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IPK` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DPA` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `Nama`, `Nim`, `jurusan`, `alamat`, `IPK`, `tipe`, `DPA`, `email`, `created_at`, `updated_at`) VALUES
(2, 'wan', '14523322', 'informatika', 'button', '3.2', 'ENFJ', 'andik', 'wan@uii.com', '2019-09-20 04:44:45', '2019-09-20 04:44:45'),
(3, 'nobel', '14523299', 'informatika', 'button', '3.8', 'ISTJ', 'andik', 'nobel@uii.com', '2019-10-08 23:15:34', '2019-10-08 23:15:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'admin', 'admin@uii.com', '$2y$10$9lIoeHuZI4taZ/bAbVzw3OBErJ7CIgXYQ4zTW1zAhW4bqUgsaQRVW', 'admin', 'K2gPcrox3JSvC9a1aBYTXbi8XOEAsPvLP9SxJ3m4U43ykI7JfbdkORaj072M', '2019-09-13 01:07:20', '2019-09-13 01:07:20'),
(8, 'andik', 'adik@uii.com', '$2y$10$Mi/9Cyly.l2rkywsydJhceBcl.r6huAs6eqpk1QR3iSZ10rWuX6ge', 'dosen', 'zmL1F8xwxoVstz5ivxvFO5y4lwegOzaf6CWjW8XNgLXLXjHBr7IaNIs9Uhu8', '2019-09-20 04:33:56', '2019-09-20 04:33:56'),
(12, 'wan', 'wan@uii.com', '$2y$10$K9doBurxJqr9tXf5RG59y.dt.Y0UkjaaQVTgK2BkBtXG8Re4LR0zC', 'mahasiswa', '2GJGZQGJ3zk7EmPdlLu92uQRYpah497SD9cPnqXUJ835ZJi9sW7VX4YzRJ1R', '2019-09-20 04:44:44', '2019-09-20 04:44:44'),
(19, 'nobel', 'nobel@uii.com', '$2y$10$8MuR1dNhCTkhi2Fwbmsce.8OVmQ0xEf2/z5Ux6OQq7UH6KWaRNKzu', 'mahasiswa', 'kgpi18XYzgKKSe4jy4X3IwA2Rn7T5e6wxMtGCW3uyIh95S4eMdSD4twUPYbK', '2019-10-08 23:15:34', '2019-10-08 23:15:34'),
(23, 'teduh', 'teduh@uii.com', '$2y$10$AvifwjnV6TPUOgImo4igNeK1ElWOlqniLuOfkLU5PliSmFx0l1TQe', 'dosen', 'qMYkcHrdM9kEI4tQA2ozgv5RGo2TLwPI75jyRALQZQHuwbO43azOjWDNBSHN', '2019-10-08 23:18:36', '2019-10-08 23:18:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
