-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2025 at 03:59 AM
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
-- Database: `pulauseribu`
--

-- --------------------------------------------------------

--
-- Table structure for table `harga_paket`
--

CREATE TABLE `harga_paket` (
  `harga_id` int(11) NOT NULL,
  `paket_id` int(11) NOT NULL,
  `min_peserta` int(11) NOT NULL,
  `max_peserta` int(11) NOT NULL,
  `harga_per_pax` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `harga_paket`
--

INSERT INTO `harga_paket` (`harga_id`, `paket_id`, `min_peserta`, `max_peserta`, `harga_per_pax`) VALUES
(1, 1, 2, 2, 865000),
(2, 1, 3, 3, 675000),
(3, 1, 4, 4, 595000),
(4, 1, 5, 6, 525000),
(5, 1, 7, 9, 445000),
(6, 1, 10, 15, 395000),
(7, 1, 16, 20, 385000),
(8, 1, 21, 50, 345000),
(9, 1, 51, 9999, 335000),
(10, 2, 2, 2, 1375000),
(11, 2, 3, 3, 1275000),
(12, 2, 4, 4, 1095000),
(13, 2, 5, 6, 1025000),
(14, 2, 7, 9, 945000),
(15, 2, 10, 15, 895000),
(16, 2, 16, 20, 885000),
(17, 2, 21, 50, 845000),
(18, 2, 51, 9999, 835000),
(19, 3, 2, 2, 1225000),
(20, 3, 3, 3, 925000),
(21, 3, 4, 4, 825000),
(22, 3, 5, 6, 725000),
(23, 3, 7, 9, 665000),
(24, 3, 10, 15, 505000),
(25, 3, 16, 20, 505000),
(26, 3, 21, 50, 475000),
(27, 3, 51, 9999, 445000),
(28, 4, 2, 2, 1725000),
(29, 4, 3, 3, 1425000),
(30, 4, 4, 4, 1325000),
(31, 4, 5, 6, 1125000),
(32, 4, 7, 9, 1065000),
(33, 4, 10, 15, 1008000),
(34, 4, 16, 20, 1005000),
(35, 4, 21, 50, 950000),
(36, 4, 51, 9999, 945000),
(37, 5, 1, 9999, 950000),
(38, 6, 2, 2, 3500000),
(39, 6, 3, 3, 3200000),
(40, 6, 4, 4, 3000000),
(41, 6, 5, 6, 2800000),
(42, 6, 7, 9, 2600000),
(43, 6, 10, 15, 2400000),
(44, 6, 16, 20, 2300000),
(45, 6, 21, 50, 2100000),
(46, 6, 51, 9999, 2000000),
(47, 7, 2, 2, 3700000),
(48, 7, 3, 3, 3400000),
(49, 7, 4, 4, 3200000),
(50, 7, 5, 6, 3000000),
(51, 7, 7, 9, 2800000),
(52, 7, 10, 15, 2600000),
(53, 7, 16, 20, 2500000),
(54, 7, 21, 50, 2300000),
(55, 7, 51, 9999, 2200000),
(56, 8, 2, 2, 4000000),
(57, 8, 3, 3, 3700000),
(58, 8, 4, 4, 3500000),
(59, 8, 5, 6, 3300000),
(60, 8, 7, 9, 3100000),
(61, 8, 10, 15, 2900000),
(62, 8, 16, 20, 2800000),
(63, 8, 21, 50, 2600000),
(64, 8, 51, 9999, 2500000),
(65, 9, 2, 2, 4200000),
(66, 9, 3, 3, 3900000),
(67, 9, 4, 4, 3700000),
(68, 9, 5, 6, 3500000),
(69, 9, 7, 9, 3300000),
(70, 9, 10, 15, 3100000),
(71, 9, 16, 20, 3000000),
(72, 9, 21, 50, 2800000),
(73, 9, 51, 9999, 2700000),
(74, 10, 1, 9999, 550000),
(75, 11, 1, 9999, 1500000),
(76, 12, 1, 9999, 1500000),
(77, 13, 1, 9999, 1500000),
(78, 14, 1, 9999, 1500000),
(79, 15, 2, 2, 880000),
(80, 15, 3, 3, 775000),
(81, 15, 4, 4, 750000),
(82, 15, 5, 5, 700000),
(83, 15, 6, 6, 650000),
(84, 15, 7, 9, 600000),
(85, 15, 10, 15, 550000),
(86, 15, 16, 9999, 530000),
(87, 16, 2, 2, 855000),
(88, 16, 3, 3, 444000),
(89, 16, 4, 4, 373000),
(90, 16, 5, 5, 340000),
(91, 16, 6, 6, 322000),
(92, 16, 7, 7, 296000),
(93, 16, 8, 8, 278000),
(94, 16, 9, 9999, 277000),
(95, 17, 2, 2, 815000),
(96, 17, 3, 3, 724000),
(97, 17, 4, 4, 653000),
(98, 17, 5, 5, 620000),
(99, 17, 6, 6, 602000),
(100, 17, 7, 7, 576000),
(101, 17, 8, 8, 572000),
(102, 17, 9, 9999, 568000),
(103, 18, 2, 2, 690000),
(104, 18, 3, 3, 777000),
(105, 18, 4, 4, 635000),
(106, 18, 5, 5, 560000),
(107, 18, 6, 6, 494000),
(108, 18, 7, 7, 452000),
(109, 18, 8, 8, 452000),
(110, 18, 9, 9999, 416000),
(111, 19, 2, 2, 1240000),
(112, 19, 3, 3, 1057000),
(113, 19, 4, 4, 915000),
(114, 19, 5, 5, 840000),
(115, 19, 6, 6, 774000),
(116, 19, 7, 7, 732000),
(117, 19, 8, 8, 732000),
(118, 19, 9, 9999, 696000),
(119, 20, 2, 2, 836000),
(120, 20, 3, 3, 686000),
(121, 20, 4, 4, 606000),
(122, 20, 5, 5, 511000),
(123, 20, 6, 6, 471000),
(124, 20, 7, 7, 451000),
(125, 20, 8, 8, 431000),
(126, 20, 9, 9, 421000),
(127, 20, 10, 14, 381000),
(128, 20, 15, 19, 371000),
(129, 20, 20, 9999, 361000),
(130, 24, 2, 2, 860000),
(131, 24, 3, 3, 755000),
(132, 24, 4, 4, 730000),
(133, 24, 5, 5, 680000),
(134, 24, 6, 6, 630000),
(135, 24, 7, 9, 580000),
(136, 24, 10, 15, 530000),
(137, 24, 16, 999, 510000),
(138, 25, 2, 2, 560000),
(139, 25, 3, 3, 510000),
(140, 25, 4, 4, 440000),
(141, 25, 5, 5, 380000),
(142, 25, 6, 6, 360000),
(143, 25, 7, 8, 350000),
(144, 25, 9, 15, 350000),
(145, 25, 16, 999, 320000),
(146, 26, 2, 2, 880000),
(147, 26, 3, 3, 830000),
(148, 26, 4, 4, 760000),
(149, 26, 5, 5, 700000),
(150, 26, 6, 6, 680000),
(151, 26, 7, 8, 670000),
(152, 26, 9, 15, 670000),
(153, 26, 16, 999, 640000),
(154, 27, 2, 2, 860000),
(155, 27, 3, 3, 760000),
(156, 27, 4, 4, 680000),
(157, 27, 5, 5, 560000),
(158, 27, 6, 6, 560000),
(159, 27, 7, 8, 510000),
(160, 27, 9, 15, 460000),
(161, 27, 16, 999, 440000),
(162, 28, 2, 2, 1180000),
(163, 28, 3, 3, 1080000),
(164, 28, 4, 4, 1010000),
(165, 28, 5, 5, 960000),
(166, 28, 6, 6, 880000),
(167, 28, 7, 8, 830000),
(168, 28, 9, 15, 780000),
(169, 28, 16, 999, 760000),
(170, 29, 2, 2, 760000),
(171, 29, 3, 3, 660000),
(172, 29, 4, 4, 540000),
(173, 29, 5, 5, 480000),
(174, 29, 6, 6, 440000),
(175, 29, 7, 7, 410000),
(176, 29, 8, 9, 390000),
(177, 29, 10, 10, 380000),
(178, 29, 11, 15, 370000),
(179, 29, 16, 999, 345000),
(180, 30, 2, 2, 1080000),
(181, 30, 3, 3, 980000),
(182, 30, 4, 4, 860000),
(183, 30, 5, 5, 800000),
(184, 30, 6, 6, 760000),
(185, 30, 7, 7, 730000),
(186, 30, 8, 9, 710000),
(187, 30, 10, 10, 700000),
(188, 30, 11, 15, 700000),
(189, 30, 16, 999, 665000),
(190, 31, 2, 2, 1110000),
(191, 31, 3, 3, 880000),
(192, 31, 4, 4, 780000),
(193, 31, 5, 5, 690000),
(194, 31, 6, 6, 650000),
(195, 31, 7, 7, 630000),
(196, 31, 8, 9, 610000),
(197, 31, 10, 10, 510000),
(198, 31, 11, 15, 485000),
(199, 31, 16, 999, 470000),
(200, 32, 2, 2, 1370000),
(201, 32, 3, 3, 1200000),
(202, 32, 4, 4, 1100000),
(203, 32, 5, 5, 1010000),
(204, 32, 6, 6, 970000),
(205, 32, 7, 7, 950000),
(206, 32, 8, 9, 920000),
(207, 32, 10, 10, 880000),
(208, 32, 11, 15, 830000),
(209, 32, 16, 999, 800000),
(210, 34, 2, 2, 800000),
(211, 34, 3, 3, 695000),
(212, 34, 4, 4, 670000),
(213, 34, 5, 5, 620000),
(214, 34, 6, 6, 570000),
(215, 34, 7, 9, 520000),
(216, 34, 10, 15, 470000),
(217, 34, 16, 999, 450000),
(218, 35, 2, 2, 722000),
(219, 35, 3, 4, 572000),
(220, 35, 5, 6, 422000),
(221, 35, 7, 9, 382000),
(222, 35, 10, 15, 362000),
(223, 35, 16, 20, 342000),
(224, 35, 21, 999, 332000),
(225, 36, 2, 2, 1000000),
(226, 36, 3, 4, 850000),
(227, 36, 5, 6, 710000),
(228, 36, 7, 9, 660000),
(229, 36, 10, 15, 640000),
(230, 36, 16, 20, 620000),
(231, 36, 21, 999, 610000),
(232, 37, 2, 2, 1022000),
(233, 37, 3, 4, 772000),
(234, 37, 5, 6, 582000),
(235, 37, 7, 9, 522000),
(236, 37, 10, 15, 482000),
(237, 37, 16, 20, 462000),
(238, 37, 21, 999, 452000),
(239, 38, 2, 2, 1300000),
(240, 38, 3, 4, 1050000),
(241, 38, 5, 6, 860000),
(242, 38, 7, 9, 790000),
(243, 38, 10, 15, 760000),
(244, 38, 16, 20, 740000),
(245, 38, 21, 999, 730000);

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `paket_id` int(11) NOT NULL,
  `pulau_id` int(11) NOT NULL,
  `jenis_paket` varchar(50) NOT NULL,
  `durasi` varchar(20) DEFAULT NULL,
  `via_transport` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`paket_id`, `pulau_id`, `jenis_paket`, `durasi`, `via_transport`) VALUES
