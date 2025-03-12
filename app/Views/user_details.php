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
        <div class="max-w-3xl mx-auto">
            <h1 class="text-3xl font-bold text-gray-800 mb-8"><?= $title ?></h1>

            <?php if (isset($error)): ?>
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6" role="alert">
                    <p class="font-bold">Erreur</p>
                    <p><?= $error ?></p>
                </div>
            <?php endif; ?>

            <?php if ($user): ?>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-8">
                        <div class="flex items-center justify-center mb-6">
                            <div class="h-24 w-24 rounded-full bg-gray-300 flex items-center justify-center">
                                <i class="fas fa-user text-gray-500 text-4xl"></i>
                            </div>
                        </div>

                        <dl class="grid grid-cols-1 gap-6">
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 rounded-lg">
                                <dt class="text-sm font-medium text-gray-500">ID</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"><?= $user['id'] ?></dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 rounded-lg">
                                <dt class="text-sm font-medium text-gray-500">Nom</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"><?= $user['name'] ?></dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 rounded-lg">
                                <dt class="text-sm font-medium text-gray-500">Email</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"><?= $user['email'] ?></dd>
                            </div>
                        </dl>
                    </div>
                    <div class="bg-gray-50 px-4 py-4 sm:px-6">
                        <a href="/users" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <i class="fas fa-arrow-left mr-2"></i>
                            Retour à la liste
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>