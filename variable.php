<?php include "header.php" ?>
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


<?php include "footer.php" ?>