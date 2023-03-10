<?php

class BookController
{
    private $model;

    public function __construct()
    {
        require_once("C://xampp/htdocs/library-php-mvc/model/BookModel.php");
        $this->model = new BookModel();
    }

    public function save($title, $description, $author, $isbn, $year_edition, $image_url)
    {
        $id = $this->model->insert($title, $description, $author, $isbn, $year_edition, $image_url);
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

    public function update($id, $title, $description, $author, $isbn, $year_edition, $image_url)
    {
        return ($this->model->update($id, $title, $description, $author, $isbn, $year_edition, $image_url) != false) ? header("Location:show.php?id=" . $id) : header("Location:index.php");
    }

    public function delete($id)
    {
        return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=" . $id);
    }

    public function search($search)
    {
        return ($this->model->search($search)) ? $this->model->search($search) : false;
    }
}
