-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 30 2021 г., 14:58
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tavernvisitors-db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `visitors`
--

CREATE TABLE `visitors` (
  `id` int(8) NOT NULL,
  `name` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `genre` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `genre2` varchar(15) NOT NULL,
  `action` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `visitors`
--

INSERT INTO `visitors` (`id`, `name`, `genre`, `genre2`, `action`) VALUES
(1, 'Tom', 'Rock', 'Pop', ''),
(2, 'Bob', 'Pop', '', NULL),
(3, 'Harry', 'Rock', '', NULL),
(4, 'John', 'Jazz', 'Disco', NULL),
(5, 'Damon', 'Disco', '', NULL),
(6, 'Mike', 'Rock', '', NULL),
(7, 'Kate', 'Pop', '', NULL),
(8, 'Stacy', 'Jazz', '', NULL),
(9, 'Nick', 'Pop', '', NULL),
(10, 'Paul', 'Disco', '', NULL),
(11, 'Shawn', 'Rock', '', NULL),
(12, 'Billy', 'Pop', '', NULL),
(13, 'Lisa', 'Rock', '', NULL),
(14, 'Robert', 'Disco', '', NULL),
(15, 'Helen', 'Pop', '', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
