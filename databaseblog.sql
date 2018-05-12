-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2018 at 06:18 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `databaseblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_artikel`
--

CREATE TABLE IF NOT EXISTS `daftar_artikel` (
  `id_user` int(10) NOT NULL,
`id_artikel` int(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `tanggal_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_artikel`
--

INSERT INTO `daftar_artikel` (`id_user`, `id_artikel`, `judul`, `kategori`, `tanggal_post`, `isi`) VALUES
(1, 2, 'Kisah Antara Monyet Dan Angsa', 'Keluh Kesah', '2018-04-26 13:54:56', 'Pada suatu hari, ada Monyet dan Angsa sedang bermain bermanja di suatu gubuk '),
(1, 3, 'Kancil dan Harimau', 'Curahan Hati', '2018-04-26 13:26:00', '    Pada suatu siang, setelah Kancil lelah berlari, ia segera menuju sebuah tempat yang sejuk dibawah pohon beringin. Kancil merebahkan badannya hendak beristirahat. Matahari bersinar terik, sementara angin bertiup sepoi-sepoi menambah suasana hutan menjadi sejuk dan segar. Tak heran jika mata Kancil mulai mengantuk.\r\n\r\n\r\nDilihatnya, diatas pohon, seekor ular juga sedang tidur. Kancil membiarkannya.\r\n\r\n\r\n\r\nTiba-tiba muncul seekor harimau besar yang beringas dan kelaparan.\r\n\r\n\r\n\r\n“Ah, sepertinya siang ini aku jadi makan enak !” katanya. “Siang ini Kancil akan menjadi santapan makan siangku, nyammmm !”\r\n\r\n\r\n\r\nAlangkah terkejut dan takutnya Kancil. Ia hendak berdiri dan lari, tetapi kalah cepat. Kaki Harimau itu sudah memegang dan menindih lehernya.\r\n\r\n\r\n\r\n“Hayo, mau kemana kamu.” Bentak Harimau.\r\n\r\n\r\n\r\nKancil ketakutan setengah mati. “Ssssstttttt !!!! jangan berisik !” kilah Kancil sambil berbisik.\r\n\r\n\r\n\r\n\r\n“Ada apa ?” kata Harimau.\r\n\r\n\r\n\r\n“Lihat diatasmu ?”\r\n\r\n\r\n\r\nHarimau mendongakkan kepalanya. “Apa itu ?”\r\n\r\n\r\n\r\n“Aku disuruh menjaga ikat pinggang milik pak tani.”\r\n\r\n\r\n\r\n“Ikat pinggan macam apa, sehingga kamu mau menunggunya ?”\r\n\r\n\r\n\r\n“Ah, kamu ternyata belum tahu. Ini rahasia, lho. Jangan bilang ke siapa-siapa.”\r\n\r\n“Ya, katakan saja padaku. Aku akan menyimpan rahasia itu.”\r\n\r\n\r\n\r\nTampaknya Hariamau sudah mulai bisa diakali oleh Kancil. “Barang siapa yang memakai ikat pinggang itu, ia akan kuat dan tahan dari senjata apapun.”\r\n\r\n\r\n\r\n\r\n\r\n“Ah, masa ?” tanya Harimau tidak percaya.\r\n\r\n\r\n\r\n“Kalau tidak percaya ya sudah. Tapi ini rahasia, ya.”\r\n\r\n\r\n\r\n“Eh, tapi… kalau aku yang memakainya, kira-kira aku bisa kuat nggak, ya ?”\r\n\r\n\r\n\r\n“Ya, tentu saja.”\r\n\r\n\r\n\r\n“Bolehkan, aku mencoba memakainya ?” rayu Harimau.\r\n\r\n\r\n\r\n“Jangan ! Nanti aku dimarahi sama pak tani.”\r\n\r\n\r\n\r\n“Ah, Cil. Sebentar saja. Masa tidak boleh. Kamu kan sahabatku yang paling baik ?”\r\n\r\n\r\n\r\nKancil seolah-olah berpikir sebentar. “Baiklah, tapi lepaskan aku dulu.”\r\n\r\nHarimau segera melepaskan cengkeramannya.\r\n\r\n\r\n\r\n\r\n\r\n“Kamu boleh memakai ikat pinggang itu, sepuas kamu. Tapi aku akan sembunyi dulu biar pak tani tidak melihat dan marah padaku.”\r\n\r\n\r\n\r\n“Ya… tapi jangan jauh-jauh, ya. Aku masih punya urusan sama kamu.”\r\n\r\n\r\n\r\n“Iya… masa kamu juga tidak percaya sama aku.” Kancil segera melompat berlari meninggalkan Harimau yang masih tertegun memandangi ikat pinggang yang sebenarnya adalah seekor ular.\r\n\r\n\r\n\r\n“Wah, indah sekali ikat pinggang ini. Aku pakai, ah….”\r\n\r\n\r\n\r\nHarimau segera menarik ekor ular yang sedang tidur itu dan melilitkannya dipinggangnya. Alangkah terkejutnya si Ular karena tidurnya terusik. Ular marah bukan kepalang. Ia segera menyerang Harimau dan menggigitnya. Harimau yang juga terkejut mengetahui kalau itu ulah, merasa ditipu oleh Kancil. Perkelahian antara Ular dan Harimau terjadi. Ular kalah dan melarikan diri.\r\n\r\n\r\n\r\n“Awas, kamu Cil ! Aku cari kamu, dan aku makan kamu, ggrrr… ggrrr… ggrrr…”'),
(1, 4, 'Membuat Kuesioner', 'Informasi', '2018-04-27 00:44:31', 'Kuesioner ini dibuat untuk memenuhi tugas UTS mata kuliah “Metodologi Reasearch” pada Program Studi Teknik Informatika Politeknik TEDC Bandung. Apabila kalian sudah mengisi kuesioner ini, kalian tidak usah khawatir karena saya tidak akan mempublikasikannya.\r\nSebagai pelajar indonesia, kalian mungkin sering jenuh dalam mengikuti setiap rangkaian akademik atau proses belajar di tempat kalian sekolah. Kuesioner ini dimaksudkan untuk menghimpun kesan, pemikiran, dan isi hati kalian terhadap pengaruh sosial media untuk pencapaian kalian di akademik, yang bertujuan hanya untuk penelitian.\r\nBerikut ini adalah kuesioner yang berkaitan dengan penelitian tentang “Pengaruh Penggunaan Media Sosial Dalam Pencapaian Pelajar”. Oleh karena itu pada waktu ini kami mohon dengan hormat kesediaan kalian untuk dapat mengisi kuesioner berikut ini. Atas kesediaan dan partisipasi kalian sekalian untuk mengisi kuesioner ini, saya ucapkan banyak terimakasih.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_audio`
--

CREATE TABLE IF NOT EXISTS `daftar_audio` (
`id_audio` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `tanggal_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `judul_audio` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_audio`
--

INSERT INTO `daftar_audio` (`id_audio`, `id_user`, `audio`, `tanggal_post`, `judul_audio`) VALUES
(1, 12, '0f8675ebb062b7c53a24e77e14fa11fb.mp3', '2018-04-27 15:12:52', 'Depapepe'),
(2, 12, '756b0e4505c2010e7123ccc4d0cf9362.mp3', '2018-04-27 15:49:41', 'Maaf');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_gambar`
--

CREATE TABLE IF NOT EXISTS `daftar_gambar` (
`id_gambar` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `judul_gambar` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_gambar`
--

INSERT INTO `daftar_gambar` (`id_gambar`, `id_user`, `gambar`, `tanggal_post`, `judul_gambar`) VALUES
(1, 12, '8a46f5dfd395a729739366f43ca470e2.png', '2018-04-27 14:52:03', 'persib'),
(2, 12, '1886bc7dafa03fb0e68f4d3242ea7716.jpg', '2018-04-27 14:58:27', 'pinguin');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_video`
--

CREATE TABLE IF NOT EXISTS `daftar_video` (
`id_video` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `video` varchar(255) NOT NULL,
  `tanggal_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `judul_video` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_video`
--

INSERT INTO `daftar_video` (`id_video`, `id_user`, `video`, `tanggal_post`, `judul_video`) VALUES
(1, 12, '7bc7a3ccf35eb87041681978e1788cd9.mp4', '2018-04-27 15:45:43', 'Sebuah Inspirasi'),
(3, 12, '8d2b2d473889d138a0c2f87c45fcdc4f.mp4', '2018-04-27 15:46:56', 'Sistem Pencernaan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id_user` int(11) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `umur` varchar(3) NOT NULL,
  `hobby` varchar(20) NOT NULL,
  `cita_cita` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `jenis_kelamin`, `nama`, `email`, `username`, `password`, `alamat`, `umur`, `hobby`, `cita_cita`) VALUES
(1, 'Laki Laki', 'Rizki Bagja Nugraha', 'Rizkibagja28@yahoo.com', 'rizkibagja28', 'ad0db0c117f74a6b74f5243a3eab9c0f', 'Cisarua', '21', 'Mancing', 'Sukses'),
(2, 'Laki Laki', 'admin', 'admin@rocketmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'cimahi', '40', 'Jalan', 'Tenang'),
(12, 'Perempuan', 'Momo', 'momo@gmail.com', 'momo', '06c56a89949d617def52f371c357b6db', 'Jepang', '22', 'Dance', 'Dancer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_artikel`
--
ALTER TABLE `daftar_artikel`
 ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `daftar_audio`
--
ALTER TABLE `daftar_audio`
 ADD PRIMARY KEY (`id_audio`);

--
-- Indexes for table `daftar_gambar`
--
ALTER TABLE `daftar_gambar`
 ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `daftar_video`
--
ALTER TABLE `daftar_video`
 ADD PRIMARY KEY (`id_video`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id_user`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_artikel`
--
ALTER TABLE `daftar_artikel`
MODIFY `id_artikel` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `daftar_audio`
--
ALTER TABLE `daftar_audio`
MODIFY `id_audio` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `daftar_gambar`
--
ALTER TABLE `daftar_gambar`
MODIFY `id_gambar` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `daftar_video`
--
ALTER TABLE `daftar_video`
MODIFY `id_video` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
