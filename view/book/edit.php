<?php
require_once("c://xampp/htdocs/library-php-mvc/view/head/header.php");

require_once("c://xampp/htdocs/library-php-mvc/controller/BookController.php");

$obj = new BookController();
$bookToEdit = $obj->show($_GET['id']);
?>
<form action="update.php" method="POST" autocomplete="off">
    <h2>Edit Book</h2>
    <div class="mb-3 row">
        <label for="id" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="id" name="id" value="<?= $bookToEdit["id"] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="title" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="title" name="title" value="<?= $bookToEdit["title"] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="description" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
            <textarea class="form-control" id="description" name="description" maxlength="1500"><?= $bookToEdit['description'] ?></textarea>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="author" class="col-sm-2 col-form-label">Author</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="author" name="author" value="<?= $bookToEdit["author"] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="isbn" class="col-sm-2 col-form-label">ISBN</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="isbn" name="isbn" maxlength="19" value="<?= $bookToEdit["isbn"] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="year_edition" class="col-sm-2 col-form-label">Year</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="year_edition" name="year_edition" maxlength="4" value="<?= $bookToEdit["year_edition"] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="image_url" class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" id="image_url" name="image_url">
        </div>
    </div>
    <div>
        <input type="submit" class="btn btn-warning" value="Update">
        <a class="btn btn-dark" href="show.php?=id<?= $bookToEdit["id"] ?>">Cancel</a>
    </div>
</form>
<?php
require_once("c://xampp/htdocs/library-php-mvc/view/head/footer.php");
?>