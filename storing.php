<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con, 'assignment');

$name= $_POST['name'];
$age= $_POST['age'];
$rollno= $_POST['rollno'];
$marks1= $_POST['marks1'];
$marks2= $_POST['marks2'];


$reg="INSERT INTO `record`(`name`, `age`, `rollno`, `marks1`, `marks2`) VALUES ('$name','$age','$rollno','$marks1','$marks2')";
mysqli_query($con, $reg);
echo "Registration Successful";


?>