-- phpMyAdmin SQL Dump
-- version 3.3.8
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июл 05 2017 г., 20:42
-- Версия сервера: 5.1.52
-- Версия PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nick` varchar(24) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `DataReg` date NOT NULL,
  `DataBirth` date NOT NULL,
  `FIO` varchar(75) NOT NULL,
  `Reputation` int(11) NOT NULL DEFAULT '0',
  `Blogs` int(11) NOT NULL DEFAULT '0',
  `Email` varchar(24) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `accounts`
--

INSERT INTO `accounts` (`ID`, `Nick`, `Password`, `DataReg`, `DataBirth`, `FIO`, `Reputation`, `Blogs`, `Email`) VALUES
(1, 'Swift', '548470', '2016-12-17', '2016-12-20', 'Березуцкий Дмитрий Викторович', 0, 0, 'swifts422@gmail.com'),
(2, 'Swift', '548470', '2016-12-24', '0000-00-00', '', 0, 0, 'swifts522@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(50) NOT NULL,
  `Text` varchar(10000) NOT NULL,
  `Picture` varchar(100) NOT NULL,
  `Data` date NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`ID`, `Title`, `Text`, `Picture`, `Data`) VALUES
(1, 'Агенство НАСА запускают новую операцию', 'Агенство НАСА запускают новую операцию', 'newsimg1.jpg', '2016-12-08'),
(2, 'Илон Маск и его программа покорения Марса', 'Илон Маск и его программа покорения Марса', 'newsimg2.jpg', '2016-12-08'),
(3, 'Почему мы так и не смогли покорить луну первыми', 'Почему мы так и не смогли покорить луну первыми', 'newsimg3.jpg', '2016-12-08'),
(4, 'Космическая гонка которую мы выиграли', 'Космическая гонка которую мы выиграли', 'newsimg4.jpg', '2016-12-08'),
(5, 'Темная материя может быть равномернее распределена', 'Темная материя может быть равномернее распределена', 'Dark-Matter-Filaments1-650x397.jpg', '2016-12-09'),
(6, 'Зонд «Кассини» совершает первый «нырок»', 'Зонд «Кассини» совершает первый «нырок» в кольцо Сатурна', 'C736_53B3EBC5.jpg', '2016-12-09'),
(7, 'Virgin Galactic совершает первый планирующий полет', 'Космический корабль компании Virgin Galactic совершает первый планирующий полет', 'virgin-galactic-650x390.jpg', '2016-12-09'),
(8, 'Открыт 2-метровый астероид самый крохотный', 'Открыт 2-метровый астероид самый крохотный', '86eb095d.jpg', '2016-12-09'),
(9, 'Советские ученые «разговаривали» с Марсом', 'Советские ученые четырнадцать секунд «разговаривали» с Марсом', '1a332001404489cdd1c038b0cb7387f0.jpg', '2016-12-09');
