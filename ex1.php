<?php 
$title = "Exersice1";
include "header.php" ?>
<!--3.1-->
<h1>Write a simple PHP script to print your information. </h1>
<?php
//opening tag
echo "Hello World! <br> ";
echo "Here's some information \"line\".";
?>

<!--3.2-->
<h1>Write PHP code to display the following message.</h1>
<?php
echo "Hello World! My name is \"Fahimeh\" ";
?>

<!--3.3-->
<h1> Current Date </h1>
<?php 
echo date("m.d.Y")
?>

<!--3.4-->
<h3>varibles in php</h3>
<?php 
$title1="PHP is interesting!";
echo "<h1>" . $title1 . "</h1>";
?>

<!--3.5-->
<h3>Table & Variables</h3>
<?php
$g1 = 5;
$g2 = 4;
$g3 = 5;
echo "
<table>
<tr>
<th> S.N </th>
 <th> Name  </th>
  <th> Grade </th>
</tr>
<tr>
<th> 1 </th> 
<th> Fahimeh </th> 
<th> $g1 </th>
</tr>
<tr>
<th> 1 </th> 
<th> Ferdous </th> 
<th> $g2 </th>
</tr>
<tr>
<th> 1 </th>
 <th> John </th> 
 <th> $g3 </th>
</tr>
</table>
";
?>
<h3> Take a screenshot </h3>



<?php include "footer.php" ?>

