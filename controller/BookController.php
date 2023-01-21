<?php

class BookController
{
    private $model;

    public function __construct()
    {
        require_once("C://xampp/htdocs/library-php-mvc/model/BookModel.php");
        $this->model = new BookModel();
    }

    public function save($title, $author, $isbn, $year_edition)
    {
        $id = $this->model->insert($title, $author, $isbn, $year_edition);
        return ($id != false) ? header("Location:show.php?id=" . $id) : ("Location:create.php");
    }

    public function show($id)
    {
        return ($this->model->show($id) != false ? $this->model->show($id) : header("Location:index.php"));
    }
}
