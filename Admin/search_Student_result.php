<?php
session_start();
require "header.php";
require "connection.php";
$roll_id=$_SESSION['rollno'];
$query="SELECT *FROM student where student_id = '$roll_id'";
$fire=mysqli_query($con,$query);
if(!$fire)
{
	echo "<script> alert('Recored Not Found'); </script>";
	header("Location:search_Student.php");
}
else
{
	while ($rows=mysqli_fetch_assoc($fire))
	{?>

	
<!DOCTYPE html>
<html>
<head>
	<title>Student Information</title>
	<style type="text/css">
	#info
	{
		width: 96%;
		height:500px;
		border:0px solid black;
		font-family: Agency Fb;
		font-size: 1.4em;
		margin: 0 auto;
	}	
	table
	{
		border:1px solid black;
		margin: 0 auto;
		margin-top:200px;	

		border-collapse: collapse;
	}
	th
	{
		background-color: orange;
	}
	tr,th,td
	{
	border:1px solid black;	
	}

	</style>
</head>
<body>
<div id="info">
<table>
<?php
echo "<tr><th>Student Id</th><th>Name</th><th>Father Name</th><th>Email</th><th>DOB</th><th>Contact Number</th><th>Gender</th><th>Address</th></tr>";
echo "<tr>";
echo "<td>".$rows["student_id"]. "<br>";
echo "<td>".$rows["firsrt_name"]." ".$rows['Last_name']."</td>";
echo "<td>".$rows["father_name"]."</td>";
echo "<td>".$rows["email"]."</td>";
echo "<td>".$rows["dob"]."</td>";
//echo "password : ".$rows["password"]."<br>";
echo "<td>".$rows["contact_nbr"]."</td>";
echo "<td>".$rows["gender"]."</td>";
echo "<td>".$rows["adress"]."</td>";
echo "</tr>";
//$img=$rows["pic_source"];
//echo "<img src='$img' height='250' width='150' alt='Student_picture'>";
}
	
}
?>
</table>
</div>
</body>
</html>
<?php require "footer.php"; ?>
