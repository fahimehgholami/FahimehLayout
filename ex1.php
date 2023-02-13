<?php 
$title = "Exersice1";
include "../layout/header.php" ?>
<h3>In-class Task 31.01.2023 (ex1.php)</h3>
<!--3.1-->
<?php
echo "<hr> <h5>Use Boilerplate to get the initial part of the HTML document and update the required information. </h5>";
echo "Hello World! <br> ";
echo "Here's some information \"line\".";
?>

<!--3.2-->
<?php
echo "<hr><h5>Write a simple PHP script to print your information</h5>";
echo "Hello World! My name is \"Fahimeh\" ";
?>

<!--3.3-->
<?php 
echo "<hr><h5>Write the PHP code in to display the current date. </h5>";
echo date("m.d.Y")
?>

<!--3.4-->
<?php 
echo "<hr> <h5>Put this variable as a title marked as h1 (heading 1) in your HTML document. </h5>";
$title1="PHP is interesting!";
echo "<h6>" . $title1 . "</h6>";
?>

<!--3.5-->
<table class="table table-success table-striped">
<?php
echo "<hr><h5>Use HTML table into echo and include 3 columns S.n., Name, and grade. Your table should look like the one below:</h5>";
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

<?php
echo "<hr><h5> Take a screenshot </h5>";
?>
<img style="width:100%; height: 600px;" src="/img/screenshot.png" alt="">

<?php include "../layout/footer.php" ?>


