<?php
include_once "actions/db_connect.php";

if (isset($_GET['id'])) {
    $sql = "SELECT * FROM `media` WHERE id = " . $_GET['id'];
    $result = mysqli_query($connection, $sql);
    
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    // var_dump($row);
    // die();


$img = '';
$txtBody = '';


while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $img = "<img class='img-thumbnail' src='" . $row['image'] . "'>
";
    $txtBody = "{$row['short_description']}";
}
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
                        <a class="nav-link" href="readMedia.php">Books/CDs/DVDs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">

        <div class="card" style="width: 18rem;">
            <?= $img ?>
            <div class="card-body">
                <p class="card-text">
                    <?= $txtBody ?>
                </p>
                <!-- <a href="read.php" class="card-link"><img class="backImg" src="https://cdn-icons-png.flaticon.com/512/2099/2099166.png"></a> -->
            </div>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>