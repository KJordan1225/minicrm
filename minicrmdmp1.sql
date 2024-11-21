-- MySQL dump 10.13  Distrib 8.0.40, for Linux (x86_64)
--
-- Host: localhost    Database: minicrmdb
-- ------------------------------------------------------
-- Server version	8.0.40-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
INSERT INTO `cache` VALUES ('spatie.permission.cache','a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:6:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:12:\"manage_users\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:14:\"delete_clients\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:15:\"delete_projects\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:12:\"delete_tasks\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:4;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:16:\"delete_documents\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:5;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:13:\"add_documents\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}}s:5:\"roles\";a:1:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:5:\"admin\";s:1:\"c\";s:3:\"web\";}}}',1732060471);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '216 12th Street NW Roanoke VA',
  `company_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Roanoke',
  `company_zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '24017',
  `company_vat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2024-2025',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,'Tony Kolb','dewayne60@example.com','(626) 428-2192','Budget','216 12th Street, Roanoke, VA, 24017','Roanoke','24017','2024-2025','2024-11-19 04:51:38','2024-11-19 04:51:38',NULL),(2,'Tony Kolb','feichmann@example.net','682.569.7152','Ways and Means','216 12th Street, Roanoke, VA, 24017','Roanoke','24017','2024-2025','2024-11-19 04:51:38','2024-11-19 04:51:38',NULL),(3,'Keith Jordan','shadow902@gmail.com','540-521-8487','Policies and Proceedures','216 12th Street, Roanoke, VA, 24017','Roanoke','24017','2024-2025','2024-11-19 04:51:38','2024-11-19 04:51:38',NULL),(4,'Jeff Williams','raul.prohaska@example.org','918-480-4794','Talent Hunt','216 12th Street, Roanoke, VA, 24017','Roanoke','24017','2024-2025','2024-11-19 04:51:38','2024-11-19 04:51:38',NULL);
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `documents` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `client_id` bigint unsigned NOT NULL,
  `project_id` bigint unsigned NOT NULL,
  `last_revised` date NOT NULL,
  `filepathname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `documents_user_id_foreign` (`user_id`),
  KEY `documents_client_id_foreign` (`client_id`),
  KEY `documents_project_id_foreign` (`project_id`),
  CONSTRAINT `documents_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`),
  CONSTRAINT `documents_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  CONSTRAINT `documents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents`
--

LOCK TABLES `documents` WRITE;
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
INSERT INTO `documents` VALUES (1,'Scholarship Policy','Scholarship Policy',2,3,3,'2024-11-19','kq0NiueLvenF9YEdcF8SWbW2Y1texqr8DqDQLUO5.pdf','Scholarship Policy','pending','2024-11-19 04:51:38','2024-11-19 05:28:12',NULL),(2,'Vel accusantium fugiat.','Est qui nobis assumenda. Pariatur quas alias delectus alias a. Officia voluptate quia laborum odio sequi consequatur. Fugiat rerum et modi alias aliquam eum.',1,2,2,'2024-12-27','Aut labore voluptatibus et.','Natus repudiandae.','closed','2024-11-19 04:51:38','2024-11-19 05:19:41','2024-11-19 05:19:41'),(3,'Enim ea rerum.','Est qui et fugit voluptatem non et consequatur. Qui mollitia sint non illo hic. Inventore libero dolorem reprehenderit dolor est cum dolor ut.',2,3,1,'2025-04-17','Adipisci eaque ut.','Quas porro quasi sit.','blocked','2024-11-19 04:51:38','2024-11-19 05:19:28','2024-11-19 05:19:28'),(4,'Totam magnam libero cupiditate.','Quisquam ut maiores excepturi magni. Sunt et laboriosam error non suscipit qui quod in. Ipsa est voluptate minima non laboriosam et. Nobis ad quam dolores voluptatum dolorum quae odit.',2,1,2,'2025-02-08','Mollitia consectetur vel.','Quibusdam iure sit.','open','2024-11-19 04:51:38','2024-11-19 05:19:16','2024-11-19 05:19:16'),(5,'Laboriosam ducimus.','Fuga dolor nisi temporibus aut. Harum provident nemo quos necessitatibus. Voluptates architecto officia nesciunt beatae corrupti. Et ad ab aut aliquid a eos.',2,2,1,'2025-01-07','Voluptatem minus sed.','Assumenda laboriosam quo occaecati.','in progress','2024-11-19 04:51:38','2024-11-19 05:19:01','2024-11-19 05:19:01'),(6,'test1','test1',1,1,1,'2024-11-19','PfKlC9X3kraZBtdHuIEAMhvpnhSLZtRWzON2aXJf.pdf','test1','ACTIVE','2024-11-19 05:25:17','2024-11-19 05:25:17',NULL);
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2024_10_26_003522_create_permission_tables',1),(5,'2024_10_28_013717_create_clients_table',1),(6,'2024_10_28_153228_create_projects_table',1),(7,'2024_10_28_153442_create_tasks_table',1),(8,'2024_10_28_185630_create_documents_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\User',1),(2,'App\\Models\\User',2),(2,'App\\Models\\User',3);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'manage_users','web','2024-11-19 04:51:37','2024-11-19 04:51:37'),(2,'delete_clients','web','2024-11-19 04:51:37','2024-11-19 04:51:37'),(3,'delete_projects','web','2024-11-19 04:51:37','2024-11-19 04:51:37'),(4,'delete_tasks','web','2024-11-19 04:51:37','2024-11-19 04:51:37'),(5,'delete_documents','web','2024-11-19 04:51:37','2024-11-19 04:51:37'),(6,'add_documents','web','2024-11-19 04:51:37','2024-11-19 04:51:37');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `projects` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `client_id` bigint unsigned NOT NULL,
  `deadline_at` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `projects_user_id_foreign` (`user_id`),
  KEY `projects_client_id_foreign` (`client_id`),
  CONSTRAINT `projects_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`),
  CONSTRAINT `projects_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,'Create Scholarship Policy','Create Scholarship Policy - first draft.',1,3,'2024-12-03','in progress','2024-11-19 04:51:38','2024-11-19 05:50:40',NULL),(2,'Autem cum recusandae ut.','Voluptatibus in sed et. In ab dolores debitis. Doloribus dolorem expedita incidunt at ea. Molestiae labore odit assumenda qui a qui laborum.',1,3,'2024-12-05','blocked','2024-11-19 04:51:38','2024-11-19 04:51:38',NULL),(3,'Quis et quam.','Modi eius quidem quaerat natus ipsa illum. Dolor quasi voluptatem iste eos necessitatibus molestiae. Cupiditate voluptas quaerat voluptates alias architecto.',2,4,'2024-12-17','completed','2024-11-19 04:51:38','2024-11-19 04:51:38',NULL),(4,'Et ut.','Voluptatibus alias neque odit id. Facere natus commodi ipsum et molestiae maiores. Est deserunt et exercitationem adipisci et distinctio. Molestiae vero quas nemo cumque eius illum sunt.',2,1,'2024-11-22','completed','2024-11-19 04:51:38','2024-11-19 04:51:38',NULL),(5,'Voluptatem sit dolorem.','Quam doloribus temporibus sapiente ipsa rerum. Suscipit dignissimos enim perferendis eius aut eligendi dolores quod. Autem eos quisquam placeat.',1,2,'2024-12-08','open','2024-11-19 04:51:38','2024-11-19 04:51:38',NULL);
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','web','2024-11-19 04:51:37','2024-11-19 04:51:37'),(2,'user','web','2024-11-19 04:51:37','2024-11-19 04:51:37');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('7YwdJAgCo7LdUL2QD2ypp6BtIP9Vp5w6eURia0N1',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiaHlIQWRqbWVscXNkbFFkeW1yb2syb3F5cjZWdEQ0VXlSbEREbXlGRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1732114880),('QC1Oz7zU4QpYP2mIx5j25YfLBtZnVtPy7HxFGF6u',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiMVhaMmVEREFUc2FMcjRKS0ZXc1RpVWgyUnFnRVJlRVhJRm5aamlXaSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9nZW5lcmF0ZS1wZGYiO319',1732148846);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tasks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `client_id` bigint unsigned NOT NULL,
  `project_id` bigint unsigned NOT NULL,
  `deadline_at` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tasks_user_id_foreign` (`user_id`),
  KEY `tasks_client_id_foreign` (`client_id`),
  KEY `tasks_project_id_foreign` (`project_id`),
  CONSTRAINT `tasks_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`),
  CONSTRAINT `tasks_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  CONSTRAINT `tasks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tasks`
