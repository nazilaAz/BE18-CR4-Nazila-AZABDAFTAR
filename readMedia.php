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
<div class='card mt-3'>
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
<div class='card mt-3'>
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
<div class='card mt-3'>
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

<body id="media">
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
    <a href="create.php" type="button" role="button" class="btn btn-info mt-3">
            Add new Media to List
        </a>
        <div class="row row-cols-3 mt-5">
            <!-- <a href="#books" id="submitBook"> -->
            <div class="col">
                <img class="img-thumbnail imgTop" src="https://img.freepik.com/free-photo/book-library-with-open-textbook_1150-5920.jpg?size=626&ext=jpg&uid=R68135291&ga=GA1.1.1556330073.1677068126&semt=sph">
                <h5 class="text-center">Books</h5>
            </div>
            <!-- </a> -->
            <!-- <a href="#cds" id="submitCd"> -->
            <div class="col">
                <img class="img-thumbnail imgTop" src="https://img.freepik.com/premium-photo/cds-text-wooden-blocks-financial-business-concept-brown-background_384017-5325.jpg?size=626&ext=jpg&uid=R68135291&ga=GA1.1.1556330073.1677068126&semt=sph">
                <h5 class="text-center">CDs</h5>
            </div>
            <!-- </a> -->
            <!-- <a href="#dvds" id="submitDvd"> -->
            <div class="col">
                <img class="img-thumbnail imgTop " src="https://img.freepik.com/free-photo/cd-with-headphones_23-2148133562.jpg?size=626&ext=jpg&uid=R68135291&ga=GA1.1.1556330073.1677068126&semt=sph">
                <h5 class="text-center">DVDs</h5>
            </div>
            <!-- </a> -->

        </div>
        <div class="row row-cols-3 mt-5">
            <div class="col" id="books">
                <?= $cardBook ?>
            </div>
            <div class="col" id="Cds">
                <?= $cardCD ?>
            </div>
            <div class="col" id="Dvds">
                <?= $cardDVD ?>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <!-- <script>
        var submitbookbtn = document.getElementById('submitBook');
        let buttonBookClicked = false;
        let buttonCDClicked = false;
        let buttonDVDClicked = false;
        submitbookbtn.addEventListener('click', function handleClick() {
            // console.log('Submit button is clicked');
            document.getElementById("books").style.display = "block";
            if (buttonBookClicked) {
                // console.log('Submit button has already clicked');
                document.getElementById("Cds").style.display = "none";
                document.getElementById("Dvds").style.display = "none";
                // buttonBookClicked = true;
            }
            buttonBookClicked = true;
            if(buttonCDClicked){
                document.getElementById("books").style.display = "none";
                document.getElementById("Dvds").style.display = "none";
            }
            buttonBookClicked = true;
            if(buttonDVDClicked){
                document.getElementById("books").style.display = "none";
                document.getElementById("Cds").style.display = "none";
            }
            buttonDVDClicked = true;
        });

        // var submitCds = document.getElementById('aCds');
        // let cdsClicked = false;
        // submitButton.addEventListener('click', function handleClick() {
        //     console.log('Submit button is clicked');
        //     document.getElementById("books").style.display = "block";
        //     if (cdsClicked) {
        //         console.log('Submit button has already clicked');
        //         document.getElementById("aCds").style.display = "none";
        //         document.getElementById("aDvds").style.display = "none";
        //     }
        //     cdsClicked = true;
        // });
    </script> -->
</body>

</html>