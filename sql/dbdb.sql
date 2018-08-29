-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Agu 2018 pada 10.46
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`uname`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `employee`
--

CREATE TABLE `employee` (
  `nama` varchar(100) NOT NULL,
  `nmr` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `tmptlhr` varchar(100) NOT NULL,
  `tgllhr` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `pnddkn` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `posisi` varchar(50) NOT NULL,
  `pnglman` varchar(255) NOT NULL,
  `hobby` varchar(100) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `notlp` varchar(15) NOT NULL,
  `email` varchar(150) NOT NULL,
  `status` varchar(100) NOT NULL,
  `jmlhkeluarga` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kodepos` varchar(10) NOT NULL,
  `bpjs` varchar(100) NOT NULL,
  `rekening` varchar(100) NOT NULL,
  `gbr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `employee`
--

INSERT INTO `employee` (`nama`, `nmr`, `pass`, `tmptlhr`, `tgllhr`, `gender`, `pnddkn`, `agama`, `unit`, `posisi`, `pnglman`, `hobby`, `nohp`, `notlp`, `email`, `status`, `jmlhkeluarga`, `alamat`, `kodepos`, `bpjs`, `rekening`, `gbr`) VALUES
('Firdha Rizki Aulia', '52000', '52000', 'Sidoarjo', '31 Juli 1999', 'Female', 'Mahasiswa', 'Islam', 'JKTDIC', 'Staff', 'Ketua Departemen Medfo HMSI', 'Shoping', '', '', 'firdhara@gmail.com', 'Aktif', '', 'Sidoarjo', '69889', '', '', ''),
('Narendra Puspa Adi Negara', '52087', '52087', 'Blitar', '04 Juni 1996', 'Male', 'Mahasiswa', 'Islam', 'JKTDIC', 'Senior Manager', 'Change Management', 'Futsal', '089509936727', '-', 'personal.rendra@gmail.com', 'Aktif', '-', 'Jalan Dr Wahidin Gg Buntu No. 9', '611111', '-', '-', 'prof1.jpg'),
('Imam Teguh Islamy', '52102', '52102', 'Padang', '31 Agustus 1999', 'Male', 'Mahasiswa', 'Islam', 'JKTGDC', 'Staff', 'Ketua Departemen SRD HMSI', 'Shopping', '', '', 'personal.imam@gmail.com', 'Aktif', '', 'Padang', '12341', '', '', ''),
('Farih Fiddaroin Fadli', '52112', '52112', 'Malang', '31 Desember 1999', 'Male', 'Mahasiswa', 'Islam', 'JKTJKT', 'Senior Staff', 'Kahima', 'Reading', '', '', 'farihff@gmail.com', 'Single', '', 'Malang', '65565', '', '', ''),
('Rahardhiwardaya Muhammad', '52143', '52143', 'Bandung', '31 Februari 1999', 'Male', 'Mahasiswa', 'Islam', 'JKTGDC', 'Staff', 'Ketua ISE', 'Reading', '', '', 'rahardo@gmail.com', 'Aktif', '', 'Malang', '65656', '', '', ''),
('Yasin Awwab', '52147', '52147', 'Sidoarjo', '06 Agustus 1999', 'Male', 'Mahasiswa', 'Islam', 'JKTGDC', 'Staff', 'Banyak', 'Sleeping', '', '', 'awwab@gmail.com', 'Aktif', '', 'Sidoarjo', '65656', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`nmr`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
