-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 21 2023 г., 21:22
-- Версия сервера: 5.7.39-log
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `papadata`
--
CREATE DATABASE IF NOT EXISTS `papadata` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `papadata`;

-- --------------------------------------------------------

--
-- Структура таблицы `firstdata`
--

CREATE TABLE `firstdata` (
  `id` int(11) NOT NULL,
  `Surname` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MiddleName` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Number` varchar(18) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `firstdata`
--

INSERT INTO `firstdata` (`id`, `Surname`, `Name`, `MiddleName`, `Number`, `Email`, `Password`) VALUES
(14, 'Dezhurov', 'Kirill', 'Sergeevich', '+7(983)527-63-38', 'kdezhurov29@gmail.com', '7c6adf43c63ddb1e3bffaa8b63376937'),
(15, 'asd', 'asdasd', 'asdasdasd', '+7(111)111-11-11', 'kdezhurov28@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `tour` varchar(64) DEFAULT NULL,
  `price` int(64) DEFAULT NULL,
  `user` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `tour`, `price`, `user`) VALUES
(1, 'Aurora Oriental Bay Resort', 15000, '8555'),
(2, 'Атрия', 15000, '8555'),
(3, 'САНАТОРИЙ МАШУК', 15000, '8555');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `strana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `img`, `description`, `strana`) VALUES
(1, 'Аланья', '1676490778изображение_2023-02-15_225256965.png', 'Пляжный отдых', 'TUR'),
(2, 'Сочи', '1676491093изображение_2023-02-15_225811122.png', 'Пляжный отдых', 'RUS'),
(3, 'Алматы', '1676491161изображение_2023-02-15_225920314.png', 'Экскурсии по историческим местам города', 'KAZ'),
(4, 'Стамбул', '1676491244изображение_2023-02-15_230043267.png', 'Пляжный отдых', 'TUR'),
(5, 'Анталья', '1676491581изображение_2023-02-15_230615267.png', 'Пляжный отдых', 'TUR'),
(6, 'Анкара', '1676491635изображение_2023-02-15_230712238.png', 'Отельный отдых', 'RUS'),
(7, 'Кемер', '1676491676изображение_2023-02-15_230755000.png', 'Пляжный отдых', 'TUR'),
(8, 'Анапа', '1676491724изображение_2023-02-15_230842186.png', 'Пляжный отдых', 'RUS'),
(9, 'Новороссийск', '1676491768изображение_2023-02-15_230926952.png', 'Пляжный отдых', 'RUS');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `firstdata`
--
ALTER TABLE `firstdata`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `firstdata`
--
ALTER TABLE `firstdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
