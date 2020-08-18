-- MySQL dump 10.13  Distrib 5.7.28, for Win64 (x86_64)
--
-- Host: localhost    Database: akademik
-- ------------------------------------------------------
-- Server version	5.7.28-log

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
-- Table structure for table `dosen`
--

DROP TABLE IF EXISTS `dosen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dosen` (
  `NIK` varchar(15) NOT NULL,
  `Nama_Dosen` varchar(50) DEFAULT NULL,
  `Alamat` varchar(60) DEFAULT NULL,
  `No_telp` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`NIK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dosen`
--

LOCK TABLES `dosen` WRITE;
/*!40000 ALTER TABLE `dosen` DISABLE KEYS */;
INSERT INTO `dosen` VALUES ('10102938','BAGUS KAHFI IKRAM','DAGO PAKAR','082312422637'),('10118043','Dian Rosa Pratama','Kopo Jaya','08214791824');
/*!40000 ALTER TABLE `dosen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fakultas`
--

DROP TABLE IF EXISTS `fakultas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fakultas` (
  `Kode_Fakultas` varchar(3) NOT NULL,
  `Nama_Fakultas` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Kode_Fakultas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fakultas`
--

LOCK TABLES `fakultas` WRITE;
/*!40000 ALTER TABLE `fakultas` DISABLE KEYS */;
INSERT INTO `fakultas` VALUES ('UK2','TEKNIK DAN ILMU KOMPUTER');
/*!40000 ALTER TABLE `fakultas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jurusan`
--

DROP TABLE IF EXISTS `jurusan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jurusan` (
  `Kode_Jurusan` varchar(8) NOT NULL,
  `Kode_Fakultas` varchar(3) DEFAULT NULL,
  `Nama_Jurusan` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Kode_Jurusan`),
  KEY `jurusan_ibfk_1` (`Kode_Fakultas`),
  CONSTRAINT `jurusan_ibfk_1` FOREIGN KEY (`Kode_Fakultas`) REFERENCES `fakultas` (`Kode_Fakultas`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jurusan`
--

LOCK TABLES `jurusan` WRITE;
/*!40000 ALTER TABLE `jurusan` DISABLE KEYS */;
INSERT INTO `jurusan` VALUES ('UK2IF','UK2','MANAJEMEN INFORMATIKA');
/*!40000 ALTER TABLE `jurusan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mahasiswa`
--

DROP TABLE IF EXISTS `mahasiswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mahasiswa` (
  `NIM` varchar(15) NOT NULL,
  `Nama_Mhs` varchar(40) DEFAULT NULL,
  `Alamat` varchar(60) DEFAULT NULL,
  `No_telp` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`NIM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mahasiswa`
--

LOCK TABLES `mahasiswa` WRITE;
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
INSERT INTO `mahasiswa` VALUES ('10118037','Muhammad Ihsan bosq','Lembang ','083824363347');
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matakuliah`
--

DROP TABLE IF EXISTS `matakuliah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matakuliah` (
  `Kode_Matkul` varchar(8) NOT NULL,
  `Kode_Jurusan` varchar(8) DEFAULT NULL,
  `Nama_Matkul` varchar(30) DEFAULT NULL,
  `SKS` int(1) DEFAULT NULL,
  `Semester` int(1) DEFAULT NULL,
  PRIMARY KEY (`Kode_Matkul`),
  KEY `matakuliah_ibfk_1` (`Kode_Jurusan`),
  CONSTRAINT `matakuliah_ibfk_1` FOREIGN KEY (`Kode_Jurusan`) REFERENCES `jurusan` (`Kode_Jurusan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matakuliah`
--

LOCK TABLES `matakuliah` WRITE;
/*!40000 ALTER TABLE `matakuliah` DISABLE KEYS */;
INSERT INTO `matakuliah` VALUES ('IF44442','UK2IF','PEMROGRAMAN VISUAL',4,4),('IF44444','UK2IF','BASIS DATA 2',4,4);
/*!40000 ALTER TABLE `matakuliah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nilai`
--

DROP TABLE IF EXISTS `nilai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nilai` (
  `Id_Nilai` int(11) NOT NULL AUTO_INCREMENT,
  `NIM` varchar(15) DEFAULT NULL,
  `Kode_Matkul` varchar(8) DEFAULT NULL,
  `Nilai` char(1) DEFAULT NULL,
  PRIMARY KEY (`Id_Nilai`),
  KEY `nilai_ibfk_1` (`NIM`),
  KEY `nilai_ibfk_2` (`Kode_Matkul`),
  CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`NIM`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`Kode_Matkul`) REFERENCES `matakuliah` (`Kode_Matkul`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nilai`
--

LOCK TABLES `nilai` WRITE;
/*!40000 ALTER TABLE `nilai` DISABLE KEYS */;
INSERT INTO `nilai` VALUES (4,'10118037','IF44444','A');
/*!40000 ALTER TABLE `nilai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perwalian`
--

DROP TABLE IF EXISTS `perwalian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perwalian` (
  `Id_Perwalian` int(11) NOT NULL AUTO_INCREMENT,
  `NIM` varchar(15) DEFAULT NULL,
  `Kode_Matkul` varchar(8) DEFAULT NULL,
  `NIK` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`Id_Perwalian`),
  KEY `perwalian_ibfk_1` (`NIM`),
  KEY `perwalian_ibfk_2` (`Kode_Matkul`),
  KEY `perwalian_ibfk_3` (`NIK`),
  CONSTRAINT `perwalian_ibfk_1` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`NIM`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `perwalian_ibfk_2` FOREIGN KEY (`Kode_Matkul`) REFERENCES `matakuliah` (`Kode_Matkul`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `perwalian_ibfk_3` FOREIGN KEY (`NIK`) REFERENCES `dosen` (`NIK`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perwalian`
--

LOCK TABLES `perwalian` WRITE;
/*!40000 ALTER TABLE `perwalian` DISABLE KEYS */;
INSERT INTO `perwalian` VALUES (4,'10118037','IF44444','10118043');
/*!40000 ALTER TABLE `perwalian` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-08-18  9:53:35
