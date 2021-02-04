-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 04 2021 г., 11:11
-- Версия сервера: 5.6.41-log
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `php_photogallery`
--

-- --------------------------------------------------------

--
-- Структура таблицы `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `smallPath` varchar(255) NOT NULL,
  `originalPath` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `photos`
--

INSERT INTO `photos` (`id`, `name`, `smallPath`, `originalPath`, `size`, `views`) VALUES
(1, 'The first photo', './imgSmall/01.jpg', './imgBig/01.jpg', 100, 2),
(2, 'The second photo', './imgSmall/02.jpg', './imgBig/02.jpg', 100, 4),
(3, 'The third photo', './imgSmall/03.jpg', './imgBig/03.jpg', 100, 0),
(4, 'The fourth photo', './imgSmall/04.jpg', './imgBig/04.jpg', 100, 0),
(5, 'The fifth photo', './imgSmall/05.jpg', './imgBig/05.jpg', 100, 0),
(6, 'The sixth photo', './imgSmall/06.jpg', './imgBig/06.jpg', 100, 0),
(7, 'The seventh photo', './imgSmall/07.jpg', './imgBig/07.jpg', 100, 0),
(8, 'The eighth photo', './imgSmall/08.jpg', './imgBig/08.jpg', 100, 0),
(9, 'The nineth photo', './imgSmall/09.jpg', './imgBig/09.jpg', 100, 0),
(10, 'The tenth photo', './imgSmall/10.jpg', './imgBig/10.jpg', 100, 0),
(11, 'The eleventh photo', './imgSmall/11.jpg', './imgBig/11.jpg', 100, 0),
(12, 'The twelveth photo', './imgSmall/12.jpg', './imgBig/12.jpg', 100, 0),
(13, 'The thirteenth photo', './imgSmall/13.jpg', './imgBig/13.jpg', 100, 0),
(14, 'The fourteenth photo', './imgSmall/14.jpg', './imgBig/14.jpg', 100, 0),
(15, 'The fifteenth photo', './imgSmall/15.jpg', './imgBig/15.jpg', 100, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
