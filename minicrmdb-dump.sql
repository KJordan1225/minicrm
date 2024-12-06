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
INSERT INTO `cache` VALUES ('spatie.permission.cache','a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:6:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:12:\"manage_users\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:14:\"delete_clients\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:15:\"delete_projects\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:12:\"delete_tasks\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:4;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:16:\"delete_documents\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:5;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:13:\"add_documents\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}}s:5:\"roles\";a:1:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:5:\"admin\";s:1:\"c\";s:3:\"web\";}}}',1732294026);
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
INSERT INTO `clients` VALUES (1,'Tony Kolb','monahan.jayda@example.net','630.732.7985','Budget','216 12th Street, Roanoke, VA, 24017','Roanoke','24017','2024-2025','2024-11-21 19:49:56','2024-11-21 19:49:56',NULL),(2,'Tony Kolb','emilia.koss@example.org','+19525347539','Ways and Means','216 12th Street, Roanoke, VA, 24017','Roanoke','24017','2024-2025','2024-11-21 19:49:56','2024-11-21 19:49:56',NULL),(3,'Keith Jordan','shadow902@gmail.com','540-521-8487','Policies and Proceedures','216 12th Street, Roanoke, VA, 24017','Roanoke','24017','2024-2025','2024-11-21 19:49:56','2024-11-21 19:49:56',NULL),(4,'Jeff Williams','ray98@example.org','267-738-7571','Talent Hunt','216 12th Street, Roanoke, VA, 24017','Roanoke','24017','2024-2025','2024-11-21 19:49:56','2024-11-21 19:49:56',NULL);
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
INSERT INTO `documents` VALUES (1,'Facilis adipisci qui recusandae repudiandae.','Minima ullam quia delectus molestiae dolor autem. Qui odit dolorem dolores animi aut nisi sit. Perspiciatis expedita repudiandae officia quia. Odio officiis a qui asperiores.',3,4,4,'2025-04-18','Et eveniet.','Voluptatem illum.','closed','2024-11-21 19:49:56','2024-11-21 19:49:56',NULL),(2,'Qui sit voluptates quas.','Nisi aut ducimus quia. Assumenda dolorem vero magni dolor similique provident. Provident quia voluptates temporibus unde aliquam necessitatibus. Dicta enim magnam minima dolorem similique fuga molestiae.',12,3,1,'2025-01-05','Ut autem nemo accusamus qui.','Non sint temporibus.','pending','2024-11-21 19:49:56','2024-11-21 19:49:56',NULL),(3,'Aut deserunt quia.','Laboriosam magnam vitae necessitatibus id eum quis. Nostrum ducimus similique ut voluptatem corporis ex repudiandae.',5,2,4,'2025-03-02','Dolorem id et est.','Ratione at voluptatem explicabo accusamus.','closed','2024-11-21 19:49:56','2024-11-21 19:49:56',NULL),(4,'Dolor sed nostrum.','Quia reprehenderit odio enim mollitia soluta pariatur. Consequatur quia quam quos sit itaque. Excepturi alias ipsam aliquam aut ut. Qui ut dolor reprehenderit in occaecati et ducimus.',7,2,5,'2025-05-21','Illo odio accusantium quidem.','Repellendus nostrum nostrum quia.','pending','2024-11-21 19:49:56','2024-11-21 19:49:56',NULL),(5,'Accusamus aut soluta.','Qui qui numquam nisi quae iure. Consequatur corrupti non accusantium natus. Autem doloribus temporibus rerum reprehenderit. Molestias et libero ad voluptatem voluptatem est ipsa aut.',11,1,1,'2025-02-17','Cumque nisi.','Et quia quo.','pending','2024-11-21 19:49:56','2024-11-21 19:49:56',NULL),(6,'Test Word Document','Test Word Document',1,1,1,'2024-11-22','89ngyeEphNJXYOAQvklNzgI3jicXU9gkC68fblUP.docx','Test Word Document','ACTIVE','2024-11-22 18:15:16','2024-11-22 18:15:16',NULL);
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `events` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (4,'test 1','2024-12-01 14:44:00','2024-12-01 15:44:00','<h2 style=\"text-align: center;\"><span style=\"text-decoration: underline;\"><em><strong>CODE EXAMPLE</strong></em></span></h2>\r\n<p>$event = Event::create([<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'title\' =&gt; $request-&gt;title,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'start\' =&gt; $request-&gt;start,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'end\' =&gt; $request-&gt;end,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'description\' =&gt; $request-&gt;description,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'image_path\' =&gt; $imageName,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ]);</p>\r\n<p style=\"text-align: center;\">&lt;--TEST THE EDIT--&gt;</p>','1733082433.jpg','2024-12-02 00:47:13','2024-12-02 00:48:03'),(5,'second','2024-12-02 14:53:00','2024-12-02 15:53:00','<p style=\"text-align: center;\"><em><strong>Use this script to clear a Bootstrap 5 modal form when a button is clicked:</strong></em></p>\r\n<h3><strong>```javascript</strong></h3>\r\n<p style=\"padding-left: 40px;\"><br>document.getElementById(\'yourButtonId\').addEventListener(\'click\', function() {<br>&nbsp; &nbsp; const form = document.querySelector(\'#yourModalId form\');<br>&nbsp; &nbsp; if (form) {<br>&nbsp; &nbsp; &nbsp; &nbsp; form.reset();<br>&nbsp; &nbsp; }<br>});</p>\r\n<h3><br>```</h3>','1733083008.png','2024-12-02 00:56:48','2024-12-02 00:56:48');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2024_10_26_003522_create_permission_tables',1),(5,'2024_10_28_013717_create_clients_table',1),(6,'2024_10_28_153228_create_projects_table',1),(7,'2024_10_28_153442_create_tasks_table',1),(8,'2024_10_28_185630_create_documents_table',1),(9,'2024_12_01_171701_create_events_table',2);
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
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\User',1),(2,'App\\Models\\User',2),(2,'App\\Models\\User',3),(2,'App\\Models\\User',4),(2,'App\\Models\\User',5),(2,'App\\Models\\User',6),(2,'App\\Models\\User',7),(2,'App\\Models\\User',8),(2,'App\\Models\\User',9),(2,'App\\Models\\User',10),(2,'App\\Models\\User',11),(2,'App\\Models\\User',12);
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
INSERT INTO `permissions` VALUES (1,'manage_users','web','2024-11-21 19:49:53','2024-11-21 19:49:53'),(2,'delete_clients','web','2024-11-21 19:49:53','2024-11-21 19:49:53'),(3,'delete_projects','web','2024-11-21 19:49:53','2024-11-21 19:49:53'),(4,'delete_tasks','web','2024-11-21 19:49:53','2024-11-21 19:49:53'),(5,'delete_documents','web','2024-11-21 19:49:53','2024-11-21 19:49:53'),(6,'add_documents','web','2024-11-21 19:49:53','2024-11-21 19:49:53');
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
INSERT INTO `projects` VALUES (1,'Create Scholarship policy document.','Create Scholarship policy document.',1,3,'2024-12-03','in progress','2024-11-21 19:49:56','2024-11-22 10:22:50',NULL),(2,'Aliquam ullam quos ut et.','Aut odit voluptatum corrupti sunt corrupti. Quae et nihil excepturi velit. Quaerat voluptas placeat veritatis.',12,1,'2024-12-15','blocked','2024-11-21 19:49:56','2024-11-22 10:21:09','2024-11-22 10:21:09'),(3,'Quas ut molestias iure.','Dolore rem quibusdam nemo rerum qui necessitatibus. Fugiat odio totam corrupti. Perspiciatis voluptatem assumenda aperiam dolores quis. Magni dolores quos architecto modi magnam aut.',3,4,'2024-11-25','open','2024-11-21 19:49:56','2024-11-22 10:21:03','2024-11-22 10:21:03'),(4,'Voluptas et cum odit velit.','Eius sit placeat earum ea non. Soluta dolore quibusdam dicta quod. Nihil voluptates totam non porro accusantium eius error ut.',4,2,'2024-11-27','in progress','2024-11-21 19:49:56','2024-11-22 10:20:57','2024-11-22 10:20:57'),(5,'Ut vel odio maiores praesentium.','Necessitatibus excepturi amet provident similique rerum. Veniam rerum dolorem dolorem id est autem rerum sit. Provident sed ea vel non consequatur sint. Porro voluptatem ut consequatur recusandae.',12,4,'2024-11-25','blocked','2024-11-21 19:49:56','2024-11-22 10:20:51','2024-11-22 10:20:51');
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
INSERT INTO `roles` VALUES (1,'admin','web','2024-11-21 19:49:53','2024-11-21 19:49:53'),(2,'user','web','2024-11-21 19:49:53','2024-11-21 19:49:53');
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
INSERT INTO `sessions` VALUES ('ha0SrquW22dZyMRKkAVEqLehSAvO8Q9FaE7Z8mU6',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOXZ1UnBaQW9mcENvVHhPMEpBblpMVUVTWlZCNFhoRDFVbGpFdkQ4cCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9mdWxsY2FsZW5kZXIiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=',1733090602);
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tasks`
--

LOCK TABLES `tasks` WRITE;
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
INSERT INTO `tasks` VALUES (1,'Create Scholarship policy document.','Create literal scholarship policy document/',1,3,1,'2024-12-03','in progress','2024-11-21 19:49:56','2024-11-22 10:26:09',NULL),(2,'Qui facere tempora aut magnam.','Velit neque iste voluptatem omnis inventore. Et tenetur rerum quo dicta atque error. Pariatur qui autem aut. Voluptatum et expedita quae et quam aliquid libero eaque.',9,4,1,'2025-03-17','open','2024-11-21 19:49:56','2024-11-22 10:23:41','2024-11-22 10:23:41'),(3,'Exercitationem ea quaerat velit quis.','Ut iste inventore est eos. Nam libero unde aut sit rerum. Odio quisquam eveniet voluptas voluptatem dignissimos. Sint aperiam vero consequatur repudiandae consequatur reprehenderit.',10,1,5,'2025-02-25','pending','2024-11-21 19:49:56','2024-11-22 10:23:35','2024-11-22 10:23:35'),(4,'Quasi ea modi facere fugiat aspernatur.','Rerum ipsum sit omnis soluta atque ab enim. Sint vel cumque debitis ex ad animi nihil. Soluta fugit libero nesciunt rem voluptatem et quia. Dolorem dolorem est esse voluptatem debitis deleniti.',5,2,5,'2024-12-27','waiting client','2024-11-21 19:49:56','2024-11-22 10:23:28','2024-11-22 10:23:28'),(5,'Consectetur corporis consectetur assumenda ullam sequi numquam optio.','Eos quia eligendi qui minus adipisci pariatur quibusdam. Soluta voluptatem cupiditate soluta ipsam ut. Inventore rerum qui voluptas ipsa libero dolorem laboriosam.',5,1,1,'2025-01-25','closed','2024-11-21 19:49:56','2024-11-22 10:23:23','2024-11-22 10:23:23'),(6,'Present scholarship policy document','Create Scholarship policy document draft 1 to general body for approval vote',1,3,1,'2024-12-03','pending','2024-11-22 10:28:33','2024-11-22 10:28:33',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','Admin','admin@admin.com','2024-11-21 19:49:53','$2y$12$0X71f/wyBMoplcblbNxG2uTFn.clpYwB6D52br6QcdPSR9OPyWD9i',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'h8C8A69vFeFD66tzctunKH0Putm7nq38FZ1u3cJg2b85hXISYrlCp7UIH8Lz','2024-11-21 19:49:54','2024-11-21 19:49:54',NULL),(2,'User','User','user@user.com','2024-11-21 19:49:54','$2y$12$qx0XqYv5bkUZ.8Qg0sTUce8Cg.H.ppCG3jJbZ5A6odfBLOAMKxcHq',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'MJcBvAva1A','2024-11-21 19:49:54','2024-11-21 19:49:54',NULL),(3,'One','One','one@one.com','2024-11-21 19:49:54','$2y$12$YLneMNhh83HY6zlF.sM/3OJt8/gFRvRR.ZJfkywZxVlD4Sgw6jbYO','111 One St. NW',NULL,'Roanoke','VA','24017','(540) 111-1111','Mobile','JlE3l6asRHn7AR2fktqIvQo7Qm5j1t8eGs7GIJAz.jpg','Q1GsSx7DTSxP7vHt4FEpCv1ZU74l2PuzOGrAThl21RAtQSVoVp9XkOKtGV1m','2024-11-21 19:49:54','2024-11-21 23:10:11',NULL),(4,'Two','Two','two@two.com','2024-11-21 19:49:54','$2y$12$zN5ZlFBvqiPWu0PexBnHuegpzZSQlPA0bkxqbMblBo1dG195J.LDS','111 One St. NW',NULL,'Roanoke','VA','24017','(540) 111-1111','Mobile','xAcCxaSV1AJWNinCVM1goA0cZfxkrRczKmVmWtBj.jpg','T21U5AUNxO','2024-11-21 19:49:54','2024-11-21 23:54:40',NULL),(5,'Three','One','three@three.com','2024-11-21 19:49:54','$2y$12$Zha9IqrLBvbQtf3t5OIR0.TdwndmM/Q2SdYc75xXZrqx.NsDIn9Xe','111 One St. NW',NULL,'Roanoke','VA','24017','(540) 111-1111','Mobile',NULL,'GBaExTc52B','2024-11-21 19:49:55','2024-11-21 19:49:55',NULL),(6,'Four','One','four@four.com','2024-11-21 19:49:55','$2y$12$hcGJ34fYw526zt35KVM2Nen0R5uOoMkVsLBZvIZOdBCFQV5uY2c/u','111 One St. NW',NULL,'Roanoke','VA','24017','(540) 111-1111','Mobile',NULL,'MP7dgk5n14','2024-11-21 19:49:55','2024-11-21 19:49:55',NULL),(7,'Five','One','five@five.com','2024-11-21 19:49:55','$2y$12$Rjrd2aesnJUd1Mlni5C45uuTRerzDD.TrnMA.tn3hW4ENj/tTGffm','111 One St. NW',NULL,'Roanoke','VA','24017','(540) 111-1111','Mobile',NULL,'o8EkMDnnl6','2024-11-21 19:49:55','2024-11-21 19:49:55',NULL),(8,'Six','One','six@six.com','2024-11-21 19:49:55','$2y$12$Gw4rEdzQoDDIl6tvbgRve./3/CDrdDlB12vjbg2HSTkxJ13Q09jkK','111 One St. NW',NULL,'Roanoke','VA','24017','(540) 111-1111','Mobile',NULL,'CSdyk031m5','2024-11-21 19:49:55','2024-11-21 19:49:55',NULL),(9,'Seven','One','seven@seven.com','2024-11-21 19:49:55','$2y$12$fyicm.U46Em8ejp1uWmNxOMi4CesLFr6xst2fT8cs6321Je8C3lBu','111 One St. NW',NULL,'Roanoke','VA','24017','(540) 111-1111','Mobile',NULL,'RVarjUsr6l','2024-11-21 19:49:55','2024-11-21 19:49:55',NULL),(10,'Eight','One','eight@eight.com','2024-11-21 19:49:55','$2y$12$MyivZ2QpGB4TnWwZDba8BOEkMziY1BE.3DfTDFRzHUREGlAtWGFKa','111 One St. NW',NULL,'Roanoke','VA','24017','(540) 111-1111','Mobile',NULL,'SfywzTvVAG','2024-11-21 19:49:56','2024-11-21 19:49:56',NULL),(11,'Nine','One','nine@nine.com','2024-11-21 19:49:56','$2y$12$X4KFYpguz0qxFF.MC6YZVOpGPoKoTgU1L.bMc.f6hDpTA4Zn6qHmy','111 One St. NW',NULL,'Roanoke','VA','24017','(540) 111-1111','Mobile',NULL,'CNwMpmN4AF','2024-11-21 19:49:56','2024-11-21 19:49:56',NULL),(12,'Ten','One','ten@ten.com','2024-11-21 19:49:56','$2y$12$uPxuxHncYBJ2QNbhThMXIeAQcv/SoT7RNyR2fDAwvya7JD8gEJXZe','111 One St. NW',NULL,'Roanoke','VA','24017','(540) 111-1111','Mobile',NULL,'DDXH5itwtr0nl04OWuRTgSmvjn34QhmqRkmcWiGelRtua022brd6TfhbPsiO','2024-11-21 19:49:56','2024-11-21 19:49:56',NULL);
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

-- Dump completed on 2024-12-01 17:17:07
