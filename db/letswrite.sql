-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jul 2020 pada 11.38
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reawrite`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `username`, `password`) VALUES
(1, 'nama admin', 'admin@admin.com', 'admin', '$2y$12$LUpvwCrntLu0CmALkb9d7uLs6fFaOPXoL9SiffP4j7RjQlY1.EJPa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cerita`
--

DROP TABLE IF EXISTS `cerita`;
CREATE TABLE `cerita` (
  `id_cerita` int(11) NOT NULL,
  `id_kategori` varchar(200) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `img` varchar(200) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `diskripsi` longtext NOT NULL,
  `isi` longtext NOT NULL,
  `status` enum('enable','disable') NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cerita`
--

INSERT INTO `cerita` (`id_cerita`, `id_kategori`, `id_user`, `img`, `judul`, `diskripsi`, `isi`, `status`, `date`) VALUES
(1, '1', '1', 'images.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae nulla eget tellus egestas rutrum. Nunc quis lobortis ex. Proin. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the , when an unknown printer took a galley of type and sc', 'disable', '2019-07-17 13:44:33'),
(2, '2', '3', 'images.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae nulla eget tellus egestas rutrum. Nunc quis lobortis ex. Proin. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the , when an unknown printer took a galley of type and sc', 'enable', '2019-07-06 03:55:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Agama Islam'),
(2, 'Novel & Sastra'),
(3, 'Pengembangan Diri'),
(4, 'Umum'),
(5, 'Bisnis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masukan`
--

DROP TABLE IF EXISTS `masukan`;
CREATE TABLE `masukan` (
  `id_masukan` int(11) NOT NULL,
  `id_user` varchar(200) NOT NULL,
  `isi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masukan`
--

INSERT INTO `masukan` (`id_masukan`, `id_user`, `isi`) VALUES
(1, '3', 'masukan saya adalah'),
(2, '8', '<html><body><p>Masukan dari <u>andro</u></p>\n</body></html>'),
(3, '7', '<html><body><p>Masukan <u>agus</u></p>\n</body></html>'),
(4, '6', '<html><body><p>Masukan dari <u>bekti</u></p>\n</body></html>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `session`
--

DROP TABLE IF EXISTS `session`;
CREATE TABLE `session` (
  `id_admin` int(11) NOT NULL,
  `status` enum('true','false','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(200) NOT NULL,
  `foto_user` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `auth_key` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `foto_user`, `username`, `email`, `password`, `auth_key`) VALUES
(1, 'angga setiawan', 'images.jpg', 'angga', 'angga@gmail.com', 'password', '6a890056c6a1e14213c996e58eedad60'),
(2, 'santi susilo', 'pakan.jpg', 'santi', 'santi@gmail.com', '$2y$12$YTyUnYOtfo5NY0mTSuNCjuAorpeDZXIamQXozy1C9AZibwp6u/7pS', 'ff97ecc1c48db2e4a513e37ca13eed5e'),
(3, '', '', 'pradhipta', 'pradhiptap@mail.com', '$2y$12$FOW3GDpVbp/gYkHFpvP.mObkcD6hAGPO0cETcNx7dp9ha2l1MzPpG', 'c99415f08edec508bbf34f8307f22b7d'),
(4, '', 'pakan.png', 'bagas', 'bagas@mail.com', '$2y$12$YTyUnYOtfo5NY0mTSuNCjuAorpeDZXIamQXozy1C9AZibwp6u/7pS', '023f8bcf7a9c5ccecfd3a48020b4713e'),
(5, '', 'pan_pan_foto.jpg', 'bon', 'bon@mail.com', '$2y$12$J2w1N7Jb53Zy1lGt/4mItuy1o3o46paQ5stIimiq0kOwqFV8pceI.', '44bfec00c5a8b2e8789d48639d7a0788'),
(6, '', '', 'bekti', 'bekti@mail.com', '$2y$12$UPC0MQzJgatwaNDRaYOqtun.KUe0BHJsW93qgjSUyCWqKFHhuMSWm', '289351dc63b07b6169a8be8109fc0bc9'),
(7, '', '', 'agus', 'agus@mail.com', '$2y$12$oavpTgu4//Qj80jXQcvcmeUZ16a8Uoz8RkQ20tgg6xx17luzsGMz6', '71eec7ca4f40d163bc99a8f0e36de88f'),
(8, '', '', 'kuskus', 'kuskus@mail.com', '$2y$12$SDZh55apFgxinsYSVxoT9urpA/BivCzr1fvg6FVPITgZaAZ1eUlGW', 'a29da60543f532df92a435063109d308');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cerita`
--
ALTER TABLE `cerita`
  ADD PRIMARY KEY (`id_cerita`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `masukan`
--
ALTER TABLE `masukan`
  ADD PRIMARY KEY (`id_masukan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `cerita`
--
ALTER TABLE `cerita`
  MODIFY `id_cerita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `masukan`
--
ALTER TABLE `masukan`
  MODIFY `id_masukan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
