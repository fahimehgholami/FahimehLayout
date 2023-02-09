<?php include "header.php" ?>
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
    echo "<h3> <br >Result: $result </h3>";
}
?>
<?php include "footer.php" ?>


