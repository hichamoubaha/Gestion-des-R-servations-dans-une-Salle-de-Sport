<?php
include('db.php');
// Récupération des membres
$sql_membres = "SELECT id_membre, CONCAT(nom, ' ', prenom) AS nom_complet FROM membres";
$result_membres = $conn->query($sql_membres);

// Récupération des activités
$sql_activites = "SELECT id_activite, nom_activite FROM activites";
$result_activites = $conn->query($sql_activites);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Réservation</title>
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

    <!-- Formulaire de Réservation -->
    <div class="mt-8 max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6">Formulaire de Réservation</h2>
        <form action="reservationadd.php" method="POST" class="space-y-6">
            <!-- Sélection du membre -->
            <div class="mb-4">
                <label for="membre" class="block text-gray-700">Nom du membre:</label>
                <select name="membre" id="membre" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="">Sélectionnez un membre</option>
                    <?php
                    if ($result_membres->num_rows > 0) {
                        while ($row = $result_membres->fetch_assoc()) {
                            echo "<option value='{$row['id_membre']}'>{$row['nom_complet']}</option>";
                        }
                    } else {
                        echo "<option value=''>Aucun membre trouvé</option>";
                    }
                    ?>
                </select>
            </div>

            <!-- Sélection de l'activité -->
            <div class="mb-4">
                <label for="activite" class="block text-gray-700">Activité:</label>
                <select name="activite" id="activite" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="">Sélectionnez une activité</option>
                    <?php
                    if ($result_activites->num_rows > 0) {
                        while ($row = $result_activites->fetch_assoc()) {
                            echo "<option value='{$row['id_activite']}'>{$row['nom_activite']}</option>";
                        }
                    } else {
                        echo "<option value=''>Aucune activité trouvée</option>";
                    }
                    ?>
                </select>
            </div>

            <!-- Sélection de la date de réservation -->
            <div class="mb-4">
                <label for="date_reservation" class="block text-gray-700">Date de réservation:</label>
                <input type="datetime-local" name="date_reservation" id="date_reservation" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <!-- Sélection du statut -->
            <div class="mb-4">
                <label for="statut" class="block text-gray-700">Statut:</label>
                <select name="statut" id="statut" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="Confirmee">Confirmée</option>
                    <option value="Annulee">Annulée</option>
                </select>
            </div>

            <!-- Bouton de soumission -->
            <div>
                <button type="submit" class="w-full bg-green-800 text-white px-4 py-2 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                    Soumettre
                </button>
            </div>
        </form>
    </div>

</body>
</html>
