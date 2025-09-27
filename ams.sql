-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 27, 2025 at 03:19 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `id` int NOT NULL,
  `code` varchar(255) NOT NULL,
  `user_id` int NOT NULL,
  `title` varchar(500) NOT NULL,
  `detail` varchar(4000) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `client_unique_code` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `code`, `user_id`, `title`, `detail`, `client_name`, `status`, `date`, `client_unique_code`) VALUES
(2, '68C04A507FA25', 3, 'adsfsadf', 'fadsfadsf', 'asdfads', 'Closed', '2025-09-09', NULL),
(5, '68C45AAD43979', 3, 'Saddest Himu Murder Case of decade', 'adsf dsfadsf dsa fads fsadf sdaf dsa fads fads fsadf adsf asd fadsf dsf ads fdsf adsfadsf dsf dsf asdfasdfads fds ', 'Tamim Ash', 'Active', '2025-09-12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `case_file`
--

CREATE TABLE `case_file` (
  `id` int NOT NULL,
  `case_id` int NOT NULL,
  `file_name` varchar(1000) NOT NULL,
  `file_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `case_file`
--

INSERT INTO `case_file` (`id`, `case_id`, `file_name`, `file_path`) VALUES
(1, 3, 'Thesispaper.docx', '../../uploads/Thesispaper.docx'),
(2, 2, 'github-recovery-codes.txt', '../../uploads/github-recovery-codes.txt'),
(3, 3, 'github-recovery-codes.txt', '../../uploads/github-recovery-codes.txt');

-- --------------------------------------------------------

--
-- Table structure for table `case_sub_document`
--

CREATE TABLE `case_sub_document` (
  `id` int NOT NULL,
  `case_id` int NOT NULL,
  `type` varchar(4000) NOT NULL,
  `file_name` varchar(1000) NOT NULL,
  `des` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `case_sub_document`
--

INSERT INTO `case_sub_document` (`id`, `case_id`, `type`, `file_name`, `des`) VALUES
(1, 2, 'petition', 'WhatsApp Image 2025-09-07 at 17.35.13_27c96216.jpg', 'hfghfgdh'),
(2, 3, 'affidavit', 'Paramedical Courses.pdf', 'Trhdfs dfdfsg dsgfsd gdfs g');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int NOT NULL,
  `title` varchar(500) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `date`, `time`, `type`, `venue`, `user_id`) VALUES
(5, 'Team Meeting ', '2025-09-22', '18:17', 'In Office', 'Dhaka, Liton Flat', 5),
(6, 'djfkdsfdsfds ', '2025-09-14', '22:24', 'Home', 'dsfdsf', 3);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `title` varchar(1000) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `datetime` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `user_id`, `title`, `des`, `datetime`) VALUES
(7, 6, 'Payment Successfully Done', 'New Consultant Booking Done. Transaction ID is: TXN93BB1559 <br>Someone will contact you very soon', '2025-09-11 16:56:32'),
(8, 3, 'Congrats ! New Payment Added - 1000', 'Someone need consult with you. Transaction ID is: TXN93BB1559 <br>Contact with him very soon', '2025-09-11 16:56:32'),
(9, 7, 'Payment Successfully Done', 'New Consultant Booking Done. Transaction ID is: TXN4C0D01A1 <br>Someone will contact you very soon', '2025-09-12 06:42:02'),
(10, 3, 'Congrats ! New Payment Added - 5000', 'Someone need consult with you. Transaction ID is: TXN4C0D01A1 <br>Contact with him very soon', '2025-09-12 06:42:02'),
(11, 3, 'Congrats ! Admin Give a Case: Saddest Himu Murder Case of decade', 'adsf dsfadsf dsa fads fsadf sdaf dsa fads fads fsadf adsf asd fadsf dsf ads fdsf adsfadsf dsf dsf asdfasdfads fds ', '2025-09-12 17:38:53'),
(12, 3, 'New Event Addeddjfkdsfdsfds ', 'You have been added recently new event-New Event Addeddjfkdsfdsfds  Date: 2025-09-14 Time: 22:24', '2025-09-14 16:24:18'),
(13, 6, 'Payment Successfully Done', 'New Consultant Booking Done. Transaction ID is: TXNA6ADEEB8 <br>Someone will contact you very soon', '2025-09-19 12:45:16'),
(14, 3, 'Congrats ! New Payment Added - 5000', 'Someone need consult with you. Transaction ID is: TXNA6ADEEB8 <br>Contact with him very soon', '2025-09-19 12:45:16'),
(15, 6, 'Payment Successfully Done', 'New Consultant Booking Done. Transaction ID is: TXN34F7348C <br>Someone will contact you very soon', '2025-09-26 16:05:41'),
(16, 3, 'Congrats ! New Payment Added - 5000', 'Someone need consult with you. Transaction ID is: TXN34F7348C <br>Contact with him very soon', '2025-09-26 16:05:41');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `user_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `meet_link` varchar(255) NOT NULL,
  `img_name` varchar(1000) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `language` varchar(100) NOT NULL,
  `fees` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user_id`, `name`, `post`, `address`, `contact`, `email`, `meet_link`, `img_name`, `specialization`, `language`, `fees`) VALUES
(3, 'Abir Hasan Bitla', 'Senior Advocate', 'Shagufta Road', '01324940998', 'tamamabir@gmail.com', 'https://kjlkaskfljdsf', '1757581646_5a7bc9ee8614eef19ae0caf54f24af30 (1).jpg', 'family-law', 'Hindi', 5000),
(5, 'Lily Naughty Euresia', 'Senior Advocate', 'Jiraitoli, Nimtoli , Tongi , Gazipur', '01986557505', 'linu@gmail.com', 'https://kjlkaskfljdsf', '1757581917_images.jpeg', 'civil-law', 'Only Known Gali', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int NOT NULL,
  `client_id` int NOT NULL,
  `advocate_id` int NOT NULL,
  `paid_fees` int NOT NULL,
  `transaction_code` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `client_id`, `advocate_id`, `paid_fees`, `transaction_code`, `date`) VALUES
(4, 6, 3, 1000, 'TXN93BB1559', '11-09-2025'),
(6, 6, 3, 5000, 'TXNA6ADEEB8', '19-09-2025'),
(7, 6, 3, 5000, 'TXN34F7348C', '26-09-2025');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `unique_code` varchar(1000) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `unique_code`, `name`, `email`, `phone`, `password`, `role`) VALUES
(9, '68D7FFDA5F84F', 'Tela Men', 'jio@gmail.com', '123456', '123456', 'citizen'),
(5, '68C291E1319BF', 'Linu', 'lin@gmail.com', '01923311808', 'linu123', 'advocate'),
(8, '68C3C5392A7B5', 'Rishab Patel', 'rishab@gmail.com', '918545415643', 'rishab', 'admin'),
(3, '68BFB2E39097D', 'Abir Hasan', 'tamamabir@gmail.com', '01324940998', 'asdf', 'advocate'),
(6, '68C29A8F9B9C1', 'Tamim', 'tamim@gmail.com', '54564564564', 'tamim', 'citizen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case_file`
--
ALTER TABLE `case_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case_sub_document`
--
ALTER TABLE `case_sub_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `case_file`
--
ALTER TABLE `case_file`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `case_sub_document`
--
ALTER TABLE `case_sub_document`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