(1, 1, 'Lengkap', '2H1M', 'Fery'),
(2, 1, 'Lengkap', '2H1M', 'Speedboat'),
(3, 1, 'Lengkap', '3H2M', 'Fery'),
(4, 1, 'Lengkap', '3H2M', 'Speedboat'),
(5, 2, 'One Day', NULL, NULL),
(6, 2, 'Lengkap', '2H1M', 'Fery'),
(7, 2, 'Lengkap', '2H1M', 'Speedboat'),
(8, 2, 'Lengkap', '3H2M', 'Fery'),
(9, 2, 'Lengkap', '3H2M', 'Speedboat'),
(10, 3, 'One Day', NULL, NULL),
(11, 3, 'Lengkap', '2H1M', 'Fery'),
(12, 3, 'Lengkap', '2H1M', 'Speedboat'),
(13, 3, 'Lengkap', '3H2M', 'Fery'),
(14, 3, 'Lengkap', '3H2M', 'Speedboat'),
(15, 4, 'One Day', NULL, NULL),
(16, 4, 'Hemat', '2H1M', 'Fery'),
(17, 4, 'Hemat', '2H1M', 'Speedboat'),
(18, 4, 'Hemat', '3H2M', 'Fery'),
(19, 4, 'Hemat', '3H2M', 'Speedboat'),
(20, 4, 'Lengkap', '2H1M', 'Fery'),
(21, 4, 'Lengkap', '2H1M', 'Speedboat'),
(22, 4, 'Lengkap', '3H2M', 'Fery'),
(23, 4, 'Lengkap', '3H2M', 'Speedboat'),
(24, 5, 'One Day', NULL, 'Fery'),
(25, 5, 'One Day', NULL, 'Speedboat'),
(26, 5, 'Hemat', '2H1M', 'Fery'),
(27, 5, 'Hemat', '2H1M', 'Speedboat'),
(28, 5, 'Hemat', '3H2M', 'Fery'),
(29, 5, 'Hemat', '3H2M', 'Speedboat'),
(30, 5, 'Lengkap', '2H1M', 'Fery'),
(31, 5, 'Lengkap', '2H1M', 'Speedboat'),
(32, 5, 'Lengkap', '3H2M', 'Fery'),
(33, 5, 'Lengkap', '3H2M', 'Speedboat'),
(34, 6, 'ONE DAY', NULL, NULL),
(35, 6, 'HEMAT', '2H1M', 'Fery'),
(36, 6, 'HEMAT', '2H1M', 'Speedboat'),
(37, 6, 'HEMAT', '3H2M', 'Fery'),
(38, 6, 'HEMAT', '3H2M', 'Speedboat');

