<?php

?>

<html>
<head>
<title>assignment_SS_2</title>
</head>
<body>

<h2>Assignment 2<h2/>
<h2>Longin Form<h2/>
<table align="center">
<form name="frmLogin" method="post" action="#">

<tr bgcolor="green"><td>Username:</td> <td ><input type="text" name="txtUN" /><br />   </td></tr>
<tr bgcolor="green"><td>Password: </td><td ><input type="password" name="txtPW" /><br />  </td> </tr>

<tr><td><input type="submit" name="btnLogin" value="Login" /></td></tr>

</form>
</table>




<?php
if(isset($_COOKIE["user"]))
{ 
            header("Location:assignmentWellcomeSS2.php");
}
else
{	
        if(isset($_REQUEST["btnLogin"]))
    {
	//Accept data from form
	$un = $_REQUEST["txtUN"];
	$pw = $_REQUEST["txtPW"];
	
	//Select data from table
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"nibm");
	
	$sql = "Select * from log where user='$un' and password='$pw'";
	$res = mysqli_query($con,$sql);
	//<a href="fifth.html"/>
	if($row = mysqli_fetch_array($res))
	    {
		setcookie("user", $un, time()+360);
		header("Location:assignmentWellcomeSS2.php");
	    }
	else
	    {
		echo "Invalid Username or Password";
	    }
   }
}
?>
</body>
</html>