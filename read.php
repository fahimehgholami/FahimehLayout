<?php
$title = "Reading Data from the Database";
include("header.php");
include('db.php');
$sql = "select * from newstable";
//get the data from table
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo" <table class='table'><tr><th>id</th><th>Title</th><th>Category</th><th>Link</th><th>Description</th></tr>"; 
    while($row = $result -> fetch_assoc()){
    //create a table
    echo"
        <tr>
        <td>$row[id]</td>
        <td>$row[title]</td>
        <td>$row[category]</td>
        <td>$row[link]</td>
        <td>$row[description]</td>
        </tr>";
    }
   echo" </table>";
    }
    else {
        echo "No results";
    }
$conn -> close();

?>
<?php include("footer.php"); ?>

