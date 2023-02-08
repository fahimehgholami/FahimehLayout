<?php include "header.php"?>

<?php

//Create a simple html form in variable.php
if (isset($_POST['Submit'])){
    $fname =$_POST['fname'];
    $lname =$_POST['lname'];
    $dob =$_POST['bdate'];
    $color =$_POST['color'];
    echo " <h3> WELCOME $fname $lname. <br>
    <br>Your Favorite color is:$color <br>
    <br>Your date of bitrh is: $dob </h3><br> ";
}


// Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. 
 elseif (isset($_POST['Submit1'])) {
$firstname = $_POST['firstname'];
$age = $_POST['age'];

echo $age >= 18 ? "<h3>congratulations $firstname!<br> <br>You are eligble to VOTE." : " Sorry $firstname!<br><br>  You are not eligble to VOTE!</h3>";
 }
?>
<?php include "footer.php" ?>