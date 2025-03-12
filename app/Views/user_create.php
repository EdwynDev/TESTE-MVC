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
    <header class="bg-white shadow-lg mb-8">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <span class="text-xl font-bold text-gray-800">MVC Demo</span>
                </div>
                <div class="flex items-center space-x-8">
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

    <div class="container mx-auto px-6">
        <div class="max-w-2xl mx-auto">
            <h1 class="text-3xl font-bold text-gray-800 mb-8"><?= $title ?></h1>

            <?php if (!empty($error)): ?>
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6" role="alert">
                    <p class="font-bold">Erreur</p>
                    <p><?= $error ?></p>
                </div>
            <?php endif; ?>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <form method="POST" action="/users/create" class="p-8">
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                            <i class="fas fa-user mr-2"></i>Nom
                        </label>
                        <input class="shadow-sm appearance-none border rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500 transition duration-150"
                            type="text" id="name" name="name"
                            value="<?= isset($values['name']) ? htmlspecialchars($values['name']) : '' ?>"
                            required>
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                            <i class="fas fa-envelope mr-2"></i>Email
                        </label>
                        <input class="shadow-sm appearance-none border rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500 transition duration-150"
                            type="email" id="email" name="email"
                            value="<?= isset($values['email']) ? htmlspecialchars($values['email']) : '' ?>"
                            required>
                    </div>

                    <div class="flex items-center justify-between">
                        <a href="/users"
                            class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <i class="fas fa-arrow-left mr-2"></i>
                            Retour
                        </a>
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <i class="fas fa-save mr-2"></i>
                            Créer l'utilisateur
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>