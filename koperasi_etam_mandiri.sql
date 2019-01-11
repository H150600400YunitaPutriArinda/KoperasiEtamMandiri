-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2018 at 01:35 PM
-- Server version: 10.1.26-MariaDB
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
-- Database: `koperasi_etam_mandiri`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `id_admin` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `level_user` enum('Admin','Anggota','Ketua Koperasi') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `anggotas_id` int(11) NOT NULL,
  `simpanans_id` int(11) NOT NULL,
  `pinjamans_id` int(11) NOT NULL,
  `transaksis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `id_admin`, `username`, `password`, `level_user`, `created_at`, `updated_at`, `deleted_at`, `anggotas_id`, `simpanans_id`, `pinjamans_id`, `transaksis_id`) VALUES
(4, 'AD001', 'yunitapa99', 'h150600111', 'Admin', NULL, NULL, NULL, 3, 2, 3, 1),
(5, 'AD002', 'tris110', 'h150600112', 'Anggota', NULL, NULL, NULL, 4, 3, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `anggotas`
--

CREATE TABLE `anggotas` (
  `id` int(11) NOT NULL,
  `id_anggota` varchar(45) DEFAULT NULL,
  `nama_anggota` varchar(45) DEFAULT NULL,
  `alamat_anggota` varchar(45) DEFAULT NULL,
  `no_hp_anggota` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `anggotas`
--

INSERT INTO `anggotas` (`id`, `id_anggota`, `nama_anggota`, `alamat_anggota`, `no_hp_anggota`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'ANG001', 'Budi', 'Jl. Dr. Ismail No.22', '081250772611', NULL, NULL, NULL),
(4, 'ANG002', 'Marcelina Sule', 'Jl. Margahayu No.21', '085250464783', NULL, NULL, NULL),
(5, 'ANG003', 'Trisha Veronika', 'Jl. Merbabu No.01', '081347856742', NULL, NULL, NULL),
(6, 'ANG004', 'Yunita Putri Arinda', 'Jl. Slamet No.05', '081251702775', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `anggotas_has_pinjamans`
--

CREATE TABLE `anggotas_has_pinjamans` (
  `anggotas_id` int(11) NOT NULL,
  `pinjamans_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `anggotas_has_simpanans`
--

