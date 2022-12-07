-- MySQL dump 10.13  Distrib 5.7.40, for Linux (x86_64)
--
-- Host: localhost    Database: singlottery_laravel
-- ------------------------------------------------------
-- Server version	5.7.40-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `batches`
--

DROP TABLE IF EXISTS `batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `batches` (
  `batch_id` int(11) NOT NULL AUTO_INCREMENT,
  `start_date` varchar(10) NOT NULL,
  `end_date` varchar(10) NOT NULL,
  PRIMARY KEY (`batch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1047 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `batches`
--

LOCK TABLES `batches` WRITE;
/*!40000 ALTER TABLE `batches` DISABLE KEYS */;
INSERT INTO `batches` VALUES (1044,'2/6/2022','6/7/2022'),(1045,'7/7/2022','3/8/2022'),(1046,'4/8/2022','7/9/2022');
/*!40000 ALTER TABLE `batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
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
-- Table structure for table `lotteries`
--

DROP TABLE IF EXISTS `lotteries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lotteries` (
  `lottery_id` int(11) NOT NULL AUTO_INCREMENT,
  `lottery_no` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `customer_ph_no` int(11) DEFAULT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `paid` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`lottery_id`),
  UNIQUE KEY `lottery_no` (`lottery_no`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lotteries`
--

LOCK TABLES `lotteries` WRITE;
/*!40000 ALTER TABLE `lotteries` DISABLE KEYS */;
INSERT INTO `lotteries` VALUES (1,1037249,1045,1,'U Htun U',NULL,NULL,1),(2,1142239,1045,1,'U Htun U',NULL,NULL,1),(3,1175398,1045,1,'Gu Glee',NULL,NULL,1),(4,1765113,1045,1,'Saw Say',NULL,NULL,1),(5,1866265,1045,1,'Available',NULL,NULL,1),(6,1999167,1045,1,'Available',NULL,NULL,1),(7,1848190,1045,1,'Wai Linn',NULL,NULL,1),(8,2014481,1045,1,'Saw Htoo Lo',NULL,NULL,1),(9,2084235,1045,1,'U Aung Zaw Myo',NULL,NULL,1),(10,2171920,1045,1,'Ma Moreene',NULL,NULL,1),(11,2397373,1045,1,'Ma Sheela',NULL,NULL,1),(12,2469463,1045,1,'Wai Linn',NULL,NULL,1),(13,2557384,1045,1,'Ma Sheela',NULL,NULL,1),(14,3437796,1045,1,'Yan Lin Kyaw',NULL,NULL,1),(15,3367411,1045,1,'Available',NULL,NULL,1),(16,3812346,1045,1,'Say Lah Pwe',NULL,NULL,1),(17,4166883,1045,1,'Saw Htoo Lo',NULL,NULL,1),(18,4483614,1045,1,'Available',NULL,NULL,1),(19,4464326,1045,1,'Available',NULL,NULL,1),(20,4403145,1045,1,'Wai Linn',NULL,NULL,1),(21,3196615,1045,1,'Saw Htoo Lo',NULL,NULL,1),(22,2711505,1045,1,'Available',NULL,NULL,1),(23,1443622,1046,1,'Koe Ko',NULL,NULL,1),(24,2006812,1046,1,'Arnan',NULL,NULL,1),(25,2041739,1046,1,'Ko Aung',NULL,NULL,1),(26,3072178,1046,1,'Ko Say',NULL,NULL,1),(27,3445981,1046,1,'Koe Ko',NULL,NULL,1),(28,4023398,1046,1,'Ko Say',NULL,NULL,1),(29,4090085,1046,1,'Ko Aung Zaw Myo',NULL,NULL,1),(30,4109205,1046,1,'Ko Aung Zaw Myo',NULL,NULL,1),(31,4465317,1046,1,'Aunty War',NULL,NULL,1),(32,4485834,1046,1,'Ku Glee',NULL,NULL,1),(33,1576985,1046,1,'Ko Bay Da',NULL,NULL,0),(34,1101008,1046,1,'Ko Bay Da',NULL,NULL,0),(35,1806292,1046,1,'Ko Bay Da',NULL,NULL,0),(36,1878074,1046,1,'Ko Bay Da',NULL,NULL,0),(37,2066142,1046,1,'Ko Bay Da',NULL,NULL,0),(38,2953711,1046,1,'Ko Bay Da',NULL,NULL,0),(39,2823497,1046,1,'Ko Bay Da',NULL,NULL,0),(40,2206631,1046,1,'Ko Bay Da',NULL,NULL,0),(41,2196093,1046,1,'Ko Bay Da',NULL,NULL,0),(42,2889685,1046,1,'Ko Bay Da',NULL,NULL,0),(43,3368850,1046,1,'Ko Bay Da',NULL,NULL,0),(44,3004566,1046,1,'Ko Bay Da',NULL,NULL,0),(45,3464517,1046,1,'Ko Bay Da',NULL,NULL,0),(46,3630489,1046,1,'Ko Bay Da',NULL,NULL,0),(47,3590852,1046,1,'Ko Bay Da',NULL,NULL,0),(48,3489389,1046,1,'Ko Bay Da',NULL,NULL,0),(49,3899542,1046,1,'Ko Bay Da',NULL,NULL,0),(50,4306683,1046,1,'Ko Bay Da',NULL,NULL,0),(51,4363361,1046,1,'Ko Bay Da',NULL,NULL,0),(52,4286840,1046,1,'Ko Bay Da',NULL,NULL,0),(53,1365698,1046,1,'Ko Bay Da',NULL,NULL,0),(54,1577586,1046,1,'Ko Say',NULL,NULL,1),(55,1875014,1046,1,'May Than Lwin',NULL,NULL,1),(56,2223794,1046,1,'Available',NULL,NULL,1),(57,3548258,1046,1,'Available',NULL,NULL,1),(58,3213231,1046,1,'Ma Pu Tu',NULL,NULL,1),(59,4468565,1046,1,'U Htun Myint Kyaw',NULL,NULL,1),(60,4084002,1046,1,'Available',NULL,NULL,1),(61,4201878,1046,1,'Ko Bay Da',NULL,NULL,0),(62,4170023,1046,1,'Ma Arrlay',NULL,NULL,1),(63,4499156,1045,1,'John Michael',NULL,3,1);
/*!40000 ALTER TABLE `lotteries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lottery_settings`
--

DROP TABLE IF EXISTS `lottery_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lottery_settings` (
  `setting_id` int(11) NOT NULL AUTO_INCREMENT,
  `setting_name` varchar(255) NOT NULL,
  `setting_value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`setting_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lottery_settings`
--

LOCK TABLES `lottery_settings` WRITE;
/*!40000 ALTER TABLE `lottery_settings` DISABLE KEYS */;
INSERT INTO `lottery_settings` VALUES (1,'Lottery Price','1500 Kyats');
/*!40000 ALTER TABLE `lottery_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `privilege_id` int(11) NOT NULL,
  `banned` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES (1,'superadmin','eugenes11416@gmail.com','123',1,0);
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2022_12_06_070932_create_batches_table',2),(6,'2022_12_06_072053_create_lotteries_table',3),(7,'2022_12_06_072118_create_lottery_settings_table',3),(8,'2022_12_06_072137_create_payments_table',3),(9,'2022_12_06_072152_create_privileges_table',3),(10,'2022_12_06_072203_create_prizes_table',3),(11,'2022_12_06_072213_create_results_table',3),(12,'2022_12_06_072222_create_winners_table',4),(13,'2014_10_12_200000_add_two_factor_columns_to_users_table',5),(14,'2022_12_07_082619_create_sessions_table',6),(15,'2022_12_06_202843_create_students_table',7);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_method` varchar(255) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
INSERT INTO `payments` VALUES (1,'Wave Pay'),(2,'K Pay'),(3,'Cash');
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `privileges`
--

DROP TABLE IF EXISTS `privileges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `privileges` (
  `privilege_id` int(11) NOT NULL AUTO_INCREMENT,
  `privilege_level` varchar(255) NOT NULL,
  PRIMARY KEY (`privilege_id`),
  UNIQUE KEY `privilege_level` (`privilege_level`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `privileges`
--

LOCK TABLES `privileges` WRITE;
/*!40000 ALTER TABLE `privileges` DISABLE KEYS */;
INSERT INTO `privileges` VALUES (2,'Admin'),(3,'Branch Admin'),(1,'Super Admin'),(4,'User');
/*!40000 ALTER TABLE `privileges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prizes`
--

DROP TABLE IF EXISTS `prizes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prizes` (
  `prize_id` int(11) NOT NULL,
  `prize_name` varchar(255) NOT NULL,
  PRIMARY KEY (`prize_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prizes`
--

LOCK TABLES `prizes` WRITE;
/*!40000 ALTER TABLE `prizes` DISABLE KEYS */;
INSERT INTO `prizes` VALUES (1,'First Prize'),(2,'Second Prize'),(3,'Third Prize'),(4,'Jackpot Prizes'),(5,'Lucky Prizes'),(6,'Gift Prizes'),(7,'Consolation Prizes'),(8,'Participation Prizes'),(9,'2D Delight Prizes');
/*!40000 ALTER TABLE `prizes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `results` (
  `result_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `prize_id` int(11) NOT NULL,
  `result_lottery_no` int(11) NOT NULL,
  PRIMARY KEY (`result_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `results`
--

LOCK TABLES `results` WRITE;
/*!40000 ALTER TABLE `results` DISABLE KEYS */;
INSERT INTO `results` VALUES (4,1044,1,2587287),(5,1044,2,2326208),(6,1044,3,2267862),(7,1044,4,1052694),(8,1044,4,1149820),(9,1044,4,1445829),(10,1044,4,1460600),(11,1044,4,1543174),(12,1044,4,1684933),(13,1044,4,3015924),(14,1044,4,3126430),(15,1044,4,3256537),(16,1044,4,3763073),(17,1044,5,1066626),(18,1044,5,1086134),(19,1044,5,1196032),(20,1044,5,2398612),(21,1044,5,2513965),(22,1044,5,2910969),(23,1044,5,3245022),(24,1044,5,3610916),(25,1044,5,3829575),(26,1044,5,4000576),(27,1044,6,1098366),(28,1044,6,1134663),(29,1044,6,1154325),(30,1044,6,1411408),(31,1044,6,1465996),(32,1044,6,1567747),(33,1044,6,1673606),(34,1044,6,1756823),(35,1044,6,1873925),(36,1044,6,1900395),(37,1044,6,1904167),(38,1044,6,1945736),(39,1044,6,1998817),(40,1044,6,2082419),(41,1044,6,2145504),(42,1044,6,2182955),(43,1044,6,2191093),(44,1044,6,2647579),(45,1044,6,2900082),(46,1044,6,2907273),(47,1044,6,2956597),(48,1044,6,3097845),(49,1044,6,3192555),(50,1044,6,3404414),(51,1044,6,3409913),(52,1044,6,3470441),(53,1044,6,3565075),(54,1044,6,3644247),(55,1044,6,3927855),(56,1044,6,4034945),(57,1044,7,1088616),(58,1044,7,1119120),(59,1044,7,1162960),(60,1044,7,1195988),(61,1044,7,1629166),(62,1044,7,1785925),(63,1044,7,1881512),(64,1044,7,1894426),(65,1044,7,1996244),(66,1044,7,2049289),(67,1044,7,2112179),(68,1044,7,2201160),(69,1044,7,2232140),(70,1044,7,2295178),(71,1044,7,2311944),(72,1044,7,2468876),(73,1044,7,2539181),(74,1044,7,2542162),(75,1044,7,2589207),(76,1044,7,2691448),(77,1044,7,3073816),(78,1044,7,3182114),(79,1044,7,3208311),(80,1044,7,3239581),(81,1044,7,3560392),(82,1044,7,3816295),(83,1044,7,3820891),(84,1044,7,4128459),(85,1044,7,4136859),(86,1044,7,4331606),(87,1044,8,1097282),(88,1044,8,1145045),(89,1044,8,1162677),(90,1044,8,1234397),(91,1044,8,1340531),(92,1044,8,1385090),(93,1044,8,1393237),(94,1044,8,1630814),(95,1044,8,1704327),(96,1044,8,1720031),(97,1044,8,1755560),(98,1044,8,1895190),(99,1044,8,1969474),(100,1044,8,1988095),(101,1044,8,2126713),(102,1044,8,2186864),(103,1044,8,2377130),(104,1044,8,2414451),(105,1044,8,2442015),(106,1044,8,2489250),(107,1044,8,2499429),(108,1044,8,2547206),(109,1044,8,2573115),(110,1044,8,2960741),(111,1044,8,3035426),(112,1044,8,3152829),(113,1044,8,3176790),(114,1044,8,3177735),(115,1044,8,3181021),(116,1044,8,3189221),(117,1044,8,3193319),(118,1044,8,3298598),(119,1044,8,3493368),(120,1044,8,3600126),(121,1044,8,3672899),(122,1044,8,3697611),(123,1044,8,3706446),(124,1044,8,3783878),(125,1044,8,3863803),(126,1044,8,3903326),(127,1044,8,3942001),(128,1044,8,3944616),(129,1044,8,3953296),(130,1044,8,3955042),(131,1044,8,3992152),(132,1044,8,4070837),(133,1044,8,4073137),(134,1044,8,4115640),(135,1044,8,4179159),(136,1044,8,4299259),(137,1044,9,5),(138,1044,9,9),(139,1044,9,10),(140,1044,9,17),(141,1044,9,40),(142,1044,9,40),(143,1044,9,41),(144,1044,9,46),(145,1044,9,78),(146,1045,1,3142362),(147,1045,2,4314526),(148,1045,3,3973766),(149,1045,4,1147495),(150,1045,4,1170307),(151,1045,4,1388935),(152,1045,4,1513288),(153,1045,4,1683451),(154,1045,4,1820829),(155,1045,4,2756353),(156,1045,4,2807671),(157,1045,4,3128616),(158,1045,4,3379063),(159,1045,5,1414711),(160,1045,5,1875065),(161,1045,5,2417994),(162,1045,5,2663920),(163,1045,5,2860518),(164,1045,5,2971678),(165,1045,5,3543982),(166,1045,5,3674085),(167,1045,5,3785487),(168,1045,5,4390006),(169,1045,6,1011585),(170,1045,6,1220155),(171,1045,6,1241536),(172,1045,6,1282084),(173,1045,6,1441774),(174,1045,6,1715149),(175,1045,6,1784934),(176,1045,6,2107470),(177,1045,6,2112161),(178,1045,6,2150388),(179,1045,6,2155171),(180,1045,6,2290663),(181,1045,6,2351557),(182,1045,6,2369748),(183,1045,6,2393449),(184,1045,6,2468298),(185,1045,6,2669243),(186,1045,6,2771104),(187,1045,6,3001928),(188,1045,6,3165757),(189,1045,6,3627653),(190,1045,6,3698603),(191,1045,6,3783434),(192,1045,6,3824797),(193,1045,6,3897743),(194,1045,6,4084260),(195,1045,6,4205056),(196,1045,6,4255734),(197,1045,6,4342712),(198,1045,6,4497859),(199,1045,7,1143779),(200,1045,7,1268707),(201,1045,7,1339214),(202,1045,7,1423176),(203,1045,7,1564940),(204,1045,7,1657774),(205,1045,7,1792327),(206,1045,7,1806819),(207,1045,7,2193844),(208,1045,7,2196327),(209,1045,7,2199404),(210,1045,7,2296470),(211,1045,7,2463294),(212,1045,7,2478600),(213,1045,7,2843617),(214,1045,7,2988455),(215,1045,7,3086867),(216,1045,7,3238992),(217,1045,7,3364500),(218,1045,7,3622747),(219,1045,7,3774493),(220,1045,7,3861621),(221,1045,7,3932371),(222,1045,7,3973394),(223,1045,7,4075103),(224,1045,7,4101449),(225,1045,7,4215488),(226,1045,7,4282312),(227,1045,7,4304653),(228,1045,7,4406520),(229,1045,8,1003084),(230,1045,8,1091831),(231,1045,8,1125703),(232,1045,8,1163356),(233,1045,8,1172241),(234,1045,8,1303395),(235,1045,8,1396989),(236,1045,8,1420372),(237,1045,8,1425166),(238,1045,8,1473008),(239,1045,8,1595213),(240,1045,8,1730858),(241,1045,8,1771842),(242,1045,8,1811346),(243,1045,8,1859028),(244,1045,8,1953744),(245,1045,8,2185857),(246,1045,8,2238767),(247,1045,8,2320637),(248,1045,8,2333132),(249,1045,8,2534783),(250,1045,8,2570956),(251,1045,8,2576351),(252,1045,8,2602212),(253,1045,8,2660832),(254,1045,8,2793473),(255,1045,8,3023082),(256,1045,8,3046968),(257,1045,8,3054079),(258,1045,8,3143687),(259,1045,8,3240067),(260,1045,8,3288304),(261,1045,8,3337697),(262,1045,8,3345735),(263,1045,8,3345905),(264,1045,8,3451735),(265,1045,8,3576053),(266,1045,8,3662100),(267,1045,8,3665373),(268,1045,8,3729902),(269,1045,8,3807987),(270,1045,8,3834922),(271,1045,8,3956070),(272,1045,8,4010719),(273,1045,8,4054600),(274,1045,8,4100406),(275,1045,8,4239494),(276,1045,8,4274384),(277,1045,8,4307809),(278,1045,8,4499156),(279,1045,9,6),(280,1045,9,10),(281,1045,9,13),(282,1045,9,26),(283,1045,9,71),(284,1045,9,84),(285,1045,9,91),(286,1045,9,96),(287,1045,9,98);
/*!40000 ALTER TABLE `results` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('aLTgxdjOXhIRbSgYAsUdjpYiHa4905neZbd7QWKD',2,'127.0.0.1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36','YTo2OntzOjY6Il90b2tlbiI7czo0MDoieFNLdGlNZWJ3dmExcVlkN0NobWhWVDBlMXhaTkNtQ2hwZFlEYTRrMCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZGFzaGJvYXJkIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCQxNERGcklBejlGMkNiU2RYd1lkYy51TkkvUE8zMlBWanJ6TWFYLmcxR1NCSVNNR1ZlbWtMbSI7fQ==',1670405481);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'sudo_user','sudouser@sudo.com',NULL,'$2y$10$p0cXnH6qpsKGZZVobJWMs.V8AVftbp/tbOtSR5cbXX4VzvO0h6IHu',NULL,NULL,NULL,NULL,'2022-12-05 20:51:46','2022-12-05 20:51:46'),(2,'Eugene','eugene@singlottery.com',NULL,'$2y$10$14DFrIAz9F2CbSdXwYdc.uNI/PO32PVjrzMaX.g1GSBISMGVemkLm',NULL,NULL,NULL,NULL,'2022-12-07 02:32:20','2022-12-07 02:32:20');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `winners`
--

DROP TABLE IF EXISTS `winners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `winners` (
  `winner_id` int(11) NOT NULL,
  `result_id` int(11) NOT NULL,
  `lottery_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`winner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `winners`
--

LOCK TABLES `winners` WRITE;
/*!40000 ALTER TABLE `winners` DISABLE KEYS */;
/*!40000 ALTER TABLE `winners` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-07 16:11:07
