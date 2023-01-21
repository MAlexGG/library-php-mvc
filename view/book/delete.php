<?php

require_once("c://xampp/htdocs/library-php-mvc/controller/BookController.php");

$obj = new BookController();
$obj->delete($_GET['id']);
