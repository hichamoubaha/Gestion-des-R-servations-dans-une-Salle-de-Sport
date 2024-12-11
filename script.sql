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

-- Creation du tableau activites
CREATE TABLE activites (
    id_activite INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom_activite VARCHAR(100),
    description TEXT,
    capacite INT(11),
    date_debut DATE,
    date_fin DATE,
    disponabilite TINYINT(1)
);

-- Creation du tableau reservation
CREATE TABLE reservation (
    id_reservation INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_membre INT NOT NULL,
    id_activite INT NOT NULL,
    date_reservation DATETIME,
    statut ENUM('Confirmee', 'Annulee'),
    FOREIGN KEY (id_membre) REFERENCES membres(id_membre) ON DELETE CASCADE,
    FOREIGN KEY (id_activite) REFERENCES activites(id_activite) ON DELETE CASCADE
);