-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2016 at 07:50 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pms_developer`
--

CREATE TABLE `pms_developer` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `designation` varchar(45) NOT NULL,
  `job_desc` text NOT NULL,
  `code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pms_developer`
--

INSERT INTO `pms_developer` (`id`, `name`, `designation`, `job_desc`, `code`) VALUES
(1, 'sayed', 'fgfgf', 'fgfgfgf', 'D-02');

-- --------------------------------------------------------

--
-- Table structure for table `pms_dev_task`
--

CREATE TABLE `pms_dev_task` (
  `id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `dev_id` int(11) NOT NULL,
  `start_datetime` date NOT NULL,
  `due_datetime` date NOT NULL,
  `task_status` int(10) NOT NULL,
  `remark` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pms_dev_task`
--

INSERT INTO `pms_dev_task` (`id`, `task_id`, `dev_id`, `start_datetime`, `due_datetime`, `task_status`, `remark`) VALUES
(3, 3, 1, '2016-11-04', '2016-11-24', 10, 'abc'),
(4, 3, 1, '2016-11-01', '2016-11-30', 55, 'ggg');

-- --------------------------------------------------------

--
-- Table structure for table `pms_modules`
--

CREATE TABLE `pms_modules` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` text NOT NULL,
  `start_date` date NOT NULL,
  `due_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pms_modules`
--

INSERT INTO `pms_modules` (`id`, `project_id`, `name`, `description`, `start_date`, `due_date`) VALUES
(2, 3, 'create book', 'book create system', '2016-11-01', '2016-11-30'),
(3, 4, 'ambia', 'fgfgfgf', '2016-11-01', '2016-11-30'),
(4, 5, 'ambia', 'hghghg', '2016-11-02', '2016-11-02'),
(5, 4, 'mst', 'sayed', '2016-11-01', '2016-11-29'),
(7, 4, 'ssssss', 'sayed', '2016-11-01', '2016-11-30'),
(8, 4, 'ddddd', 'ddddd', '2016-11-01', '2016-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `pms_module_task`
--

CREATE TABLE `pms_module_task` (
  `id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pms_module_task`
--

INSERT INTO `pms_module_task` (`id`, `module_id`, `task_id`) VALUES
(1, 3, 2),
(2, 2, 3),
(3, 3, 2),
(4, 7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pms_projects`
--

CREATE TABLE `pms_projects` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  `start_date` date NOT NULL,
  `due_date` date NOT NULL,
  `code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pms_projects`
--

INSERT INTO `pms_projects` (`id`, `name`, `description`, `start_date`, `due_date`, `code`) VALUES
(3, 'LMS', 'Library Management System', '2016-11-01', '2016-11-30', 'P-02'),
(4, 'SMS', 'School Management System', '2016-11-03', '2016-11-26', 'P-02'),
(5, 'LMS', 'trtrt', '2016-11-01', '2016-11-25', 'P-01');

-- --------------------------------------------------------

--
-- Table structure for table `pms_tasks`
--

CREATE TABLE `pms_tasks` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `duration` float NOT NULL,
  `percent` double NOT NULL,
  `description` text NOT NULL,
  `task_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pms_tasks`
--

INSERT INTO `pms_tasks` (`id`, `name`, `duration`, `percent`, `description`, `task_category_id`) VALUES
(2, 'sayed', 12, 100, 'abc', 2),
(3, 'dddd', 12, 100, 'rrrr', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pms_task_status`
--

CREATE TABLE `pms_task_status` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pms_task_status`
--

INSERT INTO `pms_task_status` (`id`, `name`) VALUES
(3, 'go to');

-- --------------------------------------------------------

--
-- Table structure for table `pms_unit`
--

CREATE TABLE `pms_unit` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pms_unit`
--

INSERT INTO `pms_unit` (`id`, `name`) VALUES
(3, 'fjgfjgfgf'),
(4, 'rerere');

-- --------------------------------------------------------

--
-- Table structure for table `pms_unit_dev`
--

CREATE TABLE `pms_unit_dev` (
  `id` int(11) NOT NULL,
  `dev_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `assinged_on` date NOT NULL,
  `code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pms_unit_dev`
--

INSERT INTO `pms_unit_dev` (`id`, `dev_id`, `unit_id`, `assinged_on`, `code`) VALUES
(1, 1, 3, '2016-12-20', 'DU-02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sayed', 'sayedme120@gmail.com', '$2y$10$CjCwFRxgJ2GGBeelh3nWKezRQxm.xvhc8Fzwxn02xFWkApX93Nibu', 'gOytwWcYJqBot6vm1BgjJkPk8pkCY3zudGz2SjCy2PCWKolebfM2QedhIHa6', '2016-11-15 10:22:57', '2016-11-18 12:47:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pms_developer`
--
ALTER TABLE `pms_developer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pms_dev_task`
--
ALTER TABLE `pms_dev_task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pms_modules`
--
ALTER TABLE `pms_modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pms_module_task`
--
ALTER TABLE `pms_module_task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pms_projects`
--
ALTER TABLE `pms_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pms_tasks`
--
ALTER TABLE `pms_tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pms_task_status`
--
ALTER TABLE `pms_task_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pms_unit`
--
ALTER TABLE `pms_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pms_unit_dev`
--
ALTER TABLE `pms_unit_dev`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pms_developer`
--
ALTER TABLE `pms_developer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pms_dev_task`
--
ALTER TABLE `pms_dev_task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pms_modules`
--
ALTER TABLE `pms_modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pms_module_task`
--
ALTER TABLE `pms_module_task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pms_projects`
--
ALTER TABLE `pms_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pms_tasks`
--
ALTER TABLE `pms_tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pms_task_status`
--
ALTER TABLE `pms_task_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pms_unit`
--
ALTER TABLE `pms_unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pms_unit_dev`
--
ALTER TABLE `pms_unit_dev`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
