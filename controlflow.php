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



<!--4.5-->


<?php include "footer.php" ?>