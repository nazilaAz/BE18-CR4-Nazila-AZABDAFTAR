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
        <?php require_once 'components/boot.php'?>
        <style type= "text/css">
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }  
            .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
            }     
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src='<?= $image ?>' >"></legend>
            <form action="actions/a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <th>Title</th>
                        <td><input class="form-control" type="text"  name="name" placeholder ="Title" value="<?= $title ?>"  /></td>
                    </tr>
                    <tr>
                        <th>ISBN</th>
                        <td><input class="form-control" type= "text" name="isbn" step="any"  placeholder="ISBN" value ="<?=$ISBN ?>"></td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td><input class="form-control" type="text" name= "image" value="<?= $image ?>" /></td>
                    </tr>
                    <tr>
                        <input type= "hidden" name= "id" value= "<?= $row['id'] ?>" />
                        <input type= "hidden" name= "image" value= "<?= $row['image'] ?>" />
                        <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                        <td><a href= "read.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>


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
                                <option selected>--SELECT TYPE--</option>
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
    </body>
</html>