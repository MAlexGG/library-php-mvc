<?php

require_once("C://xampp/htdocs/library-php-mvc/controller/BookController.php");

$obj = new BookController();
$obj->save($_POST['title'], $_POST['author'], $_POST['isbn'], $_POST['year_edition']);
