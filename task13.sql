-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 25 2020 г., 01:32
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `task13`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(250) NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_r` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(10) NOT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `password_r`, `first_name`, `last_name`, `age`, `gender`) VALUES
(1, '10', '10', '10', '10', '10', '10', 10, '10'),
(8, 'sdrfgh', 'zsdfg@sdf', 'sdfdgf', 'dsfg', 'dsfg', 'dsfg', 123, 'sdf'),
(10, 'aswefrga', 'EDAFS@dfg', 'dwaeFSR', 'DEAFSA', 'DAEFSA', 'DEAFSA', 123, 'DEAFRSA'),
(12, 'cdsafsgd', 'faesrgad@dsafsg', 'sdaFf', 'fdsadg', 'fdsgdx', 'fdsgdz', 1234, 'dvsfdx');

-- --------------------------------------------------------

--
-- Структура таблицы `users_sign`
--

CREATE TABLE `users_sign` (
  `users_id` int(250) NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users_sign`
--

INSERT INTO `users_sign` (`users_id`, `username`, `password`) VALUES
(1, '$username', '$password'),
(2, '13', '22'),
(3, 'asdf', 'sdfg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `name` (`username`);

--
-- Индексы таблицы `users_sign`
--
ALTER TABLE `users_sign`
  ADD PRIMARY KEY (`users_id`),
  ADD UNIQUE KEY `users_name` (`username`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `users_sign`
--
ALTER TABLE `users_sign`
  MODIFY `users_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
