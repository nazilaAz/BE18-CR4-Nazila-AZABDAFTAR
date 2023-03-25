<?php
require_once 'db_connect.php';

if ($_POST) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $image = $_POST['picture'];
    $ISBN = $_POST['isbn'];
    $short_description = $_POST['desc'];
    $type = $_POST['type'];
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $publishername = $_POST['pname'];
    $publisheraddress = $_POST['publicheraddress'];
    $publishdate = $_POST['pdate'];

    if (isset($_POST['available'])) {
        $status = 1;
    } else {
        $status = 0;
    }


    $sql = "UPDATE media SET `title`='$title',`image`='$image',`ISBN`='$ISBN',`short_description`='$short_description',`type`='$type',`author_first_name`='$firstname',`author_last_name`='$lastname',`publisher_name`='$publishername',`publisher_address`='$publisheraddress',`publish_date`='$publishdate',`status`='$status' WHERE id = {$id}";
    // var_dump($sql);
    // die();

    if (mysqli_query($connection, $sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . mysqli_connect_error();
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
    <title>Update</title>
    <?php require_once '../components/boot.php' ?>
</head>

<body>
    <div class="container">
        <div class="mt-3 mb-3">
            <h1>Update request response</h1>
        </div>
        <div class="alert alert-<?php echo $class; ?>" role="alert">
            <p><?php echo ($message) ?? ''; ?></p>

            <a href='../read.php'><button class="btn btn-warning" type='button'>Back</button></a>
            <!-- <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a> -->
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

</body>

</html>