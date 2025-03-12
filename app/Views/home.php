<!DOCTYPE html>
<html>

<head>
    <title><?= $title ?></title>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/lib/index.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-gray-100 to-gray-200 min-h-screen">
    <header class="bg-white shadow-lg">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <span class="text-xl font-bold text-gray-800">MVC Demo</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="text-gray-800 hover:text-blue-600 transition duration-300">
                        <i class="fas fa-home mr-2"></i>Accueil
                    </a>
                    <a href="/users" class="text-gray-800 hover:text-blue-600 transition duration-300">
                        <i class="fas fa-users mr-2"></i>Utilisateurs
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-6 py-8">
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4"><?= $title ?></h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto"><?= $message ?></p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 mb-12">
            <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition duration-300">
                <div class="text-blue-500 text-3xl mb-4">
                    <i class="fas fa-cogs"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Architecture MVC</h3>
                <p class="text-gray-600">Structure claire et organisée suivant le pattern Model-View-Controller.</p>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition duration-300">
                <div class="text-green-500 text-3xl mb-4">
                    <i class="fas fa-database"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Base de données</h3>
                <p class="text-gray-600">Gestion efficace des données avec MySQL et PDO.</p>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition duration-300">
                <div class="text-purple-500 text-3xl mb-4">
                    <i class="fas fa-paint-brush"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Interface moderne</h3>
                <p class="text-gray-600">Design responsive avec Tailwind CSS.</p>
            </div>
        </div>

        <div class="bg-blue-600 text-white rounded-xl shadow-lg p-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Prêt à commencer ?</h2>
            <p class="mb-6">Explorez la gestion des utilisateurs de notre application.</p>
            <a href="/users" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">
                Voir les utilisateurs
            </a>
        </div>
    </main>
</body>

</html>