-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Mar 2023 pada 00.26
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

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
-- Struktur dari tabel `berita`
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
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `slug`, `isi`, `banner`, `tag`, `dilihat`, `timestamp`, `penulis`, `tanggal`) VALUES
(4, 'berita pake swal', 'berita-pake-swal', '<p>coba coba</p>', '1677441966_2b560d2558080eea0118.png', 'coba', 0, '2023-02-26', 'ajisudjay', '2023-12-31'),
(5, 'berita 2', 'berita-2', '<p>sdfsfsd123123123123</p>\r\n', '1678158331_6c5fcda291ed0b544d62.jpg', 'dsfsfsd', 0, '2023-03-07', 'ajisudjay', '2023-12-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `bidang` varchar(255) NOT NULL,
  `akun` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `pendidikan` text NOT NULL,
  `id_ps` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `nip`, `jabatan`, `bidang`, `akun`, `gambar`, `pendidikan`, `id_ps`) VALUES
(2, 'aaaaaaaaaaaaa', '2222222222222222', 'aaaa', 'asdadads', '<p>adadad</p>\r\n', '1678226363_5e950c724e5ebfddb82f.png', '<p>sadadad</p>\r\n', 1),
(3, 'ddddddddddddddddd3', '11111111111111111333333', 'dfffffffffffffff3', 'ggggggggggggggggg3', '<p>fghfhhfhfg3</p>\r\n', '1678226499_bdc957e6b0a217b6b820.jpeg', '<p>fghfhfhfg3</p>\r\n', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `nama`, `gambar`) VALUES
(10, '234324', '1677162864_ddd6e79632f99e3b2598.png'),
(11, 'struktur organisasi', '1677741860_e1fbdc4b437f4954a53a.png'),
(12, 'profil', '1677765514_6966748c1a1d0dcc5d30.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id` int(100) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `area` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id`, `jenis`, `area`) VALUES
(1, 'BKB', '1234567890-987654321'),
(4, 'PIK-R', '000000000-00000000'),
(5, 'PIK-B', '111111111111-222222222222');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelompok`
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
-- Dumping data untuk tabel `kelompok`
--

INSERT INTO `kelompok` (`id`, `nama`, `registrasi`, `alamat`, `ketua`, `jumlah_anggota`, `sudah_pelatihan`, `belum_pelatihan`, `rknf`, `parsif`, `tanggal_sk`, `keterangan`, `koordinat`, `jenis`) VALUES
(16, 'sudah fix0', '00', 'dijalanx', 'aku sendirix', 100, 50, 50, 'Rknfinyax', 'Parsifnyax', '2000-01-01', 'ket0', '333-33330', 5),
(17, 'sdfsdfs', 'sdfsdf', 'jhdjkhfjk', 'jkhjkhjk', 8, 67, 8, 'hjkhjk', 'jhkjkhkj', '2022-11-30', 'e', '2121', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id` int(100) NOT NULL,
  `visi` varchar(255) NOT NULL,
  `misi` text NOT NULL,
  `ig` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `yt` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `telepon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `konfigurasi`
--

INSERT INTO `konfigurasi` (`id`, `visi`, `misi`, `ig`, `alamat`, `email`, `yt`, `fb`, `telepon`) VALUES
(1, 'Menjadi Fakultas Kedokteran Berstandar Internasional yang unggul di tingkat Nasional dalam pengembangan pendidikan, penelitian, pengabdian masyarakat di bidang kedokteran dan kesehatan yang bertumpu pada hutan tropis lembap (tropical rain forest) dan ling', '1. Menyelenggarakan Pendidikan Kedokteran dan Kesehatan yang berkualitas. \r\n2. Menyelenggarakan Penelitian yang Berstandar Internasional dibidang Ilmu Kedokteran dan Kesehatan yang bertumpu pada hutan tropis lembap dan lingkungannya.\r\n3. Menyelenggarakan pengabdian masyarakat yang berorientasi pada peningkatan perilaku sehat masyarakat.\r\n4. Mengembangkan dan menjalin kerja sama dengan berbagai pihak untuk meningkatkan kapasitas, sarana, prasana, dan sumber daya manusia yang berkualitas.', '@instagram', 'Jl. Krayan, Gn. Kelua, Kec. Samarinda Utara, Kota Samarinda, Kalimantan Timur 75119', 'office@fk.unmul.ac.id', '@youtube', '@fb', '(0541) 748581');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laboratorium`
--

CREATE TABLE `laboratorium` (
  `id` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `laboratorium`
--

INSERT INTO `laboratorium` (`id`, `nama`, `gambar`, `content`) VALUES
(3, 'lab 1', '1678151759_70b42e0d00f4dd837739.png', '<p>sddasda</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mainmenu`
--

CREATE TABLE `mainmenu` (
  `id` int(100) NOT NULL,
  `mainmenu` varchar(255) NOT NULL,
  `urutan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mainmenu`
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
-- Struktur dari tabel `mitra`
--

CREATE TABLE `mitra` (
  `id` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pejabat`
--

CREATE TABLE `pejabat` (
  `id` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `urutan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pejabat`
--

INSERT INTO `pejabat` (`id`, `nama`, `jabatan`, `gambar`, `urutan`) VALUES
(3, 'DR. dr. Fulan., MARS', 'Dekan', '1678156728_f59cac2f1978cc0510ca.jpg', 1),
(4, 'DR. dr. Fulanah., MARS', 'Wakil Dekan 1', '1678156768_08663ca07234222794b1.jpg', 2),
(5, 'DR. dr. Fulan.', 'Wakil Dekan II', '1678156799_057f3bd42205cd61dcb6.jpg', 3),
(6, 'DR. dr. Fulan., M.Kes', 'Koor. Prodi S1-Kedokteran', '1678156846_82b5b4cd30936e4f37f4.jpg', 4),
(7, 'DR. dr. Fulanah., M.Kes', 'Koor. Prodi S1-Kedokteran Gigi', '1678157067_a4d04a84a9db24258aa6.jpg', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id` int(100) NOT NULL,
  `prodi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id`, `prodi`) VALUES
(1, 'S1 - Kedokteran'),
(2, 'S1 - Kedokteran Gigi'),
(3, 'Profesi Dokter'),
(4, 'Profesi Dokter'),
(5, 'Spesialis Bedah'),
(6, 'D3 - Keperawatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slideshow`
--

CREATE TABLE `slideshow` (
  `id` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `submenu`
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
-- Dumping data untuk tabel `submenu`
--

INSERT INTO `submenu` (`id`, `submenu`, `slug`, `urutan`, `id_mainmenu`, `content`, `tag`, `penulis`, `timestamp`) VALUES
(30, 'Visi dan Misi', 'visi-dan-misi', 1, 24, '<h2>Visi</h2>\r\n\r\n<p>&quot;Menjadi Fakultas Kedokteran Berstandar Internasional yang unggul di tingkat Nasional dalam pengembangan pendidikan, penelitian, pengabdian masyarakat di bidang kedokteran dan kesehatan yang bertumpu pada hutan tropis lembap (tropical rain forest) dan lingkungannya pada tahun 2034.&quot;</p>\r\n\r\n<h2>Misi</h2>\r\n\r\n<p>1. Menyelenggarakan Pendidikan Kedokteran dan Kesehatan yang berkualitas.</p>\r\n\r\n<p>2. Menyelenggarakan Penelitian yang Berstandar Internasional dibidang Ilmu Kedokteran dan Kesehatan yang bertumpu pada hutan tropis lembap dan lingkungannya.</p>\r\n\r\n<p>3. Menyelenggarakan pengabdian masyarakat yang berorientasi pada peningkatan perilaku sehat masyarakat.</p>\r\n\r\n<p>4. Mengembangkan dan menjalin kerja sama dengan berbagai pihak untuk meningkatkan kapasitas, sarana, prasana, dan sumber daya manusia yang berkualitas.</p>\r\n', NULL, 'ajisudjay', '2023-03-07'),
(31, 'Sejarah', 'sejarah', 2, 24, '<h4><strong>Tahun Pembentukan</strong></h4><p>Pada suatu kesempatan kunjungan kerja di wilayah pedalaman dan perbatasan (pertengahan tahun 1999), Gubernur Provinsi Kalimantan Timur menghadapi suatu kenyataan bahwa pelayanan kesehatan sangat menyedihkan. Secara spontan beliau mengatakan bahwa seandainya para putra/putri Kalimantan Timur memperoleh kesempatan lebih besar untuk mengikuti pendidikan dokter, terbersit harapan bahwa kondisi pelayanan kesehatan yang sangat menyedihkan tersebut dapat diperbaiki. Keinginan gubernur yang sangat kuat ternyata juga merupakan cerminan keinginan masyarakat Kalimantan Timur, segera ditindak lanjuti dengan mengundang Fakultas Kedokteran Universitas Brawijaya Malang untuk mengadakan studi kelayakan kemungkinan pendirian dan penyelenggaraan pendidikan kedokteran di Provinsi Kalimantan Timur.</p><p>Sejak saat itu, sejalan dengan Program Prioritas Pemerintah Daerah Provinsi Kalimantan Timur untuk meningkatkan kualitas SDM Kaltim, berbagai pihak mulai dari Pemerintah Daerah Provinsi Kalimantan Timur yang akan mendukung penyelenggaraan pendidikan dokter di Samarinda ini, DPRD Prov. Kaltim, Universitas Mulawarman, Universitas Brawijaya Malang, RSUD. AW. Sjahranie Samarinda serta berbagai lapisan dan elemen masyarakat bahu membahu mempersiapkan pendirian, penyelenggaraan dan pengembangan pendidikan dokter di Kalimantan Timur. Berbagai rapat koordinasi, pertemuan informal, rapat kerja, visitasi, studi banding, konsultasi serta berbagai upaya keras lainnya telah, sedang, dan akan terus dilakukan. Bimbangan dan bantuan dari Komisi Disiplin Ilmu Kesehatan (KDIK), Direktorat Jendral Pendidikan Tinggi Depdiknas, Fakultas Kedokteran Mitra (UNIBRAW, UI, UGM, UNDIP, UNAIR, UNHAS) ikut mewarnai impian dan perjuangan masyarakat Kalimantan Timur untuk mempunyai lembaga (institusi) Pendidikan Kedokteran.</p><p>Rangkaian panjang perjuangan yang meliputi berbagai upaya dan kerja keras tersebut mengantar pada peresmian pembukaan Program Pendidikan Dokter Universitas Mulawarman (PPD-UNMUL) di Samarinda, Kalimantan Timur pada Tanggal 01 Nopember 2001 berdasarkan Surat Ijin Operasional Direktur Jenderal Pendidikan Tinggi Depdiknas Nomor 3083/D/T/2001 tanggal 25 September 2001 tentang Ijin Penyelenggaraan Program Pendidikan Dokter pada Universitas Mulawarman, dengan upacara peresmian dimulainya Pendidikan Dokter ini oleh Bapak Gubernur yang dihadiri oleh para Kepala Daerah. Mahasiswa PPD-UNMUL diutamakan berasal dari Putra-Putri Kalimantan Timur. Sistem seleksinya adalah melalui jalur PBUD (Penjaringan Bibit Unggul Daerah), testl lokal yang diselenggarakan di Universitas Mulawarman Samarinda. Dengan demikian, prioritas utama peserta didik adalah berasal dari Putra-Putri Daerah, yang nantinya akan kembali mengabdi ke daerahnya masing-masing.</p><p>Pendirian PPD-UNMUL diiringi dengan persiapan dan pengembangan tenaga pengajar yang kompeten. Hingga empat tahun setelah diresmikan, PPD-UNMUL telah mengirimkan 42 staf pengajar untuk menempuh program Magister di beberapa Universitas terkemuka dengan biaya dari APBD I, beberapa diantaranya melanjutkan hingga ke jenjang doktoral. Disamping itu, berbagai fasilitas sarana dan prasarana pembelajaran telah dibangun baik di lingkungan Kampus Unmul, maupun di lingkungan RSUD AW. Sjahranie Samarinda sebagai Rumah Sakit Pendidikan FK-UNMUL, yang hampir seluruhnya bersumber dari APBD I Provinsi Kaltim. PPD-UNMUL juga menjalin kerjasama dengan Universitas Maastricht sejak 30 September 2002 hingga sekarang. Bahkan dalam perkembangannya mahasiswa kedokteran Universitas Masstricht dikirim ke FK. Unmul untuk menimba ilmu dan pengalaman di bidang Tropical Medicine. Berbagai upaya telah dilakukan untuk memajukan FK-UNMUL, antara lain kegiatan studi banding, diskusi dengan pakar kedokteran dari UNIBRAW, UNAIR, UGM dan UNHAS. Pada tahun 2002, FK-UNMUL juga mendapat bantuan dari Bank Dunia dalam bentuk pengembangan keterampilan medik yang ditujukan untuk melatih kompetensi para calon dokter.</p><p>Pada tanggal 1 Juli 2004 Ijin PPD-UNMUL berubah menjadi Program Studi Kedokteran Umum Universitas Mulawarman (PSKU-UNMUL) sesuai ijin operasional Perpanjangan dari DIKTI Nomor 2316/D/T/2004, tanggal 1 Juli 2004 dan akhirnya pada tanggal 24 Juli 2008, PSKU-UNMUL resmi menjadi Fakultas Kedokteran Universitas Mulawarman sebagaimana ditetapkan melalui Surat Keputusan Rektor No. 315/KP/2008. Keberadaan dan fungsi lembaga pendidikan kedoteran ini merupakan awal dari perjuangan untuk mengatasi tantangan yang lebih besar. FK UNMUL ditunjukan untuk kesejahteraan bangsa Indonesia, termasuk masyarakat di wilayah Kalimantan Timur, yang diwarnai dengan semangat reformasi dan otonomi daerah. Akhirnya pada tanggal 17 Januari 2009, FK-UNMUL untuk pertamakalinya meluluskan Dokter.</p><p>&nbsp;</p><p>Sejak tahun 2001 s/d 206, kurikulum yang dipergunakan adalah kurikulum Konvensional yakni Kurikulum Inti Pendidikan Dokter Indonesia (KIPDI II) dengan masa studi 7 (tujuh) tahun dan pada tahun 2007 s/d sekarang menggunakan Kurikulum Berbasis Kompetensi dengan metode Problem Basic Learning (PBL) dengan lama kuliah 5 (lima).</p><p>&nbsp;</p><p><strong>Sejak berdiri Fakultas Kedokteran Unmul telah berganti pimpinan sebagai berikut :</strong></p><figure class=\"table\" style=\"width:100%;\"><table class=\"ck-table-resized\"><colgroup><col style=\"width:3.83%;\"><col style=\"width:41.79%;\"><col style=\"width:54.38%;\"></colgroup><tbody><tr><td>1</td><td>Program Pendidikan Dokter Universitas Mulawarman periode 2001 s/d 2004</td><td><figure class=\"table\" style=\"width:72.47%;\"><table class=\"ck-table-resized\"><colgroup><col style=\"width:47.86%;\"><col style=\"width:52.14%;\"></colgroup><tbody><tr><td>Ketua PPD-Unmul</td><td>: dr. Latief Choibar, Sp.PD</td></tr><tr><td>Pembantu Ketua 1&nbsp;</td><td>: dr. Sukartini, Sp.A</td></tr><tr><td>Pembantu Ketua&nbsp;</td><td>: dr. Emil Bachtiar Moerad, Sp.P</td></tr><tr><td>Pembantu Ketua III&nbsp;</td><td>: dr. Arie Ibrahim, Sp.BS</td></tr></tbody></table></figure></td></tr><tr><td>2</td><td>Program Studi Kedokteran Umum Universitas Mulawarman periode 2004 s/d 2008</td><td><figure class=\"table\" style=\"width:72.24%;\"><table class=\"ck-table-resized\"><colgroup><col style=\"width:48.1%;\"><col style=\"width:51.9%;\"></colgroup><tbody><tr><td>Ketua PSKU-Unmul&nbsp;</td><td>: dr. Emil Bachtiar Moerad, Sp.P</td></tr><tr><td>Wakil Ketua I&nbsp;</td><td>: dr. Syaiful Mukhtar, Sp.B-KBD</td></tr><tr><td>Wakil Ketua II&nbsp;</td><td>: dr. Abdillah Iskandar, M.Kes</td></tr><tr><td>Wakil Ketua III&nbsp;</td><td>: dr. Natanael Shem, DDSC</td></tr><tr><td>Wakil Ketua IV&nbsp;</td><td>: Dr. dr. Arie Ibrahim, Sp.BS</td></tr></tbody></table></figure></td></tr><tr><td>3</td><td>Fakultas Kedokteran Universitas Mulawarman Periode 2008 s/d 2012 dan Periode 2012 s/d 2016</td><td><figure class=\"table\" style=\"width:72.02%;\"><table class=\"ck-table-resized\"><colgroup><col style=\"width:48.39%;\"><col style=\"width:51.61%;\"></colgroup><tbody><tr><td>Dekan&nbsp;</td><td>: dr. Emil Bachtiar Moerad, Sp.P</td></tr><tr><td>Pembantu Dekan I&nbsp;</td><td>: dr. Eva Rachmi, M.Kes</td></tr><tr><td>Pembantu Dekan II&nbsp;</td><td>: dr. Abdillah Iskandar, M.Kes</td></tr><tr><td>Pembantu Dekan III&nbsp;</td><td>: dr. Arie Ibrahim, Sp.BS</td></tr><tr><td>Pembantu Dekan IV&nbsp;</td><td>: dr. Lukas D. Leatemia, M.Kes</td></tr></tbody></table></figure></td></tr><tr><td>4</td><td>Fakultas Kedokteran Universitas Mulawarman periode 2016-2020</td><td><figure class=\"table\" style=\"width:72.47%;\"><table class=\"ck-table-resized\"><colgroup><col style=\"width:47.9%;\"><col style=\"width:52.1%;\"></colgroup><tbody><tr><td>Dekan&nbsp;</td><td>: dr. Ika Fikriah, M.Kes</td></tr><tr><td>Wakil Dekan&nbsp;</td><td>: Dr. dr. Endang Sawitri, M.Kes</td></tr><tr><td>Wakil Dekan&nbsp;</td><td>: dr. Verry Asfirizal, M.Kes</td></tr></tbody></table></figure></td></tr></tbody></table></figure>', NULL, 'ajisudjay', '2023-03-02'),
(33, 'S1 - Kedokteran', 's1-kedokteran', 1, 25, '<h3>Deskripsi</h3><p>Program Studi Kedokteran berdiri sejak tahun 2001 berdasarkan SK Pendirian : SK Dirjen DIKTI No. 3083/D/T/2001. Sampai saat ini Program Studi Kedokteran FK Unmul masih menjadi satu-satunya Program Studi Kedokteran di Kalimantan Timur. Saat ini Program Studi Kedokteran telah terakreditasi A berdasarkan SK LAM PT-Kes No. 003/LAM PT-Kes/Akr.Bd/Sar/X/2019 tanggal 26 Oktober 2019.<br><br>Profil Lulusan Program Studi Kedokteran FK Unmul sebagai berikut:<br><br>Calon Praktisi/Klinisi<br>Sarjana kedokteran yang menguasai ilmu kedokteran dengan unggulan kedokteran tropis yang menjadi dasar pelayanan Kesehatan kepada masyarakat disertai keimanan dan ketakwaan pada Tuhan YME, pribadi berkarakter, akhlak mulia, beretika, berbudi pekerti, dan menjunjung tinggi moralitas, sebagai pembelajar sepanjang hayat, bertanggungjawab sosial, cinta tanah air, dan berkomitmen untuk menyehatkan kehidupan masyarakat<br><br>Calon Pendidik/Peneliti<br>Sarjana kedokteran yang berpikir kritis dan kreatif dan memiliki kemampuan literasi di bidang sains, finansial, sosial budaya, serta teknologi informasi dalam menghadapi permasalahan kesehatan dan dapat bersaing di era global dan mampu terlibat dalam penyelenggaraan pendidikan Kesehatan.<br><br>Agen Perubahan dan Pembangunan Sosial<br>Sarjana kedokteran sebagai agen perubah dan penggerak masyarakat berdasarkan etika kedokteran dengan berperan sebagai profesional, komunikator, kolaborator, advokator, manajer, pemimpin, untuk berkontribusi dalam meningkatkan derajat kesehatan masyarakat.</p><p>&nbsp;</p><h3>Visi</h3><blockquote><p>“Menjadi Program Studi berstandar Internasional dengan keunggulan kedokteran tropis pada tahun 2034”</p></blockquote><h3>Misi</h3><blockquote><p>“1. Menyelenggarakan pendidikan kedokteran yang berkualitas untuk menghasilkan lulusan yang profesional”</p><p>“2. Melaksanakan penelitian yang berkualitas Internasional dengan keunggulan kedokteran tropis”</p><p>“3. Melaksanakan pengabdian kepada masyarakat dengan keunggulan kedokteran tropis”</p></blockquote><h3>Penjelasan Visi Misi</h3><p>Berkualitas:<br>Pada bidang pendidikan, bidang kedokteran tropis akan menjadi unggulan prodi kedokteran dan profesi dokter. Pengembangan keilmuan kedokteran berbasis hasil penelitian dan pengabdian kepada masyarakat<br><br>Profesional:<br>adalah orang yang memiliki profesionalitas yang luhur meliputi (SKDI 2012): berketuhanan Yang Maha Esa, bermoral, beretika dan berdisiplin sadar dan taat hukum berwawasan sosial budaya berperilaku profesional</p><p>&nbsp;</p><h3>Tujuan</h3><blockquote><p>“1. Tercapainya hasil pengembangan keilmuan Program Studi di bidang kedokteran untuk menghasilkan lulusan sarjana kedokteran yang profesional ”</p><p>“2. Tercapainya hasil penyelenggaraan program studi di bidang penelitian berupa karya ilmiah dan produk inovasi dengan keunggulan kedokteran tropis yang berkualitas internasional ”</p><p>“3. Tercapainya hasil penyelenggaraan program studi di bidang pengabdian kepada masyarakat di bidang kedokteran berupa karya ilmiah dan produk inovasi ”</p></blockquote><h3>&nbsp;</h3><h3>Penelitian dan Pengabdian Masyarakat</h3><ul><li><a href=\"http://e-journals.unmul.ac.id/index.php/JKM\"><span style=\"background-color:hsl(60,75%,60%);\">Jurnal Kedokteran Mulawarman</span></a></li><li><a href=\"http://e-journals.unmul.ac.id/index.php/MOLAR\"><span style=\"background-color:hsl(90,75%,60%);\">Mulawarman Dental Jurnal</span></a><span style=\"background-color:hsl(90,75%,60%);\">&nbsp;</span></li><li><a href=\"http://e-journals.unmul.ac.id/index.php/JKPBK\"><span style=\"background-color:hsl(240,75%,60%);color:hsl(0,0%,100%);\">Jurnal Kesehatan Pasak Bumi Kalimantan</span></a></li></ul>', NULL, 'ajisudjay', '2023-03-02'),
(34, 'Dosen', 'dosen', 1, 27, '<h4 style=\"text-align:center;\">JAJARAN TENAGA PENDIDIK&nbsp;</h4><h4 style=\"text-align:center;\">FAKULTAS KEDOKTERAN UNIVERSITAS MULAWARAMAN</h4><figure class=\"table\" style=\"width:31.87%;\"><table class=\"ck-table-resized\"><colgroup><col style=\"width:49.52%;\"><col style=\"width:50.48%;\"></colgroup><tbody><tr><td><figure class=\"image image_resized\" style=\"width:35.13%;\"><img src=\"/content/galeri/1677765514_6966748c1a1d0dcc5d30.png\"></figure><p style=\"text-align:center;\"><span class=\"text-small\">NAMA : Fulan</span></p><p style=\"text-align:center;\"><span class=\"text-small\">NIP : 202212 2000 1 001</span></p><p style=\"text-align:center;\"><span class=\"text-small\">JABATAN : Dekan</span></p><p style=\"text-align:center;\"><span class=\"text-small\">BIDANG KEAHLIAN : Dokter</span></p><p style=\"text-align:center;\"><span class=\"text-small\">ACCOUNT ID:</span></p><p style=\"text-align:center;\"><span class=\"text-small\">SINTA (0012347)</span></p><p style=\"text-align:center;\"><span class=\"text-small\">SCOPUS (57193652279)</span></p></td><td><figure class=\"image image_resized\" style=\"width:37.53%;\"><img src=\"/content/galeri/1677765514_6966748c1a1d0dcc5d30.png\"></figure><p style=\"text-align:center;\"><span class=\"text-small\">NAMA : Fulanah</span></p><p style=\"text-align:center;\"><span class=\"text-small\">NIP : 202212 2000 1 001</span></p><p style=\"text-align:center;\"><span class=\"text-small\">JABATAN : Wakil Dekan I</span></p><p style=\"text-align:center;\"><span class=\"text-small\">BIDANG KEAHLIAN : Dokter</span></p><p style=\"text-align:center;\"><span class=\"text-small\">ACCOUNT ID:</span></p><p style=\"text-align:center;\"><span class=\"text-small\">SINTA (0012347)</span></p><p style=\"text-align:center;\"><span class=\"text-small\">SCOPUS (57193652279)</span></p></td></tr><tr><td><figure class=\"image image_resized\" style=\"width:35.13%;\"><img src=\"/content/galeri/1677765514_6966748c1a1d0dcc5d30.png\"></figure><p style=\"text-align:center;\"><span class=\"text-small\">NAMA : Fulan</span></p><p style=\"text-align:center;\"><span class=\"text-small\">NIP : 202212 2000 1 001</span></p><p style=\"text-align:center;\"><span class=\"text-small\">JABATAN : Wakil Dekan II</span></p><p style=\"text-align:center;\"><span class=\"text-small\">BIDANG KEAHLIAN : Dokter</span></p><p style=\"text-align:center;\"><span class=\"text-small\">ACCOUNT ID:</span></p><p style=\"text-align:center;\"><span class=\"text-small\">SINTA (0012347)</span></p><p style=\"text-align:center;\"><span class=\"text-small\">SCOPUS (57193652279)</span></p></td><td><figure class=\"image image_resized\" style=\"width:35.13%;\"><img src=\"/content/galeri/1677765514_6966748c1a1d0dcc5d30.png\"></figure><p style=\"text-align:center;\"><span class=\"text-small\">NAMA : Fulanah</span></p><p style=\"text-align:center;\"><span class=\"text-small\">NIP : 202212 2000 1 001</span></p><p style=\"text-align:center;\"><span class=\"text-small\">JABATAN : Koordinator Prodi</span></p><p style=\"text-align:center;\"><span class=\"text-small\">BIDANG KEAHLIAN : Dokter</span></p><p style=\"text-align:center;\"><span class=\"text-small\">ACCOUNT ID:</span></p><p style=\"text-align:center;\"><span class=\"text-small\">SINTA (0012347)</span></p><p style=\"text-align:center;\"><span class=\"text-small\">SCOPUS (57193652279)</span></p></td></tr><tr><td><figure class=\"image image_resized\" style=\"width:35.13%;\"><img src=\"/content/galeri/1677765514_6966748c1a1d0dcc5d30.png\"></figure><p style=\"text-align:center;\"><span class=\"text-small\">NAMA : Fulan</span></p><p style=\"text-align:center;\"><span class=\"text-small\">NIP : 202212 2000 1 001</span></p><p style=\"text-align:center;\"><span class=\"text-small\">JABATAN : Koordinator Prodi</span></p><p style=\"text-align:center;\"><span class=\"text-small\">BIDANG KEAHLIAN : Dokter</span></p><p style=\"text-align:center;\"><span class=\"text-small\">ACCOUNT ID:</span></p><p style=\"text-align:center;\"><span class=\"text-small\">SINTA (0012347)</span></p><p style=\"text-align:center;\"><span class=\"text-small\">SCOPUS (57193652279)</span></p></td><td><figure class=\"image image_resized\" style=\"width:35.13%;\"><img src=\"/content/galeri/1677765514_6966748c1a1d0dcc5d30.png\"></figure><p style=\"text-align:center;\"><span class=\"text-small\">NAMA : Fulan</span></p><p style=\"text-align:center;\"><span class=\"text-small\">NIP : 202212 2000 1 001</span></p><p style=\"text-align:center;\"><span class=\"text-small\">JABATAN : Dosen</span></p><p style=\"text-align:center;\"><span class=\"text-small\">BIDANG KEAHLIAN : Dokter</span></p><p style=\"text-align:center;\"><span class=\"text-small\">ACCOUNT ID:</span></p><p style=\"text-align:center;\"><span class=\"text-small\">SINTA (0012347)</span></p><p style=\"text-align:center;\"><span class=\"text-small\">SCOPUS (57193652279</span></p></td></tr><tr><td><figure class=\"image image_resized\" style=\"width:35.13%;\"><img src=\"/content/galeri/1677765514_6966748c1a1d0dcc5d30.png\"></figure><p style=\"text-align:center;\"><span class=\"text-small\">NAMA : Fulanah</span></p><p style=\"text-align:center;\"><span class=\"text-small\">NIP : 202212 2000 1 001</span></p><p style=\"text-align:center;\"><span class=\"text-small\">JABATAN : Dosen</span></p><p style=\"text-align:center;\"><span class=\"text-small\">BIDANG KEAHLIAN : Dokter</span></p><p style=\"text-align:center;\"><span class=\"text-small\">ACCOUNT ID:</span></p><p style=\"text-align:center;\"><span class=\"text-small\">SINTA (0012347)</span></p><p style=\"text-align:center;\"><span class=\"text-small\">SCOPUS (57193652279)</span></p></td><td><figure class=\"image image_resized\" style=\"width:35.13%;\"><img src=\"/content/galeri/1677765514_6966748c1a1d0dcc5d30.png\"></figure><p style=\"text-align:center;\"><span class=\"text-small\">NAMA : Fulanah</span></p><p style=\"text-align:center;\"><span class=\"text-small\">NIP : 202212 2000 1 001</span></p><p style=\"text-align:center;\"><span class=\"text-small\">JABATAN : Dosen</span></p><p style=\"text-align:center;\"><span class=\"text-small\">BIDANG KEAHLIAN : Dokter</span></p><p style=\"text-align:center;\"><span class=\"text-small\">ACCOUNT ID:</span></p><p style=\"text-align:center;\"><span class=\"text-small\">SINTA (0012347)</span></p><p style=\"text-align:center;\"><span class=\"text-small\">SCOPUS (57193652279)</span></p></td></tr></tbody></table></figure>', NULL, 'ajisudjay', '2023-03-02'),
(35, 'PMB', 'pmb', 1, 33, '<figure class=\"image image_resized\" style=\"width:80.37%;\"><img src=\"https://upload.unmul.ac.id/uploads/489eMABA1.jpg\"></figure>', NULL, 'ajisudjay', '2023-03-02'),
(36, 'Unit Kegiatan Mahasiswa (UKM)', 'unit-kegiatan-mahasiswa-ukm-', 2, 29, '<p><strong>Unit Kegiatan Mahasiswa (UKM) yang ada di Fakultas Kedokteran Terdiri dari :</strong></p><ol><li>Dewan Perwakilan Mahasiswa (DPM) Tingkat Fakultas</li><li>Badan Eksekutif Mahasiswa (BEM) Tingkat Fakultas</li><li>UKM Tingkat Fakultas</li></ol><p>&nbsp;</p><p><strong>Bidang Seni</strong></p><p>1. ???</p><p>2.???</p><p>&nbsp;</p><p><strong>Bidang Keilmuan</strong></p><p>1. ???</p><p>2.???</p><p>&nbsp;</p><p><strong>Bidang Keagamaan</strong></p><p>1. ???</p><p>&nbsp;</p><p><strong>Bidang Olahraga</strong></p><p>1. ???</p><p>2.???</p>', NULL, 'ajisudjay', '2023-03-02'),
(37, 'Profesi Dokter', 'profesi-dokter', 3, 25, '<h3>Deskripsi</h3><p>Program Studi Kedokteran berdiri sejak tahun 2001 berdasarkan SK Pendirian : SK Dirjen DIKTI No. 3083/D/T/2001. Sampai saat ini Program Studi Kedokteran FK Unmul masih menjadi satu-satunya Program Studi Kedokteran di Kalimantan Timur. Saat ini Program Studi Kedokteran telah terakreditasi A berdasarkan SK LAM PT-Kes No. 003/LAM PT-Kes/Akr.Bd/Sar/X/2019 tanggal 26 Oktober 2019.<br><br>Profil Lulusan Program Studi Kedokteran FK Unmul sebagai berikut:<br><br>Calon Praktisi/Klinisi<br>Sarjana kedokteran yang menguasai ilmu kedokteran dengan unggulan kedokteran tropis yang menjadi dasar pelayanan Kesehatan kepada masyarakat disertai keimanan dan ketakwaan pada Tuhan YME, pribadi berkarakter, akhlak mulia, beretika, berbudi pekerti, dan menjunjung tinggi moralitas, sebagai pembelajar sepanjang hayat, bertanggungjawab sosial, cinta tanah air, dan berkomitmen untuk menyehatkan kehidupan masyarakat<br><br>Calon Pendidik/Peneliti<br>Sarjana kedokteran yang berpikir kritis dan kreatif dan memiliki kemampuan literasi di bidang sains, finansial, sosial budaya, serta teknologi informasi dalam menghadapi permasalahan kesehatan dan dapat bersaing di era global dan mampu terlibat dalam penyelenggaraan pendidikan Kesehatan.<br><br>Agen Perubahan dan Pembangunan Sosial<br>Sarjana kedokteran sebagai agen perubah dan penggerak masyarakat berdasarkan etika kedokteran dengan berperan sebagai profesional, komunikator, kolaborator, advokator, manajer, pemimpin, untuk berkontribusi dalam meningkatkan derajat kesehatan masyarakat.</p><p>&nbsp;</p><h3>Visi</h3><blockquote><p>“Menjadi Program Studi berstandar Internasional dengan keunggulan kedokteran tropis pada tahun 2034”</p></blockquote><h3>Misi</h3><blockquote><p>“1. Menyelenggarakan pendidikan kedokteran yang berkualitas untuk menghasilkan lulusan yang profesional”</p><p>“2. Melaksanakan penelitian yang berkualitas Internasional dengan keunggulan kedokteran tropis”</p><p>“3. Melaksanakan pengabdian kepada masyarakat dengan keunggulan kedokteran tropis”</p></blockquote><h3>Penjelasan Visi Misi</h3><p>Berkualitas:<br>Pada bidang pendidikan, bidang kedokteran tropis akan menjadi unggulan prodi kedokteran dan profesi dokter. Pengembangan keilmuan kedokteran berbasis hasil penelitian dan pengabdian kepada masyarakat<br><br>Profesional:<br>adalah orang yang memiliki profesionalitas yang luhur meliputi (SKDI 2012): berketuhanan Yang Maha Esa, bermoral, beretika dan berdisiplin sadar dan taat hukum berwawasan sosial budaya berperilaku profesional</p><p>&nbsp;</p><h3>Tujuan</h3><blockquote><p>“1. Tercapainya hasil pengembangan keilmuan Program Studi di bidang kedokteran untuk menghasilkan lulusan sarjana kedokteran yang profesional ”</p><p>“2. Tercapainya hasil penyelenggaraan program studi di bidang penelitian berupa karya ilmiah dan produk inovasi dengan keunggulan kedokteran tropis yang berkualitas internasional ”</p><p>“3. Tercapainya hasil penyelenggaraan program studi di bidang pengabdian kepada masyarakat di bidang kedokteran berupa karya ilmiah dan produk inovasi ”</p></blockquote><h3>&nbsp;</h3><h3>Penelitian dan Pengabdian Masyarakat</h3><ul><li><a href=\"http://e-journals.unmul.ac.id/index.php/JKM\"><span style=\"background-color:hsl(60,75%,60%);\">Jurnal Kedokteran Mulawarman</span></a></li><li><a href=\"http://e-journals.unmul.ac.id/index.php/MOLAR\"><span style=\"background-color:hsl(90,75%,60%);\">Mulawarman Dental Jurnal</span></a><span style=\"background-color:hsl(90,75%,60%);\">&nbsp;</span></li><li><a href=\"http://e-journals.unmul.ac.id/index.php/JKPBK\"><span style=\"background-color:hsl(240,75%,60%);color:hsl(0,0%,100%);\">Jurnal Kesehatan Pasak Bumi Kalimantan</span></a></li></ul>', NULL, 'ajisudjay', '2023-03-02'),
(38, 'SP - Spesialis Bedah', 'sp-spesialis-bedah', 5, 25, '<h3>Deskripsi</h3><p>Sejarah Pendidikan Dokter Spesialis Ilmu Bedah dimulai sejak tahun 1942 di Indonesia. Konsep magang yang berorientasi pada institutional based terus dikembangkan menjadi pendidikan formal akademik (university based) mulai tahun 1980an. Kolegium Ilmu Bedah Indonesia (KIBI) telah membuat Kurikulum Pendidikan Bedah yang dimulai sejak 1992 dan direvisi secara berkala sejak tahun 1992. KIBI menetapkan sistem pendidikan dokter spesialis bedah berbasis kompetensi (competence based) sejak tahun 2006 dengan sistem modul dengan revisi terbaru pada tahun 2015.</p><p>Program Pendidikan Dokter Spesialis Ilmu Bedah FK UNMUL (PPDS IB FK UNMUL) terbentuk dengan visi, misi, dan tujuan yang sejalan dengan visi dan misi dari Universitas Mulawarman, diharapkan proses pendidikan yang akan diselenggarakan dokter spesialis dengan lulusan yang memiliki pengetahuan dan keterampilan yang tinggi, bersikap etis dan empati dalam melaksanakan profesinya serta mampu bersaing dalam pasar kerja nasional dan regional, sehingga membentuk dokter spesialis yang mempunyai pengetahuan (knowledge), ketrampilan (skill) dan perilaku (attitude) serta moral yang baik.</p><p>Program Studi Spesialis Bedah FK UNMUL dimulai sejak 16 Oktober 2018 dengan landasan hukum Keputusan Menteri Riset, Teknologi, dan Pendidikan Tinggi RI nomor 900/KPT/I/2018. Hal-hal yang menjadi pertimbangan didirikannya institusi Program Pendidikan Dokter Spesialis Ilmu Bedah FK UNMUL ( PPDS IB FK UNMUL ) pada saat itu adalah kebutuhan pelayanan kesehatan di bidang ilmu bedah yang tersebar merata, sehingga Departemen Kesehatan mendorong pendidikan dokter spesialis bedah di FK UNMUL. Sehingga Tri Dharma Perguruan Tinggi FK UNMUL berusaha untuk menghasilkan lulusan yang kompeten di bidang Ilmu Bedah yang berwawasan global dan bereputasi internasional</p><p>&nbsp;</p><h3>Visi</h3><blockquote><p>“<span style=\"background-color:rgb(255,255,255);color:rgb(119,119,119);\">Menjadi Program Studi Pendidikan Dokter Spesialis Bedah yang unggul di tingkat nasional di bidang tropical surgery pada tahun 2033</span>”</p></blockquote><h3>Misi</h3><blockquote><p>“1. Menyelenggarakan pendidikan berkualitas, dengan memberikan keunggulan pada penanganan tropical surgery”</p><p>“2. Mengembangkan penelitian di bidang Ilmu Bedah yang berkualitas”</p><p>“3. Menyelenggarakan kegiatan pengabdian kepada masyarakat di bidang Ilmu Bedah ”</p></blockquote><p>&nbsp;</p><h3>Tujuan</h3><blockquote><p>“1. Tercapainya hasil penyelenggaraan di bidang pendidikan berupa lulusan Dokter Spesialis Bedah Umum yang kompeten dan profesional, unggul dalam penanganan tropical surgery ”</p><p>“2. Tercapainya hasil penyelenggaraan program studi di bidang penelitian berupa Publikasi, Haki dan Paten di bidang ilmu bedah yang dapat menyelesaikan permasalahan kesehatan di masyarakat.”</p><p>“3. Terlaksananya pengabdian kepada masyarakat di bidang ilmu bedah ”</p></blockquote><h3>&nbsp;</h3><h3>Kurikulum</h3><p>Kurikulum : &nbsp;<a href=\"https://drive.google.com/drive/folders/1AA_HGXIeqQndxKNM_xBxbY7Ftji1Js-O?usp=share_link\">https://drive.google.com/drive/folders/1AA_HGXIeqQndxKNM_xBxbY7Ftji1Js-O?usp=share_link</a></p><p>Profil Lulusan&nbsp; :<a href=\"https://drive.google.com/drive/folders/1eRrkFDlyC4ZZhyRq9APVSNs0ELRHnpHV?usp=share_link\">https://drive.google.com/drive/folders/1eRrkFDlyC4ZZhyRq9APVSNs0ELRHnpHV?usp=share_link</a></p><h3>&nbsp;</h3><h3>Kegiatan Pembelajaran</h3><p>RPS&nbsp; <a href=\"https://drive.google.com/drive/folders/13cRPK0P3C1O7Q5hnUhc5ZL7jYkSlvnKv?usp=share_link\">https://drive.google.com/drive/folders/13cRPK0P3C1O7Q5hnUhc5ZL7jYkSlvnKv?usp=share_link</a><br>&nbsp;</p><h3>Penelitian dan Pengabdian Masyarakat</h3><ul><li><a href=\"http://e-journals.unmul.ac.id/index.php/JKM\"><span style=\"background-color:hsl(60,75%,60%);\">Jurnal Kedokteran Mulawarman</span></a></li><li><a href=\"http://e-journals.unmul.ac.id/index.php/MOLAR\"><span style=\"background-color:hsl(90,75%,60%);\">Mulawarman Dental Jurnal</span></a><span style=\"background-color:hsl(90,75%,60%);\">&nbsp;</span></li><li><a href=\"http://e-journals.unmul.ac.id/index.php/JKPBK\"><span style=\"background-color:hsl(240,75%,60%);color:hsl(0,0%,100%);\">Jurnal Kesehatan Pasak Bumi Kalimantan</span></a></li></ul>', NULL, 'ajisudjay', '2023-03-02'),
(39, 'S1 - Kedokteran Gigi', 's1-kedokteran-gigi', 2, 25, '<h3>Deskripsi</h3><p>Program Studi Kedokteran Gigi melaksanakan proses pembelajaran berdasarkan Keputusan Menteri Riset, Teknologi dan Pendidikan Tinggi tentang Pembukaan Program Studi Sarjana dan Profesi Kedokteran Gigi Universitas Mulawarman No. 501/KPT/I/2016 tanggal 7 Desember 2016:</p><p>1. Care Provider/Layanan Kesehatan Mampu menyelesaikan permasalahan di bidang kedokteran gigi secara komperhensif di 4 bidang dasar, meliputi promotif, preventif, kuratif dan rehabilitatif dental; membina kerjasama tim dan komunikasi interdisipliner; memberikan informasi dan edukasi melalui komunikasi yang efektif dengan pasien dan masyarakat sesuai profesionalitasnya.&nbsp;</p><p>2. Decission Maker Mampu memilih teknologi tepat guna untuk digunakan dalam mempertinggi pelayanan kesehatan yang layak dan berbiaya murah. Melakukan kajian dan analisis dengan berpedoman pada prinsip evidence-based medicine, yang layak menjadi dasar penyusunan kebijakan penanggulangan masalah kesehatan gigi mulut di masyarakat secara tepat dan inovatif.&nbsp;&nbsp;</p><p>3. Communicator Seseorang yang mampu meningkatkan gaya hidup yang sehat dengan penyuluhan yang efektif dan nasehat yang tepat dalam konteks budaya dan ekonomi, meningkatkan dan menjaga kesehatan perorangan maupun kelompok. Mampu menawarkan solusi dengan argumen yang kuat dan ilmiah, serta mengkomunikasikan ide kepada khalayak luas, masyarakat akademik, antar disiplin ilmu; membina kerjasama dan komunikasi interprofesional sehingga bersinergi dalam konsep team work.&nbsp;</p><p>4. Community Leader Seseorang yang karena kehormatan dan kepercayaan masyarakat setempat, mampu mengetahui kebutuhan kesehatan perorangan maupun kelompok sehingga berperan dalam memotivasi masyarakat untuk turut berpartisipasi meningkatkan kesehatan umum serta khususnya pada masyarakat.&nbsp;&nbsp;</p><p>5. Manager Seseorang yang dapat bekerja secara efektif dan harmonis dengan orang lain baik di dalam maupun di luar organisasi sistem pelayanan kesehatan. Pemimpin dan koordinator tim dalam komunitas profesi maupun interdisiplin dengan penerapan manejemen kesehatan untuk menyelesaikan permasalahan yang ada; membina suasana kerja dan pelayanan yang kondusif.&nbsp;&nbsp;</p><p>6. Lecturer/Researcher Seseorang yang mampu bertindak sebagai pendidik profesional dan ilmuwan, senantiasa mengembangkan diri sesuai kemajuan iptek secara tepat guna melalui penambahan ilmu dan penelitian. Memiliki kepekaan terhadap masalah di masyarakat, baik yang berkaitan dengan permasalahan kesehatan gigi mulut serta kebiasaan dan perilaku; melakukan publikasi penelitian dan pengembangan baik dalam tertulis maupun seminar.&nbsp;&nbsp;</p><p>7. Creator and Innovator Memiliki kepekaan terhadap kebutuhan kesehatan di lingkungannya serta memikili kreativitas dan inovasi dalam pengembangan bahan kedokteran gigi dengan pendekatan alamiah hutan tropis lembab Kalimantan untuk membuat perubahan dan solusi untuk meningkatkan derajad kesehatan masyarakat.</p><p>&nbsp;</p><h3>Visi</h3><blockquote><p><span style=\"background-color:rgb(255,255,255);color:rgb(119,119,119);\">\"Menjadi program studi profesi Dokter Gigi yang unggul di tingkat nasional dan berwawasan internasional di bidang kedokteran gigi yang bertumpu pada hutan tropika lembab </span><i>(tropical rainforest)</i><span style=\"background-color:rgb(255,255,255);color:rgb(119,119,119);\"> dan lingkungannya pada 2030.\"</span></p></blockquote><h3>Misi</h3><blockquote><p>“1. Menyelenggarakan pendidikan sarjana kedokteran gigi yang berkualitas dengan berbasis riset hutan tropika lembab dan lingkungannya berdasarkan pada standar kompetensi dokter gigi Indonesia”</p><p>“2. Mengembangkan riset berkualitas, berdayaguna dan berdaya saing yang berbasis pada sumber hutan tropika lembab dan lingkungannya”</p><p>“3. Mengembangkan kegiatan pengabdian kepada masyarakat untuk meningkatkan taraf kesehatan gigi dan mulut.”</p></blockquote><h3>&nbsp;</h3><h3>Tujuan</h3><blockquote><p>1. Menghasilkan lulusan Sarjana Kedokteran Gigi (S.KG) yang berkualitas, kompetitif, berdedikasi, bermoral, bertanggung jawab dan mandiri sesuai standar kompetensi dokter gigi Indonesia serta mampu bersaing di tingkat nasional.</p><p>2. Menghasilkan karya ilmiah yang berkualitas meliputi riset dan atau produk dalam bidang kedokteran gigi dengan memanfaatkan kekayaan alam hutan tropika lembab <i>(tropical rain forest)</i> dan lingkungannya.</p><p>3. Terlaksananya pengabdian kepada masyarakat berupa pelayanan paripurna di bidang kedokteran gigi.</p></blockquote><h3>&nbsp;</h3><h3>Kurikulum</h3><figure class=\"table\" style=\"width:783px;\"><table style=\"background-color:rgb(255, 255, 255);border:1px solid rgb(233, 236, 239);\"><tbody><tr><td><p>Fase 1 (Tahun Pertama) :</p><ul><li>Body system. Pengenalan tentang dasar pembelajaran di kedokteran gigi, kedokteran dasar dan kedokteran gigi dasar. Fase ini juga menjadi dasar dalam penguasaan keilmuan yang akan dilaksanakan pada fase-fase berikutnya. Termasuk keilmuan dasar yang menunjang penguasaan PIP Unmul</li></ul><p>Fase 2 (Tahun Kedua) :</p><ul><li>Basic dental. Pembelajaran terkait kedokteran dan kedokteran gigi dasar, serta pengenalan ilmu kedokteran gigi dan penyakit-penyakit infeksi, noninfeksi.</li></ul><p>Fase 3 (Tahun Ketiga dan Keempat) :</p><ul><li>Advanced dental science. Pembelajaran terkait ilmu kedokteran gigi tingkat lanjut, termasuk penatalaksanaan dan terapi, serta penanganan kegawatdaruratan dan kemampuan manajemen. Pembuatan karya tulis ilmiah serta aplikasi penelitian dan publikasi</li></ul></td></tr><tr><td><a href=\"https://drive.google.com/drive/folders/1g8GNjEuUlq605wMOe8tPgd7Pcf0QziMt?usp=sharing\">Mapping Kurikulum PSKG FK Unmul</a></td></tr></tbody></table></figure><h3>&nbsp;</h3><h3>Kegiatan Pembelajaran</h3><p>Pembelajaran di PSKG FK Unmul menggunakan metode SPICES, yaitu: (1) Student Centered Learning/ SCL, (2) Problem-Based Learning/PBL, (3) Kurikulum Integrasi, (4) Community-Based Learning, (5) Elektif dengan tema, dan (5) Kurikulum yang Sistematik. Metode pembelajaran yang dilakukan sebagai manifestasi metode tersebut yaitu :</p><p>1) Diskusi kelompok kecil (tutorial)</p><p>2) Kuliah pakar</p><p>3) Praktikum</p><p>4) Keterampilan medik (skills lab)</p><p>5) Presentasi pleno</p><p>6) Praktek lapangan/komunitas</p><p>7) Penelitian &amp; karya tulis ilmiah</p><p>&nbsp;</p><h3>Penelitian dan Pengabdian Masyarakat</h3><ul><li><a href=\"http://e-journals.unmul.ac.id/index.php/JKM\"><span style=\"background-color:hsl(60,75%,60%);\">Jurnal Kedokteran Mulawarman</span></a></li><li><a href=\"http://e-journals.unmul.ac.id/index.php/MOLAR\"><span style=\"background-color:hsl(90,75%,60%);\">Mulawarman Dental Jurnal</span></a><span style=\"background-color:hsl(90,75%,60%);\">&nbsp;</span></li><li><a href=\"http://e-journals.unmul.ac.id/index.php/JKPBK\"><span style=\"background-color:hsl(240,75%,60%);color:hsl(0,0%,100%);\">Jurnal Kesehatan Pasak Bumi Kalimantan</span></a></li></ul>', NULL, 'ajisudjay', '2023-03-02'),
(40, 'Profesi Dokter Gigi', 'profesi-dokter-gigi', 4, 25, '<h3>Deskripsi<br>&nbsp;</h3><p>Program Studi Kedokteran Gigi melaksanakan proses pembelajaran berdasarkan Keputusan Menteri Riset, Teknologi dan Pendidikan Tinggi tentang Pembukaan Program Studi Sarjana dan Profesi Kedokteran Gigi Universitas Mulawarman No. 501/KPT/I/2016 tanggal 7 Desember 2016:</p><p><strong>1.&nbsp;</strong><i><strong>Care Provider</strong></i><strong>/Layanan Kesehatan&nbsp;</strong>Mampu menyelesaikan permasalahan di bidang kedokteran gigi secara komperhensif di 4 bidang dasar, meliputi promotif, preventif, kuratif dan rehabilitatif dental; membina kerjasama tim dan komunikasi interdisipliner; memberikan informasi dan edukasi melalui komunikasi yang efektif dengan pasien dan masyarakat sesuai profesionalitasnya.&nbsp;</p><p><i><strong>2. Decission Maker</strong></i>&nbsp;Mampu memilih teknologi tepat guna untuk digunakan dalam mempertinggi pelayanan kesehatan yang layak dan berbiaya murah. Melakukan kajian dan analisis dengan berpedoman pada prinsip&nbsp;<i>evidence-based medicine</i>, yang layak menjadi dasar penyusunan kebijakan penanggulangan masalah kesehatan gigi mulut di masyarakat secara tepat dan inovatif.&nbsp;&nbsp;</p><p><i><strong>3. Communicator&nbsp;</strong></i>Seseorang yang mampu meningkatkan gaya hidup yang sehat dengan penyuluhan yang efektif dan nasehat yang tepat dalam konteks budaya dan ekonomi, meningkatkan dan menjaga kesehatan perorangan maupun kelompok. Mampu menawarkan solusi dengan argumen yang kuat dan ilmiah, serta mengkomunikasikan ide kepada khalayak luas, masyarakat akademik, antar disiplin ilmu; membina kerjasama dan komunikasi interprofesional sehingga bersinergi dalam konsep&nbsp;<i>team work</i>.&nbsp;</p><p><i><strong>4. Community Leader</strong></i>&nbsp;Seseorang yang karena kehormatan dan kepercayaan masyarakat setempat, mampu mengetahui kebutuhan kesehatan perorangan maupun kelompok sehingga berperan dalam memotivasi masyarakat untuk turut berpartisipasi meningkatkan kesehatan umum serta khususnya pada masyarakat.&nbsp;&nbsp;</p><p><i><strong>5. Manager</strong></i><strong>&nbsp;</strong>Seseorang yang dapat bekerja secara efektif dan harmonis dengan orang lain baik di dalam maupun di luar organisasi sistem pelayanan kesehatan. Pemimpin dan koordinator tim dalam komunitas profesi maupun interdisiplin dengan penerapan manejemen kesehatan untuk menyelesaikan permasalahan yang ada; membina suasana kerja dan pelayanan yang kondusif.&nbsp;&nbsp;</p><p><i><strong>6. Lecturer/Researcher</strong></i><strong>&nbsp;</strong>Seseorang yang mampu bertindak sebagai pendidik profesional dan ilmuwan, senantiasa mengembangkan diri sesuai kemajuan iptek secara tepat guna melalui penambahan ilmu dan penelitian. Memiliki kepekaan terhadap masalah di masyarakat, baik yang berkaitan dengan permasalahan kesehatan gigi mulut serta kebiasaan dan perilaku; melakukan publikasi penelitian dan pengembangan baik dalam tertulis maupun seminar.&nbsp;&nbsp;</p><p><i><strong>7. Creator and Innovator</strong></i><strong>&nbsp;</strong>Memiliki kepekaan terhadap kebutuhan kesehatan di lingkungannya serta memikili kreativitas dan inovasi dalam pengembangan bahan kedokteran gigi dengan pendekatan alamiah hutan tropis lembab Kalimantan untuk membuat perubahan dan solusi untuk meningkatkan derajad kesehatan masyarakat.</p><p>&nbsp;</p><h3>Visi</h3><blockquote><p>“<span style=\"background-color:rgb(255,255,255);color:rgb(119,119,119);\">Menjadi PS Profesi Dokter Gigi yang unggul di tingkat nasional dan berwawasan internasional di bidang kedokteran gigi yang bertumpu pada hutan tropika lembab (tropical rainforest) dan lingkungannya pada 2030.</span>”</p></blockquote><h3>Misi</h3><blockquote><p>1. Menyelenggarakan pendidikan profesi dokter gigi yang berkualitas dengan berbasis riset hutan tropika lembab dan lingkungannya berdasarkan pada standar kompetensi dokter gigi Indonesia.</p><p>2. Mengembangkan riset berkualitas, berdayaguna, dan berdaya saing yang berbasis pada sumber hutan tropika lembab dan lingkungannya.</p><p>3. Mengembangkan kegiatan pengabdian kepada masyarakat untuk meningkatkan taraf kesehatan gigi dan mulut.</p></blockquote><h3>&nbsp;</h3><h3>Tujuan</h3><blockquote><p>1. Menghasilkan lulusan dokter gigi profesional yang berkualitas, kompetitif, berdedikasi, bermoral, bertanggungjawab dan mandiri sesuai standar kompetensi dokter gigi Indonesia serta mampu bersaing di tingkat nasional.</p><p>2. Menghasilkan karya ilmiah yang berkualitas meliputi riset dan atau produk dalam bidang kedokteran gigi dengan memanfaatkan kekayaan alam hutan tropika lembab (tropical rainforest) dan lingkungannya.</p><p>3. Terlaksananya pengabdian kepada masyarakat berupa pelayanan paripurna di bidang kedokteran gigi.</p></blockquote><h3>&nbsp;</h3><h3>Kurikulum</h3><ul><li><a href=\"https://drive.google.com/drive/folders/14fNnN8dlRNzydZuL9QMxCGTKS_6rIvRO?usp=sharing\"><span style=\"color:hsl(0, 0%, 0%);\">Kurikulum PEND Kedokteran Gigi</span></a></li></ul><p>&nbsp;</p><h3>PENYELENGGARAAN PENDIDIKAN</h3><p>Penyelenggaraan Program Pendidikan Profesi Dokter Gigi terdiri atas:</p><p>Kepaniteraan klinik di RS Pendidikan Utama, Satelit dan Praktek Kerja Lapangan.</p><p>Kepaniteraan klinik di Rumah Sakit Pendidikan dengan metode Integration and Departement approach Serta Pembelajaran Holistik</p><p>&nbsp;</p><h3>Penelitian dan Pengabdian Masyarakat</h3><ul><li><a href=\"http://e-journals.unmul.ac.id/index.php/JKM\"><span style=\"background-color:hsl(60,75%,60%);\">Jurnal Kedokteran Mulawarman</span></a></li><li><a href=\"http://e-journals.unmul.ac.id/index.php/MOLAR\"><span style=\"background-color:hsl(90,75%,60%);\">Mulawarman Dental Jurnal</span></a><span style=\"background-color:hsl(90,75%,60%);\">&nbsp;</span></li><li><a href=\"http://e-journals.unmul.ac.id/index.php/JKPBK\"><span style=\"background-color:hsl(240,75%,60%);color:hsl(0,0%,100%);\">Jurnal Kesehatan Pasak Bumi Kalimantan</span></a></li></ul>', NULL, 'ajisudjay', '2023-03-02'),
(41, 'D3 - Keperawatan', 'd3-keperawatan', 6, 25, '<h3>Deskripsi</h3><p><span style=\"background-color:rgb(255,255,255);color:rgb(119,119,119);\">Prodi D3 Keperawatan Fakultas Kedokteran Universitas Mulawarman merupakan pengalihan program studi D3 Keperawatan Akademi Keperawatan Pemprov Kaltim berdasarkan berita acara serah terima (BAST) antara Gubernur Kalimantan Timur dan Kemenristek Dikti pada tanggal 08 Januari 2018. Prodi D3 Keperawatan Fakultas Kedokteran Universitas Mulawarman (PSDK FK Unmul) memiliki ijin penyenggaraan&nbsp; pembukaan prodi berdasarkan Keputusan Kemenristek Dikti no 306/KPT/I/2018</span></p><p>&nbsp;</p><h3>Visi</h3><blockquote><p>“Menjadi Program Studi D3 Keperawatan Yang Terkemuka Di Tingkat Nasional Dan Berwawasan Internasional Dalam Bidang Keperawatan Penyakit Tropis&nbsp; Tahun 2028”</p></blockquote><h3>Misi</h3><blockquote><p>“1. Menyelenggarakan pendidikan yang berkualitas di bidang keperawatan penyakit tropis”</p><p>“2. Menyelenggarakan penelitian di bidang keperawatan penyakit tropis dan pemanfaatan hutan tropis lembab serta lingkungannya”</p><p>“3. Menyelenggarakan pengabdian masyarakat di bidang keperawatan penyakit tropis.”</p></blockquote><h3>&nbsp;</h3><h3>Tujuan</h3><blockquote><p>“1. Tercapainya hasil penyelenggaraan di bidang pendidikan berupa lulusan perawat vokasi yang profesional di bidang keperawatan dan unggul dalam keperawatan penyakit tropis”</p><p>“2. Tercapainya hasil penyelenggaraan di bidang penelitian berupa karya ilmiah yang dapat dipublikasikan jurnal nasional dan jurnal internasional bereputasi”</p><p>“3. Tercapainya hasil pengabdian masyarakat yang berorientasi pada keperawatan penyakit tropis. ”</p></blockquote><h3>&nbsp;</h3><h3>Kurikulum</h3><p>Kurikulum : &nbsp;<img><a href=\"https://drive.google.com/file/d/1pJzh-_4XzofcraGZHpfMMZevFr_U50lb/view?usp=sharing\">Kurikulum PSDK 2018</a><br>&nbsp;</p><h3>Penelitian dan Pengabdian Masyarakat</h3><ul><li><a href=\"http://e-journals.unmul.ac.id/index.php/JKM\"><span style=\"background-color:hsl(60,75%,60%);\">Jurnal Kedokteran Mulawarman</span></a></li><li><a href=\"http://e-journals.unmul.ac.id/index.php/MOLAR\"><span style=\"background-color:hsl(90,75%,60%);\">Mulawarman Dental Jurnal</span></a><span style=\"background-color:hsl(90,75%,60%);\">&nbsp;</span></li><li><a href=\"http://e-journals.unmul.ac.id/index.php/JKPBK\"><span style=\"background-color:hsl(240,75%,60%);color:hsl(0,0%,100%);\">Jurnal Kesehatan Pasak Bumi Kalimantan</span></a></li></ul>', NULL, 'ajisudjay', '2023-03-02'),
(42, 'Tenaga Kependidikan', 'tenaga-kependidikan', 2, 27, '<h4 style=\"text-align:center;\">JAJARAN TENAGA KEPENDIDIKAN</h4><h4 style=\"text-align:center;\">FAKULTAS KEDOKTERAN UNIVERSITAS MULAWARAMAN</h4><figure class=\"table\" style=\"width:40.1%;\"><table class=\"ck-table-resized\"><colgroup><col style=\"width:48.93%;\"><col style=\"width:51.07%;\"></colgroup><tbody><tr><td><figure class=\"image image_resized\" style=\"width:35.13%;\"><img src=\"/content/galeri/1677765514_6966748c1a1d0dcc5d30.png\"></figure><p style=\"text-align:center;\">NAMA : Fulan</p><p style=\"text-align:center;\">JABATAN : Kasubag Umum</p><p style=\"text-align:center;\">Ruangan : Kasub</p></td><td><figure class=\"image image_resized\" style=\"width:35.13%;\"><img src=\"/content/galeri/1677765514_6966748c1a1d0dcc5d30.png\"></figure><p style=\"text-align:center;\">NAMA : Fulanah</p><p style=\"text-align:center;\">JABATAN : Keuangan</p><p style=\"text-align:center;\">Ruangan : Keuangan</p></td></tr><tr><td><figure class=\"image image_resized\" style=\"width:35.13%;\"><img src=\"/content/galeri/1677765514_6966748c1a1d0dcc5d30.png\"></figure><p style=\"text-align:center;\">NAMA : Fulan</p><p style=\"text-align:center;\">JABATAN : Keuangan</p><p style=\"text-align:center;\">Ruangan : Keuangan</p></td><td><figure class=\"image image_resized\" style=\"width:35.13%;\"><img src=\"/content/galeri/1677765514_6966748c1a1d0dcc5d30.png\"></figure><p style=\"text-align:center;\">NAMA : Fulan</p><p style=\"text-align:center;\">JABATAN : Tata Usaha</p><p style=\"text-align:center;\">Ruangan : Tata Usaha</p></td></tr><tr><td><figure class=\"image image_resized\" style=\"width:35.13%;\"><img src=\"/content/galeri/1677765514_6966748c1a1d0dcc5d30.png\"></figure><p style=\"text-align:center;\">NAMA : Fulanah</p><p style=\"text-align:center;\">JABATAN : Tata Usaha</p><p style=\"text-align:center;\">Ruangan : Tata Usaha</p></td><td><figure class=\"image image_resized\" style=\"width:35.13%;\"><img src=\"/content/galeri/1677765514_6966748c1a1d0dcc5d30.png\"></figure><p style=\"text-align:center;\">NAMA : Fulan</p><p style=\"text-align:center;\">JABATAN : Akademik</p><p style=\"text-align:center;\">Ruangan : Akademik</p></td></tr><tr><td><figure class=\"image image_resized\" style=\"width:35.13%;\"><img src=\"/content/galeri/1677765514_6966748c1a1d0dcc5d30.png\"></figure><p style=\"text-align:center;\">NAMA : Fulan</p><p style=\"text-align:center;\">JABATAN : Akademik</p><p style=\"text-align:center;\">Ruangan : Akademik</p></td><td><figure class=\"image image_resized\" style=\"width:35.13%;\"><img src=\"/content/galeri/1677765514_6966748c1a1d0dcc5d30.png\"></figure><p style=\"text-align:center;\">NAMA : Fulanah</p><p style=\"text-align:center;\">JABATAN : Akademik</p><p style=\"text-align:center;\">Ruangan : Akademik</p></td></tr></tbody></table></figure><p>&nbsp;</p>', NULL, 'ajisudjay', '2023-03-02'),
(44, 'Alumni', 'alumni', 1, 29, '<p>Saat ini Fakultas Kedokteran Unmul Memiliki Alumni sebanyak ???? Orang sejak ???? - ???? yang tergabung dalam Organisasi Ikatan Alumni Fakultas Kedokteran Unmul (IKA FK) dengan memiliki peran dalam peningkatan kualitas sumber daya Alumni Fakultas Kedokteran</p><p>Lulusan Fakultas Kedokteran memiliki himpunan alumni bernama IKA FK Unmul yang beranggotakan alumni FK Unmul. Saat ini ketua IKA FK Unmul adalah _________________<strong>. </strong>Aktivitas utamanya adalah kerja sama antara Alumni dan Fakultas dalam beberapa kegiatan yang bersifat Akademik dan Non Akademik. Serta kegiatan yang bersifat sosial masyarakat dalam bentuk pendanaan maupun pendampingan masyarakat bersama mahasiswa FK Unmul.</p><p>Kepada seluruh Alumni Universitas Mulawarman dihimbau untuk mengisi data Tracer Study dimana data tersebut sangat berguna untuk :</p><p>1. Pendataan Lulusan/Alumni Universitas Mulawarman agar lebih terstruktur.</p><p>2. Membantu Kampus Tercinta dengan adanya data alumni ini, nantinya dapat dipergunakan untuk melengkapi data untuk Meningkatkan Nilai Akreditasi Program Studi yang ada di Universitas Mulawarman.</p><p>3. Membantu Dalam menyusun Rencana Strategis Universitas Mulawarman dalam mengetahui serapan lulusan/Alumni dan Kendala-kendala yang dihadapi oleh lulusan/alumni dalam mendapatkan pekerjaan.<br><br>Kami berharap agar teman-teman alumni mensosialisasikan adanya tracer study ini melalui grup-grup, forum-forum, atau media sosial agar data tracer study cepat terkumpul. Dengan Janji Almamater dan menjunjung tinggi nama Universitas Mulawarman mari berikan yang terbaik bagi Universitas Mulawarman.<br>Kita bukan yang terbesar, kita bukan yang terkuat, kita juga bukan yang terhebat tetapi kita adalah&nbsp;<strong>keluarga Besar Alumni Universitas Mulawarman yang akan terus berkembang, berkarya dan terus membangun Bangsa dan Negara Indonesia Tercinta.</strong>&nbsp;</p><p>silahkan untuk mengisi Tracer Study Unmul pada <a href=\"https://perkasa.unmul.ac.id/tracer_study\"><span style=\"color:hsl(240, 75%, 60%);\">LINK INI</span></a></p>', NULL, 'ajisudjay', '2023-03-02'),
(45, 'Bimbingan Konseling (BK)', 'bimbingan-konseling-bk-', 3, 29, '<p>1. Mengkoordinasi dan mengembangkan kegiatan bimbingna konseling bersama pimpinan fakultas bagi penyempurnaan layanan Bimbingan Konseling</p><p>2. Melayani konsultasi secara mandiri oleh mahasiswa</p><p>3. Menangani kasus-kasus yang menjadi ranah bimbingan konseling yang dirujuk oleh pembimbing Akademik/Kepala Laboratorium/ Program Studi</p><p>4. Memberikan rekomendasi kepihak yang merujuk mengenai hasil konsultasi</p><p>5. Mengusulkan kepada Dekan untuk penanganan lebih lanjut</p><p>6. Membuat laporan tertulis secara berkala kepada Dekan.</p>', NULL, 'ajisudjay', '2023-03-02');
INSERT INTO `submenu` (`id`, `submenu`, `slug`, `urutan`, `id_mainmenu`, `content`, `tag`, `penulis`, `timestamp`) VALUES
(46, 'Laboratorium', 'laboratorium', 1, 28, '<h3 style=\"text-align:center;\">LABORATORIUM FAKULTAS KEDOKTERAN UNIVERSITAS MULAWARMAN&nbsp;</h3><p style=\"text-align:center;\">&nbsp;</p><figure class=\"table\" style=\"width:94.41%;\"><table class=\"ck-table-resized\"><colgroup><col style=\"width:5.35%;\"><col style=\"width:94.65%;\"></colgroup><tbody><tr><td>NO</td><td>LABORATORIUM</td></tr><tr><td>1</td><td><span style=\"background-color:rgb(255,255,255);color:rgb(119,119,119);\">ILMU PENYAKIT DALAM</span></td></tr><tr><td>2</td><td><span style=\"background-color:rgb(255,255,255);color:rgb(119,119,119);\">ILMU PENDIDIKAN KEDOKTERAN</span></td></tr><tr><td>3</td><td>MIKROBIOLOGI</td></tr><tr><td>4</td><td>PATOLOGI KLINIK</td></tr><tr><td>5</td><td>FARMAKOLOGI</td></tr><tr><td>6</td><td>ILMU BIOLOGI ORAL</td></tr><tr><td>7</td><td>ILMU ANATOMI</td></tr><tr><td>8</td><td>ILMU FISIOLOGI</td></tr><tr><td>9</td><td>ILMU HISTOLOGI</td></tr></tbody></table></figure><figure class=\"table\" style=\"width:94.63%;\"><table class=\"ck-table-resized\"><colgroup><col style=\"width:5.88%;\"><col style=\"width:94.12%;\"></colgroup><tbody><tr><td>10</td><td>ILMU KESEHATAN MASYARAKAT</td></tr><tr><td>11</td><td>ILMU PARASTOLOGI</td></tr><tr><td>12</td><td>ILMU PATOLOGI ANATOMI</td></tr><tr><td>13</td><td>ILMU DENTAL MATERIAL</td></tr><tr><td>14</td><td>ILMU ANESTESI</td></tr><tr><td>15</td><td>ILMU BEDAH</td></tr><tr><td>16</td><td>ILMU FORENSIK</td></tr><tr><td>17</td><td>ILMU PENYAKIT KULIT DAN KELAMIN</td></tr><tr><td>18</td><td>ILMU KESEHATAN ANAK</td></tr><tr><td>19</td><td>ILMU KEBIDANAN DAN KANDUNGAN</td></tr></tbody></table></figure><figure class=\"table\" style=\"width:94.41%;\"><table class=\"ck-table-resized\"><colgroup><col style=\"width:5.68%;\"><col style=\"width:94.32%;\"></colgroup><tbody><tr><td>20</td><td>ILMU PENYAKIT MATA</td></tr><tr><td>21</td><td>ILMU RADIOLOGI</td></tr><tr><td>22</td><td>ILMU REHABILITASI MEDIK</td></tr><tr><td>23</td><td>ILMU PENYAKIT THT</td></tr><tr><td>24</td><td>ILMU KESEHATAN JIWA</td></tr><tr><td>25</td><td>ILMU PENYAKIT SARAF</td></tr><tr><td>26</td><td>ILMU PROSTODOMSI</td></tr><tr><td>27</td><td>ILMU ORTHODOMSI</td></tr><tr><td>28</td><td>ILMU KONVERSI GIGI</td></tr><tr><td>29</td><td>ILMU KEDOKTERAN GIGI ANAK</td></tr></tbody></table></figure>', NULL, 'ajisudjay', '2023-03-02'),
(47, 'Perpustakaan', 'perpustakaan', 2, 28, '<p>Fakultas Kedokteran Universitas Mulawarman memiliki sarana perpustakaan (ruang baca) yang dapat di akses secara online melalui :&nbsp;</p><p><a href=\"https://elib.fk.unmul.ac.id/\">1. &nbsp;https://elib.fk.unmul.ac.id/</a></p><p><a href=\"https://e-resources.perpusnas.go.id/\">2. https://e-resources.perpusnas.go.id/</a></p>', NULL, 'ajisudjay', '2023-03-02'),
(48, 'Download', 'download', 2, 33, '<figure class=\"table\"><table><tbody><tr><td>NO</td><td>JENIS</td><td>FILE</td><td>PRODI</td></tr><tr><td>1</td><td>PANDUAN</td><td><p><a href=\"https://drive.google.com/file/d/1O-IdpHJBabhOLAiCb7yQkl4H35UKIulU/view?usp=sharing\">https://drive.google.com/file/d/1O-IdpHJBabhOLAiCb7yQkl4H35UKIulU/view?usp=sharing</a></p><p><a href=\"https://drive.google.com/file/d/16KJkj0yLyxqEvfN0jckTogtO0BOIbe8v/view?usp=sharing\">https://drive.google.com/file/d/16KJkj0yLyxqEvfN0jckTogtO0BOIbe8v/view?usp=sharing</a></p><p><a href=\"https://drive.google.com/file/d/1k4oUJhKTkhA_RFCjpLnwspTrgx_HlukW/view?usp=sharing\">https://drive.google.com/file/d/1k4oUJhKTkhA_RFCjpLnwspTrgx_HlukW/view?usp=sharing</a></p><p><a href=\"https://drive.google.com/file/d/1iJxs1NePaxkH5V60x4XkjRtAhpCeBnkD/view?usp=sharing\">https://drive.google.com/file/d/1iJxs1NePaxkH5V60x4XkjRtAhpCeBnkD/view?usp=sharing</a></p><p><a href=\"https://drive.google.com/file/d/1GsZ-bhTndoBmIJqQmRuzhH7YvyRrmJ_U/view?usp=sharing\">https://drive.google.com/file/d/1GsZ-bhTndoBmIJqQmRuzhH7YvyRrmJ_U/view?usp=sharing</a></p></td><td>S1 - KEDOKTERAN</td></tr><tr><td>2</td><td>PANDUAN</td><td><p><a href=\"https://drive.google.com/drive/folders/1E57Ffc380bBe5sCpMSDOMyvJKexGx344?usp=sharing\">Buku Panduan Akademik</a>&nbsp;2018</p><p><a href=\"https://drive.google.com/drive/folders/1oPGBceSLP0Zis9wdTwX59EF61eldfl-b?usp=sharing\">Pedoman Skripsi</a></p><p><a href=\"https://drive.google.com/drive/folders/1dlLFS4uOIMnAQULeLnIOVYqNQX2PRCDs?usp=sharing\">Peraturan Akademik</a></p></td><td>S1 - KEDOKTERAN GIGI</td></tr><tr><td>6</td><td>MODUL</td><td><p>K<a href=\"https://drive.google.com/drive/folders/1vH_rwrj1gZHrD-r86RkCTGE-tTIQKV84\">eterampilan Medik KG 1</a></p><p><a href=\"https://drive.google.com/drive/folders/1vH_rwrj1gZHrD-r86RkCTGE-tTIQKV84\">Keterampilan Medik KG 2</a></p><p><a href=\"https://drive.google.com/drive/folders/1vH_rwrj1gZHrD-r86RkCTGE-tTIQKV84\">Keterampilan Medik KG 3</a></p><p><a href=\"https://drive.google.com/drive/folders/1vH_rwrj1gZHrD-r86RkCTGE-tTIQKV84\">Keterampilan Medik KG 4</a></p><p><a href=\"https://drive.google.com/drive/folders/1vH_rwrj1gZHrD-r86RkCTGE-tTIQKV84\">Keterampilan Medik KG 5</a></p><p><a href=\"https://drive.google.com/drive/folders/1vH_rwrj1gZHrD-r86RkCTGE-tTIQKV84\">Keterampilan Medik KG 6</a></p><p><a href=\"https://drive.google.com/drive/folders/1vH_rwrj1gZHrD-r86RkCTGE-tTIQKV84\">Keterampilan Medik KG 7</a></p><p><a href=\"https://drive.google.com/drive/folders/1S9MIxaPlz8dky6axmqKNPGLCYKiAQYea\">Checklist</a></p></td><td>S1 - KEDOKTERAN GIGI</td></tr><tr><td>3</td><td>PANDUAN</td><td><p><a href=\"https://drive.google.com/drive/folders/1MB8Y9Q3XUOYPLZvNZEqn3t6D965aH2LL?usp=sharing\"><u>PANDUAN PELAKS PEND PROFESI 2018</u></a></p><p><a href=\"https://drive.google.com/drive/folders/14fNnN8dlRNzydZuL9QMxCGTKS_6rIvRO?usp=sharing\">peraturan_akademik_unmul_2012</a></p><p><a href=\"https://drive.google.com/drive/folders/14eXScPrgAeAEqrC45_B1o9eCqQv9JjZW?usp=sharing\">Profesi</a></p><p><a href=\"https://drive.google.com/drive/folders/1XKr9DMSopRoYZ5ikq-VxbBccmsvqC940\">RPS Program Studi Profesi Dokter Gigi</a></p></td><td>PROFESI DOKTER GIGI</td></tr><tr><td>4</td><td>PANDUAN</td><td><a href=\"https://drive.google.com/drive/folders/1VtFLfz7Id19XjrwAEic4-g8sgpvpNFOx?usp=share_link\">https://drive.google.com/drive/folders/1VtFLfz7Id19XjrwAEic4-g8sgpvpNFOx?usp=share_link</a></td><td>SPESIALIS BEDAH</td></tr><tr><td>&nbsp;</td><td>MODUL</td><td><a href=\"https://drive.google.com/drive/folders/13cRPK0P3C1O7Q5hnUhc5ZL7jYkSlvnKv?usp=share_link\">https://drive.google.com/drive/folders/13cRPK0P3C1O7Q5hnUhc5ZL7jYkSlvnKv?usp=share_link</a></td><td>SPESIALIS BEDAH</td></tr></tbody></table></figure>', NULL, 'ajisudjay', '2023-03-02'),
(49, 'Penelitian', 'penelitian', 2, 30, '<p>Fakultas Kedokteran memiliki beberapa jurnal di antaranya :</p><p>1.&nbsp;&nbsp;&nbsp; <a href=\"http://e-journals.unmul.ac.id/index.php/JKM\">http://e-journals.unmul.ac.id/index.php/JKM</a></p><p>2.&nbsp;&nbsp; <a href=\"http://e-journals.unmul.ac.id/index.php/MOLAR\">http://e-journals.unmul.ac.id/index.php/MOLAR</a></p><p>3.&nbsp;&nbsp; <a href=\"http://e-journals.unmul.ac.id/index.php/JKPBK\">http://e-journals.unmul.ac.id/index.php/JKPBK</a></p>', NULL, 'ajisudjay', '2023-03-02'),
(50, 'PkM', 'pkm', 3, 30, '<p><span style=\"background-color:rgb(255,255,255);color:rgb(77,77,77);\">Fakultas Kedokteran memiliki beberapa pengabdian kepada masyarakat dari dosen-dosen di antaranya :</span></p><figure class=\"table\" style=\"width:783px;\"><table style=\"background-color:rgb(255, 255, 255);border:1px solid rgb(233, 236, 239);\"><tbody><tr><td><strong>NO</strong></td><td><strong>Nama Dosen</strong></td><td><strong>Nama Kegiatan</strong></td></tr><tr><td>1.<br>&nbsp;</td><td>Dr.drg. Sinar Yani, M.Kes<br>&nbsp;</td><td><ul><li>Teledentistry Tema : Konsultasi Gigi Bulan Kesehatan Gigi Nasional 2020</li><li>Tim Konsultasi Kesehatan MEDULINE (Medical Unmul Go Online) Fakultas Kedokteran Universitas Mulawarman Tahun 2020</li><li>Edukasi Kesehatan Gigi dan Mulut Penyandang Down’s Syndrome dan Keluarganya di Samarinda 2021</li><li>Tim Konsultasi kesehatan MEDULINE FK UNMUL</li><li>Konsultan teledentistry konsultasi gigi bulan kesehatan gigi nasional 2020</li><li>pembimbing kegiatan baksos WOHD HIMA KG</li><li>Dosen pembimbing lapangan KKNT Covid-19</li></ul></td></tr></tbody></table></figure>', NULL, 'ajisudjay', '2023-03-02'),
(51, 'Roadmap Penelitian', 'roadmap-penelitian', 1, 30, '<p>ROADMAP PENELITIAN</p>', NULL, 'ajisudjay', '2023-03-02'),
(52, 'zcxzczcz', 'zcxzczcz', 1, 32, '<p>sdsdfsdfsdf</p>\r\n', NULL, 'ajisudjay', '2023-03-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tendik`
--

CREATE TABLE `tendik` (
  `id` int(11) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `ruangan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tendik`
--

INSERT INTO `tendik` (`id`, `nip`, `nama`, `jabatan`, `ruangan`, `gambar`) VALUES
(2, 'ertetert', 'fdgdgdf', 'dfgd', 'fdgdg', '1678231163_23f29528497fcfdc0864.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `password`, `nama`, `level`, `file`) VALUES
('ajisudjay', 'MTIzNDU2', 'Aji Sudjay', 'Superadmin', '1677191261_4359d8c87f13ad17ac39.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelompok`
--
ALTER TABLE `kelompok`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laboratorium`
--
ALTER TABLE `laboratorium`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mainmenu`
--
ALTER TABLE `mainmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pejabat`
--
ALTER TABLE `pejabat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mainmenu` (`id_mainmenu`);

--
-- Indeks untuk tabel `tendik`
--
ALTER TABLE `tendik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kelompok`
--
ALTER TABLE `kelompok`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `laboratorium`
--
ALTER TABLE `laboratorium`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `mainmenu`
--
ALTER TABLE `mainmenu`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pejabat`
--
ALTER TABLE `pejabat`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `tendik`
--
ALTER TABLE `tendik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `submenu`
--
ALTER TABLE `submenu`
  ADD CONSTRAINT `submenu_ibfk_1` FOREIGN KEY (`id_mainmenu`) REFERENCES `mainmenu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
