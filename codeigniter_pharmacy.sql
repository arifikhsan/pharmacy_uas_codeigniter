-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2021 at 02:46 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter_pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `id` int(11) UNSIGNED NOT NULL,
  `supplier_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `producer` varchar(100) NOT NULL,
  `price` int(11) UNSIGNED NOT NULL,
  `quantity` int(11) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`id`, `supplier_id`, `name`, `producer`, `price`, `quantity`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'rem', 'Green Inc', 6000, 600, '', '2021-02-14 07:22:19', '2021-02-14 07:22:19'),
(2, 1, 'fugit', 'Borer-Green', 9000, 300, '', '2021-02-14 07:22:19', '2021-02-14 07:22:19'),
(3, 1, 'quidem', 'Effertz-Simonis', 5000, 100, '', '2021-02-14 07:22:19', '2021-02-14 07:22:19'),
(4, 1, 'et', 'Jaskolski-Jenkins', 10000, 900, '', '2021-02-14 07:22:19', '2021-02-14 07:22:19'),
(5, 1, 'distinctio', 'Carter Inc', 4000, 600, 'Screenshot (743).png', '2021-02-14 07:22:19', '2021-02-14 23:51:42');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(53, '2021-02-13-122910', 'App\\Database\\Migrations\\CreateUsers', 'default', 'App', 1613308931, 1),
(54, '2021-02-13-122924', 'App\\Database\\Migrations\\CreateSuppliers', 'default', 'App', 1613308932, 1),
(55, '2021-02-13-122936', 'App\\Database\\Migrations\\CreateTransactions', 'default', 'App', 1613308932, 1),
(56, '2021-02-13-135711', 'App\\Database\\Migrations\\CreateDrugs', 'default', 'App', 1613308932, 1),
(57, '2021-02-13-142946', 'App\\Database\\Migrations\\CreateDetailTransactions', 'default', 'App', 1613308932, 1);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `address`, `city`, `phone_number`, `created_at`, `updated_at`) VALUES
(1, 'Stoltenberg PLC', '20304 Welch Ports\nLenoreport, MT 83434', 'South Gino', '525-884-5626', '2021-02-14 07:22:19', '2021-02-14 07:22:19'),
(2, 'Gorczany, Kuvalis and Mayert', '43718 Aisha Field Suite 554\nHanetown, AK 34442', 'Luraport', '424-914-4957', '2021-02-14 07:22:19', '2021-02-14 07:22:19'),
(3, 'Tillman and Sons', '19368 Katrine Fields Suite 192\nWest Fredrickport, MD 19367-0122', 'Lindport', '+15757558304', '2021-02-14 07:22:19', '2021-02-14 07:22:19'),
(4, 'Gleason-Gibson', '652 Barney Coves\nEast Daphney, MD 84167', 'Buckridgeton', '252-247-7064', '2021-02-14 07:22:19', '2021-02-14 07:22:19'),
(5, 'Beahan-Kuhn', '970 Kyra Expressway\nHallefurt, AZ 20877-2108', 'Ibrahimborough', '494-209-6398', '2021-02-14 07:22:19', '2021-02-14 07:22:19');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `total` int(11) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `customer_name`, `datetime`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 'quis', '1973-04-10 17:23:10', 6000, '2021-02-14 07:22:19', '2021-02-14 07:22:19'),
(2, 1, 'maiores', '2008-09-30 14:30:36', 10000, '2021-02-14 07:22:19', '2021-02-14 07:22:19'),
(3, 1, 'voluptatem', '2015-09-17 05:21:02', 7000, '2021-02-14 07:22:20', '2021-02-14 07:22:20'),
(4, 1, 'ipsum', '2013-11-26 16:22:45', 10000, '2021-02-14 07:22:20', '2021-02-14 07:22:20'),
(5, 1, 'necessitatibus', '2012-12-17 16:48:43', 6000, '2021-02-14 07:22:20', '2021-02-14 07:22:20'),
(6, 1, 'Slamet', '2021-02-15 05:41:00', 9999, '2021-02-14 23:41:57', '2021-02-14 23:50:40');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE `transaction_details` (
  `id` int(11) UNSIGNED NOT NULL,
  `transaction_id` int(11) UNSIGNED NOT NULL,
  `drug_id` int(11) UNSIGNED NOT NULL,
  `sub_total` int(11) UNSIGNED NOT NULL,
  `total` int(11) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction_details`
--

INSERT INTO `transaction_details` (`id`, `transaction_id`, `drug_id`, `sub_total`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 200, 3000, '2021-02-14 07:22:20', '2021-02-14 07:22:20'),
(2, 1, 5, 800, 3000, '2021-02-14 07:22:20', '2021-02-14 07:22:20'),
(3, 1, 1, 1000, 10000, '2021-02-14 07:22:20', '2021-02-14 07:22:20'),
(4, 2, 3, 400, 5000, '2021-02-14 07:22:20', '2021-02-14 07:22:20'),
(5, 2, 1, 200, 2000, '2021-02-14 07:22:20', '2021-02-14 07:22:20'),
(6, 2, 4, 1000, 8000, '2021-02-14 07:22:20', '2021-02-14 07:22:20'),
(7, 3, 4, 800, 6000, '2021-02-14 07:22:20', '2021-02-14 07:22:20'),
(8, 3, 2, 700, 5000, '2021-02-14 07:22:20', '2021-02-14 07:22:20'),
(9, 3, 3, 700, 10000, '2021-02-14 07:22:20', '2021-02-14 07:22:20'),
(10, 4, 3, 700, 1000, '2021-02-14 07:22:20', '2021-02-14 07:22:20'),
(11, 4, 4, 200, 5000, '2021-02-14 07:22:20', '2021-02-14 07:22:20'),
(12, 4, 4, 100, 6000, '2021-02-14 07:22:20', '2021-02-14 07:22:20'),
(13, 5, 2, 100, 8000, '2021-02-14 07:22:20', '2021-02-14 07:22:20'),
(14, 1, 1, 404, 6000, '2021-02-14 07:22:20', '2021-02-14 23:56:25'),
(15, 5, 5, 200, 1000, '2021-02-14 07:22:20', '2021-02-14 07:22:20'),
(16, 6, 2, 1000, 300000, '2021-02-14 23:44:47', '2021-02-14 23:44:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '17207ac7cffd3cf49dadee9b7cdac0d6', '2021-02-14 07:22:19', '2021-02-14 07:22:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `drugs_supplier_id_foreign` (`supplier_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`);

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaction_details_transaction_id_foreign` (`transaction_id`),
  ADD KEY `transaction_details_drug_id_foreign` (`drug_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `drugs`
--
ALTER TABLE `drugs`
  ADD CONSTRAINT `drugs_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD CONSTRAINT `transaction_details_drug_id_foreign` FOREIGN KEY (`drug_id`) REFERENCES `drugs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaction_details_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
