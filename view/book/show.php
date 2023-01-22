<?php
require_once("c://xampp/htdocs/library-php-mvc/view/head/header.php");

require_once("c://xampp/htdocs/library-php-mvc/controller/BookController.php");

$obj = new BookController();
$book = $obj->show($_GET['id']);

?>

<h2 class="text-start m-5">Book Detail</h2>
<div class="pb-3">
    <a href="index.php" class="btn btn-dark">Return</a>



</div>
<div class="card" style="width: 50rem;">
    <img src="data:image/jpg; base64,<?= base64_encode($book['image_url']) ?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?= $book["title"] ?></h5>
        <p class="card-text"><?= $book["description"] ?></p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Author: <?= $book["author"] ?></li>
        <li class="list-group-item">ISBN: <?= $book["isbn"] ?></li>
        <li class="list-group-item">Year: <?= $book["year_edition"] ?></li>

    </ul>
    <div class="card-body">
        <a href="edit.php?id=<?= $book["id"] ?>" class="btn btn-dark">Edit</a>
        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</a>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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


<?php
require_once("c://xampp/htdocs/library-php-mvc/view/head/footer.php");
?>