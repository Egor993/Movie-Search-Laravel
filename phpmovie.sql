-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 24 2021 г., 16:05
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `phpmovie`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `movie_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `favorite_movies`
--

CREATE TABLE `favorite_movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenre` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acters` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producer` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `favorite_movies`
--

INSERT INTO `favorite_movies` (`id`, `created_at`, `updated_at`, `name`, `slug`, `image`, `user`, `date`, `time`, `country`, `jenre`, `acters`, `producer`, `description`) VALUES
(28, '2021-01-21 12:22:51', '2021-01-21 12:22:51', 'Карты, деньги, два ствола', 'karty-denьgi-dva-stvola', 'S1.jpg', 'egor8765', '1998', '107', 'Великобритания', 'Комедия', 'test', 'Гай Ричи', 'Четверо молодых парней накопили каждый по 25 тысяч фунтов, чтобы один из них мог сыграть в карты с опытным шулером и матерым преступником, известным по кличке Гарри-Топор. Парень в итоге проиграл 500 тысяч, на уплату долга ему дали неделю.');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2020_12_16_110454_create_movies_table', 1),
(8, '2020_12_17_125810_create_comments_table', 1),
(9, '2020_12_22_111351_create_favorite_movies_table', 1),
(10, '2020_12_22_130357_add_avatar_field_to_users_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acters` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `movies`
--

