<?php

namespace App\Controllers;

use App\Core\Controller;

class UserController extends Controller {
    private $userModel;
    
    public function __construct() {
        $this->userModel = $this->model('User');
    }
    
    public function index() {
        $users = $this->userModel->getAllUsers();
        $data = [
            'title' => 'Liste des utilisateurs',
            'users' => $users
        ];
        $this->view('users', $data);
    }

    public function show() {
        $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
        if ($id <= 0) {
            $this->redirect('/TESTE-MVC/users');
        }
        
        $user = $this->userModel->getUserById($id);
        if (!$user) {
            $this->view('user_details', [
                'title' => 'Erreur',
                'error' => 'Utilisateur non trouvé'
            ]);
            return;
        }
        
        $this->view('user_details', [
            'title' => 'Détails de l\'utilisateur',
            'user' => $user
        ]);
    }
    
    public function create() {
        $data = [
            'title' => 'Créer un utilisateur',
            'error' => '',
            'values' => [
                'name' => '',
                'email' => ''
            ]
        ];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data['values'] = [
                'name' => isset($_POST['name']) ? trim($_POST['name']) : '',
                'email' => isset($_POST['email']) ? trim($_POST['email']) : ''
            ];
            
            if (empty($data['values']['name'])) {
                $data['error'] = 'Le nom est requis';
            } elseif (!filter_var($data['values']['email'], FILTER_VALIDATE_EMAIL)) {
                $data['error'] = 'Email invalide';
            } else {
                try {
                    $this->userModel->createUser($data['values']['name'], $data['values']['email']);
                    $this->redirect('/TESTE-MVC/users');
                } catch (\Exception $e) {
                    $data['error'] = $e->getMessage();
                }
            }
        }
        
        $this->view('user_create', $data);
    }

    private function redirect($url) {
        header('Location: ' . $url);
        exit;
    }
}
