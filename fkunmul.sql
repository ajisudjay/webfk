-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Okt 2023 pada 09.04
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

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
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `dilihat` int(11) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  `penulis` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `slug`, `isi`, `banner`, `tag`, `dilihat`, `timestamp`, `penulis`, `kategori`, `tanggal`) VALUES
(7, 'Yudisium Sarjana Kedokteran', 'Yudisium.Sarjana.Kedokteran', '<span xss=removed>PELATIHAN ETIK GCP (GOOD CLINICAL PRACTICE) DAN AKREDITASI KOMISI ETIK 2019 Kerjasama Komisi Etik Penelitian dan Pengembangan Kesehatan Nasional (KEPPKN) Kementerian Kesehatan RI dengan Komisi Etik Penelitian (KEPK) Fakultas Kedokteran Universitas Mulawarman Tanggal 23-25 Nopember 2018 Link: http://fk.unmul.ac.id/public/penelitian/d19eadad804b88995ab502d9b27e305fGCPR.pdf</span>', 'pengumuman_1413420142.jpg', 'Yudisium', 100, '2018-07-20 00:00:00', 'prodikedokteran', 'Pengumuman', '2018-07-20'),
(8, 'Pelatihan Etik GCP', 'Pelatihan.Etik.GCP', '<span xss=removed>Pendaftaran Yudisium Sarjana Kedokteran Periode Januari 2019 dibuka dari tanggal 26 Desember s/d 31 Desember 2018. Pendaftaran ke bagian akademik pada jam kerja.</span>', 'pengumuman_1934780529.jpg', 'Pelatihan', 100, '2018-10-08 00:00:00', 'admin', 'Pengumuman', '2018-10-08'),
(9, 'Yudisium Sarjana Kedokteran', 'Yudisium.Sarjana.Kedokteran', '<span xss=removed>Seminar Nasional 2019</span>', 'pengumuman_165844438.jpeg', 'Yudisium', 100, '2018-12-26 00:00:00', 'admin', 'Pengumuman', '2018-12-26'),
(10, 'Seminar Nasional', 'Seminar.Nasional', '<span xss=removed>Seleksi bakal Calon Dekan FK Unmul</span>', 'pengumuman_878243113.jpeg', 'Seminar', 100, '2019-09-16 00:00:00', 'admin', 'Pengumuman', '2019-09-16'),
(11, 'Pemilihan Dekan FK Unmul', 'Pemilihan.Dekan.FK.Unmul', '<span xss=removed>Pengumuman seleksi bakal Calon Dekan FK Unmul</span>', 'pengumuman_1996307192.jpg', 'Pemilihan, Dekan', 100, '2020-07-02 00:00:00', 'admin', 'Pengumuman', '2020-07-02'),
(12, 'Pengumuman Pemilihan Dekan FK Unmul', 'Pengumuman.Pemilihan.Dekan.FK.Unmul', '<span xss=removed>Perpanjangan waktu penjaringan bakal calon dekan Fakultas Kedokteran UNIVERSITAS MULAWARMAN? periode tahun 2020-2024</span><br>', 'pengumuman_2033210213.jpg', 'Pemilihan, Dekan', 100, '2020-07-02 00:00:00', 'admin', 'Pengumuman', '2020-07-02'),
(13, 'Perpanjangan Pengumuman Pemilihan Dekan FK Unmul', 'Perpanjangan.Pengumuman.Pemilihan.Dekan.FK.Unmul', '<span xss=removed>Penetapan Bakal Calon Dekan Fakultas Kedokteran Universitas Mulawarman Periode 2020-2024</span><br>', 'pengumuman_885216072.jpg', 'Pemilihan, Dekan', 100, '2020-07-15 00:00:00', 'admin', 'Pengumuman', '2020-07-15'),
(14, 'Penetapan BSCalon Dekan FK', 'Penetapan.BSCalon.Dekan.FK', '<p class=\"MsoNormal\" xss=removed><b><u><span xss=removed>PENGUMUMAN PEMBAYARAN SUMBANGAN PENGEMBANGAN INSTITUSI (SPI) FAKULTAS KEDOKTERAN 2020</span></u></b><span xss=removed><o></o></span></p> <p class=\"MsoNormal\" xss=removed><span xss=removed><o>?</o></span></p> <p class=\"MsoNormal\" xss=removed><span xss=removed>1.</span><span xss=removed>???</span><span xss=removed>Pembayaran SPI dibayarkan sesuai dengan besaran jumlah pada surat pernyataan kesanggupan yang di isi oleh orang tua mahasiswa.<o></o></span></p> <p class=\"MsoNormal\" xss=removed><span xss=removed>2.</span><span xss=removed>????</span><span xss=removed>Pembayaran SPI dilakukan dalam 1 (satu) kali pembayaran dan tidak diperkenankan untuk dicicil.<o></o></span></p> <p class=\"MsoNormal\" xss=removed><span xss=removed>3.</span><span xss=removed>????</span><span xss=removed>Pembayaran SPI dapat dilakukan mulai tanggal 1 September s/d 31 Oktober 2020.<o></o></span></p> <p class=\"MsoNormal\" xss=removed><span xss=removed>4.</span><span xss=removed>????</span><span xss=removed>Mahasiswa melakukan pembayaran dengan menggunakan Nomor Peserta SMMPTN dan pembayaran dapat dilakukan di Bank MANDIRI/BNI/BTN/BANK KALTIM/BANK MUAMALAT.</span></p><p class=\"MsoNormal\" xss=removed><span xss=removed>5.</span><span xss=removed>??</span><span xss=removed>Setelah pembayaran selesai dapat melaporkan Bukti Bayar berbentuk Foto ke Whatsapp Cp. 0852-4630-1311 atas nama Merynda Afriyani.</span><br></p>', 'pengumuman_1340642412.jpg', 'Pemilihan, Dekan', 100, '2020-08-02 00:00:00', 'admin', 'Pengumuman', '2020-08-02'),
(15, 'Pengumuman Pembayaran SPI 2020', 'Pengumuman.Pembayaran.SPI.2020', 'Ujian CBT dilakukan ......', 'pengumuman_822947141.jpg', 'Pembayaran SPI', 100, '2020-09-01 00:00:00', 'admin', 'Pengumuman', '2020-09-01'),
(20, 'Ujian CBT', 'Ujian.CBT', '<div xss=removed><span xss=removed>Pengenalan Kehidupan Kampus bagi Mahasiswa Baru (PKKMB) merupakan wahana bagi pemimpin perguruan tinggi untuk memperkenalkan dan mempersiapkan mahasiswa baru dalam proses transisi menjadi mahasiswa yang dewasa dan mandiri, serta mempercepat proses adaptasi mahasiswa dengan lingkungan yang baru dan memberikan bekal untuk keberhasilannya menempuh pendidikan di perguruan tinggi maka dilakukan Pengenalan Kehidupan Kampus Bagi Mahasiswa Baru (PKKMB).</span></div><div xss=removed><span xss=removed><br></span></div><div xss=removed><span xss=removed>PKKMB Fakultas Kedokteran Universitas Mulawarman tahun 2021 dilakukan secara <i>online, </i>karena adanya pandemi covid-19 yang tidak memungkinkan dilakukan secara <i>offline</i>.</span></div>', 'kegiatan_1554413053.jpg', '-', 100, '2021-05-29 00:00:00', 'ALFAJRIANI', 'Kegiatan', '2021-05-29'),
(21, 'Acara PKKMB tahun 2021', 'Acara.PKKMB.tahun.2021', '<p> <a href=\"https://fk.unmul.ac.id/b_files/loadattach/Pengumuman-penerimaan-20212022-ganjil_378373447.jpg\" target=\"_blank\">https://fk.unmul.ac.id/b_files/loadattach/Pengumuman-penerimaan-20212022-ganjil_378373447.jpg</a></p>', 'kegiatan_1965905608.jpg', 'PKKMB', 100, '2021-08-16 00:00:00', 'ALFAJRIANI', 'Kegiatan', '2021-08-16'),
(22, 'Penerimaan Mahasiswa Baru Prodi Spesialis Bedah Semester Ganjil 2021/2022', 'Penerimaan.Mahasiswa.Baru.Prodi.Spesialis.Bedah.Semester.Ganjil.2021.2022', '<p> </p><p>Kegiatan Visite Besar PPDS I ILMU BEDAH dilaksanakan 1 Minggu sekali setiap hari Rabu, yang dipimpin oleh Konsulen dan diikuti seluruh Residen.<br></p><p><a href=\"https://fk.unmul.ac.id/b_files/loadattach/Visite-Besar-Prodi-Bedah_144851962.jpeg\" target=\"_blank\">https://fk.unmul.ac.id/b_files/loadattach/Visite-Besar-Prodi-Bedah_144851962.jpeg</a></p><p><a href=\"https://fk.unmul.ac.id/b_files/loadattach/Visite-Besar-Prodi-Bedah_1878474177.jpeg\" target=\"_blank\">https://fk.unmul.ac.id/b_files/loadattach/Visite-Besar-Prodi-Bedah_1878474177.jpeg</a><a href=\"https://fk.unmul.ac.id/b_files/loadattach/Visite-Besar-Prodi-Bedah_1878474177.jpeg\" target=\"_blank\"></a></p><p><a href=\"https://fk.unmul.ac.id/b_files/loadattach/Visite-Besar-Prodi-Bedah_227697520.jpeg\" target=\"_blank\">https://fk.unmul.ac.id/b_files/loadattach/Visite-Besar-Prodi-Bedah_227697520.jpeg</a><a href=\"https://fk.unmul.ac.id/b_files/loadattach/Visite-Besar-Prodi-Bedah_227697520.jpeg\" target=\"_blank\"></a></p><p><a href=\"https://fk.unmul.ac.id/b_files/loadattach/Visite-Besar-Prodi-Bedah_2127415192.jpeg\" target=\"_blank\">https://fk.unmul.ac.id/b_files/loadattach/Visite-Besar-Prodi-Bedah_2127415192.jpeg</a><br></p><p><a href=\"https://fk.unmul.ac.id/b_files/loadattach/Visite-Besar-Prodi-Bedah_1994290837.jpeg\" target=\"_blank\">https://fk.unmul.ac.id/b_files/loadattach/Visite-Besar-Prodi-Bedah_1994290837.jpeg</a><br><br></p>', 'pengumuman_2082324183.jpg', 'Pengumuman Penerimaan', 100, '2021-04-01 00:00:00', 'prodispesialisbedah', 'Pengumuman', '2021-04-01'),
(23, 'Visite Besar', 'Visite.Besar', '<p>Kursus BSS I (Basic Surgical Skill I) oleh Kolegium Ilmu bedah Indonesia secara daring, dilaksankan di Gedung Teaching Center FK UNMUL<br></p><p><br></p><p><a href=\"https://fk.unmul.ac.id/b_files/loadattach/Kursus-BSS-I-ONLINE_497783078.jpeg\" target=\"_blank\">https://fk.unmul.ac.id/b_files/loadattach/Kursus-BSS-I-ONLINE_497783078.jpeg</a></p><p><a href=\"https://fk.unmul.ac.id/b_files/loadattach/Kursus-BSS-I-ONLINE_1127412912.jpeg\" target=\"_blank\">https://fk.unmul.ac.id/b_files/loadattach/Kursus-BSS-I-ONLINE_1127412912.jpeg</a><a href=\"https://fk.unmul.ac.id/b_files/loadattach/Kursus-BSS-I-ONLINE_1127412912.jpeg\" target=\"_blank\"></a></p><p><a href=\"https://fk.unmul.ac.id/b_files/loadattach/Kursus-BSS-I-ONLINE_1315843225.jpeg\" target=\"_blank\">https://fk.unmul.ac.id/b_files/loadattach/Kursus-BSS-I-ONLINE_1315843225.jpeg</a><a href=\"https://fk.unmul.ac.id/b_files/loadattach/Kursus-BSS-I-ONLINE_1315843225.jpeg\" target=\"_blank\"></a></p><p><a href=\"https://fk.unmul.ac.id/b_files/loadattach/Kursus-BSS-I-ONLINE_336275415.jpeg\" target=\"_blank\">https://fk.unmul.ac.id/b_files/loadattach/Kursus-BSS-I-ONLINE_336275415.jpeg</a><a href=\"https://fk.unmul.ac.id/b_files/loadattach/Kursus-BSS-I-ONLINE_336275415.jpeg\" target=\"_blank\"></a></p><p><a href=\"https://fk.unmul.ac.id/b_files/loadattach/Kursus-BSS-I-ONLINE_1126534322.jpeg\" target=\"_blank\">https://fk.unmul.ac.id/b_files/loadattach/Kursus-BSS-I-ONLINE_1126534322.jpeg</a><a href=\"https://fk.unmul.ac.id/b_files/loadattach/Kursus-BSS-I-ONLINE_1126534322.jpeg\" target=\"_blank\"></a></p><p><a href=\"https://fk.unmul.ac.id/b_files/loadattach/Kursus-BSS-I-ONLINE_1550701493.jpeg\" target=\"_blank\">https://fk.unmul.ac.id/b_files/loadattach/Kursus-BSS-I-ONLINE_1550701493.jpeg</a><br><br><br><br><br><br></p>', 'kegiatan_705799806.jpeg', 'Visite Besar Bedah', 100, '2021-06-09 00:00:00', 'prodispesialisbedah', 'Kegiatan', '2021-06-09'),
(24, 'Kursus BSS I (Basic Surgical Skill I)', 'Kursus.BSS.I.Basic.Surgical.Skill.I.', '<p>Ujian Nasional Bedah Dasar diikuti oleh yang dilaksanakan oleh Kolegium Ilmu Bedah Indonesia secara online. </p><p>dr. Fritz Nahusuly, Sp.B sebagai pengawas dan dilaksanakan di gedung Teaching Center FK UNMUL<br></p><p><a href=\"https://fk.unmul.ac.id/b_files/loadattach/Ujian-Nasional-Bedah-Dasar_1972572494.jpeg\" target=\"_blank\">https://fk.unmul.ac.id/b_files/loadattach/Ujian-Nasional-Bedah-Dasar_1972572494.jpeg</a><a href=\"https://fk.unmul.ac.id/b_files/loadattach/Ujian-Nasional-Bedah-Dasar_1972572494.jpeg\" target=\"_blank\"></a></p><p><a href=\"https://fk.unmul.ac.id/b_files/loadattach/Ujian-Nasional-Bedah-Dasar_1671680504.jpeg\" target=\"_blank\">https://fk.unmul.ac.id/b_files/loadattach/Ujian-Nasional-Bedah-Dasar_1671680504.jpeg</a><a href=\"https://fk.unmul.ac.id/b_files/loadattach/Ujian-Nasional-Bedah-Dasar_1671680504.jpeg\" target=\"_blank\"></a></p><p><a href=\"https://fk.unmul.ac.id/b_files/loadattach/Ujian-Nasional-Bedah-Dasar_1640417875.jpeg\" target=\"_blank\">https://fk.unmul.ac.id/b_files/loadattach/Ujian-Nasional-Bedah-Dasar_1640417875.jpeg</a><br><br><br></p>', 'kegiatan_1124126568.jpeg', 'KURSUS BSS I', 100, '2021-04-09 00:00:00', 'prodispesialisbedah', 'Kegiatan', '2021-04-09'),
(25, 'Ujian Nasional', 'Ujian.Nasional', '<div>[WEBINAR PENINGKATAN SISTEM IMUN DI MASA PANDEMI COVID-19]</div><div><br></div><div>Hadiri dan saksikanlah! ?</div><div>Webinar persembahan Program Studi Kedokteran, Fakultas Kedokteran Universitas Mulawarman dengan judul \"Peningkatan Sistem Imun di Masa Pandemi\".?</div><div><br></div><div>DAFTARKAN DIRI ANDA DI:</div><div>https://bit.ly/RegistImunFKUnmul</div><div><br></div><div>Webinar akan dilaksanakan pada:?</div><div><br></div><div>Kamis, 23 September 2021</div><div>Pukul 09.00-12.00 WITA</div><div>Via Zoom dan Live Youtube?</div><div><br></div><div>LINK ZOOM</div><div>Meeting ID: 941 4719 7011</div><div>Passcode: 925833</div><div>https://bit.ly/WebinarImunKedokteranUnmul</div><div><br></div><div>LINK YOUTUBE</div><div>https://bit.ly/LiveImunFKUnmul</div><div><br></div><div>Yang akan diisi dengan:?</div><div><br></div><div>OPENING REMARKS?</div><div>dr. Ika Fikriah, M.Kes.</div><div>Dekan Fakultas Kedokteran Universitas Mulawarman?</div><div><br></div><div>NARASUMBER</div><div>dr. Danang Ardiyanto</div><div>(Peneliti B2P2TOOT Badan Litbangkes Kemenkes RI,</div><div>Koordinator Rumah Riset Jamu Hortus Medicus B2P2TOOT)</div><div>Dengan membawakan materi \"Herbal Untuk Peningkatan Imunitas\".?</div><div><br></div><div>Dr. dr. Sjarif Ismail, M.Kes.</div><div>(Dosen Farmakologi FK Unmul)</div><div>Dengan membawakan materi \"Teknik Sederhana Manipulasi Tangan Untuk Tingkatkan Imunitas\"?</div><div><br></div><div>MODERATOR</div><div>dr. Meiliati Aminyoto, M.Kes., Sp.GK.</div><div>Dosen IKM FK Unmul?</div><div><br></div><div>MENANGKAN DOORPRIZE MENARIK!?</div><div><br></div><div>? SERTA DAPATKAN FREE SERTIFIKAT DAN ILMU YANG BERMANFAAT ?</div><div><br></div><div>Ditunggu kehadiran, bapak/ibu serta saudara/i sekalian di acara webinar ini!?</div><div><br></div><div>#MenujuFKUnggul2024#</div>', 'kegiatan_1168271402.jpeg', 'Ujian Nasional', 100, '2021-06-24 00:00:00', 'prodispesialisbedah', 'Kegiatan', '2021-06-24'),
(26, 'WEBINAR \"Peningkatan Sistem Imun di Masa Pandemi Covid-19\"', 'WEBINAR.Peningkatan.Sistem.Imun.di.Masa.Pandemi.Covid.19.', '<p> <a href=\"https://fk.unmul.ac.id/b_files/loadattach/Brosur-Penerimaan-TA-20212022-Genap_652449055.jpg\" target=\"_blank\">https://fk.unmul.ac.id/b_files/loadattach/Brosur-Penerimaan-TA-20212022-Genap_652449055.jpg</a></p>', 'kegiatan_743208791.jpeg', 'prodikedokteran', 100, '2021-09-23 00:00:00', 'prodikedokteran', 'Kegiatan', '2021-09-23'),
(27, 'Penerimaan Mahasiswa Baru Prodi Spesialis Bedah Semester Genap 2021/2022', 'Penerimaan.Mahasiswa.Baru.Prodi.Spesialis.Bedah.Semester.Genap.2021.2022', '<p class=\"MsoNormal\" xss=removed><b><span xss=removed>Webinar Peningkatan Sistem Imun di Masa Pandemi Covid-19<o></o></span></b></p> <p class=\"MsoNormal\" xss=removed><b><span xss=removed>?</span></b></p> <p class=\"MsoNormal\" xss=removed><span xss=removed>Dalam rangka memeriahkan Dies Natalis Unmul ke-59 dan Dies Natalis FK Unmul ke-20 Prodi Kedokteran mengadakan webinar dengan topik Peningkatan Sistem Imun di Masa Pandemi Covid-19.? Webinar dilaksanakan pada Kamis, 23 September 2021. Acara ini diikuti sebanyak 416 peserta. Peserta mengikuti kegiatan melalui zoom dan live streaming youtube. <o></o></span></p> <p class=\"MsoNormal\" xss=removed><span xss=removed>Dekan Fakultas Kedokteran, dr. Ika Fikriah, M.Kes membuka langsung kegiatan webinar ini. Adapun narasumber webinar ini yaitu dr. Danang </span><span lang=\"IN\" xss=removed>Ardiyanto</span><span xss=removed> dan Dr. dr. Sjarif Ismail,MKes. Dr. Danang merupakan </span><span lang=\"IN\" xss=removed>Peneliti di B2P2TOOT badan Litbangkes Kememkes RI</span><span xss=removed> dan </span><span lang=\"IN\" xss=removed>Koordinator Rumah Riset Jamu Hortus Medicus B2P2TOOT</span><span xss=removed>, sedangkan dr. Sjarif merupakan kepala laboratorium Farmakologi FK Unmul serta dosen pengajar untuk mata kuliah terapi komplementer pada blok elektif AIKI Wilayah IV.<o></o></span></p> <p class=\"MsoNormal\" xss=removed><span xss=removed>?Topik yang dibawakan oleh Dr. Danang yaitu Herbal untuk peningkatan sistem imum dan dr. Sjarif yaitu </span><span lang=\"IN\" xss=removed>Teknik Sederhana Manipulasi Tangan untuk Tingkatkan Imunitas</span><span xss=removed>. Acara dimoderatori oleh dr. Meiliati Aminyoto, M.Kes., Sp.GK. Acara berlangsung meriah dengan berbagai pertanyaan dari peserta. Selanjutnya dilakukan pemberian sertifikat secara virtual kepada narasumber dan moderator oleh ketua panitia, dr. Sulistiawati,MMedEd. Acara ditutup dengan pembagian <i>doorprize</i> dan foto Bersama. <o></o></span></p> <p class=\"MsoNormal\" xss=removed><span xss=removed>Acara dapat diikuti ulang melalui link youtube </span><span lang=\"IN\" xss=removed><a href=\"https://bit.ly/LiveImunFKUnmul\"><span lang=\"EN-US\">https://bit.ly/LiveImunFKUnmul</span></a></span><span xss=removed><o></o></span></p> <p class=\"MsoNormal\" xss=removed><span xss=removed>Semoga acara ini dapat bermanfaat bagi seluruh masyarakat. <o></o></span></p> <p class=\"MsoNormal\" xss=removed><span xss=removed>?</span></p> <p class=\"MsoNormal\" xss=removed><span xss=removed>Dirgahayu Unmul ke-59<o></o></span></p> <p class=\"MsoNormal\" xss=removed><span xss=removed>Dirgahayu FK Unmul ke-20<o></o></span></p>', 'pengumuman_715719106.jpg', 'Penerimaan', 100, '2021-10-01 00:00:00', 'prodispesialisbedah', 'Pengumuman', '2021-10-01'),
(29, 'Pelaksanaan Kegiatan Webinar Peningkatan Sistem Imun di Masa Pandemi Covid-19', 'Pelaksanaan.Kegiatan.Webinar.Peningkatan.Sistem.Imun.di.Masa.Pandemi.Covid.19', '<p class=\"MsoNormal\" align=\"center\" xss=removed><b><span lang=\"IN\" xss=removed>Yudisium </span></b><b><span xss=removed>Sarjana Kedokteran </span></b><b><span lang=\"IN\" xss=removed>Periode Oktober 20</span></b><b><span xss=removed>21</span></b></p> <p class=\"MsoNormal\" xss=removed><span lang=\"IN\" xss=removed>Pada hari </span><span xss=removed>Kamis, 21 Oktober 2021</span><span xss=removed> </span><span xss=removed>dilaksanakan</span><span lang=\"IN\" xss=removed> Yudisium Sarjana Kedokteran</span><span xss=removed> periode Oktober 2021. Pelaksanaan yudisum ini bersamaan dengan Yudisium Sarjana Kedokteran Gigi dan Ucap janji D3 Keperawatan</span><span lang=\"IN\" xss=removed>. </span><span xss=removed>Acara berlangsung secara virtual melalui zoom. <o></o></span></p> <p class=\"MsoNormal\" xss=removed><span lang=\"IN\" xss=removed>Koordinator Program Studi Kedokteran FK Unmul, dr. </span><span xss=removed>Sulistiawati, MMedEd membacakan laporan peserta yudisium serta peserta terbaik pada periode ini. Sebanyak 21 orang mahasiswa mengikuti Yudisium S.Ked ini. </span><span lang=\"IN\" xss=removed>Setelah itu, mahasiswa mengucapkan janji dokter muda yang dipimpin oleh Wakil Dekan bidang </span><span xss=removed>Akadmeik, </span><span lang=\"IN\" xss=removed>alumni dan kemahasiswaan FK Unmul, </span><span xss=removed>Dr. dr. Siti Khotimah, M.Kes</span><span lang=\"IN\" xss=removed>, dilanjutkan dengan penyerahan mahasiswa secara simbolis ke Prodi Profesi Dokter. Dalam sambutannya, Dekan FK Unmul menyatakan bahwa mahasiswa </span><span xss=removed>akan praktek dengan pasien langsung dengan bimbingan dosen. Mahssiwa diminta untuk tetap menjaga nama baik almamater dan terus pertahankan akreditasi unggul yang telah diraih oleh Prodi Kedokteran dan profesi dokter. </span><span lang=\"IN\" xss=removed>Mahasiswa juga diharapkan agar selalu mengingat jasa orang tua dan guru-guru yang telah membantu mereka hingga saat ini.</span></p> <p class=\"MsoNormal\" xss=removed><span lang=\"IN\" xss=removed>Lulusan terbaik pada yudisium periode ini yaitu Grace Maychale Lambe</span><span xss=removed> sebagai terbaik pertama sedangkan terbaik ke 2 dan 3 diraih oleh Annisa Puteri Nuratifah dan Deenadearlova Putri Daryani. </span><span lang=\"IN\" xss=removed>Acara yudisium ditutup dengan ucapan selamat dari seluruh dosen yang hadir</span><span lang=\"IN\" xss=removed> </span><span lang=\"IN\" xss=removed>kepada mahasiswa dan foto bersama</span><span xss=removed> secara virtual.</span><span xss=removed> <span lang=\"IN\"><o></o></span></span></p>', 'berita_68536793.jpg', 'prodikedokteran', 100, '2021-10-04 00:00:00', 'prodikedokteran', 'Berita', '2021-10-04'),
(30, 'Yudisium Sarjana Kedokteran Periode Oktober 2021', 'Yudisium.Sarjana.Kedokteran.Periode.Oktober.2021', '<span lang=\"EN-US\" xss=removed>Kuliah tamu untuk meningkatkan pengetahuan dan pemahaman mengenai keperawatan tropis, maka perlu dilakukan benchmarking implementasi keperawatan tropis di negara lain, salah satunya adalah Malaysia. Oleh karena itu, Program studi diploma III Keperawatan akan melaksanakan kuliah tamu mengenai keperawatan tropis dan implementasi praktiknya di Malaysia.</span>', 'berita_270559031.jpeg', 'prodikedokteran', 100, '2021-10-21 00:00:00', 'prodikedokteran', 'Berita', '2021-10-21'),
(31, 'Kuliah Tamu Internasional Program Studi D3 Keperawatan', 'Kuliah.Tamu.Internasional.Program.Studi.D3.Keperawatan', 'Program Studi D3 Keperawatan melakukan serah terima praktek klinik mahasiswa tingkat 2 untuk stase keperawatan dasar dan keperawatan medikal bedah. Diharapkan dengan adanya kegiatan ini mampu meningkatkan pengetahuan dan keterampilan mahasiswa D3 Keperawatan dalam memberikan pelayanan kesehatan dan keperawatan.', 'kegiatan_1544915531.jpeg', 'kuliah tamu keperawatan; nursing ; tropis; IIUM Ma', 100, '2021-08-21 00:00:00', 'prodikeperawatan', 'Kegiatan', '2021-08-21'),
(32, 'Serah Terima Praktek Klinik Mahasiswa di RSUD AM Parikesit Tenggarong', 'Serah.Terima.Praktek.Klinik.Mahasiswa.di.RSUD.AM.Parikesit.Tenggarong', 'Prodi D3 Keperawatan melaksanakan kegiatan?Pelatihan Preceptorship-Mentor Model Approach yang dibawakan oleh Moh Afandi, S.Kep.,Ns.,MAN.,PhD. Kegiatan ini bertujuan untuk meningkatkan pengetahuan dan keterampilan pendidik klinik khususnya pendidik klinik keperawatan. Diharapkan dengan mengikuti kegiatan ini, peserta mampu memberikan proses pembimbingan dan transfer ilmu yang lebih baik lagi kepada mahasiswa keperawatan yang melaksanakan praktek di instansi masing-masing. Kegiatan ini diikuti oleh perawat dari berbagai instansi baik rumah sakit, puskesmas dan klinik homecare.?', 'kegiatan_560937228.jpeg', 'praktek mahasiswa; D3 Keperawatan ; RSUD Parikesit', 100, '2021-11-04 00:00:00', 'prodikeperawatan', 'Kegiatan', '2021-11-04'),
(33, 'Program Studi D3 Keperawatan Mengadakan Pelatihan Preceptorship-Mentor Model Approach', 'Program.Studi.D3.Keperawatan.Mengadakan.Pelatihan.Preceptorship.Mentor.Model.Approach', '<p class=\"MsoNormal\" xss=removed><b><span xss=removed>Program Studi Kedokteran Adakan Workshop Finalisasi Peninjauan Kurikulum Tahun 2021<o></o></span></b></p> <p class=\"MsoNormal\" xss=removed><span xss=removed>Pada hari senin, 13 desember 2021, program studi kedokteran mengadakan finalisasi peninjauan kurikulum tahun 2021. Bertempat di hotel bumi senyiur Samarinda, acara di buka oleh Dekan FK Unmul dr. Ika Fikriah, M.Kes. Acara ini melibatkan semua dosen prodi kedokteran dan profesi dokter.</span></p> <p class=\"MsoNormal\" xss=removed><span xss=removed>Dalam pemaparannya, Korprodi Kedokteran dr. Sulistiawati, MMedEd menyatakan bahwa peninjauan kurikulum bertujuan untuk melihat kembali kurikulum yang sudah ada. Peninjauan kurikulum ini dibuat berdasarkan university value, scientific value dan market signal. Berdasarkan ketiga hal tersebut kurikulum yang dirancang diharapkan mampu mempersiapkan lulusan untuk menghadapi tantangan di masa yang akan datang.?<o></o></span></p>', 'kegiatan_1333852777.jpg', 'nursing ; pelatihan; preseptorship', 100, '2021-12-03 00:00:00', 'prodikeperawatan', 'Kegiatan', '2021-12-03'),
(34, 'Program Studi Kedokteran Adakan Workshop Finalisasi Peninjauan Kurikulum Tahun 2021', 'Program.Studi.Kedokteran.Adakan.Workshop.Finalisasi.Peninjauan.Kurikulum.Tahun.2021', 'Program Studi D3 Keperawatan mengadakan kembali kuliah tamu untuk meningkatkan wawasan sivitas akademika prodi. Kuliah tamu series 03 ini mengangkat isu perawatan anak di daerah tropis. Kegiatan yang berlangsung pada hari selasa, 14 Desember 2021 dengan interaktif ini menghadirkan dua pemateri yang ahli dan berpengalaman di bidang keperawatan anak yakni&nbsp;Dr. Andi Fatmawati, M.Kep., Sp.Kep. An. (Dosen Poltekkes Palu) dengan materi \"Optimalisasi Kualitas Hidup dan Kesejahteraan Anak di Wilayah Tropis Pasca Pandemi\" dan&nbsp;Rita Puspasari, S.Pd., MPH (Dosen PSDK FK UNMUL) dengan materi \"Peran Posyandu di Masa Pasca Pandemi Dalam Peningkatan Kesehatan Ibu dan Anak\".&nbsp;', 'kegiatan_654155482.JPG', 'prodikedokteran', 100, '2021-12-16 00:00:00', 'prodikedokteran', 'Kegiatan', '2021-12-16'),
(35, 'Prodi D3 Keperawatan Melaksanakan Kuliah Tamu Series 03 Bahas Isu Perawatan Anak di Daerah Tropis', 'Prodi.D3.Keperawatan.Melaksanakan.Kuliah.Tamu.Series.03.Bahas.Isu.Perawatan.Anak.di.Daerah.Tropis', 'Program studi D3 Keperawatan mengadakan workshop kurikulum S1 Keperawatan dan Profesi Ners sebagai persiapan pembukaan program studi S1 Keperawatan dan Profesi Ners Fakultas Kedokteran Universitas Mulawarman. Kegiatan yang berlangsung pada hari kamis, 16 Desember 2021 ini menghadirkan pemateri yang handal di bidangnya. Materi pertama dibawakan oleh bapak Agus Setiawan, S.Kp.,MN.,DN yang merupakan ketua AIPNI (Asosiasi Institusi Pendidikan Ners Indonesia) dan dekan Fakultas Ilmu Keperawatan (FIK) Universitas Indonesia dengan tema \"penerapan kurikulum nasional S1 Keperawatan dan Profesi Ners\". Adapun materi kedua dibawakan oleh Ns Moh Syafar Sangkala, S.Kep.,Ns.,MANP dari Prodi Keperawatan Fakultas Keperawatan Universitas Hasanuddin dengan tema \"Penerapan kurikulum penciri S1 keperawatan dan Profesi Ners\". Diharapkan dengan adanya workshop ini mampu mematangkan persiapan pembukaan prodi baru yaitu S1 keperawatan dan Profesi Ners.&nbsp;', 'kegiatan_1094069235.jpeg', 'kuliah tamu keperawatan; nursing ; keperawatan ana', 100, '2021-12-14 00:00:00', 'prodikeperawatan', 'Kegiatan', '2021-12-14'),
(37, 'Program Studi D3 Keperawatan Melaksanakan Workshop Kurikulum S1 Keperawatan dan Profesi Ners', 'Program.Studi.D3.Keperawatan.Melaksanakan.Workshop.Kurikulum.S1.Keperawatan.dan.Profesi.Ners', '<p>Fakultas Kedokteran Gigi (FKG) Universitas Hasanuddin (Unhas), Fakultas Kedokteran (FK) Universitas Mulawarman (Unmul) serta Rumah Sakit Gigi dan Mulut Pendidikan (RSGMP) Unhas menyepakati kerja sama dalam bidang pengembangan tridarma perguruan tinggi.<br></p><p class=\"MsoNormal\"><o></o></p><p class=\"MsoNormal\">Kesepakatan tersebut tertuang melalui penandatanganan Perjanjian Kerja Sama (PKS) antara Dekan FKG Unhas (Prof. Muhammad Ruslin, drg., M.Kes., Ph.D., Sp.BM(K)., Dekan FK Unmul (dr. Ika Fikriah, M.Kes) dan Direktur RSGMP Unhas (Andi Tajrin, drg., M.Kes., Sp.BM(K).<o></o></p><p class=\"MsoNormal\">Kegiatan berlangsung mulai pukul 10.30 WITA yang bertempat di Ruang Rapat Utama Fakultas Kedokteran Unmul Kota Samarinda, Jum?t (14/01).<o></o></p><p class=\"MsoNormal\">Penandatanganan perjanjian kerjasama ini disaksikan oleh Ketua Departemen Ilmu Bedah Mulut dan Maksilofasial FKG Unhas (Prof. Dr. M Hendra Chandha, drg., MS), Ketua Senat Fakultas Kedokteran Unmul, Koordinator Program Studi, serta seluruh staf dosen Pendidikan Dokter Gigi FK Unmul.<o></o></p><p class=\"MsoNormal\">Dalam sambutannya, Dekan Fakultas Kedoteran Unmul (dr. Ika Fikriah, M.Kes), menyambut baik atas terjalinnya kembali penandatanganan kerja sama yang sudah lama dibina hingga saat ini.<o></o></p><p class=\"MsoNormal\">\"Saat ini sedang dibangun Gedung Rumah Sakit Gigi dan Mulut yang ditargetkan akan selesai di bulan Februari tahun 2022, yang nantinya sebagai wahana pendidikan utama mahasiswa profesi dokter gigi.\"<o></o></p><p class=\"MsoNormal\">\"Kerja sama ini diharapkan dapat memberikan manfaat yang besar bagi Prodi Kedokteran Gigi FK Unmul yang akan menghadapi akreditasi dan pengajuan izin operasional Rumah Sakit Gigi dan Mulut,\" terangnya.<o></o></p><p class=\"MsoNormal\">Ia pun juga berharap, setelah ada akreditasi, Prodi Kedokteran Gigi dapat menjadi Fakultas Kedokteran Gigi sesuai dengan amanat UU.<o></o></p><p class=\"MsoNormal\">\"Kami juga mendorong agar nantinya setelah akreditasi, Prodi Kedokteran Gigi dapat menjadi Fakultas Kedokteran Gigi sesuai dengan amanat UU,\" tutupnya.<o></o></p><p class=\"MsoNormal\">Senada dengan Dekan FKG Unhas, Prof. Ruslin menyambut baik kerjasama ini dan menyatakan bersedia berkolaborasi dan membimbing Prodi Kedokteran Gigi Unmul, agar terjadi percepatan peningkatan kualitas pendidikan yang lebih baik.<o></o></p><p class=\"MsoNormal\">Dirinya menambahkan, saat ini kolaborasi dan sinergitas antara fakultas dengan rumah sakit sangat dibutuhkan agar kualitas layanan pendidikan lebih cepat tercapai.<o></o></p><p class=\"MsoNormal\">Senada dengan Dekan FKG Unhas, Prof. Ruslin menyambut baik kerjasama ini dan menyatakan bersedia berkolaborasi dan membimbing Prodi Kedokteran Gigi Unmul, agar terjadi percepatan peningkatan kualitas pendidikan yang lebih baik.<o></o></p><p class=\"MsoNormal\">Dirinya menambahkan, saat ini kolaborasi dan sinergitas antara fakultas dengan rumah sakit sangat dibutuhkan agar kualitas layanan pendidikan lebih cepat tercapai.<o></o></p><p class=\"MsoNormal\">Sementara itu, Direktur Rumah Sakit Gigi dan Mulut Pendidikan (RSGMP) Unhas (A. Tajrin, drg., M.Kes., Sp.BM(K)., menyampaikan kewajiban institusi Fakultas Kedokteran Gigi memiliki Rumah Sakit Gigi dan Mulut yang terakreditasi sesuai amanat UU.</p><p class=\"MsoNormal\">Akreditasi RSGM akan menunjang akreditasi program studi dan RSGMP Unhas siap membantu mempersiapkan pengajuan proses akreditasi Rumah Sakit Gigi dan Mulut Unmul,\" ujarnya.</p><p class=\"MsoNormal\"><o></o></p><p class=\"MsoNormal\">Acara penandatanganan kerjasama berlangsung khidmat dan lancar hingga pukul 12.00 WITA.</p>', 'kegiatan_501735880.jpeg', 'nursing; workshop kurikulum; S1 Ners UNMUL;', 100, '2021-12-16 00:00:00', 'prodikeperawatan', 'Kegiatan', '2021-12-16'),
(41, 'FKG Unhas, FK Unmul, RSGMP Unhas Sepakat Kerjasama Pengembangan Tridarma', 'FKG.Unhas.FK.Unmul.RSGMP.Unhas.Sepakat.Kerjasama.Pengembangan.Tridarma', '<p class=\"MsoNormal\" xss=removed><span lang=\"id\" xss=removed>Pada </span><span xss=removed>28 Januari 2022,</span><span xss=removed> </span><span xss=removed>Himpunan Mahasiswa Kedokteran Fakultas Kedokteran Universitas Mulawarman (HIMA-Ked FK UNMUL) mengadakan kegiatan Musyawarah Besar (MUBES) HIMA-Ked FK UNMUL ke-I. Kegiatan ini diadakan secara online dan dihadiri oleh </span><span lang=\"id\" xss=removed>Wakil Dekan Bidang Akademik, Kemahasiswaan, dan Alumni Fakultas Kedokteran</span><span xss=removed> Universitas Mulawarman, Ketua Program Studi Kedokteran, Pembina HIMA-Ked FK UNMUL, seluruh calon pengurus HIMA-Ked FK UNMUL 2022/2023, dan perwakilan setiap angkatan (2019-2021) mahasiswa kedokteran FK UNMUL. Kegiatan ini dimulai dengan pembukaan dan pembacaan doa, serta dilanjutkan dengan penyanyian lagu Indonesia Raya dan Mars Universitas Mulawarman. Setelah itu, sambutan diberikan oleh Regina Anastasia Sanjaya (Ketua Panitia MUBES), Rudi Saputra (Ketua HIMA-Ked FK UNMUL 2022/2023), </span><span lang=\"id\" xss=removed>Dr. dr. Endang Sawitri,</span><span lang=\"id\" xss=removed> </span><span lang=\"id\" xss=removed>M.</span><span lang=\"id\" xss=removed> </span><span lang=\"id\" xss=removed>Kes</span><span xss=removed> (Pembina HIMA-Ked FK UNMUL), </span><span lang=\"id\" xss=removed>dr. Sulistiawati, M.</span><span lang=\"id\" xss=removed> </span><span lang=\"id\" xss=removed>Med.</span><span lang=\"id\" xss=removed> </span><span lang=\"id\" xss=removed>Ed</span><span lang=\"id\" xss=removed> </span><span xss=removed>(Ketua Program Studi Kedokteran sekaligus Pembina HIMA-Ked FK UNMUL), dan </span><span lang=\"id\" xss=removed>Dr. dr. Siti Khotimah,</span><span lang=\"id\" xss=removed> </span><span lang=\"id\" xss=removed>M.</span><span lang=\"id\" xss=removed> </span><span lang=\"id\" xss=removed>Kes</span><span xss=removed> (</span><span lang=\"id\" xss=removed>Wakil Dekan Bidang Akademik, Kemahasiswaan, dan Alumni </span><span xss=removed>FK UNMUL). </span><span lang=\"id\" xss=removed>Dalam </span><span xss=removed>MUBES ini,</span><span xss=removed> </span><span xss=removed>a</span><span lang=\"id\" xss=removed>da beberapa </span><span xss=removed>poin penting yang menjadi topik bahasan, yaitu</span><span lang=\"id\" xss=removed> pembahasan dan pengesahan AD/ART </span><span xss=removed>dan GBHO HIMA-Ked FK UNMUL.</span></p><p class=\"MsoNormal\" xss=removed><span xss=removed></span></p><p class=\"MsoNormal\" xss=removed><span xss=removed>Kegiatan peresmian HIMA-Ked FK UNMUL dilaksanakan pada 29 Januari 2022. Kegiatan diawali dengan pembukaan dan pembacaan doa. Kemudian, kegiatan dilanjutkan dengan pembacaan nama-nama pengurus HIMA-Ked FK UNMUL 2022/2023 mulai dari pembina hingga divisi-divisi HIMA-Ked FK UNMUL (KAPENMO, MEDINFO, PEKA, PENHUB, KASATRASI, dan SOSMALIA). Setelah itu, dilakukan pengambilan janji oleh seluruh pengurus HIMA-Ked FK UNMUL 2022/2023 yang dipimpin oleh </span><span lang=\"id\" xss=removed>Wakil Dekan Bidang Akademik, Kemahasiswaan, dan Alumni </span><span xss=removed>FK UNMUL</span><span lang=\"id\" xss=removed>, Dr. dr. Siti Khotimah,</span><span lang=\"id\" xss=removed> </span><span lang=\"id\" xss=removed>M.</span><span lang=\"id\" xss=removed> </span><span lang=\"id\" xss=removed>Kes</span><span xss=removed>.</span><span xss=removed> </span><span xss=removed>Kegiatan diakhiri dengan penyampaian amanat oleh </span><span lang=\"id\" xss=removed>Dr. dr. Siti Khotimah,</span><span lang=\"id\" xss=removed> </span><span lang=\"id\" xss=removed>M.</span><span lang=\"id\" xss=removed> </span><span lang=\"id\" xss=removed>Kes</span><span xss=removed> dan </span><span lang=\"id\" xss=removed>dr. Sulistiawati, M. Med. Ed</span><span xss=removed>.<o></o></span></p><p class=\"MsoNormal\" xss=removed><span xss=removed><br></span><span xss=removed> <span lang=\"id\"><o></o></span></span></p>', 'berita_1051064357.jpeg', 'PSPPDG FK Unmul', 100, '2022-01-17 00:00:00', 'prodidoktergigi', 'Berita', '2022-01-17'),
(42, 'Musyawarah Besar dan Peresmian Himpunan Mahasiswa Kedokteran Fakultas Kedokteran Universitas Mulawarman', 'Musyawarah.Besar.dan.Peresmian.Himpunan.Mahasiswa.Kedokteran.Fakultas.Kedokteran.Universitas.Mulawarman', '<p>Hari Kesehatan Gigi dan Mulut Dunia atau yang biasa disebut World Oral Health Day (WOHD) adalah hari yang diperingati oleh seluruh masyarakat di dunia pada tanggal 20 Maret setiap tahunnya sejak 2008. Pada mulanya Hari Kesehatan Gigi dan Mulut Dunia dirayakan pada tanggal 12 September berdasarkan kongres tahunan Forum Diskusi Ilmiah (FDI) di Dubai tahun 2007, namun telah berubah menjadi 20 Maret melalui hasil kongres tahunan FDI di Hongkong. </p><p>Turut memeriahkan peringatan Hari Kesehatan Gigi dan Mulut Dunia, HIMA KG Universitas Mulawarman khususnya program kerja Health Day Campaign mengadakan kegiatan World Oral Health Day dengan tujuan untuk melakukan promosi Kesehatan sebagai wujud kepedulian, meningkatkan jiwa sosial mahasiswa Kedokteran Gigi, dan wadah untuk menyalurkan informasi dibidang kesehatan secara langsung kepada sekolah sasaran, orang tua siswa, dan siswa tersebut sendiri.</p><p>?World Oral Health Day (WOHD) tahun 2022 ini mengusung tema Be Proud of Your Mouth. Pemilihan tema ini merupakan program kerja turunan dari Komisi C PSMKGI. Secara garis besar, konsep kampanye WOHD 2022 PSMKGI bersifat edukatif berupa live streaming Instagram dan twibbon campaign.</p><p>Fitria Ayu Cahyani, sebagai ketua panitia menyampaikan bahwa dalam acara WOHD ini terdapat dua rangkaian acara berupa Webinar yang bekerjasama dengan SD Negeri 006 Samarinda Kota. Lalu untuk rangkaian kegiatan yang kedua berupa live instagram yang dilaksanakan di hari yang berbeda dengan berkolaborasi bersama BEM FKG Universitas Lambung Mangkurat, Banjarmasin.</p><p>?Untuk webinar yang bekerjasama dengan SD Negeri 006 Samarinda Kota, didalam webinar itu ada beberapa detail acara diantaranya sikat gigi massal, senam gigi, pemaparan materi, dan quiz?, tuturnya.</p><p>Pemaparan materi pada webinar di sampaikan oleh drg. Nisa Muthi?ah, M.Kes dengan topik ?Kenali Sejak Dini Masa Peralihan Gigi Serta Peran Gigi Susu Pada Masa Pertumbuhan Gigi?</p><p>Febrian Diah Ayu Permani, Siswi kelas VI SD Negeri 006 Samarinda mengatakan senang sekali bisa mengikuti kegiatan sikat gigi massal yang dilaksanakan di webinar bersama teman-teman dan dokter.?</p><p>?Saya senang banget, tadi diajari cara menyikat gigi yang benar oleh bu dokter, saya jadi lebih tahu sekarang?. Di samping itu, siswa juga merasa sangat senang karena selain mendapatkan pelajaran, mereka juga berkesempatan mendapatkan hadiah bagi adik-adik yang dapat menjawab quiz dengan benar.</p><p>Sementara itu, Wali Kelas VI B SD Negeri 006 Samarinda Kota, Nur Rohmah Setiawati, S.Pd. mengungkapkan kebahagiaannya atas terlaksananya kegiatan tersebut. Beliau berharap kegiatan semacam itu mampu menuntun dan mengedukasi para siswa, terutama tentang kondisi kesehatan gigi dan mulut mereka.</p><p>?Menurut saya acaranya sangat bagus, karena memberikan pengetahuan langsung kepada peserta didik tentang kesehatan gigi, selain itu karena masih dalam situasi pandemi acara dilaksanakan secara daring walau sebenarnya besar harapan kami agar dilaksanakan secara tatap muka agar anak-anak dapat melihat langsung cara menjaga kesehatan giginya?, ungkapnya.</p><p>Ia juga menambahkan, bahwa kegiatan ini membawa banyak manfaat kepada peserta didik untuk lebih tahu cara menjaga kesehatan gigi dan mulut dengan benar. Ia juga berharap semoga kedepannya bisa bekerjasama kembali di kegiatan-kegiatan berikutnya.</p><p>Melalui kegiatan yang diadakan ini, semoga dapat meningkatkan kesadaran dan wawasan para siswa mengenai pentingnya memelihara kesehatan gigi dan mulut, siswa dapat mengaplikasikan yang telah didapatkan dari kegiatan dalam kehidupan sehari-hari.</p>', 'berita_1443243092.jpg', 'prodikedokteran', 100, '2022-02-16 00:00:00', 'prodikedokteran', 'Berita', '2022-02-16'),
(43, 'HIMA KG FK Unmul memperingati World Oral Health Day (WOHD) bersama siswa/i SDN 006 Samarinda Kota sebagai Upaya Meningkatkan Kesadaran Anak dalam Menj', 'HIMA.KG.FK.Unmul.memperingati.World.Oral.Health.Day.WOHD.bersama.siswa.i.SDN.006.Samarinda.Kota.sebagai.Upaya.Meningkatkan.Kesadaran.Anak.dalam.Menjag', '<p class=\"MsoNormal\"><span xss=removed>Dekan Fakultas Kedokteran (FK), Universitas Mulawarman (UNMUL), dr. Ika Fikriah., M.Kes bersama Dekan Fakultas Kedokteran Gigi (FKG), Universitas Gadjah Mada (UGM), Yogyakarta, drg. Suryono., Ph.D sepakat bekerjasama dalam aspek Tri Dharma Perguruan Tinggi. Kepastian tersebut tertuang dalam penandatanganan perjanjian kerjasama yang dilakukan, Jum?at, (25/03), di Ruang Pelatihan, Kampus FK UNMUL.</span></p><p class=\"MsoNormal\"></p><p class=\"MsoNormal\"><span xss=removed>Ruang lingkup perjanjian kerjasama ini diantaranya mencakup penyelenggaraan pendidikan, penelitian dan pengabdian kepada masyarakat. Terdapat pula, penyelenggaraan kegiatan ilmiah, seminar dan lokakarya serta kerjasama publikasi jurnal ilmiah nasional.</span></p><p class=\"MsoNormal\"><span xss=removed>Di dalam naskah kerjasama ini tertuang pula kolaborasi kedua belah pihak dalam hal kegiatan penelitian kedokteran gigi yang diselenggarakan oleh para pihak dalam bentuk kegiatan penelitian bersama, tukar menukar informasi penelitian, dan berbagai kegiatan penelitian lain yang disepakati oleh UNMUL dan UGM. Sedangkan pada pelaksanaan kegiatan pengabdian pada masyarakat keduanya sepakat menyusun program terpadu pengabdian pada masyarakat.</span></p><p class=\"MsoNormal\"><span xss=removed>?Terima kasih kunjungan Pak Dekan ke Fakultas kami sebagai bentuk silaturahmi, membagi ilmu sekaligus penandatanganan perjanjian kerjasama UGM dan UNMUL. Saat ini Program Studi Kedokteran Gigi (PSKG) di UNMUL masih berada di Fakultas Kedokteran, namun kami bertekad dan momentum hari ini menjadi pelecut semangat bagi kami agar kelak dapat menjadi Fakultas Kedokteran Gigi (FKG),? harap dr. Ika.</span></p><p class=\"MsoNormal\"><span xss=removed>?Semangat dan motivasi bapak ibu sekalian dari PSKG UNMUL sangat kami perlukan untuk ke depan UNMUL memilki FKG. Kami sangat perlu melakukan kerjasama ini untuk pengembangan Program Studi (Prodi) kami. Semoga kerjasama ini dapat memberikan hasil terbaik untuk kedua belah pihak,? tambahnya dalam acara yang berlangsung secara?</span><em><span xss=removed>Hybrid</span></em>, yang dihadiri Wakil Rektor Bidang Perencanaan, Kerjasama dan Humas, Prof. Dr. Ir. Bohari Yusuf., M.Si secara?<em><span xss=removed>virtual</span></em>?ini.</p><p class=\"MsoNormal\"><span xss=removed>Dalam kesempatan ini, Dekan juga menyampaikan profil singkat FK UNMUL yang saat ini memiliki enam Prodi yakni, S1 Prodi Kedokteran, Profesi Dokter, S1 Kedokteran Gigi, Profesi Kedokteran Gigi, Prodi Spesialis Bedah dan D3 Keperawatan.</span></p><p class=\"MsoNormal\"><span xss=removed>Tidak sekedar kegiatan seremonial semata, diruangan yang sama, sebelumnya dihadiri para mahasiswa PSKG dari berbagai angkatan digelar Kuliah Umum bertema \"Menjadi Tenaga Media Professional\" yang diisi oleh Dekan FKG UGM. Komponen dan unsur praktik dokter gigi professional diutarakan ?alumni?</span><em><span xss=removed>School of Dentistry</span></em>,?<em><span xss=removed>University</span></em>?of Tokushima, Japan<strong><span xss=removed>?</span></strong>itu.</p><p xss=removed><span xss=removed>Ia menjelaskan, pengertian?<em>informed consent</em>?merupakan suatu proses komunikasi, bukan hanya sekedar menandatangani formulir persetujuan. Persetujuan yang diberikan oleh pasien atau keluarga pasien terhadap suatu tindakan medis setelah mendapatkan suatu informasi dari dokter atau perawat yang berhak dan sesuai dengan kompetensinya.</span></p><p xss=removed><span xss=removed>?Setiap tindakan kedokteran atau kedokteran gigi yang akan dilakukan oleh dokter atau dokter gigi terhadap pasien harus mendapatkan persetujuan. Persetujuan diberikan setelah pasien mendapat penjelasan secara lengkap,? ungkapnya.</span></p>', 'kegiatan_643002002.jpg', 'WOHD22', 100, '2022-03-20 00:00:00', 'prodidoktergigi', 'Kegiatan', '2022-03-20'),
(45, 'FK UNMUL dan FKG UGM Jalin Kerjasama Tri Dharma Perguruan Tinggi', 'FK.UNMUL.dan.FKG.UGM.Jalin.Kerjasama.Tri.Dharma.Perguruan.Tinggi', 'Penerimaan Mahasiswa Baru Jalur Mandiri Tahun Akademik 2022/2023', 'berita_1739056639.jpg', 'PSPPDG FK Unmul', 100, '2022-03-25 00:00:00', 'prodidoktergigi', 'Berita', '2022-03-25'),
(46, 'Penerimaan Mahasiswa Baru Jalur Mandiri Tahun Akademik 2022/2023', 'Penerimaan.Mahasiswa.Baru.Jalur.Mandiri.Tahun.Akademik.2022.2023', 'MAHASISWA PRODI KEDOKTERAN LOLOS SELEKSI WILAYAH UNTUK BERLAGA DI TINGKAT NASIONAL PADA KOMPETISI KDMI & NUDC', 'pengumuman_178442854.jpeg', 'prodikedokteran', 100, '2022-06-17 00:00:00', 'prodikedokteran', 'Pengumuman', '2022-06-17'),
(47, 'MAHASISWA PRODI KEDOKTERAN LOLOS SELEKSI WILAYAH UNTUK BERLAGA DI TINGKAT NASIONAL PADA KOMPETISI KDMI & NUDC', 'MAHASISWA.PRODI.KEDOKTERAN.LOLOS.SELEKSI.WILAYAH.UNTUK.BERLAGA.DI.TINGKAT.NASIONAL.PADA.KOMPETISI.KDMI.NUDC', '<p xss=\"removed\"><font color=\"#293844\"><span xss=\"removed\">Hari Kesehatan Gigi Nasional</span></font>?adalah kampanye yang dilakukan untuk meningkatkan kesadaran akan kesehatan gigi dan mulut masyarakat Indonesia.</p><p xss=\"removed\"><font color=\"#293844\"><span xss=\"removed\">Hari Kesehatan Gigi Nasional</span></font>?atau disebut juga?HKGN?diperingati setiap tanggal 12 September.</p>', 'berita_1206176556.jpg', 'prodikedokteran', 100, '2022-07-01 00:00:00', 'prodikedokteran', 'Berita', '2022-07-01'),
(49, 'Pelaksanaan Kegiatan Hari Kesehatan Gigi Nasional 2022', 'Pelaksanaan.Kegiatan.Hari.Kesehatan.Gigi.Nasional.2022', 'Pimpinan &amp; Civitas Akademika Universitas Mulawarman Mengucapkan: Selamat &amp; Sukses Kepada Miftha Farid dan Andrian Bethel Atas Raihan Juara 3 Tingkat Nasional NUDC 2022 (<i>Novice Category</i>)', 'berita_25307639.jpg', 'HKGN 2022', 100, '2022-09-12 00:00:00', 'prodidoktergigi', 'Berita', '2022-09-12'),
(50, 'Juara 3 Tingkat Nasional NUDC 2022', 'Juara.3.Tingkat.Nasional.NUDC.2022', 'Pimpinan &amp; Civitas Akademika Universitas Mulawarman Mengucapkan: Selamat &amp; Sukses Kepada La Ode Muh. Sakaum M. Atas Raihan Pembicara Terbaik (Medali Perak) Kompetisi Debat Mahasiswa Indonesia (KDMI) Tingkat Nasional 2022', 'berita_1130133035.jpeg', 'prodikedokteran', 100, '2022-09-19 00:00:00', 'prodikedokteran', 'Berita', '2022-09-19'),
(51, 'Pembicara Terbaik KDMI Tingkat Nasional 2022', 'Pembicara.Terbaik.KDMI.Tingkat.Nasional.2022', '<p>Dalam rangka memperingati acara?Dies Natalis Ke-21 Fakultas Kedokteran Universitas Mulawarman. fakultas kedokteran mengadakan? kuliah tamu dengan judul \"Teknologi Nano dan Perannya dalam Dunia Medis serta Potensi Sumber Daya Hutan Tropis Lembap Kini dan Masa Datang\" yang dilaksanakan secara online dan offline.</p><p>offline? ? : di Lecture Theater Intrgrated Laboratory Lantai 1 Universitas Mulawarman (I-Lab UNMUL)</p><p>Online? ? : Meeting ID (939 5837 5931)</p><p><br></p><p><br></p>', 'berita_287412337.jpeg', 'prodikedokteran', 100, '2022-09-19 00:00:00', 'prodikedokteran', 'Berita', '2022-09-19'),
(52, 'Kuliah Tamu dalam Rangka Dies Natalis Ke-21 Fakultas Kedokteran Universitas Mulawarman', 'Kuliah.Tamu.dalam.Rangka.Dies.Natalis.Ke.21.Fakultas.Kedokteran.Universitas.Mulawarman', '<div>Samarinda-Dalam rangka memperingati hari ulang tahun PAPDI ( Perhimpunan Ahli Penyakit Dalam Indonesia) yang ke-65 maka PAPDI cabang Kaltim-Kaltara bekerjasama dengan Fakultas kedokteran Universitas Mulawarman beserta IDI cabang samarinda mengadakan beberapa rangkaian kegiatan yang terpadu secara livestreaming dengan PAPDI Pusat yaitu :</div><div>1. Senam Bugar</div><div>2. Kegiatan seminar lansia sehat dan produktif yang dibawakan oleh dr. Santy Sijabat, SpPD</div><div>3. Pemeriksaan dan konsultasi gratis yang dilakukan oleh para dokter spesialis penyakit dalam konsultan dari samarinda dan balikpapan.</div><div><br></div><div>Turut serta dalam kegiatan ini yakni ketua PAPDI kaltim-Kaltara dr Kuntjoro Yakti Sp.PD beserta para pengurus, Wakil Dekan II FK- Unmul Dr.dr.Rakhmat Bakhtiar, MPPM., Direktur RSUD AWS dr David Harijadi Mashoer, Sp.OT., Ketua IDI cabang Samarinda dr. Andriansyah, Sp.OG, Subsp.Onk.,? serta mahasiswa pre-klinik dan Klinik FK-Unmul.</div><div><br></div><div>Kegiatan yang berlangsung di Gedung Serbaguna FK-Unmul ini juga diikuti oleh Bapak/ibu Prolanis dari beberapa faskes yang tersebar di Samarinda. Mereka sangat antusias mengikuti? seluruh rangkaian kegiatan (senam, seminar dan kegiatan konsultasi dengan dokter spesialis) dari pukul 07.00 WITA hingga sekitar pukul 10.00 WITA.</div><div><br></div><div>Dalam sambutannya selaku ketua PAPDI kaltim-kaltara, dr Kuntjoro mengatakan bahwa kegiatan ini merupakan acara rutin dari PAPDI yang dilakukan secara serentak di seluruh wilayah Indonesia dengan harapan bahwa masyarakat dapat merasakan kebermanfaatan PAPDI dalam upaya memajukan derajat kesehatan sekaligus sebagai bentuk pengabdian masyarakat khususnya di wilayah kaltimtara. Beliau juga berharap akan adanya inovasi kegiatan-kegiatan PAPDI secara kolaboratif dalam upaya mengenalkan dan mendekatkan PAPDI kepada masyarakat luas.</div><div><br></div><div>Berikut Suasana Kegiatan :</div><div><br></div><div><img src=\"https://fk.unmul.ac.id/file/loadattach/PAPDI1_1397663109.jpeg\" xss=removed></div><div><br></div><div><img src=\"https://fk.unmul.ac.id/file/loadattach/PAPDI2_1188677855.jpeg\" xss=removed></div><div><br></div><div><img src=\"https://fk.unmul.ac.id/file/loadattach/PAPDI3_398702502.jpeg\" xss=removed><br></div>', 'kegiatan_1087396777.jpeg', 'Kuliah Tamu', 100, '2022-10-26 00:00:00', 'ALFAJRIANI', 'Kegiatan', '2022-10-26'),
(53, 'PERAYAAN HUT PAPDI KE-65 (GET TOGETHER)', 'PERAYAAN.HUT.PAPDI.KE.65.GET.TOGETHER.', '<p></p><p class=\"MsoNormal\" xss=\"removed\"><span lang=\"IN\">Pada tanggal 5 hingga 7 Desember 2022 Program Studi Kedokteran Gigi Fakultas Kedokteran, Universitas Mulawarman bekerjasama dengan Unilever mengadakan acara Bulan Kesehatan Gigi Nasional (BKGN) dengan tema ? Pulih Bersama Dengan Senyum Sehat Indonesia Bangkit Lebih Kuat, Bebas Gigi Berlubang? acara tersebut diselenggarakan selama 3 hari di gedung Program Studi Profesi Kedokteran Gigi dengan rangkaian acara :</span></p><p class=\"MsoNormal\" xss=\"removed\"><span lang=\"IN\"><o></o></span></p> <p class=\"MsoNormal\" xss=\"removed\">Tanggal 5 (Hari ke 1) : Pembukaan acara, Penyuluhan Tubercolosis (TB): Dr.dr Yadi, M.Si, Penyuluhan Pencegahan Karies Gigi: drg. Musnar Munir, Sp.KGA, Quiz, dan Pemeriksaan, konsultasi dan perawatan gigi gratis</p> <p class=\"MsoNormal\" xss=\"removed\"><span lang=\"IN\">Tanggal 6 (Hari ke 2) :?</span>Senam BKGN, Penyuluhan Demam Berdarah (DBD): dr. Annisa Munyi, Sp.A, M.Biomed, penyuluhan Benjolan di rongga mulut: drg. Christiani Nadya, Sp.BM, Quiz, dan?<span lang=\"IN\">P</span><span lang=\"IN\">emeriksaan, konsultasi dan perawatan gigi gratis</span></p> <p class=\"MsoNormal\" xss=\"removed\"><span lang=\"IN\">Tanggal 7 (Hari ke 3) ?:?</span>Senam BKGN, Talkshow, Penyuluhan Scabies: dr. Mona Zubaidah, M.Kes., Sp.ParK,?<span lang=\"IN\">Pencegahan Tubercolosis (TB):?</span>Ns. Mayusef Sukmana, S.Kep.,M.Kep, Ns. Bahtiar, S.Kep.,M.Kep.,Sp.Kep.Kom, Quiz, Pemeriksaan, konsultasi dan perawatan gigi gratis, Penutupan acara.</p> <p class=\"MsoNormal\" xss=\"removed\"><span lang=\"IN\">Acara ini dihadiri oleh Wakil Rektor III bidang akademik dan kemahasiswaan Dr. Ir. Encik Ahmad Syaifudin, MP, Wakil Dekan II FK-Unmul Dr.dr. Rakhmat Bakhtiar, MPPM. Deputi account management PT. Unilever Indonesia Brian Isa. Ketua Panitia Pelaksana drg. Nisa Muthi?ah, M.Kes mahasiswa pre-klinik dan Klinik Program Studi Kedokteran Gigi FK-Unmul.<o></o></span></p> <p class=\"MsoNormal\" xss=\"removed\"><span lang=\"IN\">Adapun perawatan gratis yang disediakan seperti Konsultasi Kesehatan umum, Penambalan Gigi, Pencabutan Gigi, Pembersihan Karang Gigi, Imunisasi Gigi pada Anak, Pengobatan Komplementer dan Fisioterapi yang dilakukan oleh para ahli dan spesialis. Acara ini dilaksanakan dengan mengikuti protokol kesehatan yang cukup ketat dimana seluruh peserta wajib vaksinasi dosis lengkap dan jika belum melakukan vaksinasi lengkap maka wajib dilakukan swab antigen.<o></o></span></p> <span lang=\"IN\" xss=\"removed\">Seluruh Kegiatan ini berlangsung secara meriah dan ramai karena antusiasme masyarakat untuk mengikuti seluruh rangkaian acara dari pukul 09.00 hingga 16.00 WITA.?</span>', 'berita_693532286.jpeg', 'PERAYAAN HUT PAPDI KE-65', 100, '2022-11-20 00:00:00', 'ALFAJRIANI', 'Berita', '2022-11-20');
INSERT INTO `berita` (`id`, `judul`, `slug`, `isi`, `banner`, `tag`, `dilihat`, `timestamp`, `penulis`, `kategori`, `tanggal`) VALUES
(54, 'BULAN KESEHATAN GIGI NASIONAL TAHUN 2022', 'BULAN.KESEHATAN.GIGI.NASIONAL.TAHUN.2022', '<span lang=\"IN\" xss=removed>Pada hari Selasa</span><span xss=removed> dan Rabu, 28 Februari dan 01 Maret 2023</span><span lang=\"IN\" xss=removed> Prodi Kedokteran FK unmul bekerjasama dengan TK Islam Silmi? Samarinda mengadakan </span><span xss=removed>kegiatan</span><span lang=\"IN\" xss=removed>? ?Pemeriksaan Tumbuh Kembang Anak?. Kegiatan ini diikuti oleh </span><span xss=removed>98 </span><span lang=\"IN\" xss=removed>mahasiswa yang mengikuti Modul Anak dan Remaja 5. Sebanyak </span><span xss=removed>220</span><span lang=\"IN\" xss=removed> anak TK diperiksa perkembangannya. Kegiatan ini merupakan sarana bagi mahasiswa untuk mempraktekkan ilmu tentang pengukuran tumbuh kembang pada anak.</span><span xss=removed> Hasil pemeriksaan dapat berguna untuk skrining tumbuh kembang anak khususnya pada TK Islam Silmi.</span>', 'berita_1121032073.jpeg', 'Bulan Kesehatan Gigi Nasional', 100, '2022-12-05 00:00:00', 'prodidoktergigi', 'Berita', '2022-12-05'),
(56, 'Program Studi Kedokteran Lakukan Pemeriksaan Tumbuh Kembang di TK Islam Silmi Samarida', 'Program.Studi.Kedokteran.Lakukan.Pemeriksaan.Tumbuh.Kembang.di.TK.Islam.Silmi.Samarida', '<p><p></p><p class=\"MsoNormal\" align=\"center\" xss=\"removed\"><b>?Be Proud Of your Mouth?<o></o></b></p> <p class=\"MsoNormal\" xss=\"removed\">Kegiatan bakti sosial program studi kedokteran gigi FK UNMUL dalam memperingati hari Kesehatan gigi dan mulut sedunia pada Senin, 20 Maret 2023.<o></o></p> <p class=\"MsoNormal\" xss=\"removed\">Sasaran kegiatan bakti sosial ini adalah SDN 027 Samarinda Ulu dan SD Muhammadiyah 1 Samarinda dengan total pasien SD Muhammadiyah 1 adalah 30 orang dan SDN 027 Samarinda Ulu 34 orang.<o></o></p> <p class=\"MsoNormal\" xss=\"removed\">Kegiatan yang dilaksanakan diantaranya :<o></o></p> <p class=\"MsoNormal\" xss=\"removed\">Diawali oleh acara pembukaan oleh MC (Rajab Anis) , Pembacaan doa oleh Rakha Muhammad Asyam, serta sambutan sambutan. Sambutan yang pertama yaitu sambutan Ketua Pelaksana oleh drg. Nisa Muthi?ah,M.Kes. Selanjutnya Sambutan Kepala Prodi Kedokteran Gigi oleh drg. Cicih Bhakti Purnamasari,M.Med.Ed dan Wakil Dekan 2 FK Unmul oleh Dr.dr Rahmat Bakhtiar,MPPM sekaligus membuka acara WOHD 2023. <o></o></p> <p class=\"MsoNormal\" xss=\"removed\">Dihadiri oleh para tamu undangan diantaranya Ketua Senat FK Unmul dr.Abdillah Iskandar,M.Kes, Kepala Tata Usaha FK UNMUL Hanapi S.E, Kepala Laboratorium Kedokteran Gigi Klinik FK UNMUL drg. Indriana Dwi Kuntari, SP.KGA, Kepala Laboratorium Dental Material drg.Dewi Arsih S.,MDSc.,M.Med.Kom, Subkoordinator Bidang Akademik Kemahasiswaan dan Alumni Suriati, S.Sos.,M.Si. <o></o></p> <span xss=\"removed\">Dan dilanjut dengan kegiatan bakti sosial, pengaplikasian fissure sealent (imunisasi gigi) pada SD sasaran yaitu SDN 027, Samarinda Ulu dan SD Muhammadiyah 1 Samarinda,? Scalling (pembersihan karang gigi) untuk para guru dan tenaga kerja oleh Operator (dokter dan Mahasiswa Co-ass).</span></p><p><span xss=\"removed\"><br></span><p>#TimHumasdanPublikasi#Faiz#Akmal#Nadia#Alya#Rahmania#Sevia#WOHD2023</p> </p>', 'berita_46335684.jpg', 'prodikedokteran', 100, '2023-03-02 00:00:00', 'prodikedokteran', 'Berita', '2023-03-02'),
(57, 'WORLD ORAL HEALTH DAY 2023', 'WORLD.ORAL.HEALTH.DAY.2023', '<p><span xss=\"removed\">Pada hari Selasa, 11 April 2023 Prodi Kedokteran dan Prodi Kedokteran Gigi FK unmul melaksanakan yudisium kedokteran dan kedokteran gigi demi terciptanya tenaga-tenaga kesehatan yang berkualitas dimasa depan.</span></p><p><br></p><p>?<img src=\"https://fk.unmul.ac.id/file/loadattach/foto2-yudisium-april23_445726052.JPG\" xss=\"removed\" xss=removed></p><p><br></p><h2><a href=\"https://drive.google.com/drive/folders/1SCxoKS-jJsXZa0--f19PDIHFLhFyuZhJ\" target=\"_blank\" xss=removed>foto kegiatan bisa dilihat disini !</a></h2>', 'berita_277353974.jpg', '#WOHD#HIMAKG#Kedokterangigi#ProfesiDokterGigi', 100, '2023-03-20 00:00:00', 'prodidoktergigi', 'Berita', '2023-03-20'),
(58, 'PELAKSANAAN YUDISIUM PRODI KEDOKTERAN DAN KEDOKTERAN GIGI GELOMBANG KE-2', 'PELAKSANAAN.YUDISIUM.PRODI.KEDOKTERAN.DAN.KEDOKTERAN.GIGI.GELOMBANG.KE.2', 'Mohon Do\'a &amp; Dukungan Tim Mulawarman Muda Dalam NUDC (National University Debating Championship) Tingkat Nasional 2023 (05-12 Juni 2023) Untirta Banten', 'berita_2018236357.JPG', 'PELAKSANAAN YUDISIUM', 100, '2023-04-11 00:00:00', 'ALFAJRIANI', 'Berita', '2023-04-11'),
(60, 'Mohon Do\'a & Dukungan Tim Mulawarman Muda Dalam NUDC (National University Debating Championship) Tingkat Nasional 2023', 'Mohon.Do.a.Dukungan.Tim.Mulawarman.Muda.Dalam.NUDC.National.University.Debating.Championship.Tingkat.Nasional.2023', '<p class=\"MsoNormal\" xss=removed><span lang=\"IN\">Pada hari Kamis, ?5 </span>Juli 2023<span lang=\"IN\"> bertempat di ruang pelatihan FK Unmul dilaksanakan Yudisium Sarjana Kedokteran</span>. Sebanyak 26<span lang=\"IN\"> mahasiswa yang mengikuti yudisium</span>. <span lang=\"IN\">Acara dimulai dengan dengan? pembacaan doa oleh </span>Bapak La Jahiri <span lang=\"IN\">kemudian dilanjutkan dengan pembacaan nama, IPK dan masa studi dari </span>26 <span lang=\"IN\">mahasiswa yang resmi menyandang gelar S.Ked oleh Koordinator Program Studi Kedokteran FK Unmul, dr. Sulistiawati, MMedEd. </span>Setelahnya m<span lang=\"IN\">ahasiswa mengucapkan janji dokter muda yang dipimpin oleh Wakil Dekan Bidang Akademik, Kemahasiswaan dan Alumni Dr. dr. Siti Khotimah, M.Kes dilanjutkan dengan penyerahan mahasiswa secara simbolis ke Prodi Profesi Dokter.</span></p> <p class=\"MsoNormal\" xss=removed><span lang=\"IN\">Sambutan mahasiswa </span>prodi kedokteran <span lang=\"IN\">diwakili oleh </span>Fagil Rananda Idris. <span lang=\"IN\">Dalam sambutannya mahasiswa mengucapkan terimakasih atas bimbingannya selama ini. Acara dilanjutkan dengan sambutan dari Dekan FK Unmul, dr. Ika Fikriah, M.Kes. Dalam sambutannya, Dekan mengucapkan selamat kepada yudisiawan dan yudisiawati serta berpesan agar mahasiswa menjaga nama baik almamater, sikap dan perilaku serta belajar dengan sungguh-sungguh. Acara yudisium ditutup dengan foto bersama.?<o></o></span></p>', 'berita_1455491057.jpeg', 'prodikedokteran', 100, '2023-06-06 00:00:00', 'prodikedokteran', 'Berita', '2023-06-06'),
(61, 'Yudisium Sarjana Kedokteran Periode Ke 3 Tahun 2023', 'Yudisium.Sarjana.Kedokteran.Periode.Ke.3.Tahun.2023', '<p class=\"MsoNormal\" xss=removed><span xss=removed>Pada bulan Juni 2023 prodi kedokteran melaksanakan 2 kuliah umum. Kuliah umum pertama dilakukan pada tangggal 26 Juni 2023 dengan mengangkat topik </span><span xss=removed>Penerapan dan Pelayanan Kedokteran Okupasi pada Industri Migas dari Hulu sampai Hilir dengan narasumber dr. Iwan Susilo Joko, MKK, Sp. Ok (Team Manager Medical Services ? PT. Pertamina Hulu Rokan).? Kuliah umum kedua dilaksanakan pada tanggal 27 Juni 2023 dengan topik tema <span class=\"selectable-text\">Kebijakan dalam peresepan herbal oleh dokter dalam pelayanan kesehatan dengan narasumber </span>dr.Danang Ardiyanto, MKM (Dokter di UPF Hortus Medicus Tawangmangu RSUP Dr Sardjito Yogyakarta). Pelaksanaan kuliah umum berjalan dengan lancar dan mahasiswa antusias dalam mengikuti kegiatan. Diharapkan dengan kedua kuliah umum ini akan semakin memperkuat keunggulan prodi kedokteran yaitu pada obat bahan alam dan kedokteran okupasi industri pertambangan.?<o></o></span></p>', 'berita_594535324.jpg', 'prodikedokteran', 100, '2023-08-02 00:00:00', 'prodikedokteran', 'Berita', '2023-08-02'),
(63, 'Prodi Kedokteran Lakukan Kuliah Umum Sesuai Keunggulan Program Studi', 'Prodi.Kedokteran.Lakukan.Kuliah.Umum.Sesuai.Keunggulan.Program.Studi', '<p class=\"MsoNormal\" xss=removed><span lang=\"IN\">Pada hari Selasa, 8 </span>Agustus 2023 bertempat di ruang RK1 diadakan pertemuan orang tua mahasiswa baru prodi kedokteran angkatan 2023. Kegiatan dibuka oleh Wakil Dekan Bidang Akademik, Kemahasiswaan dan Alumni FK Universitas Mulawarman, Dr. dr. Siti Khotimah, M.Kes. Dalam sambutannya Wakil Dekan menyatakan bahwa kegiatan ini merupakan ajang silaturahmi antara mahasiswa dan Fakultas serta bertujuan memberi gambaran kepada orang tua mengenai kegiatan pembelajaran di Prodi Kedokteran.<o></o></p> <p class=\"MsoNormal\" xss=removed>Kegiatan dilanjutkan dengan pemaparan mengenai kurikulum yang berjalan di prodi kedokteran termasuk proses evaluasi oleh Koordinator Prodi Kedokteran, dr. Sulistiawati, MMedEd. Kegiatan diakhiri dengan diskusi.?<o></o></p>', 'berita_1094418125.jpg', 'prodikedokteran', 100, '2023-08-03 00:00:00', 'prodikedokteran', 'Berita', '2023-08-03'),
(64, 'PERTEMUAN ORANG TUA MAHASISWA BARU PRODI KEDOKTERAN TAHUN 2023', 'PERTEMUAN.ORANG.TUA.MAHASISWA.BARU.PRODI.KEDOKTERAN.TAHUN.2023', '', 'berita_180357134.jpg', 'prodikedokteran', 100, '2023-08-08 00:00:00', 'prodikedokteran', 'Berita', '2023-08-08');

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
(1, 'sepeda-brokoli', 'sepeda-brokoli_1867037087.jpg'),
(2, 'tes-mipa', 'tes-mipa_287066940.jpg'),
(3, 'tes-gambar', 'tes-gambar_1420059118.jpg'),
(4, 'Struktur-Organisasi', 'Struktur-Organisasi_2021171596.JPG'),
(5, 'Pengumuman-penerimaan-20212022-ganjil', 'Pengumuman-penerimaan-20212022-ganjil_378373447.jpg'),
(6, 'Pengumuman-penerimaan-20212022-ganjil', 'Pengumuman-penerimaan-20212022-ganjil_1664867106.jpg'),
(7, 'Visite-Besar-Prodi-Bedah', 'Visite-Besar-Prodi-Bedah_144851962.jpeg'),
(8, 'Visite-Besar-Prodi-Bedah', 'Visite-Besar-Prodi-Bedah_1864928688.jpeg'),
(9, 'Kursus-BSS-I-ONLINE', 'Kursus-BSS-I-ONLINE_497783078.jpeg'),
(10, 'Kursus-BSS-I-ONLINE', 'Kursus-BSS-I-ONLINE_1127412912.jpeg'),
(11, 'Kursus-BSS-I-ONLINE', 'Kursus-BSS-I-ONLINE_1315843225.jpeg'),
(12, 'Kursus-BSS-I-ONLINE', 'Kursus-BSS-I-ONLINE_336275415.jpeg'),
(13, 'Kursus-BSS-I-ONLINE', 'Kursus-BSS-I-ONLINE_1550701493.jpeg'),
(14, 'Kursus-BSS-I-ONLINE', 'Kursus-BSS-I-ONLINE_1126534322.jpeg'),
(15, 'Visite-Besar-Prodi-Bedah', 'Visite-Besar-Prodi-Bedah_1878474177.jpeg'),
(16, 'Visite-Besar-Prodi-Bedah', 'Visite-Besar-Prodi-Bedah_227697520.jpeg'),
(17, 'Visite-Besar-Prodi-Bedah', 'Visite-Besar-Prodi-Bedah_2127415192.jpeg'),
(18, 'Visite-Besar-Prodi-Bedah', 'Visite-Besar-Prodi-Bedah_1994290837.jpeg'),
(19, 'Ujian-Nasional-Bedah-Dasar', 'Ujian-Nasional-Bedah-Dasar_1972572494.jpeg'),
(20, 'Ujian-Nasional-Bedah-Dasar', 'Ujian-Nasional-Bedah-Dasar_1671680504.jpeg'),
(21, 'Ujian-Nasional-Bedah-Dasar', 'Ujian-Nasional-Bedah-Dasar_1640417875.jpeg'),
(22, 'Webinar-Peningkatan-Sistem-Imun', 'Webinar-Peningkatan-Sistem-Imun_289518508.jpeg'),
(23, 'Brosur-Penerimaan-TA-20212022-Genap', 'Brosur-Penerimaan-TA-20212022-Genap_652449055.jpg'),
(24, 'b', 'b_1001020902.png'),
(25, 'Kuliah-Tamu-Dies-NAtalis', 'Kuliah-Tamu-Dies-NAtalis_892117840.jpeg'),
(26, 'barcode-buku-panduan', 'barcode-buku-panduan_1101262283.jpeg'),
(27, 'LAM-PTKes-Sarjana-Gigi', 'LAM-PTKes-Sarjana-Gigi_613781769.JPG'),
(28, 'LAM-PTKes-Profesi-Gigi', 'LAM-PTKes-Profesi-Gigi_723056302.JPG'),
(29, 'PAPDI', 'PAPDI_2101722062.jpeg'),
(30, 'PAPDI1', 'PAPDI1_1397663109.jpeg'),
(31, 'PAPDI2', 'PAPDI2_1188677855.jpeg'),
(32, 'PAPDI3', 'PAPDI3_398702502.jpeg'),
(33, 'foto-yudisium-april23', 'foto-yudisium-april23_1584562652.JPG'),
(34, 'foto2-yudisium-april23', 'foto2-yudisium-april23_445726052.JPG'),
(35, 'foto3-yudisium-april23', 'foto3-yudisium-april23_643801082.JPG'),
(36, 'foto4-yudisium-april23', 'foto4-yudisium-april23_1619009138.JPG'),
(37, 'foto5-yudisium-april23', 'foto5-yudisium-april23_598820124.JPG'),
(38, 'foto6-yudisium-april23', 'foto6-yudisium-april23_1846714974.JPG');

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
  `foto` varchar(255) NOT NULL,
  `visi` text NOT NULL,
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

