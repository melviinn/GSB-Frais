-- MariaDB dump 10.19  Distrib 10.8.3-MariaDB, for osx10.17 (x86_64)
--
-- Host: localhost    Database: gsb-frais
-- ------------------------------------------------------
-- Server version	10.8.3-MariaDB

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
-- Table structure for table `comptable`
--

DROP TABLE IF EXISTS `comptable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comptable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_5B644367AA08CB10` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comptable`
--

LOCK TABLES `comptable` WRITE;
/*!40000 ALTER TABLE `comptable` DISABLE KEYS */;
INSERT INTO `comptable` VALUES
(1,'test1','[]','$2y$13$uT1fCJkNvvr6FsaVD.ItueVq2PXqjlIZ3pC4otT9Io8N4JoKGvoCK'),
(2,'test2','[]','$2y$13$pgxo50N8WyC6505UCpBBXOmbqhCulAYgO418JTZfu43HYi4Ka6Hgq'),
(3,'mduchaufour','[]','$2y$13$hEGXcbPeRwb38jFCh.riuOl3Re4I12YBgd5azJ17DCNLAoM9JlT.6');
/*!40000 ALTER TABLE `comptable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_migration_versions`
--

LOCK TABLES `doctrine_migration_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etat`
--

DROP TABLE IF EXISTS `etat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etat` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etat`
--

