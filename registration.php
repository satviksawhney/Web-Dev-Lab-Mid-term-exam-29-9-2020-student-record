<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con, 'assignment');

$name= $_POST['username'];
$password= $_POST['password'];

$s="select * from usertable where 'name'='$name'";

$result=mysqli_query($con, $s);

$num=mysqli_num_rows($result);

if($num==1)
{
	echo "Username already taken.";
}
else
{
$reg="INSERT INTO `usertable`(`name`, `password`) VALUES ('$name','$password')";
mysqli_query($con, $reg);
echo "Registration Successful";
}


?>