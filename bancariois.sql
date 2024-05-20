-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2024 a las 23:34:25
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
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `rol_user` text DEFAULT NULL,
  `picture_user` text DEFAULT NULL,
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
  `wishlist_user` text DEFAULT NULL,
  `date_created_user` date DEFAULT NULL,
  `date_updated_user` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `rol_user`, `picture_user`, `displayname_user`, `username_user`, `password_user`, `email_user`, `country_user`, `city_user`, `phone_user`, `address_user`, `token_user`, `token_exp_user`, `method_user`, `verification_user`, `wishlist_user`, `date_created_user`, `date_updated_user`) VALUES
(1, 'admin', '42.png', 'Admin', 'admincs', '$2a$07$azybxcags23425sdg23sdenVRIgAYZIqPMoYAXtNHxr2kzv4mf/8G', 'admin@comprosmart.com', 'Guatemala', 'Guatemala', '+502_37219056', 'Guatemala Guatemala', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3MDk5MTI0NzUsImV4cCI6MTcwOTk5ODg3NSwiZGF0YSI6eyJpZCI6NDIsImVtYWlsIjoiYWRtaW5AY29tcHJvc21hcnQuY29tIn19.q-xeIOUPqU6wJdKP0edOKhIBz7vguny51O6JoewtyYc', '1709998875', 'direct', 1, NULL, '2024-05-20', '2024-05-20 21:30:04'),
(2, 'admin', '2.jpg', 'Guillermo Arango', 'guille', '$2a$07$azybxcags23425sdg23sdeanQZqjaf6Birm2NvcYTNtJw24CsO5uq', 'guille@gmail.com', 'Guatemala', 'Guatemala', ' 502_37219056', 'Guatemala Guatemala', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3MTU5NzgxMzMsImV4cCI6MTcxNjA2NDUzMywiZGF0YSI6eyJpZCI6MiwiZW1haWwiOiJndWlsbGVAZ21haWwuY29tIn19.mSloNNaVsCwwQpBOa0gWW_HpBhU6KWMgJg37jjvDkNo', '1716064533', 'direct', 1, NULL, '2024-05-20', '2024-05-20 21:33:44');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
