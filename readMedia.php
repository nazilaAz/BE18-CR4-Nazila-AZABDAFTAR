<?php
require "actions/db_connect.php";

$srtSqlCD = "SELECT * FROM `media` where `type`='CD'";
$srtSqlDVD = "SELECT * FROM `media` where `type`='DVD'";
$srtSqlBooks = "SELECT * FROM `media` where `type`='Book'";

$resultCD = mysqli_query($connection, $srtSqlCD);



$cardCD = '';
$imgCD = '';
$titleCD = '';
$shortDescCD = '';



if (mysqli_num_rows($resultCD)  > 0) {
    $rows = mysqli_fetch_all($resultCD, MYSQLI_ASSOC);
    foreach ($rows as $row) {
        $imgCD = "<img class='card-img' src='" . $row['image'] . "' alt='cdImage'>";
        $titleCD = $row['title'];
        $shortDescCD = $row['short_description'];
        $cardCD .= "
<div class='card mt-3' style='width: 25rem;'>
        <div class='row no-gutters'>
            <div class='col-sm-5'>
                 {$imgCD} 
            </div>
            <div class='col-sm-7'>
                <div class='card-body'>
                    <h5 class='card-title'> {$titleCD} </h5>
                    <p class='card-text'> {$shortDescCD}</p>
                    <a href='#' class='btn btn-primary'>View Profile</a>
                </div>
            </div>
        </div>
    </div>";
    }
} else {
    echo "No Data Available";
}

$resultDVD = mysqli_query($connection, $srtSqlDVD);

$cardDVD = '';
$imgDVD = '';
$titleDVD = '';
$shortDescDVD = '';

if (mysqli_num_rows($resultDVD)  > 0) {
    $rows = mysqli_fetch_all($resultDVD, MYSQLI_ASSOC);
    foreach ($rows as $row) {
        $imgDVD = "<img class='card-img' src='" . $row['image'] . "' alt='cdImage'>";
        $titleDVD = $row['title'];
        $shortDescDVD = $row['short_description'];
        $cardDVD .= "
<div class='card mt-3' style='width: 25rem;'>
        <div class='row no-gutters'>
            <div class='col-sm-5'>
                 {$imgDVD} 
            </div>
            <div class='col-sm-7'>
                <div class='card-body'>
                    <h5 class='card-title'> {$titleDVD} </h5>
                    <p class='card-text'> {$shortDescDVD}</p>
                    <a href='#' class='btn btn-primary'>View Profile</a>
                </div>
            </div>
        </div>
    </div>";
    }
} else {
    echo "No Data Available";
}

$resultBooks = mysqli_query($connection, $srtSqlBooks);

$cardBook = '';
$imgBook = '';
$titleBook = '';
$shortDescBook = '';

if (mysqli_num_rows($resultBooks)  > 0) {
    $rows = mysqli_fetch_all($resultBooks, MYSQLI_ASSOC);
    foreach ($rows as $row) {
        $imgBook = "<img class='card-img' src='" . $row['image'] . "' alt='cdImage'>";
        $titleBook = $row['title'];
        $shortDescBook = $row['short_description'];
        $cardBook .= "
<div class='card mt-3' style='width: 25rem;'>
        <div class='row no-gutters'>
            <div class='col-sm-5'>
                 {$imgBook} 
            </div>
            <div class='col-sm-7'>
                <div class='card-body'>
                    <h5 class='card-title'> {$titleBook} </h5>
                    <p class='card-text'> {$shortDescBook}</p>
                    <a href='#' class='btn btn-primary'>View Profile</a>
                </div>
            </div>
        </div>
    </div>";
    }
} else {
    echo "No Data Available";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Media</title>
    <?php require_once 'components/boot.php' ?>
    <link rel="stylesheet" href="components/css/style.css">
</head>

<body>
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


    
        <h3>CDs</h3>
        <?= $cardCD ?>
        <hr>
        <h3>DVDs</h3>
        <?= $cardDVD ?>
        <hr>
        <h3>DVDs</h3>
        <?= $cardBook ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>