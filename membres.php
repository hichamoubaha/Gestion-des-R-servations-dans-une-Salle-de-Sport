<?php 
include('db.php');

// Vérifier si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];

    // Insertion des données dans la base
    $sql = "INSERT INTO membres (nom, prenom, email, telephone) 
            VALUES ('$nom', '$prenom', '$email', '$telephone')";

    if ($conn->query($sql) === TRUE) {
        $message = "Données enregistrées avec succès !";
    } else {
        $message = "Erreur : " . $conn->error;
    }

    // Fermer la connexion
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Inscription</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="bg-green-800 p-4 flex justify-between items-center">
        <div class="flex space-x-8">
            <a href="index.php" class="text-white font-bold">Home</a>
            <a href="membres.php" class="text-white font-bold">Inscription</a>
            <a href="activites.php" class="text-white font-bold">Activities</a>
            <a href="reservations.php" class="text-white font-bold">Reservations</a>
            <a href="our-community.php" class="text-white font-bold">Members</a>
        </div>
        <div class="relative">
            <input type="text" placeholder="SEARCH" class="px-4 py-1 rounded-full w-48 focus:outline-none">
        </div>
    </nav>

    <!-- Message after submission -->
    <?php
    if (isset($message)) {
        echo "<div class='text-center text-green-600 mb-6'>$message</div>";
    }
    ?>

    <!-- Formulaire d'Inscription -->
    <div class="mt-8 bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6">Formulaire d'Inscription</h2>
        <form action="membres.php" method="POST">
            <div class="mb-4">
                <label for="nom" class="block text-gray-700">Nom:</label>
                <input type="text" id="nom" name="nom" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
            </div>
            <div class="mb-4">
                <label for="prenom" class="block text-gray-700">Prénom:</label>
                <input type="text" id="prenom" name="prenom" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email:</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
            </div>
            <div class="mb-4">
                <label for="telephone" class="block text-gray-700">Téléphone:</label>
                <input type="tel" id="telephone" name="telephone" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
            </div>
            <button type="submit" class="bg-green-800 text-white px-4 py-2 rounded-lg hover:bg-green-700">S'inscrire</button>
        </form>
    </div>
</body>
</html>
