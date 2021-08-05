<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "apitest";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die('Cannot connect to the server');
}
?>