# TESTE-MVC

## Description
Ce projet est une implémentation du pattern MVC (Model-View-Controller) en PHP. Il s'agit d'une application de gestion d'utilisateurs qui démontre les principes fondamentaux de l'architecture MVC.
> - https://testmvc.neopolyworks.fr/
## Architecture MVC
L'architecture MVC divise l'application en trois composants principaux :
- **Model** : Gère les données et la logique métier
- **View** : Gère l'affichage et l'interface utilisateur
- **Controller** : Gère les interactions et fait le lien entre Model et View

## Structure du Projet
```
TESTE-MVC/
├── app/
│   ├── Controllers/           # Contrôleurs de l'application
│   │   ├── HomeController.php # Gère la page d'accueil
│   │   └── UserController.php # Gère les opérations CRUD utilisateurs
│   ├── Models/
│   │   └── User.php          # Modèle pour les opérations base de données utilisateurs
│   └── Views/                # Templates d'interface utilisateur
│       ├── home.php          # Page d'accueil
│       ├── users.php         # Liste des utilisateurs
│       ├── user_details.php  # Détails d'un utilisateur
│       └── user_create.php   # Formulaire de création
├── core/                     # Composants principaux du framework
│   ├── Controller.php        # Classe de base des contrôleurs
│   ├── Model.php            # Classe de base pour l'accès aux données
│   └── Router.php           # Gestion du routage des URLs
├── config/
│   └── routes.php           # Configuration des routes
└── database.sql             # Schema de la base de données
```

## Fonctionnement

### Core Components
1. **Router.php**
   - Gère le routage des URLs vers les contrôleurs appropriés
   - Parse l'URL et appelle le contrôleur et l'action correspondants

2. **Controller.php**
   - Classe de base pour tous les contrôleurs
   - Fournit les méthodes communes pour charger les modèles et les vues

3. **Model.php**
   - Gère la connexion à la base de données
   - Fournit des méthodes de base pour les requêtes SQL

### Controllers
1. **HomeController**
   - Gère l'affichage de la page d'accueil
   - Route: `/`

2. **UserController**
   - Gère toutes les opérations liées aux utilisateurs
   - Routes:
     - `/users` : Liste des utilisateurs
     - `/users/show` : Détails d'un utilisateur
     - `/users/create` : Création d'un utilisateur

### Models
**User.php**
- Gère les opérations CRUD pour les utilisateurs
- Méthodes principales:
  - `getAllUsers()` : Récupère tous les utilisateurs
  - `getUserById()` : Récupère un utilisateur par son ID
  - `createUser()` : Crée un nouvel utilisateur

### Views
- Utilise PHP natif avec Tailwind CSS pour le style
- Responsive et moderne
- Inclut des composants réutilisables

## Installation

1. Cloner le repository:
```bash
git clone https://github.com/EdwynDev/TESTE-MVC.git
```

2. Configuration de la base de données:
```bash
mysql -u root -p < database.sql
```

3. Configurer la connexion base de données dans `core/Model.php`

4. Configurer le serveur web:
   - Point d'entrée: `index.php`
   - Réécriture d'URL activée (.htaccess fourni)

## Dépendances
- PHP 7.4+
- MySQL 5.7+
- Apache avec mod_rewrite
- Tailwind CSS (via CDN)
- Font Awesome (via CDN)

## License
Ce projet est sous licence MIT - voir le fichier LICENSE pour plus de détails.

