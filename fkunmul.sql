-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2023 at 08:39 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fkunmul`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(100) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `banner` varchar(255) NOT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `dilihat` int(100) DEFAULT NULL,
  `timestamp` date DEFAULT NULL,
  `penulis` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `slug`, `isi`, `banner`, `tag`, `dilihat`, `timestamp`, `penulis`, `tanggal`) VALUES
(1, 'berita pertama', 'berita-pertama', 'ini isi dari berita 1', 'banner1.jpg', 'pertama', 5, '2023-02-24', 'ajisudjay', '2023-02-24');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `nama`, `gambar`) VALUES
(10, '234324', '1677162864_ddd6e79632f99e3b2598.png');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id` int(100) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `area` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id`, `jenis`, `area`) VALUES
(1, 'BKB', '1234567890-987654321'),
(4, 'PIK-R', '000000000-00000000'),
(5, 'PIK-B', '111111111111-222222222222');

-- --------------------------------------------------------

--
-- Table structure for table `kelompok`
--

CREATE TABLE `kelompok` (
  `id` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `registrasi` varchar(255) NOT NULL,
  `alamat` text DEFAULT NULL,
  `ketua` varchar(255) DEFAULT NULL,
  `jumlah_anggota` int(100) DEFAULT NULL,
  `sudah_pelatihan` int(100) DEFAULT NULL,
  `belum_pelatihan` int(100) DEFAULT NULL,
  `rknf` varchar(255) DEFAULT NULL,
  `parsif` varchar(255) DEFAULT NULL,
  `tanggal_sk` date DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `koordinat` text DEFAULT NULL,
  `jenis` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelompok`
--

