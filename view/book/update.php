<?php

require_once("c://xampp/htdocs/library-php-mvc/controller/BookController.php");

$image = file_get_contents($_FILES['image_url']['tmp_name']);
$obj = new BookController();
$obj->update($_POST['id'], $_POST['title'], $_POST['description'], $_POST['author'], $_POST['isbn'], $_POST['year_edition'], $image);
