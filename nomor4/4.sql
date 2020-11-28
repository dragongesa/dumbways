-- --------------------------------------------------------
-- Host:                         localhost
-- Versi server:                 5.7.24 - MySQL Community Server (GPL)
-- OS Server:                    Win64
-- HeidiSQL Versi:               10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Membuang struktur basisdata untuk crud_db
CREATE DATABASE IF NOT EXISTS `crud_db` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `crud_db`;

-- membuang struktur untuk table crud_db.image_blog
CREATE TABLE IF NOT EXISTS `image_blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(120) DEFAULT NULL,
  `content` longtext,
  `file_image` longtext,
  `user_id` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel crud_db.image_blog: ~4 rows (lebih kurang)
/*!40000 ALTER TABLE `image_blog` DISABLE KEYS */;
INSERT INTO `image_blog` (`id`, `title`, `content`, `file_image`, `user_id`) VALUES
	(11, 'Ini adalah teks judul yang pas', 'Ini adalah teks artikelnyaa', 'uploads/096df0eb195b8f0d9475924f9a1e9425.jpg', '1'),
	(12, 'Ini adalah teks judul yang pas', 'Ini adalah teks artikelnyaa', 'uploads/93429677_2985895564826775_239625524048035840_o.jpg', '1'),
	(13, 'Ini adalah teks judul yang pas', 'Ini adalah teks artikelnyaa', 'uploads/aa.jpg', '2'),
	(15, 'kjkjsdh', 'skjdfhskjdfhkj', 'uploads/6160298_17d37399-40c1-4944-bb45-93a3415bfa6e_720_720.png', '1');
/*!40000 ALTER TABLE `image_blog` ENABLE KEYS */;

-- membuang struktur untuk table crud_db.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel crud_db.user: ~3 rows (lebih kurang)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `name`, `email`) VALUES
	(1, 'admin', 'admin@localhost'),
	(2, 'centini', 'centini@localhost'),
	(3, 'login', 'login@login');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
