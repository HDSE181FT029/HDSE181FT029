<html>
<head><title>AssignmentSS1</title><head/>
<body>
<h1>GESTBOOK</h1>

<form name="comment" method="post" action="#">
<label><h3>Enter your name<h3/><label/>
<label>Name<label/><input type ="text" name= "name"/>
<label><h3>pless enter your comment :</h3><label/>

<textarea cols="75" rows="10" placeholder="your comment please" name="comm" ></textarea><br>
  <input type="submit" name="btncom" value=" Send  comment" />
  
 </form>
<?php

if(isset($_POST["btncom"]))
{     $name = $_POST["name"];
	//$type = $_POST["user"];
	$comment = $_POST["comm"];
	
	$con= mysqli_connect("localhost","root","");
	mysqli_select_db($con,"nibm");
	$sql = "INSERT INTO comment (type, user_comment) VALUES('$name','$comment')";
	$result = mysqli_query($con,$sql);
	
	echo"last comment is........ ".$comment;
	
}

?>


</body>
</html>