<?php 
$title = "Exersice1";
include("header.php")?>

    <h1 style="color: orange; font-size: 18px;">Introduction </h1>
<?php
//opening tag
echo "Hello World! <br> ";
echo "Here's some information \"line\".";
?>

<h1 style="color: orange; font-size: 18px;"> 3.2. Write PHP code to display the following message.</h1>
<?php
echo "Hello World! My name is \"Fahimeh\" ";
?>

<h1 style="color: orange;font-size: 18px;"> Current Date </h1>
<?php 
echo date("m.d.Y")
?>

<h3 style="color: darkblue; font-size: 18px;">3.4 varibles in php</h3>
<?php 
$title1="PHP is interesting";
echo "<h1>" . $title1 . "</h1>";
?>

<h3 style="color: orange; font-size: 18px;"> 3.5 Table & Variables</h3>
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

<h3 style="color: orange; font-size: 18px;"> 4 screenshots of the development invironment</h3>
<img style="width: 100%; height: 400px;" src="colors.webp" alt="">


<?php include("footer.php")?>


