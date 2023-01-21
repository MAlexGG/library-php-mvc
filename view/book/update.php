<?php

require_once("c://xampp/htdocs/library-php-mvc/controller/BookController.php");

$obj = new BookController();
$obj->update($_POST['id'], $_POST['title'], $_POST['author'], $_POST['isbn'], $_POST['year_edition']);