INSERT INTO `konfigurasi` (`id`, `foto`, `visi`, `misi`, `ig`, `alamat`, `email`, `yt`, `fb`, `telepon`) VALUES
(1, '', '<p>Menjadi Fakultas Kedokteran Berstandar Internasional yang unggul di tingkat Nasional dalam pengembangan pendidikan, penelitian, pengabdian masyarakat di bidang kedokteran dan kesehatan yang bertumpu pada hutan tropis lembap (tropical rain forest) dan lingkungannya</p>\r\n', '<p>1. Menyelenggarakan Pendidikan Kedokteran dan Kesehatan yang berkualitas.</p>\r\n\r\n<p>2. Menyelenggarakan Penelitian yang Berstandar Internasional dibidang Ilmu Kedokteran dan Kesehatan yang bertumpu pada hutan tropis lembap dan lingkungannya.</p>\r\n\r\n<p>3. Menyelenggarakan pengabdian masyarakat yang berorientasi pada peningkatan perilaku sehat masyarakat.</p>\r\n\r\n<p>4. Mengembangkan dan menjalin kerja sama dengan berbagai pihak untuk meningkatkan kapasitas, sarana, prasana, dan sumber daya manusia yang berkualitas.</p>\r\n', '@instagram', 'Jl. Krayan, Gn. Kelua, Kec. Samarinda Utara, Kota Samarinda, Kalimantan Timur 751191', 'office@fk.unmul.ac.id', '@youtube', '@fb', '(0541) 7485811');

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
-- Struktur dari tabel `link`
--

