<?php 
include('db.php');

// Récupérer les données des membres
$sql = "SELECT nom, prenom, email, telephone FROM membres";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Community</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
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

    <!-- Community Section -->
    <div class="mt-8 bg-white p-8 rounded-lg shadow-md mx-auto max-w-7xl">
        <h2 class="text-2xl font-bold mb-6">Our Community</h2>
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b border-gray-300 text-left">Nom</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left">Prénom</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left">Email</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left">Téléphone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // Afficher les données des membres
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td class='py-2 px-4 border-b border-gray-300'>" . htmlspecialchars($row['nom']) . "</td>";
                        echo "<td class='py-2 px-4 border-b border-gray-300'>" . htmlspecialchars($row['prenom']) . "</td>";
                        echo "<td class='py-2 px-4 border-b border-gray-300'>" . htmlspecialchars($row['email']) . "</td>";
                        echo "<td class='py-2 px-4 border-b border-gray-300'>" . htmlspecialchars($row['telephone']) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4' class='py-2 px-4 border-b border-gray-300 text-center'>Aucun membre trouvé.</td></tr>";
                }
                // Fermer la connexion
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
