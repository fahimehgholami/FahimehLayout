<?php
$servername = "db";
$username = "root";
$password = "password";
$dbname = "caap1s";
// creating connection
$conn = new mysqli ($servername, $username, $password, $dbname);

//checking the connection
if ($conn -> connect_error) {
    die("connection failed: " . $conn->connect_error);
}

?>