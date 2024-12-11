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
-- Insertion des donnees dans le tableau membres
INSERT INTO membres (nom, prenom, email, telephone)
VALUES 
    ('Hanane', 'Oubaha', 'hanane@gmail.com', '0632114578'),
    ('Hicham', 'Oubaha', 'hicham@gmail.com', '0632114560'),
    ('oumaima', 'Bramid', 'oumaima5@gmail.com', '0744145447'),
    ('ousssama', 'Eddarkaoui', 'Eddarkaoui77@gmail.com', '0632114544'),
    ('abdelah', 'Elmalky', 'Elmalky@gmail.com', '0632114896');