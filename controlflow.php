<?php include "header.php" ?>

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

?>

<!--4.3-->
<?php
echo "<hr> <h5> Write a program to grade students based on their total score for a subject. Use variable to hold the total score.</h5>";
$grade = $num <80 ;
switch($grade){
    case $num < 80 ;
    echo "Excellent";
        break;
    case 70 < $num <80;
    echo "<br>Great";
        break; 
        case 60 < $num <70;
        echo "<br>Good";
            break; 
            case 50 < $num <60;
            echo "<br>Pass";
                break; 
    default:
    echo "<br>You Have Failed The Exam";
        break;
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