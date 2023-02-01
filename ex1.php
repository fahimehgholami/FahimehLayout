<?php 
$title = "Exersice1";
include("header.php")?>

    <h1 style="color: darkblue; font-size: 18px;"> 3.1. Write a simple PHP script to print your information (Name and your groupid).  </h1>
<?php
//opening tag
echo "Hello World! <br> ";
echo "This is a new \"line\".";
?>

<h1 style="color: darkblue; font-size: 18px;"> 3.2. Write PHP code to display the following message.</h1>
<?php
echo "Hello World! My name is \"Fahimeh\" ";
?>

<h1 style="color: darkblue;font-size: 18px;"> Current Date </h1>
<?php 
echo date("m.d.Y")
?>

<h3>3.4 varibles in php</h3>
<?php 
$title1="PHP is interesting";
echo "<h1>" . $title1 . "</h1>";
?>

<h3> 3.5 Table & Variables</h3>
<?php
$g1 = 5;
$g2 = 4;
$g3 = 5;
echo "
<table>
<tr>
<th> S.N </th> <th> Name </th> <th> Grade </th>
</tr>
<tr>
<th> 1 </th> <th> Fahimeh </th> <th> $g1 </th>
</tr>
<tr>
<th> 1 </th> <th> Ferdous </th> <th> $g2 </th>
</tr>
<tr>
<th> 1 </th> <th> John </th> <th> $g3 </th>
</tr>
</table>
";
?>

<h3> 4 screenshots of the development invironment</h3>
<img style="width: 700px; height: 400px;" src="screenshot.png" alt="">



<?php include("footer.php")?>


