-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2018 at 06:06 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('1fu917d29m73rv1h8plicbp1uvo9u3gm', '::1', 1546219267, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363231393236373b),
('2nq0rg8vnb298tvsrde8b4bbvmvf248v', '::1', 1546225744, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363232353734343b),
('38klut427n9bpgputc2too48du5oisgm', '::1', 1546215162, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363231353136323b),
('3kvf1s6psdnv9jdjebf2l49bts7j5rb0', '::1', 1546221485, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363232313438353b),
('5cq4dmemuqpnsj6e6e6lndfij7pihetk', '::1', 1546218200, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363231383230303b),
('600h5g6nj2e73toev45ohbjk8t6prsrs', '::1', 1546216628, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363231363632383b),
('8iaks43gbfonba44a8tlh9u2bgrmdv3d', '::1', 1546217541, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363231373534313b),
('bk1t46be8kbevndld761ob9lvs13t16g', '::1', 1546225360, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363232353336303b),
('cgb1131dpjrseq82d7p58vfvafatp3sh', '::1', 1546217063, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363231373036333b),
('evvgjdit6fr9kflr69eghntrc3k4sdit', '::1', 1546225810, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363232353734343b),
('fccfahedfjfhsashcdtb42lkec2trec8', '::1', 1546223529, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363232333532393b),
('fr76lv985e8pkg11mpbqpfshqscr1po1', '::1', 1546215768, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363231353736383b),
('gku8knqc7pkdcon8rju5kmk5sju35iob', '::1', 1546218524, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363231383532343b),
('h3rfpfa88ojrsdv9k3nmjjgitvmmujei', '::1', 1546222930, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363232323933303b),
('isqc609pr72ttb12q16e1433qhlnd8qp', '::1', 1546222547, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363232323534373b),
('jav3blnfopkgg6fejneltil2vi0bc83e', '::1', 1546223943, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363232333934333b),
('jfk68g0hajplshdc8gp20llp83mpjsv2', '::1', 1546218873, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363231383837333b),
('ng980oj64lt074l9vm5b7v922dvpjrp0', '::1', 1546216148, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363231363134383b),
('nktetq2r5mk44uk5g7fsq58lebng6f8e', '::1', 1546220949, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363232303934393b),
('vge94pn95jbpn9tfjv2svafqmtfuth7l', '::1', 1546224553, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363232343535333b);

-- --------------------------------------------------------

--
-- Table structure for table `t_administrasi`
--

