CREATE DATABASE `prueba` /*!40100 DEFAULT CHARACTER SET utf8mb4 */

CREATE TABLE `registro` (
                            `id` int(11) NOT NULL AUTO_INCREMENT,
                            `nombre` varchar(250) NOT NULL,
                            `apellido` varchar(250) NOT NULL,
                            `cedula` decimal(20,0) DEFAULT NULL,
                            PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4