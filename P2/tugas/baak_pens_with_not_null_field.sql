-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2024 at 02:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baak_pens`
--

-- --------------------------------------------------------

--
-- Table structure for table `baak2024`
--

CREATE TABLE `baak2024` (
  `NIM` varchar(15) DEFAULT NULL,
  `NAMA` varchar(20) DEFAULT NULL,
  `ALAMAT` varchar(25) DEFAULT NULL,
  `KOTA` varchar(15) DEFAULT NULL,
  `NIP` varchar(15) DEFAULT NULL,
  `NMDOSEN` varchar(20) DEFAULT NULL,
  `MATKUL` varchar(15) DEFAULT NULL,
  `JAM` varchar(6) DEFAULT NULL,
  `RUANG` varchar(10) DEFAULT NULL,
  `NILAI` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `baak2024`
--

INSERT INTO `baak2024` (`NIM`, `NAMA`, `ALAMAT`, `KOTA`, `NIP`, `NMDOSEN`, `MATKUL`, `JAM`, `RUANG`, `NILAI`) VALUES
('1001', 'Anisa', 'Melati 22', 'Surabaya', '2101', 'Bambang', 'Coding', '1-2', 'H-204', 80),
('1001', 'Anisa', 'Melati 22', 'Surabaya', '2102', 'Anang', 'IMK', '3-4', 'JJ-101', 90),
('1001', 'Anisa', 'Melati 22', 'Surabaya', '2104', 'Bambang', 'Bahasa', '5-6', 'H-204', 80),
('1001', 'Anisa', 'Melati 22', 'Surabaya', '2103', 'Neli', 'Inggris', '7-8', 'II-106', 70),
('1002', 'Budi', 'Arjuna 37', 'Surabaya', '2101', 'Bambang', 'Coding', '1-2', 'H-204', 80),
('1002', 'Budi', 'Arjuna 37', 'Surabaya', '2102', 'Anang', 'IMK', '3-4', 'JJ-101', 90),
('1002', 'Budi', 'Arjuna 37', 'Surabaya', '2104', 'Bambang', 'Bahasa', '5-6', 'H-204', 80),
('1002', 'Budi', 'Arjuna 37', 'Surabaya', '2103', 'Neli', 'Inggris', '7-8', 'II-106', 70);

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `NIP` varchar(20) DEFAULT NULL,
  `NAMA` varchar(100) DEFAULT NULL,
  `ALAMAT` varchar(100) DEFAULT NULL,
  `KOTA` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `NOHP` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`NIP`, `NAMA`, `ALAMAT`, `KOTA`, `EMAIL`, `NOHP`) VALUES
('111', 'Bambang Setia', 'Merapi 14', 'Madiun', 'bambang1@gmail.com', '082126609902'),
('112', 'Anang Kunci', 'Garuda 43', 'Blitar', 'anang@gmail.com', '082126609902'),
('113', 'Neli Pisan', 'Mawar 7', 'Malang', 'neli@gmail.com', '082126609903'),
('114', 'Bambang Unik', 'Sepatu 14', 'Bangil', 'bambang2@gmail.com', '082126609904'),
('115', 'Budi Setiaji', 'Jl. Kaliurang', 'Yogyakarta', 'budisetiaji@gmail.com', '082923913923'),
('117', 'Mokuren', 'Jl. Dahlia 7', 'Salatiga', 'mokuren@gmail.com', '082923913922');

--
-- Triggers `dosen`
--
DELIMITER $$
CREATE TRIGGER `delete_dosen` AFTER DELETE ON `dosen` FOR EACH ROW begin
delete from log_dosen where nip = old.nip;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_dosen` BEFORE UPDATE ON `dosen` FOR EACH ROW begin insert into log_dosen
set nip = old.nip, nama_old = old.nama, nama_new = new.nama, waktu = now(); end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `NIP` varchar(10) NOT NULL,
  `NAMA` varchar(20) DEFAULT NULL,
  `PULANG` int(3) DEFAULT NULL,
  `JAM_KERJA` int(3) DEFAULT NULL,
  `GAJI` float DEFAULT NULL,
  `TGLAHIR` date DEFAULT NULL,
  `GENDER` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`NIP`, `NAMA`, `PULANG`, `JAM_KERJA`, `GAJI`, `TGLAHIR`, `GENDER`) VALUES
