-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2023 at 11:07 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gp`
--

-- --------------------------------------------------------

--
-- Table structure for table `agt_baru`
--

CREATE TABLE `agt_baru` (
  `id_nm` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npm` int(8) NOT NULL,
  `jurusan` varchar(40) NOT NULL,
  `no_hp` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agt_baru`
--

INSERT INTO `agt_baru` (`id_nm`, `nama`, `npm`, `jurusan`, `no_hp`) VALUES
(1, 'junet', 80982310, 'Sistem Informasi', 857666123);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_ber` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `isi` text NOT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_ber`, `judul`, `foto`, `isi`, `tgl`) VALUES
(1, 'Open House Gita Pasuatika', 'IMG-20230802-WA0009.jpg', 'Akan di adakan open house gita pasuatika pada tgl 40 bulan 13 di london gita pasuatika, datang dan ramaikan *tiket dan konsumsi di tanggung sendiri*', NULL),
(2, 'tester 1.2', 'gallery-2.jpg', 'jikokokoakokokokokaoskdoakwodkokda', NULL),
(3, 'tester 2', 'gallery-1.jpg', 'ijsoifjosijfokmsomcoskmckml,l,l,l,l,l,,l,l,l,l,l,l,l,asokdoakdoakdowkdaosd', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dokumentasi`
--

