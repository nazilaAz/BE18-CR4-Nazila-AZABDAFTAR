<?php
include_once "actions/db_connect.php";

if (isset($_GET['id'])) {
    $sql = "SELECT * FROM `media` WHERE id = " . $_GET['id'];
    $result = mysqli_query($connection, $sql);

    $row = mysqli_fetch_assoc($result);
    // echo $row['image'];
    // echo "<pre>";
    // var_dump($row);
    // echo "</pre>";
    // die();


    $img = '';
    $desc = '';
    $title = '';
    $author = '';
    $isbn = '';
    $status = '';
    $type ='';
    $color = 'green';


    $img = "<img class='img-thumbnail' src='" . $row['image'] . "'>";
    $desc = "{$row['short_description']}";
    $title = "{$row['title']}";
    $author = "{$row['author_first_name']} {$row['author_last_name']}";
    $isbn = "{$row['ISBN']}";

    if ($row['status'] == 1) {
        $status = 'Available';
    } else {
        $status = 'Reserved';
        $color = 'red';
    }
    $type ="{$row['type']}";
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "components/boot.php" ?>
    <link rel="stylesheet" href="components/Css/style.css">
    <title>Details</title>
</head>

<body id="details">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand txtFont"><img src="https://cdn-icons-png.flaticon.com/512/9389/9389532.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top"> Public Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="read.php">Books/CDs/DVDs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="publicher.php">Publicher</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container" id="mainCoantiner">
        <div class="margin-body">

            <div>
                <div class="starsec"></div>
                <div class="starthird"></div>
                <div class="starfourth"></div>
                <div class="starfifth"></div>
            </div>
        </div>
        <div class='card mt-3' style="width: 60%;">
            <div class='row no-gutters'>
                <div class='col-sm-5'>
                    <?= $img ?>
                </div>
                <div class='col-sm-7'>
                    <div class='card-body'>
                        <h3 class='card-title'> "<?= $title ?>" </h3>
                        <h5 class='card-title'>ISBN: <?= $isbn ?> </h5>
                        <p class='card-text'>About this <?= $type?>: <br><?= $desc ?></p>
                        <p class='card-text'>Author: <?= $author ?></p>
                        <p class='card-text' style='color : <?= $color ?>'> <?= $status ?></p>

                        <a href='read.php' role='button' class='btn btn-warning'>I've read.</a>
                    </div>
                </div>
            </div>
        </div>
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <i class="bi bi-book"></i>
                <span class="mb-3 mb-md-0 text-muted">&copy; PHP-Mysql CodeReview, CodeFactory</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><i class="bi bi-twitter"></i></li>
                <li class="ms-3"><i class="bi bi-facebook"></i></li>
                <li class="ms-3"><i class="bi bi-instagram"></i></li>
                <li class="ms-3"><i class="bi bi-youtube"></i></li>
            </ul>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>