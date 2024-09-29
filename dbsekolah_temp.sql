-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for dbsekolah_temp
DROP DATABASE IF EXISTS `dbsekolah_temp`;
CREATE DATABASE IF NOT EXISTS `dbsekolah_temp` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `dbsekolah_temp`;

-- Dumping structure for table dbsekolah_temp.tb_berita
DROP TABLE IF EXISTS `tb_berita`;
CREATE TABLE IF NOT EXISTS `tb_berita` (
  `ID_Berita` int NOT NULL,
  `Berita_Post` text,
  `Upload_By` varchar(64) DEFAULT NULL,
  `Created_At` timestamp NULL DEFAULT NULL,
  `Update_At` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID_Berita`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table dbsekolah_temp.tb_informasi_guru
DROP TABLE IF EXISTS `tb_informasi_guru`;
CREATE TABLE IF NOT EXISTS `tb_informasi_guru` (
  `ID_Guru` varchar(16) NOT NULL,
  `NIPY` bigint NOT NULL,
  `Nama_Guru` varchar(128) NOT NULL,
  `NUPTK` bigint DEFAULT NULL,
  `Mapel_Ampu` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`ID_Guru`),
  UNIQUE KEY `NIPY` (`NIPY`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table dbsekolah_temp.tb_informasi_sekolah
DROP TABLE IF EXISTS `tb_informasi_sekolah`;
CREATE TABLE IF NOT EXISTS `tb_informasi_sekolah` (
  `ID_Sekolah` int NOT NULL,
  `Nama_Sekolah` varchar(64) DEFAULT NULL,
  `Logo_Sekolah` text,
  `Visi_Sekolah` varchar(255) DEFAULT NULL,
  `Misi_Sekolah` text,
  `Alamat` text,
  `Info_Kontak` text,
  PRIMARY KEY (`ID_Sekolah`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table dbsekolah_temp.tb_users
DROP TABLE IF EXISTS `tb_users`;
CREATE TABLE IF NOT EXISTS `tb_users` (
  `ID_Users` varchar(32) NOT NULL,
  `Username` varchar(32) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Nama_User` varchar(128) DEFAULT NULL,
  `Last_Login` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID_Users`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Data exporting was unselected.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
