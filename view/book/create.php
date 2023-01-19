<?php
require_once("C://xampp/htdocs/library-php-mvc/view/head/head.php");
?>

<form action="store.php" method="POST">
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="title" aria-describedby="title">
    </div>
    <div class="mb-3">
        <label for="author" class="form-label">Author</label>
        <input type="text" name="author" class="form-control" id="author" aria-describedby="author">
    </div>
    <div class="mb-3">
        <label for="isbn" class="form-label">ISBN</label>
        <input type="text" name="isbn" class="form-control" id="isbn" aria-describedby="isbn">
    </div>
    <div class="mb-3">
        <label for="year_edition" class="form-label">Year</label>
        <input type="text" name="year_edition" class="form-control" id="year_edition" aria-describedby="year_edition">
    </div>

    <button type="submit" class="btn btn-dark">Guardar</button>
    <a class="btn btn-warning" href="../../index.php">Cancelar</a>
</form>



<?php
require_once("C://xampp/htdocs/library-php-mvc/view/head/footer.php");
?>