('20240001', 'Anisa', 0, 8, 400000, '1999-06-14', 'P'),
('20240002', 'Budi', 1, 7, 350000, '2000-02-16', 'L'),
('20240003', 'Cece', 2, 6, 400000, '1999-04-08', 'P'),
('20240004', 'Desi', 1, 7, 350000, '2000-03-29', 'P'),
('20240005', 'Erna', 1, 7, 400000, '2003-07-12', 'P'),
('20240006', 'Fery', 1, 7, 350000, '1999-09-06', 'L'),
('20240007', 'Geje', 3, 5, 400000, '2001-08-16', 'L'),
('20240008', 'Halu', 2, 6, 350000, '2000-05-23', 'L'),
('20240009', 'Leon', 1, 7, 400000, '2002-09-07', 'L'),
('20240010', 'Mila', 0, 8, 350000, '2001-02-11', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `log_dosen`
--

CREATE TABLE `log_dosen` (
  `nip` varchar(15) DEFAULT NULL,
  `nama_old` varchar(20) DEFAULT NULL,
  `nama_new` varchar(20) DEFAULT NULL,
  `alamat_old` varchar(25) DEFAULT NULL,
  `alamat_new` varchar(25) DEFAULT NULL,
  `kota` varchar(15) DEFAULT NULL,
  `waktu` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_dosen`
--

INSERT INTO `log_dosen` (`nip`, `nama_old`, `nama_new`, `alamat_old`, `alamat_new`, `kota`, `waktu`) VALUES
(NULL, 'Budi Setiaji', 'Budi Setiaji', NULL, NULL, NULL, '2024-04-13'),
('11', 'Budi Setiaji', 'Budi Setiaji', NULL, NULL, NULL, '2024-04-13'),
('115', 'Budi Setiaji', 'Budi Setiaji', NULL, NULL, NULL, '2024-04-13'),
('115', 'Budi Setiaji', 'Budi Setiaji', NULL, NULL, NULL, '2024-04-13'),
('115', 'Budi Setiaji', 'Budi Setiaji', NULL, NULL, NULL, '2024-04-13'),
('115', 'Budi Setiaji', 'Budi Setiaji', NULL, NULL, NULL, '2024-04-13'),
('115', 'Budi Setiaji', 'Budi Setiaji', NULL, NULL, NULL, '2024-04-13'),
('115', 'Budi Setiaji', 'Budi Setiaji', NULL, NULL, NULL, '2024-04-13'),
('115', 'Budi Setiaji', 'Budi Setiaji', NULL, NULL, NULL, '2024-04-13'),
('117', NULL, NULL, NULL, NULL, NULL, '2024-04-13'),
('117', NULL, 'Mokuren', NULL, NULL, NULL, '2024-04-13'),
('117', 'Mokuren', 'Mokuren', NULL, NULL, NULL, '2024-04-13'),
('117', 'Mokuren', 'Mokuren', NULL, NULL, NULL, '2024-04-13'),
('111', 'Bambang Setia', 'Bambang Setia', NULL, NULL, NULL, '2024-04-13'),
('114', 'Bambang Unik', 'Bambang Unik', NULL, NULL, NULL, '2024-04-13'),
('115', 'Budi Setiaji', 'Budi Setiaji', NULL, NULL, NULL, '2024-04-13'),
('117', 'Mokuren', 'Mokuren', NULL, NULL, NULL, '2024-04-13'),
('117', 'Mokuren', 'Mokuren Bo', NULL, NULL, NULL, '2024-04-13'),
('117', 'Mokuren Bo', 'Mokuren Bo', NULL, NULL, NULL, '2024-04-14'),
('117', 'Mokuren Bo', 'Mokuren', NULL, NULL, NULL, '2024-04-14'),
('111', 'Bambang Setia', 'Bambang Setia', NULL, NULL, NULL, '2024-04-14'),
('113', 'Neli Pisan', 'Neli Pisan', NULL, NULL, NULL, '2024-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `log_matakuliah`
--

CREATE TABLE `log_matakuliah` (
  `kodemk` varchar(15) DEFAULT NULL,
  `nmmatkul_old` varchar(20) DEFAULT NULL,
  `nmmatkul_new` varchar(20) DEFAULT NULL,
  `waktu` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_matakuliah`
--

INSERT INTO `log_matakuliah` (`kodemk`, `nmmatkul_old`, `nmmatkul_new`, `waktu`) VALUES
('09', 'System Embedded', 'System Embedded', '2024-04-13'),
('14', 'Machine Learning', 'Machine Learning', '2024-04-13'),
('19', 'Artificial Intellige', 'Artificial Intellige', '2024-04-13'),
('11', 'Interaksi Manusia Ko', 'Interaksi Manusia Ko', '2024-04-13'),
('19', 'Artificial Intellige', 'Artificial Intellige', '2024-04-13'),
('19', 'Artificial Intellige', 'Kecerdasan Buatan', '2024-04-13');

-- --------------------------------------------------------

--
-- Table structure for table `log_siswa`
--

CREATE TABLE `log_siswa` (
  `nim` varchar(15) DEFAULT NULL,
  `nama_old` varchar(20) DEFAULT NULL,
  `nama_new` varchar(20) DEFAULT NULL,
  `alamat_old` varchar(25) DEFAULT NULL,
  `alamat_new` varchar(25) DEFAULT NULL,
  `kota` varchar(15) DEFAULT NULL,
  `waktu` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_siswa`
--

INSERT INTO `log_siswa` (`nim`, `nama_old`, `nama_new`, `alamat_old`, `alamat_new`, `kota`, `waktu`) VALUES
(NULL, 'Ana Coppola', 'Ana Coppola', NULL, NULL, NULL, '2024-04-13'),
('1004', 'Dede Aprillia', 'Dede Aprillia', NULL, NULL, NULL, '2024-04-13'),
('', 'Dede Aprillia', 'Dede Aprillia', NULL, NULL, NULL, '2024-04-13'),
('10005', 'Ana Coppola', 'Ana Coppola', NULL, NULL, NULL, '2024-04-13'),
('1007', NULL, 'Arjuna Sakti', NULL, NULL, NULL, '2024-04-13'),
('1009', NULL, 'Karna Kawula', NULL, NULL, NULL, '2024-04-13'),
('1010', 'Chitanda Eru', 'Chitanda Eru', NULL, NULL, NULL, '2024-04-13'),
('1011', 'Oreki Houtarou', 'Oreki Houtarou', NULL, NULL, NULL, '2024-04-13'),
('1011', 'Oreki Houtarou', 'Oreki Houtarou', NULL, NULL, NULL, '2024-04-13'),
('1011', 'Oreki Houtarou', 'Oreki Houtarou', NULL, NULL, NULL, '2024-04-13');

-- --------------------------------------------------------

--
-- Table structure for table `log_transaksi`
--

CREATE TABLE `log_transaksi` (
  `nim` varchar(15) DEFAULT NULL,
  `nip_old` varchar(15) DEFAULT NULL,
  `nip_new` varchar(15) DEFAULT NULL,
  `kodemk_old` varchar(15) DEFAULT NULL,
  `kodemk_new` varchar(15) DEFAULT NULL,
  `waktu` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_transaksi`
--

INSERT INTO `log_transaksi` (`nim`, `nip_old`, `nip_new`, `kodemk_old`, `kodemk_new`, `waktu`) VALUES
('1002', '121', '121', '12', '12', '2024-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` char(10) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `kota` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nohp` varchar(15) DEFAULT NULL,
  `nilai` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`, `kota`, `email`, `nohp`, `nilai`) VALUES
('10001', 'Anton', 'Kertajaya 101', 'Sidoarjo', 'anton001@gmail.com', '81126608801', 80),
('10002', 'Bimas', 'Pahlawan 222', 'Gresik', 'bimas002@gmail.com', '082126608802', 90),
('10003', 'Cicik', 'Manyar 333', 'Mojokerto', 'cicik003@gmail.com', '082126608803', 77),
('10004', 'Duduk', 'Pacar 44', 'Lamongan', 'duduk004@gmail.com', '082126608804', 66),
('10005', 'Erika', 'Tambak 515', 'Malang', 'erika005@gmail.com', '81126608805', 88),
('10006', 'Fredi', 'kapas 63', 'Jombang', 'Fredrik6@gmail.com', '082126608806', 86),
('10007', 'Gilga', 'Polisi 77', 'Nganjuk', 'gilga007@gmail.com', '81126608807', 95),
('10008', 'Hilda', 'Arjuna 88', 'Jember', 'hilda008@gmail.com', '082126608808', 85),
('10009', 'Ikana', 'Semeru 911', 'Ngawi', 'ikana009@gmail.com', '81126608809', 56),
('10010', 'Julia', 'Pakis 100', 'Blitar', 'julia009@gmail.com', '082126608810', 65),
('10011', 'Kevin', 'Peneleh 1011', 'Surabaya', 'kevin011@gmail.com', '082126608811', 90),
('10012', 'Lucy', 'Sidomulyo 1100', 'Surabaya', 'lucy012@gmail.com', '082126608812', 82),
('10013', 'Munir', 'Demak 1101', 'Surabaya', 'munir013@gmail.com', '082126608813', 72),
('10014', 'Nusa', 'Krembangan 1110', 'Surabaya', 'nusa014@gmail.com', '082126608814', 92),
('10015', 'Okita', 'Mayor 1111', 'Surabaya', 'okita015@gmail.com', '082126608815', 86),
('10016', 'Pina', 'Wiromargo 10000', 'Malang', 'pina016@gmail.com', '082126608816', 92),
('10017', 'Quinella', 'Kauman 10001', 'Malang', 'quinella017@gmail.co', '082126608817', 68),
('10018', 'Rushia', 'Setiabudi 10010', 'Malang', 'rushia018@gmail.com', '082126608818', 81),
('10019', 'Suzuki', 'Indragiri 10011', 'Malang', 'suzuki019@gmail.com', '082126608819', 80);

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `KODEMK` varchar(10) NOT NULL,
  `NMMATKUL` varchar(100) DEFAULT NULL,
  `SKS` int(2) DEFAULT NULL,
  `JAM` varchar(5) DEFAULT NULL,
  `RUANG` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`KODEMK`, `NMMATKUL`, `SKS`, `JAM`, `RUANG`) VALUES
('09', 'System Embedded', 3, '3-4', 'H-304'),
('10', 'Pemrograman Dasar', 3, '1-2', 'H-204'),
('11', 'Interaksi Manusia Komputer', 3, '1-2', 'H-204'),
('12', 'Bahasa Inggris', 2, '7-8', 'II-206'),
('13', 'Topik Khusus', 2, '5-6', 'H-204'),
('14', 'Machine Learning', 4, '2-3', 'H-202'),
('19', 'Kecerdasan Buatan', 2, '1-3', 'H-203');

--
-- Triggers `matakuliah`
--
DELIMITER $$
CREATE TRIGGER `delete_matakuliah` AFTER DELETE ON `matakuliah` FOR EACH ROW begin
delete from log_matakuliah where kodemk = old.kodemk;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_matakuliah` BEFORE UPDATE ON `matakuliah` FOR EACH ROW begin insert into log_matakuliah
set kodemk = old.kodemk, nmmatkul_old = old.nmmatkul, nmmatkul_new = new.nmmatkul, waktu = now();
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id` int(11) NOT NULL,
  `kode_ruang` varchar(100) NOT NULL,
  `nama_ruang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id`, `kode_ruang`, `nama_ruang`) VALUES
(2, 'H-202', 'Laboratorium Komputer Visi dan Grafik'),
(3, 'H-203', 'Laboratorium Sistem Digital'),
(4, 'H-204', 'Laboratorium Sistem Komputer Waktu Nyata'),
(5, 'H-206', 'Laboratorium Industrial Robotics'),
(6, 'H-304', 'Laboratorium Sistem Analog'),
(7, 'H323', 'Robotics');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `NIM` varchar(15) DEFAULT NULL,
  `NAMA` varchar(100) DEFAULT NULL,
  `ALAMAT` varchar(100) DEFAULT NULL,
  `KOTA` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`NIM`, `NAMA`, `ALAMAT`, `KOTA`) VALUES
('1001', 'Anisa Milasari', 'Melati 22', 'Surabaya'),
('1002', 'Budi Dharmawan', 'Arjuna 37', 'Surabaya'),
('1003', 'Dede Aprillia', 'Anggrek 9', 'Lamongan'),
('1004', 'Ana Coppola', 'Ladang Jagung 14', 'Jakarta'),
('1007', 'Arjuna Sakti', 'Warna Bintang 3', 'Bekasi'),
('1009', 'Karna Kawula', 'Jl. Arjuna 13', 'Surabaya'),
('1010', 'Chitanda Eru', 'Mawar 24', 'Surabaya'),
('1011', 'Oreki Houtarou', 'Mawar 21', 'Surabaya');

--
-- Triggers `siswa`
--
DELIMITER $$
CREATE TRIGGER `delete_siswa` AFTER DELETE ON `siswa` FOR EACH ROW begin
delete from log_siswa where nim = old.nim;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_siswa` BEFORE UPDATE ON `siswa` FOR EACH ROW begin insert into log_siswa
set nim = old.nim, nama_old = old.nama, nama_new = new.nama, waktu = now();
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `NIM` varchar(15) DEFAULT NULL,
  `NIP` varchar(20) DEFAULT NULL,
  `KODEMK` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `NIM`, `NIP`, `KODEMK`) VALUES
(1, '1001', '111', '10'),
(2, '1001', '112', '11'),
(3, '1001', '113', '12'),
(4, '1001', '114', '13'),
(5, '1002', '111', '10'),
(6, '1002', '112', '11'),
(7, '1002', '113', '12'),
(8, '1002', '114', '13'),
(9, '1000', '111', '09'),
(10, '1007', '117', '14'),
(11, '1009', '119', '19');

--
-- Triggers `transaksi`
--
DELIMITER $$
CREATE TRIGGER `delete_transaksi` AFTER DELETE ON `transaksi` FOR EACH ROW begin
delete from log_transaksi where nim = old.nim;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_transaksi` BEFORE UPDATE ON `transaksi` FOR EACH ROW begin insert into log_transaksi
set nim = old.nim, nip_old = old.nip, nip_new = new.nip, kodemk_old = old.kodemk, kodemk_new = new.kodemk, waktu = now();
end
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD UNIQUE KEY `NIP` (`NIP`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD UNIQUE KEY `NIP` (`NIP`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD UNIQUE KEY `KODEMK` (`KODEMK`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_ruang` (`kode_ruang`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD UNIQUE KEY `NIM` (`NIM`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
