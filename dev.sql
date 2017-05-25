-- MySQL dump 10.13  Distrib 5.5.52, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: dev
-- ------------------------------------------------------
-- Server version	5.5.52-0ubuntu0.14.04.1-log

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
-- Table structure for table `auth_assignment`
--

DROP TABLE IF EXISTS `auth_assignment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_assignment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_assignment`
--

LOCK TABLES `auth_assignment` WRITE;
/*!40000 ALTER TABLE `auth_assignment` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_assignment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_item`
--

DROP TABLE IF EXISTS `auth_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `group_code` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  KEY `fk_auth_item_group_code` (`group_code`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `fk_auth_item_group_code` FOREIGN KEY (`group_code`) REFERENCES `auth_item_group` (`code`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_item`
--

LOCK TABLES `auth_item` WRITE;
/*!40000 ALTER TABLE `auth_item` DISABLE KEYS */;
INSERT INTO `auth_item` VALUES ('/*',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('//*',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('//controller',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('//crud',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('//extension',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('//form',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('//index',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('//model',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('//module',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/asset/*',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/asset/compress',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/asset/template',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/cache/*',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/cache/flush',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/cache/flush-all',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/cache/flush-schema',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/cache/index',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/fixture/*',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/fixture/load',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/fixture/unload',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/gii/*',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/gii/default/*',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/gii/default/action',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/gii/default/diff',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/gii/default/index',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/gii/default/preview',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/gii/default/view',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/help/*',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/help/index',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/message/*',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/message/config',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/message/config-template',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/message/extract',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/migrate/*',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/migrate/create',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/migrate/down',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/migrate/history',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/migrate/mark',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/migrate/new',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/migrate/redo',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/migrate/to',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/migrate/up',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/serve/*',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/serve/index',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/user-management/*',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/user-management/auth-item-group/*',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/auth-item-group/bulk-activate',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/auth-item-group/bulk-deactivate',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/auth-item-group/bulk-delete',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/auth-item-group/create',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/auth-item-group/delete',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/auth-item-group/grid-page-size',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/auth-item-group/grid-sort',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/auth-item-group/index',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/auth-item-group/toggle-attribute',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/auth-item-group/update',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/auth-item-group/view',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/auth/*',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/auth/captcha',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/auth/change-own-password',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/auth/confirm-email',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/auth/confirm-email-receive',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/auth/confirm-registration-email',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/auth/login',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/auth/logout',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/auth/password-recovery',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/auth/password-recovery-receive',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/auth/registration',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/permission/*',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/permission/bulk-activate',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/permission/bulk-deactivate',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/permission/bulk-delete',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/permission/create',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/permission/delete',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/permission/grid-page-size',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/permission/grid-sort',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/permission/index',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/permission/refresh-routes',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/permission/set-child-permissions',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/permission/set-child-routes',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/permission/toggle-attribute',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/permission/update',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/permission/view',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/role/*',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/role/bulk-activate',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/role/bulk-deactivate',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/role/bulk-delete',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/role/create',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/role/delete',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/role/grid-page-size',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/role/grid-sort',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/role/index',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/role/set-child-permissions',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/role/set-child-roles',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/role/toggle-attribute',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/role/update',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/role/view',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/user-permission/*',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/user-management/user-permission/set',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/user-management/user-permission/set-roles',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/user-management/user-visit-log/*',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/user-management/user-visit-log/bulk-activate',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/user-management/user-visit-log/bulk-deactivate',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/user-management/user-visit-log/bulk-delete',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/user-management/user-visit-log/create',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/user-management/user-visit-log/delete',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/user-management/user-visit-log/grid-page-size',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/user-management/user-visit-log/grid-sort',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/user-management/user-visit-log/index',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/user-management/user-visit-log/toggle-attribute',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/user-management/user-visit-log/update',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/user-management/user-visit-log/view',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/user-management/user/*',3,NULL,NULL,NULL,1479811681,1479811681,NULL),('/user-management/user/bulk-activate',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/user/bulk-deactivate',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/user/bulk-delete',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/user/change-password',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/user/create',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/user/delete',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/user/grid-page-size',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/user/grid-sort',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/user/index',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/user/toggle-attribute',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/user/update',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('/user-management/user/view',3,NULL,NULL,NULL,1479811682,1479811682,NULL),('Admin',1,'Admin',NULL,NULL,1479811682,1479811682,NULL),('assignRolesToUsers',2,'Assign roles to users',NULL,NULL,1479811682,1479811682,'userManagement'),('bindUserToIp',2,'Bind user to IP',NULL,NULL,1479811682,1479811682,'userManagement'),('changeOwnPassword',2,'Change own password',NULL,NULL,1479811682,1479811682,'userCommonPermissions'),('changeUserPassword',2,'Change user password',NULL,NULL,1479811682,1479811682,'userManagement'),('commonPermission',2,'Common permission',NULL,NULL,1479811680,1479811680,NULL),('createUsers',2,'Create users',NULL,NULL,1479811682,1479811682,'userManagement'),('deleteUsers',2,'Delete users',NULL,NULL,1479811682,1479811682,'userManagement'),('editUserEmail',2,'Edit user email',NULL,NULL,1479811682,1479811682,'userManagement'),('editUsers',2,'Edit users',NULL,NULL,1479811682,1479811682,'userManagement'),('viewRegistrationIp',2,'View registration IP',NULL,NULL,1479811682,1479811682,'userManagement'),('viewUserEmail',2,'View user email',NULL,NULL,1479811682,1479811682,'userManagement'),('viewUserRoles',2,'View user roles',NULL,NULL,1479811682,1479811682,'userManagement'),('viewUsers',2,'View users',NULL,NULL,1479811682,1479811682,'userManagement'),('viewVisitLog',2,'View visit log',NULL,NULL,1479811682,1479811682,'userManagement');
/*!40000 ALTER TABLE `auth_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_item_child`
--

DROP TABLE IF EXISTS `auth_item_child`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_item_child`
--

LOCK TABLES `auth_item_child` WRITE;
/*!40000 ALTER TABLE `auth_item_child` DISABLE KEYS */;
INSERT INTO `auth_item_child` VALUES ('changeOwnPassword','/user-management/auth/change-own-password'),('assignRolesToUsers','/user-management/user-permission/set'),('assignRolesToUsers','/user-management/user-permission/set-roles'),('viewVisitLog','/user-management/user-visit-log/grid-page-size'),('viewVisitLog','/user-management/user-visit-log/index'),('viewVisitLog','/user-management/user-visit-log/view'),('editUsers','/user-management/user/bulk-activate'),('editUsers','/user-management/user/bulk-deactivate'),('deleteUsers','/user-management/user/bulk-delete'),('changeUserPassword','/user-management/user/change-password'),('createUsers','/user-management/user/create'),('deleteUsers','/user-management/user/delete'),('viewUsers','/user-management/user/grid-page-size'),('viewUsers','/user-management/user/index'),('editUsers','/user-management/user/update'),('viewUsers','/user-management/user/view'),('Admin','assignRolesToUsers'),('Admin','changeOwnPassword'),('Admin','changeUserPassword'),('Admin','createUsers'),('Admin','deleteUsers'),('Admin','editUsers'),('editUserEmail','viewUserEmail'),('assignRolesToUsers','viewUserRoles'),('Admin','viewUsers'),('assignRolesToUsers','viewUsers'),('changeUserPassword','viewUsers'),('createUsers','viewUsers'),('deleteUsers','viewUsers'),('editUsers','viewUsers');
/*!40000 ALTER TABLE `auth_item_child` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_item_group`
--

DROP TABLE IF EXISTS `auth_item_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth_item_group` (
  `code` varchar(64) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_item_group`
--

LOCK TABLES `auth_item_group` WRITE;
/*!40000 ALTER TABLE `auth_item_group` DISABLE KEYS */;
INSERT INTO `auth_item_group` VALUES ('userCommonPermissions','User common permission',1479811682,1479811682),('userManagement','User management',1479811682,1479811682);
/*!40000 ALTER TABLE `auth_item_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_rule`
--

DROP TABLE IF EXISTS `auth_rule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_rule`
--

LOCK TABLES `auth_rule` WRITE;
/*!40000 ALTER TABLE `auth_rule` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_rule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `img` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Стеновые покрытия','Заголовок Стеновые покрытия','Описание Покрытий','1.jpg','wall'),(2,'Забор','Заголовок Забор','Описание Заборов','2.jpg','fence'),(3,'Доска пола','Заголовок Доска пола','Описание полов','3.jpg','floor');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `map` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'Контакты','г. Санкт-Петербург, ул. Чугунная, д. 36','+7 (921) 580 15 60','piterremstroy@gmail.com','<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1680.6827578213977!2d30.277236072761855!3d59.93745369107028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7fac9233d75171fd!2sKwakinn!5e0!3m2!1sru!2sru!4v1487149126756\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `src` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES (1,1,'d01a98ff4bbecef94b640a00e92c04fa.g'),(2,1,'762197101b5a7ada45635932891c4cfe.g'),(3,1,'b6e1f0095d1f4ca146ec6be60e4ec87f.g'),(4,1,'4bf3781c92040880bddbd0f7f285823b.g'),(5,1,'13709b992df353bd1ec4dbe0d9f7bc9e.jpg'),(6,1,'976e94b5c78b673f2c47b9b92ada0d89.jpg'),(7,1,'b562811d84c19022412ff7b40a80b25f.jpg'),(8,1,'65ed0d4cb6da01d37b026055687c1785.jpg'),(9,1,'bac03052d44ca99a6ee8d08c460afe10.jpg'),(10,2,'5fd91ded3e5cf7edcd572f16b97ac017.jpg'),(11,2,'135c8455dbc1a5608ed4b91f4dd04945.jpg'),(12,2,'2c4514c84fb09ce95e4cc44b5c2dc1d4.jpg'),(13,2,'2ad2d2b7ee4d59232f8ae95dfd889ab8.jpg'),(14,3,'d6d41aea954a313758969bc628cd9f51'),(15,3,'064aae27be4e075bc731f77a6f697042'),(16,3,'85ac7d6d562cc6c8bf4dd56f745f9647'),(17,3,'7733a124a0a36d29468dba37071470d9'),(18,3,'f73197bbb0868bedbad320a89037a2e4'),(19,3,'46826c336859b13c50ded237774be9c5'),(20,3,'e4087ae7991362f57b1873ce023d1718.jpg'),(21,3,'435a41b72e9404324fc8e505c1b951e4.jpg'),(22,3,'1145aa07b848000fb3483c8c0593aa4c.jpg'),(23,3,'291e8fde71b90abe7f723506d4659696.jpg'),(24,3,'d01261338afcda6c1bcf512a5f6a1e14.jpg'),(25,3,'13e6ae312ad4b8bec7c137f6c4022eb6.jpg'),(26,3,'27ab094fa02fc7c02bc8e71cbe0a4745.jpg'),(27,3,'75d061f235117ac777a79f45d325acb2.jpg'),(28,3,'f34dc1c009cb267a88d8304e974084b8.jpg'),(29,4,'de7721eb74650500ec065e2d25e83da3.jpg'),(30,4,'5898895b0b063bd2138a1178b45ec70c.jpg'),(31,4,'fbd2c2d5cdb31023267ce5f2a71bb55b.jpg'),(32,4,'22292f395a435cdb1bd6f650d4f857a4.jpg'),(33,5,'07808c6f230061ce3438f1fb91915c1f.jpg'),(34,5,'89333398f8184ba91d63d5eb2c07b70f.gif'),(35,5,'07de11b9ad3bf536852e817f71a8796b.gif'),(36,5,'284f04c501b60b8844b2e8854b2b23ee.jpg'),(37,6,'669be00404e3c1a1a76cf407e964ea29.png'),(38,6,'fc1b18de2b5a8b277884c2f6f7a68831.png'),(39,6,'6f073fd799c472bd47e97a521602ed8e.png'),(40,6,'0713b7770b69f947d39fc6ca8a8a2691.png'),(41,6,'1b552c90790b23cd051661ce4e5af379.png'),(42,7,'39c5cb05ed345e6e6e0e12ff436f704e.jpg'),(43,7,'734be49494abc9db93ed811cc3ad12c5.jpg'),(44,7,'e6246c96183d578bb8977a122b6ace1b.jpg'),(45,8,'a54d780fa297307660d4594e75d02b66.jpg'),(46,8,'f7a35162193d9a532ce507a78f55d7a6.jpg'),(47,8,'ed00f4053fc176408f475350e5399b33.jpg'),(48,8,'055dbed649eb642c5c9a883720eac397.jpg'),(49,8,'0e2169a9065e9193115ff6d7546716a2.jpg'),(50,9,'d899148415462175853511ceee1e38b7.png'),(51,9,'f7a9457d842a09a7d7fae067fedf833c.png'),(52,10,'7f9d220ddae4382cf05074305eb940ba.jpg'),(53,10,'2c271855f59fff87f2e114a5d3999576.jpg'),(54,10,'0876e983cfc6d7049bbb52b39498a33d.jpg'),(55,10,'cdd560637c2e454b657d38fa8872fadd.jpg'),(56,11,'a70d05055b1a37eb828e2834a38e10bd.png'),(57,11,'02f6363e3ad30a7398625abfdffb7062.png'),(58,11,'d44f44db368f7bb3ed13a3d7867f5e24.png'),(59,12,'4535a4aace54acc06bcc6494428cc574.jpg'),(60,12,'30e22bdd0f7141c103ca1d123685b026.jpg'),(61,12,'7719f1d523b1e58552c87766b4110c8a.jpg'),(62,12,'b5b2139fb478a612586a564ae5e3d861.jpg'),(63,12,'057d04e2fadf268372fb3afad0c5dc92.jpg'),(64,12,'57d7b5daa1b6079eef51ba45ffec6bbd.jpg'),(65,13,'321245fa70e88a10da30b532d5fa8738.png'),(66,13,'38b9e3273759af7f5f54664667bf5de0.png'),(67,13,'c9e2588bb302113dcdc7ba4a9d07c386.png'),(68,14,'961a7e2d27659b24b7deca43fbf66048.png'),(69,14,'467488184fac23393a833730d6d08493.png'),(70,15,'539b9114f5ec61ace4985b36340c3829.jpg'),(71,15,'db37ea520c7625cbe734cbafed2db72d.jpg'),(72,15,'3d9974d354a2209e8701bec910b8dc3e.jpg'),(73,15,'2d10885d923cc437b9c06f99815b3c5f.jpg'),(74,15,'6e88eeb47406120b108beff33015a3ed.jpg'),(75,15,'6a6929d98897b1c2e086f28e5310ffcf.jpg'),(76,15,'c82f1da8dcc1e394fec0acb8447a3e9c.jpg'),(77,15,'2fc784be5abc126012d0223ceccd670b.jpg'),(78,15,'757c415fbac395999e3153837af49c55.jpg'),(79,15,'7c3013a925a5f2ddbc3c8608a72e4650.jpg'),(80,15,'f7a80267b27878eed2da0ea5dceba27b.jpg'),(81,16,'295cee24a5e383949331263e629d50fb'),(82,16,'a50c9c108ed148d5787eb9302eaebcd3'),(83,16,'0f2bba4fcd5e230a94d8bfdc80e4a246'),(84,16,'f6ccfd6dc4f3652b2d2f114830276089.JPG'),(85,16,'eaa95dec49d5b2f627b03c08a296960f.JPG'),(86,16,'250f7130ed77b857716e30481d673f51.JPG'),(87,16,'a8d9398362f79779d7ada7511629f7d8.jpg'),(88,16,'9ce92917f9cb365e107ab9e39e4ca9a3.jpg'),(89,16,'b39af9f19d3468abd255736d02aa8a37.jpg'),(90,17,'18f0a90b8d51bc81f5acdf02511922af.jpg'),(91,17,'0fd48712a0380fc7566d01487bee48ee.jpg'),(92,17,'71ba04b27a6dbae30080ef0c2a7df80b.jpg'),(93,17,'22ea9c65f79293e869e1d3637d56206a.jpg'),(94,17,'73899e812312edf8f6184010b001768d.jpg'),(95,18,'59c1afa6eecf4a533914b86259f3d368.png'),(96,18,'561ef9816e59cba89f845950cb86861f.png'),(97,19,'9250957520f0c6b0258ee46632097c0e.png'),(98,19,'8901d2cb0e98f17e6491550d7bc9c360.png'),(99,20,'eb087692a37364eb17dd47350ca4e9a9.png'),(100,20,'f70b1228d5c9213ec3ac7a3c262c1017.png'),(101,20,'2121ba4ae09cd9ec698f3a9837503c51.png'),(102,21,'cb278d9019f88c862583b96cc798c038.png'),(103,22,'40657d4526233fcde2de072ffdb68e03.png'),(104,22,'01deaea543ede056f082d408c7512ce0.png'),(105,23,'49dfb65b57617df3d11ba3252e4a093a.jpg'),(106,23,'52fb897d72852f2aba9cf2f1f54c950d.jpg'),(107,23,'54b2c48ac4f1ae23e9ddfbc03d266783.jpg');
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `manufacturer` varchar(255) DEFAULT NULL,
  `wood` varchar(255) DEFAULT NULL,
  `wet` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `gallery` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item`
--

LOCK TABLES `item` WRITE;
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
/*!40000 ALTER TABLE `item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration`
--

DROP TABLE IF EXISTS `migration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration`
--

LOCK TABLES `migration` WRITE;
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` VALUES ('m000000_000000_base',1479809074),('m130524_201442_init',1479809082),('m140608_173539_create_user_table',1479811677),('m140611_133903_init_rbac',1479811678),('m140808_073114_create_auth_item_group_table',1479811679),('m140809_072112_insert_superadmin_to_user',1479811680),('m140809_073114_insert_common_permisison_to_auth_item',1479811680),('m141023_141535_create_user_visit_log',1479811680),('m141116_115804_add_bind_to_ip_and_registration_ip_to_user',1479811680),('m141121_194858_split_browser_and_os_column',1479811681),('m141201_220516_add_email_and_email_confirmed_to_user',1479811681),('m141207_001649_create_basic_user_permissions',1479811682);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page`
--

DROP TABLE IF EXISTS `page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page`
--

LOCK TABLES `page` WRITE;
/*!40000 ALTER TABLE `page` DISABLE KEYS */;
INSERT INTO `page` VALUES (1,'О компании','Компания «ПитерРемСтрой» предлагает индивидуальные и типовые строительные решения в максимально короткие сроки.\n\n\nНаши ключевые принципы: качественные материалы, умеренная ценовая политика, высокое качество работ, гарантия на 2 года. \n\nБлагоустроенные и уютные каркасные дома являются наиболее популярными в развитых западных странах и с каждым годом пользуются большим спросом в нашей стране. Это комфортное, экологичное и надежное загородное жилье, предназначенное для постоянного проживания. Стоимость таких строений в разы ниже, чем возведенных по другим технологиям. Большой выбор типовых проектов делает цену на них еще более привлекательной. \nКонструкции наших коттеджей успешно выдерживают высокие нагрузки при сильном ветре и снеге, а также обладают улучшенной звукоизоляцией. Зимние каркасные дома обладают отличными морозоустойчивыми характеристиками. \n\nПреимуществом каркасных домов является скорость сборки. Преимущества дерева в качестве основного материала при строительстве обеспечивает эффективную естественную вентиляцию, уникальный внутренний микроклимат и уют, а также длительный срок эксплуатации. Основное же преимущество кирпича – способность впитывать и отдавать влагу, что очень важно для климатических зон, где высока относительная влажность воздуха. \n\nСобственный дом – эффективное вложение денежных средств по ряду причин. \n\nЧтобы получить дополнительную информацию и стать счастливым владельцем дома под ключ в Санкт-Петербурге или Ленинградской области, свяжитесь с нами удобным способом.','typical-1.jpg'),(2,'Услуги и цены','Компания \"ПитерРемСтрой\" на рынке с 2011 года, несмотря на относительно юный возраст, успела зарекомендовать себя на рынке строительства и войти в число лучших компаний, которым доверяют потребители. Основными принципами компании является политика приемлемой цены и высокого качества, сжатые сроки строительства и гарантия сделанной работы. \r\n\r\nМы занимаемся полным спектром услуг: \r\nСтроительство коттеджей под ключ \r\nСтроительно-монтажные работы \r\nОтделочные работы \r\nИнженерные сети \r\nУстановка коммуникаций \r\nДостройка домов \r\nОтделочные работы \r\nСтроительство и достройка малых архитектурных форм \r\nИндивидуальное проектирование \r\n\r\nЭтапы проектирования коттеджей: \r\n1) Техническое задание \r\n2) Эскизы \r\n3) Разработка архитектурных решений \r\n4) Разработка конструкторских решений \r\n5) Дизайн проект \r\n6) Разработка инженерных документов','typical-1.jpg');
/*!40000 ALTER TABLE `page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `confirmation_token` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `superadmin` smallint(6) DEFAULT '0',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `registration_ip` varchar(15) DEFAULT NULL,
  `bind_to_ip` varchar(255) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `email_confirmed` smallint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'superadmin','YPvm9f5qjcYe1LmS3x5e3Gq5nsP36t-r','$2y$13$hky7tyc4SBUqw6Lj0ctstugOp0dLAnSpJ.UxoDkqFMd82VSMPDNga',NULL,1,1,1479811679,1479811679,NULL,NULL,NULL,0),(2,'superadmin2','YPvm9f5qjcYe1LmS3x5e3Gq5nsP36t-r','$2y$13$hky7tyc4SBUqw6Lj0ctstugOp0dLAnSpJ.UxoDkqFMd82VSMPDNga',NULL,1,1,1479811679,1479811679,NULL,NULL,NULL,0);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_visit_log`
--

DROP TABLE IF EXISTS `user_visit_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_visit_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(255) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `language` char(2) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `visit_time` int(11) NOT NULL,
  `browser` varchar(30) DEFAULT NULL,
  `os` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `user_visit_log_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_visit_log`
--

LOCK TABLES `user_visit_log` WRITE;
/*!40000 ALTER TABLE `user_visit_log` DISABLE KEYS */;
INSERT INTO `user_visit_log` VALUES (1,'5835968fbfc60','178.66.179.22','ru','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.75 Safari/537.36',1,1479906959,'Chrome','Linux'),(2,'5835cadc44bf3','178.66.179.22','ru','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.75 Safari/537.36',1,1479920348,'Chrome','Linux'),(3,'5835cbbd7fc2c','178.66.179.22','ru','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.75 Safari/537.36',1,1479920573,'Chrome','Linux'),(4,'5835cbbe3ccbd','178.66.179.22','ru','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.75 Safari/537.36',1,1479920574,'Chrome','Linux'),(5,'5835cbbe6b990','178.66.179.22','ru','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.75 Safari/537.36',1,1479920574,'Chrome','Linux'),(6,'5835cbbeeea94','178.66.179.22','ru','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.75 Safari/537.36',1,1479920574,'Chrome','Linux'),(7,'5835cbbfa8c49','178.66.179.22','ru','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.75 Safari/537.36',1,1479920575,'Chrome','Linux'),(8,'5835cbc0643ea','178.66.179.22','ru','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.75 Safari/537.36',1,1479920576,'Chrome','Linux'),(9,'5836b41229652','178.66.142.67','ru','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.75 Safari/537.36',1,1479980050,'Chrome','Linux'),(10,'584e73a931838','93.185.29.103','ru','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.75 Safari/537.36',1,1481536425,'Chrome','Linux'),(11,'5874eac14dfa4','79.173.100.11','ru','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.75 Safari/537.36',1,1484057281,'Chrome','Linux'),(12,'58848cf03f650','93.185.30.185','ru','Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36',1,1485081840,'Chrome','Windows'),(13,'58870c6011136','79.173.100.11','ru','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.75 Safari/537.36',1,1485245536,'Chrome','Linux'),(14,'5887c94ee465a','93.185.30.237','en','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36',1,1485293902,'Chrome','Linux'),(15,'58a31e6701e2c','79.173.100.11','ru','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',1,1487085159,'Chrome','Windows'),(16,'58a31eea1a2ea','79.173.100.11','ru','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.75 Safari/537.36',1,1487085290,'Chrome','Linux');
/*!40000 ALTER TABLE `user_visit_log` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-02-25 23:27:04
