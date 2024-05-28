create database agenciadb;
use agenciadb;

CREATE TABLE usuarios(
id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
usuario tinytext not null,
pass longtext not null,
email tinytext not null
);