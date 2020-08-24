<?php 
session_start();
$class=$_SESSION['class'];
$section=$_SESSION['section'];
require "header.php";
require "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Fee Information
	</title>
	<style type="text/css">
	*
	{
		padding:0px;
		margin:0px;
	}
	#main_div
	{
		width: 100%;
		height: 520px;
		margin-top:120px;

	}
	table
	{
	width: 98%;
	height: auto;
	font-family: Agency Fb;
	font-size: 1.4em;
	margin:0 auto;
	margin-top:10px;

	}
	th
	{
		background-color: orange;
	}
	tr,td,th,table
	{
	border:1px solid black;
	border-collapse: collapse;
		
	}
	td
	{
		text-align: center;
	}
	#main_heading 
			{
				width:280px;
				height: 35px;
				background-color: orange;
				font-size: 1.9em;
				text-align: center;
				margin:0 auto;
				margin-top:10px;
				border-radius: 25px 5px;
				border:1px solid black; 
				font-family: Agency Fb;
			}

	</style>
</head>
<body>
	<div id="main_div">
			<h4 id="main_heading">List of Fee Paid  Student</h4>

<?php 
$qurey="SELECT *FROM fee WHERE class ='$class' AND section = '$section'";
$fire=mysqli_query($con,$qurey);
if($fire)
{	echo "<table><tr><th>Student Id</th><th>Fee Amount</th><th>Submission Date</th><th>Class</th><th>Section</th><th>Status</th></tr>";
	$row=mysqli_num_rows($fire);
	if($row > 0)
	{
		while ($rows=mysqli_fetch_assoc($fire))
		{
		echo "<tr>";
		echo "<td>".$rows['student_id']."</td>";
		echo "<td>".$rows['Fee_Amount']."</td>";
		echo "<td>".$rows['fee_sub_date']."</td>";
		echo "<td>".$rows['class']."</td>";
		echo "<td>".$rows['section']."</td>";
		echo "<td>".$rows['status']."</td>";
		echo "<tr>";
		}
	}
	echo "</table>";
}
?></div>
</body>
<?php  require"footer.php";?>
</html>