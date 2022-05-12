-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for nowarchs
CREATE DATABASE IF NOT EXISTS `nowarchs` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `nowarchs`;

-- Dumping structure for table nowarchs.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`),
  UNIQUE KEY `admins_password_unique` (`password`),
  KEY `admins_id_index` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nowarchs.admins: ~0 rows (approximately)
DELETE FROM `admins`;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` (`id`, `name`, `phone`, `avatar`, `email`, `password`, `created_at`, `updated_at`) VALUES
	(1, 'Quangdev', '0868966562', '', 'dvq.dev@gmail.com', '$2y$10$j1CuXPXB4Af07CwxptpdwelNnU4ixzaC1dqydQ.J3qZp6K/bJriqm', '2022-05-10 03:02:40', '2022-05-10 03:02:40');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- Dumping structure for table nowarchs.blogs
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` bigint(20) unsigned NOT NULL,
  `contents` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1:active, 2:draf',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `blogs_id_index` (`id`),
  KEY `blogs_admin_id_index` (`admin_id`),
  CONSTRAINT `blogs_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nowarchs.blogs: ~0 rows (approximately)
DELETE FROM `blogs`;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` (`id`, `title`, `slug`, `images`, `admin_id`, `contents`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'demo', 'demo', '', 1, 'content', 1, '2022-05-10 03:02:40', '2022-05-10 03:02:40');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;

-- Dumping structure for table nowarchs.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1:active, 2:draf',
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`),
  KEY `categories_id_index` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nowarchs.categories: ~4 rows (approximately)
DELETE FROM `categories`;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `status`) VALUES
	(1, 'Ladies', '2022-05-10 03:02:40', '2022-05-11 21:46:35', 1),
	(3, 'Trị mụn', '2022-05-10 10:04:08', '2022-05-10 10:04:08', 1),
	(4, 'Trị nám, tàng nhang', '2022-05-10 10:04:26', '2022-05-10 10:04:26', 1),
	(5, 'Thực phẩm chức năng', '2022-05-12 16:55:32', '2022-05-12 16:55:32', 1);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table nowarchs.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `contents` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `comments_blog_id_foreign` (`blog_id`),
  KEY `comments_id_index` (`id`),
  CONSTRAINT `comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nowarchs.comments: ~0 rows (approximately)
DELETE FROM `comments`;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;

-- Dumping structure for table nowarchs.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nowarchs.migrations: ~10 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2022_04_13_020559_create_admins_table', 1),
	(4, '2022_05_07_173929_create_categories_table', 1),
	(5, '2022_05_08_050435_create_products_table', 1),
	(6, '2022_05_08_051100_create_blogs_table', 1),
	(7, '2022_05_08_051431_create_tags_table', 1),
	(8, '2022_05_08_052951_create_comments_table', 1),
	(9, '2022_05_10_032225_update_categories_table', 1),
	(10, '2022_05_12_095416_update_products_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table nowarchs.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nowarchs.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table nowarchs.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `contents` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1:active, 2:draf',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category_id` bigint(20) unsigned NOT NULL,
  `number_sale` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_id_index` (`id`),
  KEY `products_category_id_index` (`category_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nowarchs.products: ~3 rows (approximately)