CREATE TABLE `dokumentasi` (
  `id_dok` int(11) NOT NULL,
  `nm_dok` varchar(60) NOT NULL,
  `tgl` date DEFAULT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokumentasi`
--

INSERT INTO `dokumentasi` (`id_dok`, `nm_dok`, `tgl`, `keterangan`, `gambar`) VALUES
(1, 'zakat', NULL, 'pspspspspspsp', 'IMG_5411.JPG'),
(3, 'idul adha', NULL, 'paisjpiajdoapsjdpoij', 'iduladha (3).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_keg` int(11) NOT NULL,
  `nm_kegiatan` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_keg`, `nm_kegiatan`, `keterangan`, `gambar`) VALUES
(1, 'Buka Puasa Bersama GP', 'Buka bersama anggota gita pasuatika', 'IMG-20230802-WA0007.jpg'),
(2, 'Bedah Sekre', 'Bedah sekretariat gita pasuatika', 'IMG_5429.jpg'),
(3, 'Bootcamp', 'Mengasah skill', 'IMG_5411.jpg'),
(4, 'Pelantikan AM', 'Pelantikan anggota muda gita pasuatika', 'IMG-20230802-WA0010.jpg'),
(5, 'Seminar', 'Seminar gita pasuatika', 'IMG_5151.jpg'),
(6, 'forum anggota tetap', 'rapat anggota tetap', 'IMG_5145.jpg'),
(7, 'Pelantikan AT', 'Pelantikan anggota tetap', 'IMG_5442.jpg'),
(8, 'Ulang Tahun Gita Pasuatika ', 'Perayaan ulang tahun gita pasuatika', 'IMG_5420.jpg'),
(9, 'Open House', 'Open house untuk mahasiswa baru', 'IMG-20230802-WA0009.jpg'),
(10, 'Pelantikan CAM', 'pelantikan calon anggota muda', 'IMG_5418.jpg'),
(11, 'Forum Pemilihan Ketua Gita Pasuatika', 'Rapat menentukan ketua gita pasuatika', 'IMG_5383.jpg'),
(12, 'Pelantikan Kepengurusan baru', 'pelantikan kepengurusan', 'IMG_5384.jpg'),
(13, 'Wisuda STMIK Jakarta STI&K', 'Menjadi paduan suara untuk acara wisuda', 'zakat1.JPG'),
(14, 'Perlombaan paduan suara', 'mengikuti perlombaan suara', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kepengurusan`
--

CREATE TABLE `kepengurusan` (
  `npm` int(10) NOT NULL,
  `na` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) NOT NULL,
  `divisi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kepengurusan`
--

INSERT INTO `kepengurusan` (`npm`, `na`, `nama`, `foto`, `jabatan`, `divisi`) VALUES
(10418017, 'NA.GP.0996.18.410', 'Evi Erviani', NULL, 'bendahara', NULL),
(10418067, 'NA.GP.0996.18.413', 'Giggs Aprilio L.', NULL, 'Anggota', 'Pelatihan'),
(10418121, 'NA.GP.0996.18.417', 'Navaya Axelia Sihite', NULL, 'Koordinator', 'Pembasisan'),
(10419080, 'NA.GP.0996.19.427', 'Khoirul Huda', 'medium-image-1.jpg', 'Wakil Ketua', ''),
(10419082, 'NA.GP.0996.19.424', 'Fanny', 'medium-image-1.jpg', 'Ketua', ''),
(10420050, 'NA.GP.0996.20.434', 'Mutiara Azka Putri  A', NULL, 'Koordinator', 'Pelatihan'),
(10422001, 'NA.GP.0996.22.437', 'Anandita Rizkia', NULL, 'Koordinator', 'Sosmed'),
(10422002, 'NA.GP.0996.22.438', 'Dian Nur Rahmah', NULL, 'sekertaris', NULL),
(20419124, 'NA.GP.0996.19.430', 'Yogi Andri', NULL, 'Koordinator', 'Kesekretariatan'),
(20420007, '', 'Meclin Bintang Geovani ', NULL, 'Anggota', 'Humas'),
(30422096, 'NA.GP.0996.22.439', 'Saefudin', NULL, 'Koordinator', 'Humas');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(35) NOT NULL,
  `nm` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user`, `nm`, `pass`) VALUES
(1, 'admin', 'Gita Pasuatika', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id_prof` int(11) NOT NULL,
  `gambar` varchar(35) DEFAULT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id_prof`, `gambar`, `isi`) VALUES
(1, NULL, 'gita pasuatika adalah oapodwpaokpoakdplmapojpoakpcmaposkdoapdlskpdokaplsdadw                                                                         ');

-- --------------------------------------------------------

--
-- Table structure for table `swiper`
--

CREATE TABLE `swiper` (
  `id_gambar` int(11) NOT NULL,
  `jdl` text DEFAULT NULL,
  `kata` varchar(150) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `swiper`
--

INSERT INTO `swiper` (`id_gambar`, `jdl`, `kata`, `gambar`) VALUES
(1, 'Gita Pasuatika', 'Jaya Jaya Jaya', 'IMG-20230802-WA0007.jpg'),
(4, 'huba huab', 'ashdoawidjoadw', 'IMG-20230802-WA0010.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id_vismis` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visi_misi`
--

INSERT INTO `visi_misi` (`id_vismis`, `visi`, `misi`) VALUES
(1, 'Membentuk kader kader yang bertanggung jawab, solid, disiplin dan Kritis dalam mewujudkan organisasi yang berkualitas                                                     ', '1. Menjalin hubungan yang  harmonis dengan  pihak pihak lain baik internal maupun eksternal<br>\r\n2. Merancang program program inovatif dan efektif untuk sarana pengembangan vokal dan organisasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agt_baru`
--
ALTER TABLE `agt_baru`
  ADD PRIMARY KEY (`id_nm`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_ber`);

--
-- Indexes for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD PRIMARY KEY (`id_dok`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_keg`);

--
-- Indexes for table `kepengurusan`
--
ALTER TABLE `kepengurusan`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_prof`);

--
-- Indexes for table `swiper`
--
ALTER TABLE `swiper`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id_vismis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agt_baru`
--
ALTER TABLE `agt_baru`
  MODIFY `id_nm` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_ber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  MODIFY `id_dok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_keg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kepengurusan`
--
ALTER TABLE `kepengurusan`
  MODIFY `npm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30422097;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id_prof` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `swiper`
--
ALTER TABLE `swiper`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id_vismis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
