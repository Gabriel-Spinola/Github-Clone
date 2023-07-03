-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jul 03, 2023 at 12:02 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `menu_item` (
  `id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `amount` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `img_file_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `menu_item` (`id`, `item_name`, `description`, `price`, `amount`, `category`, `img_file_name`) VALUES
(1, 'Coxinha', 'pastel recheado de frango com catupiry                                                                                                                                                                                                ', 5, 5, 2, 'pastelfrango.jpg'),
(2, 'Pastel', 'pastel recheado de frango com catupiry', 1.2, 5, 0, 'pastelfrango.jpg'),
(3, 'Coxinha', 'pastel recheado de frango com catupiry', 10.5, 6, 2, 'pastelfrango.jpg'),
(4, 'Pastel', 'pastel recheado de frango com catupiry', 1.2, 1, 2, 'pastelfrango.jpg'),
(5, 'Pastel', 'pastel recheado de frango com catupiry', 1.2, 2, 1, 'pastelfrango.jpg'),
(6, 'Pastel', 'pastel recheado de frango com catupiry', 1.2, 3, 1, 'pastelfrango.jpg'),
(7, 'Arte', '23123sdasd', 23, 1, 1, 'pastelfrango.jpg'),
(8, 'asd', 'sd', 2, 2, 1, 'pastelfrango.jpg'),
(9, 'asd', 'sd', 2, 2, 1, 'pastelfrango.jpg'),
(10, 'asd', 'sd', 2, 2, 1, 'pastelfrango.jpg'),
(11, 'asd', 'sd', 2, 2, 1, 'pastelfrango.jpg');

CREATE TABLE `order_menu_item` (
  `order_id` int(11) NOT NULL,
  `menu _item_id` int(11) NOT NULL,
  `qty_ordered` int(11) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `order_menu_item` (`order_id`, `menu _item_id`, `qty_ordered`, `details`) VALUES
(1, 1, 2, '');


CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `position` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `users` (`id`, `user_name`, `password`, `position`) VALUES
(1, 'test_user', '123', 0),
(2, 'test_admin', '123', 1);

ALTER TABLE `menu_item`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `order_menu_item`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `items` (`menu _item_id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `menu_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

ALTER TABLE `order_menu_item`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `order_menu_item`
  ADD CONSTRAINT `items` FOREIGN KEY (`menu _item_id`) REFERENCES `menu_item` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;