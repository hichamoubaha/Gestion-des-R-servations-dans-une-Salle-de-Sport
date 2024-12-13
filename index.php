<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Workout Session</title>
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
    <div class="relative bg-gray-100 p-8">
        <div class="flex items-center justify-between">
            <div class="w-1/2">
                <h1 class="text-6xl font-bold text-yellow-400 mb-2">FITNESS</h1>
                <h2 class="text-4xl font-bold text-yellow-400 mb-6">WORKOUT SESSIONS</h2>
                <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                <p class="text-gray-700 mb-6">consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
                <button class="border-2 border-gray-800 text-gray-800 px-8 py-2 rounded-full hover:bg-gray-800 hover:text-white transition-colors">
                    LEARN MORE
                </button>
            </div>

            <div class="w-1/2">
                <img src="fitness 22.jpg" alt="Fitness Trainer" class="rounded-lg">
            </div>
        </div>
        <!-- Arrow Decorations -->
        <div class="absolute bottom-8 left-8 flex space-x-1">
            <div class="text-yellow-400 text-4xl">&gt;&gt;</div>
            <div class="text-yellow-400 text-4xl">&gt;&gt;&gt;&gt;&gt;&gt;&gt;</div>
        </div>
    </div>
</body>
</html>
