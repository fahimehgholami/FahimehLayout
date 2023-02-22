<?php 
$title="JavaScript events and form validations";
include("header.php")
?>
<!-- create a simple button to know date-->
<h5> A simple button to display date</h5>
<button onclick="this.innerHTML = Date()">
Click to know date
</button>
<h5> Make a button and a place hollder as paragraph for date</h5>
<button onclick="getElementById('p1').innerHTML=Date()" >
Click to know date
</button>
<?php 
include("footer.php")?>