CREATE TABLE `t_administrasi` (
  `admin_id` int(11) NOT NULL,
  `admin_kode` char(20) NOT NULL,
  `admin_nama` varchar(120) NOT NULL,
  `admin_biaya` int(11) NOT NULL,
  `admin_status` enum('aktif','nonaktif') NOT NULL,
  `admin_insertedDate` date NOT NULL,
  `admin_updatedDate` date NOT NULL,
  `admin_deletedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_administrasi`
--

INSERT INTO `t_administrasi` (`admin_id`, `admin_kode`, `admin_nama`, `admin_biaya`, `admin_status`, `admin_insertedDate`, `admin_updatedDate`, `admin_deletedDate`) VALUES
(1, 'ADM01', 'Umum', 10000, 'aktif', '2018-12-24', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `t_dokter`
--

CREATE TABLE `t_dokter` (
  `dr_id` int(11) NOT NULL,
  `dr_kode` char(20) NOT NULL,
  `dr_nama` varchar(120) NOT NULL,
  `dr_nama_lengkap` varchar(250) NOT NULL,
  `dr_gelar` char(20) NOT NULL,
  `dr_tlp` varchar(20) NOT NULL,
  `dr_alamat` varchar(250) NOT NULL,
  `dr_email` varchar(100) NOT NULL,
  `dr_status` enum('aktif','nonaktif') NOT NULL,
  `dr_insertedDate` datetime NOT NULL,
  `dr_updatedDate` datetime DEFAULT NULL,
  `dr_deletedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_dokter`
--

INSERT INTO `t_dokter` (`dr_id`, `dr_kode`, `dr_nama`, `dr_nama_lengkap`, `dr_gelar`, `dr_tlp`, `dr_alamat`, `dr_email`, `dr_status`, `dr_insertedDate`, `dr_updatedDate`, `dr_deletedDate`) VALUES
(1, 'DP001', 'Gunawan', 'dr. I Wayan Gunawan Suarna Sp.IT', 'IT', '087865468492', 'Jalan Teuku Umar No 114 Denpasar', 'gunawansuarna@gmail.com', 'aktif', '2018-12-23 00:00:00', NULL, NULL),
(2, 'DP002', 'Anik', 'anik', 'anik', 'anik', 'anik', 'anik', 'aktif', '2018-12-23 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_jaminan`
--

CREATE TABLE `t_jaminan` (
  `jaminan_id` int(11) NOT NULL,
  `jaminan_kode` char(20) NOT NULL,
  `jaminan_nama` varchar(120) NOT NULL,
  `jaminan_status` enum('aktif','nonaktif') NOT NULL,
  `jaminan_potongan_tindakan` double NOT NULL,
  `jaminan_potongan_obat` double NOT NULL,
  `jaminan_insertedDate` date NOT NULL,
  `jaminan_updatedDate` date NOT NULL,
  `jaminan_deletedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_jaminan`
--

INSERT INTO `t_jaminan` (`jaminan_id`, `jaminan_kode`, `jaminan_nama`, `jaminan_status`, `jaminan_potongan_tindakan`, `jaminan_potongan_obat`, `jaminan_insertedDate`, `jaminan_updatedDate`, `jaminan_deletedDate`) VALUES
(1, '0000', 'Umum / Pribadi', 'aktif', 0, 0, '2018-12-24', '0000-00-00', '0000-00-00'),
(2, '0001', 'Asing', 'aktif', 0, 0, '2018-12-24', '0000-00-00', '0000-00-00'),
(3, '0002', 'Admedika', 'aktif', 20, 20, '2018-12-24', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `t_layanan`
--

CREATE TABLE `t_layanan` (
  `layanan_id` int(11) NOT NULL,
  `layanan_kode` char(20) NOT NULL,
  `layanan_nama` varchar(120) NOT NULL,
  `layanan_status` enum('aktif','nonaktif') NOT NULL,
  `layanan_insertedDate` date NOT NULL,
  `layanan_updatedDate` date DEFAULT NULL,
  `layanan_deletedDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_layanan`
--

INSERT INTO `t_layanan` (`layanan_id`, `layanan_kode`, `layanan_nama`, `layanan_status`, `layanan_insertedDate`, `layanan_updatedDate`, `layanan_deletedDate`) VALUES
(1, '01', 'Poli Umum', 'aktif', '2018-12-24', NULL, NULL),
(2, '02', 'Poli Mata', 'aktif', '2018-12-24', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_m_dokter_jadwal`
--

CREATE TABLE `t_m_dokter_jadwal` (
  `jadwal_id` int(11) NOT NULL,
  `dr_id` int(11) NOT NULL,
  `layanan_id` int(11) NOT NULL,
  `jadwal_hari` enum('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday') NOT NULL,
  `jadwal_jam_open` time NOT NULL,
  `jadwal_jam_close` time NOT NULL,
  `jadwal_max_px` int(11) NOT NULL,
  `jadwal_waktu_per_px` int(11) NOT NULL,
  `jadwal_insertedDate` date NOT NULL,
  `jadwal_updatedDate` date DEFAULT NULL,
  `jadwal_deletedDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_m_dokter_jadwal`
--

INSERT INTO `t_m_dokter_jadwal` (`jadwal_id`, `dr_id`, `layanan_id`, `jadwal_hari`, `jadwal_jam_open`, `jadwal_jam_close`, `jadwal_max_px`, `jadwal_waktu_per_px`, `jadwal_insertedDate`, `jadwal_updatedDate`, `jadwal_deletedDate`) VALUES
(1, 1, 1, 'Sunday', '10:00:00', '15:00:00', 50, 15, '2018-12-31', NULL, NULL),
(3, 1, 1, 'Monday', '09:05:00', '14:00:00', 20, 2, '2018-12-31', '2018-12-31', NULL),
(4, 1, 1, 'Tuesday', '10:00:00', '18:00:00', 20, 4, '2018-12-31', '2018-12-31', '2018-12-31'),
(5, 2, 2, 'Sunday', '09:00:00', '15:30:00', 20, 20, '2018-12-31', NULL, NULL),
(6, 2, 2, 'Tuesday', '09:00:00', '14:00:00', 20, 20, '2018-12-31', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`,`ip_address`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `t_administrasi`
--
ALTER TABLE `t_administrasi`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `t_dokter`
--
ALTER TABLE `t_dokter`
  ADD PRIMARY KEY (`dr_id`);

--
-- Indexes for table `t_jaminan`
--
ALTER TABLE `t_jaminan`
  ADD PRIMARY KEY (`jaminan_id`);

--
-- Indexes for table `t_layanan`
--
ALTER TABLE `t_layanan`
  ADD PRIMARY KEY (`layanan_id`);

--
-- Indexes for table `t_m_dokter_jadwal`
--
ALTER TABLE `t_m_dokter_jadwal`
  ADD PRIMARY KEY (`jadwal_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_administrasi`
--
ALTER TABLE `t_administrasi`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_dokter`
--
ALTER TABLE `t_dokter`
  MODIFY `dr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_jaminan`
--
ALTER TABLE `t_jaminan`
  MODIFY `jaminan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_layanan`
--
ALTER TABLE `t_layanan`
  MODIFY `layanan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_m_dokter_jadwal`
--
ALTER TABLE `t_m_dokter_jadwal`
  MODIFY `jadwal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
