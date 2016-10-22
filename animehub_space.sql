-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 22 2016 г., 19:10
-- Версия сервера: 5.5.50
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `animehub.space`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin_panel`
--

CREATE TABLE IF NOT EXISTS `admin_panel` (
  `id` int(255) NOT NULL,
  `login` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin_panel`
--

INSERT INTO `admin_panel` (`id`, `login`, `password`, `hash`) VALUES
(1, 'admin', 'mainpass', '$2y$10$IKTHXw08OrE745FGNBwAFeEoA6GySSDsYG3q.9IA2f6hOJPRtYYBW');

-- --------------------------------------------------------

--
-- Структура таблицы `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `private` varchar(15) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `main_news`
--

CREATE TABLE IF NOT EXISTS `main_news` (
  `id` int(11) NOT NULL,
  `img_mini` varchar(255) NOT NULL,
  `img_main` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `small_descr` tinytext NOT NULL,
  `descr` mediumtext NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `main_news`
--

INSERT INTO `main_news` (`id`, `img_mini`, `img_main`, `title`, `small_descr`, `descr`, `timestamp`) VALUES
(1, '', '', 'Заголовок первой новости', 'Короткое описание или превью первой новости на главной странице с максимальной длиной в 255 символов. Необходимо настроить размер текста, п', '', '2016-10-22 02:28:39'),
(4, '', '', 'Вторая новость', 'Второе описание новости', 'Второй текст новости', '0000-00-00 00:00:00'),
(8, '', '', '', '', '                Enter HTML here...\r\n            ', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `password` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `hash`) VALUES
(1, 'Admin', 'mainpass', '$2y$10$IKTHXw08OrE745FGNBwAFeEoA6GySSDsYG3q.9IA2f6hOJPRtYYBW');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin_panel`
--
ALTER TABLE `admin_panel`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `main_news`
--
ALTER TABLE `main_news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin_panel`
--
ALTER TABLE `admin_panel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `main_news`
--
ALTER TABLE `main_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
