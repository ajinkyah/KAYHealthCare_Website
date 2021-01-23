<?php

$uname =$_POST['ip'];
$pass = $_POST['ip1'];
 session_start();
 if(isset($_SESSION['uname']))
{
	echo "<h1>welcome".$_SESSION['uname']."</h1>";
	echo "<a href='doc.php'>Patient Data</a><br>";
	echo "<br><a href='logout.php'><input type=button value=logout name=lgout></a>";
	
}

else
{
 if(isset($_POST['uname']) == $uname &&  isset($_POST['pass']) == $pass)
 {
  $_SESSION['uname']=$uname;
  echo"<script>alert('username or password incorrect!')</script>";
  echo "<script>location.href='doclogin.html'</script>";
  }
 } 
?>