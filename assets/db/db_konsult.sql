-- MariaDB dump 10.18  Distrib 10.5.8-MariaDB, for osx10.15 (x86_64)
--
-- Host: localhost    Database: db_konsult
-- ------------------------------------------------------
-- Server version	10.5.8-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT 0,
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` VALUES ('0p38bbeeqidch8eja2oo4mk9rahe7guj','::1',1616398836,'__ci_last_regenerate|i:1616398836;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('44skrt6d0ri703upifmvfa20sgvagu8n','::1',1616388482,'__ci_last_regenerate|i:1616388482;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('5ohf72jvdru020qc357kq70njb2u5eag','::1',1616385053,'__ci_last_regenerate|i:1616385053;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('609u73i1bflp88h336s6jl9v1jqqqqqc','::1',1616391730,'__ci_last_regenerate|i:1616391730;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('7bbtgrkommaenc6vsthmufig3h922vi0','::1',1616395651,'__ci_last_regenerate|i:1616395651;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('9o8qaatati5gddak6ob2q27efgh2n194','::1',1616398483,'__ci_last_regenerate|i:1616398483;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('a4i82uf92v1ba914pqqfq5c8m0m63vmp','::1',1616396665,'__ci_last_regenerate|i:1616396665;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('ak3ll8kpi5o9sso83b70j2oi7ruuk3bq','::1',1616392375,'__ci_last_regenerate|i:1616392375;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('b68223flg3kuii9nnrmpfui9teua3eja','::1',1616389512,'__ci_last_regenerate|i:1616389512;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('d9fa1lq8nhv1fujs0ef4i92dimucpvid','::1',1616395995,'__ci_last_regenerate|i:1616395995;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('d9oo2qt1kvrjunk4qttd9bre0hbus6uk','::1',1616396327,'__ci_last_regenerate|i:1616396327;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";success|s:29:\"Success Edit Data Reservation\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('dl8rf7j4ouk0a7l63o1iu60v8tahae9r','::1',1616389829,'__ci_last_regenerate|i:1616389829;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('greu288le437bvv99ffivh9m93noocam','::1',1616392711,'__ci_last_regenerate|i:1616392711;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('gvcm5tnffsgh1c4vp66lh6oqv06h8sbi','::1',1616390822,'__ci_last_regenerate|i:1616390822;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('h92g3c8kak8ugvf0omhbe0nis1lo5afj','::1',1616399042,'__ci_last_regenerate|i:1616398836;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('hcpgujlknnrdcel8g7kelk8u3t5q8pkr','::1',1616391125,'__ci_last_regenerate|i:1616391125;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('id81eu5n77gv7ekoj59sgpjhpr6ab5s8','::1',1616388168,'__ci_last_regenerate|i:1616388168;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('j1tpd3fql38au8a51oj822tvs29c1fi2','::1',1616395343,'__ci_last_regenerate|i:1616395343;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('ki2pmh2efittq5najve6kfnd8rg5bjlq','::1',1616384690,'__ci_last_regenerate|i:1616384690;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('larbemn3k108t3kcaas6m2rpbsco5035','::1',1616390464,'__ci_last_regenerate|i:1616390464;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('mv3icvbbbn8locvbptvnp904nbm9hje1','::1',1616384375,'__ci_last_regenerate|i:1616384375;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('nconvfa1gfnmfithr67qre71df1sjq1v','::1',1616388886,'__ci_last_regenerate|i:1616388886;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('ndl1g3d4l54tn59n62numh8ckbkf5iek','::1',1616389195,'__ci_last_regenerate|i:1616389195;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('ngq75p2283ula8g80p4sl2v0f9k4u1c1','::1',1616387730,'__ci_last_regenerate|i:1616387730;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('nj0n0ks0u4o9pfvtpjtpirukinef7jar','::1',1616387241,'__ci_last_regenerate|i:1616387241;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('nkd4vji2se9cn3top7u8peb15loicpku','::1',1616397466,'__ci_last_regenerate|i:1616397466;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('ocvbi7a6kv2phqd01icblb1oj7ni69ee','::1',1616395029,'__ci_last_regenerate|i:1616395029;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('odas8di6hjjrgestld38tbib847nt7ej','::1',1616390134,'__ci_last_regenerate|i:1616390134;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('oeou4sjgcn382n74ceo2kd67tnbemp2c','::1',1616385574,'__ci_last_regenerate|i:1616385574;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('qtldgihk7ol81gp9k8u94hmo17vlhc37','::1',1616392069,'__ci_last_regenerate|i:1616392069;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('sbnii34arjgoacbselht3d66qb8ds66s','::1',1616398180,'__ci_last_regenerate|i:1616398180;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('t0147cr7pnjs8jvfhcl7697u4ct00gmf','::1',1616391426,'__ci_last_regenerate|i:1616391426;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('uvccba7ba58hq6tu0gbbk09h6nskppjs','::1',1616383979,'__ci_last_regenerate|i:1616383979;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";'),('vfq3mt6c2sa2csbbh6j0dt8p4h8ip1lv','::1',1616394698,'__ci_last_regenerate|i:1616394698;status|b:1;id|i:1;name|s:13:\"Administrator\";type|s:1:\"1\";');
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_doctor`
--

