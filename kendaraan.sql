-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 Apr 2019 pada 07.11
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kendaraan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `content_artikel` text NOT NULL,
  `tanggal_artikel` date NOT NULL,
  `foto_artikel` varchar(255) NOT NULL,
  `kategori` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `content_artikel`, `tanggal_artikel`, `foto_artikel`, `kategori`) VALUES
(2, 'THE ELITE 2017', '<p style=\"text-align:center\"><strong>DASDASD</strong></p>\r\n', '2019-04-20', 'DSC_0246.jpg', '1'),
(4, 'Goodrides Cars n Coffee 2019!', '<p style=\"text-align:center\"><strong>2019 GOODRIDES !</strong></p>\r\n', '2019-04-20', 'DSC_0284.jpg', '0'),
(7, 'F82 M4 SMURF', '<p style=\"text-align:center\"><strong>THE F82 M4 </strong></p>\r\n\r\n<p>Perfect fot everything</p>\r\n', '2019-04-21', 'DSC_0208.jpg', '1'),
(8, 'ITCC 3000', '<p style=\"text-align:center\"><strong>POSMAXX E90 BMW</strong></p>\r\n', '2019-04-21', 'Posma-pag-sentul-march-raceday-ezrasteffanusrama-goodrides-15.jpg', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fitment`
--

CREATE TABLE `fitment` (
  `id_fitment` int(11) NOT NULL,
  `kendaraan_fitment` varchar(255) NOT NULL,
  `judul_fitment` varchar(255) NOT NULL,
  `foto_fitment` varchar(255) NOT NULL,
  `id_wheelfront` int(11) NOT NULL,
  `id_wheelrear` int(11) NOT NULL,
  `id_tirefront` int(11) NOT NULL,
  `id_tirerear` int(11) NOT NULL,
  `katfitment` enum('1','2','3','4','5') NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fitment`
--

INSERT INTO `fitment` (`id_fitment`, `kendaraan_fitment`, `judul_fitment`, `foto_fitment`, `id_wheelfront`, `id_wheelrear`, `id_tirefront`, `id_tirerear`, `katfitment`, `id_user`) VALUES
(1, 'Ford Focus 2013', 'Daily Use Stylish Hatchback', 'DSC_0156.jpg', 4, 2, 2, 2, '5', 1),
(2, '911 GT3 997 2011', 'THE DAILY SPORTSCAR', 'DSC_0285.jpg', 5, 3, 3, 3, '5', 1),
(4, 'BMW E46 M3', 'STANCE E46', 'BMW-E46-M3-Stance-Euro-Style-28.jpg', 7, 5, 5, 5, '1', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `galeri` varchar(255) NOT NULL,
  `tanggal_galeri` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `galeri`, `tanggal_galeri`) VALUES
(3, 'e46m3.jpg', '2019-04-20'),
(5, 'DSC_0807.jpg', '2019-04-25'),
(6, 'DSC_0803.jpg', '2019-04-17'),
(7, '15785234634_f29064c111_o.jpg', '2019-04-21'),
(8, '16381729276_2a4d2ab430_o.jpg', '2019-04-21'),
(9, '16406788432_d1da2a0161_o.jpg', '2019-04-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `komentar` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `komentar`, `id_user`, `id_artikel`) VALUES
(7, 'Halo', 1, 3),
(9, 'bagus sekali', 16, 2),
(10, 'woy', 13, 4),
(11, 'lo anjeng', 18, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tirefront`
--

CREATE TABLE `tirefront` (
  `id_tirefront` int(11) NOT NULL,
  `nama_tirefront` varchar(255) NOT NULL,
  `width_tirefront` bigint(20) NOT NULL,
  `offset_tirefront` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tirefront`
--

INSERT INTO `tirefront` (`id_tirefront`, `nama_tirefront`, `width_tirefront`, `offset_tirefront`) VALUES
(1, 'Michellin', 265, '-4'),
(2, 'Michellin 4S', 55, '1'),
(3, 'Achilles', 45, '1'),
(5, 'Achilles', 44, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tirerear`
--

CREATE TABLE `tirerear` (
  `id_tirerear` int(11) NOT NULL,
  `nama_tirerear` varchar(255) NOT NULL,
  `width_tirerear` bigint(20) NOT NULL,
  `offset_tirerear` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tirerear`
--

INSERT INTO `tirerear` (`id_tirerear`, `nama_tirerear`, `width_tirerear`, `offset_tirerear`) VALUES
(1, 'Michellin', 267, '-4'),
(2, 'Michellin 4S', 65, '2'),
(3, 'Achilles', 55, '2'),
(5, 'Achilles', 55, '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status_user` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `email`, `status_user`) VALUES
(1, 'Alban', 'user', 'user', 'user@gmail.com', '0'),
(13, 'admin', 'admin', 'admin', 'admin', '1'),
(15, 'Elon Musk', 'elon', 'musk', 'elon@gmail.com', '0'),
(16, 'erwin', 'erwin', 'erwin', 'erwin@gmail.com', '0'),
(18, 'aa', 'aa', 'aa', 'aa', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wheelfront`
--

CREATE TABLE `wheelfront` (
  `id_wheelfront` int(11) NOT NULL,
  `nama_wheelfront` varchar(255) NOT NULL,
  `diameter_wheelfront` bigint(20) NOT NULL,
  `width_wheelfront` bigint(20) NOT NULL,
  `offset_wheelfront` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wheelfront`
--

INSERT INTO `wheelfront` (`id_wheelfront`, `nama_wheelfront`, `diameter_wheelfront`, `width_wheelfront`, `offset_wheelfront`) VALUES
(1, 'ddd', 22, 22, 22),
(2, 'dsadsad', 22, 33, 44),
(3, 'TE37', 265, 55, -2),
(4, 'RPCF1', 245, 55, -1),
(5, 'Brixton Forged', 234, 45, 1),
(7, 'BBS CH', 234, 45, -1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wheelrear`
--

CREATE TABLE `wheelrear` (
  `id_wheelrear` int(11) NOT NULL,
  `nama_wheelrear` varchar(255) NOT NULL,
  `diameter_wheelrear` bigint(20) NOT NULL,
  `width_wheelrear` bigint(20) NOT NULL,
  `offset_wheelrear` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wheelrear`
--

INSERT INTO `wheelrear` (`id_wheelrear`, `nama_wheelrear`, `diameter_wheelrear`, `width_wheelrear`, `offset_wheelrear`) VALUES
(1, 'TE37', 285, 75, '-4'),
(2, 'RPCF1', 255, 65, '1'),
(3, 'Brixton Forged', 245, 65, '3'),
(5, 'BBS CH', 245, 55, '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `fitment`
--
ALTER TABLE `fitment`
  ADD PRIMARY KEY (`id_fitment`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `tirefront`
--
ALTER TABLE `tirefront`
  ADD PRIMARY KEY (`id_tirefront`);

--
-- Indexes for table `tirerear`
--
ALTER TABLE `tirerear`
  ADD PRIMARY KEY (`id_tirerear`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `wheelfront`
--
ALTER TABLE `wheelfront`
  ADD PRIMARY KEY (`id_wheelfront`);

--
-- Indexes for table `wheelrear`
--
ALTER TABLE `wheelrear`
  ADD PRIMARY KEY (`id_wheelrear`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `fitment`
--
ALTER TABLE `fitment`
  MODIFY `id_fitment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tirefront`
--
ALTER TABLE `tirefront`
  MODIFY `id_tirefront` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tirerear`
--
ALTER TABLE `tirerear`
  MODIFY `id_tirerear` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `wheelfront`
--
ALTER TABLE `wheelfront`
  MODIFY `id_wheelfront` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `wheelrear`
--
ALTER TABLE `wheelrear`
  MODIFY `id_wheelrear` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