INSERT INTO `kelompok` (`id`, `nama`, `registrasi`, `alamat`, `ketua`, `jumlah_anggota`, `sudah_pelatihan`, `belum_pelatihan`, `rknf`, `parsif`, `tanggal_sk`, `keterangan`, `koordinat`, `jenis`) VALUES
(16, 'sudah fix0', '00', 'dijalanx', 'aku sendirix', 100, 50, 50, 'Rknfinyax', 'Parsifnyax', '2000-01-01', 'ket0', '333-33330', 5),
(17, 'sdfsdfs', 'sdfsdf', 'jhdjkhfjk', 'jkhjkhjk', 8, 67, 8, 'hjkhjk', 'jhkjkhkj', '2022-11-30', 'e', '2121', 4);

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id` int(100) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `urutan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id`, `judul`, `isi`, `urutan`) VALUES
(1, 'Kontak', 'Kontak Kami\r\nEmail : @gmail.com\r\nTelepon : 08252525\r\n', 6),
(2, 'Pedoman Media Siber', 'Kemerdekaan berpendapat, kemerdekaan berekspresi, dan kemerdekaan pers adalah hak asasi manusia yang dilindungi Pancasila, Undang-Undang Dasar 1945, dan Deklarasi Universal Hak Asasi Manusia PBB.\r\n\r\nKeberadaan media siber di Indonesia juga merupakan bagian dari kemerdekaan berpendapat, kemerdekaan berekspresi, dan kemerdekaan pers.\r\n\r\nMedia siber memiliki karakter khusus sehingga memerlukan pedoman agar pengelolaannya dapat dilaksanakan secara profesional, memenuhi fungsi, hak, dan kewajibannya sesuai Undang-Undang Nomor 40 Tahun 1999 tentang Pers dan Kode Etik Jurnalistik.\r\n\r\nUntuk itu Dewan Persbersama organisasi pers, pengelola media siber, dan masyarakat menyusun Pedoman', 5),
(3, 'Kode Etik', 'Kemerdekaan berpendapat, berekspresi, dan pers adalah hak asasi manusia yang dilindungi Pancasila, Undang-Undang Dasar 1945, dan Deklarasi Universal Hak Asasi Manusia PBB.\r\n\r\nKemerdekaan pers adalah sarana masyarakat untuk memperoleh informasi dan berkomunikasi, guna memenuhi kebutuhan hakiki dan meningkatkan kualitas kehidupan manusia.\r\n\r\nDalam mewujudkan kemerdekaan pers itu, wartawan Indonesia juga menyadari adanya kepentingan bangsa, tanggung jawab sosial, keberagaman masyarakat, dan norma-norma agama.\r\n\r\nDalam melaksanakan fungsi, hak, kewajiban dan peranannya, pers menghormati hak asasi setiap orang, karena itu pers dituntut profesional dan terbuka untuk dikontrol oleh masyarakat.\r\n\r\nUntuk menjamin kemerdekaan pers dan memenuhi hak publik untuk memperoleh informasi yang benar, wartawan Indonesia memerlukan landasan moral dan etika profesi sebagai pedoman operasional dalam menjaga kepercayaan publik dan menegakkan integritas serta profesionalisme.', 3),
(4, 'Disclaimer', 'Informasi yang terdapat dalam website ini adalah untuk tujuan umum saja. Informasi ini disediakan oleh Liputan6.com dan kami senantiasa berusaha untuk menjaga informasi yang aktual dan benar.\r\n\r\nKami tidak membuat pernyataan atau jaminan apapun, tersurat maupun tersirat, tentang akurasi kelengkapan, kesesuaian, atau ketersediaan ke situs web atau informasi, produk, jasa, atau gambar terkait yang terdapat pada website ini untuk tujuan apapun.\r\n\r\nSetiap ketergantungan yang anda tempatkan pada informasi tersebut adalah risiko anda sendiri.\r\n\r\nDalam hal apapun kami tidak bertanggung jawab atas kerugian atau kerusakan termasuk tanpa batasan, kerugian tidak langsung atau kerusakan apapun yang timbul dari hilangnya data atau keuntungan yang timbul dari penggunaan website ini.', 2),
(5, 'Privacy Policy', 'Who we are\r\nOur website address is: http://demo.idtheme.com/bloggingpro.\r\n\r\nWhat personal data we collect and why we collect it\r\nComments\r\nWhen visitors leave comments on the site we collect the data shown in the comments form, and also the visitor’s IP address and browser user agent string to help spam detection.\r\n\r\nAn anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.\r\n\r\nMedia\r\nIf you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.\r\n\r\nContact forms\r\nCookies\r\nIf you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.\r\n\r\nIf you have an account and you log in to this site, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.\r\n\r\nWhen you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select “Remember Me”, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.\r\n\r\nIf you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.\r\n\r\nEmbedded content from other websites\r\nArticles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.\r\n\r\nThese websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.\r\n\r\nAnalytics\r\nWho we share your data with\r\nHow long we retain your data\r\nIf you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.\r\n\r\nFor users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.\r\n\r\nWhat rights you have over your data\r\nIf you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.\r\n\r\nWhere we send your data\r\nVisitor comments may be checked through an automated spam detection service.', 4),
(9, 'Tentang Kami', 'Divisi.id (Detail Inovatif dan Berintegritas)\r\nLaman Berita terupdate dan teraktual', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mainmenu`
--

CREATE TABLE `mainmenu` (
  `id` int(100) NOT NULL,
  `mainmenu` varchar(255) NOT NULL,
  `urutan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mainmenu`
--

INSERT INTO `mainmenu` (`id`, `mainmenu`, `urutan`) VALUES
(2, 'SDM', 3),
(3, 'Program Studi', 2),
(4, 'Tentang Kami', 4),
(6, 'Laboratorium', 6);

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE `submenu` (
  `id` int(100) NOT NULL,
  `submenu` varchar(255) NOT NULL,
  `urutan` int(100) NOT NULL,
  `id_mainmenu` int(100) NOT NULL,
  `content` text NOT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `penulis` varchar(255) NOT NULL,
  `timestamp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`id`, `submenu`, `urutan`, `id_mainmenu`, `content`, `tag`, `penulis`, `timestamp`) VALUES
(27, 'ini baru diganti', 2, 2, '<p>suda aman</p>', '', 'ajisudjay', '2023-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `nama`, `level`, `file`) VALUES
('ajisudjay', 'MTIzNDU2', 'Aji Sudjay', 'Superadmin', '1677191261_4359d8c87f13ad17ac39.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelompok`
--
ALTER TABLE `kelompok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mainmenu`
--
ALTER TABLE `mainmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mainmenu` (`id_mainmenu`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kelompok`
--
ALTER TABLE `kelompok`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mainmenu`
--
ALTER TABLE `mainmenu`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
