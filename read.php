<?php
require "actions/db_connect.php";

$srtSql = "SELECT * FROM `media` ORDER BY type";
$result = mysqli_query($connection, $srtSql);

$tbody = '';

if (mysqli_num_rows($result)  > 0) {
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $colortd = '';

    foreach ($rows as $row) {
        if ($row['status'] == 1) {
            $row['status'] = 'Available';
            $colortd = "green";
        } else {
            $row['status'] = 'Reserved';
            $colortd = "red";
        }

        $tbody .= "<tr>
            <td><img class='img-thumbnail rounded-circle' style='width: 10rem; height: 8.8rem' src='" . $row['image'] . "'</td>
            <td>" . $row['type'] . "</td>
            <td>" . $row['title'] . "</td>
            <td>" . $row['short_description'] . "</td>

            <td style='color:$colortd;' >" . $row['status'] . "</td>

            <td>
            <a href='details.php?id=" . $row['id'] . "'><button class='btn btn-warning btn-sm' type='button'>Details</button></a></td>
            <td><a href='update.php?id=" . $row['id'] . "'><button class='btn btn-success btn-sm' type='button'>Update</button></a></td>
            <td><a href='delete.php?id=" . $row['id'] . "'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a>
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
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 60%;
        }

        .img-thumbnail {
            width: 70px !important;
            height: 70px !important;
        }
    </style>

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
            <legend class='h2'>List of Media</legend>

            <a href="create.php" type="button" role="button" class="btn btn-info">
                Add new
            </a>
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <!-- <th scope="col">#</th> -->
                        <th scope="col">Picture</th>
                        <th scope="col">Type</th>
                        <th scope="col">Title</th>
                        <th scope="col">Descriptin</th>
                        <th scope="col">status</th>

                        <!-- <th >Show Details</th> -->
                        <th scope="col">Action</th>
                        <th scope="col">Action</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <?php echo $tbody; ?> -->
                    <?= $tbody; ?>
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