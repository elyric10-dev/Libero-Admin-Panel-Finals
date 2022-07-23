-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2022 at 05:59 AM
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
-- Database: `libero_manatad`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(3) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `postcode` int(4) NOT NULL,
  `selection` varchar(6) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `time` time NOT NULL DEFAULT current_timestamp(),
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `fullname`, `postcode`, `selection`, `phone`, `time`, `date`) VALUES
(1, 'Elyric Manatad', 6021, 'yes', '09912046696', '12:00:00', '2022-07-10'),
(2, 'Edwin Manatad', 6000, 'no', '09912046696', '13:01:32', '2022-07-10'),
(3, 'Md5 Password', 6023, 'yes', '09123456797', '13:20:21', '2022-07-10'),
(4, 'Elyric Mandated', 6014, 'no', '09084046149', '13:21:58', '2022-07-11'),
(5, 'Mae Mandated', 6026, 'yes', '09424902445', '14:21:32', '2022-07-12'),
(6, 'Sponge Bob', 6013, 'no', '09123456789', '14:35:23', '2022-07-15'),
(7, 'Mark Sakoburg', 6012, 'yes', '09916665666', '15:58:12', '2022-07-15'),
(8, 'Rock Simon', 6018, 'yes', '09426578212', '18:00:27', '2022-07-17'),
(9, 'Kycie Mae Ann Alvira', 6017, 'no', '09234246218', '18:04:20', '2022-07-17'),
(10, 'Riosie Mae Edsel Manatad', 6032, 'yes', '09436547896', '18:05:31', '2022-07-17'),
(11, 'Erica Manatad', 6033, 'no', '09985463215', '18:11:26', '2022-07-17'),
(12, 'Riosie Mae Edsel Manatad', 6032, 'yes', '09436547896', '18:05:31', '2022-07-17'),
(13, 'Edwin Manatad', 6028, 'no', '09326589763', '18:12:09', '2022-07-17'),
(14, 'Ky Manatad', 6027, 'yes', '09436548952', '18:12:40', '2022-07-17'),
(15, 'Elsie Abera Manatad', 6032, 'yes', '09913265423', '18:13:27', '2022-07-17'),
(16, 'Edwin Ouano Manatad Sr.', 6035, 'yes', '09995050027', '18:14:10', '2022-07-17'),
(17, 'Elsie Abera Manatad', 6032, 'yes', '09913265423', '18:13:27', '2022-07-17'),
(18, 'James Bond', 6032, 'yes', '09424902445', '00:00:00', '2022-07-20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `decrypt_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `decrypt_password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'edwinmanatad19@gmail.com', '8208fd81183b8d0246e5897f93df000f', 'GodisGood'),
(3, 'md5@gmail.com', 'ec85070aa70e598eda72cbe82d99fabc', 'md5password'),
(4, 'elyricmanatad@gmail.com', '24aae63f96598a3597dafadf8751fc89', 'ejooch5A!'),
(5, 'maemandated@gmail.com', '1b5b9e4672cc52d1fcacd44c6adab644', 'maemandated'),
(6, 'spongebob@gmail.com', '04184ced0c046b2e93b0cda922b08f45', 'spongeBob'),
(7, 'marksakoburg@gmail.com', '26cae7718c32180a7a0f8e19d6d40a59', 'facebook'),
(8, 'rocksimon@gmail.com', '763ce0829232bc9a25c6c63c5dd8aae0', 'rocksimon'),
(9, 'alvirakycie@gmail.com', 'fed5bae7bd0431937eb448c85941d35c', 'alvira123'),
(10, 'rayosie@gmail.com', '51e006eb864cb1ee38290fcd5b4d92e3', 'rayray'),
(11, 'ericamanatad@gmail.com', '5851c434e5381e7b5a1b8576953824ce', 'ejeech5A'),
(12, 'rayosie@gmail.com', '51e006eb864cb1ee38290fcd5b4d92e3', 'rayray'),
(13, 'edwinmanatadjr@gmail.com', '5edd1d3b7165f08f5f68ad16b5074c15', 'PastorEdwin'),
(14, 'kymanatad@gmail.com', '9d4981a30f75bd448c00524d1123ff6f', 'chillBeLike'),
(15, 'elsieabera@gmail.com', '0cc25fab857fa776cc8710c6c066ae69', 'elsefornothing'),
(16, 'edwinmanatadsr@gmail.com', '379ab12c8797776bc5e7a041744f5d9b', 'edwingwapo'),
(17, 'elsieabera@gmail.com', '0cc25fab857fa776cc8710c6c066ae69', 'elsefornothing'),
(18, 'jamesbond@gmail.com', 'e84c55c90d955bf1cfa2d31a1f425383', 'jamesbond');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
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
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