LOCK TABLES `etat` WRITE;
/*!40000 ALTER TABLE `etat` DISABLE KEYS */;
INSERT INTO `etat` VALUES
('CL','Saisie clôturée'),
('CR','Fiche créée, saisie en cours'),
('RB','Remboursée'),
('VA','Validée et mise en paiement');
/*!40000 ALTER TABLE `etat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fiche_frais`
--

DROP TABLE IF EXISTS `fiche_frais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fiche_frais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_visiteur_id` int(11) NOT NULL,
  `id_etat_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mois` int(2) NOT NULL,
  `nb_justificatifs` int(11) DEFAULT NULL,
  `montant_valide` int(11) DEFAULT NULL,
  `date_modif` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5FC0A6A76760FECA` (`id_visiteur_id`),
  KEY `IDX_5FC0A6A7D3C32F8F` (`id_etat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fiche_frais`
--

LOCK TABLES `fiche_frais` WRITE;
/*!40000 ALTER TABLE `fiche_frais` DISABLE KEYS */;
INSERT INTO `fiche_frais` VALUES
(54,15,'CR',1,3,161,NULL),
(55,15,'CR',2,3,123,NULL);
/*!40000 ALTER TABLE `fiche_frais` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `frais_forfait`
--

DROP TABLE IF EXISTS `frais_forfait`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `frais_forfait` (
  `id` varchar(3) NOT NULL,
  `libelle` char(20) DEFAULT NULL,
  `montant` float(5,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `frais_forfait`
--

LOCK TABLES `frais_forfait` WRITE;
/*!40000 ALTER TABLE `frais_forfait` DISABLE KEYS */;
INSERT INTO `frais_forfait` VALUES
('ETP','Forfait Etape',110.00),
('KM','Frais Kilométrique',0.62),
('NUI','Nuitée Hôtel',80.00),
('REP','Repas Restaurant',25.00);
/*!40000 ALTER TABLE `frais_forfait` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ligne_frais_forfait`
--

DROP TABLE IF EXISTS `ligne_frais_forfait`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ligne_frais_forfait` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_visiteur_id` int(11) NOT NULL,
  `id_frais_forfait_id` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantite` int(11) DEFAULT NULL,
  `mois` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_BD293ECF6760FECA` (`id_visiteur_id`),
  KEY `IDX_BD293ECF98FA628F` (`id_frais_forfait_id`)
) ENGINE=InnoDB AUTO_INCREMENT=232 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ligne_frais_forfait`
--

LOCK TABLES `ligne_frais_forfait` WRITE;
/*!40000 ALTER TABLE `ligne_frais_forfait` DISABLE KEYS */;
INSERT INTO `ligne_frais_forfait` VALUES
(226,15,'KM',50,1),
(227,15,'REP',2,1),
(228,15,'NUI',1,1),
(229,15,'KM',30,2),
(230,15,'REP',1,2),
(231,15,'NUI',1,2);
/*!40000 ALTER TABLE `ligne_frais_forfait` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ligne_frais_hors_forfait`
--

DROP TABLE IF EXISTS `ligne_frais_hors_forfait`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ligne_frais_hors_forfait` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_visiteur_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `montant` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_EC01626D6760FECA` (`id_visiteur_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ligne_frais_hors_forfait`
--

LOCK TABLES `ligne_frais_hors_forfait` WRITE;
/*!40000 ALTER TABLE `ligne_frais_hors_forfait` DISABLE KEYS */;
INSERT INTO `ligne_frais_hors_forfait` VALUES
(10,'15','Frais Essence','2022-12-18',110);
/*!40000 ALTER TABLE `ligne_frais_hors_forfait` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_embauche` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649AA08CB10` (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES
('14','lvillachane','[\'ROLE_USER\']','$2y$13$adgdFffhDZ1Aup0G5t0LAuwmzEK2g7ie.iFkrSEOGmhpW9dCKFttW','Villechalane','Louis','8 rue des Charmes','46000','Cahors','2005-12-21'),
('15','dandre','[]','$2y$13$o6jZL1ebuzbXlIy5uTfUt.xnB/FDJ6EnXvcj6kcoch/n021xseWMe','Andre','David','1 rue Petit','46200','Lalbenque','1998-11-23'),
('16','cbedos','[]','$2y$13$K5lSHAzLQLHIBRsIjZ7rKuGRhBLjA1lH1NdsXm7M3GzlB/uDEtMX2','Bedos','Christian','1 rue Peranud','46250','Montcuq','1995-01-12'),
('17','ltusseau','[]','$2y$13$5z9GMr/1BOzN7V5vwRmOFOE5XFFvyurh/C4gMF/jLEzUPKSsBdTFi','Tusseau','Louis','22 rue des Ternes','46123','Gramat','2000-05-01'),
('18','pbentot','[]','$2y$13$PqpXe7H4tVjzDPKIDZkjP.UcFAHDgdlzuOsa6zh.7sFb3XJpPRUnK','Bentot','Pascal','11 allée des Cerises','46512','Bessines','1992-07-09'),
('19','lbioret','[]','$2y$13$SvjnvdW5kUGx4lisDcrn.u2.GG8jmMQ3wUFFyrYwaRYFjUHiK7N/u','Bioret','Luc','1 avenue Gambetta','46000','Cahors','1998-05-11'),
('20','fbunisset','[]','$2y$13$ws9E9ij5V7mXPoHdW.lDg.H3xzylaGzP/oop9Xe2G2bwsCLmClIhW','Bunisset','Francis','10 rue des Perles','93100','Montreuil','1987-10-21'),
('21','dbunisset','[]','$2y$13$frlay8JE3AyEPsykWPC2KedmBWtCMEqqbpjuNBX/CsjcCP0.MwlqS','Bunisset','Denise','23 rue Manin','75019','Paris','2010-12-05'),
('22','bcacheux','[]','$2y$13$OgM8d8C3l4V1d1oEA5/IfeasKt6mTzPuR7MxYvF8yXatcuSBX.qEC','Cacheux','Bernard','114 rue Blanche','75017','Paris','2009-11-12'),
('23','ecadic','[]','$2y$13$QB4RruaRKpyDoZT40T4Jt.OSky626TQwD2CPPL/1HsQUDnx47UOTO','Cadic','Eric','123 avenue de la République','75011','Paris','2008-09-23'),
('24','ccharoze','[]','$2y$13$Nkjg5SDioGelHq1AmnXj3.UZ5qWtmyQ34Yp0dXtSYGRwRuLcd0xZe','Charoze','Catherine','100 rue Petit','75019','Paris','2005-11-12'),
('25','cclepkens','[]','$2y$13$zshIrY4.AOPlSrQvlhiy3eCnsm2JVhPeZWf99VIEwO1yq2I1IqToi','Clepkens','Christophe','12 allée des Anges','93320','Romainville','2003-08-11'),
('26','vcottin','[]','$2y$13$iNEP5BRs.tFmIZxbyzpVweSjz7Cydr5Nf/iTsED33QL82jSddDZbG','Cottin','Vincenne','36 rue des Roches','93100','Montreuil','2001-11-18'),
('27','jdebelle','[]','$2y$13$Y4jySmPqtwPuMJONVra/qOhl6EgWpYn8sJWfsVeGej/u9p48spClG','Debelle','Jeanne','134 allée des Joncs','44000','Nantes','2000-05-11'),
('28','mdebroise','[]','$2y$13$NnauTywGfuUqrzYELWz73OrEBq5KWjHjelRR8OgW97/mF.jUesL.i','Debroise','Michel','2 boulevard Jourdain','44000','Nantes','2001-04-17'),
('29','ndesmarquest','[]','$2y$13$nH7nTafUzhuQAoK.aq4.1uOYOgEYln3lgtZX5moPcEOw47q4BJIHG','Desmarquest','Nathalie','14 place d\'Arc','45000','Orléans','2005-11-12'),
('30','pdesnost','[]','$2y$13$JxBsEuqEfFnytaitMiaaG.V9MKnAN3ASjjF.b7G/utwhN69nMZ7q2','Desnost','Pierre','16 avenue des Cèdres','23200','Guéret','2001-02-05'),
('31','fdudouit','[]','$2y$13$uMfNU8m3kJ4P0EKFv/bSiu/NhTayzAi1T.UBtHGrKOHLkZ5smyMEu','Dudouit','Frédéric','18 rue de l\'Eglise','23120','GrandBourg','2000-08-01'),
('32','cduncombe','[]','$2y$13$dus68znGiaQYtrG/5iVRbuMeoNqwSr1sHsir7Dagy5rybrhWkwwtC','Duncombe','Claude','19 rue de la Tour','23100','La Souteraine','1987-10-10'),
('33','cenault','[]','$2y$13$TScxfr3ikflpZF2LDbiNhO/P5HQxe0L0AiMd41n8AdRUnVYWuyoHS','Enault-Pascreau','Céline','25 place de la Gare','23200','Gueret','1995-09-01'),
('34','veynde','[]','$2y$13$c2tdK4eZcN0k1YVc37ACTeOMwV8YqgFj.bAjXvEUaIArMd2aAX.Zu','Eynde','Valérie','3 Grand Place','13015','Marseille','1999-11-01'),
('35','jfinck','[]','$2y$13$BpR.Xai2MV.Yp56phFzHS.CdShg1HvdEjUZ2UKsU0jWbyfliR7ZMq','Finck','Jacques','10 avenue du Prado','13002','Marseille','2001-11-10'),
('36','ffremont','[]','$2y$13$H6oScjptlKi0AMIojNeUQ.pkGscUUFaWexYBtzwWiNVRRIdVCnrIW','Frémont','Fernande','4 route de la Mer','13012','Allauh','1998-10-01'),
('37','agest','[]','$2y$13$w9/mAmIGwNlwJVFEj2f6EuwA/828Y6jGyKnSwZ5020Km9pIMbi.rS','Gest','Alain','30 avenue de la Mer','13025','Berre','1987-11-01');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visiteur`
--

DROP TABLE IF EXISTS `visiteur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visiteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mdp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_embauche` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visiteur`
--

LOCK TABLES `visiteur` WRITE;
/*!40000 ALTER TABLE `visiteur` DISABLE KEYS */;
INSERT INTO `visiteur` VALUES
(2,'Andre','David','dandre','oppg5','1 rue Petit','46200','Lalbenque','1998-11-23'),
(3,'Bedos','Christian','cbedos','gmhxd','1 rue Peranud','46250','Montcuq','1995-01-12'),
(4,'Tusseau','Louis','ltusseau','ktp3s','22 rue des Ternes','46123','Gramat','2000-05-01'),
(5,'Bentot','Pascal','pbentot','doyw1','11 allée des Cerises','46512','Bessines','1992-07-09'),
(6,'Bioret','Luc','lbioret','hrjfs','1 Avenue gambetta','46000','Cahors','1998-05-11'),
(7,'Bunisset','Francis','fbunisset','4vbnd','10 rue des Perles','93100','Montreuil','1987-10-21'),
(8,'Bunisset','Denise','dbunisset','s1y1r','23 rue Manin','75019','paris','2010-12-05'),
(9,'Cacheux','Bernard','bcacheux','uf7r3','114 rue Blanche','75017','Paris','2009-11-12'),
(10,'Cadic','Eric','ecadic','6u8dc','123 avenue de la République','75011','Paris','2008-09-23'),
(11,'Charoze','Catherine','ccharoze','u817o','100 rue Petit','75019','Paris','2005-11-12'),
(12,'Clepkens','Christophe','cclepkens','bw1us','12 allée des Anges','93230','Romainville','2003-08-11'),
(13,'Cottin','Vincenne','vcottin','2hoh9','36 rue Des Roches','93100','Monteuil','2001-11-18'),
(14,'Debelle','Jeanne','jdebelle','nvwqq','134 allée des Joncs','44000','Nantes','2000-05-11'),
(15,'Debroise','Michel','mdebroise','sghkb','2 Bld Jourdain','44000','Nantes','2001-04-17'),
(16,'Desmarquest','Nathalie','ndesmarquest','f1fob','14 Place d Arc','45000','Orléans','2005-11-12'),
(17,'Desnost','Pierre','pdesnost','4k2o5','16 avenue des Cèdres','23200','Guéret','2001-02-05'),
(18,'Dudouit','Frédéric','fdudouit','44im8','18 rue de l église','23120','GrandBourg','2000-08-01'),
(19,'Duncombe','Claude','cduncombe','qf77j','19 rue de la tour','23100','La souteraine','1987-10-10'),
(20,'Enault-Pascreau','Céline','cenault','y2qdu','25 place de la gare','23200','Gueret','1995-09-01'),
(21,'Eynde','Valérie','veynde','i7sn3','3 Grand Place','13015','Marseille','1999-11-01'),
(22,'Finck','Jacques','jfinck','mpb3t','10 avenue du Prado','13002','Marseille','2001-11-10'),
(23,'Frémont','Fernande','ffremont','xs5tq','4 route de la mer','13012','Allauh','1998-10-01'),
(24,'Gest','Alain','agest','dywvt','30 avenue de la mer','13025','Berre','1985-11-01');
/*!40000 ALTER TABLE `visiteur` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-02-17 11:30:00
