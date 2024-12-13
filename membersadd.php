<?php 
include('db.php');

// Vérifier si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer et valider les données
    $nom = $conn->real_escape_string($_POST['nom']);
    $prenom = $conn->real_escape_string($_POST['prenom']);
    $email = $conn->real_escape_string($_POST['email']);
    $telephone = $conn->real_escape_string($_POST['telephone']);

    // Insertion des données
    $sql = "INSERT INTO membres (nom, prenom, email, telephone) 
            VALUES ('$nom', '$prenom', '$email', '$telephone')";

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

