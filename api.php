<?php
require "partials/dbconnect.php";
$apiuser =$_GET['user'];
$apikey = $_GET['key'];

$sql = "SELECT * FROM `api keys` WHERE `user_id` LIKE '$apiuser' AND `api_key` LIKE '$apikey'";
$result = mysqli_query($conn, $sql);


if ($result) {
    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($conn, $sql);
    $arr = mysqli_fetch_assoc($result);
    $data = array("Name" => $arr['user_name'], "Post" => $arr['user_post'], "Language" => $arr['user_language'], "Religion" => $arr['user_religion']);
    $jsonf = json_encode($data);
    echo $jsonf;
}

?>