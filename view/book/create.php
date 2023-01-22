<?php
require_once("C://xampp/htdocs/library-php-mvc/view/head/header.php");
?>

<form action="store.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" required name="title" class="form-control" id="title" aria-describedby="title">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" placeholder="Add a description, max. 1500 characters..." id="description" maxlength="1500"></textarea>
    </div>
    <div class="mb-3">
        <label for="author" class="form-label">Author</label>
        <input type="text" required name="author" class="form-control" id="author" aria-describedby="author">
    </div>
    <div class="mb-3">
        <label for="isbn" class="form-label">ISBN</label>
        <input type="text" required name="isbn" class="form-control" id="isbn" aria-describedby="isbn" maxlength="19">
    </div>
    <div class="mb-3">
        <label for="year_edition" class="form-label">Year</label>
        <input type="text" required name="year_edition" class="form-control" id="year_edition" aria-describedby="year_edition" maxlength="4">
    </div>

    <div class="mb-3">
        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
        <label for="image_url" class="form-label">Image</label>
        <input type="file" required name="image_url" class="form-control" id="image_url">
    </div>

    <button type="submit" class="btn btn-dark">Guardar</button>
    <a class="btn btn-warning" href="../../index.php">Cancelar</a>
</form>



<?php
require_once("C://xampp/htdocs/library-php-mvc/view/head/footer.php");
?>