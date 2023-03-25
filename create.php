<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Media</title>
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

        <fieldset>
            <legend class='h2'>Add Media</legend>
            <form action="actions/a_create.php" method="post" enctype="multipart/form-data">
                <table class='table table-striped table-light'>
                    <tr>
                        <th>Title</th>
                        <td><input class='form-control' type="text" name="title" placeholder="Book Title" /></td>
                    </tr>
                    <tr>
                        <th>ISBN</th>
                        <td><input class='form-control' type="text" name="isbn" placeholder="ISBN" /></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td><select class="form-select" aria-label="multiple select example" name="type">
                                <!-- <option selected>--SELECT TYPE--</option> -->
                                <option value="CD">Cd</option>
                                <option value="DVD">DVD</option>
                                <option value="Book">Book</option>
                            </select></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><textarea class="form-control" rows="3" name="desciption" placeholder="Short Description"></textarea></td>
                    </tr>
                    <tr>
                        <th>Author Firstname</th>
                        <td><input type="text" class="form-control" id="firstname" name="fname" placeholder="Author_Firstname" /></td>
                    </tr>
                    <tr>
                        <th>Author Lastname</th>
                        <td><input type="text" class="form-control" id="lastname" name="lname" placeholder="Author_Lastname" /></td>
                    </tr>
                    <tr>
                        <th>Publicher Name</th>
                        <td><input type="text" class="form-control" id="publicherName" name="pname" placeholder="Publicher_Name" /></td>
                    </tr>
                    <tr>
                        <th>Publicher Address</th>
                        <td><textarea class="form-control" rows="3" name="publicheraddress" placeholder="Publicher_Address"></textarea></td>
                    </tr>
                    <tr>
                        <th>Publich_Date</th>
                        <td><input type="date" class="form-control" id="publicherDate" name="pdate" placeholder="Publich_Date" /></td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="text" name="picture" /></td>
                    </tr>
                    <tr>
                        <th>Is the Media Available?</th>
                        <td><input type="checkbox" name="available" value="1" /></td>
                    </tr>
                    <tr>
                        <td><button class='btn btn-success' type="submit">Insert Product</button></td>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>
!