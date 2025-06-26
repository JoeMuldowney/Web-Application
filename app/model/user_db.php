<?php
require_once __DIR__ . '/../../core/connection.php';

class UserDB
{
    private PDO $pdo;
    public function __construct()
    {
        $this->pdo = (new Database)->pdo();
    }

    public function findByName(string $username): ?array
    {
        $stmt = $this->pdo->prepare('SELECT * FROM Assignment_5 WHERE uname = ? LIMIT 1');
        $stmt->execute([$username]);
        return $stmt->fetch() ?: null;
    }    
    

}