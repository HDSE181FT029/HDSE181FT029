<?php

if(isset($_COOKIE["user"]))
{
$user = $_COOKIE["user"];
 //set some details
echo"Assignment 2 "."<br/>"."<br/>";
echo"Index page "."<br/>"."<br/>";
    //set user name to show
echo"welcome to, $user "."<br/>";
}
else
{
header('Location : assignmentSS2.php');
}
echo'<input type =\'submit\' name=\'logout\' value=\'logout\'>';
if(isset($_POST['logout']))
  {
   setcookie("user","$user",time()-360);
   header("Refresh:0");
 //header('Location : assignmentSS2.php');
  }


?>