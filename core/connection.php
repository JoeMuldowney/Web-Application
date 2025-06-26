<?php
class Database
{

    private PDO $pdo;
    public function __construct()
    {
        
        $host = getenv('DB_HOST');
        $dbname = getenv('DB_NAME');
        $user = getenv('DB_USER');
        $pass = getenv('DB_PASS');

       
        $this->pdo = new PDO(
            "mysql:host=$host;dbname=$dbname;charset=utf8mb4",$user,$pass,
            [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]
        );
    }
    
    public function pdo(): PDO
    {
        return $this->pdo;
    }
}