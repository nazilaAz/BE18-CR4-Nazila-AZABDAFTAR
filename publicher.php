<?php
require "actions/db_connect.php";

$srtSql = "SELECT * FROM `media` GROUP BY `publisher_name` ASC";
$result = mysqli_query($connection, $srtSql);

$tbody = '';

if (mysqli_num_rows($result)  > 0) {
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $colortd = '';
    $pubcount = mysqli_num_rows($result);

    foreach ($rows as $row) {
       
        $tbody .= "<tr>
            
            <td>" . $row['publisher_name'] . "</td>
           

            <td>
            <form action='detailspub.php' method='post' enctype='multipart/form-data'>
            <button class='btn btn-warning btn-sm' type='submit'>Details</button>
            <input type='hidden' name='pubname' value='{$row['publisher_name']}' />
            </form>
            </td>
           
            </tr>";
    };
} else {
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}

mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
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
                        <a class="nav-link" href="read.php">Books/CDs/DVDs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="publicher.php">Publicher</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <fieldset class="read">
            <legend class='h2'>Publicher</legend>

            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <!-- <th scope="col">#</th> -->
                        <th scope="col">Publicher</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?= $tbody; ?>
                    <tr>
                        <td style="font-weight: 700;">There is <?= $pubcount ?> Publicher</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
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