INSERT INTO `movies` (`id`, `created_at`, `updated_at`, `name`, `slug`, `code`, `date`, `time`, `country`, `jenre`, `acters`, `producer`, `description`, `image`) VALUES
(1, NULL, NULL, 'Карты, деньги, два ствола', 'karty-denьgi-dva-stvola', 'komedii', 1998, 107, 'Великобритания', 'Комедия', 'Джейсон Флеминг, Декстер Флетчер, Ник Моран и др.', 'Гай Ричи', 'Четверо молодых парней накопили каждый по 25 тысяч фунтов, чтобы один из них мог сыграть в карты с опытным шулером и матерым преступником, известным по кличке Гарри-Топор. Парень в итоге проиграл 500 тысяч, на уплату долга ему дали неделю.', 'S1.jpg'),
(2, NULL, NULL, 'Алладин', 'alladin', 'fjentezi', 2019, 128, 'Великобритания', 'Фэнтези', 'Мена Массуд. Наоми Скотт. Уилл Смит. Билли Магнуссен. Алан Тудик.', 'Гай Ричи', 'Молодой воришка по имени Аладдин хочет стать принцем, чтобы жениться на принцессе Жасмин. Тем временем визирь Аграбы Джафар намеревается захватить власть над Аграбой, а для этого он стремится заполучить волшебную лампу, хранящуюся в пещере чудес, доступ к которой разрешен лишь тому, кого называют «алмаз неограненный», и этим человеком является не кто иной, как сам Аладдин.', 'aladin.jpg'),
(3, NULL, NULL, 'Джуманджи', 'djumangi', 'komedii', 1995, 104, 'Великобритания', 'Комедия', ' Дуэйн Джонсон, Кевин Харт, Джек Блэк и др.', 'Джо Джонстон', 'Случайно обнаружив настольную игру со странным названием «Джуманджи», Алан Пэрриш на глазах изумленной подружки перенёсся в джунгли. Он находился в этом мире до тех пор, пока двое ни о чем не подозревающих подростков не нашли игру и не сняли волшебные чары, освободив Алана из многолетнего плена. Теперь им предстоит решить нелегкую задачу - пройти немыслимые препятствия и одержать победу над силами магии.', 'djumanji.jpg'),
(4, NULL, NULL, 'Поймай меня, если сможешь', 'poymay-menya-esli-smozhesh', 'kriminal', 2002, 141, 'США', 'Криминал', 'Леонардо ДиКаприо, Том Хэнкс, Кристофер Уокен и др.', 'Стивен Спилберг', 'Фрэнк Эбегнейл успел поработать врачом, адвокатом и пилотом на пассажирской авиалинии – и все это до достижения полного совершеннолетия в 21 год. Мастер в обмане и жульничестве, он также обладал искусством подделки документов, что в конечном счете принесло ему миллионы долларов, которые он получил по фальшивым чекам.\r\n\r\nАгент ФБР Карл Хэнрэтти отдал бы все, чтобы схватить Фрэнка и привлечь к ответственности за свои деяния, но Фрэнк всегда опережает его на шаг, заставляя продолжать погоню.', 'catch.jfif'),
(5, NULL, NULL, 'Побег из шоушенка', 'pobeg-iz-shoushenka', 'dramy', 1994, 142, 'США', 'Драма', 'Тим Роббинс, Морган Фриман, Боб Гантон и др.', 'Фрэнк Дарабонт', 'Бухгалтер Энди Дюфрейн обвинён в убийстве собственной жены и её любовника. Оказавшись в тюрьме под названием Шоушенк, он сталкивается с жестокостью и беззаконием, царящими по обе стороны решётки. Каждый, кто попадает в эти стены, становится их рабом до конца жизни. Но Энди, обладающий живым умом и доброй душой, находит подход как к заключённым, так и к охранникам, добиваясь их особого к себе расположения.', 'pobeg.jfif'),
(6, NULL, NULL, '1+1', '11', 'komedii', 2012, 112, 'Великобритания', 'Комедия', 'Франсуа Клюзе, Омар Си, Анн Ле Ни и др.', 'Оливье Накаш, Эрик Толедано', 'Пострадав в результате несчастного случая, богатый аристократ Филипп нанимает в помощники человека, который менее всего подходит для этой работы, – молодого жителя предместья Дрисса, только что освободившегося из тюрьмы. Несмотря на то, что Филипп прикован к инвалидному креслу, Дриссу удается привнести в размеренную жизнь аристократа дух приключений.', '1+1.jfif'),
(7, NULL, NULL, 'Остров проклятых', 'Остров проклятых', 'trillery', 2009, 107, 'Великобритания', 'Триллер', 'Леонардо ДиКаприо, Марк Руффало, Бен Кингсли и др.', 'Мартин Скорсезе', 'Два американских судебных пристава отправляются на один из островов в штате Массачусетс, чтобы расследовать исчезновение пациентки клиники для умалишенных преступников. При проведении расследования им придется столкнуться с паутиной лжи, обрушившимся ураганом и смертельным бунтом обитателей клиники.', 'shutter_island.jfif'),
(8, NULL, NULL, 'Бойцовский клуб\r\n', 'boytsovskiy-klub', 'trillery', 1999, 107, 'Великобритания', 'Комедия', '', 'Дэвид Финчер', 'Сотрудник страховой компании страдает хронической бессонницей и отчаянно пытается вырваться из мучительно скучной жизни. Однажды в очередной командировке он встречает некоего Тайлера Дёрдена — харизматического торговца мылом с извращенной философией. Тайлер уверен, что самосовершенствование — удел слабых, а единственное, ради чего стоит жить — саморазрушение.', 'fight-club.jfif'),
(9, NULL, NULL, 'Пираты Карибского моря: Проклятие Черной жемчужины', 'piraty-karibskogo-morya', 'komedii', 2003, 107, '', 'Комедия', '', '', '', 'pirates.jfif'),
(14, NULL, NULL, 'Семь', 'sem', 'komedii', 2003, 107, '', 'Комедия', '', '', '', 'seven.jfif'),
(15, NULL, NULL, 'Умница Уилл Хантинг', 'umnitsa-uill-khanting', 'komedii', 2003, 107, '', 'Комедия', '', '', '', 'umnica.jfif'),
(16, NULL, NULL, 'По соображениям совести', 'po-soobrazheniyam-sovesti', 'komedii', 2003, 107, '', 'Комедия', '', '', '', 'sovest.jfif'),
(17, NULL, NULL, 'Шестое чувство', 'shestoe-chuvstvo', 'komedii', 2003, 107, '', 'Комедия', '', '', '', 'sense.jfif');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `image`) VALUES
(1, 'egor8765', 'egor8765@mail.ru', NULL, '$2y$10$OJnhO548XazETU2Flj4hgepTq0oqcnqN0eEV10naxZRlNOl24dV82', NULL, '2020-12-23 08:06:34', '2021-01-20 12:27:07', '1611156427.jpg'),
(2, 'Feda993', 'feda9938765@yandex.ru', NULL, '$2y$10$mQByDXVZoNZwPdOe0qXCbeU0CJ1wUaOmd5VnNsVz932SGpv/ZempG', NULL, '2021-01-18 10:37:06', '2021-01-18 10:40:01', '1610977200.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `favorite_movies`
--
ALTER TABLE `favorite_movies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `favorite_movies`
--
ALTER TABLE `favorite_movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
