<?php
include('db.php');

// Vérifier si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer et valider les données
    $nom_activite = $conn->real_escape_string($_POST['nom_activite']);
    $description = $conn->real_escape_string($_POST['description_activite']);  // Fixed name
    $capacite = (int)$_POST['capacite_activite'];  // Fixed name
    $date_debut = $_POST['date_debut_activite'];  // Fixed name
    $date_fin = $_POST['date_fin_activite'];  // Fixed name
    $disponibilite = (int)$_POST['disponibilite_activite'];  // Fixed name

    // Insertion des données
    $sql = "INSERT INTO activites (nom_activite, description, capacite, date_debut, date_fin, disponabilite) 
            VALUES ('$nom_activite', '$description', $capacite, '$date_debut', '$date_fin', $disponibilite)";

    if ($conn->query($sql) === TRUE) {
        echo "Données enregistrées avec succès !";
    } else {
        echo "Erreur : " . $conn->error;
    }

    // Fermer la connexion
    $conn->close();
} else {
    echo "Méthode non autorisée.";
}
?>
