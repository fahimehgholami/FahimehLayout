<?php include "header.php" ?>

<!--if else statement-->
<h5>if/else </h5>
<?php
$a = 6;
if ($a == 5){
    echo "The Condition Is TRUE";
}
else {
    echo "The Condition Is FALSE <br>";
    echo "The Number Is $a <br>";
}
?>
<br>
<!--Date Function -->
<h5> if else statement with date function</h5>
<?php
$d = date("D");
if ($d == "Sat" or $d == "Sun") {
    echo "<br>Today Is $d. It Is Weekend.";
}
else {
    echo "Today Is $d. It Is a Working Day.<br>";
}
?>
<br>

<!--if else if statement-->



<?php include "footer.php" ?>