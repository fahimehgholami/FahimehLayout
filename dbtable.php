<?php
$servername="db";
$username="addarticle";
$password="Nima1202@/";
$dbname="addarticle";
//creating connection
$conn=new mysqli ($servername, $username, $password, $dbname);

//check the connection
if($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}
?>