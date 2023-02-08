<?php include "header.php";

$fname =$_POST['fname'];
$lname =$_POST['lname'];
$dob =$_POST['bdate'];
$color =$_POST['color'];
echo " <h3> WELCOME $fname $lname. <br>
<br>Your Favorite color is:$color <br>
<br>Your date of bitrh is: $dob </h3><br> "
?>


<?php include "footer.php" ?>