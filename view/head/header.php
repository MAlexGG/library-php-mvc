<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php
            echo (empty($_GET["id"])) ?
                ((strpos($_SERVER['REQUEST_URI'], 'create')) ? "Add a book" : "Library") : ((strpos($_SERVER['REQUEST_URI'], "show")) ? "Book " . $_GET["id"] : "Updating book " .  $_GET["id"]);
            ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./resources/css/styles.css">
    <link rel="stylesheet" href="../../resources/css/styles-book.css">
</head>

<body class="container-fluid p-0 ct-body">
    <div class=" container-fluid bg-dark p-2">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/library-php-mvc/index.php">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                User
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="/library-php-mvc/view/book/index.php">Books</a></li>
                                <li><a class="dropdown-item" href="/library-php-mvc/view/book/create.php">Create Book</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid p-0">