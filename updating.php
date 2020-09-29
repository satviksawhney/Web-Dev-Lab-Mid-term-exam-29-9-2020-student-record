<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con, 'assignment');

$name= $_POST['name'];
$age= $_POST['age'];
$rollno= $_POST['rollno'];
$marks1= $_POST['marks1'];
$marks2= $_POST['marks2'];

$s="select * from 'record' where 'name'='$name'";

$result=mysqli_query($con, $s);

$num=mysqli_num_rows($result);

if($num == 0)
{

$reg="UPDATE `record` SET `name`='$name',`age`='$age',`rollno`='$rollno',`marks1`='$marks1',`marks2`='marks2' WHERE 1";
mysqli_query($con, $reg);
echo "Record Successfully updated";
}

else
{
echo "Name doesn't exist in database.";
}

?>