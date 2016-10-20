-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 20 2016 г., 18:11
-- Версия сервера: 5.7.13
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `homework_10`
--

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
  `id` int(10) unsigned NOT NULL,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Price` double(8,2) NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `Title`, `Price`, `Description`, `Image`, `CategoryID`, `created_at`, `updated_at`) VALUES
(2, 'The Witcher 3', 232.10, 'Самая крутая РПГ', 'MTQ3Njk.jpg', 2, '2016-10-20 04:40:54', '2016-10-20 04:40:54'),
(3, 'Overwatch', 312.00, 'Стрелялка бегалка', 'MTQ3Njsk.jpg', 1, '2016-10-20 04:55:46', '2016-10-20 04:55:46'),
(4, 'Deus Ex', 221.00, 'Мочи киборгов, ешь мясо', 'MC45MzsQ.jpg', 1, '2016-10-20 04:56:40', '2016-10-20 04:56:40'),
(5, 'Word Of Warcraft', 300.00, 'Многопользовательская адища', 'MC45MzQ.jpg', 4, '2016-10-20 05:27:39', '2016-10-20 05:27:39'),
(6, 'Call of Dute', 213.00, 'Стрелялка мочилка', 'NDk0YTg.jpg', 1, '2016-10-20 05:37:20', '2016-10-20 05:37:20');

-- --------------------------------------------------------

--
-- Структура таблицы `goods_categories`
--

CREATE TABLE IF NOT EXISTS `goods_categories` (
  `id` int(10) unsigned NOT NULL,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `goods_categories`
--

INSERT INTO `goods_categories` (`id`, `Title`, `Description`, `created_at`, `updated_at`) VALUES
(1, 'Action', 'много много действия', '2016-10-20 04:08:20', '2016-10-20 04:08:20'),
(2, 'RPG', 'Отыгрыш и не только', '2016-10-20 04:10:26', '2016-10-20 04:10:26'),
(3, 'Квесты', 'Ни действия ни отыгрыша, зато загадки', '2016-10-20 04:10:58', '2016-10-20 04:10:58'),
(4, 'Онлайн-игры', 'мочи других', '2016-10-20 04:11:13', '2016-10-20 04:11:13'),
(5, 'Стратегии', 'Для умных или тех кто думаешь, что умный', '2016-10-20 04:11:27', '2016-10-20 04:11:27');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2016_10_18_204449_create_goods_table', 1),
(8, '2016_10_19_110305_create_goods_categories_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IsAdmin` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `IsAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@qwerty.com', '$2y$10$NlbgQQqJh4UchwWDJYVscesmNpE0b6MtmHu2f9pz0vsqoae0VDxVO', 1, '', '2016-10-20 09:14:22', '2016-10-20 11:20:56'),
(2, 'fcgc', 'cfgcgc@bj.tre', '$2y$10$d2UqCL2a3rC8a4x/EvMNluM7SajFfvuJclNhwnJ2VXFZAGAOOpKAe', 0, '', '2016-10-20 11:26:47', '2016-10-20 11:28:15'),
(3, 'vyc', 'admin@qw5erty.com', '$2y$10$HtdBG5ze43CFqsAq2DIyRuRW.CwbCiBYndG3/sLLZ09Io2gt2j35e', 0, 'q6g9TMIcmU40NC48e8UMBAzelplbTEHHlMik6msLG98SXHrYrns5naopWyKY', '2016-10-20 11:31:53', '2016-10-20 11:34:41'),
(4, 'csdcds', 'csdsd@vvsdv.co', '$2y$10$zlwEe7eMuAh2RCSJEBDJ7ONyuONGcc41e1Wk7YXhmiR/Rl.JFltVi', 1, NULL, '2016-10-20 11:38:52', '2016-10-20 11:38:52');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods_categories`
--
ALTER TABLE `goods_categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `goods_categories`
--
ALTER TABLE `goods_categories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