CREATE TABLE `anggotas_has_simpanans` (
  `anggotas_id` int(11) NOT NULL,
  `simpanans_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `anggotas_has_transaksis`
--

CREATE TABLE `anggotas_has_transaksis` (
  `anggotas_id` int(11) NOT NULL,
  `transaksis_id` int(11) NOT NULL,
  `transaksis_simpanans_id` int(11) NOT NULL,
  `transaksis_pinjamans_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ketua_koperasis`
--

CREATE TABLE `ketua_koperasis` (
  `id` int(11) NOT NULL,
  `id_ket_koperasi` varchar(45) DEFAULT NULL,
  `nama_ket_koperasi` varchar(45) DEFAULT NULL,
  `alamat_ket_koperasi` varchar(45) DEFAULT NULL,
  `no_hp_ket_koperasi` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admins_id` int(11) NOT NULL,
  `transaksis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ketua_koperasis`
--

INSERT INTO `ketua_koperasis` (`id`, `id_ket_koperasi`, `nama_ket_koperasi`, `alamat_ket_koperasi`, `no_hp_ket_koperasi`, `created_at`, `deleted_at`, `updated_at`, `admins_id`, `transaksis_id`) VALUES
(2, 'KOP131', 'Dimas', 'Jl. M. Yamin No.90', '081251702890', NULL, NULL, NULL, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pinjamans`
--

CREATE TABLE `pinjamans` (
  `id` int(11) NOT NULL,
  `kd_pinjaman` varchar(45) DEFAULT NULL,
  `jangka_waktu_pinjaman` enum('Per-Bulan','Per-Tahun') DEFAULT NULL,
  `tgl_pinjaman` date DEFAULT NULL,
  `jml_pinjaman_dan_bunga_pinjaman` enum('Rp 1.000.000 +2%','Rp 1.500.000 + 3%','Rp 2.000.000 + 4%','Rp 2.500.000 + 5%','Rp 3.000.000 + 6%','Rp 3.500.000 + 7%','Rp 4.000.000 + 8%','Rp 4.500.000 + 9%','Rp 5.000.000 + 10%') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pinjamans`
--

INSERT INTO `pinjamans` (`id`, `kd_pinjaman`, `jangka_waktu_pinjaman`, `tgl_pinjaman`, `jml_pinjaman_dan_bunga_pinjaman`, `created_at`, `deleted_at`, `updated_at`) VALUES
(3, 'PIN0100', 'Per-Bulan', '2018-01-01', 'Rp 1.000.000 +2%', NULL, NULL, NULL),
(4, 'PIN0111', 'Per-Tahun', '2018-01-05', 'Rp 1.500.000 + 3%', NULL, NULL, NULL),
(5, 'PIN0112', 'Per-Bulan', '2018-01-02', 'Rp 2.000.000 + 4%', NULL, NULL, NULL),
(6, 'PIN0113', 'Per-Tahun', '2018-01-03', 'Rp 2.500.000 + 5%', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `simpanans`
--

CREATE TABLE `simpanans` (
  `id` int(11) NOT NULL,
  `kd_simpanan` varchar(45) DEFAULT NULL,
  `jenis_simpanan` enum('Uang','Barang','Surat Berharga') DEFAULT NULL,
  `tgl_simpanan` date DEFAULT NULL,
  `jml_simpanan` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `simpanans`
--

INSERT INTO `simpanans` (`id`, `kd_simpanan`, `jenis_simpanan`, `tgl_simpanan`, `jml_simpanan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'SIM020', 'Uang', '2018-01-01', 'Rp 5.000.000', NULL, NULL, NULL),
(3, 'SIM021', 'Barang', '2018-01-02', '2', NULL, NULL, NULL),
(4, 'SIM022', 'Surat Berharga', '2018-01-05', '5', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id` int(11) NOT NULL,
  `kd_transaksi` varchar(45) DEFAULT NULL,
  `jenis_pembayaran` enum('Tunai') DEFAULT NULL,
  `tgl_pembayaran` date DEFAULT NULL,
  `jml_pembayaran_dan_bunga_pinjaman` enum('Rp 1.020.000','Rp 1.545.000','Rp 2.080.000','Rp 2.625.000','Rp 3.180.000','Rp 3.745.000','Rp 4.320.000','Rp 4.905.000','Rp 5.500.000') DEFAULT NULL,
  `id_anggota` varchar(45) DEFAULT NULL,
  `nama_anggota` varchar(45) DEFAULT NULL,
  `id_ket_koperasi` varchar(45) DEFAULT NULL,
  `nama_ket_koperasi` varchar(45) DEFAULT NULL,
  `kd_simpanan` varchar(45) DEFAULT NULL,
  `jenis_simpanan` enum('Uang','Barang','Surat Berharga') DEFAULT NULL,
  `tgl_simpanan` date DEFAULT NULL,
  `jml_simpanan` varchar(45) DEFAULT NULL,
  `kd_pinjaman` varchar(45) DEFAULT NULL,
  `jangka_waktu_pinjaman` enum('Per-Bulan','Per-Tahun') DEFAULT NULL,
  `tgl_pinjaman` date DEFAULT NULL,
  `jml_pinjaman_dan_bunga_pinjaman` enum('Rp 1.000.000 +2%','Rp 1.500.000 + 3%','Rp 2.000.000 + 4%','Rp 2.500.000 + 5%','Rp 3.000.000 + 6%','Rp 3.500.000 + 7%','Rp 4.000.000 + 8%','Rp 4.500.000 + 9%','Rp 5.000.000 + 10%') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `simpanans_id` int(11) NOT NULL,
  `pinjamans_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`id`, `kd_transaksi`, `jenis_pembayaran`, `tgl_pembayaran`, `jml_pembayaran_dan_bunga_pinjaman`, `id_anggota`, `nama_anggota`, `id_ket_koperasi`, `nama_ket_koperasi`, `kd_simpanan`, `jenis_simpanan`, `tgl_simpanan`, `jml_simpanan`, `kd_pinjaman`, `jangka_waktu_pinjaman`, `tgl_pinjaman`, `jml_pinjaman_dan_bunga_pinjaman`, `created_at`, `updated_at`, `deleted_at`, `simpanans_id`, `pinjamans_id`) VALUES
(1, 'TRANS111', 'Tunai', '2018-01-07', 'Rp 1.020.000', 'ANG001', 'Budi', 'KOP131', 'Dimas', 'SIM020', 'Uang', '2018-01-01', 'Rp 5.000.000', 'PIN0100', 'Per-Bulan', '2018-01-01', 'Rp 1.000.000 +2%', NULL, NULL, NULL, 2, 3),
(2, 'TRANS112', 'Tunai', '2018-01-10', 'Rp 1.545.000', 'ANG002', 'Marcelina Sule', 'KOP131', 'Dimas', 'SIM021', 'Barang', '2018-01-02', '2', 'PIN0111', 'Per-Tahun', '2018-01-05', 'Rp 1.500.000 + 3%', NULL, NULL, NULL, 3, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`,`anggotas_id`,`simpanans_id`,`pinjamans_id`,`transaksis_id`),
  ADD KEY `fk_admins_anggotas_idx` (`anggotas_id`),
  ADD KEY `fk_admins_simpanans1_idx` (`simpanans_id`),
  ADD KEY `fk_admins_pinjamans1_idx` (`pinjamans_id`),
  ADD KEY `fk_admins_transaksis1_idx` (`transaksis_id`);

--
-- Indexes for table `anggotas`
--
ALTER TABLE `anggotas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggotas_has_pinjamans`
--
ALTER TABLE `anggotas_has_pinjamans`
  ADD PRIMARY KEY (`anggotas_id`,`pinjamans_id`),
  ADD KEY `fk_anggotas_has_pinjamans_pinjamans1_idx` (`pinjamans_id`),
  ADD KEY `fk_anggotas_has_pinjamans_anggotas1_idx` (`anggotas_id`);

--
-- Indexes for table `anggotas_has_simpanans`
--
ALTER TABLE `anggotas_has_simpanans`
  ADD PRIMARY KEY (`anggotas_id`,`simpanans_id`),
  ADD KEY `fk_anggotas_has_simpanans_simpanans1_idx` (`simpanans_id`),
  ADD KEY `fk_anggotas_has_simpanans_anggotas1_idx` (`anggotas_id`);

--
-- Indexes for table `anggotas_has_transaksis`
--
ALTER TABLE `anggotas_has_transaksis`
  ADD PRIMARY KEY (`anggotas_id`,`transaksis_id`,`transaksis_simpanans_id`,`transaksis_pinjamans_id`),
  ADD KEY `fk_anggotas_has_transaksis_transaksis1_idx` (`transaksis_id`,`transaksis_simpanans_id`,`transaksis_pinjamans_id`),
  ADD KEY `fk_anggotas_has_transaksis_anggotas1_idx` (`anggotas_id`);

--
-- Indexes for table `ketua_koperasis`
--
ALTER TABLE `ketua_koperasis`
  ADD PRIMARY KEY (`id`,`admins_id`,`transaksis_id`),
  ADD KEY `fk_ketua_koperasis_admins1_idx` (`admins_id`),
  ADD KEY `fk_ketua_koperasis_transaksis1_idx` (`transaksis_id`);

--
-- Indexes for table `pinjamans`
--
ALTER TABLE `pinjamans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `simpanans`
--
ALTER TABLE `simpanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`,`simpanans_id`,`pinjamans_id`),
  ADD KEY `fk_transaksis_simpanans1_idx` (`simpanans_id`),
  ADD KEY `fk_transaksis_pinjamans1_idx` (`pinjamans_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `anggotas`
--
ALTER TABLE `anggotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ketua_koperasis`
--
ALTER TABLE `ketua_koperasis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pinjamans`
--
ALTER TABLE `pinjamans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `simpanans`
--
ALTER TABLE `simpanans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `fk_admins_anggotas` FOREIGN KEY (`anggotas_id`) REFERENCES `anggotas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_admins_pinjamans1` FOREIGN KEY (`pinjamans_id`) REFERENCES `pinjamans` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_admins_simpanans1` FOREIGN KEY (`simpanans_id`) REFERENCES `simpanans` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_admins_transaksis1` FOREIGN KEY (`transaksis_id`) REFERENCES `transaksis` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `anggotas_has_pinjamans`
--
ALTER TABLE `anggotas_has_pinjamans`
  ADD CONSTRAINT `fk_anggotas_has_pinjamans_anggotas1` FOREIGN KEY (`anggotas_id`) REFERENCES `anggotas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_anggotas_has_pinjamans_pinjamans1` FOREIGN KEY (`pinjamans_id`) REFERENCES `pinjamans` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `anggotas_has_simpanans`
--
ALTER TABLE `anggotas_has_simpanans`
  ADD CONSTRAINT `fk_anggotas_has_simpanans_anggotas1` FOREIGN KEY (`anggotas_id`) REFERENCES `anggotas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_anggotas_has_simpanans_simpanans1` FOREIGN KEY (`simpanans_id`) REFERENCES `simpanans` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `anggotas_has_transaksis`
--
ALTER TABLE `anggotas_has_transaksis`
  ADD CONSTRAINT `fk_anggotas_has_transaksis_anggotas1` FOREIGN KEY (`anggotas_id`) REFERENCES `anggotas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_anggotas_has_transaksis_transaksis1` FOREIGN KEY (`transaksis_id`,`transaksis_simpanans_id`,`transaksis_pinjamans_id`) REFERENCES `transaksis` (`id`, `simpanans_id`, `pinjamans_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ketua_koperasis`
--
ALTER TABLE `ketua_koperasis`
  ADD CONSTRAINT `fk_ketua_koperasis_admins1` FOREIGN KEY (`admins_id`) REFERENCES `admins` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ketua_koperasis_transaksis1` FOREIGN KEY (`transaksis_id`) REFERENCES `transaksis` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD CONSTRAINT `fk_transaksis_pinjamans1` FOREIGN KEY (`pinjamans_id`) REFERENCES `pinjamans` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_transaksis_simpanans1` FOREIGN KEY (`simpanans_id`) REFERENCES `simpanans` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