-- --------------------------------------------------------

--
-- Table structure for table `pemesan`
--

CREATE TABLE `pemesan` (
  `pemesan_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesan`
--

INSERT INTO `pemesan` (`pemesan_id`, `nama`, `email`, `telepon`, `alamat`) VALUES
(1, '', '', '', ''),
(2, 'paw', 'melanibunga23@gmail.com', '082294008004', 'Jatirejo, rt 02/ rw 12, Wonoboyo, Wonogiri'),
(3, 'paw', 'melanibunga23@gmail.com', '082294008004', 'Jatirejo, rt 02/ rw 12, Wonoboyo, Wonogiri'),
(4, 'paw', 'melanibunga23@gmail.com', '082294008004', 'Jatirejo, rt 02/ rw 12, Wonoboyo, Wonogiri'),
(5, 'paw', 'melanibunga23@gmail.com', '082294008004', 'Jatirejo, rt 02/ rw 12, Wonoboyo, Wonogiri'),
(6, 'paw', 'melanibunga23@gmail.com', '082294008004', 'Jatirejo, rt 02/ rw 12, Wonoboyo, Wonogiri'),
(7, 'paw', 'melanibunga23@gmail.com', '082294008004', 'Jatirejo, rt 02/ rw 12, Wonoboyo, Wonogiri'),
(8, '', '', '', ''),
(9, '', '', '', ''),
(10, '', '', '', ''),
(11, '', '', '', ''),
(12, 'paw', 'melanibunga23@gmail.com', '082294008004', 'Jatirejo, rt 02/ rw 12, Wonoboyo, Wonogiri'),
(13, 'paw', 'melanibunga23@gmail.com', '082294008004', 'Jatirejo, rt 02/ rw 12, Wonoboyo, Wonogiri'),
(14, 'paw', 'melanibunga23@gmail.com', '082294008004', NULL),
(15, 'paw', 'melanibunga23@gmail.com', '082294008004', NULL),
(16, 'paw', 'melanibunga23@gmail.com', '082294008004', 'Jatirejo, rt 02/ rw 12, Wonoboyo, Wonogiri'),
(17, 'paw', 'melanibunga23@gmail.com', '082294008004', 'Jatirejo, rt 02/ rw 12, Wonoboyo, Wonogiri'),
(18, 'paw', 'melanibunga23@gmail.com', '082294008004', 'Jatirejo, rt 02/ rw 12, Wonoboyo, Wonogiri'),
(19, 'paw', 'melanibunga23@gmail.com', '082294008004', 'Jatirejo, rt 02/ rw 12, Wonoboyo, Wonogiri'),
(20, 'paw', 'melanibunga23@gmail.com', '082294008004', 'Jatirejo, rt 02/ rw 12, Wonoboyo, Wonogiri'),
(21, 'paw', 'melanibunga23@gmail.com', '082294008004', 'Jatirejo, rt 02/ rw 12, Wonoboyo, Wonogiri'),
(22, 'paw', 'melanibunga23@gmail.com', '082294008004', 'Jatirejo, rt 02/ rw 12, Wonoboyo, Wonogiri'),
(23, 'cleosa', 'vania@gmail.com', '084453667389', 'bekasi'),
(24, 'cleosa', 'vania@gmail.com', '084453667389', 'bekasi'),
(25, 'pipi', 'pipi@gmail.com', '392892839298', 'jsahsaj'),
(26, 'melani', 'melanibunga@gmail.com', '082294008004', 'bulusulir');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `pemesanan_id` int(11) NOT NULL,
  `pemesan_id` int(11) NOT NULL,
  `paket_id` int(11) NOT NULL,
  `peserta` int(11) NOT NULL,
  `sewa_boat` tinyint(1) NOT NULL DEFAULT 0,
  `total_harga` int(11) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `status_pembayaran` enum('BELUM LUNAS','LUNAS') DEFAULT 'BELUM LUNAS'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`pemesanan_id`, `pemesan_id`, `paket_id`, `peserta`, `sewa_boat`, `total_harga`, `tanggal`, `status_pembayaran`) VALUES
