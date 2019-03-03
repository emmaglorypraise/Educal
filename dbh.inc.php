<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "educal";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

try{
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
} catch(Exception $error) {
    echo 'There has been an error: ' . $error;
}
?>