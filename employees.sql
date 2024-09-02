-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 03 2024 г., 00:59
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testsite`
--

-- --------------------------------------------------------

--
-- Структура таблицы `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `employees`
--

INSERT INTO `employees` (`id`, `email`, `first_name`, `last_name`, `avatar`) VALUES
(37, 'george.bluth@reqres.in', 'George', 'Bluth', 'https://reqres.in/img/faces/1-image.jpg'),
(38, 'janet.weaver@reqres.in', 'Janet', 'Weaver', 'https://reqres.in/img/faces/2-image.jpg'),
(39, 'emma.wong@reqres.in', 'Emma', 'Wong', 'https://reqres.in/img/faces/3-image.jpg'),
(40, 'eve.holt@reqres.in', 'Eve', 'Holt', 'https://reqres.in/img/faces/4-image.jpg'),
(41, 'charles.morris@reqres.in', 'Charles', 'Morris', 'https://reqres.in/img/faces/5-image.jpg'),
(42, 'tracey.ramos@reqres.in', 'Tracey', 'Ramos', 'https://reqres.in/img/faces/6-image.jpg'),
(43, 'michael.lawson@reqres.in', 'Michael', 'Lawson', 'https://reqres.in/img/faces/7-image.jpg'),
(44, 'lindsay.ferguson@reqres.in', 'Lindsay', 'Ferguson', 'https://reqres.in/img/faces/8-image.jpg'),
(45, 'tobias.funke@reqres.in', 'Tobias', 'Funke', 'https://reqres.in/img/faces/9-image.jpg'),
(46, 'byron.fields@reqres.in', 'Byron', 'Fields', 'https://reqres.in/img/faces/10-image.jpg'),
(47, 'george.edwards@reqres.in', 'George', 'Edwards', 'https://reqres.in/img/faces/11-image.jpg'),
(48, 'rachel.howell@reqres.in', 'Rachel', 'Howell', 'https://reqres.in/img/faces/12-image.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
