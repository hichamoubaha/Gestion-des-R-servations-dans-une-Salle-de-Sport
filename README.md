# Gestion des Réservations dans une Salle de Sport

## Contexte

Une salle de sport souhaite moderniser son système de gestion en mettant en place une application web. Actuellement, toutes les opérations sont réalisées manuellement, ce qui entraîne des erreurs et des difficultés dans la gestion quotidienne. Le but est de créer un outil simple pour :
- Gérer les membres inscrits à la salle.
- Planifier et afficher les activités ou équipements disponibles.
- Permettre aux membres de réserver des activités ou des équipements.

## Objectif du Projet

Vous êtes chargé de concevoir une solution complète basée sur un schéma de base de données fourni. Votre projet devra inclure la modélisation, la configuration de l'environnement, et le développement de fonctionnalités essentielles.

## Instructions de Réalisation

### 1. Schéma de la base de données (ERD)

Analysez le schéma de base de données fourni et réalisez un cahier des charges décrivant :
- Les entités principales (ex. Membres, Activités, Réservations).
- Les relations entre les entités.
- Les besoins fonctionnels du système en vous basant sur ce schéma.

### 2. Conception des tables

À partir du schéma fourni :
- Concevez les tables nécessaires en respectant la structure donnée.
- Ajoutez, si besoin, des attributs ou des tables supplémentaires pour répondre à des besoins spécifiques.

### 3. Diagramme UML (Cas d’utilisation)

Réalisez un diagramme de cas d’utilisation (Use Case Diagram) en identifiant :
- Les acteurs principaux du système (ex. membre, administrateur).
- Les interactions possibles entre les acteurs et le système.

### 4. Configuration de l’environnement

Installer et configurer l'environnement de travail :
- Logiciels requis (ex. serveur local, éditeur de code).
- Création de la base de données à partir du schéma fourni.
- Structure des fichiers pour votre projet.

### 5. Scripts SQL

Écrivez les scripts nécessaires pour :
- Créer la base de données et ses tables.
- Réaliser des opérations d’insertion, de mise à jour, et de suppression sur les tables.
- Effectuer une requête de jointure simple entre deux tables.

### 6. Fonctionnalités en PHP

Développez les fonctionnalités suivantes :
- Ajouter des données via des formulaires (ex. membres, activités, réservations).
- Afficher dynamiquement les données de la base (ex. liste des membres ou réservations).

## Configuration de l’Environnement

### 1. Installation de XAMPP

- Téléchargez XAMPP à partir du site officiel [Apache Friends](https://www.apachefriends.org).
- Suivez les instructions pour installer XAMPP sur votre ordinateur.
- Ouvrez le panneau de contrôle XAMPP et démarrez les services **Apache** et **MySQL**.

### 2. Structure du Projet

- Allez dans le dossier `xampp/htdocs` sur votre machine.
- Créez un dossier nommé `brief-fitness`.
- Placez tous les fichiers PHP nécessaires (ex. `index.php`, `membres.php`, `activites.php`, `reservations.php`) dans ce dossier.

### 3. Configuration de la Base de Données

- Accédez à [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
- Créez une nouvelle base de données nommée `sport1`.
- Importez le schéma de base de données fourni.

### 4. Connexion à la Base de Données

- Utilisez l’extension `mysqli` pour interagir avec la base de données MySQL dans vos fichiers PHP :
  ```php
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "sport1";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  ?>
