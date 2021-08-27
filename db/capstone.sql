-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2021 at 10:43 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `archive_id` int(11) NOT NULL,
  `materials_id` int(100) NOT NULL,
  `accession_no` int(255) NOT NULL,
  `copy_no` varchar(255) NOT NULL,
  `class` float NOT NULL,
  `author` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `edition` varchar(100) NOT NULL,
  `vol` varchar(100) NOT NULL,
  `pg` int(255) NOT NULL,
  `src_fnd` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `year` int(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `material_img` varchar(50) NOT NULL,
  `date_received` date NOT NULL,
  `date_transferred` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `materials_id` int(11) NOT NULL,
  `accession_no` int(255) NOT NULL,
  `copy_no` varchar(255) NOT NULL,
  `class` float NOT NULL,
  `author` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `edition` varchar(100) NOT NULL,
  `vol` varchar(100) NOT NULL,
  `pg` int(100) NOT NULL,
  `src_fnd` varchar(100) NOT NULL,
  `price` varchar(255) NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `year` int(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `material_img` varchar(255) NOT NULL,
  `date_received` date NOT NULL DEFAULT current_timestamp(),
  `due_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`materials_id`, `accession_no`, `copy_no`, `class`, `author`, `title`, `edition`, `vol`, `pg`, `src_fnd`, `price`, `publisher`, `year`, `remarks`, `material_img`, `date_received`, `due_date`) VALUES
(1, 6661, 'none', 696.101, 'none', 'Basic Plumbing Services Skills', 'none', 'none ', 423, 'BU-Auxiliary', '5420.00', 'Cengage Learning', 2017, 'AS-PB-101-2018-052', 'sample image_1629484851.jpeg', '2021-08-21', '2026-08-21'),
(2, 6662, 'none', 742.672, 'Rothman, Sharon ', 'The Fashion Book Designer\'s Sketch', 'none', 'none', 215, 'BU-Auxiliary', '3390.00', 'Blooms Bury', 2016, 'AS-PB-101-2018-153', 'sample image_1629484965.jpeg', '2021-08-21', '2025-08-21'),
(3, 6663, 'none', 808, 'Campoy, Juan M', 'Sociolinguistic Style', 'none ', 'none', 228, 'BU-Auxiliary', '7690.00', 'Well Wiley Black', 2016, 'AS-PB-101-2018-147', 'sample image_1629485081.jpeg', '2021-08-21', '2026-08-21'),
(4, 6664, 'none', 801.95, 'Selden, Raman et. al', 'A Literary Theory Readers Guide to Contemporary ', 'none', 'none', 308, 'BU-Auxiliary', '4670.00', 'Rontledge', 2017, 'AS-PB-101-2018-041', 'dns_1629485559.png', '2021-08-21', '2026-08-21'),
(5, 6665, 'none', 801.95, 'Klages, Mary', 'Guide Literary Theory: The Complete', 'none ', 'none', 287, 'BU-Auxiliary', '1720.00', 'Bloomsbury', 2017, 'AS-PB-101-2018-122', 'bu_1629489372.png', '2021-08-21', '2026-08-21'),
(6, 6666, 'C1', 0, 'Tabotabo Corpuz, Estoque', 'Understanding the Self', 'none', 'none', 261, 'BUPC-Fiduciary', 'none', 'C and E Publication Inc', 2019, 'none', 'dns_1629489547.png', '2021-08-21', '2026-08-21'),
(7, 6667, 'C2', 0, 'Tabotabo Corpuz, Estoque', 'Understanding the Self', 'none', 'none', 261, 'F-164', 'none', 'C and E Publication Inc', 2019, 'none', 'output_1629489658.png', '2021-08-21', '2026-08-21'),
(8, 6668, 'C1', 0, 'Castillo Macayan, Pinugo Junghan', 'Outcome-Based Module Understanding the Self', 'none', 'none', 285, 'F-164', 'none', 'C and E Publication Inc', 2019, 'none', 'tcp_1629489846.png', '2021-08-21', '2026-08-21'),
(9, 6669, 'C2', 0, 'Castillo Macayan, Pinugo Junghan', 'Outcome-Based Module Understanding the Self', 'none', 'none', 285, 'F-164', 'none', 'C and E Publication Inc', 2019, 'none', 'VirtualBox_Windows 10_17_07_2021_21_07_34_1629489952.png', '2021-08-21', '2026-08-21'),
(10, 6670, 'C1', 0, 'Barrot and Sipacio', 'Purposive Communication', 'none', 'none', 476, 'F-164', 'none', 'C and E Publication Inc', 2018, 'none', 'bu_1629490063.png', '2021-08-21', '2026-08-21'),
(11, 6671, 'C2', 0, 'Barrot and Sipacio', 'Purposive Communication', 'none', 'none', 476, 'F-164', 'none', 'C and E Publication Inc', 2018, 'none', 'bu_1629490205.png', '2021-08-21', '2026-08-21'),
(12, 6672, 'C3', 0, 'Barrot and Sipacio', 'Purposive Communication', 'none', 'none', 476, 'F-164', 'none', 'C and E Publication Inc', 2018, 'none', 'VirtualBox_Windows 10_17_07_2021_21_07_34_1629490344.png', '2021-08-21', '2026-08-21'),
(13, 6673, 'C1', 0, 'Oandasan Ambida, Galicia', 'Purposive Communication', 'none', 'none', 299, 'F-164', 'none', 'C and E Publication Inc', 2019, 'none', 'VirtualBox_Windows 10_17_07_2021_21_30_13_1629490449.png', '2021-08-21', '2026-08-21'),
(14, 6674, 'C2', 0, 'Oandasan Ambida, Galicia', 'Purposive Communication', 'none', 'none', 299, 'F-164', 'none', 'C and E Publication Inc', 2019, 'none', 'bu_1629490523.png', '2021-08-21', '2026-08-21'),
(15, 6675, 'C1', 0, 'Madrunio and Martin', 'English in Multilingual Contexts Purposive Communication: Listing', 'none', 'none', 315, 'F-164', 'none', 'C and E Publication Inc', 2018, 'none', 'VirtualBox_Windows 10_17_07_2021_21_07_34_1629490627.png', '2021-08-21', '2026-08-21'),
(16, 6676, 'C2', 0, 'Madrunio and Martin', 'English in Multilingual Contexts Purposive Communication: Listing', 'none', 'none', 315, 'F-164', 'none', 'C and E Publication Inc', 2018, 'none', 'VirtualBox_Windows 10_17_07_2021_21_07_34_1629490711.png', '2021-08-21', '2026-08-21'),
(17, 6677, 'C1', 0, 'Tolentino Devilles, Mariquez', 'Everyday Art Sense; Sensing the Arts in the', 'none', 'none', 313, 'F-164', 'none', 'C and E Publication Inc', 2018, 'none', 'VirtualBox_Windows 10_17_07_2021_21_24_07_1629490865.png', '2021-08-21', '2026-08-21'),
(18, 6678, 'C2', 0, 'Tolentino Devilles, Mariquez', 'Everyday Art Sense; Sensing the Arts in the', 'none', 'none', 313, 'F-164', 'none', 'C and E Publication Inc', 2018, 'none', 'VirtualBox_Windows 10_17_07_2021_22_01_49_1629490939.png', '2021-08-21', '2026-08-21'),
(19, 6679, 'C3', 0, 'Tolentino Devilles, Mariquez', 'Everyday Art Sense; Sensing the Arts in the', 'none', 'none', 313, 'F-164', 'none', 'C and E Publication Inc', 2018, 'none', 'udp_1629490988.png', '2021-08-21', '2026-08-21'),
(20, 6680, 'C1', 0, 'Brazalote and Leonardo', 'The Contemporary World', 'none', 'none', 201, 'F-164', 'none', 'C and E Publication Inc', 2019, 'none', 'VirtualBox_Windows 10_17_07_2021_21_07_34_1629491069.png', '2021-08-21', '2026-08-21'),
(21, 6681, 'C2', 0, 'Brazalote and Leonardo', 'The Contemporary World', 'none', 'none', 201, 'F-164', 'none', 'C and E Publication Inc', 2019, 'none', 'VirtualBox_Windows 10_17_07_2021_21_24_07_1629491162.png', '2021-08-21', '2026-08-21'),
(22, 6682, 'C1', 0, 'Carine, Jovito', 'Fundamentals of Ethics', 'none', 'none', 161, 'F-164', 'none', 'C and E Publication Inc', 2018, 'none', 'VirtualBox_Windows 10_17_07_2021_21_30_13_1629491245.png', '2021-08-21', '2026-08-21'),
(23, 6683, 'C2', 0, 'Carine, Jovito', 'Fundamentals of Ethics', 'none', 'none', 161, 'F-164', 'none', 'C and E Publication Inc', 2018, 'none', 'VirtualBox_Windows 10_17_07_2021_21_30_13_1629491302.png', '2021-08-21', '2026-08-21'),
(24, 6684, 'C1', 0, 'Mankin, Gregory', 'Principles of Microeconomics', '8th', 'none', 491, 'F-164', 'none', 'C and E Publication Inc', 2018, 'none', 'VirtualBox_Windows 10_17_07_2021_21_30_13_1629491412.png', '2021-08-21', '2026-08-21'),
(25, 6685, 'C2', 0, 'Mankin, Gregory', 'Principles of Microeconomics', '8th', 'none', 491, 'F-164', 'none', 'C and E Publication Inc', 2018, 'none', 'VirtualBox_Windows 10_17_07_2021_22_01_05_1629491500.png', '2021-08-21', '2026-08-21'),
(26, 6686, 'C1', 0, 'Mankin, Gregory', 'Principles of Microeconomics', '8th', 'none', 544, 'F-164', 'none', 'C and E Publication Inc', 2019, 'none', 'VirtualBox_Windows 10_17_07_2021_22_01_49_1629491596.png', '2021-08-21', '2026-08-21'),
(27, 6687, 'C2', 0, 'Mankin, Gregory', 'Principles of Microeconomics', '8th', 'none', 544, 'F-164', 'none', 'C and E Publication Inc', 2019, 'none', 'udp_1629491642.png', '2021-08-21', '2026-08-21'),
(28, 6688, 'C1', 0, 'Froeb et al.', 'Managerial Economics', '5th', 'none', 332, 'F-164', 'none', 'C and E Publication Inc', 2019, 'none', 'VirtualBox_Windows 10_17_07_2021_21_07_34_1629491719.png', '2021-08-21', '2026-08-21'),
(29, 6689, 'C2', 0, 'Froeb et al.', 'Managerial Economics', '5th', 'none', 332, 'F-164', 'none', 'C and E Publication Inc', 2019, 'none', 'VirtualBox_Windows 10_17_07_2021_21_24_07_1629491778.png', '2021-08-21', '2026-08-21'),
(30, 6690, 'C1', 0, 'Earnhart and Adina', 'Mathematics in the Modern World', 'none', 'none', 352, 'F-164', 'none', 'C and E Publication Inc', 2018, 'none', 'VirtualBox_Windows 10_17_07_2021_21_30_13_1629491853.png', '2021-08-21', '2026-08-21'),
(31, 6691, 'C2', 0, 'Earnhart and Adina', 'Mathematics in the Modern World', 'none', 'none', 352, 'F-164', 'none', 'C and E Publication Inc', 2018, 'none', 'VirtualBox_Windows 10_17_07_2021_21_30_13_1629491905.png', '2021-08-21', '2026-08-21'),
(32, 6692, 'C1', 0, 'Peck, Olsen and Devore', 'Data Analysis Introduction to Statistics and ', 'none', 'none', 809, 'F-164', 'none', 'C and E Publication Inc', 2019, 'none', 'VirtualBox_Windows 10_17_07_2021_21_24_07_1629491992.png', '2021-08-21', '2026-08-21'),
(33, 6693, 'C2', 0, 'Peck, Olsen and Devore', 'Data Analysis Introduction to Statistics and ', 'none', 'none', 809, 'F-164', 'none', 'C and E Publication Inc', 2019, 'none', 'VirtualBox_Windows 10_17_07_2021_21_24_07_1629492034.png', '2021-08-21', '2021-08-21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`) VALUES
(1, 'librarian', 'librarian123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`archive_id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`materials_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archive`
--
ALTER TABLE `archive`
  MODIFY `archive_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `materials_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
