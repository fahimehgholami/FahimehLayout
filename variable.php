<?php include "header.php" ?>

<!-- form -->
<h3>
    Exxercise 3 In-class Task Variable & Operators
</h3>
<h5>Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using tag: Hello …., You are welcome to my site. </h5>
<form action="action.php" method="post"> 

    <div class="row">
    <div class="col">
    <input type="text" name="fname" required  placeholder="First Name" class="form-control" > </div>
    <div class="col">
    <input type="text" name="lname"  required  placeholder="Last Name"  class="form-control"> </div>
    </div>


    <div class="row">
    <div class="col">
    <input type="date" name="bdate" required  placeholder="Birth Date" class="form-control" >  </div>
    <div class="col">
    <input type="color" name="color" required  placeholder="Favorite Color" class="form-control" > </div>
    </div>


    <div class="row">
    <div class="col">
    <input type="submit" value="Submit" placeholder="Submit" class="form-control">  </div>
    </div>

</div>
</form>
<br>
<!-- table -->
 <h3>Table</h3>
 <h5>Prepare a simple html table and apply bootstrap style to the table. </h5>
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
<br>
<!--  string function -->
<h3> PHP Script</h3>
<h5> Write a PHP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string. (Hint: string function)
</h5>
<h5>The length of the string:</h5>
<?php
$text1= "Versions of the Lorem ipsum text have been used in typesetting at least since the 1960s, when it was popularized by advertisements for Letraset transfer sheets. Lorem ipsum was introduced to the digital world in the mid-1980s, when Aldus employed it in graphic and word-processing templates for its desktop publishing program PageMaker. ";
$text2= "Other popular word processors, including Pages and Microsoft Word, have since adopted Lorem ipsum, as have many LaTeX packages, web content managers such as Joomla! and WordPress, and CSS libraries such as Semantic UI.";
$text3= $text1.$text2;
echo strlen($text3);
?>
<br>

<!--   Add up the numbers -->
<h3>Add up the numbers</h3>
<h5>Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and echo statement to output your answer.
</h5>

<?php 
$number1= 298 ;
$number2= 234 ;
$number3= 46 ;
$total=$number1 + $number2 + $number3 ;
echo "Numbers: 298, 234 and 46, Total = $total";
?>
<br>

<?php include "footer.php" ?>