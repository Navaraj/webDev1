<?php session_start();
if(isset($_POST["submit"]))
{
$user=$_POST["username"];
$pw=$_POST["password"];

if($user=="navaraj"&& $pw=="root")
{
	$_SESSION["username"]=$_POST["username"];
echo "You are successfully logged in $user";
header("location:home.php");
}	
else {
	echo"Wrong username or password";
	}
}
?>