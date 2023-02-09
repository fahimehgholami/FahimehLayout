<?php include "header.php" ?>


<!--I practiced here! It's not a part of exercises -->

<!--if else statement-->
<?php
echo "<hr> <h5> if else statement:</h5>";
$a = 6;
if ($a == 5){
    echo "The Condition Is TRUE";
}
else {
    echo "The Condition Is FALSE <br>";
    echo "The Number Is $a <br>";
}
?>
<!--Date Function -->
<?php
echo "<hr> <h5> if else statement with date function:</h5>";
$d = date("D");
if ($d == "Sat" or $d == "Sun") {
    echo "<br>Today Is $d. It Is Weekend.";
}
else {
    echo "Today Is $d. It Is a Working Day.<br>";
}
?>

<!--if else if statement-->
<?php 
echo "<hr> <h5> if else if statement:</h5>";
$d = date("D");
if ($d == "Sat" or $d == "Sun") {
    echo "<br>Today Is $d. It Is Weekend.";
}
elseif ($d == "Mon") {
    echo "<br> Today Is $d, It is the First Day Of The Week.";
}
elseif ($d == "Fri") {
    echo "<br> Have a Good Weekend.";
}
else {
    echo "Have a Nice Day!";
}
?>
<!--Switch statement-->
<?php
//number example
echo "<hr> <h5> switch statement example:</h5>";
$num = 5;
switch ($num) {
    case 5:
        echo "This is 5.";
        break;
        case 6:
            echo "This is 6.";
            break;
            case 7:
                echo "This is 7.";
                break;
    default:
        echo "This is neither 5, nor6, nor7.<br>";
}
//grade example
echo "<hr> <h5>  Grade example:</h5>";
$grade = "Excellent";
switch($grade){
    case "Excellent";
    echo "Your grade is 5.";
        break;
    case "Very Good";
    echo "<br>Your grade is 4.";
        break; 
    default:
    echo "<br>You Have Failed The Exam";
        break;
} 
//While Loop
echo "<hr> <h5> While Loop:</h5>";
$a = 5; 
while ($a <= 10){
    echo "The nimber is $a .<br>";
    $a++;
}
echo "<hr> <h5>Do While Loop:</h5>";
$num = 10;
do {
    echo "The number is $num. <br>";
    $num++;
}
while ($num <= 15);

//for Loop
echo "<hr> <h5>for Loop:</h5>";
for($c = 5; $c <= 10; $c++){
    echo "*<br>";
}
echo "<hr> <h5>foreach Loop:</h5>";
$x = array("Good", "Very Good", "Excellent");
foreach($x as $value){
    echo $value . "<br>";
}

?>
<?php include "footer.php" ?>