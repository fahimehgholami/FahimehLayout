<?php include "header.php" ?>
<h3>In-class Task Control flow and loops 08.02.2023 (controlflow.php)</h3>

<!--4.1 -->
<?php
echo "<hr> <h5> Write a script that gets the current month and prints one of the following responses,
 depending on whether it's August or not:</h5>";
$month = date("F");
if ($month == "August") {
    echo "<br>It's $month , It's still holiday.";
}
else {
    echo "Not August, This is $month so, I don't have any holidays.<br>";
}
?>

<!--4.2-->
<?php
echo "<hr> <h5> Assign colour red and check to print one the following responses:</h5>";
$colour = "red";



?>

<!--4.3-->
<?php
echo "<hr> <h5>Write a program to grade students based on their total score for a subject. Use variable to hold the total score.</h5>";
$score = 75;
if ($score > 80) {
    echo "Excellent";
    }
    elseif ($score > 70 or $score <= 80) {
        echo "Great";
    }

    elseif ($score > 60 or $score <= 70) {
        echo "Good";
    }

    elseif ($score > 50 or $score <= 60) {
        echo "Pass";
    } else {
    echo "Fail";
}
?>
<!--4.4-->
<?php
echo "<hr><h5>Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting</h5>";
?>

<form action="action.php" method="post">
  <div class="row">
    <div class="col">
      <input class="form-control" type="text" placeholder="First Name" name="firstname" required><br>
    </div>
    <div class="col">
      <input class="form-control" type="number" placeholder="Age" name="age" required><br>
    </div>
  </div>
  <div class="row">
    <input class="form-control" type="submit" value="Submit" name="Submit1" >
  </div>
</form>
<!-- end of 4.4-->

<!--4.5-->
<?php
echo "<hr><h5>In task 5, you used SERVER; to get the browser name. 
Use Switch statement with strops function to print the name of the browser as below: 
If someone is using Chrome it should print, you are using Goolge Chrome….
</h5>";

?>
<?php include "footer.php" ?>