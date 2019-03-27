-- Création d'une nouvelle BDD test
CREATE DATABASE test;
-- Création d'une nouvelle BDD app avec interclassement
CREATE DATABASE app COLLATE utf8mb4_unicode_ci;
-- Suppression de la BDD test
DROP DATABASE test;
-- Affichage de toutes les BDD du serveur
SHOW DATABASES;
-- Utilisation par défaut de la BDD app
USE app;
-- Création de la table cities
CREATE TABLE cities (
	id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(64),
    code_pays VARCHAR(2)
);
-- Création de la table users
CREATE TABLE users (
	id INT PRIMARY KEY AUTO_INCREMENT,
    pseudo VARCHAR(32),
    age INT
);
-- Modification de la table users
ALTER TABLE users
ADD COLUMN mail VARCHAR(64);
-- Modification de la table users
ALTER TABLE users
MODIFY COLUMN age TINYINT UNSIGNED;
-- Affichage des tables
SHOW TABLES;
