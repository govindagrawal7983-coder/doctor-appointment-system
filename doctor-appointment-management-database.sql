-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2026 at 09:35 AM
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
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `doctor` varchar(100) NOT NULL,
  `appointment_date` date NOT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `phone`, `doctor`, `appointment_date`, `message`, `created_at`) VALUES
(1, 'Govind Agrawal', 'govindagrwal7983@gmail.com', '09527283945', 'Dr. Sharma', '2026-02-27', 'fegrj', '2026-02-12 21:59:54'),
(2, 'Govind Agrawal', 'govindagrwal7983@gmail.com', '09527283945', 'Dr. Verma', '2026-02-19', '', '2026-02-12 22:00:08'),
(3, 'Govind Agrawal', 'govindagrwal7983@gmail.com', '09527283945', 'Dr. Singh', '0000-00-00', '', '2026-02-12 22:01:59'),
(4, 'Govind Agrawal', 'govindagrwal7983@gmail.com', '09527283945', 'Dr. Sharma', '2026-03-05', '', '2026-02-12 22:04:20'),
(5, 'Govind Agrawal', 'govindagrwal7983@gmail.com', '09527283945', 'Dr. Sharma', '2026-02-24', 'g', '2026-02-12 22:07:12'),
(6, 'Govind Agrawal', 'govindagrwal7983@gmail.com', '09527283945', 'Dr. Sharma', '2026-02-23', '', '2026-02-13 07:57:23'),
(7, 'Govind Agrawal', 'govindagrwal7983@gmail.com', '09527283945', 'Dr. Khan', '2026-02-12', '', '2026-02-13 10:31:49'),
(8, 'Govind Agrawal', 'govindagrwal7983@gmail.com', '09527283945', 'Dr. Sharma', '8253-05-07', 'dtfgswe', '2026-02-13 10:33:20'),
(9, 'rohit', 'jatin@gmail.com', '09527283945', 'Dr. Khan', '2009-02-02', 'ef', '2026-02-16 17:39:09'),
(10, 'Govind Agrawal', 'gvind@gmail.com', '09527283945', 'Dr. Khan', '2023-05-05', 'fjhgfs', '2026-02-18 11:04:43'),
(11, 'Govind Agrawal', 'govindagrwal7983@gmail.com', '09527283945', 'Dr. Sharma', '2026-02-14', 'hy ', '2026-02-20 13:13:16'),
(12, 'Govind Agrawal', 'govindagrwal7983@gmail.com', '09527283945', 'Dr. Khan', '2026-02-19', '', '2026-02-20 13:27:02'),
(13, 'sam', 'sam@gmail.com', '9058810284', 'Dr. Sharma', '2026-02-03', 'mera nama ', '2026-02-20 13:29:41'),
(17, 'bruce', 'bruce@gmail.com', '9058822737', 'Dr. Sharma', '2026-02-12', 'meghj', '2026-02-20 14:56:36');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `fees` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `doctor_name`, `specialization`, `fees`) VALUES
(1, 'Dr. Sharma', 'Cardiologist', 500),
(2, 'Dr. Verma', 'Dermatologist', 400),
(3, 'Dr. Khan', 'Orthopedic', 600),
(4, 'Dr. Singh', 'General Physician', 300);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `email`, `phone`, `password`, `created_at`) VALUES
(1, 'bruce', 'bruce@gmail.com', '9058822737', '90588', '2026-02-20 14:55:48'),
(2, 'bruce', 'bruce@gmail.com', '9058822737', '90588', '2026-02-20 14:57:46'),
(3, 'Govind Agrawal', 'agrawal@gamil.com', '09527283945', '9058', '2026-02-20 15:00:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
