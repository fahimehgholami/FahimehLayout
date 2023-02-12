<?php include "../layout/header.php" ?>

<!--In-class Task Arrays-->

<!--5.1-->
<?php
echo "<hr> <h5> Write a php script to display courses as list: </h5>";

$courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");
$index = count($courses);
for ($i = 0; $i < $index; $i++) {
    echo "<li>$i) $courses[$i] <br>";
}
?>


<!--5.2-->
<?php 
echo "<hr> <h5> unset() / var_dump() / array_values(): </h5>";
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
var_dump($courses1);
echo "<h5> <br> One element deleted from the array below:</h5>";
unset($courses1['1']);
var_dump($courses1);
?>

<!--5.3-->
<?php 
echo "<hr> <h5>Sort the following array: <br><br> 1=PHP, 2=HTML, 3=JavaScript, 4=CMS, 5=Project </h5>";
$courses3=array(
"1" => "PHP", 
"2" => "HTML", 
"3" => "JavaScript",
"4" => "CMS",
"5" => "Project");

echo "order sort by value:<br>";
asort($courses3);
    foreach ($courses3 as $key => $value) {
        echo "a. $key = $value <br>";}
        echo "<br>";
echo "order sort by key:<br>";
ksort($courses3);
    foreach ($courses3 as $key => $value) {
        echo "b. $key = $value <br>";}
        echo "<br>";
echo "order sort by value:<br>";
asort($courses3);
    foreach ($courses3 as $key => $value) {
        echo "c. $key = $value <br>";} 
        echo "<br>";
echo "order sort by key:<br>";
Krsort($courses3);
    foreach ($courses3 as $key => $value) {
        echo "d) $key = $value <br>";
}  
?>

<!--5.3-->
<?php 
    echo "<hr> <h5> Change all values to upper case:</h5>";
$courses4=array("php", "html", "javascript", "cms", "project");

var_dump($courses4);

for ($i = 0; $i < count($courses4); $i++) {
    $courses4[$i] = strtoupper($courses4[$i]);
    echo "<li>" . $courses4[$i] . "<br>";
}
?>

<!--5.4-->
<?php 
    echo "<hr> <h5>List all your favorite colors and their hexadecimal equivalents: </h5>";
$fav_color = array('Pink' => '#FCC2FC', 'Grey' => '#BDCDD6' , 'Peach'=> '#FFD4D4', 'Yellow' => '#F8F988' , 'Black' => '#000000', 'Beige' => '#F8EAD8');
foreach ($fav_color as $key => $hex) {
    echo "<li>One of my favorite colors ==> $key : $hex <br> ";
    }
?>

<!--5.5-->
<?php 
    echo "<hr> <h5>Recorded temperatures :  <br> 78, 60, 62, 68, 71, 68, 73,
    85, 66, 64, 76, 63, 75, 76, 73,<br> 68, 62, 73, 72, 65, 
    74, 62, 62, 65, 64, 68, 73, 75, 79, 73.<br></h5>";

    echo "<br><h5> Calculation average temperature:<br> </h5>";

    $month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
    68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73.";

// what is explode and what does the below code do? : 
/*answer:

explode() is a built in function in PHP used to split a string in different strings. 
The explode() function splits a string based on a string delimiter, i.e. 
it splits the string wherever the delimiter character occurs.
 This functions returns an array containing the strings formed by splitting the original string.
 Parameters: separator /OriginalString /NoOfElements :

 Here we used separator.
 whenever this character is found in the string it symbolizes end of one element of the array and start of another.
 */
$temp_array = explode(',', $month_temp);
$tot_temp = 0;


// What is count?
/*
answer:
count($array, mode)
This inbuilt function of PHP is used to count the current elements in the array.
 The function might return 0 for the variable that has been set to an empty array.
 Also for the variable which is not set the function returns 0. */

$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
// what does sort do?
/*answer:
we used rsort() and Krsort() in previous exercise.
The sort() function is an inbuilt function in PHP and is used to sort an array in ascending order.
It sorts the actual array and hence changes are reflected in the original array itself. 
The function provides us with 6 sorting types, according to which the array can be sorted.
*/
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";


// explain the following loop
/*answer:
here we used 'for loop' [that is used when the user knows how many times the block needs to be executed.
The for loop contains the initialization expression, test condition,
 and update expression (expression for increment or decrement).]

We are printing the five highest array values here. 
we also used ' $i = $temp_array_length-5 ' which it means we want to get the total values in this array except the last 5 in it.
 $i < $temp_array_length ==> means we want to get 5remaining in this array through the loop.

*/
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>

<?php include "../layout/footer.php" ?>