<?php
include('db.php');

// Récupération des données du formulaire
$id_membre = $_POST['membre'];
$id_activite = $_POST['activite'];
$date_reservation = $_POST['date_reservation']; // Ensure this is in the correct DATETIME format
$statut = $_POST['statut'];

// Insertion dans la table reservation
$sql = "INSERT INTO reservation (id_membre, id_activite, date_reservation, statut) 
        VALUES ('$id_membre', '$id_activite', '$date_reservation', '$statut')";

if ($conn->query($sql) === TRUE) {
    echo "Réservation ajoutée avec succès.";
} else {
    echo "Erreur : " . $conn->error;
}

$conn->close();
?>
