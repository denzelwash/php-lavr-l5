-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 10 2021 г., 12:37
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lesson4_dz`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id_article` int(10) UNSIGNED NOT NULL,
  `id_category` int(10) UNSIGNED NOT NULL,
  `title` varchar(32) NOT NULL,
  `text` varchar(512) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id_article`, `id_category`, `title`, `text`, `date`) VALUES
(1, 0, 'Первая статья', 'Описание у первой статьи, Бла бла бла', '2021-02-02 09:34:24'),
(2, 0, 'Вторая статья', 'Описание у второй статьи, Бла бла бла', '2021-02-02 09:34:24'),
(17, 2, 'Планета', '2', '2021-02-04 05:06:25'),
(22, 3, 'Еще одна статья', 'Тест', '2021-02-09 15:11:04'),
(23, 3, 'Последняя статья', 'Последняя статья описание', '2021-02-10 09:01:02'),
(24, 0, 'Hack', '&lt;/textarea&gt;&lt;h1&gt;Ку&lt;/h1&gt;', '2021-02-10 09:09:35');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id_category` int(10) UNSIGNED NOT NULL,
  `title` varchar(32) NOT NULL,
  `url` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id_category`, `title`, `url`) VALUES
(1, 'Про секс', 'sex'),
(2, 'Мир', 'world'),
(3, 'Техника', 'tech');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `id_category` (`id_category`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
