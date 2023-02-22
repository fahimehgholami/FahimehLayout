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
<p id='p1'></p>
<hr>
<h5>Change the backgroun-color </h5>
<form>
<!--changeColor=Function-->
<input type="color" id="background" onchange="changeColor()">
</form>
<hr>
<h5>Change the font-color </h5>
<form>
<input type="color" id="fcolor" onchange="changeFcolor()">
</form>
<hr> 
<h5> on mouse over & on mouse out:  </h5>
<span onmouseover="this.style.color='blue';
this.style.backgroundColor='yellow';
this.style.fontSize ='2em';" 

onmouseout="this.style.color='pink';
this.style.backgroundColor='red';
this.style.fontSize ='2em';">
on mouse over & out
</span>
<?php 
include("footer.php")?>