CREATE TABLE `link` (
  `id` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `link`
--

INSERT INTO `link` (`id`, `kategori`, `judul`, `link`) VALUES
(1, 'Library', 'www.proquest.com', 'http://www.proquest.com/'),
(2, 'Partner', 'serdos.dikti.go.id', 'http://serdos.dikti.go.id'),
(3, 'Partner', 'Tracer Study Alumni FKM', 'https://docs.google.com/forms/d/1LHsOpB3jppONJVUUhmOvCoHK0z7mjY9AyITaeT6KWIA/viewform?sid=74a5373f01'),
(4, 'Partner', 'dp2m.dikti.go.id', 'http://dp2m.dikti.go.id'),
(5, 'Partner', 'Program Bidik Misi Dikti', 'http://bidikmisi.kemdikbud.go.id/'),
(6, 'Partner', 'Program Beasiswa Unggulan', 'http://beasiswaunggulan.kemdiknas.go.id/'),
(7, 'Partner', 'Beasiswa Luar Negeri Dikti', 'http://www.dikti.go.id/'),
(8, 'Partner', 'Beasiswa Dalam Negeri Dikti', 'http://www.dikti.go.id/'),
(9, 'Partner', 'E-Learning UNESCO-Dikti', 'http://e-learning.connect-asia.org/'),
(10, 'Journal', 'PORTAL GARUDA', 'http://garuda.dikti.go.id/'),
(11, 'Journal', 'Litbang Depkes', 'http://ejournal.litbang.depkes.go.id/'),
(12, 'Journal', 'EBSCO E-Journal', 'http://search.ebscohost.com/'),
(13, 'Journal', 'The Indonesian Journal of Clinical Nutrition', 'http://www.ijcn.or.id/'),
(14, 'Journal', 'Jurnal Kesmas', 'http://www.jurnalkesmas.org'),
(15, 'Journal', 'Media Medika UNDIP', 'http://www.mediamedika.net/'),
(16, 'Journal', 'Medical Journal Of Indonesia', 'http://mji.ui.ac.id/v2/'),
(17, 'Journal', 'Jurnal Kedokteran UNS', 'http://fk.uns.ac.id/index.php/jurnalilmiah/index/'),
(18, 'Journal', 'DOAJ (Directory of Open Access Journals)', 'http://www.doaj.org/'),
(19, 'Library', 'Cengage', 'http://infotrac.galegroup.com/itweb/USERNAME'),
(20, 'Partner', 'Tracer Study Universitas', 'https://perkasa.unmul.ac.id/tracer_study/index.php'),
(21, 'Library', 'Perpusnas RI', 'http://e-resources.perpusnas.go.id/'),
(22, 'Library', 'NCBI-PMC', 'https://www.ncbi.nlm.nih.gov/pmc/'),
(23, 'Journal', 'Biomed Central Journal', 'https://www.biomedcentral.com/'),
(24, 'Library', 'Citeseer', 'http://citeseer.ist.psu.edu'),
(25, 'Library', 'Springer', 'http://www.springer.com/gp/'),
(26, 'Partner', 'Local e-learning FKM Unmul', 'http://10.110.1.55/fkm'),
(27, 'Partner', 'OJS JKMM FKM Unmul', 'http://e-journals.unmul.ac.id/index.php/MJPH'),
(28, 'Library', 'Ruang Baca FKM UNMUL', 'http://perpustakaan.fkm.unmul.ac.id/'),
(29, 'Library', 'Makara Of Health Series', 'http://journal.ui.ac.id/health'),
(30, 'Library', 'Perpustakaan BPS Prov. Kaltim', 'http://kaltim.bps.go.id/'),
(31, 'Library', 'Dinas Perpustakaan Kota Samarinda', 'https://perpus.samarindakota.go.id/'),
(32, 'Library', 'Perpustakaan BAPPEDA Prov. Kaltim', 'http://elib.bappedakaltim.com/'),
(33, 'Library', 'Perpustakaan Unmul Ebook Digital Library', 'http://digilib.unmul.ac.id/'),
(34, 'Library', 'Perpustakaan Kemenkes RI', 'http://perpustakaan.kemkes.go.id/'),
(35, 'Library', 'E- Library Kebijakan Kesehatan', 'http://kebijakankesehatanindonesia.net/elib/'),
(36, 'Library', 'E-Library MPK', 'http://manajemen-pembiayaankesehatan.net/index.php/e-library'),
(37, 'Library', 'DPKD Prov. Kaltim', 'http://dpkd.kaltimprov.go.id/');

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
  `urutan` int(255) NOT NULL,
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
(30, 'Visi dan Misi', 'visi-dan-misi', 1, 24, '<h2>Visi</h2>\r\n\r\n<p>&quot;Menjadi Fakultas Kedokteran Berstandar Internasional yang unggul di tingkat Nasional dalam pengembangan pendidikan, penelitian, pengabdian masyarakat di bidang kedokteran dan kesehatan yang bertumpu pada hutan tropis lembap (tropical rain forest) dan lingkungannya pada tahun 2034.&quot;</p>\r\n\r\n<h2>Misi</h2>\r\n\r\n<p>1. Menyelenggarakan Pendidikan Kedokteran dan Kesehatan yang berkualitas.</p>\r\n\r\n<p>2. Menyelenggarakan Penelitian yang Berstandar Internasional dibidang Ilmu Kedokteran dan Kesehatan yang bertumpu pada hutan tropis lembap dan lingkungannya.</p>\r\n\r\n<p>3. Menyelenggarakan pengabdian masyarakat yang berorientasi pada peningkatan perilaku sehat masyarakat.</p>\r\n\r\n<p>4. Mengembangkan dan menjalin kerja sama dengan berbagai pihak untuk meningkatkan kapasitas, sarana, prasana, dan sumber daya manusia yang berkualitas.</p>\r\n', NULL, 'ajisudjay', '2023-03-08'),
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
(51, 'Roadmap Penelitian', 'roadmap-penelitian', 1, 30, '<p>ROADMAP PENELITIAN</p>', NULL, 'ajisudjay', '2023-03-02');

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
('el', '$2y$10$S9xN8.tzuQkRSMug3bBMruDacISKxNUJ/WWMBauN369DekrvL5kSq', 'Aji Sudjay', 'Superadmin', '1677191261_4359d8c87f13ad17ac39.png'),
('ratih', '$2y$10$M7pUv1bCTRKq4qynlOKJiOZz0jjBz1gz005ihn.9rARPecoxUfOw2', 'ratih', 'Superadmin', '1698728960_4f4953ecd235d37eccbd.png');

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
-- Indeks untuk tabel `link`
--
ALTER TABLE `link`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

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
-- AUTO_INCREMENT untuk tabel `link`
--
ALTER TABLE `link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;

--
-- AUTO_INCREMENT untuk tabel `mainmenu`
--
ALTER TABLE `mainmenu`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
