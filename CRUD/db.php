<?php
$servername = "db";
$username = "root";
$password = "password";
$dbname = "capp1";
// creating connection
$conn = new mysqli ($servername, $username, $password, $dbname);

//checking the connection
if ($conn -> connect_error) {
    die("connection failed: " . $conn->connect_error);
}

?>