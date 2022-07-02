# Host: 159.223.146.185  (Version 5.5.5-10.3.34-MariaDB-0ubuntu0.20.04.1)
# Date: 2022-07-01 21:26:37
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "clubes"
#

DROP TABLE IF EXISTS `clubes`;
CREATE TABLE `clubes` (
  `codigo` int(11) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "clubes"
#


#
# Structure for table "libros"
#

DROP TABLE IF EXISTS `libros`;
CREATE TABLE `libros` (
  `codigoLibro` int(11) NOT NULL AUTO_INCREMENT,
  `rating` varchar(50) NOT NULL DEFAULT '',
  `nombre` varchar(50) NOT NULL DEFAULT '',
  `descripcion` varchar(250) NOT NULL DEFAULT '',
  `genero` varchar(50) NOT NULL DEFAULT '',
  `fecha` datetime DEFAULT NULL,
  `costo` varchar(255) DEFAULT NULL,
  `owned_by` varchar(255) DEFAULT NULL,
  `expiration_date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codigoLibro`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8mb4;

#
# Data for table "libros"
#

INSERT INTO `libros` VALUES (1,'1','Las aventuras 1','Descripcion','Drama','2017-07-12 01:01:01','25','1','0'),(2,'2','Las aventuras 2','Descripcion','Aventura','2022-05-08 04:34:05','55','1','0'),(3,'3','Las aventuras 3','Descripcion','Accion','2017-07-12 01:01:01','10','2','2020-07-12 01:01:01'),(4,'4','Las aventuras 4','Descripcion','Terror','2017-07-12 01:01:01','5','1','0'),(5,'5','Las aventuras 5','Descripcion','Suspenso','2017-07-12 01:01:01','5','1','0'),(6,'3','Las aventuras 6','Descripcion','Suspenso','2017-07-12 01:01:01','5','1','0'),(7,'2','Las aventuras 7','Descripcion','Aventura','2017-07-12 01:01:01','5','1','0');

#
# Structure for table "libros_adquiridos"
#

DROP TABLE IF EXISTS `libros_adquiridos`;
CREATE TABLE `libros_adquiridos` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `owned_by` varchar(255) DEFAULT NULL,
  `idLibro` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `expiration_date` date DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

#
# Data for table "libros_adquiridos"
#

INSERT INTO `libros_adquiridos` VALUES (1,NULL,'3','2020-02-02','2020-05-02'),(2,'2','2','2020-01-01','2020-02-20');

#
# Structure for table "rangos"
#

DROP TABLE IF EXISTS `rangos`;
CREATE TABLE `rangos` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `rango` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

#
# Data for table "rangos"
#

INSERT INTO `rangos` VALUES (1,'Visitante'),(2,'Usuario'),(3,'Administrador');

#
# Structure for table "users_accounts"
#

DROP TABLE IF EXISTS `users_accounts`;
CREATE TABLE `users_accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `acc_status` varchar(255) DEFAULT '0',
  `username` varchar(50) NOT NULL,
  `password` varbinary(150) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `celular` varchar(255) DEFAULT NULL,
  `creditos` varchar(255) DEFAULT '0',
  `created_at` datetime DEFAULT current_timestamp(),
  `last_login_date` varchar(255) DEFAULT NULL,
  `last_login_ip` varchar(255) DEFAULT NULL,
  `libros_totales` varchar(255) DEFAULT NULL,
  `grade` varchar(50) NOT NULL,
  `profilePic` varchar(255) DEFAULT NULL,
  `can_edit` varchar(255) DEFAULT NULL,
  `can_comment` varchar(255) DEFAULT NULL,
  `origen` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `pkUsername` (`username`),
  UNIQUE KEY `discordIdPk` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8mb4;

#
# Data for table "users_accounts"
#

INSERT INTO `users_accounts` VALUES (2,'1','asd',X'617364','Agustin','Fagundez','agus@agus.com','093593066','1500','2022-05-24 15:27:26','16:46 01-07-22','::1','4','Administrador','https://cdn.discordapp.com/attachments/979571987020120064/979770936125452338/unknown.png',NULL,NULL,'Uruguay'),(3,'1','pruebauser',X'706173737764707275656261','Nomprueba','ApePrueba','prueba@agus.com','09999999','15','2022-05-27 00:00:00',NULL,NULL,'7','Administrador','https://cdn.discordapp.com/attachments/979571987020120064/979770936125452338/unknown.png',NULL,NULL,'Uruguay'),(66,'0','rsanchez',X'313233','Rodrigo','Sanchez','home@gmial.com','098144719','150','2022-06-06 00:00:00','19:57 08-06-22','::1',NULL,'Administrador','https://empresas.blogthinkbig.com/wp-content/uploads/2019/11/Imagen3-245003649.jpg?w=800',NULL,NULL,'Uruguay');

#
# Structure for table "users_biblioteca"
#

DROP TABLE IF EXISTS `users_biblioteca`;
CREATE TABLE `users_biblioteca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `discordid` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `idRango` int(11) NOT NULL DEFAULT 0,
  `rango` varchar(50) NOT NULL DEFAULT '',
  `ingreso` datetime DEFAULT current_timestamp(),
  `profilePic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FkRango` (`idRango`),
  KEY `discorid` (`discordid`),
  CONSTRAINT `FkRango` FOREIGN KEY (`idRango`) REFERENCES `rangos` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

#
# Data for table "users_biblioteca"
#

INSERT INTO `users_biblioteca` VALUES (1,'320381919575539722','Agustin','Fagundez',2,'Admin','2022-04-25 22:47:44','https://cdn.discordapp.com/attachments/973645773948473376/976202993286397952/unknown.png');

#
# Structure for table "users_logs"
#

DROP TABLE IF EXISTS `users_logs`;
CREATE TABLE `users_logs` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL DEFAULT '',
  `ip` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(255) NOT NULL DEFAULT '0',
  `info` varchar(255) NOT NULL DEFAULT '',
  `date` varchar(255) NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`Id`),
  KEY `asddsa` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=809 DEFAULT CHARSET=utf8mb4;

#
# Data for table "users_logs"
#

INSERT INTO `users_logs` VALUES (540,'2','asd','::1','1','[OK] Inicio de sesion correcto','28-06-2022 17:57'),(541,'2','asd','::1','1','[OK] Inicio de sesion correcto','28-06-2022 18:16'),(542,'2','asd','::1','1','[OK] Inicio de sesion correcto','28-06-2022 18:16'),(543,'2','asd','::1','1','[OK] Inicio de sesion correcto','28-06-2022 18:17'),(544,'2','asd','::1','1','[OK] Inicio de sesion correcto','28-06-2022 18:18'),(545,'2','asd','::1','1','[OK] Inicio de sesion correcto','28-06-2022 18:29'),(546,'2','asd','::1','1','[OK] Inicio de sesion correcto','28-06-2022 18:29'),(547,'2','asd','::1','1','[OK] Inicio de sesion correcto','28-06-2022 18:29'),(548,'2','asd','::1','1','[OK] Inicio de sesion correcto','28-06-2022 18:29'),(549,'2','asd','::1','1','[OK] Inicio de sesion correcto','28-06-2022 18:35'),(550,'2','asd','::1','1','[OK] Inicio de sesion correcto','28-06-2022 18:35'),(551,'2','asd','::1','1','[OK] Inicio de sesion correcto','28-06-2022 18:36'),(552,'2','asd','::1','1','[OK] Inicio de sesion correcto','28-06-2022 18:36'),(553,'2','asd','::1','1','[OK] Inicio de sesion correcto','28-06-2022 18:37'),(554,'2','asd','::1','1','[OK] Inicio de sesion correcto','28-06-2022 18:53'),(555,'2','asd','::1','1','[OK] Inicio de sesion correcto','28-06-2022 20:08'),(556,'2','asd','::1','1','[OK] Inicio de sesion correcto','29-06-2022 09:11'),(557,'2','asd','::1','1','[OK] Inicio de sesion correcto','29-06-2022 09:11'),(558,'2','asd','::1','1','[OK] Inicio de sesion correcto','29-06-2022 09:11'),(559,'2','asd','::1','1','[OK] Inicio de sesion correcto','29-06-2022 09:11'),(560,'2','asd','::1','1','[OK] Inicio de sesion correcto','29-06-2022 09:11'),(561,'2','asd','::1','1','[OK] Inicio de sesion correcto','29-06-2022 09:12'),(562,'2','asd','::1','1','[OK] Inicio de sesion correcto','29-06-2022 09:18'),(563,'2','asd','::1','1','[OK] Inicio de sesion correcto','29-06-2022 09:18'),(564,'2','asd','::1','1','[OK] Inicio de sesion correcto','29-06-2022 09:18'),(565,'2','asd','::1','1','[OK] Inicio de sesion correcto','29-06-2022 10:00'),(566,'2','asd','::1','1','[OK] Inicio de sesion correcto','29-06-2022 10:01'),(567,'2','asd','::1','1','[OK] Inicio de sesion correcto','29-06-2022 10:01'),(568,'2','asd','::1','1','[OK] Inicio de sesion correcto','29-06-2022 10:01'),(569,'2','asd','::1','1','[OK] Inicio de sesion correcto','29-06-2022 10:01'),(570,'2','asd','::1','1','[OK] Inicio de sesion correcto','29-06-2022 10:02'),(571,'2','asd','::1','1','[OK] Inicio de sesion correcto','29-06-2022 10:02'),(572,'2','asd','::1','1','[OK] Inicio de sesion correcto','29-06-2022 10:02'),(573,'2','asd','::1','1','[OK] Inicio de sesion correcto','29-06-2022 10:03'),(574,'2','asd','::1','1','[OK] Inicio de sesion correcto','29-06-2022 10:03'),(575,'2','asd','::1','1','[OK] Inicio de sesion correcto','29-06-2022 10:03'),(576,'2','asd','::1','1','[OK] Inicio de sesion correcto','29-06-2022 10:07'),(577,'2','asd','::1','1','[OK] Inicio de sesion correcto','29-06-2022 10:07'),(578,'2','asd','::1','1','[OK] Inicio de sesion correcto','29-06-2022 10:07'),(579,'2','asd','::1','1','[OK] Inicio de sesion correcto','29-06-2022 10:07'),(580,'2','asd','::1','1','[OK] Inicio de sesion correcto','29-06-2022 10:26'),(581,'2','asd','::1','1','[OK] Inicio de sesion correcto','29-06-2022 14:52'),(582,'2','asd','::1','1','[OK] Inicio de sesion correcto','29-06-2022 14:52'),(583,'2','asd','::1','1','[OK] Inicio de sesion correcto','29-06-2022 14:53'),(584,'2','asd','::1','1','[OK] Inicio de sesion correcto','29-06-2022 15:59'),(585,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 08:27'),(586,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 08:27'),(587,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 08:27'),(588,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 08:27'),(589,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 08:28'),(590,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 08:30'),(591,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 08:31'),(592,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 09:01'),(593,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 09:18'),(594,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 09:18'),(595,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 11:11'),(596,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 14:59'),(597,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:00'),(598,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:00'),(599,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:00'),(600,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:00'),(601,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:00'),(602,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:00'),(603,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:03'),(604,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:06'),(605,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:06'),(606,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:06'),(607,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:07'),(608,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:07'),(609,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:09'),(610,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:09'),(611,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:10'),(612,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:10'),(613,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:11'),(614,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:11'),(615,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:11'),(616,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:12'),(617,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:12'),(618,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:12'),(619,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:13'),(620,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:13'),(621,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:13'),(622,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:14'),(623,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:14'),(624,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:15'),(625,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:15'),(626,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:16'),(627,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:16'),(628,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:16'),(629,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:18'),(630,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:18'),(631,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:18'),(632,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:19'),(633,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:20'),(634,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:21'),(635,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:22'),(636,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:22'),(637,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:22'),(638,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:22'),(639,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:22'),(640,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:23'),(641,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:23'),(642,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:24'),(643,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:25'),(644,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:25'),(645,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:25'),(646,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:26'),(647,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:26'),(648,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:26'),(649,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:26'),(650,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:26'),(651,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:27'),(652,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:28'),(653,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:28'),(654,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:29'),(655,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:29'),(656,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:29'),(657,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:30'),(658,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:30'),(659,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:32'),(660,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:32'),(661,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:32'),(662,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:33'),(663,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:34'),(664,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:34'),(665,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:34'),(666,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:35'),(667,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:37'),(668,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:38'),(669,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:39'),(670,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:39'),(671,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:44'),(672,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:45'),(673,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:45'),(674,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:47'),(675,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:47'),(676,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:48'),(677,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:49'),(678,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:51'),(679,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:53'),(680,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:53'),(681,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:53'),(682,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:54'),(683,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:54'),(684,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:54'),(685,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:55'),(686,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:55'),(687,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:56'),(688,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:56'),(689,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:57'),(690,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:58'),(691,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 15:58'),(692,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:00'),(693,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:01'),(694,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:02'),(695,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:02'),(696,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:03'),(697,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:03'),(698,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:07'),(699,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:07'),(700,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:07'),(701,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:08'),(702,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:08'),(703,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:09'),(704,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:09'),(705,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:10'),(706,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:10'),(707,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:11'),(708,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:11'),(709,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:11'),(710,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:11'),(711,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:11'),(712,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:12'),(713,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:13'),(714,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:13'),(715,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:13'),(716,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:14'),(717,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:15'),(718,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:15'),(719,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:17'),(720,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:18'),(721,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:18'),(722,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:19'),(723,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:19'),(724,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:21'),(725,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:21'),(726,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:21'),(727,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:22'),(728,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:22'),(729,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:22'),(730,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:23'),(731,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:23'),(732,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:23'),(733,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:24'),(734,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:24'),(735,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:25'),(736,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:25'),(737,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:25'),(738,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:25'),(739,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:25'),(740,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:25'),(741,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:25'),(742,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:26'),(743,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:27'),(744,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:29'),(745,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:30'),(746,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:30'),(747,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:32'),(748,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:32'),(749,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:33'),(750,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:33'),(751,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:34'),(752,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:36'),(753,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:36'),(754,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:37'),(755,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:37'),(756,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:38'),(757,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:38'),(758,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:38'),(759,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:39'),(760,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:39'),(761,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:39'),(762,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:39'),(763,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:39'),(764,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:39'),(765,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:40'),(766,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:41'),(767,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:42'),(768,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:42'),(769,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:44'),(770,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:44'),(771,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:45'),(772,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:45'),(773,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:46'),(774,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:46'),(775,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:46'),(776,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:47'),(777,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:47'),(778,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:48'),(779,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:50'),(780,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:50'),(781,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:51'),(782,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:54'),(783,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 16:55'),(784,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 17:05'),(785,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 17:06'),(786,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 19:35'),(787,'2','asd','::1','1','[OK] Inicio de sesion correcto','30-06-2022 19:35'),(788,'2','asd','::1','1','[OK] Inicio de sesion correcto','01-07-2022 14:55'),(789,'2','asd','::1','1','[OK] Inicio de sesion correcto','01-07-2022 14:56'),(790,'2','asd','::1','1','[OK] Inicio de sesion correcto','01-07-2022 14:56'),(791,'2','asd','::1','1','[OK] Inicio de sesion correcto','01-07-2022 14:56'),(792,'2','asd','::1','1','[OK] Inicio de sesion correcto','01-07-2022 14:56'),(793,'2','asd','::1','1','[OK] Inicio de sesion correcto','01-07-2022 14:56'),(794,'2','asd','::1','1','[OK] Inicio de sesion correcto','01-07-2022 14:56'),(795,'2','asd','::1','1','[OK] Inicio de sesion correcto','01-07-2022 14:57'),(796,'2','asd','::1','1','[OK] Inicio de sesion correcto','01-07-2022 14:57'),(797,'2','asd','::1','1','[OK] Inicio de sesion correcto','01-07-2022 14:57'),(798,'2','asd','::1','1','[OK] Inicio de sesion correcto','01-07-2022 14:57'),(799,'2','asd','::1','1','[OK] Inicio de sesion correcto','01-07-2022 14:57'),(800,'2','asd','::1','1','[OK] Inicio de sesion correcto','01-07-2022 14:57'),(801,'2','asd','::1','1','[OK] Inicio de sesion correcto','01-07-2022 16:46'),(802,'2','asd','::1','1','[OK] Inicio de sesion correcto','01-07-2022 16:46'),(803,'2','asd','::1','1','[OK] Inicio de sesion correcto','01-07-2022 16:47'),(804,'2','asd','::1','1','[OK] Inicio de sesion correcto','01-07-2022 16:47'),(805,'2','asd','::1','1','[OK] Inicio de sesion correcto','01-07-2022 16:47'),(806,'2','asd','::1','1','[OK] Inicio de sesion correcto','01-07-2022 16:48'),(807,'2','asd','::1','1','[OK] Inicio de sesion correcto','01-07-2022 16:48'),(808,'2','asd','::1','1','[OK] Inicio de sesion correcto','01-07-2022 16:48');

#
# Structure for table "users_sancionados"
#

DROP TABLE IF EXISTS `users_sancionados`;
CREATE TABLE `users_sancionados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aplico` varchar(50) DEFAULT NULL,
  `recibio` varchar(50) NOT NULL DEFAULT '',
  `nombre` varchar(100) DEFAULT NULL,
  `razon` varchar(50) NOT NULL,
  `fecha` datetime DEFAULT current_timestamp(),
  `pruebas` longtext DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

#
# Data for table "users_sancionados"
#

