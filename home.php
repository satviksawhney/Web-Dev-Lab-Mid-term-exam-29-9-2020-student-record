<?php

session_start();
if(!isset($_SESSION['username']))
{
header('location:index2.php');
}

?>


<br></br>
<html>
<head>
Web technology Lab Mid term Assessment satvik sawhney 

<br></br>

Question: Make a web page for storing, updating and displaying student record (name, age, rollno, marks1, marks2) using php/nodejs and mysql
<br></br><br></br>
Answer:
</head>

<body style="background-color:#DF4F68;">

	<a href="logout.php" style="color:black;float:right;width: 66px;height: 30px;">click here to Logout</a>
	
<br></br>
<br></br>
<br></br>

<br></br>
<div class="bgimg-1">
  <div class="caption">
    <span class="border"> WELCOME TO </span><br>

<br></br>
    <span class="border">Student Records system</span>
  </div>
</div>





<br></br>


  <form action="storing.php" method="post">
    <label for="name" style="color:white;font-family:'Helvetica';background-color:#DF4F68;">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name.." style="background-color:#790023;color:white;font-family:'Helvetica';">

<br></br>
    <label for="age" style="color:white;font-family:'Helvetica';">Age</label>
    <input type="text" id="age" name="age" placeholder="Your age.." style="background-color:#790023;color:white;font-family:'Helvetica';">

<br></br>
  <label for="rollno" style="color:white;font-family:'Helvetica';">Roll no</label>
    <input type="text" id="rollno" name="rollno" placeholder="Your roll no.." style="background-color:#790023;color:white;font-family:'Helvetica';">

<br></br>
    <label for="marks1" style="color:white;font-family:'Helvetica';">Marks 1</label>
    <textarea id="marks1" name="marks1" placeholder="Write marks 1.." style="height:20px;background-color:#790023;color:white;font-family:'Helvetica';" ></textarea>

<br></br>
	   <label for="marks2" style="color:white;font-family:'Helvetica';">Marks 2</label>
    <textarea id="marks2" name="marks2" placeholder="Write marks 2.." style="height:20px;background-color:#790023;color:white;font-family:'Helvetica';" ></textarea>


<br></br>
<br></br>
<div class="bgimg-1">
  <div class="caption">
    <span class="border"> 1. Press submit to store the record </span><br>
  </div>
</div>

<br></br>
    <input type="submit"  value="Submit"  style="background-color:#4FDF5E;">
  </form>

<br></br>

<br></br>

<br></br>
<div class="bgimg-1">
  <div class="caption">
    <span class="border"> 2. All Records Displayed here: (refresh screen) </span><br>
  </div>
</div>


<br></br>





<?php 

$conn=mysqli_connect("localhost","root","","assignment");

$result=mysqli_query($conn,"SELECT * FROM record");
$resultChech=mysqli_num_rows($result);

if($resultChech > 0)
{
  while($row = mysqli_fetch_assoc($result))
{
echo $row['name']."<br>";
echo $row['age']."<br>";
echo $row['rollno']."<br>";
echo $row['marks1']."<br>";
echo $row['marks2']."<br>";
}
}

?>

<br></br>

<br></br>


<br></br>

<br></br>

<div class="bgimg-1">
  <div class="caption">
    <span class="border"> 3. Update a record (name should be same) </span><br>
  </div>
</div>


<br></br>

<br></br>


  <form action="updating.php" method="post">
    <label for="name" style="color:white;font-family:'Helvetica';background-color:#DF4F68;">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name.." style="background-color:#790023;color:white;font-family:'Helvetica';">

<br></br>
    <label for="age" style="color:white;font-family:'Helvetica';">Age</label>
    <input type="text" id="age" name="age" placeholder="Your age.." style="background-color:#790023;color:white;font-family:'Helvetica';">

<br></br>
  <label for="rollno" style="color:white;font-family:'Helvetica';">Roll no</label>
    <input type="text" id="rollno" name="rollno" placeholder="Your roll no.." style="background-color:#790023;color:white;font-family:'Helvetica';">

<br></br>
    <label for="marks1" style="color:white;font-family:'Helvetica';">Marks 1</label>
    <textarea id="marks1" name="marks1" placeholder="Write marks 1.." style="height:20px;background-color:#790023;color:white;font-family:'Helvetica';" ></textarea>

<br></br>
	   <label for="marks2" style="color:white;font-family:'Helvetica';">Marks 2</label>
    <textarea id="marks2" name="marks2" placeholder="Write marks 2.." style="height:20px;background-color:#790023;color:white;font-family:'Helvetica';" ></textarea>


<br></br>
<br></br>
<div class="bgimg-1">
  <div class="caption">
    <span class="border"> 3. Press submit to update the record </span><br>
  </div>
</div>

<br></br>
    <input type="submit"  value="Submit"  style="background-color:#4FDF5E;">
  </form>



</body>
</html>