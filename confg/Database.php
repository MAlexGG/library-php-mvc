<?php

class Database
{
    private $host = "localhost";
    private $dbName = "library_php_mvc";
    private $user = "root";
    private $password = "";

    public function conection()
    {
        try {
            $pdo = new PDO("mysql:host=" . $this->host . "; dbName=" . $this->dbName, $this->user, $this->password);
            return $pdo;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}

$obj = new Database();
print_r($obj->conection());
