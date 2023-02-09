<?php
require_once("c://xampp/htdocs/library-php-mvc/view/head/header.php");
require_once("c://xampp/htdocs/library-php-mvc/controller/BookController.php");
$obj = new BookController();
$books = $obj->search($_POST['search']);
?>

<div class="ct-index">
    <?php if ($books) : ?>
        <div class="ct-books">
            <?php foreach ($books as $book) : ?>
                <div class="ct-book">
                    <div class="ct-book-img">
                        <img class="book-img" src="data:image/jpg; base64,<?= base64_encode($book["image_url"]) ?>" class="" alt="<?= $book["title"] ?>">
                    </div>
                    <div class="ct-book-txt">
                        <h5 class=""><?= $book["title"] ?></h5>
                        <ul>
                            <li>Author: <?= $book["author"] ?></li>
                            <li>Year: <?= $book["year_edition"] ?></li>
                            <li>ISBN: <?= $book["isbn"] ?></li>
                        </ul>
                        <div class="ct-book-bt">
                            <a href="show.php?id=<?= $book["id"] ?>" class="btn btn-dark">Read more...</a>
                            <a href="edit.php?id=<?= $book["id"] ?>" class="btn btn-warning">Edit</a>
                            <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal-<?= $book["id"] ?>">Delete</a>
                        </div>
                    </div>
                </div>
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



            <?php endforeach; ?>
        </div>

    <?php else : ?>
        <div class="ct-no-books">
            <h3 class="text-center txt-books text-warning p-5 ct-no-books">There are no books matching your search</h3>
        </div>


</div>
<?php endif; ?>

<?php
require_once("c://xampp/htdocs/library-php-mvc/view/head/footer.php");
?>