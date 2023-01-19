<?php

class Database
{
    private $host = "localhost";
    private $dbname = "library_php_mvc";
    private $user = "root";
    private $password = "";

    public function conection()
    {
        try {
            $pdo = new PDO("mysql:host=" . $this->host . "; dbName=" . $this->dbname, $this->user, $this->password);
            return $pdo;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
