<?php 
$title= "Uptade your info";
include('header.php');
$a= $_GET['id'];
include('db.php');
$rasult = mysqli_query($conn,"select* from newstable where id ='$a' ");
$row = mysqli_fetch_array($result);
?>
<h5>Update your information below:</h5>
<form name="update" method="post" action="">
<h5>Add your news here:</h5>
<br>
<input type= "text" placeholder = "Add a title" name="title" required value="<?php echo $row['title'] ?>" >
<br>
<br>
<input type= "text" placeholder = "put a valid link for the source of the news" name="link" required value="<?php echo $row['link']; ?>" >
<br>
<br>
<select name="category" >
<option value="newstopic">Sport</option>
<option value="newstopic">politics</option>
<option value="newstopic">environment</option>
<option value="newstopic">fashion</option>
<option value="newstopic">economy</option>
<option value="newstopic">business</option>
<option value="newstopic">education</option>
<option value="newstopic">entertainment</option>
<option value="newstopic">others</option>
</select>
<br>
<br>
<textarea id="description" name="description" rows="4" cols="50"> description</textarea>
<br>
<br>
<input type="submit" name = "submit" value="submit">
</form>
<br>
<?php
if (isset($_post['update'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $query = mysqli_query($conn, "UPDATE" studentinfo det fname='f$fname',
    lname='$lname' where id= '$a'");
    if($query){
        echo "<h3></h3>"
else{
    echo""
}
?>
