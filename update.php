<?php
require "actions/db_connect.php";

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM media WHERE id = {$id}";
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $title = $row['title'];
        $ISBN = $row['ISBN'];
        $image = $row['image'];
        $type = $row['type'];
        $description = $row['short_description'];
        $fname = $row['author_ first_name'];
        $lname = $row['author_last_name'];
        $puname = $row['publisher_ name'];
        $pAdd = $row['publisher_address'];
        $puDate = $row['publish_date'];

        if ($row['status'] == 1) {

            $val = 1;
            $Ava = 'Available';
            $colorspan = 'green';
        } else {
            $val = '';
            $Ava = 'Reserved';
            $colorspan = 'red';
        }
    } else {
        header("location: error.php");
    }
    mysqli_close($connection);
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit</title>
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
        <fieldset>
            <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src='<?= $image ?>'></legend>

            <form action="actions/a_update.php" method="post" enctype="multipart/form-data">
                <table class='table table-striped table-light'>
                    <tr>
                        <th>Title</th>
                        <td><input class='form-control' type="text" name="title" placeholder="Book Title" value="<?= $title ?>" /></td>
                    </tr>
                    <tr>
                        <th>ISBN</th>
                        <td><input class='form-control' type="text" name="isbn" placeholder="ISBN" value="<?= $ISBN ?>" /></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td><select class="form-select" aria-label="multiple select example" name="type">
                                <option selected value="<?= $type ?>"><?= $type ?></option>
                                <option value="CD">Cd</option>
                                <option value="DVD">DVD</option>
                                <option value="Book">Book</option>
                            </select></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><textarea class="form-control" rows="3" name="desc" placeholder="Short Description"><?= $description ?></textarea></td>
                    </tr>
                    <tr>
                        <th>Author Firstname</th>
                        <td><input type="text" class="form-control" id="firstname" name="fname" placeholder="Author_Firstname" value="<?= $fname ?>" /></td>
                    </tr>
                    <tr>
                        <th>Author Lastname</th>
                        <td><input type="text" class="form-control" id="lastname" name="lname" placeholder="Author_Lastname" value="<?= $lname ?>" /></td>
                    </tr>
                    <tr>
                        <th>Publicher Name</th>
                        <td><input type="text" class="form-control" id="publicherName" name="pname" placeholder="Publicher_Name" value="<?= $puname ?>" /></td>
                    </tr>
                    <tr>
                        <th>Publicher Address</th>
                        <td><textarea class="form-control" rows="3" name="publicheraddress" placeholder="Publicher_Address"><?= $pAdd ?></textarea></td>
                    </tr>
                    <tr>
                        <th>Publich_Date</th>
                        <td><input type="date" class="form-control" id="publicherDate" name="pdate" placeholder="Publich_Date" value="<?= $puDate ?>" /></td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="text" name="picture" value="<?= $image ?>" /></td>
                    </tr>
                    <tr>
                        <th>Is the Media Available? <span style='color:<?= $colorspan ?>'><?= $Ava ?></span></th>
                        <td><input type="checkbox" name="available" <?= ($val == 1) ? 'checked= checked' : ''; ?> /></td>
                    </tr>
                    <tr>
                        <input type="hidden" name="id" value="<?= $id ?>" />
                        <td><button class="btn btn-success" type="submit">Save Changes</button></td>
                        <td></td>
                    </tr>
                </table>
            </form>

        </fieldset>
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
</body>

</html>