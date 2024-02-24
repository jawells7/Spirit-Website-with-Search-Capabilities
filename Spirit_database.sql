DROP USER IF EXISTS 'joe'@'localhost';
DROP DATABASE IF EXISTS `INFS3800Project_db`;

CREATE DATABASE IF NOT EXISTS `INFS3800Project_db`;

USE `INFS3800Project_db`;

CREATE TABLE IF NOT EXISTS `login` (
	`user` varchar(50) PRIMARY KEY,
	`pswd` varchar(50) NOT NULL
);

INSERT INTO `login`
(`user`, `pswd`)
VALUES
	('jma', 'jma123'),
	('jeff', 'jeff123'),
	('jack', 'jack123'),
	('jane', 'jane123'),
	('joe', 'joe123');

CREATE TABLE IF NOT EXISTS `animatronics`(
	`Name` varchar(50) PRIMARY KEY,
	`Year` varchar(4) NOT NULL,
	`Manufacturer` varchar(100) NOT NULL,
	`Price` DOUBLE NOT NULL,
	`Category` varchar(100) NOT NULL
);

INSERT INTO `animatronics` 
(`Name`, `Year`, `Manufacturer`, `Price`, `Category`)
VALUES
	('Grim', 2021, 'Seasonal Visions', 279.99, 'Skeleton'),
	('Lord Raven', 2022, 'Seasonal Visions', 299.99, 'Animals'),
	('Crouchy', 2019, 'Party Time', 299.99, 'Clown'),
	('The Harvester', 2011, 'Tekky Toys', 89.99, 'Scarecrow'),
	('Trick r Treat Sam', 2019, 'YJ Toys & Crafts', 169.99, 'Officially Licensed')
;	

CREATE USER 'joe'@'localhost' IDENTIFIED BY 'joe123';

GRANT ALL PRIVILEGES ON `INFS3800Project_db`.* TO 'joe'@'localhost';

FLUSH PRIVILEGES; 