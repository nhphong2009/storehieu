-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: localhost    Database: storeHieu
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.18.04.1

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (2,'hieunm','hieu123','2019-10-11 02:03:47','2019-10-11 02:03:50'),(3,'huonglv','huong123','2019-10-11 02:04:11','2019-10-11 02:04:13'),(4,'huannd','huan123','2019-10-11 02:04:29','2019-10-11 02:04:32');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attribute_products`
--

DROP TABLE IF EXISTS `attribute_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attribute_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `attribute_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attribute_products`
--

LOCK TABLES `attribute_products` WRITE;
/*!40000 ALTER TABLE `attribute_products` DISABLE KEYS */;
INSERT INTO `attribute_products` VALUES (3,2,1,'Intel'),(5,3,1,'Core i5-3570'),(6,4,1,' Ivy Bridge'),(7,5,1,'3.40 GHz ~ 3.80 GHz'),(8,6,1,'DDR3 1333/1600'),(9,7,1,'4'),(10,8,1,'4'),(11,9,1,'6 MB SmartCache'),(12,10,1,'77 W'),(13,2,2,'AMD'),(14,3,2,'AMD Ryzen™ 7 3700X'),(15,4,2,'AMD Ryzen™ Processors'),(16,5,2,'3.6GHz ~ 4.4GHz'),(17,6,2,'DDR4 3200MHz'),(18,7,2,'8'),(19,8,2,'16'),(20,9,2,'32MB'),(21,10,2,'65 W'),(22,2,3,'Intel'),(23,3,3,'Core i5-3470'),(24,4,3,' Ivy Bridge'),(25,5,3,'3.20 GHz ~ 3.60 GHz'),(26,6,3,'DDR3 1333/1600'),(27,7,3,'4'),(28,8,3,'4'),(29,9,3,'6 MB SmartCache'),(30,10,3,'77 W'),(31,2,4,'Intel'),(32,3,4,'Core i7-3770'),(33,4,4,'Ivy Bridge'),(34,5,4,'3.40 GHz ~ 3.90 GHz'),(35,6,4,'DDR3 1333/1600'),(36,7,4,'4'),(37,8,4,'8'),(38,9,4,'8 MB SmartCache'),(39,10,4,'77 W'),(40,2,5,'Intel'),(41,3,5,'Core i3-9100F'),(42,4,5,' Coffee Lake'),(43,5,5,'3.60 GHz ~ 4.20 GHz'),(44,6,5,'DDR4-2400'),(45,7,5,'4'),(46,8,5,'4'),(47,9,1,'6 MB Intel® Smart Cache'),(48,10,5,'65 W'),(49,2,6,'Intel'),(50,3,6,'Core i5-9400F'),(51,4,6,' Coffee Lake'),(52,5,6,'2.90 GHz ~ 4.10 GHz'),(53,6,6,'DDR4-2666'),(54,7,6,'6'),(55,8,6,'6'),(56,9,6,'9 MB Intel® Smart Cache'),(57,10,6,'65 W'),(58,2,7,'Intel'),(59,3,7,'Core i9-9900K'),(60,4,7,' Coffee Lake'),(61,5,7,'3.60 GHz ~ 5.00 GHz'),(62,6,7,'DDR4-2666'),(63,7,7,'8'),(64,8,7,'16'),(65,9,7,'16 MB Intel® Smart Cache'),(66,10,7,'95 W'),(67,2,8,'Intel'),(68,3,8,'Pentium G5400'),(69,4,8,' Coffee Lake'),(70,5,8,'3.70 GHz'),(71,6,8,'DDR4-2400'),(72,7,8,'2'),(73,8,8,'4'),(74,9,8,'4 MB SmartCache'),(75,10,8,'58 W'),(76,11,7,'Mở'),(77,11,6,'Mở'),(78,11,20,'Mở'),(79,11,25,'Mở'),(81,11,11,'Mở'),(82,12,1,'Mở'),(83,12,3,'Mở'),(84,12,4,'Mở'),(85,12,13,'Mở'),(86,12,24,'Mở'),(87,13,20,'Mở'),(88,13,15,'Mở'),(89,13,28,'Mở'),(90,13,29,'Mở'),(91,13,30,'Mở');
/*!40000 ALTER TABLE `attribute_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attributes`
--

DROP TABLE IF EXISTS `attributes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attributes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attributes`
--

LOCK TABLES `attributes` WRITE;
/*!40000 ALTER TABLE `attributes` DISABLE KEYS */;
INSERT INTO `attributes` VALUES (2,'001','Hãng sản xuất','2019-10-13 11:42:52','2019-10-13 12:03:07'),(3,'002','Chủng loại','2019-10-13 13:09:24','2019-10-13 13:09:24'),(4,'003','Dòng CPU','2019-10-13 13:09:38','2019-10-13 13:09:38'),(5,'004','Tốc độ','2019-10-13 13:09:47','2019-10-13 13:13:46'),(6,'005','Bus Ram hỗ trợ','2019-10-13 13:14:28','2019-10-13 13:14:28'),(7,'006','Nhân CPU','2019-10-13 13:14:41','2019-10-13 13:14:41'),(8,'007','Luồng CPU','2019-10-13 13:14:56','2019-10-13 13:14:56'),(9,'008','Bộ nhớ đệm','2019-10-13 13:15:10','2019-10-13 13:15:10'),(10,'009','Điện áp tiêu thụ tối đa','2019-10-13 13:15:24','2019-10-13 13:15:24'),(11,'010','New Product','2019-10-14 06:35:14','2019-10-14 06:35:14'),(12,'011','Top Selling','2019-10-14 06:35:32','2019-10-14 06:35:32'),(13,'012','Feature Product','2019-10-14 06:35:56','2019-10-14 06:35:56');
/*!40000 ALTER TABLE `attributes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` tinyint(4) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Home',0,'home','Trang chủ','2019-10-11 14:54:48','2019-10-11 14:55:58'),(2,'CPU',0,'cpu','Chíp CPU','2019-10-12 03:22:15','2019-10-12 03:22:15'),(3,'Mainboard',0,'mainboard','Bo mạch chủ','2019-10-13 13:50:27','2019-10-13 13:50:27'),(4,'VGA',0,'vga','Card màn hình','2019-10-14 03:50:05','2019-10-14 03:50:05'),(5,'Ram',0,'ram','Bộ nhớ trong','2019-10-14 04:01:28','2019-10-14 04:01:28'),(6,'PSU',0,'psu','Nguồn máy tính','2019-10-14 04:19:54','2019-10-14 04:19:54'),(8,'SSD',0,'ssd','Ổ cứng SSD','2019-10-14 04:25:58','2019-10-14 07:04:46'),(9,'HDD',0,'hdd','Ổ cứng HDD','2019-10-14 04:26:29','2019-10-14 07:04:52');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'Nguyen Huu Phong','phong147x@gmail.com',125478520,'I want join to your team','2019-10-15 10:02:23','2019-10-15 10:02:23');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,'hieunm','hieu123','Nguyễn Minh Hiếu','hieu123@gmail.com',124578541,'Hà Nội','2019-10-11 15:18:25','2019-10-11 15:18:25'),(2,'huonglv','huong123','Lê Văn Hưởng','huong123@gmail.com',987654321,'Hà Nội','2019-10-11 15:23:14','2019-10-11 15:27:56'),(3,'huannd','huan123','Nguyễn Duy Huân','huan123@gmail.com',879654103,'Hà Nội','2019-10-11 15:28:56','2019-10-11 15:28:56');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` tinyint(4) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_details`
--

LOCK TABLES `order_details` WRITE;
/*!40000 ALTER TABLE `order_details` DISABLE KEYS */;
INSERT INTO `order_details` VALUES (12,13,6,1,3600000,'2019-10-23 02:54:23','2019-10-23 02:54:23'),(13,13,13,1,2200000,'2019-10-23 02:54:23','2019-10-23 02:54:23'),(14,14,4,1,2200000,'2019-10-23 03:48:10','2019-10-23 03:48:10'),(15,14,17,1,3700000,'2019-10-23 03:48:10','2019-10-23 03:48:10'),(16,14,28,1,1850000,'2019-10-23 03:48:10','2019-10-23 03:48:10'),(17,14,30,1,1290000,'2019-10-23 03:48:10','2019-10-23 03:48:10');
/*!40000 ALTER TABLE `order_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` int(11) DEFAULT NULL,
  `customer_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_phone` int(11) DEFAULT NULL,
  `customer_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (13,3375,'Nguyễn Minh Hiếu',124578541,'hieu123@gmail.com','Hà Nội','Đang chờ','2019-10-23 02:54:23','2019-10-23 02:54:23'),(14,5520,'Nguyễn Minh Hiếu',124578541,'hieu123@gmail.com','Hà Nội','Đang chờ','2019-10-23 03:48:10','2019-10-23 05:04:37');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_images`
--

DROP TABLE IF EXISTS `product_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_images`
--

LOCK TABLES `product_images` WRITE;
/*!40000 ALTER TABLE `product_images` DISABLE KEYS */;
INSERT INTO `product_images` VALUES (3,10,'3.jpg','2019-10-14 03:38:28','2019-10-14 03:40:21'),(4,10,'2.jpg','2019-10-14 03:38:35','2019-10-14 03:38:35'),(5,23,'ram-asgard-loki-8g-bus-2666-rgb-2.jpg','2019-10-14 04:42:48','2019-10-14 04:42:48'),(6,22,'ram-kingson-8g-hyper-x-2666-nhap-khau-2.jpg','2019-10-14 04:43:30','2019-10-14 04:43:30'),(9,1,'10-14-2019_17_45_25i5-3570.jpg','2019-10-14 10:45:25','2019-10-14 10:45:25'),(10,2,'10-14-2019_17_45_47R7-3700X.jpg','2019-10-14 10:45:47','2019-10-14 10:45:47'),(11,3,'10-14-2019_17_46_00i5-3470.jpg','2019-10-14 10:46:00','2019-10-14 10:46:00'),(12,4,'10-14-2019_17_46_08i7-3770.jpg','2019-10-14 10:46:08','2019-10-14 10:46:08'),(13,7,'10-14-2019_17_46_19i9-9900K.jpg','2019-10-14 10:46:19','2019-10-15 10:36:54'),(15,6,'10-14-2019_17_46_29i5-9400F.jpg','2019-10-14 10:46:29','2019-10-14 10:46:29'),(16,5,'10-14-2019_17_47_15i3-9100F.jpg','2019-10-14 10:47:15','2019-10-14 10:47:15'),(17,8,'10-14-2019_17_47_24G5400.jpg','2019-10-14 10:47:24','2019-10-14 10:47:24'),(18,9,'10-14-2019_17_47_48msi-b450m-pro-vdh-plus.png','2019-10-14 10:47:48','2019-10-14 10:47:48'),(19,10,'10-14-2019_17_48_04main-msi-b360-pro-f-main-bitcoin-no-suport-nvme.jpg','2019-10-14 10:48:04','2019-10-14 10:48:04'),(20,11,'10-14-2019_17_48_17mainboard-asrock-b365-phantom-gaming-4-atx-giam-150k-build-theo-case-con-2-550k.png','2019-10-14 10:48:17','2019-10-14 10:48:17'),(21,12,'10-14-2019_17_48_33Mainboard-GIGABYTE-Z390-AORUS-ELITE-Socket-LGA1151-ATX.jpg','2019-10-14 10:48:33','2019-10-14 10:48:33'),(22,13,'10-14-2019_17_48_45msi-mag-b365m-mortar.jpg','2019-10-14 10:48:45','2019-10-14 10:48:45'),(23,14,'10-14-2019_17_48_55mainboard-gigabyte-z390-aorus-pro-wifi.jpg','2019-10-14 10:48:55','2019-10-14 10:48:55'),(24,15,'10-14-2019_17_49_04-vga-onboard-build-kem-case-giam-100k-con-2-150k.png','2019-10-14 10:49:04','2019-10-14 10:49:04'),(25,16,'10-14-2019_17_49_21vga-card-gigabyte-gtx-1660-ti-oc-6gb-n166toc-6gd.jpg','2019-10-14 10:49:21','2019-10-14 10:49:21'),(26,16,'10-14-2019_17_49_21vga-card-gigabyte-gtx-1660-ti-oc-6gb-n166toc-6gd.jpg','2019-10-14 10:49:21','2019-10-14 10:49:21'),(27,17,'10-14-2019_17_49_32vga-zotac-gtx-1060-3g-gddr5-amp-core-edition.jpg','2019-10-14 10:49:32','2019-10-14 10:49:32'),(28,18,'10-14-2019_17_49_47vga-card-msi-rx-580-gaming-x-8g.jpg','2019-10-14 10:49:47','2019-10-14 10:49:47'),(29,19,'10-14-2019_17_50_05vga-card-gigabyte-rx570-gaming-4gd-mi-2nd.jpg','2019-10-14 10:50:05','2019-10-14 10:50:05'),(30,20,'10-14-2019_17_50_17vga-inno3d-geforce-rtx-2070-super-ichill-x3-ultra-giam-700k-khi-build-kem-case-.jpg','2019-10-14 10:50:17','2019-10-14 10:50:17'),(31,21,'10-14-2019_17_50_29vga-msi-gtx-1050ti-4gt-ocv1.png','2019-10-14 10:50:29','2019-10-14 10:50:29'),(32,22,'10-14-2019_17_50_53ram-kingson-8g-hyper-x-2666-nhap-khau.jpg','2019-10-14 10:50:53','2019-10-14 10:50:53'),(33,23,'10-14-2019_17_51_04ram-asgard-loki-8g-bus-2666-rgb.jpg','2019-10-14 10:51:04','2019-10-14 10:51:04'),(34,24,'10-14-2019_17_51_15ram-corsair-vengeance-rgb-pro-16gb-2x8gb-ddr4-3000mhz.png','2019-10-14 10:51:15','2019-10-14 10:51:15'),(35,25,'10-14-2019_17_51_24g-skill-trident-z-rgb-32gb-16gbx2-ddr4-3000ghz-f4-3000c16d-32gtzr.jpg','2019-10-14 10:51:24','2019-10-14 10:51:24'),(36,26,'10-14-2019_17_51_35aerocool-lux-rgb-550w-550w-80-plus-bronze-semi-modular.jpg','2019-10-14 10:51:35','2019-10-14 10:51:35'),(37,27,'10-14-2019_17_51_45nguon-seasonic-650w-s12iii-650-80plus-bronze.jpg','2019-10-14 10:51:45','2019-10-14 10:51:45'),(38,28,'10-14-2019_17_51_53nguon-xigmatek-shogun-g-sj-g750-750w-80-plus-gold-100-tu-dien-nhat-ban.jpg','2019-10-14 10:51:53','2019-10-14 10:51:53'),(39,29,'10-14-2019_17_52_047200-sata-256mb-35-st2000dm008.jpg','2019-10-14 10:52:04','2019-10-14 10:52:04'),(40,30,'10-14-2019_17_52_13ssd-samsung-860-evo-250gb-2-5-inch-sata-iii-mz-76e250bw.jpg','2019-10-14 10:52:13','2019-10-14 10:52:13');
/*!40000 ALTER TABLE `product_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` tinyint(4) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci,
  `description` mediumtext COLLATE utf8_unicode_ci,
  `thumbnail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Intel Core i5-3570','Intel Core i5-3570','intel-core-i5-3570',12,1000000,2,'                                                                                                                                                                                                                                                                                                                                    Bảo hành: 36 tháng                                                                                                                                                                                                                                                                                                ','Chíp i5-3570','i5-3570.jpg','2019-10-12 03:38:08','2019-10-13 13:08:35'),(2,'AMD Ryzen™ 7 3700X','AMD Ryzen™ 7 3700X','amd-ryzen™-7-3700x',5,8600000,2,'Bảo hành 36 tháng','Chíp AMD Ryzen 7 3700X','R7-3700X.jpg','2019-10-13 13:53:57','2019-10-13 13:53:57'),(3,'Intel Core i5-3470','Intel Core i5-3470','intel-core-i5-3470',12,800000,2,'Intel Core i5-3470\r\nSeries: Intel - Core i5\r\nCodename (Tên mã): Intel - Ivy Bridge\r\nSocket type: Intel - Socket 1155\r\nManufacturing Technology ( Công nghệ sản xuất ): 22 nm\r\nCPU Speed (Tốc độ CPU): 3.20GHz\r\nGraphics Frequency (MHz): 0\r\nMax Thermal Design Power (Công suất tiêu thụ tối đa) (W): 77\r\nGIAO HÀNG:\r\n\r\n    Nội thành Hà Nội\r\n\r\nMiễn phí giao hàng với case/ bộ máy tính trong phạm vi 10km.\r\nTừ km 11 trở đi, cửa hàng sẽ tính phí ưu đãi\r\n\r\n    Giao hàng ở Tỉnh/Toàn quốc\r\n\r\nKH đặt cọc trước phí ship.\r\nNhận ship COD toàn quốc\r\nĐối với linh kiện lẻ, ship COD Bưu Điện.\r\nCase/ Bộ máy tính ship COD qua các nhà xe.','Chíp i5-3470','i5-3470.jpg','2019-10-14 02:23:55','2019-10-14 02:23:55'),(4,'Intel Core i7-3770','Intel Core i7-3770','intel-core-i7-3770',12,2200000,2,'Intel Core i7-3770 (3.4GHz turbo up 3.9GHz, 8MB L3 cache, Socket 1155)\r\n\r\nSeries: Intel - Core i7\r\nCodename (Tên mã): Intel - Ivy Bridge\r\nSocket type: Intel - Socket 1155\r\nManufacturing Technology ( Công nghệ sản xuất ): 22 nm\r\nCPU Speed (Tốc độ CPU): 3.40GHz\r\nGraphics Frequency (MHz): 0\r\nMax Thermal Design Power (Công suất tiêu thụ tối đa) (W):77\r\nGIAO HÀNG:\r\n\r\n    Nội thành Hà Nội\r\n\r\nMiễn phí giao hàng với case/ bộ máy tính trong phạm vi 10km.\r\nTừ km 11 trở đi, cửa hàng sẽ tính phí ưu đãi\r\n\r\n    Giao hàng ở Tỉnh/Toàn quốc\r\n\r\nKH đặt cọc trước phí ship.\r\nNhận ship COD toàn quốc\r\nĐối với linh kiện lẻ, ship COD Bưu Điện.\r\nCase/ Bộ máy tính ship COD qua các nhà xe.','Chíp i7-3770','i7-3770.jpg','2019-10-14 02:39:28','2019-10-14 02:39:28'),(5,'Intel Core i3-9100F','Intel Core i3-9100F','intel-core-i3-9100f',12,2200000,2,'GIAO HÀNG:\r\n\r\n    Nội thành Hà Nội\r\n\r\nMiễn phí giao hàng với case/ bộ máy tính trong phạm vi 10km.\r\nTừ km 11 trở đi, cửa hàng sẽ tính phí ưu đãi\r\n\r\n    Giao hàng ở Tỉnh/Toàn quốc\r\n\r\nKH đặt cọc trước phí ship.\r\nNhận ship COD toàn quốc\r\nĐối với linh kiện lẻ, ship COD Bưu Điện.\r\nCase/ Bộ máy tính ship COD qua các nhà xe.','Chíp i3-9100F','i3-9100F.jpg','2019-10-14 02:43:48','2019-10-14 02:43:48'),(6,'Intel Core i5-9400F','Intel Core i5-9400F','intel-core-i5-9400f',12,3600000,2,'GIAO HÀNG:\r\n\r\n    Nội thành Hà Nội\r\n\r\nMiễn phí giao hàng với case/ bộ máy tính trong phạm vi 10km.\r\nTừ km 11 trở đi, cửa hàng sẽ tính phí ưu đãi\r\n\r\n    Giao hàng ở Tỉnh/Toàn quốc\r\n\r\nKH đặt cọc trước phí ship.\r\nNhận ship COD toàn quốc\r\nĐối với linh kiện lẻ, ship COD Bưu Điện.\r\nCase/ Bộ máy tính ship COD qua các nhà xe.','Chíp i5-9400F','i5-9400F.jpg','2019-10-14 03:10:23','2019-10-14 03:10:23'),(7,'Intel Core i9-9900K','Intel Core i9-9900K','intel-core-i9-9900k',12,12000000,2,'GIAO HÀNG:\r\n\r\n    Nội thành Hà Nội\r\n\r\nMiễn phí giao hàng với case/ bộ máy tính trong phạm vi 10km.\r\nTừ km 11 trở đi, cửa hàng sẽ tính phí ưu đãi\r\n\r\n    Giao hàng ở Tỉnh/Toàn quốc\r\n\r\nKH đặt cọc trước phí ship.\r\nNhận ship COD toàn quốc\r\nĐối với linh kiện lẻ, ship COD Bưu Điện.\r\nCase/ Bộ máy tính ship COD qua các nhà x','Chíp i9-9900K','i9-9900K.jpg','2019-10-14 03:15:53','2019-10-14 03:15:53'),(8,'CPU Pentium G5400','CPU Pentium G5400','cpu-pentium-g5400',12,1350000,2,'                                    GIAO HÀNG:\r\n\r\n    Nội thành Hà Nội\r\n\r\nMiễn phí giao hàng với case/ bộ máy tính trong phạm vi 10km.\r\nTừ km 11 trở đi, cửa hàng sẽ tính phí ưu đãi\r\n\r\n    Giao hàng ở Tỉnh/Toàn quốc\r\n\r\nKH đặt cọc trước phí ship.\r\nNhận ship COD toàn quốc\r\nĐối với linh kiện lẻ, ship COD Bưu Điện.\r\nCase/ Bộ máy tính ship COD qua các nhà xe.                                ','Chíp G5400','G5400.jpg','2019-10-14 03:18:00','2019-10-14 03:22:09'),(9,'MSI B450M Pro VDH Plus','MSI B450M Pro VDH Plus','msi-b450m-pro-vdh-plus',12,2500000,3,'Model Name B450M PRO-VDH PLUS\r\nCPU Support Supports AMD® Ryzen 1st and 2nd Generation/ Ryzen™ with Radeon™ Vega Graphics/ Athlon™ with Radeon™ Vega Graphics Processors for Socket AM4\r\nCPU Socket Socket AM4\r\nChipset AMD® B450 Chipset\r\nGraphics Interface 1 x PCI-E 3.0 x16 slot\r\nDisplay Interface DVI-D, VAG, HDMI – Requires Processor Graphics\r\nMemory Support 4 DIMMs, Dual Channel DDR4 up to 3466+(OC) MHz\r\nExpansion Slots 2 x PCI-E x1 slots\r\nStorage 1 x M.2 slot, 4 x SATA 6Gb/s\r\nUSB ports 6 x USB 3.1 (Gen1) + 8 x USB 2.0\r\nLAN Realtek® 8111H Gigabit LAN\r\nAudio 8-Channel(7.1) HD Audio with Audio Boost','Bo mạch chủ MSI B540M Pro VDH Plus','msi-b450m-pro-vdh-plus.png','2019-10-14 03:21:47','2019-10-14 04:53:14'),(10,'MAIN MSI B360 PRO F','MAIN MSI B360 PRO F (Main Bitcoin No Suport NVME)','main-msi-b360-pro-f-main-bitcoin-no-suport-nvme',12,1500000,3,'EZ Debug LED\r\nUSB 2.0 & PS/2 Combo Ports\r\nDVI-D Port\r\nHDMI Port\r\nUSB 3.1 Gen1 Port\r\n USB 2.0 & LAN Ports\r\nAudio Jacks\r\nDDR4 Boost\r\nOptimized traces and isolated memory circuitry\r\n5 X Power Sync\r\nSupports up to 5 power supply to deiliver power for your motherboard and GPUs.\r\nHeavy plated heatsink \r\nLeading heatsink design, for maximum cooling\r\nPCI-E Steel Slot\r\nProtecting VGA cards against bending\r\nMining LED\r\nHardware PCIE debug LED solution\r\nCoupling Capacitor\r\nDedicate capacitors for each PCI-E slot\r\nAudio Boost\r\nReward your ears with studio grade sound quality.\r\nMining Guard\r\nPower/Reset/Clear CMOS Buttons on Board for managing your mining board without screen on','Bo mạch chủ MAIN MSI B360 PRO F','main-msi-b360-pro-f-main-bitcoin-no-suport-nvme.jpg','2019-10-14 03:23:56','2019-10-14 04:54:07'),(11,'Mainboard Asrock B365 Phantom Gaming 4 ATX','Mainboard Asrock B365 Phantom Gaming 4 ATX ( giảm 150k build theo case còn 2.550k)','mainboard-asrock-b365-phantom-gaming-4-atx-giam-150k-build-theo-case-con-2550k',12,2700000,3,'Supports 9th and 8th Gen Intel® Core™ processors (Socket 1151)\r\nSupports DDR4 2666 MHz\r\n2 PCIe 3.0 x16, 2 PCIe 3.0 x1, 1 M.2 Key E for WiFi\r\nAMD Quad CrossFireX™\r\nGraphics Output Options: HDMI, Display Port\r\n7.1 CH HD Audio (Realtek ALC1200 Audio Codec), Supports DTS Connect\r\n6 SATA3, 1 Ultra M.2 (PCIe Gen3 x4), 1 Ultra M.2 (PCIe Gen3 x4 & SATA3)\r\n2 USB 3.1 Gen2 (Rear Type A+C)\r\n6 USB 3.1 Gen1 (2 Front, 4 Rear)\r\nIntel® Gigabit LAN\r\nASRock Polychrome SYNC','Bo mạch chủ Mainboard Asrock B365 Phantom Gaming 4 ATX','mainboard-asrock-b365-phantom-gaming-4-atx-giam-150k-build-theo-case-con-2-550k.png','2019-10-14 03:43:07','2019-10-14 04:54:37'),(12,'Mainboard GIGABYTE Z390 AORUS ELITE','Mainboard GIGABYTE Z390 AORUS ELITE Socket LGA1151 ATX','mainboard-gigabyte-z390-aorus-elite-socket-lga1151-atx',12,4650000,3,'CPU\r\nSupport for 9th and 8th Generation Intel® Core™ i9 processors/Intel® Core™ i7 processors/Intel® Core™ i5 processors/Intel® Core™ i3 processors/Intel® Pentium® processors/Intel® Celeron® processors in the LGA1151 package\r\nL3 cache varies with CPU\r\n(Please refer “CPU Support List” for more information.)\r\n\r\nChipset\r\nIntel® Z390 Express Chipset\r\nMemory\r\n4 x DDR4 DIMM sockets supporting up to 64 GB of system memory\r\nDual channel memory architecture\r\nSupport for DDR4 4266(O.C.) / 4133(O.C.) / 4000(O.C.) / 3866(O.C.) / 3800(O.C.) / 3733(O.C.) / 3666(O.C.) / 3600(O.C.) / 3466(O.C.) / 3400(O.C.) / 3333(O.C.) / 3300(O.C.) / 3200(O.C.) / 3000(O.C.) / 2800(O.C.) / 2666 / 2400 / 2133 MHz memory modules\r\nSupport for ECC Un-buffered DIMM 1Rx8/2Rx8 memory modules (operate in non-ECC mode)\r\nSupport for non-ECC Un-buffered DIMM 1Rx8/2Rx8/1Rx16 memory modules\r\nSupport for Extreme Memory Profile (XMP) memory modules\r\n(Please refer “Memory Support List” for more information.)\r\n\r\nOnboard Graphics\r\nIntegrated Graphics Processor-Intel® HD Graphics support:\r\n1 x HDMI port, supporting a maximum resolution of 4096×2160@30 Hz\r\n* Support for HDMI 1.4 version and HDCP 2.2.\r\nMaximum shared memory of 1 GB\r\n\r\nAudio\r\nRealtek® ALC1220-VB codec\r\n* The back panel line out jack supports DSD audio.\r\nHigh Definition Audio\r\n2/4/5.1/7.1-channel\r\nSupport for S/PDIF Out\r\nLAN\r\nIntel® GbE LAN chip (10/100/1000 Mbit)\r\nExpansion Slots\r\n1 x PCI Express x16 slot, running at x16 (PCIEX16)\r\n* For optimum performance, if only one PCI Express graphics card is to be installed, be sure to install it in the PCIEX16 slot.\r\n1 x PCI Express x16 slot, running at x4 (PCIEX4)\r\n4 x PCI Express x1 slots\r\n* The PCIEX4 slot shares bandwidth with the PCIEX1_3 slot. When the PCIEX1_3 slot is populated, the PCIEX4 slot operates at up to x2 mode.\r\n(All of the PCI Express slots conform to PCI Express 3.0 standard.)\r\nStorage Interface\r\nChipset:\r\n1 x M.2 connector (Socket 3, M key, type 2242/2260/2280/22110 SATA and PCIe x4/x2 SSD support) (M2A)\r\n1 x M.2 connector (Socket 3, M key, type 2242/2260/2280 SATA and PCIe x4/x2 SSD support) (M2M)\r\n6 x SATA 6Gb/s connectors\r\nSupport for RAID 0, RAID 1, RAID 5, and RAID 10\r\n* Refer to “1-7 Internal Connectors,” for the installation notices for the M.2 and SATA connectors.\r\nIntel® Optane™ Memory Ready\r\n\r\nMulti-Graphics Technology\r\nSupport for AMD Quad-GPU CrossFire™ and 2-Way AMD CrossFire™ technologies\r\nUSB\r\nChipset:\r\n2 x USB 3.1 Gen 2 Type-A ports (red) on the back panel\r\n1 x USB Type-C™ port with USB 3.1 Gen 1 support, available through the internal USB header\r\n6 x USB 3.1 Gen 1 ports (4 ports on the back panel, 2 ports available through the internal USB header)\r\nChipset+2 USB 2.0 Hubs:\r\n\r\n8 x USB 2.0/1.1 ports (4 ports on the back panel, 4 ports available through the internal USB headers)\r\nInternal I/O Connectors\r\n1 x 24-pin ATX main power connector\r\n1 x 8-pin ATX 12V power connector\r\n1 x 4-pin ATX 12V power connector\r\n2 x M.2 Socket 3 connectors\r\n6 x SATA 6Gb/s connectors\r\n1 x CPU fan header\r\n1 x water cooling CPU fan header\r\n3 x system fan/water cooling pump headers\r\n2 x digital LED strip headers\r\n2 x digital LED strip power select jumpers\r\n2 x RGB LED strip headers\r\n1 x front panel header\r\n1 x front panel audio header\r\n1 x USB Type-C™ port, with USB 3.1 Gen 1 support\r\n1 x USB 3.1 Gen 1 header\r\n2 x USB 2.0/1.1 headers\r\n1 x S/PDIF Out header\r\n1 x Trusted Platform Module (TPM) header (2×6 pin, for the GC-TPM2.0_S module only)\r\n1 x Thunderbolt™ add-in card connector\r\n1 x Clear CMOS jumper\r\nBack Panel Connectors\r\n4 x USB 2.0/1.1 ports\r\n1 x HDMI port\r\n4 x USB 3.1 Gen 1 ports\r\n2 x USB 3.1 Gen 2 Type-A ports (red)\r\n1 x RJ-45 port\r\n1 x optical S/PDIF Out connector\r\n5 x audio jacks\r\nI/O Controller\r\niTE® I/O Controller Chip\r\nH/W Monitoring\r\nVoltage detection\r\nTemperature detection\r\nFan speed detection\r\nWater cooling flow rate detection\r\nOverheating warning\r\nFan fail warning\r\nFan speed control\r\n* Whether the fan (pump) speed control function is supported will depend on the fan (pump) you install.\r\nBIOS\r\n2 x 128 Mbit flash\r\nUse of licensed AMI UEFI BIOS\r\nSupport for DualBIOS™\r\nPnP 1.0a, DMI 2.7, WfM 2.0, SM BIOS 2.7, ACPI 5.0\r\nUnique Features\r\nSupport for APP Center\r\n* Available applications in APP Center may vary by motherboard model. Supported functions of each application may also vary depending on motherboard specifications.\r\n3D OSD\r\n@BIOS\r\nAutoGreen\r\nCloud Station\r\nEasyTune\r\nEasy RAID\r\nFast Boot\r\nGame Boost\r\nON/OFF Charge\r\nPlatform Power Management\r\nRGB Fusion\r\nSmart Backup\r\nSmart Keyboard\r\nSmart TimeLock\r\nSmart HUD\r\nSmart Survey\r\nSystem Information Viewer\r\nUSB Blocker\r\nV-Tuner\r\nSupport for Q-Flash\r\nSupport for Xpress Install\r\nBundle Software\r\nNorton® Internet Security (OEM version)\r\ncFosSpeed\r\nOperating System\r\nSupport for Windows 10 64-bit\r\nForm Factor\r\nATX Form Factor; 30.5cm x 24.4cm\r\nRemark\r\nDue to different Linux support condition provided by chipset vendors, please download Linux driver from chipset vendors’ website or 3rd party website.\r\nMost hardware/software vendors may no longer offer drivers to support Win9X/ME/2000/XP. If drivers are available from the vendors, we will update them on the GIGABYTE website.','Bo mạch chủ Mainboard GIGABYTE Z390 AORUS ELITE','Mainboard-GIGABYTE-Z390-AORUS-ELITE-Socket-LGA1151-ATX.jpg','2019-10-14 03:45:17','2019-10-14 04:55:07'),(13,'MSI MAG B365M MORTAR','MSI MAG B365M MORTAR','msi-mag-b365m-mortar',12,2200000,3,'SOCKET	1151\r\nCPU (MAX SUPPORT)	i9\r\nCHIPSET	Intel® B365 Chipset\r\nDDR4 MEMORY	2666/ 2400/ 2133 MHz\r\nMEMORY CHANNEL	Dual\r\nDIMM SLOTS	4\r\nMAX MEMORY (GB)	64\r\nPCI-E X16	1\r\nPCI-E GEN	Gen3\r\nPCI-E X1	2\r\nSATAIII	6\r\nM.2 SLOT	1\r\nRAID	0/1/5/10\r\nTPM (HEADER)	1\r\nLAN	1x Intel® I219-V\r\nUSB 3.1 PORTS (FRONT)	2(Gen1, Type A)\r\nUSB 3.1 PORTS (REAR)	4(Gen1, Type A)\r\nUSB 2.0 PORTS (FRONT)	4\r\nUSB 2.0 PORTS (REAR)	2\r\nSERIAL PORTS(FRONT)	1\r\nPARALLEL PORT(FRONT)	1\r\nAUDIO PORTS (REAR)	Realtek® ALC892 Codec\r\nHDMI	1\r\nDIRECTX	12\r\nFORM FACTOR	Micro ATX\r\nOPERATING SYSTEM	Support for Windows® 10 64-bit','Bo mạch chủ MSI MAG B365M MORTAR','msi-mag-b365m-mortar.jpg','2019-10-14 03:46:50','2019-10-14 04:55:36'),(14,'Mainboard Gigabyte Z390 Aorus Pro','Mainboard Gigabyte Z390 Aorus Pro (Wifi)','mainboard-gigabyte-z390-aorus-pro-wifi',12,5000000,3,'\r\nTên gọi\r\n\r\nGigabyte Z390 Aorus Pro (Wifi)\r\nCPU hỗ trợ\r\n\r\n\r\n- Support for 9th and 8th Generation Intel® Core™ i9 processors/ Intel® Core™ i7 processors/ Intel® Core™ i5 processors/ Intel® Core™ i3 processors/ Intel® Pentium® processors/ Intel® Celeron® processors in the LGA1151 package\r\n\r\n\r\nChipset / Socket\r\n\r\nIntel® Z390\r\n\r\nBộ nhớ (RAM)\r\n\r\n4 x DDR4 DIMM sockets supporting up to 64 GB of system memory\r\nDual channel memory architecture\r\nSupport for DDR4 4133(O.C.) / 4000(O.C.) / 3866(O.C.) / 3800(O.C.) / 3733(O.C.) / 3666(O.C.) / 3600(O.C.) / 3466(O.C.) / 3400(O.C.) / 3333(O.C.) / 3300(O.C.) / 3200(O.C.) / 3000(O.C.) / 2800(O.C.) / 2666 / 2400 / 2133 MHz memory modules\r\nSupport for ECC Un-buffered DIMM 1Rx8/2Rx8 memory modules (operate in non-ECC mode)\r\nSupport for non-ECC Un-buffered DIMM 1Rx8/2Rx8/1Rx16 memory modules\r\nSupport for Extreme Memory Profile (XMP) memory modules\r\nCông nghệ đa GPU\r\n\r\n- Supports NVIDIA® Quad SLI™ and SLI™\r\n- Supports NVIDIA® NVLink™ with dual NVIDIA® GeForce RTX series graphics cards**\r\n\r\nKhe cắm mở rộng\r\n\r\n1 x PCI Express x16 slot, running at x16 (PCIEX16)\r\n* For optimum performance, if only one PCI Express graphics card is to be installed, be sure to install it in the PCIEX16 slot.\r\n1 x PCI Express x16 slot, running at x8 (PCIEX8)\r\n* The PCIEX8 slot shares bandwidth with the PCIEX16 slot. When the PCIEX8 slot is populated, the PCIEX16 slot operates at up to x8 mode.\r\n1 x PCI Express x16 slot, running at x4 (PCIEX4)\r\n3 x PCI Express x1 slots\r\n(All of the PCI Express slots conform to PCI Express 3.0 standard.)\r\n1 x M.2 Socket 1 connector for an Intel® CNVi wireless module (CNVI)\r\nx M.2 connector (Socket 3, M key, type 2242/2260/2280/22110 SATA and PCIe x4/x2 SSD support) (M2A)\r\n1 x M.2 connector (Socket 3, M key, type 2242/2260/2280 SATA and PCIe x4/x2 SSD support, prepared for Intel® Hybrid SSD) (M2M)\r\n6 x SATA 6Gb/s connectors\r\nSupport for RAID 0, RAID 1, RAID 5, and RAID 10\r\n* Refer to \"1-8 Internal Connectors,\" for the installation notices for the M.2 and SATA connectors\r\nLAN / Wireless\r\n\r\nIntel® CNVi interface 802.11a/b/g/n/ac, supporting 2.4/5 GHz Dual-Band\r\nBLUETOOTH 5\r\nSupport for 11ac 160 MHz wireless standard and up to 1.73 Gbps data rate\r\n* Actual data rate may vary depending on environment and equipment.\r\nIntel® GbE LAN chip (10/100/1000 Mbit)\r\nÂm thanh\r\n\r\n- 7.1 CH HD Audio with Content Protection (Realtek ALC1220 Audio Codec)\r\n\r\nCổng kết nối (Internal)\r\n\r\n1 x 24-pin ATX main power connector\r\n1 x 8-pin ATX 12V power connector\r\n1 x 4-pin ATX 12V power connector\r\n1 x CPU fan header\r\n1 x water cooling CPU fan header\r\n4 x system fan headers\r\n2 x system fan/water cooling pump headers\r\n2 x digital LED strip headers\r\n2 x digital LED strip power select jumpers\r\n2 x RGB LED strip headers\r\n6 x SATA 6Gb/s connectors\r\n2 x M.2 Socket 3 connectors\r\n1 x front panel header\r\n1 x front panel audio header\r\n1 x S/PDIF Out header\r\n1 x USB Type-C™ port, with USB 3.1 Gen 1 support\r\n1 x USB 3.1 Gen 1 header\r\n2 x USB 2.0/1.1 headers\r\n1 x Thunderbolt™ add-in card connector\r\n1 x Trusted Platform Module (TPM) header (2x6 pin, for the GC-TPM2.0_S module only)\r\n1 x Clear CMOS jumper\r\n2 x temperature sensor headers\r\n \r\n\r\nCổng kết nối (Back Panel)\r\n\r\n4 x USB 2.0/1.1 ports\r\n2 x SMA antenna connectors (2T2R)\r\n1 x HDMI port\r\n1 x USB Type-C™ port, with USB 3.1 Gen 2 support\r\n2 x USB 3.1 Gen 2 Type-A ports (red)\r\n3 x USB 3.1 Gen 1 ports\r\n1 x RJ-45 port\r\n1 x optical S/PDIF Out connector\r\n5 x audio jacks\r\nCông nghệ độc quyền\r\n\r\nSupport for APP Center\r\n* Available applications in APP Center may vary by motherboard model. Supported functions of each application may also vary depending on motherboard specifications.\r\n3D OSD\r\n@BIOS\r\nAutoGreen\r\nCloud Station\r\nEasyTune\r\nEasy RAID\r\nFast Boot\r\nGame Boost\r\nON/OFF Charge\r\nPlatform Power Management\r\nRGB Fusion\r\nSmart Backup\r\nSmart Keyboard\r\nSmart TimeLock\r\nSmart HUD\r\nSystem Information Viewer\r\nSmart Survey\r\nUSB Blocker\r\nSupport for Q-Flash\r\nSupport for Xpress Install\r\nPhụ kiện đi kèm\r\n\r\n- Quick Installation Guide, Support CD, I/O Shield\r\n\r\nHệ điều hành khuyến nghị\r\n\r\n• Windows® 10 64-bit\r\n\r\nChuẩn kích cỡ\r\n\r\n• ATX Form Factor','Bo mạch chủ Mainboard Gigabyte Z390 Aorus Pro','mainboard-gigabyte-z390-aorus-pro-wifi.jpg','2019-10-14 03:48:08','2019-10-14 04:56:16'),(15,'Main Asrock B450M Steel Legend','Main Asrock B450M Steel Legend (Chipset AMD B450/ Socket AM4/ VGA onboard) BUILD KÈM CASE GIẢM 100K CÒN 2.150K','main-asrock-b450m-steel-legend-chipset-amd-b450-socket-am4-vga-onboard-build-kem-case-giam-100k-con-2150k',12,2250000,3,'Sản phẩm	Bo mạch chủ\r\nTên Hãng	Asrock\r\nModel	B450M Steel Legend\r\nSocket	AM4\r\nHỗ trợ CPU	Supports AMD Socket AM4\r\nChipset	AMD B450\r\nHỗ trợ RAM	4 x DDR4 DIMM. AMD Ryzen series CPUs (Pinnacle Ridge) support DDR4 3533+(OC) / 3200(OC) / 2933(OC) / 2667/2400/2133 ECC & non-ECC, un-buffered memory. Max 64Gb\r\nCạc đồ họa	VGA onboard\r\nÂm thanh	7.1 CH HD Audio with Content Protection (Realtek ALC892 Audio Codec)\r\nCạc mạng	Realtek RTL8111H. Gigabit LAN 10/100/1000 Mb/s\r\nKhe cắm trong	1 x PCI Express 3.0 x16 Slot (PCIE2: x16 mode), 1 x PCI Express 2.0 x16 Slot (PCIE3: x4 mode), 1 x PCI Express 2.0 x1 Slot, 4 x SATA3, 1 x Ultra M.2, 1 x M.2. Support RAID 0, 1, 10\r\nCổng giao tiếp ngoài	1 x PS/2, 1 x DisplayPort 1.2, 1 x HDMI, 1 x Optical SPDIF Out, 2 x USB 2.0, 1 x USB 3.1 Gen2 Type-A, 1 x USB 3.1 Gen2 Type-C, 4 x USB 3.1.\r\nKích thước	mATX\r\nTính năng khác	AMD Quad CrossFireX. Dual M.2 For SSD. Dual USB 3.1 Gen2 (Type-A + Type-C). PREMIUM 60A POWER CHOKE. PCI-E STEEL SLOT. RULE YOUR OWN LIGHTING WAY - POLYCHROME RGB.\r\nPhụ kiện kèm theo	Sách, đĩa, cáp SATA, …','Bo mạch chủ Main Asrock B450M Steel Legend','-vga-onboard-build-kem-case-giam-100k-con-2-150k.png','2019-10-14 03:49:36','2019-10-14 04:56:46'),(16,'Vga Card Gigabyte GTX 1660 Ti OC - 6GB','Vga Card Gigabyte GTX 1660 Ti OC - 6GB (N166TOC-6GD)','vga-card-gigabyte-gtx-1660-ti-oc-6gb-n166toc-6gd',12,7300000,4,'Gigabyte GeForce GTX 1660 Ti OC 6GB (GV-N166TOC-6GD)\r\n\r\n- Dung lượng bộ nhớ: 6GB GDDR6\r\n\r\n- Core Clock: 1800 MHz (Reference card is 1770 MHz)\r\n\r\n- Băng thông: 192 bit\r\n\r\n- Kết nối: DisplayPort 1.4 *3/HDMI 2.0b *1\r\n\r\n- Nguồn yêu cầu: 450W','Card màn hình Vga Card Gigabyte GTX 1660 Ti OC - 6GB','vga-card-gigabyte-gtx-1660-ti-oc-6gb-n166toc-6gd.jpg','2019-10-14 03:51:44','2019-10-14 04:57:16'),(17,'VGA Zotac GTX 1060 3G GDDR5 AMP Core Edition','VGA Zotac GTX 1060 3G GDDR5 AMP Core Edition','vga-zotac-gtx-1060-3g-gddr5-amp-core-edition',12,3700000,4,'\r\nHãng sản xuất\r\n\r\nZOTAC\r\n\r\nGPU\r\n\r\n GeForce® GTX 1060 3GB\r\n\r\n Bộ nhớ\r\n\r\n 3GB GDDR5\r\n\r\n Bus bộ nhớ\r\n\r\n 192-bit\r\n\r\n Xung cơ bản\r\n\r\n 1582 Mhz\r\n\r\n Xung Boost\r\n\r\n 1797 Mhz \r\n\r\n DirectX\r\n\r\n 12\r\n\r\n CUDA CORE\r\n\r\n 1152 đơn vị\r\n\r\n Xung nhịp bộ nhớ\r\n\r\n 8 GHz\r\n\r\n Khe cắm\r\n\r\n PCI Express x16 3.0\r\n\r\n DisplayPort 1.4\r\n\r\n 3\r\n\r\n HDMI 2.0b\r\n\r\n 1\r\n\r\n DVI\r\n\r\n 1\r\n\r\n Số màn hình tối đa\r\n\r\n 4\r\n\r\n Yêu cầu nguồn phụ\r\n\r\n 6 pin\r\n\r\n Điện tiêu thụ\r\n\r\n 120W\r\n\r\n Nguồn yêu cầu\r\n\r\n 400W CST\r\n\r\n Kích thước card mm\r\n\r\n 206x111.15\r\n\r\n SLI\r\n\r\n Không','Card màn hình VGA Zotac GTX 1060 3G GDDR5 AMP Core Edition','vga-zotac-gtx-1060-3g-gddr5-amp-core-edition.jpg','2019-10-14 03:55:23','2019-10-14 04:57:40'),(18,'Vga Card MSI RX 580 GAMING X 8G','Vga Card MSI RX 580 GAMING X 8G','vga-card-msi-rx-580-gaming-x-8g',12,3200000,4,'\r\nMemory\r\n\r\n8GB GDDR5\r\n\r\nGraphics Processing Unit\r\n\r\nRadeon™ RX 580\r\n\r\nInterface\r\n\r\nPCI Express x16\r\n\r\nBoost / Base Core Clock\r\n\r\n1393 MHz (OC Mode)\r\n1380 MHz (Gaming Mode)\r\n1340 MHz (Silent Mode)\r\n\r\nMemory Interface\r\n\r\n256-bit\r\n\r\nMemory Clock Speed (MHz)\r\n\r\n8100 MHz (OC Mode)\r\n8000 MHz (Gaming / Silent Mode)\r\n\r\nOutput\r\n\r\nDisplayPort x 2 / HDMI x 2 / DL-DVI-D\r\n\r\nVirtual Reality Ready\r\n\r\nY\r\n\r\nMaximum Displays\r\n\r\n4\r\n\r\nHDCP Support\r\n\r\nY\r\n\r\nDirectX Version Support\r\n\r\n12\r\n\r\nOpenGL Version Support\r\n\r\n4.5\r\n\r\nMulti-GPU Technology\r\n\r\nCrossfire™, 2-Way\r\n\r\nCard Dimension(mm)\r\n\r\n276 x 140 x 42 mm\r\n\r\nCard Weight (g)\r\n\r\n978 g / 1571 g\r\n\r\nRecommended PSU (W)\r\n\r\n500 W\r\n\r\nPower Connectors\r\n\r\n8-pin x 1',' Card màn hình Vga Card MSI RX 580 GAMING X 8G','vga-card-msi-rx-580-gaming-x-8g.jpg','2019-10-14 03:56:53','2019-10-14 04:58:03'),(19,'Vga Card Gigabyte RX570 GAMING - 4GD-MI 2ND','Vga Card Gigabyte RX570 GAMING - 4GD-MI 2ND','vga-card-gigabyte-rx570-gaming-4gd-mi-2nd',12,1550000,4,'- Xung nhân: 1244MHz/1255MHz\r\n- Stream Processor: 2048\r\n- Tiến trình: 14nm\r\n- Dung lượng bộ nhớ: 4GB GDDR5\r\n- Nguồn yêu cầu tối thiểu: 400W\r\n- Cổng kết nối: Dual-link DVI-D / HDMI 2.0 / Display Port 1.4','Card màn hình Vga Card Gigabyte RX570 GAMING - 4GD-MI 2ND','vga-card-gigabyte-rx570-gaming-4gd-mi-2nd.jpg','2019-10-14 03:57:59','2019-10-14 04:58:29'),(20,'VGA INNO3D GEFORCE RTX 2070 SUPER ICHILL X3 ULTRA','VGA INNO3D GEFORCE RTX 2070 SUPER ICHILL X3 ULTRA( Giảm 700K khi build kèm Case )','vga-inno3d-geforce-rtx-2070-super-ichill-x3-ultra-giam-700k-khi-build-kem-case',12,14600000,4,'Nền tảng\r\nCard đồ hoạ\r\n- Nhân CUDA: 2.560\r\n- Xung nhịp boost: 1.815 MHz\r\n- Hỗ trợ độ phân giải tối đa: 7.680 x 4.320\r\nLưu trữ\r\nBộ nhớ trong\r\n- Xung bộ nhớ: 14 Gbps\r\n- Bộ nhớ: 8 GB GDDR6\r\n- Giao tiếp bộ nhớ: 256-bit\r\n- Băng thông bộ nhớ: 448 GB/s\r\nPin\r\nNguồn\r\n- Nguồn đề xuất: 650 W\r\n- Cung cấp nguồn phụ: 8-pin + 8-pin\r\nTính năng\r\nBảo mật\r\nHDCP 2.2\r\nKhác\r\n- Real-Time Ray Tracing\r\n- Nvidia GeForce Experience\r\n- Nvidia Ansel\r\n- Nvidia Highlights\r\n- Nvidia G-SYNC Ready\r\n- Game Ready Drivers\r\n- Microsoft DirectX 12\r\n- Vulkan API\r\n- OpenGL 4.5\r\n- PCIe 3.0 x 16\r\n- Tương thích Windows 7, 10, Linux, FreeBSDx86\r\n- Hỗ trợ đa màn hình\r\nKết nối\r\nHDMI\r\n2.0b x 1\r\nKết nối khác\r\nDisplayPort 1.4 x 3','Card màn hình VGA INNO3D GEFORCE RTX 2070 SUPER ICHILL X3 ULTRA','vga-inno3d-geforce-rtx-2070-super-ichill-x3-ultra-giam-700k-khi-build-kem-case-.jpg','2019-10-14 03:59:40','2019-10-14 04:58:54'),(21,'Vga MSI GTX 1050Ti 4GT OCV1','Vga MSI GTX 1050Ti 4GT OCV1','vga-msi-gtx-1050ti-4gt-ocv1',12,3600000,4,'\r\nMô tả chi tiết  \r\n\r\nModel Name\r\n\r\nGeForce® GTX 1050 Ti 4GT OCV1\r\n\r\nGraphics Processing Unit\r\n\r\nNVIDIA® GeForce® GTX 1050 Ti\r\n\r\nInterface\r\n\r\nPCI Express 3.0 x16\r\n\r\nCore Name\r\n\r\nGP107-400\r\n\r\nCores\r\n\r\n768 Units\r\n\r\nCore Clocks\r\n\r\n1455 MHz / 1341 MHz\r\n\r\nMemory Clock Speed\r\n\r\n7008 MHz\r\n\r\nMemory\r\n\r\n4GB GDDR5\r\n\r\nMemory Bus\r\n\r\n128-bit\r\n\r\nOutput\r\n\r\nDisplayPort / HDMI / DL-DVI-D\r\n\r\nPower consumption\r\n\r\n75 W\r\n\r\nRecommended PSU\r\n\r\n300 W\r\n\r\nCard Dimension(mm)\r\n\r\n215 x 112 x 38 mm\r\n\r\nWeight (Card / Package)\r\n448 g / 788 g','Card màn hình Vga MSI GTX 1050Ti 4GT OCV1','vga-msi-gtx-1050ti-4gt-ocv1.png','2019-10-14 04:01:01','2019-10-14 04:59:17'),(22,'RAM KINGSON 8G HYPER X 2666','RAM KINGSON 8G HYPER X 2666 - Nhập Khẩu','ram-kingson-8g-hyper-x-2666-nhap-khau',12,840000,5,'Xuất xứ :China\r\n\r\nDung lượng\r\n\r\n1 x 8GB\r\n\r\nThế hệ DDR4\r\n\r\nBus 2666MHz\r\n\r\nTiming 19\r\n\r\nKhông có chế độ XMP\r\n\r\nBảo hành 36 tháng 1 đổi 1 trong thời gian bảo hành','Bộ nhớ trong RAM KINGSON 8G HYPER X 2666','ram-kingson-8g-hyper-x-2666-nhap-khau.jpg','2019-10-14 04:06:04','2019-10-14 05:02:57'),(23,'RAM Asgard LOKI 8G bus 2666','RAM Asgard LOKI 8G bus 2666 RGB','ram-asgard-loki-8g-bus-2666-rgb',12,1050000,5,'Hãng sản xuất\r\n\r\nAsgard\r\n\r\nModel\r\n\r\nVMA42UG-MEC1U2AW1\r\n\r\nChuẩn\r\n\r\nDDR4\r\n\r\nDung lượng\r\n\r\n8GB\r\n\r\nBus\r\n\r\n2666Mhz\r\n\r\nĐiện áp\r\n\r\n1.2V\r\n\r\nĐộ trễ Cas\r\n\r\n17-17-17-39\r\n\r\nLED	\r\nRGB\r\n\r\nTản nhiệt\r\n\r\nCó','Bộ nhớ trong RAM Asgard LOKI 8G bus 2666','ram-asgard-loki-8g-bus-2666-rgb.jpg','2019-10-14 04:11:08','2019-10-14 05:03:17'),(24,'Ram Corsair Vengeance RGB Pro 16GB DDR4 3000MHz','Ram Corsair Vengeance RGB Pro 16GB (2x8GB) DDR4 3000MHz','ram-corsair-vengeance-rgb-pro-16gb-2x8gb-ddr4-3000mhz',12,2600000,5,'Ram Corsair Vengeance RGB Pro (CMW16GX4M2C3000C15)- Đen\r\n\r\n- Dung lượng: 16GB (2x8GB)- Bus: 3000MHz\r\n\r\n- Độ trễ: CL15- Điện áp: 1.35V\r\n\r\n- Tản nhiệt tích hợp đèn RGB','Bộ nhớ trong Ram Corsair Vengeance RGB Pro 16GB DDR4 3000MHz','ram-corsair-vengeance-rgb-pro-16gb-2x8gb-ddr4-3000mhz.png','2019-10-14 04:12:49','2019-10-14 05:03:35'),(25,'G.Skill TRIDENT Z RGB - 32GB DDR4 3000GHz-F4-3000C16D-32GTZR','G.Skill TRIDENT Z RGB - 32GB (16GBx2) DDR4 3000GHz-F4-3000C16D-32GTZR','gskill-trident-z-rgb-32gb-16gbx2-ddr4-3000ghz-f4-3000c16d-32gtzr',12,4500000,5,'\r\nSeries	Trident Z RGB	 \r\n 	Memory Type	DDR4\r\n 	Capacity	32GB (16GBx2)\r\n 	Multi-Channel Kit	Dual Channel Kit\r\n 	Tested Speed	3000MHz\r\n 	Tested Latency	16-18-18-38-2N\r\n 	Tested Voltage	1.35v\r\n 	Registered/Unbuffered	Unbuffered\r\n 	Error Checking	Non-ECC\r\n 	SPD Speed	2133MHz\r\n 	SPD Voltage	1.20v\r\n 	Fan lncluded	No\r\n 	Height	44 mm / 1.73 inch\r\n 	Warranty	Limited Lifetime\r\n 	Features	Intel XMP 2.0 (Extreme Memory Profile) Ready\r\n 	Additional Notes	Rated XMP frequency & stability depends on MB & CPU capability.','Bộ nhớ trong G.Skill TRIDENT Z RGB - 32GB DDR4 3000GHz-F4-3000C16D-32GTZR','g-skill-trident-z-rgb-32gb-16gbx2-ddr4-3000ghz-f4-3000c16d-32gtzr.jpg','2019-10-14 04:14:29','2019-10-14 05:04:14'),(26,'Aerocool LUX RGB 550W - 550W - 80 Plus Bronze','Aerocool LUX RGB 550W - 550W - 80 Plus Bronze - Semi Modular','aerocool-lux-rgb-550w-550w-80-plus-bronze-semi-modular',12,1000000,6,'Thương hiệu\r\n\r\nAERO\r\n\r\nBảo hành\r\n\r\n36 tháng\r\n\r\nCấu hình chi tiết\r\n\r\n\r\n\r\nCông suất tối đa\r\n\r\n550W\r\n\r\nSố cổng cắm\r\n\r\n1 x 24-pin Main, 1 x 8-pin (4+4) EPS, 1 x 8-pin (6+2) PCIE, 2 x Peripheral (4-pin), 4 x SATA\r\n\r\nHiệu suất\r\n\r\n80 Plus Bronze\r\n\r\nQuạt làm mát\r\n\r\n1 x 120 mm','Nguồn máy tính Aerocool LUX RGB 550W - 550W - 80 Plus Bronze','aerocool-lux-rgb-550w-550w-80-plus-bronze-semi-modular.jpg','2019-10-14 04:20:35','2019-10-14 05:05:06'),(27,'Nguồn SEASONIC 650W S12III-650 80Plus Bronze','Nguồn SEASONIC 650W S12III-650 80Plus Bronze','nguon-seasonic-650w-s12iii-650-80plus-bronze',12,1800000,6,'\r\nHãng sản xuất\r\n\r\nSeasonic\r\nTên sản phẩm\r\n\r\nSeasonic 650W S12III-650 80Plus Bronze\r\nCông Suất\r\n650W \r\nType\r\nATX\r\nQuạt hệ thống\r\n13,5cm Fan * 1\r\nHiệu suất\r\n>87%\r\nChứng chỉ\r\n80 Plus Gold\r\nTuổi thọ\r\n100,000 giờ\r\nKích thước\r\n150 mm (W) x 140 mm (L) x 86 mm (H)\r\nInput\r\n110V~240V\r\nOutput\r\n\r\n DC OUTPUT: 12V 52A (MAX. 648W) \r\n Các cổng kết nối	 MB 20+4pin * 1\r\nCPU 4+4pin * 1\r\n\r\nPCI-E * 4\r\n\r\nSATA * 6\r\n\r\nMolex 4pin * 3','Nguồn máy tính SEASONIC 650W S12III-650 80Plus Bronze','nguon-seasonic-650w-s12iii-650-80plus-bronze.jpg','2019-10-14 04:22:05','2019-10-14 05:05:24'),(28,'Nguồn Xigmatek Shogun G SJ-G750 750W 80 Plus Gold','Nguồn Xigmatek Shogun G SJ-G750 750W 80 Plus Gold - 100% TỤ ĐIỆN NHẬT BẢN','nguon-xigmatek-shogun-g-sj-g750-750w-80-plus-gold-100-tu-dien-nhat-ban',12,1850000,6,'Công suất : 750W\r\nQuạt làm mát: 120mm (2 fan bi)\r\nHiệu suất > 90%\r\nChứng chỉ 80 Plus Gold - Tuổi thọ > 120,000 giờ\r\nInput: Active PFC - Full Range\r\nOutput: +12V 62A\r\nCỔNG KẾT NỐI: 20+4pin * 1 / CPU 4+4pin * 1/ PCI-E 6+2pin * 4 / SATA * 6 / Molex 4pin * 3 / FDD 4pin * 1','Nguồn máy tính Xigmatek Shogun G SJ-G750 750W 80 Plus Gold','nguon-xigmatek-shogun-g-sj-g750-750w-80-plus-gold-100-tu-dien-nhat-ban.jpg','2019-10-14 04:24:13','2019-10-14 05:05:51'),(29,'HDD Seagate Barracuda 2TB/7200 Sata 256MB 3,5\" - ST2000DM008','HDD Seagate Barracuda 2TB/7200 Sata 256MB 3,5','hdd-seagate-barracuda-2tb7200-sata-256mb-35',12,1500000,9,'\r\nDung lượng	\r\n2TB\r\nGiao tiếp	\r\nSATA 3\r\nTốc độ	\r\n7200rpm\r\nCache	\r\n64MB\r\nLoại	\r\nInternal\r\nKích thước	\r\n3.5\"\r\nBảo hành	\r\n24 tháng\r\nHãng sản xuất	\r\nSeagate\r\n','Ổ cứng HDD Seagate Barracuda 2TB/7200 Sata 256MB 3,5','7200-sata-256mb-35-st2000dm008.jpg','2019-10-14 04:28:21','2019-10-14 05:06:10'),(30,'SSD Samsung 860 Evo 250GB 2.5-Inch SATA III MZ-76E250BW','SSD Samsung 860 Evo 250GB 2.5-Inch SATA III MZ-76E250BW','ssd-samsung-860-evo-250gb-25-inch-sata-iii-mz-76e250bw',12,1290000,8,'Nhà sản xuất	Samsung\r\nModel	MZ-76E250BW\r\nKích thước	2.5\", 6,8mm\r\nChuần giao tiếp	Sata III 6Gbit/s\r\n Dung lượng	250 GB\r\nTốc độ đọc	550 MB/s\r\nTốc độ ghi	520 MB/s\r\n4k random	98K IOPS Samsung 64-layer 3D TLC V-NAND\r\nTBW	150 TB\r\nBảo hành	5 Năm ','Ổ cứng SSD Samsung 860 Evo 250GB 2.5-Inch SATA III MZ-76E250BW','ssd-samsung-860-evo-250gb-2-5-inch-sata-iii-mz-76e250bw.jpg','2019-10-14 04:29:49','2019-10-14 05:06:34');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-10-23 15:16:18
