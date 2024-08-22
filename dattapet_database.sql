-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 22, 2024 at 11:31 AM
-- Server version: 10.6.17-MariaDB-cll-lve
-- PHP Version: 8.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dattapet_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  `date&time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`, `date&time`) VALUES
(1, 'admin@dattapets', '$2y$10$kxSqsOlhpcvmwy4Z9o2xTOLzcRFEppTpentBF78oltVNCjr1Vu32u', '2024-08-22 09:59:04');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blog_title` varchar(50) NOT NULL,
  `blog_topic` varchar(50) NOT NULL,
  `blog` varchar(300) NOT NULL,
  `date&time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `blog_topic`, `blog`, `date&time`) VALUES
(2, 'Dog Breed', 'How to know genunie dog breed', 'If a you want to know about your dog breed jhdhjsdg jsgdhhsd hsbdhgshdghg hgshdghsgdgknsbui hsghghsgdjghy', '2024-06-18 11:14:22'),
(3, 'Dog color', 'Facts about dog color', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quo illum iusto rerum eos perferendis omnis aspernatur quae eum libero culpa rem aut ipsam, veniam praesentium sit, quibusdam impedit sint!', '2024-06-18 07:02:02');

-- --------------------------------------------------------

--
-- Table structure for table `dogs`
--

CREATE TABLE `dogs` (
  `id` int(11) NOT NULL,
  `breed` varchar(25) NOT NULL,
  `description` varchar(500) NOT NULL,
  `origin` varchar(25) NOT NULL,
  `price` int(11) NOT NULL,
  `waight` varchar(25) NOT NULL,
  `color` varchar(25) NOT NULL,
  `sex` varchar(25) NOT NULL,
  `image` varchar(255) NOT NULL,
  `discount` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date&time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dogs`
--

INSERT INTO `dogs` (`id`, `breed`, `description`, `origin`, `price`, `waight`, `color`, `sex`, `image`, `discount`, `quantity`, `date&time`) VALUES
(1, 'Labrador', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste ut sit nobis mollitia ipsa vel quisquam. Rerum odio nihil voluptates aliquid architecto repellat ducimus tempora amet itaque corrupti! Praesentium, quod?', 'United Kingdom', 3000, '35', 'Brown', 'female', 'images/pets/3258download (2).jpg', 0, 0, '2024-06-19 14:13:52'),
(2, 'German shaphard', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste ut sit nobis mollitia ipsa vel quisquam. Rerum odio nihil voluptates aliquid architecto repellat ducimus tempora amet itaque corrupti! Praesentium, quod?', 'United Kingdom', 7000, '52', 'Golden Black', 'male', 'images/pets/16208download (1).jpg', 10, 20, '2024-06-21 10:36:54'),
(4, 'Golden Retriver', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste ut sit nobis mollitia ipsa vel quisquam. Rerum odio nihil voluptates aliquid architecto repellat ducimus tempora amet itaque corrupti! Praesentium, quod?', 'Scotland', 5000, '35', 'Brown', 'male', 'images/pets/73312download.jpg', 8, 5, '2024-06-21 10:43:32'),
(5, 'Labrador', 'asasaasas', 'United Kingdom', 2000, '35', 'Red', 'male', 'images/pets/82091download.jpg', 10, 5, '2024-06-21 13:44:04');

-- --------------------------------------------------------

--
-- Table structure for table `galary_images`
--

CREATE TABLE `galary_images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date&time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galary_images`
--

INSERT INTO `galary_images` (`id`, `image`, `date&time`) VALUES
(1, 'images/galary/13979WhatsApp Image 2024-08-21 at 22.35.47_634ba0a3.jpg', '2024-08-22 10:17:11'),
(2, 'images/galary/85345WhatsApp Image 2024-08-21 at 22.35.47_b6bbe6ba.jpg', '2024-08-22 10:17:21'),
(3, 'images/galary/47500WhatsApp Image 2024-08-21 at 22.35.46_b0dbc202.jpg', '2024-08-22 10:17:30'),
(4, 'images/galary/19443WhatsApp Image 2024-08-21 at 22.35.45_eafe3706.jpg', '2024-08-22 10:17:42'),
(5, 'images/galary/83542WhatsApp Image 2024-08-21 at 22.35.45_e17cb94b.jpg', '2024-08-22 10:17:51'),
(6, 'images/galary/31546WhatsApp Image 2024-08-21 at 22.35.45_da1f0d27.jpg', '2024-08-22 10:18:19'),
(7, 'images/galary/8504WhatsApp Image 2024-08-21 at 22.35.41_3961efc3.jpg', '2024-08-22 10:18:38'),
(8, 'images/galary/74618WhatsApp Image 2024-08-21 at 22.35.40_c759b7c2.jpg', '2024-08-22 10:18:49'),
(9, 'images/galary/25026WhatsApp Image 2024-08-21 at 22.35.39_2acc3c04.jpg', '2024-08-22 10:19:04'),
(10, 'images/galary/40657WhatsApp Image 2024-08-21 at 22.35.38_eb051774.jpg', '2024-08-22 10:19:16'),
(11, 'images/galary/23245WhatsApp Image 2024-08-21 at 22.35.36_14c3983f.jpg', '2024-08-22 10:19:27'),
(12, 'images/galary/19017WhatsApp Image 2024-08-21 at 22.35.34_cde3a997.jpg', '2024-08-22 10:19:39'),
(13, 'images/galary/81048WhatsApp Image 2024-08-21 at 22.35.34_ea51c2e8.jpg', '2024-08-22 10:19:50'),
(14, 'images/galary/92536WhatsApp Image 2024-08-21 at 22.35.33_9574dddd.jpg', '2024-08-22 10:20:00'),
(15, 'images/galary/23133WhatsApp Image 2024-08-21 at 21.07.43_beb930e7.jpg', '2024-08-22 10:20:10'),
(17, 'images/galary/61386WhatsApp Image 2024-08-21 at 21.07.42_5bcc7ee7.jpg', '2024-08-22 10:20:59'),
(18, 'images/galary/41628WhatsApp Image 2024-08-21 at 21.07.42_b30d7d41.jpg', '2024-08-22 10:21:55'),
(19, 'images/galary/46493WhatsApp Image 2024-08-21 at 20.52.28_4ee92223.jpg', '2024-08-22 10:22:06');

-- --------------------------------------------------------

--
-- Table structure for table `site_status`
--

CREATE TABLE `site_status` (
  `id` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `site_status`
--

INSERT INTO `site_status` (`id`, `status`) VALUES
(1, 'on');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date&time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `image`, `date&time`) VALUES
(5, 'images/slider/49974Pet Shop Cover Template - Made with PosterMyWall.jpg', '2024-08-22 09:59:38'),
(6, 'images/slider/74554Pet Shop Cover - Made with PosterMyWall.jpg', '2024-08-22 09:59:48');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `video` varchar(255) NOT NULL,
  `date&time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `you_tube_links`
--

CREATE TABLE `you_tube_links` (
  `id` int(11) NOT NULL,
  `links` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `you_tube_links`
--

INSERT INTO `you_tube_links` (`id`, `links`) VALUES
(1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/xQKMNpxihug?si=4CSgrFr3N-pL-lGR\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>'),
(2, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/8ZoEbTJvwdk?si=2z6WAPfYdrWKqwFp\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>'),
(4, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/TD8Xpo0PNfs?si=v32-hFv7RMyMV_HW\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>'),
(5, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/xBqy8TvdCKg?si=ioDnE1pjRiIt96GF\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>'),
(7, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/yxCFXtpJm7Y?si=wkVWhbZSyr2jWZlI\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>'),
(8, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FUwmIiZV90I?si=Dz_yAQiue_i7RaZP\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>'),
(9, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/iqF9ZmacovE?si=fm37sPi_4DAz4XtA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>'),
(10, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/N88Om30Hf0c?si=VeVKpQ-uq04xwG66\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dogs`
--
ALTER TABLE `dogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galary_images`
--
ALTER TABLE `galary_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_status`
--
ALTER TABLE `site_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `you_tube_links`
--
ALTER TABLE `you_tube_links`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dogs`
--
ALTER TABLE `dogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `galary_images`
--
ALTER TABLE `galary_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `site_status`
--
ALTER TABLE `site_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `you_tube_links`
--
ALTER TABLE `you_tube_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
