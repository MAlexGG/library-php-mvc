<?php

require_once("c://xampp/htdocs/library-php-mvc/view/head/header.php");
require_once("c://xampp/htdocs/library-php-mvc/controller/BookController.php");

$obj = new BookController();
$books = $obj->getBooks();

?>
<a href="/library-php-mvc/view/book/create.php" class="btn btn-dark">Agregar Libro</a>


<?php if ($books) : ?>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-3">
        <?php foreach ($books as $book) : ?>
            <div class="col">
                <div class="card" style="width: 25rem;">
                    <img src="data:image/jpg; base64,<?= base64_encode($book["image_url"]) ?>" class="card-img-top" alt="<?= $book["title"] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $book["title"] ?></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Author: <?= $book["author"] ?></li>
                        <li class="list-group-item">Year: <?= $book["year_edition"] ?></li>
                        <li class="list-group-item">ISBN: <?= $book["isbn"] ?></li>
                    </ul>
                    <div class="card-body">
                        <a href="show.php?id=<?= $book["id"] ?>" class="btn btn-dark">Read more...</a>
                        <a href="edit.php?id=<?= $book["id"] ?>" class="btn btn-warning">Edit</a>
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal-<?= $book["id"] ?>">Delete</a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal-<?= $book["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Do you want to delete this book?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        You will delete the book <strong><?= $book["title"] ?></strong> and you will not be able to undo this operation
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancel</button>
                                        <a href="delete.php?id=<?= $book["id"] ?> " class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

<?php else : ?>
    <h3 class="text-center">There is not books</h3>
<?php endif; ?>

<?php
require_once("c://xampp/htdocs/library-php-mvc/view/head/footer.php");
?>