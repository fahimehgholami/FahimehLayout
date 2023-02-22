<?php 
$title="JavaScript events and form validations";
include("header.php")
?>
<!-- create a simple button to know date-->
<hr>
<h5> A simple button to display date</h5>
<button onclick="this.innerHTML = Date()">
Click to know date
</button>
<hr>
<h5> Make a button and a place hollder as paragraph for date</h5>
<button onclick="getElementById('p1').innerHTML=Date()" >
Click to know date
</button>
<hr>
<h5>Change the backgroun-color </h5>
<!--changeColor=Function-->
<input type="color" id="bckground" onchange="changeColor()">
</form>



<?php 
include("footer.php")?>