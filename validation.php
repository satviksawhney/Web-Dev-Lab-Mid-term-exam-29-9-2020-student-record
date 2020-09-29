<?php

session_start();


$con=mysqli_connect('localhost','root','');

mysqli_select_db($con, 'assignment');

$name= $_POST['username'];
$password= $_POST['password'];

$s="select `name`, `password` from 'usertable' where 'name'='$name' & 'password'='$password'";

$result=mysqli_query($con, $s);

$num=mysqli_num_rows($result);

if($num == 0)
{
	$_SESSION['username']=$name;
	header('location:home.php');
}
else
{

 echo "<script>alert('Incorrect Login Credentials.');</script>";

	header('location:index.php');

}


?>