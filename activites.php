<?php
include('db.php');

// Vérifier si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données
    $nom_activite = $_POST['nom_activite'];
    $description = $_POST['description_activite'];
    $capacite = $_POST['capacite_activite'];
    $date_debut = $_POST['date_debut_activite'];
    $date_fin = $_POST['date_fin_activite'];
    $disponibilite = $_POST['disponibilite_activite'];

    // Insertion des données
    $sql = "INSERT INTO activites (nom_activite, description, capacite, date_debut, date_fin, disponabilite) 
            VALUES ('$nom_activite', '$description', '$capacite', '$date_debut', '$date_fin', '$disponibilite')";

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
    <title>Inscription Activité</title>
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

    <!-- Main Content -->
    <div class="container mx-auto mt-10">
        <h1 class="text-4xl font-bold text-center text-yellow-400 mb-6">Inscription à une Activité</h1>

        <?php if (isset($message)) : ?>
            <div class="bg-green-500 text-white text-center p-3 rounded mb-4">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>

        <div class="bg-white p-8 rounded-lg shadow-lg max-w-md mx-auto">
            <form action="" method="POST">
                <div class="mb-4">
                    <label for="nom_activite" class="block text-gray-700 font-bold mb-2">Nom de l'activité:</label>
                    <input type="text" id="nom_activite" name="nom_activite" class="w-full px-3 py-2 border rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label for="description_activite" class="block text-gray-700 font-bold mb-2">Description:</label>
                    <textarea id="description_activite" name="description_activite" class="w-full px-3 py-2 border rounded-lg" required></textarea>
                </div>
                <div class="mb-4">
                    <label for="capacite_activite" class="block text-gray-700 font-bold mb-2">Capacité:</label>
                    <input type="number" id="capacite_activite" name="capacite_activite" class="w-full px-3 py-2 border rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label for="date_debut_activite" class="block text-gray-700 font-bold mb-2">Date de début:</label>
                    <input type="date" id="date_debut_activite" name="date_debut_activite" class="w-full px-3 py-2 border rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label for="date_fin_activite" class="block text-gray-700 font-bold mb-2">Date de fin:</label>
                    <input type="date" id="date_fin_activite" name="date_fin_activite" class="w-full px-3 py-2 border rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label for="disponibilite_activite" class="block text-gray-700 font-bold mb-2">Disponibilité:</label>
                    <select id="disponibilite_activite" name="disponibilite_activite" class="w-full px-3 py-2 border rounded-lg" required>
                        <option value="1">Disponible</option>
                        <option value="0">Complet</option>
                    </select>
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-green-800 text-white px-6 py-2 rounded-full hover:bg-green-700 transition-colors">S'inscrire</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
