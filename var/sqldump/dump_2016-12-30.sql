-- MySQL dump 10.13  Distrib 5.5.53, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: cinefan
-- ------------------------------------------------------
-- Server version	5.5.53-0ubuntu0.14.04.1

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
-- Table structure for table `actor`
--

DROP TABLE IF EXISTS `actor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `actor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `portrait` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` date NOT NULL,
  `bio` longtext COLLATE utf8_unicode_ci,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_447556F9954034FB` (`portrait`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actor`
--

LOCK TABLES `actor` WRITE;
/*!40000 ALTER TABLE `actor` DISABLE KEYS */;
INSERT INTO `actor` VALUES (11,'Philippine','René Morvan',NULL,'2009-06-24','Autem voluptatibus eum aut nesciunt. Sit nisi recusandae eaque molestias sit id labore. Ut voluptatem laudantium perferendis eveniet quam vero.','rene-morvanphilippine'),(12,'Christelle','Célina Bruneau',NULL,'2013-02-16','Veritatis voluptatem perferendis molestiae est. Iure possimus ab in hic. Odio sed vitae maiores ex beatae reprehenderit exercitationem corrupti.','celina-bruneauchristelle'),(13,'Juliette','Stéphanie Le Carlier',NULL,'2009-01-10','Consequatur laudantium nisi quo earum rerum esse eveniet. Omnis voluptatem voluptatem et eaque praesentium et praesentium. Velit molestiae porro consequuntur quos hic animi.','stephanie-le-carlierjuliette'),(14,'Luc','Matthieu Maillard-Hubert',NULL,'2013-05-17','Ullam placeat non ratione eaque possimus. Optio explicabo et repellat tempore. Tempore totam iste quidem eum labore velit voluptatibus.','matthieu-maillardhubertluc'),(15,'Denis','Jules de la Salmon',NULL,'2016-08-23','At ut non eos sed amet. Vitae enim sapiente occaecati natus assumenda reiciendis. Et laudantium vel nisi ea itaque est. Nihil beatae omnis voluptatibus quae sit veniam.','jules-de-la-salmondenis'),(16,'Jacques','Nathalie Martin',NULL,'1922-09-02','Nihil esse repudiandae pariatur reprehenderit assumenda. Consequatur fugit ad iste minus ullam quidem. Vero soluta nostrum ea dolores doloremque fuga labore.','nathalie-martinjacques'),(17,'Eugène','Colette Boucher',NULL,'1920-02-01','Repellat corporis excepturi sint dolores. Odit quia nisi accusantium natus. Ut explicabo corporis eligendi ut. Sapiente ut qui quidem explicabo optio amet velit aut.','colette-bouchereugene'),(18,'Denis','Julie de Guyon',NULL,'2010-12-18','Facilis molestias quo omnis minima illo delectus iste. Accusantium autem suscipit quia et. Dolorum quos aliquam delectus accusantium quidem. Eius a corrupti totam placeat delectus voluptatem.','julie-de-guyondenis'),(19,'Alain','Michèle Benoit',NULL,'2004-07-02','Et cum eius voluptas numquam quam occaecati. Aut in laudantium omnis et aut laborum. Corporis aliquid aut cumque consequuntur non qui. Maiores aliquid rerum autem qui est velit.','michele-benoitalain'),(20,'Benjamin','Patricia Gimenez-Pascal',NULL,'1922-12-10','Asperiores ab tenetur voluptatem repudiandae reiciendis. Accusamus ut et nobis iste accusantium quaerat. Voluptas est tenetur sed possimus. Eos voluptatem at qui eaque nihil aliquid eos.','patricia-gimenezpascalbenjamin');
/*!40000 ALTER TABLE `actor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `actors_movies`
--

DROP TABLE IF EXISTS `actors_movies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `actors_movies` (
  `actor_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  PRIMARY KEY (`actor_id`,`movie_id`),
  KEY `IDX_B3012DC010DAF24A` (`actor_id`),
  KEY `IDX_B3012DC08F93B6FC` (`movie_id`),
  CONSTRAINT `FK_B3012DC010DAF24A` FOREIGN KEY (`actor_id`) REFERENCES `actor` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_B3012DC08F93B6FC` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actors_movies`
--

LOCK TABLES `actors_movies` WRITE;
/*!40000 ALTER TABLE `actors_movies` DISABLE KEYS */;
INSERT INTO `actors_movies` VALUES (11,23),(11,24),(11,27),(12,19),(13,17),(13,25),(14,27),(15,22),(16,16),(17,18),(17,27),(18,16),(19,19),(19,20),(19,23),(19,27),(20,18),(20,20),(20,23),(20,27);
/*!40000 ALTER TABLE `actors_movies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_64C19C15E237E06` (`name`),
  UNIQUE KEY `UNIQ_64C19C1989D9B62` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (14,'Thriller','thriller'),(15,'Aventure','aventure'),(16,'Biopic2222','biopic2222'),(17,'Action','action'),(18,'Fantastique','fantastique'),(19,'Adulte','adulte'),(20,'Romance','romance'),(21,'Animation','animation'),(22,'Comédie','comedie'),(23,'Historique','historique'),(24,'Horreur','horreur'),(25,'American','american'),(26,'Science-Fiction','sciencefiction');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movie`
--

DROP TABLE IF EXISTS `movie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `poster` varchar(36) COLLATE utf8_unicode_ci DEFAULT NULL,
  `release_date` date NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(4,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1D5EF26F2B36786BE769876D` (`title`,`release_date`),
  KEY `IDX_1D5EF26F12469DE2` (`category_id`),
  CONSTRAINT `FK_1D5EF26F12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movie`
--

LOCK TABLES `movie` WRITE;
/*!40000 ALTER TABLE `movie` DISABLE KEYS */;
INSERT INTO `movie` VALUES (15,23,'Ut et enim ex eveniet facere.','defaultPoster.jpg','2012-09-27','ut-et-enim-ex-eveniet-facere',89.99),(16,22,'Eum architecto fugit repellendus illo veritatis.','defaultPoster.jpg','2011-07-01','eum-architecto-fugit-repellendus-illo-veritatis',89.99),(17,19,'Possimus omnis aut incidunt sunt.','defaultPoster.jpg','2014-01-06','possimus-omnis-aut-incidunt-sunt',89.99),(18,15,'Culpa rem aut rerum exercitationem est.','defaultPoster.jpg','2011-09-14','culpa-rem-aut-rerum-exercitationem-est',89.99),(19,20,'Qui architecto fugiat nemo omnis consequatur recusandae.','defaultPoster.jpg','2015-03-22','qui-architecto-fugiat-nemo-omnis-consequatur-recusandae',89.99),(20,14,'Optio provident non incidunt magnam molestias et.','defaultPoster.jpg','2014-12-18','optio-provident-non-incidunt-magnam-molestias-et',89.99),(21,20,'Ipsum voluptatibus est accusantium.','defaultPoster.jpg','2015-12-24','ipsum-voluptatibus-est-accusantium',89.99),(22,15,'Quis totam incidunt ducimus.','defaultPoster.jpg','2007-05-10','quis-totam-incidunt-ducimus',89.99),(23,24,'Sunt qui similique ut culpa.','defaultPoster.jpg','2012-08-09','sunt-qui-similique-ut-culpa',89.99),(24,24,'Ut porro amet laborum iure molestiae.','defaultPoster.jpg','2015-08-19','ut-porro-amet-laborum-iure-molestiae',89.99),(25,21,'Dolores harum rerum sequi quia quasi.','defaultPoster.jpg','2007-06-11','dolores-harum-rerum-sequi-quia-quasi',89.99),(26,16,'Quo aperiam natus ut doloribus magni.','defaultPoster.jpg','2007-09-19','quo-aperiam-natus-ut-doloribus-magni',89.99),(27,21,'Sed architecto quod nulla maxime.','defaultPoster.jpg','2015-06-05','sed-architecto-quod-nulla-maxime',89.99);
/*!40000 ALTER TABLE `movie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_57698A6A5E237E06` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` VALUES (4,'ROLE_ADMIN'),(3,'ROLE_USER');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `roles` int(11) DEFAULT NULL,
  `last_connection` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`),
  KEY `IDX_8D93D649B63E2EC7` (`roles`),
  CONSTRAINT `FK_8D93D649B63E2EC7` FOREIGN KEY (`roles`) REFERENCES `role` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (3,'user','$2a$06$qe1V1nLlExrxwvO/IuG1xe3bZ455tCOJg0fs/x3Nhz6YoVm29egZy','bob@gmail.com',1,3,'2016-08-17 11:43:53'),(4,'admin','$2a$06$qe1V1nLlExrxwvO/IuG1xe3bZ455tCOJg0fs/x3Nhz6YoVm29egZy','gege@gmail.com',1,4,'2016-01-09 02:39:46');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-30 11:09:42
