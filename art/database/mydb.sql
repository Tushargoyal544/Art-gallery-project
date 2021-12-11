-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2020 at 01:15 PM
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
  `category` varchar(230) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `name` varchar(300) NOT NULL,
  `img_dir` varchar(300) NOT NULL,
  `id1` int(11) NOT NULL,
  `imgname` varchar(20) NOT NULL,
  `discreption` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`name`, `img_dir`, `id1`, `imgname`, `discreption`) VALUES
('Mad', 'web/mad.jpg', 1, '', ''),
('Oil Painting', 'web/Oil-painting.jpg', 2, '', ''),
('Oil Painting', 'web/Oil-painting.jpg', 3, '', ''),
('IMG 20190902 WA0014', 'web/IMG-20190902-WA0014.jpg', 4, '', ''),
('IMG 20190903 WA0003', 'web/IMG-20190903-WA0003.jpg', 5, '', ''),
('IMG 20190903 WA0003', 'web/IMG-20190903-WA0003.jpg', 6, 'image', 'nfb hgfhgdvc gsfnhgf shf'),
('IMG 20190903 WA0008', 'web/IMG-20190903-WA0008.jpg', 7, 'hii', 'e,tryyruytu'),
('IMG 20190903 WA0010', 'web/IMG-20190903-WA0010.jpg', 8, 'ty', 'hgfdchd'),
('IMG 20190903 WA0028', 'web/IMG-20190903-WA0028.jpg', 9, 'rgefef', 'weewqwefr'),
('IMG 20190903 WA0028', 'web/IMG-20190903-WA0028.jpg', 10, 'wew', 'wdwd');

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
(4, 'shivam sharma', 'shivam@gmail.com', '1230');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagery`
--
ALTER TABLE `catagery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
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
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
