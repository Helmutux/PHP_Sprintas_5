-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2020 m. Geg 25 d. 18:52
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `landpage`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2020_05_19_201753_create_table_pages', 1),
(16, '2020_05_19_201812_create_table_services', 1),
(17, '2020_05_19_201833_create_table_peoples', 1),
(18, '2020_05_19_201847_create_table_portfolios', 1);

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `pages`
--

INSERT INTO `pages` (`id`, `name`, `alias`, `text`, `images`, `created_at`, `updated_at`) VALUES
(1, 'Pradžia', 'home', '<h2>Svarbiausia - <strong>Dėmesys detalėms</strong></h2>\r\n<p>Kuomet kuriame interneto tinklapius ar naudojame web aplikacijas kitiems projektams, nesvarbių dalykų nėra. Mūsų kuriamas turinys kokybiškai perteiks Jūsų verslo viziją ir siūlomų paslaugų ar produktų privalumus. Patikėkite savo įmonės svetainės sukūrimą mums, o patys daykite tai, ką mokate geriausiai</p>', 'main_device_image.png', '2020-05-20 07:30:00', NULL),
(2, 'Apie mus', 'aboutUs', '<h3>Visa D|SPACE komanda &scaron;iandien tėra vienas žmogus. Sakoma, vienas lauke ne karys. Nepaneigsi. Tačiau. Mūsų atveju tas karys nėra &scaron;iaip karys.</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Jis - atsargos karininkas, turintis didelę verslo ir projektų valdymo patirtį. Ir priklausomai nuo užduoties sudėtingumo bei apimties, visuomet gali pasitelkti pagalbon pastiprinimą - kitus kolegas programuotojus.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Didžiuma įmonių svetainių, veikiančių it vizitinė kortelė - su paslaugų/prekių pateikimu, kontaktais, užklausos formomis - yra pilnai įveikiami projektai vienam profesionaliam programuotojui. Jei norite turėti elektroninę parduotuvę, tarkim su keletu &scaron;imtų prekių, tai taipogi užduotis mūsų jėgoms.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Jei patikėsite mums didelės korporatyvinės įmonės tinklapį, įveiksime ir ją.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Patikėkite, mums svarbiausia - dėmesys detalėms. Tad viskas bus atlikta precizi&scaron;kai ir ilgai tarnaus.</p>', 'main_device_image12.png', '2020-05-20 07:35:00', '2020-05-24 09:28:06');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('donatas.space@gmail.com', '$2y$10$5ta40KZoR4yX/MGFRCs2LezV3YBtwfT50ImIZL0d53PaXaoMY6Gt6', '2020-05-25 13:20:28');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `peoples`
--

CREATE TABLE `peoples` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `peoples`
--

