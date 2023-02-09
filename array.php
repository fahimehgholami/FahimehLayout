<?php include "header.php" ?>

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


<!--  echo "<hr> <h5> </h5>";  -->


<!--calculator... create a form  -->
<br>
<form action="" method = "GET" >
<input type= "number" placeholder = "Enter Your First Number" name="num1" required  >
<input type= "number" placeholder = "Enter Your second Number" name="num2" required>
<select name="operator">
<option value="add">Add</option>
<option value="sub">subtract</option>
<option value="mul">multiply</option>
<option value="div">divide</option>
</select>
<input type="submit" name = "cal" value="calculate">
</form>
<?php
if (isset($_GET["cal"])){

    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operator =  $_GET["operator"];

    switch($operator){
        case "add":
            $result = $num1 + $num2 ;
            break;
        case "sub":
            $resuat = $num1 - $num2 ;
            break; 
        case "mul":
            $result = $num1 * $num2 ;
            break;
        case "div":
            $result = $num1 / $num2 ;
            break;
        default:
            $result = "Error: You have not selected the correct operator";                
    }
}
if (isset($result)){
    echo "<h3> Result: $result </h3>";
}
?>

<?php include "footer.php" ?>