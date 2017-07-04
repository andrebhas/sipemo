-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Jul 2017 pada 20.05
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipemo_new`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_harga_mobil`
--

CREATE TABLE `detail_harga_mobil` (
  `id` int(11) NOT NULL,
  `id_harga_mobil` varchar(5) NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_harga_mobil`
--

INSERT INTO `detail_harga_mobil` (`id`, `id_harga_mobil`, `harga`) VALUES
(1, 'SK101', 80000000),
(2, 'SK101', 90000000),
(3, 'SK102', 91000000),
(4, 'SK102', 100000000),
(5, 'SK103', 101000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_purna_jual`
--

CREATE TABLE `detail_purna_jual` (
  `id` int(11) NOT NULL,
  `harga` double NOT NULL,
  `id_purna_jual` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_purna_jual`
--

INSERT INTO `detail_purna_jual` (`id`, `harga`, `id_purna_jual`) VALUES
(1, 70000000, 'SK401'),
(2, 80000000, 'SK401'),
(3, 81000000, 'SK402'),
(4, 90000000, 'SK402'),
(5, 100000000, 'SK403'),
(6, 200000000, 'SK403'),
(7, 250000000, 'SK404'),
(8, 400000000, 'SK404');

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga_mobil`
--

CREATE TABLE `harga_mobil` (
  `id_harga_mobil` varchar(5) NOT NULL,
  `nilai` int(5) NOT NULL,
  `id_kriteria` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `harga_mobil`
--

INSERT INTO `harga_mobil` (`id_harga_mobil`, `nilai`, `id_kriteria`) VALUES
('SK101', 100, 'K01'),
('SK102', 90, 'K01'),
('SK103', 80, 'K01'),
('SK104', 70, 'K01'),
('SK105', 60, 'K01'),
('SK106', 40, 'K01'),
('SK107', 20, 'K01'),
('SK108', 10, 'K01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kapasitas_penumpang`
--

CREATE TABLE `kapasitas_penumpang` (
  `id_kapasitas_penumpang` varchar(6) NOT NULL,
  `jumlah_kapasitas` int(2) NOT NULL,
  `nilai` int(3) NOT NULL,
  `id_kriteria` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kapasitas_penumpang`
--

INSERT INTO `kapasitas_penumpang` (`id_kapasitas_penumpang`, `jumlah_kapasitas`, `nilai`, `id_kriteria`) VALUES
('SK301', 8, 100, 'K03'),
('SK302', 7, 80, 'K03'),
('SK303', 6, 60, 'K03'),
('SK304', 5, 40, 'K03'),
('SK305', 4, 25, 'K03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_kendaraan`
--

CREATE TABLE `kategori_kendaraan` (
  `id_kategori_kendaraan` varchar(6) NOT NULL,
  `nama_kategori` varchar(8) NOT NULL,
  `nilai` int(3) NOT NULL,
  `id_kriteria` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_kendaraan`
--

INSERT INTO `kategori_kendaraan` (`id_kategori_kendaraan`, `nama_kategori`, `nilai`, `id_kriteria`) VALUES
('SK201', 'City Car', 100, 'K02'),
('SK202', 'MPV', 80, 'K02'),
('SK203', 'Sedan', 60, 'K02'),
('SK204', 'SUV', 40, 'K02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` varchar(6) NOT NULL,
  `kriteria` varchar(20) NOT NULL,
  `bobot` int(2) NOT NULL,
  `normalisasi` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kriteria`, `bobot`, `normalisasi`) VALUES
('K01', 'Harga Mobil', 30, 0.3),
('K02', 'Kategori Kendaraan', 25, 0.25),
('K03', 'Kapasitas Penumpang', 20, 0.2),
('K04', 'Purna Jual', 25, 0.25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `purna_jual`
--

CREATE TABLE `purna_jual` (
  `id_purna_jual` varchar(5) NOT NULL,
  `nilai` int(3) NOT NULL,
  `id_kriteria` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `purna_jual`
--

INSERT INTO `purna_jual` (`id_purna_jual`, `nilai`, `id_kriteria`) VALUES
('SK401', 40, 'K04'),
('SK402', 60, 'K04'),
('SK403', 80, 'K04'),
('SK404', 100, 'K04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `smart_mobil`
--

CREATE TABLE `smart_mobil` (
  `id_smart_mobil` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nama_mobil` text NOT NULL,
  `fitur_keamanan` text NOT NULL,
  `fitur_kelengkapan` text NOT NULL,
  `warna` text NOT NULL,
  `ukuran_cc` int(11) NOT NULL,
  `transmisi` varchar(20) NOT NULL,
  `id_kategori_kendaraan` varchar(6) NOT NULL,
  `id_harga_mobil` varchar(6) NOT NULL,
  `id_kapasitas_penumpang` varchar(6) NOT NULL,
  `id_purna_jual` varchar(6) NOT NULL,
  `nilai_smart` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `smart_mobil`
--

INSERT INTO `smart_mobil` (`id_smart_mobil`, `id_user`, `nama_mobil`, `fitur_keamanan`, `fitur_kelengkapan`, `warna`, `ukuran_cc`, `transmisi`, `id_kategori_kendaraan`, `id_harga_mobil`, `id_kapasitas_penumpang`, `id_purna_jual`, `nilai_smart`) VALUES
(5, 0, 'Toyota All New Camry 2.5 V', 'Airbags, GOA Body, VSC, WIL Concept Front Seat', '8 inch touchscreen Audio-Video, New Wooden Instrument Panel Design, Luxurious and Spacious Cabin, Air Conditioner', 'White Pearl, Silver Metallic, Dark Grey Metallic, Dark Brown Metallic, Black Mica, Blue Mica Metallic', 2494, 'Automatic 6 Speed', 'SK203', 'SK108', 'SK305', 'SK404', 48),
(6, 0, 'Toyota All New VIOS 1500 E A/T', 'Airbags, Anti-Lock Brake System, Electronic Brake Distribution, Break Assist, Alarm dan Immobilizer, Child Seat Hanger', 'Multi Information Display, Electronic Throttle Control System with Intelligence, Smart Entry, Smart System', 'Silver Metallic, Silky Beige Metallic, Red Mica Metallic, Dark Grey Metallic, Black Mica, Quartz Brown', 1500, 'CVT 7 speed', 'SK203', 'SK105', 'SK305', 'SK402', 53),
(9, 0, 'Toyota All New VIOS 1500 E M/T', 'Airbags, Anti-Lock Brake System, Electronic Brake Distribution, Break Assist, Alarm dan Immobilizer, Child Seat Hanger', 'Multi Information Display, Electronic Throttle Control System with Intelligence, Smart Entry, Smart System', 'Silver Metallic, Silky Beige Metallic, Red Mica Metallic, Dark Grey Metallic, Black Mica, Quartz Brown', 1500, 'Manual 5 speed', 'SK203', 'SK105', 'SK305', 'SK402', 53),
(16, 0, 'Toyota All New VIOS 1500 G M/T', 'Airbags, Anti-Lock Brake System, Electronic Brake Distribution, Break Assist, Alarm dan Immobilizer, Child Seat Hanger, Sensor Parkir, Tilt Steering, Speed Sensing Auto Lock', 'Audio dengan DPV MP3 USB, Auto Air Conditioner, Leather Wheel Steering, Smart Start Entry System', 'Silver Metallic, Silky Beige Metallic, Red Mica Metallic, Dark Grey Metallic, Black Mica, Quartz Brown', 1500, 'Manual 5 speed', 'SK203', 'SK105', 'SK305', 'SK402', 53),
(17, 0, 'Toyota Agya E M/T', 'Dual SRS Airbag, Power Door Lock, Power Window', 'AC, Seat Belts, 2 panel audio depan, front room lamp', 'White, Silver Metallic, Black, Grey Metallic, Dark Blue Metallic', 998, 'Manual 5 speed', 'SK201', 'SK103', 'SK305', 'SK401', 64),
(18, 0, 'Toyota Agya E A/T', 'Dual SRS Airbag, Power Door Lock, Power Window', 'AC, Seat Belts, 2 panel audio depan, front room lamp', 'White, Silver Metallic, Black, Grey Metallic, Dark Blue Metallic', 998, 'Automatic 4 Speed', 'SK201', 'SK103', 'SK305', 'SK401', 64),
(19, 0, 'Toyota Kijang Innova New G A/T Diesel', 'Dual SRS Airbag, Collapse Steering Colum, Side Impact Beam, New Seatbelt, Wireless door lock, Powe door lock, Power window, Parking sensor', 'Headlamp, Frontlamp, Foglamp, FrontGrille, AC, Audio', 'Alumina Jade, Attidue Black, Avant Garde Bronze, Dark Grey Mica Metallic, Red, Red Mica Metallic, Silver Metallic, Super White', 2393, 'Automatic 6 Speed', 'SK202', 'SK105', 'SK303', 'SK403', 70),
(20, 0, 'Toyota Kijang Innova New V M/T Diesel', 'Dual SRS Airbag, Collapse Steering Colum, Side Impact Beam, New Seatbelt, Wireless door lock, Powe door lock, Power window, Parking sensor', 'Headlamp, Frontlamp, Foglamp, FrontGrille, AC, Audio', 'Alumina Jade, Attidue Black, Avant Garde Bronze, Dark Grey Mica Metallic, Red, Red Mica Metallic, Silver Metallic, Super White', 2393, 'Manual 5 speed', 'SK202', 'SK106', 'SK302', 'SK404', 73),
(21, 0, 'Toyota New Fortuner 2.5 G M/T', '', '', '', 0, '', 'SK204', 'SK107', 'SK303', 'SK404', 53),
(22, 0, 'Toyota New Fortuner 2.7 V A/T', '', '', '', 0, '', 'SK204', 'SK108', 'SK303', 'SK404', 50),
(23, 0, 'Honda New City E', '', '', '', 0, 'Manual 5 speed', 'SK203', 'SK105', 'SK305', 'SK402', 53),
(24, 0, 'Honda New City E ', '', '', '', 0, 'CVT', 'SK203', 'SK106', 'SK305', 'SK404', 57),
(25, 0, 'Honda Civic 1.8 L', '', '', '', 0, '', 'SK203', 'SK106', 'SK305', 'SK404', 57),
(26, 0, 'Honda Civic 2.0 L', '', '', '', 0, '', 'SK203', 'SK107', 'SK305', 'SK404', 51),
(27, 0, 'Honda Brio Satya', '', '', '', 0, '', 'SK201', 'SK103', 'SK305', 'SK401', 64),
(28, 0, 'Honda Brio Sports', '', '', '', 0, '', 'SK201', 'SK104', 'SK305', 'SK402', 66),
(29, 1, 'Honda CRV 2.0 I-VTEC', 'a', 'a', 'a', 2, 'a', 'SK204', 'SK106', 'SK305', 'SK404', 52),
(30, 1, 'Honda CRV 2.4 I-VTEC', 'a', 'a', 'a', 1, 'a', 'SK204', 'SK107', 'SK305', 'SK404', 46),
(31, 1, 'Honda Jazz A', 'a', 'q', 'q', 1, 'Manual', 'SK201', 'SK104', 'SK305', 'SK402', 66),
(32, 1, 'Honda Jazz RS', 'a', 'A', 'a', 0, 'a', 'SK201', 'SK105', 'SK305', 'SK403', 68),
(33, 1, 'Honda Mobilio', 'a', 'a', 'a', 0, 'a', 'SK202', 'SK104', 'SK303', 'SK402', 68),
(34, 1, 'Daihatsu Ayla D', 'a', 'a', 'a', 0, 'a', 'SK201', 'SK101', 'SK305', 'SK401', 70),
(35, 1, 'Daihatsu Ayla M', 'a', 'a', 'a', 0, 'a', 'SK201', 'SK102', 'SK305', 'SK401', 67),
(36, 1, 'Daihatsu Ayla X', 'a', 'a', 'a', 0, 'a', 'SK201', 'SK103', 'SK305', 'SK401', 64),
(37, 1, 'Daihatsu All New Xenia D', '', '', '', 0, '', 'SK202', 'SK103', 'SK303', 'SK401', 66),
(38, 1, 'Daihatsu All New Xenia M,X,R', '', '', '', 0, '', 'SK202', 'SK104', 'SK303', 'SK402', 68),
(39, 1, 'Toyota All New Avanza', '', '', '', 0, '', 'SK202', 'SK104', 'SK303', 'SK402', 68),
(40, 1, 'Toyota Avanza Veloz 1,5', '', '', '', 0, 'Manual', 'SK202', 'SK104', 'SK303', 'SK402', 68),
(41, 1, 'Toyota Avanza Veloz 1,5', '', '', '', 0, 'Automatic', 'SK202', 'SK105', 'SK303', 'SK403', 70),
(42, 1, 'Toyota New Rush', '', '', '', 0, '', 'SK204', 'SK105', 'SK302', 'SK403', 64),
(43, 1, 'Daihatsu Sirion', '', '', '', 0, '', 'SK201', 'SK104', 'SK305', 'SK402', 66),
(44, 1, 'Nissan Teana', '', '', '', 0, '', 'SK203', 'SK108', 'SK305', 'SK404', 48),
(45, 1, 'Nissan All New Grand Livina SV', '', '', '', 0, '', 'SK202', 'SK104', 'SK302', 'SK402', 72),
(46, 1, 'Nissan All New Grand Livina XV', '', '', '', 0, '', 'SK202', 'SK105', 'SK302', 'SK403', 74),
(47, 1, 'Nissan All New March 1.2', '', '', '', 0, 'Manual', 'SK201', 'SK103', 'SK305', 'SK401', 64),
(48, 1, 'Nissan All New March 1.2', '', '', '', 0, 'Automatic', 'SK201', 'SK104', 'SK305', 'SK402', 66),
(49, 1, 'Nissan Elgrand', '', '', '', 0, '', 'SK202', 'SK108', 'SK301', 'SK404', 68);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `level` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'egit', '12345', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_harga_mobil`
--
ALTER TABLE `detail_harga_mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_purna_jual`
--
ALTER TABLE `detail_purna_jual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `harga_mobil`
--
ALTER TABLE `harga_mobil`
  ADD PRIMARY KEY (`id_harga_mobil`);

--
-- Indexes for table `kapasitas_penumpang`
--
ALTER TABLE `kapasitas_penumpang`
  ADD PRIMARY KEY (`id_kapasitas_penumpang`);

--
-- Indexes for table `kategori_kendaraan`
--
ALTER TABLE `kategori_kendaraan`
  ADD PRIMARY KEY (`id_kategori_kendaraan`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `purna_jual`
--
ALTER TABLE `purna_jual`
  ADD PRIMARY KEY (`id_purna_jual`);

--
-- Indexes for table `smart_mobil`
--
ALTER TABLE `smart_mobil`
  ADD PRIMARY KEY (`id_smart_mobil`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_harga_mobil`
--
ALTER TABLE `detail_harga_mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `detail_purna_jual`
--
ALTER TABLE `detail_purna_jual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `smart_mobil`
--
ALTER TABLE `smart_mobil`
  MODIFY `id_smart_mobil` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
