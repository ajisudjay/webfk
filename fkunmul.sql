-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2023 at 08:30 AM
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
(1, 'berita pertama foto ukuran gambar', 'berita-pertama-foto-ukuran-gambar', '<p>ini isi dari berita 1</p>', '1677448717_0fb0347e0f0a56002edd.png', 'pertama', 5, '2023-02-26', 'ajisudjay', '2023-02-24'),
(2, 'Berita Kedua', NULL, '<p>ini contentnya berita kedua</p>', '1677441452_f8d53f7d2a2c66089e3f.webp', 'satu;dua', NULL, NULL, NULL, '2023-02-27'),
(4, 'berita pake swal', 'berita-pake-swal', '<p>coba coba</p>', '1677441966_2b560d2558080eea0118.png', 'coba', 0, '2023-02-26', 'ajisudjay', '2023-12-31');

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
(10, '234324', '1677162864_ddd6e79632f99e3b2598.png'),
(11, 'struktur organisasi', '1677741860_e1fbdc4b437f4954a53a.png');

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
(24, 'Tentang Kami', 2),
(25, 'Program Studi', 3),
(27, 'SDM', 4),
(28, 'Fasilitas', 5),
(29, 'Kemahasiswaan', 6),
(30, 'Penelitian & PkM', 7),
(31, 'SPMI', 8),
(32, 'Akreditasi', 9),
(33, 'Informasi', 10);

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE `submenu` (
  `id` int(100) NOT NULL,
  `submenu` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
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

INSERT INTO `submenu` (`id`, `submenu`, `slug`, `urutan`, `id_mainmenu`, `content`, `tag`, `penulis`, `timestamp`) VALUES
(30, 'Visi dan Misi', 'visi-dan-misi', 1, 24, '<h2>Visi</h2><p>\"Menjadi Fakultas Kedokteran Berstandar Internasional yang unggul di tingkat Nasional dalam pengembangan pendidikan, penelitian, pengabdian masyarakat di bidang kedokteran dan kesehatan yang bertumpu pada hutan tropis lembap (tropical rain forest) dan lingkungannya pada tahun 2034.\"</p><h2>Misi</h2><p>∼ Menyelenggarakan Pendidikan Kedokteran dan Kesehatan yang berkualitas.</p><p>∼ Menyelenggarakan Penelitian yang Berstandar Internasional dibidang Ilmu Kedokteran dan Kesehatan yang bertumpu pada hutan tropis lembap dan lingkungannya.</p><p>∼ Menyelenggarakan pengabdian masyarakat yang berorientasi pada peningkatan perilaku sehat masyarakat.</p><p>∼ Mengembangkan dan menjalin kerja sama dengan berbagai pihak untuk meningkatkan kapasitas, sarana, prasana, dan sumber daya manusia yang berkualitas.</p>', NULL, 'ajisudjay', '2023-03-02'),
(31, 'Sejarah', 'sejarah', 2, 24, '<h4><strong>Tahun Pembentukan</strong></h4><p>Pada suatu kesempatan kunjungan kerja di wilayah pedalaman dan perbatasan (pertengahan tahun 1999), Gubernur Provinsi Kalimantan Timur menghadapi suatu kenyataan bahwa pelayanan kesehatan sangat menyedihkan. Secara spontan beliau mengatakan bahwa seandainya para putra/putri Kalimantan Timur memperoleh kesempatan lebih besar untuk mengikuti pendidikan dokter, terbersit harapan bahwa kondisi pelayanan kesehatan yang sangat menyedihkan tersebut dapat diperbaiki. Keinginan gubernur yang sangat kuat ternyata juga merupakan cerminan keinginan masyarakat Kalimantan Timur, segera ditindak lanjuti dengan mengundang Fakultas Kedokteran Universitas Brawijaya Malang untuk mengadakan studi kelayakan kemungkinan pendirian dan penyelenggaraan pendidikan kedokteran di Provinsi Kalimantan Timur.</p><p>Sejak saat itu, sejalan dengan Program Prioritas Pemerintah Daerah Provinsi Kalimantan Timur untuk meningkatkan kualitas SDM Kaltim, berbagai pihak mulai dari Pemerintah Daerah Provinsi Kalimantan Timur yang akan mendukung penyelenggaraan pendidikan dokter di Samarinda ini, DPRD Prov. Kaltim, Universitas Mulawarman, Universitas Brawijaya Malang, RSUD. AW. Sjahranie Samarinda serta berbagai lapisan dan elemen masyarakat bahu membahu mempersiapkan pendirian, penyelenggaraan dan pengembangan pendidikan dokter di Kalimantan Timur. Berbagai rapat koordinasi, pertemuan informal, rapat kerja, visitasi, studi banding, konsultasi serta berbagai upaya keras lainnya telah, sedang, dan akan terus dilakukan. Bimbangan dan bantuan dari Komisi Disiplin Ilmu Kesehatan (KDIK), Direktorat Jendral Pendidikan Tinggi Depdiknas, Fakultas Kedokteran Mitra (UNIBRAW, UI, UGM, UNDIP, UNAIR, UNHAS) ikut mewarnai impian dan perjuangan masyarakat Kalimantan Timur untuk mempunyai lembaga (institusi) Pendidikan Kedokteran.</p><p>Rangkaian panjang perjuangan yang meliputi berbagai upaya dan kerja keras tersebut mengantar pada peresmian pembukaan Program Pendidikan Dokter Universitas Mulawarman (PPD-UNMUL) di Samarinda, Kalimantan Timur pada Tanggal 01 Nopember 2001 berdasarkan Surat Ijin Operasional Direktur Jenderal Pendidikan Tinggi Depdiknas Nomor 3083/D/T/2001 tanggal 25 September 2001 tentang Ijin Penyelenggaraan Program Pendidikan Dokter pada Universitas Mulawarman, dengan upacara peresmian dimulainya Pendidikan Dokter ini oleh Bapak Gubernur yang dihadiri oleh para Kepala Daerah. Mahasiswa PPD-UNMUL diutamakan berasal dari Putra-Putri Kalimantan Timur. Sistem seleksinya adalah melalui jalur PBUD (Penjaringan Bibit Unggul Daerah), testl lokal yang diselenggarakan di Universitas Mulawarman Samarinda. Dengan demikian, prioritas utama peserta didik adalah berasal dari Putra-Putri Daerah, yang nantinya akan kembali mengabdi ke daerahnya masing-masing.</p><p>Pendirian PPD-UNMUL diiringi dengan persiapan dan pengembangan tenaga pengajar yang kompeten. Hingga empat tahun setelah diresmikan, PPD-UNMUL telah mengirimkan 42 staf pengajar untuk menempuh program Magister di beberapa Universitas terkemuka dengan biaya dari APBD I, beberapa diantaranya melanjutkan hingga ke jenjang doktoral. Disamping itu, berbagai fasilitas sarana dan prasarana pembelajaran telah dibangun baik di lingkungan Kampus Unmul, maupun di lingkungan RSUD AW. Sjahranie Samarinda sebagai Rumah Sakit Pendidikan FK-UNMUL, yang hampir seluruhnya bersumber dari APBD I Provinsi Kaltim. PPD-UNMUL juga menjalin kerjasama dengan Universitas Maastricht sejak 30 September 2002 hingga sekarang. Bahkan dalam perkembangannya mahasiswa kedokteran Universitas Masstricht dikirim ke FK. Unmul untuk menimba ilmu dan pengalaman di bidang Tropical Medicine. Berbagai upaya telah dilakukan untuk memajukan FK-UNMUL, antara lain kegiatan studi banding, diskusi dengan pakar kedokteran dari UNIBRAW, UNAIR, UGM dan UNHAS. Pada tahun 2002, FK-UNMUL juga mendapat bantuan dari Bank Dunia dalam bentuk pengembangan keterampilan medik yang ditujukan untuk melatih kompetensi para calon dokter.</p><p>Pada tanggal 1 Juli 2004 Ijin PPD-UNMUL berubah menjadi Program Studi Kedokteran Umum Universitas Mulawarman (PSKU-UNMUL) sesuai ijin operasional Perpanjangan dari DIKTI Nomor 2316/D/T/2004, tanggal 1 Juli 2004 dan akhirnya pada tanggal 24 Juli 2008, PSKU-UNMUL resmi menjadi Fakultas Kedokteran Universitas Mulawarman sebagaimana ditetapkan melalui Surat Keputusan Rektor No. 315/KP/2008. Keberadaan dan fungsi lembaga pendidikan kedoteran ini merupakan awal dari perjuangan untuk mengatasi tantangan yang lebih besar. FK UNMUL ditunjukan untuk kesejahteraan bangsa Indonesia, termasuk masyarakat di wilayah Kalimantan Timur, yang diwarnai dengan semangat reformasi dan otonomi daerah. Akhirnya pada tanggal 17 Januari 2009, FK-UNMUL untuk pertamakalinya meluluskan Dokter.</p><p>&nbsp;</p><p>Sejak tahun 2001 s/d 206, kurikulum yang dipergunakan adalah kurikulum Konvensional yakni Kurikulum Inti Pendidikan Dokter Indonesia (KIPDI II) dengan masa studi 7 (tujuh) tahun dan pada tahun 2007 s/d sekarang menggunakan Kurikulum Berbasis Kompetensi dengan metode Problem Basic Learning (PBL) dengan lama kuliah 5 (lima).</p><p>&nbsp;</p><p><strong>Sejak berdiri Fakultas Kedokteran Unmul telah berganti pimpinan sebagai berikut :</strong></p><figure class=\"table\" style=\"width:100%;\"><table class=\"ck-table-resized\"><colgroup><col style=\"width:3.83%;\"><col style=\"width:41.79%;\"><col style=\"width:54.38%;\"></colgroup><tbody><tr><td>1</td><td>Program Pendidikan Dokter Universitas Mulawarman periode 2001 s/d 2004</td><td><figure class=\"table\" style=\"width:72.47%;\"><table class=\"ck-table-resized\"><colgroup><col style=\"width:47.86%;\"><col style=\"width:52.14%;\"></colgroup><tbody><tr><td>Ketua PPD-Unmul</td><td>: dr. Latief Choibar, Sp.PD</td></tr><tr><td>Pembantu Ketua 1&nbsp;</td><td>: dr. Sukartini, Sp.A</td></tr><tr><td>Pembantu Ketua&nbsp;</td><td>: dr. Emil Bachtiar Moerad, Sp.P</td></tr><tr><td>Pembantu Ketua III&nbsp;</td><td>: dr. Arie Ibrahim, Sp.BS</td></tr></tbody></table></figure></td></tr><tr><td>2</td><td>Program Studi Kedokteran Umum Universitas Mulawarman periode 2004 s/d 2008</td><td><figure class=\"table\" style=\"width:72.24%;\"><table class=\"ck-table-resized\"><colgroup><col style=\"width:48.1%;\"><col style=\"width:51.9%;\"></colgroup><tbody><tr><td>Ketua PSKU-Unmul&nbsp;</td><td>: dr. Emil Bachtiar Moerad, Sp.P</td></tr><tr><td>Wakil Ketua I&nbsp;</td><td>: dr. Syaiful Mukhtar, Sp.B-KBD</td></tr><tr><td>Wakil Ketua II&nbsp;</td><td>: dr. Abdillah Iskandar, M.Kes</td></tr><tr><td>Wakil Ketua III&nbsp;</td><td>: dr. Natanael Shem, DDSC</td></tr><tr><td>Wakil Ketua IV&nbsp;</td><td>: Dr. dr. Arie Ibrahim, Sp.BS</td></tr></tbody></table></figure></td></tr><tr><td>3</td><td>Fakultas Kedokteran Universitas Mulawarman Periode 2008 s/d 2012 dan Periode 2012 s/d 2016</td><td><figure class=\"table\" style=\"width:72.02%;\"><table class=\"ck-table-resized\"><colgroup><col style=\"width:48.39%;\"><col style=\"width:51.61%;\"></colgroup><tbody><tr><td>Dekan&nbsp;</td><td>: dr. Emil Bachtiar Moerad, Sp.P</td></tr><tr><td>Pembantu Dekan I&nbsp;</td><td>: dr. Eva Rachmi, M.Kes</td></tr><tr><td>Pembantu Dekan II&nbsp;</td><td>: dr. Abdillah Iskandar, M.Kes</td></tr><tr><td>Pembantu Dekan III&nbsp;</td><td>: dr. Arie Ibrahim, Sp.BS</td></tr><tr><td>Pembantu Dekan IV&nbsp;</td><td>: dr. Lukas D. Leatemia, M.Kes</td></tr></tbody></table></figure></td></tr><tr><td>4</td><td>Fakultas Kedokteran Universitas Mulawarman periode 2016-2020</td><td><figure class=\"table\" style=\"width:72.47%;\"><table class=\"ck-table-resized\"><colgroup><col style=\"width:47.9%;\"><col style=\"width:52.1%;\"></colgroup><tbody><tr><td>Dekan&nbsp;</td><td>: dr. Ika Fikriah, M.Kes</td></tr><tr><td>Wakil Dekan&nbsp;</td><td>: Dr. dr. Endang Sawitri, M.Kes</td></tr><tr><td>Wakil Dekan&nbsp;</td><td>: dr. Verry Asfirizal, M.Kes</td></tr></tbody></table></figure></td></tr></tbody></table></figure>', NULL, 'ajisudjay', '2023-03-02'),
(32, 'Struktur Organisasi', 'struktur-organisasi', 3, 24, '<p>STRUKTUR ORGANISASI&nbsp;</p><figure class=\"table\"><table><tbody><tr><td>DEKAN</td><td>WD1</td><td>WD2</td></tr><tr><td>---</td><td>---</td><td>---</td></tr></tbody></table></figure>', NULL, 'ajisudjay', '2023-03-02'),
(33, 'S1 - Kedokteran', 's1-kedokteran', 1, 25, '<h3>Deskripsi</h3><p>Program Studi Kedokteran berdiri sejak tahun 2001 berdasarkan SK Pendirian : SK Dirjen DIKTI No. 3083/D/T/2001. Sampai saat ini Program Studi Kedokteran FK Unmul masih menjadi satu-satunya Program Studi Kedokteran di Kalimantan Timur. Saat ini Program Studi Kedokteran telah terakreditasi A berdasarkan SK LAM PT-Kes No. 003/LAM PT-Kes/Akr.Bd/Sar/X/2019 tanggal 26 Oktober 2019.<br><br>Profil Lulusan Program Studi Kedokteran FK Unmul sebagai berikut:<br><br>Calon Praktisi/Klinisi<br>Sarjana kedokteran yang menguasai ilmu kedokteran dengan unggulan kedokteran tropis yang menjadi dasar pelayanan Kesehatan kepada masyarakat disertai keimanan dan ketakwaan pada Tuhan YME, pribadi berkarakter, akhlak mulia, beretika, berbudi pekerti, dan menjunjung tinggi moralitas, sebagai pembelajar sepanjang hayat, bertanggungjawab sosial, cinta tanah air, dan berkomitmen untuk menyehatkan kehidupan masyarakat<br><br>Calon Pendidik/Peneliti<br>Sarjana kedokteran yang berpikir kritis dan kreatif dan memiliki kemampuan literasi di bidang sains, finansial, sosial budaya, serta teknologi informasi dalam menghadapi permasalahan kesehatan dan dapat bersaing di era global dan mampu terlibat dalam penyelenggaraan pendidikan Kesehatan.<br><br>Agen Perubahan dan Pembangunan Sosial<br>Sarjana kedokteran sebagai agen perubah dan penggerak masyarakat berdasarkan etika kedokteran dengan berperan sebagai profesional, komunikator, kolaborator, advokator, manajer, pemimpin, untuk berkontribusi dalam meningkatkan derajat kesehatan masyarakat.</p><h3>Visi</h3><blockquote><p>“Menjadi Program Studi berstandar Internasional dengan keunggulan kedokteran tropis pada tahun 2034”</p></blockquote><h3>Misi</h3><blockquote><p>“Menyelenggarakan pendidikan kedokteran yang berkualitas untuk menghasilkan lulusan yang profesional”</p></blockquote><blockquote><p>“Melaksanakan penelitian yang berkualitas Internasional dengan keunggulan kedokteran tropis”</p></blockquote><blockquote><p>“Melaksanakan pengabdian kepada masyarakat dengan keunggulan kedokteran tropis”</p></blockquote><h3>Penjelasan Visi Misi</h3><p>Berkualitas:<br>Pada bidang pendidikan, bidang kedokteran tropis akan menjadi unggulan prodi kedokteran dan profesi dokter. Pengembangan keilmuan kedokteran berbasis hasil penelitian dan pengabdian kepada masyarakat<br><br>Profesional:<br>adalah orang yang memiliki profesionalitas yang luhur meliputi (SKDI 2012): berketuhanan Yang Maha Esa, bermoral, beretika dan berdisiplin sadar dan taat hukum berwawasan sosial budaya berperilaku profesional</p><h3>Tujuan</h3><blockquote><p>“Tercapainya hasil pengembangan keilmuan Program Studi di bidang kedokteran untuk menghasilkan lulusan sarjana kedokteran yang profesional ”</p></blockquote><blockquote><p>“Tercapainya hasil penyelenggaraan program studi di bidang penelitian berupa karya ilmiah dan produk inovasi dengan keunggulan kedokteran tropis yang berkualitas internasional ”</p></blockquote><blockquote><p>“Tercapainya hasil penyelenggaraan program studi di bidang pengabdian kepada masyarakat di bidang kedokteran berupa karya ilmiah dan produk inovasi ”</p></blockquote><h3>Penelitian dan Pengabdian Masyarakat</h3><p>Penelitian dan Publikasi:<br><a href=\"http://e-journals.unmul.ac.id/index.php/JKM\">Jurnal Kedokteran Mulawarman</a> <a href=\"http://e-journals.unmul.ac.id/index.php/MOLAR\">Mulawarman Dental Jurnal</a> <a href=\"http://e-journals.unmul.ac.id/index.php/JKPBK\">Jurnal Kesehatan Pasak Bumi Kalimantan</a></p>', NULL, 'ajisudjay', '2023-03-01'),
(34, 'Dosen', 'dosen', 1, 27, '<p>INI SDM DOSEN</p>', NULL, 'ajisudjay', '2023-03-01'),
(35, 'PENERIMAAN MAHASISWA BARU', 'penerimaan-mahasiswa-baru', 1, 33, '<p>INI PMB</p><p>&nbsp;</p>', NULL, 'ajisudjay', '2023-02-27'),
(36, 'Organisasi Mahasiswa', 'organisasi-mahasiswa', 2, 29, '<p>ini halaman ormawa kemahasiswaan</p>', NULL, 'ajisudjay', '2023-03-01'),
(37, 'Profesi Dokter', 'profesi-dokter', 3, 25, '<p>INI HALAMAN PRODI - PROFESI DOKTER</p>', NULL, 'ajisudjay', '2023-03-01'),
(38, 'SP - Spesialis Bedah', 'sp-spesialis-bedah', 5, 25, '<p>INI HALAMAN PRODI - SPESIALIS BEDAH</p>', NULL, 'ajisudjay', '2023-03-01'),
(39, 'S1 - Kedokteran Gigi', 's1-kedokteran-gigi', 2, 25, '<p>INI HALAMAN PRODI - KEDOKTERAN GIGI</p>', NULL, 'ajisudjay', '2023-03-01'),
(40, 'Profesi Dokter Gigi', 'profesi-dokter-gigi', 4, 25, '<p>INI HALAMAN PRODI - PROFESI KEDOKTERAN GIGI</p>', NULL, 'ajisudjay', '2023-03-01'),
(41, 'D3 - Keperawatan', 'd3-keperawatan', 6, 25, '<p>INI HALAMAN PRODI - Keperawatan</p>', NULL, 'ajisudjay', '2023-03-01'),
(42, 'Tenaga Kependidikan', 'tenaga-kependidikan', 2, 27, '<p>INI HALAMAN SDM - Tenaga Kependidikan</p>', NULL, 'ajisudjay', '2023-03-01'),
(44, 'Alumni', 'alumni', 1, 29, '<p>INI HALAMAN KEMAHASISWAAN - ALUMNI</p>', NULL, 'ajisudjay', '2023-03-01'),
(45, 'Bimbingan Konseling (BK)', 'bimbingan-konseling-bk-', 3, 29, '<p>INI HALAMAN KEMAHASISWAAN - BK</p>', NULL, 'ajisudjay', '2023-03-01'),
(46, 'Laboratorium', 'laboratorium', 1, 28, '<p>INI HALAMAN FASILITAS - &nbsp;LAB</p>', NULL, 'ajisudjay', '2023-03-01'),
(47, 'Perpustakaan', 'perpustakaan', 2, 28, '<p>INI HALAMAN FASILITAS - Perpustakaan</p>', NULL, 'ajisudjay', '2023-03-01'),
(48, 'Download', 'download', 2, 33, '<p>INI HALAMAN INFORMASI - DOWNLOAD</p>', NULL, 'ajisudjay', '2023-03-01');

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `submenu`
--
ALTER TABLE `submenu`
  ADD CONSTRAINT `submenu_ibfk_1` FOREIGN KEY (`id_mainmenu`) REFERENCES `mainmenu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
