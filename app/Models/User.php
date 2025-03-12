<?php
namespace App\Models;

use App\Core\Model;

class User extends Model {
    public function getAllUsers() {
        $stmt = $this->query("SELECT * FROM users ORDER BY id DESC");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    
    public function getUserById($id) {
        $stmt = $this->query("SELECT * FROM users WHERE id = ?", [$id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function createUser($name, $email) {
        if (empty($name) || empty($email)) {
            throw new \Exception('Le nom et l\'email sont requis');
        }
        
        // Vérifier si l'email existe déjà
        $stmt = $this->query("SELECT id FROM users WHERE email = ?", [$email]);
        if ($stmt->fetch()) {
            throw new \Exception('Cet email est déjà utilisé');
        }
        
        $this->query("INSERT INTO users (name, email) VALUES (?, ?)", [$name, $email]);
        return $this->db->lastInsertId();
    }
}
