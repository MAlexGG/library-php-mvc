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

    public function getBooks()
    {
        return ($this->model->getBooks()) ? $this->model->getBooks() : false;
    }

    public function update($id, $title, $author, $isbn, $year_edition)
    {
        return ($this->model->update($id, $title, $author, $isbn, $year_edition) != false) ? header("Location:show.php?id=" . $id) : header("Location:index.php");
    }

    public function delete($id)
    {
        return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=" . $id);
    }
}
