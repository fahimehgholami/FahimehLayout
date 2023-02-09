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
echo "<hr> <h5> unset() / var_dump() / array_values() </h5>";
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
var_dump($courses1);
echo "<h5> <br> One element deleted from the array below:</h5>";
unset($courses1['1']);
var_dump($courses1);
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