-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Час створення: Січ 13 2014 р., 16:26
-- Версія сервера: 5.5.34
-- Версія PHP: 5.4.6-1ubuntu1.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- БД: `prosto-mysql`
--

-- --------------------------------------------------------

--
-- Структура таблиці `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `grocery` text COLLATE utf8_bin NOT NULL,
  `barrel` text COLLATE utf8_bin NOT NULL,
  `chemicals` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Product categories';

--
-- Дамп даних таблиці `category`
--

INSERT INTO `category` (`grocery`, `barrel`, `chemicals`) VALUES
('Бакалія', 'Спиртне', 'Хімія');

-- --------------------------------------------------------

--
-- Структура таблиці `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_bin NOT NULL,
  `price` int(10) NOT NULL,
  `category_name` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Product name and price' AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Структура таблиці `product-list`
--

CREATE TABLE IF NOT EXISTS `product-list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_bin NOT NULL,
  `price` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Product name and price' AUTO_INCREMENT=27 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
