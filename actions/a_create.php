<?php
require_once "db_connect.php";

if ($_POST) {

    $title = $_POST['title'];
    $picture = $_POST['picture'];
    $isbn = $_POST['isbn'];

    $desc = $_POST['desciption'];
    $type = $_POST['type'];
    $fname = $_POST['fname'];

    $lname = $_POST['lname'];
    $pname = $_POST['pname'];
    $paddress = $_POST['publicheraddress'];

    // $pdate = $_POST['pdate'];
    $pdate = date("Y-m-d",strtotime($_POST['pdate']));
    $type = $_POST['type'];




    // $sqlstr = "INSERT INTO media (name, price, picture) VALUES ('$name', $price,'$picture->fileName')";

    $sqlstr = "INSERT INTO `media`(`title`, `image`, `ISBN`, `short_description`, `type`, `author_ first_name`, `author_last_name`, `publisher_ name`, `publisher_address`, `publish_date`) VALUES ('$title','$picture','$isbn','$desc','$type','$fname','$lname','$pname','$paddress','$pdate')";
    // var_dump($sqlstr);
    // die();

    if (mysqli_query($connection, $sqlstr) === true) {
        $class = "success";
        $message = "The entry below was successfully created <br>
            <table class='table w-50'><tr>
            <td> $title </td>
            <td> $desc </td>
            </tr></table><hr>";
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
    }
    mysqli_close($connection);
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BE18-CR4-Nazila AZABDAFTAR</title>
    <?php require '../components/boot.php' ?>
    <link rel="stylesheet" href="../components/css/style.scss">
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
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="readMedia.php">Books/CDs/DVDs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Create request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>