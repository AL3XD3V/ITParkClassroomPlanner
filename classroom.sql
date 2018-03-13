-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 13 2018 г., 16:58
-- Версия сервера: 5.5.50
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `classroom`
--

-- --------------------------------------------------------

--
-- Структура таблицы `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `id` int(10) NOT NULL,
  `class` enum('16','17','18','19') DEFAULT NULL,
  `day` varchar(10) NOT NULL,
  `time_start` time NOT NULL,
  `time_stop` time NOT NULL,
  `name` varchar(100) NOT NULL,
  `user` int(10) NOT NULL,
  `confirm` varchar(1) DEFAULT '0',
  `reg` varchar(20) NOT NULL,
  `comment` text
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `classes`
--

INSERT INTO `classes` (`id`, `class`, `day`, `time_start`, `time_stop`, `name`, `user`, `confirm`, `reg`, `comment`) VALUES
(2, '16', '2018-03-08', '08:20:01', '09:20:00', 'Экскурсия', 5, '1', '2018-03-05 00:00:00', 'Здесь коммент'),
(3, '17', '2018-03-07', '09:20:01', '11:10:00', 'Вторая экскурсия', 1, '0', '2018-03-08 11:00:00', 'бла бла бла'),
(4, '18', '2018-03-10', '13:30:01', '14:10:00', 'Семинар', 1, '0', '2018-03-06 00:00:00', 'Ооооо'),
(8, '19', '2018-03-07', '14:00:01', '16:00:00', 'Тест', 1, '1', '2018-03-06 16:21:31', 'Тестовый'),
(9, '18', '2018-03-08', '15:10:01', '15:20:00', '2_тест', 1, '1', '2018-03-06 16:27:14', '1111'),
(10, '16', '2018-03-13', '08:00:01', '09:00:00', '1', 1, '0', '2018-03-13 14:43:30', '1'),
(11, '16', '2018-03-13', '09:00:01', '09:10:00', '2', 1, '1', '2018-03-13 14:57:38', '2'),
(12, '17', '2018-03-13', '08:00:01', '09:00:00', '111', 1, '1', '2018-03-13 14:58:01', '111'),
(13, '16', '2018-03-13', '10:00:01', '11:00:00', '3', 1, '1', '2018-03-13 14:58:16', '3'),
(14, '18', '2018-03-20', '08:00:01', '09:00:00', '6', 1, '0', '2018-03-13 15:04:59', '6');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `patron` varchar(20) NOT NULL,
  `division` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(10) DEFAULT 'user',
  `verified` varchar(1) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `surname`, `name`, `patron`, `division`, `position`, `phone`, `email`, `password`, `role`, `verified`) VALUES
(1, 'Малолетнев', 'Алексей', 'Андреевич', 'IT-Парк', 'Инженер', '8-909-158-76-71', 'maloletnev_aa@ggtu.ru', '821e00537c9e80426bebc308ab373d62', 'admin', '1'),
(5, 'Тест', 'Тесты', 'Тестович', 'Отделий', 'Должностий', '123', 'robot@ggtu.ru', '202cb962ac59075b964b07152d234b70', 'user', '1'),
(6, 'Евтеев', 'Дмитрий', 'Владимирович', 'IT-Парк', 'Начальник', '+79168258585', 'evteev_dv@ggtu.ru', '827ccb0eea8a706c4c34a16891f84e7b', 'user', '0');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `classes_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