--

LOCK TABLES `tasks` WRITE;
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
INSERT INTO `tasks` VALUES (1,'Libero sit distinctio quam quae.','Officia qui sequi ut nisi reprehenderit quia quam quis. Et illum aliquam ut voluptas. Maiores possimus aperiam repudiandae.',2,3,1,'2025-02-12','pending','2024-11-19 04:51:38','2024-11-19 04:51:38',NULL),(2,'Unde doloribus saepe laboriosam magni.','Ea sint et et iste. Occaecati dolorum libero pariatur est. Impedit soluta ut sapiente saepe eum suscipit distinctio. Nesciunt similique atque neque dolorum.',1,3,1,'2025-01-20','open','2024-11-19 04:51:38','2024-11-19 04:51:38',NULL),(3,'Explicabo qui et incidunt ut.','Maxime deleniti quibusdam beatae iusto dolor aut officiis. Labore illo deserunt excepturi maxime exercitationem eius sit odio. Fugit laborum voluptatem et velit et. Cupiditate sed veritatis tenetur asperiores.',1,1,5,'2025-02-15','open','2024-11-19 04:51:38','2024-11-19 04:51:38',NULL),(4,'Est doloremque aperiam aut odit.','Nisi iusto voluptate unde ab quidem. Sunt voluptas quam iure eligendi architecto illum et. Expedita blanditiis quia ut.',2,4,2,'2025-05-17','open','2024-11-19 04:51:38','2024-11-19 04:51:38',NULL),(5,'Praesentium incidunt impedit harum laboriosam ut repellendus qui aperiam.','Aut aut velit ea. Nihil repudiandae dolore qui ut sint eum sed. Impedit architecto quidem voluptatem aspernatur consequatur nemo hic ut. Temporibus facere quia hic quidem quia.',1,3,1,'2025-04-20','in progress','2024-11-19 04:51:38','2024-11-19 04:51:38',NULL);
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','Admin','admin@admin.com','2024-11-19 04:51:37','$2y$12$jbeZcULDHOcMo5FsbGOHE.VA9kwL99FTH3fG33WEs1LIOV2fpGPpK','11 East Hague Freeway','Quae autem voluptati','Blanditiis quo autem','Rerum ex labore veli','90234','+1 (183) 288-9267','Landline','uMTrCssfwkZqzyF3Fqi0KY6kjipWrqglLYB1kG4e.jpg','W3Ih2XRhYDbdt5dmDgIistUORatN7xIpKz1mrF2F5Ugi6nQDPJwuu2yYBXCp','2024-11-19 04:51:38','2024-11-19 08:45:04',NULL),(2,'User','User','user@user.com','2024-11-19 04:51:38','$2y$12$lL2UehpO2niLdNGZuVuyt.z7XKXf3fK4W831RuIvmABOu1hK8TEje','953 Fabien Extension','Nulla in qui cupidat','Quaerat architecto e','Commodo non sunt und','72141','+1 (449) 625-9757','Mobile','MknC6Be41HbhSWpjFKqkNKvb8TkHQE4rsQLPAnyy.png','KvokM5OHCnviloBH9VNsZe1WOsSZ1V0hx2853Tzs0HbbrEO7khCSQ9M3ufiV','2024-11-19 04:51:38','2024-11-19 11:21:50',NULL),(3,'Keith','Jordan','shadow902@gmail.com',NULL,'$2y$12$ZkCJKIc.l9udNDFPO39KS.eFtr46q7BfNPBXhgNiFC9hDqPkfrPUK','2216 Sherman Dr NW - UPDATE','2216 Sherman Dr NW - UPDATE','Roanoke','Virginia','24017-0001','540-521-8487','Mobile','ylFTvEnb8UabsOP4HTPXla3PO1iTbmgMs8eEARmW.jpg',NULL,'2024-11-19 06:49:22','2024-11-19 11:19:55',NULL),(4,'Jayne','Rodriguez','macey94@example.org','2024-11-21 05:18:30','$2y$12$83TvNaYKz8ni2PDcB0aU9OlknfkIvi2HGxHmcqn.QGHVbS0dymjly',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'fdm8B6IFmx','2024-11-21 05:18:31','2024-11-21 05:18:31',NULL),(5,'Faye','Berge','jamison46@example.net','2024-11-21 05:18:31','$2y$12$83TvNaYKz8ni2PDcB0aU9OlknfkIvi2HGxHmcqn.QGHVbS0dymjly',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'mBJ8RFgejH','2024-11-21 05:18:31','2024-11-21 05:18:31',NULL),(6,'Jannie','Gerhold','mckayla.wiegand@example.com','2024-11-21 05:18:31','$2y$12$83TvNaYKz8ni2PDcB0aU9OlknfkIvi2HGxHmcqn.QGHVbS0dymjly',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'OPLHxmH2Zb','2024-11-21 05:18:31','2024-11-21 05:18:31',NULL),(7,'Spencer','Goyette','schroeder.anthony@example.net','2024-11-21 05:18:31','$2y$12$83TvNaYKz8ni2PDcB0aU9OlknfkIvi2HGxHmcqn.QGHVbS0dymjly',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'qC61uAxvEJ','2024-11-21 05:18:31','2024-11-21 05:18:31',NULL),(8,'Laila','Maggio','akeem.conroy@example.net','2024-11-21 05:18:31','$2y$12$83TvNaYKz8ni2PDcB0aU9OlknfkIvi2HGxHmcqn.QGHVbS0dymjly',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'XfzrZ3Ua5X','2024-11-21 05:18:31','2024-11-21 05:18:31',NULL),(9,'Haskell','Lynch','rubie.hermann@example.org','2024-11-21 05:18:31','$2y$12$83TvNaYKz8ni2PDcB0aU9OlknfkIvi2HGxHmcqn.QGHVbS0dymjly',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'XcIAL5gCsd','2024-11-21 05:18:31','2024-11-21 05:18:31',NULL),(10,'Winston','Parisian','langosh.savanah@example.org','2024-11-21 05:18:31','$2y$12$83TvNaYKz8ni2PDcB0aU9OlknfkIvi2HGxHmcqn.QGHVbS0dymjly',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'YSJx1sCcLY','2024-11-21 05:18:31','2024-11-21 05:18:31',NULL),(11,'Magdalena','Zieme','leann29@example.net','2024-11-21 05:18:31','$2y$12$83TvNaYKz8ni2PDcB0aU9OlknfkIvi2HGxHmcqn.QGHVbS0dymjly',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'VKJC8tAVjf','2024-11-21 05:18:31','2024-11-21 05:18:31',NULL),(12,'Caden','Rath','rchamplin@example.net','2024-11-21 05:18:31','$2y$12$83TvNaYKz8ni2PDcB0aU9OlknfkIvi2HGxHmcqn.QGHVbS0dymjly',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'a4eq0rO55r','2024-11-21 05:18:31','2024-11-21 05:18:31',NULL),(13,'Conor','Douglas','favian.herman@example.org','2024-11-21 05:18:31','$2y$12$83TvNaYKz8ni2PDcB0aU9OlknfkIvi2HGxHmcqn.QGHVbS0dymjly',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'CuNbCTD0Gy','2024-11-21 05:18:31','2024-11-21 05:18:31',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-20 23:23:11
