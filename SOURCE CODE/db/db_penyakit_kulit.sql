-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Nov 2020 pada 12.55
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penyakit_kulit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id` int(5) NOT NULL,
  `G001` tinyint(1) DEFAULT NULL,
  `G002` tinyint(1) DEFAULT NULL,
  `G003` tinyint(1) DEFAULT NULL,
  `G004` tinyint(1) DEFAULT NULL,
  `G005` tinyint(1) DEFAULT NULL,
  `G006` tinyint(1) DEFAULT NULL,
  `G007` tinyint(1) DEFAULT NULL,
  `G008` tinyint(1) DEFAULT NULL,
  `G009` tinyint(1) DEFAULT NULL,
  `G010` tinyint(1) DEFAULT NULL,
  `G011` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_gejala`
--

INSERT INTO `tb_gejala` (`id`, `G001`, `G002`, `G003`, `G004`, `G005`, `G006`, `G007`, `G008`, `G009`, `G010`, `G011`) VALUES
(1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0),
(3, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gejala_1`
--

CREATE TABLE `tb_gejala_1` (
  `id` int(5) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `gejala` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_gejala_1`
--

INSERT INTO `tb_gejala_1` (`id`, `kode`, `gejala`) VALUES
(1, 'G001', 'Rasa gatal dan dingin berlebihan '),
(2, 'G002', 'Rasa gatal pada malam hari '),
(3, 'G003', 'Lepuhan kecil dan kulit bersisik\r\n'),
(4, 'G004', 'Bintik merah ditumbuhi sisik lebar putih berlapis'),
(5, 'G005', 'Menyerang sendi'),
(6, 'G006', 'Bernanah'),
(7, 'G007', 'Badan mengigil dan kulit menjadi merah'),
(8, 'G008', 'Produksi minyak berlebihan'),
(9, 'G009', 'Adanya sumbatan lapisan kulit mati pada pori pori'),
(10, 'G010', 'Adanya benjolan di permukaan kulit\r\n'),
(11, 'G011', 'Kulit terasa kasar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id` int(5) NOT NULL,
  `penyakit` varchar(50) DEFAULT NULL,
  `info` longtext NOT NULL,
  `solusi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id`, `penyakit`, `info`, `solusi`) VALUES
(1, 'EKSIM', 'Eksim merupakan reaksi alergi pada kulit yang ditandai dengan timbulnya warna kemerahan dan rasa gatal serta rasa tidak nyaman.', 'Mengoleskan Krim atau salaep kontrikosteroid seperti hidrokortison, Betametason, Desonide, dan mometason. \r\nDisarankan pula untuk sering mandi, jangan terlalu kuat dalam menggosok kulit dengan handuk dan oleskan minyak atau pelumas yang tidak berbau. \r\nTriamcinolone dapat mengurangi ruam dan eksim untuk mengendalikan rasa gatal\r\n'),
(2, 'PSORIASIS', 'Psoriasis adalah peradangan pada kulit yang ditandai dengan ruam merah, kulit kering, tebal, bersisik, dan mudah terkelupas.', '- Menggunakan salep oles (topical) \r\n- Obat telan (sistematik) \r\n- Dapat dengan penyinaran UVB 5 \r\n- Kunsumsi makan yang bergizi dan jaga pola makan yang teratur\r\n'),
(3, 'JERAWAT', 'Jerawat (acne) adalah gangguan pada kulit yang berhubungan dengan produksi minyak (sebum) berlebih.', '- Hindari pemakaian kosmetika saat \r\n- Kulit wajah harus bersih saat istirahat dirumah \r\n- Antibiotik clidamycin atau erythromcin, tetracyline, eritromycin \r\n- Minocycline, doxicyline, bisa mengurangi atau mencegah jerawat permukaan \r\n- Jangan memecahkan jerawat dan jangan sering disentuh\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gejala_1`
--
ALTER TABLE `tb_gejala_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_gejala_1`
--
ALTER TABLE `tb_gejala_1`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD CONSTRAINT `tb_penyakit_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tb_gejala` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
