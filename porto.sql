-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2022 at 05:17 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `porto`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(5) NOT NULL,
  `aboutimg` varchar(255) NOT NULL,
  `heading1` varchar(30) NOT NULL,
  `heading2` varchar(30) NOT NULL,
  `subheading1` varchar(50) NOT NULL,
  `subheading2` varchar(50) NOT NULL,
  `subheading3` varchar(50) NOT NULL,
  `deskripsi1` varchar(255) NOT NULL,
  `deskripsi2` varchar(255) NOT NULL,
  `deskripsi3` varchar(255) NOT NULL,
  `tgl_lahir` varchar(100) NOT NULL,
  `umur` varchar(3) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `kota` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `aboutimg`, `heading1`, `heading2`, `subheading1`, `subheading2`, `subheading3`, `deskripsi1`, `deskripsi2`, `deskripsi3`, `tgl_lahir`, `umur`, `no_hp`, `kota`) VALUES
(2, 'about-img-alt.JPG', 'about', 'wildan', 'junior', 'backend', 'developer', 'We need to accept that we won’t always make the right decisions, that we’ll screw up royally sometimes―understanding that failure is not the opposite of success, it’s part of success. \r\n-Arianna Huffington', 'Halo Semua, perkenalkan nama saya Muhammad Wildan Fadhilah. Biasa dipanggil Wildan. Saya merupakan seorang mahasiswa semester 5 program studi Informatika di Universitas Pembangunan Jaya.', 'Saat ini saya sedang tertarik untuk mengambil jalur Web Development, khususnya di sisi BackEnd. Suka mengulik hal-hal yang berkaitan dengan BackEnd Development.', '5 November 2001', '20', '+62 8815 4942', 'tangerang selatan');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `my_email` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `lokasi`, `my_email`, `no_hp`, `nama`, `email`, `subjek`, `pesan`) VALUES
(1, '', '', '', 'Wildan', 'wildanwildan@yahoo.co.id', 'Test form contact pertama', 'Ini isi form contact pertama'),
(2, '', '', '', 'Wildan', 'wildanwildan@yahoo.co.id', 'Test form contact pertama', 'Ini isi form contact pertama'),
(3, '', '', '', 'Jamal', 'jamal.jamal@yahoo.com', 'Ini Pesan Jamal', 'Jamal memberikan pesan'),
(4, 'Serua, Ciputat, Tangerang Selatan', 'wildan.fhd@gmail.com', '+62 8815 4942', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(4) NOT NULL,
  `judulsatu` varchar(30) NOT NULL,
  `juduldua` varchar(30) NOT NULL,
  `judultiga` varchar(30) NOT NULL,
  `judulempat` varchar(30) NOT NULL,
  `profileimg` varchar(100) NOT NULL,
  `judulimg` varchar(255) NOT NULL,
  `subjudulimg` varchar(255) NOT NULL,
  `skill1` varchar(10) NOT NULL,
  `skill2` varchar(20) NOT NULL,
  `skill3` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `judulsatu`, `juduldua`, `judultiga`, `judulempat`, `profileimg`, `judulimg`, `subjudulimg`, `skill1`, `skill2`, `skill3`) VALUES
(3, 'HI, I\'M WILDAN.', 'A BACKEND', 'DEVELOPER', 'BASED IN TANGSEL', 'profile-img.JPG', 'https://assets.website-files.com/62673e4070051ac9b30ad8c7/62673e4070051a81b30ad8d3_Icon%201.svg', 'https://assets.website-files.com/62673e4070051ac9b30ad8c7/62673e4070051abbfd0ad8d5_Icon%203.svg', 'java', 'javascript', 'php');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `heading` varchar(30) NOT NULL,
  `headerimg` varchar(30) NOT NULL,
  `pro_title_1` varchar(50) NOT NULL,
  `pro_img_1` varchar(30) NOT NULL,
  `pro_title_2` varchar(50) NOT NULL,
  `pro_img_2` varchar(30) NOT NULL,
  `pro_title_3` varchar(50) NOT NULL,
  `pro_img_3` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `heading`, `headerimg`, `pro_title_1`, `pro_img_1`, `pro_title_2`, `pro_img_2`, `pro_title_3`, `pro_img_3`) VALUES
(1, 'projects', 'project-header.png', 'BookShelf API', 'project-1.png', 'Vending Machine', 'project-2.png', 'Redesign UPJ Web', 'project-3.png');

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `id` int(11) NOT NULL,
  `heading` varchar(30) NOT NULL,
  `desc1` varchar(255) NOT NULL,
  `desc2` varchar(255) NOT NULL,
  `desc3` varchar(255) NOT NULL,
  `desc4` varchar(255) NOT NULL,
  `desc5` varchar(255) NOT NULL,
  `desc6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`id`, `heading`, `desc1`, `desc2`, `desc3`, `desc4`, `desc5`, `desc6`) VALUES
(1, 'tools', 'Sebagai Code Editor pada saat membuat dan mengembangkan program', 'Satu dari tiga bahasa pemrograman yang saya gunakan untuk membuat program', 'Satu dari tiga bahasa pemrograman yang saya gunakan untuk membuat program', 'Satu dari tiga bahasa pemrograman yang saya gunakan untuk membuat program', 'Framework CSS yang saya gunakan ketika membuat web', 'Framework yang saya gunakan ketika membuat RESTFUL API');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