DELETE FROM `products`;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `name`, `slug`, `images`, `price`, `contents`, `status`, `created_at`, `updated_at`, `category_id`, `number_sale`) VALUES
	(13, 'Dưỡng da', 'duong-da', '/uploads/products/IMAGE-products1652319932-ph-1.png', 20, '<div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A, pariatur dolorum. Qui eveniet repellat magni expedita voluptatum rem blanditiis inventore obcaecati fuga, iure consequatur adipisci vel vero. Accusantium, quasi id.</div>\r\n<div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A, pariatur dolorum. Qui eveniet repellat magni expedita voluptatum rem blanditiis inventore obcaecati fuga, iure consequatur adipisci vel vero. Accusantium, quasi id.</div>\r\n<div>\r\n<div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A, pariatur dolorum. Qui eveniet repellat magni expedita voluptatum rem blanditiis inventore obcaecati fuga, iure consequatur adipisci vel vero. Accusantium, quasi id.</div>\r\n<div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A, pariatur dolorum. Qui eveniet repellat magni expedita voluptatum rem blanditiis inventore obcaecati fuga, iure consequatur adipisci vel vero. Accusantium, quasi id.</div>\r\n</div>\r\n<h2>Đ&acirc;y l&agrave; nội dung ti&ecirc;u đề</h2>', 1, '2022-05-11 10:24:07', '2022-05-12 10:34:36', 1, '5'),
	(14, 'Dưỡng da từ thiên nhiên', 'duong-da-tu-thien-nhien', '/uploads/products/IMAGE-products1652320129-ph-2.png', 25, '<p>dfdsf sfdsf sdfdsf dsf ds</p>', 1, '2022-05-12 01:48:49', '2022-05-12 00:56:30', 1, '1'),
	(15, 'Giầu gội dưỡng tóc từ thiên nhiên', 'giau-goi-duong-toc-tu-thien-nhien', '/uploads/products/IMAGE-products1652320169-ph-3.png', 15, '<p>sdf dfsf sadfsdfasdfadsfdasfdsa</p>', 1, '2022-05-12 01:49:29', '2022-05-12 09:56:22', 1, NULL),
	(16, 'Lọ dưỡng da toàn thân', 'lo-duong-da-toan-than', '/uploads/products/IMAGE-products1652320212-ph-4.png', 18, '<p>dsgf sgfd fgh jghj fgjfg jg</p>', 1, '2022-05-12 01:50:12', '2022-05-11 19:35:05', 1, NULL),
	(17, 'Kem chống nắng Apol', 'kem-chong-nang-apol', '/uploads/products/IMAGE-products1652320259-product-detail-1.jpeg', 12, '<p>dsfdsf dfds sdfdsfdsfsd</p>', 1, '2022-05-12 01:50:59', '2022-05-11 19:35:02', 1, NULL),
	(18, 'Colagen Dưỡng da chiết xuất từ thiên nhiên', 'colagen-duong-da-chiet-xuat-tu-thien-nhien', '/uploads/products/IMAGE-products1652327389-product-detail-2.jpeg', 12, '<p>DFGDS FGD SDSFDS FS</p>', 1, '2022-05-12 01:52:17', '2022-05-12 01:52:17', 1, NULL),
	(19, 'Tinh dầu dưỡng da ban đêm, trị mụn hiệu quả', 'tinh-dau-duong-da-ban-dem-tri-mun-hieu-qua', '/uploads/products/IMAGE-products1652320370-product-detail-2.png', 13, '<p>dfgdf gfdsgsfdgfsdgdfsg dsf</p>', 1, '2022-05-12 01:52:50', '2022-05-12 09:52:39', 3, NULL),
	(20, 'Bộ sản phẩm trị mụn, dưỡng da Solwlsoo', 'bo-san-pham-tri-mun-duong-da-solwlsoo', '/uploads/products/IMAGE-products1652320442-product-detail-3.png', 160, '<p>sfgfd gsdfg sdfgdfs gdfg fdg jghk jkjkhjk jgjkjkghkkljk;yudfjghdghdhhhghdfghehtr5hthgnbvnssdbjfdgfdhbgsdfkjghfdsgjfsdklghfdjgkhfgkljfhgfdhgdfjhgkjfghdjfkghkdfljhdfkghdf</p>', 1, '2022-05-12 01:54:02', '2022-05-12 00:58:57', 3, NULL),
	(21, 'Kem Cowslip đặc trị nám, tàm nhang', 'kem-cowslip-dac-tri-nam-tam-nhang', '/uploads/products/IMAGE-products1652320507-product-detail-4.png', 50, '<p>fdg dfgfdgsdfgdfsgsdf</p>', 1, '2022-05-12 01:55:07', '2022-05-12 01:55:07', 4, NULL),
	(22, 'Sản phẩm demo', 'san-pham-demo', '/uploads/products/IMAGE-products1652355093-icon-logo-title.png', 123, '<p>tox-notifications-containertox-notifications-containertox-notifications-containertox-notifications-containertox-notifications-containertox-notifications-containertox-notifications-container tox-notifications-containertox-notifications-containertox-notifications-containertox-notifications-containertox-notifications-containertox-notifications-containertox-notifications-containertox-notifications-containertox-notifications-container</p>', 1, '2022-05-12 11:31:33', '2022-05-12 11:31:33', 3, '12'),
	(23, 'Demo sản phẩm', 'demo-san-pham', '/uploads/products/IMAGE-products1652378122-b-1.png', 100, '<p>fdsfdsfsd dsfsdfdsfdsfdsfdsfds</p>', 1, '2022-05-12 17:55:22', '2022-05-12 17:55:22', 5, '0'),
	(25, 'banner2', 'banner2', '/uploads/products/IMAGE-products1652379235-banner-body.png', 100, '<p>ssdsdsa</p>', 1, '2022-05-12 18:13:55', '2022-05-12 18:13:55', 1, ''),
	(26, 'banner22', 'banner22', '/uploads/products/IMAGE-products1652379269-icon-avartar-1.png', 100, '<p>sdsdsadsadsadsada</p>', 1, '2022-05-12 18:14:29', '2022-05-12 18:14:29', 1, '');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table nowarchs.tags
CREATE TABLE IF NOT EXISTS `tags` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) unsigned DEFAULT NULL,
  `blog_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `tags_product_id_foreign` (`product_id`),
  KEY `tags_blog_id_foreign` (`blog_id`),
  KEY `tags_id_index` (`id`),
  CONSTRAINT `tags_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  CONSTRAINT `tags_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nowarchs.tags: ~0 rows (approximately)
DELETE FROM `tags`;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;

-- Dumping structure for table nowarchs.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nowarchs.users: ~0 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