(3, 19, 11, 2, 0, 3000000, '2025-05-26 03:52:46', 'BELUM LUNAS'),
(5, 21, 35, 5, 0, 2110000, '2025-05-26 10:57:51', NULL),
(9, 25, 2, 12, 0, 10740000, '2025-05-26 12:54:46', 'BELUM LUNAS');

-- --------------------------------------------------------

--
-- Table structure for table `pulau`
--

CREATE TABLE `pulau` (
  `pulau_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga_sewa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pulau`
--

INSERT INTO `pulau` (`pulau_id`, `nama`, `harga_sewa`) VALUES
(1, 'Pulau Harapan', 28000000),
(2, 'Pulau Macan', 34500000),
(3, 'Pulau Bidadari', 22700000),
(4, 'Pulau Pari', 25200000),
(5, 'Pulau Tidung', 26800000),
(6, 'Pulau Pramuka', 27900000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('pembeli','pengelola') NOT NULL DEFAULT 'pembeli'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `role`) VALUES
(1, 'admin@gmail.com', 'adminweb', '$2y$10$YiQD6mxVKIPFRg0t0vH2/.0iLXqPjRl5EFs3.Xl8wicGIiPa1Ll1q', 'pengelola'),
(4, 'tata@gmail.com', 'tata', '$2y$10$qC/NHn9F2wH5uNTYPTT5keQ55fLodla4ZXTCuafUUYVDVWmYtU7VO', 'pembeli'),
(5, 'valo@gmail.com', 'valo', '$2y$10$RW/spIwOJEnnahEBnO.fkOXHOu6hkSNg2BHDNljPOqbUvYQAAjaCO', 'pembeli'),
(6, 'zahra@gmail.com', 'zahra', '$2y$10$PFw4/MbW6DsU1C.uq.nRFerydex0dR/hJvgeT6lu49m32KGdEOSfG', 'pembeli');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `harga_paket`
--
ALTER TABLE `harga_paket`
  ADD PRIMARY KEY (`harga_id`),
  ADD KEY `paket_id` (`paket_id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`paket_id`),
  ADD KEY `pulau_id` (`pulau_id`);

--
-- Indexes for table `pemesan`
--
ALTER TABLE `pemesan`
  ADD PRIMARY KEY (`pemesan_id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`pemesanan_id`),
  ADD KEY `pemesan_id` (`pemesan_id`),
  ADD KEY `paket_id` (`paket_id`);

--
-- Indexes for table `pulau`
--
ALTER TABLE `pulau`
  ADD PRIMARY KEY (`pulau_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `harga_paket`
--
ALTER TABLE `harga_paket`
  MODIFY `harga_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `paket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `pemesan`
--
ALTER TABLE `pemesan`
  MODIFY `pemesan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `pemesanan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pulau`
--
ALTER TABLE `pulau`
  MODIFY `pulau_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `harga_paket`
--
ALTER TABLE `harga_paket`
  ADD CONSTRAINT `harga_paket_ibfk_1` FOREIGN KEY (`paket_id`) REFERENCES `paket` (`paket_id`);

--
-- Constraints for table `paket`
--
ALTER TABLE `paket`
  ADD CONSTRAINT `paket_ibfk_1` FOREIGN KEY (`pulau_id`) REFERENCES `pulau` (`pulau_id`);

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`pemesan_id`) REFERENCES `pemesan` (`pemesan_id`),
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`paket_id`) REFERENCES `paket` (`paket_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
