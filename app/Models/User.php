<?php
namespace App\Models;

class User {
    private $db;

    public function __construct() {
        $this->db = new \PDO('mysql:host=localhost;dbname=your_database', 'username', 'password');
    }

    public function getAll() {
        $stmt = $this->db->query('SELECT * FROM users');
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->db->prepare('SELECT * FROM users WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
} 