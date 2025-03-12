<?php
namespace App\Core;
class Model {
    protected $db;
    
    public function __construct() {
        $host = 'localhost';
        $dbname = 'mvc_example';
        $username = 'root';
        $password = '';
        
        try {
            $this->db = new \PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch(\PDOException $e) {
            die("Erreur de connexion: " . $e->getMessage());
        }
    }
    
    protected function query($sql, $params = []) {
        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }
}