DROP TABLE IF EXISTS `data_doctor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_doctor` (
  `dctId` int(11) NOT NULL AUTO_INCREMENT,
  `dctFullname` varchar(255) DEFAULT NULL,
  `dctStatus` tinyint(1) NOT NULL DEFAULT 1,
  `dctCreateId` int(11) NOT NULL,
  `dctCreateTime` datetime NOT NULL,
  `dctUpdateId` int(11) DEFAULT NULL,
  `dctUpdateTime` datetime DEFAULT NULL,
  PRIMARY KEY (`dctId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_doctor`
--

LOCK TABLES `data_doctor` WRITE;
/*!40000 ALTER TABLE `data_doctor` DISABLE KEYS */;
INSERT INTO `data_doctor` VALUES (1,'DOCTOR 1',0,1,'2021-03-20 15:57:17',1,'2021-03-22 14:42:45'),(2,'DOCTOR 2',0,1,'2021-03-20 15:57:17',1,'2021-03-22 14:42:52'),(3,'DOCTOR 3',1,1,'2021-03-20 15:57:17',NULL,NULL),(4,'DOCTOR 4',1,1,'2021-03-20 15:57:17',NULL,NULL),(5,'DOCTOR 5',1,1,'2021-03-20 15:57:17',NULL,NULL),(9,'DOCTOR 6',0,1,'2021-03-22 14:37:13',1,'2021-03-22 14:42:41');
/*!40000 ALTER TABLE `data_doctor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_pasien`
--

DROP TABLE IF EXISTS `data_pasien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_pasien` (
  `psnId` int(11) NOT NULL AUTO_INCREMENT,
  `psnPasienCode` varchar(225) NOT NULL,
  `psnFullname` varchar(225) DEFAULT NULL,
  `psnGender` int(11) DEFAULT NULL COMMENT '1 = LAKI-LAKI,  2 = PEREMPUAN, 0 = OTHER',
  `psnTglLahir` date DEFAULT NULL,
  `psnAddress` text DEFAULT NULL,
  `psnStatus` tinyint(1) NOT NULL,
  `psnCreateId` int(11) NOT NULL,
  `psnCreateTime` datetime NOT NULL,
  `psnUpdateId` int(11) DEFAULT NULL,
  `psnUpdateTime` datetime DEFAULT NULL,
  PRIMARY KEY (`psnId`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_pasien`
--

LOCK TABLES `data_pasien` WRITE;
/*!40000 ALTER TABLE `data_pasien` DISABLE KEYS */;
INSERT INTO `data_pasien` VALUES (2,'PSN-2','PASIEN 2',1,'2021-03-22','JL DUMMY',1,1,'2021-03-20 15:54:52',NULL,NULL),(3,'PSN-3','PASIEN 3',1,'2000-11-30','JL DUMMY',1,1,'2021-03-20 15:54:52',NULL,NULL),(4,'PSN-4','PASIEN 4',1,'2000-11-30','JL DUMMY',1,1,'2021-03-20 15:54:52',NULL,NULL),(7,'PSN-5','PASIEN 1',1,'1999-12-10','ASD555',1,0,'0000-00-00 00:00:00',1,'2021-03-22 10:17:57'),(8,'PSN-6','Anwar',1,'1999-12-10','123123',1,0,'0000-00-00 00:00:00',1,'2021-03-21 14:04:21'),(9,'PSN-7','TEST DUMMY',1,'2021-03-09','TEST',1,0,'0000-00-00 00:00:00',1,'2021-03-22 12:37:11'),(10,'PSN-8','TEST DUMMYAA',1,'2021-03-22','DS',1,0,'0000-00-00 00:00:00',1,'2021-03-22 12:37:06');
/*!40000 ALTER TABLE `data_pasien` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_reservasi`
--

DROP TABLE IF EXISTS `data_reservasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_reservasi` (
  `rsvId` int(11) NOT NULL AUTO_INCREMENT,
  `rsvPsnId` int(11) NOT NULL,
  `rsvDctId` int(11) NOT NULL,
  `rsvReserveDate` datetime NOT NULL,
  `rsvStatus` int(11) NOT NULL,
  `rsvCreateId` int(11) NOT NULL,
  `rsvCreateTime` datetime NOT NULL,
  `rsvUpdateId` int(11) DEFAULT NULL,
  `rsvUpdateTime` datetime DEFAULT NULL,
  PRIMARY KEY (`rsvId`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_reservasi`
--

LOCK TABLES `data_reservasi` WRITE;
/*!40000 ALTER TABLE `data_reservasi` DISABLE KEYS */;
INSERT INTO `data_reservasi` VALUES (1,7,1,'2021-03-22 00:00:00',1,1,'2021-03-21 10:40:19',NULL,NULL),(2,2,1,'2021-03-21 12:00:00',1,1,'2021-03-21 10:40:19',1,'2021-03-22 14:01:06'),(3,3,1,'2021-03-21 10:00:00',0,1,'2021-03-21 10:40:19',NULL,NULL),(4,4,1,'2021-03-21 10:00:00',0,1,'2021-03-21 10:40:19',NULL,NULL),(6,10,1,'2021-03-22 12:00:00',1,1,'2021-03-22 13:01:54',1,'2021-03-22 14:02:48'),(7,10,2,'2021-03-24 05:00:00',0,1,'2021-03-22 14:08:34',NULL,NULL);
/*!40000 ALTER TABLE `data_reservasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_users`
--

DROP TABLE IF EXISTS `data_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_users` (
  `usrId` int(11) NOT NULL AUTO_INCREMENT,
  `usrUsername` varchar(225) NOT NULL,
  `usrPassword` varchar(225) NOT NULL,
  `usrFullname` varchar(225) DEFAULT NULL,
  `usrStatus` tinyint(1) NOT NULL,
  `usrType` int(11) DEFAULT NULL,
  `usrCreateTime` datetime NOT NULL,
  PRIMARY KEY (`usrId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_users`
--

LOCK TABLES `data_users` WRITE;
/*!40000 ALTER TABLE `data_users` DISABLE KEYS */;
INSERT INTO `data_users` VALUES (1,'administrator','123456','Administrator',1,1,'2021-03-20 09:38:02');
/*!40000 ALTER TABLE `data_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-22 16:34:54
