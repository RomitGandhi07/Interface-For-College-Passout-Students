<?php
session_start();
include_once('dbconnection.php');
//$con=mysqli_connect("localhost","root","","finaldatabae");

if($con)
{
if(isset($_POST['Login']))
{
	$password=$_POST['password'];
	$ret= mysqli_query($con,"SELECT * FROM user_details WHERE email_id='".$_POST['email']."' and password='".$password."'");

$num=mysqli_fetch_array($ret);
if($num>0)
{
	
$_SESSION['username']=$_POST['email'];
//echo $_POST['email_id'];
//$_SESSION['id']=$num['id'];
//$host=$_SERVER['HTTP_HOST'];
//$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
//echo "success";
header('Location:index.php');
//exit();
}
else
{
//$_SESSION['action1']="Invalid username or password";
//$extra="index.php";
//$host  = $_SERVER['HTTP_HOST'];
//$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:login.php");
}
}
}
else{
	echo "error in con";
}

?>
