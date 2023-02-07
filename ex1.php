<?php 
$title = "Exersice1";
include "header.php" ?>
<!--3.1-->
<h3>Write a simple PHP script to print your information. </h3>
<?php
//opening tag
echo "Hello World! <br> ";
echo "Here's some information \"line\".";
?>

<!--3.2-->
<h3>Write PHP code to display the following message.</h3>
<?php
echo "Hello World! My name is \"Fahimeh\" ";
?>

<!--3.3-->
<h3> Current Date </h3>
<?php 
echo date("m.d.Y")
?>

<!--3.4-->
<h3>varibles in php</h3>
<?php 
$title1="PHP is interesting!";
echo "<h6>" . $title1 . "</h6>";
?>

<!--3.5-->
<h3>Table & Variables</h3>
<table class="table table-success table-striped">
<?php
$g1 = 5;
$g2 = 4;
$g3 = 5;
?>
  <tr>
    <th scope="col">S.N</th>
    <th scope="col">Name</th>
    <th scope="col">Grade</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Fahimeh</td>
    <td><?php echo $g1?></td>
  </tr>
  <tr>
    <td>2</td>
    <td>Ferdouse</td>
    <td><?php echo $g2?></td>
  </tr>
  <tr>
    <td>3</td>
    <td>John</td>
    <td><?php echo $g3?></td>
  </tr>
</table> 

<h3> Take a screenshot </h3>
<img style="width:100%; height: 600px;" src="img/screenshot.png" alt="">

<?php include "footer.php" ?>


