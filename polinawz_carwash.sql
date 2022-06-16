-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июн 16 2022 г., 23:54
-- Версия сервера: 5.7.21-20-beget-5.7.21-20-1-log
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `polinawz_carwash`
--

-- --------------------------------------------------------

--
-- Структура таблицы `applications`
--
-- Создание: Июн 13 2022 г., 20:22
-- Последнее обновление: Июн 13 2022 г., 20:22
--

DROP TABLE IF EXISTS `applications`;
CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `quest` varchar(255) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `applications`
--

INSERT INTO `applications` (`id`, `name`, `email`, `quest`, `message`) VALUES
(1, 'артем', '1234@mail.ru', 'Какая минимальная стоимость', 'вот и вопрос конечно!');

-- --------------------------------------------------------

--
-- Структура таблицы `equipments`
--
-- Создание: Июн 13 2022 г., 20:22
-- Последнее обновление: Июн 15 2022 г., 21:40
--

DROP TABLE IF EXISTS `equipments`;
CREATE TABLE `equipments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `equipments`
--

INSERT INTO `equipments` (`id`, `image`, `text`, `created_at`, `updated_at`) VALUES
(1, 'images/1.jpg', 'Эффективно вымыть транспортное средство, применяя профессиональные жидкости    и специализированное оборудование, подающее воду под высоким давлением.', NULL, '2022-06-15 18:39:40'),
(2, 'images/3.jpg', 'Эффективно убрать салон транспортного средства посредством мощного\n    профессионального пылесоса.', NULL, NULL),
(3, 'images/2.jpg', 'Получить зеркальный блеск поверхностей кузова, благодаря применению\r\nспециального воска, который исключает непосредственный контакт с любыми поверхностями.', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--
-- Создание: Июн 13 2022 г., 20:22
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `galleries`
--
-- Создание: Июн 13 2022 г., 20:22
-- Последнее обновление: Июн 15 2022 г., 20:57
--

DROP TABLE IF EXISTS `galleries`;
CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `galleries`
--

INSERT INTO `galleries` (`id`, `image_1`, `image_2`, `image_3`, `created_at`, `updated_at`) VALUES
(1, 'images/contacts/1.jpg', 'images/contacts/2.jpg', 'images/contacts/4.jpg', NULL, '2022-06-15 17:57:53'),
(2, 'images/contacts/5.jpg', 'images/contacts/6.jpg', 'images/contacts/8.jpg', NULL, NULL),
(3, 'images/contacts/7.jpg', 'images/contacts/9.jpg', 'images/contacts/10.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--
-- Создание: Июн 13 2022 г., 20:22
-- Последнее обновление: Июн 15 2022 г., 12:29
--

DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descript` varchar(1600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `characteristics` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `image`, `title`, `price`, `descript`, `description`, `characteristics`, `created_at`, `updated_at`) VALUES
(1, 'images/shop/СТЕКЛООМЫВАЮЩАЯ ЖИДКОСТЬ.jpg', 'СТЕКЛООМЫВАЮЩАЯ ЖИДКОСТЬ', '150 ₽', 'Незамерзающая жидкость \"Максим\" -30 С, ПЭТ, 5 лСтеклоомывающая жидкость MAXIM представляет собой композицию на основе деминерализованной воды или водного раствора технического спирта с добавлением функциональных присадок, отдушки (ароматизатора) и красителя. Входящие в состав жидкостей современные синтетические поверхностно активные вещества (ПАВ) эффективно очищают стекла от жиров, грязи и других органических соединений, а также обеспечивают экологическую безопасность продукта.', '1. СТЕКЛООМЫВАЮЩИЕ ЖИДКОСТЬ MAXIM нейтральны к лакокрасочному покрытию кузова, резиновым и пластмассовым деталям автомобилей.      2. СТЕКЛООМЫВАЮЩИЕ ЖИДКОСТЬ MAXIM не содержат в своем составе метиловый и этиловый спирты.ОБЛАСТЬ ПРИМЕНЕНИЯСТЕКЛООМЫВАЮЩИЕ ЖИДКОСТЬ MAXIM предназначены для очистки, предотвращения загрязнения и обледенения лобовых, боковых и задних стекол автотранспортных средств при умеренных и низких температурах.Зимние стеклоомывающие жидкости предназначены для использования в системе омывателя стекол в зимний период. Защищает стекло и контур стекла от замерзания при отрицательных температурах.', 'Страна производитель: РоссияОбъем: 5 лВариант: зимний -30', NULL, '2022-06-15 09:12:28'),
(2, 'images/shop/АПТЕЧКА АВТОМОБИЛЬНАЯ.jpg', 'Аптечка автомобильная', '610 ₽', 'Аптечка автомобильная ФЭСТ новый состав ГОСТ 2021 для прохождения ТЕХОСМОТРА и для оказания первой помощи пострадавшим в дорожно-транспортных происшествиях. Аптечка изготовлена в соответствии с приказом Минздравсоцразвития РФ от 08.10.2020 г. № 1080н. ', 'Содержание аптечки: 1.Маска медицинская нестерильная одноразовая-2шт;2.Перчатки медицинские нестерильные, размером не менее М-2пары;3.Устройство для проведения искусственного дыхания - 1шт;4.Жгут кровоостанавливающий для остановки артериального кровотечения-1шт;5.Бинт марлевый медицинский размером не менее 5мх10см-4шт;6.Бинт марлевый медицинский размером не менее 7мх14см-3шт;7.Салфетки марлевые медицинские стерильные размером не менее 16смх14см №10-2уп;8.Лейкопластырь фиксирующий рулонный размером не менее 2смх500см-1шт; 9.Ножницы-1шт;10.Инструкция по оказанию первой помощи-1шт;11.Футляр-1шт.\r\n', 'Бренд: Фэст;\r\nЦвет: Разноцветный;\r\nСтрана-изготовитель: Россия;', NULL, NULL),
(3, 'images/shop/СМАЗКА СИЛИКОНОВАЯ.jpg', 'СМАЗКА СИЛИКОНОВАЯ', '203 ₽', 'Смазка силиконовая ASTROhim— многофункциональная, высококонцентрированная силиконовая смазка без содержания минеральных масел. ', 'Смазка силиконовая ASTROhim— многофункциональная, высококонцентрированная силиконовая смазка без содержания минеральных масел. Силиконовая смазка ASTROhim идеально подходит для смазывания направляющих стеклоподъемников, замков, петлей дверей, капота, багажников, тросов, личинок замков. Предотвращает примерзание резиновых уплотнителей дверей, багажника и крышки капота при отрицательных температурах.', 'Страна производства: Россия;\r\nМинимальная рабочая температура (°C): -40;\r\nТип упаковки: Аэрозоль;\r\nТип продукта: Смазка;\r\nГарантия (лет): 3;\r\nВес, кг: 0.314;\r\nОбъем (л): 0.52;', NULL, NULL),
(5, 'images/shop/avtoaroma.jpg', 'Автоароматизаторы', '105 ₽', 'Автодиффузор Сashmere с древесным ароматом. Если Вам хочется создать в вашей машине или в доме атмосферу уюта и комфорта? То Вам идеально подойдет ароматизатор жидкий подвесной.', 'Верхние ноты мускус. Сердце аромата тёплые специи, белые цветы. База кашемировое дерево, амбра. Его стильный дизайн идеально подойдет как для дома, так и для салона автомобиля, а удобное крепление с регулировкой позволит вам повесить данны й ароматизатор там, где вам будет нужнее и удобнее. Необходимо лишь открутить крышку, снять защитный колпачок, закрутить крышку, наклонить флакон, чтобы крышка немного пропиталась, и наслаждаться ароматом. ', 'Вес товара с упаковкой (г):	100 г;\r\nВысота упаковки:	11 см;\r\nГлубина упаковки:	11 см;\r\nФорма выпуска:	подвесной ароматизатор;\r\nСтрана производства:	Россия;\r\nКомплектация:	ароматизатор в авто - 1 шт.', NULL, NULL),
(6, 'images/shop/ЩЁТКИ ДЛЯ ОБМЕТАНИЯ СНЕГА.jpg', 'Щётки для обметания снега', '693 ₽', 'Удобная щетка для очистки Вашего автомобиля от снега и наледи. ', 'Удобная щетка для очистки Вашего автомобиля от снега и наледи. Дополнительную надежность создает отсутствие сложных конструктивных элементов. Надежный и широкий скребок для льда поможет очистить стекла от наледи. Длина щетки 82 см.', 'Щетка со скребком для льда (82 см)', NULL, NULL),
(7, 'images/shop/ТРЯПКА ИЗ МИКРОФИБРЫ.jpg', 'Тряпка из микрофибры', '595 ₽', 'Универсальная салфетка из микрофибры для различных хозяйственных нужд в автомобиле', '\r\nУниверсальная салфетка из микрофибры для различных хозяйственных нужд в автомобиле, для ухода за различными поверхностями внутри и снаружи авто, подходит для сухой и влажной уборки, размер 35*35 см, производитель \"БИБИП\". Микрофибра имеет специальную поверхность, позволяющую эффективнее и быстрее удалять пыль и грязь. Салфетка может использоваться многократно, а при загрязнении самой салфетки ее можно легко постирать, вернув прежние вид и свойства.', 'Материал: микрофибра;\r\nРазмер: 35х35 см;\r\nКоличество в упаковке:1 шт;', NULL, NULL),
(8, 'images/shop/ПЕРЧАТКИ ХБ.jpg', 'Перчатки ХБ', '40 ₽', 'Перчатки ХБ с нанесением ПВХ ВОЛНА', 'Перчатки ХБ с нанесением ПВХ ВОЛНА, 5 нити 54-56 гр.', 'Перчатки ХБ с нанесением ПВХ ВОЛНА, 5 нити 54-56 гр.', NULL, NULL),
(25, 'images/shop/ВЛАЖНЫЕ САЛФЕТКИ.jpg', 'Влажные салфетки', '169 ₽', 'Влажные салфетки из мягкого нетканого материала предназначены для очистки кожаной отделки интерьера автомобиля.', 'Влажные салфетки Grass для ухода за кожей салона автомобиля помогут быстро очистить сидения и другие поверхности. Салфетки изготовлены из мягкой синтетической ткани. Благодаря специальной пропитке эффективно удаляют пыль и грязь с кожаной обивки, не оставляя следов и разводов. Упаковка из 30 салфеток не занимает много места в бардачке и позволяет провести мини-уборку салона вдали от дома.', 'Цветовая палитра: Белый; Основной материал: Синтетический; Страна производства: Россия; Место использования: Внутренний; Вес, кг: 0.143; Ширина (см):10; Инструкция по применению: Открыть защитный клапан, извлечь салфетку, плотно закрыть защитный клапан; Количество в наборе:30;', '2022-06-15 09:29:11', '2022-06-15 09:29:11');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--
-- Создание: Июн 13 2022 г., 20:22
-- Последнее обновление: Июн 13 2022 г., 20:22
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2022_03_14_195628_create_reviews_table', 2),
(8, '2022_03_17_094003_add_column_to_users', 2),
(9, '2022_03_18_073252_create_equipments_table', 3),
(10, '2022_03_18_110237_add_column_to_reviews_table', 4),
(12, '2022_03_20_064924_create_prices_table', 5),
(14, '2022_03_20_074608_create_goods_table', 6),
(15, '2022_03_20_135505_create_galleries_table', 7),
(18, '2022_03_20_155520_create_stages_table', 8),
(19, '2022_03_20_155805_create_washing_programs_table', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--
-- Создание: Июн 13 2022 г., 20:22
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--
-- Создание: Июн 13 2022 г., 20:22
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `prices`
--
-- Создание: Июн 13 2022 г., 20:22
-- Последнее обновление: Июн 15 2022 г., 21:50
--

DROP TABLE IF EXISTS `prices`;
CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `prices`
--

INSERT INTO `prices` (`id`, `name`, `time`, `service_price`, `created_at`, `updated_at`) VALUES
(1, 'Вода', '1 мин', '20.00 р', NULL, '2022-06-15 18:43:16'),
(2, 'Пена', '1 мин', '35.00 р', NULL, NULL),
(3, 'Воздух', '1 мин', '4.00 р', NULL, NULL),
(4, 'Воск', '1 мин', '20.00 р', NULL, NULL),
(5, 'Пылесос', '1 мин', '20.00 р', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--
-- Создание: Июн 13 2022 г., 20:22
-- Последнее обновление: Июн 15 2022 г., 21:55
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `vivod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `message`, `created_at`, `updated_at`, `vivod`) VALUES
(1, 'Полина', 'Были на вашей мойке, столько функций, да и не дорого, помыли все чисто и красиво', '2022-03-17 14:10:53', '2022-06-15 18:55:03', '0'),
(2, 'Светлана', 'С дочерью ездили на мойку, помыли машину за 5 минут, все супер!', '2022-03-17 14:11:31', '2022-06-15 18:55:43', '1'),
(3, 'Ролан', 'Мыл машину позавчера, еще купил омывайку, мне понравилось', '2022-03-17 14:12:35', '2022-03-17 14:12:35', '1'),
(4, 'Дмитрий', 'Мойка хорошая, цены не кусаются, быстро помыл машину, чистая!', '2022-03-17 14:13:27', '2022-03-17 14:13:27', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `stages`
--
-- Создание: Июн 13 2022 г., 20:22
-- Последнее обновление: Июн 13 2022 г., 20:22
--

DROP TABLE IF EXISTS `stages`;
CREATE TABLE `stages` (
  `id` int(10) UNSIGNED NOT NULL,
  `stage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `stages`
--

INSERT INTO `stages` (`id`, `stage`, `created_at`, `updated_at`) VALUES
(1, 'I ЭТАП (ОСНОВНОЙ) ПРОГРАММЫ 1-2-3-4', NULL, NULL),
(2, 'II ЭТАП (ДОПОЛНИТЕЛЬНЫЙ) ПРОГРАММА 5', NULL, NULL),
(3, 'III ЭТАП (ЗАКЛЮЧИТЕЛЬНЫЙ) ПРОГРАММЫ 6-7', NULL, NULL),
(4, 'ПРИСТУПАЙТЕ К МОЙКЕ АВТОМОБИЛЯ', NULL, NULL),
(5, '( ПОСЛЕДНИЙ ШАГ ) ПОСЛЕ МОЙКИ ВЫ МОЖЕТЕ ПРОЕХАТЬ В ЗОНУ ПРОТИРКИ', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--
-- Создание: Июн 13 2022 г., 20:22
-- Последнее обновление: Июн 14 2022 г., 17:47
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(5, 'lolo', 'lolo@mail.ru', NULL, '$2y$10$H1pn84m3KK3Mp3Cx/G6zauHxhWbBYpGoXZWRjKTPmKs0BIfoJrdf.', NULL, '2022-03-17 14:53:04', '2022-03-17 14:53:04', '0'),
(8, 'User23', '123_polina@mail.ru', NULL, '$2y$10$6G2/LTMyGpO/9Ekc5OvCheOxpKGLU2XHd.sK6ao8g4jvqDK.NbkoS', NULL, '2022-04-07 11:43:52', '2022-04-07 11:43:52', '0'),
(11, 'Полина', 'polina-polina-1991@list.tu', NULL, '$2y$10$RQQdWzJrQPH3jXxszqqpte81xGlrATSAkdNNXCYVQJNXegKjpykeS', NULL, '2022-06-14 14:47:05', '2022-06-14 14:47:05', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `washing_programs`
--
-- Создание: Июн 13 2022 г., 20:22
-- Последнее обновление: Июн 13 2022 г., 20:22
--

DROP TABLE IF EXISTS `washing_programs`;
CREATE TABLE `washing_programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stage_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `washing_programs`
--

INSERT INTO `washing_programs` (`id`, `image`, `title`, `text`, `stage_id`, `created_at`, `updated_at`) VALUES
(1, 'images/wash/brake-disc.png', 'МОЙКА ДИСКОВ', 'Низкое давление, особый моющий состав Средство для эффективного удаления налета, грязи и нагара с шин, дисков и тормозных колодок.', 1, NULL, NULL),
(2, '/images/wash/flask.png', 'АКТИВНАЯ ХИМИЯ', 'Низкое давление, умягченная вода, концентрированный состав Высокоэффективная эмульсия для размягчения загрязнений на кузове автомобиля. Избегайте длительного воздействия, следует смыть состав сразу после нанесения, избегайте длительного воздействия на лакокрасочное покрытие.', 1, NULL, NULL),
(3, '/images/wash/shampoo.png', 'ВОДА + ШАМПУНЬ', 'Высокое давление, умягченная вода с моющим средством Эффективно смывает моющую химию и основные загрязнения, размягченные в предыдущей программе.', 1, NULL, NULL),
(4, '/images/wash/spray-gun.png', 'ОПОЛАСКИВАНИЕ', 'Высокое давление, умягченная чистая холодная вода Смывает остатки моющих средств для подготовки автомобиля к заключительному этапу мойки.', 1, NULL, NULL),
(5, '/images/wash/brush.png', 'ЩЕТКА + ПЕНА', 'Щетка с натуральным ворсом, концентрированная пена Контактный способ мойки для деликатного удаления глубоко въевшейся грязи.\r\nЗАПРЕЩЕНО использование щетки без включения функции\r\nНе используйте щетку для удаления основных загрязнений на первом этапе мойки', 2, NULL, NULL),
(6, '/images/wash/soap-bubbles.png', 'T-POWER', 'Уникальная формула пены Эффективно удаляет даже стойкие загрязнения.\r\nОстрожно: не допускайте высыхания на обрабатываемой поверхности!', 2, NULL, NULL),
(7, '/images/wash/wax.png', 'ВОСК + ЗАЩИТА', 'Полимерное силиконовое вещество с водоотталкивающими свойствами\r\nСоздает защитную пленку на лакокрасочном покрытии, обладает высокой водо- и грязеотталкивающей способностью, придает блеск.', 3, NULL, NULL),
(8, '/images/wash/water.png', 'ОПОЛАСКИВАНИЕ БЕЗ РАЗВОДОВ', 'Низкое давление, очищенная вода без солей и минералов\r\nЗавершите мойку ополаскиванием очищенной от примесей водой, которая не оставляет разводов при высыхании.', 3, NULL, NULL),
(9, '/images/wash/number.png', 'ШАГ 1', 'Расположите автомобиль по центру моечного бокса. Не забудьте про коврики, закрепите их с помощью прищепок.', 4, NULL, NULL),
(10, '/images/wash/number-2.png', 'ШАГ 2', 'Возьмите в руки пистолет, во время нанесения средств удерживайте его строго перпендикулярно поверхности — слишком острый угол подачи воды/химии может быть причиной повреждений деталей автомобиля. Свободной рукой придерживайте шланг, чтобы не испачкать одежду.', 4, NULL, NULL),
(11, '/images/wash/number-3.png', 'ШАГ 3', 'Включите выбранную программу мойки и зажмите курок, наносите средства горизонтальными движениями снизу вверх, от арок и колес к крыше — так вам будет проще контролировать зоны нанесения химии, удобнее распределить химию равномерно, не пропустив ни одного участка.', 4, NULL, NULL),
(12, '/images/wash/number-4.png', 'ШАГ 4', 'Наносите и смывайте средства в одном направлении, обходя автомобиль по кругу —например, если вы начали наносить один вид химии с заднего левого колеса, то, обойдя его по кругу, вы также начнете наносить следующий вид химии или смывать. Так вы сэкономите время, и вам будет удобнее переключать программы.', 4, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `stages`
--
ALTER TABLE `stages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `washing_programs`
--
ALTER TABLE `washing_programs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `equipments`
--
ALTER TABLE `equipments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `stages`
--
ALTER TABLE `stages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `washing_programs`
--
ALTER TABLE `washing_programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
