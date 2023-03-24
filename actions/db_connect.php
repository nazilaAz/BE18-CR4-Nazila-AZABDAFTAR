<?php
//Connect to Database
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$dbName = "be18_cr4_nazila-azabdaftar_biglibrary";

$connection = mysqli_connect($hostname, $username, $password, $dbName);

if (!$connection) {
    die("Connection failed " . mysqli_connect_errno());
}
