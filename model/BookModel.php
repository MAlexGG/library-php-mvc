<?php

class BookModel
{
    private $pdo;

    public function __construct()
    {
        require_once("c://xampp/htdocs/library-php-mvc/config/Database.php");
        $con = new Database();
        $this->pdo = $con->connection();
    }

    public function insert($title, $author, $isbn, $year_edition)
    {
        $statement = $this->pdo->prepare("INSERT INTO library_php_mvc.books VALUES(null, :title, :author, :isbn,:year_edition)");
        $statement->bindParam(":title", $title);
        $statement->bindParam(":author", $author);
        $statement->bindParam(":isbn", $isbn);
        $statement->bindParam(":year_edition", $year_edition);

        return ($statement->execute()) ? $this->pdo->lastInsertId() : false;
    }

    public function show($id)
    {
        $statement = $this->pdo->prepare("SELECT * FROM library_php_mvc.books WHERE id= :id LIMIT 1");
        $statement->bindParam(":id", $id);
        return ($statement->execute()) ? $statement->fetch() : false;
    }
}
