<?php

require_once("c://xampp/htdocs/library-php-mvc/controller/BookController.php");

$obj = new BookController();

$oldImage = $obj->show($_POST['id']);
$newImage = $_FILES['image_url']['tmp_name'];

if (!$newImage) {
    $image = $oldImage['image_url'];
} else {
    $image = file_get_contents($_FILES['image_url']['tmp_name']);
}

$obj->update($_POST['id'], $_POST['title'], $_POST['description'], $_POST['author'], $_POST['isbn'], $_POST['year_edition'], $image);
