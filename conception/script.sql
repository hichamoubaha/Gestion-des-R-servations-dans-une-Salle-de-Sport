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

    -- Insertion des données dans le tableau activites
INSERT INTO activites (nom_activite, description, capacite, date_debut, date_fin, disponabilite)
VALUES 
    ('Yoga', 'une pratique holistique alliant postures, respiration et méditation pour améliorer flexibilité, force et bien-être mental', 50, '2024-12-10', '2024-12-30', 1),
    ('Boxing', 'Un sport de combat combinant des techniques de frappe et de défense pour améliorer la condition physique, l\endurance et la coordination.', 30, '2024-12-10', '2024-12-30', 1),
    ('Natation', 'Un exercice complet qui améliore la condition physique, la flexibilité et la force, tout en offrant un entraînement cardiovasculaire à faible impact.', 50, '2024-12-10', '2024-12-30', 1);

    -- Insertion des donnees dans le tableau reservation
INSERT INTO reservation (id_membre, id_activite, date_reservation, statut)
VALUES 
    (1, 1, '2024-12-10 10:00:00', 'Confirmee'),
    (2, 2, '2024-12-15 10:00:00', 'Annulee'),
    (3, 3, '2024-12-15 10:00:00', 'Confirmee');

    -- Suppression d'une reservation
DELETE FROM reservation WHERE id_reservation = 1;

-- Suppression d'un membre
DELETE FROM membres WHERE id_membre = 2;

-- Suppression d'une activité
DELETE FROM activites WHERE id_activite = 2;

-- Mise à jour des informations d'un membre
UPDATE membres
SET 
    nom = 'mohammed',
    prenom = 'moustir',
    email = 'moustir.moha@example.com',
    telephone = '0611225594'
WHERE id_membre = 1;

-- Mise à jour des informations d'une activite
UPDATE activites
SET 
    nom_activite = 'CrossFit',
    description = 'Un programme de conditionnement physique combinant halterophilie, gymnastique et cardio pour renforcer la force, l endurance et la flexibilite',
    capacite = 33,
    date_debut = '2024-12-20',
    date_fin = '2024-12-21',
    disponabilite = 1
WHERE id_activite = 1;

ALTER TABLE reservation 
    ADD COLUMN prix_total DECIMAL(10, 2);

    ALTER TABLE membres 
    ADD COLUMN  adresse TEXT;
    
SELECT 
    m.id_membre,
    m.nom,
    m.prenom,
    r.id_reservation,
    r.date_reservation,
    r.statut
FROM 
    membres m
INNER JOIN 
    reservation r ON m.id_membre = r.id_membre;