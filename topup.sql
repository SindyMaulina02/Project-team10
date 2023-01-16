-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2023 at 02:22 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topup`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengelola`
--

CREATE TABLE `pengelola` (
  `id` int(11) NOT NULL,
  `game` varchar(100) NOT NULL,
  `username` varchar(250) NOT NULL,
  `id_game` char(8) NOT NULL,
  `diamond` int(100) NOT NULL,
  `pembayaran` int(250) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `alamat` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengelola`
--

INSERT INTO `pengelola` (`id`, `game`, `username`, `id_game`, `diamond`, `pembayaran`, `tanggal_pembayaran`, `alamat`) VALUES
(1, '', 'ichika', '21722007', 257, 50000, '2022-12-23', ''),
(2, '', 'miku', '21788703', 240, 46000, '2022-12-14', ''),
(4, '', 'wangjarim', '21432604', 257, 50000, '2022-12-27', ''),
(10, 'pubg', 'Nino', '53215214', 29, 10000, '2022-12-29', 'Bnadung'),
(12, 'pubg', 'itsuki', '23253252', 1250, 250000, '0000-00-00', ''),
(16, 'pubg', 'ghaidaaaa', '63226464', 2500, 500000, '2023-01-01', ''),
(19, 'pubg', 'yotsuba', '12345678', 70, 14000, '2023-01-08', ''),
(20, 'pubg', 'anjaymabr', '71422000', 1250, 250000, '2023-01-03', ''),
(21, 'pubg', 'Nino', '36352526', 70, 14000, '2023-01-05', ''),
(22, 'pubg', 'itsuki', '26326223', 2500, 500000, '2023-01-07', ''),
(23, 'Mobile Legend', 'first', '34646232', 1708, 527000, '2023-01-07', ''),
(24, 'Genshin Impact', 'ghaidaaaa', '57346376', 6480, 1599000, '2023-01-05', ''),
(25, 'Mobile Legend', 'kakakaka', '46462235', 1708, 527000, '2023-01-08', ''),
(26, 'PUBG', 'rem', '23632462', 29, 10000, '2023-01-08', ''),
(27, 'Genshin Impact', 'itsuki', '25235235', 300, 79000, '2023-01-08', ''),
(28, 'PUBG', 'dapi', '15151521', 70, 14000, '2023-01-12', ''),
(29, 'PUBG', 'ghaidaaaaf', '26447347', 40, 12000, '2023-01-10', ''),
(30, 'Mobile Legend', 'tir_fathir.08', '13245676', 1708, 527000, '2023-01-11', ''),
(31, 'Genshin Impact', 'lontong sate', '92839890', 0, 79000, '2023-01-12', ''),
(32, 'Genshin Impact', 'rapli', '12424214', 6480, 1599000, '2023-01-16', ''),
(33, 'Mobile Legend', 'reza', '25332532', 1708, 527000, '2023-01-12', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username_login` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `jenis_kelamin` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username_login`, `password`, `jenis_kelamin`, `email`, `level`) VALUES
(1, 'Admin', 'admin123', 'Male', 'farhan350411@gmail.com', 'admin'),
(2, 'ghaida', '$2y$10$9AdobfA5vl4ZF/jXHHJmbOxnsk9KXlmA3w5LKXbtoJIbr6mo4NPs.', 'Female', 'aaa@aaa', ''),
(4, 'ayala', '$2y$10$eXhQvqiIiXCBIpz/owcps.HGj1Jyd8p/nm5zosfzaFVH6.4rLbF5u', 'Male', 'aaaaa@aaaa', ''),
(5, 'gading', '$2y$10$eq06SLcIinv/jKgdejM2L.INgiL7jy5seEKkZp1YNJb7GAC7G6cmy', 'Male', 'sdssvsdv@sdvdsvd', ''),
(6, 'bukan gilang', '$2y$10$nOuU19hg170x0m5ExVg8bu4/VzCs3oO1cBHuJOHiPYGS5CRuXhhJi', 'Male', 'email@gmail.com', ''),
(7, 'ayam_geprek', '$2y$10$SDKuaY8nzkWUhc5ktN/OSOhsZpeQXB2l2vD0r/Gk1qo..XRexDFiO', 'Male', 'ayam@gmail.com', ''),
(8, 'wisnu', '$2y$10$mzx7yNU/QXFaE1h2WyXaIOkboJf04RrGF.7ewTcepkSgAPG21VoWi', 'Male', 'wisnu@gmail.com', ''),
(9, 'wisnu1', '$2y$10$T62YI3R3tgDU.lUM1.YOquu27jC9Z2mOh5bR4OUZTDtx2Vnw9eI.q', 'Male', 'wisnu@gmail.com', ''),
(10, 'jono', '$2y$10$m75bNlNkli0Uptu2p1ofquRK8lOfXyqMEXbUZ49tSeMBVcUrSdnrC', 'Male', 'jonointhesky@gmail.com', ''),
(11, 'fachriza', '$2y$10$d631TCYNfwZPVTY9piE07e0.V1mD8keWTRvmjuYFe5wVKM7117epy', 'Male', 'dddd@gmail.com', ''),
(12, 'mieramensatu', '$2y$10$tKIgtPaqsnJBQdnuLeawT.zWydWCXqxtR9R8PHDtWjhiqCvLqM1.W', 'Male', 'jdfbsub@gmail.com', ''),
(13, 'chika', '$2y$10$nF6HdRqadlQM8/Cmo8I2AuAaGwlWSAYwIUCPOUhzekjxtYF3TmqaO', 'Female', 'asasasf@asfasfsf', ''),
(14, 'reza', '$2y$10$FQx5UGq0RFBo39sEwTd7ceMqVDNQgrqHpa5sSsweSSllaj5c8Yije', 'Male', 'aada@aa', ''),
(15, 'rerez', '321', 'Male', 'asas@asas', ''),
(16, 'patir', '$2y$10$OGHdYlyPSblo6pkHDgpdCuyfp/3Bja4sdSf/nI99jFLvNJwJ9dayK', 'Male', 'fathir08062004@gmail.com', ''),
(17, 'dasa', '$2y$10$GZdk2pU91ELnYZfoff5zOem86eLvtYvgGZci1bGYD7aHAO9/Gl9Ae', 'Male', 'ddd@a', ''),
(18, 'dewa wisnu', '$2y$10$ECEth6eQMGueDxOJUU/77uFm8NH.MayglBlyEbPKfHqGewdzxvaFa', 'Male', 'jjjsj@qqqq', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengelola`
--
ALTER TABLE `pengelola`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengelola`
--
ALTER TABLE `pengelola`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
