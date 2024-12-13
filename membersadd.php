<?php 
include('db.php');

// Vérification si les données du formulaire existent et ne sont pas vides
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['telephone'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];

    // Préparation de la requête SQL pour éviter les injections SQL
    $stmt = $conn->prepare("INSERT INTO membres (nom, prenom, email, telephone) VALUES (?, ?, ?, ?)");
    if ($stmt === false) {
        die('Erreur de préparation de la requête : ' . htmlspecialchars($conn->error));
    }

    // Liaison des paramètres
    $stmt->bind_param("ssss", $nom, $prenom, $email, $telephone);

    // Exécution de la requête
    if ($stmt->execute()) {
        echo "Données enregistrées avec succès !";
    } else {
        echo "Erreur : " . htmlspecialchars($stmt->error);
    }

    // Fermeture de la requête
    $stmt->close();
} else {
    echo "Tous les champs du formulaire ne sont pas remplis.";
}

// Fermeture de la connexion
$conn->close();
?>
