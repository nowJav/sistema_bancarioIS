-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2024 a las 03:45:07
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bancariois`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cards`
--

CREATE TABLE `cards` (
  `id_card` int(11) NOT NULL,
  `user_id_card` int(11) DEFAULT NULL,
  `card_number_card` varchar(16) NOT NULL,
  `expiration_date_card` date NOT NULL,
  `cvv_card` varchar(3) NOT NULL,
  `credit_limit_card` decimal(10,2) NOT NULL,
  `available_credit_card` decimal(10,2) NOT NULL,
  `balance_card` decimal(10,2) NOT NULL,
  `created_at_card` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at_card` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `cards`
--

INSERT INTO `cards` (`id_card`, `user_id_card`, `card_number_card`, `expiration_date_card`, `cvv_card`, `credit_limit_card`, `available_credit_card`, `balance_card`, `created_at_card`, `updated_at_card`) VALUES
(1, 1, '1234567890123456', '2025-12-31', '123', 5000.00, 5000.00, 0.00, '2023-01-01 06:00:00', '2023-01-01 06:00:00'),
(2, 2, '2345678901234567', '2025-12-31', '456', 3000.00, 3000.00, 0.00, '2023-02-01 06:00:00', '2023-02-01 06:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `credit_limit_requests`
--

CREATE TABLE `credit_limit_requests` (
  `id_credit_limit_request` int(11) NOT NULL,
  `card_id_credit_limit_request` int(11) DEFAULT NULL,
  `requested_limit_credit_limit_request` decimal(10,2) NOT NULL,
  `status_credit_limit_request` enum('pending','approved','rejected') DEFAULT 'pending',
  `requested_at_credit_limit_request` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `credit_limit_requests`
--

INSERT INTO `credit_limit_requests` (`id_credit_limit_request`, `card_id_credit_limit_request`, `requested_limit_credit_limit_request`, `status_credit_limit_request`, `requested_at_credit_limit_request`) VALUES
(1, 1, 6000.00, 'approved', '2023-06-01 16:00:00'),
(2, 2, 4000.00, 'pending', '2023-06-02 17:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notifications`
--

CREATE TABLE `notifications` (
  `id_notification` int(11) NOT NULL,
  `user_id_notification` int(11) DEFAULT NULL,
  `message_notification` varchar(255) DEFAULT NULL,
  `read_notification` tinyint(1) DEFAULT 0,
  `created_at_notification` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `notifications`
--

INSERT INTO `notifications` (`id_notification`, `user_id_notification`, `message_notification`, `read_notification`, `created_at_notification`) VALUES
(1, 1, 'Payment due soon', 0, '2023-06-10 16:00:00'),
(2, 2, 'New statement available', 1, '2023-06-11 17:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pin_changes`
--

CREATE TABLE `pin_changes` (
  `id_pin_change` int(11) NOT NULL,
  `card_id_pin_change` int(11) DEFAULT NULL,
  `old_pin_pin_change` varchar(255) DEFAULT NULL,
  `new_pin_pin_change` varchar(255) DEFAULT NULL,
  `changed_at_pin_change` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `pin_changes`
--

INSERT INTO `pin_changes` (`id_pin_change`, `card_id_pin_change`, `old_pin_pin_change`, `new_pin_pin_change`, `changed_at_pin_change`) VALUES
(1, 1, '1111', '2222', '2023-06-01 16:00:00'),
(2, 2, '2222', '3333', '2023-06-02 17:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `statements`
--

CREATE TABLE `statements` (
  `id_statement` int(11) NOT NULL,
  `card_id_statement` int(11) DEFAULT NULL,
  `statement_date_statement` date NOT NULL,
  `due_date_statement` date NOT NULL,
  `total_due_statement` decimal(10,2) NOT NULL,
  `minimum_due_statement` decimal(10,2) NOT NULL,
  `generated_at_statement` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `statements`
--

INSERT INTO `statements` (`id_statement`, `card_id_statement`, `statement_date_statement`, `due_date_statement`, `total_due_statement`, `minimum_due_statement`, `generated_at_statement`) VALUES
(1, 1, '2023-06-01', '2023-06-30', 100.00, 10.00, '2023-06-01 06:00:00'),
(2, 2, '2023-06-01', '2023-06-30', 200.00, 20.00, '2023-06-01 06:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transactions`
--

CREATE TABLE `transactions` (
  `id_transaction` int(11) NOT NULL,
  `card_id_transaction` int(11) DEFAULT NULL,
  `amount_transaction` decimal(10,2) NOT NULL,
  `transaction_date_transaction` timestamp NOT NULL DEFAULT current_timestamp(),
  `description_transaction` varchar(255) DEFAULT NULL,
  `balance_transaction` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `transactions`
--

INSERT INTO `transactions` (`id_transaction`, `card_id_transaction`, `amount_transaction`, `transaction_date_transaction`, `description_transaction`, `balance_transaction`) VALUES
(1, 1, 100.00, '2023-06-01 16:00:00', 'Grocery Shopping', 100.00),
(2, 2, 200.00, '2023-06-02 17:00:00', 'Online Purchase', 200.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `rol_user` text DEFAULT NULL,
  `picture_user` text DEFAULT NULL,
  `gender_user` text DEFAULT NULL,
  `cui_user` text DEFAULT NULL,
  `displayname_user` text DEFAULT NULL,
  `username_user` text DEFAULT NULL,
  `password_user` text DEFAULT NULL,
  `email_user` text DEFAULT NULL,
  `country_user` text DEFAULT NULL,
  `city_user` text DEFAULT NULL,
  `phone_user` text DEFAULT NULL,
  `address_user` text DEFAULT NULL,
  `token_user` text DEFAULT NULL,
  `token_exp_user` text DEFAULT NULL,
  `method_user` text DEFAULT NULL,
  `verification_user` int(11) NOT NULL DEFAULT 0,
  `date_created_user` date DEFAULT NULL,
  `date_updated_user` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `rol_user`, `picture_user`, `gender_user`, `cui_user`, `displayname_user`, `username_user`, `password_user`, `email_user`, `country_user`, `city_user`, `phone_user`, `address_user`, `token_user`, `token_exp_user`, `method_user`, `verification_user`, `date_created_user`, `date_updated_user`) VALUES
(1, 'admin', '42.png', 'male', '2997787540101', 'Javier Morales', 'javier', '$2a$07$azybxcags23425sdg23sdenVRIgAYZIqPMoYAXtNHxr2kzv4mf/8G', 'javier@gmail.com', 'Guatemala', 'Guatemala', '+502_37219056', 'Guatemala Guatemala', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3MTcwNDUwNTksImV4cCI6MTcxNzEzMTQ1OSwiZGF0YSI6eyJpZCI6MSwiZW1haWwiOiJqYXZpZXJAZ21haWwuY29tIn19.MVdpmFX89h2lwKZabrBSfpnPKh48WJSsfBk-60WXH7U', '1717131459', 'direct', 1, '2024-05-20', '2024-05-30 04:57:39'),
(2, 'admin', '2.jpg', 'male', '2999787540108', 'Victor Vasquez', 'victor', '$2a$07$azybxcags23425sdg23sdeanQZqjaf6Birm2NvcYTNtJw24CsO5uq', 'victor@gmail.com', 'Guatemala', 'Guatemala', ' 502_37219056', 'Guatemala Guatemala', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3MTcwNDUxNDgsImV4cCI6MTcxNzEzMTU0OCwiZGF0YSI6eyJpZCI6MiwiZW1haWwiOiJ2aWN0b3JAZ21haWwuY29tIn19.auTNk4uAU5jQxTf_AkvRTApljcMHLXQ-Y80aTnqR68A', '1717131548', 'direct', 1, '2024-05-20', '2024-05-30 04:59:08');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id_card`),
  ADD UNIQUE KEY `card_number_card` (`card_number_card`),
  ADD KEY `idx_user_id_card` (`user_id_card`);

--
-- Indices de la tabla `credit_limit_requests`
--
ALTER TABLE `credit_limit_requests`
  ADD PRIMARY KEY (`id_credit_limit_request`),
  ADD KEY `idx_card_id_credit_limit_request` (`card_id_credit_limit_request`);

--
-- Indices de la tabla `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id_notification`),
  ADD KEY `idx_user_id_notification` (`user_id_notification`);

--
-- Indices de la tabla `pin_changes`
--
ALTER TABLE `pin_changes`
  ADD PRIMARY KEY (`id_pin_change`),
  ADD KEY `idx_card_id_pin_change` (`card_id_pin_change`);

--
-- Indices de la tabla `statements`
--
ALTER TABLE `statements`
  ADD PRIMARY KEY (`id_statement`),
  ADD KEY `idx_card_id_statement` (`card_id_statement`);

--
-- Indices de la tabla `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id_transaction`),
  ADD KEY `idx_card_id_transaction` (`card_id_transaction`),
  ADD KEY `idx_transaction_date_transaction` (`transaction_date_transaction`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cards`
--
ALTER TABLE `cards`
  MODIFY `id_card` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `credit_limit_requests`
--
ALTER TABLE `credit_limit_requests`
  MODIFY `id_credit_limit_request` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id_notification` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pin_changes`
--
ALTER TABLE `pin_changes`
  MODIFY `id_pin_change` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `statements`
--
ALTER TABLE `statements`
  MODIFY `id_statement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id_transaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cards`
--
ALTER TABLE `cards`
  ADD CONSTRAINT `cards_ibfk_1` FOREIGN KEY (`user_id_card`) REFERENCES `users` (`id_user`);

--
-- Filtros para la tabla `credit_limit_requests`
--
ALTER TABLE `credit_limit_requests`
  ADD CONSTRAINT `credit_limit_requests_ibfk_1` FOREIGN KEY (`card_id_credit_limit_request`) REFERENCES `cards` (`id_card`);

--
-- Filtros para la tabla `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`user_id_notification`) REFERENCES `users` (`id_user`);

--
-- Filtros para la tabla `pin_changes`
--
ALTER TABLE `pin_changes`
  ADD CONSTRAINT `pin_changes_ibfk_1` FOREIGN KEY (`card_id_pin_change`) REFERENCES `cards` (`id_card`);

--
-- Filtros para la tabla `statements`
--
ALTER TABLE `statements`
  ADD CONSTRAINT `statements_ibfk_1` FOREIGN KEY (`card_id_statement`) REFERENCES `cards` (`id_card`);

--
-- Filtros para la tabla `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`card_id_transaction`) REFERENCES `cards` (`id_card`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
