-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 26 2022 г., 20:11
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `news`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `idContact` int NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Fathername` varchar(255) NOT NULL,
  `Position` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `tel` varchar(120) DEFAULT NULL,
  `cab` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`idContact`, `Firstname`, `Lastname`, `Fathername`, `Position`, `img`, `tel`, `cab`) VALUES
(1, 'Евгений ', 'Тищенко ', 'Николаевич', 'Декан факультета, д.э.н., профессор.', 'Тищенко.jpg', '8 (928) 144-04-03', '3 этаж, кабинет 305а'),
(2, 'Надежда', 'Мисиченко', 'Юрьевна', 'Зам. декана по очной и заочной формам обучения, к.э.н., доцент.', 'Мисиченко.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `event`
--

CREATE TABLE `event` (
  `idEvent` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `event`
--

INSERT INTO `event` (`idEvent`, `name`, `desc`, `date`) VALUES
(1, 'Хакатон', 'В этот день прошел хакатон', '2022-06-25'),
(4, 'Второе мероприятие', 'Описание второго мероприятия', '2022-06-26'),
(5, 'Третье мероприятие', 'Описание', '2022-06-26');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `idGal` int NOT NULL,
  `title` varchar(120) DEFAULT NULL,
  `description` varchar(120) DEFAULT NULL,
  `img` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`idGal`, `title`, `description`, `img`) VALUES
(1, 'Мафия', 'Фотографии с нового мероприятия КтиИБ', 'j8FDt4vJX4A.png'),
(3, 'Яндекс лицей', 'Выпускники Яндекс лицея', 'nGJLP9AESuc.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `idNews` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` varchar(1200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`idNews`, `title`, `img`, `description`) VALUES
(1, 'Хакатон', '1.jpg', 'IV Региональный хакатон «Кибербезопасность граждан: противодействие коррупционным преступлениям в условиях цифровизации финансовых услуг» – ЗАВЕРШЁН!\r\n'),
(2, 'ИВУШКА', '2.jpg', 'Отдых? Море? Загар? Да-да, все это вы можете получить в СОЛ «Ивушка»(г. Таганрог) с 4 по 23 июля.');

-- --------------------------------------------------------

--
-- Структура таблицы `photo`
--

CREATE TABLE `photo` (
  `idPhoto` int NOT NULL,
  `idGal` int NOT NULL,
  `img` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `photo`
--

INSERT INTO `photo` (`idPhoto`, `idGal`, `img`) VALUES
(1, 1, 'photo1.jpg'),
(2, 1, 'photo2.jpg'),
(3, 1, 'photo3.jpg'),
(4, 1, 'photo4.jpg'),
(8, 3, 'photo24.jpg'),
(9, 3, 'photo23.jpg'),
(10, 3, 'photo22.jpg'),
(11, 3, 'photo21.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `idUser` int NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`idUser`, `login`, `password`) VALUES
(1, 'admin', 'password');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`idContact`);

--
-- Индексы таблицы `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`idEvent`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`idGal`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`idNews`);

--
-- Индексы таблицы `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`idPhoto`),
  ADD KEY `idGal` (`idGal`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `idContact` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `event`
--
ALTER TABLE `event`
  MODIFY `idEvent` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `idGal` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `idNews` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `photo`
--
ALTER TABLE `photo`
  MODIFY `idPhoto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
