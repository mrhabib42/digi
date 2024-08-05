-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2024 at 08:05 PM
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
-- Database: `digicraftech`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_create`
--

CREATE TABLE `tbl_user_create` (
  `id` int(11) NOT NULL,
  `user_username` varchar(10) NOT NULL,
  `user_role` int(4) NOT NULL,
  `user_password` varchar(256) NOT NULL,
  `user_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user_create`
--

INSERT INTO `tbl_user_create` (`id`, `user_username`, `user_role`, `user_password`, `user_img`) VALUES
(1, 'hu512', 2222, '123', '66aed105bb51d.png'),
(2, 'hu511', 2222, 'gh', '66aed1183fd1e.jpg'),
(3, 'admin', 1111, '$2y$10$tgOfXV.xcB1SgpzYqf9hv.i.dsTpuxnTyRt64KiGT63xWqZg9gSfG', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user_create`
--
ALTER TABLE `tbl_user_create`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_username` (`user_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user_create`
--
ALTER TABLE `tbl_user_create`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
