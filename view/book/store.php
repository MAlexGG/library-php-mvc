<?php

require_once("C://xampp/htdocs/library-php-mvc/controller/BookController.php");

$image = file_get_contents($_FILES['image_url']['tmp_name']);
$obj = new BookController();
$obj->save($_POST['title'], $_POST['description'], $_POST['author'], $_POST['isbn'], $_POST['year_edition'], $image);
