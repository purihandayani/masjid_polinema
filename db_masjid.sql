-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Sep 2018 pada 13.47
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_masjid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(11) NOT NULL,
  `nama_agenda` varchar(75) NOT NULL,
  `jenis_agenda` varchar(50) NOT NULL,
  `waktu` date NOT NULL,
  `pelaksana` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `nama_agenda`, `jenis_agenda`, `waktu`, `pelaksana`) VALUES
(2, 'Polinema Bersholawat', 'Tahunan', '2016-11-24', 'POLINEMA'),
(3, 'Kultum habis ashar', 'Mingguan', '2016-12-24', 'Ketakmiran Masjid'),
(4, 'Belajar terjemahan Al-Qur an / Lafadz', 'Bulanan', '2016-12-27', 'Ketakmiran Masjid'),
(5, 'Pengajian Al-Hikam', 'Bulanan', '2016-12-08', 'Ketakmiran Masjid'),
(6, 'Peringatan Hari Besar Islam', 'Tahunan', '2016-12-12', 'Ketakmiran Masjid'),
(7, 'Kajian Al Qur an / Tahsin', 'Bulanan', '2017-11-23', 'Ketakmiran Masjid'),
(8, 'Lomba Memperingati Bulan Maulid', 'Tahunan', '2017-12-01', 'Ketakmiran Masjid'),
(10, 'Kajian Rabu Rutin', 'Mingguan', '2016-12-28', 'UKM Rispol Polinema'),
(12, 'Kajian Selasa Rutin', 'Bulanan', '2017-10-10', 'Ketakmiran Masjid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggaran`
--

CREATE TABLE `anggaran` (
  `id_anggaran` int(11) NOT NULL,
  `jenis_amal` varchar(75) NOT NULL,
  `bulan` date NOT NULL,
  `donatur` int(20) NOT NULL,
  `pemasukan` int(20) NOT NULL,
  `pengeluaran` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggaran`
--

INSERT INTO `anggaran` (`id_anggaran`, `jenis_amal`, `bulan`, `donatur`, `pemasukan`, `pengeluaran`) VALUES
(2, 'Masjid An-Nur Polinema', '2017-01-06', 3000000, 1500000, 400000),
(3, 'Masjid Raya Polinema', '2016-12-30', 5000000, 0, 0),
(5, 'Masjid An-Nur Polinema', '2017-01-20', 5000000, 6000000, 70000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventaris`
--

CREATE TABLE `inventaris` (
  `kd_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `kondisi_barang` varchar(50) NOT NULL,
  `keterangan_barang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `inventaris`
--

INSERT INTO `inventaris` (`kd_barang`, `nama_barang`, `jumlah_barang`, `kondisi_barang`, `keterangan_barang`) VALUES
(1, 'Lampu', 20, 'Cukup Bagus', ''),
(2, 'Kran Air', 30, 'Cukup Bagus', 'Ada beberapa yang perlu diganti'),
(3, 'Al-Qur an Besar', 48, 'Bagus', ''),
(4, 'Al-Qur an sedang dan kecil', 20, 'Bagus', ''),
(5, 'Microphone', 5, 'Cukup Bagus', '2 perlu pembaharuan'),
(6, 'Salon Speaker', 4, 'Bagus', ''),
(7, 'Sajadah', 20, 'Bagus', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `isi_komentar` text NOT NULL,
  `oleh` varchar(75) NOT NULL,
  `izin` varchar(30) NOT NULL,
  `balasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `isi_komentar`, `oleh`, `izin`, `balasan`) VALUES
(1, 'Coba', 'Amar', 'ya', '-'),
(2, 'Coba kedua', 'Aam', 'tidak', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `qasidah`
--

CREATE TABLE `qasidah` (
  `id_qasidah` int(11) NOT NULL,
  `judul_qasidah` varchar(200) NOT NULL,
  `audio_qasidah` text NOT NULL,
  `text_qasidah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `qasidah`
--

INSERT INTO `qasidah` (`id_qasidah`, `judul_qasidah`, `audio_qasidah`, `text_qasidah`) VALUES
(1, 'Ya Habibana ''Ali', 'https://drive.google.com/open?id=0B2areGwUIK6tVE5rMnZlU29yMHM', 'https://drive.google.com/open?id=0B2areGwUIK6tMVZLdU5CT3NQOHc'),
(2, 'Yaa Waridal Unsi - RJ', 'https://drive.google.com/open?id=0B2areGwUIK6tc1RLc0pERFlpUUk', ''),
(3, 'Ya Habibana Ali - Habib Syeikh', 'https://drive.google.com/open?id=0B2areGwUIK6temFWUEhNVTdQaTQ', 'https://drive.google.com/open?id=0B2areGwUIK6tMVZLdU5CT3NQOHc'),
(4, 'Ya Rasulullah Salumun Alaik (new) - Riyadlul Jannah', 'https://drive.google.com/open?id=0B2areGwUIK6tdjFsV2luWkJ5bUU', ''),
(5, 'Ya Jamalu - JMC', 'https://drive.google.com/open?id=0B2areGwUIK6tdTJqczVuOHVpaEE', ''),
(6, 'Saylillah Yaa Habibana Alwy', '', ''),
(7, 'Muqoddimah Simtudduror', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `anggaran`
--
ALTER TABLE `anggaran`
  ADD PRIMARY KEY (`id_anggaran`);

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`kd_barang`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `qasidah`
--
ALTER TABLE `qasidah`
  ADD PRIMARY KEY (`id_qasidah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `anggaran`
--
ALTER TABLE `anggaran`
  MODIFY `id_anggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `kd_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `qasidah`
--
ALTER TABLE `qasidah`
  MODIFY `id_qasidah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
