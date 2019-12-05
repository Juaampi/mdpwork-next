-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Nov 22, 2019 at 07:47 PM
-- Server version: 5.7.24
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mdpwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Asesoramiento Contable y Legal', NULL, NULL),
(2, 'Belleza y Cuidado Personal', NULL, NULL),
(3, 'Comunicación y Diseño', NULL, NULL),
(4, 'Fiestas y Eventos', NULL, NULL),
(5, 'Fotografía, Música y Cine', NULL, NULL),
(6, 'Hogar y Construcción', NULL, NULL),
(7, 'Documentos e Impresiones', NULL, NULL),
(8, 'Mantenimiento de Vehículos', NULL, NULL),
(9, 'Medicina y Salud', NULL, NULL),
(10, 'Ropa y Moda', NULL, NULL),
(11, 'Servicios para Mascotas', NULL, NULL),
(12, 'Servicios para Oficina', NULL, NULL),
(13, 'Tecnología', NULL, NULL),
(14, 'Transporte', NULL, NULL),
(15, 'Viajes y Turismo', NULL, NULL),
(16, 'Otros Servicios', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coments`
--

CREATE TABLE `coments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `guest_id` int(11) NOT NULL,
  `coment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `point` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coments`
--

INSERT INTO `coments` (`id`, `user_id`, `guest_id`, `coment`, `point`, `created_at`, `updated_at`) VALUES
(1, 11, 12, 'ESte es el primer comentario', 1, '2019-11-13 17:47:51', '2019-11-13 17:47:51'),
(2, 11, 13, 'Este es un puntaje', 3, '2019-11-13 18:04:57', '2019-11-13 18:04:57'),
(3, 10, 13, 'kjhkj hjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 2, '2019-11-13 18:36:47', '2019-11-13 18:36:47'),
(4, 1, 13, 'Me gusto mucho !', 5, '2019-11-13 19:05:05', '2019-11-13 19:05:05'),
(5, 15, 16, 'Horrible lo peor del mercado', 1, '2019-11-20 21:13:28', '2019-11-20 21:13:28'),
(6, 11, 16, 'La verdad que fue muy profesional, me gusto la manera que tuvo para resolver todas las cuestiones demograficas del a argentina,', 5, '2019-11-20 21:14:38', '2019-11-20 21:14:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_10_31_164917_create_categories_table', 2),
(11, '2019_10_31_164957_create_subcategories_table', 2),
(12, '2019_11_13_132152_create_coments_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('juanp.garcia1993@gmail.com', '$2y$10$aJTd9ROLWCL4bJCqcqlab.Gpad5hSzv2WoP2VnMdHD.uhhES79HHa', '2019-11-21 19:21:49');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Abogado de Derecho Civil', 1, NULL, NULL),
(2, 'Abogado de Derecho Laboral', 1, NULL, NULL),
(3, 'Abogado de Accidente de tránsito', 1, NULL, NULL),
(4, 'Abogado de Derecho Familiar', 1, NULL, NULL),
(5, 'Abogado de Derecho Penal', 1, NULL, NULL),
(6, 'Contador Público', 1, NULL, NULL),
(7, 'Gestor del Automotor', 1, NULL, NULL),
(8, 'Gestor Judicial', 1, NULL, NULL),
(9, 'Gestor Inmobiliario', 1, NULL, NULL),
(10, 'Martillero de Contrato de Alquiler', 1, NULL, NULL),
(11, 'Martillero de Vivienda / Comercial', 1, NULL, NULL),
(12, 'Martillero Boleto de Compra/Venta', 1, NULL, NULL),
(13, 'Tasador de Inmobiliaria', 1, NULL, NULL),
(14, 'Tasador Judicial', 1, NULL, NULL),
(15, 'Tasador de Joyas y Arte', 1, NULL, NULL),
(16, 'Productor de Seguros de Automotor', 1, NULL, NULL),
(17, 'Productor de Seguros de Vivienda', 1, NULL, NULL),
(18, 'Productor de Seguros Comerciales', 1, NULL, NULL),
(19, 'Productor de Seguros de Campos', 1, NULL, NULL),
(20, 'Productor de Seguros de Caución', 1, NULL, NULL),
(21, 'Productor de Seguros de Vida', 1, NULL, NULL),
(22, 'Maquillaje y Peinados', 2, NULL, NULL),
(23, 'Masajista', 2, NULL, NULL),
(24, 'Tratamiento de la piel', 2, NULL, NULL),
(25, 'Cosmetologa', 2, NULL, NULL),
(26, 'Peluquería general', 2, NULL, NULL),
(27, 'Peloquería a domicilio', 2, NULL, NULL),
(28, 'Tatuajes y Piercings', 2, NULL, NULL),
(29, 'Estética general', 2, NULL, NULL),
(30, 'Imprenta de Talonarios de AFIP', 7, NULL, NULL),
(31, 'Imprenta de Tarjetas Personales', 7, NULL, NULL),
(32, 'Imprenta de Tarjetas de 15 años', 7, NULL, NULL),
(33, 'Imprenta de Tarjetas de Casamientos', 7, NULL, NULL),
(34, 'Imprenta de Divorcios', 7, NULL, NULL),
(35, 'Imprenta de Modulos Universitarios', 7, NULL, NULL),
(36, 'Diseñador Gráfico', 3, NULL, NULL),
(37, 'Marketing y Publicidad', 3, NULL, NULL),
(38, 'Traductor/a Pública/o', 3, NULL, NULL),
(39, 'Locutor/a', 3, NULL, NULL),
(40, 'Servicio Audiovisual', 4, NULL, NULL),
(41, 'Animación infantil', 4, NULL, NULL),
(42, 'Alquiler de Juegos', 4, NULL, NULL),
(43, 'Bebidas para eventos', 4, NULL, NULL),
(44, 'Servicio de Catering', 4, NULL, NULL),
(45, 'Alquiler de Equipos', 4, NULL, NULL),
(46, 'Fotografía de Moda', 5, NULL, NULL),
(47, 'Fotografía documental', 5, NULL, NULL),
(48, 'Fotografía periodística', 5, NULL, NULL),
(49, 'Fotografía general', 4, NULL, NULL),
(50, 'Músico profesional', 5, NULL, NULL),
(51, 'Banda de Rock', 5, NULL, NULL),
(52, 'Banda personalizada', 4, NULL, NULL),
(53, 'Actor general', 4, NULL, NULL),
(54, 'Actriz general', 4, NULL, NULL),
(55, 'Videos de 15', 4, NULL, NULL),
(56, 'Peón de Albañil', 6, NULL, NULL),
(57, 'Albañil', 6, NULL, NULL),
(58, 'Calefacción losa radiante', 6, NULL, NULL),
(59, 'Instalación de Aire Acondicionado', 6, NULL, NULL),
(60, 'Mantenimiento de Aire Acondicionado', 6, NULL, NULL),
(61, 'Carpintero de Madera', 6, NULL, NULL),
(62, 'Carpintero de Aluminio', 6, NULL, NULL),
(63, 'Decoración y Ambientación', 6, NULL, NULL),
(64, 'Cerrajero Judicial', 6, NULL, NULL),
(65, 'Cerrajero Digital', 6, NULL, NULL),
(66, 'Cerrajero para empresas', 6, NULL, NULL),
(67, 'Cerrajero de viviendas', 6, NULL, NULL),
(68, 'Electricista de Vivienda', 6, NULL, NULL),
(69, 'Electricistas de Oficina', 6, NULL, NULL),
(70, 'Electricista de Comercio', 6, NULL, NULL),
(71, 'Electricista industrial', 6, NULL, NULL),
(72, 'Fumigación de vivienda', 6, NULL, NULL),
(73, 'Fumigación de consorcios', 6, NULL, NULL),
(74, 'Fumigación de oficina', 6, NULL, NULL),
(75, 'Herrero', 6, NULL, NULL),
(76, 'Jardinero', 6, NULL, NULL),
(77, 'Servicio doméstico', 6, NULL, NULL),
(78, 'Pintor de Vivienda', 6, NULL, NULL),
(79, 'Pintor de Comercio', 6, NULL, NULL),
(80, 'Pintor de Oficina', 6, NULL, NULL),
(81, 'Pintor de Industria', 6, NULL, NULL),
(82, 'Colocación de Cerámica y Porcelanato', 6, NULL, NULL),
(83, 'Plomero', 6, NULL, NULL),
(84, 'Gasista', 6, NULL, NULL),
(85, 'Revestimiento en Durlock', 6, NULL, NULL),
(86, 'Revestimiento en Madera', 6, NULL, NULL),
(87, 'Domótica para hogar', 6, NULL, NULL),
(88, 'Domótica para oficina', 6, NULL, NULL),
(89, 'Revestimiento de interiores', 6, NULL, NULL),
(90, 'Techista', 6, NULL, NULL),
(91, 'Vidriero ', 6, NULL, NULL),
(92, 'Alarmas y cámaras de seguridad', 6, NULL, NULL),
(93, 'Psicólogo/a', 9, NULL, NULL),
(94, 'Psicopedagoga', 9, NULL, NULL),
(95, 'Odontologo/a', 9, NULL, NULL),
(96, 'Enfermero/a', 9, NULL, NULL),
(97, 'Acompañante terapéutico', 9, NULL, NULL),
(98, 'Podólogo', 9, NULL, NULL),
(99, 'Cirugía Plástica', 9, NULL, NULL),
(100, 'Dermatólogo', 9, NULL, NULL),
(101, 'Traumatólogo', 9, NULL, NULL),
(102, 'Diseño para hospitales', 10, NULL, NULL),
(103, 'Diseño para gastronomía', 10, NULL, NULL),
(104, 'Diseño para Industrias', 10, NULL, NULL),
(105, 'Diseño de Moda', 10, NULL, NULL),
(106, 'Corte y confección', 10, NULL, NULL),
(107, 'Adiestramiento canino', 11, NULL, NULL),
(108, 'Veterinario', 11, NULL, NULL),
(109, 'Hospedaje para mascotas', 11, NULL, NULL),
(110, 'Internación para mascotas', 11, NULL, NULL),
(111, 'Paseador de perros', 11, NULL, NULL),
(112, 'Peluquería canina', 11, NULL, NULL),
(113, 'Limpieza Profesional', 12, NULL, NULL),
(114, 'Decoración general', 12, NULL, NULL),
(115, 'Aire Acondicionado', 12, NULL, NULL),
(116, 'Servicio de software', 12, NULL, NULL),
(117, 'Desarrollador de software', 13, NULL, NULL),
(118, 'Audio y video', 13, NULL, NULL),
(119, 'Diseñador web', 13, NULL, NULL),
(120, 'Reparador de Pc', 13, NULL, NULL),
(121, 'Alarmas y Cámaras de seguridad', 13, NULL, NULL),
(122, 'Chofer profesional', 14, NULL, NULL),
(123, 'Fletero', 14, NULL, NULL),
(124, 'Mini-Fletes', 14, NULL, NULL),
(125, 'Mudanzas', 14, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
  `phone` text COLLATE utf8mb4_unicode_ci,
  `website` text COLLATE utf8mb4_unicode_ci,
  `experience` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `facebook` text COLLATE utf8mb4_unicode_ci,
  `instagram` text COLLATE utf8mb4_unicode_ci,
  `twitter` text COLLATE utf8mb4_unicode_ci,
  `linkedin` text COLLATE utf8mb4_unicode_ci,
  `level` text COLLATE utf8mb4_unicode_ci,
  `city` text COLLATE utf8mb4_unicode_ci,
  `zone` text COLLATE utf8mb4_unicode_ci,
  `job` text COLLATE utf8mb4_unicode_ci,
  `isEfective` tinyint(1) DEFAULT NULL,
  `isVisa` tinyint(1) DEFAULT NULL,
  `isMercadoPago` tinyint(1) DEFAULT NULL,
  `isMasterCard` tinyint(1) DEFAULT NULL,
  `whatsapp` text COLLATE utf8mb4_unicode_ci,
  `age` int(11) DEFAULT NULL,
  `category` bigint(20) DEFAULT NULL,
  `img` text COLLATE utf8mb4_unicode_ci,
  `rol` text COLLATE utf8mb4_unicode_ci,
  `inhourlunes` time DEFAULT NULL,
  `outhourlunes` time DEFAULT NULL,
  `inhourafterlunes` time DEFAULT NULL,
  `outhourafterlunes` time DEFAULT NULL,
  `inhourmartes` time DEFAULT NULL,
  `outhourmartes` time DEFAULT NULL,
  `inhouraftermartes` time DEFAULT NULL,
  `outhouraftermartes` time DEFAULT NULL,
  `inhourmiercoles` time DEFAULT NULL,
  `outhourmiercoles` time DEFAULT NULL,
  `inhouraftermiercoles` time DEFAULT NULL,
  `outhouraftermiercoles` time DEFAULT NULL,
  `inhourjueves` time DEFAULT NULL,
  `outhourjueves` time DEFAULT NULL,
  `inhourafterjueves` time DEFAULT NULL,
  `outhourafterjueves` time DEFAULT NULL,
  `inhourviernes` time DEFAULT NULL,
  `outhourviernes` time DEFAULT NULL,
  `inhourafterviernes` time DEFAULT NULL,
  `outhourafterviernes` time DEFAULT NULL,
  `inhoursabado` time DEFAULT NULL,
  `outhoursabado` time DEFAULT NULL,
  `inhouraftersabado` time DEFAULT NULL,
  `outhouraftersabado` time DEFAULT NULL,
  `inhourdomingo` time DEFAULT NULL,
  `outhourdomingo` time DEFAULT NULL,
  `inhourafterdomingo` time DEFAULT NULL,
  `outhourafterdomingo` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`, `website`, `experience`, `description`, `facebook`, `instagram`, `twitter`, `linkedin`, `level`, `city`, `zone`, `job`, `isEfective`, `isVisa`, `isMercadoPago`, `isMasterCard`, `whatsapp`, `age`, `category`, `img`, `rol`, `inhourlunes`, `outhourlunes`, `inhourafterlunes`, `outhourafterlunes`, `inhourmartes`, `outhourmartes`, `inhouraftermartes`, `outhouraftermartes`, `inhourmiercoles`, `outhourmiercoles`, `inhouraftermiercoles`, `outhouraftermiercoles`, `inhourjueves`, `outhourjueves`, `inhourafterjueves`, `outhourafterjueves`, `inhourviernes`, `outhourviernes`, `inhourafterviernes`, `outhourafterviernes`, `inhoursabado`, `outhoursabado`, `inhouraftersabado`, `outhouraftersabado`, `inhourdomingo`, `outhourdomingo`, `inhourafterdomingo`, `outhourafterdomingo`) VALUES
(1, 'Richard', 'juanp.garcia1993@gmail.com', NULL, '$2y$10$1bkfny44ddLkgggqqL.NOufdUyxvRPR4/pp8/KymyhkkvH4I1wk5q', NULL, '2019-10-28 21:23:36', '2019-11-07 21:10:28', '3757466729', '2 Año/s', 2, 'Spent several years working on sheep on Wall Street. Had moderate success investing in Yugo\'s on Wall Street. Managed a small team buying and selling Pogo sticks for farmers. Spent several years licensing licorice in West Palm Beach, FL. Developed several new methods for working it banjos in the aftermarket. Spent a weekend importing banjos in West Palm Beach, FL.In this position, the Software Engineer collaborates with Evention\'s Development team to continuously enhance our current software solutions as well as create new solutions to eliminate the back-office operations and management challenges present', 'http://facebook.com/juaampi.pelj', NULL, NULL, NULL, 'Bachillerato', 'Mar del Plata', 'Juramento', 'Carpintero de Madera', 1, 1, 1, 0, NULL, 21, 5, '1572972190automobile-with-wrench.png', 'profesional', '22:22:00', '22:22:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Ricardo Alberto', 'asdasddssad@asdasd.com', NULL, '$2y$10$NkoF2pNJQBE8NjCe3.SXKe12jXqm2ArdC8WGQ.mp6A.j9muocmvPC', NULL, '2019-11-11 22:03:00', '2019-11-11 22:04:22', '3757466729', '2 Año/s', 2, 'asdasd asdasd asd', NULL, NULL, NULL, NULL, 'Carrera de Grado', 'Mar del Plata', 'Caisamar', 'Albañil', 1, 1, 1, 0, '3757466729', 21, 13, 'logo.png', 'profesional', '10:00:00', '12:00:00', '17:02:00', '22:22:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Juan Perez', 'asdasd@aasad.com', NULL, '$2y$10$aqmuuCqJ3vYXwL8tTQhOlebn/TcZpsWCnlqylZji3A0AtrH.d065.', NULL, '2019-11-12 22:05:33', '2019-11-12 22:42:23', '232323232', 'www.google.com', 1, 'asdasd asd asd asd d asd asdsd asd ads asd asd asd', 'facebook.com/juaampi.pelj', NULL, NULL, NULL, 'Tecnicatura', 'Mar del Plata', 'Aeropuerto', 'Diseñador Gráfico', 1, 1, 0, 0, '2234545454', 2, 3, '1573586583chico.png', 'profesional', '02:02:00', '23:02:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Puntuador profesional', 'asdasdsdd@asdasd.com', NULL, '$2y$10$Fs8AqAkJ0H5Dff1mFcx1SuY3vFbnBhNtNNHrCNRZrbMvU0A20XdC.', NULL, '2019-11-13 17:42:35', '2019-11-13 17:45:04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, '1573656304arquitecto.png', 'usuario', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Punteo Juan', 'asdasd@sdasdasd', NULL, '$2y$10$1APgWE5u47w4Ev39A0V/eO4gmY4katIvxuroOnqix4Smb1sR0TkVS', NULL, '2019-11-13 18:02:18', '2019-11-13 18:02:18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'logo.png', 'usuario', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Alberto Fernandez', 'asdasdqasd@asdasd.com', NULL, '$2y$10$pLAYdL88Vv4j.9cD9nvpj.09ZIQxQZje9xZdG23UghUf98Z1fgsmC', NULL, '2019-11-20 18:51:49', '2019-11-20 18:55:19', '3757466729', 'www.sidek.com', 4, 'Hola yo soy de aeroparque y estoy tratando de ver como es esto de MDPWORK', NULL, NULL, NULL, NULL, 'Maestria', 'Mar del Plata', 'Aeropuerto', 'Carpintero de Madera', 1, 0, 0, 0, '21231232', 2, 6, '1574265319perfil.jpg', 'profesional', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10:00:00', '12:00:00', '12:30:00', '16:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Juan Pablo Garcia', 'juanp.garcia19923@gmail.com', NULL, '$2y$10$qupX8mML00rQ0lXrhkyYNOJ2n6arktD.UQRcl.QBzBPRK2S8h6q06', NULL, '2019-11-20 21:07:27', '2019-11-20 21:07:56', '2312312323', 'mdp.com', 4, 'sdasd', NULL, NULL, NULL, NULL, 'Carrera de Grado', 'Mar del Plata', 'Faro', 'Diseño de Moda', 1, 0, 0, 0, '231231232', 23, 10, '1574273276automobile-with-wrench.png', 'profesional', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12:00:00', '18:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Richard Gere', 'asd@asdasdc.com', NULL, '$2y$10$wVsyiBkhs2.UZf3xRlHeyuJkC9HRnUFLOl57AMDcOBaWzKPrWX5eS', NULL, '2019-11-20 21:12:22', '2019-11-20 21:12:44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1574273564profesional.png', 'usuario', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Pedro Juarez', 'asdsads@asasd.com', NULL, '$2y$10$fnZ7dA1C3A2F4T.Fk5t.9eq2Sjt7lcBR..9urc1rBXvaXG2WFVR9O', NULL, '2019-11-22 19:53:31', '2019-11-22 19:53:31', '2312312', 'asdasd.com', 2, 'asd asd asd asd as                                            asd asd asd asd as                                           asd asd asd asd as                                           asd asd asd asd as                                           asd asd asd asd as                                           asd asd asd asd as                                           asd asd asd asd as                                           asd asd asd asd as', NULL, NULL, NULL, NULL, 'Bachillerato', 'Mar del Plata', 'Lomas del Golf', 'Uñas esculpidas', 1, 0, 0, 0, '21232231', 21, 16, 'logo.png', 'profesional', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '09:00:00', '17:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coments`
--
ALTER TABLE `coments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coments_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `coments`
--
ALTER TABLE `coments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coments`
--
ALTER TABLE `coments`
  ADD CONSTRAINT `coments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
