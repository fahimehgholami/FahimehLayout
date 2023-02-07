<?php include "header.php";

$fname =$_POST['fname'];
$lname =$_POST['lname'];
$dob =$_POST['bdate'];
$color =$_POST['color'];
echo " <h3> WELCOME $fname $lname. 
Your Favorite color is:$color
Your date of bitrh is: $dob </h3> "
?>


<?php include "footer.php" ?>