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

    public function getBooks()
    {
        $statement = $this->pdo->prepare("SELECT * FROM library_php_mvc.books");
        return ($statement->execute()) ? $statement->fetchAll() : false;
    }

    public function update($id, $title, $author, $isbn, $year_edition)
    {
        $statement = $this->pdo->prepare("UPDATE library_php_mvc.books SET title = :title, author = :author, isbn = :isbn, year_edition =:year_edition WHERE id = :id");
        $statement->bindParam(":id", $id);
        $statement->bindParam(":title", $title);
        $statement->bindParam(":author", $author);
        $statement->bindParam(":isbn", $isbn);
        $statement->bindParam(":year_edition", $year_edition);
        return ($statement->execute()) ? $id : false;
    }

    public function delete($id)
    {
        $statement = $this->pdo->prepare("DELETE FROM library_php_mvc.books WHERE id = :id ");
        $statement->bindParam(":id", $id);
        return ($statement->execute()) ? true : false;
    }
}
