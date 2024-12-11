CREATE DATABASE sport1;
USE sport1;

-- Creation du tableau membres
CREATE TABLE membres (
    id_membre INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    email VARCHAR(100) UNIQUE,
    telephone VARCHAR(15)
);