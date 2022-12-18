-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Dec 15, 2022 at 02:09 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10
=======
-- Generation Time: Dec 18, 2022 at 10:37 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12
>>>>>>> edit-profile

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `payroll_website`
--

-- --------------------------------------------------------

--
<<<<<<< HEAD
=======
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(15) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department`) VALUES
(1, 'IT Consultant'),
(2, 'Public Relations');

-- --------------------------------------------------------

--
>>>>>>> edit-profile
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(15) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `age` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `FullName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `profile_picture`, `age`, `department`, `salary`, `FullName`) VALUES
<<<<<<< HEAD
(1, 'Rahmandi', 'rei', 'rei@gmail.com', 'Test_image.jpg', '20', 'IT Consultant', '9456.48', 'RAHMANDI FITRA MADENDA'),
(2, 'admin', 'admin', 'admin', 'admin.jpg', '20', 'Public Relations', '696833.28', 'RoyalColony');
=======
(1, 'rei', 'rei', 'rei@gmail.com', 'Test_image.jpg', '20', 'IT Consultant', '105589.44', 'Rahmandi Fitra Madenda'),
(6, 'admin', 'admin', 'admin', NULL, '19', 'Public Relations', '', 'Admin Full name'),
(7, 'Jane', 'jane', 'jane@gmail.com', NULL, '19', 'Public Relations', '', 'Jane Doe'),
(8, 'balakotan', 'balakotan', 'rmadenda30@gmail.com', NULL, '14', 'IT Consultant', '', 'Rabbani Madenda'),
(9, 'hansen', 'hansen', 'hansen@gmail.com', NULL, '19', 'IT Consultant', '', 'Hansen Christopher'),
(10, 'iman', 'iman', 'iman@gmail.com', NULL, '22', 'IT Consultant', '', 'Iman');
>>>>>>> edit-profile

--
-- Indexes for dumped tables
--

--
<<<<<<< HEAD
=======
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `department` (`department`);

--
>>>>>>> edit-profile
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department` (`department`),
  ADD KEY `salary` (`salary`);

--
-- AUTO_INCREMENT for dumped tables
--

--
<<<<<<< HEAD
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
=======
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
>>>>>>> edit-profile

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`department`) REFERENCES `department` (`department`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;