INSERT INTO `peoples` (`id`, `name`, `position`, `images`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Donatas Kulvinskas', 'Vykdantysis direktorius', 'team_pic1.jpg', 'Didelę patirtį turintis verslo valdymo ir organizacijų vystymo specialistas. Išskirtinės kompetencijos greito apyvartumo prekių distribucijoje, logistinių procesų organizavime.\r\n', '2020-05-20 07:40:00', NULL),
(2, 'Donatas Kulvinskas', 'Komercijos direktorius', 'team_pic2.jpg', 'Prisipažįsta, kad pardavimai nėra jo stiprioji savybė. Bet kliento poreikių tenkinimas yra tai, ką jis išties mėgsta. O tai visuomet padeda versle. Tiek klientui, tiek mums.', '2020-05-20 07:41:00', NULL),
(3, 'Donatas Kulvinskas', 'IT departamento direktorius', 'team_pic3.jpg', 'Gal jis ir nėra didelę patirtį sukaupęs programuotojas, bet su IT sfera kaip vartotojas ir užduočių formuotojas, susijęs jau ketvirtį amžiaus. Apie nesuprantamus dalykus geba kalbėti žmonių kalba.\r\n', '2020-05-20 07:42:00', NULL);

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filter` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `portfolios`
--

INSERT INTO `portfolios` (`id`, `name`, `images`, `filter`, `created_at`, `updated_at`) VALUES
(1, 'Asmeninė svetainė (CV)', 'personal.PNG', 'personal', '2020-05-20 10:45:00', '2020-05-25 15:25:03'),
(2, 'Įmonės svetainė', 'corporate.PNG', 'corporate', '2020-05-20 10:46:00', '2020-05-25 15:25:51'),
(3, 'Elektroninė parduotuvė', 'e-shop.png', 'eshop', '2020-05-20 10:47:00', '2020-05-25 15:26:32'),
(4, 'Privačios Klinikos svetainė', 'health.PNG', 'HEALTH', '2020-05-20 10:48:00', '2020-05-25 15:30:02'),
(5, 'Nekilnojamo turto kompanijos svetainė', 'realestate.PNG', 'realestate', '2020-05-20 10:49:00', '2020-05-25 15:32:00'),
(6, 'Įmonės svetainė', 'industry.PNG', 'INDUSTRY', '2020-05-20 10:50:00', '2020-05-25 15:34:03'),
(7, 'Nekilnojamo turto kompanijos svetainė', 'realestate2.PNG', 'realestate', '2020-05-20 10:51:00', '2020-05-25 15:34:55'),
(8, 'Įmonės svetainė', 'corporate2.PNG', 'corporate', '2020-05-20 11:30:00', '2020-05-25 15:36:20');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `services`
--

INSERT INTO `services` (`id`, `name`, `text`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Puslapių kūrimas', 'Internetinių svetainių, aplikacijų kūrimas pagal kliento pateiktą, mūsų sukurtą arba iš trečiosios šalies gautą dizainą (template). Nuo pirminės minties iki galutinio talpinimo serveryje su domeno parinkimu ir svetainės paleidimu.', 'fab fa-html5', '2020-05-20 11:05:00', '2020-05-25 14:00:06'),
(2, 'Elektroninių parduotuvių kūrimas', 'Svetainės-el.parduotuvės sukūrimas atsižvelgiant į kliento veiklos modelį. Pilnas darbų paketas nuo sumanymo iki paleidimo parenkant adresą ir programinio kodo talpinimą (hostingą).', 'fab fa-shopify', '2020-05-20 11:07:00', '2020-05-25 14:00:52'),
(3, 'Konsultavimas IT klausimais', 'Pilnas konsultavimas web sprendimų, IT infrastuktūros konstravimo, e-komercijos klausimais', 'fas fa-chart-line', '2020-05-20 11:08:00', '2020-05-25 14:06:06'),
(4, 'IT sistemų administravimas', 'Nuotolinė ar tiesioginė jūsų interneto architektūros priežiūra. Svetainės duomenų atnaujinimas. Hostingo ir domeno administravimas.', 'fas fa-users-cog', '2020-05-20 11:11:00', '2020-05-25 13:59:29'),
(5, 'Mokymai programuotojams', 'Individualios ir kolektyvinės mokymo paslaugos visiems norintiems išmokti programuoti ir kurti interneto aplikacijas. HTML, CSS, JavaScript, PHP, Java, SQL ir kiti metodai bei programavimo kalbos', 'fas fa-user-graduate', '2020-05-20 11:12:00', '2020-05-25 14:04:21'),
(6, 'Savanoriavimas', 'Visų išvardintų paslaugų teikimas savanorystės principais visuomenei svarbių ir neatidėliotinų situacijų laitotarpiu', 'fas fa-hands-helping', '2020-05-20 11:15:00', '2020-05-25 14:27:20');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Mindaugas', 'mb@pastas.com', '$2y$10$9VhtwMoDjsb62d6XDPV6keAGnlMTdJ.fvFJsiX4uAMT..0yfaYiMW', '6BXI7BdSXBfBwGM378BZoIdmHFlnoExfbCvhQ1CYjspj5y83TD3k6BUIQww3', '2020-05-25 09:48:01', '2020-05-25 09:48:01'),
(6, 'Donatas', 'donatas.space@gmail.com', '$2y$10$gqe2D7tPvRg1uA.ZoIpTOuFU5Xb08ZjcOiUUNs4/15VNTT/Pma9uC', 'GBAqEqoRwLtAWaoDC7eyOARXZpvPqDbNLhRNDmvKpIAQsyOkk2SsCa8259gW', '2020-05-25 13:19:52', '2020-05-25 13:19:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `peoples`
--
ALTER TABLE `peoples`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `peoples`
--
ALTER TABLE `peoples`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
