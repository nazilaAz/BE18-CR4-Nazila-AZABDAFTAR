<?php
include_once "actions/db_connect.php";

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM media WHERE id = {$id}";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) == 1) {
        $title = $row['title'];
        $isbn = $row['ISBN'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connection);
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Media</title>
    <?php require_once 'components/boot.php' ?>
    <link rel="stylesheet" href="components/css/style.css">
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 70%;
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
                        <a class="nav-link" href="readMedia.php">Books/CDs/DVDs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <fieldset>
        <legend class='h2 mb-3'>Delete request <img class='img-thumbnail rounded-circle' src='<?= $row['image'] ?>'></legend>
        <h5>You have selected the data below:</h5>
        <table class="table w-75 mt-3">
            <tr>
                <td><?= $title ?></td>
            </tr>
        </table>

        <h3 class="mb-4">Do you really want to delete this Media?</h3>
        <form action="actions/a_delete.php" method="post">
            <input type="hidden" name="id" value="<?= $id ?>" />
            <!-- <input type="hidden" name="picture" value="<?php echo $picture ?>" /> -->
            <button class="btn btn-danger" type="submit">Yes, delete it!</button>
            <a href="read.php"><button class="btn btn-warning" type="button">No, go back!</button></a>
        </form>
    </fieldset>
</body>

</html>