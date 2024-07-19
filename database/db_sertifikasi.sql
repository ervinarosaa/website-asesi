-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 05:42 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sertifikasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Ervina Rosa Aulia', 'admin1', 'admin001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` varchar(10) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `id_skema` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `email` varchar(100) NOT NULL,
  `whatsapp` varchar(13) NOT NULL,
  `foto_profil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `tanggal_daftar`, `id_skema`, `nama_lengkap`, `jenis_kelamin`, `alamat`, `email`, `whatsapp`, `foto_profil`) VALUES
('ID-00001', '2024-05-08', 2, 'Ervina Rosa Aulia', 'Perempuan', 'Surabaya', 'ervinarosaaulia@gmail.com', '087882191868', '1228c4e39d2a1f01ec22752c29f768e4cc96f41e.jpg'),
('ID-00002', '2024-05-09', 5, 'Christopher Blake Thompson', 'Laki-laki', 'Tokyo, Japan', 'Christopher@gmail.com', '0812347891', '5bc45975c18e69779b008d380a686dba443031f9.jpg'),
('ID-00003', '2024-05-09', 1, 'Miguel Antonio Ramirez', 'Laki-laki', 'London', 'Miguel@gmail.com', '1237429753', 'dc0531af31de4fd9a42dab5b05d7744aa061e257.jpg'),
('ID-00004', '2024-05-09', 5, 'Daniel Lee Kim', 'Laki-laki', 'Seoul, Korea', 'Daniel@gmail.com', '0102375483', 'ee84d0c506a040a71a7670d96aa1453691e83a39.jpg'),
('ID-00005', '2024-05-09', 3, 'William Henry Johnson', 'Laki-laki', 'New York City', 'William@gmail.com', '245673268', '3e186986dc374de98407452cccb3b6598955e50d.jpg'),
('ID-00006', '2024-05-10', 2, 'Owen Michael Brown', 'Laki-laki', 'Singapore', 'Owen@gmail.com', '425689316', '8c7ecb8dff007e76f2b57c836c1fbad9971adfc4.jpg'),
('ID-00007', '2024-05-10', 2, 'Elijah Alexander Garcia', 'Laki-laki', 'United Arab Emirates', 'Elijah@gmail.com', '2345795689', '1ccb92af96b30b70a40ff6adcc95d81c5064095f.jpg'),
('ID-00008', '2024-05-13', 6, 'Noah Ryan Miller', 'Laki-laki', 'Mexico City', 'Noah@gmail.com', '64789316796', 'bcdbbb85b8c398c823753eb354fe11564445c49d.jpg'),
('ID-00009', '2024-05-15', 2, 'Lucas James Davis', 'Laki-laki', 'Buenos Aires', 'Lucas@gmail.com', '7643899436', '384681dd3b96bba23069bc5cc92bf4856ac897b5.jpg'),
('ID-00010', '2024-05-15', 4, 'Benjamin Carter Clark', 'Laki-laki', 'Rio de Janeiro', 'Benjamin@gmail.com', '8743567899', '5fa3a3bb944e106992944b2c26109074f85f2d2c.jpg'),
('ID-00011', '2024-05-20', 2, 'Theodore Andrew Wilson', 'Laki-laki', 'Delhi', 'Theodore@gmail.com', '7832567906', '5bf3b10b1d7b23ebea5c37902588f0be116f936b.jpg'),
('ID-00012', '2024-05-20', 4, 'Adrian Matthew Walker', 'Laki-laki', 'São Paulo', 'Adrian@gmail.com', '864524556', '1fb6f1e946bf9ff432707cfde1d2d590d08a2854.jpg'),
('ID-00013', '2024-05-22', 6, 'Gabriel Joseph Nguyen', 'Laki-laki', 'Dubai', 'Gabriel@gmail.com', '492746543', '53bfb2370b82f96baa4ec27ce7b186d351a58c95.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skema`
--

CREATE TABLE `tbl_skema` (
  `id_skema` int(11) NOT NULL,
  `nama_skema` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_skema`
--

INSERT INTO `tbl_skema` (`id_skema`, `nama_skema`, `deskripsi`, `icon`) VALUES
(1, 'Web Design', 'Gain professional skills in web design with our training and certification. From fundamentals to advanced levels, we guide you through responsive design concepts, intuitive user experiences, and industry best practices. Earn official recognition for your expertise in developing compelling and functional websites through our globally recognized certification program.', 'fa fa-code'),
(2, 'Web Development', 'Embark on mastering web development with our comprehensive program covering HTML, CSS, JavaScript, and more. Learn from industry experts, gain hands-on experience, and earn a recognized certification validating your expertise. Commence your journey towards becoming a skilled web developer today through our program.', 'fa fa-file-code'),
(3, 'Data Analyst', 'Equip yourself with essential data analysis skills through our comprehensive training program. Learn from industry-leading experts, gain practical experience, and earn a recognized certification upon completion. Unlock your potential as a skilled data analyst now! Enhance your career prospects and stay ahead in the competitive field of data analysis.', 'fa fa-external-link-alt'),
(4, 'Mobile Development', 'Master the art of mobile app development with our comprehensive training program. Learn from industry experts and gain hands-on experience with iOS and Android development. Understand key concepts such as UI/UX design, programming, and app deployment. Earn a recognized certification that validates your skills and opens doors to exciting career opportunities.', 'fas fa-laptop'),
(5, 'Game Development', 'Unleash your creativity and technical skills with our comprehensive program. Learn from industry experts, master game design and programming, and gain hands-on experience with leading tools. Earn a recognized certification and open doors to exciting career opportunities in the gaming industry.', 'fas fa-user-secret'),
(6, 'Digital Marketing', 'Master SEO, social media marketing, content creation, and analytics with our comprehensive program. Learn from industry experts and gain hands-on experience. Earn a recognized certification to boost your career opportunities. Start your journey as a proficient digital marketer and stay ahead in the competitive digital landscape.', 'fa fa-envelope-open');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_skema` (`id_skema`);

--
-- Indexes for table `tbl_skema`
--
ALTER TABLE `tbl_skema`
  ADD PRIMARY KEY (`id_skema`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_skema`
--
ALTER TABLE `tbl_skema`
  MODIFY `id_skema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD CONSTRAINT `tbl_siswa_ibfk_1` FOREIGN KEY (`id_skema`) REFERENCES `tbl_skema` (`id_skema`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
