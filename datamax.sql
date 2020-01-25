-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2020 at 02:53 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datamax`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isbn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authors` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_pages` int(11) NOT NULL,
  `publisher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `isbn`, `authors`, `number_of_pages`, `publisher`, `country`, `release_date`, `created_at`, `updated_at`) VALUES
(24, 'In Time', '978055310367', 'Henry Frauch', 764, 'Lolita', 'France', '1998-07-21', '2020-01-24 18:09:49', '2020-01-25 00:48:06'),
(26, 'Ancient Worlds', '9789781158', 'Will Denins', 1805, 'City Gate', 'USA', '2012-07-12', '2020-01-24 18:25:26', '2020-01-24 23:46:47'),
(27, 'IT', '978978114558', 'Steven Seagul', 58, 'One World', 'Canada', '2017-01-24', '2020-01-24 19:35:07', '2020-01-24 23:57:13'),
(28, 'Anna Karenina', '978978114501', 'Ernest Hemingway', 534, 'Esquire', 'England', '2007-01-23', '2020-01-24 19:37:04', '2020-01-25 00:03:39'),
(29, 'Faceless', '9789988550943', 'Amma Darko', 200, 'Sub-Saharan', 'Nigeria', '22-10-2003', '2020-01-24 19:39:17', '2020-01-24 19:39:17'),
(30, 'Imitations', '978978114558', 'Robert Lowell', 502, 'Allen Ginsberg', 'Australia', '1961-01-23', '2020-01-24 19:41:26', '2020-01-25 00:09:53'),
(40, 'There was a Country', '9789781258', 'Chinua Achebe', 458, 'Laterna', 'Nigeria', '1998-04-25', '2020-01-24 19:58:58', '2020-01-24 23:01:48'),
(45, 'Game of Thrones', '9780553103540', 'George R.R', 694, 'Bantam Books', 'United States', '1996-08-01', '2020-01-25 00:12:27', '2020-01-25 00:12:27'),
(46, 'Calumet K', '978055310358', 'Merwin-Webster', 69, 'Merwin-Webster', 'United States', '1945-05-14', '2020-01-25 00:14:05', '2020-01-25 00:14:05'),
(47, 'In Search of Lost Time', '978055310367', 'Andrei Bely', 764, 'Lolita', 'France', '1998-07-21', '2020-01-25 00:16:04', '2020-01-25 00:48:17'),
(48, 'The Marble Faun', '978055310368', 'William Faulkner', 608, 'Oxford', 'Germany', '1924-02-22', '2020-01-25 00:17:46', '2020-01-25 00:17:46'),
(49, 'The Seven League Crutches', '978055310369', 'Randall Jarrell', 811, 'Smithan', 'United States', '1951-06-20', '2020-01-25 00:19:24', '2020-01-25 00:19:24'),
(50, 'A Door Somewhere', '978055310370', 'Jaydeep Sarangi', 378, 'Jordans', 'United States', '2016-07-28', '2020-01-25 00:20:30', '2020-01-25 00:20:30'),
(51, 'A Doll\'s House', '978055310371', 'Henrik Ibsen', 784, 'Iluminate', 'England', '2014-08-02', '2020-01-25 00:22:13', '2020-01-25 00:22:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_01_23_165810_books', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
