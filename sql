-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 20, 2018 at 08:01 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `wrum`
--

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `description` varchar(15) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `description`, `date_create`, `date_modified`) VALUES
(1, 'lead', '2018-05-31 16:19:11', '0000-00-00 00:00:00'),
(2, 'admin', '2018-05-31 16:19:36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `id_instagram` float DEFAULT NULL,
  `my_instagram` varchar(50) DEFAULT NULL,
  `indicated_instagram` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `permission_id` int(11) NOT NULL DEFAULT '1',
  `image_url` longtext,
  `date_create` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_instagram` (`id_instagram`),
  ADD KEY `1` (`permission_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user` ADD CONSTRAINT `fk_permissions` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;


ALTER TABLE `user` CHANGE `indicated_instagram` `indicated_instagram` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;


-- ALTER TABLE `user` ADD `id_instagram` FLOAT NULL DEFAULT NULL AFTER `cpf`;
-- ALTER TABLE `user` ADD UNIQUE(`id_instagram`);

ALTER TABLE `user` ADD `id_instagram_hash` BIGINT NULL DEFAULT NULL AFTER `id_instagram`;
