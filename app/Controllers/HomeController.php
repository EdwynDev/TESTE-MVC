<?php
namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller {
    public function index() {
        $data = [
            'title' => 'Accueil',
            'message' => 'Bienvenue sur notre application MVC en PHP'
        ];
        
        $this->view('home', $data);
    }
}
