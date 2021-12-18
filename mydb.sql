-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2021 at 02:27 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagery`
--

CREATE TABLE `catagery` (
  `id` int(11) NOT NULL,
  `category` varchar(230) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catagery`
--

INSERT INTO `catagery` (`id`, `category`) VALUES
(1, 'madhubani'),
(2, 'oil');

-- --------------------------------------------------------

--
-- Table structure for table `madhubani`
--

CREATE TABLE `madhubani` (
  `name` varchar(300) NOT NULL,
  `img_dir` varchar(300) NOT NULL,
  `id1` int(11) NOT NULL,
  `imgname` varchar(20) NOT NULL,
  `discreption` varchar(500) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `madhubani`
--

INSERT INTO `madhubani` (`name`, `img_dir`, `id1`, `imgname`, `discreption`, `price`) VALUES
('Download', 'web/download.jpg', 20, 'sun', 'sun', 500),
('Download (8)', 'web/download (8).jpg', 21, 'fish', 'fish', 550),
('Images (2)', 'web/images (2).jpg', 22, 'beautifull image', 'beautifull image', 800),
('Oil Painting', 'web/Oil-painting.jpg', 25, 'mnhgbhg', 'wdwd', 222),
('81YvNuWjrnL', 'web/81YvNuWjrnL._SL1500_.jpg', 26, 'elephant panting', 'elephant panting', 785);

-- --------------------------------------------------------

--
-- Table structure for table `oil`
--

CREATE TABLE `oil` (
  `id1` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img_dir` varchar(120) NOT NULL,
  `imgname` varchar(50) NOT NULL,
  `discreption` varchar(150) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oil`
--

INSERT INTO `oil` (`id1`, `name`, `img_dir`, `imgname`, `discreption`, `price`) VALUES
(1, 'Oil Painting', 'web/Oil-painting.jpg', 'mnhgbhg', 'no', 250),
(2, 'Download (1)', 'web/download (1).jpg', 'sunset', 'screensort of sun set', 1000),
(3, 'Images', 'web/images.jpg', 'ballet', 'oil panting', 458),
(4, 'Images (1)', 'web/images (1).jpg', 'canvas Ganasg ji', 'canvas Ganasg ji made by tushar', 450),
(5, 'Images (2)', 'web/images (2).jpg', 'Gustav Klimt', 'Gustav Klimt', 2415),
(6, 'Images (3)', 'web/images (3).jpg', 'Face oil panting', 'Face oil panting', 525),
(7, 'Images (4)', 'web/images (4).jpg', 'Creativa oil panting', 'Creativa oil panting by wattson_hh', 525),
(8, 'Images (3)', 'web/images (3).jpg', 'Nature image', 'Nature image', 920),
(9, 'Images (5)', 'web/images (5).jpg', 'Nature image', 'Nature image', 899),
(10, 'Images (7)', 'web/images (7).jpg', 'Elephant oil panting', 'Elephant oil panting', 1500),
(11, 'Images (6)', 'web/images (6).jpg', 'Natural Sengery', 'Natural Sengery', 1200),
(12, 'Portrait Oil Painting 500x500', 'web/portrait-oil-painting-500x500.jpg', 'IndiaMART Portrait Oil Painting', 'IndiaMART Portrait Oil Painting', 50000),
(13, 'Meghalaya 2', 'web/Meghalaya-2.jpg', 'b', 'b', 30000),
(14, 'Screenshot (8)', 'web/Screenshot (8).png', 'jhj ', 'hjbguk', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `discreption` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `image`, `discreption`) VALUES
(0, 'Screenshot (3).png', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(110) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'tushar', 'tushar@gmail.com', '1230'),
(2, 'ram', 'ram@gmail.com', '1230'),
(3, 'rahul gupta', 'rahul@gmail.com', '1230'),
(4, 'shivam sharma', 'shivam@gmail.com', '1230'),
(5, 'himanshu', 'himanshu@gmail.com', 'himanshu123'),
(6, 'rahul ', 'rahul@gmail.com', '12345'),
(7, 'manish', 'manish@gmail.com', '123'),
(8, 'BT Thakur', 'no-tushar@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagery`
--
ALTER TABLE `catagery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `madhubani`
--
ALTER TABLE `madhubani`
  ADD PRIMARY KEY (`id1`);

--
-- Indexes for table `oil`
--
ALTER TABLE `oil`
  ADD PRIMARY KEY (`id1`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT for table `madhubani`
--
ALTER TABLE `madhubani`
  MODIFY `id1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `oil`
--
ALTER TABLE `oil`
  MODIFY `id1` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
